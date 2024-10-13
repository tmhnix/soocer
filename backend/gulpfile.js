const elixir = require('laravel-elixir');

require('laravel-elixir-ngtemplatecache');
require('laravel-elixir-rename');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir.config.assetsPath = 'resources/assets/web';
elixir(mix => {
    mix.less(
            'app.less',
            'public/css/web-app.css'
        )
        .ngTemplateCache('js/**/**/*.html', 'public/js', 'resources/assets/web', {
            enabled: {
                htmlmin: true // in production, false in development mode
            },
            templateCache: {
                standalone: true
            },
            htmlmin: {
                collapseWhitespace: true,
                removeComments: true
            }
        })
        .styles([
            'style.css'
        ], 'public/css/web-all.css')
        .scripts([
            'libs/**/*.js',
            'app.js',
            'app.route.js',
            'hooks.js',
            'controllers/**/*.js',
            'services/**/*.js',
            'filters/**/*.js',
            'directives/**/*.js',
            'elements/**/*.js',
        ], 'public/js/web-all.js')
        .scripts([
            'libs/jquery.js',
            'iframe/main/**/*.js'
        ], 'public/js/web-main-all.js')
        .version([
            'css/web-all.css',
            'css/web-app.css',
            'js/templates.js',
            'js/web-all.js',
            'js/web-main-all.js'
        ]);
});
