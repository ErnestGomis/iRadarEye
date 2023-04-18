-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2023 a las 19:33:12
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbdd-iradareye`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escaperooms`
--

CREATE TABLE `escaperooms` (
  `id_escape` int(11) NOT NULL,
  `empresa` varchar(25) DEFAULT NULL,
  `sala` varchar(25) DEFAULT NULL,
  `ubi` varchar(255) DEFAULT NULL,
  `direc` varchar(255) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `num_jugadores` varchar(25) DEFAULT NULL,
  `tiempo` int(11) DEFAULT NULL,
  `dificult` varchar(25) DEFAULT NULL,
  `edadMin` varchar(25) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `precio` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `escaperooms`
--

INSERT INTO `escaperooms` (`id_escape`, `empresa`, `sala`, `ubi`, `direc`, `genero`, `num_jugadores`, `tiempo`, `dificult`, `edadMin`, `nota`, `link`, `precio`) VALUES
(1, 'Mayto Kingdom', 'Tú También Soñaras', 'Vitoria, Pais Vasco', 'Calle Barratxi 37A, Pabellon, 20, Vitoria-Gasteiz', 'Terror', '2 - 6 jugadores', 120, 'Media', '16 años', 10, 'https://maytokingdom.es/tu-tambien-sonaras/', '120 - 210€'),
(2, 'Mayto Kingdom', 'a Cámara del Espiritu y e', 'Vitoria, Pais Vasco', 'Calle Barratxi 37A, Pabellon, 20, Vitoria-Gasteiz', 'Aventura-A', '2 - 5 jugadores', 80, 'Media', '8 años', 10, 'https://maytokingdom.es/la-camara-del-espiritu-y-el-tiempo/', '100 - 170€'),
(3, 'Escape Barcelona', 'CyberCity 2049', 'Santa Coloma de Gramanet, Barcelona', 'Calle Francisco Moragas, 18, Santa Coloma de Gramenet', 'Ciencia Fi', '2 - 6 jugadores', 90, 'Media', '12 años', 9, 'https://www.escapebarcelona.com/cybercity-2049.php', '100 - 150€'),
(4, 'Insomnia', 'La Casa', 'Berga, Barcelona', 'Gran Via 1, Berga', 'Terror', '4 - 6 jugadores', 70, 'Media-Alta', '18 años', 9, 'https://www.gibaescape.com/opiniones-escape-rooms/insomnia-la-casa', '100 - 150€'),
(5, 'Krematorium', 'Malum', 'Hospitalet de Llobregat, Barcelona', 'Ctra. del Mig, 92', 'Terror', '3 - 6 jugadores', 70, 'Media', '-', 10, 'https://www.gibaescape.com/opiniones-escape-rooms/opinion-krematorium-malum', '99 - 150€'),
(6, 'Silent Town', 'Colegio Midwich', 'Basauri, País Vasco', 'Calle Foruak, 6', 'Terror', '2 - 6 jugadores', 120, 'Media', '16 años', 10, 'https://www.gibaescape.com/opiniones-escape-rooms/opinion-silent-town-colegio-midwich', '90 - 200€'),
(7, 'Arcanum', 'La Posesión', 'Sant Sadurní de Anoia', 'Passeig de Can Ferrer del Mas, 24', 'Terror', '2 - 6 jugadores', 80, 'Media-Alta', '16 años', 9, 'https://www.arcanum.es/', '75 - 145€'),
(8, 'Mythos', 'Expedición Maldita', 'Murcia', 'Av. de la Libertad, 1', 'Aventura', '2 - 6 jugadores', 75, 'Media-Alta', '-', 10, 'https://mythosmurcia.es/', '60 - 96€'),
(9, 'Golden Pop', 'Pesadillas', 'Barcelona, Barcelona', 'Carrer de Girona, 7', 'Terror', '2 - 6 jugadores', 90, 'Media', '18 años', 8, 'https://goldenpop.es/juegos/pesadillas/', '100 - 150€'),
(10, 'Outline Escape Room', 'Outline', 'Cornellà del Llobregat, Barcelona', 'Av. del Parc de Can Mercader 5', 'Terror', '3 - 8 jugadores', 120, 'Media-Alta', '15 años', 10, 'https://outlineescaperoom.es/', '100 - 200€'),
(11, 'WhiteChapel', 'La historia de Charlotte', 'Barcelona, Barcelona', 'Carrer de les Acacies, 23 - 25', 'Terror', '2 - 6 jugadores', 75, 'Media-Alta', '16 años', 8, 'https://www.roomwhitechapel.com/', '80 - 132€'),
(12, 'Escape Barcelona', 'Tomb Hunter, la leyenda d', 'Santa Coloma de Gramanet, Barcelona', 'Carrer Baró 17', 'Aventura', '2 - 6 jugadores', 90, 'Media', '16 años', 9, 'https://www.escapebarcelona.com/tomb-hunter-la-leyenda-de-akasha.php', '100 - 120€'),
(13, 'Escape Barcelona', 'Alien, el origen', 'Santa Coloma de Gramanet, Barcelona', 'Carrer Baró 17', 'Aventura, ', '4 - 10 jugadores', 90, 'Media', '16 años', 9, 'https://www.escapebarcelona.com/alien-el-origen.php', '100 - 120€'),
(14, 'Overtime', 'Call or Die', 'Pamplona, Navarra', 'Carrer Arbizu 17', 'Acción', '3 - 5 jugadores', 85, 'Media', '16 años', 9, 'https://overtimepamplona.es/juegos-de-escape/', '90 - 110€'),
(15, 'Willy el tuerto', 'Willy el tuerto', 'Sabadell', 'Carrer Poeta Folguera 13', 'Aventura', '2 - 6 jugadores', 80, 'Media', '10 años', 9, 'https://willyeltuertoescaperoom.com/reservar/', '90 - 140€'),
(16, 'Cindy box', 'Blasphemia', 'Sant Frutos de Bages', 'Carrer Padro  27', 'Terror', '4 - 6 jugadores', 100, 'Media', '18 años', 9, 'https://cindyescapebox.com/reservar', '100 - 150€'),
(17, 'Distrito 7', 'Noche de perros', 'Navarra, Pamplona', 'C. Bernardino Tirapu, 31, bajo, 31014 Pamplona, Navarra', 'Aventura', '2 - 5 jugadores', 90, 'Media', '16 años', 10, 'https://distrito7.es/noche-de-perros/', '65 - 100€'),
(18, 'Dragonborn', 'El hijo del posadero', 'País Vasco, Vitoria', 'Calle, Pintor Jesus Apellaniz Kalea, 5, bajo, 01008 Vitoria-Gasteiz, Álava', 'Aventura', '2 - 6 jugadores', 90, 'Media', '10 años', 10, 'https://dragonbornvitoria.es/', '80 - 150€'),
(19, 'La Abadía perdida', 'La Abadía perdida', 'La Rioja', 'C. Duquesa de la Victoria, 55, bajo, 26004 Logroño, La Rioja', 'Aventura', '2 - 5 jugadores', 60, 'Media', '10 años', 10, 'https://laabadiaperdidaescaperoom.com/', '60 - 100€'),
(20, 'Overtime', 'Misión 1: 101 años de per', 'Navarra, Pamplona', 'C. Arbizu, 17, 31014 Pamplona, Navarra', 'Acción', '2 - 5 jugadores', 70, 'Media', '16 años', 10, 'https://overtimepamplona.es/', '70 - 110€'),
(21, 'Overtime', 'Misión 1: 101 años de per', 'Navarra, Pamplona', 'C. Arbizu, 17, 31014 Pamplona, Navarra', 'Acción', '2 - 5 jugadores', 70, 'Media', '16 años', 10, 'https://overtimepamplona.es/', '70 - 110€'),
(22, 'Katharsis', 'La hora de las bestias', 'Barcelona, Mataró', 'Av. Amèrica, 14, 08304 Mataró, Barcelona', 'Misterio', '2 - 7 jugadores', 80, 'Media', '12 años', 10, 'https://katharsisroomescape.es/', '78 - 154€'),
(23, 'Vortex', 'Apophis', 'Barcelona, Terrassa', 'Carrer Alexander Bell, 72, 08224 Terrassa, Barcelona', 'Ciencia Fi', '2 - 7 jugadores', 90, 'Media-Alta', '18 años', 10, 'https://vortexescape.com/', '66 - 126€'),
(24, 'Profana', 'Profana', 'Barcelona, Granollers', 'Carrer Jules Verne, 12, 08402, Granollers', 'Terror Mis', '2 - 6 jugadores', 90, 'Media', '14 años', 8, 'https://profanaescaperoom.com/', '70 - 150€'),
(25, 'Virus room escape', 'Tao', 'Barcelona, Calella', 'Carrer de Sant Jaume, 434, 08370, Calella', 'Investigac', '2 - 7 jugadores', 90, 'Media-Alta', '6 años', 9, 'https://virusroomescape.com/juegos/tao-japanese-massage-center/', '70 - 161€'),
(26, 'Unreal', 'Distrito 111', 'Barcelona, Barcelona', 'Carrer de Bac de Roda, 186, 08020 Barcelona', 'Aventura', '2 - 7 jugadores', 90, 'Media', '12 años', 8, 'https://unrealroomescape.es/santmarti/', '60 - 160 €'),
(27, 'Synegro', 'Cazadores de brujas', 'Barcelona, Sant Boi', 'Carrer de Didac Priu, 40, 08830, Sant Boi de Llobregat', 'Aventura', '2 - 6 jugadores', 80, 'Media', '14 años', 8, 'http://www.synergoescaperoom.es/historia/index.html#calendario', '70 - 120€'),
(28, 'Secret hunter', 'Km 18', 'Alicante, Alicante', 'Victor de la Serna 26, 03006 , Alicante', 'Misterio', '2 - 8 jugadores', 70, 'Media', '14 años', 9, 'https://secrethunter.es/km18/', '66 - 128€'),
(29, 'Codexcape', 'Paranoia', 'Valencia, Valencia', 'Calle Lladro y Malli 8, bajo D4, 46007, Valencia', 'Terror', '2 - 6 jugadores', 75, 'Media', '16 años', 9, 'https://www.codexcape.net/reservar-online', '60 - 102€'),
(30, 'Enigmik', 'La cerveseria', 'Barcelona, Barcelona', 'Rossello, 508, 08026, Barcelona', 'Aventura-I', '3 - 6 jugadores', 80, 'Media-Alta', '14 años', 9, 'https://www.enigmik.com/la-cerveceria-escape-room/', '90 - 120€'),
(31, 'SKP Valencia', 'El loco del callejon', 'Valencia, Valencia', 'Guillem de Castro 123, 46008, Valencia', 'Misterio', '2 - 8 jugadores', 120, '-', '-', 0, 'https://skproom.com/', '50 - 168€'),
(32, 'Conecta escape', 'Atrincherados', 'Barcelona, Cerdañola', 'Carrer de la Lluna, 46, 08290, Cerdanyola del Valles', 'Acción', '2 - 6 jugadores', 90, 'Media', '14 años', 8, 'https://www.elementsescaperoom.com/atrincherados/', '80 - 120€'),
(33, 'Abduction 3', 'The exam', 'Badalona, Bercelona', 'Avinguda de Bac de Roda, 28, Badalona', 'Acción-Ave', '2 - 6 jugadores', 60, 'Media', '12 años', 9, 'https://www.abduction.es/badalona/abduction3', '85 - 115€'),
(34, 'Hangar 18', 'Misión nostromo', 'Gijón, Asturias', 'Poligono industrial de Roces, 3, Gijon', 'Ciencia Fi', '2 - 7 jugadores', 70, 'Media', '16 años', 9, 'https://hangar18.es/reservas-nostromo', '70 - 140€'),
(35, 'Abduction 2', 'El orfanato', 'Badalona, Barcelona', 'Avinguda de Bac de Roda, 28, Badalona', 'Terror', '2 - 7 jugadores', 60, 'Media', '18 años', 8, 'https://www.abduction.es/badalona/abduction2', '80 - 125€'),
(36, 'Secret Box', 'Cazafantasmas (the myster', 'Mataró, Barcelona', 'Mossen Jacint Verdaguer, 69, Mataró', 'Misterio', '3 - 5 jugadores', 60, 'Media', '10 años', 8, '*', '80 - 100€'),
(37, 'Cubick 3', 'Nathael', 'Mataró, Barcelona', 'Carrer de la Cooperativa, 77, Mataró', 'Terror', '2 - 6 jugadores', 90, 'Media-Alta', '16 años', 8, 'https://cubickroomescape.es/mataro/reservas/', '98 - 150€'),
(38, 'Unreal', 'Vikingos', 'Gavà, Barcelona', 'Carrer de Tresols, 33, 08850 Gavà, Barcelona', 'Aventura', '2 - 7 jugadores', 90, 'Media', '5 años', 8, 'https://unrealroomescape.es/gava/#reservas', '68 - 140€'),
(39, 'Red Dopamine', 'Awaken', 'Barcelona, Barcelona', 'Carrer Alcalá de Guadaira, 20, 08020 Barcelona', 'Terror', '2 - 7 jugadores', 80, 'Alta', '16 años', 8, 'https://www.thenextdoor.es/#reservar', '80 - 175€'),
(40, 'Misterios de Kemet', 'Misterios de Kemet', 'Esplugues, Barcelona', 'Serra del montsec, 22, Esplugues de Llobregat', 'Aventura-I', '2 - 6 jugadores', 80, 'Media-Alta', '8 años', 9, '*', '72 - 126€'),
(41, 'Factoría escape room', 'Golpe perfecto en el jard', 'Valencia, Valencia', 'Av. de Valladolid, 2, Bj, 46020 Valencia', 'Aventura', '2 - 7 jugadores', 90, 'Media', '16 años', 0, 'https://factoriaescaperoom.com/reserva-golpe-perfecto-en-el-jardin-de-buda/', '60 - 110€'),
(42, 'Locked zgz', 'Ritual', 'Zaragoza, Aragón', 'C. de Alberto Duce, 15, 50018 Zaragoza', 'Terror', '3 - 8 jugadores', 80, 'Media', '18 años', 0, 'https://www.lockedzgz.com/', '84 - 152€'),
(43, 'Portento', 'Olimpo', 'Badalona, Barcelona', 'Carrer de la Muntanya, 31, Badalona', 'Aventura', '2 - 8 jugadores', 100, 'Media', '8 años', 9, 'http://olimpoescaperoom.com/reservar/', '80 - 160€');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `escaperooms`
--
ALTER TABLE `escaperooms`
  ADD PRIMARY KEY (`id_escape`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
