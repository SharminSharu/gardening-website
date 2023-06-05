-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 03:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `her_98`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `logo`, `title`, `details`) VALUES
(1, 'fa fa-award fa-3x', 'Award Winning', 'Dedicated team members have a deep understanding of the client\'s project and business goals.'),
(2, 'fa fa-users fa-3x', 'Dedicated Team', 'Dedicated team members have a deep understanding of the client\'s project and business goals.');

-- --------------------------------------------------------

--
-- Table structure for table `bg`
--

CREATE TABLE `bg` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bg`
--

INSERT INTO `bg` (`id`, `photo`, `title`) VALUES
(1, 'assets/img/carousel-1.jpg', 'Make Your Home Like Garden'),
(2, 'assets/img/carousel-2.jpg', 'Create Your Own Small Garden At Home');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(2, 'kiron', 'k@gmail.com', 'Hello', '                        drg            \r\n                                '),
(4, 'MD.ABU TAHER', 'super@email.com', 'liog', '<p>hvj</p>'),
(10, 'sharmin akter', 'super@email.com', 'liog', '<p>yu</p>'),
(11, 'Ashab Jamil', 'sharminakter@gmail.com', 'liog', '<p>uy</p>'),
(12, 'Tamima', 'dealer@email.com', 'cdfh', 'gdf\r\n                                '),
(13, 'sharmin akter', 'super@email.com', 'liog', '<p>dfjft</p>'),
(14, 'sharmin akter', 'super@email.com', 'liog', '<p>dfjft</p>'),
(15, 'sharmin akter', 'super@email.com', 'liog', '<p>dfjft</p>'),
(16, 'sharmin akter', 'super@email.com', 'liog', '<p>dfjft</p>'),
(17, 'SHARMIN AKTER', 'super@email.com', 'vgjk', '<p>vikju</p>'),
(18, 'SHARMIN AKTER', 'super@email.com', 'vgjk', '<p>vikju</p>'),
(19, 'SHARMIN AKTER', 'super@email.com', 'vgjk', '<p>vikju</p>'),
(21, 'xd', 'zxfv', 'zf', '<p>zgf</p>'),
(22, 'Faria', 'sharminaktersharu98@gmail.com', 'cfgj', '<p>cghk</p>'),
(23, 'koip', 'i@g.com', 'jipo', 'iop\r\n                                '),
(24, 'Habib', 'sharminsharu10@gmail.com', 'gdhjd', '\r\n                                shsshs'),
(25, 'Habib', 'sharminsharu10@gmail.com', 'gdhjd', '\r\n                                shsshs');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `email`) VALUES
(1, 'fg@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `logo`, `title`) VALUES
(1, 'fa fa-check fa-3x ', '100% Satisfaction'),
(2, 'fa fa-users fa-3x', 'Dedicated Team');

-- --------------------------------------------------------

--
-- Table structure for table `feature_1`
--

CREATE TABLE `feature_1` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feature_1`
--

INSERT INTO `feature_1` (`id`, `icon`, `title`, `details`) VALUES
(1, 'fa fa-times', 'No Hidden Cost', 'Maintains lawns by sodding, reseeding, rolling and mowing and by operating related equipment.'),
(2, 'fa fa-users ', 'Dedicated Team', 'Maintains lawns by sodding, reseeding, rolling and mowing and by operating related equipment.'),
(3, 'fa fa-phone', '24/7 Available', 'Maintains lawns by sodding, reseeding, rolling and mowing and by operating related equipme');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `photo`, `name`) VALUES
(7, '43a2093a1157aed8ae2c3d506ab20266.jpg', 'pruning plant'),
(8, '3ec9613c522177944b4206e87fb428ff.jpg', '	Landscaping'),
(13, '23d621f34717f6592725f3a490fd0094.jpg', 'Garden Maintanance'),
(14, '6544e96098f17922ca2bb74d08850a42.jpg', 'Irrigation and drainage'),
(15, 'f093391d39461778172d294105554994.jpg', 'Green Technology'),
(16, '95b5e3b08823f36c889fc864c6aa91d9.jpg', 'Urban Gardening');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `moblie` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `name`, `email`, `moblie`, `service`, `msg`) VALUES
(1, 'dyt', 'dgs', 'sery', 'rysd', 'rthurt'),
(2, 'MD.ABU TAHER', 'super@email.com', 'f', 'f', 'df'),
(3, 'sharmin akter', 'sharminakter@gmail.com', '01515246820', 'Cleaning', 'hello'),
(4, 'sharmin akter', 'sharminakter@gmail.com', '01515246820', 'Cleaning', 'hello'),
(5, 'mijan', 'dealer@email.com', '16463', 'gcvhju', 'xuft'),
(6, 'fth', 'cgj@fhdfhy.com', 'fc', 'fcj', 'fcjh');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `icon` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `photo`, `icon`, `title`, `details`) VALUES
(13, '21af5ee03c32c176a1cbbec726e9c48c.jpg', 'ed846687657ee298843469fbfb026635.png', 'Green Technology', '<p>Green Technology, which are covered with plants, can help to insulate buildings, reduce stormwater runoff, and improve air quality.<br></p>'),
(14, '88277babe7ccccff9a6d02958790c363.jpg', 'be77de6ceaf8b695b24ffbad8cb17023.png', 'Landscaping', '<p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">Landscape design enhances the aesthetic appeal of a building. It entails planning the space outside or surrounding a construction or a building.</span><br></p>'),
(15, 'fa7a871aa17de749da0788fbb1e9c994.jpg', 'ed3f8fdcdd229bd4fdb4942cec76c4d0.png', 'Pruning plants', '<p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">Pruning removes dead and dying branches and stubs, allowing room for new growth and protecting your property and passerby from damage.</span><br></p>'),
(16, '836f05b756b04c7a0589ff69df9e7368.jpg', '7cd3a7fafddd87c8451f6789815c58c9.png', 'Irrigation & Drainage', '<p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">Irrigation and drainage are the practices which were<b style=\"\">&nbsp;</b></span><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">initially adopted for water deficit and excess water regions for increasing agricultural production</span><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">.&nbsp;</span><br></p>'),
(18, '20a15faa001fc50c9b637a843a9c75b9.jpg', 'f6cb7ff45758e4bb6890b8d6950b0a60.png', 'Garden Maintenance', '<p><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif;\">Maintains flowers, bushes, trees, and shrubs. Implements detailed landscape plans. Plants and propagates bedding plants.</span><br></p>'),
(19, '6ea19116c94f4c61f18a70c7ec7dc557.jpg', 'dd34d86d5ec47c5a00419ba25e2389c2.png', 'Urban Gardening', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">The practice of growing vegetables, fruit and plants in&nbsp;</span><span style=\"font-weight: bold; color: rgb(95, 99, 104); font-family: arial, sans-serif; font-size: 14px;\">urban</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;areas, such as schools, backyards or apartment balconies.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `photo`, `name`, `profession`) VALUES
(9, '3d55c54ec45bf8346da9dfb8054a1865.jpg', 'Maria Lima', 'Landscape Designer'),
(10, '47e3a8dc3d8465b31c2ef9548c2be6e5.jpg', 'Emdadul Huq', 'Senior Gardener'),
(11, '9842490f356389b7a9b1173695ce2957.jpg', 'Masuka Nowrin', 'Garden Designer');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `desig` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `photo`, `details`, `name`, `desig`) VALUES
(5, 'b7ee844db73a82b0fa20a588d0a9f063.jpg', '<p>\"If you are looking for a rare book, you need to check out Parchment Bound Books on Main Street. I was looking for a first edition for my dad\'s birthday and I had almost given up\".<br></p>', 'Altap Mahmud', 'BussinessMan'),
(6, '08b17de4d3af0efb9a9351860722c8d5.jpg', '<p>\"If you are looking for a rare book, you need to check out Parchment Bound Books on Main Street. I was looking for a first edition for my dad\'s birthday and I had almost given up\".<br></p>', 'Sabiha Alam', 'Service holder'),
(7, '9ee329db71c36ce32886efa73b06ae0f.jpg', '<p>\"If you are looking for a rare book, you need to check out Parchment Bound Books on Main Street. I was looking for a first edition for my dad\'s birthday and I had almost given up\".<br></p>', 'Miraj Ali', 'Service holder'),
(8, '05e9306d1c4ed9d063f961d8f834247e.jpg', '<p>\"If you are looking for a rare book, you need to check out Parchment Bound Books on Main Street. I was looking for a first edition for my dad\'s birthday and I had almost given up\".<br></p>', 'Maliha Hana', 'Housemaker');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'sharmin', 'sharmin@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bg`
--
ALTER TABLE `bg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_1`
--
ALTER TABLE `feature_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bg`
--
ALTER TABLE `bg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feature_1`
--
ALTER TABLE `feature_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
