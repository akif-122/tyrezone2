<?php

namespace App\Providers;

use App\Models\Manufacturer;
use App\Models\Size;
use App\Models\SmtpSetting;
use App\Models\StripeSetting;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Stripe\Stripe;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // public function boot(): void
    // {
    //     //
    // }

    public function boot()
    {
        $navManufactures = Manufacturer::with("products", "products.manufacturer")->get();

        // $navManufactures = Manufacturer::orderBy("created_at", "DESC")->limit(8)->get();
        View::share('navManufactures', $navManufactures);


        $smtpSetting = SmtpSetting::first();
        if ($smtpSetting) {
            Config::set('mail.mailer', $smtpSetting->mail_mailer);
            Config::set('mail.host', $smtpSetting->mail_host);
            Config::set('mail.port', $smtpSetting->mail_port);
            Config::set('mail.username', $smtpSetting->mail_username);
            Config::set('mail.password', $smtpSetting->mail_password);
            Config::set('mail.encryption', $smtpSetting->mail_encryption);
            Config::set('mail.from.address', $smtpSetting->mail_from_address);
            Config::set('mail.from.name', $smtpSetting->mail_from_name);
        }


        
        
    }
}
