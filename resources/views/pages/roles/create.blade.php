@extends('layout.dashboard')
@section('title', 'ERPPOS | Roles')
@section('content')
    <div class="w-full h-screen p-8">
        <form action="{{ route('roles.store') }}" method="post"
            class="border border-blue-300 p-5 w-[800px] rounded flex flex-col gap-4 items-center" id="roleForm">
            @csrf
            <input type="text" name="name" class="w-full px-6 py-1 border rounded-md border-primary"
                placeholder="Enter Role's name" required id="name" />
            @error('name')
                <p class="text-red-600">{{ $message }}</p>
            @enderror

            <div class="w-full p-3 bg-gray-100 border border-gray-200">
                <h3>Please select the permission</h3>
                <div class="flex flex-col w-full h-auto gap-3">
                    @foreach ($features as $key => $f)
                        <div class="flex flex-wrap">
                            <div class="">
                                <input type="checkbox" name="access[{{ $key }}][feature_id]"
                                    id="feature{{ $f->id }}" value="{{ $f->id }}"
                                    class="hidden feature-checkbox">
                                <label for="feature{{ $f->id }}">{{ $f->name }}</label>
                            </div>
                            <div class="flex flex-wrap gap-3 px-6">
                                @foreach ($f->permissions as $p)
                                    <div class="">
                                        <input type="checkbox" name="access[{{ $key }}][permissions][]"
                                            id="permission{{ $p->id }}" value="{{ $p->id }}"
                                            class="permission-checkbox" data-feature-id="{{ $f->id }}">
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

            <button type="submit" class="px-4 py-1 bg-blue-400 rounded-md hover:bg-blue-400/50">Submit</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const permissionCheckboxes = document.querySelectorAll('.permission-checkbox');
            permissionCheckboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    const featureId = this.getAttribute('data-feature-id');
                    const featureCheckbox = document.querySelector('#feature' + featureId);
                    featureCheckbox.checked = true;
                });
            });
        });
    </script>
@endsection
