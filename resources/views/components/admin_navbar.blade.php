<script src="https://kit.fontawesome.com/cce20cf791.js" crossorigin="anonymous"></script>
<nav class="bg-bgPrimary fixed z-50 w-full shadow-md">
    <div class="flex flex-wrap items-center justify-between px-4 py-3 md:px-8 md:py-3">
        <div class="flex items-center gap-3">
            <img src="{{ asset('icons/brewtique-logo.png') }}" alt="brewtique" class="h-10 w-10">
            <h1 class="font-TitleFont text-2xl font-black text-black">Brewtique Admin</h1>
        </div>
        <!-- Hamburger for mobile -->
        <button id="adminNavToggle" class="ml-auto text-3xl text-black focus:outline-none md:hidden">
            <i class="fa fa-bars"></i>
        </button>
        <!-- Nav links -->
        <ul id="adminNavLinks"
            class="font-Primary bg-bgPrimary absolute left-0 top-16 z-50 hidden w-full flex-col gap-4 rounded-b-lg p-4 text-lg font-bold text-black shadow md:static md:top-auto md:z-auto md:flex md:flex md:w-auto md:flex-row md:gap-0 md:gap-x-10 md:rounded-none md:bg-transparent md:p-0 md:shadow-none">
            <li><a href="/Dashboard/Admin"
                    class="hover:text-txtHighlighted flex items-center gap-2 transition-colors"><i
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
            <li class="mt-2 md:hidden">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-btnColor hover:bg-btnColor2 text-txtPrimary font-Primary flex w-full items-center gap-2 rounded-lg px-6 py-2 font-bold transition-colors duration-200">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
        <!-- Desktop logout button -->
        <form action="{{ route('logout') }}" method="POST" class="hidden md:block">
            @csrf
            <button type="submit"
                class="bg-btnColor hover:bg-btnColor2 text-txtPrimary font-Primary flex items-center gap-2 rounded-lg px-6 py-2 font-bold transition-colors duration-200">
                <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
            </button>
        </form>
    </div>
    <script>
        const navToggle = document.getElementById('adminNavToggle');
        const navLinks = document.getElementById('adminNavLinks');
        navToggle && navToggle.addEventListener('click', function() {
            navLinks.classList.toggle('hidden');
            navLinks.classList.toggle('flex');
        });
        // Hide nav on link click (mobile)
        document.querySelectorAll('#adminNavLinks a').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 768) {
                    navLinks.classList.add('hidden');
                    navLinks.classList.remove('flex');
                }
            });
        });
    </script>
</nav>
