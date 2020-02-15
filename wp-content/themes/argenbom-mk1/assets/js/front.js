/* eslint-disable no-new */
import lzl from './modules/lazyload/native';
__webpack_public_path__ = `${window.ARG.mainDomain}/dist/`;

const settings_lzl = {
  data_src: 'original',
  elements_selector: '.lzl'
};

if ('IntersectionObserver' in window) {
  lzl.init(settings_lzl);
} else {
  import(/* webpackChunkName: "lzlVanilla" */ './modules/lazyload/vanilla').then((module) => {
    module.vanilla(settings_lzl);
  });
}

if (document.querySelector('#carrousel') !== null) {
  import(/* webpackChunkName: "tinyslider" */ './modules/carrousel/carrousel').then((carrousel) => {
    new carrousel.default({
      arrowKeys: true,
      container: '#carrousel',
      content: '#product-list',
      controls: false,
      gutter: 35,
      items: 4,
      lazyload: true,
      loop: false,
      nav: false,
      responsive: {
        0: {items: 1},
        728: { items: 2 },
        990: { items: 3 },
        1300: { items: 4 }
      }
    });
  });
}