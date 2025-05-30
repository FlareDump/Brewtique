@extends('layouts.layout')

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'User Dashboard')
<section class="font-Primary flex min-h-screen flex-col justify-between py-10">
    <div class="h-100 py-15 w-full px-10">
        <div class="grid grid-cols-6 grid-rows-1 gap-4">
            <div class="bg-bgColor flex h-full min-h-[600px] flex-col justify-between rounded-md p-5 shadow-sm">
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
                <div class="flex">
                    <button
                        class="bg-txtHighlighted hover:bg-txtSecondary flex w-full items-center gap-3 rounded-md px-6 py-2 text-lg font-medium text-white transition">
                        <i class="fa-solid fa-arrow-right-from-bracket text-2xl"></i>
                        Logout
                    </button>
                </div>
            </div>
            <div class="col-span-3 rounded-md bg-white p-5">
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
                    <div class="flex items-center gap-8">
                        <label class="w-40 text-lg font-normal">Username</label>
                        <input type="text" name="username"
                            class="border-colorExtra bg-colorExtra text-txtSecondary focus:border-txtHighlighted focus:ring-txtHighlighted placeholder-txtSubText h-8 flex-1 rounded-md border-2 px-2 transition-all duration-200 focus:ring-2"
                            value="{{ Auth::user()->username ?? '' }}" required />
                    </div>
                    <div class="flex items-center gap-8">
                        <label class="w-40 text-lg font-normal">Name</label>
                        <input type="text" name="name"
                            class="border-colorExtra bg-colorExtra text-txtSecondary focus:border-txtHighlighted focus:ring-txtHighlighted placeholder-txtSubText h-8 flex-1 rounded-md border-2 px-2 transition-all duration-200 focus:ring-2"
                            value="{{ Auth::user()->name }}" required />
                    </div>
                    <div class="flex items-center gap-8">
                        <label class="w-40 text-lg font-normal">Email</label>
                        <span class="flex-1 text-gray-500">{{ Auth::user()->email }}</span>
                    </div>
                    <div class="flex items-center gap-8">
                        <label class="w-40 text-lg font-normal">Phone Number</label>
                        <input type="text" name="phone_number"
                            class="border-colorExtra bg-colorExtra text-txtSecondary focus:border-txtHighlighted focus:ring-txtHighlighted placeholder-txtSubText h-8 flex-1 rounded-md border-2 px-2 transition-all duration-200 focus:ring-2"
                            placeholder="Enter phone number" value="{{ Auth::user()->phone_number ?? '' }}" />
                    </div>
                    <div class="flex items-center gap-8">
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
                    <div class="flex items-center gap-8">
                        <label class="w-40 text-lg font-normal">Date of Birth</label>
                        <input type="date" name="date_of_birth"
                            class="border-colorExtra bg-colorExtra text-txtSecondary focus:border-txtHighlighted focus:ring-txtHighlighted placeholder-txtSubText h-8 flex-1 rounded-md border-2 px-2 transition-all duration-200 focus:ring-2"
                            value="{{ Auth::user()->date_of_birth ?? '' }}" />
                    </div>
                    <div class="mt-8 flex justify-center">
                        <button type="submit"
                            class="bg-txtHighlighted hover:hover:bg-txtSecondary rounded-lg px-10 py-1 text-xl text-white transition-all duration-200">Save</button>
                    </div>
                </form>
            </div>

            <div
                class="bg-bgColor col-span-2 col-start-5 flex h-full min-h-[600px] flex-col justify-between rounded-md p-5 shadow-sm">
                <!-- Header -->
                <div class="mb-4 flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-bag-shopping text-2xl"></i>
                        <span class="text-xl font-bold">Your Bag</span>
                    </div>
                    <a href="#" class="text-txtSecondary text-sm font-medium hover:underline">View More..</a>
                </div>
                <!-- Bag Item Card -->
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
                <!-- Spacer -->
                <div class="flex-1"></div>
                <!-- Total and Checkout -->
                <div class="mt-4">
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
</section>

@include('layouts.footer_section')
