<?php

namespace App\Livewire;

use App\Models\Parameter;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class VersionComponent extends Component
{
    public $version = 'nc.';
    public function render()
    {
        $versionParameter = Parameter::where('name','version')->first();
        if ($versionParameter)
            $this->version = $versionParameter->value;

        return view('livewire.version-component');
    }
}
