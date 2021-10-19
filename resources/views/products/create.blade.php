@extends('layouts.app')
@section('content')

    <section class="max-w-4xl p-6 mx-auto mt-8  rounded-md shadow-md bg-gray-800">
        <h2 class="text-lg font-semibold  capitalize text-white">Crear producto</h2>
        <form id="create_product"
            enctype="multipart/form-data"
            method="POST">
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-gray-200"
                        for="name">Nombre:</label>
                    <input id="name"
                        type="text"
                        class="block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-gray-200"
                        for="price">Precio:</label>
                    <input id="price"
                        type="price"
                        class="block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-gray-200"
                        for="description">Descripción:</label>
                    <textarea id="description"
                        type="text"
                        class="block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                </div>
                <div>
                    <label class="text-gray-200"
                        for="picture">Foto:</label>
                    <input id="picture"
                        type="file"
                        class="block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring">
                </div>
            </div>

            <div class="flex justify-end mt-6">
                <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" type="submit">Guardar</button>
            </div>
        </form>
    </section>
    
@endsection
