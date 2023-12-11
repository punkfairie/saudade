(async () => {
  // shared styles
  const sharedStyle = document.createElement("link");
  sharedStyle.rel = "stylesheet";
  sharedStyle.href = "/style/shared.css";
  document.head.append(sharedStyle);

  // polyfills
  const polyfills = document.createElement("script");
  polyfills.type = "module";
  polyfills.src = "/polyfills.js";
  document.head.append(polyfills);

  // menu
  const menu = document.createElement("script");
  menu.type = "module";
  menu.src = "/menu.js";
  document.head.append(menu);
})();
