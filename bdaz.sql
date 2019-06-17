-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2019 a las 06:08:47
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdaz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Dayton', 'Abshire', 'mccullough.amely@hotmail.com', NULL, NULL),
(2, 'Ashlynn', 'Collins', 'tlittel@gmail.com', NULL, NULL),
(3, 'Amina', 'Gulgowski', 'lina28@hotmail.com', NULL, NULL),
(4, 'Clair', 'Brekke', 'reichert.santiago@gmail.com', NULL, NULL),
(5, 'Milford', 'Raynor', 'leatha47@yahoo.com', NULL, NULL),
(6, 'Bertha', 'Gulgowski', 'hettinger.wilton@gmail.com', NULL, NULL),
(7, 'Isaiah', 'Olson', 'dakota36@yahoo.com', NULL, NULL),
(8, 'Fabian', 'Dickens', 'jovani24@yahoo.com', NULL, NULL),
(9, 'Deion', 'Spinka', 'ortiz.juana@gmail.com', NULL, NULL),
(10, 'Albina', 'Rutherford', 'uhayes@hotmail.com', NULL, NULL),
(11, 'Corene', 'Breitenberg', 'antonietta.daniel@yahoo.com', NULL, NULL),
(12, 'Omari', 'VonRueden', 'ola.medhurst@yahoo.com', NULL, NULL),
(13, 'Alessandra', 'Gulgowski', 'edwin49@yahoo.com', NULL, NULL),
(14, 'Colt', 'Purdy', 'hegmann.doris@yahoo.com', NULL, NULL),
(15, 'Carroll', 'Stark', 'gutmann.domenico@yahoo.com', NULL, NULL),
(16, 'Corene', 'Koss', 'jdare@hotmail.com', NULL, NULL),
(17, 'Annamae', 'Kulas', 'london07@yahoo.com', NULL, NULL),
(18, 'Novella', 'Runte', 'mccullough.abigale@gmail.com', NULL, NULL),
(19, 'Marlen', 'Abernathy', 'heathcote.stacy@yahoo.com', NULL, NULL),
(20, 'Humberto', 'Rath', 'yfisher@hotmail.com', NULL, NULL),
(21, 'Sadye', 'Von', 'schiller.josie@hotmail.com', NULL, NULL),
(22, 'Gunnar', 'O\'Conner', 'brown.danika@hotmail.com', NULL, NULL),
(23, 'Seth', 'Fay', 'bcruickshank@hotmail.com', NULL, NULL),
(24, 'Garfield', 'Greenholt', 'brain24@gmail.com', NULL, NULL),
(25, 'Roxane', 'Schaden', 'kgaylord@hotmail.com', NULL, NULL),
(26, 'Maxine', 'Berge', 'moen.agnes@yahoo.com', NULL, NULL),
(27, 'Violette', 'Fisher', 'ohirthe@hotmail.com', NULL, NULL),
(28, 'June', 'Schiller', 'cassie80@hotmail.com', NULL, NULL),
(29, 'Muhammad', 'Rice', 'roosevelt11@hotmail.com', NULL, NULL),
(30, 'Gay', 'Nader', 'reynold.medhurst@hotmail.com', NULL, NULL),
(31, 'Josue', 'Kulas', 'uabshire@gmail.com', NULL, NULL),
(32, 'Ethan', 'Connelly', 'rippin.carmella@hotmail.com', NULL, NULL),
(33, 'Connor', 'Waters', 'sadye.rippin@gmail.com', NULL, NULL),
(34, 'Cletus', 'Harris', 'bkassulke@gmail.com', NULL, NULL),
(35, 'Aubree', 'Collins', 'ymcclure@yahoo.com', NULL, NULL),
(36, 'Raymond', 'Lindgren', 'fstiedemann@yahoo.com', NULL, NULL),
(37, 'Pearlie', 'Brown', 'leslie.gutmann@gmail.com', NULL, NULL),
(38, 'Josiah', 'Hirthe', 'grimes.johnson@yahoo.com', NULL, NULL),
(39, 'Alayna', 'Kertzmann', 'roberto94@gmail.com', NULL, NULL),
(40, 'Cali', 'Bins', 'gpurdy@yahoo.com', NULL, NULL),
(41, 'Jamal', 'Huel', 'edickens@yahoo.com', NULL, NULL),
(42, 'Lenora', 'Lynch', 'schneider.kurtis@gmail.com', NULL, NULL),
(43, 'Corrine', 'Yundt', 'amely.leannon@yahoo.com', NULL, NULL),
(44, 'Stevie', 'Strosin', 'giles48@hotmail.com', NULL, NULL),
(45, 'Zion', 'Okuneva', 'carmine.howell@yahoo.com', NULL, NULL),
(46, 'Elsie', 'Reinger', 'marion.olson@yahoo.com', NULL, NULL),
(47, 'Jaclyn', 'Vandervort', 'george.mills@hotmail.com', NULL, NULL),
(48, 'Antonia', 'Donnelly', 'bkling@gmail.com', NULL, NULL),
(49, 'Arvel', 'Russel', 'emmerich.savanna@hotmail.com', NULL, NULL),
(50, 'Domenica', 'Bartoletti', 'spinka.callie@hotmail.com', NULL, NULL),
(51, 'Arnold', 'Wiza', 'malvina37@gmail.com', NULL, NULL),
(52, 'Earlene', 'Lebsack', 'blanca81@yahoo.com', NULL, NULL),
(53, 'Luz', 'Shields', 'taya76@hotmail.com', NULL, NULL),
(54, 'Jocelyn', 'Rowe', 'lesch.isaias@hotmail.com', NULL, NULL),
(55, 'Reba', 'Kunze', 'aric74@yahoo.com', NULL, NULL),
(56, 'Humberto', 'Fisher', 'medhurst.haleigh@yahoo.com', NULL, NULL),
(57, 'Savanna', 'Denesik', 'kbogan@gmail.com', NULL, NULL),
(58, 'Reymundo', 'Lakin', 'weissnat.angelo@hotmail.com', NULL, NULL),
(59, 'Yadira', 'D\'Amore', 'modesto49@yahoo.com', NULL, NULL),
(60, 'Cameron', 'Bednar', 'award@gmail.com', NULL, NULL),
(61, 'Lillie', 'Bauch', 'bayer.cleo@hotmail.com', NULL, NULL),
(62, 'Garett', 'Pagac', 'etorp@yahoo.com', NULL, NULL),
(63, 'Reta', 'Runolfsson', 'leonel.jaskolski@gmail.com', NULL, NULL),
(64, 'Reuben', 'Leannon', 'opadberg@gmail.com', NULL, NULL),
(65, 'Clinton', 'Pollich', 'isadore.gutmann@hotmail.com', NULL, NULL),
(66, 'Hettie', 'Reichert', 'fsatterfield@gmail.com', NULL, NULL),
(67, 'Adrienne', 'Jaskolski', 'jennie.ernser@hotmail.com', NULL, NULL),
(68, 'Filomena', 'Metz', 'williamson.shania@gmail.com', NULL, NULL),
(69, 'Pietro', 'Green', 'mccullough.neal@hotmail.com', NULL, NULL),
(70, 'Zakary', 'Turcotte', 'oreilly.luz@hotmail.com', NULL, NULL),
(71, 'Keenan', 'Rogahn', 'zackary68@yahoo.com', NULL, NULL),
(72, 'Cassidy', 'Smitham', 'hirthe.octavia@hotmail.com', NULL, NULL),
(73, 'Icie', 'Towne', 'ludwig.mohr@gmail.com', NULL, NULL),
(74, 'Rosemary', 'Labadie', 'hammes.haven@yahoo.com', NULL, NULL),
(75, 'Rosalyn', 'Haley', 'carrie.mcglynn@gmail.com', NULL, NULL),
(76, 'Timothy', 'Dicki', 'kkonopelski@yahoo.com', NULL, NULL),
(77, 'Davonte', 'Deckow', 'boehm.jerry@gmail.com', NULL, NULL),
(78, 'Adriana', 'Howe', 'sraynor@hotmail.com', NULL, NULL),
(79, 'Verda', 'Hirthe', 'darrell.vonrueden@gmail.com', NULL, NULL),
(80, 'Lonny', 'Witting', 'abelardo73@gmail.com', NULL, NULL),
(81, 'Emile', 'Wisoky', 'lheller@yahoo.com', NULL, NULL),
(82, 'Myrna', 'Streich', 'zelda55@yahoo.com', NULL, NULL),
(83, 'Kiara', 'Raynor', 'ihermiston@hotmail.com', NULL, NULL),
(84, 'Florence', 'Howe', 'devonte.senger@gmail.com', NULL, NULL),
(85, 'Billy', 'Smitham', 'dandre.powlowski@hotmail.com', NULL, NULL),
(86, 'Gay', 'D\'Amore', 'johnathan.gaylord@gmail.com', NULL, NULL),
(87, 'Tamara', 'Conroy', 'cremin.orville@hotmail.com', NULL, NULL),
(88, 'Deshaun', 'Terry', 'gorczany.florence@gmail.com', NULL, NULL),
(89, 'Joy', 'Wehner', 'zaria03@yahoo.com', NULL, NULL),
(90, 'Nelda', 'Hirthe', 'sibyl37@yahoo.com', NULL, NULL),
(91, 'Helmer', 'Schamberger', 'deja.frami@gmail.com', NULL, NULL),
(92, 'Shanie', 'Jacobs', 'dawson20@gmail.com', NULL, NULL),
(93, 'Curtis', 'Smith', 'charris@gmail.com', NULL, NULL),
(94, 'Jamar', 'Lindgren', 'amelie.anderson@yahoo.com', NULL, NULL),
(95, 'Ada', 'Schowalter', 'vgrady@gmail.com', NULL, NULL),
(96, 'Lora', 'Rolfson', 'emily47@hotmail.com', NULL, NULL),
(97, 'Deanna', 'Brown', 'luella.lowe@hotmail.com', NULL, NULL),
(98, 'Kali', 'Hyatt', 'shanna36@gmail.com', NULL, NULL),
(99, 'Nora', 'Lebsack', 'graham.roberts@gmail.com', NULL, NULL),
(100, 'Avery', 'Wisozk', 'nstroman@hotmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `metodo_pago` varchar(20) NOT NULL,
  `merch_id` int(10) UNSIGNED NOT NULL,
  `clientes_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `merch`
--

CREATE TABLE `merch` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(75) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `precio` double(8,2) NOT NULL,
  `stock` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `merch`
--

INSERT INTO `merch` (`id`, `nombre`, `imagen`, `descripcion`, `precio`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'CD Angry Zeta & The Hillbullys', '', 'Primer CD de Estudio', 100.00, 1, NULL, NULL),
(2, 'CD Angry Zeta & The Hillbullys', '', 'CD grabado en Vivo', 150.00, 1, NULL, NULL),
(3, 'Parche Angry Zeta & The Hillbullys', '', 'Parches bordados.\n                                Colores: Negro y Blanco.\n                                Colores: Rojo, Blanco y Amarillo', 80.00, 1, NULL, NULL),
(4, 'Pin Angry Zeta & The Hillbullys', '', 'Pin de metal. \n                                Confeccionados por HorrorFlorido.', 80.00, 1, NULL, NULL),
(5, 'Remera Angry Zeta & The Hillbullys', '', 'Remera de Angry Zeta & The Hillbullys.\n                                Talles: S-M-L-XL-XXL', 400.00, 1, NULL, NULL),
(6, 'Remera Angry Zeta & The Hillbullys', '', 'Remera con el logo del oso.\n                                Talles: S-M-L-XL-XXL', 400.00, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_06_16_015016_create_clientes_table', 1),
(16, '2019_06_16_015114_create_merch_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientes_email_unique` (`email`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `merch`
--
ALTER TABLE `merch`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
