@extends('layouts.layout')


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
            <div class="no-scrollbar max-h-[80vh] overflow-y-auto md:col-span-5">
                {{-- History --}}
                @php
                    use App\Models\Orders;
                    $orders = Orders::all();
                @endphp
                <div class="bg-bgLight rounded-md p-6 shadow-sm">
                    <h2 class="bg-bgColor sticky top-0 z-10 mb-4 rounded-t-md p-4 text-2xl font-bold backdrop-blur-sm">
                        Order History</h2>
                    @forelse ($orders as $order)
                        <div
                            class="bg-bgLight border-txtHighlighted mb-6 flex flex-col gap-4 rounded-md border p-4 shadow">
                            <div class="flex items-center gap-6">
                                <img class="w-30 h-28 rounded-md object-cover"
                                    src="{{ $order->ImagePath ?? asset('images/best_seller5.png') }}"
                                    alt="{{ $order->ProductName ?? 'N/A' }}">
                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold">{{ $order->ProductName ?? 'N/A' }}</h3>
                                    <p class="text-gray-500">Size: {{ $order->CupSize ?? 'N/A' }}</p>
                                    <p class="text-gray-500">Milk: {{ $order->Milk ?? 'N/A' }}</p>
                                    <p class="text-gray-500">Add ons: {{ $order->Addon ?? 'N/A' }}</p>
                                    <p class="text-gray-500">Quantity: x{{ $order->Quantity ?? 'N/A' }}</p>
                                </div>
                                <div class="flex-1 text-right">
                                    <p>Purchase Date:
                                        {{ $order->PurchaseDate ? \Carbon\Carbon::parse($order->PurchaseDate)->format('M d, Y h:i A') : 'N/A' }}
                                    </p>
                                </div>
                            </div>
                            <hr class="border-gray-300">
                            <div class="flex items-center justify-end gap-4">
                                <span class="font-semibold">Total:</span>
                                <span
                                    class="text-txtHighlighted text-lg font-semibold">₱{{ $order->TotalPrice !== null ? number_format($order->TotalPrice, 2) : 'N/A' }}</span>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-gray-500">No orders yet.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer_section')
