<?php

namespace Aesir\Ygg;

use Aesir\Ygg\Components\Input;
use Aesir\Ygg\Components\Label;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class YggServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ygg')
            ->hasViewComponents(
                'ygg',
                Label::class,
                Input::class,
            )
            ->hasViews();
    }
}
