-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.16


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema radiovolt
--

CREATE DATABASE IF NOT EXISTS radiovolt;
USE radiovolt;

--
-- Definition of table `cad_categoria`
--

DROP TABLE IF EXISTS `cad_categoria`;
CREATE TABLE `cad_categoria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cad_categoria`
--

/*!40000 ALTER TABLE `cad_categoria` DISABLE KEYS */;
INSERT INTO `cad_categoria` (`id`,`Nome`) VALUES 
 (1,'PolÃ­tica'),
 (2,'Esporte'),
 (3,'Moda'),
 (5,'Maria'),
 (11,'sfsffsdf'),
 (12,'afdfasfds'),
 (13,'asfdsfdsfds'),
 (14,'asfdsfsdf'),
 (15,'sfdsfdsf'),
 (16,'sfdsfdsf'),
 (17,'fsfdsdfafds'),
 (18,'asdfsfsdfds'),
 (19,'asdfsfds'),
 (20,'sdfdsfdsf'),
 (21,'sdfdsfdsf'),
 (22,'fsdfsfds'),
 (23,'asdfsadfs'),
 (24,'asdfsafdsf'),
 (25,'fdsfsdfd'),
 (26,'sdfsafdsf'),
 (27,'asdfasfdsf'),
 (28,'sdfsfds'),
 (29,'fsfsfds'),
 (30,'fsdfdsfd'),
 (31,'asdfsdfds'),
 (32,'fsfsdfsdf'),
 (33,'asfdsafds'),
 (34,'sadfsfsd'),
 (35,'sdfsafsdfds'),
 (36,'fdsafdsfs'),
 (37,'sdfsafdsa'),
 (38,'safdsfds'),
 (39,'asfdsfd'),
 (40,'adfsafds');
/*!40000 ALTER TABLE `cad_categoria` ENABLE KEYS */;


--
-- Definition of table `cad_noticia`
--

DROP TABLE IF EXISTS `cad_noticia`;
CREATE TABLE `cad_noticia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` longtext NOT NULL,
  `texto` longtext NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cad_noticia`
--

/*!40000 ALTER TABLE `cad_noticia` DISABLE KEYS */;
INSERT INTO `cad_noticia` (`id`,`titulo`,`texto`,`imagem`,`categoria`,`dt_cadastro`) VALUES 
 (1,'<p><span>\"Se cometemos erros, vamos super&aacute;-los\", diz Dilma em v&iacute;deo</span></p>','<p><span>Em v&iacute;deo publicado em sua p&aacute;gina oficial no Facebook, marcando as comemora&ccedil;&otilde;es do feriado da Independ&ecirc;ncia do Brasil na manh&atilde; desta segunda-feira (7), a presidente Dilma Rousseff reconheceu o cen&aacute;rio de crise e sua responsabilidade de apontar solu&ccedil;&otilde;es.&nbsp;Na vis&atilde;o dela, o 7 de Setembro &eacute; o momento ideal para refletir. \"&Eacute; verdade que atravessamos uma fase de dificuldades, enfrentamos problemas e desafios. Sei que &eacute; minha responsabilidade apresentar caminhos e solu&ccedil;&otilde;es para fazer a travessia que deve ser feita. As dificuldades e desafios resultam de um longo per&iacute;odo em que o governo entendeu que deveria gastar o que fosse preciso para garantir o emprego e a renda do trabalhador, a continuidade dos investimentos e dos programas sociais. Agora, temos de reavaliar todas essas medidas e reduzir as que devem ser reduzidas\", afirmou.</span></p>','1442007412.jpg','Politica','2015-09-07 20:44:21'),
 (2,'<p><span style=\"font-size: small;\">Jornal espanhol chama Rog&eacute;rio Ceni de \"Pel&eacute; do gol\"</span></p>','<p class=\"text\">Nesta segunda-feira, o jornal espanhol Marca, um dos maiores, em termos esportivos, da capital Madri, destacou os 25 anos de carreira de Rog&eacute;rio Ceni, do S&atilde;o Paulo, nomeando o goleiro de 42 anos como &lsquo;Pel&eacute; do gol&rsquo;. O destaque se d&aacute; n&atilde;o s&oacute; pelos 18 anos apenas como titular da meta tricolor, mas tamb&eacute;m pelos 131 gols marcados ao longo da carreira, n&uacute;mero que o torna o goleiro mais artilheiro da hist&oacute;ria do futebol.</p>\r\n<p class=\"text\">A mat&eacute;ria publicada pelo jornal faz uma retrospectiva b&aacute;sica de sua sa&iacute;da do Sinop, time do Mato Grosso, e sua chegada ao S&atilde;o Paulo no in&iacute;cio da d&eacute;cada de 1990. Contratado como reserva de Zetti, Ceni debutou em 1993, mas assumiu a titularidade apenas em 1997, ano em que vestiu a camisa da Sele&ccedil;&atilde;o Brasileira pela primeira vez na Copa das Confedera&ccedil;&otilde;es.</p>','1442007428.jpg','Esporte','2015-09-07 20:46:31'),
 (3,'<h1><span style=\"font-size: small;\">Gafe ou fashion? Gr&aacute;vida, Deborah Secco usa decote e fenda</span></h1>','<h2>Looks pretos foram a escolha das famosas na &uacute;ltima semana, em vestidos, blusas e cal&ccedil;as; veja quem acertou e quem cometeu uma gafe fashion</h2>\r\n<p><span>N&atilde;o tem jeito, o preto reina absoluto em produ&ccedil;&otilde;es para festas e para o dia a dia. Famosas apostaram na cor em&nbsp;</span><a href=\"http://moda.terra.com.br/aprenda-a-diferenciar-os-varios-modelos-de-vestidos,46c9a50572949310VgnVCM5000009ccceb0aRCRD.html?linkador=1\">vestidos&nbsp;</a><span>n&atilde;o t&atilde;o b&aacute;sicos,&nbsp;</span><a href=\"http://moda.terra.com.br/saiba-como-diferenciar-o-varios-modelos-de-calcas,0e768ae9c79b8310VgnVCM4000009bcceb0aRCRD.html?linkador=1\">cal&ccedil;as&nbsp;</a><span>compridas, jaquetas e blusas. Claudia Raia,</span><a href=\"http://www.terra.com.br/homem/infograficos/gatas-de-a-a-z/d3/index.htm?linkador=1\">Deborah Secco&nbsp;</a><span>, Andrea Beltr&atilde;o, Anitta e B&aacute;rbara Evans s&atilde;o algumas delas.</span></p>','1442007444.jpg','Esporte','2015-09-07 20:48:45'),
 (4,'<h1 class=\"entry-title\"><span style=\"font-size: small;\">Rock in Rio 2015: Programa&ccedil;&atilde;o completa com atra&ccedil;&otilde;es dos sete dias</span></h1>','<p>Neste ano, a edi&ccedil;&atilde;o brasileira ser&aacute; nos dias 18, 19, 20, 24, 25, 26 e 27 de setembro de 2015, na Cidade do Rock, no Rio (Parque dos Atletas, Av. Salvador Allende), em &aacute;rea com mais de 150 mil metros quadrados. Todos os ingressos est&atilde;o esgotados.</p>\r\n<p>Entre as principais atra&ccedil;&otilde;es est&atilde;o Rihanna, Katy Perry, Queen com Adam Lambert, System of a Down, Slipknot, Metallica, Rod Stewart, Faith no More, John Legend, Korn, Deftones, Steve Vai, Seal, Elton John, M&ouml;tley Cr&uuml;e, Royal Blood e Queens of the Stone Age.</p>\r\n<div class=\"foto componente_materia midia-largura-621\"><img title=\"Rock in Rio: 18 de setembro queen one republic programa&ccedil;&atilde;o atra&ccedil;&otilde;es agenda (Foto: G1)\" src=\"http://s2.glbimg.com/GghSoe-hJ9tq7Wwe1wUAP3iCboo=/s.glbimg.com/jo/g1/f/original/2015/09/02/rockinrio-line-up_18-9.jpg\" alt=\"Rock in Rio: 18 de setembro queen one republic programa&ccedil;&atilde;o atra&ccedil;&otilde;es agenda (Foto: G1)\" width=\"621\" height=\"913\" /></div>\r\n<div class=\"foto componente_materia midia-largura-621\"><img title=\"rock in rio 19 de setembro programa&ccedil;&atilde;o atra&ccedil;&otilde;es metallica royal blood korn (Foto: G1)\" src=\"http://s2.glbimg.com/QigRKcPhzjDgb5QEgB2GBUMZLPY=/s.glbimg.com/jo/g1/f/original/2015/09/02/rockinrio-line-up_19-9.jpg\" alt=\"rock in rio 19 de setembro programa&ccedil;&atilde;o atra&ccedil;&otilde;es metallica royal blood korn (Foto: G1)\" width=\"621\" height=\"913\" /></div>\r\n<div class=\"foto componente_materia midia-largura-621\"><img title=\"rock in rio 20 de setembro rod stewart seal elton john programa&ccedil;&atilde;o atra&ccedil;&otilde;es (Foto: G1)\" src=\"http://s2.glbimg.com/QDGhBWOu3GK1Q8Il2ODYGTGOPfA=/s.glbimg.com/jo/g1/f/original/2015/09/02/rockinrio-line-up_20-09.jpg\" alt=\"rock in rio 20 de setembro rod stewart seal elton john programa&ccedil;&atilde;o atra&ccedil;&otilde;es (Foto: G1)\" width=\"621\" height=\"913\" /></div>\r\n<div class=\"foto componente_materia midia-largura-621\"><img title=\"Rock in Rio 24 de setembro system of a down queens of the stone age atra&ccedil;&otilde;es programa&ccedil;&atilde;o (Foto: G1)\" src=\"http://s2.glbimg.com/84BGC0O_rJoW1TtZ7l2Ss3OojyY=/s.glbimg.com/jo/g1/f/original/2015/09/02/rockinrio-line-up_24-09.jpg\" alt=\"Rock in Rio 24 de setembro system of a down queens of the stone age atra&ccedil;&otilde;es programa&ccedil;&atilde;o (Foto: G1)\" width=\"621\" height=\"880\" /></div>\r\n<div class=\"foto componente_materia midia-largura-621\"><img title=\"rock in rio programa&ccedil;&atilde;o atra&ccedil;&otilde;es slipknot faith no more agenda (Foto: G1)\" src=\"http://s2.glbimg.com/pY4wr84Gf26JWMKo5C1AmdXp11s=/s.glbimg.com/jo/g1/f/original/2015/09/02/rockinrio-line-up_25-09.jpg\" alt=\"rock in rio programa&ccedil;&atilde;o atra&ccedil;&otilde;es slipknot faith no more agenda (Foto: G1)\" width=\"621\" height=\"913\" /></div>\r\n<div class=\"foto componente_materia midia-largura-621\"><img title=\"programa&ccedil;&atilde;o dia 26 de setembro rihanna sam smith atra&ccedil;&otilde;es agenda festival (Foto: G1)\" src=\"http://s2.glbimg.com/c4VEBuaaOLJKNZMSfUCTSUHXt4o=/s.glbimg.com/jo/g1/f/original/2015/09/02/rockinrio-line-up_26-09.jpg\" alt=\"programa&ccedil;&atilde;o dia 26 de setembro rihanna sam smith atra&ccedil;&otilde;es agenda festival (Foto: G1)\" width=\"621\" height=\"882\" /></div>\r\n<div class=\"foto componente_materia midia-largura-621\"><img title=\"Rock in Rio atra&ccedil;&otilde;es programa&ccedil;&atilde;o Katy Perry A-ha agenda festival (Foto: G1)\" src=\"http://s2.glbimg.com/zx2B5p_ulXUKUybp1V2HZng5M2Q=/s.glbimg.com/jo/g1/f/original/2015/09/02/rockinrio-line-up_27-09.jpg\" alt=\"Rock in Rio atra&ccedil;&otilde;es programa&ccedil;&atilde;o Katy Perry A-ha agenda festival (Foto: G1)\" width=\"621\" height=\"892\" /></div>','1442007461.jpg','Esporte','2015-09-08 19:45:17'),
 (5,'<p>fdsfdsfdsfs</p>','<p>fsdfsfsdf</p>','1442007479.jpg','Esporte','2015-09-09 17:54:47'),
 (7,'<p>fsdfdsafdf</p>','<p>sdfsa</p>','1442007515.jpg','Esporte','2015-09-09 18:06:43'),
 (8,'<p>fsfsafsdfdsf</p>','<p>fsfsafsdf</p>','1442007498.jpg','Esporte','2015-09-09 18:14:48'),
 (9,'<p>Laudson</p>','<p><span style=\"font-size: medium; color: #ff0000;\">Teodoro Junior</span></p>','1442007537.jpg','Esporte','2015-09-09 19:38:03');
/*!40000 ALTER TABLE `cad_noticia` ENABLE KEYS */;


--
-- Definition of table `cad_usuario`
--

DROP TABLE IF EXISTS `cad_usuario`;
CREATE TABLE `cad_usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `nivel_usuario` int(10) unsigned NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `redefine_senha` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cad_usuario`
--

/*!40000 ALTER TABLE `cad_usuario` DISABLE KEYS */;
INSERT INTO `cad_usuario` (`id`,`usuario`,`senha`,`data_cadastro`,`nivel_usuario`,`nome_usuario`,`redefine_senha`) VALUES 
 (1,'ADMIN','202cb962ac59075b964b07152d234b70','2015-09-05 21:17:19',2,'admin','n'),
 (2,'TEOD','202cb962ac59075b964b07152d234b70','2015-09-10 19:48:46',1,'Laudson','n'),
 (4,'TESTE','202cb962ac59075b964b07152d234b70','2015-09-11 18:24:09',1,'Maria Eduarda Josefina de Araujo costa e zema','n');
/*!40000 ALTER TABLE `cad_usuario` ENABLE KEYS */;


--
-- Definition of procedure `editar_categoria`
--

DROP PROCEDURE IF EXISTS `editar_categoria`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_categoria`(
           IN _nome VARCHAR (60),
           IN _id INT (10))
BEGIN
UPDATE cad_categoria SET Nome = _nome WHERE id = _id;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `editar_noticia`
--

DROP PROCEDURE IF EXISTS `editar_noticia`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_noticia`(
          IN _titulo LONGTEXT,
          IN _texto LONGTEXT,
          IN _imagem varchar (80),
          IN _categoria varchar (60),
          IN _id INT(10)        )
BEGIN
UPDATE cad_noticia SET titulo = _titulo, texto = _texto, imagem = _imagem, categoria = _categoria  WHERE id = _id;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `editar_senha`
--

DROP PROCEDURE IF EXISTS `editar_senha`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_senha`(

                 IN _senha varchar (45),
                 IN _id int (10))
BEGIN
update cad_usuario set senha = MD5(_senha),redefine_senha = 'n' where id = _id;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `editar_usuario`
--

DROP PROCEDURE IF EXISTS `editar_usuario`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_usuario`(
               IN _id int (10),
               IN _usuario varchar (45),
               IN _senha varchar (45),
               IN _nivel int (10),
               IN _nome varchar (45),
               IN _redefine varchar (1))
BEGIN
update cad_usuario set usuario = _usuario, senha = MD5(_SENHA),nivel_usuario = _nivel,nome_usuario = _nome, redefine_senha = _redefine where id = _id;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `insere_categoria`
--

DROP PROCEDURE IF EXISTS `insere_categoria`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insere_categoria`(
      IN _NOME VARCHAR(60))
BEGIN
INSERT INTO cad_categoria (Nome) VALUES (_NOME);
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `insere_noticia`
--

DROP PROCEDURE IF EXISTS `insere_noticia`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insere_noticia`(
IN _titulo LONGTEXT,
IN _texto LONGTEXT,
IN _imagem VARCHAR (80),
IN _categoria VARCHAR (60))
BEGIN
INSERT INTO cad_noticia (titulo,texto,imagem,categoria,dt_cadastro) VALUES (_titulo,_texto,_imagem,_categoria,now());
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `insere_usuario`
--

DROP PROCEDURE IF EXISTS `insere_usuario`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insere_usuario`(
                IN _usuario varchar (45),
                IN _senha varchar (45),
                IN _nivel int(10),
                IN _nome varchar (45),
                IN _redefine varchar (1))
BEGIN
INSERT INTO cad_usuario (usuario,senha,data_cadastro,nivel_usuario,nome_usuario,redefine_senha) values (UPPER(_usuario),MD5(_senha),now(),_nivel,_nome,_redefine);
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `remove_categoria`
--

DROP PROCEDURE IF EXISTS `remove_categoria`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `remove_categoria`(IN _id INT (10))
BEGIN
DELETE FROM cad_categoria WHERE id = _id;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `remove_noticia`
--

DROP PROCEDURE IF EXISTS `remove_noticia`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `remove_noticia`(
           IN _id INT (10))
BEGIN
DELETE FROM cad_noticia WHERE id = _id;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;

--
-- Definition of procedure `remove_usuario`
--

DROP PROCEDURE IF EXISTS `remove_usuario`;

DELIMITER $$

/*!50003 SET @TEMP_SQL_MODE=@@SQL_MODE, SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `remove_usuario`(
                      IN _id int(10))
BEGIN
DELETE FROM cad_usuario WHERE id = _id;
END $$
/*!50003 SET SESSION SQL_MODE=@TEMP_SQL_MODE */  $$

DELIMITER ;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
