-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2022 lúc 05:16 PM
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
-- Cấu trúc bảng cho bảng `benh_hoc`
--

CREATE TABLE `benh_hoc` (
  `id` int(11) NOT NULL,
  `tieu_de` text NOT NULL,
  `noi_dung` text DEFAULT NULL,
  `anh` varchar(255) NOT NULL,
  `nguoi_dang` varchar(255) NOT NULL,
  `thoi_gian_dang` date DEFAULT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `benh_hoc`
--

INSERT INTO `benh_hoc` (`id`, `tieu_de`, `noi_dung`, `anh`, `nguoi_dang`, `thoi_gian_dang`, `trang_thai`) VALUES
(1, '15 CÁCH CHỮA CÚM TẠI NHÀ HIỆU QUẢ GIÚP BẠN NHANH KHỎI BỆNH', '', 'chua-cum-tai-nha.jpg', 'Lê Thị Hoa', '2022-12-01', 1),
(2, 'TIÊM PHÒNG CÚM TRƯỚC KHI MANG THAI BAO LÂU? Ở ĐÂU, GIÁ BAO NHIÊU?', '<h4 class=\"color-h\">Có nên tiêm phòng cúm trước khi mang thai?</h4><br>\r\n<span>CÓ! Nhiều tổ chức về sức khỏe cộng đồng quốc tế khuyến cáo, phụ nữ chuẩn bị mang thai nhất định phải được tiêm vắc xin phòng cúm. Cúm mùa được xem là bệnh “sói đội lốt cừu”, nhiều người đang xem nhẹ nguy cơ và mức độ nghiêm trọng do cúm gây ra. Theo Tổ chức Y tế Thế giới (WHO), tiêm phòng cúm trước khi có thai cần ưu tiên vì 3 lý do sau:<br>\r\n\r\nNgăn ngừa nguy cơ mắc cúm và biến chứng cho mẹ bầu: Khi hệ miễn dịch suy giảm, cơ thể người mẹ không thể tự chống lại bệnh cúm. Bệnh có thể tiến triển nặng lên, dẫn đến viêm phổi và những vấn đề khác. Đây là nguy cơ khiến em bé dễ sinh nhẹ cân, sinh non, thai chết lưu, nhất là khi mắc cúm trong 3 tháng đầu thai kỳ.<br>\r\nNgăn ngừa các vấn đề sức khỏe thai nhi tiềm ẩn: Bị sốt do cúm trong thai kỳ đầu mang thai có thể làm tăng nguy cơ dị tật thai nhi. Thậm chí, nếu bệnh cúm nặng có thể sẽ dẫn đến nhiễm trùng phổi nghiêm trọng ở mẹ bầu và thậm chí là tử vong ở cả mẹ và bé.<br>\r\nBảo vệ trẻ sau khi sinh: Trẻ sơ sinh có nguy cơ cao mắc triệu chứng cúm nặng, nhưng trẻ chỉ có thể tiêm vắc xin cúm khi được 6 tháng tuổi trở lên. Nếu mẹ bầu tiêm phòng cúm khi mang thai, các kháng thể sẽ truyền qua nhau thai và sữa mẹ, giúp bảo vệ bé khỏi cúm ngay khi chào đời.<br>\r\nTiêm phòng cúm đã được chứng minh giúp giảm khoảng 50% nguy cơ nhiễm trùng đường hô hấp cấp tính do cúm và giảm 40% nguy cơ nhập viện vì cúm ở mẹ bầu. Việc tiêm vắc xin cúm giúp phụ nữ mang thai giảm thiểu tình trạng nhiễm trùng khi bị cúm hoặc giúp tình trạng nhiễm trùng chỉ xảy ra ở mức độ nhẹ hơn nhiều lần.<br>\r\n\r\nĐặc biệt, vắc xin cúm không chỉ phòng cúm hiệu quả 90%, giảm tỷ lệ tử vong 70-80% mà còn giúp giảm nguy cơ tăng nặng các bệnh đang mắc, tránh nguy cơ đồng nhiễm virus, vi khuẩn khác. Vắc xin cúm giảm nguy cơ nhập viện ICU (chăm sóc đặc biệt) đến 26% ở người lớn, 74% ở trẻ em; giảm nguy cơ tử vong hơn 31% so với những người không tiêm vac xin cúm, giảm chi phí y tế và tình trạng gián đoạn lao động do bệnh tật.<br></span>\r\n<h4 class=\"color-h\">Hậu quả nếu mắc bệnh cúm trong quá trình mang thai</h4><br>\r\n<span>Virus cúm 2022 đang có những biến đổi phức tạp, chiều hướng khó dự đoán, tăng tốc độ lây nhiễm và biến chứng nặng nề ở mọi nhóm đối tượng, đặc biệt đối tượng nhạy cảm như phụ nữ mang thai. <br>Thời gian gần đây, tỷ lệ bệnh nhân nhập viện do cúm và các bệnh hô hấp tăng cao, tăng tỷ lệ đồng nhiễm nhiều bệnh, khi dịch Covid-19 lấp ló quay trở lại.<br>\r\n\r\nChia sẻ về hậu quả nếu mẹ bầu mắc cúm trong quá trình mang thai, BS.CKI Bạch Thị Chính cho biết: “Người ta không chết vì cúm nhưng sẽ chết vì những biến chứng của nó. Nếu mẹ bầu không may nhiễm cúm thì cực kỳ nguy hiểm, cúm sẽ làm thay đổi cấu trúc bào thai trong 3 tháng đầu, dẫn đến sảy thai, sinh non,… hoặc gây ra những di chứng nặng nề, dị tật thai nhi cho con sau khi chào đời”.<br>\r\n\r\nCúm mùa khác với cảm lạnh, cúm thường đi kèm với các triệu chứng nặng hơn, kéo dài dai dẳng hơn và tiềm ẩn biến chứng nặng nề. Với mẹ bầu, cúm trở thành kẻ thù vô cùng nguy hiểm. Ở thai kỳ, hệ miễn dịch của mẹ bầu rất nhạy cảm, cơ thể thường có nhiều thay đổi, khả năng miễn dịch kém, dễ ốm do thay đổi thời tiết nên dễ lây nhiễm cúm nếu tiếp xúc với virus, người bệnh. Tiêm phòng cúm cho bà bầu là cách tốt nhất để bảo vệ mẹ bầu và thai nhi khỏi tác động của cúm.<br></span>\r\n<h4 class=\"color-h\">Nên tiêm cúm trước khi mang thai bao lâu hay mấy tháng?</h4><br>\r\n<span>Trẻ em và người lớn đều cần tiêm nhắc lại vắc xin cúm hàng năm, vậy với mẹ bầu thì tiêm cúm trước khi mang thai mấy tháng? Nên tiêm phòng cúm trước khi mang thai bao lâu? Để vắc xin đạt hiệu quả tốt nhất, phụ nữ nên chủ động tiêm phòng cúm càng sớm càng tốt, thời điểm tốt nhất là trước mùa cúm (tháng 10 hàng năm). Tiêm ở thời điểm nào trong thai kỳ cũng được, khuyến cáo nên tiêm cúm trước khi mang thai 1 tháng để đảm bảo miễn dịch chủ động bảo vệ mẹ và bé trong suốt hành trình thai kỳ, vì sau khi tiêm cơ thể cần 2 tuần để sản sinh kháng thể đặc hiệu.<br>\r\n\r\nNhiều thai phụ bỏ lỡ mũi vắc xin cúm trước mang thai thường lo lắng rằng: Đang mang thai có tiêm phòng cúm được không? Lý giải về vấn đề này, BS.CKI Bạch Thị Chính giải đáp: “Theo thông tin kê toa của nhà sản xuất, phụ nữ mang thai được tiêm vắc xin phòng cúm, mặc dù không có khuyến cáo trong chỉ định nhưng có thể cho phép tiêm vắc xin cúm ở bất kỳ giai đoạn nào của thai kỳ. Tuy nhiên, dữ liệu sẵn có ở nhóm thai phụ ở 3 tháng giữa và 3 tháng cuối thai kỳ nhiều hơn ở 3 tháng đầu tiên, chúng ta biết rằng 3 tháng đầu tiên là giai đoạn thai nhi phát triển và có rất nhiều yếu tố trùng hợp nên nếu có tiêm vắc xin cúm trong giai đoạn mang thai thì mẹ bầu nên tiêm vào 3 tháng giữa hoặc cuối thai kỳ.”<br></span>', 'tiem-phong-cum-truoc-khi-mang-thai-768x402.jpg', 'Nguyễn Ngọc Anh', '2022-12-02', 1),
(3, 'VIRUS CÚM LÀ GÌ? CÁC CHỦNG VIRUS CÚM PHỔ BIẾN VÀ ĐẶC ĐIỂM CẤU TẠO', '<h4 class=\"color-h\">Virus cúm là gì?</h4><br>\r\n<span>Virus cúm là nguyên nhân dẫn đến bệnh lý cấp tính đường hô hấp. Thông thường, bệnh thường khá lành tính. Người bệnh có thể hồi phục trong vòng 2 đến 7 ngày. Tuy nhiên, ở một số đối tượng như trẻ em, người cao tuổi, người có bệnh lý nền thiếu máu hay các bệnh về tim, phổi, thận, người suy giảm miễn dịch thường có thể tiến triển nặng hơn gây viêm tai, viêm phế quản, viêm não,…<br></span>\r\n<h4 class=\"color-h\">Đặc điểm virus cúm</h4><br>\r\n<span>Virus cúm thuộc nhóm Orthomyxoviridae, được chia thành 3 tuýp A, B, C. Những tuýp virus này gây bệnh trên các loài động vật có xương sống bao gồm: chim, các loài động vật có vú và con người.<br>\r\n\r\nVirus cúm được nhận diện nhờ vào cấu trúc kháng nguyên bề mặt, phức hợp protein và khả năng gây bệnh trên động vật có xương sống. Virus cúm A và B ở người gây ra dịch bệnh theo mùa (được gọi là cúm mùa) hầu như xảy ra vào mùa đông ở Hoa Kỳ. Virus cúm A là loại virus cúm duy nhất được biết đến là nguyên nhân gây ra các vụ dịch cúm toàn cầu. Đại dịch có thể xảy ra khi một loại virus cúm A mới và khác xuất hiện, vừa lây nhiễm từ động vật sang người vừa có khả năng lây lan hiệu quả giữa người với người. Virus cúm C nói chung gây bệnh nhẹ và không được cho là có thể gây dịch cho người. Virus cúm D chủ yếu ảnh hưởng đến gia súc và không được biết là có thể lây nhiễm hoặc gây bệnh cho người.<br>\r\n\r\nVirus cúm có hình cầu, đường kính 80 – 120 nm. Khi được cấy truyền nhiều lần qua phôi gà, virus cúm có hình sợi.<br></span>\r\n<h4 class=\"color-h\">Virus cúm sống ngoài môi trường bao lâu?<br></h4><br>\r\n<span>Bản chất virus cúm là lipoprotein, do đó virus có sức đề kháng yếu, dễ bị bất hoạt bởi bức xạ mặt trời, tia tử ngoại. Ngoài ra, virus có thể bị tiêu diệt ở nhiệt độ 56oC và các chất hòa tan lipid như ether, chloramine, beta-propiolactone, formol, cồn,…<br>\r\n\r\nTuy nhiên, ở môi trường bên ngoài, virus có thể tồn tại hàng giờ, đặc biệt là trong thời tiết lạnh và độ ẩm thấp. Ở nhiệt độ 0 – 4oC, virus có thể sống được vài tuần. Ở nhiệt độ -20oC và đông khô, virus cúm có thể tồn tại cả năm.<br></span>\r\n<h4 class=\"color-h\">Các chủng virus cúm thường gặp</h4><br>\r\n<span>Có 4 chủng virus cúm A, B, C và D; trong đó 3 chủng virus cúm A, B, C là nguyên nhân chủ yếu gây bệnh cho con người.</span>', 'virus-cum-768x402.jpg', 'Trần Huyền Diệp', '2022-12-03', 1),
(4, 'CÁCH ĐIỀU TRỊ ĐẬU MÙA KHỈ THEO HƯỚNG DẪN CỦA BỘ Y TẾ VÀ CHẨN ĐOÁN', '<h4 class=\"color-h\">Bệnh đậu mùa khỉ</h4><br>\r\n<span>Đậu mùa khỉ là bệnh truyền nhiễm cấp tính và có khả năng gây dịch. Bệnh có nguồn gốc từ Châu Phi, có khả năng lây truyền từ động vật sang người hoặc người sang người qua tổn thương da, giọt bắn đường hô hấp, dịch cơ thể, quan hệ tình dục,… Triệu chứng chính của bệnh là phát ban dạng phỏng nước, sốt, sưng hạch, có thể gây biến chứng nặng và tử vong. Ngày 23/7/2022, Tổ chức Y tế Thế giới (WHO) cảnh báo tình trạng khẩn cấp về sức khỏe cộng đồng với bệnh đậu mùa khỉ.<br></span>\r\n<h4 class=\"color-h\">Bệnh đậu mùa khỉ có chữa khỏi được không?</h4><br>\r\n<span>CÓ. Có thể điều trị đậu mùa khỉ nếu bệnh được phát hiện sớm và có phác đồ điều trị đúng cách. Thông thường sau khoảng từ 2 đến 4 tuần, triệu chứng của bệnh thuyên giảm và sức khỏe bệnh nhân dần phục hồi.<br></span>\r\n<h4 class=\"color-h\">Cách điều trị bệnh đậu mùa khỉ như thế nào?</h4><br>\r\n<span>Điều trị đậu mùa khỉ tại nhà\r\nNgười có triệu chứng nghi ngờ mắc bệnh đậu mùa khỉ nên thông báo ngay cho cơ sở y tế gần nhất để được chẩn đoán và điều trị. Trong trường hợp, bệnh nhân được phép chữa trị đậu mùa khỉ tại nhà theo phác đồ điều trị của bác sĩ, cần tuân thủ nghiêm ngặt những điều cần lưu ý sau:<br><br>\r\n\r\nChăm sóc và bảo vệ những vùng bị tổn thương để vết ban tự khô, không được chạm vào tổn thương ở miệng và mắt;<br>\r\nNên cách ly tại phòng riêng, tránh tiếp xúc với người thân trong gia đình;\r\nSử dụng phòng tắm riêng và vệ sinh sau mỗi lần sử dụng;<br>\r\nLàm sạch các bề mặt thường xuyên chạm vào với xà phòng hoặc chất khử trùng gia dụng. Tránh quét hoặc hút bụi vì có thể làm lây lan virus, khiến người khác bị nhiễm bệnh;<br>\r\nSử dụng vật dụng riêng như khăn tắm, ga giường, đồ điện tử;<br>\r\nTự giặt giũ quần áo, khăn mặt,…;\r\nRửa tay thường xuyên bằng xà phòng, nước, nước rửa tay có cồn.Sử dụng thuốc\r\nHiện chưa có thuốc đặc hiệu điều trị đậu mùa khỉ. Tiêm vắc xin đậu mùa có thể phòng ngừa bệnh đậu mùa khỉ, tuy nhiên hiệu quả vắc xin đậu mùa giảm dần theo thời gian.<br>\r\n\r\nThuốc kháng virus được xem là phương pháp tiềm năng điều trị bệnh đậu mùa khỉ. Trong trường hợp bệnh tiến triển nặng, người bệnh có thể được dùng thuốc kháng virus tecovirimat có tác dụng điều trị đậu mùa và chống lại virus orthopoxvirus.<br>\r\n\r\nNgoài ra, có thể tiêm tĩnh mạch globulin miễn dịch vaccinia (VIG) chứa kháng thể lấy từ máu người đã từng tiêm phòng bệnh đậu mùa.<br>\r\n\r\nCách điều trị bệnh đậu mùa khỉ tùy thuộc vào tình trạng bệnh và thể trạng của từng bệnh nhân. Khi phát hiện triệu chứng nghi ngờ đậu mùa khỉ, người dân nên báo ngay cho các đơn vị y tế để được chẩn đoán và điều trị đúng phác đồ, tránh nguy cơ lây lan và bùng phát thành đại dịch.</span>', '182818.png', 'Lê Thị Hoa', '2022-12-12', 1),
(5, 'BIẾN CHỨNG BỆNH PHỔI TẮC NGHẼN MÃN TÍNH COPD CÓ NGUY HIỂM KHÔNG?', '<h4 class=\"color-h\">Tìm hiểu về bệnh phổi tắc nghẽn mãn tính COPD</h4><br>\r\n<span>Bệnh phổi tắc nghẽn mạn tính (Chronic Obstructive Pulmonary Disease – COPD) là tình trạng viêm niêm mạc đường thở mạn tính làm giảm chức năng thông khí ở phổi. Bệnh có xu hướng nghiêm trọng dần theo thời gian. Người bệnh thường cảm thấy khó thở vì đường thở bị hẹp so với bình thường và có thể dẫn để suy hô hấp, chạy máy thở, thậm chí đe dọa tính mạng người bệnh.<br>\r\n\r\nNguyên nhân hàng đầu gây COPD là do tiếp xúc với khói thuốc lá (hút thuốc lá chủ động hoặc thụ động), có khoảng ¾ số ca mắc COPD là do hút thuốc lá. Các yếu tố nguy cơ khác như: ô nhiễm không khí, khói bụi trong sinh hoạt và sản xuất,…</span><br>\r\n<h4 class=\"color-h\">Biến chứng bệnh phổi tắc nghẽn mạn tính COPD</h4><br>\r\n<span>1. Đợt cấp COPD<br><br>\r\nĐợt cấp COPD (hay còn gọi là đợt kịch phát – COPD Exacerbation) là tình trạng các triệu chứng hô hấp biến đổi cấp tính từ giai đoạn ổn định trở nên xấu đột ngột, ảnh hưởng tiêu cực đến chức năng phổi, đòi hỏi có sự thay đổi ở phác đồ điều trị thông thường. Trong đó, có hơn 80% đợt cấp do nhiễm trùng bởi virus hoặc vi khuẩn (COPD bội nhiễm).<br><br>\r\n\r\nTheo thống kê, có đến 60-70% người bệnh phổi tắc nghẽn mãn tính có 1 đợt cấp COPD trong vòng 2-4 năm. Ai mắc COPD đều có nguy cơ bị đợt cấp, nếu không được phát hiện kịp thời, tình trạng sẽ trở nên tồi tệ hơn và dẫn đến tiên lượng bệnh nặng. Đặc biệt, người bệnh có càng nhiều đợt cấp có tỷ lệ tử vong càng cao hơn.<br><br>\r\n\r\nĐáng lo ngại, tỷ lệ sống của bệnh nhân sau đợt cấp giảm dần theo thời gian, nghiên cứu đa trung tâm tổng hợp 25 trung tâm trên thế giới trên 1000 bệnh nhân đã trải qua đợt cấp COPD cho thấy, sau 2 năm tỷ lệ sống của những bệnh nhân này giảm còn 50,7%. Ngoài ra, người trải qua đợt cấp còn có nguy cơ gặp phải các hậu quả COPD nghiêm trọng như: tràn khí màng phổi, tăng áp lực động mạch phổi, suy tim, ung thư phổi, loãng xương,…<br><br>\r\n\r\n2. Nhiễm trùng phổi<br><br>\r\nNhững người bệnh phổi tắc nghẽn mạn tính có nguy cơ cao bị các bệnh nhiễm trùng phổi hoặc viêm phổi hơn người khác. Một nghiên cứu trên 179.759 người trưởng thành đang điều trị COPD cấp cho kết quả viêm phổi phát triển ở khoảng 36% số bệnh nhân. Nghiên cứu khác cũng cho thấy, bệnh nhân COPD lớn tuổi có nguy cơ mắc viêm phổi cao gấp 6 lần.<br><br>\r\n\r\nNhiễm trùng phổi do COPD có thể gây ra một chuỗi các vấn đề làm suy yếu chức năng phổi như: nhiễm trùng máu, tràn dịch màng phổi, áp xe ở phổi,… Điều này làm sụt giảm sức khỏe người bệnh nhanh chóng và có thể dẫn đến tử vong trong thời gian ngắn.<br><br>\r\n\r\n3. Hội chứng suy hô hấp cấp tính (ARDS)\r\nBệnh COPD kéo dài có thể làm tăng nguy cơ mắc hội chứng suy hô hấp cấp tính. Đây là tình trạng phổi không nhận đủ lượng oxy, hoặc sự tích tụ quá nhiều carbon dioxide làm hỏng các cơ quan trong cơ thể, đồng thời làm suy giảm oxy máu động mạch, kết quả làm chậm quá trình phân phối oxy đến các mô.<br><br>\r\n\r\nCác biến chứng nguy hiểm của tìn</span><br><br>\r\n<h4 class=\"color-h\">Làm gì để ngăn ngừa biến chứng COPD</h4><br><br>\r\n<span>1. Bỏ thói quen hút thuốc lá<br>\r\nThuốc lá là một trong các nguyên nhân chính gây ra COPD và làm trầm trọng hơn tình trạng bệnh. GS.TS.BS Ngô Quý Châu, Chủ tịch Hội Hô hấp Việt Nam, Giám đốc chuyên môn khối nội BVĐK Tâm Anh, Hà Nội khuyến cáo: “Không hút thuốc là biện pháp đơn giản và hiệu quả nhất để phòng ngừa và thay đổi diễn tiến ở tất cả các giai đoạn của bệnh kể cả ở mức độ chưa có triệu chứng hay mức độ rất nặng. Bên cạnh đó, mỗi người cần hạn chế đến mức thấp nhất tiếp xúc với các yếu tố nguy cơ như: khí, hóa chất, khói độc hại, bụi. Nếu công việc buộc phải làm việc trong môi trường khói bụi thì cần có bảo hộ lao động để bảo vệ đường hô hấp đúng tiêu chuẩn.”<br><br>\r\n\r\n2. Sử dụng thuốc điều trị đúng chỉ định\r\nCác dạng thuốc duy trì theo đúng hướng dẫn của bác sĩ điều trị có thể giúp làm dịu các triệu chứng, cải thiện chức năng phổi và kiểm soát các triệu chứng COPD về lâu dài.<br><br>\r\n\r\nThuốc giãn phế quản là thuốc phổ biến trong điều trị COPD. Dạng bào chế thuốc cũng đóng vai trò quan trọng quyết định mức độ tác dụng của thuốc. Các thuốc dạng hít hoặc khí dung được ưu tiên sử dụng hơn thuốc uống hoặc thuốc tiêm truyền tĩnh mạch vì đưa thuốc trực tiếp đến các vị trí cần tác dụng, giúp tăng hiệu quả thuốc và hạn chế tối đa các tác dụng phụ có thể xảy ra. Ngoài ra, để đảm bảo thuốc phát huy tối đa công dụng, người bệnh cần dùng thuốc hít đúng kỹ thuật, đúng liều và đúng giờ.<br><br>\r\n3. Tiêm chủng đầy đủ, đúng lịch<br><br>\r\nTiêm phòng được ví là “chìa khóa” hữu hiệu, đơn giản và tiết kiệm nhất để phòng tránh các bệnh nhiễm khuẩn đường hô hấp, cúm mùa, viêm phổi,… Đây đều là những bệnh không chỉ nguy hiểm với trẻ nhỏ mà còn là nguyên nhân gây tử vong nhanh ở người cao tuổi, đặc biệt người có bệnh lý mạn tính ở phổi.<br><br>\r\n\r\nMặt khác, các bệnh nhiễm trùng đường hô hấp như cúm, viêm phổi, ho gà… là tác nhân hàng đầu gây đợt cấp COPD. Vì vậy, người mắc bệnh phổi tắc nghẽn mạn tính COPD cần tiêm ngay vắc xin phòng các bệnh Hô hấp để bảo vệ phổi khỏe mạnh hơn, làm chậm tiến triển bệnh, cải thiện chất lượng cuộc sống và kéo dài thời gian sống:<br><br>\r\n\r\nVắc xin Prevenar 13 – Phế cầu 13 (Bỉ): phòng viêm phổi, viêm màng não, viêm tai giữa, nhiễm khuẩn huyết (nhiễm trùng máu),… do phế cầu khuẩn. Vắc xin có hiệu quả bảo vệ rất cao, chỉ cần 1 mũi tiêm bảo vệ trọn đời.<br><br>\r\nVắc xin cúm mùa: Vắc xin cúm Tứ giá thế hệ mới Vaxigrip (Pháp); Influvac Tetra (Hà Lan), Ivacflu-S (Việt Nam), GC Flu (Hàn Quốc), GCFlu Quadrivalent (Hàn Quốc). Đây là những loại vắc xin cúm đã được chứng minh mang lại hiệu quả phòng bệnh cộng hưởng, giúp giảm tỷ lệ biến chứng nghiêm trọng, nhập viện và ít chăm sóc khẩn cấp (ICU) do Covid-19. Người lớn chỉ cần tiêm nhắc mỗi năm 1 lần.\r\nVắc xin Boostrix (Bỉ) phòng Ho gà – Bạch hầu – Uốn ván giúp bảo vệ hô hấp hiệu quả với lịch tiêm nhắc lại mỗi 10 năm 1 lần.<br><br>\r\nVắc xin Menactra (Mỹ) phòng biến chứng viêm phổi do não mô cầu khuẩn tuýp A,C,Y,W-135. Vắc xin VA-Mengoc-BC phòng biến chứng viêm phổi do não mô cầu khuẩn tuýp B,C.<br><br>\r\n4. Chế độ dinh dưỡng, sinh hoạt lành mạnh<br><br>\r\nCũng như bất kỳ bệnh lý nào, chế độ ăn uống lành mạnh có thể hỗ trợ cải thiện hiệu quả tình trạng bệnh COPD bằng cách giúp người bệnh giảm cân và kiểm soát cân nặng. Tăng cân và béo phì có thể khiến bạn khó thở hơn, ngay cả khi không mắc bệnh. Vì vậy, nếu được chẩn đoán mắc COPD, bạn nên thảo luận với bác sĩ để thiết lập chế độ dinh dưỡng đủ chất, hợp lý nhằm giúp kiểm soát bệnh hiệu quả hơn.</span><br>', '182840.png', 'Lê Thị Hoa', '2022-12-01', 1),
(6, 'TIÊM PHẾ CẦU CÓ SỐT KHÔNG? CHĂM SÓC TRẺ ĐỂ GIẢM SỐT RA SAO?', '<h4 class=\"color-h\">Tiêm phế cầu có sốt không?</h4><br>\r\n<span>Tiêm phế cầu có sốt không? Phản ứng sau tiêm phế cầu của mỗi người là khác nhau tùy vào cơ địa. Các phản ứng phổ biến có thể kể đến như sốt nhẹ khoảng 38 độ C, thân nhiệt cao hơn bình thường, sưng và đau tại vị trí tiêm nhưng sẽ tự khỏi sau 1-2 ngày. Các chuyên gia y tế dự phòng nhấn mạnh việc trẻ tiêm phế cầu bị sốt là phản ứng rất bình thường, là biểu hiện của hệ miễn dịch cơ thể đang đáp ứng với vắc xin.<br>\r\n\r\nTuy nhiên có số ít trẻ lại có phản ứng hiếm gặp như sốt cao, quấy khóc kéo dài, co giật, tím tái, thậm chí là bị sốc phản vệ. Do vậy, để đảm bảo hiệu quả miễn dịch của vắc xin đồng thời hạn chế tối thiểu các phản ứng sốt sau tiêm, người tiêm chủng cần theo dõi sát sao theo hướng dẫn của bác sĩ, tuân thủ lịch tiêm và số mũi tiêm theo đúng phác đồ, đồng thời lựa chọn cơ sở uy tín để đảm bảo an toàn cho trẻ khi tiêm.<br>\r\n\r\nHệ thống Tiêm chủng VNVC hiện có hơn 40 loại vắc xin phòng hơn 50 bệnh truyền nhiễm, bao gồm 2 loại vắc xin phế cầu cho trẻ em và người lớn. Khi khách hàng đăng ký tiêm chủng, hệ thống sẽ tự động gửi tin nhắn đến để nhắc lịch tiêm, hạn chế việc bỏ lỡ những mũi tiêm quan trọng.<br>\r\n\r\nSau khi tiêm, người tiêm chủng cần ở lại cơ sở tiêm chủng 30 phút để theo dõi các phản ứng và kịp thời xử lý khi cần thiết. Phản ứng sau tiêm tùy vào loại vắc xin và cơ địa của từng trẻ.<br>\r\n\r\n“Những tác dụng phụ sau tiêm vắc xin phế cầu không thể so sánh được với gánh nặng nếu trẻ không may mắc bệnh. Các nghiên cứu đã chứng minh tính an toàn và khả năng sinh miễn dịch của vi khuẩn phế cầu ở cơ thể trẻ từ 6 tuần tuổi và người lớn. Vì vậy, trẻ em và người lớn hoàn toàn có thể yên tâm chủng ngừa càng sớm càng tốt, đặc biệt trẻ nhỏ. Đây là biện pháp an toàn và hiệu quả nhất để tránh nguy cơ tử vong và di chứng suốt đời của trẻ”, BS.CKI Bạch Thị Chính, Giám đốc Y khoa Hệ thống tiêm chủng VNVC cho biết.<br></span><br>\r\n<h4 class=\"color-h\">Trẻ tiêm phế cầu sau bao lâu thì sốt?</h4><br>\r\n<span>BS.CKI Bạch Thị Chính cho biết, sau khi tiêm phòng vắc xin phế cầu 8 – 10 tiếng thì trẻ thường có biểu hiện sốt nhẹ (38 – 39 độ C). Tình trạng sốt sau tiêm vắc xin phế cầu có thể kéo dài 1 – 2 ngày và không gây biến chứng cho trẻ nếu các phụ huynh theo dõi sát sao và chăm sóc đúng cách. Mặt khác, nếu trẻ bị sốt kéo dài trên 3 ngày không hạ hoặc không đáp ứng với thuốc hạ sốt thì phụ huynh cần đưa trẻ đến cơ sở y tế để được thăm khám kịp thời.</span><br>\r\n<h4 class=\"color-h\">Tiêm phế cầu thường sốt mấy ngày?</h4><br>\r\n<span>Sốt là dấu hiệu y khoa thông thường đặc trưng bởi sự gia tăng nhiệt độ cơ thể cao hơn khoảng dao động bình thường của nhiệt độ cơ thể người là 36.5–37.5 độ C (1). Sốt, đa số là đáp ứng của cơ thể với một bệnh truyền nhiễm, sốt thường kéo dài hơn 2 đến 3 ngày.<br>\r\n\r\nNgoài ra, sốt còn có thể do những bệnh không nhiễm trùng khác, đặc biệt sau khi tiếp xúc với chất lạ (vắc xin là một chế phẩm có tính kháng nguyên hoàn toàn xa lạ đối với cơ thể). Khi chất lạ này xuất hiện trong cơ thể (sau tiêm) hệ thống miễn dịch của cơ thể nhận biết là chất lạ và sẽ ngay lập tức gây ra phản ứng sốt để hình thành kháng thể và tạo nên “trí nhớ miễn dịch”, có nghĩa là sau này khi tác nhân gây bệnh tương ứng với vắc xin (phế cầu khuẩn) đã được tiêm, hệ thống miễn dịch của cơ thể sẽ nhớ ngay và huy động ngay lập tức kháng thể để tiêu diệt kẻ xâm nhập.<br>\r\n\r\nTiêm phế cầu thường sốt mấy ngày? Sau khi tiêm vắc xin phế cầu, triệu chứng sốt nhẹ có thể kéo dài 1-2 ngày, sẽ thuyên giảm và khỏi hoàn toàn sau khoảng vài ngày, không để lại di chứng.<br>\r\n\r\nVắc xin phế cầu đã được chứng minh là an toàn, hiệu quả và đã được sử dụng rộng rãi ở hơn 100 quốc gia. Mặc dù có nhiều trường hợp gặp các tác dụng phụ phổ biến như sốt 2 ngày sau tiêm phế cầu, mệt mỏi, đau cơ, sưng tại chỗ tiêm,… với biểu hiện giống cúm nhưng hầu hết là phản ứng nhẹ, trung bình và điều này cho thấy vắc xin đang hoạt động tốt trong việc huấn luyện hệ miễn dịch hình thành cơ chế phòng thủ trước các tác nhân gây bệnh.<br></span><br>\r\n<h4 class=\"color-h\">Cách chăm sóc trẻ sau chích vắc xin phế cầu để giảm sốt</h4><br>\r\n<span>Sau khi trẻ được tiêm phòng viêm phế cầu thì cần chăm sóc đặc biệt trong khoảng 1- 2 ngày tiếp theo,<br>\r\n\r\nSau khi trẻ được tiêm vắc xin phế cầu, việc chăm sóc trẻ sau chích vắc xin phế cầu để giảm sốt quan trọng, ba mẹ cần lưu ý một số cách hạ sốt để đảm bảo an toàn cho trẻ:<br><br>\r\n\r\nCho trẻ cặp nhiệt kế thường xuyên, mặc quần áo thoáng mát, có độ thấm hút để hạ nhiệt.<br>\r\nDuy trì chế độ dinh dưỡng hàng ngày, uống nước nhiều hoặc cho trẻ bú mẹ nhiều hơn.<br>\r\nCó thể dùng hạ sốt theo đơn hoặc thuốc hạ sốt thông thường (paracetamol) với liều phù hợp cân nặng (2)<br>\r\nCó thể chườm ấm (nhúng khăn vào nước có nhiệt độ thấp hơn nhiệt độ cơ thể 1- 20 độ C).<br>\r\nKhông dùng aspirin hoặc các thuốc ho và hạ sốt khác vì có thể làm tăng liều paracetamol.<br>\r\nBên cạnh vấn đề hạ sốt cho trẻ sau tiêm phế cầu, ba mẹ cũng cần lưu ý các phản ứng nặng sau tiêm để nhanh chóng đến cơ sở y tế gần nhất, bao gồm:<br>\r\n\r\nSốt cao trên 39 độ không hạ khi đã áp dụng các cách trên.<br>\r\nVùng tiêm bị sưng, thâm đỏ thành quầng với kích thước ngày càng mở rộng.<br>\r\nCó biểu hiện co giật, mệt lả, người lừ đừ, gọi không phản ứng.<br>\r\nNgười tím tái, khó thở, thở nhanh, thở ngắt quãng, có rút lõm lồng ngực.<br>\r\nQuấy khóc liên tục kéo dài trên 3 tiếng.<br>\r\nBỏ bú, bú kém hoặc có các phản ứng tương tự kéo dài trên 1 ngày<br>\r\nNổi mề đay, chân tay lạnh.</span><br>', '182914.png', 'Nguyễn Quỳnh Anh', '2022-12-10', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_khach_hang`
--

CREATE TABLE `chi_tiet_khach_hang` (
  `id` int(11) NOT NULL,
  `id_khach_hang` int(11) NOT NULL,
  `id_vacxin` int(11) NOT NULL,
  `id_co_so_tiem` int(11) NOT NULL,
  `id_nguoi_tiem` tinyint(3) NOT NULL,
  `ngay_tiem` date NOT NULL,
  `trang_thai_thanh_toan` tinyint(4) NOT NULL DEFAULT 0,
  `trang_thai_tiem` tinyint(3) NOT NULL,
  `loai_dang_ky` tinyint(3) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_khach_hang`
--

INSERT INTO `chi_tiet_khach_hang` (`id`, `id_khach_hang`, `id_vacxin`, `id_co_so_tiem`, `id_nguoi_tiem`, `ngay_tiem`, `trang_thai_thanh_toan`, `trang_thai_tiem`, `loai_dang_ky`, `trang_thai`) VALUES
(2, 2, 2, 2, 2, '2022-12-08', 1, 0, 0, 1),
(3, 1, 3, 3, 1, '2022-12-16', 1, 1, 1, 1),
(7, 11, 2, 1, 3, '2022-12-17', 0, 0, 0, 1);

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
  `tong_tien` int(11) NOT NULL,
  `trang_thai_thanh_toan` tinyint(4) NOT NULL DEFAULT 0,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dang_ky_tiem`
--

INSERT INTO `dang_ky_tiem` (`id`, `ma_dang_ky`, `ho_ten`, `id_nguoi_dung`, `so_dien_thoai`, `ngay_dang_ky`, `tong_tien`, `trang_thai_thanh_toan`, `trang_thai`) VALUES
(3, 'abc123456', 'Lê Thanh Trúc', 0, '0977626821', '2022-12-22', 3045000, 0, 1);

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
(20, 3, 8, 3, 3045000, '2022-12-16', 1);

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
  `id_chi_tiet_khach_hang` int(11) NOT NULL,
  `id_nguoi_kham` int(11) NOT NULL,
  `ngay_kham` date NOT NULL,
  `huyet_ap` double DEFAULT NULL,
  `nhip_tim` int(11) DEFAULT NULL,
  `nhiet_do` int(11) DEFAULT NULL,
  `ket_luan` varchar(255) DEFAULT NULL,
  `luot_tiem` tinyint(4) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ho_so_suc_khoe`
--

INSERT INTO `ho_so_suc_khoe` (`id`, `id_chi_tiet_khach_hang`, `id_nguoi_kham`, `ngay_kham`, `huyet_ap`, `nhip_tim`, `nhiet_do`, `ket_luan`, `luot_tiem`, `trang_thai`) VALUES
(2, 3, 0, '2022-12-08', 125, 80, 38, 'Không có gì bất thường', 2, 1),
(4, 2, 0, '2022-12-16', 120, 83, 37, 'Đủ sức khỏe tiêm', 1, 1);

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
(11, 'Hoa', 20, 'Nữ', '2022-12-21', '0988372114', 'Phú Lương - Hà Đông - Hà Nội', 1);

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
  `ngay_tao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_nguoi_dung`
--

INSERT INTO `loai_nguoi_dung` (`id`, `ten_loai_nguoi_dung`, `mo_ta`, `trang_thai`, `tao_boi`, `ngay_tao`) VALUES
(1, 'Khach hang', '', 1, 'Lê Thị Hoa', '2022-01-04 09:55:26'),
(2, 'Admin', '', 1, 'Lê Thị Hoa', '2022-01-04 09:55:26'),
(3, 'Quản lý cơ sở', '', 1, 'Lê Thị Hoa', '2022-12-19 16:59:27'),
(4, 'Lễ tân', '', 1, 'Lê Thị Hoa', '2022-12-20 17:02:20'),
(5, 'Bác sĩ', '', 1, 'Lê Thị Hoa', '2022-12-19 17:02:53'),
(6, 'Người tiêm', '', 1, 'Lê Thị Hoa', '2022-12-19 17:02:53'),
(7, 'Nhân viên y tế', '', 1, 'Lê Thị Hoa', '2022-12-19 17:03:46'),
(8, 'Quản lý tin tức', '', 1, 'Lê Thị Hoa', '2022-12-19 17:04:15');

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
(1, 6, 'Lê Thị Hoa', '0915273845', 'e10adc3949ba59abbe56e057f20f883e', 'hoa@gmail.com', 1),
(2, 6, 'Lê Thị Hiếu', '0987832311', 'e10adc3949ba59abbe56e057f20f883e', 'hieu@gmail.com', 1),
(3, 6, 'Lê Thị Liên', '0977626821', 'e10adc3949ba59abbe56e057f20f883e', 'lien@gmail.com', 1),
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
  `so_luong` int(11) NOT NULL,
  `so_luong_thuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quan_ly_vacxin`
--

INSERT INTO `quan_ly_vacxin` (`id`, `id_vacxin`, `id_co_so_tiem`, `so_luong`, `so_luong_thuc`) VALUES
(7, 2, 1, 656, 0),
(8, 2, 2, 789, 0),
(9, 2, 3, 456, 0),
(10, 2, 4, 357, 0),
(11, 2, 5, 465, 0),
(12, 2, 6, 876, 0),
(13, 3, 1, 674, 0),
(14, 3, 2, 750, 0),
(15, 3, 3, 898, 0),
(16, 3, 4, 754, 0),
(17, 3, 5, 465, 0),
(18, 3, 6, 876, 0),
(19, 4, 1, 867, 0),
(20, 4, 2, 630, 0),
(21, 4, 3, 456, 0),
(22, 4, 4, 754, 0),
(23, 4, 5, 970, 0),
(24, 4, 6, 876, 0),
(25, 5, 1, 867, 0),
(26, 5, 2, 750, 0),
(27, 5, 3, 898, 0),
(28, 5, 4, 754, 0),
(29, 5, 5, 970, 0),
(30, 5, 6, 876, 0),
(31, 6, 1, 867, 0),
(32, 6, 2, 750, 0),
(33, 6, 3, 898, 0),
(34, 6, 4, 754, 0),
(35, 6, 5, 970, 0),
(36, 6, 6, 876, 0),
(43, 8, 1, 867, 0),
(44, 8, 2, 954, 0),
(45, 8, 3, 898, 0),
(46, 8, 4, 754, 0),
(47, 8, 5, 465, 0),
(48, 8, 6, 876, 0),
(49, 9, 1, 867, 0),
(50, 9, 2, 600, 0),
(51, 9, 3, 898, 0),
(52, 9, 4, 754, 0),
(53, 9, 5, 970, 0),
(54, 9, 6, 876, 0),
(55, 10, 1, 867, 0),
(56, 10, 2, 630, 0),
(57, 10, 3, 898, 0),
(58, 10, 4, 754, 0),
(59, 10, 5, 970, 0),
(60, 10, 6, 876, 0),
(61, 11, 1, 867, 0),
(62, 11, 2, 750, 0),
(63, 11, 3, 456, 0),
(64, 11, 4, 754, 0),
(65, 11, 5, 970, 0),
(66, 11, 6, 876, 0),
(67, 12, 1, 949, 0),
(68, 12, 2, 759, 0),
(69, 12, 3, 456, 0),
(70, 12, 4, 357, 0),
(71, 12, 5, 970, 0),
(72, 12, 6, 876, 0),
(73, 13, 1, 756, 0),
(74, 13, 2, 789, 0),
(75, 13, 3, 689, 0),
(76, 13, 4, 754, 0),
(77, 13, 5, 970, 0),
(78, 13, 6, 876, 0),
(79, 14, 1, 867, 0),
(80, 14, 2, 954, 0),
(81, 14, 3, 456, 0),
(82, 14, 4, 357, 0),
(83, 14, 5, 270, 0),
(84, 14, 6, 181, 0),
(85, 15, 1, 756, 0),
(86, 15, 2, 123, 0),
(87, 15, 3, 356, 0),
(88, 15, 4, 90, 0),
(89, 15, 5, 270, 0),
(90, 15, 6, 876, 0),
(91, 16, 1, 134, 0),
(92, 16, 2, 750, 0),
(93, 16, 3, 356, 0),
(94, 16, 4, 754, 0),
(95, 16, 5, 270, 0),
(96, 16, 6, 181, 0),
(97, 17, 1, 654, 0),
(98, 17, 2, 457, 0),
(99, 17, 3, 356, 0),
(100, 17, 4, 754, 0),
(101, 17, 5, 190, 0),
(102, 17, 6, 181, 0),
(103, 18, 1, 654, 0),
(104, 18, 2, 230, 0),
(105, 18, 3, 456, 0),
(106, 18, 4, 754, 0),
(107, 18, 5, 190, 0),
(108, 18, 6, 876, 0),
(109, 19, 1, 867, 0),
(110, 19, 2, 750, 0),
(111, 19, 3, 689, 0),
(112, 19, 4, 357, 0),
(113, 19, 5, 190, 0),
(114, 19, 6, 181, 0),
(115, 20, 1, 867, 0),
(116, 20, 2, 630, 0),
(117, 20, 3, 689, 0),
(118, 20, 4, 754, 0),
(119, 20, 5, 270, 0),
(120, 20, 6, 876, 0),
(121, 21, 1, 867, 0),
(122, 21, 2, 750, 0),
(123, 21, 3, 898, 0),
(124, 21, 4, 90, 0),
(125, 21, 5, 465, 0),
(126, 21, 6, 876, 0),
(127, 22, 1, 867, 0),
(128, 22, 2, 600, 0),
(129, 22, 3, 545, 0),
(130, 22, 4, 357, 0),
(131, 22, 5, 190, 0),
(132, 22, 6, 876, 0),
(133, 23, 1, 867, 0),
(134, 23, 2, 600, 0),
(135, 23, 3, 898, 0),
(136, 23, 4, 90, 0),
(137, 23, 5, 970, 0),
(138, 23, 6, 181, 0),
(139, 24, 1, 756, 0),
(140, 24, 2, 535, 0),
(141, 24, 3, 356, 0),
(142, 24, 4, 90, 0),
(143, 24, 5, 970, 0),
(144, 24, 6, 181, 0),
(145, 25, 1, 756, 0),
(146, 25, 2, 954, 0),
(147, 25, 3, 456, 0),
(148, 25, 4, 235, 0),
(149, 25, 5, 465, 0),
(150, 25, 6, 876, 0),
(151, 26, 1, 756, 0),
(152, 26, 2, 630, 0),
(153, 26, 3, 898, 0),
(154, 26, 4, 235, 0),
(155, 26, 5, 970, 0),
(156, 26, 6, 181, 0),
(157, 26, 1, 654, 0),
(158, 26, 2, 789, 0),
(159, 26, 3, 898, 0),
(160, 26, 4, 357, 0),
(161, 26, 5, 270, 0),
(162, 26, 6, 181, 0),
(163, 27, 1, 867, 0),
(164, 27, 2, 750, 0),
(165, 27, 3, 689, 0),
(166, 27, 4, 754, 0),
(167, 27, 5, 970, 0),
(168, 27, 6, 181, 0),
(169, 28, 1, 654, 0),
(170, 28, 2, 750, 0),
(171, 28, 3, 234, 0),
(172, 28, 4, 90, 0),
(173, 28, 5, 970, 0),
(174, 28, 6, 181, 0),
(175, 29, 1, 756, 0),
(176, 29, 2, 789, 0),
(177, 29, 3, 545, 0),
(178, 29, 4, 235, 0),
(179, 29, 5, 270, 0),
(180, 29, 6, 876, 0),
(181, 30, 1, 867, 0),
(182, 30, 2, 600, 0),
(183, 30, 3, 456, 0),
(184, 30, 4, 754, 0),
(185, 30, 5, 270, 0),
(186, 30, 6, 876, 0),
(187, 31, 1, 867, 0),
(188, 31, 2, 535, 0),
(189, 31, 3, 456, 0),
(190, 31, 4, 754, 0),
(191, 31, 5, 970, 0),
(192, 31, 6, 876, 0);

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
  `chi_tiet` text NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vacxin`
--

INSERT INTO `vacxin` (`id`, `ten_vacxin`, `nuoc_san_xuat`, `gia_thanh`, `anh`, `chi_tiet`, `trang_thai`) VALUES
(1, 'Bạch hầu, ho gà, uốn ván, bại liệt, Hib (Pentaxim)', 'Pháp', 785000, 'Imojev-boom.png', '<h4 class=\"color-h\">Nguồn gốc</h4><br>\r\n<span>Vắc xin Pentaxim được nghiên cứu và phát triển bởi tập đoàn hàng đầu thế giới về dược phẩm và chế phẩm sinh học Sanofi Pasteur (Pháp).</span><br>\r\n<h4 class=\"color-h\">Đường tiêm</h4><br>\r\n<span>Vắc xin Pentaxim được chỉ định tiêm bắp (ở mặt trước – bên đùi).</span><br>\r\n<h4 class=\"color-h\">Chống chỉ định</h4><br>\r\n<span>Chống chỉ định đối với những trường hợp mẫn cảm với các hoạt chất hay bất cứ tá dược nào trong thuốc.<br>\r\nTrẻ bị dị ứng với một trong các thành phần của vắc xin hay với vắc xin ho gà (vô bào hoặc nguyên bào), hay trước đây trẻ đã có phản ứng dị ứng sau khi tiêm vắc xin có chứa các chất tương tự.<br>\r\nTrẻ có bệnh não tiến triển hoặc tổn thương ở não.<br>\r\nNếu lần trước trẻ từng bị bệnh não (tổn thương ở não) trong vòng 7 ngày sau khi tiêm vắc xin ho gà (ho gà vô bào hay nguyên bào).</span><br>\r\n<h4 class=\"color-h\">Đối tượng</h4><br>\r\n<span>Vắc xin Pentaxim được chỉ định tiêm cho trẻ từ 2 tháng tuổi đến tròn 2 tuổi phòng 5 bệnh: Bạch hầu, Ho gà, Uốn ván, Bại liệt và các bệnh do Hib.</span><br>\r\n<h4 class=\"color-h\"> Phác đồ, lịch tiêm</h4><br>\r\n<span>Lịch tiêm vắc xin 5 trong 1 Pentaxim gồm 4 mũi:<br>\r\n\r\nMũi 1: lần tiêm đầu tiên<br>\r\nMũi 2: 1 tháng sau mũi 1<br>\r\nMũi 3: 1 tháng sau mũi 2\r\n(Các mũi cách nhau 1-2 tháng)<br>\r\n\r\nMũi 4: 1 năm sau mũi 3. Mũi tiêm nhắc lại tốt nhất là vào tháng thứ 16.</span><br>', 1),
(2, 'Bạch hầu, uốn ván, bại liệt (Infanrix Hexa (6in1))	', 'Bỉ	', 1015000, 'boostrix.jpg', '<h4 class=\"color-h\">Nguồn gốc</h4><br>\r\n<span>Vắc xin Infanrix Hexa được nghiên cứu và phát triển bởi tập đoàn hàng đầu thế giới về dược phẩm và chế phẩm sinh học Glaxosmithkline (GSK) – Bỉ.</span><br>\r\n<h4 class=\"color-h\">Đường tiêm</h4><br>\r\n<span>Infanrix Hexa được chỉ định tiêm bắp sâu. Không được tiêm tĩnh mạch hoặc trong da.</span><br>\r\n<h4 class=\"color-h\">Chống chỉ định</h4><br>\r\n<span>Chống chỉ định đối với những trường hợp mẫn cảm với các hoạt chất hay bất cứ tá dược hoặc chất tồn dư nào trong thuốc.<br>\r\nQuá mẫn sau mũi tiêm vắc xin bạch hầu, uốn ván, ho gà, viêm gan B, bại liệt hoặc Hib trước đó.<br>\r\nInfanrix hexa chống chỉ định đối với những trẻ trong tiền sử đã có bệnh về não không rõ nguyên nhân trong vòng 7 ngày sau khi tiêm vắc xin chứa thành phần ho gà.</span><br>\r\n<h4 class=\"color-h\">Đối tượng</h4><br>\r\n<span>Vắc xin Infanrix Hexa được chỉ định tiêm cho trẻ từ 2 tháng đến 2 tuổi phòng 6 bệnh: Bạch hầu, Ho gà, Uốn ván, Bại liệt, Viêm gan B và các bệnh do Hib.</span><br>\r\n<h4 class=\"color-h\"> Phác đồ, lịch tiêm</h4><br>\r\n<span>Lịch tiêm 6 trong 1 Infanrix Hexa bao gồm 4 mũi:<br>\r\n\r\nMũi 1: lần tiêm đầu tiên.<br>\r\nMũi 2: 1 tháng sau mũi 1.<br>\r\nMũi 3: 1 tháng sau mũi 2.<br>\r\nMũi 4: cách mũi thứ 3 là 12 tháng (cách tối thiểu 6 tháng).</span><br>', 1),
(3, 'Bạch hầu, uốn ván, bại liệt (Hexaxim (6in1))	', 'Pháp', 1048000, 'infanrix-hexa.jpg', '<h4 class=\"color-h\">Nguồn gốc</h4><br>\r\n<span>Vắc xin Hexaxim được nghiên cứu và phát triển bởi tập đoàn hàng đầu thế giới về dược phẩm và chế phẩm sinh học Sanofi Pasteur (Pháp).</span><br>\r\n<h4 class=\"color-h\">Đường tiêm</h4><br>\r\n<span>Hexaxim được chỉ định tiêm bắp. Vị trí tiêm là mặt trước – ngoài của phần trên đùi và vùng cơ delta ở trẻ 15 tháng tuổi trở lên.</span><br>\r\n<h4 class=\"color-h\">Chống chỉ định</h4><br>\r\n<span>Tiền sử trước đây bị phản ứng phản vệ sau khi tiêm Hexaxim.<br>\r\nQuá mẫn với các hoạt chất hay bất cứ tá dược nào được liệt kê trong thành phần của vắc xin, với các dư lượng vết (glutaraldehyde (1), formaldehyde (2), neomycin, streptomycin, polymyxin B), với vắc xin ho gà bất kỳ, hoặc trước đây từng bị phản ứng quá mẫn sau khi tiêm Hexaxim hoặc sau khi tiêm vắc xin chứa các thành phần tương tự .<br>\r\nĐối tượng có bệnh lý não (tổn thương ở não) không rõ nguyên nhân, xảy ra trong vòng 7 ngày sau khi tiêm 1 vắc xin chứa thành phần ho gà (vắc xin ho gà vô bào hay nguyên bào). Trong trường hợp này, nên ngừng tiêm vắc xin ho gà và có thể tiếp tục với quá trình tiêm chủng với các vắc xin Bạch hầu, Uốn ván, Viêm gan B, Bại liệt và Hib.</span><br>\r\n<h4 class=\"color-h\">Đối tượng</h4><br>\r\n<span>Vắc xin Hexaxim được chỉ định tiêm cho trẻ từ 2 tháng đến 2 tuổi phòng 6 bệnh: Bạch hầu, Ho gà, Uốn ván, Bại liệt, Viêm gan B và các bệnh do Hib.</span><br>\r\n<h4 class=\"color-h\"> Phác đồ, lịch tiêm</h4><br>\r\n<span>Lịch tiêm 6 trong 1 Hexaxim bao gồm 4 mũi:\r\n\r\nMũi 1: lần tiêm đầu tiên<br>\r\nMũi 2: 1 tháng sau mũi 1<br>\r\nMũi 3: 1 tháng sau mũi 2<br>\r\nMũi 4: cách mũi thứ 3 là 12 tháng (cách tối thiểu 6 tháng).</span><br>', 1),
(4, 'Phòng tiêu chảy cấp do Rota virus (Rotateq)', 'Mỹ', 665000, 'MMR-II.jpg', '<h4 class=\"color-h\">Nguồn gốc</h4><br>\r\n<span>Vắc xin Rotateq được nghiên cứu và phát triển bởi tập đoàn hàng đầu thế giới về dược phẩm và chế phẩm sinh học Meck Sharp and Dohme (MSD) – Mỹ. </span><br>\r\n<h4 class=\"color-h\">Đường tiêm</h4><br>\r\n<span>Chỉ dùng đường uống. Không được tiêm.<br>\r\nNếu trẻ bị nôn trớ hoặc nhổ ra thì không được uống liều thay thế vì chưa có nghiên cứu lâm sàng cho việc uống thay thế. Cứ dùng liều tiếp theo trong lịch uống vắc xin.<br>\r\nVắc xin được đóng trong tuýp định liều có thể vặn nắp và cho uống luôn, không được pha loãng bằng nước hoặc sữa.</span><br>\r\n<h4 class=\"color-h\">Chống chỉ định</h4><br>\r\n<span>Không dùng vắc xin cho trẻ khi có dị ứng với bất kỳ thành phần nào trong vắc xin.<br>\r\nKhông dùng liều tiếp theo nếu trẻ có biểu hiện mẫn cảm với lần uống vắc xin Rotateq trước.<br>\r\nKhông dùng vắc xin Rotateq cho trẻ suy giảm miễn dịch kết hợp trầm trọng, vì đã có báo cáo về trường hợp viêm dạ dày ruột khi dùng vắc xin ở trẻ suy giảm miễn dịch kết hợp trầm trọng.</span><br>\r\n<h4 class=\"color-h\">Đối tượng</h4><br>\r\n<span>Vắc xin Rotateq được chỉ định chủng ngừa cho trẻ từ 6 tuần tuổi phòng tránh nguy cơ nhiễm virus Rota – nguyên nhân gây tiêu chảy cấp ở trẻ nhỏ.</span><br>\r\n<h4 class=\"color-h\"> Phác đồ, lịch tiêm</h4><br>\r\n<span>Vắc xin Rotateq (Mỹ) có lịch uống 3 liều, các liều cách nhau tối thiểu 4 tuần:\r\n\r\nLiều đầu tiên khi trẻ được 7.5 tuần đến tròn 12 tuần tuổi.<br>\r\nCần hoàn thành phác đồ muộn nhất đến trước 32 tuần.</span><br>', 1),
(5, 'Phòng tiêu chảy cấp do Rota virus (Rotarix)', 'Bỉ', 825000, 'prevenar.jpg', '<h4 class=\"color-h\">Nguồn gốc</h4><br>\r\n<span>Vắc xin Rotarix được nghiên cứu và phát triển bởi tập đoàn hàng đầu thế giới về dược phẩm và chế phẩm sinh học – GlaxoSmithKline (Bỉ).</span><br>\r\n<h4 class=\"color-h\">Đường tiêm</h4><br>\r\n<span>Chỉ dùng đường uống.<br>\r\nVắc xin Rotarix có khả năng bám dính rất tốt vì vậy sau khi uống nếu trẻ có nôn trớ thì cũng không cần uống liều khác. Tuy nhiên nếu xác định rằng đã bị nôn trớ phần lớn vắc xin thì có thể uống lại.</span><br>\r\n<h4 class=\"color-h\">Chống chỉ định</h4><br>\r\n<span>Không dùng vắc xin Rotarix cho trẻ đã quá mẫn cảm ở lần uống đầu tiên hoặc với bất kỳ thành phần nào của vắc xin.\r\nKhông dùng cho trẻ có dị tật bẩm sinh về đường tiêu hóa vì có thể dẫn đến lồng ruột (như túi thừa Mackel).</span><br>\r\n<h4 class=\"color-h\">Đối tượng</h4><br>\r\n<span>Vắc xin Rotarix được chỉ định chủng ngừa cho trẻ từ 6 tuần tuổi phòng tránh nguy cơ nhiễm virus Rota – nguyên nhân gây tiêu chảy cấp ở trẻ nhỏ.</span><br>\r\n<h4 class=\"color-h\"> Phác đồ, lịch tiêm</h4><br>\r\n<span>Vắc xin Rotarix (Bỉ) có lịch uống 2 liều liên tiếp cách nhau tối thiểu 4 tuần.<br>\r\n\r\nLiều đầu tiên có thể uống sớm lúc 6 tuần tuổi.<br>\r\nCần hoàn thành phác đồ muộn nhất đến trước 24 tuần (6 tháng tuổi).</span><br>', 1),
(6, 'Phòng tiêu chảy cấp do Rota virus (Rotavin-M1)', 'Việt Nam', 490000, 'SYNFLORIX.jpg', '<h4 class=\"color-h\">Nguồn gốc</h4><br>\r\n<span>Vắc xin Rotateq được nghiên cứu và phát triển bởi tập đoàn hàng đầu thế giới về dược phẩm và chế phẩm sinh học Meck Sharp and Dohme (MSD) – Mỹ. </span><br>\r\n<h4 class=\"color-h\">Đường tiêm</h4><br>\r\n<span>Chỉ dùng đường uống. Không được tiêm.<br>\r\nNếu trẻ bị nôn trớ hoặc nhổ ra thì không được uống liều thay thế vì chưa có nghiên cứu lâm sàng cho việc uống thay thế. Cứ dùng liều tiếp theo trong lịch uống vắc xin.<br>\r\nVắc xin được đóng trong tuýp định liều có thể vặn nắp và cho uống luôn, không được pha loãng bằng nước hoặc sữa.</span><br>\r\n<h4 class=\"color-h\">Chống chỉ định</h4><br>\r\n<span>Không dùng vắc xin cho trẻ khi có dị ứng với bất kỳ thành phần nào trong vắc xin.<br>\r\nKhông dùng liều tiếp theo nếu trẻ có biểu hiện mẫn cảm với lần uống vắc xin Rotateq trước.<br>\r\nKhông dùng vắc xin Rotateq cho trẻ suy giảm miễn dịch kết hợp trầm trọng, vì đã có báo cáo về trường hợp viêm dạ dày ruột khi dùng vắc xin ở trẻ suy giảm miễn dịch kết hợp trầm trọng.</span><br>\r\n<h4 class=\"color-h\">Đối tượng</h4><br>\r\n<span>Vắc xin Rotateq được chỉ định chủng ngừa cho trẻ từ 6 tuần tuổi phòng tránh nguy cơ nhiễm virus Rota – nguyên nhân gây tiêu chảy cấp ở trẻ nhỏ.</span><br>\r\n<h4 class=\"color-h\"> Phác đồ, lịch tiêm</h4><br>\r\n<span>Vắc xin Rotateq (Mỹ) có lịch uống 3 liều, các liều cách nhau tối thiểu 4 tuần:\r\n\r\nLiều đầu tiên khi trẻ được 7.5 tuần đến tròn 12 tuần tuổi.<br>\r\nCần hoàn thành phác đồ muộn nhất đến trước 32 tuần.</span><br>', 1),
(8, 'Các bệnh do phế cầu (Prevenar 13)', 'Bỉ', 1290000, 'vaxigrip-tetra.jpg', '<h4 class=\"color-h\">Nguồn gốc</h4><br>\r\n<span>Vắc xin Prevenar-13 được nghiên cứu và phát triển bởi tập đoàn hàng đầu thế giới về dược phẩm và chế phẩm sinh học – Pfizer (Mỹ). Prevenar-13 được sản xuất tại Bỉ.</span><br>\r\n<h4 class=\"color-h\">Đường tiêm</h4><br>\r\n<span>Vắc xin Prevenar-13 được chỉ định tiêm bắp (vùng cơ delta) với liều 0.5ml</span><br>\r\n<h4 class=\"color-h\">Chống chỉ định</h4><br>\r\n<span>Không dùng vắc xin Prevenar-13 trong thai kỳ.<br>\r\nKhông tiêm vắc xin Prevenar-13 với người quá mẫn cảm với thành phần trong vắc xin hoặc với độc tố bạch hầu.<br>\r\nKhông tiêm vắc xin Prevenar-13 ở bệnh nhân giảm tiểu cầu hoặc bất kỳ rối loạn đông máu nào.</span><br>\r\n<h4 class=\"color-h\">Đối tượng</h4><br>\r\n<span>Vắc xin Prevenar-13 (Bỉ) được chỉ định cho trẻ từ 2 tháng tuổi trở lên và người lớn.</span><br>\r\n<h4 class=\"color-h\"> Phác đồ, lịch tiêm</h4><br>\r\n<span>Từ 6 tuần tuổi đến dưới 7 tháng tuổi:  Lịch tiêm gồm 4 mũi:<br>\r\n\r\nMũi 1: lần tiêm đầu tiên.<br>\r\nMũi 2: cách mũi 1 là 1 tháng.<br>\r\nMũi 3: cách mũi 2 là 1 tháng.<br>\r\nMũi 4 (mũi nhắc lại): sau 8 tháng kể từ mũi thứ 3<br>\r\n(Mũi 4 cách mũi 3 tối thiểu 2 tháng, khi trẻ 11-15 tháng tuổi).<br>\r\n\r\nTừ 7 tháng đến dưới 12 tháng tuổi (chưa từng được tiêm phòng vắc xin trước đó): <br> Lịch tiêm gồm 3 mũi:<br>\r\n\r\nMũi 1: lần tiêm đầu tiên.<br>\r\nMũi 2: cách mũi 1 là 1 tháng.<br>\r\nMũi 3 (mũi nhắc lại): cách mũi 2 là 6 tháng.<br>\r\n(Mũi 3 cách mũi 2 tối thiểu 2 tháng, khi trẻ trên 1 tuổi)<br>\r\n\r\nTừ 12 tháng đến dưới 24 tháng tuổi (chưa từng được tiêm phòng vắc xin trước đó):  Lịch tiêm gồm 2 mũi:<br>\r\n\r\nMũi 1: lần tiêm đầu tiên.<br>\r\nMũi 2: cách mũi 1 là 2 tháng.<br>\r\nTừ 24 tháng đến người lớn (chưa từng được tiêm phòng vắc xin trước đó hoặc chưa từng tiêm vắc xin Pneumo 23):<br>  Lịch tiêm 01 mũi.</span><br>', 1),
(9, 'Lao (BCG (lọ 1ml))', 'Việt Nam', 125000, 'vacxin-MVVac.jpg', '', 1),
(10, 'Lao (BCG (liều 0,1ml))', 'Việt Nam', 70000, '', '', 1),
(11, 'Viêm gan B người lớn (Engerix B 1ml)', 'Bỉ', 235000, '', '', 1),
(12, 'Viêm gan B người lớn (Euvax B 1ml)', 'Hàn Quốc', 170000, '', '', 1),
(13, 'Viêm gan B người lớn (Heberbiovac 1ml)', 'Cu Ba', 200000, '', '', 1),
(14, 'Viêm gan B trẻ em (Euvax B 0.5ml)', 'Hàn Quốc', 116000, '', '', 1),
(15, 'Viêm gan B trẻ em (Engerix B 0,5ml)', 'Bỉ', 190000, '', '', 1),
(16, 'Viêm gan B trẻ em (Heberbiovac 0,5ml)', 'Cu Ba', 178000, '', '', 1),
(17, 'Viêm màng não mô cầu BC (VA-Mengoc-BC)', 'Cu Ba', 295000, '', '', 1),
(18, 'Viêm màng não mô cầu ACYW (Menactra)', 'Mỹ', 1260000, '', '', 1),
(19, 'Sởi (MVVac (Lọ 5ml))', 'Việt Nam', 315000, '', '', 1),
(20, 'Sởi (MVVac (Liều 0.5ml))', 'Việt Nam', 180000, '', '', 1),
(21, 'Sởi – Quai bị – Rubella (MMR II (3 in 1))', 'Mỹ', 305000, '', '', 1),
(22, 'Sởi – Quai bị – Rubella (Priorix)', 'Bỉ', 415000, '', '', 1),
(23, 'Sởi – Quai bị – Rubella (MMR)', 'Ấn Độ', 205000, '', '', 1),
(24, 'Thủy đậu (Varivax)', 'Mỹ', 915000, '', '', 1),
(25, 'Thủy đậu (Varilrix)', 'Bỉ', 945000, '', '', 1),
(26, 'Thủy đậu (Varicella)', 'Hàn Quốc', 700000, '', '', 1),
(27, 'Cúm (Vaxigrip Tetra 0.5ml)', 'Pháp', 356000, '', '', 1),
(28, 'Cúm (Influvac tetra 0,5ml)', 'Hà Lan', 356000, '', '', 1),
(29, 'Cúm (GCFlu Quadrivalent 0,5ml)', 'Hàn Quốc', 345000, '', '', 1),
(30, 'Ung thư cổ tử cung và sùi mào gà (Gardasil)', 'Mỹ', 1790000, '', '', 1),
(31, 'Ung thư cổ tử cung và sùi mào gà (Gardasil 9)', 'Mỹ', 2950000, '', '', 1),
(37, 'Bạch hầu, uốn ván, bại liệt (Pentaxim)', 'Pháp', 100000, NULL, '', 1),
(38, 'Bạch hầu, uốn ván, bại liệt (Pentaxim)', 'Pháp', 100000, NULL, '', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `benh_hoc`
--
ALTER TABLE `benh_hoc`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `benh_hoc`
--
ALTER TABLE `benh_hoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_khach_hang`
--
ALTER TABLE `chi_tiet_khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `co_so_tiem_chung`
--
ALTER TABLE `co_so_tiem_chung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dang_ky_tiem`
--
ALTER TABLE `dang_ky_tiem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
