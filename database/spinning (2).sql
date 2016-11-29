-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2016 at 07:18 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spinning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(44) NOT NULL,
  `username` varchar(44) NOT NULL,
  `pwd` varchar(44) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
`id` int(55) NOT NULL,
  `agentname` varchar(222) NOT NULL,
  `panno` varchar(222) NOT NULL,
  `area` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `agent%` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `agentname`, `panno`, `area`, `phone`, `agent%`) VALUES
(1, 'fggfb', 'gfbgfb', 'gfgf', 'gfgf', 'gffg');

-- --------------------------------------------------------

--
-- Table structure for table `agententry`
--

CREATE TABLE IF NOT EXISTS `agententry` (
`id` int(22) NOT NULL,
  `agentid` varchar(222) NOT NULL,
  `agentname` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `phonenumber` varchar(222) NOT NULL,
  `agenttype` varchar(222) NOT NULL,
  `agentfor` varchar(222) NOT NULL,
  `panno` varchar(66) NOT NULL,
  `commision` varchar(77) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `agententry`
--

INSERT INTO `agententry` (`id`, `agentid`, `agentname`, `address`, `city`, `state`, `phonenumber`, `agenttype`, `agentfor`, `panno`, `commision`, `datetime`) VALUES
(3, 'A003', 'CHANDRA', 'GUNTUR', 'GUNTUR', 'ANDHRAPRADESH', '9885428170', 'COTTON', 'COTTON PURCHASE', '', '', '2016/11/17 12:42:11 pm'),
(4, 'A008', 'CHIDAMBARAM', 'GUNTUR', 'GUNTUR', 'ANDHRAPRADESH', '9888888888', 'COTTON', 'COTTON PURCHASE', '', '', '2016/11/17 12:44:14 pm'),
(5, 'A001', 'DIRECT', 'A', 'G', 'ANDHRAPRADESH', '1', 'YARN', 'PURCHASE', '', '', '2016/11/17 12:45:16 pm'),
(6, 'A007', 'MANOJ SAVAKAR', 'ADILABAD', 'ADILABAD', 'ANDHRAPRADESH', '9848053234', 'COTTON', 'COTTON PURCHASE', '', '', '2016/11/17 12:50:24 pm'),
(7, 'A009', 'RAMAKRISHNA', 'GUNTUR', 'GUNTUR', 'ANDHRAPRADESH', '8008555264', 'COTTON', 'PURCHASE', '', '', '2016/11/17 12:52:04 pm'),
(8, 'A013', 'SANJEEV KUMAR AGRWAL', 'WARDH', 'WARDH', 'MAHARASTRA', '9422843043', 'COTTON', 'COTTON PURCHASE', '', '', '2016/11/17 12:53:40 pm'),
(9, 'A002', 'SARIDHI & RAMU', 'GUNTUR', 'GUNTUR', 'ANDHRAPRADESH', '0863000000', 'COTTON', 'COTTON PURCHASE', '', '', '2016/11/17 12:55:05 pm'),
(10, 'A010', 'SATISH KUMAR', 'ADILABAD', 'ADILABAD', 'ANDHRAPRADESH', '8008555268', 'COTTON', 'COTTON PURCHASE', '', '', '2016/11/17 12:56:07 pm'),
(11, 'A006', 'SHAFI', 'AMEENABA', 'GUNTUR', 'ANDHRAPRADESH', '9885428170', 'COTTON', 'COTTON PURCHASE', '', '', '2016/11/17 12:58:35 pm'),
(12, 'A012', 'SRI SAI TRADERS LINK', 'GUNTUR', 'GUNTUR', 'ANDHRAPRADESH', '9490114794', 'COTTON', 'PURCHASE', '', '', '2016/11/17 01:02:11 pm'),
(13, 'A004', 'SUBBARAO', 'GUNTUR', 'GUNTUR', 'ANDHRAPRADESH', '9885428170', 'COTTON', 'COTTON PURCHASE', '', '', '2016/11/17 01:03:03 pm'),
(14, 'A005', 'UMAMAHESWARA RAO', 'GUNTUR', 'GUNTUR', 'ANDHRAPRADESH', '12345', 'COTTON', 'COTTON PURCHASE', '', '', '2016/11/17 01:04:02 pm'),
(15, 'A011', 'VASANTH', 'ADILABADH', 'ADILABAD', 'TELANGANA', '123', 'COTTON', 'PURCHASE', '', '', '2016/11/17 01:04:55 pm');

-- --------------------------------------------------------

--
-- Table structure for table `autoconer`
--

CREATE TABLE IF NOT EXISTS `autoconer` (
`id` int(55) NOT NULL,
  `date` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `supervisor` varchar(222) NOT NULL,
  `asm` varchar(222) NOT NULL,
  `mno` varchar(222) NOT NULL,
  `mname` varchar(222) NOT NULL,
  `drumsfrom` varchar(222) NOT NULL,
  `drumsto` varchar(222) NOT NULL,
  `noofdrums` varchar(222) NOT NULL,
  `lotno` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `drumspeed` varchar(222) NOT NULL,
  `prdn` varchar(222) NOT NULL,
  `standardefficiency` varchar(222) NOT NULL,
  `cardno` varchar(222) NOT NULL,
  `empname` varchar(222) NOT NULL,
  `maistry` varchar(222) NOT NULL,
  `prodruntime` varchar(222) NOT NULL,
  `hardwaste` varchar(222) NOT NULL,
  `redlieghts` varchar(222) NOT NULL,
  `actprdn` varchar(222) NOT NULL,
  `efficiency` varchar(222) NOT NULL,
  `mceffy` varchar(222) NOT NULL,
  `drumfrom` varchar(222) NOT NULL,
  `drumto` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `duration` varchar(222) NOT NULL,
  `totalduration` varchar(222) NOT NULL,
  `shiftduration` varchar(222) NOT NULL,
  `reason` varchar(54) NOT NULL,
  `durationreason` varchar(44) NOT NULL,
  `datetime` varchar(222) NOT NULL,
  `module` varchar(77) NOT NULL,
  `prodeachdrum` varchar(44) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `autoconer`
--

INSERT INTO `autoconer` (`id`, `date`, `shift`, `unit`, `supervisor`, `asm`, `mno`, `mname`, `drumsfrom`, `drumsto`, `noofdrums`, `lotno`, `count`, `drumspeed`, `prdn`, `standardefficiency`, `cardno`, `empname`, `maistry`, `prodruntime`, `hardwaste`, `redlieghts`, `actprdn`, `efficiency`, `mceffy`, `drumfrom`, `drumto`, `remarks`, `duration`, `totalduration`, `shiftduration`, `reason`, `durationreason`, `datetime`, `module`, `prodeachdrum`) VALUES
(6, '2016-11-18', 'Day Shift', 'UNIT-1', 'G.SANTOSH KUMAR', '', 'AC-03', '   SCHLAFHORST-X5', '1', '   60', '   60', '1', '32KW', '1400', '744.1', '   93', '', '', '', '', '', '', '722', '', '', '1', '   60', '', '', '', '   510', '', '', '2016/11/19 04:39:06 am', 'Auto coner', '12.6'),
(7, '2016-11-18', 'Day Shift', 'UNIT-1', 'G.SANTOSH KUMAR', '', 'AC-03', '   SCHLAFHORST-X5', '1', '   60', '   60', '1', '40CW', '1400', '595.34', '   93', ' ', '', '', '', '', '', '600', '', '', '1', '   60', '', '', '', '   510', '', '', '2016/11/19 04:52:41 am', 'Auto coner', '9.9225'),
(8, '2016-11-18', 'Day Shift', 'UNIT-1', 'B.V.RAMANA', '', 'AC-03', '   SCHLAFHORST-X5', '1', '   60', '   60', '1', '40KH', '1400', '596', '   93', '', '', '', '55', '', '', '', '', '', '1', '   60', '', '', '', '   510', '', '', '2016/11/19 06:08:51 am', 'Auto coner', '9.9333333333333');

-- --------------------------------------------------------

--
-- Table structure for table `autoconer1`
--

CREATE TABLE IF NOT EXISTS `autoconer1` (
`id` int(22) NOT NULL,
  `supervisor` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `jobber` varchar(222) NOT NULL,
  `tno` varchar(222) NOT NULL,
  `mno` varchar(222) NOT NULL,
  `drumsfrom` varchar(222) NOT NULL,
  `drumsto` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `speed` varchar(222) NOT NULL,
  `production` varchar(222) NOT NULL,
  `packagesdoffed` varchar(222) NOT NULL,
  `eff` varchar(222) NOT NULL,
  `redleight` varchar(222) NOT NULL,
  `anytimeredlieght` varchar(222) NOT NULL,
  `yarnbreaks` varchar(222) NOT NULL,
  `cuts` varchar(222) NOT NULL,
  `yarnjoints` varchar(222) NOT NULL,
  `prodtime` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `autoconer1`
--

INSERT INTO `autoconer1` (`id`, `supervisor`, `shift`, `date`, `jobber`, `tno`, `mno`, `drumsfrom`, `drumsto`, `count`, `speed`, `production`, `packagesdoffed`, `eff`, `redleight`, `anytimeredlieght`, `yarnbreaks`, `cuts`, `yarnjoints`, `prodtime`, `remarks`, `datetime`) VALUES
(1, 'gde', 'Day Shift', '2016-09-14', 'hhhhhhhhhhhhhh', '', '', '55', '55', '', '', '', '', '', '', '', '', '', '', '', '', '2016/09/12 04:01:51 pm');

-- --------------------------------------------------------

--
-- Table structure for table `balemgtvalues`
--

CREATE TABLE IF NOT EXISTS `balemgtvalues` (
`id` int(22) NOT NULL,
  `count` varchar(222) NOT NULL,
  `variety` varchar(222) NOT NULL,
  `specification` varchar(222) NOT NULL,
  `minval1` varchar(222) NOT NULL,
  `minval2` varchar(222) NOT NULL,
  `minval3` varchar(222) NOT NULL,
  `maxval1` varchar(222) NOT NULL,
  `maxval2` varchar(222) NOT NULL,
  `maxval3` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL,
  `area` varchar(44) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `balemgtvalues`
--

INSERT INTO `balemgtvalues` (`id`, `count`, `variety`, `specification`, `minval1`, `minval2`, `minval3`, `maxval1`, `maxval2`, `maxval3`, `datetime`, `area`) VALUES
(1, 'dsfcs', 'dcdc', 'dcd', '', '', '', '', '', '', '2016/08/15 11:24:27 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE IF NOT EXISTS `canteen` (
`id` int(44) NOT NULL,
  `mealsamount` varchar(222) NOT NULL,
  `tiffinamount` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`id`, `mealsamount`, `tiffinamount`) VALUES
(1, '55', '55');

-- --------------------------------------------------------

--
-- Table structure for table `canttentokens`
--

CREATE TABLE IF NOT EXISTS `canttentokens` (
`id` int(44) NOT NULL,
  `date` varchar(222) NOT NULL,
  `empcode` varchar(222) NOT NULL,
  `empname` varchar(222) NOT NULL,
  `noofmealstokens` varchar(222) NOT NULL,
  `nooftiffintokens` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `canttentokens`
--

INSERT INTO `canttentokens` (`id`, `date`, `empcode`, `empname`, `noofmealstokens`, `nooftiffintokens`) VALUES
(1, '2016-08-10', 'ere', 'ergr', '33', '3'),
(2, '2016-08-10', 'ere', 'ergr', '444', 'dfvvdvfvf');

-- --------------------------------------------------------

--
-- Table structure for table `carding`
--

CREATE TABLE IF NOT EXISTS `carding` (
`id` int(55) NOT NULL,
  `date` date NOT NULL,
  `unittype` varchar(55) NOT NULL,
  `shiftt` varchar(222) NOT NULL,
  ` maistry` varchar(222) NOT NULL,
  `supervisor` varchar(222) NOT NULL,
  `asm` varchar(222) NOT NULL,
  `mno` varchar(222) NOT NULL,
  `mname` varchar(222) NOT NULL,
  `lotno` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `deleveryhank` varchar(222) NOT NULL,
  `speed` varchar(222) NOT NULL,
  `standard` varchar(222) NOT NULL,
  `staefficiency` varchar(222) NOT NULL,
  `cardnno` varchar(222) NOT NULL,
  `empname` varchar(222) NOT NULL,
  `acthanks` varchar(222) NOT NULL,
  `waste` varchar(222) NOT NULL,
  `efficiency` varchar(222) NOT NULL,
  `prdnconst` varchar(222) NOT NULL,
  `achieved` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `dura` varchar(222) NOT NULL,
  `totalduration` varchar(222) NOT NULL,
  `shiftduration` varchar(222) NOT NULL,
  `reason` varchar(66) NOT NULL,
  `duration` varchar(55) NOT NULL,
  `datetime` varchar(222) NOT NULL,
  `module` varchar(77) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `carding`
--

INSERT INTO `carding` (`id`, `date`, `unittype`, `shiftt`, ` maistry`, `supervisor`, `asm`, `mno`, `mname`, `lotno`, `count`, `deleveryhank`, `speed`, `standard`, `staefficiency`, `cardnno`, `empname`, `acthanks`, `waste`, `efficiency`, `prdnconst`, `achieved`, `remarks`, `dura`, `totalduration`, `shiftduration`, `reason`, `duration`, `datetime`, `module`) VALUES
(5, '0000-00-00', 'unit-1', 'night shift', 'fgbgfbgbf', 'ggg', 'rtgtrg', '66', 'dd', 'dfvfd', 'fdvfd', 'dffd', 'fddff', 'fdfd', 'dfd', 'fdfvd', 'fvvd', 'vfvf', 'fdvfd', 'fvfvd', 'fdfv', 'fddf', 'dfdf', 'dfvf', 'fdfvvf', 'fvfvfv', 'bbbbbbbbbbbbbbbbbb', '77', '2016/07/22 02:48:04 pm', 'carding');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(55) NOT NULL,
  `category_code` varchar(222) NOT NULL,
  `categoryname` varchar(222) NOT NULL,
  `overtime` varchar(222) NOT NULL,
  `minotlimit` varchar(222) NOT NULL,
  `otaftershifttime` varchar(222) NOT NULL,
  `otstartsafterhours` varchar(222) NOT NULL,
  `gracelate` varchar(222) NOT NULL,
  `graceearly` varchar(222) NOT NULL,
  `latecount` varchar(222) NOT NULL,
  `aftereveryinterval` varchar(222) NOT NULL,
  `deductfromleave` varchar(222) NOT NULL,
  `noofdays` varchar(222) NOT NULL,
  `deductfromatd` varchar(222) NOT NULL,
  `leave` varchar(222) NOT NULL,
  `categorycode` varchar(222) NOT NULL,
  `leavecode` varchar(222) NOT NULL,
  `leavename` varchar(222) NOT NULL,
  `leavedescription` varchar(222) NOT NULL,
  `Maximum no of days allowed in a year` varchar(222) NOT NULL,
  `Maximum no of times allowed in a year` varchar(222) NOT NULL,
  `Maximum days of leave allowed at a time` varchar(222) NOT NULL,
  `Accumulation allowed` varchar(222) NOT NULL,
  `Max days of accumulation allowed` varchar(222) NOT NULL,
  `Encashment allowed` varchar(222) NOT NULL,
  `Negative balance allowed` varchar(222) NOT NULL,
  `Half day allowed` varchar(222) NOT NULL,
  `If weakoff falls in leave, treat as leave` varchar(222) NOT NULL,
  `If holiday falls in leave, treat as leave` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_code`, `categoryname`, `overtime`, `minotlimit`, `otaftershifttime`, `otstartsafterhours`, `gracelate`, `graceearly`, `latecount`, `aftereveryinterval`, `deductfromleave`, `noofdays`, `deductfromatd`, `leave`, `categorycode`, `leavecode`, `leavename`, `leavedescription`, `Maximum no of days allowed in a year`, `Maximum no of times allowed in a year`, `Maximum days of leave allowed at a time`, `Accumulation allowed`, `Max days of accumulation allowed`, `Encashment allowed`, `Negative balance allowed`, `Half day allowed`, `If weakoff falls in leave, treat as leave`, `If holiday falls in leave, treat as leave`, `datetime`) VALUES
(1, 'rere', 'ger', 'on', 'egrr', 'OT after shift time', 'er', 'ergre', 'dd', 'rgge', 'after every interval', 'DEDUCT FORM LEAVE', 'ergrg', 'DEDUCT FORM ATD', 'erggr', 'egrerre', 'ger', 'vfvf', 'ergre', 're', 'ger', 'eg', 'Accumulation allowed', '', 'Encashment allowed', 'Negative balance allowed', 'Half day allowed', 'If weakoff falls in leave, treat as leave', ' If holiday falls in leave, treat as leave ', '2016/08/09 04:53:05 pm'),
(2, 'ewffwe', 'wefef', 'on', 'weffew', 'OT after shift time', 'wef', 'fwe', 'fwe', 'wfe', 'after every interval', 'DEDUCT FORM LEAVE', 'weffe', 'DEDUCT FORM ATD', 'wfefew', 'fdfvd', 'fvvd', 'vfvf', 'fdvfd', 'fvfvd', 'fdfv', 'fddf', 'Accumulation allowed', 'wefefw', 'Encashment allowed', 'Negative balance allowed', 'Half day allowed', 'If weakoff falls in leave, treat as leave', ' If holiday falls in leave, treat as leave ', '2016/08/09 04:54:25 pm');

-- --------------------------------------------------------

--
-- Table structure for table `comber`
--

CREATE TABLE IF NOT EXISTS `comber` (
`id` int(22) NOT NULL,
  `date` varchar(222) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `lotno` varchar(222) NOT NULL,
  `machineno` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `deliveryhank` varchar(222) NOT NULL,
  `speed` varchar(222) NOT NULL,
  `stdhank` varchar(222) NOT NULL,
  `staefficeincy` varchar(222) NOT NULL,
  `totalduration` varchar(222) NOT NULL,
  `shiftduration` varchar(222) NOT NULL,
  `cardno` varchar(222) NOT NULL,
  `employeename` varchar(222) NOT NULL,
  `acthanks` varchar(222) NOT NULL,
  `pneuwaste` varchar(222) NOT NULL,
  `efficiency` varchar(222) NOT NULL,
  `prodncosta` varchar(222) NOT NULL,
  `achieved` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `duartion` varchar(222) NOT NULL,
  `stopagereason` varchar(222) NOT NULL,
  `duration` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `daywiseactivity`
--

CREATE TABLE IF NOT EXISTS `daywiseactivity` (
`id` int(22) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `deptcode` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `machineno` varchar(222) NOT NULL,
  `purpose` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `activity` varchar(222) NOT NULL,
  `offtime` varchar(222) NOT NULL,
  `ontime` varchar(222) NOT NULL,
  `duration` varchar(222) NOT NULL,
  `frequency` varchar(222) NOT NULL,
  `donedate` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `spareitemused` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `qty` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `daywiseactivity`
--

INSERT INTO `daywiseactivity` (`id`, `unit`, `deptname`, `deptcode`, `machinename`, `machineno`, `purpose`, `slno`, `activity`, `offtime`, `ontime`, `duration`, `frequency`, `donedate`, `remarks`, `spareitemused`, `rate`, `qty`, `amount`, `datetime`) VALUES
(1, 'UNIT-1', 'sdd', 'd', 'dsc', 'dc', 'please select-----', 'ds', '', '', '', '', '', '', 'ds', 'ds', 'sd', 'sd', 'ds', '2016/08/15 10:00:26 pm'),
(2, 'UNIT-1', 'CARDING', 'GG', 'HHHHHHHHH', 'VVVVVVVVVVVV', 'GENERAL', '3', 'CLEANING', '15:33', '17:05', '7', '', '2016-08-26', 'dfdffd', '44434', '44', '44', '44', '2016/08/26 02:32:38 pm');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
`id` int(55) NOT NULL,
  `deptcode` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `deptcode`, `deptname`) VALUES
(1, '232', 'dvsvsdvd');

-- --------------------------------------------------------

--
-- Table structure for table `drawing`
--

CREATE TABLE IF NOT EXISTS `drawing` (
`id` int(55) NOT NULL,
  `date` varchar(112) NOT NULL,
  `shift` varchar(112) NOT NULL,
  `unittype` varchar(112) NOT NULL,
  `lotno` varchar(112) NOT NULL,
  `mno` varchar(112) NOT NULL,
  `mname` varchar(112) NOT NULL,
  `count` varchar(112) NOT NULL,
  `deleveryhannk` varchar(112) NOT NULL,
  `speed` varchar(112) NOT NULL,
  `standard` varchar(222) NOT NULL,
  `staefficiency` varchar(222) NOT NULL,
  `totalduration` varchar(222) NOT NULL,
  `shiftduartion` varchar(222) NOT NULL,
  `empno` varchar(222) NOT NULL,
  `empname` varchar(222) NOT NULL,
  `acthanks` varchar(222) NOT NULL,
  `waste` varchar(222) NOT NULL,
  `efficiency` varchar(222) NOT NULL,
  `prodnconst` varchar(222) NOT NULL,
  `achieved` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `duration` varchar(222) NOT NULL,
  `streason` varchar(55) NOT NULL,
  `stduration` varchar(55) NOT NULL,
  `datetime` varchar(222) NOT NULL,
  `module` varchar(66) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `drawing`
--

INSERT INTO `drawing` (`id`, `date`, `shift`, `unittype`, `lotno`, `mno`, `mname`, `count`, `deleveryhannk`, `speed`, `standard`, `staefficiency`, `totalduration`, `shiftduartion`, `empno`, `empname`, `acthanks`, `waste`, `efficiency`, `prodnconst`, `achieved`, `remarks`, `duration`, `streason`, `stduration`, `datetime`, `module`) VALUES
(2, '', '$8a2', 'select--------------', 'dfdv', 'please select-----', 'please select-----', 'fdvdf', 'fdfvd', 'fdfvd', 'ffv', 'fdfv', 'fvfvd', 'dsvdsa', 'please select-----', 'please select-----', 'dsvdsvd', 'vsdvs', 'vdsvs', 'vdsvdsvdcvxvcv', 'xcvxvc', 'cxvxvc', 'xcvxvc', 'hhhhhhhhhhhhhhhh', '99', '2016/07/22 08:12:26 pm', 'Drawing');

-- --------------------------------------------------------

--
-- Table structure for table `employeeregister`
--

CREATE TABLE IF NOT EXISTS `employeeregister` (
`id` int(44) NOT NULL,
  `empcode` varchar(222) NOT NULL,
  `empname` varchar(222) NOT NULL,
  `gender` varchar(222) NOT NULL,
  `deptcode` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `categorycode` varchar(222) NOT NULL,
  `categoryname` varchar(222) NOT NULL,
  `designation` varchar(222) NOT NULL,
  `phoneno` varchar(222) NOT NULL,
  `aadharno` varchar(222) NOT NULL,
  `defaultshift` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `basicsalary` varchar(222) NOT NULL,
  `hra` varchar(222) NOT NULL,
  `da` varchar(222) NOT NULL,
  `ta` varchar(222) NOT NULL,
  `pf` varchar(222) NOT NULL,
  `professionaltax` varchar(222) NOT NULL,
  `otherallowances` varchar(222) NOT NULL,
  `totalgross` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employeeregister`
--

INSERT INTO `employeeregister` (`id`, `empcode`, `empname`, `gender`, `deptcode`, `deptname`, `categorycode`, `categoryname`, `designation`, `phoneno`, `aadharno`, `defaultshift`, `address`, `basicsalary`, `hra`, `da`, `ta`, `pf`, `professionaltax`, `otherallowances`, `totalgross`, `datetime`) VALUES
(1, 'ere', 'ergr', '', '', 'greer', '', '', '', '', '', 'none', '', '', '', '', '', '', '', '', '', '2016/08/09 03:17:48 pm');

-- --------------------------------------------------------

--
-- Table structure for table `expensemaster`
--

CREATE TABLE IF NOT EXISTS `expensemaster` (
`id` int(22) NOT NULL,
  `mainitem` varchar(222) NOT NULL,
  `transactiontype` varchar(222) NOT NULL,
  `percentage` varchar(222) NOT NULL,
  `accountname` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expensemaster`
--

INSERT INTO `expensemaster` (`id`, `mainitem`, `transactiontype`, `percentage`, `accountname`, `datetime`) VALUES
(1, '', '', 'sac', 'dsd', '2016/08/15 11:16:13 pm');

-- --------------------------------------------------------

--
-- Table structure for table `finishdrawing`
--

CREATE TABLE IF NOT EXISTS `finishdrawing` (
`id` int(55) NOT NULL,
  `date` varchar(112) NOT NULL,
  `shift` varchar(112) NOT NULL,
  `unittype` varchar(112) NOT NULL,
  `lotno` varchar(112) NOT NULL,
  `mno` varchar(112) NOT NULL,
  `mname` varchar(112) NOT NULL,
  `count` varchar(112) NOT NULL,
  `deleveryhannk` varchar(112) NOT NULL,
  `speed` varchar(112) NOT NULL,
  `standard` varchar(222) NOT NULL,
  `staefficiency` varchar(222) NOT NULL,
  `totalduration` varchar(222) NOT NULL,
  `shiftduartion` varchar(222) NOT NULL,
  `empno` varchar(222) NOT NULL,
  `empname` varchar(222) NOT NULL,
  `acthanks` varchar(222) NOT NULL,
  `waste` varchar(222) NOT NULL,
  `efficiency` varchar(222) NOT NULL,
  `prodnconst` varchar(222) NOT NULL,
  `achieved` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `duration` varchar(222) NOT NULL,
  `streason` varchar(222) NOT NULL,
  `stduration` varchar(44) NOT NULL,
  `datetime` varchar(222) NOT NULL,
  `module` varchar(66) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `finishdrawing`
--

INSERT INTO `finishdrawing` (`id`, `date`, `shift`, `unittype`, `lotno`, `mno`, `mname`, `count`, `deleveryhannk`, `speed`, `standard`, `staefficiency`, `totalduration`, `shiftduartion`, `empno`, `empname`, `acthanks`, `waste`, `efficiency`, `prodnconst`, `achieved`, `remarks`, `duration`, `streason`, `stduration`, `datetime`, `module`) VALUES
(2, '', '$8a2', 'select--------------', 'hgbh', 'please select-----', 'please select-----', 'jknjkj', 'kjjkj', 'jkjk', 'jkj', 'jknjjk', 'jkjjk', 'jkjjk', 'please select-----', 'please select-----', 'jj', 'jkj', 'hjbhj', 'kjnhkj', 'kjnk', 'kjnk', 'kjn', 'ggggggggggggggggg', '66', '2016/07/22 08:19:29 pm', 'Finish Drawing');

-- --------------------------------------------------------

--
-- Table structure for table `gatepassissue`
--

CREATE TABLE IF NOT EXISTS `gatepassissue` (
`id` int(44) NOT NULL,
  `date` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `repair` varchar(222) NOT NULL,
  `client` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groundreading`
--

CREATE TABLE IF NOT EXISTS `groundreading` (
`id` int(88) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `tweight` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `groundreading`
--

INSERT INTO `groundreading` (`id`, `unit`, `count`, `date`, `shift`, `tweight`, `datetime`) VALUES
(1, 'please select-----', '22', '', 'select--------------', '122', '2016/08/03 02:02:25 pm');

-- --------------------------------------------------------

--
-- Table structure for table `inward`
--

CREATE TABLE IF NOT EXISTS `inward` (
`id` int(77) NOT NULL,
  `date` varchar(222) NOT NULL,
  `vehicleno` varchar(222) NOT NULL,
  `transportname` varchar(222) NOT NULL,
  `typeofmaterial` varchar(222) NOT NULL,
  `dcno` varchar(222) NOT NULL,
  `hamalicharges` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `inward`
--

INSERT INTO `inward` (`id`, `date`, `vehicleno`, `transportname`, `typeofmaterial`, `dcno`, `hamalicharges`, `datetime`) VALUES
(1, '2016-07-29', 'grbbgtrf', 'rtbrtb', 'trgrtg', 'trgtrgtrg', '88', '2016/07/24 08:17:05 pm');

-- --------------------------------------------------------

--
-- Table structure for table `inwardgateregister`
--

CREATE TABLE IF NOT EXISTS `inwardgateregister` (
`id` int(22) NOT NULL,
  `date` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `party` varchar(222) NOT NULL,
  `qty` varchar(222) NOT NULL,
  `vehicleno` varchar(222) NOT NULL,
  `billno` varchar(222) NOT NULL,
  `intime` varchar(222) NOT NULL,
  `outtime` varchar(222) NOT NULL,
  `signature` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `inwardgateregister`
--

INSERT INTO `inwardgateregister` (`id`, `date`, `description`, `party`, `qty`, `vehicleno`, `billno`, `intime`, `outtime`, `signature`, `remarks`, `datetime`) VALUES
(1, '', 'jhhj', 'hjhj', 'hj', 'hjhj', 'hjhj', 'h', 'hjhj', 'hj', 'hj', '2016/09/04 11:12:25 pm'),
(2, '2016-09-08', 'th', 'hf', 'fth', 'gf', 'fg', 'gf', 'gf', 'gf', '', '2016/09/08 03:10:19 pm'),
(3, '2016-11-07', 'hjbhjb', 'hbj', 'jbhhjb', 'bhj', 'bhjbh', 'hbb', 'hhb', 'jb', 'hbj', '2016/11/08 03:01:39 am');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE IF NOT EXISTS `issues` (
`id` int(44) NOT NULL,
  `date` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `department` varchar(222) NOT NULL,
  `employeename` varchar(222) NOT NULL,
  `product` varchar(222) NOT NULL,
  `qty` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `date`, `shift`, `department`, `employeename`, `product`, `qty`, `datetime`) VALUES
(1, '2016-07-20', 'select--------------', 'packing', 'ygggh', 'pen', '7', '2016/08/03 12:47:36 pm'),
(2, '2016-07-29', 'Day Shift', 'production', 'huhjujh', 'pen', '7', '2016/07/29 03:41:03 pm');

-- --------------------------------------------------------

--
-- Table structure for table `itemmaster`
--

CREATE TABLE IF NOT EXISTS `itemmaster` (
`slno` int(22) NOT NULL,
  `id` varchar(22) NOT NULL,
  `itemname` varchar(22) NOT NULL,
  `itemcode` varchar(22) NOT NULL,
  `datetime` varchar(22) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `itemmaster`
--

INSERT INTO `itemmaster` (`slno`, `id`, `itemname`, `itemcode`, `datetime`) VALUES
(1, '1', 'dfdvf', 'fvfvd', '2016/08/15 11:30:42 pm'),
(2, '1', 'cotton', 'c123', '2016/08/29 12:31:43 pm'),
(3, '1', 'COTTON-LINT', 'CL', '2016/11/18 02:01:54 am');

-- --------------------------------------------------------

--
-- Table structure for table `labreport`
--

CREATE TABLE IF NOT EXISTS `labreport` (
`id` int(55) NOT NULL,
  `mname` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `filename` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `labreport`
--

INSERT INTO `labreport` (`id`, `mname`, `date`, `shift`, `filename`, `datetime`) VALUES
(1, 'rere', '2016-07-11', 'Day Shift', 'a.docx', '2016/07/23 02:57:53 pm'),
(2, 'fdgv', '2016-07-06', 'Day Shift', 'Screen shots.docx', '2016/07/23 03:21:59 pm'),
(3, '', '', 'select--------------', 'Screen shots.docx', '2016/07/23 04:04:42 pm'),
(4, 'ac1', '2016-07-23', 'Day Shift', 'IPI  CSP TEST REPORT.pdf', '2016/07/23 04:24:47 pm');

-- --------------------------------------------------------

--
-- Table structure for table `lapformer`
--

CREATE TABLE IF NOT EXISTS `lapformer` (
`id` int(22) NOT NULL,
  `date` varchar(222) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `lotno` varchar(222) NOT NULL,
  `machineno` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `deliveryhank` varchar(222) NOT NULL,
  `speed` varchar(222) NOT NULL,
  `stdhank` varchar(222) NOT NULL,
  `staefficeincy` varchar(222) NOT NULL,
  `totalduration` varchar(222) NOT NULL,
  `shiftduration` varchar(222) NOT NULL,
  `cardno` varchar(222) NOT NULL,
  `employeename` varchar(222) NOT NULL,
  `acthanks` varchar(222) NOT NULL,
  `pneuwaste` varchar(222) NOT NULL,
  `efficiency` varchar(222) NOT NULL,
  `prodncosta` varchar(222) NOT NULL,
  `achieved` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `duartion` varchar(222) NOT NULL,
  `stopagereason` varchar(222) NOT NULL,
  `duration` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `leaveentry`
--

CREATE TABLE IF NOT EXISTS `leaveentry` (
`id` int(55) NOT NULL,
  `empcode` varchar(222) NOT NULL,
  `empname` varchar(222) NOT NULL,
  `leavecode` varchar(222) NOT NULL,
  `fromdate` varchar(222) NOT NULL,
  `todate` varchar(222) NOT NULL,
  `leavedays` varchar(222) NOT NULL,
  `daysaccounatbleforleave` varchar(222) NOT NULL,
  `leavetype` varchar(222) NOT NULL,
  `groupname` varchar(222) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `reason` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lossofpay`
--

CREATE TABLE IF NOT EXISTS `lossofpay` (
`id` int(44) NOT NULL,
  `date` varchar(222) NOT NULL,
  `empcode` varchar(222) NOT NULL,
  `empname` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lossofpay`
--

INSERT INTO `lossofpay` (`id`, `date`, `empcode`, `empname`, `amount`, `remarks`) VALUES
(1, '2016-08-10', 'ere', 'ergr', '44', 'reerer');

-- --------------------------------------------------------

--
-- Table structure for table `machinereading`
--

CREATE TABLE IF NOT EXISTS `machinereading` (
`id` int(88) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `tweight` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `machinereading`
--

INSERT INTO `machinereading` (`id`, `unit`, `count`, `date`, `shift`, `tweight`, `datetime`) VALUES
(2, 'please select-----', '30kw', '', 'select--------------', '180', '2016/08/03 02:00:49 pm');

-- --------------------------------------------------------

--
-- Table structure for table `maintainmasters`
--

CREATE TABLE IF NOT EXISTS `maintainmasters` (
`id` int(77) NOT NULL,
  `date` varchar(222) NOT NULL,
  `machineno` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `category` varchar(222) NOT NULL,
  `inhouseservice` varchar(222) NOT NULL,
  `externalservice` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maintainmasters`
--

INSERT INTO `maintainmasters` (`id`, `date`, `machineno`, `machinename`, `category`, `inhouseservice`, `externalservice`, `datetime`) VALUES
(3, '2016-08-05', '123', 'unit123', 'Ring frame', 'cleaning', 'reapir', '2016/08/04 02:33:48 pm');

-- --------------------------------------------------------

--
-- Table structure for table `manualentry`
--

CREATE TABLE IF NOT EXISTS `manualentry` (
`id` int(55) NOT NULL,
  `date` varchar(222) NOT NULL,
  `emppcode` varchar(222) NOT NULL,
  `empname` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `logintime` varchar(222) NOT NULL,
  `logouttime` varchar(222) NOT NULL,
  `late` varchar(222) NOT NULL,
  `early` varchar(222) NOT NULL,
  `workhours` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL,
  `status` varchar(66) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `manualentry`
--

INSERT INTO `manualentry` (`id`, `date`, `emppcode`, `empname`, `shift`, `logintime`, `logouttime`, `late`, `early`, `workhours`, `remarks`, `datetime`, `status`) VALUES
(2, '2016-08-10', 'ere', 'ergr', 'day shift', '07:00', '15:00', '', '', '08:00', 'hhhhhhh', '2016/08/10 04:09:59 pm', 'Approve'),
(3, '2016-08-10', 'ere', 'ergr', 'day shift', '07:01', '15:03', '', '', '08:00', 'JJJJJJJ', '2016/08/10 04:14:20 pm', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `masters`
--

CREATE TABLE IF NOT EXISTS `masters` (
`id` int(44) NOT NULL,
  `module` varchar(222) NOT NULL,
  `machineno` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `empcode` varchar(222) NOT NULL,
  `empname` varchar(222) NOT NULL,
  `empdepart` varchar(222) NOT NULL,
  `number` varchar(222) NOT NULL,
  `datetime` varchar(55) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `module`, `machineno`, `machinename`, `empcode`, `empname`, `empdepart`, `number`, `datetime`) VALUES
(2, 'carding', '123', 'raju', '1234', 'nagaraju', 'production', '9999999999', '2016/07/20 12:24:10 pm'),
(3, 'Ring frame', '123', 'raju123', '433434', 'ramu', 'production', '9999999999', '2016/07/20 12:24:35 pm'),
(4, 'carding', '434343', 'grtbgtrrgt', '', '', '', '', ''),
(5, 'Auto coner ', 'fdfd', 'fdfd', 'fdfd', 'fdfd', 'fdfd', 'fdfdfd', '2016/07/20 12:43:25 pm'),
(6, 'Please select--------------', 'ref', 'erfr', 'rferf', 'rerfe', 'rerfe', 'rerfe', '2016/07/20 12:46:20 pm'),
(7, 'carding', '', '', '', '', '', '', '2016/07/20 02:43:48 pm'),
(8, 'carding', '', '', '', '', '', '', '2016/07/20 02:44:12 pm'),
(9, 'carding', '', '', '', '', '', '', '2016/07/20 02:44:33 pm'),
(10, 'Ring frame', '1', 'KTTM', '2025', 'ravi', 'rf', '9963865658', '2016/07/25 11:27:21 am');

-- --------------------------------------------------------

--
-- Table structure for table `outward`
--

CREATE TABLE IF NOT EXISTS `outward` (
`id` int(55) NOT NULL,
  `date` varchar(222) NOT NULL,
  `vehicleno` varchar(222) NOT NULL,
  `transportname` varchar(222) NOT NULL,
  `customername` varchar(222) NOT NULL,
  `dcno` varchar(222) NOT NULL,
  `hamalicharges` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `outward`
--

INSERT INTO `outward` (`id`, `date`, `vehicleno`, `transportname`, `customername`, `dcno`, `hamalicharges`, `remarks`, `datetime`) VALUES
(1, '', 'jhhjhj', 'jhhjhjhj', 'jhhjhj', 'hjhjhj', '99', 'halloejmkk', '2016/07/24 08:25:34 pm');

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE IF NOT EXISTS `overtime` (
`id` int(44) NOT NULL,
  `month` varchar(222) NOT NULL,
  `empcode` varchar(222) NOT NULL,
  `year` varchar(222) NOT NULL,
  `othours/minutes` varchar(222) NOT NULL,
  `status` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`id`, `month`, `empcode`, `year`, `othours/minutes`, `status`, `date`, `datetime`) VALUES
(1, '1', 'ergre', '2003', 'ergeg', 'on', '2016-08-10', '2016/08/09 04:10:18 pm'),
(2, 'February', 'fdgfg', '2000', 'fdgfd', 'approved', '2016-08-04', '2016/08/09 04:12:48 pm');

-- --------------------------------------------------------

--
-- Table structure for table `packing`
--

CREATE TABLE IF NOT EXISTS `packing` (
`id` int(44) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `customername` varchar(222) NOT NULL,
  `conesproduction` varchar(222) NOT NULL,
  `tapeconetip` varchar(222) NOT NULL,
  `bagnofrom` varchar(222) NOT NULL,
  `conesstock` varchar(222) NOT NULL,
  `stockinnotall` varchar(222) NOT NULL,
  `opbags` varchar(222) NOT NULL,
  `opcones` varchar(222) NOT NULL,
  `variety` varchar(222) NOT NULL,
  `lotsize` varchar(222) NOT NULL,
  `desstatus` varchar(222) NOT NULL,
  `strapcolour` varchar(222) NOT NULL,
  `bagnoto` varchar(222) NOT NULL,
  `bagsstock` varchar(222) NOT NULL,
  `pendinglot` varchar(222) NOT NULL,
  `clbags` varchar(222) NOT NULL,
  `clcones` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `despdate` varchar(222) NOT NULL,
  `despatches` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `bagspacked` varchar(222) NOT NULL,
  `dispatchedto` varchar(222) NOT NULL,
  `conesinnotallot` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `packing`
--

INSERT INTO `packing` (`id`, `unit`, `count`, `customername`, `conesproduction`, `tapeconetip`, `bagnofrom`, `conesstock`, `stockinnotall`, `opbags`, `opcones`, `variety`, `lotsize`, `desstatus`, `strapcolour`, `bagnoto`, `bagsstock`, `pendinglot`, `clbags`, `clcones`, `date`, `despdate`, `despatches`, `shift`, `bagspacked`, `dispatchedto`, `conesinnotallot`, `datetime`) VALUES
(5, 'UNIT-1', '40', 'SDSD', 'DSDS', 'ROUND', 'DS', '24', '', '', '', 'cw', '45', '', 'RED', '', '24', '', '', '', '2016-08-23', '2016-08-24', '', 'Day Shift', '56', 'GUNTUR', '', '2016/08/23 03:27:41 pm'),
(6, 'UNIT-1', '40', 'EWF', 'EWFEW', 'ROUND', 'EFW', '24', ' 55', '55', '55', 'KK', '55', '5', 'RED', '55', '24', '55', '55', '55', '2016-08-26', '2016-08-26', '55', 'Day Shift', '55', '55', '555', '2016/08/26 12:54:30 pm'),
(7, 'UNIT-1', '22', 'fdfdfd', 'dffddf', 'KL', '', 'OI', '', '5', '5', 'please select-----', '65', '', 'IO', '656', 'OI', '6565', '65', '65', '2016-11-15', '2016-11-15', '65', 'Day Shift', '66', '60', '', '2016/11/16 10:54:21 am'),
(8, 'please select-----', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', '2016/11/18 01:27:56 am'),
(9, 'please select-----', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', '2016/11/18 01:28:23 am');

-- --------------------------------------------------------

--
-- Table structure for table `productionconvfactor`
--

CREATE TABLE IF NOT EXISTS `productionconvfactor` (
`id` int(44) NOT NULL,
  `count` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `convfactor` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `productionconvfactor`
--

INSERT INTO `productionconvfactor` (`id`, `count`, `code`, `convfactor`, `datetime`) VALUES
(1, '40', '40KW', '1', '2016/11/16 12:21:41 pm'),
(2, '46', '44KW', '1.226', '2016/11/16 12:23:17 pm'),
(3, '32', '32KW', '0.756', '2016/11/16 12:23:42 pm'),
(4, '40', '40SCH', '0.818', '2016/11/16 12:24:11 pm');

-- --------------------------------------------------------

--
-- Table structure for table `productioncountmaster`
--

CREATE TABLE IF NOT EXISTS `productioncountmaster` (
`id` int(44) NOT NULL,
  `dept` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `counttobemainatained` varchar(222) NOT NULL,
  `variety` varchar(222) NOT NULL,
  `deliveredhank` varchar(222) NOT NULL,
  `productionconstant` varchar(222) NOT NULL,
  `efficiency` varchar(222) NOT NULL,
  `expectedgrams` varchar(222) NOT NULL,
  `type` varchar(222) NOT NULL,
  `unittype` varchar(222) NOT NULL,
  `countfrequency` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL,
  `countcode` varchar(66) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `productioncountmaster`
--

INSERT INTO `productioncountmaster` (`id`, `dept`, `code`, `count`, `counttobemainatained`, `variety`, `deliveredhank`, `productionconstant`, `efficiency`, `expectedgrams`, `type`, `unittype`, `countfrequency`, `datetime`, `countcode`) VALUES
(1, 'RING FRAME', 'RF', '20', '20.5', 'CW', '14', '31.22', '93', '340', 'COMBED', 'UNIT-2', '0.348', '2016/11/16 01:11:20 pm', '20CW(2)'),
(2, 'RING FRAME', 'RF', '46', '46', 'KW', '10.05', '13.8', '93', '95', 'KARDED', 'UNIT-1', '1.226', '2016/11/16 01:14:06 pm', '44KW'),
(3, 'RING FRAME', 'RF', '40', '37', 'KH', '11.15', '17.1', '93', '140', 'KARDED', 'UNIT-1', '0.889', '2016/11/16 01:16:59 pm', '40KH'),
(4, 'RING FRAME', 'RF', '60', '60', 'KW', '1', '1', '93', '100', 'KARDED', 'UNIT-1', '1.805', '2016/11/16 01:19:20 pm', '60KW'),
(5, 'RING FRAME', 'RF', '32', '32', 'KW', '11.5', '19.8', '93', '190', 'KARDED', 'UNIT-1', '0.758', '2016/11/16 01:21:10 pm', '32KW'),
(6, 'RING FRAME', 'RF', '24', '23.30', 'CW', '14', '25.86', '97', '260', 'COMBED', 'UNIT-1', '0.532', '2016/11/16 01:23:27 pm', '24CW'),
(7, 'RING FRAME', 'RF', '32', '32', 'KH', '11.5', '20', '93', '165', 'KARDED', 'UNIT-1', '0.658', '2016/11/16 02:18:10 pm', '32KH'),
(8, 'RING FRAME', 'RF', '40', '40', 'CW', '10.5', '16.12', '93', '135', 'KARDED', 'UNIT-1', '0.823', '2016/11/16 02:20:36 pm', '40CW'),
(9, 'RING FRAME', 'RF', '38', '38', 'KW', '10.5', '16.62', '93', '120', 'KARDED', 'UNIT-1', '0.926', '2016/11/16 02:22:44 pm', '38KW'),
(10, 'RING FRAME', 'RF', '31', '30.5', 'KW', '13.5', '21.2', '93', '175', 'KARDED', 'UNIT-1', '0.726', '2016/11/16 02:24:35 pm', '31KW'),
(11, 'RING FRAME', 'RF', '30', '30.5', 'KW', '13.5', '20.9', '93', '175', 'KARDED', 'UNIT-1', '0.692', '2016/11/16 02:27:30 pm', '30KW'),
(12, 'RING FRAME', 'RF', '30', '30.5', 'KW', '13.5', '20.9', '93', '175', 'KARDED', 'UNIT-2', '0.692', '2016/11/16 02:29:41 pm', '30KW'),
(13, 'RING FRAME', 'RF', '20', '20', '20.5', '14', '31.52', '98', '340', 'KARDED', 'UNIT-2', '0.42', '2016/11/16 02:34:37 pm', '20KW'),
(14, 'RING FRAME', 'RF', '21', '21.5', 'KW', '14', '30.6', '97.5', '300', 'KARDED', 'UNIT-2', '0.452', '2016/11/16 02:36:08 pm', '21KW'),
(15, 'RING FRAME', 'RF', '32', '32.5', 'KW', '14', '19.61', '93', '190', 'KARDED', 'UNIT-2', '0.756', '2016/11/16 02:37:57 pm', '32SKW2'),
(16, 'RING FRAME', 'RF', '24', '24.5', 'KW', '14', '25.86', '95', '260', 'KARDED', 'UNIT-2', '0.532', '2016/11/16 02:39:54 pm', '24KW'),
(17, 'RING FRAME', 'RF', '13', '13.5', 'KW', '14', '48.5', '93', '470', 'KARDED', 'UNIT-2', '0.273', '2016/11/16 02:41:27 pm', '13SKW'),
(18, 'RING FRAME', 'RF', '21', '21.0', 'KH', '14', '30.04', '93', '310', 'KARDED', 'UNIT-2', '0.399', '2016/11/16 02:42:52 pm', '21SKH'),
(19, 'RING FRAME', 'RF', '41', '41.5', 'KW', '12', '15.73', '93', '120', 'KARDED', 'UNIT-1', '1.038', '2016/11/16 02:44:25 pm', '41SKW'),
(20, 'RING FRAME', 'RF', '14', '14.5', 'KW', '13.85', '43.92', '93', '480', 'KARDED', 'UNIT-2', '0.283', '2016/11/16 02:46:19 pm', '14SKW'),
(21, 'RING FRAME', 'RF', '20', '20.2', 'KH', '14', '31.68', '98', '350', 'KARDED', 'UNIT-2', '0.372', '2016/11/16 02:48:08 pm', '20SKH'),
(22, 'RING FRAME', 'RF', '10', '10.5', 'KW', '10.3', '60.34', '93', '560', 'KARDED', 'UNIT-2', '0.201', '2016/11/16 02:49:42 pm', '10KW'),
(23, 'RING FRAME', 'RF', '12', '12.5', 'KW', '13.5', '50.16', '93', '500', 'KARDED', 'UNIT-2', '0.243', '2016/11/16 02:52:19 pm', '12KW'),
(24, 'RING FRAME', 'RF', '16', '16.5', 'KW', '13', '38.87', '97', '420', 'KARDED', 'UNIT-2', '0.332', '2016/11/16 02:54:13 pm', '16SKW'),
(25, 'RING FRAME', 'RF', '30', '30.5', 'CW', '13', '20.96', '93', '230', 'NORMAL', 'UNIT-2', '0.551', '2016/11/16 02:58:48 pm', '30CW'),
(26, 'RING FRAME', 'RF', '20', '20.5', 'CW', '14', '31.22', '93', '340', 'COMBED', 'UNIT-1', '0.346', '2016/11/16 02:57:31 pm', '20CW'),
(27, 'RING FRAME', 'RF', '42', '42.5', 'CW', '11.5', '15.1', '93', '120', 'COMBED', 'UNIT-1', '0.886', '2016/11/16 03:02:12 pm', '42CW'),
(28, 'RING FRAME', 'RF', '32', '32.5', 'CW', '12', '20', '93', '260', 'COMBED', 'UNIT-1', '0.607', '2016/11/16 03:03:40 pm', '32CW'),
(29, 'RING FRAME', 'RF', '24', '24.5', 'KW', '14', '25.86', '95', '260', 'KARDED', 'UNIT-1', '0.532', '2016/11/16 03:05:17 pm', '24KW1'),
(30, 'RING FRAME', 'RF', '34', '34.2', 'CH', '12.13', '18.8', '95', '155', 'COMBED', 'UNIT-1', '0.663', '2016/11/16 03:07:30 pm', '34CH'),
(31, 'RING FRAME', 'RF', '30', '30.5', 'SCW', '13', '21', '97', '230', '', 'UNIT-1', '0.692', '2016/11/16 03:09:41 pm', '30SCW'),
(32, 'RING FRAME', 'RF', '30CH', '30.5', 'SEMICH', '13', '20.99', '98', '220', '', 'UNIT-1', '0.551', '2016/11/16 03:11:37 pm', '30CH(S)'),
(33, 'RING FRAME', 'RF', '32', '32.5', 'SCW', '13.5', '50.16', '97', '190', '', 'UNIT-1', '0.607', '2016/11/16 03:16:19 pm', '32SCW'),
(34, 'RING FRAME', 'RF', '12SCW', '12.3', 'SCW', '13.5', '50.16', '93', '500', 'COMBED', 'UNIT-2', '0.243', '2016/11/16 03:15:39 pm', '12SCW'),
(35, 'RING FRAME', 'RF', '21', '21.3', 'CW', '14', '29.9', '97.4', '300', 'COMBED', 'UNIT-1', '0.452', '2016/11/16 03:18:00 pm', '21CW'),
(36, 'RING FRAME', 'RF', '31.0', '31.3', 'KW', '14', '19.9', '97', '180', 'KARDED', 'UNIT-2', '0.726', '2016/11/16 03:19:49 pm', '31KW'),
(37, 'RING FRAME', 'RF', '40', '40.3', 'KW', '10.5', '16', '93', '135', 'KARDED', 'UNIT-1', '1', '2016/11/16 03:21:33 pm', '40KW'),
(38, 'RING FRAME', 'RF', '40', '40.5', 'KW', '10.5', '16.3', '93', '120', 'KARDED', 'UNIT-1', '1', '2016/11/16 03:23:43 pm', '40KW(E)'),
(39, 'RING FRAME', 'RF', '40', '40.3', 'KWC', '10.5', '16', '93', '135', 'KARDED', 'UNIT-1', '1', '2016/11/16 03:25:51 pm', '40KW(C)'),
(40, 'RING FRAME', 'RF', '40', '40.3', 'CWC', '10.5', '16.12', '93', '135', 'COMBED', 'UNIT-1', '0.823', '2016/11/16 03:27:09 pm', '40CW(C)'),
(41, 'RING FRAME', 'RF', '42', '42.5', 'CWC', '11.5', '15.1', '93', '125', 'COMBED', 'UNIT-1', '0.886', '2016/11/16 03:28:43 pm', '42CW(C)'),
(42, 'RING FRAME', 'RF', '30', '30.5', 'CW', '13', '20.96', '93', '230', '', '', '0.551', '2016/11/17 11:24:07 am', '30CWC'),
(43, 'AUTO_CONER', 'AC', '40', '40.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-1', '1', '2016/11/16 03:41:13 pm', '40KW'),
(44, 'AUTO_CONER', 'AC', '46', '44', 'KW', '', '', '85', '', 'KARDED', 'UNIT-1', '1', '2016/11/16 03:43:04 pm', '46KW'),
(45, 'AUTO_CONER', 'AC', '40', '37.5', 'KH', '', '', '85', '', 'KARDED', 'UNIT-1', '1', '2016/11/16 03:44:18 pm', '40KH'),
(46, 'AUTO_CONER', 'AC', '32', '32.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-1', '1', '2016/11/16 03:45:08 pm', '32KW'),
(47, 'AUTO_CONER', 'AC', '32', '32.5', 'KH', '', '', '85', '', 'KARDED', 'UNIT-1', '1', '2016/11/16 03:46:03 pm', '32KH'),
(48, 'AUTO_CONER', 'AC', '40', '40.5', 'CW', '', '', '85', '', 'KARDED', 'UNIT-1', '0', '2016/11/16 03:47:32 pm', '40CW'),
(49, 'AUTO_CONER', 'AC', '38', '38.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-1', '0', '2016/11/16 03:48:44 pm', '38KW'),
(50, 'AUTO_CONER', 'AC', '31', '40.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-1', '0', '2016/11/16 03:49:48 pm', '31.5'),
(51, 'AUTO_CONER', 'AC', '30', '30.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-1', '1', '2016/11/16 03:50:44 pm', '30'),
(52, 'AUTO_CONER', 'AC', '21.0', '21.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '1', '2016/11/16 03:52:02 pm', '21SKW'),
(53, 'AUTO_CONER', 'AC', '41', '41.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-1', '0', '2016/11/16 03:53:37 pm', '41KW'),
(54, 'AUTO_CONER', 'AC', '24', '24.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '0', '2016/11/16 03:54:53 pm', '24SKW'),
(55, 'AUTO_CONER', 'AC', '20', '20.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '0', '2016/11/16 03:55:56 pm', '20SKW'),
(56, 'AUTO_CONER', 'AC', '14', '14.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '0', '2016/11/16 03:56:43 pm', '14SKW'),
(57, 'AUTO_CONER', 'AC', '20', '20', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '0', '2016/11/16 03:57:29 pm', '001'),
(58, 'AUTO_CONER', 'AC', '10', '10.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '0', '2016/11/16 03:58:07 pm', '10SKW'),
(59, 'AUTO_CONER', 'AC', '16', '16.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '0', '2016/11/16 03:58:53 pm', '16KW'),
(60, 'AUTO_CONER', 'AC', '12', '12.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '0', '2016/11/16 03:59:38 pm', '12SKW'),
(61, 'AUTO_CONER', 'AC', '20', '20.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '0', '2016/11/16 04:00:19 pm', '21KH'),
(62, 'AUTO_CONER', 'AC', '30CWC', '30.5', 'CW', '', '', '85', '', '', '', '0', '2016/11/17 11:06:47 am', '3001'),
(63, 'AUTO_CONER', 'AC', '24', '24.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-1', '0', '2016/11/16 04:02:03 pm', '2001'),
(64, 'AUTO_CONER', 'AC', '32', '32.5', 'CW', '', '', '85', '', 'COMBED', 'UNIT-1', '0', '2016/11/16 04:02:47 pm', '3002'),
(65, 'AUTO_CONER', 'AC', '20', '20.5', 'CW', '', '', '85', '', 'COMBED', 'UNIT-1', '0', '2016/11/16 04:03:32 pm', '004'),
(66, 'AUTO_CONER', 'AC', '42', '42.5', 'CW', '', '', '85', '', 'COMBED', 'UNIT-1', '85', '2016/11/16 04:05:09 pm', '1004'),
(67, 'AUTO_CONER', 'AC', '24', '24.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-1', '0', '2016/11/16 04:05:58 pm', '1024'),
(68, 'AUTO_CONER', 'AC', '34', '34.5', 'CH', '', '', '85', '', 'COMBED', 'UNIT-1', '1', '2016/11/16 04:06:54 pm', '1034'),
(69, 'AUTO_CONER', 'AC', '13', '13.5', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '1', '2016/11/16 04:07:37 pm', '13KW'),
(70, 'AUTO_CONER', 'AC', '30', '30.5', 'CH', '', '', '85', '', 'COMBED', 'UNIT-1', '1', '2016/11/16 04:08:39 pm', '30SCH'),
(71, 'AUTO_CONER', 'AC', '30', '30.3', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '1', '2016/11/16 04:09:33 pm', '30.3'),
(72, 'AUTO_CONER', 'AC', '12SCW', '12.3', 'SCW', '', '', '65', '', 'COMBED', 'UNIT-2', '0', '2016/11/16 04:10:26 pm', '12CW'),
(73, 'AUTO_CONER', 'AC', '21', '21.3', 'CW', '', '', '85', '', 'COMBED', 'UNIT-1', '0', '2016/11/16 04:11:06 pm', '021CW'),
(74, 'AUTO_CONER', 'AC', '21', '', 'CW', '', '', '85', '', 'COMBED', 'UNIT-1', '0', '2016/11/16 04:12:28 pm', '21CW'),
(75, 'AUTO_CONER', 'AC', '32', '32.3', 'KW', '', '', '85', '', 'KARDED', 'UNIT-2', '1', '2016/11/16 04:13:23 pm', '32KKW'),
(76, 'AUTO_CONER', 'AC', '30', '30.3', 'CW', '', '', '85', '', 'COMBED', 'UNIT-1', '0', '2016/11/16 04:14:19 pm', '300CW');

-- --------------------------------------------------------

--
-- Table structure for table `productiondepartments`
--

CREATE TABLE IF NOT EXISTS `productiondepartments` (
`id` int(44) NOT NULL,
  `deptcode` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `productiondepartments`
--

INSERT INTO `productiondepartments` (`id`, `deptcode`, `deptname`, `datetime`) VALUES
(1, 'BL', 'BLOW ROOM', '2016/11/15 08:24:25 pm'),
(2, 'CRD', 'CARDING', '2016/11/15 08:26:02 pm'),
(3, 'PDRG', 'PRE COMBER DRG', '2016/11/15 08:26:35 pm'),
(4, 'SIM', 'SIMPLEX', '2016/11/15 08:27:00 pm'),
(5, 'FDRG', 'FINISHER DRG', '2016/11/15 08:27:28 pm'),
(6, 'AC', 'AUTO_CONER', '2016/11/15 08:27:57 pm'),
(7, 'RF', 'RING FRAME', '2016/11/15 08:28:17 pm'),
(8, 'COM', 'COMBER', '2016/11/15 08:28:43 pm'),
(9, 'LH', 'LAPFORMER', '2016/11/15 08:29:12 pm'),
(10, 'HM', 'H.M. PLANT', '2016/11/15 08:31:04 pm'),
(11, 'COMP', 'COMPRESSOR', '2016/11/15 08:31:21 pm'),
(12, 'GM', 'GENERAL MACHINERY', '2016/11/15 08:31:57 pm');

-- --------------------------------------------------------

--
-- Table structure for table `productionlotnos`
--

CREATE TABLE IF NOT EXISTS `productionlotnos` (
`id` int(55) NOT NULL,
  `lotnos` varchar(222) NOT NULL,
  `shifts` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `productionlotnos`
--

INSERT INTO `productionlotnos` (`id`, `lotnos`, `shifts`, `itemname`, `datetime`) VALUES
(1, '1', '', 'COMBER NOIL', '2016/11/16 11:31:42 am'),
(2, '2', '', 'HARD WASTE', '2016/11/16 11:33:40 am'),
(3, '3', '', 'LOWER CARD', '2016/11/16 11:33:59 am'),
(4, '4', '', 'MICRO DUST', '2016/11/16 11:34:14 am'),
(5, '5', '', 'PINEMOFIL WASTE', '2016/11/16 11:34:51 am'),
(6, '6', '', 'RDF WASTE', '2016/11/16 11:35:11 am'),
(7, '7', '', 'ROVING WASTE', '2016/11/16 11:35:49 am'),
(8, '8', '', 'SEED', '2016/11/16 11:35:57 am'),
(9, '9', '', 'SILVER WASTE', '2016/11/16 11:36:12 am'),
(10, '10', '', 'SWEEPING WASTE', '2016/11/16 11:36:30 am'),
(11, '11', '', 'UPPER CARD', '2016/11/16 11:36:43 am');

-- --------------------------------------------------------

--
-- Table structure for table `productionmachines`
--

CREATE TABLE IF NOT EXISTS `productionmachines` (
`id` int(55) NOT NULL,
  `dept` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `machinecode` varchar(222) NOT NULL,
  `machinetype` varchar(55) NOT NULL,
  `unittype` varchar(222) NOT NULL,
  `spindles` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=153 ;

--
-- Dumping data for table `productionmachines`
--

INSERT INTO `productionmachines` (`id`, `dept`, `machinename`, `machinecode`, `machinetype`, `unittype`, `spindles`, `datetime`) VALUES
(1, 'CARDING', 'TC5-1', 'CRD-03', 'NORMAL', 'UNIT-1', '0', '2016/11/15 08:36:59 pm'),
(2, 'RING FRAME', 'KTTM240E', 'RF-02', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 08:39:34 pm'),
(3, 'CARDING', 'TC5-1', 'CRD-02', 'NORMAL', 'UNIT-1', '0', '2016/11/15 08:40:54 pm'),
(4, 'FINISHER DRG', 'D221LHS', 'FDRG-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 08:42:10 pm'),
(5, 'FINISHER DRG', 'D221RHS', 'FDRG-02', 'NORMAL', 'UNIT-1', '0', '2016/11/15 08:42:48 pm'),
(6, 'CARDING', 'TC5-1', 'CRD-04', 'NORMAL', 'UNIT-1', '0', '2016/11/15 08:43:28 pm'),
(7, 'CARDING', 'TC5-1', 'CRD-05', 'NORMAL', 'UNIT-1', '0', '2016/11/15 08:44:05 pm'),
(8, 'CARDING', 'TC5-1', 'CRD-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 08:45:14 pm'),
(9, 'FINISHER DRG', 'D240', 'FDRG-03', 'NORMAL', 'UNIT-1', '0', '2016/11/15 08:46:53 pm'),
(10, 'PRE COMBER DRG', 'LD-2', 'PDRG-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 08:54:37 pm'),
(11, 'SIMPLEX', 'ZINSER 681', 'SIM-01', 'NORMAL', 'UNIT-1', '128', '2016/11/15 08:55:45 pm'),
(12, 'SIMPLEX', 'ZINSER 681', 'SIM-03', 'NORMAL', 'UNIT-1', '128', '2016/11/15 08:56:19 pm'),
(13, 'RING FRAME', 'KTTM240E', 'RF-03', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 08:57:10 pm'),
(14, 'RING FRAME', 'KTTM240E', 'RF-04', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 08:58:28 pm'),
(15, 'RING FRAME', 'KTTM240E', 'RF-05', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 08:59:07 pm'),
(16, 'RING FRAME', 'KTTM240E', 'RF-06', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 08:59:38 pm'),
(17, 'RING FRAME', 'KTTM240E', 'RF-07', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 09:00:04 pm'),
(18, 'RING FRAME', 'KTTM240E', 'RF-08', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 09:00:25 pm'),
(19, 'SIMPLEX', 'ZINSER 681', 'SIM-02', 'NORMAL', 'UNIT-1', '128', '2016/11/15 09:01:23 pm'),
(20, 'AUTO_CONER', 'SCHLAFHORST-X5', 'AC-02', 'NORMAL', 'UNIT-1', '60', '2016/11/15 09:04:00 pm'),
(21, 'AUTO_CONER', 'SCHLAFHORST-X5', 'AC-03', 'NORMAL', 'UNIT-1', '60', '2016/11/15 09:03:34 pm'),
(22, 'AUTO_CONER', 'SCHLAFHORST-X5', 'AC-04', 'NORMAL', 'UNIT-1', '60', '2016/11/15 09:04:40 pm'),
(23, 'RING FRAME', 'KTTM240E', 'RF-01', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 09:05:36 pm'),
(24, 'AUTO_CONER', 'SCHLAFHORST-X5', 'AC-01', 'NORMAL', 'UNIT-1', '60', '2016/11/15 09:06:07 pm'),
(25, 'RING FRAME', 'KTTM240E', 'RF-09', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 09:06:45 pm'),
(26, 'RING FRAME', 'KTTM240E', 'RF-10', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 09:07:15 pm'),
(27, 'CARDING', 'TC5-1', 'CRD-06', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:08:01 pm'),
(28, 'CARDING', 'TC5-1', 'CRD-07', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:08:48 pm'),
(29, 'CARDING', 'TC5-1', 'CRD-08', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:09:56 pm'),
(30, 'PRE COMBER DRG', 'LD-2', 'PDRG-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:14:01 pm'),
(31, 'RING FRAME', 'TC5-1', 'RF-11', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 09:14:47 pm'),
(32, 'RING FRAME', 'TC5-1', 'RF-12', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 09:15:19 pm'),
(33, 'RING FRAME', 'TC5-1', 'RF-13', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 09:15:48 pm'),
(34, 'RING FRAME', 'TC5-1', 'RF-14', 'NORMAL', 'UNIT-1', '1440', '2016/11/15 09:16:28 pm'),
(35, 'AUTO_CONER', 'SCHLAFHORST-X5', 'AC-05', 'NORMAL', 'UNIT-1', '60', '2016/11/15 09:17:29 pm'),
(36, 'SIMPLEX', 'ZINSER 681', 'SIM-04', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:18:13 pm'),
(37, 'COMBER', 'LK 64-01', 'COM-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:19:31 pm'),
(38, 'COMBER', 'LK 64-02', 'COM-02', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:21:14 pm'),
(39, 'COMBER', 'LK 64-03', 'COM-03', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:21:54 pm'),
(40, 'COMBER', 'LK 64-04', 'COM-04', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:22:19 pm'),
(41, 'COMBER', 'LK 64-05', 'COM-05', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:23:41 pm'),
(42, 'COMBER', 'LK 64-06', 'COM-06', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:24:08 pm'),
(43, 'COMBER', 'LK 64-07', 'COM-07', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:24:38 pm'),
(44, 'COMBER', 'LK 64-08', 'COM-08', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:25:12 pm'),
(45, 'LAPFORMER', 'LH 10-01', 'LH-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:27:42 pm'),
(46, 'LAPFORMER', 'LH 10-02', 'LH-02', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:28:52 pm'),
(47, 'BLOW ROOM', 'BLADOMANT', 'BD-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:29:56 pm'),
(48, 'BLOW ROOM', 'C L P', 'CL-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:30:27 pm'),
(49, 'BLOW ROOM', 'M P M 6', 'MP6-O1', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:31:17 pm'),
(50, 'BLOW ROOM', 'C L C 1', 'CLC-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:31:49 pm'),
(51, 'BLOW ROOM', 'V X L', 'VX-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:32:28 pm'),
(52, 'PRE COMBER DRG', 'D-40', 'PDRG-02', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:33:22 pm'),
(53, 'PRE COMBER DRG', 'D-40', 'PDRG-02', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:33:23 pm'),
(54, 'PRE COMBER DRG', 'D-40', 'PDRG-02', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:34:26 pm'),
(55, 'BLOW ROOM', 'METAL DETECTOTR', 'MD-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:35:37 pm'),
(56, 'BLOW ROOM', 'FIRE DETECTOR', 'FD-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:39:40 pm'),
(57, 'BLOW ROOM', 'VETAL SCAN', 'VS-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:40:22 pm'),
(58, 'GENERAL MACHINERY', 'FORKLIFT', 'FKL-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:45:00 pm'),
(59, 'GENERAL MACHINERY', 'EARTH PIT', 'EPT-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:49:40 pm'),
(60, 'COMPRESSOR', 'COMPRESSOR-1', 'COMP-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:50:35 pm'),
(61, 'COMPRESSOR', 'COMPRESSOR-2', 'COMP-02', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:51:18 pm'),
(62, 'COMPRESSOR', 'COMPRESSOR-3', 'COMP-03', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:51:44 pm'),
(63, 'H.M. PLANT', 'PUMP MOTORS', 'PM-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:52:33 pm'),
(64, 'H.M. PLANT', 'FAN MOTORS', 'FM-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:53:03 pm'),
(65, 'GENERAL MACHINERY', 'C C CAMERA', 'CC', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:53:51 pm'),
(66, 'PRE COMBER DRG', 'LD-2', 'PDRG-03', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:54:27 pm'),
(67, 'H.M. PLANT', 'EXHAUST FAN MOTOR', 'EFM-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:55:43 pm'),
(68, 'H.M. PLANT', 'EXHAUST FAN MOTOR', 'EFM-02', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:56:18 pm'),
(69, 'H.M. PLANT', 'EXHAUST FAN MOTOR', 'EFM-03', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:56:46 pm'),
(70, 'H.M. PLANT', 'EXHAUST FAN MOTOR', 'EFM-04', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:57:08 pm'),
(71, 'H.M. PLANT', 'EXHAUST FAN MOTOR', 'EFM-05', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:57:34 pm'),
(72, 'H.M. PLANT', 'EXHAUST FAN MOTOR', 'EFM-06', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:58:13 pm'),
(73, 'H.M. PLANT', 'SUPPLY FAN MOTOR', 'SFM-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:58:56 pm'),
(74, 'H.M. PLANT', 'SUPPLY FAN MOTOR', 'SFM-02', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:59:19 pm'),
(75, 'H.M. PLANT', 'SUPPLY FAN MOTOR', 'SFM-03', 'NORMAL', 'UNIT-1', '0', '2016/11/15 09:59:39 pm'),
(76, 'H.M. PLANT', 'SUPPLY FAN MOTOR', 'SFM-04', 'NORMAL', 'UNIT-1', '0', '2016/11/15 10:01:50 pm'),
(77, 'H.M. PLANT', 'SUPPLY FAN MOTOR', 'SFM-05', 'NORMAL', 'UNIT-1', '0', '2016/11/15 10:02:12 pm'),
(78, 'H.M. PLANT', 'SUPPLY FAN MOTOR', 'SFM-06', 'NORMAL', 'UNIT-1', '0', '2016/11/15 10:02:30 pm'),
(79, 'H.M. PLANT', 'EXHAUST FAN MOTOR', 'SFM-07', 'NORMAL', 'UNIT-1', '0', '2016/11/15 10:02:53 pm'),
(80, 'CARDING', 'TC5-1', 'CRD-09', 'NORMAL', 'UNIT-1', '0', '2016/11/15 10:04:02 pm'),
(81, 'CARDING', 'TC5-1', 'CRD-11', 'NORMAL', 'UNIT-1', '0', '2016/11/15 10:04:43 pm'),
(82, 'CARDING', 'TC5-1', 'CRD-12', 'NORMAL', 'UNIT-1', '0', '2016/11/15 10:05:11 pm'),
(83, 'BLOW ROOM', 'STEP CLEANER', 'SRS6-01', 'NORMAL', 'UNIT-1', '0', '2016/11/15 10:06:02 pm'),
(84, 'BLOW ROOM', 'C L P', 'CL-02', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:56:59 pm'),
(85, 'BLOW ROOM', 'BLADOMANT', 'BD-02', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:58:30 pm'),
(86, 'BLOW ROOM', 'M P M 8', 'MP8-O2', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:57:53 pm'),
(87, 'RING FRAME', 'RX300', 'RF-15', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 10:59:44 pm'),
(88, 'RING FRAME', 'RX300', 'RF-16', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:01:56 pm'),
(89, 'RING FRAME', 'RX300', 'RF-17', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:03:07 pm'),
(90, 'RING FRAME', 'RX300', 'RF-18', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:03:33 pm'),
(91, 'RING FRAME', 'RX300', 'RF-19', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:03:59 pm'),
(92, 'RING FRAME', 'RX300', 'RF-20', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:04:32 pm'),
(93, 'RING FRAME', 'RX300', 'RF-21', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:04:54 pm'),
(94, 'RING FRAME', 'RX300', 'RF-22', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:05:24 pm'),
(95, 'RING FRAME', 'RX300', 'RF-23', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:05:47 pm'),
(96, 'RING FRAME', 'RX300', 'RF-24', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:06:15 pm'),
(97, 'RING FRAME', 'RX300', 'RF-25', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:06:41 pm'),
(98, 'AUTO_CONER', 'SCHLAFHORST-X5', 'AC-15', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:07:07 pm'),
(99, 'AUTO_CONER', 'SCHLAFHORST-X5', 'AC-16', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:07:28 pm'),
(100, 'AUTO_CONER', 'SCHLAFHORST-X5', 'AC-17', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:07:57 pm'),
(101, 'AUTO_CONER', 'SCHLAFHORST-X5', 'AC-18', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:08:17 pm'),
(102, 'AUTO_CONER', 'SCHLAFHORST-X5', 'AC-19', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:08:37 pm'),
(103, 'AUTO_CONER', 'SCHLAFHORST-X5', 'AC-20', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:08:55 pm'),
(104, 'AUTO_CONER', 'SCHLAFHORST-X6', 'AC-21', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:09:34 pm'),
(105, 'AUTO_CONER', 'SCHLAFHORST-X6', 'AC-22', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:09:56 pm'),
(106, 'AUTO_CONER', 'SCHLAFHORST-X6', 'AC-23', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:10:21 pm'),
(107, 'AUTO_CONER', 'SCHLAFHORST-X6', 'AC-24', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:10:47 pm'),
(108, 'AUTO_CONER', 'SCHLAFHORST-X6', 'AC-25', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:11:13 pm'),
(109, 'AUTO_CONER', 'SCHLAFHORST-X6', 'AC-26', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:12:13 pm'),
(110, 'AUTO_CONER', 'SCHLAFHORST-X6', 'AC-27', 'NORMAL', 'UNIT-2', '33', '2016/11/15 11:12:45 pm'),
(111, 'RING FRAME', 'RX300', 'RF-26', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:11:33 pm'),
(112, 'RING FRAME', 'RX300', 'RF-27', 'NORMAL', 'UNIT-2', '1440', '2016/11/15 11:13:11 pm'),
(113, 'BLOW ROOM', 'FIRE DETECTOR', 'FD-02', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:14:20 pm'),
(114, 'BLOW ROOM', 'C L P', 'CL-03', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:14:41 pm'),
(115, 'BLOW ROOM', 'C L C 1', 'CLC-02', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:15:10 pm'),
(116, 'BLOW ROOM', 'C L C 1', 'CLC-03', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:15:32 pm'),
(117, 'BLOW ROOM', 'METAL DETECTOTR', 'MD-02', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:16:01 pm'),
(118, 'BLOW ROOM', 'M P M 8', 'MP8-O3', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:16:27 pm'),
(119, 'BLOW ROOM', 'STEP CLEANER', 'SRS6-02', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:16:54 pm'),
(120, 'BLOW ROOM', 'STEP CLEANER', 'SRS6-03', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:17:17 pm'),
(121, 'BLOW ROOM', 'VETAL SCAN', 'VS-02', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:18:11 pm'),
(122, 'BLOW ROOM', 'VETAL SCAN', 'VS-03', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:18:38 pm'),
(123, 'BLOW ROOM', 'V X L', 'VX-02', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:19:24 pm'),
(124, 'BLOW ROOM', 'V X L', 'VX-03', 'NORMAL', 'UNIT-2', '0', '2016/11/15 11:20:05 pm'),
(125, 'CARDING', 'TC5-3', 'CRD-13', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:37:37 pm'),
(126, 'CARDING', 'TC5-3', 'CRD-14', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:38:27 pm'),
(127, 'BLOW ROOM', 'TC5-3', 'CRD-15', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:39:06 pm'),
(128, 'CARDING', 'TC5-3', 'CRD-16', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:39:35 pm'),
(129, 'CARDING', 'TC5-3', 'CRD-17', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:40:14 pm'),
(130, 'CARDING', 'TC5-3', 'CRD-18', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:40:44 pm'),
(131, 'CARDING', 'TC5-3', 'CRD-19', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:41:25 pm'),
(132, 'CARDING', 'TC5-3', 'CRD-20', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:41:48 pm'),
(133, 'CARDING', 'TC5-3', 'CRD-21', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:43:20 pm'),
(134, 'CARDING', 'TC5-3', 'CRD-22', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:43:42 pm'),
(135, 'CARDING', 'TC5-3', 'CRD-23', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:43:59 pm'),
(136, 'CARDING', 'TC5-3', 'CRD-24', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:44:20 pm'),
(137, 'CARDING', 'TC5-3', 'CRD-25', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:45:03 pm'),
(138, 'CARDING', 'TC5-3', 'CRD-26', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:45:23 pm'),
(139, 'PRE COMBER DRG', 'SB-D22', 'PDRG-04', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:46:09 pm'),
(140, 'PRE COMBER DRG', 'SB-D22', 'PDRG-05', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:46:42 pm'),
(141, 'FINISHER DRG', 'RSB-D22', 'FDRG-04', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:48:03 pm'),
(142, 'FINISHER DRG', 'RSB-D22', 'FDRG-05', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:48:34 pm'),
(143, 'FINISHER DRG', 'RSB-D22', 'FDRG-06', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:49:12 pm'),
(144, 'FINISHER DRG', 'RSB-D22', 'FDRG-07', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:49:42 pm'),
(145, 'SIMPLEX', 'ELECTROJET', 'SIM-05', 'NORMAL', 'UNIT-2', '192', '2016/11/15 10:50:34 pm'),
(146, 'SIMPLEX', 'ELECTROJET', 'SIM-06', 'NORMAL', 'UNIT-2', '192', '2016/11/15 10:51:05 pm'),
(147, 'SIMPLEX', 'ELECTROJET', 'SIM-07', 'NORMAL', 'UNIT-2', '192', '2016/11/15 10:52:17 pm'),
(148, 'SIMPLEX', 'ELECTROJET', 'SIM-08', 'NORMAL', 'UNIT-2', '192', '2016/11/15 10:52:46 pm'),
(149, 'CARDING', 'TC5-3', 'CRD-27', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:53:37 pm'),
(150, 'CARDING', 'TC5-3', 'CRD-28', 'NORMAL', 'UNIT-2', '0', '2016/11/15 10:54:05 pm'),
(151, 'CARDING', 'TC5-1', 'CRD-10', 'NORMAL', 'UNIT-1', '0', '2016/11/15 10:54:40 pm'),
(152, 'CARDING', 'TC5-1', 'CRD-13U1', 'NORMAL', 'UNIT-1', '0', '2016/11/15 10:55:16 pm');

-- --------------------------------------------------------

--
-- Table structure for table `productionpackingmaster`
--

CREATE TABLE IF NOT EXISTS `productionpackingmaster` (
`id` int(33) NOT NULL,
  `count` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `variety` varchar(222) NOT NULL,
  `lotno` varchar(222) NOT NULL,
  `conetip` varchar(222) NOT NULL,
  `strapcolor` varchar(222) NOT NULL,
  `conewt` varchar(222) NOT NULL,
  `conesbag` varchar(222) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `productionpackingmaster`
--

INSERT INTO `productionpackingmaster` (`id`, `count`, `code`, `variety`, `lotno`, `conetip`, `strapcolor`, `conewt`, `conesbag`, `unit`, `datetime`) VALUES
(1, '40', '40KH', 'KH', '1', 'RED', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 07:42:48 pm'),
(2, '44', '44KW', 'KW', '1', 'GREEN', 'N', '1.3', '40', 'UNIT-1', '2016/11/16 07:44:19 pm'),
(3, '40', '44KW', 'KW', '1', 'PLAIN', 'N', '1.89', '32', 'UNIT-1', '2016/11/16 07:45:44 pm'),
(4, '32', '32KW', 'KW', '1', 'VIOLET ST', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 07:47:11 pm'),
(5, '40', '40KW{E}', 'KW(E)', '1', 'RED STAR', 'GREEN', '1.89', '24', 'UNIT-1', '2016/11/16 07:48:32 pm'),
(6, '32', '32KH', 'KH', '1', 'RED STAR', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 07:49:50 pm'),
(7, '40', '40CW', 'CW', '1', 'VIOLET ST', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 08:42:24 pm'),
(8, '38', '38KW', 'KW', '1', 'PLAIN', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 08:47:37 pm'),
(9, '31', '31KW', 'KW', '1', 'PLAIN', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 08:48:17 pm'),
(10, '30', '30KW', 'KW', '1', 'PLAIN', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 08:49:05 pm'),
(11, '16', '16KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:49:59 pm'),
(12, '30', '30KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:50:38 pm'),
(13, '32', '32KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:51:10 pm'),
(14, '17', '17KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:51:50 pm'),
(15, '15', '15KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:52:28 pm'),
(16, '33', '33KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:53:07 pm'),
(17, '21', '21KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:53:50 pm'),
(18, '13', '13KW2', 'KW', '1', 'N', 'N', '2.5', '350', 'UNIT-2', '2016/11/16 08:54:45 pm'),
(19, '24', '24KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:55:24 pm'),
(20, '41', '41KW', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:56:07 pm'),
(21, '20', '20KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:56:47 pm'),
(22, '14', '14KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:57:18 pm'),
(23, '20', '20KH2', 'KH', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:58:05 pm'),
(24, '10', '10KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:58:51 pm'),
(25, '12', '12KW2', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 08:59:32 pm'),
(26, '21', '21KH2', 'KH', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 09:00:14 pm'),
(27, '30', '30CW', 'CW', '1', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:00:52 pm'),
(28, '20', '20CW', 'CW', '1', 'RED', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:01:44 pm'),
(29, '42', '42CW', 'CW', '1', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:02:21 pm'),
(30, '24', '24KW', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:03:04 pm'),
(31, '32', '32CW', 'CW', '1', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:04:20 pm'),
(32, '30/2', '30/2KW', 'KW', '1', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:05:15 pm'),
(33, '34', '34CH', 'CH', '1', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:05:58 pm'),
(34, '41', '41CW', 'CW', '1', 'N', 'N', '1.9', '24', 'UNIT-1', '2016/11/16 09:06:40 pm'),
(35, '13', '13KW2 A', 'KW', '1', 'N', 'N', '2.5', '300', 'UNIT-2', '2016/11/16 09:07:37 pm'),
(36, '30', '30SCH', 'SCH', '1', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:08:20 pm'),
(37, '13', '13KW2 B', 'KW', '1', 'N', 'N', '2.5', '18', 'UNIT-2', '2016/11/16 09:09:04 pm'),
(38, '10', '10KW2 A', 'KW', '1', 'N', 'N', '3.5', '12', 'UNIT-2', '2016/11/16 09:09:57 pm'),
(39, '10', '10KW2 B', 'KW', 'N', 'N', 'N', '2', '24', 'UNIT-2', '2016/11/16 09:10:53 pm'),
(40, '12.75', '12.75KW2', 'KW', 'N', 'N', 'N', '3.5', '12', 'UNIT-2', '2016/11/16 09:11:57 pm'),
(41, '20', '20CW 1', 'CW', 'N', 'N', 'N', '2.5', '18', 'UNIT-1', '2016/11/16 09:12:43 pm'),
(42, '31', '31KW', 'KW', 'N', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 09:13:59 pm'),
(43, '12', '12SCW', 'SCW', '1', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 09:14:44 pm'),
(44, '21', '21CW', 'CW', '1', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:15:29 pm'),
(45, '30', '31KW A', 'KW', 'N', 'N', 'N', '2.5', '18', 'UNIT-1', '2016/11/16 09:16:27 pm'),
(46, '20', '20/2 KW', 'KW', '1', 'N', 'N', '1.89', '24', 'TFO', '2016/11/18 01:10:12 am'),
(47, '30', '30/2CW', 'CW', '1', 'N', 'N', '1.89', '24', 'TFO', '2016/11/18 01:10:41 am'),
(48, '30', '30SCW', 'SCW', 'N', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:23:16 pm'),
(49, '20', '20CW2', 'CW', 'N', 'N', 'N', '1.89', '18', 'UNIT-2', '2016/11/16 09:24:02 pm'),
(50, '20', '20CW2', 'CW', 'N', 'N', 'N', '2.5', '18', 'UNIT-2', '2016/11/16 09:25:08 pm'),
(51, '16', '16KWA', 'KW', 'N', 'N', 'N', '3.5', '12', 'UNIT-2', '2016/11/16 09:26:06 pm'),
(52, '32', '32SCW', 'SCW', 'N', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:26:50 pm'),
(53, '10', '10KW2 C', 'KW', 'N', 'N', 'N', '3.8', '12', 'UNIT-2', '2016/11/16 09:27:38 pm'),
(54, '40', '40KWC', 'KWC', 'N', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:28:20 pm'),
(55, '24', '24CW', 'CW', 'N', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:28:59 pm'),
(56, '16', '16KW B', 'KW', 'N', 'N', 'N', '3.3', '12', 'UNIT-2', '2016/11/16 09:30:04 pm'),
(57, '12', '12KW2 A', 'KW', 'N', 'N', 'N', '2.9', '12', 'UNIT-2', '2016/11/16 09:31:16 pm'),
(58, '20', '20KW2 A', 'KW', 'N', 'N', 'N', '1.89', '24', 'UNIT-2', '2016/11/16 09:33:07 pm'),
(59, '42', '42CWC', 'CW', 'N', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:33:49 pm'),
(60, '20', '20KW2 A', 'KW', 'N', 'N', 'N', '3.5', '12', 'UNIT-2', '2016/11/16 09:34:57 pm'),
(61, '14', '14KW A', 'KW', 'N', 'N', 'N', '3.72', '12', 'UNIT-2', '2016/11/16 09:35:45 pm'),
(62, '32', '32/2 CW', 'CW', 'N', 'N', 'N', '1.89', '24', 'TFO', '2016/11/18 01:11:12 am'),
(63, '12', '12KW2A', 'KW', 'N', 'N', 'N', '1.77', '24', 'UNIT-2', '2016/11/16 09:37:39 pm'),
(64, '12.75', '12.75KW2A', 'KW', 'N', 'N', 'N', '1.667', '24', 'UNIT-2', '2016/11/16 09:38:55 pm'),
(65, '40', '40CWC', 'CWC', '1', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:39:41 pm'),
(66, '30', '30CWC', 'CWC', '1', 'N', 'N', '1.89', '24', 'UNIT-1', '2016/11/16 09:40:22 pm'),
(67, '20', '20/2KW A', 'KW', 'N', 'N', 'N', '2.658', '18', 'TFO', '2016/11/18 01:11:27 am');

-- --------------------------------------------------------

--
-- Table structure for table `productionpower`
--

CREATE TABLE IF NOT EXISTS `productionpower` (
`id` int(22) NOT NULL,
  `date` varchar(222) NOT NULL,
  `time` varchar(222) NOT NULL,
  `kvh` varchar(222) NOT NULL,
  `kvah` varchar(222) NOT NULL,
  `units` varchar(222) NOT NULL,
  `unittype` varchar(222) NOT NULL,
  `dcunits` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `productionpower`
--

INSERT INTO `productionpower` (`id`, `date`, `time`, `kvh`, `kvah`, `units`, `unittype`, `dcunits`, `datetime`) VALUES
(1, '', '', 'hggh', 'ghgh', 'ghgh', 'UNIT-1', 'ghhg', '2016/09/04 10:38:48 pm');

-- --------------------------------------------------------

--
-- Table structure for table `productionshiftduration`
--

CREATE TABLE IF NOT EXISTS `productionshiftduration` (
`id` int(22) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `duration` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `productionshiftduration`
--

INSERT INTO `productionshiftduration` (`id`, `shift`, `duration`, `datetime`) VALUES
(2, 'Day Shift', '510', '2016/11/17 08:55:53 am'),
(3, 'Evening Shift', '510', '2016/11/17 08:56:01 am'),
(4, 'Night Shift', '420', '2016/11/17 08:56:07 am');

-- --------------------------------------------------------

--
-- Table structure for table `productionstoapgereason`
--

CREATE TABLE IF NOT EXISTS `productionstoapgereason` (
`id` int(55) NOT NULL,
  `pslno` varchar(222) NOT NULL,
  `preason` varchar(222) NOT NULL,
  `psr` varchar(222) NOT NULL,
  `sslno` varchar(222) NOT NULL,
  `sreason` varchar(77) NOT NULL,
  `standard` varchar(222) NOT NULL,
  `ssr` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `productionstoapgereason`
--

INSERT INTO `productionstoapgereason` (`id`, `pslno`, `preason`, `psr`, `sslno`, `sreason`, `standard`, `ssr`) VALUES
(4, '01', 'POWER FAILURE', 'PF', '01', 'POWER FAILURE', '0', 'PF'),
(5, '02', 'GENERAL MAINTENANC', 'MNT', '02', 'GENERAL MAINTENANC', '0', 'MNT'),
(6, '03', 'ELECTRICAL MAINTENANCE', 'EMNT', '03', 'ELECTRICAL MAINTENANCE', '0', 'EMNT'),
(7, '04', 'ELECTRICAL REPAIR', 'ER', '04', 'ELECTRICAL REPAIR', '0', 'ER'),
(8, '05', 'MAINTENANCE REPAIR', 'MR', '05', 'MAINTENANCE REPAIR', '0', 'MR'),
(9, '06', 'COUNT CHANGE', 'CC', '06', 'COUNT CHANGE', '0', 'CC'),
(10, '07', 'BACK STUFF STORAGE', 'BSS', '07', 'BACK STUFF STORAGE', '0', 'BSS'),
(11, '08', 'EXCESS STOCK', 'ES', '08', 'EXCESS STOCK', '0', 'ES'),
(12, '09', 'HAND STORAGE', 'HS', '09', 'HAND STORAGE', '0', 'HS'),
(13, '10', 'OTHERS', 'OTH', '10', 'OTHERS', '0', 'OTH'),
(14, '', '', '', '11', 'RING TRAVELLER CHAN', '0', 'RTC'),
(15, '', '', '', '12', 'MR AUTO DOFFING', '0', 'MRA'),
(16, '', '', '', '13', 'ER AUTO DOFFING', '0', 'ERA'),
(17, '', '', '', '14', 'LINK CORNER PROBLEM', '0', 'ERA');

-- --------------------------------------------------------

--
-- Table structure for table `productionsupervisor`
--

CREATE TABLE IF NOT EXISTS `productionsupervisor` (
`id` int(55) NOT NULL,
  `supervisorname` varchar(55) NOT NULL,
  `asm` varchar(222) NOT NULL,
  `maistry` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `productionsupervisor`
--

INSERT INTO `productionsupervisor` (`id`, `supervisorname`, `asm`, `maistry`, `datetime`) VALUES
(1, 'G.SANTOSH KUMAR', '', 'MAHESWARA SAMAL', '2016/11/16 12:25:21 pm'),
(2, 'B.V.RAMANA', '', 'ANKIREDDY', '2016/11/16 12:28:26 pm'),
(3, 'NARENDRA', '', 'ANKIREDDY', '2016/11/16 12:28:48 pm'),
(4, 'M.LAXMAIAH', '', 'BKIRAN', '2016/11/16 12:29:17 pm'),
(5, 'M.VENU BABU', '', 'HAZARUDDIN', '2016/11/16 12:30:10 pm'),
(6, 'K.GOPAL', '', 'G.SANTOSH KUMAR', '2016/11/16 12:30:35 pm'),
(7, 'P.BALAKRISHNA', '', 'SANJAY DALAL', '2016/11/16 12:31:07 pm'),
(8, 'JOJAPPA', '', 'K.NARAYANA RAO', '2016/11/16 12:31:49 pm'),
(9, 'KIRAN', '', 'MANASH KUMAR', '2016/11/16 12:32:11 pm'),
(10, 'Y.ACHTUTA RAO', '', 'BABUL DAS', '2016/11/16 12:33:00 pm'),
(11, 'K.SANKAR RAO', '', 'Y.NAGA RAJU', '2016/11/16 12:33:30 pm'),
(12, 'SOMNATH', '', 'SANKAR MALIK', '2016/11/16 12:33:52 pm'),
(13, 'R.SOMESHWAR RAO', '', 'ESHWARBARIK', '2016/11/16 12:34:32 pm'),
(14, 'RAJASHEKAR', '', 'BIJAYKUMAR MALIK', '2016/11/16 12:35:07 pm'),
(15, 'RAMESH', '', 'Y.RAJU', '2016/11/16 12:35:36 pm'),
(16, 'AMARJANA', '', 'TAPAN BANTHA', '2016/11/16 12:36:09 pm'),
(17, 'Y.NAGARAJU', '', 'SRIKANTH DAS', '2016/11/16 12:36:31 pm'),
(18, 'SURESH', '', 'JAGANATH DAS', '2016/11/16 12:36:53 pm'),
(19, 'G.SANKAR RAO', '', 'SUBRATH MALIK', '2016/11/16 12:37:23 pm'),
(20, 'NAGESHWAR RAO', '', 'NAGIREDDY', '2016/11/16 12:37:44 pm'),
(21, 'VENKATARAMANA', '', 'SRINU', '2016/11/16 12:38:20 pm'),
(22, 'KARTIK NAYAK', '', 'T.SRIRAMULU', '2016/11/16 12:38:48 pm'),
(23, 'PRADEEP MALIK', '', 'PRAKASH KUMAR SWAIN', '2016/11/16 12:40:02 pm'),
(24, 'SAIKUMAR', '', '', '2016/11/16 12:40:12 pm'),
(25, 'SK.MOULALI', '', '', '2016/11/16 12:40:44 pm'),
(26, 'G.ANIL KUMAR', '', '', '2016/11/16 12:41:01 pm');

-- --------------------------------------------------------

--
-- Table structure for table `productionworkedspndls`
--

CREATE TABLE IF NOT EXISTS `productionworkedspndls` (
`id` int(22) NOT NULL,
  `actspndls` int(222) NOT NULL,
  `duration` int(222) NOT NULL,
  `totalduration` int(222) NOT NULL,
  `workdspndls` int(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `productionworkedspndls`
--

INSERT INTO `productionworkedspndls` (`id`, `actspndls`, `duration`, `totalduration`, `workdspndls`) VALUES
(1, 1440, 1, 3, 1437),
(2, 1440, 2, 6, 1434),
(3, 1440, 5, 14, 1430),
(4, 1440, 10, 28, 1412),
(5, 1440, 15, 42, 1398),
(6, 1440, 20, 56, 1384),
(7, 1440, 25, 71, 1370),
(8, 1440, 30, 85, 1355);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseentry`
--

CREATE TABLE IF NOT EXISTS `purchaseentry` (
`id` int(88) NOT NULL,
  `purorder` varchar(88) NOT NULL,
  `finalprovisional` varchar(88) NOT NULL,
  `despatchedfrom` varchar(88) NOT NULL,
  `amcno` varchar(88) NOT NULL,
  `amcnoo` varchar(88) NOT NULL,
  `transactiontype` varchar(88) NOT NULL,
  `suppbillno` varchar(88) NOT NULL,
  `suppbillnodate` varchar(88) NOT NULL,
  `portofloading` varchar(88) NOT NULL,
  `portofloadingdischarge` varchar(88) NOT NULL,
  `amcplace` varchar(88) NOT NULL,
  `inwardno` varchar(88) NOT NULL,
  `suppliernamme` varchar(88) NOT NULL,
  `finaldestination` varchar(88) NOT NULL,
  `epcgno` varchar(88) NOT NULL,
  `inwarddate` varchar(88) NOT NULL,
  `partyvatno` varchar(88) NOT NULL,
  `modeoftransport` varchar(88) NOT NULL,
  `otlno` varchar(88) NOT NULL,
  `billtype` varchar(88) NOT NULL,
  `agent` varchar(88) NOT NULL,
  `vehicleregno` varchar(88) NOT NULL,
  `cexrangeno` varchar(88) NOT NULL,
  `import` varchar(88) NOT NULL,
  `purchasecontractno` varchar(88) NOT NULL,
  `purchasecontractnodate` varchar(88) NOT NULL,
  `containerno` varchar(88) NOT NULL,
  `currencytype` varchar(88) NOT NULL,
  `currencytypee` varchar(88) NOT NULL,
  `importtype` varchar(88) NOT NULL,
  `importref` varchar(88) NOT NULL,
  `vesselflieht` varchar(44) NOT NULL,
  `conversion` varchar(88) NOT NULL,
  `conversionn` varchar(88) NOT NULL,
  `purchasemode` varchar(88) NOT NULL,
  `duedays` varchar(88) NOT NULL,
  `duedayss` varchar(88) NOT NULL,
  `lrno` varchar(88) NOT NULL,
  `ratetime` varchar(88) NOT NULL,
  `ratetimedate` varchar(88) NOT NULL,
  `state` varchar(88) NOT NULL,
  `termsofdelivery` varchar(88) NOT NULL,
  `waybillno` varchar(88) NOT NULL,
  `purchasecotton` varchar(88) NOT NULL,
  `itemname` varchar(88) NOT NULL,
  `deliverywt` varchar(88) NOT NULL,
  `tarewt` varchar(88) NOT NULL,
  `verity` varchar(88) NOT NULL,
  `pressmarkno` varchar(88) NOT NULL,
  `quality` varchar(88) NOT NULL,
  `allowance` varchar(88) NOT NULL,
  `sizecount` varchar(88) NOT NULL,
  `bagslno` varchar(88) NOT NULL,
  `bagslnoto` varchar(88) NOT NULL,
  `units` varchar(88) NOT NULL,
  `netwt` varchar(88) NOT NULL,
  `typeofpack` varchar(88) NOT NULL,
  `bagtype` varchar(88) NOT NULL,
  `bagsize` varchar(88) NOT NULL,
  `unittobeconvert` varchar(88) NOT NULL,
  `unittobeconvertt` varchar(88) NOT NULL,
  `rate` varchar(88) NOT NULL,
  `partylotno` varchar(88) NOT NULL,
  `convfactor` varchar(88) NOT NULL,
  `quantity` varchar(88) NOT NULL,
  `totunitval` varchar(88) NOT NULL,
  `milllotno` varchar(88) NOT NULL,
  `convbales` varchar(88) NOT NULL,
  `grosswt` varchar(88) NOT NULL,
  `amount` varchar(88) NOT NULL,
  `basicval` varchar(88) NOT NULL,
  `discountcheck` varchar(88) NOT NULL,
  `discountper` int(88) NOT NULL,
  `discountval` int(88) NOT NULL,
  `insurancecheck` varchar(88) NOT NULL,
  `insuranceper` int(88) NOT NULL,
  `insuranceval` int(88) NOT NULL,
  `pfcheck` varchar(88) NOT NULL,
  `pfper` int(88) NOT NULL,
  `pfval` int(88) NOT NULL,
  `frieghtcheck` varchar(88) NOT NULL,
  `frieghtper` int(88) NOT NULL,
  `frieghtval` int(88) NOT NULL,
  `couriercheck` varchar(88) NOT NULL,
  `courierper` int(88) NOT NULL,
  `courierval` int(88) NOT NULL,
  `bedcheck` varchar(88) NOT NULL,
  `bedper` int(88) NOT NULL,
  `bedval` int(88) NOT NULL,
  `aedcheck` varchar(88) NOT NULL,
  `aedper` int(88) NOT NULL,
  `aedval` int(88) NOT NULL,
  `cesscheck` varchar(88) NOT NULL,
  `cessper` int(88) NOT NULL,
  `cessval` int(88) NOT NULL,
  `vatcheck` varchar(88) NOT NULL,
  `vatper` int(88) NOT NULL,
  `vatval` int(88) NOT NULL,
  `cstcheck` varchar(88) NOT NULL,
  `cstper` int(88) NOT NULL,
  `cstval` int(88) NOT NULL,
  `epcgcheck` varchar(88) NOT NULL,
  `epcgper` int(88) NOT NULL,
  `epcgval` int(88) NOT NULL,
  `otherscheck` varchar(88) NOT NULL,
  `othersper` int(88) NOT NULL,
  `othersval` int(88) NOT NULL,
  `mislaniuscheck` varchar(88) NOT NULL,
  `mislaniusper` int(88) NOT NULL,
  `mislaniusval` int(88) NOT NULL,
  `amccheck` varchar(88) NOT NULL,
  `amcper` int(88) NOT NULL,
  `amcval` int(88) NOT NULL,
  `tdsamtcheck` varchar(88) NOT NULL,
  `tdsamtper` int(88) NOT NULL,
  `tdsamtval` int(88) NOT NULL,
  `discount` int(88) NOT NULL,
  `insurance` int(88) NOT NULL,
  `pf` int(88) NOT NULL,
  `fright` int(88) NOT NULL,
  `courier` int(88) NOT NULL,
  `bed` int(88) NOT NULL,
  `aed` int(88) NOT NULL,
  `cess` int(88) NOT NULL,
  `vat` int(88) NOT NULL,
  `cst` int(88) NOT NULL,
  `epcg` int(88) NOT NULL,
  `others` int(88) NOT NULL,
  `mislanius` int(88) NOT NULL,
  `amc` int(88) NOT NULL,
  `tds` int(88) NOT NULL,
  `totamt` int(88) NOT NULL,
  `totbillamt` int(88) NOT NULL,
  `totkgs` int(88) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `purchaseentry`
--

INSERT INTO `purchaseentry` (`id`, `purorder`, `finalprovisional`, `despatchedfrom`, `amcno`, `amcnoo`, `transactiontype`, `suppbillno`, `suppbillnodate`, `portofloading`, `portofloadingdischarge`, `amcplace`, `inwardno`, `suppliernamme`, `finaldestination`, `epcgno`, `inwarddate`, `partyvatno`, `modeoftransport`, `otlno`, `billtype`, `agent`, `vehicleregno`, `cexrangeno`, `import`, `purchasecontractno`, `purchasecontractnodate`, `containerno`, `currencytype`, `currencytypee`, `importtype`, `importref`, `vesselflieht`, `conversion`, `conversionn`, `purchasemode`, `duedays`, `duedayss`, `lrno`, `ratetime`, `ratetimedate`, `state`, `termsofdelivery`, `waybillno`, `purchasecotton`, `itemname`, `deliverywt`, `tarewt`, `verity`, `pressmarkno`, `quality`, `allowance`, `sizecount`, `bagslno`, `bagslnoto`, `units`, `netwt`, `typeofpack`, `bagtype`, `bagsize`, `unittobeconvert`, `unittobeconvertt`, `rate`, `partylotno`, `convfactor`, `quantity`, `totunitval`, `milllotno`, `convbales`, `grosswt`, `amount`, `basicval`, `discountcheck`, `discountper`, `discountval`, `insurancecheck`, `insuranceper`, `insuranceval`, `pfcheck`, `pfper`, `pfval`, `frieghtcheck`, `frieghtper`, `frieghtval`, `couriercheck`, `courierper`, `courierval`, `bedcheck`, `bedper`, `bedval`, `aedcheck`, `aedper`, `aedval`, `cesscheck`, `cessper`, `cessval`, `vatcheck`, `vatper`, `vatval`, `cstcheck`, `cstper`, `cstval`, `epcgcheck`, `epcgper`, `epcgval`, `otherscheck`, `othersper`, `othersval`, `mislaniuscheck`, `mislaniusper`, `mislaniusval`, `amccheck`, `amcper`, `amcval`, `tdsamtcheck`, `tdsamtper`, `tdsamtval`, `discount`, `insurance`, `pf`, `fright`, `courier`, `bed`, `aed`, `cess`, `vat`, `cst`, `epcg`, `others`, `mislanius`, `amc`, `tds`, `totamt`, `totbillamt`, `totkgs`) VALUES
(1, '', 'Final', '', '', '', 'Purchase', '', '', '', '', '', '', 'Final', '', '', '', '', '', '', 'CREDITBILL', '', '', '', 'COTTON-LINT', '', '', '', 'RUPEES', '', 'COTTON-LINT', '', '', '', '', 'REGISTERED', '', '', '', '', '', 'WITHINSTATE', '', '', 'PURCHASES COTTON-LINT', '', '', '', '', '', '', '', '', '', '', 'KGS', '', 'BALES', '', '', 'KGS', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 5, 5, 55, 5, 5, 55, 5, 5, 55, 5, 5, 55, 5, 5, 5, 5, 5, 55),
(2, '', 'Final', '', '', '', 'Purchase', '44', '2016-11-24', '', '', '', '655656', 'Final', '', '', '2016-11-24', '676767676', '', '', 'CREDITBILL', 'hjhjhj', '', '', 'COTTON-LINT', '67676767767', '2016-11-25', '', 'RUPEES', '', 'COTTON-LINT', '', '', '', '', 'REGISTERED', '', '', '', '', '', 'WITHINSTATE', '', '', 'PURCHASES COTTON-LINT', '', '', '10000', 'cotton', '', '', '', '', '1', '100', 'KGS', '10000', 'BALES', '', '', 'KGS', '', '120', '676767', '', '100', '100000', '76787878', '', '10000', '100000', '100000', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '', 'Final', '', '', '', 'Purchase', '', '2016-11-26', '', '', '', '67t766767', 'Final', '', '', '2016-11-26', '66767', '', '', 'CREDITBILL', '', '', '', 'COTTON-LINT', '6565', '2016-11-27', '', 'RUPEES', '', 'COTTON-LINT', '', '', '', '', 'REGISTERED', '', '', '', '', '', 'WITHINSTATE', '', '', 'PURCHASES COTTON-LINT', '', '', '5000', 'cotton', '', '', '', '', '1', '50', 'KGS', '5000', 'BALES', '', '', 'KGS', '', '100', '', '', '50', '', '', '', '5000', '50000', '50000', '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseitemmaster`
--

CREATE TABLE IF NOT EXISTS `purchaseitemmaster` (
`id` int(22) NOT NULL,
  `mainitemmaster` varchar(222) NOT NULL,
  `subitemname` varchar(222) NOT NULL,
  `variety` varchar(222) NOT NULL,
  `size/count` varchar(222) NOT NULL,
  `transmode` varchar(222) NOT NULL,
  `purchasemode` varchar(222) NOT NULL,
  `units` varchar(222) NOT NULL,
  `typeofpack` varchar(222) NOT NULL,
  `billlseries` varchar(222) NOT NULL,
  `transaveinaccounts` varchar(222) NOT NULL,
  `saveincludeexpenses` varchar(222) NOT NULL,
  `accountname` varchar(222) NOT NULL,
  `vataccountname` varchar(222) NOT NULL,
  `financialyear` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `purchaseitemmaster`
--

INSERT INTO `purchaseitemmaster` (`id`, `mainitemmaster`, `subitemname`, `variety`, `size/count`, `transmode`, `purchasemode`, `units`, `typeofpack`, `billlseries`, `transaveinaccounts`, `saveincludeexpenses`, `accountname`, `vataccountname`, `financialyear`, `datetime`) VALUES
(1, '', '', '', '', '', '', '', '', 'dv', '', '', 'dfdf', 'dffd', 'fdfd', '2016/08/15 11:09:29 pm');

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

CREATE TABLE IF NOT EXISTS `purchaseorder` (
`id` int(22) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `veriety` varchar(222) NOT NULL,
  `quality` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `purchaseorderdate` varchar(222) NOT NULL,
  `purchaseorderno` varchar(222) NOT NULL,
  `suppliername` varchar(222) NOT NULL,
  `agentname` varchar(222) NOT NULL,
  `deliveryweight` varchar(222) NOT NULL,
  `monthtobedelivered` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `bagtype` varchar(222) NOT NULL,
  `noofpacks` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `paymentterms` varchar(222) NOT NULL,
  `station` varchar(222) NOT NULL,
  `straplestrenth` varchar(222) NOT NULL,
  `mic` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `purchaseorder`
--

INSERT INTO `purchaseorder` (`id`, `itemname`, `veriety`, `quality`, `state`, `slno`, `purchaseorderdate`, `purchaseorderno`, `suppliername`, `agentname`, `deliveryweight`, `monthtobedelivered`, `count`, `bagtype`, `noofpacks`, `rate`, `paymentterms`, `station`, `straplestrenth`, `mic`, `datetime`) VALUES
(1, 'dfdvf', 'please select-----', '33', 'dfgrd', '', '2016-09-13', '1223', 'fdf', 'dfvd', 'fdgdg', '2016-09-13', 'rtt', '66', '6', '', '', '', '', '', '2016/09/13 03:00:20 pm');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE IF NOT EXISTS `quality` (
`id` int(44) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Count` varchar(30) NOT NULL,
  `avgcount` varchar(55) NOT NULL,
  `Count CV%` varchar(30) NOT NULL,
  `Strength` varchar(30) NOT NULL,
  `Strength CV%` varchar(30) NOT NULL,
  `CSP` varchar(30) NOT NULL,
  `U%` varchar(30) NOT NULL,
  `CVM` varchar(30) NOT NULL,
  `CV(b)` varchar(30) NOT NULL,
  `Thin` varchar(30) NOT NULL,
  `Thick` varchar(30) NOT NULL,
  `Neps` varchar(30) NOT NULL,
  `Total1` varchar(30) NOT NULL,
  `H` varchar(30) NOT NULL,
  `Thin1` varchar(30) NOT NULL,
  `Thin2` varchar(30) NOT NULL,
  `Thick1` varchar(30) NOT NULL,
  `Neps1` varchar(30) NOT NULL,
  `Total2` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `quality`
--

INSERT INTO `quality` (`id`, `Date`, `Count`, `avgcount`, `Count CV%`, `Strength`, `Strength CV%`, `CSP`, `U%`, `CVM`, `CV(b)`, `Thin`, `Thick`, `Neps`, `Total1`, `H`, `Thin1`, `Thin2`, `Thick1`, `Neps1`, `Total2`) VALUES
(15, '2016-08-04', '77', '8', '8', '8', '8', '8', '8', '8', '8', '7', '7', '7', '21', '8', '8', '9', '9', '9', '27');

-- --------------------------------------------------------

--
-- Table structure for table `rawissue`
--

CREATE TABLE IF NOT EXISTS `rawissue` (
  `id` int(55) NOT NULL,
  `date` varchar(44) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `countvariety` varchar(222) NOT NULL,
  `stocking` varchar(222) NOT NULL,
  `baleno` varchar(222) NOT NULL,
  `2.5%sl` varchar(222) NOT NULL,
  `50%sl` varchar(222) NOT NULL,
  `ur%` varchar(222) NOT NULL,
  `microniar` varchar(222) NOT NULL,
  `strength` varchar(222) NOT NULL,
  `mr%` varchar(222) NOT NULL,
  `rd` varchar(222) NOT NULL,
  `+b` varchar(222) NOT NULL,
  `trash%` varchar(222) NOT NULL,
  `moist%` varchar(222) NOT NULL,
  `fqi` varchar(222) NOT NULL,
  `elong` varchar(222) NOT NULL,
  `sfc` varchar(222) NOT NULL,
  `balewt` varchar(222) NOT NULL,
  `phywt` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawissue`
--

INSERT INTO `rawissue` (`id`, `date`, `itemname`, `countvariety`, `stocking`, `baleno`, `2.5%sl`, `50%sl`, `ur%`, `microniar`, `strength`, `mr%`, `rd`, `+b`, `trash%`, `moist%`, `fqi`, `elong`, `sfc`, `balewt`, `phywt`, `datetime`) VALUES
(10, '2016-08-04', 'ewffwe', ' please select-----', ' please select-----', '33', '33', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/04 12:41:18 pm'),
(11, '2016-08-06', 'efwfe', ' please select-----', ' please select-----', '44', '44', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/04 12:41:35 pm'),
(12, '2016-08-04', 'ewffwe', ' please select-----', ' wefwef', '33', '33', '33', 'adwd323', '434', '34242', '4243', '43', '243', '424', '423', '43', '42', '342', '2423', '4243', '2016/08/04 02:00:50 pm'),
(14, '2016-08-18', 'ewffwe', ' please select-----', ' please select-----', 'nhn', 'nhn', 'hg', 'ghhg', '', '', 'ghn', 'gnh', '', '', '', '', 'hn', 'ng', '', '', '2016/08/04 02:03:07 pm'),
(13, '2016-08-11', 'efwfe', ' wefewf', ' please select-----', '44', '44', '', 'gfb', '', '', '', '', '', '', '', '', '', '', 'gfb', '', '2016/08/04 02:02:30 pm'),
(14, '2016-08-11', 'ewffwe', ' wefewf', ' please select-----', '44', '44', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/11 01:04:39 pm'),
(15, '', 'please select-----', ' please select-----', ' please select-----', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/12 05:19:41 pm'),
(16, '', 'please select-----', ' please select-----', ' please select-----', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/12 05:21:02 pm');

-- --------------------------------------------------------

--
-- Table structure for table `rawmasters`
--

CREATE TABLE IF NOT EXISTS `rawmasters` (
`id` int(55) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `stocking` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `rawmasters`
--

INSERT INTO `rawmasters` (`id`, `itemname`, `count`, `stocking`, `datetime`) VALUES
(3, 'ewffwe', 'wefewf', 'wefwef', '2016/07/21 01:38:48 pm'),
(4, 'efwfe', 'wefwef', 'efwfwe', '2016/07/21 01:38:53 pm');

-- --------------------------------------------------------

--
-- Table structure for table `rawmgt`
--

CREATE TABLE IF NOT EXISTS `rawmgt` (
`id` int(66) NOT NULL,
  `date` varchar(222) NOT NULL,
  `supplier` varchar(222) NOT NULL,
  `agent` varchar(222) NOT NULL,
  `milllotno` varchar(222) NOT NULL,
  `cottonvariety` varchar(222) NOT NULL,
  `stockingat` varchar(222) NOT NULL,
  `binlocation` varchar(222) NOT NULL,
  `frieght` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `area` varchar(222) NOT NULL,
  `bales` varchar(222) NOT NULL,
  `boras` varchar(222) NOT NULL,
  `convbales` varchar(222) NOT NULL,
  `balenos` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `handling` varchar(222) NOT NULL,
  `size` varchar(222) NOT NULL,
  `serialno` varchar(222) NOT NULL,
  `supplierlotno` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `rate/kg` varchar(222) NOT NULL,
  `balewt` varchar(222) NOT NULL,
  `phywt` varchar(222) NOT NULL,
  `assblevalue` varchar(222) NOT NULL,
  `baleno` varchar(222) NOT NULL,
  `sl1` varchar(222) NOT NULL,
  `sl2` varchar(222) NOT NULL,
  `ur` varchar(222) NOT NULL,
  `microniar` varchar(222) NOT NULL,
  `strength` varchar(222) NOT NULL,
  `mr` varchar(222) NOT NULL,
  `rd` varchar(222) NOT NULL,
  `+b` varchar(222) NOT NULL,
  `trash%` varchar(222) NOT NULL,
  `moist%` varchar(222) NOT NULL,
  `fqi` varchar(222) NOT NULL,
  `elong` varchar(222) NOT NULL,
  `sfc` varchar(222) NOT NULL,
  `balewtt` varchar(222) NOT NULL,
  `phywtt` varchar(222) NOT NULL,
  `datetime` varchar(66) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `rawmgt`
--

INSERT INTO `rawmgt` (`id`, `date`, `supplier`, `agent`, `milllotno`, `cottonvariety`, `stockingat`, `binlocation`, `frieght`, `itemname`, `area`, `bales`, `boras`, `convbales`, `balenos`, `rate`, `handling`, `size`, `serialno`, `supplierlotno`, `count`, `rate/kg`, `balewt`, `phywt`, `assblevalue`, `baleno`, `sl1`, `sl2`, `ur`, `microniar`, `strength`, `mr`, `rd`, `+b`, `trash%`, `moist%`, `fqi`, `elong`, `sfc`, `balewtt`, `phywtt`, `datetime`) VALUES
(22, '2016-09-13', 'raju', '', '', 'dfs', '', '', '', 'cotton', '', '50', '', '', '', '', '', '', '', '', 'please select-----', '', '', '', '', '100', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/09/13 02:06:58 pm');

-- --------------------------------------------------------

--
-- Table structure for table `rawmgt1`
--

CREATE TABLE IF NOT EXISTS `rawmgt1` (
`id` int(66) NOT NULL,
  `date` varchar(222) NOT NULL,
  `supplier` varchar(222) NOT NULL,
  `agent` varchar(222) NOT NULL,
  `milllotno` varchar(222) NOT NULL,
  `cottonvariety` varchar(222) NOT NULL,
  `stockingat` varchar(222) NOT NULL,
  `binlocation` varchar(222) NOT NULL,
  `frieght` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `area` varchar(222) NOT NULL,
  `bales` varchar(222) NOT NULL,
  `boras` varchar(222) NOT NULL,
  `convbales` varchar(222) NOT NULL,
  `balenos` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `handling` varchar(222) NOT NULL,
  `size` varchar(222) NOT NULL,
  `serialno` varchar(222) NOT NULL,
  `supplierlotno` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `rate/kg` varchar(222) NOT NULL,
  `balewt` varchar(222) NOT NULL,
  `phywt` varchar(222) NOT NULL,
  `assblevalue` varchar(222) NOT NULL,
  `baleno` varchar(222) NOT NULL,
  `sl1` varchar(222) NOT NULL,
  `sl2` varchar(222) NOT NULL,
  `ur` varchar(222) NOT NULL,
  `microniar` varchar(222) NOT NULL,
  `strength` varchar(222) NOT NULL,
  `mr` varchar(222) NOT NULL,
  `rd` varchar(222) NOT NULL,
  `+b` varchar(222) NOT NULL,
  `trash%` varchar(222) NOT NULL,
  `moist%` varchar(222) NOT NULL,
  `fqi` varchar(222) NOT NULL,
  `elong` varchar(222) NOT NULL,
  `sfc` varchar(222) NOT NULL,
  `balewtt` varchar(222) NOT NULL,
  `phywtt` varchar(222) NOT NULL,
  `datetime` varchar(66) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `rawmgt1`
--

INSERT INTO `rawmgt1` (`id`, `date`, `supplier`, `agent`, `milllotno`, `cottonvariety`, `stockingat`, `binlocation`, `frieght`, `itemname`, `area`, `bales`, `boras`, `convbales`, `balenos`, `rate`, `handling`, `size`, `serialno`, `supplierlotno`, `count`, `rate/kg`, `balewt`, `phywt`, `assblevalue`, `baleno`, `sl1`, `sl2`, `ur`, `microniar`, `strength`, `mr`, `rd`, `+b`, `trash%`, `moist%`, `fqi`, `elong`, `sfc`, `balewtt`, `phywtt`, `datetime`) VALUES
(14, '2016-08-04', '', '', '', '', 'please select-----', '', '', 'ewffwe', '', '', '', '', '', '', '', '', '', '', 'please select-----', '', '', '', '', '33', '33', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/04 12:41:18 pm'),
(15, '2016-08-06', '', '', '', '', 'please select-----', '', '', 'efwfe', '', '', '', '', '', '', '', '', '', '', 'please select-----', '', '', '', '', '44', '44', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/04 12:41:35 pm'),
(16, '2016-08-04', 'dcs', 'dcs', 'dc', 'dsdcsds', 'wefwef', 'cdscd', '', 'ewffwe', '', 'scdsdc', 'cs', 'dcs', 'cdcs', 'dcscd', 'scdc', '', 'dssd', '', 'please select-----', '', '', '', '', '33', '33', '33', 'adwd323', '434', '34242', '4243', '43', '243', '424', '423', '43', '42', '342', '2423', '4243', '2016/08/04 02:00:50 pm'),
(17, '2016-08-11', 'gfbbg', 'gbfgfbg', 'bfgbf', 'gbf', 'please select-----', '', '', 'efwfe', 'fgb', 'gfb', 'fgb', '', '', 'gfb', 'gfb', 'gfb', 'gfb', 'gfb', 'wefewf', 'gb', 'gfb', 'fgb', 'gfb', '44', '44', '', 'gfb', '', '', '', '', '', '', '', '', '', '', 'gfb', '', '2016/08/04 02:02:30 pm'),
(18, '2016-08-18', 'regrge', 'rge', 'grgegrege', '', 'please select-----', '', '', 'ewffwe', 'rgerge', 'rge', 'greg', 'rge', 'greg', 'egrer', '', '', '', '', 'please select-----', '', '', '', '', 'nhn', 'nhn', 'hg', 'ghhg', '', '', 'ghn', 'gnh', '', '', '', '', 'hn', 'ng', '', '', '2016/08/04 02:03:07 pm'),
(19, '2016-08-11', 'dfvd', '', '', '', 'please select-----', '', '', 'ewffwe', 'svdsvd', 'vfdvf', '', '', '', '', '', '', '5354', '56456dvfvfd', 'wefewf', '', '', '', '', '44', '44', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/11 01:04:39 pm'),
(20, '', 'ghghghgh', 'hgghgg', '', '', 'please select-----', '', '', 'please select-----', 'guntur', '100', '', '', '', '', '', '', '3443343434', 'jygh667667', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/12 05:19:41 pm'),
(21, '', 'jhhjjh', 'jhhjh', '', '', 'please select-----', '', '', 'please select-----', 'jhgghjvgh', 'hjh', '', '', '', '', '', '', 'hgvghg', 'hyfft', 'please select-----', '', '', '', '', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/12 05:21:02 pm'),
(22, '2016-09-13', 'raju', '', '', 'dfs', '', '', '', 'please select-----', '', '100', '', '', '', '', '', '', '', '', 'please select-----', '', '', '', '', '100', '100', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/09/13 02:06:58 pm');

-- --------------------------------------------------------

--
-- Table structure for table `rawmgtissue`
--

CREATE TABLE IF NOT EXISTS `rawmgtissue` (
`id` int(33) NOT NULL,
  `date` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `milllotno` varchar(222) NOT NULL,
  `cotton` varchar(222) NOT NULL,
  `supplier` varchar(222) NOT NULL,
  `bales` varchar(222) NOT NULL,
  `boras` varchar(222) NOT NULL,
  `convbales` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `processlotno` varchar(222) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `noofbales` varchar(222) NOT NULL,
  `baleno` varchar(222) NOT NULL,
  `sl1` varchar(222) NOT NULL,
  `sl2` varchar(222) NOT NULL,
  `ur` varchar(222) NOT NULL,
  `microniar` varchar(222) NOT NULL,
  `strength` varchar(222) NOT NULL,
  `mr` varchar(222) NOT NULL,
  `rd` varchar(222) NOT NULL,
  `b` varchar(222) NOT NULL,
  `trash` varchar(222) NOT NULL,
  `moist` text NOT NULL,
  `fqi` varchar(222) NOT NULL,
  `elong` varchar(222) NOT NULL,
  `sfc` varchar(222) NOT NULL,
  `balewtt` varchar(222) NOT NULL,
  `phywtt` varchar(222) NOT NULL,
  `datetime` varchar(44) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `rawmgtissue`
--

INSERT INTO `rawmgtissue` (`id`, `date`, `itemname`, `milllotno`, `cotton`, `supplier`, `bales`, `boras`, `convbales`, `count`, `processlotno`, `unit`, `noofbales`, `baleno`, `sl1`, `sl2`, `ur`, `microniar`, `strength`, `mr`, `rd`, `b`, `trash`, `moist`, `fqi`, `elong`, `sfc`, `balewtt`, `phywtt`, `datetime`) VALUES
(8, '2016-09-13', 'cotton', '', 'HGGH', 'raju', '50', '', '', 'HGGH', '', 'UNIT-1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`id` int(22) NOT NULL,
  `firstname` varchar(222) NOT NULL,
  `lastname` varchar(222) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `gender` varchar(222) NOT NULL,
  `phone1` varchar(222) NOT NULL,
  `phone2` varchar(222) NOT NULL,
  `address1` varchar(222) NOT NULL,
  `address2` varchar(222) NOT NULL,
  `moduletype` varchar(222) NOT NULL,
  `type` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL,
  `password` varchar(44) NOT NULL,
  `value` int(44) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `photo`, `gender`, `phone1`, `phone2`, `address1`, `address2`, `moduletype`, `type`, `datetime`, `password`, `value`) VALUES
(13, 'raju', 'raju', 'Penguins.jpg', 'Male', '9999999999', '9999999999', 'jhh', 'hhjhj', 'PRODUCTION', 'none', '2016/11/10 04:24:01 am', 'production', 1),
(15, 'naga', 'hjbhbjjh', 'Jellyfish.jpg', '', '9999999999', '9999999999', '', '', 'STORES', 'none', '2016/11/10 04:27:44 am', 'stores', 1),
(16, 'srinivas', 'guru', 'Desert.jpg', 'Male', '9999999999', '9999999999', 'jbhjbhhjb', 'jbujbkujbjb', 'QUALITY', 'none', '2016/11/10 05:25:57 am', 'quality', 1),
(17, 'ravi', 'ravi', 'Koala.jpg', 'Male', '9999999999', '9999999999', 'jjkb', 'ubjbkjkb', 'none', 'Managing Director', '2016/11/10 05:40:32 am', 'ManagingDirector', 1),
(18, 'nagaraju', 'JKJKJK', 'Desert.jpg', 'Male', '999999999', '99999999', 'jnbjkjkbjkbjbk', 'jkbjbkbjkbjk', 'RAW MATERIALS', 'none', '2016/11/11 02:36:08 am', 'raw', 1),
(19, 'maintenance', 'maintenance', 'Penguins.jpg', 'Male', '999999999', '99999999', 'kjbhkb', 'jkbjbkbkj', 'MAINTENANCE', 'none', '2016/11/11 03:18:34 am', 'maintenance', 1),
(20, 'security', 'security', 'Tulips.jpg', 'Male', '999999999', '99999999', 'hiuui', 'jujjun', 'SECURITY', 'none', '2016/11/12 01:35:48 am', 'security', 1),
(21, 'sales', 'sales', 'Penguins.jpg', 'Male', '999999999', '99999999', 'df', 'df', 'SALES', 'none', '2016/11/12 01:46:05 am', 'sales', 1),
(22, 'waste', 'waste', 'Lighthouse.jpg', 'Male', '999999999', '99999999', 'dfvf', 'fdfvd', 'WASTAGE', 'none', '2016/11/12 01:54:54 am', 'waste', 1),
(23, 'hr', 'hr', 'Penguins.jpg', '', '999999999', '99999999', 'ddf', 'dfv', 'HR', 'none', '2016/11/12 02:01:25 am', 'hr', 1),
(24, 'logistics', 'logistics', 'Penguins.jpg', '', '999999999', '99999999', 'dsfvfd', 'fddv', 'LOGISTICS', 'none', '2016/11/12 02:09:14 am', 'logistics', 1),
(25, 'purchase', 'purchase', '1.jpg', '', '9999999999', '9999999999', 'jkbbkj', 'jbk', 'PURCHASE', 'none', '2016/11/23 04:38:26 pm', 'purchase', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ringframe`
--

CREATE TABLE IF NOT EXISTS `ringframe` (
`id` int(56) NOT NULL,
  `supervisor` varchar(222) NOT NULL,
  `asm` varchar(222) NOT NULL,
  `maistry` varchar(222) NOT NULL,
  `date` date NOT NULL,
  `shift` varchar(222) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `lotno` varchar(222) NOT NULL,
  `mcno` varchar(222) NOT NULL,
  `mcnname` varchar(222) NOT NULL,
  `countcode` varchar(222) NOT NULL,
  `spdls` varchar(222) NOT NULL,
  `grms` varchar(222) NOT NULL,
  `hank` varchar(222) NOT NULL,
  `connstannt` varchar(222) NOT NULL,
  `empno1` varchar(222) NOT NULL,
  `empname1` varchar(222) NOT NULL,
  `spnd1` varchar(44) NOT NULL,
  `empno2` varchar(222) NOT NULL,
  `empname2` varchar(222) NOT NULL,
  `spnd2` varchar(44) NOT NULL,
  `empno3` varchar(222) NOT NULL,
  `empname3` varchar(222) NOT NULL,
  `spnd3` varchar(44) NOT NULL,
  `efficiency` varchar(222) NOT NULL,
  `reason` varchar(222) NOT NULL,
  `duration` varchar(222) NOT NULL,
  `totalduration` varchar(222) NOT NULL,
  `workedspdls` varchar(222) NOT NULL,
  `actualhanks` varchar(222) NOT NULL,
  `pneuwaste` varchar(222) NOT NULL,
  `dofftime` varchar(222) NOT NULL,
  `production` varchar(222) NOT NULL,
  `gps` varchar(222) NOT NULL,
  `shiftdurationm` varchar(222) NOT NULL,
  `roving waste` varchar(222) NOT NULL,
  `noofids` int(222) NOT NULL,
  `streason` varchar(55) NOT NULL,
  `stduration` varchar(55) NOT NULL,
  `datetime` varchar(66) NOT NULL,
  `module` varchar(77) NOT NULL,
  `countmaintain` varchar(44) NOT NULL,
  `stdkgs` varchar(44) NOT NULL,
  `actkgs` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `ringframe`
--

INSERT INTO `ringframe` (`id`, `supervisor`, `asm`, `maistry`, `date`, `shift`, `unit`, `lotno`, `mcno`, `mcnname`, `countcode`, `spdls`, `grms`, `hank`, `connstannt`, `empno1`, `empname1`, `spnd1`, `empno2`, `empname2`, `spnd2`, `empno3`, `empname3`, `spnd3`, `efficiency`, `reason`, `duration`, `totalduration`, `workedspdls`, `actualhanks`, `pneuwaste`, `dofftime`, `production`, `gps`, `shiftdurationm`, `roving waste`, `noofids`, `streason`, `stduration`, `datetime`, `module`, `countmaintain`, `stdkgs`, `actkgs`) VALUES
(31, 'G.SANTOSH KUMAR', '', 'MAHESWARA SAMAL', '2016-11-17', 'Day Shift', 'UNIT-1', '1', 'RF-12', '   TC5-1', '30KW', '   1440', '   175', '   13.5', '   20.9', '1', 'raju', '   1440', '', '', '', '', '', '', '   93', 'MAINTENANCE REPAIR', '4', '', '1429', '15', '1', '22', '313.5', '423', '   510', '', 0, '', '', '2016/11/18 11:58:05 am', 'Ring frame', '   30.5', '266', '296'),
(32, 'M.LAXMAIAH', '', 'BABUL DAS', '2016-11-17', 'Evening Shift', 'UNIT-1', '1', 'RF-07', '   KTTM240E', '20KW', '   1440', '   340', '   14', '   31.52', '1', 'raju', '   1440', '', '', '', '', '', '', '   98', 'ELECTRICAL REPAIR', '5', '', '1426', '18', '1', '5', '567.36', '291', '   510', '', 0, '', '', '2016/11/18 11:58:50 am', 'Ring frame', '   20', '416', '534'),
(33, 'R.SOMESHWAR RAO', '', 'TAPAN BANTHA', '2016-11-17', 'Night Shift', 'UNIT-1', '1', 'RF-27', '   RX300', '44KW', '   1440', '   95', '   10.05', '   13.8', '1', 'raju', '   1440', '', '', '', '', '', '', '   93', 'OTHERS', '10', '', '1406', '15', '1', '2', '207', '476', '   420', '', 0, '', '', '2016/11/18 11:59:40 am', 'Ring frame', '   46', '131', '195'),
(34, 'NARENDRA', '', 'SANJAY DALAL', '2016-11-17', 'Day Shift', 'UNIT-1', '1', 'RF-06', '   KTTM240E', '38KW', '   1440', '   120', '   10.5', '   16.62', '1', 'raju', '   1440', '', '', '', '', '', '', '   93', 'COUNT CHANGE', '4', '', '1429', '15', '1', '3', '249.3', '413', '   510', '', 0, '', '', '2016/11/18 12:18:06 pm', 'Ring frame', '   38', '165', '235'),
(35, 'M.LAXMAIAH', '', 'Y.NAGA RAJU', '2016-11-17', 'Evening Shift', 'UNIT-1', '1', 'RF-03', '   KTTM240E', '40CW', '   1440', '   135', '   10.5', '   16.12', '1', 'raju', '   1440', '', '', '', '', '', '', '   93', 'COUNT CHANGE', '3', '', '1432', '14', '1', '5', '225.68', '426', '   510', '', 0, '', '', '2016/11/18 12:18:47 pm', 'Ring frame', '   40', '160', '213'),
(36, 'RAJASHEKAR', '', 'SANJAY DALAL', '2016-11-17', 'Night Shift', 'UNIT-1', '1', 'RF-01', '   KTTM240E', '31KW', '   1440', '   175', '   13.5', '   21.2', '1', 'raju', '   1440', '', '', '', '', '', '', '   93', 'ELECTRICAL REPAIR', '11', '', '1403', '17', '1', '4', '360.4', '417', '   420', '', 0, '', '', '2016/11/18 12:19:32 pm', 'Ring frame', '   30.5', '270', '340'),
(37, 'P.BALAKRISHNA', '', 'ANKIREDDY', '2016-11-17', 'Day Shift', 'UNIT-1', '1', 'RF-13', '   TC5-1', '32KH', '   1440', '   165', '   11.5', '   20', '1', 'raju', '   1440', '', '', '', '', '', '', '   93', 'ELECTRICAL REPAIR', '2', '', '1435', '15', '1', '3', '300', '376', '   510', '', 0, '', '', '2016/11/18 12:56:41 pm', 'Ring frame', '   32', '217', '283'),
(38, 'Y.ACHTUTA RAO', '', 'Y.RAJU', '2016-11-17', 'Evening Shift', 'UNIT-1', '1', 'RF-01', '   KTTM240E', '40CW', '   1440', '   135', '   10.5', '   16.12', '1', 'raju', '   1440', '', '', '', '', '', '', '   93', 'HAND STORAGE', '6', '', '1424', '16', '1', '5', '257.92', '426', '   510', '', 0, '', '', '2016/11/18 12:57:23 pm', 'Ring frame', '   40', '160', '243'),
(39, 'SOMNATH', '', 'Y.NAGA RAJU', '2016-11-17', 'Night Shift', 'UNIT-1', '1', 'RF-06', '   KTTM240E', '38KW', '   1440', '   120', '   10.5', '   16.62', '1', 'raju', '   1440', '', '', '', '', '', '', '   93', 'please select-----', '0', '', '1440', '16', '1', '6', '265.92', '413', '   420', '', 0, '', '', '2016/11/18 12:58:14 pm', 'Ring frame', '   38', '165', '251'),
(40, 'please select-----', '', 'please select-----', '0000-00-00', 'select--------------', 'select--------------', 'please select-----', 'please select-----', '', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'GENERAL MAINTENANC', '4', '', '0', '', '0', '', '', '0', '', '', 0, '', '', '2016/11/18 01:36:04 pm', 'Ring frame', '', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ringframe1`
--

CREATE TABLE IF NOT EXISTS `ringframe1` (
`id` int(22) NOT NULL,
  `supervisor` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `rfno` varchar(222) NOT NULL,
  `empcode` varchar(222) NOT NULL,
  `count1` varchar(222) NOT NULL,
  `stdhanks` varchar(222) NOT NULL,
  `ir` varchar(222) NOT NULL,
  `fr` varchar(222) NOT NULL,
  `hanks` varchar(222) NOT NULL,
  `pnemaufil` varchar(222) NOT NULL,
  `runtime` varchar(222) NOT NULL,
  `dofftime` varchar(222) NOT NULL,
  `stopagereason` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `framesallotted` varchar(222) NOT NULL,
  `framesworked` varchar(222) NOT NULL,
  `stopagetime` varchar(222) NOT NULL,
  `u` varchar(222) NOT NULL,
  `production` varchar(222) NOT NULL,
  `gps` varchar(222) NOT NULL,
  `40sgps` varchar(222) NOT NULL,
  `waste` varchar(222) NOT NULL,
  `w` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ringframe1`
--

INSERT INTO `ringframe1` (`id`, `supervisor`, `date`, `shift`, `unit`, `rfno`, `empcode`, `count1`, `stdhanks`, `ir`, `fr`, `hanks`, `pnemaufil`, `runtime`, `dofftime`, `stopagereason`, `slno`, `count`, `framesallotted`, `framesworked`, `stopagetime`, `u`, `production`, `gps`, `40sgps`, `waste`, `w`, `datetime`) VALUES
(1, 'N B', 'Day Shift', '', '', ' BM', 'B N', ' BNB', '', '', '', '', '', '', '', '', '', 'BN', 'BB', '', '', '', '', '', '', '', '', '2016/09/12 03:50:51 pm'),
(2, 'RRRRRR', '2016-09-14', 'Day Shift', 'UNIT-1', 'RR', 'RR', 'RR', 'RR', 'RR', 'RR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/09/12 04:05:21 pm');

-- --------------------------------------------------------

--
-- Table structure for table `salaryadvances`
--

CREATE TABLE IF NOT EXISTS `salaryadvances` (
`id` int(44) NOT NULL,
  `date` varchar(222) NOT NULL,
  `empcode` varchar(222) NOT NULL,
  `empname` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `salaryadvances`
--

INSERT INTO `salaryadvances` (`id`, `date`, `empcode`, `empname`, `amount`, `remarks`) VALUES
(1, '2016-08-10', 'ere', 'ergr', '4445', 'fdvvdvfdvfvfvf'),
(2, '2016-08-10', 'ere', 'ergr', '55', 'dsvsdv');

-- --------------------------------------------------------

--
-- Table structure for table `salesagents`
--

CREATE TABLE IF NOT EXISTS `salesagents` (
`id` int(22) NOT NULL,
  `agentcode` varchar(222) NOT NULL,
  `agentname` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `commissionper` varchar(222) NOT NULL,
  `ledgerac` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `salesagents`
--

INSERT INTO `salesagents` (`id`, `agentcode`, `agentname`, `address`, `city`, `state`, `phone`, `commissionper`, `ledgerac`, `datetime`) VALUES
(2, 'A015', 'DEVIKA AGENCY', 'D.NO-6-11-60', 'GUNTUR', 'ANDHRA PRADESH', '0863-226270', '0', 'DEVIKA AGENCY A/C', '2016/11/17 04:07:25 am'),
(3, 'A002', 'LNGS PVT LTD', 'ROOM NO:1', 'MUMBAI', 'MAHARAST', '022-2201687', '1', 'LNGS PRIVATE LIMITED A/C', '2016/11/17 04:08:34 am'),
(4, 'A036', 'LOYAL TEXTILE DIRECT', '', '', '', '', '0', 'COMMISSION ON SALES A/C', '2016/11/17 04:09:24 am');

-- --------------------------------------------------------

--
-- Table structure for table `salesbagtypes`
--

CREATE TABLE IF NOT EXISTS `salesbagtypes` (
`id` int(22) NOT NULL,
  `bagtype` varchar(222) NOT NULL,
  `bagmodel` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `salesbagtypes`
--

INSERT INTO `salesbagtypes` (`id`, `bagtype`, `bagmodel`, `datetime`) VALUES
(1, '24*1.89', 'BAGS', '2016/11/04 04:01:32 am'),
(2, '32*1.89', 'BORAS', '2016/11/04 04:01:45 am'),
(3, '40*1.30', 'BAG', '2016/11/04 04:01:59 am'),
(4, '350*2.5', 'CARTONE', '2016/11/04 04:02:24 am'),
(5, '504*1.89', 'PALLET', '2016/11/04 04:02:37 am'),
(6, '12*1.89', 'CARTON & BAGS', '2016/11/17 04:20:53 am'),
(7, '300*2.5', '', '2016/11/17 04:21:13 am'),
(8, '18*2.5', '', '2016/11/17 04:21:23 am'),
(9, '12*3.5', '', '2016/11/17 04:21:30 am'),
(10, '24*2.00', '', '2016/11/17 04:21:40 am'),
(11, '12*3.8', '', '2016/11/17 04:21:51 am'),
(12, '12*3.3', '', '2016/11/17 04:21:59 am'),
(13, '12*2.9', '', '2016/11/17 04:22:08 am'),
(14, '12*3.72', '', '2016/11/17 04:22:14 am'),
(15, '24*1.667', '', '2016/11/17 04:22:24 am'),
(16, '24*1.77', '', '2016/11/17 04:22:31 am'),
(18, '18*2.668', '', '2016/11/17 04:22:54 am');

-- --------------------------------------------------------

--
-- Table structure for table `salesbuyers`
--

CREATE TABLE IF NOT EXISTS `salesbuyers` (
`id` int(22) NOT NULL,
  `nameofac` varchar(222) NOT NULL,
  `acalias` varchar(222) NOT NULL,
  `group` varchar(222) NOT NULL,
  `transactiontype` varchar(222) NOT NULL,
  `openingbalance` varchar(222) NOT NULL,
  `palce` varchar(222) NOT NULL,
  `regaddress` varchar(222) NOT NULL,
  `pincode` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `district` varchar(222) NOT NULL,
  `phoneno` varchar(222) NOT NULL,
  `faxno` varchar(222) NOT NULL,
  `emailid` varchar(222) NOT NULL,
  `tinno` varchar(222) NOT NULL,
  `branchaddress` varchar(222) NOT NULL,
  `rcno` varchar(222) NOT NULL,
  `cstno` varchar(222) NOT NULL,
  `totno` varchar(222) NOT NULL,
  `panno` varchar(222) NOT NULL,
  `qty` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `salesbuyers`
--

INSERT INTO `salesbuyers` (`id`, `nameofac`, `acalias`, `group`, `transactiontype`, `openingbalance`, `palce`, `regaddress`, `pincode`, `country`, `state`, `district`, `phoneno`, `faxno`, `emailid`, `tinno`, `branchaddress`, `rcno`, `cstno`, `totno`, `panno`, `qty`, `datetime`) VALUES
(1, 'ramu', '', 'assfa', '', '11111111111111111', '', '', '', '', '', '', '0000000000000', '', '', '', '', '', '', '', 'wedseaasdqfdw', '', '2016/11/01 03:50:17 am');

-- --------------------------------------------------------

--
-- Table structure for table `salescounts`
--

CREATE TABLE IF NOT EXISTS `salescounts` (
`id` int(22) NOT NULL,
  `countnumber` varchar(222) NOT NULL,
  `counttype` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `salescounts`
--

INSERT INTO `salescounts` (`id`, `countnumber`, `counttype`, `datetime`) VALUES
(2, '40/1', 'COMBED HOSIERY', '2016/11/04 03:58:22 am'),
(3, '44/1', 'SEMI COMBED HOSIERY', '2016/11/04 03:58:44 am'),
(4, '36/1', 'COMBED WARP ORGANIC', '2016/11/04 03:59:08 am'),
(5, '32/1', 'SEMI COMBED WARP', '2016/11/04 03:59:25 am'),
(6, '38/1', 'KARDED HOSIERY', '2016/11/04 03:59:42 am'),
(7, '31/1', 'KARDED WARP', '2016/11/04 04:00:10 am'),
(8, '30/1', 'COMBED WARP(B.C.I)', '2016/11/04 04:00:28 am'),
(9, '21/1', 'KARDED WARP(B.C.I)', '2016/11/04 04:00:53 am'),
(10, '24/1', 'COMBED WARP', '2016/11/17 04:17:29 am'),
(11, '41/1', 'KARDED WARP COMPACT', '2016/11/17 04:18:00 am'),
(12, '20/1', 'COMBED WARP COMPACT', '2016/11/17 04:18:18 am'),
(13, '14/1', 'COMBED WARP COMPACT BCI', '2016/11/17 04:18:57 am'),
(14, '10/1', '', '2016/11/17 04:19:11 am'),
(15, '12/1', '', '2016/11/17 04:19:18 am'),
(16, '16/1', '', '2016/11/17 04:19:23 am'),
(17, '42/1', '', '2016/11/17 04:19:28 am'),
(18, '30/2', '', '2016/11/17 04:19:34 am'),
(19, '34/1', '', '2016/11/17 04:19:39 am');

-- --------------------------------------------------------

--
-- Table structure for table `salesformtype`
--

CREATE TABLE IF NOT EXISTS `salesformtype` (
`id` int(22) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `formtype` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `salesformtype`
--

INSERT INTO `salesformtype` (`id`, `slno`, `formtype`, `datetime`) VALUES
(1, '1', '"C" FORM UNDER "E1" SALE', '2016/11/04 04:04:18 am'),
(2, '2', '"C" FORM', '2016/11/04 04:04:29 am'),
(3, '3', '"H" FORM', '2016/11/04 04:04:38 am');

-- --------------------------------------------------------

--
-- Table structure for table `salesinvoiceentry`
--

CREATE TABLE IF NOT EXISTS `salesinvoiceentry` (
`id` int(22) NOT NULL,
  `f1` varchar(22) NOT NULL,
  `f2` varchar(22) NOT NULL,
  `f3` varchar(22) NOT NULL,
  `f4` varchar(22) NOT NULL,
  `f5` varchar(22) NOT NULL,
  `f6` varchar(22) NOT NULL,
  `f7` varchar(22) NOT NULL,
  `f8` varchar(22) NOT NULL,
  `f9` varchar(22) NOT NULL,
  `f10` varchar(22) NOT NULL,
  `f11` varchar(22) NOT NULL,
  `f12` varchar(22) NOT NULL,
  `f13` varchar(22) NOT NULL,
  `f14` varchar(22) NOT NULL,
  `f15` varchar(22) NOT NULL,
  `f16` varchar(22) NOT NULL,
  `f17` varchar(22) NOT NULL,
  `f18` varchar(22) NOT NULL,
  `f19` varchar(22) NOT NULL,
  `f120` varchar(22) NOT NULL,
  `f121` varchar(22) NOT NULL,
  `f122` varchar(22) NOT NULL,
  `f123` int(22) NOT NULL,
  `f124` int(22) NOT NULL,
  `f125` int(22) NOT NULL,
  `f126` int(22) NOT NULL,
  `f127` int(22) NOT NULL,
  `f128` int(22) NOT NULL,
  `f129` int(22) NOT NULL,
  `f130` int(22) NOT NULL,
  `f131` int(22) NOT NULL,
  `f132` int(22) NOT NULL,
  `f133` int(22) NOT NULL,
  `f134` int(22) NOT NULL,
  `f135` int(22) NOT NULL,
  `f136` int(22) NOT NULL,
  `f137` int(22) NOT NULL,
  `f138` int(22) NOT NULL,
  `f139` int(22) NOT NULL,
  `f140` int(22) NOT NULL,
  `f141` int(22) NOT NULL,
  `f142` int(22) NOT NULL,
  `f143` int(22) NOT NULL,
  `f144` int(22) NOT NULL,
  `f145` int(22) NOT NULL,
  `f146` int(22) NOT NULL,
  `f147` int(22) NOT NULL,
  `f148` int(22) NOT NULL,
  `f149` int(22) NOT NULL,
  `f150` int(22) NOT NULL,
  `f151` int(22) NOT NULL,
  `f152` int(22) NOT NULL,
  `f153` int(22) NOT NULL,
  `f154` int(22) NOT NULL,
  `f155` int(22) NOT NULL,
  `f156` int(22) NOT NULL,
  `f157` int(22) NOT NULL,
  `f158` int(22) NOT NULL,
  `f159` int(22) NOT NULL,
  `f160` int(22) NOT NULL,
  `f161` int(22) NOT NULL,
  `f162` int(22) NOT NULL,
  `f163` int(22) NOT NULL,
  `f164` int(22) NOT NULL,
  `f165` int(22) NOT NULL,
  `f166` varchar(22) NOT NULL,
  `f167` varchar(22) NOT NULL,
  `f168` varchar(22) NOT NULL,
  `f169` int(22) NOT NULL,
  `f170` int(22) NOT NULL,
  `f171` int(22) NOT NULL,
  `f172` int(22) NOT NULL,
  `f173` int(22) NOT NULL,
  `f174` int(22) NOT NULL,
  `f175` int(22) NOT NULL,
  `f176` int(22) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `salesinvoiceentry`
--

INSERT INTO `salesinvoiceentry` (`id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`, `f10`, `f11`, `f12`, `f13`, `f14`, `f15`, `f16`, `f17`, `f18`, `f19`, `f120`, `f121`, `f122`, `f123`, `f124`, `f125`, `f126`, `f127`, `f128`, `f129`, `f130`, `f131`, `f132`, `f133`, `f134`, `f135`, `f136`, `f137`, `f138`, `f139`, `f140`, `f141`, `f142`, `f143`, `f144`, `f145`, `f146`, `f147`, `f148`, `f149`, `f150`, `f151`, `f152`, `f153`, `f154`, `f155`, `f156`, `f157`, `f158`, `f159`, `f160`, `f161`, `f162`, `f163`, `f164`, `f165`, `f166`, `f167`, `f168`, `f169`, `f170`, `f171`, `f172`, `f173`, `f174`, `f175`, `f176`) VALUES
(1, 'we43344', 'select--------------', 'select--------------', 'select--------------', 'select--------------', 'select--------------', '', '', '', '', '', '', 'please select-----', '', '', '', '', '', '', '', '', '', 43, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 22, 2, ' 2', ' 2', ' 2', 2, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `salesinvoicemaster`
--

CREATE TABLE IF NOT EXISTS `salesinvoicemaster` (
`id` int(222) NOT NULL,
  `invoicetype` varchar(222) NOT NULL,
  `saveinaccounts` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `salesinvoicemaster`
--

INSERT INTO `salesinvoicemaster` (`id`, `invoicetype`, `saveinaccounts`, `datetime`) VALUES
(2, 'TAX INVOICE', 'YES', '2016/11/04 04:03:13 am'),
(3, 'PROFARMA INVOICE', 'NO', '2016/11/04 04:03:31 am'),
(4, 'INVOICE', 'YES', '2016/11/04 04:03:40 am'),
(5, 'RETURN SALES', 'YES', '2016/11/04 04:03:50 am');

-- --------------------------------------------------------

--
-- Table structure for table `salesinvoicentry`
--

CREATE TABLE IF NOT EXISTS `salesinvoicentry` (
`id` int(222) NOT NULL,
  `invno` varchar(222) NOT NULL,
  `invtype` varchar(222) NOT NULL,
  `exportinv` varchar(222) NOT NULL,
  `exportinvtype` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `finalprovosional` varchar(222) NOT NULL,
  `invissuedate` varchar(222) NOT NULL,
  `invissuetime` varchar(222) NOT NULL,
  `goodsdate` varchar(222) NOT NULL,
  `goodstime` varchar(222) NOT NULL,
  `duedaysdate` varchar(222) NOT NULL,
  `duedaystime` varchar(222) NOT NULL,
  `buyername` varchar(222) NOT NULL,
  `vatno` varchar(222) NOT NULL,
  `otherthanconsignee` varchar(222) NOT NULL,
  `agent` varchar(222) NOT NULL,
  `purorder` varchar(222) NOT NULL,
  `modeoftransport` varchar(222) NOT NULL,
  `vehicleregno` varchar(222) NOT NULL,
  `containerno` varchar(222) NOT NULL,
  `salecontactno` varchar(222) NOT NULL,
  `salecontactdate` varchar(222) NOT NULL,
  `loading` varchar(222) NOT NULL,
  `loadingg` varchar(222) NOT NULL,
  `shippingmark` varchar(222) NOT NULL,
  `despatchedto` varchar(222) NOT NULL,
  `finaldestination` varchar(222) NOT NULL,
  `termsofdelivery` varchar(222) NOT NULL,
  `currency` varchar(222) NOT NULL,
  `currencyy` varchar(222) NOT NULL,
  `otlno` varchar(222) NOT NULL,
  `exrangeno` varchar(222) NOT NULL,
  `waybillno` varchar(222) NOT NULL,
  `waybillnoo` varchar(222) NOT NULL,
  `lrno` varchar(222) NOT NULL,
  `lrnoo` varchar(222) NOT NULL,
  `areano` varchar(222) NOT NULL,
  `areanoo` varchar(222) NOT NULL,
  `frightno` varchar(222) NOT NULL,
  `conversionrate` varchar(222) NOT NULL,
  `conversionratedate` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `verity` varchar(222) NOT NULL,
  `sizecount` varchar(222) NOT NULL,
  `itemdesc` varchar(222) NOT NULL,
  `acname` varchar(222) NOT NULL,
  `typeofpack` varchar(222) NOT NULL,
  `lotnocomm` varchar(222) NOT NULL,
  `bagfrom` varchar(222) NOT NULL,
  `bagto` varchar(222) NOT NULL,
  `bagtype` varchar(222) NOT NULL,
  `bagsize` varchar(222) NOT NULL,
  `units` varchar(222) NOT NULL,
  `unittobeconverted` varchar(222) NOT NULL,
  `unittobeconvertedd` varchar(222) NOT NULL,
  `nos` varchar(222) NOT NULL,
  `grosswt` varchar(222) NOT NULL,
  `tarewt` varchar(222) NOT NULL,
  `netwt` varchar(222) NOT NULL,
  `exmill` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `totunitval` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `discountchecked` varchar(222) NOT NULL,
  `discountper` varchar(222) NOT NULL,
  `discountval` varchar(222) NOT NULL,
  `insurancechecked` varchar(222) NOT NULL,
  `insuranceper` varchar(222) NOT NULL,
  `insuranceval` varchar(222) NOT NULL,
  `pfchecked` varchar(222) NOT NULL,
  `pfper` varchar(222) NOT NULL,
  `pfval` varchar(222) NOT NULL,
  `frightchecked` varchar(222) NOT NULL,
  `frightper` varchar(222) NOT NULL,
  `frightval` varchar(222) NOT NULL,
  `courierchecked` varchar(222) NOT NULL,
  `courierper` varchar(222) NOT NULL,
  `courierval` varchar(222) NOT NULL,
  `bedchecked` varchar(222) NOT NULL,
  `bedper` varchar(222) NOT NULL,
  `bedval` varchar(222) NOT NULL,
  `aedchecked` varchar(222) NOT NULL,
  `aedper` varchar(222) NOT NULL,
  `aedval` varchar(222) NOT NULL,
  `cesschecked` varchar(222) NOT NULL,
  `cessper` varchar(222) NOT NULL,
  `cessval` varchar(222) NOT NULL,
  `vatchecked` varchar(222) NOT NULL,
  `vatper` varchar(222) NOT NULL,
  `vatval` varchar(222) NOT NULL,
  `cstchecked` varchar(222) NOT NULL,
  `cstper` varchar(222) NOT NULL,
  `cstval` varchar(222) NOT NULL,
  `epcgchecked` varchar(222) NOT NULL,
  `epcgper` varchar(222) NOT NULL,
  `epcgval` varchar(222) NOT NULL,
  `otherschecked` varchar(222) NOT NULL,
  `othersper` varchar(222) NOT NULL,
  `othersval` varchar(222) NOT NULL,
  `mislaniuschecked` varchar(222) NOT NULL,
  `mislaniusper` varchar(222) NOT NULL,
  `mislaniusval` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `salesinvoicentry`
--

INSERT INTO `salesinvoicentry` (`id`, `invno`, `invtype`, `exportinv`, `exportinvtype`, `state`, `finalprovosional`, `invissuedate`, `invissuetime`, `goodsdate`, `goodstime`, `duedaysdate`, `duedaystime`, `buyername`, `vatno`, `otherthanconsignee`, `agent`, `purorder`, `modeoftransport`, `vehicleregno`, `containerno`, `salecontactno`, `salecontactdate`, `loading`, `loadingg`, `shippingmark`, `despatchedto`, `finaldestination`, `termsofdelivery`, `currency`, `currencyy`, `otlno`, `exrangeno`, `waybillno`, `waybillnoo`, `lrno`, `lrnoo`, `areano`, `areanoo`, `frightno`, `conversionrate`, `conversionratedate`, `itemname`, `verity`, `sizecount`, `itemdesc`, `acname`, `typeofpack`, `lotnocomm`, `bagfrom`, `bagto`, `bagtype`, `bagsize`, `units`, `unittobeconverted`, `unittobeconvertedd`, `nos`, `grosswt`, `tarewt`, `netwt`, `exmill`, `rate`, `totunitval`, `amount`, `discountchecked`, `discountper`, `discountval`, `insurancechecked`, `insuranceper`, `insuranceval`, `pfchecked`, `pfper`, `pfval`, `frightchecked`, `frightper`, `frightval`, `courierchecked`, `courierper`, `courierval`, `bedchecked`, `bedper`, `bedval`, `aedchecked`, `aedper`, `aedval`, `cesschecked`, `cessper`, `cessval`, `vatchecked`, `vatper`, `vatval`, `cstchecked`, `cstper`, `cstval`, `epcgchecked`, `epcgper`, `epcgval`, `otherschecked`, `othersper`, `othersval`, `mislaniuschecked`, `mislaniusper`, `mislaniusval`, `datetime`) VALUES
(4, ' CY 772', 'select--------------', 'select--------------', 'select--------------', 'select--------------', 'select--------------', '2016-11-03', '', '', '', '', '', 'please select-----', '', '', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', '', '', '', '', '', '', '', '', '', 'please select-----', 'please select-----', 'please select-----', 'please select-----', 'VISHAL TEXTILE CORPORATION ICHALKARANJI', 'select--------------', '', '1', '100', 'please select-----', '', 'kgs', '', '', '4800', '', '', '', '', '10', '', '48000', '', '', '', 'checked', '', '', '', '', '', 'checked', '', '2000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'checked', '', '1001', '', '', '', '', '', '', '', '', '', '2016/11/03 11:30:48 pm'),
(5, '123', 'please select-----', 'select--------------', 'select--------------', 'select--------------', 'select--------------', '', '', '', '', '', '', 'please select-----', '', '', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', '', '', '', '', '', '', '', '', '', 'WASTE-COTTON', '10/1 KARDED WARP', '44/1 KW', 'CY', '', 'select--------------', '', '', '', 'please select-----', '', 'kgs', '', '', '1200', '', '', '', '', '12', '', '23323232', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/11/05 11:37:11 pm'),
(6, '123', 'please select-----', 'select--------------', 'select--------------', 'select--------------', 'select--------------', '2016-11-05', '', '', '', '', '', 'please select-----', '', '', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', '', '', '', '', '', '', '', '', '', 'CONE YARN', '10/1 KARDED WARP', '44/1 KW', 'please select-----', '', 'select--------------', '', '', '', 'please select-----', '', 'kgs', '', '', '1200', '', '', '', '', '12', '', '12312332', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/11/05 11:38:58 pm'),
(7, '772', 'TAX INVOICE', 'select--------------', 'select--------------', 'select--------------', 'select--------------', '2016-11-05', '17:55', '2016-11-05', '20:01', '', '', 'raasfasf', '27250285718', '', 'hgghhbj', '', 'DHAHAHAHA', 'ddddddddddddd', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', 'xxxxx', '', 'xxxxx', '', '', '', '', '', '', 'COTTON-LINT', '10/1 KARDED WARP', '44/1 KW', 'CY', 'jyothirmail', 'select--------------', '', '1', '100', '24*1.89', '', 'kgs', '', '', '', '5000.00', '', '4800', '', '10', '', '4800', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1001', '', '', '', '', '', '2000', '', '', '', '2016/11/06 05:23:08 am'),
(8, '', 'please select-----', 'select--------------', 'select--------------', 'select--------------', 'select--------------', '', '', '', '', '', '', 'please select-----', '', '', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', '', '', '', '', '', '', '', '', '', 'please select-----', 'please select-----', 'please select-----', 'please select-----', '', 'select--------------', '', '', '', 'please select-----', '', 'select--------------', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/11/16 12:45:13 pm'),
(9, '', 'please select-----', 'select--------------', 'select--------------', 'select--------------', 'select--------------', '', '', '', '', '', '', 'please select-----', '', '', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', '', '', '', '', '', '', '', '', '', 'please select-----', 'please select-----', 'please select-----', 'please select-----', '', 'select--------------', '', '', '', 'please select-----', '', 'select--------------', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/11/19 12:06:01 am');

-- --------------------------------------------------------

--
-- Table structure for table `salesitemmaster`
--

CREATE TABLE IF NOT EXISTS `salesitemmaster` (
`id` int(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `itemcode` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `salesitemmaster`
--

INSERT INTO `salesitemmaster` (`id`, `itemname`, `itemcode`, `slno`, `datetime`) VALUES
(1, 'CONE YARN', 'CY', '1', '2016/11/04 04:05:06 am'),
(2, 'WASTE-COTTON', 'WC', '2', '2016/11/04 04:05:17 am'),
(3, 'HANK YARN', 'HY', '3', '2016/11/04 04:05:31 am'),
(4, 'COTTON-LINT', 'CL', '4', '2016/11/04 04:05:45 am');

-- --------------------------------------------------------

--
-- Table structure for table `salessizecountmaster`
--

CREATE TABLE IF NOT EXISTS `salessizecountmaster` (
`id` int(22) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `itemcode` varchar(222) NOT NULL,
  `verity` varchar(222) NOT NULL,
  `veritycode` varchar(222) NOT NULL,
  `sizecount` varchar(222) NOT NULL,
  `sizecountcode` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `salessizecountmaster`
--

INSERT INTO `salessizecountmaster` (`id`, `itemname`, `itemcode`, `verity`, `veritycode`, `sizecount`, `sizecountcode`, `slno`, `datetime`) VALUES
(1, 'CONE YARN', 'CY', '44/1 KARDED WARP', '44/1 KW', '44/1 KW', '44/1 KW', '1', '2016/11/04 04:09:23 am'),
(2, 'CONE YARN', 'CY', '40/1 COMBED HOSIERY', '40/1 CH', '40/1 CH', '40/1 CH', '2', '2016/11/04 04:10:03 am'),
(3, 'CONE YARN', 'CY', '40/1 KARDED HOSIERY', '40/1 KH', '40/1 KH', '40/1 KH', '3', '2016/11/04 04:10:47 am'),
(4, 'CONE YARN', 'CY', '32/1 KARDED WARP', '32/1 KW', '32/1 KW', '32/1 KW', '4', '2016/11/15 02:02:24 am'),
(5, 'CONE YARN', 'CY', '38/1 KARDED WARP', '38/1 KW', '38/1 KW', '38/1 KW', '5', '2016/11/15 02:04:22 am'),
(6, 'CONE YARN', 'CY', '31/1 KARDED WARP', '31/1 KW', '31/1 KW', '31/1 KW', '6', '2016/11/15 02:05:35 am'),
(7, 'CONE YARN', 'CY', '30/1 KARDED WARP', '30/1 KW', '30/1 KW', '30/1 KW', '7', '2016/11/15 02:07:15 am'),
(8, 'CONE YARN', 'CY', '16/1 KARDED WARP', '16/1 KW', '16/1 KW', '16/1 KW', '8', '2016/11/15 02:08:39 am'),
(9, 'CONE YARN', 'CY', '17/1 KARDED WARP', '17/1 KW', '17/1 KW', '17/1 KW', '9', '2016/11/15 02:09:50 am'),
(10, 'CONE YARN', 'CY', '21/1 KARDED WARP', '21/1 KW', '21/1 KW', '21/1 KW', '10', '2016/11/15 02:11:16 am'),
(11, 'CONE YARN', 'CY', '13/1 KARDED WARP', '13/1 KW', '13/1 KW', '13/1 KW', '11', '2016/11/15 02:12:38 am'),
(12, 'CONE YARN', 'CY', '24/1 KARDED WARP', '24/1 KW', '24/1 KW', '24/1 KW', '12', '2016/11/15 02:13:55 am'),
(13, 'CONE YARN', 'CY', '41/1 KARDED WARP', '41/1 KW', '41/1 KW', '41/1 KW', '13', '2016/11/15 02:15:13 am'),
(14, 'CONE YARN', 'CY', '20/1 KARDED WARP', '20/1 KW', '20/1 KW', '20/1 KW', '14', '2016/11/15 02:16:22 am'),
(15, 'CONE YARN', 'CY', '14/1 KARDED WARP', '14/1 KW', '14/1 KW', '14/1 KW', '15', '2016/11/15 02:17:37 am'),
(16, 'CONE YARN', 'CY', '20/1 KARDED HOSIERY', '20/1 KH', '20/1 KH', '20/1 KH', '16', '2016/11/15 02:18:37 am'),
(17, 'CONE YARN', 'CY', '10/1 KARDED WARP', '10/1 KW', '10/1 KW', '10/1 KW', '17', '2016/11/15 02:19:44 am'),
(18, 'CONE YARN', 'CY', '12/1 KARDED WARP', '12/1 KW', '12/1 KW', '12/1 KW', '18', '2016/11/16 11:11:46 pm'),
(19, 'CONE YARN', 'CY', '21/1 KARDED HOSIERY', '21/1 KH', '21/1 KH', '21/1 KH', '19', '2016/11/16 11:12:33 pm'),
(20, 'CONE YARN', 'CY', '30/1 COMBED WARP ', '30/1 CW', '30/1 CW', '30/1 CW', '20', '2016/11/16 11:13:29 pm'),
(21, 'CONE YARN', 'CY', '20/1 COMBED WARP', '20/1 CW', '20/1 CW', '20/1 CW', '21', '2016/11/16 11:14:18 pm'),
(22, 'CONE YARN', 'CY', '42/1 COMBED WARP', '42/1 CW', '42/1 CW', '42/1 CW', '22', '2016/11/16 11:14:57 pm'),
(23, 'CONE YARN', 'CY', '32/1 COMBED WARP', '32/1 CW', '32/1 CW', '32/1 CW', '23', '2016/11/16 11:15:34 pm'),
(24, 'CONE YARN', 'CY', '40/1 COMBED WARP', '40/1 CW', '40/1 CW', '40/1 CW', '24', '2016/11/16 11:16:12 pm'),
(25, 'CONE YARN', 'CY', '30/2 KAEDED WARD', '30/2 KW', '30/2 KW', '30/2 KW', '25', '2016/11/16 11:17:16 pm'),
(26, 'CONE YARN', 'CY', '34/1 COMBED HOSIERY', '34/1 CH', '34/1 CH', '34/1 CH', '26', '2016/11/16 11:18:16 pm'),
(27, 'CONE YARN', 'CY', '41/1 COMBED WARP', '41/1 CW', '41/1 CW', '41/1 CW', '27', '2016/11/16 11:19:03 pm'),
(28, 'CONE YARN', 'CY', '30/1 SEMI COMBED HOSIERY', '30/1 SCH', '30/1 SCH', '30/1 SCH', '28', '2016/11/16 11:19:55 pm'),
(29, 'CONE YARN', 'CY', '30/1 SEMI COMBED WARP', '30/1 SCW', '30/1 SCW', '30/1 SCW', '29', '2016/11/16 11:20:45 pm'),
(30, 'CONE YARN', 'CY', '12.75/1 KARDED WARP', '12.75/1 KW', '12.75/1 KW', '12.75/1 KW', '30', '2016/11/16 11:21:19 pm'),
(31, 'CONE YARN', 'CY', '12/1 SEMI COMBED WARP', '12/1 SCW', '12/1 SCW', '12/1 SCW', '31', '2016/11/16 11:21:58 pm'),
(32, 'CONE YARN', 'CY', '32/1 COMBED WARP (B.C.I)', '32/1 CW (B.C.I)', '32/1 CW (B.C.I)', '32/1 CW (B.C.I)', '32', '2016/11/16 11:22:36 pm');

-- --------------------------------------------------------

--
-- Table structure for table `salesverity`
--

CREATE TABLE IF NOT EXISTS `salesverity` (
`id` int(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `itemcode` varchar(222) NOT NULL,
  `verity` varchar(222) NOT NULL,
  `veritycode` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `salesverity`
--

INSERT INTO `salesverity` (`id`, `itemname`, `itemcode`, `verity`, `veritycode`, `slno`, `datetime`) VALUES
(1, 'CONE YARN', 'CY', '10/1 KARDED WARP', '10/1 KW', '1', '2016/11/04 04:06:26 am'),
(2, 'CONE YARN', 'CY', '21/1 KARDED HOSIERY', '21/1 KH', '2', '2016/11/04 04:07:02 am'),
(3, 'CONE YARN', 'CY', '30/1 COMBED WARP', '30/1 CW', '3', '2016/11/04 04:07:39 am'),
(4, 'CONE YARN', 'CY', '20/1 COMBED WARP', '20/1 CW', '4', '2016/11/04 04:08:19 am'),
(5, 'CONE YARN', 'CY', '42/1 COMBED WARP', '42/1 CW', '5', '2016/11/15 01:40:51 am'),
(6, 'CONE YARN', 'CY', '32/1 COMBED WARP', '32/1 CW', '6', '2016/11/15 01:41:54 am'),
(7, 'CONE YARN', 'CY', '44/1 KARDED WARP', '44/1 KW', '7', '2016/11/15 01:43:36 am'),
(8, 'CONE YARN', 'CY', '40/1 COMBED HOSIERY', '40/1 CH', '8', '2016/11/15 01:44:50 am'),
(9, 'CONE YARN', 'CY', '40/1 KARDED WARP', '40/1 KW', '9', '2016/11/15 01:45:59 am'),
(10, 'CONE YARN', 'CY', '40/1 KORDED HOSIERY', '40/1 KH', '10', '2016/11/15 01:47:32 am'),
(11, 'CONE YARN', 'CY', '32/1 KARDED WARP', '32/1 KW', '11', '2016/11/15 01:48:53 am'),
(12, 'CONE YARN', 'CY', '32/1 KARDED HOSIERY', '32/1 KH', '12', '2016/11/15 01:49:51 am'),
(13, 'CONE YARN', 'CY', '40/1 COMBED WARP', '40/1 CW', '13', '2016/11/15 01:51:17 am'),
(14, 'CONE YARN', 'CY', '38/1 KARDED WARP', '38/1 KW', '14', '2016/11/15 01:52:07 am'),
(15, 'CONE YARN', 'CY', '31/1 KARDED WARP', '31/1 KW', '15', '2016/11/15 01:52:45 am'),
(16, 'CONE YARN', 'CY', '30/1 KARDED WARP', '30/1 KW', '16', '2016/11/15 01:53:47 am'),
(17, 'CONE YARN', 'CY', '13/1 KARDED WARP', '13/1 KW', '17', '2016/11/15 01:54:53 am'),
(18, 'WASTE COTTON', 'WC', 'COMBER NOIL', 'CN', '18', '2016/11/16 09:52:30 pm'),
(19, 'WASTE COTTON', 'WC', 'UPPER CARD', 'UC', '19', '2016/11/16 09:53:05 pm'),
(20, 'WASTE COTTON', 'WC', 'LOWER CARD', 'LC', '20', '2016/11/16 09:53:33 pm'),
(21, 'WASTE COTTON', 'WC', 'PICKING WASTE', 'PW', '21', '2016/11/16 09:54:13 pm'),
(22, 'WASTE COTTON', 'WC', 'PLANT WASTE', 'PLW', '22', '2016/11/16 09:54:36 pm'),
(23, 'HANK YARN', 'HY', '40/1 HANK YARN', 'HY', '23', '2016/11/16 09:55:19 pm'),
(24, 'WASTE COTTON', 'WC', 'SWEEPING WASTE', 'SW', '24', '2016/11/16 09:55:51 pm'),
(25, 'WASTE COTTON', 'WC', 'ROVING WASTE', 'RW', '25', '2016/11/16 09:56:27 pm'),
(26, 'WASTE COTTON', 'WC', 'HARD WASTE', 'HW', '26', '2016/11/16 09:56:51 pm'),
(27, 'COTTON LINT', 'CL', 'COTTON LINT', 'CL', '27', '2016/11/16 09:57:39 pm'),
(28, 'WASTE COTTON', 'WC', 'BLOW ROOM DROP', 'BD', '28', '2016/11/16 09:58:12 pm'),
(29, 'CONE YARN', 'CY', '17/1 KARDED WARP', '17/1 KW', '29', '2016/11/16 09:59:10 pm'),
(30, 'CONE YARN', 'CY', '21/1 KARDED WARP', '21/1 KW', '30', '2016/11/16 09:59:53 pm'),
(31, 'CONE YARN', 'CY', '24/1 KARDED WARP', '24/1 KW', '31', '2016/11/16 10:00:41 pm'),
(32, 'CONE YARN', 'CY', '41/1 KARDED WARP', '41/1 KW', '32', '2016/11/16 10:01:22 pm'),
(33, 'CONE YARN', 'CY', '20/1 KARDED WAR0', '20/1 KW', '33', '2016/11/16 10:02:16 pm'),
(34, 'CONE YARNC', 'CY', '20/1 KARDED WAR0', '20/1 KW', '34', '2016/11/16 10:06:34 pm'),
(35, 'CONE YARN', 'CY', '14/1 KARDED', '14/1', '35', '2016/11/16 10:07:26 pm'),
(36, 'CONE YARN', 'CY', '12/1 KARDED WARP', '12/1 KW', '36', '2016/11/16 10:08:08 pm'),
(37, 'CONE YARN', 'CY', '16/1 KARDED WAR0', '16/1 KW', '37', '2016/11/16 10:08:54 pm'),
(38, 'CONE YARN', 'CY', '30/2 KARDED WAR0', '30/2 KW', '38', '2016/11/16 10:09:35 pm'),
(39, 'CONE YARN', 'CY', '34/1 COMBED HOSIERY', '34/1 COMBED HOSIERY', '39', '2016/11/16 10:11:22 pm'),
(40, 'CONE YARN', 'CY', '41/1 COMBED WARP', '41/1 CW', '40', '2016/11/16 10:12:27 pm'),
(41, 'CONE YARN', 'CY', '30/1 SEMI COMBED HOSIERY', '30/1 SCH', '41', '2016/11/16 10:13:25 pm'),
(42, 'CONE YARN', 'CY', '30/1 SEMI COMBED WARP', '30/1 SCW', '42', '2016/11/16 10:14:22 pm'),
(43, 'CONE YARN', 'CY', '12.75/1 KARDED WARP', '12.75/1 KW', '43', '2016/11/16 10:15:18 pm'),
(44, 'CONE YARN', 'CY', '12/1 SEMI COMBED WARP', '12/1 SCW', '44', '2016/11/16 10:16:26 pm'),
(45, 'CONE YARN', 'CY', '32/1 COMBED WARP (B.C.I)', '32/1 CW (B.C.I)', '45', '2016/11/16 10:18:05 pm'),
(46, 'CONE YARN', 'CY', '21/1 COMBED WARP(ORGANIC)', '21/1 CW(ORGANIC) ', '46', '2016/11/16 10:19:28 pm'),
(47, 'CONE YARN', 'CY', '20/1 COMBED WARP(ORGANIC)', '20/1 CW(ORGANIC) ', '47', '2016/11/16 10:20:54 pm'),
(48, 'CONE YARN', 'CY', '10/1 KARDED WARP(B.C.I)', '10/1 KW(B.C.I)', '48', '2016/11/16 10:22:13 pm'),
(49, 'CONE YARN', 'CY', '20/2 KARDED WAR0', '20/2 KW', '49', '2016/11/16 10:22:58 pm'),
(50, 'CONE YARN', 'CY', '30/2 COMBED WAR0', '30/2 CW', '50', '2016/11/16 10:23:54 pm'),
(51, 'CONE YARN', 'CY', '40/1 KARDED WARP COMPACT', '40/1', '51', '2016/11/16 10:25:46 pm'),
(52, 'CONE YARN', 'CY', '24/1 COMBED WARP', '24/1 CW', '52', '2016/11/16 10:27:25 pm'),
(53, 'CONE YARN', 'CY', '42/1 COMBED WARP COMPACT', '42/1 CWC', '53', '2016/11/16 10:28:42 pm'),
(54, 'CONE YARN', 'CY', '30/1 COMBED WARP COMPACT', '30/1 CWC', '54', '2016/11/16 10:29:44 pm'),
(55, 'CONE YARN', 'CY', '40/1 COMBED WARP COMPACT', '40/1 CWC', '55', '2016/11/16 10:30:32 pm'),
(56, 'CONE YARN', 'CY', '40/1 COMBED WARP COMPACT BCI', '40/1 CWC BCI', '56', '2016/11/16 10:31:29 pm'),
(57, 'CONE YARN', 'CY', '40/1 COMBED WARP BCI', '40/1 CW BCI', '57', '2016/11/16 10:32:34 pm'),
(58, 'CONE YARN', 'CY', '30/2 COMBED WARP BCI', '30/2 CW BCI', '58', '2016/11/16 10:33:36 pm'),
(59, 'CONE YARN', 'CY', '15/1 KARDED WARP BCI', '15/1 KW BCI', '59', '2016/11/16 10:34:29 pm'),
(60, 'CONE YARN', 'CY', '32/2 COMBED WARP', '32/2 CW', '60', '2016/11/16 10:35:15 pm'),
(61, 'CONE YARN', 'CY', '32/2 COMBED WARP BCI', '32/2 CW BCI', '61', '2016/11/16 10:36:19 pm'),
(62, 'CONE YARN', 'CY', '42/1 COMBED WARP COMPACT BCI', '42/1 CWC BCI', '62', '2016/11/16 10:37:04 pm');

-- --------------------------------------------------------

--
-- Table structure for table `schedulemaster`
--

CREATE TABLE IF NOT EXISTS `schedulemaster` (
`id` int(33) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `deptcode` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `machineno` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `activity` varchar(222) NOT NULL,
  `years` varchar(222) NOT NULL,
  `months` varchar(222) NOT NULL,
  `days` varchar(222) NOT NULL,
  `hours` varchar(222) NOT NULL,
  `manhours` varchar(222) NOT NULL,
  `maintaineddate` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `schedulemaster`
--

INSERT INTO `schedulemaster` (`id`, `unit`, `deptname`, `deptcode`, `machinename`, `machineno`, `slno`, `activity`, `years`, `months`, `days`, `hours`, `manhours`, `maintaineddate`, `datetime`) VALUES
(1, 'please select-----', 'AUTO_CONER', 'AC', 'SCHLAFHORST-X5', 'AC-01', '', 'Splicer Scissor Spary', '', '', '', '181', '', '', '2016/11/23 12:59:32 pm'),
(2, 'please select-----', 'AUTO_CONER', 'AC', 'SCHLAFHORST-X5', 'AC-02', '', 'Splicer Scissor Spary61', '', '', '', '61', '', '', '2016/11/23 01:36:29 pm');

-- --------------------------------------------------------

--
-- Table structure for table `shiftmaster`
--

CREATE TABLE IF NOT EXISTS `shiftmaster` (
`id` int(44) NOT NULL,
  `shiftcode` varchar(222) NOT NULL,
  `shiftname` varchar(222) NOT NULL,
  `stime1` varchar(222) NOT NULL,
  `etime1` varchar(222) NOT NULL,
  `stime2` varchar(222) NOT NULL,
  `lunch` varchar(222) NOT NULL,
  `etime2` varchar(222) NOT NULL,
  `workhours` varchar(222) NOT NULL,
  `gracelate` varchar(222) NOT NULL,
  `graceearly` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shiftmaster`
--

INSERT INTO `shiftmaster` (`id`, `shiftcode`, `shiftname`, `stime1`, `etime1`, `stime2`, `lunch`, `etime2`, `workhours`, `gracelate`, `graceearly`, `datetime`) VALUES
(1, '', '', 're', '', 'ger', '', 'er', '', '', '', '2016/08/09 03:25:11 pm');

-- --------------------------------------------------------

--
-- Table structure for table `simplex`
--

CREATE TABLE IF NOT EXISTS `simplex` (
`id` int(55) NOT NULL,
  `date` varchar(222) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `shift` varchar(222) NOT NULL,
  `lotno` varchar(222) NOT NULL,
  `machineno` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `count` varchar(222) NOT NULL,
  `deliveryhank` varchar(222) NOT NULL,
  `stdhank` varchar(222) NOT NULL,
  `staefficiency` varchar(222) NOT NULL,
  `totalduration` varchar(222) NOT NULL,
  `shiftduration` varchar(222) NOT NULL,
  `employeeno` varchar(222) NOT NULL,
  `employeename` varchar(222) NOT NULL,
  `acthanks` varchar(222) NOT NULL,
  `pneuwaste` varchar(55) NOT NULL,
  `achieved` varchar(66) NOT NULL,
  `prdnconstant` varchar(222) NOT NULL,
  `efficiency` varchar(222) NOT NULL,
  `rovingwaste` varchar(222) NOT NULL,
  `qadwaste` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `duration` varchar(222) NOT NULL,
  `stopagereason` varchar(222) NOT NULL,
  `stduration` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sizecountmaster`
--

CREATE TABLE IF NOT EXISTS `sizecountmaster` (
`id` int(22) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `itemcode` varchar(222) NOT NULL,
  `veriety` varchar(222) NOT NULL,
  `verietycode` varchar(222) NOT NULL,
  `sizecount` varchar(222) NOT NULL,
  `sizecountcode` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sizecountmaster`
--

INSERT INTO `sizecountmaster` (`id`, `itemname`, `itemcode`, `veriety`, `verietycode`, `sizecount`, `sizecountcode`, `slno`, `datetime`) VALUES
(1, 'please select-----', 'HGGH', 'HGGH', 'HGGH', 'HGGH', 'HGGH', 'HGGH', '2016/08/15 11:46:21 pm');

-- --------------------------------------------------------

--
-- Table structure for table `storesfinheads`
--

CREATE TABLE IF NOT EXISTS `storesfinheads` (
`id` int(44) NOT NULL,
  `fincode` varchar(44) NOT NULL,
  `finname` varchar(44) NOT NULL,
  `datetime` varchar(44) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `storesfinheads`
--

INSERT INTO `storesfinheads` (`id`, `fincode`, `finname`, `datetime`) VALUES
(1, 'EL', 'ELECRICAL EQUPIMENTS', '2016/11/14 11:11:22 am'),
(2, 'GS', 'GENERAL STORES', '2016/11/14 11:11:37 am'),
(3, 'MS', 'MACHINARY SPARES', '2016/11/14 11:11:52 am'),
(4, 'MS-BL', 'BELTS', '2016/11/14 11:12:06 am'),
(5, 'MS-AC', 'AIR COMPRESSURE', '2016/11/14 11:12:54 am'),
(6, 'MS-SF', 'SPEED FRAME', '2016/11/14 11:13:12 am'),
(7, 'MS-BF', 'BUFFING', '2016/11/14 11:13:27 am'),
(8, 'MS-BG', 'BEARINGS', '2016/11/14 11:13:44 am'),
(9, 'MS-CBS', 'CHAIN BLOCK SPARES', '2016/11/14 11:14:02 am'),
(10, 'MS-DF', 'DRAW FRAME', '2016/11/14 11:14:18 am'),
(11, 'MS-CO', 'COOMBERS', '2016/11/14 11:14:32 am'),
(12, 'MS-OT', 'OTHERS', '2016/11/14 11:14:43 am'),
(13, 'MS-ACO', 'AUTOCONER', '2016/11/14 11:15:01 am'),
(14, 'MS-EG', 'ELGI-OHTC', '2016/11/17 04:45:46 am'),
(15, 'MS-FCS', 'FLUFF CLEANER SPARES', '2016/11/17 04:46:08 am'),
(16, 'CIV', 'CIVIL', '2016/11/17 04:46:15 am'),
(17, 'MS-GR', 'GENERATORS', '2016/11/17 04:46:25 am'),
(18, 'MS-HM', 'HUMIDIFICATION', '2016/11/17 04:46:42 am'),
(19, 'MS-HT', 'HYDRAULIC TROLLEYS', '2016/11/17 04:47:01 am'),
(20, 'MS-ITW', 'ITW PACKING M/C SPARES', '2016/11/17 04:47:26 am'),
(21, 'MS-CAP', 'COTS&APRONS', '2016/11/17 04:47:40 am'),
(22, 'WSP', 'WORK SHOP MATERIAL', '2016/11/17 04:47:51 am'),
(23, 'MS-BN', 'BOLTS&NUTS', '2016/11/17 04:48:02 am'),
(24, 'WS', 'WORK SHOP MATERIAL', '2016/11/17 04:48:14 am'),
(25, 'MS-PCS', 'POSITIVE CLEARER SPARES', '2016/11/17 04:48:40 am'),
(26, 'MS-FL', 'FORK LIFT', '2016/11/17 04:48:51 am'),
(27, 'MS-RF', 'LR6/S RING FRAME', '2016/11/17 04:49:09 am'),
(28, 'FL', 'FORK LIFT', '2016/11/17 04:49:16 am'),
(29, 'TF', 'TFO', '2016/11/17 04:49:27 am'),
(30, 'MS-SQ', 'S.Q.C(LAB)', '2016/11/17 04:49:39 am'),
(31, 'MS-TB', 'TRUMAC BLOW ROOM', '2016/11/17 04:49:52 am'),
(32, 'MS-TC', 'TRUMAC CARDING', '2016/11/17 04:50:07 am'),
(33, 'MS-VX ', 'VXL', '2016/11/17 04:50:14 am'),
(34, 'OL', 'OIL & LUBRICANTS', '2016/11/17 04:50:55 am'),
(35, 'PM', 'PACKING MATERIAL', '2016/11/17 04:51:07 am'),
(36, 'TI', 'TOOLS & IMPLEMENTS', '2016/11/17 04:51:25 am'),
(37, 'MS-CA', 'CARD ROOM ACCESSOR', '2016/11/17 04:51:37 am'),
(38, 'MS-CRT', 'CRATES', '2016/11/17 04:51:47 am'),
(39, 'MS-YCP', 'YARN CONDITIONING PLA', '2016/11/17 04:52:09 am'),
(40, 'MS-LH', 'LH-10 LAP FORMER', '2016/11/17 04:52:26 am'),
(41, 'MS-MWP', 'MINERAL WATER PLANT', '2016/11/17 04:52:40 am'),
(42, 'MS-GF', 'GENERAL FACTORY EQUIPMENT', '2016/11/17 04:53:04 am'),
(43, 'MS-CC', 'CARD CANS', '2016/11/17 04:53:13 am'),
(44, 'MS-PR', 'PRESSING', '2016/11/17 04:53:26 am');

-- --------------------------------------------------------

--
-- Table structure for table `storesgatepass`
--

CREATE TABLE IF NOT EXISTS `storesgatepass` (
`id` int(22) NOT NULL,
  `date` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `companyname` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `gatepassno` varchar(222) NOT NULL,
  `issuedate` varchar(222) NOT NULL,
  `type` varchar(222) NOT NULL,
  `personname` varchar(222) NOT NULL,
  `transactiontype` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `issuedpersonname` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `quantity` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `drwaingno` varchar(222) NOT NULL,
  `catalogno` varchar(222) NOT NULL,
  `make` varchar(222) NOT NULL,
  `purpose` varchar(222) NOT NULL,
  `instruction` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `storesgatepass`
--

INSERT INTO `storesgatepass` (`id`, `date`, `slno`, `companyname`, `address`, `gatepassno`, `issuedate`, `type`, `personname`, `transactiontype`, `remarks`, `issuedpersonname`, `itemname`, `quantity`, `rate`, `drwaingno`, `catalogno`, `make`, `purpose`, `instruction`, `datetime`) VALUES
(2, '2016-08-25', '33', 'ERRERGTS', '', '1234555', '2016-08-25', 'GATEPASS', 'FGGFGFG', 'NON RETURNABLE', 'GFGF', 'GFGFGFGFGFFG', 'DFFDFD', '44', '55', '34', '3443', '34', '434', '34434', '2016/08/25 04:02:26 pm');

-- --------------------------------------------------------

--
-- Table structure for table `storesindententry`
--

CREATE TABLE IF NOT EXISTS `storesindententry` (
`id` int(22) NOT NULL,
  `indentslno` varchar(222) NOT NULL,
  `indentdate` varchar(222) NOT NULL,
  `indentno` varchar(222) NOT NULL,
  `narration` varchar(222) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `deptcode` varchar(222) NOT NULL,
  `purpose` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `machineno` varchar(222) NOT NULL,
  `transmode` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `itemcode` varchar(222) NOT NULL,
  `catalogno` varchar(222) NOT NULL,
  `finhead` varchar(222) NOT NULL,
  `drawingno` varchar(222) NOT NULL,
  `unit1` varchar(222) NOT NULL,
  `location` varchar(222) NOT NULL,
  `inward` varchar(222) NOT NULL,
  `avaialble` varchar(222) NOT NULL,
  `total` varchar(222) NOT NULL,
  `indentqty` varchar(222) NOT NULL,
  `issuedqty` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `avgrate` varchar(222) NOT NULL,
  `value` varchar(222) NOT NULL,
  `avgvalue` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `storesindententry`
--

INSERT INTO `storesindententry` (`id`, `indentslno`, `indentdate`, `indentno`, `narration`, `unit`, `deptname`, `deptcode`, `purpose`, `machinename`, `machineno`, `transmode`, `itemname`, `itemcode`, `catalogno`, `finhead`, `drawingno`, `unit1`, `location`, `inward`, `avaialble`, `total`, `indentqty`, `issuedqty`, `rate`, `avgrate`, `value`, `avgvalue`, `datetime`) VALUES
(4, '233232', '2016-08-29', '43434', '', 'UNIT-1', 'weefwef', 'dsff', '', 'SD', 'SD', 'consumable', 'weewew', 'please select-----', '', 'general stores', '55555555555', 'select--------------', '', '44', '55', '99', '55', '44', '1222', '1111', '123456', '233233', '2016/08/25 03:18:07 pm'),
(5, '3232', '2016-08-30', '232', '2323', 'select--------------', 'weefwef', 'please select-----', '', 'SD', 'SD', 'consumable', 'weewew', 'please select-----', '323', 'general stores', '233232', 'UNIT-1', '3232', '3232', '3232', '3232', '3232', '3232', '3232', '3232', '3232323223323', '3232', '2016/08/25 03:34:34 pm');

-- --------------------------------------------------------

--
-- Table structure for table `storesindentrequest`
--

CREATE TABLE IF NOT EXISTS `storesindentrequest` (
`id` int(22) NOT NULL,
  `date` varchar(222) NOT NULL,
  `indentno` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `machineno` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `stockinstores` varchar(222) NOT NULL,
  `quantity` varchar(222) NOT NULL,
  `reason` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `storesissueslip`
--

CREATE TABLE IF NOT EXISTS `storesissueslip` (
`id` int(22) NOT NULL,
  `date` varchar(222) NOT NULL,
  `itemcode` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `mcno` varchar(222) NOT NULL,
  `reqquantity` varchar(222) NOT NULL,
  `issquantity` varchar(222) NOT NULL,
  `remarks` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `storesitemcreation`
--

CREATE TABLE IF NOT EXISTS `storesitemcreation` (
`id` int(44) NOT NULL,
  `date` varchar(88) NOT NULL,
  `finanacialhead` varchar(222) NOT NULL,
  `itemcode` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `description` varchar(222) NOT NULL,
  `unit` varchar(222) NOT NULL,
  `itemid` varchar(222) NOT NULL,
  `drwaingno` varchar(222) NOT NULL,
  `catalogno` varchar(222) NOT NULL,
  `location` varchar(222) NOT NULL,
  `group` varchar(222) NOT NULL,
  `openingstock` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `value` varchar(222) NOT NULL,
  `cst` varchar(222) NOT NULL,
  `vat` varchar(222) NOT NULL,
  `exciseduty` varchar(222) NOT NULL,
  `abcanalysis` varchar(222) NOT NULL,
  `minlevel` varchar(222) NOT NULL,
  `maxlevel` varchar(222) NOT NULL,
  `labdays` varchar(222) NOT NULL,
  `alertquantity` varchar(44) NOT NULL,
  `datetime` varchar(55) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `storesitemcreation`
--

INSERT INTO `storesitemcreation` (`id`, `date`, `finanacialhead`, `itemcode`, `itemname`, `description`, `unit`, `itemid`, `drwaingno`, `catalogno`, `location`, `group`, `openingstock`, `rate`, `value`, `cst`, `vat`, `exciseduty`, `abcanalysis`, `minlevel`, `maxlevel`, `labdays`, `alertquantity`, `datetime`) VALUES
(2, '2016-11-05', 'please select-----', 'jhhj', 'jhhj', 'hj', 'select--------------', 'hj', 'hjh', 'jh', 'hj', 'hjhj', 'hj', 'hj', 'hj', 'h', 'hhj', 'hj', 'h', 'hj', 'hj', 'hh', '121333', '2016/11/06 03:13:38 am');

-- --------------------------------------------------------

--
-- Table structure for table `storesmachinarymaster`
--

CREATE TABLE IF NOT EXISTS `storesmachinarymaster` (
`id` int(33) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `machinecode` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `storesmachinarymaster`
--

INSERT INTO `storesmachinarymaster` (`id`, `deptname`, `code`, `machinecode`, `machinename`, `datetime`) VALUES
(2, 'PACKING', 'PM', 'PM-01', 'PACKING MATERIAL', '2016/11/15 01:22:42 am'),
(3, 'RING FRAME', 'RF', 'RF-01', 'KTTM240E-01', '2016/11/15 01:23:39 am'),
(4, 'RING FRAME', 'RF', 'RF-02', 'KTTM240E-02', '2016/11/15 01:24:30 am'),
(5, 'RING FRAME', 'RF', 'RF-03', 'KTTM240E-03', '2016/11/15 01:25:11 am'),
(6, 'RING FRAME', 'RF', 'RF-04', 'KTTM240E-04', '2016/11/15 01:25:44 am'),
(7, 'RING FRAME', 'RF', 'RF-05', 'KTTM240E-05', '2016/11/15 01:27:10 am'),
(8, 'RING FRAME', 'RF', 'RF-06', 'KTTM240E-06', '2016/11/15 01:28:11 am'),
(9, 'RING FRAE', 'RF', 'RF-07', 'KTTM240E-07', '2016/11/15 01:28:43 am'),
(10, 'RING FRAME', 'RF', 'RF-08', 'KTTM240E-08', '2016/11/15 01:29:29 am'),
(11, 'RING FRAME', 'RF', 'RF-09', 'KTTM240E-09', '2016/11/15 01:30:03 am'),
(12, 'RING FRAME', 'RF', 'RF-10', 'KTTM240E-10', '2016/11/15 01:30:40 am'),
(13, 'RING FRAME', 'RF', 'RF-11', 'KTTM240E-11', '2016/11/15 01:31:05 am'),
(14, 'RING FRAME', 'RF', 'RF-12', 'KTTM240E-12', '2016/11/15 01:31:42 am'),
(15, 'RING FRAME', 'RF', 'RF-13', 'KTTM240E-13', '2016/11/15 01:32:12 am');

-- --------------------------------------------------------

--
-- Table structure for table `storesmainheads`
--

CREATE TABLE IF NOT EXISTS `storesmainheads` (
`id` int(55) NOT NULL,
  `deptcode` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `storesmainheads`
--

INSERT INTO `storesmainheads` (`id`, `deptcode`, `deptname`, `datetime`) VALUES
(2, 'BR', 'BLOWROOM', '2016/11/14 11:15:59 am'),
(3, 'CA', 'CARDING', '2016/11/14 11:16:06 am'),
(4, 'OF', 'OFFICE', '2016/11/14 11:16:12 am'),
(5, 'CB', 'COMBER', '2016/11/14 11:16:20 am'),
(6, 'DFF', 'DRAW FRAME', '2016/11/14 11:16:33 am'),
(7, 'SF', 'SPEED FRAME', '2016/11/14 11:16:46 am'),
(8, 'RF', 'RING FRAME', '2016/11/14 11:16:59 am'),
(9, 'AC', 'AUTOCONER', '2016/11/14 11:17:10 am'),
(10, 'GEN', 'GENERAL', '2016/11/14 11:17:17 am'),
(11, 'ELE', 'ELECTRICAL', '2016/11/14 11:17:43 am'),
(12, 'BF', 'BUFFING', '2016/11/14 11:17:53 am'),
(15, 'PM', 'PACKING ', '2016/11/17 04:54:22 am'),
(16, 'UL', 'UTILITIES', '2016/11/17 04:54:38 am'),
(17, 'MS-HM', 'HUMIDIFICATION PLANT', '2016/11/17 04:54:56 am'),
(18, 'OT', 'OTHERS', '2016/11/17 04:55:02 am'),
(19, 'CO', 'COMPRESSORS', '2016/11/17 04:55:16 am');

-- --------------------------------------------------------

--
-- Table structure for table `storespurchaseentry`
--

CREATE TABLE IF NOT EXISTS `storespurchaseentry` (
`id` int(44) NOT NULL,
  `entrydate` varchar(222) NOT NULL,
  `typeofentry` varchar(222) NOT NULL,
  `inwardno` varchar(222) NOT NULL,
  `suppliername` varchar(222) NOT NULL,
  `billno` varchar(222) NOT NULL,
  `billdate` varchar(222) NOT NULL,
  `purorderno` varchar(222) NOT NULL,
  `purorderdate` varchar(222) NOT NULL,
  `dclist` varchar(222) NOT NULL,
  `formtype` varchar(222) NOT NULL,
  `billtype` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `transmode` varchar(222) NOT NULL,
  `receiptno` varchar(222) NOT NULL,
  `dcinwardno` varchar(222) NOT NULL,
  `debitinwardno` varchar(55) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `itemcode` varchar(222) NOT NULL,
  `qty` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `finhead` varchar(222) NOT NULL,
  `narration` varchar(222) NOT NULL,
  `make` varchar(222) NOT NULL,
  `billamout` varchar(222) NOT NULL,
  `discount` varchar(222) NOT NULL,
  `insurance` varchar(222) NOT NULL,
  `pandf` varchar(222) NOT NULL,
  `frieght` varchar(222) NOT NULL,
  `courier` varchar(222) NOT NULL,
  `vat` varchar(222) NOT NULL,
  `cat` varchar(222) NOT NULL,
  `servicetax` varchar(222) NOT NULL,
  `othercharges` varchar(222) NOT NULL,
  `indentreferenceno` varchar(66) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `storespurchaseentry`
--

INSERT INTO `storespurchaseentry` (`id`, `entrydate`, `typeofentry`, `inwardno`, `suppliername`, `billno`, `billdate`, `purorderno`, `purorderdate`, `dclist`, `formtype`, `billtype`, `state`, `transmode`, `receiptno`, `dcinwardno`, `debitinwardno`, `itemname`, `itemcode`, `qty`, `rate`, `amount`, `finhead`, `narration`, `make`, `billamout`, `discount`, `insurance`, `pandf`, `frieght`, `courier`, `vat`, `cat`, `servicetax`, `othercharges`, `indentreferenceno`, `datetime`) VALUES
(4, '2016-08-26', 'PURCHASE', '123', 'RAJU', '434', '2016-08-26', '43434', '2016-08-26', '4R343', '4334', '4334', 'R4R4', 'consumable', '4334', '344R', '343R4R', 'weewew', '', '344', '4343', '43434', 'general stores', '4343', '4343', '4343', '3443', '4343', '34', '34', '43', '34', '34', '34', '43', '4RR3R4', '2016/08/26 11:38:12 am');

-- --------------------------------------------------------

--
-- Table structure for table `storespurchaseentry1`
--

CREATE TABLE IF NOT EXISTS `storespurchaseentry1` (
`id` int(44) NOT NULL,
  `entrydate` varchar(222) NOT NULL,
  `typeofentry` varchar(222) NOT NULL,
  `inwardno` varchar(222) NOT NULL,
  `suppliername` varchar(222) NOT NULL,
  `billno` varchar(222) NOT NULL,
  `billdate` varchar(222) NOT NULL,
  `purorderno` varchar(222) NOT NULL,
  `purorderdate` varchar(222) NOT NULL,
  `dclist` varchar(222) NOT NULL,
  `formtype` varchar(222) NOT NULL,
  `billtype` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `transmode` varchar(222) NOT NULL,
  `receiptno` varchar(222) NOT NULL,
  `dcinwardno` varchar(222) NOT NULL,
  `debitinwardno` varchar(55) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `itemcode` varchar(222) NOT NULL,
  `qty` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `finhead` varchar(222) NOT NULL,
  `narration` varchar(222) NOT NULL,
  `make` varchar(222) NOT NULL,
  `billamout` varchar(222) NOT NULL,
  `discount` varchar(222) NOT NULL,
  `insurance` varchar(222) NOT NULL,
  `pandf` varchar(222) NOT NULL,
  `frieght` varchar(222) NOT NULL,
  `courier` varchar(222) NOT NULL,
  `vat` varchar(222) NOT NULL,
  `cat` varchar(222) NOT NULL,
  `servicetax` varchar(222) NOT NULL,
  `othercharges` varchar(222) NOT NULL,
  `indentreferenceno` varchar(66) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `storespurchaseentry1`
--

INSERT INTO `storespurchaseentry1` (`id`, `entrydate`, `typeofentry`, `inwardno`, `suppliername`, `billno`, `billdate`, `purorderno`, `purorderdate`, `dclist`, `formtype`, `billtype`, `state`, `transmode`, `receiptno`, `dcinwardno`, `debitinwardno`, `itemname`, `itemcode`, `qty`, `rate`, `amount`, `finhead`, `narration`, `make`, `billamout`, `discount`, `insurance`, `pandf`, `frieght`, `courier`, `vat`, `cat`, `servicetax`, `othercharges`, `indentreferenceno`, `datetime`) VALUES
(1, '2016-07-29', 'CSCDSDS', 'DSCS', 'DSCS', '66', '', 'DS', '', 'DS', 'DS', 'SD', 'DS', 'vr', 'DSSD', 'DCSDC', 'SDDCS', 'pen', 'please select-----', '10', 'CDS', 'evverver', 'rrr', 'SDDCS', 'DCSDCS', 'DCS', 'CDSC', '', 'CSDC', 'SDCSDC', '', 'SDCSD', 'SDC', 'SDDS', '', '121323132123213', '2016/08/03 12:36:53 pm'),
(3, '2016-08-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mc', 'please select-----', '', '', '', 'bbb', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/02 02:27:49 pm'),
(4, '2016-08-26', 'PURCHASE', '123', 'RAJU', '434', '2016-08-26', '43434', '2016-08-26', '4R343', '4334', '4334', 'R4R4', 'consumable', '4334', '344R', '343R4R', 'weewew', '', '344', '4343', '43434', 'general stores', '4343', '4343', '4343', '3443', '4343', '34', '34', '43', '34', '34', '34', '43', '4RR3R4', '2016/08/26 11:38:12 am');

-- --------------------------------------------------------

--
-- Table structure for table `storespurchaseorder`
--

CREATE TABLE IF NOT EXISTS `storespurchaseorder` (
`id` int(22) NOT NULL,
  `date` varchar(222) NOT NULL,
  `orderno` varchar(222) NOT NULL,
  `quatationno` varchar(222) NOT NULL,
  `ordertype` varchar(222) NOT NULL,
  `supplier` varchar(222) NOT NULL,
  `matter` varchar(222) NOT NULL,
  `deliverydate` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `itemcode` varchar(222) NOT NULL,
  `qty` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `finhead` varchar(222) NOT NULL,
  `narration` varchar(222) NOT NULL,
  `make` varchar(222) NOT NULL,
  `billamount` varchar(222) NOT NULL,
  `discount` varchar(222) NOT NULL,
  `insuranace` varchar(222) NOT NULL,
  `pandf` varchar(222) NOT NULL,
  `fright` varchar(222) NOT NULL,
  `courier` varchar(222) NOT NULL,
  `vat` varchar(222) NOT NULL,
  `cst` varchar(222) NOT NULL,
  `tax` varchar(222) NOT NULL,
  `othercharges` varchar(222) NOT NULL,
  `tedrmsandconditions` varchar(222) NOT NULL,
  `narration1` varchar(222) NOT NULL,
  `designation` varchar(222) NOT NULL,
  `nameapprovedby` varchar(222) NOT NULL,
  `ccto` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `storespurchaseorder`
--

INSERT INTO `storespurchaseorder` (`id`, `date`, `orderno`, `quatationno`, `ordertype`, `supplier`, `matter`, `deliverydate`, `subject`, `itemname`, `itemcode`, `qty`, `rate`, `amount`, `finhead`, `narration`, `make`, `billamount`, `discount`, `insuranace`, `pandf`, `fright`, `courier`, `vat`, `cst`, `tax`, `othercharges`, `tedrmsandconditions`, `narration1`, `designation`, `nameapprovedby`, `ccto`, `datetime`) VALUES
(1, '2016-08-16', 'cdsds', 'dsdc', 'PURCHASE ORDER', 'sddcs', 'ddc', '2016', 'cdscsd', 'please select-----', 'please select-----', 'ds', 'ds', 'ds', 'ds', 'ds', 'd', 'ds', 'cdsds', 'dsdcs', 'ds', 'ds', 'ds', '', '', '', 'ds', 'dc', 'ds', 'dc', 'ds', 'cd', '2016/08/22 12:43:44 pm');

-- --------------------------------------------------------

--
-- Table structure for table `storespurchaserequsation`
--

CREATE TABLE IF NOT EXISTS `storespurchaserequsation` (
`id` int(22) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `entrydate` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `make` varchar(222) NOT NULL,
  `catalogname` varchar(222) NOT NULL,
  `drwaingno` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `quality` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `purpose` varchar(222) NOT NULL,
  `suggestedparty` varchar(222) NOT NULL,
  `requestedperson` varchar(222) NOT NULL,
  `authorisedby` varchar(222) NOT NULL,
  `reportingto` varchar(44) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `storespurchaserequsation`
--

INSERT INTO `storespurchaserequsation` (`id`, `slno`, `entrydate`, `itemname`, `make`, `catalogname`, `drwaingno`, `deptname`, `machinename`, `quality`, `rate`, `purpose`, `suggestedparty`, `requestedperson`, `authorisedby`, `reportingto`, `datetime`) VALUES
(1, '4', '', 'please select-----', 'hjhjb', 'kjbbh', 'jbhj', 'please select-----', 'please select-----', 'hbj', 'hbjhb', 'bh', 'hb', 'bhh', 'bhb', 'hb', '2016/07/28 03:05:24 pm'),
(2, '', '', 'please select-----', '', 'vdsvfdvf', '', 'please select-----', '', '5656', '56', '', '', 'naga', 'raju', '', '2016/11/06 03:58:48 am');

-- --------------------------------------------------------

--
-- Table structure for table `storesservicebill`
--

CREATE TABLE IF NOT EXISTS `storesservicebill` (
`id` int(22) NOT NULL,
  `entrydate` varchar(222) NOT NULL,
  `referenceno` varchar(222) NOT NULL,
  `purorderno` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `deptcode` varchar(222) NOT NULL,
  `supplier` varchar(222) NOT NULL,
  `purpose` varchar(222) NOT NULL,
  `transporttype` varchar(222) NOT NULL,
  `repaircharges` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `referencedate` varchar(222) NOT NULL,
  `purorderdate` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `machineno` varchar(222) NOT NULL,
  `lrno` varchar(222) NOT NULL,
  `gatepassno` varchar(222) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `quantity` varchar(222) NOT NULL,
  `rate` varchar(222) NOT NULL,
  `value` varchar(222) NOT NULL,
  `servicebill` varchar(222) NOT NULL,
  `frieght` varchar(222) NOT NULL,
  `courier` varchar(222) NOT NULL,
  `bed` varchar(222) NOT NULL,
  `aed` varchar(222) NOT NULL,
  `cess` varchar(222) NOT NULL,
  `vat` varchar(222) NOT NULL,
  `cst` varchar(222) NOT NULL,
  `others` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `storesservicebill`
--

INSERT INTO `storesservicebill` (`id`, `entrydate`, `referenceno`, `purorderno`, `deptname`, `deptcode`, `supplier`, `purpose`, `transporttype`, `repaircharges`, `slno`, `referencedate`, `purorderdate`, `machinename`, `machineno`, `lrno`, `gatepassno`, `itemname`, `quantity`, `rate`, `value`, `servicebill`, `frieght`, `courier`, `bed`, `aed`, `cess`, `vat`, `cst`, `others`, `datetime`) VALUES
(1, '2016-08-10', 'dv', 'dfsdfdf', 'df', 'd', 'df', '', 'type1', 'vd', 'df', '', '', 'dvfdvfdf', 'dffd', 'df', 'df', 'd', 'df', 'dv', 'd', 'dsd', 'df', 'df', 'df', 'd', 'df', 'dv', 'df', 'df', '2016/08/22 01:24:32 pm');

-- --------------------------------------------------------

--
-- Table structure for table `storessupplier`
--

CREATE TABLE IF NOT EXISTS `storessupplier` (
`id` int(44) NOT NULL,
  `accountname` varchar(222) NOT NULL,
  `accountalias` varchar(222) NOT NULL,
  `group` varchar(222) NOT NULL,
  `transactiontype` varchar(222) NOT NULL,
  `openingbalance` varchar(222) NOT NULL,
  `place` varchar(222) NOT NULL,
  `registerofficeaddress` varchar(222) NOT NULL,
  `pincode` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `district` varchar(222) NOT NULL,
  `phoneno` varchar(222) NOT NULL,
  `faxno` varchar(222) NOT NULL,
  `emailid` varchar(222) NOT NULL,
  `tinno` varchar(222) NOT NULL,
  `branchofficeaddress` varchar(222) NOT NULL,
  `rcno` varchar(222) NOT NULL,
  `cstno` varchar(222) NOT NULL,
  `totno` varchar(222) NOT NULL,
  `panno` varchar(222) NOT NULL,
  `qtyfigures` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `storessupplier`
--

INSERT INTO `storessupplier` (`id`, `accountname`, `accountalias`, `group`, `transactiontype`, `openingbalance`, `place`, `registerofficeaddress`, `pincode`, `country`, `state`, `district`, `phoneno`, `faxno`, `emailid`, `tinno`, `branchofficeaddress`, `rcno`, `cstno`, `totno`, `panno`, `qtyfigures`, `datetime`) VALUES
(1, 'scd', 'hj', 'kjj', 'kjk', 'jk', 'kjjk', 'jk ', 'kj', 'jk', 'jk', 'j', 'kj', 'jk', 'kj', 'jkjk', 'j ', 'jk', 'jk', 'j', 'jk', 'jk', '2016/07/28 02:45:14 pm');

-- --------------------------------------------------------

--
-- Table structure for table `supplierentry`
--

CREATE TABLE IF NOT EXISTS `supplierentry` (
`id` int(22) NOT NULL,
  `nameofaccount` varchar(222) NOT NULL,
  `accoungtalias` varchar(222) NOT NULL,
  `group` varchar(222) NOT NULL,
  `transactiontype` varchar(222) NOT NULL,
  `openingbalance` varchar(222) NOT NULL,
  `place` varchar(222) NOT NULL,
  `registerofficeaddress` varchar(222) NOT NULL,
  `pincode` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `district` varchar(222) NOT NULL,
  `phoneno` varchar(222) NOT NULL,
  `faxno` varchar(222) NOT NULL,
  `emailid` varchar(222) NOT NULL,
  `tino` varchar(222) NOT NULL,
  `branchofficeaddress` varchar(222) NOT NULL,
  `rcno` varchar(222) NOT NULL,
  `cstno` varchar(222) NOT NULL,
  `totno` varchar(222) NOT NULL,
  `panno` varchar(222) NOT NULL,
  `qty` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `supplierentry`
--

INSERT INTO `supplierentry` (`id`, `nameofaccount`, `accoungtalias`, `group`, `transactiontype`, `openingbalance`, `place`, `registerofficeaddress`, `pincode`, `country`, `state`, `district`, `phoneno`, `faxno`, `emailid`, `tino`, `branchofficeaddress`, `rcno`, `cstno`, `totno`, `panno`, `qty`, `datetime`) VALUES
(1, 'fdf', 'fvfvfv', 'fvfv', 'ffv', 'fdfv', 'dffd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/15 10:45:38 pm');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
`id` int(44) NOT NULL,
  `date` varchar(222) NOT NULL,
  `machineno` varchar(222) NOT NULL,
  `machinename` varchar(222) NOT NULL,
  `service` varchar(222) NOT NULL,
  `assignedemployee` varchar(222) NOT NULL,
  `category` varchar(55) NOT NULL,
  `datetime` varchar(222) NOT NULL,
  `status` varchar(66) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `date`, `machineno`, `machinename`, `service`, `assignedemployee`, `category`, `datetime`, `status`) VALUES
(4, '', 'please select-----', 'please select-----', 'please select-----', 'ramu', 'Auto coner', '2016/08/04 02:44:03 pm', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `veriertymaster`
--

CREATE TABLE IF NOT EXISTS `veriertymaster` (
`id` int(22) NOT NULL,
  `itemname` varchar(222) NOT NULL,
  `itemcode` varchar(222) NOT NULL,
  `veriety` varchar(222) NOT NULL,
  `verietycode` varchar(222) NOT NULL,
  `slno` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `veriertymaster`
--

INSERT INTO `veriertymaster` (`id`, `itemname`, `itemcode`, `veriety`, `verietycode`, `slno`, `datetime`) VALUES
(1, 'please select-----', 'ds', 'dfs', 'sd', 'sd', '2016/08/15 11:39:21 pm'),
(2, 'COTTON-LINT', 'CL', 'COTTON-LINT', 'CT', '1', '2016/11/18 02:02:57 am');

-- --------------------------------------------------------

--
-- Table structure for table `wastecotton`
--

CREATE TABLE IF NOT EXISTS `wastecotton` (
`id` int(22) NOT NULL,
  `date` varchar(222) NOT NULL,
  `variety` varchar(222) NOT NULL,
  `wastetype` varchar(222) NOT NULL,
  `qty` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wastecotton`
--

INSERT INTO `wastecotton` (`id`, `date`, `variety`, `wastetype`, `qty`, `datetime`) VALUES
(2, '2016-09-08', '44s', 'LD', '0', '2016/09/08 12:18:46 pm'),
(3, '2016-09-09', 'bfggb', 'LD', '-100', '2016/09/08 12:22:05 pm'),
(4, '2016-09-10', 'FGVVF', 'LD', '80', '2016/09/08 12:23:36 pm'),
(5, '2016-11-07', 'FDVDVDVF', 'LD', '-4545', '2016/11/08 04:01:11 am');

-- --------------------------------------------------------

--
-- Table structure for table `wastedispatch`
--

CREATE TABLE IF NOT EXISTS `wastedispatch` (
`id` int(22) NOT NULL,
  `date` varchar(222) NOT NULL,
  `dispatch` varchar(222) NOT NULL,
  `partyname` varchar(222) NOT NULL,
  `note` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `wastedispatch`
--

INSERT INTO `wastedispatch` (`id`, `date`, `dispatch`, `partyname`, `note`, `datetime`) VALUES
(2, '2016-09-08', '20', 'gfgf', 'rtgtr', '2016/09/08 12:19:06 pm'),
(3, '2016-09-08', '20', 'gfgf', 'rtgtr', '2016/09/08 12:21:50 pm'),
(4, '2016-09-09', '100', 'fdg', 'fgggd', '2016/09/08 12:22:19 pm'),
(5, '2016-09-09', '100', 'fdg', 'fgggd', '2016/09/08 12:23:06 pm'),
(6, '2016-09-10', '20', 'GFB', 'FGRB', '2016/09/08 12:24:17 pm'),
(7, '2016-11-07', '5656', 'JBVBHJBHJBHJ', 'JHBJHFDHJDFJJH', '2016/11/08 04:05:42 am');

-- --------------------------------------------------------

--
-- Table structure for table `weighbridge`
--

CREATE TABLE IF NOT EXISTS `weighbridge` (
`id` int(22) NOT NULL,
  `slipno` varchar(222) NOT NULL,
  `vehicleno` varchar(222) NOT NULL,
  `charges` varchar(222) NOT NULL,
  `grossweight` varchar(222) NOT NULL,
  `tareweight` varchar(222) NOT NULL,
  `netweight` varchar(222) NOT NULL,
  `date` varchar(222) NOT NULL,
  `time` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `weighbridge`
--

INSERT INTO `weighbridge` (`id`, `slipno`, `vehicleno`, `charges`, `grossweight`, `tareweight`, `netweight`, `date`, `time`, `datetime`) VALUES
(1, '', 'jhj', 'hjhj', 'hjhj', 'hj', 'hjhj', 'hjhj', '', '2016/09/04 11:18:13 pm'),
(2, 'DFD', 'gfhfh', 'ghfh', 'hfghfh', '', '', '', '', '2016/09/08 02:46:11 pm'),
(3, '1', 'qqqqqqqqqqqqq', '44', '54555', '', '', '2016-09-08', '', '2016/09/08 02:48:52 pm'),
(4, '1', 'dfgdgd', '5555', '555555555555555', '', '', '2016-09-16', '', '2016/09/08 02:51:05 pm'),
(5, '43', 'fggbfb6565', '766767', '6767676767', '676', '767', '2016-09-08', '', '2016/09/08 03:16:09 pm'),
(6, '1', '656556', '6556', '5656', '56', '5656', '2016-11-07', '08:08', '2016/11/08 02:48:16 am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agententry`
--
ALTER TABLE `agententry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autoconer`
--
ALTER TABLE `autoconer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autoconer1`
--
ALTER TABLE `autoconer1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balemgtvalues`
--
ALTER TABLE `balemgtvalues`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `canteen`
--
ALTER TABLE `canteen`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `canttentokens`
--
ALTER TABLE `canttentokens`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carding`
--
ALTER TABLE `carding`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comber`
--
ALTER TABLE `comber`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daywiseactivity`
--
ALTER TABLE `daywiseactivity`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drawing`
--
ALTER TABLE `drawing`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeeregister`
--
ALTER TABLE `employeeregister`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expensemaster`
--
ALTER TABLE `expensemaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finishdrawing`
--
ALTER TABLE `finishdrawing`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gatepassissue`
--
ALTER TABLE `gatepassissue`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groundreading`
--
ALTER TABLE `groundreading`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inward`
--
ALTER TABLE `inward`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inwardgateregister`
--
ALTER TABLE `inwardgateregister`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemmaster`
--
ALTER TABLE `itemmaster`
 ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `labreport`
--
ALTER TABLE `labreport`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lapformer`
--
ALTER TABLE `lapformer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaveentry`
--
ALTER TABLE `leaveentry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lossofpay`
--
ALTER TABLE `lossofpay`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machinereading`
--
ALTER TABLE `machinereading`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintainmasters`
--
ALTER TABLE `maintainmasters`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manualentry`
--
ALTER TABLE `manualentry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outward`
--
ALTER TABLE `outward`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packing`
--
ALTER TABLE `packing`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productionconvfactor`
--
ALTER TABLE `productionconvfactor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productioncountmaster`
--
ALTER TABLE `productioncountmaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productiondepartments`
--
ALTER TABLE `productiondepartments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productionlotnos`
--
ALTER TABLE `productionlotnos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productionmachines`
--
ALTER TABLE `productionmachines`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productionpackingmaster`
--
ALTER TABLE `productionpackingmaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productionpower`
--
ALTER TABLE `productionpower`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productionshiftduration`
--
ALTER TABLE `productionshiftduration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productionstoapgereason`
--
ALTER TABLE `productionstoapgereason`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productionsupervisor`
--
ALTER TABLE `productionsupervisor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productionworkedspndls`
--
ALTER TABLE `productionworkedspndls`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaseentry`
--
ALTER TABLE `purchaseentry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaseitemmaster`
--
ALTER TABLE `purchaseitemmaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality`
--
ALTER TABLE `quality`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawmasters`
--
ALTER TABLE `rawmasters`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawmgt`
--
ALTER TABLE `rawmgt`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawmgt1`
--
ALTER TABLE `rawmgt1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawmgtissue`
--
ALTER TABLE `rawmgtissue`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ringframe`
--
ALTER TABLE `ringframe`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ringframe1`
--
ALTER TABLE `ringframe1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaryadvances`
--
ALTER TABLE `salaryadvances`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesagents`
--
ALTER TABLE `salesagents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesbagtypes`
--
ALTER TABLE `salesbagtypes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesbuyers`
--
ALTER TABLE `salesbuyers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salescounts`
--
ALTER TABLE `salescounts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesformtype`
--
ALTER TABLE `salesformtype`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesinvoiceentry`
--
ALTER TABLE `salesinvoiceentry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesinvoicemaster`
--
ALTER TABLE `salesinvoicemaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesinvoicentry`
--
ALTER TABLE `salesinvoicentry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesitemmaster`
--
ALTER TABLE `salesitemmaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salessizecountmaster`
--
ALTER TABLE `salessizecountmaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesverity`
--
ALTER TABLE `salesverity`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedulemaster`
--
ALTER TABLE `schedulemaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shiftmaster`
--
ALTER TABLE `shiftmaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simplex`
--
ALTER TABLE `simplex`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizecountmaster`
--
ALTER TABLE `sizecountmaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storesfinheads`
--
ALTER TABLE `storesfinheads`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storesgatepass`
--
ALTER TABLE `storesgatepass`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storesindententry`
--
ALTER TABLE `storesindententry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storesindentrequest`
--
ALTER TABLE `storesindentrequest`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storesissueslip`
--
ALTER TABLE `storesissueslip`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storesitemcreation`
--
ALTER TABLE `storesitemcreation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storesmachinarymaster`
--
ALTER TABLE `storesmachinarymaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storesmainheads`
--
ALTER TABLE `storesmainheads`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storespurchaseentry`
--
ALTER TABLE `storespurchaseentry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storespurchaseentry1`
--
ALTER TABLE `storespurchaseentry1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storespurchaseorder`
--
ALTER TABLE `storespurchaseorder`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storespurchaserequsation`
--
ALTER TABLE `storespurchaserequsation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storesservicebill`
--
ALTER TABLE `storesservicebill`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storessupplier`
--
ALTER TABLE `storessupplier`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplierentry`
--
ALTER TABLE `supplierentry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `veriertymaster`
--
ALTER TABLE `veriertymaster`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wastecotton`
--
ALTER TABLE `wastecotton`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wastedispatch`
--
ALTER TABLE `wastedispatch`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weighbridge`
--
ALTER TABLE `weighbridge`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `agententry`
--
ALTER TABLE `agententry`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `autoconer`
--
ALTER TABLE `autoconer`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `autoconer1`
--
ALTER TABLE `autoconer1`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `balemgtvalues`
--
ALTER TABLE `balemgtvalues`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `canteen`
--
ALTER TABLE `canteen`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `canttentokens`
--
ALTER TABLE `canttentokens`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `carding`
--
ALTER TABLE `carding`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comber`
--
ALTER TABLE `comber`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daywiseactivity`
--
ALTER TABLE `daywiseactivity`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `drawing`
--
ALTER TABLE `drawing`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employeeregister`
--
ALTER TABLE `employeeregister`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `expensemaster`
--
ALTER TABLE `expensemaster`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `finishdrawing`
--
ALTER TABLE `finishdrawing`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gatepassissue`
--
ALTER TABLE `gatepassissue`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groundreading`
--
ALTER TABLE `groundreading`
MODIFY `id` int(88) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inward`
--
ALTER TABLE `inward`
MODIFY `id` int(77) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inwardgateregister`
--
ALTER TABLE `inwardgateregister`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `itemmaster`
--
ALTER TABLE `itemmaster`
MODIFY `slno` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `labreport`
--
ALTER TABLE `labreport`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lapformer`
--
ALTER TABLE `lapformer`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leaveentry`
--
ALTER TABLE `leaveentry`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lossofpay`
--
ALTER TABLE `lossofpay`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `machinereading`
--
ALTER TABLE `machinereading`
MODIFY `id` int(88) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `maintainmasters`
--
ALTER TABLE `maintainmasters`
MODIFY `id` int(77) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `manualentry`
--
ALTER TABLE `manualentry`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `masters`
--
ALTER TABLE `masters`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `outward`
--
ALTER TABLE `outward`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `packing`
--
ALTER TABLE `packing`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `productionconvfactor`
--
ALTER TABLE `productionconvfactor`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `productioncountmaster`
--
ALTER TABLE `productioncountmaster`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `productiondepartments`
--
ALTER TABLE `productiondepartments`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `productionlotnos`
--
ALTER TABLE `productionlotnos`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `productionmachines`
--
ALTER TABLE `productionmachines`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `productionpackingmaster`
--
ALTER TABLE `productionpackingmaster`
MODIFY `id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `productionpower`
--
ALTER TABLE `productionpower`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `productionshiftduration`
--
ALTER TABLE `productionshiftduration`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `productionstoapgereason`
--
ALTER TABLE `productionstoapgereason`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `productionsupervisor`
--
ALTER TABLE `productionsupervisor`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `productionworkedspndls`
--
ALTER TABLE `productionworkedspndls`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `purchaseentry`
--
ALTER TABLE `purchaseentry`
MODIFY `id` int(88) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `purchaseitemmaster`
--
ALTER TABLE `purchaseitemmaster`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `purchaseorder`
--
ALTER TABLE `purchaseorder`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `quality`
--
ALTER TABLE `quality`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `rawmasters`
--
ALTER TABLE `rawmasters`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rawmgt`
--
ALTER TABLE `rawmgt`
MODIFY `id` int(66) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `rawmgt1`
--
ALTER TABLE `rawmgt1`
MODIFY `id` int(66) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `rawmgtissue`
--
ALTER TABLE `rawmgtissue`
MODIFY `id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `ringframe`
--
ALTER TABLE `ringframe`
MODIFY `id` int(56) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `ringframe1`
--
ALTER TABLE `ringframe1`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `salaryadvances`
--
ALTER TABLE `salaryadvances`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `salesagents`
--
ALTER TABLE `salesagents`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `salesbagtypes`
--
ALTER TABLE `salesbagtypes`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `salesbuyers`
--
ALTER TABLE `salesbuyers`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `salescounts`
--
ALTER TABLE `salescounts`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `salesformtype`
--
ALTER TABLE `salesformtype`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `salesinvoiceentry`
--
ALTER TABLE `salesinvoiceentry`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `salesinvoicemaster`
--
ALTER TABLE `salesinvoicemaster`
MODIFY `id` int(222) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `salesinvoicentry`
--
ALTER TABLE `salesinvoicentry`
MODIFY `id` int(222) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `salesitemmaster`
--
ALTER TABLE `salesitemmaster`
MODIFY `id` int(222) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `salessizecountmaster`
--
ALTER TABLE `salessizecountmaster`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `salesverity`
--
ALTER TABLE `salesverity`
MODIFY `id` int(222) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `schedulemaster`
--
ALTER TABLE `schedulemaster`
MODIFY `id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shiftmaster`
--
ALTER TABLE `shiftmaster`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `simplex`
--
ALTER TABLE `simplex`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sizecountmaster`
--
ALTER TABLE `sizecountmaster`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `storesfinheads`
--
ALTER TABLE `storesfinheads`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `storesgatepass`
--
ALTER TABLE `storesgatepass`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `storesindententry`
--
ALTER TABLE `storesindententry`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `storesindentrequest`
--
ALTER TABLE `storesindentrequest`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `storesissueslip`
--
ALTER TABLE `storesissueslip`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `storesitemcreation`
--
ALTER TABLE `storesitemcreation`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `storesmachinarymaster`
--
ALTER TABLE `storesmachinarymaster`
MODIFY `id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `storesmainheads`
--
ALTER TABLE `storesmainheads`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `storespurchaseentry`
--
ALTER TABLE `storespurchaseentry`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `storespurchaseentry1`
--
ALTER TABLE `storespurchaseentry1`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `storespurchaseorder`
--
ALTER TABLE `storespurchaseorder`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `storespurchaserequsation`
--
ALTER TABLE `storespurchaserequsation`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `storesservicebill`
--
ALTER TABLE `storesservicebill`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `storessupplier`
--
ALTER TABLE `storessupplier`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplierentry`
--
ALTER TABLE `supplierentry`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `veriertymaster`
--
ALTER TABLE `veriertymaster`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wastecotton`
--
ALTER TABLE `wastecotton`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `wastedispatch`
--
ALTER TABLE `wastedispatch`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `weighbridge`
--
ALTER TABLE `weighbridge`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
