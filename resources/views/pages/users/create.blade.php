@extends('layout.dashboard')
@section('title', "ERPPOS | User Create")
@section('content')
    <div class="w-full p-5 mx-auto">
            <div class="w-full border-2 border-blue-300 p-5 rounded-md">
                <h3 class="text-black font-semibold text-xl tracking-wider w-full">Create New User</h3>
                <form action="{{ route('users.store') }}" method="post" class="w-full grid grid-cols-2 gap-4 p-8">
                    @csrf
                    <div class="col-span-1 flex flex-col mb-3">
                        <label for="name" class="text-md my-2">Name</label>
                        <input type="text" name="name" id="name" class="px-6 py-2 border border-blue-300 rounded-md w-auto" placeholder="Enter your name" value="{{ old('name') }}" required>
                        @error('name')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-1 flex flex-col mb-3">
                        <label for="username" class="text-md my-2">UserName</label>
                        <input type="text" name="username" id="username" class="px-6 py-2 border border-blue-300 rounded-md w-auto" value="{{ old('username') }}" placeholder="Enter your username" required>
                        @error('username')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1 flex flex-col mb-3">
                        <label for="email" class="text-md my-2">Email</label>
                        <input type="email" name="email" id="email" class="px-6 py-2 border border-blue-300 rounded-md w-auto" value="{{ old('email') }}" placeholder="Enter your email" required>
                        @error('email')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1 flex flex-col mb-3">
                        <label for="password" class="text-md my-2">Password</label>
                        <input type="password" name="password" id="password" class="px-6 py-2 border border-blue-300 rounded-md w-auto" value="{{ old('password') }}" placeholder="Enter your password" required>
                        @error('password')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1 flex flex-col mb-3">
                        <label for="role" class="text-md my-2">Role</label>
                        <select name="role_id" id="role" class="px-6 py-2 border border-blue-300 rounded-md w-auto">
                            <option value="" disabled>Please Select Role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" {{ old('role_id') === $role->id ? 'checked' : null }}>{{$role->name}}</option>
                            @endforeach
                        </select>
                        @error('role_id')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1 flex flex-col mb-3">
                        <label for="gender" class="text-md my-2">Gender</label>
                        <select name="gender" id="gender" class="px-6 py-2 border border-blue-300 rounded-md w-auto">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('gender')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1 flex flex-col mb-3">
                        <label for="phone" class="text-md my-2">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" id="phone" class="px-6 py-2 border border-blue-300 rounded-md w-auto" placeholder="Enter your email" required>
                        @error('phone')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-span-1 flex flex-col mb-3">
                        <label for="address" class="text-md my-2">Address</label>
                        <input type="text" name="address" value="{{ old('address') }}" id="address" class="px-6 py-2 border border-blue-300 rounded-md w-auto" placeholder="Enter your address" required>
                        @error('address')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="">
                        <input type="checkbox" name="is_active" id="isActive" value="1" {{ old('is_active') ? 'checked' : '' }}>
                        <label for="isActive">Active</label>
                        @error('is_active')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class=""></div>
                    <button type="submit" class="px-6 py-2 bg-blue-400 text-white w-auto rounded-md">Create</button>
                </form>
            </div>
    </div>
@endsection
