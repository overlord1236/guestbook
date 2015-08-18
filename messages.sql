-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 18 2015 г., 13:36
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ghostbook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `site` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL,
  `ip` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`name`, `email`, `site`, `date`, `message`, `ip`, `id`) VALUES
('Dima', 'dimaromanov2010@gmail.com', 'mysite.com', '2015-08-17 16:26:00', 'Some message.', '127.0.0.1', 1),
('Vova', 'Vova@mail.ru', 'vova.com', '2015-08-17 16:46:00', 'Some message from Vova.', '127.0.0.1', 2),
('Evgen', 'dima_romanov@i.ua', 'dima.tu', '2015-08-17 17:09:00', 'Some message from Dima.', '127.0.0.1', 3),
('Boris', 'boris@gmail.com', 'boris-site.com', '2015-08-17 17:10:00', 'Some message from Boris.', '127.0.0.1', 4),
('Mark', 'mark@mail.ru', 'mark.ru', '2015-08-17 17:11:00', 'Some message from Mark.', '127.0.0.1', 5),
('Evgen', 'Evgen@gmail.com', 'evgen-site.com', '2015-08-17 17:11:00', 'Some message from Evgen.', '127.0.0.1', 6),
('Dima', 'dima_romanov86@mail.ru', 'dima.ru', '2015-08-17 17:14:00', 'Somamessage from Dima.', '127.0.0.1', 7),
('Bogdan', 'bogdan@gmail.com', 'bogdan.ru', '2015-08-17 17:15:00', 'Some message from Bogdan.', '127.0.0.1', 8),
('Vladimir', 'vladimir@gmail.com', 'site.com', '2015-08-17 18:09:00', 'Some message from Vladimir.', '127.0.0.1', 9),
('Evgen', 'somemail@mail.ru', 'site.com', '2015-08-17 19:37:00', 'Some message from Evgen', '127.0.0.1', 10),
('Vasya', 'vasya@mail.ru', 'vasya-site.ru', '2015-08-18 12:18:00', 'Some message from Vasya', '127.0.0.1', 11),
('Vasya', 'vasya@mail.ru', 'vasya-site.ru', '2015-08-18 12:28:00', 'Some message from Vasya', '127.0.0.1', 12),
('Vasya', 'dimaromanov2010@gmail.com', 'dima.ru', '2015-08-18 13:09:00', 'Some', '127.0.0.1', 13),
('Vasya', 'dimaromanov2010@gmail.com', 'dima.ru', '2015-08-18 13:12:00', 'Some', '127.0.0.1', 14),
('Vasya', 'dimaromanov2010@gmail.com', 'dima.ru', '2015-08-18 13:13:00', 'Some', '127.0.0.1', 15),
('Vasya', 'dimaromanov2010@gmail.com', 'dima.ru', '2015-08-18 13:13:00', 'Some', '127.0.0.1', 16),
('Vasya', 'dimaromanov2010@gmail.com', 'dima.ru', '2015-08-18 13:13:00', 'Some', '127.0.0.1', 17),
('Vasya', 'dimaromanov2010@gmail.com', 'dima.ru', '2015-08-18 13:14:00', 'New', '127.0.0.1', 18),
('Vasya', 'dimaromanov2010@gmail.com', 'dima.ru', '2015-08-18 13:14:00', 'New2', '127.0.0.1', 19),
('Vasya', 'dimaromanov2010@gmail.com', 'dima.ru', '2015-08-18 13:17:00', 'New2', '127.0.0.1', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
