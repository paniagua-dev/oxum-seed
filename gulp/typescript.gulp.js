const {destination} = require('./utls');
const ts = require('gulp-typescript');
const tsProject = ts.createProject('tsconfig.json');
const babel = require('gulp-babel');

const buildTypescript = function () {
    return tsProject.src()
        .pipe(tsProject())
        .js
        .pipe(babel({
            presets: [[
                '@babel/env',
                {
                    'targets': {
                        'ie': '11'
                    }
                }
            ]]
        }))
        .pipe(destination('build/js/'));
}

exports.buildTypescript = buildTypescript;