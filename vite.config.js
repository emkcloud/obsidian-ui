import { defineConfig } from 'vite';

export default defineConfig(
{
    build:
    {
        outDir: 'dist',

        emptyOutDir: true,

        rollupOptions:
        {
            input: {
                app: 'resources/assets/js/app.js',
                style: 'resources/assets/css/app.css'
            },

            output: {
                entryFileNames: 'obsidian-ui.js',
                assetFileNames: 'obsidian-ui.css'
            }
        },

        manifest: false
    }
});