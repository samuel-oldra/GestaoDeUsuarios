<h1>Listagem dos usuários</h1>

<ul>
    @foreach($users as $user)
        <li>
            {{ $user->name }} -
            {{ $user->email }}
        </li>
    @endforeach
</ul>