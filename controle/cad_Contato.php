<?php

ob_start();
ini_set('default_charset', 'UTF-8');
include_once '../modelo/DAO/DAOContato.php';
include "../modelo/Bean/Contato.php";
include '../modelo/Util/String.Class.php';
include '../modelo/Util/Data.class.php';
include '../_lib/PHPMailer/PHPMailer.class.php';
include '../modelo/Util/phpmailerUtil.Class.php';
include '../modelo/Util/Menssagem.class.php';

$acao = $_REQUEST["acao"];
$String = new String();
$data = new Data();

if ($acao == "enviar") {

    $nome = $_REQUEST["nome"];
    $sobrenome = $_REQUEST["sobrenome"];
    $telefone = $_REQUEST["telefone"];
    $email = $_REQUEST["email"];
    $data_cadastro = $data->data_atual_en();
    $menssagem = $_REQUEST["menssagem"];
    $assunto = $_REQUEST["assunto"]; 

    $obj = new Contato();
    $obj->setNome($String->ValidarTexto($nome));
    $obj->setSobrenome($String->ValidarTexto($sobrenome));
    $obj->setTelefone($telefone);
    $obj->setEmail($String->ValidarTexto($email));
    $obj->setData_cadastro($data_cadastro);
    $obj->setMenssagem($String->ValidarTexto($menssagem));
    $obj->setAssunto($assunto);

    $d = new Dados();
    $d->dado[0] = $obj->getNome();
    $d->dado[1] = $obj->getSobrenome();
    $d->dado[2] = $obj->getTelefone();
    $d->dado[3] = $obj->getEmail();
    $d->dado[4] = $obj->getAssunto(); 
    $d->dado[5] = $obj->getMenssagem();

    $dao = new DaoContatoPastor();
    if ($dao->inserir($obj)) {

        $msgF = new Menssagem();
        $msgFI = new Menssagem();
        $msgF->CriarMsg($d);
        $msgFI->CriarMsgI($d);
        $phpmailer = new phpmailerUtil();
        $phpmailer->I_Remetente_Destinatários("Teste 01", "01teste@coopnes.com", $obj->getEmail(), $obj->getNome(), 0);
        $phpmailer->IIConfigMsg(true);
        $phpmailer->IIIDefineMensagem($obj->getAssunto(), $msgFI->GetMenssagem()); //$obj->getMenssagem()
        if ($phpmailer->IVEnviar()) {
            $phpmailerD = new phpmailerUtil();
            $phpmailerD->I_Remetente_Destinatários("Teste 01", "01teste@coopnes.com", $obj->getEmail(), $obj->getNome(), 1);
            $phpmailerD->IIConfigMsg(true);
            $phpmailerD->IIIDefineMensagem("Atendimento", $msgF->GetMenssagem());
            if ($phpmailerD->IVEnviar()) {
                header("location:../PT-BR?msg=s");
            } else {
                header("location:../index.php");
            }
        } else {
            header("location:../index.php");
        }
    } else {
        header("location:../index.php");
    }
}
?>