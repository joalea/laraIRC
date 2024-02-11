<?php

namespace App\Livewire;

use Livewire\Component;

class Chat extends Component
{
    public $channel;

    public function mount($channel){
        $this->channel = $channel;
    }

    public function render()
    {
        return view('livewire.chat');
    }
}
