(async () => {
    // shared styles
    const sharedStyle = document.createElement('link')
    sharedStyle.rel = 'stylesheet'
    sharedStyle.href = '/style/shared.css'
    document.head.append(sharedStyle)

    // menu style
    const menuStyle = document.createElement('link')
    menuStyle.rel = 'stylesheet'
    menuStyle.href = '/style/menu.css'
    document.head.append(menuStyle)

    // build menu
    const siteRoot = '/' + location.pathname.split('/')[1]
    const {wayback} = await import(`${siteRoot}/config.js`)

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
    changelog.setAttribute('href', `${siteRoot}/CHANGELOG.txt`)
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
})()
