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

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

//Aqui se definen los roles
    public function run(): void
    {
        //Modulo
        $roles = [
            //Sedders
            'Paciente',
            'Doctores',
            'Recepcionista',
            'Administrador',
            'Super Administrador'
        ];

        //Crear los roles

        foreach ($roles as $role){
            Role::create([
                'name' => $role
            ]);
        }
    }
}
