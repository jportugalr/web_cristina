import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    base: '/',    
    plugins: [        
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,            
        }),        
    ],   
    server: {
        host: '0.0.0.0',
        port: 5173,
        https: true, // 💡 Asegura que usa HTTPS
        hmr: {
            host: '0e1c-38-25-34-47.ngrok-free.app',
            protocol: 'wss', // WebSockets Secure
        },
    }, 
});
