const {parallel} = require('gulp')

const sites = {
    sues_virtual_life: require('./sues_virtual_life/gulpfile'),
    supernova: require('./supernova/gulpfile')
}

let builds = []

for (const [site, require] of Object.entries(sites)) {
    exports[site] = require.watch
    builds.push(require.build)
}

exports.build = parallel(...builds)
