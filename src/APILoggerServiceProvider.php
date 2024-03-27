<?php

namespace Rpungello\APILogger;

use Rpungello\APILogger\Commands\APILoggerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class APILoggerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-api-logger')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-api-logger_table')
            ->hasCommand(APILoggerCommand::class);
    }
}
