-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Ara 2017, 13:28:51
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `workman`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_role` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `last_date` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_role`, `last_date`) VALUES
(1, 'Enes', '202cb962ac59075b964b07152d234b70', '1', '2017-12-03 09:44:35'),
(2, 'Menes', '202cb962ac59075b964b07152d234b70', '0', '2017-12-03 09:44:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `config`
--

CREATE TABLE `config` (
  `config_id` int(11) NOT NULL,
  `config_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `config_phone` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `config_title` varchar(70) COLLATE utf8_turkish_ci NOT NULL,
  `config_desc` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `config_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `config_face` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `config_twit` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `config_footer` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `config_address` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `config_email` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `config_fax` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `config_author` varchar(25) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `config`
--

INSERT INTO `config` (`config_id`, `config_logo`, `config_phone`, `config_title`, `config_desc`, `config_keywords`, `config_face`, `config_twit`, `config_footer`, `config_address`, `config_email`, `config_fax`, `config_author`) VALUES
(0, 'images/logo.png', '0840 8410 180 76', 'Workman', 'My foreman said You are workman, stay be workman ! Put on your work clothes.', 'work,workman,handyman,php website', 'http://www.facebook.com', 'http://www.twitter.com', 'Copyright © Domain Name All Rights Reserved | Design by TemplateMonster.com', 'New York City, Manhattan,180 E 93rd St', 'info@workman.com', '0850 840 80 77', 'Enes Işkın');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `menu_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_url`) VALUES
(1, 'Services', 'services.php'),
(2, 'FAQ', 'faq.php'),
(3, 'Prices', 'prices.php'),
(4, 'Our Staff', 'ourstaff.php'),
(10, 'Contacts', 'contacts.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_date` datetime NOT NULL,
  `page_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `page_content` text COLLATE utf8_turkish_ci NOT NULL,
  `page_no` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0',
  `page_home` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`page_id`, `page_date`, `page_name`, `page_content`, `page_no`, `page_home`) VALUES
(3, '2017-12-01 12:38:00', 'Module 1', '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia\'daki Hampden-Sydney College\'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan \'consectetur\' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia\'daki Hampden-Sydney College\'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan \'consectetur\' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.</p>\n', '3', '1'),
(2, '2017-12-01 13:22:00', 'Module 2', '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n', '1', '1'),
(4, '2017-12-01 12:38:00', 'Module 3', '<p>Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir.</p>\r\n', '2', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `services_id` int(11) NOT NULL,
  `services_date` datetime NOT NULL,
  `services_name` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `services_detail` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `services_path` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `services_hit` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`services_id`, `services_date`, `services_name`, `services_detail`, `services_path`, `services_hit`) VALUES
(5, '2017-12-02 16:18:00', '8Met ut perspiciatis unde omnis iste natus', '<p>Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\n', 'uploads/service_image/page2-img1.jpg', '5'),
(6, '2017-12-02 16:18:00', '7Set ut perspiciatis unde omnis iste natus', '<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatemt enim ad minima veniam, quis nostrum exercitationem.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\n', 'uploads/service_image/banner-1.png', '8'),
(7, '2017-12-02 16:18:00', '6Met ut perspiciatis unde omnis iste natus', '<p>Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\r\n', 'uploads/service_image/page2-img1.jpg', '5'),
(8, '2017-12-02 16:18:00', '5Set ut perspiciatis unde omnis iste natus', '<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatemt enim ad minima veniam, quis nostrum exercitationem.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\r\n', 'uploads/service_image/banner-1.png', '8'),
(9, '2017-12-02 16:18:00', '4Met ut perspiciatis unde omnis iste natus', '<p>Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\r\n', 'uploads/service_image/page2-img1.jpg', '5'),
(10, '2017-12-02 16:18:00', '3Set ut perspiciatis unde omnis iste natus', '<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatemt enim ad minima veniam, quis nostrum exercitationem.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\r\n', 'uploads/service_image/banner-1.png', '8'),
(11, '2017-12-02 16:18:00', '2Met ut perspiciatis unde omnis iste natus', '<p>Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\r\n', 'uploads/service_image/page2-img1.jpg', '5'),
(12, '2017-12-02 16:18:00', '1Set ut perspiciatis unde omnis iste natus', '<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatemt enim ad minima veniam, quis nostrum exercitationem.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.Merror sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>\r\n', 'uploads/service_image/banner-1.png', '8');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `slider_url` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slider_path` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_no` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '11'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_url`, `slider_path`, `slider_no`) VALUES
(19, 'Slider 2', 'http://', 'uploads/Slider2.jpg', '2'),
(12, 'Slider1', 'http://', 'uploads/Slider1.jpg', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`config_id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
