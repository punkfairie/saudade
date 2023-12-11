import cssBlankPseudoInit from "css-blank-pseudo/browser";
import focusWithinInit from "postcss-focus-within/browser";
import cssHasPseudo from "css-has-pseudo/browser";
import prefersColorSchemeInit from "css-prefers-color-scheme/browser";

(async () => {
  cssBlankPseudoInit();
  focusWithinInit();
  cssHasPseudo();
  prefersColorSchemeInit();

  const focusVisible = document.createElement("script");
  focusVisible.src = "/node_modules/focus-visible/dist/focus-visible.min.js";
  document.body.append(focusVisible);
})();
