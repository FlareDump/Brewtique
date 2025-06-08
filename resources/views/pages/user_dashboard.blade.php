@extends('layouts.layout')
<link rel="icon" href="/icons/brewtique-icon.png">
@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'My Account')
<section class="font-Primary flex min-h-screen flex-col justify-between py-4 md:py-10">
    <div class="md:py-15 h-full w-full px-4 py-5 md:px-10">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-6">
            <div
                class="bg-bgColor flex h-full min-h-[400px] flex-col justify-between rounded-md p-5 shadow-sm md:min-h-[600px]">
                <ul class="flex flex-col gap-3 p-2">
                    <li>
                        <a href="/Dashboard/User"
                            class="text-txtSecondary bg-txtHighlighted/80 hover:bg-txtHighlighted flex items-center gap-3 rounded-md px-3 py-2 font-medium transition">
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
            <div class="rounded-md bg-white p-5 md:col-span-3">
                <div class="flex flex-col items-center">
                    <h1 class="text-3xl font-bold">
                        Hello, {{ Auth::user()->username }}!
                    </h1>
                    <p class="text-lg text-gray-600">
                        Manage and protect you account
                    </p>
                </div>

                <form id="user-profile-form" action="/user/update" method="POST"
                    class="mx-auto mt-8 flex w-full max-w-xl flex-col gap-6">
                    @csrf
                    <div class="flex flex-col items-center gap-4 md:flex-row md:gap-8">
                        <label class="w-40 text-lg font-normal">Username</label>
                        <input type="text" name="username"
                            class="border-colorExtra bg-colorExtra text-txtSecondary focus:border-txtHighlighted focus:ring-txtHighlighted placeholder-txtSubText h-8 flex-1 rounded-md border-2 px-2 transition-all duration-200 focus:ring-2"
                            value="{{ Auth::user()->username ?? '' }}" required />
                    </div>
                    <div class="flex flex-col items-center gap-4 md:flex-row md:gap-8">
                        <label class="w-40 text-lg font-normal">Name</label>
                        <input type="text" name="name"
                            class="border-colorExtra bg-colorExtra text-txtSecondary focus:border-txtHighlighted focus:ring-txtHighlighted placeholder-txtSubText h-8 flex-1 rounded-md border-2 px-2 transition-all duration-200 focus:ring-2"
                            value="{{ Auth::user()->name }}" required />
                    </div>
                    <div class="flex flex-col items-center gap-4 md:flex-row md:gap-8">
                        <label class="w-40 text-lg font-normal">Email</label>
                        <span class="flex-1 text-gray-500">{{ Auth::user()->email }}</span>
                    </div>
                    <div class="flex flex-col items-center gap-4 md:flex-row md:gap-8">
                        <label class="w-40 text-lg font-normal">Phone Number</label>
                        <input type="text" name="phone_number"
                            class="border-colorExtra bg-colorExtra text-txtSecondary focus:border-txtHighlighted focus:ring-txtHighlighted placeholder-txtSubText h-8 flex-1 rounded-md border-2 px-2 transition-all duration-200 focus:ring-2"
                            placeholder="Enter phone number" value="{{ Auth::user()->phone_number ?? '' }}" />
                    </div>
                    <div class="flex flex-col items-center gap-4 md:flex-row md:gap-8">
                        <label class="w-40 text-lg font-normal">Gender</label>
                        <div class="flex flex-1 gap-8">
                            <label class="flex items-center gap-2">
                                <input type="radio" name="gender" value="male" class="accent-2 accent-blue-500"
                                    {{ (Auth::user()->gender ?? '') == 'male' ? 'checked' : '' }}>
                                Male
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="radio" name="gender" value="female" class="accent-2 accent-blue-500"
                                    {{ (Auth::user()->gender ?? '') == 'female' ? 'checked' : '' }}>
                                Female
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="radio" name="gender" value="other" class="accent-2 accent-blue-500"
                                    {{ (Auth::user()->gender ?? '') == 'other' ? 'checked' : '' }}>
                                Other
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-4 md:flex-row md:gap-8">
                        <label class="w-40 text-lg font-normal">Date of Birth</label>
                        <input type="date" name="date_of_birth"
                            class="border-colorExtra bg-colorExtra text-txtSecondary focus:border-txtHighlighted focus:ring-txtHighlighted placeholder-txtSubText h-8 flex-1 rounded-md border-2 px-2 transition-all duration-200 focus:ring-2"
                            value="{{ Auth::user()->date_of_birth ?? '' }}" />
                    </div>
                    <div class="flex flex-col items-center gap-4 md:flex-row md:gap-8">
                        <label class="w-40 text-lg font-normal">Address</label>
                        <div class="flex flex-1 items-center gap-2">
                            <input type="text" name="address" id="userAddressInput"
                                class="border-colorExtra bg-colorExtra text-txtSecondary focus:border-txtHighlighted focus:ring-txtHighlighted placeholder-txtSubText h-8 w-full rounded-md border-2 px-2 transition-all duration-200 focus:ring-2"
                                placeholder="Enter your address or pick from map"
                                value="{{ Auth::user()->address ?? '' }}" />
                            <button type="button" id="openMapPickerBtn"
                                class="bg-txtHighlighted flex items-center justify-center rounded px-4 py-4 text-xs text-white">
                                <i class="fa-solid fa-location-dot fa-lg"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <button type="submit"
                            class="bg-txtHighlighted hover:hover:bg-txtSecondary rounded-lg px-10 py-1 text-xl text-white transition-all duration-200">Save</button>
                    </div>
                </form>
            </div>
            {{-- Bag Section --}}
            @php
                use App\Models\Cart;
                use Illuminate\Support\Facades\Auth;
                $miniCartItems = Cart::where('user_id', Auth::id())->orderByDesc('AddedAt')->get(); // removed take(3)
                $miniCartTotal = Cart::where('user_id', Auth::id())->sum('TotalPrice');
            @endphp
            <div
                class="bg-bgColor col-start-1 mt-6 flex h-full flex-col justify-between rounded-md p-5 shadow-sm md:col-span-2 md:col-start-5 md:mt-0">
                <!-- Header -->
                <div class="mb-4 flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-bag-shopping text-2xl"></i>
                        <span class="text-xl font-bold">Your Bag</span>
                    </div>
                    <a href="/Dashboard/My-Bag" class="text-txtSecondary text-sm font-medium hover:underline">View
                        More..</a>
                </div>
                <!-- Bag Item Card -->
                <div class="no-scrollbar flex h-full max-h-[55vh] flex-col gap-4 overflow-y-auto">
                    @if ($miniCartItems->isEmpty())
                        <div class="text-txtSecondary py-8 text-center">Your bag is empty.</div>
                    @else
                        @foreach ($miniCartItems as $item)
                            <div class="bg-txtHighlighted/30 flex items-center gap-4 rounded-xl p-3">
                                <img src="{{ $item->ImagePath ?? asset('images/best_seller1.png') }}"
                                    alt="{{ $item->ProductName ?? 'N/A' }}"
                                    class="h-16 w-16 rounded-lg object-cover">
                                <div class="flex flex-1 flex-col">
                                    <span
                                        class="text-txtSecondary font-bold leading-tight">{{ $item->ProductName ?? 'N/A' }}</span>
                                    <span class="text-txtSecondary text-sm leading-tight">Quantity:
                                        {{ $item->Quantity ?? 1 }}</span>
                                </div>
                                <div class="flex flex-col items-end gap-2">
                                    <span
                                        class="text-txtHighlighted text-lg font-bold">₱{{ $item->TotalPrice !== null ? number_format($item->TotalPrice, 2) : 'N/A' }}</span>
                                    <span class="text-txtSecondary text-xs">x{{ $item->Quantity ?? 1 }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <!-- Spacer -->
                <div class="flex-1"></div>
                <!-- Total and Checkout -->
                <div class="mt-4">
                    <div class="border-txtSecondary/40 mb-2 flex items-center justify-between border-t pt-4">
                        <span class="text-lg font-bold">Total</span>
                        <span
                            class="text-txtHighlighted text-lg font-bold">₱{{ number_format($miniCartTotal, 2) }}</span>
                    </div>
                    <form id="miniCheckoutForm" method="POST" action="/checkout-cart">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <button id="miniCheckoutBtn"
                            class="bg-txtHighlighted hover:bg-txtSecondary mt-2 w-full rounded-md py-2 text-lg font-medium text-white transition">Checkout</button>
                    </form>
                </div>
            </div>
            <!-- Mini Order Success Modal -->
            <div id="miniOrderSuccessModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">
                <div class="flex flex-col items-center justify-center rounded-xl bg-[#FDECCB] px-8 py-10 shadow-xl">
                    <div class="mb-4">
                        <span class="bg-txtHighlighted flex h-20 w-20 items-center justify-center rounded-full">
                            <i class="fa-solid fa-circle-check text-4xl text-white"></i>
                        </span>
                    </div>
                    <div class="mb-4 text-center text-2xl font-bold text-black">Ordered successfully!</div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer_section')

@vite('resources/js/app.js')

<!-- Map Picker Modal -->
<div id="mapPickerModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50">
    <div class="relative w-full max-w-xl rounded-lg bg-white p-4 shadow-lg">
        <button id="closeMapPickerBtn" class="absolute right-2 top-2 text-gray-500 hover:text-black">&times;</button>
        <h2 class="mb-2 text-lg font-bold">Pick your location</h2>
        <div id="mapPicker" style="height: 350px; width: 100%;" class="rounded"></div>
        <div class="mt-3 flex justify-end">
            <button id="confirmMapPickerBtn" class="bg-txtHighlighted rounded px-4 py-1 text-white">Confirm</button>
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

@vite('resources/js/app.js')

<script async src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const miniCheckoutBtn = document.getElementById('miniCheckoutBtn');
        const miniCheckoutForm = document.getElementById('miniCheckoutForm');
        const checkoutModal = document.getElementById('checkoutConfirmModal');
        const miniOrderSuccessModal = document.getElementById('miniOrderSuccessModal');
        const checkoutCancelBtn = document.getElementById('checkoutCancelBtn');
        if (miniCheckoutBtn && checkoutModal) {
            miniCheckoutBtn.addEventListener('click', function(e) {
                e.preventDefault();
                checkoutModal.classList.remove('hidden');
                checkoutModal.classList.add('flex');
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
                        },
                        body: new FormData(miniCheckoutForm)
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            if (miniOrderSuccessModal) {
                                miniOrderSuccessModal.classList.remove('hidden');
                                miniOrderSuccessModal.classList.add('flex');
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
        if (checkoutCancelBtn) {
            checkoutCancelBtn.addEventListener('click', function() {
                checkoutModal.classList.add('hidden');
                checkoutModal.classList.remove('flex');
            });
        }
    });
</script>
