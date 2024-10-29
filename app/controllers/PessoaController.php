<?php
require_once __DIR__ . '/../models/Pessoa.php';


class PessoaController {
    public function salvar() {
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $idade = $_POST['idade'] ?? '';
        $id = $_POST['id'] ?? '';
        $mensagem = "";
    
        if ($id != '') {
            $resultado = Pessoa::atualizar($_POST['id'], $nome, $email, $idade);
            var_dump($id);
            if ($resultado) {
                $mensagem = "Registro atualizado com sucesso!";
            } else {
                $mensagem = "Erro ao atualizar o registro.";
            }
            
        } else {
          
            $resultado = Pessoa::inserir($nome, $email, $idade);
            
            if ($resultado) {
                $mensagem = "Registro inserido com sucesso!";
            } else {
                $mensagem = "Erro ao inserir o registro.";
            }
        }
    
        // Passa a mensagem para o view
        require_once __DIR__ . '/../views/form.php';
        echo "<script type='text/javascript'>alert('$mensagem');</script>";
    }

    public function listar() {
        $pessoas = Pessoa::listar();
        require_once __DIR__ . '/../views/listar.php';
    }

    public function editar() {
        $pessoa = Pessoa::buscarPorId($_GET['id']);
        require_once __DIR__ . '/../views/form.php';
    }

    public function excluir() {
        Pessoa::excluir($_GET['id']);
        require_once __DIR__ . '/../views/mensagem.php';
    }
}
?>
