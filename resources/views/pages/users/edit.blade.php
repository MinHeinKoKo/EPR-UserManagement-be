@extends('layout.dashboard')
@section('title', "ERPPOS | User Edit")
@section('content')
    <div class="w-full p-5 mx-auto">
        <div class="w-full p-5 border-2 border-blue-300 rounded-md">
            <h3 class="w-full text-xl font-semibold tracking-wider text-black">Create New User</h3>
            <form action="{{ route('users.update', $user->id) }}" method="post" class="grid w-full grid-cols-2 gap-4 p-8">
                @csrf
                @method('PUT')
                <div class="flex flex-col col-span-1 mb-3">
                    <label for="name" class="my-2 text-md">Name</label>
                    <input type="text" name="name" id="name" class="w-auto px-6 py-2 border border-blue-300 rounded-md" placeholder="Enter your name" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col col-span-1 mb-3">
                    <label for="username" class="my-2 text-md">UserName</label>
                    <input type="text" name="username" id="username" class="w-auto px-6 py-2 border border-blue-300 rounded-md" value="{{ old('username', $user->username) }}" placeholder="Enter your username" required>
                    @error('username')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col col-span-1 mb-3">
                    <label for="email" class="my-2 text-md">Email</label>
                    <input type="email" name="email" id="email" class="w-auto px-6 py-2 border border-blue-300 rounded-md" value="{{ old('email' , $user->email) }}" placeholder="Enter your email" required>
                    @error('email')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col col-span-1 mb-3">
                    <label for="password" class="my-2 text-md">Password</label>
                    <input type="password" name="password" id="password" class="w-auto px-6 py-2 border border-blue-300 rounded-md" value="{{ old('password') }}" placeholder="Enter your password">
                    @error('password')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col col-span-1 mb-3">
                    <label for="role" class="my-2 text-md">Role</label>
                    <select name="role_id" id="role" class="w-auto px-6 py-2 border border-blue-300 rounded-md">
                        <option value="" disabled>Please Select Role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ old('role_id', $user->role_id) == $role->id ? 'selected' : '' }}>{{$role->name}}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col col-span-1 mb-3">
                    <label for="gender" class="my-2 text-md">Gender</label>
                    <select name="gender" id="gender" class="w-auto px-6 py-2 border border-blue-300 rounded-md">
                        <option value="Male" {{ old('gender', $user->gender) === "Male" ? 'selected' : null }}>Male</option>
                        <option value="Female" {{ old('gender', $user->gender) === "Female" ? 'selected' : null }}>Female</option>
                    </select>
                    @error('gender')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col col-span-1 mb-3">
                    <label for="phone" class="my-2 text-md">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" id="phone" class="w-auto px-6 py-2 border border-blue-300 rounded-md" placeholder="Enter your email" required>
                    @error('phone')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col col-span-1 mb-3">
                    <label for="address" class="my-2 text-md">Address</label>
                    <input type="text" name="address" value="{{ old('address', $user->address) }}" id="address" class="w-auto px-6 py-2 border border-blue-300 rounded-md" placeholder="Enter your address" required>
                    @error('address')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="">
                    <input type="checkbox" name="is_active" id="isActive" value="1" {{ old('is_active', $user->is_active) ? 'checked' : '' }}>
                    <label for="isActive">Active</label>
                    @error('is_active')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class=""></div>
                <button type="submit" class="w-auto px-6 py-2 text-white bg-blue-400 rounded-md">Update</button>
            </form>
        </div>
    </div>
@endsection
