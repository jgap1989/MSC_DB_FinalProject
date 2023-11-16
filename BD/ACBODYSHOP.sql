-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         11.1.2-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla ac_bodyshop_tallermec.agendacitas_ac
CREATE TABLE IF NOT EXISTS `agendacitas_ac` (
  `id_AC` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Cliente` char(50) DEFAULT NULL,
  `Apellido_Cliente` char(50) DEFAULT NULL,
  `Telefono_Cliente` varchar(50) DEFAULT NULL,
  `Servicio_Carro` char(50) DEFAULT NULL,
  `fecha_cita` date DEFAULT NULL,
  `hora_cita` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id_AC`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ac_bodyshop_tallermec.agendacitas_ac: ~50 rows (aproximadamente)
INSERT INTO `agendacitas_ac` (`id_AC`, `Nombre_Cliente`, `Apellido_Cliente`, `Telefono_Cliente`, `Servicio_Carro`, `fecha_cita`, `hora_cita`, `title`, `start`, `end`, `fyh_creacion`, `fyh_update`) VALUES
	(1, 'Shanti', 'Gutierrez', '3411387737', 'Laminado', '2023-11-08', '10:00-14:00', 'Laminado', '2023-11-06', '2023-11-06', '2023-11-06 17:15:34', '2023-11-06 17:15:39'),
	(2, 'Carlos', 'Rincón', '312456987', 'Pintura', '2023-11-07', '10', 'Pintura', '2023-11-07', '2023-11-07', '2023-11-07 23:06:02', '2023-11-07 23:06:04'),
	(3, 'Jesus', 'García', '312789526', 'Pintura', '2023-11-08', '13:00', 'Pintura', '2023-11-08', '2023-11-10', '2023-11-08 17:17:10', '2023-11-08 17:17:12'),
	(4, '', '', '', 'Laminado', '2023-11-09', '19:00 - 20:30', 'Laminado', '2023-11-09', '2023-11-09', '2023-11-09 15:38:24', NULL),
	(5, '', '', '', 'Laminado', '2023-11-09', '19:00 - 20:30', 'Laminado', '2023-11-09', '2023-11-09', '2023-11-09 15:38:51', NULL),
	(6, '', '', '', 'Laminado', '2023-11-09', '19:00 - 20:30', 'Laminado', '2023-11-09', '2023-11-09', '2023-11-09 15:41:17', NULL),
	(7, 'Amany', 'Gutiérrez', '3411060236', 'Laminado', '2023-11-07', '09:00 - 11:30', 'Laminado', '2023-11-07', '2023-11-07', '2023-11-09 15:41:44', NULL),
	(8, 'Oscar', 'Perez', '45879621', 'Laminado', '2023-11-09', '09:00 - 11:30', 'Laminado', '2023-11-09', '2023-11-09', '2023-11-09 15:59:02', NULL),
	(9, 'A', 'B', '1234', 'Laminado', '2023-11-09', '19:00 - 20:30', 'Laminado', '2023-11-09', '2023-11-09', '2023-11-09 16:06:01', NULL),
	(10, 'A', 'T', '2341', 'Laminado', '2023-11-23', '16:00 - 17:30', 'Laminado', '2023-11-23', '2023-11-23', '2023-11-09 16:15:11', NULL),
	(11, '', '', '', 'Laminado', '2023-11-08', '19:00 - 20:30', 'Laminado', '2023-11-08', '2023-11-08', '2023-11-09 16:34:36', NULL),
	(12, 'Noel', 'Garcia', '3124569875', 'Laminado', '2023-12-01', '19:00 - 20:30', 'Laminado', '2023-12-01', '2023-12-01', '2023-11-09 16:35:43', NULL),
	(13, 'emmanuel', 'brizuela', '456321178962', 'Laminado', '2023-11-21', '09:00 - 11:30', 'Laminado', '2023-11-21', '2023-11-21', '2023-11-09 16:43:51', NULL),
	(14, 'A', 'Garcia', '34110602367', 'Laminado', '2023-11-24', '11:30 - 13:00', 'Laminado', '2023-11-24', '2023-11-24', '2023-11-09 16:45:37', NULL),
	(15, 'Noel', 'Perez', '341106023675', 'Laminado', '2023-11-10', '16:00 - 17:30', 'Laminado', '2023-11-10', '2023-11-10', '2023-11-09 17:59:12', NULL),
	(16, 'Jesus', 'Garcia', '312254883', 'Laminado', '2023-11-29', '13:00 - 14:30', 'Laminado', '2023-11-29', '2023-11-29', '2023-11-09 19:05:32', NULL),
	(17, 'as', 'as', '456', 'Laminado', '2023-12-01', '19:00 - 20:30', 'Laminado', '2023-12-01', '2023-12-01', '2023-11-09 19:07:34', NULL),
	(18, 'isaac', 'garcia', '1213245454', 'Laminado', '2023-11-15', '09:00 - 11:30', 'Laminado', '2023-11-15', '2023-11-15', '2023-11-11 23:03:35', NULL),
	(19, 'qw', 'qw', 'a11213', 'Laminado', '2023-11-06', '13:00 - 14:30', 'Laminado', '2023-11-06', '2023-11-06', '2023-11-11 23:05:11', NULL),
	(20, 'Maryse', 'd', '1213245454', 'Laminado', '2023-11-14', '09:00 - 11:30', 'Laminado', '2023-11-14', '2023-11-14', '2023-11-11 23:06:23', NULL),
	(21, 'Maryse', 'd', '1213245454', 'Laminado', '2023-11-13', '09:00 - 11:30', 'Laminado', '2023-11-13', '2023-11-13', '2023-11-11 23:07:17', NULL),
	(22, 'Maryse', 'd', '1213245454', 'Laminado', '2023-11-16', '17:30 - 19:00', 'Laminado', '2023-11-16', '2023-11-16', '2023-11-11 23:09:53', NULL),
	(23, 'isaac', 'garcia', '1213245454', 'Laminado', '2023-12-07', '11:30 - 13:00', 'Laminado', '2023-12-07', '2023-12-07', '2023-11-11 23:10:01', NULL),
	(24, 'Maryse', 'd', '1213245454', 'Laminado', '2023-11-17', '17:30 - 19:00', 'Laminado', '2023-11-17', '2023-11-17', '2023-11-11 23:10:54', NULL),
	(25, 'isaac', 'garcia', '1213245454', 'Laminado', '2023-11-30', '13:00 - 14:30', 'Laminado', '2023-11-30', '2023-11-30', '2023-11-11 23:55:06', NULL),
	(26, 'isaac', 'garcia', '1213245454', 'Laminado', '2023-11-28', '11:30 - 13:00', 'Laminado', '2023-11-28', '2023-11-28', '2023-11-11 23:58:16', NULL),
	(27, 'isaac', 'garcia', '1213245454', 'Laminado', '2023-11-20', '11:30 - 13:00', 'Laminado', '2023-11-20', '2023-11-20', '2023-11-12 00:20:11', NULL),
	(28, 'Maryse', 'd', '1213245454', 'Laminado', '2023-11-22', '09:00 - 11:30', 'Laminado', '2023-11-22', '2023-11-22', '2023-11-12 00:20:21', NULL),
	(29, 'Maryse', 'd', '1213245454', 'Pintura', '2023-11-28', '09:00 - 11:30', 'Pintura', '2023-11-28', '2023-11-28', '2023-11-12 00:21:49', NULL),
	(30, 'jadsiel', 'torres', '1213245454', 'Laminado', '2023-11-24', '11:30 - 13:00', 'Laminado', '2023-11-24', '2023-11-24', '2023-11-12 00:22:55', NULL),
	(31, 'Maryse', 'd', '1213245454', 'Laminado', '2023-11-29', '09:00 - 11:30', 'Laminado', '2023-11-29', '2023-11-29', '2023-11-12 00:23:18', NULL),
	(32, 'Maryse', 'd', '1213245454', 'Laminado', '2023-11-08', '09:00 - 11:30', 'Laminado', '2023-11-08', '2023-11-08', '2023-11-12 00:25:49', NULL),
	(33, 'SHANTI', 'MAGAÑA', '1213245454', 'Laminado', '2023-11-10', '19:00 - 20:30', 'Laminado', '2023-11-10', '2023-11-10', '2023-11-12 00:54:07', NULL),
	(34, 'isaac', 'garcia', '1213245454', 'Otro', '2023-11-15', '17:30 - 19:00', 'Otro', '2023-11-15', '2023-11-15', '2023-11-12 14:06:41', NULL),
	(35, 'SHANTI', 'MAGAÑAAA', '1213245454', 'Laminado', '2023-12-08', '19:00 - 20:30', 'Laminado', '2023-12-08', '2023-12-08', '2023-11-12 14:09:45', NULL),
	(36, 'isaac', 'garcia', '1213245454', 'Laminado', '2023-11-27', '13:00 - 14:30', 'Laminado', '2023-11-27', '2023-11-27', '2023-11-12 14:11:54', NULL),
	(37, 'Maryse', 'Gutierrezzzzz', '1213245454', 'Otro', '2023-12-06', '13:00 - 14:30', 'Otro', '2023-12-06', '2023-12-06', '2023-11-12 14:14:28', NULL),
	(38, 'isaac', 'garciaaaaa', '1213245454', 'Laminado', '2023-12-05', '09:00 - 11:30', 'Laminado', '2023-12-05', '2023-12-05', '2023-11-12 14:15:18', NULL),
	(39, 'isaac', 'garciaaaaaaaaaaxxx', '1213245454', 'Laminado', '2023-12-04', '09:00 - 11:30', 'Laminado', '2023-12-04', '2023-12-04', '2023-11-12 14:28:17', NULL),
	(40, 'Maryse', 'GutierrezAYUDA', '1213245454', 'Laminado', '2023-12-04', '11:30 - 13:00', 'Laminado', '2023-12-04', '2023-12-04', '2023-11-12 14:31:06', NULL),
	(41, 'Maryse', 'dAYUDDDDDDAAAAAA', '1213245454', 'Laminado', '2023-12-05', '13:00 - 14:30', 'Laminado', '2023-12-05', '2023-12-05', '2023-11-12 14:33:10', NULL),
	(42, 'Maryse', 'dAYUDDDDDDAAAAAA', '1213245454', 'Laminado', '2023-12-08', '13:00 - 14:30', 'Laminado', '2023-12-08', '2023-12-08', '2023-11-12 19:29:03', NULL),
	(43, 'isaac', 'garcia', '1213245454', 'Laminado', '2023-12-07', '19:00 - 20:30', 'Laminado', '2023-12-07', '2023-12-07', '2023-11-12 19:30:14', NULL),
	(44, 'isaac', 'garciaAYUDA', '1213245454', 'Laminado', '2023-12-06', '13:00 - 14:30', 'Laminado', '2023-12-06', '2023-12-06', '2023-11-12 19:30:52', NULL),
	(45, 'isaac', 'garciaAAAAAAAAAAAAAA', '1213245454', 'Laminado', '2023-11-17', '09:00 - 11:30', 'Laminado', '2023-11-17', '2023-11-17', '2023-11-12 19:49:23', NULL),
	(46, 'pp', 'Gutierrezaaaaaa', '1213245454', 'Otro', '2023-11-30', '13:00 - 14:30', 'Otro', '2023-11-30', '2023-11-30', '2023-11-12 19:50:06', NULL),
	(47, 'Maryse', 'd', '1213245454', 'Laminado', '2023-12-11', '09:00 - 11:30', 'Laminado', '2023-12-11', '2023-12-11', '2023-11-12 20:48:08', NULL),
	(48, 'AAAAAAA', 'AAAAAAAAAA', '123365', 'Laminado', '2023-11-16', '09:00 - 11:30', 'Laminado', '2023-11-16', '2023-11-16', '2023-11-12 20:57:57', NULL),
	(49, 'AAAAAAAAAAAAAAAA', 'garcia', '1213245454', 'Pintura', '2023-11-16', '19:00 - 20:30', 'Pintura', '2023-11-16', '2023-11-16', '2023-11-15 16:33:55', NULL),
	(50, 'AAAAAAAAAAAAAAAA', 'garcia', '1213245454', 'Pintura', '2023-11-16', '19:00 - 20:30', 'Pintura', '2023-11-16', '2023-11-16', '2023-11-15 16:33:55', NULL);

-- Volcando estructura para tabla ac_bodyshop_tallermec.automovil_a
CREATE TABLE IF NOT EXISTS `automovil_a` (
  `id_A` int(11) NOT NULL AUTO_INCREMENT,
  `linea_A` varchar(50) NOT NULL DEFAULT '0',
  `anio_A` varchar(50) NOT NULL DEFAULT '0',
  `plazas_A` varchar(50) NOT NULL DEFAULT '0',
  `marca_A` varchar(50) DEFAULT NULL,
  `color_A` varchar(50) DEFAULT NULL,
  `tipo_A` varchar(50) DEFAULT NULL,
  `placas_A` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_A`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ac_bodyshop_tallermec.automovil_a: ~4 rows (aproximadamente)
INSERT INTO `automovil_a` (`id_A`, `linea_A`, `anio_A`, `plazas_A`, `marca_A`, `color_A`, `tipo_A`, `placas_A`) VALUES
	(1, 'JOURNEY', '2012', '6', 'DODGE', 'BLANCO', 'CAMIONETA', 'FSC223A'),
	(2, 'MAZDA3', '2023', '4', 'MAZDA', 'NEGRO', 'CARRO', 'FSC223B'),
	(3, 'YARIS', '2018', '4', 'TOYOTA', 'ROJO', 'CARRO', 'FSC2245'),
	(4, 'ACCENT', '2023', '4', 'HUNDAY', 'GRIS', 'CARRO', 'FSCD234');

-- Volcando estructura para tabla ac_bodyshop_tallermec.cliente_c
CREATE TABLE IF NOT EXISTS `cliente_c` (
  `id_C` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_C` char(50) NOT NULL DEFAULT '',
  `apellido_C` char(50) NOT NULL DEFAULT '',
  `correo_C` varchar(70) DEFAULT NULL,
  `nickname_C` varchar(50) DEFAULT NULL,
  `contrasena_C` varchar(15) DEFAULT NULL,
  `fechadisp_C` date DEFAULT NULL,
  PRIMARY KEY (`id_C`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ac_bodyshop_tallermec.cliente_c: ~31 rows (aproximadamente)
INSERT INTO `cliente_c` (`id_C`, `nombre_C`, `apellido_C`, `correo_C`, `nickname_C`, `contrasena_C`, `fechadisp_C`) VALUES
	(1, 'jesus', 'garcia', 'j@garcia.com', NULL, '1234', NULL),
	(2, 'carlos', 'rincon', 'c@rincon.com', NULL, '1234', NULL),
	(3, '', '', '', NULL, '', NULL),
	(4, 'Shanti', 'Gutierrez', 'shantig@gmail.com', NULL, 'abcd', NULL),
	(5, 's', 'g', 'sg@gmail.com', NULL, 'asbc', NULL),
	(6, 's', 'g', 'sg@gmail.com', 'o', 'asbc', NULL),
	(7, 'JesÃºs', 'GarcÃ­a', 'jgp@gmail.com', 'jgp123', '12344', NULL),
	(8, 'JesÃºs', 'GarcÃ­a', 'jgp@gmail.com', 'jgp123', '12344', NULL),
	(9, '1', '2', '3@gmail.com', '4', '4', NULL),
	(10, 'Emmanuel', 'Brizuela', 'emmanuelb@gmail.com', 'emanuel123', '1234', NULL),
	(11, 'a', 'b', 'c@gmail.com', 'a', 'asd', NULL),
	(12, 'Maryse', 'Gutierrez', 'maryseg@gmail.com', 'marysem', '12345', NULL),
	(13, 'Maryse', 'Gutierrez', 'maryseg@gmail.com', 'marysem', '12345', NULL),
	(14, 'Noel', 'Garcia', 'ngar@gmail.com', 'ngarcia', '12345', '2023-10-28'),
	(15, 'adonay', 'gutierrez', 'agtz@gmail.com', 'agtz', '12345', '2023-10-29'),
	(16, 'a', 'b', 'c@gmail.com', 'shantigmagana', 'dVMREjfj59vJw8-', '2023-11-23'),
	(17, 'shanti', 'gutierrez', 'smgm@gmail.com', 'shantim', 'dVMREjfj59vJw8-', '2023-11-16'),
	(18, 'shanti', 'gutierrez', 'smgm@gmail.com', 'shantim', 'dVMREjfj59vJw8-', '2023-11-16'),
	(19, 'shanti', 'gutierrez', 'smgm@gmail.com', 'shantim', 'dVMREjfj59vJw8-', '2023-11-16'),
	(20, 'maria', 'hernandez', 'mh@gmail.com', 'mh23', 'dVMREjfj59vJw8-', '2023-11-02'),
	(21, 'maria', 'hernandez', 'mh@gmail.com', 'mh23', 'dVMREjfj59vJw8-', '2023-11-02'),
	(22, 'ramon', 'aguayo', 'ra@gmail.com', 'ra123', 'dVMREjfj59vJw8-', '2023-11-02'),
	(23, 'ramon', 'aguayo', 'ra@gmail.com', 'ra123', 'dVMREjfj59vJw8-', '2023-11-02'),
	(24, 'jadsiel', 'torres', 'jt124@gmail.com', 'jt23', 'dVMREjfj59vJw8-', '2023-11-09'),
	(25, 'jadsiel', 'torres', 'jt124@gmail.com', 'jt23', 'dVMREjfj59vJw8-', '2023-11-09'),
	(26, 'a', 'b', 'c@gmail.com', 'shantigmagana', 'dVMREjfj59vJw8-', '2023-11-11'),
	(27, 'a', 'b', 'c@gmail.com', 'shantigmagana', 'dVMREjfj59vJw8-', '2023-11-11'),
	(28, 'a', 'b', 'c@gmail.com', 'shantigmagana', 'dVMREjfj59vJw8-', '2023-11-11'),
	(29, 'a', 'b', 'c@gmail.com', 'shantigmagana', 'dVMREjfj59vJw8-', '2023-11-11'),
	(30, 'a', 'b', 'c@gmail.com', 'shantigmagana', 'dVMREjfj59vJw8-', '2023-11-11'),
	(31, 'a', 'b', 'c@gmail.com', 'shantigmagana', 'dVMREjfj59vJw8-', '2023-11-11'),
	(32, 'a', 'b', 'c@gmail.com', 'shantigmagana', 'dVMREjfj59vJw8-', '2023-11-11'),
	(33, 'ramon', 'aguayo', 'ra@gmail.com', 'shantigmagana', 'dVMREjfj59vJw8-', '2023-11-25'),
	(34, 'ramon', 'aguayo', 'ra@gmail.com', 'shantigmagana', 'dVMREjfj59vJw8-', '2023-11-25'),
	(35, 'Maryse', 'Gutierrez', 'maryseg@gmail.com', 'shantigmagana', 'dVMREjfj59vJw8-', '2023-11-16'),
	(36, 'carlos', 'corona', 'carloscor@gmail.com', 'carloscorona', '12345', '2023-11-11');

-- Volcando estructura para tabla ac_bodyshop_tallermec.empleados_e
CREATE TABLE IF NOT EXISTS `empleados_e` (
  `id_E` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_E` varchar(50) DEFAULT NULL,
  `apellido_E` varchar(50) DEFAULT NULL,
  `area_E` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_E`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ac_bodyshop_tallermec.empleados_e: ~17 rows (aproximadamente)
INSERT INTO `empleados_e` (`id_E`, `nombre_E`, `apellido_E`, `area_E`) VALUES
	(1, 'victor', 'santos', 'laminado'),
	(2, 'jose', 'leon', 'pintura');

-- Volcando estructura para tabla ac_bodyshop_tallermec.estado_automovil_ea
CREATE TABLE IF NOT EXISTS `estado_automovil_ea` (
  `id_EA` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_EA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_EA`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ac_bodyshop_tallermec.estado_automovil_ea: ~5 rows (aproximadamente)
INSERT INTO `estado_automovil_ea` (`id_EA`, `descripcion_EA`) VALUES
	(1, 'En espera'),
	(2, 'En proceso'),
	(3, 'Listo'),
	(4, 'Entregado'),
	(5, 'Desconocido');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
