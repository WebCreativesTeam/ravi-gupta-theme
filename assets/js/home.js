
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

window.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.querySelector('#menu-btn')
    const dropdown = document.querySelector('#dropdown')

    menuBtn.addEventListener('click', () => {
        dropdown.classList.toggle('hidden')
        dropdown.classList.toggle('flex')
    })

})


var ebook = document.getElementById("ebook");
var courses = document.getElementById("courses");
var ebookbtn = document.getElementById("ebookbtn");
var coursesbtn = document.getElementById("coursesbtn");

function showebook() {
    ebook.style.display = "block";
    courses.style.display = "none";
    ebookbtn.style.backgroundColor = "#ee4a03";
    ebookbtn.style.borderColor = "#ee4a03";
    ebookbtn.style.color = "white";
    coursesbtn.style.backgroundColor = "white";
    coursesbtn.style.borderColor = "black";
    coursesbtn.style.color = "black";
}

function showcourses() {
    ebook.style.display = "none";
    courses.style.display = "block";
    coursesbtn.style.backgroundColor = "#ee4a03";
    coursesbtn.style.borderColor = "#ee4a03";
    coursesbtn.style.color = "white";
    ebookbtn.style.backgroundColor = "white";
    ebookbtn.style.borderColor = "black";
    ebookbtn.style.color = "black";
}



//blog Categories

document.addEventListener('DOMContentLoaded', function() {
    // Select all category links
    var categoryLinks = document.querySelectorAll('.elem');
  
    // Add click event listener to each category link
    categoryLinks.forEach(function(link) {
      link.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior
  
        // Get the category name from the clicked link
        var categoryName = this.textContent.trim();
  
        // Update the header text with the selected category name
        document.querySelector('.categ h1').textContent = categoryName;
  
        // Select all post elements
        var posts = document.querySelectorAll('.categ [data-filter]');
  
        // Loop through all posts and hide or show based on the category
        posts.forEach(function(post) {
          if (post.getAttribute('data-filter') === categoryName) {
            post.style.display = 'flex'; // Show posts with the matching category
          } else {
            post.style.display = 'none'; // Hide other posts
          }
        });
      });
    });
  });
  