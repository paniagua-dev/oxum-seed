const {dest} = require('gulp');
const project = require('../package.json');
const parent = `build-${project.version}/`;
const destination = (path) => dest(`${parent}/${path || ''}`);
exports.destination = destination;
