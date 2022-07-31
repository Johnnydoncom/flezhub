<x-guest-layout>
    <x-auth-card>
        <div class="text-center space-y-6" >
            <h2 class="font-semibold text-2xl sm:text-3xl 2xl:text-4xl text-center">Create an account for free
                and place your first order.</h2>
        </div>
        <form x-data="{agreement:''}" method="POST" class="mt-10 sm:mt-0 space-y-4 sm:space-y-6" action="{{ route('register') }}">
            @csrf
            <x-floating-input id="first_name" :label="__('First Name')" name="first_name" wrapperClass="" type="text" :placeholder="__('First Name')" :value="old('first_name')" required autofocus />

            <x-floating-input id="last_name" :label="__('Last Name')" name="last_name" wrapperClass="" type="text" :placeholder="__('Last Name')" :value="old('last_name')" required autofocus />

            <x-floating-input id="username" label="Username" name="username" wrapperClass="" type="text" placeholder="Username" :value="old('username')" required autofocus />

            <!-- Email Address -->
            <x-floating-input id="email" label="Email" name="email" wrapperClass="" type="email" placeholder="Email" :value="old('email')" required autofocus />

            <x-floating-input id="phone" :label="__('Phone Number')" name="phone" wrapperClass="" type="text" :placeholder="__('Phone Number')" :value="old('phone')" required />

            <!-- Password -->
            <x-floating-password id="password" wrapperClass="" name="password" label="Password" type="password" placeholder="Password" required autocomplete="new-password" />

            <x-floating-select id="package" label="Package" name="package" wrapperClass="mb-4" placeholder="Package" required>
                <option value="">Select Package</option>
                @foreach (\App\Models\Package::get() as $package)
                    <option value="{{ $package->id }}" @selected(old('package') == $package->id)>{{ $package->name }}</option>
                @endforeach
            </x-floating-select>

            <x-floating-input id="coupon" :label="__('Coupon Code')" name="coupon" wrapperClass="" type="text" :placeholder="__('Coupon Code')" :value="old('coupon')" required />

            <x-checkbox id="agreement" x-model="agreement" name="agreement" wrapperClass="" :placeholder="__('Agreement')" :value="old('agreement')" required> By clicking "Register", you agree to our terms of service, privacy policy and cookie policy </x-checkbox>


            <div class="flex items-center mt-4">
                <button class="btn btn-primary btn-block" :disabled="!agreement" :class="{'opacity-25':!agreement}">
                    {{ __('Register') }}
                </button>
            </div>
        </form>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="text-center space-y-6 mt-10 sm:mt-20 mb-4">
            @if(Route::has('login'))
                <a class="text-center link link-primary link-hover" href="{{ route('login') }}">
                    {{ __("Already have an account? Sign In") }}
                </a>
            @endif

            <p>For help, <a class="link" href="mailto:{{setting('site_email', 'contactwebipay@webiwise.org')}}">email us</a> or call {{setting('site_phone_number', '(234) 806 836 1550 ')}}.</p>
        </div>
    </x-auth-card>

</x-guest-layout>

