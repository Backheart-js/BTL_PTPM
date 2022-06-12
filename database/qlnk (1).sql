-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2022 lúc 10:17 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlnk`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `ma_cauhoi` varchar(9) NOT NULL,
  `hoten` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `lydo` varchar(1000) NOT NULL,
  `ngayhoi` date NOT NULL,
  `trangthai` int(1) NOT NULL,
  `loaicauhoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`ma_cauhoi`, `hoten`, `email`, `sdt`, `lydo`, `ngayhoi`, `trangthai`, `loaicauhoi`) VALUES
('0FEE2E1A8', 'Đào Duy Đán', 'daodan2001@gmail.com', '0366887398', 'GiayChuyenHoKhau036688739818032022.docx', '2022-03-18', 2, 2),
('193994225', 'Đào Duy Đán', 'daodan2612@gmail.com', '0366887398', 'Non', '2022-03-18', 2, 1),
('7CA783E6F', 'Đào Duy Đán', 'daodan2612@gmail.com', '0366887398', 'Cho tôi hỏi rằng', '2022-03-18', 1, 1),
('827FB3CEA', 'Đào Duy Đán', 'daodan2612@gmail.com', '0366887398', 'PLLLLLLLLL', '2022-06-08', 0, 1),
('DE9E187F7', 'Đào Duy Đán', 'daodan2001@gmail.com', '0366887398', 'Thông tin của tôi trong sổ hộ khẩu bị sai lệnh mong cán bộ xem lại và chỉnh sửa giúp tôi!', '2022-03-18', 1, 1),
('ED43D1AE2', 'Văn A', 'daokhaipx@gmail.com', '0366887390', 'GiayChuyenHoKhau036688739019032022.docx', '2022-03-19', 0, 2),
('F8FF4D652', 'Đào Duy Đán', 'daodan2612@gmail.com', '0366887393', 'GiayChuyenHoKhau036688739319032022.docx', '2022-03-19', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `ma_phanhoi` varchar(9) NOT NULL,
  `phanhoi` varchar(1000) NOT NULL,
  `ngayphanhoi` date NOT NULL,
  `ma_cauhoi` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phanhoi`
--

INSERT INTO `phanhoi` (`ma_phanhoi`, `phanhoi`, `ngayphanhoi`, `ma_cauhoi`) VALUES
('95D8E7723', '', '2022-03-20', '0FEE2E1A8'),
('9D1AACE09', 'OK OK', '2022-03-20', '193994225'),
('DE9E18GH4', 'Ngon', '2022-03-17', 'ED43D1AE2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sohokhau`
--

CREATE TABLE `sohokhau` (
  `ma_shk` varchar(9) NOT NULL,
  `hotenchuho` varchar(40) NOT NULL,
  `noithuongtru` varchar(200) NOT NULL,
  `ngaycap` date NOT NULL,
  `thanhpho` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sohokhau`
--

INSERT INTO `sohokhau` (`ma_shk`, `hotenchuho`, `noithuongtru`, `ngaycap`, `thanhpho`) VALUES
('0000001', 'Trần Hữu C', 'Thủy Phú - Phú Xuyên - Hà Nội', '2022-06-09', 'Hà Nội'),
('010835021', 'Nguyễn Thị H', 'Thủy Phú - Phú Xuyên - Hà Nội', '2022-03-01', 'Hà Nội'),
('01093929', 'Đào Duy Đại', 'Vân Từ - Phú Xuyên - Hà Nội', '2022-06-09', 'Hà Nội'),
('0456', 'Đào Duy Đán', 'Vân Từ - Phú Xuyên - Hà Nội', '2022-06-09', 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sohokhau_taikhoan`
--

CREATE TABLE `sohokhau_taikhoan` (
  `ma_shk` varchar(9) NOT NULL,
  `ma_taikhoan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sohokhau_taikhoan`
--

INSERT INTO `sohokhau_taikhoan` (`ma_shk`, `ma_taikhoan`) VALUES
('0000001', 1),
('010835021', 1),
('01093929', 1),
('0456', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ma_taikhoan` int(10) UNSIGNED NOT NULL,
  `taikhoan` varchar(20) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `chucvu` varchar(100) NOT NULL,
  `conlamviec` tinyint(1) NOT NULL,
  `ngaykhoitao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `capbac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`ma_taikhoan`, `taikhoan`, `matkhau`, `hoten`, `chucvu`, `conlamviec`, `ngaykhoitao`, `capbac`) VALUES
(1, 'nguyenvanbanh', '$2y$10$ZP0chrIq7NXcKcZ0RQwPC.vluWINiuR24YDiPswsNFPVMrxZ5HNHa', 'Nguyễn Văn Bảnh', 'Công an xã', 1, '2022-03-16 17:46:57', 2),
(2, 'admin', '$2y$10$.VmlFr7TY7nXXvGBfhdbg.oQec18uhUxfq1wwjNYaVKsHBMQ0hF0.', 'admin', 'admin', 1, '2022-03-20 15:23:40', 1),
(4, 'daoduydan', '$2y$10$ZP0chrIq7NXcKcZ0RQwPC.vluWINiuR24YDiPswsNFPVMrxZ5HNHa', 'Đào Duy Đán', 'Giám đốc', 1, '2022-06-08 06:56:17', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan_cau hoi`
--

CREATE TABLE `taikhoan_cau hoi` (
  `ma_taikhoan` int(10) UNSIGNED NOT NULL,
  `ma_cauhoi` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan_taikhoan`
--

CREATE TABLE `taikhoan_taikhoan` (
  `ma_taikhoan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan_tamtru`
--

CREATE TABLE `taikhoan_tamtru` (
  `ma_taikhoan` int(10) UNSIGNED NOT NULL,
  `ma_dontt` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan_tamvang`
--

CREATE TABLE `taikhoan_tamvang` (
  `ma_taikhoan` int(10) UNSIGNED NOT NULL,
  `ma_dontv` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan_thanhvien`
--

CREATE TABLE `taikhoan_thanhvien` (
  `ma_taikhoan` int(10) UNSIGNED NOT NULL,
  `cccd` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan_thanhvien`
--

INSERT INTO `taikhoan_thanhvien` (`ma_taikhoan`, `cccd`) VALUES
(1, '001003045982'),
(1, '001201023099'),
(1, '001201098134'),
(1, '001201098135'),
(1, '1111113'),
(4, '1111114');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tamtru`
--

CREATE TABLE `tamtru` (
  `ma_dontt` varchar(9) NOT NULL,
  `conganxa` varchar(30) NOT NULL,
  `hoten` varchar(40) NOT NULL,
  `ngaysinh` date NOT NULL,
  `cccd` varchar(12) NOT NULL,
  `cccd_noicap` varchar(100) NOT NULL,
  `cccd_capngay` date NOT NULL,
  `diachithuongtru` varchar(200) NOT NULL,
  `choohiennay` varchar(200) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `lydo` varchar(300) NOT NULL,
  `email` varchar(30) NOT NULL,
  `xacnhan` int(11) NOT NULL,
  `phanhoi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tamtru`
--

INSERT INTO `tamtru` (`ma_dontt`, `conganxa`, `hoten`, `ngaysinh`, `cccd`, `cccd_noicap`, `cccd_capngay`, `diachithuongtru`, `choohiennay`, `ngaybatdau`, `lydo`, `email`, `xacnhan`, `phanhoi`) VALUES
('25F37673E', 'Phú Yên', 'Đào Duy Đán', '2022-03-21', '001201023000', 'Công an huyện Phú Xuyên', '2022-03-22', 'HN', '20 Khương Thượng - Đống Đa - TP Hà Nội', '0000-00-00', 'Thích', 'daodan2612@gmail.com', 0, 'Nhận qua cổng thông tin'),
('796A3E8A9', 'Phú Yên', 'Đào Duy Đán', '2022-03-17', '001201023000', 'Công an huyện Phú Xuyên', '2022-03-17', 'HN', '20 Khương Thượng - Đống Đa - TP Hà Nội', '0000-00-00', 'Tôi muốn đi xa', 'daodan2001@gmail.com', 0, 'Nhận trực tiếp tại trụ sở cơ quan chức năng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tamvang`
--

CREATE TABLE `tamvang` (
  `ma_dontv` varchar(9) NOT NULL,
  `conganxa` varchar(30) NOT NULL,
  `hoten` varchar(40) NOT NULL,
  `ngaysinh` date NOT NULL,
  `cccd` varchar(12) NOT NULL,
  `cccd_noicap` varchar(100) NOT NULL,
  `cccd_capngay` date NOT NULL,
  `diachithuongtru` varchar(200) NOT NULL,
  `choohiennay` varchar(200) NOT NULL,
  `ngaybatdau` date NOT NULL,
  `lydo` varchar(300) NOT NULL,
  `email` varchar(30) NOT NULL,
  `xacnhan` tinyint(4) NOT NULL,
  `phanhoi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tamvang`
--

INSERT INTO `tamvang` (`ma_dontv`, `conganxa`, `hoten`, `ngaysinh`, `cccd`, `cccd_noicap`, `cccd_capngay`, `diachithuongtru`, `choohiennay`, `ngaybatdau`, `lydo`, `email`, `xacnhan`, `phanhoi`) VALUES
('0D7DF4993', 'Phú Yên', 'Đào Duy Đán', '2022-03-21', '001201023000', 'Công an huyện Phú Xuyên', '2022-03-22', 'HN', '20 Khương Thượng - Đống Đa - TP Hà Nội', '0000-00-00', 'Thích', 'daodan2612@gmail.com', 0, 'Nhận qua cổng thông tin'),
('D7B79CC91', 'Hoàn Kiếm', 'Đào Duy Đán', '2022-06-09', '001201023000', 'Công an huyện Phú Xuyên', '2022-06-10', 'HN', '20 Khương Thượng - Đống Đa - TP Hà Nội', '2022-06-09', 'Tôi muốn đi xa', 'daodan2612@gmail.com', 1, 'Nhận qua cổng thông tin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `ma_shk` varchar(9) NOT NULL,
  `cccd` varchar(12) NOT NULL,
  `chuho` tinyint(1) NOT NULL,
  `quanhech` varchar(20) NOT NULL,
  `hoten` varchar(40) NOT NULL,
  `hotenkhac` varchar(40) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(5) NOT NULL,
  `nguyenquan` varchar(200) NOT NULL,
  `dantoc` varchar(15) NOT NULL,
  `tongiao` varchar(40) NOT NULL,
  `quoctich` varchar(30) NOT NULL,
  `nghenghiepnoilamviec` varchar(200) NOT NULL,
  `noithuongtrutruocday` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`ma_shk`, `cccd`, `chuho`, `quanhech`, `hoten`, `hotenkhac`, `ngaysinh`, `gioitinh`, `nguyenquan`, `dantoc`, `tongiao`, `quoctich`, `nghenghiepnoilamviec`, `noithuongtrutruocday`) VALUES
('010835021', '001003045982', 1, '', 'Nguyễn Thị H', '', '2001-01-10', 'Nam', 'Thủy Phú - Phú Xuyên - Hà Nội', 'Kinh', 'Không', 'Việt Nam', 'Nông dân', 'hn'),
('0000001', '001201023099', 1, '', 'Trần Hữu C', '', '1998-09-01', 'Nữ', 'Thủy Phú - Phú Xuyên - Hà Nội', 'Kinh', 'Không', 'Việt Nam', 'Nông dân', ''),
('0000001', '001201098134', 0, 'Con', 'Nguyễn Hoài Châm', '', '2022-06-02', 'Nữ', 'Phú Yên - Phú Xuyên - Hà Nội', 'Kinh', 'Không', 'Việt Nam', 'Học sinh', ''),
('0456', '001201098135', 1, '', 'Đào Duy Đán', '', '2022-06-08', 'Nam', 'Phú Yên - Phú Xuyên - Hà Nội', 'Kinh', 'Không', 'Việt Nam', 'Nông dân', ''),
('01093929', '1111113', 1, '', 'Đào Duy Đại', '', '2022-06-01', 'Nam', 'Phú Yên - Phú Xuyên - Hà Nội', 'Kinh', 'Không', 'Việt Nam', 'Học sinh', ''),
('0000001', '1111114', 0, 'Con', 'Nguyễn Thị F', '', '2022-06-09', 'Nữ', 'Giẽ Hạ - Phú Xuyên - Hà Nội', 'Kinh', 'Không', 'Việt Nam', 'Học sinh', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`ma_cauhoi`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`ma_phanhoi`,`ma_cauhoi`),
  ADD KEY `ma_cauhoi` (`ma_cauhoi`);

--
-- Chỉ mục cho bảng `sohokhau`
--
ALTER TABLE `sohokhau`
  ADD PRIMARY KEY (`ma_shk`);

--
-- Chỉ mục cho bảng `sohokhau_taikhoan`
--
ALTER TABLE `sohokhau_taikhoan`
  ADD PRIMARY KEY (`ma_shk`,`ma_taikhoan`),
  ADD KEY `ma_taikhoan` (`ma_taikhoan`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ma_taikhoan`);

--
-- Chỉ mục cho bảng `taikhoan_cau hoi`
--
ALTER TABLE `taikhoan_cau hoi`
  ADD PRIMARY KEY (`ma_taikhoan`,`ma_cauhoi`),
  ADD KEY `ma_cauhoi` (`ma_cauhoi`);

--
-- Chỉ mục cho bảng `taikhoan_taikhoan`
--
ALTER TABLE `taikhoan_taikhoan`
  ADD PRIMARY KEY (`ma_taikhoan`);

--
-- Chỉ mục cho bảng `taikhoan_tamtru`
--
ALTER TABLE `taikhoan_tamtru`
  ADD PRIMARY KEY (`ma_taikhoan`,`ma_dontt`),
  ADD KEY `ma_dontt` (`ma_dontt`);

--
-- Chỉ mục cho bảng `taikhoan_tamvang`
--
ALTER TABLE `taikhoan_tamvang`
  ADD PRIMARY KEY (`ma_taikhoan`,`ma_dontv`),
  ADD KEY `ma_dontv` (`ma_dontv`);

--
-- Chỉ mục cho bảng `taikhoan_thanhvien`
--
ALTER TABLE `taikhoan_thanhvien`
  ADD PRIMARY KEY (`ma_taikhoan`,`cccd`),
  ADD KEY `cccd` (`cccd`);

--
-- Chỉ mục cho bảng `tamtru`
--
ALTER TABLE `tamtru`
  ADD PRIMARY KEY (`ma_dontt`);

--
-- Chỉ mục cho bảng `tamvang`
--
ALTER TABLE `tamvang`
  ADD PRIMARY KEY (`ma_dontv`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`cccd`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD CONSTRAINT `phanhoi_ibfk_1` FOREIGN KEY (`ma_cauhoi`) REFERENCES `cauhoi` (`ma_cauhoi`);

--
-- Các ràng buộc cho bảng `sohokhau_taikhoan`
--
ALTER TABLE `sohokhau_taikhoan`
  ADD CONSTRAINT `sohokhau_taikhoan_ibfk_1` FOREIGN KEY (`ma_shk`) REFERENCES `sohokhau` (`ma_shk`),
  ADD CONSTRAINT `sohokhau_taikhoan_ibfk_2` FOREIGN KEY (`ma_taikhoan`) REFERENCES `taikhoan` (`ma_taikhoan`);

--
-- Các ràng buộc cho bảng `taikhoan_cau hoi`
--
ALTER TABLE `taikhoan_cau hoi`
  ADD CONSTRAINT `taikhoan_cau hoi_ibfk_1` FOREIGN KEY (`ma_taikhoan`) REFERENCES `taikhoan` (`ma_taikhoan`),
  ADD CONSTRAINT `taikhoan_cau hoi_ibfk_2` FOREIGN KEY (`ma_cauhoi`) REFERENCES `cauhoi` (`ma_cauhoi`);

--
-- Các ràng buộc cho bảng `taikhoan_taikhoan`
--
ALTER TABLE `taikhoan_taikhoan`
  ADD CONSTRAINT `taikhoan_taikhoan_ibfk_1` FOREIGN KEY (`ma_taikhoan`) REFERENCES `taikhoan` (`ma_taikhoan`);

--
-- Các ràng buộc cho bảng `taikhoan_tamtru`
--
ALTER TABLE `taikhoan_tamtru`
  ADD CONSTRAINT `taikhoan_tamtru_ibfk_1` FOREIGN KEY (`ma_dontt`) REFERENCES `tamtru` (`ma_dontt`),
  ADD CONSTRAINT `taikhoan_tamtru_ibfk_2` FOREIGN KEY (`ma_taikhoan`) REFERENCES `taikhoan` (`ma_taikhoan`);

--
-- Các ràng buộc cho bảng `taikhoan_tamvang`
--
ALTER TABLE `taikhoan_tamvang`
  ADD CONSTRAINT `taikhoan_tamvang_ibfk_1` FOREIGN KEY (`ma_dontv`) REFERENCES `tamvang` (`ma_dontv`),
  ADD CONSTRAINT `taikhoan_tamvang_ibfk_2` FOREIGN KEY (`ma_taikhoan`) REFERENCES `taikhoan` (`ma_taikhoan`);

--
-- Các ràng buộc cho bảng `taikhoan_thanhvien`
--
ALTER TABLE `taikhoan_thanhvien`
  ADD CONSTRAINT `taikhoan_thanhvien_ibfk_1` FOREIGN KEY (`cccd`) REFERENCES `thanhvien` (`cccd`),
  ADD CONSTRAINT `taikhoan_thanhvien_ibfk_2` FOREIGN KEY (`ma_taikhoan`) REFERENCES `taikhoan` (`ma_taikhoan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
