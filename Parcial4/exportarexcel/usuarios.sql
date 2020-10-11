/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : usuarios

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-09-01 20:13:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `codigo` int(5) NOT NULL AUTO_INCREMENT,
  `titular` varchar(255) NOT NULL,
  `nombre_tour` varchar(255) NOT NULL,
  `precio_adulto_venta` varchar(255) NOT NULL,
  `precio_menor_venta` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('34', 'Negro Casas', 'Garrafon', '2000', '1000', '3000');
INSERT INTO `usuarios` VALUES ('35', 'Carlos Lescieur', 'Xplor Fuego', '4000', '3000', '7000');
INSERT INTO `usuarios` VALUES ('36', 'Lazaro Cardenas', 'Xenotes', '2000', '2000', '4000');
INSERT INTO `usuarios` VALUES ('37', 'Vladimir Putin', 'Xelha', '1000', '2000', '3000');
