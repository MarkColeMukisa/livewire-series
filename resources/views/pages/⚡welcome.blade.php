<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')]
#[Title('Livewire Basics')]
class extends Component
{
};
?>

<div class="min-h-screen bg-slate-950 text-slate-100">
    <div class="mx-auto flex min-h-screen max-w-5xl items-center px-6 py-16 lg:px-8">
        <div class="w-full">
            <p class="text-sm font-semibold uppercase tracking-[0.35em] text-cyan-300">
                Livewire series
            </p>

            <h1 class="mt-4 text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                Pick a component page
            </h1>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-300">
                Each route below renders one of the Livewire components you already created, with the layout coming from <code>resources/views/layouts/app.blade.php</code>.
            </p>

            <nav class="mt-10 grid gap-4 sm:grid-cols-3">
                <a
                    class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4 text-lg font-medium text-white transition hover:border-cyan-300/40 hover:bg-white/10"
                    href="{{ route('hello') }}"
                >
                    /hello
                    <span class="mt-1 block text-sm font-normal text-slate-300">Renders the hello-world component</span>
                </a>

                <a
                    class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4 text-lg font-medium text-white transition hover:border-cyan-300/40 hover:bg-white/10"
                    href="{{ route('counter') }}"
                >
                    /counter
                    <span class="mt-1 block text-sm font-normal text-slate-300">Renders the counter component</span>
                </a>

                <a
                    class="rounded-2xl border border-white/10 bg-white/5 px-5 py-4 text-lg font-medium text-white transition hover:border-cyan-300/40 hover:bg-white/10"
                    href="{{ route('todo') }}"
                >
                    /todo
                    <span class="mt-1 block text-sm font-normal text-slate-300">Renders the todo component</span>
                </a>
            </nav>
        </div>
    </div>
</div>
