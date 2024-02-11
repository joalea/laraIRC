<div>
    <div class="min-w-screen bg-black text-green-500 h-screen">

    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form wire:submit="save" class="space-y-6" autocomplete="off">
      <div>
        <label for="nickname" class="block text-sm font-medium leading-6 text-white">Nickname</label>
        <div class="mt-2">
          <input wire:model="nickname" id="nickname" name="nick" type="text" autocomplete="off" required class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-green-500 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-green-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Start</button>
      </div>
    </form>

  </div>
</div>

    </div>
</div>
