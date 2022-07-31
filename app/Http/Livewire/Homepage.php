<?php

namespace App\Http\Livewire;

use Artesaos\SEOTools\Facades\SEOTools;
use Livewire\Component;

class Homepage extends Component
{
    public function mount(){
        SEOTools::setTitle('Flezhub');
    }
    public function render()
    {
        return view('livewire.homepage');
    }
}
