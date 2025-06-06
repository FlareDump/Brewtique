@extends('layouts.layout')

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'My Bag')

<section class="font-Primary flex min-h-screen flex-col justify-between py-4 md:py-10">
    <div class="md:py-15 h-full w-full px-4 py-5 md:px-10">
        <div class="h-100 grid grid-cols-1 gap-4 md:grid-cols-6">
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
                            class="text-txtSecondary bg-txtHighlighted/80 hover:bg-txtHighlighted flex items-center gap-3 rounded-md px-3 py-2 font-medium transition">
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
                            class="text-txtSecondary hover:bg-txtHighlighted/40 flex items-center gap-3 rounded-md px-3 py-2 font-medium transition">
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
            <div class="flex h-full flex-col md:col-span-5">
                <h2 class="font-Primary mb-3 text-2xl font-bold">Your Bag</h2>
                {{-- Bag Items List --}}
                <div class="no-scrollbar flex w-full flex-1 flex-col gap-3 overflow-y-auto">
                    {{-- Card --}}
                    <div class="bg-bgColor flex w-full gap-3 rounded-md p-4 shadow-sm">
                        <div>
                            <img src="{{ asset('images/best_seller1.png') }}" alt="Mocha Vanilla Frappe"
                                class="w-42 h-40 rounded-lg object-cover" />
                        </div>
                        {{-- Bag Card --}}
                        <div class="flex w-full flex-col gap-1">
                            <div class="flex w-full justify-between">
                                <h3 class="font-Primary text-3xl font-bold">Product Name</h3>
                                <i class="fa-regular fa-trash-can text-2xl"></i>
                            </div>
                            <div class="flex w-full justify-between">
                                <h3 class="font-Primary text-lg font-medium">Size: <span
                                        class="font-Primary text-md">Medium</span></h3>
                                <span class="font-Primary text-md font-medium">₱0.00</span>
                            </div>
                            <div class="flex w-full justify-between">
                                <h3 class="font-Primary text-lg font-medium">Milk Options: <span
                                        class="font-Primary text-md">Whole Milk</span></h3>
                                <span class="font-Primary text-md font-,e">₱0.00</span>
                            </div>
                            <div class="flex w-full justify-between">
                                <h3 class="font-Primary text-lg font-medium">Add Ons: <span
                                        class="font-Primary text-md">Whipped Cream</span></h3>
                                <span class="font-Primary text-md font-,e">₱0.00</span>
                            </div>
                            <div class="flex w-full justify-end">
                                <h3 class="font-Primary text-2xl font-bold">Total: <span
                                        class="font-Primary text-txtHighlighted text-2xl">₱0.00</span></h3>
                            </div>
                        </div>
                        {{-- End of Bag Card --}}


                    </div>
                    <!-- Sticky Total and Checkout Bar INSIDE main content -->
                    <div class="border-txtSecondary/40 sticky top-0 z-30 flex w-full justify-end border-t bg-[#FFE4C2] px-6 py-3 shadow-lg md:px-12"
                        id="stickyCheckoutBar">
                        <div class="flex flex-col items-end gap-1 md:flex-row md:items-center md:gap-6">
                            <div class="flex items-center gap-2">
                                <span class="font-Primary text-lg font-bold">Items:</span>
                                <span class="text-txtHighlighted font-Primary text-2xl font-bold">2</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="font-Primary text-lg font-bold">Total:</span>
                                <span class="text-txtHighlighted font-Primary text-2xl font-bold">₱300.00</span>
                            </div>
                            <button
                                class="bg-txtHighlighted hover:bg-txtSecondary ml-0 mt-2 rounded-md px-8 py-2 text-lg font-medium text-white transition md:ml-6 md:mt-0">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@include('layouts.footer_section')
@vite('resources/js/app.js')
