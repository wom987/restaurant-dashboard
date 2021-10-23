@extends('layouts.app')
@section('content')

    <section class="max-w-4xl p-6 mx-auto mt-8  rounded-md shadow-md bg-gray-800">
        <h2 class="text-lg font-semibold  capitalize text-white">Editar producto</h2>
        @include('products.form',["product"=>$product,'url'=>'/products/'.$id,'method'=>"PUT"]);
    </section>

@endsection
