-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.32-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Дамп структуры для таблица practice.scores
CREATE TABLE IF NOT EXISTS `scores` (
  `Course` int(11) NOT NULL,
  `Discipline` varchar(255) NOT NULL,
  `Evaluation` varchar(20) NOT NULL,
  CONSTRAINT `CK_Оценка` CHECK (`Evaluation` in ('2','3','4','5','зачёт','не зачёт'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Дамп данных таблицы practice.scores: ~12 rows (приблизительно)
INSERT INTO `scores` (`Course`, `Discipline`, `Evaluation`) VALUES
	(2, 'Вычислительные системы, сети и телекоммуникации (ВССТ)', '5'),
	(2, 'Информационные системы и технологии(ИСиТ)', '5'),
	(2, 'Информатика и программирование(ИиП)', '5'),
	(2, 'Операционные системы(ОС)', '5'),
	(2, 'Численные методы(ЧМ)', '5'),
	(2, 'Базы данных(БД)', '5'),
	(2, 'Теория вероятностей и математическая статистика(ТВиМС)', '5'),
	(2, 'Базы данных(БД)', '5'),
	(2, 'Бухгалтерский учёт(БУ)', '5'),
	(2, 'Психология', '5'),
	(2, 'Физ-ра', '5'),
	(2, 'Логика', '5');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
