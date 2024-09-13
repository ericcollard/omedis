<?php

namespace App\Livewire;

use App\Events\IngestMessageEvent;
use Livewire\Component;

class SenderComponent extends Component
{
    public $message;



    public function trigger()
    {
        IngestMessageEvent::dispatch($this->message);
    }

    public function render()
    {
        return view('livewire.sender-component');
    }
}
