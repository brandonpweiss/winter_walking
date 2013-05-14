-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2013 at 09:49 PM
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
  `model` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `upper_style` varchar(50) NOT NULL,
  `upper_material` varchar(50) NOT NULL,
  `traction` varchar(50) NOT NULL,
  `feature_note` varchar(50) NOT NULL,
  `traction_versatility` varchar(11) NOT NULL,
  `easyonoff_security` varchar(9) NOT NULL,
  `economical_indstrength` varchar(11) NOT NULL,
  `protectionwarmth_nocoverage` varchar(16) NOT NULL,
  `small` tinyint(1) NOT NULL,
  `med` tinyint(1) NOT NULL,
  `large` tinyint(1) NOT NULL,
  `extra_large` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `img_url` varchar(30) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  PRIMARY KEY (`model`),
  UNIQUE KEY `model_3` (`model`),
  KEY `model` (`model`),
  KEY `model_2` (`model`),
  KEY `model_4` (`model`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`model`, `name`, `upper_style`, `upper_material`, `traction`, `feature_note`, `traction_versatility`, `easyonoff_security`, `economical_indstrength`, `protectionwarmth_nocoverage`, `small`, `med`, `large`, `extra_large`, `description`, `img_url`, `featured`) VALUES
('JD1022', 'GRIPS', '15" Boot', 'PVC', 'Grit', 'NULL', 'versatility', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, aliquam, iste, dolore omnis quasi dolorem eius blanditiis qui odio asperiores non nisi officiis voluptates. Pariatur, officia facere ipsam vitae totam cupiditate voluptatibus eos nostrum adipisci modi dignissimos atque sunt laborum debitis molestias autem voluptatem? Voluptatum non fuga facere nesciunt. Voluptatibus, dignissimos, esse ipsa a culpa itaque excepturi commodi tempora quidem perferendis vitae est facilis sit beatae repellat in aliquam. Quia, suscipit harum vitae nam molestias.', 'img/products/2.png', 0),
('JD1025', 'Altragrips HP''s', '15" Boot', 'PVC', 'Tungsten Studs', 'Studs exposed 2.5mm', 'traction', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD10250', 'Altragrips LP''s', '15" Boot', 'PVC', 'Tungsten Studs', 'Studs exposed 1mm', 'versatility', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD1226', 'Grippers for Strippers', '6" Low Cut', 'PVC', 'Vinyl Loop', 'For Indoor Only', 'none', 'security', 'indstrength', 'none', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD2226', 'Grippers for Strippers-Lite', '6" Low Cut', 'Latex', 'Vinyl Loop', 'For Indoor Only', 'none', 'security', 'economical', 'none', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD250', 'HEEL-GRIPS', 'Heel Only', 'Plastic with Web', 'Tungsten Studs', 'NULL', 'traction', 'easyonoff', 'economical', 'nocoverage', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD3500', 'GRIP-X', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Replaceable Studs', 'traction', 'easyonoff', 'indstrength', 'nocoverage', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, aliquam, iste, dolore omnis quasi dolorem eius blanditiis qui odio asperiores non nisi officiis voluptates. Pariatur, officia facere ipsam vitae totam cupiditate voluptatibus eos nostrum adipisci modi dignissimos atque sunt laborum debitis molestias autem voluptatem? Voluptatum non fuga facere nesciunt. Voluptatibus, dignissimos, esse ipsa a culpa itaque excepturi commodi tempora quidem perferendis vitae est facilis sit beatae repellat in aliquam. Quia, suscipit harum vitae nam molestias.', 'img/products/2.png', 0),
('JD3612', 'GRIPS-Lite', 'Stretch Device', 'Rubber', 'Grit', 'NULL', 'versatility', 'easyonoff', 'indstrength', 'nocoverage', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, aliquam, iste, dolore omnis quasi dolorem eius blanditiis qui odio asperiores non nisi officiis voluptates. Pariatur, officia facere ipsam vitae totam cupiditate voluptatibus eos nostrum adipisci modi dignissimos atque sunt laborum debitis molestias autem voluptatem? Voluptatum non fuga facere nesciunt. Voluptatibus, dignissimos, esse ipsa a culpa itaque excepturi commodi tempora quidem perferendis vitae est facilis sit beatae repellat in aliquam. Quia, suscipit harum vitae nam molestias.', 'img/products/2.png', 0),
('JD3615', 'Altragrips-Lite LP''s', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Studs exposed 1mm', 'versatility', 'easyonoff', 'indstrength', 'nocoverage', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD36159', 'Altragrips-Lite HP''s', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Studs exposed 2.5mm', 'traction', 'easyonoff', 'indstrength', 'nocoverage', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD4022', 'GRIPS Over the Sock', 'Over the Sock Plain Toe', 'Blend', 'Grit', 'NULL', 'versatility', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, aliquam, iste, dolore omnis quasi dolorem eius blanditiis qui odio asperiores non nisi officiis voluptates. Pariatur, officia facere ipsam vitae totam cupiditate voluptatibus eos nostrum adipisci modi dignissimos atque sunt laborum debitis molestias autem voluptatem? Voluptatum non fuga facere nesciunt. Voluptatibus, dignissimos, esse ipsa a culpa itaque excepturi commodi tempora quidem perferendis vitae est facilis sit beatae repellat in aliquam. Quia, suscipit harum vitae nam molestias.', 'img/products/2.png', 0),
('JD4122', 'GRIPS Over the Sock', 'Over the Sock Steel Toe', 'Blend', 'Grit', 'NULL', 'versatility', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, aliquam, iste, dolore omnis quasi dolorem eius blanditiis qui odio asperiores non nisi officiis voluptates. Pariatur, officia facere ipsam vitae totam cupiditate voluptatibus eos nostrum adipisci modi dignissimos atque sunt laborum debitis molestias autem voluptatem? Voluptatum non fuga facere nesciunt. Voluptatibus, dignissimos, esse ipsa a culpa itaque excepturi commodi tempora quidem perferendis vitae est facilis sit beatae repellat in aliquam. Quia, suscipit harum vitae nam molestias.', 'img/products/2.png', 0),
('JD4472', 'ICEGRIPS', 'Sandal', 'TPU with Polyester Web', 'Tungsten Studs', 'NULL', 'traction', 'security', 'indstrength', 'no coverage', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD4499', 'ICEGRIPS Rotor', 'Sandal', 'TPU with Polyester Web', 'Steel Studs', 'Rotating Traction element', 'both', 'security', 'indstrength', 'nocoverage', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD510', 'Spare Spike', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Replaceable Studs', 'traction', 'easyonoff', 'economical', 'nocoverage', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, aliquam, iste, dolore omnis quasi dolorem eius blanditiis qui odio asperiores non nisi officiis voluptates. Pariatur, officia facere ipsam vitae totam cupiditate voluptatibus eos nostrum adipisci modi dignissimos atque sunt laborum debitis molestias autem voluptatem? Voluptatum non fuga facere nesciunt. Voluptatibus, dignissimos, esse ipsa a culpa itaque excepturi commodi tempora quidem perferendis vitae est facilis sit beatae repellat in aliquam. Quia, suscipit harum vitae nam molestias.', 'img/products/2.png', 0),
('JD5272', 'ICEGRIPS Overshoe', '6" Low Cut', 'Nylon', 'Tungsten Studs', 'NULL', 'traction', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD6272', 'ICEGRIPS Overshoe', '14" Boot', 'Nylon', 'Tungsten Studs', 'Insulated Upper', 'traction', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD912', 'GRIPS', '6" Low Cut', 'PVC', 'Grit', 'NULL', 'versatility', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, aliquam, iste, dolore omnis quasi dolorem eius blanditiis qui odio asperiores non nisi officiis voluptates. Pariatur, officia facere ipsam vitae totam cupiditate voluptatibus eos nostrum adipisci modi dignissimos atque sunt laborum debitis molestias autem voluptatem? Voluptatum non fuga facere nesciunt. Voluptatibus, dignissimos, esse ipsa a culpa itaque excepturi commodi tempora quidem perferendis vitae est facilis sit beatae repellat in aliquam. Quia, suscipit harum vitae nam molestias.', 'img/products/2.png', 0),
('JD915', 'Altragrips HP''s', '6" Low Cut', 'PVC', 'Tungsten Studs', 'Studs exposed 2.5mm', 'traction', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD9150', 'Altragrips LP''s', '6" Low Cut', 'PVC', 'Tungsten Studs', 'Studs exposed 1mm', 'versatility', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD922', 'GRIPS', '10" Boot', 'PVC', 'Grit', 'NULL', 'versatility', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, aliquam, iste, dolore omnis quasi dolorem eius blanditiis qui odio asperiores non nisi officiis voluptates. Pariatur, officia facere ipsam vitae totam cupiditate voluptatibus eos nostrum adipisci modi dignissimos atque sunt laborum debitis molestias autem voluptatem? Voluptatum non fuga facere nesciunt. Voluptatibus, dignissimos, esse ipsa a culpa itaque excepturi commodi tempora quidem perferendis vitae est facilis sit beatae repellat in aliquam. Quia, suscipit harum vitae nam molestias.', 'img/products/2.png', 0),
('JD925', 'Altragrips HP''s', '10" Boot', 'PVC', 'Tungsten Studs', 'Studs exposed 2.5mm', 'traction', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('JD9250', 'Altragrips LP''s', '10" Boot', 'PVC', 'Tungsten Studs', 'Studs exposed 1mm', 'versatility', 'security', 'indstrength', 'protectionwarmth', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('NEW1', 'ROTOR OVERSHOE', '6" Low Cut', 'Nylon', 'Steel Studs', '', 'none', 'none', 'none', 'none', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('NEW2', 'ROTOR OVERSHOE', '14" Boot', 'Nylon', 'Steel Studs', 'Rotating Traction element', 'none', 'none', 'none', 'none', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('NEW3', 'SINGLEMOLD DEVICE', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Studs exposed 1mm', 'versatility', 'easyonoff', 'indstrength', 'nocoverage', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('NEW4', 'SINGLEMOLD DEVICE', 'Stretch Device', 'Rubber', 'Tungsten Studs', 'Studs exposed 2.5mm', 'traction', 'easyonoff', 'indstrength', 'nocoverage', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0),
('NEW5', 'RING DEVICE', 'Stretch Device', 'Rubber with Chains', 'Tungsten Studs', 'NULL', 'traction', 'easyonoff', 'indstrength', 'nocoverage', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex corporis rem. Optio, temporibus, odit, dignissimos possimus voluptatibus reiciendis pariatur porro atque repellat iusto voluptas molestiae fugit illo quasi quisquam commodi velit similique voluptate error!', 'img/products/2.png', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
