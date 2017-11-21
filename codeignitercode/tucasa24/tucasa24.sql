-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2016 at 02:29 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tucasa24`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `username`, `password`, `last_login`, `created`) VALUES
(11, 'admin@admin.com', 'Admin', 'admin', '13b4405d3b054032be48b40dbf315059', 0, 1449461291);

-- --------------------------------------------------------

--
-- Table structure for table `site_profile`
--

CREATE TABLE IF NOT EXISTS `site_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `company_detail` longtext NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `digg` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lang` varchar(255) NOT NULL,
  `map_address` varchar(255) NOT NULL,
  `last_access` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site_profile`
--

INSERT INTO `site_profile` (`id`, `company_name`, `address1`, `address2`, `company_detail`, `phone`, `phone1`, `email`, `fax`, `facebook`, `googleplus`, `linkedin`, `twitter`, `pinterest`, `digg`, `youtube`, `skype`, `lat`, `lang`, `map_address`, `last_access`) VALUES
(1, 'Tucasa24', 'Madrid, Spain', '', 'Tucasa24.com', '', '', 'info@tucasa24.com', '', '', '', '', '', '0', '0', '', 'tucas24', '', '', 'Irricana, AB T0M 1B0, Canada', '1480651452');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) NOT NULL,
  `site_email` varchar(255) NOT NULL,
  `offline` int(11) NOT NULL,
  `offline_message` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `seotitle` varchar(255) NOT NULL,
  `seokeyword` longtext NOT NULL,
  `seodescription` longtext NOT NULL,
  `last_access` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_title`, `site_email`, `offline`, `offline_message`, `image`, `seotitle`, `seokeyword`, `seodescription`, `last_access`) VALUES
(1, 'Tucasa24.com', 'info@tucasa24.com', 0, '<h1>Now we are offline , thanks for visiting us</h1>', 'tucasalogo.png', 'Tucasa24', 'Tucasa24', 'Tucasa24', '1481132924');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_id`, `post_id`) VALUES
(2, '1', '3'),
(3, '1', '2'),
(4, '1', '4'),
(5, '6', '7'),
(6, '6', '8'),
(7, '6', '9'),
(8, '6', '10'),
(9, '12', '13'),
(11, '18', '19'),
(12, '18', '20'),
(13, '12', '14'),
(14, '12', '15'),
(15, '12', '16'),
(16, '29', '36'),
(17, '31', '37'),
(18, '31', '38'),
(19, '32', '39'),
(20, '32', '40'),
(21, '32', '41'),
(22, '32', '42'),
(23, '32', '43'),
(24, '33', '44'),
(25, '33', '45'),
(26, '33', '46'),
(27, '34', '47'),
(28, '34', '48'),
(29, '34', '49'),
(30, '35', '50'),
(31, '35', '51'),
(32, '52', '53'),
(33, '52', '54'),
(34, '52', '55'),
(35, '52', '56'),
(36, '52', '57'),
(37, '52', '58'),
(38, '60', '61'),
(39, '60', '62'),
(40, '60', '63'),
(41, '65', '66'),
(42, '65', '67'),
(43, '65', '68'),
(44, '65', '69');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address_line1` varchar(255) NOT NULL,
  `address_line2` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `cleaning_products` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_order`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE IF NOT EXISTS `tbl_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `en_title` varchar(255) NOT NULL,
  `es_title` varchar(255) NOT NULL,
  `en_excerpt` varchar(255) NOT NULL,
  `es_excerpt` varchar(255) NOT NULL,
  `en_description` longtext NOT NULL,
  `es_description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `url` longtext NOT NULL,
  `custom_url` longtext NOT NULL,
  `menu_type` int(11) NOT NULL DEFAULT '1',
  `seotitle` mediumtext NOT NULL,
  `seokeyword` longtext NOT NULL,
  `seodescription` longtext NOT NULL,
  `remark` bigint(255) NOT NULL COMMENT '1=menu; 2=slider; 3=post; 4=blog; 5=testimonials; 6=category;',
  `order_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `parent_id`, `route_id`, `slug`, `en_title`, `es_title`, `en_excerpt`, `es_excerpt`, `en_description`, `es_description`, `image`, `background_image`, `url`, `custom_url`, `menu_type`, `seotitle`, `seokeyword`, `seodescription`, `remark`, `order_id`, `status`) VALUES
(1, 0, 1, 'Home-Step', 'Home Step', 'Home Step', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(2, 0, 2, 'Sencillo', 'Simple', 'Sencillo', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>In a single click, choose the day and time and reserve your cleaning service.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>En un solo click escoge el dia y la hora y reserva tu serviciode limpieza.</p>\r\n</body>\r\n</html>', 'sencillo.png', '', '', '', 1, '', '', '', 3, 0, 1),
(3, 0, 3, 'I-eat', 'I eat', 'Comedo', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>A Tucasa24 will arrive promptly at your house. It will leave everything clean and shiny.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Una Tucasa24 llegar&aacute; puntualmente a tu casa. Dejar&aacute; todo limpio y reluciente.</p>\r\n</body>\r\n</html>', 'comedo.png', '', '', '', 1, '', '', '', 3, 0, 1),
(4, 0, 4, 'Of-trust', 'Of trust', 'De Confianza', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Each worker undergoes rigorous selection process</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>cada trabajador pasa us proceso de seleccion rigoroso</p>\r\n</body>\r\n</html>', 'deconfianza.png', '', '', '', 1, '', '', '', 3, 0, 1),
(5, 0, 5, 'Why-does-Mercedes-choose-Tucasa24', 'Why does Mercedes choose Tucasa24?', 'Por qué Mercedes escoge Tucasa24 ?', 'Mercedes Alvarez', 'Mercedes Alvarez', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Women like they have a lot of experience in Mercedes cleaning the home with Tucasa24 they work with norarcos to their measure and they have a stable work Notoros we put in contact them.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Mujeres como tienen mucha experienca in Mercedes limpieza del hogar con Tucasa24 trabajan con norarcos a su medida y tienen un trabajo estable Notoros te ponemos en contacto ellas.</p>\r\n</body>\r\n</html>', 'cleaner.png', '', '', '', 1, '', '', '', 3, 0, 1),
(6, 0, 6, 'Con-tucasa24-trabajan-con', 'With tucasa24 they work with', 'Con tucasa24 trabajan con', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(7, 0, 7, 'We-heal-with-you', 'We heal with you', 'Hejoramos Contigo', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Value the service and help us improve</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>valora el servico y ayudanos a mejorar</p>\r\n</body>\r\n</html>', 'recura_icon.fw_.png', '', '', '', 1, '', '', '', 3, 0, 1),
(8, 0, 8, 'Payo-Insurance', 'Payo Insurance', 'Payo Seguro', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Choose how you want to pay</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Escoje como quiere paga</p>\r\n</body>\r\n</html>', 'card.png', '', '', '', 1, '', '', '', 3, 0, 1),
(9, 0, 9, 'To-your-measure', 'To your measure', 'A tu medida', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>You choose the day and time</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Tu escogs el dia y hora</p>\r\n</body>\r\n</html>', 'clock.png', '', '', '', 1, '', '', '', 3, 0, 1),
(10, 0, 10, 'Social-impact', 'Social impact', 'Impacto Social', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Helps more household employees have a salary</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Ayuda a que mas empleades del hojar tengan un salarco es table</p>\r\n</body>\r\n</html>', 'love.png', '', '', '', 1, '', '', '', 3, 0, 1),
(11, 0, 11, 'Your-home-will-stay-flawless', 'Your home will stay flawless', 'Tu hogar quedará impecable', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'listo.png', 'customers_bg.png', '', '', 1, '', '', '', 3, 0, 1),
(12, 0, 12, 'Ask-what-you-want', 'Ask what you want', 'Pide co que quieras', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(13, 0, 13, 'We-clean-your-home', 'We clean your home', 'Limpiamos tu hogar', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'roombathroom.jpg', '', '', '', 1, '', '', '', 3, 0, 1),
(14, 0, 14, 'We-make-your-purchase', 'We make your purchase', 'Hacemos tu compra', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'shoppingbags.jpg', '', '', '', 1, '', '', '', 3, 0, 1),
(15, 0, 15, 'We-cook-for-the-week', 'We cook for the week', 'cocinamos para ea semana', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'plateforknknife.jpg', '', '', '', 1, '', '', '', 3, 0, 1),
(16, 0, 16, 'We-iron-for-you-to-go-impeccable', 'We iron for you to go impeccable', 'Planchamos para que vayas impecable', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'iron.jpg', '', '', '', 1, '', '', '', 3, 0, 1),
(17, 0, 17, 'Unique-cleaning-for-single-offices', 'Unique cleaning for single offices', 'Limpieza única para oficinas únicas', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Just tell us where and when and we take care of leaving you<br />Work place ready for you!</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>&iexcl;T&uacute; solo dinos d&oacute;nde y cu&aacute;ndo y nosotros nos encargamos de dejar tu<br />lugar de trabajo listo para ti!</p>\r\n</body>\r\n</html>', '', 'bg_women.png', '', '', 1, '', '', '', 3, 0, 1),
(18, 0, 18, 'Testimonials', 'Testimonials', 'Testimonios', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(19, 0, 19, 'Fernanda-G', 'Fernanda G.', 'Fernanda G.', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Tucasa24 adapts to my rhythm of life and gives me freedom.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>tucasa24 se adapta a mi ritmo de vida y me da cibertad.</p>\r\n</body>\r\n</html>', 'default_user.png', '', '', '', 1, '', '', '', 3, 0, 1),
(20, 0, 20, 'Ana-M', 'Ana M.', 'Ana M.', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>The result is spectacular, this house is impeccable</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>El resultado es espectacular, me casa esta impeccable</p>\r\n</body>\r\n</html>', 'default_user1.png', '', '', '', 1, '', '', '', 3, 0, 1),
(21, 0, 0, '', 'Find the ideal help', 'Encuentra la ayuda ideal', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Hire cleaning professionals with immediate confirmation Just tell us where and when and we will take care of the rest</p>\r\n<p>Ask for your first Tucasa24 here!</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Contrata profesionales de limpieza con confirmaci&oacute;n inmediata T&uacute; solo dinos d&oacute;nde y cu&aacute;ndo y nosotros nos encargamos del resto</p>\r\n<p>&iexcl;Pide tu primera Tucasa24 aqu&iac', '', '', '', '', 1, '', '', '', 2, 0, 1),
(22, 23, 0, '', ' How does it work?', '¿Cómo funciona?', '', '', '', '', '', '', 'homework', '', 1, '', '', '', 1, 0, 1),
(23, 0, 0, '', 'Home Menu', 'Menú Inicio', '', '', '', '', '', '', 'site_url()', '', 1, '', '', '', 1, 0, 1),
(24, 23, 0, '', 'Prices', 'Precios', '', '', '', '', '', '', 'pricing', '', 1, '', '', '', 1, 0, 1),
(25, 23, 0, '', 'Frequent questions', 'Preguntas frecuentes', '', '', '', '', '', '', 'faq', '', 1, '', '', '', 1, 0, 1),
(26, 23, 0, '', 'Log in', 'Iniciar sesión', '', '', '', '', '', '', 'login', '', 1, '', '', '', 1, 0, 1),
(27, 23, 0, '', 'Reservation', 'Reserva', '', '', '', '', '', '', 'reservation', '', 1, '', '', '', 1, 0, 1),
(28, 0, 21, 'Frequent-questions', 'Frequent questions', 'Preguntas frecuentes', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(29, 28, 22, 'About-Tucasa24', 'About Tucasa24', 'Sobre Tucasa24', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(31, 28, 24, 'About-Tucasa', 'About Tucasa', 'Sobre las tucasa', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>How can I ask the same tucasa?</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>&iquest;C&oacute;mo puedo pedir a la misma Aliada?</p>\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(32, 28, 25, 'About-payments', 'About payments', 'Sobre los pagos', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(33, 28, 26, 'Satisfaction-Guarantee', 'Satisfaction Guarantee', 'Garantía de satisfacción', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(34, 28, 27, 'Security-and-confidence', 'Security and confidence', 'Seguridad y confianza', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(35, 28, 28, 'Services-offered-by-the-tucasa24', ' Services offered by the tucasa24', 'Servicios que ofrecen las tucasa24', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(36, 0, 29, 'Where-can-I-order-a-Tucasa', 'Where can I order a Tucasa?', '¿Dónde puedo pedir una tucasa?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>At the moment we are only in D.F. And metropolitan area. But we are working very hard to reach the whole Republic.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Por el momento &uacute;nicamente estamos en el D.F. y &aacute;rea metropolitana. Pero estamos trabajando muy duro para llegar a toda la Rep&uacute;blica.</p>\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 3, 0, 1),
(37, 0, 30, 'How-can-I-order-the-same-Tucasa', 'How can I order the same Tucasa?', '¿Cómo puedo pedir a la misma tucasa?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>In Ally we know that once you find the perfect ally, you will not want to change it. That is why, once you positively rate your first ally and request the service on a recurring basis, you can count on your ally each week.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>En Aliada sabemos que una vez encuentras a la aliada perfecta, no querr&aacute;s cambiarla. Por eso, una vez que calificas de manera positiva a tu primer aliada y pides el servicio de manera recurrente,', '', '', '', '', 1, '', '', '', 3, 0, 1),
(38, 0, 31, 'Who-are-tucasa24', 'Who are tucasa24?', '¿Quienes son tucasa24?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>In Allied we work every day to find the best professionals. Our allies are cleaning experts, all of whom have gone through a very rigorous selection process that includes a validation of domicile and previous job references, honesty-focused psychometric tests, and a household clean-up examination. In addition, every ally receives rigorous training developed by Allied experts. You can breathe easy. Our allies are full of confidence.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>En Aliada trabajamos todos los d&iacute;as para encontrar a las mejores profesionales. Nuestras aliadas son expertas en limpieza, todas han pasado por un proceso muy riguroso de selecci&oacute;n que inc', '', '', '', '', 1, '', '', '', 3, 0, 1),
(39, 0, 32, 'Which-cards-does-tucasa24-accept', 'Which cards does tucasa24 accept?', '¿Qué tarjetas acepta tucasa24?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Credit and debit cards, Visa, Master Card and American Express.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>De cr&eacute;dito y d&eacute;bito, Visa, Master Card y American Express.</p>\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 3, 0, 1),
(40, 0, 33, 'Can-I-pay-in-cash', ' Can I pay in cash?', '¿Puedo pagar en efectivo?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>For your safety and that of the ally, payments are made conveniently with your credit card. Not more effective.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Por tu seguridad y la de la aliada, los pagos se hacen comodamente con tu tarjeta de cr&eacute;dito. No m&aacute;s efectivo.</p>\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 3, 0, 1),
(41, 0, 34, 'Are-you-expected-to-tip-my-tucasa24', 'Are you expected to tip my tucasa24?', '¿Se espera que le de propina a mi tucasa24?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>In Allied we want that all the services are of excellent quality, independently of the client or the ally, for that reason we do not foments the tips. We support them directly with everything they need. Just worry about enjoying your home.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>En Aliada queremos que todos los servicios sean de excelente calidad, independientemente del cliente o de la aliada, por eso no fomentamos las propinas. Nosotros las apoyamos directamente con todo lo qu', '', '', '', '', 1, '', '', '', 3, 0, 1),
(42, 0, 35, 'If-the-appointment-lasts-less-more-than-planned', 'If the appointment lasts less / more than planned', 'Si la cita dura menos/más de lo planeado', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Our website helps you determine the number of hours your ally will need to clean depending on the number of rooms and bathrooms in your home. Allies report daily the actual duration of services and based on that information is collected the day after the visit. The minimum duration of services is 3 hours as allies incur significant transportation costs to reach your home.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Nuestro sitio web te ayuda a determinar el n&uacute;mero de horas que tu aliada necesitar&aacute; para limpiar dependiendo del n&uacute;mero de habitaciones y ba&ntilde;os en tu hogar. Las aliadas repor', '', '', '', '', 1, '', '', '', 3, 0, 1),
(43, 0, 36, 'Under-what-concept-can-I-identify-the-charge-to-my-card', 'Under what concept can I identify the charge to my card?', '¿Bajo qué concepto puedo identificar el cargo a mi tarjeta?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>The ally charge will appear on your statement as "Service tucasa24."</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>El cobro de aliada aparecer&aacute; en tu estado de cuenta como "Servicio tucasa24."</p>\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 3, 0, 1),
(44, 0, 37, 'What-is-tucasa24s-satisfaction-policy', 'What is tucasa24''s satisfaction policy?', '¿Cuál es la política de satisfacción de tucasa24?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>We do our best to serve you the way you deserve. Therefore, in case you are not satisfied with the service of your ally, contact us within the following 72 and we will help you reschedule a new appointment with a discount.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Hacemos lo imposible para atenderte de la manera que mereces. Por eso, en caso que no est&eacute;s satisfecho con el servicio de tu aliada, cont&aacute;ctanos dentro de las siguientes 72 y te ayudaremos', '', '', '', '', 1, '', '', '', 3, 0, 1),
(45, 0, 38, 'What-happens-if-my-ally-does-not-arrive', 'What happens if my ally does not arrive?', '¿Qué pasa si mi Aliada no llega?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>In the rare event that your ally is not present at your service, notify us and we will re-arrange a service with discount for the day and time that best suits you. *</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>En el raro caso que tu aliada no se presente a su servicio, notif&iacute;canos y te re-agendaremos un servicio con descuento para el d&iacute;a y hora que m&aacute;s te acomode. *</p>\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 3, 0, 1),
(46, 0, 39, 'Can-I-cancel-reschedule-a-visit', 'Can I cancel / reschedule a visit?', '¿Puedo cancelar/reagendar una visita?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Yes. In your home, your comfort is very important to us. If you need to cancel or reschedule an appointment, you can do so through the website. Enter your user profile, go to the visits history and make the changes you need. If you have any doubts you can find us in the chat of the page, or you can write us to info@tucasa24.com. Changes and cancellations must be made at least 24 hours before the scheduled appointment, so that your ally has the opportunity to accept another service. Services canceled less than 24 hours in advance will be subject to a charge of $ 100 pesos.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>S&iacute;. En tucasa24 tu comodidad es muy imporante para nosotros. Si necesitas cancelar o reagendar una cita, puedes hacerlo por medio de la p&aacute;gina web. Entra a tu perfil de usuario, ve al hist', '', '', '', '', 1, '', '', '', 3, 0, 1),
(47, 0, 40, 'Can-I-leave-the-key-of-my-home-to-my-ally', 'Can I leave the key of my home to my ally?', '¿Puedo dejarle la llave de mi hogar a mi aliada?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Both for your safety and that of the allies, they are not allowed to have the keys to your home. You can schedule an appointment from 7 a.m. to 5 p.m. so you can decide at what time you prefer to receive the service. We recommend that when an ally visits you, an older person at 18 is present for the first 10 minutes so you can explain what you want to focus on during your visit.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Tanto por tu seguridad como la de las aliadas, no est&aacute; permitido que ellas tengan las llaves de tu hogar. Puedes agendar una cita desde las 7 a.m. hasta las 5 p.m. para que decidas en qu&eacute; ', '', '', '', '', 1, '', '', '', 3, 0, 1),
(48, 0, 41, 'Can-I-make-my-reservation-by-phone', 'Can I make my reservation by phone?', '¿Puedo hacer mi reservación por teléfono?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>For your safety, you must make the reservations from the website or the mobile application, so the payment and information of your card are handled automatically and safely.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Por tu seguridad, debes hacer las reservaciones desde la p&aacute;gina web &oacute; la aplicaci&oacute;n m&oacute;vil, as&iacute; el pago y la informaci&oacute;n de tu tarjeta se manejan de manera autom', '', '', '', '', 1, '', '', '', 3, 0, 1),
(49, 0, 42, 'What-if-my-ally-hurts-something', 'What if my ally hurts something?', '¿Qué pasa si mi aliada daña algo?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Please notify us of the situation during the next 72 hours of the mail service so that we can resolve the incident.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Notificanos de la situaci&oacute;n durante las siguientes 72 horas del servicio por correo para que podamos resolver el incidente.</p>\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 3, 0, 1),
(50, 0, 43, 'What-is-included-in-the-service', 'What is included in the service?', '¿Qué está incluido en el servicio?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Our main services are general cleaning (sweeping, mopping, shaking, etc.), washing and ironing. The detail of the services included can be consulted in our cleaning checklist.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Nuestros servicios principales son limpieza general (barrer, trapear, sacudir, etc.), lavado y planchado de ropa. El detalle de los servicios incluidos se puede consultar en nuestro checklist de limpiez', '', '', '', '', 1, '', '', '', 3, 0, 1),
(51, 0, 44, 'Do-they-have-floor-service', 'Do they have floor service?', '¿Tienen servicio de planta?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>At the moment the allies only offer services per hour.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Por el momento las aliadas s&oacute;lo ofrecen servicios por hora.</p>\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 3, 0, 1),
(52, 0, 45, 'How-it-works', 'How it works', 'Por qué funciona', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(53, 0, 46, 'Schedule', 'Schedule', 'Horario', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>You can book your cleaning service whenever you prefer. The 7 days of the week from 8am to 10pm.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Puedes reservar tu servicio de limpieza cuando prefieras. Los 7 d&iacute;as de la semana desde las 8h hasta las 22h.</p>\r\n</body>\r\n</html>', 'clockicon.png', '', '', '', 1, '', '', '', 3, 0, 1),
(54, 0, 47, 'User-Support', 'User Support', 'atención al usuario', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>We serve you from 8am to 9pm Monday through Friday through all channels and weekends by email.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Te atendemos de 8h a 21h de lunes a viernes a trav&eacute;s de todos los canales y los fines de semana por e-mail.</p>\r\n</body>\r\n</html>', 'usersupporticon.png', '', '', '', 1, '', '', '', 3, 0, 1),
(55, 0, 48, 'Pay-it-as-you-want', 'Pay it as you want', 'Abónalo como quieras', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>You can pay by card through the secure payment platform or in cash directly to the person who comes.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Puedes pagar con tarjeta a trav&eacute;s de la plataforma segura de pagos o en efectivo directamente a la persona que venga.</p>\r\n</body>\r\n</html>', 'payiticon.png', '', '', '', 1, '', '', '', 3, 0, 1),
(56, 0, 49, 'Cleaning-products', 'Cleaning products', 'productos de limpieza', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>If you do not have and do not want to go to buy them, you can take the liquid products for &euro; 2 a day.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Si no tienes y no quieres ir a comprarlos, se pueden llevar los productos l&iacute;quidos por 2&euro; al d&iacute;a.</p>\r\n</body>\r\n</html>', 'cleaningproducticon.png', '', '', '', 1, '', '', '', 3, 0, 1),
(57, 0, 50, 'Secure-online-payment', 'Secure online payment', 'Pago seguro online', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Secure online payment system with card, you will not receive any charge until the service is finalized.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Sistema de pago seguro online con tarjeta, no recibir&aacute;s ning&uacute;n cargo hasta que el servicio est&eacute; finalizado.</p>\r\n</body>\r\n</html>', 'securepaymentonlineicon.png', '', '', '', 1, '', '', '', 3, 0, 1),
(58, 0, 51, 'Satisfaction-Guarantee', 'Satisfaction Guarantee', 'Garantía de satisfación', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>If you are not happy with the cleaning service we promise to repeat the service in 48h without charging you any additional cost.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Si no est&aacute;s contento con el servicio de limpieza nos comprometemos a repetir el servicio en 48h sin cobrarte ning&uacute;n coste adicional.</p>\r\n</body>\r\n</html>', 'satisfactiongurantee.png', '', '', '', 1, '', '', '', 3, 0, 1),
(59, 0, 52, 'You-have-doubts', 'You have doubts?', '¿Tienes dudas?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>You have doubts ?</strong> Use our <a data-toggle="modal" data-target="#my_calculationform">calculator</a> to find out how many hours you may need depending on the size of your floor.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p><strong>&iquest;Tienes dudas?</strong> Utiliza nuestra <a data-toggle="modal" data-target="#my_calculationform">calculadora</a> para orientarte sobre cuantas horas puedes necesitar seg&uacute;n el tama&', '', '', '', '', 1, '', '', '', 3, 0, 1),
(60, 0, 53, 'What-includes', 'What includes', 'Qué incluye', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Hire hours and dedicate them to whatever you want</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Contrata horas y ded&iacute;calas a lo que quieras</p>\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(61, 0, 54, 'Kitchen-and-bathrooms', 'Kitchen and bathrooms', 'Cocina y baños', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Dedicate your hours to thoroughly cleaning the kitchen or bathroom. You can order directly at the time of service.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Dedica tus horas a limpiar a fondo la cocina o el ba&ntilde;o. Puedes pedirlo directamente en el momento del servicio.</p>\r\n</body>\r\n</html>', 'kitchennbathroomicon.png', '', '', '', 1, '', '', '', 3, 0, 1),
(62, 0, 55, 'Soils-and-dust', 'Soils and dust', 'Suelos y polvo', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Sweeping or vacuuming the floor of all rooms and dusting furniture, electronics or other surfaces.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Barrer o aspirar y fregar el suelo de todas las estancias y quitar el polvo de los muebles, aparatos electr&oacute;nicos u otras superf&iacute;cies.</p>\r\n</body>\r\n</html>', 'soilsndusticon.png', '', '', '', 1, '', '', '', 3, 0, 1),
(63, 0, 56, 'Griddle', 'Griddle', 'Plancha', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>If you prefer, you can dedicate your hours to ironing. It calculates about 6-8 garments per hour, as long as there are no sheets, tablecloths, ...</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Si lo prefieres, puedes dedicar tus horas a plancha. Calcula unas 6-8 prendas por hora, siempre que no haya s&aacute;banas, manteles, ...</p>\r\n</body>\r\n</html>', 'griddleicon.png', '', '', '', 1, '', '', '', 3, 0, 1),
(64, 0, 57, 'What-does-not-include', 'What does not include?', '¿Qué no incluye?', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Cleaning of upholstery, cleaning of windows in areas with risk of falling (exteriors on high floors), cleaning of curtains, cleaning or repairing the garden, treatments of areas with fungi or dangerous material or extermination of insects.</p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Limpieza de tapicer&iacute;as, limpieza de cristales en zonas con riesgo de caer (exteriores en pisos altos), limpieza de cortinas, limpiar o arreglar el jard&iacute;n, tratamientos de zonas con hongos ', '', '', '', '', 1, '', '', '', 3, 0, 1),
(65, 0, 58, 'What-includes-services', 'What includes services', 'Qué incluye servicios', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 6, 0, 1),
(66, 0, 59, 'Kitchen', 'Kitchen', 'Cocina', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul class="inc_ul">\r\n<li>Clean Exhaust Covers</li>\r\n<li>To put or to empty dishwasher</li>\r\n<li>Clean the faucet</li>\r\n<li>Clean surfaces and microwave</li>\r\n<li>Clean cookers or ceramic hob</li>\r\n<li>To empty trash</li>\r\n<li>Sweep / vacuum and scrub the floor</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul class="inc_ul">\r\n<li>Limpiar cubiertas del extractor</li>\r\n<li>Poner o vaciar lavaplatos</li>\r\n<li>Limpiar la grifer&iacute;a</li>\r\n<li>Limpiar las superficies y el microondas</li>\r\n<li>Limpiar fogones', 'inc1.jpg', '', '', '', 1, '', '', '', 3, 0, 1),
(67, 0, 60, 'Living-room', 'Living room', 'Salón Comedor', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul class="inc_ul">\r\n<li>Cleaning furniture dust</li>\r\n<li>Cushion the sofa and cushions</li>\r\n<li>Remove dust from frames and other decorative elements</li>\r\n<li>Exterior cleaning of furniture and cabinets</li>\r\n<li>Surface cleaning</li>\r\n<li>Remove garbage</li>\r\n<li>Sweep / vacuum and scrub the floor</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul class="inc_ul">\r\n<li>Limpieza polvo del mobiliario</li>\r\n<li>Colocar bien el sof&aacute; y cojines</li>\r\n<li>Quitar polvo de los cuadros y otros elementos decorativos</li>\r\n<li>Limpieza exterior de mue', 'inc2.jpg', '', '', '', 1, '', '', '', 3, 0, 1),
(68, 0, 61, 'Bedroom', 'Bedroom', 'Dormitorio', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul class="inc_ul">\r\n<li>Ventilate</li>\r\n<li>Make the bed</li>\r\n<li>Fold clothes</li>\r\n<li>Clean furniture</li>\r\n<li>Empty wastebaskets</li>\r\n<li>Remove dust from surfaces</li>\r\n<li>Sweep / vacuum and scrub the floor</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul class="inc_ul">\r\n<li>Ventilar</li>\r\n<li>Hacer la cama</li>\r\n<li>Doblar la ropa</li>\r\n<li>Limpiar muebles</li>\r\n<li>Vaciar papeleras</li>\r\n<li>Quitar el polvo de las superficices</li>\r\n<li>Barrer / aspi', 'inc3.jpg', '', '', '', 1, '', '', '', 3, 0, 1),
(69, 0, 62, 'Bath', 'Bath', 'Baño', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul class="inc_ul">\r\n<li>Clean surfaces</li>\r\n<li>Clean Mirrors</li>\r\n<li>Cleaning tiles</li>\r\n<li>Disinfection and cleaning of the bathroom</li>\r\n<li>Clean taps</li>\r\n<li>Cleaning the toilet and bidet</li>\r\n<li>Sweep / vacuum and scrub the floor</li>\r\n</ul>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul class="inc_ul">\r\n<li>Limpiar las superficies</li>\r\n<li>Limpiar espejos</li>\r\n<li>Limpieza azulejos</li>\r\n<li>Desinfecci&oacute;n y limpieza del ba&ntilde;o</li>\r\n<li>Limpiar grifos</li>\r\n<li>Limpieza d', 'inc4.jpg', '', '', '', 1, '', '', '', 3, 0, 1),
(70, 0, 63, 'Service-Available-Citys', 'Available area', 'Disponible en el área metropolitana de Madrid, Barcelona, Valencia, Bilbao y Zaragoza', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Available in the metropolitan area of <strong>Madrid, Barcelona, Valencia, Bilbao and Zaragoza</strong></p>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Disponible en el &aacute;rea metropolitana de <strong> Madrid, Barcelona, Valencia, Bilbao y Zaragoza</strong></p>\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 3, 0, 1),
(71, 0, 64, 'Pricing', 'Pricing', 'Precios', '', '', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-sm-10 col-md-8 col-xs-12 col-sm-offset-1 col-md-offset-2">\r\n<table class="prices-page table">\r\n<thead>\r\n<tr><th>Service Hours</th><th>Price x hour</th><th>Cost of Service</th></tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>From 3 hours</td>\r\n<td>$80</td>\r\n<td>3 hrs. $240</td>\r\n</tr>\r\n<tr>\r\n<td>From 4 hours</td>\r\n<td>$75</td>\r\n<td>4 hrs. $300</td>\r\n</tr>\r\n<tr>\r\n<td>From 5&nbsp;hours</td>\r\n<td>$70</td>\r\n<td>5 hrs. $350</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">\r\n<div class="center">\r\n<ul class="summary">\r\n<li class="checked">Professional ally</li>\r\n<li class="checked">With validated references</li>\r\n<li class="checked">Telephone support</li>\r\n<li class="checked">You only pay the hours used</li>\r\n<li class="checked">The possibility of requesting the same ally each visit</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-md-12 last_btn">\r\n<div class=""><a id="new_user_service" class="btn btn-lg btn-pink track-create-service" href="#" data-area="Prices">Ask for your first Ally here!</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</body>\r\n</html>', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-sm-10 col-md-8 col-xs-12 col-sm-offset-1 col-md-offset-2">\r\n<table class="prices-page table">\r\n<thead>\r\n<tr><th>Horas de Servicio</th><th>Precio x hora</th><th>Costo de Servicio</th></tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>A partir de 3 horas</td>\r\n<td>$80</td>\r\n<td>3 hrs. $240</td>\r\n</tr>\r\n<tr>\r\n<td>A partir de 4 horas</td>\r\n<td>$75</td>\r\n<td>4 hrs. $300</td>\r\n</tr>\r\n<tr>\r\n<td>A partir de 5 horas</td>\r\n<td>$70</td>\r\n<td>5 hrs. $350</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">\r\n<div class="center">\r\n<ul class="summary">\r\n<li class="checked">Aliada profesional</li>\r\n<li class="checked">Con referencias validadas</li>\r\n<li class="checked">Atenci&oacute;n telef&oacute;nica</li>\r\n<li class="checked">S&oacute;lo pagas las horas utilizadas</li>\r\n<li class="checked">La posibilidad de solicitar la misma aliada cada visita</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-md-12 last_btn">\r\n<div class=""><a id="new_user_service" class="btn btn-lg btn-pink track-create-service" href="#" data-area="Prices">&iexcl;Pide tu primera Aliada aqu&iacute;!</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</body>\r\n</html>', '', '', '', '', 1, '', '', '', 3, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_route`
--

CREATE TABLE IF NOT EXISTS `tbl_route` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `route` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `tbl_route`
--

INSERT INTO `tbl_route` (`id`, `slug`, `route`) VALUES
(1, 'Home-Step', 'front/category/1'),
(2, 'Sencillo', 'front/post/2'),
(3, 'I-eat', 'front/post/3'),
(4, 'Of-trust', 'front/post/4'),
(5, 'Why-does-Mercedes-choose-Tucasa24', 'front/post/5'),
(6, 'Con-tucasa24-trabajan-con', 'front/category/6'),
(7, 'We-heal-with-you', 'front/post/7'),
(8, 'Payo-Insurance', 'front/post/8'),
(9, 'To-your-measure', 'front/post/9'),
(10, 'Social-impact', 'front/post/10'),
(11, 'Your-home-will-stay-flawless', 'front/post/11'),
(12, 'Ask-what-you-want', 'front/category/12'),
(13, 'We-clean-your-home', 'front/post/13'),
(14, 'We-make-your-purchase', 'front/post/14'),
(15, 'We-cook-for-the-week', 'front/post/15'),
(16, 'We-iron-for-you-to-go-impeccable', 'front/post/16'),
(17, 'Unique-cleaning-for-single-offices', 'front/post/17'),
(18, 'Testimonials', 'front/category/18'),
(19, 'Fernanda-G', 'front/post/19'),
(20, 'Ana-M', 'front/post/20'),
(21, 'Frequent-questions', 'front/category/28'),
(22, 'About-Tucasa24', 'front/category/29'),
(24, 'About-Tucasa', 'front/category/31'),
(25, 'About-payments', 'front/category/32'),
(26, 'Satisfaction-Guarantee', 'front/category/33'),
(27, 'Security-and-confidence', 'front/category/34'),
(28, 'Services-offered-by-the-tucasa24', 'front/category/35'),
(29, 'Where-can-I-order-a-Tucasa', 'front/post/36'),
(30, 'How-can-I-order-the-same-Tucasa', 'front/post/37'),
(31, 'Who-are-tucasa24', 'front/post/38'),
(32, 'Which-cards-does-tucasa24-accept', 'front/post/39'),
(33, 'Can-I-pay-in-cash', 'front/post/40'),
(34, 'Are-you-expected-to-tip-my-tucasa24', 'front/post/41'),
(35, 'If-the-appointment-lasts-less-more-than-planned', 'front/post/42'),
(36, 'Under-what-concept-can-I-identify-the-charge-to-my-card', 'front/post/43'),
(37, 'What-is-tucasa24s-satisfaction-policy', 'front/post/44'),
(38, 'What-happens-if-my-ally-does-not-arrive', 'front/post/45'),
(39, 'Can-I-cancel-reschedule-a-visit', 'front/post/46'),
(40, 'Can-I-leave-the-key-of-my-home-to-my-ally', 'front/post/47'),
(41, 'Can-I-make-my-reservation-by-phone', 'front/post/48'),
(42, 'What-if-my-ally-hurts-something', 'front/post/49'),
(43, 'What-is-included-in-the-service', 'front/post/50'),
(44, 'Do-they-have-floor-service', 'front/post/51'),
(45, 'How-it-works', 'front/category/52'),
(46, 'Schedule', 'front/post/53'),
(47, 'User-Support', 'front/post/54'),
(48, 'Pay-it-as-you-want', 'front/post/55'),
(49, 'Cleaning-products', 'front/post/56'),
(50, 'Secure-online-payment', 'front/post/57'),
(51, 'Satisfaction-Guarantee', 'front/post/58'),
(52, 'You-have-doubts', 'front/post/59'),
(53, 'What-includes', 'front/category/60'),
(54, 'Kitchen-and-bathrooms', 'front/post/61'),
(55, 'Soils-and-dust', 'front/post/62'),
(56, 'Griddle', 'front/post/63'),
(57, 'What-does-not-include', 'front/post/64'),
(58, 'What-includes-services', 'front/category/65'),
(59, 'Kitchen', 'front/post/66'),
(60, 'Living-room', 'front/post/67'),
(61, 'Bedroom', 'front/post/68'),
(62, 'Bath', 'front/post/69'),
(63, 'Service-Available-Citys', 'front/post/70'),
(64, 'Pricing', 'front/post/71');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE IF NOT EXISTS `tbl_schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `available_time` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_schedule`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_mobile` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `user_type` int(11) NOT NULL COMMENT '0 = users, 1 = staffs',
  `created` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_staff`
--

