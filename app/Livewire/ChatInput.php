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
        
        Chathistory::create([
            'nickname' => session('nickname', 'padawan'),
            'message' => $this->message,
            'channel' => $this->channel,
        ]);

        $this->reset('message');

    }
}
