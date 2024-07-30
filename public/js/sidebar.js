document.addEventListener("DOMContentLoaded", () => {
    const sidebar = document.querySelector(".sidebars");
    const navbar = document.querySelector(".nav-header");
    const content = document.querySelector(".content");
    const toggleMenu = document.querySelector("#toggle");

    toggleMenu.addEventListener("click", () => {
        sidebar.classList.toggle("hide");
        navbar.classList.toggle("full");
        content.classList.toggle("full");
    });
});
