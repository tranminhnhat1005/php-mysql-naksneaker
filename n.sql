-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2020 lúc 11:30 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `n`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `IDbrand` int(100) NOT NULL,
  `brandname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sort` int(100) NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`IDbrand`, `brandname`, `sort`, `image`) VALUES
(1, 'Adidas', 1, 'adidas.png'),
(2, 'Nike', 2, 'nike.png'),
(3, 'Puma', 3, 'puma.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail`
--

CREATE TABLE `detail` (
  `IDp` int(11) NOT NULL,
  `IDbrand` int(100) NOT NULL,
  `pname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` text CHARACTER SET utf8 NOT NULL,
  `imagehot` text CHARACTER SET utf8 NOT NULL,
  `price` int(100) NOT NULL,
  `size` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pdes` longtext CHARACTER SET utf8 NOT NULL,
  `psort` int(100) NOT NULL,
  `hot` binary(1) NOT NULL,
  `new` binary(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `detail`
--

INSERT INTO `detail` (`IDp`, `IDbrand`, `pname`, `image`, `imagehot`, `price`, `size`, `pdes`, `psort`, `hot`, `new`) VALUES
(1, 1, 'Yeezy Boost 350 V2 \'Black Non-Reflective\'', 'ay3.png', '', 420, 'fullsize', 'The adidas Yeezy Boost 350 V2 lives up to its cult appeal through evolved design elements and advanced technology. Released June 2019, this \'Black Non-Reflective\' edition\'s re-engineered Primeknit bootie sees futuristic updates including a translucent side stripe and bold stitching on the heel pull. Integrated lacing customizes the fit while a translucent black Boost-equipped midsole complements the covert feel.', 3, 0x30, 0x30),
(2, 1, 'Yeezy Boost 350 V2 \'Cream White / Triple White\'', 'ay4.jpeg', '', 260, 'fullsize', 'First released on April 29, 2017, the Yeezy Boost 350 V2 \'Cream White\' combines a cream Primeknit upper with tonal cream SPLY 350 branding, and a translucent white midsole housing full-length Boost. Released again in October 2018, this retro helped fulfill Kanye West\'s oft-repeated \'YEEZYs for everyone\' Twitter mantra, as adidas organized the biggest drop in Yeezy history by promising pre-sale to anyone who signed up on the website. Similar to the first release, the \'Triple White\' 2018 model features a Primeknit upper, a Boost midsole and custom adidas and Yeezy co-branding on the insole.				', 4, 0x30, 0x30),
(3, 1, 'Yeezy Boost 350 V2 \'Clay\'', 'ay5.jpeg', 'ay5-hot.png', 270, 'fullsize', 'The adidas Yeezy Boost 350 V2 Clay updates the silhouette with a warm palette and semi-translucent, three-tone vent at the side. This Clay colorway retains the stand-out features of the original 350 V2 shoe, first seen in September 2016, including a flexible Primeknit upper and full-length Boost cushioning. This shoe released March 2019 exclusively in select cities in North America and Latin America.																', 5, 0x31, 0x30),
(4, 1, 'Yeezy Boost 350 V2 \'True Form\'', 'ay6.jpeg', '', 355, 'fullsize', 'Featuring a combination of neutral and earth tones, the adidas Yeezy 350 V2 \'True Form\' is the first 350 colorway released in 2019. A soft grey hue dominates the flexible Primeknit upper with a small hit of orange behind the translucent vent on the lateral side that extends to the heel pull tab. Another hint of orange can be seen behind the ribbed TPU midsole, which houses full-length Boost cushioning. This shoe released March 2019 exclusively in select countries within Europe, as well as Russia and Ukraine.', 6, 0x30, 0x30),
(5, 1, 'Yeezy Boost 350 V2 GID \'Glow\'', 'ay1.jpeg', '', 399, 'fullsize', 'Regarded as a cultural phenomenon, the adidas Yeezy Boost 350 silhouette generated a cult following when it was initially released in 2015. This \'Glow\' makeoverâ€”released in May 2019â€”equips the Primeknit upper with a high-visibility treatment and a translucent stripe to the lateral profile. Integrated lacing and a coordinating heel pull provide easy on/off. Underfoot, the signature full-length Boost midsole looks to the future with a bright glow in the dark finish.				', 1, 0x30, 0x30),
(6, 2, 'Sean Wotherspoon x Air Max 1/97 \'Sean Wotherspoon\' Pre-Release', 'nam971.jpeg', '', 1070, 'mensize', 'This version of the Sean Wotherspoon Air Max 97/1 comes with extra laces, a dustbag, and \"Have a Nike Day\" patches, 1000 of these will be released on Air Max Day. The Air Max 97/1 Sean Wotherspoon is a perfect example of what Kevin Garnett was talking about when he yelled that â€œANYTHING IS POSSIBLEEE!!â€ This ultra-special Nike Air Max 97/1 was originally part of a Nike design contest that Sean entered and ended up winning. Reportedly inspired by Seanâ€™s love for vintage Nike hats from the 1980s, this shoe features both the upper of the Air Max 97 and the sole unit of the Air Max 1, a killer combo. The shoe also has a unique colorful corduroy upper with frayed edges, a truly one-of-a-kind look, with velour from toe to heel. These grails dropped on Air Max day 2018 (March 26th) and retailed at $160. If youâ€™re an Air Max fan, these are a pair that is a must have in your collection and one that will be sure to turn heads.		', 7, 0x30, 0x30),
(7, 1, 'Wmns Arkyn \'Steel\'', 'ac1.png', '', 85, 'womensize', 'Blending retro-inspired style with modern Boost cushioning, the womenâ€™s exclusive Arkyn is made for everyday wear. The sock-like construction on the mesh upper is made to deliver a comfortable fit, and its understated Steel coloring is complemented by grey welded Three-Stripes and structural TPU overlays in Ash Pearl. A minimalist lacing system and smooth neoprene heel panel contribute to the shoeâ€™s clean aesthetic.', 8, 0x30, 0x30),
(8, 3, 'SEGA x RS-0 \'Dr. Eggman\'', 'psega1.jpeg', '', 140, 'mensize', 'Puma pulls inspiration from Sonic the Hedgehogs arch nemesis, Dr. Eggman for the footwear brands collaboration with PUMA. Designed with a red patent leather upper with a caution tape pattern on the midsole shank, this silhouette mirrors the inventions that Dr. Eggman used to try and stop Sonic in the games. Crafted with a sock-like design around the heel collar, the shoe is finished with co-branded logos.', 9, 0x30, 0x30),
(9, 1, 'Yeezy Boost 700 V2 \'Tephra\'', 'ay7001.jpeg', 'ay7001-hot.jpg', 300, 'fullsize', 'The Yeezy Boost 700 V2 is the striking follow up to the Yeezy 700 which originally debuted at Kanye West\'s 2017 Yeezy Season 5 show. The V2 is more aerodynamic in appearance, with sleek, reflective overlays that draw the eye in. This rendition, the Yeezy Boost 700 V2 \'Tephra\' sneaker, features a mesh and suede upper with subdued natural tones, culminating in deeper hues on the midsole. This version reprises the 700\'s chunky sole, concealing full-length adidas Boost cushioning, underscored by gum-rubber tread.', 10, 0x31, 0x30),
(10, 2, 'Travis Scott x Air Jordan 1 Retro High OG \'Mocha\'', 'njd1s1.jpeg', 'njd1s1-hot.png', 720, 'mensize', 'The Travis Scott x Air Jordan 1 Retro High features a new look on the iconic silhouette, thanks to an oversized backward-facing Swoosh on the lateral side. A traditionally oriented Swoosh graces the medial side of the upper, which is built with a blend of white leather and brown suede. Additional unique details include a double-layer construction on the collar and Scottâ€™s crudely drawn face logo embossed on the heel.				', 11, 0x31, 0x30),
(11, 1, 'Pharrell x NMD Human Race \'Friends & Family\'', 'ahu1.png', '', 22000, 'mensize', 'The Pharrell x NMD Human Race \'Friends & Family\' features a burgundy Primeknit upper emblazoned with tonal Japanese characters denoting the recipients of these rare sneakers: â€˜Familyâ€™ on the right shoe and â€˜Friendsâ€™ on the left. The shoe also sports reflective laces and contrasting black on the lace cage and EVA inserts. The heel tabs are individually marked with Pharrellâ€™s equal-sign logo and a multicolor adidas trefoil.				', 12, 0x30, 0x30),
(12, 1, 'Pharrell x NMD Trail \'Human Race\'', 'ahu2.jpeg', 'ahu2-hot.png', 260, 'womensize', 'Released in November 2017 as part of a larger outdoor collection of apparel and footwear, the Pharrell x NMD Trail \'Human Race\' takes inspiration from L.A. hiking culture and retro outdoors style. The shoe features a multicolor Primeknit upper emblazoned with \'Body\' on the right shoe and â€˜Earthâ€™ on the left. The lace cage is rendered in bright yellow, while the sawtooth rubber outsole is finished in Noble Ink, matching the lace tab and rope laces.', 13, 0x31, 0x30),
(13, 1, 'Yeezy Boost 350 V2 \'Beluga\'', 'ay7.jpeg', 'ay7-hot.jpg', 700, 'fullsize', 'Unveiled at the Yeezy Season 3 presentation at Madison Square Garden, the Yeezy Boost 350 V2 \'Beluga\' dropped on September 24, 2016. The evolved Yeezy Boost 350 V2 silhouette features a two-tone grey Primeknit and a solar red stripe with SPLY-350 branding on the lateral side. On the medial side, the suede midfoot panel has been removed and the pull tab replaced with a new elastic fit.', 14, 0x31, 0x30),
(27, 2, 'Eminem x Carhartt x Air Jordan 4 \'Black Chrome\'', '34020_01.jpg.jpeg', '', 25000, 'mensize', 'One of Eminem\'s most coveted sneaker collaborations, this limited edition \'Carhartt\' Air Jordan 4 was made exclusively for select family and friends of the Detroit rapper back in 2015, with ten additional pairs auctioned off on Ebay. The design consists of a black Carhartt twill upper, metallic silver lace tabs, a contrasting white midsole, visible Air unit, and a grippy grey outsole. Signature details include Eminem\'s backwards \"E\" logo and a Jason Voorhees mask at the heel.', 15, 0x30, 0x30),
(28, 3, 'MCM x Suede Classic \'MCM\'', '366299_03.png.png', '', 1100, 'mensize', 'One of the best collabs of the year.', 16, 0x30, 0x30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detailphoto`
--

CREATE TABLE `detailphoto` (
  `IDphoto` int(11) NOT NULL,
  `IDp` int(11) NOT NULL,
  `photosrc` text CHARACTER SET utf8 NOT NULL,
  `photoname` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `detailphoto`
--

INSERT INTO `detailphoto` (`IDphoto`, `IDp`, `photosrc`, `photoname`) VALUES
(23, 5, 'uploads/ay12.jpeg', 'ay12.jpeg'),
(24, 5, 'uploads/ay13.jpeg', 'ay13.jpeg'),
(25, 5, 'uploads/ay14.jpeg', 'ay14.jpeg'),
(37, 19, 'uploads/nam9714.jpeg', 'nam9714.jpeg'),
(38, 21, 'uploads/psera11.jpeg', 'psera11.jpeg'),
(39, 21, 'uploads/psera12.jpeg', 'psera12.jpeg'),
(40, 21, 'uploads/psera13.jpeg', 'psera13.jpeg'),
(41, 21, 'uploads/psera14.jpeg', 'psera14.jpeg'),
(44, 18, 'uploads/ay11.jpeg', 'ay11.jpeg'),
(45, 22, 'uploads/ay70011.jpeg', 'ay70011.jpeg'),
(46, 22, 'uploads/ay70012.jpeg', 'ay70012.jpeg'),
(47, 22, 'uploads/ay70013.jpeg', 'ay70013.jpeg'),
(48, 22, 'uploads/ay70014.jpeg', 'ay70014.jpeg'),
(49, 23, 'uploads/njd1s11.jpeg', 'njd1s11.jpeg'),
(50, 23, 'uploads/njd1s12.jpeg', 'njd1s12.jpeg'),
(51, 23, 'uploads/njd1s13.jpeg', 'njd1s13.jpeg'),
(52, 23, 'uploads/njd1s14.jpeg', 'njd1s14.jpeg'),
(53, 26, 'uploads/ay71.jpeg', 'ay71.jpeg'),
(54, 26, 'uploads/ay72.jpeg', 'ay72.jpeg'),
(55, 26, 'uploads/ay73.jpeg', 'ay73.jpeg'),
(56, 26, 'uploads/ay74.jpeg', 'ay74.jpeg'),
(57, 25, 'uploads/ahu21.jpeg', 'ahu21.jpeg'),
(58, 25, 'uploads/ahu22.jpeg', 'ahu22.jpeg'),
(59, 25, 'uploads/ahu23.jpeg', 'ahu23.jpeg'),
(60, 25, 'uploads/ahu24.jpeg', 'ahu24.jpeg'),
(61, 10, 'uploads/njd1s11.jpeg', 'njd1s11.jpeg'),
(62, 10, 'uploads/njd1s12.jpeg', 'njd1s12.jpeg'),
(63, 10, 'uploads/njd1s13.jpeg', 'njd1s13.jpeg'),
(64, 10, 'uploads/njd1s14.jpeg', 'njd1s14.jpeg'),
(65, 5, 'uploads/ay11.jpeg', 'ay11.jpeg'),
(66, 6, 'uploads/nam9711.jpeg', 'nam9711.jpeg'),
(67, 6, 'uploads/nam9712.jpeg', 'nam9712.jpeg'),
(68, 6, 'uploads/nam9713.jpeg', 'nam9713.jpeg'),
(69, 6, 'uploads/nam9714.jpeg', 'nam9714.jpeg'),
(70, 13, 'uploads/ay71.jpeg', 'ay71.jpeg'),
(71, 13, 'uploads/ay72.jpeg', 'ay72.jpeg'),
(72, 13, 'uploads/ay73.jpeg', 'ay73.jpeg'),
(73, 13, 'uploads/ay74.jpeg', 'ay74.jpeg'),
(74, 12, 'uploads/ahu21.jpeg', 'ahu21.jpeg'),
(75, 12, 'uploads/ahu22.jpeg', 'ahu22.jpeg'),
(76, 12, 'uploads/ahu23.jpeg', 'ahu23.jpeg'),
(77, 12, 'uploads/ahu24.jpeg', 'ahu24.jpeg'),
(78, 9, 'uploads/ay70011.jpeg', 'ay70011.jpeg'),
(79, 9, 'uploads/ay70012.jpeg', 'ay70012.jpeg'),
(80, 9, 'uploads/ay70013.jpeg', 'ay70013.jpeg'),
(81, 9, 'uploads/ay70014.jpeg', 'ay70014.jpeg'),
(82, 8, 'uploads/psera11.jpeg', 'psera11.jpeg'),
(83, 8, 'uploads/psera12.jpeg', 'psera12.jpeg'),
(84, 8, 'uploads/psera13.jpeg', 'psera13.jpeg'),
(85, 8, 'uploads/psera14.jpeg', 'psera14.jpeg'),
(86, 0, 'uploads/514037_03.jpg.jpeg', '514037_03.jpg.jpeg'),
(87, 0, 'uploads/514037_04.jpg.jpeg', '514037_04.jpg.jpeg'),
(88, 0, 'uploads/514037_06.jpg.jpeg', '514037_06.jpg.jpeg'),
(89, 0, 'uploads/514037_08.jpg.jpeg', '514037_08.jpg.jpeg'),
(90, 1, 'uploads/505488_03.jpg.jpeg', '505488_03.jpg.jpeg'),
(91, 1, 'uploads/505488_04.jpg.jpeg', '505488_04.jpg.jpeg'),
(92, 1, 'uploads/505488_06.jpg.jpeg', '505488_06.jpg.jpeg'),
(93, 1, 'uploads/505488_08.jpg.jpeg', '505488_08.jpg.jpeg'),
(94, 3, 'uploads/487214_03.jpg.jpeg', '487214_03.jpg.jpeg'),
(95, 3, 'uploads/487214_04.jpg.jpeg', '487214_04.jpg.jpeg'),
(96, 3, 'uploads/487214_06.jpg.jpeg', '487214_06.jpg.jpeg'),
(97, 3, 'uploads/487214_08.jpg.jpeg', '487214_08.jpg.jpeg'),
(98, 2, 'uploads/116662_03.jpg.jpeg', '116662_03.jpg.jpeg'),
(99, 2, 'uploads/116662_04.jpg.jpeg', '116662_04.jpg.jpeg'),
(100, 2, 'uploads/116662_06.jpg.jpeg', '116662_06.jpg.jpeg'),
(101, 2, 'uploads/', ''),
(102, 4, 'uploads/491217_03.jpg.jpeg', '491217_03.jpg.jpeg'),
(103, 4, 'uploads/491217_04.jpg.jpeg', '491217_04.jpg.jpeg'),
(104, 4, 'uploads/491217_06.jpg.jpeg', '491217_06.jpg.jpeg'),
(105, 4, 'uploads/491217_08.jpg.jpeg', '491217_08.jpg.jpeg'),
(106, 27, 'uploads/34020_03.jpg.jpeg', '34020_03.jpg.jpeg'),
(107, 27, 'uploads/34020_04.jpg.jpeg', '34020_04.jpg.jpeg'),
(108, 27, 'uploads/34020_06.jpg.jpeg', '34020_06.jpg.jpeg'),
(109, 27, 'uploads/34020_08.jpg.jpeg', '34020_08.jpg.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `IDs` int(11) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`IDs`, `status`) VALUES
(0, 'Unconfirmed'),
(1, 'Confirmed and processing'),
(2, 'Delivery'),
(3, 'Canceled'),
(4, 'Done');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(150) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'nak', 'nak@gmail.com', 'nakadmin', 'e034b36276d0c096af70c1b5c4e18ca7', 0),
(2, 'nak2', 'nak2@gmail.com', 'nak2admin', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, 'Nhat', 'tranminhnhat1005@gmail.com', 'nakdeptrai', 'f415e8bf5ef2d7162579382f4ec55314', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `IDtr` int(11) NOT NULL,
  `userName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `bill` longtext CHARACTER SET utf8 NOT NULL,
  `total` int(11) NOT NULL,
  `fname` text CHARACTER SET utf8 NOT NULL,
  `lname` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `phone` text CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `timemake` datetime NOT NULL,
  `IDs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`IDtr`, `userName`, `bill`, `total`, `fname`, `lname`, `email`, `phone`, `address`, `timemake`, `IDs`) VALUES
(8, 'nakdeptrai', '2		Yeezy Boost 350 V2 \'Clay\'\r\n\r\n', 540, 'park', 'soong nak', 'psn@gmail.com', '0123456789', '123 abc def ghy', '2019-06-30 00:12:38', 1),
(10, 'nakdeptrai', '3		SEGA x RS-0 \'Dr. Eggman\'\r\n\r\n1		Travis Scott x Air Jordan 1 Retro High OG \'Mocha\'\r\n\r\n', 1140, 'Tran', 'Minh Nhat', 'psn@gmail.com', '0123456789', '179 Dang Thuy Tram St, Binh Thanh, HCMC', '2019-06-30 00:57:16', 2),
(12, 'thioccho', '3		Yeezy Boost 350 V2 \'True Form\'\r\n\r\n', 1065, 'Daniel', 'Da Silva', 'silvacaca123@gmail.com', '0889988990', '', '2019-06-06 19:52:19', 4),
(13, 'nakdeptrai', '3		Travis Scott x Air Jordan 1 Retro High OG \'Mocha\'\r\n\r\n', 2160, 'Leonardo', 'Gattuso', 'Leogatty@gmail,com', '0789987722', '', '2019-06-06 19:54:17', 4),
(14, 'nakdeptrai', '2		Yeezy Boost 350 V2 GID \'Glow\'\r\n\r\n2		MCM x Suede Classic \'MCM\'\r\n\r\n', 2998, 'Geogre', 'Badminton', 'Geobaddy@gmail.com', '0921312332', '', '2019-07-06 19:55:34', 1),
(15, 'test1', '1		Travis Scott x Air Jordan 1 Retro High OG \'Mocha\'\r\n\r\n2		Pharrell x NMD Trail \'Human Race\'\r\n\r\n', 1240, 'Castrol', 'Powerone', 'Cp1@gmail,com', '036636636', '77 Wellington Newjock USB', '2019-07-06 19:57:30', 0),
(16, 'test1', '3		Yeezy Boost 350 V2 \'Beluga\'\r\n\r\n1		Pharrell x NMD Human Race \'Friends & Family\'\r\n\r\n', 24100, 'Ricky', 'Lampurk', 'RickyLam@yahoo.com', '0556589122', '552 Bonsay Mellington Kanade', '2019-07-06 19:59:06', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usertable`
--

CREATE TABLE `usertable` (
  `userName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `userPass` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `usertable`
--

INSERT INTO `usertable` (`userName`, `userPass`) VALUES
('adidas', '1'),
('nakdeptrai', '1'),
('nguyentrongthi', '123'),
('someone', '1'),
('tamoccho', '123'),
('test1', '1'),
('test2', '1'),
('thioccho', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`IDbrand`);

--
-- Chỉ mục cho bảng `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`IDp`);

--
-- Chỉ mục cho bảng `detailphoto`
--
ALTER TABLE `detailphoto`
  ADD PRIMARY KEY (`IDphoto`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`IDtr`);

--
-- Chỉ mục cho bảng `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`userName`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `IDbrand` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `detail`
--
ALTER TABLE `detail`
  MODIFY `IDp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `detailphoto`
--
ALTER TABLE `detailphoto`
  MODIFY `IDphoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `IDtr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
