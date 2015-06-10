-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 10 2015 г., 12:31
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_diploma`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `size_baggage` varchar(200) NOT NULL,
  `number_seats` int(100) NOT NULL,
  `type_car` varchar(200) NOT NULL,
  `color` varchar(200) NOT NULL,
  `animals` varchar(100) NOT NULL,
  `smoke` varchar(100) NOT NULL,
  `temp` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `user_id`, `brand`, `model`, `photo`, `size_baggage`, `number_seats`, `type_car`, `color`, `animals`, `smoke`, `temp`) VALUES
(1, 1, 'Mazda', 'cx7', 'car3.png', 'дорожня сумка', 4, 'sedan', 'red', 'З тваринами заборонено.', 'У машині не курять.', 0),
(3, 3, 'BMW', 'X5', 'car555b86e9d90c3.jpg', 'дорожня сумка', 4, 'SUV', 'білий', 'З тваринами заборонено', 'В авто не курять', 0),
(4, 4, 'Audi', '6', 'car555b89acbd0a2.jpg', 'Дорожня сумка', 4, 'sedan', 'black', 'З тваринами заборонено', 'В авто не курять', 0),
(5, 12, 'Chevrolet ', 'Volt', 'car555b8c73aa00a.jpg', 'Средня дорожня сумка', 0, 'sedan', 'red', 'Дозволено з тваринами', 'В авто не курять', 0),
(6, 13, 'KIA', 'Rio', 'car555b8e2b4d118.jpg', 'Мала сумка', 0, 'sedan', 'blue', 'Дозволено з тваринами', 'В авто курять', 0),
(10, 3, 'Mercedes', 'vito', 'car556e17cb5ec42.jpg', 'Средня дорожня сумка', 0, 'minivan', 'blue', 'З тваринами заборонено', 'В авто не курять', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `trips`
--

CREATE TABLE IF NOT EXISTS `trips` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `car_id` int(100) NOT NULL,
  `starting_point` varchar(200) NOT NULL,
  `finish_point` varchar(200) NOT NULL,
  `waypoint1` varchar(200) DEFAULT NULL,
  `waypoint2` varchar(200) DEFAULT NULL,
  `waypoint3` varchar(200) DEFAULT NULL,
  `waypoint4` varchar(200) DEFAULT NULL,
  `waypoint5` varchar(200) DEFAULT NULL,
  `price` int(100) NOT NULL,
  `seats` int(100) NOT NULL,
  `data_first` date NOT NULL,
  `data_last` date NOT NULL,
  `time_first` time NOT NULL,
  `time_last` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Дамп данных таблицы `trips`
--

INSERT INTO `trips` (`id`, `user_id`, `car_id`, `starting_point`, `finish_point`, `waypoint1`, `waypoint2`, `waypoint3`, `waypoint4`, `waypoint5`, `price`, `seats`, `data_first`, `data_last`, `time_first`, `time_last`) VALUES
(20, 3, 3, 'Львів, Львівська область, Україна', 'Луганськ, Луганська область, Україна', 'Хмельницький, Хмельницька область, Україна', 'Житомир, Житомирська область, Україна', 'Дніпропетровськ, Дніпропетровська область, Україна', '', NULL, 160, 5, '2015-10-01', '2015-10-02', '07:00:00', '07:00:00'),
(21, 3, 3, 'Київ, місто Київ, Україна', 'Львів, Львівська область, Україна', 'Житомир, Житомирська область, Україна', '', NULL, NULL, NULL, 250, 4, '2015-06-04', '2015-06-04', '07:00:00', '11:00:00'),
(24, 4, 4, 'Київ, місто Київ, Україна', 'Львів, Львівська область, Україна', 'Житомир, Житомирська область, Україна', 'Хмельницький, Хмельницька область, Україна', 'Тернопіль, Тернопільська область, Україна', '', NULL, 230, 4, '2014-06-06', '2014-06-06', '13:00:00', '17:00:00'),
(25, 12, 5, 'Київ, місто Київ, Україна', 'Львів, Львівська область, Україна', 'Житомир, Житомирська область, Україна', 'Рівне, Рівненська область, Україна', '', '', '', 270, 4, '2015-06-04', '2015-06-04', '07:30:00', '10:45:00'),
(26, 13, 6, 'Київ, місто Київ, Україна', 'Львів, Львівська область, Україна', 'Біла Церква, Київська область, Україна', 'Вінниця, Вінницька область, Україна', 'Тернопіль, Тернопільська область, Україна', '', NULL, 210, 2, '2015-06-10', '2015-06-11', '22:00:00', '01:00:00'),
(28, 12, 5, 'Івано-Франківськ, Івано-Франківська область, Україна', 'Бурштин, Івано-Франківська область, Україна', 'Угринів, Івано-Франківська область, Україна', 'Галич, Івано-Франківська область, Україна', '', NULL, NULL, 15, 4, '2015-06-10', '2015-06-10', '13:00:00', '14:00:00'),
(29, 3, 3, 'Київ, місто Київ, Україна', 'Львівська область, Україна', 'Житомир, Житомирська область, Україна', 'Біла Церква, Київська область, Україна', '', NULL, NULL, 230, 4, '2015-05-01', '2015-05-01', '17:00:00', '21:00:00'),
(30, 3, 3, 'Івано-Франківськ, Івано-Франківська область, Україна', 'Бурштин, Івано-Франківська область, Україна', 'Галич, Івано-Франківська область, Україна', '', NULL, NULL, NULL, 15, 4, '2015-06-10', '2015-06-10', '17:00:00', '18:00:00'),
(32, 3, 10, 'Івано-Франківськ, Івано-Франківська область, Україна', 'Бурштин, Івано-Франківська область, Україна', 'Галич, Івано-Франківська область, Україна', '', '', '', '', 18, 4, '2015-06-10', '2015-06-10', '17:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` double NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `adress` text NOT NULL,
  `phone` double NOT NULL,
  `mail` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `driving_exp` int(100) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `avatarMini` varchar(200) NOT NULL,
  `confirm` int(100) NOT NULL,
  `accesses` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=371097026418780 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `adress`, `phone`, `mail`, `password`, `age`, `driving_exp`, `avatar`, `avatarMini`, `confirm`, `accesses`) VALUES
(3, ' Олександр', 'Петренко', 'м.Івано-Франківськ', 80977353623, 'test@gmail.com', '111111', '22', 4, 'ava555b877084e39.jpg', 'ava.png', 1, 2),
(4, 'Олег', 'Короташ', '', 80977354633, 'test2@gmail.com', '111111', '35', 11, 'ava555b89178280a.jpg', 'ava.png', 1, 2),
(12, 'Михайло ', 'Цимбалістий', 'Київ', 80977353677, 'mykolacymb@gmail.com', '977282', '33', 10, 'ava555b8ce8e1f7c.jpg', '', 1, 2),
(13, 'Остап ', 'Кудляк', '', 80977353627, 'ostapkudlyak@gmail.com', '977282', '', 0, 'ava555b8f23e2847.jpg', '', 1, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
