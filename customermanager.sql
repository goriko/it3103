-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 06:50 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customermanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `variant` varchar(64) NOT NULL,
  `transmission` varchar(64) NOT NULL,
  `price` decimal(64,0) NOT NULL,
  `horse_power` int(64) NOT NULL,
  `fuel` varchar(64) NOT NULL,
  `displacement` float NOT NULL,
  `wheel_size` int(8) NOT NULL,
  `engine_spec` varchar(64) NOT NULL,
  `max_capacity` int(4) NOT NULL,
  `stock` int(32) NOT NULL,
  `downpayment` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`unit_id`, `name`, `variant`, `transmission`, `price`, `horse_power`, `fuel`, `displacement`, `wheel_size`, `engine_spec`, `max_capacity`, `stock`, `downpayment`) VALUES
(1, 'Carens', '1.7 LX CRDI', 'Automatic', '1195000', 141, 'Diesel', 1685, 16, 'U2 1.7 Diesel', 5, 0, 250000),
(2, 'Carens', '1.7 EX CRDI', 'Automatic', '1525000', 141, 'Diesel', 1685, 16, 'U2 1.7 Diesel', 5, 88, 250000),
(3, 'Carens', '1.7 EX CRDI', 'Automatic', '1270000', 141, 'Diesel', 1685, 16, 'U2 1.7 Diesel', 7, 96, 250000),
(5, 'Carens', '1.7 LX CRDI', 'Manual', '1095000', 141, 'Diesel', 1685, 16, 'U2 1.7 Diesel', 5, 97, 220000),
(6, 'Carens', '1.7 EX CRDI', 'Manual', '1425000', 141, 'Diesel', 1685, 16, 'U2 1.7 Diesel', 5, 96, 220000),
(7, 'Carens', '1.7 EX CRDI', 'Manual', '1150000', 141, 'Diesel', 1685, 16, 'U2 1.7 Diesel', 7, 99, 220000),
(8, 'Carnival', 'S 3.3L', 'Automatic', '2300000', 206, 'Petrol', 3342, 17, 'V6 DOHC GDI1 CVVT2', 8, 98, 380000),
(9, 'Carnival', 'S 2.2L', 'Automatic', '1700000', 147, 'Diesel', 2199, 17, 'In-line 4 cyl. VGT3 CRDi4 16 valve', 8, 98, 380000),
(10, 'Carnival', 'Platinum 3.3L ', 'Automatic', '2500000', 243, 'Petrol', 3420, 17, 'V6 DOHC GDI1 CVVT3', 8, 99, 380000),
(11, 'Carnival', 'Platinum 2.2L ', 'Automatic', '1900000', 169, 'Diesel', 2499, 17, 'In-line 4 cyl. VGT4 CRDi4 16 valve', 8, 99, 380000),
(12, 'Carnival', 'S 3.3L', 'Manual', '2150000', 206, 'Petrol', 3342, 17, 'V6 DOHC GDI1 CVVT2', 8, 99, 350000),
(13, 'Carnival', 'S 2.2L', 'Manual', '1600000', 147, 'Diesel', 2199, 17, 'In-line 4 cyl. VGT3 CRDi4 16 valve', 8, 99, 350000),
(14, 'Carnival', 'Platinum 3.3L ', 'Manual', '2350000', 243, 'Petrol', 3420, 17, 'V6 DOHC GDI1 CVVT3', 8, 99, 350000),
(15, 'Carnival', 'Platinum 2.2L ', 'Manual', '1750000', 169, 'Diesel', 2499, 17, 'In-line 4 cyl. VGT4 CRDi4 16 valve', 8, 99, 350000),
(16, 'Forte Hatchback', '1.6L EX', 'Automatic', '965000', 147, 'Petrol', 1999, 17, 'Nu 2.0 MPI', 5, 99, 88000),
(17, 'Forte Hatchback', '1.6L EX', 'Manual', '945000', 147, 'Petrol', 1999, 17, 'Nu 2.0 MPI', 5, 99, 88000),
(18, 'Forte Hatchback', '2.0L EX', 'Automatic', '1190000', 164, 'Petrol', 1999, 17, 'I-4 GDI', 5, 99, 88000),
(19, 'Forte Hatchback', '2.0L EX', 'Manual', '1050000', 164, 'Petrol', 1999, 17, 'I-4 GDI', 5, 99, 88000),
(20, 'Forte Koup', '2.4L EX', 'Automatic', '1390000', 204, 'Petrol', 1591, 15, 'Gamma 1.6 T-GDI', 5, 99, 100000),
(21, 'Forte Koup', '2.4L EX', 'Manual', '1290000', 204, 'Petrol', 1591, 15, 'Gamma 1.6 T-GDI', 5, 99, 100000),
(22, 'Forte Koup', '2.0L EX', 'Automatic', '1200000', 156, 'Petrol', 1339, 15, 'Theta II I4', 5, 99, 100000),
(23, 'Forte Koup', '2.0L EX', 'Manual', '10900000', 156, 'Petrol', 1339, 15, 'Theta II I4', 5, 99, 100000),
(24, 'Forte', '2.0L LX', 'Automatic', '950000', 147, 'Petrol', 1999, 15, '2.0 liter, DOHC, 16-valve I-4', 5, 99, 95000),
(25, 'Forte', '2.0L LX', 'Manual', '940000', 147, 'Petrol', 1999, 15, '2.0 liter, DOHC, 16-valve I-4', 5, 99, 95000),
(26, 'Forte', '2.0L S', 'Automatic', '1250000', 147, 'Petrol', 1999, 15, '2.0 liter, DOHC, 16-valve I-4, Atkinson Cycle', 5, 99, 95000),
(27, 'Forte', '2.0L S', 'Manual', '1150000', 147, 'Petrol', 1999, 15, '2.0 liter, DOHC, 16-valve I-4, Atkinson Cycle', 5, 99, 95000),
(28, 'Picanto', '1.0 EX', 'Manual', '575000', 63, 'Petrol', 1248, 14, 'In-line 4 cyl. DOHC MPI1 D-CVVT2 16 valve\r\n', 5, 99, 38000),
(29, 'Picanto', '1.0 EX', 'Automatic', '675000', 63, 'Petrol', 1248, 14, 'In-line 4 cyl. DOHC MPI1 D-CVVT2 16 valve\r\n', 5, 99, 49000),
(30, 'Rio', '1.2 EX', 'Manual', '635000', 84, 'Petrol', 1248, 14, 'Kappa 1.2 Gasoline Engine', 5, 99, 40000),
(31, 'Rio', '1.4 EX', 'Automatic', '775000', 107, 'Petrol', 1396, 14, 'Gamma 1.4 Gasoline Engine', 5, 99, 50000),
(32, 'Rio', '1.4 EX', 'Manual', '735000', 107, 'Petrol', 1396, 14, 'Gamma 1.4 Gasoline Engine', 5, 99, 50000),
(33, 'Sorento', 'Si 3.3L', 'Automatic', '2300000', 199, 'Petrol', 3342, 17, 'V6 DOHC MPI1 D-CVVT2', 7, 94, 350000),
(34, 'Sorento', 'Si 3.3L', 'Manual', '2200000', 199, 'Petrol', 3342, 17, 'V6 DOHC MPI1 D-CVVT2', 7, 99, 350000),
(35, 'Sorento', 'Si 2.2L', 'Automatic', '2100000', 137, 'Diesel', 2199, 17, 'In-line 4 cyl. E-VGT3 CRDi4 16 valve', 7, 98, 250000),
(36, 'Sorento', 'Si 2.2L', 'Manual', '2000000', 147, 'Diesel', 2199, 17, 'In-line 4 cyl. E-VGT3 CRDi4 16 valve', 7, 99, 250000),
(37, 'Sportage', 'Si 2.0L EX 4x2', 'Automatic', '1445000', 114, 'Petrol', 1999, 17, 'In-line 4 cyl. DOHC MPI1 D-CVVT2 16 valve', 7, 99, 135000),
(38, 'Sportage', 'Si 2.0L EX 4x2', 'Manual', '1345000', 114, 'Petrol', 1999, 17, 'In-line 4 cyl. DOHC MPI1 D-CVVT2 16 valve', 7, 99, 130000),
(39, 'Sportage', 'Si 2.0L EX 4x4', 'Automatic', '1595000', 136, 'Diesel', 1995, 17, 'In-line 4 cyl. DOHC MPI1 D-CVVT2 16 valve', 7, 99, 138000);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `CivilStatus` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `emp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `Name`, `CivilStatus`, `Address`, `ContactNumber`, `emp`) VALUES
(1, 'goriii', 'ye', 'qwerasdzx', 12345, 'daryl'),
(2, 'gail', 'way ayo', 'balay sa iya mama', 999, 'daryl');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL,
  `Car` int(11) NOT NULL,
  `OrderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Customer_id`, `Car`, `OrderDate`) VALUES
(5, 1, 3, '2017-09-06'),
(6, 2, 4, '2017-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `Order_ID` int(11) NOT NULL,
  `ordertype` varchar(50) NOT NULL,
  `term` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `MonthsToPay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Fname`, `Lname`, `Username`, `Password`) VALUES
(1, 'Edrian', 'Guanzon', 'gorii', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `Customer_id` (`Customer_id`),
  ADD KEY `Order_ID` (`Order_ID`),
  ADD KEY `Customer_id_2` (`Customer_id`),
  ADD KEY `Order_ID_2` (`Order_ID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
