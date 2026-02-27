<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center text-gray-500 text-sm mb-2">
            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
            </svg>
            <a href="#" class="hover:text-blue-500">Inicio</a>
            <span class="mx-2 text-gray-400">/</span>
            <a href="#" class="hover:text-blue-500">Admin</a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-800 font-medium">Dashboard</span>
        </div>

        <h2 class="font-extrabold text-2xl text-gray-900 leading-tight">
            {{ __('Dashboard Administrativo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 border border-gray-100">
                <p class="text-xl text-gray-800 font-semibold mb-3">Hola desde admin</p>
                <p class="text-gray-600">Este es tu panel de control principal donde podrás gestionar todo.</p>
            </div>
        </div>
    </div>
</x-app-layout>
