<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{
    public $checked;
    public string $filter = 'all';

    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => Todo::query()
                ->when($this->filter == 'done', fn ($q) => $q->where('checked', true))
                ->when($this->filter == 'pending', fn ($q) => $q->where('checked', false))
                ->orderBy('checked')
                ->get()
        ]);
    }
}
