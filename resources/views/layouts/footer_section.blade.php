<section class="bg-footerBg mt-1 pt-10">
    <div class="flex flex-col items-center justify-around gap-10 pb-10 md:flex-row lg:flex-row">
        <div>
            <h2 class="text-txtPrimary font-Primary text-xl font-bold">WE'RE JUST A SIP AWAY</h2>
            <p class="font-Secondary text-txtPrimary text-xl font-light"><i>Don’t stress let’s brew up a solution
                    together.</i></p>
        </div>

        <div class="w-100 relative">
            <input type="email" placeholder="Your email"
                class="text-txt-primary bg-txtHighlighted w-full rounded-full px-5 py-3 placeholder-orange-200 outline-none transition-all duration-200 focus:ring-2 focus:ring-orange-300">
            <button
                class="text-txt-primary absolute right-2 top-1/2 -translate-y-1/2 transform rounded-full p-2 px-5 transition-all duration-200 hover:bg-orange-600">
                <i class="fa-solid fa-arrow-right text-txtPrimary"></i>
            </button>
        </div>
    </div>

    <hr class="text-txtPrimary">

    <div class="text-txtPrimary pb-15 flex flex-col items-center justify-around gap-20 md:flex-row lg:flex-row">
        <div class="flex flex-col items-center">
            <img src="{{ asset('icons/brewtique-icon.png') }}" alt="brewtique" class="h-70 w-70">
            <h1 class="font-TitleFont mt-[-50] text-2xl font-black">Brewtique</h1>
        </div>

        <div class="flex flex-col gap-5">
            <h3 class="text-center font-bold md:text-left lg:text-left">Contact Us</h3>
            <ul>
                <li>Email: brewtique@gmail.com</li>
                <li>Phone: +63 912 345 6789</li>
                <li>Address: Atbang STI College Davao</li>
            </ul>
        </div>

        <div class="flex flex-col gap-5">
            <h3 class="text-center font-bold md:text-left lg:text-left">Opening Hours</h3>
            <div class="flex gap-5">
                <div class="bg-txtHighlighted flex h-20 w-20 items-center justify-center rounded-lg">
                    <i class="fa-regular fa-clock fa-2xl"></i>
                </div>
                <ul>
                    <li>Monday - Saturday: 8:00 AM - 8:00 PM</li>
                    <li>Sunday: 10:00 AM – 10:00 PM</li>
                </ul>
            </div>
        </div>
    </div>
    <div
        class="text-txtPrimary bg-txtSecondary flex flex-col items-center gap-4 py-5 md:flex-row md:justify-between md:px-10">
        <div>
            <ul class="flex flex-col items-center gap-5 font-bold md:flex-row md:gap-20">
                <li>&#x2117; 2025 Brewtique. All rights reserve</li>
                <li><a href="/ProductsPage">Products</a> </li>
                <li>About Us</li>
            </ul>
        </div>
        <div>
            <ul class="flex justify-center gap-5 md:justify-end">
                <li>
                    <i class="fa-brands fa-instagram fa-2xl"></i>
                </li>
                <li>
                    <i class="fa-brands fa-square-facebook fa-2xl"></i>
                </li>
            </ul>
        </div>
    </div>
</section>
