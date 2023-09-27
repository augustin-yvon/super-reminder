const menuIcon = document.querySelector('.icon');
const mobileMenu = document.querySelector(".mobile-menu");

menuIcon.addEventListener("click", function () {
    mobileMenu.classList.toggle("show");
});
