@extends('layouts.layout')
<link rel="icon" href="./icons/brewtique-icon.png">

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'Brewtique - Cold Drinks')

<div class="bg-colorExtra pt-8 font-sans text-[#1e1e1e]">
    <!-- Tabs -->
    <div class="bg-colorExtra font-sans text-[#1e1e1e]">
        <div class="mt-8">
            @include('components.products_navbar')
        </div>

        <h1 class="mb-5 ml-20 mt-5 text-left text-3xl font-bold">Cold Drinks</h1>
        <!-- Product List -->
        <div class="no-scrollbar bg-bgColor row-span-2 h-full max-h-screen overflow-y-auto md:col-span-2 md:row-auto">
            <div class="flex flex-wrap justify-center gap-4 p-2 md:p-4">
                @foreach ($products as $product)
                    @if ($product->Stock > 0)
                        <div class="bg-bgPrimary hover:bg-btnColor/30 w-96 cursor-pointer rounded-lg shadow-md transition-transform duration-200 hover:scale-105 hover:shadow-xl"
                            data-product-card data-prodname="{{ $product->ProdName }}"
                            data-prodprice="{{ $product->ProdPrice }}" data-imagepath="{{ $product->ImagePath }}"
                            data-categoryname="{{ $product->CategoryName }}">
                            <img src="{{ $product->ImagePath ?? '/images/best_seller1.png' }}"
                                alt="{{ $product->ProdName }}"
                                class="max-h-[350px] w-full flex-shrink-0 rounded-t-xl object-cover md:h-[80%]"
                                style="flex-basis: 80%; min-height: 0;" />
                            <div class="px-4 py-1">
                                <div class="flex items-center justify-between">
                                    <span class="font-Primary text-2xl font-bold">{{ $product->ProdName }}</span>
                                    <span class="font-Primary text-txtHighlighted text-2xl font-bold">₱
                                        {{ number_format($product->ProdPrice, 2) }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <p class="text-txtSubText text-base">{{ $product->category->CategoryName ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div id="productModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/30">
</div>

<!-- Modal Templates (hidden) -->
<template id="product-modal-template">
    @include('components.product_modal', ['modalProduct' => null])
</template>

@include('layouts.footer_section')
