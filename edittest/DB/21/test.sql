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
  UNIQUE KEY `Date_start` (`Date_start`),
  UNIQUE KEY `Date_ent` (`Date_ent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `history`
-- 


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `member`
-- 

INSERT INTO `member` VALUES (001, 0x61646d696e, 0x31323334, 0x4d6179, 0x6e61726f6b, 0x616c7332315f32313340686f746d61696c2e636f6d, 0x3039352d35333735313532, 0x41444d494e);

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

INSERT INTO `start` VALUES (1, 001, '2015-11-21', '2016-01-01', 6, 'off', 0);

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
  `temp1` float NOT NULL,
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

INSERT INTO `temperature` VALUES (1, '2015-11-21 18:09:56', 49.5, 1.4, 51.8, 60, 34, 33.1, 33.7, 26, 31.7, 40.7);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `temp_day`
-- 

CREATE TABLE `temp_day` (
  `id` int(11) NOT NULL auto_increment,
  `day` date NOT NULL,
  `time` time NOT NULL,
  `count_date` int(11) NOT NULL,
  `temp` float NOT NULL,
  `humidity` float NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `day` (`day`),
  KEY `time` (`time`),
  KEY `temp` (`temp`),
  KEY `humidity` (`humidity`),
  KEY `count_date` (`count_date`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- dump ตาราง `temp_day`
-- 

INSERT INTO `temp_day` VALUES (1, '2015-11-20', '22:17:25', 0, 29.7, 48.5);
INSERT INTO `temp_day` VALUES (2, '2015-11-20', '23:03:04', 0, 29.1, 50.1);

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `history`
-- 
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_3` FOREIGN KEY (`Date_start`) REFERENCES `start` (`start`),
  ADD CONSTRAINT `history_ibfk_4` FOREIGN KEY (`Date_ent`) REFERENCES `start` (`end`);

-- 
-- Constraints for table `start`
-- 
ALTER TABLE `start`
  ADD CONSTRAINT `start_ibfk_8` FOREIGN KEY (`UserID`) REFERENCES `member` (`UserID`),
  ADD CONSTRAINT `start_ibfk_9` FOREIGN KEY (`mode`) REFERENCES `profile` (`mode`);

-- 
-- Constraints for table `temp_day`
-- 
ALTER TABLE `temp_day`
  ADD CONSTRAINT `temp_day_ibfk_16` FOREIGN KEY (`count_date`) REFERENCES `start` (`count_date`);
