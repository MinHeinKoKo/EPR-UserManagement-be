<div class="inline-flex rounded-lg border border-gray-100 bg-blue-100 p-1">

    <a
    href="{{ route('profile') }}"
        class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm {{ Request::is('profile') ? 'bg-white text-blue-500' : 'text-gray-500 hover:text-gray-700' }} focus:relative">
        Orders
    </a>

    <a
    href="{{ route('profile.edit') }}"
        class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm {{ Request::is('profile-edit') ? 'bg-white text-blue-500' : 'text-gray-500 hover:text-gray-700' }} focus:relative">
        Edit
    </a>

</div>
