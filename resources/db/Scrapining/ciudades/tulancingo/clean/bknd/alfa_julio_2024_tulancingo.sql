-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2024 a las 04:39:28
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
-- Base de datos: `datalpine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alfa_julio_2024_tulancingo`
--

CREATE TABLE `alfa_julio_2024_tulancingo` (
  `id` int(11) NOT NULL,
  `Categoria` varchar(2) DEFAULT NULL,
  `Precio` decimal(18,2) DEFAULT NULL,
  `propiedad` varchar(300) DEFAULT NULL,
  `metros_total` int(11) DEFAULT NULL,
  `metros_construido` int(11) DEFAULT NULL,
  `precio_m2_terreno` decimal(18,2) DEFAULT NULL,
  `precio_m2_construido` decimal(18,2) DEFAULT NULL,
  `tiempo_de_publicacion` int(11) DEFAULT NULL,
  `Estado` varchar(100) DEFAULT NULL,
  `Tipo` varchar(100) DEFAULT NULL,
  `Estacionamientos` int(11) DEFAULT NULL,
  `Recamaras` int(11) DEFAULT NULL,
  `Banos` int(11) DEFAULT NULL,
  `Medio_banos` decimal(18,2) DEFAULT NULL,
  `Banos_Total` decimal(18,2) DEFAULT NULL,
  `Seguridad` int(11) DEFAULT NULL,
  `Colonia` varchar(300) DEFAULT NULL,
  `CP` varchar(10) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alfa_julio_2024_tulancingo`
--

INSERT INTO `alfa_julio_2024_tulancingo` (`id`, `Categoria`, `Precio`, `propiedad`, `metros_total`, `metros_construido`, `precio_m2_terreno`, `precio_m2_construido`, `tiempo_de_publicacion`, `Estado`, `Tipo`, `Estacionamientos`, `Recamaras`, `Banos`, `Medio_banos`, `Banos_Total`, `Seguridad`, `Colonia`, `CP`, `url`) VALUES
(1, 'E1', 430000.00, 'HERMOSA PROIEDAD EN TULANCINGO HIDALGO', 150, 280, 2866.67, 1535.71, 4, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-a57baf78ccf8-5dea-6e41bc16-9982-4b65'),
(2, 'E1', 430000.00, 'HERMOSA CASA EN VENTA EN SAUCE TULANCINGO HIDALGO', 150, 280, 2866.67, 1535.71, 5, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-251cc42ea3cd-fbaa-847c8ada-8a91-410c'),
(3, 'E1', 430000.00, 'Acogedora casa en Tulancingo, Hidalgo', 150, 280, 2866.67, 1535.71, 6, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-86871f3c61d2-adbb-2f46a126-9805-4f92'),
(4, 'E1', 430000.00, 'PRECIOSA CASA EN VENTA EN TULANCIGO, HIDALGO,EXCELENTE OPORTUNIDAD', 280, 150, 1535.71, 2866.67, 6, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-db8936e093ab-7fa5-f084aba4-81a9-4f65'),
(5, 'E1', 430000.00, 'PRECIOSA Y GRANDE CASA EN VENTA EN SAUSE 201, RINCONADA LA MORENA, TULANCINGO, HIDALGO', 150, 280, 2866.67, 1535.71, 6, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-9e685b4056d8-9461-15fe34a2-8a82-4aec'),
(6, 'E1', 430000.00, 'PRECIOSA CASA EN TULANCINGO', 150, 280, 2866.67, 1535.71, 6, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-a8deca892771-c9bb-2a051ca7-b556-4eb1'),
(7, 'E1', 430000.00, 'EXCELENTE OPORTUNIDAD DE INVERSIÓN EN TULANCINGO, HID.', 150, 280, 2866.67, 1535.71, 5, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-a6d0a8821685-9309-21f1b787-bc40-4920'),
(8, 'E1', 430000.00, 'Preciosa casa en SAUCE 201, RINCONADA LA MORENA, 43625 TULANCINGO, HGO.', 150, 280, 2866.67, 1535.71, 5, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-17cbf7a5bfa5-7a9f-c1204fb3-bc40-4133'),
(9, 'E1', 430000.00, 'BONITA CASA EN TULANCINGO, HIDALGO', 280, 150, 1535.71, 2866.67, 6, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-e9307c71dcd-3e2b-dc1453db-bce0-4360'),
(10, 'E1', 440000.00, 'EN VENTA HERMOSA PROPIEDAD EN TULANCINGO', 115, 200, 3826.09, 2200.00, 5, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-7917086b5819-d800-c8279c5a-a9e0-4e39'),
(11, 'E1', 445000.00, 'VENTA DE CASA C CARLOS CHÁVEZ JARDINES DEL SUR  TULANCINGO', 115, 200, 3869.57, 2225.00, 5, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-749297cfeed6-af28-a292334-8fe1-4ca3'),
(12, 'E1', 450000.00, 'CASA DE RECUPERACION EN VENTA EN TULANCINGO,HIDALGO.', 100, 95, 4500.00, 4736.84, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-8f11c8c6b822-5852-367e9e0c-bb05-41e8'),
(13, 'E1', 450000.00, 'HERMOSA CASA EN VENTA EN TULANCINGO, HIDALGO', 100, 95, 4500.00, 4736.84, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-a7b239bc271d-f088-3f687eab-9cec-5025'),
(14, 'E1', 450000.00, 'PROPIEDAD EN VENTA EN TULANCINGO HIDALGO', 95, 100, 4736.84, 4500.00, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-9021269cba19-940e-20f85a02-8603-4aca'),
(15, 'E1', 455000.00, 'VENTA DE CASA EN CALLE CARLOS CHAVEZ 207, COL JARDINES DEL SUR 2da Secc, CP 43660, MUNICIPIO TULANCINGO, ESTADO HIDALGO', 105, 200, 4333.33, 2275.00, 3, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-f243df62beae-2c4f-54136a6f-a6ad-4990'),
(16, 'E1', 455000.00, 'VENTA DE CASA EN TULANCINGO HIDALGO COL JARDINES DEL SUR', 105, 200, 4333.33, 2275.00, 2, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-75a62bba5fa2-807b-c8b781c1-b9ea-4373'),
(17, 'E1', 455000.00, 'VENTA DE CASA EN TULANCINGO', 100, 180, 4550.00, 2527.78, 5, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-ec6dc6be7b68-6fec-ab37b14c-8eb4-4fdb'),
(18, 'E1', 455000.00, 'VENTA DE CASA  CARLOS CHÁVEZ  JARDINES DEL SUR 4TA SECC TULANCINGO', 115, 200, 3956.52, 2275.00, 5, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-ee5d2509a01e-cac-1d54b638-be42-455c'),
(19, 'E1', 477483.00, 'vomo _INVIERTE DE CONTADO Y GANTE VENTAJOSO PRECIO DE CASA JUNTO AL CENTRO DE FERIA DE TULANCINGO HIDALGO !!¡¡', 100, 50, 4774.83, 9549.66, 6, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Jaltepec', '', 'https://www.lamudi.com.mx/detalle/41032-73-358473c3490b-8a68-66785537-92b3-4b5e'),
(20, 'E1', 487467.00, 'vomo_ INVIERTE DE CONTADO Y GANATE VENTAJOSO PRECIO DE CASA  EN RINCONES DE LA HACIENDA DE TULANCINGO HIDALGO!!¡¡', 96, 75, 5077.78, 6499.56, 6, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Jaltepec', '', 'https://www.lamudi.com.mx/detalle/41032-73-51571d92baa0-50c0-7c510d55-8ea6-43c2'),
(21, 'E2', 500000.00, 'HERMOSA CASA EN, JARDINES DEL SUR 3 SECC, TULANCINGO, HIDALGO', 230, 320, 2173.91, 1562.50, 7, 'Venta', 'Casa', 2, 5, 2, 0.00, 2.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-b843ac7f99a5-fd-eaac92f6-a4ea-4e0a'),
(22, 'E2', 500000.00, '¡¡¡BONITA CASA EN TULANCINGO, HIDALGO!!! .SOC.', 165, 225, 3030.30, 2222.22, 9, 'Venta', 'Casa', 2, 4, 1, 1.00, 1.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-d3c83135766a-5b1a-91985170-a46d-4208'),
(23, 'E2', 520000.00, 'CASA EN VENTA TULANCINGO HIDALGO', 120, 240, 4333.33, 2166.67, 16, 'Venta', 'Casa', 2, 4, 2, 0.00, 2.00, 0, 'Lomas de Progreso', '', 'https://www.lamudi.com.mx/detalle/41032-73-164b00fed1ad-5af1-9809fced-b47e-3231'),
(24, 'E2', 549000.00, 'Casa VENTA, Guadalupe 1a Sección, Tulancingo de Bravo, Hidalgo', 140, 100, 3921.43, 5490.00, 3, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Francisco I Madero', '', 'https://www.lamudi.com.mx/detalle/41032-73-a8461c0ca6da-78da-deaa8761-a81b-49c0'),
(25, 'E2', 560000.00, 'VENTA DE CASA EN RESIDENCIAL LA MORENA TULANCINGO HIDALGO', 114, 206, 4912.28, 2718.45, 8, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-f86cc0bfb87a-5642-7b90e0af-9609-458d'),
(26, 'E2', 560000.00, 'CASA EN VENTA EN RINCONADA LA MORENA, TULANCINGO-HGO', 140, 180, 4000.00, 3111.11, 2, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-5139afdb01a8-24ab-29e0f41c-8827-4bb7'),
(27, 'E2', 560000.00, 'VENTA DE CASA EN TULANCINGO COL LA MORENA TULANCINGO HIDALGO', 120, 180, 4666.67, 3111.11, 3, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-c6675f221ede-d922-62224bbf-b87e-455b'),
(28, 'E2', 560000.00, 'VENTA DE CASA EN TULANCINGO HIDALGO', 120, 180, 4666.67, 3111.11, 3, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-952984f62c30-e0cf-834611e-8370-4cee'),
(29, 'E2', 560000.00, 'EXCELENTE CASA EN VENTA DE LAS FUENTES, LA MORENA TULANCINGO HIDALGO', 120, 180, 4666.67, 3111.11, 5, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-8d11b20029fc-60b-317f5ab2-bded-422e'),
(30, 'E2', 560000.00, 'venta de cas en tulancingo', 120, 180, 4666.67, 3111.11, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-988056f1134f-ac8b-b7dfec29-98bb-477b'),
(31, 'E2', 562000.00, 'AS VENTA DE CASA C. RUBI CAMPO ALEGRE TULANCINGO DE BRAVO HIDALGO', 90, 90, 6244.44, 6244.44, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Jaltepec', '', 'https://www.lamudi.com.mx/detalle/41032-73-35c549ec5904-4c6d-24526096-9753-446b'),
(32, 'E2', 570000.00, 'HERMOSA Y AMPLIA CASA EN JARDINES DEL SUR TULANCINGO HIDALGO, SUPER PRECIO!!!', 225, 360, 2533.33, 1583.33, 7, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-9a87f2e30aa8-b101-a994006c-990c-4cc8'),
(33, 'E2', 578000.00, 'Venta de bonita casa en Hidalgo', 178, 178, 3247.19, 3247.19, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-d506a1a82c1e-8ed0-ba1d9740-aef4-473d'),
(34, 'E2', 578000.00, '🏡🤩La casa de tus sueños en Tulancingo de Bravo, Hidalgo🤩🏡', 178, 178, 3247.19, 3247.19, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-76906917e417-1fc2-880c6c00-bd09-45b5'),
(35, 'E2', 578000.00, 'Casa en venta en Tulancingo de Bravo, Hidalgo en 578,000 pesos', 178, 178, 3247.19, 3247.19, 10, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-c9fbbd9465df-c54-3b7cdb6-b0e3-4a13'),
(36, 'E2', 580000.00, 'CASA EN VENTA TULANCINGO DE BRAVO, COL VICENTE GUERRERO', 110, 110, 5272.73, 5272.73, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-16703c40b97a-1893-369b2930-8650-410b'),
(37, 'E2', 580000.00, 'CESION DE DERECHOS', 110, 110, 5272.73, 5272.73, 3, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-b733ba89312b-af9-d6720ab5-9e6c-4b67'),
(38, 'E2', 580000.00, 'PRECIOSA CASA EN TULANCINGO HIDALGO OAHM', 150, 280, 3866.67, 2071.43, 9, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-31c0d0c8c869-3288-13762b7d-982b-4ede'),
(39, 'E2', 590000.00, 'VENTA DE CASA EN TULANCINGO HIDALGO', 126, 260, 4682.54, 2269.23, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-137765f68155-2484-218d5ea0-85ee-4261'),
(40, 'E2', 590000.00, 'PRECIOSA CASA EN VENTA UBICADA EN LA MORENA SECC NTE B, TULANCINGO, HIDALGO', 266, 398, 2218.05, 1482.41, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-5c48631900bf-71fe-7013213-a719-4bfd'),
(41, 'E2', 590000.00, 'HERMOSA CASA DE 160m2 DE SUPERFICIE, 2 NIVELES, Oportunidad de Inversión!', 160, 240, 3687.50, 2458.33, 3, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-9b2ad4b6e70e-5818-3f76fc6f-8123-4c74'),
(42, 'E2', 590000.00, 'NO TE PIERDAS ESTA OPORTUNIDAD', 160, 240, 3687.50, 2458.33, 4, 'Venta', 'Casa', 2, 2, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-ce89938a7b7-18a8-c1ed5f5a-84bb-4337'),
(43, 'E2', 590000.00, 'Linda casa en Tulancingo, Hidalgo', 266, 398, 2218.05, 1482.41, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-c2938e0fa92b-f81-374b5c36-945e-501c'),
(44, 'E2', 590000.00, 'PRECIOSA CASA EN VENTA EN DE LAS FUENTES 400, LA MORENA SECC NTE. B, TULANCINGO, HIDALGO.', 266, 398, 2218.05, 1482.41, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-90a03fcc90b8-8acf-2c3d1fb4-9c50-44e1'),
(45, 'E2', 590000.00, 'ENCONTRASTE TU CASA IDEAL EN TULANCINGO, HIDALGO', 266, 398, 2218.05, 1482.41, 5, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-2113a4bc2ba2-70c7-e2060305-8d7f-4ee4'),
(46, 'E2', 590000.00, 'HERMOSA CASA EN TULANCINGO HIDALGO ¡', 266, 398, 2218.05, 1482.41, 5, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-edf7b09b50f-fdbc-40cd120b-ac94-492e'),
(47, 'E2', 590000.00, 'Hgo. LINDA CASA ESQUNERA CON EXCELENTE UBICACIÓN', 266, 398, 2218.05, 1482.41, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-d9d938631812-526e-32fdb601-b3be-4536'),
(48, 'E2', 600000.00, 'VENTA DE CASA ECONOMICA  EN TULANCINGO', 90, 45, 6666.67, 13333.33, 16, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Huapalcalco', '', 'https://www.lamudi.com.mx/detalle/41032-73-21abe171c97e-2093-c92cbaa9-bc94-3fd6'),
(49, 'E2', 600000.00, 'CASA EN VENTA - COL. LA MORENA, TULANCINGO', 180, 210, 3333.33, 2857.14, 11, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-ec594c4bb147-7627-6e552390-86f7-4e50'),
(50, 'E2', 618000.00, 'CASA 3 RECAMARAS, 2 NIVELES, 2.5 BAÑOS, 2 ESTACIONAMIENTOS', 140, 140, 4414.29, 4414.29, 4, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-715386dafdf6-a2aa-f8fed2f9-938e-4bb4'),
(51, 'E2', 620000.00, 'VENTA DE EXCELENTE CASA EN TULANCINGO, HIDALGO', 160, 330, 3875.00, 1878.79, 4, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-79d892e4e50b-f346-ddcfce34-9055-4d70'),
(52, 'E2', 620000.00, 'VENTA DE CASA EN HIDALGO', 160, 330, 3875.00, 1878.79, 3, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-961fa72f4e33-d029-338a076f-bbaf-4ddf'),
(53, 'E2', 622000.00, 'Casa en venta  Guadalupe 1ra Sección, Tulancingo, Hidalgo  DD41 GR', 230, 230, 2704.35, 2704.35, 10, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Francisco I Madero', '', 'https://www.lamudi.com.mx/detalle/41032-73-cba1ec894a47-74a-382d2619-87dd-4c9b'),
(54, 'E2', 625000.00, 'TE GUIAMOS A CASA A UN PRECIO INCREIBLE', 156, 280, 4006.41, 2232.14, 3, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-21390bd5e7be-f4fd-720b7aca-afa8-44be'),
(55, 'E2', 628000.00, 'Venta de bonita casa en Hidalgo', 114, 114, 5508.77, 5508.77, 2, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-b81cf01b2310-2dd6-8da389b-a015-4233'),
(56, 'E2', 628000.00, '🏡🤩La casa de tus sueños en Tulancingo de Bravo, Hidalgo🤩🏡', 114, 114, 5508.77, 5508.77, 2, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-8b6ab53a73e3-4f9a-4f120b9d-a2a1-4a86'),
(57, 'E2', 628000.00, 'OPORTUNIDAD INVIERTE EN TU PATRIMONIO, CASA DE  RECUPERACION BANCARIA, EN CUMBRES DE MALTRATA.', 114, 114, 5508.77, 5508.77, 7, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-fd7d7a26facf-4aec-7ab2aaab-9001-49f7'),
(58, 'E2', 650000.00, 'VENTA DE CASA ECONÓMICA EN NAPATECO, EN TULANCINGO HIDALGO', 90, 90, 7222.22, 7222.22, 6, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Cebolletas', '', 'https://www.lamudi.com.mx/detalle/41032-73-41ce0348aadc-9c56-96819439-86d4-1f2c'),
(59, 'E2', 650568.00, 'vomo_ INVIERTE DE CONTADO Y GANATE VENTAJOSO PRECIO EN PROPIEDAD EN ESQUINA DE LA COLONIA VICENTE GUERRERO, TULANCINGO HIDALGO !!¡¡', 100, 90, 6505.68, 7228.53, 6, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-2dd412d5ddaa-208a-72f65def-a62d-40e7'),
(60, 'E2', 670000.00, 'PREVENTA Departamentos nuevos y económicos en Tulancingo', 60, 60, 11166.67, 11166.67, 16, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'Los Pinos', '', 'https://www.lamudi.com.mx/detalle/41032-73-2bd215798759-6b9b-c4a4aff1-b239-3fed'),
(61, 'E2', 678000.00, 'VENTA DE CASA EN CONDOMINIO TULANCINGO', 100, 120, 6780.00, 5650.00, 5, 'Venta', 'Casa', 1, 3, 2, 1.00, 2.50, 0, 'Pedregal de San Francisco', '', 'https://www.lamudi.com.mx/detalle/41032-73-6c6ae9edf2af-fd73-623e7b80-b9b2-4b8d'),
(62, 'E2', 730000.00, 'Casas económicas en Privada, Napateco Tulancingo Hgo.', 91, 53, 8021.98, 13773.58, 12, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Napateco', '', 'https://www.lamudi.com.mx/detalle/41032-73-61c2eecd4e32-58e5-84cdbd52-9055-4de0'),
(63, 'E2', 737336.00, 'GRAN OPORTUNIDAD BONITA CASA UBICADA EN CALLE FRANCISCO VILLA COL EL MIRADOR MPO TULANCINGO DE BRAVO HIDALGO, EXCELENTE PRECIO $737,336', 120, 120, 6144.47, 6144.47, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-788a516b9f13-c849-bf85cfe8-8c84-40b5'),
(64, '', 750000.00, 'CASA EN VENTA - COL. RINCONADA LA MORENA, TULANCINGO', 150, 180, 5000.00, 4166.67, 11, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-1d94401d58d6-9c4d-e8ea114e-a7db-42c1'),
(65, 'E3', 785000.00, 'VENTA DE CASA EN TULANCINGO HIDALGO', 245, 398, 3204.08, 1972.36, 5, 'Venta', 'Casa', 2, 4, 1, 1.00, 1.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-61751fdf94e0-f48b-75cc04e5-82e8-4c89'),
(66, 'E3', 809000.00, 'Venta de bonita casa en Hidalgo', 160, 160, 5056.25, 5056.25, 2, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-10dc1c2d14da-83f9-893d967c-b44d-439a'),
(67, 'E3', 809000.00, '🏡🤩La casa de tus sueños en Tulancingo, Hidalgo🤩🏡', 160, 160, 5056.25, 5056.25, 2, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-1e5c2cd4b0d0-939b-cb052e13-9128-4a3e'),
(68, 'E3', 841000.00, 'Oportunidad de Casa en Venta, Tulancingo de Bravo, Hidalgo', 110, 110, 7645.45, 7645.45, 2, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-3b4527894551-1a45-1ca862a1-b09b-4b2d'),
(69, 'E3', 841000.00, 'CASA en venta en Col. Vicente Guerrero, Tulancingo, Hidalgo.', 110, 110, 7645.45, 7645.45, 2, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-16cb3becc27a-c164-5cc298ad-8bde-40c9'),
(70, 'E3', 841000.00, 'CASA EN VENTA TULANSINGO EDO DE MEX', 110, 110, 7645.45, 7645.45, 2, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-a17ef2c52b9d-bb91-bf8c698a-a4e2-443e'),
(71, 'E3', 841100.00, 'CASA HERMENEGILDO', 110, 110, 7646.36, 7646.36, 7, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-89f9c11193a8-cb87-43c79e8b-9e23-4a04'),
(72, 'E3', 870000.00, 'VENTA DE CASA EN VISITA REAL FRACCIONAMIENTO PRIVADO EN TULANCINGO COCINA DE REGALO', 90, 90, 9666.67, 9666.67, 2, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'San Juan', '', 'https://www.lamudi.com.mx/detalle/41032-73-3d794576c67b-61f8-1906c25-8c22-78b9'),
(73, 'E3', 870000.00, 'VENTA DE CASA EN VISITA REAL FRACCIONAMIENTO PRIVADO EN TULANCINGO COCINA DE REGALO', 90, 90, 9666.67, 9666.67, 2, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'San Juan', '', 'https://www.lamudi.com.mx/detalle/41032-73-4bb525b20b32-56ca-1906c25-a0d5-77b7'),
(74, 'E3', 895000.00, 'Casa en Venta Col. Lomas del Progreso, Tulancingo, Hidalgo', 129, 260, 6937.98, 3442.31, 9, 'Venta', 'Casa', 2, 3, 3, 0.00, 3.00, 0, 'Lomas de Progreso', '', 'https://www.lamudi.com.mx/detalle/41032-73-1317b748069a-fb8e-bd5e2fcc-a682-4496'),
(75, 'E3', 900000.00, 'VENTA DE CASA EN TULANCINGO HIDALGO', 220, 220, 4090.91, 4090.91, 2, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-5baf5499dcd8-5ea2-39f6acc9-9464-4c0a'),
(76, 'E3', 903000.00, 'VICENTE GUERRERO CASA EN VENTA TULANCINGO HIDALGO.', 100, 95, 9030.00, 9505.26, 8, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-f949bbd4f426-ae4b-d072548c-8fcc-32a4'),
(77, 'E3', 950000.00, '¡Compra Gran Oportunidad! ¡Iluminada Casa Adjudicada!  ¡Cesión Inmediata Ante Notario, Recuperación Bancaria! CS/FJCO', 140, 140, 6785.71, 6785.71, 9, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'El Mirador', '', 'https://www.lamudi.com.mx/detalle/41032-73-b4c836456869-6b00-52d6e119-9cc6-4bc5'),
(78, 'E3', 979000.00, 'Casa en Venta en Tulancingo, Hidalgo', 110, 120, 8900.00, 8158.33, 4, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-3c63bb7e3e29-7134-516b309d-a1ed-4970'),
(79, 'E3', 980000.00, 'CASA EN PROMOCION $980,000 solo pago de contado', 105, 70, 9333.33, 14000.00, 2, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Insurgentes', '', 'https://www.lamudi.com.mx/detalle/41032-73-4fc03eec26cc-664b-59212c90-b8a7-4ffa'),
(80, 'E3', 980000.00, 'HERMOSA PROPIEDAD EN PACHUCA HIDALGO', 140, 140, 7000.00, 7000.00, 2, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'El Mirador', '', 'https://www.lamudi.com.mx/detalle/41032-73-84df2e222225-f6d0-323dde76-b8c0-497f'),
(81, 'E3', 990100.00, 'Bonita casa en venta en Calle Hermenegildo Galeana, Vicente Guerrero, Tulancingo, Estado de Hidalgo', 110, 110, 9000.91, 9000.91, 5, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-a38c42066c4b-3b99-d2bea6c8-a2f9-4927'),
(82, 'D1', 1050000.00, 'CASA DE 1 NIVEL EN PRIVADA, TULANCINGO HIDALGO', 105, 70, 10000.00, 15000.00, 6, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-58b55adc017b-6914-f7d09bf-9a71-458e'),
(83, 'D1', 1080000.00, 'Casa con opción de crecimiento en Villas Santa María, Tulancingo Hgo.', 105, 73, 10285.71, 14794.52, 9, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-148a066ebd7c-a22f-24777fa3-acc5-46bd'),
(84, 'D1', 1095000.00, 'Casa en Guadalupe Tulancingo Hidalgo', 225, 420, 4866.67, 2607.14, 4, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Francisco I Madero', '', 'https://www.lamudi.com.mx/detalle/41032-73-65b8945bd384-31d9-6df8f8fe-9d99-438d'),
(85, 'D1', 1100000.00, 'VENTA DE CASA 3 RECAMARAS EN TULANCINGO HIDALGO', 105, 102, 10476.19, 10784.31, 16, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-855a866a4c28-80e9-6b217a01-90e4-3abf'),
(86, 'D1', 1100000.00, 'HERMOSA CASA EN VENTA EN TULANCINGO DE BRAVO HIDALGO.', 398, 398, 2763.82, 2763.82, 6, 'Venta', 'Casa', 2, 4, 2, 0.00, 2.00, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-c3d586e6bb16-bbfd-7ff3c95e-a3d7-4960'),
(87, 'D1', 1100000.00, 'VENTA DE CASA ECONOMICA DE 4 RECAMARAS EN COLONIA EL PARAISO EN TULANCINGO HIDALGO', 160, 100, 6875.00, 11000.00, 16, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-46863522d18d-457e-9ef05d1f-a468-3838'),
(88, 'D1', 1150000.00, 'CASA NUEVA EN PRIVADA SAN DANIEL, TULANCINGO HIDALGO', 105, 62, 10952.38, 18548.39, 16, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-e1e9f2183ac5-7f02-5ba171a0-bd32-34c5'),
(89, 'D1', 1179800.00, 'OY CASA EN VENTA LOMAS DEL PROGRESO TULANCINGO HIDALGO', 115, 120, 10259.13, 9831.67, 2, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Lomas de Progreso', '', 'https://www.lamudi.com.mx/detalle/41032-73-630658bc9139-cdc4-24fe49d-a3f2-4da2'),
(90, 'D1', 1179800.00, 'ACR(EMB) CASA EN VENTA EN COLONIA LOMAS DEL PROGRESO HIDALGO', 90, 100, 13108.89, 11798.00, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Lomas de Progreso', '', 'https://www.lamudi.com.mx/detalle/41032-73-97c68bc71b1d-3f88-be81f9be-9e8d-4fdf'),
(91, 'D1', 1180000.00, 'CASA EN FRACCIONAMIENTO CERRADO, CIMA DORADA TULANCINGO', 105, 77, 11238.10, 15324.68, 9, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'San Jose Caltengo', '', 'https://www.lamudi.com.mx/detalle/41032-73-60f9fc9ca4df-8fdf-6c7094aa-a826-4471'),
(92, 'D1', 1193100.00, 'ACR(EMB) CASA EN VENTA EN COLONIA LA MORENA HIDALGO', 90, 100, 13256.67, 11931.00, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-1dc5ab16e0a1-5034-cd073958-8adc-4c44'),
(93, 'D1', 1193100.00, 'OY CASA EN VENTA LA MORENA	TULANCINGO DE BRAVO HIDALGO', 115, 110, 10374.78, 10846.36, 2, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-34ea0a166e17-d8d5-941648bd-9e82-4ff2'),
(94, 'D2', 1280000.00, 'VENTA DE CASA DE LUJO 3 RECAMARAS EN TULANCINGO', 80, 120, 16000.00, 10666.67, 14, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Medias Tierras', '', 'https://www.lamudi.com.mx/detalle/41032-73-89ca4ee22d25-18f8-67cdfbc9-994b-1237'),
(95, 'D2', 1280100.00, 'Hermosa y amplia casa con excelentes acabados y todas las comodidades que soñaste', 110, 110, 11637.27, 11637.27, 5, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-bc03f6dbeda-b701-4367152-bb26-4584'),
(96, 'D2', 1290000.00, 'CASA AMPLIA EN VENTA EN TULANCINGO RAF1', 200, 250, 6450.00, 5160.00, 11, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Lindavista', '', 'https://www.lamudi.com.mx/detalle/41032-73-32d25fab3da5-ffa-6b44b106-885c-4f89'),
(97, 'D2', 1300000.00, 'CASA EN PRIVADA COL CALTENGO TULANCINGO', 70, 130, 18571.43, 10000.00, 4, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Caltengo', '', 'https://www.lamudi.com.mx/detalle/41032-73-53c139ae5387-c2fc-e19b8116-8df2-42e5'),
(98, 'D2', 1350000.00, 'CASA EN VENTA EN NAPATECO TULANCINGO, HIDALGO', 171, 105, 7894.74, 12857.14, 12, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Napateco', '', 'https://www.lamudi.com.mx/detalle/41032-73-14ca92dd8a4d-db6f-eaae4c26-89a0-3953'),
(99, 'D2', 1366025.00, 'vomo_ INVIERTE DE CONTADO Y GANATE VENTAJOSO PRECIO EN AMPLIA CASA EN TULANCINGO HGO, EN JARDINES DEL SUR...¡¡!!', 140, 240, 9757.32, 5691.77, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-b13c4f83548f-e2c1-de1fdda0-a367-44bb'),
(100, 'D2', 1366025.00, 'GDS.VENTA DE CASA EN JARDINES DEL SUR TULANCINGO DE BRAVO HIDALGO GDS/AS', 120, 120, 11383.54, 11383.54, 6, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-c05d32c8a2a0-1e10-f3f11bd6-b838-4459'),
(101, 'D2', 1450000.00, 'CASA NUEVA EN MAGISTERIO 1, TULANCINGO, HGO.', 120, 137, 12083.33, 10583.94, 16, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-407e0881cd49-4446-f1a2dce1-9d23-32af'),
(102, 'D2', 1450000.00, 'VENTA DE CASA ECONOMICA Y CENTRICA AMPLIA CON 4 RECAMARAS EN TULANCINGO', 128, 128, 11328.13, 11328.13, 6, 'Venta', 'Casa', 2, 4, 1, 1.00, 1.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-7b50f7d88d98-24f9-6f9f5e99-bf7b-1f12'),
(103, '', 1500000.00, 'BIENVENIDOS CRÉDITOS CASA EN MAGISTERIO, TULANCINGO', 143, 150, 10489.51, 10000.00, 2, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-2337098ffc6e-6666-b803183a-9d60-4922'),
(104, 'D3', 1695000.00, 'Sumérgete en la Vida de Ensueño: Privada Arboledas - Tu Hogar con Piscina Exclusiva', 114, 114, 14868.42, 14868.42, 14, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Valle Verde', '', 'https://www.lamudi.com.mx/detalle/41032-73-fe2378fa6102-e82e-6e6ea0a6-9f00-442e'),
(105, 'D3', 1710000.00, 'VENTA DE CASA EN HIDALGO COL JARDINES DEL SUR 3RA SECCION TULANCINGO', 228, 360, 7500.00, 4750.00, 3, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-7c03eaf87238-b2d3-74d0fbd3-b809-4b9e'),
(106, 'D3', 1737200.00, 'CASA ADJ. Chihuahua 1308, Vicente Guerrero, 43630 Tulancingo de Bravo, Hidalgo', 400, 404, 4343.00, 4300.00, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-62bf02973bdf-cdf3-b4e47ac3-b00a-4564'),
(107, 'C1', 1890000.00, 'CASA EN TULANCINGO A 45 MIN DE LA CIUDAD DE MEXICO', 80, 140, 23625.00, 13500.00, 16, 'Venta', 'Casa', 2, 2, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-252d3fdc1b9d-6034-cb024130-8ca5-3fa2'),
(108, 'C1', 1964923.00, 'Casa en Col. La herradura, Tulancingo de Bravo, Hidalgo., ¡Compra directa con el Banco, no se aceptan créditos!', 92, 140, 21357.86, 14035.16, 4, 'Venta', 'Casa', 1, 3, 1, 1.00, 1.50, 0, 'La Herradura', '', 'https://www.lamudi.com.mx/detalle/41032-73-b4e7d0412788-2160-b83f347d-9208-4c62'),
(109, 'C1', 1976116.00, 'vomo_ INVIERTE DE CONTADO Y GANATE VENTAJOSO PRECIO EN  RESIDENCIA EN MEDIAS TIERRAS DE TULANCINGO HIDALGO¡¡!!', 105, 220, 18820.15, 8982.35, 6, 'Venta', 'Casa', 1, 3, 2, 1.00, 2.50, 0, 'La Herradura', '', 'https://www.lamudi.com.mx/detalle/41032-73-f47d802b665e-1eb5-8a82c8a3-b8f1-42c9'),
(110, 'C1', 1976116.00, 'GDS.VENTA DE CASA EN LA HERRADURA TULANCINGO DE BRAVO HIDALGO GDS/AS', 120, 120, 16467.63, 16467.63, 6, 'Venta', 'Casa', 1, 3, 1, 1.00, 1.50, 0, 'La Herradura', '', 'https://www.lamudi.com.mx/detalle/41032-73-ccd0c59699a-351e-706be229-9ef4-4e59'),
(111, 'C1', 1987200.00, 'CASA ADJUDICADA EN Chihuahua 1308, Vicente Guerrero, 43630 Tulancingo de Bravo, Hidalgo', 400, 404, 4968.00, 4918.81, 2, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-3c38fbb93309-a2dc-eba2ca45-b24f-49b1'),
(112, '', 2000000.00, 'CASA EN EL ESTADO DE HIDALGO', 250, 170, 8000.00, 11764.71, 7, 'Venta', 'Casa', 2, 1, 1, 0.00, 1.00, 0, 'Francisco I Madero', '', 'https://www.lamudi.com.mx/detalle/41032-73-147f9b9aaae2-32cd-f903ca89-81d0-3a0c'),
(113, 'C2', 2030000.00, 'CASA EN LOMAS DEL PROGRESO TULANCINGO HIDALGO', 120, 200, 16916.67, 10150.00, 4, 'Venta', 'Casa', 2, 3, 3, 0.00, 3.00, 0, 'Lomas de Progreso', '', 'https://www.lamudi.com.mx/detalle/41032-73-d561c350942b-c458-8d462fc2-87d6-444a'),
(114, 'C2', 2159000.00, 'Hidalgo,Tulancingo,Almicar Residencial,Casa ,Venta', 105, 220, 20561.90, 9813.64, 8, 'Venta', 'Casa', 2, 6, 4, 1.00, 4.50, 0, 'La Herradura', '', 'https://www.lamudi.com.mx/detalle/41032-73-60e84bf363a9-7428-752d4dc9-bdcf-3afb'),
(115, 'C3', 2367780.00, 'HERMOSA CASA ADJ, COMPRAVENTA, Chihuahua , Vicente Guerrero, 43630 Tulancingo de Bravo, Hidalgo.', 400, 404, 5919.45, 5860.84, 11, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-ddabe15a05a2-976e-1effcc87-bd51-416b'),
(116, 'C3', 2400000.00, 'Casa exclusiva en  en venta. Privada, áreas verdes y cerca de todo', 119, 154, 20168.07, 15584.42, 16, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Valle Verde', '', 'https://www.lamudi.com.mx/detalle/41032-73-ce9992e02793-f83a-4951d748-8ce1-3d41'),
(117, '', 2500000.00, 'VENTA DE CASA EN  GRAN UBICACION', 228, 330, 10964.91, 7575.76, 2, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-b431ee90569a-c5cb-f0414f6c-898e-4d2d'),
(118, 'B1', 2600000.00, 'CASA DE UN NIVEL EN PRIVADA, MEDIAS TIERRAS', 200, 160, 13000.00, 16250.00, 2, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Medias Tierras', '', 'https://www.lamudi.com.mx/detalle/41032-73-7f4ce8503c96-4694-d8b1d0f3-b95f-4e82'),
(119, 'B1', 2650000.00, 'PROYECTO DE CASA EN PRIVADA RESIDENCIAL, TULANCINGO HIDALGO', 202, 135, 13118.81, 19629.63, 16, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Insurgentes', '', 'https://www.lamudi.com.mx/detalle/41032-73-48844530cc85-8bf0-ff3c1c48-b7eb-39b9'),
(120, 'B2', 2758000.00, 'VVV VENTA DE CASA CALLE FRANZ VON LISZT JARDINES DEL SUR 3A SECC TULANCINGO DE BRAVO HIDALGO', 70, 140, 39400.00, 19700.00, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-4c88e4b1cb97-8a55-3dcaa553-ad27-426f'),
(121, 'B2', 2758000.00, 'VENTA DE CASA EN LA CALLE FRANZ VON LISZT JARDINES DEL SUR TULANCINGO DE BRAVO HIDALGO', 80, 160, 34475.00, 17237.50, 5, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-b82b8a5bbade-ee7f-a7cb74a8-9ca0-47c4'),
(122, 'B2', 2890000.00, 'CASA EN VENTA EN TULANCINGO A 45 MINUTOS DE LA CIUDAD DE MEXICO', 220, 140, 13136.36, 20642.86, 5, 'Venta', 'Casa', 2, 3, 3, 1.00, 3.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-a69186d491c3-edad-23df1d88-911e-3ccc'),
(123, 'B2', 2990000.00, 'HIDALGO TULANCINGO DE BRAVO FRACC JARDINES DEL SUR CASA VENTA', 228, 360, 13114.04, 8305.56, 2, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-730a89293f3a-5ae-1903b17-b1aa-75fe'),
(124, '', 3000000.00, 'Casa en Privada, Tulancingo de Bravo, Residencial Riva Palacio', 200, 170, 15000.00, 17647.06, 9, 'Venta', 'Casa', 2, 2, 3, 0.00, 3.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-50049742f4f-c74f-e43909c1-bfe6-4285'),
(125, 'B3', 3200000.00, 'Casa - Tulancingo de Bravo', 200, 600, 16000.00, 5333.33, 10, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'El Banco', '', 'https://www.lamudi.com.mx/detalle/41032-73-ce47f616dd68-627e-e71d1c4a-a33f-3d24'),
(126, 'B3', 3200000.00, 'VENTA SE CASA ECONOMICA Y DE LUJO EN TULANCINGO HIDALGO 3 RECAMARAS', 140, 140, 22857.14, 22857.14, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-7b50f7d88d98-17e4-5eb74799-bf7b-1f12'),
(127, 'A1', 3300000.00, 'Paraiso Sur, Venta de Casa,	Tulancingo, Hidalgo.', 1049, 200, 3145.85, 16500.00, 7, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Benito Juárez', '', 'https://www.lamudi.com.mx/detalle/41032-73-bdf477dc8df6-ad59-5ce6c2ea-95fa-3f5a'),
(128, 'A1', 3350000.00, 'VENTA DE CASA AMPLIA Y DE LUJO SEMICENTRICA TULANCINGO 3 RECAMARAS', 200, 200, 16750.00, 16750.00, 6, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Santa Ana', '', 'https://www.lamudi.com.mx/detalle/41032-73-7b50f7d88d98-32e7-bb7921b9-bf7b-1f12'),
(129, 'A2', 3550000.00, 'VENTA DE CASA DE LUJO CENTRICA DE TULANCINGO 3 RECAMARAS', 200, 200, 17750.00, 17750.00, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Santa Ana', '', 'https://www.lamudi.com.mx/detalle/41032-73-7b50f7d88d98-1e26-b3b98b79-bf7b-1f12'),
(130, 'A2', 3555000.00, 'VENTA DE CASA EN CALLE FRANZ VON LISZT, FRACC. JARDINES DEL SUR, TULANCINGO HIDALGO MÉXICO, ¡NO SE ACEPTAN CRÉDITOS!', 228, 360, 15592.11, 9875.00, 8, 'Venta', 'Casa', 1, 4, 3, 1.00, 3.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-f965e0ae6b2f-b1c8-8cf5147d-97dd-4d3e'),
(131, '', 3750000.00, 'CASA DE 1 NIVEL EN LA MORENA, TULANCINGO', 160, 240, 23437.50, 15625.00, 16, 'Venta', 'Casa', 2, 4, 4, 0.00, 4.00, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-5b029fa4b8c7-f083-3a6060f6-9bd2-39bf'),
(132, 'A3', 3946465.00, 'vomo_ INVIERTE DE CONTADO Y GANATE VENTAJOSO PRECIO EN GRAN PROPIEDAD DEL  PEDREGAL DE SAN FRANCISCO EN TULANCINGO HIDALGO!!¡¡¡', 216, 300, 18270.67, 13154.88, 6, 'Venta', 'Casa', 1, 4, 3, 1.00, 3.50, 0, 'Pedregal de San Francisco', '', 'https://www.lamudi.com.mx/detalle/41032-73-128b99188b37-43d6-31813b1c-9b82-4058'),
(133, 'A3', 3946465.00, 'VENTA DE CASA EN PEDREGAL DE SAN FRANCISCO TULANCINGO DE BRAVO HIDALGO GDS/AS', 150, 150, 26309.77, 26309.77, 6, 'Venta', 'Casa', 1, 3, 1, 1.00, 1.50, 0, 'Pedregal de San Francisco', '', 'https://www.lamudi.com.mx/detalle/41032-73-dfeffb37df74-1249-f8860080-9ed3-4249'),
(134, 'S1', 4180000.00, 'CASA EN TULANCINGO DE BRAVO, HIDALGO', 360, 228, 11611.11, 18333.33, 7, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-2fc7baf65110-1d0a-86109a81-a664-48cc'),
(135, 'S1', 4250000.00, 'VENTA DE HERMOSA CASA EN RESIDENCIAL SAN FRANCISCO HUATENGO , TULANCINGO', 200, 375, 21250.00, 11333.33, 4, 'Venta', 'Casa', 1, 3, 2, 1.00, 2.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-16210fae8ddb-4747-77f6bf67-aab6-45c4'),
(136, 'S1', 4300000.00, 'Casa en Venta, Col. La Morena. Tulancingo. Pachuca.', 160, 240, 26875.00, 17916.67, 12, 'Venta', 'Casa', 2, 5, 4, 1.00, 4.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-76d564d8c2b1-d515-4c729ba5-b486-46e3'),
(137, 'S1', 4600000.00, 'CASA  EN TULANCINGO', 2500, 300, 1840.00, 15333.33, 5, 'Venta', 'Casa', 2, 3, 3, 1.00, 3.50, 0, 'Insurgentes', '', 'https://www.lamudi.com.mx/detalle/41032-73-7777b6b089ed-8def-ac0c0456-8c1f-37a5'),
(138, 'S1', 4675000.00, 'INMUEBLE CON POSESIÓN INMEDIATA ( NO CRÉDITOS ) UBICADA EN EL FRACCIONAMIENTO SAN FRANCISCO HUATENGO TULA HIDALGO', 200, 375, 23375.00, 12466.67, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-f61987d1820d-15f3-b386ae99-ac14-4800'),
(139, 'S1', 4830000.00, 'CASA EN VENTA COL JARDINES DEL SUR TULANCINGO DE BRAVO HIDALGO', 228, 360, 21184.21, 13416.67, 16, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-d5a3d45f5dbe-72d8-ae5720cb-bf37-39c1'),
(140, '', 8000000.00, 'Casa - Tulancingo de Bravo', 482, 460, 16597.51, 17391.30, 17, 'Venta', 'Casa', 2, 5, 5, 0.00, 5.00, 0, 'Felipe Angeles', '', 'https://www.lamudi.com.mx/detalle/41032-73-60adaf87eb8e-1677-853f180a-b1be-3423'),
(141, 'S3', 10000000.00, 'CASA A ESTRENAR , DECORADA Y AMUEBLADA PARA SU VENTA', 420, 420, 23809.52, 23809.52, 3, 'Venta', 'Casa', 1, 6, 6, 1.00, 6.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-a5f10f133ff1-ab5a-90ddce09-8d03-1062');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alfa_julio_2024_tulancingo`
--
ALTER TABLE `alfa_julio_2024_tulancingo`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
