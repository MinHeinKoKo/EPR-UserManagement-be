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
                            <td class="whitespace-nowrap text-center px-4 py-2 text-gray-700">{{ \Illuminate\Support\Carbon::parse($user->created_at)->format('Y m d H:i:s') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            @if($users->links())
                <div class="rounded-b-lg border-t border-gray-200 px-4 py-2">
                    <ol class="flex justify-end gap-1 text-xs font-medium">
                        <li>
                            <a
                                href="#"
                                class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
                            >
                                <span class="sr-only">Prev Page</span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-3 w-3"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </a>
                        </li>

                        @foreach($users->links() as $link)
                            <li>
                                <a
                                    href="#"
                                    class="block size-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
                                >
                                    1
                                </a>
                            </li>
                        @endforeach

                        <li>
                            <a
                                href="#"
                                class="inline-flex size-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
                            >
                                <span class="sr-only">Next Page</span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-3 w-3"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </a>
                        </li>
                    </ol>
                </div>
            @else
                Nope
            @endif
    </div>
@endsection
