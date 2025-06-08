{{-- cta --}}
<div class="bg-bgPrimary lg:h-150 md:h-150 relative h-screen w-full bg-cover bg-center bg-blend-multiply"
    style="background-image: url({{ asset('images/coffeebg.png') }});">
    <!-- Darken Background -->
    <div class="bg-bgSecondary/50 absolute inset-0"></div>

    <!-- Responsive Content -->
    <div class="fade-in-up relative z-10 mx-auto flex h-full w-full max-w-7xl flex-col items-center justify-center px-4 text-center sm:px-6 lg:px-8"
        id="promo-section">
        <!-- Discount Badge -->
        <div class="absolute right-4 top-4 z-20 h-48 w-48">
            <div class="relative h-full w-full">
                <img src="{{ asset('images/discount.png') }}" alt="30% Discount" class="h-full w-full object-contain">
            </div>
        </div>
        <!-- Promo Headline -->
        <h2 class="font-Primary text-txtPrimary mb-2 text-lg sm:text-xl md:text-2xl lg:text-3xl">
            Today's Special
        </h2>
        <h1
            class="font-TitleFont text-txtPrimary mb-4 text-3xl font-extrabold leading-tight sm:mb-6 sm:text-4xl md:text-5xl lg:text-6xl">
            Coffee Time with Brewtique
        </h1>
        <!-- Promo Second Line -->
        <p
            class="font-Primary text-txtPrimary mx-auto mb-6 max-w-sm text-sm italic sm:mb-8 sm:max-w-md sm:text-base md:max-w-lg md:text-lg lg:max-w-2xl lg:text-xl">
            Your Perfect Cup Starts Here – Find the Coffee You'll Love<br class="hidden sm:block">
            Bright, smooth, and perfect over ice. Only available this season.
        </p>
        <!-- Promo Button -->
        <button onclick="document.getElementById('promoModal').classList.remove('hidden')"
            class="bg-btnColor2 text-txtPrimary font-Primary hover:bg-btnColor inline-block rounded-lg px-4 py-2 text-xs font-bold shadow-md transition duration-300 hover:scale-105 hover:shadow-xl sm:px-5 sm:py-2.5 sm:text-sm md:px-6 md:py-3 md:text-base">
            View Promo
        </button>
    </div>
</div>
<script>
    // Fade-in and fade-out on scroll for promo section (up and out to top)
    window.addEventListener('DOMContentLoaded', function() {
        const promoSection = document.getElementById('promo-section');

        function fadeInOutOppositeOnScroll(el) {
            if (!el) return;

            function onScroll() {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    el.classList.add('fade-in-visible');
                    el.classList.remove('fade-in-out-opposite');
                } else {
                    el.classList.remove('fade-in-visible');
                    el.classList.add('fade-in-out-opposite');
                }
            }
            window.addEventListener('scroll', onScroll);
            onScroll();
        }
        fadeInOutOppositeOnScroll(promoSection);
    });
</script>
<style>
    .fade-in-up.fade-in-out-opposite {
        opacity: 0;
        transform: translateY(-40px);
        /* fade out to the top */
    }
</style>
