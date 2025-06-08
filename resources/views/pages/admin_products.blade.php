@extends('layouts.layout')

@include('components.admin_navbar')

@section('title', 'Admin - Products')

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
            <h1 class="text-txtSecondary mb-8 text-3xl font-bold">Manage Products</h1>
            <div class="mb-6 flex justify-end">
                <a href="#"
                    class="bg-btnColor hover:bg-btnColor2 text-txtPrimary rounded-lg px-6 py-2 font-bold transition">+
                    Add
                    Product</a>
            </div>
            @if (session('success'))
                <div class="mb-4 rounded bg-green-100 px-4 py-2 text-green-800">{{ session('success') }}</div>
            @endif
            <div class="no-scrollbar h-[55vh] max-h-[55vh] overflow-x-auto rounded-lg bg-white p-6 shadow">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                ID
                            </th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Name</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Category</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Price</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Stock</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($products as $product)
                            <tr>
                                <td class="px-6 py-4">{{ $product->ProdCode }}</td>
                                <td class="px-6 py-4">{{ $product->ProdName }}</td>
                                <td class="px-6 py-4">{{ $product->category ? $product->category->CategoryName : '' }}
                                </td>
                                <form action="{{ route('admin.products.update', $product->ProdCode) }}" method="POST"
                                    class="contents">
                                    @csrf
                                    @method('PUT')
                                    <td class="px-6 py-4">
                                        <input type="number" step="0.01" name="ProdPrice"
                                            value="{{ $product->ProdPrice }}" class="w-24 rounded border px-2 py-1"
                                            required />
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" name="Stock" value="{{ $product->Stock }}"
                                            class="w-20 rounded border px-2 py-1" required />
                                    </td>
                                    <td class="flex gap-2 px-6 py-4">
                                        <button type="submit" class="text-txtHighlighted hover:underline">Save</button>
                                </form>
                                <form action="{{ route('admin.products.delete', $product->ProdCode) }}" method="POST"
                                    style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="m-0 cursor-pointer border-none bg-transparent p-0 text-red-600 hover:underline">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</section>

@include('layouts.footer_section')
