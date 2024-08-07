-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-08-06 10:04:21
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
-- 資料表結構 `bar_creatives`
--

CREATE TABLE `bar_creatives` (
  `id` int(10) NOT NULL,
  `drinksname` text NOT NULL,
  `details` text NOT NULL,
  `contributor` text NOT NULL,
  `mobile` text NOT NULL,
  `updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bar_creatives`
--

INSERT INTO `bar_creatives` (`id`, `drinksname`, `details`, `contributor`, `mobile`, `updated`) VALUES
(1, '優質美研', '美研社+無糖優酪乳', 'Chia', '0988888888', '2024-07-29');

-- --------------------------------------------------------

--
-- 資料表結構 `bar_logos`
--

CREATE TABLE `bar_logos` (
  `id` int(10) NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bar_logos`
--

INSERT INTO `bar_logos` (`id`, `img`, `sh`) VALUES
(1, 'logo07.png', 1),
(2, 'logo08.png', 0),
(3, 'logo09.png', 0),
(4, 'logo06.png', 0),
(5, 'logo03.png', 0);

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
  `price` int(10) NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bar_orders`
--

INSERT INTO `bar_orders` (`id`, `pickuptime`, `variety`, `price`, `name`, `mobile`) VALUES
(1, '2024-08-08', '翻糖蛋糕', 1500, '', ''),
(2, '2024-08-10', '果汁10杯、咖啡15杯', 2500, '', ''),
(3, '2024-07-31', '乳酪蛋糕', 1600, '', ''),
(4, '2024-08-30', '手工餅乾50份', 2400, '', ''),
(5, '2024-10-10', '杯子蛋糕10個', 800, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `bar_sales`
--

CREATE TABLE `bar_sales` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `pic` text NOT NULL,
  `price` int(11) NOT NULL,
  `variety` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bar_sales`
--

INSERT INTO `bar_sales` (`id`, `title`, `pic`, `price`, `variety`, `sh`) VALUES
(1, '紅澄', 'drink1.jpg', 60, 'drink', 1),
(2, '柳紅', 'drink2.jpg', 70, 'drink', 1),
(3, '柳澄酒', 'drink3.jpg', 100, 'drink', 1),
(4, '梨檸莓', 'drink4.jpg', 90, 'drink', 1),
(5, '啵啵澄棒', 'drink5.jpg', 80, 'drink', 1),
(6, '檸有冰', 'drink6.jpg', 250, 'drink', 1),
(7, '紗冰', 'drink7.jpg', 87, 'drink', 1),
(8, '布朗尼杯杯', 'cupcake01.jpg', 120, 'cake', 1),
(9, '焦蕉杯杯', 'cupcake02.jpg', 130, 'cake', 1),
(10, '抹茶杯杯', 'cupcake03.jpg', 115, 'cake', 1),
(11, '藍盆友', 'pancake01.jpg', 150, 'cake', 1),
(12, '蛙蛙圈套', 'donus01.jpg', 99, 'cake', 1),
(13, '莓夢橙真', 'drink8.jpg', 120, 'drink', 1),
(14, '藍還紫', 'cupcake04.jpg', 110, 'cake', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `bar_staffs`
--

CREATE TABLE `bar_staffs` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `ability` text NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bar_staffs`
--

INSERT INTO `bar_staffs` (`id`, `name`, `mobile`, `ability`, `acc`, `pw`) VALUES
(1, 'Boss', '0988888888', '賺錢、發薪水', 'admin', '1234'),
(2, 'Lunna', '0920202020', '杯子蛋糕、咖啡拉花', 'staff01', '1111'),
(3, 'Paul', '0933333333', '乳酪蛋糕、研磨咖啡', 'staff02', '2222'),
(4, 'Fiona', '0978547854', '綜合果汁、水果冰沙', 'staff03', '3333'),
(5, 'Rick', '0905050505', '研發飲品、咖啡拉花', 'staff04', '4444'),
(6, 'Grace', '0998798798', '手工餅乾、杯子蛋糕、翻糖蛋糕', 'staff05', '5555');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

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
-- 使用資料表自動遞增(AUTO_INCREMENT) `bar_logos`
--
ALTER TABLE `bar_logos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bar_staffs`
--
ALTER TABLE `bar_staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
