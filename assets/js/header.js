//header
var toggelbtn = document.getElementById('toggelbtn');
var dbox = document.getElementById('menudiv');
var closeicon = document.getElementById('closeicon');
var listicon = document.getElementById('listicon');

function showmenu() {
    dbox.classList.toggle('pointer-events-none')
    dbox.classList.toggle('translate-y-10')
    dbox.classList.toggle('opacity-0')
    listicon.style.display = "none";
    closeicon.style.display = "flex";
};

function hidemenu() {
    dbox.classList.toggle('pointer-events-none')
    dbox.classList.toggle('translate-y-10')
    dbox.classList.toggle('opacity-0')
    listicon.style.display = "flex";
    closeicon.style.display = "none";
    ebookbtn.style.color = "black";
}

const ddContainer = document.querySelectorAll('.drop-down-container')
        ddContainer.forEach(item => {
            const dd = item.querySelector('.drop-down')
            const h = dd.scrollHeight
            const svg = item.querySelector('svg')
            const ddbtn = item.querySelector('.drop-down-btn')
            ddbtn.addEventListener('click', (e) => {
                e.stopPropagation()
                if (window.innerWidth < 1024) {
                    if (dd.style.height) {
                        dd.style.height = null
                    } else {
                        dd.style.height = h + 'px'
                    }
                    svg.classList.toggle('rotate-180')
                    dd.classList.toggle('pointer-events-none')
                }
            })
        });



//scroll button
window.addEventListener("scroll", function () {
    var button = document.getElementById("scrollToTopButton");
    var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollPosition > 200) {
        button.classList.remove("hidden");
    } else {
        button.classList.add("hidden");
    }
});

var scrollToTopButton = document.getElementById("scrollToTopButton");
scrollToTopButton.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});