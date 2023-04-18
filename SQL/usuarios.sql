
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `escaperoomsJugadas` int(11) NOT NULL,
  `escaperoomsGanadas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);
COMMIT;
