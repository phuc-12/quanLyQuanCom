-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 08:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chipheo`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `maMA` int(11) NOT NULL,
  `maHD` int(11) NOT NULL,
  `maKH` int(11) NOT NULL,
  `maNV` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `moTa` varchar(100) NOT NULL,
  `uuDai` int(11) NOT NULL,
  `chietKhau` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ctkm`
--

CREATE TABLE `ctkm` (
  `maKM` int(11) NOT NULL,
  `tenKM` varchar(50) NOT NULL,
  `moTa` text DEFAULT NULL,
  `loaiKH` varchar(50) NOT NULL,
  `trangThai` tinyint(4) NOT NULL,
  `chietKhau` float NOT NULL,
  `thoiGianBatDau` datetime NOT NULL,
  `thoiGianKetThuc` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ctkm`
--

INSERT INTO `ctkm` (`maKM`, `tenKM`, `moTa`, `loaiKH`, `trangThai`, `chietKhau`, `thoiGianBatDau`, `thoiGianKetThuc`) VALUES
(1, 'Giảm 10%', 'Đơn tối thiểu đ50K\r\nGiảm tối đa 30K', 'Vàng', 1, 10, '2024-11-01 21:31:47', '2024-11-30 21:31:47'),
(2, 'Giảm 30K', 'Giảm 30K cho đơn tối thiểu 70k\r\nÁp dụng lấy mã', 'Vàng', 1, 30, '2024-11-20 21:33:53', '2024-11-21 21:33:53'),
(3, 'Giảm 8%', 'Đơn tối thiểu đ30K\r\nGiảm tối đa 20K', 'Bạc', 1, 8, '2024-11-02 21:31:47', '2024-11-26 21:31:47'),
(4, 'Giảm 12%', 'Giảm 12% tổng hóa đơn', 'Vàng', 1, 12, '2024-12-07 20:30:26', '2024-12-07 20:30:26'),
(5, 'Giảm 20K', NULL, 'Bạc', 1, 20, '2024-12-07 20:30:26', '2024-12-07 20:30:26'),
(6, 'Giảm 50K', 'Hóa đơn tối thiểu 150k', 'Kim cương', 1, 50, '2024-12-07 20:30:26', '2024-12-07 20:30:26'),
(7, 'Giảm 15%', 'Giảm 15% tổng hóa đơn', 'Kim cương', 1, 15, '2024-12-07 20:30:26', '2024-12-07 20:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(11) NOT NULL,
  `maKH` varchar(10) NOT NULL,
  `ngayThang` datetime DEFAULT NULL,
  `trangThai` tinyint(4) NOT NULL,
  `trangThaiGH` tinyint(4) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`maHD`, `maKH`, `ngayThang`, `trangThai`, `trangThaiGH`, `img`) VALUES
(5, '12', '2024-12-07 17:26:56', 1, 0, ''),
(7, '111', '2024-12-07 19:31:19', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `maKH` varchar(10) NOT NULL,
  `hoTen` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `idNguoiDung` int(11) NOT NULL,
  `maLoaiKH` int(11) NOT NULL,
  `diemTichLuy` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`maKH`, `hoTen`, `username`, `idNguoiDung`, `maLoaiKH`, `diemTichLuy`) VALUES
('111', 'Khách hàng', 'khachhang', 6, 4, 0),
('12', 'Lê Văn Vinh', 'vinh123', 3, 2, 445),
('34', 'Nguyễn Thị Nga', 'nga123', 2, 1, 201);

-- --------------------------------------------------------

--
-- Table structure for table `loaikhachhang`
--

CREATE TABLE `loaikhachhang` (
  `maLoaiKH` int(11) NOT NULL,
  `loaiKH` varchar(50) NOT NULL,
  `nguongDiem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaikhachhang`
--

INSERT INTO `loaikhachhang` (`maLoaiKH`, `loaiKH`, `nguongDiem`) VALUES
(1, 'Bạc', 200),
(2, 'Vàng', 400),
(3, 'Kim cương', 700),
(4, 'Khách thường', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaimonan`
--

CREATE TABLE `loaimonan` (
  `maLoaiMA` int(11) NOT NULL,
  `tenLoaiMA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaimonan`
--

INSERT INTO `loaimonan` (`maLoaiMA`, `tenLoaiMA`) VALUES
(1, 'Món mặn'),
(2, 'Món chay'),
(3, 'Nước uống'),
(4, 'Tráng miệng'),
(5, 'Tặng kèm');

-- --------------------------------------------------------

--
-- Table structure for table `loainhanvien`
--

CREATE TABLE `loainhanvien` (
  `maLoaiNV` int(11) NOT NULL,
  `tenLoaiNV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loainhanvien`
--

INSERT INTO `loainhanvien` (`maLoaiNV`, `tenLoaiNV`) VALUES
(3, 'Hậu cần'),
(1, 'Nhân viên bán hàng'),
(2, 'Nhân viên bếp');

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `maMA` int(11) NOT NULL,
  `maLoaiMA` int(11) NOT NULL,
  `tenMA` varchar(50) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `donGia` decimal(10,3) NOT NULL DEFAULT 0.000,
  `donViTinh` varchar(100) NOT NULL,
  `nguyenLieu` varchar(100) NOT NULL,
  `hinhAnh` varchar(100) NOT NULL,
  `trangThai` tinyint(4) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`maMA`, `maLoaiMA`, `tenMA`, `soLuong`, `donGia`, `donViTinh`, `nguyenLieu`, `hinhAnh`, `trangThai`, `mota`) VALUES
(1, 1, 'Cơm - ba chỉ kho tiêu', 1, 37.000, 'VND', '', 'bachikhotieu.png', 1, ''),
(2, 1, 'Cơm - bò xào bông cải', 1, 40.000, 'VND', '', 'boxaobongcai.png', 1, ''),
(3, 1, 'Cơm - thịt kho đậu hủ', 1, 35.000, 'VND', '', 'thitkhodauhu.png', 1, ''),
(4, 1, 'Cơm - mực xào chua ngọt', 1, 40.000, 'VND', '', 'mucxaochuangot.png', 1, ''),
(5, 1, 'Cơm - trứng cuộn thịt băm', 1, 32.000, 'VND', '', 'trungcuonthitbam.png', 1, ''),
(6, 1, 'Cơm - mực xào thập cẩm', 1, 40.000, 'VND', '', 'mucxaothapcam.png', 1, ''),
(7, 2, 'Cơm - đậu hủ kho tiêu', 1, 30.000, 'VND', '', 'dauhukhotieu.png', 1, ''),
(8, 2, 'Cơm - đậu hủ cuộn rong biển', 1, 35.000, 'VND', '', 'dauhucuonrongbien.png', 1, ''),
(9, 2, 'Cơm - chả trứng chay', 1, 35.000, 'VND', '', 'chatrungchay.png', 1, ''),
(10, 2, 'Cơm - sườn non ram', 1, 30.000, 'VND', '', 'suonchayram.png', 1, ''),
(11, 4, 'YogurtOreo', 1, 35.000, 'VND', '', 'yogurtoreo.png', 1, ''),
(12, 4, 'Rau câu truyền thống', 1, 25.000, 'VND', '', 'raucauduatruyenthong.png', 1, ''),
(13, 4, 'Bánh chuối hấp', 1, 30.000, 'VND', '', 'banhchuoihap.png', 1, ''),
(14, 4, 'Sữa chua trái cây', 1, 25.000, 'VND', '', 'suachuatraicay.png', 1, ''),
(15, 4, 'Chè vải hạt sen', 1, 30.000, 'VND', '', 'chevaihatsen.png', 1, ''),
(16, 3, 'Pepsi lon', 1, 15.000, 'VND', '', 'pepsi.png', 1, ''),
(17, 3, 'Sting lon', 1, 15.000, 'VND', '', 'sting.png', 1, ''),
(18, 3, 'Sprite lon', 1, 15.000, 'VND', '', 'sprite.png', 1, ''),
(19, 3, 'Dừa lạnh', 1, 20.000, 'VND', '', 'dualanh.png', 1, ''),
(20, 3, 'Nước ép táo', 1, 25.000, 'VND', '', 'eptao.png', 1, ''),
(21, 5, 'Rau câu truyền thống miễn phí', 1, 0.000, 'Cái', '', 'raucauduatruyenthong.png\r\n', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `monan_nguyenlieu`
--

CREATE TABLE `monan_nguyenlieu` (
  `maMA` int(11) NOT NULL,
  `maNVL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguyenlieu`
--

CREATE TABLE `nguyenlieu` (
  `maNVL` int(11) NOT NULL,
  `tenNVL` varchar(50) NOT NULL,
  `slTon` decimal(10,0) NOT NULL,
  `donViTinh` varchar(10) NOT NULL,
  `moTa` text DEFAULT NULL,
  `ngayNhap` datetime DEFAULT NULL,
  `ngayHetHan` datetime DEFAULT NULL,
  `trangThai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguyenlieu`
--

INSERT INTO `nguyenlieu` (`maNVL`, `tenNVL`, `slTon`, `donViTinh`, `moTa`, `ngayNhap`, `ngayHetHan`, `trangThai`) VALUES
(1, 'Cà rốt', 13, 'kg', 'Nguyên vật liệu tươi', NULL, NULL, 1),
(2, 'Hành tây', 23, 'kg', 'Nguyên vật liệu tươi', NULL, NULL, 1),
(3, 'Cải thìa', 7, 'kg', 'Nguyên vật liệu tươi', NULL, NULL, 1),
(4, 'Đậu hủ', 14, 'pak', 'Nguyên vật liệu tươi', NULL, NULL, 1),
(5, 'Gạo', 40, 'kg', 'Nguyên vật liệu khô', NULL, NULL, 1),
(6, 'Cà chua', 2, 'kg', 'Nguyên vật liệu tươi', NULL, NULL, 1),
(7, 'Sườn non sấy khô', 12, 'pak', 'Nguyên vật liệu khô', NULL, NULL, 1),
(8, 'Bột mì ', 3, 'pak', 'Nguyên vật liệu khô', NULL, NULL, 1),
(9, 'Chả nấm chay', 3, 'kg', 'Hàng đóng gói', NULL, NULL, 0),
(10, 'Đậu hủ ky khô', 10, 'pak', 'Hàng đóng gói', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` int(11) NOT NULL,
  `hoTen` varchar(100) NOT NULL,
  `idNguoiDung` int(11) NOT NULL,
  `maLoaiNV` int(11) NOT NULL,
  `ngayVaoLam` date DEFAULT NULL,
  `ngaySinh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `hoTen`, `idNguoiDung`, `maLoaiNV`, `ngayVaoLam`, `ngaySinh`) VALUES
(1, 'Ngô Thành Phước', 5, 2, NULL, '2003-01-10'),
(2, 'Lương Công Triều', 4, 1, NULL, '2003-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoannguoidung`
--

CREATE TABLE `taikhoannguoidung` (
  `idNguoiDung` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `hoTen` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `loaiNguoiDung` int(11) NOT NULL,
  `trangThai` tinyint(4) NOT NULL,
  `diaChi` varchar(255) NOT NULL,
  `SDT` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoannguoidung`
--

INSERT INTO `taikhoannguoidung` (`idNguoiDung`, `username`, `pass`, `hoTen`, `email`, `loaiNguoiDung`, `trangThai`, `diaChi`, `SDT`) VALUES
(1, 'phuc123', 'phuc123', 'Nguyễn Đăng Hồng Phúc', 'phuc123@gmail.com', 1, 1, '120, Phường 10, Quận 3, tp Hồ Chí Minh', '01111111111'),
(2, 'nga123', 'nga123', 'Nguyễn Thị Nga', 'nga123@gmail.com', 5, 1, '42/13, Phường 2, Quận 3, tp Hồ Chí Minh', '02222222222'),
(3, 'vinh123', 'vinh123', 'Lê Văn Vinh', 'vinh123@gmail.com', 5, 1, '168/20, Phường 7, Quận Tân Bình, tp Hồ Chí Minh', '03333333333'),
(4, 'trieu123', 'trieu123', 'Lương Công Triều', 'trieu123@gmail.com', 2, 1, '178/5, Phường 5, Quận 12, tp Hồ Chí Minh', '04444444444'),
(5, 'phuoc123', 'phuoc123', 'Ngô Thành Phước', 'phuoc123@gmail.com', 4, 1, '20/14, Phường 17, Quận Gò Vấp, tp Hồ Chí Minh', '05555555555'),
(6, 'tran123', 'tran123', 'Lâm Thị Huyền Trân', 'tran123@gmail.com', 2, 1, '42/3, Lê Lợi, Phường 4, Quận Gò Vấp, tp Hồ Chí Minh', '06666666666'),
(7, 'khachhang', '123456', 'Khách Hàng', 'khachhang@gmail.com', 6, 1, 'không có', '0909090909');

-- --------------------------------------------------------

--
-- Table structure for table `vaitro`
--

CREATE TABLE `vaitro` (
  `loaiNguoiDung` tinyint(4) NOT NULL,
  `tenNguoiDung` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaitro`
--

INSERT INTO `vaitro` (`loaiNguoiDung`, `tenNguoiDung`) VALUES
(1, 'Admin'),
(2, 'Nhân viên bán hàng'),
(3, 'Nhân viên hậu cần'),
(4, 'Nhân viên bếp'),
(5, 'Khách hàng'),
(6, 'Khách vãng lai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ctkm`
--
ALTER TABLE `ctkm`
  ADD PRIMARY KEY (`maKM`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKH`),
  ADD KEY `maLoaiKH` (`maLoaiKH`),
  ADD KEY `FK_idnguoidung` (`idNguoiDung`);

--
-- Indexes for table `loaikhachhang`
--
ALTER TABLE `loaikhachhang`
  ADD PRIMARY KEY (`maLoaiKH`);

--
-- Indexes for table `loaimonan`
--
ALTER TABLE `loaimonan`
  ADD PRIMARY KEY (`maLoaiMA`);

--
-- Indexes for table `loainhanvien`
--
ALTER TABLE `loainhanvien`
  ADD PRIMARY KEY (`maLoaiNV`),
  ADD UNIQUE KEY `tenLoaiNV` (`tenLoaiNV`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`maMA`);

--
-- Indexes for table `monan_nguyenlieu`
--
ALTER TABLE `monan_nguyenlieu`
  ADD KEY `maMA` (`maMA`),
  ADD KEY `maNVL` (`maNVL`);

--
-- Indexes for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  ADD PRIMARY KEY (`maNVL`),
  ADD UNIQUE KEY `tenNVL` (`tenNVL`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`),
  ADD KEY `maLoaiNV` (`maLoaiNV`);

--
-- Indexes for table `taikhoannguoidung`
--
ALTER TABLE `taikhoannguoidung`
  ADD PRIMARY KEY (`idNguoiDung`);

--
-- Indexes for table `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`loaiNguoiDung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ctkm`
--
ALTER TABLE `ctkm`
  MODIFY `maKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loaimonan`
--
ALTER TABLE `loaimonan`
  MODIFY `maLoaiMA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loainhanvien`
--
ALTER TABLE `loainhanvien`
  MODIFY `maLoaiNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `maMA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  MODIFY `maNVL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `maNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `loaiNguoiDung` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `FK_idnguoidung` FOREIGN KEY (`idNguoiDung`) REFERENCES `taikhoannguoidung` (`idNguoiDung`),
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`maLoaiKH`) REFERENCES `loaikhachhang` (`maLoaiKH`);

--
-- Constraints for table `monan_nguyenlieu`
--
ALTER TABLE `monan_nguyenlieu`
  ADD CONSTRAINT `monan_nguyenlieu_ibfk_1` FOREIGN KEY (`maMA`) REFERENCES `monan` (`maMA`),
  ADD CONSTRAINT `monan_nguyenlieu_ibfk_2` FOREIGN KEY (`maNVL`) REFERENCES `nguyenlieu` (`maNVL`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`maLoaiNV`) REFERENCES `loainhanvien` (`maLoaiNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
