import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById("menu");
    const menuIcon = document.getElementById("menu-icon");
    const burgerButton = document.getElementById("burger");

    burgerButton.addEventListener("click", () => {
        // Toggle the visibility of the menu
        menu.classList.toggle("hidden");

        // Toggle the icon class
        if (menu.classList.contains("hidden")) {
            menuIcon.classList.remove("fa-x", "fa-2xl");
            menuIcon.classList.add("fa-bars", "fa-2xl");
        } else {
            menuIcon.classList.remove("fa-bars", "fa-2xl");
            menuIcon.classList.add("fa-x", "fa-2xl");
        }
    });
});
