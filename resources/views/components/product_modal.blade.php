<!-- Product Customization Modal -->
<form id="productModalForm" method="POST" action="{{ url('/addCart') }}">
    @csrf
    <div class="relative mx-2 w-full max-w-sm rounded-xl bg-white p-6 shadow-2xl" id="productModalConten">
        <!-- Close Button -->
        <button type="button" class="hover:text-txtHighlighted absolute right-4 top-4 text-2xl text-black"
            data-modal-close>
            <i class="fa-solid fa-xmark"></i>
        </button>
        <!-- Title -->
        <h2 class="mb-4 text-center text-2xl font-bold">{{ $modalProduct->ProdName ?? 'Customize your coffee' }}</h2>
        <!-- Product Name -->
        @if (!empty($modalProduct->ProdName))
            <div class="text-txtSecondary mb-2 text-center text-lg font-semibold">{{ $modalProduct->ProdName }}</div>
        @endif
        <!-- Product Image -->
        <div class="mb-4 flex justify-center">
            <img src="{{ $modalProduct->ImagePath ?? '/images/best_seller1.png' }}"
                alt="{{ $modalProduct->ProdName ?? 'Mocha Vanilla Frappe' }}"
                class="h-28 w-28 rounded-lg object-cover" />
        </div>

        @php
            $prodName = $modalProduct->ProdName ?? '';
            $prodImage = $modalProduct->ImagePath ?? '/images/best_seller1.png';
            $prodPrice = $modalProduct->ProdPrice ?? 0;

            $milks = [
                ['MilkName' => 'Whole Milk', 'MilkPrice' => 0.0],
                ['MilkName' => 'Skim Milk', 'MilkPrice' => 0.0],
                ['MilkName' => 'Almond Milk', 'MilkPrice' => 15.0],
                ['MilkName' => 'Soy Milk', 'MilkPrice' => 15.0],
                ['MilkName' => 'Oat Milk', 'MilkPrice' => 20.0],
            ];

            $addons = [
                ['AddonName' => 'Extra Shot', 'AddonPrice' => 20.0],
                ['AddonName' => 'Caramel Syrup', 'AddonPrice' => 15.0],
                ['AddonName' => 'Whipped Cream', 'AddonPrice' => 10.0],
            ];

            $cupSizes = [
                ['CupSize' => 'Regular', 'CupSizePrice' => 0.0],
                ['CupSize' => 'Medium', 'CupSizePrice' => 30.0],
                ['CupSize' => 'Large', 'CupSizePrice' => 40.0],
            ];

        @endphp

        <!-- Hidden Inputs for JS to fill -->
        <input type="hidden" name="ProductName" id="modalProductNameInput" value="">
        <input type="hidden" name="ProductImage" id="modalProductImageInput" value="">
        <input type="hidden" name="ProductPrice" id="modalProductPriceInput" value="">
        <input type="hidden" name="CupSize" id="modalCupSizeInput" value="">
        <input type="hidden" name="CupSizePrice" id="modalCupSizePriceInput" value="">
        <input type="hidden" name="Milk" id="modalMilkInput" value="">
        <input type="hidden" name="MilkPrice" id="modalMilkPriceInput" value="">
        <input type="hidden" name="Addon" id="modalAddonInput" value="">
        <input type="hidden" name="AddonPrice" id="modalAddonPriceInput" value="">
        <input type="hidden" name="TotalPrice" id="modalTotalPriceInput" value="">
        <input type="hidden" name="AddedAt" id="modalAddedAtInput" value="">

        <!-- Customization Options -->
        {{-- Cup Size --}}
        <h3 class="font-bold">Cup Size</h3>
        <div class="flex flex-wrap gap-x-3 gap-y-1">
            <label>
                <input type="radio" name="cup_size" value="{{ $cupSizes[0]['CupSize'] }}">
                {{ $cupSizes[0]['CupSize'] }} - ₱{{ number_format($cupSizes[0]['CupSizePrice'], 2) }}
            </label><br>

            <label>
                <input type="radio" name="cup_size" value="{{ $cupSizes[1]['CupSize'] }}">
                {{ $cupSizes[1]['CupSize'] }} - ₱{{ number_format($cupSizes[1]['CupSizePrice'], 2) }}
            </label><br>

            <label>
                <input type="radio" name="cup_size" value="{{ $cupSizes[2]['CupSize'] }}">
                {{ $cupSizes[2]['CupSize'] }} - ₱{{ number_format($cupSizes[2]['CupSizePrice'], 2) }}
            </label>
        </div>

        {{-- Milk Options --}}
        <h3 class="font-bold">Milk Options</h3>
        <div class="flex flex-wrap gap-x-3 gap-y-1">
            <label>
                <input type="radio" name="milk" value="{{ $milks[0]['MilkName'] }}">
                {{ $milks[0]['MilkName'] }} - ₱{{ number_format($milks[0]['MilkPrice'], 2) }}
            </label>

            <label>
                <input type="radio" name="milk" value="{{ $milks[1]['MilkName'] }}">
                {{ $milks[1]['MilkName'] }} - ₱{{ number_format($milks[1]['MilkPrice'], 2) }}
            </label>

            <label>
                <input type="radio" name="milk" value="{{ $milks[2]['MilkName'] }}">
                {{ $milks[2]['MilkName'] }} - ₱{{ number_format($milks[2]['MilkPrice'], 2) }}
            </label>

            <label>
                <input type="radio" name="milk" value="{{ $milks[3]['MilkName'] }}">
                {{ $milks[3]['MilkName'] }} - ₱{{ number_format($milks[3]['MilkPrice'], 2) }}
            </label>

            <label>
                <input type="radio" name="milk" value="{{ $milks[4]['MilkName'] }}">
                {{ $milks[4]['MilkName'] }} - ₱{{ number_format($milks[4]['MilkPrice'], 2) }}
            </label>
        </div>

        {{-- Addons Options --}}
        <h3 class="mt-2 font-bold">Extras</h3>
        <div class="flex flex-wrap gap-x-3 gap-y-1">
            <label>
                <input type="radio" name="addons[]" value="{{ $addons[0]['AddonName'] }}">
                {{ $addons[0]['AddonName'] }} - ₱{{ number_format($addons[0]['AddonPrice'], 2) }}
            </label><br>

            <label>
                <input type="radio" name="addons[]" value="{{ $addons[1]['AddonName'] }}">
                {{ $addons[1]['AddonName'] }} - ₱{{ number_format($addons[1]['AddonPrice'], 2) }}
            </label><br>

            <label>
                <input type="radio" name="addons[]" value="{{ $addons[2]['AddonName'] }}">
                {{ $addons[2]['AddonName'] }} - ₱{{ number_format($addons[2]['AddonPrice'], 2) }}
            </label>
        </div>

        <!-- Quantity -->
        <div class="mb-2 mt-2 flex items-center gap-2">
            <h3 class="font-bold">Quantity:</h3>
            <input type="number" name="Quantity" min="1" value="1"
                class="w-16 rounded border px-2 py-1" />
        </div>

        <!-- Price -->
        <div class="mb-2 flex items-center">
            <h3 class="font-bold">Price: </h3>
            <span id="productModalPrice" class="text-txtHighlighted m-2 text-2xl font-bold">₱ 0.00</span>
        </div>

        <!-- Add to Order Button and Price -->
        <div class="flex items-center justify-center gap-4">
            <button type="submit"
                class="bg-txtHighlighted hover:bg-txtSecondary rounded-lg px-6 py-3 text-lg font-bold text-white transition">Add
                to Order</button>
        </div>
    </div>
</form>

@vite(['resources/js/app.js'])
