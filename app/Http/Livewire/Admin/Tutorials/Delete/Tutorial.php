<?php

namespace App\Http\Livewire\Admin\Tutorials\Delete;

use Livewire\Component;
use App\Models\Blog as Tuto;
use App\Traits\InteractsWithBanner;

class Tutorial extends Component
{
    use InteractsWithBanner;

    public $is_show;
    public $blog;

    public function mount(Tuto $blog)
    {
        $this->is_show=false;
        $this->blog=$blog;
        
    }
    
    public function remove()
    {
        $title=$this->blog->title;
        $this->blog->delete();
        $this->is_show=false;
        $this->emit('recargar');
        $this->banner($title.' eliminado correctamente');
    }
   

    public function open_modal()
	{
		$this->is_show=true;
        
	}

    public function render()
    {
        return view('livewire.admin.tutorials.delete.tutorial');
    }
}
