/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : myblog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-03-27 22:16:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catelog_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '目录id',
  `name` varchar(64) NOT NULL COMMENT '文章名称',
  `contents` text NOT NULL COMMENT '文章内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------

-- ----------------------------
-- Table structure for catalogue
-- ----------------------------
DROP TABLE IF EXISTS `catalogue`;
CREATE TABLE `catalogue` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键',
  `pid` int(11) unsigned NOT NULL COMMENT '父级目录',
  `name` varchar(32) NOT NULL COMMENT '目录名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of catalogue
-- ----------------------------
INSERT INTO `catalogue` VALUES ('1', '0', '首页');
INSERT INTO `catalogue` VALUES ('2', '0', 'PHP技术');
INSERT INTO `catalogue` VALUES ('3', '0', '前端技术');
INSERT INTO `catalogue` VALUES ('4', '0', '后端技术');
INSERT INTO `catalogue` VALUES ('5', '0', '数据库技术');
INSERT INTO `catalogue` VALUES ('6', '0', '随笔');
INSERT INTO `catalogue` VALUES ('7', '0', '关于我');
INSERT INTO `catalogue` VALUES ('8', '2', '类库推荐');
INSERT INTO `catalogue` VALUES ('9', '2', '拾遗技巧');
INSERT INTO `catalogue` VALUES ('10', '3', 'HTML');
INSERT INTO `catalogue` VALUES ('11', '3', 'JavaScript');
INSERT INTO `catalogue` VALUES ('12', '3', 'CSS');
INSERT INTO `catalogue` VALUES ('13', '4', 'PHP');
INSERT INTO `catalogue` VALUES ('14', '4', 'Nginx');
INSERT INTO `catalogue` VALUES ('15', '4', 'Apache');
INSERT INTO `catalogue` VALUES ('16', '5', 'MySql');
INSERT INTO `catalogue` VALUES ('17', '5', 'Redis');
INSERT INTO `catalogue` VALUES ('18', '5', 'MongoDB');
