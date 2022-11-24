export default {
  init() {
    function init() {
      var imgDefer = document.getElementsByTagName('img');
      for (var i = 0; i < imgDefer.length; i++) {
        if (imgDefer[i].getAttribute('data-src')) {
          imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
        }
      }
    }
    window.onload = init;

    $(document).ready(function () {
      // JavaScript to be fired on all pages
      let menu_bars = document.getElementById('menu-bars');
      let menu_display = document.getElementsByClassName('menu-holder-phone')[0];
      let menu_links = document.getElementById('menu-header').getElementsByClassName('menu-item');
      let html = document.getElementsByTagName('html')[0];

      menu_bars.addEventListener('click', function () {
        if (menu_bars.dataset.clicked == 0) {
          html.style.overflowY = 'hidden';
          this.children[0].style.position = 'fixed';
          this.children[0].style.right = '20px';
          this.children[0].classList.add('burger-x');
          this.children[0].classList.remove('burger-regular');
          menu_display.style.display = 'flex';
          setTimeout(() => {
            menu_display.style.opacity = 1;
          }, 300);
          menu_display.style.transform = 'scale(1, 1)';
          menu_display.style.height = '100vh';
          for (let i = 0; i < menu_links.length; i++) {
            menu_links[i].style.opacity = '1'
          }
          menu_bars.dataset.clicked = 1;
        } else if (menu_bars.dataset.clicked == 1) {
          html.style.overflowY = 'scroll';
          this.children[0].style.position = 'static';
          this.children[0].classList.add('burger-regular');
          this.children[0].classList.remove('burger-x');
          menu_bars.dataset.clicked = 0;
          menu_display.style.transform = 'scale(1, 0)';
          menu_display.style.height = '0';
          for (let i = 0; i < menu_links.length; i++) {
            menu_links[i].style.opacity = '0'
          }
        }
      })

      // $('.main').click(function () {
      //   if (menu_bars.dataset.clicked == 1) {
      //     menu_bars.children[0].style.position = 'static';
      //     menu_bars.children[0].classList.add('burger-regular');
      //     menu_bars.children[0].classList.remove('burger-x');
      //     menu_bars.dataset.clicked = 0;
      //     menu_display.style.transform = 'scale(1, 0)';
      //     menu_display.style.height = '0';
      //     for (let i = 0; i < menu_links.length; i++) {
      //       menu_links[i].style.opacity = '0'
      //     }
      //   }
      // });


      // window.onresize = function () {
      //   if (window.innerWidth > 767) {
      //     menu_display.style.display = 'none';
      //     menu_display.style.transform = 'scale(1, 1)';

      //     for (let i = 0; i < menu_links.length; i++) {
      //       menu_links[i].style.opacity = '1';
      //     }
      //   }

      //   else {
      //     menu_display.style.display = 'flex';
      //     menu_bars.children[0].style.position = 'static';
      //     menu_bars.children[0].classList.add('burger-regular');
      //     menu_bars.children[0].classList.remove('burger-x');
      //     menu_bars.dataset.clicked = 0;
      //     menu_display.style.transform = 'scale(1, 0)';
      //     menu_display.style.height = '0';
      //     for (let i = 0; i < menu_links.length; i++) {
      //       menu_links[i].style.opacity = '0'
      //     }
      //   }
      // }

      $('#search-icon').click(function () {
        $('.search-form').css('opacity', '1');
        $('#search-icon').css('z-index', '1');
        $('.search-form').css('z-index', '100');
        $('#search-icon').css('transform', 'rotate(-20deg)');
      })

      $('#close-search-icon').click(function () {
        $('.search-form').css('opacity', '0');
        $('#search-icon').css('z-index', '100');
        $('.search-form').css('z-index', '-1');
        $('#search-icon').css('transform', 'rotate(0deg)');
      })
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};