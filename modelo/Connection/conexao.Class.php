<?php

class Conexao {

    private $bancoDeDados;
    private $usuario;
    private $servidor;
    private $senha;
    private $porta;
    public $conexao;
    public $execucao;
    public $sql;
    public $arrayDados1;

//    ------------------usado para pRODUÇAO------------------
//    function __construct() {
//        $this->bancoDeDados = "";
//        $this->usuario = "";
//        $this->senha = "";
//        $this->servidor = "Localhost";
//        $this->porta = "3306";
//    }
//    ------------------usado para testes------------------
    function __construct() {
            $this->bancoDeDados = "coopn501_teste";
        $this->usuario = "coopn501_teste";
        $this->senha = "teste123";
        $this->servidor = "Localhost";
        $this->porta = "3306";
    }
//    ------------------usado para testes local------------------
//    function __construct() {
//        $this->bancoDeDados = "coopn501_jaiara";
//        $this->usuario = "root";
//        $this->senha = "";
//        $this->servidor = "Localhost";
//        $this->porta = "3306";
//    }

    private function conecta() {
        $this->conexao = new mysqli($this->servidor, $this->usuario, $this->senha, $this->bancoDeDados, $this->porta);
        if ($this->conexao) {
            return $this->conexao;
        } else {
            trigger_error(mysqli_connect_error());
        }
    }

    public function executaQuery() {
//        header('Content-Type: text/html; charset=utf-8');
        try {
            $this->conecta();
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
        }

        $this->conexao->query('SET NAMES utf8');
        $this->conexao->query('SET character_set_connection=utf8');
        $this->conexao->query('SET character_set_client=utf8');
        $this->conexao->query('SET character_set_results=utf8');
        $this->execucao = $this->conexao->query($this->sql);

        if ($this->execucao) {
            $this->desconecta();
            return $this->execucao;
        } else {
            $this->desconecta();
            throw new Exception("Erro ao encontrar a tabela de banco de dados.");
        }
    }

    public function montaArrayPesquisa() {
        $i = 0;
        if (count($this->executaQuery()->fetch_array(MYSQLI_BOTH))) { //Se um ou mais resultados forem retornados...
            $array = $this->executaQuery();
            while ($a = $array->fetch_array(MYSQLI_BOTH)) {
                $arrayDados[$i] = $a;
                $i++;
            }
            return $arrayDados;
        } else {
            return null;
        }
    }

    public function RsutArray() {
    }

    private function desconecta() {

        $this->conexao->close();
    }

//    public function linhasPesquisadas($tipo) {
//        $tipo = strtolower($tipo);
//        if ($tipo == "select") {
//            return mysqli_num_rows($this->execucao);
//        } else {
//            return mysqli_affected_rows($this->conexao);
//        }
//    }
}

?>