<section class="font-[DM_Sans]">
    <div class="grid min-h-screen grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:grid-rows-2">

        {{-- Ramsay's Message --}}
        <div
            class="lg:min-h-auto relative flex min-h-[500px] flex-col justify-between overflow-hidden bg-[#4c280a] px-6 py-8 text-white md:px-10 md:py-12 lg:row-span-2">
            <div class="relative z-10">
                <h2 class="mb-5 text-3xl font-bold uppercase md:text-4xl">RAMSAY'S MESSAGE</h2>
                <p class="mb-4 text-base">
                    At Brewtique, every roast tells a story. I've partnered to bring bold flavors, expert blends, and a
                    refined morning ritual.
                </p>
                <p class="mt-2 font-semibold uppercase text-[#e19517]">STRAIGHT TO YOUR CUP.</p>
            </div>
            <div class="absolute bottom-0 left-0 h-[40%] w-full md:min-h-[250px] lg:h-[50%]">
                <img src="{{ asset('images/ramsay.png') }}" alt="Gordon Ramsay"
                    class="h-full w-auto max-w-[80%] object-contain object-left-bottom">
            </div>
        </div>

        {{-- Testimonial 1 --}}
        <div
            class="flex min-h-[300px] flex-col items-center justify-between bg-[#fff1db] px-6 py-8 text-[#4c280a] md:px-10 md:py-12">
            <div class="items-left flex w-full flex-col">
                <h3 class="mb-2 text-left text-3xl font-bold md:text-4xl">Anika T.,<br>Portland, OR</h3>
                <p class="max-w-xs text-left text-[#524242] md:max-w-sm lg:max-w-md">
                    "The hyd artisan blends from all over, but this one hits differently. It's the perfect balance of
                    food and smooth, and it smells like a cozy morning."
                </p>
            </div>
            <div class="mt-4 w-full text-center text-lg text-[#f1b963]">★★★★★</div>
        </div>

        {{-- Coffee Image 1 --}}
        <div class="flex items-center justify-center bg-black p-4">
            <img src="{{ asset('images/coffeeart.png') }}" alt="Coffee Beans"
                class="max-h-[400px] w-auto object-contain">
        </div>

        {{-- Coffee Image 2 --}}
        <div class="flex items-center justify-center bg-black p-4">
            <img src="{{ asset('images/coffeebeans.png') }}" alt="Coffee Art"
                class="max-h-[400px] w-auto object-contain">
        </div>

        {{-- Testimonial 2 --}}
        <div
            class="flex min-h-[300px] flex-col justify-between bg-[#fff1db] px-6 py-8 text-[#4c280a] md:px-10 md:py-12">
            <div>
                <h3 class="mb-2 text-xl font-bold md:text-2xl">James M.,<br>Brooklyn, NY</h3>
                <p class="text-[#524242]">
                    "I don't think I could be surprised by other surprises, but this brave changed that. Smooth, too,
                    and full of characters—every cup feels like a treat."
                </p>
            </div>
            <div class="mt-4 text-lg text-[#f1b963]">★★★★★</div>
        </div>
    </div>
</section>
