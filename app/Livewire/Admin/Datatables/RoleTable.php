<?php

namespace App\Livewire\Admin\Datatables;

use Livewire\Component;
use Spatie\Permission\Models\Role;
// Importante para que funcione el método columns
use Rappasoft\LaravelLivewireTables\Views\Column;

class RoleTable extends Component
{
    public function columns(): array
    {
        return [
            Column::make("Id", "id")->sortable(),
            Column::make("Nombre", "name")->sortable(),
            Column::make("Fecha", "created_at")
                ->sortable()
                ->format(fn($value) => $value->format('d/m/Y')),
            Column::make("Acciones")
                ->label(fn($row) => view('admin.roles.actions', ['role' => $row])),
        ];
    }

    public function render()
    {
        // Consultamos todos los registros para mandarlos al @foreach
        $roles = Role::all();

        return view('livewire.admin.datatables.role-table', [
            'roles' => $roles
        ]);
    }
}
