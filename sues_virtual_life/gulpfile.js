const {src, dest, watch} = require('gulp')
const posthtml = require('gulp-posthtml')
const rename = require('gulp-rename')
const browserSync = require('browser-sync').create()

const htmlFiles = ['./**/*.html', '!./**/index.html']

function html() {
    return src(htmlFiles)
        .pipe(posthtml([
            require('posthtml-urls')({
                eachURL: (url) => url[0] === '/' && url !== '/menu.js' ? `/sues_virtual_life${url}` : url,
            }),
        ]))
        .pipe(rename(path => {
            path.basename = 'index'
        }))
        .pipe(dest('.'))
        .pipe(browserSync.stream())
}

exports.default = function () {
    browserSync.init(require('../bs-config'))

    watch(htmlFiles, {ignoreInitial: false}, html)
}
