-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 27, 2021 lúc 05:46 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopshoes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `logocategory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `logocategory`) VALUES
(1, 'NIKE', 'nike.png'),
(2, 'ADIDAS', 'logo-thuong-hieu-adidas-4.png'),
(3, 'PUMA', 'phan-biet-giay-puma-chinh-hang.jpg4_.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `IDproduct` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `nameproduct` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gia` float(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`IDproduct`, `categoryID`, `code`, `nameproduct`, `image`, `gia`) VALUES
(1, 1, 'N1', 'AIR MAX 90 HOME & AWAY BLUE', 'https://kingshoes.vn/data/upload/media/nike-air-max-90-home-away-blue-cj0611-1021-king-shoes-sneaker-real-hcm-1624254820.jpeg', 200),
(16, 3, 'P2', 'PUMA RS-X3 SONIC', 'https://kingshoes.vn/data/upload/media/puma-rs-x3-sonic-373427-01-king-shoes-sneaker-real-hcm-1624435192.jpg', 280),
(103, 1, 'N4', 'DUNK LOW ORANGE PEARL', 'https://kingshoes.vn/data/upload/media/dunk-low-orange-pearl-dd1503-102-king-shoes-sneaker-real-hcm-1624272761.jpeg', 414),
(104, 1, 'N5', 'AIR FORCE 1 ESSENTIAL RUST PINK', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-air-force-1-07-essential-cz0270-103-king-shoes-sneaker-real-hcm-1-1629196332.jpeg', 260),
(105, 1, 'N6', 'DUNK LOW COAST', 'https://kingshoes.vn/data/upload/media/nike-dunk-low-coast-dd1503-100-tai-king-shoes-sneaker-real-hcm-1624272905.jpeg', 450),
(106, 1, 'N7', 'JORDAN 1 LOW BLACK TOE', 'https://kingshoes.vn/data/upload/media/air-jordan-1-retro-low-black-toe-553558-116-king-shoes-sneaker-real-tan-binh.jpg', 450),
(107, 1, 'N8', 'AIR MAX 270 JUST DO IT', 'https://kingshoes.vn/data/upload/media/nike-air-max-270-just-do-it-ah805-001-king-shoes-sneaker-real-hcm-1624260112.jpeg', 250),
(108, 1, 'N9', 'AIR JORDAN 1 HI TROPHY ROOM CHICAGO', 'https://kingshoes.vn/data/upload/media/air-jordan-1-hi-trophy-room-chicago-da2728-100-king-shoes-sneaker-real-hcm-1624273272.jpeg', 2800),
(111, 2, 'A1', 'SUPERSTAR', 'https://kingshoes.vn/data/upload/media/sneaker-c77124-super-star-adidas-kingshoes.vn-tphcm-tanbinh-27-1628053703.jpeg', 140),
(112, 2, 'A2', 'STAN SMITH WHITE HOLOGRAM', 'https://kingshoes.vn/data/upload/media/adidas-stan-smith-hologram-fu6673-chinh-hang-tai-quan-tan-binh-hcm-king-shoes-3.jpg', 200),
(113, 2, 'A3', 'ULTRABOOST 20 METALLIC GOLD', 'https://kingshoes.vn/data/upload/media/adidas-ultraboost-20-metallic-gold-fv83511-king-shoes-sneaker-real-hcm-1624253902.jpeg', 280),
(114, 2, 'A4', 'X9000L4 BLACK', 'https://kingshoes.vn/data/upload/media/giay-adidas-x9000l4-fw4910-king-shoes.vn-ban-giay-sneaker-chinh-hang-tai-tphcm-1628046063.jpg', 250),
(115, 2, 'A5', 'NMD R1 METALLIC GOLD', 'https://kingshoes.vn/data/upload/media/adidas-nmd-r1-metallic-gold-eg56651-king-shoes-sneaker-real-hcm-1624253101.jpeg', 260),
(116, 2, 'A6', 'OZWEEGO PRIDE', 'https://kingshoes.vn/data/upload/media/adidas-eg10761-king-shoes-sneaker-real-uy-tin-nhat-hcm-1624249846.jpeg', 280),
(117, 2, 'A7', 'NMD R1 ALL WHITE', 'https://kingshoes.vn/data/upload/media/adidas-nmd-r1-all-white-h019031-king-shoes-sneaker-real-hcm-1624253160.jpeg', 250),
(118, 2, 'A8', '\r\nZX 2K BOOST NASA', 'https://kingshoes.vn/data/upload/media/giay-adidas-zx-2k-boost-fy5724-king-shoes-ban-giay-sneaker-chinh-hang-tai-tphcm-1628047068.jpg', 245),
(119, 2, 'A9', 'ULTRABOOST 20 NASA CORE BLACK', 'https://kingshoes.vn/data/upload/media/gia%CC%80y-adidas-ultraboost-20-nasa-core-black-fx7979-king-shoes-sneaker-real-hcm-1-1628047833.jpeg', 290),
(120, 2, 'A10', 'ULTRABOOST 4.0', 'https://kingshoes.vn/data/upload/media/adidas-ultraboost-4-0-f347181-king-shoes-sneaker-real-hcm-1624253211.jpeg', 250),
(121, 2, 'A11', 'SOLAR HU NMD', 'https://kingshoes.vn/data/upload/media/adidas-pharrell-williams-hu-nmd-eg7737-chinh-hang-hcm-king-shoes-sneaker-authentic-hcm-1624249958.jpeg', 240),
(122, 0, 'A20', 'NMD R1 GREY', 'giay-adidas-nmd-r1-nu-chinh-hang-tphcm-D96688-king-shoes-sneaker-authentic-sai-gon.jpg', 180),
(123, 0, 'A20', 'NMD R1 GREY', 'giay-adidas-nmd-r1-nu-chinh-hang-tphcm-D96688-king-shoes-sneaker-authentic-sai-gon.jpg', 200),
(124, 0, 'A20', 'NMD R1 GREY', 'giay-adidas-nmd-r1-nu-chinh-hang-tphcm-D96688-king-shoes-sneaker-authentic-sai-gon.jpg', 200),
(125, 0, 'A20', 'NMD R1 GREY', 'giay-adidas-nmd-r1-nu-chinh-hang-tphcm-D96688-king-shoes-sneaker-authentic-sai-gon.jpg', 200),
(126, 0, 'A20', 'NMD R1 GREY', 'giay-adidas-nmd-r1-nu-chinh-hang-tphcm-D96688-king-shoes-sneaker-authentic-sai-gon.jpg', 200),
(127, 0, 'A20', 'NMD R1 GREY', 'giay-adidas-nmd-r1-nu-chinh-hang-tphcm-D96688-king-shoes-sneaker-authentic-sai-gon.jpg', 200),
(129, 0, 'A20', 'NMD R1 GREY', 'giay-adidas-nmd-r1-nu-chinh-hang-tphcm-D96688-king-shoes-sneaker-authentic-sai-gon.jpg', 200),
(130, 0, 'A20', 'NMD R1 GREY', 'giay-adidas-nmd-r1-nu-chinh-hang-tphcm-D96688-king-shoes-sneaker-authentic-sai-gon.jpg', 200),
(159, 2, 'A20', 'NMD R1 GREY', 'giay-adidas-nmd-r1-nu-chinh-hang-tphcm-D96688-king-shoes-sneaker-authentic-sai-gon.jpg', 200);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`IDproduct`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `IDproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
