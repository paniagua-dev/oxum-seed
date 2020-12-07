const {destination} = require("./utls");
const {src} = require('gulp');

const buildCss = function () {
    const mains = [
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
        './node_modules/bootstrap/dist/css/bootstrap.min.css.map',
    ];
    return src(mains)
        .pipe(destination('build/css/'));
}

exports.buildCss = buildCss;