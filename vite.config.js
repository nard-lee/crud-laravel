import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resource/js/submit_login',
                'resource/js/submit_signup'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
