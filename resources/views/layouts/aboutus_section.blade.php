<section class="h-screen">
    <div class="flex h-screen flex-row items-center justify-center">
        <div class="flex flex-1 justify-center">
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
        <div class="flex flex-1 flex-col justify-center gap-4 align-middle">
            <div class="flex items-start">
                <h1 class="font-TitleFont text-txtSecondary text-4xl font-bold">About Us</h1>
            </div>
            <div>
                <p class="text-txtExtra mt-4 text-justify text-lg lg:mr-20">
                    Brewtique is a coffee shop that offers a unique and personalized experience for coffee lovers. Our
                    mission is to provide high-quality coffee and create a welcoming environment where customers can
                    relax, socialize, and enjoy their favorite brews.
                </p>
                <p class="text-txtExtra mt-4 text-lg">
                    We take pride in sourcing the finest beans from around the world and
                </p>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
