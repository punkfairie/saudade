let currentPage = location.pathname.split("/").at(-2);

const waybackSiteBase = "http://boardwalkerz.com/svl/";

const pageMetadata = {
  sues_virtual_life: {
    captureId: "20150810211140",
    sourcePageName: "",
  },
  past: {
    captureId: "20160109091352",
    sourcePageName: "past.html",
  },
  links: {
    captureId: "20150918005946",
    sourcePageName: "links.html",
  },
  catz: {
    captureId: "20160108073105",
    sourcePageName: "catz.html",
  },
  dogz: {
    captureId: "",
    sourcePageName: "dogz.html",
  },
  other: {
    captureId: "",
    sourcePageName: "other.html",
  },
  babyz: {
    captureId: "",
    sourcePageName: "babyz.html",
  },
  archive: {
    captureId: "",
    sourcePageName: "archive.html",
  },
};

export const wayback =
  pageMetadata[currentPage].captureId +
  "/" +
  waybackSiteBase +
  pageMetadata[currentPage].sourcePageName;
