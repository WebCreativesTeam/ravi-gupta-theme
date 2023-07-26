const slide = document.querySelectorAll(".slide");

slide.forEach((src, ind) => {
  src.style.left = `${ind * 100}%`;
});

let counter = 0;
var last;

const imageSlider = () => {
  slide.forEach((slide, ind) => {
    slide.style.transform = `translateX(-${counter * 100}%)`;
    last = ind;
  });
};

const goprev = () => {
  if (counter == 0) {
    counter = 4;
  } else {
    counter--;
    imageSlider();
  }
};

const gonext = () => {
  if (counter == last) {
    counter = 0;
  } else {
    counter++;
    imageSlider();
  }
};

setInterval(() => {
  if (counter == 0) {
    counter = 3;
    imageSlider();
  } else {
    counter--;
    imageSlider();
  }
}, 2 * 1000);