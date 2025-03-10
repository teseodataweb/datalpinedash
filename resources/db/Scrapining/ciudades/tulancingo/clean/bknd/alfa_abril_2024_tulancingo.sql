-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2024 a las 17:39:41
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
-- Estructura de tabla para la tabla `alfa_abril_2024_tulancingo`
--

CREATE TABLE `alfa_abril_2024_tulancingo` (
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
-- Volcado de datos para la tabla `alfa_abril_2024_tulancingo`
--

INSERT INTO `alfa_abril_2024_tulancingo` (`id`, `Categoria`, `Precio`, `propiedad`, `metros_total`, `metros_construido`, `precio_m2_terreno`, `precio_m2_construido`, `tiempo_de_publicacion`, `Estado`, `Tipo`, `Estacionamientos`, `Recamaras`, `Banos`, `Medio_banos`, `Banos_Total`, `Seguridad`, `Colonia`, `CP`, `url`) VALUES
(1, '', 8000000.00, 'Casa - Tulancingo de Bravo', 482, 460, 16597.51, 17391.30, 17, 'Venta', 'Casa', 0, 5, 5, 0.00, 5.00, 0, 'Felipe Ángeles', '0', 'https://www.lamudi.com.mx//detalle/41032-73-60adaf87eb8e-1677-853f180a-b1be-3423'),
(2, 'S1', 4810000.00, 'CASA EN VENTA COL JARDINES DEL SUR TULANCINGO DE BRAVO HIDALGO', 228, 360, 21096.49, 13361.11, 16, 'Venta', 'Casa', 0, 4, 0, 0.00, 0.00, 0, 'Jardines del Sur', '0', 'https://www.lamudi.com.mx//detalle/41032-73-d5a3d45f5dbe-72d8-ae5720cb-bf37-39c1'),
(3, 'S1', 4500000.00, 'Se vende casa en Tulancingo, Fraccionamiento San Francisco Huatengo.', 200, 287, 22500.00, 15679.44, 8, 'Venta', 'Casa', 0, 0, 0, 0.00, 0.00, 0, 'La Quinta', '0', 'https://www.lamudi.com.mx//detalle/41032-73-cfbd09274c36-b108-c2a1f4e9-ad07-1237'),
(4, 'S1', 4300000.00, 'Casa en Venta, Col. La Morena. Tulancingo. Pachuca.', 160, 240, 26875.00, 17916.67, 12, 'Venta', 'Casa', 1, 5, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-76d564d8c2b1-d515-4c729ba5-b486-46e3'),
(5, 'A3', 3946465.00, 'VENTA DE CASA EN PEDREGAL DE SAN FRANCISCO TULANCINGO DE BRAVO HIDALGO GDS/AS', 150, 150, 26309.77, 26309.77, 6, 'Venta', 'Casa En Fraccionamiento', 1, 3, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '0', 'https://www.lamudi.com.mx//detalle/41032-73-dfeffb37df74-1249-f8860080-9ed3-4249'),
(6, '', 3750000.00, 'CASA DE 1 NIVEL EN LA MORENA, TULANCINGO', 160, 240, 23437.50, 15625.00, 16, 'Venta', 'Casa', 1, 4, 4, 0.00, 4.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-5b029fa4b8c7-f083-3a6060f6-9bd2-39bf'),
(7, 'A2', 3555000.00, 'VENTA DE CASA EN CALLE FRANZ VON LISZT, FRACC. JARDINES DEL SUR, TULANCINGO HIDALGO MÉXICO, ¡NO SE ACEPTAN CRÉDITOS!', 228, 360, 15592.11, 9875.00, 8, 'Venta', 'Casa En Fraccionamiento', 1, 4, 1, 0.00, 1.00, 0, 'Jardines del Sur', '0', 'https://www.lamudi.com.mx//detalle/41032-73-f965e0ae6b2f-b1c8-8cf5147d-97dd-4d3e'),
(8, 'A1', 3400000.00, 'VENTA DE CASA DE LUJO CENTRICA DE TULANCINGO 3 RECAMARAS', 200, 200, 17000.00, 17000.00, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Santa Ana', '0', 'https://www.lamudi.com.mx//detalle/41032-73-7b50f7d88d98-1e26-b3b98b79-bf7b-1f12'),
(9, 'A1', 3350000.00, 'VENTA DE CASA AMPLIA Y DE LUJO SEMICENTRICA TULANCINGO 3 RECAMARAS', 200, 200, 16750.00, 16750.00, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Santa Ana', '0', 'https://www.lamudi.com.mx//detalle/41032-73-7b50f7d88d98-32e7-bb7921b9-bf7b-1f12'),
(10, 'B3', 3200000.00, 'VENTA SE CASA ECONOMICA Y DE LUJO EN TULANCINGO HIDALGO 3 RECAMARAS', 140, 140, 22857.14, 22857.14, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Las Presas', '0', 'https://www.lamudi.com.mx//detalle/41032-73-7b50f7d88d98-17e4-5eb74799-bf7b-1f12'),
(11, 'B3', 3200000.00, 'Casa - Tulancingo de Bravo', 200, 600, 16000.00, 5333.33, 10, 'Venta', 'Casa', 0, 3, 2, 0.00, 2.00, 0, 'San Juan', '0', 'https://www.lamudi.com.mx//detalle/41032-73-ce47f616dd68-627e-e71d1c4a-a33f-3d24'),
(12, 'B3', 3130000.00, 'CASA ADJ., Nicolas Copérnico  San Francisco Huatengo I, 43647 Tulancingo de Bravo, Hidalgo.', 200, 241, 15650.00, 12987.55, 11, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '0', 'https://www.lamudi.com.mx//detalle/41032-73-29f30f8fd31a-ce4a-3d18d030-bebb-4453'),
(13, '', 3000000.00, 'Casa en Privada, Tulancingo de Bravo, Residencial Riva Palacio', 200, 170, 15000.00, 17647.06, 9, 'Venta', 'Casa', 0, 2, 3, 0.00, 3.00, 0, 'La Escondida', '0', 'https://www.lamudi.com.mx//detalle/41032-73-50049742f4f-c74f-e43909c1-bfe6-4285'),
(14, 'B2', 2900000.00, 'Casa de 3 recámaras en Privada Riva Palacio, La Morena Tulancingo Hgo', 120, 150, 24166.67, 19333.33, 10, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-bfb49856282a-e531-99e14565-8dd0-47ce'),
(15, 'B2', 2900000.00, 'Una casa perfectamente diseñada en la mejor ubicación de Tulancingo, La Morena', 120, 154, 24166.67, 18831.17, 10, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Conjunto Habitacional Los Mesones', '0', 'https://www.lamudi.com.mx//detalle/41032-73-f1d9f7d3a1ab-c9e6-ef7f900e-b973-4d71'),
(16, 'B2', 2890000.00, 'CASA EN VENTA EN TULANCINGO A 45 MINUTOS DE LA CIUDAD DE MEXICO', 220, 140, 13136.36, 20642.86, 16, 'Venta', 'Casa', 1, 3, 3, 0.00, 3.00, 0, 'Conjunto Habitacional Los Mesones', '0', 'https://www.lamudi.com.mx//detalle/41032-73-9e6409a03fe5-da06-4354ce5b-bbea-3254'),
(17, 'B2', 2850000.00, 'BONITO DEPARTAMENTO EN  COL LA PAZ', 95, 95, 30000.00, 30000.00, 8, 'Venta', 'Departamento', 1, 2, 2, 0.00, 2.00, 0, 'El Mirador', '0', 'https://www.lamudi.com.mx//detalle/41032-73-bc695da05ccc-338f-3cc449db-a987-4df0'),
(18, 'B2', 2758000.00, 'VVV VENTA DE CASA CALLE FRANZ VON LISZT JARDINES DEL SUR 3A SECC TULANCINGO DE BRAVO HIDALGO', 70, 140, 39400.00, 19700.00, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Jardines del Sur', '0', 'https://www.lamudi.com.mx//detalle/41032-73-4c88e4b1cb97-8a55-3dcaa553-ad27-426f'),
(19, 'B2', 2758000.00, 'Casa VENTA, Jardines del Sur, Tulancingo de Bravo', 160, 160, 17237.50, 17237.50, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Jardines del Sur', '0', 'https://www.lamudi.com.mx//detalle/41032-73-467b23fd01cb-cb12-3a22ec63-8c62-4978'),
(20, 'B1', 2700000.00, 'Amplia casa en venta Tulancingo Hgo.', 232, 200, 11637.93, 13500.00, 10, 'Venta', 'Casa', 1, 3, 3, 0.00, 3.00, 0, 'El Mirador', '0', 'https://www.lamudi.com.mx//detalle/41032-73-7beec3489eb2-2e79-af1c855a-9632-4633'),
(21, 'B1', 2650000.00, 'CASA NUEVA EN VENTA RESIDENCIAL TERRANOVA, TULANCINGO.', 202, 135, 13118.81, 19629.63, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 2, 0.00, 2.00, 0, 'La Cañada', '0', 'https://www.lamudi.com.mx//detalle/41032-73-48844530cc85-8bf0-ff3c1c48-b7eb-39b9'),
(22, 'C3', 2480000.00, 'CASA CON 350M2 DE TERRENO, COL. VALLE VERDE TULANCINGO HGO', 350, 250, 7085.71, 9920.00, 12, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Valle Verde', '0', 'https://www.lamudi.com.mx//detalle/41032-73-70ad2c30cdd4-ac4-77f13dfb-aa21-4f0d'),
(23, 'C3', 2450000.00, 'Pre-Venta de DEPARTAMENTOS EN ZONA CENTRO DE PACHUCA', 120, 120, 20416.67, 20416.67, 7, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '0', 'https://www.lamudi.com.mx//detalle/41032-73-6cc9bdce2080-a85e-2225fd77-bf00-4f1c'),
(24, 'C3', 2367780.00, 'HERMOSA CASA ADJ, COMPRAVENTA, Chihuahua , Vicente Guerrero, 43630 Tulancingo de Bravo, Hidalgo.', 400, 404, 5919.45, 5860.84, 11, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '0', 'https://www.lamudi.com.mx//detalle/41032-73-ddabe15a05a2-976e-1effcc87-bd51-416b'),
(25, '', 2250000.00, 'Casa en Venta en Zempoala,El Mirador 24-18 AA', 156, 156, 14423.08, 14423.08, 9, 'Venta', 'Departamento', 1, 3, 3, 0.00, 3.00, 0, 'Veneto', '0', 'https://www.lamudi.com.mx//detalle/41032-73-17123abd82c1-5b7-7287fe47-937f-3aab'),
(26, 'C2', 2200000.00, 'EXCLUSIVO FRACC. PEDREGAL DE SAN FRANCISCO TULANCINGO HGO.', 150, 159, 14666.67, 13836.48, 16, 'Venta', 'Casa En Fraccionamiento', 0, 3, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '0', 'https://www.lamudi.com.mx//detalle/41032-73-449e66261448-8b10-e2cde429-9902-33e5'),
(27, 'C2', 2159000.00, 'Hidalgo,Tulancingo,Almicar Residencial,Casa ,Venta', 105, 220, 20561.90, 9813.64, 8, 'Venta', 'Casa', 1, 6, 1, 0.00, 1.00, 0, 'La Herradura', '0', 'https://www.lamudi.com.mx//detalle/41032-73-60e84bf363a9-7428-752d4dc9-bdcf-3afb'),
(28, '', 2000000.00, 'CASA EN EL ESTADO DE HIDALGO', 250, 170, 8000.00, 11764.71, 7, 'Venta', 'Casa', 1, 1, 1, 0.00, 1.00, 0, 'Guadalupe', '0', 'https://www.lamudi.com.mx//detalle/41032-73-147f9b9aaae2-32cd-f903ca89-81d0-3a0c'),
(29, '', 2000000.00, 'CASAS EN MEDIAS TIERRAS, TULANCINGO DE BRAVO HIDALGO', 92, 182, 21739.13, 10989.01, 14, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Medias Tierras', '0', 'https://www.lamudi.com.mx//detalle/41032-73-af54d1fd6cd2-f433-d11bc63-b17f-409e'),
(30, 'C1', 1976116.00, 'VENTA DE CASA EN LA HERRADURA TULANCINGO DE BRAVO HIDALGO GDS/AS', 120, 120, 16467.63, 16467.63, 6, 'Venta', 'Casa En Fraccionamiento', 1, 3, 1, 0.00, 1.00, 0, 'Tollancingo', '0', 'https://www.lamudi.com.mx//detalle/41032-73-ccd0c59699a-351e-706be229-9ef4-4e59'),
(31, 'C1', 1964872.00, 'Casa en venta en Residencial. Almicar, Tulancingo de Bravo ¡Compra esta propiedad mediante Cesión de Derechos e incrementa tu patrimonio! ¡Contáctame, te digo cómo hacerlo!', 92, 140, 21357.30, 14034.80, 9, 'Venta', 'Casa En Condominio', 1, 3, 1, 0.00, 1.00, 0, 'Tollancingo', '0', 'https://www.lamudi.com.mx//detalle/41032-73-526a378a978c-5d9a-b257c431-9517-4c07'),
(32, 'C1', 1930000.00, 'CASA EN VENTA EN PRIVADA VICTORIA, EN MEDIAS TIERRAS, TULANCINGO', 125, 144, 15440.00, 13402.78, 16, 'Venta', 'Casa En Fraccionamiento', 0, 3, 2, 0.00, 2.00, 0, 'Medias Tierras', '0', 'https://www.lamudi.com.mx//detalle/41032-73-8251aff19fca-ef3-5d8fb87-b771-3968'),
(33, 'C1', 1890000.00, 'CASA EN TULANCINGO A 45 MIN DE LA CIUDAD DE MEXICO', 80, 140, 23625.00, 13500.00, 16, 'Venta', 'Casa', 0, 2, 2, 0.00, 2.00, 0, 'Conjunto Habitacional Los Mesones', '0', 'https://www.lamudi.com.mx//detalle/41032-73-252d3fdc1b9d-6034-cb024130-8ca5-3fa2'),
(34, 'D3', 1712133.00, 'Departamento residencial de preventa en Mineral de la Reforma Hgo.', 82, 82, 20879.67, 20879.67, 21, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'Mineral de la Reforma', '0', 'https://www.lamudi.com.mx//detalle/41032-73-26b7b429c361-c148-d94730b0-ad64-355c'),
(35, 'D3', 1700000.00, 'Se VENDE casa en Ampliación Rojo Gómez Tulancingo Hidalgo', 120, 120, 14166.67, 14166.67, 13, 'Venta', 'Casa', 1, 2, 2, 0.00, 2.00, 0, 'Ampliación Javier Rojo Gómez', '0', 'https://www.lamudi.com.mx//detalle/41032-73-b3b07a6e0fe-21ef-d909e739-8994-3a1c'),
(36, 'D3', 1600000.00, 'VENTA DE CASA CENTRICA AMPLIA CON JARDIN 4 RECAMARAS EN TULANCINGO HIDALGO', 178, 178, 8988.76, 8988.76, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Medias Tierras', '0', 'https://www.lamudi.com.mx//detalle/41032-73-43377c90abcd-3a87-51018c29-a91c-1f40'),
(37, 'D3', 1530000.00, 'Casa en Tulancingo, Medias Tierras de 2 niveles, con garaje techado.', 178, 220, 8595.51, 6954.55, 13, 'Venta', 'Casa', 0, 4, 1, 0.00, 1.00, 0, 'Medias Tierras', '0', 'https://www.lamudi.com.mx//detalle/41032-73-9571cd0e94a5-bbc0-b04d045b-bb6b-4703'),
(38, 'D3', 1523793.00, 'Departamento en venta Portezuelos', 80, 80, 19047.41, 19047.41, 16, 'Venta', 'Condominio Horizontal', 1, 2, 1, 0.00, 1.00, 0, 'Villas del Álamo', '0', 'https://www.lamudi.com.mx//detalle/41032-73-14be0c0d503c-8e25-10a3f736-9105-31ce'),
(39, 'D2', 1450000.00, 'VENTA DE CASA ECONOMICA Y CENTRICA AMPLIA CON 4 RECAMARAS EN TULANCINGO', 128, 128, 11328.13, 11328.13, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '0', 'https://www.lamudi.com.mx//detalle/41032-73-7b50f7d88d98-24f9-6f9f5e99-bf7b-1f12'),
(40, 'D2', 1450000.00, 'PREVENTA Casa de 3 niveles con sala doble altura, en Medias Tierras', 142, 135, 10211.27, 10740.74, 6, 'Venta', 'Casa', 0, 3, 3, 0.00, 3.00, 0, 'Medias Tierras', '0', 'https://www.lamudi.com.mx//detalle/41032-73-c41ce8c5e371-728-831364f-a0d9-477b'),
(41, 'D2', 1366025.00, 'VENTA DE CASA EN JARDINES DEL SUR TULANCINGO DE BRAVO HIDALGO GDS/AS', 120, 120, 11383.54, 11383.54, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Jardines del Sur', '0', 'https://www.lamudi.com.mx//detalle/41032-73-c05d32c8a2a0-1e10-f3f11bd6-b838-4459'),
(42, 'D2', 1350000.00, 'CASA EN VENTA EN NAPATECO TULANCINGO, HIDALGO', 171, 105, 7894.74, 12857.14, 12, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional Napateco', '0', 'https://www.lamudi.com.mx//detalle/41032-73-14ca92dd8a4d-db6f-eaae4c26-89a0-3953'),
(43, 'D2', 1300000.00, 'CASA EN VENTA EN FRACCIONAMIENTO CHAVARRIA', 120, 120, 10833.33, 10833.33, 16, 'Venta', 'Departamento', 1, 2, 2, 0.00, 2.00, 0, 'Pachuca de Soto', '0', 'https://www.lamudi.com.mx//detalle/41032-73-15e65e0d1f97-583f-70126887-8cef-3701'),
(44, 'D2', 1290000.00, 'Casa en Col. 20 de noviembre, Tulancingo de Bravo, Hidalgo', 120, 190, 10750.00, 6789.47, 9, 'Venta', 'Casa', 0, 4, 3, 0.00, 3.00, 0, '20 de Noviembre', '0', 'https://www.lamudi.com.mx//detalle/41032-73-a1cf0b934e6e-30bf-1313e532-9cf5-40e4'),
(45, '', 1250000.00, 'DEPARTAMENTO EN VENTA CENTRO, PACHUCA DE SOTO, HGO', 90, 90, 13888.89, 13888.89, 12, 'Venta', 'Departamento', 1, 3, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '0', 'https://www.lamudi.com.mx//detalle/41032-73-6f63a7321a1c-6556-574575e1-8ff1-4797'),
(46, '', 1250000.00, 'VENTA DE CASA ECONÓMICA EN FRACCIONAMIENTO PRIVADO EN TULANCINGO 3 RECAMARAS', 100, 125, 12500.00, 10000.00, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 2, 0.00, 2.00, 0, 'San Nicolás El Chico', '0', 'https://www.lamudi.com.mx//detalle/41032-73-bfa7f15b7f9c-b68e-b93b6c46-8fb7-313c'),
(47, 'D1', 1249000.00, 'Oportunidad de Departamento Céntrico en Venta Pachuca', 95, 95, 13147.37, 13147.37, 12, 'Venta', 'Departamento', 1, 3, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '0', 'https://www.lamudi.com.mx//detalle/41032-73-ea07d4568a9f-872f-dff1181e-98fe-4d9e'),
(48, 'D1', 1193100.00, 'TAD35080 Gran oportunidad para invertir en Tulancingo', 105, 75, 11362.86, 15908.00, 6, 'Venta', 'Casa', 0, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-9358f3d09ca3-ba1d-b73b9e48-86f6-4dbb'),
(49, 'D1', 1180000.00, 'CASA EN FRACCIONAMIENTO CERRADO, CIMA DORADA TULANCINGO', 105, 77, 11238.10, 15324.68, 9, 'Venta', 'Casa', 0, 2, 1, 0.00, 1.00, 0, 'San José Caltengo', '0', 'https://www.lamudi.com.mx//detalle/41032-73-60f9fc9ca4df-8fdf-6c7094aa-a826-4471'),
(50, 'D1', 1157000.00, 'Casa en venta con 3 recámaras en  Tulancingo', 72, 81, 16069.44, 14283.95, 16, 'Venta', 'Casa En Fraccionamiento', 0, 3, 2, 0.00, 2.00, 0, 'Villa Sol', '0', 'https://www.lamudi.com.mx//detalle/41032-73-96ac604bba20-635d-4730664-89a4-3be2'),
(51, 'D1', 1150000.00, 'CASA NUEVA EN PRIVADA SAN DANIEL, TULANCINGO HIDALGO', 105, 62, 10952.38, 18548.39, 16, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Conjunto Habitacional Los Mesones', '0', 'https://www.lamudi.com.mx//detalle/41032-73-e1e9f2183ac5-7f02-5ba171a0-bd32-34c5'),
(52, 'D1', 1100000.00, 'VENTA DE CASA 3 RECAMARAS EN TULANCINGO HIDALGO', 105, 102, 10476.19, 10784.31, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 2, 0.00, 2.00, 0, 'Tulancingo de Bravo Centro', '0', 'https://www.lamudi.com.mx//detalle/41032-73-855a866a4c28-80e9-6b217a01-90e4-3abf'),
(53, 'D1', 1100000.00, 'VENTA DE CASA ECONOMICA DE 4 RECAMARAS EN COLONIA EL PARAISO EN TULANCINGO HIDALGO', 160, 100, 6875.00, 11000.00, 16, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo Centro', '0', 'https://www.lamudi.com.mx//detalle/41032-73-46863522d18d-457e-9ef05d1f-a468-3838'),
(54, 'D1', 1100000.00, 'HERMOSA CASA EN VENTA EN TULANCINGO DE BRAVO HIDALGO.', 398, 398, 2763.82, 2763.82, 6, 'Venta', 'Casa', 1, 4, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-c3d586e6bb16-bbfd-7ff3c95e-a3d7-4960'),
(55, 'D1', 1080000.00, 'Casa con opción de crecimiento en Villas Santa María, Tulancingo Hgo.', 105, 73, 10285.71, 14794.52, 9, 'Venta', 'Casa', 0, 2, 1, 0.00, 1.00, 0, 'Ampliación Javier Rojo Gómez', '0', 'https://www.lamudi.com.mx//detalle/41032-73-148a066ebd7c-a22f-24777fa3-acc5-46bd'),
(56, 'D1', 1050000.00, 'CASA DE 1 NIVEL EN PRIVADA, TULANCINGO HIDALGO', 105, 70, 10000.00, 15000.00, 6, 'Venta', 'Casa', 0, 2, 1, 0.00, 1.00, 0, 'Ampliación Javier Rojo Gómez', '0', 'https://www.lamudi.com.mx//detalle/41032-73-58b55adc017b-6914-f7d09bf-9a71-458e'),
(57, 'D1', 1050000.00, 'VENTA DE CASA DE LUJO 3 RECAMARAS EN TULANCINGO', 80, 120, 13125.00, 8750.00, 14, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Medias Tierras', '0', 'https://www.lamudi.com.mx//detalle/41032-73-89ca4ee22d25-18f8-67cdfbc9-994b-1237'),
(58, 'D1', 1031100.00, 'Oportunidad de compra en Tulancingo', 110, 110, 9373.64, 9373.64, 6, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '0', 'https://www.lamudi.com.mx//detalle/41032-73-fa15f10ac271-f310-6ae34913-9618-42ac'),
(59, 'E3', 990100.00, 'Vivienda en venta con gran plusvalía de remate dentro de Calle Hermenegildo Galeana 706, Vicente Guerrero, Tulancingo, Estado de Hidalgo, México', 110, 110, 9000.91, 9000.91, 8, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '0', 'https://www.lamudi.com.mx//detalle/41032-73-db570cd0d44e-1be3-5ab37df6-83f7-4656'),
(60, 'E3', 990000.00, 'EXTRENA TU CASA A BAJO COSTO EN **TULANCINGO DE BRAVO** HGO.', 110, 110, 9000.00, 9000.00, 7, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '0', 'https://www.lamudi.com.mx//detalle/41032-73-bf57b977d082-55cb-a85d7cdf-ba19-4e54'),
(61, 'E3', 985000.00, 'CASA DE 1 NIVEL EN FRACC. VILLAS SANTA MARIA, TULANCINGO HIDALGO', 105, 76, 9380.95, 12960.53, 16, 'Venta', 'Casa En Fraccionamiento', 1, 2, 1, 0.00, 1.00, 0, 'Ampliación Javier Rojo Gómez', '0', 'https://www.lamudi.com.mx//detalle/41032-73-7ce59ea81ac0-ba8f-53ce538d-9349-3d2f'),
(62, 'E3', 984000.00, 'Casa en venta con 3 recámaras en Tulancingo', 72, 67, 13666.67, 14686.57, 16, 'Venta', 'Casa En Fraccionamiento', 0, 3, 2, 0.00, 2.00, 0, 'Villa Sol', '0', 'https://www.lamudi.com.mx//detalle/41032-73-a533d1c6b1d4-b82f-b4e9c29b-9bda-3798'),
(63, 'E3', 980000.00, 'Venta de departamentos ejecutivos, 2 recámaras y 2 baños.', 82, 82, 11951.22, 11951.22, 16, 'Venta', 'Departamento', 1, 2, 2, 0.00, 2.00, 0, 'Fracc Paseo de las Reynas V', '0', 'https://www.lamudi.com.mx//detalle/41032-73-e0684482854-c985-672238f7-bb61-3806'),
(64, 'E3', 980000.00, 'Inmueble adjudicado en Tulancingo, Hidalgo', 110, 110, 8909.09, 8909.09, 8, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '0', 'https://www.lamudi.com.mx//detalle/41032-73-c1f29b7f102f-3101-c4a42d6b-b2d3-4e63'),
(65, 'E3', 960000.00, 'Se VENDE Departamento en Paseos de las Reynas Pachuca Hidalgo', 90, 90, 10666.67, 10666.67, 14, 'Venta', 'Departamento', 1, 0, 3, 0.00, 3.00, 0, 'Unidad Universitaria', '0', 'https://www.lamudi.com.mx//detalle/41032-73-941e997889bd-ef89-a3a26453-9c28-3cf4'),
(66, 'E3', 960000.00, 'EXCELENTES DEPARTAMENTOS EN VENTA EN PASEOS DE LAS REYNAS', 85, 85, 11294.12, 11294.12, 16, 'Venta', 'Condominio Horizontal', 0, 2, 2, 0.00, 2.00, 0, 'Villas del Álamo', '0', 'https://www.lamudi.com.mx//detalle/41032-73-8b15ebe4fddf-dad2-61ceb51-916d-337d'),
(67, 'E3', 950000.00, '¡Compra Gran Oportunidad! ¡Iluminada Casa Adjudicada!  ¡Cesión Inmediata Ante Notario, Recuperación Bancaria! CS/FJCO', 140, 140, 6785.71, 6785.71, 9, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'El Mirador', '0', 'https://www.lamudi.com.mx//detalle/41032-73-b4c836456869-6b00-52d6e119-9cc6-4bc5'),
(68, 'E3', 950000.00, 'VENTA DE CASA ECONÓMICA EN PRIVADA EN TULANCINGO 3 RECAMARAS', 90, 90, 10555.56, 10555.56, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 2, 0.00, 2.00, 0, 'Tulancingo de Bravo Centro', '0', 'https://www.lamudi.com.mx//detalle/41032-73-726621aca3cf-3af-888d711b-a8a1-337b'),
(69, 'E3', 945000.00, 'Casa en venta Tulancingo Hidalgo', 72, 66, 13125.00, 14318.18, 16, 'Venta', 'Casa En Fraccionamiento', 1, 2, 1, 0.00, 1.00, 0, 'Valle Verde', '0', 'https://www.lamudi.com.mx//detalle/41032-73-6756a15193a6-bc40-86d16cf5-862d-3197'),
(70, 'E3', 903000.00, 'VICENTE GUERRERO CASA EN VENTA TULANCINGO HIDALGO.', 100, 95, 9030.00, 9505.26, 8, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '0', 'https://www.lamudi.com.mx//detalle/41032-73-f949bbd4f426-ae4b-d072548c-8fcc-32a4'),
(71, 'E3', 900000.00, 'ES HORA DE REALIZAR TU SUEÑO Y ADQUIRIR ESTA HERMOSA CASA EN TULANCINGO HIDALGO', 220, 220, 4090.91, 4090.91, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-676e3c4dd0a1-ffc7-52ac93e1-97fa-4e8d'),
(72, 'E3', 895000.00, 'Casa en Venta Col. Lomas del Progreso, Tulancingo, Hidalgo', 129, 260, 6937.98, 3442.31, 9, 'Venta', 'Casa', 1, 3, 3, 0.00, 3.00, 0, 'Lomas de Progreso', '0', 'https://www.lamudi.com.mx//detalle/41032-73-1317b748069a-fb8e-bd5e2fcc-a682-4496'),
(73, 'E3', 868000.00, 'Casa en venta Tulancingo Hidalgo', 72, 61, 12055.56, 14229.51, 16, 'Venta', 'Casa En Fraccionamiento', 0, 2, 1, 0.00, 1.00, 0, 'Villa Sol', '0', 'https://www.lamudi.com.mx//detalle/41032-73-55eb54793d25-880b-e2df7533-933e-3cf2'),
(74, 'E3', 848000.00, 'Casa en venta Tulancingo a 5 minutos de Plaza Patio', 72, 58, 11777.78, 14620.69, 16, 'Venta', 'Casa En Fraccionamiento', 0, 2, 1, 0.00, 1.00, 0, 'Villa Sol', '0', 'https://www.lamudi.com.mx//detalle/41032-73-a3dff86c0cda-487c-b98f7f6b-aec2-3bfe'),
(75, 'E3', 841100.00, 'BONITA CASA EN TULANCINGO DE BRAVO ,HGO(COLONIA. VICENTE GUERRERO)', 110, 110, 7646.36, 7646.36, 6, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '0', 'https://www.lamudi.com.mx//detalle/41032-73-aca5ad39d8e-43bb-387cb3a3-b3e3-4628'),
(76, 'E3', 835000.00, 'Casa en Venta Col. La Morena, Tulancingo de Bravo, Hidalgo', 140, 140, 5964.29, 5964.29, 13, 'Venta', 'Casa', 0, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-e34bd5879d4-99d7-c5e49891-8b18-4050'),
(77, 'E3', 812300.00, 'EXCELENTE OPORTUNIDAD DE OBTENER ESTE INMUEBLE A UN PRECIO MUY BAJO', 189, 180, 4297.88, 4512.78, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Medias Tierras', '0', 'https://www.lamudi.com.mx//detalle/41032-73-2707d9c9af08-647d-3f12f29e-a72f-47a8'),
(78, 'E3', 802390.00, 'MAR!!! VENTA DE DEPARTAMENTO DE RECUPERACION BANCARIA ZONA DE EN PACHUCA DE SOTO', 60, 60, 13373.17, 13373.17, 6, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'Cabañitas', '0', 'https://www.lamudi.com.mx//detalle/41032-73-837d5ea9d61c-f60b-ee94c8cb-966b-4681'),
(79, 'E3', 800000.00, 'AMPLIA CASA EN TULANCINGO', 330, 230, 2424.24, 3478.26, 16, 'Venta', 'Casa', 1, 4, 2, 0.00, 2.00, 0, 'Jardines del Sur', '0', 'https://www.lamudi.com.mx//detalle/41032-73-631aa1a8e8a6-59b-d8b85be5-a436-3c4f'),
(80, 'E3', 799000.00, 'PROPIEDAD EN OPORTUNIDAD EN COL. NUEVO TULANCINGO', 119, 200, 6714.29, 3995.00, 10, 'Venta', 'Casa', 1, 0, 0, 0.00, 0.00, 0, 'Nuevo Tulancingo', '0', 'https://www.lamudi.com.mx//detalle/41032-73-5b3bf28010f3-ec-c8c89156-bfdd-41ea'),
(81, 'E3', 790000.00, 'HERMOSA CASA EN VENTA EN FRACCIONAMIENTO RINCONADA LA MORENA EN TULANCINGO DE BRAVO EN HIDALGO', 114, 206, 6929.82, 3834.95, 6, 'Venta', 'Casa', 0, 3, 2, 0.00, 2.00, 0, 'Los Sabinos', '0', 'https://www.lamudi.com.mx//detalle/41032-73-540dcc266a05-e5af-52e04ab5-bf3d-4bff'),
(82, 'E3', 790000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO, HIDALGO.', 160, 330, 4937.50, 2393.94, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-21c7c9290e75-a25f-1562b92c-88df-48ae'),
(83, '', 750000.00, 'VENTA DE DEPARTAMENTO CENTRICO EN PACHUCA', 82, 82, 9146.34, 9146.34, 15, 'Venta', 'Departamento', 0, 1, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '0', 'https://www.lamudi.com.mx//detalle/41032-73-ed1b3df977d0-f0af-e096e2ae-b253-4d63'),
(84, '', 750000.00, 'CASA EN VENTA - COL. RINCONADA LA MORENA, TULANCINGO', 150, 180, 5000.00, 4166.67, 11, 'Venta', 'Casa', 0, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-1d94401d58d6-9c4d-e8ea114e-a7db-42c1'),
(85, 'E2', 737336.00, 'GRAN OPORTUNIDAD BONITA CASA UBICADA EN CALLE FRANCISCO VILLA COL EL MIRADOR MPO TULANCINGO DE BRAVO HIDALGO, EXCELENTE PRECIO $737,336', 120, 120, 6144.47, 6144.47, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Francisco I Madero', '0', 'https://www.lamudi.com.mx//detalle/41032-73-788a516b9f13-c849-bf85cfe8-8c84-40b5'),
(86, 'E2', 720000.00, 'Vendo casa', 90, 90, 8000.00, 8000.00, 6, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Unidad Habitacional Napateco', '0', 'https://www.lamudi.com.mx//detalle/41032-73-69b7318a5862-82f4-fbf74019-ade0-1f95'),
(87, 'E2', 720000.00, 'Casas económicas en Privada, Napateco Tulancingo Hgo.', 91, 53, 7912.09, 13584.91, 12, 'Venta', 'Casa', 0, 2, 1, 0.00, 1.00, 0, 'Unidad Habitacional Napateco', '0', 'https://www.lamudi.com.mx//detalle/41032-73-61c2eecd4e32-58e5-84cdbd52-9055-4de0'),
(88, 'E2', 685590.00, 'Casa en VENTA, La Morena secc  norte B, Tulancingo de Bravo, Hidalgo. CAL', 170, 210, 4032.88, 3264.71, 8, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-a52627981427-d469-5e954cb0-a477-40d3'),
(89, 'E2', 680000.00, '🏡Casa en venta en Rincones de La Hacienda 1RA SECCION 🏡 Tulancingo Hgo.', 90, 50, 7555.56, 13600.00, 6, 'Venta', 'Casa En Fraccionamiento', 0, 2, 1, 0.00, 1.00, 0, 'Fracc Rincones de la Hacienda', '0', 'https://www.lamudi.com.mx//detalle/41032-73-d3b66d40b3c3-5a36-c080c6b3-9305-461e'),
(90, 'E2', 678000.00, 'VENTA DE CASA EN CONDOMINIO TULANCINGO', 100, 120, 6780.00, 5650.00, 6, 'Venta', 'Casa En Fraccionamiento', 1, 3, 1, 0.00, 1.00, 0, 'San José Pedregal', '0', 'https://www.lamudi.com.mx//detalle/41032-73-6c6ae9edf2af-fd73-623e7b80-b9b2-4b8d'),
(91, 'E2', 672537.00, 'DEPARTAMENTO *** EN SUPER OFERTA ***', 87, 87, 7730.31, 7730.31, 9, 'Venta', 'Departamento', 0, 3, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '0', 'https://www.lamudi.com.mx//detalle/41032-73-76320bf01048-b597-7fd0c6b8-bd1f-4f4a'),
(92, 'E2', 650000.00, 'VENTA DE CASA ECONÓMICA EN NAPATECO, EN TULANCINGO HIDALGO', 90, 90, 7222.22, 7222.22, 6, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Rancho Napateco', '0', 'https://www.lamudi.com.mx//detalle/41032-73-41ce0348aadc-9c56-96819439-86d4-1f2c'),
(93, 'E2', 628000.00, 'EXCELETE OPORTUNIDAD, REMATE EN SAUCE', 114, 114, 5508.77, 5508.77, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-9d8f2f4bbdc1-ee7c-9cb1cf63-825c-4d11'),
(94, 'E2', 625000.00, 'HORTENCIA PROL. CLAVEL #108 LA MORENA SECC NTE B TULANCINGO DE BRAVO, HIDALGO', 156, 280, 4006.41, 2232.14, 8, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-411a18d207c1-ce0b-7c8885ca-8442-46f5'),
(95, 'E2', 622000.00, 'Casa en venta  Guadalupe 1ra Sección, Tulancingo, Hidalgo  DD41 GR', 230, 230, 2704.35, 2704.35, 10, 'Venta', 'Casa', 1, 4, 3, 0.00, 3.00, 0, 'Guadalupe', '0', 'https://www.lamudi.com.mx//detalle/41032-73-cba1ec894a47-74a-382d2619-87dd-4c9b'),
(96, 'E2', 620000.00, 'PREVENTA Departamentos nuevos y económicos en Tulancingo', 60, 60, 10333.33, 10333.33, 16, 'Venta', 'Departamento', 0, 2, 1, 0.00, 1.00, 0, 'Nuevo Tulancingo', '0', 'https://www.lamudi.com.mx//detalle/41032-73-2bd215798759-6b9b-c4a4aff1-b239-3fed'),
(97, 'E2', 615000.00, 'VENTA DE CASA EN HIDALGO COL LA MORENA SECC NORTE B', 168, 280, 3660.71, 2196.43, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-a2a2fafa2fd1-d807-af898082-aad9-4f0f'),
(98, 'E2', 610000.00, 'CASA ECONÓMICA EN TULANCINGO HIDALGO, NAPATECO', 105, 64, 5809.52, 9531.25, 7, 'Venta', 'Casa', 0, 2, 1, 0.00, 1.00, 0, 'Unidad Habitacional Napateco', '0', 'https://www.lamudi.com.mx//detalle/41032-73-1355894512b3-3724-3af4b310-ab6e-4973'),
(99, 'E2', 600000.00, 'VENTA DE CASA ECONOMICA EN RINCONES DE LA HACIENDA 2 RECAMARAS', 90, 90, 6666.67, 6666.67, 6, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Fracc Rincones de la Hacienda 2', '0', 'https://www.lamudi.com.mx//detalle/41032-73-d1d150531641-ef11-f4d193e9-abd5-1f92'),
(100, 'E2', 600000.00, 'VENTA DE CASA ECONOMICA  EN TULANCINGO', 90, 45, 6666.67, 13333.33, 16, 'Venta', 'Casa En Fraccionamiento', 1, 2, 1, 0.00, 1.00, 0, 'Huapalcalco', '0', 'https://www.lamudi.com.mx//detalle/41032-73-21abe171c97e-2093-c92cbaa9-bc94-3fd6'),
(101, 'E2', 600000.00, 'VENTA DE DEPARTAMENTO EN FRACCIONAMIENTO CHAVARRIA MINERAL DE LA REFORMA HIDALGO', 55, 55, 10909.09, 10909.09, 6, 'Venta', 'Departamento', 0, 2, 1, 0.00, 1.00, 0, 'Paseos de Chavarría', '0', 'https://www.lamudi.com.mx//detalle/41032-73-bcdf8c07fa61-ca10-f77861f6-8c3f-44f2'),
(102, 'E2', 600000.00, 'Casa en Rinconada la Morena, Tulancingo.', 168, 225, 3571.43, 2666.67, 7, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Rinconada La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-d3f0d839cbb4-6a95-daf40633-8d10-44d0'),
(103, 'E2', 600000.00, 'CASA EN VENTA GUADALUPE TULANCINGO HIDALGO MJH', 240, 185, 2500.00, 3243.24, 9, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Rancho Guadalupe', '0', 'https://www.lamudi.com.mx//detalle/41032-73-69c22f98a785-dd34-c7678403-9029-45a0'),
(104, 'E2', 600000.00, 'CASA EN VENTA - COL. LA MORENA, TULANCINGO', 180, 210, 3333.33, 2857.14, 11, 'Venta', 'Casa', 0, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-ec594c4bb147-7627-6e552390-86f7-4e50'),
(105, 'E2', 590000.00, 'VENTA DE CASA ECONOMICA AMPLIA EN TULANCINGO 2 RECAMARAS', 90, 50, 6555.56, 11800.00, 13, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Napateco', '0', 'https://www.lamudi.com.mx//detalle/41032-73-5bf156c15edf-3d02-80444c89-8277-1237'),
(106, 'E2', 590000.00, 'ENCONTRASTE TU CASA IDEAL EN TULANCINGO, HIDALGO', 266, 398, 2218.05, 1482.41, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-2113a4bc2ba2-70c7-e2060305-8d7f-4ee4'),
(107, 'E2', 589658.00, 'CASA EN NAPATECO TULANCINGO DE BRAVO HIDALGO RECUPERACIÓN HIPOTECARIA', 90, 60, 6551.76, 9827.63, 6, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Unidad Habitacional Napateco', '0', 'https://www.lamudi.com.mx//detalle/41032-73-2b3a900c01cd-e0f1-939a8188-bf77-451f'),
(108, 'E2', 580000.00, 'Casa en venta en Rinconada La Morena, Tulancingo Hidalgo. VPV', 160, 280, 3625.00, 2071.43, 7, 'Venta', 'Casa', 0, 4, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-823dbe357fb8-2f45-5ab98864-b5b7-4a16'),
(109, 'E2', 580000.00, 'Propiedad en venta en Vicente Guerrero,Hidalgo', 110, 110, 5272.73, 5272.73, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '0', 'https://www.lamudi.com.mx//detalle/41032-73-d399a434de05-8122-30e5a070-8076-4fa1'),
(110, 'E2', 580000.00, 'PRECIOSA CASA EN TULANCINGO HIDALGO OAHM', 150, 280, 3866.67, 2071.43, 9, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-31c0d0c8c869-3288-13762b7d-982b-4ede'),
(111, 'E2', 578000.00, 'BONITA CASA EN VENTA EN LA MORENA, TULANCINGO', 178, 178, 3247.19, 3247.19, 7, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-fbb2e5ddca9e-6caa-3dbace8f-9f6e-46b4'),
(112, 'E2', 578000.00, 'SE VENDE CASA EN TULANCINGO DE BRAVO', 230, 178, 2513.04, 3247.19, 6, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-68c6c2f82941-192d-99fcc3dc-bcc4-482c'),
(113, 'E2', 570000.00, 'HERMOSA Y AMPLIA CASA EN JARDINES DEL SUR TULANCINGO HIDALGO, SUPER PRECIO!!!', 225, 360, 2533.33, 1583.33, 7, 'Venta', 'Casa', 1, 4, 3, 0.00, 3.00, 0, 'Jardines del Sur', '0', 'https://www.lamudi.com.mx//detalle/41032-73-9a87f2e30aa8-b101-a994006c-990c-4cc8'),
(114, 'E2', 560000.00, 'VENTA DE CASA EN LA MORENA SECC. NORTE, TULANCINGO, HGO.', 120, 180, 4666.67, 3111.11, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-97b436767fac-98aa-784cc262-919d-5012'),
(115, 'E2', 560000.00, 'CASA EN VENTA/PACHUCA', 160, 300, 3500.00, 1866.67, 9, 'Venta', 'Casa', 0, 3, 2, 0.00, 2.00, 0, 'Rinconada La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-5d4420a4886c-7fbf-30efffe5-9871-4862'),
(116, 'E2', 560000.00, 'EXCELENTE CASA EN VENTA DE LAS FUENTES, LA MORENA TULANCINGO HIDALGO', 120, 180, 4666.67, 3111.11, 6, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-f4ce5f5b66e1-be0e-651e4e35-a374-4e5a'),
(117, 'E2', 560000.00, 'ES HORA DE REALIZAR TU SUEÑO Y ADQUIRIR ESTA HERMOSA CASA EN TULANCINGO HIDALGO', 114, 206, 4912.28, 2718.45, 8, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-f86cc0bfb87a-5642-7b90e0af-9609-458d'),
(118, 'E2', 550000.00, 'CASA EN VENTA VICENTE GUERRERO, TULANCINGO HIDALGO MJH', 125, 205, 4400.00, 2682.93, 9, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '0', 'https://www.lamudi.com.mx//detalle/41032-73-f2a6b856db06-fa8c-631f5c75-a8f9-4af2'),
(119, 'E2', 549000.00, 'KM CASA EN VENTA GUADALUPE TULANCINGO HIDALGO', 105, 100, 5228.57, 5490.00, 7, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Rancho Guadalupe', '0', 'https://www.lamudi.com.mx//detalle/41032-73-68a8b71f53a5-1476-4b5d6cab-919c-4d63'),
(120, 'E2', 525000.00, 'CASAS SOLAS ECONOMICAS 2 RECAMARAS MAS ALCOBA, PARA INFONAVIT E ISSFAM', 90, 52, 5833.33, 10096.15, 16, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Huapalcalco', '0', 'https://www.lamudi.com.mx//detalle/41032-73-d179f04ccd-a475-35c9e50f-a5a7-32a2'),
(121, 'E2', 525000.00, 'Casas Solas 2 RECAMARAS MAS ALCOBA Infonavit E Issfam 90 M2 De Terreno', 90, 90, 5833.33, 5833.33, 16, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Fracc Jardines del Paraíso', '0', 'https://www.lamudi.com.mx//detalle/41032-73-eaa93dd772fd-d395-61a87f1f-9342-38ac'),
(122, 'E2', 520000.00, 'DEPARTAMENTO EN VENTA, HACIENDA MARGARITA', 46, 46, 11304.35, 11304.35, 11, 'Venta', 'Departamento', 0, 2, 1, 0.00, 1.00, 0, 'Hacienda Margarita', '0', 'https://www.lamudi.com.mx//detalle/41032-73-6f660c8e0438-63f1-f2167e89-8dbf-1237'),
(123, 'E2', 520000.00, 'CASA EN VENTA TULANCINGO HIDALGO', 120, 240, 4333.33, 2166.67, 16, 'Venta', 'Casa', 1, 4, 2, 0.00, 2.00, 0, 'Lomas de Progreso', '0', 'https://www.lamudi.com.mx//detalle/41032-73-164b00fed1ad-5af1-9809fced-b47e-3231'),
(124, 'E2', 500000.00, '¡¡¡BONITA CASA EN TULANCINGO, HIDALGO!!! .SOC.', 165, 225, 3030.30, 2222.22, 9, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-d3c83135766a-5b1a-91985170-a46d-4208'),
(125, 'E1', 455000.00, 'VENTA DE CASA EN TULANCINGO', 100, 180, 4550.00, 2527.78, 6, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Jardines del Sur', '0', 'https://www.lamudi.com.mx//detalle/41032-73-ec6dc6be7b68-6fec-ab37b14c-8eb4-4fdb'),
(126, 'E1', 455000.00, 'VENTA DE CASA EN TULANCINGO HIDALGO', 115, 200, 3956.52, 2275.00, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Jardines del Sur', '0', 'https://www.lamudi.com.mx//detalle/41032-73-f01bb06c8253-8033-fab37d7d-a8c0-4a56'),
(127, 'E1', 430000.00, 'PRECIOSA Y GRANDE CASA EN VENTA EN SAUSE 201, RINCONADA LA MORENA, TULANCINGO, HIDALGO', 150, 280, 2866.67, 1535.71, 6, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '0', 'https://www.lamudi.com.mx//detalle/41032-73-9e685b4056d8-9461-15fe34a2-8a82-4aec'),
(128, 'E1', 420000.00, 'VENTA DE CASA EN HIDALGO', 48, 48, 8750.00, 8750.00, 6, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'Paseos de Chavarría', '0', 'https://www.lamudi.com.mx//detalle/41032-73-4b90462950f6-7ea2-36141a5b-81af-4f68'),
(129, 'E1', 420000.00, 'DEPARTAMENTOEN VENTA EN COLONIAPASEOS DE CHAVARRÍA', 41, 41, 10243.90, 10243.90, 6, 'Venta', 'Departamento', 0, 2, 1, 0.00, 1.00, 0, 'Paseos de Chavarría', '0', 'https://www.lamudi.com.mx//detalle/41032-73-f13a66d7bfb2-ecac-ac25235c-87a1-327c'),
(130, 'E1', 380000.00, 'REMATE DE CASA', 90, 55, 4222.22, 6909.09, 7, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Campo Alegre', '0', 'https://www.lamudi.com.mx//detalle/41032-73-f8c36a811f63-a384-bae522c3-aa85-4fec'),
(131, 'E1', 371800.00, 'CASA EN JALTEPEC FDC 289', 110, 110, 3380.00, 3380.00, 11, 'Venta', 'Casa', 0, 3, 1, 0.00, 1.00, 0, 'Jaltepec', '0', 'https://www.lamudi.com.mx//detalle/41032-73-1e3bf7eba878-e3aa-ea6e0254-8f3a-4167'),
(132, 'E1', 346040.00, 'HIDALGO VENTA DEPARTAMENTO PACHUCA CENTRO', 87, 87, 3977.47, 3977.47, 6, 'Venta', 'Departamento', 0, 2, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '0', 'https://www.lamudi.com.mx//detalle/41032-73-da318f46fbec-83d9-624afaf4-bfdd-3a91');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alfa_abril_2024_tulancingo`
--
ALTER TABLE `alfa_abril_2024_tulancingo`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
