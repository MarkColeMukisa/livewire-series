<?php

use Livewire\Component;

new class extends Component
{
    public $count = 1;

    public function incremate($by)
    {
        $this->count = $this->count + $by;
    }

    public function decremate($by)
    {
        $this->count = $this->count - $by;
    }
};
?>

<div>
    Count:{{ $count }}
    <button wire:click="incremate(2)">+</button>
    <button wire:click="decremate(2)">-</button>
</div>