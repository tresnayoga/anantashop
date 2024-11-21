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
  build: {
    manifest: true,         // Pastikan Vite menghasilkan manifest.json
    outDir: 'public/build', // Pastikan output build ke folder yang benar
  },
});
