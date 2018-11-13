let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .copyDirectory('resources/assets/images', 'public/images')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .webpackConfig({
        resolve: {
            alias: {
                '@': path.resolve(__dirname, 'resources', 'assets', 'js'),
                components: path.resolve(__dirname, 'resources', 'assets', 'js', 'components'),
                models: path.resolve(__dirname, 'resources', 'assets', 'js', 'models'),
                infrastructures: path.resolve(__dirname, 'resources', 'assets', 'js', 'infrastructures'),
            }
        }
    })
    .browserSync('localhost:8000');
