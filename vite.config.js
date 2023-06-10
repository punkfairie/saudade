import {defineConfig} from 'vite'
import {globSync} from 'glob'
import {extname, relative, resolve} from 'node:path'
import {homedir} from 'node:os'
import fs from 'node:fs'

// noinspection JSUnusedGlobalSymbols
export default defineConfig({
    build: {
        rollupOptions: {
            input: Object.fromEntries(
                globSync('!(dist)/**/*.html').map(file => [
                    relative('saudade', file.slice(0, file.length - extname(file).length)).slice(3),
                    resolve(__dirname, file),
                ]),
            ),
        },
    },
    server: detectServerConfig('saudade.test'),
})

function detectServerConfig(host) {
    let keyPath = resolve(homedir(), `.config/valet/Certificates/${host}.key`)
    let certificatePath = resolve(homedir(), `.config/valet/Certificates/${host}.crt`)

    if (!fs.existsSync(keyPath)) {
        return {}
    }

    if (!fs.existsSync(certificatePath)) {
        return {}
    }

    return {
        hmr: {host},
        host,
        https: {
            key: fs.readFileSync(keyPath),
            cert: fs.readFileSync(certificatePath),
        },
    }
}
