-- phpMyAdmin SQL Dump
-- version 2.11.9.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2014 at 03:45 PM
-- Server version: 5.1.37
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `tms`
--
CREATE DATABASE `tms` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `tms`;

-- --------------------------------------------------------

--
-- Table structure for table `basicinfo_dangke`
--

CREATE TABLE IF NOT EXISTS `basicinfo_dangke` (
  `dangkeid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Qishu` varchar(20) COLLATE utf8_bin NOT NULL,
  `Pass` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`dangkeid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `basicinfo_dangke`
--


-- --------------------------------------------------------

--
-- Table structure for table `basicinfo_socialwork`
--

CREATE TABLE IF NOT EXISTS `basicinfo_socialwork` (
  `workid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Associate` varchar(20) COLLATE utf8_bin NOT NULL,
  `Position` varchar(20) COLLATE utf8_bin NOT NULL,
  `Duration` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`workid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `basicinfo_socialwork`
--

INSERT INTO `basicinfo_socialwork` (`workid`, `id`, `Associate`, `Position`, `Duration`) VALUES
(6, 6, '系学生组理论学习与实践中心', '干事', '1234'),
(5, 6, '党支部', '部长', '123');

-- --------------------------------------------------------

--
-- Table structure for table `dangkexiaozu_activity`
--

CREATE TABLE IF NOT EXISTS `dangkexiaozu_activity` (
  `acitivityid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Theme` varchar(20) COLLATE utf8_bin NOT NULL,
  `Attend` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`acitivityid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dangkexiaozu_activity`
--

INSERT INTO `dangkexiaozu_activity` (`acitivityid`, `id`, `Time`, `Theme`, `Attend`) VALUES
(1, 6, '04/28/2014', '不知道', '是'),
(2, 6, '04/27/2014', '是', '否');

-- --------------------------------------------------------

--
-- Table structure for table `dangkexiaozu_qiusuo`
--

CREATE TABLE IF NOT EXISTS `dangkexiaozu_qiusuo` (
  `qiusuoid` int(11) NOT NULL AUTO_INCREMENT,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `id` int(10) NOT NULL,
  `Level` varchar(20) COLLATE utf8_bin NOT NULL,
  `Score` int(11) NOT NULL,
  PRIMARY KEY (`qiusuoid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dangkexiaozu_qiusuo`
--

INSERT INTO `dangkexiaozu_qiusuo` (`qiusuoid`, `Time`, `id`, `Level`, `Score`) VALUES
(1, '03/30/2014', 6, '校内复赛', 97),
(2, '03/31/2014', 6, '系内初赛', 100);

-- --------------------------------------------------------

--
-- Table structure for table `dangkexiaozu_sibian`
--

CREATE TABLE IF NOT EXISTS `dangkexiaozu_sibian` (
  `sibianid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Theme` varchar(20) COLLATE utf8_bin NOT NULL,
  `Canjia` varchar(10) COLLATE utf8_bin NOT NULL,
  `Haotie` varchar(10) COLLATE utf8_bin NOT NULL,
  `pingfen` int(11) NOT NULL,
  PRIMARY KEY (`sibianid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dangkexiaozu_sibian`
--

INSERT INTO `dangkexiaozu_sibian` (`sibianid`, `id`, `Time`, `Theme`, `Canjia`, `Haotie`, `pingfen`) VALUES
(1, 6, '03/30/2014', 'FUCK', '否', '否', 5),
(2, 6, '04/21/2014', 'SHIT', '否', '是', 0),
(3, 6, '03/30/2014', '1234', '是', '否', 20);

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE IF NOT EXISTS `useraccount` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `studentid` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `class` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `dangzhibu` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mail` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cell` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tmstype` int(11) DEFAULT NULL,
  `time` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `stage` int(2) DEFAULT NULL,
  `adminroot` int(11) NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `account`, `name`, `studentid`, `class`, `dangzhibu`, `mail`, `cell`, `tmstype`, `time`, `stage`, `adminroot`, `password`) VALUES
(6, 'mawei', '马玮', '2010010212', 'CE02', '结01党支部', 'mw10@foxmail.com', '123', 0, '04/06/2014', 2, 5, '19911101'),
(7, 'niwei', '倪伟', '2010010222', 'CE01', '结01党支部', 'mw10000@gg.com', '15201524744', 0, '123432', 0, 2, 'niwei'),
(8, 'zhangsan', '张三', '2010010112', 'CE33', '结01党支部', '1234@123.com', '15201524444', 0, NULL, 0, 2, '123456'),
(9, 'lisi', '李四', '2010222222', '辅导员', '结01党支部', 'a@1.com', '15201524713', 0, NULL, 0, 0, '123456'),
(11, 'lisii', '21321', '4324532', 'CE11', '结01党支部', '32432', '123', 0, NULL, 0, 0, '123456'),
(13, '123456', '123456', '123456', 'CE31', '结01党支部', '123456', '123456', 0, NULL, 0, 0, '123456'),
(14, '2010010211', '张三', '2010010211', 'CE31', '结01党支部', '12324@21312.ccc', '15201155555', 0, '', 0, 0, '19911101');

-- --------------------------------------------------------

--
-- Table structure for table `yubei_huibao`
--

CREATE TABLE IF NOT EXISTS `yubei_huibao` (
  `huibaoid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Content` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`huibaoid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `yubei_huibao`
--

INSERT INTO `yubei_huibao` (`huibaoid`, `id`, `Time`, `Content`) VALUES
(1, 6, '03/31/2014', '第一次'),
(2, 6, '03/30/2014', '第二次');

-- --------------------------------------------------------

--
-- Table structure for table `yubei_quannian`
--

CREATE TABLE IF NOT EXISTS `yubei_quannian` (
  `quannianid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Tijiao` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`quannianid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `yubei_quannian`
--

INSERT INTO `yubei_quannian` (`quannianid`, `id`, `Time`, `Tijiao`) VALUES
(1, 6, '03/31/2014', '否');

-- --------------------------------------------------------

--
-- Table structure for table `yubei_zhongqi`
--

CREATE TABLE IF NOT EXISTS `yubei_zhongqi` (
  `zhongqiid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Tijiao` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`zhongqiid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `yubei_zhongqi`
--

INSERT INTO `yubei_zhongqi` (`zhongqiid`, `id`, `Time`, `Tijiao`) VALUES
(1, 6, '04/03/2014', '是');

-- --------------------------------------------------------

--
-- Table structure for table `yubei_zhuanzheng`
--

CREATE TABLE IF NOT EXISTS `yubei_zhuanzheng` (
  `zhuanzhengid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Total` int(11) NOT NULL,
  `Agree` int(11) NOT NULL,
  `Against` int(11) NOT NULL,
  `Giveup` int(11) NOT NULL,
  PRIMARY KEY (`zhuanzhengid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `yubei_zhuanzheng`
--

INSERT INTO `yubei_zhuanzheng` (`zhuanzhengid`, `id`, `Time`, `Total`, `Agree`, `Against`, `Giveup`) VALUES
(1, 6, '04/27/2014', 30, 30, 34, 32);

-- --------------------------------------------------------

--
-- Table structure for table `zhibu_fazhanhui`
--

CREATE TABLE IF NOT EXISTS `zhibu_fazhanhui` (
  `fazhanhuiid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Total` int(11) NOT NULL,
  `Agree` int(11) NOT NULL,
  `Against` int(11) NOT NULL,
  `Giveup` int(11) NOT NULL,
  PRIMARY KEY (`fazhanhuiid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Dumping data for table `zhibu_fazhanhui`
--

INSERT INTO `zhibu_fazhanhui` (`fazhanhuiid`, `id`, `Time`, `Total`, `Agree`, `Against`, `Giveup`) VALUES
(9, 6, '04/20/2014', 30, 24, 34, 32);

-- --------------------------------------------------------

--
-- Table structure for table `zhibu_huibao`
--

CREATE TABLE IF NOT EXISTS `zhibu_huibao` (
  `huibaoid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Content` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`huibaoid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `zhibu_huibao`
--

INSERT INTO `zhibu_huibao` (`huibaoid`, `id`, `Time`, `Content`) VALUES
(1, 6, '04/13/2014', 'SiQUANJIA1'),
(2, 6, '04/09/2014', 'sxhb2');

-- --------------------------------------------------------

--
-- Table structure for table `zhibu_huodong`
--

CREATE TABLE IF NOT EXISTS `zhibu_huodong` (
  `huodongid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Location` varchar(20) COLLATE utf8_bin NOT NULL,
  `Theme` varchar(50) COLLATE utf8_bin NOT NULL,
  `Results` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`huodongid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `zhibu_huodong`
--

INSERT INTO `zhibu_huodong` (`huodongid`, `id`, `Time`, `Location`, `Theme`, `Results`) VALUES
(1, 6, '04/02/2014', '不知道', '我坚信', '否');

-- --------------------------------------------------------

--
-- Table structure for table `zhibu_lianxiqingkuang`
--

CREATE TABLE IF NOT EXISTS `zhibu_lianxiqingkuang` (
  `qingkuangid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Location` varchar(20) COLLATE utf8_bin NOT NULL,
  `Contact` varchar(20) COLLATE utf8_bin NOT NULL,
  `Content` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`qingkuangid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `zhibu_lianxiqingkuang`
--

INSERT INTO `zhibu_lianxiqingkuang` (`qingkuangid`, `id`, `Time`, `Location`, `Contact`, `Content`) VALUES
(1, 6, '05/05/2014', 'Cao', 'SS', 'NMB'),
(2, 6, '04/25/2014', '6教', 'SS', '鬼知道');

-- --------------------------------------------------------

--
-- Table structure for table `zizhu_huodong`
--

CREATE TABLE IF NOT EXISTS `zizhu_huodong` (
  `huodong` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Style` varchar(20) COLLATE utf8_bin NOT NULL,
  `Position` varchar(20) COLLATE utf8_bin NOT NULL,
  `Content` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`huodong`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `zizhu_huodong`
--

INSERT INTO `zizhu_huodong` (`huodong`, `id`, `Time`, `Style`, `Position`, `Content`) VALUES
(1, 6, '04/06/2014', 'shit', 'fuck', '不知道'),
(2, 9, '2013', '5', '2', '123'),
(3, 9, '2013', '座谈会2', '四教', '还是不知道'),
(4, 6, '04/05/2014', '53', '324', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `zizhu_lilun`
--

CREATE TABLE IF NOT EXISTS `zizhu_lilun` (
  `lilunid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Style` varchar(20) COLLATE utf8_bin NOT NULL,
  `Content` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`lilunid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `zizhu_lilun`
--

INSERT INTO `zizhu_lilun` (`lilunid`, `id`, `Time`, `Style`, `Content`) VALUES
(1, 6, '04/22/2014', '座谈会', '扯淡'),
(2, 6, '04/06/2014', '座谈会', '再次扯淡');

-- --------------------------------------------------------

--
-- Table structure for table `zizhu_tougao`
--

CREATE TABLE IF NOT EXISTS `zizhu_tougao` (
  `tougaoid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `Time` varchar(20) COLLATE utf8_bin NOT NULL,
  `Title` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`tougaoid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `zizhu_tougao`
--

INSERT INTO `zizhu_tougao` (`tougaoid`, `id`, `Time`, `Title`) VALUES
(1, 6, '04/08/2014', '法撒旦法123');
