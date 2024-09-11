<?php

namespace App\Livewire;

use Livewire\Component;

class BreadcrumbComponent extends Component
{
    public $items;

    public function render()
    {
        return view('livewire.breadcrumb-component');
    }
}
