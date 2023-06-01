-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 01 2023 р., 15:21
-- Версія сервера: 5.5.62
-- Версія PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `web_studio`
--

-- --------------------------------------------------------

--
-- Структура таблиці `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `сategory_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `description`, `price`, `amount`, `image`, `сategory_name`) VALUES
(19, 'Web site for SPA', 'A web site for a Single Page Application (SPA) is a digital platform designed to deliver a seamless and interactive user experience by dynamically loading content without the need for page refreshes.', 5000, 2, 0xd094d0b8d0b7d0b0d0b9d0bd20d0b1d0b5d0b720d0bdd0b0d0b7d0b2d0b0d0bdd0b8d18f202831292e706e67, 'WebSite'),
(20, 'Green and yellow interior design', 'Green and yellow minimalist interior design combines a clean aesthetic with vibrant and earthy hues.', 3500, 4, 0x477265656e20616e642059656c6c6f77204d696e696d616c69737420496e746572696f722044657369676e2050726573656e746174696f6e2e706e67, 'Design'),
(21, 'Blue Minimalist Interior Design', 'Blue minimalist interior design embraces simplicity with a calming and serene ambiance.', 4000, 3, 0x426c7565204d696e696d616c69737420496e746572696f722044657369676e2050726573656e746174696f6e2e706e67, 'Design'),
(22, 'App Phone Mockup', '\"App Phone Mockup\" - a visual representation of a mobile application.', 6000, 1, 0x507572706c65204170702050686f6e65204d6f636b75702053616c6573204d61726b6574696e672050726573656e746174696f6e2e706e67, 'App'),
(23, 'Fitness App', '\"Fitness website with dark brown and neon pink gradients.\"', 3000, 4, 0x486f6d652e706e67, 'App');

-- --------------------------------------------------------

--
-- Структура таблиці `categories`
--

CREATE TABLE `categories` (
  `сategory_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `categories`
--

INSERT INTO `categories` (`сategory_name`) VALUES
('App'),
('Design'),
('WebSite');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES
(4, 'qweqwe', 'qwe123', 'qwe@gmail.com', '1234'),
(13, 'uio', 'uio', 'uio@gmail.com', 'uio12345'),
(14, 'sonya', 'sonya', 'cat@gmail.com', '3089c8aeda09245955c8001b37f6dba3'),
(15, 'bnm', 'bnm', 'bnm@gmail.com', '33bdaaff18c43051d42353e2ef12b8e6');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `сategory_name` (`сategory_name`);

--
-- Індекси таблиці `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`сategory_name`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `catalog`
--
ALTER TABLE `catalog`
  ADD CONSTRAINT `catalog_ibfk_1` FOREIGN KEY (`сategory_name`) REFERENCES `categories` (`сategory_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
