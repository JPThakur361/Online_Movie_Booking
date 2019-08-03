-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2014 at 12:11 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `aas`
--

CREATE TABLE IF NOT EXISTS `aas` (
  `id` int(11) NOT NULL,
  `cinema2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aas`
--

INSERT INTO `aas` (`id`, `cinema2`) VALUES
(0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `name`, `username`, `email`, `password`) VALUES
(1, 'rosefield', 'rosefield', 'rosfild@yahoo.com', 'e0aed95f55d475196df96cb022438851'),
(13, 'anglakas', 'anglakas', 'abegail_espinol@yahoo.com', 'f970e2767d0cfe75876ea857f92e319b'),
(12, 'asdasdas', 'asdasdasd', 'arfhielduton@gmail.com', 'f970e2767d0cfe75876ea857f92e319b');

-- --------------------------------------------------------

--
-- Table structure for table `cinema1`
--

CREATE TABLE IF NOT EXISTS `cinema1` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnums` int(225) NOT NULL,
  `ticketnum` int(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cinema1`
--

INSERT INTO `cinema1` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnums`, `ticketnum`) VALUES
(1, 'pics/showing/Frontera.jpg', 'NOW SHOWING', 'Frontera', '350', '10:30:00', '12:30:00', '04:30:00', 'Cinema 1', 0, 20);

-- --------------------------------------------------------

--
-- Table structure for table `cinema2`
--

CREATE TABLE IF NOT EXISTS `cinema2` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnum` int(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cinema2`
--

INSERT INTO `cinema2` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnum`) VALUES
(1, 'pics/showing/The Identical.jpg', 'NOW SHOWING', 'The Identical', '300', '01:00:00', '01:00:00', '04:30:00', 'Cinema 2', 18);

-- --------------------------------------------------------

--
-- Table structure for table `cinema3`
--

CREATE TABLE IF NOT EXISTS `cinema3` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnum` int(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cinema3`
--

INSERT INTO `cinema3` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnum`) VALUES
(1, 'pics/showing/maleficent.jpg', 'NOW SHOWING', 'Maleficent', '350', '10:00:00', '12:30:00', '04:30:00', 'Cinema 3', 25);

-- --------------------------------------------------------

--
-- Table structure for table `cinema4`
--

CREATE TABLE IF NOT EXISTS `cinema4` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnum` int(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cinema4`
--

INSERT INTO `cinema4` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnum`) VALUES
(1, 'pics/showing/Levitated Mass.jpg', 'NOW SHOWING', 'Levitated Mass', '350', '10:00:00', '12:30:00', '04:30:00', 'Cinema 4', 25);

-- --------------------------------------------------------

--
-- Table structure for table `cinema5`
--

CREATE TABLE IF NOT EXISTS `cinema5` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnum` int(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cinema5`
--

INSERT INTO `cinema5` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnum`) VALUES
(1, 'pics/showing/Longest Week.jpg', 'NOW SHOWING', 'Longest Week', '350', '10:00:00', '12:30:00', '04:30:00', 'Cinema 5', 25);

-- --------------------------------------------------------

--
-- Table structure for table `cinema6`
--

CREATE TABLE IF NOT EXISTS `cinema6` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `image` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `time3` time NOT NULL,
  `cinema` varchar(225) NOT NULL,
  `ticketnum` int(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cinema6`
--

INSERT INTO `cinema6` (`No`, `image`, `status`, `title`, `price`, `time1`, `time2`, `time3`, `cinema`, `ticketnum`) VALUES
(1, 'pics/showing/coriolanus.jpg', 'NOW SHOWING', 'Coriolanus', '350', '10:00:00', '12:30:00', '04:30:00', 'Cinema 6', 25);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ticket_Number` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `cname` varchar(225) NOT NULL,
  `quantity` int(225) NOT NULL,
  `Title` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `Time` time NOT NULL,
  `date` date NOT NULL,
  `Cinema` varchar(225) NOT NULL,
  `ticket_status` varchar(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=148 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `Ticket_Number`, `username`, `cname`, `quantity`, `Title`, `price`, `Time`, `date`, `Cinema`, `ticket_status`) VALUES
(146, '12', 'asd', 'asd', 1, 'wd', '122', '10:00:00', '2014-10-22', 'df', 'active'),
(147, 'a0ytgiac', 'rosefield', 'rosefield uton', 1, ' Frontera', ' 350', '10:30:00', '2014-10-29', 'Cinema 2', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `movie_inventory`
--

CREATE TABLE IF NOT EXISTS `movie_inventory` (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Ticket_Number` varchar(225) NOT NULL,
  `Ticket_Status` varchar(225) NOT NULL,
  `Costumer_Name` varchar(225) NOT NULL,
  `Movie_Title` varchar(225) NOT NULL,
  `Cinema` varchar(225) NOT NULL,
  `Seat_Number` varchar(10) NOT NULL,
  `Date_Reserve` date NOT NULL,
  `Ticket_Price` int(225) NOT NULL,
  `Quantity` int(225) NOT NULL,
  `Total_Amount_Paid` int(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `movie_inventory`
--

INSERT INTO `movie_inventory` (`No`, `Ticket_Number`, `Ticket_Status`, `Costumer_Name`, `Movie_Title`, `Cinema`, `Seat_Number`, `Date_Reserve`, `Ticket_Price`, `Quantity`, `Total_Amount_Paid`) VALUES
(124, '411389', 'Void', 'carlo', 'carlo', 'cinema1', '2', '1900-01-09', 300, 1, 300),
(123, '489494', 'Void', 'carlo', 'carlo', 'cinema1', '1', '1900-01-09', 300, 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE IF NOT EXISTS `tiket` (
  `cinema1` int(11) NOT NULL,
  `cinema2` int(11) NOT NULL,
  `cinema3` int(11) NOT NULL,
  `cinema4` int(11) NOT NULL,
  `cinema5` int(11) NOT NULL,
  `cinema6` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`cinema1`, `cinema2`, `cinema3`, `cinema4`, `cinema5`, `cinema6`) VALUES
(20, 0, 23, 23, 25, 22);

-- --------------------------------------------------------

--
-- Table structure for table `upcoming1`
--

CREATE TABLE IF NOT EXISTS `upcoming1` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `upcoming1`
--

INSERT INTO `upcoming1` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/bestofme.jpg', 'https://www.youtube.com/watch?v=WcIXCok9HPg', 'COMING SOON', 'all of me', 'October 2, 2014');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming2`
--

CREATE TABLE IF NOT EXISTS `upcoming2` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `upcoming2`
--

INSERT INTO `upcoming2` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/beforeigotosleep.jpg', 'asasa', 'COMING SOON', 'Before I go to sleep', 'October 5, 2014');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming3`
--

CREATE TABLE IF NOT EXISTS `upcoming3` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `upcoming3`
--

INSERT INTO `upcoming3` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/exist.jpg', 'asasasa', 'COMING SOON', 'Exist', 'October 10, 2014');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming4`
--

CREATE TABLE IF NOT EXISTS `upcoming4` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `upcoming4`
--

INSERT INTO `upcoming4` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/greenprince.jpg', 'xaxax', 'COMING SOON', 'Green Prince', 'October 15, 2014');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming5`
--

CREATE TABLE IF NOT EXISTS `upcoming5` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `upcoming5`
--

INSERT INTO `upcoming5` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/horns.jpg', 'aasas', 'COMING SOON', 'Horns', 'October 20, 2014');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming6`
--

CREATE TABLE IF NOT EXISTS `upcoming6` (
  `No` int(225) NOT NULL AUTO_INCREMENT,
  `Image` varchar(225) NOT NULL,
  `link` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `upcoming6`
--

INSERT INTO `upcoming6` (`No`, `Image`, `link`, `status`, `title`, `date`) VALUES
(1, 'pics/coming soon/marstothestars.jpg', 'asSSSAASSASAS', 'COMING SOON', 'Maps to the Stars', 'October 30, 2014');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `AdministratorPassword` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `AdministratorPassword`) VALUES
('rosefield', 'rosefield', 'admin'),
('allen', 'allen', ''),
('carlo', 'carlo', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
