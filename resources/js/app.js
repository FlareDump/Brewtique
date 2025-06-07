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

    // Product modal logic
    const productModal = document.getElementById("productModal");
    if (productModal) {
        document.querySelectorAll('[data-product-card]').forEach(card => {
            card.addEventListener('click', function() {
                // Get product info from data attributes
                const prodName = card.getAttribute('data-prodname');
                const prodPrice = card.getAttribute('data-prodprice');
                const imagePath = card.getAttribute('data-imagepath');
                // Always use product modal template (no pastries)
                const template = document.getElementById('product-modal-template');
                if (!template) return;
                // Clear previous modal content
                productModal.innerHTML = '';
                // Clone and inject template
                const modalContent = template.content.cloneNode(true);
                productModal.appendChild(modalContent);
                // Fill modal fields
                renderProductModal({ prodName, prodPrice, imagePath });
                // Show modal
                productModal.classList.remove('hidden');
                productModal.classList.add('flex');
                // Add close logic for new modal content
                productModal.querySelectorAll('[data-modal-close]').forEach(btn => {
                    btn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        productModal.classList.add('hidden');
                        productModal.classList.remove('flex');
                    });
                });
            });
        });
        // Close modal on background click
        productModal.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
                this.classList.remove('flex');
            }
        });
    }

    function renderProductModal({ prodName, prodPrice, imagePath }) {
        // Debug print to console
        console.log('Product Modal Data:', { prodName, prodPrice, imagePath });
        const modal = document.getElementById('productModal');
        // Fill modal fields for product_modal
        const modalImg = modal.querySelector('img');
        const modalName = modal.querySelector('h2, .font-bold.text-2xl, .font-bold.text-xl, .text-2xl.font-bold');
        const modalPrice = modal.querySelector('#productModalPrice');
        // Set hidden input values for form submission
        const nameInput = modal.querySelector('#modalProductNameInput');
        const imageInput = modal.querySelector('#modalProductImageInput');
        const priceInput = modal.querySelector('#modalProductPriceInput');
        if (nameInput) nameInput.value = prodName || '';
        if (imageInput) imageInput.value = imagePath || '';
        if (priceInput) priceInput.value = prodPrice || '';
        if (modalImg) {
            modalImg.src = imagePath || '/images/best_seller1.png';
            modalImg.alt = prodName || '';
        }
        if (modalName) modalName.textContent = prodName || '';
        if (modalPrice && prodPrice) {
            modalPrice.textContent = '₱ ' + Number(prodPrice).toLocaleString('en-PH', {minimumFractionDigits: 2});
        }

        // --- Customization logic ---
        // Helper: get price from label text (e.g. 'Regular - ₱0.00')
        function getPriceFromLabel(label) {
            const match = label.textContent.match(/₱([\d,.]+)/);
            return match ? parseFloat(match[1].replace(/,/g, '')) : 0;
        }

        // Cup Size
        const cupSizeInputs = modal.querySelectorAll('input[name="cup_size"]');
        const cupSizeInput = modal.querySelector('#modalCupSizeInput');
        const cupSizePriceInput = modal.querySelector('#modalCupSizePriceInput');
        // Milk
        const milkInputs = modal.querySelectorAll('input[name="milk"]');
        const milkInput = modal.querySelector('#modalMilkInput');
        const milkPriceInput = modal.querySelector('#modalMilkPriceInput');
        // Addon (only first checked is stored)
        const addonInputs = modal.querySelectorAll('input[name="addons[]"]');
        const addonInput = modal.querySelector('#modalAddonInput');
        const addonPriceInput = modal.querySelector('#modalAddonPriceInput');
        // Quantity
        const qtyInput = modal.querySelector('input[name="Quantity"]');
        // Set AddedAt
        const addedAtInput = modal.querySelector('#modalAddedAtInput');
        if (addedAtInput) {
            addedAtInput.value = new Date().toISOString();
        }

        // --- Total Price Calculation ---
        function updateTotalPrice() {
            const base = parseFloat(priceInput ? priceInput.value : 0) || 0;
            const cup = parseFloat(cupSizePriceInput ? cupSizePriceInput.value : 0) || 0;
            const milk = parseFloat(milkPriceInput ? milkPriceInput.value : 0) || 0;
            const addon = parseFloat(addonPriceInput ? addonPriceInput.value : 0) || 0;
            const qty = parseInt(qtyInput ? qtyInput.value : 1, 10) || 1;
            const total = (base + cup + milk + addon) * qty;
            const totalInput = modal.querySelector('#modalTotalPriceInput');
            if (totalInput) totalInput.value = total.toFixed(2);
            if (modalPrice) modalPrice.textContent = '₱ ' + total.toLocaleString('en-PH', {minimumFractionDigits: 2});
        }

        // Cup Size listeners
        cupSizeInputs.forEach(radio => {
            radio.addEventListener('change', function() {
                if (cupSizeInput) cupSizeInput.value = this.value;
                if (cupSizePriceInput) cupSizePriceInput.value = getPriceFromLabel(this.parentElement);
                updateTotalPrice();
            });
        });
        // Set default if any checked
        const checkedCup = Array.from(cupSizeInputs).find(r => r.checked);
        if (checkedCup) {
            if (cupSizeInput) cupSizeInput.value = checkedCup.value;
            if (cupSizePriceInput) cupSizePriceInput.value = getPriceFromLabel(checkedCup.parentElement);
        }

        // Milk listeners
        milkInputs.forEach(radio => {
            radio.addEventListener('change', function() {
                if (milkInput) milkInput.value = this.value;
                if (milkPriceInput) milkPriceInput.value = getPriceFromLabel(this.parentElement);
                updateTotalPrice();
            });
        });
        const checkedMilk = Array.from(milkInputs).find(r => r.checked);
        if (checkedMilk) {
            if (milkInput) milkInput.value = checkedMilk.value;
            if (milkPriceInput) milkPriceInput.value = getPriceFromLabel(checkedMilk.parentElement);
        }

        // Addon listeners (single value only)
        function updateAddonFields() {
            const checked = Array.from(addonInputs).find(c => c.checked);
            if (addonInput) addonInput.value = checked ? checked.value : '';
            if (addonPriceInput) addonPriceInput.value = checked ? getPriceFromLabel(checked.parentElement) : 0;
            updateTotalPrice();
        }
        addonInputs.forEach(cb => {
            cb.addEventListener('change', updateAddonFields);
        });
        updateAddonFields();

        // Quantity listener
        if (qtyInput) {
            qtyInput.addEventListener('input', updateTotalPrice);
        }

        updateTotalPrice();
    }

});

// Product modal quantity update logic
window.updateProductModalQty = function(btn, delta) {
    const qtySpan = btn.parentElement.querySelector('.product-modal-qty');
    let qty = parseInt(qtySpan.textContent, 10) || 1;
    qty += delta;
    if (qty < 1) qty = 1;
    qtySpan.textContent = qty;
};

// Highlight active navbar link for product pages
function highlightProductNav() {
    const path = window.location.pathname.toLowerCase();
    let active = null;
    if (path.includes('/all')) active = 'all';
    else if (path.includes('/hot')) active = 'hot';
    else if (path.includes('/cold')) active = 'cold';
    else if (path.includes('/pastr')) active = 'pastry';
    document.querySelectorAll('.product-nav-link').forEach(link => {
        if (link.dataset.nav === active) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}
document.addEventListener('DOMContentLoaded', highlightProductNav);

// Product navbar mobile dropdown logic
function setupProductNavDropdown() {
    const btn = document.getElementById('product-nav-dropdown-btn');
    const dropdown = document.getElementById('product-nav-dropdown');
    const label = document.getElementById('product-nav-active-label');
    if (!btn || !dropdown || !label) return;
    // Set initial label to active link
    const activeLink = dropdown.querySelector('.product-nav-link.active');
    if (activeLink) label.textContent = activeLink.textContent.trim();
    // Hide the active link in dropdown
    dropdown.querySelectorAll('.product-nav-link').forEach(link => {
        if (link.classList.contains('active')) {
            link.classList.add('hidden');
        } else {
            link.classList.remove('hidden');
        }
    });
    // Toggle dropdown
    btn.addEventListener('click', function(e) {
        e.stopPropagation();
        dropdown.classList.toggle('hidden');
    });
    // Clicking a dropdown link closes dropdown
    dropdown.querySelectorAll('.product-nav-link').forEach(link => {
        link.addEventListener('click', function() {
            dropdown.classList.add('hidden');
        });
    });
    // Click outside closes dropdown
    document.addEventListener('click', function(e) {
        if (!dropdown.classList.contains('hidden')) {
            if (!dropdown.contains(e.target) && e.target !== btn && !btn.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        }
    });
}
// Only run on mobile
if (window.innerWidth < 768) {
    document.addEventListener('DOMContentLoaded', setupProductNavDropdown);
}

// Password show/hide toggle for login page (Font Awesome version)
const passwordInput = document.getElementById('loginPasswordInput');
const togglePasswordBtn = document.getElementById('togglePasswordBtn');
const eyeIcon = document.getElementById('eyeIcon');
if (passwordInput && togglePasswordBtn && eyeIcon) {
    togglePasswordBtn.addEventListener('click', function (e) {
        e.preventDefault();
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        // Toggle Font Awesome icon
        if (isPassword) {
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    });
}

// Password show/hide toggle for signin page (Font Awesome version)
const signinPasswordInput = document.getElementById('signinPasswordInput');
const toggleSigninPasswordBtn = document.getElementById('toggleSigninPasswordBtn');
const signinEyeIcon = document.getElementById('signinEyeIcon');
if (signinPasswordInput && toggleSigninPasswordBtn && signinEyeIcon) {
    toggleSigninPasswordBtn.addEventListener('click', function (e) {
        e.preventDefault();
        const isPassword = signinPasswordInput.type === 'password';
        signinPasswordInput.type = isPassword ? 'text' : 'password';
        // Toggle Font Awesome icon
        if (isPassword) {
            signinEyeIcon.classList.remove('fa-eye');
            signinEyeIcon.classList.add('fa-eye-slash');
        } else {
            signinEyeIcon.classList.remove('fa-eye-slash');
            signinEyeIcon.classList.add('fa-eye');
        }
    });
}

// --- Leaflet.js and Map Picker logic for Address field ---
// Add Leaflet CSS/JS if not already present
(function addLeafletAssets() {
    if (!document.getElementById('leaflet-css')) {
        const link = document.createElement('link');
        link.id = 'leaflet-css';
        link.rel = 'stylesheet';
        link.href = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css';
        document.head.appendChild(link);
    }
    if (!document.getElementById('leaflet-js')) {
        const script = document.createElement('script');
        script.id = 'leaflet-js';
        script.src = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';
        document.body.appendChild(script);
    }
})();

let map, marker, pickedLatLng;
function openMapPickerModal() {
    const modal = document.getElementById('mapPickerModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    setTimeout(() => {
        if (!window.L) return; // Wait for Leaflet to load
        if (!map) {
            map = L.map('mapPicker').setView([14.5995, 120.9842], 13); // Manila default
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);
            map.on('click', function(e) {
                pickedLatLng = e.latlng;
                if (marker) marker.setLatLng(e.latlng);
                else marker = L.marker(e.latlng).addTo(map);
            });
        } else {
            map.invalidateSize();
        }
    }, 300);
}
function closeMapPickerModal() {
    const modal = document.getElementById('mapPickerModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}
document.addEventListener('DOMContentLoaded', function() {
    const openBtn = document.getElementById('openMapPickerBtn');
    const closeBtn = document.getElementById('closeMapPickerBtn');
    const confirmBtn = document.getElementById('confirmMapPickerBtn');
    const addressInput = document.getElementById('userAddressInput');
    if (openBtn) openBtn.addEventListener('click', openMapPickerModal);
    if (closeBtn) closeBtn.addEventListener('click', closeMapPickerModal);
    if (confirmBtn) confirmBtn.addEventListener('click', function() {
        if (pickedLatLng && addressInput) {
            addressInput.value = `${pickedLatLng.lat.toFixed(6)}, ${pickedLatLng.lng.toFixed(6)}`;
        }
        closeMapPickerModal();
    });
});
// --- End Map Picker logic ---

// --- Google Maps Address Picker for User Dashboard ---
document.addEventListener('DOMContentLoaded', function() {
    const openMapPickerBtn = document.getElementById('openMapPickerBtn');
    const closeMapPickerBtn = document.getElementById('closeMapPickerBtn');
    const mapPickerModal = document.getElementById('mapPickerModal');
    const userAddressInput = document.getElementById('userAddressInput');
    let map, marker;

    // Initialize and display the map
    window.initMap = function(lat = 13.7563, lng = 121.0583) {
        map = new google.maps.Map(document.getElementById("mapPicker"), {
            center: { lat, lng },
            zoom: 14,
            disableDefaultUI: true,
            styles: [{
                featureType: "all",
                elementType: "geometry",
                stylers: [{ saturation: -100 }]
            }]
        });

        marker = new google.maps.Marker({
            position: { lat, lng },
            map,
            draggable: true,
        });

        // Update the address input field when the marker is dragged
        google.maps.event.addListener(marker, 'dragend', function(event) {
            const lat = event.latLng.lat();
            const lng = event.latLng.lng();
            updateAddressInput(lat, lng);
        });

        // Also update address on map click
        map.addListener('click', function(event) {
            marker.setPosition(event.latLng);
            updateAddressInput(event.latLng.lat(), event.latLng.lng());
        });
    }

    // Update the address input field based on the selected location
    function updateAddressInput(lat, lng) {
        const geocoder = new google.maps.Geocoder();
        const latlng = { lat, lng };
        geocoder.geocode({ 'location': latlng }, (results, status) => {
            if (status === 'OK' && results[0]) {
                const address = results[0].formatted_address;
                userAddressInput.value = address;
            } else {
                userAddressInput.value = lat + ', ' + lng; // fallback to coordinates if geocoding fails
            }
        });
    }

    if (openMapPickerBtn) {
        openMapPickerBtn.addEventListener('click', () => {
            mapPickerModal.classList.remove('hidden');
            // Google Maps async callback will call window.initMap
            if (typeof google !== 'undefined' && google.maps && typeof window.initMap === 'function') {
                window.initMap();
            }
        });
    }
    if (closeMapPickerBtn) {
        closeMapPickerBtn.addEventListener('click', () => {
            mapPickerModal.classList.add('hidden');
        });
    }
    const confirmBtn = document.getElementById('confirmMapPickerBtn');
    if (confirmBtn) {
        confirmBtn.addEventListener('click', () => {
            const address = userAddressInput.value;
            if (address) {
                // Optionally, you can perform an action here, like saving the address
                // Close the modal
                mapPickerModal.classList.add('hidden');
            } else {
                alert('Please select an address on the map.');
            }
        });
    }
});
// --- End Google Maps Address Picker ---

document.addEventListener('DOMContentLoaded', function() {
    // Success Bag Modal logic
    document.body.addEventListener('click', function(e) {
        // Product modal Add to Order
        if (
            e.target.matches('#productModalForm button[type="submit"], #productModalForm button[type="submit"] *')
        ) {
            // Show success modal
            const successModal = document.getElementById('successBagModal');
            if (successModal) {
                successModal.classList.remove('hidden');
                successModal.classList.add('flex');
                setTimeout(() => {
                    successModal.classList.add('hidden');
                    successModal.classList.remove('flex');
                    window.location.reload();
                }, 20000); // 3 seconds (3000ms)
            }
        }
        // Pastry modal Add to Order
        if (
            e.target.matches('#pastryModalContent .bg-txtHighlighted') ||
            (e.target.closest && e.target.closest('#pastryModalContent .bg-txtHighlighted'))
        ) {
            e.preventDefault();
            const pastryModal = document.getElementById('pastryModal');
            if (pastryModal) {
                pastryModal.classList.add('hidden');
                pastryModal.classList.remove('flex');
            }
            showSuccessBagModal();
        }
    });

    function showSuccessBagModal() {
        let successModal = document.getElementById('successBagModal');
        if (!successModal) {
            successModal = document.createElement('div');
            successModal.id = 'successBagModal';
            successModal.innerHTML = `
                <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/30">
                    <div
                        class="flex min-w-[380px] max-w-md flex-col items-center rounded-lg border border-[#d6c7a1] bg-[#FFECCC] p-12 shadow-2xl">
                        <div class="flex flex-col items-center">
                            <div class="bg-txtHighlighted mb-6 flex h-32 w-32 items-center justify-center rounded-full">
                                <i class="fa-solid fa-check text-6xl text-white"></i>
                            </div>
                            <div class="mt-4 text-center text-xl font-medium text-black">
                                Successfully added to your<br>Bag.
                            </div>
                        </div>
                    </div>
                </div>
            `;
            document.body.appendChild(successModal);
        } else {
            successModal.style.display = 'flex';
        }
        setTimeout(() => {
            if (successModal) successModal.remove();
            window.location.href = '/AllProducts';
        }, 1500);
    }

});
