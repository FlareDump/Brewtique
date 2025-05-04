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
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <button class="border-txtTertiary text-txtTertiary rounded-lg border px-12 py-0.5 font-bold md:flex lg:flex">
            Login
        </button>
    </div>

    <!--Small Screen-->
    <div class="align-center flex justify-between md:hidden lg:hidden">
        <a href="/Home" class="flex items-center">
            <img src="./icons/brewtique-logo.png" alt="brewtique">
            <h1 class="font-TitleFont text-txtTertiary text-lg font-black">Brewtique</h1>
        </a>
        <div class="flex items-center justify-center pr-5">
            <button popovertarget="menu" id="burger"><i class="fa-solid fa-bars fa-2xl"></i></button>
        </div>
    </div>
</nav>

<div popover anchor="burger" id="menu"
    class="inset-0 my-4 translate-x-[-50%] [left:anchor(left)] [top:anchor(bottom)]">
    <ul class="font-Primary text-txtTertiary flex-col gap-y-10 p-2 text-[16px] font-black">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</div>
