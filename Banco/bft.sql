
CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sobrenome` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `assunto` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menssagem` varchar(450) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

