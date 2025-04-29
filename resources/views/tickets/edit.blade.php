<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ticket</title>
</head>
<body>
    <h1>Editar Ticket #{{ $ticket->id }}</h1>

    {{-- Exibir erros de validação --}}
    @if ($errors->any())
        <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Status:</label>
        <select name="status">
            <option value="Aberto" {{ old('status', $ticket->status) == 'Aberto' ? 'selected' : '' }}>Aberto</option>
            <option value="Em andamento" {{ old('status', $ticket->status) == 'Em andamento' ? 'selected' : '' }}>Em andamento</option>
            <option value="Resolvido" {{ old('status', $ticket->status) == 'Resolvido' ? 'selected' : '' }}>Resolvido</option>
        </select>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
