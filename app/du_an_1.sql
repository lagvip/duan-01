-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 04, 2024 lúc 02:39 PM
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
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id` int(10) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_dang` varchar(255) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id`, `tieu_de`, `noi_dung`, `ngay_dang`, `trang_thai`) VALUES
(2, 'Ra mắt Iphone 15!', 'Chào mừng đến với thế hệ mới của sự đổi đen với Apple - iPhone 15, chiếc điện thoại thông minh đỉnh cao với sự tiến bộ đột phá và cái nhìn mới mẻ. iPhone 15 không chỉ là một bước nhảy vọt trong công nghệ, mà còn là biểu tượng của sự sang trọng và đẳng cấp.\r\n\r\nVới thiết kế siêu mỏng và vật liệu chất liệu cao cấp, iPhone 15 tạo nên một trải nghiệm cầm nắm mềm mại và sang trọng. Màn hình Super Retina XDR kích thước lớn, cung cấp độ phân giải ấn tượng và gam màu sống động, mang đến trải nghiệm xem hình ảnh và video tuyệt vời nhất.\r\n\r\nVới bộ xử lý chip A16 Bionic, iPhone 15 không chỉ nhanh chóng và mạnh mẽ mà còn thông minh hơn bao giờ hết. Điều này không chỉ cải thiện hiệu suất của chiếc điện thoại, mà còn tối ưu hóa độ trễ và tiết kiệm năng lượng, giúp bạn trải nghiệm mọi ứng dụng và trò chơi mượt mà và linh hoạt.\r\n\r\nHệ thống camera tiên tiến trên iPhone 15 không chỉ làm cho mọi khoảnh khắc trở nên sống động, mà còn mở ra một thế giới mới của nhiếp ảnh và quay phim sáng tạo. Khả năng chụp ảnh trong điều kiện ánh sáng yếu và chế độ chụp ảnh đêm đã được cải thiện, mang đến những bức ảnh đẹp như tranh với độ chi tiết tuyệt vời.\r\n\r\niPhone 15 cũng nổi bật với các tính năng an ninh tiên tiến như Face ID và một loạt các tùy chọn lưu trữ linh hoạt. Hệ điều hành iOS mới nhất không chỉ đem lại tính năng và ứng dụng mới mẻ mà còn tối ưu hóa trải nghiệm người dùng.\r\n\r\nChắc chắn, iPhone 15 là biểu tượng của sự đẳng cấp và đổi mới, làm dậy lên đam mê sáng tạo và tinh tế trong mỗi người dùng. Hãy chuẩn bị cho một hành trình mới với iPhone 15 - nơi nơi công nghệ và phong cách gặp nhau.', '2023-11-18', 0),
(4, 'Những dòng điện thoại HOT HIT 2023!!!!!', 'Đến nay, nhiều dòng điện thoại đã tạo nên sức hút lớn trong năm 2022, mang đến những trải nghiệm độc đáo và tính năng mạnh mẽ. Dòng điện thoại flagship của Apple, iPhone 13, tiếp tục ghi điểm với hiệu suất ổn định, camera cải tiến và màn hình nâng cấp. Trong khi đó, Samsung Galaxy S21 và S21 Ultra với màn hình Dynamic AMOLED và hệ thống camera đa dạng đang thu hút sự chú ý của người tiêu dùng.  Các đối thủ từ Trung Quốc như Xiaomi với dòng điện thoại Mi 11 và OnePlus với OnePlus 9 cũng đem đến sự đổi mới trong thiết kế và công nghệ. Bên cạnh đó, Google Pixel 6 với khả năng chụp ảnh đỉnh cao và trải nghiệm Android thuần túy cũng đã tạo ra làn sóng trong cộng đồng yêu công nghệ. Sự xuất hiện của các mô hình tiêu chuẩn giá hợp lý như Samsung Galaxy A52 và Xiaomi Redmi Note 10 cũng làm cho công nghệ cao cấp trở nên tiếp cận hơn với nhiều người. Năm 2022 thực sự là một năm đầy năng động và sôi động trong thế giới điện thoại di động.', '2023-11-18', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_binhluan` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_sanpham` int(100) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date_comment` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `id` int(10) NOT NULL,
  `ten_chuc_vu` varchar(255) NOT NULL,
  `mo_ta` varchar(255) DEFAULT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chuc_vu`
--

INSERT INTO `chuc_vu` (`id`, `ten_chuc_vu`, `mo_ta`, `trang_thai`) VALUES
(1, 'khách hàng', 'khách hàng', 0),
(2, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(10) NOT NULL,
  `ten_danh_muc` varchar(255) NOT NULL,
  `mo_ta` varchar(255) DEFAULT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `ten_danh_muc`, `mo_ta`, `trang_thai`, `img`) VALUES
(1, 'Iphone', '', 0, 'logo-iphone.jpg'),
(2, 'Samsung', '', 0, 'logo=samsung.png'),
(3, 'Oppo', '', 0, 'logo-oppo.png'),
(4, 'Xiaomi', '', 0, 'logo-xiaomi.png'),
(5, 'vertu', 'hahah', 0, 'vt.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(10) NOT NULL,
  `id_nguoi_nhan` int(10) NOT NULL,
  `ten_nguoi_nhan` varchar(255) NOT NULL,
  `email_nguoi_nhan` varchar(255) NOT NULL,
  `sdt_nguoi_nhan` varchar(20) NOT NULL,
  `dia_chi_nguoi_nhan` varchar(255) NOT NULL,
  `ngay_dat_hang` date NOT NULL,
  `tong_tien` int(10) NOT NULL,
  `pt_thanh_toan` tinyint(1) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `id_nguoi_nhan`, `ten_nguoi_nhan`, `email_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nguoi_nhan`, `ngay_dat_hang`, `tong_tien`, `pt_thanh_toan`, `trang_thai`) VALUES
(59, 2, 'vu dinh minh', 'hihi@gmail.com', '0967725130', 'đan phượngg', '2024-04-12', 60000, 1, 5),
(60, 2, 'vu dinh minh', 'hihi@gmail.com', '0967725130', 'đan phượngg', '2024-04-12', 100000, 1, 5),
(61, 2, 'vu dinh minh', 'hihi@gmail.com', '0967725130', 'đan phượngg', '2024-04-12', 60000, 1, 2),
(63, 2, 'vu dinh minh', 'hihi@gmail.com', '0967725130', 'đan phượngg', '2024-04-12', 250000, 1, 5),
(64, 2, 'vu dinh minh', 'hihi@gmail.com', '0967725130', 'đan phượngg', '2024-04-12', 330000, 1, 3),
(65, 2, 'vu dinh minh', 'hihi@gmail.com', '0967725130', 'đan phượngg', '2024-04-12', 60000, 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `id` int(10) NOT NULL,
  `id_don_hang` int(10) NOT NULL,
  `id_san_pham` int(10) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `img_sp` varchar(255) NOT NULL,
  `gia_san_pham` int(10) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `thanh_tien` int(10) NOT NULL,
  `ram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`id`, `id_don_hang`, `id_san_pham`, `ten_san_pham`, `img_sp`, `gia_san_pham`, `so_luong`, `thanh_tien`, `ram`) VALUES
(62, 59, 76, 'a2', 'a2.jpg', 20000, 3, 60000, '256gb'),
(63, 60, 75, 'aaa123', 'a1.jpg', 100000, 1, 100000, '256gb'),
(64, 61, 77, 'a3', 'a3.jpg', 30000, 2, 60000, '256gb'),
(65, 63, 80, 'samsung s23 ultra', 'Samsung Galaxy S23 Ultra (5G) 8GB 256GB Chính Hãng.jpg', 50000, 1, 50000, '64gb'),
(66, 63, 78, 'Oppo reno 10', 'Oppo Reno 10 (5G) 8GB 256GB Chính Hãng.png', 40000, 5, 200000, '64gb'),
(67, 64, 77, 'a3', 'a3.jpg', 30000, 1, 30000, '64gb'),
(68, 64, 76, 'a2', 'a2.jpg', 20000, 5, 100000, '128gb'),
(69, 64, 76, 'a2', 'a2.jpg', 20000, 5, 100000, '128gb'),
(70, 64, 76, 'a2', 'a2.jpg', 20000, 5, 100000, '64gb'),
(71, 65, 81, 'Xiaomi 10T', 'Xiaomi Mi 10T Pro (5G) 8GB 256GB Chính Hãng.webp', 60000, 1, 60000, '64gb');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id` int(10) NOT NULL,
  `ten_khach_hang` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noi_dung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lien_he`
--

INSERT INTO `lien_he` (`id`, `ten_khach_hang`, `so_dien_thoai`, `email`, `noi_dung`) VALUES
(5, 'tú', '0967725130', 'ntu25258@gmail.com', 'xin chào mày !');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_bienthe`
--

CREATE TABLE `sanpham_bienthe` (
  `id_bienthe` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `soluong` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_bienthe`
--

INSERT INTO `sanpham_bienthe` (`id_bienthe`, `id`, `ram`, `soluong`) VALUES
(46, 75, '64gb', 5),
(47, 75, '128gb', 6),
(48, 75, '256gb', 7),
(49, 76, '64gb', 7),
(50, 76, '128gb', 8),
(51, 76, '256gb', 9),
(55, 77, '64gb', 7),
(56, 77, '128gb', 8),
(57, 77, '256gb', 9),
(58, 78, '64gb', 5),
(59, 78, '128gb', 6),
(60, 78, '256gb', 7),
(61, 79, '64gb', 7),
(62, 79, '128gb', 8),
(63, 79, '256gb', 9),
(64, 80, '64gb', 10),
(65, 80, '128gb', 11),
(66, 80, '256gb', 12),
(67, 81, '64gb', 8),
(68, 81, '128gb', 9),
(69, 81, '256gb', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(10) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `gia` double(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mo_ta` text NOT NULL,
  `luot_xem` int(10) DEFAULT NULL,
  `id_danh_muc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten_san_pham`, `gia`, `img`, `mo_ta`, `luot_xem`, `id_danh_muc`) VALUES
(75, 'aaa123', 100000.00, 'a1.jpg', 'đẹp', 10, 5),
(76, 'a2', 20000.00, 'a2.jpg', 'nice xừ', NULL, 5),
(77, 'a3', 30000.00, 'a3.jpg', 'hmmmmm', NULL, 3),
(78, 'Oppo reno 10', 40000.00, 'Oppo Reno 10 (5G) 8GB 256GB Chính Hãng.png', 'ngon ', NULL, 3),
(79, 'ip13', 60000.00, 'ip13.png', 'sang', NULL, 1),
(80, 'samsung s23 ultra', 50000.00, 'Samsung Galaxy S23 Ultra (5G) 8GB 256GB Chính Hãng.jpg', 'dep', NULL, 2),
(81, 'Xiaomi 10T', 60000.00, 'Xiaomi Mi 10T Pro (5G) 8GB 256GB Chính Hãng.webp', 'hay', NULL, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(10) NOT NULL,
  `ten_dang_nhap` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `ngay_sinh` varchar(255) DEFAULT NULL,
  `so_dien_thoai` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `chuc_vu` int(100) NOT NULL DEFAULT 1,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ten_dang_nhap`, `mat_khau`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `email`, `dia_chi`, `chuc_vu`, `trang_thai`) VALUES
(2, 'minh', '123', 'vu dinh minh', '09/08/2004', '0967725130', 'hihi@gmail.com', 'đan phượngg', 2, 0),
(6, 'tu123', '12345678', 'Nguyễn Văn Tú', '2004-08-09', '0967725130', 'ntu25258@gmail.com', '29 ngõ 3 xóm chùa', 1, 0),
(8, 'test', '123', 'Nguyễn Văn Tú', '2004-08-09', '0967725130', 'ntu25258@gmail.com', '29 ngõ 3 xóm chùa', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_binhluan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_don_hang` (`id_don_hang`),
  ADD KEY `id_san_pham` (`id_san_pham`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham_bienthe`
--
ALTER TABLE `sanpham_bienthe`
  ADD PRIMARY KEY (`id_bienthe`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danh_muc` (`id_danh_muc`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chuc_vu` (`chuc_vu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_binhluan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `chuc_vu`
--
ALTER TABLE `chuc_vu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham_bienthe`
--
ALTER TABLE `sanpham_bienthe`
  MODIFY `id_bienthe` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tai_khoan` (`id`),
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`id_don_hang`) REFERENCES `hoa_don` (`id`),
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`id_san_pham`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `sanpham_bienthe`
--
ALTER TABLE `sanpham_bienthe`
  ADD CONSTRAINT `sanpham_bienthe_ibfk_1` FOREIGN KEY (`id`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_danh_muc`) REFERENCES `danh_muc` (`id`);

--
-- Các ràng buộc cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD CONSTRAINT `tai_khoan_ibfk_1` FOREIGN KEY (`chuc_vu`) REFERENCES `chuc_vu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
