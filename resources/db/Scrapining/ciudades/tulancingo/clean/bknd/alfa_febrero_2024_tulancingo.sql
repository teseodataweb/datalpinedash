-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2024 a las 04:39:14
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
-- Estructura de tabla para la tabla `alfa_febrero_2024_tulancingo`
--

CREATE TABLE `alfa_febrero_2024_tulancingo` (
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
-- Volcado de datos para la tabla `alfa_febrero_2024_tulancingo`
--

INSERT INTO `alfa_febrero_2024_tulancingo` (`id`, `Categoria`, `Precio`, `propiedad`, `metros_total`, `metros_construido`, `precio_m2_terreno`, `precio_m2_construido`, `tiempo_de_publicacion`, `Estado`, `Tipo`, `Estacionamientos`, `Recamaras`, `Banos`, `Medio_banos`, `Banos_Total`, `Seguridad`, `Colonia`, `CP`, `url`) VALUES
(1, 'E1', 346040.00, 'HIDALGO VENTA DEPARTAMENTO PACHUCA CENTRO', 87, 87, 3977.47, 3977.47, 21, 'Venta', 'Departamento', 2, 2, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '', 'https://www.lamudi.com.mx//detalle/41032-73-acfd49ad2640-95ff-1d035e3f-aa4b-3dc7'),
(2, 'E2', 515000.00, 'VENTA DE DEPARTAMENTO 1 NIVEL 2 RECAMARAS EN FRACCIONAMIENTO HACIENDA MARGARITA MUNICIPIO DE MINERAL DE LA REFORMA ESTADO DE HIDALGO.', 53, 53, 9716.98, 9716.98, 12, 'Venta', 'Departamento', 2, 2, 1, 0.00, 1.00, 0, 'Hacienda Margarita', '', 'https://www.lamudi.com.mx//detalle/41032-73-ce3df21cbab1-3793-84ddf002-81dd-4c7c'),
(3, 'E2', 520000.00, 'DEPARTAMENTO EN VENTA, HACIENDA MARGARITA', 46, 46, 11304.35, 11304.35, 11, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'Hacienda Margarita', '', 'https://www.lamudi.com.mx//detalle/41032-73-6f660c8e0438-63f1-f2167e89-8dbf-1237'),
(4, 'E2', 578000.00, 'BONITA CASA EN VENTA EN LA MORENA, TULANCINGO', 178, 178, 3247.19, 3247.19, 7, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-fbb2e5ddca9e-6caa-3dbace8f-9f6e-46b4'),
(5, 'E2', 578000.00, 'LA CASA DE TUS SUEÑOS', 178, 178, 3247.19, 3247.19, 7, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-5ba6e323a427-e36e-5423bad5-a633-46af'),
(6, 'E2', 620000.00, 'Departamentos nuevos y económicos en Tulancingo', 60, 60, 10333.33, 10333.33, 16, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'Nuevo Tulancingo', '', 'https://www.lamudi.com.mx//detalle/41032-73-2bd215798759-6b9b-c4a4aff1-b239-3fed'),
(7, 'E2', 620000.00, 'Departamentos nuevos y económicos en Tulancingo', 60, 60, 10333.33, 10333.33, 16, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'Nuevo Tulancingo', '', 'https://www.lamudi.com.mx//detalle/41032-73-2bd215798759-6b9b-c4a4aff1-b239-3fed'),
(8, 'E2', 672537.00, 'departamento en pachuca hidalgo', 87, 87, 7730.31, 7730.31, 10, 'Venta', 'Departamento', 2, 3, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '', 'https://www.lamudi.com.mx//detalle/41032-73-d3672c2d29c3-6d25-2497eec9-9e48-49aa'),
(9, '', 750000.00, 'VENTA DE DEPARTAMENTO CENTRICO EN PACHUCA', 82, 82, 9146.34, 9146.34, 15, 'Venta', 'Departamento', 1, 1, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '', 'https://www.lamudi.com.mx//detalle/41032-73-ed1b3df977d0-f0af-e096e2ae-b253-4d63'),
(10, 'E3', 950000.00, '¡Compra Gran Oportunidad! ¡Iluminada Casa Adjudicada!  ¡Cesión Inmediata Ante Notario, Recuperación Bancaria! CS/FJCO', 140, 140, 6785.71, 6785.71, 9, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'El Mirador', '', 'https://www.lamudi.com.mx//detalle/41032-73-b4c836456869-6b00-52d6e119-9cc6-4bc5'),
(11, 'E3', 960000.00, 'EXCELENTES DEPARTAMENTOS EN VENTA EN PASEOS DE LAS REYNAS', 85, 85, 11294.12, 11294.12, 16, 'Venta', 'Condominio Horizontal', 1, 2, 2, 0.00, 2.00, 0, 'Villas del Álamo', '', 'https://www.lamudi.com.mx//detalle/41032-73-8b15ebe4fddf-dad2-61ceb51-916d-337d'),
(12, 'E3', 980000.00, 'Venta de departamentos ejecutivos, 2 recámaras y 2 baños.', 82, 82, 11951.22, 11951.22, 16, 'Venta', 'Departamento', 2, 2, 2, 0.00, 2.00, 0, 'Fracc Paseo de las Reynas V', '', 'https://www.lamudi.com.mx//detalle/41032-73-e0684482854-c985-672238f7-bb61-3806'),
(13, 'D1', 1249000.00, 'Oportunidad de Departamento Céntrico en Venta Pachuca', 95, 95, 13147.37, 13147.37, 12, 'Venta', 'Departamento', 2, 3, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '', 'https://www.lamudi.com.mx//detalle/41032-73-ea07d4568a9f-872f-dff1181e-98fe-4d9e'),
(14, '', 1250000.00, 'DEPARTAMENTO EN VENTA CENTRO, PACHUCA DE SOTO, HGO', 90, 90, 13888.89, 13888.89, 12, 'Venta', 'Departamento', 2, 3, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '', 'https://www.lamudi.com.mx//detalle/41032-73-6f63a7321a1c-6556-574575e1-8ff1-4797'),
(15, 'D2', 1300000.00, 'CASA EN VENTA EN FRACCIONAMIENTO CHAVARRIA', 120, 120, 10833.33, 10833.33, 16, 'Venta', 'Departamento', 2, 2, 2, 0.00, 2.00, 0, 'Pachuca de Soto', '', 'https://www.lamudi.com.mx//detalle/41032-73-15e65e0d1f97-583f-70126887-8cef-3701'),
(16, 'D3', 1523793.00, 'Departamento en venta Portezuelos', 80, 80, 19047.41, 19047.41, 16, 'Venta', 'Condominio Horizontal', 2, 2, 1, 0.00, 1.00, 0, 'Villas del Álamo', '', 'https://www.lamudi.com.mx//detalle/41032-73-14be0c0d503c-8e25-10a3f736-9105-31ce'),
(17, '', 2500000.00, 'DEPARTAMENTO EN VENTA EN ZONA CENTRO DE PACHUCA', 120, 120, 20833.33, 20833.33, 7, 'Venta', 'Departamento', 2, 2, 1, 0.00, 1.00, 0, 'Pachuca de Soto Centro', '', 'https://www.lamudi.com.mx//detalle/41032-73-6cc9bdce2080-a85e-2225fd77-bf00-4f1c'),
(18, 'B2', 2850000.00, 'BONITO DEPARTAMENTO EN  COL LA PAZ', 95, 95, 30000.00, 30000.00, 8, 'Venta', 'Departamento', 2, 2, 2, 0.00, 2.00, 0, 'El Mirador', '', 'https://www.lamudi.com.mx//detalle/41032-73-bc695da05ccc-338f-3cc449db-a987-4df0'),
(19, 'S1', 4500000.00, 'Se vende casa en Tulancingo, Fraccionamiento San Francisco Huatengo.', 200, 287, 22500.00, 15679.44, 8, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'La Quinta', '', 'https://www.lamudi.com.mx//detalle/41032-73-cfbd09274c36-b108-c2a1f4e9-ad07-1237'),
(20, 'E1', 400000.00, 'Departamento en Venta en Hacienda de la Capilla', 34, 34, 11764.71, 11764.71, 7, 'Venta', 'Departamento', 2, 2, 1, 0.00, 1.00, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx//detalle/41032-73-6dce5be52bab-9843-16136009-be37-330d'),
(21, 'E1', 450000.00, 'Departamento en Venta', 44, 44, 10227.27, 10227.27, 7, 'Venta', 'Departamento', 2, 2, 1, 0.00, 1.00, 0, 'Hacienda Margarita', '', 'https://www.lamudi.com.mx//detalle/41032-73-2e6fd00f3c8b-4f0d-2986b70e-863e-34f9'),
(22, 'E1', 499550.00, 'Venta de Casa Mineral de la Reforma Hidalgo', 49, 49, 10194.90, 10194.90, 7, 'Venta', 'Departamento', 2, 2, 1, 0.00, 1.00, 0, 'Villa Elena', '', 'https://www.lamudi.com.mx//detalle/41032-73-6bfdfc9ed0b5-be45-99d74216-a3ec-3589'),
(23, 'E2', 575000.00, 'SE VENDE DEPARTAMENTO EN COL. PRI CHACON EN PACHUCA, HGO.', 60, 60, 9583.33, 9583.33, 11, 'Venta', 'Departamento', 1, 3, 1, 0.00, 1.00, 0, 'Sahop Chacón', '', 'https://www.lamudi.com.mx//detalle/41032-73-fd5426cc2384-79cc-d2d72ff0-84c4-3b84'),
(24, 'D1', 1195000.00, 'CASA NUEVA EN VENTA FRACC. RANCHO NUEVO, TULANCINGO', 70, 70, 17071.43, 17071.43, 16, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'Valle Verde', '', 'https://www.lamudi.com.mx//detalle/41032-73-c3f7c41aef02-2fcf-be192fd5-ab4c-3eca'),
(25, 'E3', 812000.00, 'Casa en venta Tulancingo a 5 minutos de Plaza Patio', 72, 58, 11277.78, 14000.00, 16, 'Venta', 'Casa En Fraccionamiento', 1, 2, 1, 0.00, 1.00, 0, 'Villa Sol', '', 'https://www.lamudi.com.mx//detalle/41032-73-a3dff86c0cda-487c-b98f7f6b-aec2-3bfe'),
(26, 'E3', 843000.00, 'Casa en venta Tulancingo Hidalgo', 72, 61, 11708.33, 13819.67, 16, 'Venta', 'Casa En Fraccionamiento', 1, 2, 1, 0.00, 1.00, 0, 'Villa Sol', '', 'https://www.lamudi.com.mx//detalle/41032-73-55eb54793d25-880b-e2df7533-933e-3cf2'),
(27, 'E3', 920000.00, 'Casa en venta Tulancingo Hidalgo', 72, 66, 12777.78, 13939.39, 16, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'Valle Verde', '', 'https://www.lamudi.com.mx//detalle/41032-73-6756a15193a6-bc40-86d16cf5-862d-3197'),
(28, 'E3', 984000.00, 'Casa en venta con 3 recámaras en Tulancingo', 72, 67, 13666.67, 14686.57, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 2, 0.00, 2.00, 0, 'Villa Sol', '', 'https://www.lamudi.com.mx//detalle/41032-73-a533d1c6b1d4-b82f-b4e9c29b-9bda-3798'),
(29, 'D1', 1070000.00, 'Casa en venta con 3 recámaras en  Tulancingo', 72, 81, 14861.11, 13209.88, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 2, 0.00, 2.00, 0, 'Villa Sol', '', 'https://www.lamudi.com.mx//detalle/41032-73-96ac604bba20-635d-4730664-89a4-3be2'),
(30, 'D2', 1401200.00, 'VENTA DE CASA EN TULANCINGO, COL. LOMAS DEL PROGRESO.', 75, 130, 18682.67, 10778.46, 9, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Lomas de Progreso', '', 'https://www.lamudi.com.mx//detalle/41032-73-2c8b4ab2c93e-762a-c085138d-a04b-4ac1'),
(31, 'D1', 1060000.00, 'VENTA DE CASA DE LUJO 3 RECAMARAS EN TULANCINGO', 80, 120, 13250.00, 8833.33, 14, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Medias Tierras', '', 'https://www.lamudi.com.mx//detalle/41032-73-89ca4ee22d25-18f8-67cdfbc9-994b-1237'),
(32, 'C1', 1890000.00, 'CASA EN TULANCINGO A 45 MIN DE LA CIUDAD DE MEXICO', 80, 140, 23625.00, 13500.00, 16, 'Venta', 'Casa', 1, 2, 2, 0.00, 2.00, 0, 'Conjunto Habitacional Los Mesones', '', 'https://www.lamudi.com.mx//detalle/41032-73-252d3fdc1b9d-6034-cb024130-8ca5-3fa2'),
(33, 'D3', 1712133.00, 'Departamento residencial de preventa en Mineral de la Reforma Hgo.', 82, 82, 20879.67, 20879.67, 21, 'Venta', 'Departamento', 2, 2, 1, 0.00, 1.00, 0, 'Mineral de la Reforma', '', 'https://www.lamudi.com.mx//detalle/41032-73-26b7b429c361-c148-d94730b0-ad64-355c'),
(34, 'E2', 525000.00, 'Casas Solas 2 RECAMARAS MAS ALCOBA Infonavit E Issfam 90 M2 De Terreno', 90, 90, 5833.33, 5833.33, 16, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Fracc Jardines del Paraíso', '', 'https://www.lamudi.com.mx//detalle/41032-73-eaa93dd772fd-d395-61a87f1f-9342-38ac'),
(35, 'E2', 525000.00, 'CASAS SOLAS ECONOMICAS 2 RECAMARAS MAS ALCOBA, PARA INFONAVIT E ISSFAM', 90, 52, 5833.33, 10096.15, 16, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Huapalcalco', '', 'https://www.lamudi.com.mx//detalle/41032-73-d179f04ccd-a475-35c9e50f-a5a7-32a2'),
(36, 'E2', 549000.00, 'AF13838 Imperdible RECUPERACION HIPOTECARIA en Tulancingo', 90, 60, 6100.00, 9150.00, 9, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Guadalupe', '', 'https://www.lamudi.com.mx//detalle/41032-73-1a38b2af0b83-71e0-fb6eccb-b6ae-4de4'),
(37, 'E2', 590000.00, 'VENTA DE CASA ECONOMICA AMPLIA EN TULANCINGO 2 RECAMARAS', 90, 50, 6555.56, 11800.00, 13, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Napateco', '', 'https://www.lamudi.com.mx//detalle/41032-73-5bf156c15edf-3d02-80444c89-8277-1237'),
(38, 'E2', 590000.00, 'VENTA DE CASA ECONOMICA  EN TULANCINGO', 90, 45, 6555.56, 13111.11, 16, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'Huapalcalco', '', 'https://www.lamudi.com.mx//detalle/41032-73-21abe171c97e-2093-c92cbaa9-bc94-3fd6'),
(39, 'E2', 680000.00, 'VENTA DE CASA EN RINCONES DE LA HACIENDA TULANCINGO 2 RECAMARAS', 90, 45, 7555.56, 15111.11, 16, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '', 'https://www.lamudi.com.mx//detalle/41032-73-f9d970bddc18-9bf4-b210e72-9009-385f'),
(40, 'E2', 665000.00, 'Casas económicas en Privada, Napateco Tulancingo Hgo.', 91, 53, 7307.69, 12547.17, 12, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Unidad Habitacional Napateco', '', 'https://www.lamudi.com.mx//detalle/41032-73-61c2eecd4e32-58e5-84cdbd52-9055-4de0'),
(41, 'C1', 1964872.00, 'Casa en venta en Residencial. Almicar, Tulancingo de Bravo ¡Compra esta propiedad mediante Cesión de Derechos e incrementa tu patrimonio! ¡Contáctame, te digo cómo hacerlo!', 92, 140, 21357.30, 14034.80, 9, 'Venta', 'Casa En Condominio', 2, 3, 1, 0.00, 1.00, 0, 'Tollancingo', '', 'https://www.lamudi.com.mx//detalle/41032-73-526a378a978c-5d9a-b257c431-9517-4c07'),
(42, '', 2000000.00, 'CASAS EN MEDIAS TIERRAS, TULANCINGO DE BRAVO HIDALGO', 92, 182, 21739.13, 10989.01, 14, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Medias Tierras', '', 'https://www.lamudi.com.mx//detalle/41032-73-af54d1fd6cd2-f433-d11bc63-b17f-409e'),
(43, 'E2', 690129.00, 'HERMOSA CASA VICENTE GUERRERO TULANCINGO HIDALGO !!!', 100, 95, 6901.29, 7264.52, 15, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-8b6085305da-3498-9b6434d4-a765-4727'),
(44, '', 1250000.00, 'VENTA DE CASA ECONÓMICA EN FRACCIONAMIENTO PRIVADO EN TULANCINGO 3 RECAMARAS', 100, 125, 12500.00, 10000.00, 16, 'Venta', 'Casa En Fraccionamiento', 2, 3, 2, 0.00, 2.00, 0, 'San Nicolás El Chico', '', 'https://www.lamudi.com.mx//detalle/41032-73-bfa7f15b7f9c-b68e-b93b6c46-8fb7-313c'),
(45, 'D2', 1353670.00, 'Casa en venta en Fraccionamiento Jardines del Sur, Tulancingo de Bravo, Hidalgo ¡Compra esta propiedad mediante Cesión de Derechos e incrementa tu patrimonio! ¡Contáctame, te digo cómo hacerlo!', 100, 154, 13536.70, 8790.06, 9, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Jardines del Sur', '', 'https://www.lamudi.com.mx//detalle/41032-73-91ed8d8442cf-782b-8eb2c9a9-b50d-404b'),
(46, 'E2', 610000.00, 'CASA ECONÓMICA EN TULANCINGO HIDALGO, NAPATECO', 105, 64, 5809.52, 9531.25, 7, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Unidad Habitacional Napateco', '', 'https://www.lamudi.com.mx//detalle/41032-73-1355894512b3-3724-3af4b310-ab6e-4973'),
(47, 'E3', 832840.00, 'CASA EN EXELENTE ZONA EN TULANCINGO HIDALGO, ENTREGA INMEDIATA', 105, 62, 7931.81, 13432.90, 8, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Campo Alegre', '', 'https://www.lamudi.com.mx//detalle/41032-73-f4b29c07525a-e110-dc427fc6-bf38-47db'),
(48, 'E3', 980000.00, 'CASA NUEVA EN PRIVADA SAN DANIEL, TULANCINGO HIDALGO', 105, 62, 9333.33, 15806.45, 16, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Conjunto Habitacional Los Mesones', '', 'https://www.lamudi.com.mx//detalle/41032-73-e1e9f2183ac5-7f02-5ba171a0-bd32-34c5'),
(49, 'E3', 985000.00, 'CASA DE 1 NIVEL EN FRACC. VILLAS SANTA MARIA, TULANCINGO HIDALGO', 105, 76, 9380.95, 12960.53, 16, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'Ampliación Javier Rojo Gómez', '', 'https://www.lamudi.com.mx//detalle/41032-73-7ce59ea81ac0-ba8f-53ce538d-9349-3d2f'),
(50, 'D1', 1055000.00, 'VENTA DE CASA 3 RECAMARAS EN TULANCINGO HIDALGO', 105, 102, 10047.62, 10343.14, 16, 'Venta', 'Casa En Fraccionamiento', 2, 3, 2, 0.00, 2.00, 0, 'Tulancingo de Bravo Centro', '', 'https://www.lamudi.com.mx//detalle/41032-73-855a866a4c28-80e9-6b217a01-90e4-3abf'),
(51, 'D1', 1080000.00, 'Casa con opción de crecimiento en Villas Santa María, Tulancingo Hgo.', 105, 73, 10285.71, 14794.52, 9, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Ampliación Javier Rojo Gómez', '', 'https://www.lamudi.com.mx//detalle/41032-73-148a066ebd7c-a22f-24777fa3-acc5-46bd'),
(52, 'D1', 1180000.00, 'CASA EN FRACCIONAMIENTO CERRADO, CIMA DORADA TULANCINGO', 105, 77, 11238.10, 15324.68, 9, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'San José Caltengo', '', 'https://www.lamudi.com.mx//detalle/41032-73-60f9fc9ca4df-8fdf-6c7094aa-a826-4471'),
(53, '', 1250000.00, 'Casa con jardín interior en el Fracc. Toledo, San José, Tulancingo', 105, 90, 11904.76, 13888.89, 16, 'Venta', 'Casa En Fraccionamiento', 2, 3, 2, 0.00, 2.00, 0, 'Ampliación Rojo Gómez', '', 'https://www.lamudi.com.mx//detalle/41032-73-1fde40d80016-b663-e0aa9bc5-adc2-3ab3'),
(54, '', 1750000.00, '🏘️CASA EN VENTA DOS PLATAS COL. MEDIAS TIERRAS, TULANCINGO HGO 🏘️', 105, 200, 16666.67, 8750.00, 13, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Medias Tierras', '', 'https://www.lamudi.com.mx//detalle/41032-73-e9f07361f1d5-61e6-e8fe834e-ad69-4a81'),
(55, '', 1750000.00, 'VENTA DE CASA DE LUJO  EN MEDIAS TIERRAS TULANCINGO DE 3 RECAMARAS', 105, 199, 16666.67, 8793.97, 13, 'Venta', 'Casa En Fraccionamiento', 2, 3, 2, 0.00, 2.00, 0, 'Medias Tierras', '', 'https://www.lamudi.com.mx//detalle/41032-73-83ec23a5ee00-2e13-5e6c17d9-bb7c-1237'),
(56, 'C2', 2159000.00, 'ALMICAR RESIDENCIAL CASA VENTA TULANCINGO HIDALGO', 105, 220, 20561.90, 9813.64, 8, 'Venta', 'Casa', 2, 6, 1, 0.00, 1.00, 0, 'La Herradura', '', 'https://www.lamudi.com.mx//detalle/41032-73-60e84bf363a9-7428-752d4dc9-bdcf-3afb'),
(57, 'E2', 625000.00, 'CASA EN VENTA EN HORTENCIA PROLONGACION CLAVEL #108 PACHUCA DE SOTO HIDALGO', 108, 280, 5787.04, 2232.14, 8, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-f6c5bcc613dc-841-7ae6fd60-8604-4093'),
(58, 'E2', 580000.00, 'Venta de Casa en Calle Hermenegildo Galeana, Vicente Guerrero, Tulancingo Hgo.', 110, 110, 5272.73, 5272.73, 8, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-44972f917dc8-10c5-fedd5272-86ad-47c5'),
(59, 'E2', 580000.00, 'EXCELENTE PROYECTO DE INVERSION EN TULANCINGO,HDGO', 110, 110, 5272.73, 5272.73, 8, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-f2077bf62088-bfb9-ec56b064-a3e1-4daf'),
(60, 'E2', 580000.00, 'Hermosa Casa en Tulancingo De Bravo Hgo.', 110, 100, 5272.73, 5800.00, 8, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-c20cebd3f7e5-2136-5615ab32-a4df-49aa'),
(61, 'E2', 580000.00, 'Linda casa en Tulancingo de Bravo, Hidalgo.', 110, 110, 5272.73, 5272.73, 7, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-116591b50373-926b-4d333901-b9be-4605'),
(62, 'E2', 580000.00, '¡LA JOYA QUE HAS BUSCADO ESTÁ AQUÍ! 🏡✨  Dirección: Calle Hermenegildo Galeana , Vicente Guerrero, Tulancingo de Bravo, Hidalgo', 110, 110, 5272.73, 5272.73, 8, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-fb42e32ef092-e597-7ee2a10a-bfc5-4904'),
(63, 'E2', 580000.00, 'CASA HERMENEGILDO', 110, 110, 5272.73, 5272.73, 7, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-89f9c11193a8-cb87-43c79e8b-9e23-4a04'),
(64, 'E2', 580000.00, 'Venta de Casa en Calle Hermenegildo Galeana, Vicente Guerrero, Tulancingo Hgo.', 110, 110, 5272.73, 5272.73, 7, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-d94d7213265b-e27d-b1980469-99d8-4599'),
(65, 'E2', 580000.00, '“Venta de Casa en Tulancingo Hidalgo “', 110, 110, 5272.73, 5272.73, 10, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-7fba58593516-84f5-7c788ae9-a58e-1237'),
(66, 'E2', 580000.00, 'NO ACEPTAMOS CREDITOS CASA EN VENTA EN Calle Hermenegildo Galeana, Vicente Guerrero, Tulancingo, Estado de Hidalgo, México   NO ACEPTAMOS CREDITO', 110, 110, 5272.73, 5272.73, 8, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-bda35dfb0898-dc89-a351899f-b8b9-4442'),
(67, 'E2', 610000.00, 'CASA EN CAMPO ALEGRE TULANCINGO DE BRAVO HIDALGO', 110, 55, 5545.45, 11090.91, 9, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'Campo Alegre', '', 'https://www.lamudi.com.mx//detalle/41032-73-d323a090e324-4a6d-da8eb707-ae2f-4e03'),
(68, 'E3', 980000.00, 'Inmueble adjudicado en Tulancingo, Hidalgo', 110, 110, 8909.09, 8909.09, 8, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-c1f29b7f102f-3101-c4a42d6b-b2d3-4e63'),
(69, 'B1', 2650000.00, 'Se venden departamentos en el Centro de Pachuca', 110, 110, 24090.91, 24090.91, 18, 'Venta', 'Departamento', 2, 2, 3, 0.00, 3.00, 0, 'Barrio La Palma', '', 'https://www.lamudi.com.mx//detalle/41032-73-92c670518508-1ca-cadf88b8-91f2-3ee3'),
(70, 'E2', 560000.00, 'ES HORA DE REALIZAR TU SUEÑO Y ADQUIRIR ESTA HERMOSA CASA EN TULANCINGO HIDALGO', 114, 206, 4912.28, 2718.45, 8, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-f86cc0bfb87a-5642-7b90e0af-9609-458d'),
(71, 'E3', 790000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO EN HIDALGO', 114, 206, 6929.82, 3834.95, 7, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Rinconada La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-44b779327a0e-bcba-a8c7fb04-a455-46ab'),
(72, 'E3', 790000.00, 'C. SAUCE 201 FRACC RINCONADA LA MORENA TULANCINGO HIDALGO', 114, 206, 6929.82, 3834.95, 8, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Rinconada La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-c604e74a5b43-e89-24d050bb-b6fd-4663'),
(73, 'E3', 790000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO HILDAGO DE LA COLONIA FRACC RINCONADA LA MORENA', 114, 206, 6929.82, 3834.95, 8, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-1c6a9fd4f68-3872-d3ed76c2-a217-4800'),
(74, 'E3', 790000.00, 'VENTA DE CASA EN EL FRACC. RINCONADA DE LA MORENA TULANCINGO DE BRAVO, HIDALGO', 114, 206, 6929.82, 3834.95, 9, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Bella Vista', '', 'https://www.lamudi.com.mx//detalle/41032-73-5a60c5e832da-678e-1d5ef10-bc7c-4e05'),
(75, 'E3', 790000.00, 'VENTA DE CASA EN HIDALGO TULANCINGO DE HIDALGO FRACC RINCONADA  LA MORENA', 114, 206, 6929.82, 3834.95, 15, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Los Sabinos', '', 'https://www.lamudi.com.mx//detalle/41032-73-e8698d24e755-52e3-ea247137-b776-4c8e'),
(76, 'D2', 1266000.00, 'CASA EN VENTA HIDALGO', 115, 176, 11008.70, 7193.18, 13, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-b50831813d1a-d731-4d18cefe-8427-4ae1'),
(77, 'E3', 910000.00, 'VENTA DE CASA ECONOMICA EN ESQUINA CENTRICA EN TULANCINGO', 117, 68, 7777.78, 13382.35, 16, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'San José Caltengo', '', 'https://www.lamudi.com.mx//detalle/41032-73-2ef07880d696-34fd-5a75c0b-b64a-3099'),
(78, 'E3', 799000.00, 'PROPIEDAD EN OPORTUNIDAD EN COL. NUEVO TULANCINGO', 119, 200, 6714.29, 3995.00, 10, 'Venta', 'Casa', 2, 1, 1, 0.00, 1.00, 0, 'Nuevo Tulancingo', '', 'https://www.lamudi.com.mx//detalle/41032-73-5b3bf28010f3-ec-c8c89156-bfdd-41ea'),
(79, 'E2', 520000.00, 'CASA EN VENTA TULANCINGO HIDALGO', 120, 240, 4333.33, 2166.67, 16, 'Venta', 'Casa', 2, 4, 2, 0.00, 2.00, 0, 'Lomas de Progreso', '', 'https://www.lamudi.com.mx//detalle/41032-73-164b00fed1ad-5af1-9809fced-b47e-3231'),
(80, 'D2', 1290000.00, 'Casa en Col. 20 de noviembre, Tulancingo de Bravo, Hidalgo', 120, 190, 10750.00, 6789.47, 9, 'Venta', 'Casa', 1, 4, 3, 0.00, 3.00, 0, '20 de Noviembre', '', 'https://www.lamudi.com.mx//detalle/41032-73-a1cf0b934e6e-30bf-1313e532-9cf5-40e4'),
(81, 'B2', 2900000.00, 'Una casa perfectamente diseñada en la mejor ubicación de Tulancingo, La Morena', 120, 154, 24166.67, 18831.17, 10, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Conjunto Habitacional Los Mesones', '', 'https://www.lamudi.com.mx//detalle/41032-73-f1d9f7d3a1ab-c9e6-ef7f900e-b973-4d71'),
(82, 'B2', 2900000.00, 'Casa de 3 recámaras en Privada Riva Palacio, La Morena Tulancingo Hgo', 120, 150, 24166.67, 19333.33, 10, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-bfb49856282a-e531-99e14565-8dd0-47ce'),
(83, 'E2', 550000.00, 'CASA EN VENTA VICENTE GUERRERO, TULANCINGO HIDALGO MJH', 125, 205, 4400.00, 2682.93, 9, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-f2a6b856db06-fa8c-631f5c75-a8f9-4af2'),
(84, 'C1', 1930000.00, 'CASA EN VENTA EN PRIVADA VICTORIA, EN MEDIAS TIERRAS, TULANCINGO', 125, 144, 15440.00, 13402.78, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 2, 0.00, 2.00, 0, 'Medias Tierras', '', 'https://www.lamudi.com.mx//detalle/41032-73-8251aff19fca-ef3-5d8fb87-b771-3968'),
(85, 'E3', 895000.00, 'Casa en Venta Col. Lomas del Progreso, Tulancingo, Hidalgo', 129, 260, 6937.98, 3442.31, 9, 'Venta', 'Casa', 2, 3, 3, 0.00, 3.00, 0, 'Lomas de Progreso', '', 'https://www.lamudi.com.mx//detalle/41032-73-1317b748069a-fb8e-bd5e2fcc-a682-4496'),
(86, 'E3', 799000.00, 'Casa con terreno excedente, Col La ponderosa, Tulancingo Hidalgo', 133, 55, 6007.52, 14527.27, 9, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '', 'https://www.lamudi.com.mx//detalle/41032-73-2245174a23f8-5100-c8300c89-ad9c-408c'),
(87, 'E3', 771000.00, 'HERMOSA CASA EN VENTA UBICADA EN LA JOYA, PUEBLA..', 140, 168, 5507.14, 4589.29, 8, 'Venta', 'Casa', 2, 4, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-5686ca75c36-b432-5931ece9-84c8-1237'),
(88, 'E3', 835000.00, 'Casa en Venta Col. La Morena, Tulancingo de Bravo, Hidalgo', 140, 140, 5964.29, 5964.29, 13, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-e34bd5879d4-99d7-c5e49891-8b18-4050'),
(89, 'E2', 580000.00, 'PRECIOSA CASA EN TULANCINGO HIDALGO OAHM', 150, 280, 3866.67, 2071.43, 9, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-31c0d0c8c869-3288-13762b7d-982b-4ede'),
(90, '', 750000.00, 'CASA EN VENTA - COL. RINCONADA LA MORENA, TULANCINGO', 150, 180, 5000.00, 4166.67, 11, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-1d94401d58d6-9c4d-e8ea114e-a7db-42c1'),
(91, 'C2', 2200000.00, 'EXCLUSIVO FRACC. PEDREGAL DE SAN FRANCISCO TULANCINGO HGO.', 150, 159, 14666.67, 13836.48, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '', 'https://www.lamudi.com.mx//detalle/41032-73-449e66261448-8b10-e2cde429-9902-33e5'),
(92, 'A1', 3300000.00, 'VENTA DE CASA RESIDENCIAL EN TULANCINGO DE BRAVO. HIDALGO', 150, 206, 22000.00, 16019.42, 12, 'Venta', 'Casa En Condominio', 2, 3, 2, 0.00, 2.00, 0, 'Tulancingo de Bravo', '', 'https://www.lamudi.com.mx//detalle/41032-73-51c5e20ec0a-808e-3d829e33-a871-4aca'),
(93, 'E2', 625000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO EN HIDALGO', 156, 280, 4006.41, 2232.14, 7, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-c9db711ba8b9-e613-86cfbc2e-97cc-47fa'),
(94, 'E2', 625000.00, 'HORTENCIA PROL. CLAVEL #108 LA MORENA SECC NTE B TULANCINGO DE BRAVO, HIDALGO', 156, 280, 4006.41, 2232.14, 8, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-411a18d207c1-ce0b-7c8885ca-8442-46f5'),
(95, 'E2', 625000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO HILDAGO DE LA COLONIA LA MORENA', 156, 280, 4006.41, 2232.14, 8, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-fecb761aa60e-fe39-c1e902d5-a969-4211'),
(96, 'E2', 625000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO, HIDALGO, COLONIA LA MORENA', 156, 280, 4006.41, 2232.14, 10, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-49a72ba8f921-acd1-e2802dd4-a885-405f'),
(97, '', 2250000.00, 'Casa en Venta en Calle Tule,El Mirador .24-18', 156, 156, 14423.08, 14423.08, 9, 'Venta', 'Departamento', 2, 3, 3, 0.00, 3.00, 0, 'Veneto', '', 'https://www.lamudi.com.mx//detalle/41032-73-6fe62d74a2f3-497-ee562539-8311-3473'),
(98, '', 2250000.00, 'Casa en Venta en Calle Tule,El Mirador CV 24-18', 156, 156, 14423.08, 14423.08, 9, 'Venta', 'Departamento', 2, 3, 3, 0.00, 3.00, 0, 'Veneto', '', 'https://www.lamudi.com.mx//detalle/41032-73-9cf11e260f3b-ab21-929cf783-9525-359a'),
(99, '', 2250000.00, 'Casa en Venta en Zempoala,El Mirador 24-18 AA', 156, 156, 14423.08, 14423.08, 9, 'Venta', 'Departamento', 2, 3, 3, 0.00, 3.00, 0, 'Veneto', '', 'https://www.lamudi.com.mx//detalle/41032-73-17123abd82c1-5b7-7287fe47-937f-3aab'),
(100, '', 2250000.00, 'Casa en Venta en Zempoala,El Mirador MG 24-18.', 156, 156, 14423.08, 14423.08, 8, 'Venta', 'Departamento', 2, 3, 3, 0.00, 3.00, 0, 'Veneto', '', 'https://www.lamudi.com.mx//detalle/41032-73-c939ae4d699f-ba5e-45716fd9-8ed3-3a64'),
(101, '', 2250000.00, 'Casa en Venta en Calle Tule,El Mirador  MG24-18', 156, 156, 14423.08, 14423.08, 8, 'Venta', 'Departamento', 2, 3, 3, 0.00, 3.00, 0, 'Veneto', '', 'https://www.lamudi.com.mx//detalle/41032-73-79248c5b9d25-9f25-12570bd4-8ed0-3cb6'),
(102, 'C3', 2250003.00, 'Casa en Venta en Zempoala,El Mirador RT 24-18.', 156, 156, 14423.10, 14423.10, 9, 'Venta', 'Departamento', 2, 3, 3, 0.00, 3.00, 0, 'Veneto', '', 'https://www.lamudi.com.mx//detalle/41032-73-24dc1681355b-f89f-99dce9d6-af5a-4004'),
(103, 'C3', 2250009.00, 'Casa en Venta en Zempoala,El Mirador MURC 24-18.', 156, 156, 14423.13, 14423.13, 9, 'Venta', 'Departamento', 2, 3, 3, 0.00, 3.00, 0, 'Veneto', '', 'https://www.lamudi.com.mx//detalle/41032-73-2b8c777dc899-23ad-d1cc969-ab73-3c7e'),
(104, 'E2', 560000.00, 'CASA EN VENTA/PACHUCA', 160, 300, 3500.00, 1866.67, 9, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Rinconada La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-5d4420a4886c-7fbf-30efffe5-9871-4862'),
(105, 'E2', 580000.00, 'Casa en venta en Rinconada La Morena, Tulancingo Hidalgo. VPV', 160, 280, 3625.00, 2071.43, 7, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-823dbe357fb8-2f45-5ab98864-b5b7-4a16'),
(106, 'E2', 580000.00, 'Bonita Casa En Una Exelente Ubicacion Calle Sauce # 201 rinconada la morena Tulancingo Hidalgo   GSN', 160, 280, 3625.00, 2071.43, 7, 'Venta', 'Casa', 2, 5, 4, 0.00, 4.00, 0, 'Rinconada La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-53ec6298fb45-9aed-ef547d8c-9579-4c01'),
(107, 'E2', 620000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO, HIDALGO.', 160, 330, 3875.00, 1878.79, 8, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-a20b445f146b-4ae9-aa7a4fa8-a07e-4cb2'),
(108, 'E3', 809000.00, 'VENGTA DE CASA CON SEGURIDAD 24 /7 EN HIDALGO', 160, 160, 5056.25, 5056.25, 7, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '', 'https://www.lamudi.com.mx//detalle/41032-73-9cea3ad3e95a-551-de348efc-adbc-40fa'),
(109, '', 3750000.00, 'CASA DE 1 NIVEL EN LA MORENA, TULANCINGO', 160, 240, 23437.50, 15625.00, 16, 'Venta', 'Casa', 2, 4, 4, 0.00, 4.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-5b029fa4b8c7-f083-3a6060f6-9bd2-39bf'),
(110, 'S1', 4300000.00, 'Casa en Venta, Col. La Morena. Tulancingo. Pachuca.', 160, 240, 26875.00, 17916.67, 12, 'Venta', 'Casa', 2, 5, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-76d564d8c2b1-d515-4c729ba5-b486-46e3'),
(111, 'E2', 500000.00, '¡¡¡BONITA CASA EN TULANCINGO, HIDALGO!!! .SOC.', 165, 225, 3030.30, 2222.22, 9, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-d3c83135766a-5b1a-91985170-a46d-4208'),
(112, 'E2', 600000.00, 'Casa en Rinconada la Morena, Tulancingo.', 168, 225, 3571.43, 2666.67, 7, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Rinconada La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-d3f0d839cbb4-6a95-daf40633-8d10-44d0'),
(113, 'E2', 615000.00, 'VENTA DE CASA EN HIDALGO TULANCINGO DE BRAVO COL LA MORENA', 168, 280, 3660.71, 2196.43, 16, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-3cf54c6f2a2-31f9-6d473df2-af0b-449d'),
(114, 'E2', 625000.00, 'VENTA DE CASA EN COL. LA MORENA, TULANCINGO DE BRAVO, HIDALGO', 168, 280, 3720.24, 2232.14, 8, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-7213999ecc97-5eb2-e37866e-a8be-4f6f'),
(115, 'E2', 685590.00, 'Casa en VENTA, La Morena secc  norte B, Tulancingo de Bravo, Hidalgo. CAL', 170, 210, 4032.88, 3264.71, 8, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-a52627981427-d469-5e954cb0-a477-40d3'),
(116, 'D2', 1350000.00, 'CASA EN VENTA EN NAPATECO TULANCINGO, HIDALGO', 171, 105, 7894.74, 12857.14, 12, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional Napateco', '', 'https://www.lamudi.com.mx//detalle/41032-73-14ca92dd8a4d-db6f-eaae4c26-89a0-3953'),
(117, 'A2', 3600000.00, '!!Oportunidad!! Propiedad Comercial en Venta, ubicada en esquina, frente de escuela secundaria, a 40 metros de primaria y a un costado de guardería.', 175, 350, 20571.43, 10285.71, 12, 'Venta', 'Casa', 1, 7, 5, 0.00, 5.00, 0, 'Francisco Villa', '', 'https://www.lamudi.com.mx//detalle/41032-73-99985c210882-6c2a-e0b809ce-ac3d-432a'),
(118, 'A2', 3600000.00, '!!Oportunidad!! Propiedad Comercial en Venta, ubicada en esquina, frente de escuela secundaria, a 40 metros de primaria y a un costado de guardería.', 175, 350, 20571.43, 10285.71, 12, 'Venta', 'Casa', 1, 7, 5, 0.00, 5.00, 0, 'Francisco Villa', '', 'https://www.lamudi.com.mx//detalle/41032-73-5cdaca05bb3e-6570-c7e79108-a036-4296'),
(119, 'A2', 3600000.00, '!!Oportunidad!! Propiedad Comercial en Venta, ubicada en esquina, frente de escuela secundaria, a 40 metros de primaria y a un costado de guardería.', 175, 350, 20571.43, 10285.71, 12, 'Venta', 'Casa', 1, 7, 5, 0.00, 5.00, 0, 'Francisco Villa', '', 'https://www.lamudi.com.mx//detalle/41032-73-11709964cc36-7f5b-a9e0fc0a-8206-47bd'),
(120, 'E2', 578000.00, 'DEPARTAMENTO  EN VENTA  EXELENTE OPPORTUNIDAD', 178, 178, 3247.19, 3247.19, 7, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-17744f314559-4292-5421e2a4-a2f2-48e3'),
(121, 'E2', 578000.00, 'Casa en venta en Tulancingo de Bravo, Hidalgo en 578,000 pesos', 178, 178, 3247.19, 3247.19, 10, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-c9fbbd9465df-c54-3b7cdb6-b0e3-4a13'),
(122, 'D3', 1530000.00, 'Casa en Tulancingo, Medias Tierras de 2 niveles, con garaje techado.', 178, 220, 8595.51, 6954.55, 13, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Medias Tierras', '', 'https://www.lamudi.com.mx//detalle/41032-73-9571cd0e94a5-bbc0-b04d045b-bb6b-4703'),
(123, 'E2', 600000.00, 'CASA EN VENTA - COL. LA MORENA, TULANCINGO', 180, 210, 3333.33, 2857.14, 11, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-ec594c4bb147-7627-6e552390-86f7-4e50'),
(124, '', 3000000.00, 'Casa en Privada, Tulancingo de Bravo, Residencial Riva Palacio', 200, 170, 15000.00, 17647.06, 9, 'Venta', 'Casa', 1, 2, 3, 0.00, 3.00, 0, 'La Escondida', '', 'https://www.lamudi.com.mx//detalle/41032-73-50049742f4f-c74f-e43909c1-bfe6-4285'),
(125, 'B3', 3130000.00, 'CASA ADJ., Nicolas Copérnico  San Francisco Huatengo I, 43647 Tulancingo de Bravo, Hidalgo.', 200, 241, 15650.00, 12987.55, 11, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '', 'https://www.lamudi.com.mx//detalle/41032-73-29f30f8fd31a-ce4a-3d18d030-bebb-4453'),
(126, 'B3', 3200000.00, 'Casa - Tulancingo de Bravo', 200, 600, 16000.00, 5333.33, 10, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'San Juan', '', 'https://www.lamudi.com.mx//detalle/41032-73-ce47f616dd68-627e-e71d1c4a-a33f-3d24'),
(127, 'B1', 2650000.00, 'CASA NUEVA EN VENTA RESIDENCIAL TERRANOVA, TULANCINGO.', 202, 135, 13118.81, 19629.63, 16, 'Venta', 'Casa En Fraccionamiento', 2, 3, 2, 0.00, 2.00, 0, 'La Cañada', '', 'https://www.lamudi.com.mx//detalle/41032-73-48844530cc85-8bf0-ff3c1c48-b7eb-39b9'),
(128, 'E3', 797600.00, 'CASA EN VENTA MEDIAS TIERRAS TULANCINGO HIDALGO', 220, 220, 3625.45, 3625.45, 10, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Medias Tierras', '', 'https://www.lamudi.com.mx//detalle/41032-73-49337b970d1a-837f-eedc489-8d66-1237'),
(129, 'B2', 2890000.00, 'CASA EN VENTA EN TULANCINGO A 45 MINUTOS DE LA CIUDAD DE MEXICO', 220, 140, 13136.36, 20642.86, 16, 'Venta', 'Casa', 2, 3, 3, 0.00, 3.00, 0, 'Conjunto Habitacional Los Mesones', '', 'https://www.lamudi.com.mx//detalle/41032-73-9e6409a03fe5-da06-4354ce5b-bbea-3254'),
(130, 'A2', 3565000.00, '!!Recuperación bancaria!! Aprovecha los precios muy por debajo del valor comercial...', 220, 400, 16204.55, 8912.50, 13, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Jardines del Sur', '', 'https://www.lamudi.com.mx//detalle/41032-73-1588589ced1f-38fe-d4181b12-9cf2-44eb'),
(131, 'E2', 570000.00, 'HERMOSA Y AMPLIA CASA EN JARDINES DEL SUR TULANCINGO HIDALGO, SUPER PRECIO!!!', 225, 360, 2533.33, 1583.33, 7, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines del Sur', '', 'https://www.lamudi.com.mx//detalle/41032-73-9a87f2e30aa8-b101-a994006c-990c-4cc8'),
(132, '', 1000000.00, 'Casa en Franz Von Liszt #101, Tulancingo de Bravo', 228, 360, 4385.96, 2777.78, 16, 'Venta', 'Casa', 1, 4, 4, 0.00, 4.00, 0, 'Jardines del Sur', '', 'https://www.lamudi.com.mx//detalle/41032-73-168a34b41231-be28-478e53f0-a89d-34af'),
(133, 'A2', 3555000.00, 'VENTA DE CASA EN CALLE FRANZ VON LISZT, FRACC. JARDINES DEL SUR, TULANCINGO HIDALGO MÉXICO, ¡NO SE ACEPTAN CRÉDITOS!', 228, 360, 15592.11, 9875.00, 8, 'Venta', 'Casa En Fraccionamiento', 2, 4, 1, 0.00, 1.00, 0, 'Jardines del Sur', '', 'https://www.lamudi.com.mx//detalle/41032-73-f965e0ae6b2f-b1c8-8cf5147d-97dd-4d3e'),
(134, 'S1', 4534000.00, 'Casa Franz Von', 228, 360, 19885.96, 12594.44, 14, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Jardines del Sur', '', 'https://www.lamudi.com.mx//detalle/41032-73-450a411bdf22-4e86-f51c722-a359-414d'),
(135, 'S1', 4810000.00, 'CASA EN VENTA COL JARDINES DEL SUR TULANCINGO DE BRAVO HIDALGO', 228, 360, 21096.49, 13361.11, 16, 'Venta', 'Casa', 1, 4, 0, 0.00, 0.00, 0, 'Jardines del Sur', '', 'https://www.lamudi.com.mx//detalle/41032-73-d5a3d45f5dbe-72d8-ae5720cb-bf37-39c1'),
(136, 'S1', 4810000.00, 'CASA VENTA EN JARDINES DEL SUR, TULANCINGO DE BRAVO, HIDALGO', 228, 360, 21096.49, 13361.11, 12, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines del Sur', '', 'https://www.lamudi.com.mx//detalle/41032-73-146b7be857dc-df82-6abea19f-8db6-4eee'),
(137, 'E2', 622000.00, 'Casa en venta  Guadalupe 1ra Sección, Tulancingo, Hidalgo  DD41 GR', 230, 230, 2704.35, 2704.35, 10, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Guadalupe', '', 'https://www.lamudi.com.mx//detalle/41032-73-cba1ec894a47-74a-382d2619-87dd-4c9b'),
(138, 'E2', 690000.00, 'BONITA CASA EN PRIVADA LA MORENA SECCION NORTE TULANCINGO HIDALGO, SUPER PRECIO!!!', 232, 398, 2974.14, 1733.67, 7, 'Venta', 'Casa', 2, 3, 3, 0.00, 3.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-1ac4541477c5-64d5-ab930df0-c041-4373'),
(139, 'E3', 795000.00, 'VENTA DE CASA EN HIDALGO COL LA MORENA', 232, 398, 3426.72, 1997.49, 11, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-a589ca3c6d29-8212-90e8fd36-b5cc-46e1'),
(140, 'E3', 795000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO COL LA MORENA', 232, 398, 3426.72, 1997.49, 10, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '', 'https://www.lamudi.com.mx//detalle/41032-73-7479b230dfa4-d1c2-4dd2c53d-a249-455d'),
(141, 'B1', 2700000.00, 'Amplia casa en venta Tulancingo Hgo.', 232, 200, 11637.93, 13500.00, 10, 'Venta', 'Casa', 2, 3, 3, 0.00, 3.00, 0, 'El Mirador', '', 'https://www.lamudi.com.mx//detalle/41032-73-7beec3489eb2-2e79-af1c855a-9632-4633'),
(142, 'E2', 600000.00, 'CASA EN VENTA GUADALUPE TULANCINGO HIDALGO MJH', 240, 185, 2500.00, 3243.24, 9, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Rancho Guadalupe', '', 'https://www.lamudi.com.mx//detalle/41032-73-69c22f98a785-dd34-c7678403-9029-45a0'),
(143, '', 2000000.00, 'CASA EN EL ESTADO DE HIDALGO', 250, 170, 8000.00, 11764.71, 7, 'Venta', 'Casa', 2, 1, 1, 0.00, 1.00, 0, 'Guadalupe', '', 'https://www.lamudi.com.mx//detalle/41032-73-147f9b9aaae2-32cd-f903ca89-81d0-3a0c'),
(144, 'S2', 6100000.00, 'Casa en venta en Felipe Ángeles, Tulancingo de Bravo, Hidalgo', 285, 430, 21403.51, 14186.05, 12, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Felipe Ángeles', '', 'https://www.lamudi.com.mx//detalle/41032-73-4af9c3585a15-6f9e-61297aa9-8839-387b'),
(145, 'A3', 3900000.00, 'VENDO CASA EN CENTRO DE TULANCINGO HGO.', 300, 300, 13000.00, 13000.00, 10, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Tulancingo de Bravo Centro', '', 'https://www.lamudi.com.mx//detalle/41032-73-811ca15effb0-6ffe-8314cbcb-b0d7-4d83'),
(146, 'E3', 800000.00, 'AMPLIA CASA EN TULANCINGO', 330, 230, 2424.24, 3478.26, 16, 'Venta', 'Casa', 2, 4, 2, 0.00, 2.00, 0, 'Jardines del Sur', '', 'https://www.lamudi.com.mx//detalle/41032-73-631aa1a8e8a6-59b-d8b85be5-a436-3c4f'),
(147, 'C3', 2480000.00, 'CASA CON 350M2 DE TERRENO, COL. VALLE VERDE TULANCINGO HGO', 350, 250, 7085.71, 9920.00, 12, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Valle Verde', '', 'https://www.lamudi.com.mx//detalle/41032-73-70ad2c30cdd4-ac4-77f13dfb-aa21-4f0d'),
(148, 'D2', 1279000.00, 'VICENTE GUERRERO. CASA RESIDENCIAL. VENTA TULANCINGO. ESTADO DE HIDALGO.', 400, 240, 3197.50, 5329.17, 9, 'Venta', 'Casa', 2, 3, 0, 0.00, 0.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-3d26460e1667-8555-e6df5d38-955b-3156'),
(149, 'C3', 2367780.00, 'HERMOSA CASA ADJ, COMPRAVENTA, Chihuahua , Vicente Guerrero, 43630 Tulancingo de Bravo, Hidalgo.', 400, 404, 5919.45, 5860.84, 11, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '', 'https://www.lamudi.com.mx//detalle/41032-73-ddabe15a05a2-976e-1effcc87-bd51-416b'),
(150, '', 8000000.00, 'Casa - Tulancingo de Bravo', 482, 460, 16597.51, 17391.30, 17, 'Venta', 'Casa', 1, 5, 5, 0.00, 5.00, 0, 'Felipe Ángeles', '', 'https://www.lamudi.com.mx//detalle/41032-73-60adaf87eb8e-1677-853f180a-b1be-3423'),
(151, 'A1', 3300000.00, 'Paraiso Sur, Venta de Casa,	Tulancingo, Hidalgo.', 1049, 200, 3145.85, 16500.00, 7, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Ampliación Sur Paraíso', '', 'https://www.lamudi.com.mx//detalle/41032-73-bdf477dc8df6-ad59-5ce6c2ea-95fa-3f5a'),
(152, 'S1', 4600000.00, 'CASA  EN TULANCINGO', 2500, 300, 1840.00, 15333.33, 16, 'Venta', 'Casa', 1, 3, 3, 0.00, 3.00, 0, 'Insurgentes', '', 'https://www.lamudi.com.mx//detalle/41032-73-6efd8547bdd5-e43b-4f3b0c99-9ef6-3e76');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alfa_febrero_2024_tulancingo`
--
ALTER TABLE `alfa_febrero_2024_tulancingo`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
