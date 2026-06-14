<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
   <nav class="mt-2 p-4 text-center">
                <a href="{{ route('hello') }}"
                @class(['text-red-500' => request()->is('hello')])
                >hello</a>

                <a href="{{ route('counter') }}"
                @class(['text-red-500' => request()->is('counter')])
                >counter</a>

                <a href="{{ route('todo') }}"
                @class(['text-red-500' => request()->is('todo')])
                >todo</a>

                <a href="{{ route('posts') }}"
                @class(['text-red-500' => request()->is('posts')])
                >Posts</a>

                 <a href="{{ route('users') }}"
                @class(['text-red-500' => request()->is('users')])
                >Users</a>
    </nav>
</div>