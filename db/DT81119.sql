-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `dip_tour` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dip_tour`;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `user_active` int(3) NOT NULL,
  `user_master_type` varchar(30) DEFAULT NULL,
  `redirect_url` varchar(100) DEFAULT NULL,
  `user_created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `username`, `password`, `user_active`, `user_master_type`, `redirect_url`, `user_created`) VALUES
(1,	'DIP',	'Tours',	'admin_diptour@mailinator.com',	'admin',	'2019@dip',	1,	'admin',	'Dashboard',	'2019-11-06 17:13:16');

-- 2019-11-08 19:03:04
