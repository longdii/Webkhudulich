-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2024 lúc 05:57 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_api_qlkvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `am_thuc_va_mua_sam`
--

CREATE TABLE `am_thuc_va_mua_sam` (
  `MaAmThuc` int(250) NOT NULL,
  `AnhAmThuc` varchar(250) NOT NULL,
  `TenAmThuc` varchar(250) NOT NULL,
  `DiaChiAmThuc` varchar(1000) NOT NULL,
  `MoTaAmThuc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `am_thuc_va_mua_sam`
--

INSERT INTO `am_thuc_va_mua_sam` (`MaAmThuc`, `AnhAmThuc`, `TenAmThuc`, `DiaChiAmThuc`, `MoTaAmThuc`) VALUES
(1, 'banneramthuc.png', 'Nhà hàng 1958 – Nơi thưởng thức ẩm thực Việt – Pháp độc đáo', 'E19 – E20, Khu Đô Thị Nam, Tuần Châu, Thành phố Hạ Long, Quảng Ninh', 'Thực đơn nhà hàng hấp dẫn với các món ăn hải sản tươi ngon, đậm đà truyền thống ẩm thực miền Bắc. Ngoài ra, nhà hàng còn phục vụ các món ăn chay độc đáo, đáp ứng đầy đủ nhu cầu của tất cả các đối tượng khách hàng.'),
(2, 'amthucnhahang1.png', 'Nhà Hàng Taiyo – Sự kết hợp độc đáo của ẩm thực Việt – Nhật', 'Nằm tại tầng 3 của Lâu đài Huyền bí, khu vui chơi Ba Đèo, Núi Ba Đèo, Hạ Long', 'Du khách sẽ được thưởng thức các món ăn đa dạng, độc đáo nhất của Hạ Long, Việt Nam và Nhật Bản theo cách gọi món hoặc dùng set menu.'),
(3, 'amthucnhahang3.png', 'Nhà hàng YOLO Beer Club', 'Lô DV 14 Cảng tàu Tuần Châu, P. Bãi Cháy, Tp. Hạ Long, Quảng Ninh', 'Đây là dạng nhà hàng tổng hợp với bar, đồ ăn, bia, cà phê,… và bên ngoài nhà hàng còn phục vụ cả cà phê. Bên trong nhà hàng cung cấp bia và đa dạng các món ăn  Á – Âu, đặc biển là hải sản tươi ngon được đánh bắt ngay tại vùng biển nơi đây.'),
(4, 'amthucnhahang4.png', 'Nhà hàng Cua Vàng – Lựa chọn lý tưởng của đoàn khách đông người', '32 Phan Chu Trinh, Bãi Cháy, Tp. Hạ Long, Quảng Ninh', 'Nhà hàng phục vụ các món chuyên về hải sản, đặc biệt là cua theo phong cách chế biến riêng. Các món ăn nổi tiếng của nhà hàng gồm: cua biển nấu thục đặc biệt, cua biển om măng,…');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_bien_sun_world`
--

CREATE TABLE `bai_bien_sun_world` (
  `ID` int(250) NOT NULL,
  `AnhVe` varchar(250) NOT NULL,
  `TieuDe` varchar(250) NOT NULL,
  `MoTa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bao_hai_linh_thong_tu`
--

CREATE TABLE `bao_hai_linh_thong_tu` (
  `ID` int(250) NOT NULL,
  `AnhVe` varchar(250) NOT NULL,
  `TieuDe` varchar(250) NOT NULL,
  `MoTa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cap_treo_nu_hoang_va_khu_doi_huyen_bi`
--

CREATE TABLE `cap_treo_nu_hoang_va_khu_doi_huyen_bi` (
  `MaCapTreo` int(250) NOT NULL,
  `AnhCapTreo` varchar(250) NOT NULL,
  `TenCapTreo` varchar(250) NOT NULL,
  `MoTaCapTreo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cap_treo_nu_hoang_va_khu_doi_huyen_bi`
--

INSERT INTO `cap_treo_nu_hoang_va_khu_doi_huyen_bi` (`MaCapTreo`, `AnhCapTreo`, `TenCapTreo`, `MoTaCapTreo`) VALUES
(1, 'captreonuhoang_phim2d.jpg', 'Rạp chiếu phim 2D', 'Rạp chiếu phim 12D – công nghệ hiện đại nhất của Nhật Bản mang lại cho khách hàng những trải nghiệm xem phim mới nhất tại Khu đồi huyền bí.'),
(2, 'captreo.png', 'Khu video game', 'Đích đến của cáp treo, điểm giải trí cho cả gia đình với hàng trăm trò chơi vui nhộn tại Khu video game xu xèng thú vị. Chắc hẳn những trò chơi hiện đại sẽ mang đến những cảm giác thư giãn vui vẻ cho Quý khách hàng khi đến vui chơi tại Sun World Halong Complex.'),
(3, 'captreonuhoang3.jpg', 'Khu làn trượt Samurai', 'Làn trượt samurai là một trong những trò chơi mà Quý khách hàng luôn trải nghiệm mỗi khi đến thăm quan Khu đồi huyền bí.'),
(4, 'captreonuhoang4.jpeg', 'Xứ sở lộn ngược', 'Bắt đầu hành trình, du khách sẽ xuyên qua một chiếc đầu Khủng long bạo chúa dữ tợn – cánh cổng để bước vào Xứ sở Kỳ lạ và gặp gỡ những Pháp sư và Phù thủy bay lơ lửng trên không trung.'),
(5, 'captreonuhoang5.jpg', 'Bảo tàng tượng sáp', 'Gặp gỡ thần tượng ngoài đời như thật tại khu tượng sáp trên Khu đồi huyền bí, Với các tượng sáp mô phỏng ngôi sao từ điện ảnh, thể thao,ca nhạc sẽ là một trong những trải nghiệm khó quên của du khách khi thăm quan khu vui chơi giải trí Sun World Ha Long.'),
(6, 'captreonuhoang6.jpg', 'Nhà Bonsai', 'Tinh hoa trong lối kiến trúc Vườn Thiền của xứ sở Phù Tang được tái hiện tại nhà Bonsai giúp du khách chìm đắm trong không gian thanh tịnh đậm chất “thiền”, rời xa những lo lắng hay phiền muộn thường ngày.'),
(7, 'captreonuhoang7.jpg', 'Mộc trà quán', 'Mộc trà quán được xây theo lối kiến trúc truyền thống của Nhật Bản, đem đến cho du khách không gian tĩnh lặng và cảm giác an yên nhờ sự kết hợp tuyệt vời của kiến trúc, trà đạo, âm nhạc và cảnh sắc thiên nhiên nên thơ.'),
(8, 'captreonuhoang8.jpg', 'Cầu Koi', 'Với thiết kế độc đáo mô phỏng hình ảnh chú cá Koi, cầu Koi là điểm tiếp nối giữa Vườn Nhật với các điểm tham quan như Sân khấu múa rối nước Ánh trăng, Mộc trà quán và Nhà Bonsai. Từ cây cầu đặc biệt này, du khách thỏa sức ngắm toàn cảnh Khu đồi Huyền bí và di sản Vịnh Hạ Long.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviennuoc`
--

CREATE TABLE `congviennuoc` (
  `ID` int(250) NOT NULL,
  `AnhVe` varchar(250) NOT NULL,
  `TieuDe` varchar(250) NOT NULL,
  `MoTa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `congviennuoc`
--

INSERT INTO `congviennuoc` (`ID`, `AnhVe`, `TieuDe`, `MoTa`) VALUES
(1, 'vinhmattroi.png', 'Vịnh Mặt Trời', 'Kết thúc hành trình chinh phục biển cả, hãy cùng đắm mình trong làn nước xanh mát tại Vịnh Mặt Trời (VIP Pool) – Bể bơi dành cho...'),
(2, 'dongsonglodang.jpg', 'Dòng Sông Lơ Đãng', 'Những khó khăn đã ở lại phía sau, hãy tận hưởng không gian thư giãn, lãng mạn tại Dòng sông lơ đãng nào! Thả mình trên chiếc...'),
(3, 'locxoaylienhoan.jpg', 'Lốc Xoáy Liên Hoàn', 'Được thiết kế theo hình trôn ốc của một cơn lốc xoáy, đường trượt xoắn ốc “Lốc xoáy liên hoàn” đưa bạn trải...'),
(4, 'cuoirongvuotthac.jpg', 'Cưỡi Rồng Vượt Thác', 'Bạn có muốn thử cảm giác vượt qua thác nước lớn và rơi tự do giữa bạt ngàn những con sóng giữa biển khơi? Nếu là người...'),
(5, 'quocdaokydieu.png', 'Quốc đảo ký diệu', 'Khi những thử thách của đại dương đã ở lại phía sau lưng, bạn và các thuyền viên cần được nghỉ ngơi. Cùng nhau đắm chìm...'),
(6, 'daohaitac.png', 'Đảo hải tặc', 'Hành trình chinh phục biển cả vẫn chưa đến hồi kết khi sừng sững trước mắt bạn là con tàu hải tặc. Hãy cùng các thuyền viên...'),
(7, 'tiachopkhunglo.png', 'Tia chớp khổng lồ', 'Thử thách tiếp theo, bạn hãy cùng các thuyền viên khéo léo vượt qua cơn bão đêm trên biển. Với 3 đường trượt xoắn ốc, bạn...'),
(8, 'songthan.png', 'Sóng thần', 'Theo kinh nghiệm của thuyền trưởng, mặt biển lặng chính là dấu hiệu báo trước của cơn sóng thần đang âm ỉ sâu bên dưới...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congvienrong`
--

CREATE TABLE `congvienrong` (
  `ID` int(250) NOT NULL,
  `AnhVe` varchar(250) NOT NULL,
  `TieuDe` varchar(250) NOT NULL,
  `MoTa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `congvienrong`
--

INSERT INTO `congvienrong` (`ID`, `AnhVe`, `TieuDe`, `MoTa`) VALUES
(4, 'philongthantoc.jpg', 'Phi Long Thần Tốc', 'Cùng khởi động chuyến hành trình Phi long thần tốc với vận tốc tối đa lên đến 105 km/h. Phi Long Thần Tốc sẽ đưa bạn tham gia...'),
(5, 'tauhaitac.jpg', 'Tàu Hải Tặc', 'Tất cả hành khách vào vị trí!” Chọn thuyền viên của bạn và cùng nhau bước vào cuộc chiến chống lại những cơn sóng ngoài...'),
(6, 'chiecokidieu.jpg', 'Chiếc Ô kỳ Diệu', 'Xoay tròn dưới mái vòm của chiếc ô khổng lồ đầy màu sắc với dây kéo nâng lên hạ xuống nhịp nhàng, bạn sẽ có những giây...'),
(13, '001.jpg', 'Thằn Lằn Bayertyy123478', 'khang pro vip1234'),
(15, 'vongxoaytuthan.jpg', 'phuong ha xinh gai', 'T rat la buc minh voi mm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `TenVe` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `SoLuong` int(250) NOT NULL,
  `DonGia` int(250) NOT NULL,
  `ThanhTien` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hai_dang_sun_world`
--

CREATE TABLE `hai_dang_sun_world` (
  `ID` int(250) NOT NULL,
  `AnhVe` varchar(250) NOT NULL,
  `TieuDe` varchar(250) NOT NULL,
  `MoTa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hai_dang_sun_world`
--

INSERT INTO `hai_dang_sun_world` (`ID`, `AnhVe`, `TieuDe`, `MoTa`) VALUES
(1, 'thienduongcheckin.jpg', 'Thiên đường checkin', ' Đứng trên điểm cao nhất của ngọn hải đăng, thả mình vào luồng gió biển lồng lộng vừa mát lành, vừa có vị mặn của biển khơi. Hướng tầm mắt ra xa là cả một biển nước trong xanh màu ngọc bích vô cùng nguyên sơ, khoáng đạt,'),
(2, 'binhminhvahoanghon.jpg', 'Bình minh và hoàng hôn trên biển', 'Khung cảnh đẹp và lãng mạn nhất mà du khách không thể bỏ lỡ trong những chuyến du lịch biển, nhất là khi đứng từ trên cao. Lúc này, cả không gian như được bạn ôm trọn vào trong tầm mắt. '),
(3, 'haidangnaba.webp', 'Hải Đăng Bà Nà', 'Hải Đăng Debay - một công trình kiến trúc độc đáo, được xây dựng trên đỉnh núi Bà Nà. Du khách có thể đi cáp treo để tận hưởng khung cảnh tuyệt đẹp và tham quan các khu vực trong Hải Đăng Bà Nà.'),
(4, 'congvien.png', 'Fansty Park', 'là một công viên giải trí trong nhà lớn, với nhiều trò chơi và hoạt động thú vị như vòng quay may mắn, trò chơi điện tử, khu vui chơi cho trẻ em và trò chơi giải đố.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `ID` int(250) NOT NULL,
  `AnhVe` varchar(250) NOT NULL,
  `TieuDe` varchar(250) NOT NULL,
  `MoTa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`ID`, `AnhVe`, `TieuDe`, `MoTa`) VALUES
(1, 'kmdaunam.png', 'ƯU ĐÃI THẢ GA, VUI CHƠI CỰC ĐÃ CHỈ VỚI BỘ ĐÔI ƯU ĐÃI', 'Tuyến cáp treo băng qua vịnh biển, mở ra thế giới trò chơi sảng khoái bất tận và chuỗi sự kiện văn hóa đầy cuốn hút, cùng khu...'),
(2, 'kmduxuan.png', 'DU XUÂN KHỞI SẮC – ƯU ĐÃI ĐẶC BIỆT CHỈ CÓ TẠI SUN...', 'Du xuân năm mới, Sun World Ha Long “lì xì” cho du khách ưu đãi lên đến 60%. Theo đó, giá vé trọn gói Cáp treo Nữ Hoàng và Đồi Mặt...'),
(3, 'kmtet.png', '“WOW TẾT MỚI, TỚI SUN WORLD HA LONG”, ĐÓN XUÂN SANG KHỞI...', 'Chào đón Năm mới Quý Mão 2023, Sun World Ha Long mang đến cho Quý du khách khắp mọi miền đất nước một không gian Xuân độc đáo và..'),
(4, 'kmcuoinam.png', 'KHÁM PHÁ NHẬT BẢN THU NHỎ VỚI ƯU ĐÃI SIÊU ĐỈNH TỪ SUN...', 'Thỏa sức khám phá biết bao cảnh đẹp và vui chơi cực đã với ƯU ĐÃI THẢ GA cùng cáp treo Nữ Hoàng và Đồi Mặt Trời. Chào đón...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kiosk_pho_co_sun_world`
--

CREATE TABLE `kiosk_pho_co_sun_world` (
  `MaPhoCo` int(250) NOT NULL,
  `AnhPhoCo` varchar(250) NOT NULL,
  `TenPhoCo` varchar(250) NOT NULL,
  `MoTaPhoCo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `kiosk_pho_co_sun_world`
--

INSERT INTO `kiosk_pho_co_sun_world` (`MaPhoCo`, `AnhPhoCo`, `TenPhoCo`, `MoTaPhoCo`) VALUES
(1, 'phoco.jpg', 'Dãy Kiosk Phố cổ Sun World', 'Lấy cảm hứng từ thương cảng Hội An xưa và phố cổ Hà Nội, dãy phố cổ Sun World mang đến không gian mua sắm và thưởng thức ẩm thực tinh tế, hoài cổ nhưng không kém phần nhộn nhịp và sầm uất. Đây là nơi lý tưởng cho du khách dạo bước và trải nghiệm nét văn hóa vùng miền đặc sắc sau những giờ vui chơi thỏa thích.'),
(2, 'phoco2.jpg', 'Phố cổ Hội An giữa lòng Hạ Long', 'Du lịch phố cổ Hạ Long sẽ trở nên đặc biệt hơn nếu bạn ghi lại những tấm hình check-in mang màu sắc của Hội An. Nghe có vẻ rất mới mẻ nhưng đây thật sự là một khung cảnh tuyệt đẹp được nhiều du khách thích thú khi đến với thành phố biển này.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlydonhang`
--

CREATE TABLE `quanlydonhang` (
  `TenVe` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `SoLuong` int(250) NOT NULL,
  `DonGia` int(250) NOT NULL,
  `ThanhTien` int(250) NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quanlydonhang`
--

INSERT INTO `quanlydonhang` (`TenVe`, `Email`, `SoLuong`, `DonGia`, `ThanhTien`, `Ngay`) VALUES
('Tàu Hải Tặc', 'khang@gmail.com', 4, 250000, 1000000, '2023-10-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sukien`
--

CREATE TABLE `sukien` (
  `ID` int(250) NOT NULL,
  `AnhVe` varchar(250) NOT NULL,
  `TieuDe` varchar(250) NOT NULL,
  `MoTa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sukien`
--

INSERT INTO `sukien` (`ID`, `AnhVe`, `TieuDe`, `MoTa`) VALUES
(1, 'vudieuchimtroi.png', 'KHÔNG CẦN TỚI KHU BẢO TỒN, SUN WORLD HA LONG RA MẮT SHOW CHIM...', 'Từ tháng 10, công viên chủ đề Dragon Park thuộc tổ hợp vui chơi giải trí Sun World Ha Long của Tập đoàn Sun Group chính thức giới...'),
(2, 'lantoaiuthg.png', 'D-SOFT RA MẮT DỊCH VỤ ME2U TẠI HẠ LONG', 'Sau thời gian gián đoạn bởi dịch covid – 19, không để bạn phải chờ đợi lâu thêm nữa, D-Soft đã chính thức trở lại ra mắt...'),
(3, 'giangsinhxanh.png', 'LỄ HỘI MÙA ĐÔNG – GIÁNG SINH XANH DIỆU KỲ TỪ 05/12/2020...', 'Hạ Long đã sẵn sàng chào đón bạn trong bầu không khí Giáng sinh sôi động, lung linh sắc màu, rực rỡ ánh sáng tại Tổ hợp vui...'),
(4, 'tet.png', 'TRẢI NGHIỆM HƯƠNG VỊ TẾT TRUYỀN THỐNG TẠI LỄ HỘI...', 'Tết Nguyên Đán – Canh Tý 2020 sắp đến rồi, hãy cùng Sun World Halong Complex bỏ lại hết bộn bề để hòa mình trong không khí...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `MatKhau` varchar(250) NOT NULL,
  `HoTen` varchar(250) NOT NULL,
  `DienThoai` varchar(250) NOT NULL,
  `DiaChi` varchar(250) NOT NULL,
  `Quyen` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `Email`, `MatKhau`, `HoTen`, `DienThoai`, `DiaChi`, `Quyen`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', '0834239906', 'Hà Nội', 1),
(2, 'Khang@gmail.com', '19012003', 'Nguyen Huu Khang', '0834239906', 'Ha Noi', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc_noi_bat`
--

CREATE TABLE `tin_tuc_noi_bat` (
  `ID` int(250) NOT NULL,
  `AnhVe` varchar(250) NOT NULL,
  `TieuDe` varchar(250) NOT NULL,
  `MoTa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc_noi_bat`
--

INSERT INTO `tin_tuc_noi_bat` (`ID`, `AnhVe`, `TieuDe`, `MoTa`) VALUES
(1, 'congviennc.png', 'THÔNG BÁO: LỊCH HOẠT ĐỘNG CÁC CÔNG VIÊN SUN WORLD HA LONG KỂ...', 'Kính gửi Quý du khách, Tổ hợp vui chơi giải trí Sun World Ha Long xin trân trọng thông báo lịch hoạt động của các công viên...'),
(2, 'trungthu.png', 'MÙA ĐOÀN VIÊN, VUI MỌI MIỀN CŨNG TOP 3 TRẢI NGHIỆM KHÁM PHÁ...', 'Một mùa trung thu đang về, là thời khắc ta mong muốn quây quần bên gia đình và những người thân yêu, để sẻ chia phút giây ấm...'),
(3, 'muathu.png', 'ƯU ĐÃI CHÀO THU, VI VU THỎA THÍCH CHỈ TỪ 200.000VNĐ/VÉ', 'Từ 21/8 – 30/9/2023, hai công viên trong tổ hợp Sun World Ha Long (Bãi Cháy, Hạ Long, Quảng Ninh) là Dragon Park và Typhoon Water Park áp...'),
(4, 'langrenkiemthan.png', 'COMBO GIÁ VÉ: VI VU CÁP TREO, KHÁM PHÁ “LÀNG RÈN THẦN KIẾM”', 'Từ ngày 22/6, Sun World Hạ Long đã trình làng một “siêu phẩm” với những trải nghiệm văn hóa Nhật Bản hoàn toàn mới, mang...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuyendung`
--

CREATE TABLE `tuyendung` (
  `ID` int(250) NOT NULL,
  `AnhVe` varchar(250) NOT NULL,
  `TieuDe` varchar(250) NOT NULL,
  `MoTa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ve`
--

CREATE TABLE `ve` (
  `MaVe` int(250) NOT NULL,
  `AnhVe` varchar(250) NOT NULL,
  `TenVe` varchar(250) NOT NULL,
  `GiaVe` int(250) NOT NULL,
  `KhuVuiChoi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ve`
--

INSERT INTO `ve` (`MaVe`, `AnhVe`, `TenVe`, `GiaVe`, `KhuVuiChoi`) VALUES
(1, 'footer3.jpg', 'Tàu Hải Tặc', 250000, 'Công viên nước');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `am_thuc_va_mua_sam`
--
ALTER TABLE `am_thuc_va_mua_sam`
  ADD PRIMARY KEY (`MaAmThuc`);

--
-- Chỉ mục cho bảng `bai_bien_sun_world`
--
ALTER TABLE `bai_bien_sun_world`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `bao_hai_linh_thong_tu`
--
ALTER TABLE `bao_hai_linh_thong_tu`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `cap_treo_nu_hoang_va_khu_doi_huyen_bi`
--
ALTER TABLE `cap_treo_nu_hoang_va_khu_doi_huyen_bi`
  ADD PRIMARY KEY (`MaCapTreo`);

--
-- Chỉ mục cho bảng `congviennuoc`
--
ALTER TABLE `congviennuoc`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `congvienrong`
--
ALTER TABLE `congvienrong`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `hai_dang_sun_world`
--
ALTER TABLE `hai_dang_sun_world`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `kiosk_pho_co_sun_world`
--
ALTER TABLE `kiosk_pho_co_sun_world`
  ADD PRIMARY KEY (`MaPhoCo`);

--
-- Chỉ mục cho bảng `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`);

--
-- Chỉ mục cho bảng `tin_tuc_noi_bat`
--
ALTER TABLE `tin_tuc_noi_bat`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tuyendung`
--
ALTER TABLE `tuyendung`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`MaVe`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `am_thuc_va_mua_sam`
--
ALTER TABLE `am_thuc_va_mua_sam`
  MODIFY `MaAmThuc` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `bai_bien_sun_world`
--
ALTER TABLE `bai_bien_sun_world`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bao_hai_linh_thong_tu`
--
ALTER TABLE `bao_hai_linh_thong_tu`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cap_treo_nu_hoang_va_khu_doi_huyen_bi`
--
ALTER TABLE `cap_treo_nu_hoang_va_khu_doi_huyen_bi`
  MODIFY `MaCapTreo` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `congviennuoc`
--
ALTER TABLE `congviennuoc`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `congvienrong`
--
ALTER TABLE `congvienrong`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `hai_dang_sun_world`
--
ALTER TABLE `hai_dang_sun_world`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `kiosk_pho_co_sun_world`
--
ALTER TABLE `kiosk_pho_co_sun_world`
  MODIFY `MaPhoCo` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sukien`
--
ALTER TABLE `sukien`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tin_tuc_noi_bat`
--
ALTER TABLE `tin_tuc_noi_bat`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tuyendung`
--
ALTER TABLE `tuyendung`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ve`
--
ALTER TABLE `ve`
  MODIFY `MaVe` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
