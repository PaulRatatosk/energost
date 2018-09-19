-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 19 2018 г., 19:23
-- Версия сервера: 5.5.48
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `energost_new`
--

-- --------------------------------------------------------

--
-- Структура таблицы `general_table`
--

CREATE TABLE IF NOT EXISTS `general_table` (
  `id` int(11) NOT NULL,
  `specification_site` text NOT NULL,
  `specification_contacts` text NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `admin_login` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `general_table`
--

INSERT INTO `general_table` (`id`, `specification_site`, `specification_contacts`, `telephone`, `e_mail`, `admin_login`, `admin_password`) VALUES
(1, 'Компания ООО «ЭНЕРГО-СТРОЙ» основана в 2014 году. Основной род деятельности – техническое обследование, проектирование и строительство теплоэнергетических объектов, таких как котельные, тепловые пункты и тепловые сети.\r\n\r\nОсновное преимущество нашей компании на рынке это выполнение проектов высококлассными специалистами с использованием современного материально-технического обеспечения, что позволяет проектировать объекты с наименьшими временными и материальными затратами. Индивидуальный подход к заказчику и задаче, включающий в себя тщательное изучение спецификации проекта и проработку возможных путей проектирования тепловых пунктов и их возведения. Подбор оптимальных с точки зрения затрат и эффективности вариантов строительства.\r\n\r\nСреди клиентов ООО «Энерго-Строй»: Правительство г. Москвы, ОАО «Газпром», ОАО «МОЭК», ООО «Мортон» и многие другие.\r\n\r\nЗа время своей работы нами выполнены проектные проекты по более чем 10 объектам.', 'Офис ООО "ЭНЕРГО-СТРОЙ" расположен в бизнес парке "Румянцево", корпус А, 2 офисный подъезд, 6 этаж. Добраться до нас можно на метро: 1-й вагон из центра, станция метро Румянцево или на личном транспорте по Киевскому шоссе. В здании бизнес парка пропускная система, не забудьте взять с собой паспорт.  ', '+7 (495) 240-54-08', 'info@energost.su', 'admin', '96e79218965eb72c92a549dd5a330112');

-- --------------------------------------------------------

--
-- Структура таблицы `img_acknowledgment`
--

CREATE TABLE IF NOT EXISTS `img_acknowledgment` (
  `id` int(11) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_acknowledgment`
--

INSERT INTO `img_acknowledgment` (`id`, `path`) VALUES
(12, 'acknowledgment1.jpg'),
(13, 'acknowledgment2.jpg'),
(15, 'acknowledgment3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `img_project1`
--

CREATE TABLE IF NOT EXISTS `img_project1` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_project1`
--

INSERT INTO `img_project1` (`id`, `path`) VALUES
(2, 'P1120701.JPG');

-- --------------------------------------------------------

--
-- Структура таблицы `img_project2`
--

CREATE TABLE IF NOT EXISTS `img_project2` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_project2`
--

INSERT INTO `img_project2` (`id`, `path`) VALUES
(1, 'P1120469.JPG');

-- --------------------------------------------------------

--
-- Структура таблицы `img_resolution`
--

CREATE TABLE IF NOT EXISTS `img_resolution` (
  `id` int(11) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img_resolution`
--

INSERT INTO `img_resolution` (`id`, `path`) VALUES
(11, 'rs.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL,
  `short_content` varchar(255) NOT NULL,
  `specification` text NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `short_content`, `specification`, `path`) VALUES
(1, 'Котельная мощностью 32, 7 МВт. г. Нытва, ул. Б. Матигорова', '', 'P1120652.JPG'),
(2, 'Котельная, мощностью 32, 7 МВт. г. Нытва, ул. Металлургов 4', '', 'P1120588.JPG'),
(3, 'Капитальный ремонт жилого дома, г. Москва, ул. Николоямская 9', '', '20180124_091030.jpg'),
(4, 'Капитальный ремонт жилого дома, г. Москва, ул.Николоямская 39-43 к.2', '', '20180124_092806.jpg'),
(5, 'Капитальный ремонт жилого дома № 18, г. Москва, ул. Станиславского', '', '20180124_094355.jpg'),
(6, 'Капитальный ремонт жилого дома №12 к3, г. Москва, ул. Маршала Рыбалко', '', 'P71024-144945.jpg'),
(7, 'Капитальный ремонт жилого дома, г. Москва, проезд Шокальского, 4', '', 'IMG-20180129-WA0000.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `general_table`
--
ALTER TABLE `general_table`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `img_acknowledgment`
--
ALTER TABLE `img_acknowledgment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `img_project1`
--
ALTER TABLE `img_project1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `img_project2`
--
ALTER TABLE `img_project2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `img_resolution`
--
ALTER TABLE `img_resolution`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `general_table`
--
ALTER TABLE `general_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `img_acknowledgment`
--
ALTER TABLE `img_acknowledgment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `img_project1`
--
ALTER TABLE `img_project1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `img_project2`
--
ALTER TABLE `img_project2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `img_resolution`
--
ALTER TABLE `img_resolution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
