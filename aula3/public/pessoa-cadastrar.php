<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Model\Pessoa;
use App\DAO\PessoaDAO;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Receber os dados do formulário
    $nome = $_POST['nome'] ?? '';
    $telefone = $_POST['telefone'] ?? null;
    $cpf = $_POST['cpf'] ?? '';
    $endereco = $_POST['endereco'] ?? null;

    // Converter nome e endereço para letras maiúsculas
    $nome = mb_strtoupper($nome, 'UTF-8');
    $endereco = mb_strtoupper($endereco, 'UTF-8');

    // Criar o objeto Pessoa
    $pessoa = new Pessoa($nome, $telefone, $cpf, $endereco);

    // Criar o DAO
    $dao = new PessoaDAO();

    // Inserir no banco de dados
    if ($dao->insert($pessoa)) {
        echo "<script>
                alert('Dados salvos com sucesso!');
                window.location.href = 'pessoa-create.php';
              </script>";
    } else {
        echo "<script>
                alert('Erro ao salvar dados!');
                window.location.href = 'pessoa-create.php';
              </script>";
    }
}
?>