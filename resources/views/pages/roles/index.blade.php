@extends('layout.dashboard')
@section('title', "ERPPOS | Roles")
@section('content')
    <div class="p-6">
        <div class="mb-6">
            @can('create', Auth::user())
                <a href="{{ route('roles.create') }}" class="btn btn-primary">Create</a>
            @endcan
        </div>
        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <thead>
                <tr class="border-b-2">
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Permissions</th>
                    <th class="px-4 py-2 text-left">Actions</th>
                    <th class="px-4 py-2 text-left">Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $item)
                    <tr class="border-b-2">
                        <td class="px-4 py-2">{{ $item->id }}</td>
                        <td class="px-4 py-2">{{ $item->name }}</td>
                        <td class="px-4 py-2">
                            <div class="flex flex-wrap gap-2">
                                @foreach($item->permissions as $p)
                                    <span class="px-2 rounded-full bg-purple-100 text-sm text-purple-700">
                                        {{ $p->feature->name }} - {{ $p->name }}
                                    </span>
                                @endforeach
                            </div>
                        </td>
                        <td class="px-4 py-2">
                            <div class="flex gap-2">
                                @can('update', $item)
                                    <a href="{{ route('roles.edit' , $item->id) }}" class="text-green-400">Edit</a>
                                @endcan
                                @can('delete', $item)
                                    <form method="post" action="{{ route('roles.destroy', $item->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-red-500">Delete</button>
                                    </form>
                                    @endcan
                            </div>
                        </td>
                        <td class="px-4 py-2 text-sm">{{ $item->created_at->format('Y m d H:i:s') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-6">
            {{ $roles->onEachSide(1)->links() }}
        </div>
    </div>
@endsection
