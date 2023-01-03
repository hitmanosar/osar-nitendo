-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 07:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nitendo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(244) NOT NULL,
  `email` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL,
  `com password` varchar(244) NOT NULL,
  `phone number` varchar(244) NOT NULL,
  `admin id` int(244) NOT NULL,
  `role` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`, `com password`, `phone number`, `admin id`, `role`) VALUES
('may', 'may@g', '123', '123', '32323', 28, 'admin'),
('lwin', 'lwin@g', '1234', '1234', '133233', 29, 'user'),
('toe', 'toe@g', '54321', '54321', '323232233', 36, 'user'),
('win ', 'win@g', '123', '123', '09343433232', 37, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(244) NOT NULL,
  `feed_name` varchar(244) NOT NULL,
  `feed_email` varchar(244) NOT NULL,
  `feed_issue` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `feed_name`, `feed_email`, `feed_issue`) VALUES
(11, 'lwin', 'lwin@g', 'there is a some error'),
(12, 'aung', 'aung@g', 'my console model number (k3233) does not works!!'),
(13, 'jhun', 'jhun@g', 'how do i service my nitendo 3ds is there any service??');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `customer_name` varchar(244) NOT NULL,
  `customer_email` varchar(244) NOT NULL,
  `customer_address` varchar(244) NOT NULL,
  `order_name` varchar(244) NOT NULL,
  `order_size` varchar(244) NOT NULL,
  `phone number` varchar(244) NOT NULL,
  `order_price` varchar(244) NOT NULL,
  `order_id` int(244) NOT NULL,
  `order_detail` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`customer_name`, `customer_email`, `customer_address`, `order_name`, `order_size`, `phone number`, `order_price`, `order_id`, `order_detail`) VALUES
('wai', 'wai', 'new york', 'Super Smash Bros\r\n', '3.6 GB\r\n', '0923929329', '$25', 7, ''),
('july', 'ju@', 'tarkayta', 'LEGO® Marvel Super Heroes ', '14.5 GB', '233232', '$55.8', 8, ''),
('lwin', 'lwin@g', 'no(36) bothahtaung , yangon', 'Metroid™ Dread\n', '4.3 GB\n', '323232323', '$40.5', 10, ''),
('  aye', 'aye@g', 'ewewe34', 'The Witcher 3: Wild Hunt', '10.5 GB', 'e242443434', '$30.8', 18, ''),
('ko ko ko', 'ko@g', '32323232', 'LEGO® Marvel Super Heroes ', '14.5 GB', '3223232', '$55.8', 19, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_name` varchar(244) NOT NULL,
  `product_id` int(244) NOT NULL,
  `detail` varchar(244) NOT NULL,
  `product_image` varchar(244) NOT NULL,
  `size` varchar(244) NOT NULL,
  `price` varchar(244) NOT NULL,
  `language` varchar(244) NOT NULL,
  `date` varchar(244) NOT NULL,
  `genre` varchar(244) NOT NULL,
  `discount` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_name`, `product_id`, `detail`, `product_image`, `size`, `price`, `language`, `date`, `genre`, `discount`) VALUES
('kirby™ and Forgotten Land ', 11, 'Float off on an all-new adventure as the powerful puffball, Kirby. Explore in 3D stages as you discover a mysterious world with abandoned structures from a past civilization—like a shopping mall.', 'kirby.jfif', '6.2 GB', '$55.9', 'Japan,English     ', 'March 25, 2022', 'Action', '$80.5'),
('Metroid™ Dread\n', 12, 'Upon investigating a mysterious transmission on Planet ZDR, Samus faces a mysterious foe that traps her in this dangerous world. \n', 'metro.jfif', '4.3 GB\n', '$40.5', 'Japan,English', 'October 8, 2021\n', 'Action', '$70.4'),
('LEGO® Marvel Super Heroes ', 13, 'Join your favorite Super Heroes and Super Villains from different eras and realities as \r\nthey go head-to-head with the time-traveling Kang the Conqueror in the all-new, original adventure, LEGO® Marvel Super Heroes 2.', 'lego.jfif', '14.5 GB', '$55.8', 'English, French', 'February 12, 2019', 'Action', '$88.4'),
('The Witcher 3: Wild Hunt', 15, 'Winner of over 250 Game of the Year awards, The Witcher 3: Wild Hunt is a story-driven, \r\nopen world adventure set in a dark fantasy universe.\r\n', 'witcher.jfif', '10.5 GB', '$30.8', 'English, French', 'January 28, 2021', 'Action', '$50'),
('TRIANGLE STRATEGY™\r\n', 18, 'Command a group of units as Serenoa, heir of House Wolffort, in a tangled plot where key choices you make will influence the story.\r\n', 'train.jfif', '5.8 GB\r\n', '$25.8', 'Japanese, French', 'March 4, 2022\r\n', 'Adventure\r\n', '$40'),
('Ninja Hightway\r\n', 20, 'Each title is still just as fun as you remember while providing the same high speed action of the original releases.\r\nLook forward to heated battles with fearsome opponents!', 'ninja.jfif', '3.8 GB\r\n', '$25', 'Japanese, British English', 'June 10, 2021', 'Action,Adventure\r\n', '$30'),
('Nintendo Switch™ Sports\r\n', 23, 'Get moving* with Soccer, Volleyball, Bowling, Tennis, Badminton, \r\nand Chambara (Swordplay) using Joy-Con™ controllers! Controls are intuitive.', 'sport.jfif', '3 GB', '$30', 'Japanese, British English', 'July 20, 2021', 'Sports\r\n', '$40'),
('Super Smash Bros\r\n', 26, 'Based on one of the most iconic locations in the series, gives you a grand tour of\r\n a whimsically sinister castle. As the battle nears its close.', 'super.jfif', '3.6 GB\r\n', '$25', 'British English, French', 'October 18, 2021\r\n', 'Adventure', '$30.6'),
('Fortnite', 27, 'Join the Resistance in the final battle to free the Zero Point!\r\nThe IO has lined up guards and sky stations, but the Resistance is equipped with new tactics like sprinting, mantling, and more. ', 'fort.jfif', '13.7 GB\r\n', '$20', 'Japanese, French, German', 'June 12, 2018\r\n', 'Action\r\n', '$30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin id` int(244) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(244) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `order_id` int(244) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(244) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
