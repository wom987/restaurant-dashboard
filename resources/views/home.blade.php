@extends('layouts.app')

@section('content')

    <div class="max-w-6xl px-8 py-4 mx-auto rounded-lg shadow-md bg-gray-800">
        <div class="flex items-center justify-between">
            <span class="text-sm text-gray-400">Mar 10, 2021</span>
            <a class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80" href="{{route('products.create')}}" >
                Agregar producto
            </a>
        </div>

        <div class="mt-2">
            <a href="#"
                class="text-2xl font-bold text-white hover:text-gray-200 hover:underline">Productos en la tienda</a>
            <div class="flex flex-wrap content-start m-4">

                <div class="flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                    <div class="w-1/3 bg-cover"
                        style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')"></div>

                    <div class="w-2/3 p-4 md:p-4">
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Backpack</h1>

                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit</p>

                        <div class="flex mt-2 item-center">
                            <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300"
                                viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                            </svg>

                            <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300"
                                viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                            </svg>

                            <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300"
                                viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                            </svg>

                            <svg class="w-5 h-5 text-gray-500 fill-current"
                                viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                            </svg>

                            <svg class="w-5 h-5 text-gray-500 fill-current"
                                viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                            </svg>
                        </div>

                        <div class="flex justify-between mt-3 item-center">
                            <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">$220</h1>
                            <button
                                class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Editar Producto</button>
                        </div>
                    </div>
                </div>

                <div class="flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                    <div class="w-1/3 bg-cover"
                        style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')"></div>

                    <div class="w-2/3 p-4 md:p-4">
                        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Backpack</h1>

                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit</p>

                        <div class="flex mt-2 item-center">
                            <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300"
                                viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                            </svg>

                            <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300"
                                viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                            </svg>

                            <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300"
                                viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                            </svg>

                            <svg class="w-5 h-5 text-gray-500 fill-current"
                                viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                            </svg>

                            <svg class="w-5 h-5 text-gray-500 fill-current"
                                viewBox="0 0 24 24">
                                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
                            </svg>
                        </div>

                        <div class="flex justify-between mt-3 item-center">
                            <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">$220</h1>
                            <button
                                class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mt-4">

            <div class="flex items-center">
                <img class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block"
                    src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=40&q=80"
                    alt="avatar">
                <a class="font-bold cursor-pointer text-gray-200">Wilmar Osorio</a>
            </div>
        </div>
    </div>
@endsection
