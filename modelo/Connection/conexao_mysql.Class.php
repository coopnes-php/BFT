<?php

class Conexao_mysql {

    private $bancoDeDados;
    private $usuario;
    private $servidor;
    private $senha;
    private $porta;
    private $selecionaBanco;
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

    public function conecta() {
        $this->conexao = mysql_connect($this->servidor, $this->usuario, $this->senha, $this->porta);
        if ($this->conexao) {
            $this->selecionaBD();
            return $this->conexao;
        } else {
            throw new Exception("Erro ao conectar ao banco de dados.");
        }
    }

    private function selecionaBD() {
        $this->selecionaBanco = mysql_select_db($this->bancoDeDados, $this->conexao);
        if ($this->selecionaBanco) {
            return $this->selecionaBanco;
        } else {
            throw new Exception("Erro ao selecionar o banco de dados");
        }
    }

    public function executaQuery() {
        header('Content-Type: text/html; charset=utf-8');
        try {
            $this->conecta();
        } catch (Exception $erro) {
            throw new Exception($erro->getMessage());
        }

        mysql_query("SET NAMES 'utf8'");
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');

        $this->execucao = mysql_query($this->sql);

        if ($this->execucao) {
            $this->desconecta();
            return $this->execucao;
        } else {
            $this->desconecta();
            throw new Exception("Erro ao encontrar a tabela de banco de dados.");
        }
    }

    public function montaArrayPesquisa() {
        $execucao = $this->executaQuery();
        $i = 0;
        while ($a = mysql_fetch_array($execucao)) {
            $arrayDados[$i] = $a;
            $i++;
        }

        return $arrayDados;
    }

    public function desconecta() {
        mysql_close($this->conexao);
    }

    public function linhasPesquisadas($tipo) {
        $tipo = strtolower($tipo);
        if ($tipo == "select") {
            return mysql_num_rows($this->execucao);
        } else {
            return mysql_affected_rows($this->conexao);
        }
    }

    public function commit() {
        $this->sql="COMMIT";
        return $this->executaQuery();
    }

    public function rollback() {
        $this->sql="ROLLBACK";
        return $this->executaQuery();
    }

}

?>