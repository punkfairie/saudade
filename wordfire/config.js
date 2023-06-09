const currentPage = location.pathname.split('/').pop().split('.')[0]
const waybackSiteBase = 'http://home.earthlink.net/~wordfire/'

const pageMetadata = {
    index: {
        captureId: '20050913215113',
        sourcePageName: '',
    },
    play1: {
        captureId: '20050911044611',
        sourcePageName: 'id1.html',

    },
    play2: {
        captureId: '20050911220624',
        sourcePageName: 'id5.html',
    },
    play3: {
        captureId: '20050912163724',
        sourcePageName: 'id6.html',
    },
    possums: {
        captureId: '20050905152820',
        sourcePageName: 'id12.html',
    },
    play4: {
        captureId: '20050912184232',
        sourcePageName: 'id13.html',
    },
    sound: {
        captureId: '20050413012516',
        sourcePageName: 'id14.html',
    },
    precious: {
        captureId: '20050413012604',
        sourcePageName: 'id2.html',
    },
}

const wayback = waybackSiteBase + pageMetadata[currentPage].captureId + pageMetadata[currentPage].sourcePageName
export default wayback
