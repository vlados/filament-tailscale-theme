# Changelog

All notable changes to `filament-tailscale-theme` will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## v1.0.0 - 2026-06-03

Initial release — a light, Tailscale-console-inspired **overlay theme** for the Filament v5 admin panel.

### Highlights

- Contained two-row top header on a full-width warm-gray band, with underline nav tabs (blue active underline + rounded-top hover)
- Borderless, minimalist tables: uppercase muted column heads, hairline dividers, ~44px rows, no zebra/shadow
- Underline-style filter tabs, hairline inputs with a 1px indigo focus ring, flattened hairline form sections
- Solid indigo CTAs, quiet metadata badges, soft dropdown/modal elevation
- Plain-CSS overlay loaded via `Css::make()` — no Tailwind build required in the consuming app

### Install

```bash
composer require vlados/filament-tailscale-theme
php artisan filament:assets

```
```php
->plugins([
    \Vlados\FilamentTailscaleTheme\FilamentTailscaleTheme::make(),
])

```
Requires PHP ^8.2, Filament ^5.0. The full two-row header assumes `->topNavigation()`.

## [Unreleased]

## [1.0.0] - 2026-06-03

- Initial release: light Tailscale-console overlay theme for Filament v5.
