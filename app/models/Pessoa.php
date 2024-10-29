<?php
require_once 'config/conexao.php';

class Pessoa {
    public static function listar() {
        $con = Conexao::conectar();
        $stmt = $con->prepare("SELECT * FROM pessoas");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscarPorId($id) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("SELECT * FROM pessoas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function inserir($nome, $email, $idade) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO pessoas (nome, email, idade) VALUES (?, ?, ?)");
        return $stmt->execute([$nome, $email, $idade]);
    }

    public static function atualizar($id, $nome, $email, $idade) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("UPDATE pessoas SET nome = ?, email = ?, idade = ? WHERE id = ?");
        return $stmt->execute([$nome, $email, $idade, $id]);
    }

    public static function excluir($id) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM pessoas WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
