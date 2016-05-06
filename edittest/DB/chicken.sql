-- phpMyAdmin SQL Dump
-- version 2.9.0.2
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.24
-- รุ่นของ PHP: 4.4.4
-- 
-- ฐานข้อมูล: `chicken`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `device`
-- 

CREATE TABLE `device` (
  `Device_id` int(11) NOT NULL,
  `Device_channel` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`Device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `device`
-- 

INSERT INTO `device` VALUES (1, 'node1');
INSERT INTO `device` VALUES (2, 'node2');
INSERT INTO `device` VALUES (3, 'node3');
INSERT INTO `device` VALUES (4, 'node4');
INSERT INTO `device` VALUES (5, 'stop');
INSERT INTO `device` VALUES (6, 'start');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `member`
-- 

CREATE TABLE `member` (
  `Member_id` int(11) NOT NULL,
  `Member_username` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Member_password` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`Member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- dump ตาราง `member`
-- 

INSERT INTO `member` VALUES (7, 'admin', '1234');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `message`
-- 

CREATE TABLE `message` (
  `MessageID` int(5) unsigned zerofill NOT NULL auto_increment,
  `message_time` datetime NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Realtime_Round` int(11) NOT NULL,
  `New` enum('Yes','No') NOT NULL default 'Yes',
  PRIMARY KEY  (`MessageID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `message`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `profile`
-- 

CREATE TABLE `profile` (
  `Profile_id` int(11) NOT NULL auto_increment,
  `Profile_name` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Profile_temperature` float NOT NULL,
  `Profile_humidity_min` float NOT NULL,
  `Profile_humidity_max` float NOT NULL,
  `profile_W` int(11) NOT NULL,
  PRIMARY KEY  (`Profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

-- 
-- dump ตาราง `profile`
-- 

INSERT INTO `profile` VALUES (1, 'error', 25, 30, 50, 1);
INSERT INTO `profile` VALUES (2, 'error', 25, 30, 50, 2);
INSERT INTO `profile` VALUES (3, 'error', 25, 30, 50, 3);
INSERT INTO `profile` VALUES (4, 'error', 30, 30, 50, 4);
INSERT INTO `profile` VALUES (5, 'error', 30, 30, 50, 5);
INSERT INTO `profile` VALUES (6, 'error', 30, 30, 60, 6);
INSERT INTO `profile` VALUES (7, 'art', 0, 0, 0, 1);
INSERT INTO `profile` VALUES (8, 'art', 0, 0, 0, 2);
INSERT INTO `profile` VALUES (9, 'art', 0, 0, 0, 3);
INSERT INTO `profile` VALUES (10, 'art', 0, 0, 0, 4);
INSERT INTO `profile` VALUES (11, 'art', 0, 0, 0, 5);
INSERT INTO `profile` VALUES (12, 'art', 0, 0, 0, 6);
INSERT INTO `profile` VALUES (13, 'art1', 1, 1, 1, 1);
INSERT INTO `profile` VALUES (14, 'art1', 1, 1, 1, 2);
INSERT INTO `profile` VALUES (15, 'art1', 1, 1, 1, 3);
INSERT INTO `profile` VALUES (16, 'art1', 1, 1, 1, 4);
INSERT INTO `profile` VALUES (17, 'art1', 1, 1, 1, 5);
INSERT INTO `profile` VALUES (18, 'art1', 1, 1, 1, 6);
INSERT INTO `profile` VALUES (19, 'wdwd', 0, 0, 0, 1);
INSERT INTO `profile` VALUES (20, 'wdwd', 0, 0, 0, 2);
INSERT INTO `profile` VALUES (21, 'wdwd', 0, 0, 0, 3);
INSERT INTO `profile` VALUES (22, 'wdwd', 0, 0, 0, 4);
INSERT INTO `profile` VALUES (23, 'wdwd', 0, 0, 0, 5);
INSERT INTO `profile` VALUES (24, 'wdwd', 0, 0, 0, 6);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `profilename`
-- 

CREATE TABLE `profilename` (
  `id` int(11) NOT NULL auto_increment,
  `Profile_name` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Profile_datetime` datetime NOT NULL,
  `Profile_comment` varchar(250) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- 
-- dump ตาราง `profilename`
-- 

INSERT INTO `profilename` VALUES (1, 'error', '2016-03-27 02:35:42', '123435466');
INSERT INTO `profilename` VALUES (2, 'art', '2016-03-27 12:21:49', '');
INSERT INTO `profilename` VALUES (3, 'art1', '2016-04-06 14:11:03', 'sdfasgwgtwfsv');
INSERT INTO `profilename` VALUES (4, 'test', '2016-04-06 17:47:29', 'เจริญเติบโตได้ดี');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `realtime`
-- 

CREATE TABLE `realtime` (
  `id` int(11) NOT NULL auto_increment,
  `Profile_name` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Device_id` int(11) NOT NULL,
  `Realtime_DateTime` datetime NOT NULL,
  `Realtime_Temperature` float NOT NULL,
  `Realtime_Humidity` float NOT NULL,
  `Realtime_Status` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Realtime_Round` int(11) NOT NULL,
  `Realtime_HR` int(11) NOT NULL,
  `Realtime_W` int(11) NOT NULL,
  `Realtime_D` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

-- 
-- dump ตาราง `realtime`
-- 

INSERT INTO `realtime` VALUES (1, 'error', 1, '2016-03-27 02:35:42', 0, 0, 'on', 1, 2, 1, 1);
INSERT INTO `realtime` VALUES (2, 'error', 1, '2016-03-27 03:35:54', 0, 0, 'on', 1, 0, 0, 0);
INSERT INTO `realtime` VALUES (6, 'error', 0, '2016-03-27 12:17:42', 0, 0, 'on', 1, 12, 1, 1);
INSERT INTO `realtime` VALUES (7, 'error', 0, '2016-03-27 12:17:43', 0, 0, 'on', 1, 12, 1, 1);
INSERT INTO `realtime` VALUES (8, 'error', 6, '2016-03-27 13:18:47', 0, 0, 'on', 1, 0, 0, 0);
INSERT INTO `realtime` VALUES (9, 'error', 6, '2016-03-27 13:27:17', 0, 0, 'on', 2, 0, 0, 0);
INSERT INTO `realtime` VALUES (10, 'error', 6, '2016-03-27 13:28:25', 0, 0, 'on', 3, 0, 0, 0);
INSERT INTO `realtime` VALUES (11, 'art', 6, '2016-03-27 13:28:41', 0, 0, 'on', 4, 0, 0, 0);
INSERT INTO `realtime` VALUES (12, 'art', 0, '2016-03-27 12:29:11', 0, 0, 'on', 4, 12, 1, 1);
INSERT INTO `realtime` VALUES (13, 'art', 0, '2016-03-27 12:29:20', 0, 0, 'on', 4, 12, 1, 1);
INSERT INTO `realtime` VALUES (14, '', 6, '2016-03-27 13:57:47', 0, 0, 'on', 5, 0, 0, 0);
INSERT INTO `realtime` VALUES (15, '', 6, '2016-03-27 14:07:11', 0, 0, 'on', 6, 0, 0, 0);
INSERT INTO `realtime` VALUES (16, '', 6, '2016-03-27 14:07:35', 0, 0, 'on', 7, 0, 0, 0);
INSERT INTO `realtime` VALUES (17, 'IndianRiver', 6, '2016-03-27 14:08:07', 0, 0, 'on', 8, 0, 0, 0);
INSERT INTO `realtime` VALUES (18, 'Ross 308', 6, '2016-03-27 14:10:07', 0, 0, 'on', 9, 0, 0, 0);
INSERT INTO `realtime` VALUES (19, 'error', 6, '2016-03-27 14:10:56', 0, 0, 'on', 10, 0, 0, 0);
INSERT INTO `realtime` VALUES (20, 'art1', 6, '2016-04-06 15:10:32', 0, 0, 'on', 11, 0, 0, 0);
INSERT INTO `realtime` VALUES (21, 'error', 6, '2016-04-06 15:12:12', 0, 0, 'on', 12, 0, 0, 0);
INSERT INTO `realtime` VALUES (22, 'error', 10, '2016-04-06 16:08:27', 0, 0, 'off', 12, 0, 0, 0);
INSERT INTO `realtime` VALUES (23, 'error', 10, '2016-04-06 16:09:09', 0, 0, 'off', 12, 0, 0, 0);
INSERT INTO `realtime` VALUES (24, 'art', 6, '2016-04-06 16:20:23', 0, 0, 'on', 13, 0, 0, 0);
INSERT INTO `realtime` VALUES (25, 'test', 1, '2016-04-06 16:23:59', 30, 60, 'on', 14, 16, 1, 1);
INSERT INTO `realtime` VALUES (26, 'test', 2, '2016-04-07 17:32:54', 30, 75, 'on', 14, 17, 1, 1);
INSERT INTO `realtime` VALUES (27, 'test', 3, '2016-04-07 19:34:16', 29, 78, 'on', 14, 18, 1, 1);
INSERT INTO `realtime` VALUES (28, 'test', 4, '2016-04-07 20:34:18', 29, 67, 'on', 14, 20, 1, 1);
INSERT INTO `realtime` VALUES (29, 'test', 1, '2016-04-07 21:34:19', 30, 68, 'on', 14, 21, 1, 1);
INSERT INTO `realtime` VALUES (30, 'test', 2, '2016-04-07 22:34:19', 30, 75, 'on', 14, 22, 1, 1);
INSERT INTO `realtime` VALUES (31, 'test', 3, '2016-04-07 23:34:19', 30, 76, 'on', 14, 23, 1, 1);
INSERT INTO `realtime` VALUES (32, 'test', 4, '2016-04-08 00:34:19', 38, 76, 'on', 14, 0, 1, 2);
INSERT INTO `realtime` VALUES (33, 'test', 1, '2016-04-08 01:34:19', 29, 75, 'on', 14, 1, 1, 1);
