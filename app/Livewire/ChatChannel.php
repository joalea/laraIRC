<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Chathistory;

class ChatChannel extends Component
{
    public $channel;

    public function mount($channel) {
        $this->channel = $channel;
    }


    public function render()
    {
        $chats = Chathistory::where('channel', $this->channel)
        ->orderBy('created_at')
        ->get();

        return view('livewire.chat-channel', compact('chats'));

    }

    public function rendered() {
        $this->dispatch('scroll');
    }

}
