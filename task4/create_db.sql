CREATE DATABASE `people`;
USE people;
CREATE TABLE `users` (
                           `id` int(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                           `name` varchar(255),
                           `surname` varchar(255)
);