let mix = require('laravel-mix');

mix.disableNotifications();

mix.js('resources/assets/js/app.js', 'public/js')
  .js('resources/assets/js/management.js', 'public/js')
  .sass('resources/assets/sass/app.scss', 'public/css')
  .sass('resources/assets/sass/management.scss', 'public/css');
