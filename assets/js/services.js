
var seoManagementServices = document.querySelectorAll('.seo-management-services>li a');
var interval;

for (var i = 0; i < seoManagementServices.length; i++) {
    seoManagementServices[i].addEventListener('click', function (event) {
        event.preventDefault();
        var targetSectionId = this.getAttribute('href');

        var targetSection = document.getElementById(targetSectionId);

        interval = setInterval(scrollVertically, 20, targetSection);
    });

    function scrollVertically(targetSection) {
        var targetCoordinates = targetSection.getBoundingClientRect();
        if (targetCoordinates.top <= 0) {
            clearInterval(interval);
            return;
        }
        window.scrollBy(0, 20);
    }
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