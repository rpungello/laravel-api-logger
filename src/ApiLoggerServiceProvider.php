<?php

namespace Rpungello\ApiLogger;

use Rpungello\ApiLogger\Commands\ApiLoggerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ApiLoggerServiceProvider extends PackageServiceProvider
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
            ->hasMigration('create_api_log_table')
            ->hasCommand(ApiLoggerCommand::class);
    }
}
