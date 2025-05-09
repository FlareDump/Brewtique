@extends('layouts.user-layout')
<link rel="icon" href="./icons/brewtique-icon.png">
@section('title', 'Brewtique Sign in')

<div class="bg-bgPrimary flex min-h-screen items-center justify-center">
    <div class="bg-txtPrimary inline-block rounded-lg shadow-2xl">
        <div class="bg-txtPrimary flex flex-row rounded-lg">
            <!-- Left Section -->
            <div class="bg-txtPrimary w-1/2 rounded-lg px-10 py-10">
                <div class="flex items-center justify-center gap-3.5">
                    <img src="./icons/brewtique-user-icon.png" alt="brewtique-icon">
                    <h1 class="font-TitleFont text-xl font-black">Brewtique</h1>
                </div>
                <div>
                    <h2 class="font-Primary text-txtExtra text-4xl font-black">
                        “Every Sip Starts Here – Sign in now!
                    </h2>
                </div>

                <form action="" class="flex flex-col">

                    <label for="" class="font-Primary px-5 py-2.5 text-sm">Email Address</label>
                    <input type="text" placeholder="your_email@gmail.com"
                        class="bg-colorExtra rounded-md px-3.5 py-2.5 text-sm">


                    <label for="" class="font-Primary px-5 py-2.5 text-sm">Password</label>
                    <input type="password" placeholder="********"
                        class="bg-colorExtra rounded-md px-3.5 py-2.5 text-sm">


                    <label for="" class="font-Primary px-5 py-2.5 text-sm">Confirm Password</label>
                    <input type="password" placeholder="********"
                        class="bg-colorExtra rounded-md px-3.5 py-2.5 text-sm">

                    <div class="text-txtExtra flex flex-row justify-between px-5 py-2.5">
                        <div class="flex flex-row items-center gap-2">

                            <input type="checkbox"
                                class="h-5 w-5 appearance-none rounded border-0 bg-gray-200 checked:bg-blue-500">
                            <span class="font-Primary text-txtExtra text-xs">Remember me</span>

                        </div>
                        <div class="flex">
                            <span class="font-Primary text-txtExtra text-xs">Forgot password?</span>
                        </div>
                    </div>

                    <div class="flex flex-col items-center justify-center gap-2.5">

                        <button class="bg-btnColor font-Primary text-txtPrimary rounded-sm px-20 py-1 text-lg">Sign
                            In</button>

                        <div class="flex w-full max-w-56 items-center justify-center">
                            <div class="flex-grow border-t border-gray-400"></div>
                            <span class="mx-4 text-sm text-gray-500">or</span>
                            <div class="flex-grow border-t border-gray-400"></div>
                        </div>

                        <button
                            class="border-txtTertiary flex flex-row items-center justify-center gap-2.5 rounded-sm border px-2.5 py-1 text-xs">
                            <img src="./icons/google-icon.svg" alt="Google">
                            Continue with Google

                        </button>

                        <span class="text-sm text-gray-500">Already have an account? <a href="#"
                                class="underline">Login</a></span>

                    </div>

                </form>
            </div>

            <!-- Right Section -->
            <div class="bg-icon rounded-tb-lg flex w-1/2 items-center justify-center rounded-r-lg rounded-bl-[250px]">
                <img src="./images/Kape 1.png" alt="" class="lg:size-128 md:size-86">
            </div>
        </div>
    </div>
</div>
