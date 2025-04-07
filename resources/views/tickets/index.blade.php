<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tickets</title>
</head>
<body>
    <h1>Tickets</h1>
    <a href="{{ route('tickets.create') }}">Criar Novo Ticket</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Título</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        @foreach ($tickets as $ticket)
        <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->nome }}</td>
            <td>{{ $ticket->titulo }}</td>
            <td>{{ $ticket->status }}</td>
            <td>
                <a href="{{ route('tickets.edit', $ticket->id) }}">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>