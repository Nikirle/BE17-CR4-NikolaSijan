-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 02:32 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be17_cr4_nikolasijan_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `isbn` varchar(13) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `author_first_name` varchar(50) DEFAULT NULL,
  `author_last_name` varchar(50) DEFAULT NULL,
  `publisher_name` varchar(50) DEFAULT NULL,
  `publisher_address` varchar(50) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `title`, `image`, `isbn`, `type`, `description`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(1, 'The Jungle Book', 'jungleBook.jpg', '0-3601-0803-2', 'dvd', 'In the jungles of 1890s India, Mowgli is an orphaned boy raised by the wolf Raksha and her pack, led', 'Jon', 'Favreu', 'Macmillan', 'Heiligenstädtertrasse 5', '1967-10-12', 'available'),
(2, 'In Search of Lost Time', 'lostTime.jpg', '0-3402-0803-2', 'book', ' In Search of Lost Time, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem', 'Marcel', 'Proust', 'Macmillan', 'Heiligenstädtertrasse 5', '1980-12-02', 'available'),
(3, 'Ulysses', 'ulysses.jpg', '0-3402-0563-3', 'book', 'In Ulysses, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun', 'James', 'Jouces', 'Scholastic', 'Linzerstrasse 6', '1989-04-13', 'available'),
(4, 'Don Quixote', 'DonQuixote.webp', '0-3402-0563-6', 'book', 'Don Quixote, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididu', 'Miguel', 'Cervantes', 'Scholastic', 'Linzerstrasse 6', '1972-05-03', 'reserved'),
(5, 'Moby Dick', 'mobyDick.webp', '0-3402-0523-9', 'dvd', 'In Moby Dick, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid', 'Herman', 'Mervile', 'Scholastic', 'Linzerstrasse 6', '1988-06-26', 'available'),
(6, 'The Odyssey', 'odyssey.jpg', '0-8510-2096-8', 'cd', 'in Odyssey,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt', 'Robert', 'Fagles', 'HarperCollins', 'Wäringerstrasse 10-13', '1963-02-10', 'available'),
(7, 'Hamlet', 'hamlet.jpg', '0-8530-2036-1', 'book', 'In Hamlet,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ', 'William', 'Shackespeare', 'HarperCollins', 'Wäringerstrasse 10-13', '1766-05-11', 'available'),
(8, 'Lolita', 'lolita.webp', '0-8240-2036-4', 'book', 'In Lolita,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ', 'Vladimir', 'Novbakov', 'HarperCollins', 'Wäringerstrasse 10-13', '1890-04-11', 'available'),
(9, ' The Brothers Karamazov', 'brothers.jpg', '0-8240-2056-5', 'book', 'In Lolita,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ', ' Fyodor', 'Dostoyevsky', 'HarperCollins', 'Wäringerstrasse 10-13', '1810-06-11', 'reserved'),
(10, 'The Catcher in the Rye', 'catcher.webp', '0-8240-2076-7', 'book', 'In Lolita,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ', 'J. D.', 'Salinger', 'HarperCollins', 'Wäringerstrasse 10-13', '1850-09-01', 'available'),
(31, 'The Mamba Mentality', '636f27573efc5.jpg', '0-2001-1203-5', 'book', 'Bryant spielte seine gesamte Profikarriere (1996 bis 2016) für die Los Angeles Lakers in der NBA.', 'Kobe', 'Bryant', 'NBA', 'Mariahilferstrasse 15', '2021-02-18', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
