-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `dip_tour` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dip_tour`;

DROP TABLE IF EXISTS `tour_enquiry`;
CREATE TABLE `tour_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `going_to` varchar(255) NOT NULL,
  `leaving_from` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `adult_qty` int(11) NOT NULL,
  `child_qty` int(11) NOT NULL,
  `infant_qty` int(11) NOT NULL,
  `query` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tour_enquiry` (`id`, `going_to`, `leaving_from`, `name`, `email`, `phone`, `date`, `adult_qty`, `child_qty`, `infant_qty`, `query`) VALUES
(1,	'Venice',	'Sweden',	'partner_details',	'suprabha@mailinator.com',	'9999999999',	'2019-12-21',	4,	4,	4,	'xxsasdadasdas');

-- 2019-12-06 15:40:11
