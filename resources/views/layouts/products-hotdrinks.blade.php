<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./icons/brewtique-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FDEEDC] font-sans text-[#1e1e1e]">
    <!-- Tabs -->
    <div class="bg-[#3b1f00] px-6 py-6">
        <div class="justify-left flex flex-wrap gap-6 px-9 font-semibold">
            <button class="text-white">Hot Drinks</button>
            <button class="text-white">Cold Drinks</button>
            <button class="text-white">Pastries</button>
        </div>
    </div>

    <!-- Title and Grid -->
    <div class="px-4 py-8 sm:px-6 md:px-10">
        <h1 class="mb-6 text-xl font-bold sm:text-2xl">Hot Drinks</h1>
        <div
            class="grid grid-cols-1 gap-6 rounded-xl bg-[#4a2600] p-4 text-white sm:grid-cols-2 sm:p-6 md:grid-cols-3 md:p-8 lg:grid-cols-4">

            <!-- Card -->
            <div class="rounded-xl bg-[#3b1f00] p-4">
                <div class="relative">
                    <img src="./images/americano.png" alt="americano" class="h-48 w-full rounded-md object-cover" />
                </div>
                <div class="mt-4">
                    <p class="text-sm font-semibold">Americano<br><span class="text-xs font-light">Latte</span></p>
                    <div class="mt-1 flex justify-between text-sm">
                        <span>₱180.00</span>
                        <span>300 ml</span>
                    </div>
                </div>
            </div>
            <div class="rounded-xl bg-[#3b1f00] p-4">
                <div class="relative">
                    <img src="./images/americano.png" alt="americano" class="h-48 w-full rounded-md object-cover" />
                </div>
                <div class="mt-4">
                    <p class="text-sm font-semibold">Americano<br><span class="text-xs font-light">Latte</span></p>
                    <div class="mt-1 flex justify-between text-sm">
                        <span>₱180.00</span>
                        <span>300 ml</span>
                    </div>
                </div>
            </div>
            <div class="rounded-xl bg-[#3b1f00] p-4">
                <div class="relative">
                    <img src="./images/americano.png" alt="americano" class="h-48 w-full rounded-md object-cover" />
                </div>
                <div class="mt-4">
                    <p class="text-sm font-semibold">Americano<br><span class="text-xs font-light">Latte</span></p>
                    <div class="mt-1 flex justify-between text-sm">
                        <span>₱180.00</span>
                        <span>300 ml</span>
                    </div>
                </div>
            </div>
            <div class="rounded-xl bg-[#3b1f00] p-4">
                <div class="relative">
                    <img src="./images/americano.png" alt="americano" class="h-48 w-full rounded-md object-cover" />
                </div>
                <div class="mt-4">
                    <p class="text-sm font-semibold">Americano<br><span class="text-xs font-light">Latte</span></p>
                    <div class="mt-1 flex justify-between text-sm">
                        <span>₱180.00</span>
                        <span>300 ml</span>
                    </div>
                </div>
            </div>
            <div class="rounded-xl bg-[#3b1f00] p-4">
                <div class="relative">
                    <img src="./images/americano.png" alt="americano" class="h-48 w-full rounded-md object-cover" />
                </div>
                <div class="mt-4">
                    <p class="text-sm font-semibold">Americano<br><span class="text-xs font-light">Latte</span></p>
                    <div class="mt-1 flex justify-between text-sm">
                        <span>₱180.00</span>
                        <span>300 ml</span>
                    </div>
                </div>
            </div>
            <div class="rounded-xl bg-[#3b1f00] p-4">
                <div class="relative">
                    <img src="./images/americano.png" alt="americano" class="h-48 w-full rounded-md object-cover" />
                </div>
                <div class="mt-4">
                    <p class="text-sm font-semibold">Americano<br><span class="text-xs font-light">Latte</span></p>
                    <div class="mt-1 flex justify-between text-sm">
                        <span>₱180.00</span>
                        <span>300 ml</span>
                    </div>
                </div>
            </div>
            <div class="rounded-xl bg-[#3b1f00] p-4">
                <div class="relative">
                    <img src="./images/americano.png" alt="americano" class="h-48 w-full rounded-md object-cover" />
                </div>
                <div class="mt-4">
                    <p class="text-sm font-semibold">Americano<br><span class="text-xs font-light">Latte</span></p>
                    <div class="mt-1 flex justify-between text-sm">
                        <span>₱180.00</span>
                        <span>300 ml</span>
                    </div>
                </div>
            </div>
            <div class="rounded-xl bg-[#3b1f00] p-4">
                <div class="relative">
                    <img src="./images/americano.png" alt="americano" class="h-48 w-full rounded-md object-cover" />
                </div>
                <div class="mt-4">
                    <p class="text-sm font-semibold">Americano<br><span class="text-xs font-light">Latte</span></p>
                    <div class="mt-1 flex justify-between text-sm">
                        <span>₱180.00</span>
                        <span>300 ml</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
