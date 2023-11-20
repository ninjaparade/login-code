<?php

namespace Ninjaparade\LoginCode;

use Ninjaparade\LoginCode\Commands\LoginCodeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LoginCodeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('login-code')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_login-code_table')
            ->hasCommand(LoginCodeCommand::class);
    }
}
