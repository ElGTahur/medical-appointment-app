<x-app-layout>
    <div class="p-6">
        <form action="{{ route('admin.roles.store') }}" method="POST">
            @csrf

            <input type="text" name="name"
                   class="border p-2 rounded w-full"
                   placeholder="Nombre del rol">

            <button type="submit"
                    class="mt-4 bg-green-600 text-white px-4 py-2 rounded">
                Guardar
            </button>
        </form>
    </div>
</x-app-layout>
