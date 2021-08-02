<?php

namespace App\Http\Livewire\Admin\User\Delete;

use Livewire\Component;
use App\Models\User as Usuario;
use App\Traits\InteractsWithBanner;


class UserDelete extends Component
{
    use InteractsWithBanner;

    public $is_show;
    public $user;

    public function mount(Usuario $user)
    {
        $this->is_show=false;
        $this->user=$user;
        
    }
    
    public function remove()
    {
        $name=$this->user->name;
        $this->user->delete();
        $this->is_show=false;
        $this->emit('updatePermissions');
        $this->banner($name.' eliminado correctamente');
    }
   

    public function open_modal()
	{
		$this->is_show=true;
        
	}

    public function render()
    {
        return view('livewire.admin.user.delete.user-delete');
    }
}
