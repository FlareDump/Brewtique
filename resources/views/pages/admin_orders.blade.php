@extends('layouts.layout')

@include('components.admin_navbar')

@section('title', 'Admin - Orders')

<section class="font-Primary bg-bgPrimary min-h-screen py-10">
    <div class="mt-15 mx-auto flex w-full max-w-7xl flex-col gap-8 px-4 md:flex-row md:gap-10">
        <!-- Sidebar -->
        <aside
            class="bg-bgColor mb-8 flex w-full flex-row gap-4 rounded-xl p-6 shadow md:mb-0 md:w-64 md:flex-col md:gap-8">
            <div class="flex w-full flex-col gap-10">
                <a href="{{ route('adminDashboard') }}"
                    class="text-txtHighlighted flex items-center gap-2 text-3xl font-bold">
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
        <main class="flex-1 rounded-xl bg-white p-8 shadow">
            <h1 class="text-txtSecondary mb-8 text-3xl font-bold">Manage Orders</h1>
            <div class="no-scrollbar max-h-[55vh] overflow-x-auto overflow-y-auto rounded-lg bg-white p-6 shadow">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Order ID</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                User</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Product</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Quantity</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Total</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Date</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($orders as $order)
                            <tr>
                                <td class="px-6 py-4">{{ $order->OrderID }}</td>
                                <td class="px-6 py-4">{{ $order->user_id }}</td>
                                <td class="px-6 py-4">{{ $order->ProductName }}</td>
                                <td class="px-6 py-4">{{ $order->Quantity }}</td>
                                <td class="px-6 py-4">₱{{ number_format($order->TotalPrice, 2) }}</td>
                                <td class="px-6 py-4">{{ $order->PurchaseDate }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</section>

@include('layouts.footer_section')
