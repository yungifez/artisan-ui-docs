<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Folio\Folio;
use Snelling\FolioMarkdown\Facades\FolioMarkdown;

class FolioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Folio::path(resource_path('views/pages'))->middleware([
            '*' => [
                //
            ],
        ]);
     // Register Folio Markdown at the bottom of the boot method
        FolioMarkdown::register();
    }
}
