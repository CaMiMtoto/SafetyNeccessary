import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/sass/app.scss'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
