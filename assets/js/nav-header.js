import { disablePageScroll, enablePageScroll } from './utils';


(() => {
  document.addEventListener('DOMContentLoaded', () => {

    /**
     * Hamburger
     */
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


    /**
     * Search on focus
     */
    const searchBar = document.querySelector('#globalnav .nav-group.searchbar');
    const searchInput = searchBar.querySelector('input');
    const globalNavMenu = document.querySelector('#globalnav .nav-menu');
    const toggleSearchActiveState = (open) => {
      // Add .search-active to nav
      globalNavMenu.classList.toggle('search-activated', open);
      // Add .active to .searchbar
      searchBar.classList.toggle('active', open);
    };
    searchInput.addEventListener('focus', () => toggleSearchActiveState(true));
    searchInput.addEventListener('blur', () => toggleSearchActiveState(false));

  });
})();
