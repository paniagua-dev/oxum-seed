const {destination} = require("./utls");
const {src} = require('gulp');

function buildPhp() {
    return src('./src/server/**/*.*')
        .pipe(destination());
}

exports.buildPhp = buildPhp;
