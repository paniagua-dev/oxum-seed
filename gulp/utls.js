const {dest} = require('gulp');
const destination = (path) => dest(path  || 'build/');
exports.destination = destination;