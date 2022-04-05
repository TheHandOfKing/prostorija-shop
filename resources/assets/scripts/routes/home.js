export default {
  init() {
    // JavaScript to be fired on the home page
    let moveLine = document.getElementById('line-to-move');
    let numbers = document.getElementsByClassName('number');

    for (let i = 0; i < numbers.length; i++) {
      const number = numbers[i];
      number.addEventListener('click', () => {
        let aria = number.getAttribute('aria-value');

        if (aria == 0) {
          moveLine.style.top = '0';
          numbers[0].classList.add('active')
          numbers[1].classList.remove('active')
          numbers[2].classList.remove('active')
        }

        else if (aria == 1) {
          moveLine.style.top = '75px';
          numbers[0].classList.remove('active')
          numbers[1].classList.add('active')
          numbers[2].classList.remove('active')
        }

        else {
          moveLine.style.top = '169px';
          numbers[0].classList.remove('active')
          numbers[1].classList.remove('active')
          numbers[2].classList.add('active')
        }
      })
    }
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
