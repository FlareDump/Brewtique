@extends('layouts.layout')
<link rel="icon" href="/icons/brewtique-icon.png">

@include('components.admin_navbar')

@section('title', 'Admin Dashboard')

<section class="font-Primary bg-bgPrimary min-h-screen py-10">
    <div class="mt-15 mx-auto flex w-full max-w-7xl flex-col gap-8 px-4 md:flex-row md:gap-10">
        <!-- Sidebar -->
        <aside
            class="bg-bgColor mb-8 flex w-full flex-row gap-4 rounded-xl p-6 shadow md:mb-0 md:w-64 md:flex-col md:gap-8">
            <div class="flex w-full flex-col gap-10">
                <a href="/Admin/dashboard" class="text-txtHighlighted flex items-center gap-2 text-3xl font-bold">
                    <i class="fa-solid fa-gauge-high fa-xl"></i> Dashboard
                </a>
                <a href="{{ route('admin.products') }}"
                    class="hover:text-txtHighlighted flex items-center gap-2 text-xl transition-colors">
                    <i class="fa-solid fa-mug-hot"></i> Products
                </a>
                <a href="{{ route('admin.orders') }}"
                    class="hover:text-txtHighlighted flex items-center gap-2 text-xl transition-colors">
                    <i class="fa-solid fa-bag-shopping"></i> Orders
                </a>
                <a href="{{ route('admin.users') }}"
                    class="hover:text-txtHighlighted flex items-center gap-2 text-xl transition-colors">
                    <i class="fa-solid fa-users"></i> Users
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-btnColor hover:bg-btnColor2 text-txtPrimary font-Primary flex items-center gap-2 rounded-lg px-6 py-2 font-bold transition-colors duration-200">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                    </button>
                </form>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="no-scrollbar h-[75vh] max-h-[75vh] flex-1 rounded-xl bg-white p-8 shadow">
            <h1 class="text-txtSecondary mb-6 text-3xl font-bold">Welcome, Admin!</h1>
            <div class="flex w-full flex-row flex-wrap items-start justify-center gap-4">
                <!-- Small widgets row -->
                <div class="flex w-full flex-row flex-wrap justify-center gap-4">
                    <div
                        class="bg-bgColor flex min-w-[150px] max-w-xs flex-1 flex-col items-center rounded-lg p-4 shadow md:p-6">
                        <h2 class="text-txtHighlighted mb-2 text-base font-semibold md:text-lg">Total Products</h2>
                        <p class="text-txtSecondary text-2xl font-bold md:text-3xl">{{ $totalProducts }}</p>
                    </div>
                    <div
                        class="bg-bgColor flex min-w-[150px] max-w-xs flex-1 flex-col items-center rounded-lg p-4 shadow md:p-6">
                        <h2 class="text-txtHighlighted mb-2 text-base font-semibold md:text-lg">Total Orders</h2>
                        <p class="text-txtSecondary text-2xl font-bold md:text-3xl">{{ $totalOrders }}</p>
                    </div>
                    <div
                        class="bg-bgColor flex min-w-[150px] max-w-xs flex-1 flex-col items-center rounded-lg p-4 shadow md:p-6">
                        <h2 class="text-txtHighlighted mb-2 text-base font-semibold md:text-lg">Total Users</h2>
                        <p class="text-txtSecondary text-2xl font-bold md:text-3xl">{{ $totalUsers }}</p>
                    </div>
                </div>
                <!-- Large widget row -->
                <div class="mt-6 flex w-full justify-center">
                    <div
                        class="flex w-full max-w-full flex-col items-center justify-center rounded-2xl border-4 border-green-400 bg-green-200 p-6 shadow-lg md:p-12">
                        <h2 class="mb-4 text-2xl font-extrabold text-green-800 lg:text-5xl">Total Sales</h2>
                        <p class="break-words text-4xl font-black text-green-900 lg:text-8xl">
                            ₱{{ number_format($totalSales, 2) }}</p>
                    </div>
                </div>
            </div>
            <!-- Add more admin widgets, tables, or charts here -->
        </main>
    </div>
</section>

@include('layouts.footer_section')
