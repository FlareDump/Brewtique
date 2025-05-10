<script src="https://kit.fontawesome.com/cce20cf791.js" crossorigin="anonymous"></script>
<nav>
    <!--Large and Medium Screen-->
    <div class="hidden items-center justify-around md:flex lg:flex">
        <div class="hidden md:flex lg:flex">
            <a href="/Home" class="flex items-center">
                <img src="./icons/brewtique-logo.png" alt="brewtique">
                <h1 class="font-TitleFont text-txtTertiary text-lg font-black">Brewtique</h1>
            </a>
        </div>
        <ul class="font-Primary text-txtTertiary text-[16px] font-black md:flex md:gap-x-10 lg:flex lg:gap-x-20">
            <li><a href="/Home">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="/Products">Products</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <a href="/Login">
            <button
                class="border-txtTertiary text-txtTertiary rounded-lg border px-12 py-0.5 font-bold md:flex lg:flex">
                Login
            </button>
        </a>
    </div>

    <!--Small Screen-->
    <div class="align-center flex justify-between md:hidden lg:hidden">
        <a href="/Home" class="flex items-center">
            <img src="./icons/brewtique-logo.png" alt="brewtique">
            <h1 class="font-TitleFont text-txtTertiary text-lg font-black">Brewtique</h1>
        </a>
        <div class="flex items-center justify-center pr-5">
            <button id="burger" onclick="toggleMenu()">
                <i id="menu-icon" class="fa-solid fa-bars fa-2xl"></i>
            </button>
        </div>
    </div>
</nav>

<div id="menu" class="absolute right-5 top-16 z-50 hidden w-48 rounded-lg bg-white p-4 shadow-lg">
    <ul class="font-Primary text-txtTertiary flex flex-col gap-y-4 text-center text-[16px] font-black">
        <li><a href="/Home">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="/Products">Products</a></li>
        <li><a href="#">Contact</a></li>
        <li class="mt-5"><a href="/Login">Login</a></li>
    </ul>
</div>

@vite('resources/js/app.js')
