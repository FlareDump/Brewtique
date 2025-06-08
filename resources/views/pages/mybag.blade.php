@extends('layouts.layout')
<link rel="icon" href="/icons/brewtique-icon.png">

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'My Bag')

<section class="font-Primary flex min-h-screen flex-col justify-between py-4 md:py-10">
    <div class="md:py-15 h-full w-full px-4 py-5 md:px-10">
        <div class="h-100 grid grid-cols-1 gap-4 md:grid-cols-6">
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
                            class="text-txtSecondary bg-txtHighlighted/80 hover:bg-txtHighlighted flex items-center gap-3 rounded-md px-3 py-2 font-medium transition">
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
            <div class="flex h-full flex-col md:col-span-5">
                <h2 class="font-Primary mb-3 text-2xl font-bold">Your Bag</h2>
                {{-- Bag Items List --}}
                <div class="no-scrollbar flex max-h-[70vh] min-h-0 w-full flex-1 flex-col gap-3 overflow-y-auto">
                    @php
                        use App\Models\Cart;
                        use Illuminate\Support\Facades\Auth;
                        $cartItems = Cart::where('user_id', Auth::id())->orderByDesc('AddedAt')->get();
                    @endphp
                    @if ($cartItems->isEmpty())
                        <div class="flex w-full items-center justify-center p-4">
                            <p class="text-txtSecondary text-lg font-medium">Your bag is empty.</p>
                        </div>
                    @else
                        @foreach ($cartItems as $item)
                            <div class="bg-bgColor flex w-full gap-3 rounded-md p-4 shadow-sm">
                                <div>
                                    <img src="{{ $item->ImagePath ?? asset('images/best_seller1.png') }}"
                                        alt="{{ $item->ProductName ?? 'N/A' }}"
                                        class="h-50 w-60 rounded-lg object-cover" />
                                </div>
                                {{-- Bag Card Labels --}}
                                <div class="flex w-full flex-col gap-1">
                                    <div class="flex w-full justify-between">
                                        <h3 class="font-Primary text-3xl font-bold">{{ $item->ProductName ?? 'N/A' }}
                                        </h3>
                                        <form method="POST" action="{{ route('cart.delete', $item->cartID) }}"
                                            class="delete-cart-item-form" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="delete-cart-btn transition hover:text-red-600 focus:outline-none active:scale-90"
                                                title="Remove from bag">
                                                <i class="fa-regular fa-trash-can pointer-events-none text-2xl"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="flex w-full justify-between">
                                        <h3 class="font-Primary text-lg font-medium">Size: <span
                                                class="font-Primary text-md">{{ $item->CupSize ?? 'N/A' }}</span></h3>
                                        <span
                                            class="font-Primary text-md font-medium">₱{{ $item->CupSizePrice !== null ? number_format($item->CupSizePrice, 2) : 'N/A' }}</span>
                                    </div>
                                    <div class="flex w-full justify-between">
                                        <h3 class="font-Primary text-lg font-medium">Milk Options: <span
                                                class="font-Primary text-md">{{ $item->Milk ?? 'N/A' }}</span></h3>
                                        <span
                                            class="font-Primary text-md font-medium">₱{{ $item->MilkPrice !== null ? number_format($item->MilkPrice, 2) : 'N/A' }}</span>
                                    </div>
                                    <div class="flex w-full justify-between">
                                        <h3 class="font-Primary text-lg font-medium">Add Ons: <span
                                                class="font-Primary text-md">{{ $item->Addon ?? 'N/A' }}</span></h3>
                                        <span
                                            class="font-Primary text-md font-medium">₱{{ $item->AddonPrice !== null ? number_format($item->AddonPrice, 2) : 'N/A' }}</span>
                                    </div>
                                    <div class="flex w-full justify-between">
                                        <h3 class="font-Primary text-lg font-medium">Product Price: <span
                                                class="font-Primary text-md">{{ $item->ProdPrice ?? 'N/A' }}</span>
                                        </h3>
                                        <span
                                            class="font-Primary text-md font-medium">₱{{ $item->ProdPrice !== null ? number_format($item->ProdPrice, 2) : 'N/A' }}</span>
                                    </div>
                                    <div class="flex w-full justify-between">
                                        <h3 class="font-Primary text-lg font-medium">Quantity: <span
                                                class="font-Primary text-md">{{ $item->Quantity ?? 'N/A' }}</span></h3>
                                    </div>
                                    <div class="flex w-full justify-end">
                                        <h3 class="font-Primary text-2xl font-bold">Total: <span
                                                class="font-Primary text-txtHighlighted text-2xl">₱{{ $item->TotalPrice !== null ? number_format($item->TotalPrice, 2) : 'N/A' }}</span>
                                        </h3>
                                    </div>
                                </div>
                                {{-- End of Bag Card --}}
                            </div>
                        @endforeach
                    @endif
                </div> <!-- End of Bag Items List -->
                <!-- Sticky Total and Checkout Bar INSIDE main content -->
                <div class="border-txtSecondary/40 flex w-full justify-end border-t bg-[#FFE4C2] px-6 py-3 shadow-lg md:px-12"
                    id="stickyCheckoutBar" style="position:relative; z-index:30; background: #FFE4C2;">
                    <div class="flex flex-col items-end gap-1 md:flex-row md:items-center md:gap-6">
                        <div class="flex items-center gap-2">
                            <span class="font-Primary text-lg font-bold">Items:</span>
                            <span class="text-txtHighlighted font-Primary text-2xl font-bold">
                                {{ $cartItems->count() }}
                            </span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="font-Primary text-lg font-bold">Total:</span>
                            <span class="text-txtHighlighted font-Primary text-2xl font-bold">₱
                                {{ number_format($cartItems->sum('TotalPrice'), 2) }}
                            </span>
                        </div>
                        <button
                            class="bg-txtHighlighted hover:bg-txtSecondary ml-0 mt-2 rounded-md px-8 py-2 text-lg font-medium text-white transition md:ml-6 md:mt-0">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="mt-125 md:mt-10 lg:mt-10">
    @extends('layouts.footer_section')
</div>

@vite('resources/js/app.js')

<!-- Delete Confirmation Modal -->
<div id="deleteCartModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">
    <div class="flex flex-col items-center justify-center rounded-xl bg-[#FDECCB] px-8 py-10 shadow-xl">
        <div class="mb-4">
            <span class="bg-txtHighlighted flex h-20 w-20 items-center justify-center rounded-full">
                <i class="fa-solid fa-trash text-4xl text-white"></i>
            </span>
        </div>
        <div class="mb-4 text-center text-xl font-semibold text-black">Remove this item from your bag?</div>
        <div class="flex gap-4">
            <button id="deleteCartCancelBtn"
                class="bg-txtPrimary rounded px-6 py-2 font-bold text-black hover:bg-gray-200">Cancel</button>
            <button id="deleteCartConfirmBtn"
                class="bg-btnColor hover:bg-txtHighlighted rounded px-6 py-2 font-bold text-white">Remove</button>
        </div>
    </div>
</div>

<!-- Checkout Confirmation Modal -->
<div id="checkoutConfirmModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">
    <div
        class="pointer-events-auto flex flex-col items-center justify-center rounded-xl bg-[#FDECCB] px-8 py-10 shadow-xl">
        <div class="mb-4">
            <span class="bg-txtHighlighted flex h-20 w-20 items-center justify-center rounded-full">
                <i class="fa-solid fa-bag-shopping text-4xl text-white"></i>
            </span>
        </div>
        <div class="mb-4 text-center text-xl font-semibold text-black">Confirm your order?</div>
        <div class="flex gap-4">
            <button id="checkoutCancelBtn"
                class="bg-txtPrimary rounded px-6 py-2 font-bold text-black hover:bg-gray-200">Cancel</button>
            <button
                class="checkout-confirm-btn bg-btnColor hover:bg-txtHighlighted rounded px-6 py-2 font-bold text-white">Confirm</button>
        </div>
    </div>
</div>

<!-- Ordered Successfully Modal -->
<div id="orderSuccessModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">
    <div class="flex flex-col items-center justify-center rounded-xl bg-[#FDECCB] px-8 py-10 shadow-xl">
        <div class="mb-4">
            <span class="bg-txtHighlighted flex h-20 w-20 items-center justify-center rounded-full">
                <i class="fa-solid fa-circle-check text-4xl text-white"></i>
            </span>
        </div>
        <div class="mb-4 text-center text-2xl font-bold text-black">Ordered successfully!</div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let formToDelete = null;
        const modal = document.getElementById('deleteCartModal');
        const cancelBtn = document.getElementById('deleteCartCancelBtn');
        const confirmBtn = document.getElementById('deleteCartConfirmBtn');

        document.querySelectorAll('.delete-cart-item-form').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                formToDelete = form;
                if (modal) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                }
            });
        });

        if (cancelBtn) {
            cancelBtn.addEventListener('click', function() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                formToDelete = null;
            });
        }
        if (confirmBtn) {
            confirmBtn.addEventListener('click', function() {
                if (!formToDelete) return;
                fetch(formToDelete.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': formToDelete.querySelector('[name=_token]').value,
                            'Accept': 'application/json',
                        },
                        body: new FormData(formToDelete)
                    })
                    .then(res => {
                        if (res.ok) {
                            window.location.reload(); // Reload immediately after successful delete
                        } else {
                            alert('Failed to delete item.');
                        }
                    });
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                formToDelete = null;
            });
        }

        // Checkout modal logic
        const checkoutBtn = document.querySelector('#stickyCheckoutBar button');
        const checkoutModal = document.getElementById('checkoutConfirmModal');
        const checkoutCancelBtn = document.getElementById('checkoutCancelBtn');
        const orderSuccessModal = document.getElementById('orderSuccessModal');
        if (checkoutBtn && checkoutModal) {
            checkoutBtn.addEventListener('click', function(e) {
                e.preventDefault();
                checkoutModal.classList.remove('hidden');
                checkoutModal.classList.add('flex');
            });
        }
        if (checkoutCancelBtn) {
            checkoutCancelBtn.addEventListener('click', function() {
                checkoutModal.classList.add('hidden');
                checkoutModal.classList.remove('flex');
            });
        }
        document.querySelectorAll('.checkout-confirm-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                fetch('/checkout-cart', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]')
                                .content,
                            'Accept': 'application/json',
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            // Show success modal, then reload after 4 seconds
                            if (orderSuccessModal) {
                                orderSuccessModal.classList.remove('hidden');
                                orderSuccessModal.classList.add('flex');
                                setTimeout(function() {
                                    window.location.reload();
                                }, 1500);
                            } else {
                                window.location.reload();
                            }
                        } else {
                            alert('Checkout failed.');
                        }
                    });
                checkoutModal.classList.add('hidden');
                checkoutModal.classList.remove('flex');
            });
        });
    });
</script>
