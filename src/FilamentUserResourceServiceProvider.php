<?php

namespace RyanChandler\FilamentUserResource;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentUserResourceServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-user-resource';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile();
    }
}
