CREATE DATABASE test;

use test;

CREATE TABLE weather_data (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	cityname VARCHAR(30) NOT NULL,
	mintemp INT(3),
	maxtemp INT(3),
	date TIMESTAMP
);