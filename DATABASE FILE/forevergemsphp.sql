-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 03:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forevergemsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(1, 'admin', 'CAC29D7A34687EB14B37068EE4708E7B', 'admin@mail.com', '', '2024-10-27 13:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `rs_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`rs_id`, `c_id`, `title`, `image`) VALUES
(1, 1, 'Graceful Neckpieces', 'neck3.jpg'),
(2, 2, 'Charming Rings', 'br3.jpg'),
(3, 3, 'Elegant Cuffs & Bracelets', 'br2.jpg'),
(4, 4, 'Statement Earrings', 'ear5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jewelry`
--

CREATE TABLE `jewelry` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jewelry`
--

INSERT INTO `jewelry` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(1, 1, 'Emerald Snake Necklace', 'Emerald Snake Necklace Silver Serpent', 24.00, '62908867a48e4.jpg'),
(2, 1, 'Leaf Necklace', 'This Amazing Sapphire Leaf Necklace Set looks very cute and trendy.', 36.00, '629089fee52b9.jpg'),
(3, 4, 'Evie Drops', 'An ultra-modern earring with dangling elegance. These gorgeous earrings are worthy of your most special moments - whether they\'re big or small.', 45.00, 'ear1.jpg'),
(4, 1, 'Butterfly Choker', 'Elegant gold butterfly choker necklace, Beautiful regal regency princess necklace, Evening prom teardrop choker, White rhinestone jewelry', 18.00, '62908d393465b.jpg'),
(5, 2, 'Blue Emerald Ring', 'Bright Deep Green Emerald Four Stone Ring', 9.00, 'ring1.jpg'),
(6, 2, 'Petite Ring', 'Simple Modern Rust-Red Cinnamon Garnet Gold Ring', 5.00, 'ring2.jpg'),
(7, 2, 'Alexandra Sapphire Ring', 'Alexandra features a dazzling halo of sparkling diamonds, paired with an elegant basket and a sleek tapered band.', 14.00, 'ring3.jpg'),
(8, 2, 'Flower Stone Ring', 'A beautiful piece of jewelry designed with floral pearls, symbolizing nature\'s beauty, femininity, and grace.', 11.00, 'ring5.jpg'),
(9, 3, 'Luxury Stainless Steel Bracelet', 'Indulge in the epitome of sophistication with our Luxury Stainless Steel Bracelet. Meticulously crafted from premium stainless steel', 5.00, 'br1.jpg'),
(10, 3, 'Chunky Gold Bracelet', 'Bohemian Ethnic Style Vintage Gold Bracelet', 7.00, 'br4.jpg'),
(11, 3, 'Pearl Bracelet', 'Radiant Freshwater Pearl Gold Beaded Bracelet', 6.00, 'br5.jpg'),
(12, 3, 'Navy blue crystal Bracelet', 'Gorgeous bracelet featuring round crystals in rich navy blue and steel blue.', 11.00, 'br6.jpg'),
(13, 4, 'Samrina Milky Earrings', 'These Samrina milky earrings are expertly made of silver, plated in gold, and adorned with glossy mother of pearl for an elegant finish.', 27.00, 'ear2.jpg'),
(14, 4, 'Gold-Toned Drop Earrings', 'Gold-Toned Drop earrings, has artificial stones', 9.00, 'ear3.jpg'),
(15, 4, 'Georgian diamond long earrings', 'Designed to make a bold statement, these earrings feature an elegant interplay of deep pewter tones and shimmering gold, making them perfect for special occasions.', 6.00, 'ear4.jpg'),
(16, 4, 'Howls Earrings', 'Gold Hugging Hoop Earrings, Green gem stone', 10.00, 'ear6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jewel_category`
--

CREATE TABLE `jewel_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jewel_category`
--

INSERT INTO `jewel_category` (`c_id`, `c_name`, `date`) VALUES
(1, 'Necklaces', '2024-11-17 05:10:07'),
(2, 'Rings', '2024-11-17 05:10:20'),
(3, 'Bracelets', '2024-11-17 05:10:36'),
(4, 'Earrings', '2024-11-17 05:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(1, 2, 'in process', 'none', '2024-10-27 05:17:49'),
(2, 3, 'in process', 'none', '2024-10-27 11:01:30'),
(3, 2, 'closed', 'thank you for your order!', '2024-10-27 11:11:41'),
(4, 3, 'closed', 'none', '2024-10-27 11:42:35'),
(5, 4, 'in process', 'none', '2024-10-27 11:42:55'),
(6, 1, 'rejected', 'none', '2024-10-27 11:43:26'),
(7, 7, 'in process', 'none', '2024-10-27 13:03:24'),
(8, 8, 'in process', 'none', '2024-10-27 13:03:38'),
(9, 9, 'rejected', 'thank you', '2024-10-27 13:03:53'),
(10, 7, 'closed', 'thank you for your ordering with us', '2024-10-27 13:04:33'),
(11, 8, 'closed', 'thanks ', '2024-10-27 13:05:24'),
(12, 5, 'closed', 'none', '2024-10-27 13:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(1, 'eric', 'Eric', 'Lopez', 'eric@mail.com', '1458965547', 'a32de55ffd7a9c4101a0c5c8788b38ed', '87 Armbrester Drive', 1, '2024-10-27 08:40:36'),
(2, 'harry', 'Harry', 'Holt', 'harryh@mail.com', '3578545458', 'bc28715006af20d0e961afd053a984d9', '33 Stadium Drive', 1, '2024-10-27 08:41:07'),
(3, 'james', 'James', 'Duncan', 'james@mail.com', '0258545696', '58b2318af54435138065ee13dd8bea16', '67 Hiney Road', 1, '2024-10-27 08:41:37'),
(4, 'christine', 'Christine', 'Moore', 'christine@mail.com', '7412580010', '5f4dcc3b5aa765d61d8327deb882cf99', '114 Test Address', 1, '2024-10-28 05:14:42'),
(5, 'scott', 'Scott', 'Miller', 'scott@mail.com', '7896547850', '5f4dcc3b5aa765d61d8327deb882cf99', '63 Charack Road', 1, '2024-10-27 10:53:51'),
(6, 'liamoore', 'Liam', 'Moore', 'liamoore@mail.com', '7896969696', '5f4dcc3b5aa765d61d8327deb882cf99', '122 Bleck Street', 1, '2024-10-27 12:57:00'),
(7, 'shahla', 'shahla', 'Gufran', 'shahlagufran@gmail.com', '6283917298', 'fcea920f7412b5da7be0cf42b8c93759', '', 1, '2024-11-17 07:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(1, 4, 'Spring Rolls', 2, 6.00, 'rejected', '2024-10-27 11:43:26'),
(2, 4, 'Prawn Crackers', 1, 7.00, 'closed', '2024-10-27 11:11:41'),
(3, 5, 'Chicken Madeira', 1, 23.00, 'closed', '2024-10-27 11:42:35'),
(4, 5, 'Cheesy Mashed Potato', 1, 5.00, 'in process', '2024-10-27 11:42:55'),
(5, 5, 'Meatballs Penne Pasta', 1, 10.00, 'closed', '2024-10-27 13:18:03'),
(6, 5, 'Yorkshire Lamb Patties', 1, 14.00, NULL, '2024-10-27 11:40:51'),
(7, 6, 'Yorkshire Lamb Patties', 1, 14.00, 'closed', '2024-10-27 13:04:33'),
(8, 6, 'Lobster Thermidor', 1, 36.00, 'closed', '2024-10-27 13:05:24'),
(9, 6, 'Stuffed Jacket Potatoes', 1, 8.00, 'rejected', '2024-10-27 13:03:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`rs_id`);

--
-- Indexes for table `jewelry`
--
ALTER TABLE `jewelry`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `jewel_category`
--
ALTER TABLE `jewel_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `rs_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jewelry`
--
ALTER TABLE `jewelry`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jewel_category`
--
ALTER TABLE `jewel_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
