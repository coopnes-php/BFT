<?php

class Menssagem {

    private $menssagemFinal;

    public function __construct() {
        
    }

    public function GetMenssagem() {
        return $this->menssagemFinal;
    }

    public function CriarMsg(Dados $d) {
        $this->menssagemFinal = "
<body>  
            <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:15.95pt;background:white'>
<span style='font-size:
10.0pt;font-family:'Arial','sans-serif';mso-fareast-font-family:'Times New Roman';
color:#444444;mso-fareast-language:PT-BR'> site igreja </span>
</p>
<hr>
<br/>
<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
15.95pt;background:white'><span style='font-size:10.0pt;font-family:'Arial','sans-serif';
mso-fareast-font-family:'Times New Roman';color:#444444;background:white;
mso-fareast-language:PT-BR'>Prezado(a) Sr.(<span class=GramE>a)<span
style='color:#333333'>&nbsp; " . $d->dado[0] . " ". $d->dado[1] . "</span>,</span></p>


<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
15.95pt;background:white'><span style='font-size:10.0pt;font-family:'Arial','sans-serif';
mso-fareast-font-family:'Times New Roman';color:#444444;background:white;
mso-fareast-language:PT-BR'>Seu Email foi enviado com Sucesso.&nbsp;</span><b>
 
 <hr> 
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:15.95pt;background:white'><b><span
style='font-size:10.0pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
'Times New Roman';color:#333333;background:white;mso-fareast-language:PT-BR'>Este
é um e-mail automático gerado, não a necessidade responder.&nbsp;</span></b></p>
 
<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
13.85pt'><span class=SpellE><span style='font-size:10.0pt;font-family:'Arial','sans-serif';
mso-fareast-font-family:'Times New Roman';color:black;background:white;
mso-fareast-language:PT-BR'>Att</span></span><span style='font-size:10.0pt;
font-family:'Arial','sans-serif';mso-fareast-font-family:'Times New Roman';
color:black;background:white;mso-fareast-language:PT-BR'>site igreja</span></p>
 
<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
15.95pt;background:white'><b><span style='font-size:10.0pt;font-family:'Arial','sans-serif';
mso-fareast-font-family:'Times New Roman';color:#333333;background:white;
mso-fareast-language:PT-BR'>Site:</span></b><span style='font-size:10.0pt;
font-family:'Arial','sans-serif';mso-fareast-font-family:'Times New Roman';
color:#333333;background:white;mso-fareast-language:PT-BR'>&nbsp;<a
href='http://www.IGREJA.com/' target='_blank'><span style='color:#0068CF'>www.IGREJA.com</span></a></span></p>

<b><span style='font-size:10.0pt;font-family:'Arial','sans-serif';
mso-fareast-font-family:'Times New Roman';color:#333333;mso-fareast-language:
PT-BR'>E-mail:</span></b>

<span style='font-size:10.0pt;font-family:'Arial','sans-serif';
mso-fareast-font-family:'Times New Roman';color:#333333;mso-fareast-language:
PT-BR'>&nbsp;atendimento@IGREJA.com</span>
<br/>


</body>
            ";
    }

    public function CriarMsgI(Dados $d) {
        $this->menssagemFinal = "
<body>  
    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
       text-align:center;line-height:15.95pt;background:white'>
        <span style='font-size:
              10.0pt;font-family:'Arial','sans-serif';mso-fareast-font-family:'Times New Roman';
              color:#444444;mso-fareast-language:PT-BR'></span><br/>
        <span style='font-size:
              10.0pt;font-family:'Arial','sans-serif';mso-fareast-font-family:'Times New Roman';
              color:#444444;mso-fareast-language:PT-BR'>Mensagens Enviado pelo Site</span>
    </p>
    <hr>
    <br/>
    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
       15.95pt;background:white'><span style='font-size:10.0pt;font-family:'Arial','sans-serif';
            mso-fareast-font-family:'Times New Roman';color:#444444;mso-fareast-language:
            PT-BR'>Informação do Contato e a Mensagens:</span></p>

    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
       15.95pt;background:white'><span style='font-size:10.0pt;font-family:'Arial','sans-serif';
            mso-fareast-font-family:'Times New Roman';color:#444444;mso-fareast-language:
            PT-BR'>Nome: &nbsp; &nbsp; &nbsp; " . $d->dado[0] . " ". $d->dado[1] . "</span> </p>

    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
       15.95pt;background:white'><span class=SpellE><span style='font-size:10.0pt;
                               font-family:'Arial','sans-serif';mso-fareast-font-family:'Times New Roman';
                               color:#444444;mso-fareast-language:PT-BR'>Email</span></span><span
            style='font-size:10.0pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
            'Times New Roman';color:#444444;mso-fareast-language:PT-BR'>: &nbsp; &nbsp;
            &nbsp;&nbsp; ".$d->dado[3]."</span> </p>

    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
       15.95pt;background:white'><span style='font-size:10.0pt;font-family:'Arial','sans-serif';
            mso-fareast-font-family:'Times New Roman';color:#444444;mso-fareast-language:
            PT-BR'>Telefone: &nbsp; ".$d->dado[2]."</span> </p>

    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
       15.95pt;background:white'><span style='font-size:10.0pt;font-family:'Arial','sans-serif';
            mso-fareast-font-family:'Times New Roman';color:#444444;mso-fareast-language:
            PT-BR'>Assunto: &nbsp;&nbsp; ".$d->dado[4]."</span> </p>

    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
       15.95pt;background:white'><span class=SpellE><span style='font-size:10.0pt;
                               font-family:'Arial','sans-serif';mso-fareast-font-family:'Times New Roman';
                               color:#444444;mso-fareast-language:PT-BR'>Mensagem :</span></span>
                               <span style='font-size:10.0pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
            'Times New Roman';color:#444444;mso-fareast-language:PT-BR'>
            &nbsp; ".$d->dado[5]."</span> </p>
</body>
            ";
    }

}
?>