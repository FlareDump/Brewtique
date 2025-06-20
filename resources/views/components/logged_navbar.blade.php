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
            <li><a href="/Home#aboutus">About Us</a></li>
            <li><a href="/AllProducts">Products</a></li>
            <li><a href="#footer">Contact</a></li>
        </ul>

        <!-- User Icon and Dropdown Menu -->
        <div class="relative">
            <!-- User Icon Button -->
            <button
                class="bg-btnColor hover:bg-btnColor/80 group relative flex items-center justify-center rounded-2xl px-10 py-5 shadow-md transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-black"
                id="user-menu-button">
                <span class="absolute -right-1 -top-1 flex h-3 w-3">
                    <span
                        class="bg-txtHighlighted absolute inline-flex h-full w-full animate-ping rounded-full opacity-75"></span>
                    <span class="bg-txtHighlighted relative inline-flex h-3 w-3 rounded-full"></span>
                </span>
                <i
                    class="fa-solid fa-circle-user fa-2xl text-white transition-colors duration-200 group-hover:text-white"></i>
            </button>

            <!-- Dropdown Menu -->
            <div id="user-menu" class="bg-colorExtra absolute right-0 z-50 mt-2 hidden w-64 rounded-lg p-6 shadow-2xl">
                <ul class="flex flex-col gap-4">
                    <li>
                        <a href="/Dashboard/User"
                            class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-2 text-base transition-colors duration-200">
                            <i class="fa-regular fa-user text-xl"></i> My Account
                        </a>
                    </li>
                    <li>
                        <a href="/Dashboard/Order-History"
                            class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 px-4 py-2 text-base transition-colors duration-200">
                            <i class="fa-solid fa-mug-hot text-xl"></i> Order History
                        </a>
                    </li>
                    <li>
                        <a href="/Dashboard/My-Bag"
                            class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 px-4 py-2 text-base transition-colors duration-200">
                            <i class="fa-solid fa-bag-shopping text-xl"></i> My Bag
                        </a>
                    </li>
                    <li>
                        <a href="/Dashboard/Notifications"
                            class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 px-4 py-2 text-base transition-colors duration-200">
                            <i class="fa-regular fa-bell text-xl"></i> Notifications
                        </a>
                    </li>
                    <li>
                        <a href="/Dashboard/Vouchers"
                            class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 px-4 py-2 text-base transition-colors duration-200">
                            <i class="fa-solid fa-ticket text-xl"></i> Vouchers
                        </a>
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="mt-8">
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
            <!-- User Icon Button for Dropdown -->
            <button id="user-menu-mobile-btn"
                class="bg-btnColor hover:bg-btnColor/80 group relative flex items-center justify-center rounded-2xl px-5 py-5 shadow-md transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-black">
                <span class="absolute -right-1 -top-1 flex h-3 w-3">
                    <span
                        class="bg-txtHighlighted absolute inline-flex h-full w-full animate-ping rounded-full opacity-75"></span>
                    <span class="bg-txtHighlighted relative inline-flex h-3 w-3 rounded-full"></span>
                </span>
                <i
                    class="fa-solid fa-circle-user fa-2xl text-white transition-colors duration-200 group-hover:text-white"></i>
            </button>
            <!-- Burger Menu Button -->
            <button id="burger" onclick="toggleMenu()">
                <i id="menu-icon" class="fa-solid fa-bars fa-2xl"></i>
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
                    <a href="/Home#aboutus"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-users text-2xl"></i> About Us
                    </a>
                </li>
                <li>
                    <a href="/AllProducts"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-mug-hot text-2xl"></i> Products
                    </a>
                </li>
                <li>
                    <a href="#footer"
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
                    <a href="/Dashboard/Order-History"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-mug-hot text-2xl"></i> Order History
                    </a>
                </li>
                <li>
                    <a href="/Dashboard/My-Bag"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-bag-shopping text-2xl"></i> My Bag
                    </a>
                </li>
                <li>
                    <a href="/Dashboard/Notifications"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-regular fa-bell text-2xl"></i> Notifications
                    </a>
                </li>
                <li>
                    <a href="/Dashboard/Vouchers"
                        class="font-Primary text-txtSecondary hover:bg-btnColor hover:text-txtPrimary flex items-center gap-3 rounded-md px-4 py-3 text-lg transition-colors duration-200">
                        <i class="fa-solid fa-ticket text-2xl"></i> Vouchers
                    </a>
                </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="mt-8 w-full">
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
