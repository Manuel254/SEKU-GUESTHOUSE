-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 03:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seku_guest_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `usname`, `pass`) VALUES
(27, 'admin2', 'passseku');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `message` varchar(32) NOT NULL,
  `cdate` date DEFAULT NULL,
  `confirm` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `message`, `cdate`, `confirm`) VALUES
(1, 'dave', 719489574, 'davisnyabwari1@gmail.com', 'The food i was served was nice', '2020-04-30', 'Read'),
(2, 'Immanuel Ngumbau Kituku', 703103690, 'Immanuelkituku@gmail.com', 'I love your website aki', '2020-05-07', 'Read');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `FOOD_ID` int(10) NOT NULL,
  `NAME_OF_FOOD` varchar(100) NOT NULL,
  `CAT_OF_FOOD` varchar(100) NOT NULL,
  `PRICE` float(10,2) NOT NULL,
  `IMAGES` varchar(200) NOT NULL,
  `DESCRIPTION` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`FOOD_ID`, `NAME_OF_FOOD`, `CAT_OF_FOOD`, `PRICE`, `IMAGES`, `DESCRIPTION`) VALUES
(1, 'Tea', 'Hot Beverages', 25.00, 'tea.jpg', 'Grab yourself a cup of tea today.'),
(2, 'Black coffee', 'Hot Beverages', 20.00, 'black_coffee.jpg', 'Grab a cup of coffee today.'),
(3, 'Chocolate', 'Hot Beverages', 50.00, 'chocolate..jpg', 'Grab a cup of chocolate today.'),
(4, 'Doughnut', 'Snacks', 30.00, 'doughnut.jpg', 'A nice accompaniment with any hot beverage like tea...'),
(5, 'Andazi', 'Snacks', 15.00, 'maandazi.jpg', 'A cheaper alternative to doughnut.'),
(6, 'Arrow root', 'Snacks', 50.00, 'arrow_roots.jpg', 'A healthier choice.'),
(7, 'Sweet potatoes', 'Snacks', 40.00, 'sweet_potatoes.jpg', 'A healthier snack too and sweeter.'),
(8, 'Boiled egg', 'Snacks', 25.00, 'boiled_egg.jpg', 'A nice snack to start your day with.'),
(9, 'Fried egg', 'Snacks', 50.00, 'fried_egg.jpg', 'A nice snack for breakfast.'),
(10, 'Pancake', 'Snacks', 25.00, 'pancakes.jpg', 'An alternative to bread.'),
(11, 'Sausage', 'Snacks', 50.00, 'sausages.jpg', 'Adds up to make a perfect breakfast.'),
(12, 'Samosa', 'snack', 40.00, 'samosa.jpg', 'A nice snack.'),
(13, 'Fruit platter', 'desserts', 100.00, 'fruit-platter.jpg', 'A nice way to end your meal.'),
(14, 'Ripe banana', 'desserts', 10.00, 'banana.jpg', 'A nice fruit.'),
(15, 'Melon wedge', 'desserts', 30.00, 'melon-wedge.jpg', 'A refreshing fruit after a meal.'),
(16, 'Lunch per plate', 'main dishes', 300.00, 'lunch-per-plate.jpg', 'A plate of lunch.'),
(17, 'Buffet lunch', 'main dishes', 600.00, 'lunch-per-plate.jpg', 'A plate of buffet.'),
(18, 'Mineral water(quencher)', 'soft drinks', 40.00, 'mineral-water.jpg', 'Water to quench your thirst.'),
(19, 'Mineral water(Dasani)', 'soft drinks', 60.00, 'mineral-water.jpg', 'Water to quench your thirst.'),
(20, 'Soda (300ml)', 'soft drinks', 50.00, 'soda.jpg', 'A bottle of soda to quench your thirst.'),
(21, 'Rice', 'starches', 40.00, 'rice.jpg', 'Loved by many.'),
(22, 'Ugali', 'starches', 25.00, 'ugalii.jpg', 'A staple food loved by many.'),
(23, 'Chapati', 'starches', 20.00, 'chapati.jpg', 'A wonderful meal that can accompany many choices.'),
(24, 'Githeri', 'starches', 80.00, 'githeri.jpg', 'A healthy choice indeed.'),
(25, 'Roast potatoes', 'starches', 100.00, 'roast-potatoes.jpg', 'You will not regret buying this for sure.'),
(26, 'Cabbage', 'vegetables', 25.00, 'cabbage.jpg', 'A wonderful vegetable indeed. Can be eaten as salad too.'),
(27, 'Kunde', 'vegetables', 25.00, 'kunde.jpg', 'Nice meal indeed.'),
(28, 'Kienyeji Vegetables', 'vegetables', 50.00, 'ugalii.jpg', 'We all love kienyeji vegetables.'),
(29, 'Beef', 'main dishes', 130.00, 'beef.jpg', 'A yummy dish.'),
(30, 'Goat meat', 'main dishes', 160.00, 'beef.jpg', 'Just like beef but better.'),
(31, 'Pork chops', 'main dishes', 160.00, 'pork-chops.jpg', 'Delicious indeed.'),
(32, 'Fried Tilapia', 'main dishes', 200.00, 'tilapia.jpg', 'A dish loved by many,'),
(33, 'Fried chicken (1/4)', 'main dishes', 250.00, 'chicken.jpg', 'You should try this. Wonderful indeed.'),
(34, 'Fried chicken (1/8)', 'main dishes', 130.00, 'chicken.jpg', 'You should try this. Wonderful indeed.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `profile_pic` blob,
  `e_mail` varchar(50) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`FOOD_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `FOOD_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
