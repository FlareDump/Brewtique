<!-- Promo Modal -->
<div class="no-scrollbar no-scrollbar h-[622px] w-[1080px] overflow-y-auto rounded-lg bg-white shadow-lg">

    <!-- Navbar modal with closing button -->
    <div
        class="bg-bgPrimary rou fixed z-40 flex w-full max-w-[1080px] items-center justify-between rounded-t-lg p-4 px-10 shadow-lg">
        <div class="flex items-center">
            <a href="/Home" class="flex items-center">
                <img src="./icons/brewtique-logo.png" alt="brewtique" class="h-8">
                <h1 class="font-TitleFont text-txtTertiary ml-2 text-lg font-black">Brewtique</h1>
            </a>
        </div>
        <button onclick="document.getElementById('promoModal').classList.add('hidden')"
            class="flex items-center justify-center text-gray-500 hover:text-gray-700">
            <i class="fa-solid fa-xmark fa-2xl"></i>
        </button>
    </div>
    <!-- Promo Content -->
    <div class="flex h-[50vh] items-center justify-center bg-cover bg-center px-4 text-center sm:h-[64vh] md:h-[96vh]"
        style="background-image: linear-gradient(rgba(76, 40, 10, 0.3), rgba(76, 40, 10, 0.3)), url('{{ asset('images/coffeepromobg.png') }}')">

        <div class="mx-auto max-w-4xl">
            <h1 class="font-title text-txtPrimary mb-2 text-2xl font-bold sm:mb-4 sm:text-3xl md:text-5xl">Brew
                More, Pay Less</h1>
            <p class="text-txtPrimary mx-auto max-w-2xl text-base sm:text-lg md:text-xl">Limited time offers just
                for you</p>
        </div>
    </div>

    <main class="container mx-auto px-4 py-8 sm:px-6 sm:py-12">
        <!-- Main Card -->
        <div class="bg-colorExtra mb-8 flex flex-col rounded-lg shadow-md sm:mb-12 md:flex-row">
            <img src="{{ asset('images/coffeespecial.png') }}"
                class="h-48 w-full rounded-t-lg object-cover sm:h-64 md:h-auto md:w-1/2 md:rounded-l-lg md:rounded-tr-none">
            <div class="p-4 sm:p-6 md:w-1/2 md:p-8">
                <span class="text-txtHighlighted mb-1 text-xs font-semibold uppercase sm:text-sm">Today's
                    Special</span>
                <h2 class="font-TitleFont text-txtSecondary mb-2 text-xl font-bold sm:mb-4 sm:text-2xl md:text-3xl">
                    Coffee Time with Brewtique</h2>
                <div class="mb-4 flex flex-col gap-2 sm:mb-6 sm:flex-row sm:items-center sm:gap-0">
                    <span
                        class="bg-btnColor2 text-txtPrimary w-fit rounded-full px-2 py-1 text-xs font-bold sm:mr-4 sm:px-3 sm:text-sm">30%
                        OFF</span>
                    <span class="text-txtExtra text-xs sm:text-sm">Valid until
                        {{ now()->addDays(7)->format('F j, Y') }}</span>
                </div>
                <p class="text-txtExtra mb-4 text-sm sm:mb-6 sm:text-base">Bright, smooth, and perfect over ice.
                    Only available this season.</p>
            </div>
        </div>

        <h2 class="font-TitleFont text-txtSecondary mb-6 text-center text-xl font-bold sm:mb-8 sm:text-2xl">More
            Coffee Deals</h2>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 md:gap-8 lg:grid-cols-3">
            <!-- Promo 1 -->
            <div class="bg-colorExtra rounded-lg shadow-md transition-shadow duration-300 hover:shadow-lg">
                <img src="{{ asset('images/promo1.png') }}" class="h-40 w-full rounded-t-lg object-cover sm:h-48">
                <div class="p-4 sm:p-6">
                    <div class="mb-2 flex justify-between">
                        <h3 class="font-TitleFont text-txtSecondary text-lg font-bold sm:text-xl">Buy 1 Get 1 Coffee
                        </h3>
                        <span
                            class="bg-btnColor text-txtSecondary flex items-center justify-center rounded px-2 text-center text-xs">New</span>
                    </div>
                    <p class="text-txtExtra mb-3 text-sm sm:mb-4 sm:text-base">Buy any specialty coffee and get
                        another one for free!</p>
                    <p class="text-txtExtra text-xs sm:text-sm">Until {{ now()->addDays(14)->format('M j') }}</p>
                </div>
            </div>

            <!-- Promo 2 -->
            <div class="bg-colorExtra rounded-lg shadow-md transition-shadow duration-300 hover:shadow-lg">
                <img src="{{ asset('images/promo2.png') }}" class="h-40 w-full rounded-t-lg object-cover sm:h-48">
                <div class="p-4 sm:p-6">
                    <div class="mb-2 flex justify-between">
                        <h3 class="font-TitleFont text-txtSecondary text-lg font-bold sm:text-xl">Student Special
                        </h3>
                        <span
                            class="bg-btnColor text-txtSecondary flex items-center justify-center rounded px-2 text-center text-xs">Student
                            Perk</span>
                    </div>
                    <p class="text-txtExtra mb-3 text-sm sm:mb-4 sm:text-base">10% OFF any drink with student ID.
                    </p>
                    <p class="text-txtExtra text-xs sm:text-sm">Until {{ now()->addDays(5)->format('M j') }}</p>
                </div>
            </div>

            <!-- Promo 3 -->
            <div class="bg-colorExtra rounded-lg shadow-md transition-shadow duration-300 hover:shadow-lg">
                <img src="{{ asset('images/promo3.png') }}" class="h-40 w-full rounded-t-lg object-cover sm:h-48">
                <div class="p-4 sm:p-6">
                    <div class="mb-2 flex justify-between">
                        <h3 class="font-TitleFont text-txtSecondary text-lg font-bold sm:text-xl">Loyalty Discount
                        </h3>
                        <span
                            class="bg-btnColor text-txtSecondary flex items-center justify-center rounded px-2 text-center text-xs">Members
                            Only</span>
                    </div>
                    <p class="text-txtExtra mb-3 text-sm sm:mb-4 sm:text-base">15% off all coffee purchases.</p>
                    <p class="text-txtExtra text-xs sm:text-sm">Ongoing</p>
                </div>
            </div>
        </div>
    </main>
</div>
