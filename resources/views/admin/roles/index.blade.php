<x-admin-layout title="Roles" :breadcrumbs="[
    ['name' => 'Dashboard', 'route' => route('admin.dashboard')],
    ['name' => 'Roles y permisos']
]">

    <div class="max-w-7xl mx-auto py-8 px-4">
        @livewire('admin.datatables.role-index')
    </div>

</x-admin-layout>
