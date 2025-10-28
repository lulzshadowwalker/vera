import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import franken from "franken-ui/plugin-vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
        franken({
            preflight: false,
            layer: true,
            layerExceptions: ["chart"],
        }),
    ],
});
