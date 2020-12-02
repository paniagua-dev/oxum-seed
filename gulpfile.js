const {FTPS} = require('./gulp/ftp.gulp');
const {series, watch} = require('gulp');
const {buildLess} = require('./gulp/lesscss.gulp');
const {buildPhp} = require('./gulp/php.gulp');

const builds = [buildPhp, buildLess];

if(!!process.env.npm_config_ftp){
    builds.push(FTPS);
}

if (!!process.env.npm_config_watch_build) {
    const watchers = ['./src/SERVER/**/*', './src/LESS/**/*'];
    exports.default = function () {
        watch(watchers, {ignoreInitial: false}, series(...builds));
    }
} else {
    exports.default = series(...builds);
}