<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use App\Traits\InteractsWithBanner;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserCreate extends Component
{
    use InteractsWithBanner;

    public $permissions;
    public $roles;
    public $name,$email,$role;
    public $user_permissions;

    protected $rules=[
        'name' => 'required',
        'email' => 'required|unique:users,email',
        'role' => 'required',
    ];

    protected $validationAttributes = [
        'role' => 'rol'
    ];


    public function mount()
    {
        $this->permissions=Permission::all();
        $this->roles=Role::where('name','<>','Administrador')->get();
        $this->user_permissions=[];
    }


    public function generate_password($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    public function save_user()
    {
        $this->validate();
        if (count($this->user_permissions)) {
            $user=User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->generate_password()),
            ]);
            $this->role=ucfirst(strtolower($this->role));
            $role=Role::where('name',$this->role)->get();
            if ($role->count() == 0) {
                Role::create(['name' => $this->role,'guard_name' => 'web']);
            }
            $user->assignRole($this->role);
            $user->syncPermissions($this->user_permissions);
            $this->reset(['name','email','role','user_permissions']);
            $this->banner('Usuario creado correctamente');
        }else{
            $this->banner('Debe seleccionar permisos para el usuario','warning');
        }
    }


    public function render()
    {
        return view('livewire.admin.user.user-create')->layout("layouts.admin");
    }
}
