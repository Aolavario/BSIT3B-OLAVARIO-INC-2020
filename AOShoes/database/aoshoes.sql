-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 12:35 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aoshoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Fila'),
(2, 'Adidas'),
(3, 'Reebok'),
(4, 'Vans'),
(5, 'Sperry'),
(6, 'Nike'),
(7, 'Anta');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'aniza', 'aniza@gmail', '75d18f1f747ae5497f05c5f5488ecca9', 'admin'),
(2, 'olavario', 'olavario@gmail', '7a12b019e4d3bb2e7acf383feae0a897', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(100) NOT NULL,
  `brand_id` int(100) NOT NULL,
  `item_name` text NOT NULL,
  `item_price` text NOT NULL,
  `item_desc` varchar(5000) NOT NULL,
  `item_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `brand_id`, `item_name`, `item_price`, `item_desc`, `item_image`) VALUES
(1, 1, 'Xlite Blitz ', 'Php 1,999.00', '- Breathable full mesh upper <br>- Padded collar lining <br>- Flexible outsole lets your foot move naturally <br>- Full rubber sole <br>- Slip-on type with Lace up closure for a secure and adjustable fit<br>- Shock absorbing midsole', '1628927198_Xlite Blitz.jpg'),
(2, 1, 'Switch Lite ', 'Php 1,999.00', '- Best for running<br>- Breathable full mesh upper<br>- Textile inner<br>- Shock-absorbing midsole<br>- Flexible full rubber sole<br>- Padded collar lining<br>- Back heel and tongue pull tabs<br>- Lace up fastening<br>- Round toe', '1628927272_Switch Lite.jpg'),
(3, 1, 'Blender Running Shoes', 'Php 4,598.00', '- Best for Running<br>- Breathable Mesh upper<br>- Molded EVA midsole<br>- Rubber sole<br>- High density EVA foot bed<br>- Soft padded collar<br>- Round toe<br>- Heel pull tab<br>- Lace-up fastening', '1628927351_Blender Running.jpg'),
(4, 1, 'Speed Cross Running Shoes', 'Php 2,639.00', '- Best for running<br>- Ultra hide polyurethane with <br>breathable mesh and spandex upper<br>- Molded EVA midsole<br>- Rubber sole<br>- Round toe<br>- Lace up closure', '1628927426_Speed Cross.jpg'),
(5, 1, 'Alliance Lite Running Shoes', 'Php 1,999.00', '- Best for Running<br>- Breathable full mesh upper<br>- Shock absorbing inner<br>- Rubber sole<br>- Round toe<br>- Slip-on style with lace closure', '1628927521_Alliance Lite.jpg'),
(6, 2, 'Ultraboost 21 Primeblue Shoes', 'Php 9,500.00', '- Adidas performance<br>- Best for running<br>- Cushioned running shoes- Primeknit textile upper<br>- Textile insole<br>- Stretchweb Continental rubber outsole<br>- Boost midsole<br>- Stabilising torsion system<br>- Lace up fastening<br>- Round toe', '1628927602_ultraboost 21 primeblue.jpg'),
(7, 2, 'Adilette Lite Slides', 'Php 1,499.00', '- Adidas Originals<br>- Best for Lifestyle<br>- Synthetic upper<br>- Synthetic inner<br>- Synthetic sole- Round toe', '1628928140_adilette lite.jpg'),
(8, 2, 'Ultraboost 21 Shoes', 'Php 13,395.00', '- Adidas performance<br>- Best for running<br>- 3 stripes knit detail lace up shoes<br>- Textile and synthetic upper<br>- Textile inner<br>- Rubber outsole<br>- Boost midsole<br>- Supportive heel counter<br>- Lace up fastening<br>- Round toecap', '1628928229_ultraboost 21.jpg'),
(9, 2, 'Equipment+ Low-Lop Running Sneakers', 'Php 9,595.00', '- Adidas performance<br>- Best for running<br>- Knit panelled lace up sneakers<br>- Textile upper<br>- Textile inner<br>- Rubber outsole<br>- Boost midsole<br>- Regular tailoring<br>- Lace up fastening<br>- Round toecap', '1628928296_equipment low.jpg'),
(10, 3, 'Ztaur Run Shoes', 'Php 3,999.00', '- Best for running<br>- Mesh with graphic printed lace up shoes<br>- Mesh and synthetic upper<br>- Textile inner<br>- Rubber outsole<br>- Fuel foam reactive midsole<br>- Lace up fastening<br>- Round toecap', '1628928423_Ztaur Run Shoes.jpg'),
(11, 3, 'Reebok Reago Essential 2 Shoes', 'Php 3,049.00', '- Best for training<br>- Mesh lightweight training shoes with overlay detail<br>- Textile and synthetic upper<br>- Textile inner<br>- Rubber outsole<br>- Round toe<br>- Lace fastening', '1628928814_Reebok Reago.jpg'),
(12, 4, 'Era Sneakers', 'Php 2,999.00', '- Canvas upper<br>- Canvas inner<br>- Rubber sole<br>- Vulcanized waffle sole<br>- Lace up fastening<br>- Round toe', '1628928953_Era Sneakers.jpg'),
(13, 4, 'Deck Club Era Sneakers', 'Php 3,499.00', '- Best for Lifestyle<br>- Canvas upper<br>- EVA inner<br>- Rubber waffle sole<br>- Round toe<br>- Lace-up fastening', '1628929049_Deck Club.jpg'),
(14, 4, 'Authentic Sneakers', 'Php 2,998.00', '- Best for Lifestyle<br>- Canvas upper<br>- Canvas inner<br>- Vulcanized waffle sole<br>- Round toe<br>- Lace-up fastening', '1628929118_Authentic Sneakers.jpg'),
(15, 4, 'U-Paint Classic Slip-On Sneakers', 'Php 4,799.00', '- Best for lifestyle<br>- Textile upper<br>- Canvas inner<br>- Vulcanized waffle sole<br>- Padded collar<br>- Slip on<br>- Round toe', '1628929320_U-Paint Classic.jpg'),
(16, 5, 'Crest Vibe Textured Denim Sneaker', 'Php 3,495.00', '- Solid tone lace sneakers<br>- Textile upper<br>- Memory foam insole provides all-day comfort<br>- Flexible, non-marking rubber outsole<br>- Round toe<br>- Rawhide barrel-tied laces for easy <br>on/off and a secure fit', '1628929625_Crest Vibe.jpg'),
(17, 6, 'React Infinity Run Flyknit 2 Running Shoes', 'Php 8,799.00', '- Best for running<br>- Knit upper<br>- Textile inner<br>- Rubber sole<br>- Flywire technology that combines with Flyknit<br>- High foam heights<br>- Lightweight, durable foam<br>- Round toe<br>- Lace up closure', '1628929961_React Infinity.jpg'),
(18, 6, 'Nike Quest 4 Shoes', 'Php 3,895.00', '- Best for running<br>- Swoosh logo contrast details lightweight running shoes<br>- Textile upper<br>- Textile insole<br>- Rubber outsole<br>- Round toe<br>- Lace fastening', '1628930492_Nike Quest.jpg'),
(19, 6, 'Run Swift 2 Shoes', 'Php 4,399.00', '- Best for running<br>- Contrast logo textured running shoes<br>- Textile and synthetic upper<br>- Textile insole<br>- Rubber outsole delivers durable traction<br>- Lightweight cushioning in the heel delivers soft comfort on your route<br>- Foam cushioning delivers a soft underfoot feel<br>- Cushioned collar provides support for your heel<br>- Lace up fastening<br>- Round toe', '1628930582_Run Swift.jpg'),
(20, 6, 'Air Force 1 Shadow', 'Php 7,399.00', '- Best for Lifestyle<br>- Leather and Textile upper<br>- Nike Air cushioned inner<br>- Rubber sole<br>- Round toe<br>- Lace-up fastening', '1628930639_Air Force 1.jpg'),
(21, 7, 'Skywalker X-Game Shoes', 'Php 3,699.00', '- Best for lifestyle<br>- Multi textured casual shoes<br>- Synthetic/textile upper<br>- Textile insole<br>- Rubber outsole<br>- Round toe<br>- Lace up fastening', '1628930740_Skywalker X.jpg'),
(22, 7, 'Antelope Running Shoes', 'Php 4,499.00', '- Best for running<br>- Contrast side logo detail shoes<br>- Textile/TPU upper<br>- Textile inner<br>- Rubber outsole<br>- Lace up fastening<br>- Round toecap', '1628930832_Antelope Running.jpg'),
(23, 7, 'A-Jellylite Running Shoes', 'Php 4,550.00', '- Best for running<br>- Mesh running shoes with iridescent detail<br>- Textile/synthetic upper<br>- Textile insole<br>- Rubber outsole<br>- Round toe<br>- Lace up fastening', '1628930886_A-Jellylite.jpg'),
(24, 7, 'Cross Training Outdoor Shoes', 'Php 2,999.00', '- Best for training\r\n- Textured active shoes with brand logo\r\n- Textile upper\r\n- Textile insole\r\n- Rubber outsole\r\n- Round toe\r\n- Lace up fastening\r\n', '1628930929_Cross Training.jpg'),
(25, 7, 'Soft Walking Cross-Training Shoes', 'Php 3,989.00', '- Best for training<br>- Textured training shoes<br>- Textile/TPU upper<br>- Textile insole<br>- Rubber outsole<br>- Round toe', '1628930977_Soft Walking.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
