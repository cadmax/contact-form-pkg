<?php
namespace Jeffersonmv\Contactform;
use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/resources/views' => base_path('resources/views'),
            __DIR__ . '/Database/migrations' => base_path('database/migrations'),
            __DIR__ . '/Models' => base_path('app/Models'),
            __DIR__ . '/Http/Controllers' => base_path('app/Http/Controllers')
        ]);
    }

    public function register()
    {
        //
    }
}
?>
