-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 26, 2013 at 07:57 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `winter_walking`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `model` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `upper_style` varchar(50) NOT NULL,
  `upper_material` varchar(50) NOT NULL,
  `traction` varchar(50) NOT NULL,
  `feature_note` varchar(50) NOT NULL,
  `traction_versatility` varchar(11) NOT NULL,
  `easyonoff_security` varchar(9) NOT NULL,
  `economical_indstrength` varchar(11) NOT NULL,
  `protectionwarmth_nocoverage` varchar(16) NOT NULL,
  `ice` varchar(5) NOT NULL,
  `snow` varchar(5) NOT NULL,
  `oil` varchar(5) NOT NULL,
  `fats` varchar(5) NOT NULL,
  `soaps` varchar(5) NOT NULL,
  `chemicals` varchar(5) NOT NULL,
  `liquids` varchar(5) NOT NULL,
  `mud` varchar(5) NOT NULL,
  `indoor` varchar(5) NOT NULL,
  `outdoor` varchar(5) NOT NULL,
  `driving` varchar(5) NOT NULL,
  `gritted` tinyint(1) NOT NULL,
  `spiked` tinyint(1) NOT NULL,
  `safer-driving` tinyint(1) NOT NULL,
  `non-sparking` tinyint(1) NOT NULL,
  `defined-heel` tinyint(1) NOT NULL,
  `extreme-ice` tinyint(1) NOT NULL,
  `outdoor-only` tinyint(1) NOT NULL,
  `indoor-outdoor` tinyint(1) NOT NULL,
  `indoor-only` tinyint(1) NOT NULL,
  `safer-indoors` tinyint(1) NOT NULL,
  `low-cut` tinyint(1) NOT NULL,
  `mid-calf` tinyint(1) NOT NULL,
  `knee-high` tinyint(1) NOT NULL,
  `insulated` tinyint(1) NOT NULL,
  `stripping` tinyint(1) NOT NULL,
  `oil-grease` tinyint(1) NOT NULL,
  `food-processing` tinyint(1) NOT NULL,
  `over-sock` tinyint(1) NOT NULL,
  `ice-snow` tinyint(1) NOT NULL,
  `sling-device` tinyint(1) NOT NULL,
  `steel-toe` tinyint(1) NOT NULL,
  `xsmodel` varchar(255) NOT NULL,
  `smodel` varchar(255) NOT NULL,
  `mmodel` varchar(255) NOT NULL,
  `lmodel` varchar(255) NOT NULL,
  `xlmodel` varchar(255) NOT NULL,
  `xxlmodel` varchar(255) NOT NULL,
  `xxxlmodel` varchar(255) NOT NULL,
  `xxxxlmodel` varchar(255) NOT NULL,
  `XS` tinyint(1) NOT NULL,
  `S` tinyint(1) NOT NULL,
  `M` tinyint(1) NOT NULL,
  `L` tinyint(1) NOT NULL,
  `XL` tinyint(1) NOT NULL,
  `XXL` tinyint(1) NOT NULL,
  `XXXL` tinyint(1) NOT NULL,
  `XXXXL` tinyint(1) NOT NULL,
  `XSM` varchar(25) NOT NULL,
  `SM` varchar(25) NOT NULL,
  `MM` varchar(25) NOT NULL,
  `LM` varchar(25) NOT NULL,
  `XLM` varchar(25) NOT NULL,
  `XXLM` varchar(25) NOT NULL,
  `XXXLM` varchar(25) NOT NULL,
  `XXXXLM` varchar(25) NOT NULL,
  `XSW` varchar(25) NOT NULL,
  `SW` varchar(25) NOT NULL,
  `MW` varchar(25) NOT NULL,
  `LW` varchar(25) NOT NULL,
  `XLW` varchar(25) NOT NULL,
  `XXLW` varchar(25) NOT NULL,
  `XXXLW` varchar(25) NOT NULL,
  `XXXXLW` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `features` text NOT NULL,
  `img_url` text NOT NULL,
  `img_url1` text NOT NULL,
  `img_url2` text NOT NULL,
  `img_url3` text NOT NULL,
  `img_url4` text NOT NULL,
  `img_url5` text NOT NULL,
  `img_url6` text NOT NULL,
  `img_url7` text NOT NULL,
  `img_url8` text NOT NULL,
  `featured` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `model`, `name`, `category`, `upper_style`, `upper_material`, `traction`, `feature_note`, `traction_versatility`, `easyonoff_security`, `economical_indstrength`, `protectionwarmth_nocoverage`, `ice`, `snow`, `oil`, `fats`, `soaps`, `chemicals`, `liquids`, `mud`, `indoor`, `outdoor`, `driving`, `gritted`, `spiked`, `safer-driving`, `non-sparking`, `defined-heel`, `extreme-ice`, `outdoor-only`, `indoor-outdoor`, `indoor-only`, `safer-indoors`, `low-cut`, `mid-calf`, `knee-high`, `insulated`, `stripping`, `oil-grease`, `food-processing`, `over-sock`, `ice-snow`, `sling-device`, `steel-toe`, `xsmodel`, `smodel`, `mmodel`, `lmodel`, `xlmodel`, `xxlmodel`, `xxxlmodel`, `xxxxlmodel`, `XS`, `S`, `M`, `L`, `XL`, `XXL`, `XXXL`, `XXXXL`, `XSM`, `SM`, `MM`, `LM`, `XLM`, `XXLM`, `XXXLM`, `XXXXLM`, `XSW`, `SW`, `MW`, `LW`, `XLW`, `XXLW`, `XXXLW`, `XXXXLW`, `description`, `features`, `img_url`, `img_url1`, `img_url2`, `img_url3`, `img_url4`, `img_url5`, `img_url6`, `img_url7`, `img_url8`, `featured`) VALUES
(1, 'JD510', 'Spare Spike&#153;', 'lightweight', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Replaceable Studs', 'traction', 'easyonoff', 'economical', 'nocoverage', 'great', 'great', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'good', 'no', 'great', 'good', 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 'JD510&ndash;XS', 'JD510&ndash;S', 'JD510&ndash;M', 'JD510&ndash;L', 'JD510&ndash;XL', 'JD510&ndash;XXL', '', '', 1, 1, 1, 1, 1, 1, 0, 0, '---', '5 - 6 1/2', '7 - 8 1/2', '9 - 10 1/2', '11 - 13 1/2', '14+', '', '', '4 1/2 - 6 1/2', '7 - 8 1/2', '9 - 10 1/2', '11+', '---', '---', '', '', '<p>SPARE SPIKE&#153; ice cleat is a light weight and compact ice and snow walking device that fits easily and conveniently over all types of shoes and boots.  It is extremely easy to use and can be put on or taken off in under 30 seconds.  Weighing in at less than 4 ounces per foot, the SPARE SPIKE&#153; is virtually inconspicuous on the user&#39;s foot or when carried in a pocket.</p>\n<br>\n<p>The traction on SPARE SPIKE&#153; ice cleats comes from 16 tungsten carbide studs underfoot which enable employees to walk confidently in winter conditions.  The spikes on the SPARE SPIKE&#153; are replaceable and can be done so without any special tools.  Each pair of SPARE SPIKE&#153; features a patent pending &quot;spare cleat&quot; built in to the upper portion of the toe area, offering a quick replacement part for a suddenly missing cleat.</p>  \n<br>\n<p>The SPARE SPIKE&#153; features dual rear pull-tabs for easy on and off and an aggressively treaded sole that is designed to provide additional traction in thicker snow conditions.  The SPARE SPIKE&#153 is sized from an XS up to an XXL and is guaranteed to fit every one of your employees.</p>\n<br>\n<p style="font-style:italic; font-weight:bold; color:#37a0d0">Choose SPARE SPIKE&#153; ice cleats when in need of a lightweight, economical winter walking device for intermittent outdoor exposure. Reduce slips and falls with SPARE SPIKE&#153;.</p>', '<ul>\n<li>Durable Tungsten Carbide Studs for Longer Wear</li>\n<li>Low Temp Elasticity for Guaranteed Stretch</li>\n<li>Lightweight and Compact</li>\n<li>Replaceable Studs</li>\n<li>Patent Pending &quot;Spare Spike&quot; on Toe</li>\n<li>Aggressive Tread for Deep Snow Traction</li>\n<li>Dual Rear Pull-Tab for Easy On/Off</li>\n<li>Patented Trim Line Feature to remove the heel traction</li>\n<li>Sized from XS - XXL</li>\n</ul>', '', 'img/products/15_SPARE_SPIKE/A_15SS01.png', 'img/products/15_SPARE_SPIKE/B_15SS03.png', 'img/products/15_SPARE_SPIKE/C_15SS02.png', 'img/products/15_SPARE_SPIKE/D_15SS05.png', 'img/products/15_SPARE_SPIKE/E_15SS04.png', 'img/products/15_SPARE_SPIKE/F_15SS06.png', '', '', 0),
(2, 'JD3615', 'Altragrips-Lite&#153; LP''s', 'over shoe boots', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Studs exposed 1mm', 'versatility', 'easyonoff', 'indstrength', 'nocoverage', 'great', 'good', 'n/a', 'good', 'n/a', 'good', 'good', 'no', 'good', 'great', 'great', 0, 1, 1, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 'JD3615&ndash;XS', 'JD3615&ndash;S', 'JD3615&ndash;M', 'JD3615&ndash;L', 'JD3615&ndash;XL', 'JD3615&ndash;XXL', 'JD3615&ndash;XXXL', 'JD3615&ndash;XXXXL', 1, 1, 1, 1, 1, 1, 0, 0, '---', '5 - 7 1/2', '7 1/2 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14+', '', '', '4 1/2 - 6 1/2', '7 - 9 1/2', '9 1/2 - 11 1/2', '12+', '---', '---', '', '', '<p>ALTRAGRIPS-LITE&#8482; All-Traction&#8482; Footwear is designed to increase traction in a variety of outdoor slippery conditions such as ice, snow and slush without the bulk of a tradional ice cleat.</p>\r\n\r\n<p>ALTRAGRIPS-LITE&#8482; is lightweight and extremely easy to put on and take off. It fits over all types of normal work shoes and boots. The traction comes from the 16 tiny tungsten carbide studs that are featured on the soles of ALTRAGRIPS-LITE&#8482;.</p>\r\n\r\n<p>The tungsten carbide studs are available in both Low Profile (LP''s / Model JD3615) and High Profile (HP''s / Model JD36159) heights for different walking conditions.</p>\r\n\r\n<p>Choose HP''s for sustained walking in messy winter conditions. Choose LP''s for greater walking versatility including driving, frequent indoor-outdoor movement and patchy winter conditions.</p>\r\n', '<ul><li>Reduces slips and falls in virtually all conditions</li>\r\n<li>Low Profile (LP''s) studs: Excellent traction and safe for indoor walking</li>\r\n<li>Spikes constructed of Tungsten Carbide for maximum durability</li>\r\n<li>Unique spike insertion for maximum retention</li>\r\n<li>Lightweight and compact</li>\r\n<li>Easy on/off</li>\r\n<li>Sized XS - XXL</li></ul>', '', 'img/products/04_ALTRAGRIPS_LITE_LP_/A_4AGLLP04.png', 'img/products/04_ALTRAGRIPS_LITE_LP_/B_3AGLHP02.png', 'img/products/04_ALTRAGRIPS_LITE_LP_/C_3AGLHP04t.png', 'img/products/04_ALTRAGRIPS_LITE_LP_/D_3AGLHP06.png', 'img/products/04_ALTRAGRIPS_LITE_LP_/E_4AGLLP05.png', 'img/products/04_ALTRAGRIPS_LITE_LP_/F_4AGLLP06.png', '', '', 0),
(3, 'JD36159', 'Altragrips-Lite&#153; HP''s', 'over shoe boots', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Studs exposed 2.5mm', 'traction', 'easyonoff', 'indstrength', 'nocoverage', 'great', 'great', 'n/a', '', 'n/a', 'good', 'good', 'great', 'no', 'great', 'good', 0, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 'JD36159&ndash;XS', 'JD36159&ndash;S', 'JD36159&ndash;M', 'JD36159&ndash;L', 'JD36159&ndash;XL', 'JD36159&ndash;XXL', 'JD36159&ndash;XXXL', 'JD36159&ndash;XXXXL', 1, 1, 1, 1, 1, 1, 0, 0, '---', '5 - 7 1/2', '7 1/2 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14+', '---', '---', '4 1/2 - 6 1/2', '7 - 9 1/2', '9 1/2 - 11 1/2', '12+', '---', '---', '---', '---', '<p>ALTRAGRIPS-LITE&#8482; All-Traction&#8482; Footwear is designed to increase traction in a variety of outdoor slippery conditions such as ice, snow and slush without the bulk of a tradional ice cleat.</p>\r\n\r\n<p>ALTRAGRIPS-LITE&#8482; is lightweight and extremely easy to put on and take off. It fits over all types of normal work shoes and boots. The traction comes from the 16 tiny tungsten carbide studs that are featured on the soles of ALTRAGRIPS-LITE&#8482;.</p>\r\n\r\n<p>The tungsten carbide studs are available in both Low Profile (LP''s / Model JD3615) and High Profile (HP''s / Model JD36159) heights for different walking conditions.</p>\r\n\r\n<p>Choose HP''s for sustained walking in messy winter conditions. Choose LP''s for greater walking versatility including driving, frequent indoor-outdoor movement and patchy winter conditions.</p>\r\n', '<ul><li>Reduces slips and falls in virtually all conditions</li>\r\n<li>High Profile (HP''s) studs: Maximum traction for the worst conditions</li>\r\n<li>Spikes constructed of Tungsten Carbide for maximum durability</li>\r\n<li>Unique spike insertion for maximum retention</li>\r\n<li>Lightweight and compact</li>\r\n<li>Easy on/off</li>\r\n<li>Sized XS - XXL</li></ul>', '', 'img/products/03_ALTRAGRIPS_LITE_HP/A_3AGLHP01.png', 'img/products/03_ALTRAGRIPS_LITE_HP/B_3AGLHP02.png', 'img/products/03_ALTRAGRIPS_LITE_HP/C_3AGLHP04t.png', 'img/products/03_ALTRAGRIPS_LITE_HP/D_3AGLHP06.png', 'img/products/03_ALTRAGRIPS_LITE_HP/E_3AGLHP03.png', 'img/products/03_ALTRAGRIPS_LITE_HP/F_3AGLHP05.png', '', '', 0),
(4, 'JD3500', 'GRIP-X&#174;', 'lightweight', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Replaceable Studs', 'traction', 'easyonoff', 'indstrength', 'nocoverage', 'great', 'great', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'good', 'no', 'great', 'good', 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 'JD3500&ndash;XS', 'JD3500&ndash;S', 'JD3500&ndash;M', 'JD3500&ndash;L', 'JD3500&ndash;XL', '', '', '', 1, 1, 1, 1, 1, 0, 0, 0, '3 - 4 1/2', '5 - 6 1/2', '7 - 9 1/2', '10 - 12', '12 1/2 - 16+', '', '', '', '5 - 6 1/2', '7 - 8 1/2', '9 - 11 1/2', '12+', '---', '', '', '', '<p>GRIP-X&#8482; All-Traction&#8482; Footwear is designed to increase traction in outdoor winter environments. GRIP-X&#8482; is a lightweight, compact traction device that fits over all types of work shoes and boots. The various patented features of GRIP-X&#8482; that make it easy to use and extremely effective have made GRIP-X&#8482; one of our most popular ice cleat winter products.</p>\r\n\r\n<p>Patented Spike Clip \r\nGRIP-X&#8482; features a patented two-piece spike clip system. The two-piece system allows the spike clip to be firmly clamped together and locked into place, as opposed to merely &#8220;pushed through&#8221;.</p>', '<ul><li>Substantially reduces slips and falls in ice and snow</li>\r\n<li>Fits over all types of winter footwear</li>\r\n<li>Tungsten carbide pins will not fall out</li>\r\n<li>Thick treaded sole for extra traction</li>\r\n<li>Unique dual rear pull tabs for easy on and off</li>\r\n<li>Uni-Foot: No lefts or rights!</li>\r\n<Li>Special eighth spike in heel strike area</li>\r\n<li>Compact and light</li>\r\n<li>Perfect alternative to traditional ice cleats</li>\r\n<li>Extremely Durable</li>\r\n<li>Patents and patents pending</li></ul>', '', 'img/products/10_GRIP_X/A_10GRX02.png', 'img/products/10_GRIP_X/B_3AGLHP02.png', 'img/products/10_GRIP_X/C_3AGLHP04t.png', 'img/products/10_GRIP_X/D_3AGLHP06.png', 'img/products/10_GRIP_X/E_10GRX03.png', 'img/products/10_GRIP_X/F_10GRX01.png', '', '', 0),
(5, 'JD912 | JD922 | JD1022', 'GRIPS&#174;', 'over shoe boots', '6&quot; | 10&quot; | 15&quot;', 'PVC', 'Grit', 'NULL', 'versatility', 'security', 'indstrength', 'protectionwarmth', 'good', 'great', 'great', 'good', 'good', 'great', 'great', 'no', 'great', 'great', 'great', 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 'JD912&ndash;XS<br>JD922&ndash;XS', 'JD912&ndash;S<br>JD922&ndash;S<br>JD1022&ndash;S', 'JD912&ndash;M<br>JD922&ndash;M<br>JD1022&ndash;M', 'JD912&ndash;L<br>JD922&ndash;L<br>JD1022&ndash;L', 'JD912&ndash;XL<br>JD922&ndash;XL<br>JD1022&ndash;XL', 'JD912&ndash;XXL<br>JD922&ndash;XXL<br>JD1022&ndash;XXL', 'JD912&ndash;XXXL<br>JD922&ndash;XXXL<br>JD1022&ndash;XXXL', 'JD912&ndash;XXXXL', 0, 1, 1, 1, 1, 1, 1, 1, '', '4 - 5 1/2', '6 - 7', '7 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14 - 15 1/2', '16+', '', '6 - 7 1/2', '8 - 9', '9 - 11 1/2', '12 - 13 1/2', '14+', '---', '---', '<p>GRIPS&reg; Over-the-Shoe All-Traction&#8482; Footwear is designed to increase traction in a variety of slick conditions&#8211;from snow and ice to oil and grease. The sole of GRIPS&reg; features bands of sandpaper-like aluminum oxide that enable GRIPS&reg; to offer increased traction above and beyond that of normal rubber-soled shoes and boots. The sandpaper-like bands are both non-conductive and non-sparking.</p> \r\n<p>GRIPS&reg; are extremely versatile. Not only will they help increase traction in slick conditions, but they are also safe to wear indoors as well as while driving. This makes GRIPS&reg; the perfect solution for a multitude of industrial applications.</p>', '<ul><li>Reduces slips and falls by 40-50%</li>\r\n<li>Aluminum oxide grit provides safe footing</li>\r\n<li>Patented Angle Tred&#174; design maximizes surface contact with self-cleaning feature</li>\r\n<li>One-piece PVC construction for maximum durability and chemical resistance</li>\r\n<li>Extra-wide opening for easiest on and off</li>\r\n<li>Safe to wear while driving</li>\r\n<li>Fits over all types of workshoes and boots</li>\r\n<li>Patented TrimLine&#174; on low cut model for expanded opening</li></ul>', '', 'img/products/07_GRIPS/A_7GR01.png', 'img/products/07_GRIPS/B_1AGHP01.png', 'img/products/07_GRIPS/C_1AGHP04.png', 'img/products/07_GRIPS/D_1AGHP03.png', 'img/products/07_GRIPS/E_1AGHP05.png', 'img/products/07_GRIPS/F_7GR02.png', '', '', 0),
(6, 'JD3612', 'GRIPS-Lite&#153;', 'lightweight indoor', 'Stretch Device', 'Rubber', 'Grit', 'NULL', 'versatility', 'easyonoff', 'indstrength', 'nocoverage', 'good', 'great', 'great', 'good', 'good', 'good', 'great', 'n/a', 'great', 'great', 'great', 1, 0, 1, 1, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 'JD3612&ndash;XS', 'JD3612&ndash;S', 'JD3612&ndash;M', 'JD3612&ndash;L', 'JD3612&ndash;XL', 'JD3612&ndash;XXL', 'JD3700&ndash;XXXL', 'JD3700&ndash;XXXXL', 1, 1, 1, 1, 1, 1, 0, 0, '---', '5 - 7 1/2', '7 1/2 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14+', '', '', '4 1/2 - 6 1/2', '7 - 9 1/2', '9 1/2 - 11 1/2', '12+', '---', '---', '', '', '<p>GRIPS-LITE&#8482; All-Traction&#8482; Footwear is designed to increase traction in a variety of slick conditions&#8212;from snow and ice to oil and grease.</p>\r\n\r\n<p>Molded with a proprietary rubber compound, GRIPS-LITE&#8482; fits securely over all types of work boots, shoes and sneakers.Utilizing a patented dual pull-tab system, GRIPS-LITE&#8482; are uniquely easy to put on and take off.</p>\r\n\r\n<p>The sole of GRIPS-LITE&#8482; features bands of sandpaper-like aluminum oxide. These bands are composed of hundreds of tiny traction points that enable GRIPS-LITE&#8482; to offer increased traction above and beyond that of normal rubber-soled shoes and boots. The sandpaper-like bands are both non-conductive and non-sparking.</p>\r\n\r\n<p>GRIPS-LITE&#8482; are extremely versatile. Not only will they help to increase traction in slick conditions, but they are also safe to wear indoors as well as while driving, making them the perfect solution for any type of delivery personnel.</p>\r\n\r\n<p>GRIPS-LITE&#8482; are extremely compact and light. When not in use, they can be easily folded and stored in the Carry Bag (sold separately...see accessories).</p>\r\n', '<ul><li>Reduces slips and falls by 40 - 50%</li>\n<li>Aluminum oxide grit provides safe footing</li>\n<li>Open design reduces heat build up for indoor workers</li>\n<li>One-piece PVC construction for maximum durability and\nchemical resistance</li>\n<li>Easiest on and off</li>\n<li>Perfect alternative to traditional ice cleats</li>\n<li>Safe to wear while driving</li>\n<li>Fits over all types of workshoes and boots</li>\n<li>Lower Cost</li>\n', '', 'img/products/08_GRIPS_LITE/A_8GRL01.png', 'img/products/08_GRIPS_LITE/B_3AGLHP02.png', 'img/products/08_GRIPS_LITE/C_3AGLHP04t.png', 'img/products/08_GRIPS_LITE/D_3AGLHP06.png', 'img/products/08_GRIPS_LITE/E_8GRL02.png', '', '', '', 0),
(7, 'JD250', 'HEEL-GRIPS&#153;', 'lightweight', 'Heel Only', 'Plastic with Web', 'Tungsten Studs', 'NULL', 'traction', 'easyonoff', 'economical', 'nocoverage', 'great', 'great', 'n/a', 'n/a', 'n/a', 'n/a', 'great', 'great', 'n/a', 'great', 'great', 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, '', 'JD250&ndash;S', 'JD250&ndash;M', 'JD250&ndash;L', 'JD250&ndash;XL', 'JD250&ndash;XXL', '', '', 0, 1, 1, 1, 1, 0, 0, 0, '', '4 - 6 1/2', '7 - 9 ', '9 1/2 - 11 1/2', '12 - 14 1/2', '15+', '', '', '', '6 - 8 1/2', '9 - 11', '11 1/2+', '---', '---', '', '', '<p>HEEL GRIPS&trade; is a compact and lightweight winter walking device.</p><p>Featuring five studs and an aggressive tread design, Heel-Grips will provide traction in ice and snow conditions. The studs are made of tungsten carbide for maximum durability for industrial work condi- tions. The studs are molded into the device to further ensure maxi- mum durability and retention in even the harshest climates.</p><p>The Heel-Grips&trade; connects with a fully adjustable and replaceable cross over strap. Each size of Heel-Grips&trade; features approximately four inches of adjustability making the Heel-Grips&trade; perfect for a variety of styles of work shoes from plain shoes to bulky pack boots.</p><p>The strap on Heel-Grips&trade; is also fully replaceable enabling the user to replace the strap in the event of a tear or excessive wear.</p>', '', '', 'img/products/11_HEEL_GRIPS/A_11HGR01.png', 'img/products/11_HEEL_GRIPS/B_11HGR02.png', 'img/products/11_HEEL_GRIPS/C_11HGR03.png', 'img/products/11_HEEL_GRIPS/D_11HGR04.png', '', '', '', '', 0),
(8, 'JD4499', 'ICEGRIPS Rotor&#153;', 'lightweight', 'Sandal', 'TPU with Polyester Web', 'Steel Studs', 'Rotating Traction element', 'both1', 'security', 'indstrength', 'nocoverage', 'great', 'great', 'n/a', 'n/a', 'n/a', 'n/a', 'great', 'great', 'great', 'great', 'great', 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, '', '', 'JD4499&ndash;M', 'JD4499&ndash;L', 'JD4499&ndash;XL', 'JD4499&ndash;XXL', '', '', 0, 0, 1, 1, 1, 1, 0, 0, '', '', '7 - 9', '9 1/2 - 11', '11 1/2 - 13', '13 1/2 +', '', '', '', '', '9-11', '11 1/2 +', '---', '---', '', '', '&#65532;&#65532;ICEGRIPS&reg; ROTORS is a uniquely versatile ice and snow walk- ing device that allows workers to move safely from indoor surfaces to outdoor surfaces without putting on and taking off their traction gear. If your employees are constantly walking in and out of building or moving from icy surfaces to clean surfaces, ICEGRIPS&reg; ROTORS is the solution you&rsquo;ve been waiting for. No more continually putting on and taking off your traction gear and being faced with the prospect of carrying a wet and dirty device around. ICE- GRIPS&reg; ROTORS solve the problem with a twist!', '<ul>\r\n<li>Lightweight and compact</li>\r\n<li>Rotor hides spikes when not in use.</li>\r\n<li>Rotor easily twists from closed to open.</li>\r\n<li>When rotor is turned spikes are exposed to give exceptional traction.</li>\r\n<li>Unique patented strap system.</li>\r\n</ul>', '', 'img/products/13_ICEGRIPS_ROTORS/A_13IGR05.png', 'img/products/13_ICEGRIPS_ROTORS/B_13IGR03.png', 'img/products/13_ICEGRIPS_ROTORS/C_13IGR06.png', 'img/products/13_ICEGRIPS_ROTORS/D_13IGR04.png', 'img/products/13_ICEGRIPS_ROTORS/E_13IGR02.png', 'img/products/13_ICEGRIPS_ROTORS/F_13IGR01.png', '', '', 0),
(9, 'JD4472', 'ICEGRIPS&#174;', 'lightweight', 'Sandal', 'TPU with Polyester Web', 'Tungsten Studs', 'NULL', 'traction', 'security', 'indstrength', 'no coverage', 'great', 'great', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'good', 'no', 'great', 'no', 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 'JD4472&ndash;XS', 'JD4472&ndash;S', 'JD4472&ndash;M', 'JD4472&ndash;L', 'JD4472&ndash;XL', 'JD4472&ndash;XXL', '', '', 0, 1, 1, 1, 1, 1, 0, 0, '', '5 - 6 1/2', '7 - 9', '9 1/2 - 11', '11 1/2 - 13', '13 1/2+', '', '', '', '7 - 8 1/2', '9 - 11 1/2+', '---', '---', '---', '', '', '<p>ICEGRIPS&#174; ice cleats are designed to increase traction in winter&#8217;s harshest conditions.</p>\r\n \r\n<p>The patent-pending replaceable strap system increases the product''s lifespan and enables ICEGRIPS to fit over a wider variety of shoes and boots.</p>\r\n \r\n<p>ICEGRIPS&#174; features 44 molded-in tungsten carbide studs. The studs offer maximum traction and maximum retention in thick ice conditions.</p>\r\n \r\n<p>The unique patent-pending strap system is completely removable from the sole. This removability allows the user to choose the strap configuration that best suits their need. Choose the Heel Strap for the most ease of on/off. Choose the Ankle Strap for maximum security. Or change out the straps completely for the Bulky Boot strap kit in order to accommodate oversized boots. If a strap rips or degrades, simply replace it and extend the lifespan of ICEGRIPS&#174;</p>\r\n \r\n<p>ICEGRIPS&#174; features a patented Angle Tread&#174; design. This design maximizes surfaces contact by mimicking the bone structure of the foot. It also help to self-clean the sole by forcing contaminants outward. ICEGRIPS&#174; features a 2&#8221; clean arch and a 1/2&#8221; defined heel for safer climbing when necessary.</p> \r\n \r\n<p>ICEGRIPS&#174; is our most aggressive winter walking item and is recommended for anyone who walks or works in sustained ice and snow environments.</p>', '<ul><li>ICEGRIPS&#174; provides maximum traction in winter&#8217;s harshest conditions.</li>\r\n<li>Features 44 molded-in tungsten carbide studs</li>\r\n<li>2&#8221; Clean arch and 1/2&#8221; defined heel for safer climbing</li>\r\n<li>Straps are fully replaceable in case of damage or degradation</li>\r\n<li>Straps can be replaced with a Bulky Boot strap kit</li>\r\n<li>Patented Angle Tread&#174; design mimics the bone structure of the foot for maximum surface contact</li>\r\n<li>Patented Angle Tread&#174; design self-cleans by forcing contaminants outward</li>\r\n<li>Excellent Cold weather flexibility\r\nAvailable in sizes up to XXL for even the biggest footwear.</li></ul>', '', 'img/products/14_ICEGRIPS/A_14IG03.png', 'img/products/14_ICEGRIPS/B_14IG05.png', 'img/products/14_ICEGRIPS/C_14IG01.png', 'img/products/14_ICEGRIPS/D_14IG06.png', 'img/products/14_ICEGRIPS/E_14IG02.png', 'img/products/14_ICEGRIPS/F_14IG04.png', '', '', 0),
(10, 'JD5272 | JD6272', 'ICEGRIPS Overshoe&#153;', 'over shoe boots', '6&quot; | 14&quot;', 'Nylon', 'Tungsten Studs', 'Insulated Upper', 'traction', 'security', 'indstrength', 'protectionwarmth', 'great', 'great', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'great', 'n/a', 'great', 'good', 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, '', 'JD5272&ndash;S<br>JD6272&ndash;S', 'JD5272&ndash;M<br>JD6272&ndash;M', 'JD5272&ndash;L<br>JD6272&ndash;L', 'JD5272&ndash;XL<br>JD6272&ndash;XL', 'JD5272&ndash;XXL<br>JD6272&ndash;XXL', '', '', 0, 1, 1, 1, 1, 1, 0, 0, '', '---', '6 - 7 1/2', '8 - 10 1/2', '11 - 12 1/2', '13+', '', '', '', '6 - 7 1/2', '8 - 9 1/2', '10 - 12 1/2', '---', '---', '', '', '<p>ICEGRIPS OVERSHOETM is designed to provide aggressive traction in winter&rsquo;s harshest conditions while allowing the user to continue to wear their normal footwear.</p><p>ICEGRIPS OVERSHOETM is available in an insulated 14&rdquo; and a noninsulated 6&rdquo; version, that slips quickly and easily over all types of footwear, including bulkier work shoes. ICEGRIPS OVERSHOETM features tungsten carbide studs for maximum traction and maximum durability in all types of conditions. The tungsten carbide studs of ICEGRIPS OVERSHOETM are molded in to the outsole for maximum spike retention. All styles of ICEGRIPS OVERSHOETM feature a defined heel and clean arch for safer climbing. The 14&rdquo; model features a unique rear entry system that makes putting the boot on quick and easy.</p>', '<ul>\r\n<li>Molded in studs ensure maximum durability.</li>\r\n<li>Property of patch allows the user to conveniently mark the product for identification.</li>\r\n<li>Minimum half inch defined heel and clean arch for safer climbing.</li>\r\n<li>Rear entry system allows easy on and off while maintaining full water resistance and insulation.</li>\r\n</ul>', '', 'img/products/12_ICEGRIPS_OVERSHOE/A_12IGO01.png', 'img/products/12_ICEGRIPS_OVERSHOE/B_12IGO03.png', 'img/products/12_ICEGRIPS_OVERSHOE/C_12IGO02.png', 'img/products/12_ICEGRIPS_OVERSHOE/D_12IGO04.png', 'img/products/12_ICEGRIPS_OVERSHOE/E_12IGO05.png', 'img/products/12_ICEGRIPS_OVERSHOE/12IGO06.png', '', '', 0),
(11, 'JD9150 | JD9250 | JD10250', 'Altragrips&#153; LP''s', 'over shoe boots', '6&quot; | 10&quot; | 15&quot;', 'PVC', 'Tungsten Studs', 'Studs exposed 1mm', 'versatility', 'security', 'indstrength', 'protectionwarmth', 'great', 'good', 'n/a', 'good', 'n/a', 'good', 'good', 'no', 'good', 'great', 'great', 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'JD9150&ndash;XS', 'JD9150&ndash;S<br>JD9250&ndash;S<br>JD10250&ndash;S', 'JD9150&ndash;M<br>JD9250&ndash;M<br>JD10250&ndash;M', 'JD9150&ndash;L<br>JD9250&ndash;L<br>JD10250&ndash;L', 'JD9150&ndash;XL<br>JD9250&ndash;XL<br>JD10250&ndash;XL', 'JD9150&ndash;XXL<br>JD9250&ndash;XXL<br>JD10250&ndash;XXL', 'JD9150&ndash;XXXL<br>JD9250&ndash;XXXL<br>JD10250&ndash;XXXL', 'JD9150&ndash;XXXXL', 0, 1, 1, 1, 1, 1, 1, 1, '', '4 - 5 1/2', '6 - 7', '7 1/2 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14 - 15 1/2', '16+', '', '6 - 7 1/2', '8 - 9 ', '9 1/2 - 11 1/2', '12 - 13 1/2', '14+', '---', '---', '<p>ALTRAGRIPS&#8482; All-Traction&#8482; Footwear is designed to increase traction in a variety of slick conditions ranging from outdoors in ice and snow to indoors in chemicals and fats. Think of them as indoor/outdoor ice cleats.</p>\r\n<p>Constructed of an industrial-grade PVC, ALTRAGRIPS&#8482; fits over all types of normal work shoes and boots. The traction comes from the 48 tiny tungsten carbide studs that line the soles of ALTRAGRIPS&#8482;.</p>\r\n<p>The tungsten carbide studs are available in both low profile and high profile heights for different walking conditions.</p>', '<ul><li>Reduces slips and falls in virtually all conditions</li>\r\n<li>High profile spikes- Maximum traction for the worst conditions</li>\r\n<li>Spikes constucted of Tungsten Carbide for maximum durability</li>\r\n<li>Unique spike insertion for maximum retention</li>\r\n<li>Patented Angle&reg; Tread sole design maximizes surface contact and self cleans</li>\r\n<li>Available in three different styles: low cut, 10&quot; boot and 15&quot; boot</li>\r\n<li>Extra-wide opening for the easiest on and off</li>\r\n<li>Perfect alternative to traditional ice cleats</li>\r\n<li>Patented TrimLine&reg; on low cut model for expanded opening</li></ul>', '', 'img/products/02_ALTRAGRIPS_LP/A_1AGHP06.png', 'img/products/02_ALTRAGRIPS_LP/B_1AGHP01.png', 'img/products/02_ALTRAGRIPS_LP/C_1AGHP04.png', 'img/products/02_ALTRAGRIPS_LP/D_1AGHP03.png', 'img/products/02_ALTRAGRIPS_LP/E_1AGHP05.png', 'img/products/02_ALTRAGRIPS_LP/F_1AGHP02.png', '', '', 0),
(12, 'JD915 | JD925 | JD1025', 'Altragrips&#153; HP''s', 'over shoe boots', '6&quot; | 10&quot; | 15&quot;', 'PVC', 'Tungsten Studs', 'Studs exposed 2.5mm', 'traction', 'security', 'indstrength', 'protectionwarmth', 'great', 'great', 'n/a', 'good', 'n/a', 'good', 'good', 'great', 'no', 'great', 'good', 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'JD915&ndash;XS<br>JD925&ndash;XS', 'JD915&ndash;S<br>JD925&ndash;S<br>JD1025&ndash;S', 'JD915&ndash;M<br>JD925&ndash;M<br>JD1025&ndash;M', 'JD915&ndash;L<br>JD925&ndash;L<br>JD1025&ndash;L', 'JD915&ndash;XL<br>JD925&ndash;XL<br>JD1025&ndash;XL', 'JD915&ndash;XXL<br>JD925&ndash;XXL<br>JD1025&ndash;XXL', 'JD915&ndash;XXXL<br>JD925&ndash;XXXL<br>JD1025&ndash;XXXL', 'JD915&ndash;XXXXL', 0, 1, 1, 1, 1, 1, 1, 1, '', '4 - 5 1/2', '6 - 7', '7 1/2 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14 - 15 1/2', '16+', '', '6 - 7 1/2', '8 - 9', '9 1/2 - 11 1/2', '12 - 13 1/2', '14+', '---', '---', '<p>ALTRAGRIPS&#8482; All-Traction&#8482; Footwear is designed to increase traction in a variety of slick conditions ranging from outdoors in ice and snow to indoors in chemicals and fats. Think of them as indoor/outdoor ice cleats.</p>\r\n<p>Constructed of an industrial-grade PVC, ALTRAGRIPS&#8482; fits over all types of normal work shoes and boots. The traction comes from the 48 tiny tungsten carbide studs that line the soles of ALTRAGRIPS&#8482;.</p>\r\n<p>The tungsten carbide studs are available in both low profile and high profile heights for different walking conditions.</p>', '<ul><li>Reduces slips and falls in virtually all conditions</li>\r\n<li>High profile spikes- Maximum traction for the worst conditions</li>\r\n<li>Spikes constucted of Tungsten Carbide for maximum durability</li>\r\n<li>Unique spike insertion for maximum retention</li>\r\n<li>Patented Angle&reg; Tread sole design maximizes surface contact and self cleans</li>\r\n<li>Available in three different styles: low cut, 10&quot; boot and 15&quot; boot</li>\r\n<li>Extra-wide opening for the easiest on and off</li>\r\n<li>Perfect alternative to traditional ice cleats</li>\r\n<li>Patented TrimLine&reg; on low cut model for expanded opening</li></ul>', 'img/products/Altragrips/sole-side.png', 'img/products/01_ALTRAGRIPS_HP/A_1AGHP06.png', 'img/products/01_ALTRAGRIPS_HP/B_1AGHP01.png', 'img/products/01_ALTRAGRIPS_HP/C_1AGHP04.png', 'img/products/01_ALTRAGRIPS_HP/D_1AGHP03.png', 'img/products/01_ALTRAGRIPS_HP/E_1AGHP05.png', 'img/products/01_ALTRAGRIPS_HP/F_1AGHP02.png', '', '', 0),
(13, 'JD1226', 'Grippers for Strippers&#153;', 'indoor', '6&quot; Low Boot', 'PVC', 'Vinyl Loop', 'For Indoor Only', 'none1', 'security', 'indstrength', 'none4', 'n/a', 'n/a', 'good', 'good', 'great', 'good', 'great', 'n/a', 'great', 'no', 'good', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 'JD1226&ndash;XS', 'JD1226&ndash;S', 'JD1226&ndash;M', 'JD1226&ndash;L', 'JD1226&ndash;XL', 'JD1226&ndash;XXL', 'JD1226&ndash;XXXL', 'JD1226&ndash;XXXXL', 0, 1, 1, 1, 1, 1, 1, 1, '', '3 - 5 1/2', '6 - 7 1/2', '8 - 10', '10 1/2 - 12 1/2', '13 - 14 1/2', '15 - 16 1/2', '17+', '', '5 - 7 1/2', '8 - 9 1/2', '10 - 12', '12 1/2+', '---', '---', '---', '<p>GRIPPERS for STRIPPERS&#8482; are designed to increase traction in wet, soapy and wax-covered conditions, particularly those areas common to stripping and mopping floors.</p>\r\n\r\n<p>Available as a full waterproof overshoe, GRIPPERS for STRIPPERS&#8482; will allow your crews to work faster and safer.</p> ', '<ul><li>GRIPPERS for STRIPPERS&#174; reduces slips and falls without damaging walking surfaces</li>\r\n<li>Increases traction in water, soap and wax</li>\r\n<li>Fits over normal footwear</li>\r\n<li>Increasing productivity by increasing walking safety</li>\r\n<li>Perfect for stripping floors</li>\r\n<li>Effective in oil, grease and other contaminants</li>\r\n<li>Excellent for restaurants and cafeteria kitchen areas</li>\r\n<li>Extremely durable</li>', '', 'img/products/06_G4S/A_6G4S02.png', 'img/products/06_G4S/B_6G4S03.png', 'img/products/06_G4S/C_6G4S04.png', 'img/products/06_G4S/D_6G4S05.png', 'img/products/06_G4S/E_6G4S01.png', '', '', '', 0),
(14, 'JD2226', 'Grippers for Strippers-Econ&#153;', 'indoor', '6&quot; Low Boot', 'Latex', 'Vinyl Loop', 'For Indoor Only', 'none1', 'security', 'economical', 'none4', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 'JD2226&ndash;XS', 'JD2226&ndash;S', 'JD2226&ndash;M', 'JD2226&ndash;L', 'JD2226&ndash;XL', 'JD2226&ndash;XXL', 'JD2226&ndash;XXXL', 'JD2226&ndash;XXXXL', 0, 1, 1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', '', 'img/products/05_G4S_ECON/A_5G4SE02.png', 'img/products/05_G4S_ECON/B_5G4SE01.png', 'img/products/05_G4S_ECON/C_5G4SE03.png', '', '', '', '', '', '', 0),
(17, 'JD4022 | JD4122', 'GRIPS Over the Sock&#174;', 'indoor', 'Plain | Steel Toes', 'Blend', 'Grit', 'NULL', 'versatility', 'security', 'indstrength', 'protectionwarmth', 'good', 'great', 'great', 'good', 'good', 'great', 'great', 'no', 'great', 'great', 'great', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 1, '', '', '', '', '', '', '', '', 0, 1, 1, 1, 1, 1, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>GRIPS&#174; Over-the-Sock All-Traction&#8482; Footwear is designed to increase traction in a variety of slick conditions&#8212;from snow and ice to oil and grease. The sole of GRIPS&#174; features bands of sandpaper-like aluminum oxide that enable GRIPS&#174; to offer increased traction above and beyond that of normal rubber-soled shoes and boots.The sandpaper- like bands are both non-conductive and non-sparking.</p>\r\n\r\n<p>Plain Toe or Steel Toe</p>\r\n\r\n<p>GRIPS&#174; Over-the Sock models feature a hardened steel shank. They are available in both plain toe and an ANSI/CSA steel toe for extra protection. The boot is constructed of a polyurethane and PVC combination and offers a moderate level of chemical resistance. It is ideal for situations such as food processing facilities, refineries and breweries.</p>\r\n\r\n<p>GRIPS&#174; Over-the Sock boots are extremely versatile. Not only will they help to increase traction in slick conditions, but they are also safe to wear indoors as well as while driving. This makes GRIPS&#174; the perfect solution for a multitude of industrial applications.</p>', '<ul><li>Reduces slips and falls by 40-50%</li>\r\n<li>Aluminum oxide grit provides safe footing</li>\r\n<li>Patented Angle Tred&#174; design maximizes surface contact with self-cleaning feature</li>\r\n<li>One-piece PVC construction for maximum durability and chemical resistance</li>\r\n<li>Good alternative to traditional ice cleats</li>\r\n<li>Extra-wide opening for easiest on and off</li>\r\n<li>Safe to wear while driving</li></ul>', '', 'img/products/09_GRIPS_OVER_THE_SOCK/A_9GROTS01.png', 'img/products/09_GRIPS_OVER_THE_SOCK/B_9GROTS02.png', 'img/products/09_GRIPS_OVER_THE_SOCK/C_9GROTS03.png', '', '', '', '', '', 0),
(101, 'NEW1 | NEW2', 'ROTOR OVERSHOE', 'over shoe boots', '6&quot; | 14&quot;', 'Nylon', 'Steel Studs', 'Rotating Traction element', 'none1', 'none2', 'none3', 'none4', '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, '', '', '', '', '', '', '', '', 0, 1, 1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', '', 'img/products/2.png', '', '', '', '', '', '', '', '', 0),
(102, 'NEW3 | NEW4', 'SINGLEMOLD DEVICE', 'lightweight', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Studs exposed 1mm | 2.5mm', 'versatility', 'easyonoff', 'indstrength', 'nocoverage', '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, '', '', '', '', '', '', '', '', 0, 1, 1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', '', 'img/products/2.png', '', '', '', '', '', '', '', '', 0);
