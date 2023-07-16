-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2023 at 04:16 PM
-- Server version: 10.5.19-MariaDB-0+deb11u2
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp_final_cac2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `registro_oradores`
--

CREATE TABLE `registro_oradores` (
  `id` int(100) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `tema` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registro_oradores`
--

INSERT INTO `registro_oradores` (`id`, `nombre`, `apellido`, `correo`, `tema`) VALUES
(1, 'Maria', 'Gonzalez', 'mg@gmail.com', 'Aritmetica'),
(2, 'Diego', 'Sarlanga', 'ds@gmail.com', 'Matematica  '),
(3, 'Pedro', 'Picapiedras', 'pp@gmail.com', 'Arquitectura  '),
(4, 'Pepe', 'Lui', 'pl@gmail.com', 'Educación Fisica  '),
(5, 'Martin', 'Pescador', 'mp@yahoo.es', 'Programacion PHP  ');

-- --------------------------------------------------------

--
-- Table structure for table `registro_usuarios`
--

CREATE TABLE `registro_usuarios` (
  `id` int(100) NOT NULL,
  `names` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `quantity` int(100) NOT NULL,
  `category` varchar(10) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registro_usuarios`
--

INSERT INTO `registro_usuarios` (`id`, `names`, `lastname`, `email`, `quantity`, `category`, `total`) VALUES
(1, 'Pepe', 'Lui', 'pepelui@gmail.com', 3, '1', 120),
(2, 'Enzo', 'Perez', 'ep@carp.com.ar', 3, '2', 300),
(3, 'Soledad', 'Freso', 'sf@hotmail.com', 3, '1', 120),
(4, 'Tito', 'Puentes', 'tp@yahoo.com.ar', 45, '2', 4500),
(5, 'Hernan', 'Pires', 'hp@hotmail.com.ar', 23, '3', 3910);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registro_oradores`
--
ALTER TABLE `registro_oradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registro_usuarios`
--
ALTER TABLE `registro_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registro_oradores`
--
ALTER TABLE `registro_oradores`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registro_usuarios`
--
ALTER TABLE `registro_usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
