@extends('layouts.layout')
<link rel="icon" href="./icons/brewtique-icon.png">

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'Brewtique - Hot Drinks')

<div class="bg-colorExtra pt-8 font-sans text-[#1e1e1e]">
    <!-- Tabs -->
    <div class="bg-colorExtra font-sans text-[#1e1e1e]">
        <div class="mt-8">
            @include('components.products_navbar')
        </div>


        <h1 class="mb-5 ml-20 mt-5 text-left text-3xl font-bold">Hot Drinks</h1>

        <div class="px-16">
            <div class="min-h-130 grid max-h-screen grid-cols-3 grid-rows-1 gap-4">
                <div class="no-scrollbar no-scrollbar bg-bgColor col-span-2 h-full max-h-screen overflow-y-auto">
                    <div class="flex flex-wrap gap-4 p-4">
                        @foreach ($products as $product)
                            @if ($product->Stock > 0)
                                <div class="md:hover:bg-btnColor/30 bg-bgPrimary flex h-[380px] w-[280px] cursor-pointer flex-col gap-2 rounded-xl shadow transition duration-200 hover:scale-105 hover:shadow-2xl"
                                    data-product-card data-product='@json([
                                        'ProdName' => $product->ProdName,
                                        'ProdPrice' => $product->ProdPrice,
                                        'ImagePath' => $product->ImagePath
                                    ])'>
                                    <img src="{{ $product->ImagePath ?? '/images/best_seller1.png' }}"
                                        alt="{{ $product->ProdName }}"
                                        class="h-[80%] w-full flex-shrink-0 rounded-t-xl object-cover"
                                        style="flex-basis: 80%; min-height: 0;" />
                                    <div class="flex flex-1 flex-col justify-end gap-1 px-4 pb-4 pt-2">
                                        <div class="flex items-center justify-between">
                                            <p class="text-txtSecondary text-xl font-bold leading-tight">
                                                {{ $product->ProdName }}</p>
                                            <p class="text-txtHighlighted text-lg font-bold">
                                                ₱{{ number_format($product->ProdPrice, 2) }}</p>
                                        </div>
                                        <p class="text-txtSubText text-base">{{ $product->category->CategoryName ?? '' }}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-start-3 flex h-full max-h-screen flex-col">
                    <!-- Header -->
                    <div class="bg-colorExtra sticky top-0 z-10 mb-4 flex items-center justify-between pb-2 pt-2">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-bag-shopping text-2xl"></i>
                            <span class="text-xl font-bold">Your Bag</span>
                        </div>
                        <a href="#" class="text-txtSecondary text-sm font-medium hover:underline">View More..</a>
                    </div>
                    <!-- Scrollable Bag Content -->
                    <div class="flex-1 overflow-y-auto pr-1">
                        <div class="bg-txtHighlighted/30 mb-8 flex items-center gap-4 rounded-xl p-3">
                            <img src="/images/best_seller1.png" alt="Mocha Vanilla Frappe"
                                class="h-16 w-16 rounded-lg object-cover">
                            <div class="flex flex-1 flex-col">
                                <span class="text-txtSecondary font-bold leading-tight">Mocha Vanilla</span>
                                <span class="text-txtSecondary text-sm leading-tight">Frappe</span>
                            </div>
                            <div class="flex flex-col items-end gap-2">
                                <span class="text-txtHighlighted text-lg font-bold">₱150.00</span>
                                <span class="text-txtSecondary text-xs">1x</span>
                            </div>
                        </div>
                        <!-- More bag items go here -->
                    </div>
                    <!-- Total and Checkout (Sticky Bottom) -->
                    <div class="bg-colorExtra sticky bottom-0 left-0 right-0 pb-2 pt-4">
                        <div class="border-txtSecondary/40 mb-2 flex items-center justify-between border-t pt-4">
                            <span class="text-lg font-bold">Total</span>
                            <span class="text-txtHighlighted text-lg font-bold">₱150.00</span>
                        </div>
                        <button
                            class="bg-txtHighlighted hover:bg-txtSecondary mt-2 w-full rounded-md py-2 text-lg font-medium text-white transition">Checkout</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Product Modal -->
<div id="productModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/30">
    @include('components.product_modal', [
        'modalProduct' => isset($modalProduct) ? $modalProduct : null,
    ])
</div>

@include('layouts.footer_section')
