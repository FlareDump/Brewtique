<!DOCTYPE html>
<html lang="en" style="background-color: #fff1db;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brewtique - Promotions</title>
    <link rel="icon" href="{{ asset('icons/brewtique-icon.png') }}">
    @vite(['resources/css/app.css'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans&family=Inknut+Antiqua&display=swap');
        .font-title { font-family: 'Inknut Antiqua', serif; }
        .font-primary { font-family: 'DM Sans', sans-serif; }
    </style>
</head>
<body class="font-primary">
    @auth
        @include('components.logged-navbar')
    @else
        @include('components.navbar')
    @endauth

    <!--promo section-->
    <div class="h-[50vh] sm:h-[64vh] md:h-[96vh] bg-cover bg-center flex items-center justify-center text-center px-4"
         style="background-image: linear-gradient(rgba(76, 40, 10, 0.3), rgba(76, 40, 10, 0.3)), url('{{ asset('images/coffeepromobg.png') }}')">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-2xl sm:text-3xl md:text-5xl font-bold mb-2 sm:mb-4 font-title text-white">Brew More, Pay Less</h1>
            <p class="text-base sm:text-lg md:text-xl max-w-2xl mx-auto text-white">Limited time offers just for you</p>
        </div>
    </div>

    <main class="container mx-auto px-4 sm:px-6 py-8 sm:py-12">
        <!--main card-->
        <div class="bg-[#ffecc9] rounded-lg shadow-md mb-8 sm:mb-12 flex flex-col md:flex-row">
            <img src="{{ asset('images/coffeespecial.png') }}" 
                 class="w-full md:w-1/2 h-48 sm:h-64 md:h-auto object-cover rounded-t-lg md:rounded-tr-none md:rounded-l-lg">
            <div class="p-4 sm:p-6 md:p-8 md:w-1/2">
                <span class="uppercase text-xs sm:text-sm font-semibold mb-1 text-[#d78325]">Today's Special</span>
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-2 sm:mb-4 font-title text-[#4c280a]">Coffee Time with Brewtique</h2>
                <div class="flex flex-col sm:flex-row sm:items-center mb-4 sm:mb-6 gap-2 sm:gap-0">
                    <span class="px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-bold sm:mr-4 bg-[#e19517] text-white w-fit">30% OFF</span>
                    <span class="text-xs sm:text-sm text-[#524242]">Valid until {{ now()->addDays(7)->format('F j, Y') }}</span>
                </div>
                <p class="mb-4 sm:mb-6 text-sm sm:text-base text-[#524242]">Bright, smooth, and perfect over ice. Only available this season.</p>
            </div>
        </div>

        <h2 class="text-xl sm:text-2xl font-bold mb-6 sm:mb-8 text-center font-title text-[#4c280a]">More Coffee Deals</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
            <!--promo 1 -->
            <div class="bg-[#ffecc9] rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('images/promo1.png') }}" class="w-full h-40 sm:h-48 object-cover rounded-t-lg">
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between mb-2">
                        <h3 class="text-lg sm:text-xl font-bold font-title text-[#4c280a]">Buy 1 Get 1 Coffee</h3>
                        <span class="text-xs px-2 py-0.5 rounded bg-[#f1b963] text-[#4c280a]">New</span>
                    </div>
                    <p class="mb-3 sm:mb-4 text-sm sm:text-base text-[#524242]">Buy any specialty coffee and get another one for free!</p>
                    <p class="text-xs sm:text-sm text-[#524242]">Until {{ now()->addDays(14)->format('M j') }}</p>
                </div>
            </div>

            <!--promo 2-->
            <div class="bg-[#ffecc9] rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('images/promo2.png') }}" class="w-full h-40 sm:h-48 object-cover rounded-t-lg">
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between mb-2">
                        <h3 class="text-lg sm:text-xl font-bold font-title text-[#4c280a]">Student Special</h3>
                        <span class="text-xs px-2 py-0.5 rounded bg-[#f1b963] text-[#4c280a]">Student Perk</span>
                    </div>
                    <p class="mb-3 sm:mb-4 text-sm sm:text-base text-[#524242]">10% OFF any drink with student ID.</p>
                    <p class="text-xs sm:text-sm text-[#524242]">Until {{ now()->addDays(5)->format('M j') }}</p>
                </div>
            </div>

            <!--promo 3-->
            <div class="bg-[#ffecc9] rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('images/promo3.png') }}" class="w-full h-40 sm:h-48 object-cover rounded-t-lg">
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between mb-2">
                        <h3 class="text-lg sm:text-xl font-bold font-title text-[#4c280a]">Loyalty Discount</h3>
                        <span class="text-xs px-2 py-0.5 rounded bg-[#f1b963] text-[#4c280a]">Members Only</span>
                    </div>
                    <p class="mb-3 sm:mb-4 text-sm sm:text-base text-[#524242]">15% off all coffee purchases.</p>
                    <p class="text-xs sm:text-sm text-[#524242]">Ongoing</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>