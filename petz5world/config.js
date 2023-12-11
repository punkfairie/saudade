const currentPage = location.pathname.split("/").pop().split(".")[0];

const waybackSiteBase = "http://www.angelfire.com/pa5/petz5world/";

const captureId = {
  index: "20190803215024",
  home: "20111128022657",
  litterz1: "20111129041648",
  litterz2: "20111129041653",
  litterz3: "20111129041653",
  litterz4: "20111129041653",
  litterz5: "20111129041653",
  skinz: "20111129041638",
  skinz2: "20111129041703",
  breeds: "20111128022652",
  breeds2: "20111129041643",
};

export const wayback =
  captureId[currentPage] + "/" + waybackSiteBase + currentPage + ".html";
