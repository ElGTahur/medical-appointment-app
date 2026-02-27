<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //Indice o la parte principal, se vera el inicio y mostrara los roles


public function index()
{
    $roles = Role::all();

    return view('admin.roles.index', compact('roles'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|unique:roles,name'
    ]);

    Role::create([
        'name' => $request->name,
        'guard_name' => 'web'
    ]);

    return redirect()->route('admin.roles.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

public function edit($id)
{
    $role = Role::findOrFail($id);
    return view('admin.roles.edit', compact('role'));
}


    /**
     * Update the specified resource in storage.
     */

public function update(Request $request, $id)
{
    $role = Role::findOrFail($id);

    $request->validate([
        'name' => 'required|unique:roles,name,' . $role->id
    ]);

    $role->update(['name' => $request->name]);

    return redirect()->route('admin.roles.index');
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy($id)
{
    $role = \Spatie\Permission\Models\Role::findOrFail($id);

    // Quitar permisos asociados
    $role->permissions()->detach();

    // Quitar usuarios asociados
    $role->users()->detach();

    $role->delete();

    return redirect()->route('admin.roles.index');
}
}
