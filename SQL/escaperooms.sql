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
(26, 'Unreal', 'Distrito 111', 'Barcelona, Barcelona', 'Carrer de Bac de Roda, 186, 08020 Barcelona', 'Aventura', '2 - 7 jugadores', 90, 'Media', '12 años', 8, 'https://unrealroomescape.es/santmarti/', '60 - 160 €');

ALTER TABLE `escaperooms`
  ADD PRIMARY KEY (`id_escape`);
COMMIT;