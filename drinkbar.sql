-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-07-07 17:47:48
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `drinkbar`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bar_creative`
--

CREATE TABLE `bar_creative` (
  `id` int(10) NOT NULL,
  `drinksname` text NOT NULL,
  `details` text NOT NULL,
  `contributor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `bar_logos`
--

CREATE TABLE `bar_logos` (
  `id` int(10) NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `bar_news`
--

CREATE TABLE `bar_news` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `article` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bar_news`
--

INSERT INTO `bar_news` (`id`, `title`, `article`, `sh`) VALUES
(1, '周年慶優惠', '結帳時大喊\"我最愛喝飲料\"，整筆訂單 8 折。', 1),
(2, '周年慶優惠', '結帳時完成18蹲，整筆訂單 7 折。', 1),
(3, '周年慶優惠', '結帳時開合跳100次，整筆訂單 75 折。', 1),
(4, '周年慶優惠', '結帳時完成36蹲，訂單中金額最高的飲品免費。', 0),
(5, '周年慶優惠', '結帳時開合跳50次，訂單中金額最高的飲品買一送一。', 0),
(6, '徵招創意飲料', '想要一年免費暢飲你最愛的飲料，還有機會贏得3000元獎金嗎？參加我們的飲料創意徵集活動，展現你的創意！無論是新穎的口味搭配，還是獨特的包裝設計，都歡迎你的參與！趕快投稿，讓你的靈感變成現實！', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `bar_orders`
--

CREATE TABLE `bar_orders` (
  `id` int(10) NOT NULL,
  `pickuptime` date NOT NULL,
  `variety` text NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bar_orders`
--

INSERT INTO `bar_orders` (`id`, `pickuptime`, `variety`, `price`) VALUES
(1, '2024-08-08', '翻糖蛋糕', 1500),
(2, '2024-08-10', '果汁10杯、咖啡15杯', 2500),
(3, '2024-07-31', '乳酪蛋糕', 1600),
(4, '2024-08-30', '手工餅乾50份', 2400),
(5, '2024-10-10', '杯子蛋糕10個', 800);

-- --------------------------------------------------------

--
-- 資料表結構 `bar_sales`
--

CREATE TABLE `bar_sales` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `pic` text NOT NULL,
  `price` int(11) NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `bar_staffs`
--

CREATE TABLE `bar_staffs` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `ability` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bar_staffs`
--

INSERT INTO `bar_staffs` (`id`, `name`, `mobile`, `ability`) VALUES
(1, 'Lunna', '0920202020', '杯子蛋糕、咖啡拉花'),
(2, 'Paul', '0933333333', '乳酪蛋糕、研磨咖啡'),
(3, 'Fiona', '0978547854', '綜合果汁、水果冰沙'),
(4, 'Rick', '0905050505', '研發飲品、咖啡拉花'),
(5, 'Grace', '0998798798', '手工餅乾、杯子蛋糕、翻糖蛋糕');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bar_creative`
--
ALTER TABLE `bar_creative`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bar_logos`
--
ALTER TABLE `bar_logos`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bar_news`
--
ALTER TABLE `bar_news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bar_orders`
--
ALTER TABLE `bar_orders`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bar_sales`
--
ALTER TABLE `bar_sales`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bar_staffs`
--
ALTER TABLE `bar_staffs`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bar_creative`
--
ALTER TABLE `bar_creative`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bar_logos`
--
ALTER TABLE `bar_logos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bar_news`
--
ALTER TABLE `bar_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bar_orders`
--
ALTER TABLE `bar_orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bar_sales`
--
ALTER TABLE `bar_sales`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bar_staffs`
--
ALTER TABLE `bar_staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
