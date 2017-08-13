(() => {
  const pageName = location.pathname.replace(/\//g, '') == '' ? 'home' : location.pathname.replace(/\//g, '');

  switch(pageName) {
    case 'home':
      // скрипты для главной страницы

      $('.modal-link').animatedModal();
      break;
  };
})();

