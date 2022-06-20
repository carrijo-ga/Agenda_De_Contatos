<?php
$idCidade = $_GET["idCidade"];
include("../class/classeCidade.php");

$cidade = new classeCidade();
$cidade->setIdCidade($idCidade);
$cidade->setNome("");

if ($cidade->getIdCidade() != 0) {
    $cidade->consultarCidade();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/register/cidade.css" type="text/css">

    <title>Agenda de Contatos</title>
</head>

<body>
    <!-- Navbar -->
    <header>
        <a class="nav-brand" href="#"></a>
        <nav class="navbar-person">
            <ul class="navbar-itens">
                <li>
                    <a class="nav-item" href="../../index.php"><span class="nav-span">Home</span></a>
                </li>
                <li>
                    <a class="nav-item" href="../../pages/contatos.php"><span class="nav-span">Contatos</span></a>
                </li>
                <li>
                    <a class="nav-item" href="../../pages/cidades.php""><span class="nav-span">Cidades</span></a>
                </li>
                <li>
                    <a class="nav-item" href="../../pages/tiposdecontatos.php"><span class="nav-span">Tipos de Contatos</span></a>
                </li>
            </ul>
        </nav>
        <div class="nav-line"></div>
    </header>

    <!-- Cabeçalho -->
    <div class="info-header alert alert-primary" role="alert">
        <center>
            <h1>Cidade</h1>
        </center>
    </div>
    <div class="container">

        <!-- Formulario -->
        <form name="formCidade" action="../save/salvarcidade.php" method="GET">
            <div class="form-group">
                <label for="campoIDCIDADE">Código da Cidade</label>
                <input class="form-control" type="text" id="campoIDCIDADE" name="campoIDCIDADE" placeholder="Input só de leitura, aqui..." value="<?php echo $cidade->getIdCidade(); ?>" readonly>
                <div id="campoIDCIDADEHelp" class="form-text">O código é gerado pelo sistema.</div>
            </div>

            <div class="form-group">
                <label for="campoNome">Nome</label>
                <input type="text" class="form-control" id="campoNome" name="campoNome" aria-describedby="nomeHelp" placeholder="Informe o nome da cidade" value="<?php echo $cidade->getNome(); ?>" required>
            </div>

            <input class="btnsubmit" type="submit" value="Salvar">
        </form>

    </div>

    <!-- Footer -->
    <footer>
        <div class="alert alert-info" role="alert">
            <center><strong>Agenda de Contatos</strong> | Desenvolvido por Gabriel Carrijo | Direitos Reservados &copy;</center>
        </div>
    </footer>
    
    <!-- Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>