const {dest} = require('gulp');
const project = require('../package.json');
const parent = `build/${project.name}`;
const destination = (path) => dest(`${parent}/${path || ''}`);
exports.destination = destination;
