/*
 Navicat Premium Data Transfer

 Source Server         : lumbungkarya [Lokal]
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : bioskop

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 18/08/2022 06:46:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bioskop
-- ----------------------------
DROP TABLE IF EXISTS `bioskop`;
CREATE TABLE `bioskop`  (
  `kode` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kota_id` bigint(20) NOT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`kode`) USING BTREE,
  INDEX `kota_id`(`kota_id`) USING BTREE,
  CONSTRAINT `bioskop_ibfk_1` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bioskop
-- ----------------------------
INSERT INTO `bioskop` VALUES ('ARA', 'Araya XXI', 'Plaza Araya Lt. 2, Jl. Blimbing Indah Megah 2', 1, NULL);
INSERT INTO `bioskop` VALUES ('LEN', 'Lenmarc XXI', 'Lenmarc Mall Lt 4, Jl Raya Lontar Bukit Darmo Golf', 2, NULL);
INSERT INTO `bioskop` VALUES ('TRA', 'Transmart MX Mall XXI', 'Mall Transmart Lt. 5 Jl. Veteran Penanggungan, Klojen, Kota Malang, Jawa Timur 65113', 1, NULL);

-- ----------------------------
-- Table structure for film
-- ----------------------------
DROP TABLE IF EXISTS `film`;
CREATE TABLE `film`  (
  `kode` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_launc` date NOT NULL,
  `synopsys` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`kode`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of film
-- ----------------------------
INSERT INTO `film` VALUES ('FL002', 'Fall', '2022-08-17', 'Becky (Grace Caroline Currey) dan Hunter (Virginia Gardner) adalah dua orang yang suka menghadapi ketakutan dan suka menantang diri mereka hingga batas terakhir.Tetapi, setelah mereka memanjat sebuah tower radio terbengkalai setinggi 600-an meter, mereka menemukan diri mereka terjebak di atas tanpa jalan turun. Becky dan Hunter yang sudah mahir dalam panjat tebing harus bertahan dengan peralatan dan perlengkapan yang terbatas. Ditambah ketakutan yang tak terbayangkan, mereka harus bisa bertahan dalam tes tersulit yang pernah mereka hadapi.', NULL);
INSERT INTO `film` VALUES ('NP001', 'Nope', '2022-08-17', 'Kisah soal fenomena misterius dan mengerikan yang terjadi di pedalaman California, Amerika Serikat. Dua kakak adik, OJ Haywood (Daniel Kaluuya) dan Emerald Haywood (Keke Palmer) berusaha mencari bukti kehadiran UFO dengan merekam kedatangannya. Bersama penduduk desa mereka berjuang untuk menyelamatkan diri dan mencari jawaban atas fenomena aneh itu.', NULL);
INSERT INTO `film` VALUES ('PC001', 'Pengabdi Setan 2 Communion', '2022-08-17', 'Beberapa tahun setelah berhasil menyelamatkan diri dari kejadian mengerikan yang membuat mereka kehilangan ibu dan si bungsu Ian, Rini dan adik-adiknya, Toni dan Bondi, serta Bapak tinggal di rumah susun karena percaya tinggal di rumah susun aman jika terjadi sesuatu karena ada banyak orang. Namun, mereka segera menyadari bahwa tinggal bersama banyak orang mungkin juga sangat berbahaya, jika mereka tidak sangat mengenali siapa saja yang menjadi tetangga mereka. Pada sebuah malam penuh teror, Rini dan Keluarganya harus kembali menyelamatkan diri. Tapi kali ini, mungkin sudah terlambat untuk lari.', NULL);

-- ----------------------------
-- Table structure for jadwal
-- ----------------------------
DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal`  (
  `kode` varchar(26) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `film_kode` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bioskop_kode` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `waktu` datetime(0) NOT NULL,
  `kuota` bigint(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`kode`) USING BTREE,
  INDEX `film_kode`(`film_kode`) USING BTREE,
  INDEX `bioskop_kode`(`bioskop_kode`) USING BTREE,
  CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`film_kode`) REFERENCES `film` (`kode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`bioskop_kode`) REFERENCES `bioskop` (`kode`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jadwal
-- ----------------------------
INSERT INTO `jadwal` VALUES ('ARA202208171300NP00100001', 'NP001', 'ARA', '2022-08-17 13:00:00', 259, 40000, NULL);
INSERT INTO `jadwal` VALUES ('LEN202208171405FL00200002', 'FL002', 'LEN', '2022-08-17 14:05:00', 200, 50000, NULL);

-- ----------------------------
-- Table structure for kota
-- ----------------------------
DROP TABLE IF EXISTS `kota`;
CREATE TABLE `kota`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kota
-- ----------------------------
INSERT INTO `kota` VALUES (1, 'Kota Malang', NULL);
INSERT INTO `kota` VALUES (2, 'Kota Surabaya', NULL);
INSERT INTO `kota` VALUES (3, 'Kota Jakarta', NULL);

-- ----------------------------
-- Table structure for reservasi
-- ----------------------------
DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE `reservasi`  (
  `kode` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '[3 digit kode bioskop][waktu dalam detik][3 digit nomor urut]',
  `jadwal_kode` varchar(26) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`kode`) USING BTREE,
  INDEX `jadwal_kode`(`jadwal_kode`) USING BTREE,
  CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`jadwal_kode`) REFERENCES `jadwal` (`kode`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reservasi
-- ----------------------------
INSERT INTO `reservasi` VALUES ('ARA1660608000001', 'ARA202208171300NP00100001', 1);
INSERT INTO `reservasi` VALUES ('LEN1660731420002', 'LEN202208171405FL00200002', 2);

SET FOREIGN_KEY_CHECKS = 1;
