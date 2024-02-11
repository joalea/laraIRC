<div wire:poll.500ms id="chat">
    @foreach($chats as $chat)
    <p>[{{date('H:i', strtotime($chat->created_at))}}] &lt;{{$chat->nickname}}&gt; {{$chat->message}}</p>
    @endforeach
</div>

