<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'Cursos - Criar']);
        Permission::create(['name' => 'Cursos - Ler']);
        Permission::create(['name' => 'Cursos - Atualizar']);
        Permission::create(['name' => 'Cursos - Excluir']);

        Permission::create(['name' => 'Dashboard - Ver']);

        Permission::create(['name' => 'Role - Criar']);
        Permission::create(['name' => 'Role - Ler']);
        Permission::create(['name' => 'Role - Atualizar']);
        Permission::create(['name' => 'Role - Excluir']);

        Permission::create(['name' => 'Users - Ler']);
        Permission::create(['name' => 'Users - Atualizar']);


    }
}

