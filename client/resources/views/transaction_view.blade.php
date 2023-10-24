@extends('layouts.app')
@section('content')
    <div>
        <x-header />
        <div class="px-6">
            <div class="flex gap-x-5 py-5">
                <div class="flex gap-x-2 border w-full items center p-5 rounded-lg">
                    <div class="bg-gray-500 flex my-auto h-[50px] w-[50px] rounded-full">

                    </div>
                    <div class="flex-col">
                        <p>Noel Emaas</p>
                        <p>Merchant</p>
                    </div>
                </div>

                <div class="flex gap-x-2 border w-full items-center p-5 rounded-lg">
                    <div class="bg-gray-500 flex my-auto h-[50px] w-[50px] rounded-full">

                    </div>
                    <div class="flex-col">
                        <p>Noel Emaas</p>
                        <p>Merchant</p>
                    </div>
                </div>
            </div>

            <div>
                <form action="">
                    @csrf
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment
                        Options</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose Payment Method</option>
                        <option value="US">Full Payment</option>
                        <option value="CA">50% Downpayment</option>
                        <option value="CA">75% Downpayment</option>
                        <option value="CA">25% Downpayment</option>
                    </select>


                    <div style="margin-top: 10px">

                    </div>
                    <label for="search-dropdown" class="mb-2 text-sm font-medium">Price</label>
                    <div class="flex">
                        <button id="dropdown-button" data-dropdown-toggle="dropdown"
                            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 dark:border-gray-700 dark:text-white rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                            type="button">P<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 4 4 4-4" />
                            </svg></button>

                        <div class="relative w-full">
                            <input type="search" id="search-dropdown"
                                class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-100 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                placeholder="Enter your price" required>
                            <button type="submit"
                                class="absolute top-0 right-0 p-3.5 h-full text-sm font-medium text-white bg-green-400 rounded-r-lg borde focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="mt-5">
                        <form>
                            <label for="search-dropdown"
                                class="mb-2 text-sm font-medium ">Unit of Measure</label>
                            <div class="flex">
                                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 dark:border-gray-700 dark:text-white rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800"
                                    type="button">All categories <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <div id="dropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdown-button">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Shopping</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Images</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">News</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Finance</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="relative w-full">
                                    <input type="search" id="search-dropdown"
                                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-100 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                        placeholder="Select or type unit of measure" required>
                                    <button type="submit"
                                        class="absolute top-0 right-0 p-3.5 h-full text-sm font-medium text-white bg-green-400 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                                            class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mt-3">
                        <label for="quantity"
                            class="mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                        <div class="flex items-center">
                            <button id="decrement"
                                class="flex-shrink-0  inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-red-500 rounded-l-lg hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300"
                                type="button">
                                -
                            </button>
                            <div class="relative w-full">
                                <input type="number" id="quantity"
                                    class="block p-2 w-full text-center z-20 text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                    placeholder="0" required>
                            </div>
                            <button id="increment"
                                class="flex-shrink-0  inline-flex items-center py-2 px-4 text-sm font-medium text-center text-white bg-green-400 rounded-r-lg focus:ring-4 focus:outline-none focus:ring-green-500"
                                type="button">
                                +
                            </button>
                        </div>

                    </div>

                </form>

            </div>
        </div>
        <x-bottom-nav />
    </div>
@endsection