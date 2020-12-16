const {destination} = require('./utls');
const ts = require('gulp-typescript');
const tsProject = ts.createProject('tsconfig.json');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const concat = require('gulp-concat');

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
        .pipe(concat('main.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(destination('js/'));
}

exports.buildTypescript = buildTypescript;
