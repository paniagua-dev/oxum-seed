const {src} = require('gulp');
const LessAutoprefix = require('less-plugin-autoprefix');
const LessPluginCleanCSS = require('less-plugin-clean-css');
const Less = require('gulp-less');
const {destination} = require('./utls');

function lessBuild() {
    const autoprefix = new LessAutoprefix({ browsers: ['last 2 versions'] });
    const leanCSSPlugin = new LessPluginCleanCSS({advanced: true});
    return src('./src/LESS/**/*.less')
        .pipe(
            Less({
                plugins: [
                    autoprefix,
                    (!!process.env.npm_config_build_prod) ? leanCSSPlugin: ''
                ],
            })
        )
        .pipe(destination());
}

exports.lessBuild = lessBuild;