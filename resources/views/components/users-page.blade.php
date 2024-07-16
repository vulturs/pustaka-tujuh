<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-users>
        @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row"
                    class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $user->id_user }}
                </th>
                <td class="px-6 py-4">
                    {{ $user->nama }}
                </td>
                <td class="px-6 py-4">
                    {{ $user->username }}
                </td>
                <td class="px-6 text-center py-4">
                    {{ $user->created_at->format('d M Y') }}
                </td>
                <td class="text-center rounded-md shadow-sm" role="group">
                    <a href=""
                        class="text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-s-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">
                        Edit
                    </a>
                    <a href=""
                        class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-e-lg text-sm px-5 py-2.5 text-center mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                        Delete
                    </a>
                </td>
            </tr>
            <!-- Other table rows omitted for brevity -->
        @endforeach
    </x-users>
</x-layout>
