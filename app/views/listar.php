<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Pessoas</title>
</head>
<body>
    <h1>Pessoas Cadastradas</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Idade</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($pessoas as $pessoa): ?>
            <tr>
                <td><?= $pessoa['id'] ?></td>
                <td><?= $pessoa['nome'] ?></td>
                <td><?= $pessoa['email'] ?></td>
                <td><?= $pessoa['idade'] ?></td>
                <td>
                    <a href="index.php?acao=editar&id=<?= $pessoa['id'] ?>">Editar</a> |
                    <a href="index.php?acao=excluir&id=<?= $pessoa['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="index.php">Cadastrar Nova Pessoa</a>
</body>
</html>
