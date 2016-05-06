-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `test`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `default_temp1`
-- 

CREATE TABLE `default_temp1` (
  `id_time` int(11) NOT NULL auto_increment,
  `temp` float NOT NULL,
  `humidity_min` float NOT NULL,
  `humidity_max` float NOT NULL,
  PRIMARY KEY  (`id_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `default_temp1`
-- 

INSERT INTO `default_temp1` VALUES (1, 39, 23, 36);
INSERT INTO `default_temp1` VALUES (2, 12, 13, 0);
INSERT INTO `default_temp1` VALUES (3, 16, 13, 17);
INSERT INTO `default_temp1` VALUES (4, 20, 19, 22);
INSERT INTO `default_temp1` VALUES (5, 18, 22, 17);
INSERT INTO `default_temp1` VALUES (6, 16, 18, 18);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `default_temp2`
-- 

CREATE TABLE `default_temp2` (
  `id_time` int(11) NOT NULL auto_increment,
  `temp` float NOT NULL,
  `humidity_min` float NOT NULL,
  `humidity_max` float NOT NULL,
  PRIMARY KEY  (`id_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `default_temp2`
-- 

INSERT INTO `default_temp2` VALUES (1, 32, 30, 50);
INSERT INTO `default_temp2` VALUES (2, 31, 30, 50);
INSERT INTO `default_temp2` VALUES (3, 30, 40, 60);
INSERT INTO `default_temp2` VALUES (4, 27, 40, 60);
INSERT INTO `default_temp2` VALUES (5, 25, 50, 70);
INSERT INTO `default_temp2` VALUES (6, 21, 50, 70);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `default_temp3`
-- 

CREATE TABLE `default_temp3` (
  `id_time` int(11) NOT NULL auto_increment,
  `temp` float NOT NULL,
  `humidity_min` float NOT NULL,
  `humidity_max` float NOT NULL,
  PRIMARY KEY  (`id_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `default_temp3`
-- 

INSERT INTO `default_temp3` VALUES (1, 33, 30, 50);
INSERT INTO `default_temp3` VALUES (2, 33, 30, 50);
INSERT INTO `default_temp3` VALUES (3, 30, 40, 60);
INSERT INTO `default_temp3` VALUES (4, 25, 40, 60);
INSERT INTO `default_temp3` VALUES (5, 23, 50, 70);
INSERT INTO `default_temp3` VALUES (6, 18, 50, 70);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `default_temp4`
-- 

CREATE TABLE `default_temp4` (
  `id_time` int(11) NOT NULL auto_increment,
  `temp` float NOT NULL,
  `humidity_min` float NOT NULL,
  `humidity_max` float NOT NULL,
  PRIMARY KEY  (`id_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `default_temp4`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `default_temp5`
-- 

CREATE TABLE `default_temp5` (
  `id_time` int(11) NOT NULL auto_increment,
  `temp` float NOT NULL,
  `humidity_min` float NOT NULL,
  `humidity_max` float NOT NULL,
  PRIMARY KEY  (`id_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `default_temp5`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `history`
-- 

CREATE TABLE `history` (
  `id` int(11) NOT NULL auto_increment,
  `Date_start` date NOT NULL,
  `Date_ent` date NOT NULL,
  `count_date` int(11) NOT NULL,
  `mode` varchar(15) NOT NULL,
  `t1` float NOT NULL,
  `t2` float NOT NULL,
  `t3` float NOT NULL,
  `t4` float NOT NULL,
  `t5` float NOT NULL,
  `t6` float NOT NULL,
  `h1` float NOT NULL,
  `h2` float NOT NULL,
  `h3` float NOT NULL,
  `h4` float NOT NULL,
  `h5` float NOT NULL,
  `h6` float NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `mode` (`mode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

-- 
-- dump ตาราง `history`
-- 

INSERT INTO `history` VALUES (1, '0000-00-00', '0000-00-00', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (2, '2015-11-24', '2015-11-24', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (3, '0000-00-00', '2015-11-25', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (4, '2015-11-25', '2015-11-26', 0, '9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (5, '2015-11-26', '2015-11-26', 0, '5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (6, '2015-11-26', '2015-11-26', 0, '3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (7, '2015-11-26', '2015-11-26', 0, '7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (8, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (9, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (10, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (11, '2015-11-26', '2015-11-26', 0, '9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (12, '2015-11-26', '2015-11-26', 0, '7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (13, '2015-11-26', '2015-11-26', 0, '9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (14, '2015-11-26', '2015-11-26', 0, '10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (15, '2015-11-26', '2015-11-26', 0, '7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (16, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (17, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (18, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (19, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (20, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (21, '2015-11-26', '2015-11-26', 0, '7', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (22, '2015-11-26', '2015-11-26', 0, '10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (23, '2015-11-26', '2015-11-25', 0, '9', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (24, '2015-11-25', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (25, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (26, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (27, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (28, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (29, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (30, '2015-11-26', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (31, '2015-11-22', '2015-11-26', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (32, '2015-11-23', '2015-11-23', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (33, '2015-11-23', '2015-11-23', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (34, '2015-11-23', '2016-01-03', 0, '6', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `history` VALUES (35, '2016-01-03', '2016-01-03', 0, '5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `manual_temp1`
-- 

CREATE TABLE `manual_temp1` (
  `id_time` int(11) NOT NULL auto_increment,
  `temp` float NOT NULL,
  `humidity_min` float NOT NULL,
  `humidity_max` float NOT NULL,
  PRIMARY KEY  (`id_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `manual_temp1`
-- 

INSERT INTO `manual_temp1` VALUES (1, 42, 30, 50);
INSERT INTO `manual_temp1` VALUES (2, 27, 30, 50);
INSERT INTO `manual_temp1` VALUES (3, 24, 40, 60);
INSERT INTO `manual_temp1` VALUES (4, 21, 40, 60);
INSERT INTO `manual_temp1` VALUES (5, 19, 50, 70);
INSERT INTO `manual_temp1` VALUES (6, 18, 50, 70);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `manual_temp2`
-- 

CREATE TABLE `manual_temp2` (
  `id_time` int(11) NOT NULL auto_increment,
  `temp` float NOT NULL,
  `humidity_min` float NOT NULL,
  `humidity_max` float NOT NULL,
  PRIMARY KEY  (`id_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- dump ตาราง `manual_temp2`
-- 

INSERT INTO `manual_temp2` VALUES (1, 38, 0, 0);
INSERT INTO `manual_temp2` VALUES (2, 0, 0, 0);
INSERT INTO `manual_temp2` VALUES (3, 0, 0, 0);
INSERT INTO `manual_temp2` VALUES (4, 0, 0, 0);
INSERT INTO `manual_temp2` VALUES (5, 0, 0, 0);
INSERT INTO `manual_temp2` VALUES (6, 0, 0, 0);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `manual_temp3`
-- 

CREATE TABLE `manual_temp3` (
  `id_time` int(11) NOT NULL auto_increment,
  `temp` float NOT NULL,
  `humidity_min` float NOT NULL,
  `humidity_max` float NOT NULL,
  PRIMARY KEY  (`id_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- dump ตาราง `manual_temp3`
-- 

INSERT INTO `manual_temp3` VALUES (1, 45, 0, 0);
INSERT INTO `manual_temp3` VALUES (2, 0, 0, 0);
INSERT INTO `manual_temp3` VALUES (3, 0, 0, 0);
INSERT INTO `manual_temp3` VALUES (4, 0, 0, 0);
INSERT INTO `manual_temp3` VALUES (5, 0, 0, 0);
INSERT INTO `manual_temp3` VALUES (6, 0, 0, 0);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `manual_temp4`
-- 

CREATE TABLE `manual_temp4` (
  `id_time` int(11) NOT NULL auto_increment,
  `temp` float NOT NULL,
  `humidity_min` float NOT NULL,
  `humidity_max` float NOT NULL,
  PRIMARY KEY  (`id_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `manual_temp4`
-- 

INSERT INTO `manual_temp4` VALUES (1, 40, 0, 0);
INSERT INTO `manual_temp4` VALUES (2, 0, 0, 0);
INSERT INTO `manual_temp4` VALUES (3, 0, 0, 0);
INSERT INTO `manual_temp4` VALUES (4, 0, 0, 0);
INSERT INTO `manual_temp4` VALUES (5, 0, 0, 0);
INSERT INTO `manual_temp4` VALUES (6, 0, 0, 0);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `manual_temp5`
-- 

CREATE TABLE `manual_temp5` (
  `id_time` int(11) NOT NULL auto_increment,
  `temp` float NOT NULL,
  `humidity_min` float NOT NULL,
  `humidity_max` float NOT NULL,
  PRIMARY KEY  (`id_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- dump ตาราง `manual_temp5`
-- 

INSERT INTO `manual_temp5` VALUES (1, 42, 0, 0);
INSERT INTO `manual_temp5` VALUES (2, 6, 0, 0);
INSERT INTO `manual_temp5` VALUES (3, 0, 0, 0);
INSERT INTO `manual_temp5` VALUES (4, 0, 0, 0);
INSERT INTO `manual_temp5` VALUES (5, 0, 0, 0);
INSERT INTO `manual_temp5` VALUES (6, 0, 0, 0);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `member`
-- 

CREATE TABLE `member` (
  `UserID` int(3) unsigned zerofill NOT NULL auto_increment,
  `Username` varchar(20) collate utf8_bin NOT NULL,
  `Password` varchar(20) collate utf8_bin NOT NULL,
  `Name` varchar(100) collate utf8_bin NOT NULL,
  `LastName` varchar(20) collate utf8_bin NOT NULL,
  `Email` varchar(25) collate utf8_bin NOT NULL,
  `Telephone` varchar(11) collate utf8_bin NOT NULL,
  `Status` enum('ADMIN','USER') collate utf8_bin NOT NULL default 'USER',
  PRIMARY KEY  (`UserID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `member`
-- 

INSERT INTO `member` VALUES (001, 0x61646d696e, 0x31323334, 0x4d6179, 0x6e61726f6b, 0x616c7332315f32313340686f746d61696c2e636f6d, 0x3039352d35333735313532, 0x41444d494e);
INSERT INTO `member` VALUES (002, 0x75736572, 0x31323334, 0x55534552, 0x555345522046414441, 0x46414441, 0x3030392d2d383838, 0x55534552);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `profile`
-- 

CREATE TABLE `profile` (
  `mode` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY  (`mode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `profile`
-- 

INSERT INTO `profile` VALUES (1, 'default_temp1', 'default');
INSERT INTO `profile` VALUES (2, 'default_temp2', 'default');
INSERT INTO `profile` VALUES (3, 'default_temp3', 'default');
INSERT INTO `profile` VALUES (4, 'default_temp4', 'default');
INSERT INTO `profile` VALUES (5, 'default_temp5', 'default');
INSERT INTO `profile` VALUES (6, 'manual_temp1', 'manual');
INSERT INTO `profile` VALUES (7, 'manual_temp2', 'manual');
INSERT INTO `profile` VALUES (8, 'manual_temp3', 'manual');
INSERT INTO `profile` VALUES (9, 'manual_temp4', 'manual');
INSERT INTO `profile` VALUES (10, 'manual_temp5', 'manual');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `start`
-- 

CREATE TABLE `start` (
  `id` int(11) NOT NULL auto_increment,
  `UserID` int(3) unsigned zerofill NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `mode` int(20) NOT NULL,
  `status` varchar(4) NOT NULL,
  `count_date` int(11) NOT NULL,
  `alert` int(1) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `UserID` (`UserID`),
  UNIQUE KEY `start` (`start`),
  UNIQUE KEY `end` (`end`),
  KEY `count_date` (`count_date`),
  KEY `mode` (`mode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `start`
-- 

INSERT INTO `start` VALUES (1, 001, '2016-01-03', '2016-02-13', 2, 'on', -37, 0);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `temperature`
-- 

CREATE TABLE `temperature` (
  `id` int(11) NOT NULL auto_increment COMMENT 'unique ID',
  `event` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `humi1` float NOT NULL,
  `humi2` float NOT NULL,
  `humi3` float NOT NULL,
  `humi4` float NOT NULL,
  `temp1` double NOT NULL,
  `temp2` float NOT NULL,
  `temp3` float NOT NULL,
  `temp4` float NOT NULL,
  `avg_t` float NOT NULL,
  `avg_h` float NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `avg_t` (`avg_t`),
  KEY `avg_h` (`avg_h`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `temperature`
-- 

INSERT INTO `temperature` VALUES (1, '2015-11-26 23:36:01', 54.1, 51.7, 1.4, 60, 32, 33.4, 36.6, 26, 32, 41.8);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `temp_day`
-- 

CREATE TABLE `temp_day` (
  `id` int(11) NOT NULL auto_increment,
  `count_date` int(11) NOT NULL,
  `count_time` int(11) NOT NULL,
  `cycle` int(11) NOT NULL,
  `day` datetime NOT NULL,
  `temp` float NOT NULL,
  `humidity` float NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `temp` (`temp`),
  KEY `humidity` (`humidity`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

-- 
-- dump ตาราง `temp_day`
-- 

INSERT INTO `temp_day` VALUES (1, 1, 18, 32, '2015-11-23 18:50:20', 0, 0);
INSERT INTO `temp_day` VALUES (2, 0, 0, 0, '2015-11-23 18:50:37', 0, 0);
INSERT INTO `temp_day` VALUES (3, 1, 18, 33, '2015-11-23 18:51:43', 0, 0);
INSERT INTO `temp_day` VALUES (4, 1, 19, 33, '2015-11-23 19:05:34', 0, 0);
INSERT INTO `temp_day` VALUES (5, 0, 0, 0, '2015-11-23 19:08:20', 0, 0);
INSERT INTO `temp_day` VALUES (6, 1, 19, 34, '2015-11-23 19:08:30', 33, 41.2);
INSERT INTO `temp_day` VALUES (7, 1, 20, 34, '2015-11-23 20:09:10', 33, 41.4);
INSERT INTO `temp_day` VALUES (8, 1, 21, 34, '2015-11-23 21:09:17', 33, 41.4);
INSERT INTO `temp_day` VALUES (9, 1, 22, 34, '2015-11-23 22:09:23', 33, 41.4);
INSERT INTO `temp_day` VALUES (10, 1, 23, 34, '2015-11-23 23:09:28', 33, 41.4);
INSERT INTO `temp_day` VALUES (11, 2, 0, 34, '2015-11-24 00:00:00', 33, 41.5);
INSERT INTO `temp_day` VALUES (12, 2, 1, 34, '2015-11-24 01:00:11', 33, 41.5);
INSERT INTO `temp_day` VALUES (13, 2, 2, 34, '2015-11-24 02:00:13', 33, 41.5);
INSERT INTO `temp_day` VALUES (14, 2, 3, 34, '2015-11-24 03:00:14', 33, 41.6);
INSERT INTO `temp_day` VALUES (15, 2, 4, 34, '2015-11-24 04:00:14', 33, 41.6);
INSERT INTO `temp_day` VALUES (16, 3, 4, 34, '2015-11-25 04:10:03', 32.9, 41.6);
INSERT INTO `temp_day` VALUES (17, 4, 4, 34, '2015-11-26 04:10:06', 32.9, 41.6);
INSERT INTO `temp_day` VALUES (18, 5, 4, 34, '2015-11-27 04:10:08', 32.9, 41.6);
INSERT INTO `temp_day` VALUES (19, 6, 4, 34, '2015-11-28 04:10:10', 32.9, 41.6);
INSERT INTO `temp_day` VALUES (20, 7, 4, 34, '2015-11-29 04:10:12', 32.9, 41.6);
INSERT INTO `temp_day` VALUES (21, 8, 4, 34, '2015-11-30 04:10:14', 32.9, 41.6);
INSERT INTO `temp_day` VALUES (22, 9, 4, 34, '2015-12-01 04:10:17', 32.9, 41.6);
INSERT INTO `temp_day` VALUES (23, 10, 4, 34, '2015-12-02 04:10:20', 32.9, 41.6);
INSERT INTO `temp_day` VALUES (24, 11, 4, 34, '2015-12-03 04:10:22', 32.9, 41.6);
INSERT INTO `temp_day` VALUES (25, 12, 4, 34, '2015-12-04 04:10:24', 32.9, 41.6);
INSERT INTO `temp_day` VALUES (26, 13, 4, 34, '2015-12-05 04:10:26', 32.9, 41.5);
INSERT INTO `temp_day` VALUES (27, 14, 4, 34, '2015-12-06 04:10:28', 32.9, 41.5);
INSERT INTO `temp_day` VALUES (28, 15, 4, 34, '2015-12-07 04:10:30', 32.9, 41.5);
INSERT INTO `temp_day` VALUES (29, 16, 4, 34, '2015-12-08 04:10:56', 32.9, 41.5);
INSERT INTO `temp_day` VALUES (30, 17, 4, 34, '2015-12-09 04:10:58', 32.9, 41.5);
INSERT INTO `temp_day` VALUES (31, 18, 4, 34, '2015-12-10 04:11:00', 32.9, 41.5);
INSERT INTO `temp_day` VALUES (32, 19, 4, 34, '2015-12-11 04:11:01', 32.9, 41.5);
INSERT INTO `temp_day` VALUES (33, 20, 4, 34, '2015-12-12 04:11:03', 32.9, 41.5);
INSERT INTO `temp_day` VALUES (34, 21, 4, 34, '2015-12-13 04:11:05', 32.9, 41.5);
INSERT INTO `temp_day` VALUES (35, 22, 4, 34, '2015-12-14 04:11:10', 32.9, 41.4);
INSERT INTO `temp_day` VALUES (36, 23, 4, 34, '2015-12-15 04:11:12', 32.9, 41.4);
INSERT INTO `temp_day` VALUES (37, 24, 4, 34, '2015-12-16 04:11:15', 32.9, 41.4);
INSERT INTO `temp_day` VALUES (38, 25, 4, 34, '2015-12-17 04:11:17', 32.9, 41.3);
INSERT INTO `temp_day` VALUES (39, 26, 4, 34, '2015-12-18 04:11:19', 32.9, 41.3);
INSERT INTO `temp_day` VALUES (40, 27, 4, 34, '2015-12-19 04:11:20', 32.9, 41.3);
INSERT INTO `temp_day` VALUES (41, 28, 4, 34, '2015-12-20 04:11:22', 32.9, 41.3);
INSERT INTO `temp_day` VALUES (42, 29, 4, 34, '2015-12-21 04:11:24', 32.9, 41.3);
INSERT INTO `temp_day` VALUES (43, 30, 4, 34, '2015-12-22 04:11:27', 32.9, 41.3);
INSERT INTO `temp_day` VALUES (44, 31, 4, 34, '2015-12-23 04:11:28', 32.9, 41.3);
INSERT INTO `temp_day` VALUES (45, 32, 4, 34, '2015-12-24 04:11:30', 32.9, 41.3);
INSERT INTO `temp_day` VALUES (46, 33, 4, 34, '2015-12-25 04:11:33', 32.9, 41.3);
INSERT INTO `temp_day` VALUES (47, 34, 4, 34, '2015-12-26 04:11:35', 32.8, 41.3);
INSERT INTO `temp_day` VALUES (48, 35, 4, 34, '2015-12-27 04:11:37', 32.8, 41.3);
INSERT INTO `temp_day` VALUES (49, 36, 4, 34, '2015-12-28 04:11:39', 32.8, 41.3);
INSERT INTO `temp_day` VALUES (50, 37, 4, 34, '2015-12-29 04:11:42', 32.8, 41.3);
INSERT INTO `temp_day` VALUES (51, 38, 4, 34, '2015-12-30 04:11:44', 32.8, 41.3);
INSERT INTO `temp_day` VALUES (52, 39, 4, 34, '2015-12-31 04:11:45', 32.8, 41.3);
INSERT INTO `temp_day` VALUES (53, 39, 23, 34, '2015-12-31 23:59:48', 32.8, 41.2);
INSERT INTO `temp_day` VALUES (54, 40, 0, 34, '2016-01-01 00:00:00', 32.9, 41.2);
INSERT INTO `temp_day` VALUES (55, 41, 0, 34, '2016-01-02 00:00:35', 32.8, 41.1);
INSERT INTO `temp_day` VALUES (56, 42, 0, 34, '2016-01-03 00:00:55', 32.8, 41.1);
INSERT INTO `temp_day` VALUES (57, 0, 0, 0, '2016-01-03 00:02:03', 0, 0);
INSERT INTO `temp_day` VALUES (58, 1, 0, 35, '2016-01-03 00:20:43', 32.7, 39.9);
INSERT INTO `temp_day` VALUES (59, 0, 0, 0, '2016-01-03 00:20:46', 0, 0);
INSERT INTO `temp_day` VALUES (60, 1, 0, 36, '2016-01-03 00:21:29', 32.7, 40);
INSERT INTO `temp_day` VALUES (61, 1, 1, 36, '2016-01-03 01:21:43', 32.7, 40);
INSERT INTO `temp_day` VALUES (62, 1, 3, 36, '2016-01-03 03:47:19', 32.1, 40.6);
INSERT INTO `temp_day` VALUES (63, -37, 22, 36, '2015-11-26 22:11:24', 32.1, 40.6);
INSERT INTO `temp_day` VALUES (64, -37, 23, 36, '2015-11-26 23:00:01', 32.1, 41.6);

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `start`
-- 
ALTER TABLE `start`
  ADD CONSTRAINT `start_ibfk_8` FOREIGN KEY (`UserID`) REFERENCES `member` (`UserID`),
  ADD CONSTRAINT `start_ibfk_9` FOREIGN KEY (`mode`) REFERENCES `profile` (`mode`);
