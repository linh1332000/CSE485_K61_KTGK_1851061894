-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 10:24 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `benh_nhan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom_mau`
--

CREATE TABLE `nhom_mau` (
  `id_blood_type` int(11) NOT NULL,
  `bold_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhom_mau`
--

INSERT INTO `nhom_mau` (`id_blood_type`, `bold_type`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'O'),
(4, 'AB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `patientid` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `id_blood_type` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `id_blood_type`, `created_on`, `modified_on`) VALUES
(1, 'Bùi ', 'Văn Linh', '2000-03-13', 'Nam', 382144259, 'blinh8358@gmail.com', '1m88', '60kg', 1, '2021-10-21 08:35:33', '2021-10-21 08:35:33'),
(2, 'Đỗ ', 'Duy Huy', '2000-12-09', 'Nam', 971038211, 'duyhuy@gmail.com', '1m7', '80kg', 2, '2021-10-21 08:18:57', '2021-10-21 08:18:57'),
(3, 'Đỗ', 'Thị Linh', '2000-01-09', 'Nữ', 382144259, 'linhdo@gmail.com', '1m55', '60kg', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Tạ', 'Hồng Quân', '2000-01-20', 'Nam', 314142211, 'taquan@gmail.com', '1m74', '67kg', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhom_mau`
--
ALTER TABLE `nhom_mau`
  ADD PRIMARY KEY (`id_blood_type`);

--
-- Chỉ mục cho bảng `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`),
  ADD KEY `id_blood_type` (`id_blood_type`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhom_mau`
--
ALTER TABLE `nhom_mau`
  MODIFY `id_blood_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `id_blood_type` FOREIGN KEY (`id_blood_type`) REFERENCES `nhom_mau` (`id_blood_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
