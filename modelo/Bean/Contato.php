<?php
 
class Contato {

    private $id;
    private $nome;
    private $sobrenome;
    private $telefone;
    private $email;
    private $data_cadastro;
    private $menssagem;
    private $assunto;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getData_cadastro() {
        return $this->data_cadastro;
    }

    public function getMenssagem() {
        return $this->menssagem;
    }

    public function getAssunto() {
        return $this->assunto;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
        return $this;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setData_cadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
        return $this;
    }

    public function setMenssagem($menssagem) {
        $this->menssagem = $menssagem;
        return $this;
    }

    public function setAssunto($assunto) {
        $this->assunto = $assunto;
        return $this;
    }


}
