-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2022 lúc 04:42 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `so_suc_khoe_dien_tu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `tieu_de` text NOT NULL,
  `noi_dung` text NOT NULL,
  `danh_muc` tinyint(4) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_khach_hang`
--

CREATE TABLE `chi_tiet_khach_hang` (
  `id` int(11) NOT NULL,
  `id_khach_hang` int(11) NOT NULL,
  `id_vacxin` int(11) NOT NULL,
  `id_co_so_tiem` int(11) NOT NULL,
  `ngay_tiem` date NOT NULL,
  `trang_thai_thanh_toan` tinyint(4) NOT NULL DEFAULT 0,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_khach_hang`
--

INSERT INTO `chi_tiet_khach_hang` (`id`, `id_khach_hang`, `id_vacxin`, `id_co_so_tiem`, `ngay_tiem`, `trang_thai_thanh_toan`, `trang_thai`) VALUES
(2, 2, 2, 2, '2022-12-08', 1, 1),
(3, 1, 3, 3, '2022-12-16', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `co_so_tiem_chung`
--

CREATE TABLE `co_so_tiem_chung` (
  `id` int(11) NOT NULL,
  `ten_co_so` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(11) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `co_so_tiem_chung`
--

INSERT INTO `co_so_tiem_chung` (`id`, `ten_co_so`, `dia_chi`, `so_dien_thoai`, `trang_thai`) VALUES
(1, 'Cơ sở 1: Hà Nội', '97 Hào Nam, Phường Ô Chợ Dừa, Quận Đống Đa, Hà Nội', '0977626821', 1),
(2, 'Cơ sở 2: Thanh Hóa', '99 Đại lộ Lê Lợi, Phường Lam Sơn, TP Thanh Hóa', '0977626299', 1),
(3, 'Cơ sở 3: Nghệ An', 'Số 03, Trường Thi , TP. Vinh, Nghệ An', '0934626856', 1),
(4, 'Cơ sở 4: Quảng Trị', '22 Lê Duẩn, Thị Trấn Hồ Xá, Huyện Vĩnh Linh, Tỉnh Quảng Trị', '0988715231', 1),
(5, 'Cơ sở 5: TP. Hồ Chí Minh', '90 Lê Lai, Phường Phạm Ngũ Lão, Quận 1, Thành phố Hồ Chí Minh', '0912313924', 1),
(6, 'Cơ sở 6: Bình Dương', '90 Thủ Dầu 1, Bình Dương', '0984282396', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dang_ky_tiem`
--

CREATE TABLE `dang_ky_tiem` (
  `id` int(11) NOT NULL,
  `ma_dang_ky` varchar(10) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `id_nguoi_dung` int(11) NOT NULL,
  `so_dien_thoai` varchar(11) NOT NULL,
  `ngay_dang_ky` date NOT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dang_ky_tiem`
--

INSERT INTO `dang_ky_tiem` (`id`, `ma_dang_ky`, `ho_ten`, `id_nguoi_dung`, `so_dien_thoai`, `ngay_dang_ky`, `trang_thai`) VALUES
(3, 'abc123456', 'Lê Thanh Trúc', 0, '0977626821', '2022-12-22', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dang_ky_tiem_vacxin`
--

CREATE TABLE `dang_ky_tiem_vacxin` (
  `id` int(11) NOT NULL,
  `id_dang_ky_tiem` int(11) NOT NULL,
  `id_quan_ly_vacxin` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia_tien` int(11) NOT NULL,
  `ngay_du_kien_tiem` date NOT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dang_ky_tiem_vacxin`
--

INSERT INTO `dang_ky_tiem_vacxin` (`id`, `id_dang_ky_tiem`, `id_quan_ly_vacxin`, `so_luong`, `gia_tien`, `ngay_du_kien_tiem`, `trang_thai`) VALUES
(20, 3, 8, 2, 5500000, '2022-12-16', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goi_vacxin`
--

CREATE TABLE `goi_vacxin` (
  `id` int(11) NOT NULL,
  `ten_goi` varchar(255) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `thong_tin_chi_tiet` varchar(255) NOT NULL,
  `gia_tien` int(11) NOT NULL,
  `danh_muc` varchar(255) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ho_so_suc_khoe`
--

CREATE TABLE `ho_so_suc_khoe` (
  `id` int(11) NOT NULL,
  `id_khach_hang` int(11) NOT NULL,
  `ngay_kham` date NOT NULL,
  `huyet_ap` double NOT NULL,
  `nhip_tim` int(11) NOT NULL,
  `nhiet_do` int(11) NOT NULL,
  `ket_luan` varchar(255) NOT NULL,
  `luot_tiem` tinyint(4) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ho_so_suc_khoe`
--

INSERT INTO `ho_so_suc_khoe` (`id`, `id_khach_hang`, `ngay_kham`, `huyet_ap`, `nhip_tim`, `nhiet_do`, `ket_luan`, `luot_tiem`, `trang_thai`) VALUES
(2, 1, '2022-12-08', 125, 80, 38, 'Không có gì bất thường', 2, 1),
(4, 2, '2022-12-16', 120, 83, 37, 'Ko có gì đáng lo', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `gioi_tinh` varchar(3) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `so_dien_thoai_lien_lac` varchar(11) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ho_ten`, `ma_khach_hang`, `gioi_tinh`, `ngay_sinh`, `so_dien_thoai_lien_lac`, `dia_chi`, `trang_thai`) VALUES
(1, 'Phạm Nhật Minh', 21006, 'Nam', '2020-10-09', '0988372114', 'Khu đô thị Phú Lương - Hà Đông - Hà Nội', 1),
(2, 'Nguyễn Gia Hân', 21019, 'Nữ', '2002-12-10', '0977676898', '175 - Phú Lương - Hà Đông - Hà Nội', 1),
(9, 'Lê', 20, 'Nu', '2022-12-02', '0988372114', 'Văn Phú', 1),
(10, 'Lê', 20, 'Nu', '2022-12-02', '0988372114', 'Văn Phú', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_nguoi_dung`
--

CREATE TABLE `loai_nguoi_dung` (
  `id` int(11) NOT NULL,
  `ten_loai_nguoi_dung` varchar(255) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `trang_thai` tinyint(3) DEFAULT 1,
  `tao_boi` varchar(255) DEFAULT NULL,
  `ngay_tao` datetime DEFAULT NULL,
  `ngay_cap_nhat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_nguoi_dung`
--

INSERT INTO `loai_nguoi_dung` (`id`, `ten_loai_nguoi_dung`, `mo_ta`, `trang_thai`, `tao_boi`, `ngay_tao`, `ngay_cap_nhat`) VALUES
(1, 'Khach hang', '', 1, 'Phi Truong', '2022-01-04 09:55:26', '2022-01-04 09:55:26'),
(2, 'Admin', '', 1, 'Phi Truong', '2022-01-04 09:55:26', '2022-01-04 09:55:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log_khai_bao_y_te`
--

CREATE TABLE `log_khai_bao_y_te` (
  `id` int(11) NOT NULL,
  `id_khach_hang` int(11) NOT NULL,
  `phuong_tien` varchar(100) NOT NULL,
  `so_hieu_phuong_tien` varchar(10) NOT NULL,
  `diem_di` varchar(255) NOT NULL,
  `diem_den` varchar(255) NOT NULL,
  `ngay_khoi_hanh` date NOT NULL,
  `cau_1` tinyint(3) NOT NULL,
  `cau_2` tinyint(3) NOT NULL,
  `cau_3` tinyint(3) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `log_khai_bao_y_te`
--

INSERT INTO `log_khai_bao_y_te` (`id`, `id_khach_hang`, `phuong_tien`, `so_hieu_phuong_tien`, `diem_di`, `diem_den`, `ngay_khoi_hanh`, `cau_1`, `cau_2`, `cau_3`, `trang_thai`) VALUES
(8, 25, 'Phương tiện cá nhân', '19R1-2455', ', Xã Bình Bộ, Huyện Phù Ninh, Tỉnh Phú Thọ', ', Phường Nguyễn Thái Học, Thành phố Yên Bái, Tỉnh Yên Bái', '2022-04-14', 1, 1, 0, 1),
(9, 25, 'Máy bay', 'MH-370', '48 Anh Đào, Xã Tân Việt, Thị xã Đông Triều, Tỉnh Quảng Ninh', '154 Phủ Tây Hồ, Phường Thụy Khuê, Quận Tây Hồ, Thành phố Hà Nội', '2022-04-28', 0, 1, 1, 1),
(10, 25, 'Tàu hỏa', 'T2455', '98 Trường Chinh, Xã Vũ Di, Huyện Vĩnh Tường, Tỉnh Vĩnh Phúc', '126 Trần Duy Hưng, Xã Tuấn Đạo, Huyện Sơn Động, Tỉnh Bắc Giang', '2022-04-07', 1, 1, 1, 1),
(11, 25, 'Tàu thuyền', 'ZH9468', '89 Hồng Kỳ, Xã Thông Bình, Huyện Tân Hồng, Tỉnh Đồng Tháp', '904 Lê Đại Hành, Xã Thượng Cường, Huyện Chi Lăng, Tỉnh Lạng Sơn', '2022-04-30', 0, 0, 1, 1),
(12, 27, 'Tàu hỏa', 'HOA985', '89 Hồng Kỳ, Xã Chiềng Tương, Huyện Yên Châu, Tỉnh Sơn La', '810 Đại đồng, Phường Thịnh Lang, Thành phố Hòa Bình, Tỉnh Hòa Bình', '2022-09-16', 1, 1, 0, 1),
(13, 27, 'Xe khách', '98HH-20021', '129 Lý Thái Tổ, Xã Hồng Đà, Huyện Tam Nông, Tỉnh Phú Thọ', '26 Trần Duy Hưng, Xã Định Trung, Thành phố Vĩnh Yên, Tỉnh Vĩnh Phúc', '2022-09-05', 1, 1, 1, 1),
(14, 31, 'Phương tiện cá nhân', '19R1-2455', '98 Trường Chinh, Xã Nguyệt Đức, Huyện Yên Lạc, Tỉnh Vĩnh Phúc', 'Số 123 Lý Thường Kiệt, Xã Đồng Văn, Huyện Bình Liêu, Tỉnh Quảng Ninh', '2022-05-26', 1, 1, 1, 1),
(15, 25, 'Máy bay', '22MR01', '98 Trường Chinh, Xã Tân Hưng, Huyện Lạng Giang, Tỉnh Bắc Giang', '154 Phủ Tây Hồ, Xã Chu Điện, Huyện Lục Nam, Tỉnh Bắc Giang', '2022-04-15', 1, 1, 1, 1),
(16, 32, 'Phương tiện cá nhân', '58B-16555', '157 Nguyễn Tuân, Xã Hoàng Văn Thụ, Huyện Bình Gia, Tỉnh Lạng Sơn', '95 Hàng Trống, Xã Bằng Cả, Huyện Hoành Bồ, Tỉnh Quảng Ninh', '2022-04-15', 1, 1, 1, 1),
(17, 31, 'Máy bay', 'MH-370', '124 Lý Thái Tổ, Phường Phú La, Quận Hà Đông, Thành phố Hà Nội', '14 Phủ Tây Hồ, Phường An Hội, Quận Ninh Kiều, Thành phố Cần Thơ', '2022-05-01', 1, 1, 1, 1),
(18, 25, 'Tàu hỏa', 'T2444', '98 Trường Chinh, Xã Đại Nghĩa, Huyện Đoan Hùng, Tỉnh Phú Thọ', '810 Đại đồng, Xã Thanh Vân, Huyện Tam Dương, Tỉnh Vĩnh Phúc', '2022-04-20', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int(11) NOT NULL,
  `id_loai_nguoi_dung` int(11) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `so_dien_thoai` varchar(11) NOT NULL,
  `mat_khau` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `trang_thai` tinyint(3) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `id_loai_nguoi_dung`, `ho_ten`, `so_dien_thoai`, `mat_khau`, `email`, `trang_thai`) VALUES
(25, 1, 'Ngô Ngọc Minh', '0977626821', 'e10adc3949ba59abbe56e057f20f883e', 'Minh@gmail.com', 1),
(26, 2, 'Triệu Khắc Phi Trường ', '0977626829', 'e10adc3949ba59abbe56e057f20f883e', 'truongtrieu121@gmail.com', 1),
(27, 1, 'Nguyễn Xuân Nam', '0988715231', 'e10adc3949ba59abbe56e057f20f883e', 'nam@gmail.com', 1),
(28, 2, 'Phan Gia Bảo', '0977626299', 'e10adc3949ba59abbe56e057f20f883e', 'bao@gmail.com', 1),
(31, 1, 'Nguyễn Thành Đạt', '0934626856', 'e10adc3949ba59abbe56e057f20f883e', 'data10123@gmail.com', 1),
(32, 1, 'Hoàng Minh Chính', '0988715231', 'e10adc3949ba59abbe56e057f20f883e', 'chinh@gmail.com', 1),
(34, 1, 'Lê Thị Hoa', '0912313924', '827ccb0eea8a706c4c34a16891f84e7b', 'lethihoa181299@gmail.com', 1),
(36, 2, 'Lê Thị Hoa', '0977626829', 'e10adc3949ba59abbe56e057f20f883e', 'hoa@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_ly_vacxin`
--

CREATE TABLE `quan_ly_vacxin` (
  `id` int(11) NOT NULL,
  `id_vacxin` int(11) NOT NULL,
  `id_co_so_tiem` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_vacxin`
--

INSERT INTO `quan_ly_vacxin` (`id`, `id_vacxin`, `id_co_so_tiem`, `so_luong`) VALUES
(7, 2, 1, 656),
(8, 2, 2, 789),
(9, 2, 3, 456),
(10, 2, 4, 357),
(11, 2, 5, 465),
(12, 2, 6, 876),
(13, 3, 1, 674),
(14, 3, 2, 750),
(15, 3, 3, 898),
(16, 3, 4, 754),
(17, 3, 5, 465),
(18, 3, 6, 876),
(19, 4, 1, 867),
(20, 4, 2, 630),
(21, 4, 3, 456),
(22, 4, 4, 754),
(23, 4, 5, 970),
(24, 4, 6, 876),
(25, 5, 1, 867),
(26, 5, 2, 750),
(27, 5, 3, 898),
(28, 5, 4, 754),
(29, 5, 5, 970),
(30, 5, 6, 876),
(31, 6, 1, 867),
(32, 6, 2, 750),
(33, 6, 3, 898),
(34, 6, 4, 754),
(35, 6, 5, 970),
(36, 6, 6, 876),
(37, 7, 1, 867),
(38, 7, 2, 954),
(39, 7, 3, 898),
(40, 7, 4, 754),
(41, 7, 5, 970),
(42, 7, 6, 876),
(43, 8, 1, 867),
(44, 8, 2, 954),
(45, 8, 3, 898),
(46, 8, 4, 754),
(47, 8, 5, 465),
(48, 8, 6, 876),
(49, 9, 1, 867),
(50, 9, 2, 600),
(51, 9, 3, 898),
(52, 9, 4, 754),
(53, 9, 5, 970),
(54, 9, 6, 876),
(55, 10, 1, 867),
(56, 10, 2, 630),
(57, 10, 3, 898),
(58, 10, 4, 754),
(59, 10, 5, 970),
(60, 10, 6, 876),
(61, 11, 1, 867),
(62, 11, 2, 750),
(63, 11, 3, 456),
(64, 11, 4, 754),
(65, 11, 5, 970),
(66, 11, 6, 876),
(67, 12, 1, 949),
(68, 12, 2, 759),
(69, 12, 3, 456),
(70, 12, 4, 357),
(71, 12, 5, 970),
(72, 12, 6, 876),
(73, 13, 1, 756),
(74, 13, 2, 789),
(75, 13, 3, 689),
(76, 13, 4, 754),
(77, 13, 5, 970),
(78, 13, 6, 876),
(79, 14, 1, 867),
(80, 14, 2, 954),
(81, 14, 3, 456),
(82, 14, 4, 357),
(83, 14, 5, 270),
(84, 14, 6, 181),
(85, 15, 1, 756),
(86, 15, 2, 123),
(87, 15, 3, 356),
(88, 15, 4, 90),
(89, 15, 5, 270),
(90, 15, 6, 876),
(91, 16, 1, 134),
(92, 16, 2, 750),
(93, 16, 3, 356),
(94, 16, 4, 754),
(95, 16, 5, 270),
(96, 16, 6, 181),
(97, 17, 1, 654),
(98, 17, 2, 457),
(99, 17, 3, 356),
(100, 17, 4, 754),
(101, 17, 5, 190),
(102, 17, 6, 181),
(103, 18, 1, 654),
(104, 18, 2, 230),
(105, 18, 3, 456),
(106, 18, 4, 754),
(107, 18, 5, 190),
(108, 18, 6, 876),
(109, 19, 1, 867),
(110, 19, 2, 750),
(111, 19, 3, 689),
(112, 19, 4, 357),
(113, 19, 5, 190),
(114, 19, 6, 181),
(115, 20, 1, 867),
(116, 20, 2, 630),
(117, 20, 3, 689),
(118, 20, 4, 754),
(119, 20, 5, 270),
(120, 20, 6, 876),
(121, 21, 1, 867),
(122, 21, 2, 750),
(123, 21, 3, 898),
(124, 21, 4, 90),
(125, 21, 5, 465),
(126, 21, 6, 876),
(127, 22, 1, 867),
(128, 22, 2, 600),
(129, 22, 3, 545),
(130, 22, 4, 357),
(131, 22, 5, 190),
(132, 22, 6, 876),
(133, 23, 1, 867),
(134, 23, 2, 600),
(135, 23, 3, 898),
(136, 23, 4, 90),
(137, 23, 5, 970),
(138, 23, 6, 181),
(139, 24, 1, 756),
(140, 24, 2, 535),
(141, 24, 3, 356),
(142, 24, 4, 90),
(143, 24, 5, 970),
(144, 24, 6, 181),
(145, 25, 1, 756),
(146, 25, 2, 954),
(147, 25, 3, 456),
(148, 25, 4, 235),
(149, 25, 5, 465),
(150, 25, 6, 876),
(151, 26, 1, 756),
(152, 26, 2, 630),
(153, 26, 3, 898),
(154, 26, 4, 235),
(155, 26, 5, 970),
(156, 26, 6, 181),
(157, 26, 1, 654),
(158, 26, 2, 789),
(159, 26, 3, 898),
(160, 26, 4, 357),
(161, 26, 5, 270),
(162, 26, 6, 181),
(163, 27, 1, 867),
(164, 27, 2, 750),
(165, 27, 3, 689),
(166, 27, 4, 754),
(167, 27, 5, 970),
(168, 27, 6, 181),
(169, 28, 1, 654),
(170, 28, 2, 750),
(171, 28, 3, 234),
(172, 28, 4, 90),
(173, 28, 5, 970),
(174, 28, 6, 181),
(175, 29, 1, 756),
(176, 29, 2, 789),
(177, 29, 3, 545),
(178, 29, 4, 235),
(179, 29, 5, 270),
(180, 29, 6, 876),
(181, 30, 1, 867),
(182, 30, 2, 600),
(183, 30, 3, 456),
(184, 30, 4, 754),
(185, 30, 5, 270),
(186, 30, 6, 876),
(187, 31, 1, 867),
(188, 31, 2, 535),
(189, 31, 3, 456),
(190, 31, 4, 754),
(191, 31, 5, 970),
(192, 31, 6, 876),
(253, 39, 1, 0),
(254, 39, 2, 0),
(255, 39, 3, 0),
(256, 39, 4, 0),
(257, 39, 5, 0),
(258, 39, 6, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vacxin`
--

CREATE TABLE `vacxin` (
  `id` int(11) NOT NULL,
  `ten_vacxin` varchar(255) NOT NULL,
  `nuoc_san_xuat` varchar(255) NOT NULL,
  `gia_thanh` int(11) NOT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vacxin`
--

INSERT INTO `vacxin` (`id`, `ten_vacxin`, `nuoc_san_xuat`, `gia_thanh`, `anh`, `trang_thai`) VALUES
(2, 'Bạch hầu, uốn ván, bại liệt (Infanrix Hexa (6in1))	', 'Bỉ	', 1015000, '', 1),
(3, 'Bạch hầu, uốn ván, bại liệt (Hexaxim (6in1))	', 'Pháp', 1048000, '', 1),
(4, 'Rota virus (Rotateq)', 'Mỹ', 665000, '', 1),
(5, 'Rota virus (Rotarix)', 'Bỉ', 825000, '', 1),
(6, 'Rota virus (Rotavin-M1)', 'Việt Nam', 490000, '', 1),
(7, 'Các bệnh do phế cầu (Synflorix)', 'Bỉ', 1045000, '', 1),
(8, 'Các bệnh do phế cầu (Prevenar 13)', 'Bỉ', 1290000, '', 1),
(9, 'Lao (BCG (lọ 1ml))', 'Việt Nam', 125000, '', 1),
(10, 'Lao (BCG (liều 0,1ml))', 'Việt Nam', 70000, '', 1),
(11, 'Viêm gan B người lớn (Engerix B 1ml)', 'Bỉ', 235000, '', 1),
(12, 'Viêm gan B người lớn (Euvax B 1ml)', 'Hàn Quốc', 170000, '', 1),
(13, 'Viêm gan B người lớn (Heberbiovac 1ml)', 'Cu Ba', 200000, '', 1),
(14, 'Viêm gan B trẻ em (Euvax B 0.5ml)', 'Hàn Quốc', 116000, '', 1),
(15, 'Viêm gan B trẻ em (Engerix B 0,5ml)', 'Bỉ', 190000, '', 1),
(16, 'Viêm gan B trẻ em (Heberbiovac 0,5ml)', 'Cu Ba', 178000, '', 1),
(17, 'Viêm màng não mô cầu BC (VA-Mengoc-BC)', 'Cu Ba', 295000, '', 1),
(18, 'Viêm màng não mô cầu ACYW (Menactra)', 'Mỹ', 1260000, '', 1),
(19, 'Sởi (MVVac (Lọ 5ml))', 'Việt Nam', 315000, '', 1),
(20, 'Sởi (MVVac (Liều 0.5ml))', 'Việt Nam', 180000, '', 1),
(21, 'Sởi – Quai bị – Rubella (MMR II (3 in 1))', 'Mỹ', 305000, '', 1),
(22, 'Sởi – Quai bị – Rubella (Priorix)', 'Bỉ', 415000, '', 1),
(23, 'Sởi – Quai bị – Rubella (MMR)', 'Ấn Độ', 205000, '', 1),
(24, 'Thủy đậu (Varivax)', 'Mỹ', 915000, '', 1),
(25, 'Thủy đậu (Varilrix)', 'Bỉ', 945000, '', 1),
(26, 'Thủy đậu (Varicella)', 'Hàn Quốc', 700000, '', 1),
(27, 'Cúm (Vaxigrip Tetra 0.5ml)', 'Pháp', 356000, '', 1),
(28, 'Cúm (Influvac tetra 0,5ml)', 'Hà Lan', 356000, '', 1),
(29, 'Cúm (GCFlu Quadrivalent 0,5ml)', 'Hàn Quốc', 345000, '', 1),
(30, 'Ung thư cổ tử cung và sùi mào gà (Gardasil)', 'Mỹ', 1790000, '', 1),
(31, 'Ung thư cổ tử cung và sùi mào gà (Gardasil 9)', 'Mỹ', 2950000, '', 1),
(37, 'Bạch hầu, uốn ván, bại liệt (Pentaxim)', 'Pháp', 100000, NULL, 1),
(38, 'Bạch hầu, uốn ván, bại liệt (Pentaxim)', 'Pháp', 100000, NULL, 1),
(39, '', '', 0, NULL, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_khach_hang`
--
ALTER TABLE `chi_tiet_khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `co_so_tiem_chung`
--
ALTER TABLE `co_so_tiem_chung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dang_ky_tiem`
--
ALTER TABLE `dang_ky_tiem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dang_ky_tiem_vacxin`
--
ALTER TABLE `dang_ky_tiem_vacxin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dang_ky_tiem` (`id_dang_ky_tiem`),
  ADD KEY `quan_ly_vacxin` (`id_quan_ly_vacxin`);

--
-- Chỉ mục cho bảng `goi_vacxin`
--
ALTER TABLE `goi_vacxin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ho_so_suc_khoe`
--
ALTER TABLE `ho_so_suc_khoe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai_nguoi_dung` (`id_loai_nguoi_dung`) USING BTREE;

--
-- Chỉ mục cho bảng `quan_ly_vacxin`
--
ALTER TABLE `quan_ly_vacxin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `co_so` (`id_co_so_tiem`),
  ADD KEY `vacxin` (`id_vacxin`);

--
-- Chỉ mục cho bảng `vacxin`
--
ALTER TABLE `vacxin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_khach_hang`
--
ALTER TABLE `chi_tiet_khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `co_so_tiem_chung`
--
ALTER TABLE `co_so_tiem_chung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dang_ky_tiem`
--
ALTER TABLE `dang_ky_tiem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `dang_ky_tiem_vacxin`
--
ALTER TABLE `dang_ky_tiem_vacxin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `goi_vacxin`
--
ALTER TABLE `goi_vacxin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ho_so_suc_khoe`
--
ALTER TABLE `ho_so_suc_khoe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `quan_ly_vacxin`
--
ALTER TABLE `quan_ly_vacxin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT cho bảng `vacxin`
--
ALTER TABLE `vacxin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dang_ky_tiem_vacxin`
--
ALTER TABLE `dang_ky_tiem_vacxin`
  ADD CONSTRAINT `dang_ky_tiem` FOREIGN KEY (`id_dang_ky_tiem`) REFERENCES `dang_ky_tiem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quan_ly_vacxin` FOREIGN KEY (`id_quan_ly_vacxin`) REFERENCES `quan_ly_vacxin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD CONSTRAINT `kn_nguoi_dung` FOREIGN KEY (`id_loai_nguoi_dung`) REFERENCES `loai_nguoi_dung` (`id`);

--
-- Các ràng buộc cho bảng `quan_ly_vacxin`
--
ALTER TABLE `quan_ly_vacxin`
  ADD CONSTRAINT `co_so` FOREIGN KEY (`id_co_so_tiem`) REFERENCES `co_so_tiem_chung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vacxin` FOREIGN KEY (`id_vacxin`) REFERENCES `vacxin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
