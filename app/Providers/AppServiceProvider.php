<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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


    public function boot(): void
    {
        // Chỉ thực hiện cấu hình nếu bảng website_settings tồn tại
        if (Schema::hasTable('website_settings')) {
            Config::set('mail.mailers.smtp.host', getSetting('smtp_host') ?? env('MAIL_HOST', 'default.host.com'));
            Config::set('mail.mailers.smtp.port', getSetting('smtp_port') ?? env('MAIL_PORT', 587));
            Config::set('mail.mailers.smtp.username', getSetting('smtp_username') ?? env('MAIL_USERNAME', 'default@example.com'));
            Config::set('mail.mailers.smtp.password', getSetting('smtp_password') ?? env('MAIL_PASSWORD', 'password'));
            Config::set('mail.mailers.smtp.encryption', getSetting('smtp_encryption') ?? env('MAIL_ENCRYPTION', 'tls'));

            Config::set('mail.from.address', getSetting('mail_from_address') ?? env('MAIL_FROM_ADDRESS', 'no-reply@yourdomain.com'));
            Config::set('mail.from.name', getSetting('mail_from_name') ?? env('MAIL_FROM_NAME', 'Your Website'));
        } else {
            // Cấu hình mặc định từ .env nếu bảng chưa tồn tại
            Config::set('mail.mailers.smtp.host', env('MAIL_HOST', 'default.host.com'));
            Config::set('mail.mailers.smtp.port', env('MAIL_PORT', 587));
            Config::set('mail.mailers.smtp.username', env('MAIL_USERNAME', 'default@example.com'));
            Config::set('mail.mailers.smtp.password', env('MAIL_PASSWORD', 'password'));
            Config::set('mail.mailers.smtp.encryption', env('MAIL_ENCRYPTION', 'tls'));

            Config::set('mail.from.address', env('MAIL_FROM_ADDRESS', 'no-reply@yourdomain.com'));
            Config::set('mail.from.name', env('MAIL_FROM_NAME', 'Your Website'));
        }
    }
}
