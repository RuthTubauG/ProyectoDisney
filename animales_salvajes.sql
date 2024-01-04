-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2023 a las 09:46:16
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `animales_salvajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animals`
--

CREATE TABLE `animals` (
  `id` bigint UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raza` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `animals`
--

INSERT INTO `animals` (`id`, `nombre`, `raza`, `descripcion`, `imagen`, `created_at`, `updated_at`) VALUES
(12, 'Reina', 'Cocker americano', 'Reina es una preciosa perrita muy mimada de pura raza que vive feliz en su hogar de barrio rico', 'https://www.esimagenes.com/pimagen/imagenes-reina-png.png', '2023-10-04 04:46:30', '2023-10-04 18:53:11'),
(13, 'Tambor', 'Conejo', 'Tambor es un un conejo ansioso y enérgico. Tiene unas grandes patas con las que tamborilea sobre los troncos', 'https://www.esimagenes.com/pimagen/thumb/imagenes-tambor-conejo.png', '2023-10-04 05:42:30', '2023-10-04 19:21:29'),
(14, 'Sebastián', 'Cangrejo', 'Sebastián es un cangrejo gruñón y testarudo, pero que en el fondo tiene un gran corazón', 'https://www.esimagenes.com/pimagen/thumb/sebastian-sirenita.png', '2023-10-04 05:59:54', '2023-12-18 07:05:53'),
(15, 'Minnie Mouse', 'Ratón', 'Minnie Mouse, eterna compañera sentimental de Mickey Mouse, es una ratona negra muy presumida', 'https://www.esimagenes.com/pimagen/thumb/imagen-minnie-mouse.png', '2023-10-04 06:06:26', '2023-12-18 07:07:10'),
(16, 'Flor', 'Mofeta', 'Flor es muy tímido, amable, cariñoso y de voz suave, a menudo sonrojándose y ocultándose con la cola', 'https://www.esimagenes.com/pimagen/thumb/imagen-de-ardilla-flor.png', '2023-10-04 06:08:39', '2023-12-18 07:07:35'),
(17, 'Flounder', 'Pez', 'Es un pececillo que siempre acompaña a Ariel en sus aventuras, aunque es muy miedoso', 'https://www.esimagenes.com/pimagen/thumb/flounder-sirenita.png', '2023-10-04 06:11:49', '2023-10-04 06:13:44'),
(19, 'Winnie the pooh', 'Oso', 'Winnie the Pooh (o Pooh para abreviar) es un osito de peluche antropomórfico que pertenece a Christopher Robin', 'https://www.esimagenes.com/pimagen/thumb/imagenes-winnie-pooh-png.png', '2023-10-05 04:13:48', '2023-12-17 22:17:45'),
(20, 'Stitch', 'Extraterrestre', 'Stitch es un personaje ficticio, es un extraterrestre y es también un perro, un perro con cuatro brazos y antenas', 'https://www.esimagenes.com/pimagen/thumb/imagenes-stitch-png.png', '2023-10-05 05:59:39', '2023-12-18 07:06:28'),
(21, 'Bambi', 'Ciervo', 'Bambi es un pequeño cervatillo recién nacido, tímido e inseguro, que vive con su madre en el bosque', 'https://www.esimagenes.com/pimagen/thumb/dibujo-de-bambi.png', '2023-12-17 21:43:04', '2023-12-18 07:06:12'),
(22, 'Pua', 'Cerdo', 'Pua es el leal cerdo mascota de Moana con energía de un cachorro y el inocente cerebro de un perrito', 'https://www.esimagenes.com/pimagen/thumb/cerdo-pua.png', '2023-12-17 21:47:23', '2023-12-17 21:57:55'),
(23, 'Sven', 'Reno', 'Sven fue rescatado por Kristoff como un joven cervatillo, y permaneció a su lado desde entonces', 'https://www.esimagenes.com/pimagen/thumb/alce-de-frozen-png.png', '2023-12-17 21:50:50', '2023-12-17 21:57:40'),
(24, 'Robin', 'Pájaro', 'Robin es un pájaro grande de color rojo claro y oscuro, amigo de la princesa Sofia y de Clover', 'https://www.esimagenes.com/pimagen/thumb/robin-princesa-sofia.png', '2023-12-17 21:57:12', '2023-12-17 21:58:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_27_101752_create_animals_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ruth Tubau I Gonzalez', 'ruthtubaugonzalez@gmail.com', NULL, '$2y$10$zQMJl5F5Wtdd82Phhc3ng.N2kdL0CA17smh6JA.ICYpo1LY4jLI2O', 'wgXMY2KXdqiH92CO7gbbWlUuNshTrn55GIVBBE6MhYOrSsqhKpz6xHb1spIj', '2023-10-12 16:34:14', '2023-10-12 16:34:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT de la tabla `animals`
--
ALTER TABLE `animals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
