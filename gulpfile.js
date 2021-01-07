const {buildJs} = require("./gulp/js.gulp");
const {buildAssets} = require("./gulp/assets.gulp");
const {FTPS} = require('./gulp/ftp.gulp');
const {series, watch} = require('gulp');
const {buildLess} = require('./gulp/lesscss.gulp');
const {buildPhp} = require('./gulp/php.gulp');
const {buildCss} = require('./gulp/css.gulp.js');
const {buildTypescript} = require('./gulp/typescript.gulp.js');

const builds = [buildPhp, buildLess, buildCss, buildTypescript, buildJs, buildAssets];

if (!!process.env.npm_config_ftp) {
    builds.push(FTPS);
}

if (!!process.env.npm_config_watch_build) {
    const watchers = ['./src/server/**/*', './src/less/**/*', './src/ui/**/*.ts'];
    exports.default = function () {
        watch(watchers, {ignoreInitial: false}, series(...builds));
    }
    console.log('watching files...');
} else {
    exports.default = series(...builds);
}
