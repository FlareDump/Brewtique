@extends('layouts.layout')

@auth
    @include('components.logged_navbar')
@else
    @include('components.navbar')
@endauth

@section('title', 'User Dashboard')
<section class="font-Primary flex min-h-screen flex-col justify-between py-10">
    <div class="h-100 w-full px-10">
        <div class="grid grid-cols-5 grid-rows-1 gap-4">
            <div class="bg-bgColor flex flex-col gap-40 rounded-md p-5 shadow-sm">
                <ul class="flex flex-col gap-5 p-5">
                    <li>Sample Text</li>
                    <li>Sample Text</li>
                    <li>Sample Text</li>
                    <li>Sample Text</li>
                    <li>Sample Text</li>
                </ul>

                <div class="flex">
                    <button
                        class="bg-txtHighlighted text-txtPrimary hover:bg-txtSecondary rounded-md px-10 py-1 transition-all duration-200">
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

            <div class="bg-bgColor col-start-5 rounded-md shadow-sm">3</div>
        </div>
    </div>
</section>

@include('layouts.footer_section')
