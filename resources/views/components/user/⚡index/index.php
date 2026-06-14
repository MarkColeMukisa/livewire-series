<?php

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Computed;
use Illuminate\Support\Collection;
use Livewire\Attributes\Title;

new #[Layout('layouts::app')]
#[Title('Users')]
class extends Component
{
    #[Computed]
    public function users(): Collection
    {
       return User::query()
                ->latest()
                ->get();
    }
};