const {destination} = require("./utls");
const {src} = require('gulp');

const buildCss = function () {
    const mains = [
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
    ];
    return src(mains)
        .pipe(destination('css/'));
}
exports.buildCss = buildCss;
