import "./bootstrap";

//Burger menu toggle
document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById("menu");
    const menuIcon = document.getElementById("menu-icon");
    const burgerButton = document.getElementById("burger");
    const overlay = document.getElementById("menu-overlay");

    if (burgerButton && menu && menuIcon) {
        burgerButton.addEventListener("click", () => {
            // Toggle the menu display
            if (menu.style.display === "flex") {
                menu.style.display = "none";
                menu.classList.remove("items-center", "justify-center");
                menuIcon.classList.remove("fa-x");
                menuIcon.classList.add("fa-bars");
            } else {
                menu.style.display = "flex";
                menu.classList.add("items-center", "justify-center");
                menuIcon.classList.remove("fa-bars");
                menuIcon.classList.add("fa-x");
            }
        });
    }
    // Close menu when clicking overlay
    if (overlay && menu && menuIcon) {
        overlay.addEventListener("click", () => {
            menu.style.display = "none";
            menu.classList.remove("items-center", "justify-center");
            menuIcon.classList.remove("fa-x");
            menuIcon.classList.add("fa-bars");
        });
    }

    // User menu toggle
    const userMenuButton = document.getElementById("user-menu-button");
    const userMenu = document.getElementById("user-menu");
    if (userMenuButton && userMenu) {
        userMenuButton.addEventListener("click", () => {
            userMenu.classList.toggle("hidden");
        });
    }

    // Close large screen dropdown when clicking outside
    document.addEventListener("mousedown", function(event) {
        if (userMenu && !userMenu.classList.contains("hidden")) {
            if (!userMenu.contains(event.target) && !userMenuButton.contains(event.target)) {
                userMenu.classList.add("hidden");
            }
        }
    });

    // User menu toggle for small screens
    const userMenuMobileBtn = document.getElementById("user-menu-mobile-btn");
    const userMenuMobile = document.getElementById("user-menu-mobile");
    const userMenuMobileOverlay = document.getElementById("user-menu-mobile-overlay");

    if (userMenuMobileBtn && userMenuMobile) {
        userMenuMobileBtn.addEventListener("click", () => {
            userMenuMobile.style.display = userMenuMobile.style.display === "flex" ? "none" : "flex";
            if (userMenuMobile.style.display === "flex") {
                userMenuMobile.classList.add("items-center", "justify-center");
            } else {
                userMenuMobile.classList.remove("items-center", "justify-center");
            }
        });
    }
    if (userMenuMobileOverlay && userMenuMobile) {
        userMenuMobileOverlay.addEventListener("click", () => {
            userMenuMobile.style.display = "none";
            userMenuMobile.classList.remove("items-center", "justify-center");
        });
    }
});

// Bag quantity update logic
window.updateBagQty = function(btn, delta) {
    const qtySpan = btn.parentElement.querySelector('.bag-qty');
    let qty = parseInt(qtySpan.textContent, 10) || 1;
    qty += delta;
    if (qty < 1) qty = 1;
    qtySpan.textContent = qty;
};
