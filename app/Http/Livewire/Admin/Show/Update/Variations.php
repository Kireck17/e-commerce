<?php

namespace App\Http\Livewire\Admin\Show\Update;

use Livewire\Component;

class Variations extends Component
{
    public $variations;

    protected $rules = [
        'variations.a' => "",
    ];

    public function mount($variations)
    {
        $this->variations = $variations;
        
    }

    public function render()
    {
        return view('livewire.admin.show.update.variations');
    }
}
