const {destination} = require("./utls");
const {src} = require('gulp');

const buildAssets = function () {
    return src(['./src/assets/**/*.svg'])
        .pipe(destination('build/assets/'));
}

exports.buildAssets = buildAssets;