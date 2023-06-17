const {src, dest, watch, parallel} = require('gulp')
const tap = require('gulp-tap')
const rename = require('gulp-rename')
const browserSync = require('browser-sync').create()
const posthtml = require('gulp-posthtml')
const sourcemaps = require('gulp-sourcemaps')
const postcss = require('gulp-postcss')

const htmlFiles = [
    '**/*.html',
    '!**/index.html',
    '!**/includes/**/*.html',
    '!node_modules/**/*.*',
    '!Carolyns_Creations/**/*.html',
    '!vpz_research/**/*.html',
]

const cssFiles = [
    '**/*.css',
    '!style/*.css',
    '!node_modules/**/*.*',
    '!Carolyns_Creations/**/*.css',
    '!vpz_research/**/*.css',
]

const postcssPlugins = [
    require('postcss-preset-env')({
        enableClientSidePolyfills: true,
    }),
    require('cssnano')({
        preset: 'default',
    })
]

const posthtmlPlugins = [
    require('posthtml-urls')({
        eachURL: (url) => {
            if (url.endsWith('?@root')) {
                return url.replace('?@root', '')
            } else if (url.startsWith('/')) {
                return `/${site}${url}`
            } else {
                return url
            }
        },
        filter: {
            module: {href: true}
        }
    }),
    require('posthtml-postcss')(postcssPlugins, {}, /^text\/css$/)
]

let site = ''

function html() {
    const stream = src(htmlFiles)
        .pipe(tap(file => {
            const path = file.path.split('/')
            site = path[path.indexOf('saudade') + 1]
        }))
        .pipe(posthtml([
            ...posthtmlPlugins,
            require('posthtml-modules')({
                plugins: posthtmlPlugins
            }),
        ]))
        .pipe(rename((path) => {
            path.basename = 'index'
        }))
        .pipe(dest('.'))

    if (browserSync.active) {
        stream.pipe(browserSync.stream())
    }

    return stream
}

function css() {
    const stream = src(cssFiles)
        .pipe(sourcemaps.init())
        .pipe(postcss(postcssPlugins))
        .pipe(rename(path => {
            path.basename = 'style'
        }))
        .pipe(sourcemaps.write())
        .pipe(dest('.'))

    if (browserSync.active) {
        stream.pipe(browserSync.stream())
    }

    return stream
}

exports.watch = function () {
    browserSync.init(require('./bs-config'))

    watch(htmlFiles, {ignoreInitial: false}, html)
    watch(cssFiles, {ignoreInitial: false}, css)
}

exports.build = parallel(html, css)
