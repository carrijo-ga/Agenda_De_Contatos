<?php

class classeCidade {
    private $idCidade;
    private $nome;
    
    public function getIdCidade() {
        return $this->idCidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setIdCidade($idCidade): void {
        $this->idCidade = $idCidade;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    // Método CRUD

    function inserirCidade() {
        include ("../conexao.php");

        $comando = "INSERT INTO cidade (NOME) VALUES (?);";
        $resposta = $PDO -> prepare($comando);

        $resposta -> bindValue(1, $this -> nome);
        $resposta -> execute();
    }

    function consultarCidade() {
        include ("../conexao.php");
        $comando = "SELECT * FROM cidade WHERE IDCIDADE=?;";
        $resposta = $PDO -> prepare($comando);

        $resposta -> bindValue(1, $this->idCidade);
        $resposta -> execute();

        foreach ($resposta as $registro) {
            $this -> nome = utf8_encode($registro["NOME"]);
        }
    }

    function alterarCidade() {
        include ("../conexao.php");
        $comando = "UPDATE cidade SET "
                    . "NOME=?,"
                    . "WHERE (IDCIDADE=?);";
        $resposta = $PDO -> prepare($comando);

        $resposta -> bindValue(1, $this->nome);
        $resposta -> bindValue(2, $this->idCidade);
        $resposta -> execute();
    }

    function excluirCidade() {
        include ("../conexao.php");

        $comando = "DELETE FROM cidade WHERE (IDCIDADE=?);";
        $resposta = $PDO -> prepare($comando);

        $resposta -> bindValue(1, $this->idCidade);
        $resposta -> execute();
    }
}