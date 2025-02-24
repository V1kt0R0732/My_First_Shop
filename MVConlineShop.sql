-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 24 2025 г., 21:03
-- Версия сервера: 8.0.30
-- Версия PHP: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `MVConlineShop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Вода'),
(3, 'Снеки'),
(5, 'Цукерки'),
(6, 'Морозиво'),
(7, 'Печиво'),
(8, 'Приправи');

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `user_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_log` datetime NOT NULL,
  `password` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adress` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `user_name`, `first_name`, `last_name`, `email`, `phone`, `last_log`, `password`, `adress`) VALUES
(2, 'Viktor_2', 'Viktor', 'Krasnozhon', 'Example@gmail.com', '063 559 28 96', '2024-05-13 20:30:33', '8cb2237d0679ca88db6464eac60da96345513964', 'Random'),
(3, 'Boby', 'Bob', 'Dori', 'Boby@gmail.com', '1230986754', '2024-05-29 17:29:39', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Boby Adress 1'),
(4, 'Lary', 'Lary', 'Lobster', 'Lary@gmail.com', '1230986754', '2024-05-29 17:31:42', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Example Adress'),
(5, 'New User', NULL, NULL, 'NewUser@gmail.com', NULL, '2024-06-03 20:12:58', '8cb2237d0679ca88db6464eac60da96345513964', NULL),
(6, 'SecondTestUser', 'Oleg', 'Roby', 'Second@gmail.com', '55662325', '2024-06-03 20:13:27', '8cb2237d0679ca88db6464eac60da96345513964', 'Example Adress');

-- --------------------------------------------------------

--
-- Структура таблицы `coupons`
--

CREATE TABLE `coupons` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `time_created` datetime NOT NULL,
  `status` int NOT NULL,
  `active_day` int NOT NULL,
  `value` int NOT NULL,
  `coupon` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `time_created`, `status`, `active_day`, `value`, `coupon`) VALUES
(1, '0% Sale', '2025-02-19 20:34:49', 0, 1, 0, 357),
(2, '2% Sale', '2025-02-22 21:13:03', 0, 1, 2, 508),
(3, '2% Sale', '2025-02-24 17:41:41', 1, 3, 2, 627);

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int NOT NULL,
  `photo_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_tovar` int NOT NULL,
  `status` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `photo_name`, `id_tovar`, `status`) VALUES
(14, '1712149657Lays.jpeg', 19, 1),
(25, '1712653860Без названия.jpg', 20, 1),
(31, '1714991393Морозиво.jpg', 23, 1),
(32, '1717085655Screenshot 2024-05-30 191218.png', 24, 1),
(33, '1717085694Screenshot 2024-05-30 191449.png', 25, 1),
(34, '1717085743Screenshot 2024-05-30 191538.png', 26, 1),
(35, '1717086057Screenshot 2024-05-30 192050.png', 27, 1),
(36, '1717086712Screenshot 2024-05-30 193122.png', 28, 1),
(37, '1717086902Screenshot 2024-05-30 193438.png', 17, 0),
(40, '1717086993Screenshot 2024-05-30 193626.png', 21, 0),
(43, '1717087090Screenshot 2024-05-30 193803.png', 22, 0),
(46, '1717087212Screenshot 2024-05-30 193942.png', 29, 1),
(47, '1717087294Screenshot 2024-05-30 194032.png', 30, 1),
(48, '1717087329Screenshot 2024-05-30 194203.png', 31, 1),
(49, '1717087379Screenshot 2024-05-30 194230.png', 32, 1),
(50, '1717087566Screenshot 2024-05-30 194533.png', 17, 0),
(51, '1717087566Screenshot 2024-05-30 194516.png', 17, 1),
(52, '1717087626Screenshot 2024-05-30 194648.png', 21, 0),
(53, '1717087626Screenshot 2024-05-30 194639.png', 21, 1),
(54, '1717087697Screenshot 2024-05-30 194753.png', 22, 0),
(55, '1717087697Screenshot 2024-05-30 194745.png', 22, 1),
(56, '1717087815Screenshot 2024-05-30 195008.png', 33, 1),
(57, '1717087902Screenshot 2024-05-30 195120.png', 34, 1),
(58, '1717088797Screenshot 2024-05-30 200434.png', 35, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_cat` int NOT NULL,
  `count` int NOT NULL,
  `price` float(8,2) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `id_cat`, `count`, `price`, `description`) VALUES
(17, 'Morshin', 1, 10, 40.00, 'Вода 1,5л Моршинська мінеральна сильногазована'),
(19, 'Чипси Lay\'s ', 3, 47, 50.00, 'Чипси120 г Lay\'s картопляні зі смаком сметани та зелені м/уп'),
(20, 'Чипси Lay\'s', 3, 15, 50.00, 'Чипси 120 г Lay\'s картопляні зі смаком крабу м/уп'),
(21, 'Моршинська', 1, 23, 22.00, 'Вода 1,5л Моршинська мінеральна негазована'),
(22, 'Миргородська', 1, 0, 17.00, 'Вода 1,5л Миргородська Лагідна мінеральна слабогазована'),
(23, 'Ріжок', 6, 31, 50.00, 'Дуже смачне морозиво. Привезене прямо з макдональдса. Покупайте'),
(24, 'Сухарики Flint ', 3, 16, 21.00, 'Сухарики 125 г Flint пшенично-житні зі смаком Вершки та зелень'),
(25, 'Сухарики Flint Baguette', 3, 44, 15.00, 'Сухарики 60 г Flint Baguette пшеничні зі смаком лобстера м/уп'),
(26, 'Насіння соняшника', 3, 15, 30.00, 'Насіння соняшника 95 г Сан Санич смажене солоне'),
(27, 'Насіння соняшника', 3, 22, 27.00, 'Насіння соняшника 80 г Сан Санич Преміум смажене солоне м/уп'),
(28, 'Pringles', 3, 17, 140.00, 'Чіпси 165г PRINGLES картопляні зі смаком сметани та цибулі'),
(29, 'Raffaello ', 5, 55, 191.00, 'Цукерки Raffaello 210 г'),
(30, 'Цукерки АВК', 5, 30, 330.00, 'Цукepки АВК Королівський шарм солодкий мікс'),
(31, 'Сливки-Ленивки', 5, 25, 177.00, 'Цукерки Рошен Сливки-Ленивки глазуровані молочно-шоколадною глазур\'ю'),
(32, 'Mars Twix ', 5, 55, 407.00, 'Цукерки Mars Twix minis вагові'),
(33, 'Перець чорний', 8, 40, 10.00, 'Перець чорний 20 г Мрія мелений'),
(34, 'Лавровий лист', 8, 50, 8.00, 'Лавровий лист 10 г Мрія'),
(35, 'Печиво Oрео', 7, 55, 19.00, 'Печиво 44 г Oрео з какао та кремовою начинкою ванільного смаку м/уп');

-- --------------------------------------------------------

--
-- Структура таблицы `relationOrder`
--

CREATE TABLE `relationOrder` (
  `id` int NOT NULL,
  `idUser` int NOT NULL,
  `idCat` int NOT NULL,
  `countCat` int NOT NULL,
  `status` int NOT NULL,
  `dataCat` datetime NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adress` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `coupon` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `relationOrder`
--

INSERT INTO `relationOrder` (`id`, `idUser`, `idCat`, `countCat`, `status`, `dataCat`, `description`, `adress`, `type`, `coupon`) VALUES
(20, 10, 23, 2, 1, '2024-05-27 10:41:45', '', 'address', 'visitor', 0),
(21, 10, 22, 1, 1, '2024-05-27 10:41:45', '', 'address', 'visitor', 0),
(22, 11, 22, 1, 0, '2024-05-27 11:19:56', '', 'Example Adress', 'visitor', 0),
(23, 11, 23, 1, 0, '2024-05-27 11:19:56', '', 'Example Adress', 'visitor', 0),
(24, 12, 23, 1, 1, '2024-05-27 11:20:21', '', 'address', 'visitor', 0),
(25, 12, 19, 1, 1, '2024-05-27 11:20:21', '', 'address', 'visitor', 0),
(26, 12, 17, 1, 1, '2024-05-27 11:20:21', '', 'address', 'visitor', 0),
(27, 14, 19, 1, 1, '2024-05-29 14:53:58', '', 'Example Adress', 'visitor', 0),
(28, 14, 20, 1, 1, '2024-05-29 14:53:58', '', 'Example Adress', 'visitor', 0),
(29, 2, 19, 1, 0, '2024-05-29 15:07:22', '', 'Random', 'client', 0),
(30, 2, 20, 1, 0, '2024-05-29 15:07:22', '', 'Random', 'client', 0),
(31, 3, 20, 2, 0, '2024-05-29 17:30:20', '', 'Boby Adress 1', 'client', 0),
(32, 3, 17, 4, 0, '2024-05-29 17:31:11', 'Boby Likes Water', 'Boby Adress 2', 'client', 0),
(33, 4, 23, 2, 0, '2024-05-29 17:32:52', '', 'Example Adress', 'client', 0),
(34, 15, 24, 1, 1, '2024-06-01 00:41:21', '', 'Example Adress', 'visitor', 0),
(35, 15, 19, 1, 1, '2024-06-01 00:41:21', '', 'Example Adress', 'visitor', 0),
(36, 16, 17, 1, 1, '2024-06-01 00:58:14', '', 'address', 'visitor', 0),
(37, 16, 19, 1, 1, '2024-06-01 00:58:14', '', 'address', 'visitor', 0),
(38, 17, 20, 1, 1, '2024-06-01 00:59:07', '', 'Boby Adress 1', 'visitor', 0),
(39, 17, 24, 1, 1, '2024-06-01 00:59:07', '', 'Boby Adress 1', 'visitor', 0),
(40, 17, 25, 1, 1, '2024-06-01 00:59:07', '', 'Boby Adress 1', 'visitor', 0),
(41, 6, 19, 3, 1, '2024-06-03 21:40:09', '', 'Example Adress', 'client', 0),
(42, 2, 28, 1, 1, '2024-06-12 11:58:13', '', 'Random', 'client', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `settingPage`
--

CREATE TABLE `settingPage` (
  `id` int NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fullContent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `page` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prior` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `settingPage`
--

INSERT INTO `settingPage` (`id`, `title`, `fullContent`, `name`, `page`, `prior`) VALUES
(1, 'Головна Сторінка', 'Тут буде інформація про фірму (опис і т.д.)', 'Головна', 'index', 1),
(3, 'Каталог', 'Каталог', 'Каталог', 'catalog', 3),
(4, 'About Us', 'Content About Us', 'Про нас', 'contact', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `avatar`, `status`) VALUES
(1, 'Viktor', 'Viktor0732@ukr.net', '8cb2237d0679ca88db6464eac60da96345513964', '1713281205pandaAva.jpg', 'Owner'),
(2, 'Grisha', 'Grisha@gmail.com', '7b52009b64fd0a2a49e6d8a939753077792b0554', NULL, 'Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `valuta`
--

CREATE TABLE `valuta` (
  `id` int NOT NULL,
  `name` varchar(15) NOT NULL,
  `value` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `valuta`
--

INSERT INTO `valuta` (`id`, `name`, `value`) VALUES
(1, 'UAH', '41');

-- --------------------------------------------------------

--
-- Структура таблицы `visiting`
--

CREATE TABLE `visiting` (
  `id` int NOT NULL,
  `ip` varchar(50) NOT NULL,
  `unic` int NOT NULL,
  `regular` int NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `visiting`
--

INSERT INTO `visiting` (`id`, `ip`, `unic`, `regular`, `data`) VALUES
(1, '127.0.0.1', 1, 2, '2025-02-22 21:13:03');

-- --------------------------------------------------------

--
-- Структура таблицы `visitor`
--

CREATE TABLE `visitor` (
  `id` int NOT NULL,
  `first_name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `visitor`
--

INSERT INTO `visitor` (`id`, `first_name`, `last_name`, `email`, `phone`, `time`) VALUES
(10, 'Viktor', 'Krasnozhon', 'Visitor@gmail.com', '1230986754', '2024-05-27 10:41:45'),
(11, 'Viktor', 'Krasnozhon', 'Example@gmail.com', '1230986754', '2024-05-27 11:19:56'),
(12, 'Viktor', 'Krasnozhon', 'Visitor@gmail.com', '1230986754', '2024-05-27 11:20:21'),
(13, 'Viktor', 'Krasnozhon', 'Visitor@gmail.com', '1230986754', '2024-05-27 11:26:40'),
(14, 'Viktor', 'Krasnozhon', 'Example@gmail.com', '1230986754', '2024-05-29 14:53:58'),
(15, 'Viktor', 'Krasnozhon', 'Example@gmail.com', '1230986754', '2024-06-01 00:41:21'),
(16, 'Viktor', 'Krasnozhon', 'Visitor@gmail.com', '1230986754', '2024-06-01 00:58:14'),
(17, 'Bob', 'Dori', 'Example@gmail.com', '1230986754', '2024-06-01 00:59:07');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `relationOrder`
--
ALTER TABLE `relationOrder`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settingPage`
--
ALTER TABLE `settingPage`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `valuta`
--
ALTER TABLE `valuta`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `visiting`
--
ALTER TABLE `visiting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `relationOrder`
--
ALTER TABLE `relationOrder`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `settingPage`
--
ALTER TABLE `settingPage`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `valuta`
--
ALTER TABLE `valuta`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `visiting`
--
ALTER TABLE `visiting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
