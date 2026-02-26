<?php
namespace App\Livewire\Admin;

use Livewire\Component;
use Spatie\Permission\Models\Role; // Importante: Asegúrate de que esta sea tu clase de Roles

class RoleIndex extends Component
{
public function render()
{
    $roles = \Spatie\Permission\Models\Role::all();

    // Cambia 'livewire.admin.role-index' por esto:
    return view('livewire.admin.datatables.role-index', compact('roles'));
}
}
