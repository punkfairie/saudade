const { src, dest, watch, parallel } = require("gulp");
const tap = require("gulp-tap");
const rename = require("gulp-rename");
const browserSync = require("browser-sync").create();
const posthtml = require("gulp-posthtml");
const posthtmlUrls = require("posthtml-urls");
const posthtmlPostcss = require("posthtml-postcss");
const posthtmlModules = require("posthtml-modules");
const sourcemaps = require("gulp-sourcemaps");
const postcss = require("gulp-postcss");
const postcssPresetEnv = require("postcss-preset-env");
const cssnano = require("cssnano");

const posthtmlUrlsFilter = require("./posthtmlUrlsConfig");
const bsConfig = require("./bs-config");

const htmlFiles = [
  "**/*.html",
  "!**/index.html",
  "!**/includes/**/*.html",
  "!node_modules/**/*.*",
];

const cssFiles = [
  "**/*.css",
  "!**/style.css",
  "!style/*.css",
  "!node_modules/**/*.*",
];

const postcssPlugins = [
  postcssPresetEnv({
    enableClientSidePolyfills: true,
  }),
  cssnano({
    preset: "default",
  }),
];

const posthtmlPlugins = [
  posthtmlUrls({
    eachURL: (url) => {
      if (url.endsWith("?@root")) {
        return url.replace("?@root", "");
      } else if (url.startsWith("/")) {
        return `/${site}${url}`;
      } else {
        return url;
      }
    },
    filter: posthtmlUrlsFilter,
  }),
  posthtmlPostcss(postcssPlugins, {}, /^text\/css$/),
];

let site = "";

function html() {
  const stream = src(htmlFiles)
    .pipe(
      tap((file) => {
        const path = file.path.split("/");
        site = path[path.indexOf("saudade") + 1];
        // console.log(path[path.length - 1])
      }),
    )
    .pipe(
      posthtml([
        ...posthtmlPlugins,
        posthtmlModules({
          plugins: posthtmlPlugins,
        }),
      ]),
    )
    .pipe(
      rename((path) => {
        path.basename = "index";
      }),
    )
    .pipe(dest("."));

  return stream;
}

function css() {
  const stream = src(cssFiles)
    .pipe(sourcemaps.init())
    .pipe(postcss(postcssPlugins))
    .pipe(
      rename((path) => {
        path.basename = "style";
      }),
    )
    .pipe(sourcemaps.write())
    .pipe(dest("."));

  if (browserSync.active) {
    stream.pipe(browserSync.stream());
  }

  return stream;
}

exports.watch = function () {
  browserSync.init(bsConfig);

  watch(cssFiles, { ignoreInitial: false }, css);

  watch(htmlFiles, { ignoreInitial: false }, html);
  watch("**/index.html").on("all", browserSync.reload);
};

exports.build = parallel(html, css);
