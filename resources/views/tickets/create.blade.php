<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Ticket</title>
</head>
<body>
    <h1>Criar Novo Ticket</h1>

    {{-- Exibe todos os erros em alerta vermelho --}}
    @if ($errors->any())
        <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ old('nome') }}">
        <br>

        <label>E-mail:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        <br>

        <label>Título:</label>
        <input type="text" name="titulo" value="{{ old('titulo') }}">
        <br>

        <label>Descrição:</label>
        <textarea name="descricao">{{ old('descricao') }}</textarea>
        <br>

        <button type="submit">Criar</button>
    </form>
</body>
</html>
