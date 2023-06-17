const {src, dest, watch, parallel} = require('gulp')
const rename = require('gulp-rename')
const browserSync = require('browser-sync').create()
const tap = require('gulp-tap')
const posthtml = require('gulp-posthtml')
const sourcemaps = require('gulp-sourcemaps')
const postcss = require('gulp-postcss')

const htmlFiles = [
    'wordfire/**/*.html',
    '!wordfire/**/index.html',
]

const cssFiles = 'wordfire/wordfire.css'

const postcssPlugins = [
    require('postcss-preset-env')({
        enableClientSidePolyfills: true,
    }),
    require('cssnano')({
        preset: 'default',
    })
]

function html() {
    const stream = src(htmlFiles)
        .pipe(posthtml([
            require('posthtml-urls')({
                eachURL: (url) => {
                    if (url.endsWith('?@root')) {
                        return url.replace('?@root', '')
                    } else if (url.startsWith('/')) {
                        return `/wordfire${url}`
                    } else {
                        return url
                    }
                }
            }),
            require('posthtml-postcss')(postcssPlugins, {}, /^text\/css$/)
        ]))
        .pipe(rename((path) => {
            path.basename = 'index'
        }))
        .pipe(dest('wordfire'))

    if (browserSync.active) {
        stream.pipe(browserSync.stream())
    }

    return stream
}

function css() {
    let current = undefined

    const stream = src(cssFiles)
        .pipe(tap(file => {
            current = file.path
        }))
        .pipe(sourcemaps.init())
        .pipe(postcss(postcssPlugins, {from: current}))
        .pipe(rename(path => {
            path.basename = 'style'
        }))
        .pipe(sourcemaps.write())
        .pipe(dest('wordfire'))

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
