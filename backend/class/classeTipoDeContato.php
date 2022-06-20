<?php

class classeTipoDeContato {
    private $idTipoDeContato;
    private $nome;
    
    public function getIdTipoDeContato() {
        return $this->idTipoDeContato;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setIdTipoDeContato($idTipoDeContato) {
        $this->idTipoDeContato = $idTipoDeContato;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

   
    // Método CRUD

    function inserirTipoDeContato() {
        include("../conexao.php");

        $comando = "INSERT INTO tipodecontato (NOME) VALUES (?);";
        $resposta = $PDO -> prepare($comando);

        $resposta -> bindValue(1, $this -> nome);
        $resposta -> execute();
    }

    function consultarTipoDeContato() {
        include("../conexao.php");
        $comando = "SELECT * FROM tipodecontato WHERE IDTIPODECONTATO=?;";
        $resposta = $PDO -> prepare($comando);

        $resposta -> bindValue(1, $this->idTipoDeContato);
        $resposta -> execute();

        foreach ($resposta as $registro) {
            $this -> nome = utf8_encode($registro["NOME"]);
        }
    }

    function alterarTipoDeContato() {
        include("../conexao.php");
        $comando = "UPDATE tipodecontato SET "
                    . "NOME=? "
                    . "WHERE (IDTIPODECONTATO=?)";
        $resposta = $PDO -> prepare($comando);

        $resposta -> bindValue(1, $this->nome);
        $resposta -> bindValue(2, $this->idTipoDeContato);
        $resposta -> execute();
    }

    function excluirTipoDeContato() {
        include("../conexao.php");

        $comando = "DELETE FROM tipodecontato WHERE (IDTIPODECONTATO=?);";
        $resposta = $PDO -> prepare($comando);

        $resposta -> bindValue(1, $this -> idTipoDeContato);
        $resposta -> execute();
    }
}