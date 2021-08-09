<?php

namespace App\Http\Livewire\Admin\Tutorials\Forms;

use Livewire\Component;
use App\Models\BlogContent;
class SubBlog extends Component
{
    public $contentblog;
    public $blogcon;
    

    protected $rules = [
        
        'stepblog.*.title' => 'required',
        'contentblog.*.image' => 'required',
        'contentblog.*.content' => 'required'
    ];
    public function mount()
    {
        $this->contentblog=[];
        
    }
    public function add_contentblog()
    {
        
        $this->contentblog[]="";
    }
    public function render()
    {
        return view('livewire.admin.tutorials.forms.sub-blog');
    }
}
