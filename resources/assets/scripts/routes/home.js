export default {
  init() {
    // JavaScript to be fired on the home page
    let moveLine = document.getElementById('line-to-move');
    let numbers = document.getElementsByClassName('number');
    let images = document.getElementsByClassName('images-select');

    for (let i = 0; i < numbers.length; i++) {
      const number = numbers[i];
      number.addEventListener('click', () => {
        let aria = number.getAttribute('aria-value');

        if (aria == 0) {
          moveLine.style.top = '0';
          numbers[0].classList.add('active');
          numbers[1].classList.remove('active');
          numbers[2].classList.remove('active');
          images[2].classList.remove('active-image');
          images[1].classList.remove('active-image');
          images[0].classList.add('active-image');
        }

        else if (aria == 1) {
          moveLine.style.top = '75px';
          numbers[0].classList.remove('active');
          numbers[1].classList.add('active');
          numbers[2].classList.remove('active');
          images[2].classList.remove('active-image');
          images[1].classList.add('active-image');
          images[0].classList.remove('active-image');
        }

        else {
          moveLine.style.top = '169px';
          numbers[0].classList.remove('active');
          numbers[1].classList.remove('active');
          numbers[2].classList.add('active');
          images[2].classList.add('active-image');
          images[1].classList.remove('active-image');
          images[0].classList.remove('active-image');
        }
      })
    }

    for (let i = 0; i < images.length; i++) {
      const image = images[i];
      image.addEventListener('click', () => {
        let aria = image.getAttribute('aria-value');

        if (aria == 0) {
          images[2].classList.remove('active-image');
          images[1].classList.remove('active-image');
          images[0].classList.add('active-image');
        }

        else if (aria == 1) {
          images[2].classList.remove('active-image');
          images[1].classList.add('active-image');
          images[0].classList.remove('active-image');
        }

        else {
          images[2].classList.add('active-image');
          images[1].classList.remove('active-image');
          images[0].classList.remove('active-image');
        }
      })
    }
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
