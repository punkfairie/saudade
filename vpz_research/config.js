const currentPage = location.pathname.split('/').pop().split('.')[0]

const waybackSiteBase = 'http://www.angelfire.com/moon2/petzzoo2/'

const pageMetadata = {
    index: {
        captureId: '20200510220014',
        sourcePageName: '',
    },
    felinez: {
        captureId: '20200609155611',
        sourcePageName: 'id29.htm',
    },
    c_wildz: {
        captureId: '20190805174324',
        sourcePageName: 'id22.htm',
    },
    c_fantasyz: {
        captureId: '20190805174242',
        sourcePageName: 'id30.htm',
    },
    forestfolk: {
        captureId: '',
        sourcePageName: 'id50.htm',
    },
    catzdogz: {
        captureId: '',
        sourcePageName: 'id48.htm',
    },
    caninez: {
        captureId: '',
        sourcePageName: 'id33.htm',
    },
    d_wildz: {
        captureId: '',
        sourcePageName: 'id23.htm',
    },
    d_fantasyz: {
        captureId: '',
        sourcePageName: 'id39.htm',
    },
    'clothez-toyz': {
        captureId: '',
        sourcePageName: 'id24.htm',
    },
    skinz: {
        captureId: '',
        sourcePageName: 'id25.htm',
    },
    playscenes: {
        captureId: '',
        sourcePageName: 'id26.htm',
    },
    hexing: {
        captureId: '',
        sourcePageName: 'id27.htm',
    },
    codes: {
        captureId: '',
        sourcePageName: 'id35.htm',
    },
    offset: {
        captureId: '',
        sourcePageName: 'id28.htm',
    },
    links: {
        captureId: '',
        sourcePageName: 'id37.htm',
    },
}

export const wayback =
    pageMetadata[currentPage].captureId + '/' + waybackSiteBase + pageMetadata[currentPage].sourcePageName
