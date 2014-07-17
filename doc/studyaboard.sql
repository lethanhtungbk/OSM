-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2014 at 04:52 AM
-- Server version: 5.6.10
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studyaboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_06_19_111237_create_database', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sa__fields`
--

CREATE TABLE IF NOT EXISTS `sa__fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_type_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sa__fields`
--

INSERT INTO `sa__fields` (`id`, `field_type_id`, `name`, `code`) VALUES
(1, 1, 'Country', 'sa_country'),
(2, 1, 'State', 'sa_state'),
(3, 1, 'Rank', 'sa_rank'),
(4, 1, 'Collage Type', 'sa_collage_type'),
(5, 1, 'Programe Type', 'sa_program_type'),
(6, 3, 'Discipline', 'sa_discipline'),
(7, 1, 'Size', 'sa_size'),
(8, 1, 'Collage House Type', 'sa_collage_house_type');

-- --------------------------------------------------------

--
-- Table structure for table `sa__field_types`
--

CREATE TABLE IF NOT EXISTS `sa__field_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_multi_option` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sa__field_types`
--

INSERT INTO `sa__field_types` (`id`, `name`, `uic`, `is_multi_option`) VALUES
(1, 'Text Field', 'textfield', 0),
(2, 'Text Area', 'textarea', 0),
(3, 'Dropdownbox', 'dropdown', 1),
(4, 'Listbox', 'list', 0),
(5, 'Checkbox', 'checkbox', 1),
(6, 'Radiobox', 'dropdown', 1),
(7, 'DatePicker', 'date', 0),
(8, 'Image', 'image', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sa__field_values`
--

CREATE TABLE IF NOT EXISTS `sa__field_values` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_id` int(11) NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `sa__field_values`
--

INSERT INTO `sa__field_values` (`id`, `field_id`, `value`, `position`) VALUES
(1, 1, 'United State', 0),
(2, 1, 'United Kindom', 0),
(3, 1, 'France', 0),
(4, 1, 'Germany', 0),
(5, 2, 'California', 0),
(6, 2, 'Corondo', 0),
(7, 2, 'Columbia', 0),
(8, 3, '', 0),
(9, 4, 'Public', 0),
(10, 4, 'Private', 0),
(11, 5, 'ETS', 0),
(12, 5, 'University', 0),
(13, 5, 'Collage', 0),
(14, 5, 'Collage', 0),
(15, 6, 'IT', 0),
(16, 6, 'Math', 0),
(17, 6, 'MBA', 0),
(18, 7, '<500', 0),
(19, 7, '500 - 3000', 0),
(20, 7, '3000 - 10000', 0),
(21, 7, '>10000', 0),
(22, 8, 'Dorm', 0),
(23, 8, 'Family House', 0),
(24, 8, 'No House', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sa__groups`
--

CREATE TABLE IF NOT EXISTS `sa__groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sa__groups`
--

INSERT INTO `sa__groups` (`id`, `name`) VALUES
(1, 'Collage Properties');

-- --------------------------------------------------------

--
-- Table structure for table `sa__group_fields`
--

CREATE TABLE IF NOT EXISTS `sa__group_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sa__group_fields`
--

INSERT INTO `sa__group_fields` (`id`, `group_id`, `field_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sa__group_rules`
--

CREATE TABLE IF NOT EXISTS `sa__group_rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `field_order_in_list` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field_order_in_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field_order_in_filter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sa__objects`
--

CREATE TABLE IF NOT EXISTS `sa__objects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sa__objects`
--

INSERT INTO `sa__objects` (`id`, `group_id`, `name`) VALUES
(1, 1, 'Đại học Bách Khoa Hà Nội'),
(3, 1, 'Columbia University');

-- --------------------------------------------------------

--
-- Table structure for table `sa__object_property_values`
--

CREATE TABLE IF NOT EXISTS `sa__object_property_values` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `object_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sa__object_property_values`
--

INSERT INTO `sa__object_property_values` (`id`, `object_id`, `field_id`, `value`) VALUES
(1, 1, 1, '1'),
(2, 1, 2, '1'),
(3, 1, 3, '200'),
(4, 1, 4, '1'),
(5, 1, 5, '1'),
(6, 1, 6, '1'),
(7, 1, 6, '2'),
(8, 1, 6, '3'),
(9, 1, 7, '3'),
(10, 1, 8, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
