<x-header />
<x-navbar />

<div class="container max-w-full mx-auto md:py-24 px-6">
    <div class="max-w-sm mx-auto px-6">
        <div class="relative flex flex-wrap">
            <div class="w-full relative">
                <div class="my-8 md:mt-6">
                    {{-- <div class="text-center font-semibold text-black">
                        GET STARTED WITH
                    </div>
                    <div class="text-center font-base text-black">
                        BLOOM ADS
                    </div> --}}
                    <form class="mt-24 md:mt-8" method="POST" action="{{ route('signup') }}">
                        @csrf
                        <div class="mx-auto max-w-lg ">
                            @if (session('success'))
                            <div style="background-color: green" class="text-2xl alert alert-success">
                                <h1>{{ session('success') }}</h1>
                            </div>
                            @endif
                            <div class="py-1">
                                <span class="px-1 text-sm text-gray-600">Full Name</span>
                                <input placeholder="Full Name" name="name" type="text"
                                    class="text-md block px-3 py-2 rounded-lg w-full
                  bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                            </div>
                            <div class="py-1">
                                <span class="px-1 text-sm text-gray-600">Brand Name</span>
                                <input placeholder="Brand Name" name="brand" type="text"
                                    class="text-md block px-3 py-2 rounded-lg w-full
                  bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                            </div>
                            <div class="py-1">
                                <span class="px-1 text-sm text-gray-600">Email</span>
                                <input placeholder="Email" name="email" type="email"
                                    class="text-md block px-3 py-2 rounded-lg w-full
                  bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                            </div>
                            <div class="py-1">
                                <span class="px-1 text-sm text-gray-600">Budget</span>
                                <input placeholder="Budget" name="budget" type="number"
                                    class="text-md block px-3 py-2 rounded-lg w-full
                  bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                            </div>

                            <div class="flex justify-start">
                                <label class="block text-gray-500 font-bold my-4 flex items-center">
                                    <input class="leading-loose text-pink-600 top-0" type="checkbox" />
                                    <span class="ml-2 text-sm py-2 text-gray-600 text-left">Accept the
                                        <a href="#"
                                            class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">
                                            Terms and Conditions of the site
                                        </a>and
                                        <a href="#"
                                            class="font-semibold text-black border-b-2 border-gray-200 hover:border-gray-500">
                                            the information data policy.</a>
                                    </span>
                                </label>
                            </div>
                            <button class="mt-3 text-lg font-semibold
              bg-bloom-orange w-full text-white border rounded-lg
              px-6 py-3 block shadow-xl hover:bg-white hover:border-bloom-orange hover:text-bloom-orange">
                                Get Started
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<x-footer />