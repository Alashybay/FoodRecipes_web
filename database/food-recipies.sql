-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 28 2024 г., 13:16
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `food-recipies`
--

-- --------------------------------------------------------

--
-- Структура таблицы `food_recipes`
--

CREATE TABLE `food_recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `additional_info` varchar(120) DEFAULT NULL,
  `author` varchar(110) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `food_recipes`
--

INSERT INTO `food_recipes` (`id`, `title`, `description`, `additional_info`, `author`, `category_name`) VALUES
(19, 'New food', 'some new things', '1, do 2, bla bla', '', ''),
(21, 'ALikhan\'s', 'foooood!', 'hello world', '', ''),
(22, 'new', 'some', 'saf', 'Alikhan admin', 'Breakfast'),
(23, 'cool', 'is it worth it', 'i like to train', 'Alikhan admin', 'Dinner'),
(24, 'asf', 'as', 'asdf', 'Alikhan admin', 'Salad'),
(25, 'New Show from kila', 'the best ever food you will ever try in your live', 'its me )', 'Alikhan admin', 'Appetizer');

-- --------------------------------------------------------

--
-- Структура таблицы `recipe_categories`
--

CREATE TABLE `recipe_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `recipe_categories`
--

INSERT INTO `recipe_categories` (`id`, `title`) VALUES
(1, 'Vegetarian'),
(10, 'Breakfast'),
(11, 'Lunch'),
(12, 'Dinner'),
(13, 'Appetizer'),
(14, 'Salad'),
(15, 'Main-course'),
(16, 'Side-dish'),
(17, 'Dessert'),
(18, 'Snack'),
(19, 'Soup'),
(20, 'Holiday ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `is_admin`) VALUES
(19, 'Alikhan', 'admin', 'admin@gmail.com', '$2y$10$W3nJ3JUOhIPOL17Ktlj2buNZZXpw/cP//ySkTtF2U6n3JkiVDP/rO', 1),
(29, 'change', 'asdf', 'asd@gmail.com', '$2y$10$275oMfPFqj1gO3Xix2QXWeRLqY7tzOsx3hyVjUdOLEd0TtEajtfWq', 0),
(31, 'Alikhan', 'Guest', 'guest@gmail.com', '$2y$10$UCQfwtP/CDHUeQDlZbDEkOYU1nyI8kp8aVUrSUX0h9PwmcwIMXWHi', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `food_recipes`
--
ALTER TABLE `food_recipes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `recipe_categories`
--
ALTER TABLE `recipe_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `food_recipes`
--
ALTER TABLE `food_recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `recipe_categories`
--
ALTER TABLE `recipe_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
