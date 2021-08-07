<?php

namespace App\Http\Livewire\Admin\User\Edit;


use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Traits\InteractsWithBanner;

class UsersEdit extends Component
{
    use InteractsWithBanner;

    public $show;
    public $user;
    public $permissions;
    public $roles;
    public $role;
    public $user_permissions;

    protected $rules=[
        'role' => "required|max:255"
    ];
    protected $validationAttributes =[
        'role' => 'rol'
    ];

    public function mount(User $user)
    {
        $this->user=$user;
        $this->show=false;
        $this->permissions=Permission::all();
        $this->roles=Role::all();
        $this->role=$this->get_role();
        $this->user_permissions=[];
        $this->validate_permission();
        $this->emit('updatePermissions');
    }
    public function get_role()
    {
        if ($this->user->getRoleNames()->count()) {
            return $this->user->getRoleNames()->first();
        }else{
            return "";
        }
    }
    public function show_modal()
    {
        $this->show=true;
        //dd($this->user);
    }


    public function validate_permission()
    {
        foreach ($this->permissions as $key => $permission) {
            if ($this->user->hasPermissionTo($permission)) {
                $this->user_permissions[$key]=$permission->name;
            }
        }
    }
    public function save_permission()
    {
        $this->validate();
        $this->user->syncRoles([$this->role]);
        $this->show=false;
        $this->emit('updatePermissions');
        $this->user->syncPermissions($this->user_permissions);
        $this->banner('Permisos actualizados correctamente');
        //dd($this->user_permissions);
        
    }
    public function render()
    {
        return view('livewire.admin.user.edit.users-edit');
    }
}
