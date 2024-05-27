-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 27 2024 г., 09:52
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `onlineShop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `height` smallint NOT NULL,
  `wight` smallint NOT NULL,
  `material` varchar(35) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `colvo` int NOT NULL,
  `fulldescription` text NOT NULL,
  `id_cat` int NOT NULL,
  `metaTitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `metaKeyWords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `metaDiscription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `height`, `wight`, `material`, `color`, `price`, `colvo`, `fulldescription`, `id_cat`, `metaTitle`, `metaKeyWords`, `metaDiscription`) VALUES
(41, 'Кровать Estella Нота 80х190 ordf Щит Л4 Бук', 67, 197, 'Дерево', 'Білий', '6560.00', 0, 'Зручна кровать', 1, 'Кровать Estella Нота 80х190 ordf Щит Л4 Бук', 'Дерево,Білий, кровать, біла Кровать', 'Зручна кровать'),
(42, 'Диван Kairos Айго 2 Саванна нова 07 Светло-серый', 83, 200, 'Дерево', 'Светло-серый', '9529.00', 22, 'Диван Kairos Айго 2 Саванна нова 07 Светло-серый дуже зручний', 4, 'Диван Kairos Айго 2 Саванна нова 07 Светло-серый', 'Дерево, диван, сірий, світлий', 'Диван Kairos Айго 2 Саванна нова 07 Светло-серый дуже зручний'),
(43, 'Кресло Rondi Атлант PL Combo Blue', 72, 47, 'Пластик', 'Синій', '3999.00', 20, 'Кресло Rondi Атлант PL Combo Blue Пластик Синій', 3, 'Кресло Rondi Атлант PL Combo Blue', 'Крісло бла бла бла', 'Кресло Rondi Атлант PL Combo Blue Пластик Синій'),
(44, 'Стіл комп\'ютерний Loft Lab Simple, колір Дуб Аппалачі', 74, 120, 'Дерево', 'Дуб Аппалачи', '2990.00', 9, 'Письмовий стіл Simple від Loft Lab - універсальна модель робочого столу. Незважаючи на простий на перший погляд дизайн, стіл виглядає стильно та добротно. Завдяки простим формам, він ідеально впишеться в інтер\'єр. Чи то мінімалізм, чи класичний лофт, будьте впевнені - цей стіл стане оригінальним доповненням.\r\n\r\nСтільниця завтовшки 16 мм виготовлена з якісного ламінованого ДСП українського виробництва, що імітує текстуру натурального дерева, але має кращі експлуатаційні якості. \r\n\r\nСтільницю оброблено ударостійкою крайкою завтовшки 2 мм. \r\n\r\nМеталеві опори з профілю 50*25мм обладнані пластиковими заглушками що запобігатиме подряпинам підлоги.\r\n\r\nНіжки пофарбовані зносостійкою чорною матовою порошковою фарбою.\r\n\r\nВ комплекті ідуть всі необхідні комплектуючі. Збирати столи доволі легко.\r\n\r\nВага столу 15 кг.', 2, 'Loft Lab Simple', 'Стіл, комп\'ютерний, Дерево, Дуб Аппалачи, 2990', 'Письмовий стіл Simple від Loft Lab - універсальна модель робочого столу. Незважаючи на простий на перший погляд дизайн, стіл виглядає стильно та добротно. Завдяки простим формам, він ідеально впишеться в інтер\'єр.'),
(45, 'Письмовий стіл Loft Lab Xtal, Білий глянцевий', 74, 120, 'ЛДСП', 'Білий глянцевий', '3290.00', 13, 'Письмовий стіл Xtal від Loft Lab - цікавий незвичний варіант робочого столу завдяки ніжкам у формі Х. Цікавий вибір для тих, хто хоче урізноманітнити інтер\'єр. Додайте незвичності звичайним речам.\r\n\r\nСтільниця завтовшки 16 мм виготовлена з якісного ламінованого ДСП українського виробництва, має кращі експлуатаційні якості. \r\n\r\nСтільницю оброблено ударостійкою крайкою завтовшки 2 мм. \r\n\r\nМеталеві ніжки з профілю 50*50мм обладнані регульованими опорами, завдяки яким можна відрегулювати стіл на не дуже рівній поверхні, а також додати +2 см висоти. Товщина стінок 1,2 мм.\r\n\r\nНіжки пофарбовані чорною матовою фарбою.\r\n\r\nВ комплекті ідуть всі необхідні комплектуючі. Збирати столи доволі легко.\r\n\r\nВага столу 15 кг.', 2, 'Loft Lab Xtal', 'Loft Lab Xtal, ЛДСП, Білий Глянець, Письмовий стіл', 'Письмовий стіл Xtal від Loft Lab - цікавий незвичний варіант робочого столу завдяки ніжкам у формі Х. Цікавий вибір для тих, хто хоче урізноманітнити інтер\'єр.'),
(46, 'Тумба приліжкова Київський стандарт Стелла з 2 шухлядами 45 см', 50, 45, 'ДСП', 'білий', '856.00', 13, 'Тумба приліжкова Київський стандарт Стелла з 2 шухлядами 45 см виготовлено фабрикою Київський стандарт, виконано в стилі сучасний.', 7, 'Тумба приліжкова Київський стандарт Стелла з 2 шухлядами', 'Тумба, ДСП. 856 грн, Стандарт, тумбочка', 'Тумба приліжкова Київський стандарт Стелла з 2 шухлядами 45 см виготовлено фабрикою Київський стандарт, виконано в стилі сучасний.'),
(47, 'Тумба офисная с 3 ящиками \"Vivien-30\"', 50, 41, 'Дерево', 'Білий', '2806.00', 49, 'Универсальная тумба на 3 ящика \"Vivien-30\"', 7, 'Тумба офисная с 3 ящиками \"Vivien-30\"', 'Тумба, 3 ящика, Viven-30', 'Универсальная тумба на 3 ящика \"Vivien-30\"'),
(48, 'Кровать Estella Рената 120х200 ordf Щит 2Л4 Темный орех', 67, 120, 'Дерево', 'Темний горіх', '8130.00', 18, '«Рената» украинской фабрики Estella – это стильная, современная кровать, она обладает простыми и лаконичными формами. В этой модели объединились четкость линий, элегантность и компактность. Изголовье в конструкции кровати состоит из трех прямых горизонтальных планок. Стойки в ногах у конструкции нет, но передняя царга немного выступает над спальным местом, образуя бортик для фиксации постельного белья и матраса. Дизайн модели выполнен в простом деревенском стиле, однако благодаря этому будет гармонично выглядеть в любом интерьере, дополняя его и делая более уютным.', 1, 'Кровать Estella Рената 120х200 ordf Щит 2Л4 Темный орех', 'Кровать, Дерево, темний горіх', 'Описание\r\n«Рената» украинской фабрики Estella – это стильная, современная кровать, она обладает простыми и лаконичными формами'),
(49, 'Кресло игровое Anda Seat Kaiser 3 Size XL Grey Fabric', 80, 72, 'Пластик', 'Сірий', '17999.00', 0, 'Крісло ігрове.', 3, 'Кресло игровое Anda', 'Кріслло ігрове, ігрове крісло , сірий колір, сіре', 'Крісло ігрове.'),
(52, 'Якийсь Диван', 22, 33, '444444', '5555555', '666666.00', 777, '888888888', 9, '99999999', '10101001', '11111111'),
(54, 'Якийсь товар', 123, 321, 'Матеріал', 'Синій', '15000.00', 12, '&nbsp;Описанеії за допомогою JS', 2, 'Meta Title', 'Meta Key Words', 'Meta Description');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Кровать'),
(2, 'Столи'),
(3, 'Крісла'),
(4, 'Дивани'),
(7, 'Тумбочка'),
(9, 'testing');

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `FIO` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `time` datetime NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `FIO`, `email`, `phone`, `adress`, `time`, `password`) VALUES
(1, 'krasnohon Viktor', 'Viktor0732@ukr.net', '0633559928', 'Adress', '2023-10-21 15:56:05', '8cb2237d0679ca88db6464eac60da96345513964'),
(2, 'Andrey', 'Andrey@gmail.com', '123456789', 'No Adress', '2023-10-04 17:45:38', '8cb2237d0679ca88db6464eac60da96345513964'),
(3, 'OneMore', 'Example@gmail.com', '1230986754', 'My Adress', '2023-10-09 17:38:10', '8cb2237d0679ca88db6464eac60da96345513964'),
(4, 'No Name', 'NoName@gmail.com', '12341243', 'adress', '2023-10-19 12:29:24', '8cb2237d0679ca88db6464eac60da96345513964');

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int NOT NULL,
  `id_tovar` int NOT NULL,
  `name_photo` varchar(255) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `id_tovar`, `name_photo`, `status`) VALUES
(3, 41, '1691151470Кровать1.webp', 1),
(4, 41, '1691151470Кровать2.webp', 0),
(5, 41, '1691151470Кровать3.webp', 0),
(7, 42, '1691151650Диван2.webp', 1),
(8, 42, '1691151650Диван3.webp', 0),
(9, 43, '1691151827крісло1.webp', 0),
(10, 43, '1691151827крісло2.webp', 1),
(11, 44, '1691415260Стіл1.webp', 1),
(12, 44, '1691415260Стіл2.webp', 0),
(13, 44, '1691415260Стіл3.webp', 0),
(14, 45, '1691415624Стіл.png', 1),
(15, 45, '1691415624Стіл2.png', 0),
(16, 46, '1691592166Тумбочка.jpg', 1),
(17, 47, '1691592287Тумба 2.jpg', 1),
(18, 48, '1691592514Rhjdfnm.webp', 1),
(19, 49, '1691592684Крісло.webp', 1),
(27, 52, '1692196111Діван2ю0.webp', 1),
(28, 52, '1692196111Крісло.webp', 0),
(29, 54, '1699257822New Ballance.webp', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `relationOrder`
--

CREATE TABLE `relationOrder` (
  `id` int NOT NULL,
  `idUser` int NOT NULL,
  `idCat` int NOT NULL,
  `countCat` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `dataCat` datetime NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `relationOrder`
--

INSERT INTO `relationOrder` (`id`, `idUser`, `idCat`, `countCat`, `status`, `dataCat`, `description`) VALUES
(1, 1, 48, 5, 0, '2023-10-02 17:27:12', ''),
(2, 1, 47, 1, 0, '2023-10-02 17:27:12', ''),
(3, 1, 46, 2, 0, '2023-10-02 17:27:12', ''),
(4, 1, 42, 2, 0, '2023-10-02 17:27:12', ''),
(5, 1, 45, 1, 0, '2023-10-02 17:27:12', ''),
(12, 3, 46, 1, 0, '2023-10-09 17:38:39', 'Нотаток'),
(13, 3, 52, 1, 0, '2023-10-09 17:38:39', 'Нотаток'),
(14, 3, 48, 1, 0, '2023-10-09 17:38:39', 'Нотаток'),
(15, 1, 43, 10, 0, '2023-10-16 17:26:13', ''),
(16, 1, 42, 1, 0, '2023-10-16 17:42:47', ''),
(17, 1, 49, 13, 0, '2023-10-16 17:42:47', ''),
(18, 1, 42, 1, 0, '2023-10-18 12:01:46', ''),
(19, 3, 42, 1, 1, '2023-10-26 19:26:19', '');

-- --------------------------------------------------------

--
-- Структура таблицы `settingPage`
--

CREATE TABLE `settingPage` (
  `id` int NOT NULL,
  `metaTitle` varchar(255) NOT NULL,
  `metaDiscription` varchar(255) NOT NULL,
  `metaKeyWords` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `fullContent` text NOT NULL,
  `name` varchar(25) NOT NULL,
  `page` varchar(50) NOT NULL,
  `prior` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `settingPage`
--

INSERT INTO `settingPage` (`id`, `metaTitle`, `metaDiscription`, `metaKeyWords`, `title`, `fullContent`, `name`, `page`, `prior`) VALUES
(1, 'Мета тайтл для головної сторінки', 'Мета опис для головної сторінки', 'Ключові слова для головної сторінки', 'Головна сторінка', 'Вміст головної сторінки', 'Головна', 'index', 1),
(2, 'Мета заголовок для сторінки Контакти', 'Мета опис для сторінки Контакти', 'Мета, ключові слова для сторінки Контакти', 'Наші Контакти', '0633559928', 'Контакти', 'contact', 4),
(3, 'Мета заголовок для сторінки \"Про Нас\"', 'Мета Опис для сторінки \"Про Нас\"', 'Ключові слова для сторінки \"Про Нас\"', 'Про нас', 'Класна компанія займається меблями.', 'Про нас', 'about_us', 2),
(4, 'Ваканція', 'Опис Ваканції', 'Ключові слова для сторінки Ваканція', 'Ваканція', 'Порібен ремонтник мебелі', 'Ваканція', 'vacant', 3),
(5, 'MetaTitle для Головної сторінки продажу', 'Опис головної сторінки сайту', 'Ключові слова для головної сторінки сайту з товарами', 'Меблі', '', 'Каталог', 'items_list', 5),
(6, 'Order', 'Order Dis', 'Order Words', 'Ваше замовлення', '', 'Купівля', 'order_buy', 6),
(7, 'Registration', 'Registration Description', 'Reg, Registration', 'Реєстрація', '', 'registration', 'registration', 7),
(8, 'Login', 'Login Description', 'Login, Log in', 'Логін', '', 'Login', 'login', 8),
(9, 'Профіль Користувача', 'Профіль', 'Профіль, користувач', 'Profile', '', 'profile', 'profile', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role` int NOT NULL,
  `password` varchar(40) NOT NULL,
  `dataTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `photo`, `role`, `password`, `dataTime`) VALUES
(1, 'Viktor', 'Viktor07322370@gmail.com', '0363559928', '1692798182Без названия (2).jpg', 1, '8cb2237d0679ca88db6464eac60da96345513964', '2023-10-04 16:44:10'),
(3, 'Bob', 'Viktor0732@ukr.net', 'MyPhone', NULL, 2, '8cb2237d0679ca88db6464eac60da96345513964', '2023-10-04 16:43:33'),
(4, 'Alex', 'Testing@gmail.com', '543221', NULL, 2, '348162101fc6f7e624681b7400b085eeac6df7bd', '2023-09-04 16:51:33');

-- --------------------------------------------------------

--
-- Структура таблицы `visitor`
--

CREATE TABLE `visitor` (
  `id` int NOT NULL,
  `FIO` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `adress` varchar(70) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `visitor`
--

INSERT INTO `visitor` (`id`, `FIO`, `email`, `phone`, `adress`, `time`) VALUES
(1, 'Krasnozhon Viktor', 'Viktor07322370@gmail.com', '1234567899', 'Adress dostavki', '2023-10-04 16:39:42'),
(4, 'Testing Run Order', 'Example@gmail.com', '123123123123', 'No Adress', '2023-10-16 17:17:16');

-- --------------------------------------------------------

--
-- Структура таблицы `visitorRelationOrder`
--

CREATE TABLE `visitorRelationOrder` (
  `id` int NOT NULL,
  `idVisitor` int NOT NULL,
  `idVisitorCat` int NOT NULL,
  `visitorStatus` int NOT NULL,
  `visitorDataCat` datetime NOT NULL,
  `visitorCount` int NOT NULL,
  `visitorDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `visitorRelationOrder`
--

INSERT INTO `visitorRelationOrder` (`id`, `idVisitor`, `idVisitorCat`, `visitorStatus`, `visitorDataCat`, `visitorCount`, `visitorDescription`) VALUES
(1, 1, 42, 0, '2023-10-04 16:38:48', 1, 'Notatok'),
(2, 1, 43, 0, '2023-10-04 16:38:48', 1, 'Notatok'),
(6, 4, 42, 0, '2023-10-16 17:17:16', 10, 'Without');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
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
-- Индексы таблицы `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `visitorRelationOrder`
--
ALTER TABLE `visitorRelationOrder`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `relationOrder`
--
ALTER TABLE `relationOrder`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `settingPage`
--
ALTER TABLE `settingPage`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `visitorRelationOrder`
--
ALTER TABLE `visitorRelationOrder`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
