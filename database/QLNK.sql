-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 21, 2022 lúc 04:23 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `QLNK`
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
('95D8E7723', '', '2022-03-20', ''),
('9D1AACE09', 'OK OK', '2022-03-20', ''),
('DE9E18GH4', 'Ngon', '2022-03-17', '');

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
('0000001', 'Đào Duy Đán', 'Vân Từ - Phú Xuyên - Hà Nội', '2022-03-18', 'Hà Nội'),
('001201031', 'Nguyễn Văn Đ', 'Giẽ Hạ - Phú Xuyên - Hà Nội', '2022-03-01', 'Hà Nội'),
('010827753', 'Nguyễn Minh Triều', 'Vân Từ - Phú Xuyên - Hà Nội', '2022-03-01', 'Hà Nội'),
('010835021', 'Nguyễn Thị H', 'Thủy Phú - Phú Xuyên - Hà Nội', '2022-03-01', 'Hà Nội'),
('018376803', 'Nguyễn Thu M', 'Vân Từ - Phú Xuyên - Hà Nội', '2022-03-01', 'Hà Nội'),
('019284521', 'Nguyễn Văn C', 'Vân Từ - Phú Xuyên - Hà Nội', '2022-03-01', 'Hà Nội'),
('019826761', 'Nguyễn Văn A', 'Phú Yên - Phú Xuyên - Hà Nội', '2022-03-01', 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `SoHoKhau_taikhoan`
--

CREATE TABLE `SoHoKhau_taikhoan` (
  `ma_shk` varchar(9) NOT NULL,
  `ma_taikhoan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4, 'daoduydan', '$2y$10$XJcTVKfljMVRNc0FN5JSY.QwpejoN0Wm.ZgOTWST0qNwVeUBL.qGW', 'Đào Duy Đán', 'Giám đốc', 1, '2022-03-20 15:59:16', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Taikhoan_cau hoi`
--

CREATE TABLE `Taikhoan_cau hoi` (
  `ma_taikhoan` int(10) UNSIGNED NOT NULL,
  `ma_cauhoi` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Taikhoan_taikhoan`
--

CREATE TABLE `Taikhoan_taikhoan` (
  `ma_taikhoan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Taikhoan_tamtru`
--

CREATE TABLE `Taikhoan_tamtru` (
  `ma_taikhoan` int(10) UNSIGNED NOT NULL,
  `ma_dontt` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Taikhoan_tamvang`
--

CREATE TABLE `Taikhoan_tamvang` (
  `ma_taikhoan` int(10) UNSIGNED NOT NULL,
  `ma_dontv` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Taikhoan_thanhvien`
--

CREATE TABLE `Taikhoan_thanhvien` (
  `ma_taikhoan` int(10) UNSIGNED NOT NULL,
  `cccd` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('0D7DF4993', 'Phú Yên', 'Đào Duy Đán', '2022-03-21', '001201023000', 'Công an huyện Phú Xuyên', '2022-03-22', 'HN', '20 Khương Thượng - Đống Đa - TP Hà Nội', '0000-00-00', 'Thích', 'daodan2612@gmail.com', 0, 'Nhận qua cổng thông tin');

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
('010835021', '001003045982', 1, '', 'Nguyễn Thị H', '', '2001-01-10', 'Nam', 'Thủy Phú - Phú Xuyên - Hà Nội', 'Kinh', 'Không', 'Việt Nam', 'Nông dân', 'hn');

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
  ADD PRIMARY KEY (`ma_phanhoi`),
  ADD KEY `fk_tbphanhoi2` (`ma_cauhoi`);

--
-- Chỉ mục cho bảng `sohokhau`
--
ALTER TABLE `sohokhau`
  ADD PRIMARY KEY (`ma_shk`);

--
-- Chỉ mục cho bảng `SoHoKhau_taikhoan`
--
ALTER TABLE `SoHoKhau_taikhoan`
  ADD PRIMARY KEY (`ma_shk`,`ma_taikhoan`);

--
-- Chỉ mục cho bảng `Taikhoan_cau hoi`
--
ALTER TABLE `Taikhoan_cau hoi`
  ADD PRIMARY KEY (`ma_taikhoan`,`ma_cauhoi`);

--
-- Chỉ mục cho bảng `Taikhoan_taikhoan`
--
ALTER TABLE `Taikhoan_taikhoan`
  ADD PRIMARY KEY (`ma_taikhoan`);

--
-- Chỉ mục cho bảng `Taikhoan_tamtru`
--
ALTER TABLE `Taikhoan_tamtru`
  ADD PRIMARY KEY (`ma_taikhoan`,`ma_dontt`);

--
-- Chỉ mục cho bảng `Taikhoan_tamvang`
--
ALTER TABLE `Taikhoan_tamvang`
  ADD PRIMARY KEY (`ma_taikhoan`,`ma_dontv`);

--
-- Chỉ mục cho bảng `Taikhoan_thanhvien`
--
ALTER TABLE `Taikhoan_thanhvien`
  ADD PRIMARY KEY (`ma_taikhoan`,`cccd`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
