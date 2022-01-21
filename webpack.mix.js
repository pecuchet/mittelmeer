const mix = require('laravel-mix');

if (!mix.inProduction()) {
    mix.sourceMaps()
        .webpackConfig({
            devtool: 'source-map',
        });
} else {
    mix.version();
}

mix
    .webpackConfig({
        plugins: [],
    })
    .js('resources/js/index.js', 'public')
    .sass('resources/css/index.scss', 'public');
