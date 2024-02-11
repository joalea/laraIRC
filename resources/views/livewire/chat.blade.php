<div>
    <div style="height: 92vh;" id="chat" class="min-w-screen bg-black text-green-500 overflow-auto">
    <livewire:chat-channel :channel="$channel"></livewire:chat-channel>
    </div>

    <div style="height: 8vh;" class="min-w-screen bg-black text-green-500 border-t-2 border-gray-700">
    <livewire:chat-input :channel="$channel"></livewire:chat-input>
    </div>

</div>
