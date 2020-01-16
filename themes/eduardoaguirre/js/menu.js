(function($) {
  console.log('hello world');
  let mainMenu = $('.main-navigation');
  let button = $('.menu-toggle');
  let toggledMenu = $('.toggled');
  const $window = $(window);

  mainMenu.on('click', e => {
    button.hide();
    console.log('clicked');
  });

  function checkWidth() {
    let windowsize = $window.width();
    console.log(windowsize);
    if (windowsize < 766) {
      $('.site-content').on('click', e => {
        e.preventDefault();
        button.show();
        mainMenu.removeClass(toggledMenu);
        console.log('blured');
      });
    } else if (windowsize > 766) {
      button.hide();
    }
  }
  checkWidth();
  $(window).resize(checkWidth);
})(jQuery);
