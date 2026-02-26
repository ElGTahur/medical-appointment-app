<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
    <div class="p-4 border-b border-gray-200 flex justify-between items-center bg-white">
        <input type="text" placeholder="Buscar..." class="border-gray-300 rounded-lg text-sm w-64 focus:ring-blue-500 focus:border-blue-500">
        <div class="flex items-center space-x-2">
            <button class="bg-white border border-gray-300 px-4 py-2 rounded-lg text-sm text-gray-700 hover:bg-gray-50 flex items-center font-medium">
                Columnas <i class="fa-solid fa-chevron-down ms-2 text-[10px]"></i>
            </button>
            <select class="border-gray-300 rounded-lg text-sm text-gray-700 font-medium focus:ring-blue-500">
                <option>10</option>
                <option>25</option>
            </select>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-500">
            <thead class="bg-gray-50 text-[11px] text-gray-400 uppercase font-bold tracking-wider">
                <tr>
                    <th class="px-6 py-4">ID <i class="fa-solid fa-sort ms-1 opacity-50"></i></th>
                    <th class="px-6 py-4">Nombre <i class="fa-solid fa-sort ms-1 opacity-50"></i></th>
                    <th class="px-6 py-4">Fecha <i class="fa-solid fa-sort ms-1 opacity-50"></i></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($roles as $role)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-bold text-gray-700">{{ $role->id }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $role->name }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $role->created_at->format('d/m/Y') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-6 py-8 text-center text-gray-400">No se encontraron roles.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 flex justify-between items-center">
        <p class="text-[12px] text-gray-500 font-medium">Mostrando {{ $roles->count() }} resultados</p>
    </div>
</div>
