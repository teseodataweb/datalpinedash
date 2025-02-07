-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2024 a las 04:38:59
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
-- Estructura de tabla para la tabla `alfa_agosto_2024_tulancingo`
--

CREATE TABLE `alfa_agosto_2024_tulancingo` (
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
-- Volcado de datos para la tabla `alfa_agosto_2024_tulancingo`
--

INSERT INTO `alfa_agosto_2024_tulancingo` (`id`, `Categoria`, `Precio`, `propiedad`, `metros_total`, `metros_construido`, `precio_m2_terreno`, `precio_m2_construido`, `tiempo_de_publicacion`, `Estado`, `Tipo`, `Estacionamientos`, `Recamaras`, `Banos`, `Medio_banos`, `Banos_Total`, `Seguridad`, `Colonia`, `CP`, `url`) VALUES
(1, 'C3', 2499000.00, 'Hidalgo,Tulancingo,Almicar Residencial,Casa ,Venta', 105, 220, 23800.00, 11359.09, 8, 'Venta', 'Casa', 2, 6, 4, 1.00, 4.50, 0, 'La Herradura', '', 'https://www.lamudi.com.mx/detalle/41032-73-60e84bf363a9-7428-752d4dc9-bdcf-3afb'),
(2, 'D1', 1100000.00, 'VENTA DE CASA ECONOMICA DE 4 RECAMARAS EN COLONIA EL PARAISO EN TULANCINGO HIDALGO', 160, 100, 6875.00, 11000.00, 16, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-46863522d18d-457e-9ef05d1f-a468-3838'),
(3, 'C3', 2400000.00, 'Casa exclusiva en  en venta. Privada, áreas verdes y cerca de todo', 119, 154, 20168.07, 15584.42, 16, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Valle Verde', '', 'https://www.lamudi.com.mx/detalle/41032-73-ce9992e02793-f83a-4951d748-8ce1-3d41'),
(4, 'E1', 445000.00, 'VENTA DE CASA C CARLOS CHÁVEZ JARDINES DEL SUR  TULANCINGO', 115, 200, 3869.57, 2225.00, 5, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-749297cfeed6-af28-a292334-8fe1-4ca3'),
(5, 'E1', 455000.00, 'CASA EN VENTA EN TULANCINGO HIDALGO', 105, 200, 4333.33, 2275.00, 2, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-2bef3bcd117a-f882-190c81b-add5-7498'),
(6, 'E1', 455000.00, 'VENTA DE CASA EN CALLE CARLOS CHAVEZ 207, COL JARDINES DEL SUR 2da Secc, CP 43660, MUNICIPIO TULANCINGO, ESTADO HIDALGO', 105, 200, 4333.33, 2275.00, 3, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-f243df62beae-2c4f-54136a6f-a6ad-4990'),
(7, 'E1', 455000.00, 'VENTA DE CASA  CARLOS CHÁVEZ  JARDINES DEL SUR 4TA SECC TULANCINGO', 115, 200, 3956.52, 2275.00, 5, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-ee5d2509a01e-cac-1d54b638-be42-455c'),
(8, 'E2', 590000.00, 'VENTA AMPLIA Y HERMOSA CASA EN JARDINES DEL SUR HIDALGO', 300, 204, 1966.67, 2892.16, 2, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-995ebf03c435-efb2-e16b5706-8806-47a1'),
(9, 'E2', 500000.00, '¡¡¡BONITA CASA EN TULANCINGO, HIDALGO!!! .SOC.', 165, 225, 3030.30, 2222.22, 9, 'Venta', 'Casa', 2, 4, 1, 1.00, 1.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-d3c83135766a-5b1a-91985170-a46d-4208'),
(10, 'E2', 622000.00, 'Casa en venta  Guadalupe 1ra Sección, Tulancingo, Hidalgo  DD41 GR', 230, 230, 2704.35, 2704.35, 10, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Francisco I Madero', '', 'https://www.lamudi.com.mx/detalle/41032-73-cba1ec894a47-74a-382d2619-87dd-4c9b'),
(11, 'E2', 520000.00, 'CASA EN VENTA TULANCINGO HIDALGO', 120, 240, 4333.33, 2166.67, 16, 'Venta', 'Casa', 2, 4, 2, 0.00, 2.00, 0, 'Lomas de Progreso', '', 'https://www.lamudi.com.mx/detalle/41032-73-164b00fed1ad-5af1-9809fced-b47e-3231'),
(12, '', 3750000.00, 'CASA DE 1 NIVEL EN LA MORENA, TULANCINGO', 160, 240, 23437.50, 15625.00, 16, 'Venta', 'Casa', 2, 4, 4, 0.00, 4.00, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-5b029fa4b8c7-f083-3a6060f6-9bd2-39bf'),
(13, 'E1', 430000.00, 'CASA EN RINCONADA LA MORENA', 150, 280, 2866.67, 1535.71, 1, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-a93e69853919-8d9e-1910f7d-8cb0-7080'),
(14, 'E2', 580000.00, 'PRECIOSA CASA EN TULANCINGO HIDALGO OAHM', 150, 280, 3866.67, 2071.43, 9, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-31c0d0c8c869-3288-13762b7d-982b-4ede'),
(15, 'E2', 590000.00, 'VENTA AMPLIA Y HERMOSA CASA EN JARDINES DEL SUR HIDALGO', 204, 300, 2892.16, 1966.67, 2, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-a19fce8f99cb-3221-d50b6c7e-b56f-4878'),
(16, 'A3', 3946465.00, 'vomo_ INVIERTE DE CONTADO Y GANATE VENTAJOSO PRECIO EN GRAN PROPIEDAD DEL  PEDREGAL DE SAN FRANCISCO EN TULANCINGO HIDALGO!!¡¡¡', 216, 300, 18270.67, 13154.88, 6, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Pedregal de San Francisco', '', 'https://www.lamudi.com.mx/detalle/41032-73-128b99188b37-43d6-31813b1c-9b82-4058'),
(17, 'E2', 628000.00, 'SE VENDE BONITA Y AMPLIA CASA EN TULANCINGO HIDALGO', 280, 330, 2242.86, 1903.03, 1, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Los Sabinos', '', 'https://www.lamudi.com.mx/detalle/41032-73-6ae177f1fc58-4819-190ebad-b0ae-7c05'),
(18, '', 2500000.00, '¡¡Gran Oportunidad de Inversión!! Hermosa y Amplia Casa en una de las Mejores Zonas de Tulancingo hidalgo', 228, 330, 10964.91, 7575.76, 2, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-3a525cd4a38b-f4a5-eb8f2c82-bb26-474a'),
(19, '', 2500000.00, '¡¡GRAN OPORTUNIDAD,  INMUEBLE  CON ADJUDICACION!!  EXCELENTE CASA EN TULANCINGO HGO¡¡', 228, 330, 10964.91, 7575.76, 2, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-d36291890f78-83bc-d9c55533-baaa-4727'),
(20, '', 2500000.00, 'Excelente Oportunidad De Inversión Tulancingo, Hidalgo', 228, 330, 10964.91, 7575.76, 1, 'Venta', 'Casa', 2, 4, 2, 1.00, 2.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-356a2c0f0229-7e9d-190dc28-a503-78ce'),
(21, 'E2', 570000.00, 'HERMOSA Y AMPLIA CASA EN JARDINES DEL SUR TULANCINGO HIDALGO, SUPER PRECIO!!!', 225, 360, 2533.33, 1583.33, 7, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-9a87f2e30aa8-b101-a994006c-990c-4cc8'),
(22, 'D3', 1710000.00, 'VENTA DE CASA EN HIDALGO COL JARDINES DEL SUR 3RA SECCION TULANCINGO', 228, 360, 7500.00, 4750.00, 3, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-7c03eaf87238-b2d3-74d0fbd3-b809-4b9e'),
(23, 'B2', 2990000.00, 'HIDALGO TULANCINGO DE BRAVO FRACC JARDINES DEL SUR CASA VENTA', 228, 360, 13114.04, 8305.56, 2, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-730a89293f3a-5ae-1903b17-b1aa-75fe'),
(24, 'S1', 4830000.00, 'CASA EN VENTA COL JARDINES DEL SUR TULANCINGO DE BRAVO HIDALGO', 228, 360, 21184.21, 13416.67, 16, 'Venta', 'Casa', 2, 4, 3, 1.00, 3.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-d5a3d45f5dbe-72d8-ae5720cb-bf37-39c1'),
(25, 'E3', 785000.00, 'VENTA DE CASA EN TULANCINGO HIDALGO', 245, 398, 3204.08, 1972.36, 5, 'Venta', 'Casa', 2, 4, 1, 1.00, 1.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-61751fdf94e0-f48b-75cc04e5-82e8-4c89'),
(26, 'E3', 894000.00, 'VENTA DE CASA ECONOMICA DE 3 RECAMARAS TULANCINGO HIDALGO', 105, 73, 8514.29, 12246.58, 1, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Pedregal de San Francisco', '', 'https://www.lamudi.com.mx/detalle/41032-73-38a04c11bea7-e823-190d8ac-b6b1-7251'),
(27, 'E3', 894200.00, 'PREVENTA CASA 3 RECÁMARAS EN SAN JOSÉ, TULANCINGO MODELO HORTENCIA', 122, 76, 7329.51, 11765.79, 1, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Insurgentes', '', 'https://www.lamudi.com.mx/detalle/41032-73-1311bbe453fb-a4a5-19133a2-ba9c-7d0e'),
(28, 'D1', 1157000.00, 'CASA NUEVA MODELO AMBAR EN FRACCIONAMIENTO RESIDENCIAL TULANCINGO', 81, 81, 14283.95, 14283.95, 1, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Valle Verde', '', 'https://www.lamudi.com.mx/detalle/41032-73-f4dfa1a9fab9-f05a-190e0fe-886d-7aea'),
(29, '', 1250000.00, 'PREVENTA DE CASAS EN SAN JOSE', 120, 81, 10416.67, 15432.10, 1, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Insurgentes', '', 'https://www.lamudi.com.mx/detalle/41032-73-212e6b3fe5fe-1a7e-190e18f-886e-7aea'),
(30, 'D1', 1166000.00, 'CASAEN VENTA EN COLONIAFRACCIONAMIENTO REAL TOLEDO FASE XII EJIDO SAN ANT', 83, 83, 14048.19, 14048.19, 1, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'La Argentina', '', 'https://www.lamudi.com.mx/detalle/41032-73-37c9cc5af1a5-22f5-1913595-b580-76df'),
(31, 'E2', 562000.00, 'AS VENTA DE CASA C. RUBI CAMPO ALEGRE TULANCINGO DE BRAVO HIDALGO', 90, 90, 6244.44, 6244.44, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Jaltepec', '', 'https://www.lamudi.com.mx/detalle/41032-73-35c549ec5904-4c6d-24526096-9753-446b'),
(32, 'E2', 650568.00, 'vomo_ INVIERTE DE CONTADO Y GANATE VENTAJOSO PRECIO EN PROPIEDAD EN ESQUINA DE LA COLONIA VICENTE GUERRERO, TULANCINGO HIDALGO !!¡¡', 100, 90, 6505.68, 7228.53, 6, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-2dd412d5ddaa-208a-72f65def-a62d-40e7'),
(33, 'C1', 1800000.00, 'VENTA DE CASA AMPLIA 3 RECAMARAS Y LOCAL.', 90, 90, 20000.00, 20000.00, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Jaltepec', '', 'https://www.lamudi.com.mx/detalle/41032-73-81daa64e1bef-f1ae-4db4b309-b0ec-1090'),
(34, 'E1', 450000.00, 'CASA DE RECUPERACION EN VENTA EN TULANCINGO,HIDALGO.', 100, 95, 4500.00, 4736.84, 3, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-8f11c8c6b822-5852-367e9e0c-bb05-41e8'),
(35, 'E3', 905200.00, 'VICENTE GUERRERO CASA EN VENTA TULANCINGO HIDALGO.', 100, 95, 9052.00, 9528.42, 8, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-f949bbd4f426-ae4b-d072548c-8fcc-32a4'),
(36, 'C1', 1995000.00, 'VENTA DE CASA DE LUJO 3 RECAMARAS TULANCINGO', 95, 95, 21000.00, 21000.00, 1, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'El Paraíso', '', 'https://www.lamudi.com.mx/detalle/41032-73-27c056261a3b-e65e-190f7b2-9671-733c'),
(37, 'E2', 617000.00, 'CASA EN COL. CAMPO ALEGRE, JALTEPEC, HIDALGO.', 100, 100, 6170.00, 6170.00, 6, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Jaltepec', '', 'https://www.lamudi.com.mx/detalle/41032-73-14bf811c7e8f-fb21-a1391919-ab60-4fa8'),
(38, 'D1', 1100000.00, 'PREVENTA CASA EN SAN JOSÉ, TULANCINGO MODELO MAGNOLIA', 105, 102, 10476.19, 10784.31, 1, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Insurgentes', '', 'https://www.lamudi.com.mx/detalle/41032-73-d12297d87fa8-cbc3-1912a1a-8e08-7276'),
(39, 'E2', 580000.00, 'CESION DE DERECHOS', 110, 110, 5272.73, 5272.73, 3, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-b733ba89312b-af9-d6720ab5-9e6c-4b67'),
(40, 'E3', 841100.00, 'CASA HERMENEGILDO', 110, 110, 7646.36, 7646.36, 7, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-89f9c11193a8-cb87-43c79e8b-9e23-4a04'),
(41, 'E3', 990000.00, 'EXTRENA TU CASA A BAJO COSTO EN **TULANCINGO DE BRAVO** HGO.', 110, 110, 9000.00, 9000.00, 7, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-bf57b977d082-55cb-a85d7cdf-ba19-4e54'),
(42, 'E2', 628000.00, 'OPORTUNIDAD INVIERTE EN TU PATRIMONIO, CASA DE  RECUPERACION BANCARIA, EN CUMBRES DE MALTRATA.', 114, 114, 5508.77, 5508.77, 6, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-1649ede6aeba-c5bd-3be67b2d-b13c-43cc'),
(43, 'E2', 628000.00, 'OPORTUNIDAD INVIERTE EN TU PATRIMONIO, CASA DE  RECUPERACION BANCARIA, EN CUMBRES DE MALTRATA.', 114, 114, 5508.77, 5508.77, 7, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-fd7d7a26facf-4aec-7ab2aaab-9001-49f7'),
(44, 'E2', 628000.00, '🏡🤩La casa de tus sueños en Tulancingo de Bravo, Hidalgo🤩🏡', 114, 114, 5508.77, 5508.77, 2, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-29c73c2264f6-1b4a-63fcd4e4-b493-4b77'),
(45, 'E2', 628000.00, '🏡🤩La casa de tus sueños en Tulancingo de Bravo, Hidalgo🤩🏡', 114, 114, 5508.77, 5508.77, 2, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-8b6ab53a73e3-4f9a-4f120b9d-a2a1-4a86'),
(46, 'D3', 1695000.00, 'Sumérgete en la Vida de Ensueño: Privada Arboledas - Tu Hogar con Piscina Exclusiva', 114, 114, 14868.42, 14868.42, 14, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Valle Verde', '', 'https://www.lamudi.com.mx/detalle/41032-73-fe2378fa6102-e82e-6e6ea0a6-9f00-442e'),
(47, 'E2', 737336.00, 'GRAN OPORTUNIDAD BONITA CASA UBICADA EN CALLE FRANCISCO VILLA COL EL MIRADOR MPO TULANCINGO DE BRAVO HIDALGO, EXCELENTE PRECIO $737,336', 120, 120, 6144.47, 6144.47, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-788a516b9f13-c849-bf85cfe8-8c84-40b5'),
(48, 'E3', 979000.00, 'Casa en Venta en Tulancingo, Hidalgo', 110, 120, 8900.00, 8158.33, 4, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-3c63bb7e3e29-7134-516b309d-a1ed-4970'),
(49, 'D2', 1300000.00, 'CASA EN PRIVADA COL CALTENGO TULANCINGO', 70, 130, 18571.43, 10000.00, 4, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Caltengo', '', 'https://www.lamudi.com.mx/detalle/41032-73-53c139ae5387-c2fc-e19b8116-8df2-42e5'),
(50, 'B1', 2650000.00, 'PROYECTO DE CASA EN PRIVADA RESIDENCIAL, TULANCINGO HIDALGO', 202, 135, 13118.81, 19629.63, 16, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Insurgentes', '', 'https://www.lamudi.com.mx/detalle/41032-73-48844530cc85-8bf0-ff3c1c48-b7eb-39b9'),
(51, 'D2', 1450000.00, 'CASA NUEVA EN MAGISTERIO 1, TULANCINGO, HGO.', 120, 137, 12083.33, 10583.94, 16, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-407e0881cd49-4446-f1a2dce1-9d23-32af'),
(52, 'E2', 618000.00, 'CASA 3 RECAMARAS, 2 NIVELES, 2.5 BAÑOS, 2 ESTACIONAMIENTOS', 140, 140, 4414.29, 4414.29, 4, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-715386dafdf6-a2aa-f8fed2f9-938e-4bb4'),
(53, '', 750000.00, 'HERMOSA PROPIEDAD EN PACHUCA HIDALGO', 140, 140, 5357.14, 5357.14, 2, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'El Mirador', '', 'https://www.lamudi.com.mx/detalle/41032-73-84df2e222225-f6d0-323dde76-b8c0-497f'),
(54, 'D1', 1148000.00, 'CASA EN VENTA EN COLONIA MORENA, TULANCINGO, HGO.', 140, 140, 8200.00, 8200.00, 1, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-38d5267a5e9d-1e21-1910a7b-9ea9-7aed'),
(55, 'D2', 1303333.00, 'CASA EN COL. LA MORENA, HIDALGO.', 140, 140, 9309.52, 9309.52, 4, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-30a6d2a7c38-c84a-4697cc22-852a-4f88'),
(56, 'D3', 1650000.00, '🏘️ 🏘️CASA EN VENTA DOS PLATAS COL. LINDAVISTA,  TULANCINGO HGO 🏘️ 🏘️', 80, 140, 20625.00, 11785.71, 1, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Lindavista', '', 'https://www.lamudi.com.mx/detalle/41032-73-20a8b2d1626-45ac-19129af-bea3-78d2'),
(57, 'C1', 1964923.00, 'Casa en Col. La herradura, Tulancingo de Bravo, Hidalgo., ¡Compra directa con el Banco, no se aceptan créditos!', 92, 140, 21357.86, 14035.16, 4, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'La Herradura', '', 'https://www.lamudi.com.mx/detalle/41032-73-b4e7d0412788-2160-b83f347d-9208-4c62'),
(58, 'B2', 2758000.00, 'VVV VENTA DE CASA CALLE FRANZ VON LISZT JARDINES DEL SUR 3A SECC TULANCINGO DE BRAVO HIDALGO', 70, 140, 39400.00, 19700.00, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-4c88e4b1cb97-8a55-3dcaa553-ad27-426f'),
(59, 'B2', 2890000.00, 'CASA EN VENTA EN TULANCINGO A 45 MINUTOS DE LA CIUDAD DE MEXICO', 220, 140, 13136.36, 20642.86, 5, 'Venta', 'Casa', 2, 3, 3, 1.00, 3.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-a69186d491c3-edad-23df1d88-911e-3ccc'),
(60, 'B2', 2758000.00, 'INVERSIONISTAS RESIDENCIA EN VENTA SOLO CONTADO', 120, 150, 22983.33, 18386.67, 4, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-30c4096882a0-1af2-17e4d4a8-bb82-49f5'),
(61, 'C1', 1800000.00, 'PREVENTA DE CASA DE 3 RECAMARAS EN MEDIAS TIERRAS, TUALANCINGO', 105, 154, 17142.86, 11688.31, 1, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'Medias Tierras', '', 'https://www.lamudi.com.mx/detalle/41032-73-7d6742af7ce8-51ca-190f075-b594-7166'),
(62, 'C2', 2150000.00, 'EXCELENTE CASA EN PREVENTA EN SAN ANDRES TULANCINGO', 150, 154, 14333.33, 13961.04, 1, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Jaltepec', '', 'https://www.lamudi.com.mx/detalle/41032-73-e74c67a7e108-4775-19129b0-9bf4-7167'),
(63, 'E2', 580000.00, 'BONITA CASA EN COL. RINCONADA LA MORENA, TULANCINGO DE BRAVO, HIDALGO', 100, 160, 5800.00, 3625.00, 1, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-ad6d6a547bef-9c88-190ec13-9942-7bf9'),
(64, 'E2', 625000.00, 'BONITA CASA EN COL. LA MORENA SECC. NORTE B, TULANCINGO DE BRAVO, HIDALGO', 160, 160, 3906.25, 3906.25, 1, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-ce5e90d6cc24-8e2a-19100cf-8e77-75a4'),
(65, 'E3', 809000.00, 'CASA EN VENTA EN VILLAS DE SAN FRANCISCO TULANCINGO HIDALGO', 160, 160, 5056.25, 5056.25, 9, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-83e39b5d59b7-2e1e-52401efd-8b95-4339'),
(66, 'E3', 809000.00, '🏡🤩La casa de tus sueños en Tulancingo, Hidalgo🤩🏡', 160, 160, 5056.25, 5056.25, 2, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-1e5c2cd4b0d0-939b-cb052e13-9128-4a3e'),
(67, 'E3', 809000.00, '🏡🤩La casa de tus sueños en Tulancingo Hidalgo🤩🏡', 160, 160, 5056.25, 5056.25, 2, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-6067feaa0d96-2d4f-1f8ef47d-901c-4a6e'),
(68, 'B2', 2758000.00, 'VENTA DE CASA EN LA CALLE FRANZ VON LISZT JARDINES DEL SUR TULANCINGO DE BRAVO HIDALGO', 80, 160, 34475.00, 17237.50, 5, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-b82b8a5bbade-ee7f-a7cb74a8-9ca0-47c4'),
(69, 'A2', 3700000.00, 'VENTA DE CASA CENTRICA  DE LUJO DE UNA PLANTA EN FRACCIONAMIENTO RESIDENCIAL', 216, 170, 17129.63, 21764.71, 2, 'Venta', 'Casa', 2, 3, 3, 1.00, 3.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-a54791739111-5c0-190afc1-a672-7370'),
(70, 'E2', 578000.00, '🏡🤩La casa de tus sueños en Tulancingo de Bravo, Hidalgo🤩🏡', 178, 178, 3247.19, 3247.19, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-76906917e417-1fc2-880c6c00-bd09-45b5'),
(71, 'E2', 578000.00, '🏡🤩La casa de tus sueños en Tulancingo de Bravo, Hidalgo🤩🏡', 178, 178, 3247.19, 3247.19, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-7af095d1887f-c73e-4dc0a451-ab07-4e8f'),
(72, 'E2', 618000.00, 'OPORTUNIDAD INVIERTE EN TU PATRIMONIO, CASA DE  RECUPERACION BANCARIA, EN CUMBRES DE MALTRATA.', 178, 178, 3471.91, 3471.91, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-60708fd19e7d-9998-a31f83b3-8e99-4a51'),
(73, 'E2', 618000.00, 'LA CASA DE TUS SUEÑOS EN TULANCINGO', 178, 178, 3471.91, 3471.91, 7, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-5ba6e323a427-e36e-5423bad5-a633-46af'),
(74, 'E1', 455000.00, 'VENTA DE CASA EN TULANCINGO', 100, 180, 4550.00, 2527.78, 5, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-ec6dc6be7b68-6fec-ab37b14c-8eb4-4fdb'),
(75, 'E2', 560000.00, 'EXCELENTE CASA EN VENTA DE LAS FUENTES, LA MORENA TULANCINGO HIDALGO', 120, 180, 4666.67, 3111.11, 5, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-8d11b20029fc-60b-317f5ab2-bded-422e'),
(76, '', 750000.00, 'CASA EN VENTA - COL. RINCONADA LA MORENA, TULANCINGO', 150, 180, 5000.00, 4166.67, 11, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-1d94401d58d6-9c4d-e8ea114e-a7db-42c1'),
(77, 'A1', 3300000.00, 'Paraiso Sur, Venta de Casa,	Tulancingo, Hidalgo.', 1049, 200, 3145.85, 16500.00, 7, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Benito Juárez', '', 'https://www.lamudi.com.mx/detalle/41032-73-bdf477dc8df6-ad59-5ce6c2ea-95fa-3f5a'),
(78, 'A2', 3550000.00, 'VENTA DE CASA DE LUJO CENTRICA DE TULANCINGO 3 RECAMARAS', 200, 200, 17750.00, 17750.00, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Santa Ana', '', 'https://www.lamudi.com.mx/detalle/41032-73-7b50f7d88d98-1e26-b3b98b79-bf7b-1f12'),
(79, 'E2', 560000.00, 'VENTA DE CASA EN RESIDENCIAL LA MORENA TULANCINGO HIDALGO', 114, 206, 4912.28, 2718.45, 8, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx/detalle/41032-73-f86cc0bfb87a-5642-7b90e0af-9609-458d'),
(80, 'E2', 600000.00, 'CASA EN VENTA - COL. LA MORENA, TULANCINGO', 180, 210, 3333.33, 2857.14, 11, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-ec594c4bb147-7627-6e552390-86f7-4e50'),
(81, 'E2', 529600.00, 'Hermosa Casa De Dos Pisos, Guadalupe 1ra Secc, Tulancingo de Bravo, Hgo', 130, 216, 4073.85, 2451.85, 1, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Francisco I Madero', '', 'https://www.lamudi.com.mx/detalle/41032-73-9cfcae8037b0-8af8-19105d2-b51c-79e3'),
(82, 'A1', 3350000.00, 'VENTA DE CASA DE LUJO EN TULANCINGO', 190, 218, 17631.58, 15366.97, 1, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-b39c8e5f92a1-a04e-190f7f1-8719-7af2'),
(83, 'E3', 900000.00, 'VENTA DE CASA EN TULANCINGO HIDALGO', 220, 220, 4090.91, 4090.91, 3, 'Venta', 'Casa', 2, 3, 1, 1.00, 1.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-5baf5499dcd8-5ea2-39f6acc9-9464-4c0a'),
(84, 'E2', 590000.00, 'BONITA CASA CERCA DEL CENTRO DE TULANCINGO.', 160, 240, 3687.50, 2458.33, 1, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-5aebe2e1fbb-aa93-1910202-9b24-7af8'),
(85, 'E2', 590000.00, 'HERMOSA CASA EN LA MORENA TULANCINGO', 160, 240, 3687.50, 2458.33, 1, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-8e2e8a98cd13-ebd5-19105cd-b325-7f37'),
(86, 'D2', 1366025.00, 'vomo_ INVIERTE DE CONTADO Y GANATE VENTAJOSO PRECIO EN AMPLIA CASA EN TULANCINGO HGO, EN JARDINES DEL SUR...¡¡!!', 140, 240, 9757.32, 5691.77, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-b13c4f83548f-e2c1-de1fdda0-a367-44bb'),
(87, 'E2', 590000.00, 'VENTA DE CASA EN TULANCINGO HIDALGO', 126, 260, 4682.54, 2269.23, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Jardines Del Sur', '', 'https://www.lamudi.com.mx/detalle/41032-73-137765f68155-2484-218d5ea0-85ee-4261'),
(88, 'E3', 895000.00, 'Casa en Venta Col. Lomas del Progreso, Tulancingo, Hidalgo', 129, 260, 6937.98, 3442.31, 9, 'Venta', 'Casa', 2, 3, 3, 0.00, 3.00, 0, 'Lomas de Progreso', '', 'https://www.lamudi.com.mx/detalle/41032-73-1317b748069a-fb8e-bd5e2fcc-a682-4496'),
(89, 'S1', 4600000.00, 'CASA  EN TULANCINGO', 2500, 300, 1840.00, 15333.33, 5, 'Venta', 'Casa', 2, 3, 3, 1.00, 3.50, 0, 'Insurgentes', '', 'https://www.lamudi.com.mx/detalle/41032-73-7777b6b089ed-8def-ac0c0456-8c1f-37a5'),
(90, 'E2', 560000.00, 'BONITA CASA EN COL. LA MORENA SECC. NORTE B, TULANCINGO DE BRAVO, HIDALGO', 240, 320, 2333.33, 1750.00, 1, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-b30aa66ddb93-4393-190ec1c-9942-7bf9'),
(91, 'E3', 809000.00, 'CASA EN RESIDENCIAL VILLAS DE SAN FRANCISCO', 375, 375, 2157.33, 2157.33, 1, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-5b69e8b83a2e-7189-1913af6-b916-77b9'),
(92, 'S1', 4250000.00, 'VENTA DE HERMOSA CASA EN RESIDENCIAL SAN FRANCISCO HUATENGO , TULANCINGO', 200, 375, 21250.00, 11333.33, 4, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-16210fae8ddb-4747-77f6bf67-aab6-45c4'),
(93, 'S1', 4675000.00, 'INMUEBLE CON POSESIÓN INMEDIATA ( NO CRÉDITOS ) UBICADA EN EL FRACCIONAMIENTO SAN FRANCISCO HUATENGO TULA HIDALGO', 200, 375, 23375.00, 12466.67, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Tulancingo Centro', '', 'https://www.lamudi.com.mx/detalle/41032-73-f61987d1820d-15f3-b386ae99-ac14-4800'),
(94, 'E2', 590000.00, 'LINDA CASA CON EXCELENTE UBICACIÓN', 250, 398, 2360.00, 1482.41, 1, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-3c16d2145166-3b0b-191344c-955e-76b8'),
(95, 'E2', 590000.00, 'Linda casa en Tulancingo, Hidalgo', 266, 398, 2218.05, 1482.41, 6, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'La Morena', '', 'https://www.lamudi.com.mx/detalle/41032-73-c2938e0fa92b-f81-374b5c36-945e-501c'),
(96, 'D3', 1737200.00, 'CASA ADJ. Chihuahua 1308, Vicente Guerrero, 43630 Tulancingo de Bravo, Hidalgo', 400, 404, 4343.00, 4300.00, 2, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-62bf02973bdf-cdf3-b4e47ac3-b00a-4564'),
(97, 'C1', 1987200.00, 'CASA ADJUDICADA EN Chihuahua 1308, Vicente Guerrero, 43630 Tulancingo de Bravo, Hidalgo', 400, 404, 4968.00, 4918.81, 2, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-3c38fbb93309-a2dc-eba2ca45-b24f-49b1'),
(98, 'C3', 2367780.00, 'HERMOSA CASA ADJ, COMPRAVENTA, Chihuahua , Vicente Guerrero, 43630 Tulancingo de Bravo, Hidalgo.', 400, 404, 5919.45, 5860.84, 11, 'Venta', 'Casa', 2, 3, 2, 1.00, 2.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-ddabe15a05a2-976e-1effcc87-bd51-416b'),
(99, 'B3', 3200000.00, 'Casa - Tulancingo de Bravo', 200, 600, 16000.00, 5333.33, 10, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'El Banco', '', 'https://www.lamudi.com.mx/detalle/41032-73-ce47f616dd68-627e-e71d1c4a-a33f-3d24'),
(100, 'E2', 675000.00, 'DEPARTAMENTOEN VENTA EN COLONIAFRACCIONAMIENTO REAL NAVARRA FASE I', 46, 46, 14673.91, 14673.91, 1, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'La Argentina', '', 'https://www.lamudi.com.mx/detalle/41032-73-19bc7626f3da-2fad-1913597-957a-792f'),
(101, 'E2', 680000.00, 'CASA ECONOMICA EN CAMPO ALEGRE TULANCINGO', 90, 46, 7555.56, 14782.61, 1, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Jaltepec', '', 'https://www.lamudi.com.mx/detalle/41032-73-cbb4b98fb7b8-56e-1912a13-8e08-7276'),
(102, 'E2', 730000.00, 'Casas económicas en Privada, Napateco Tulancingo Hgo.', 91, 53, 8021.98, 13773.58, 12, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Napateco', '', 'https://www.lamudi.com.mx/detalle/41032-73-61c2eecd4e32-58e5-84cdbd52-9055-4de0'),
(103, 'E2', 670000.00, 'PREVENTA Departamentos nuevos y económicos en Tulancingo', 60, 60, 11166.67, 11166.67, 16, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'Los Pinos', '', 'https://www.lamudi.com.mx/detalle/41032-73-2bd215798759-6b9b-c4a4aff1-b239-3fed'),
(104, 'D1', 1150000.00, 'CASA NUEVA EN PRIVADA SAN DANIEL, TULANCINGO HIDALGO', 105, 62, 10952.38, 18548.39, 16, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-e1e9f2183ac5-7f02-5ba171a0-bd32-34c5'),
(105, 'E3', 945000.00, 'CASA ECONOMICA NUEVA INDIGO EN FRACCIONAMIENTO RESIDENCIAL TULANCINGO', 66, 66, 14318.18, 14318.18, 1, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Valle Verde', '', 'https://www.lamudi.com.mx/detalle/41032-73-fad01c1a75f1-e779-190e105-886d-7aea'),
(106, 'E3', 790000.00, 'Casa en Fracc. Los Arcos, Napateco Tulancingo de Bravo Hidalgo', 92, 69, 8586.96, 11449.28, 1, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Cebolletas', '', 'https://www.lamudi.com.mx/detalle/41032-73-2436b19a63d0-3842-1912485-8d91-7e20'),
(107, 'E3', 980000.00, 'CASA EN PROMOCION $980,000 solo pago de contado', 105, 70, 9333.33, 14000.00, 2, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Insurgentes', '', 'https://www.lamudi.com.mx/detalle/41032-73-4fc03eec26cc-664b-59212c90-b8a7-4ffa'),
(108, 'D1', 1050000.00, 'CASA DE 1 NIVEL EN PRIVADA, TULANCINGO HIDALGO', 105, 70, 10000.00, 15000.00, 6, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-58b55adc017b-6914-f7d09bf-9a71-458e'),
(109, 'D1', 1060000.00, 'CASA NUEVA EN FRACC. TOLEDO TULANCINGO', 105, 71, 10095.24, 14929.58, 1, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-ff9517ed2d02-801-19138a5-917a-759a'),
(110, 'D1', 1080000.00, 'Casa con opción de crecimiento en Villas Santa María, Tulancingo Hgo.', 105, 73, 10285.71, 14794.52, 9, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-148a066ebd7c-a22f-24777fa3-acc5-46bd'),
(111, 'E3', 950000.00, 'CASA EN MAGISTERIO BIENVENIDOS CRÉDITOS HIPOTECARIOS', 92, 77, 10326.09, 12337.66, 2, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-82e8557da084-6bc3-2f8760c4-a055-4cf3'),
(112, 'D1', 1050000.00, 'CASA EN FRACCIONAMIENTO CERRADO, CIMA DORADA TULANCINGO', 105, 77, 10000.00, 13636.36, 9, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'San Jose Caltengo', '', 'https://www.lamudi.com.mx/detalle/41032-73-60f9fc9ca4df-8fdf-6c7094aa-a826-4471'),
(113, 'E3', 995000.00, 'VENTA DE CASA DE LUJO EN TULANCINGO', 95, 78, 10473.68, 12756.41, 1, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Insurgentes', '', 'https://www.lamudi.com.mx/detalle/41032-73-69ef91f1fe62-dfa7-190f7d1-aa95-734d'),
(114, 'E2', 650000.00, 'VENTA DE CASA ECONÓMICA EN NAPATECO, EN TULANCINGO HIDALGO', 90, 90, 7222.22, 7222.22, 6, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Cebolletas', '', 'https://www.lamudi.com.mx/detalle/41032-73-41ce0348aadc-9c56-96819439-86d4-1f2c'),
(115, 'E3', 870000.00, 'VENTA DE CASA EN VISITA REAL FRACCIONAMIENTO PRIVADO EN TULANCINGO COCINA DE REGALO', 90, 90, 9666.67, 9666.67, 2, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'San Juan', '', 'https://www.lamudi.com.mx/detalle/41032-73-4bb525b20b32-56ca-1906c25-a0d5-77b7'),
(116, 'E3', 980000.00, 'VENTA DE CASA ECONOMICA EN ESQUINA CON LOCAL', 90, 90, 10888.89, 10888.89, 2, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Jaltepec', '', 'https://www.lamudi.com.mx/detalle/41032-73-cc355a63c8df-bd23-190afcd-b7cc-7ed8'),
(117, 'E2', 549000.00, 'Casa VENTA, Guadalupe 1a Sección, Tulancingo de Bravo, Hidalgo', 140, 100, 3921.43, 5490.00, 3, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Francisco I Madero', '', 'https://www.lamudi.com.mx/detalle/41032-73-a8461c0ca6da-78da-deaa8761-a81b-49c0'),
(118, 'E3', 841000.00, 'Invierte con confianza, Casa en Venta, Vicente Guerrero, Tulancingo', 110, 110, 7645.45, 7645.45, 2, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-db0b45b5cc0e-8c9-75fa1f48-8987-4ede'),
(119, 'E3', 841000.00, 'CASA en Venta en Col. Vicente Guerrero, Centro de Tulancingo, Hgo.', 110, 110, 7645.45, 7645.45, 2, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-16cb3becc27a-c164-5cc298ad-8bde-40c9'),
(120, 'E3', 841000.00, 'Casa en Venta, Tulancingo de Bravo, Hidalgo', 110, 110, 7645.45, 7645.45, 2, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-3b4527894551-1a45-1ca862a1-b09b-4b2d'),
(121, 'E3', 841000.00, 'CASA EN VENTA! UBICADA EN CALLE HERMEREGILDO GALEANA, COLONIA VICENTE GUERRERO, TULANCINGO, HIDALGO, ENORME OPOTTUNIDAD!', 110, 110, 7645.45, 7645.45, 1, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-a9c65abcd3d5-c6a2-1911074-856c-748e'),
(122, 'E3', 841000.00, 'Hermosa casa en venta, en C. Hermenegildo Galeana, Vicente Guerrero Tulancingo de Bravo, Hgo', 110, 110, 7645.45, 7645.45, 2, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-50f9c93429c3-5a8d-190c242-bebd-79d9'),
(123, 'E3', 841000.00, 'Casa en venta, hipoteca', 110, 110, 7645.45, 7645.45, 2, 'Venta', 'Casa', 2, 2, 1, 1.00, 1.50, 0, 'Vicente Guerrero', '', 'https://www.lamudi.com.mx/detalle/41032-73-9bc81abcd324-9ec1-190a87c-bafd-8048'),
(124, 'B1', 2600000.00, 'CASA DE UN NIVEL EN PRIVADA, MEDIAS TIERRAS', 200, 160, 13000.00, 16250.00, 2, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Medias Tierras', '', 'https://www.lamudi.com.mx/detalle/41032-73-7f4ce8503c96-4694-d8b1d0f3-b95f-4e82'),
(125, '', 3000000.00, 'Casa en Privada, Tulancingo de Bravo, Residencial Riva Palacio', 200, 170, 15000.00, 17647.06, 9, 'Venta', 'Casa', 2, 2, 3, 0.00, 3.00, 0, 'Rojo Gómez', '', 'https://www.lamudi.com.mx/detalle/41032-73-50049742f4f-c74f-e43909c1-bfe6-4285'),
(126, '', 2000000.00, 'CASA EN EL ESTADO DE HIDALGO', 250, 170, 8000.00, 11764.71, 7, 'Venta', 'Casa', 2, 1, 1, 0.00, 1.00, 0, 'Francisco I Madero', '', 'https://www.lamudi.com.mx/detalle/41032-73-147f9b9aaae2-32cd-f903ca89-81d0-3a0c');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alfa_agosto_2024_tulancingo`
--
ALTER TABLE `alfa_agosto_2024_tulancingo`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
