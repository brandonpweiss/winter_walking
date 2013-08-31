-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2013 at 11:44 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `winter_walking`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(10) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `model`, `name`, `category`, `upper_style`, `upper_material`, `traction`, `feature_note`, `traction_versatility`, `easyonoff_security`, `economical_indstrength`, `protectionwarmth_nocoverage`, `ice`, `snow`, `oil`, `fats`, `soaps`, `chemicals`, `liquids`, `mud`, `indoor`, `outdoor`, `driving`, `gritted`, `spiked`, `safer-driving`, `non-sparking`, `defined-heel`, `extreme-ice`, `outdoor-only`, `indoor-outdoor`, `indoor-only`, `safer-indoors`, `low-cut`, `mid-calf`, `knee-high`, `insulated`, `stripping`, `oil-grease`, `food-processing`, `over-sock`, `ice-snow`, `sling-device`, `steel-toe`, `XS`, `S`, `M`, `L`, `XL`, `XXL`, `XXXL`, `XXXXL`, `XSM`, `SM`, `MM`, `LM`, `XLM`, `XXLM`, `XXXLM`, `XXXXLM`, `XSW`, `SW`, `MW`, `LW`, `XLW`, `XXLW`, `XXXLW`, `XXXXLW`, `description`, `features`, `img_url`, `img_url1`, `img_url2`, `img_url3`, `img_url4`, `img_url5`, `img_url6`, `img_url7`, `img_url8`, `featured`) VALUES
(4, 'JD1226', 'Grippers for Strippers', 'indoor', '6&quot; Low Cut', 'PVC', 'Vinyl Loop', 'For Indoor Only', 'none1', 'security', 'indstrength', 'none4', 'n/a', 'n/a', 'good', 'good', 'great', 'good', 'great', 'n/a', 'great', 'no', 'good', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, '---', '3 - 5 1/2', '6 - 7 1/2', '8 - 10', '10 1/2 - 12 1/2', '13 - 14 1/2', '15 - 16 1/2', '17+', '---', '5 - 7 1/2', '8 - 9 1/2', '10 - 12', '12 1/2+', '---', '---', '---', '<p>GRIPPERS for STRIPPERS&#8482; are designed to increase traction in wet, soapy and wax-covered conditions, particularly those areas common to stripping and mopping floors.</p>\r\n\r\n<p>Available as a full waterproof overshoe, GRIPPERS for STRIPPERS&#8482; will allow your crews to work faster and safer.</p> ', '<ul><li>GRIPPERS for STRIPPERS&#174; reduces slips and falls without damaging walking surfaces</li>\r\n<li>Increases traction in water, soap and wax</li>\r\n<li>Fits over normal footwear</li>\r\n<li>Increasing productivity by increasing walking safety</li>\r\n<li>Perfect for stripping floors</li>\r\n<li>Effective in oil, grease and other contaminants</li>\r\n<li>Excellent for restaurants and cafeteria kitchen areas</li>\r\n<li>Extremely durable</li>', 'img/products/G4S Econ/sole-side.png', 'img/products/gfs-front.jpg', 'img/products/gfs-left.jpg', 'img/products/gfs-right.jpg', 'img/products/G4S Econ/sole.png', '', '', '', '', 0),
(5, 'JD2226', 'Grippers for Strippers-Lite', 'indoor', '6&quot; Low Cut', 'Latex', 'Vinyl Loop', 'For Indoor Only', 'none1', 'security', 'economical', 'none4', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', '', 'img/products/2.png', '', '', '', '', '', '', '', '', 0),
(6, 'JD250', 'HEEL-GRIPS', 'lightweight', 'Heel Only', 'Plastic with Web', 'Tungsten Studs', 'NULL', 'traction', 'easyonoff', 'economical', 'nocoverage', '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', '', 'img/products/Heel Grips/sole-side.png', '', 'img/products/Heel Grips/front.png', 'img/products/Heel Grips/side.png', 'img/products/Heel Grips/sole.png', '', '', '', '', 0),
(7, 'JD3500', 'GRIP-X', 'lightweight', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Replaceable Studs', 'traction', 'easyonoff', 'indstrength', 'nocoverage', 'great', 'great', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'good', 'no', 'great', 'good', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, '3 - 4 1/2', '5 - 6 1/2', '7 - 9 1/2', '10 - 12', '12 1/2 - 16+', '---', '---', '---', '5 - 6 1/2', '7 - 8 1/2', '9 - 11 1/2', '12+', '---', '---', '---', '---', '<p>GRIP-X&#8482; All-Traction&#8482; Footwear is designed to increase traction in outdoor winter environments. GRIP-X&#8482; is a lightweight, compact traction device that fits over all types of work shoes and boots. The various patented features of GRIP-X&#8482; that make it easy to use and extremely effective have made GRIP-X&#8482; one of our most popular ice cleat winter products.</p>\r\n\r\n<p>Patented Spike Clip \r\nGRIP-X&#8482; features a patented two-piece spike clip system. The two-piece system allows the spike clip to be firmly clamped together and locked into place, as opposed to merely &#8220;pushed through&#8221;.</p>', '<ul><li>Substantially reduces slips and falls in ice and snow</li>\r\n<li>Fits over all types of winter footwear</li>\r\n<li>Tungsten carbide pins will not fall out</li>\r\n<li>Thick treaded sole for extra traction</li>\r\n<li>Unique dual rear pull tabs for easy on and off</li>\r\n<li>Uni-Foot: No lefts or rights!</li>\r\n<Li>Special eighth spike in heel strike area</li>\r\n<li>Compact and light</li>\r\n<li>Perfect alternative to traditional ice cleats</li>\r\n<li>Extremely Durable</li>\r\n<li>Patents and patents pending</li></ul>', 'img/products/GripX/sole-side.png', 'img/products/grip-x-front.jpg', 'img/products/grip-x-left.jpg', 'img/products/grip-x-right.jpg', 'img/products/GripX/sole.png', '', '', '', '', 0),
(8, 'JD3612', 'GRIPS-Lite', 'lightweight indoor', 'Stretch Device', 'Rubber', 'Grit', 'NULL', 'versatility', 'easyonoff', 'indstrength', 'nocoverage', 'good', 'great', 'great', 'good', 'good', 'good', 'great', 'n/a', 'great', 'great', 'great', 1, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, '---', '5 - 7 1/2', '7 1/2 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14+', '---', '---', '4 1/2 - 6 1/2', '7 - 9 1/2', '9 1/2 - 11 1/2', '12+', '---', '---', '---', '---', '<p>GRIPS-LITE&#8482; All-Traction&#8482; Footwear is designed to increase traction in a variety of slick conditions&#8212;from snow and ice to oil and grease.</p>\r\n\r\n<p>Molded with a proprietary rubber compound, GRIPS-LITE&#8482; fits securely over all types of work boots, shoes and sneakers.Utilizing a patented dual pull-tab system, GRIPS-LITE&#8482; are uniquely easy to put on and take off.</p>\r\n\r\n<p>The sole of GRIPS-LITE&#8482; features bands of sandpaper-like aluminum oxide. These bands are composed of hundreds of tiny traction points that enable GRIPS-LITE&#8482; to offer increased traction above and beyond that of normal rubber-soled shoes and boots. The sandpaper-like bands are both non-conductive and non-sparking.</p>\r\n\r\n<p>GRIPS-LITE&#8482; are extremely versatile. Not only will they help to increase traction in slick conditions, but they are also safe to wear indoors as well as while driving, making them the perfect solution for any type of delivery personnel.</p>\r\n\r\n<p>GRIPS-LITE&#8482; are extremely compact and light. When not in use, they can be easily folded and stored in the Carry Bag (sold separately...see accessories).</p>\r\n', '<ul><li>Reduces slips and falls by 40 - 50%</li>\r\n<li>Aluminum oxide grit provides safe footing</li>\r\n<li>Open design reduces heat build up for indoor workers</li>\r\n<li>One-piece PVC construction for maximum durability and\r\nchemical resistance</li>\r\n<li>Easiest on and off</li>\r\n<li>Perfect alternative to traditional ice cleats</li>\r\n<li>Safe to wear while driving</li>\r\n<li>Fits over all types of workshoes and boots</li>\r\n<li>Lower Cost</li>\r\n', 'img/products/GRIPS Lite/sole-side.png', 'img/products/GRIPS Lite/front.png', 'img/products/GRIPS Lite/side.png', '', 'img/products/GRIPS Lite/sole.png', '', '', '', '', 0),
(9, 'JD3615', 'Altragrips-Lite LP''s', 'over shoe boots', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Studs exposed 1mm', 'versatility', 'easyonoff', 'indstrength', 'nocoverage', 'great', 'good', 'n/a', 'good', 'n/a', 'good', 'good', 'no', 'good', 'great', 'great', 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, '---', '5 - 7 1/2', '7 1/2 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14+', '---', '---', '4 1/2 - 6 1/2', '7 - 9 1/2', '9 1/2 - 11 1/2', '12+', '---', '---', '---', '---', '<p>ALTRAGRIPS-LITE&#8482; All-Traction&#8482; Footwear is designed to increase traction in a variety of outdoor slippery conditions such as ice, snow and slush without the bulk of a tradional ice cleat.</p>\r\n\r\n<p>ALTRAGRIPS-LITE&#8482; is lightweight and extremely easy to put on and take off. It fits over all types of normal work shoes and boots. The traction comes from the 16 tiny tungsten carbide studs that are featured on the soles of ALTRAGRIPS-LITE&#8482;.</p>\r\n\r\n<p>The tungsten carbide studs are available in both Low Profile (LP''s / Model JD3615) and High Profile (HP''s / Model JD36159) heights for different walking conditions.</p>\r\n\r\n<p>Choose HP''s for sustained walking in messy winter conditions. Choose LP''s for greater walking versatility including driving, frequent indoor-outdoor movement and patchy winter conditions.</p>\r\n', '<ul><li>Reduces slips and falls in virtually all conditions</li>\r\n<li>Low Profile (LP''s) studs: Excellent traction and safe for indoor walking</li>\r\n<li>Spikes constructed of Tungsten Carbide for maximum durability</li>\r\n<li>Unique spike insertion for maximum retention</li>\r\n<li>Lightweight and compact</li>\r\n<li>Easy on/off</li>\r\n<li>Sized XS - XXL</li></ul>', 'img/products/Altragrips Lite - LP/sole-side.png', 'img/products/altagrips-lite-front.jpg', 'img/products/altagrips-lite-left.jpg', 'img/products/altagrips-lite-right.jpg', 'img/products/Altragrips Lite - LP/sole.png', '', '', '', '', 0),
(10, 'JD36159', 'Altragrips-Lite HP''s', 'over shoe boots', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Studs exposed 2.5mm', 'traction', 'easyonoff', 'indstrength', 'nocoverage', 'great', 'great', 'n/a', '', 'n/a', 'good', 'good', 'great', 'no', 'great', 'good', 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, '---', '5 - 7 1/2', '7 1/2 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14+', '---', '---', '4 1/2 - 6 1/2', '7 - 9 1/2', '9 1/2 - 11 1/2', '12+', '---', '---', '---', '---', '<p>ALTRAGRIPS-LITE&#8482; All-Traction&#8482; Footwear is designed to increase traction in a variety of outdoor slippery conditions such as ice, snow and slush without the bulk of a tradional ice cleat.</p>\r\n\r\n<p>ALTRAGRIPS-LITE&#8482; is lightweight and extremely easy to put on and take off. It fits over all types of normal work shoes and boots. The traction comes from the 16 tiny tungsten carbide studs that are featured on the soles of ALTRAGRIPS-LITE&#8482;.</p>\r\n\r\n<p>The tungsten carbide studs are available in both Low Profile (LP''s / Model JD3615) and High Profile (HP''s / Model JD36159) heights for different walking conditions.</p>\r\n\r\n<p>Choose HP''s for sustained walking in messy winter conditions. Choose LP''s for greater walking versatility including driving, frequent indoor-outdoor movement and patchy winter conditions.</p>\r\n', '<ul><li>Reduces slips and falls in virtually all conditions</li>\r\n<li>High Profile (HP''s) studs: Maximum traction for the worst conditions</li>\r\n<li>Spikes constructed of Tungsten Carbide for maximum durability</li>\r\n<li>Unique spike insertion for maximum retention</li>\r\n<li>Lightweight and compact</li>\r\n<li>Easy on/off</li>\r\n<li>Sized XS - XXL</li></ul>', 'img/products/Altragrips Lite - HP/sole-side.png', 'img/products/altagrips-lite-front.jpg', 'img/products/altagrips-lite-left.jpg', 'img/products/altagrips-lite-right.jpg', 'img/products/Altragrips Lite - HP/sole.png', '', '', '', '', 0),
(11, 'JD4022', 'GRIPS Over the Sock', 'indoor', 'Plain | Steel Toes', 'Blend', 'Grit', 'NULL', 'versatility', 'security', 'indstrength', 'protectionwarmth', 'good', 'great', 'great', 'good', 'good', 'great', 'great', 'no', 'great', 'great', 'great', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>GRIPS&#174; Over-the-Sock All-Traction&#8482; Footwear is designed to increase traction in a variety of slick conditions&#8212;from snow and ice to oil and grease. The sole of GRIPS&#174; features bands of sandpaper-like aluminum oxide that enable GRIPS&#174; to offer increased traction above and beyond that of normal rubber-soled shoes and boots.The sandpaper- like bands are both non-conductive and non-sparking.</p>\r\n\r\n<p>Plain Toe or Steel Toe</p>\r\n\r\n<p>GRIPS&#174; Over-the Sock models feature a hardened steel shank. They are available in both plain toe and an ANSI/CSA steel toe for extra protection. The boot is constructed of a polyurethane and PVC combination and offers a moderate level of chemical resistance. It is ideal for situations such as food processing facilities, refineries and breweries.</p>\r\n\r\n<p>GRIPS&#174; Over-the Sock boots are extremely versatile. Not only will they help to increase traction in slick conditions, but they are also safe to wear indoors as well as while driving. This makes GRIPS&#174; the perfect solution for a multitude of industrial applications.</p>', '<ul><li>Reduces slips and falls by 40-50%</li>\r\n<li>Aluminum oxide grit provides safe footing</li>\r\n<li>Patented Angle Tred&#174; design maximizes surface contact with self-cleaning feature</li>\r\n<li>One-piece PVC construction for maximum durability and chemical resistance</li>\r\n<li>Good alternative to traditional ice cleats</li>\r\n<li>Extra-wide opening for easiest on and off</li>\r\n<li>Safe to wear while driving</li></ul>', 'img/products/Grips Over the Sock/sole-side.png', '', '', 'img/products/Grips Over the Sock/side.png', 'img/products/Grips Over the Sock/sole.png', '', '', '', '', 0),
(13, 'JD4472', 'ICEGRIPS', 'lightweight', 'Sandal', 'TPU with Polyester Web', 'Tungsten Studs', 'NULL', 'traction', 'security', 'indstrength', 'no coverage', 'great', 'great', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'good', 'no', 'great', 'no', 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, '---', '5 - 6 1/2', '7 - 9', '9 1/2 - 11', '11 1/2 - 13', '13 1/2+', '---', '---', '---', '7 - 8 1/2', '9 - 11 1/2+', '---', '---', '---', '---', '---', '<p>ICEGRIPS&#174; ice cleats are designed to increase traction in winter&#8217;s harshest conditions.</p>\r\n \r\n<p>The patent-pending replaceable strap system increases the product''s lifespan and enables ICEGRIPS to fit over a wider variety of shoes and boots.</p>\r\n \r\n<p>ICEGRIPS&#174; features 44 molded-in tungsten carbide studs. The studs offer maximum traction and maximum retention in thick ice conditions.</p>\r\n \r\n<p>The unique patent-pending strap system is completely removable from the sole. This removability allows the user to choose the strap configuration that best suits their need. Choose the Heel Strap for the most ease of on/off. Choose the Ankle Strap for maximum security. Or change out the straps completely for the Bulky Boot strap kit in order to accommodate oversized boots. If a strap rips or degrades, simply replace it and extend the lifespan of ICEGRIPS&#174;</p>\r\n \r\n<p>ICEGRIPS&#174; features a patented Angle Tread&#174; design. This design maximizes surfaces contact by mimicking the bone structure of the foot. It also help to self-clean the sole by forcing contaminants outward. ICEGRIPS&#174; features a 2&#8221; clean arch and a 1/2&#8221; defined heel for safer climbing when necessary.</p> \r\n \r\n<p>ICEGRIPS&#174; is our most aggressive winter walking item and is recommended for anyone who walks or works in sustained ice and snow environments.</p>', '<ul><li>ICEGRIPS&#174; provides maximum traction in winter&#8217;s harshest conditions.</li>\r\n<li>Features 44 molded-in tungsten carbide studs</li>\r\n<li>2&#8221; Clean arch and 1/2&#8221; defined heel for safer climbing</li>\r\n<li>Straps are fully replaceable in case of damage or degradation</li>\r\n<li>Straps can be replaced with a Bulky Boot strap kit</li>\r\n<li>Patented Angle Tread&#174; design mimics the bone structure of the foot for maximum surface contact</li>\r\n<li>Patented Angle Tread&#174; design self-cleans by forcing contaminants outward</li>\r\n<li>Excellent Cold weather flexibility\r\nAvailable in sizes up to XXL for even the biggest footwear.</li></ul>', 'img/products/ICEGRIPS Studded/sole-side.png', 'img/products/ice-grips-front.jpg', 'img/products/ICEGRIPS Studded/front.png', 'img/products/ICEGRIPS Studded/side.png', 'img/products/ICEGRIPS Studded/sole.png', '', '', '', '', 0),
(14, 'JD4499', 'ICEGRIPS Rotor', 'lightweight', 'Sandal', 'TPU with Polyester Web', 'Steel Studs', 'Rotating Traction element', 'both1', 'security', 'indstrength', 'nocoverage', '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', '', 'img/products/ICEGRIPS Rotor/sole-side.png', 'img/products/ice-grips-rotor.png', 'img/products/ice-grips-rotor.png', 'img/products/ice-grips-rotor-closed.jpg', 'img/products/ice-grips-rotor-exposed.jpg', '', '', '', '', 0),
(15, 'JD510', 'Spare Spike', 'lightweight', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Replaceable Studs', 'traction', 'easyonoff', 'economical', 'nocoverage', 'great', 'great', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', 'good', 'no', 'great', 'good', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, '---', '5 - 6 1/2', '7 - 8 1/2', '9 - 10 1/2', '11 - 13 1/2', '14+', '---', '---', '4 1/2 - 6 1/2', '7 - 8 1/2', '9 - 10 1/2', '11+', '---', '---', '---', '---', '<p>SPARE SPIKE&#8482; All-Traction&#8482; Footwear is an economical way to reduce slips and falls in winter conditions. SPARE SPIKE&#8482; fits quickly and easily over all types of footwear and increases traction in ice and snow.</p>\r\n\r\n<p>If your employees must walk periodically in slippery outdoor winter conditions, SPARE SPIKE&#8482; is the ideal solution. Lightweight, compact and versatile, the SPARE SPIKE&#8482; will help to greatly reduce the slips and falls that are normally experienced in these conditions</p>\r\n\r\n<p>As it&#8217;s name says, The SPARE SPIKE&#8482; features a convenient extra replacement spike on the upper portion of the device. Accidentally losing a spike from the bottom of any traction device can be dangerous. The SPARE SPIKE&#8217;s extra replacement spike ensures that you&#8217;ll always have a few spares with you to ensure that your crews are always walking safely!</p>', '<ul><li>Aggressive Tread</li>\r\n<li>Replaceable Spikes / Spare Spike&#8482; </li>\r\n<li>Dual Pull Tab</li>\r\n<li>Patented Trim Line&#174; Feature</li>\r\n<li>Lightweight and compact</li>\r\n<li>Easy on/off</li>\r\n<li>Sized XS - XXL</li></ul>', 'img/products/Spare Spike - On Boot/sole-side.png', 'img/products/spare-spike-front.jpg', 'img/products/spare-spike-left.jpg', 'img/products/spare-spike-right.jpg', 'img/products/spare-spike-sole.png', '', '', '', '', 0),
(17, 'JD6272', 'ICEGRIPS Overshoe', 'over shoe boots', '6" | 14" Cuts', 'Nylon', 'Tungsten Studs', 'Insulated Upper', 'traction', 'security', 'indstrength', 'protectionwarmth', '', '', '', '', '', '', '', '', '', '', '', 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '<p>ICEGRIPS Overshoe&#8482; is designed to increase traction in Winter&#8217;s harshest conditions. Available in an un-insulated 6&#8221; low-cut and an insulated 14&#8221; boot, ICEGRIPS Overshoe&#8482; fits quickly and easily over all type of work shoes and boots.</p>\r\n\r\n<p>ICEGRIPS Overshoe&#8482; features molded in tungsten carbide studs for maximum traction and stud retention. The soles feature a patented Angle Tread&#174; design which self-cleans and maximizes surface contact by mimicking the bone alignment of the user&#8217;s foot.</p>\r\n\r\n<p>ICEGRIPS Overshoe&#8482; is extremely lightweight and comfortable. The low-cut features a dual front closure for quick and easy security while the 14&#8221; features a unique rear zipper entry. Both versions are water resistant.</p>\r\n\r\n<p>ICEGRIPS Overshoe&#8482; features a &#189;&#8221; defined heel and clean arch for safer climbing for the industrial worker. ICEGRIPS Overshoe&#8482; is the perfect overshoe to prevent slips and falls for the industrial environment.</p>', '', 'img/products/ICEGRIPS Overshoe/sole-side.png', '', 'img/products/ICEGRIPS Studded/front.png', 'img/products/ICEGRIPS Studded/side.png', 'img/products/ICEGRIPS Studded/sole.png', '', '', '', '', 0),
(18, 'JD912', 'GRIPS', 'over shoe boots', '6" Low Cut', 'PVC', 'Grit', 'NULL', 'versatility', 'security', 'indstrength', 'protectionwarmth', 'good', 'great', 'great', 'good', 'good', 'great', 'great', 'no', 'great', 'great', 'great', 1, 0, 1, 1, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, '', '4 - 5 1/2', '6 - 7', '7 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14 - 15 1/2', '16+', '', '6 - 7 1/2', '8 - 9', '9 - 11 1/2', '12 - 13 1/2', '14+', '---', '---', '<p>GRIPS&reg; Over-the-Shoe All-Traction&#8482; Footwear is designed to increase traction in a variety of slick conditions&#8211;from snow and ice to oil and grease. The sole of GRIPS&reg; features bands of sandpaper-like aluminum oxide that enable GRIPS&reg; to offer increased traction above and beyond that of normal rubber-soled shoes and boots. The sandpaper-like bands are both non-conductive and non-sparking.</p> \r\n<p>GRIPS&reg; are extremely versatile. Not only will they help increase traction in slick conditions, but they are also safe to wear indoors as well as while driving. This makes GRIPS&reg; the perfect solution for a multitude of industrial applications.</p>', '<ul><li>Reduces slips and falls by 40-50%</li>\r\n<li>Aluminum oxide grit provides safe footing</li>\r\n<li>Patented Angle Tred&#174; design maximizes surface contact with self-cleaning feature</li>\r\n<li>One-piece PVC construction for maximum durability and chemical resistance</li>\r\n<li>Extra-wide opening for easiest on and off</li>\r\n<li>Safe to wear while driving</li>\r\n<li>Fits over all types of workshoes and boots</li>\r\n<li>Patented TrimLine&#174; on low cut model for expanded opening</li></ul>', 'img/products/Grips/sole-side.png', 'img/products/grips-6-front.jpg', 'img/products/grips-6-left.jpg', 'img/products/grips-6-right.jpg', 'img/products/Grips/sole.png', '', '', '', '', 0),
(19, 'JD915', 'Altragrips HP''s', 'over shoe boots', '6&quot; | 10&quot; | 15&quot; Cuts', 'PVC', 'Tungsten Studs', 'Studs exposed 2.5mm', 'traction', 'security', 'indstrength', 'protectionwarmth', 'great', 'great', 'n/a', 'good', 'n/a', 'good', 'good', 'great', 'no', 'great', 'good', 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, '', '4 - 5 1/2', '6 - 7', '7 1/2 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14 - 15 1/2', '16+', '', '6 - 7 1/2', '8 - 9', '9 1/2 - 11 1/2', '12 - 13 1/2', '14+', '---', '---', '<p>ALTRAGRIPS&#8482; All-Traction&#8482; Footwear is designed to increase traction in a variety of slick conditions ranging from outdoors in ice and snow to indoors in chemicals and fats. Think of them as indoor/outdoor ice cleats.</p>\r\n<p>Constructed of an industrial-grade PVC, ALTRAGRIPS&#8482; fits over all types of normal work shoes and boots. The traction comes from the 48 tiny tungsten carbide studs that line the soles of ALTRAGRIPS&#8482;.</p>\r\n<p>The tungsten carbide studs are available in both low profile and high profile heights for different walking conditions.</p>', '<ul><li>Reduces slips and falls in virtually all conditions</li>\r\n<li>High profile spikes- Maximum traction for the worst conditions</li>\r\n<li>Spikes constucted of Tungsten Carbide for maximum durability</li>\r\n<li>Unique spike insertion for maximum retention</li>\r\n<li>Patented Angle&reg; Tread sole design maximizes surface contact and self cleans</li>\r\n<li>Available in three different styles: low cut, 10&quot; boot and 15&quot; boot</li>\r\n<li>Extra-wide opening for the easiest on and off</li>\r\n<li>Perfect alternative to traditional ice cleats</li>\r\n<li>Patented TrimLine&reg; on low cut model for expanded opening</li></ul>', 'img/products/Altragrips/sole-side.png', 'img/products/altagrips-6-front.jpg', 'img/products/Altragrips/all.png', 'img/products/Altragrips/side.png', 'img/products/Altragrips/sole.png', '', '', '', '', 0),
(20, 'JD9150', 'Altragrips LP''s', 'over shoe boots', '6&quot; | 10&quot; | 15&quot; Cuts', 'PVC', 'Tungsten Studs', 'Studs exposed 1mm', 'versatility', 'security', 'indstrength', 'protectionwarmth', 'great', 'good', 'n/a', 'good', 'n/a', 'good', 'good', 'no', 'good', 'great', 'great', 0, 1, 1, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, '', '4 - 5 1/2', '6 - 7', '7 1/2 - 9 1/2', '10 - 11 1/2', '12 - 13 1/2', '14 - 15 1/2', '16+', '', '6 - 7 1/2', '8 - 9 ', '9 1/2 - 11 1/2', '12 - 13 1/2', '14+', '---', '---', '<p>ALTRAGRIPS&#8482; All-Traction&#8482; Footwear is designed to increase traction in a variety of slick conditions ranging from outdoors in ice and snow to indoors in chemicals and fats. Think of them as indoor/outdoor ice cleats.</p>\r\n<p>Constructed of an industrial-grade PVC, ALTRAGRIPS&#8482; fits over all types of normal work shoes and boots. The traction comes from the 48 tiny tungsten carbide studs that line the soles of ALTRAGRIPS&#8482;.</p>\r\n<p>The tungsten carbide studs are available in both low profile and high profile heights for different walking conditions.</p>', '<ul><li>Reduces slips and falls in virtually all conditions</li>\r\n<li>High profile spikes- Maximum traction for the worst conditions</li>\r\n<li>Spikes constucted of Tungsten Carbide for maximum durability</li>\r\n<li>Unique spike insertion for maximum retention</li>\r\n<li>Patented Angle&reg; Tread sole design maximizes surface contact and self cleans</li>\r\n<li>Available in three different styles: low cut, 10&quot; boot and 15&quot; boot</li>\r\n<li>Extra-wide opening for the easiest on and off</li>\r\n<li>Perfect alternative to traditional ice cleats</li>\r\n<li>Patented TrimLine&reg; on low cut model for expanded opening</li></ul>', 'img/products/Altragrips/sole-side.png', 'img/products/altagrips-6-front.jpg', 'img/products/Altragrips/all.png', 'img/products/Altragrips/side.png', 'img/products/Altragrips/sole.png', '', '', '', '', 0),
(24, 'NEW1', 'ROTOR OVERSHOE', 'over shoe boots', '6" Low Cut', 'Nylon', 'Steel Studs', '', 'none1', 'none2', 'none3', 'none4', '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, 0, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', '', 'img/products/2.png', '', '', '', '', '', '', '', '', 0),
(25, 'NEW2', 'ROTOR OVERSHOE', 'over shoe boots', '14" Boot', 'Nylon', 'Steel Studs', 'Rotating Traction element', 'none1', 'none2', 'none3', 'none4', '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', '', 'img/products/2.png', '', '', '', '', '', '', '', '', 0),
(26, 'NEW3', 'SINGLEMOLD DEVICE', 'lightweight', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Studs exposed 1mm', 'versatility', 'easyonoff', 'indstrength', 'nocoverage', '', '', '', '', '', '', '', '', '', '', '', 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', '', 'img/products/2.png', '', '', '', '', '', '', '', '', 0),
(27, 'NEW4', 'SINGLEMOLD DEVICE', 'lightweight', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Studs exposed 2.5mm', 'traction', 'easyonoff', 'indstrength', 'nocoverage', '', '', '', '', '', '', '', '', '', '', '', 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', '', 'img/products/2.png', '', '', '', '', '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
