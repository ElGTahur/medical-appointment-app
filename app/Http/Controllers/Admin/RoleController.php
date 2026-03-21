<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

// En tu RoleController.php
public function edit(Role $role) // Cambia $id por Role $role
{
    $permissions = Permission::all();
    return view('admin.roles.edit', compact('role', 'permissions'));
}

public function update(Request $request, Role $role)
{
    $request->validate([
        'name' => 'required|unique:roles,name,' . $role->id
    ]);

    // Blindaje de Nombre (Video 34)
    if ($role->id <= 5) {
        $role->update($request->only('permissions'));
    } else {
        $role->update($request->all());
    }

    // ARREGLO AQUÍ: Convertimos los IDs que vienen del form en objetos de Permiso
    // Esto evita el error "There is no permission named '1'"
    if ($request->has('permissions')) {
        $permissions = Permission::whereIn('id', $request->permissions)->get();
        $role->syncPermissions($permissions);
    } else {
        // Si no mandó nada, le quitamos todos los permisos (Video 33)
        $role->syncPermissions([]);
    }

    return redirect()->route('admin.roles.index')
        ->with('swal', [
            'icon' => 'success',
            'title' => '¡Éxito!',
            'text' => 'Rol actualizado correctamente.'
        ]);
}

    public function destroy(Role $role)
    {
        // Blindaje ADA 9: Protección de roles core
        $protectedRoles = ['Admin', 'Doctores', 'Paciente', 'Recepcionista'];

        if (in_array($role->name, $protectedRoles) || $role->id <= 5) {
            return redirect()->route('admin.roles.index')->with('swal', [
                'icon' => 'error',
                'title' => 'Acción Bloqueada',
                'text' => 'Este rol es vital para la Medical Appointment App.'
            ]);
        }

        $role->delete();
        return redirect()->route('admin.roles.index')->with('swal', ['icon' => 'success', 'title' => 'Eliminado']);
    }
}
