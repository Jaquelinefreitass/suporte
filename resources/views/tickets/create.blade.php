<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Ticket</title>
</head>
<body>
    <h1>Criar Novo Ticket</h1>
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <label>E-mail:</label>
        <input type="email" name="email" required>
        <label>Título:</label>
        <input type="text" name="titulo" required>
        <label>Descrição:</label>
        <textarea name="descricao" required></textarea>
        <button type="submit">Criar</button>
    </form>
</body>
</html>