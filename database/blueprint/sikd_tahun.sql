/*
 Navicat Premium Data Transfer

 Source Server         : SAKILA TGSAL
 Source Server Type    : MySQL
 Source Server Version : 50564
 Source Host           : 103.219.112.2:3306
 Source Schema         : simraldata2019

 Target Server Type    : MySQL
 Target Server Version : 50564
 File Encoding         : 65001

 Date: 04/09/2020 14:37:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for sikd_tahun
-- ----------------------------
DROP TABLE IF EXISTS `sikd_tahun`;
CREATE TABLE `sikd_tahun`  (
  `id_sikd_tahun` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `creation_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_updated_date` datetime NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_sikd_tahun`) USING BTREE,
  UNIQUE INDEX `thn`(`tahun`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sikd_tahun
-- ----------------------------
INSERT INTO `sikd_tahun` VALUES ('36742019', '2019', 'admin', '2010-02-05 00:00:00', NULL, '0000-00-00 00:00:00');

SET FOREIGN_KEY_CHECKS = 1;
