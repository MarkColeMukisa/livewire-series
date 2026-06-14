
<div>

    <form wire:submit="save" class="mx-10 my-10">
        <input type="text" placeholder="Name...." wire:model="name">
        @error('name') <em>{{ $message }}</em> @enderror
        <input type="email" placeholder="Email...." wire:model="email">
        @error('email') <em>{{ $message }}</em> @enderror
        <input type="password" placeholder="Password here...." wire:model="password">
        @error('password') <em>{{ $message }}</em> @enderror
        <button type="submit">Add User</button>
    </form>

    <table class="users-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($this->users as $user)
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        <button 
                            type="submit" 
                            wire:click="delete({{ $user->id }})" 
                            wire:confirm="Are you sure you want to delete this User?"
                        >
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
