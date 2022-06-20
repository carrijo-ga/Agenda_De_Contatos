<?php 

$idTipoDeContato = $_GET["idTipoDeContato"];

include("../class/classeTipoDeContato.php");

$tipodecontato = new classeTipoDeContato();
$tipodecontato -> setIdTipoDeContato($idTipoDeContato);
$resultado = $tipodecontato -> excluirTipoDeContato();

echo "<script>alert('Tipo De Contato deletado');</script>";
echo "<script>window.location.assign('../../pages/tiposdecontatos.php');</script>";
?>