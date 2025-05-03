@extends('layouts.user-layout')
<link rel="icon" href="./icons/brewtique-icon.png">


<div class="flex h-full w-full flex-row rounded-lg bg-white shadow-2xl">
    <div class="px h-full w-1/2 rounded-lg bg-white px-10">
        <div class="flex items-center justify-center gap-3.5">
            <img src="./icons/brewtique-user-icon.png" alt="brewtique-icon">
            <h1 class="font-TitleFont text-2xl font-black">Brewtique</h1>
        </div>
        <div>
            <h2 class="font-Primary text-txtExtra text-6xl font-black">
                “Every Sip Starts Here – Sign in now!
            </h2>
        </div>

        <form action="" class="flex flex-col">
            <label for="" class="font-Primary px-5 py-2.5 text-[16px]">Email Address</label>
            <input type="text" placeholder="your_email@gmail.com" class="bg-colorExtra rounded-lg px-3.5 py-3">

            <label for="" class="font-Primary px-5 py-2.5 text-[16px]">Password</label>
            <input type="password" placeholder="********" class="bg-colorExtra rounded-lg px-3.5 py-3">

            <label for="" class="font-Primary px-5 py-2.5 text-[16px]">Confirm Password</label>
            <input type="password" placeholder="********" class="bg-colorExtra rounded-lg px-3.5 py-3">

            <div class="text-txtExtra flex flex-row justify-between px-5 py-2.5">
                <div class="flex flex-row items-center gap-2">
                    <input type="checkbox"
                        class="h-5 w-5 appearance-none rounded border-0 bg-gray-200 checked:bg-blue-500">
                    <span class="font-Primary text-txtExtra">Remember me</span>
                </div>
                <div class="flex">
                    <span class="font-Primary text-txtExtra">Forgot password?</span>
                </div>

            </div>

        </form>

    </div>


    <div class="bg-icon rounded-tb-lg h-full w-1/2 rounded-r-lg rounded-bl-[250px]">

    </div>
</div>
