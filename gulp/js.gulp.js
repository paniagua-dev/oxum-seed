const {destination} = require('./utls');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');

const {src} = require('gulp');

const buildJs = function () {
    const vendors = [
        './node_modules/gsap/dist/gsap.min.js',
        './src/ui/sources/uikit/js/uikit.js',
        './src/ui/sources/uikit/js/uikit-icons.js',
    ];
    return src(vendors)
        .pipe(concat('vendors.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(destination('build/js/'));
}

exports.buildJs = buildJs;
