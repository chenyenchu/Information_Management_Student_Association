-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 8.0.17
-- PHP 版本： 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `fjuim`
--

-- --------------------------------------------------------

--
-- 資料表結構 `activity`
--

CREATE TABLE `activity` (
  `AName` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Time` int(10) NOT NULL,
  `Money` int(10) NOT NULL,
  `Place` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `ANote` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `activity`
--

INSERT INTO `activity` (`AName`, `Time`, `Money`, `Place`, `ANote`) VALUES
('制服趴', 20220930, 200, '潛水艇的天空', '有繳系費不用錢'),
('宿營', 20221111, 3500, '新竹萬瑞森林園區', '報名至10月17日'),
('抽系櫃', 20220916, 0, '系學會', ''),
('新生訓練', 20220902, 0, 'LM503', ''),
('耶誕晚會', 20221210, 500, '新莊典華會館', ''),
('資管營', 20220901, 100, '潛水艇的天空', '有繳系費不用錢');

-- --------------------------------------------------------

--
-- 資料表結構 `member1`
--

CREATE TABLE `member1` (
  `ID` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `pword` int(10) NOT NULL,
  `Name` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `depart` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Grade` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Identity` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Limits` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `member1`
--

INSERT INTO `member1` (`ID`, `pword`, `Name`, `depart`, `Grade`, `Identity`, `Limits`) VALUES
('S001', 11111, '小明', '日間部', '資訊管理學系四年甲班', '管理員', '所有功能'),
('S002', 22222, '小華', '日間部', '資訊管理學系四年乙班', '會員', '報名及檢視'),
('S003', 33333, '小強', '日間部', '資訊管理學系三年甲班', '會員', '報名及檢視'),
('S004', 44444, '小花', '日間部', '資訊管理學系三年乙班', '管理員', '所有功能'),
('S005', 55555, '阿章', '日間部', '資訊管理學系二年甲班', '會員', '報名及檢視'),
('S006', 66666, '阿名', '日間部', '資訊管理學系二年乙班', '會員', '報名及檢視'),
('S007', 77777, '真真', '日間部', '資訊管理學系一年甲班', '會員', '報名及檢視'),
('S008', 88888, '阿燕', '日間部', '資訊管理學系一年乙班', '會員', '報名及檢視');

-- --------------------------------------------------------

--
-- 資料表結構 `signup`
--

CREATE TABLE `signup` (
  `SName` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `SID` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `SGrade` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `SPhone` int(10) NOT NULL,
  `Contant` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Activity` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Note` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `signup`
--

INSERT INTO `signup` (`SName`, `SID`, `SGrade`, `SPhone`, `Contant`, `Activity`, `Note`) VALUES
('真真', 'S007', '資訊管理學系一年甲班', 977777777, '阿珍/0977777778', '耶誕舞會', ''),
('阿燕', 'S008', '資訊管理學系一年乙班', 988888888, '小燕/0988888889', '宿營', '蛋奶素'),
('阿章', 'S005', '資訊管理學系二年甲班', 955555555, '大章/0955555556', '資管營', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`AName`);

--
-- 資料表索引 `member1`
--
ALTER TABLE `member1`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
