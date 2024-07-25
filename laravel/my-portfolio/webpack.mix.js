const mix = require('laravel-mix');

mix

   .sass('resources/scss/style.scss', 'public/css/style.css')

   .scripts('resources/js/app.js', 'public/js/app.js')
   .scripts('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
   .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js/bootstrap.js');