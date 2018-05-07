# Host: localhost  (Version: 5.5.47)
# Date: 2018-05-07 09:21:12
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL DEFAULT '' COMMENT '名字',
  `users` varchar(50) NOT NULL DEFAULT '' COMMENT '姓氏',
  `em` varchar(50) NOT NULL DEFAULT '' COMMENT '邮件',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

#
# Data for table "user"
#

INSERT INTO `user` VALUES (3,'HAHA\t','LIHAI','397336032@qq.com');
