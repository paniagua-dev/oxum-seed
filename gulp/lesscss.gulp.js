const {src} = require('gulp');
const LessAutoprefix = require('less-plugin-autoprefix');
const LessPluginCleanCSS = require('less-plugin-clean-css');
const less = require('gulp-less');
const {destination} = require('./utls');

function buildLess() {
    const autoprefix = new LessAutoprefix({ browsers: ['last 2 versions'] });
    const cleanCSSPlugin = new LessPluginCleanCSS({advanced: true});
    return src(['./src/less/main.less'])
        .pipe(
            less({
                paths: ['./src/less/variables'],
                plugins: [
                    autoprefix,
                    (!!process.env.npm_config_build_prod) ? cleanCSSPlugin: ''
                ],
            })
        )
        .pipe(destination('css/'));
}

exports.buildLess = buildLess;
