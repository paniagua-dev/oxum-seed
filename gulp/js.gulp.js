const {destination} = require("./utls");
const {merge} = require('lodash');
const {src} = require('gulp');

const buildJs = function () {
    const mains = [];
    const vendors = [
        './node_modules/bootstrap/dist/js/bootstrap.min.js',
    ];
    const build = merge(mains, vendors);
    return src(merge(mains, vendors))
        .pipe(destination('build/vendor/js/'));
}

exports.buildJs = buildJs;