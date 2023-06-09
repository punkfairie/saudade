import {defineConfig} from 'vite'
import {resolve} from 'node:path'
import {homedir} from 'node:os'
import fs from 'node:fs'

// noinspection JSUnusedGlobalSymbols
export default defineConfig({
    build: {
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'index.html'),
                wordfire: resolve(__dirname, 'wordfire/index.html'),
            },
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
