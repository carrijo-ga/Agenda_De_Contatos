<?php
$idContato = $_GET["idContato"];
include("../class/classeContato.php");

$contato = new classeContato();
$contato->setIdContato($idContato);
$contato->setNome("");
$contato->setEmail("");
$contato->setTelefone("");
$contato->setIdCidade(0);
$contato->setIdTipoDeContato(0);

if ($contato->getIdContato() != 0) {
    $contato->consultarContato();
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
    <link rel="stylesheet" href="../../css/register/contato.css" type="text/css">

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
                    <a class="nav-item" href="../../pages/cidades.php""><span class=" nav-span">Cidades</span></a>
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
            <h1>Contato</h1>
        </center>
    </div>
    <div class="container">

        <!-- Formulario -->
        <form name="formContato" action="../save/salvarcontato.php" method="GET">
            <div class="form-group">
                <label for="campoIDCONTATO">Código do Contato</label>
                <input class="form-control" type="text" id="campoIDCONTATO" name="campoIDCONTATO" placeholder="Input só de leitura, aqui..." value="<?php echo $contato->getIdCidade(); ?>" readonly>
                <div id="campoIDCONTATOHelp" class="form-text">O código é gerado pelo sistema.</div>
            </div>

            <div class="form-group">
                <label for="campoNome">Nome</label>
                <input class="form-control" type="text" class="input" id="campoNome" name="campoNome" value="<?php echo $contato->getNome(); ?>" aria-describedby="nomeHelp" laceholder="Digite aqui seu nome completo" required>
            </div>

            <div class="form-group">
                <label class="user-label" for="campoEmail">Email</label>
                <input class="form-control" type="email" class="input" id="campoEmail" name="campoEmail" value="<?php echo $contato->getEmail(); ?>" aria-describedby="emailHelp" laceholder="Digite aqui seu e-mail" required>
            </div>

            <div class="form-group">
                <label class="user-label" for="campoTelefone">Telefone</label>
                <input class="form-control" type="tel" class="input" id="campoTelefone" name="campoTelefone" value="<?php echo $contato->getTelefone(); ?>" aria-describedby="telefoneHelp" laceholder="Digite aqui seu telefone, ex: 99-99999-9999" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" required>
            </div>

            <div class="form-group">
                <label for="campoIDCIDADE">Cidade</label>
                <select class="form-control" id="campoIDCIDADE" name="campoIDCIDADE" aria-describedby="cidadeHelp" required>
                    <?php
                    include("../conexao.php");

                    $select = "SELECT * FROM cidade ORDER BY NOME";
                    $retornoDaConsulta = $PDO->prepare($select);
                    $retornoDaConsulta->execute();

                    foreach ($retornoDaConsulta as $registro) {
                        $idCidade = utf8_encode($registro["IDCIDADE"]);
                        $nome = utf8_encode($registro["NOME"]);
                        if ($contato->getIdCidade() != $idCidade) {
                            echo "<option value='$idCidade'>$nome</option>";
                        } else {
                            echo "<option value='$idCidade' selected>$nome</option>";
                        }
                    }
                    ?>
                </select>
                <div id="cidadeHelp" class="form-text">Informe a cidade onde o contato mora</div>
            </div>

            <div class="form-group">
                <label for="campoIDTIPODECONTATO">Tipo de Contato</label>
                <select class="form-control" id="campoIDTIPODECONTATO" name="campoIDTIPODECONTATO" aria-describedby="tipodecontatoHelp" required>
                    <?php
                    include("../conexao.php");

                    $select = "SELECT * FROM tipodecontato ORDER BY NOME";
                    $retornoDaConsulta = $PDO->prepare($select);
                    $retornoDaConsulta->execute();

                    foreach ($retornoDaConsulta as $registro) {
                        $idTipoDeContato = utf8_encode($registro["IDTIPODECONTATO"]);
                        $nome = utf8_encode($registro["NOME"]);
                        if ($contato->getIdTipoDeContato() != $idTipoDeContato) {
                            echo "<option value='$idTipoDeContato'>$nome</option>";
                        } else {
                            echo "<option value='$idTipoDeContato' selected>$nome</option>";
                        }
                    }
                    ?>
                </select>
                <div id="tipodecontatoHelp" class="form-text">Indique o tipo de contato</div>
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