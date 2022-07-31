<?php

use App\Models\Coupon;

if (!function_exists('pluck')) {
    function pluck($array, $value, $key = null)
    {
        $returnArray = [];
        if (count($array)) {
            foreach ($array as $item) {
                if ($key != null) {
                    $returnArray[$item->$key] = strtolower($value) == 'obj' ? $item : $item->$value;
                } else {
                    if ($value == 'obj') {
                        $returnArray[] = $item;
                    } else {
                        $returnArray[] = $item->$value;
                    }
                }
            }
        }

        return $returnArray;
    }
}

if (!function_exists('site_logo')) {
    function site_logo()
    {
        return \Illuminate\Support\Facades\Storage::url(setting('site_logo') ?? 'logo.png');
    }
}

if (!function_exists('site_logo_white')) {
    function site_logo_white()
    {
        return \Illuminate\Support\Facades\Storage::url(setting('site_logo_white') ?? 'WebiPay-LogoWhite.png');
    }
}

if (!function_exists('site_favicon')) {
    function site_favicon()
    {
        return \Illuminate\Support\Facades\Storage::url(setting('site_favicon') ?? 'favicon/apple-touch-icon.png');
    }
}

//if (!function_exists('money_format')) {
//    function money_format($amount){
//        return setting('site_currency_code') .' '. number_format($amount, 2);
//    }
//}

function app_money_format($amount,$fromCurrency=null,$toCurrency=null){
    return currency($amount, $fromCurrency, $toCurrency);
//    return setting('site_currency_code') .' '. number_format($amount, 2);
}

function generateUniqueOrderNumber() {
    do {
        $code = random_int(100000, 999999);
    } while (\App\Models\Order::where('order_number', "=", $code)->exists());
    return $code;
}

function generateUniqueReferenceNumber() {
    do {
        $code = \Illuminate\Support\Str::random();
    } while (\App\Models\Order::where('payment_reference', "=", $code)->exists());

    return $code;
}

function generateUniqueAccountId() {
    do {
        $code = random_int(100000, 999999);
    } while (\App\Models\User::where('account_id', "=", $code)->exists());

    return $code;
}


function generateCoupon($value, $packageId, $count=1) {
    $codes = collect([]);

    for ($i = 1; $i <= $count; $i++) {
        do {
            $code = generateCode();
        } while (\App\Models\Coupon::where('code', "=", $code)->exists());

        $coupon = new Coupon();
        $coupon->code = $code;
        $coupon->package_id = $packageId;
        $coupon->value = $value;
        $coupon->save();

        $codes->push($code);
    }
    return $codes;
}

function generateCode(): string
{
    $characters = config('coupon.allowed_symbols');
    $mask = config('coupon.code_mask');
    $maskLength = substr_count($mask, '*');
    $randomCharacter = [];

    for ($i = 1; $i <= $maskLength; $i++) {
        $character = $characters[rand(0, strlen($characters) - 1)];
        $randomCharacter[] = $character;
    }

    shuffle($randomCharacter);
    $length = count($randomCharacter);

    for ($i = 0; $i < $length; $i++) {
        $mask = preg_replace('/\*/', $randomCharacter[$i], $mask, 1);
    }

    return $mask;
}
