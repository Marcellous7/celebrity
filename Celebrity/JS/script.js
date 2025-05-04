
// alert("Who on earth are you?")
const hamburger = document.querySelector(".hamburger");
const overlay = document.querySelector(".overlay");
const navList = document.querySelector(".nav__list");


hamburger.addEventListener("click", function() {
    if (navList.classList.contains("active")) {
        navList.classList.remove("active");
        overlay.classList.remove("active");
        hamburger.classList.remove("active");
    } else {
        navList.classList.add("active");
        overlay.classList.add("active");
        hamburger.classList.add("active");
    }
});

overlay.addEventListener("click", function() {
    navList.classList.remove("active");
    overlay.classList.remove("active");
    hamburger.classList.remove("active");
});

