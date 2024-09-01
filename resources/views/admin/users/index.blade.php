<html>
    <body>
        <h1>Usuários:</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Criado em</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>-</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>