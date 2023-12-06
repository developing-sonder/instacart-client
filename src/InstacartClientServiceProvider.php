<?php

namespace Developing Sonder\InstacartClient;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Developing Sonder\InstacartClient\Commands\InstacartClientCommand;

class InstacartClientServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('instacart')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_instacart_table')
            ->hasCommand(InstacartClientCommand::class);
    }
}
