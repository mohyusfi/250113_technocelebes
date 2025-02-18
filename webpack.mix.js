const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .version()
   .webpackConfig({
       plugins: [
           new BrowserSyncPlugin({
               proxy: 'http://127.0.0.1:8000', // Sesuaikan dengan URL Laravel kamu
               files: [
                   'app/**/*.php',
                   'resources/views/**/*.php',
                   'routes/**/*.php',
                   'public/js/**/*.js',
                   'public/css/**/*.css'
               ],
               notify: false,
               open: false,
           })
       ]
   });
