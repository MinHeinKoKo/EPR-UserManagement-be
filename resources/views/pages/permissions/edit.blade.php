@extends('layout.dashboard')
@section('title', "ERPPOS | Permission Edit")
@section('content')
    <div class="h-screen w-full p-8">
        <form action="{{ route('permissions.update', $permission->id) }}" method="post" class="border border-blue-300 p-5 w-fit rounded flex gap-4 items-center">
            @csrf
            @method('PUT')
            <input type="text" name="name" class="border border-primary px-6 py-1 rounded-md" placeholder="Enter Permission's name" value="{{ old('name', $permission->name) }}" required id="name"/>
            @error('name')
            <p class="text-red-600">{{ $message }}</p>
            @enderror
            <select id="feature_id" name="feature_id" class="border border-blue-300 px-6 py-1 rounded-md" required >
                @foreach($features as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $permission->feature_id ? "selected" : "" }} >{{ $item->name }}</option>
                @endforeach
            </select>
            @error('feature_id')
            <p class="text-red-600">{{ $message }}</p>
            @enderror
            <button type="submit" class="bg-blue-400 hover:bg-blue-400/50 px-4 py-1 rounded-md">Submit</button>
        </form>
    </div>
@endsection
