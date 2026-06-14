<?php

use App\Models\Post;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')]
#[Title('Posts')]
class extends Component
{
    #[Computed]
    public function posts(): Collection
    {
        return Post::query()
            ->latest()
            ->get();
    }

    public function delete(Post $post): void
    {
        $post->delete();

        unset($this->posts);
    }
};
?>

<div class="min-h-screen bg-slate-950 text-slate-100">
    <div class="mx-auto max-w-6xl px-6 py-16 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-semibold uppercase tracking-[0.35em] text-cyan-300">
                /posts
            </p>

            <h1 class="mt-4 text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                Posts from the database
            </h1>

            <p class="mt-6 text-lg leading-8 text-slate-300">
                This page reads directly from the <code>posts</code> table using a Livewire v4 computed property, then renders each record in a framed list.
            </p>
        </div>

        <div class="mt-10 rounded-3xl border border-white/10 bg-white/5 p-6 shadow-2xl shadow-cyan-950/20 backdrop-blur sm:p-8">
            @if ($this->posts->isEmpty())
                <div class="rounded-2xl border border-dashed border-white/15 bg-slate-950/40 px-6 py-10 text-center">
                    <p class="text-lg font-medium text-white">
                        No posts yet.
                    </p>

                    <p class="mt-2 text-sm text-slate-400">
                        Seed the database with <code>PostSeeder</code> to populate this page.
                    </p>
                </div>
            @else
                <div class="grid gap-4">
                    @foreach ($this->posts as $post)
                        <article
                            wire:key="post-{{ $post->id }}"
                            class="rounded-2xl border border-white/10 bg-slate-950/60 p-5 transition hover:border-cyan-300/30 hover:bg-slate-950/80"
                        >
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-[0.3em] text-cyan-300">
                                        Post #{{ $post->id }}
                                    </p>

                                    <h2 class="mt-2 text-2xl font-semibold tracking-tight text-white">
                                        {{ $post->title }}
                                    </h2>
                                </div>

                                <time class="shrink-0 text-xs uppercase tracking-[0.25em] text-slate-500">
                                    {{ $post->created_at?->format('M d, Y') }}
                                </time>
                            </div>

                            <p class="mt-4 whitespace-pre-line text-sm leading-7 text-slate-300">
                                {{ $post->content }}
                            </p>

                            <button 
                                type="button" 
                                wire:click="delete({{ $post->id }})"
                                wire:confirm="Are you really sure you want to delete this Post?" 
                                class="text-red-500"
                            >
                                Delete
                            </button>

                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
