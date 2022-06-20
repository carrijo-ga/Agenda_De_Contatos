<?php
    $idTipoDeContato = $_GET["campoIDTIPODECONTATO"];
    $nome = $_GET["campoNome"];
    
    include("../class/classeTipoDeContato.php");

    $tipoDeContato = new classeTipoDeContato();
    $tipoDeContato -> setIdTipoDeContato($idTipoDeContato);
    $tipoDeContato -> setNome($nome);

    if ($tipoDeContato -> getIdTipoDeContato() ==0) {
        $tipoDeContato -> inserirTipoDeContato();

        echo "<script>alert('Tipo de Contato $nome cadastrado');</script>";
        echo "<script>window.location.assign('../../pages/tiposdecontatos.php');</script>";
    } else {
        $tipoDeContato -> alterarTipoDeContato();

        echo "<script>alert('Tipo de Contato $nome alterdo');</script>";
        echo "<script>window.location.assign('../../pages/tiposdecontatos.php');</script>";
    }
?>