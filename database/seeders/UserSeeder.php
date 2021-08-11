<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user=User::create([
            'name' => 'Angel',
            'email' => 'angel@gmail.com',
            'password' => Hash::make('prueba123')

        ])->assignRole('Administrador');
        $user->givePermissionTo('Agregar Cuentas','Cambiar Permisos','Cambiar Roles',
        'Crear Usuarios','Eliminar Cuentas','Permisos Usuarios','Ver Cuentas','Ver Usuarios',
        'Ver Inventario','Agregar Inventario','Editar Inventario','Eliminar Inventario');
        
        $user=User::create([
            'name' => 'Erick',
            'email' => 'kireck17@gmail.com',
            'password' => Hash::make('Ewaldope123')

        ])->assignRole('Administrador');
        $user->givePermissionTo('Agregar Cuentas','Cambiar Permisos','Cambiar Roles',
        'Crear Usuarios','Eliminar Cuentas','Permisos Usuarios','Ver Cuentas','Ver Usuarios',
        'Ver Inventario','Agregar Inventario','Editar Inventario','Eliminar Inventario');
        


        $user=User::create([
            'name' => 'Michelle',
            'email' => 'michelmiranda3786@gmail.com',
            'password' => Hash::make('CoreanosSexys123')

        ])->assignRole('Administrador');
        $user->givePermissionTo('Agregar Cuentas','Cambiar Permisos','Cambiar Roles',
        'Crear Usuarios','Eliminar Cuentas','Permisos Usuarios','Ver Cuentas','Ver Usuarios',
        'Ver Inventario','Agregar Inventario','Editar Inventario','Eliminar Inventario');
        

        
        $user=User::create([
            'name' => 'Orlando',
            'email' => 'gouiterra@gmail.com',
            'password' => Hash::make('WeTerra123')

        ])->assignRole('Administrador');
        $user->givePermissionTo('Agregar Cuentas','Cambiar Permisos','Cambiar Roles',
        'Crear Usuarios','Eliminar Cuentas','Permisos Usuarios','Ver Cuentas','Ver Usuarios',
        'Ver Inventario','Agregar Inventario','Editar Inventario','Eliminar Inventario');
    }
}
