/*
Navicat MySQL Data Transfer

Source Server         : rockstars
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : book_lelo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-22 12:14:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for branches
-- ----------------------------
DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of branches
-- ----------------------------
INSERT INTO `branches` VALUES ('10', 'Computer Sc. & engg.');
INSERT INTO `branches` VALUES ('13', 'Information Technology');
INSERT INTO `branches` VALUES ('20', 'Civil Engg.');
INSERT INTO `branches` VALUES ('21', 'Electrical & Electronics engg.');
INSERT INTO `branches` VALUES ('31', 'Electronics and Communication Engg.');
INSERT INTO `branches` VALUES ('32', 'Electronics & Instrumentation Engg.');
INSERT INTO `branches` VALUES ('40', 'Mechanical Engg.');
