<?php

namespace App\Http\Livewire\Admin\Tutorials\Show;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;
use App\Traits\InteractsWithBanner;


class ShowContent extends Component
{
    use InteractsWithBanner;
    use WithPagination;
    public $blo;
    public $search;
    public $porpagina=5;
    
    protected $listeners=['recargar'=>'render'];

    public function mount()
    {
        $this->search="";
        
    }
    
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedPorpagina()
    {
        $this->resetPage();
    }

    
    public function render()
    {
        return view('livewire.admin.tutorials.show.show-content',[
            'blog'=> Blog::where('title','LIKE',"%{$this->search}%")->orderBy('title','ASC')->paginate($this->porpagina),
        ])->layout("layouts.admin");
    }
}
