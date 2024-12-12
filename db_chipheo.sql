-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 02:09 PM
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
  `thoiGianBatDau` date NOT NULL,
  `thoiGianKetThuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ctkm`
--

INSERT INTO `ctkm` (`maKM`, `tenKM`, `moTa`, `loaiKH`, `trangThai`, `chietKhau`, `thoiGianBatDau`, `thoiGianKetThuc`) VALUES
(1, 'Giảm 10%', 'Giảm tối đa 30K\r\nĐơn tối thiểu 60K', 'Vàng', 1, 10, '2024-11-01', '2024-11-30'),
(2, 'Giảm 30K', 'Giảm 30K \r\nCho đơn tối thiểu 70K', 'Vàng', 1, 30, '2024-11-20', '2024-11-21'),
(3, 'Giảm 8%', 'Giảm tối đa 20K\r\nCho đơn tối thiểu 40K', 'Bạc', 1, 8, '2024-11-02', '2024-11-26'),
(4, 'Giảm 12%', 'Giảm 12% tổng hóa đơn', 'Vàng', 1, 12, '2024-12-07', '2024-12-07'),
(5, 'Giảm 20K', 'Giảm 20K trên hóa đơn', 'Bạc', 1, 20, '2024-12-07', '2024-12-07'),
(6, 'Giảm 50K', 'Giảm 50K \r\nCho đơn tối thiểu 150K', 'Kim cương', 1, 50, '2024-12-07', '2024-12-07'),
(7, 'Giảm 15%', 'Giảm 15% tổng hóa đơn', 'Kim cương', 1, 15, '2024-12-07', '2024-12-07'),
(8, 'Giảm 10K', 'Giảm 10K trên hóa đơn', 'Khách thường', 1, 10, '2024-12-04', '2024-12-13'),
(9, 'Giảm 15k', 'Giảm 15K trên hóa đơn', 'Khách thường', 1, 15, '2024-12-04', '2024-12-21'),
(10, 'Giảm 8K', 'Giảm 8K trên hóa đơn', 'Khách thường', 1, 8, '2024-12-05', '2024-12-21');

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
('111', 'Khách hàng', 'khachhang', 6, 4, 18),
('12', 'Lê Văn Vinh', 'vinh123', 3, 2, 482),
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
(1, 'Nhân viên bán hàng'),
(2, 'Nhân viên bếp'),
(3, 'Nhân viên hậu cần');

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
(1, 1, 'Cơm - ba chỉ kho tiêu', 1, 37.000, 'VND', 'Thịt ba chỉ khối', 'bachikhotieu.png', 1, 'Món ngon Chí Phèo quán'),
(2, 1, 'Cơm - bò xào bông cải', 1, 40.000, 'VND', 'Thịt bò tươi', 'boxaobongcai.png', 1, 'Món ngon Chí Phèo quán'),
(3, 1, 'Cơm - thịt kho đậu hủ', 1, 35.000, 'VND', 'Đậu hủ', 'thitkhodauhu.png', 1, 'Món ngon Chí Phèo quán'),
(4, 1, 'Cơm - mực xào chua ngọt', 1, 40.000, 'VND', 'Mực ống tươi', 'mucxaochuangot.png', 1, 'Món ngon Chí Phèo quán'),
(5, 1, 'Cơm - trứng cuộn thịt băm', 1, 32.000, 'VND', 'Trứng gà hộp', 'trungcuonthitbam.png', 1, 'Món ngon Chí Phèo quán'),
(6, 1, 'Cơm - mực xào thập cẩm', 1, 40.000, 'VND', 'Mực ống tươi', 'mucxaothapcam.png', 1, 'Món ngon Chí Phèo quán'),
(7, 2, 'Cơm - đậu hủ kho tiêu', 1, 30.000, 'VND', 'Đậu hủ', 'dauhukhotieu.png', 1, 'Món ngon Chí Phèo quán'),
(8, 2, 'Cơm - đậu hủ cuộn rong biển', 1, 35.000, 'VND', 'Rong biển', 'dauhucuonrongbien.png', 1, 'Món ngon Chí Phèo quán'),
(9, 2, 'Cơm - chả trứng chay', 1, 35.000, 'VND', 'Trứng gà hộp', 'chatrungchay.png', 1, 'Món ngon Chí Phèo quán'),
(10, 2, 'Cơm - sườn non ram', 1, 30.000, 'VND', 'Sườn non sấy khô', 'suonchayram.png', 1, 'Món ngon Chí Phèo quán'),
(11, 4, 'YogurtOreo', 1, 35.000, 'VND', 'Yogurt', 'yogurtoreo.png', 1, 'Món ngon Chí Phèo quán'),
(12, 4, 'Rau câu truyền thống', 1, 25.000, 'VND', 'Bột rau câu', 'raucauduatruyenthong.png', 1, 'Món ngon Chí Phèo quán'),
(13, 4, 'Bánh chuối hấp', 1, 30.000, 'VND', 'Chuối quả tươi', 'banhchuoihap.png', 1, 'Món ngon Chí Phèo quán'),
(14, 4, 'Sữa chua trái cây', 1, 25.000, 'VND', 'Táo', 'suachuatraicay.png', 1, 'Món ngon Chí Phèo quán'),
(15, 4, 'Chè vải hạt sen', 1, 30.000, 'VND', 'Hạt sen', 'chevaihatsen.png', 1, 'Món ngon Chí Phèo quán'),
(16, 3, 'Pepsi lon', 1, 15.000, 'VND', 'Pepsi', 'pepsi.png', 1, 'Món ngon Chí Phèo quán'),
(17, 3, 'Sting lon', 1, 15.000, 'VND', 'Sting', 'sting.png', 1, 'Món ngon Chí Phèo quán'),
(18, 3, 'Sprite lon', 1, 15.000, 'VND', 'Sprite', 'sprite.png', 1, 'Món ngon Chí Phèo quán'),
(19, 3, 'Dừa lạnh', 1, 20.000, 'VND', 'Dừa tươi', 'dualanh.png', 1, 'Món ngon Chí Phèo quán'),
(20, 3, 'Nước ép táo', 1, 25.000, 'VND', 'Táo', 'eptao.png', 1, 'Món ngon Chí Phèo quán'),
(21, 5, 'Rau câu truyền thống miễn phí', 1, 0.000, 'Cái', 'Bột rau câu', 'raucauduatruyenthong.png\r\n', 1, 'Món tặng'),
(22, 1, 'Bò xào xã ớt', 1, 30.000, 'VNĐ', 'Thịt bò tươi', 'boxaoxaot.png', 1, 'Món ngon Chí Phèo quán'),
(23, 1, 'Cơm chiên', 1, 30.000, 'VNĐ', 'Gạo', 'comchien.jpg', 1, 'Món ngon Chí Phèo quán'),
(24, 1, 'Khổ qua xào trứng', 1, 30.000, 'VNĐ', 'Trứng gà hộp', 'khoquaxaotrung.png', 1, 'Món ngon Chí Phèo quán'),
(25, 1, 'Thịt kho đậu hủ', 1, 30.000, 'VNĐ', 'Đậu hủ', 'thitkhodauhu.png', 1, 'Món ngon Chí Phèo quán'),
(26, 1, 'Heo xào đậu que', 1, 30.000, 'VNĐ', 'Thịt ba chỉ khối', 'heoxaodauque.png', 1, 'Món ngon Chí Phèo quán'),
(27, 2, 'Bò kho chay', 1, 30.000, 'VNĐ', 'Đậu hủ', 'bokhochay.png', 1, 'Món ngon Chí Phèo quán'),
(28, 2, 'Đậu hủ kho chay', 1, 30.000, 'VNĐ', 'Đậu hủ', 'dauhukhochay.png', 1, 'Món ngon Chí Phèo quán'),
(29, 2, 'Sườn non chiên giòn', 1, 30.000, 'VNĐ', 'Sườn non sấy khô', 'suonnonchiengion.png', 1, 'Món ngon Chí Phèo quán'),
(30, 2, 'Heo quay chay', 1, 30.000, 'VNĐ', 'Sườn non sấy khô', 'heoquaychay.png', 1, 'Món ngon Chí Phèo quán'),
(31, 2, 'Kho quẹt tóp mỡ chay', 1, 30.000, 'VNĐ', 'Đậu hủ', 'khoquettopmochay.png', 1, 'Món ngon Chí Phèo quán'),
(32, 3, 'Cam ép tươi', 1, 25.000, 'VND', 'Cam tươi', 'cameptuoi.png', 1, 'Món ngon Chí Phèo quán'),
(33, 3, 'Cà phê sữa đá', 1, 25.000, 'VND', 'Bột cà phê', 'caphesuada.png', 1, 'Món ngon Chí Phèo quán'),
(34, 3, 'Cà phê đen đá', 1, 20.000, 'VND', 'Sữa đặc', 'dendakhongduong.png', 1, 'Món ngon Chí Phèo quán'),
(35, 3, 'Fanta lon vị cam ', 1, 20.000, 'VND', 'Fanta cam ', 'fantacam.png', 1, 'Món ngon Chí Phèo quán'),
(36, 3, 'CocaCola classic', 1, 20.000, 'VND', 'Coca lon', 'cocacola.png', 1, 'Món ngon Chí Phèo quán'),
(37, 4, 'Sữa chua', 1, 15.000, 'VND', 'Sữa chua', 'suachua.png', 1, 'Món ngon Chí Phèo quán'),
(38, 4, 'Thạch sương sáo cốt dừa', 1, 25.000, 'VND', 'Bột sương sáo', 'thachsuongsaocotdua.png', 1, 'Món ngon Chí Phèo quán');

-- --------------------------------------------------------

--
-- Table structure for table `monan_nguyenlieu`
--

CREATE TABLE `monan_nguyenlieu` (
  `maMA` int(11) NOT NULL,
  `maNVL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monan_nguyenlieu`
--

INSERT INTO `monan_nguyenlieu` (`maMA`, `maNVL`) VALUES
(1, 11),
(2, 30),
(3, 4),
(3, 11),
(4, 14),
(5, 29),
(6, 14),
(7, 4),
(8, 4),
(8, 16),
(9, 4),
(9, 29),
(10, 7),
(11, 20),
(12, 21),
(13, 28),
(14, 20),
(14, 19),
(15, 13),
(16, 31),
(17, 32),
(18, 33),
(19, 23),
(20, 19),
(21, 21),
(22, 30),
(23, 5),
(23, 29),
(24, 29),
(25, 4),
(25, 11),
(26, 11),
(27, 4),
(28, 4),
(29, 7),
(30, 7),
(31, 4),
(31, 7),
(32, 26),
(33, 24),
(33, 25),
(34, 24),
(37, 20),
(36, 34),
(38, 27),
(35, 35);

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
  `ngayNhap` date DEFAULT NULL,
  `ngayHetHan` date DEFAULT NULL,
  `trangThai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguyenlieu`
--

INSERT INTO `nguyenlieu` (`maNVL`, `tenNVL`, `slTon`, `donViTinh`, `moTa`, `ngayNhap`, `ngayHetHan`, `trangThai`) VALUES
(1, 'Cà rốt', 13, 'kg', 'Nguyên vật liệu tươi', '2024-12-12', '2024-12-14', 1),
(2, 'Hành tây', 23, 'kg', 'Nguyên vật liệu tươi', '2024-12-12', '2024-12-14', 1),
(3, 'Cải thìa', 7, 'kg', 'Nguyên vật liệu tươi', '2024-12-12', '2024-12-14', 1),
(4, 'Đậu hủ', 14, 'pak', 'Nguyên vật liệu tươi', '2024-12-11', '2024-12-21', 1),
(5, 'Gạo', 40, 'kg', 'Nguyên vật liệu khô', '2024-12-04', '2024-12-31', 1),
(6, 'Cà chua', 2, 'kg', 'Nguyên vật liệu tươi', '2024-12-12', '2024-12-14', 1),
(7, 'Sườn non sấy khô', 12, 'pak', 'Nguyên vật liệu khô', '2024-12-04', '2024-12-31', 1),
(8, 'Bột mì ', 3, 'pak', 'Nguyên vật liệu khô', '2024-12-04', '2024-12-31', 1),
(9, 'Chả nấm chay', 3, 'kg', 'Hàng đóng gói', '2024-12-12', '2024-12-22', 1),
(10, 'Đậu hủ ky khô', 10, 'pak', 'Hàng đóng gói', '2024-12-04', '2024-12-31', 1),
(11, 'Thịt ba chỉ khối', 10, 'kg', 'Nguyên vật liệu tươi', '2024-12-12', '2024-12-14', 1),
(12, 'Bông cải xanh', 3, 'kg', 'Nguyên vật liệu tươi', '2024-12-12', '2024-12-14', 1),
(13, 'Hạt sen', 4, 'kg', 'Nguyên vật liệu khô', '2024-12-04', '2024-12-24', 1),
(14, 'Mực ống tươi', 4, 'kg', 'Nguyên vật liệu tươi', '2024-12-12', '2024-12-14', 1),
(15, 'Tương ớt', 4, 'pak', 'Nguyên vật liệu khô', '2024-12-01', '2025-01-01', 1),
(16, 'Rong biển', 5, 'pak', 'Nguyên vật liệu khô', '2024-12-01', '2025-01-15', 1),
(17, 'Hạt nêm ', 2, 'pak', 'Hàng đóng gói', '2024-12-01', '2025-01-22', 1),
(18, 'Dầu ăn', 4, 'pak', 'Nguyên vật liệu khô', '2024-12-01', '2025-01-31', 1),
(19, 'Táo', 2, 'kg', 'Nguyên vật liệu tươi', '2024-12-12', '2024-12-14', 1),
(20, 'Yogurt', 5, 'pak', 'Hàng đóng gói', '2024-12-12', '2024-12-31', 1),
(21, 'Bột rau câu', 5, 'pak', 'Hàng đóng gói', '2024-12-01', '2024-12-31', 1),
(22, 'Đường', 12, 'kg', 'Nguyên vật liệu khô', '2024-12-01', '2025-01-31', 1),
(23, 'Dừa tươi', 5, 'kg', 'Nguyên vật liệu tươi', '2024-12-12', '2024-12-15', 1),
(24, 'Bột cà phê', 5, 'pak', 'Hàng đóng gói', '2024-12-01', '2025-01-16', 1),
(25, 'Sữa đặc', 5, 'pak', 'Nguyên vật liệu khô', '2024-12-01', '2025-01-31', 1),
(26, 'Cam tươi', 3, 'kg', 'Nguyên vật liệu tươi', '2024-12-12', '2024-12-14', 1),
(27, 'Bột sương sáo', 3, 'pak', 'Hàng đóng gói', '2024-12-04', '2024-12-27', 1),
(28, 'Chuối ', 4, 'kg', 'Nguyên vật liệu tươi', '2024-12-13', '2024-12-16', 1),
(29, 'Trứng gà hộp', 5, 'pak', 'Nguyên vật liệu tươi', '2024-12-12', '2025-02-14', 1),
(30, 'Thịt bò tươi', 5, 'kg', 'Nguyên vật liệu tươi', '2024-12-12', '2024-12-14', 1),
(31, 'Pepsi', 12, 'pak', 'Nguyên vật liệu khô', '2024-12-01', '2025-01-31', 1),
(32, 'Sting', 12, 'pak', 'Nguyên vật liệu khô', '2024-12-01', '2025-01-31', 1),
(33, 'Sprite', 12, 'pak', 'Nguyên vật liệu khô', '2024-12-01', '2025-01-31', 1),
(34, 'CocaCola', 12, 'pak', 'Nguyên vật liệu khô', '2024-12-01', '2025-01-31', 1),
(35, 'Fanta cam', 12, 'pak', 'Nguyên vật liệu khô', '2024-12-01', '2025-01-31', 1);

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
(1, 'Ngô Thành Phước', 5, 2, '2024-12-01', '2003-01-10'),
(2, 'Lương Công Triều', 4, 1, '2024-12-01', '2003-08-05'),
(3, 'Lâm Thị Huyền Trân', 6, 1, '2023-12-01', '2003-05-12'),
(4, 'Phan Nhật Minh', 8, 3, '2023-12-01', '2003-08-20');

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
(1, 'phuc123', '6dd544e6b7ab3369a62d4c994362a3cc', 'Nguyễn Đăng Hồng Phúc', 'phuc123@gmail.com', 1, 1, '120, Phường 10, Quận 3, tp Hồ Chí Minh', '01111111111'),
(2, 'nga123', '0f38a6d29c7e4c2053e30bd0e03c1c7f', 'Nguyễn Thị Nga', 'nga123@gmail.com', 5, 1, '42/13, Phường 2, Quận 3, tp Hồ Chí Minh', '02222222222'),
(3, 'vinh123', '6d9573b8494223ea50d7e15075d45a0c', 'Lê Văn Vinh', 'vinh123@gmail.com', 5, 1, '168/20, Phường 7, Quận Tân Bình, tp Hồ Chí Minh', '03333333333'),
(4, 'trieu123', '60df37d979392b366a06ead0808c12ab', 'Lương Công Triều', 'trieu123@gmail.com', 2, 1, '178/5, Phường 5, Quận 12, tp Hồ Chí Minh', '04444444444'),
(5, 'phuoc123', '8baadb24f3f7c58bec37a07adf567c52', 'Ngô Thành Phước', 'phuoc123@gmail.com', 4, 1, '20/14, Phường 17, Quận Gò Vấp, tp Hồ Chí Minh', '05555555555'),
(6, 'tran123', '6bb0cb19a2b36a2930bc4f3f881a0818', 'Lâm Thị Huyền Trân', 'tran123@gmail.com', 2, 1, '42/3, Lê Lợi, Phường 4, Quận Gò Vấp, tp Hồ Chí Minh', '06666666666'),
(7, 'khachhang', 'e10adc3949ba59abbe56e057f20f883e', 'Khách Hàng', 'khachhang@gmail.com', 6, 1, 'không có', '0909090909'),
(8, 'minh123', 'ddc83bf88c241349a4211172137545e0', 'Phan Nhật Minh', 'minh@gmail.com', 3, 1, '120/56, phường 2, quận Bình Tân, tp Hồ Chí Minh', '09288888888');

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
(5, 'Khách hàng thân thiết'),
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
  MODIFY `maKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `maMA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `nguyenlieu`
--
ALTER TABLE `nguyenlieu`
  MODIFY `maNVL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `maNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`maLoaiKH`) REFERENCES `loaikhachhang` (`maLoaiKH`);

--
-- Constraints for table `monan_nguyenlieu`
--
ALTER TABLE `monan_nguyenlieu`
  ADD CONSTRAINT `monan_nguyenlieu_ibfk_2` FOREIGN KEY (`maNVL`) REFERENCES `nguyenlieu` (`maNVL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
