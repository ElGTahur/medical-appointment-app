<x-app-layout>
    <x-slot name="header">
        <nav class="flex text-sm text-gray-500 mb-2">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="#" class="hover:text-blue-600">Dashboard</a>
                    <span class="mx-2">/</span>
                </li>
                <li class="text-gray-800 font-medium">Roles</li>
            </ol>
        </nav>

        <h2 class="font-bold text-2xl text-gray-900 leading-tight">
            Roles
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                @livewire('admin.roles-table')
            </div>
        </div>
    </div>
</x-app-layout>
