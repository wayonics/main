-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 02:37 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `agententry`
--

INSERT INTO `agententry` (`id`, `agentid`, `agentname`, `address`, `city`, `state`, `phonenumber`, `agenttype`, `agentfor`, `panno`, `commision`, `datetime`) VALUES
(1, 'fdf', 'dfvd', 'fdv', 'vfdvf', 'dfvf', '', '', '', '', '', '2016/08/15 10:53:39 pm');

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
  `module` varchar(77) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `autoconer`
--

INSERT INTO `autoconer` (`id`, `date`, `shift`, `unit`, `supervisor`, `asm`, `mno`, `mname`, `drumsfrom`, `drumsto`, `noofdrums`, `lotno`, `count`, `drumspeed`, `prdn`, `standardefficiency`, `cardno`, `empname`, `maistry`, `prodruntime`, `hardwaste`, `redlieghts`, `actprdn`, `efficiency`, `mceffy`, `drumfrom`, `drumto`, `remarks`, `duration`, `totalduration`, `shiftduration`, `reason`, `durationreason`, `datetime`, `module`) VALUES
(3, '2016-08-24', 'Day Shift', 'UNIT-1', 'RAJU', 'DS', 'hhh6565', 'hgh6556', '', '', '44', 'please select-----', '40 cw', '22', '33', '55', '66', 'NAGARAJU', '', '77', '88', '', '99', '111', '222', '', '', 'DSDCDCS', '', '', '', '', '', '2016/08/24 12:14:34 pm', 'Auto coner'),
(4, '2016-08-26', 'Night Shift', 'UNIT-1', 'RAJU', '', 'hhh6565', 'hgh6556', '44', '44', '55', 'please select-----', '40 cw', '55', '55', '355', '5445', '5454', '545', '', '54', '5', '', '55', '5654', '54', '', '54', '54', '54', '', '', '', '2016/08/26 12:45:56 pm', 'Auto coner'),
(5, '', 'select--------------', 'select--------------', 'please select-----', '', 'please select-----', 'PLEASE SELECT.....', '', '', '', 'please select-----', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/11/03 03:10:34 am', 'Auto coner');

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
-- Table structure for table `gatepass`
--

CREATE TABLE IF NOT EXISTS `gatepass` (
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
-- Dumping data for table `gatepass`
--

INSERT INTO `gatepass` (`id`, `date`, `slno`, `companyname`, `address`, `gatepassno`, `issuedate`, `type`, `personname`, `transactiontype`, `remarks`, `issuedpersonname`, `itemname`, `quantity`, `rate`, `drwaingno`, `catalogno`, `make`, `purpose`, `instruction`, `datetime`) VALUES
(2, '2016-08-25', '33', 'ERRERGTS', '', '1234555', '2016-08-25', 'GATEPASS', 'FGGFGFG', 'NON RETURNABLE', 'GFGF', 'GFGFGFGFGFFG', 'DFFDFD', '44', '55', '34', '3443', '34', '434', '34434', '2016/08/25 04:02:26 pm');

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
-- Table structure for table `indententry`
--

CREATE TABLE IF NOT EXISTS `indententry` (
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
-- Dumping data for table `indententry`
--

INSERT INTO `indententry` (`id`, `indentslno`, `indentdate`, `indentno`, `narration`, `unit`, `deptname`, `deptcode`, `purpose`, `machinename`, `machineno`, `transmode`, `itemname`, `itemcode`, `catalogno`, `finhead`, `drawingno`, `unit1`, `location`, `inward`, `avaialble`, `total`, `indentqty`, `issuedqty`, `rate`, `avgrate`, `value`, `avgvalue`, `datetime`) VALUES
(4, '233232', '2016-08-29', '43434', '', 'UNIT-1', 'weefwef', 'dsff', '', 'SD', 'SD', 'consumable', 'weewew', 'please select-----', '', 'general stores', '55555555555', 'select--------------', '', '44', '55', '99', '55', '44', '1222', '1111', '123456', '233233', '2016/08/25 03:18:07 pm'),
(5, '3232', '2016-08-30', '232', '2323', 'select--------------', 'weefwef', 'please select-----', '', 'SD', 'SD', 'consumable', 'weewew', 'please select-----', '323', 'general stores', '233232', 'UNIT-1', '3232', '3232', '3232', '3232', '3232', '3232', '3232', '3232', '3232323223323', '3232', '2016/08/25 03:34:34 pm');

-- --------------------------------------------------------

--
-- Table structure for table `indentrequest`
--

CREATE TABLE IF NOT EXISTS `indentrequest` (
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
-- Table structure for table `issueslip`
--

CREATE TABLE IF NOT EXISTS `issueslip` (
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
-- Table structure for table `itemmaster`
--

CREATE TABLE IF NOT EXISTS `itemmaster` (
`slno` int(22) NOT NULL,
  `id` varchar(22) NOT NULL,
  `itemname` varchar(22) NOT NULL,
  `itemcode` varchar(22) NOT NULL,
  `datetime` varchar(22) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `itemmaster`
--

INSERT INTO `itemmaster` (`slno`, `id`, `itemname`, `itemcode`, `datetime`) VALUES
(1, '1', 'dfdvf', 'fvfvd', '2016/08/15 11:30:42 pm'),
(2, '1', 'cotton', 'c123', '2016/08/29 12:31:43 pm');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `packing`
--

INSERT INTO `packing` (`id`, `unit`, `count`, `customername`, `conesproduction`, `tapeconetip`, `bagnofrom`, `conesstock`, `stockinnotall`, `opbags`, `opcones`, `variety`, `lotsize`, `desstatus`, `strapcolour`, `bagnoto`, `bagsstock`, `pendinglot`, `clbags`, `clcones`, `date`, `despdate`, `despatches`, `shift`, `bagspacked`, `dispatchedto`, `conesinnotallot`, `datetime`) VALUES
(5, 'UNIT-1', '40', 'SDSD', 'DSDS', 'ROUND', 'DS', '24', '', '', '', 'cw', '45', '', 'RED', '', '24', '', '', '', '2016-08-23', '2016-08-24', '', 'Day Shift', '56', 'GUNTUR', '', '2016/08/23 03:27:41 pm'),
(6, 'UNIT-1', '40', 'EWF', 'EWFEW', 'ROUND', 'EFW', '24', ' 55', '55', '55', 'KK', '55', '5', 'RED', '55', '24', '55', '55', '55', '2016-08-26', '2016-08-26', '55', 'Day Shift', '55', '55', '555', '2016/08/26 12:54:30 pm');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `productionconvfactor`
--

INSERT INTO `productionconvfactor` (`id`, `count`, `code`, `convfactor`, `datetime`) VALUES
(1, '22', 'hh', '1', '2016/10/28 03:11:28 am');

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
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `productioncountmaster`
--

INSERT INTO `productioncountmaster` (`id`, `dept`, `code`, `count`, `counttobemainatained`, `variety`, `deliveredhank`, `productionconstant`, `efficiency`, `expectedgrams`, `type`, `unittype`, `countfrequency`, `datetime`) VALUES
(3, 'please select-----', 'please select-----', '22', '', '', '', '', '', '', '', '', '', '2016/10/28 01:03:20 am');

-- --------------------------------------------------------

--
-- Table structure for table `productiondepartments`
--

CREATE TABLE IF NOT EXISTS `productiondepartments` (
`id` int(44) NOT NULL,
  `deptcode` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `productiondepartments`
--

INSERT INTO `productiondepartments` (`id`, `deptcode`, `deptname`, `datetime`) VALUES
(3, 'dsfd', 'fddf', '2016/10/28 02:58:53 am');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `productionlotnos`
--

INSERT INTO `productionlotnos` (`id`, `lotnos`, `shifts`, `itemname`, `datetime`) VALUES
(1, '45', 'tyhj', 'hjhj', '2016/11/06 12:49:05 am');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `productionmachines`
--

INSERT INTO `productionmachines` (`id`, `dept`, `machinename`, `machinecode`, `machinetype`, `unittype`, `spindles`, `datetime`) VALUES
(3, 'please select-----', 'carding', '', '', '', '1200', '2016/10/28 02:31:43 am'),
(4, 'please select-----', 'fdvfd', 'dfvddvf', 'NORMAL', 'UNIT-1', '1122', '2016/10/28 03:01:26 am');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `productionpackingmaster`
--

INSERT INTO `productionpackingmaster` (`id`, `count`, `code`, `variety`, `lotno`, `conetip`, `strapcolor`, `conewt`, `conesbag`, `unit`, `datetime`) VALUES
(1, '22', '', '', '45', 'KL', 'IO', 'IO', 'OI', '', '2016/11/06 12:53:17 am');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `productionstoapgereason`
--

INSERT INTO `productionstoapgereason` (`id`, `pslno`, `preason`, `psr`, `sslno`, `sreason`, `standard`, `ssr`) VALUES
(3, 'ffffff', 'gf', 'gf', '44444444444', 'nhgf', 'gnhgn', '444434334343443');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `productionsupervisor`
--

INSERT INTO `productionsupervisor` (`id`, `supervisorname`, `asm`, `maistry`, `datetime`) VALUES
(2, 'raju', '5665', '6ytygghhghg', '2016/10/28 03:14:42 am'),
(3, 'acqeel', 'bfbgffg', 'fggffg', '2016/10/28 03:15:32 am');

-- --------------------------------------------------------

--
-- Table structure for table `purchaseentry`
--

CREATE TABLE IF NOT EXISTS `purchaseentry` (
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
-- Dumping data for table `purchaseentry`
--

INSERT INTO `purchaseentry` (`id`, `entrydate`, `typeofentry`, `inwardno`, `suppliername`, `billno`, `billdate`, `purorderno`, `purorderdate`, `dclist`, `formtype`, `billtype`, `state`, `transmode`, `receiptno`, `dcinwardno`, `debitinwardno`, `itemname`, `itemcode`, `qty`, `rate`, `amount`, `finhead`, `narration`, `make`, `billamout`, `discount`, `insurance`, `pandf`, `frieght`, `courier`, `vat`, `cat`, `servicetax`, `othercharges`, `indentreferenceno`, `datetime`) VALUES
(4, '2016-08-26', 'PURCHASE', '123', 'RAJU', '434', '2016-08-26', '43434', '2016-08-26', '4R343', '4334', '4334', 'R4R4', 'consumable', '4334', '344R', '343R4R', 'weewew', '', '344', '4343', '43434', 'general stores', '4343', '4343', '4343', '3443', '4343', '34', '34', '43', '34', '34', '34', '43', '4RR3R4', '2016/08/26 11:38:12 am');

-- --------------------------------------------------------

--
-- Table structure for table `purchaseentry1`
--

CREATE TABLE IF NOT EXISTS `purchaseentry1` (
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
-- Dumping data for table `purchaseentry1`
--

INSERT INTO `purchaseentry1` (`id`, `entrydate`, `typeofentry`, `inwardno`, `suppliername`, `billno`, `billdate`, `purorderno`, `purorderdate`, `dclist`, `formtype`, `billtype`, `state`, `transmode`, `receiptno`, `dcinwardno`, `debitinwardno`, `itemname`, `itemcode`, `qty`, `rate`, `amount`, `finhead`, `narration`, `make`, `billamout`, `discount`, `insurance`, `pandf`, `frieght`, `courier`, `vat`, `cat`, `servicetax`, `othercharges`, `indentreferenceno`, `datetime`) VALUES
(1, '2016-07-29', 'CSCDSDS', 'DSCS', 'DSCS', '66', '', 'DS', '', 'DS', 'DS', 'SD', 'DS', 'vr', 'DSSD', 'DCSDC', 'SDDCS', 'pen', 'please select-----', '10', 'CDS', 'evverver', 'rrr', 'SDDCS', 'DCSDCS', 'DCS', 'CDSC', '', 'CSDC', 'SDCSDC', '', 'SDCSD', 'SDC', 'SDDS', '', '121323132123213', '2016/08/03 12:36:53 pm'),
(3, '2016-08-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mc', 'please select-----', '', '', '', 'bbb', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/08/02 02:27:49 pm'),
(4, '2016-08-26', 'PURCHASE', '123', 'RAJU', '434', '2016-08-26', '43434', '2016-08-26', '4R343', '4334', '4334', 'R4R4', 'consumable', '4334', '344R', '343R4R', 'weewew', '', '344', '4343', '43434', 'general stores', '4343', '4343', '4343', '3443', '4343', '34', '34', '43', '34', '34', '34', '43', '4RR3R4', '2016/08/26 11:38:12 am');

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
  `empno2` varchar(222) NOT NULL,
  `empname2` varchar(222) NOT NULL,
  `empno3` varchar(222) NOT NULL,
  `empname3` varchar(222) NOT NULL,
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
  `module` varchar(77) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ringframe`
--

INSERT INTO `ringframe` (`id`, `supervisor`, `asm`, `maistry`, `date`, `shift`, `unit`, `lotno`, `mcno`, `mcnname`, `countcode`, `spdls`, `grms`, `hank`, `connstannt`, `empno1`, `empname1`, `empno2`, `empname2`, `empno3`, `empname3`, `efficiency`, `reason`, `duration`, `totalduration`, `workedspdls`, `actualhanks`, `pneuwaste`, `dofftime`, `production`, `gps`, `shiftdurationm`, `roving waste`, `noofids`, `streason`, `stduration`, `datetime`, `module`) VALUES
(4, 'RAJU', '', '', '2016-08-23', 'Day Shift', 'UNIT-1', 'please select-----', 'hhh6565', 'hgh6556', '40 cw', '20', '520', '', '32.4', '223', 'RAMU', '', '', '', '', '', '', '', '', '19', '', '1.6', '', '510', '321', '', '', 0, '', '', '2016/08/23 11:48:48 am', 'Ring frame'),
(5, 'please select-----', '', '', '2016-08-25', 'Day Shift', 'UNIT-1', 'please select-----', 'hhh6565', 'hgh6556', '40 cw', '22 ', '222', '', '21', '', '', '', '', '', '', '', '', '', '', '21', '', '23', '', '211', '233', '', '', 0, '', '', '2016/08/23 11:55:45 am', 'Ring frame'),
(6, 'please select-----', '', '', '2016-08-23', 'Evening Shift', 'UNIT-1', 'please select-----', 'hhh6565', 'hgh6556', '40 cw', '11', '123', '', '122', '', '', '', '', '', '', '', '', '', '', '10', '', '99', '', '120', '44', '', '', 0, '', '', '2016/08/23 01:09:18 pm', 'Ring frame'),
(7, 'please select-----', '', '', '2016-08-23', 'Night Shift', 'UNIT-1', 'please select-----', 'hhh6565', 'hgh6556', '40 cw', '33', '122', '', '12', '', '', '', '', '', '', '', '', '', '', '31', '', '32', '', '121', '321', '', '', 0, '', '', '2016/08/23 02:08:28 pm', 'Ring frame'),
(8, 'please select-----', '', '', '0000-00-00', 'select--------------', 'select--------------', 'please select-----', '', 'carding', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '2016/10/28 02:34:05 am', 'Ring frame'),
(9, 'please select-----', '', '', '0000-00-00', 'select--------------', 'select--------------', 'please select-----', 'please select-----', 'please select-----', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '2016/10/28 02:35:27 am', 'Ring frame');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `salesagents`
--

INSERT INTO `salesagents` (`id`, `agentcode`, `agentname`, `address`, `city`, `state`, `phone`, `commissionper`, `ledgerac`, `datetime`) VALUES
(1, '5445', 'hgghhbj', 'hbjbhj', 'bhj', 'hjbhbj', 'hbj', 'bhhb', 'hbj', '2016/11/04 01:40:29 am');

-- --------------------------------------------------------

--
-- Table structure for table `salesbagtypes`
--

CREATE TABLE IF NOT EXISTS `salesbagtypes` (
`id` int(22) NOT NULL,
  `bagtype` varchar(222) NOT NULL,
  `bagmodel` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `salesbagtypes`
--

INSERT INTO `salesbagtypes` (`id`, `bagtype`, `bagmodel`, `datetime`) VALUES
(1, '24*1.89', 'BAGS', '2016/11/04 04:01:32 am'),
(2, '32*1.89', 'BORAS', '2016/11/04 04:01:45 am'),
(3, '40*1.30', 'BAG', '2016/11/04 04:01:59 am'),
(4, '350*2.5', 'CARTONE', '2016/11/04 04:02:24 am'),
(5, '504*1.89', 'PALLET', '2016/11/04 04:02:37 am');

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
(1, 'raasfasf', '', 'assfa', '', '11111111111111111', '', '', '', '', '', '', '0000000000000', '', '', '', '', '', '', '', 'wedseaasdqfdw', '', '2016/11/01 03:50:17 am');

-- --------------------------------------------------------

--
-- Table structure for table `salescounts`
--

CREATE TABLE IF NOT EXISTS `salescounts` (
`id` int(22) NOT NULL,
  `countnumber` varchar(222) NOT NULL,
  `counttype` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
(9, '21/1', 'KARDED WARP(B.C.I)', '2016/11/04 04:00:53 am');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `salesinvoicentry`
--

INSERT INTO `salesinvoicentry` (`id`, `invno`, `invtype`, `exportinv`, `exportinvtype`, `state`, `finalprovosional`, `invissuedate`, `invissuetime`, `goodsdate`, `goodstime`, `duedaysdate`, `duedaystime`, `buyername`, `vatno`, `otherthanconsignee`, `agent`, `purorder`, `modeoftransport`, `vehicleregno`, `containerno`, `salecontactno`, `salecontactdate`, `loading`, `loadingg`, `shippingmark`, `despatchedto`, `finaldestination`, `termsofdelivery`, `currency`, `currencyy`, `otlno`, `exrangeno`, `waybillno`, `waybillnoo`, `lrno`, `lrnoo`, `areano`, `areanoo`, `frightno`, `conversionrate`, `conversionratedate`, `itemname`, `verity`, `sizecount`, `itemdesc`, `acname`, `typeofpack`, `lotnocomm`, `bagfrom`, `bagto`, `bagtype`, `bagsize`, `units`, `unittobeconverted`, `unittobeconvertedd`, `nos`, `grosswt`, `tarewt`, `netwt`, `exmill`, `rate`, `totunitval`, `amount`, `discountchecked`, `discountper`, `discountval`, `insurancechecked`, `insuranceper`, `insuranceval`, `pfchecked`, `pfper`, `pfval`, `frightchecked`, `frightper`, `frightval`, `courierchecked`, `courierper`, `courierval`, `bedchecked`, `bedper`, `bedval`, `aedchecked`, `aedper`, `aedval`, `cesschecked`, `cessper`, `cessval`, `vatchecked`, `vatper`, `vatval`, `cstchecked`, `cstper`, `cstval`, `epcgchecked`, `epcgper`, `epcgval`, `otherschecked`, `othersper`, `othersval`, `mislaniuschecked`, `mislaniusper`, `mislaniusval`, `datetime`) VALUES
(4, ' CY 772', 'select--------------', 'select--------------', 'select--------------', 'select--------------', 'select--------------', '2016-11-03', '', '', '', '', '', 'please select-----', '', '', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', '', '', '', '', '', '', '', '', '', 'please select-----', 'please select-----', 'please select-----', 'please select-----', 'VISHAL TEXTILE CORPORATION ICHALKARANJI', 'select--------------', '', '1', '100', 'please select-----', '', 'kgs', '', '', '4800', '', '', '', '', '10', '', '48000', '', '', '', 'checked', '', '', '', '', '', 'checked', '', '2000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'checked', '', '1001', '', '', '', '', '', '', '', '', '', '2016/11/03 11:30:48 pm'),
(5, '123', 'please select-----', 'select--------------', 'select--------------', 'select--------------', 'select--------------', '', '', '', '', '', '', 'please select-----', '', '', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', '', '', '', '', '', '', '', '', '', 'WASTE-COTTON', '10/1 KARDED WARP', '44/1 KW', 'CY', '', 'select--------------', '', '', '', 'please select-----', '', 'kgs', '', '', '1200', '', '', '', '', '12', '', '23323232', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/11/05 11:37:11 pm'),
(6, '123', 'please select-----', 'select--------------', 'select--------------', 'select--------------', 'select--------------', '2016-11-05', '', '', '', '', '', 'please select-----', '', '', 'please select-----', '', '', '', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', '', '', '', '', '', '', '', '', '', 'CONE YARN', '10/1 KARDED WARP', '44/1 KW', 'please select-----', '', 'select--------------', '', '', '', 'please select-----', '', 'kgs', '', '', '1200', '', '', '', '', '12', '', '12312332', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2016/11/05 11:38:58 pm'),
(7, '772', 'TAX INVOICE', 'select--------------', 'select--------------', 'select--------------', 'select--------------', '2016-11-05', '17:55', '2016-11-05', '20:01', '', '', 'raasfasf', '27250285718', '', 'hgghhbj', '', 'DHAHAHAHA', 'ddddddddddddd', '', '', '', '', '', '', '', '', '', 'select--------------', '', '', '', 'xxxxx', '', 'xxxxx', '', '', '', '', '', '', 'COTTON-LINT', '10/1 KARDED WARP', '44/1 KW', 'CY', 'jyothirmail', 'select--------------', '', '1', '100', '24*1.89', '', 'kgs', '', '', '', '5000.00', '', '4800', '', '10', '', '4800', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1001', '', '', '', '', '', '2000', '', '', '', '2016/11/06 05:23:08 am');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `salessizecountmaster`
--

INSERT INTO `salessizecountmaster` (`id`, `itemname`, `itemcode`, `verity`, `veritycode`, `sizecount`, `sizecountcode`, `slno`, `datetime`) VALUES
(1, 'CONE YARN', 'CY', '44/1 KARDED WARP', '44/1 KW', '44/1 KW', '44/1 KW', '1', '2016/11/04 04:09:23 am'),
(2, 'CONE YARN', 'CY', '40/1 COMBED HOSIERY', '40/1 CH', '40/1 CH', '40/1 CH', '2', '2016/11/04 04:10:03 am'),
(3, 'CONE YARN', 'CY', '40/1 KARDED HOSIERY', '40/1 KH', '40/1 KH', '40/1 KH', '3', '2016/11/04 04:10:47 am');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `salesverity`
--

INSERT INTO `salesverity` (`id`, `itemname`, `itemcode`, `verity`, `veritycode`, `slno`, `datetime`) VALUES
(1, 'CONE YARN', 'CY', '10/1 KARDED WARP', '10/1 KW', '1', '2016/11/04 04:06:26 am'),
(2, 'CONE YARN', 'CY', '21/1 KARDED HOSIERY', '21/1 KH', '2', '2016/11/04 04:07:02 am'),
(3, 'CONE YARN', 'CY', '30/1 COMBED WARP', '30/1 CW', '3', '2016/11/04 04:07:39 am'),
(4, 'CONE YARN', 'CY', '20/1 COMBED WARP', '20/1 CW', '4', '2016/11/04 04:08:19 am');

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

-- --------------------------------------------------------

--
-- Table structure for table `servicebill`
--

CREATE TABLE IF NOT EXISTS `servicebill` (
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
-- Dumping data for table `servicebill`
--

INSERT INTO `servicebill` (`id`, `entrydate`, `referenceno`, `purorderno`, `deptname`, `deptcode`, `supplier`, `purpose`, `transporttype`, `repaircharges`, `slno`, `referencedate`, `purorderdate`, `machinename`, `machineno`, `lrno`, `gatepassno`, `itemname`, `quantity`, `rate`, `value`, `servicebill`, `frieght`, `courier`, `bed`, `aed`, `cess`, `vat`, `cst`, `others`, `datetime`) VALUES
(1, '2016-08-10', 'dv', 'dfsdfdf', 'df', 'd', 'df', '', 'type1', 'vd', 'df', '', '', 'dvfdvfdf', 'dffd', 'df', 'df', 'd', 'df', 'dv', 'd', 'dsd', 'df', 'df', 'df', 'd', 'df', 'dv', 'df', 'df', '2016/08/22 01:24:32 pm');

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
-- Table structure for table `storepurchaseorder`
--

CREATE TABLE IF NOT EXISTS `storepurchaseorder` (
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
-- Dumping data for table `storepurchaseorder`
--

INSERT INTO `storepurchaseorder` (`id`, `date`, `orderno`, `quatationno`, `ordertype`, `supplier`, `matter`, `deliverydate`, `subject`, `itemname`, `itemcode`, `qty`, `rate`, `amount`, `finhead`, `narration`, `make`, `billamount`, `discount`, `insuranace`, `pandf`, `fright`, `courier`, `vat`, `cst`, `tax`, `othercharges`, `tedrmsandconditions`, `narration1`, `designation`, `nameapprovedby`, `ccto`, `datetime`) VALUES
(1, '2016-08-16', 'cdsds', 'dsdc', 'PURCHASE ORDER', 'sddcs', 'ddc', '2016', 'cdscsd', 'please select-----', 'please select-----', 'ds', 'ds', 'ds', 'ds', 'ds', 'd', 'ds', 'cdsds', 'dsdcs', 'ds', 'ds', 'ds', '', '', '', 'ds', 'dc', 'ds', 'dc', 'ds', 'cd', '2016/08/22 12:43:44 pm');

-- --------------------------------------------------------

--
-- Table structure for table `storesfinheads`
--

CREATE TABLE IF NOT EXISTS `storesfinheads` (
`id` int(44) NOT NULL,
  `fincode` varchar(44) NOT NULL,
  `finname` varchar(44) NOT NULL,
  `datetime` varchar(44) NOT NULL
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `storesmachinarymaster`
--

INSERT INTO `storesmachinarymaster` (`id`, `deptname`, `code`, `machinecode`, `machinename`, `datetime`) VALUES
(1, 'fddddddddddddddddd', 'DSC', 'SD', 'SD', '2016/08/22 11:03:16 am');

-- --------------------------------------------------------

--
-- Table structure for table `storesmainheads`
--

CREATE TABLE IF NOT EXISTS `storesmainheads` (
`id` int(55) NOT NULL,
  `deptcode` varchar(222) NOT NULL,
  `deptname` varchar(222) NOT NULL,
  `datetime` varchar(222) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `storesmainheads`
--

INSERT INTO `storesmainheads` (`id`, `deptcode`, `deptname`, `datetime`) VALUES
(1, 'aaaaaaaaaaaaaaaa', 'weefwef', '2016/07/28 02:51:03 pm');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `veriertymaster`
--

INSERT INTO `veriertymaster` (`id`, `itemname`, `itemcode`, `veriety`, `verietycode`, `slno`, `datetime`) VALUES
(1, 'please select-----', 'ds', 'dfs', 'sd', 'sd', '2016/08/15 11:39:21 pm');

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
-- Indexes for table `gatepass`
--
ALTER TABLE `gatepass`
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
-- Indexes for table `indententry`
--
ALTER TABLE `indententry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indentrequest`
--
ALTER TABLE `indentrequest`
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
-- Indexes for table `issueslip`
--
ALTER TABLE `issueslip`
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
-- Indexes for table `purchaseentry`
--
ALTER TABLE `purchaseentry`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaseentry1`
--
ALTER TABLE `purchaseentry1`
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
-- Indexes for table `servicebill`
--
ALTER TABLE `servicebill`
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
-- Indexes for table `storepurchaseorder`
--
ALTER TABLE `storepurchaseorder`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storesfinheads`
--
ALTER TABLE `storesfinheads`
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
-- Indexes for table `storespurchaserequsation`
--
ALTER TABLE `storespurchaserequsation`
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
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `autoconer`
--
ALTER TABLE `autoconer`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
-- AUTO_INCREMENT for table `gatepass`
--
ALTER TABLE `gatepass`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT for table `indententry`
--
ALTER TABLE `indententry`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `indentrequest`
--
ALTER TABLE `indentrequest`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `issueslip`
--
ALTER TABLE `issueslip`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `itemmaster`
--
ALTER TABLE `itemmaster`
MODIFY `slno` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `productionconvfactor`
--
ALTER TABLE `productionconvfactor`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `productioncountmaster`
--
ALTER TABLE `productioncountmaster`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `productiondepartments`
--
ALTER TABLE `productiondepartments`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `productionlotnos`
--
ALTER TABLE `productionlotnos`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `productionmachines`
--
ALTER TABLE `productionmachines`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `productionpackingmaster`
--
ALTER TABLE `productionpackingmaster`
MODIFY `id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `productionpower`
--
ALTER TABLE `productionpower`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `productionstoapgereason`
--
ALTER TABLE `productionstoapgereason`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `productionsupervisor`
--
ALTER TABLE `productionsupervisor`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `purchaseentry`
--
ALTER TABLE `purchaseentry`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `purchaseentry1`
--
ALTER TABLE `purchaseentry1`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
-- AUTO_INCREMENT for table `ringframe`
--
ALTER TABLE `ringframe`
MODIFY `id` int(56) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
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
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `salesbagtypes`
--
ALTER TABLE `salesbagtypes`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `salesbuyers`
--
ALTER TABLE `salesbuyers`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `salescounts`
--
ALTER TABLE `salescounts`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
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
MODIFY `id` int(222) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `salesitemmaster`
--
ALTER TABLE `salesitemmaster`
MODIFY `id` int(222) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `salessizecountmaster`
--
ALTER TABLE `salessizecountmaster`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `salesverity`
--
ALTER TABLE `salesverity`
MODIFY `id` int(222) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `schedulemaster`
--
ALTER TABLE `schedulemaster`
MODIFY `id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `servicebill`
--
ALTER TABLE `servicebill`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `storepurchaseorder`
--
ALTER TABLE `storepurchaseorder`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `storesfinheads`
--
ALTER TABLE `storesfinheads`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `storesitemcreation`
--
ALTER TABLE `storesitemcreation`
MODIFY `id` int(44) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `storesmachinarymaster`
--
ALTER TABLE `storesmachinarymaster`
MODIFY `id` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `storesmainheads`
--
ALTER TABLE `storesmainheads`
MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `storespurchaserequsation`
--
ALTER TABLE `storespurchaserequsation`
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
MODIFY `id` int(22) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
