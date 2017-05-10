/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : task

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-05-10 18:34:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tk_admin
-- ----------------------------
DROP TABLE IF EXISTS `tk_admin`;
CREATE TABLE `tk_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '图像',
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '邮箱',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tk_admin
-- ----------------------------
INSERT INTO `tk_admin` VALUES ('1', 'guoguo', null, 'vMGjoVqqRe8Yja6eWS0tnnSh1qWMzRsZ', '$2y$13$N9aCYMU0fUGMB4GsnLl7dOPkMomSpn24kZyZhNyrbRP1GHw37pAIy', null, 'gufe198@163.com', '10', '1490086694', '1490086694');
INSERT INTO `tk_admin` VALUES ('10', 'test', null, 'ZHQUYNOQKOzez4BPGTG1QDW5QD32PwDw', '$2y$13$tC1hmikjBVVZA1dVNZs/AOPyK44dxrX15kgPeINsPlDKyjiXGoheO', null, 'test@test.com', '10', '1492688606', '1492688606');

-- ----------------------------
-- Table structure for tk_category
-- ----------------------------
DROP TABLE IF EXISTS `tk_category`;
CREATE TABLE `tk_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `category_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '分类的名称',
  `created_at` int(11) unsigned NOT NULL COMMENT '创建时间',
  `updated_at` int(11) unsigned NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tk_category
-- ----------------------------
INSERT INTO `tk_category` VALUES ('1', '测试分类', '0', '0');

-- ----------------------------
-- Table structure for tk_comment
-- ----------------------------
DROP TABLE IF EXISTS `tk_comment`;
CREATE TABLE `tk_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_uid` int(11) unsigned NOT NULL,
  `created_at` int(11) unsigned NOT NULL,
  `updated_at` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tk_comment
-- ----------------------------

-- ----------------------------
-- Table structure for tk_migration
-- ----------------------------
DROP TABLE IF EXISTS `tk_migration`;
CREATE TABLE `tk_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tk_migration
-- ----------------------------
INSERT INTO `tk_migration` VALUES ('m000000_000000_base', '1490081587');
INSERT INTO `tk_migration` VALUES ('m130524_201442_init', '1490081592');
INSERT INTO `tk_migration` VALUES ('m170321_073625_test', '1490081828');
INSERT INTO `tk_migration` VALUES ('m170321_074939_task', '1490083494');
INSERT INTO `tk_migration` VALUES ('m170321_081828_comment', '1490085259');
INSERT INTO `tk_migration` VALUES ('m170321_090228_category', '1490087253');

-- ----------------------------
-- Table structure for tk_nested_category
-- ----------------------------
DROP TABLE IF EXISTS `tk_nested_category`;
CREATE TABLE `tk_nested_category` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `name` varchar(18) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '名称',
  `lft` int(4) NOT NULL,
  `rgt` int(4) NOT NULL,
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tk_nested_category
-- ----------------------------
INSERT INTO `tk_nested_category` VALUES ('1', '商品', '1', '26');
INSERT INTO `tk_nested_category` VALUES ('2', '化妆品', '2', '7');
INSERT INTO `tk_nested_category` VALUES ('3', '食品', '8', '9');
INSERT INTO `tk_nested_category` VALUES ('4', '酒', '10', '15');
INSERT INTO `tk_nested_category` VALUES ('5', '服装', '16', '17');
INSERT INTO `tk_nested_category` VALUES ('6', '家电', '18', '23');
INSERT INTO `tk_nested_category` VALUES ('7', '鞋帽', '24', '25');
INSERT INTO `tk_nested_category` VALUES ('8', '面霜', '3', '4');
INSERT INTO `tk_nested_category` VALUES ('9', '面膜', '5', '6');
INSERT INTO `tk_nested_category` VALUES ('10', '白酒', '11', '12');
INSERT INTO `tk_nested_category` VALUES ('11', '红酒', '13', '14');
INSERT INTO `tk_nested_category` VALUES ('12', '冰箱', '19', '20');
INSERT INTO `tk_nested_category` VALUES ('13', '空调', '21', '22');

-- ----------------------------
-- Table structure for tk_task
-- ----------------------------
DROP TABLE IF EXISTS `tk_task`;
CREATE TABLE `tk_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_uid` int(11) unsigned NOT NULL,
  `status` smallint(6) unsigned NOT NULL DEFAULT '1',
  `created_at` int(11) unsigned NOT NULL,
  `updated_at` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tk_task
-- ----------------------------
INSERT INTO `tk_task` VALUES ('1', '1', '测试标题', '软苏醒', '1', '1', '0', '0');
INSERT INTO `tk_task` VALUES ('4', '1', 'wuenda', 'Many Thanks everyone\nI will resigning from baidu and open up a new chapter of my work in AI .\nDetails here:\n', '1', '1', '1493373584', '1493373584');
INSERT INTO `tk_task` VALUES ('5', '1', 'test title', 'Many Thanks everyone\nI will resigning from baidu and open up a new chapter of my work in AI .\nDetails here:\n', '1', '1', '1493374966', '1493374966');
INSERT INTO `tk_task` VALUES ('6', '1', 'ADSFASDASDFA', 'ASDFASDFASDFASDF', '1', '1', '1494400874', '1494400874');

-- ----------------------------
-- Table structure for tk_test
-- ----------------------------
DROP TABLE IF EXISTS `tk_test`;
CREATE TABLE `tk_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `lft` smallint(6) DEFAULT NULL,
  `rgt` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tk_test
-- ----------------------------
INSERT INTO `tk_test` VALUES ('1', null, null, '9999');

-- ----------------------------
-- Table structure for tk_user
-- ----------------------------
DROP TABLE IF EXISTS `tk_user`;
CREATE TABLE `tk_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tk_user
-- ----------------------------
INSERT INTO `tk_user` VALUES ('1', 'guoguo', null, 'vMGjoVqqRe8Yja6eWS0tnnSh1qWMzRsZ', '$2y$13$N9aCYMU0fUGMB4GsnLl7dOPkMomSpn24kZyZhNyrbRP1GHw37pAIy', null, 'gufe198@163.com', '10', '1490086694', '1490086694');
INSERT INTO `tk_user` VALUES ('10', 'test', null, 'ZHQUYNOQKOzez4BPGTG1QDW5QD32PwDw', '$2y$13$tC1hmikjBVVZA1dVNZs/AOPyK44dxrX15kgPeINsPlDKyjiXGoheO', null, 'test@test.com', '10', '1492688606', '1492688606');
