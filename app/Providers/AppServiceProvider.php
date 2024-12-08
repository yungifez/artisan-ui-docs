<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $prefix = '/docs/0.x';
        $links = [
            ['type' => 'header' , 'text' => 'Getting Started'],
            ['href' => $prefix.'/' , 'text' => 'introduction'],
            ['href' => $prefix.'/installation', 'text' => 'installation'],
            ['href' => $prefix.'/theming', 'text' => 'theming'],
            ['type' => 'header' , 'text' => 'Components'],
            ['href' => $prefix.'/components/accordion', 'text' => 'Accordion'],
            ['href' => $prefix.'/components/alert', 'text' => 'Alert'],
            ['href' => $prefix.'/components/avatar', 'text' => 'Avatar'],
            ['href' => $prefix.'/components/badge', 'text' => 'Badge'],
            ['href' => $prefix.'/components/button', 'text' => 'Button'],
            ['href' => $prefix.'/components/calendar', 'text' => 'Calendar'],
            ['href' => $prefix.'/components/card', 'text' => 'Card'],
            ['href' => $prefix.'/components/date-picker', 'text' => 'Date Picker'],
            ['href' => $prefix.'/components/dialog', 'text' => 'Dialog'],
            ['href' => $prefix.'/components/dropdown-menu', 'text' => 'Dropdown Menu'],
            ['href' => $prefix.'/components/input', 'text' => 'Input'],
            ['href' => $prefix.'/components/label', 'text' => 'Label'],
            ['href' => $prefix.'/components/popover', 'text' => 'Popover'],
            ['href' => $prefix.'/components/select', 'text' => 'Select'],
            ['href' => $prefix.'/components/sheet', 'text' => 'Sheet'],
            ['href' => $prefix.'/components/switch', 'text' => 'Switch'],
            ['href' => $prefix.'/components/tabs', 'text' => 'Tabs'],
            ['href' => $prefix.'/components/textarea', 'text' => 'Textarea'],
        ];

        View::share('links', $links);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
