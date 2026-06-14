<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')]
#[Title('Todo')]
class extends Component
{
};
?>

<div class="min-h-screen bg-slate-950 text-slate-100">
    <div class="mx-auto max-w-4xl px-6 py-16 lg:px-8">
        <p class="text-sm font-semibold uppercase tracking-[0.35em] text-cyan-300">
            /todo
        </p>

        <h1 class="mt-4 text-4xl font-semibold tracking-tight text-white sm:text-5xl">
            Todo component
        </h1>

        <p class="mt-6 text-lg leading-8 text-slate-300">
            This page uses the original todo state and submit behavior without changing its logic.
        </p>

        <div class="mt-10 rounded-3xl border border-white/10 bg-white/5 p-6 shadow-2xl shadow-cyan-950/20 backdrop-blur">
            <livewire:todo />
        </div>
    </div>
</div>
