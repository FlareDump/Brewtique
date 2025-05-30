<!-- FontAwesome Script for Icons -->
<script src="https://kit.fontawesome.com/cce20cf791.js" crossorigin="anonymous"></script>

<nav class="bg-bgPrimary fixed z-50 w-full shadow-md">
    <!-- Large and Medium Screen Navbar -->
    <div class="hidden items-center justify-around md:flex lg:flex">
        <!-- Navbar Logo and Title -->
        <div class="hidden md:flex lg:flex">
            <a href="/Home" class="flex items-center">
                <img src="{{ asset('icons/brewtique-logo.png') }}" alt="brewtique">
                <h1 class="font-TitleFont text-txtTertiary text-lg font-black">Brewtique</h1>
            </a>
        </div>

        <!-- Navbar Links -->
        <ul class="font-Primary text-txtTertiary text-[16px] font-black md:flex md:gap-x-10 lg:flex lg:gap-x-20">
            <li><a href="/Home">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="/Products">Products</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        <!-- User Icon and Dropdown Menu -->
        <div class="relative">
            <!-- User Icon Button -->
            <button class="px-12 py-0.5 md:flex lg:flex" id="user-menu-button">
                <i class="fa-solid fa-circle-user fa-2xl"></i>
            </button>

            <!-- Dropdown Menu -->
            <div id="user-menu" class="bg-colorExtra absolute right-0 z-50 mt-2 hidden w-64 rounded-lg p-6 shadow-2xl">
                <ul class="flex flex-col gap-4">
                    <li>
                        <a href="Dashboard/User"
                            class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-2 text-base transition-colors duration-200">
                            <i class="fa-regular fa-user text-xl"></i> My Account
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 px-4 py-2 text-base transition-colors duration-200">
                            <i class="fa-solid fa-mug-hot text-xl"></i> My Purchase
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 px-4 py-2 text-base transition-colors duration-200">
                            <i class="fa-solid fa-bag-shopping text-xl"></i> My Bag
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 px-4 py-2 text-base transition-colors duration-200">
                            <i class="fa-regular fa-bell text-xl"></i> Notifications
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 px-4 py-2 text-base transition-colors duration-200">
                            <i class="fa-solid fa-ticket text-xl"></i> Vouchers
                        </a>
                    </li>
                </ul>
                <form action="Logout" method="POST" class="mt-8">
                    @csrf
                    <button type="submit"
                        class="bg-btnColor font-Primary text-txtPrimary hover:bg-btnColor2 flex w-full items-center gap-3 rounded-md px-4 py-2 text-lg font-bold transition duration-300 ease-in-out">
                        <i class="fa-solid fa-arrow-right-from-bracket text-2xl"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- End of Large and Medium Screen Navbar -->

    <!-- Small Screen Navbar -->
    <div class="align-center flex justify-between md:hidden lg:hidden">
        <!-- Navbar Logo and Title -->
        <a href="/Home" class="flex items-center">
            <img src="{{ asset('icons/brewtique-logo.png') }}" alt="brewtique">
            <h1 class="font-TitleFont text-txtTertiary text-lg font-black">Brewtique</h1>
        </a>
        <div class="flex items-center gap-4 pr-5">
            <!-- Burger Menu Button -->
            <button id="burger" onclick="toggleMenu()">
                <i id="menu-icon" class="fa-solid fa-bars fa-2xl"></i>
            </button>
            <!-- User Icon Button for Dropdown -->
            <button id="user-menu-mobile-btn">
                <i class="fa-solid fa-circle-user fa-2xl"></i>
            </button>
        </div>
    </div>
    <!-- End of Small Screen Navbar -->

    <!-- Small Screen Burger Menu Popup (Navbar Links) -->
    <div id="menu" class="fixed inset-0 z-50 items-center justify-center" style="display: none;">
        <!-- Overlay for closing -->
        <div id="menu-overlay" class="absolute inset-0 cursor-pointer bg-black"
            style=" background-color: rgba(0, 0, 0, 0.4);"></div>
        <!-- Centered Menu Panel -->
        <div
            class="bg-colorExtra relative z-10 flex w-[90vw] max-w-xs flex-col justify-between rounded-lg p-8 shadow-2xl">
            <ul class="font-Primary text-txtExtra flex flex-col gap-3 text-[18px]">
                <li>
                    <a href="/Home"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-house text-2xl"></i> Home
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-users text-2xl"></i> About Us
                    </a>
                </li>
                <li>
                    <a href="/Products"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-mug-hot text-2xl"></i> Products
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-envelope text-2xl"></i> Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End of Small Screen Burger Menu Popup -->

    <!-- Small Screen User Dropdown Popup -->
    <div id="user-menu-mobile" class="fixed inset-0 z-50 items-center justify-center" style="display: none;">
        <!-- Overlay for closing -->
        <div id="user-menu-mobile-overlay" class="absolute inset-0 cursor-pointer bg-black"
            style=" background-color: rgba(0, 0, 0, 0.4);"></div>
        <!-- Centered Menu Panel -->
        <div
            class="bg-colorExtra relative z-10 flex w-[90vw] max-w-xs flex-col justify-between rounded-lg p-8 shadow-2xl">
            <ul class="font-Primary text-txtExtra flex flex-col gap-3 text-[18px]">
                <li>
                    <a href="Dashboard/User"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-regular fa-user text-2xl"></i> My Account
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-mug-hot text-2xl"></i> Order History
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-bag-shopping text-2xl"></i> My Bag
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-regular fa-bell text-2xl"></i> Notifications
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-ticket text-2xl"></i> Vouchers
                    </a>
                </li>
            </ul>
            <form action="Logout" method="POST" class="mt-8 w-full">
                @csrf
                <button type="submit"
                    class="bg-btnColor text-txtPrimary hover:bg-btnColor2 flex w-full items-center gap-3 rounded-md px-4 py-3 text-xl font-bold transition duration-300 ease-in-out">
                    <i class="fa-solid fa-arrow-right-from-bracket text-2xl"></i> Logout
                </button>
            </form>
        </div>
    </div>
    <!-- End of Small Screen User Dropdown Popup -->

    <!-- Scripts -->
    @vite('resources/js/app.js')
</nav>
