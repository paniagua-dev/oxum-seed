/**
 * This is a gulp task that allow to transfer files to a remote server.
 * Should be run in a npm script. eg.:  "npm run gulp --ftp={HOST} --ftp-user={USER} --ftp-pwd={PWD}"
 * The npm command can has as argument --ftp={HOST} --ftp-user={USER} --ftp-pwd={PWD} --ftp-remote-path={REMOTEPATH}
 * @type {FtpConnection}
 */
const ftp = require('vinyl-ftp');
const {src} = require('gulp');
const packageJson = require('../package.json');
const FTPS = function () {

    const credentials = {
        host: process.env.npm_config_ftp,
        user: process.env.npm_config_ftp_user,
        password: process.env.npm_config_ftp_pwd,
        remotePath: process.env.npm_config_ftp_remote_path || packageJson.ftp.remotePath || '/paniagua-theme',
        secure: true,
        reload: true,
        log: (...args) => {
            console.log('FTP LOG:', args);
        }
    };

    const connection = ftp.create(credentials);

    return src('./build/**/*', {base: './build', buffer: true})
        .pipe(connection.newer(credentials.remotePath))
        .pipe(connection.dest(credentials.remotePath));

};

exports.FTPS = FTPS;