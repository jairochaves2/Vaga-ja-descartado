
-- criando o banco de dados de nome tecWebDB
 CREATE DATABASE tecWebDB
 DEFAULT CHARACTER SET utf8
 DEFAULT COLLATE utf8_general_ci;

use tecWebDB;

-- *********************************************************

CREATE TABLE IF NOT EXISTS `dados_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `cpf` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `site` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `tipo_oportunidade` varchar(220) NOT NULL,
  `cargo` varchar(220) NOT NULL,
  `descricao` text NOT NULL,
  `area_atuacao` varchar(50) NOT NULL,
  `perfil_candidato` text NOT NULL,
  `numero_vagas` int(255) NOT NULL,
  `cidade_vaga` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- outra tabela para experimento

create table if not exists wm(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  PRIMARY KEY(id)

)ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


DESC dados_2;

describe wm;

drop table wm;

insert into wm
values
  (default, 'obama'),
  (default, 'wm'),
  (default, 'idel'),
  (default, 'papai');

SELECT * FROM wm;

