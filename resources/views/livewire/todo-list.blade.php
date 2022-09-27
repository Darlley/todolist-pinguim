<div class="w-6/12 h-6/12 border-4 text-white border-white rounded-sm">

    <div class="p-2 text-lg text-center font-bold bg-gray-900">
        <h1>Pinguim do Laravel | <span class="text-orange-500">Todo</span>App (Darlley)</h1>
    </div>
    <div class="bg-transparent p-4 flex flex-col items-start text-gray-500">
        <p>When you are done. Hit enter...</p>
    </div>
    <div class="bg-gray-900 p-4 flex gap-4 justify-end text-gray-500">
        <div class="relative">
            <label for="filter_all" class="flex items-center gap-1 cursor-pointer">
                
                <span @class([
                    "opacity-20" => $filter !== 'all',
                ])>✅</span>
                
                <input type="radio" name="filter" id="filter_all" wire:model="filter" value="all" class="absolute opacity-0">
                <span>All</span>
            </label>
        </div>

        <div class="relative">
            <label for="filter_pending" class="flex items-center gap-1 cursor-pointer">
                <span @class([
                    "opacity-20" => $filter !== 'pending',
                ])>✅</span>

                <input type="radio" name="filter" id="filter_pending" wire:model="filter" value="pending" class="absolute opacity-0">
                <span>Pending</span>
            </label>
        </div>

        <div class="relative">
            <label for="filter_done" class="flex items-center gap-1 cursor-pointer">
                <span @class([
                    "opacity-20" => $filter !== 'done',
                ])>✅</span>

                <input type="radio" name="filter" id="filter_done" wire:model="filter" value="done" class="absolute opacity-0">
                <span>Done</span>
            </label>
        </div>
    </div>
    <div class="bg-gray-900 flex flex-col gap-4 p-4">

        @foreach ($todos as $item)
        <div class="flex justify-between">
            <x-todo.item :checked="$item->checked">
            {{ $item->title }}
            </x-todo.item>

            <button class="text-gray-500 hover:text-white rounded-full hover:bg-gray-800 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>                  
            </button>
        </div>
        @endforeach

    </div>

</div>
