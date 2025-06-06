<div
    class="flex flex-col gap-2 bg-[#3b1f00] px-6 py-5 shadow-md md:flex-row md:items-center md:justify-between md:gap-0 md:px-6 md:py-3">
    <div class="flex w-full items-center justify-between gap-2">
        <!-- Left: Nav (mobile: dropdown, desktop: links) -->
        <div class="flex flex-1 items-center">
            <!-- Mobile Dropdown Nav -->
            <div class="relative w-full md:hidden">
                <button id="product-nav-dropdown-btn"
                    class="product-nav-link active flex w-full items-center justify-between bg-[#3b1f00] text-white">
                    <span id="product-nav-active-label">All Products</span>
                    <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="product-nav-dropdown"
                    class="absolute left-0 right-0 z-20 mt-2 hidden rounded-lg bg-[#3b1f00] shadow-lg">
                    <div class="flex flex-col divide-y divide-[#fff2]">
                        <a href="{{ route('all.products') }}" class="product-nav-link px-4 py-3 text-white"
                            data-nav="all">All Products</a>
                        <a href="{{ route('hot.products') }}" class="product-nav-link px-4 py-3 text-white"
                            data-nav="hot">Hot Drinks</a>
                        <a href="{{ route('cold.products') }}" class="product-nav-link px-4 py-3 text-white"
                            data-nav="cold">Cold Drinks</a>
                        <a href="{{ route('pastries.products') }}" class="product-nav-link px-4 py-3 text-white"
                            data-nav="pastry">Pastries</a>
                    </div>
                </div>
            </div>
            <!-- Desktop Nav -->
            <div
                class="hidden w-full flex-col flex-wrap items-center justify-center gap-3 px-2 font-semibold md:flex md:w-auto md:flex-row md:justify-start md:gap-6 md:px-9 lg:flex-row">
                <a href="{{ route('all.products') }}" class="product-nav-link text-white" data-nav="all"><button>All
                        Products</button></a>
                <a href="{{ route('hot.products') }}" class="product-nav-link text-white" data-nav="hot"><button>Hot
                        Drinks</button></a>
                <a href="{{ route('cold.products') }}" class="product-nav-link text-white" data-nav="cold"><button>Cold
                        Drinks</button></a>
                <a href="{{ route('pastries.products') }}" class="product-nav-link text-white"
                    data-nav="pastry"><button>Pastries</button></a>
            </div>
        </div>
        <!-- Right: Bag Icon (always visible) -->
        <div class="lg:px-15 flex items-center justify-end pl-4 md:pl-20">
            <a href="/Dashboard/My-Bag">
                <i class="fa-solid fa-bag-shopping text-txtPrimary text-2xl"></i></a>

        </div>
    </div>
</div>

@vite('resources/js/app.js')
