-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 09, 2022 alle 04:22
-- Versione del server: 10.4.22-MariaDB
-- Versione PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar_application`
--
CREATE DATABASE IF NOT EXISTS `calendar_application` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `calendar_application`;

-- --------------------------------------------------------

--
-- Struttura della tabella `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `day` text NOT NULL,
  `assigned_user` text DEFAULT NULL,
  `assigned_garbage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `calendar`
--

INSERT INTO `calendar` (`id`, `day`, `assigned_user`, `assigned_garbage`) VALUES
(1, 'Monday', '', ''),
(2, 'Tuesday', '', ''),
(3, 'Wednesday', '', ''),
(4, 'Thursday', '', ''),
(5, 'Friday', '', ''),
(6, 'Saturday', '', ''),
(7, 'Sunday', '', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `family`
--

CREATE TABLE `family` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `garbage_type`
--

CREATE TABLE `garbage_type` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `garbage_type`
--

INSERT INTO `garbage_type` (`id`, `name`) VALUES
(1, 'Multimaterials'),
(2, 'Organic'),
(3, 'Paper'),
(4, 'Glass'),
(5, 'NonRecyclable');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `garbage_type`
--
ALTER TABLE `garbage_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `family`
--
ALTER TABLE `family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `garbage_type`
--
ALTER TABLE `garbage_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
