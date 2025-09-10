<?php

namespace Roberts\LaravelWhitelist;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Roberts\LaravelWhitelist\Commands\LaravelWhitelistCommand;

class LaravelWhitelistServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-whitelist')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_whitelist_table')
            ->hasCommand(LaravelWhitelistCommand::class);
    }
}
