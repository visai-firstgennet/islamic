var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir.config.assetsPath = 'themes/islamic/assets/';
elixir.config.publicPath = 'themes/islamic/assets/compiled/';

elixir(function(mix){
    mix.sass('style.scss');

    mix.scripts([
      'ddsmoothmenu.js',
      'jquery.js',
      'app.js'
    ]);

    mix.livereload([
      'themes/islamic/assets/compiled/css/style.css',
      'themes/islamic/partials/*.htm',
      'themes/islamic/assets/compiled/js/*.js'
    ]);
});
