@extends('layout.app')
@section('title', "Mobile E-commerce")
@section('content')
    <div class="w-full h-auto flex gap-x-4 mb-10" id="home">
        <div class="w-72 my-5" >
            <div class="flex flex-col gap-y-5" id="category">
                <x-search-input />
                {{--            displaying category lists--}}

                @foreach($categories as $category)
                    <x-ecommerce.category :category="$category" />
                @endforeach

            </div>


        </div>
        <div class="w-full h-auto flex flex-col gap-y-3">
            <div class="w-full h-auto flex gap-x-2 my-5 flex-row flex-wrap">
                @foreach($products as $product)
                    <div class="w-[250px] mb-3">
                        <x-ecommerce.product :product="$product" />
                    </div>
                @endforeach
            </div>
            <div class="w-full flex justify-end">
                <x-ecommerce.pagination />
            </div>
        </div>
    </div>
@endsection
