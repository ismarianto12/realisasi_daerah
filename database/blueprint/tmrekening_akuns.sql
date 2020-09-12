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

 Date: 04/09/2020 14:22:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tmrekening_akuns
-- ----------------------------
DROP TABLE IF EXISTS `tmrekening_akuns`;
CREATE TABLE `tmrekening_akuns`  (
  `id` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'menu rekening/kode akun',
  `kd_rek_akun` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `nm_rek_akun` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_rekening` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_akrual` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_aset` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_utang` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `neraca` tinyint(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `kd_rek_akun`(`kd_rek_akun`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmrekening_akuns
-- ----------------------------
INSERT INTO `tmrekening_akuns` VALUES ('1', '1', 'ASET', NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:29', NULL, NULL, NULL);
INSERT INTO `tmrekening_akuns` VALUES ('2', '2', 'KEWAJIBAN', NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:48', NULL, NULL, NULL);
INSERT INTO `tmrekening_akuns` VALUES ('3', '3', 'EKUITAS', NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:49', NULL, NULL, NULL);
INSERT INTO `tmrekening_akuns` VALUES ('4', '4', 'PENDAPATAN DAERAH', NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:49', NULL, NULL, NULL);
INSERT INTO `tmrekening_akuns` VALUES ('5', '5', 'BELANJA DAERAH', NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:54', NULL, NULL, NULL);
INSERT INTO `tmrekening_akuns` VALUES ('6', '6', 'PEMBIAYAAN DAERAH', NULL, NULL, NULL, NULL, '', '2020-02-11 15:33:00', 'admin', '2020-02-11 08:19:34', NULL);
INSERT INTO `tmrekening_akuns` VALUES ('7', '7', 'PENDAPATAN DAERAH-LO', NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:15', NULL, NULL, NULL);
INSERT INTO `tmrekening_akuns` VALUES ('8', '8', 'BEBAN DAERAH', NULL, NULL, NULL, NULL, '', '2020-02-03 16:12:23', NULL, NULL, NULL);
INSERT INTO `tmrekening_akuns` VALUES ('9', '9', 'PERHITUNGAN FIHAK KETIGA (PFK)', NULL, NULL, NULL, NULL, 'admin', '2020-07-16 03:45:41', NULL, '2020-07-16 03:45:41', NULL);

SET FOREIGN_KEY_CHECKS = 1;
