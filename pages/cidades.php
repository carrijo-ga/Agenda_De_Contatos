<?php
include("../backend/conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cidades.css" type="text/css">

    <title>Agenda de Contatos</title>
</head>

<body>
    <!-- Navbar -->
    <header>
        <a class="nav-brand" href="#"></a>
        <nav class="navbar-person">
            <ul class="navbar-itens">
                <li>
                    <a class="nav-item" href="../index.php"><span class="nav-span">Home</span></a>
                </li>
                <li>
                    <a class="nav-item" href="contatos.php"><span class="nav-span">Contatos</span></a>
                </li>
                <li>
                    <a class="nav-item" href="cidades.php"><span class="nav-span">Cidades</span></a>
                </li>
                <li>
                    <a class="nav-item" href="tiposdecontatos.php"><span class="nav-span">Tipos de Contatos</span></a>
                </li>
            </ul>
        </nav>
        <div class="nav-line"></div>
    </header>

    <!-- Cabeçalho -->
    <div class="info-header alert alert-primary" role="alert">
        <center>
            <h1>Cidades</h1>
        </center>
    </div>
    <div class="container">

        <!-- Botão NovoContato-1 -->
        <a href="../backend/pages/cidade.php?idCidade=0">
            <button type="button" class="btn btn-primary">Nova Cidade</button>
        </a>

        <!-- Table -->
        <table class="table">
            <thead class="table-itens">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Contatos</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php
                $select = "SELECT * FROM cidade ORDER BY NOME";
                $retornoDaConsulta = $PDO->prepare($select);
                $retornoDaConsulta->execute();
                foreach ($retornoDaConsulta as $registro) {
                    $idCidade = utf8_encode($registro["IDCIDADE"]);
                    $nome = utf8_encode($registro["NOME"]);
                ?>
                    <tr class="contact-fields">
                        <th scope="row"><?php echo $idCidade; ?></th>
                        <td><?php echo $nome; ?></td>
                        <td>Contatos</td>
                        <td><a href="../backend/pages/cidade.php?idCidade=<?php echo $idCidade; ?>"><button type="button" class="btn btn-warning">Alterar</button></a></td>
                        <td><a href="../backend/save/excluircidade.php?idCidade=<?php  echo $idCidade; ?>"><button type="button" class="btn btn-danger">Excluir</button></a></td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>

        <!-- Botão NovoContato-2 -->
        <a href="../backend/pages/cidade.php?idCidade=0">
            <button type="button" class="btn btn-primary">Nova Cidade</button>
        </a>
    </div>

    <!-- Footer -->
    <footer>
        <div class="alert alert-info" role="alert">
            <center><strong>Agenda de Contatos</strong> | Desenvolvido por Gabriel Carrijo | Direitos Reservados &copy;</center>
        </div>
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>