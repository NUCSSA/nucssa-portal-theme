import { disablePageScroll, enablePageScroll } from './utils';


(() => {
  document.addEventListener('DOMContentLoaded', () => {
    const navPanel = document.querySelector('#nav-panel');
    const navToggle = document.querySelector('header .nav-toggle');
    const toggleNavPanel = () => {
      // remove or add `active` class to navToggle button
      const isActive = navToggle.classList.toggle('active');
      // show or hide navPanel
      navPanel.classList.toggle('active', isActive);
      // disable or enable page scrolling
      if (isActive) {
        disablePageScroll();
      } else {
        enablePageScroll();
      }
    };
    navToggle.addEventListener('click', toggleNavPanel);
  });
})();
