<?php

namespace Database\Seeders;

use App\Enums\SmtpStatus;
use Illuminate\Database\Seeder;
use Setting as SettingInsert;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $settingArray['site_name']          = 'Flezhub';
        $settingArray['site_email']         = 'info@flezhub.com';
        $settingArray['site_phone_number']  = '+12055759342';
        $settingArray['site_currency_name'] = 'NGN';
        $settingArray['site_currency_code'] = '₦';
        $settingArray['site_timezone']      = 'Africa/Lagos';
        $settingArray['site_footer']        = '@ All Rights Reserved';
        $settingArray['site_logo']          = 'logo.png';
        $settingArray['site_logo_white']    = 'logo-white.png';
        $settingArray['site_favicon']       = 'favicon/apple-touch-icon.png';
        $settingArray['site_description']   = 'Flezhub is an online store platform in Nigeria.';

        $settingArray['mail_host']         = '';
        $settingArray['mail_port']         = '';
        $settingArray['mail_username']     = '';
        $settingArray['mail_password']     = '';
        $settingArray['mail_from_name']    = '';
        $settingArray['mail_from_address'] = '';
        $settingArray['mail_disabled']     = 1;

        $settingArray['social_facebook']  = '';
        $settingArray['social_twitter']   = '';
        $settingArray['social_youtube']   = '';
        $settingArray['social_instagram'] = '';

        $settingArray['paystack_active']   = 1;
        $settingArray['paystack_key']  = 'pk_test_505cd494933907dd3e1ec07a6eef96e1aef633f1';
        $settingArray['paystack_secret']   = 'sk_test_c3c0ac59072eee6f6af5c6a909a2a019da7e48c0';

        $settingArray['stripe_active']   = 1;
        $settingArray['stripe_key']  = 'pk_test_51L4gM4HPfoAuKwnmFouS5lTErlK9ZFYtE8w7EdyEVozXoWsy9o1U776PwmfnO1CgVJbdGjNLolAD0dnr3HCzAKlf00Cy0LHN3p';
        $settingArray['stripe_secret']   = 'sk_test_51L4gM4HPfoAuKwnm5WYczmKKJYpXyjwk9KWX3HaO6dQbZvAUYkZ7GyB87ZILzRCAfnXARnEWmDi9lvjiBvMZEKMn00Kaj47X1x';

        $settingArray['referral_bonus'] = 10;
        $settingArray['affiliate_fee'] = 1000;
        $settingArray['order_commission'] = 0.5;
        $settingArray['share_commission'] = 5;

        $settingArray['social_facebook']  = 'https://www.facebook.com/groups/420529179412808/?ref=share_group_link';
        $settingArray['social_twitter']   = 'https://twitter.com/FlezhubOfficial?t=c6cqsxBwxNS_J79Sd6b1-g&s=09';
        $settingArray['social_telegram']   = 'https://t.me/FLEZHUB_OFFICIAL';
        $settingArray['social_instagram'] = 'https://www.instagram.com/invites/contact/?i=h3zfvx9wemw8&utm_content=o7wrsu4';

        SettingInsert::set($settingArray);
        SettingInsert::save();
    }
}
