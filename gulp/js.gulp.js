const {destination} = require("./utls");
const {src} = require('gulp');

const buildJs = function () {
    const mains = [
        './src/ui/**/*',
        '!./src/ui/README.md'
    ];
    return src(mains)
        .pipe(destination('build/js/'));
}

exports.buildJs = buildJs;