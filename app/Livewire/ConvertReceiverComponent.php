<?php

namespace App\Livewire;

use Livewire\Component;

class ConvertReceiverComponent extends Component
{
    protected $listeners = ['echo:public-events,ConvertMessageEvent' => 'responseToEvent'];

    public $message;

    public function render()
    {
        return view('livewire.convert-receiver-component');
    }

    public function responseToEvent($event)
    {
        $this->message = $event['message'];
    }
}
