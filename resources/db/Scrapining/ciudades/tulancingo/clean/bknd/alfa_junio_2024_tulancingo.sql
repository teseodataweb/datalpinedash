-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2024 a las 04:39:41
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
-- Estructura de tabla para la tabla `alfa_junio_2024_tulancingo`
--

CREATE TABLE `alfa_junio_2024_tulancingo` (
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
-- Volcado de datos para la tabla `alfa_junio_2024_tulancingo`
--

INSERT INTO `alfa_junio_2024_tulancingo` (`id`, `Categoria`, `Precio`, `propiedad`, `metros_total`, `metros_construido`, `precio_m2_terreno`, `precio_m2_construido`, `tiempo_de_publicacion`, `Estado`, `Tipo`, `Estacionamientos`, `Recamaras`, `Banos`, `Medio_banos`, `Banos_Total`, `Seguridad`, `Colonia`, `CP`, `url`) VALUES
(1, 'E1', 380000.00, 'REMATE DE CASA', 90, 55, 4222.22, 6909.09, 4, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Campo Alegre', '43626', 'https://www.lamudi.com.mx/detalle/41032-73-f8c36a811f63-a384-bae522c3-aa85-4fec'),
(2, 'E1', 430000.00, 'HERMOSA CASA EN TULANCINGO HIDALGO - SC*', 150, 280, 2866.67, 1535.71, 4, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-6a62d8a8e2f2-1b2f-1ddd8da0-9a2a-4bfa'),
(3, 'E1', 430000.00, 'BONITA CASA EN TULANCINGO, HIDALGO', 280, 150, 1535.71, 2866.67, 4, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-e9307c71dcd-3e2b-dc1453db-bce0-4360'),
(4, 'E1', 430000.00, 'PRECIOSA CASA EN VENTA ZONA TULANCINGO, HIDALGO', 150, 420, 2866.67, 1023.81, 4, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-dbbfdc72cb87-31f8-db5ecac9-88d6-1f2f'),
(5, 'E1', 430000.00, 'INCREIBLE CASA EN TULANCINGO, HIDALGO', 150, 280, 2866.67, 1535.71, 4, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Insurgentes', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-9ae476c2e209-275d-6683697f-86e9-49f8'),
(6, 'E1', 430000.00, 'PRECIOSA CASA EN VENTA EN TULANCIGO, HIDALGO,EXCELENTE OPORTUNIDAD', 280, 150, 1535.71, 2866.67, 4, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-db8936e093ab-7fa5-f084aba4-81a9-4f65'),
(7, 'E2', 500000.00, '¡¡¡BONITA CASA EN TULANCINGO, HIDALGO!!! .SOC.', 165, 225, 3030.30, 2222.22, 9, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-d3c83135766a-5b1a-91985170-a46d-4208'),
(8, 'E2', 525000.00, 'Casas Solas 2 RECAMARAS MAS ALCOBA Infonavit E Issfam 90 M2 De Terreno', 90, 90, 5833.33, 5833.33, 16, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Jardines del Paraíso', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-eaa93dd772fd-d395-61a87f1f-9342-38ac'),
(9, 'E2', 525000.00, 'CASAS SOLAS ECONOMICAS 2 RECAMARAS MAS ALCOBA, PARA INFONAVIT E ISSFAM', 90, 52, 5833.33, 10096.15, 16, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Huapalcalco', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-d179f04ccd-a475-35c9e50f-a5a7-32a2'),
(10, 'E2', 549000.00, 'KM CASA EN VENTA GUADALUPE TULANCINGO HIDALGO', 105, 100, 5228.57, 5490.00, 4, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Rancho Guadalupe', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-68a8b71f53a5-1476-4b5d6cab-919c-4d63'),
(11, 'E2', 550000.00, 'CASA EN VENTA VICENTE GUERRERO, TULANCINGO HIDALGO MJH', 125, 205, 4400.00, 2682.93, 9, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-f2a6b856db06-fa8c-631f5c75-a8f9-4af2'),
(12, 'E2', 560000.00, 'ES HORA DE REALIZAR TU SUEÑO Y ADQUIRIR ESTA HERMOSA CASA EN TULANCINGO HIDALGO', 114, 206, 4912.28, 2718.45, 8, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-f86cc0bfb87a-5642-7b90e0af-9609-458d'),
(13, 'E2', 560000.00, 'PRECIOSA CASA EN VENTA UBICADA EN De Las Fuentes 1009, La Morena Sección Norte B, Tulancingo, Estado de Hidalgo', 120, 180, 4666.67, 3111.11, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-d00fc130202f-8c6-3c38501-99d4-4acb'),
(14, 'E2', 560000.00, 'venta de cas en tulancingo', 120, 180, 4666.67, 3111.11, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-988056f1134f-ac8b-b7dfec29-98bb-477b'),
(15, 'E2', 560000.00, 'CASA EN VENTA/PACHUCA', 160, 300, 3500.00, 1866.67, 9, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Rinconada La Morena', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-5d4420a4886c-7fbf-30efffe5-9871-4862'),
(16, 'E2', 570000.00, 'HERMOSA Y AMPLIA CASA EN JARDINES DEL SUR TULANCINGO HIDALGO, SUPER PRECIO!!!', 225, 360, 2533.33, 1583.33, 7, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines del Sur', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-9a87f2e30aa8-b101-a994006c-990c-4cc8'),
(17, 'E2', 578000.00, 'SE VENDE CASA EN TULANCINGO DE BRAVO', 230, 178, 2513.04, 3247.19, 4, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-68c6c2f82941-192d-99fcc3dc-bcc4-482c'),
(18, 'E2', 578000.00, 'Casa en venta en Tulancingo de Bravo, Hidalgo en 578,000 pesos', 178, 178, 3247.19, 3247.19, 10, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-c9fbbd9465df-c54-3b7cdb6-b0e3-4a13'),
(19, 'E2', 578000.00, 'LA CASA DE TUS SUEÑOS', 178, 178, 3247.19, 3247.19, 7, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-5ba6e323a427-e36e-5423bad5-a633-46af'),
(20, 'E2', 578000.00, 'BONITA CASA EN VENTA EN LA MORENA, TULANCINGO', 178, 178, 3247.19, 3247.19, 7, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-fbb2e5ddca9e-6caa-3dbace8f-9f6e-46b4'),
(21, 'E2', 580000.00, 'PRECIOSA CASA EN TULANCINGO HIDALGO OAHM', 150, 280, 3866.67, 2071.43, 9, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-31c0d0c8c869-3288-13762b7d-982b-4ede'),
(22, 'E2', 580000.00, '¡LA JOYA QUE HAS BUSCADO ESTÁ AQUÍ! 🏡✨  Dirección: Calle Hermenegildo Galeana , Vicente Guerrero, Tulancingo de Bravo, Hidalgo', 110, 110, 5272.73, 5272.73, 8, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-fb42e32ef092-e597-7ee2a10a-bfc5-4904'),
(23, 'E2', 580000.00, 'CASA EN VENTA TULANCINGO DE BRAVO, COL VICENTE GUERRERO', 110, 110, 5272.73, 5272.73, 4, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-16703c40b97a-1893-369b2930-8650-410b'),
(24, 'E2', 580000.00, '“Venta de Casa en Tulancingo Hidalgo “', 110, 110, 5272.73, 5272.73, 10, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-7fba58593516-84f5-7c788ae9-a58e-1237'),
(25, 'E2', 580000.00, 'Casa en venta en Rinconada La Morena, Tulancingo Hidalgo. VPV', 160, 280, 3625.00, 2071.43, 7, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-823dbe357fb8-2f45-5ab98864-b5b7-4a16'),
(26, 'E2', 580000.00, 'Casa en venta en Vicente Guerrero, Tulancingo de Bravo, Hgo.', 110, 110, 5272.73, 5272.73, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-871b9b8410ba-9999-2ca8ea3b-bb1c-4df1'),
(27, 'E2', 580000.00, 'Bonita Casa En Una Exelente Ubicacion Calle Sauce # 201 rinconada la morena Tulancingo Hidalgo   GSN', 160, 280, 3625.00, 2071.43, 7, 'Venta', 'Casa', 2, 5, 4, 0.00, 4.00, 0, 'Rinconada La Morena', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-53ec6298fb45-9aed-ef547d8c-9579-4c01'),
(28, 'E2', 590000.00, 'EN VENTA HERMOSA PROPIEDAD EN HIDALGO', 266, 398, 2218.05, 1482.41, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-38f5b9e30c0f-e566-8374568e-b02f-42fc'),
(29, 'E2', 590000.00, 'VENTA DE CASA ECONOMICA AMPLIA EN TULANCINGO 2 RECAMARAS', 90, 50, 6555.56, 11800.00, 13, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Napateco', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-5bf156c15edf-3d02-80444c89-8277-1237'),
(30, 'E2', 600000.00, 'CASA EN VENTA - COL. LA MORENA, TULANCINGO', 180, 210, 3333.33, 2857.14, 11, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-ec594c4bb147-7627-6e552390-86f7-4e50'),
(31, 'E2', 600000.00, 'CASA EN VENTA GUADALUPE TULANCINGO HIDALGO MJH', 240, 185, 2500.00, 3243.24, 9, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Rancho Guadalupe', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-69c22f98a785-dd34-c7678403-9029-45a0'),
(32, 'E2', 600000.00, 'Casa en Rinconada la Morena, Tulancingo.', 168, 225, 3571.43, 2666.67, 7, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Rinconada La Morena', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-d3f0d839cbb4-6a95-daf40633-8d10-44d0'),
(33, 'E2', 600000.00, 'VENTA DE CASA ECONOMICA  EN TULANCINGO', 90, 45, 6666.67, 13333.33, 16, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'Huapalcalco', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-21abe171c97e-2093-c92cbaa9-bc94-3fd6'),
(34, 'E2', 610000.00, 'CASA ECONÓMICA EN TULANCINGO HIDALGO, NAPATECO', 105, 64, 5809.52, 9531.25, 7, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Unidad Habitacional Napateco', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-1355894512b3-3724-3af4b310-ab6e-4973'),
(35, 'E2', 615000.00, 'HORTENCIA PROL. CLAVEL 108', 168, 280, 3660.71, 2196.43, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-28171947241c-71cf-8949a510-bf9b-40db'),
(36, 'E2', 617000.00, '¡REMATE HIPOTECARIO!', 100, 100, 6170.00, 6170.00, 4, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Campo Alegre', '43626', 'https://www.lamudi.com.mx/detalle/41032-73-14bf811c7e8f-fb21-a1391919-ab60-4fa8'),
(37, 'E2', 620000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO, HIDALGO.', 160, 330, 3875.00, 1878.79, 8, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Rinconada La Morena', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-a20b445f146b-4ae9-aa7a4fa8-a07e-4cb2'),
(38, 'E2', 620000.00, 'PREVENTA Departamentos nuevos y económicos en Tulancingo', 60, 60, 10333.33, 10333.33, 16, 'Venta', 'Departamento', 1, 2, 1, 0.00, 1.00, 0, 'Nuevo Tulancingo', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-2bd215798759-6b9b-c4a4aff1-b239-3fed'),
(39, 'E2', 625000.00, 'CASA EN VENTA EN HORTENCIA PROLONGACION CLAVEL #108 PACHUCA DE SOTO HIDALGO', 108, 280, 5787.04, 2232.14, 8, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-f6c5bcc613dc-841-7ae6fd60-8604-4093'),
(40, 'E2', 625000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO, HIDALGO, COLONIA LA MORENA', 156, 280, 4006.41, 2232.14, 10, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-49a72ba8f921-acd1-e2802dd4-a885-405f'),
(41, 'E2', 628000.00, 'Casa en Tulancingo, Hidalgo', 114, 114, 5508.77, 5508.77, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-391591e63af4-7da4-a8c62f29-9b57-4519'),
(42, 'E2', 650000.00, 'VENTA DE CASA ECONÓMICA EN NAPATECO, EN TULANCINGO HIDALGO', 90, 90, 7222.22, 7222.22, 4, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Rancho Napateco', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-41ce0348aadc-9c56-96819439-86d4-1f2c'),
(43, 'E2', 680000.00, 'VENTA DE CASA EN RINCONES DE LA HACIENDA TULANCINGO 2 RECAMARAS', 90, 45, 7555.56, 15111.11, 16, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-f9d970bddc18-9bf4-b210e72-9009-385f'),
(44, 'E2', 685590.00, 'Casa en VENTA, La Morena secc  norte B, Tulancingo de Bravo, Hidalgo. CAL', 170, 210, 4032.88, 3264.71, 8, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-a52627981427-d469-5e954cb0-a477-40d3'),
(45, 'E2', 690129.00, 'HERMOSA CASA VICENTE GUERRERO TULANCINGO HIDALGO !!!', 100, 95, 6901.29, 7264.52, 15, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-8b6085305da-3498-9b6434d4-a765-4727'),
(46, 'E2', 720000.00, 'Casas económicas en Privada, Napateco Tulancingo Hgo.', 91, 53, 7912.09, 13584.91, 12, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Unidad Habitacional Napateco', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-61c2eecd4e32-58e5-84cdbd52-9055-4de0'),
(47, '', 750000.00, 'CASA EN VENTA - COL. RINCONADA LA MORENA, TULANCINGO', 150, 180, 5000.00, 4166.67, 11, 'Venta', 'Casa', 1, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-1d94401d58d6-9c4d-e8ea114e-a7db-42c1'),
(48, 'E3', 771222.00, 'HERMOSA CASA ADJUDICADA, Benito Juárez 17, La Luz, Santa Ana Hueytlalpan, Hidalgo, México', 90, 90, 8569.13, 8569.13, 8, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Barrio La Palma', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-11f5b885638b-1f3b-aad1adf1-94b1-4948'),
(49, 'E3', 790000.00, 'VENTA DE CASA EN TULANCINGO DE BRAVO FRACCIONAMIENTO RINCONADA LA MORENA', 114, 206, 6929.82, 3834.95, 4, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Rinconada La Morena', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-3116b8629a46-88c4-d67d7fcd-a333-43ab'),
(50, 'E3', 795000.00, 'VENTA DE CASA EN HIDALGO COL LA MORENA', 232, 398, 3426.72, 1997.49, 11, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-a589ca3c6d29-8212-90e8fd36-b5cc-46e1'),
(51, 'E3', 797600.00, 'CASA EN VENTA MEDIAS TIERRAS TULANCINGO HIDALGO', 220, 220, 3625.45, 3625.45, 10, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Medias Tierras', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-49337b970d1a-837f-eedc489-8d66-1237'),
(52, 'E3', 800000.00, 'AMPLIA CASA EN TULANCINGO', 330, 230, 2424.24, 3478.26, 16, 'Venta', 'Casa', 2, 4, 2, 0.00, 2.00, 0, 'Jardines del Sur', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-631aa1a8e8a6-59b-d8b85be5-a436-3c4f'),
(53, 'E3', 812000.00, 'Casa en venta Tulancingo a 5 minutos de Plaza Patio', 72, 58, 11277.78, 14000.00, 16, 'Venta', 'Casa En Fraccionamiento', 1, 2, 1, 0.00, 1.00, 0, 'Villa Sol', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-a3dff86c0cda-487c-b98f7f6b-aec2-3bfe'),
(54, 'E3', 843000.00, 'Casa en venta Tulancingo Hidalgo', 72, 61, 11708.33, 13819.67, 16, 'Venta', 'Casa En Fraccionamiento', 1, 2, 1, 0.00, 1.00, 0, 'Villa Sol', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-55eb54793d25-880b-e2df7533-933e-3cf2'),
(55, 'E3', 910000.00, 'VENTA DE CASA ECONOMICA EN ESQUINA CENTRICA EN TULANCINGO', 117, 68, 7777.78, 13382.35, 16, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'San José Caltengo', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-2ef07880d696-34fd-5a75c0b-b64a-3099'),
(56, 'E3', 920000.00, 'Casa en venta Tulancingo Hidalgo', 72, 66, 12777.78, 13939.39, 16, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'Valle Verde', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-6756a15193a6-bc40-86d16cf5-862d-3197'),
(57, 'E3', 980000.00, 'Vivienda en venta con gran plusvalía de remate dentro de Calle Hermenegildo Galeana 706, Vicente Guerrero, Tulancingo, Estado de Hidalgo, México', 110, 110, 8909.09, 8909.09, 8, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-db570cd0d44e-1be3-5ab37df6-83f7-4656'),
(58, 'E3', 984000.00, 'Casa en venta con 3 recámaras en Tulancingo', 72, 67, 13666.67, 14686.57, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 2, 0.00, 2.00, 0, 'Villa Sol', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-a533d1c6b1d4-b82f-b4e9c29b-9bda-3798'),
(59, 'E3', 985000.00, 'CASA DE 1 NIVEL EN FRACC. VILLAS SANTA MARIA, TULANCINGO HIDALGO', 105, 76, 9380.95, 12960.53, 16, 'Venta', 'Casa En Fraccionamiento', 2, 2, 1, 0.00, 1.00, 0, 'Ampliación Javier Rojo Gómez', '43645', 'https://www.lamudi.com.mx/detalle/41032-73-7ce59ea81ac0-ba8f-53ce538d-9349-3d2f'),
(60, 'E3', 995000.00, 'VENTA SE CASA ECONOMICA CENTRICA TULANCINGO', 80, 80, 12437.50, 12437.50, 4, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'La Escondida', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-7b50f7d88d98-9ab-da869a79-bf7b-1f12'),
(61, '', 1000000.00, 'Casa en Franz Von Liszt #101, Tulancingo de Bravo', 228, 360, 4385.96, 2777.78, 16, 'Venta', 'Casa', 1, 4, 4, 0.00, 4.00, 0, 'Jardines del Sur', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-168a34b41231-be28-478e53f0-a89d-34af'),
(62, 'D1', 1020000.00, 'CASA EN PRIVADA, FRACCIONAMIENTO VILLAS STA. MARÍA EN TULANCINGO', 105, 71, 9714.29, 14366.20, 4, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Ampliación Javier Rojo Gómez', '43645', 'https://www.lamudi.com.mx/detalle/41032-73-cab54cc38dc0-567c-aa98e1d-891b-4ee1'),
(63, 'D1', 1050000.00, 'VENTA DE CASA DE LUJO 3 RECAMARAS EN TULANCINGO', 80, 120, 13125.00, 8750.00, 14, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Medias Tierras', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-89ca4ee22d25-18f8-67cdfbc9-994b-1237'),
(64, 'D1', 1050000.00, 'CASA DE 1 NIVEL EN PRIVADA, TULANCINGO HIDALGO', 105, 70, 10000.00, 15000.00, 4, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Ampliación Javier Rojo Gómez', '43645', 'https://www.lamudi.com.mx/detalle/41032-73-58b55adc017b-6914-f7d09bf-9a71-458e'),
(65, 'D1', 1070000.00, 'Casa en venta con 3 recámaras en  Tulancingo', 72, 81, 14861.11, 13209.88, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 2, 0.00, 2.00, 0, 'Villa Sol', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-96ac604bba20-635d-4730664-89a4-3be2'),
(66, 'D1', 1080000.00, 'Casa con opción de crecimiento en Villas Santa María, Tulancingo Hgo.', 105, 73, 10285.71, 14794.52, 9, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Ampliación Javier Rojo Gómez', '43645', 'https://www.lamudi.com.mx/detalle/41032-73-148a066ebd7c-a22f-24777fa3-acc5-46bd'),
(67, 'D1', 1100000.00, 'HERMOSA CASA EN VENTA EN TULANCINGO DE BRAVO HIDALGO.', 398, 398, 2763.82, 2763.82, 4, 'Venta', 'Casa', 2, 4, 2, 0.00, 2.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-c3d586e6bb16-bbfd-7ff3c95e-a3d7-4960'),
(68, 'D1', 1150000.00, 'CASA NUEVA EN PRIVADA SAN DANIEL, TULANCINGO HIDALGO', 105, 62, 10952.38, 18548.39, 16, 'Venta', 'Casa', 2, 2, 1, 0.00, 1.00, 0, 'Conjunto Habitacional Los Mesones', '43626', 'https://www.lamudi.com.mx/detalle/41032-73-e1e9f2183ac5-7f02-5ba171a0-bd32-34c5'),
(69, 'D1', 1180000.00, 'CASA EN FRACCIONAMIENTO CERRADO, CIMA DORADA TULANCINGO', 105, 77, 11238.10, 15324.68, 9, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'San José Caltengo', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-60f9fc9ca4df-8fdf-6c7094aa-a826-4471'),
(70, '', 1250000.00, 'CASA EN COL. CALTENGO, TULANCINGO DE BRAVO, HIDALGO', 100, 100, 12500.00, 12500.00, 9, 'Venta', 'Casa', 1, 2, 2, 0.00, 2.00, 0, 'Caltengo', '43626', 'https://www.lamudi.com.mx/detalle/41032-73-2156fbb37ce2-f9f1-607dc92c-96c0-4917'),
(71, 'D2', 1266000.00, 'CASA EN VENTA HIDALGO', 115, 176, 11008.70, 7193.18, 13, 'Venta', 'Casa', 1, 2, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-b50831813d1a-d731-4d18cefe-8427-4ae1'),
(72, 'D2', 1279000.00, 'VICENTE GUERRERO. CASA RESIDENCIAL. VENTA TULANCINGO. ESTADO DE HIDALGO.', 400, 240, 3197.50, 5329.17, 9, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Vicente Guerrero 1ra Sección', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-3d26460e1667-8555-e6df5d38-955b-3156'),
(73, 'D2', 1290000.00, 'Casa en Col. 20 de noviembre, Tulancingo de Bravo, Hidalgo', 120, 190, 10750.00, 6789.47, 9, 'Venta', 'Casa', 1, 4, 3, 0.00, 3.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx/detalle/41032-73-a1cf0b934e6e-30bf-1313e532-9cf5-40e4'),
(74, 'D2', 1350000.00, 'CASA EN VENTA EN NAPATECO TULANCINGO, HIDALGO', 171, 105, 7894.74, 12857.14, 12, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Unidad Habitacional Napateco', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-14ca92dd8a4d-db6f-eaae4c26-89a0-3953'),
(75, 'D2', 1353670.00, 'Casa en venta en  Carlos Chavez, Tulancingo ¡Compra esta propiedad mediante Cesión de Derechos e incrementa tu patrimonio! ¡Contáctame, te digo cómo hacerlo!', 100, 154, 13536.70, 8790.06, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Jardines del Sur', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-4c6c49b746f5-9573-493db6c8-8100-502a'),
(76, 'D2', 1366025.00, 'VENTA DE CASA EN JARDINES DEL SUR TULANCINGO DE BRAVO HIDALGO GDS/AS', 120, 120, 11383.54, 11383.54, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Jardines del Sur', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-c05d32c8a2a0-1e10-f3f11bd6-b838-4459'),
(77, 'D2', 1450000.00, 'PREVENTA Casa de 3 niveles con sala doble altura, en Medias Tierras', 142, 135, 10211.27, 10740.74, 4, 'Venta', 'Casa', 1, 3, 3, 0.00, 3.00, 0, 'Medias Tierras', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-c41ce8c5e371-728-831364f-a0d9-477b'),
(78, 'D2', 1450000.00, 'VENTA DE CASA ECONOMICA Y CENTRICA AMPLIA CON 4 RECAMARAS EN TULANCINGO', 128, 128, 11328.13, 11328.13, 4, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, '20 de Noviembre', '43689', 'https://www.lamudi.com.mx/detalle/41032-73-7b50f7d88d98-24f9-6f9f5e99-bf7b-1f12'),
(79, 'D3', 1530000.00, 'Casa en Tulancingo, Medias Tierras de 2 niveles, con garaje techado.', 178, 220, 8595.51, 6954.55, 13, 'Venta', 'Casa', 1, 4, 1, 0.00, 1.00, 0, 'Medias Tierras', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-9571cd0e94a5-bbc0-b04d045b-bb6b-4703'),
(80, 'D3', 1700000.00, 'Se VENDE casa en Ampliación Rojo Gómez Tulancingo Hidalgo', 120, 120, 14166.67, 14166.67, 13, 'Venta', 'Casa', 2, 2, 2, 0.00, 2.00, 0, 'Ampliación Javier Rojo Gómez', '43645', 'https://www.lamudi.com.mx/detalle/41032-73-b3b07a6e0fe-21ef-d909e739-8994-3a1c'),
(81, 'C1', 1890000.00, 'CASA EN TULANCINGO A 45 MIN DE LA CIUDAD DE MEXICO', 80, 140, 23625.00, 13500.00, 16, 'Venta', 'Casa', 1, 2, 2, 0.00, 2.00, 0, 'Conjunto Habitacional Los Mesones', '43626', 'https://www.lamudi.com.mx/detalle/41032-73-252d3fdc1b9d-6034-cb024130-8ca5-3fa2'),
(82, 'C1', 1930000.00, 'CASA EN VENTA EN PRIVADA VICTORIA, EN MEDIAS TIERRAS, TULANCINGO', 125, 144, 15440.00, 13402.78, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 2, 0.00, 2.00, 0, 'Medias Tierras', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-8251aff19fca-ef3-5d8fb87-b771-3968'),
(83, 'C1', 1976116.00, 'VENTA DE CASA EN LA HERRADURA TULANCINGO DE BRAVO HIDALGO GDS/AS', 120, 120, 16467.63, 16467.63, 4, 'Venta', 'Casa En Fraccionamiento', 2, 3, 1, 0.00, 1.00, 0, 'Tollancingo', '43696', 'https://www.lamudi.com.mx/detalle/41032-73-ccd0c59699a-351e-706be229-9ef4-4e59'),
(84, '', 2000000.00, 'CASAS EN MEDIAS TIERRAS, TULANCINGO DE BRAVO HIDALGO', 92, 182, 21739.13, 10989.01, 14, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Medias Tierras', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-af54d1fd6cd2-f433-d11bc63-b17f-409e'),
(85, '', 2000000.00, 'CASA EN EL ESTADO DE HIDALGO', 250, 170, 8000.00, 11764.71, 7, 'Venta', 'Casa', 2, 1, 1, 0.00, 1.00, 0, 'Guadalupe', '43628', 'https://www.lamudi.com.mx/detalle/41032-73-147f9b9aaae2-32cd-f903ca89-81d0-3a0c'),
(86, 'C2', 2159000.00, 'Hidalgo,Tulancingo,Almicar Residencial,Casa ,Venta', 105, 220, 20561.90, 9813.64, 8, 'Venta', 'Casa', 2, 6, 1, 0.00, 1.00, 0, 'La Herradura', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-60e84bf363a9-7428-752d4dc9-bdcf-3afb'),
(87, 'C2', 2200000.00, 'EXCLUSIVO FRACC. PEDREGAL DE SAN FRANCISCO TULANCINGO HGO.', 150, 159, 14666.67, 13836.48, 16, 'Venta', 'Casa En Fraccionamiento', 1, 3, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-449e66261448-8b10-e2cde429-9902-33e5'),
(88, 'C3', 2367780.00, 'HERMOSA CASA ADJ, COMPRAVENTA, Chihuahua , Vicente Guerrero, 43630 Tulancingo de Bravo, Hidalgo.', 400, 404, 5919.45, 5860.84, 11, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Vicente Guerrero 1ra Sección', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-ddabe15a05a2-976e-1effcc87-bd51-416b'),
(89, 'C3', 2387171.00, 'REMATE B. DE CASA EN FRACCIONAMIENTO EN PEDREGAL DE SAN FRANCISCO TULANCINGO HIDALGO.', 180, 300, 13262.06, 7957.24, 13, 'Venta', 'Casa En Fraccionamiento', 2, 4, 1, 0.00, 1.00, 0, 'San José Pedregal', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-ad51a037d1f0-4ff4-b101f03e-a4f7-49ee'),
(90, 'C3', 2480000.00, 'CASA CON 350M2 DE TERRENO, COL. VALLE VERDE TULANCINGO HGO', 350, 250, 7085.71, 9920.00, 12, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Valle Verde', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-70ad2c30cdd4-ac4-77f13dfb-aa21-4f0d'),
(91, 'B1', 2650000.00, 'CASA NUEVA EN VENTA RESIDENCIAL TERRANOVA, TULANCINGO.', 202, 135, 13118.81, 19629.63, 16, 'Venta', 'Casa En Fraccionamiento', 2, 3, 2, 0.00, 2.00, 0, 'La Cañada', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-48844530cc85-8bf0-ff3c1c48-b7eb-39b9'),
(92, 'B1', 2700000.00, 'Amplia casa en venta Tulancingo Hgo.', 232, 200, 11637.93, 13500.00, 10, 'Venta', 'Casa', 2, 3, 3, 0.00, 3.00, 0, 'El Mirador', '43626', 'https://www.lamudi.com.mx/detalle/41032-73-7beec3489eb2-2e79-af1c855a-9632-4633'),
(93, 'B2', 2758000.00, 'Casa VENTA, Jardines del Sur, Tulancingo de Bravo', 160, 160, 17237.50, 17237.50, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Jardines del Sur', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-467b23fd01cb-cb12-3a22ec63-8c62-4978'),
(94, 'B2', 2758000.00, 'VVV VENTA DE CASA CALLE FRANZ VON LISZT JARDINES DEL SUR 3A SECC TULANCINGO DE BRAVO HIDALGO', 70, 140, 39400.00, 19700.00, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Jardines del Sur', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-4c88e4b1cb97-8a55-3dcaa553-ad27-426f'),
(95, 'B2', 2890000.00, 'CASA EN VENTA EN TULANCINGO A 45 MINUTOS DE LA CIUDAD DE MEXICO', 220, 140, 13136.36, 20642.86, 16, 'Venta', 'Casa', 2, 3, 3, 0.00, 3.00, 0, 'Conjunto Habitacional Los Mesones', '43626', 'https://www.lamudi.com.mx/detalle/41032-73-9e6409a03fe5-da06-4354ce5b-bbea-3254'),
(96, 'B2', 2900000.00, 'Una casa perfectamente diseñada en la mejor ubicación de Tulancingo, La Morena', 120, 154, 24166.67, 18831.17, 10, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Conjunto Habitacional Los Mesones', '43626', 'https://www.lamudi.com.mx/detalle/41032-73-f1d9f7d3a1ab-c9e6-ef7f900e-b973-4d71'),
(97, 'B2', 2900000.00, 'Casa de 3 recámaras en Privada Riva Palacio, La Morena Tulancingo Hgo', 120, 150, 24166.67, 19333.33, 10, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-bfb49856282a-e531-99e14565-8dd0-47ce'),
(98, '', 3000000.00, 'Casa en Privada, Tulancingo de Bravo, Residencial Riva Palacio', 200, 170, 15000.00, 17647.06, 9, 'Venta', 'Casa', 1, 2, 3, 0.00, 3.00, 0, 'La Escondida', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-50049742f4f-c74f-e43909c1-bfe6-4285'),
(99, 'B3', 3130000.00, 'CASA ADJ., Nicolas Copérnico  San Francisco Huatengo I, 43647 Tulancingo de Bravo, Hidalgo.', 200, 241, 15650.00, 12987.55, 11, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-29f30f8fd31a-ce4a-3d18d030-bebb-4453'),
(100, 'B3', 3200000.00, 'Casa - Tulancingo de Bravo', 200, 600, 16000.00, 5333.33, 10, 'Venta', 'Casa', 1, 3, 2, 0.00, 2.00, 0, 'San Juan', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-ce47f616dd68-627e-e71d1c4a-a33f-3d24'),
(101, 'B3', 3200000.00, 'VENTA SE CASA ECONOMICA Y DE LUJO EN TULANCINGO HIDALGO 3 RECAMARAS', 140, 140, 22857.14, 22857.14, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Las Presas', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-7b50f7d88d98-17dd-88576c89-bf7b-1f12'),
(102, 'A1', 3300000.00, 'Paraiso Sur, Venta de Casa,	Tulancingo, Hidalgo.', 1049, 200, 3145.85, 16500.00, 7, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Ampliación Sur Paraíso', '43685', 'https://www.lamudi.com.mx/detalle/41032-73-bdf477dc8df6-ad59-5ce6c2ea-95fa-3f5a'),
(103, 'A1', 3350000.00, 'VENTA DE CASA AMPLIA Y DE LUJO SEMICENTRICA TULANCINGO 3 RECAMARAS', 200, 200, 16750.00, 16750.00, 4, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Santa Ana', '43695', 'https://www.lamudi.com.mx/detalle/41032-73-7b50f7d88d98-32e2-4c64ba9-bf7b-1f12'),
(104, 'A1', 3400000.00, 'VENTA DE CASA DE LUJO CENTRICA DE TULANCINGO 3 RECAMARAS', 200, 200, 17000.00, 17000.00, 4, 'Venta', 'Casa', 2, 3, 1, 0.00, 1.00, 0, 'Santa Ana', '43695', 'https://www.lamudi.com.mx/detalle/41032-73-7b50f7d88d98-1e1a-b21ac609-bf7b-1f12'),
(105, 'A2', 3555000.00, 'VENTA DE CASA EN CALLE FRANZ VON LISZT, FRACC. JARDINES DEL SUR, TULANCINGO HIDALGO MÉXICO, ¡NO SE ACEPTAN CRÉDITOS!', 228, 360, 15592.11, 9875.00, 8, 'Venta', 'Casa En Fraccionamiento', 2, 4, 1, 0.00, 1.00, 0, 'Jardines del Sur', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-f965e0ae6b2f-b1c8-8cf5147d-97dd-4d3e'),
(106, 'A2', 3600000.00, '!!Oportunidad!! Propiedad Comercial en Venta, ubicada en esquina, frente de escuela secundaria, a 40 metros de primaria y a un costado de guardería.', 175, 350, 20571.43, 10285.71, 12, 'Venta', 'Casa', 1, 7, 5, 0.00, 5.00, 0, 'Francisco Villa', '43628', 'https://www.lamudi.com.mx/detalle/41032-73-11709964cc36-7f5b-a9e0fc0a-8206-47bd'),
(107, '', 3750000.00, 'CASA DE 1 NIVEL EN LA MORENA, TULANCINGO', 160, 240, 23437.50, 15625.00, 16, 'Venta', 'Casa', 2, 4, 4, 0.00, 4.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-5b029fa4b8c7-f083-3a6060f6-9bd2-39bf'),
(108, 'A3', 3900000.00, 'VENDO CASA EN CENTRO DE TULANCINGO HGO.', 160, 300, 24375.00, 13000.00, 10, 'Venta', 'Casa', 2, 3, 2, 0.00, 2.00, 0, 'Tulancingo de Bravo Centro', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-811ca15effb0-6ffe-8314cbcb-b0d7-4d83'),
(109, 'A3', 3946465.00, 'VENTA DE CASA EN PEDREGAL DE SAN FRANCISCO TULANCINGO DE BRAVO HIDALGO GDS/AS', 150, 150, 26309.77, 26309.77, 4, 'Venta', 'Casa En Fraccionamiento', 2, 3, 1, 0.00, 1.00, 0, 'Tulancingo de Bravo', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-dfeffb37df74-1249-f8860080-9ed3-4249'),
(110, 'S1', 4300000.00, 'Casa en Venta, Col. La Morena. Tulancingo. Pachuca.', 160, 240, 26875.00, 17916.67, 12, 'Venta', 'Casa', 2, 5, 1, 0.00, 1.00, 0, 'Unidad Habitacional La Morena', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-76d564d8c2b1-d515-4c729ba5-b486-46e3'),
(111, 'S1', 4500000.00, 'Se vende casa en Tulancingo, Fraccionamiento San Francisco Huatengo.', 0, 0, 5272.73, 5272.73, 8, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Residencial La Quinta', '43660', 'https://www.lamudi.com.mx/detalle/41032-73-cfbd09274c36-b108-c2a1f4e9-ad07-1237'),
(112, 'S1', 4525000.00, 'HERMOSA CASA ADJUDICADA, Johannes Brahms & Calle Franz Von Liszt, Jardines del Sur 3ra Secc, 43660 Tulancingo, Hgo.', 360, 360, 12569.44, 12569.44, 9, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines del Sur', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-433ab298900d-9c89-f6be6d13-86dc-4b95'),
(113, 'S1', 4595000.00, 'HERMOSA CASA ADJUDICADA, Calle CHARLES DARWIN 108, San Francisco, Tulancingo, Hgo.', 375, 375, 12253.33, 12253.33, 9, 'Venta', 'Casa', 2, 4, 2, 0.00, 2.00, 0, 'Tulancingo de Bravo', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-26c4dd974599-ba8f-614a267b-abd9-4dc5'),
(114, 'S1', 4600000.00, 'CASA  EN TULANCINGO', 2500, 300, 1840.00, 15333.33, 16, 'Venta', 'Casa', 1, 3, 3, 0.00, 3.00, 0, 'Insurgentes', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-6efd8547bdd5-e43b-4f3b0c99-9ef6-3e76'),
(115, 'S1', 4620000.00, 'REMATE B. DE CASA EN JARDINES DEL SUR HIDALGO', 228, 360, 20263.16, 12833.33, 8, 'Venta', 'Casa', 2, 4, 1, 0.00, 1.00, 0, 'Jardines del Sur', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-9cca8f9711be-f30b-a81ce469-82f8-4a3d'),
(116, 'S1', 4810000.00, 'CASA VENTA EN JARDINES DEL SUR, TULANCINGO DE BRAVO, HIDALGO', 228, 360, 21096.49, 13361.11, 12, 'Venta', 'Casa', 2, 4, 3, 0.00, 3.00, 0, 'Jardines del Sur', '43640', 'https://www.lamudi.com.mx/detalle/41032-73-146b7be857dc-df82-6abea19f-8db6-4eee'),
(117, '', 8000000.00, 'Casa - Tulancingo de Bravo', 482, 460, 16597.51, 17391.30, 17, 'Venta', 'Casa', 1, 5, 5, 0.00, 5.00, 0, 'Felipe Ángeles', '43628', 'https://www.lamudi.com.mx/detalle/41032-73-60adaf87eb8e-1677-853f180a-b1be-3423'),
(118, 'L3', 17000000.00, 'Hermosa Casa en el Centro de Tulancingo, Ideal Restaurante, Hotel Boutique, etc.', 1000, 500, 17000.00, 34000.00, 8, 'Venta', 'Casa', 2, 5, 4, 0.00, 4.00, 0, 'Tulancingo de Bravo Centro', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-8d19f5c73d8e-b109-7eb82239-8d06-1237'),
(119, 'L3', 17500000.00, 'Gran Casa en Venta, en Tulancingo de Bravo. 1,972 m2.', 1972, 520, 8874.24, 33653.85, 16, 'Venta', 'Casa', 2, 7, 7, 0.00, 7.00, 0, 'Tulancingo de Bravo Centro', '43775', 'https://www.lamudi.com.mx/detalle/41032-73-d16e176ac8dd-8ca1-9a163b6d-b87e-31f9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alfa_junio_2024_tulancingo`
--
ALTER TABLE `alfa_junio_2024_tulancingo`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
