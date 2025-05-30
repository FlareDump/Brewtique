<section class="min-h-screen py-10">
    <div class="flex min-h-screen flex-col items-center justify-center md:flex-row lg:flex-row">
        <div class="mb-8 flex flex-1 justify-center md:mb-0">
            <div x-data="{
                images: [
                    '{{ asset('images/Coffee 1.png') }}',
                    '{{ asset('images/Coffee 2.svg') }}',
                    '{{ asset('images/Coffee 3.png') }}',
                    '{{ asset('images/Coffee 4.png') }}'
                ],
                current: 0,
                interval: null,
                start() {
                    this.interval = setInterval(() => {
                        this.next();
                    }, 2500);
                },
                stop() {
                    clearInterval(this.interval);
                },
                next() {
                    this.current = (this.current + 1) % this.images.length;
                },
                prev() {
                    this.current = (this.current - 1 + this.images.length) % this.images.length;
                }
            }" x-init="start()" @mouseenter="stop()" @mouseleave="start()"
                class="relative flex w-full items-center justify-center">
                <button @click="prev" class="hidden"></button>
                <img :src="images[current]" alt="About Us"
                    class="max-h-150 mx-auto rounded-lg transition-all duration-500">
                <button @click="next" class="hidden"></button>
                <div class="absolute bottom-2 left-1/2 flex -translate-x-1/2 gap-2">
                    <template x-for="(img, idx) in images" :key="idx">
                        <span :class="{ 'bg-txtSecondary': idx === current, 'bg-gray-300': idx !== current }"
                            class="block h-2 w-2 rounded-full"></span>
                    </template>
                </div>
            </div>
        </div>
        <div class="flex flex-1 flex-col justify-center gap-4 px-4 text-center align-middle sm:px-8 md:text-left">
            <div class="flex items-start justify-center md:items-start md:justify-start">
                <h1 class="font-TitleFont text-txtSecondary text-4xl font-bold">About Us</h1>
            </div>
            <div>
                <p class="text-txtExtra mt-4 text-justify text-lg md:text-justify lg:mr-20">
                    Brewtique is a coffee shop that offers a unique and personalized experience for coffee lovers. Our
                    mission is to provide high-quality coffee and create a welcoming environment where customers can
                    relax, socialize, and enjoy their favorite brews.
                </p>
                <p class="text-txtExtra mt-4 text-justify text-lg md:text-justify lg:mr-20">
                    At Brewtique, it's not just about the coffee—it's about community. Our cozy, thoughtfully designed
                    space invites you to stay a while, connect with friends, or find inspiration in a quiet moment.
                    We're passionate about what we do, and we’re here to share that passion with you—one cup at a time.
                </p>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
