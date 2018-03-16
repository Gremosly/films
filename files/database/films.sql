-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 09 2018 г., 23:39
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `films`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `filmId` int(11) NOT NULL,
  `filmName` text COLLATE utf8_bin NOT NULL,
  `categoryId` int(11) NOT NULL DEFAULT '0',
  `year` int(11) NOT NULL DEFAULT '2000',
  `country` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `poster` text COLLATE utf8_bin NOT NULL,
  `video` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`filmId`, `filmName`, `categoryId`, `year`, `country`, `description`, `poster`, `video`) VALUES
(4, 'John Wick', 0, 2014, 'USA', 'Джон Уик на первый взгляд самый обычный среднестатистический американец, который ведет спокойную мирную жизнь. Однако мало кто знает, что в свое время он был наемным убийцей, причем одним из лучших профессионалов в своем деле. Сейчас он живет тихой спокойной жизнью, но после того, как преступник угоняет его любимый «Мустанг», 1969 года выпуска, при этом убив его собаку Дейзи, которая была единственным напоминаем об умершей супруге, Джон вынужден вернуться к своему прошлому. Теперь Уик начинает охоту на человека, который имел неосторожность перейти ему дорогу, и он готов на все, чтобы отомстить ему...', 'https://upload.wikimedia.org/wikipedia/ru/e/e5/%D0%94%D0%B6%D0%BE%D0%BD_%D0%A3%D0%B8%D0%BA.jpg', 'http://pandastream.cc/video/c909d94c4b2ce24c/iframe'),
(5, 'Shot Caller', 0, 2017, 'USA', 'Около десяти лет назад Джейкоб Харлон был успешным предпринимателем и примерным семьянином. Он жил в хорошем доме с любимой супругой и прекрасным сыном. Но однажды в его жизни произошла ужасная трагедия, которая полностью перевернула его привычную жизнь. Роковая ошибка Джейкоба приводит к автомобильной аварии, которая забирает жизнь человека. В итоге Харлона приговаривают в тюремному заключению, и он оказывается в местах лишения свободы, где царят свои законы и правила. Мужчина оказывается перед выбором: либо сотрудничать с авторитетами, либо стать жертвой постоянного насилия. Конечно же, он не хочет стать объектом для издевательств, и выбирает другой путь. Вот только Джейкоб еще не понимает, что дороги назад у него уже нет, и не появится, даже когда он вернется на свободу...', 'http://filmstar.uz/uploads/posts/2017-06/1496828871_9103531.jpg', '../../files/movies/Vystrel_v_pustotu_480.mp4');

-- --------------------------------------------------------

--
-- Структура таблицы `tvserials`
--

CREATE TABLE `tvserials` (
  `tvSerialId` int(11) NOT NULL,
  `tvSerialName` text COLLATE utf8_bin NOT NULL,
  `categoryId` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `country` text COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `picture` text COLLATE utf8_bin NOT NULL,
  `video` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `tvserials`
--

INSERT INTO `tvserials` (`tvSerialId`, `tvSerialName`, `categoryId`, `year`, `country`, `description`, `picture`, `video`) VALUES
(1, 'Breaking Bad', 0, 2008, 'USA', 'Школьный учитель химии Уолтер Уайт узнаёт, что болен раком лёгких. Учитывая сложное финансовое состояние дел семьи, а также перспективы, Уолтер решает заняться изготовлением метамфетамина. Для этого он привлекает своего бывшего ученика Джесси Пинкмана, когда-то исключённого из школы при активном содействии Уайта. Пинкман сам занимался «варкой мета», но накануне, в ходе рейда УБН, он лишился подельника и лаборатории…', 'https://image3.mouthshut.com/images/imagesp/925740313s.jpg', '-нет-'),
(2, 'Lost', 0, 2004, 'USA', 'Приключенческий и загадочный сериал-катастрофа повествует о том, как люди разных полов, возрастов и социальной принадлежности летели на авиалайнере. Полёт закончился тем, что самолёт потерпел крушение над Тихим океаном и упал на один из островов. \r\nЧасть пассажиров погибла, но 48 человек чудом выжили. Теперь им придётся каждый день бороться за свою жизнь. Странный остров, на котором они оказались, очень опасен и всех этих людей практически на каждом шагу подстерегает смерть. \r\nОказавшись в такой экстремально ситуации, все люди ведут себя по-разному. В них начинают проявляться качества, о наличии в себе которых не знали даже они сами. Кто-то боится, теряет уверенность в себе. А кто-то наоборот обнаруживает в себе лидерские качества, стремится выжить сам и помогает сделать это другим. \r\nТеперь задача всех, кто оказался на этом острове, остаться в живых.', 'http://lostseries.ru/sites/default/files/poster/lost-season-1.jpg', '-нет-');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `login`, `password`) VALUES
(1, 'Джон', '1234'),
(2, 'crazy', 'boy');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD KEY `filmId` (`filmId`);

--
-- Индексы таблицы `tvserials`
--
ALTER TABLE `tvserials`
  ADD KEY `tvSerialId` (`tvSerialId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD KEY `id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `filmId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `tvserials`
--
ALTER TABLE `tvserials`
  MODIFY `tvSerialId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
