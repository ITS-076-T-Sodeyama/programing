-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2020 年 6 月 01 日 15:38
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--

CREATE TABLE `gs_an_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `gs_an_table` (`id`, `name`, `email`, `age`, `naiyou`, `indate`) VALUES
(1, 'test1', 'test@test.jp', 30, 'test', '2020-06-01 23:30:47'),
(2, 'test2', 'test2@test.jp', 10, 'test2', '2020-06-01 23:33:42'),
(3, 'test3', 'test3@test.jp', 20, 'test3', '2020-06-01 23:34:10'),
(4, 'test4', 'test4@test.jp', 40, 'test4', '2020-06-01 23:34:51'),
(5, 'test5', 'test5@test.jp', 50, 'test5', '2020-06-01 23:35:25'),
(6, 'test6', 'test6@test.jp', 10, 'test6', '2020-06-01 23:35:58'),
(7, 'test7', 'test7@test.jp', 10, 'test7', '2020-06-01 23:36:24'),
(8, 'test8', 'test8@test.jp', 20, 'test8', '2020-06-01 23:36:56'),
(9, 'test9', 'test9@test.jp', 40, 'test9', '2020-06-01 23:37:25'),
(10, 'test10', 'test10@test.jp', 30, 'test10', '2020-06-01 23:37:46');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanji_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_an_table`
--
ALTER TABLE `gs_an_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_an_table`
--
ALTER TABLE `gs_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルのAUTO_INCREMENT `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;


