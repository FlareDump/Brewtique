<!-- FontAwesome Script for Icons -->
<script src="https://kit.fontawesome.com/cce20cf791.js" crossorigin="anonymous"></script>

<nav>
    <!-- Large and Medium Screen Navbar -->
    <div class="hidden items-center justify-around md:flex lg:flex">
        <!-- Navbar Logo and Title -->
        <div class="hidden md:flex lg:flex">
            <a href="/Home" class="flex items-center">
                <img src="./icons/brewtique-logo.png" alt="brewtique">
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
            <div id="user-menu" class="absolute right-0 mt-2 hidden w-48 rounded-lg bg-white p-4 shadow-lg">
                <p class="text-sm text-gray-700">This is a Prototype Feature</p>

                <!-- Logout Button -->
                <form action="Logout" method="POST">
                    @csrf
                    <button type="submit"
                        class="group relative mt-5 rounded-md bg-red-500 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:bg-red-600">
                        Logout
                        <!-- Tooltip Message -->
                        <span
                            class="absolute left-1/2 top-full mt-1 hidden w-max -translate-x-1/2 rounded-md bg-gray-700 px-2 py-1 text-xs text-white group-hover:block">
                            This is a Prototype Feature
                        </span>
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
            <img src="./icons/brewtique-logo.png" alt="brewtique">
            <h1 class="font-TitleFont text-txtTertiary text-lg font-black">Brewtique</h1>
        </a>

        <!-- Burger Menu Button -->
        <div class="flex items-center justify-center pr-5">
            <button id="burger" onclick="toggleMenu()">
                <i id="menu-icon" class="fa-solid fa-bars fa-2xl"></i>
            </button>
        </div>
    </div>
    <!-- End of Small Screen Navbar -->
</nav>

<!-- Small Screen Burger Menu Popup -->
<div id="menu" class="bg-colorExtra absolute right-5 top-16 z-50 hidden w-48 rounded-lg p-4 shadow-lg">
    <ul class="font-Primary text-txtExtra flex flex-col gap-y-4 text-center text-[16px] font-black">
        <!-- Navbar Links -->
        <li><a href="/Home" class="hover:text-txtHighlighted">Home</a></li>
        <li><a href="#" class="hover:text-txtHighlighted">About Us</a></li>
        <li><a href="/Products" class="hover:text-txtHighlighted">Products</a></li>
        <li><a href="#" class="hover:text-txtHighlighted">Contact</a></li>

        <!-- Logout Button -->
        <form action="Logout" method="POST">
            @csrf
            <button type="submit"
                class="group relative mt-5 rounded-md bg-red-500 px-4 py-2 font-bold text-white transition duration-300 ease-in-out hover:bg-red-600">
                Logout
                <!-- Tooltip Message -->
                <span
                    class="absolute left-1/2 top-full mt-1 hidden w-max -translate-x-1/2 rounded-md bg-gray-700 px-2 py-1 text-xs text-white group-hover:block">
                    This is a Prototype Feature
                </span>
            </button>
        </form>
    </ul>
</div>
<!-- End of Small Screen Burger Menu Popup -->

<!-- Scripts -->
@vite('resources/js/app.js')
