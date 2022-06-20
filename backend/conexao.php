<?php
// Declarar e definir as variaves utilizadas para a conexão com o MYSQL e acesso ao
// Banco de Dados agendadecontatos;

$servidorMySql = "localhost";
$usuarioMySql = "root";
$senhaMySql = "";
$bancoMySql = "agendadecontatos";
try {
    // Inicio da conexão PDO;
    $PDO = new PDO("mysql:host=$servidorMySql;dbname=$bancoMySql", $usuarioMySql, $senhaMySql);

} catch (PDOException $erroDeExcessoPDO) {
    // Mensagem de erro
    echo "<script> alert('Erro ao conectar com o Banco de Dados');</script>";

    // Redirecionamento via JS para o index.php
    echo "<script>windows.location.assign('index.php');";
}
?>