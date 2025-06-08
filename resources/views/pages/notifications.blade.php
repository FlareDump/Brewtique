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

                {{-- Notifications Content --}}
                <div class="md:col-span-5">
                    <div class="bg-bgLight rounded-md p-4 shadow-sm md:p-6">
                        <h2 class="mb-5 text-xl font-bold md:text-2xl">Notifications</h2>
                        <div class="space-y-4">
                            {{-- Notification 1 --}}
                            <div class="bg-bgLight flex items-center rounded-md p-3 md:p-4">
                                <div
                                    class="mr-3 flex h-8 w-8 items-center justify-center rounded-full bg-yellow-200 md:mr-4 md:h-10 md:w-10">
                                    <i class="fas fa-gift text-sm text-yellow-600 md:text-base"></i>
                                </div>
                                <div class="flex-1 text-sm md:text-base">You have a new special offer!</div>
                                <div class="text-xs text-gray-500 md:text-sm">2h ago</div>
                            </div>
                            <hr class="border-gray-300">
                            {{-- Notification 2 --}}
                            <div class="bg-bgLight flex items-center rounded-md p-3 md:p-4">
                                <div
                                    class="mr-3 flex h-8 w-8 items-center justify-center rounded-full bg-green-200 md:mr-4 md:h-10 md:w-10">
                                    <i class="fas fa-check text-sm text-green-600 md:text-base"></i>
                                </div>
                                <div class="flex-1 text-sm md:text-base">Your order has been delivered</div>
                                <div class="text-xs text-gray-500 md:text-sm">3 days ago</div>
                            </div>
                            <hr class="border-gray-300">
                            {{-- Notification 3 --}}
                            <div class="bg-bgLight flex items-center rounded-md p-3 md:p-4">
                                <div
                                    class="mr-3 flex h-8 w-8 items-center justify-center rounded-full bg-blue-200 md:mr-4 md:h-10 md:w-10">
                                    <i class="fas fa-truck text-sm text-blue-600 md:text-base"></i>
                                </div>
                                <div class="flex-1 text-sm md:text-base">Your order is on the way</div>
                                <div class="text-xs text-gray-500 md:text-sm">3 days ago</div>
                            </div>
                            <hr class="border-gray-300">
                            {{-- Notification 4 --}}
                            <div class="bg-bgLight flex items-center rounded-md p-3 md:p-4">
                                <div
                                    class="mr-3 flex h-8 w-8 items-center justify-center rounded-full bg-orange-200 md:mr-4 md:h-10 md:w-10">
                                    <i class="fas fa-percent text-sm text-orange-600 md:text-base"></i>
                                </div>
                                <div class="flex-1 text-sm md:text-base">Get 20% off with your first order!</div>
                                <div class="text-xs text-gray-500 md:text-sm">1 week ago</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer_section')
