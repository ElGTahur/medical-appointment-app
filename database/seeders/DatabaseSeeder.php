<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Llamar a los seeders creados
        $this->call(RoleSeeder::class);

        //Crea el usuario por cada vez que se ejecuten las migraciones
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            //bcrypt Si tienes algo asi: "Gael" la base de datos la guardara como caracteres aleatorios
            'password' => bcrypt('12345')
        ]);
    }
}
