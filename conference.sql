-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2019 at 06:52 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conference`
--

-- --------------------------------------------------------

--
-- Table structure for table `landen`
--

CREATE TABLE `landen` (
  `idlanden` int(11) NOT NULL,
  `voluit` varchar(45) DEFAULT NULL,
  `afgekort` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `landen`
--

INSERT INTO `landen` (`idlanden`, `voluit`, `afgekort`) VALUES
(1, 'België', NULL),
(2, 'Nederland', NULL),
(3, 'Verenigd Koninkrijk', NULL),
(4, 'Verenigde Staten', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nieuwsbrief`
--

CREATE TABLE `nieuwsbrief` (
  `newsid` int(11) NOT NULL,
  `email` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nieuwsbrief`
--

INSERT INTO `nieuwsbrief` (`newsid`, `email`) VALUES
(2, 'test@gmail.com'),
(3, 'maxim@gmail.com'),
(4, 'howest@gmail.com'),
(5, 'test123@gmail.com'),
(6, 'maximtest@hotmail.com'),
(7, 'detail-sessie@outlook.be'),
(8, 'spreker@outlook.com'),
(9, 'homepage@yahoo.nl'),
(10, 'newsletter@yahoo.nl'),
(11, 'nieuwsbrief@telenet.be'),
(12, 'test666@gmail.com'),
(13, 'spreker@hotmail.fr'),
(14, 'zalen@howest.be'),
(15, 'sponsors@yahoo.gov'),
(16, 'ticketsinfo@gmail.be');

-- --------------------------------------------------------

--
-- Table structure for table `sessies`
--

CREATE TABLE `sessies` (
  `idsessie` int(11) NOT NULL,
  `titel` varchar(100) DEFAULT NULL,
  `start` varchar(45) DEFAULT NULL,
  `omschrijving` varchar(400) DEFAULT NULL,
  `afbeelding` varchar(45) DEFAULT NULL,
  `zaalID` int(11) DEFAULT NULL,
  `sprekerID` int(11) DEFAULT NULL,
  `likecounter` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessies`
--

INSERT INTO `sessies` (`idsessie`, `titel`, `start`, `omschrijving`, `afbeelding`, `zaalID`, `sprekerID`, `likecounter`) VALUES
(1, 'The art of emotional design', '10:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-1.png', 100, 2001, 4),
(2, 'Hacking The Newsroom', '11:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-2.jpg', 100, 2006, 4),
(3, 'Programming Art', '12:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-3.jpg', 100, 2010, 4),
(4, 'eBoy Happy 13', '14:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-4.jpg', 100, 2015, 0),
(5, 'HYPE: Combining Creativity & Code', '15:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-5.jpg', 100, 2020, 4),
(6, 'Kicking Ass in Advertising Land', '16:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-6.jpg', 100, 2025, 0),
(7, 'The process of re-designing a successful blog', '17:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-7.png', 100, 2027, 0),
(8, 'Visual FX for Film and TV', '10:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-8.jpg', 101, 2002, 2),
(9, 'Photoshop CS5 Extended for Video Tape and Photographers', '11:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-9.jpg', 101, 2002, 0),
(10, 'Design is Dead presents: The Deleted Scenes', '12:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-10.jpg', 101, 2011, 0),
(11, 'Best practices for mobile development with the Flash Platform', '14:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-11.jpg', 101, 2016, 0),
(12, 'Silverlight 4 Tour de Force', '15:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-12.png', 101, 2021, 0),
(13, 'Fresh Flash and AIR', '16:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-13.jpg', 101, 2016, 0),
(14, 'Show some f*cking empathy!', '17:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-14.png', 101, 2028, 0),
(15, 'Discover CS5 - for design pros', '10:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-15.jpg', 102, 2003, 0),
(16, 'Animated Explanations: viral educational content', '11:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-16.jpg', 102, 2007, 0),
(17, 'Sex, Drugs, and Rock & Roll: One Pixel at a Time', '12:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-17.jpg', 102, 2012, 0),
(18, 'Discover CS5 - for web developers', '14:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-18.jpg', 102, 2017, 0),
(19, 'A peek in the kitchen of a 3d artist', '15:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-19.jpg', 102, 2022, 0),
(20, 'Discover CS5 - for video pros', '16:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-20.jpg', 102, 2019, 0),
(21, 'Soulbase : a little peak inside', '17:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-21.png', 102, 2029, 0),
(22, 'Behind the scenes of Crytek', '10:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-22.png', 103, 2004, 0),
(23, 'GRID VFX behind the scenes', '11:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-23.png', 103, 2008, 0),
(24, '3D Motion Tracking-Xsens', '12:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-24.png', 103, 2013, 0),
(25, 'Young Entrepreneurs: Collaborating Their Way to Success', '14:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-25.jpg', 103, 2018, 0),
(26, 'The Adventures of Jam Boy', '15:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-26.jpg', 103, 2023, 0),
(27, 'How a Young Entrepreneur Found his Mojo + PANEL', '16:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-27.jpg', 103, 2018, 0),
(29, 'From Netlog to In The Pocket', '10:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-29.jpg', 104, 2005, 0),
(30, 'IT Entrepreneurship & innovation', '11:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-30.jpg', 104, 2009, 0),
(31, 'Cases by Bart Chanet Geoffroy Simon', '12:30', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-31.png', 104, 2014, 0),
(32, 'Trends in Industry: why your students need to be prepared', '14:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-32.jpg', 104, 2019, 0),
(33, 'Adobe in education', '15:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-33.jpg', 104, 2024, 0),
(34, 'Why CS5? Importance for industry and education', '16:00', 'Duis luctus odio in nibh cursus egestas. Nulla placerat, enim sit amet finibus aliquet, odio magna sollicitudin metus, nec ultrices felis metus in urna. In eu velit ornare, commodo risus ac, dapibus magna', 'sessie-34.jpg', 104, 2017, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `sponsorID` int(11) NOT NULL,
  `afbeelding` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`sponsorID`, `afbeelding`) VALUES
(1, 'sponsor-1.png'),
(2, 'sponsor-2.png'),
(3, 'sponsor-3.png'),
(4, 'sponsor-4.png'),
(5, 'sponsor-5.jpg'),
(6, 'sponsor-6.jpg'),
(7, 'sponsor-7.jpg'),
(8, 'sponsor-8.png'),
(9, 'sponsor-9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sprekers`
--

CREATE TABLE `sprekers` (
  `idsprekers` int(11) NOT NULL,
  `voornaam` varchar(45) DEFAULT NULL,
  `naam` varchar(45) DEFAULT NULL,
  `afbeelding` varchar(45) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `lanidID` int(11) DEFAULT NULL,
  `likecounter` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sprekers`
--

INSERT INTO `sprekers` (`idsprekers`, `voornaam`, `naam`, `afbeelding`, `bio`, `lanidID`, `likecounter`) VALUES
(2001, 'Aral', 'Balkan', '02m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 12),
(2002, 'Michael', 'O’Neill', '19m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 2, 12),
(2003, 'Ton', 'Frederiks ', '08m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 3, 3),
(2004, 'Frederic', 'Lierman', '43w.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 11),
(2005, 'Brent', 'Wilkey', '10m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 2, 3),
(2006, 'Jeremy', 'Thorp', '11m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 3),
(2007, 'Geert', 'Coppens ', '12m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 3, 12),
(2008, '', 'GRID VFX', '05w.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 3, 1),
(2009, 'Ben', 'Piquard', '13m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 4, 1),
(2010, 'Keith', 'Peters', '14m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 4, 2),
(2011, 'Nicky', 'Lauwerijssen', '17w.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 2, 12),
(2012, 'Brendan', 'Ciecko', '26m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 0),
(2013, '', 'Xsens', '23w.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 1),
(2014, 'Bart', 'Chanet', '27m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 2, 1),
(2015, '', 'Eboy', '22w.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 0),
(2016, 'Serge ', 'Jespers', '28m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 0),
(2017, 'Christoph', 'Rooms', '31m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 1),
(2018, 'Donna  ', 'Fenn ', '30w.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 2, 1),
(2019, 'Klaasjan', 'Tukker', '32m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 2, 0),
(2020, 'Branden', 'Hall', '34m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 2, 0),
(2021, 'Gill  ', 'Cleeren', '36m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 0),
(2022, 'Jasper ', 'Hesseling', '45m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 4, 0),
(2023, 'Doherty', 'Fraser', '04w.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 4, 0),
(2024, 'Katrijn', 'Faket', '18w.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 0),
(2025, '', 'ADNERDS', '39w.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 0),
(2027, 'Veerle ', 'Pieters', '35w.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 2),
(2028, '', 'Little Miss Robot Ghent', '16w.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 1, 0),
(2029, 'Floris ', 'Vos', '48m.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales varius felis, nec pharetra eros. Cras maximus sem ullamcorper, gravida ante et, dictum dui. Cras sapien mi, pellentesque quis pulvinar non, vestibulum nec nisl. Ut convallis velit nulla, sed consequat leo mattis eget. Vestibulum aliquet interdum lorem, eu dapibus ex. ', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `reservatieID` int(11) NOT NULL,
  `voornaam` varchar(25) NOT NULL,
  `naam` varchar(25) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telefoon` varchar(15) NOT NULL,
  `ticketAantal` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`reservatieID`, `voornaam`, `naam`, `email`, `telefoon`, `ticketAantal`) VALUES
(8, 'Maxim', 'Staelens', 'test@gmail.com', '478123451', 7),
(9, 'Maxim', 'Staelens', 'maxim-staelens@outlook.com', '4721536996', 7),
(10, 'Test', 'Test', 'test@gmail.com', '448965442', 9),
(11, 'Maxim', 'Howest', 'maxim.howest@howest.be', '472125669', 2),
(12, 'Maxim', 'Test', 'test@gmail.com', '412123232', 8);

-- --------------------------------------------------------

--
-- Table structure for table `zalen`
--

CREATE TABLE `zalen` (
  `idzalen` int(11) NOT NULL,
  `naam` varchar(45) DEFAULT NULL,
  `capaciteit` int(11) DEFAULT NULL,
  `afbeelding` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zalen`
--

INSERT INTO `zalen` (`idzalen`, `naam`, `capaciteit`, `afbeelding`) VALUES
(100, 'Auditorium - Pixel 1', 400, 'room-1.jpg'),
(101, 'Pixel 2', 80, 'room-2.jpg'),
(102, 'Pixel 3', 100, 'room-3.jpg'),
(103, 'Pixel 4', 90, 'room-4.jpg'),
(104, 'Pixel 5', 150, 'room-5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `landen`
--
ALTER TABLE `landen`
  ADD PRIMARY KEY (`idlanden`);

--
-- Indexes for table `nieuwsbrief`
--
ALTER TABLE `nieuwsbrief`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `sessies`
--
ALTER TABLE `sessies`
  ADD PRIMARY KEY (`idsessie`),
  ADD KEY `sessiezalen_idx` (`zaalID`),
  ADD KEY `sessiespreker_idx` (`sprekerID`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`sponsorID`);

--
-- Indexes for table `sprekers`
--
ALTER TABLE `sprekers`
  ADD PRIMARY KEY (`idsprekers`),
  ADD KEY `sprekerland_idx` (`lanidID`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`reservatieID`);

--
-- Indexes for table `zalen`
--
ALTER TABLE `zalen`
  ADD PRIMARY KEY (`idzalen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `landen`
--
ALTER TABLE `landen`
  MODIFY `idlanden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nieuwsbrief`
--
ALTER TABLE `nieuwsbrief`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sessies`
--
ALTER TABLE `sessies`
  MODIFY `idsessie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `sponsorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sprekers`
--
ALTER TABLE `sprekers`
  MODIFY `idsprekers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2030;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `reservatieID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `zalen`
--
ALTER TABLE `zalen`
  MODIFY `idzalen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sessies`
--
ALTER TABLE `sessies`
  ADD CONSTRAINT `sessiespreker` FOREIGN KEY (`sprekerID`) REFERENCES `sprekers` (`idsprekers`),
  ADD CONSTRAINT `sessiezalen` FOREIGN KEY (`zaalID`) REFERENCES `zalen` (`idzalen`);

--
-- Constraints for table `sprekers`
--
ALTER TABLE `sprekers`
  ADD CONSTRAINT `sprekerland` FOREIGN KEY (`lanidID`) REFERENCES `landen` (`idlanden`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
