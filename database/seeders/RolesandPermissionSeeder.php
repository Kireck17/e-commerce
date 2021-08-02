<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesandPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permisos de usuarios
        $permission = Permission::create(['name' => 'Agregar Cuentas']);
        $permission = Permission::create(['name' => 'Cambiar Permisos']);
        $permission = Permission::create(['name' => 'Cambiar Roles']);
        $permission = Permission::create(['name' => 'Crear Usuarios']);
        $permission = Permission::create(['name' => 'Eliminar Cuentas']);
        $permission = Permission::create(['name' => 'Permisos Usuarios']);
        $permission = Permission::create(['name' => 'Ver Cuentas']);
        $permission = Permission::create(['name' => 'Ver Usuarios'
    ]);

        //Roles que puede tener un Usuario
        $role=Role::create(['name' => 'Administrador']);
        $role=Role::create(['name' => 'General']);
        $role=Role::create(['name' => 'Comprador']);

    }
}
