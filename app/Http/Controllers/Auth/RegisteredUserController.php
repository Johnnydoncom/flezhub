<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Package;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Rules\CouponRule;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'package' => ['required', 'integer', 'exists:packages,id'],
            'password' => ['required', Rules\Password::defaults()],
            'coupon' => ['required', 'string', new CouponRule(), 'max:255'],
        ]);

        $package = Package::find($request->package);
        $coupon = Coupon::whereCode($request->coupon)->first();
        if($package->amount > $coupon->value ){
            return redirect()->back()->withErrors(['coupon'=>'Invalid Coupon Code'])->withInput();
        }


        $user = User::create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'package_id' => $package->id,
        ]);

        $user->assignRole(UserRole::CUSTOMER);

        event(new Registered($user));

        Auth::login($user);

        // Referral
        if(Cookie::get('referral')){
            $referral = Cookie::get('referral');
            if ($ref = User::where('username', $referral)->first()) {
//                if($ref->hasRole(UserRole::AFFILIATE)) {
                $user->update(['referrer'=>$ref->id]);

                $ref->downlines()->create([
                        'user_id' => $user->id
                    ]);

//                }
            }
            Cookie::queue(Cookie::forget('referral'));
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
