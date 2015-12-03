DROP TABLE IF EXISTS `estado`;

CREATE TABLE `estado` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table movilidad
# ------------------------------------------------------------

DROP TABLE IF EXISTS `movilidad`;

CREATE TABLE `movilidad` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `placa` varchar(7) NOT NULL DEFAULT '',
  `ruat` varchar(20) NOT NULL DEFAULT '',
  `estado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `estado_id` FOREIGN KEY (`id`) REFERENCES `estado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;

INSERT INTO `estado` (`id`, `descripcion`)
VALUES
	(1,'excelente'),
	(2,'bueno'),
	(3,'regular'),
	(4,'malo');

/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;