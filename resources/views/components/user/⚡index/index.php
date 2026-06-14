<?php

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Illuminate\Support\Collection;
use Livewire\Attributes\Title;

new #[Layout('layouts::app')]
#[Title('Users')]
class extends Component
{
    #[Rule('required', as: 'da name')]
    public $name = '';
    #[Rule('required')]
    public $email = '';
    #[Rule('required', message: 'Yoo, u need a password too')]
    #[Rule('min:4', message: 'Yoo, too short for password')]
    public $password = '';

    #[Computed]
    public function users(): Collection
    {
       return User::query()
                ->latest()
                ->get();
    }

    public function save()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        $this->redirect('/users');
    }

    public function delete(User $user): void
    {
        $user->delete();

        unset($this->users);
    }
};