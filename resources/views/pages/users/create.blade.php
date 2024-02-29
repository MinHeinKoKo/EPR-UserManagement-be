@extends('layout.dashboard')
@section('title', "ERPPOS | User Create")
@section('content')
    <div class="w-full p-5 mx-auto">
            <div class="w-full p-5 border-2 border-blue-300 rounded-md">
                <h3 class="w-full text-xl font-semibold tracking-wider text-black">Create New User</h3>
                <form action="{{ route('users.store') }}" method="post" class="grid w-full grid-cols-2 gap-4 p-8">
                    @csrf
                    <div class="flex flex-col col-span-1 mb-3">
                        <label for="name" class="my-2 text-md">Name</label>
                        <input type="text" name="name" id="name" class="w-auto px-6 py-2 border border-blue-300 rounded-md" placeholder="Enter your name" value="{{ old('name') }}" required>
                        @error('name')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col col-span-1 mb-3">
                        <label for="username" class="my-2 text-md">UserName</label>
                        <input type="text" name="username" id="username" class="w-auto px-6 py-2 border border-blue-300 rounded-md" value="{{ old('username') }}" placeholder="Enter your username" required>
                        @error('username')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col col-span-1 mb-3">
                        <label for="email" class="my-2 text-md">Email</label>
                        <input type="email" name="email" id="email" class="w-auto px-6 py-2 border border-blue-300 rounded-md" value="{{ old('email') }}" placeholder="Enter your email" required>
                        @error('email')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col col-span-1 mb-3">
                        <label for="password" class="my-2 text-md">Password</label>
                        <input type="password" name="password" id="password" class="w-auto px-6 py-2 border border-blue-300 rounded-md" value="{{ old('password') }}" placeholder="Enter your password" required>
                        @error('password')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col col-span-1 mb-3">
                        <label for="role" class="my-2 text-md">Role</label>
                        <select name="role_id" id="role" class="w-auto px-6 py-2 border border-blue-300 rounded-md">
                            <option value="" disabled>Please Select Role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" {{ old('role_id') === $role->id ? 'selected' : null }}>{{$role->name}}</option>
                            @endforeach
                        </select>
                        @error('role_id')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col col-span-1 mb-3">
                        <label for="gender" class="my-2 text-md">Gender</label>
                        <select name="gender" id="gender" class="w-auto px-6 py-2 border border-blue-300 rounded-md">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('gender')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col col-span-1 mb-3">
                        <label for="phone" class="my-2 text-md">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" id="phone" class="w-auto px-6 py-2 border border-blue-300 rounded-md" placeholder="Enter your phone number" required>
                        @error('phone')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col col-span-1 mb-3">
                        <label for="address" class="my-2 text-md">Address</label>
                        <input type="text" name="address" value="{{ old('address') }}" id="address" class="w-auto px-6 py-2 border border-blue-300 rounded-md" placeholder="Enter your address" required>
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
                    <button type="submit" class="w-auto px-6 py-2 text-white bg-blue-400 rounded-md">Create</button>
                </form>
            </div>
    </div>
@endsection
