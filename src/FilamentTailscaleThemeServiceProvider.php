<?php

namespace Vlados\FilamentTailscaleTheme;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentTailscaleThemeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-tailscale-theme');
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('filament-tailscale-theme', __DIR__ . '/../resources/dist/filament-tailscale-theme.css'),
        ], 'vlados/filament-tailscale-theme');
    }
}
