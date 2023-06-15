const {parallel} = require('gulp')

const sues_virtual_life = require('./sues_virtual_life/gulpfile')
exports.sues_virtual_life = sues_virtual_life.watch

exports.build = parallel(sues_virtual_life.build)
