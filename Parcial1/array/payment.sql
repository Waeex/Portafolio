-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-02-2020 a las 13:29:37
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `payment`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pay`
--

DROP TABLE IF EXISTS `pay`;
CREATE TABLE IF NOT EXISTS `pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_person` int(45) NOT NULL,
  `concept` varchar(45) NOT NULL,
  `pay` int(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pay`
--

INSERT INTO `pay` (`id`, `id_person`, `concept`, `pay`, `date`) VALUES
(1, 1, 'Noviembre', 233, '2019-10-17 03:11:08'),
(2, 1, 'Diciembre', 233, '2019-10-17 03:13:35'),
(3, 2, 'sxed', 234, '2019-10-18 23:59:37'),
(4, 3, 'ENnero', 233, '2019-10-19 18:07:13'),
(5, 1, 'Enero', 500, '2019-10-19 19:48:27'),
(6, 1, 'Enero', 500, '2019-10-19 20:06:20'),
(7, 6, 'Marzo', 100, '2019-10-19 20:25:27'),
(8, 1, 'abril', 700, '2019-10-19 20:39:57'),
(9, 13, 'mayo', 233, '2019-10-19 20:41:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `id_phone` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`id`, `name`, `lastname`, `address`, `id_phone`, `email`, `created_at`) VALUES
(71, 'Miguel Ramirez', 'Perezxd', '1', '9981411260', 'miguelandroit100@gmail.com', '2019-10-19 12:20:38'),
(2, 'Hoyt', 'Harvey', '2', '1-888-989-3310', 'vel.venenatis@Vivamusnibhdolor.net', '2019-10-14 18:11:52'),
(3, 'Tyler', 'Ferrell', '3', '1-669-679-3550', 'Mauris.eu@sem.org', '2019-10-14 18:11:52'),
(4, 'Jessica', 'Gutierrez', '4', '1-492-348-5233', 'et.eros@tortor.com', '2019-10-14 18:11:52'),
(5, 'Uriah', 'Hyde', '5', '1-115-221-6626', 'dictum@elitAliquam.org', '2019-10-14 18:11:52'),
(6, 'Madison', 'Huffman', '6', '1-251-781-7260', 'Curabitur@eu.edu', '2019-10-14 18:11:52'),
(7, 'Shana', 'Rodriguez', '7', '1-370-892-7708', 'ante.bibendum.ullamcorper@nulla.com', '2019-10-14 18:11:52'),
(8, 'Vernon', 'Randolph', '8', '1-341-447-7738', 'purus.ac.tellus@egetmetusIn.com', '2019-10-14 18:11:52'),
(9, 'Sawyer', 'Charles', '9', '1-980-436-3298', 'sem@lacus.ca', '2019-10-14 18:11:52'),
(10, 'Autumn', 'Forbes', '10', '1-403-392-9231', 'Curabitur.egestas@dolorsit.org', '2019-10-14 18:11:52'),
(11, 'Sybil', 'Dillard', '11', '1-773-133-1351', 'Sed.nunc.est@idrisus.com', '2019-10-14 18:11:52'),
(12, 'Velma', 'Parsons', '12', '1-944-268-0847', 'Donec@ametluctus.org', '2019-10-14 18:11:52'),
(13, 'Josephine', 'Hull', '13', '1-986-514-4352', 'lectus.ante.dictum@Duisrisusodio.edu', '2019-10-14 18:11:52'),
(14, 'Marvin', 'Huffman', '14', '1-614-341-4483', 'neque.pellentesque@Aliquam.net', '2019-10-14 18:11:52'),
(15, 'Francis', 'Tucker', '15', '1-387-724-7970', 'natoque.penatibus@mauris.org', '2019-10-14 18:11:52'),
(16, 'Drew', 'York', '16', '1-227-467-4666', 'neque.In@Maurisblanditenim.edu', '2019-10-14 18:11:52'),
(17, 'Reuben', 'Knox', '17', '1-706-252-3462', 'nibh.dolor@Integer.ca', '2019-10-14 18:11:52'),
(18, 'Minerva', 'Prince', '18', '1-835-971-2910', 'a@senectusetnetus.org', '2019-10-14 18:11:52'),
(19, 'Bernard', 'Stewart', '19', '1-855-760-4349', 'magna.Lorem@dictumeleifend.edu', '2019-10-14 18:11:52'),
(20, 'Larissa', 'Kirkland', '20', '1-325-629-5889', 'amet.ante@cubiliaCuraeDonec.com', '2019-10-14 18:11:52'),
(21, 'Wyatt', 'Mckinney', '21', '1-144-195-5752', 'malesuada.malesuada.Integer@bibendumsedest.ca', '2019-10-14 18:11:52'),
(22, 'Elliott', 'Craig', '22', '1-188-681-2385', 'semper@ultricesposuerecubilia.co.uk', '2019-10-14 18:11:52'),
(23, 'Aurora', 'Montgomery', '23', '1-475-616-8557', 'penatibus.et@egettincidunt.edu', '2019-10-14 18:11:52'),
(24, 'Cameran', 'Curtis', '24', '1-315-575-4986', 'a@velvenenatis.co.uk', '2019-10-14 18:11:52'),
(25, 'Shelby', 'Ingram', '25', '1-818-673-2728', 'blandit.mattis@etmalesuadafames.net', '2019-10-14 18:11:52'),
(26, 'Fallon', 'Winters', '26', '1-779-465-3628', 'eu.turpis.Nulla@erat.com', '2019-10-14 18:11:52'),
(27, 'Tatyana', 'Gordon', '27', '1-551-123-7030', 'mus.Proin@Nuncac.com', '2019-10-14 18:11:52'),
(28, 'Lucian', 'Palmer', '28', '1-361-763-3898', 'lacinia.Sed.congue@velit.com', '2019-10-14 18:11:52'),
(29, 'Maite', 'Hudson', '29', '1-974-406-7507', 'Etiam.gravida@interdum.com', '2019-10-14 18:11:52'),
(30, 'Galvin', 'Nash', '30', '1-775-136-1274', 'Quisque.porttitor@nequetellus.org', '2019-10-14 18:11:52'),
(31, 'Uriah', 'Carter', '31', '1-864-579-2926', 'Nunc@at.ca', '2019-10-14 18:11:52'),
(32, 'Charles', 'Mullen', '32', '1-709-568-6025', 'aliquam.eros@Nullamenim.co.uk', '2019-10-14 18:11:52'),
(33, 'Aline', 'Burke', '33', '1-241-653-7346', 'elit.pellentesque.a@euismodenimEtiam.org', '2019-10-14 18:11:52'),
(34, 'Chaney', 'Lynn', '34', '1-713-493-4151', 'Nunc.laoreet@ut.edu', '2019-10-14 18:11:52'),
(35, 'Brenda', 'Gutierrez', '35', '1-595-433-9221', 'dolor.Nulla@nibhenimgravida.org', '2019-10-14 18:11:52'),
(36, 'Velma', 'Doyle', '36', '1-920-143-7447', 'Curae.Phasellus.ornare@perconubia.ca', '2019-10-14 18:11:52'),
(37, 'Ali', 'Zimmerman', '37', '1-698-851-5537', 'auctor.vitae.aliquet@dui.edu', '2019-10-14 18:11:52'),
(38, 'Hilary', 'Santana', '38', '1-476-548-5462', 'dignissim.pharetra@gravidaPraesent.ca', '2019-10-14 18:11:52'),
(39, 'Constance', 'Vaughan', '39', '1-719-589-8159', 'nec@Quisque.ca', '2019-10-14 18:11:52'),
(40, 'Quemby', 'Thornton', '40', '1-261-252-8961', 'nec@duiCras.ca', '2019-10-14 18:11:52'),
(41, 'Odette', 'Singleton', '41', '1-686-251-7009', 'velit.Pellentesque@arcuiaculis.org', '2019-10-14 18:11:52'),
(42, 'Tiger', 'Head', '42', '1-209-555-7671', 'felis@vulputate.com', '2019-10-14 18:11:52'),
(43, 'Emery', 'Parsons', '43', '1-369-276-8427', 'Morbi.non.sapien@sitametconsectetuer.org', '2019-10-14 18:11:52'),
(44, 'Kimberly', 'Cain', '44', '1-435-661-7649', 'Quisque.porttitor@Cras.com', '2019-10-14 18:11:52'),
(45, 'Haley', 'Hood', '45', '1-900-900-0642', 'et.eros@Maecenas.com', '2019-10-14 18:11:52'),
(46, 'Solomon', 'Melton', '46', '1-157-601-7894', 'sit.amet@variusorciin.edu', '2019-10-14 18:11:52'),
(47, 'April', 'Daniels', '47', '1-401-320-4056', 'Cras.convallis.convallis@porttitorerosnec.org', '2019-10-14 18:11:52'),
(48, 'Magee', 'Jackson', '48', '1-698-848-3074', 'convallis@ac.ca', '2019-10-14 18:11:52'),
(49, 'Plato', 'Dunn', '49', '1-615-390-7744', 'tellus@duinec.ca', '2019-10-14 18:11:52'),
(50, 'Ocean', 'Sargent', '50', '1-242-881-4618', 'cursus.in.hendrerit@auctorvitaealiquet.net', '2019-10-14 18:11:52'),
(51, 'Melyssa', 'Hale', '51', '1-749-525-8517', 'ipsum@est.co.uk', '2019-10-14 18:11:52'),
(52, 'Lyle', 'Hughes', '52', '1-675-389-9947', 'natoque.penatibus@euismodestarcu.net', '2019-10-14 18:11:52'),
(53, 'Kay', 'Patton', '53', '1-992-600-0284', 'lectus@euneque.ca', '2019-10-14 18:11:52'),
(54, 'Carlos', 'Smith', '54', '1-702-733-7501', 'odio@dolor.co.uk', '2019-10-14 18:11:52'),
(55, 'Theodore', 'Hendricks', '55', '1-991-408-7582', 'Vivamus@blandit.ca', '2019-10-14 18:11:52'),
(56, 'Tanek', 'Mccullough', '56', '1-895-197-2923', 'quis.pede@amet.com', '2019-10-14 18:11:52'),
(57, 'Nigel', 'Mclaughlin', '57', '1-640-236-3735', 'tincidunt.congue@sedest.net', '2019-10-14 18:11:52'),
(58, 'Hamilton', 'Wolf', '58', '1-619-998-1679', 'sem@elit.com', '2019-10-14 18:11:52'),
(59, 'Bevis', 'Long', '59', '1-970-722-8341', 'adipiscing.elit@Duis.org', '2019-10-14 18:11:52'),
(60, 'Ginger', 'Hernandez', '60', '1-828-240-8875', 'sapien.Nunc@FuscefeugiatLorem.org', '2019-10-14 18:11:52'),
(61, 'Colorado', 'Dotson', '61', '1-899-663-1521', 'in@necleo.net', '2019-10-14 18:11:52'),
(62, 'Uta', 'Whitaker', '62', '1-899-281-5556', 'varius.Nam.porttitor@eueleifend.org', '2019-10-14 18:11:52'),
(63, 'Quin', 'Ingram', '63', '1-383-777-7570', 'eu@nullaIn.co.uk', '2019-10-14 18:11:52'),
(64, 'Brenda', 'Flowers', '64', '1-544-410-8811', 'augue.eu.tellus@felisadipiscingfringilla.edu', '2019-10-14 18:11:52'),
(65, 'Warren', 'Woodard', '65', '1-992-128-5938', 'Duis.gravida.Praesent@tellusimperdiet.ca', '2019-10-14 18:11:52'),
(66, 'Jackson', 'Mendoza', '66', '1-668-741-1254', 'nisl@ornareelitelit.com', '2019-10-14 18:11:52'),
(67, 'Kelsey', 'Dunlap', '67', '1-237-884-0835', 'dui@aliquet.ca', '2019-10-14 18:11:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phone`
--

DROP TABLE IF EXISTS `phone`;
CREATE TABLE IF NOT EXISTS `phone` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `id_person` int(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `phone`
--

INSERT INTO `phone` (`id`, `id_person`, `phone`, `name`) VALUES
(1, 1, 199814112, 'asdasd'),
(2, 1, 199841541, 'Miguel'),
(3, 1, 985784883, 'Yisus'),
(4, 5, 199841541, 'Miguelxdd'),
(5, 5, 985784883, 'Yisusxdd'),
(6, 2, 184151541, 'Qwer'),
(7, 4, 23456789, 'Gerardo'),
(8, 3, 184151541, 'Qwerty'),
(9, 3, 23456789, 'Gerardortiz');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
