<?php

namespace Vlados\FilamentTailscaleTheme;

use Filament\Contracts\Plugin;
use Filament\Enums\ThemeMode;
use Filament\Panel;
use Filament\Support\Colors\Color;

class FilamentTailscaleTheme implements Plugin
{
    protected array|string|null $primaryColor = null;

    protected bool $forceLightMode = true;

    public function getId(): string
    {
        return 'filament-tailscale-theme';
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public function primaryColor(array|string|null $color): static
    {
        $this->primaryColor = $color;

        return $this;
    }

    public function forceLightMode(bool $condition = true): static
    {
        $this->forceLightMode = $condition;

        return $this;
    }

    public function register(Panel $panel): void
    {
        $primary = match (true) {
            is_array($this->primaryColor) => $this->primaryColor,
            is_string($this->primaryColor) => Color::hex($this->primaryColor),
            default => Color::hex('#3b5bdb'),
        };

        $panel->colors([
            'primary' => $primary,
            'gray' => Color::Slate,
        ]);

        if ($this->forceLightMode) {
            $panel->defaultThemeMode(ThemeMode::Light);
        }
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
