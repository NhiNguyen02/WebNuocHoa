-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2024 lúc 05:18 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webnuochoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `MANV` int(255) NOT NULL,
  `HOTEN` varchar(255) NOT NULL,
  `HINHANH` text NOT NULL,
  `GIOITINH` varchar(255) NOT NULL,
  `NGSINH` date NOT NULL,
  `SDT` int(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `MK` text NOT NULL,
  `DIACHI` varchar(255) NOT NULL,
  `LUONG` int(255) NOT NULL,
  `CHUCVU` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`MANV`, `HOTEN`, `HINHANH`, `GIOITINH`, `NGSINH`, `SDT`, `EMAIL`, `MK`, `DIACHI`, `LUONG`, `CHUCVU`) VALUES
(10, 'ssss', 'product1.webp', 'Nữ', '2024-05-02', 2, 's@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'a', 1, 'admin'),
(11, 'xzxzx', 'product1.webp', 'Nam', '2024-05-15', 2, 'sse@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'a', 1, 'admin_phu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MAHD` int(255) NOT NULL,
  `MAKH` int(255) NOT NULL,
  `SANPHAM` varchar(255) NOT NULL,
  `NGAYBAN` datetime NOT NULL DEFAULT current_timestamp(),
  `MACTKM` varchar(255) NOT NULL,
  `THANHTOAN` varchar(255) NOT NULL,
  `THANHTIEN` int(255) NOT NULL,
  `TRANGTHAI` varchar(255) NOT NULL,
  `XULYTT` varchar(255) NOT NULL,
  `GHICHU` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`MAHD`, `MAKH`, `SANPHAM`, `NGAYBAN`, `MACTKM`, `THANHTOAN`, `THANHTIEN`, `TRANGTHAI`, `XULYTT`, `GHICHU`) VALUES
(17, 27, 'Lancome La Vie Est Belle EDP (3500000VNĐ x 2)\r\n                                            ', '2024-05-23 20:40:06', '', 'Thanh toán khi nhận hàng (COD)', 7029000, 'Hủy đơn hàng', 'Hoàn trả', 'địa chỉ không hợp lệ'),
(19, 27, 'Lancome La Vie Est Belle EDP (3500000VNĐ x 2)\r\n                                            ', '2024-05-23 20:55:42', '', 'Thanh toán qua MOMO', 7029000, 'Người bán đang chuẩn bị hàng', 'Đang xửa lý thanh toán', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MAGH` int(255) NOT NULL,
  `MAKH` int(255) NOT NULL,
  `MASP` int(255) NOT NULL,
  `MAKHO` int(255) NOT NULL,
  `SOLUONG` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khohang`
--

CREATE TABLE `khohang` (
  `MAKHO` int(255) NOT NULL,
  `TENKHO` varchar(255) NOT NULL,
  `DIACHI` varchar(255) NOT NULL,
  `SOSP` int(255) NOT NULL,
  `SLTONKHO` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khohang`
--

INSERT INTO `khohang` (`MAKHO`, `TENKHO`, `DIACHI`, `SOSP`, `SLTONKHO`) VALUES
(6, 'K01', 'Thủ Đức', 1, 88),
(10, 'K02', 'Quận 12', 0, 0),
(19, 'K03', 'Tân Phú', 0, 0),
(21, 'K04', 'Gò Vấp', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MAVOUCHER` varchar(255) NOT NULL,
  `TENCT` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GIAMGIA` int(255) NOT NULL,
  `TIENTOITHIEU` int(255) NOT NULL,
  `NGAYBD` date DEFAULT NULL,
  `NGAYKT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichlamviec`
--

CREATE TABLE `lichlamviec` (
  `MALICH` int(255) NOT NULL,
  `MANV` int(255) NOT NULL,
  `BUOI` varchar(255) NOT NULL,
  `CA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lichlamviec`
--

INSERT INTO `lichlamviec` (`MALICH`, `MANV`, `BUOI`, `CA`) VALUES
(2, 10, 'Thứ 4', 'Sáng'),
(3, 10, 'Thứ 6', 'Sáng'),
(4, 10, 'Thứ 3', 'Chiều'),
(6, 10, 'Thứ 7', 'Tối'),
(8, 11, 'Thứ 2', 'Sáng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` int(225) NOT NULL,
  `TENSP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `DUNGTICH` int(225) NOT NULL,
  `GIABAN` int(255) NOT NULL,
  `MOTA` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `THUONGHIEU` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SOLUONG` int(255) NOT NULL,
  `MAKHO` int(255) NOT NULL,
  `image_01` varchar(100) NOT NULL,
  `image_02` varchar(100) NOT NULL,
  `image_03` varchar(100) NOT NULL,
  `image_04` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `TENSP`, `DUNGTICH`, `GIABAN`, `MOTA`, `THUONGHIEU`, `SOLUONG`, `MAKHO`, `image_01`, `image_02`, `image_03`, `image_04`) VALUES
(20, 'Lancome La Vie Est Belle EDP', 150, 3500000, 'La Vie Est Belle một hương thơm mới vừa ra đời trong mùa thu năm 2012 bởi thương hiệu nổi tiếng Lancôme mang đến sự tự do, hạnh phúc cho phái đẹp. Với khẩu hiệu “Mang đến sự tự tin cho phụ nữ vì họ xứng đáng được như thế”, La Vie Est Belle là một trong 10 sản phẩm bán chạy nhất trên thị trường nước hoa năm 2 năm trở lại đây.\r\n\r\n \r\n\r\nChai nước hoa thể hiện nguồn năng lượng tích cực của cuộc sống và lấy cảm hứng từ những niềm vui nhỏ nhặt thường nhật. Đến với La Vie Est Belle chúng ta như lạc vào thế giới của những ý tưởng sáng tạo độc đáo, thoát khỏi mọi lề lối, ràng buộc để đi tìm một hành trính mới cho riêng mình.\r\n\r\nVới hương trái cây tinh khiết của nho đen Hy Lạp và quả lê kết tinh cùng sự ngọt ngào của hạnh nhân, hương vani, đậu tonka quyện cùng hương thơm mát, thanh lịch của hoa iris, hoa nhài, hoa cam mang đến cho quý cô sự mềm mại và xinh đẹp dài lâu.\r\n\r\nKhái niệm hương thơm của Lancôme La Vie Est Belle tập trung vào vẻ đẹp tự nhiên và giản dị, tự do từ các công ước và chọn lựa tầm nhìn cho hạnh phúc riêng của bạn. Nước hoa mang 1 phẩm chất triển vọng về cuộc sống. Thành phần nước hoa được phát triển bởi Olivier Polge, Dominique Ropion và Anne Flipo. Công thức cuối cùng là kết quả đạt được sau thời gian ba năm quản chế và 5000 phiên bản.\r\n\r\n \r\n\r\nHương đầu: nho đen Hy Lạp, quả lê\r\nHương giữa: hoa Iris, hoa nhài, hoa cam\r\nHương cuối: hoắc hương, đậu Tonka, hương vani, kẹo hạnh nhân', 'Lancome', 88, 6, 'product1.webp', 'product1_1.webp', 'product1_2.webp', 'product1_3.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` text NOT NULL,
  `tinhthanh` varchar(255) NOT NULL,
  `quanhuyen` varchar(255) NOT NULL,
  `phuongxa` varchar(255) NOT NULL,
  `sonha` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `name`, `email`, `sdt`, `tinhthanh`, `quanhuyen`, `phuongxa`, `sonha`, `diachi`, `password`) VALUES
(27, 'NhiNguyen', 'a@gmail.com', '363592120', 'kgjs', 'uhtyg', 'dzgfbfd', '18', '', '25d55ad283aa400af464c76d713c07ad');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`MANV`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MAHD`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MAGH`);

--
-- Chỉ mục cho bảng `khohang`
--
ALTER TABLE `khohang`
  ADD PRIMARY KEY (`MAKHO`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MAVOUCHER`);

--
-- Chỉ mục cho bảng `lichlamviec`
--
ALTER TABLE `lichlamviec`
  ADD PRIMARY KEY (`MALICH`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `MANV` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MAHD` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MAGH` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `khohang`
--
ALTER TABLE `khohang`
  MODIFY `MAKHO` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `lichlamviec`
--
ALTER TABLE `lichlamviec`
  MODIFY `MALICH` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MASP` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
