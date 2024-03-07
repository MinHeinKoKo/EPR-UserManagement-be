@extends('layout.app')
@section('title', "Mobile E-commerce")
@section('content')
<div class="w-full h-auto mt-20 max-w-7xl mx-auto pb-10">
    
    <div class="flex flex-col justify-center gap-y-10 w-full">
        <div class="flex items-center justify-evenly">
            <div class="flex-1">
                <img 
                src="https://images.unsplash.com/photo-1594385208974-2e75f8d7bb48?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" 
                class="w-[350px] mx-auto object-cover aspect-square rounded-md shadow-sm" 
                alt="product" />
            </div>
            <div class="flex-1">
                <div class="flow-root">
                    <dl class="-my-3 divide-y divide-gray-100 text-sm">
                  
                      <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Name</dt>
                        <dd class="text-gray-700 sm:col-span-2">{{ $product->name }}</dd>
                      </div>
                  
                      <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Category</dt>
                        <dd class="text-gray-700 sm:col-span-2">{{ $product->category }}</dd>
                      </div>
                  
                      <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Sub-Category</dt>
                        <dd class="text-gray-700 sm:col-span-2">{{ $product->subcategory }}</dd>
                      </div>

                      <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Price</dt>
                        <dd class="text-gray-700 sm:col-span-2">${{ $product->price }}</dd>
                      </div>
                  
                      <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                        <dt class="font-medium text-gray-900">Description</dt>
                        <dd class="text-gray-700 sm:col-span-2">
                          {{ $product->description }}
                        </dd>
                      </div>
                    </dl>
                  </div>
            </div>
        </div>
        <div class="max-w-4xl mx-auto">
            <ul class="list-disc flex flex-col gap-y-5">
                <li>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, quo! Recusandae dolore, sed, dignissimos numquam aliquid asperiores dolor eveniet laboriosam quasi quidem incidunt debitis perferendis est, quod et minima tempora!
                </li>
                <li>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, quo! Recusandae dolore, sed, dignissimos numquam aliquid asperiores dolor eveniet laboriosam quasi quidem incidunt debitis perferendis est, quod et minima tempora!
                </li>
                <li>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, quo! Recusandae dolore, sed, dignissimos numquam aliquid asperiores dolor eveniet laboriosam quasi quidem incidunt debitis perferendis est, quod et minima tempora!
                </li>
                <li>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, quo! Recusandae dolore, sed, dignissimos numquam aliquid asperiores dolor eveniet laboriosam quasi quidem incidunt debitis perferendis est, quod et minima tempora!
                </li>
                <li>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, quo! Recusandae dolore, sed, dignissimos numquam aliquid asperiores dolor eveniet laboriosam quasi quidem incidunt debitis perferendis est, quod et minima tempora!
                </li>
            </ul>
        </div>
    </div>

</div>
@endsection