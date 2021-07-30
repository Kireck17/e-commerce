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
        //
        $permission = Permission::create(['name' => 'Agregar Cuentas','guard_name' => 'web']);
        $permission = Permission::create(['name' => 'Cambiar Permisos','guard_name' => 'web']);
        $permission = Permission::create(['name' => 'Cambiar Roles','guard_name' => 'web']);
        $permission = Permission::create(['name' => 'Crear Usuarios','guard_name' => 'web']);
        $permission = Permission::create(['name' => 'Eliminar Cuentas','guard_name' => 'web']);
        $permission = Permission::create(['name' => 'Permisos Usuarios','guard_name' => 'web']);
        $permission = Permission::create(['name' => 'Ver Cuentas','guard_name' => 'web']);
        $permission = Permission::create(['name' => 'Ver Usuarios','guard_name' => 'web'
    ]);

        $role=Role::create(['name' => 'Administrador','guard_name' => 'web']);
        $role=Role::create(['name' => 'General','guard_name' => 'web']);
        $role=Role::create(['name' => 'Comprador','guard_name' => 'web']);
        
    }
}
