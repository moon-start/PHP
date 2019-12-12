-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2019 年 12 月 12 日 10:04
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `moon`
--
CREATE DATABASE IF NOT EXISTS `moon` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `moon`;

-- --------------------------------------------------------

--
-- 資料表結構 `card`
--

CREATE TABLE `card` (
  `card_id` int(11) NOT NULL,
  `card_type` varchar(10) NOT NULL,
  `card_points` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `consup`
--

CREATE TABLE `consup` (
  `consup_id` int(11) NOT NULL,
  `consum_date` date NOT NULL,
  `consum_items` varchar(20) NOT NULL,
  `consum_money` int(11) NOT NULL,
  `Consum location` varchar(20) NOT NULL,
  `Card_ID` int(11) DEFAULT NULL,
  `Unified_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `unified`
--

CREATE TABLE `unified` (
  `unified_id` int(11) NOT NULL,
  `unified_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`),
  ADD UNIQUE KEY `card_type` (`card_type`),
  ADD KEY `card_points` (`card_points`);

--
-- 資料表索引 `consup`
--
ALTER TABLE `consup`
  ADD PRIMARY KEY (`consup_id`),
  ADD KEY `Consum location` (`Consum location`),
  ADD KEY `consum_money` (`consum_money`),
  ADD KEY `consum_items` (`consum_items`),
  ADD KEY `consum_date` (`consum_date`),
  ADD KEY `Card_ID` (`Card_ID`) USING BTREE,
  ADD KEY `Unified_ID` (`Unified_ID`) USING BTREE;

--
-- 資料表索引 `unified`
--
ALTER TABLE `unified`
  ADD PRIMARY KEY (`unified_id`),
  ADD UNIQUE KEY `unified_number` (`unified_number`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `card`
--
ALTER TABLE `card`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `consup`
--
ALTER TABLE `consup`
  MODIFY `consup_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `unified`
--
ALTER TABLE `unified`
  MODIFY `unified_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`card_id`) REFERENCES `consup` (`Card_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- 資料表的限制式 `unified`
--
ALTER TABLE `unified`
  ADD CONSTRAINT `unified_ibfk_1` FOREIGN KEY (`unified_id`) REFERENCES `consup` (`Unified_ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
