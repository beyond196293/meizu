-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 02 月 20 日 02:40
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `my_shop`
--
CREATE DATABASE IF NOT EXISTS `my_shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `my_shop`;

-- --------------------------------------------------------

--
-- 表的结构 `mz_aboutus`
--

CREATE TABLE IF NOT EXISTS `mz_aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `opinion` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `solve` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

-- --------------------------------------------------------

--
-- 表的结构 `mz_address`
--

CREATE TABLE IF NOT EXISTS `mz_address` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `uid` int(12) NOT NULL,
  `address` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `name` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `tel` char(11) NOT NULL,
  `postalcode` int(6) NOT NULL,
  `mask` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `mz_address`
--

INSERT INTO `mz_address` (`id`, `uid`, `address`, `name`, `tel`, `postalcode`, `mask`) VALUES
(1, 0, '天津市天津市和平区jdsfhjshf', 'asfd', '15999999999', 123456, 0),
(2, 2, '天津市天津市河东区dsfgfvsgg', 'fsdff', '15999999999', 112344, 1),
(3, 4, '河北省承德市鹰手营子矿区fsdfvs', 'fjsd', '15966666666', 123455, 1),
(4, 5, '湖北省荆门市掇刀区wq2421521', '21321', '13888888888', 112112, 1),
(5, 9, '福建省南平市邵武市11', 'lalala', '13888888888', 111111, 1),
(6, 10, '安徽省巢湖市庐江县121313232321', '121', '13888888888', 111222, 0),
(7, 10, '辽宁省朝阳市喀喇沁左翼蒙古族自治县沈阳', '2132', '14522222222', 111111, 1),
(8, 10, '河南省南阳市淅川县111', '123', '13422222222', 111222, 0),
(9, 13, '河南省驻马店市古槐镇12321', '11111', '15702474773', 111111, 1),
(10, 16, '湖北省武汉市?口区213213', '213213', '15702474773', 123213, 1);

-- --------------------------------------------------------

--
-- 表的结构 `mz_adv`
--

CREATE TABLE IF NOT EXISTS `mz_adv` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `bewrite` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `sort` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- 转存表中的数据 `mz_adv`
--

INSERT INTO `mz_adv` (`id`, `image`, `name`, `bewrite`, `sort`) VALUES
(1, '2017-01-05/586e3300290f9.jpg', '546', '{}', 0),
(2, '2017-02-12/589fc520a4be6.jpg', '444', '444', 1),
(3, '2017-02-12/589fc4d7dc7f1.jpg', '5445', '554', 2),
(4, '2017-01-05/586e331e1798a.jpg', '64654', '546', 3);

-- --------------------------------------------------------

--
-- 表的结构 `mz_advert`
--

CREATE TABLE IF NOT EXISTS `mz_advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `goodsid` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `mz_advert`
--

INSERT INTO `mz_advert` (`id`, `image`, `goodsid`) VALUES
(1, '2016-12-08/5848d00e35455.jpg', '内存卡'),
(2, '2016-12-08/5848d19d64473.jpg', '魅蓝5智能保护壳'),
(3, '2016-12-08/5848d1aa45be1.jpg', '魅族PRO6s'),
(4, '2016-12-08/5848d1b69e03e.jpg', '魅蓝5智能保护壳'),
(6, '2016-12-08/5848d1c591135.png', '魅蓝5智能保护壳'),
(5, '2016-12-08/5848d1d32f978.jpg', '魅蓝5智能保护壳');

-- --------------------------------------------------------

--
-- 表的结构 `mz_back`
--

CREATE TABLE IF NOT EXISTS `mz_back` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `savepath` varchar(255) NOT NULL,
  `money` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `mz_back`
--

INSERT INTO `mz_back` (`id`, `name`, `savepath`, `money`, `type`) VALUES
(1, '魅族MX3', '2016-12-01/1.jpg', 100, 0),
(2, '魅族MX4', '2016-12-01/2.jpg', 150, 0),
(3, '魅族 note', '2016-12-01/3.jpg', 200, 0),
(4, '魅族 MX4 pro', '2016-12-01/4.jpg', 230, 0),
(5, '魅族MX2', '2016-12-01/5.jpg', 50, 0),
(6, '魅蓝', '2016-12-01/6.jpg', 50, 0),
(7, '魅族M9', '2016-12-01/7.jpg', 50, 0),
(8, '魅族MX', '2016-12-01/8.jpg', 50, 0);

-- --------------------------------------------------------

--
-- 表的结构 `mz_buyback`
--

CREATE TABLE IF NOT EXISTS `mz_buyback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `code` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `sale_money` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `mz_buyback`
--

INSERT INTO `mz_buyback` (`id`, `uid`, `code`, `sale_money`) VALUES
(9, 4, '1481178345585', 98.00),
(10, 9, '1483603659801', 150.00),
(11, 9, '1483604014587', 202.00),
(12, 9, '1483872033634', 225.00),
(13, 16, '1486870506882', 162.00);

-- --------------------------------------------------------

--
-- 表的结构 `mz_cart`
--

CREATE TABLE IF NOT EXISTS `mz_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `gname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `iname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `colors` varchar(255) CHARACTER SET utf8 NOT NULL,
  `memory` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `num` int(11) NOT NULL,
  `net` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- 转存表中的数据 `mz_cart`
--

INSERT INTO `mz_cart` (`id`, `gid`, `uid`, `gname`, `iname`, `colors`, `memory`, `price`, `num`, `net`) VALUES
(63, 5, 2, '双肩包', '2016-12-07/58482a582dc8b.jpg', '典雅黑', NULL, '99.00', 1, NULL),
(70, 4, 4, '魅族PRO6s', '2016-12-07/584828dd362c4.jpg', '土豪金', '32G', '2699.00', 1, '全网通'),
(66, 7, 2, '魅族HD50', '2016-12-07/58482f28d4855.jpg', '土豪金', NULL, '399.00', 1, NULL),
(76, 4, 10, '魅族PRO6s', '2016-12-07/584828dd362c4.jpg', '土豪金', '64G', '13495.00', 5, '全网通'),
(80, 11, 9, '21212', '2017-01-05/586e37936a67b.jpg', '土豪金', '64G', '22123.00', 1, '移动版'),
(86, 3, 16, '魅蓝5', '2016-12-07/5848274ed949d.jpg', '月光银', '64G', '788.00', 1, '联通'),
(85, 3, 16, '魅蓝5', '2016-12-07/5848274ed949d.jpg', '土豪金', '32G', '788.00', 1, '移动版'),
(87, 3, 16, '魅蓝5', '2016-12-07/5848274ed949d.jpg', '月光银', '64G', '788.00', 1, '联通'),
(88, 2, 16, 'MX6', '2016-12-07/58482545210f3.jpg', '土豪金', '32G', '1799.00', 1, '全网通');

-- --------------------------------------------------------

--
-- 表的结构 `mz_cate`
--

CREATE TABLE IF NOT EXISTS `mz_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pid` int(10) unsigned DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `display` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `mz_cate`
--

INSERT INTO `mz_cate` (`id`, `name`, `pid`, `path`, `display`) VALUES
(1, '手机', 0, '0,', 0),
(2, '智能硬件', 0, '0,', 1),
(3, '耳机音箱', 0, '0,', 0),
(4, '精品配件', 0, '0,', 0),
(5, '手机后盖', 0, '0,', 0),
(6, '电源适配器', 0, '0,', 0),
(7, '周边配件', 0, '0,', 0),
(8, 'MX系列', 1, '0,1,', 1),
(9, '魅蓝手机', 1, '0,1,', 1),
(10, '魅族PRO', 1, '0,1,', 1),
(11, '行车记录', 2, '0,2,', 1),
(12, 'beats', 3, '0,3,', 1),
(13, '魔音', 3, '0,3,', 1),
(14, '精品配件', 4, '0,4,', 1),
(16, '东芝', 7, '0,7,', 1),
(17, '三星', 7, '0,7,', 1),
(18, 'ROMMOS', 6, '0,6,', 1);

-- --------------------------------------------------------

--
-- 表的结构 `mz_collect`
--

CREATE TABLE IF NOT EXISTS `mz_collect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `goodsid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `mz_collect`
--

INSERT INTO `mz_collect` (`id`, `uid`, `goodsid`) VALUES
(24, 9, 2);

-- --------------------------------------------------------

--
-- 表的结构 `mz_column`
--

CREATE TABLE IF NOT EXISTS `mz_column` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `mz_column`
--

INSERT INTO `mz_column` (`id`, `name`, `link`) VALUES
(22, '百度', 'www.baidu.com'),
(23, '新浪', 'www.xinlang.com'),
(24, '淘宝', 'www.taobao.com'),
(25, '微博', 'www.weibo.com'),
(26, '蘑菇街', 'www.mogu.com'),
(27, '腾讯', 'www.tengxun.com');

-- --------------------------------------------------------

--
-- 表的结构 `mz_comment`
--

CREATE TABLE IF NOT EXISTS `mz_comment` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `gid` int(10) unsigned NOT NULL,
  `mask` tinyint(4) NOT NULL DEFAULT '0',
  `count` text CHARACTER SET utf8 NOT NULL,
  `recount` text CHARACTER SET utf8,
  `time` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `mz_comment`
--

INSERT INTO `mz_comment` (`id`, `uid`, `gid`, `mask`, `count`, `recount`, `time`) VALUES
(29, 2, 3, 1, 'hfjsdfh接受对方回复即可', 'fsdfsd', '1481161903'),
(30, 4, 2, 1, 'mx6', 'bbb', '1481168907'),
(31, 4, 7, 0, 'hd50', NULL, '1481168916'),
(32, 5, 3, 0, 'buhao', NULL, '1483682040'),
(33, 9, 3, 1, '2111', '11', '1484623179'),
(34, 10, 3, 1, '很好', '不好', '1486542161'),
(35, 9, 4, 1, '1111', '123213', '1483881203'),
(36, 9, 2, 1, '000', '000', '1483881220'),
(37, 16, 2, 1, '6666', '111', '1486870025');

-- --------------------------------------------------------

--
-- 表的结构 `mz_config`
--

CREATE TABLE IF NOT EXISTS `mz_config` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `logo` varchar(50) NOT NULL COMMENT '头部logo',
  `name` varchar(255) NOT NULL COMMENT '网站名称',
  `keywords` varchar(255) NOT NULL COMMENT '网站描述',
  `switch` int(5) NOT NULL DEFAULT '0' COMMENT '网站开关',
  `copyright` varchar(50) NOT NULL COMMENT '网站版权',
  `registerid` varchar(50) NOT NULL COMMENT '注册号',
  `allow` varchar(255) NOT NULL COMMENT '经营许可',
  `number` varchar(50) NOT NULL COMMENT 'ICP备案号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `mz_config`
--

INSERT INTO `mz_config` (`id`, `logo`, `name`, `keywords`, `switch`, `copyright`, `registerid`, `allow`, `number`) VALUES
(1, '/Public/Uploads/2016-12-08/5848bb6b2b3fe.png', '沈阳山寨魅族能力有限公司', '手机 数码 电子 呵呵 ', 0, ' ?2016 Meizu Telecom Equipment Co., Ltd. All right', ' 京公网安备110105019943', '经营许可证编号：粤B2-20130198', '备案号：粤ICP备13003602号-2');

-- --------------------------------------------------------

--
-- 表的结构 `mz_detail`
--

CREATE TABLE IF NOT EXISTS `mz_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL,
  `goodsname` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `price` double(10,2) NOT NULL,
  `num` int(11) NOT NULL,
  `version` varchar(255) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `mz_detail`
--

INSERT INTO `mz_detail` (`id`, `orderid`, `goodsname`, `price`, `num`, `version`) VALUES
(5, 3, '魅蓝5', 788.00, 1, '联通 32G '),
(4, 2, '行车记录仪MC6', 766.00, 1, '  '),
(6, 4, 'MX6', 1799.00, 1, '移动版 64G 土豪金'),
(7, 4, '魅族移动电源', 99.00, 1, '  月光银'),
(8, 5, 'MX6', 3598.00, 2, '移动版 64G 土豪金'),
(9, 5, '魅族HD50', 399.00, 1, '  土豪金'),
(10, 6, '魅蓝5', 788.00, 1, '移动版 32G 土豪金'),
(11, 7, '双肩包', 99.00, 1, '  '),
(12, 8, '行车记录仪MC6', 766.00, 1, '  '),
(13, 9, '魅蓝5', 1556.00, 2, '联通 32G '),
(14, 10, '魅族PRO6s', 2699.00, 1, '全网通 32G 土豪金'),
(15, 11, '魅蓝5', 788.00, 1, '移动版 32G 土豪金'),
(16, 11, 'MX6', 1799.00, 1, '全网通 32G 土豪金'),
(17, 12, '魅蓝5', 788.00, 1, '联通 64G '),
(18, 13, '行车记录仪MC6', 766.00, 1, '  典雅黑'),
(19, 14, 'MX6', 1799.00, 1, '移动版 64G '),
(20, 15, '魅族PRO6s', 2699.00, 1, '全网通 32G '),
(21, 16, 'MX6', 1799.00, 1, '全网通 32G 土豪金'),
(22, 16, '魅族PRO6s', 2699.00, 1, '移动版 64G 月光银'),
(23, 17, '双肩包', 99.00, 1, '  '),
(24, 18, '魅族PRO6s', 2699.00, 1, '全网通 32G 土豪金'),
(25, 19, '魅族PRO6s', 2699.00, 1, '移动版 64G 月光银'),
(26, 19, '魅蓝5', 788.00, 1, '移动版 32G 土豪金'),
(27, 20, '魅蓝5', 788.00, 1, '移动版 32G 土豪金'),
(28, 21, 'MX6', 1799.00, 1, '全网通 32G 土豪金');

-- --------------------------------------------------------

--
-- 表的结构 `mz_discount`
--

CREATE TABLE IF NOT EXISTS `mz_discount` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `discount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- 转存表中的数据 `mz_discount`
--

INSERT INTO `mz_discount` (`id`, `uid`, `discount`) VALUES
(62, 3, 50),
(63, 3, 30),
(64, 3, 30),
(65, 3, 20),
(66, 3, 50),
(67, 3, 1),
(68, 3, 1),
(69, 3, 50),
(70, 3, 50),
(71, 3, 50),
(72, 3, 50),
(73, 3, 10),
(74, 3, 50),
(75, 3, 30),
(76, 3, 50),
(77, 3, 5),
(78, 3, 5),
(79, 3, 10),
(80, 4, 1),
(82, 9, 5),
(83, 9, 20),
(90, 9, 50),
(85, 9, 10),
(86, 9, 10),
(87, 9, 10),
(88, 9, 10),
(89, 9, 10),
(91, 9, 20),
(92, 9, 5),
(93, 9, 30);

-- --------------------------------------------------------

--
-- 表的结构 `mz_ginfo`
--

CREATE TABLE IF NOT EXISTS `mz_ginfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `mz_ginfo`
--

INSERT INTO `mz_ginfo` (`id`, `goods_id`, `name`) VALUES
(1, 1, '2016-12-07/584823e79512e.jpg'),
(2, 3, '2016-12-07/58482806dd6fa.jpg'),
(3, 4, '2016-12-07/584828f2cf6d5.jpg'),
(4, 4, '2016-12-07/5848292e9d507.jpg'),
(5, 5, '2016-12-07/58482a6ac4dd0.jpg'),
(6, 6, '2016-12-07/58482db5aca6c.jpg'),
(7, 7, '2016-12-07/58482f3a5563c.jpg'),
(8, 8, '2016-12-07/58482ffb6d031.jpg'),
(9, 9, '2016-12-07/5848307c3fde0.jpg'),
(10, 11, '2017-01-05/586e384d371e6.jpg'),
(13, 13, '2017-01-09/5873b19729ba7.jpg'),
(12, 13, '2017-01-09/5873b16a4ec94.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `mz_goods`
--

CREATE TABLE IF NOT EXISTS `mz_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `cate_id` int(10) unsigned NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `stoke` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0',
  `is_new` tinyint(4) NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `sale_num` int(10) unsigned NOT NULL DEFAULT '0',
  `describe` text,
  `color` varchar(255) NOT NULL,
  `memory` varchar(255) DEFAULT NULL,
  `net` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `mz_goods`
--

INSERT INTO `mz_goods` (`id`, `name`, `cate_id`, `price`, `stoke`, `status`, `is_hot`, `is_new`, `addtime`, `sale_num`, `describe`, `color`, `memory`, `net`) VALUES
(2, 'MX6', 8, '1799.00', 227, 1, 1, 1, 1481123141, 7, '标准版移动电源', '土豪金,月光银,典雅黑', '32G,64G', '全网通,移动版'),
(3, '魅蓝5', 9, '788.00', 426, 1, 1, 1, 1481123662, 6, '大屏幕，大电池', '土豪金,月光银', '32G,64G', '移动版,联通'),
(4, '魅族PRO6s', 10, '2699.00', 539, 1, 0, 1, 1481124061, 4, '持久续航，标配64G大容量内存', '土豪金,月光银,典雅黑', '32G,64G', '全网通,移动版'),
(5, '双肩包', 14, '99.00', 544, 1, 0, 1, 1481124440, 2, '多功能隔层', '典雅黑', NULL, NULL),
(6, '行车记录仪MC6', 11, '766.00', 52, 1, 0, 0, 1481125282, 2, '高颜值+高性能', '典雅黑', NULL, NULL),
(7, '魅族HD50', 12, '399.00', 543, 1, 0, 1, 1481125672, 1, '附赠防水耳机包', '土豪金,典雅黑', NULL, NULL),
(8, '魅族移动电源', 6, '99.00', 53, 1, 0, 1, 1481125866, 1, '素雅百搭 颜值典范', '月光银', NULL, NULL),
(12, '13456u', 10, '1234.00', 12324, 1, 0, 1, 1483618298, 0, '0000', '土豪金', '32G', '移动版'),
(13, '魅蓝X', 9, '1699.00', 6666, 1, 1, 1, 1483976935, 0, '2月10-14日，每日10点起限量赠电影票兑换码', '土豪金,月光银,典雅黑', '16G,32G,64G', '全网通,移动版,联通版');

-- --------------------------------------------------------

--
-- 表的结构 `mz_head`
--

CREATE TABLE IF NOT EXISTS `mz_head` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `mz_head`
--

INSERT INTO `mz_head` (`id`, `name`, `user_id`) VALUES
(4, '2016-12-08/5848d8cd37940.png', 4),
(5, '2017-01-06/586f2e83db950.jpg', 5),
(6, '2017-02-12/589fb8c779171.jpg', 13);

-- --------------------------------------------------------

--
-- 表的结构 `mz_image`
--

CREATE TABLE IF NOT EXISTS `mz_image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `goods_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_face` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `mz_image`
--

INSERT INTO `mz_image` (`id`, `name`, `goods_id`, `is_face`) VALUES
(2, '2016-12-07/58482545210f3.jpg', 2, 1),
(3, '2016-12-07/5848274ed949d.jpg', 3, 1),
(4, '2016-12-07/58482762c0b53.jpg', 3, 0),
(5, '2016-12-07/584828dd362c4.jpg', 4, 1),
(6, '2016-12-07/584828ed4ea80.jpg', 4, 0),
(7, '2016-12-07/58482a582dc8b.jpg', 5, 1),
(8, '2016-12-07/58482a644f092.jpg', 5, 0),
(9, '2016-12-07/58482da2af1d9.jpg', 6, 1),
(10, '2016-12-07/58482db03db80.jpg', 6, 0),
(11, '2016-12-07/58482f28d4855.jpg', 7, 1),
(12, '2016-12-07/58482f353fece.jpg', 7, 0),
(13, '2016-12-07/58482feab4b9b.jpg', 8, 1),
(14, '2016-12-07/58482ff647469.jpg', 8, 0),
(19, '2017-01-05/586e37fab09c6.jpg', 12, 1),
(21, '2017-01-09/mx6.jpg', 13, 1),
(23, '2017-01-09/5873b18b23f9a.jpg', 13, 0);

-- --------------------------------------------------------

--
-- 表的结构 `mz_imgleft`
--

CREATE TABLE IF NOT EXISTS `mz_imgleft` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `mz_imgleft`
--

INSERT INTO `mz_imgleft` (`id`, `image`, `gid`) VALUES
(1, '2016-12-08/5848d0b47fd52.jpg', 6),
(2, '2016-12-08/5848d0c460ef9.jpg', 9),
(3, '2016-12-08/5848d0d02d38f.jpg', 9),
(4, '2016-12-08/5848d0dcafe53.jpg', 9),
(5, '2016-12-08/5848d0e9e2d2b.jpg', 9),
(6, '2016-12-08/5848d0f6aecd2.jpg', 9),
(7, '2016-12-08/5848d10679008.jpg', 9);

-- --------------------------------------------------------

--
-- 表的结构 `mz_info`
--

CREATE TABLE IF NOT EXISTS `mz_info` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `uid` int(12) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `truename` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `sex` int(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `mz_info`
--

INSERT INTO `mz_info` (`id`, `uid`, `tel`, `truename`, `sex`, `email`) VALUES
(2, 4, '12312312312', 'bbb', 1, 'dfgbdg'),
(3, 9, '21', '121', 321, '231'),
(4, 13, '', '', 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `mz_integral`
--

CREATE TABLE IF NOT EXISTS `mz_integral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `integral` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `mz_integral`
--

INSERT INTO `mz_integral` (`id`, `uid`, `integral`) VALUES
(2, 3, 1300),
(3, 4, 5458),
(4, 5, 788),
(5, 6, 0),
(6, 9, 10544),
(7, 10, 788);

-- --------------------------------------------------------

--
-- 表的结构 `mz_notice`
--

CREATE TABLE IF NOT EXISTS `mz_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `content` (`content`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `mz_notice`
--

INSERT INTO `mz_notice` (`id`, `content`, `time`) VALUES
(15, '添加公告', '1486619751');

-- --------------------------------------------------------

--
-- 表的结构 `mz_order`
--

CREATE TABLE IF NOT EXISTS `mz_order` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `uid` int(12) NOT NULL,
  `status` int(2) NOT NULL,
  `total` double(10,2) NOT NULL,
  `time` int(20) NOT NULL,
  `order_num` varchar(255) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `mz_order`
--

INSERT INTO `mz_order` (`id`, `uid`, `status`, `total`, `time`, `order_num`) VALUES
(11, 9, 3, 1799.00, 1484617220, '1484617220206'),
(12, 10, 3, 788.00, 1486542122, '1486542122615'),
(13, 10, 4, 766.00, 1486554211, '1486554211925');

-- --------------------------------------------------------

--
-- 表的结构 `mz_statistics`
--

CREATE TABLE IF NOT EXISTS `mz_statistics` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `gid` int(12) NOT NULL,
  `gname` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `total-price` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `stoke` int(12) NOT NULL,
  `imge` varchar(255) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `mz_user`
--

CREATE TABLE IF NOT EXISTS `mz_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` char(32) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `lock` tinyint(4) NOT NULL DEFAULT '0',
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `mz_user`
--

INSERT INTO `mz_user` (`id`, `name`, `password`, `role`, `lock`, `date`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112', 2, 0, '1483959733'),
(14, '555', '5b1b68a9abf4d2cd155c81a9225fd158', 0, 0, '1486861577'),
(13, '444', '73882ab1fa529d7273da0db6b49cc4f3', 0, 0, '1486861378'),
(12, '333', '1a100d2c0dab19c4430e7d73762b3423', 1, 0, '1486861347'),
(11, '222', 'e3ceb5881a0a1fdaad01296d7554868d', 1, 0, '1486861241'),
(9, '1322634912@qq.com', '3d5e84545ad387e52796c35834f6b30f', 0, 0, '1484286713'),
(10, '111111111@qq.com', 'bbb8aae57c104cda40c93843ad5e6db8', 0, 0, '1484286744'),
(15, '666', 'f379eaf3c831b04de153469d1bec345e', 0, 1, '1486861952'),
(16, '888', '21218cca77804d2ba1922c33e0151105', 0, 0, '1486864445');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
