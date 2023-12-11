let currentPage = location.pathname.split("/").at(-2);

const waybackSiteBase = "http://supernova.lokatt.se/";

const pageMetadata = {
  supernova: {
    captureId: "20161225131523",
    sourcePageName: "",
  },
};

export const wayback =
  pageMetadata[currentPage].captureId +
  "/" +
  waybackSiteBase +
  pageMetadata[currentPage].sourcePageName;
