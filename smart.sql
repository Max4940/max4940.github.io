-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 23 2023 г., 11:49
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `smart`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `pass`, `name`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin', 'admin', 'admin'),
(3, 'admin233', 'jfjf73dfd187d54e8b53910d164b108a9f89ca0lfkf3874', 'admin233'),
(4, 'admin789', 'jfjf73d644feb5f278a4371030e4457a3dcad2flfkf3874', 'name789');

-- --------------------------------------------------------

--
-- Структура таблицы `admin2`
--

CREATE TABLE `admin2` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `rigths` varchar(255) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin2`
--

INSERT INTO `admin2` (`id`, `login`, `pass`, `name`, `email`, `rigths`) VALUES
(1, 'zxc', '12345', 'asdf', 'mi4940@mail.com', 'user'),
(2, 'admin', 'admin', NULL, NULL, 'user'),
(3, 'admin', 'admin', NULL, NULL, 'user'),
(4, '', '12345', 'admin5', 'mi4940@mail.com', 'user'),
(5, '', '12345', 'admin66', 'mi4940@mail.com', 'user'),
(6, 'admin77', '1234', 'admin88', 'mi4940@mail.com', 'user'),
(7, 'zxc22', '12345', 'zxc22', 'zxc22@mail.com', 'user'),
(8, 'login255', 'pas255', 'name255', 'post255@mail.com', 'user'),
(9, 'login999', 'pas999', 'name999', 'post999@mail.com', 'user'),
(10, 'login111', 'pas111', 'name111', 'post111@mail.com', 'user'),
(11, 'login555', 'pas555', 'name555', 'post555@mail.com', 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `text`, `data`, `description`) VALUES
(1, 'news1.svg', 'Открытие нового магазина', 'Разнообразный и богатый опыт говорит нам, что консультация с широким активом требует от нас анализа анализа существующих паттернов поведения', '2027-06-05', 'Разнообразный и богатый'),
(2, 'news2.svg', 'Работа в праздничные дни', 'Принимая во внимание показатели успешности, социально-экономическое развитие играет определяющее значение для вывода текущих активов', '2021-06-05', 'Принимая во внимание'),
(3, 'news3.svg', 'Идейные соображения', 'Идейные соображения высшего порядка, а также семантический разбор внешних противодействий позволяет выполнить важные задания по разработке прогресса профессионального сообщества', '2021-06-05', 'Идейные соображения'),
(4, 'news4.svg', 'Показатели успешности социально-экономического развития', 'Принимая во внимание показатели успешности, социально-экономическое развитие играет', '2021-06-05', 'Принимая во внимание'),
(9, 'news1.svg', 'Открытие нового магазина', 'Разнообразный и богатый опыт говорит нам, что консультация с широким активом требует от нас анализа анализа существующих паттернов поведения', '2021-06-05', 'Разнообразный и богатый'),
(10, 'news2.svg', 'Работа в праздничные дни', 'Принимая во внимание показатели успешности, социально-экономическое развитие играет определяющее значение для вывода текущих активов', '2021-06-05', 'Принимая во внимание'),
(11, 'news3.svg', 'Идейные соображения', 'Идейные соображения высшего порядка, а также семантический разбор внешних противодействий позволяет выполнить важные задания по разработке прогресса профессионального сообщества', '2021-06-05', 'Идейные соображения'),
(12, 'news4.svg', 'Показатели успешности социально-экономического развития', 'Принимая во внимание показатели успешности, социально-экономическое развитие играет', '2021-06-05', 'Принимая во внимание');

-- --------------------------------------------------------

--
-- Структура таблицы `news_main`
--

CREATE TABLE `news_main` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news_main`
--

INSERT INTO `news_main` (`id`, `title`, `text`, `data`, `description`) VALUES
(1, 'Открытие нового магазина', 'Разнообразный и богатый опыт говорит нам, что консультация с широким активом требует от нас анализа анализа существующих паттернов поведения', '2021-06-05', 'Разнообразный и богатый опыт'),
(2, 'Работа в праздничные дни', 'Принимая во внимание показатели успешности, социально-экономическое развитие играет определяющее значение для вывода текущих активов', '2021-06-05', 'Принимая во внимание'),
(7, 'Открытие нового магазина', 'Разнообразный и богатый опыт говорит нам, что консультация с широким активом требует от нас анализа анализа существующих паттернов поведения', '2021-06-05', 'Разнообразный и богатый опыт'),
(8, 'Работа в праздничные дни', 'Принимая во внимание показатели успешности, социально-экономическое развитие играет определяющее значение для вывода текущих активов', '2021-06-05', 'Принимая во внимание'),
(9, 'Открытие нового магазина', 'Разнообразный и богатый опыт говорит нам, что консультация с широким активом требует от нас анализа анализа существующих паттернов поведения', '2021-06-05', 'Разнообразный и богатый опыт'),
(10, 'Открытие нового магазина', 'Разнообразный и богатый опыт говорит нам, что консультация с широким активом требует от нас анализа анализа существующих паттернов поведения', '2021-06-05', 'Разнообразный и богатый опыт');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviews` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_interest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_money` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `image`, `category2`, `category3`, `category`, `title`, `rating`, `star1`, `star2`, `star3`, `star4`, `star5`, `reviews`, `price1`, `price2`, `discount_interest`, `discount_money`, `description`) VALUES
(1, 'image18.png', 'Новинка', 'Хит продаж', 'Сингвей', 'Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)677888', '15', 'star.svg', 'star.svg', 'star.svg', 'star.svg', 'star.svg', '66', '5400', '4990', '20', '1000', 'dsdfg'),
(10, 'image18.png', 'Новинка', 'Хит продаж', 'Сингвей', 'Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)677888', '15', 'star.svg', 'star.svg', 'star.svg', 'star.svg', 'star.svg', '66', '5400', '4990', '20', '1000', 'dsdfg'),
(11, 'image18.png', 'Новинка', 'Хит продаж', 'Сингвей3', 'Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)677888fgdfgdf', '155', 'star.svg', 'star.svg', 'star.svg', 'star.svg', 'star.svg', '20', '10000', '5000', '50', '5000', 'dsdfg'),
(12, 'image18.png', 'Новинка', 'Хит продаж', 'Сингвей2', 'Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)677888323423', '19', 'star.svg', 'star.svg', 'star.svg', 'star.svg', 'star.svg', '50', '4800', '3600', '25', '1200', 'dsdfg'),
(13, 'image18.png', 'Новинка', 'Хит продаж', 'Сингвей4', 'Гироскутер Smart Balance Well 6.5 Хип-Хоп (АКВАЗАЩИТА)', '80', 'star.svg', 'star.svg', 'star.svg', 'star.svg', '', '66', '6000', '5400', '10', '600', 'dsdfg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `admin2`
--
ALTER TABLE `admin2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news_main`
--
ALTER TABLE `news_main`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `admin2`
--
ALTER TABLE `admin2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `news_main`
--
ALTER TABLE `news_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
