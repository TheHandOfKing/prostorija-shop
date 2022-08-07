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

    // Homepage Slider

    let prevButton = document.getElementById('prev-button');
    let nextButton = document.getElementById('next-button');
    let slider1 = document.getElementById('slider1');
    let slider2 = document.getElementById('slider2');

    console.log(prevButton);

    prevButton.addEventListener('click', () => {
      if(slider2.classList.contains('back')) {
        slider1.classList.add('back')
        slider2.classList.remove('back')
      }
      else {
        slider2.classList.add('back')
        slider1.classList.remove('back')
      }
    })

    nextButton.addEventListener('click', () => {
      if(slider2.classList.contains('back')) {
        slider1.classList.add('back')
        slider2.classList.remove('back')
      }
      else {
        slider2.classList.add('back')
        slider1.classList.remove('back')
      }
    })

    // NFT Slider

    
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
