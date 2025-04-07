<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ticket</title>
</head>
<body>
    <h1>Editar Ticket #{{ $ticket->id }}</h1>
    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Status:</label>
        <select name="status">
            <option value="Aberto" {{ $ticket->status == 'Aberto' ? 'selected' : '' }}>Aberto</option>
            <option value="Em andamento" {{ $ticket->status == 'Em andamento' ? 'selected' : '' }}>Em andamento</option>
            <option value="Resolvido" {{ $ticket->status == 'Resolvido' ? 'selected' : '' }}>Resolvido</option>
        </select>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>