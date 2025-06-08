<section class="lg:pt-15">
    <div class="bg-bgPrimary flex h-screen flex-row items-center justify-center">
        <div class="lg:ml-25 flex flex-col items-center gap-10 px-5 lg:w-[50%]">
            <h1
                class="font-Primary text-txtExtra text-center text-5xl font-black md:text-center lg:text-left lg:text-6xl">
                Awaken Your Senses with Every Sip of Brewtique Coffee
            </h1>
            <p
                class="font-Primary text-txtSubText lg:text-md text-center text-lg font-medium md:text-center lg:text-left">
                Discover the artistry behind every cup of Brewtique coffee. Whether you're starting your day or taking a
                well-earned break, we serve perfection. One brew at a time.
            </p>
            <div class="lg:flex-start flex w-full items-center justify-center md:justify-center lg:justify-start">
                <button
                    class="text-txtPrimary bg-btnColor font-Primary hover:bg-btnColor2 rounded-lg px-7 py-1 text-lg font-black transition-colors duration-200 hover:scale-105 hover:shadow-xl">
                    <a href="{{ auth()->check() ? route('all.products') : route('splashscreen') }}">Order now</a>
                </button>
            </div>
        </div>
        <div class="hidden w-[50%] items-center justify-center md:hidden lg:flex">
            <img src="{{ asset('images/Coffee - Landing Page.svg') }}" alt="">
        </div>
    </div>
</section>
