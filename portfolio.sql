-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 dec 2021 om 23:30
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `codelanguages`
--

CREATE TABLE `codelanguages` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` varchar(256) NOT NULL,
  `experience` varchar(256) NOT NULL,
  `rating` int(5) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `codelanguages`
--

INSERT INTO `codelanguages` (`id`, `name`, `description`, `experience`, `rating`, `image`) VALUES
(1, 'JavaScript', 'JavaScript is een veelgebruikte scripttaal om webpagina\'s interactief te maken en webapplicaties te ontwikkelen. Naast HTML en CSS is JavaScript een van de kerntechnologieën van het wereldwijde web.', 'Ik ken de basis functionaliteiten van JS(JavaScript) en heb een jaar ermee gewerkt. Ik heb een boter kaas en eiren spel ermee gemaakt.', 5, '../public/img/JavaScript.png'),
(2, 'C Sharp', 'C#(C Sharp) is een programmeertaal ontwikkeld door Microsoft als deel van het .NET-initiatief, en later geaccepteerd als standaard door ECMA en ISO.', 'Ik ken de basis functionaliteiten van C#(C Sharp) en heb een jaar ermee gewerkt. Ik heb samen met klasgenoten een spel ermee gemaakt.', 4, '../public/img/C-Sharp.png'),
(3, 'Personal Home Page', 'PHP is een scripttaal, die bedoeld is om op webservers dynamische webpagina\'s te creëren. PHP is in 1994 ontworpen door Rasmus Lerdorf, een senior softwareontwikkelaar bij IBM. Lerdorf gebruikte Perl als inspiratie.', 'Ik vindt PHP(Personal Home Page) geweldig. Ik heb een jaar ervaring mee en heb een PHP site voor de sportcenter HealthOne als school opdracht gemaakt.', 5, '../public/img/php.png'),
(4, 'Vue.js\r\n', 'Vue.js is een open-source model-view-viewmodel front-end JavaScript-framework voor het bouwen van gebruikersinterfaces en applicaties met één pagina. Het is gemaakt door Evan You en wordt onderhouden door hem en de rest van de actieve kernteamleden.', 'Ik heb er een half jaar mee gewerkt en het lijkt enorm veel op PHP. Ik heb een weer-app ermee gemaakt.', 3, '../public/img/vue.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` varchar(1280) NOT NULL,
  `image` varchar(2064) NOT NULL,
  `contributors` varchar(128) NOT NULL,
  `projectlink` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image`, `contributors`, `projectlink`) VALUES
(1, 'C# - Dice Project', 'We moesten in januari 2021 een dice spel maken. Ik had dat met de SCRUM team Boomer Gang gemaakt.', '../public/img/code.gif', 'Ramy Haroun', 'https://github.com/GakhalSingh'),
(2, 'C# - Hoger/Lager Project', 'We moesten in februari 2021 een \"Hoger of Lager\" spel maken. Ik heb dit met de SCRUM team Boomer Gang gemaakt.\r\n\r\n', '../public/img/code.gif', 'Ramy Haroun, Keren Blokpoel, Sandro de Bruin, Riza Karbicek', 'https://github.com/GakhalSingh'),
(3, 'HTML/CSS/JS - Portfolio Project\r\n', 'Ik heb een verouderde versie van mijn portfolio die ik gemaakt heb op mijn eerste jaar van de MBO Software Developer opleiding.', '../public/img/code.gif', '', 'https://gakhalsingh.github.io/'),
(4, 'HTML/CSS/PHP Portfolio', 'Je bent er nu op!', '../public/img/code.gif', '', 'https://github.com/GakhalSingh/Portfolio-PHP');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `message` varchar(256) NOT NULL,
  `link` varchar(1280) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `updates`
--

INSERT INTO `updates` (`id`, `title`, `message`, `link`, `date`) VALUES
(1, 'Het Begin', 'Ik heb de Updates pagina aangemaakt', 'https://open.spotify.com/track/5bHO3kyv8UnR7vW6ZicMTJ?si=4732da8286fe4645', '2021-12-21');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `codelanguages`
--
ALTER TABLE `codelanguages`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `codelanguages`
--
ALTER TABLE `codelanguages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
