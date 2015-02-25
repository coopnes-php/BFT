<?php
include_once "../Connection/conexao.Class.php";
include_once "../Util/Sql.Class.php";
include_once "../Util/MontaDados.Class.php";
include_once "../Util/Dados.class.php";


class DaoUsuario {

    public function inserir(Usuario $usuario) {
        $conn = new Conexao(); //Cria e conecta ao banco
        $objSql = new Sql("usuarios"); //classe de prepara o sql, aqui no metodo contrutor é especificado o nome da tablela
        $dadosUsuario = array("", $usuario->getUsuario(), $usuario->getSenha(), $usuario->getEmail(), $usuario->getFoto(),
            $usuario->getNivel_Usuario(), $usuario->getData_Cadastro(), $usuario->getData_Ultimo_Login(),
            $usuario->getAtivado(), $usuario->getSkype(), $usuario->getFacebook(), $usuario->getPatrocinador(),
            $usuario->getNome(), $usuario->getSobrenome(),
            $usuario->getCpf(), $usuario->getRg(), $usuario->getData_Nascimento(), $usuario->getSexo(),
            $usuario->getEndereco(), $usuario->getComplemento(), $usuario->getBairro(), $usuario->getCidade(),
            $usuario->getEstado(), $usuario->getPais(), $usuario->getCep(),
            $usuario->gettelefone(), $usuario->getCelular()); // seta todos os valores a ser salvo no banco
        $objSql->dados = $dadosUsuario; //manda os valores para classe  sql, para prepara o sql de inserir
        $conn->sql = $objSql->sqlInserir(); //monta o sql e já envia para a conecção execlutala
        $result = $conn->executaQuery(); //aqui execluta a  sql informada    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function alterar($dadosUsuario,$camposTabelas,$idusu) {
        $conn = new Conexao(); //Cria e conecta ao banco
        $objSql = new Sql("usuarios"); //clase de prepara o sql, aqui no metodo contrutor é especificado o nome da tablela
        $objSql->dados = $dadosUsuario; //manda os valores para classe  sql 
        $objSql->camposTabelas = $camposTabelas;
        $where = "usuario_id=" . $idusu . ""; //"idContato"
        $conn->sql = $objSql->sqlAtualizar($where);
        $result = $conn->executaQuery(); //aqui execluta a  sql informada    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function excluir(Usuario $usuario) {
        $conn = new Conexao;
        $objSql = new Sql("usuarios");
        $condicoesTabelas = array("usuario_id=" . $usuario->getUsuario_Id() . "");
        $objSql->condicoesTabela = $condicoesTabelas;
        $conn->sql = $objSql->sqlexcluir();
        $result = $conn->executaQuery(); //aqui execluta a  sql informada    
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function ListarTodos() {
        
    }

    public function selecionar(Usuario $usuario) {
        $conn = new Conexao(); //Cria e conecta ao banco
        $objSql = new Sql('usuarios'); //clase de prepara o sql, aqui no metodo contrutor é especificado o nome da tablela
        $camposTabelas = array('u.usuario_id', 'u.usuario', 'u.senha', 'u.email', 'u.foto',
            'u.nivel_usuario', 'u.data_cadastro', 'u.data_ultimo_login', 'u.ativado', 'u.skype',
            'u.facebook', 'u.padrocinador', 'u.nome', 'u.sobrenome', 'u.cpf', 'u.rg',
            'u.data_nascimento', 'u.sexo', 'u.endereco', 'u.complemento', 'u.bairro', 'u.cidade',
            'u.estado', 'u.pais', 'u.cep', 'u.telefone', 'u.celular');
        $condicoesTabelas = array('u.usuario_id=' . $usuario->getUsuario_Id() . '');
        $nomeTabelas = array('u' => 'usuarios');
        $objSql->camposTabelas = $camposTabelas;
        $objSql->tabela = $nomeTabelas;
        $objSql->condicoesTabela = $condicoesTabelas;
        $objSql->colunaOrdenada = null; // 
        $objSql->ordenacao = 'DESC'; 
        $conn->sql = $objSql->sqlPesquisar();
        $arrayDados = $conn->montaArrayPesquisa();
        if ($arrayDados != null) {
            $objMontaDados = new MontaDados;
            $objMontaDados->colunas = $camposTabelas;
            $objMontaDados->dados = $arrayDados;
            $dados = new Dados();
            $dados = $objMontaDados->pegaDados($dados);
            $usuario->setUsuario_Id($dados->dado[0]);
            $usuario->setUsuario($dados->dado[1]);
            $usuario->setSenha($dados->dado[2]);
            $usuario->setEmail($dados->dado[3]);
            $usuario->setFoto($dados->dado[4]);
            $usuario->setNivel_Usuario($dados->dado[5]);
            $usuario->setData_Cadastro($dados->dado[6]);
            $usuario->setData_Ultimo_Login($dados->dado[7]);
            $usuario->setAtivado($dados->dado[8]);
            $usuario->setSkype($dados->dado[9]);
            $usuario->setFacebook($dados->dado[10]);
            $usuario->setPatrocinador($dados->dado[11]);
            $usuario->setNome($dados->dado[12]);
            $usuario->setSobrenome($dados->dado[13]);
            $usuario->setCpf($dados->dado[15]);
            $usuario->setRg($dados->dado[16]);
            $usuario->setData_Nascimento($dados->dado[17]);
            $usuario->setSexo($dados->dado[18]);
            $usuario->setEndereco($dados->dado[19]);
            $usuario->setComplemento($dados->dado[20]);
            $usuario->setBairro($dados->dado[21]); 
            $usuario->setCidade($dados->dado[22]);
            $usuario->setEstado($dados->dado[23]);
            $usuario->setPais($dados->dado[24]);
            $usuario->setCep($dados->dado[25]);
            $usuario->setTelefone($dados->dado[26]);
            $usuario->setCelular($dados->dado[27]);
        } else {
            $usuario->setUsuario_Id();
        }
        return $usuario;
    }
    public function Validar($usu) {
        $conn = new Conexao;
        $objSql = new Sql("");
        $camposTabelas = array("u.usuario");
        $nomeTabelas = array("u" => "usuarios");
        $condicoesTabelas = array("u.usuario='" . $usu . "'");
        $objSql->camposTabelas = $camposTabelas;
        $objSql->tabela = $nomeTabelas;
        $objSql->condicoesTabela = $condicoesTabelas;
        $objSql->colunaOrdenada = null;
        $objSql->ordenacao = "DESC"; //
        $conn->sql = $objSql->sqlPesquisar();
        $result = $conn->montaArrayPesquisa();
        if ($result != null) {
            return true;
        } else {
            return false;
        }
    }



}

?>
