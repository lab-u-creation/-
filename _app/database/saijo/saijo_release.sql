-- phpMyAdmin SQL Dump
-- version 5.2.1-1.el7.remi
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 7 月 25 日 08:53
-- サーバのバージョン： 5.7.27-log
-- PHP のバージョン: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `di0dn_tomin_sougi`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `saijo`
--

CREATE TABLE `saijo` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `area` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `access` text,
  `plan` varchar(40) DEFAULT NULL,
  `category` varchar(11) DEFAULT NULL,
  `price` text,
  `parking` int(11) DEFAULT '-1',
  `vicinity_parking` int(11) NOT NULL,
  `kasou` int(11) DEFAULT '-1',
  `menkai` int(11) DEFAULT '-1',
  `anti` int(11) DEFAULT '-1',
  `tomaru` int(11) DEFAULT '-1',
  `hikae` int(11) DEFAULT '-1',
  `room_eat` int(11) DEFAULT '-1',
  `room_houyou` int(11) DEFAULT '-1',
  `furo` int(11) DEFAULT '-1',
  `room_kids` int(11) DEFAULT '-1',
  `barrierfree` int(11) DEFAULT '-1',
  `vicinity_conveni` int(11) DEFAULT '-1',
  `vicinity_restaurant` int(11) DEFAULT '-1',
  `vicinity_hotel` int(11) DEFAULT '-1',
  `mochikomi_food` int(11) DEFAULT '-1',
  `kashikiri` int(11) DEFAULT '-1',
  `mohuku_rental` int(11) DEFAULT '-1',
  `mohuku_kitsuke` int(11) DEFAULT '-1',
  `map` varchar(400) NOT NULL,
  `comment` text,
  `disp` int(11) NOT NULL DEFAULT '1',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `saijo`
--

INSERT INTO `saijo` (`id`, `name`, `area`, `city`, `address`, `tel`, `access`, `plan`, `category`, `price`, `parking`, `vicinity_parking`, `kasou`, `menkai`, `anti`, `tomaru`, `hikae`, `room_eat`, `room_houyou`, `furo`, `room_kids`, `barrierfree`, `vicinity_conveni`, `vicinity_restaurant`, `vicinity_hotel`, `mochikomi_food`, `kashikiri`, `mohuku_rental`, `mohuku_kitsuke`, `map`, `comment`, `disp`, `create_date`, `update_date`, `update_by`) VALUES
(1253, '宗光寺三千会館　', '東京都', '港区', '東京都港区芝4-6-21', '03-3451-7973', '都営浅草線三田駅から0.3km徒歩4分\n都営三田線三田駅から0.3km徒歩4分\n都営三田線芝公園駅から0.5km徒歩7分\nJR山手線田町駅から0.5km徒歩7分\n', '家族葬,一般葬葬,大型葬・社葬,', 'temple', '250,000円', 2, 0, 0, 0, 0, 0, 1, 0, 0, 0, -1, 0, 0, 0, 1, -1, -1, -1, -1, '1519', '', 1, '2022-01-05 15:00:00', '2022-01-05 15:00:00', ''),

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `saijo`
--
ALTER TABLE `saijo`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `saijo`
--
ALTER TABLE `saijo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1253;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
