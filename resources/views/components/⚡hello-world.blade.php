<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <h1>The current time is {{ time() }}</h1>
    <button wire:click="$refresh">Refresh</button>
</div>