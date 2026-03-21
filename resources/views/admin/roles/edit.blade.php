<x-app-layout>
    <div class="max-w-5xl mx-auto p-6 bg-white shadow-md rounded-lg mt-6">
        <h1 class="text-2xl font-bold mb-6">Editar Rol: {{ $role->name }}</h1>

        <form action="{{ route('admin.roles.update', $role) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Nombre del Rol:</label>
                <input type="text" name="name" value="{{ old('name', $role->name) }}"
                       {{ $role->id <= 5 ? 'readonly' : '' }}
                       class="border p-2 rounded w-full {{ $role->id <= 5 ? 'bg-gray-100' : '' }}">
            </div>

            <div class="flex items-center justify-between mb-4">
                <input type="text" id="search" placeholder="Filtrar permisos..." class="border p-2 rounded w-2/3">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" id="select-all" class="mr-2">
                    <span class="font-bold text-sm">Seleccionar Todo</span>
                </label>
            </div>

<div id="permissions-container" class="grid grid-cols-1 md:grid-cols-3 gap-4 max-h-96 overflow-y-auto border p-4 rounded mb-6">
    @foreach ($permissions as $permission)
        <div class="flex items-center permission-item">
            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                   {{-- Agregamos este data-name para que el buscador funcione --}}
                   data-name="{{ strtolower($permission->name) }}"
                   class="mr-2 permission-checkbox"
                   {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>
            <span>{{ $permission->name }}</span>
        </div>
    @endforeach
</div>
            <div class="pt-4 border-t flex justify-end space-x-3">
                <a href="{{ route('admin.roles.index') }}" class="bg-gray-200 px-6 py-2 rounded">Cancelar</a>
                <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded shadow hover:bg-indigo-700">
                    Guardar Cambios
                </button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('select-all').addEventListener('change', function() {
            document.querySelectorAll('.permission-checkbox').forEach(cb => cb.checked = this.checked);
        });

        document.getElementById('search').addEventListener('keyup', function() {
            let val = this.value.toLowerCase();
            document.querySelectorAll('.permission-item').forEach(item => {
                item.style.display = item.querySelector('input').dataset.name.includes(val) ? 'flex' : 'none';
            });
        });
    </script>
</x-app-layout>
