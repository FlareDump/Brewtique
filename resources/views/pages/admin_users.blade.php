@extends('layouts.layout')
<link rel="icon" href="/icons/brewtique-icon.png">

@include('components.admin_navbar')

@section('title', 'Admin - Users')

<section class="font-Primary bg-bgPrimary min-h-screen py-10">
    <div
        class="mt-15 mx-auto flex h-[80vh] max-h-[80vh] w-full max-w-7xl flex-col justify-center gap-8 px-4 md:flex-row">
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
        <div class="flex-1">
            <h1 class="text-txtSecondary mb-8 text-3xl font-bold">Manage Users</h1>
            <div class="no-scrollbar max-h-[80vh] overflow-x-auto overflow-y-auto rounded-lg bg-white p-6 shadow">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                User ID
                            </th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Username</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Name</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Email</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Phone</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Gender</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Date of Birth</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Address</th>
                            <th
                                class="text-txtSecondary px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4">{{ $user->id }}</td>
                                <td class="px-6 py-4">{{ $user->username }}</td>
                                <td class="px-6 py-4">{{ $user->name }}</td>
                                <td class="px-6 py-4">{{ $user->email }}</td>
                                <td class="px-6 py-4">{{ $user->phone_number }}</td>
                                <td class="px-6 py-4">{{ $user->gender }}</td>
                                <td class="px-6 py-4">{{ $user->date_of_birth }}</td>
                                <td class="px-6 py-4">{{ $user->address }}</td>
                                <td class="flex gap-2 px-6 py-4">
                                    <form class="delete-user-form"
                                        action="{{ route('admin.users.delete', $user->id) }}" method="POST"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button"
                                            class="delete-user-btn m-0 cursor-pointer border-none bg-transparent p-0 text-red-600 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer_section')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-user-btn').forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const form = btn.closest('form');
                const password = prompt('To confirm deletion, please enter your password:');
                if (password === null) return; // Cancelled
                if (password.trim() === '') {
                    alert('Password is required to confirm deletion.');
                    return;
                }
                // Create a hidden input for password
                let input = form.querySelector('input[name="admin_password"]');
                if (!input) {
                    input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'admin_password';
                    form.appendChild(input);
                }
                input.value = password;
                form.submit();
            });
        });
    });
</script>
