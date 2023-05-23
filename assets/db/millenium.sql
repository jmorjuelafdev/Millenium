CREATE TABLE `servicios` (
  `id` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `duracion` int(5) NOT NULL,
  `precio` decimal(6,2) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
--

INSERT INTO `servicios` (`id`, `nombre`,`duracion`, `precio`) VALUES
(1, 'Afeitado', 00, '0.00'),
(2, 'Corte barba con cuchilla', 00,'0.00'),
(3, 'Corte clásico de cabello hombre', 00,'0.00'),
(4, 'Corte y barba', 00, '0.00'),
(5, 'Recorte barba', 00, '0.00'),
(6, 'Corte con cuchilla de cabello hombre', 00,'0.00'),
(7, 'Tinturados para hombre', 00, '0.00'),
(8, 'Corte de cabello mujer', 00, '0.00'),
(9, 'Tinturados desde..', 00, '0.00'),
(10, 'Keratinas', 00, '0.00'),
(11, 'Cepillados desde...', 00, '0.00'),
(12, 'Mechas desde..', 00, '0.00'),
(13, 'Peinado mujer', 00, '0.00'),
(14, 'Manicure', 00, '0.00'),
(15, 'Pedicure', 00, '0.00'),
(16, 'Uñas acrílicas', 00, '0.00'),
(17, 'Semipermanentes', 00, '0.00'),
(18, 'Baño en acrílico', 00, '0.00'),
(19, 'Maquillaje', 00,'0.00'),
(20, 'Maquillaje halloween', 00,'0.00'),
(21, 'Pestañas desde...', 00,'0.00'),
(22, 'Limpieza facial mujer', 00,'0.00'),
(23, 'Depilación cejas y rostro', 00,'0.00'),
(24, 'Depilación media pierna', 00,'0.00'),
(25, 'Depilación axilas', 00, '0.00'),
(26, 'Depilación pierna completa', 00,'0.00'),
(27, 'Depilación bikini', 00, '0.00'),
(28, 'Depilación hombre', 00,'0.00'),
(29, 'Corte de cabello niños', 00,'0.00'),
(30, 'Corte de cabello niñas', 00,'0.00'),
(31, 'Peinado niñas', 00,'0.00'),
(32, 'Lavado de cabello', 00,'0.00'),
(33, 'Lavado de cabello con aplicación de cualquier tratamiento', 00,'0.00');


CREATE TABLE `categorias` (
  `id_categoria` int(2) NOT NULL,
  `nombre_categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Barbería'),
(2, 'Mujer'),
(3, 'Uñas'),
(4, 'Piel y rostro'),
(5, 'Kids'),
(6, 'Otros');

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `FK_categoria` (`id_categoria`);
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--

-- --------------------------------------------------------
-- AUTO_INCREMENT de la tabla `servicios`

ALTER TABLE `servicios`
  MODIFY `id_servicio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `FK_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE;


CREATE TABLE `peluquero` (
  `id` int(2) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `especialidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
--

INSERT INTO `peluqueros` (`id`, `nombre`, `especialidad`) VALUES
(4, 'Rafael Gómez', 'Barbero'),
(5, 'Milena Pérez',  'Estlista'),
(6, 'Claudia Mora', 'Manicurista');

UPDATE `peluqueros` SET `nombre` = 'Walter Díaz' WHERE `peluqueros`.`id` = 1;





