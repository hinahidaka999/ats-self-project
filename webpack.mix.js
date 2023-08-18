// const mix = require('laravel-mix');

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            require('autoprefixer')({
                grid: true,
            }),
        ],
    });
mix.sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            require('autoprefixer')({
                grid: true,
                overrideBrowserslist: [
                    'Edge >= 15',
                    'Firefox >= 52',
                    'Chrome >= 57',
                    'iOS >= 10',
                    'Safari >= 10',
                    'Android >= 4.4',
                    'Opera >= 44'
                ]
            })
        ]
    })
    .webpackConfig({
        resolve: {
            extensions: ['.js', '.vue', '.json'],
            alias: {
                'vue$': 'vue/dist/vue.esm.js',
                '@': __dirname + '/resources/js'
            }
        }
    })
    .version();
