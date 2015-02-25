<?php

include_once '../modelo/Connection/conexao.Class.php';
include_once '../modelo/Util/Sql.Class.php';
include '../modelo/Util/MontaDados.Class.php';
include '../modelo/Util/Dados.class.php';

class DaoContatoPastor {
//"id","nome","email","telefone","assunto","menssagem","data_cadastro"
    public function inserir(Contato $contato) {
        $conn = new Conexao(); //Cria e conecta ao banco
        $objSql = new Sql("contato"); //clase de prepara o sql, aqui no metodo contrutor é especificado o nome da tablela
        $dadosCP = array("", $contato->getNome(), $contato->getSobrenome(), $contato->getEmail(), $contato->getTelefone(),
            $contato->getAssunto(), $contato->getMenssagem(),$contato->getData_cadastro()); // seta todos os valores a ser salvo no banco
        $objSql->dados = $dadosCP; //manda os valores para classe  sql, para prepara o sql de inserir
        $conn->sql = $objSql->sqlInserir(); //monta o sql e já envia para a conecção execlutala
        $result = $conn->executaQuery(); //aqui execluta a  sql informada    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

}
?>