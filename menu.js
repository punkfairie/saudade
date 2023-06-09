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
/** @var siteRoot */
changelog.setAttribute('href', `${siteRoot}/CHANGELOG.txt`)
changelog.setAttribute('target', '_blank')
changelog.innerText = 'Changelog'
menu.append(changelog)

/** @var wayback */
if (wayback) {
    let waybackLink = document.createElement('a')
    waybackLink.setAttribute('href', wayback)
    waybackLink.setAttribute('target', '_blank')
    waybackLink.innerText = 'Wayback Capture'
    menu.append(waybackLink)
}

document.body.prepend(menu)
