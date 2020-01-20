'use strict'; // eslint-disable-line

const { default: ImageminPlugin } = require('imagemin-webpack-plugin');
const imageminMozjpeg = require('imagemin-mozjpeg');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');

const config = require('./config');

const glob = require('glob-all');
const PurgecssPlugin = require('purgecss-webpack-plugin');
const whitelister = require("purgecss-whitelister");


/**
 * Custom PurgeCSS Extractor
 * https://github.com/FullHuman/purgecss
 * https://github.com/FullHuman/purgecss-webpack-plugin
 */
class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-z0-9-:\/]+/g);
  }
}

module.exports = {
  plugins: [
    new ImageminPlugin({
      optipng: { optimizationLevel: 2 },
      gifsicle: { optimizationLevel: 3 },
      pngquant: { quality: '65-90', speed: 4 },
      svgo: {
        plugins: [
          { removeUnknownsAndDefaults: false },
          { cleanupIDs: false },
          { removeViewBox: false },
        ],
      },
      plugins: [imageminMozjpeg({ quality: 75 })],
      disable: (config.enabled.watcher),
    }),
    new UglifyJsPlugin({
      uglifyOptions: {
        ecma: 5,
        compress: {
          warnings: true,
          drop_console: true,
        },
      },
    }),
    new PurgecssPlugin({
          paths: glob.sync([
            'app/**/*.php',
            'resources/views/**/*.php',
            'resources/tribe-events/**/*.php',
            'resources/assets/scripts/**/*.js',
          ]),
          extractors: [
            {
              extractor: TailwindExtractor,
              extensions: ["js", "php"],
            },
          ],
          whitelist: [
            ...whitelister([
              "node_modules/tailwindcss/css/preflight.css",
              "resources/assets/styles/common/*.scss",
              "resources/assets/styles/components/*.scss",
              "resources/assets/styles/layouts/*.scss"]),
          ],
          whitelistPatterns: [
            /ctct*/,/ssba*/,/fsForm*/,/page-template-template-form*/,
            /tribe-bar-form*/,/tribe-events-list-separator-month/,
            /tribe-events-sub-nav/,/tribe-events-meta-group*/,
            /banner/,/menu-footer-nav/
          ],
          whitelistPatternsChildren: [
            /gform*/,
            /ctct*/,/fsForm*/,/page-template-template-form*/,
            /tribe-bar-form*/,/tribe-events-list-separator-month/,
            /tribe-events-sub-nav/,/tribe-events-meta-group*/,
            /banner/,/menu-footer-nav/],
        }),
  ],
};
