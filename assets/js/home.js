
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

var Categories = document.getElementsByClassName('elem');

for (var i = 0; i < Categories.length; i++) {
    Categories[i].addEventListener('click', function (event) {
        event.preventDefault();
        var targetCategoryId = this.getAttribute('href');
        var targetCategory = document.getElementById(targetCategoryId);
        console.log(targetCategoryId);

        var contantCategory = document.getElementsByClassName('categ');
        console.log(contantCategory);

        for (var j = 0; j < contantCategory.length; j++) {
            if (contantCategory[j].classList.contains('grid')) {
                contantCategory[j].classList.remove("grid");
                contantCategory[j].classList.add("hidden");
            }
        }

        targetCategory.classList.remove('hidden');
        targetCategory.classList.add('grid');

    });
}