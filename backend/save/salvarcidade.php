<?php
    $idCidade = $_GET["campoIDCIDADE"];
    $nome = $_GET["campoNome"];

    include("../class/classeCidade.php");

    $cidade = new classeCidade();

    $cidade -> setIdCidade($idCidade);
    $cidade -> setNome($nome);

    if ($cidade -> getIdCidade()==0) {
        $cidade -> inserirCidade();

        echo "<script>alert('Cidade $nome cadastrada');</script>";
        echo "<script>window.location.assign('../../pages/cidades.php');</script>";
    } else {
        $cidade -> alterarCidade();

        echo "<script>alert('Cidade $nome alterar');</script>";
        echo "<script>window.location.assign('../../pages/cidades.php');</script>";
    }
?>