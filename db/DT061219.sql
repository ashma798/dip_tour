-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `dip_tour` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dip_tour`;

DROP TABLE IF EXISTS `tour_package`;
CREATE TABLE `tour_package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `no_of_reviews` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `cost_per_head` int(11) NOT NULL,
  `tour_image` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tour_package` (`id`, `title`, `duration`, `no_of_reviews`, `rating`, `cost_per_head`, `tour_image`, `status`) VALUES
(1,	'Ultimate Louvre: Skip-the-Line Guided Tour',	'2N / 3D',	182676,	3,	5,	'/tmp/tour_images/tour1.jpg',	'1'),
(2,	'This almost brought the Internet to its knees',	'2N / 3D',	18266,	4,	5154,	'/tmp/tour_images/tour2.jpg',	'1'),
(3,	'This almost brought the Internet to its knees',	'2N / 3D',	18266,	5,	5154,	'/tmp/tour_images/tour3.jpg',	'1'),
(4,	'Ultimate Louvre: Skip-the-Line Guided Tour',	'2N / 3D',	18267,	3,	5154,	'/tmp/tour_images/tour1.jpg',	'1'),
(5,	'This almost brought the Internet to its knees',	'2N / 3D',	18266,	4,	5154,	'/tmp/tour_images/tour2.jpg',	'1'),
(6,	'This almost brought the Internet to its knees',	'2N / 3D',	18266,	5,	5154,	'/tmp/tour_images/tour3.jpg',	'1');

-- 2019-12-06 14:23:47
