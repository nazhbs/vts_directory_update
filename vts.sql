/*
VTS Directory Update Script
Author: Nazmus Nasir
URL: http://nazm.us 
Harvard Business School Information Technology - Learning Management Ecosystem

This script's purpose is to generate the HTML for an internal directory - has no real use outside of this one usecase. 

vts.sql - MySQL Template for a basic VTS table - it takes modified data from TMT
*/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f3vts`
--

-- --------------------------------------------------------

--
-- Table structure for table `vts`
--

CREATE TABLE IF NOT EXISTS `vts` (
  `id` int(255) NOT NULL,
  `vts_id` varchar(10) NOT NULL,
  `ir_id` varchar(10) NOT NULL,
  `team_number` varchar(5) NOT NULL,
  `teamname` varchar(255) NOT NULL,
  `ticker` varchar(255) NOT NULL,
  `section` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vts`
--
ALTER TABLE `vts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vts`
--
ALTER TABLE `vts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
