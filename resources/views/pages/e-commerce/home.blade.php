@extends('layout.app')
@section('title', "Mobile E-commerce")
@section('content')
    <div class="flex flex-col w-full h-auto mb-10 md:flex-row gap-x-4" id="home">
        <div class="mx-auto my-5 md:mx-0 w-72" >
            <div class="flex flex-col justify-center gap-y-5" id="category">
                <x-search-input />
                {{--            displaying category lists--}}

                @foreach($categories as $category)
                    <x-ecommerce.category :category="$category" />
                @endforeach

            </div>


        </div>
        <div class="flex flex-col w-full h-auto gap-y-3">
            <div class="flex flex-row flex-wrap justify-center w-full h-auto my-5 gap-x-2">
                @foreach($products as $key=>$product)
                    <div class="w-[250px] mb-3">
                        <x-ecommerce.product :key="$key" :product="$product" />
                    </div>
                @endforeach
            </div>
            <div class="flex justify-center w-full md:justify-end">
                <x-ecommerce.pagination />
            </div>
        </div>
    </div>
@endsection
