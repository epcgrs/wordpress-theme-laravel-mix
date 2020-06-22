const mix = require('laravel-mix');

mix.options({
    publicPath: 'assets'
});

mix.js('resources/js/app.js', 'assets/js');

mix.sass('resources/sass/app.scss', 'assets/css');

mix.browserSync({
    proxy: 'http://yourproxy.dev.com',
    files: [
        './**/*.php',
        './assets/js/*.js',
        './assets/css/*.css',
    ]
});
