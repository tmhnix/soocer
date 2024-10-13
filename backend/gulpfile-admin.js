const elixir = require('laravel-elixir');
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
elixir.config.assetsPath = 'resources/assets/portal';
elixir.config.publicPath = 'public/portal';
elixir.config.versioning.buildFolder = 'public/portal/build';
elixir(mix => {
    mix.less(
            'app.less'
        )
        .less(
            'login-page.less' // login page
        )
        .styles([
            '/**/*.css'
        ])
        .scripts([
            'core/**/*.js',
        ], 'public/portal/js/core.js')
        .scripts([
            'libs/**/*.js',
            'app.js',
            'controllers/**/*.js',
            'services/**/*.js',
            'directives/**/*.js'
        ])
        .version([
            'css/all.css',
            'css/login-page.css',
            'css/app.css',
            'js/core.js',
            'js/all.js'
        ]);
});
