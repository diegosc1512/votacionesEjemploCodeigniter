# Host: localhost:33065  (Version 5.5.5-10.4.6-MariaDB)
# Date: 2019-09-29 21:51:36
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "voto"
#

DROP TABLE IF EXISTS `voto`;
CREATE TABLE `voto` (
  `id_voto` int(11) NOT NULL AUTO_INCREMENT,
  `voto` varchar(3) DEFAULT '',
  `departamento` varchar(3) DEFAULT NULL,
  `estado` tinyint(3) DEFAULT 1,
  `f_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id_voto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "voto"
#

INSERT INTO `voto` VALUES (1,'asd',NULL,1,NULL),(2,'asd',NULL,1,NULL),(3,'asd',NULL,1,NULL),(4,'asd',NULL,1,NULL);
