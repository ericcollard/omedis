<?php

namespace App\Livewire;

use Livewire\Component;

class IngestReceiverComponent extends Component
{
    protected $listeners = ['echo:public-events,IngestMessageEvent' => 'responseToEvent'];

    public $message;

    public function render()
    {
        return view('livewire.ingest-receiver-component');
    }

    public function responseToEvent($event)
    {
        $this->message = $event['message'];
    }
}
