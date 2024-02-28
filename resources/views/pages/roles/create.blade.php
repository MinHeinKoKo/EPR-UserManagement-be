@extends('layout.dashboard')
@section('title', "ERPPOS | Roles")
@section('content')
    <div class="h-screen w-full p-8">
        <form action="{{ route('roles.store') }}" method="post" class="border border-blue-300 p-5 w-[800px] rounded flex flex-col gap-4 items-center">
            @csrf
            <input type="text" name="name" class="border border-primary px-6 py-1 w-full rounded-md" placeholder="Enter Role's name" required id="name"/>
            @error('name')
            <p class="text-red-600">{{ $message }}</p>
            @enderror

            <div class="border border-gray-200 bg-gray-100 p-3 w-full">
                <h3>Please select the permission</h3>
                <div class="flex flex-col gap-3 w-full h-auto">
                    @foreach($features as $key=>$f)
                        <div class="flex flex-wrap">
                            <div class="">
                                <input type="checkbox" name="access[{{ $key }}][feature_id]" id="feature{{ $f->id }}" value="{{ $f->id }}">
                                <label for="feature{{ $f->id }}">{{ $f->name }}</label>
                            </div>
                            <div class="flex flex-wrap gap-3 px-6">
                                @foreach($f->permissions as $p)
                                    <div class="">
                                        <input type="checkbox" name="access[{{ $key }}][permissions][]" id="permission{{ $p->id }}" value="{{ $p->id }}">
                                        <label for="permission{{ $p->id }}">{{ $p->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            @error('access')
            <p class="text-red-600">{{ $message }}</p>
            @enderror

            @error('access.*')
            <p class="text-red-600">{{ $message }}</p>
            @enderror

            @error('access.*.permissions')
            <p class="text-red-600">{{ $message }}</p>
            @enderror
            @error('access.*.permissions.*')
            <p class="text-red-600">{{ $message }}</p>
            @enderror

            <button type="submit" class="bg-blue-400 hover:bg-blue-400/50 px-4 py-1 rounded-md">Submit</button>
        </form>
    </div>
@endsection
