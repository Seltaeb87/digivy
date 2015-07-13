CREATE TABLE `vinyl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `release_date` date DEFAULT NULL,
  `recorded_at` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `length` time DEFAULT NULL,
  `label` varchar(100) NOT NULL,
  `producer` varchar(100) NOT NULL,
  `album_cover` varchar(120) NOT NULL,
  PRIMARY KEY (`id`);