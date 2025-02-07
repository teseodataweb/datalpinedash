-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2024 a las 04:40:08
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
-- Estructura de tabla para la tabla `alfa_mayo_2024_tulancingo`
--

CREATE TABLE `alfa_mayo_2024_tulancingo` (
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
-- Volcado de datos para la tabla `alfa_mayo_2024_tulancingo`
--

INSERT INTO `alfa_mayo_2024_tulancingo` (`id`, `Categoria`, `Precio`, `propiedad`, `metros_total`, `metros_construido`, `precio_m2_terreno`, `precio_m2_construido`, `tiempo_de_publicacion`, `Estado`, `Tipo`, `Estacionamientos`, `Recamaras`, `Banos`, `Medio_banos`, `Banos_Total`, `Seguridad`, `Colonia`, `CP`, `url`) VALUES
(1, 'E1', 430000.00, 'HERMOSA CASA EN VENTA EN SAUCE TULANCINGO HIDALGO', 150, 280, 2866.67, 1535.71, 5, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-251cc42ea3cd-fbaa-847c8ada-8a91-410c'),
(2, 'E1', 430000.00, 'Acogedora casa en Tulancingo, Hidalgo', 150, 280, 2866.67, 1535.71, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-86871f3c61d2-adbb-2f46a126-9805-4f92'),
(3, 'E1', 430000.00, 'Preciosa casa en SAUCE 201, RINCONADA LA MORENA, 43625 TULANCINGO, HGO.', 150, 280, 2866.67, 1535.71, 5, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-17cbf7a5bfa5-7a9f-c1204fb3-bc40-4133'),
(4, 'E1', 430000.00, 'HERMOSA PROIEDAD EN TULANCINGO HIDALGO', 150, 280, 2866.67, 1535.71, 656, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-a57baf78ccf8-5dea-6e41bc16-9982-4b65'),
(5, 'E1', 430000.00, 'PRECIOSA CASA EN TULANCINGO, HIDALGO', 150, 280, 2866.67, 1535.71, 656, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-65193ca92e98-4692-858dee17-9aa0-4ca5'),
(6, 'E1', 430000.00, 'Â¡PRECIOSA CASA EN TULANCINGO, HIDALGO!', 150, 280, 2866.67, 1535.71, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-4d7fa79d04ca-23af-545267bd-af20-4425'),
(7, 'E1', 430000.00, 'PRECIOSA CASA EN TULANCINGO', 150, 280, 2866.67, 1535.71, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-a8deca892771-c9bb-2a051ca7-b556-4eb1'),
(8, 'E1', 430000.00, 'INCREIBLE CASA EN TULANCINGO, HIDALGO', 150, 280, 2866.67, 1535.71, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-9ae476c2e209-275d-6683697f-86e9-49f8'),
(9, 'E1', 430000.00, 'PRECIOSA CASA EN VENTA EN TULANCIGO, HIDALGO,EXCELENTE OPORTUNIDAD', 280, 150, 1535.71, 2866.67, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-db8936e093ab-7fa5-f084aba4-81a9-4f65'),
(10, 'E1', 430000.00, 'BONITA CASA CERCANA AL CENTRO DE TULANCINGO.', 280, 150, 1535.71, 2866.67, 5, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-b325cd566294-ff3a-d623fea-a3b2-4897'),
(11, 'E1', 430000.00, 'BONITA CASA EN TULANCINGO, HIDALGO', 280, 150, 1535.71, 2866.67, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Insurgentes', '46630', 'https://www.lamudi.com.mx//detalle/41032-73-e9307c71dcd-3e2b-dc1453db-bce0-4360'),
(12, 'E1', 440000.00, 'Preciosa casa en Tulancingo de Bravo, Hidalgo', 115, 200, 3826.09, 2200.00, 656, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-6ed09ec6e9e9-d293-b863d558-b9d3-4f4e'),
(13, 'E1', 440000.00, 'EN VENTA HERMOSA PROPIEDAD EN TULANCINGO', 115, 200, 3826.09, 2200.00, 656, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-7917086b5819-d800-c8279c5a-a9e0-4e39'),
(14, 'E1', 445000.00, 'VENTA DE CASA C CARLOS CHÃVEZ JARDINES DEL SUR TULANCINGO', 115, 200, 3869.57, 2225.00, 5, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-749297cfeed6-af28-a292334-8fe1-4ca3'),
(15, 'E1', 455000.00, 'VENTA DE CASA CARLOS CHÃVEZ JARDINES DEL SUR 4TA SECC TULANCINGO', 115, 200, 3956.52, 2275.00, 5, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-ee5d2509a01e-cac-1d54b638-be42-455c'),
(16, 'E1', 455000.00, 'VENTA DE CASA EN TULANCINGO HIDALGO', 115, 200, 3956.52, 2275.00, 5, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Jaltepec', '43700', 'https://www.lamudi.com.mx//detalle/41032-73-f01bb06c8253-8033-fab37d7d-a8c0-4a56'),
(17, 'E1', 455000.00, 'VENTA DE CASA EN TULANCINGO', 100, 180, 4550.00, 2527.78, 5, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-ec6dc6be7b68-6fec-ab37b14c-8eb4-4fdb'),
(18, 'E1', 487467.00, 'vomo_ INVIERTE AHORA EN CASA DE RECUPERACIÃ“N BANCARIA EN RINCONES DE LA HACIENDA DE TULANCINGO HIDALGO!!Â¡Â¡', 96, 75, 5077.78, 6499.56, 6, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-51571d92baa0-50c0-7c510d55-8ea6-43c2'),
(19, 'E2', 500000.00, 'HERMOSA CASA EN, JARDINES DEL SUR 3 SECC, TULANCINGO, HIDALGO', 230, 320, 2173.91, 1562.50, 7, 'Venta', 'Casa', 1, 5, 2, 0.00, 2.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-b843ac7f99a5-fd-eaac92f6-a4ea-4e0a'),
(20, 'E2', 500000.00, 'Â¡Â¡Â¡BONITA CASA EN TULANCINGO, HIDALGO!!! .SOC.', 165, 225, 3030.30, 2222.22, 9, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Lomas de Progreso', '43615', 'https://www.lamudi.com.mx//detalle/41032-73-d3c83135766a-5b1a-91985170-a46d-4208'),
(21, 'E2', 520000.00, 'CASA EN VENTA TULANCINGO HIDALGO', 120, 240, 4333.33, 2166.67, 16, 'Venta', 'Casa', 1, 4, 2, 0.00, 2.00, 0, 'Lomas Del Paraíso', '43684', 'https://www.lamudi.com.mx//detalle/41032-73-164b00fed1ad-5af1-9809fced-b47e-3231'),
(22, 'E2', 525000.00, 'Casas Solas 2 RECAMARAS MAS ALCOBA Infonavit E Issfam 90 M2 De Terreno', 90, 90, 5833.33, 5833.33, 16, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Huapalcalco', '43629', 'https://www.lamudi.com.mx//detalle/41032-73-eaa93dd772fd-d395-61a87f1f-9342-38ac'),
(23, 'E2', 525000.00, 'CASAS SOLAS ECONOMICAS 2 RECAMARAS MAS ALCOBA, PARA INFONAVIT E ISSFAM', 90, 52, 5833.33, 10096.15, 16, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Francisco I. Madero', '43650', 'https://www.lamudi.com.mx//detalle/41032-73-d179f04ccd-a475-35c9e50f-a5a7-32a2'),
(24, 'E2', 549000.00, 'EXCELENTE OPORTUNIDAD DE INVERSION', 100, 100, 5490.00, 5490.00, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero', '43630', 'https://www.lamudi.com.mx//detalle/41032-73-3a3d04d96fed-489c-52400312-9e25-44c6'),
(25, 'E2', 550000.00, 'CASA EN VENTA VICENTE GUERRERO, TULANCINGO HIDALGO MJH', 125, 205, 4400.00, 2682.93, 9, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'La Morena', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-f2a6b856db06-fa8c-631f5c75-a8f9-4af2'),
(26, 'E2', 560000.00, 'ES HORA DE REALIZAR TU SUEÃ‘O Y ADQUIRIR ESTA HERMOSA CASA EN TULANCINGO HIDALGO', 114, 206, 4912.28, 2718.45, 8, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-f86cc0bfb87a-5642-7b90e0af-9609-458d'),
(27, 'E2', 560000.00, 'EXCELENTE CASA EN VENTA DE LAS FUENTES, LA MORENA TULANCINGO HIDALGO', 120, 180, 4666.67, 3111.11, 5, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-8d11b20029fc-60b-317f5ab2-bded-422e'),
(28, 'E2', 560000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO HIDALGO DE LA COLONIA LA MORENA SECC NTE B', 120, 180, 4666.67, 3111.11, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-f12876b5cd04-24fe-2a9b5c8f-b852-4ffe'),
(29, 'E2', 560000.00, 'EXCELENTE CASA EN VENTA DE LAS FUENTES, LA MORENA TULANCINGO HIDALGO', 120, 180, 4666.67, 3111.11, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-f4ce5f5b66e1-be0e-651e4e35-a374-4e5a'),
(30, 'E2', 560000.00, 'VENTA DE CASA EN HIDALGO', 120, 180, 4666.67, 3111.11, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-2896c8b2682a-32b7-e4c3b95c-856a-40c6'),
(31, 'E2', 560000.00, 'VENTA DE CASA EN LA MORENA SECC. NORTE, TULANCINGO, HGO.', 120, 180, 4666.67, 3111.11, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-97b436767fac-98aa-784cc262-919d-5012'),
(32, 'E2', 560000.00, 'CASA EN VENTA DE RECUPERACIÃ“N BANCARIA EN De Las Fuentes, La Morena SecciÃ³n Norte B, Tulancingo, Estado de Hidalgo, MÃ©xico', 120, 180, 4666.67, 3111.11, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-cde901e0e291-f4e2-37869f3d-b4d8-4410'),
(33, 'E2', 560000.00, 'VENTA DE CASA EN TULANCINGO COL LA MORENA TULANCINGO HIDALGO', 120, 180, 4666.67, 3111.11, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-289d104a760d-af40-c277d639-b968-4510'),
(34, 'E2', 560000.00, 'venta de cas en tulancingo', 120, 180, 4666.67, 3111.11, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-988056f1134f-ac8b-b7dfec29-98bb-477b'),
(35, 'E2', 570000.00, 'HERMOSA Y AMPLIA CASA EN JARDINES DEL SUR TULANCINGO HIDALGO, SUPER PRECIO!!!', 225, 360, 2533.33, 1583.33, 7, 'Venta', 'Casa', 1, 4, 3, 0.00, 3.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-9a87f2e30aa8-b101-a994006c-990c-4cc8'),
(36, 'E2', 578000.00, 'Casa en venta en Tulancingo de Bravo, Hidalgo en 578,000 pesos', 178, 178, 3247.19, 3247.19, 10, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-c9fbbd9465df-c54-3b7cdb6-b0e3-4a13'),
(37, 'E2', 578000.00, 'BONITA CASA EN VENTA EN LA MORENA, TULANCINGO', 178, 178, 3247.19, 3247.19, 7, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-fbb2e5ddca9e-6caa-3dbace8f-9f6e-46b4'),
(38, 'E2', 578000.00, 'CASA EN VENTA , PACHUCA', 178, 178, 3247.19, 3247.19, 656, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-cd9e346a20ef-c774-4ddc6d4-8fac-47b0'),
(39, 'E2', 580000.00, 'Casa en venta en Rinconada La Morena, Tulancingo Hidalgo. VPV', 160, 280, 3625.00, 2071.43, 7, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Vicente Guerrero', '43630', 'https://www.lamudi.com.mx//detalle/41032-73-823dbe357fb8-2f45-5ab98864-b5b7-4a16'),
(40, 'E2', 580000.00, 'PRECIOSA CASA EN TULANCINGO HIDALGO OAHM', 150, 280, 3866.67, 2071.43, 9, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Vicente Guerrero', '43630', 'https://www.lamudi.com.mx//detalle/41032-73-31c0d0c8c869-3288-13762b7d-982b-4ede'),
(41, 'E2', 580000.00, 'CASA EN VENTA EN TULANCINGO HIDALGO EXCELENTE PRECIO.', 110, 110, 5272.73, 5272.73, 5, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero', '43630', 'https://www.lamudi.com.mx//detalle/41032-73-b41b6e7e57d0-bf9b-d0b8f1ea-a6ea-44b9'),
(42, 'E2', 580000.00, 'CASA EN VENTA TULANCINGO DE BRAVO, COL VICENTE GUERRERO', 110, 110, 5272.73, 5272.73, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-16703c40b97a-1893-369b2930-8650-410b'),
(43, 'E2', 580000.00, 'Propiedad en venta en Vicente Guerrero,Hidalgo', 110, 110, 5272.73, 5272.73, 5, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Napateco', '43629', 'https://www.lamudi.com.mx//detalle/41032-73-d399a434de05-8122-30e5a070-8076-4fa1'),
(44, 'E2', 589658.00, 'CASA EN NAPATECO TULANCINGO DE BRAVO HIDALGO RECUPERACIÃ“N HIPOTECARIA', 90, 60, 6551.76, 9827.63, 5, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-2b3a900c01cd-e0f1-939a8188-bf77-451f'),
(45, 'E2', 590000.00, 'PRECIOSA CASA EN VENTA EN LA MORENA, TULANCINGO, HIDALGO', 266, 398, 2218.05, 1482.41, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-fdb14673aff2-c5df-df4d4613-89ed-4b93'),
(46, 'E2', 590000.00, 'PRECIOSA CASA EN VENTA UBICADA EN LA MORENA SECC NTE B, TULANCINGO, HIDALGO', 266, 398, 2218.05, 1482.41, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-5c48631900bf-71fe-7013213-a719-4bfd'),
(47, 'E2', 590000.00, 'PRECIOSA CASA EN VENTA EN DE LAS FUENTES 400, LA MORENA SECC NTE. B, TULANCINGO, HIDALGO.', 266, 398, 2218.05, 1482.41, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Cebolletas', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-90a03fcc90b8-8acf-2c3d1fb4-9c50-44e1'),
(48, 'E2', 590000.00, 'HERMOSA CASA EN HIDALGO', 266, 398, 2218.05, 1482.41, 5, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-a3002a27c83a-bfc-fabe67f0-9cb6-47ea'),
(49, 'E2', 590000.00, 'HERMOSA CASA EN TULANCINGO HIDALGO', 266, 398, 2218.05, 1482.41, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-9124678c7d65-8c2c-21c76e2-8786-4fec'),
(50, 'E2', 590000.00, 'HERMOSA PROPIEDAD CERCA DEL CENTRO DE TULANCINGO.', 398, 266, 1482.41, 2218.05, 5, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Huapalcalco', '43629', 'https://www.lamudi.com.mx//detalle/41032-73-8db530b7ec3d-3648-318e96cf-a16c-444c'),
(51, 'E2', 590000.00, 'HERMOSA CASA EN VENTA EN TULANCINGO HGO', 160, 240, 3687.50, 2458.33, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-9ce74ee2ed-10f9-55424dff-a502-4a88'),
(52, 'E2', 590000.00, 'VENTA DE CASA ECONOMICA AMPLIA EN TULANCINGO 2 RECAMARAS', 90, 50, 6555.56, 11800.00, 13, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-5bf156c15edf-3d02-80444c89-8277-1237'),
(53, 'E2', 600000.00, 'Casa en Rinconada la Morena, Tulancingo.', 168, 225, 3571.43, 2666.67, 7, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-d3f0d839cbb4-6a95-daf40633-8d10-44d0'),
(54, 'E2', 600000.00, 'CASA EN VENTA - COL. LA MORENA, TULANCINGO', 180, 210, 3333.33, 2857.14, 11, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-ec594c4bb147-7627-6e552390-86f7-4e50'),
(55, 'E2', 600000.00, 'CASA EN VENTA GUADALUPE TULANCINGO HIDALGO MJH', 240, 185, 2500.00, 3243.24, 9, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-69c22f98a785-dd34-c7678403-9029-45a0'),
(56, 'E2', 600000.00, 'VENTA DE CASA ECONOMICA EN RINCONES DE LA HACIENDA 2 RECAMARAS', 90, 90, 6666.67, 6666.67, 5, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Jaltepec', '43700', 'https://www.lamudi.com.mx//detalle/41032-73-d1d150531641-ef11-f4d193e9-abd5-1f92'),
(57, 'E2', 600000.00, 'VENTA DE CASA ECONOMICA EN RINCONES DE LA HACIENDA 2 RECAMARAS', 90, 90, 6666.67, 6666.67, 5, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'La Morena', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-d1d150531641-ef1a-ad44b039-abd5-1f92'),
(58, 'E2', 615000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO COL LA MORENA SECC NORTE B', 168, 280, 3660.71, 2196.43, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-608e464268fa-eb0b-d1432091-9552-4781'),
(59, 'E2', 615000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO COL LA MORENA SECC NTE B', 168, 280, 3660.71, 2196.43, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-1007c01e5444-2517-41ad4639-ae08-45f6'),
(60, 'E2', 618000.00, 'OPORTUNIDAD INVIERTE EN TU PATRIMONIO, CASA DE RECUPERACION BANCARIA, EN CUMBRES DE MALTRATA.', 178, 178, 3471.91, 3471.91, 6, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-d1d66d395d57-77b1-eb424714-820b-432f'),
(61, 'E2', 618000.00, 'OPORTUNIDAD INVIERTE EN TU PATRIMONIO, CASA DE RECUPERACION BANCARIA, EN CUMBRES DE MALTRATA.', 178, 178, 3471.91, 3471.91, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-60708fd19e7d-9998-a31f83b3-8e99-4a51'),
(62, 'E2', 618000.00, 'LA CASA DE TUS SUEÃ‘OS', 178, 178, 3471.91, 3471.91, 7, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-5ba6e323a427-e36e-5423bad5-a633-46af'),
(63, 'E2', 618000.00, 'CASA DE DOS NIVELES EN VENTA EL LA MORENA NORTE TULANCINGO HIDLAGO MÃ‰XICO.', 140, 140, 4414.29, 4414.29, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-8b6e09ee7900-d518-bdca3f75-8de0-496d'),
(64, 'E2', 618000.00, 'CASA 3 RECAMARAS, 2 NIVELES, 2.5 BAÃ‘OS, 2 ESTACIONAMIENTOS', 140, 140, 4414.29, 4414.29, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-715386dafdf6-a2aa-f8fed2f9-938e-4bb4'),
(65, 'E2', 618000.00, 'CASA EN VENTA LA MORENA SECC NTE, TULANCINGO, HGO.', 140, 140, 4414.29, 4414.29, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-b566d79f6c9d-f244-623eff87-97e9-41dd'),
(66, 'E2', 622000.00, 'Casa en venta Guadalupe 1ra SecciÃ³n, Tulancingo, Hidalgo DD41 GR', 230, 230, 2704.35, 2704.35, 10, 'Venta', 'Casa', 1, 4, 3, 0.00, 3.00, 0, 'Francisco I. Madero', '43650', 'https://www.lamudi.com.mx//detalle/41032-73-cba1ec894a47-74a-382d2619-87dd-4c9b'),
(67, 'E2', 625000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO EN HIDALGO', 156, 280, 4006.41, 2232.14, 8, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-c9db711ba8b9-e613-86cfbc2e-97cc-47fa'),
(68, 'E2', 625000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO HILDAGO DE LA COLONIA LA MORENA', 156, 280, 4006.41, 2232.14, 8, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-fecb761aa60e-fe39-c1e902d5-a969-4211'),
(69, 'E2', 625000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO, HIDALGO, COLONIA LA MORENA', 156, 280, 4006.41, 2232.14, 10, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-49a72ba8f921-acd1-e2802dd4-a885-405f'),
(70, 'E2', 628000.00, 'CASA EN VENTA , PACHUCA', 114, 114, 5508.77, 5508.77, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-244505ce9199-c891-ca01ac12-b877-4920'),
(71, 'E2', 628000.00, 'OPORTUNIDAD INVIERTE EN TU PATRIMONIO, CASA DE RECUPERACION BANCARIA, EN CUMBRES DE MALTRATA.', 114, 114, 5508.77, 5508.77, 6, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-1649ede6aeba-c5bd-3be67b2d-b13c-43cc'),
(72, 'E2', 650000.00, 'Bonita e Iluminada casa en Tulancingo Jardines del Sur 3a SecciÃ³n CesiÃ³n Inmediata', 266, 370, 2443.61, 1756.76, 656, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-1782bbcbd130-f991-401bca49-8d12-40da'),
(73, 'E2', 650000.00, 'CASA EN TULANCINGO', 225, 325, 2888.89, 2000.00, 656, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-b86d442b144f-17f0-e6b4aa6f-97c9-4729'),
(74, 'E2', 650000.00, 'VENTA DE CASA ECONÃ“MICA EN NAPATECO, EN TULANCINGO HIDALGO', 90, 90, 7222.22, 7222.22, 6, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'San Nicolás Cebolletas', '43710', 'https://www.lamudi.com.mx//detalle/41032-73-41ce0348aadc-9c56-96819439-86d4-1f2c'),
(75, 'E2', 650568.00, 'vomo_ APARTA AHORA PROPIEDAD EN ESQUINA DE LA COLONIA VICENTE GUERRERO DE TULANCINGO HIDALGO !!Â¡Â¡', 100, 90, 6505.68, 7228.53, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero', '43630', 'https://www.lamudi.com.mx//detalle/41032-73-2dd412d5ddaa-208a-72f65def-a62d-40e7'),
(76, 'E2', 678000.00, 'VENTA DE CASA EN CONDOMINIO TULANCINGO', 100, 120, 6780.00, 5650.00, 5, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Pedregal de San Francisco', '43673', 'https://www.lamudi.com.mx//detalle/41032-73-6c6ae9edf2af-fd73-623e7b80-b9b2-4b8d'),
(77, 'E2', 685590.00, 'Casa en VENTA, La Morena secc norte B, Tulancingo de Bravo, Hidalgo. CAL', 170, 210, 4032.88, 3264.71, 8, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-a52627981427-d469-5e954cb0-a477-40d3'),
(78, 'E2', 720000.00, 'Vendo casa', 90, 90, 8000.00, 8000.00, 5, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Napateco', '43629', 'https://www.lamudi.com.mx//detalle/41032-73-69b7318a5862-82f4-fbf74019-ade0-1f95'),
(79, 'E2', 720000.00, 'Vendo casa', 90, 90, 8000.00, 8000.00, 5, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Napateco', '43629', 'https://www.lamudi.com.mx//detalle/41032-73-69b7318a5862-82ff-14303979-ade0-1f95'),
(80, 'E2', 720000.00, 'Casas econÃ³micas en Privada, Napateco Tulancingo Hgo.', 91, 53, 7912.09, 13584.91, 12, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Napateco', '43629', 'https://www.lamudi.com.mx//detalle/41032-73-61c2eecd4e32-58e5-84cdbd52-9055-4de0'),
(81, 'E2', 737336.00, 'GRAN OPORTUNIDAD BONITA CASA UBICADA EN CALLE FRANCISCO VILLA COL EL MIRADOR MPO TULANCINGO DE BRAVO HIDALGO, EXCELENTE PRECIO $737,336', 120, 120, 6144.47, 6144.47, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-788a516b9f13-c849-bf85cfe8-8c84-40b5'),
(82, '', 750000.00, 'CASA EN VENTA - COL. RINCONADA LA MORENA, TULANCINGO', 150, 180, 5000.00, 4166.67, 11, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-1d94401d58d6-9c4d-e8ea114e-a7db-42c1'),
(83, 'E3', 790000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO, HIDALGO.', 160, 330, 4937.50, 2393.94, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-21c7c9290e75-a25f-1562b92c-88df-48ae'),
(84, 'E3', 790000.00, 'VENTA DE CASA EN HIDALGO TULANCINGO DE HIDALGO FRACC RINCONADA LA MORENA', 114, 206, 6929.82, 3834.95, 15, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Los Sabinos', '43629', 'https://www.lamudi.com.mx//detalle/41032-73-e8698d24e755-52e3-ea247137-b776-4c8e'),
(85, 'E3', 790000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO HILDAGO DE LA COLONIA FRACC RINCONADA LA MORENA', 114, 206, 6929.82, 3834.95, 8, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-1c6a9fd4f68-3872-d3ed76c2-a217-4800'),
(86, 'E3', 790000.00, 'HERMOSA CASA EN VENTA EN FRACCIONAMIENTO RINCONADA LA MORENA EN TULANCINGO DE BRAVO EN HIDALGO', 114, 206, 6929.82, 3834.95, 6, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Los Sabinos', '43629', 'https://www.lamudi.com.mx//detalle/41032-73-540dcc266a05-e5af-52e04ab5-bf3d-4bff'),
(87, 'E3', 790000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO EN HIDALGO', 114, 206, 6929.82, 3834.95, 8, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-44b779327a0e-bcba-a8c7fb04-a455-46ab'),
(88, 'E3', 790000.00, 'VENTA DE CASA EN CALLE SAUCE 201 COLONIA FRACCIONAMIENTO RINCONADA LA MORENA ALCALDIA TULANCINGO DE BRAVO / HIDALGO', 114, 206, 6929.82, 3834.95, 6, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-43a2df1413d6-6aea-e0764e62-87f0-40e9'),
(89, 'E3', 790000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO FRACCIONAMIENTO RINCONADA LA MORENA', 114, 206, 6929.82, 3834.95, 6, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-3116b8629a46-88c4-d67d7fcd-a333-43ab'),
(90, 'E3', 799000.00, 'PROPIEDAD EN OPORTUNIDAD EN COL. NUEVO TULANCINGO', 119, 200, 6714.29, 3995.00, 10, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Los Pinos', '43612', 'https://www.lamudi.com.mx//detalle/41032-73-5b3bf28010f3-ec-c8c89156-bfdd-41ea'),
(91, 'E3', 800000.00, 'AMPLIA CASA EN TULANCINGO', 330, 230, 2424.24, 3478.26, 16, 'Venta', 'Casa', 1, 4, 2, 0.00, 2.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-631aa1a8e8a6-59b-d8b85be5-a436-3c4f'),
(92, 'E3', 835000.00, 'Casa en Venta Col. La Morena, Tulancingo de Bravo, Hidalgo', 140, 140, 5964.29, 5964.29, 13, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-e34bd5879d4-99d7-c5e49891-8b18-4050'),
(93, 'E3', 841100.00, 'CASA HERMENEGILDO', 110, 110, 7646.36, 7646.36, 7, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero', '43630', 'https://www.lamudi.com.mx//detalle/41032-73-89f9c11193a8-cb87-43c79e8b-9e23-4a04'),
(94, 'E3', 895000.00, 'Casa en Venta Col. Lomas del Progreso, Tulancingo, Hidalgo', 129, 260, 6937.98, 3442.31, 9, 'Venta', 'Casa', 1, 3, 3, 0.00, 3.00, 0, 'Lomas de Progreso', '43615', 'https://www.lamudi.com.mx//detalle/41032-73-1317b748069a-fb8e-bd5e2fcc-a682-4496'),
(95, 'E3', 900000.00, 'ES HORA DE REALIZAR TU SUEÃ‘O Y ADQUIRIR ESTA HERMOSA CASA EN TULANCINGO HIDALGO', 220, 220, 4090.91, 4090.91, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-676e3c4dd0a1-ffc7-52ac93e1-97fa-4e8d'),
(96, 'E3', 900000.00, 'CASA EN VENTA **TULANCINGO HIDALGO** EXCELENTE PRECIO.', 180, 180, 5000.00, 5000.00, 5, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'El Mirador', '43659', 'https://www.lamudi.com.mx//detalle/41032-73-d4b6d5acfd4c-fbf6-8b150936-b677-49ba'),
(97, 'E3', 903000.00, 'VICENTE GUERRERO CASA EN VENTA TULANCINGO HIDALGO.', 100, 95, 9030.00, 9505.26, 8, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero', '43630', 'https://www.lamudi.com.mx//detalle/41032-73-f949bbd4f426-ae4b-d072548c-8fcc-32a4'),
(98, 'E3', 950000.00, 'VENTA DE CASA ECONÃ“MICA EN PRIVADA EN TULANCINGO 3 RECAMARAS', 90, 90, 10555.56, 10555.56, 16, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Tulancingo centro', '43600', 'https://www.lamudi.com.mx//detalle/41032-73-726621aca3cf-3af-888d711b-a8a1-337b'),
(99, 'E3', 979000.00, 'Casa en Venta en Tulancingo, Hidalgo', 110, 120, 8900.00, 8158.33, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero', '43630', 'https://www.lamudi.com.mx//detalle/41032-73-3c63bb7e3e29-7134-516b309d-a1ed-4970'),
(100, 'E3', 985000.00, 'CASA DE 1 NIVEL EN FRACC. VILLAS SANTA MARIA, TULANCINGO HIDALGO', 105, 76, 9380.95, 12960.53, 16, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '43645', 'https://www.lamudi.com.mx//detalle/41032-73-7ce59ea81ac0-ba8f-53ce538d-9349-3d2f'),
(101, 'E3', 990000.00, 'EXTRENA TU CASA A BAJO COSTO EN **TULANCINGO DE BRAVO** HGO.', 110, 110, 9000.00, 9000.00, 7, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero', '43630', 'https://www.lamudi.com.mx//detalle/41032-73-bf57b977d082-55cb-a85d7cdf-ba19-4e54'),
(102, 'E3', 990100.00, 'Bonita casa en venta en Calle Hermenegildo Galeana, Vicente Guerrero, Tulancingo, Estado de Hidalgo', 110, 110, 9000.91, 9000.91, 5, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero', '43630', 'https://www.lamudi.com.mx//detalle/41032-73-a38c42066c4b-3b99-d2bea6c8-a2f9-4927'),
(103, 'D1', 1050000.00, 'VENTA DE CASA DE LUJO 3 RECAMARAS EN TULANCINGO', 80, 120, 13125.00, 8750.00, 14, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Medias Tierras', '43698', 'https://www.lamudi.com.mx//detalle/41032-73-89ca4ee22d25-18f8-67cdfbc9-994b-1237'),
(104, 'D1', 1050000.00, 'CASA DE 1 NIVEL EN PRIVADA, TULANCINGO HIDALGO', 105, 70, 10000.00, 15000.00, 6, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '43645', 'https://www.lamudi.com.mx//detalle/41032-73-58b55adc017b-6914-f7d09bf-9a71-458e'),
(105, 'D1', 1080000.00, 'Casa con opciÃ³n de crecimiento en Villas Santa MarÃ­a, Tulancingo Hgo.', 105, 73, 10285.71, 14794.52, 9, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '43645', 'https://www.lamudi.com.mx//detalle/41032-73-148a066ebd7c-a22f-24777fa3-acc5-46bd'),
(106, 'D1', 1100000.00, 'ES HORA DE REALIZAR TU SUEÃ‘O Y ADQUIRIR ESTA HERMOSA CASA EN TULANCINGO HIDALGO', 245, 398, 4489.80, 2763.82, 656, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-61751fdf94e0-f48b-75cc04e5-82e8-4c89'),
(107, 'D1', 1100000.00, 'VENTA DE CASA 3 RECAMARAS EN TULANCINGO HIDALGO', 105, 102, 10476.19, 10784.31, 16, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Tulancingo Centro', '43600', 'https://www.lamudi.com.mx//detalle/41032-73-855a866a4c28-80e9-6b217a01-90e4-3abf'),
(108, 'D1', 1100000.00, 'VENTA DE CASA ECONOMICA DE 4 RECAMARAS EN COLONIA EL PARAISO EN TULANCINGO HIDALGO', 160, 100, 6875.00, 11000.00, 16, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Tulancingo Centro', '43600', 'https://www.lamudi.com.mx//detalle/41032-73-46863522d18d-457e-9ef05d1f-a468-3838'),
(109, 'D1', 1150000.00, 'CASA NUEVA EN PRIVADA SAN DANIEL, TULANCINGO HIDALGO', 105, 62, 10952.38, 18548.39, 16, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '43645', 'https://www.lamudi.com.mx//detalle/41032-73-e1e9f2183ac5-7f02-5ba171a0-bd32-34c5'),
(110, 'D1', 1166000.00, 'CASAEN VENTA EN COLONIAFRACCIONAMIENTO REAL TOLEDO FASE XII EJIDO SAN ANT', 83, 83, 14048.19, 14048.19, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Argentina', '43628', 'https://www.lamudi.com.mx//detalle/41032-73-675496ca27a3-7a00-18f3a42-9d52-7815'),
(111, 'D1', 1180000.00, 'CASA EN FRACCIONAMIENTO CERRADO, CIMA DORADA TULANCINGO', 105, 77, 11238.10, 15324.68, 9, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'San José', '43628', 'https://www.lamudi.com.mx//detalle/41032-73-60f9fc9ca4df-8fdf-6c7094aa-a826-4471'),
(112, 'D1', 1193100.00, 'TAD35080 Gran oportunidad para invertir en Tulancingo', 105, 75, 11362.86, 15908.00, 5, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-9358f3d09ca3-ba1d-b73b9e48-86f6-4dbb'),
(113, '', 1250000.00, 'VENTA DE CASA ECONÃ“MICA EN FRACCIONAMIENTO PRIVADO EN TULANCINGO 3 RECAMARAS', 100, 125, 12500.00, 10000.00, 16, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Rojo Gómez', '43645', 'https://www.lamudi.com.mx//detalle/41032-73-bfa7f15b7f9c-b68e-b93b6c46-8fb7-313c'),
(114, 'D2', 1290000.00, 'CASA AMPLIA EN VENTA EN TULANCINGO RAF1', 200, 250, 6450.00, 5160.00, 11, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Lindavista', '43680', 'https://www.lamudi.com.mx//detalle/41032-73-32d25fab3da5-ffa-6b44b106-885c-4f89'),
(115, 'D2', 1303333.00, 'CASA EN COL. LA MORENA, HIDALGO.', 140, 140, 9309.52, 9309.52, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-30a6d2a7c38-c84a-4697cc22-852a-4f88'),
(116, 'D2', 1350000.00, 'CASA EN VENTA EN NAPATECO TULANCINGO, HIDALGO', 171, 105, 7894.74, 12857.14, 12, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Napateco', '43629', 'https://www.lamudi.com.mx//detalle/41032-73-14ca92dd8a4d-db6f-eaae4c26-89a0-3953'),
(117, 'D2', 1353670.00, 'Casa en venta en Carlos Chavez, Tulancingo Â¡Compra esta propiedad mediante CesiÃ³n de Derechos e incrementa tu patrimonio! Â¡ContÃ¡ctame, te digo cÃ³mo hacerlo!', 100, 154, 13536.70, 8790.06, 7, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-4c6c49b746f5-9573-493db6c8-8100-502a'),
(118, 'D2', 1366025.00, 'vomo_ AMPLIA CASA EN TULANCINGO HGO, EN JARDINES DEL SUR...RECUPERACION BANCARIA', 140, 240, 9757.32, 5691.77, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-b13c4f83548f-e2c1-de1fdda0-a367-44bb'),
(119, 'D2', 1366025.00, 'GDS.VENTA DE CASA EN JARDINES DEL SUR TULANCINGO DE BRAVO HIDALGO GDS/AS', 120, 120, 11383.54, 11383.54, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-c05d32c8a2a0-1e10-f3f11bd6-b838-4459'),
(120, 'D2', 1450000.00, 'VENTA DE CASA ECONOMICA Y CENTRICA AMPLIA CON 4 RECAMARAS EN TULANCINGO', 128, 128, 11328.13, 11328.13, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-7b50f7d88d98-24f9-6f9f5e99-bf7b-1f12'),
(121, 'D3', 1530000.00, 'Casa en Tulancingo, Medias Tierras de 2 niveles, con garaje techado.', 178, 220, 8595.51, 6954.55, 13, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Medias Tierras', '43698', 'https://www.lamudi.com.mx//detalle/41032-73-9571cd0e94a5-bbc0-b04d045b-bb6b-4703'),
(122, 'D3', 1700000.00, 'Se VENDE casa en AmpliaciÃ³n Rojo GÃ³mez Tulancingo Hidalgo', 120, 105, 14166.67, 16190.48, 13, 'Venta', 'Casa', 1, 2, 2, 0.00, 2.00, 0, 'Rojo Gómez', '43645', 'https://www.lamudi.com.mx//detalle/41032-73-b3b07a6e0fe-21ef-d909e739-8994-3a1c'),
(123, 'C1', 1890000.00, 'CASA EN TULANCINGO A 45 MIN DE LA CIUDAD DE MEXICO', 80, 140, 23625.00, 13500.00, 16, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-252d3fdc1b9d-6034-cb024130-8ca5-3fa2'),
(124, 'C1', 1930000.00, 'CASA EN VENTA EN PRIVADA VICTORIA, EN MEDIAS TIERRAS, TULANCINGO', 125, 144, 15440.00, 13402.78, 16, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Medias Tierras', '43698', 'https://www.lamudi.com.mx//detalle/41032-73-8251aff19fca-ef3-5d8fb87-b771-3968'),
(125, 'C1', 1964923.00, 'Casa en Col. La herradura, Tulancingo de Bravo, Hidalgo., Â¡Compra directa con el Banco, no se aceptan crÃ©ditos!', 92, 140, 21357.86, 14035.16, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Herradura', '43695', 'https://www.lamudi.com.mx//detalle/41032-73-b4e7d0412788-2160-b83f347d-9208-4c62'),
(126, 'C1', 1976116.00, 'vomo_ APARTA AHORA RESIDENCIA EN MEDIAS TIERRAS DE TULANCINGO HIDALGOÂ¡Â¡!!', 105, 220, 18820.15, 8982.35, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Herradura', '43695', 'https://www.lamudi.com.mx//detalle/41032-73-f47d802b665e-1eb5-8a82c8a3-b8f1-42c9'),
(127, 'C1', 1976116.00, 'GDS.VENTA DE CASA EN LA HERRADURA TULANCINGO DE BRAVO HIDALGO GDS/AS', 120, 120, 16467.63, 16467.63, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Herradura', '43695', 'https://www.lamudi.com.mx//detalle/41032-73-ccd0c59699a-351e-706be229-9ef4-4e59'),
(128, '', 2000000.00, 'CASA EN EL ESTADO DE HIDALGO', 250, 170, 8000.00, 11764.71, 7, 'Venta', 'Casa', 1, 1, 1, 0.00, 1.00, 0, 'Francisco I. Madero', '43650', 'https://www.lamudi.com.mx//detalle/41032-73-147f9b9aaae2-32cd-f903ca89-81d0-3a0c'),
(129, 'C2', 2159000.00, 'Hidalgo,Tulancingo,Almicar Residencial,Casa ,Venta', 105, 220, 20561.90, 9813.64, 8, 'Venta', 'Casa', 1, 6, 1, 0.00, 1.00, 0, 'La Herradura', '43695', 'https://www.lamudi.com.mx//detalle/41032-73-60e84bf363a9-7428-752d4dc9-bdcf-3afb'),
(130, 'C2', 2200000.00, 'CASAS EN MEDIAS TIERRAS, TULANCINGO DE BRAVO HIDALGO', 92, 182, 23913.04, 12087.91, 14, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Medias Tierras', '43698', 'https://www.lamudi.com.mx//detalle/41032-73-af54d1fd6cd2-f433-d11bc63-b17f-409e'),
(131, 'C2', 2200000.00, 'EXCLUSIVO FRACC. PEDREGAL DE SAN FRANCISCO TULANCINGO HGO.', 150, 159, 14666.67, 13836.48, 16, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Pedregal de San Francisco', '43673', 'https://www.lamudi.com.mx//detalle/41032-73-449e66261448-8b10-e2cde429-9902-33e5'),
(132, 'C3', 2300000.00, 'CASA CON 350M2 DE TERRENO, COL. VALLE VERDE TULANCINGO HGO', 350, 250, 6571.43, 9200.00, 12, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Valle Verde', '43648', 'https://www.lamudi.com.mx//detalle/41032-73-70ad2c30cdd4-ac4-77f13dfb-aa21-4f0d'),
(133, 'B1', 2650000.00, 'CASA NUEVA EN VENTA RESIDENCIAL TERRANOVA, TULANCINGO.', 202, 135, 13118.81, 19629.63, 16, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Lomas de Progreso', '43615', 'https://www.lamudi.com.mx//detalle/41032-73-48844530cc85-8bf0-ff3c1c48-b7eb-39b9'),
(134, 'B2', 2758000.00, 'Casa VENTA, Jardines del Sur, Tulancingo de Bravo', 160, 160, 17237.50, 17237.50, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-467b23fd01cb-cb12-3a22ec63-8c62-4978'),
(135, 'B2', 2758000.00, 'ESPECTACULAR RESIDENCIA EN VENTA', 120, 150, 22983.33, 18386.67, 656, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-30c4096882a0-1af2-17e4d4a8-bb82-49f5'),
(136, 'B2', 2890000.00, 'CASA EN VENTA EN TULANCINGO A 45 MINUTOS DE LA CIUDAD DE MEXICO', 220, 140, 13136.36, 20642.86, 5, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-a69186d491c3-edad-23df1d88-911e-3ccc'),
(137, 'B2', 2900000.00, 'Una casa perfectamente diseÃ±ada en la mejor ubicaciÃ³n de Tulancingo, La Morena', 120, 154, 24166.67, 18831.17, 10, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Rojo Gómez', '43645', 'https://www.lamudi.com.mx//detalle/41032-73-f1d9f7d3a1ab-c9e6-ef7f900e-b973-4d71'),
(138, '', 3000000.00, 'Casa en Privada, Tulancingo de Bravo, Residencial Riva Palacio', 200, 170, 15000.00, 17647.06, 9, 'Venta', 'Casa', 1, 2, 3, 0.00, 3.00, 0, 'Rojo Gómez', '43645', 'https://www.lamudi.com.mx//detalle/41032-73-50049742f4f-c74f-e43909c1-bfe6-4285'),
(139, 'B3', 3200000.00, 'VENTA SE CASA ECONOMICA Y DE LUJO EN TULANCINGO HIDALGO 3 RECAMARAS', 140, 140, 22857.14, 22857.14, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Rojo Gómez', '43645', 'https://www.lamudi.com.mx//detalle/41032-73-7b50f7d88d98-17e4-5eb74799-bf7b-1f12'),
(140, 'A1', 3350000.00, 'VENTA DE CASA AMPLIA Y DE LUJO SEMICENTRICA TULANCINGO 3 RECAMARAS', 200, 200, 16750.00, 16750.00, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Santa Ana', '43642', 'https://www.lamudi.com.mx//detalle/41032-73-7b50f7d88d98-32e7-bb7921b9-bf7b-1f12'),
(141, 'A1', 3400000.00, 'VENTA DE CASA DE LUJO CENTRICA DE TULANCINGO 3 RECAMARAS', 200, 200, 17000.00, 17000.00, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Santa Ana', '43642', 'https://www.lamudi.com.mx//detalle/41032-73-7b50f7d88d98-1e26-b3b98b79-bf7b-1f12'),
(142, 'A2', 3555000.00, 'VENTA DE CASA EN CALLE FRANZ VON LISZT, FRACC. JARDINES DEL SUR, TULANCINGO HIDALGO MÃ‰XICO, Â¡NO SE ACEPTAN CRÃ‰DITOS!', 228, 360, 15592.11, 9875.00, 8, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-f965e0ae6b2f-b1c8-8cf5147d-97dd-4d3e'),
(143, '', 3750000.00, 'CASA DE 1 NIVEL EN LA MORENA, TULANCINGO', 160, 240, 23437.50, 15625.00, 16, 'Venta', 'Casa', 1, 4, 4, 0.00, 4.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx//detalle/41032-73-5b029fa4b8c7-f083-3a6060f6-9bd2-39bf'),
(144, 'A3', 3946465.00, 'vomo_ APARTA GRAN PROPIEDAD DEL PEDREGAL DE SAN FRANCISCO EN TULANCINGO HIDALGO!!Â¡Â¡Â¡', 216, 300, 18270.67, 13154.88, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Pedregal de San Francisco', '43673', 'https://www.lamudi.com.mx//detalle/41032-73-128b99188b37-43d6-31813b1c-9b82-4058'),
(145, 'A3', 3946465.00, 'VENTA DE CASA EN PEDREGAL DE SAN FRANCISCO TULANCINGO DE BRAVO HIDALGO GDS/AS', 150, 150, 26309.77, 26309.77, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Pedregal de San Francisco', '43673', 'https://www.lamudi.com.mx//detalle/41032-73-dfeffb37df74-1249-f8860080-9ed3-4249'),
(146, 'S1', 4180000.00, 'CASA EN TULANCINGO DE BRAVO, HIDALGO', 360, 228, 11611.11, 18333.33, 7, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Jardines Del Sur', '43660', 'https://www.lamudi.com.mx//detalle/41032-73-2fc7baf65110-1d0a-86109a81-a664-48cc'),
(147, 'S1', 4300000.00, 'Casa en Venta, Col. La Morena. Tulancingo. Pachuca.', 160, 240, 26875.00, 17916.67, 12, 'Venta', 'Casa', 1, 5, 1, 0.00, 1.00, 0, 'La Morena,', '43625', 'https://www.lamudi.com.mx//detalle/41032-73-76d564d8c2b1-d515-4c729ba5-b486-46e3'),
(148, 'S1', 4500000.00, 'Se vende casa en Tulancingo, Fraccionamiento San Francisco Huatengo.', 200, 287, 22500.00, 15679.44, 8, 'Venta', 'Casa', 1, 4, 2, 0.00, 2.00, 0, 'Tulancingo Centro', '43600', 'https://www.lamudi.com.mx//detalle/41032-73-cfbd09274c36-b108-c2a1f4e9-ad07-1237');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alfa_mayo_2024_tulancingo`
--
ALTER TABLE `alfa_mayo_2024_tulancingo`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
