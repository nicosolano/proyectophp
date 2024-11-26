-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 25-11-2024 a las 17:56:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vinillum`
--
CREATE DATABASE IF NOT EXISTS `vinillum` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `vinillum`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albumes`
--

CREATE TABLE `albumes` (
  `id` int(11) NOT NULL,
  `id_decada` int(11) NOT NULL,
  `portada` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `artista` varchar(100) NOT NULL,
  `lanzamiento` date NOT NULL,
  `duracion` time NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `albumes`
--

INSERT INTO `albumes` (`id`, `id_decada`, `portada`, `titulo`, `artista`, `lanzamiento`, `duracion`, `destacado`, `precio`) VALUES
(1, 1, 'artaud.webp', 'Artaud', 'Pescado Rabioso', '1973-05-07', '00:36:20', 1, 36000.00),
(2, 1, 'almendra.webp', 'Almendra', 'Almendra', '1970-01-01', '00:37:03', 0, 37500.00),
(3, 1, 'treinta_minutos.webp', 'Treinta Minutos de Vida', 'Moris', '1970-05-27', '00:32:24', 0, 44000.00),
(4, 1, 'pappos_blues_2.webp', 'Pappo\'s Blues, Vol.2', 'Pappo\'s Blues', '1972-11-25', '00:30:57', 0, 31750.00),
(5, 1, 'la_grasa.webp', 'La Grasa de las Capitales', 'Serú Girán', '1979-08-19', '00:41:31', 0, 29050.00),
(6, 1, 'pequenas_anecdotas.webp', 'Pequeñas Anécdotas sobre las Instituciones', 'Sui Generis', '1974-01-01', '00:48:52', 0, 42000.00),
(7, 2, 'clics_modernos.webp', 'Clics Modernos', 'Charly García', '1983-11-05', '00:34:15', 1, 51000.00),
(8, 2, 'oktubre.webp', 'Oktubre', 'Patricio Rey y sus Redonditos de Ricota', '1986-01-10', '00:41:09', 0, 37800.00),
(9, 2, 'divididos.webp', 'Divididos por la Felicidad', 'Sumo', '1985-04-29', '00:38:24', 0, 28400.00),
(10, 2, 'kamikaze.webp', 'Kamikaze', 'Luis Alberto Spinetta', '1982-04-08', '00:37:05', 0, 34100.00),
(11, 2, 'locura.webp', 'Locura', 'Virus', '1985-04-29', '00:33:58', 0, 55000.00),
(12, 2, 'vasos_besos.webp', 'Vasos y Besos', 'Los Abuelos de la Nada', '1983-12-09', '00:37:20', 0, 32900.00),
(13, 3, 'la_era.webp', 'La Era de la Boludez', 'Divididos', '1993-01-01', '00:51:24', 1, 26350.00),
(14, 3, 'cancion_animal.webp', 'Canción Animal', 'Soda Stereo', '1990-10-09', '00:41:23', 0, 24700.00),
(15, 3, 'alta_suciedad.webp', 'Alta Suciedad', 'Andrés Calamaro', '1997-01-01', '00:55:03', 0, 33400.00),
(16, 3, 'el_amor.webp', 'El Amor Después del Amor', 'Fito Páez', '1992-02-01', '01:02:00', 0, 36000.00),
(17, 3, '3er_arco.webp', '3er Arco', 'Los Piojos', '1996-01-01', '00:56:44', 0, 49000.00),
(18, 3, 'despedazado.webp', 'Despedazado por Mil Partes', 'La Renga', '1996-01-01', '00:54:03', 0, 29900.00),
(19, 4, 'jessico.webp', 'Jessico', 'Babasónicos', '2001-07-25', '00:41:09', 1, 32600.00),
(20, 4, 'el_numero.webp', 'El Número Imperfecto', 'Catupecu Machu', '2004-01-01', '00:00:00', 0, 47000.00),
(21, 4, 'el_milagro.webp', 'Esperando el Milagro', 'Las Pelotas', '2003-07-01', '00:50:33', 0, 54000.00),
(22, 4, 'rock_n_roll.webp', 'No Es Sólo Rock \'n\' Roll', 'Intoxicados', '2003-01-01', '01:00:00', 0, 41000.00),
(23, 4, 'rocanroles.webp', 'Rocanroles sin Destino', 'Callejeros', '2004-09-24', '00:51:48', 0, 45600.00),
(24, 4, 'fuerza.webp', 'Fuerza Natural', 'Gustavo Cerati', '2009-03-12', '00:56:19', 0, 39800.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `id_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`id`, `titulo`, `id_album`) VALUES
(1, 'Todas las Hojas Son del Viento', 1),
(2, 'Cementerio Club', 1),
(3, 'Por', 1),
(4, 'Superchería', 1),
(5, 'La Sed Verdadera', 1),
(6, 'Cantata de Puentes Amarillos', 1),
(7, 'Bajan', 1),
(8, 'A Starosta, el Idiota', 1),
(9, 'Las Habladurías del Mundo', 1),
(10, 'Muchacha (Ojos de Papel)', 2),
(11, 'Color Humano', 2),
(12, 'Figuración', 2),
(13, 'Ana No Duerme', 2),
(14, 'Fermín', 2),
(15, 'Plegaria para un Niño Dormido', 2),
(16, 'A Estos Hombres Tristes', 2),
(17, 'Que el Viento Borró tus Manos', 2),
(18, 'Laura Va', 2),
(19, 'El Oso', 3),
(20, 'Ayer Nomás', 3),
(21, 'Pato Trabaja en una Carnicería', 3),
(22, 'De Nada Sirve', 3),
(23, 'Esto Va para Atrás', 3),
(24, 'En una Tarde de Sol', 3),
(25, 'El Piano de Olivos', 3),
(26, 'Escúchame entre el Ruido', 3),
(27, 'El Tren de las 16', 4),
(28, 'Llegará la Paz', 4),
(29, 'Insoluble', 4),
(30, 'Tema I', 4),
(31, 'Desconfío', 4),
(32, 'Pobre Juan', 4),
(33, 'Blues de Santa Fe', 4),
(34, 'Tumba (Cementerio)', 4),
(35, 'La Grasa de las Capitales', 5),
(36, 'San Francisco y el Lobo', 5),
(37, 'Perro Andaluz', 5),
(38, 'Frecuencia Modulada', 5),
(39, 'Viernes, 3AM', 5),
(40, 'Noche de Perros', 5),
(41, 'Los Sobrevivientes', 5),
(42, 'Paranoia y Soledad', 5),
(43, 'Canción de Hollywood', 5),
(44, 'Instituciones', 6),
(45, 'Tango en Segunda', 6),
(46, 'El Show de los Muertos', 6),
(47, 'Las Increíbles Aventuras del Señor Tijeras', 6),
(48, 'Pequeñas Delicias de la Vida Conyugal', 6),
(49, 'El Tuerto y los Ciegos', 6),
(50, 'Música de Fondo para Cualquier Fiesta Animada', 6),
(51, 'Tema de Natalio', 6),
(52, 'Para Quién Canto Yo Entonces', 6),
(53, 'Juan Represión', 6),
(54, 'Botas Locas', 6),
(55, 'Nos Siguen Pegando Abajo', 7),
(56, 'No Soy un Extraño', 7),
(57, 'Dos Cero Uno', 7),
(58, 'Nuevos Trapos', 7),
(59, 'Bancate Ese Defecto', 7),
(60, 'No me Deja Salir', 7),
(61, 'Los Dinosaurios', 7),
(62, 'Plateado sobre Plateado (Huellas en el Mar)', 7),
(63, 'Ojos de Video Tape', 7),
(64, 'Fuegos de Octubre', 8),
(65, 'Preso en mi Ciudad', 8),
(66, 'Música para Pastillas', 8),
(67, 'Semen-Up', 8),
(68, 'Divina Tv. Führer', 8),
(69, 'Motor Psico', 8),
(70, 'Ji Ji Ji', 8),
(71, 'Canción para Naufragios', 8),
(72, 'Ya Nadie Va a Escuchar tu Remera', 8),
(73, 'La Rubia Tarada', 9),
(74, 'Mula Plateada', 9),
(75, 'No Acabes', 9),
(76, 'Regtest', 9),
(77, 'El Reggae de Paz y Amor', 9),
(78, 'Debede', 9),
(79, 'Mejor No Hablar de Ciertas Cosas', 9),
(80, 'Divididos por la Felicidad', 9),
(81, 'No Duermas Más', 9),
(82, 'Kaya', 9),
(83, 'Kamikaze', 10),
(84, 'Ella También', 10),
(85, 'Águila de Trueno (Parte I)', 10),
(86, 'Águila de Trueno (Parte II)', 10),
(87, 'Almendra', 10),
(88, 'Barro Tal Vez', 10),
(89, '¡Ah!... Basta de Pensar', 10),
(90, 'La Aventura de la Abeja Reina', 10),
(91, 'Y tu Amor Es una Vieja Medalla', 10),
(92, 'Quedándote o Yéndote', 10),
(93, 'Cosas Marcadas', 10),
(94, 'Pronta Entrega', 11),
(95, 'Tomo lo que Encuentro', 11),
(96, 'Pecados para Dos', 11),
(97, 'Destino Circular', 11),
(98, 'Luna de Miel en la Mano', 11),
(99, 'Dicha Feliz', 11),
(100, 'Sin Disfraz', 11),
(101, 'Lugares Comunes', 11),
(102, 'No se Desesperen', 12),
(103, 'Así Es el Calor', 12),
(104, 'Yo Soy tu Bandera', 12),
(105, 'Sintonía Americana', 12),
(106, 'Espía de Dios', 12),
(107, 'Cucarachón de Tribunal', 12),
(108, 'Vamos al Ruedo', 12),
(109, 'Mil Horas', 12),
(110, 'Hermana Teresa', 12),
(111, 'Chalamán', 12),
(112, 'Mundos in Mundos', 12),
(113, 'Salir a Asustar', 13),
(114, 'Ortega y Gases', 13),
(115, 'El Arriero', 13),
(116, 'Salir a Comprar', 13),
(117, '¿Qué Ves?', 13),
(118, 'Pestaña de Camello', 13),
(119, 'Rasputin / Hey Jude', 13),
(120, 'Dame un Limón', 13),
(121, 'Paisano de Hurlingham', 13),
(122, 'Cristófolo Cacarnu', 13),
(123, 'Indio, Dejá el Mezcal', 13),
(124, 'Huelga de Amores', 13),
(125, 'Tajo C', 13),
(126, 'Pestaña de Camello', 13),
(127, '(En) El Séptimo Día', 14),
(128, 'Un Millón de Años Luz', 14),
(129, 'Canción Animal', 14),
(130, '1990 (Mil Nueve Noventa)', 14),
(131, 'Sueles Dejarme Solo', 14),
(132, 'De Música Ligera', 14),
(133, 'Hombre al Agua', 14),
(134, 'Entre Caníbales', 14),
(135, 'Té para 3', 14),
(136, 'Cae el Sol', 14),
(137, 'Alta Suciedad', 15),
(138, 'Todo lo Demás También', 15),
(139, 'Donde Manda Marinero', 15),
(140, 'Loco', 15),
(141, 'Flaca', 15),
(142, '¿Quién Asó la Manteca?', 15),
(143, 'Media Verónica', 15),
(144, 'El Tercio de los Sueños', 15),
(145, 'Comida China', 15),
(146, 'Elvis Está Vivo', 15),
(147, 'Me Arde', 15),
(148, 'Crímenes Perfectos', 15),
(149, 'Nunca Es Igual', 15),
(150, 'El Novio del Olvido', 15),
(151, 'El Amor Después del Amor', 16),
(152, 'Dos Días en la Vida', 16),
(153, 'La Verónica', 16),
(154, 'Tráfico por Katmandú', 16),
(155, 'Pétalo de Sal', 16),
(156, 'Sasha, Sissí y el Círculo de Baba', 16),
(157, 'Un Vestido y un Amor', 16),
(158, 'Tumbas de la Gloria', 16),
(159, 'La Rueda Mágica', 16),
(160, 'Creo', 16),
(161, 'Detrás del Muro de los Lamentos', 16),
(162, 'La Balada de Donna Helena', 16),
(163, 'Brillante sobre el Mic', 16),
(164, 'A Rodar mi Vida', 16),
(165, 'Esquina Libertad', 17),
(166, 'Taxi Boy', 17),
(167, 'El Farolito', 17),
(168, 'Shup Shup', 17),
(169, 'Al Atardecer', 17),
(170, 'Qué Decís', 17),
(171, 'Don\'t Say Tomorrow', 17),
(172, 'Todo Pasa', 17),
(173, 'Intro Marado', 17),
(174, 'Marado', 17),
(175, 'Gris', 17),
(176, 'Muévelo', 17),
(177, 'Verano del 92', 17),
(178, 'Desnudo para Siempre (o Despedazado)', 18),
(179, 'A la Carga mi Rock\'n Roll', 18),
(180, 'El Final Es en Donde Partí', 18),
(181, 'Balada del Diablo y la Muerte', 18),
(182, 'Cuando Vendrán', 18),
(183, 'Psilosibe Mexicana', 18),
(184, 'Paja Brava', 18),
(185, 'Lo Frágil de la Locura', 18),
(186, 'Veneno', 18),
(187, 'El Viento Todo Empuja', 18),
(188, 'Hablando de la Libertad', 18),
(189, 'Los Calientes', 19),
(190, 'Fizz', 19),
(191, 'Deléctrico', 19),
(192, 'Soy Rock', 19),
(193, 'Pendejo', 19),
(194, 'El Loco', 19),
(195, 'La Fox', 19),
(196, 'Tóxica', 19),
(197, 'Yoli', 19),
(198, 'Rubí', 19),
(199, 'Camarín', 19),
(200, 'Atomicum', 19),
(201, 'Magia Veneno', 20),
(202, 'Preludio al Filo en el Umbral', 20),
(203, 'Muéstrame los Dientes', 20),
(204, 'Acaba el Fin', 20),
(205, 'Plan B: Anhelo de Satisfacción', 20),
(206, 'En los Sueños', 20),
(207, 'A Veces Vuelvo', 20),
(208, 'Sol Infierno', 20),
(209, 'Óxido en el Aire', 20),
(210, 'El Número Imperfecto', 20),
(211, 'Refugio', 20),
(212, 'Será', 21),
(213, 'Mareada', 21),
(214, 'Tomás X', 21),
(215, 'Desaparecido', 21),
(216, 'Día Feliz', 21),
(217, 'Abejas', 21),
(218, 'Sí Sentís', 21),
(219, 'Tormenta de Jupiter', 21),
(220, 'Rey de los Divinos', 21),
(221, 'Esperando el Milagro', 21),
(222, 'Tiempo de Matar', 21),
(223, 'La Creciente', 21),
(224, 'Puede Ser', 21),
(225, 'Prólogo (Narrado)', 22),
(226, 'Está Saliendo el Sol', 22),
(227, 'Volver a Casa', 22),
(228, 'De la Guitarra', 22),
(229, 'Reggae para los Amigos', 22),
(230, 'Una Vela', 22),
(231, 'Rodando por Ahí', 22),
(232, 'De a Ratitos', 22),
(233, 'No Tengo Ganas', 22),
(234, 'Rock del Vuelo 20773', 22),
(235, 'Un Tema de Mierda', 22),
(236, 'Felicidad, Depresión', 22),
(237, 'Don Electrón', 22),
(238, 'Departamento Deshabitado', 22),
(239, 'Distinto', 23),
(240, 'Sé que No Sé', 23),
(241, 'Sería una Pena', 23),
(242, 'Algo Mejor, Algo Peor', 23),
(243, 'Rebelde, Agitador y Revolucionario', 23),
(244, 'Un Lugar Perfecto', 23),
(245, 'Todo Eso', 23),
(246, 'Prohibido', 23),
(247, 'Tan Perfecto que Asusta', 23),
(248, 'Tratando de Olvidar', 23),
(249, 'Rocanroles sin Destino', 23),
(250, 'La Llave', 23),
(251, 'Parte Menor', 23),
(252, 'Canciones y Almas', 23),
(253, 'Fuerza Natural', 24),
(254, 'Deja Vu', 24),
(255, 'Magia', 24),
(256, 'Amor sin Rodeos', 24),
(257, 'Traición a Sangre', 24),
(258, 'Desastre', 24),
(259, 'Rapto', 24),
(260, 'Cactus', 24),
(261, 'Naturaleza Muerta', 24),
(262, 'Dominó', 24),
(263, 'Sal', 24),
(264, 'Convoy', 24),
(265, 'He Visto a Lucy', 24),
(266, '# - Numeral', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decadas`
--

CREATE TABLE `decadas` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `decadas`
--

INSERT INTO `decadas` (`id`, `year`) VALUES
(1, '1970'),
(2, '1980'),
(3, '1990'),
(4, '2000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `nombre_completo`, `email`, `password`) VALUES
(1, 'nicolas', 'Nicolás Solano', 'correo@correo.com', '$2y$10$grgD0r1de4cbrDvzV8JDC.EZoQbJlt6VFT3UCJ0iDBcRci0y607ca');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_decada` (`id_decada`);

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_album` (`id_album`);

--
-- Indices de la tabla `decadas`
--
ALTER TABLE `decadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albumes`
--
ALTER TABLE `albumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT de la tabla `decadas`
--
ALTER TABLE `decadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD CONSTRAINT `fk_decada` FOREIGN KEY (`id_decada`) REFERENCES `decadas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD CONSTRAINT `fk_album` FOREIGN KEY (`id_album`) REFERENCES `albumes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
