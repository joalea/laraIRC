<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Chathistory;

class ChatInput extends Component
{
    public $message = '';
    public $channel;

    public function render()
    {
        return view('livewire.chat-input');
    }

    public function postMessage() {
        if(str_starts_with($this->message, '/')) {
            $this->message = 'slapped';
        }
        
        Chathistory::create([
            'nickname' => session('nickname', 'balle'),
            'message' => $this->message,
            'channel' => $this->channel,
        ]);

        $this->reset('message');

    }
}
