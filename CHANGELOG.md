# Changelog

All notable changes to `filament-tailscale-theme` will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.1] - 2026-06-04

- Fix CTA and outlined-button styling for Filament's `.fi-outlined` class rename (selectors previously targeted the old `.fi-btn-outlined`, so primary/danger fills no longer applied).
- Flatten surfaces: drop shadows removed from sections, widgets, tables and cards; consistent rounding on buttons, inputs and badges.
- Redesign secondary buttons with a defined gray hairline border (replacing the inset ring), plus proper hover/focus states and icon contrast.
- Add a Vite build step that compiles `resources/css/index.css` into the published `resources/dist/filament-tailscale-theme.css`.

## [1.0.0] - 2026-06-03

- Initial release: light Tailscale-console overlay theme for Filament v5.
