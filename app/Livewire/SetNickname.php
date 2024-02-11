<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class SetNickname extends Component
{
    public $nickname;

    public function render(Request $request)
    {   
        return view('livewire.set-nickname');
    }

    public function save() {
        session(['nickname' => $this->nickname]);
        return redirect(session('requestedChannelPath', '/channel/enterchannelnamehere'));
    }
}
