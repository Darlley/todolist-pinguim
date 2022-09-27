<label @class([
    "flex items-center gap-2 relative" => true,
    "opacity-60" => $checked
])>
    <div class="rounded-full w-8 h-8 flex items-center justify-center border-2 border-violet-500 {{ $checked ? 'bg-orange-400 opacity-30' : 'bg-gray-800' }}">
        @if($checked)
        <span>✓</span>
        @endif
    </div>
    <input type="checkbox" name="" id="" class="opacity-0 absolute" />
    <span @class([
        'line-through' => $checked
    ])>{{ $slot }}</span>
</label>