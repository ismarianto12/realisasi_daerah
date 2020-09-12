/*
 Navicat Premium Data Transfer

 Source Server         : SAKILA TGSAL
 Source Server Type    : MySQL
 Source Server Version : 50564
 Source Host           : 103.219.112.2:3306
 Source Schema         : sierpekade_v0_1_proses

 Target Server Type    : MySQL
 Target Server Version : 50564
 File Encoding         : 65001

 Date: 04/09/2020 14:21:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tmrekening_akun_kelompoks
-- ----------------------------
DROP TABLE IF EXISTS `tmrekening_akun_kelompoks`;
CREATE TABLE `tmrekening_akun_kelompoks`  (
  `id` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'menu rekening/kode kelompok',
  `tmrekening_akun_id` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'diambil dari tmrekening_akun',
  `kd_rek_kelompok` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_rek_kelompok` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_rekening` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_akrual` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_aset` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_utang` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dasar_hukum` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `kd_rek_kelompok`(`kd_rek_kelompok`) USING BTREE,
  INDEX `tmrekening_akun_id`(`tmrekening_akun_id`) USING BTREE,
  CONSTRAINT `tmrekening_akun_kelompoks_ibfk_1` FOREIGN KEY (`tmrekening_akun_id`) REFERENCES `tmrekening_akuns` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmrekening_akun_kelompoks
-- ----------------------------
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('11', '1', '11', 'ASET LANCAR', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:29', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('12', '1', '12', 'INVESTASI JANGKA PANJANG', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:36', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('13', '1', '13', 'ASET TETAP', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:36', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('14', '1', '14', 'DANA CADANGAN', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('15', '1', '15', 'ASET LAINNYA', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('21', '2', '21', 'KEWAJIBAN JANGKA PENDEK', NULL, NULL, NULL, NULL, NULL, '', '2020-02-10 09:37:13', 'admin', '2020-02-10 02:23:49');
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('22', '2', '22', 'KEWAJIBAN JANGKA PANJANG', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:49', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('31', '3', '31', 'EKUITAS', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:49', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('41', '4', '41', 'PENDAPATAN ASLI DAERAH (PAD)', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:49', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('42', '4', '42', 'PENDAPATAN TRANSFER', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:53', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('43', '4', '43', 'LAIN-LAIN PENDAPATAN DAERAH YANG SAH', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:54', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('51', '5', '51', 'BELANJA OPERASI', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:54', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('52', '5', '52', 'BELANJA MODAL', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('53', '5', '53', 'BELANJA TIDAK TERDUGA', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:11', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('54', '5', '54', 'BELANJA TRANSFER', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:11', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('61', '6', '61', 'PENERIMAAN PEMBIAYAAN', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:11', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('62', '6', '62', 'PENGELUARAN PEMBIAYAAN', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:14', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('71', '7', '71', 'PENDAPATAN ASLI DAERAH (PAD)-LO', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:15', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('72', '7', '72', 'PENDAPATAN TRANSFER-LO', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:21', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('73', '7', '73', 'LAIN-LAIN PENDAPATAN DAERAH YANG SAHÂ­LO', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:22', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('74', '7', '74', 'SURPLUS NON OPERASIONAL-LO', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:22', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('81', '8', '81', 'BEBAN OPERASI', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:23', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('82', '8', '82', 'Beban Penyusutan dan Amortisasi', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:34', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('83', '8', '83', 'BEBAN TRANSFER', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:39', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('84', '8', '84', 'BEBAN TAK TERDUGA', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:40', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('85', '8', '85', 'DEFISIT NON OPERASIONAL-LO', NULL, NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:40', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('91', '9', '91', 'PENERIMAAN PERHITUNGAN FIHAK KETIGA (PFK)', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-07-16 06:43:23', NULL, '2020-07-16 06:43:23');
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('92', '9', '92', 'PENGELUARAN PERHITUNGAN FIHAK KETIGA (PFK)', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-07-16 06:43:23', NULL, '2020-07-16 06:43:23');

SET FOREIGN_KEY_CHECKS = 1;
