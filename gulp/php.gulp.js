const {destination} = require("./utls");
const {src} = require('gulp');

function phpBuild() {
    return src('./src/SERVER/**/*.*').pipe(destination());
}

exports.phpBuild = phpBuild;