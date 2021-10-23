@csrf
<?php
$options = [
    '' => 'Ninguno',
    'El mas vendido' => 'El mas vendido',
    'Alta demanda' => 'Alta demanda',
    'Pronto a acabarse' => 'Pronto a acabarse',
];
?>
{!! Form::open(['url' => $url, 'method' => $method, 'files' => true]) !!}
<div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
    <div>
        <label class="text-gray-200"
            for="name">Nombre:</label>
        {{ Form::text('name', $product->name, ['class' => 'block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring', 'placeholder' => 'Nombre producto', 'required']) }}
    </div>
    <div>
        <label class="text-gray-200"
            for="price">Precio:</label>
        {{ Form::number('price', $product->price, ['class' => 'block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring', 'placeholder' => 'Precio producto', 'required', 'step' => '0.01', 'min' => 0]) }}
    </div>
    <div>
        <label class="text-gray-200"
            for="description">Descripción:</label>
        <textarea id="description"
            type="text"
            name="description"
            class="block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring">
            {{ $product->description }}
        </textarea>
    </div>
    <div>
        <label class="text-gray-200"
            for="description">Comentario:</label>
        {{ Form::select('comment', $options, $product->comment, ['class' => 'block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring']) }}
    </div>
    <div>
        <label class="text-gray-200"
            for="picture">Foto:</label>
        {{ Form::file('product_image', ['accept' => 'image/*', 'id' => 'product_image', 'class' => 'block w-full px-4 py-2 mt-2  border  rounded-md bg-gray-800 text-gray-300 border-gray-600 focus:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring']) }}
    </div>
    @if ($product->image != '')
        <div class="w-full  h-44 bg-cover bg-center rounded-lg"
            style="background-image: url('{{ $product->image }}')">
            <label class="text-gray-900 px-6 py-4 text-2xl font-bold"
            for="picture">Foto guardada en base de datos</label>
        </div>

    @endif
</div>
<div class="flex justify-end mt-6">
    <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600"
        type="submit">Guardar</button>
</div>
{!! Form::close() !!}
