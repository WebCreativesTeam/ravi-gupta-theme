
var seoManagementServices = document.querySelectorAll('.scroll-to-section>li a');
var interval;

for (var i = 0; i < seoManagementServices.length; i++) {
    seoManagementServices[i].addEventListener('click', function (event) {
        event.preventDefault();
        var targetSectionId = this.getAttribute('href');
        console.log(targetSectionId);

        var targetSection = document.getElementById(targetSectionId);
        var targetCoordinates = targetSection.getBoundingClientRect();
        var distance = targetCoordinates.top;

        interval = setInterval(function() {
            var currentScrollY = window.scrollY;
            var scrollStep = distance / 20; // Adjust the smoothness here (higher value = smoother scroll)
            
            if (Math.abs(distance) < Math.abs(scrollStep)) {
                // If the remaining distance is less than the scroll step, scroll directly to the target position and clear the interval
                window.scrollTo(0, currentScrollY + distance);
                clearInterval(interval);
            } else {
                // Otherwise, scroll by the scroll step
                window.scrollBy(0, scrollStep);
                distance -= scrollStep;
            }
        }, 20);
    });
}

//slide
let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }

//FAQ

function toggleElement(elementId1, elementId2) {
    const element1 = document.getElementById(elementId1);
    const element2 = document.getElementById(elementId2);
    element1.classList.toggle('hidden');
    element2.classList.toggle('scale-y-[-1]');
}