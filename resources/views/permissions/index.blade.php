<x-permission-layout>

    <div class="py-12">

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative h-16 w-full ...">
                <div class="absolute top-0 right-0 h-16 w-64 ...">
                    <a href="{{ route('permissions.create') }}" class="relative inline-flex items-center justify-center w-full h-12 mb-2 overflow-hidden text-lg font-bold text-white bg-gray-500 group rounded-2xl">
                        Create Permission
                        <div class="absolute inset-0 w-full h-full transition-all duration-300 scale-0 group-hover:scale-100 group-hover:bg-white/30 rounded-2xl"></div>
                    </a>
                </div>
            </div>

            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <table class="w-full table-auto min-w-max">
                        <thead>
                            <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200">
                                <th class="px-6 py-3 text-left">Permission Number</th>
                                <th class="px-6 py-3 text-left">Permission</th>
                                <th class="px-6 py-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm font-light text-gray-600">
                            @foreach ($permissions as $permission)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="px-6 py-3 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="font-medium">{{ $permission->id }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-left">
                                        <div class="flex items-center">
                                            <span>{{ $permission->name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 text-center">
                                        <div class="flex justify-center item-center">
                                            <a href="#" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                            <a href="#" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-2">{{ $permissions->links() }}</div>
                </div>
            </div>
        </div>
    </d
</x-permission-layout>
