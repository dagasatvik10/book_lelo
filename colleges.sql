/*
Navicat MySQL Data Transfer

Source Server         : rockstars
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : book_lelo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-22 12:14:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for colleges
-- ----------------------------
DROP TABLE IF EXISTS `colleges`;
CREATE TABLE `colleges` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of colleges
-- ----------------------------
INSERT INTO `colleges` VALUES ('27', 'Ajay Kumar Garg Engineering College', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('28', 'Ideal Institute of Technology', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('29', 'KRISHNA Institute Of Engineering And Technology', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('30', 'Inderprastha Engineering College', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('32', 'Abes Engineering College , Ghaziabad', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('33', 'Raj Kumar Goel Institute Of Technology', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('35', 'Babu Banarsi Das Institute Of Technology', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('36', 'Institute of Management Studies', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('52', 'Institute of Engineering & Technology', 'LUCKNOW');
INSERT INTO `colleges` VALUES ('54', 'Babu Banarasi Das National Institute of Technology & Management', 'LUCKNOW');
INSERT INTO `colleges` VALUES ('77', 'Dr. K.N. Modi Institute Of Engineering & Technology', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('122', 'Shri Ramswaroop Memorial College Of Engineering & Management', 'LUCKNOW');
INSERT INTO `colleges` VALUES ('143', 'Ims Engineering College', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('161', 'Krishna Engineering College', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('195', 'K.N.G.D. Modi Engieering College', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('220', 'Hi-Tech Institute of Engineering & Technology, ', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('240', 'Sunderdeep Engineering College', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('290', 'Abes Institute Of Technology', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('309', 'Raj Kumar Goel Engineering College', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('639', 'Raj Kumar Goel Institute of Technology ( MBA Institute )', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('739', 'JRE Group of Institutions', 'GREATOR NOIDA');
INSERT INTO `colleges` VALUES ('801', 'G.L Bajaj Institute of Management & Research', 'GREATOR NOIDA');
INSERT INTO `colleges` VALUES ('810', 'Greater. Noida College of Technology', 'GREATOR NOIDA');
INSERT INTO `colleges` VALUES ('813', 'Krishna College of Management Ghaziabad', 'GHAZIABAD');
INSERT INTO `colleges` VALUES ('820', 'Ajay Kumar Garg Institute of Management,Ghaziabad', 'GHAZIABAD');
