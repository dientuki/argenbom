import { killBubling } from '../helpers/generic';
import { tns } from 'tiny-slider/src/tiny-slider';

export default class carrousel {

  constructor(settings) {

    this.settings = settings;
    if (this.settings.wrapper === undefined) {
      this.wrapper = document.querySelector(this.settings.container).parentNode;
    } else {
      this.wrapper = this.settings.wrapper;
      delete this.settings.wrapper;
    }

    this.buttons = {
      next: this.wrapper.querySelector('.carrousel-controls-next'),
      prev: this.wrapper.querySelector('.carrousel-controls-prev')
    };

    this.content = this.settings.content;
    delete this.settings.content;

    this.slider = tns(this.settings);

    this.nav();
    this.showItem();
  }

  nav() {
    if (this.buttons.prev !== null && this.buttons.next !== null) {
      this.buttons.prev.addEventListener('click', (event) => {

        const button = killBubling(event.target, 'DIV');

        if (button.classList.contains(this.disabled)) {
          return;
        }
        this.slider.goTo('prev');
        this.toogleDisabled();
      });

      this.buttons.next.addEventListener('click', (event) => {

        const button = killBubling(event.target, 'DIV');

        if (button.classList.contains(this.disabled)) {
          return;
        }
        this.slider.goTo('next');
        this.toogleDisabled();
      });

      this.toogleDisabled();
    }
  }

  toogleDisabled() {
    if (this.settings.loop === true) {
      return;
    }

    const info = this.slider.getInfo();

    // Prev
    if (info.index === 0) {
      this.buttons.prev.classList.add(this.disabled);
    } else {
      this.buttons.prev.classList.remove(this.disabled);
    }

    // Last
    if ((info.index + info.items) === info.slideCount) {
      this.buttons.next.classList.add(this.disabled);
    } else {
      this.buttons.next.classList.remove(this.disabled);
    }
  }

  showItem() {
    document.querySelector(this.settings.container).addEventListener('click', () => {
      const card = killBubling(event.target, 'ARTICLE');

      if (card.classList.contains('active')) {
        return;
      }

      card.classList.add('hola');
    });
  }

}