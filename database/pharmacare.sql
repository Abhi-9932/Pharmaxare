-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 02:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE `category_info` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(55) NOT NULL,
  `minMargin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`id`, `categoryName`, `minMargin`) VALUES
(4, 'test2', '120');

-- --------------------------------------------------------

--
-- Table structure for table `company_creation_info`
--

CREATE TABLE `company_creation_info` (
  `id` int(11) NOT NULL,
  `comName` varchar(55) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address1` varchar(55) NOT NULL,
  `address2` varchar(55) NOT NULL,
  `address3` varchar(55) NOT NULL,
  `address4` varchar(155) NOT NULL,
  `image` varchar(255) NOT NULL,
  `branchCode` varchar(50) NOT NULL,
  `faxNo` varchar(20) NOT NULL,
  `webAddress` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `gstin` varchar(55) NOT NULL,
  `date` varchar(20) NOT NULL,
  `dl_no` varchar(30) NOT NULL,
  `exp1` varchar(50) NOT NULL,
  `mfg_lic_no` varchar(30) NOT NULL,
  `exp2` varchar(50) NOT NULL,
  `service_tax` varchar(50) NOT NULL,
  `exp3` varchar(590) NOT NULL,
  `food_lic_no` varchar(50) NOT NULL,
  `exp4` varchar(50) NOT NULL,
  `Jurisdiction` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `business_type` varchar(30) NOT NULL,
  `financial_year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_creation_info`
--

INSERT INTO `company_creation_info` (`id`, `comName`, `phone`, `address1`, `address2`, `address3`, `address4`, `image`, `branchCode`, `faxNo`, `webAddress`, `email`, `gstin`, `date`, `dl_no`, `exp1`, `mfg_lic_no`, `exp2`, `service_tax`, `exp3`, `food_lic_no`, `exp4`, `Jurisdiction`, `country`, `business_type`, `financial_year`) VALUES
(15, 'SkillTechlab  pvt.Ltd', '+91 75960 32211', 'Ergo Tower, 10th Floor', 'Street Number 23', 'Bidhannagar, Kolkata', 'West Bengal 700091', 'pharma.jpg', '', '', 'www.skilltechlab.com', 'nfo@skilltechlab.com', 'SKIll1234', '', 'DL546', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` int(11) NOT NULL,
  `cname` varchar(55) NOT NULL,
  `prefrences` varchar(50) NOT NULL,
  `invprint` varchar(55) NOT NULL,
  `order1` varchar(20) NOT NULL,
  `dumpDay` varchar(50) NOT NULL,
  `minMargin` varchar(50) NOT NULL,
  `receive` varchar(55) NOT NULL,
  `salesTax` varchar(50) NOT NULL,
  `purchaseTax` varchar(50) NOT NULL,
  `cess1` varchar(50) NOT NULL,
  `cess2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `cname`, `prefrences`, `invprint`, `order1`, `dumpDay`, `minMargin`, `receive`, `salesTax`, `purchaseTax`, `cess1`, `cess2`) VALUES
(3, 'Cipla', 'no', '2', 'yes', '60', '100', '90', '6', '6', '150', '150');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(55) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address1` varchar(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `state` varchar(55) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `date` varchar(55) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_id`, `customer_name`, `email1`, `mobile`, `email2`, `phone`, `address1`, `Contact`, `address2`, `fax`, `state`, `city`, `zip`, `country`, `balance`, `date`, `time`) VALUES
(5, 'Ratan sahoo', 'ratan@gmail.com', '8900675897', '', '', 'jhargram', '', '', '', 'West Bengal', 'kolkata', '700065', 'India', '3000', '2022-7-4', '12:24 pm'),
(6, 'Anish Roy', 'riju@gmail.com', '9932035382', 'anish1@gmail.com', '9932035383', 'kolkata', '993203657', 'hooghly', 'A4', 'West Bengal', 'Hooghly', '700065', 'USA', '0', '2022-8-17', '05:42 pm');

-- --------------------------------------------------------

--
-- Table structure for table `hsn_info`
--

CREATE TABLE `hsn_info` (
  `id` int(11) NOT NULL,
  `hac` varchar(55) NOT NULL,
  `shortName` varchar(55) NOT NULL,
  `sgst` varchar(55) NOT NULL,
  `cgst` varchar(55) NOT NULL,
  `igst` varchar(55) NOT NULL,
  `type` varchar(55) NOT NULL,
  `unit` varchar(55) NOT NULL,
  `cess` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsn_info`
--

INSERT INTO `hsn_info` (`id`, `hac`, `shortName`, `sgst`, `cgst`, `igst`, `type`, `unit`, `cess`) VALUES
(1, 'test1', 'Anup Pan', '6', '6', '12', 'test1', '1', '123'),
(2, 'test2', '', '', '', '', 'test2', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_info`
--

CREATE TABLE `inventory_info` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `type` varchar(30) NOT NULL,
  `hide` varchar(30) NOT NULL,
  `product` varchar(30) NOT NULL,
  `packing` varchar(30) NOT NULL,
  `askdose` varchar(30) NOT NULL,
  `unit1` varchar(55) NOT NULL,
  `unit2` varchar(55) NOT NULL,
  `decimal1` varchar(55) NOT NULL,
  `colortype` varchar(55) NOT NULL,
  `itemtype` varchar(55) NOT NULL,
  `company` varchar(55) NOT NULL,
  `salt` varchar(55) NOT NULL,
  `category` varchar(55) NOT NULL,
  `hsn/sac` varchar(55) NOT NULL,
  `local` varchar(55) NOT NULL,
  `sgst` varchar(55) NOT NULL,
  `cgst` varchar(55) NOT NULL,
  `central` varchar(55) NOT NULL,
  `igst` varchar(55) NOT NULL,
  `cgr` varchar(30) NOT NULL,
  `mrp` varchar(55) NOT NULL,
  `prate` varchar(55) NOT NULL,
  `cost` varchar(55) NOT NULL,
  `ratea` varchar(30) NOT NULL,
  `rateb` varchar(30) NOT NULL,
  `ratec` varchar(30) NOT NULL,
  `convinj` varchar(55) NOT NULL,
  `convcas` varchar(20) NOT NULL,
  `negative` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_info`
--

INSERT INTO `inventory_info` (`id`, `status`, `type`, `hide`, `product`, `packing`, `askdose`, `unit1`, `unit2`, `decimal1`, `colortype`, `itemtype`, `company`, `salt`, `category`, `hsn/sac`, `local`, `sgst`, `cgst`, `central`, `igst`, `cgr`, `mrp`, `prate`, `cost`, `ratea`, `rateb`, `ratec`, `convinj`, `convcas`, `negative`) VALUES
(5, '', '', '', 'test222', '12', '', '', '', '', '', '', 'Cipla', 'test1', '', 'test1', '', '5', '5', '', '', '', '7', '5', '', '', '', '', '', '', ''),
(6, '', '', '', 'test333', '15', '', '', '', '', '', '', 'Cipla', 'test2', '', 'test2', '', '10', '10', '', '0', '', '5', '10', '', '', '', '', '', '', ''),
(7, '', '', '', 'testing very very very bigname', '30', '', '', '', '', '', '', 'selected company', 'selected item', '', '455', '', '0', '0', '', '30', '', '8', '20', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_info`
--

CREATE TABLE `invoice_info` (
  `invoice_id` int(15) NOT NULL,
  `customer_name` varchar(55) NOT NULL,
  `invoice_no` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `details` varchar(155) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `med_information` varchar(155) NOT NULL,
  `batch` varchar(55) NOT NULL,
  `avail_qty` varchar(55) NOT NULL,
  `expiry_date` varchar(55) NOT NULL,
  `unit` varchar(55) NOT NULL,
  `quantity` varchar(55) NOT NULL,
  `box_qty` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL,
  `discount` varchar(55) NOT NULL,
  `invoice_discount` varchar(55) NOT NULL,
  `total_discount` varchar(55) NOT NULL,
  `cgst` varchar(55) NOT NULL,
  `sgst` varchar(55) NOT NULL,
  `igst` varchar(55) NOT NULL,
  `total_gst` varchar(55) NOT NULL,
  `grand_total` varchar(55) NOT NULL,
  `previous` varchar(55) NOT NULL,
  `net_total` varchar(55) NOT NULL,
  `paid_amount` varchar(55) NOT NULL,
  `due_amount` varchar(55) NOT NULL,
  `change` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_info`
--

CREATE TABLE `manufacturer_info` (
  `manufacturer_id` int(15) NOT NULL,
  `manufacturer_name` varchar(55) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `balance` varchar(55) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer_info`
--

INSERT INTO `manufacturer_info` (`manufacturer_id`, `manufacturer_name`, `email1`, `mobile`, `email2`, `phone`, `address1`, `contact`, `address2`, `fax`, `state`, `city`, `zip`, `country`, `balance`, `date`, `time`) VALUES
(1, 'Sun Pharma', 'sun@gmail.com', '9932035987', 'sun1@gmail.com', '9932035384', 'Jhargram', '993203657', 'Ghoradhara', 'A5', 'West Bengal', 'Jhargram', '721507', 'India', '3000', '2022-7-6', '12:08 pm'),
(3, 'Emcee Pharma	', 'emcee@gmail.com', '9932035987', '', '9932035383', 'Garia', '', '', '', 'West Bengal', 'Kolkata', '700065', 'India', '0', '2022-7-6', '02:17 pm');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_info`
--

CREATE TABLE `medicine_info` (
  `id` int(11) NOT NULL,
  `product_id` varchar(55) NOT NULL,
  `strength` varchar(55) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `generic_name` varchar(55) NOT NULL,
  `box_size` varchar(55) NOT NULL,
  `shelf` varchar(55) NOT NULL,
  `unit` varchar(55) NOT NULL,
  `medicine_details` varchar(255) NOT NULL,
  `category_name` varchar(55) NOT NULL,
  `medicine_type` varchar(55) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `manufacturer_name` varchar(55) NOT NULL,
  `manufacturer_price` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_info`
--

INSERT INTO `medicine_info` (`id`, `product_id`, `strength`, `product_name`, `generic_name`, `box_size`, `shelf`, `unit`, `medicine_details`, `category_name`, `medicine_type`, `price`, `image`, `manufacturer_name`, `manufacturer_price`, `status`) VALUES
(1, 'as344', 'high', 'test', 'test', 'Basil10', 'test', '', 'test', 'Antibacterials', 'drugs', '123', '', 'Sun Pharma', '2000', 'active'),
(2, '', '', '', '', '', '', '', '', '', '', '', 'bc48b47b6064cda1eede8a8ed6028cf7.jpg', '', '', 'active'),
(3, '', '', '', '', '', '', '', '', '', '', '', 'N/A', '', '', 'inactive'),
(4, '', '', '', '', '', '', 'burn unit,1', '', '', '', '', 'N/A', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_leaf_setting`
--

CREATE TABLE `medicine_leaf_setting` (
  `id` int(15) NOT NULL,
  `leaf_type` varchar(55) NOT NULL,
  `total_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_leaf_setting`
--

INSERT INTO `medicine_leaf_setting` (`id`, `leaf_type`, `total_num`) VALUES
(1, 'Basil', '10'),
(2, 'test2', '5');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category _id` int(15) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category _id`, `category_name`, `status`) VALUES
(3, 'Antibacterials', 'active'),
(4, 'Antiarrhythmics', 'inactive'),
(5, 'Test1', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `type_id` int(10) NOT NULL,
  `type_name` varchar(55) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`type_id`, `type_name`, `status`) VALUES
(1, 'drugs', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_info`
--

CREATE TABLE `purchase_info` (
  `purchase_id` int(11) NOT NULL,
  `manufacturer_name` varchar(55) NOT NULL,
  `invoice_no` varchar(155) NOT NULL,
  `date` varchar(20) NOT NULL,
  `details` varchar(55) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `bank` varchar(155) NOT NULL,
  `med_name` varchar(55) NOT NULL,
  `batch_id` varchar(20) NOT NULL,
  `exp_date` varchar(20) NOT NULL,
  `stock_qty` varchar(255) NOT NULL,
  `box_qty` varchar(155) NOT NULL,
  `quantity` varchar(155) NOT NULL,
  `manufacturer_price` varchar(255) NOT NULL,
  `box_mrp` varchar(155) NOT NULL,
  `total_purchase_price` varchar(255) NOT NULL,
  `sub_total` varchar(155) NOT NULL,
  `sgst` varchar(55) NOT NULL,
  `cgst` varchar(55) NOT NULL,
  `discount` varchar(55) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid_amount` varchar(55) NOT NULL,
  `due_amount` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_master_info`
--

CREATE TABLE `purchase_master_info` (
  `id` int(11) NOT NULL,
  `purchaseName` varchar(155) NOT NULL,
  `purchaseDate` varchar(50) NOT NULL,
  `receiveDate` varchar(50) NOT NULL,
  `entryNum` varchar(155) NOT NULL,
  `partyNum` varchar(155) NOT NULL,
  `type` varchar(50) NOT NULL,
  `discountamountTotal` varchar(55) NOT NULL,
  `gstTotalAmount` varchar(55) NOT NULL,
  `igstTotalAmount` varchar(55) NOT NULL,
  `TotalAmount` varchar(55) NOT NULL,
  `roundOff` varchar(155) NOT NULL,
  `inWords` varchar(155) NOT NULL,
  `preDate` varchar(20) NOT NULL,
  `preBy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_master_info`
--

INSERT INTO `purchase_master_info` (`id`, `purchaseName`, `purchaseDate`, `receiveDate`, `entryNum`, `partyNum`, `type`, `discountamountTotal`, `gstTotalAmount`, `igstTotalAmount`, `TotalAmount`, `roundOff`, `inWords`, `preDate`, `preBy`) VALUES
(207, 'Neptal', '2022-09-20', '2022-09-29', '1', 'Nab123', 'yes', '6.25', '12.5', '0.00', '131.25', '131', 'One Hundred and Thirty One Only ', '20/9/2022', 'admin@gmail.com'),
(208, 'Rashmi Group', '2022-09-20', '2022-09-29', '2', 'Cipla657', 'yes', '87.50', '50', '150.00', '862.50', '863', 'Eight Hundred and Sixty Three Only ', '20/9/2022', 'admin@gmail.com'),
(209, '', '', '', '3', '', '', '0.00', '6', '0.00', '66.00', '66', 'Sixty Six Only ', '20/9/2022', 'admin@gmail.com'),
(210, '', '', '', '4', '', '', '0.00', '30', '0.00', '180.00', '180', 'One Hundred and Eighty Only ', '20/9/2022', 'admin@gmail.com'),
(211, '', '', '', '5', '', '', '0.00', '56', '0.00', '336.00', '336', 'Three Hundred and Thirty Six Only ', '20/9/2022', 'admin@gmail.com'),
(212, '', '', '', '6', '', '', '0.00', '50', '0.00', '300.00', '300', 'Three Hundred ', '20/9/2022', 'admin@gmail.com'),
(213, '', '', '', '7', '', '', '0.00', '6', '0.00', '66.00', '66', 'Sixty Six Only ', '20/9/2022', 'admin@gmail.com'),
(214, '', '', '', '8', '', '', '0.00', '12.5', '0.00', '137.50', '138', 'One Hundred and Thirty Eight Only ', '20/9/2022', 'admin@gmail.com'),
(215, '', '', '', '9', '', '', '0.00', '0', '150.00', '650.00', '650', 'Six Hundred and Fifty Only ', '20/9/2022', 'admin@gmail.com'),
(216, '', '', '', '10', '', '', '0.00', '24', '0.00', '144.00', '144', 'One Hundred and Forty Four Only ', '20/9/2022', 'admin@gmail.com'),
(217, '', '', '', '10', '', '', '0.00', '24', '0.00', '144.00', '144', 'One Hundred and Forty Four Only ', '20/9/2022', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_product_info`
--

CREATE TABLE `purchase_product_info` (
  `id` int(11) NOT NULL,
  `entryNum` varchar(155) NOT NULL,
  `partyNum` varchar(155) NOT NULL,
  `productName` varchar(155) NOT NULL,
  `pack` varchar(125) NOT NULL,
  `batch` varchar(125) NOT NULL,
  `exp` varchar(155) NOT NULL,
  `quantity` varchar(125) NOT NULL,
  `free` varchar(55) NOT NULL,
  `mrp` varchar(50) NOT NULL,
  `purchaseRate` varchar(125) NOT NULL,
  `basicAmount` varchar(125) NOT NULL,
  `discount` varchar(125) NOT NULL,
  `discountamount` varchar(125) NOT NULL,
  `sgst` varchar(55) NOT NULL,
  `sgstIA` varchar(55) NOT NULL,
  `cgst` varchar(55) NOT NULL,
  `cgstIA` varchar(55) NOT NULL,
  `igst` varchar(55) NOT NULL,
  `igstIA` varchar(55) NOT NULL,
  `amount` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_product_info`
--

INSERT INTO `purchase_product_info` (`id`, `entryNum`, `partyNum`, `productName`, `pack`, `batch`, `exp`, `quantity`, `free`, `mrp`, `purchaseRate`, `basicAmount`, `discount`, `discountamount`, `sgst`, `sgstIA`, `cgst`, `cgstIA`, `igst`, `igstIA`, `amount`) VALUES
(229, '1', 'Nab123', 'product1', '		12', 'batch1', '2022-09-20', '25', '5', '7', '5', '125', '5', '6.25', '5', '6.25', '5', '6.25', '', '0', '131.25'),
(230, '2', 'Cipla657', 'product1', '		15', 'batch2', '2022-09-20', '25', '5', '5', '10', '250', '5', '12.5', '10', '25', '10', '25', '0', '0', '287.5'),
(231, '2', 'Cipla657', 'product1', '		30', 'batch3', '2022-09-20', '25', '5', '8', '20', '500', '15', '75', '0', '0', '0', '0', '30', '150', '575'),
(232, '3', '', 'product2', '		12', 'batch1', '', '12', '', '7', '5', '60', '', '0', '5', '3', '5', '3', '', '0', '66'),
(233, '4', '', 'product2', '		15', 'batch2', '', '15', '', '5', '10', '150', '', '0', '10', '15', '10', '15', '0', '0', '180'),
(234, '5', '', 'product2', '		15', 'batch3', '', '28', '', '5', '10', '280', '', '0', '10', '28', '10', '28', '0', '0', '336'),
(235, '6', '', 'product3', '		15', 'batch1', '2022-09-16', '25', '', '5', '10', '250', '', '0', '10', '25', '10', '25', '0', '0', '300'),
(236, '7', '', 'product3', '		12', 'batch2', '', '12', '', '7', '5', '60', '', '0', '5', '3', '5', '3', '', '0', '66'),
(237, '8', '', 'product3', '		12', 'batch3', '', '25', '', '7', '5', '125', '', '0', '5', '6.25', '5', '6.25', '', '0', '137.5'),
(238, '9', '', 'product3', '		30', 'batch4', '', '25', '', '8', '20', '500', '', '0', '0', '0', '0', '0', '30', '150', '650'),
(239, '10', '', 'product2', '		15', 'batch4', '', '12', '', '5', '10', '120', '', '0', '10', '12', '10', '12', '0', '0', '144');

-- --------------------------------------------------------

--
-- Table structure for table `salt_info`
--

CREATE TABLE `salt_info` (
  `id` int(11) NOT NULL,
  `newSalt` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salt_info`
--

INSERT INTO `salt_info` (`id`, `newSalt`) VALUES
(3, 'test1'),
(4, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(15) NOT NULL,
  `unit_name` varchar(55) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `unit_name`, `status`) VALUES
(1, 'burn unit', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_info`
--
ALTER TABLE `category_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_creation_info`
--
ALTER TABLE `company_creation_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `hsn_info`
--
ALTER TABLE `hsn_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_info`
--
ALTER TABLE `inventory_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_info`
--
ALTER TABLE `invoice_info`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `manufacturer_info`
--
ALTER TABLE `manufacturer_info`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `medicine_info`
--
ALTER TABLE `medicine_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_leaf_setting`
--
ALTER TABLE `medicine_leaf_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category _id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `purchase_info`
--
ALTER TABLE `purchase_info`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_master_info`
--
ALTER TABLE `purchase_master_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_product_info`
--
ALTER TABLE `purchase_product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salt_info`
--
ALTER TABLE `salt_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_info`
--
ALTER TABLE `category_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_creation_info`
--
ALTER TABLE `company_creation_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hsn_info`
--
ALTER TABLE `hsn_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory_info`
--
ALTER TABLE `inventory_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoice_info`
--
ALTER TABLE `invoice_info`
  MODIFY `invoice_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturer_info`
--
ALTER TABLE `manufacturer_info`
  MODIFY `manufacturer_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicine_info`
--
ALTER TABLE `medicine_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicine_leaf_setting`
--
ALTER TABLE `medicine_leaf_setting`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category _id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase_info`
--
ALTER TABLE `purchase_info`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_master_info`
--
ALTER TABLE `purchase_master_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `purchase_product_info`
--
ALTER TABLE `purchase_product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `salt_info`
--
ALTER TABLE `salt_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
