-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 10:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estado`
--

CREATE TABLE `tbl_estado` (
  `cod_estado` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_estado`
--

INSERT INTO `tbl_estado` (`cod_estado`, `estado`) VALUES
(1, 'Activo'),
(2, 'Pendiente'),
(3, 'Bloqueado');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fundaciones`
--

CREATE TABLE `tbl_fundaciones` (
  `id_fundacion` varchar(15) NOT NULL,
  `direccion` varchar(35) NOT NULL,
  `descripcion` text NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `foto_fundacion` varchar(200) NOT NULL,
  `id_user_fundacion_fk` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fundaciones`
--

INSERT INTO `tbl_fundaciones` (`id_fundacion`, `direccion`, `descripcion`, `mision`, `vision`, `foto_fundacion`, `id_user_fundacion_fk`) VALUES
('1234567890-1', '', '', '', '', '', '1234567890-1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `cod_rol` int(11) NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rol`
--

INSERT INTO `tbl_rol` (`cod_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Fundacion'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipo_doc`
--

CREATE TABLE `tbl_tipo_doc` (
  `cod_tipo_doc` int(11) NOT NULL,
  `tipo_doc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_tipo_doc`
--

INSERT INTO `tbl_tipo_doc` (`cod_tipo_doc`, `tipo_doc`) VALUES
(1, 'CC'),
(2, 'CE'),
(3, 'PASAPORTE'),
(4, 'NIT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `cod_tipo_doc_fk` int(11) NOT NULL,
  `cod_rol_fk` int(11) NOT NULL,
  `cod_estado_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `nombre`, `apellido`, `telefono`, `email`, `clave`, `foto`, `cod_tipo_doc_fk`, `cod_rol_fk`, `cod_estado_fk`) VALUES
('1000004436', 'Andersson', 'Acosta', '3154942891', 'afacosta634@soy.sena.edu.co', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '../Uploads/usuarios/Andersson.png', 1, 1, 1),
('1000461659', 'Santiago', 'Gutiérrez', '3123228977', 'sagutierrez95@soy.sena.edu.co', 'b33bd33fb03b92c58a6b04ed1894097b', '../Uploads/Usuarios/Santiago.png', 1, 1, 1),
('1032677560', 'Diana', 'Ramírez', '3027195267', 'diana.ramirez577@soy.sena.edu.co', '066a4d331ee41fae7b47423372a4cbed', '../Uploads/Usuarios/Diana.png', 1, 1, 1),
('1034657189', 'Ricardo', 'Reyes', '3002374314', 'rereyes98@soy.sena.edu.co', '931f9e49250efba22e00c085787841b7', '../Uploads/Usuarios/Ricardo.png', 1, 1, 1),
('1083694182', 'Johan', 'Echavez', '3024334115', 'johan.echavez@soy.sena.edu.co', '6efbf8af97f2d3b71717691014b924eb', '../Uploads/Usuarios/Johan.png', 1, 1, 1),
('1234567890-1', 'Patitas Solidarias', '', '3101234567', 'patitassolidarias@gmail.com', '67bce925b874e83424f19efc3f3f5fa7', '../Uploads/fundaciones/logfun1.png', 4, 2, 1),
('52061533', 'Margarita', 'Moya', '3204003372', 'margaritamoya49@gmail.com', '9417ae2af6dd65d4cc5cefa751409f71', '../Uploads/Usuarios/', 1, 3, 1),
('80749476', 'Jorge', 'Acosta', '3178764647', 'wattson07@hotmail.com', '5b69a3eb5d9ad67f00179934f692a41d', '../Uploads/Usuarios/', 1, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_estado`
--
ALTER TABLE `tbl_estado`
  ADD PRIMARY KEY (`cod_estado`);

--
-- Indexes for table `tbl_fundaciones`
--
ALTER TABLE `tbl_fundaciones`
  ADD PRIMARY KEY (`id_fundacion`),
  ADD KEY `id_user_fk` (`id_user_fundacion_fk`),
  ADD KEY `id_user_fundacion_fk` (`id_user_fundacion_fk`);

--
-- Indexes for table `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`cod_rol`);

--
-- Indexes for table `tbl_tipo_doc`
--
ALTER TABLE `tbl_tipo_doc`
  ADD PRIMARY KEY (`cod_tipo_doc`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `cod_tipo_doc` (`cod_tipo_doc_fk`),
  ADD KEY `cod_rol_fk` (`cod_rol_fk`),
  ADD KEY `cod_estado_fk` (`cod_estado_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_estado`
--
ALTER TABLE `tbl_estado`
  MODIFY `cod_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_rol`
--
ALTER TABLE `tbl_rol`
  MODIFY `cod_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_tipo_doc`
--
ALTER TABLE `tbl_tipo_doc`
  MODIFY `cod_tipo_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_fundaciones`
--
ALTER TABLE `tbl_fundaciones`
  ADD CONSTRAINT `id_user_fundacion_fk` FOREIGN KEY (`id_user_fundacion_fk`) REFERENCES `tbl_users` (`id_user`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `cod_estado_fk` FOREIGN KEY (`cod_estado_fk`) REFERENCES `tbl_estado` (`cod_estado`),
  ADD CONSTRAINT `cod_rol_fk` FOREIGN KEY (`cod_rol_fk`) REFERENCES `tbl_rol` (`cod_rol`),
  ADD CONSTRAINT `cod_tipo_rol_fk` FOREIGN KEY (`cod_tipo_doc_fk`) REFERENCES `tbl_tipo_doc` (`cod_tipo_doc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
