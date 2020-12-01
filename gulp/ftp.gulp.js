const ftp = require('vinyl-ftp');
const {src} = require('gulp');
const packageJson = require('../package.json');
const FTPS = function () {

    const credentials = {
        host: process.env.npm_config_ftp,
        user: process.env.npm_config_ftp_user,
        password: process.env.npm_config_ftp_pwd,
        secure: true,
        reload: true,
        log: (...args) => {
            console.log('FTP LOG:', args);
        }
    };

    const connection = ftp.create(credentials);

    return src('./build/**/*', {base: '.', buffer: true})
        .pipe(connection.newer(packageJson.ftp.remotePath))
        .pipe(connection.dest(packageJson.ftp.remotePath));

};

exports.FTPS = FTPS;