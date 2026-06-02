<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("You're logged in!") }}

                <div class="mt-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg max-w-md">
                    <h3 class="font-bold text-lg mb-2">Informasi Akun Anda:</h3>
                    <p><strong>Nama:</strong> {{ Auth::user()->name }}</p> 
                    <p><strong>Email:</strong> {{ Auth::user()->email }}</p> 
                    <p><strong>No. HP:</strong> {{ Auth::user()->no_hp }}</p> </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
