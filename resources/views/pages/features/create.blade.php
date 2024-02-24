@extends('layout.dashboard')
@section('title', "ERPPOS | Features")
@section('content')
    <div class="h-screen w-full p-8">
        <form action="{{ route('features.store') }}" method="post" class="border border-blue-300 p-5 w-fit rounded flex gap-4 items-center">
            @csrf
            <input type="text" name="name" class="border border-primary px-6 py-1 rounded-md" placeholder="Enter Feature's name" required id="name"/>
            @error('name')
            <p class="text-red-600">{{ $message }}</p>
            @enderror
            <button type="submit" class="bg-blue-400 hover:bg-blue-400/50 px-4 py-1 rounded-md">Submit</button>
        </form>
    </div>
@endsection
