<script src="https://kit.fontawesome.com/cce20cf791.js" crossorigin="anonymous"></script>
<nav class="bg-bgPrimary fixed z-50 w-full shadow-md">
    <div class="flex items-center justify-between px-8 py-3">
        <div class="flex items-center gap-3">
            <img src="{{ asset('icons/brewtique-logo.png') }}" alt="brewtique" class="h-10 w-10">
            <h1 class="font-TitleFont text-2xl font-black text-black">Brewtique Admin</h1>
        </div>
        <ul class="font-Primary flex gap-x-10 text-lg font-bold text-black">
            <li><a href="/Dashboard/Admin" class="hover:text-txtHighlighted flex items-center gap-2 transition-colors"><i
                        class="fa-solid fa-gauge-high"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.products') }}"
                    class="hover:text-txtHighlighted flex items-center gap-2 transition-colors"><i
                        class="fa-solid fa-mug-hot"></i> Products</a></li>
            <li><a href="{{ route('admin.orders') }}"
                    class="hover:text-txtHighlighted flex items-center gap-2 transition-colors"><i
                        class="fa-solid fa-bag-shopping"></i> Orders</a></li>
            <li><a href="{{ route('admin.users') }} "
                    class="hover:text-txtHighlighted flex items-center gap-2 transition-colors"><i
                        class="fa-solid fa-users"></i> Users</a></li>
        </ul>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="bg-btnColor hover:bg-btnColor2 text-txtPrimary font-Primary flex items-center gap-2 rounded-lg px-6 py-2 font-bold transition-colors duration-200">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
            </button>
        </form>
    </div>
</nav>
