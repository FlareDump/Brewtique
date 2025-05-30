<section class="font-[DM_Sans]">
    <div
        class="grid min-h-screen grid-cols-1 gap-4 bg-[#f8f5f1] p-4 md:auto-rows-fr md:grid-cols-2 md:gap-6 md:p-8 lg:grid-cols-3 lg:grid-rows-2">

        {{-- Ramsay's Message --}}
        <div
            class="lg:min-h-auto relative flex min-h-[400px] flex-col items-center justify-between overflow-hidden rounded-2xl bg-[#4c280a] px-6 py-8 text-center text-white shadow-xl md:col-span-2 md:min-h-[500px] md:items-center md:px-8 md:py-10 md:text-center lg:col-span-1 lg:row-span-2 lg:px-10 lg:py-12">
            <div class="relative z-10 flex w-full flex-col items-center justify-center">
                <h2 class="mb-5 text-2xl font-bold uppercase tracking-wide md:text-4xl lg:text-5xl">RAMSAY'S MESSAGE</h2>
                <p class="mb-4 text-base opacity-90 md:max-w-xl md:text-xl lg:text-2xl">
                    At Brewtique, every roast tells a story. I've partnered to bring bold flavors, expert blends, and a
                    refined morning ritual.
                </p>
                <p class="mt-2 text-base font-semibold uppercase tracking-wider text-[#e19517] md:text-xl lg:text-2xl">
                    STRAIGHT TO YOUR CUP.
                </p>
            </div>
            <div
                class="pointer-events-none absolute bottom-0 left-0 flex h-[50%] w-full select-none justify-center md:static md:relative md:flex md:h-[300px] md:min-h-0 md:w-full md:items-end md:justify-center lg:absolute lg:bottom-0 lg:left-0 lg:h-[50%] lg:min-h-0 lg:w-full">
                <img src="{{ asset('images/ramsay.png') }}" alt="Gordon Ramsay"
                    class="h-full w-auto max-w-[95%] object-contain object-bottom opacity-90 md:static md:relative md:mx-auto md:h-[300px] md:max-w-[80%] md:self-end lg:h-full lg:max-w-[80%] lg:object-left-bottom">
            </div>
        </div>

        {{-- Testimonial 1 --}}
        <div
            class="group flex min-h-[260px] flex-col items-center justify-between rounded-2xl bg-[#fff1db] px-5 py-6 text-[#4c280a] shadow-lg transition-all duration-300 hover:shadow-2xl sm:hover:scale-105 md:min-h-[300px] md:px-8 md:py-10 lg:px-10 lg:py-12">
            <div class="items-left flex w-full flex-col">
                <h3
                    class="mb-2 text-left text-xl font-bold transition-colors duration-200 group-hover:text-[#e19517] md:text-2xl lg:text-3xl">
                    Anika T.,<br>Portland, OR</h3>
                <p class="max-w-xs text-left italic text-[#524242] opacity-90 md:max-w-sm md:text-base lg:max-w-md">
                    "The hyd artisan blends from all over, but this one hits differently. It's the perfect balance of
                    food and smooth, and it smells like a cozy morning."
                </p>
            </div>
            <div class="mt-4 w-full text-center text-lg tracking-widest text-[#f1b963] md:text-xl">★★★★★</div>
        </div>

        {{-- Coffee Image 1 --}}
        <div class="hidden items-center justify-center rounded-2xl bg-black p-4 shadow-lg lg:flex lg:p-4">
            <img src="{{ asset('images/coffeeart.png') }}" alt="Coffee Beans"
                class="h-full w-full scale-110 rounded-xl object-cover object-bottom transition-transform duration-300 md:max-h-[240px] lg:max-h-[300px]">
        </div>

        {{-- Coffee Image 2 --}}
        <div class="hidden items-center justify-center rounded-2xl bg-black p-4 shadow-lg lg:flex lg:p-4">
            <img src="{{ asset('images/coffeebeans.png') }}" alt="Coffee Art"
                class="h-full w-full scale-110 rounded-xl object-cover object-bottom transition-transform duration-300 md:max-h-[240px] lg:max-h-[300px]">
        </div>

        {{-- Testimonial 2 --}}
        <div
            class="group flex min-h-[260px] flex-col justify-between rounded-2xl bg-[#fff1db] px-5 py-6 text-[#4c280a] shadow-lg transition-all duration-300 hover:shadow-2xl sm:hover:scale-105 md:min-h-[300px] md:px-8 md:py-10 lg:px-10 lg:py-12">
            <div>
                <h3
                    class="mb-2 text-xl font-bold transition-colors duration-200 group-hover:text-[#e19517] md:text-2xl lg:text-3xl">
                    James M.,<br>Brooklyn, NY</h3>
                <p class="italic text-[#524242] opacity-90 md:text-base">
                    "I don't think I could be surprised by other surprises, but this brave changed that. Smooth, too,
                    and full of characters—every cup feels like a treat."
                </p>
            </div>
            <div class="mt-4 text-lg tracking-widest text-[#f1b963] md:text-xl">★★★★★</div>
        </div>
    </div>
</section>
