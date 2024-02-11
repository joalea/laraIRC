<div>
    <form wire:submit="postMessage" autocomplete="off">
        <input type="text" autocomplete="off" name="chat" wire:model="message" autofocus class="min-w-full bg-black border-none focus:border-none focus:ring-0">
        <button class="sr-only" type="submit">Send</button>
    </form>
</div>
