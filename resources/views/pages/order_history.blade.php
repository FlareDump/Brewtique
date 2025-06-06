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
                        class="text-txtSecondary bg-txtHighlighted/80 hover:bg-txtHighlighted flex items-center gap-3 rounded-md px-3 py-2 font-medium transition">
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
            <div class="md:col-span-5">
               
                {{-- History --}}
                <div class="bg-bgLight p-6 rounded-md shadow-sm">
                    <h2 class="text-2xl font-bold mb-4">Order History</h2>
                    <div class="bg-bgLight p-4 rounded-md">
                        <div class="flex items-center gap-6">
                            <img src="{{ asset('images/best_seller5.png') }}" alt="Mocha Vanilla Frappe" class="w-24 h-24 rounded-md">
                            <div class="flex-1">
                                <h3 class="text-lg font-semibold">Mocha Vanilla Frappe</h3>
                                <p class="text-gray-500">Add ons: Whipped Cream</p>
                            </div>
                            <div class="flex-1 text-right">
                                <p>Quantity: 1</p>
                                <p>Purchase Date: May 27, 2025</p>
                            </div>
                        </div>
                        <hr class="my-4 border-gray-300">
                        <div class="flex justify-between items-center">
                            <span class="font-semibold">Total</span>
                            <span class="font-semibold">P180.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer_section')
