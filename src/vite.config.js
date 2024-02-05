import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: true,
        // ホットリロード(自動更新)がならない場合追加
        hmr: {
            host: 'localhost',
        },
        // CSSの自動反映がならない場合追加(Dockerだと多少時差がでるかも)
        watch: {
          usePolling: true,
        },
    },
});
