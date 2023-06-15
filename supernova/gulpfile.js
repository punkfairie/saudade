const {src, dest, watch, parallel} = require('gulp')
const posthtml = require('gulp-posthtml')
const rename = require('gulp-rename')
const browserSync = require('browser-sync').create()

const htmlFiles = [
    'supernova/**/*.html',
    '!supernova/**/index.html',
    '!supernova/includes/**/*'
]

const posthtmlPlugins = [
    require('posthtml-urls')({
        eachURL: (url) => {
            if (url.endsWith('?@root')) {
                return url.replace('?@root', '')
            } else if (url.startsWith('/')) {
                return `/supernova${url}`
            } else {
                return url
            }
        },
    })
]

const postcssPlugins = [
    require('postcss-preset-env')({
        enableClientSidePolyfills: true,
    }),
]

function html() {
    const stream = src(htmlFiles)
        .pipe(posthtml([
            ...posthtmlPlugins,
            require('posthtml-modules')({
                root: 'supernova',
                plugins: posthtmlPlugins
            }),
            require('posthtml-postcss')(postcssPlugins, /^text\/css$/),
        ]))
        .pipe(rename(path => {
            path.basename = 'index'
        }))
        .pipe(dest('supernova'))

    if (browserSync.active) {
        stream.pipe(browserSync.stream())
    }

    return stream
}

const cssFiles = [
    'supernova/**/*.css',
    '!supernova/**/style.css',
]

function css() {
    const stream = src(cssFiles)
        .pipe(require('gulp-postcss')(postcssPlugins))
        .pipe(dest('supernova'))

    if (browserSync.active) {
        stream.pipe(browserSync.stream())
    }

    return stream
}

exports.watch = function () {
    browserSync.init(require('../bs-config'))

    watch(htmlFiles, {ignoreInitial: false}, html)
    watch(cssFiles, {ignoreInitial: false}, css)
}

exports.build = parallel(html, css)
