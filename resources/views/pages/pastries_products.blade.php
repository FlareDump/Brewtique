@extends('layouts.layout')
<link rel="icon" href="./icons/brewtique-icon.png">

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'Brewtique - Pastries')

<div class="bg-colorExtra pt-8 font-sans text-[#1e1e1e]">
    <!-- Tabs -->
    <div class="bg-colorExtra font-sans text-[#1e1e1e]">
        <div class="mt-8">
            @include('components.products_navbar')
        </div>

        <h1 class="mb-5 ml-20 mt-5 text-left text-3xl font-bold">Pastries</h1>

        <!-- Product List -->
        <div class="no-scrollbar bg-bgColor row-span-2 h-full max-h-screen overflow-y-auto md:col-span-2 md:row-auto">
            <div class="Flex flex-wrap justify-center gap-4 p-2 md:p-4">
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
    @include('components.pastry_modal', ['modalProduct' => null])
</template>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentProdPrice = 0;
        let prodName = '';
        let prodImg = '';
        // Listen for product card clicks
        document.querySelectorAll('[data-product-card]').forEach(function(card) {
            card.addEventListener('click', function() {
                const product = card.getAttribute('data-product');
                let prod = {};
                try {
                    prod = JSON.parse(product);
                } catch (e) {}
                // Update modal fields
                document.querySelector('#pastryModalContentImg').src = prod.ImagePath ||
                    '/images/best_seller1.png';
                document.querySelector('#pastryModalContentImg').alt = prod.ProdName ||
                    'Pastry';
                document.querySelector('#pastryModalContentName').textContent = prod.ProdName ||
                    'Pastry';
                currentProdPrice = prod.ProdPrice ? Number(prod.ProdPrice) : 0;
                prodName = prod.ProdName || 'Pastry';
                prodImg = prod.ImagePath || '/images/best_seller1.png';
                document.querySelector('#pastryModalContentPrice').textContent = '₱' +
                    currentProdPrice.toFixed(2);
                // Reset quantity
                document.querySelector('.pastry-modal-qty').textContent = '1';
                // Show modal
                document.getElementById('productModal').classList.remove('hidden');
                document.getElementById('productModal').classList.add('flex');
            });
        });
        // Quantity and price update logic
        const qtyElem = document.querySelector('.pastry-modal-qty');
        const priceElem = document.querySelector('#pastryModalContentPrice');
        document.querySelectorAll('.pastry-modal-qty-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                let qty = parseInt(qtyElem.textContent);
                if (this.dataset.action === 'add') {
                    qty++;
                } else if (this.dataset.action === 'subtract' && qty > 1) {
                    qty--;
                }
                qtyElem.textContent = qty;
                priceElem.textContent = '₱' + (currentProdPrice * qty).toFixed(2);
            });
        });
        // Listen for manual input (if you want to allow direct editing)
        if (qtyElem && priceElem) {
            const observer = new MutationObserver(function() {
                let qty = parseInt(qtyElem.textContent);
                if (isNaN(qty) || qty < 1) qty = 1;
                priceElem.textContent = '₱' + (currentProdPrice * qty).toFixed(2);
            });
            observer.observe(qtyElem, {
                childList: true,
                characterData: true,
                subtree: true
            });
        }
        // Close modal
        document.querySelectorAll('[data-modal-close]').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.getElementById('productModal').classList.add('hidden');
                document.getElementById('productModal').classList.remove('flex');
            });
        });
        // Optional: close modal on background click
        document.getElementById('productModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
                this.classList.remove('flex');
            }
        });
    });
</script>
@include('layouts.footer_section')

<script>
    // Pastry modal dynamic update
    const productCards = document.querySelectorAll('[data-product-card]');
    const modal = document.getElementById('productModal');
    const modalContent = document.getElementById('pastryModalContent');

    productCards.forEach(card => {
        card.addEventListener('click', function() {
            const product = JSON.parse(this.getAttribute('data-product'));
            // Update modal image
            modalContent.querySelector('img').src = product.ImagePath || '/images/best_seller1.png';
            modalContent.querySelector('img').alt = product.ProdName || 'Pastry';
            // Update modal name
            modalContent.querySelector('.text-2xl.font-bold.text-txtSecondary').textContent = product
                .ProdName || 'Pastry';
            // Update modal price
            modalContent.querySelector('.text-xl.font-bold.text-txtHighlighted').textContent = '₱' +
                Number(product.ProdPrice).toLocaleString('en-PH', {
                    minimumFractionDigits: 2
                });
            // Reset quantity
            modalContent.querySelector('.pastry-modal-qty').textContent = '1';
            // Show modal
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    });
    // Close modal logic
    modal.querySelectorAll('[data-modal-close]').forEach(btn => {
        btn.addEventListener('click', function() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    });
</script>
