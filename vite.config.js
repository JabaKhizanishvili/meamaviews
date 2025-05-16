import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/functions.js',
                'resources/scss/style.scss',
                'node_modules/swiper/swiper-bundle.min.css',
                'node_modules/bootstrap-icons/font/bootstrap-icons.css',

            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // შესაძლოა დაგჭირდეთ alias-ის დამატება
            '@': '/resources',
            'bootstrap-icons': '/node_modules/bootstrap-icons',
            'swiper': '/node_modules/swiper',
        },
    },
});
