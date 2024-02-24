@extends('layout.dashboard')
@section('title', "ERPPOS | User's Lists")
@section('content')
    <div class="w-full p-5 h-screen ">

            <div class="overflow-x-auto w-full p-5 rounded-t-lg">
                <table class="divide-y-2 w-full divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">#</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Role</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Phone</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Address</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Control</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">CreatedAt</th>

                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                    @foreach($users as $user)
                        <tr>
                            <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700">{{ $user->id }}</td>
                            <td class="whitespace-nowrap text-center px-4 py-2 font-medium text-gray-900">{{ $user->name }}</td>
                            <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700">{{ $user->email }}</td>
                            <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700">{{ $user->role->name }}</td>
                            <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700">{{ $user->phone }}</td>
                            <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700">{{ $user->address }}</td>
                            <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700">
                                @can('update', Auth::user())
                                    <a href="{{ route('users.edit' , $user->id) }}" class="text-green-400">
                                        Edit
                                    </a>
                                @endcan
                                @can('delete' ,Auth::user())
                                    <form method="post" action="{{ route('users.destroy', $user->id) }}" class="relative">
                                        @csrf
                                        @method('delete')
                                        <button class="text-red-500">Delete</button>
                                    </form>
                                @endcan
                            </td>
                            <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700">{{ \Illuminate\Support\Carbon::parse($user->created_at)->format('Y m d H:i:s') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $users->onEachSide(1)->links() }}
    </div>
@endsection
