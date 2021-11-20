export default {
  init() {
    let navElements = document.getElementsByClassName('nav-text');
    let arrow = document.getElementsByClassName('arrow')[0];
    let navigation = document.getElementsByClassName('woocommerce-MyAccount-navigation')[0];
    let arrowSvg = document.getElementsByClassName('arrow-svg')[0];

    arrow.addEventListener('click', () => {
      if (arrow.dataset.clicked == 0) {
        arrowSvg.style.transform = 'rotate(180deg)';
        arrow.dataset.clicked = 1;

        for (let i = 0; i < navElements.length; i++) {
          const element = navElements[i];

          element.style.opacity = 0;
          element.style.width = '0px';

          setTimeout(() => {
            element.style.display = 'none';
          }, 500);
        }

        navigation.style.width = '100px';
      }

      else if (arrow.dataset.clicked == 1) {
        arrowSvg.style.transform = 'rotate(0deg)';
        arrow.dataset.clicked = 0;

        for (let i = 0; i < navElements.length; i++) {
          const element = navElements[i];
          element.style.display = 'flex';

          setTimeout(() => {
            element.style.opacity = 1;
            element.style.width = '100%';
          }, 500);
        }

        navigation.style.width = '30%';
      }
    })
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
