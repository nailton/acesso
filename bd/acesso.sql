-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `acesso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_profiles`
--

CREATE TABLE IF NOT EXISTS `admin_profiles` (
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `profile_image` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin_profiles`
--

INSERT INTO `admin_profiles` (`user_id`, `first_name`, `last_name`, `profile_image`) VALUES
(770703492, 'Nailton', 'Oliveira', 'http://localhost/acesso/upload_directory/profile_images/770703492-74c40cbffe031199ee70ae6ebf1d9a29/4caa9626-f685-4859-a622-1bd4a95980a5.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `auto_populate`
--

CREATE TABLE IF NOT EXISTS `auto_populate` (
  `vehicle_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(5) NOT NULL,
  `make` varchar(36) NOT NULL,
  `model` varchar(36) NOT NULL,
  PRIMARY KEY (`vehicle_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `auto_populate`
--

INSERT INTO `auto_populate` (`vehicle_id`, `type`, `make`, `model`) VALUES
(1, 'Car', 'Hyundai', 'Sonata'),
(2, 'Car', 'Ford', 'Fiesta'),
(3, 'Truck', 'Toyota', 'Tacoma'),
(4, 'Car', 'Toyota', 'Tercel'),
(5, 'Truck', 'Ford', 'F-150'),
(6, 'Car', 'Honda', 'Civic'),
(7, 'Car', 'Chevrolet', 'Nova'),
(8, 'Car', 'Ford', 'Mustang'),
(9, 'Truck', 'Toyota', 'Tundra'),
(10, 'Truck', 'Ford', 'F-250'),
(11, 'Car', 'Hyundai', 'Accent'),
(12, 'Car', 'Toyota', 'Corolla'),
(13, 'Car', 'Honda', 'Accord'),
(14, 'Car', 'Honda', 'Fit'),
(15, 'Truck', 'Honda', 'Ridgeline'),
(16, 'Truck', 'Ford', 'Ranger'),
(17, 'Truck', 'Chevrolet', 'Colorado'),
(18, 'Truck', 'Chevrolet', 'Silverado'),
(19, 'Car', 'Chevrolet', 'Impala'),
(20, 'Car', 'Chevrolet', 'Corvette'),
(21, 'Car', 'Mazda', 'RX-8'),
(22, 'Car', 'Mazda', 'Miata');

-- --------------------------------------------------------

--
-- Estrutura da tabela `category_menu`
--

CREATE TABLE IF NOT EXISTS `category_menu` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(56) NOT NULL,
  `parent_id` int(10) DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `category_menu`
--

INSERT INTO `category_menu` (`category_id`, `name`, `parent_id`) VALUES
(1, 'Food', 0),
(2, 'Mexican', 1),
(3, 'Italian', 1),
(4, 'American', 1),
(5, 'Tacos', 2),
(6, 'Burritos', 2),
(7, 'Enchiladas', 2),
(8, 'Spaghetti', 3),
(9, 'Lasagna', 3),
(10, 'Hamburgers', 4),
(11, 'Fries', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `customer_profiles`
--

CREATE TABLE IF NOT EXISTS `customer_profiles` (
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `street_address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `profile_image` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `customer_profiles`
--

INSERT INTO `customer_profiles` (`user_id`, `first_name`, `last_name`, `street_address`, `city`, `state`, `zip`, `profile_image`) VALUES
(805947554, 'NailtonA', 'Sousa', 'qe 40', 'brasili', 'ag', '71070511', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `custom_uploader_table`
--

CREATE TABLE IF NOT EXISTS `custom_uploader_table` (
  `user_id` int(10) unsigned NOT NULL,
  `images_data` text,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `denied_access`
--

CREATE TABLE IF NOT EXISTS `denied_access` (
  `IP_address` varchar(45) NOT NULL,
  `time` int(10) NOT NULL,
  `reason_code` tinyint(2) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ips_on_hold`
--

CREATE TABLE IF NOT EXISTS `ips_on_hold` (
  `IP_address` varchar(45) NOT NULL,
  `time` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_errors`
--

CREATE TABLE IF NOT EXISTS `login_errors` (
  `username_or_email` varchar(255) NOT NULL,
  `IP_address` varchar(45) NOT NULL,
  `time` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login_errors`
--

INSERT INTO `login_errors` (`username_or_email`, `IP_address`, `time`) VALUES
('nailtons', '127.0.0.1', 1393529957);

-- --------------------------------------------------------

--
-- Estrutura da tabela `manager_profiles`
--

CREATE TABLE IF NOT EXISTS `manager_profiles` (
  `user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `license_number` varchar(30) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `profile_image` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `manager_profiles`
--

INSERT INTO `manager_profiles` (`user_id`, `first_name`, `last_name`, `license_number`, `phone_number`, `profile_image`) VALUES
(11437096, 'Jose', 'Silva', '', '6565', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `reg_mode` int(1) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `registration`
--

INSERT INTO `registration` (`reg_mode`) VALUES
(0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `temp_registration_data`
--

CREATE TABLE IF NOT EXISTS `temp_registration_data` (
  `reg_id` int(10) unsigned NOT NULL,
  `reg_time` int(10) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `user_pass` mediumtext NOT NULL,
  `user_salt` varchar(32) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `street_address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `username_or_email_on_hold`
--

CREATE TABLE IF NOT EXISTS `username_or_email_on_hold` (
  `username_or_email` varchar(255) NOT NULL,
  `time` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(60) NOT NULL,
  `user_salt` varchar(32) NOT NULL,
  `user_last_login` int(10) DEFAULT NULL,
  `user_login_time` int(10) DEFAULT NULL,
  `user_session_id` varchar(40) DEFAULT NULL,
  `user_date` int(10) NOT NULL,
  `user_modified` int(10) NOT NULL,
  `user_agent_string` varchar(32) DEFAULT NULL,
  `user_level` tinyint(2) unsigned NOT NULL,
  `user_banned` enum('0','1') NOT NULL DEFAULT '0',
  `passwd_recovery_code` varchar(60) DEFAULT NULL,
  `passwd_recovery_date` int(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_salt`, `user_last_login`, `user_login_time`, `user_session_id`, `user_date`, `user_modified`, `user_agent_string`, `user_level`, `user_banned`, `passwd_recovery_code`, `passwd_recovery_date`) VALUES
(11437096, '1Ssdfsdfsd', 'adfg@gmail.com', '$2a$09$e4227ef43d0c5b3583499OqxIeOpb6dTQDuE32S0pOalsysq6b1aG', 'e4227ef43d0c5b3583499d41a55dc980', NULL, NULL, NULL, 1393008381, 1393009690, NULL, 6, '0', NULL, NULL),
(770703492, 'nailtons', 'nailton.rc@gmail.com', '$2a$09$1600cae9bd4ff87f2b669upujGK51.OrHZKbEUiONqdC5KlrAX9bO', '1600cae9bd4ff87f2b66925e0ac18170', 1393529994, 1393529994, 'e004cdf40ee19ae5e4aabfbab7619097', 1390325941, 1392745811, 'a2ae46b8a417b25793ab817bd63c5f5f', 9, '0', NULL, NULL),
(805947554, 'admingeral', 'jose@jose.com.br', '$2a$09$231a26a40cf5047d475a6uPb/CapphucT2dhtnj4QAODlzPfayO9a', '231a26a40cf5047d475a61d308f8a00a', NULL, NULL, NULL, 1393004377, 1393008316, NULL, 1, '0', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
