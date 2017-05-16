-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成日時: 2017 年 5 月 02 日 18:24
-- サーバのバージョン: 5.6.36
-- PHP のバージョン: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `social_network`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '名前',
  `text` text NOT NULL COMMENT '説明文',
  `image` varchar(255) NOT NULL COMMENT '写真',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- テーブルのデータのダンプ `item`
--

INSERT INTO `item` (`id`, `name`, `text`, `image`) VALUES
(1, 'たけのこの里', '歯がかける固さ', 'images/'),
(2, 'きのこの山', 'おいしいぞ', 'images/'),
(3, 'じゃがりこ', '歯が折れますね', 'images/'),
(4, 'じゃがびー', 'やわらかい', 'images/');

-- --------------------------------------------------------

--
-- テーブルの構造 `poll`
--

CREATE TABLE IF NOT EXISTS `poll` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item1_id` int(10) unsigned NOT NULL COMMENT '投票項目1',
  `item2_id` int(10) unsigned NOT NULL COMMENT '投票項目2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- テーブルのデータのダンプ `poll`
--

INSERT INTO `poll` (`id`, `item1_id`, `item2_id`) VALUES
(1, 1, 2),
(2, 3, 4),
(3, 1, 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `select_result`
--

CREATE TABLE IF NOT EXISTS `select_result` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `result` tinyint(2) NOT NULL COMMENT '結果',
  `poll_id` int(10) unsigned NOT NULL COMMENT 'pollのid',
  `created` datetime NOT NULL COMMENT '投票された時間',
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- テーブルのデータのダンプ `select_result`
--

INSERT INTO `select_result` (`id`, `result`, `poll_id`, `created`, `modified`) VALUES
(1, 2, 0, '2017-05-02 17:22:07', '2017-05-02 17:22:07'),
(2, 1, 0, '2017-05-02 17:22:10', '2017-05-02 17:22:10'),
(3, 1, 0, '2017-05-02 17:22:16', '2017-05-02 17:22:16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
