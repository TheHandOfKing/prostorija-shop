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

    // Homepage Slider

    let prevButton = document.getElementById('prev-button');
    let nextButton = document.getElementById('next-button');
    let slider1 = document.getElementById('slider1');
    let slider2 = document.getElementById('slider2');

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

    let prevNft = document.getElementById('prev-nft');
    let nextNft = document.getElementById('next-nft');
    let nft1 = document.getElementById('nft1');
    let nft2 = document.getElementById('nft2');

    prevNft.addEventListener('click', () => {
      if(nft2.classList.contains('back')) {
        nft1.classList.add('back')
        nft2.classList.remove('back')
      }
      else {
        nft2.classList.add('back')
        nft1.classList.remove('back')
      }
    })

    nextNft.addEventListener('click', () => {
      if(nft2.classList.contains('back')) {
        nft1.classList.add('back')
        nft2.classList.remove('back')
      }
      else {
        nft2.classList.add('back')
        nft1.classList.remove('back')
      }
    })
    
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
