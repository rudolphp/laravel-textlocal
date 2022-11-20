<?php

namespace Rudolphp\LaravelTextlocal;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rudolphp\LaravelTextlocal\Commands\LaravelTextlocalCommand;

class LaravelTextlocalServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-textlocal')
            ->hasConfigFile()
            /*
            ->hasViews()
            ->hasMigration('create_laravel-textlocal_table')
            */
            ->hasCommand(LaravelTextlocalCommand::class);
    }
}
