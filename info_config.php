<?php

/* 
 
     /////////e-mail
Nome de usuário:	coopnes@coopnes.com.br
Senha:	Use a senha da conta de e-mail.
Servidor de entrada:	br156.hostgator.com.br
Porta IMAP: 993
Porta POP3: 995
Servidor de saída:	br156.hostgator.com.br
Porta SMTP: 465
A autenticação é necessária para IMAP, POP3 e SMTP.

Configurações ftp Do teste Bonfim

FTP nome de usuário: bft@coopnes.com.br
Servidor FTP: ftp.coopnes.com.br
FTP & porta FTPS explícita: 21
senha: coopnes14
  
 
//////////banco   

servidor : Localhost 

nome: coopn501_coopnes
 
 *config SQL -> CREATE DATABASE coopn501_coopnes DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci 
                                       ou
            ALTER DATABASE coopn501_coopnes DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci 
  *User -> coopn501_root
  *senho -> coopn501coopnes2014 

 * criar usuario
CREATE USER 'coopn501_root'@'%' IDENTIFIED BY '***';
GRANT ALL PRIVILEGES ON * . * TO 'coopn501_root'@'%' IDENTIFIED BY '***' WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;
GRANT ALL PRIVILEGES ON `coopn501_coopnes` . * TO 'coopn501_root'@'%';  
  
/////////////////////// 1
        $this->bancoDeDados = "coopn501_coopnes";
        $this->usuario = "coopn501_root";
        $this->servidor = "Localhost";
        $this->senha = "coopn501coopnes2014";
        $this->porta = "3306";
/////////////////////////face		
email 1º - coopnes@coopnes.com.br
senha    - coopnes2014
			
email 2º = suportecoopnes@gmail.com
senha    - 007@Redes

 * gamil * 
coopnes@gmail.com

senha: Coop*2012
  
     */

?>


 