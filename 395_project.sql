-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 12 2023 г., 16:25
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `395_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `name_ru`) VALUES
(1, 'orangutans', 'Орангутаны'),
(2, 'toucans', 'Туканы'),
(3, 'iguanas', 'Игуаны'),
(4, 'parrots', 'Попугаи'),
(5, 'bats', 'Летучие мыши');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_path` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `image_path`, `category_id`) VALUES
(1, '/img/toucans/andres-rodriguez-lOHHRPJ0Mds-unsplash.jpg', 2),
(2, '/img/toucans/carmel-arquelau-bV3RXy9Upqg-unsplash.jpg', 2),
(3, '/img/toucans/geoffrey-baumbach-lY-4oM_xFXk-unsplash.jpg', 2),
(4, '/img/toucans/jorge-c-CcWiAOMVHTQ-unsplash.jpg', 2),
(5, '/img/toucans/lukas-souza-vjFC9OjrOtA-unsplash.jpg', 2),
(6, '/img/toucans/peter-steiner-1973-jxBuuXanQG4-unsplash.jpg', 2),
(7, '/img/toucans/pranesh-ravi-IylENDSGRtg-unsplash.jpg', 2),
(8, '/img/toucans/zdenek-machacek-82dzAD25zjo-unsplash.jpg', 2),
(9, '/img/toucans/zdenek-machacek-eqXiLNfZDc0-unsplash.jpg', 2),
(10, '/img/orangutans/chris-charles-MTh5767B1rs-unsplash.jpg', 1),
(11, '/img/orangutans/chris-loh-PFHoZr2zzyg-unsplash.jpg', 1),
(12, '/img/orangutans/chuttersnap-_83fyG9rzx4-unsplash.jpg', 1),
(13, '/img/orangutans/dan-dennis-5ESfIy0yjZY-unsplash.jpg', 1),
(14, '/img/orangutans/dimitry-b-tRGqh8cHanA-unsplash.jpg', 1),
(15, '/img/orangutans/marcie-kennedy-6O_i5JagOVo-unsplash.jpg', 1),
(16, '/img/orangutans/mark-flanagan-ZoHpiWHR2fI-unsplash.jpg', 1),
(17, '/img/orangutans/rendy-novantino-GFOYDKF-Gx0-unsplash.jpg', 1),
(18, '/img/orangutans/uriel-soberanes-1KTOpv3VGMM-unsplash.jpg', 1),
(19, '/img/iguanas/alex-williams-CxayZniisNA-unsplash.jpg', 3),
(20, '/img/iguanas/angel-ceballos-YGBBbm6_dSI-unsplash.jpg', 3),
(21, '/img/iguanas/anthony-rae-GHSUjSKB5C0-unsplash.jpg', 3),
(22, '/img/iguanas/cindy-williams-moore-xro6zbGewnc-unsplash.jpg', 3),
(23, '/img/iguanas/craig-hughes-lffyfpxnC-E-unsplash.jpg', 3),
(24, '/img/iguanas/francesco-ungaro-JHypHcOObf4-unsplash.jpg', 3),
(25, '/img/iguanas/nitty-ditty-_YCUANSCaO4-unsplash.jpg', 3),
(26, '/img/iguanas/pradip-dalai-amkVgRdPXPw-unsplash.jpg', 3),
(27, '/img/iguanas/simon-berger-qOmxP7W8svM-unsplash.jpg', 3),
(28, '/img/parrots/atanas-dzhingarov-a4Wn6M18J-w-unsplash.jpg', 4),
(29, '/img/parrots/deb-dowd-kBz6VBnW5iU-unsplash.jpg', 4),
(30, '/img/parrots/dusan-veverkolog-S1nV1-d-nk0-unsplash.jpg', 4),
(31, '/img/parrots/naser-tamimi-wCByk0dxtEk-unsplash.jpg', 4),
(32, '/img/parrots/nikolay-tchaouchev-yc28b5RoGZU-unsplash.jpg', 4),
(33, '/img/parrots/prasad-panchakshari-lTA4u2lic64-unsplash.jpg', 4),
(34, '/img/parrots/roi-dimor-BHA9lIa48kY-unsplash.jpg', 4),
(35, '/img/parrots/sreenivas-LqJSb6gU1v0-unsplash.jpg', 4),
(36, '/img/parrots/thaaii-la-IU8sAQQyB0o-unsplash.jpg', 4),
(37, '/img/bats/geoff-brooks-t2Cqd5ta-P8-unsplash.jpg', 5),
(38, '/img/bats/ishan-seefromthesky-FnzQiImsoYM-unsplash.jpg', 5),
(39, '/img/bats/johannes-giez-pxrnXTZUeQw-unsplash.jpg', 5),
(40, '/img/bats/nils-bouillard-Wqw32UCPYw8-unsplash.jpg', 5),
(41, '/img/bats/peter-neumann-_PwCXdAMJAI-unsplash.jpg', 5),
(42, '/img/bats/rene-riegal-qAts81pZrbg-unsplash.jpg', 5),
(43, '/img/bats/susanne-martinus-PzAmGKhQFNg-unsplash.jpg', 5),
(44, '/img/bats/todd-cravens-IY1sRDxNWN4-unsplash.jpg', 5),
(45, '/img/bats/vishu-vishuma-6sIDBhhfLeg-unsplash.jpg', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
