@extends('layout.dashboard')
@section('title', "ERPPOS | Roles")
@section('content')
    <div class="flex gap-6 flex-col p-6">
        <a href="{{ route('roles.create') }}" class="bg-blue-400 text-black px-6 py-2 capitalize w-fit rounded-md">Create</a>
        <div class="overflow-x-auto w-full p-5 rounded-t-lg">
            <table class="divide-y-2 w-full divide-gray-200 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right">
                <tr>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">#</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Permissions</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Control</th>
                    <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">CreatedAt</th>

                </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                @foreach($roles as $item)
                    <tr>
                        <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700">{{ $item->id }}</td>
                        <td class="whitespace-nowrap text-center px-4 py-2 font-medium text-gray-900">{{ $item->name }}</td>
                        <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700 text-wrap">
                            @foreach($item->permissions as $p)
                                <span class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-sm text-purple-700">
                                  {{ $p->name }}
                                </span>
                            @endforeach
                        </td>
                        <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700 flex gap-2 justify-center">
                            <a href="{{ route('roles.edit' , $item->id) }}" class="text-green-400">
                                Edit
                            </a>
                            /
                            <form method="post" action="{{ route('roles.destroy', $item->id) }}" class="relative">
                                @csrf
                                @method('delete')
                                <button class="text-red-500">Delete</button>
                            </form>
                        </td>
                        <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700">{{ \Illuminate\Support\Carbon::parse($item->created_at)->format('Y m d H:i:s') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="">
            {{ $roles->onEachSide(1)->links() }}
        </div>
    </div>
@endsection
