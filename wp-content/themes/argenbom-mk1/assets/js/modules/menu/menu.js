function clickOut() {
  window.requestAnimationFrame(() => {
    const html = document.body.parentElement;

    if (html.classList.contains('icopen')) {
      html.classList.replace('icopen', 'icoclose');
    } else if (html.classList.contains('icoclose')) {
      html.classList.replace('icoclose', 'icopen');
    } else {
      html.classList.add('icopen');
    }
  });
}

export function menu(settings) {

  const defaults = settings,
    trigger = document.querySelector(defaults.trigger);

  trigger.addEventListener('click', () => {
    clickOut();
  });
}