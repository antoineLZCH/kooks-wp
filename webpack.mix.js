const mix = require('laravel-mix');

require('dotenv').config();
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your WordPlate application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JavaScript files.
 |
 */

const theme = process.env.WP_THEME;
const domain = process.env.BROWSERSYNC_DOMAIN;

mix.setResourceRoot('../');
mix.setPublicPath(`public/themes/${theme}/theme/assets`);

mix
  .options({
    autoprefixer: {
      options: {
        grid: true
      }
    },
    processCssUrls: false,
    postCss: [tailwindcss('./tailwind.config.js')]
  })
  .js('resources/scripts/app.js', 'scripts')
  .js('resources/scripts/vue/map.js', 'scripts')
  .sass('resources/styles/app.scss', 'styles')
  .copyDirectory('resources/images', `public/themes/${theme}/theme/assets/images`)
  .copyDirectory('resources/fonts', `public/themes/${theme}/theme/assets/fonts`)
  .version()
  .browserSync({
    proxy: domain,
    files: [
      `public/themes/${theme}`
    ]
  });
