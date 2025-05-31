<!-- Product Customization Modal -->
<div class="relative mx-2 w-full max-w-md rounded-xl bg-white p-6 shadow-2xl" id="productModalContent" data-modal
    x-data="{ qty: 1 }">
    <!-- Close Button -->
    <button class="hover:text-txtHighlighted absolute right-4 top-4 text-2xl text-black" data-modal-close>
        <i class="fa-solid fa-xmark"></i>
    </button>
    <!-- Title -->
    <h2 class="mb-4 text-xl font-bold">{{ $modalProduct->ProdName ?? 'Customize your coffee' }}</h2>
    <!-- Product Name -->
    @if (!empty($modalProduct->ProdName))
        <div class="mb-2 text-center text-lg font-semibold text-txtSecondary">{{ $modalProduct->ProdName }}</div>
    @endif
    <!-- Product Image -->
    <div class="mb-4 flex justify-center">
        <img src="{{ $modalProduct->ImagePath ?? '/images/best_seller1.png' }}"
            alt="{{ $modalProduct->ProdName ?? 'Mocha Vanilla Frappe' }}" class="h-28 w-28 rounded-lg object-cover" />
    </div>
    <!-- Cup Size -->
    <div class="mb-4">
        <h3 class="mb-2 font-bold">Cup size</h3>
        <div class="flex gap-4">
            <label class="flex items-center gap-1 font-normal">
                <input type="radio" name="cup_size" class="accent-txtHighlighted" checked />
                <span class="font-normal">Regular</span>
            </label>
            <label class="flex items-center gap-1 font-normal">
                <input type="radio" name="cup_size" class="accent-txtHighlighted" />
                <span class="font-normal">Medium( +₱30)</span>
            </label>
            <label class="flex items-center gap-1 font-normal">
                <input type="radio" name="cup_size" class="accent-txtHighlighted" />
                <span class="font-normal">Large( +₱40)</span>
            </label>
        </div>
    </div>
    <!-- Milk Options -->
    <div class="mb-4">
        <h3 class="mb-2 font-bold">Milk Options</h3>
        <div class="flex flex-wrap gap-x-6 gap-y-2">
            <label class="flex items-center gap-1 font-normal">
                <input type="radio" name="milk_option" class="accent-txtHighlighted" checked />
                <span class="font-normal">Whole Milk</span>
            </label>
            <label class="flex items-center gap-1 font-normal">
                <input type="radio" name="milk_option" class="accent-txtHighlighted" />
                <span class="font-normal">Almond Milk(+₱20)</span>
            </label>
            <label class="flex items-center gap-1 font-normal">
                <input type="radio" name="milk_option" class="accent-txtHighlighted" />
                <span class="font-normal">Oat Milk(+₱40)</span>
            </label>
            <label class="flex items-center gap-1 font-normal">
                <input type="radio" name="milk_option" class="accent-txtHighlighted" />
                <span class="font-normal">Skim Milk</span>
            </label>
            <label class="flex items-center gap-1 font-normal">
                <input type="radio" name="milk_option" class="accent-txtHighlighted" />
                <span class="font-normal">Soy Milk(+₱30)</span>
            </label>
        </div>
    </div>
    <!-- Extras -->
    <div class="mb-4">
        <h3 class="mb-2 font-bold">Addons</h3>
        <div class="flex flex-wrap gap-x-6 gap-y-2">
            <label class="flex items-center gap-1 font-normal">
                <input type="checkbox" class="accent-txtHighlighted" />
                <span class="font-normal">Extra Shot(+₱50)</span>
            </label>
            <label class="flex items-center gap-1 font-normal">
                <input type="checkbox" class="accent-txtHighlighted" />
                <span class="font-normal">Whipped Cream(+₱30)</span>
            </label>
            <label class="flex items-center gap-1 font-normal">
                <input type="checkbox" class="accent-txtHighlighted" />
                <span class="font-normal">Caramel Syrup(+₱20)</span>
            </label>
        </div>
    </div>
    <!-- Quantity -->
    <div class="mb-6">
        <h3 class="mb-2 font-bold">Quantity</h3>
        <div class="flex items-center gap-3">
            <button type="button"
                class="text-txtHighlighted border-txtHighlighted hover:bg-txtHighlighted/20 flex h-7 w-7 items-center justify-center rounded-full border text-lg font-bold"
                onclick="updateProductModalQty(this, -1)">-</button>
            <span class="product-modal-qty text-lg font-bold">1</span>
            <button type="button"
                class="text-txtHighlighted border-txtHighlighted hover:bg-txtHighlighted/20 flex h-7 w-7 items-center justify-center rounded-full border text-lg font-bold"
                onclick="updateProductModalQty(this, 1)">+</button>
        </div>
    </div>
    <!-- Add to Order Button -->
    <button
        class="bg-txtHighlighted hover:bg-txtSecondary w-full rounded-lg py-3 text-lg font-bold text-white transition">Add
        to Order</button>
</div>

<script>
    function updateProductModalQty(btn, delta) {
        const qtySpan = btn.parentElement.querySelector('.product-modal-qty');
        let qty = parseInt(qtySpan.textContent, 10) || 1;
        qty += delta;
        if (qty < 1) qty = 1;
        qtySpan.textContent = qty;
    }
</script>

@vite(['resources/js/app.js'])
