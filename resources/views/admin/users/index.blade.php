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
                @forelse ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>-</td>
                </tr>
                @empty
                    <tr>
                        <td colspan="4">Nenhum usuário no banco</td>
                    </tr>
                @endforelse 

            </tbody>
        </table>
    </body>
</html>