<script src="https://kit.fontawesome.com/cce20cf791.js" crossorigin="anonymous"></script>
<nav class="bg-bgPrimary fixed z-50 w-full shadow-md">
    <!--Large and Medium Screen-->
    <div class="hidden items-center justify-around md:flex lg:flex">
        <div class="hidden md:flex lg:flex">
            <a href="/Home" class="flex items-center">
                <img src="{{ asset('icons/brewtique-logo.png') }}" alt="brewtique">
                <h1 class="font-TitleFont text-txtTertiary text-lg font-black">Brewtique</h1>
            </a>
        </div>
        <ul class="font-Primary text-txtTertiary text-[16px] font-black md:flex md:gap-x-10 lg:flex lg:gap-x-20">
            <li><a href="/Home">Home</a></li>
            <li><a href="/Home#aboutus">About Us</a></li>
            <li><a href="{{ route('splashscreen') }}">Products</a></li>
            <li><a href="#footer">Contact</a></li>
        </ul>
        <a href="/Splash">
            <button
                class="bg-btnColor hover:bg-btnColor2 text-txtPrimary font-Primary flex w-full items-center justify-center gap-3 rounded-md px-10 py-1.5 font-bold shadow transition-colors duration-200">
                <i class="fa-solid fa-arrow-right-to-bracket text-2xl"></i> Login
            </button>
        </a>
    </div>

    <!--Small Screen-->
    <div class="align-center flex justify-between md:hidden lg:hidden">
        <a href="/Home" class="flex items-center">
            <img src="{{ asset('icons/brewtique-logo.png') }}" alt="brewtique">
            <h1 class="font-TitleFont text-txtTertiary text-lg font-black">Brewtique</h1>
        </a>
        <div class="flex items-center justify-center pr-5">
            <button id="burger" onclick="toggleMenu()">
                <i id="menu-icon" class="fa-solid fa-bars fa-2xl"></i>
            </button>
        </div>
    </div>
</nav>

<div id="menu" class="fixed inset-0 z-50 items-center justify-center" style="display: none;">
    <!-- Overlay for closing -->
    <div id="menu-overlay" class="absolute inset-0 cursor-pointer bg-black"
        style="background-color: rgba(0, 0, 0, 0.4);"></div>
    <!-- Centered Menu Panel -->
    <div class="bg-colorExtra relative z-10 flex w-[90vw] max-w-xs flex-col justify-between rounded-lg p-8 shadow-2xl">
        <ul class="font-Primary text-txtExtra flex flex-col gap-3 text-[18px] font-black">
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
                <a href="{{ route('splashscreen') }}"
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
        <a href="{{ route('splashscreen') }}" class="mt-8">
            <button
                class="bg-btnColor hover:bg-btnColor2 text-txtPrimary font-Primary flex w-full items-center justify-center gap-3 rounded-md px-4 py-3 text-xl font-bold shadow transition-colors duration-200">
                <i class="fa-solid fa-arrow-right-to-bracket text-2xl"></i> Login
            </button>
        </a>
    </div>
</div>

@vite('resources/js/app.js')
