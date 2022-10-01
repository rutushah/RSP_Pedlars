-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 01:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsppedlar`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpost`
--

CREATE TABLE `addpost` (
  `id` int(11) NOT NULL,
  `postTitle` varchar(45) NOT NULL,
  `price` int(100) NOT NULL,
  `description` text NOT NULL,
  `soldBy` varchar(50) NOT NULL,
  `vinNumber` varchar(60) NOT NULL,
  `make` varchar(60) NOT NULL,
  `purchaseYear` varchar(60) NOT NULL,
  `warrantyCars` varchar(60) NOT NULL,
  `carFaxReport` varchar(60) NOT NULL,
  `maintenanceReport` varchar(60) NOT NULL,
  `uploadImage` varchar(250) NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpost`
--

INSERT INTO `addpost` (`id`, `postTitle`, `price`, `description`, `soldBy`, `vinNumber`, `make`, `purchaseYear`, `warrantyCars`, `carFaxReport`, `maintenanceReport`, `uploadImage`, `userId`) VALUES
(10, 'test', 4000, 'A car (or automobile) is a wheeled motor vehicle used for\n         transportation. Most definitions of cars say that they run primarily on roads, seat \n         one to eight people, have four wheels, and mainly transport people rather than goods.\n         A car (or automobile) is a wheeled motor vehicle \n           used for transportation. Most definitions of cars say that they run primarily on roads,\n            seat one to eight people, have four wheels, and mainly transport people rather than goods.\n            A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions\n             of cars say that they run primarily on roads, seat one to eight people, have four wheels,\n              and mainly transport people rather than goods.', 'Lee', '456', 'kia', 'dhsdh', '2018', '1', 'pexels-bethe-observer-5463115.jpg', './images/dodge-challenger-srt8-gd10e7424d_1920.jpg', 9),
(17, 'Tesla', 56, 'A car (or automobile) is a wheeled motor vehicle used for          transportation. Most definitions of cars say that they run primarily on roads, seat           one to eight people, have four wheels, and mainly transport people rather than goods.          A car (or automobile) is a wheeled motor vehicle             used for transportation. Most definitions of cars say that they run primarily on roads,             seat one to eight people, have four wheels, and mainly transport people rather than goods.             A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions              of cars say that they run primarily on roads, seat one to eight people, have four wheels,               and mainly transport people rather than goods.', 'rutu', '3525241', 'Mercedes', 'G Wagon', '3421', '7885', 'pexels-bethe-observer-5463115.jpg', 'images/dodge-challenger-srt8-gd10e7424d_1920.jpg', 9),
(32, 'G wagon', 0, 'A car (or automobile) is a wheeled motor vehicle used for          transportation. Most definitions of cars say that they run primarily on roads, seat           one to eight people, have four wheels, and mainly transport people rather than goods.          A car (or automobile) is a wheeled motor vehicle             used for transportation. Most definitions of cars say that they run primarily on roads,             seat one to eight people, have four wheels, and mainly transport people rather than goods.             A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions              of cars say that they run primarily on roads, seat one to eight people, have four wheels,               and mainly transport people rather than goods.', 'Jhon', '123', 'Mercedes', 'Bentley', '2018', '2', '', './images/pexels-bethe-observer-5463115.jpg', 9),
(33, 'newtest1', 4000, 'A car (or automobile) is a wheeled motor vehicle used for          transportation. Most definitions of cars say that they run primarily on roads, seat           one to eight people, have four wheels, and mainly transport people rather than goods.          A car (or automobile) is a wheeled motor vehicle             used for transportation. Most definitions of cars say that they run primarily on roads,             seat one to eight people, have four wheels, and mainly transport people rather than goods.             A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions              of cars say that they run primarily on roads, seat one to eight people, have four wheels,               and mainly transport people rather than goods.', 'himanshu', '734673', 'sdzbhsdzj', 'sdjfgvbkj', '2008', '5', '', './images/MX-Social.jpg', 9),
(34, 'New Car for sale', 6000, 'A car (or automobile) is a wheeled motor vehicle used for\n         transportation. Most definitions of cars say that they run primarily on roads, seat \n         one to eight people, have four wheels, and mainly transport people rather than goods.\n         A car (or automobile) is a wheeled motor vehicle \n           used for transportation. Most definitions of cars say that they run primarily on roads,\n            seat one to eight people, have four wheels, and mainly transport people rather than goods.\n            A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions\n             of cars say that they run primarily on roads, seat one to eight people, have four wheels,\n              and mainly transport people rather than goods.', 'Rutu Shah', '3456432', 'BMW', 'Coupe', '2021', '6', '', './images/image1.jpg', 9),
(35, 'New Data', 3000, 'A car (or automobile) is a wheeled motor vehicle used for\n         transportation. Most definitions of cars say that they run primarily on roads, seat \n         one to eight people, have four wheels, and mainly transport people rather than goods.\n         A car (or automobile) is a wheeled motor vehicle \n           used for transportation. Most definitions of cars say that they run primarily on roads,\n            seat one to eight people, have four wheels, and mainly transport people rather than goods.\n            A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions\n             of cars say that they run primarily on roads, seat one to eight people, have four wheels,\n              and mainly transport people rather than goods.', 'Detu', '33452212', 'BMW', 'SUV', '2020', '2', '', './images/best-luxury-car-brands-luxe-digital@2x.jpg', 9),
(36, 'Tesla', 4000, 'A car (or automobile) is a wheeled motor vehicle used for\n         transportation. Most definitions of cars say that they run primarily on roads, seat \n         one to eight people, have four wheels, and mainly transport people rather than goods.\n         A car (or automobile) is a wheeled motor vehicle \n           used for transportation. Most definitions of cars say that they run primarily on roads,\n            seat one to eight people, have four wheels, and mainly transport people rather than goods.\n            A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions\n             of cars say that they run primarily on roads, seat one to eight people, have four wheels,\n              and mainly transport people rather than goods.', 'wsfdg', 'jsadj', 'jdfjn', 'jndfjd', 'wkedfnj', 'efkfd', '', './images/download.jpg', 9),
(40, 'csd', 0, 'A car (or automobile) is a wheeled motor vehicle used for\n         transportation. Most definitions of cars say that they run primarily on roads, seat \n         one to eight people, have four wheels, and mainly transport people rather than goods.\n         A car (or automobile) is a wheeled motor vehicle \n           used for transportation. Most definitions of cars say that they run primarily on roads,\n            seat one to eight people, have four wheels, and mainly transport people rather than goods.\n            A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions\n             of cars say that they run primarily on roads, seat one to eight people, have four wheels,\n              and mainly transport people rather than goods.', 'csd', '12', 'Test', 'Test', '2001', '4', '', './images/best-luxury-car-brands-luxe-digital@2x.jpg', 9),
(41, 'sedrftgh', 3400, 'A car (or automobile) is a wheeled motor vehicle used for\n         transportation. Most definitions of cars say that they run primarily on roads, seat \n         one to eight people, have four wheels, and mainly transport people rather than goods.\n         A car (or automobile) is a wheeled motor vehicle \n           used for transportation. Most definitions of cars say that they run primarily on roads,\n            seat one to eight people, have four wheels, and mainly transport people rather than goods.\n            A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions\n             of cars say that they run primarily on roads, seat one to eight people, have four wheels,\n              and mainly transport people rather than goods.', 'sdfdjn', '234532', 'xzhcj', 'dffg', 'd1033', 'sdfg', '', './images/download.jpg', 9),
(42, 'Tesla', 3000, 'A car (or automobile) is a wheeled motor vehicle used for\n         transportation. Most definitions of cars say that they run primarily on roads, seat \n         one to eight people, have four wheels, and mainly transport people rather than goods.\n         A car (or automobile) is a wheeled motor vehicle \n           used for transportation. Most definitions of cars say that they run primarily on roads,\n            seat one to eight people, have four wheels, and mainly transport people rather than goods.\n            A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions\n             of cars say that they run primarily on roads, seat one to eight people, have four wheels,\n              and mainly transport people rather than goods.', 'Tesla', '3636236226', 'Test', 'tesy', '2020', '5', '', './images/images.jpg', 9),
(43, 'Ferrari For Sale', 5000, 'A car (or automobile) is a wheeled motor vehicle used for\n         transportation. Most definitions of cars say that they run primarily on roads, seat \n         one to eight people, have four wheels, and mainly transport people rather than goods.\n         A car (or automobile) is a wheeled motor vehicle \n           used for transportation. Most definitions of cars say that they run primarily on roads,\n            seat one to eight people, have four wheels, and mainly transport people rather than goods.\n            A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions\n             of cars say that they run primarily on roads, seat one to eight people, have four wheels,\n              and mainly transport people rather than goods.', 'Rutu Shah', '1234564789', 'Ferrari', 'Coupe', '2019', '5', '', './images/images.jpg', 9),
(44, 'Dodge', 4000, 'test', 'hshfh', '2435436262', 'sghsdgh', 'ghdfhhj', 'dhfhdfh', '5', '', './images/download.jpg', 9),
(46, 'Dodge', 4000, 'A car (or automobile) is a wheeled motor vehicle used for\r\n         transportation. Most definitions of cars say that they run primarily on roads, seat \r\n         one to eight people, have four wheels, and mainly transport people rather than goods.\r\n         A car (or automobile) is a wheeled motor vehicle \r\n           used for transportation. Most definitions of cars say that they run primarily on roads,\r\n            seat one to eight people, have four wheels, and mainly transport people rather than goods.\r\n            A car (or automobile) is a wheeled motor vehicle used for transportation. Most definitions\r\n             of cars say that they run primarily on roads, seat one to eight people, have four wheels,\r\n              and mainly transport people rather than goods.', 'Sinthia Verma', '2352353256', 'BMW', 'SUV', '2019', '8', '', './images/pexels-ishan-kulshrestha-8641226.jpg', 24),
(47, 'daniel', 1000000, 'he the best', 'pargol', '123456789', 'BMW', 'X6', '2022', '1', '', './images/mypic.jpg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `user_pass`) VALUES
(1, 'rspPedlarAdmin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(100) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fname`, `lname`, `email`, `telephone`, `message`) VALUES
(1, 'Rutu', 'Shah', 'rutushah105@gmail.com', '5142334393', 'Hi this is test message'),
(2, 'Rutu', 'Shah', 'rutushah105@gmail.com', '5142334393', 'hi test\r\n'),
(3, 'Rutu', 'Shah', 'rutushah105@gmail.com', '5236465789', 'hi ttest'),
(6, 'Rutu', 'Shah', 'rutushah105@gmail.com', '5526362652', 'this is test message'),
(9, 'pargol', 'poshtareh', 'pargol.poshtareh@gmail.com', '72368732424', 'hekloo djfhjsdfjgdfkjgdskfjkdshfkjsdfh');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(45) NOT NULL,
  `cpassword` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstName`, `lastName`, `email`, `phone`, `password`, `cpassword`, `status`, `type`) VALUES
(1, 'tapan1', 'shah', 'tapanshah1993@gmail.com', 2147483647, '123', '123', 0, 0),
(2, 'RutuBuyer', 'Shah123', 'rutushah103@gmail.com', 2147483647, '123', '123', 0, 0),
(7, 'shivani', 'bansal', 'rutushah102@gmail.com', 2147483647, '123', '123', 0, 0),
(8, 'Harsh', 'Shah', 'harsh@gmail.com', 2147483647, '123', '123', 0, 0),
(9, 'RutuSellar', 'Shah', 'rutushah105@gmail.com', 7405, '123', '123', 0, 1),
(21, 'Khushal', 'DayalaTest', 'khushal@gmail.com', 2147483647, '123', '123', 0, 0),
(22, 'Tapan1', 'Shah', 'tapan@gmail.com', 123454355, '1234', '1234', 0, 0),
(23, 'Sinthia', 'Verma', 'sinthiaverma123@gmail.com', 2147483647, '123', '123', 0, 0),
(24, 'Sinthia', 'Sellar1', 'sinthiaverma701@gmail.com', 123243555, '123', '123', 0, 1),
(25, 'pari', 'parposhtareh', 'pargol.poshtareh@gmail.com', 2147483647, 'Azizam123', 'Azizam123', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpost`
--
ALTER TABLE `addpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_userId` (`userId`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpost`
--
ALTER TABLE `addpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addpost`
--
ALTER TABLE `addpost`
  ADD CONSTRAINT `fk_userId` FOREIGN KEY (`userId`) REFERENCES `register` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
