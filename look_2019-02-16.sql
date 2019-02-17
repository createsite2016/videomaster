# ************************************************************
# Sequel Pro SQL dump
# Версия 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Адрес: localhost (MySQL 5.7.23)
# Схема: look
# Время создания: 2019-02-16 16:23:31 +0000
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `work` WRITE;
/*!40000 ALTER TABLE `work` DISABLE KEYS */;

INSERT INTO `work` (`id`, `name`, `link`, `day`, `status`)
VALUES
	(11,'Anlaym - Лунная пыль','https://www.youtube.com/watch?v=FosKso3eu2c','2019-02-16',1),
	(12,'Алексей и Виктория','https://www.youtube.com/watch?v=uP0AsmgCWvU','2019-02-16',1),
	(13,'Тысяча невест','https://www.youtube.com/watch?v=xyj4ERKLQ-c','2019-02-16',1),
	(14,'Флобера & Focuss','https://www.youtube.com/watch?v=0hD4O92SFUU','2019-02-16',0),
	(15,'CrosVord - Приглашение','https://www.youtube.com/watch?v=7Zdfex9CK2c','2019-02-16',1),
	(17,'День Энергетика','https://www.youtube.com/watch?v=yu6807yXqyA','2019-02-16',1),
	(18,'Твоя история','https://www.youtube.com/watch?v=B_srqvPhnok','2019-02-16',1),
	(19,'Вячеслав и Ксения','https://www.youtube.com/watch?v=2o8G9MWKvho','2019-02-16',1),
	(20,'Иван и Елизаветта ','https://www.youtube.com/watch?v=ndm-MSyjJ4Q','2019-02-16',1),
	(21,'Профсоюз','https://www.youtube.com/watch?v=yqfc1gh8_KY','2019-02-16',0);

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
