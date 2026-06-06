import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        laravel({
            // Pastikan Anda mengubah/rename file di resources/css/ menjadi app.scss
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // Server watch tetap ada untuk performa
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});