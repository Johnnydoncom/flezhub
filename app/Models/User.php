<?php

namespace App\Models;

 use App\Observers\UserObserver;
 use Bavix\Wallet\Interfaces\Confirmable;
 use Bavix\Wallet\Traits\CanConfirm;
 use Bavix\Wallet\Traits\HasWallets;
 use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Interfaces\Wallet;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail, Wallet, Confirmable, HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasWallet, HasWallets, CanConfirm, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'last_name',
        'first_name',
        'username',
        'phone',
        'email',
        'password',
        'package_id',
        'referrer'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();
        self::observe(new UserObserver());
    }

    public function upline(){
        return $this->hasOne(Referral::class, 'user_id');
    }

    public function downlines(){
        return $this->hasMany(Referral::class, 'referrer_id');
    }
}
