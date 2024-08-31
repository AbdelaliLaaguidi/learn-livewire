<div>
    <p>{{ count($users) }}</p>
    <ul>
        @foreach ($users as $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul>
    <button wire:click="addUser">Add User</button>
</div>
