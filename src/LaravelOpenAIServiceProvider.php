<?php

namespace Siteorigin\LaravelOpenAI;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Siteorigin\LaravelOpenAI\Commands\LaravelOpenAICommand;

class LaravelOpenAIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-openai')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-openai_table')
            ->hasCommand(LaravelOpenAICommand::class);
    }
}
