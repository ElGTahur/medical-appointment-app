<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-900 leading-tight">
            Roles
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg p-6">

                <div class="mb-4">
                    <a href="{{ route('admin.roles.create') }}"
                       class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                        + Crear Rol
                    </a>
                </div>

<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-center">ID</th>
            <th class="px-6 py-3 text-center">Nombre</th>
            <th class="px-6 py-3 text-center">Fecha de creación</th>
            <th class="px-6 py-3 text-center">Acciones</th>
        </tr>
    </thead>

    <tbody class="divide-y divide-gray-100">
        @foreach($roles as $role)
        <tr>
            <td class="px-6 py-4 text-center">{{ $role->id }}</td>
            <td class="px-6 py-4 text-center">{{ $role->name }}</td>

            {{-- Fecha formateada --}}
            <td class="px-6 py-4 text-center">
               {{ optional($role->created_at)->format('d/m/Y') }}
            </td>

            <td class="px-6 py-4 text-center">

<a href="{{ route('admin.roles.edit', $role->id) }}"
   class="text-blue-600 hover:text-blue-900 mr-3">
    ✏️
</a>

                <button onclick="confirmDelete({{ $role->id }})"
                        class="text-red-600 hover:text-red-900">
                    🗑️
                </button>

<form id="delete-form-{{ $role->id }}"
      action="{{ route('admin.roles.destroy', $role->id) }}"
      method="POST"
      style="display:none;">
    @csrf
    @method('DELETE')
</form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

            </div>
        </div>
    </div>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: '¿Eliminar rol?',
                text: "No podrás revertir esto",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            })
        }
    </script>

</x-app-layout>
