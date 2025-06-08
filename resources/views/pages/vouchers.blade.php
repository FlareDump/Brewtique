@extends('layouts.layout')
<link rel="icon" href="/icons/brewtique-icon.png">

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'Vouchers')

<section class="font-Primary flex min-h-screen flex-col justify-between py-4 md:py-10">
    <div class="md:py-15 h-full w-full px-4 py-5 md:px-10">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-6">
            <div
                class="bg-bgColor flex h-full min-h-[400px] flex-col justify-between rounded-md p-5 shadow-sm md:min-h-[600px]">
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
                <div>
                    <form action="{{ route('logout') }}" method="POST" class="mt-8">
                        @csrf
                        <button type="submit"
                            class="bg-btnColor font-Primary text-txtPrimary hover:bg-btnColor2 flex w-full items-center gap-3 rounded-md px-4 py-2 text-lg font-bold transition duration-300 ease-in-out">
                            <i class="fa-solid fa-arrow-right-from-bracket text-2xl"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
            <div class="md:col-span-5">


                {{-- Vourchers --}}
                <div class="bg-bgLight rounded-md p-4 shadow-sm md:p-6">
                    <h2 class="mb-4 text-xl font-bold md:mb-6 md:text-2xl">Vouchers</h2>
                    <div class="space-y-4">
                        <div class="bg-bgLight flex items-center rounded-md p-3 md:p-4">
                            <div
                                class="mr-3 flex h-8 w-8 items-center justify-center rounded-full bg-orange-200 md:mr-4 md:h-10 md:w-10">
                                <i class="fas fa-ticket text-sm text-orange-600 md:text-base"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base font-semibold md:text-lg">First Order Freebie</h3>
                                <p class="text-xs text-gray-500 md:text-sm"><span class="font-semibold">Get P50
                                        OFF</span> your first delivery.</p>
                                <p class="text-xs italic text-gray-500 md:text-sm">Valid for new users only.</p>
                            </div>
                            <div class="text-right">
                                <p class="mb-1 text-xs text-gray-500 md:text-sm">Use code: <span
                                        class="font-semibold text-black">BREWFIRST</span></p>
                                <button
                                    class="rounded-md bg-orange-200 px-3 py-1 text-xs font-medium text-orange-800 transition hover:bg-orange-300 md:text-sm">
                                    Use now
                                </button>
                            </div>
                        </div>
                        <hr class="border-gray-300">
                        <div class="bg-bgLight flex items-center rounded-md p-3 md:p-4">
                            <div
                                class="mr-3 flex h-8 w-8 items-center justify-center rounded-full bg-orange-200 md:mr-4 md:h-10 md:w-10">
                                <i class="fas fa-ticket text-sm text-orange-600 md:text-base"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base font-semibold md:text-lg">Midnight Crammer Perk</h3>
                                <p class="text-xs text-gray-500 md:text-sm"><span class="font-semibold">Free Espresso
                                        Shot</span> with any drink ordered after 9 PM.</p>
                                <p class="text-xs italic text-gray-500 md:text-sm">Perfect for late-night deadlines.</p>
                            </div>
                            <div class="text-right">
                                <p class="mb-1 text-xs text-gray-500 md:text-sm">Use code: <span
                                        class="font-semibold text-black">CRAMBOOST</span></p>
                                <button
                                    class="rounded-md bg-orange-200 px-3 py-1 text-xs font-medium text-orange-800 transition hover:bg-orange-300 md:text-sm">
                                    Use now
                                </button>
                            </div>
                        </div>
                        <hr class="border-gray-300">
                        <div class="bg-bgLight flex items-center rounded-md p-3 md:p-4">
                            <div
                                class="mr-3 flex h-8 w-8 items-center justify-center rounded-full bg-orange-200 md:mr-4 md:h-10 md:w-10">
                                <i class="fas fa-ticket text-sm text-orange-600 md:text-base"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base font-semibold md:text-lg">Weekend Duo Deal</h3>
                                <p class="text-xs text-gray-500 md:text-sm"><span class="font-semibold">Buy 1, Get 1 50%
                                        OFF</span> on drinks delivered to your door.</p>
                                <p class="text-xs italic text-gray-500 md:text-sm">Available Saturday & Sunday only.</p>
                            </div>
                            <div class="text-right">
                                <p class="mb-1 text-xs text-gray-500 md:text-sm">Use code: <span
                                        class="font-semibold text-black">WEEKENDWARMUP</span></p>
                                <button
                                    class="rounded-md bg-orange-200 px-3 py-1 text-xs font-medium text-orange-800 transition hover:bg-orange-300 md:text-sm">
                                    Use now
                                </button>
                            </div>
                        </div>
                        <hr class="border-gray-300">
                        <div class="bg-bgLight flex items-center rounded-md p-3 md:p-4">
                            <div
                                class="mr-3 flex h-8 w-8 items-center justify-center rounded-full bg-orange-200 md:mr-4 md:h-10 md:w-10">
                                <i class="fas fa-ticket text-sm text-orange-600 md:text-base"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-base font-semibold md:text-lg">Daily Dose Discount</h3>
                                <p class="text-xs text-gray-500 md:text-sm"><span class="font-semibold">Get P15
                                        OFF</span> your favorite drink every morning before 10AM.</p>
                                <p class="text-xs italic text-gray-500 md:text-sm">Valid Mon-Fri only.</p>
                            </div>
                            <div class="text-right">
                                <p class="mb-1 text-xs text-gray-500 md:text-sm">Use code: <span
                                        class="font-semibold text-black">EARLYBREW</span></p>
                                <button
                                    class="rounded-md bg-orange-200 px-3 py-1 text-xs font-medium text-orange-800 transition hover:bg-orange-300 md:text-sm">
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
