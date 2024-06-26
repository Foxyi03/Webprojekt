-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 02:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestbookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbookmessages`
--

CREATE TABLE `guestbookmessages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guestbookmessages`
--

INSERT INTO `guestbookmessages` (`id`, `name`, `message`) VALUES
(17, 'Romepo', '\r\nFranzösische Alphabetisierung\r\n„Schüler der Französisch-Gruppe haben große Freude am Lesen“\r\nDie Uni Luxemburg zieht eine erste vorsichtige positive Bilanz der französischsprachigen Alphabetisierung.\r\n\r\n113 Schüler nehmen am Alphabetisierungsprojekt „Zesumme wuessen“ teil: 48 Schüler werden auf Französisch alphabetisiert, 65 auf Deutsch.\r\n113 Schüler nehmen am Alphabetisierungsprojekt „Zesumme wuessen“ teil: 48 Schüler werden auf Französisch alphabetisiert, 65 auf Deutsch. Foto: Shutterstock\r\nMichèle Gantenbein\r\nRedakteurin\r\n13:45\r\nSeit dem Schuljahr 2022/23 nehmen vier Grundschulen in Luxemburg am Alphabetisierungsprojekt „Zesumme wuessen“ teil. Die Schüler des Zyklus C2.1 werden entweder auf Französisch oder auf Deutsch alphabetisiert – je nachdem, für welche Sprache die Eltern sich entschieden haben.\r\n\r\nLesen Sie auch:Alphabetisierung auf Französisch – so funktioniert das Pilotprojekt in Fels\r\nNun liegt der erste Evaluierungsbericht des Lucet (Luxembourg Centre for Educational Testing) der Uni Luxemburg vor. Die Ergebnisse sind durchwegs positiv, aber wegen der geringen Schülerzahl (113) mit Vorsicht zu genießen, heißt es in dem 80-seitigen Dokument.\r\n\r\nVier Pilotschulen mit 113 Schülern nehmen teil\r\n\r\n\r\nADVERTISING\r\n\r\nIn den vier Pilotschulen (Schoul Uewerkuer, Schoul Deich, Fielser Schoul, Nelly Stein Schoul) werden 48 Schüler auf Französisch alphabetisiert und 65 Schüler auf Deutsch. Die Schüler der erstgenannten Gruppe sprechen zu Hause überwiegend Französisch und/oder Portugiesisch, die Schüler der zweitgenannten Gruppe überwiegend Deutsch und/oder Luxemburgisch.\r\n\r\nDie Schüler sind in gemischten Gruppen. Lediglich der Sprach- und Mathematikunterricht findet in getrennten Gruppen statt, in denen die einen auf Französisch und die anderen auf Deutsch unterrichtet werden. Alle anderen Fächer werden in gemischten Gruppen unterrichtet, mit Luxemburgisch als Unterrichtssprache. Die Arbeitsblätter sind auf Deutsch für die einen beziehungsweise auf Französisch für die anderen verfasst.\r\n\r\nLesen Sie auch:Meisch will Verallgemeinerung der französischen Alphabetisierung\r\nDie Schüler des Pilotprojekts haben an den regulären Epreuves standardisées (Epstan) teilgenommen, wie alle anderen Schüler des Zyklus 2.1 auch. Außerdem haben sie an speziell für sie entwickelten Tests teilgenommen.\r\n\r\n\r\nSonja Ugen vom Lucet stellte die ersten Evaluierungsergebnisse zum Alphabetisierungsprojekts vor.\r\nSonja Ugen vom Lucet stellte die ersten Evaluierungsergebnisse zum Alphabetisierungsprojekts vor. Foto: Laurent Sturm\r\nUm die Ergebnisse vergleichen zu können, wurden Referenzgruppen geschaffen. Die bestehen aus Schülern, die einen ähnlichen sozio-ökonomischen Hintergrund haben und nicht Teil des Pilotprojekts sind, sondern den regulären Unterricht verfolgen, also auf Deutsch alphabetisiert werden. \r\n\r\nLaut Sonja Ugen vom Lucet haben die Schüler aus dem Pilotprojekt in Mathematik und Luxemburger Hörverstehen (Epstan-Tests) ähnlich gute Grundkenntnisse wie die regulären Schüler.\r\n\r\nLesen Sie auch:Plädoyer für eine bilinguale Schulform Deutsch/Französisch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guestbookmessages`
--
ALTER TABLE `guestbookmessages`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guestbookmessages`
--
ALTER TABLE `guestbookmessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
