/*
 Navicat Premium Data Transfer

 Source Server         : SAKILA TGSAL
 Source Server Type    : MySQL
 Source Server Version : 50564
 Source Host           : 103.219.112.2:3306
 Source Schema         : sakila_2020_db

 Target Server Type    : MySQL
 Target Server Version : 50564
 File Encoding         : 65001

 Date: 27/08/2020 16:53:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tmbidang
-- ----------------------------
DROP TABLE IF EXISTS `tmbidang`;
CREATE TABLE `tmbidang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_bidang` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_skpd` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmbidang
-- ----------------------------
INSERT INTO `tmbidang` VALUES (1, 'PENANAMAN MODAL', 1);
INSERT INTO `tmbidang` VALUES (2, 'PEMBANGUNAN', 1);
INSERT INTO `tmbidang` VALUES (3, 'EKONOMI', 1);
INSERT INTO `tmbidang` VALUES (4, 'KESEJAHTERAAN RAKYAT', 1);
INSERT INTO `tmbidang` VALUES (5, 'KETENAGAKERJAAN', 1);
INSERT INTO `tmbidang` VALUES (6, 'SOSIAL BUDAYA', 1);
INSERT INTO `tmbidang` VALUES (7, 'Pemeriksaan', 1);

SET FOREIGN_KEY_CHECKS = 1;
