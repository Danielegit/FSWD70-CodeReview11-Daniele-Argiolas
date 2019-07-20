-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 20, 2019 alle 13:26
-- Versione del server: 10.1.38-MariaDB
-- Versione PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr11_daniele_argiolas_travelmatic`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `concert`
--

CREATE TABLE `concert` (
  `con_id` int(10) NOT NULL,
  `con_name` varchar(35) DEFAULT NULL,
  `con_date` date DEFAULT NULL,
  `con_time` varchar(20) DEFAULT NULL,
  `con_price` double(10,2) DEFAULT NULL,
  `con_pic` varchar(35) DEFAULT NULL,
  `FK_con_location` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `concert`
--

INSERT INTO `concert` (`con_id`, `con_name`, `con_date`, `con_time`, `con_price`, `con_pic`, `FK_con_location`) VALUES
(1, 'Metallica', '0000-00-00', '21:20', 35.92, 'img/conc1.jpg', 4),
(2, 'Iron Maiden', '2019-07-05', '21:20', 45.90, 'img/conc2.jpg', 4),
(4, 'Steve Vay', '2019-07-03', '21:20', 35.92, 'img/conc4.jpg', 4),
(6, 'Dream Theater', '2019-07-10', '17:30', 35.92, 'img/conc3.JPG', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `location`
--

CREATE TABLE `location` (
  `location_id` int(10) NOT NULL,
  `city` varchar(35) DEFAULT NULL,
  `zip` int(10) DEFAULT NULL,
  `address` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `location`
--

INSERT INTO `location` (`location_id`, `city`, `zip`, `address`) VALUES
(2, 'Madrid', 1220, 'Strada 3'),
(3, 'Vienna', 1220, 'Neuestrasse 24'),
(4, 'Vienna', 1030, 'Baumgasse 80'),
(5, 'Rome', 9003, 'Via Trastevere 345'),
(20, 'Paris', 33482, 'Boulevard De L Eaux 81');

-- --------------------------------------------------------

--
-- Struttura della tabella `restaurants`
--

CREATE TABLE `restaurants` (
  `rest_id` int(10) NOT NULL,
  `rest_name` varchar(35) DEFAULT NULL,
  `rest_phone` varchar(35) DEFAULT NULL,
  `rest_type` varchar(30) DEFAULT NULL,
  `rest_desc` varchar(500) DEFAULT NULL,
  `rest_web` varchar(30) DEFAULT NULL,
  `FK_location` int(10) DEFAULT NULL,
  `rest_pic` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `restaurants`
--

INSERT INTO `restaurants` (`rest_id`, `rest_name`, `rest_phone`, `rest_type`, `rest_desc`, `rest_web`, `FK_location`, `rest_pic`) VALUES
(1, 'Italia New Restaurant', '9066609666', 'Italian', 'Una delle nostre scelte top a Certosa di Pavia.A conduzione familiare, l Hotel Ristorante Italia vi accoglie in uno splendido casale del XVII secolo.', 'https://it.wikipedia.org/wiki/', 3, 'img/rest1.png'),
(2, 'Napoleon', '6547686886', 'Franch', 'Le France restaurant cest tre bon,de produits de la mer - la choucroute est ... 231 traveler reviews, 23 candid photos, and great deals for Saint-Jean-d\'Angely.', 'www.france.fr', 3, 'img/rest2.jpg'),
(3, 'Nor Restaurant', '6786436754', 'Casual', 'NOR devine un punct de referinÈ›Äƒ pentru BucureÈ™ti pentru cÄƒ este cel mai Ã®nalt loc unde poÈ›i lua masa!', 'www.norbucharest.ro', 2, 'img/rest3.jpg'),
(4, 'Burgers &amp; Burgers', '6547686886', 'Fast Food', 'Welche BurgerlÃ¤den in Wien ganz besonders empfehlenswert sind, verraten wir dir in unserer nachfolgenden Top 10.', 'www.burger.com', 2, 'img/rest4.jpg');

-- --------------------------------------------------------

--
-- Struttura della tabella `things_todo`
--

CREATE TABLE `things_todo` (
  `todo_id` int(10) NOT NULL,
  `todo_name` varchar(35) DEFAULT NULL,
  `todo_type` varchar(30) DEFAULT NULL,
  `todo_desc` varchar(500) DEFAULT NULL,
  `todo_web` varchar(30) DEFAULT NULL,
  `todo_pic` varchar(30) DEFAULT NULL,
  `FK_todo_location` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `things_todo`
--

INSERT INTO `things_todo` (`todo_id`, `todo_name`, `todo_type`, `todo_desc`, `todo_web`, `todo_pic`, `FK_todo_location`) VALUES
(1, 'Zoo Vienna', 'Zoo', 'From penguins and orangutans to giant pandas: discover more than 700 species of animals in the unique setting of this UNESCO World Cultural Heritage.', 'www.zoovienna.at', 'img/todo1.jpg', 3),
(2, 'St. Charles Church', 'Church', 'The St. Charles Church (Karlskirche) is considered architect Johann Bernhard Fischer von Erlach s greatest work. It is also a Viennese icon and an expression of the Austrian joie de vivre.', 'http://www.karlskirche.at/', 'img/todo2.jpg', 3),
(4, 'Prater', 'Luna Parck', 'The admission to the Viennese Prater is free of charge. However, the use of the different attractions is subject to charges. Here you will find the prices for the top.', 'www.praterwien.com', 'img/todo4.jpg', 3),
(5, 'Trastever', 'Museum', 'Conservare il patrimonio archeologico, storico artistico e monumentale Ã¨ un atto di importanza vitale per la Nazione.', 'www.museodiromaintrastevere.it', 'img/todo3.jpg', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `user_id` int(15) NOT NULL,
  `userName` varchar(40) DEFAULT NULL,
  `userEmail` varchar(40) DEFAULT NULL,
  `userType` varchar(10) DEFAULT 'User',
  `userPass` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`user_id`, `userName`, `userEmail`, `userType`, `userPass`) VALUES
(1, 'Daniele', 'mail@mail.ma', 'Admin', 'd482ba4b7d3218f3e841038c407ed1f94e9846a4dd68e56bab7718903962aa98'),
(2, 'Telma', 'tre@tre.tre', 'User', 'b6197fe0d62a4e463edd2925382d4d268c4fce0859378682608efa4fda326f26');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`con_id`),
  ADD KEY `FK_con_location` (`FK_con_location`);

--
-- Indici per le tabelle `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indici per le tabelle `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`rest_id`),
  ADD KEY `FK_location` (`FK_location`);

--
-- Indici per le tabelle `things_todo`
--
ALTER TABLE `things_todo`
  ADD PRIMARY KEY (`todo_id`),
  ADD KEY `FK_todo_location` (`FK_todo_location`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `concert`
--
ALTER TABLE `concert`
  MODIFY `con_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT per la tabella `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `rest_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `things_todo`
--
ALTER TABLE `things_todo`
  MODIFY `todo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `concert`
--
ALTER TABLE `concert`
  ADD CONSTRAINT `concert_ibfk_1` FOREIGN KEY (`FK_con_location`) REFERENCES `location` (`location_id`);

--
-- Limiti per la tabella `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`FK_location`) REFERENCES `location` (`location_id`);

--
-- Limiti per la tabella `things_todo`
--
ALTER TABLE `things_todo`
  ADD CONSTRAINT `things_todo_ibfk_1` FOREIGN KEY (`FK_todo_location`) REFERENCES `location` (`location_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
