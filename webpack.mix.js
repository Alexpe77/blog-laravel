const mix = require('laravel-mix');
mix.copyDirectory('vendor/tinymce/tinymce', 'public/js/tinymce');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
      processCssUrls: false,
   })
   .webpackConfig({
      module: {
         rules: [
            {
               test: /\.js$/,
               exclude: /node_modules/,
               use: {
                  loader: 'babel-loader',
                  options: {
                     presets: ['@babel/preset-env'],
                  },
               },
            },
         ],
      },
   });
