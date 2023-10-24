@extends('layouts.app')

@section('content')
    <div>
        <x-header />

        <div class="px-6">
            <form action="" class="flex items-center gap-x-2 mb-4">
                <input type="text" id="first-name"
                    class="bg-gray py-4 px-4 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-[#1CB87E] focus:border-[#1CB87E] block w-full p-2.5 "
                    placeholder="Search Products">
                <button type="submit"
                    class="text-white bg-[#1CB87E] hover:bg-[#168a5f] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-[17px] text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </form>

            <div id="category" class="flex flex-row gap-x-2 overflow-x-auto w-full mb-8">
                <button class="bg-slate-200 rounded-full text-center w-fit py-2 px-4 text-slate-600 text-sm">
                    All
                </button>
                <button class="bg-slate-200 rounded-full text-center w-fit py-2 px-4 text-slate-600 text-sm">
                    Vegetable
                </button>
                <button class="bg-slate-200 rounded-full text-center w-fit py-2 px-4 text-slate-600 text-sm">
                    Dairy
                </button>
                <button class="bg-slate-200 rounded-full text-center w-fit py-2 px-4 text-slate-600 text-sm">
                    Fruit
                </button>
                <button class="bg-slate-200 rounded-full text-center w-fit py-2 px-4 text-slate-600 text-sm">
                    Crops
                </button>
            </div>

            <p class="text-gray-600 font-bold mb-4">All Products</p>

            <div class="grid grid-cols-2 gap-4 pb-[100px]">
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="mx-auto p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/kankong.png') }}" alt="" width="200"
                            height="150" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Product Description</p>

                        <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                        <p class="font-bold text-md">₱ 15.00 / kg</p>
                    </div>
                </div>
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="mx-auto p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/kankong.png') }}" alt="" width="200"
                            height="150" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Product Description</p>

                        <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                        <p class="font-bold text-md">₱ 15.00 / kg</p>
                    </div>
                </div>
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="mx-auto p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/kankong.png') }}" alt="" width="200"
                            height="150" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Product Description</p>

                        <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                        <p class="font-bold text-md">₱ 15.00 / kg</p>
                    </div>
                </div>
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="mx-auto p-4">
                        <img class="rounded-t-lg" src="{{ asset('assets/kankong.png') }}" alt="" width="200"
                            height="150" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Product Description</p>

                        <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                        <p class="font-bold text-md">₱ 15.00 / kg</p>
                    </div>
                </div>
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                    <div class="mx-auto p-2">
                        <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt=""
                            width="150" height="100" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                        </a>
                        <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                        <p class="font-bold text-md">₱ 15.00 / kg</p>
                    </div>
                </div>
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                    <div class="mx-auto p-2">
                        <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt=""
                            width="150" height="100" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                        </a>
                        <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                        <p class="font-bold text-md">₱ 15.00 / kg</p>
                    </div>
                </div>
                <div class="flex-grow bg-white border border-gray-200 rounded-lg shadow">
                    <div class="mx-auto p-2">
                        <img class="rounded-t-lg mx-auto" src="{{ asset('assets/kankong.png') }}" alt=""
                            width="150" height="100" />
                    </div>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb text-md font-bold tracking-tight text-gray-900 dark:text-white">KangKong</h5>
                        </a>
                        <p class="mb-4 font-normal text-sm text-gray-700 dark:text-gray-400">Seller Name</p>
                        <p class="font-bold text-md">₱ 15.00 / kg</p>
                    </div>
                </div>
            </div>
        </div>

        <x-bottom-nav />
    </div>

    <style>
        #category::-webkit-scrollbar {
            display: none;
        }

        #category {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
    </style>
@endsection
