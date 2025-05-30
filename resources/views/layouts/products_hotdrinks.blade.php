<div class="bg-colorExtra pt-8 font-sans text-[#1e1e1e]">
    <!-- Tabs -->
    <div class="bg-colorExtra font-sans text-[#1e1e1e]">
        <div class="mt-8">
            @include('components.products_navbar')
        </div>


        <h1 class="ml-15 mb-5 mt-5 text-left text-3xl font-bold">Hot Drinks</h1>
        <div class="container mx-auto flex flex-col gap-6 px-4 py-8 lg:flex-row">

            <div class="container mx-auto flex flex-col gap-6 rounded-lg bg-amber-600 px-4 py-8 shadow-lg lg:flex-row">

                <div class="lg:w-3/4">
                    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                        <button onclick="" class="w-full rounded px-4 py-2 text-white">
                            <div class="bg-btnColor rounded-xl p-4">
                                <div class="relative">
                                    <img src="{{ asset('images/americano.png') }}" alt="americano"
                                        class="h-48 w-full rounded-md object-cover" />
                                </div>
                                <div class="mt-4">
                                    <p class="text-left text-sm font-semibold">Americano<br><span
                                            class="text-xs font-light">Latte</span></p>
                                    <div class="mt-1 flex justify-between text-sm">
                                        <span>₱180.00</span>
                                        <span>300 ml</span>
                                    </div>
                                </div>
                            </div>
                        </button>

                        <button onclick="" class="w-full rounded px-4 py-2 text-white">
                            <div class="bg-btnColor rounded-xl p-4">
                                <div class="relative">
                                    <img src="{{ asset('images/americano.png') }}" alt="americano"
                                        class="h-48 w-full rounded-md object-cover" />
                                </div>
                                <div class="mt-4">
                                    <p class="text-left text-sm font-semibold">Americano<br><span
                                            class="text-xs font-light">Latte</span></p>
                                    <div class="mt-1 flex justify-between text-sm">
                                        <span>₱180.00</span>
                                        <span>300 ml</span>
                                    </div>
                                </div>
                            </div>
                        </button>

                        <button onclick="" class="w-full rounded px-4 py-2 text-white">
                            <div class="bg-btnColor rounded-xl p-4">
                                <div class="relative">
                                    <img src="{{ asset('images/americano.png') }}" alt="americano"
                                        class="h-48 w-full rounded-md object-cover" />
                                </div>
                                <div class="mt-4">
                                    <p class="text-left text-sm font-semibold">Americano<br><span
                                            class="text-xs font-light">Latte</span></p>
                                    <div class="mt-1 flex justify-between text-sm">
                                        <span>₱180.00</span>
                                        <span>300 ml</span>
                                    </div>
                                </div>
                            </div>
                        </button>

                        <button onclick="" class="w-full rounded px-4 py-2 text-white">
                            <div class="bg-btnColor rounded-xl p-4">
                                <div class="relative">
                                    <img src="{{ asset('images/americano.png') }}" alt="americano"
                                        class="h-48 w-full rounded-md object-cover" />
                                </div>
                                <div class="mt-4">
                                    <p class="text-left text-sm font-semibold">Americano<br><span
                                            class="text-xs font-light">Latte</span></p>
                                    <div class="mt-1 flex justify-between text-sm">
                                        <span>₱180.00</span>
                                        <span>300 ml</span>
                                    </div>
                                </div>
                            </div>
                        </button>

                        <button onclick="" class="w-full rounded px-4 py-2 text-white">
                            <div class="bg-btnColor rounded-xl p-4">
                                <div class="relative">
                                    <img src="{{ asset('images/americano.png') }}" alt="americano"
                                        class="h-48 w-full rounded-md object-cover" />
                                </div>
                                <div class="mt-4">
                                    <p class="text-left text-sm font-semibold">Americano<br><span
                                            class="text-xs font-light">Latte</span></p>
                                    <div class="mt-1 flex justify-between text-sm">
                                        <span>₱180.00</span>
                                        <span>300 ml</span>
                                    </div>
                                </div>
                            </div>
                        </button>

                        <button onclick="" class="w-full rounded px-4 py-2 text-white">
                            <div class="bg-btnColor rounded-xl p-4">
                                <div class="relative">
                                    <img src="{{ asset('images/americano.png') }}" alt="americano"
                                        class="h-48 w-full rounded-md object-cover" />
                                </div>
                                <div class="mt-4">
                                    <p class="text-left text-sm font-semibold">Americano<br><span
                                            class="text-xs font-light">Latte</span></p>
                                    <div class="mt-1 flex justify-between text-sm">
                                        <span>₱180.00</span>
                                        <span>300 ml</span>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>

                <div class="w-full lg:w-1/4">
                    <div class="flex h-full min-h-full flex-col rounded-lg bg-white p-6 shadow-md">
                        <h2 class="mb-4 text-2xl font-bold">Your Cart</h2>


                        <div class="max-h-auto flex-1 overflow-y-auto border-b border-t border-gray-200 py-4"
                            id="cartItems">
                            <p class="text-center text-gray-500">Your cart is empty</p>
                        </div>


                        <div class="mt-4">
                            <div class="mb-4 flex items-center justify-between">
                                <span class="font-semibold">Total</span>
                                <span class="font-bold" id="cartTotal">₱0.00</span>
                            </div>
                            <button onclick=""
                                class="bg-btnColor hover:bg-btnColor2 w-full rounded px-4 py-2 text-white"
                                id="checkoutBtn" disabled>
                                Checkout
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="customizeModal"
            class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50">
            <div class="mx-4 w-full max-w-md rounded-lg bg-white">
                <div class="p-6">
                    <div class="mb-4 flex items-center justify-between">
                        <h3 id="modalTitle" class="text-2xl font-bold">Customize Drink</h3>
                        <button onclick="" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="mb-6">
                        <h4 class="mb-2 font-semibold">Size</h4>
                        <div class="flex space-x-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="size" value="small"
                                    class="form-radio text-amber-600" checked>
                                <span class="ml-2">Small</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="size" value="medium"
                                    class="form-radio text-amber-600">
                                <span class="ml-2">Medium (+₱30)</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="size" value="large"
                                    class="form-radio text-amber-600">
                                <span class="ml-2">Large (+₱50)</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h4 class="mb-2 font-semibold">Milk Options</h4>
                        <select class="w-full rounded border border-gray-300 px-3 py-2" id="milkOption">
                            <option value="whole">Whole Milk</option>
                            <option value="skim">Skim Milk</option>
                            <option value="almond">Almond Milk (+₱20)</option>
                            <option value="soy">Soy Milk (+₱20)</option>
                            <option value="oat">Oat Milk (+₱30)</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <h4 class="mb-2 font-semibold">Extras</h4>
                        <div class="space-y-2">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox text-amber-600" value="extra_shot">
                                <span class="ml-2">Extra Shot (+₱50)</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox text-amber-600" value="whipped_cream">
                                <span class="ml-2">Whipped Cream (+₱30)</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="form-checkbox text-amber-600" value="caramel">
                                <span class="ml-2">Caramel Syrup (+₱20)</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-4 flex items-center justify-between">
                        <span class="text-lg font-bold">Total:</span>
                        <span id="modalPrice" class="text-lg font-bold">₱180.00</span>
                    </div>

                    <button onclick=""
                        class="bg-btnColor hover:bg-btnColor2 w-full rounded-lg px-4 py-3 font-semibold text-white">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
