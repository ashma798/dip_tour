-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `dip_tour` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dip_tour`;

DROP TABLE IF EXISTS `visa_uae_dubai`;
CREATE TABLE `visa_uae_dubai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prefix` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `address` tinytext NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `employment_status` varchar(255) NOT NULL,
  `intended_arrival_date` date NOT NULL,
  `intended_return_date` date NOT NULL,
  `uae_contact_info` varchar(255) NOT NULL,
  `went_to_uk` varchar(3) NOT NULL,
  `went_to_usa` varchar(3) NOT NULL,
  `went_to_uae` varchar(3) NOT NULL,
  `went_to_south_africa` varchar(3) NOT NULL,
  `went_to_asia` varchar(3) NOT NULL,
  `went_to_others` varchar(3) NOT NULL,
  `went_to_none` varchar(3) NOT NULL,
  `pasport_number` varchar(255) NOT NULL,
  `pasport_expiry` varchar(255) NOT NULL,
  `scanned_data_page` varchar(255) NOT NULL,
  `scanned_data_page_parent_guardian_spouse` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `visa_uae_dubai` (`id`, `prefix`, `first_name`, `last_name`, `dob`, `nationality`, `marital_status`, `gender`, `email`, `telephone`, `address`, `city`, `state`, `employment_status`, `intended_arrival_date`, `intended_return_date`, `uae_contact_info`, `went_to_uk`, `went_to_usa`, `went_to_uae`, `went_to_south_africa`, `went_to_asia`, `went_to_others`, `went_to_none`, `pasport_number`, `pasport_expiry`, `scanned_data_page`, `scanned_data_page_parent_guardian_spouse`) VALUES
(1,	'Ms',	'Suprabha',	'Mishra',	'1985-01-03',	'India',	'single',	'Female',	'suprabha@mailinator.com',	'9999999999',	'aaaaaaaaa',	'Mumbai',	'Maharashtra',	'Self-employed',	'2019-12-20',	'2019-12-28',	'44444444444',	'yes',	'yes',	'yes',	'yes',	'yes',	'yes',	'',	'sasasaSA',	'2022-07-15',	'/tmp/visa_docs/tour3.jpg',	'/tmp/visa_docs/tour2.jpg');

-- 2019-12-07 12:40:45
