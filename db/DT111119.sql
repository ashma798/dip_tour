-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `dip_tour` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dip_tour`;

DROP TABLE IF EXISTS `car_transfer`;
CREATE TABLE `car_transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pick_up_city` varchar(255) NOT NULL,
  `drop_off_city` varchar(255) NOT NULL,
  `pick_up_date` date NOT NULL,
  `drop_off_date` date NOT NULL,
  `pick_up_time` time NOT NULL,
  `drop_off_time` time NOT NULL,
  `vechical_type` varchar(255) NOT NULL,
  `vehicle_class` varchar(255) NOT NULL,
  `vehicle_transmission_type` varchar(255) NOT NULL,
  `vehicle_air_conditioning` varchar(255) NOT NULL,
  `vehicle_charge_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `car_transfer` (`id`, `pick_up_city`, `drop_off_city`, `pick_up_date`, `drop_off_date`, `pick_up_time`, `drop_off_time`, `vechical_type`, `vehicle_class`, `vehicle_transmission_type`, `vehicle_air_conditioning`, `vehicle_charge_type`) VALUES
(1,	'Kuwait',	'Katar',	'2019-11-16',	'2019-11-23',	'09:00:00',	'01:00:00',	'2',	'Business Class',	'Select',	'Select',	'Select');

DROP TABLE IF EXISTS `flight_search`;
CREATE TABLE `flight_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_search_type` varchar(12) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `departure_date` varchar(50) NOT NULL,
  `return_date` varchar(50) DEFAULT NULL,
  `adult_count` int(11) NOT NULL,
  `child_count` int(11) NOT NULL,
  `infant_count` int(11) NOT NULL,
  `class` varchar(30) NOT NULL,
  `airline` varchar(255) DEFAULT NULL,
  `non_stop_only` varchar(20) DEFAULT NULL,
  `search_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


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


-- 2019-11-10 18:48:01
