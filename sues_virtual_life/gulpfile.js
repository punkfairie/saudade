const {src, dest, watch} = require('gulp')
const posthtml = require('gulp-posthtml')
const rename = require('gulp-rename')
const browserSync = require('browser-sync').create()

const htmlFiles = [
    'sues_virtual_life/**/*.html',
    '!sues_virtual_life/**/index.html',
]

function html() {
    const stream = src(htmlFiles)
        .pipe(posthtml([
            require('posthtml-urls')({
                eachURL: (url) => {
                    if (url[0] === '/' && url !== '/menu.js') {
                        return `/sues_virtual_life${url}`
                    } else {
                        return url
                    }
                },
            }),
        ]))
        .pipe(rename(path => {
            path.basename = 'index'
        }))
        .pipe(dest('sues_virtual_life'))

    if (browserSync.active) {
        stream.pipe(browserSync.stream())
    }

    return stream
}

exports.watch = function () {
    browserSync.init(require('../bs-config'))

    watch(htmlFiles, {ignoreInitial: false}, html)
    watch('sues_virtual_life.css').on('change', browserSync.reload)
}

exports.build = html
