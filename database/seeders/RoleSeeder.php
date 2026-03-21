<?php
        /*Notas: Modulo de roles
        Util para otros modulos (Doctores, pacientes)
        Modulos: Son los contenedores donde se tendran los datos (Permitiendote editar base de datos)
        apartir de codigo PHP
        Sedders: Son los datos que llenan los modulos
        */
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Da permisos, dando la capacidad de brindar permisos especificos a ciertos usuarios
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

//Aqui se definen los roles
    public function run()
    {
        // Limpiar caché
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'admin.home',
            'admin.users.index',
            'admin.users.edit',
            'admin.roles.index',
            'admin.roles.edit',
            'admin.roles.create',
            'admin.roles.destroy',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $admin = Role::firstOrCreate(['name' => 'Admin']);
        $admin->syncPermissions(Permission::all());

        Role::firstOrCreate(['name' => 'Doctores']);
        Role::firstOrCreate(['name' => 'Paciente']);
        Role::firstOrCreate(['name' => 'Recepcionista']);
    }
}
