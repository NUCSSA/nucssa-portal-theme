export const disablePageScroll = () => {
  document.querySelector('html').style.overflowY = 'hidden';
};

export const enablePageScroll = () => {
  document.querySelector('html').style.overflowY = 'auto';
};
