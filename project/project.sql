-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 10:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL COMMENT 'hash',
  `Ad_Name` varchar(50) NOT NULL,
  `Ad_Email` varchar(50) NOT NULL COMMENT 'include ''@'' and ''.''',
  `Ad_Phonenumber` varchar(10) NOT NULL COMMENT 'start with 0, 10 characters',
  `Ad_Id` int(11) NOT NULL COMMENT 'Primary key and auto increment'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `Ad_Name`, `Ad_Email`, `Ad_Phonenumber`, `Ad_Id`) VALUES
('tue', 'E0117757', 'Vu Nguyen Duc Tue', 'tue@gmail.com', '0393608622', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cate_Id` int(11) UNSIGNED NOT NULL,
  `Cate_Name` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cate_Id`, `Cate_Name`) VALUES
(1, 'Tablet'),
(2, 'PC'),
(3, 'Laptop'),
(4, 'Smart Phone'),
(7, 'Smart Watch');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cus_Name` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Cus_Email` varchar(50) NOT NULL COMMENT 'include ''@'' and ''.''',
  `Cus_Phonenumber` varchar(10) NOT NULL COMMENT 'start with 0 and 10 characters',
  `Cus_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_Name`, `location`, `Cus_Email`, `Cus_Phonenumber`, `Cus_Id`) VALUES
('Tue', 'HL', 'tue@gmail.com', '0123456789', 1),
('Vinh', 'HG', 'vinh@gmail.com', '0123456789', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Prod_Id` int(10) UNSIGNED NOT NULL,
  `Cate_Id` int(11) UNSIGNED DEFAULT NULL,
  `Prod_Name` varchar(100) NOT NULL,
  `price` float UNSIGNED NOT NULL DEFAULT 0,
  `description` text NOT NULL,
  `Prod_Image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Prod_Id`, `Cate_Id`, `Prod_Name`, `price`, `description`, `Prod_Image`) VALUES
(1, 4, 'IPhone 13 Pro Max', 33990000, 'Màn hình:\r\n\r\nOLED6.7\"Super Retina XDR\r\nHệ điều hành:\r\n\r\niOS 15\r\nCamera sau:\r\n\r\n3 camera 12 MP\r\nCamera trước:\r\n\r\n12 MP\r\nChip:\r\n\r\nApple A15 Bionic\r\nRAM:\r\n\r\n6 GB\r\nBộ nhớ trong:\r\n\r\n128 GB\r\nSIM:\r\n\r\n1 Nano SIM & 1 eSIMHỗ trợ 5G\r\nPin, Sạc:\r\n\r\n4352 mAh20 W', 'product_2.jpg'),
(2, 4, 'Vivo Y21s', 3000000, 'Vivo chính thức tung ra chiếc điện thoại Vivo Y21s với hàng loạt các ưu điểm nổi bật, không chỉ ngoại hình bên ngoài mà cả sức mạnh bên trong. Đặc biệt, chiếc smartphone này còn sở hữu mức giá cực tốt trong phân khúc, hứa hẹn sẽ đáp ứng tốt nhu cầu giải trí của bạn.', 'product_5.jpg'),
(8, 4, 'OPPO Reno6 Z', 9490000, 'Reno6 Z 5G đến từ nhà OPPO với hàng loạt sự nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên trong. Đặc biệt, chiếc điện thoại được hãng đánh giá “chuyên gia chân dung bắt trọn mọi cảm xúc chân thật nhất”, đây chắc chắn sẽ là một “siêu phẩm\" mà bạn không thể bỏ qua', 'product_4.jpg'),
(9, 4, 'Samsung Galaxy A52s', 10990000, 'Samsung đã chính thức giới thiệu chiếc điện thoại Galaxy A52s 5G đến người dùng, đây phiên bản nâng cấp của Galaxy A52 5G ra mắt cách đây không lâu, với ngoại hình không đổi nhưng được nâng cấp đáng kể về thông số cấu hình bên trong.', 'product_6.jpg'),
(10, 4, 'Samsung Galaxy A73', 11990000, 'Làm nhiều thứ hơn bây giờ. Được trang bị Snapdragon® 778G 5G, Galaxy A73 5G thay đổi hoàn toàn nâng tầm thói quen đa nhiệm của bạn với tính năng chơi game cấp độ chuyên nghiệp, AI được tăng tốc để có hiệu suất thông minh hơn và trải nghiệm chụp ảnh cao cấp. Khi bạn cần nhiều bộ nhớ hơn, RAM Plus ngay lập tức cung cấp thêm RAM ảo.\r\n\r\nQuá nhiều thứ để lưu? Bộ nhớ trong 128GB/256GB cùng thẻ nhớ microSD lên đến 1TB, bạn có đủ chỗ để lưu giữ những khoảnh khắc quý giá của mình.', 'product_3.jpg'),
(11, 4, 'Realme C25Y', 4690000, 'Realme C25Y 64GB - là chiếc smartphone được Realme cho ra mắt với một mức giá khá tốt, sở hữu thiết kế hiện đại với 3 camera AI lên đến 50 MP, hiệu suất ổn định cùng thời gian sử dụng lâu dài nhờ viên pin khủng 5000 mAh, được xem là một trong những sản phẩm lý tưởng mà bạn nên sở hữu.', 'product_7.jpg'),
(13, 4, 'Vivo Y33s', 6990000, 'Trên tay mình hiện tại là Vivo Y33s - chiếc điện thoại này có thiết kế khá tương đồng với các sản phẩm tầm trung mà Vivo cho ra mắt gần đây, vẫn là một sản phẩm có thiết kế trẻ trung với màu đen tráng gương và xanh mộng mơ. Ở phiên bản màu đen được phủ một lớp tráng gương sáng bóng, vào một số trường hợp nó có thể trở thành một chiếc gương soi tiện lợi, tuy nhiên khi sử dụng sẽ bị lưu lại vân tay khá rõ ràng.', 'product_9.jpg'),
(14, 4, 'Xiaomi Redmi Note 11', 5190000, 'Xiaomi Redmi Note 11 ra mắt và được xem như chiếc smartphone có giá tầm trung ấn tượng, với 1 cấu hình mạnh, cụm camera xịn sò, pin khỏe, sạc nhanh mà giá lại rất phải chăng', 'product_10.jpg'),
(15, 4, 'Samsung Galaxy S22 Ultra', 30990000, 'Galaxy S22 Ultra 5G chiếc smartphone cao cấp nhất trong bộ 3 Galaxy S22 series mà Samsung đã cho ra mắt. Tích hợp bút S Pen hoàn hảo trong thân máy, trang bị vi xử lý mạnh mẽ cho các tác vụ sử dụng vô cùng mượt mà và nổi bật hơn với cụm camera không viền độc đáo mang đậm dấu ấn riêng.', 'product_11.jpg'),
(16, 4, 'iPhone 11', 16290000, 'Apple đã chính thức trình làng bộ 3 siêu phẩm iPhone 11, trong đó phiên bản iPhone 11 64GB có mức giá rẻ nhất nhưng vẫn được nâng cấp mạnh mẽ như iPhone Xr ra mắt trước đó.', 'product_12.jpg'),
(17, 4, 'OPPO Reno7 Z', 10490000, 'OPPO đã trình làng mẫu Reno7 Z 5G với thiết kế OPPO Glow độc quyền, camera mang hiệu ứng như máy DSLR chuyên nghiệp cùng viền sáng kép, máy có một cấu hình mạnh mẽ và đạt chứng nhận xếp hạng A về độ mượt.', 'product_13.jpg'),
(18, 4, 'Realme C35', 3990000, 'Realme C35 thuộc phân khúc giá rẻ được nhà Realme cho ra mắt với thiết kế trẻ trung, dung lượng pin lớn cùng camera hỗ trợ nhiều tính năng. Đây sẽ là thiết bị liên lạc, giải trí và làm việc ổn định,… cho các nhu cầu sử dụng của bạn.', 'product_14.jpg'),
(19, 4, 'Xiaomi 11T', 10990000, 'Xiaomi 11T đầy nổi bật với thiết kế vô cùng trẻ trung, màn hình AMOLED, bộ 3 camera sắc nét và viên pin lớn đây sẽ là mẫu smartphone của Xiaomi thỏa mãn mọi nhu cầu giải trí, làm việc và là niềm đam mê sáng tạo của bạn.', 'product_15.jpg'),
(20, 4, 'Samsung Galaxy A03', 2890000, 'Samsung Galaxy A03 là chiếc điện thoại Galaxy A đầu tiên của nhà Samsung trong năm 2022 tại thị trường Việt Nam. Đây là sản phẩm có mức giá dễ tiếp cận, có camera chính đến 48 MP, pin 5000 mAh thoải mái sử dụng cả ngày.', 'product_16.jpg'),
(21, 4, 'iPhone 13 Pro Max 128GB Xanh lá', 33490000, 'iPhone 13 Pro Max 128GB Xanh lá là một trong những phiên bản mới nhất của dòng điện thoại iPhone 13 series được Apple ra mắt gần đây. Với màu xanh lá cuốn mắt và bộ nhớ trong 128 GB giúp bạn không quá lo lắng về vấn đề dung lượng, camera sắc nét,... sẽ không khiến bạn thất vọng vọng đâu.', 'product_17.jpg'),
(22, 4, 'Samsung Galaxy Z Fold3', 35990000, 'Galaxy Z Fold3 5G, chiếc điện thoại được nâng cấp toàn diện về nhiều mặt, đặc biệt đây là điện thoại màn hình gập đầu tiên trên thế giới có camera ẩn (08/2021). Sản phẩm sẽ là một “cú hit” của Samsung góp phần mang đến những trải nghiệm mới cho người dùng.', 'product_18.jpg'),
(24, 4, 'iPhone 13', 26790000, 'Đúng như dự đoán, Apple đã tổ chức sự kiện Peek Performance vào ngày 9/3 (theo giờ Việt Nam) để công bố loạt sản phẩm đình đám, cũng như giới thiệu màu sắc mới cho dòng iPhone 13 Xanh lá. Không còn là màu xanh bạc hà nhẹ nhàng nữa, iPhone 13 256GB Xanh lá mang sắc xanh đậm chất thiên nhiên.', 'product_20.jpg'),
(25, 3, 'MSI Gaming GF63 Thin 11UD', 27990000, 'Sở hữu một vẻ ngoài độc đáo, mạnh mẽ phù hợp với mọi game thủ, chiếc laptop MSI Gaming GF63 Thin 11UD i7 11800H (648VN) được trang bị dòng chip Intel thế hệ 11 hiệu năng mạnh mẽ vượt trội khi đi cùng card màn hình rời RTX 3050 Ti Max-Q sẵn sàng chiến mượt bất kì tựa game phổ biến hay thiết kế đồ họa chuyên sâu.', 'Lap_1.jpg'),
(26, 3, 'Acer Nitro 5 Gaming AN515 57 5831', 26390000, 'Laptop Acer Nitro 5 Gaming AN515 57 5831 i5 (NH.QDGSV.003) là thế hệ laptop gaming mới của nhà Acer có nhiều thay đổi trong thiết kế. Hiệu năng vẫn giữ vững phong độ, tự tin mang đến cho game thủ trải nghiệm chơi game cực đã.', 'Lap_2.jpg'),
(27, 3, 'Dell Gaming Alienware m15 R6', 61990000, 'Laptop Dell Gaming Alienware m15 R6 i7 11800H (P109F001DBL) sở hữu thiết kế độc đáo đậm chất gaming cùng cấu hình vượt trội sẵn sàng đáp ứng hoàn hảo mọi tác vụ từ đồ họa - kỹ thuật tới những trận chiến game đầy kịch tính.', 'Lap_3.jpg'),
(28, 3, 'Lenovo Gaming Legion 5 15ITH6', 38990000, 'Sở hữu vẻ ngoài cá tính cùng hiệu năng vượt trội, laptop Lenovo Gaming Legion 5 15ITH6 i7 11800H (82JK00FNVN) sẵn sàng đáp ứng mọi nhu cầu của người dùng từ văn phòng, game giải trí đến đồ hoạ - kỹ thuật chuyên sâu.', 'Lap_4.jpg'),
(29, 3, 'Asus TUF Gaming FX516PM', 32990000, 'Mặc dù sở hữu kiểu dáng đơn giản nhưng chiếc Asus TUF Gaming FX516PM i7 11370H (HN002W) này lại mang một cấu hình vượt trội nhờ sở hữu chip thế hệ 11 cùng card đồ hoạ rời, đánh bật mọi đối thủ.', 'Lap_5.jpg'),
(30, 3, 'Acer Nitro 5 Gaming AN515 57 727J', 23990000, 'Acer Nitro 5 Gaming AN515 57 727J i7 (NH.QD9SV.005.) sở hữu vẻ ngoài cá tính, nổi bật và được tích hợp bộ vi xử lý Intel thế hệ 11 tân tiến, card đồ hoạ rời NVIDIA GeForce RTX, hứa hẹn mang đến các trải nghiệm tuyệt vời cho người dùng.', 'Lap_6.jpg'),
(31, 3, 'MSI Katana Gaming GF66 11UC i7', 27990000, 'Laptop MSI Katana GF66 11UC i7 (224VN) mang vẻ ngoài cơ động cùng cấu hình mạnh mẽ, đẩy nhanh quá trình xử lý mọi tác vụ hay sẵn sàng đồng hành cùng bạn chiến mọi thể loại game đầy kịch tính.', 'Lap_7.jpg'),
(32, 3, 'MacBook Air M1 2020', 33990000, 'Laptop Apple MacBook Air M1 2020 có thiết kế đẹp, sang trọng với CPU M1 độc quyền từ Apple cho hiệu năng đồ họa cao, màn hình Retina hiển thị siêu nét cùng với hệ thống bảo mật tối ưu', 'Lap_8.jpg'),
(33, 3, 'MacBook Pro 14 M1 Max 2021', 73900000, 'Khoác lên mình vẻ ngoài mới lạ so với các dòng Mac trước đó, thiết kế màn hình tai thỏ ấn tượng, bắt mắt cùng bộ hiệu năng đỉnh cao M1 Max mạnh mẽ, MacBook Pro 14 inch M1 Max 2021 xứng tầm là chiếc laptop cao cấp chuyên dụng dành cho dân kỹ thuật - đồ họa, sáng tạo nội dung.', 'Lap_9.jpg'),
(34, 3, 'MacBook Pro M1 2020', 32490000, 'Apple Macbook Pro M1 2020 sở hữu thiết kế sang trọng kế thừa từ các thế hệ trước và bên trong là một cấu hình ấn tượng từ con chip M1 lần đầu tiên xuất hiện trên MacBook Pro, hiệu năng CPU của máy tăng đến 2.8 lần, hiệu năng GPU tăng 5 lần.', 'Lap_10.jpg'),
(35, 1, 'Samsung Galaxy Tab S8', 20990000, 'Samsung Galaxy Tab S8 ra mắt và vẫn giữ được đặc trưng của dòng Galaxy Tab S với cấu hình mạnh mẽ, màn hình hiển thị ổn cùng khả năng hỗ trợ bút S Pen hỗ trợ học tập làm việc tốt hơn.', 'Tab_1.jpg'),
(36, 1, 'Alcatel 3T8', 2990000, 'Thiết kế cứng cáp\r\nAlcatel 3T8 mỏng nhẹ với trọng lượng 290 g, là người bạn lý tưởng khi bạn di chuyển. Màu sắc tinh tế cùng lớp nhám mờ hoàn thiện đặc biệt giúp bạn trông đẹp mắt ở bất cứ đâu', 'Tab_2.jpg'),
(37, 1, 'iPad Pro M1 12.9 inch WiFi Cellular', 29990000, 'iPad Pro M1 12.9 inch Wifi 128GB (2021) mang một hiệu năng đỉnh cao đến từ vi xử lý Apple M1 và màn hình Liquid Retina XDR tiên tiến cho chất lượng hiển thị đột phá. Apple một lần nữa đưa iPad Pro vượt khỏi giới hạn của một chiếc máy tính bảng.', 'Tap_3.jpg'),
(38, 1, 'iPad Pro M1 11 inch WiFi Cellular', 24990000, 'iPad Pro M1 11 inch Wifi Cellular 128GB (2021) sở hữu hiệu năng mạnh mẽ bậc nhất cho mọi trải nghiệm bùng nổ. Chiếc máy tính bảng hội tụ đầy đủ những công nghệ hàng đầu của Apple, mang đến nhiều cảm hứng sáng tạo và biến mọi ý tưởng của bạn trở thành hiện thực.', 'Tab_4.jpg'),
(40, 1, 'iPad mini 6 WiFi Cellular', 18490000, 'iPad mini 6 WiFi Cellular 64GB đánh dấu sự trở lại mạnh mẽ của Apple trên dòng sản phẩm iPad mini, thiết bị mới được người dùng yêu thích bởi thiết kế trẻ trung, hiệu suất đỉnh cao với con chip A15 Bionic và hỗ trợ bút cảm ứng Apple Pencil 2 tiện lợi.', 'Tap_6.jpg'),
(41, 1, 'iPad Air 4 Wifi Cellular', 17450000, 'Trong sự kiện Time Flies, Apple đã giới thiệu đến người dùng chiếc iPad Air 4 Wifi Cellular 64GB (2020) với thiết kế tương tự iPad Pro, ngoại hình của Air 4 đã được làm mới so với thế hệ iPad Air 3, cấu hình được nâng cấp mạnh mẽ cùng với nhiều cải tiến đáng giá.', 'Tap_6.jpg'),
(42, 1, 'iPad Air 5 M1 Wifi', 16990000, 'iPad Air 5 M1 Wifi 64 GB đã được công bố tại sự kiện Peek Performace diễn ra hôm 9/3 (theo giờ Việt Nam). Năm nay Apple đã có những thay đổi lớn về cả hiệu năng và bổ sung màu sắc mới cho thiết bị.', 'Tab_8.jpg'),
(43, 1, 'Huawei MatePad 11', 13990000, 'MatePad 11 - chiếc máy tính bảng đến từ nhà Huawei với lối thiết kế tối giản nhưng vẫn toát lên vẻ sang trọng, sở hữu trong mình cấu hình mạnh mẽ, màn hình lớn cùng một viên pin trâu có thể đáp ứng được hầu hết các tác vụ làm việc, học tập hay giải trí.', 'Tab_9.jpg'),
(44, 1, 'iPad 9 WiFi', 10690000, 'Sau thành công của iPad 8, Apple cho đã cho ra mắt iPad 9 WiFi 64GB - phiên bản tiếp theo của dòng iPad 10.2 inch, về cơ bản nó kế thừa những điểm mạnh từ các phiên bản trước đó và được cải tiến thêm hiệu suất, trải nghiệm người dùng nhằm giúp nhu cầu sử dụng giải trí và làm việc tiện lợi, linh hoạt hơn.', 'Tap_10.jpg'),
(45, 7, 'Apple Watch S6', 7990000, 'Apple Watch S6 mang đến những nâng cấp hữu ích để hỗ trợ người dùng một cách tối ưu nhất. Nổi bật trong số đó là chip xử lý S6 cải thiện hiệu năng, hệ điều hành WatchOS 7 với nhiều tính năng mới hứa hẹn sẽ mang đến những trải nghiệm tốt hơn, thú vị hơn', 'Watch_1.jpg'),
(46, 7, 'Samsung Galaxy Watch 4', 5490000, 'Phiên bản đồng hồ Samsung Galaxy Watch 4 này được thiết kế đơn giản với mặt đồng hồ dạng tròn có đường kính 40 mm thường thấy ở đồng hồ thông minh tạo nên phong cách năng động, cuốn hút. Khung viền đồng hồ được làm từ chất liệu nhôm bền chắc, trọng lượng nhẹ. Bên cạnh đó dây đeo silicone êm ái, không gây khó chịu khi đeo suốt ngày dài, kể cả khi người dùng vận động, tập thể thao ra nhiều mồ hôi tay.', 'Watch_2.jpg'),
(47, 7, 'Apple Watch S6 LTE', 12490000, 'Apple Watch S6 LTE 44mm viền nhôm dây cao su xanh dương mang nét thanh lịch, các chi tiết được gia công chắc chắn, tinh xảo. Màn hình OLED 1.78 inch với thiết kế tràn viền giúp hình ảnh hiển thị rõ nét, chân thực. Nhờ có mặt kính Ion-X strengthened glass cứng cáp, chống trầy xước và chống va đập hiệu quả, đồng hồ an toàn trước những va chạm thường ngày. Dây đeo silicone êm nhẹ, độ đàn hồi cao, cho người dùng cảm giác dễ chịu suốt ngày dài.', 'Watch_3.jpg'),
(50, 7, 'Apple Watch SE', 7990000, 'Apple Watch SE 40mm viền nhôm dây cao su hồng có khung viền chắc chắn, thiết kế bo tròn 4 góc giúp thao tác vuốt chạm thoải mái hơn. Mặt kính cường lực Ion-X strengthened glass với kích thước 1.57 inch, hiển thị rõ ràng. Khung viền nhôm chắc chắn cùng dây đeo cao su có độ đàn hồi cao, êm ái, tạo cảm giác thoải mái khi đeo', 'Watch_6.jpg'),
(51, 7, 'BeU Sporty 1', 1590000, 'Đồng hồ thông minh BeU Sporty 1 mang kiểu dáng cá tính, hiện đại cùng tông màu đen mạnh mẽ, trẻ trung. Đồng hồ sở hữu khung viền hợp kim nhôm có trọng lượng nhẹ, bền bỉ, bảo vệ an toàn các chi tiết bên trong. Dây đeo silicone êm nhẹ, độ đàn hồi tốt, không thấm nước, cho bạn thoải mái đeo suốt ngày dài.', 'Watch_7.jpg'),
(52, 7, 'Samsung Galaxy Watch 3', 9490000, 'Đồng hồ thông minh Samsung Galaxy Watch 3 41 mm sở hữu 2 nút bấm và vòng bezel xoay điều khiển vật lý, thay cho mặt xoay cảm ứng ở phiên bản Watch Active 2. Màn hình Super AMOLED 1.2 inch cùng độ phân giải 360 x 360 pixels giúp hình ảnh hiển thị được chân thật, rõ nét. Thân đồng hồ được làm bằng thép cứng cáp, khác với Watch Active 2 được làm bằng nhôm. Dây đeo chất liệu da tạo cảm giác chắc chắn và dễ chịu cho người dùng khi đeo.', 'Watch_8.jpg'),
(53, 7, 'BeU B2', 490000, 'Đồng hồ thông minh BeU tự hào là dòng sản phẩm mang thương hiệu Việt Nam, sở hữu đầy đủ những tính năng hữu ích và cần thiết như: theo dõi giấc ngủ, đo nhịp tim, trang bị nhiều bài luyện tập thể thao,... đi kèm với giá thành rẻ, phù hợp với thị trường người tiêu dùng Việt', 'Watch_9.jpg'),
(55, 2, 'HP 205 Pro G8 AIO R3', 13890000, 'HP 205 Pro G8 AIO R3 5300U (5R3F1PA) là chiếc máy tính AIO được thiết kế tối ưu cho mọi không gian làm việc như văn phòng, quầy lễ tân, sảnh bệnh viện,... khi được tích hợp cả CPU, ổ cứng, loa, camera trên cùng một màn hình nhưng vẫn đảm bảo hiệu năng đáp ứng tốt cho các tác vụ văn phòng, đồ họa cơ bản.', 'PC_1.jpg'),
(56, 2, 'HP 205 Pro G4 AIO R5', 16290000, 'Máy tính để bàn HP 205 Pro G4 AIO R5 (31Y21PA) mang thiết kế hiện đại khi tích hợp đầy đủ hệ thống phần mềm, camera, loa, các cổng kết nối thông tin và cả chuột, bàn phím kèm theo giúp bạn có thể đặt ở nhiều vị trí khác nhau nơi làm việc.', 'PC_2.jpg'),
(57, 2, 'Asus ExpertCenter AIO E5202WHAK', 19990000, 'Mang thiết kế hiện đại và tính tiện dụng cao, Asus ExpertCenter AIO E5202WHAK i5 (BA061W) là chiếc máy tính All-in-one có khả năng tối ưu diện tích không gian làm việc khi tích hợp ổ cứng, camera, loa và CPU ngay trên chiếc màn hình.', 'PC_3.jpg'),
(58, 2, 'Asus AIO V241EAT', 21390000, 'Sự kết hợp hoàn hảo giữa các linh kiện cấu thành chiếc máy tính Asus AIO V241EAT (BA025W) nguyên bộ nhỏ gọn, tiết kiệm diện tích bảo đảm xử lý tốt các tác vụ văn phòng hằng ngày cho người dùng.', 'PC_4.jpg'),
(59, 2, 'HP 200 Pro G4 AIO', 17690000, 'HP 200 Pro G4 AIO i5 (2J861PA) là chiếc máy tính all-in-one có chuột và bàn phím kèm theo, mang hình thức tích hợp ổ cứng dữ liệu, phần mềm CPU, loa, camera vào chung màn hình giúp bạn tối ưu được không gian làm việc.', 'PC_5.jpg'),
(62, 2, 'Lenovo IdeaCentre AIO 3 24ITL6', 20590000, 'Lenovo IdeaCentre AIO 3 24ITL6 (F0G0009AVN) là phiên bản máy tính All-in-one khi được tích hợp đầy đủ các linh kiện đa năng như loa, CPU, camera,... vào chung một màn hình lớn nhưng vẫn sở hữu lối thiết kế gọn gàng, thời thượng cùng cấu hình mạnh mẽ đa tác vụ.', 'PC_10.jpg'),
(63, 2, 'Asus Zen AIO M5401WU', 19990000, 'Asus Zen AIO M5401WU R5 (BA014W) là phiên bản máy tính All-in-One tiện lợi khi gói gọn tất cả mọi thứ vào chung một màn hình từ ổ cứng, loa, webcam đến CPU tích hợp, tối ưu hóa không gian làm việc nhưng vẫn đáp ứng đa dạng mọi nhu cầu cần thiết hằng ngày.', 'PC_10.jpg'),
(64, 2, 'Asus ExpertCenter AIO E5402WHAT', 26390000, 'Đáp ứng từ nhu cầu giải trí đến làm việc văn phòng, Asus ExpertCenter AIO EA5402WHAT (BA030W) là chiếc máy tính AIO hoàn hảo dành cho bạn.', 'PC_9.jpg'),
(65, 7, 'Samsung Galaxy Watch 4 Classic', 6990000, 'Điểm nhấn của Samsung Galaxy Watch 4 dòng Classic nằm ở thiết kế đậm nét cổ điển với những góc cạnh được vát tròn tinh tế. Vì thế, dù sở hữu đường kính mặt là 46 mm thì đồng hồ vẫn mang lại cảm giác gọn nhẹ, thanh lịch.\r\n\r\nKhung viền được chế tác từ thép không gỉ cao cấp chống ăn mòn hiệu quả, vòng xoay bezel vừa giúp người dùng định vị thời gian nhanh chóng với số phút được khắc ở mặt trong, vừa có tác dụng điều hướng thay thế cho các nút bấm bên cạnh đồng hồ. Dây đeo silicone có độ đàn hồi cao và thấm hút tốt khi tay ra mồ hôi.', 'Watch_5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Ad_Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cate_Id`) USING BTREE;

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cus_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Prod_Id`) USING BTREE,
  ADD KEY `CategoryID` (`Cate_Id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Ad_Id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary key and auto increment', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cate_Id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cus_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Prod_Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `CategoryID` FOREIGN KEY (`Cate_Id`) REFERENCES `category` (`Cate_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
