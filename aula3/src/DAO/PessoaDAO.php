
<?php

namespace App\DAO;

use App\Config\Database;
use App\Model\Pessoa;


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

    // Criar o PessoaDAO
    $dao = new PessoaDAO();

    // Inserir os dados no banco
    if ($dao->insert($pessoa)) {

        // Mostrar mensagem de sucesso e redirecionar
        echo "<script>
                alert('Dados salvos com sucesso!');
                window.location.href = 'pessoa-create.php';
              </script>";

    } else {

        // Mostrar mensagem de erro e redirecionar
        echo "<script>
                alert('Erro ao salvar dados!');
                window.location.href = 'pessoa-create.php';
              </script>";
    }
}
?>