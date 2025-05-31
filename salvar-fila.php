<?php


ini_set('display_errors', 1);  // Ativa a exibição de erros
error_reporting(E_ALL);        // Exibe todos os tipos de erro

// Verificando se o formulário foi enviado e exibindo os dados de $_POST
var_dump($_POST);  // Isso exibirá todos os dados enviados no formulário

// Se a variável 'acao' não estiver definida corretamente
if (isset($_POST['acao']) && $_POST['acao'] == 'cadastrar-fila') {
    // Código de inserção no banco...
} else {
    echo "<script>alert('Ação não definida corretamente!');</script>";
}


ini_set('display_errors', 1);  // Ativa a exibição de erros
error_reporting(E_ALL);        // Exibe todos os tipos de erro

// Verifique se a variável 'acao' está definida corretamente
if (isset($_POST['acao']) && $_POST['acao'] == 'cadastrar-fila') {
    // Conectar ao banco de dados
    include('conexao.php');  // Substitua por sua conexão com o banco de dados

    // Coletar os dados do formulário
    $nome = $_POST["nome_fila"];
    $fone = $_POST["fone_fila"];
    $especialidade = $_POST["especialidade_fila"];
    $data = $_POST["data_fila"];
    $horario = $_POST["horario_fila"];

    // Criar a consulta SQL para inserir os dados
    $sql = "INSERT INTO fila (nome_fila, fone_fila, especialidade_fila, data_fila, horario_fila) 
            VALUES ('{$nome}', '{$fone}', '{$especialidade}', '{$data}', '{$horario}')";

    // Executar a consulta
    $res = $conn->query($sql);

    // Verificar se a consulta foi bem-sucedida
    if ($res) {
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>location.href='?page=listar-fila';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar: " . $conn->error . "');</script>";  // Exibe o erro do banco de dados
    }
} else {
    echo "<script>alert('Ação não definida corretamente!');</script>";  // Se a ação não for definida corretamente
}
?>
