const {destination} = require("./utls");
const {merge}  = require('lodash');
const {src} = require('gulp');

const buildCss = function () {
    const mains = [];
    const vendors = [
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
    ];
    const build = merge(mains, vendors);
    return src(merge(mains, vendors))
        .pipe(destination('build/vendor/css/'));
}


exports.buildCss = buildCss;