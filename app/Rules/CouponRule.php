<?php

namespace App\Rules;

use App\Enums\CouponStatus;
use App\Models\Coupon;
use Illuminate\Contracts\Validation\Rule;

class CouponRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Coupon::whereCode($value)->whereStatus(CouponStatus::Active)->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Enter a valid :attribute';
    }
}
