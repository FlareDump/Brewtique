@extends('layouts.layout')

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'Vouchers')

<section class="font-Primary flex min-h-screen flex-col justify-between py-4 md:py-10">
    <div class="h-full py-5 md:py-15 w-full px-4 md:px-10">
        <div class="grid grid-cols-1 md:grid-cols-6 gap-4">
            <div class="bg-bgColor flex h-full min-h-[400px] md:min-h-[600px] flex-col justify-between rounded-md p-5 shadow-sm">
                <ul class="flex flex-col gap-3 p-2">
                    <li>
                        <a href="/Dashboard/User"
                            class="text-txtSecondary hover:bg-txtHighlighted/40 flex items-center gap-3 rounded-md px-3 py-2 font-medium transition">
                            <i class="fa-regular fa-user text-2xl"></i>
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href="/Dashboard/Order-History"
                            class="text-txtSecondary hover:bg-txtHighlighted/40 flex items-center gap-3 rounded-md px-3 py-2 font-medium transition">
                            <i class="fa-solid fa-mug-hot text-2xl"></i>
                            Order History
                        </a>
                    </li>
                    <li>
                        <a href="/Dashboard/My-Bag"
                            class="text-txtSecondary hover:bg-txtHighlighted/40 flex items-center gap-3 rounded-md px-3 py-2 font-medium transition">
                            <i class="fa-solid fa-bag-shopping text-2xl"></i>
                            My Bag
                        </a>
                    </li>
                    <li>
                        <a href="/Dashboard/Notifications"
                            class="text-txtSecondary hover:bg-txtHighlighted/40 flex items-center gap-3 rounded-md px-3 py-2 font-medium transition">
                            <i class="fa-regular fa-bell text-2xl"></i>
                            Notifications
                        </a>
                    </li>
                    <li>
                        <a href="/Dashboard/Vouchers"
                            class="text-txtSecondary bg-txtHighlighted/80 hover:bg-txtHighlighted flex items-center gap-3 rounded-md px-3 py-2 font-medium transition">
                            <i class="fa-solid fa-ticket text-2xl"></i>
                            Vouchers
                        </a>
                    </li>
                </ul>
                <div class="flex">
                    <button
                        class="bg-txtHighlighted hover:bg-txtSecondary flex w-full items-center gap-3 rounded-md px-6 py-2 text-lg font-medium text-white transition">
                        <i class="fa-solid fa-arrow-right-from-bracket text-2xl"></i>
                        Logout
                    </button>
                </div>
            </div>
            <div class="md:col-span-5">


            {{-- Vourchers --}}
                <div class="bg-bgLight p-4 md:p-6 rounded-md shadow-sm">
                    <h2 class="text-xl md:text-2xl font-bold mb-4 md:mb-6">Vouchers</h2>
                    <div class="space-y-4">
                        <div class="flex items-center bg-bgLight p-3 md:p-4 rounded-md">
                            <div class="w-8 h-8 md:w-10 md:h-10 bg-orange-200 rounded-full flex items-center justify-center mr-3 md:mr-4">
                                <i class="fas fa-ticket text-orange-600 text-sm md:text-base"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base md:text-lg font-semibold">First Order Freebie</h3>
                                <p class="text-gray-500 text-xs md:text-sm"><span class="font-semibold">Get P50 OFF</span> your first delivery.</p>
                                <p class="text-gray-500 text-xs md:text-sm italic">Valid for new users only.</p>
                            </div>
                            <div class="text-right">
                                <p class="text-gray-500 text-xs md:text-sm mb-1">Use code: <span class="text-black font-semibold">BREWFIRST</span></p>
                                <button class="bg-orange-200 hover:bg-orange-300 text-orange-800 text-xs md:text-sm font-medium px-3 py-1 rounded-md transition">
                                    Use now
                                </button>
                            </div>
                        </div>
                        <hr class="border-gray-300">
                        <div class="flex items-center bg-bgLight p-3 md:p-4 rounded-md">
                            <div class="w-8 h-8 md:w-10 md:h-10 bg-orange-200 rounded-full flex items-center justify-center mr-3 md:mr-4">
                                <i class="fas fa-ticket text-orange-600 text-sm md:text-base"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base md:text-lg font-semibold">Midnight Crammer Perk</h3>
                                <p class="text-gray-500 text-xs md:text-sm"><span class="font-semibold">Free Espresso Shot</span> with any drink ordered after 9 PM.</p>
                                <p class="text-gray-500 text-xs md:text-sm italic">Perfect for late-night deadlines.</p>
                            </div>
                            <div class="text-right">
                                <p class="text-gray-500 text-xs md:text-sm mb-1">Use code: <span class="text-black font-semibold">CRAMBOOST</span></p>
                                <button class="bg-orange-200 hover:bg-orange-300 text-orange-800 text-xs md:text-sm font-medium px-3 py-1 rounded-md transition">
                                    Use now
                                </button>
                            </div>
                        </div>
                        <hr class="border-gray-300">
                        <div class="flex items-center bg-bgLight p-3 md:p-4 rounded-md">
                            <div class="w-8 h-8 md:w-10 md:h-10 bg-orange-200 rounded-full flex items-center justify-center mr-3 md:mr-4">
                                <i class="fas fa-ticket text-orange-600 text-sm md:text-base"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base md:text-lg font-semibold">Weekend Duo Deal</h3>
                                <p class="text-gray-500 text-xs md:text-sm"><span class="font-semibold">Buy 1, Get 1 50% OFF</span> on drinks delivered to your door.</p>
                                <p class="text-gray-500 text-xs md:text-sm italic">Available Saturday & Sunday only.</p>
                            </div>
                            <div class="text-right">
                                <p class="text-gray-500 text-xs md:text-sm mb-1">Use code: <span class="text-black font-semibold">WEEKENDWARMUP</span></p>
                                <button class="bg-orange-200 hover:bg-orange-300 text-orange-800 text-xs md:text-sm font-medium px-3 py-1 rounded-md transition">
                                    Use now
                                </button>
                            </div>
                        </div>
                        <hr class="border-gray-300">
                        <div class="flex items-center bg-bgLight p-3 md:p-4 rounded-md">
                            <div class="w-8 h-8 md:w-10 md:h-10 bg-orange-200 rounded-full flex items-center justify-center mr-3 md:mr-4">
                                <i class="fas fa-ticket text-orange-600 text-sm md:text-base"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base md:text-lg font-semibold">Daily Dose Discount</h3>
                                <p class="text-gray-500 text-xs md:text-sm"><span class="font-semibold">Get P15 OFF</span> your favorite drink every morning before 10AM.</p>
                                <p class="text-gray-500 text-xs md:text-sm italic">Valid Mon-Fri only.</p>
                            </div>
                            <div class="text-right">
                                <p class="text-gray-500 text-xs md:text-sm mb-1">Use code: <span class="text-black font-semibold">EARLYBREW</span></p>
                                <button class="bg-orange-200 hover:bg-orange-300 text-orange-800 text-xs md:text-sm font-medium px-3 py-1 rounded-md transition">
                                    Use now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer_section')
