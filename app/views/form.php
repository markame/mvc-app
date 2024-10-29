<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Pessoa</title>
</head>
<body>
    <h1><?= isset($pessoa) ? 'Editar' : 'Cadastrar' ?> Pessoa</h1>
    <form action="index.php?acao=salvar" method="POST">
        <input type="hidden" placeholder="id" name="id" value="<?= $pessoa['id'] ?? '' ?>"><br><br>
        <input type="text" name="nome" placeholder="Nome" value="<?= $pessoa['nome'] ?? '' ?>" required><br><br>
        <input type="email" name="email" placeholder="Email" value="<?= $pessoa['email'] ?? '' ?>" required><br><br>
        <input type="number" name="idade" placeholder="Idade" value="<?= $pessoa['idade'] ?? '' ?>" required><br><br>
        <button type="submit"><?= isset($pessoa) ? 'Atualizar' : 'Salvar' ?></button>
    </form>
    <a href="index.php?acao=listar">Ver Lista de Pessoas</a>
</body>
</html>
