const {destination} = require("./utls");
const {merge} = require('lodash');
const {src} = require('gulp');

const buildJs = function () {
    const mains = [
        './src/ui/**/*'
    ];
    return src(mains)
        .pipe(destination('build/js/'));
}

exports.buildJs = buildJs;