
CREATE TABLE `cadastro5` (
    `id` INT NOT NULL `AUTO_INCREMENT` PRIMARY KEY,
    `nome` VARCHAR(50),
    `email` VARCHAR(50),
    `senha` VARCHAR(50)
    
    
);




CREATE TABLE `produto` (
    `id` INT NOT NULL `AUTO_INCREMENT` PRIMARY KEY,
    `nome_prod` VARCHAR(50),
  `tipo_prod_id` int(11) NOT NULL,
    `marca` VARCHAR(50)
    `tamanho` VARCHAR(50),
    `preco `VARCHAR(50),
    `descri` VARCHAR(500)
  
    PRIMARY KEY (`id`)
);


CREATE TABLE IF NOT EXISTS `tipo_prod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;


INSERT INTO `tipo_prod` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Camiseta', '2016-03-25 00:00:00', NULL),
(2, 'Calça', '2016-03-25 00:00:00', NULL),
(3, 'Bermuda', '2016-03-25 00:00:00', '2016-03-27 20:26:18'),
(4, 'Boné', '2016-03-27 20:12:03', '2016-03-27 20:18:11');
