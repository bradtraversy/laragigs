<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#Layout[layout('components.home')]
class Page extends Component
{

    public function render()
    {
        return view('livewire.page');
    }
}
