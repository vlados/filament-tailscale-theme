import { defineConfig } from 'vite';

// Compiles the theme source (resources/css/index.css) into the published
// artifact (resources/dist/filament-tailscale-theme.css) that the plugin's
// Css::make() registers. Run `npm run build` after editing index.css —
// never hand-edit the dist file.
export default defineConfig({
    build: {
        emptyOutDir: false,
        outDir: 'resources/dist',
        cssMinify: false,
        rollupOptions: {
            input: { 'filament-tailscale-theme': 'resources/css/index.css' },
            output: {
                assetFileNames: '[name][extname]',
            },
        },
    },
});
