<!-- Pastry Product Modal -->
<div class="relative mx-2 w-full max-w-md rounded-xl bg-white p-6 shadow-2xl" id="pastryModalContent" data-modal>
    <!-- Close Button -->
    <button class="hover:text-txtHighlighted absolute right-4 top-4 text-2xl text-black" data-modal-close>
        <i class="fa-solid fa-xmark"></i>
    </button>
    <!-- Product Image -->
    <div class="mb-4 flex justify-center">
        <img src="{{ $modalProduct->ImagePath ?? '/images/best_seller1.png' }}"
            alt="{{ $modalProduct->ProdName ?? 'Pastry' }}" class="h-28 w-28 rounded-lg object-cover" />
    </div>
    <!-- Product Name -->
    <div class="mb-2 text-center text-2xl font-bold text-txtSecondary">{{ $modalProduct->ProdName ?? 'Pastry' }}</div>
    <!-- Product Price -->
    <div class="mb-4 text-center text-xl font-bold text-txtHighlighted">
        ₱{{ isset($modalProduct->ProdPrice) ? number_format($modalProduct->ProdPrice, 2) : (isset($modalProduct['ProdPrice']) ? number_format($modalProduct['ProdPrice'], 2) : (isset($modalProduct->price) ? number_format($modalProduct->price, 2) : (isset($modalProduct['price']) ? number_format($modalProduct['price'], 2) : '0.00'))) }}
    </div>
    <!-- Quantity -->
    <div class="mb-6 flex items-center justify-center gap-3">
        <button type="button"
            class="border-txtHighlighted hover:bg-txtHighlighted/20 flex h-10 w-10 items-center justify-center rounded-lg border text-2xl font-bold text-txtHighlighted"
            onclick="updatePastryModalQty(this, -1)">-</button>
        <span class="pastry-modal-qty text-2xl font-bold">1</span>
        <button type="button"
            class="bg-txtHighlighted hover:bg-txtSecondary flex h-10 w-10 items-center justify-center rounded-lg text-2xl font-bold text-white"
            onclick="updatePastryModalQty(this, 1)">+</button>
    </div>
    <!-- Add to Order Button -->
    <button
        class="bg-txtHighlighted hover:bg-txtSecondary w-full rounded-lg py-3 text-lg font-bold text-white transition">Add
        to Order</button>
</div>

<script>
    function updatePastryModalQty(btn, delta) {
        const qtySpan = btn.parentElement.querySelector('.pastry-modal-qty');
        let qty = parseInt(qtySpan.textContent, 10) || 1;
        qty += delta;
        if (qty < 1) qty = 1;
        qtySpan.textContent = qty;
    }
</script>
