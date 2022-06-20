<?php
    $idContato = $_GET["campoIDCONTATO"];
    $nome = $_GET["campoNome"];
    $email = $_GET["campoEmail"];
    $telefone = $_GET["campoTelefone"];
    $idCidade = $_GET["campoIDCIDADE"];
    $idTipoDeContato = $_GET["campoIDTIPODECONTATO"];

    include("../class/classeContato.php");

    $contato = new classeContato();

    $contato -> setIdContato($idContato);
    $contato -> setNome($nome);
    $contato -> setEmail($email);
    $contato -> setTelefone($telefone);
    $contato -> setIdCidade($idCidade);
    $contato -> setIdTipoDeContato($idTipoDeContato);

    if ($contato -> getIdContato() ==0) {
        $contato -> inserirContato();

        echo "<script>alert('Contato $nome cadastrado');</script>";
        echo "<script>window.location.assign('../../pages/contatos.php');</script>";
    } else {
        $contato -> alterarContato();
        echo "<script>alert('Contato $nome alterado');</script>";
        echo "<script>window.location.assign('../../pages/contatos.php');</script>";
    }
?>