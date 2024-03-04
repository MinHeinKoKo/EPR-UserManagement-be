@extends('layout.app')
@section('title', "Mobile E-commerce")
@section('content')
    <div class="w-full h-auto flex">
        <div class="w-64">
{{--            displaying category lists--}}
            <x-ecommerce.category />
        </div>
        <div class="w-full h-auto flex flex-col">

        </div>
    </div>
@endsection
