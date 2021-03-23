/* Код SQL для создания базы данных gallery

DROP DATABASE IF EXISTS gallery;
CREATE DATABASE gallery;
USE gallery;

DROP TABLE IF EXISTS images;
CREATE TABLE images (
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(50),
	filename VARCHAR(50)
);

INSERT INTO images VALUES
	(1, 'Img 1', '/gallery/images/1.jpg'),
	(3, 'Img 2', '/gallery/images/2.jpg'),
	(5, 'Img 3', '/gallery/images/3.jpg'),
	(8, 'Img 4', '/gallery/images/4.jpg');

*/




















