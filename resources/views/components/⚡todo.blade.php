<?php

use Livewire\Component;

new class extends Component
{
    public $todo = '';

    public $todos = [
        'Take out trash',
        'Do dishes',
    ];

    public function add()
    {
        $this->todos[] = $this->todo;

        // $this->todo = '';
        $this->reset('todo');
    }

    public function updated($property, $value)
    {
        $this->$property = strtolower($value);
    }
};
?>

<div>
    
    <form wire:submit="add">
        <input type="text" wire:model="todo" class="border">

        <span>Current todo: {{ $todo }}</span>

        <button type="submit" class="border">Add</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
         <li>{{ $todo }}</li>
        @endforeach
    </ul>

</div>