<h1>Listar Fila</h1>

<?php
// Conectar ao banco de dados
include('conexao.php');

// Consulta SQL para recuperar todos os registros da tabela fila
$sql = "SELECT * FROM fila";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    echo "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    echo "<table class='table table-bordered table-striped table-hover'>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Nome</th>";
    echo "<th>Fone</th>";
    echo "<th>Especialidade</th>";
    echo "<th>Data</th>";
    echo "<th>Horário</th>";
    echo "<th>Ações</th>";
    echo "</tr>";

    // Loop para exibir todos os registros
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>{$row->id_fila}</td>";
        echo "<td>{$row->nome_fila}</td>";
        echo "<td>{$row->fone_fila}</td>";
        echo "<td>{$row->especialidade_fila}</td>";
        echo "<td>{$row->data_fila}</td>";
        echo "<td>
                <a href='excluir-fila.php?id_fila={$row->id_fila}' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza que deseja excluir?\")'>Excluir</a>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Não encontrou resultado</p>";
}
?>