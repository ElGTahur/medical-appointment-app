<x-app-layout>
    <x-slot name="header">
        Dashboard Administrativo
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                Hola desde admin
            </div>
        </div>
    </div>
</x-app-layout>
<x-admin-layout>
    <div class="text-center">
        <h1 class="text-3xl font-extrabold text-gray-900">Hola desde admin</h1>
        <p class="mt-4 text-lg text-gray-500">Contenido dinámico renderizado usando $slot.</p>
    </div>
</x-admin-layout>
