CREATE
DATABASE  IF NOT EXISTS `todo_app` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE
`todo_app`;

CREATE TABLE `user`
(
	`id_user`      int(11) NOT NULL AUTO_INCREMENT,
	`name`         varchar(45) NOT NULL,
	`email`        varchar(45) NOT NULL,
	`password`     varchar(45) NOT NULL,
	`created_date` datetime DEFAULT NULL,
	PRIMARY KEY (`id_user`),
	UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1
