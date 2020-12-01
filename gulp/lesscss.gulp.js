const {src} = require('gulp');
const LessAutoprefix = require('less-plugin-autoprefix');
const LessPluginCleanCSS = require('less-plugin-clean-css');
const less = require('gulp-less');
const {destination} = require('./utls');

function lessBuild() {
    const autoprefix = new LessAutoprefix({ browsers: ['last 2 versions'] });
    const cleanCSSPlugin = new LessPluginCleanCSS({advanced: true});
    return src(['./src/LESS/main.less'])
        .pipe(
            less({
                plugins: [
                    autoprefix,
                    (!!process.env.npm_config_build_prod) ? cleanCSSPlugin: ''
                ],
            })
        )
        .pipe(destination());
}

exports.lessBuild = lessBuild;