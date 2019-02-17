# ************************************************************
# Sequel Pro SQL dump
# Версия 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Адрес: localhost (MySQL 5.7.23)
# Схема: look
# Время создания: 2019-02-17 11:02:51 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Дамп таблицы otzivi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `otzivi`;

CREATE TABLE `otzivi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `text` longtext,
  `status` varchar(5) DEFAULT '0',
  `day` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `otzivi` WRITE;
/*!40000 ALTER TABLE `otzivi` DISABLE KEYS */;

INSERT INTO `otzivi` (`id`, `name`, `url`, `text`, `status`, `day`)
VALUES
	(6,'Андрей','https://vk.com/xakerfsb','Супер видеограф','1','2019-02-16');

/*!40000 ALTER TABLE `otzivi` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы pages_data
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages_data`;

CREATE TABLE `pages_data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `work_text` longtext,
  `about_text` longtext,
  `about_name` longtext,
  `about_text_two` longtext,
  `peoples_name` longtext,
  `peoples_text` longtext,
  `contact_name` longtext,
  `contact_text` longtext,
  `vk_script` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `pages_data` WRITE;
/*!40000 ALTER TABLE `pages_data` DISABLE KEYS */;

INSERT INTO `pages_data` (`id`, `work_text`, `about_text`, `about_name`, `about_text_two`, `peoples_name`, `peoples_text`, `contact_name`, `contact_text`, `vk_script`)
VALUES
	(1,'                                 Здравствуйте, дорогие друзья! Я очень рад, что Вы заглянули на мой сайт, а так же очень благодарен Вам за внимание.\r\n\r\nВесь материал сделан с душой и от чистого сердца, и если Вам что-либо понравилось, пожалуйста, поделитесь записью на Своей странице в соц. сетях, пусть Ваши друзья знают, что Вы оценили действительно качественное творчество.\r\n                            ','                                 Дорогие друзья, этот сайт является местом рождения и точкой отправки в цифровую жизнь самого нового творчества ФЕВРАЛЬСКОГО, и здесь же публикуются результаты работы Творческого Объединения \"Февральский Взгляд\". Также Вы можете найти содействие и помощь в создании Вашего собственного клипа.\r\n                            ','                                 И так..\r\n                            ','                                Если сказать несколько слов обо мне, то я:\r\n\r\n                                Профессиональный видеоогроф.\r\n                                Креативный и веселый человек.\r\n                                Всегда передаю эмоции свой отснятый видеоматериал.\r\n                                Работаю только на дорогом оборудовании.\r\n\r\n                            ','                                 Отзывы моих клиентов\r\n                            ','                                 По настоящему качество работы сможет оценить лишь человек для которого работы производятся, поэтому тут можно оставлять отзывы по моей работе, будет приятно мне почитать, а так же будет интересно почитать отзывы для будущих клиентов. При написании отзыва прошу оставлять свою ссылку в ВК или в инстаграмм, чтобы другие люди могли посмотреть на Вас, что Вы реальны и существуете. Спасибо Вам заранее за внимание и уделенное время на написание или чтение отзывов.\r\n                            ','                                 Связь со мной\r\n                            ','                                Я люблю общение, в общении рождается истина. Поэтому я с удовольствием оставляю самые удобные источники связи со мной, пишите мне, звоните, с удовольствием обсужу с Вами все детали съемки или проекта\r\n                            ','                                <script type=\"text/javascript\" src=\"https://vk.com/js/api/openapi.js?160\"></script>\r\n\r\n                                <!-- VK Widget -->\r\n<div id=\"vk_community_messages\"></div>\r\n<script type=\"text/javascript\">\r\n    VK.Widgets.CommunityMessages(\"vk_community_messages\", 153380968, {expanded: \"0\",tooltipButtonText: \"Есть вопрос к видеоографу?\"});\r\n</script>\r\n                            ');

/*!40000 ALTER TABLE `pages_data` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `login`, `password`, `name`, `adress`, `phone`, `email`)
VALUES
	(1,'admin','admin','Евгений Сафтаров','Краснодарский край, поселок Гирей, улица Ленина','+7 (900)2429402 ','createsite2016@gmail.com');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы work
# ------------------------------------------------------------

DROP TABLE IF EXISTS `work`;

CREATE TABLE `work` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `day` date DEFAULT NULL,
  `status` int(5) DEFAULT '1',
  `sort` int(255) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `work` WRITE;
/*!40000 ALTER TABLE `work` DISABLE KEYS */;

INSERT INTO `work` (`id`, `name`, `link`, `day`, `status`, `sort`)
VALUES
	(11,'Anlaym - Лунная пыль','https://www.youtube.com/watch?v=FosKso3eu2c','2019-02-16',1,1),
	(12,'Алексей и Виктория','https://www.youtube.com/watch?v=uP0AsmgCWvU','2019-02-16',1,2),
	(13,'Тысяча невест','https://www.youtube.com/watch?v=xyj4ERKLQ-c','2019-02-16',1,3),
	(14,'Флобера & Focuss','https://www.youtube.com/watch?v=0hD4O92SFUU','2019-02-16',0,4),
	(15,'CrosVord - Приглашение','https://www.youtube.com/watch?v=7Zdfex9CK2c','2019-02-16',0,5),
	(17,'День Энергетика','https://www.youtube.com/watch?v=yu6807yXqyA','2019-02-16',0,6),
	(18,'Твоя история','https://www.youtube.com/watch?v=B_srqvPhnok','2019-02-16',1,7),
	(19,'Вячеслав и Ксения','https://www.youtube.com/watch?v=2o8G9MWKvho','2019-02-16',1,8),
	(20,'Иван и Елизаветта ','https://www.youtube.com/watch?v=ndm-MSyjJ4Q','2019-02-16',1,9),
	(21,'Профсоюз','https://www.youtube.com/watch?v=yqfc1gh8_KY','2019-02-16',0,10),
	(22,'Денис и Татьяна','https://www.youtube.com/watch?v=AZl5rH_H8AY','2019-02-16',1,11),
	(23,'Финальная песня (КМК)','https://www.youtube.com/watch?v=kY7j71lAY_U','2019-02-16',1,12),
	(24,'Sofi Arbuzik, AnNi feat SG (Magruff) - Тяпа-тяпа','https://www.youtube.com/watch?v=Pufx5o3IjYg','2019-02-16',1,13),
	(25,'Сергей и Алина','https://www.youtube.com/watch?v=CUZDTGtW5jw','2019-02-16',1,14),
	(26,'Николай и Юля','https://www.youtube.com/watch?v=P0293eadJ-E','2019-02-16',1,15),
	(27,'Кропоткинский Медицинский Колледж 411 группа','https://www.youtube.com/watch?v=zFijkyi298g','2019-02-16',1,16),
	(28,'Вкима - Рядом с Ней','https://www.youtube.com/watch?v=K-SiLgEXA_8','2019-02-16',1,17),
	(29,'Вкима - В присутствии лИса','https://www.youtube.com/watch?v=ze15phiYbaw','2019-02-16',1,18),
	(30,'Вкима - Она мой путь','https://www.youtube.com/watch?v=8FrKn74gzLU','2019-02-16',1,19),
	(31,'Николай и Анна. Пешеходный переход.','https://www.youtube.com/watch?v=qeccbYMEFss','2019-02-16',0,20),
	(32,'История Колледжа (Кропоткинский Медицинский Колледж)','https://www.youtube.com/watch?v=vAQXeZ2SHmw','2019-02-16',0,21),
	(33,'S-FAME & КАRЯ - Скажи что такое любовь','https://www.youtube.com/watch?v=kQQXOx5nQ24','2019-02-16',0,22),
	(34,'Борис и Наталья','https://www.youtube.com/watch?v=j886zcHloRU','2019-02-16',0,23),
	(35,'Олег и Дарья','https://www.youtube.com/watch?v=OLVvCLKqZwc','2019-02-16',0,24),
	(36,'День знаний (Кропоткинский Медицинский Колледж)','https://www.youtube.com/watch?v=aA43GVt5Y9g','2019-02-16',1,25),
	(37,'Февральский - Найди Меня','https://www.youtube.com/watch?v=1KN41Ai765w','2019-02-16',1,26),
	(38,'Социальный ролик \"Профилактика абортов\" КМК','https://www.youtube.com/watch?v=uLSGkqTzUj8','2019-02-16',0,27),
	(39,'Февральский - Багровые зори [Алые тона]','https://www.youtube.com/watch?v=nsYYIETZAz4','2019-02-16',0,28),
	(40,'Февральский - Гадкий утёнок [Алые тона]','https://www.youtube.com/watch?v=VDJpbUFRcyg','2019-02-16',0,29),
	(41,'Февральский - Алые паруса [Алые тона]','https://www.youtube.com/watch?v=pCFAleyDESU','2019-02-16',0,30),
	(42,'Зима сегодня [DARI film, Февральский Взгляд]','https://www.youtube.com/watch?v=cRof1NUCJPU','2019-02-16',0,31),
	(43,'Кислород [DARI film, Февральский Взгляд]','https://www.youtube.com/watch?v=_Z46XvVbKt4','2019-02-16',0,32),
	(44,'Мелодия души [DARI film, Февральский Взгляд]','https://www.youtube.com/watch?v=y9IqPEejGNI','2019-02-16',0,33),
	(45,'Февральский - Домой в Париж [Алые тона]','https://www.youtube.com/watch?v=0gXtRJxpYL0','2019-02-16',0,34),
	(46,'ALEX MERC ft ЛарисКа - Увязли во лжи [Февральский Взгляд]','https://www.youtube.com/watch?v=osg_9Tl55-Y','2019-02-16',0,35),
	(47,'DabStep Counter Dance [Февральский Взгляд]','https://www.youtube.com/watch?v=0XQmwQLHCA4','2019-02-16',0,36),
	(48,'Юрий Копиенко и Мария Базлюк - Расстояние [Февральский Взгляд]','https://www.youtube.com/watch?v=qrkSGkbmlzY','2019-02-16',0,37),
	(49,'Dok - Мы далеко [Февральский Взгляд production]','https://www.youtube.com/watch?v=ybVMXZj68BM','2019-02-16',0,38);

/*!40000 ALTER TABLE `work` ENABLE KEYS */;
UNLOCK TABLES;


# Дамп таблицы zayavki
# ------------------------------------------------------------

DROP TABLE IF EXISTS `zayavki`;

CREATE TABLE `zayavki` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `kontakt` varchar(255) DEFAULT NULL,
  `text` longtext,
  `day` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
