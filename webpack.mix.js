let mix = require('laravel-mix');
const THEME_DIR = 'themes/longneck';

mix.autoload({ 'jquery': ['window.$', 'window.jQuery'] });

mix.options({
  processCssUrls: false,
  postCss: [
    require('postcss-css-variables')()
  ]
});
mix.sass(
  `${THEME_DIR}/sass/main.scss`, 
  `${THEME_DIR}/css/main.css`
);

mix.js([
  `${THEME_DIR}/javascript/script.js`, 
],  `${THEME_DIR}/dist/app.js` );