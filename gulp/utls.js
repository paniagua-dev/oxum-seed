const {dest} = require('gulp');
const package = require('../package.json');
const parent = `build-${package.version}/`;
const destination = (path) => dest((path) ? `${parent}/${path}` : 'build/');
exports.destination = destination;
