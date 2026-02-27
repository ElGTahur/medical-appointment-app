<div class="flex items-center justify-center space-x-3">

    <a href="{{ route('admin.roles.edit', $role->id) }}"
       class="text-blue-600 hover:text-blue-900 transition duration-150">
        <i class="fa-solid fa-pen-to-square"></i>
    </a>

    <form action="{{ route('admin.roles.destroy', $role->id) }}"
          method="POST"
          class="inline">
        @csrf
        @method('DELETE')

        <button type="submit"
                class="text-red-600 hover:text-red-900 transition duration-150"
                onclick="return confirm(`¿Eliminar el rol {{ $role->name }}?`)">
            <i class="fa-solid fa-trash"></i>
        </button>
    </form>

</div>
