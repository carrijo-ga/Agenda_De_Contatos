<?php 

$idContato = $_GET["idContato"];

include("../class/classeContato.php");

$contato = new classeContato();
$contato -> setIdContato($idContato);
$resultado = $contato -> excluirContato();

echo "<script>alert('Contato deletado');</script>";
echo "<script>window.location.assign('../../pages/contatos.php');</script>";
?>