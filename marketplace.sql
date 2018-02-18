/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : marketplace

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-02-18 23:40:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for kurirs
-- ----------------------------
DROP TABLE IF EXISTS `kurirs`;
CREATE TABLE `kurirs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kurir_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kurir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kurirs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2018_01_17_143410_create_members_table', '1');
INSERT INTO `migrations` VALUES ('4', '2018_01_17_152100_create_stores_table', '1');
INSERT INTO `migrations` VALUES ('5', '2018_01_17_152129_create_products_table', '1');
INSERT INTO `migrations` VALUES ('6', '2018_01_20_040257_create_orders_table', '1');
INSERT INTO `migrations` VALUES ('7', '2018_01_27_052900_create_tracking_numbers_table', '2');
INSERT INTO `migrations` VALUES ('8', '2018_01_27_053204_create_kurirs_table', '3');

-- ----------------------------
-- Table structure for m_employee
-- ----------------------------
DROP TABLE IF EXISTS `m_employee`;
CREATE TABLE `m_employee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nik` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_employee
-- ----------------------------
INSERT INTO `m_employee` VALUES ('1', '1001', 'Administrator', '-', '-', '-');
INSERT INTO `m_employee` VALUES ('2', '1002', 'Mahmud', 'Jl.Pisangan Baru III', '08975563343', 'mahmud@mail.com');
INSERT INTO `m_employee` VALUES ('3', '1003', 'Nurman', 'Jl.Kedoya', '089678545499', 'nurman@gmail.com');
INSERT INTO `m_employee` VALUES ('4', '1005', 'Wahyu', 'Jl.Nangka', '089643487966', 'wahyu@gmail.com');
INSERT INTO `m_employee` VALUES ('5', '1006', 'Romi', 'Jl.Tipar Cakung', '089734526374', 'romi@gmail.com');
INSERT INTO `m_employee` VALUES ('7', '0893', 'Joni Super', 'Jl.Naga', '089674954034', 'jons@mail.com');
INSERT INTO `m_employee` VALUES ('8', '76457346500', 'Juhardi Hamzah', 'Jl.Nangka 20', '089785345345', 'juhardihamsyah2@gmail.com');
INSERT INTO `m_employee` VALUES ('9', '329842384', 'Reza Aki', 'Jl.Kuya', '0218345349', 'rezaki@gmail.com');

-- ----------------------------
-- Table structure for m_member
-- ----------------------------
DROP TABLE IF EXISTS `m_member`;
CREATE TABLE `m_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of m_member
-- ----------------------------
INSERT INTO `m_member` VALUES ('1', 'MBR-02180001', 'Juhardi Hamsyahx', '08216465', 'buaran', 'admin@gmail.com', 'member', 'admin', '$2y$10$whdwPQdyj14cWde3/iAzOuPs2hPqVAvFGcwKYH2MYVuZ4PKZQYY6W', '0', 'f8271808b85e5de68df3b7621e1715eee69ea669', '2018-02-09 07:02:26', '2018-02-11 18:26:11');
INSERT INTO `m_member` VALUES ('2', 'MBR-02180002', 'juhardi', '02116151', 'uihasiuhdiuashd', 'juhardi@gmail.com', 'member', 'juhardi hamsyah', '$2y$10$C8WORo4bI8AytDPwDymtvOhXChxIfra57xWjA86/HKccMUhP9eiuW', '0', 'd85deed31db01db8c3268088f107cc0e0e9bc434', '2018-02-09 07:19:54', '2018-02-09 07:20:21');
INSERT INTO `m_member` VALUES ('3', 'MBR-02180003', 'juhardi', '221356156', 'qweqeq', 'qweqeq', 'member', 'juhardi hamsyah', '$2y$10$Zcb7wA2zxmgKTzZosInhnucVggRjOIbYMoVGsWW/Z4ZsQjhdWcl/i', '0', 'fe57756007f54253145dbdfd72b7f0cd6d0dc3ca', '2018-02-09 08:05:04', '2018-02-09 08:10:09');
INSERT INTO `m_member` VALUES ('4', 'MBR-02180004', 'admin', '31321', 'jadasd', 'ada@hbajsbd', 'member', 'admin', '$2y$10$cHTjdi9dq6/5akI8DJKTmusluzUf2q0bLGqotsVs.3hYlM9Ttw8LO', '0', 'f8271808b85e5de68df3b7621e1715eee69ea669', '2018-02-11 18:25:46', '2018-02-11 18:26:11');
INSERT INTO `m_member` VALUES ('5', '76457346500', 'Juhardi Hamzah', '089785345345', 'Jl.Nangka 20', 'juhardihamsyah2@gmail.com', '', '', '', '', null, null, null);
INSERT INTO `m_member` VALUES ('13', '789987', 'Brisia Jodie', '021804432', 'Jl.Jambu', 'jodie.brisia@gmail.com', null, null, null, null, null, null, null);
INSERT INTO `m_member` VALUES ('14', 'MBR05', 'Yuma Akbar', '021894365', 'Jl.Depok', 'yumekhan@gmail.com', null, null, null, null, null, null, null);
INSERT INTO `m_member` VALUES ('15', 'MBR06', 'Umay Shahab', '0217345345', 'Jl.Yuyu', 'umay@mail.com', null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for m_product
-- ----------------------------
DROP TABLE IF EXISTS `m_product`;
CREATE TABLE `m_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_store` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `product_category` varchar(100) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_variants` varchar(100) DEFAULT NULL,
  `product_photo` varchar(255) DEFAULT NULL,
  `stok` int(20) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_product
-- ----------------------------
INSERT INTO `m_product` VALUES ('22', '15', null, 'PR012', 'Sembako', 'Minyak Tanah', '1 Liter', 'ee.png', '10', null, null);
INSERT INTO `m_product` VALUES ('23', '15', null, 'G02', 'BBM Rumah tangga', 'Gas Elpiji', '12 Kg', 'head.png', '20', null, null);
INSERT INTO `m_product` VALUES ('24', '18', null, 'P01', 'Performance', 'NOS Big High Oxide', '1 Kg ', 'nos-14745nos_xl.jpg', '10', null, null);
INSERT INTO `m_product` VALUES ('25', '18', null, 'PY09', 'Performance Intake', 'Nitrous Express', '1 Kg', '744-20420-10.jpg', '20', null, null);

-- ----------------------------
-- Table structure for m_service_center
-- ----------------------------
DROP TABLE IF EXISTS `m_service_center`;
CREATE TABLE `m_service_center` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_sc` varchar(255) DEFAULT NULL,
  `nama_sc` varchar(255) DEFAULT NULL,
  `alamat_sc` text,
  `pic_sc` varchar(255) DEFAULT NULL,
  `telp_sc` text,
  `email_sc` varchar(255) DEFAULT NULL,
  `foto_sc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_service_center
-- ----------------------------
INSERT INTO `m_service_center` VALUES ('11', 'KJBT', 'SC Bekasi Timur', 'Jl.MGT Raya', 'Udin Nganga', '08934453499', 'scbt@mail.com', 'Service_center_LG_Electronics_semarang.jpg');

-- ----------------------------
-- Table structure for m_store
-- ----------------------------
DROP TABLE IF EXISTS `m_store`;
CREATE TABLE `m_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` varchar(100) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `store_name` varchar(100) DEFAULT NULL,
  `store_address` varchar(100) DEFAULT NULL,
  `store_phone_number` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_store
-- ----------------------------
INSERT INTO `m_store` VALUES ('15', 'S02', '3', 'Toko Megah Jaya', 'Jl.Margasari', '021974354', null, null);
INSERT INTO `m_store` VALUES ('18', 'KT009', null, 'Toko Alibaba', 'Jl.Xin Jiang', '021943434', null, null);

-- ----------------------------
-- Table structure for m_user
-- ----------------------------
DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `update_at` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pegawai` (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_user
-- ----------------------------
INSERT INTO `m_user` VALUES ('24', 'admin', '0cc175b9c0f1b6a831c399e269772661', '1', '1', null, null, null);
INSERT INTO `m_user` VALUES ('41', 'juhardi', '0cc175b9c0f1b6a831c399e269772661', '8', '1', null, null, null);
INSERT INTO `m_user` VALUES ('42', 'rezaki', '0cc175b9c0f1b6a831c399e269772661', '9', '2', null, null, null);
INSERT INTO `m_user` VALUES ('43', 'brisiax', '0cc175b9c0f1b6a831c399e269772661', '13', '2', null, null, null);
INSERT INTO `m_user` VALUES ('46', 'member', '0cc175b9c0f1b6a831c399e269772661', '14', '3', null, null, null);
INSERT INTO `m_user` VALUES ('47', 'edwin', '0cc175b9c0f1b6a831c399e269772661', '2', '3', null, null, null);
INSERT INTO `m_user` VALUES ('48', 'yuma', '0cc175b9c0f1b6a831c399e269772661', '14', '2', null, null, null);
INSERT INTO `m_user` VALUES ('49', 'umay', '0cc175b9c0f1b6a831c399e269772661', '15', '2', null, null, null);

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('3', 'OR01', 'PR012', '76457346500', 'S02', '10', '1000000', '2018-02-18 21:07:38', null);
INSERT INTO `orders` VALUES ('4', 'OR02', 'G02', '789987', 'KT009', '1', '150000', '2018-02-18 21:07:38', null);
INSERT INTO `orders` VALUES ('5', 'OR03', 'PY09', 'MBR05', 'KT009', '1', '2500000', '2018-02-18 21:07:38', null);
INSERT INTO `orders` VALUES ('6', 'OR04', 'P01', 'MBR05', 'KT009', '1', '3500000', '2018-02-18 21:07:38', null);
INSERT INTO `orders` VALUES ('7', 'OR05', 'P01', 'MBR05', 'KT009', '1', '3500000', '2018-02-18 21:07:38', null);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_variants` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'PRD-01180001', 'M01', 'S01', 'uploads/S01P-0118PRD-01180001-M01-S01.jpg', 'Beras', 'aaa', 'a', '12', '2018-01-26 19:04:39', '2018-01-26 19:04:39');

-- ----------------------------
-- Table structure for stores
-- ----------------------------
DROP TABLE IF EXISTS `stores`;
CREATE TABLE `stores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `store_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of stores
-- ----------------------------

-- ----------------------------
-- Table structure for tracking_numbers
-- ----------------------------
DROP TABLE IF EXISTS `tracking_numbers`;
CREATE TABLE `tracking_numbers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kurir_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tracking_numbers
-- ----------------------------
INSERT INTO `tracking_numbers` VALUES ('1', null, 'OR01', '789987', null, 'MANIFEST  BANDUNG', null, '2018-02-18 22:15:46');
INSERT INTO `tracking_numbers` VALUES ('3', null, 'OR03', 'MBR05', '1', 'SAMPAI DITUJUAN', null, '2018-02-18 22:11:42');
INSERT INTO `tracking_numbers` VALUES ('5', null, 'OR05', 'MBR05', null, null, null, null);

-- ----------------------------
-- Table structure for trans_assign
-- ----------------------------
DROP TABLE IF EXISTS `trans_assign`;
CREATE TABLE `trans_assign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_claim` int(10) DEFAULT NULL,
  `id_pic` int(10) DEFAULT NULL,
  `priority` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date_assign` varchar(255) DEFAULT NULL,
  `note` text,
  `date_after_assign` date DEFAULT NULL,
  `note_after_assign` text,
  `photo_before_assign` varchar(255) DEFAULT NULL,
  `photo_after_assign` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of trans_assign
-- ----------------------------
INSERT INTO `trans_assign` VALUES ('3', '7', '5', 'medium', 'pending', '2017-08-30', 'YES I DO', '2017-08-30', 'YES I DO', '8840f2dd1335f8f0421b5dd27482882a.jpg', '10407414_1641065012847023_5501612007231766751_n.jpg');

-- ----------------------------
-- Table structure for trans_claim
-- ----------------------------
DROP TABLE IF EXISTS `trans_claim`;
CREATE TABLE `trans_claim` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(255) DEFAULT NULL,
  `nama_pelanggan` varchar(255) DEFAULT NULL,
  `alamat_pelanggan` text,
  `telp_pelanggan` text,
  `email_pelanggan` varchar(255) DEFAULT NULL,
  `id_product` int(10) DEFAULT NULL,
  `jenis_keluhan` varchar(10) DEFAULT NULL,
  `jenis_keluhan_other` text,
  `foto_keluhan` varchar(255) DEFAULT NULL,
  `catatan` text,
  `date_insert` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of trans_claim
-- ----------------------------
INSERT INTO `trans_claim` VALUES ('7', 'CU0000001', 'Okki Setyawan', 'Jl.Bintara IX No.82', '089610595064', 'okkisetyawan@gmail.com', '0', 'service', '-', null, 'OKE', '2017-08-15 00:00:00');

-- ----------------------------
-- Table structure for t_assign_result
-- ----------------------------
DROP TABLE IF EXISTS `t_assign_result`;
CREATE TABLE `t_assign_result` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_assign` int(10) DEFAULT NULL,
  `id_pic` int(10) DEFAULT NULL,
  `date_after_assign` date DEFAULT NULL,
  `note_after_assign` text,
  `photo_before_assign` varchar(255) DEFAULT NULL,
  `photo_after_assign` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_assign_result
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Eko', 'eko@dev.com', '$2y$10$8IrPW/nkPJ15V1ztMZT4g.B5fVvlz3B32IraD8qr2SAM157cTRQTq', 'dxYd5937fG5bZukU1etqPns90wYu04v9NUXbq8fN7lBElRFIi8rhW1ywsyGS', '2018-01-27 21:57:41', '2018-01-27 21:57:41');
INSERT INTO `users` VALUES ('2', 'admin', 'admin@gmail.com', '$2y$10$Y8JQFLNQeXi.ssiZso3S5eNQKW1Vt/ryfadhMWk.je8UdBhtk8kba', null, '2018-02-05 16:57:50', '2018-02-05 16:57:50');
