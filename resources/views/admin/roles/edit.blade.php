<x-app-layout>
    <div class="p-6">
        <form action="{{ route('admin.roles.update', $role) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" name="name"
                   value="{{ $role->name }}"
                   class="border p-2 rounded w-full">

            <button type="submit"
                    class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">
                Actualizar
            </button>
        </form>
    </div>
</x-app-layout>
