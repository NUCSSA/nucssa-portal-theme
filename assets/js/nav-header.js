import { disablePageScroll, enablePageScroll } from './utils';


(() => {
  document.addEventListener('DOMContentLoaded', () => {

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
