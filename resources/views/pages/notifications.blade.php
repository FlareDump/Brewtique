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
                            class="text-txtSecondary bg-txtHighlighted/80 hover:bg-txtHighlighted flex items-center gap-3 rounded-md px-3 py-2 font-medium transition">
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

                {{-- Notifications Content --}}
                <div class="md:col-span-5">
                    <div class="bg-bgLight p-4 md:p-6 rounded-md shadow-sm">
                        <h2 class="text-xl md:text-2xl font-bold mb-5">Notifications</h2>
                        <div class="space-y-4">
                            {{-- Notification 1 --}}
                            <div class="flex items-center bg-bgLight p-3 md:p-4 rounded-md">
                                <div class="w-8 h-8 md:w-10 md:h-10 bg-yellow-200 rounded-full flex items-center justify-center mr-3 md:mr-4">
                                    <i class="fas fa-gift text-yellow-600 text-sm md:text-base"></i>
                                </div>
                                <div class="flex-1 text-sm md:text-base">You have a new special offer!</div>
                                <div class="text-gray-500 text-xs md:text-sm">2h ago</div>
                            </div>
                            <hr class="border-gray-300">
                            {{-- Notification 2 --}}
                            <div class="flex items-center bg-bgLight p-3 md:p-4 rounded-md">
                                <div class="w-8 h-8 md:w-10 md:h-10 bg-green-200 rounded-full flex items-center justify-center mr-3 md:mr-4">
                                    <i class="fas fa-check text-green-600 text-sm md:text-base"></i>
                                </div>
                                <div class="flex-1 text-sm md:text-base">Your order has been delivered</div>
                                <div class="text-gray-500 text-xs md:text-sm">3 days ago</div>
                            </div>
                            <hr class="border-gray-300">
                            {{-- Notification 3 --}}
                            <div class="flex items-center bg-bgLight p-3 md:p-4 rounded-md">
                                <div class="w-8 h-8 md:w-10 md:h-10 bg-blue-200 rounded-full flex items-center justify-center mr-3 md:mr-4">
                                    <i class="fas fa-truck text-blue-600 text-sm md:text-base"></i>
                                </div>
                                <div class="flex-1 text-sm md:text-base">Your order is on the way</div>
                                <div class="text-gray-500 text-xs md:text-sm">3 days ago</div>
                            </div>
                            <hr class="border-gray-300">
                            {{-- Notification 4 --}}
                            <div class="flex items-center bg-bgLight p-3 md:p-4 rounded-md">
                                <div class="w-8 h-8 md:w-10 md:h-10 bg-orange-200 rounded-full flex items-center justify-center mr-3 md:mr-4">
                                    <i class="fas fa-percent text-orange-600 text-sm md:text-base"></i>
                                </div>
                                <div class="flex-1 text-sm md:text-base">Get 20% off with your first order!</div>
                                <div class="text-gray-500 text-xs md:text-sm">1 week ago</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer_section')

