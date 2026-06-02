<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">Daftar Semua User</h3>
                
                <table class="w-full text-left border-collapse border border-gray-300 dark:border-gray-700">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100">
                            <th class="p-3 border border-gray-300 dark:border-gray-700">ID</th>
                            <th class="p-3 border border-gray-300 dark:border-gray-700">Nama</th>
                            <th class="p-3 border border-gray-300 dark:border-gray-700">Email</th>
                            <th class="p-3 border border-gray-300 dark:border-gray-700">No. HP</th>
                            <th class="p-3 border border-gray-300 dark:border-gray-700">Role</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 dark:text-gray-300">
                        @foreach($users as $user)
                        <tr>
                            <td class="p-3 border border-gray-300 dark:border-gray-700">{{ $user->id }}</td>
                            <td class="p-3 border border-gray-300 dark:border-gray-700">{{ $user->name }}</td>
                            <td class="p-3 border border-gray-300 dark:border-gray-700">{{ $user->email }}</td>
                            <td class="p-3 border border-gray-300 dark:border-gray-700">{{ $user->no_hp }}</td>
                            <td class="p-3 border border-gray-300 dark:border-gray-700">
                                <span class="px-2 py-1 rounded text-xs {{ $user->role === 'admin' ? 'bg-red-500 text-white' : 'bg-blue-500 text-white' }}">
                                    {{ $user->role }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>