const {series} = require('gulp');
const {lessBuild} = require('./gulp/lesscss.gulp');
const {phpBuild} = require("./gulp/php.gulp");

exports.default = series(phpBuild, lessBuild);