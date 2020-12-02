const {destination} = require("./utls");
const {src} = require('gulp');

function buildPhp() {
    return src('./src/SERVER/**/*.*').pipe(destination());
}

exports.buildPhp = buildPhp;