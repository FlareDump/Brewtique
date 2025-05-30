@extends('layouts.layout')

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'My Bag')

<section class="font-Primary flex min-h-screen flex-col justify-between py-10">
    <div class="h-100 py-15 min-h-screen w-full px-10">
        <div class="grid grid-cols-6 grid-rows-1 gap-4" style="height: 600px;">
            <div class="bg-bgColor flex h-full min-h-[600px] flex-col justify-between rounded-md p-5 shadow-sm">
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
            <div class="col-span-5 h-full">
                <h2 class="font-Primary mb-3 text-2xl font-bold">Your Bag</h2>
                <div class="no-scrollbar flex h-full w-full flex-col gap-3 overflow-y-auto">
                    <div class="flex items-center gap-6 rounded-xl bg-[#FFE4C2] p-6 pl-10 shadow-md">
                        <img src="{{ asset('images/best_seller1.png') }}" alt="Mocha Vanilla Frappe"
                            class="h-36 w-36 rounded-lg object-cover" />
                        <div class="flex flex-1 flex-col gap-1">
                            <div class="flex w-full items-start justify-between">
                                <span class="text-txtSecondary text-xl font-bold">Mocha Vanilla Frappe</span>
                                <button
                                    class="text-txtSecondary transition-transform duration-200 hover:scale-125 hover:text-red-500"><i
                                        class="fa-regular fa-trash-can text-xl"></i></button>
                            </div>
                            <div class="text-txtSubText flex flex-col gap-0.5 text-sm">
                                <span class="text-lg">Size: <span class="font-medium">Large</span></span>
                                <span class="text-lg">Milk options: <span class="font-medium">Whole Milk</span></span>
                                <div class="flex justify-between">
                                    <div>
                                        <span class="text-lg">Add ons: <span class="font-medium">Whipped
                                                Cream</span></span>
                                    </div>
                                    <div>
                                        <span class="text-txtSubText mb-2 text-lg">+ 30.00</span>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-2 flex items-center justify-between gap-2">
                                <div>
                                    <button type="button" onclick="updateBagQty(this, -1)"
                                        class="text-txtHighlighted hover:bg-txtHighlighted/20 rounded-full p-1"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <span class="text-txtSecondary bag-qty text-lg font-bold">1</span>
                                    <button type="button" onclick="updateBagQty(this, 1)"
                                        class="text-txtHighlighted hover:bg-txtHighlighted/20 rounded-full p-1"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                                <div>
                                    <span class="text-txtSecondary text-2xl font-bold">₱150.00</span>
                                </div>

                            </div>
                        </div>
                        <div class="ml-6 flex h-full flex-col items-end justify-between">

                        </div>
                    </div>
                    <!-- Future bag cards go here -->

                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer_section')
@vite('resources/js/app.js')
