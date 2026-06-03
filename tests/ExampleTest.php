<?php

use Vlados\FilamentTailscaleTheme\FilamentTailscaleTheme;

it('exposes the expected plugin id', function () {
    expect(FilamentTailscaleTheme::make()->getId())->toBe('filament-tailscale-theme');
});
