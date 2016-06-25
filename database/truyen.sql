-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 06:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `truyen`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(20) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `account_user` varchar(30) CHARACTER SET utf8 NOT NULL,
  `account_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `account_user`, `account_password`) VALUES
(1, 'Nguyễn Toàn', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `gopy`
--

CREATE TABLE IF NOT EXISTS `gopy` (
  `gopy_id` int(100) NOT NULL AUTO_INCREMENT,
  `gopy_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `gopy_category` varchar(50) CHARACTER SET utf8 NOT NULL,
  `gopy_content` varchar(500) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`gopy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE IF NOT EXISTS `theloai` (
  `stt` int(100) NOT NULL AUTO_INCREMENT,
  `theloai_id` text CHARACTER SET utf8 NOT NULL,
  `theloai_name` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`stt`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`stt`, `theloai_id`, `theloai_name`) VALUES
(1, 'truyencuoi', 'Truyện cười'),
(2, 'truyenkiemhiep', 'Truyện kiếm hiệp'),
(3, 'truyenngan', 'Truyện ngắn'),
(4, 'truyenteen', 'Truyện teen'),
(5, 'truyentrinhtham', 'Truyện trinh thám');

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE IF NOT EXISTS `truyen` (
  `truyen_id` int(11) NOT NULL AUTO_INCREMENT,
  `truyen_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `truyen_content` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `truyen_category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `truyen_images` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `truyen_status` tinyint(1) NOT NULL,
  `truyen_author` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`truyen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`truyen_id`, `truyen_name`, `truyen_content`, `truyen_category`, `truyen_images`, `truyen_status`, `truyen_author`) VALUES
(1, 'Bí kíp võ công', 'Có 1 anh chàng một hôm đang đi nhặt lá đá ống bơ thì nhặt được 1 quyển bí kíp.<br>\nNghi là võ học thượng thừa nên anh ta giấu mang về nhà đọc.<br>\nTrang 1 : Miêu tả về võ công. Có thể hô mưa gọi gió. Độc bộ thiên hạ. Đưa người ta lên đỉnh cao của võ học.<br>\nTrang 2 : Cần phải tự cung mới có thể luyện …\n<br>\nSau một hồi đắn đo suy nghĩ. Anh ta hạ quyết tâm vung đao tự cung.', 'truyencuoi', 'images/bikipvocong.jpg', 1, 'Sưu tầm'),
(2, 'Ép Yêu', 'Trong giới thượng lưu thì thường là nối nghề từ đời này đến đời sau, Gia đình giầu có thì mãi giầu có. Nhưng không chỉ có giầu thôi đâu mà còn có tài nữa, đúng là giống đời, cứ nghĩ con người được cái này mất cái kia, nhưng nhìn kỹ lại thì quả thật cũng không hẳn như thế...<br>\r\nGia đình họ Thượng Quan của người Trung Hoa thì không ai là không biết đến. Đã mười mấy đới cha truyền con nối, làm buôn bán lớn, công ty này công ty kia, nhưng cái chính của gia đình này là buôn bán Bất Động Sản. Thời Tổ tiên Họ Thượng Quan đã là 1 thời lẫy lừng vì nhiều tiền và nhiều đất, nhưng thời đó họ thực sự chưa có nghĩ ra để mà đẻ thêm ra gấp trăm lần số đó, cho đến đời thứ 15 của nhà Họ Thượng Quan, là một người con Cả của gia đình được tên gọi là Thượng Quan Lưu, ông đã tự mình buôn bán và đầu tư vào những mảnh đất lớn nhất tại Đài Loan, Hông Kông và cả Trung Quốc cho đến nay thì quả thật những mảnh đất mà ông có đã tăng lên đến chóng mặt và những mảnh đất đó được bán hay là được cho thêu với những cái giá thật kinh khủng.<br>\r\nNhưng thực sự cái này tôi phải công nhận một điều là dân gian ta nói đúng "nhiều tiền thì nhiều vợ". Quả thật là như vậy, Ông Thượng Lưu thực sự có tới 5 người vợ và không biết bao nhiêu là tình nhân nữa cả. Nhưng với cái tiền ông hàng ngày kiếm được cũng có thể nuôi nổi hẳn cả một làng, cả một xóm ăn no, mặc đẹp tiền tiêu không hết.<br>\r\nÔng sống cùng với 5 người vợ và con cháu trong một Vila cổ điển kiểu Nhật thật phải nói là Khủng khiếp. Kín cổng cao tường, có tới đến gần 100 người làm trong đó. Sống trong sự giầu sang và sung sướng, ông có tới 7 người con, 3 trai và 4 gái, các con ông thì có tới 3 người đi theo nghề của ông, còn lại thì tự làm những nghề mình yêu thích.<br>', 'truyenteen', 'images/ep-yeu.jpg', 1, 'Sưu tầm'),
(3, 'Hoa Thiên Cốt', '“Tình yêu cao thượng? Đó đơn giản chỉ là lời đầu môi chót lưỡi? Hay là một thứ phải hiến dâng hạnh phúc của đời mình, hy sinh tất cả mọi thứ mới có được? Đời này ta sống vì Trường Lưu, sống vì tiên giới, sống vì chúng sinh, nhưng chưa từng làm gì được cho nàng ấy. Ta không phụ Trường Lưu, không phụ Lục giới, không phụ trời đất, nhưng cuối cùng lại phụ nàng ấy, phụ cả bản thân ta.”\r\n<br><br>\r\n“Chàng là người dịu dàng nhất thế gian, cũng là kẻ vô tình nhất thiên địa. Ta cố gắng suốt bao năm cũng không thể hiểu được chàng, nhưng giờ thì đã không cần và cũng không muốn hiểu nữa rồi, chết hay sống, chàng đang nằm trong tay ta, ta muốn thế nào cũng được.”\r\n<br><br>\r\n“Ta không có sư phụ, không có bạn bè, không có người yêu, không có con cái, trước kia ta tưởng rằng ta có cả thiên hạ, nhưng hóa ra tất cả đều là giả. Người yêu ta, vì ta mà chết, người ta yêu, một mực muốn ta chết. Người ta tin, phản bội ta, người ta nương tựa, ruồng bỏ ta. Ta không cần gì, cũng chẳng cầu chi, chỉ muốn sống thật đơn giản, nhưng ông trời bức ta, chàng cũng bức ta! Chàng tưởng rằng đến bây giờ ta còn có thể quay đầu lại sao?”\r\n<br><br>\r\n“Hoa Thiên Cốt bỗng nhớ lại lần đầu tiên gặp người ở Dao Trì năm ấy, hoa nở như biển, gió cuộn như sóng, Bạch Tử Họa bước từng bước về phía nàng, từng đóa sen nở rộ đằng sau gót người. Còn nàng, lạc cả hồn phách.”\r\n<br><br>\r\nTrong tay người không kiếm nhưng lại như có kiếm. Ảnh ảo dưới nước càng tỏa sáng rực rỡ, chúng bay lên vẩn quanh Bạch Tử Họa. Thanh kiếm màu bạc như có như không trong tay người trên chỉ trời dưới chỉ đất. Bỗng nhiên tất cả nước sông đều ngừng chảy, con sóng cũng đọng lại thành hình, rồi nháy mắt dựng thẳng lên dưới chân người, dâng thành ngọn sóng lớn, Bạch Tử Họa chỉ dùng kiếm khí, con sóng lập tức tan thành từng mảnh nhỏ.\r\n<br><br>\r\nBao nhiêu năm sau, Hoa Thiên Cốt thường nhớ lại hình ảnh sư phụ đứng trên dòng sông múa kiếm dưới trăng cho nàng xem, đó là cảnh đẹp nhất mộng ảo nhất trong cuộc đời nàng. Nếu có thể, nàng nguyện không tiếc sinh mạng trao đổi, chỉ để một lần nữa quay trở lại làm hòn đá nhỏ bên cạnh người.', 'truyenkiemhiep', 'images/hoa-thien-cot.jpg', 1, 'Chưa rõ'),
(4, 'Xin lỗi, anh yêu em', 'Năm đó, cậu ta 17 tuổi, còn cô gái 16 tuổi. Họ cùng học chung một ngôi trường, cùng một lớp học.\r\n<br><br>\r\nCậu là một anh chàng phá phách, suốt ngày nhàn rỗi. Cô là phần tử ham học trong lớp, thành tích ưu tú, thi cử luôn xếp vào top 5 người. Cậu ta cũng khá đẹp trai, tuy nhiên học tập không tốt lắm, nhưng lại rất thông minh. Cô ấy rất đáng yêu, nhiều người mến, trong lớp lại có rất nhiều người để ý.\r\nHọ là bạn bè, nhưng cậu ta thích cô gái, cậu không hiểu được cảm giác của mình đối với cô ấy, chỉ là bất chợt muốn nhìn thấy cô , vừa mới gặp đây thôi, nhưng lại không ngừng nghĩ về cô; Thường vô duyên vô cớ đăng nhập vào QQ, nhìn chăm chăm vào cái biểu tượng QQ đang off của cô gái, rồi nhấn nút thoát; Bắt đầu nhìn thấy cô gái nhưng lại không dám bắt chuyện hoặc không biết nên nói gì nữa;\r\n<br><br>\r\nCô gái buồn, cậu ta cũng sẽ buồn; Cô gái vui, cậu ta cũng vì thế mà vui. không lẽ cậu đã yêu cô gái đó rồi ừ...\r\nCô gái phát hiện hành động khác thường của cậu trai , nhưng cô không hiểu cậu ấy đang nghĩ gì, cứ ngỡ nhà của cậu trai xảy ra chuyện gì mới tỏ ra như thế, qua một thời gian thì sẽ khác thôi...\r\n<br><br>\r\nCàng về lâu, cậu trai càng phát hiện mình đã yêu cô gái, vào học không nhịn được phải quay đầu lại nhìn cô gái, hầu như nó đã thành thói quen trong cuộc sống của cậu vậy. Cô gái vẫn không hiểu được, cứ mỗi lần hỏi chuyện cậu, cậu ta chỉ hướng mắt ra ngoài nhìn xa xa, đáy mắt thoáng hiện vẻ thất vọng, trong lòng cứ mãi âm ỉ vô số lần nói lên câu “tôi thích em” , tiếc rằng cô gái không nghe được.\r\n<br><br>\r\nVào một đêm, cậu ta và một người bạn trong lớp đang gọi điện thoại, vô tình biết được số điện thoại của cô gái, cậu ta rất hứng khởi, nói qua loa vài câu rồi cúp máy ngay, ngay sau đó liền gọi cho cô ấy...', 'truyenngan', 'images/xin-loi-anh-yeu-em.jpg', 0, 'Sưu tầm'),
(5, 'Đề thi đẫm máu', 'Mùa xuân ở thành phố J nóng nực bức bối vô cùng. Mặc dù mầm non còn chưa nhú ra trên các cành cây, nhưng nhiệt độ đã lên đến 17, 18 độ. Thái Vĩ đang ngồi trong xe Jeep lao nhanh trên đường phố, bực bội cởi cúc áo.<br>\r\nAnh rất buồn bực, nhưng không phải chỉ vì cái thời tiết xuân oi ả này. Là một người cảnh sát, Thái Vĩ đang gặp phải một vụ án khó khăn nhất trong 10 năm làm nghề cảnh sát của mình.\r\nNgày 14 tháng 3 năm 2002, cư dân Trần Mỗ (nữ, dân tộc Hán, 31 tuổi) sống tại phòng 402, tòa lầu số 32, tiểu khu Minh Châu, số 83 đường Thái Bắc, khu Hồng Viên, thành phố J đã bị giết ngay trong căn hộ của mình. Theo kết quả xét nghiệm tử thi, thời gian tử vong khoảng từ 14 giờ - 15 giờ, nguyên nhân tử vong là do nghẹt thở. Trên cổ nạn nhân phát hiện ra hai vết hằn bị bóp cổ, có thể khẳng định, nạn nhân đã bị hung thủ dùng tay bóp chặt cổ cho đến chết. Qua điều tra hiện trường, nhận thấy, trong phòng không có dấu vết bị lục lọi, tài sản cũng không bị mất, bước đầu có thể loại trừ khả năng đột nhập giết người cướp của. Phần thân trên của nạn nhân để trần, thân dưới trang phục ngay ngắn, không hề có dấu vết bị xâm hại tình dục, cũng không có vẻ là đột nhập cưỡng dâm giết người. Điều đáng kinh ngạc là, nạn nhân sau khi chết, bị hung thủ mổ bụng, con dao dùng để mổ được để lại hiện trường. Chồng nạn nhân đã xác nhận, đây là con dao thái trong nhà nạn nhân.<br>\r\nHiện trường tang thương, không nỡ nhìn, trên sàn là nội tạng và máu của nạn nhân. Cảnh sát tìm thấy một chiếc cốc trong bếp, qua xét nghiệm, xác định đây là thứ hỗn hợp giữa sữa tươi và máu của nạn nhân.<br>\r\nĐiều này không thể không khiến chúng ta liên tưởng đến con quái vật trong truyền thuyết - quỷ hút máu.<br>\r\nTrong khoảng thời gian hơn một tháng sau đó, tại thành phố J lại liên tiếp xảy ra hai vụ án đột nhập vào nhà giết người, nạn nhân đều là những cô gái ở độ tuổi 25 - 35. Nạn nhân đều bị mổ bụng, đồng thời ở hiện trường, đều phát hiện ra chất hỗn hợp giữa máu của nạn nhân và những chất khác.\r\nSở Công an thành phố thành lập một tổ chuyên án phụ trách việc phá vụ án này, nhưng gần một tuần lễ trôi qua, việc phá án không hề có chút tiến triển. Đúng lúc tổ chuyên án đang vò đầu bứt tai lo lắng, thì Đinh Thụ Thành - một cảnh sát từ thành phố C đến thành phố J công tác đưa ra một đề nghị khiến tất cả mọi người đều tròn mắt kinh ngạc: đi tìm một cậu sinh viên đang học thạc sĩ ngành Tội phạm học tại một trường đại học trong thành phố J.<br>\r\nThái Vĩ - với vai trò là người phụ trách tổ chuyên án, lúc đầu còn tưởng anh ta nói đùa, nhưng Đinh Thụ Thành đã nghiêm túc kể lại cho Thái Vĩ nghe một câu chuyện như sau.<br>\r\nMùa hè năm 2001, trong thành phố C liên tiếp xảy ra bốn vụ cưỡng hiếp giết người. Bốn nạn nhân đều là nhân viên công sở có độ tuổi từ 25 - 30. Sau khi cưỡng hiếp nạn nhân, hung thủ dùng sợi dây thừng thắt cổ nạn nhân cho đến chết. Nơi xảy ra án mạng là trên sân thượng bốn tòa nhà cao ốc đang xây dựng trong thành phố C. Lúc đó, cấp trên của Đinh Thụ Thành là Trạm trưởng Trạm An ninh thành phố Hình Chí Sâm vừa mới được thăng chức lên làm Phó Sở Công an thành phố C. Quan chức mới nhậm chức, muốn lập công, Phó sở Hình đã tiết lộ một chút tình tiết vụ án cho giới truyền thông, đồng thời, trên tivi, ông còn đảm bảo với nhân dân thành phố, sẽ phá xong vụ án trong vòng nửa tháng. Hai hôm sau, có một bức thư do nhân dân gửi đến được đặt ngay ngắn trên bàn làm việc của tổ chuyên án. Trong thư nói, hung thủ là một kẻ biến thái có tâm lý bệnh hoạn, bởi vì không thể gây dựng mối quan hệ bình thường với nữ giới, nên đã thông qua việc cưỡng hiếp giết người để phát tiết dục vọng của mình. Hơn nữa, còn đoán định hung thủ không quá 30 tuổi. Tổ chuyên án ban đầu cũng chỉ nghĩ rằng, đây chẳng qua chỉ là một liên tưởng bột phát của một người say mê tiểu thuyết trinh thám, nên không để tâm đến. Phó sở Hình sau khi nghe về việc này, lại thấy rất hứng thú, sai người đi điều tra thông tin về người gửi thư. Khi ông hay tin, người viết thư tên Phương Mộc, là sinh viên sắp tốt nghiệp đại học, thì rất phấn khởi, lập tức sai người gọi cậu ta đến Sở Công an thành phố. Hai người trò chuyện khoảng nửa tiếng trong phòng làm việc. Phó sở Hình còn tự mình lái xe đưa Phương Mộc đến lần lượt từng hiện trường bốn vụ án. Sau khi trở về, lại lấy toàn bộ hồ sơ vụ án vào phòng làm việc để Phương Mộc nghiên cứu thật tỉ mỉ những tài liệu đó. Vào một đêm (kết quả xét nghiệm tử thi cho thấy, thời gian gây án thường xảy ra lúc 10 giờ - 11 giờ đêm), Phương Mộc đi đến hiện trường một vụ án, lần này Đinh Thụ Thành cũng đi cùng cậu. Cậu trai trẻ đứng trên sân thượng tòa cao ốc (đây cũng chính là tòa kiến trúc cao nhất trong hiện trường các vụ án) thật lâu, cuối cùng thốt ra một câu khiến Đinh Thụ Thành khắc ghi mãi.<br>', 'truyentrinhtham', 'images/de-thi-dam-mau.jpg', 1, 'Lôi Mễ'),
(7, 'truyen', 'â', 'truyencuoi', 'images/test.jpg', 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
