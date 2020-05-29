-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 29 2020 г., 09:39
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fotogallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `data_foto`
--

CREATE TABLE `data_foto` (
  `id` int(11) NOT NULL,
  `hash_file` varchar(256) COLLATE utf8_bin NOT NULL,
  `name_file` varchar(256) COLLATE utf8_bin NOT NULL,
  `view_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `data_foto`
--

INSERT INTO `data_foto` (`id`, `hash_file`, `name_file`, `view_file`) VALUES
(16, '135a44e4d4c648031e16b5c4ccdfc6d6', '1.jpeg', 6),
(28, '32d4b524ab0d3e86cb27af55ed5937da', '2.jpeg', 5),
(30, '3e834fe44ae9ce083dae7ac4c481365d', '3.jpeg', 3),
(31, '396bc28a76b3e79ca4ac295244275a8b', '4.jpeg', 5),
(32, 'a1e95b26ce3ded8ce58ec7f1fbe8243c', '5.jpeg', 0),
(33, 'c3f52a04aabb474bf83aeb4797a332ce', '6.jpeg', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `data_foto`
--
ALTER TABLE `data_foto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `data_foto`
--
ALTER TABLE `data_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
