/* -------------------------------------------------------------------------------------- find and import config ---- */

const siteRoot = '/' + location.pathname.split('/')[1]
const {wayback} = await import(/* @vite-ignore */`${siteRoot}/config.js`)

/* --------------------------------------------------------------------------------------------- import menu css ---- */

import '/style/menu.css'

/* -------------------------------------------------------------------------------------------------- build menu ---- */
let menu = document.createElement('div')
menu.id = 'archive-menu'

let span = document.createElement('span')
span.id = 'hrt'
span.innerText = '♥'
menu.append(span)

let archiveRoot = document.createElement('a')
archiveRoot.setAttribute('href', '/')
archiveRoot.setAttribute('target', '_top')
archiveRoot.innerText = 'Home'
menu.append(archiveRoot)

let changelog = document.createElement('a')
changelog.setAttribute('href', `/${siteRoot}/CHANGELOG.txt`)
changelog.setAttribute('target', '_blank')
changelog.innerText = 'Changelog'
menu.append(changelog)

if (wayback) {
    let waybackLink = document.createElement('a')
    waybackLink.setAttribute('href', `https://web.archive.org/web/${wayback}`)
    waybackLink.setAttribute('target', '_blank')
    waybackLink.innerText = 'Wayback Capture'
    menu.append(waybackLink)
}

document.body.prepend(menu)
