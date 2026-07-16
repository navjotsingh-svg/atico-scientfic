<?php

namespace App\Providers;

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
        $this->ensureOpenSslCaBundle();
    }

    /**
     * XAMPP's bundled OpenSSL often lacks a CA file, which breaks SMTP STARTTLS.
     */
    protected function ensureOpenSslCaBundle(): void
    {
        $locations = function_exists('openssl_get_cert_locations')
            ? openssl_get_cert_locations()
            : [];

        $defaultCa = $locations['default_cert_file'] ?? '';
        if ($defaultCa && is_file($defaultCa) && filesize($defaultCa) > 0) {
            return;
        }

        $candidates = array_filter([
            ini_get('openssl.cafile') ?: null,
            '/etc/ssl/cert.pem',
            '/etc/ssl/certs/ca-certificates.crt',
            '/usr/local/etc/openssl@3/cert.pem',
            '/usr/local/etc/openssl/cert.pem',
        ]);

        foreach ($candidates as $candidate) {
            if (is_file($candidate) && filesize($candidate) > 0) {
                @ini_set('openssl.cafile', $candidate);
                putenv('SSL_CERT_FILE='.$candidate);
                $_ENV['SSL_CERT_FILE'] = $candidate;
                $_SERVER['SSL_CERT_FILE'] = $candidate;
                break;
            }
        }
    }
}
