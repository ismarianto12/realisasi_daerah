/*
 Navicat Premium Data Transfer

 Source Server         : SAKILA TGSAL
 Source Server Type    : MySQL
 Source Server Version : 50564
 Source Host           : 103.219.112.2:3306
 Source Schema         : retribusi_bapenda2020

 Target Server Type    : MySQL
 Target Server Version : 50564
 File Encoding         : 65001

 Date: 23/10/2020 13:30:23
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for obj_ids
-- ----------------------------
DROP TABLE IF EXISTS `obj_ids`;
CREATE TABLE `obj_ids`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `y` tinyint(4) NULL DEFAULT NULL,
  `m` tinyint(4) NULL DEFAULT NULL,
  `d` tinyint(4) NULL DEFAULT NULL,
  `h` tinyint(4) NULL DEFAULT NULL,
  `i` tinyint(4) NULL DEFAULT NULL,
  `s` tinyint(4) NULL DEFAULT NULL,
  `no` bigint(20) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 219 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of obj_ids
-- ----------------------------
INSERT INTO `obj_ids` VALUES (1, 19, 9, 5, NULL, NULL, NULL, 7);
INSERT INTO `obj_ids` VALUES (2, 19, 9, 6, NULL, NULL, NULL, 34);
INSERT INTO `obj_ids` VALUES (3, 19, 9, 9, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (4, 19, 9, 10, NULL, NULL, NULL, 34);
INSERT INTO `obj_ids` VALUES (5, 19, 9, 11, NULL, NULL, NULL, 63);
INSERT INTO `obj_ids` VALUES (6, 19, 9, 13, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (7, 19, 9, 16, NULL, NULL, NULL, 12);
INSERT INTO `obj_ids` VALUES (12, 19, 9, 17, NULL, NULL, NULL, 10);
INSERT INTO `obj_ids` VALUES (13, 19, 9, 18, NULL, NULL, NULL, 28);
INSERT INTO `obj_ids` VALUES (14, 19, 9, 19, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (15, 19, 9, 20, NULL, NULL, NULL, 34);
INSERT INTO `obj_ids` VALUES (16, 19, 9, 23, NULL, NULL, NULL, 11);
INSERT INTO `obj_ids` VALUES (17, 19, 9, 24, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (18, 19, 9, 26, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (19, 19, 10, 1, NULL, NULL, NULL, 4);
INSERT INTO `obj_ids` VALUES (20, 19, 10, 2, NULL, NULL, NULL, 5);
INSERT INTO `obj_ids` VALUES (21, 19, 10, 3, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (22, 19, 10, 4, NULL, NULL, NULL, 8);
INSERT INTO `obj_ids` VALUES (23, 19, 10, 6, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (24, 19, 10, 7, NULL, NULL, NULL, 18);
INSERT INTO `obj_ids` VALUES (25, 19, 10, 10, NULL, NULL, NULL, 7);
INSERT INTO `obj_ids` VALUES (26, 19, 10, 11, NULL, NULL, NULL, 21);
INSERT INTO `obj_ids` VALUES (27, 19, 10, 14, NULL, NULL, NULL, 4);
INSERT INTO `obj_ids` VALUES (28, 19, 10, 17, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (29, 19, 10, 21, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (30, 19, 10, 24, NULL, NULL, NULL, 48);
INSERT INTO `obj_ids` VALUES (31, 19, 10, 25, NULL, NULL, NULL, 29);
INSERT INTO `obj_ids` VALUES (32, 19, 10, 28, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (33, 19, 10, 30, NULL, NULL, NULL, 28);
INSERT INTO `obj_ids` VALUES (34, 19, 10, 31, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (35, 19, 11, 1, NULL, NULL, NULL, 12);
INSERT INTO `obj_ids` VALUES (36, 19, 11, 7, NULL, NULL, NULL, 6);
INSERT INTO `obj_ids` VALUES (37, 19, 11, 8, NULL, NULL, NULL, 12);
INSERT INTO `obj_ids` VALUES (38, 19, 11, 11, NULL, NULL, NULL, 28);
INSERT INTO `obj_ids` VALUES (39, 19, 11, 13, NULL, NULL, NULL, 11);
INSERT INTO `obj_ids` VALUES (40, 19, 11, 15, NULL, NULL, NULL, 6);
INSERT INTO `obj_ids` VALUES (41, 19, 11, 19, NULL, NULL, NULL, 11);
INSERT INTO `obj_ids` VALUES (42, 19, 11, 20, NULL, NULL, NULL, 8);
INSERT INTO `obj_ids` VALUES (43, 19, 11, 21, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (44, 19, 11, 25, NULL, NULL, NULL, 20);
INSERT INTO `obj_ids` VALUES (45, 19, 11, 26, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (46, 19, 11, 27, NULL, NULL, NULL, 4);
INSERT INTO `obj_ids` VALUES (47, 19, 11, 28, NULL, NULL, NULL, 16);
INSERT INTO `obj_ids` VALUES (48, 19, 11, 29, NULL, NULL, NULL, 11);
INSERT INTO `obj_ids` VALUES (49, 19, 12, 3, NULL, NULL, NULL, 12);
INSERT INTO `obj_ids` VALUES (50, 19, 12, 5, NULL, NULL, NULL, 4);
INSERT INTO `obj_ids` VALUES (51, 19, 12, 6, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (52, 19, 12, 9, NULL, NULL, NULL, 36);
INSERT INTO `obj_ids` VALUES (53, 19, 12, 10, NULL, NULL, NULL, 25);
INSERT INTO `obj_ids` VALUES (54, 19, 12, 11, NULL, NULL, NULL, 5);
INSERT INTO `obj_ids` VALUES (55, 19, 12, 12, NULL, NULL, NULL, 41);
INSERT INTO `obj_ids` VALUES (56, 19, 12, 13, NULL, NULL, NULL, 61);
INSERT INTO `obj_ids` VALUES (57, 19, 12, 14, NULL, NULL, NULL, 24);
INSERT INTO `obj_ids` VALUES (58, 19, 12, 16, NULL, NULL, NULL, 57);
INSERT INTO `obj_ids` VALUES (59, 19, 12, 17, NULL, NULL, NULL, 7);
INSERT INTO `obj_ids` VALUES (60, 19, 12, 18, NULL, NULL, NULL, 50);
INSERT INTO `obj_ids` VALUES (61, 19, 12, 19, NULL, NULL, NULL, 17);
INSERT INTO `obj_ids` VALUES (62, 19, 12, 20, NULL, NULL, NULL, 31);
INSERT INTO `obj_ids` VALUES (63, 19, 12, 24, NULL, NULL, NULL, 110);
INSERT INTO `obj_ids` VALUES (64, 19, 12, 26, NULL, NULL, NULL, 4);
INSERT INTO `obj_ids` VALUES (65, 19, 12, 28, NULL, NULL, NULL, 78);
INSERT INTO `obj_ids` VALUES (66, 19, 12, 29, NULL, NULL, NULL, 30);
INSERT INTO `obj_ids` VALUES (67, 19, 12, 30, NULL, NULL, NULL, 49);
INSERT INTO `obj_ids` VALUES (68, 19, 12, 31, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (69, 20, 1, 2, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (70, 20, 1, 3, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (71, 20, 1, 7, NULL, NULL, NULL, 6);
INSERT INTO `obj_ids` VALUES (72, 20, 1, 8, NULL, NULL, NULL, 6);
INSERT INTO `obj_ids` VALUES (73, 20, 1, 9, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (74, 20, 1, 10, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (75, 20, 1, 13, NULL, NULL, NULL, 8);
INSERT INTO `obj_ids` VALUES (76, 20, 1, 14, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (77, 20, 1, 15, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (78, 20, 1, 16, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (79, 20, 1, 20, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (80, 20, 1, 21, NULL, NULL, NULL, 25);
INSERT INTO `obj_ids` VALUES (81, 20, 1, 22, NULL, NULL, NULL, 10);
INSERT INTO `obj_ids` VALUES (82, 20, 1, 23, NULL, NULL, NULL, 6);
INSERT INTO `obj_ids` VALUES (83, 20, 1, 24, NULL, NULL, NULL, 8);
INSERT INTO `obj_ids` VALUES (84, 20, 1, 26, NULL, NULL, NULL, 9);
INSERT INTO `obj_ids` VALUES (85, 20, 1, 27, NULL, NULL, NULL, 8);
INSERT INTO `obj_ids` VALUES (86, 20, 1, 28, NULL, NULL, NULL, 57);
INSERT INTO `obj_ids` VALUES (87, 20, 1, 29, NULL, NULL, NULL, 10);
INSERT INTO `obj_ids` VALUES (88, 20, 2, 5, NULL, NULL, NULL, 14);
INSERT INTO `obj_ids` VALUES (89, 20, 2, 6, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (90, 20, 2, 7, NULL, NULL, NULL, 38);
INSERT INTO `obj_ids` VALUES (91, 20, 2, 10, NULL, NULL, NULL, 23);
INSERT INTO `obj_ids` VALUES (92, 20, 2, 11, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (93, 20, 2, 12, NULL, NULL, NULL, 7);
INSERT INTO `obj_ids` VALUES (94, 20, 2, 13, NULL, NULL, NULL, 33);
INSERT INTO `obj_ids` VALUES (95, 20, 2, 14, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (96, 20, 2, 17, NULL, NULL, NULL, 12);
INSERT INTO `obj_ids` VALUES (97, 20, 2, 20, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (98, 20, 2, 21, NULL, NULL, NULL, 11);
INSERT INTO `obj_ids` VALUES (99, 20, 2, 24, NULL, NULL, NULL, 5);
INSERT INTO `obj_ids` VALUES (100, 20, 2, 25, NULL, NULL, NULL, 930);
INSERT INTO `obj_ids` VALUES (101, 20, 2, 26, NULL, NULL, NULL, 23);
INSERT INTO `obj_ids` VALUES (102, 20, 2, 27, NULL, NULL, NULL, 26);
INSERT INTO `obj_ids` VALUES (103, 20, 2, 28, NULL, NULL, NULL, 34);
INSERT INTO `obj_ids` VALUES (104, 20, 3, 2, NULL, NULL, NULL, 56);
INSERT INTO `obj_ids` VALUES (105, 20, 3, 3, NULL, NULL, NULL, 44);
INSERT INTO `obj_ids` VALUES (106, 20, 3, 4, NULL, NULL, NULL, 63);
INSERT INTO `obj_ids` VALUES (107, 20, 3, 5, NULL, NULL, NULL, 98);
INSERT INTO `obj_ids` VALUES (108, 20, 3, 6, NULL, NULL, NULL, 38);
INSERT INTO `obj_ids` VALUES (109, 20, 3, 9, NULL, NULL, NULL, 63);
INSERT INTO `obj_ids` VALUES (110, 20, 3, 10, NULL, NULL, NULL, 64);
INSERT INTO `obj_ids` VALUES (111, 20, 3, 11, NULL, NULL, NULL, 55);
INSERT INTO `obj_ids` VALUES (112, 20, 3, 12, NULL, NULL, NULL, 79);
INSERT INTO `obj_ids` VALUES (113, 20, 3, 13, NULL, NULL, NULL, 33);
INSERT INTO `obj_ids` VALUES (114, 20, 3, 15, NULL, NULL, NULL, 8);
INSERT INTO `obj_ids` VALUES (115, 20, 3, 16, NULL, NULL, NULL, 189);
INSERT INTO `obj_ids` VALUES (116, 20, 3, 17, NULL, NULL, NULL, 233);
INSERT INTO `obj_ids` VALUES (117, 20, 3, 18, NULL, NULL, NULL, 7);
INSERT INTO `obj_ids` VALUES (118, 20, 3, 19, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (119, 20, 3, 23, NULL, NULL, NULL, 167);
INSERT INTO `obj_ids` VALUES (120, 20, 3, 30, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (121, 20, 3, 31, NULL, NULL, NULL, 163);
INSERT INTO `obj_ids` VALUES (122, 20, 4, 1, NULL, NULL, NULL, 30);
INSERT INTO `obj_ids` VALUES (123, 20, 4, 2, NULL, NULL, NULL, 12);
INSERT INTO `obj_ids` VALUES (124, 20, 4, 3, NULL, NULL, NULL, 9);
INSERT INTO `obj_ids` VALUES (125, 20, 4, 6, NULL, NULL, NULL, 4);
INSERT INTO `obj_ids` VALUES (126, 20, 4, 7, NULL, NULL, NULL, 83);
INSERT INTO `obj_ids` VALUES (127, 20, 4, 8, NULL, NULL, NULL, 10);
INSERT INTO `obj_ids` VALUES (128, 20, 4, 9, NULL, NULL, NULL, 10);
INSERT INTO `obj_ids` VALUES (129, 20, 4, 12, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (130, 20, 4, 13, NULL, NULL, NULL, 13);
INSERT INTO `obj_ids` VALUES (131, 20, 4, 14, NULL, NULL, NULL, 24);
INSERT INTO `obj_ids` VALUES (132, 20, 4, 15, NULL, NULL, NULL, 15);
INSERT INTO `obj_ids` VALUES (133, 20, 4, 16, NULL, NULL, NULL, 4);
INSERT INTO `obj_ids` VALUES (134, 20, 4, 20, NULL, NULL, NULL, 24);
INSERT INTO `obj_ids` VALUES (135, 20, 4, 21, NULL, NULL, NULL, 50);
INSERT INTO `obj_ids` VALUES (136, 20, 4, 23, NULL, NULL, NULL, 51);
INSERT INTO `obj_ids` VALUES (137, 20, 4, 24, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (138, 20, 4, 27, NULL, NULL, NULL, 52);
INSERT INTO `obj_ids` VALUES (139, 20, 4, 28, NULL, NULL, NULL, 23);
INSERT INTO `obj_ids` VALUES (140, 20, 4, 29, NULL, NULL, NULL, 9);
INSERT INTO `obj_ids` VALUES (141, 20, 4, 30, NULL, NULL, NULL, 94);
INSERT INTO `obj_ids` VALUES (142, 20, 5, 5, NULL, NULL, NULL, 17);
INSERT INTO `obj_ids` VALUES (143, 20, 5, 6, NULL, NULL, NULL, 18);
INSERT INTO `obj_ids` VALUES (144, 20, 5, 7, NULL, NULL, NULL, 4);
INSERT INTO `obj_ids` VALUES (145, 20, 5, 11, NULL, NULL, NULL, 6);
INSERT INTO `obj_ids` VALUES (146, 20, 5, 12, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (147, 20, 5, 13, NULL, NULL, NULL, 12);
INSERT INTO `obj_ids` VALUES (148, 20, 5, 14, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (149, 20, 5, 18, NULL, NULL, NULL, 74);
INSERT INTO `obj_ids` VALUES (150, 20, 5, 19, NULL, NULL, NULL, 7);
INSERT INTO `obj_ids` VALUES (151, 20, 6, 2, NULL, NULL, NULL, 19);
INSERT INTO `obj_ids` VALUES (152, 20, 6, 3, NULL, NULL, NULL, 46);
INSERT INTO `obj_ids` VALUES (153, 20, 6, 4, NULL, NULL, NULL, 9);
INSERT INTO `obj_ids` VALUES (154, 20, 6, 6, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (155, 20, 6, 8, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (156, 20, 6, 10, NULL, NULL, NULL, 17);
INSERT INTO `obj_ids` VALUES (157, 20, 6, 11, NULL, NULL, NULL, 110);
INSERT INTO `obj_ids` VALUES (158, 20, 6, 15, NULL, NULL, NULL, 33);
INSERT INTO `obj_ids` VALUES (159, 20, 6, 16, NULL, NULL, NULL, 32);
INSERT INTO `obj_ids` VALUES (160, 20, 6, 17, NULL, NULL, NULL, 12);
INSERT INTO `obj_ids` VALUES (161, 20, 6, 18, NULL, NULL, NULL, 19);
INSERT INTO `obj_ids` VALUES (162, 20, 6, 19, NULL, NULL, NULL, 78);
INSERT INTO `obj_ids` VALUES (163, 20, 6, 22, NULL, NULL, NULL, 7);
INSERT INTO `obj_ids` VALUES (164, 20, 6, 23, NULL, NULL, NULL, 9);
INSERT INTO `obj_ids` VALUES (165, 20, 6, 24, NULL, NULL, NULL, 92);
INSERT INTO `obj_ids` VALUES (166, 20, 6, 25, NULL, NULL, NULL, 3404);
INSERT INTO `obj_ids` VALUES (167, 20, 6, 26, NULL, NULL, NULL, 8958);
INSERT INTO `obj_ids` VALUES (168, 20, 6, 29, NULL, NULL, NULL, 1782);
INSERT INTO `obj_ids` VALUES (169, 20, 6, 30, NULL, NULL, NULL, 330);
INSERT INTO `obj_ids` VALUES (170, 20, 7, 1, NULL, NULL, NULL, 2705);
INSERT INTO `obj_ids` VALUES (171, 20, 7, 2, NULL, NULL, NULL, 77656);
INSERT INTO `obj_ids` VALUES (172, 20, 7, 3, NULL, NULL, NULL, 3712);
INSERT INTO `obj_ids` VALUES (173, 20, 7, 6, NULL, NULL, NULL, 16);
INSERT INTO `obj_ids` VALUES (174, 20, 7, 8, NULL, NULL, NULL, 188);
INSERT INTO `obj_ids` VALUES (175, 20, 7, 9, NULL, NULL, NULL, 88);
INSERT INTO `obj_ids` VALUES (176, 20, 7, 13, NULL, NULL, NULL, 39437);
INSERT INTO `obj_ids` VALUES (177, 20, 7, 14, NULL, NULL, NULL, 975);
INSERT INTO `obj_ids` VALUES (178, 20, 7, 15, NULL, NULL, NULL, 1861);
INSERT INTO `obj_ids` VALUES (179, 20, 7, 17, NULL, NULL, NULL, 137);
INSERT INTO `obj_ids` VALUES (180, 20, 7, 20, NULL, NULL, NULL, 45652);
INSERT INTO `obj_ids` VALUES (181, 20, 7, 22, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (182, 20, 7, 23, NULL, NULL, NULL, 26);
INSERT INTO `obj_ids` VALUES (183, 20, 7, 24, NULL, NULL, NULL, 6);
INSERT INTO `obj_ids` VALUES (184, 20, 7, 27, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (185, 20, 7, 29, NULL, NULL, NULL, 4);
INSERT INTO `obj_ids` VALUES (186, 20, 9, 7, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (187, 20, 9, 8, NULL, NULL, NULL, 14);
INSERT INTO `obj_ids` VALUES (188, 20, 9, 9, NULL, NULL, NULL, 45);
INSERT INTO `obj_ids` VALUES (189, 20, 9, 11, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (190, 20, 9, 12, NULL, NULL, NULL, 29);
INSERT INTO `obj_ids` VALUES (191, 20, 9, 13, NULL, NULL, NULL, 12);
INSERT INTO `obj_ids` VALUES (192, 20, 9, 14, NULL, NULL, NULL, 10);
INSERT INTO `obj_ids` VALUES (193, 20, 9, 15, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (194, 20, 9, 16, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (195, 20, 9, 17, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (196, 20, 9, 18, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (197, 20, 9, 19, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (198, 20, 9, 21, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (199, 20, 9, 22, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (200, 20, 9, 23, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (201, 20, 9, 25, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (202, 20, 9, 28, NULL, NULL, NULL, 16);
INSERT INTO `obj_ids` VALUES (203, 20, 9, 30, NULL, NULL, NULL, 9);
INSERT INTO `obj_ids` VALUES (204, 20, 10, 2, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (205, 20, 10, 4, NULL, NULL, NULL, 6);
INSERT INTO `obj_ids` VALUES (206, 20, 10, 5, NULL, NULL, NULL, 4);
INSERT INTO `obj_ids` VALUES (207, 20, 10, 6, NULL, NULL, NULL, 9);
INSERT INTO `obj_ids` VALUES (208, 20, 10, 7, NULL, NULL, NULL, 10);
INSERT INTO `obj_ids` VALUES (209, 20, 10, 8, NULL, NULL, NULL, 2);
INSERT INTO `obj_ids` VALUES (210, 20, 10, 9, NULL, NULL, NULL, 5);
INSERT INTO `obj_ids` VALUES (211, 20, 10, 12, NULL, NULL, NULL, 5);
INSERT INTO `obj_ids` VALUES (212, 20, 10, 13, NULL, NULL, NULL, 13);
INSERT INTO `obj_ids` VALUES (213, 20, 10, 14, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (214, 20, 10, 15, NULL, NULL, NULL, 18);
INSERT INTO `obj_ids` VALUES (215, 20, 10, 16, NULL, NULL, NULL, 13);
INSERT INTO `obj_ids` VALUES (216, 20, 10, 19, NULL, NULL, NULL, 1);
INSERT INTO `obj_ids` VALUES (217, 20, 10, 21, NULL, NULL, NULL, 3);
INSERT INTO `obj_ids` VALUES (218, 20, 10, 22, NULL, NULL, NULL, 5);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`(250)) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sikd_rek
-- ----------------------------
DROP TABLE IF EXISTS `sikd_rek`;
CREATE TABLE `sikd_rek`  (
  `id` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `sikd_rek_id` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kd_rek` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nm_rek` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sikd_rek
-- ----------------------------
INSERT INTO `sikd_rek` VALUES ('8', '', '8', 'PENDAPATAN-LO');
INSERT INTO `sikd_rek` VALUES ('9', '', '9', 'BEBAN');
INSERT INTO `sikd_rek` VALUES ('81', '8', '81', 'PENDAPATAN ASLI DAERAH (PAD)-LO');
INSERT INTO `sikd_rek` VALUES ('82', '8', '82', 'PENDAPATAN TRANSFER-LO');
INSERT INTO `sikd_rek` VALUES ('83', '8', '83', 'LAIN-LAIN PENDAPATAN DAERAH YANG SAH-LO');
INSERT INTO `sikd_rek` VALUES ('84', '8', '84', 'SURPLUS NONOPERASIONAL-LO');
INSERT INTO `sikd_rek` VALUES ('85', '8', '85', 'PENDAPATAN LUAR BIASA-LO');
INSERT INTO `sikd_rek` VALUES ('91', '9', '91', 'BEBAN OPERASI');
INSERT INTO `sikd_rek` VALUES ('92', '9', '92', 'BEBAN TRANSFER');
INSERT INTO `sikd_rek` VALUES ('Retribusi\r\n', '9', '93', 'DEFISIT NONOPERASIONAL');
INSERT INTO `sikd_rek` VALUES ('94', '9', '94', 'BEBAN LUAR BIASA');
INSERT INTO `sikd_rek` VALUES ('95', '9', '95', 'SURPLUS/DEFISIT-LO');
INSERT INTO `sikd_rek` VALUES ('811', '81', '811', 'Pendapatan Pajak Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('812', '81', '812', 'Pendapatan Retribusi Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('813', '81', '813', 'Pendapatan Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan-LO');
INSERT INTO `sikd_rek` VALUES ('814', '81', '814', 'Lain-Lain PAD Yang Sah-LO');
INSERT INTO `sikd_rek` VALUES ('821', '82', '821', 'Pendapatan Transfer Pemerintah Pusat-LO');
INSERT INTO `sikd_rek` VALUES ('822', '82', '822', 'Pendapatan Transfer Pemerintah Pusat-Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('823', '82', '823', 'Pendapatan Transfer Pemerintah Daerah Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('824', '82', '824', 'Bantuan Keuangan-LO');
INSERT INTO `sikd_rek` VALUES ('831', '83', '831', 'Pendapatan Hibah-LO');
INSERT INTO `sikd_rek` VALUES ('832', '83', '832', 'Dana Darurat-LO');
INSERT INTO `sikd_rek` VALUES ('833', '83', '833', 'Pendapatan Lain-Lain-LO');
INSERT INTO `sikd_rek` VALUES ('841', '84', '841', 'SURPLUS PENJUALAN/PELEPASAN ASET NONLANCAR-LO');
INSERT INTO `sikd_rek` VALUES ('842', '84', '842', 'SURPLUS PENYELESAIAN KEWAJIBAN JANGKA PANJANG-LO');
INSERT INTO `sikd_rek` VALUES ('843', '84', '843', 'SURPLUS NONOPERASIONAL LAINNYA-LO');
INSERT INTO `sikd_rek` VALUES ('851', '85', '851', 'Pendapatan Luar Biasa-LO');
INSERT INTO `sikd_rek` VALUES ('911', '91', '911', 'Beban Pegawai');
INSERT INTO `sikd_rek` VALUES ('912', '91', '912', 'Beban Barang dan Jasa');
INSERT INTO `sikd_rek` VALUES ('913', '91', '913', 'Beban Bunga');
INSERT INTO `sikd_rek` VALUES ('914', '91', '914', 'Beban Subsidi');
INSERT INTO `sikd_rek` VALUES ('915', '91', '915', 'Beban Hibah');
INSERT INTO `sikd_rek` VALUES ('916', '91', '916', 'Beban Bantuan Sosial');
INSERT INTO `sikd_rek` VALUES ('917', '91', '917', 'Beban Penyusutan dan Amortisasi');
INSERT INTO `sikd_rek` VALUES ('918', '91', '918', 'Beban Penyisihan Piutang Tak Tertagih');
INSERT INTO `sikd_rek` VALUES ('919', '91', '919', 'Beban Lain-Lain');
INSERT INTO `sikd_rek` VALUES ('921', '92', '921', 'Beban Transfer Bagi Hasil Pajak Daerah');
INSERT INTO `sikd_rek` VALUES ('922', '92', '922', 'Beban Transfer Bagi Hasil Pendapatan Lainnya ');
INSERT INTO `sikd_rek` VALUES ('923', '92', '923', 'Beban Transfer Bantuan Keuangan ke Pemerintah Daerah Lainnya');
INSERT INTO `sikd_rek` VALUES ('924', '92', '924', 'Beban Transfer Bantuan Keuangan Lainnya');
INSERT INTO `sikd_rek` VALUES ('931', '93', '931', 'Defisit Penjualan/Pelepasan Aset NonLancar-LO');
INSERT INTO `sikd_rek` VALUES ('932', '93', '932', 'Defisit Penyelesaian Kewajiban Jangka Panjang-LO');
INSERT INTO `sikd_rek` VALUES ('933', '93', '933', 'Defisit dari Kegiatan NonOperasional Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('941', '94', '941', 'Beban Luar Biasa');
INSERT INTO `sikd_rek` VALUES ('951', '95', '951', 'Surplus/Defisit-LO');
INSERT INTO `sikd_rek` VALUES ('81101', '811', '81101', 'Pajak Hotel-LO');
INSERT INTO `sikd_rek` VALUES ('81102', '811', '81102', 'Pajak Restoran-LO');
INSERT INTO `sikd_rek` VALUES ('81103', '811', '81103', 'Pajak Hiburan-LO');
INSERT INTO `sikd_rek` VALUES ('81104', '811', '81104', 'Pajak Reklame-LO');
INSERT INTO `sikd_rek` VALUES ('81105', '811', '81105', 'Pajak Penerangan Jalan-LO');
INSERT INTO `sikd_rek` VALUES ('81106', '811', '81106', 'Pajak Parkir-LO');
INSERT INTO `sikd_rek` VALUES ('81107', '811', '81107', 'Pajak Air Tanah-LO');
INSERT INTO `sikd_rek` VALUES ('81108', '811', '81108', 'Pajak Sarang Burung Walet-LO');
INSERT INTO `sikd_rek` VALUES ('81109', '811', '81109', 'Pajak Mineral Bukan Logam dan Batuan-LO');
INSERT INTO `sikd_rek` VALUES ('81110', '811', '81110', 'Pajak Bumi dan Bangunan Perdesaan dan Perkotaan-LO');
INSERT INTO `sikd_rek` VALUES ('81111', '811', '81111', 'Bea Perolehan Hak Atas Tanah dan Bangunan (BPHTB)-LO');
INSERT INTO `sikd_rek` VALUES ('81201', '812', '81201', 'Retribusi Pelayanan Kesehatan-LO');
INSERT INTO `sikd_rek` VALUES ('81202', '812', '81202', 'Retribusi Pelayanan Persampahan/ Kebersihan-LO');
INSERT INTO `sikd_rek` VALUES ('81203', '812', '81203', 'Retribusi Penggantian Biaya Cetak Kartu Tanda Penduduk dan Akta Catatan Sipil-LO');
INSERT INTO `sikd_rek` VALUES ('81204', '812', '81204', 'Retribusi Pelayanan Pemakaman dan Pengabuan Mayat-LO');
INSERT INTO `sikd_rek` VALUES ('81205', '812', '81205', 'Retribusi Pelayanan Parkir di Tepi Jalan Umum-LO');
INSERT INTO `sikd_rek` VALUES ('81206', '812', '81206', 'Retribusi Pelayanan Pasar-LO');
INSERT INTO `sikd_rek` VALUES ('81207', '812', '81207', 'Retribusi Pengujian Kendaraan Bermotor-LO');
INSERT INTO `sikd_rek` VALUES ('81208', '812', '81208', 'Retribusi Pemeriksaan Alat Pemadam Kebakaran-LO');
INSERT INTO `sikd_rek` VALUES ('81209', '812', '81209', 'Retribusi Penggantian Biaya Cetak Peta-LO');
INSERT INTO `sikd_rek` VALUES ('81210', '812', '81210', 'Retribusi Penyediaan dan/atau Penyedotan Kakus-LO');
INSERT INTO `sikd_rek` VALUES ('81211', '812', '81211', 'Retribusi Pengolahan Limbah Cair-LO');
INSERT INTO `sikd_rek` VALUES ('81212', '812', '81212', 'Retribusi Pelayanan Tera/Tera Ulang-LO');
INSERT INTO `sikd_rek` VALUES ('81213', '812', '81213', 'Retribusi Pelayanan Pendidikan-LO');
INSERT INTO `sikd_rek` VALUES ('81214', '812', '81214', 'Retribusi Pengendalian Menara Telekomunikasi-LO');
INSERT INTO `sikd_rek` VALUES ('81215', '812', '81215', 'Retribusi Pemakaian Kekayaan Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('81216', '812', '81216', 'Retribusi Pasar Grosir dan/ atau Pertokoan-LO');
INSERT INTO `sikd_rek` VALUES ('81217', '812', '81217', 'Retribusi Tempat Pelelangan-LO');
INSERT INTO `sikd_rek` VALUES ('81218', '812', '81218', 'Retribusi Terminal-LO');
INSERT INTO `sikd_rek` VALUES ('81219', '812', '81219', 'Retribusi Tempat Khusus Parkir-LO');
INSERT INTO `sikd_rek` VALUES ('81220', '812', '81220', 'Retribusi Tempat Penginapan/ Pesanggrahan/Villa-LO');
INSERT INTO `sikd_rek` VALUES ('81221', '812', '81221', 'Retribusi Rumah Potong Hewan-LO');
INSERT INTO `sikd_rek` VALUES ('81222', '812', '81222', 'Retribusi Pelayanan Kepelabuhan-LO');
INSERT INTO `sikd_rek` VALUES ('81223', '812', '81223', 'Retribusi Tempat Rekreasi dan Olahraga- LO');
INSERT INTO `sikd_rek` VALUES ('81224', '812', '81224', 'Retribusi Penyeberangan Air-LO');
INSERT INTO `sikd_rek` VALUES ('81225', '812', '81225', 'Retribusi Penjualan Produksi Usaha Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('81226', '812', '81226', 'Retribusi Izin Mendirikan Bangunan-LO');
INSERT INTO `sikd_rek` VALUES ('81227', '812', '81227', 'Retribusi Izin Tempat Penjualan Minuman Beralkohol-LO');
INSERT INTO `sikd_rek` VALUES ('81228', '812', '81228', 'Retribusi Izin Gangguan-LO');
INSERT INTO `sikd_rek` VALUES ('81229', '812', '81229', 'Retribusi Izin Trayek-LO');
INSERT INTO `sikd_rek` VALUES ('81230', '812', '81230', 'Retribusi Izin Perikanan-LO');
INSERT INTO `sikd_rek` VALUES ('81231', '812', '81231', 'Retribusi Pengendalian Lalu Lintas-LO');
INSERT INTO `sikd_rek` VALUES ('81232', '812', '81232', 'Retribusi Perpanjangan Izin Mempekerjakan Tenaga Kerja Asing (IMTA)-LO');
INSERT INTO `sikd_rek` VALUES ('81301', '813', '81301', 'Hasil Dari Penyertaan Modal Pada BUMD-LO');
INSERT INTO `sikd_rek` VALUES ('81302', '813', '81302', 'Hasil Dari Penyertaan Modal Pada Perusahaan Milik Pemerintah/BUMN-LO');
INSERT INTO `sikd_rek` VALUES ('81303', '813', '81303', 'Hasil Dari Penyertaan Modal Pada Perusahaan Milik Swasta-LO');
INSERT INTO `sikd_rek` VALUES ('81401', '814', '81401', 'Hasil Penjualan Aset Daerah Yang Tidak Dipisahkan-LO');
INSERT INTO `sikd_rek` VALUES ('81402', '814', '81402', 'Hasil Penjualan Aset Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('81403', '814', '81403', 'Penerimaan Jasa Giro-LO');
INSERT INTO `sikd_rek` VALUES ('81404', '814', '81404', 'Pendapatan Bunga-LO');
INSERT INTO `sikd_rek` VALUES ('81405', '814', '81405', 'Tuntutan Ganti Kerugian Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('81406', '814', '81406', 'Komisi, Potongan, dan Selisih Nilai Tukar Rupiah-LO');
INSERT INTO `sikd_rek` VALUES ('81407', '814', '81407', 'Pendapatan Denda atas Keterlambatan Pelaksanaan Pekerjaan-LO');
INSERT INTO `sikd_rek` VALUES ('81408', '814', '81408', 'Pendapatan Denda Pajak-LO');
INSERT INTO `sikd_rek` VALUES ('81409', '814', '81409', 'Pendapatan Denda Retribusi-LO');
INSERT INTO `sikd_rek` VALUES ('81410', '814', '81410', 'Pendapatan Denda Pemanfaatan Aset Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('81411', '814', '81411', 'Pendapatan Denda Atas Pelanggaran Perda/Perwal-LO');
INSERT INTO `sikd_rek` VALUES ('81412', '814', '81412', 'Pendapatan Hasil Eksekusi atas Jaminan-LO');
INSERT INTO `sikd_rek` VALUES ('81413', '814', '81413', 'Pendapatan dari Pengembalian-LO');
INSERT INTO `sikd_rek` VALUES ('81414', '814', '81414', 'Penerimaan Fasilitas Sosial dan Fasilitas Umum-LO');
INSERT INTO `sikd_rek` VALUES ('81415', '814', '81415', 'Pendapatan dari Penyelenggaraan Pendidikan dan Pelatihan-LO');
INSERT INTO `sikd_rek` VALUES ('81416', '814', '81416', 'Pendapatan dari Angsuran/Cicilan Penjualan-LO');
INSERT INTO `sikd_rek` VALUES ('81417', '814', '81417', 'Hasil dari Pemanfaatan Kekayaan Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('81418', '814', '81418', 'Pendapatan BLUD-LO');
INSERT INTO `sikd_rek` VALUES ('81419', '814', '81419', 'Pendapatan Dana Kapitasi-LO');
INSERT INTO `sikd_rek` VALUES ('81420', '814', '81420', 'Lain-Lain PAD yang Sah Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('82101', '821', '82101', 'Bagi Hasil Pajak-LO');
INSERT INTO `sikd_rek` VALUES ('82102', '821', '82102', 'Bagi Hasil Bukan Pajak/Sumber Daya Alam-LO');
INSERT INTO `sikd_rek` VALUES ('82103', '821', '82103', 'Dana Alokasi Umum (DAU)-LO');
INSERT INTO `sikd_rek` VALUES ('82104', '821', '82104', 'Dana Alokasi Khusus (DAK)-LO');
INSERT INTO `sikd_rek` VALUES ('82203', '822', '82203', 'Dana Penyesuaian-LO');
INSERT INTO `sikd_rek` VALUES ('82301', '823', '82301', 'Pendapatan Bagi Hasil Pajak-LO');
INSERT INTO `sikd_rek` VALUES ('82302', '823', '82302', 'Pendapatan Bagi hasil Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('82401', '824', '82401', 'Bantuan Keuangan dari Pemerintah  Daerah Provinsi-LO');
INSERT INTO `sikd_rek` VALUES ('82402', '824', '82402', 'Bantuan Keuangan dari Pemerintah  Daerah Kabupaten/Kota-LO');
INSERT INTO `sikd_rek` VALUES ('83101', '831', '83101', 'Pendapatan Hibah dari Pemerintah-LO');
INSERT INTO `sikd_rek` VALUES ('83102', '831', '83102', 'Pendapatan Hibah dari Pemerintah Daerah Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('83103', '831', '83103', 'Pendapatan Hibah dari Badan/Lembaga/Organisasi Swasta Dalam Negeri-LO');
INSERT INTO `sikd_rek` VALUES ('83104', '831', '83104', 'Pendapatan Hibah Dari Kelompok Masyarakat/Perorangan-LO');
INSERT INTO `sikd_rek` VALUES ('83201', '832', '83201', 'Dana Darurat-LO');
INSERT INTO `sikd_rek` VALUES ('83301', '833', '83301', 'Pendapatan Lain-Lain-LO');
INSERT INTO `sikd_rek` VALUES ('84101', '841', '84101', 'Surplus Penjualan/Pelepasan Aset NonLancar-LO');
INSERT INTO `sikd_rek` VALUES ('84202', '842', '84202', 'Surplus Penyelesaian Kewajiban Jangka Panjang-LO');
INSERT INTO `sikd_rek` VALUES ('84303', '843', '84303', 'Surplus NonOperasional Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('85101', '851', '85101', 'Pendapatan Pos Luar Biasa-LO');
INSERT INTO `sikd_rek` VALUES ('91101', '911', '91101', 'Beban Gaji dan Tunjangan');
INSERT INTO `sikd_rek` VALUES ('91102', '911', '91102', 'Beban Tambahan Penghasilan PNS');
INSERT INTO `sikd_rek` VALUES ('91103', '911', '91103', 'Beban Penerimaan lainnya Pimpinan dan anggota DPRD serta KDH/WKDH');
INSERT INTO `sikd_rek` VALUES ('91104', '911', '91104', 'Beban Pemungutan Pajak Bumi dan Bangunan');
INSERT INTO `sikd_rek` VALUES ('91105', '911', '91105', 'Insentif Pemungutan Pajak Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('91106', '911', '91106', 'Insentif Pemungutan Retribusi Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('91107', '911', '91107', 'Uang Lembur-LO');
INSERT INTO `sikd_rek` VALUES ('91201', '912', '91201', 'Beban Persediaan Bahan Pakai Habis');
INSERT INTO `sikd_rek` VALUES ('91202', '912', '91202', 'Beban Persediaan Bahan/ Material');
INSERT INTO `sikd_rek` VALUES ('91203', '912', '91203', 'Beban Jasa Kantor');
INSERT INTO `sikd_rek` VALUES ('91204', '912', '91204', 'Beban Premi Asuransi');
INSERT INTO `sikd_rek` VALUES ('91205', '912', '91205', 'Beban Perawatan Kendaraan Bermotor');
INSERT INTO `sikd_rek` VALUES ('91206', '912', '91206', 'Beban Cetak dan Penggandaan');
INSERT INTO `sikd_rek` VALUES ('91207', '912', '91207', 'Beban Sewa Rumah/Gedung/Gudang/Parkir');
INSERT INTO `sikd_rek` VALUES ('91208', '912', '91208', 'Beban Sewa Sarana Mobilitas');
INSERT INTO `sikd_rek` VALUES ('91209', '912', '91209', 'Beban Sewa Alat Berat');
INSERT INTO `sikd_rek` VALUES ('91210', '912', '91210', 'Beban Sewa Perlengkapan dan Peralatan Kantor');
INSERT INTO `sikd_rek` VALUES ('91211', '912', '91211', 'Beban Makanan dan Minuman');
INSERT INTO `sikd_rek` VALUES ('91212', '912', '91212', 'Beban Pakaian Dinas dan Atributnya');
INSERT INTO `sikd_rek` VALUES ('91213', '912', '91213', 'Beban Pakaian Kerja');
INSERT INTO `sikd_rek` VALUES ('91214', '912', '91214', 'Belanja Pakaian Khusus dan Hari-Hari Tertentu');
INSERT INTO `sikd_rek` VALUES ('91215', '912', '91215', 'Beban Perjalanan Dinas');
INSERT INTO `sikd_rek` VALUES ('91216', '912', '91216', 'Beban Perjalanan Pindah Tugas');
INSERT INTO `sikd_rek` VALUES ('91217', '912', '91217', 'Beban Pemulangan Pegawai');
INSERT INTO `sikd_rek` VALUES ('91218', '912', '91218', 'Beban Pemeliharaan');
INSERT INTO `sikd_rek` VALUES ('91219', '912', '91219', 'Beban Jasa Konsultasi');
INSERT INTO `sikd_rek` VALUES ('91220', '912', '91220', 'Beban Beasiswa Pendidikan PNS');
INSERT INTO `sikd_rek` VALUES ('91221', '912', '91221', 'Beban Kursus, Pelatihan, Sosialisasi Dan Bimbingan Teknis ');
INSERT INTO `sikd_rek` VALUES ('91222', '912', '91222', 'Beban Honorarium NonPegawai');
INSERT INTO `sikd_rek` VALUES ('91223', '912', '91223', 'Beban Honorarium PNS');
INSERT INTO `sikd_rek` VALUES ('91224', '912', '91224', 'Beban Honorarium NonPNS');
INSERT INTO `sikd_rek` VALUES ('91225', '912', '91225', 'Beban Uang Untuk Diberikan Kepada Masyarakat');
INSERT INTO `sikd_rek` VALUES ('91226', '912', '91226', 'Beban Barang Nonkapitalisasi');
INSERT INTO `sikd_rek` VALUES ('91227', '912', '91227', 'Beban Barang/Jasa Dana BOSNAS');
INSERT INTO `sikd_rek` VALUES ('91228', '912', '91228', 'Beban Jasa Pelayanan');
INSERT INTO `sikd_rek` VALUES ('91229', '912', '91229', 'Beban Jasa Lainnya');
INSERT INTO `sikd_rek` VALUES ('91301', '913', '91301', 'Beban Bunga Pinjaman');
INSERT INTO `sikd_rek` VALUES ('91302', '913', '91302', 'Beban Bunga Obligasi');
INSERT INTO `sikd_rek` VALUES ('91401', '914', '91401', 'Beban Subsidi ');
INSERT INTO `sikd_rek` VALUES ('91501', '915', '91501', 'Beban Hibah kepada Pemerintah ');
INSERT INTO `sikd_rek` VALUES ('91502', '915', '91502', 'Beban Hibah kepada Pemerintah Daerah lainnya');
INSERT INTO `sikd_rek` VALUES ('91503', '915', '91503', 'Beban Hibah kepada Perusahaan Daerah/BUMD');
INSERT INTO `sikd_rek` VALUES ('91504', '915', '91504', 'Beban Hibah kepada Kelompok Masyarakat');
INSERT INTO `sikd_rek` VALUES ('91505', '915', '91505', 'Beban Hibah kepada Organisasi Kemasyarakatan');
INSERT INTO `sikd_rek` VALUES ('91601', '916', '91601', 'Beban Bantuan Sosial kepada Organisasi Sosial Kemasyarakatan');
INSERT INTO `sikd_rek` VALUES ('91602', '916', '91602', 'Beban Bantuan Sosial kepada Masyarakat');
INSERT INTO `sikd_rek` VALUES ('91701', '917', '91701', 'Beban Penyusutan Peralatan dan Mesin');
INSERT INTO `sikd_rek` VALUES ('91702', '917', '91702', 'Beban Penyusutan Gedung dan Bangunan');
INSERT INTO `sikd_rek` VALUES ('91703', '917', '91703', 'Beban Penyusutan Jalan, Irigasi, dan Jaringan');
INSERT INTO `sikd_rek` VALUES ('91704', '917', '91704', 'Beban Amortisasi Aset Tidak Berwujud');
INSERT INTO `sikd_rek` VALUES ('91801', '918', '91801', 'Beban Penyisihan Piutang Tak Tertagih- Pendapatan');
INSERT INTO `sikd_rek` VALUES ('91802', '918', '91802', 'Beban Penyisihan Piutang Tak Tertagih- Lainnya');
INSERT INTO `sikd_rek` VALUES ('91901', '919', '91901', 'Beban Penurunan Nilai Investasi');
INSERT INTO `sikd_rek` VALUES ('91902', '919', '91902', 'Beban Penyisihan Dana Bergulir');
INSERT INTO `sikd_rek` VALUES ('91903', '919', '91903', 'Beban Lainnya');
INSERT INTO `sikd_rek` VALUES ('92101', '921', '92101', 'Beban Transfer Bagi Hasil Pajak Daerah Kepada Pemerintahan Kabupaten/Kota');
INSERT INTO `sikd_rek` VALUES ('92201', '922', '92201', 'Beban Transfer Bagi Hasil Pendapatan Lainnya Kepada Pemerintahan Kabupaten/Kota');
INSERT INTO `sikd_rek` VALUES ('92301', '923', '92301', 'Beban Transfer Bantuan Keuangan ke Provinsi');
INSERT INTO `sikd_rek` VALUES ('92302', '923', '92302', 'Beban Transfer Bantuan Keuangan ke Kabupaten/Kota');
INSERT INTO `sikd_rek` VALUES ('92401', '924', '92401', 'Beban Transfer Bantuan Keuangan Kepada Partai Politik');
INSERT INTO `sikd_rek` VALUES ('93101', '931', '93101', 'Defisit Penjualan/Pelepasan Aset NonLancar-LO');
INSERT INTO `sikd_rek` VALUES ('93201', '932', '93201', 'Defisit Penyelesaian Kewajiban Jangka Panjang-LO');
INSERT INTO `sikd_rek` VALUES ('93301', '933', '93301', 'Defisit dari Kegiatan NonOperasional Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('94101', '941', '94101', 'Beban Luar Biasa');
INSERT INTO `sikd_rek` VALUES ('95101', '951', '95101', 'Surplus/Defisit-LO');
INSERT INTO `sikd_rek` VALUES ('8110101', '81101', '8110101', 'Hotel-LO');
INSERT INTO `sikd_rek` VALUES ('8110102', '81101', '8110102', 'Motel-LO');
INSERT INTO `sikd_rek` VALUES ('8110103', '81101', '8110103', 'Losmen-LO');
INSERT INTO `sikd_rek` VALUES ('8110104', '81101', '8110104', 'Gubuk Pariwisata-LO');
INSERT INTO `sikd_rek` VALUES ('8110105', '81101', '8110105', 'Wisma Pariwisata-LO');
INSERT INTO `sikd_rek` VALUES ('8110106', '81101', '8110106', 'Pesanggrahan-LO');
INSERT INTO `sikd_rek` VALUES ('8110107', '81101', '8110107', 'Rumah Penginapan dan sejenisnya-LO');
INSERT INTO `sikd_rek` VALUES ('8110108', '81101', '8110108', 'Rumah Kos Dengan Jumlah Kamar Lebih Dari 10 (sepuluh)-LO');
INSERT INTO `sikd_rek` VALUES ('8110201', '81102', '8110201', 'Restoran-LO');
INSERT INTO `sikd_rek` VALUES ('8110202', '81102', '8110202', 'Rumah Makan-LO');
INSERT INTO `sikd_rek` VALUES ('8110203', '81102', '8110203', 'Kafetaria-LO');
INSERT INTO `sikd_rek` VALUES ('8110204', '81102', '8110204', 'Kantin-LO');
INSERT INTO `sikd_rek` VALUES ('8110205', '81102', '8110205', 'Warung-LO');
INSERT INTO `sikd_rek` VALUES ('8110206', '81102', '8110206', 'Bar-LO');
INSERT INTO `sikd_rek` VALUES ('8110207', '81102', '8110207', 'Jasa Boga/Katering-LO');
INSERT INTO `sikd_rek` VALUES ('8110301', '81103', '8110301', 'Tontonan Film/Bioskop-LO');
INSERT INTO `sikd_rek` VALUES ('8110302', '81103', '8110302', 'Pagelaran Kesenian/Musik/Tari/Busana-LO');
INSERT INTO `sikd_rek` VALUES ('8110303', '81103', '8110303', 'Kontes Kecantikan, Binaraga, dan sejenisnya-LO');
INSERT INTO `sikd_rek` VALUES ('8110304', '81103', '8110304', 'Pameran-LO');
INSERT INTO `sikd_rek` VALUES ('8110305', '81103', '8110305', 'Diskotik, Karaoke, Klab Malam dan sejenisnya-LO');
INSERT INTO `sikd_rek` VALUES ('8110306', '81103', '8110306', 'Sirkus/Akrobat/Sulap-LO');
INSERT INTO `sikd_rek` VALUES ('8110307', '81103', '8110307', 'Permainan Bilyar, Golf, Bowling-LO');
INSERT INTO `sikd_rek` VALUES ('8110308', '81103', '8110308', 'Pacuan Kuda, Kendaraan Bermotor, Permainan Ketangkasan-LO');
INSERT INTO `sikd_rek` VALUES ('8110309', '81103', '8110309', 'Panti Pijat, Refleksi, Mandi Uap/ Spa dan Pusat Kebugaran (fitness center)-LO');
INSERT INTO `sikd_rek` VALUES ('8110310', '81103', '8110310', 'Pertandingan Olahraga-LO');
INSERT INTO `sikd_rek` VALUES ('8110401', '81104', '8110401', 'Pajak Reklame Papan/Billboard/Videotron/Megatron-LO');
INSERT INTO `sikd_rek` VALUES ('8110402', '81104', '8110402', 'Pajak Reklame Kain-LO');
INSERT INTO `sikd_rek` VALUES ('8110403', '81104', '8110403', 'Pajak Reklame Melekat/Stiker-LO');
INSERT INTO `sikd_rek` VALUES ('8110404', '81104', '8110404', 'Pajak Reklame Selebaran-LO');
INSERT INTO `sikd_rek` VALUES ('8110405', '81104', '8110405', 'Pajak Reklame Berjalan-LO');
INSERT INTO `sikd_rek` VALUES ('8110406', '81104', '8110406', 'Pajak Reklame Udara-LO');
INSERT INTO `sikd_rek` VALUES ('8110407', '81104', '8110407', 'Pajak Reklame Apung-LO');
INSERT INTO `sikd_rek` VALUES ('8110408', '81104', '8110408', 'Pajak Reklame Suara-LO');
INSERT INTO `sikd_rek` VALUES ('8110409', '81104', '8110409', 'Pajak Reklame Film/Slide-LO');
INSERT INTO `sikd_rek` VALUES ('8110410', '81104', '8110410', 'Pajak Reklame Peragaan-LO');
INSERT INTO `sikd_rek` VALUES ('8110501', '81105', '8110501', 'Pajak Penerangan Jalan dihasilkan sendiri-LO');
INSERT INTO `sikd_rek` VALUES ('8110502', '81105', '8110502', 'Pajak Penerangan Jalan Sumber Lain-LO');
INSERT INTO `sikd_rek` VALUES ('8110601', '81106', '8110601', 'Pajak Parkir-LO');
INSERT INTO `sikd_rek` VALUES ('8110701', '81107', '8110701', 'Pajak Air Tanah-LO');
INSERT INTO `sikd_rek` VALUES ('8110801', '81108', '8110801', 'Pajak Sarang Burung Walet-LO');
INSERT INTO `sikd_rek` VALUES ('8110901', '81109', '8110901', 'Pajak Mineral Bukan Logam dan Batuan-LO');
INSERT INTO `sikd_rek` VALUES ('8111001', '81110', '8111001', 'Pajak Bumi dan Bangunan Perdesaan dan Perkotaan-LO');
INSERT INTO `sikd_rek` VALUES ('8111101', '81111', '8111101', 'BPHTB-Pemindahan Hak-LO');
INSERT INTO `sikd_rek` VALUES ('8111102', '81111', '8111102', 'BPHTB-Pemberian Hak Baru-LO');
INSERT INTO `sikd_rek` VALUES ('8120101', '81201', '8120101', 'Puskesmas-LO');
INSERT INTO `sikd_rek` VALUES ('8120102', '81201', '8120102', 'Puskesmas Keliling-LO');
INSERT INTO `sikd_rek` VALUES ('8120103', '81201', '8120103', 'Puskesmas Pembantu-LO');
INSERT INTO `sikd_rek` VALUES ('8120104', '81201', '8120104', 'Balai Pengobatan-LO');
INSERT INTO `sikd_rek` VALUES ('8120105', '81201', '8120105', 'Rumah Sakit Umum Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('8120106', '81201', '8120106', 'Tempat Pelayanan Kesehatan Lainnya Yang Sejenis yang Dikelola oleh Pemerintah Daerah- LO');
INSERT INTO `sikd_rek` VALUES ('8120201', '81202', '8120201', 'Pengambilan/Pengumpulan Sampah dari Sumbernya ke Lokasi Pembuangan Sementara-LO');
INSERT INTO `sikd_rek` VALUES ('8120202', '81202', '8120202', 'Pengangkutan Sampah dari Sumbernya dan/atau Lokasi Pembuangan Sementara ke Lokasi Pembuangan/Pembuangan Akhir Sampah-LO');
INSERT INTO `sikd_rek` VALUES ('8120203', '81202', '8120203', 'Penyediaan Lokasi Pembuangan/Pemusnahan Akhir Sampah-LO');
INSERT INTO `sikd_rek` VALUES ('8120301', '81203', '8120301', 'Kartu Tanda Penduduk-LO');
INSERT INTO `sikd_rek` VALUES ('8120302', '81203', '8120302', 'Kartu Keterangan Bertempat Tinggal-LO');
INSERT INTO `sikd_rek` VALUES ('8120303', '81203', '8120303', 'Kartu Identitas Kerja-LO');
INSERT INTO `sikd_rek` VALUES ('8120304', '81203', '8120304', 'Kartu Penduduk Sementara-LO');
INSERT INTO `sikd_rek` VALUES ('8120305', '81203', '8120305', 'Kartu Identitas Penduduk Musiman-LO');
INSERT INTO `sikd_rek` VALUES ('8120306', '81203', '8120306', 'Kartu Keluarga-LO');
INSERT INTO `sikd_rek` VALUES ('8120307', '81203', '8120307', 'Akta Catatan Sipil-LO');
INSERT INTO `sikd_rek` VALUES ('8120401', '81204', '8120401', 'Pelayanan Penguburan/Pemakaman-LO');
INSERT INTO `sikd_rek` VALUES ('8120402', '81204', '8120402', 'Sewa Tempat Pemakaman atau Pembakaran/Pengabuan Mayat-LO');
INSERT INTO `sikd_rek` VALUES ('8120501', '81205', '8120501', 'Penyediaan Pelayanan Parkir di Tepi Jalan Umum-LO');
INSERT INTO `sikd_rek` VALUES ('8120601', '81206', '8120601', 'Pelataran-LO');
INSERT INTO `sikd_rek` VALUES ('8120602', '81206', '8120602', 'Los-LO');
INSERT INTO `sikd_rek` VALUES ('8120603', '81206', '8120603', 'Kios-LO');
INSERT INTO `sikd_rek` VALUES ('8120701', '81207', '8120701', 'Retribusi PKB - Mobil Penumpang - Sedan-LO');
INSERT INTO `sikd_rek` VALUES ('8120702', '81207', '8120702', 'Retribusi PKB - Mobil Penumpang - Jeep-LO');
INSERT INTO `sikd_rek` VALUES ('8120703', '81207', '8120703', 'Retribusi PKB - Mobil Penumpang - Minibus-LO');
INSERT INTO `sikd_rek` VALUES ('8120704', '81207', '8120704', 'Retribusi PKB - Mobil Bus - Microbus-LO');
INSERT INTO `sikd_rek` VALUES ('8120705', '81207', '8120705', 'Retribusi PKB - Mobil Bus - Bus-LO');
INSERT INTO `sikd_rek` VALUES ('8120706', '81207', '8120706', 'Retribusi PKB - Mobil Barang/ Beban - Pick Up-LO');
INSERT INTO `sikd_rek` VALUES ('8120707', '81207', '8120707', 'Retribusi PKB - Mobil Barang/ Beban - Light Truck-LO');
INSERT INTO `sikd_rek` VALUES ('8120708', '81207', '8120708', 'Retribusi PKB - Mobil Barang/ Beban - Truck-LO');
INSERT INTO `sikd_rek` VALUES ('8120709', '81207', '8120709', 'Retribusi PKB - Sepeda Motor - Sepeda Motor Roda 2-LO');
INSERT INTO `sikd_rek` VALUES ('8120710', '81207', '8120710', 'Retribusi PKB - Sepeda Motor - Sepeda Motor Roda 3-LO');
INSERT INTO `sikd_rek` VALUES ('8120711', '81207', '8120711', 'Retribusi PKB - Kendaraan Bermotor yang Dioperasikan di Air-LO');
INSERT INTO `sikd_rek` VALUES ('8120801', '81208', '8120801', 'Pelayanan Pemeriksaan dan/atau Pengujian Alat Pemadam Kebakaran-LO');
INSERT INTO `sikd_rek` VALUES ('8120802', '81208', '8120802', 'Alat Penanggulangan Kebakaran-LO');
INSERT INTO `sikd_rek` VALUES ('8120803', '81208', '8120803', 'Alat Penyelamatan Jiwa -LO');
INSERT INTO `sikd_rek` VALUES ('8120901', '81209', '8120901', 'Penyediaan Peta Dasar (Garis)-LO');
INSERT INTO `sikd_rek` VALUES ('8120902', '81209', '8120902', 'Penyediaan Peta Foto-LO');
INSERT INTO `sikd_rek` VALUES ('8120903', '81209', '8120903', 'Penyediaan Peta Digital-LO');
INSERT INTO `sikd_rek` VALUES ('8120904', '81209', '8120904', 'Penyediaan Peta Tematik-LO');
INSERT INTO `sikd_rek` VALUES ('8120905', '81209', '8120905', 'Penyediaan Peta Teknis (Struktur)-LO');
INSERT INTO `sikd_rek` VALUES ('8121001', '81210', '8121001', 'Penyediaan dan/atau Penyedotan Kakus-LO');
INSERT INTO `sikd_rek` VALUES ('8121101', '81211', '8121101', 'Rumah Tangga-LO');
INSERT INTO `sikd_rek` VALUES ('8121102', '81211', '8121102', 'Perkantoran-LO');
INSERT INTO `sikd_rek` VALUES ('8121103', '81211', '8121103', 'Industri-LO');
INSERT INTO `sikd_rek` VALUES ('8121201', '81212', '8121201', 'Pengujian Alat-Alat Ukur, Takar, Timbang, dan Perlengkapannya-LO');
INSERT INTO `sikd_rek` VALUES ('8121202', '81212', '8121202', 'Pengujian dalam Keadaan Terbungkus-LO');
INSERT INTO `sikd_rek` VALUES ('8121301', '81213', '8121301', 'Pelayanan Penyelenggaraan Pendidikan-LO');
INSERT INTO `sikd_rek` VALUES ('8121302', '81213', '8121302', 'Pelatihan Teknis-LO');
INSERT INTO `sikd_rek` VALUES ('8121401', '81214', '8121401', 'Pemanfaatan Ruang Untuk Menara Telekomunikasi-LO');
INSERT INTO `sikd_rek` VALUES ('8121501', '81215', '8121501', 'Penyewaan Tanah dan Bangunan-LO');
INSERT INTO `sikd_rek` VALUES ('8121502', '81215', '8121502', 'Laboratorium-LO');
INSERT INTO `sikd_rek` VALUES ('8121503', '81215', '8121503', 'Ruangan-LO');
INSERT INTO `sikd_rek` VALUES ('8121504', '81215', '8121504', 'Kendaraan Bermotor-LO');
INSERT INTO `sikd_rek` VALUES ('8121601', '81216', '8121601', 'Penyediaan Fasilitas Pasar Grosir berbagai Jenis Barang-LO');
INSERT INTO `sikd_rek` VALUES ('8121602', '81216', '8121602', 'Fasilitas Pasar/Pertokoan yang Dikontrakkan-LO');
INSERT INTO `sikd_rek` VALUES ('8121603', '81216', '8121603', 'Fasilitas Pasar atau Pertokoan Yang Disediakan/Diselenggarakan oleh Pemerintah Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('8121701', '81217', '8121701', 'Pelelangan Ikan-LO');
INSERT INTO `sikd_rek` VALUES ('8121702', '81217', '8121702', 'Pelelangan Ternak-LO');
INSERT INTO `sikd_rek` VALUES ('8121703', '81217', '8121703', 'Pelelangan Hasil Bumi-LO');
INSERT INTO `sikd_rek` VALUES ('8121704', '81217', '8121704', 'Pelelangan Hasil Hutan-LO');
INSERT INTO `sikd_rek` VALUES ('8121705', '81217', '8121705', 'Jasa Pelelangan serta Fasilitas Lainnya yang Disediakan di Tempat Pelelangan-LO');
INSERT INTO `sikd_rek` VALUES ('8121801', '81218', '8121801', 'Pelayanan Penyediaan Tempat Parkir untuk Kendaraan Penumpang dan Bus Umum-LO');
INSERT INTO `sikd_rek` VALUES ('8121802', '81218', '8121802', 'Tempat Kegiatan Usaha-LO');
INSERT INTO `sikd_rek` VALUES ('8121803', '81218', '8121803', 'Fasilitas Lainnya di Lingkungan Terminal-LO');
INSERT INTO `sikd_rek` VALUES ('8121901', '81219', '8121901', 'Pelayanan Tempat Khusus Parkir-LO');
INSERT INTO `sikd_rek` VALUES ('8122001', '81220', '8122001', 'Pelayanan Tempat Penginapan/Pesanggrahan/Vila-LO');
INSERT INTO `sikd_rek` VALUES ('8122101', '81221', '8122101', 'Pelayanan Pemeriksaan Kesehatan Hewan Sebelum Dipotong-LO');
INSERT INTO `sikd_rek` VALUES ('8122102', '81221', '8122102', 'Pelayanan Pemeriksaan Kesehatan Hewan Sesudah Dipotong-LO');
INSERT INTO `sikd_rek` VALUES ('8122201', '81222', '8122201', 'Pelayanan Jasa Kepelabuhan-LO');
INSERT INTO `sikd_rek` VALUES ('8122301', '81223', '8122301', 'Pelayanan Tempat Rekreasi-LO');
INSERT INTO `sikd_rek` VALUES ('8122302', '81223', '8122302', 'Pelayanan Tempat Pariwisata-LO');
INSERT INTO `sikd_rek` VALUES ('8122303', '81223', '8122303', 'Pelayanan Tempat Olahraga-LO');
INSERT INTO `sikd_rek` VALUES ('8122401', '81224', '8122401', 'Pelayanan Penyeberangan Orang-LO');
INSERT INTO `sikd_rek` VALUES ('8122402', '81224', '8122402', 'Pelayanan Penyeberangan Barang-LO');
INSERT INTO `sikd_rek` VALUES ('8122501', '81225', '8122501', 'Penjualan Produksi Usaha Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('8122601', '81226', '8122601', 'Pemberian Izin Mendirikan Bangunan-LO');
INSERT INTO `sikd_rek` VALUES ('8122701', '81227', '8122701', 'Pemberian Izin untuk Tempat Penjualan Minuman Beralkohol-LO');
INSERT INTO `sikd_rek` VALUES ('8122801', '81228', '8122801', 'Pemberian Izin Gangguan tempat Usaha/Kegiatan kepada Orang Pribadi-LO');
INSERT INTO `sikd_rek` VALUES ('8122802', '81228', '8122802', 'Pemberian Izin Gangguan tempat Usaha/Kegiatan kepada Badan-LO');
INSERT INTO `sikd_rek` VALUES ('8122901', '81229', '8122901', 'Pemberian Izin Trayek kepada Orang Pribadi-LO');
INSERT INTO `sikd_rek` VALUES ('8122902', '81229', '8122902', 'Pemberian Izin Trayek kepada Badan-LO');
INSERT INTO `sikd_rek` VALUES ('8123001', '81230', '8123001', 'Pemberian Izin usaha Perikanan kepada Orang Pribadi-LO');
INSERT INTO `sikd_rek` VALUES ('8123002', '81230', '8123002', 'Pemberian Izin usaha Perikanan kepada Badan-LO');
INSERT INTO `sikd_rek` VALUES ('8123101', '81231', '8123101', 'Penggunaan ruas jalan tertentu-LO');
INSERT INTO `sikd_rek` VALUES ('8123102', '81231', '8123102', 'Penggunaan koridor tertentu -LO');
INSERT INTO `sikd_rek` VALUES ('8123103', '81231', '8123103', 'Penggunaan Kawasan Tertentu Pada Waktu Tertentu Oleh Kendaraan Bermotor Perseorangan dan Barang-LO');
INSERT INTO `sikd_rek` VALUES ('8123201', '81232', '8123201', 'Perpanjangan IMTA kepada Pemberi Kerja Tenaga Kerja Asing-LO');
INSERT INTO `sikd_rek` VALUES ('8130101', '81301', '8130101', 'Hasil Dari Penyertaan Modal Pada Perusahaan Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('8130102', '81301', '8130102', 'Hasil Dari Penyertaan Modal Pada Perseroan Terbatas-LO');
INSERT INTO `sikd_rek` VALUES ('8130201', '81302', '8130201', 'Hasil Dari Penyertaan Modal Pada Perusahaan Milik Pemerintah/BUMN-LO');
INSERT INTO `sikd_rek` VALUES ('8130301', '81303', '8130301', 'Hasil Dari Penyertaan Modal Pada Perusahaan Milik Swasta-LO');
INSERT INTO `sikd_rek` VALUES ('8140101', '81401', '8140101', 'Hasil Penjualan Tanah-LO');
INSERT INTO `sikd_rek` VALUES ('8140102', '81401', '8140102', 'Hasil Penjualan Peralatan dan Mesin-LO');
INSERT INTO `sikd_rek` VALUES ('8140103', '81401', '8140103', 'Hasil Penjualan Gedung dan Bangunan-LO');
INSERT INTO `sikd_rek` VALUES ('8140104', '81401', '8140104', 'Hasil Penjualan Jalan, Irigasi dan Jaringan-LO');
INSERT INTO `sikd_rek` VALUES ('8140105', '81401', '8140105', 'Hasil Penjualan Aset Tetap Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('8140201', '81402', '8140201', 'Hasil Penjualan Aset Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('8140301', '81403', '8140301', 'Jasa Giro Kas Umum Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('8140302', '81403', '8140302', 'Jasa Giro Kas Bendahara-LO');
INSERT INTO `sikd_rek` VALUES ('8140303', '81403', '8140303', 'Jasa Giro Dana Cadangan-LO');
INSERT INTO `sikd_rek` VALUES ('8140401', '81404', '8140401', 'Pendapatan Bunga Deposito-LO');
INSERT INTO `sikd_rek` VALUES ('8140402', '81404', '8140402', 'Pendapatan Bunga Dana Bergulir- LO');
INSERT INTO `sikd_rek` VALUES ('8140403', '81404', '8140403', 'Pendapatan Bunga Dana Cadangan- LO');
INSERT INTO `sikd_rek` VALUES ('8140501', '81405', '8140501', 'Tuntutan Ganti Kerugian Daerah Terhadap Bendahara-LO');
INSERT INTO `sikd_rek` VALUES ('8140502', '81405', '8140502', 'Tuntutan Ganti Kerugian Daerah Terhadap Pegawai Negeri Bukan Bendahara-LO');
INSERT INTO `sikd_rek` VALUES ('8140601', '81406', '8140601', 'Penerimaan Komisi-LO');
INSERT INTO `sikd_rek` VALUES ('8140602', '81406', '8140602', 'Penerimaan Potongan-LO');
INSERT INTO `sikd_rek` VALUES ('8140603', '81406', '8140603', 'Penerimaan Keuntungan Selisih Nilai Tukar Rupiah- LO');
INSERT INTO `sikd_rek` VALUES ('8140701', '81407', '8140701', 'Pendapatan Denda atas Keterlambatan Pelaksanaan Pekerjaan-LO');
INSERT INTO `sikd_rek` VALUES ('8140801', '81408', '8140801', 'Pendapatan Denda Pajak Hotel-LO');
INSERT INTO `sikd_rek` VALUES ('8140802', '81408', '8140802', 'Pendapatan Denda Pajak Restoran-LO');
INSERT INTO `sikd_rek` VALUES ('8140803', '81408', '8140803', 'Pendapatan Denda Pajak Hiburan-LO');
INSERT INTO `sikd_rek` VALUES ('8140804', '81408', '8140804', 'Pendapatan Denda Pajak Reklame-LO');
INSERT INTO `sikd_rek` VALUES ('8140805', '81408', '8140805', 'Pendapatan Denda Pajak Penerangan Jalan-LO');
INSERT INTO `sikd_rek` VALUES ('8140806', '81408', '8140806', 'Pendapatan Denda Pajak Parkir-LO');
INSERT INTO `sikd_rek` VALUES ('8140807', '81408', '8140807', 'Pendapatan Denda Pajak Air Tanah-LO');
INSERT INTO `sikd_rek` VALUES ('8140808', '81408', '8140808', 'Pendapatan Denda Pajak Sarang Burung Walet-LO');
INSERT INTO `sikd_rek` VALUES ('8140809', '81408', '8140809', 'Pendapatan Denda Pajak Mineral Bukan Logam dan Batuan-LO');
INSERT INTO `sikd_rek` VALUES ('8140810', '81408', '8140810', 'Pendapatan Denda Pajak Bumi dan Bangunan Perdesaan dan Perkotaan-LO');
INSERT INTO `sikd_rek` VALUES ('8140811', '81408', '8140811', 'Pendapatan Denda Bea Perolehan Hak Atas Tanah dan Bangunan-LO');
INSERT INTO `sikd_rek` VALUES ('8140901', '81409', '8140901', 'Pendapatan Denda Retribusi Pelayanan Kesehatan-LO');
INSERT INTO `sikd_rek` VALUES ('8140902', '81409', '8140902', 'Pendapatan Denda Retribusi Pelayanan Persampahan/ Kebersihan-LO');
INSERT INTO `sikd_rek` VALUES ('8140903', '81409', '8140903', 'Pendapatan Denda Retribusi Penggantian Biaya Cetak Kartu Tanda Penduduk dan Akta Catatan Sipil-LO');
INSERT INTO `sikd_rek` VALUES ('8140904', '81409', '8140904', 'Pendapatan Denda Retribusi Pelayanan Pemakaman dan Pengabuan Mayat-LO');
INSERT INTO `sikd_rek` VALUES ('8140905', '81409', '8140905', 'Pendapatan Denda Retribusi Pelayanan Parkir di Tepi Jalan Umum-LO');
INSERT INTO `sikd_rek` VALUES ('8140906', '81409', '8140906', 'Pendapatan Denda Retribusi Pelayanan Pasar-LO');
INSERT INTO `sikd_rek` VALUES ('8140907', '81409', '8140907', 'Pendapatan Denda Retribusi Pengujian Kendaraan Bermotor-LO');
INSERT INTO `sikd_rek` VALUES ('8140908', '81409', '8140908', 'Pendapatan Denda Retribusi Pemeriksaan Alat Pemadam Kebakaran-LO');
INSERT INTO `sikd_rek` VALUES ('8140909', '81409', '8140909', 'Pendapatan Denda Retribusi Penggantian Biaya Cetak Peta-LO');
INSERT INTO `sikd_rek` VALUES ('8140910', '81409', '8140910', 'Pendapatan Denda Retribusi Penyediaan dan/atau Penyedotan Kakus-LO');
INSERT INTO `sikd_rek` VALUES ('8140911', '81409', '8140911', 'Pendapatan Denda Retribusi Pengolahan Limbah Cair-LO');
INSERT INTO `sikd_rek` VALUES ('8140912', '81409', '8140912', 'Pendapatan Denda Retribusi Pelayanan Tera/Tera Ulang-LO');
INSERT INTO `sikd_rek` VALUES ('8140913', '81409', '8140913', 'Pendapatan Denda Retribusi Pelayanan Pendidikan-LO');
INSERT INTO `sikd_rek` VALUES ('8140914', '81409', '8140914', 'Pendapatan Denda Retribusi Pengendalian Menara Telekomunikasi-LO');
INSERT INTO `sikd_rek` VALUES ('8140915', '81409', '8140915', 'Pendapatan Denda Retribusi Pemakaian Kekayaan Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('8140916', '81409', '8140916', 'Pendapatan Denda Retribusi Pasar Grosir dan/ atau Pertokoan-LO');
INSERT INTO `sikd_rek` VALUES ('8140917', '81409', '8140917', 'Pendapatan Denda Retribusi Tempat Pelelangan-LO');
INSERT INTO `sikd_rek` VALUES ('8140918', '81409', '8140918', 'Pendapatan Denda Retribusi Terminal-LO');
INSERT INTO `sikd_rek` VALUES ('8140919', '81409', '8140919', 'Pendapatan Denda Retribusi Tempat Khusus Parkir-LO');
INSERT INTO `sikd_rek` VALUES ('8140920', '81409', '8140920', 'Pendapatan Denda Retribusi Tempat Penginapan/ Pesanggrahan/ Villa-LO');
INSERT INTO `sikd_rek` VALUES ('8140921', '81409', '8140921', 'Pendapatan Denda Retribusi Rumah Potong Hewan-LO');
INSERT INTO `sikd_rek` VALUES ('8140922', '81409', '8140922', 'Pendapatan Denda Retribusi Pelayanan Kepelabuhan-LO');
INSERT INTO `sikd_rek` VALUES ('8140923', '81409', '8140923', 'Pendapatan Denda Retribusi Tempat Rekreasi dan Olah raga- LO');
INSERT INTO `sikd_rek` VALUES ('8140924', '81409', '8140924', 'Pendapatan Denda Retribusi Penyebrangan Air-LO');
INSERT INTO `sikd_rek` VALUES ('8140925', '81409', '8140925', 'Pendapatan Denda Retribusi Penjualan Produksi Usaha Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('8140926', '81409', '8140926', 'Pendapatan Denda Retribusi Izin Mendirikan Bangunan-LO');
INSERT INTO `sikd_rek` VALUES ('8140927', '81409', '8140927', 'Pendapatan Denda Retribusi Izin Tempat Penjualan Minuman Beralkohol-LO');
INSERT INTO `sikd_rek` VALUES ('8140928', '81409', '8140928', 'Pendapatan Denda Retribusi Izin Gangguan-LO');
INSERT INTO `sikd_rek` VALUES ('8140929', '81409', '8140929', 'Pendapatan Denda Retribusi Izin Trayek-LO');
INSERT INTO `sikd_rek` VALUES ('8140930', '81409', '8140930', 'Pendapatan Denda Retribusi Izin Perikanan-LO');
INSERT INTO `sikd_rek` VALUES ('8140931', '81409', '8140931', 'Pendapatan Denda Retribusi Pengendalian Lalu Lintas-LO');
INSERT INTO `sikd_rek` VALUES ('8140932', '81409', '8140932', 'Pendapatan Denda Retribusi Perpanjangan Izin Mempekerjakan Tenaga Kerja Asing (IMTA)-LO');
INSERT INTO `sikd_rek` VALUES ('8141001', '81410', '8141001', 'Pendapatan Denda Sewa Aset Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('8141002', '81410', '8141002', 'Pendapatan Denda Kerjasama Pemanfaatan Aset Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('8141003', '81410', '8141003', 'Pendapatan Denda Bangun Guna Serah-LO');
INSERT INTO `sikd_rek` VALUES ('8141004', '81410', '8141004', 'Pendapatan Denda Bangun Serah Guna-LO');
INSERT INTO `sikd_rek` VALUES ('8141101', '81411', '8141101', 'Pendapatan Denda Atas Pelanggaran Perda/Perwal-LO');
INSERT INTO `sikd_rek` VALUES ('8141201', '81412', '8141201', 'Hasil Eksekusi Atas Jaminan atas Pelaksanaan Pengadaan Barang/Jasa-LO');
INSERT INTO `sikd_rek` VALUES ('8141202', '81412', '8141202', 'Hasil Eksekusi Atas Jaminan atas Pembongkaran Reklame-LO');
INSERT INTO `sikd_rek` VALUES ('8141301', '81413', '8141301', 'Pendapatan dari Pengembalian Pajak Penghasilan Pasal 21-LO');
INSERT INTO `sikd_rek` VALUES ('8141302', '81413', '8141302', 'Pendapatan Dari Pengembalian Kelebihan Pembayaran Asuransi Kesehatan-LO');
INSERT INTO `sikd_rek` VALUES ('8141303', '81413', '8141303', 'Pendapatan Dari Pengembalian Kelebihan Belanja-LO');
INSERT INTO `sikd_rek` VALUES ('8141304', '81413', '8141304', 'Pendapatan Dari Pengembalian Kelebihan Pembayaran Lainnya- LO');
INSERT INTO `sikd_rek` VALUES ('8141401', '81414', '8141401', 'Fasilitas Sosial-LO');
INSERT INTO `sikd_rek` VALUES ('8141402', '81414', '8141402', 'Fasilitas Umum-LO');
INSERT INTO `sikd_rek` VALUES ('8141501', '81415', '8141501', 'Uang Pendaftaran/Ujian Masuk-LO');
INSERT INTO `sikd_rek` VALUES ('8141502', '81415', '8141502', 'Uang Penyelenggaraan Sekolah/Pendidikan dan Pelatihan-LO');
INSERT INTO `sikd_rek` VALUES ('8141503', '81415', '8141503', 'Uang Ujian Kenaikan Tingkat/Kelas-LO');
INSERT INTO `sikd_rek` VALUES ('8141601', '81416', '8141601', 'Angsuran/Cicilan Penjualan Rumah Dinas Daerah Golongan III-LO');
INSERT INTO `sikd_rek` VALUES ('8141602', '81416', '8141602', 'Angsuran/Cicilan Penjualan Kenderaan Perorangan  Dinas-LO');
INSERT INTO `sikd_rek` VALUES ('8141701', '81417', '8141701', 'Hasil dari Pemanfaatan Kekayaan Daerah Sewa-LO');
INSERT INTO `sikd_rek` VALUES ('8141702', '81417', '8141702', 'Hasil dari Pemanfaatan Kekayaan Daerah Kerjasama Pemanfaatan- LO');
INSERT INTO `sikd_rek` VALUES ('8141703', '81417', '8141703', 'Hasil dari Pemanfaatan Kekayaan Daerah Bangun Guna Serah-LO');
INSERT INTO `sikd_rek` VALUES ('8141704', '81417', '8141704', 'Hasil dari Pemanfaatan Kekayaan Daerah Bangun Serah Guna-LO');
INSERT INTO `sikd_rek` VALUES ('8141801', '81418', '8141801', 'Pendapatan Jasa Layanan Umum BLUD-LO');
INSERT INTO `sikd_rek` VALUES ('8141802', '81418', '8141802', 'Pendapatan Hibah BLUD-LO');
INSERT INTO `sikd_rek` VALUES ('8141803', '81418', '8141803', 'Pendapatan Hasil Kerjasama BLUD-LO');
INSERT INTO `sikd_rek` VALUES ('8141901', '81419', '8141901', 'Pendapatan Dana Kapitasi-LO');
INSERT INTO `sikd_rek` VALUES ('8142001', '81420', '8142001', 'Lain-Lain PAD yang Sah Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('8210101', '82101', '8210101', 'Bagi Hasil dari Pajak Bumi dan Bangunan sektor Pertambangan-LO');
INSERT INTO `sikd_rek` VALUES ('8210102', '82101', '8210102', 'Bagi Hasil dari Pajak Bumi dan Bangunan sektor Perkebunan-LO');
INSERT INTO `sikd_rek` VALUES ('8210103', '82101', '8210103', 'Bagi Hasil dari Pajak Bumi dan Bangunan sektor Perhutanan-LO');
INSERT INTO `sikd_rek` VALUES ('8210104', '82101', '8210104', 'Bagi Hasil dari Pajak Penghasilan (PPh)-LO');
INSERT INTO `sikd_rek` VALUES ('8210105', '82101', '8210105', 'Bagi Hasil Cukai Hasil Tembakau-LO');
INSERT INTO `sikd_rek` VALUES ('8210201', '82102', '8210201', 'Bagi Hasil dari Iuran Hak Pengusahaan Hutan-LO');
INSERT INTO `sikd_rek` VALUES ('8210202', '82102', '8210202', 'Bagi Hasil dari Provisi Sumber Daya Hutan-LO');
INSERT INTO `sikd_rek` VALUES ('8210203', '82102', '8210203', 'Bagi Hasil dari Dana Reboisasi-LO');
INSERT INTO `sikd_rek` VALUES ('8210204', '82102', '8210204', 'Bagi Hasil dari Iuran Tetap (Land-Rent)-LO');
INSERT INTO `sikd_rek` VALUES ('8210205', '82102', '8210205', 'Bagi Hasil dari Iuran Eksplorasi dan Iuran Eksploitasi (Royalti)-LO');
INSERT INTO `sikd_rek` VALUES ('8210206', '82102', '8210206', 'Bagi Hasil dari Pungutan Pengusahaan Perikanan-LO');
INSERT INTO `sikd_rek` VALUES ('8210207', '82102', '8210207', 'Bagi Hasil dari Pungutan Hasil Perikanan-LO');
INSERT INTO `sikd_rek` VALUES ('8210208', '82102', '8210208', 'Bagi Hasil dari Pertambangan Minyak Bumi-LO');
INSERT INTO `sikd_rek` VALUES ('8210209', '82102', '8210209', 'Bagi Hasil dari Pertambangan Gas Bumi-LO');
INSERT INTO `sikd_rek` VALUES ('8210210', '82102', '8210210', 'Bagi Hasil dari Pertambangan Panas Bumi-LO');
INSERT INTO `sikd_rek` VALUES ('8210301', '82103', '8210301', 'Dana Alokasi Umum-LO');
INSERT INTO `sikd_rek` VALUES ('8210401', '82104', '8210401', 'DAK Bidang Infrastruktur Jalan-LO');
INSERT INTO `sikd_rek` VALUES ('8210402', '82104', '8210402', 'DAK Bidang Infrastruktur Irigasi-LO');
INSERT INTO `sikd_rek` VALUES ('8210403', '82104', '8210403', 'DAK Bidang Infrastruktur Air Minum-LO');
INSERT INTO `sikd_rek` VALUES ('8210404', '82104', '8210404', 'DAK Bidang Infrastruktur Sanitasi- LO');
INSERT INTO `sikd_rek` VALUES ('8210405', '82104', '8210405', 'DAK Bidang Keluarga Berencana -LO');
INSERT INTO `sikd_rek` VALUES ('8210406', '82104', '8210406', 'DAK Bidang Kehutanan-LO');
INSERT INTO `sikd_rek` VALUES ('8210407', '82104', '8210407', 'DAK Bidang Perumahan dan Kawasan Pemukiman-LO');
INSERT INTO `sikd_rek` VALUES ('8210408', '82104', '8210408', 'DAK Bidang Kesehatan-LO');
INSERT INTO `sikd_rek` VALUES ('8210409', '82104', '8210409', 'DAK Bidang Kelautan dan Perikanan-LO');
INSERT INTO `sikd_rek` VALUES ('8210410', '82104', '8210410', 'DAK Bidang Prasarana Pemerintahan-LO');
INSERT INTO `sikd_rek` VALUES ('8210411', '82104', '8210411', 'DAK Bidang Perdagangan-LO');
INSERT INTO `sikd_rek` VALUES ('8210412', '82104', '8210412', 'DAK Bidang Lingkungan Hidup-LO');
INSERT INTO `sikd_rek` VALUES ('8210413', '82104', '8210413', 'DAK Bidang Pertanian-LO');
INSERT INTO `sikd_rek` VALUES ('8210414', '82104', '8210414', 'DAK Bidang Pendidikan-LO');
INSERT INTO `sikd_rek` VALUES ('8210415', '82104', '8210415', 'DAK Bidang Keselamatan Transportasi Darat-LO');
INSERT INTO `sikd_rek` VALUES ('8220301', '82203', '8220301', 'Tunjangan Profesi Guru PNSD-LO ');
INSERT INTO `sikd_rek` VALUES ('8220302', '82203', '8220302', 'Dana Tambahan Penghasilan Guru PNSD-LO');
INSERT INTO `sikd_rek` VALUES ('8220303', '82203', '8220303', 'Dana Insentif Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('8220304', '82203', '8220304', 'Dana Proyek Pemerintah Daerah dan Desentralisasi-LO');
INSERT INTO `sikd_rek` VALUES ('8230101', '82301', '8230101', 'Pendapatan Bagi Hasil Pajak- LO');
INSERT INTO `sikd_rek` VALUES ('8230201', '82302', '8230201', 'Pendapatan Bagi hasil Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('8240101', '82401', '8240101', 'Bantuan Keuangan dari Pemerintah  Daerah Provinsi-LO');
INSERT INTO `sikd_rek` VALUES ('8240201', '82402', '8240201', 'Bantuan Keuangan dari Pemerintah  Daerah Kabupaten/Kota-LO');
INSERT INTO `sikd_rek` VALUES ('8310101', '83101', '8310101', 'Pendapatan Hibah dari Pemerintah-LO');
INSERT INTO `sikd_rek` VALUES ('8310201', '83102', '8310201', 'Pendapatan Hibah dari Pemerintah Daerah Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('8310202', '83102', '8310202', 'Pendapatan Hibah Dana BOSNAS-LO');
INSERT INTO `sikd_rek` VALUES ('8310301', '83103', '8310301', 'Pendapatan Hibah dari Badan/Lembaga/Organisasi Swasta Dalam Negeri- LO');
INSERT INTO `sikd_rek` VALUES ('8310401', '83104', '8310401', 'Pendapatan Hibah Dari Kelompok Masyarakat-LO');
INSERT INTO `sikd_rek` VALUES ('8310402', '83104', '8310402', 'Pendapatan Hibah Dari Kelompok Perorangan-LO');
INSERT INTO `sikd_rek` VALUES ('8320101', '83201', '8320101', 'Korban/Kerusakan Akibat Bencana Alam-LO');
INSERT INTO `sikd_rek` VALUES ('8330101', '83301', '8330101', 'Pendapatan Sumbangan Pihak Ketiga-LO');
INSERT INTO `sikd_rek` VALUES ('8410101', '84101', '8410101', 'Surplus Penjualan Aset Tanah-LO');
INSERT INTO `sikd_rek` VALUES ('8410102', '84101', '8410102', 'Surplus Penjualan Aset Peralatan dan Mesin-LO');
INSERT INTO `sikd_rek` VALUES ('8410103', '84101', '8410103', 'Surplus Penjualan Aset Gedung dan Bangunan-LO');
INSERT INTO `sikd_rek` VALUES ('8410104', '84101', '8410104', 'Surplus Penjualan Aset Tetap Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('8410105', '84101', '8410105', 'Surplus Pelepasan Investasi Jangka Panjang- LO');
INSERT INTO `sikd_rek` VALUES ('8410106', '84101', '8410106', 'Surplus Pelepasan Aset Lainnya- LO');
INSERT INTO `sikd_rek` VALUES ('8420201', '84202', '8420201', 'Surplus Penyelesaian Utang Dalam Negeri Lembaga Keuangan Bank-LO');
INSERT INTO `sikd_rek` VALUES ('8420202', '84202', '8420202', 'Surplus Penyelesaian Utang Dari Lembaga Keuangan Bukan Bank-LO');
INSERT INTO `sikd_rek` VALUES ('8420203', '84202', '8420203', 'Surplus Penyelesaian Utang Dalam Negeri- Obligasi-LO');
INSERT INTO `sikd_rek` VALUES ('8420204', '84202', '8420204', 'Surplus Penyelesaian Utang-Pemerintah Pusat-LO');
INSERT INTO `sikd_rek` VALUES ('8420205', '84202', '8420205', 'Surplus Penyelesaian Utang-Pemerintah Provinsi-LO');
INSERT INTO `sikd_rek` VALUES ('8420206', '84202', '8420206', 'Surplus Penyelesaian Utang- Pemerintah Kabupaten/Kota-LO');
INSERT INTO `sikd_rek` VALUES ('8420207', '84202', '8420207', 'Surplus Penyelesaian Kewajiban Jangka Panjang Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('8430301', '84303', '8430301', 'Surplus dari Kegiatan NonOperasional Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('8430302', '84303', '8430302', 'Surplus Pelepasan Investasi Jangka Pendek- LO');
INSERT INTO `sikd_rek` VALUES ('8510101', '85101', '8510101', 'Pendapatan Pos Luar Biasa-LO');
INSERT INTO `sikd_rek` VALUES ('9110101', '91101', '9110101', 'Gaji Pokok PNS / Uang Representasi');
INSERT INTO `sikd_rek` VALUES ('9110102', '91101', '9110102', 'Tunjangan Keluarga');
INSERT INTO `sikd_rek` VALUES ('9110103', '91101', '9110103', 'Tunjangan Jabatan');
INSERT INTO `sikd_rek` VALUES ('9110104', '91101', '9110104', 'Tunjangan Fungsional');
INSERT INTO `sikd_rek` VALUES ('9110105', '91101', '9110105', 'Tunjangan Fungsional Umum');
INSERT INTO `sikd_rek` VALUES ('9110106', '91101', '9110106', 'Tunjangan Beras');
INSERT INTO `sikd_rek` VALUES ('9110107', '91101', '9110107', 'Tunjangan PPh/Tunjangan Khusus');
INSERT INTO `sikd_rek` VALUES ('9110108', '91101', '9110108', 'Pembulatan Gaji');
INSERT INTO `sikd_rek` VALUES ('9110109', '91101', '9110109', 'Iuran Jaminan Kesehatan ');
INSERT INTO `sikd_rek` VALUES ('9110110', '91101', '9110110', 'Uang Paket');
INSERT INTO `sikd_rek` VALUES ('9110111', '91101', '9110111', 'Tunjangan Badan Musyawarah');
INSERT INTO `sikd_rek` VALUES ('9110112', '91101', '9110112', 'Tunjangan Komisi');
INSERT INTO `sikd_rek` VALUES ('9110113', '91101', '9110113', 'Tunjangan Badan Anggaran');
INSERT INTO `sikd_rek` VALUES ('9110114', '91101', '9110114', 'Tunjangan Badan Kehormatan');
INSERT INTO `sikd_rek` VALUES ('9110115', '91101', '9110115', 'Tunjangan Alat Kelengkapan Lainnya');
INSERT INTO `sikd_rek` VALUES ('9110116', '91101', '9110116', 'Tunjangan Perumahan');
INSERT INTO `sikd_rek` VALUES ('9110117', '91101', '9110117', 'Uang Duka Wafat/Tewas');
INSERT INTO `sikd_rek` VALUES ('9110118', '91101', '9110118', 'Uang Jasa Pengabdian');
INSERT INTO `sikd_rek` VALUES ('9110119', '91101', '9110119', 'Belanja Penunjang Operasional Pimpinan DPRD');
INSERT INTO `sikd_rek` VALUES ('9110120', '91101', '9110120', 'Tunjangan Kesehatan DPRD');
INSERT INTO `sikd_rek` VALUES ('9110121', '91101', '9110121', 'Iuran Asuransi Kecelakaan Kerja dan Kematian');
INSERT INTO `sikd_rek` VALUES ('9110201', '91102', '9110201', 'Tambahan Penghasilan berdasarkan beban kerja ');
INSERT INTO `sikd_rek` VALUES ('9110202', '91102', '9110202', 'Tambahan Penghasilan berdasarkan tempat bertugas');
INSERT INTO `sikd_rek` VALUES ('9110203', '91102', '9110203', 'Tambahan Penghasilan berdasarkan kondisi kerja');
INSERT INTO `sikd_rek` VALUES ('9110204', '91102', '9110204', 'Tambahan Penghasilan berdasarkan kelangkaan profesi ');
INSERT INTO `sikd_rek` VALUES ('9110205', '91102', '9110205', 'Tambahan Penghasilan Lainnya');
INSERT INTO `sikd_rek` VALUES ('9110301', '91103', '9110301', 'Beban Tunjangan Komunikasi Intensif Pimpinan dan Anggota DPRD');
INSERT INTO `sikd_rek` VALUES ('9110302', '91103', '9110302', 'Beban Penunjang Operasional KDH/WKDH');
INSERT INTO `sikd_rek` VALUES ('9110401', '91104', '9110401', 'Beban Pemungutan Pajak Bumi dan Bangunan Pertambangan');
INSERT INTO `sikd_rek` VALUES ('9110402', '91104', '9110402', 'Beban Pemungutan Pajak Bumi dan Bangunan Perkebunan');
INSERT INTO `sikd_rek` VALUES ('9110403', '91104', '9110403', 'Beban Pemungutan Pajak Bumi dan Bangunan Perhutanan');
INSERT INTO `sikd_rek` VALUES ('9110501', '91105', '9110501', 'Insentif Pemungutan Pajak Daerah - Pajak Hotel-LO');
INSERT INTO `sikd_rek` VALUES ('9110502', '91105', '9110502', 'Insentif Pemungutan Pajak Daerah - Pajak Restoran-LO');
INSERT INTO `sikd_rek` VALUES ('9110503', '91105', '9110503', 'Insentif Pemungutan Pajak Daerah - Pajak Hiburan-LO');
INSERT INTO `sikd_rek` VALUES ('9110504', '91105', '9110504', 'Insentif Pemungutan Pajak Daerah - Pajak Reklame-LO');
INSERT INTO `sikd_rek` VALUES ('9110505', '91105', '9110505', 'Insentif Pemungutan Pajak Daerah - Pajak Penerangan Jalan-LO');
INSERT INTO `sikd_rek` VALUES ('9110506', '91105', '9110506', 'Insentif Pemungutan Pajak Daerah - Pajak Parkir-LO');
INSERT INTO `sikd_rek` VALUES ('9110507', '91105', '9110507', 'Insentif Pemungutan Pajak Daerah - Pajak Air Tanah-LO');
INSERT INTO `sikd_rek` VALUES ('9110508', '91105', '9110508', 'Insentif Pemungutan Pajak Daerah - Pajak Sarang Burung Walet-LO');
INSERT INTO `sikd_rek` VALUES ('9110509', '91105', '9110509', 'Insentif Pemungutan Pajak Daerah - Pajak Mineral Bukan Logam dan Batuan-LO');
INSERT INTO `sikd_rek` VALUES ('9110510', '91105', '9110510', 'Insentif Pemungutan Pajak Daerah - Pajak Bumi dan Bangunan Perdesaan dan Perkotaan-LO');
INSERT INTO `sikd_rek` VALUES ('9110511', '91105', '9110511', 'Insentif Pemungutan Pajak Daerah - Bea Perolehan Hak Atas Tanah dan Bangunan-LO');
INSERT INTO `sikd_rek` VALUES ('9110601', '91106', '9110601', 'Insentif Pemungutan Retribusi Daerah-Pelayanan Kesehatan-LO');
INSERT INTO `sikd_rek` VALUES ('9110602', '91106', '9110602', 'Insentif Pemungutan Retribusi Daerah-Pelayanan Persampahan/ Kebersihan-LO');
INSERT INTO `sikd_rek` VALUES ('9110603', '91106', '9110603', 'Insentif Pemungutan Retribusi Daerah-Penggantian Biaya Cetak Kartu Tanda Penduduk dan Akta Catatan Sipil-LO');
INSERT INTO `sikd_rek` VALUES ('9110604', '91106', '9110604', 'Insentif Pemungutan Retribusi Daerah-Pelayanan Pemakaman dan Pengabuan Mayat-LO');
INSERT INTO `sikd_rek` VALUES ('9110605', '91106', '9110605', 'Insentif Pemungutan Retribusi Daerah-Pelayanan Parkir di Tepi Jalan Umum-LO');
INSERT INTO `sikd_rek` VALUES ('9110606', '91106', '9110606', 'Insentif Pemungutan Retribusi Daerah-Pelayanan Pasar-LO');
INSERT INTO `sikd_rek` VALUES ('9110607', '91106', '9110607', 'Insentif Pemungutan Retribusi Daerah-Pengujian Kendaraan Bermotor-LO');
INSERT INTO `sikd_rek` VALUES ('9110608', '91106', '9110608', 'Insentif Pemungutan Retribusi Daerah-Pemeriksaan Alat Pemadam Kebakaran-LO');
INSERT INTO `sikd_rek` VALUES ('9110609', '91106', '9110609', 'Insentif Pemungutan Retribusi Daerah-Penggantian Biaya Cetak Peta-LO');
INSERT INTO `sikd_rek` VALUES ('9110610', '91106', '9110610', 'Insentif Pemungutan Retribusi Daerah-Penyediaan dan/atau Penyedotan Kakus-LO');
INSERT INTO `sikd_rek` VALUES ('9110611', '91106', '9110611', 'Insentif Pemungutan Retribusi Daerah-Pengolahan Limbah Cair-LO');
INSERT INTO `sikd_rek` VALUES ('9110612', '91106', '9110612', 'Insentif Pemungutan Retribusi Daerah-Pelayanan Tera/Tera Ulang-LO');
INSERT INTO `sikd_rek` VALUES ('9110613', '91106', '9110613', 'Insentif Pemungutan Retribusi Daerah-Pelayanan Pendidikan-LO');
INSERT INTO `sikd_rek` VALUES ('9110614', '91106', '9110614', 'Insentif Pemungutan Retribusi Daerah-Pengendalian Menara Telekomunikasi-LO');
INSERT INTO `sikd_rek` VALUES ('9110615', '91106', '9110615', 'Insentif Pemungutan Retribusi Daerah-Pemakaian Kekayaan Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('9110616', '91106', '9110616', 'Insentif Pemungutan Retribusi Daerah-Pasar Grosir dan/ atau Pertokoan-LO');
INSERT INTO `sikd_rek` VALUES ('9110617', '91106', '9110617', 'Insentif Pemungutan Retribusi Daerah-Tempat Pelelangan-LO');
INSERT INTO `sikd_rek` VALUES ('9110618', '91106', '9110618', 'Insentif Pemungutan Retribusi Daerah-Terminal-LO');
INSERT INTO `sikd_rek` VALUES ('9110619', '91106', '9110619', 'Insentif Pemungutan Retribusi Daerah-Tempat Khusus Parkir-LO');
INSERT INTO `sikd_rek` VALUES ('9110620', '91106', '9110620', 'Insentif Pemungutan Retribusi Daerah-Tempat Penginapan/ Pesanggrahan/ Villa-LO');
INSERT INTO `sikd_rek` VALUES ('9110621', '91106', '9110621', 'Insentif Pemungutan Retribusi Daerah-Rumah Potong Hewan-LO');
INSERT INTO `sikd_rek` VALUES ('9110622', '91106', '9110622', 'Insentif Pemungutan Retribusi Daerah-Pelayanan Kepelabuhan-LO');
INSERT INTO `sikd_rek` VALUES ('9110623', '91106', '9110623', 'Insentif Pemungutan Retribusi Daerah-Tempat Rekreasi dan Olahraga- LO');
INSERT INTO `sikd_rek` VALUES ('9110624', '91106', '9110624', 'Insentif Pemungutan Retribusi Daerah-Penyebrangan Air-LO');
INSERT INTO `sikd_rek` VALUES ('9110625', '91106', '9110625', 'Insentif Pemungutan Retribusi Daerah-Penjualan Produksi Usaha Daerah-LO');
INSERT INTO `sikd_rek` VALUES ('9110626', '91106', '9110626', 'Insentif Pemungutan Retribusi Daerah-Izin Mendirikan Bangunan-LO');
INSERT INTO `sikd_rek` VALUES ('9110627', '91106', '9110627', 'Insentif Pemungutan Retribusi Daerah-Izin Tempat Penjualan Minuman Beralkohol-LO');
INSERT INTO `sikd_rek` VALUES ('9110628', '91106', '9110628', 'Insentif Pemungutan Retribusi Daerah-Izin Gangguan-LO');
INSERT INTO `sikd_rek` VALUES ('9110629', '91106', '9110629', 'Insentif Pemungutan Retribusi Daerah-Izin Trayek-LO');
INSERT INTO `sikd_rek` VALUES ('9110630', '91106', '9110630', 'Insentif Pemungutan Retribusi Daerah-Izin Perikanan-LO');
INSERT INTO `sikd_rek` VALUES ('9110631', '91106', '9110631', 'Insentif Pemungutan Retribusi Daerah-Pengendalian Lalu Lintas-LO');
INSERT INTO `sikd_rek` VALUES ('9110632', '91106', '9110632', 'Insentif Pemungutan Retribusi Daerah-Perpanjangan Izin Mempekerjakan Tenaga Kerja Asing (IMTA)-LO');
INSERT INTO `sikd_rek` VALUES ('9110701', '91107', '9110701', 'Uang Lembur PNS-LO');
INSERT INTO `sikd_rek` VALUES ('9110702', '91107', '9110702', 'Uang Lembur NonPNS-LO');
INSERT INTO `sikd_rek` VALUES ('9120101', '91201', '9120101', 'Beban Persediaan Alat Tulis Kantor');
INSERT INTO `sikd_rek` VALUES ('9120102', '91201', '9120102', 'Beban Persediaan Dokumen/Administrasi Tender');
INSERT INTO `sikd_rek` VALUES ('9120103', '91201', '9120103', 'Beban Persediaan Alat Listrik dan Elektronik (lampu pijar, baterai kering)');
INSERT INTO `sikd_rek` VALUES ('9120104', '91201', '9120104', 'Beban Persediaan Perangko, Materai dan Benda Pos Lainnya');
INSERT INTO `sikd_rek` VALUES ('9120105', '91201', '9120105', 'Beban Persediaan peralatan kebersihan dan bahan pembersih');
INSERT INTO `sikd_rek` VALUES ('9120106', '91201', '9120106', 'Beban Persediaan Bahan Bakar Minyak/Gas');
INSERT INTO `sikd_rek` VALUES ('9120107', '91201', '9120107', 'Beban Persediaan pengisian tabung pemadam kebakaran');
INSERT INTO `sikd_rek` VALUES ('9120108', '91201', '9120108', 'Beban Persediaan pengisian isi tabung gas');
INSERT INTO `sikd_rek` VALUES ('9120109', '91201', '9120109', 'Beban Bahan Pakai Habis Lainnya');
INSERT INTO `sikd_rek` VALUES ('9120201', '91202', '9120201', 'Beban Persediaan Bahan Baku Bangunan');
INSERT INTO `sikd_rek` VALUES ('9120202', '91202', '9120202', 'Beban Persediaan Bahan/Bibit Tanaman');
INSERT INTO `sikd_rek` VALUES ('9120203', '91202', '9120203', 'Beban Persediaan Bibit Ternak/Bibit Ikan');
INSERT INTO `sikd_rek` VALUES ('9120204', '91202', '9120204', 'Beban Persediaan Bahan Obat-Obatan');
INSERT INTO `sikd_rek` VALUES ('9120205', '91202', '9120205', 'Beban Persediaan Bahan Kimia');
INSERT INTO `sikd_rek` VALUES ('9120206', '91202', '9120206', 'Beban Persediaan Bahan Baku Makanan dan Minuman ');
INSERT INTO `sikd_rek` VALUES ('9120207', '91202', '9120207', 'Beban Persediaan Bahan/Material Lainnya');
INSERT INTO `sikd_rek` VALUES ('9120301', '91203', '9120301', 'Beban Jasa telepon');
INSERT INTO `sikd_rek` VALUES ('9120302', '91203', '9120302', 'Beban Jasa air');
INSERT INTO `sikd_rek` VALUES ('9120303', '91203', '9120303', 'Beban Jasa listrik');
INSERT INTO `sikd_rek` VALUES ('9120304', '91203', '9120304', 'Beban Jasa pengumuman lelang/ pemenang lelang');
INSERT INTO `sikd_rek` VALUES ('9120305', '91203', '9120305', 'Beban Jasa surat kabar/majalah ');
INSERT INTO `sikd_rek` VALUES ('9120306', '91203', '9120306', 'Beban Jasa kawat/faksimili/internet');
INSERT INTO `sikd_rek` VALUES ('9120307', '91203', '9120307', 'Beban Jasa paket/pengiriman');
INSERT INTO `sikd_rek` VALUES ('9120308', '91203', '9120308', 'Beban Jasa Sertifikasi');
INSERT INTO `sikd_rek` VALUES ('9120309', '91203', '9120309', 'Beban Jasa Transaksi Keuangan ');
INSERT INTO `sikd_rek` VALUES ('9120310', '91203', '9120310', 'Beban Jasa Administrasi Pemungutan Pajak Penerangan Jalan Umum');
INSERT INTO `sikd_rek` VALUES ('9120311', '91203', '9120311', 'Beban Jasa Administrasi Pemungutan Pajak Bahan Bakar Kendaraan Bermotor');
INSERT INTO `sikd_rek` VALUES ('9120312', '91203', '9120312', 'Beban Jasa Kantor Lainnya');
INSERT INTO `sikd_rek` VALUES ('9120401', '91204', '9120401', 'Beban Jasa Premi Asuransi Kesehatan ');
INSERT INTO `sikd_rek` VALUES ('9120402', '91204', '9120402', 'Beban Jasa Premi Asuransi Barang Milik Daerah');
INSERT INTO `sikd_rek` VALUES ('9120403', '91204', '9120403', 'Beban Premi Asuransi Lainnya');
INSERT INTO `sikd_rek` VALUES ('9120501', '91205', '9120501', 'Beban Jasa Servis');
INSERT INTO `sikd_rek` VALUES ('9120502', '91205', '9120502', 'Beban Penggantian Suku Cadang');
INSERT INTO `sikd_rek` VALUES ('9120503', '91205', '9120503', 'Beban Bahan Bakar Minyak/Gas dan pelumas');
INSERT INTO `sikd_rek` VALUES ('9120504', '91205', '9120504', 'Beban Jasa KIR');
INSERT INTO `sikd_rek` VALUES ('9120505', '91205', '9120505', 'Beban Pajak Kendaraan Bermotor');
INSERT INTO `sikd_rek` VALUES ('9120506', '91205', '9120506', 'Beban Bea Balik Nama Kendaraan Bermotor');
INSERT INTO `sikd_rek` VALUES ('9120601', '91206', '9120601', 'Beban Cetak');
INSERT INTO `sikd_rek` VALUES ('9120602', '91206', '9120602', 'Beban Penggandaan');
INSERT INTO `sikd_rek` VALUES ('9120701', '91207', '9120701', 'Beban sewa rumah jabatan/rumah dinas ');
INSERT INTO `sikd_rek` VALUES ('9120702', '91207', '9120702', 'Beban sewa gedung/ kantor/tempat kerja');
INSERT INTO `sikd_rek` VALUES ('9120703', '91207', '9120703', 'Beban sewa ruang rapat/pertemuan');
INSERT INTO `sikd_rek` VALUES ('9120704', '91207', '9120704', 'Beban sewa tempat parkir/uang tambat/hanggar sarana mobilitas');
INSERT INTO `sikd_rek` VALUES ('9120705', '91207', '9120705', 'Beban Sewa Ruang Lainnya');
INSERT INTO `sikd_rek` VALUES ('9120801', '91208', '9120801', 'Beban Sewa Sarana Mobilitas Darat');
INSERT INTO `sikd_rek` VALUES ('9120802', '91208', '9120802', 'Beban Sewa Sarana Mobilitas Air');
INSERT INTO `sikd_rek` VALUES ('9120803', '91208', '9120803', 'Beban Sewa Sarana Mobilitas Udara');
INSERT INTO `sikd_rek` VALUES ('9120901', '91209', '9120901', 'Beban Sewa Ekskavator');
INSERT INTO `sikd_rek` VALUES ('9120902', '91209', '9120902', 'Beban Sewa Buldoser');
INSERT INTO `sikd_rek` VALUES ('9120903', '91209', '9120903', 'Beban Sewa Alat Berat Lainnya');
INSERT INTO `sikd_rek` VALUES ('9121001', '91210', '9121001', 'Beban Sewa Meja Kursi');
INSERT INTO `sikd_rek` VALUES ('9121002', '91210', '9121002', 'Beban Sewa Komputer dan Printer');
INSERT INTO `sikd_rek` VALUES ('9121003', '91210', '9121003', 'Beban Sewa Proyektor');
INSERT INTO `sikd_rek` VALUES ('9121004', '91210', '9121004', 'Beban Sewa Generator');
INSERT INTO `sikd_rek` VALUES ('9121005', '91210', '9121005', 'Beban Sewa Tenda');
INSERT INTO `sikd_rek` VALUES ('9121006', '91210', '9121006', 'Beban Sewa Pakaian Adat/Tradisional');
INSERT INTO `sikd_rek` VALUES ('9121007', '91210', '9121007', 'Beban Sewa Perlengkapan dan Peralatan Kantor Lainnya');
INSERT INTO `sikd_rek` VALUES ('9121101', '91211', '9121101', 'Beban Makanan dan Minuman Harian Pegawai');
INSERT INTO `sikd_rek` VALUES ('9121102', '91211', '9121102', 'Beban Makanan dan Minuman Rapat/Pelaksanaan Kegiatan');
INSERT INTO `sikd_rek` VALUES ('9121103', '91211', '9121103', 'Beban Makanan dan Minuman Pasien');
INSERT INTO `sikd_rek` VALUES ('9121104', '91211', '9121104', 'Beban Makanan dan Minuman Pelatihan');
INSERT INTO `sikd_rek` VALUES ('9121201', '91212', '9121201', 'Beban pakaian Dinas KDH dan WKDH');
INSERT INTO `sikd_rek` VALUES ('9121202', '91212', '9121202', 'Beban Pakaian Sipil Harian (PSH)');
INSERT INTO `sikd_rek` VALUES ('9121203', '91212', '9121203', 'BebanPakaian Sipil Lengkap (PSL)');
INSERT INTO `sikd_rek` VALUES ('9121204', '91212', '9121204', 'Beban Pakaian Dinas Harian (PDH)');
INSERT INTO `sikd_rek` VALUES ('9121205', '91212', '9121205', 'Beban Pakaian Dinas Upacara (PDU)');
INSERT INTO `sikd_rek` VALUES ('9121301', '91213', '9121301', 'Beban Pakaian Kerja Lapangan');
INSERT INTO `sikd_rek` VALUES ('9121401', '91214', '9121401', 'Beban Pakaian KORPRI');
INSERT INTO `sikd_rek` VALUES ('9121402', '91214', '9121402', 'Beban Pakaian Adat Daerah');
INSERT INTO `sikd_rek` VALUES ('9121403', '91214', '9121403', 'Beban Pakaian Batik Tradisional');
INSERT INTO `sikd_rek` VALUES ('9121404', '91214', '9121404', 'Beban Pakaian Olahraga');
INSERT INTO `sikd_rek` VALUES ('9121501', '91215', '9121501', 'Beban Perjalanan Dinas dalam daerah');
INSERT INTO `sikd_rek` VALUES ('9121502', '91215', '9121502', 'Beban Perjalanan Dinas luar daerah');
INSERT INTO `sikd_rek` VALUES ('9121503', '91215', '9121503', 'Beban Perjalanan Dinas luar negeri');
INSERT INTO `sikd_rek` VALUES ('9121601', '91216', '9121601', 'Beban Perjalanan Pindah Tugas dalam daerah');
INSERT INTO `sikd_rek` VALUES ('9121602', '91216', '9121602', 'Beban Perjalanan Pindah Tugas luar daerah');
INSERT INTO `sikd_rek` VALUES ('9121701', '91217', '9121701', 'Beban Pemulangan Pegawai Yang Pensiun dalam daerah');
INSERT INTO `sikd_rek` VALUES ('9121702', '91217', '9121702', 'Beban Pemulangan Pegawai Yang Pensiun luar daerah');
INSERT INTO `sikd_rek` VALUES ('9121801', '91218', '9121801', 'Beban Pemeliharan Tanah');
INSERT INTO `sikd_rek` VALUES ('9121802', '91218', '9121802', 'Beban Pemeliharan Peralatan dan Mesin');
INSERT INTO `sikd_rek` VALUES ('9121803', '91218', '9121803', 'Beban Pemeliharan Gedung dan Bangunan');
INSERT INTO `sikd_rek` VALUES ('9121804', '91218', '9121804', 'Beban Pemeliharan Jalan, Irigasi, dan Jaringan ');
INSERT INTO `sikd_rek` VALUES ('9121805', '91218', '9121805', 'Beban Pemeliharan Aset Tetap Lainnya');
INSERT INTO `sikd_rek` VALUES ('9121901', '91219', '9121901', 'Beban Jasa Konsultansi Penelitian');
INSERT INTO `sikd_rek` VALUES ('9121902', '91219', '9121902', 'Beban Jasa Konsultansi Perencanaan');
INSERT INTO `sikd_rek` VALUES ('9121903', '91219', '9121903', 'Beban Jasa Konsultansi Pengawasan');
INSERT INTO `sikd_rek` VALUES ('9121904', '91219', '9121904', 'Beban Jasa Konsultansi Lainnya');
INSERT INTO `sikd_rek` VALUES ('9122001', '91220', '9122001', 'Beban Beasiswa Tugas Belajar D1');
INSERT INTO `sikd_rek` VALUES ('9122002', '91220', '9122002', 'Beban Beasiswa Tugas Belajar D3');
INSERT INTO `sikd_rek` VALUES ('9122003', '91220', '9122003', 'Beban Beasiswa Tugas Belajar S1');
INSERT INTO `sikd_rek` VALUES ('9122004', '91220', '9122004', 'Beban Beasiswa Tugas Belajar S2');
INSERT INTO `sikd_rek` VALUES ('9122005', '91220', '9122005', 'Beban Beasiswa Tugas Belajar S3');
INSERT INTO `sikd_rek` VALUES ('9122101', '91221', '9122101', 'Beban Kursus-Kursus Singkat/Pelatihan');
INSERT INTO `sikd_rek` VALUES ('9122102', '91221', '9122102', 'Beban Sosialisasi');
INSERT INTO `sikd_rek` VALUES ('9122103', '91221', '9122103', 'Beban Bimbingan Teknis ');
INSERT INTO `sikd_rek` VALUES ('9122201', '91222', '9122201', 'Honorarium Tenaga Ahli/Narasumber/Instruktur');
INSERT INTO `sikd_rek` VALUES ('9122202', '91222', '9122202', 'Moderator');
INSERT INTO `sikd_rek` VALUES ('9122301', '91223', '9122301', 'Honorarium Panitia Pelaksana Kegiatan');
INSERT INTO `sikd_rek` VALUES ('9122302', '91223', '9122302', 'Honorarium Tim Pengadaan/Pemeriksa Barang dan Jasa');
INSERT INTO `sikd_rek` VALUES ('9122303', '91223', '9122303', 'Honorarium Tenaga Ahli/Instruktur/Narasumber');
INSERT INTO `sikd_rek` VALUES ('9122401', '91224', '9122401', 'Honorarium Tenaga Ahli/Instruktur/Narasumber');
INSERT INTO `sikd_rek` VALUES ('9122402', '91224', '9122402', 'Honorarium Pegawai Honorer/Tidak Tetap');
INSERT INTO `sikd_rek` VALUES ('9122501', '91225', '9122501', 'Beban Uang Untuk Diberikan Kepada Masyarakat');
INSERT INTO `sikd_rek` VALUES ('9122601', '91226', '9122601', 'Beban Barang Nonkapitalisasi Peralatan dan Mesin');
INSERT INTO `sikd_rek` VALUES ('9122602', '91226', '9122602', 'Beban Barang Nonkapitalisasi Gedung dan Bangunan');
INSERT INTO `sikd_rek` VALUES ('9122701', '91227', '9122701', 'Beban Barang/Jasa Dana BOSNAS');
INSERT INTO `sikd_rek` VALUES ('9122801', '91228', '9122801', 'Beban Jasa Pelayanan Kesehatan');
INSERT INTO `sikd_rek` VALUES ('9122802', '91228', '9122802', 'Beban Jasa Pelayanan Persampahan');
INSERT INTO `sikd_rek` VALUES ('9122803', '91228', '9122803', 'Beban Jasa Pelayanan Lainnya');
INSERT INTO `sikd_rek` VALUES ('9122901', '91229', '9122901', 'Beban Jasa Lainnya');
INSERT INTO `sikd_rek` VALUES ('9130101', '91301', '9130101', 'Beban Bunga  Pinjaman kepada Pemerintah ');
INSERT INTO `sikd_rek` VALUES ('9130102', '91301', '9130102', 'Beban Bunga  Pinjaman kepada Pemerintah Daerah lainnya');
INSERT INTO `sikd_rek` VALUES ('9130103', '91301', '9130103', 'Beban Bunga  Pinjaman kepada Sektor Perbankan');
INSERT INTO `sikd_rek` VALUES ('9130104', '91301', '9130104', 'Beban Bunga  Pinjaman kepada Lembaga Keuangan Bukan Bank');
INSERT INTO `sikd_rek` VALUES ('9130105', '91301', '9130105', 'Beban Bunga Pinjaman Lainnya');
INSERT INTO `sikd_rek` VALUES ('9130201', '91302', '9130201', 'Beban Bunga Obligasi');
INSERT INTO `sikd_rek` VALUES ('9140101', '91401', '9140101', 'Beban Subsidi kepada BUMN');
INSERT INTO `sikd_rek` VALUES ('9140102', '91401', '9140102', 'Beban Subsidi kepada BUMD');
INSERT INTO `sikd_rek` VALUES ('9140103', '91401', '9140103', 'Beban Subsidi kepada Pihak Ketiga Lainnya');
INSERT INTO `sikd_rek` VALUES ('9150101', '91501', '9150101', 'Beban Hibah kepada Pemerintah');
INSERT INTO `sikd_rek` VALUES ('9150201', '91502', '9150201', 'Beban Hibah kepada Pemerintah Provinsi');
INSERT INTO `sikd_rek` VALUES ('9150202', '91502', '9150202', 'Beban Hibah kepada Pemerintah Kabupaten');
INSERT INTO `sikd_rek` VALUES ('9150203', '91502', '9150203', 'Beban Hibah kepada Pemerintah Kota');
INSERT INTO `sikd_rek` VALUES ('9150301', '91503', '9150301', 'Beban Hibah kepada Perusahaan Daerah/BUMD');
INSERT INTO `sikd_rek` VALUES ('9150401', '91504', '9150401', 'Beban Hibah kepada Kelompok Masyarakat');
INSERT INTO `sikd_rek` VALUES ('9150501', '91505', '9150501', 'Beban Hibah kepada Organisasi Kemasyarakatan');
INSERT INTO `sikd_rek` VALUES ('9160101', '91601', '9160101', 'Beban Bantuan Sosial kepada Organisasi Sosial Kemasyarakatan');
INSERT INTO `sikd_rek` VALUES ('9160201', '91602', '9160201', 'Beban Bantuan Sosial kepada Masyarakat');
INSERT INTO `sikd_rek` VALUES ('9170101', '91701', '9170101', 'Beban Penyusutan Alat-Alat Besar Darat');
INSERT INTO `sikd_rek` VALUES ('9170102', '91701', '9170102', 'Beban Penyusutan Alat-Alat Besar Apung');
INSERT INTO `sikd_rek` VALUES ('9170103', '91701', '9170103', 'Beban Penyusutan Alat-Alat Besar-Alat Bantu');
INSERT INTO `sikd_rek` VALUES ('9170104', '91701', '9170104', 'Beban Penyusutan Alat Angkutan Darat Bermotor');
INSERT INTO `sikd_rek` VALUES ('9170105', '91701', '9170105', 'Beban Penyusutan Alat Angkutan Berat Tak Bermotor');
INSERT INTO `sikd_rek` VALUES ('9170106', '91701', '9170106', 'Beban Penyusutan Alat Angkut Apung Bermotor');
INSERT INTO `sikd_rek` VALUES ('9170107', '91701', '9170107', 'Beban Penyusutan Alat Angkut Apung Tak Bermotor');
INSERT INTO `sikd_rek` VALUES ('9170108', '91701', '9170108', 'Beban Penyusutan Alat Angkut Bermotor Udara');
INSERT INTO `sikd_rek` VALUES ('9170109', '91701', '9170109', 'Beban Penyusutan Alat Bengkel Bermesin');
INSERT INTO `sikd_rek` VALUES ('9170110', '91701', '9170110', 'Beban Penyusutan Alat Bengkel Tak Bermesin');
INSERT INTO `sikd_rek` VALUES ('9170111', '91701', '9170111', 'Beban Penyusutan Alat Ukur');
INSERT INTO `sikd_rek` VALUES ('9170112', '91701', '9170112', 'Beban Penyusutan Alat Pengolahan Pertanian');
INSERT INTO `sikd_rek` VALUES ('9170113', '91701', '9170113', 'Beban Penyusutan Alat Pemeliharaan Tanaman/Alat Penyimpan Pertanian');
INSERT INTO `sikd_rek` VALUES ('9170114', '91701', '9170114', 'Beban Penyusutan Alat Kantor');
INSERT INTO `sikd_rek` VALUES ('9170115', '91701', '9170115', 'Beban Penyusutan Alat Rumah Tangga');
INSERT INTO `sikd_rek` VALUES ('9170116', '91701', '9170116', 'Beban Penyusutan Peralatan Komputer');
INSERT INTO `sikd_rek` VALUES ('9170117', '91701', '9170117', 'Beban Penyusutan Meja Dan Kursi Kerja/Rapat Pejabat');
INSERT INTO `sikd_rek` VALUES ('9170118', '91701', '9170118', 'Beban Penyusutan Alat Studio');
INSERT INTO `sikd_rek` VALUES ('9170119', '91701', '9170119', 'Beban Penyusutan Alat Komunikasi');
INSERT INTO `sikd_rek` VALUES ('9170120', '91701', '9170120', 'Beban Penyusutan Peralatan Pemancar');
INSERT INTO `sikd_rek` VALUES ('9170121', '91701', '9170121', 'Beban Penyusutan Alat Kedokteran');
INSERT INTO `sikd_rek` VALUES ('9170122', '91701', '9170122', 'Beban Penyusutan Alat Kesehatan');
INSERT INTO `sikd_rek` VALUES ('9170123', '91701', '9170123', 'Beban Penyusutan Unit-Unit Laboratorium');
INSERT INTO `sikd_rek` VALUES ('9170124', '91701', '9170124', 'Beban Penyusutan Alat Peraga/Praktik Sekolah');
INSERT INTO `sikd_rek` VALUES ('9170125', '91701', '9170125', 'Beban Penyusutan Unit Alat Laboratorium Kimia Nuklir');
INSERT INTO `sikd_rek` VALUES ('9170126', '91701', '9170126', 'Beban Penyusutan Alat  Elektronika/Laboratorium Fisika Nuklir ');
INSERT INTO `sikd_rek` VALUES ('9170127', '91701', '9170127', 'Beban Penyusutan Alat Proteksi Radiasi/Proteksi Lingkungan');
INSERT INTO `sikd_rek` VALUES ('9170128', '91701', '9170128', 'Beban Penyusutan Radiation Aplication and Nondestructive Testing Laboratory');
INSERT INTO `sikd_rek` VALUES ('9170129', '91701', '9170129', 'Beban Penyusutan Alat Laboratorium Lingkungan Hidup');
INSERT INTO `sikd_rek` VALUES ('9170130', '91701', '9170130', 'Beban Penyusutan Peralatan Laboratorium Hidrodinamika');
INSERT INTO `sikd_rek` VALUES ('9170131', '91701', '9170131', 'Beban Penyusutan Senjata Api');
INSERT INTO `sikd_rek` VALUES ('9170132', '91701', '9170132', 'Beban Penyusutan Persenjataan NonSenjata Api');
INSERT INTO `sikd_rek` VALUES ('9170133', '91701', '9170133', 'Beban Penyusutan Alat Keamanan dan Perlindungan');
INSERT INTO `sikd_rek` VALUES ('9170201', '91702', '9170201', 'Beban Penyusutan Bangunan Gedung Tempat Kerja');
INSERT INTO `sikd_rek` VALUES ('9170202', '91702', '9170202', 'Beban Penyusutan Bangunan Gedung Tempat Tinggal');
INSERT INTO `sikd_rek` VALUES ('9170203', '91702', '9170203', 'Beban Penyusutan Bangunan Menara');
INSERT INTO `sikd_rek` VALUES ('9170204', '91702', '9170204', 'Beban Penyusutan Bangunan Bersejarah');
INSERT INTO `sikd_rek` VALUES ('9170205', '91702', '9170205', 'Beban Penyusutan Tugu Peringatan');
INSERT INTO `sikd_rek` VALUES ('9170206', '91702', '9170206', 'Beban Penyusutan Candi');
INSERT INTO `sikd_rek` VALUES ('9170207', '91702', '9170207', 'Beban Penyusutan Monumen/Bangunan Bersejarah');
INSERT INTO `sikd_rek` VALUES ('9170208', '91702', '9170208', 'Beban Penyusutan Tugu Peringatan Lain');
INSERT INTO `sikd_rek` VALUES ('9170209', '91702', '9170209', 'Beban Penyusutan Tugu Titik Kontrol/Pasti');
INSERT INTO `sikd_rek` VALUES ('9170210', '91702', '9170210', 'Beban Penyusutan Bangunan Rambu-Rambu');
INSERT INTO `sikd_rek` VALUES ('9170211', '91702', '9170211', 'Beban Penyusutan Bangunan Rambu-Rambu Lalu Lintas Udara');
INSERT INTO `sikd_rek` VALUES ('9170301', '91703', '9170301', 'Beban Penyusutan Jalan');
INSERT INTO `sikd_rek` VALUES ('9170302', '91703', '9170302', 'Beban Penyusutan Jembatan');
INSERT INTO `sikd_rek` VALUES ('9170303', '91703', '9170303', 'Beban Penyusutan Bangunan Air Irigasi');
INSERT INTO `sikd_rek` VALUES ('9170304', '91703', '9170304', 'Beban Penyusutan Bangunan Air Pasang Surut');
INSERT INTO `sikd_rek` VALUES ('9170305', '91703', '9170305', 'Beban Penyusutan Bangunan Air Rawa');
INSERT INTO `sikd_rek` VALUES ('9170306', '91703', '9170306', 'Beban Penyusutan Bangunan Pengaman Sungai dan Penanggulangan Bencana Alam');
INSERT INTO `sikd_rek` VALUES ('9170307', '91703', '9170307', 'Beban Penyusutan Bangunan Pengembangan Sumber Air dan Air Tanah');
INSERT INTO `sikd_rek` VALUES ('9170308', '91703', '9170308', 'Beban Penyusutan Bangunan Air Bersih/Baku');
INSERT INTO `sikd_rek` VALUES ('9170309', '91703', '9170309', 'Beban Penyusutan Bangunan Air Kotor');
INSERT INTO `sikd_rek` VALUES ('9170310', '91703', '9170310', 'Beban Penyusutan Bangunan Air');
INSERT INTO `sikd_rek` VALUES ('9170311', '91703', '9170311', 'Beban Penyusutan Instalasi Air Minum/Air Bersih');
INSERT INTO `sikd_rek` VALUES ('9170312', '91703', '9170312', 'Beban Penyusutan Instalasi Air Kotor');
INSERT INTO `sikd_rek` VALUES ('9170313', '91703', '9170313', 'Beban Penyusutan Instalasi Pengolahan Sampah');
INSERT INTO `sikd_rek` VALUES ('9170314', '91703', '9170314', 'Beban Penyusutan Instalasi Pengolahan Bahan Bangunan');
INSERT INTO `sikd_rek` VALUES ('9170315', '91703', '9170315', 'Beban Penyusutan Instalasi Pembangkit Listrik');
INSERT INTO `sikd_rek` VALUES ('9170316', '91703', '9170316', 'Beban Penyusutan Instalasi Gardu Listrik');
INSERT INTO `sikd_rek` VALUES ('9170317', '91703', '9170317', 'Beban Penyusutan Instalasi Pertahanan');
INSERT INTO `sikd_rek` VALUES ('9170318', '91703', '9170318', 'Beban Penyusutan Instalasi Gas');
INSERT INTO `sikd_rek` VALUES ('9170319', '91703', '9170319', 'Beban Penyusutan Instalasi Pengaman');
INSERT INTO `sikd_rek` VALUES ('9170320', '91703', '9170320', 'Beban Penyusutan Jaringan Air Minum');
INSERT INTO `sikd_rek` VALUES ('9170321', '91703', '9170321', 'Beban Penyusutan Jaringan Listrik');
INSERT INTO `sikd_rek` VALUES ('9170322', '91703', '9170322', 'Beban Penyusutan Jaringan Telepon');
INSERT INTO `sikd_rek` VALUES ('9170323', '91703', '9170323', 'Beban Penyusutan Jaringan Gas');
INSERT INTO `sikd_rek` VALUES ('9170401', '91704', '9170401', 'Beban Amortisasi Goodwill');
INSERT INTO `sikd_rek` VALUES ('9170402', '91704', '9170402', 'Beban Amortisasi Lisensi Dan Franchise');
INSERT INTO `sikd_rek` VALUES ('9170403', '91704', '9170403', 'Beban Amortisasi Hak Cipta');
INSERT INTO `sikd_rek` VALUES ('9170404', '91704', '9170404', 'Beban Amortisasi Paten');
INSERT INTO `sikd_rek` VALUES ('9170405', '91704', '9170405', 'Beban Amortisasi Aset Tidat Berwujud Lainnya');
INSERT INTO `sikd_rek` VALUES ('9180101', '91801', '9180101', 'Beban Penyisihan Piutang Tak Tertagih- Pajak');
INSERT INTO `sikd_rek` VALUES ('9180102', '91801', '9180102', 'Beban Penyisihan Piutang Tak Tertagih- Retribusi');
INSERT INTO `sikd_rek` VALUES ('9180103', '91801', '9180103', 'Beban Penyisihan Piutang Tak Tertagih- Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan');
INSERT INTO `sikd_rek` VALUES ('9180104', '91801', '9180104', 'Beban Penyisihan Piutang Tak Tertagih- Lain-lain PAD yang Sah');
INSERT INTO `sikd_rek` VALUES ('9180105', '91801', '9180105', 'Beban Penyisihan Piutang Tak Tertagih- Transfer Pemerintah Pusat');
INSERT INTO `sikd_rek` VALUES ('9180106', '91801', '9180106', 'Beban Penyisihan Piutang Tak Tertagih- Transfer Pemerintah Pusat - Lainnya');
INSERT INTO `sikd_rek` VALUES ('9180107', '91801', '9180107', 'Beban Penyisihan Piutang Tak Tertagih- Transfer Pemerintah Daerah Lainnya');
INSERT INTO `sikd_rek` VALUES ('9180108', '91801', '9180108', 'Beban Penyisihan Piutang Tak Tertagih- Bantuan Keuangan');
INSERT INTO `sikd_rek` VALUES ('9180109', '91801', '9180109', 'Beban Penyisihan Piutang Tak Tertagih- Hibah');
INSERT INTO `sikd_rek` VALUES ('9180110', '91801', '9180110', 'Beban Penyisihan Piutang Tak Tertagih- Pendapatan Lainnya');
INSERT INTO `sikd_rek` VALUES ('9180201', '91802', '9180201', 'Beban Penyisihan Piutang Tak Tertagih- Bagian Lancar Tagihan Jangka Panjang');
INSERT INTO `sikd_rek` VALUES ('9180202', '91802', '9180202', 'Beban Penyisihan Piutang Tak Tertagih- Bagian Lancar Tagihan Pinjaman Jangka Panjang Kepada Entitas Lainnya');
INSERT INTO `sikd_rek` VALUES ('9180203', '91802', '9180203', 'Beban Penyisihan Piutang Tak Tertagih- Bagian Lancar Tagihan Penjualan Angsuran');
INSERT INTO `sikd_rek` VALUES ('9180204', '91802', '9180204', 'Beban Penyisihan Piutang Tak Tertagih- Bagian lancar Tuntutan Ganti Kerugian Daerah');
INSERT INTO `sikd_rek` VALUES ('9180205', '91802', '9180205', 'Beban Penyisihan Piutang Tak Tertagih- Uang Muka');
INSERT INTO `sikd_rek` VALUES ('9190101', '91901', '9190101', 'Beban Penurunan Nilai Investasi');
INSERT INTO `sikd_rek` VALUES ('9190201', '91902', '9190201', 'Beban Penyisihan Dana Bergulir');
INSERT INTO `sikd_rek` VALUES ('9190301', '91903', '9190301', 'Beban Lainnya');
INSERT INTO `sikd_rek` VALUES ('9210101', '92101', '9210101', 'Beban Transfer Bagi Hasil Pajak Daerah Kepada Pemerintahan Kabupaten/Kota');
INSERT INTO `sikd_rek` VALUES ('9220101', '92201', '9220101', 'Beban Transfer Bagi Hasil Pendapatan Lainnya Kepada Pemerintahan Kabupaten/Kota');
INSERT INTO `sikd_rek` VALUES ('9230101', '92301', '9230101', 'Beban Transfer Bantuan Keuangan ke Provinsi');
INSERT INTO `sikd_rek` VALUES ('9230201', '92302', '9230201', 'Beban Transfer Bantuan Keuangan ke Kabupaten/Kota');
INSERT INTO `sikd_rek` VALUES ('9240101', '92401', '9240101', 'Beban Transfer Bantuan Keuangan Kepada Partai Politik');
INSERT INTO `sikd_rek` VALUES ('9310101', '93101', '9310101', 'Defisit Penjualan Aset Tanah-LO');
INSERT INTO `sikd_rek` VALUES ('9310102', '93101', '9310102', 'Defisit Penjualan Aset Peralatan dan Mesin-LO');
INSERT INTO `sikd_rek` VALUES ('9310103', '93101', '9310103', 'Defisit Penjualan Aset Gedung dan Bangunan-LO');
INSERT INTO `sikd_rek` VALUES ('9310104', '93101', '9310104', 'Defisit Penjualan Aset Tetap Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('9310105', '93101', '9310105', 'Defisit Pelepasan Investasi Jangka Panjang-LO');
INSERT INTO `sikd_rek` VALUES ('9310106', '93101', '9310106', 'Defisit Penjualan Aset Lainnya- LO');
INSERT INTO `sikd_rek` VALUES ('9320101', '93201', '9320101', 'Defisit Penyelesaian Utang Dalam Negeri Sektor Perbankan-LO');
INSERT INTO `sikd_rek` VALUES ('9320102', '93201', '9320102', 'Defisit Penyelesaian Utang Dari Lembaga Keuangan Bukan Bank-LO');
INSERT INTO `sikd_rek` VALUES ('9320103', '93201', '9320103', 'Defisit Penyelesaian Utang Dalam Negeri - Obligasi-LO');
INSERT INTO `sikd_rek` VALUES ('9320104', '93201', '9320104', 'Defisit Penyelesaian Utang Pemerintah Pusat-LO');
INSERT INTO `sikd_rek` VALUES ('9320105', '93201', '9320105', 'Defisit Penyelesaian Utang Pemerintah Provinsi-LO');
INSERT INTO `sikd_rek` VALUES ('9320106', '93201', '9320106', 'Defisit Penyelesaian Utang Pemerintah Kabupaten/Kota-LO');
INSERT INTO `sikd_rek` VALUES ('9320107', '93201', '9320107', 'Defisit Penyelesaian Premium (Diskonto) Obligasi-LO');
INSERT INTO `sikd_rek` VALUES ('9320108', '93201', '9320108', 'Defisit Penyelesaian Kewajiban Jangka Panjang Lainnya- LO');
INSERT INTO `sikd_rek` VALUES ('9330101', '93301', '9330101', 'Defisit dari Kegiatan NonOperasional Lainnya-LO');
INSERT INTO `sikd_rek` VALUES ('9330102', '93301', '9330102', 'Defisit Pelepasan Investasi Jangka Pendek-LO');
INSERT INTO `sikd_rek` VALUES ('9410101', '94101', '9410101', 'Beban Bencana Alam');
INSERT INTO `sikd_rek` VALUES ('9410102', '94101', '9410102', 'Beban Luar Biasa Lainnya');
INSERT INTO `sikd_rek` VALUES ('9510101', '95101', '9510101', 'Surplus/Defisit-LO');

-- ----------------------------
-- Table structure for sikd_satker
-- ----------------------------
DROP TABLE IF EXISTS `sikd_satker`;
CREATE TABLE `sikd_satker`  (
  `id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sikd_satker_type` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sikd_satker_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `singkatan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sikd_bidang_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_bidang_induk` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rek_konsolidasi_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nip_ka_satker` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nm_ka_satker` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jab_ka_satker` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `klasifikasi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satker_pendapatan` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sotk_lama` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `npwp_satker` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_skpd_bmd` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `creation_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_updated_date` datetime NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `kode`(`kode`, `sikd_satker_type`) USING BTREE,
  INDEX `kd_bidang_induk`(`kd_bidang_induk`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sikd_satker
-- ----------------------------
INSERT INTO `sikd_satker` VALUES ('110101', 'SikdSkpd', '', '110101', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'DINDIK', '101', '1101', '1180101', '196306101985121002', 'Drs. TARYONO, M.Si', 'KEPALA DINAS', '', '1', '', NULL, '1.01.01.01', '', '0000-00-00 00:00:00', 'bpkad.pelaporan', '2019-05-24 10:22:52');
INSERT INTO `sikd_satker` VALUES ('110201', 'SikdSkpd', '', '110201', 'DINAS KESEHATAN', 'DINKES', '102', '1102', '1180102', '197412202001121004', 'DEDEN DENI,SE', 'Plt. KEPALA DINAS', '', '1', '', NULL, '1.01.02.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 09:56:59');
INSERT INTO `sikd_satker` VALUES ('110202', 'SikdSkpd', '110202', '110202', 'RUMAH SAKIT UMUM', 'RSU', '102', '1102', '1180103', '197610152007012007', 'dr. ALLIN HENDALIN. M', 'Plt. DIREKTUR', '', '1', '1', NULL, '1.01.02.02', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-01 13:21:26');
INSERT INTO `sikd_satker` VALUES ('110301', 'SikdSkpd', '', '110301', 'DINAS PEKERJAAN UMUM', 'DPU', '103', '1103', '1180104', '197504082001121003', 'ARIES KURNIAWAN, ST, MT \r\n', 'PlT.KEPALA DINAS', '', '0', '', NULL, '1.01.03.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:10:48');
INSERT INTO `sikd_satker` VALUES ('110302', 'SikdSkpd', NULL, '110302', 'DINAS BANGUNAN DAN PENATAAN RUANG', 'DBPR', '103', '1103', '1180105', '196612301996031001', 'Ir.DENDI PRYANDANA, MT\r\n', 'Kepala Dinas', '', '0', NULL, NULL, '1.01.03.02', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 11:00:05');
INSERT INTO `sikd_satker` VALUES ('110401', 'SikdSkpd', '', '110401', 'DINAS PERUMAHAN, KAWASAN PERMUKIMAN DAN PERTANAHAN', 'DPKPP', '104', '1104', '1180106', '196105291982121001', 'TEDDY MEIYADI,SE,MM\r\n', 'PLT.Kepala Dinas', '', '1', '', NULL, '1.01.04.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:11:44');
INSERT INTO `sikd_satker` VALUES ('110501', 'SikdSkpd', NULL, '110501', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN', 'DPKP', '105', '1105', '1180107', '196209171985031014', 'Drs. UCI SANUSI, M.Pd\r\n\r\n', 'Kepala Dinas', '', '1', NULL, NULL, '1.01.05.01', '', '0000-00-00 00:00:00', 'admin2an', '2017-11-07 17:29:09');
INSERT INTO `sikd_satker` VALUES ('110502', 'SikdSkpd', '', '110502', 'BADAN PENANGGULANGAN BENCANA DAERAH ', 'BPBD', '105', '1105', '1180108', '196711271997031002', 'Drs. H. CHAERUDIN, M.Si\r\n', 'Kepala Pelaksana', '', '0', '', NULL, '1.01.05.02', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-12-27 18:16:59');
INSERT INTO `sikd_satker` VALUES ('110503', 'SikdSkpd', '', '110503', 'SATUAN POLISI PAMONG PRAJA ', 'SATPOL', '105', '1105', '1180109', '196108161986031012', 'MOHAMAD UTUH, S.Sos\r\n', 'Plt. KEPALA SATUAN POLISI PAMONG PRAJA', '', '0', '', NULL, '1.01.05.03', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2019-07-15 10:08:36');
INSERT INTO `sikd_satker` VALUES ('110504', 'SikdSkpd', '', '110504', 'BADAN KESATUAN BANGSA DAN POLITIK', 'KESBANGPOL', '105', '1105', '1180110', '19610712198501100', 'DR. RAHMAT SALAM, M.Si\r\n', 'Plt. KEPALA BADAN', '', '0', '', NULL, '1.01.05.04', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2019-07-11 14:01:28');
INSERT INTO `sikd_satker` VALUES ('110601', 'SikdSkpd', '', '110601', 'DINAS SOSIAL', 'DINSOS', '106', '1106', '1180111', '197205261992031002', 'WAHYUNOTO LUKMAN, S.IP, MM\r\n', 'KEPALA DINAS', '', '0', '', NULL, '1.01.06.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:12:59');
INSERT INTO `sikd_satker` VALUES ('120101', 'SikdSkpd', NULL, '120101', 'DINAS KETENAGAKERJAAN', 'DISNAKER', '201', '1201', '1180112', '196103041986031010', 'H. PURNAMA WIJAYA S.Sos, M.Si\r\n', 'KEPALA DINAS', '', '1', NULL, NULL, '1.02.01.01', '', '0000-00-00 00:00:00', 'admin', '2017-01-06 16:28:49');
INSERT INTO `sikd_satker` VALUES ('120201', 'SikdSkpd', '', '120201', 'DINAS PEMBERDAYAAN MASYARAKAT PEMBERDAYAAN PEREMPUAN PERLINDUNGAN ANAK DAN KELUARGA BERENCANA', 'DPMP3AKB', '202', '1202', '1180113', '196308191989012003', 'drg. Hj. KHAIRATI, M.Kes\r\n', 'Kepala Dinas', '', '0', '', NULL, '1.02.02.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:16:00');
INSERT INTO `sikd_satker` VALUES ('120501', 'SikdSkpd', '', '120501', 'DINAS LINGKUNGAN HIDUP ', 'DLH', '205', '1205', '1180114', '196607281986031004', 'Drs. H. TOTO SUDARTO, M.Si', 'Kepala Dinas', '', '1', '', NULL, '1.02.05.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:15:32');
INSERT INTO `sikd_satker` VALUES ('120601', 'SikdSkpd', '', '120601', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL ', 'DISDUKCAPIL', '206', '1206', '1180115', '196412201985091001', 'Drs. H. DEDI BUDIAWAN, MM\r\n', 'Kepala Dinas', '', '0', '', NULL, '1.02.06.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:17:10');
INSERT INTO `sikd_satker` VALUES ('120901', 'SikdSkpd', '', '120901', 'DINAS PERHUBUNGAN', 'DISHUB', '209', '1209', '1180116', '196203111985031012', 'Drs. H. SUKANTA\r\n', 'KEPALA DINAS', '', '1', '', NULL, '1.02.09.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-12-26 11:10:59');
INSERT INTO `sikd_satker` VALUES ('121001', 'SikdSkpd', '', '121001', 'DINAS KOMUNIKASI DAN INFORMATIKA ', 'DISKOMINFO', '210', '1210', '1180117', '197411291993031003', 'Drs.Fuad, MPP\r\n', 'Plt.Kepala Dinas', '', '0', '', NULL, '1.02.10.01', '', '0000-00-00 00:00:00', 'admin2an', '2019-01-04 14:33:52');
INSERT INTO `sikd_satker` VALUES ('121101', 'SikdSkpd', NULL, '121101', 'DINAS KOPERASI, USAHA KECIL DAN MENENGAH ', 'DKUKM', '211', '1211', '1180118', '196408151991032005', 'Drg. DAHLIA NADEAK, M.Kes\r\n', 'Plt.KEPALA DINAS', '', '0', NULL, NULL, '1.02.11.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 11:10:14');
INSERT INTO `sikd_satker` VALUES ('121201', 'SikdSkpd', NULL, '121201', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'DPMPTSP', '212', '1212', '1180119', '197010061991031001', 'BAMBANG NOERTJAHJO, SE. Ak', 'Kepala Dinas', '', '1', NULL, NULL, '1.02.12.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 10:45:44');
INSERT INTO `sikd_satker` VALUES ('121301', 'SikdSkpd', NULL, '121301', 'DINAS PEMUDA DAN OLAHRAGA ', 'DPO', '213', '1213', '1180120', '196503011997031002', 'Ir.H.E.WIWI MARTAWIJAYA, M.Si \r\n', 'KEPALA DINAS', '', '1', NULL, NULL, '1.02.13.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-07 22:44:47');
INSERT INTO `sikd_satker` VALUES ('121701', 'SikdSkpd', NULL, '121701', 'DINAS PERPUSTAKAAN DAN ARSIP DAERAH', 'DPAD', '217', '1217', '1180121', '196311131985011001', 'Drs. H. DADANG RAHARJA, M.Si\r\n', 'Kepala Dinas', '', '0', NULL, NULL, '1.02.17.01', '', '0000-00-00 00:00:00', 'admin', '2017-01-08 20:33:51');
INSERT INTO `sikd_satker` VALUES ('200201', 'SikdSkpd', NULL, '200201', 'DINAS PARIWISATA ', 'DISPAR', '302', '2002', '1180122', '197904122002121006', 'JUDIANTO, ST.MT ', 'Kepala Dinas', '', '0', NULL, NULL, '2.00.02.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 11:13:34');
INSERT INTO `sikd_satker` VALUES ('200301', 'SikdSkpd', '', '200301', 'DINAS KETAHANAN PANGAN, PERTANIAN DAN PERIKANAN', 'DKPPP', '203', '1203', '1180123', '196302151996011001', 'Ir. H. NUR SELAMET, MM\r\n', 'Kepala Dinas', '', '0', '', NULL, '2.00.03.01', '', '0000-00-00 00:00:00', 'admin2an', '2019-01-10 14:37:48');
INSERT INTO `sikd_satker` VALUES ('200401', 'SikdSkpd', NULL, '200401', 'DINAS PERINDUSTRIAN DAN PERDAGANGAN', 'DISPERINDAG', '304', '2004', '1180124', '197008192002122005', 'drg. MAYA MARDIANA, MARS\r\n', 'Kepala Dinas', '', '1', NULL, NULL, '2.00.04.01', '', '0000-00-00 00:00:00', 'admin2an', '2017-11-07 17:28:10');
INSERT INTO `sikd_satker` VALUES ('300101', 'SikdSkpd', NULL, '300101', 'BADAN PERENCANAAN PEMBANGUNAN DAERAH', 'BAPEDA', '401', '301', '1180125', '196505211994031003', 'Ir. MOCHAMMAD TAHER ROCHMADI, M.Si\r\n', 'KEPALA BADAN', '', '0', NULL, NULL, '3.00.01.01', '', '0000-00-00 00:00:00', 'admin', '2017-01-10 16:26:06');
INSERT INTO `sikd_satker` VALUES ('300201', 'SikdSkpd', NULL, '300201', 'BADAN PENDAPATAN  DAERAH ', 'BPD', '402', '302', '1180126', '196101241986031006', 'Drs. H. DADANG SOFYAN, MM\r\n', 'KEPALA BADAN', '', '1', NULL, NULL, '3.00.02.01', '', '0000-00-00 00:00:00', 'admin', '2017-01-08 20:41:58');
INSERT INTO `sikd_satker` VALUES ('300202', 'SikdSkpd', NULL, '300202', 'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH ', 'BPKAD', '402', '302', '1180127', '196308301984031004', 'Drs. H.WARMAN S. MM\r\n', 'KEPALA BADAN', '', '1', NULL, NULL, '3.00.02.02', '', '0000-00-00 00:00:00', 'admin', '2017-01-08 20:42:30');
INSERT INTO `sikd_satker` VALUES ('300301', 'SikdSkpd', '', '300301', 'BADAN KEPEGAWAIAN, PENDIDIKAN DAN PELATIHAN', 'BKPP', '403', '303', '1180128', '196303091986031013', 'H. APENDI, S.Sos, M.Si\r\n', 'Kepala Badan', '', '0', '', NULL, '3.00.04.02', '', '0000-00-00 00:00:00', 'admin2an', '2019-01-10 14:36:33');
INSERT INTO `sikd_satker` VALUES ('300501', 'SikdSkpd', '', '300501', 'SEKRETARIAT DPRD ', 'SEKWAN', '405', '305', '1180129', '196707231987031002', 'Drs. H. CHAERUL SOLEH, M.Si\r\n', 'Sekretaris DPRD', '', '0', '', NULL, '3.00.05.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2019-07-12 15:45:25');
INSERT INTO `sikd_satker` VALUES ('300601', 'SikdSkpd', '', '300601', 'SEKRETARIAT DAERAH ', 'SEKDA', '367416060794408', '306', '1180130', '196404061985031014', 'Drs. H. MUHAMAD, M.Si\r\n', 'SEKRETARIS DAERAH', '', '0', '0', NULL, '3.00.06.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-23 11:47:06');
INSERT INTO `sikd_satker` VALUES ('300701', 'SikdSkpd', '', '300701', 'INSPEKTORAT ', 'INSPEKTORAT', '367416060794409', '307', '1180141', '196109031991021001', 'H. Uus Kusnadi, SE, M.Si\r\n', 'INSPEKTUR', '', '0', '', NULL, '3.00.07.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-12 14:41:08');
INSERT INTO `sikd_satker` VALUES ('300801', 'SikdSkpd', '', '300801', 'KECAMATAN CIPUTAT ', 'CIPUTAT', '367416060794410', '308', '1180142', '197510251994121001', 'Drs. H. ANDI D. PATABAI AP.M.Si\r\n', 'CAMAT CIPUTAT', '', '0', '', NULL, '3.00.08.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-12-21 09:24:34');
INSERT INTO `sikd_satker` VALUES ('300802', 'SikdSkpd', '', '300802', 'KECAMATAN CIPUTAT TIMUR ', 'CIPUTAT TIMUR', '367416060794410', '308', '1180143', '196702151992031004', 'Drs. SUTANG SUPRIANTO, M.Si\r\n', 'CAMAT CIPUTAT TIMUR', '', '0', '', NULL, '3.00.08.02', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2019-06-27 10:58:10');
INSERT INTO `sikd_satker` VALUES ('300803', 'SikdSkpd', NULL, '300803', 'KECAMATAN PAMULANG ', 'PAMULANG', '367416060794410', '308', '1180144', '196205101989021001', 'H. DEDEN JUARDI, S.Sos.,M.Si\r\n', 'CAMAT PAMULANG', '', '0', NULL, NULL, '3.00.08.03', '', '0000-00-00 00:00:00', 'admin', '2016-11-02 17:41:29');
INSERT INTO `sikd_satker` VALUES ('300804', 'SikdSkpd', NULL, '300804', 'KECAMATAN SERPONG ', 'SERPONG', '367416060794410', '308', '1180145', '196509042005012005', 'MURSINAH, SH., M.Si\r\n', 'KECAMATAN SERPONG', '', '0', NULL, NULL, '3.00.08.04', '', '0000-00-00 00:00:00', 'admin', '2016-11-02 17:42:21');
INSERT INTO `sikd_satker` VALUES ('300805', 'SikdSkpd', NULL, '300805', 'KECAMATAN SERPONG UTARA ', 'SERPONG UTARA', '367416060794410', '308', '1180146', '197407281994021002', 'BANI KHOSYATULLOH\r\n', 'CAMAT SERPONG UTARA', '', '0', NULL, NULL, '3.00.08.05', '', '0000-00-00 00:00:00', 'admin2an', '2016-11-14 18:46:06');
INSERT INTO `sikd_satker` VALUES ('300806', 'SikdSkpd', '', '300806', 'KECAMATAN PONDOK AREN ', 'PONDOK AREN', '367416060794410', '308', '1180147', '196701032005011004', 'MAKUM SAGITA,S.Pd\r\n', 'CAMAT PONDOK AREN\r\n', '', '0', '', NULL, '3.00.08.06', '', '0000-00-00 00:00:00', 'admin.user', '2018-03-14 14:31:47');
INSERT INTO `sikd_satker` VALUES ('300807', 'SikdSkpd', '', '300807', 'KECAMATAN SETU ', 'SETU', '367416060794410', '308', '1180148', '196303181988031006', 'H. HERU AGUS S, AP, M.Si\r\n', 'CAMAT SETU', '', '0', '', NULL, '3.00.08.07', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:20:26');
INSERT INTO `sikd_satker` VALUES ('300901', 'SikdSkpd', '', '300901', 'DEWAN PERWAKILAN RAKYAT DAERAH', 'DPRD', '367416060794411', '309', '1180149', '196707231987031002', 'Drs. H. CHAERUL SOLEH, M.Si', 'Sekretaris DPRD', '', '0', '', NULL, '3.00.09.01', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2019-07-12 15:45:05');
INSERT INTO `sikd_satker` VALUES ('300902', 'SikdSkpd', '', '300902', 'WALIKOTA DAN WAKIL WALIKOTA', 'KDH-WKDH', '367416060794411', '309', '1180150', '196201261986031005', 'H. M. SAHLAN, S.Sos', 'Kepala Bagian Keuangan', '', '0', '', NULL, '3.00.09.02', '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-22 11:22:19');
INSERT INTO `sikd_satker` VALUES ('90000', 'SikdSkpkd', '', '300202', 'SATUAN KERJA PEGELOLA KEUANGAN DAERAH', 'SKPKD', '402', '302', '3110201', '196308301984031004', 'Drs. H. Warman S. MM', 'Pejabat Pegelola Keuangan Daerah', '0', '1', '', NULL, '3.00.02.02', '5/20/2014 12:06', '0000-00-00 00:00:00', 'admin2an', '2019-02-11 18:45:08');

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

-- ----------------------------
-- Table structure for tmdinas
-- ----------------------------
DROP TABLE IF EXISTS `tmdinas`;
CREATE TABLE `tmdinas`  (
  `dinasid` int(11) NOT NULL AUTO_INCREMENT,
  `n_dinas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`dinasid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmdinas
-- ----------------------------
INSERT INTO `tmdinas` VALUES (13, 'Dinas Penanaman Modal Dan Pelayanan Terpadu Satu P');
INSERT INTO `tmdinas` VALUES (14, 'Dinas Perindustrian dan Perdagangan');
INSERT INTO `tmdinas` VALUES (15, 'Dinas Perhubungan');
INSERT INTO `tmdinas` VALUES (16, 'Dinas Pendidikan dan Kebudayaan');
INSERT INTO `tmdinas` VALUES (17, 'Dinas Pemadam Kebakaran dan Penyelamatan');
INSERT INTO `tmdinas` VALUES (18, 'Dinas Pariwisata');
INSERT INTO `tmdinas` VALUES (19, 'Dinas Lingkungan Hidup');
INSERT INTO `tmdinas` VALUES (20, 'Dinas Bangunan dan Penataan Ruang');
INSERT INTO `tmdinas` VALUES (21, 'Dinas Pekerjaan Umum');
INSERT INTO `tmdinas` VALUES (22, 'Satuan Polisi Pamong Praja');
INSERT INTO `tmdinas` VALUES (23, 'Dinas Perumahan, Kawasan Pemukiman dan Pertanahan');
INSERT INTO `tmdinas` VALUES (24, 'Dinas Pendapatan Pengelolaan Keuangan Dan Aset Dae');
INSERT INTO `tmdinas` VALUES (25, 'Badan Pendapatan Daerah');

-- ----------------------------
-- Table structure for tmholiday
-- ----------------------------
DROP TABLE IF EXISTS `tmholiday`;
CREATE TABLE `tmholiday`  (
  `holidayid` int(11) NOT NULL AUTO_INCREMENT,
  `d_holiday` date NOT NULL,
  `deskripsi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`holidayid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 232 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmholiday
-- ----------------------------
INSERT INTO `tmholiday` VALUES (1, '2016-01-01', '', NULL);
INSERT INTO `tmholiday` VALUES (2, '2016-01-02', '', NULL);
INSERT INTO `tmholiday` VALUES (3, '2016-01-03', '', NULL);
INSERT INTO `tmholiday` VALUES (4, '2016-01-09', '', NULL);
INSERT INTO `tmholiday` VALUES (5, '2016-01-10', '', NULL);
INSERT INTO `tmholiday` VALUES (6, '2016-01-16', '', NULL);
INSERT INTO `tmholiday` VALUES (7, '2016-01-17', '', NULL);
INSERT INTO `tmholiday` VALUES (8, '2016-01-23', '', NULL);
INSERT INTO `tmholiday` VALUES (9, '2016-01-24', '', NULL);
INSERT INTO `tmholiday` VALUES (10, '2016-01-30', '', NULL);
INSERT INTO `tmholiday` VALUES (11, '2016-01-31', '', NULL);
INSERT INTO `tmholiday` VALUES (12, '2016-02-06', '', NULL);
INSERT INTO `tmholiday` VALUES (13, '2016-02-07', '', NULL);
INSERT INTO `tmholiday` VALUES (14, '2016-02-08', '', NULL);
INSERT INTO `tmholiday` VALUES (15, '2016-02-13', '', NULL);
INSERT INTO `tmholiday` VALUES (16, '2016-02-14', '', NULL);
INSERT INTO `tmholiday` VALUES (17, '2016-02-20', '', NULL);
INSERT INTO `tmholiday` VALUES (18, '2016-02-21', '', NULL);
INSERT INTO `tmholiday` VALUES (19, '2016-02-27', '', NULL);
INSERT INTO `tmholiday` VALUES (20, '2016-02-28', '', NULL);
INSERT INTO `tmholiday` VALUES (21, '2016-03-05', '', NULL);
INSERT INTO `tmholiday` VALUES (22, '2016-03-06', '', NULL);
INSERT INTO `tmholiday` VALUES (23, '2016-03-12', '', NULL);
INSERT INTO `tmholiday` VALUES (24, '2016-03-09', '', NULL);
INSERT INTO `tmholiday` VALUES (25, '2016-03-13', '', NULL);
INSERT INTO `tmholiday` VALUES (26, '2016-03-19', '', NULL);
INSERT INTO `tmholiday` VALUES (27, '2016-03-20', '', NULL);
INSERT INTO `tmholiday` VALUES (28, '2016-03-26', '', NULL);
INSERT INTO `tmholiday` VALUES (29, '2016-03-25', '', NULL);
INSERT INTO `tmholiday` VALUES (30, '2016-03-27', '', NULL);
INSERT INTO `tmholiday` VALUES (31, '2016-04-02', '', NULL);
INSERT INTO `tmholiday` VALUES (32, '2016-04-09', '', NULL);
INSERT INTO `tmholiday` VALUES (33, '2016-04-16', '', NULL);
INSERT INTO `tmholiday` VALUES (34, '2016-04-23', '', NULL);
INSERT INTO `tmholiday` VALUES (35, '2016-04-30', '', NULL);
INSERT INTO `tmholiday` VALUES (36, '2016-04-03', '', NULL);
INSERT INTO `tmholiday` VALUES (37, '2016-04-10', '', NULL);
INSERT INTO `tmholiday` VALUES (38, '2016-04-17', '', NULL);
INSERT INTO `tmholiday` VALUES (39, '2016-04-24', '', NULL);
INSERT INTO `tmholiday` VALUES (40, '2016-05-01', '', NULL);
INSERT INTO `tmholiday` VALUES (41, '2016-05-08', '', NULL);
INSERT INTO `tmholiday` VALUES (42, '2016-05-15', '', NULL);
INSERT INTO `tmholiday` VALUES (43, '2016-05-22', '', NULL);
INSERT INTO `tmholiday` VALUES (44, '2016-05-29', '', NULL);
INSERT INTO `tmholiday` VALUES (45, '2016-05-07', '', NULL);
INSERT INTO `tmholiday` VALUES (46, '2016-05-14', '', NULL);
INSERT INTO `tmholiday` VALUES (47, '2016-05-21', '', NULL);
INSERT INTO `tmholiday` VALUES (48, '2016-05-28', '', NULL);
INSERT INTO `tmholiday` VALUES (49, '2016-05-05', '', NULL);
INSERT INTO `tmholiday` VALUES (50, '2016-05-06', '', NULL);
INSERT INTO `tmholiday` VALUES (51, '2016-06-04', '', NULL);
INSERT INTO `tmholiday` VALUES (52, '2016-06-11', '', NULL);
INSERT INTO `tmholiday` VALUES (53, '2016-06-18', '', NULL);
INSERT INTO `tmholiday` VALUES (54, '2016-06-25', '', NULL);
INSERT INTO `tmholiday` VALUES (55, '2016-06-05', '', NULL);
INSERT INTO `tmholiday` VALUES (56, '2016-06-12', '', NULL);
INSERT INTO `tmholiday` VALUES (57, '2016-06-19', '', NULL);
INSERT INTO `tmholiday` VALUES (58, '2016-06-26', '', NULL);
INSERT INTO `tmholiday` VALUES (59, '2016-07-02', '', NULL);
INSERT INTO `tmholiday` VALUES (60, '2016-07-03', '', NULL);
INSERT INTO `tmholiday` VALUES (61, '2016-07-04', '', NULL);
INSERT INTO `tmholiday` VALUES (62, '2016-07-05', '', NULL);
INSERT INTO `tmholiday` VALUES (63, '2016-07-06', '', NULL);
INSERT INTO `tmholiday` VALUES (64, '2016-07-07', '', NULL);
INSERT INTO `tmholiday` VALUES (65, '2016-07-08', '', NULL);
INSERT INTO `tmholiday` VALUES (66, '2016-07-09', '', NULL);
INSERT INTO `tmholiday` VALUES (67, '2016-07-10', '', NULL);
INSERT INTO `tmholiday` VALUES (68, '2016-07-16', '', NULL);
INSERT INTO `tmholiday` VALUES (69, '2016-07-17', '', NULL);
INSERT INTO `tmholiday` VALUES (70, '2016-07-23', '', NULL);
INSERT INTO `tmholiday` VALUES (71, '2016-07-24', '', NULL);
INSERT INTO `tmholiday` VALUES (72, '2016-07-30', '', NULL);
INSERT INTO `tmholiday` VALUES (73, '2016-07-31', '', NULL);
INSERT INTO `tmholiday` VALUES (74, '2016-08-06', '', NULL);
INSERT INTO `tmholiday` VALUES (75, '2016-08-13', '', NULL);
INSERT INTO `tmholiday` VALUES (76, '2016-08-20', '', NULL);
INSERT INTO `tmholiday` VALUES (77, '2016-08-27', '', NULL);
INSERT INTO `tmholiday` VALUES (78, '2016-08-07', '', NULL);
INSERT INTO `tmholiday` VALUES (79, '2016-08-14', '', NULL);
INSERT INTO `tmholiday` VALUES (80, '2016-08-21', '', NULL);
INSERT INTO `tmholiday` VALUES (81, '2016-08-28', '', NULL);
INSERT INTO `tmholiday` VALUES (82, '2016-08-17', '', NULL);
INSERT INTO `tmholiday` VALUES (83, '2016-09-03', '', NULL);
INSERT INTO `tmholiday` VALUES (84, '2016-09-10', '', NULL);
INSERT INTO `tmholiday` VALUES (85, '2016-09-17', '', NULL);
INSERT INTO `tmholiday` VALUES (86, '2016-09-24', '', NULL);
INSERT INTO `tmholiday` VALUES (87, '2016-09-04', '', NULL);
INSERT INTO `tmholiday` VALUES (88, '2016-09-11', '', NULL);
INSERT INTO `tmholiday` VALUES (89, '2016-09-18', '', NULL);
INSERT INTO `tmholiday` VALUES (90, '2016-09-25', '', NULL);
INSERT INTO `tmholiday` VALUES (91, '2016-09-12', '', NULL);
INSERT INTO `tmholiday` VALUES (92, '2016-10-01', '', NULL);
INSERT INTO `tmholiday` VALUES (93, '2016-10-08', '', NULL);
INSERT INTO `tmholiday` VALUES (94, '2016-10-15', '', NULL);
INSERT INTO `tmholiday` VALUES (95, '2016-10-22', '', NULL);
INSERT INTO `tmholiday` VALUES (96, '2016-10-29', '', NULL);
INSERT INTO `tmholiday` VALUES (97, '2016-10-30', '', NULL);
INSERT INTO `tmholiday` VALUES (98, '2016-10-23', '', NULL);
INSERT INTO `tmholiday` VALUES (99, '2016-10-16', '', NULL);
INSERT INTO `tmholiday` VALUES (100, '2016-10-09', '', NULL);
INSERT INTO `tmholiday` VALUES (101, '2016-10-02', '', NULL);
INSERT INTO `tmholiday` VALUES (102, '2016-11-05', '', NULL);
INSERT INTO `tmholiday` VALUES (103, '2016-11-12', '', NULL);
INSERT INTO `tmholiday` VALUES (104, '2016-11-19', '', NULL);
INSERT INTO `tmholiday` VALUES (105, '2016-11-26', '', NULL);
INSERT INTO `tmholiday` VALUES (106, '2016-11-06', '', NULL);
INSERT INTO `tmholiday` VALUES (107, '2016-11-13', '', NULL);
INSERT INTO `tmholiday` VALUES (108, '2016-11-20', '', NULL);
INSERT INTO `tmholiday` VALUES (109, '2016-11-27', '', NULL);
INSERT INTO `tmholiday` VALUES (110, '2016-12-03', '', NULL);
INSERT INTO `tmholiday` VALUES (111, '2016-12-10', '', NULL);
INSERT INTO `tmholiday` VALUES (112, '2016-12-17', '', NULL);
INSERT INTO `tmholiday` VALUES (113, '2016-12-24', '', NULL);
INSERT INTO `tmholiday` VALUES (114, '2016-12-31', '', NULL);
INSERT INTO `tmholiday` VALUES (115, '2016-12-25', '', NULL);
INSERT INTO `tmholiday` VALUES (116, '2016-12-18', '', NULL);
INSERT INTO `tmholiday` VALUES (117, '2016-12-11', '', NULL);
INSERT INTO `tmholiday` VALUES (118, '2016-12-04', '', NULL);
INSERT INTO `tmholiday` VALUES (119, '2016-12-26', '', NULL);
INSERT INTO `tmholiday` VALUES (120, '2016-12-12', '', NULL);
INSERT INTO `tmholiday` VALUES (128, '2017-01-01', '', NULL);
INSERT INTO `tmholiday` VALUES (129, '2017-01-08', '', NULL);
INSERT INTO `tmholiday` VALUES (130, '2017-01-15', '', NULL);
INSERT INTO `tmholiday` VALUES (131, '2017-01-22', '', NULL);
INSERT INTO `tmholiday` VALUES (132, '2017-01-29', '', NULL);
INSERT INTO `tmholiday` VALUES (133, '2017-01-07', '', NULL);
INSERT INTO `tmholiday` VALUES (134, '2017-01-14', '', NULL);
INSERT INTO `tmholiday` VALUES (135, '2017-01-21', '', NULL);
INSERT INTO `tmholiday` VALUES (136, '2017-01-28', '', NULL);
INSERT INTO `tmholiday` VALUES (137, '2017-02-04', '', NULL);
INSERT INTO `tmholiday` VALUES (138, '2017-02-11', '', NULL);
INSERT INTO `tmholiday` VALUES (139, '2017-02-18', '', NULL);
INSERT INTO `tmholiday` VALUES (140, '2017-02-25', '', NULL);
INSERT INTO `tmholiday` VALUES (141, '2017-02-05', '', NULL);
INSERT INTO `tmholiday` VALUES (142, '2017-02-12', '', NULL);
INSERT INTO `tmholiday` VALUES (143, '2017-02-19', '', NULL);
INSERT INTO `tmholiday` VALUES (144, '2017-02-26', '', NULL);
INSERT INTO `tmholiday` VALUES (145, '2017-03-04', '', NULL);
INSERT INTO `tmholiday` VALUES (146, '2017-03-11', '', NULL);
INSERT INTO `tmholiday` VALUES (147, '2017-03-18', '', NULL);
INSERT INTO `tmholiday` VALUES (148, '2017-03-25', '', NULL);
INSERT INTO `tmholiday` VALUES (149, '2017-03-05', '', NULL);
INSERT INTO `tmholiday` VALUES (150, '2017-03-12', '', NULL);
INSERT INTO `tmholiday` VALUES (151, '2017-03-19', '', NULL);
INSERT INTO `tmholiday` VALUES (152, '2017-03-26', '', NULL);
INSERT INTO `tmholiday` VALUES (153, '2017-04-01', '', NULL);
INSERT INTO `tmholiday` VALUES (154, '2017-04-08', '', NULL);
INSERT INTO `tmholiday` VALUES (155, '2017-04-15', '', NULL);
INSERT INTO `tmholiday` VALUES (156, '2017-04-22', '', NULL);
INSERT INTO `tmholiday` VALUES (157, '2017-04-29', '', NULL);
INSERT INTO `tmholiday` VALUES (158, '2017-04-02', '', NULL);
INSERT INTO `tmholiday` VALUES (159, '2017-04-09', '', NULL);
INSERT INTO `tmholiday` VALUES (160, '2017-04-16', '', NULL);
INSERT INTO `tmholiday` VALUES (161, '2017-04-23', '', NULL);
INSERT INTO `tmholiday` VALUES (162, '2017-04-30', '', NULL);
INSERT INTO `tmholiday` VALUES (163, '2017-05-06', '', NULL);
INSERT INTO `tmholiday` VALUES (164, '2017-05-13', '', NULL);
INSERT INTO `tmholiday` VALUES (165, '2017-05-20', '', NULL);
INSERT INTO `tmholiday` VALUES (166, '2017-05-27', '', NULL);
INSERT INTO `tmholiday` VALUES (167, '2017-05-07', '', NULL);
INSERT INTO `tmholiday` VALUES (168, '2017-05-14', '', NULL);
INSERT INTO `tmholiday` VALUES (169, '2017-05-21', '', NULL);
INSERT INTO `tmholiday` VALUES (170, '2017-05-28', '', NULL);
INSERT INTO `tmholiday` VALUES (171, '2017-06-03', '', NULL);
INSERT INTO `tmholiday` VALUES (172, '2017-06-10', '', NULL);
INSERT INTO `tmholiday` VALUES (173, '2017-06-17', '', NULL);
INSERT INTO `tmholiday` VALUES (174, '2017-06-24', '', NULL);
INSERT INTO `tmholiday` VALUES (175, '2017-06-04', '', NULL);
INSERT INTO `tmholiday` VALUES (176, '2017-06-11', '', NULL);
INSERT INTO `tmholiday` VALUES (177, '2017-06-18', '', NULL);
INSERT INTO `tmholiday` VALUES (178, '2017-06-25', '', NULL);
INSERT INTO `tmholiday` VALUES (179, '2017-07-01', '', NULL);
INSERT INTO `tmholiday` VALUES (180, '2017-07-08', '', NULL);
INSERT INTO `tmholiday` VALUES (181, '2017-07-15', '', NULL);
INSERT INTO `tmholiday` VALUES (182, '2017-07-22', '', NULL);
INSERT INTO `tmholiday` VALUES (183, '2017-07-29', '', NULL);
INSERT INTO `tmholiday` VALUES (184, '2017-07-02', '', NULL);
INSERT INTO `tmholiday` VALUES (185, '2017-07-16', '', NULL);
INSERT INTO `tmholiday` VALUES (186, '2017-07-23', '', NULL);
INSERT INTO `tmholiday` VALUES (187, '2017-07-30', '', NULL);
INSERT INTO `tmholiday` VALUES (188, '2017-08-05', '', NULL);
INSERT INTO `tmholiday` VALUES (189, '2017-08-12', '', NULL);
INSERT INTO `tmholiday` VALUES (190, '2017-08-19', '', NULL);
INSERT INTO `tmholiday` VALUES (191, '2017-08-26', '', NULL);
INSERT INTO `tmholiday` VALUES (192, '2017-08-06', '', NULL);
INSERT INTO `tmholiday` VALUES (193, '2017-08-13', '', NULL);
INSERT INTO `tmholiday` VALUES (194, '2017-08-20', '', NULL);
INSERT INTO `tmholiday` VALUES (195, '2017-08-27', '', NULL);
INSERT INTO `tmholiday` VALUES (196, '2017-09-02', '', NULL);
INSERT INTO `tmholiday` VALUES (197, '2017-09-09', '', NULL);
INSERT INTO `tmholiday` VALUES (198, '2017-09-16', '', NULL);
INSERT INTO `tmholiday` VALUES (199, '2017-09-23', '', NULL);
INSERT INTO `tmholiday` VALUES (200, '2017-09-30', '', NULL);
INSERT INTO `tmholiday` VALUES (201, '2017-09-03', '', NULL);
INSERT INTO `tmholiday` VALUES (202, '2017-09-10', '', NULL);
INSERT INTO `tmholiday` VALUES (203, '2017-09-17', '', NULL);
INSERT INTO `tmholiday` VALUES (204, '2017-09-24', '', NULL);
INSERT INTO `tmholiday` VALUES (205, '2017-10-07', '', NULL);
INSERT INTO `tmholiday` VALUES (206, '2017-10-14', '', NULL);
INSERT INTO `tmholiday` VALUES (207, '2017-10-21', '', NULL);
INSERT INTO `tmholiday` VALUES (208, '2017-10-28', '', NULL);
INSERT INTO `tmholiday` VALUES (209, '2017-10-01', '', NULL);
INSERT INTO `tmholiday` VALUES (210, '2017-10-08', '', NULL);
INSERT INTO `tmholiday` VALUES (211, '2017-10-15', '', NULL);
INSERT INTO `tmholiday` VALUES (212, '2017-10-22', '', NULL);
INSERT INTO `tmholiday` VALUES (213, '2017-10-29', '', NULL);
INSERT INTO `tmholiday` VALUES (214, '2017-11-04', '', NULL);
INSERT INTO `tmholiday` VALUES (215, '2017-11-11', '', NULL);
INSERT INTO `tmholiday` VALUES (216, '2017-11-18', '', NULL);
INSERT INTO `tmholiday` VALUES (217, '2017-11-25', '', NULL);
INSERT INTO `tmholiday` VALUES (218, '2017-11-05', '', NULL);
INSERT INTO `tmholiday` VALUES (219, '2017-11-12', '', NULL);
INSERT INTO `tmholiday` VALUES (220, '2017-11-19', '', NULL);
INSERT INTO `tmholiday` VALUES (221, '2017-11-26', '', NULL);
INSERT INTO `tmholiday` VALUES (222, '2017-12-02', '', NULL);
INSERT INTO `tmholiday` VALUES (223, '2017-12-09', '', NULL);
INSERT INTO `tmholiday` VALUES (224, '2017-12-16', '', NULL);
INSERT INTO `tmholiday` VALUES (225, '2017-12-23', '', NULL);
INSERT INTO `tmholiday` VALUES (226, '2017-12-30', '', NULL);
INSERT INTO `tmholiday` VALUES (227, '2017-12-03', '', NULL);
INSERT INTO `tmholiday` VALUES (228, '2017-12-10', '', NULL);
INSERT INTO `tmholiday` VALUES (229, '2017-12-17', '', NULL);
INSERT INTO `tmholiday` VALUES (230, '2017-12-24', '', NULL);
INSERT INTO `tmholiday` VALUES (231, '2017-12-31', '', NULL);

-- ----------------------------
-- Table structure for tmjabatan
-- ----------------------------
DROP TABLE IF EXISTS `tmjabatan`;
CREATE TABLE `tmjabatan`  (
  `jabatanid` int(11) NOT NULL AUTO_INCREMENT,
  `n_jabatan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`jabatanid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmjabatan
-- ----------------------------
INSERT INTO `tmjabatan` VALUES (1, 'Eselon la Pembina Utama Madya IV/d Pembina Utama IV/e ');
INSERT INTO `tmjabatan` VALUES (2, 'Eselon lb Pembina Utama Muda IV/c Pembina Utama IV/e ');
INSERT INTO `tmjabatan` VALUES (3, 'Eselon II a Pembina Utama Muda IV/c Pembina Utama Madya IV/d');
INSERT INTO `tmjabatan` VALUES (4, 'Eselon lIb Pembina Tingkat I IV/b Pembina Utama Muda IV/c');
INSERT INTO `tmjabatan` VALUES (5, 'Eselon IIIa Pembina IV/a Pembina Tingkat I IV/b ');
INSERT INTO `tmjabatan` VALUES (6, 'Eselon III b Penata Tingkat I Ill/d Pembina IV/a ');
INSERT INTO `tmjabatan` VALUES (7, 'Eselon IV a Penata III/c Penata Tingkat I Ill/d ');
INSERT INTO `tmjabatan` VALUES (8, 'Eselon IV b Penata Muda Tingkat I Ill/b Penata III/c ');
INSERT INTO `tmjabatan` VALUES (9, 'Eselon V Penata Muda Ill/a Penata Muda Tingkat I Ill/b');
INSERT INTO `tmjabatan` VALUES (10, 'Staff');
INSERT INTO `tmjabatan` VALUES (11, 'Honorer');

-- ----------------------------
-- Table structure for tmopds
-- ----------------------------
DROP TABLE IF EXISTS `tmopds`;
CREATE TABLE `tmopds`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_opd` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tmrumpun_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `active` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmopds
-- ----------------------------
INSERT INTO `tmopds` VALUES (1, '110101', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'DINDIK', 3, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (2, '110201', 'DINAS KESEHATAN', 'DINKES', 3, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (3, '110202', 'RUMAH SAKIT UMUM', 'RSUD', 1, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (4, '110301', 'DINAS PEKERJAAN UMUM', 'DPU', 2, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (5, '110302', 'DINAS BANGUNAN DAN PENATAAN RUANG', 'DBPR', 2, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (6, '110401', 'DINAS PERUMAHAN, KAWASAN PERMUKIMAN DAN PERTANAHAN', 'DPKPP', 2, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (7, '110501', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN', 'DPKP', 1, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (8, '110502', 'BADAN PENANGGULANGAN BENCANA DAERAH', 'BPBD', 1, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (9, '110503', 'SATUAN POLISI PAMONG PRAJA', 'SATPOL', 1, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (10, '110504', 'BADAN KESATUAN BANGSA DAN POLITIK', 'KESBANGPOL', 1, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (11, '110601', 'DINAS SOSIAL', 'DINSOS', 0, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (12, '120101', 'DINAS KETENAGAKERJAAN', 'DISNAKER', 2, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (13, '120201', 'DINAS PEMBERDAYAAN MASYARAKAT PEMBERDAYAAN PEREMPUAN PERLINDUNGAN ANAK DAN KELUARGA BERENCANA', 'DPMP3AKB', 3, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (14, '120501', 'DINAS LINGKUNGAN HIDUP', 'DLH', 2, '1', '', '2018-11-16 10:26:26', '2018-11-16 10:26:26');
INSERT INTO `tmopds` VALUES (15, '120601', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 'DISDUKCAPIL', 1, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (16, '120901', 'DINAS PERHUBUNGAN', 'DISHUB', 2, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (17, '121001', 'DINAS KOMUNIKASI DAN INFORMATIKA', 'DISKOMINFO', 2, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (18, '121101', 'DINAS KOPERASI, USAHA KECIL DAN MENENGAH', 'DKUKM', 2, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (19, '121201', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'DPMPTSP', 2, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (20, '121301', 'DINAS PEMUDA DAN OLAHRAGA', 'DPO', 3, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (21, '121701', 'DINAS PERPUSTAKAAN DAN ARSIP DAERAH', 'DPAD', 0, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (22, '200201', 'DINAS PARIWISATA', 'DISPAR', 2, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (23, '200301', 'DINAS KETAHANAN PANGAN, PERTANIAN DAN PERIKANAN', 'DPPK', 2, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (24, '200401', 'DINAS PERINDUSTRIAN DAN PERDAGANGAN', 'DISPERINDAG', 2, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (25, '300101', 'BADAN PERENCANAAN PEMBANGUNAN DAERAH', 'BAPEDA', 2, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (26, '300201', 'BADAN PENDAPATAN  DAERAH', 'BPD', 1, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (27, '300202', 'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH', 'BPKAD', 3, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (28, '300301', 'BADAN KEPEGAWAIAN, PENDIDIKAN DAN PELATIHAN', 'BKD', 1, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (29, '300501', 'SEKRETARIAT DPRD', 'SEKWAN', 1, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (30, '300601', 'SEKRETARIAT DAERAH', 'SEKDA', 0, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (31, '300701', 'INSPEKTORAT', 'INSPEKTORAT', 1, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (32, '300801', 'KECAMATAN CIPUTAT', 'CIPUTAT', 0, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (33, '300802', 'KECAMATAN CIPUTAT TIMUR', 'CIPUTAT TIMUR', 0, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (34, '300803', 'KECAMATAN PAMULANG', 'PAMULANG', 0, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (35, '300804', 'KECAMATAN SERPONG', 'SERPONG', 0, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (36, '300805', 'KECAMATAN SERPONG UTARA', 'SERPONG UTARA', 0, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (37, '300806', 'KECAMATAN PONDOK AREN', 'PONDOK AREN', 0, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (38, '300807', 'KECAMATAN SETU', 'SETU', 0, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (40, '300902', 'WALIKOTA DAN WAKIL WALIKOTA', 'KDH-WKDH', 0, '1', '', '2018-11-16 10:26:27', '2018-11-16 10:26:27');
INSERT INTO `tmopds` VALUES (49, '300222', 'SATUAN KERJA PEGELOLA KEUANGAN DAERAH', NULL, NULL, '1', NULL, '2020-10-05 04:51:18', '2020-10-05 04:51:18');

-- ----------------------------
-- Table structure for tmpegawai
-- ----------------------------
DROP TABLE IF EXISTS `tmpegawai`;
CREATE TABLE `tmpegawai`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sikd_satker_id` int(14) NULL DEFAULT NULL,
  `jabatanid` int(11) NULL DEFAULT NULL,
  `pegawaistatusid` int(11) NOT NULL COMMENT '1 = PNS, 2 = TKS',
  `d_masuk` date NULL DEFAULT NULL,
  `d_keluar` date NULL DEFAULT NULL,
  `nip` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `n_pegawai` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dinasid` int(11) NULL DEFAULT NULL,
  `bidangid` int(11) NULL DEFAULT NULL,
  `d_kontrak` date NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jabatanid`(`jabatanid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 552 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmpegawai
-- ----------------------------
INSERT INTO `tmpegawai` VALUES (49, NULL, 5, 1, '2007-01-11', '0000-00-00', '19701006 199103 1 001', 'Drs. H. Dadang Sofyan, MM', '081211588899', 'Serpong', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (51, NULL, 6, 1, '2006-01-05', '0000-00-00', '19690720 199701 1 002', 'HELMI KAMALUDIN, S.Sos', '081219991337', 'serpong\n', 3, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (52, NULL, 5, 1, '1999-07-09', '0000-00-00', '19711206 200501 2 010', 'Rr. EDTRIN P. DESATWATI,SE.M.Si', '081234567', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (53, NULL, 6, 1, '1998-01-08', '0000-00-00', '19690830 200212 2 002', 'RITA VIRGANTINI, S. Sos. M. Si', '08123456567', 'serpong\n', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (54, NULL, 6, 1, '2006-01-12', '0000-00-00', '19690416 200312 1 002', 'BUDI SETIADI,SE', '081234567', 'serpong\n', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (56, NULL, 6, 1, '2006-01-12', '0000-00-00', '19770415 200501 1 015', 'SAPRUDIN, S. IP', '081234567', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (58, NULL, 5, 1, '2006-01-11', '0000-00-00', '19780326 199803 2 001', 'SRI LAKSMI HANDAYANI ', '081234567', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (59, NULL, 5, 1, '2007-01-04', '0000-00-00', '196406082007011009', 'NURHASAN, S. IP', '0812345678', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (60, NULL, 5, 1, '2007-01-05', '0000-00-00', '19720206 200701 1 011', 'ROKIB, S. IP', '081234567', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (62, NULL, 6, 1, '2006-01-12', '0000-00-00', '19880524 201001 1 002', 'HERLY EPENDI, S. Sos., M. Si', '081234567', 'serpong\n', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (64, NULL, 5, 1, '2006-01-20', '0000-00-00', '19740218 201001 2 001', 'MIA S. ANDRIANI, S. IP', '081234567', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (65, NULL, 6, 1, '2006-01-12', '0000-00-00', '19741021 200112 2 002', 'HILDA FITRIA, S. IP', '081236567', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (66, NULL, 6, 1, '2006-01-03', '0000-00-00', '19861026 201001 2 005', 'TRI NURINA TRISTANTI. SE', '0812345678', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (75, NULL, 11, 2, '2014-05-05', '0000-00-00', '-', 'DADAN DARMAWAN, S. Pd', '0812346678', 'serpong', 3, 0, '2018-01-19', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (77, NULL, 11, 2, '2014-01-15', '0000-00-00', '-', 'M. ROSLI', '081291629479', 'serpong', 3, 3, '2018-01-01', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (79, NULL, 11, 2, '2015-05-04', '0000-00-00', '-', 'SABUR, SE', '081297402625', 'serpong', 13, 1, '2022-01-20', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (81, NULL, 11, 2, '2015-08-04', '0000-00-00', '-', 'MOCHAMAD AKBARSYAH, S. IP', '081234567', 'serpong', 3, 0, '2020-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (83, NULL, 11, 2, '2014-01-06', '0000-00-00', '-', 'SRI WAHYUNI', '081234567', 'serpong', 3, 0, '2020-01-16', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (84, NULL, 11, 2, '2014-01-06', '0000-00-00', '-', 'MADROHIM O\'O', '081234567', 'serpong', 13, 1, '2019-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (85, NULL, 11, 2, '2015-04-06', '0000-00-00', '-', 'SOLIHIN', '081234567', 'serpong', 3, 0, '2019-01-07', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (87, NULL, 11, 2, '2015-01-05', '0000-00-00', '-', 'MOH. SARNATA', '0812345678', 'serpong', 3, 0, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (88, NULL, 11, 2, '2014-01-06', '0000-00-00', '-', 'KURNIADI', '081234567', 'serpong\n', 3, 0, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (92, NULL, 11, 2, '2015-01-07', '0000-00-00', '--', 'HERLY SUSANTO', '081234567', 'serpong', 13, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (95, NULL, 11, 2, '2014-01-06', '0000-00-00', '--', 'IDRIS', '081234567', 'serpong', 3, 0, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (96, NULL, 5, 1, '2012-01-02', '0000-00-00', '19701006 199103 1 001', 'BAMBANG NOERTJAHJO, SE. Ak', '081211588899', 'serpong', 4, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (97, NULL, 7, 1, '2009-01-05', '0000-00-00', '19780209 200212 1 007', 'MAULANA PRAYOGA, ST. MIDS ', '081385203839', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (98, NULL, 6, 1, '2010-01-04', '0000-00-00', '19711009 200212 1 005', 'HARIS JAYA PRAWIRA, S. IP', '081911149817', 'serpong\n', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (100, NULL, 6, 1, '2010-01-04', '0000-00-00', '19711018 200012 1 002 ', 'SEVERUL CAHYO KUNTADI, S.Pd', '081234567', 'serpong', 3, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (101, NULL, 7, 1, '2010-01-04', '0000-00-00', '19740410 199901 2 001', 'TATI SURYATI, SH. MT', ' 0811914835', 'serpong', 3, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (102, NULL, 6, 1, '2008-01-07', '0000-00-00', '19750919 200312 1 005', 'IRFAN SANTOSO, S.Sos, MM', '082210449998', 'serpong', 3, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (103, NULL, 6, 1, '2009-01-05', '0000-00-00', '19780209 200212 1 007', 'MAULANA PRAYOGA, ST. MIDS ', '081385203839', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (104, NULL, 6, 1, '2010-01-04', '0000-00-00', '19750601 200112 1 004', 'SAPTO PRATOLO, SE. M.Si', '081310078910', 'serpong\n', 3, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (106, NULL, 6, 1, '2009-01-05', '0000-00-00', '19800625 200604 1 008', 'MUHAMAD HARI KURNIAWAN, SH', '081234567', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (108, NULL, 6, 1, '2012-01-02', '0000-00-00', '19790708 201001 1 007', 'TB. ASEP NURDIN, S. Kom., M. Kom', '081234567', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (110, NULL, 6, 1, '2004-12-06', '0000-00-00', '19860624 200412 2 002', 'ISNARNI PANCA DEWI, S. STP., MH', '01822344567', 'serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (116, NULL, 6, 1, '2002-12-02', '0000-00-00', '19720224 200212 1 004', 'NANA MULYANA, SE', '08567112800', 'serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (120, NULL, 5, 1, '2010-01-04', '0000-00-00', '19860314 201001 2 010', 'MIRA MUCHILA, S. Sos', '082123179467', 'serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (122, NULL, 3, 1, '2014-11-03', '0000-00-00', '19680510 201411 1 001', 'JAJANG JAFAR', '08129670195', 'Tangerang', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (123, NULL, 6, 1, '2005-01-03', '0000-00-00', '19730111 200501 2 005', 'ETI SUHERTI, SE', '081234567', 'Tangerang', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (124, NULL, 5, 1, '2010-01-04', '0000-00-00', '19850323 201001 1 014', 'REZA FADHILLAH HERNAWAN, S. Sos', '0812345678', 'serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (125, NULL, 4, 1, '2010-01-04', '0000-00-00', '19760301 201001 1 005', 'MULYADI, A. Md', '081314551669', 'serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (126, NULL, 4, 1, '2014-02-03', '0000-00-00', '19901017 201402 2 001', 'MALYDA PUSPITASARI, A. Md. Pjk', '085779417009', 'serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (127, NULL, 3, 1, '2007-01-01', '0000-00-00', '19670708 200701 1 017', 'HASAN SAID', '081382996363', 'serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (128, NULL, 6, 1, '2006-04-03', '0000-00-00', '19830225 200604 2 009', 'NURUL ROHMAH SYARIEF, SE', '081234567', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (129, NULL, 6, 1, '2007-01-01', '0000-00-00', '19620804 200701 1 004', 'Drs. WAHJUDIN', '08129809562', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (130, NULL, 6, 1, '2005-01-03', '0000-00-00', '19711215 200501 2 010', 'EUIS SUCIATI, S. IP', '081234567', 'serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (131, NULL, 6, 1, '2006-04-03', '0000-00-00', '19640905 200604 1 004', 'H. M. SYAFEI, S. IP', '081284841964', 'serpong', 3, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (132, NULL, 5, 1, '2010-01-04', '0000-00-00', '19810216 201001 1 007', 'FAIDLUR RAHMAN,SE', '081234567', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (133, NULL, 6, 1, '2011-01-03', '0000-00-00', '19840607 201101 1 002', 'BUCHORI MUSLIM, S. Sos', '081282789987', 'serpong\n', 2, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (136, NULL, 5, 1, '2010-01-04', '0000-00-00', '19830113 201001 1 005', 'LUCKY TRISYAHNURA, S. Sos', '081298001619', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (139, NULL, 4, 1, '2007-01-01', '0000-00-00', '19760713 200701 1 009', 'HASBIALLAH', '08129990313', 'serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (141, NULL, 6, 1, '2006-04-03', '0000-00-00', '19690627 200604 1 004', 'SUNI FAIRANSYAH, S. AP', '081212249434', 'serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (143, NULL, 5, 2, '2008-01-07', '0000-00-00', '-', 'ARIEF ADISAPUTRA, S.Kom', '-', 'serpong', 13, 4, '2017-12-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (144, NULL, 5, 1, '2008-01-07', '0000-00-00', '19730723 200801 1 003', 'YOSEP WIJAYA, S. IP', '081234567', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (145, NULL, 5, 1, '2010-01-04', '0000-00-00', '19720806 201001 1 003 ', 'KARTIKO, S. Sos', '081234567', 'serpong\n', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (147, NULL, 4, 1, '2007-01-01', '0000-00-00', '19750228 200701 1 012', 'EDY SUHAIDY', '08159974681', 'serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (149, NULL, 6, 1, '2010-01-04', '0000-00-00', '19810323 201001 1 008', 'PENNY ALAMSYAH HARAHAP, S. Kom', '085714126607', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (150, NULL, 6, 1, '2010-01-04', '0000-00-00', '19851025 201001 1 008', 'VINKY PRADIKTA RACHMAN, SH', '085691505578', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (153, NULL, 5, 1, '1999-01-04', '0000-00-00', '19720818 199901 1 001', 'IIN ISMAIL, A. Md', '08128742523', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (155, NULL, 5, 1, '2014-02-03', '0000-00-00', '19810916 201402 1 001', 'BUDI PRIHARTANTO, ST', '082393906456', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (156, NULL, 4, 1, '2001-01-01', '2017-03-07', '19710201 201001 1 004', 'BUNBUN ZAEPULOH', '087870946781', 'serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (159, NULL, 6, 1, '2007-01-01', '0000-00-00', '19661117 200701 1 003', 'SRU WAHYUDI, SE', '08128316928', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (160, NULL, 6, 1, '2011-01-03', '0000-00-00', '19841216 201101 2 003', 'YAOMI MARYAM, S. Sos', '08129932444', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (162, NULL, 5, 1, '2005-01-03', '0000-00-00', '19671002 200501 1 003', 'MUHIT, S. IP', '081262226294', 'serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (163, NULL, 3, 1, '2014-12-01', '0000-00-00', '19850626201412 1 002', 'YOGI AYUDYA TAUFIK FAUZI', '0981234567', 'serpong', 3, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (164, NULL, 11, 2, '2011-01-03', '0000-00-00', '--', 'IMAN HIDAYAT, S. Sos', '08170866641', 'serpong', 3, 2, '2018-01-01', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (165, NULL, 11, 2, '2013-01-07', '0000-00-00', '-', 'MARIA ULFAH, A. Md', '085814070305', 'serpong', 13, 4, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (166, NULL, 11, 2, '2015-01-05', '0000-00-00', '--', 'FAUZI ISMAIL, S. Kom', '085219904445', 'serpong', 13, 6, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (169, NULL, 11, 2, '2013-01-07', '0000-00-00', '--', 'IBNU MAS\'UD, S. Kom', '082122756641', 'serpong', 13, 1, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (173, NULL, 7, 1, '2013-01-07', '0000-00-00', '--', 'RONI ABRIANTO, ST', '081295592500', 'serpong', 13, 4, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (174, NULL, 11, 2, '2013-01-07', '0000-00-00', '--', 'MUHAMAD MUNAJAT, SE', '082297174878', 'serpong', 13, 4, '2017-12-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (176, NULL, 11, 2, '2013-01-07', '0000-00-00', '--', 'MAYSELLA DWI ANGGRAENI, S. Sos', '08976478830', 'serpong', 3, 6, '2018-01-01', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (178, NULL, 11, 2, '2015-01-05', '0000-00-00', '--', '123654852', '081234567', 'serpong', 0, 0, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (180, NULL, 11, 2, '2013-01-07', '0000-00-00', '--', 'MHD. DEFKY KURNIAWAN S. LUBIS, SH', '081288637306', 'serpong', 3, 6, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (181, NULL, 11, 2, '2012-01-02', '0000-00-00', '--', 'RISKA KARTINI, S. Sos', '081234567', 'serpong', 3, 0, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (182, NULL, 11, 2, '2013-01-07', '0000-00-00', '--', 'NATALINA SIBARANI, SH', '081287838620', 'serpong', 13, 3, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (183, NULL, 11, 2, '2014-01-06', '0000-00-00', '--', 'TOTO DARYANTO', '081281233369', 'serpong', 13, 3, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (185, NULL, 11, 2, '2013-01-07', '0000-00-00', '--', 'MANSYURUDDIN', '081234567', 'serpong', 13, 3, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (186, NULL, 11, 2, '2014-01-06', '0000-00-00', '--', 'SOPIYAN HADI, ST ', '081212101779', 'serpong', 3, 2, '2018-01-01', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (189, NULL, 11, 2, '2014-01-06', '0000-00-00', '--', 'SAMPAN AJI PRATOMO', '081290689494', 'serpong', 13, 2, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (190, NULL, 11, 2, '2015-01-05', '0000-00-00', '--', 'NADIF HAMZAH , SH', '081297966196', 'serpong', 13, 4, '2018-01-01', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (194, NULL, 11, 2, '2015-01-05', '0000-00-00', '--', 'INDRA WANGSA WIDARTA, A. Md', '085659055000', 'serpong', 13, 2, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (195, NULL, 11, 2, '2015-01-05', '0000-00-00', '--', 'YANI MARLIYANI, S. Pd', '081321201646', 'serpong', 13, 2, '2018-01-01', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (196, NULL, 11, 2, '2015-01-05', '0000-00-00', '--', 'DEWI RIA ARISANTI, SKM', '081288307717', 'serpong', 13, 5, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (197, NULL, 11, 2, '2014-01-06', '0000-00-00', '--', 'MARUP INAYATULLAH, SH', '085946457694', 'serpong', 3, 2, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (198, NULL, 11, 2, '2015-01-05', '0000-00-00', '--', 'SOLAHUDIN , S. Pdi', '08881819046', 'serpong', 13, 2, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (199, NULL, 11, 2, '2015-01-05', '0000-00-00', '--', 'MAHMUD, ST', '082114923923', 'serpong', 3, 2, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (200, NULL, 11, 2, '2015-06-01', '0000-00-00', '--', 'EVI KUSNIADI, ST', '081288635598', 'serpong', 3, 2, '2017-01-02', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (203, NULL, 11, 2, '2014-10-06', '0000-00-00', '--', 'M. NURDIN, S. Kom', '082112420037', 'serpong', 2, 4, '2019-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (204, NULL, 11, 2, '2014-01-06', '0000-00-00', '-', 'OKI HIDAYANTI, SH', '085945593171', 'serpong', 13, 1, '2015-01-05', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (205, NULL, 11, 2, '2015-09-07', '0000-00-00', '--', 'GUGUN GUNAWAN , S. Kom', '081234567', 'serpong', 13, 3, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (206, NULL, 11, 2, '2015-06-01', '0000-00-00', '--', 'HAMDANI, S. IP', '081285581977', 'serpong', 13, 6, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (207, NULL, 11, 2, '2015-03-02', '0000-00-00', '--', 'YAYAN GUSTIAWAN, SE', '081297493268', 'serpong', 8, 2, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (208, NULL, 11, 2, '2013-01-07', '0000-00-00', '-', 'HERI GUNAWAN, S. IP', '081286154313', 'serpong', 3, 2, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (209, NULL, 11, 2, '2014-01-06', '0000-00-00', '--', 'ENDAH NURLITA, A. Md', '081234567', 'serpong', 13, 4, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (210, NULL, 11, 2, '2014-01-06', '0000-00-00', '--', 'AR123', '081234567', 'serpong', 3, 5, '2018-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (211, NULL, 11, 2, '2014-01-06', '0000-00-00', '--', 'M. NASIR ', '081384227557', 'serpong', 3, 2, '2016-01-04', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (212, NULL, 11, 1, '2014-07-07', '0000-00-00', '-', 'ROJALIH', '085711343258', 'serpong', 3, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (213, NULL, 11, 2, '2015-03-02', '0000-00-00', '--', 'YOGAS SETYAWAN NURKAMAL, S. IP', '085722340877', 'serpong', 3, 3, '2018-09-03', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (214, NULL, 11, 2, '2014-10-06', '0000-00-00', '--', 'VICTOR NALAMBAS SIREGAR, SE', '082310161010', 'serpong', 13, 6, '2018-01-16', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (215, NULL, 11, 2, '2014-03-03', '0000-00-00', '--', 'PRANAWIJAYA, S. Sos', '081234567', 'serpong', 3, 0, '2018-01-01', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (216, NULL, 10, 1, '2014-05-05', '0000-00-00', '198805242010011002', 'HERLY EPENDI, S.Sos., M.Si', '081380373673', 'serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (217, NULL, 11, 2, '2015-03-02', '0000-00-00', '--', 'ARYO NOOR SUWENDHO, A. Md', '087777494990', 'serpong', 3, 3, '2018-08-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (219, NULL, 11, 2, '2015-08-03', '0000-00-00', '--', 'RAHARJO PRIYO NUGROHO, SH', '087738289766', 'serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (220, NULL, 11, 2, '2015-01-05', '0000-00-00', '--', 'MERLIE ENDARWATI, SHI', '082282222078', 'serpong', 13, 4, '2017-01-31', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (222, NULL, 11, 2, '2014-05-05', '0000-00-00', '--', 'FINDA YULIANTI', '082211232013', 'serpong', 3, 6, '2018-01-02', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (223, NULL, 1, 1, '2016-01-01', '2016-01-02', '-', 'Muhamad Janujay', '08970383853', 'alamat.', 1, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (225, NULL, 9, 1, '2017-03-02', '2017-03-02', '9898989', 'ENDANG SUDRAJAT', '081293330819', 'D', 1, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (226, NULL, 8, 1, '0000-00-00', '0000-00-00', '198404252010011008', 'PANJI IRAWAN', '021', '-', 1, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (227, NULL, 7, 1, '0000-00-00', '0000-00-00', '19690611 199803 1 013', 'H. Murtado, SE', '081285579116', '-', 7, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (231, NULL, 10, 1, '0000-00-00', '0000-00-00', '4536576879809', 'Pencetak SK Ketenagakerjaan', '-', '-', 0, 0, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (237, NULL, 10, 1, '2017-03-01', '2017-03-14', '197008012007011021', 'HASMY KAHFI', '087879582269', 'Tangerang Selatan', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (238, NULL, 10, 1, '0000-00-00', '0000-00-00', '196705102007011017', 'TAUFIK RAHMAN', '08119754844', 'Tangerang Selatan', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (239, NULL, 4, 1, '2017-03-01', '2017-03-14', '198511', 'MOHAMAD HUDORI, SE', '081280803160', 'Tangerang Selatan', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (241, NULL, 2, 1, '2017-03-01', '2017-03-14', '1982019731', 'FIRMAN RESAMA OKTAVIA SE MSI', '087808880529', 'BSD', 2, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (245, NULL, 10, 1, '0000-00-00', '0000-00-00', '-', 'TAUFIEQ RIEFKIE, S. Sos', '-', 'serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (246, NULL, 3, 1, '2017-03-01', '2017-03-15', '19820830 201001 1    009', 'ARIF AFWAN TAUFANI, SE., M. Si', '081389898910', 'tangsel\n', 2, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (247, NULL, 3, 1, '2017-03-01', '2017-03-15', '19820830 201001 1  009', 'ARIF AFWAN TAUFANI SE MSI', '081389898910', 'TANGSEL', 7, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (248, NULL, 4, 1, '2017-03-01', '2017-03-15', '48484894894', 'PUTUT DWI CAHYONO SE', '0818979440', 'bsd', 2, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (249, NULL, 10, 2, '2017-03-01', '2017-03-15', '-', 'IMAM KURNIAWAN, SE', '081283456344', 'Bsd\n', 13, 5, '2018-01-01', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (250, NULL, 2, 1, '2017-03-15', '2017-03-15', '19710504 200604 1 011', 'HERMAN SUSILO', '081219318604', 'sds', 2, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (252, NULL, 3, 1, '2017-03-01', '2017-03-14', '19810101 5215441', 'Firman Resama Oktavia, SE', '087808880529', 'BSD', 6, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (253, NULL, 2, 1, '2017-03-01', '2017-03-12', '1972010121', 'Ir. DEDEN SUPRIATNA, MM', '082112090996', 'bsd', 5, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (254, NULL, 10, 2, '0000-00-00', '0000-00-00', '-', 'IMRON ROSADI, S.pd', '081298103553', 'BSD', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (255, NULL, 10, 1, '2017-03-01', '2017-03-14', '197901011236512021', 'RIDWAN ARIFIN', '081315662244', 'bsd', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (256, NULL, 10, 2, '2017-03-01', '2017-03-13', '-', 'ADE IRAWAN ANTARIKSHA', '081312389969', 'bsd', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (257, NULL, 10, 2, '2017-04-24', '2017-04-30', '-', 'SUBKI', '081389898910', 'Tangsel\n', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (258, NULL, 10, 1, '0000-00-00', '0000-00-00', '198408282015031002', 'ERIK GUSTAMAN', '08112106343', 'Tangsel', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (259, NULL, 10, 2, '0000-00-00', '0000-00-00', '-', 'ARIA ZAKARA', '089677260793', 'BSD', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (260, NULL, 2, 1, '0000-00-00', '0000-00-00', '909090909090', 'TIM TEKNIS', '085722776632', 'alamat', 3, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (261, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Pembinaan PAUD dan Pendidikan Non Formal pada Dinas Pendidikan dan Kebudayaan', '-', '-', 4, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (262, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Kelembagaan dan Sarana dan Prasarana pada Dinas Pendidikan dan Kebudayaan', '-', '-', 4, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (265, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bagian Pembangunan pada Sekretariat Daerah', '-', '-', 9, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (266, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Subagian Bina Pekerjaan Umum, Penataan Ruang dan Perumahan, Permukiman dan Pertanahan pada Se', '-', '-', 9, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (267, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Bina Teknik dan Jasa Konstruksi pada Dinas Pekerjaan Umum', '-', '-', 9, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (268, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Bina Jasa Konstruksi pada Dinas Pekerjaan Umum', '-', '-', 9, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (269, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Penetapan dan Penagihan Pajak Daerah II pada Badan Pendapatan Daerah', '081315685234', '-', 24, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (270, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Penempatan Kerja dan Perluasan Kesempatan Kerja pada Dinas Ketenagakerjaan', '-', '-', 10, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (271, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Penempatan Tenaga Kerja dan Transmigrasi pada Dinas Ketenagakerjaan', '-', '-', 4, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (272, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Pembinaan Usaha Kepariwisataan dan Pemasaran pada Dinas Pariwisata', '081288982901', '-', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (273, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pembinaan Usaha Kepariwisataan pada Dinas Pariwisata', '085777222482', '-', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (274, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Perdagangan pada Dinas Perindustrian dan Perdagangan', '081385809572', '-', 14, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (275, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Perdagangan Dalam Negeri pada Dinas Perindustrian dan Perdagangan', '081385809572', '-', 14, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (276, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Tata Ruang pada Dinas Bangunan dan Penataan Ruang', '081298298709', '-', 20, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (277, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Perencanaan Tata Ruang pada Dinas Bangunan dan Penataan Ruang', '08159399043', '-', 20, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (278, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pengembangan Industri Kecil dan Menengah pada Dinas Perindustrian dan Perdagangan', '081284484701', '-', 14, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (279, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Perindustrian pada Dinas Perindustrian dan Perdagangan', '0811914368', '-', 14, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (280, NULL, 10, 1, '2017-05-26', '0000-00-00', '197201202007011010', 'DEDE ROHYADI, S.IP', '08120356676', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (281, NULL, 10, 1, '2017-05-26', '0000-00-00', '198204022011011001', 'BUCHORI MUSLIM, S.Sos', '081282789987', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (282, NULL, 10, 1, '0000-00-00', '0000-00-00', '198111092014111001', 'ZEKY YAMANI', '085334748881', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (284, NULL, 8, 1, '0000-00-00', '0000-00-00', '198209302010012009', 'ELLYA MUFIDAH, S, I. KOM', '081231091339', 'Jakarta Selatan', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (285, NULL, 9, 1, '0000-00-00', '0000-00-00', '198807122011012002', 'ANNISA ANDILARAS, A. MD', '08', 'Serpong Utara', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (286, NULL, 9, 1, '0000-00-00', '0000-00-00', '196203111993031005', 'H. SUJANA', '081310785519', 'Tiga Raksa', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (287, NULL, 9, 1, '0000-00-00', '0000-00-00', '196908172007011024', 'AGUS PURNADI, SIP', '08129270957', 'Tangerang', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (288, NULL, 9, 1, '0000-00-00', '0000-00-00', '198009212010011005', 'DANIS PRIYO UTOMO, A.MD', '085219905370', 'Setu', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (289, NULL, 5, 1, '0000-00-00', '0000-00-00', '196211281984031010', 'SUKATEMAN', '-', 'Tangerang', 13, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (290, NULL, 5, 1, '0000-00-00', '0000-00-00', '196301121987031001', 'DRS. YUSWO BAHTIYAR, M.SI', '-', 'Tangerang', 13, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (291, NULL, 8, 1, '0000-00-00', '0000-00-00', '196702101985101001', 'SURYANTO, SH', '-', 'Tangerang', 13, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (292, NULL, 8, 1, '0000-00-00', '0000-00-00', '198308192015032002', 'PUPUT PURNAWATI, S. SOS', '-', 'Tangerang', 13, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (293, NULL, 8, 1, '0000-00-00', '0000-00-00', '198804032011012003', 'IRNA APRIYANTI, S.SOS', '-', 'Tangerang', 13, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (294, NULL, 8, 1, '0000-00-00', '0000-00-00', '198405312002121004', 'AGUNG HANAFI, S.KOM', '-', 'Ciputat', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (295, NULL, 9, 1, '0000-00-00', '0000-00-00', '198307162010012012', 'YULIA WININGSIH, S.SOS', '087771230621', 'Ciputat Timur', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (296, NULL, 10, 1, '0000-00-00', '0000-00-00', '-', 'bapenda', '081213462307', '-', 24, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (297, NULL, 10, 1, '0000-00-00', '0000-00-00', '-', 'SUNI BAPL', '081212249434', '-', 24, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (298, NULL, 10, 1, '0000-00-00', '0000-00-00', '-', 'EDY BAPL', '08159974681', '-', 24, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (299, NULL, 1, 1, '0000-00-00', '0000-00-00', '9898989', 'arsip', '021', 'asdf', 16, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (300, NULL, 10, 1, '0000-00-00', '0000-00-00', '-', 'Bidang Data', '-', '-', 13, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (301, NULL, 1, 1, '2017-07-01', '2017-07-11', '098765', 'satpolpp', '0811101371', 'BSD', 22, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (302, NULL, 1, 1, '2017-07-01', '2017-07-11', '5102', 'AGUSTIANI KARTIKA SE MM', '02180503020', 'BSD', 23, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (303, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'PEP', '-', 'serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (304, NULL, 10, 1, '0000-00-00', '0000-00-00', '-', 'Bendahara', '-', 'serpong', 13, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (305, NULL, 5, 1, '0000-00-00', '0000-00-00', '988888888877777', 'timteknisbap', '081', '-', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (306, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Perumahan Dinas Perumahan, Kawasan Permukiman dan Pertanahan ', '081219091796', 'Serpong', 23, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (307, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Sanitasi Lingkungan Air Minum dan Penataan Bangunan', '-', 'Serpong', 20, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (308, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Pengendalian Pencemaran dan Kerusakan Lingkungan', '081387773840', 'Serpong', 19, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (309, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pengendalian dan Pemanfaatan Ruang', '081219503932', 'Serpong', 20, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (310, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Perumahan Tapak', '081368681174', 'Serpong', 23, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (311, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Penataan Bangunan', '08113929770', 'Serpong', 20, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (312, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pembinaan dan Pengawasan Lingkungan', '085885434660', 'Serpong', 19, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (313, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Pembinaan Pendidikan Anak Usia Dini dan Pendidikan Non Formal', '087808107277', 'Serpong', 16, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (314, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Penyelenggaraan Pelatihan pada Dinas Ketenagakerjaan', '081298826540', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (316, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Penempatan Kerja dan Perluasan Kesempatan Kerja pada Dinas Ketenagakerjaan.', '08129285825', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (317, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Kelembagaan Pelatihan pada Dinas Ketenagakerjaan.', '085710422825', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (318, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Perlindungan Tenaga Kerja pada Dinas Ketenagakerjaan.', '081317014437', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (319, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pengembangan Sumber Daya Manusia Teknologi Informasi Komunikasi dan Kerjasama Smart Cit', '08568871352', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (320, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Pengelolaan Teknologi Informasi Komunikasi dan Persandian', '08122736990', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (321, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Tata Teknis Perparkiran dan Terminal pada Dinas Perhubungan.', '081398620239', 'Serpong', 15, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (322, NULL, 9, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pengembangan dan Pelayanan Angkutan pada Dinas Perhubungan.', '085269355551', 'Serpong', 15, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (324, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Kelembagaan dan Sarana dan Prasarana', '-', 'Serpong', 16, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (325, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Pembinaan Sekolah Dasar (SD) ', '-', 'Serpong', 16, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (326, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Pembinaan Sekolah Menengah Pertama (SMP)', '-', 'Serpong', 16, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (327, NULL, 7, 1, '0000-00-00', '0000-00-00', '- ', 'Kepala Bidang Pelayanan Kesehatan pada Dinas Kesehatan Provinsi Banten', '-', 'Serang', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (328, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pelayanan Kesehatan Rujukan pada Dinas Kesehatan', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (329, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pelayanan Kesehatan Rujukan pada Dinas Kesehatan', '081319671907', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (330, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Sumber Daya Kesehatan pada Dinas Kesehatan', '0816639312', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (331, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Farmalkes, Obat Publik, dan Pengawasan Pangan pada Dinas Kesehatan', '081380245515', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (332, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Promosi Kesehatan, Kesehatan Lingkungan dan Kesehatan Kerja dan Olah Raga pada Dinas Ke', '085959607727', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (333, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Pelayanan Kesehatan pada Dinas Kesehatan', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (334, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Verifikasi Promkeslingkesjaor pada Dinas Kesehatan', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (336, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Fisik dan Prasarana pada Bappeda', '-', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (337, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Perencanaan dan Pengendalian Pembangunan Tata Ruang dan Lingkungan Hidup pada Bappeda', '-', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (339, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Sanitasi Lingkungan, Air Minum dan Penataan Bangunan ', '-', 'Serpong', 20, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (340, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Sumber Daya Air', '-', 'Serpong', 21, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (341, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Lalu Lintas', '-', 'Serpong', 21, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (342, NULL, 4, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Tata Lingkungan', '-', 'Serpong', 19, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (343, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Pencegahan dan Pemberdayaan Masyarakat', '-', 'Serpong', 17, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (344, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pengendalian dan Pemanfaatan Ruang', '-', 'Serpong', 20, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (345, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Penataan Bangunan', '08113929770', 'Serpong', 20, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (346, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pembangunan dan Pemanfaatan Infrastruktur SDA', '-', 'Serpong', 21, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (347, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Rekayasa Lalu Lintas ', '-', 'Serpong', 15, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (348, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Perencanaan dan Kajian Dampak Lingkungan', '-', 'Serpong', 19, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (349, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pengawasan dan Pengendalian ', '-', 'Serpong', 17, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (351, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Asset ', '-', 'Serpong', 24, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (352, NULL, 4, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Bina Marga', '-', 'Serpong', 21, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (353, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Pertamanan ', '-', 'Serpong', 19, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (354, NULL, 4, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang PJU dan Pemakaman', '-', 'Serpong', 23, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (355, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pemakaman ', '-', 'Serpong', 23, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (356, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pembangunan PJU', '-', 'Serpong', 23, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (357, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Perumahan', '-', 'Serpong', 23, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (358, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Kelembagaan, Pembangunan dan penilaian Koperasi pada Dinas Koperasi, Usaha Kecil dan M', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (359, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Penilaian Koperasi Pada Dinas Koperasi, Usaha Kecil dan Menengah', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (360, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Promosi, Pengembangan dan Penguatan UKM Pada Dinas Koperasi, Usaha Kecil dan Menengah', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (361, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Standarisasi dan Sertifikasi UMKM pada Dinas Koperasi, Usaha Kecil dan Menengah', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (362, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Perikanan ', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (363, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Perikanan Budidaya pada Dinas Ketahanan Pangan , Pertanian dan Perikanan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (364, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Penguatan Daya Saing Produk Perikanan pada Dinas Ketahanan Pangan, Pertanian dan Perika', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (365, NULL, 4, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Pertanian dan Peternakan pada Dinas Ketahanan Pangan, Pertanian dan Perikanan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (366, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Peternakan pada Dinas Ketahanan Pangan, Pertanian dan Perikanan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (367, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Peternakan pada Dinas Ketahanan Pangan, Pertanian dan Perikanan', '-', 'Serpong\n', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (368, NULL, 8, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Seksi Pengembangan Industri Kecil dan Menengah pada Dinas Perindustrian dan Perdagangan', '081284484701', 'Serpong\n', 14, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (369, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Dinas Perhubungan', '-', 'Serpong', 15, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (370, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Dinas Ketenagakerjaan', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (371, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Timteknis Pengesahan Rencana Tapak', '-', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (372, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua TimTeknis Izin Usaha Toko Modern ', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (373, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Tempat Praktik Dokter Hewan Bersama', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (374, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Penggunaan Pemanfaatan Tanah ', '-', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (375, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Izin Operasional Rumah Sakit', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (376, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Operasional Pendidikan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (377, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Operasional Klinik Utama', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (378, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Operasional Klinik Pratama', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (379, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Mendirikan Rumah Sakit ', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (380, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Izin Mendirikan Klinik Utama', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (381, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Mendirikan Klinik Pratama', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (382, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Mendirikan Bangunan', '-', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (383, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Pendirian Kelompok Belajar', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (384, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Izin Pendidikan Anak Usia Dini ', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (385, NULL, 2, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Pendirian Lembaga Kursus dan Pelatihan ', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (386, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Pendirian Pusat Kegiatan Belajar Masyarakat ', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (387, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Taman Bacaan Masyarakat ', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (389, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Operasional Puskesmas', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (390, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Penyelenggaraan Klinik Hemodialisa', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (391, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Operasional Radiologi', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (392, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Penyelenggaraan Laboratorium Klinik Pratama', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (393, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Izin Operasional Apotek', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (394, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Pedagang Eceran Obat', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (395, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Operasional Usaha Mikro Obat Tradisional ', '-', 'Serpong', 13, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (396, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Operasional Optikal', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (397, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Toko Alat Kesehatan', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (398, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Pest Control', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (399, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Sertifikat Produksi Pangan Industri Rumah Tangga ', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (400, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Sertifikat Laik Higiene Sanitasi ', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (401, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Perbekalan Kesehatan Rumah Tangga ', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (402, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Rekomendasi Izin  Rumah Sakit Kelas B', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (403, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Izin Penyelenggaraan Laboratorium Klinik Madya', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (404, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Izin Pedagang Besar Farmasi ', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (405, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Izin Penyalur Alat Kesehatan', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (406, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Kalibrasi Alat Kesehatan ', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (407, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Izin Produksi Kosmetik', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (408, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Izin Usaha Kecil Obat Tradisional', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (410, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Usaha Jasa Konstruksi ', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (411, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Penyelenggaraan Reklame', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (412, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Operasional Jasa Pelayanan Prosesi Pemakaman/Pengabuan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (413, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Penggalian Jenazah/Kerangka', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (414, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Penerangan Jalan Umum', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (415, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Bursa Kerja Luar Negeri ', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (417, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Tenaga Kerja', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (418, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Pembuangan Limbah Cair', '-', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (419, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis', '-', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (420, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Tempat Penyimpanan Sementara Limbah Bahan Berbahaya dan Beracun ', '-', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (421, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Penyelenggaraan Fasilitas Tempat Khusus Parkir', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (423, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Pendidikan dan Pelatihan Mengemudi', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (424, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Analisis Dampak Lalu Lintas', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (425, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Komunikasi dan Informatika', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (426, NULL, 2, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis non Perizinan Komunikasi dan Informatika', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (427, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Usaha Simpan Pinjam', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (428, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Izin Pembukaan Kantor Cabang/Cabang Pembantu/Kantor Kas Koperasi Simpan Pinjam ', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (429, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Usaha Mikro dan Kecil ', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (430, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Surat Izin Usaha Perikanan (SIUP) Bidang Pembudidayaan Ikan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (431, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Surat Izin Usaha Perikanan (SIUP) Pengolahan dan Pemasaran Hasil Perikanan ', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (432, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Usaha Depo/Toko Obat Ikan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (433, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Tanda Daftar Usaha Pariwisata ', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (434, NULL, 3, 1, '0000-00-00', '0000-00-00', '- ', 'Ketua Tim Teknis Surat Izin Praktik Dokter Hewan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (435, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Surat Izin Praktik Dokter Hewan Tenaga Asing', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (436, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Izin Klinik Hewan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (437, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Rumah Sakit Hewan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (438, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Laboratorium Kesehatan Hewan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (439, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Izin Depo/Toko Obat Hewan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (440, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Usaha Peternakan  ', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (441, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Rumah Potong Hewan', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (442, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Surat Tanda Pendaftaran Waralaba ', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (443, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Tanda Daftar Gudang ', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (444, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis  Izin Usaha Pengelolaan Pasar Tradisional ', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (445, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Usaha Pusat Perbelanjaan', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (446, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Surat Izin Tempat Usaha ', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (447, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Usaha Industri ', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (448, NULL, 3, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Perluasan Industri ', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (450, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Perizinan Pembangunan pada Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota', '-', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (451, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Perizinan Ekonomi pada Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu ', '-', 'Serpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (452, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Perizinan Ketenagakerjaan pada Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (453, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Perizinan Kesejahteraan Rakyat pada Dinas Penanaman Modal dan Pelayanan Terpadu Satu P', '-', 'Serpong', 13, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (454, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Perizinan Sosial Budaya pada Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (455, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Kesehatan Masyarakat Pada Dinas Kesehatan', '082122568882', 'Serpong', 13, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (456, NULL, 10, 1, '0000-00-00', '0000-00-00', '-', 'Tim Gambar', '-', 'Serpong', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (458, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Kepala Bidang Penerangan Jalan Umum  dan Pemakaman pada Dinas Perumahan, Kawasan Pemukiman, dan Pert', '-', 'Serpong', 23, 4, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (459, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Lembaga Penempatan Tenaga Kerja Swasta', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (460, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Perpanjangan Izin Mempekerjakan Tenaga Kerja Asing', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (461, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Lembaga Pelatihan Kerja', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (462, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Penampungan Tenaga Kerja', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (463, NULL, 6, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Trayek Angkutan Perkotaan', '-', '-', 15, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (464, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Operasi Angkutan Khusus', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (465, NULL, 7, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Penyelenggaraan Instalasi Kabel Rumah/Gedung', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (466, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Penyelenggaraan Warung Internet', '-', 'Serpong\n', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (467, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Penyelenggaraan Warung Telekomunikasi', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (468, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Izin Penyelenggaraan Instalasi Kabel Optik', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (469, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Menara Telekomunikasi Bersama', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (470, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Penyelenggaraan Penyiaran Radio/Televisi di Daerah', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (471, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Penyelenggaraan Amatir Radio/Radio Antar Penduduk ', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (472, NULL, 5, 1, '0000-00-00', '0000-00-00', '-', 'Ketua Tim Teknis Rekomendasi Pest Control', '-', 'Serpong', 13, 6, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (481, NULL, 10, 1, '0000-00-00', '0000-00-00', '-', 'HASBILLAH', '-', 'Serpong', 13, 5, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (482, NULL, 1, 1, '0000-00-00', '0000-00-00', '111', 'Petugas Cetak SK', '022', '-', 13, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (483, NULL, 1, 1, '2018-03-16', '2018-03-16', '091', 'kasidinasterkait2', '0982', 'ad', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (484, NULL, 1, 1, '2018-04-02', '2025-04-18', '1234', 'kasidinasterkait1', '087776493587', 'diserpong', 13, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (485, NULL, 2, 1, '0000-00-00', '0000-00-00', 'asdasd', 'asdasda', '087776493587', 'asd', 13, 2, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (486, NULL, 2, 1, '0000-00-00', '0000-00-00', '123124124124', 'Kasi 1', '08', 'alamat', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (487, NULL, 8, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakhotel2', 'Kasi 2', '08', 'paaa', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (488, NULL, 10, 1, '0000-00-00', '0000-00-00', 'Pemeriksa Pajak Hotel 3', 'kasi 3', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (489, NULL, 7, 1, '0000-00-00', '0000-00-00', '1010123012022', 'Korwil Pendataan 1', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (490, NULL, 10, 1, '0000-00-00', '0000-00-00', 'timteknispajakhotel', 'Tim Teknis Bapenda ', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (491, NULL, 7, 1, '2019-05-20', '0000-00-00', 'pajakhotel4', 'Kabid', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (492, NULL, 2, 1, '0000-00-00', '0000-00-00', '1231', 'Cetak SK Pajak', '08', 'adad', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (493, NULL, 8, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakhiburan', 'Pemeriksa Pajak Hiburan 1', '08', '1', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (494, NULL, 8, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakhiburan2', 'Pemeriksa Pajak Hiburan 2', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (495, NULL, 6, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakhiburan3', 'Pemeriksa Pajak Hiburan 3', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (496, NULL, 7, 1, '0000-00-00', '0000-00-00', 'korwilpajakhiburan', 'Korwil Pajak Hiburan', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (497, NULL, 8, 1, '0000-00-00', '0000-00-00', 'timteknispajakhiburan', 'Tim Teknis Pajak Hiburan', '08', 'ada', 20, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (498, NULL, 2, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakhiburan4', 'Pemeriksa Pajak Hiburan 4', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (499, NULL, 6, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakparkir1', 'Pemeriksa pajak parkir 1', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (500, NULL, 1, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakparkir2', 'pemeriksa pajak parkir 2', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (501, NULL, 9, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakparikir3', 'Pemeriksa Pajak Parkir 3', '07', 'ada\n', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (502, NULL, 9, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakparkir4', 'Pemeriksa Pajak Parkir 4', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (503, NULL, 7, 1, '0000-00-00', '0000-00-00', 'korwilpajakparki', 'Korwil Pajak Parkir', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (504, NULL, 6, 1, '0000-00-00', '0000-00-00', 'timteknispajakparkir', 'Timteknis Pajak Parkir', '08', 'ada\n', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (505, NULL, 8, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakrestoran', 'pemeriksapajakrestoran1', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (506, NULL, 9, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakrestoran2', 'Pemeriksa Pajak Restoran 2', '08', 'ada\n', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (507, NULL, 6, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakrestoran3', 'Permeriksa Pajak Restoran 3', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (508, NULL, 5, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakrestoran4', 'Pemeriksa Pajak Restoran 4', '08', 'ada\n', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (509, NULL, 3, 1, '0000-00-00', '0000-00-00', 'korwilpajakrestoran', 'Korwil Pajak Restoran', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (510, NULL, 4, 1, '0000-00-00', '0000-00-00', 'timteknispajakrestoran', 'Timteknis Pajak Restoran', '08', 'ada\n', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (511, NULL, 10, 1, '0000-00-00', '0000-00-00', 'pemeriksapajakrestoran1', 'Pemeriksa Pajak Restoran 1', '08', 'ada\n', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (512, NULL, 1, 1, '0000-00-00', '0000-00-00', 'arsippajak', 'arsip bapenda', '08', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (513, NULL, 10, 1, '0000-00-00', '0000-00-00', 'Petugas Sidak Pamulang', 'Petugas Sidak Pamulang', '123124124124', '1212412', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (514, NULL, 1, 1, '2019-08-06', '0000-00-00', 'petugaspenjadwalansidak', 'Petugas Penjadwalan Sidak Pajak', '087776493587', 'ada', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (515, NULL, 10, 1, '0000-00-00', '0000-00-00', '000000111', 'Bapenda penetapan', '089', 'alamat', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (516, NULL, 5, 1, '0000-00-00', '0000-00-00', '197808262001121002', 'Puguh Istianto', '087871545562', '-', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (517, NULL, 8, 1, '0000-00-00', '0000-00-00', '198002142010011005', 'Adityawarman AN', '081315685234', '-', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (518, NULL, 7, 1, '0000-00-00', '0000-00-00', '198208072001121002', 'Faisal Rachman', '081213462307', '-', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (519, NULL, 6, 1, '0000-00-00', '0000-00-00', '198501112003122001', 'rahayusayekti', '081382575381', '-', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (520, NULL, 1, 1, '0000-00-00', '0000-00-00', 'sidakciputat', 'Sidak Ciputat', '08', '-', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (521, NULL, 7, 1, '0000-00-00', '0000-00-00', '197200321944032001', 'Sidak Serpong', '081229588164', 'Jl. Anggrek No. 21', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (522, NULL, 10, 1, '2019-04-01', '0000-00-00', '199010152019032002', 'Vina Alfiyani', '089654822243', 'Jl. Kenari Raya No. 16', 25, 1, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (523, NULL, 10, 1, '0000-00-00', '0000-00-00', 'pemeriksa', 'pemeriksasidak', '08', 'asda', 25, 7, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (529, NULL, 0, 2, '0000-00-00', '0000-00-00', 'korwilpendataan2', 'Korwil Pendataan 2', '08', 'ada', 25, 1, '2023-09-30', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (530, NULL, 0, 2, '2020-03-01', '2020-03-25', '10123812010', 'Korwil Pendataan 3', '08', 'ada', 25, 1, '2024-09-30', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (531, NULL, 10, 1, '0000-00-00', '0000-00-00', '0000000', 'bapenda penerbitan', '000000000', 'alamat', 25, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (532, NULL, 8, 1, '2020-01-22', '2020-01-22', '234234', '2342', '087777576875', 'ada', 15, 3, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (533, NULL, 10, 1, '0000-00-00', '0000-00-00', '-', 'Korwil Penagihan1', '-', '-', 25, 7, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (534, NULL, 0, 2, '2020-03-10', '2020-03-31', '11010182801029', 'Korwil Penagihan2', '083918321', 'asd', 25, 7, '2020-03-27', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (535, NULL, 10, 1, '2020-03-18', '2020-03-18', '1913010390', 'Korwil Penagihan3', '07813718378', 'padang sidempuan', 25, 7, '2020-03-18', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (536, NULL, 10, 1, '2020-03-24', '2020-03-25', '11010182801029', 'Penagihan3', '0813712831273', 'bapenda', 25, 7, '0000-00-00', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (537, NULL, 0, 2, '2020-04-18', '2020-04-17', '-', 'korwilpenagihan3', '9789', 'sf', 25, 7, '2020-04-22', NULL, NULL);
INSERT INTO `tmpegawai` VALUES (538, NULL, NULL, 1, '2020-10-07', NULL, '1122', 'BLIAT MAN', '0000', '-', NULL, NULL, NULL, '2020-10-07 03:21:38', '2020-10-07 03:21:38');
INSERT INTO `tmpegawai` VALUES (539, NULL, NULL, 1, '2020-10-07', NULL, '12321213512', 'Selly Septiyanti, AMD', '4542135115', 'vhashasdgsadgjasdgjads', NULL, NULL, NULL, '2020-10-07 03:22:36', '2020-10-07 03:22:36');
INSERT INTO `tmpegawai` VALUES (540, NULL, NULL, 1, '2020-10-07', NULL, '12358155212', 'Dora Sutanti', '081235123542', 'jdsbhkasdkghsadhkaskashkds', NULL, NULL, NULL, '2020-10-07 05:09:04', '2020-10-07 05:09:04');
INSERT INTO `tmpegawai` VALUES (541, NULL, NULL, 1, '2020-10-07', NULL, '33265512645', 'Opik Suhandi', '0213545321', 'jsdjksadkhasdbhasdbmasdsh', NULL, NULL, NULL, '2020-10-07 05:11:40', '2020-10-07 05:11:40');
INSERT INTO `tmpegawai` VALUES (542, NULL, NULL, 1, '2020-10-07', NULL, '22513521558', 'Polodina P Tambun, S.Sos', '21233523548', 'hasbmhbmhsadmbasdmb', NULL, NULL, NULL, '2020-10-07 05:13:49', '2020-10-07 05:13:49');
INSERT INTO `tmpegawai` VALUES (543, NULL, NULL, 1, '2020-10-07', NULL, '2135121354', 'Indah Lestari S,ST', '213512154', 'fghfgcvbcvxd', NULL, NULL, NULL, '2020-10-07 05:15:54', '2020-10-07 05:15:54');
INSERT INTO `tmpegawai` VALUES (544, NULL, NULL, 1, '2020-10-07', NULL, '1213212135', 'Sri Laksmi Handayani', '23511354562', 'sdasdfad', NULL, NULL, NULL, '2020-10-07 05:44:02', '2020-10-07 05:44:02');
INSERT INTO `tmpegawai` VALUES (545, NULL, NULL, 1, '2020-10-07', NULL, '22323232', 'Tati Mulyati, S.IP', '4512313548421', 'jhsdfhfsdjhfsdbjfsdhj', NULL, NULL, NULL, '2020-10-07 05:51:04', '2020-10-07 05:51:04');
INSERT INTO `tmpegawai` VALUES (546, NULL, NULL, 1, '2020-10-07', NULL, '3232135252', 'Wina Nurhayati, S.IP', '0213215358', 'adaasasdfdsdfgfhfhk', NULL, NULL, NULL, '2020-10-07 06:05:31', '2020-10-07 06:05:31');
INSERT INTO `tmpegawai` VALUES (547, NULL, NULL, 1, '2020-10-07', NULL, '632213513', 'Titin Suhartini, SE', '5555442225', 'gjasncasdvgsadndasng', NULL, NULL, NULL, '2020-10-07 06:15:47', '2020-10-07 06:15:47');
INSERT INTO `tmpegawai` VALUES (548, NULL, NULL, 1, '2020-10-07', NULL, '5115151', 'Rosye Rosdiana, A.Md', '021213518', 'hasdjasdgjasdjasd', NULL, NULL, NULL, '2020-10-07 08:09:40', '2020-10-07 08:09:40');
INSERT INTO `tmpegawai` VALUES (549, NULL, NULL, 1, '2020-10-07', NULL, '213518186', 'Dinar Riswanti, SE', '23123102052', 'asasddsdfdgfg', NULL, NULL, NULL, '2020-10-07 08:11:58', '2020-10-07 08:11:58');
INSERT INTO `tmpegawai` VALUES (550, NULL, NULL, 1, '2020-10-07', NULL, '32213553', 'Hanifah', '5445645456', 'jsfjgsfdjgfsdjsfdg', NULL, NULL, NULL, '2020-10-07 08:18:15', '2020-10-07 08:18:15');
INSERT INTO `tmpegawai` VALUES (551, NULL, NULL, 1, '2020-10-07', NULL, '2111535', 'dr. Umi Kulsum', '211585', ',jsbj,sadbmasdmbda', NULL, NULL, NULL, '2020-10-07 08:29:43', '2020-10-07 08:29:43');

-- ----------------------------
-- Table structure for tmpendapatan
-- ----------------------------
DROP TABLE IF EXISTS `tmpendapatan`;
CREATE TABLE `tmpendapatan`  (
  `id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lapor` date NULL DEFAULT NULL,
  `tahun` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tmsikd_satker_id` int(20) NOT NULL,
  `tmrekening_akun_kelompok_jenis_objek_rincian_sub_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tmrekening_akun_kelompok_jenis_objek_rincian_id` int(11) NULL DEFAULT NULL,
  `kd_rekening` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `volume` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satuan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga` double NULL DEFAULT NULL,
  `jumlah` double NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_deleted` int(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sikd_rek_rincian_obj_id`(`tmrekening_akun_kelompok_jenis_objek_rincian_sub_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tmpendapatan_target
-- ----------------------------
DROP TABLE IF EXISTS `tmpendapatan_target`;
CREATE TABLE `tmpendapatan_target`  (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `jumlah` double NULL DEFAULT NULL,
  `jumlah_perubahan` double NULL DEFAULT NULL,
  `tmrekening_akun_kelompok_jenis_objek_rincian_id` int(15) NOT NULL,
  `dasar_hukum` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_perubahan` date NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmpendapatan_target
-- ----------------------------
INSERT INTO `tmpendapatan_target` VALUES (13, 122233484, 122231231, 4120201, '1', 'nn', NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06', NULL, NULL, 2020);
INSERT INTO `tmpendapatan_target` VALUES (14, 8200000, 0, 4120101, '-', 'Perubahan', NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47', NULL, NULL, 2020);

-- ----------------------------
-- Table structure for tmrapbds
-- ----------------------------
DROP TABLE IF EXISTS `tmrapbds`;
CREATE TABLE `tmrapbds`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmsikd_setup_tahun_anggaran_id` int(11) NULL DEFAULT NULL,
  `jenis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sumber_data` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_pengajuan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_pengajuan` date NULL DEFAULT NULL,
  `no_perda` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_perda` date NULL DEFAULT NULL,
  `perihal_perda` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_perbup` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_perbup` date NULL DEFAULT NULL,
  `perihal_perbup` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_pengesahan_rka` date NULL DEFAULT NULL,
  `tgl_ditetapkan` date NULL DEFAULT NULL,
  `tgl_diundangkan` date NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT 0,
  `keterangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmrapbds
-- ----------------------------
INSERT INTO `tmrapbds` VALUES (1, 1, 'RAPBD MURNI', 'PPAS-M', NULL, NULL, '59 TAHUN 2019', '2019-12-31', 'PENJABARAN ANGGARAN PENDAPATAN DAN BELANJA DAERAH TAHUN ANGGARAN 2020', '20 TAHUN 2019', '2019-12-31', 'ANGGARAN PENDAPATAN DAN BELANJA DAERAH TAHUN ANGGARAN 2020', NULL, '2019-12-31', '2019-12-31', 2, NULL, 'admin_bppt', '2018-12-20 00:00:00', 'admin', '2020-06-08 03:16:23');

-- ----------------------------
-- Table structure for tmrekening_akun_kelompok_jenis
-- ----------------------------
DROP TABLE IF EXISTS `tmrekening_akun_kelompok_jenis`;
CREATE TABLE `tmrekening_akun_kelompok_jenis`  (
  `id` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'menu rekening kode jenis',
  `tmrekening_akun_kelompok_id` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'diambil dari tmrekening_akun_kelompok',
  `kd_rek_jenis` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_rek_jenis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_rekening` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `klasifikasi_rek` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_akrual` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_aset` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_utang` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_barang` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dasar_hukum` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `kd_rek_jenis`(`kd_rek_jenis`) USING BTREE,
  INDEX `tmrekening_akun_kelompok_id`(`tmrekening_akun_kelompok_id`) USING BTREE,
  CONSTRAINT `tmrekening_akun_kelompok_jenis_ibfk_1` FOREIGN KEY (`tmrekening_akun_kelompok_id`) REFERENCES `tmrekening_akun_kelompoks` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmrekening_akun_kelompok_jenis
-- ----------------------------
INSERT INTO `tmrekening_akun_kelompok_jenis` VALUES ('411', '41', '411', 'Hasil Pajak Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 08:58:12', NULL, '2020-09-22 08:58:12');
INSERT INTO `tmrekening_akun_kelompok_jenis` VALUES ('412', '41', '412', 'Hasil Retribusi Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 03:53:26', NULL, '2020-09-25 03:53:26');
INSERT INTO `tmrekening_akun_kelompok_jenis` VALUES ('414', '41', '414', 'Lain-lain Pendapatan Asli Daerah yang Sah', NULL, 'RSOA', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 07:52:15', NULL, '2020-09-22 07:52:15');
INSERT INTO `tmrekening_akun_kelompok_jenis` VALUES ('421', '42', '421', 'Dana Bagi Hasil Pajak/Bagi Hasil Bukan Pajak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:09:23', NULL, '2020-09-25 04:09:23');
INSERT INTO `tmrekening_akun_kelompok_jenis` VALUES ('422', '42', '422', 'Dana Alokasi Umum (DAU)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:09:23', NULL, '2020-09-25 04:09:23');
INSERT INTO `tmrekening_akun_kelompok_jenis` VALUES ('423', '42', '423', 'Dana Alokasi Khusus (DAK)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:09:23', NULL, '2020-09-25 04:09:23');
INSERT INTO `tmrekening_akun_kelompok_jenis` VALUES ('431', '43', '431', 'Pendapatan Hibah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:16:19', NULL, '2020-09-25 04:16:19');
INSERT INTO `tmrekening_akun_kelompok_jenis` VALUES ('433', '43', '433', 'Dana Bagi Hasil Pajak dari Provinsi dan Pemerintah Daerah Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:16:19', NULL, '2020-09-25 04:16:19');
INSERT INTO `tmrekening_akun_kelompok_jenis` VALUES ('434', '43', '434', 'Dana Penyesuaian dan Otonomi Khusus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:16:19', NULL, '2020-09-25 04:16:19');
INSERT INTO `tmrekening_akun_kelompok_jenis` VALUES ('435', '43', '435', 'Bantuan Keuangan Dari Provinsi atau Pemerintah Daerah Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:16:19', NULL, '2020-09-25 04:16:19');

-- ----------------------------
-- Table structure for tmrekening_akun_kelompok_jenis_objek_rincian_subs
-- ----------------------------
DROP TABLE IF EXISTS `tmrekening_akun_kelompok_jenis_objek_rincian_subs`;
CREATE TABLE `tmrekening_akun_kelompok_jenis_objek_rincian_subs`  (
  `id` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'menu rek sub rincian objek',
  `tmrekening_akun_kelompok_jenis_objek_rincian_id` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'tmrekening_akun_kelompok_jenis_objek_rincian',
  `kd_rek_rincian_objek_sub` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_rek_rincian_objek_sub` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_rekening` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tmsikd_satkers_id` int(11) NULL DEFAULT NULL,
  `klasifikasi_rek` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dasar_hukum` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tmsikd_rek_rincian_obj_p64_id` int(11) NULL DEFAULT NULL,
  `tmsikd_rekening_lra_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sikd_rek_lo_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tmsikd_rekening_lak_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tmsikd_rekening_neraca_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sikd_rek_aset_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sikd_rek_utang_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sikd_rek_akrual_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bmd_kd_barang_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_aktif` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nm_rek` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `skpd` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `skpkd` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jns_rekening` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_induk` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `report` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pemda` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmrekening_akun_kelompok_jenis_objek_rincian_subs
-- ----------------------------
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincian_subs` VALUES ('41201102', '412011', '41201102', 'Puskesmas 07', NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-24 05:20:00', NULL, '2020-09-24 05:20:00');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincian_subs` VALUES ('41201102', '412011', '41201102', 'Puskesmas 08', NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-24 05:20:00', NULL, '2020-09-24 05:20:00');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincian_subs` VALUES ('41201102', '412011', '41201102', 'Puskesmas 09', NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-24 05:20:00', NULL, '2020-09-24 05:20:00');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincian_subs` VALUES ('412020101', '4120201', '412020101', 'Retribusi Pemakaian Kekayaan Daerah  Penyewaan Tanah dan Bangunan (Indag)', NULL, 200401, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-10-05 07:31:33', NULL, '2020-10-07 03:20:11');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincian_subs` VALUES ('412020102', '4120201', '412020102', 'Retribusi Pemakaian Kekayaan Daerah  Penyewaan Tanah dan Bangunan (Perkim)', NULL, 110401, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-10-05 07:31:33', NULL, '2020-10-07 03:20:34');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincian_subs` VALUES ('412020103', '4120201', '412020103', 'Retribusi Pemakaian Kekayaan Daerah  Penyewaan Tanah dan Bangunan (Dishub)', NULL, 120901, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-10-05 07:31:33', NULL, '2020-10-07 03:20:48');

-- ----------------------------
-- Table structure for tmrekening_akun_kelompok_jenis_objek_rincians
-- ----------------------------
DROP TABLE IF EXISTS `tmrekening_akun_kelompok_jenis_objek_rincians`;
CREATE TABLE `tmrekening_akun_kelompok_jenis_objek_rincians`  (
  `kd_rek_rincian_obj` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'menu rekening/kode Rincian Objek',
  `tmrekening_akun_kelompok_jenis_objek_id` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'diambil dari tmrekening_akun)kelompok_jenis_objek',
  `nm_rek_rincian_obj` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tmsikd_satkers_id` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dasar_hukum` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id`) USING BTREE,
  INDEX `sikd_rek_obj_id`(`tmrekening_akun_kelompok_jenis_objek_id`) USING BTREE,
  CONSTRAINT `tmrekening_akun_kelompok_jenis_objek_rincians_ibfk_1` FOREIGN KEY (`tmrekening_akun_kelompok_jenis_objek_id`) REFERENCES `tmrekening_akun_kelompok_jenis_objeks` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 85020402 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmrekening_akun_kelompok_jenis_objek_rincians
-- ----------------------------
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('412011', 412011, '41201', 'Retribusi Parkir Jalan', '120901', '', 'admin', '2020-10-23 13:36:02', NULL, '2020-10-23 06:25:17');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('412012', 412012, '41201', 'Retribusi Parkir Roda Emapat', '120901', '', 'admin', '2020-10-23 13:36:02', NULL, '2020-10-23 06:25:17');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('412013', 412013, '41201', 'Retribusi Parkri Roda Enam', '110501', '', 'admin', '2020-09-22 08:46:45', NULL, '2020-09-22 08:46:45');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110103', 4110103, '41101', 'Hotel Bintang Empat', '300201', '', 'admin', '2020-09-22 09:31:14', NULL, '2020-09-22 09:31:14');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110104', 4110104, '41101', 'Hotel Bintang Tiga', '110301', '', 'admin', '2020-09-24 16:30:23', NULL, '2020-09-24 09:20:33');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110105', 4110105, '41101', 'Hotel Bintang Dua', '300201', '', 'admin', '2020-09-22 09:31:14', NULL, '2020-09-22 09:31:14');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110106', 4110106, '41101', 'Hotel Bintang Satu', '300201', '', 'admin', '2020-09-22 09:31:14', NULL, '2020-09-22 09:31:14');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110107', 4110107, '41101', 'Hotel Melati Tiga', '300201', '', 'admin', '2020-09-22 09:31:14', NULL, '2020-09-22 09:31:14');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110108', 4110108, '41101', 'Hotel Melati Dua', '300201', '', 'admin', '2020-09-22 09:31:14', NULL, '2020-09-22 09:31:14');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110110', 4110110, '41101', 'Motel', '300201', '', 'admin', '2020-09-22 09:31:14', NULL, '2020-09-22 09:31:14');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110111', 4110111, '41101', 'Cottage', '300201', '', 'admin', '2020-09-22 09:31:14', NULL, '2020-09-22 09:31:14');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110112', 4110112, '41101', 'Rumah Kos dengan jumlah kamar', '300201', '', 'admin', '2020-09-22 09:31:14', NULL, '2020-09-22 09:31:14');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110116', 4110116, '41101', 'Wisma Pariwisata', '300201', '', 'admin', '2020-09-22 09:31:14', NULL, '2020-09-22 09:31:14');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110201', 4110201, '41102', 'Restoran', '110101', '', 'admin', '2020-09-22 09:32:47', NULL, '2020-09-22 09:32:47');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110301', 4110301, '41103', 'Tontonan Film/Bioskop', '300201', '', 'admin', '2020-09-22 09:37:42', NULL, '2020-09-22 09:37:42');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110302', 4110302, '41103', 'Pagelaran', '300201', '', 'admin', '2020-09-22 09:37:42', NULL, '2020-09-22 09:37:42');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110307', 4110307, '41103', 'Karaoke', '300201', '', 'admin', '2020-09-22 09:37:42', NULL, '2020-09-22 09:37:42');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110310', 4110310, '41103', 'Permainan Bilyard', '300201', '', 'admin', '2020-09-22 09:37:42', NULL, '2020-09-22 09:37:42');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110312', 4110312, '41103', 'Permainan Bowling', '300201', '', 'admin', '2020-09-22 09:37:42', NULL, '2020-09-22 09:37:42');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110315', 4110315, '41103', 'Permainan Ketangkasan', '300201', '', 'admin', '2020-09-22 09:37:42', NULL, '2020-09-22 09:37:42');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110316', 4110316, '41103', 'Panti Pijat/Refleksi', '300201', '', 'admin', '2020-09-22 09:37:42', NULL, '2020-09-22 09:37:42');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110317', 4110317, '41103', 'Mandi Uap/Spa', '300201', '', 'admin', '2020-09-22 09:37:42', NULL, '2020-09-22 09:37:42');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110318', 4110318, '41103', 'Pusat Kebugaran', '300201', '', 'admin', '2020-09-22 09:37:42', NULL, '2020-09-22 09:37:42');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110401', 4110401, '41104', 'Reklame Papan/ Billboard / Videotron/Megatron', '300201', '', 'admin', '2020-09-22 09:41:58', NULL, '2020-09-22 09:41:58');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110402', 4110402, '41104', 'Reklame Kain', '300201', '', 'admin', '2020-09-22 09:41:58', NULL, '2020-09-22 09:41:58');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110405', 4110405, '41104', 'Reklame Berjalan', '300201', '', 'admin', '2020-09-22 09:41:58', NULL, '2020-09-22 09:41:58');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110406', 4110406, '41104', 'Reklame Udara', '300201', '', 'admin', '2020-09-22 09:41:58', NULL, '2020-09-22 09:41:58');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110409', 4110409, '41104', 'Reklame Film/Slide', '300201', '', 'admin', '2020-09-22 09:41:58', NULL, '2020-09-22 09:41:58');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110502', 4110502, '41105', 'Pajak atas Penerangan Jalan', '110101', '', 'admin', '2020-09-22 09:43:02', NULL, '2020-09-22 09:43:02');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110601', 4110601, '41106', 'Pajak Parkir', '110101', '', 'admin', '2020-09-22 09:43:47', NULL, '2020-09-22 09:43:47');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4110701', 4110701, '41107', 'Pajak Air Tanah', '110101', '', 'admin', '2020-09-22 09:44:44', NULL, '2020-09-22 09:44:44');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4111001', 4111001, '41110', 'Pajak Bumi dan Bangunan', '110101', '', 'admin', '2020-09-22 09:45:38', NULL, '2020-09-22 09:45:38');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4111101', 4111101, '41111', 'BPHTB atas Pemindahan Hak', '110101', '', 'admin', '2020-09-22 09:47:46', NULL, '2020-09-22 09:47:46');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120101', 4120101, '41201', 'Retribusi Pelayanan Kesehatan - Puskesmas', '110201', '', 'admin', '2020-09-24 16:39:20', NULL, '2020-09-24 09:29:30');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120106', 4120106, '41201', 'Retribusi Pelayanan Kesehatan - Tempat Pelayanan Kesehatan Lainnya Yang Sejenis Yang Dikelola oleh Pemerintah Daerah', '', '', 'admin', '2020-09-24 16:38:41', NULL, '2020-09-24 09:28:51');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120108', 4120108, '41201', 'Retribusi Pelayanan Persampahan/ Kebersihan - Pengangkutan Sampah dari Sumbernya dan/atau Lokasi Pembuangan Sementara ke Lokasi Pembuangan/Pembuangan Akhir Sampah', '', '', 'admin', '2020-09-24 16:38:41', NULL, '2020-09-24 09:28:51');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120118', 4120118, '41201', 'Retribusi Pelayanan Pemakaman dan Pengabuan Mayat  - Sewa Tempat Pemakaman atau Pembakaran/Pengabuan Mayat', '', '', 'admin', '2020-09-24 16:38:54', NULL, '2020-09-24 09:29:04');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120119', 4120119, '41201', 'Retribusi  Pelayanan Parkir di Tepi Jalan Umum', '120901', '', 'admin', '2020-10-23 13:36:02', NULL, '2020-10-23 06:25:17');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120123', 4120123, '41201', 'Retribusi Pengujian Kendaraan Bermotor  Mobil Penumpang - Sedan', '120901', '', 'admin', '2020-10-23 13:36:02', NULL, '2020-10-23 06:25:17');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120125', 4120125, '41201', 'Retribusi Pengujian Kendaraan Bermotor  Mobil Penumpang - Minibus', '120901', '', 'admin', '2020-10-23 13:36:02', NULL, '2020-10-23 06:25:17');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120126', 4120126, '41201', 'Retribusi Pengujian Kendaraan Bermotor Mobil Bus - Microbus', '120901', '', 'admin', '2020-10-23 13:36:02', NULL, '2020-10-23 06:25:17');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120127', 4120127, '41201', 'Retribusi Pengujian Kendaraan Bermotor  Mobil Bus - Bus', '120901', '', 'admin', '2020-10-23 13:11:54', NULL, '2020-10-23 06:01:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120128', 4120128, '41201', 'Retribusi Pengujian Kendaraan Bermotor Mobil Barang/ Beban - Pick Up', '120901', '', 'admin', '2020-10-23 13:11:54', NULL, '2020-10-23 06:01:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120129', 4120129, '41201', 'Retribusi Pengujian Kendaraan Bermotor Mobil Barang/ Beban - Light Truck', '120901', '', 'admin', '2020-10-23 13:11:54', NULL, '2020-10-23 06:01:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120130', 4120130, '41201', 'Retribusi Pengujian Kendaraan Bermotor Mobil Barang/ Beban - Truck', '120901', '', 'admin', '2020-10-23 13:11:54', NULL, '2020-10-23 06:01:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120134', 4120134, '41201', 'Retribusi  Pemeriksaan Alat  Alat Pemadam Kebakaran - Pelayanan Pemeriksaan dan/atau Pengujian Alat Pemadam Kebakaran', '120901', '', 'admin', '2020-10-23 13:11:54', NULL, '2020-10-23 06:01:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120146', 4120146, '41201', 'Retribusi Pelayanan Tera/Tera Ulang Pada Pengujian Alat-Alat Ukur, Takar, Timbang, dan Perlengkapannya', '120901', '', 'admin', '2020-10-23 13:11:54', NULL, '2020-10-23 06:01:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120201', 4120201, '41202', 'Retribusi Pemakaian Kekayaan Daerah  Penyewaan Tanah dan Bangunan', '200401,110401,120901', '', 'admin', '2020-10-23 13:26:55', NULL, '2020-09-24 07:43:36');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120223', 4120223, '41202', 'Retribusi Tempat Rekreasi dan Olah Raga Pada Pelayanan Tempat Olahraga', '', '', 'admin', '2020-09-24 18:02:10', NULL, '2020-09-24 10:52:20');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120301', 4120301, '41203', 'Retribusi  Izin Mendirikan Bangunan', '', '', 'admin', '2020-09-24 18:02:18', NULL, '2020-09-24 10:52:28');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120305', 4120305, '41203', 'Retribusi Izin Trayek Pemberian Izin Trayek kepada Orang Pribadi', '120101', '', 'admin', '2020-09-22 09:54:59', NULL, '2020-09-22 09:54:59');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4120309', 4120309, '41203', 'Retribusi Perpanjangan Izin Mempekerjakan Tenaga Kerja Asing (IMTA)  kepada Pemberi Kerja Tenaga Kerja Asing', '120101', '', 'admin', '2020-09-22 09:54:59', NULL, '2020-09-22 09:54:59');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4140801', 4140801, '41408', 'Pendapatan Denda Pajak Hotel', '300201', '', 'admin', '2020-09-22 09:58:24', NULL, '2020-09-22 09:58:24');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4140802', 4140802, '41408', 'Pendapatan Denda Pajak Restoran', '300201', '', 'admin', '2020-09-22 09:58:24', NULL, '2020-09-22 09:58:24');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4140803', 4140803, '41408', 'Pendapatan Denda Pajak Hiburan', '300201', '', 'admin', '2020-09-22 09:58:24', NULL, '2020-09-22 09:58:24');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4140804', 4140804, '41408', 'Pendapatan Denda Pajak Reklame', '300201', '', 'admin', '2020-09-22 09:58:24', NULL, '2020-09-22 09:58:24');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4140806', 4140806, '41408', 'Pendapatan Denda Pajak Parkir', '300201', '', 'admin', '2020-09-22 09:58:24', NULL, '2020-09-22 09:58:24');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4140807', 4140807, '41408', 'Pendapatan Denda Pajak Air Tanah', '300201', '', 'admin', '2020-09-22 09:58:24', NULL, '2020-09-22 09:58:24');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4140809', 4140809, '41408', 'Pendapatan Denda Pajak Bumi dan Bangunan Perdesaan dan Perkotaan', '300201', '', 'admin', '2020-09-22 09:58:24', NULL, '2020-09-22 09:58:24');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4140810', 4140810, '41408', 'Pendapatan Denda Bea Perolehan Hak Atas Tanah dan Bangunan', '300201', '', 'admin', '2020-09-22 09:58:24', NULL, '2020-09-22 09:58:24');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4141701', 4141701, '41417', 'Pendapatan BLUD-Jasa Layanan Yang Bersumber Dari Masyarakat', '110202', '', 'admin', '2020-09-22 10:01:50', NULL, '2020-09-22 10:01:50');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4141704', 4141704, '41417', 'Pendapatan BLUD-Hasil Kerjasama', '110202', '', 'admin', '2020-09-22 10:01:50', NULL, '2020-09-22 10:01:50');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('4141705', 4141705, '41417', 'Pendapatan BLUD-Lainnya', '110202', '', 'admin', '2020-09-22 10:01:50', NULL, '2020-09-22 10:01:50');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9110101', 9110101, '91101', 'Penerimaan PFK - IWP', '0', '', 'admin', '2020-07-16 07:01:04', NULL, '2020-07-16 07:01:04');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9110102', 9110102, '91101', 'Penerimaan PFK - Taspen', '0', '', 'admin', '2020-07-16 07:01:04', NULL, '2020-07-16 07:01:04');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9110103', 9110103, '91101', 'Penerimaan PFK - Askes', '0', '', 'admin', '2020-07-16 07:01:04', NULL, '2020-07-16 07:01:04');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9110104', 9110104, '91101', 'Penerimaan PFK - PPh Pusat', '0', '', 'admin', '2020-07-16 07:01:04', NULL, '2020-07-16 07:01:04');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9110105', 9110105, '91101', 'Penerimaan PFK - PPN Pusat', '0', '', 'admin', '2020-07-16 07:01:04', NULL, '2020-07-16 07:01:04');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9110106', 9110106, '91101', 'Penerimaan PFK - Taperum', '0', '', 'admin', '2020-07-16 07:01:04', NULL, '2020-07-16 07:01:04');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9110107', 9110107, '91101', 'Penerimaan PFK - Lainnya', '0', '', 'admin', '2020-07-16 07:01:05', NULL, '2020-07-16 07:01:05');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9110108', 9110108, '91101', 'Penerimaan PFK - Setoran JKK dan JKM', '0', '', 'admin', '2020-07-16 07:01:05', NULL, '2020-07-16 07:01:05');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9210101', 9210101, '92101', 'Pengeluaran PFK - IWP', '0', '', 'admin', '2020-07-16 07:04:10', NULL, '2020-07-16 07:04:10');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9210102', 9210102, '92101', 'Pengeluaran PFK - Taspen', '0', '', 'admin', '2020-07-16 07:04:10', NULL, '2020-07-16 07:04:10');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9210103', 9210103, '92101', 'Pengeluaran PFK - Askes', '0', '', 'admin', '2020-07-16 07:04:10', NULL, '2020-07-16 07:04:10');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9210104', 9210104, '92101', 'Pengeluaran PFK - PPh Pusat', '0', '', 'admin', '2020-07-16 07:04:10', NULL, '2020-07-16 07:04:10');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9210105', 9210105, '92101', 'Pengeluaran PFK - PPN Pusat', '0', '', 'admin', '2020-07-16 07:04:10', NULL, '2020-07-16 07:04:10');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9210106', 9210106, '92101', 'Pengeluaran PFK - Taperum', '0', '', 'admin', '2020-07-16 07:04:10', NULL, '2020-07-16 07:04:10');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9210107', 9210107, '92101', 'Pengeluaran PFK - Lainnya', '0', '', 'admin', '2020-07-16 07:04:10', NULL, '2020-07-16 07:04:10');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('9210108', 9210108, '92101', 'Pengeluaran PFK - Setoran JKK dan JKM', '0', '', 'admin', '2020-07-16 07:04:10', NULL, '2020-07-16 07:04:10');
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52021601', 52021601, '520216', 'Belanja Modal Alat Peraga Pelatihan dan Percontohan', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52021701', 52021701, '520217', 'Belanja Modal Unit Peralatan Proses / Produksi', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52021801', 52021801, '520218', 'Belanja Modal Rambu-Rambu Lalu Lintas Darat', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52021802', 52021802, '520218', 'Belanja Modal Rambu-Rambu Lalu Lintas Udara', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52021803', 52021803, '520218', 'Belanja Modal Rambu-Rambu Lalu Lintas Laut', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52021901', 52021901, '520219', 'Belanja Modal Peralatan Olahraga', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52030101', 52030101, '520301', 'Belanja Modal Bangunan Gedung Tempat Kerja', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52030102', 52030102, '520301', 'Belanja Modal Bangunan Gedung Tempat Tinggal', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52030201', 52030201, '520302', 'Belanja Modal Candi/Tugu Peringatan/ Prasasti', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52030301', 52030301, '520303', 'Belanja Modal Bangunan Menara Perambuan', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52030401', 52030401, '520304', 'Belanja Modal Tugu/Tanda Batas', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040101', 52040101, '520401', 'Belanja Modal Jalan', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040102', 52040102, '520401', 'Belanja Modal Jembatan', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040201', 52040201, '520402', 'Belanja Modal Bangunan Air Irigasi', '0', '', '', '2020-02-11 16:30:41', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040202', 52040202, '520402', 'Belanja Modal Bangunan Pengairan Pasang Surut', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040203', 52040203, '520402', 'Belanja Modal Bangunan Pengembangan Rawa dan Polder', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040204', 52040204, '520402', 'Belanja Modal Bangunan Pengaman Sungai/Pantai dan Penanggulangan Bencana Alam', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040205', 52040205, '520402', 'Belanja Modal Bangunan Pengembangan Sumber Air dan Air Tanah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040206', 52040206, '520402', 'Belanja Modal Bangunan Air Bersih/Air Baku', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040207', 52040207, '520402', 'Belanja Modal Bangunan Air Kotor', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040301', 52040301, '520403', 'Belanja Modal Instalasi Air Bersih/Air Baku', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040302', 52040302, '520403', 'Belanja Modal Instalasi Air Kotor', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040303', 52040303, '520403', 'Belanja Modal Instalasi Pengolahan Sampah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040304', 52040304, '520403', 'Belanja Modal Instalasi Pengolahan Bahan Bangunan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040305', 52040305, '520403', 'Belanja Modal Instalasi Pembangkit Listrik', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040306', 52040306, '520403', 'Belanja Modal Instalasi Gardu Listrik', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040307', 52040307, '520403', 'Belanja Modal Instalasi Pertahanan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040308', 52040308, '520403', 'Belanja Modal Instalasi Gas', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040309', 52040309, '520403', 'Belanja Modal Instalasi Pengaman', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040310', 52040310, '520403', 'Belanja Modal Instalasi Lain', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040401', 52040401, '520404', 'Belanja Modal Jaringan Air Minum', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040402', 52040402, '520404', 'Belanja Modal Jaringan Listrik', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040403', 52040403, '520404', 'Belanja Modal Jaringan Telepon', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52040404', 52040404, '520404', 'Belanja Modal Jaringan Gas', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050101', 52050101, '520501', 'Belanja Modal Bahan Perpustakaan Tercetak', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050102', 52050102, '520501', 'Belanja Modal Bahan Perpustakaan Terekam dan Bentuk Mikro', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050103', 52050103, '520501', 'Belanja Modal Kartografi, Naskah, dan Lukisan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050104', 52050104, '520501', 'Belanja Modal Musik', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050105', 52050105, '520501', 'Belanja Modal Karya Grafika (Graphic Material)', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050106', 52050106, '520501', 'Belanja Modal Three Dimensional Artifacts and Realita', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050107', 52050107, '520501', 'Belanja Modal Tarscalt', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050201', 52050201, '520502', 'Belanja Modal Barang Bercorak Kesenian', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050202', 52050202, '520502', 'Belanja Modal Alat Bercorak Kebudayaan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050203', 52050203, '520502', 'Belanja Modal Tanda Penghargaan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050301', 52050301, '520503', 'Belanja Modal Hewan Piaraan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050302', 52050302, '520503', 'Belanja Modal Ternak', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050303', 52050303, '520503', 'Belanja Modal Hewan Lainnya', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050401', 52050401, '520504', 'Belanja Modal Ikan Bersirip (Pisces/Ikan Bersirip)', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050402', 52050402, '520504', 'Belanja Modal Crustea (Udang, Rajungan, Kepiting, dan Sebangsanya)', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050403', 52050403, '520504', 'Belanja Modal Mollusca (Kerang, Tiram, Cumi-cumi, Gurita, Siput, dan Sebangsanya)', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050404', 52050404, '520504', 'Belanja Modal Coelenterata (Ubur-ubur dan Sebangsanya)', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050405', 52050405, '520504', 'Belanja Modal Echinodermata (Tripang, Bulu Babi, dan Sebangsanya)', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050406', 52050406, '520504', 'Belanja Modal Amphibia (Kodok dan Sebangsanya)', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050407', 52050407, '520504', 'Belanja Modal Reptilia (Buaya, Penyu, Kura­kura, Biawak, Ular Air, dan Sebangsanya)', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050408', 52050408, '520504', 'Belanja Modal Mammalia (Paus, Lumba? lumba, Pesut, Duyung, dan Sebangsanya)', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050409', 52050409, '520504', 'Belanja Modal Algae (Rumput Laut dan Tumbuh-Tumbuhan Lain yang Hidup di Dalam Air)', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050410', 52050410, '520504', 'Belanja Modal Biota Perairan Lainnya', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050501', 52050501, '520505', 'Belanja Modal Tanaman', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050601', 52050601, '520506', 'Belanja Modal Barang Koleksi Non Budaya', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('52050701', 52050701, '520507', 'Belanja Modal Aset Tetap Dalam Renovasi', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('53010101', 53010101, '530101', 'Belanja Tidak Terduga', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54010101', 54010101, '540101', 'Belanja Bagi Hasil Pajak Daerah Kepada Pemerintahan Kabupaten', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54010102', 54010102, '540101', 'Belanja Bagi Hasil Pajak Daerah Kepada Pemerintahan Kota', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54010103', 54010103, '540101', 'Belanja Bagi Hasil Pajak Daerah Kepada Pemerintahan Desa', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54020101', 54020101, '540201', 'Belanja Bantuan Keuangan Umum antar Daerah Provinsi', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54020102', 54020102, '540201', 'Belanja Bantuan Keuangan Khusus antar Daerah Provinsi', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54020201', 54020201, '540202', 'Belanja Bantuan Keuangan Umum antar Daerah Kabupaten/ Kota', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54020202', 54020202, '540202', 'Belanja Bantuan Keuangan Khusus kepada Pemerintah Kabupaten/ Kota', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54020301', 54020301, '540203', 'Belanja Bantuan Keuangan Umum Daerah Provinsi ke Kabupaten/Kota', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54020302', 54020302, '540203', 'Belanja Bantuan Keuangan Khusus Daerah Provinsi ke Kabupaten/Kota', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54020401', 54020401, '540204', 'Belanja Bantuan Keuangan Umum Daerah Kabupaten/Kota ke Provinsi', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54020402', 54020402, '540204', 'Belanja Bantuan Keuangan Khusus Daerah Kabupaten/Kota ke Provinsi', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54020501', 54020501, '540205', 'Belanja Bantuan Keuangan Umum Daerah Provinsi atau Kabupaten/Kota kepada Desa', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54020502', 54020502, '540205', 'Belanja Bantuan Keuangan Khusus Daerah Provinsi atau Kabupaten/Kota kepada Desa', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('54020601', 54020601, '540206', 'Belanja Transfer Dana Otonomi Khusus Provinsi kepada Kabupaten/Kota', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010101', 61010101, '610101', 'Pelampauan Penerimaan PAD-Pajak Daerah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010102', 61010102, '610101', 'Pelampauan Penerimaan PAD-Retribusi Daerah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010103', 61010103, '610101', 'Pelampauan Penerimaan PAD-Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010104', 61010104, '610101', 'Pelampauan Penerimaan PAD-Lain-lain PAD yang Sah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010201', 61010201, '610102', 'Pelampauan Penerimaan Pendapatan Transfer-Transfer Pemerintah Pusat', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010202', 61010202, '610102', 'Pelampauan Penerimaan Pendapatan Transfer antar Daerah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010301', 61010301, '610103', 'Pelampauan Penerimaan Lain-Lain Pendapatan Daerah yang Sah-Pendapatan Hibah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010302', 61010302, '610103', 'Pelampauan Penerimaan Lain-Lain Pendapatan Daerah yang Sah-Dana Darurat', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010303', 61010303, '610103', 'Pelampauan Penerimaan Lain-Lain Pendapatan Daerah yang Sah-Lain-Lain Pendapatan Sesuai dengan Ketentuan Peraturan Perundang-Undangan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010401', 61010401, '610104', 'Pelampauan Penerimaan Pembiayaan?Pencairan Dana Cadangan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010402', 61010402, '610104', 'Pelampauan Penerimaan Pembiayaan-Hasil Penjualan Kekayaan Daerah yang Dipisahkan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010403', 61010403, '610104', 'Pelampauan Penerimaan Pembiayaan?Penerimaan Pinjaman Daerah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010404', 61010404, '610104', 'Pelampauan Penerimaan Pembiayaan­Penerimaan Kembali Pemberian Pinjaman Daerah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010405', 61010405, '610104', 'Pelampauan Penerimaan Pembiayaan?Penerimaan Pembiayaan Lainnya Sesuai dengan Ketentuan Peraturan Perundang?Undangan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010501', 61010501, '610105', 'Penghematan Belanja-Belanja Operasi', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010502', 61010502, '610105', 'Penghematan Belanja-Belanja Modal', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010503', 61010503, '610105', 'Sisa Penggunaan Belanja Tidak Terduga', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010504', 61010504, '610105', 'Sisa Belanja Transfer', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010601', 61010601, '610106', 'Uang Jaminan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010701', 61010701, '610107', 'Sisa Dana Akibat Tidak Tercapainya Capaian Target Kinerja', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010702', 61010702, '610107', 'Sisa Dana Pengeluaran Pembiayaan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010801', 61010801, '610108', 'Sisa Lebih Perhitungan Anggaran BLUD', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010802', 61010802, '610108', 'Sisa Dana BOS', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61010803', 61010803, '610108', 'Sisa Dana Kapitasi', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61020101', 61020101, '610201', 'Pencairan Dana Cadangan', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61030101', 61030101, '610301', 'Hasil Penjualan Kekayaan Daerah yang Dipisahkan pada BUMN', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61030201', 61030201, '610302', 'Hasil Penjualan Kekayaan Daerah yang Dipisahkan pada BUMD', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040101', 61040101, '610401', 'Pinjaman Daerah dari Pemerintah Pusat­Penerusan Pinjaman Dalam Negeri-Jangka Menengah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040102', 61040102, '610401', 'Pinjaman Daerah dari Pemerintah Pusat­Penerusan Pinjaman Dalam Negeri-Jangka Panjang', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040103', 61040103, '610401', 'Pinjaman Daerah dari Pemerintah Pusat­Penerusan Pinjaman Luar Negeri-Jangka Menengah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040104', 61040104, '610401', 'Pinjaman Daerah dari Pemerintah Pusat­Penerusan Pinjaman Luar Negeri-Jangka Panjang', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040105', 61040105, '610401', 'Pinjaman Daerah dari Pemerintah Pusat- Sumber Lainnya sesuai dengan Ketentuan Peraturan Perundang-Undangan-Jangka Menengah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040106', 61040106, '610401', 'Pinjaman Daerah dari Pemerintah Pusat- Sumber Lainnya sesuai dengan Ketentuan Peraturan Perundang-undangan-Jangka Panjang', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040201', 61040201, '610402', 'Pinjaman Daerah dari Pemerintah Daerah­Jangka Pendek', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040301', 61040301, '610403', 'Pinjaman Daerah dari LKB-BUMN-Jangka Pendek', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040302', 61040302, '610403', 'Pinjaman Daerah dari LKB-BUMN-Jangka Menengah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040303', 61040303, '610403', 'Pinjaman Daerah dari LKB-BUMN-Jangka Panjang', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040304', 61040304, '610403', 'Pinjaman Daerah dari LKB-BUMD-Jangka Pendek', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040305', 61040305, '610403', 'Pinjaman Daerah dari LKB-BUMD-Jangka Menengah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040306', 61040306, '610403', 'Pinjaman Daerah dari LKB-BUMD-Jangka Panjang', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040307', 61040307, '610403', 'Pinjaman Daerah dari LKB-Swasta-Jangka Pendek', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040308', 61040308, '610403', 'Pinjaman Daerah dari LKB-Swasta-Jangka Menengah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040309', 61040309, '610403', 'Pinjaman Daerah dari LKB-Swasta-Jangka Panjang', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040401', 61040401, '610404', 'Pinjaman Daerah dari LKBB-BUMN-Jangka Pendek', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040402', 61040402, '610404', 'Pinjaman Daerah dari LKBB-BUMN-Jangka Menengah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040403', 61040403, '610404', 'Pinjaman Daerah dari LKBB-BUMN-Jangka Panjang', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040404', 61040404, '610404', 'Pinjaman Daerah dari LKBB-BUMD-Jangka Pendek', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040405', 61040405, '610404', 'Pinjaman Daerah dari LKBB-BUMD-Jangka Menengah', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040406', 61040406, '610404', 'Pinjaman Daerah dari LKBB-BUMD-Jangka Panjang', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040407', 61040407, '610404', 'Pinjaman Daerah dari LKBB-Swasta-Jangka Pendek', '0', '', '', '2020-02-11 16:30:42', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040408', 61040408, '610404', 'Pinjaman Daerah dari LKBB-Swasta-Jangka Menengah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040409', 61040409, '610404', 'Pinjaman Daerah dari LKBB-Swasta-Jangka Panjang', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61040501', 61040501, '610405', 'Obligasi Daerah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050101', 61050101, '610501', 'Penerimaan Kembali Pemberian Pinjaman Daerah kepada Pemerintah Pusat', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050102', 61050102, '610501', 'Penerimaan Kembali Investasi dalam Proyek Pembangunan kepada Pemerintah Pusat', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050201', 61050201, '610502', 'Penerimaan Kembali Pemberian Pinjaman Daerah kepada Pemerintah Daerah Lainnya', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050202', 61050202, '610502', 'Penerimaan Kembali Investasi dalam Proyek Pembangunan kepada Pemerintah Daerah Lainnya', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050301', 61050301, '610503', 'Penerimaan Kembali Pinjaman kepada BUMD', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050302', 61050302, '610503', 'Penerimaan Kembali Investasi Non Permanen kepada BUMD', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050401', 61050401, '610504', 'Penerimaan Kembali Pinjaman kepada BUMN', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050402', 61050402, '610504', 'Penerimaan Kembali Investasi Non Permanen kepada BUMN', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050501', 61050501, '610505', 'Penerimaan Kembali Pinjaman kepada Koperasi', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050502', 61050502, '610505', 'Penerimaan Kembali Dana Bergulir kepada Koperasi', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050601', 61050601, '610506', 'Penerimaan Kembali Pinjaman kepada Masyarakat', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050602', 61050602, '610506', 'Penerimaan Kembali Dana Bergulir kepada Masyarakat', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61050701', 61050701, '610507', 'Penerimaan Kembali Dana Bergulir kepada BLUD', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61060101', 61060101, '610601', 'Penerimaan Kembali Pinjaman BLUD - Jangka Pendek', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61060102', 61060102, '610601', 'Penerimaan Kembali Pinjaman BLUD - Jangka Menengah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('61060103', 61060103, '610601', 'Penerimaan Kembali Pinjaman BLUD-Jangka Panjang', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62010101', 62010101, '620101', 'Pembentukan Dana Cadangan', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62020101', 62020101, '620201', 'Penyertaan Modal Daerah pada BUMN', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62020201', 62020201, '620202', 'Penyertaan Modal Daerah pada BUMD', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030101', 62030101, '620301', 'Pembayaran Pinjaman Daerah dari Pemerintah Pusat-Penerusan Pinjaman Dalam Negeri-Jangka Menengah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030102', 62030102, '620301', 'Pembayaran Pinjaman Daerah dari Pemerintah Pusat-Penerusan Pinjaman Dalam Negeri-Jangka Panjang', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030103', 62030103, '620301', 'Pembayaran Pinjaman Daerah dari Pemerintah Pusat-Penerusan Pinjaman Luar Negeri-Jangka Menengah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030104', 62030104, '620301', 'Pembayaran Pinjaman Daerah dari Pemerintah Pusat-Penerusan Pinjaman Luar Negeri-Jangka Panjang', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030105', 62030105, '620301', 'Pembayaran Pinjaman Daerah dari Pemerintah Pusat- Sumber Lainnya sesuai dengan Ketentuan Peraturan Perundang? Undangan-Jangka Menengah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030106', 62030106, '620301', 'Pembayaran Pinjaman Daerah dari Pemerintah Pusat-Sumber Lainnya sesuai dengan Ketentuan Peraturan Perundang? undangan-Jangka Panjang', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030201', 62030201, '620302', 'Pembayaran Pinjaman dari Pemerintah Daerah Lain-Jangka Pendek', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030301', 62030301, '620303', 'Pembayaran Pinjaman dari LKB-BUMN? Jangka Pendek', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030302', 62030302, '620303', 'Pembayaran Pinjaman dari LKB-BUMN? Jangka Menengah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030303', 62030303, '620303', 'Pembayaran Pinjaman dari LKB-BUMN? Jangka Panjang', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030304', 62030304, '620303', 'Pembayaran Pinjaman dari LKB-BUMD? Jangka Pendek', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030305', 62030305, '620303', 'Pembayaran Pinjaman dari LKB-BUMD? Jangka Menengah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030306', 62030306, '620303', 'Pembayaran Pinjaman dari LKB-BUMD? Jangka Panjang', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030307', 62030307, '620303', 'Pembayaran Pinjaman dari LKB-Swasta? Jangka Pendek', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030308', 62030308, '620303', 'Pembayaran Pinjaman dari LKB-Swasta? Jangka Menengah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030309', 62030309, '620303', 'Pembayaran Pinjaman dari LKB-Swasta? Jangka Panjang', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030401', 62030401, '620304', 'Pembayaran Pinjaman dari LKBB-BUMN­Jangka Pendek', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030402', 62030402, '620304', 'Pembayaran Pinjaman dari LKBB-BUMN­Jangka Menengah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030403', 62030403, '620304', 'Pembayaran Pinjaman dari LKBB-BUMN­Jangka Panjang', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030404', 62030404, '620304', 'Pembayaran Pinjaman dari LKBB-BUMD­Jangka Pendek', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030405', 62030405, '620304', 'Pembayaran Pinjaman dari LKBB-BUMD­Jangka Menengah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030406', 62030406, '620304', 'Pembayaran Pinjaman dari LKBB-BUMD­Jangka Panjang', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030407', 62030407, '620304', 'Pembayaran Pinjaman dari LKBB-Swasta­Jangka Pendek', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030408', 62030408, '620304', 'Pembayaran Pinjaman dari LKBB-Swasta­Jangka Menengah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030409', 62030409, '620304', 'Pembayaran Pinjaman dari LKBB-Swasta­Jangka Panjang', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62030501', 62030501, '620305', 'Pembayaran Obligasi Daerah', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040101', 62040101, '620401', 'Pemberian Pinjaman Daerah kepada', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040102', 62040102, '620401', 'Pemberian Pinjaman-Investasi dalam Proyek Pembangunan kepada Pemerintah Pusat', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040201', 62040201, '620402', 'Pemberian Pinjaman Daerah kepada', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040202', 62040202, '620402', 'Pemberian Pinjaman-Investasi dalam Proyek Pembangunan kepada Pemerintah Daerah Lainnya', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040301', 62040301, '620403', 'Pemberian Pinjaman Daerah kepada BUMD', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040302', 62040302, '620403', 'Pemberian Pinjaman-Investasi Non Permanen kepada BUMD', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040401', 62040401, '620404', 'Pemberian Pinjaman Daerah kepada BUMN', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040402', 62040402, '620404', 'Pemberian Pinjaman-Investasi Non Permanen Lainnya kepada BUMN', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040501', 62040501, '620405', 'Pemberian Pinjaman Daerah kepada Koperasi', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040502', 62040502, '620405', 'Pemberian Pinjaman-Dana Bergulir kepada Koperasi', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040601', 62040601, '620406', 'Pemberian Pinjaman Daerah kepada Masyarakat', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040602', 62040602, '620406', 'Pemberian Pinjaman-Dana Bergulir kepada Masyarakat', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62040701', 62040701, '620407', 'Pemberian Pinjaman-Dana Bergulir kepada BLUD', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62050101', 62050101, '620501', 'Pinjaman BLUD-Jangka Pendek', '0', '', '', '2020-02-17 08:48:51', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62050102', 62050102, '620501', 'Pinjaman BLUD-Jangka Menengah', '0', '', '', '2020-02-17 08:48:51', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('62050103', 62050103, '620501', 'Pinjaman BLUD-Jangka Panjang', '0', '', '', '2020-02-17 08:48:51', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010101', 71010101, '710101', 'PKB-Mobil Penumpang-Sedan-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010102', 71010102, '710101', 'PKB-Mobil Penumpang-Jeep-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010103', 71010103, '710101', 'PKB-Mobil Penumpang-Minibus-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010104', 71010104, '710101', 'PKB-Mobil Bus-Microbus-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010105', 71010105, '710101', 'PKB-Mobil Bus-Bus-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010106', 71010106, '710101', 'PKB-Mobil Barang/Beban-Pick Up-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010107', 71010107, '710101', 'PKB-Mobil Barang/Beban-Light Truck-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010108', 71010108, '710101', 'PKB-Mobil Barang/Beban-Truck-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010109', 71010109, '710101', 'PKB-Mobil Barang/Beban-Blind Van-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010110', 71010110, '710101', 'PKB-Sepeda Motor-Sepeda Motor Roda Dua–LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010111', 71010111, '710101', 'PKB-Sepeda Motor-Sepeda Motor Roda Tiga–LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010112', 71010112, '710101', 'PKB-Kendaraan Bermotor yang Dioperasikan di Air–LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010113', 71010113, '710101', 'PKB-Kendaraan Khusus Alat Berat/Alat Besar– LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010114', 71010114, '710101', 'PKB-Mobil Roda Tiga–LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010201', 71010201, '710102', 'BBNKB-Mobil Penumpang-Sedan -LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010202', 71010202, '710102', 'BBNKB-Mobil Penumpang-Jeep-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010203', 71010203, '710102', 'BBNKB-Mobil Penumpang-Minibus-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010204', 71010204, '710102', 'BBNKB-Mobil Bus-Microbus-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010205', 71010205, '710102', 'BBNKB-Mobil Bus-Bus–LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010206', 71010206, '710102', 'BBNKB-Mobil Barang/Beban-Pick Up-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010207', 71010207, '710102', 'BBNKB-Mobil Barang/Beban-Light Truck-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010208', 71010208, '710102', 'BBNKB-Mobil Barang/Beban-Truck-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010209', 71010209, '710102', 'BBNKB-Mobil Barang/Beban-Blind Van-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010210', 71010210, '710102', 'BBNKB-Sepeda Motor-Sepeda Motor Roda Dua­LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010211', 71010211, '710102', 'BBNKB-Sepeda Motor-Sepeda Motor Roda Tiga­LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010212', 71010212, '710102', 'BBNKB-Kendaraan Bermotor yang Dioperasikan di Air-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010213', 71010213, '710102', 'BBNKB-Kendaraan Khusus Alat Berat-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010214', 71010214, '710102', 'BBNKB-Mobil Roda Tiga-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010301', 71010301, '710103', 'PBBKB Bahan Bakar Bensin-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010302', 71010302, '710103', 'PBBKB Bahan Bakar Solar–LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010303', 71010303, '710103', 'PBBKB Bahan Bakar Gas-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010304', 71010304, '710103', 'PBBKB Bahan Bakar Lainnya-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010401', 71010401, '710104', 'Pajak Air Permukaan-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010501', 71010501, '710105', 'Pajak Rokok-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010601', 71010601, '710106', 'Pajak Hotel-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010602', 71010602, '710106', 'Pajak Motel-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010603', 71010603, '710106', 'Pajak Losmen-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010604', 71010604, '710106', 'Pajak Gubuk Pariwisata-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010605', 71010605, '710106', 'Pajak Wisma Pariwisata-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010606', 71010606, '710106', 'Pajak Pesanggrahan-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010607', 71010607, '710106', 'Pajak Rumah Penginapan dan Sejenisnya-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010608', 71010608, '710106', 'Pajak Rumah Kos dengan Jumlah Kamar Lebih dari 10 (Sepuluh)–LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010701', 71010701, '710107', 'Pajak Restoran dan Sejenisnya-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010702', 71010702, '710107', 'Pajak Rumah Makan dan Sejenisnya-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010703', 71010703, '710107', 'Pajak Kafetaria dan Sejenisnya-LO', '0', '', '', '2020-02-11 16:30:43', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010704', 71010704, '710107', 'Pajak Kantin dan Sejenisnya-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010705', 71010705, '710107', 'Pajak Warung dan Sejenisnya-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010706', 71010706, '710107', 'Pajak Bar dan Sejenisnya–LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010707', 71010707, '710107', 'Pajak Jasa Boga/Katering dan Sejenisnya-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010801', 71010801, '710108', 'Pajak Tontonan Film–LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010802', 71010802, '710108', 'Pajak Pagelaran Kesenian/Musik/Tari/Busana-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010803', 71010803, '710108', 'Pajak Kontes Kecantikan, Binaraga, dan Sejenisnya-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010804', 71010804, '710108', 'Pajak Pameran–LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010805', 71010805, '710108', 'Pajak Diskotik, Karaoke, Klub Malam, dan Sejenisnya-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010806', 71010806, '710108', 'Pajak Sirkus/Akrobat/Sulap-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010807', 71010807, '710108', 'Pajak Permainan Biliar dan Bowling-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010808', 71010808, '710108', 'Pajak Pacuan Kuda, Kendaraan Bermotor, dan Permainan Ketangkasan–LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010809', 71010809, '710108', 'Pajak Panti Pijat, Refleksi, Mandi Uap/Spa, dan Pusat Kebugaran (Fitness Center)-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010810', 71010810, '710108', 'Pajak Pertandingan Olahraga-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010901', 71010901, '710109', 'Pajak Reklame Papan/Billboard/Videotron/Megatron-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010902', 71010902, '710109', 'Pajak Reklame Kain-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010903', 71010903, '710109', 'Pajak Reklame Melekat/Stiker-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010904', 71010904, '710109', 'Pajak Reklame Selebaran-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010905', 71010905, '710109', 'Pajak Reklame Berjalan-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010906', 71010906, '710109', 'Pajak Reklame Udara-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010907', 71010907, '710109', 'Pajak Reklame Apung-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010908', 71010908, '710109', 'Pajak Reklame Suara-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010909', 71010909, '710109', 'Pajak Reklame Film/Slide-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71010910', 71010910, '710109', 'Pajak Reklame Peragaan-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011001', 71011001, '710110', 'Pajak Penerangan Jalan Dihasilkan Sendiri-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011002', 71011002, '710110', 'Pajak Penerangan Jalan Sumber Lain-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011101', 71011101, '710111', 'Pajak Parkir-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011201', 71011201, '710112', 'Pajak Air Tanah-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011301', 71011301, '710113', 'Pajak Sarang Burung Walet-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011401', 71011401, '710114', 'Pajak Asbes-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011402', 71011402, '710114', 'Pajak Batu Tulis-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011403', 71011403, '710114', 'Pajak Batu Setengah Permata-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011404', 71011404, '710114', 'Pajak Batu Kapur-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011405', 71011405, '710114', 'Pajak Batu Apung-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011406', 71011406, '710114', 'Pajak Batu Permata-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011407', 71011407, '710114', 'Pajak Bentonit-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011408', 71011408, '710114', 'Pajak Dolomit-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011409', 71011409, '710114', 'Pajak Felspar-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011410', 71011410, '710114', 'Pajak Garam Batu (Halite)-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011411', 71011411, '710114', 'Pajak Grafit-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011412', 71011412, '710114', 'Pajak Granit/Andesit-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011413', 71011413, '710114', 'Pajak Gips-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011414', 71011414, '710114', 'Pajak Kalsit-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011415', 71011415, '710114', 'Pajak Kaolin-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011416', 71011416, '710114', 'Pajak Leusit-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011417', 71011417, '710114', 'Pajak Magnesit-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011418', 71011418, '710114', 'Pajak Mika-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011419', 71011419, '710114', 'Pajak Marmer-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011420', 71011420, '710114', 'Pajak Nitrat-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011421', 71011421, '710114', 'Pajak Opsidien-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011422', 71011422, '710114', 'Pajak Oker-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011423', 71011423, '710114', 'Pajak Pasir dan Kerikil-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011424', 71011424, '710114', 'Pajak Pasir Kuarsa-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011425', 71011425, '710114', 'Pajak Perlit-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011426', 71011426, '710114', 'Pajak Phospat-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011427', 71011427, '710114', 'Pajak Talk-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011428', 71011428, '710114', 'Pajak Tanah Serap (Fullers .Earth)-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011429', 71011429, '710114', 'Pajak Tanah Diatome-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011430', 71011430, '710114', 'Pajak Tanah Liat-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011431', 71011431, '710114', 'Pajak Tawas (Alum)-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011432', 71011432, '710114', 'Pajak Tras-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011433', 71011433, '710114', 'Pajak Yarosif-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011434', 71011434, '710114', 'Pajak Zeolit-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011435', 71011435, '710114', 'Pajak Basal-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011436', 71011436, '710114', 'Pajak Trakit-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011437', 71011437, '710114', 'Pajak Mineral bukan Logam dan Batuan Lainnya-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011501', 71011501, '710115', 'PBBP2-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011601', 71011601, '710116', 'BPHTB-Pemindahan Hak-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71011602', 71011602, '710116', 'BPHTB-Pemberian Hak Baru-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020101', 71020101, '710201', 'Retribusi Pelayanan Kesehatan-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020102', 71020102, '710201', 'Retribusi Pelayanan Persampahan/Kebersihan-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020103', 71020103, '710201', 'Retribusi Pelayanan Pemakaman dan Pengabuan Mayat-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020104', 71020104, '710201', 'Retribusi Pelayanan Parkir di Tepi Jalan Umum-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020105', 71020105, '710201', 'Retribusi Pelayanan Pasar-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020106', 71020106, '710201', 'Retribusi Pengujian Kendaraan Bermotor-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020107', 71020107, '710201', 'Retribusi Pemeriksaan Alat Pemadam Kebakaran-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020108', 71020108, '710201', 'Retribusi Penggantian Biaya Cetak Peta-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020109', 71020109, '710201', 'Retribusi Penyediaan dan/atau Penyedotan Kakus-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020110', 71020110, '710201', 'Retribusi Pengolahan Limbah Cair-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020111', 71020111, '710201', 'Retribusi Pelayanan Tera/Tera Ulang-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020112', 71020112, '710201', 'Retribusi Pelayanan Pendidikan-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020113', 71020113, '710201', 'Retribusi Pengawasan dan Pengendalian Menara Telekomunikasi-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020201', 71020201, '710202', 'Retribusi Pemakaian Kekayaan Daerah-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020202', 71020202, '710202', 'Retribusi Pasar Grosir dan/atau Pertokoan-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020203', 71020203, '710202', 'Retribusi Tempat Pelelangan-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020204', 71020204, '710202', 'Retribusi Terminal-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020205', 71020205, '710202', 'Retribusi Tempat Khusus Parkir-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020206', 71020206, '710202', 'Retribusi Tempat Penginapan/Pesanggrahan/Vila-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020207', 71020207, '710202', 'Retribusi Rumah Potong Hewan-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020208', 71020208, '710202', 'Retribusi Pelayanan Kepelabuhanan-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020209', 71020209, '710202', 'Retribusi Tempat Rekreasi dan Olahraga-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020210', 71020210, '710202', 'Retribusi Penyeberangan di Air-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020211', 71020211, '710202', 'Retribusi Penjualan Produksi Usaha Daerah-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020301', 71020301, '710203', 'Retribusi Izin Mendirikan Bangunan-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020302', 71020302, '710203', 'Retribusi Izin Tempat Penjualan Minuman Beralkohol-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020303', 71020303, '710203', 'Retribusi Izin Trayek untuk Menyediakan Pelayanan Angkutan Umum-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020304', 71020304, '710203', 'Retribusi Izin Usaha Perikanan-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020305', 71020305, '710203', 'Retribusi Pengendalian Lalu Lintas-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71020306', 71020306, '710203', 'Retribusi Perpanjangan Izin Mempekerjakan Tenaga Kerja Asing (IMTA)-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71030101', 71030101, '710301', 'Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas Penyertaan Modal pada BUMN-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71030201', 71030201, '710302', 'Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas Penyertaan Modal pada BUMD (Lembaga Keuangan)-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71030202', 71030202, '710302', 'Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas Penyertaan Modal pada BUMD (Aneka Usaha)-LO', '0', '', '', '2020-02-11 16:30:44', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71030203', 71030203, '710302', 'Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas Penyertaan Modal pada BUMD (Bidang Air Minum)-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71030204', 71030204, '710302', 'Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas Penyertaan Modal pada BUMD (Bidang Limbah)-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040101', 71040101, '710401', 'Hasil Penjualan Tanah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040102', 71040102, '710401', 'Hasil Penjualan Peralatan dan Mesin-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040103', 71040103, '710401', 'Hasil Penjualan Gedung dan Bangunan-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040104', 71040104, '710401', 'Hasil Penjualan Jalan, Jaringan, dan Irigasi-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040105', 71040105, '710401', 'Hasil Penjualan Aset Tetap Lainnya-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040106', 71040106, '710401', 'Hasil Penjualan Aset Lainnya-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040201', 71040201, '710402', 'Hasil Selisih Lebih Tukar Menukar Tanah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040202', 71040202, '710402', 'Hasil Selisih Lebih Tukar Menukar Peralatan dan Mesin-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040203', 71040203, '710402', 'Hasil Selisih Lebih Tukar Menukar Gedung dan Bangunan-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040204', 71040204, '710402', 'Hasil Selisih Lebih Tukar Menukar Jalan, Jaringan, dan Irigasi-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040205', 71040205, '710402', 'Hasil Selisih Lebih Tukar Menukar Aset Tetap Lainnya-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040206', 71040206, '710402', 'Hasil Selisih Lebih Tukar Menukar Aset Lainnya-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040301', 71040301, '710403', 'Hasil Sewa BMD-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040302', 71040302, '710403', 'Hasil Kerja Sama Pemanfaatan BMD-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040303', 71040303, '710403', 'Hasil dari Bangun Guna Serah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040304', 71040304, '710403', 'Hasil dari Bangun Serah Guna-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040305', 71040305, '710403', 'Hasil dari Kerja Sama Penyediaan Infrastruktur- LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040401', 71040401, '710404', 'Hasi Kerja Sama Daerah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040501', 71040501, '710405', 'Jasa Giro pada Kas Daerah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040502', 71040502, '710405', 'Jasa Giro pada Kas di Bendahara-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040503', 71040503, '710405', 'Jasa Giro pada Rekening Dana Cadangan-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040504', 71040504, '710405', 'Jasa Giro pada BLUD-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040505', 71040505, '710405', 'Jasa Giro pada Rekening Dana BOS-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040506', 71040506, '710405', 'Jasa Giro Dana Kapitasi pada FKTP-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040601', 71040601, '710406', 'Hasil Pengelolaan Dana Bergulir-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040701', 71040701, '710407', 'Pendapatan Bunga atas Penempatan Uang Pemerintah Daerah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040801', 71040801, '710408', 'Tuntutan Ganti Kerugian Daerah terhadap Bendahara-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040802', 71040802, '710408', 'Tuntutan Ganti Kerugian Daerah terhadap Pegawai Negeri Bukan Bendahara atau Pejabat Lain-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71040901', 71040901, '710409', 'Penerimaan Komisi, Potongan, atau Bentuk Lain-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041001', 71041001, '710410', 'Penerimaan Keuntungan dari Selisih Nilai Tukar Rupiah terhadap Mata Uang Asing-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041101', 71041101, '710411', 'Pendapatan Denda atas Keterlambatan Pelaksanaan Pekerjaan-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041201', 71041201, '710412', 'Pendapatan Denda Pajak Kendaraan Bermotor (PKB) -LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041202', 71041202, '710412', 'Pendapatan Denda Bea Balik Nama Kendaraan Bermotor (BBNKB)-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041203', 71041203, '710412', 'Pendapatan Denda Pajak Bahan Bakar Kendaraan Bermotor (PBBKB)-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041204', 71041204, '710412', 'Pendapatan Denda Pajak Air Permukaan-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041205', 71041205, '710412', 'Pendapatan Denda Pajak Rokok-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041206', 71041206, '710412', 'Pendapatan Denda Pajak Hotel-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041207', 71041207, '710412', 'Pendapatan Denda Pajak Restoran-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041208', 71041208, '710412', 'Pendapatan Denda Pajak Hiburan-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041209', 71041209, '710412', 'Pendapatan Denda Pajak Reklame-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041210', 71041210, '710412', 'Pendapatan Denda Pajak Penerangan Jalan-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041211', 71041211, '710412', 'Pendapatan Denda Pajak Parkir-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041212', 71041212, '710412', 'Pendapatan Denda Pajak Air Tanah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041213', 71041213, '710412', 'Pendapatan Denda Pajak Sarang Burung Walet­LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041214', 71041214, '710412', 'Pendapatan Denda Pajak Mineral Bukan Logam dan Batuan-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041215', 71041215, '710412', 'Pendapatan Denda Pajak Bumi dan Bangunan Perdesaan dan Perkotaan (PBBP2)-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041216', 71041216, '710412', 'Pendapatan Denda Bea Perolehan Hak atas Tanah dan Bangunan (BPHTB)-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041301', 71041301, '710413', 'Pendapatan Denda Retribusi Jasa Umum-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041302', 71041302, '710413', 'Pendapatan Denda Retribusi Jasa Usaha-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041303', 71041303, '710413', 'Pendapatan Denda Retribusi Perizinan Tertentu-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041401', 71041401, '710414', 'Hasil Eksekusi atas Jaminan atas Pengadaan Barang/Jasa-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041501', 71041501, '710415', 'Pendapatan dari Pengembalian Kelebihan Pembayaran Pajak Penghasilan Pasal 21-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041502', 71041502, '710415', 'Pendapatan dari Pengembalian Kelebihan Pembayaran Jaminan Kesehatan-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041503', 71041503, '710415', 'Pendapatan dari Pengembalian Kelebihan Pembayaran Gaji dan Tunjangan-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041504', 71041504, '710415', 'Pendapatan dari Pengembalian Kelebihan Pembayaran Perjalanan Dinas-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041505', 71041505, '710415', 'Pendapatan dari Pengembalian Kelebihan', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041506', 71041506, '710415', 'Pendapatan dari Pengembalian Kelebihan Pembayaran Jaminan Kematian (JKM)-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041507', 71041507, '710415', 'Pendapatan dari Pengembalian Kelebihan Pembayaran Jaminan Kesehatan Nasional (JKN) -LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041601', 71041601, '710416', 'Pendapatan dari BLUD ...-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041701', 71041701, '710417', 'Pendapatan Denda Pengakhiran Sewa BMD-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041702', 71041702, '710417', 'Pendapatan Denda Hasil dari Kerja Sama Penyediaan Infrastruktur-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041801', 71041801, '710418', 'Pendapatan Dana Kapitasi JKN pada FKTP-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71041901', 71041901, '710419', 'Pendapatan Hasil Pengelolaan Dana Bergulir­LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71042001', 71042001, '710420', 'Pendapatan Berdasarkan Putusan Pengadilan (Inkracht) -LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71042101', 71042101, '710421', 'Pendapatan Denda atas Pelanggaran Peraturan Daerah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('71042201', 71042201, '710422', 'Pendapatan Zakat-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010101', 72010101, '720101', 'Dana Transfer Umum-Dana Bagi Hasil (DBH)- LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010102', 72010102, '720101', 'Dana Transfer Umum-Dana Alokasi Umum (DAU) -LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010103', 72010103, '720101', 'Dana Transfer Khusus-Dana Alokasi Khusus (DAK) Fisik-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010104', 72010104, '720101', 'Dana Transfer Khusus-Dana Alokasi Khusus (DAK) Non Fisik-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010201', 72010201, '720102', 'DID-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010301', 72010301, '720103', 'Dana Otonomi Khusus-Provinsi Papua-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010302', 72010302, '720103', 'Dana Otonomi Khusus-Provinsi Papua Barat­LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010303', 72010303, '720103', 'Dana Otonomi Khusus-Provinsi Aceh-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010304', 72010304, '720103', 'Dana Tambahan Infrastruktur dalam rangka Otonomi Khusus Provinsi Papua-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010305', 72010305, '720103', 'Dana Tambahan Infrastruktur dalam rangka Otonomi Khusus Provinsi Papua Barat-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010401', 72010401, '720104', 'Dana Keistimewaan Daerah Istimewa Yogyakarta-LO Yogyakarta-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72010501', 72010501, '720105', 'Dana Desa-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72020101', 72020101, '720201', 'Pendapatan Bagi Hasil Pajak-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72020201', 72020201, '720202', 'Bantuan Keuangan Umum dari Pemerintah Provinsi', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72020202', 72020202, '720202', 'Bantuan Keuangan Khusus dari Pemerintah Provinsi', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72020203', 72020203, '720202', 'Bantuan Keuangan Umum dari Pemerintah Kabupaten/ Kota', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('72020204', 72020204, '720202', 'Bantuan Keuangan Khusus dari Pemerintah Kabupaten/ Kota', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('73010101', 73010101, '730101', 'Pendapatan Hibah dari Pemerintah Pusat-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('73010201', 73010201, '730102', 'Pendapatan Hibah dari Pemerintah Daerah Lainnya-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('73010301', 73010301, '730103', 'Pendapatan Hibah dari Kelompok Masyarakat/Perorangan Dalam Negeri-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('73010401', 73010401, '730104', 'Pendapatan Hibah dari Badan/Lembaga/Organisasi Dalam Negeri/ Luar Negeri-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('73010402', 73010402, '730104', 'Pendapatan Hibah dari Badan/Lembaga/Organisasi Luar Negeri-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('73010403', 73010403, '730104', 'Pendapatan Hibah dari Lembaga/Organisasi Swasta Dalam Negeri-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('73010404', 73010404, '730104', 'Pendapatan Hibah dari Lembaga/Organisasi Swasta Luar Negeri-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('73010501', 73010501, '730105', 'Sumbangan Pihak Ketiga/Sejenis-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('73020101', 73020101, '730201', 'Dana Darurat-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('73030101', 73030101, '730301', 'Pendapatan Hibah Dana BOS-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('73030102', 73030102, '730301', 'Pendapatan atas Pengembalian Hibah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010101', 74010101, '740101', 'Surplus Penjualan Tanah–LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010102', 74010102, '740101', 'Surplus Penjualan Peralatan dan Mesin-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010103', 74010103, '740101', 'Surplus Penjualan Aset Gedung dan Bangunan–LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010104', 74010104, '740101', 'Surplus Penjualan Jalan, Jaringan, dan Irigasi– LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010105', 74010105, '740101', 'Surplus Penjualan Aset Tetap Lainnya–LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010106', 74010106, '740101', 'Surplus Penjualan Aset Lainnya-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010201', 74010201, '740102', 'Surplus Tukar Menukar Tanah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010202', 74010202, '740102', 'Surplus Tukar Menukar Peralatan dan Mesin­LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010203', 74010203, '740102', 'Surplus Tukar Menukar Gedung dan Bangunan-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010204', 74010204, '740102', 'Surplus Tukar Menukar Jalan, Jaringan dan Irigasi-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010205', 74010205, '740102', 'Surplus Tukar Menukar Aset Tetap Lainnya-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010206', 74010206, '740102', 'Surplus Tukar Menukar Aset Lainnya-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010301', 74010301, '740103', 'Surplus Pelepasan Investasi Jangka Panjang Non Permanen-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74010302', 74010302, '740103', 'Surplus Pelepasan Investasi Jangka Panjang Permanen-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020101', 74020101, '740201', 'Surplus Penyelesaian Utang kepada Pemerintah Pusat-Penerusan Pinjaman Dalam Negeri­Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020102', 74020102, '740201', 'Surplus Penyelesaian Utang kepada Pemerintah Pusat-Penerusan Pinjaman Dalam Negeri­Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020103', 74020103, '740201', 'Surplus Penyelesaian Utang kepada Pemerintah Pusat-Penerusan Pinjaman Luar Negeri-Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020104', 74020104, '740201', 'Surplus Penyelesaian Utang kepada Pemerintah Pusat-Penerusan Pinjaman Luar Negeri-Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020105', 74020105, '740201', 'Surplus Penyelesaian Utang kepada Pemerintah Pusat-Sumber Lainnya sesuai dengan Ketentuan Peraturan Perundang-Undangan? Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020106', 74020106, '740201', 'Surplus Penyelesaian Utang kepada Pemerintah Pusat-Sumber Lainnya sesuai dengan Ketentuan Peraturan Perundang-Undangan? Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020201', 74020201, '740202', 'Surplus Penyelesaian Utang kepada LKB? BUMN-Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020202', 74020202, '740202', 'Surplus Penyelesaian Utang kepada LKB? BUMN-Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020203', 74020203, '740202', 'Surplus Penyelesaian Utang kepada LKB? BUMD-Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020204', 74020204, '740202', 'Surplus Penyelesaian Utang kepada LKB? BUMD-Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020205', 74020205, '740202', 'Surplus Penyelesaian Utang kepada LKB? Swasta-Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020206', 74020206, '740202', 'Surplus Penyelesaian Utang kepada LKB? Swasta-Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020301', 74020301, '740203', 'Surplus Penyelesaian Utang kepada LKBB? BUMN-Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020302', 74020302, '740203', 'Surplus Penyelesaian Utang kepada LKBB? BUMN-Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020303', 74020303, '740203', 'Surplus Penyelesaian Utang kepada LKBB? BUMD-Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:45', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020304', 74020304, '740203', 'Surplus Penyelesaian Utang kepada LKBB? BUMD-Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020305', 74020305, '740203', 'Surplus Penyelesaian Utang kepada LKBB? Swasta-Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020306', 74020306, '740203', 'Surplus Penyelesaian Utang kepada LKBB? Swasta-Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('74020401', 74020401, '740204', 'Surplus Penyelesaian Premium (Diskonto) Obligasi-LO', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010101', 81010101, '810101', 'Beban Gaji Pokok ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010102', 81010102, '810101', 'Beban Tunjangan Keluarga ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010103', 81010103, '810101', 'Beban Tunjangan Jabatan ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010104', 81010104, '810101', 'Beban Tunjangan Fungsional ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010105', 81010105, '810101', 'Beban Tunjangan Fungsional Umum ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010106', 81010106, '810101', 'Beban Tunjangan Beras ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010107', 81010107, '810101', 'Beban Tunjangan PPh/Tunjangan Khusus ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010108', 81010108, '810101', 'Beban Pembulatan Gaji ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010109', 81010109, '810101', 'Beban Iuran Jaminan Kesehatan ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010110', 81010110, '810101', 'Beban Iuran Jaminan Kecelakaan Kerja ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010111', 81010111, '810101', 'Beban Iuran Jaminan Kematian ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010201', 81010201, '810102', 'Beban Tambahan Penghasilan berdasarkan Beban Kerja ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010202', 81010202, '810102', 'Beban Tambahan Penghasilan berdasarkan Tempat Bertugas ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010203', 81010203, '810102', 'Beban Tambahan Penghasilan berdasarkan Kondisi Kerja ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010204', 81010204, '810102', 'Beban Tambahan Penghasilan berdasarkan Kelangkaan Profesi ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010205', 81010205, '810102', 'Beban Tambahan Penghasilan berdasarkan Prestasi Kerja ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010301', 81010301, '810103', 'Beban Insentif bagi ASN atas Pemungutan Pajak Daerah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010302', 81010302, '810103', 'Beban Insentif bagi ASN atas Pemungutan Retribusi Daerah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010303', 81010303, '810103', 'Beban Tunjangan Profesi Guru (TPG) PNSD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010304', 81010304, '810103', 'Beban Tunjangan Khusus Guru (TKG) PNSD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010305', 81010305, '810103', 'Beban Tambahan Penghasilan (Tamsil) Guru PNSD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010306', 81010306, '810103', 'Beban Jasa Pelayanan Kesehatan bagi ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010307', 81010307, '810103', 'Beban Jasa Pelayanan Lainnya Sesuai dengan Ketentuan Peraturan Perundang-Undangan', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010401', 81010401, '810104', 'Beban Uang Representasi DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010402', 81010402, '810104', 'Beban Tunjangan Keluarga DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010403', 81010403, '810104', 'Beban Tunjangan Beras DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010404', 81010404, '810104', 'Beban Uang Paket DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010405', 81010405, '810104', 'Beban Tunjangan Jabatan DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010406', 81010406, '810104', 'Beban Tunjangan Alat Kelengkapan DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010407', 81010407, '810104', 'Beban Tunjangan Alat Kelengkapan Lainnya DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010408', 81010408, '810104', 'Beban Tunjangan Komunikasi Intensif Pimpinan dan Anggota DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010409', 81010409, '810104', 'Beban Tunjangan Reses DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010410', 81010410, '810104', 'Beban Pembebanan PPh kepada Pimpinan dan Anggota DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010411', 81010411, '810104', 'Beban Pembulatan Gaji DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010412', 81010412, '810104', 'Beban Tunjangan Kesejahteraan Pimpinan dan Anggota DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010413', 81010413, '810104', 'Beban Tunjangan Transportasi DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010414', 81010414, '810104', 'Beban Uang Jasa Pengabdian DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010501', 81010501, '810105', 'Beban Gaji Pokok KDH/WKDH', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010502', 81010502, '810105', 'Beban Tunjangan Keluarga KDH/WKDH', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010503', 81010503, '810105', 'Beban Tunjangan Jabatan KDH/WKDH', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010504', 81010504, '810105', 'Beban Tunjangan Beras KDH/WKDH', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010505', 81010505, '810105', 'Beban Tunjangan PPh/Tunjangan Khusus KDH/WKDH', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010506', 81010506, '810105', 'Beban Pembulatan Gaji KDH/WKDH', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010507', 81010507, '810105', 'Beban Iuran Jaminan Kesehatan KDH/WKDH', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010508', 81010508, '810105', 'Beban Iuran Jaminan Kecelakaan Kerja KDH/WKDH', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010509', 81010509, '810105', 'Beban Iuran Jaminan Kematian KDH/WKDH', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010510', 81010510, '810105', 'Beban Insentif bagi KDH/WKDH atas Pemungutan Pajak Daerah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010511', 81010511, '810105', 'Beban Insentif bagi KDH/WKDH atas Pemungutan Retribusi Daerah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010601', 81010601, '810106', 'Beban Dana Operasional Pimpinan DPRD', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81010602', 81010602, '810106', 'Beban Dana Operasional KDH/WKDH', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020101', 81020101, '810201', 'Beban Bahan Pakai Habis', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020102', 81020102, '810201', 'Beban Bahan/Material', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020103', 81020103, '810201', 'Beban Cetak/Penggandaan', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020104', 81020104, '810201', 'Beban Makanan dan Minuman', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020105', 81020105, '810201', 'Beban Pakaian Dinas dan Atributnya', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020106', 81020106, '810201', 'Beban Pakaian Kerja', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020107', 81020107, '810201', 'Beban Pakaian Khusus dan Hari-Hari Tertentu', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020201', 81020201, '810202', 'Beban Jasa Kantor', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020202', 81020202, '810202', 'Beban Jasa Asuransi', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020203', 81020203, '810202', 'Beban Sewa Rumah/Gedung/Gudang/Parkir', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020204', 81020204, '810202', 'Beban Sewa Sarana Mobilitas', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020205', 81020205, '810202', 'Beban Sewa Alat Berat', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020206', 81020206, '810202', 'Beban Sewa Perlengkapan dan Peralatan Kantor', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020207', 81020207, '810202', 'Beban Jasa Konsultansi', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020208', 81020208, '810202', 'Beban Jasa Ketersediaan Layanan (Availibility Payment)', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020209', 81020209, '810202', 'Beban Beasiswa Pendidikan PNS', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020210', 81020210, '810202', 'Beban Kursus, Pelatihan, Sosialisasi dan Bimbingan Teknis PNS/PPPK', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020211', 81020211, '810202', 'Beban Jasa Insentif Pemungutan Pajak Daerah bagi Pegawai Non ASN', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020212', 81020212, '810202', 'Beban Jasa Insentif bagi Pegawai Non ASN atas Pemungutan Retribusi', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020301', 81020301, '810203', 'Beban Pemeliharaan Tanah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020302', 81020302, '810203', 'Beban Pemeliharaan Peralatan dan Mesin', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020303', 81020303, '810203', 'Beban Pemeliharaan Gedung dan Bangunan', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020304', 81020304, '810203', 'Beban Pemeliharaan Jalan, Jaringan, dan Irigasi', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020305', 81020305, '810203', 'Beban Pemeliharaan Aset Tetap Lainnya', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020306', 81020306, '810203', 'Beban Perawatan Kendaraan Bermotor', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020401', 81020401, '810204', 'Beban Perjalanan Dinas Dalam Daerah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020402', 81020402, '810204', 'Beban Perjalanan Dinas Luar Daerah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020403', 81020403, '810204', 'Beban Perjalanan Dinas Pindah Tugas', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020404', 81020404, '810204', 'Beban Pemulangan Pegawai', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020501', 81020501, '810205', 'Beban Barang dan/atau Jasa yang Diserahkan kepada Masyarakat/Pihak Ketiga', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020502', 81020502, '810205', 'Beban Barang dan/atau Jasa yang Dijual kepada Masyarakat atau Pihak Ketiga', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81020503', 81020503, '810205', 'Beban Pemberian Uang yang Diberikan kepada Pihak Ketiga/ Masyarakat', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030101', 81030101, '810301', 'Beban Bunga Utang kepada Pemerintah Pusat atas Penerusan Pinjaman Dalam Negeri-Jangka Menengah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030102', 81030102, '810301', 'Beban Bunga Utang kepada Pemerintah Pusat atas Penerusan Pinjaman Dalam Negeri-Jangka Panjang', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030103', 81030103, '810301', 'Beban Bunga Utang kepada Pemerintah Pusat atas Penerusan Pinjaman Luar Negeri-Jangka Menengah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030104', 81030104, '810301', 'Beban Bunga Utang kepada Pemerintah Pusat atas Penerusan Pinjaman Luar Negeri-Jangka Panjang', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030105', 81030105, '810301', 'Beban Bunga Utang kepada Pemerintah Pusat atas Pinjaman Sumber Lainnya sesuai Ketentuan Peraturan Perundang-Undangan? Jangka Menengah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030106', 81030106, '810301', 'Beban Bunga Utang Pinjaman Sumber Lainnya sesuai Ketentuan Peraturan Perundang­Undangan-Jangka Panjang', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030201', 81030201, '810302', 'Beban Bunga Utang atas Pinjaman kepada Pemerintah Daerah Lain-Jangka Pendek', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030301', 81030301, '810303', 'Beban Bunga Utang atas Pinjaman kepada LKB-BUMN-Jangka Pendek', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030302', 81030302, '810303', 'Beban Bunga Utang atas Pinjaman kepada LKB-BUMN-Jangka Menengah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030303', 81030303, '810303', 'Beban Bunga Utang atas Pinjaman kepada LKB-BUMN-Jangka Panjang', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030304', 81030304, '810303', 'Beban Bunga Utang atas Pinjaman kepada LKB-BUMD-Jangka Pendek', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030305', 81030305, '810303', 'Beban Bunga Utang atas Pinjaman kepada LKB-BUMD-Jangka Menengah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030306', 81030306, '810303', 'Beban Bunga Utang atas Pinjaman kepada LKB-BUMD-Jangka Panjang', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030307', 81030307, '810303', 'Beban Bunga Utang atas Pinjaman kepada LKB-Swasta-Jangka Pendek', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030308', 81030308, '810303', 'Beban Bunga Utang atas Pinjaman kepada LKB-Swasta-Jangka Menengah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030309', 81030309, '810303', 'Beban Bunga Utang atas Pinjaman kepada LKB-Swasta-Jangka Panjang', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030401', 81030401, '810304', 'Beban Bunga Utang atas Pinjaman kepada LKBB-BUMN-Jangka Pendek', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030402', 81030402, '810304', 'Beban Bunga Utang atas Pinjaman kepada LKBB-BUMN-Jangka Menengah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030403', 81030403, '810304', 'Beban Bunga Utang atas Pinjaman kepada LKBB-BUMN-Jangka Panjang', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030404', 81030404, '810304', 'Beban Bunga Utang atas Pinjaman kepada LKBB-BUMD-Jangka Pendek', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030405', 81030405, '810304', 'Beban Bunga Utang atas Pinjaman kepada LKBB-BUMD-Jangka Menengah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030406', 81030406, '810304', 'Beban Bunga Utang atas Pinjaman kepada LKBB-BUMD-Jangka Panjang', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030407', 81030407, '810304', 'Beban Bunga Utang atas Pinjaman kepada LKBB-Swasta-Jangka Pendek', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030408', 81030408, '810304', 'Beban Bunga Utang atas Pinjaman kepada LKBB-Swasta-Jangka Menengah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030409', 81030409, '810304', 'Beban Bunga Utang atas Pinjaman kepada LKBB-Swasta-Jangka Panjang', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030501', 81030501, '810305', 'Beban Bunga Utang kepada Masyarakat atas Obligasi', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030601', 81030601, '810306', 'Beban Bunga Utang Pinjaman BLUD-Jangka Pendek', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030602', 81030602, '810306', 'Beban Bunga Utang Pinjaman BLUD-Jangka Menengah', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81030603', 81030603, '810306', 'Beban Bunga Utang Pinjaman BLUD-Jangka Panjang', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81040101', 81040101, '810401', 'Beban Subsidi kepada BUMN ', '0', '', '', '2020-02-11 16:30:46', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81040102', 81040102, '810401', 'Dst ...', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81040201', 81040201, '810402', 'Beban Subsidi kepada BUMD ', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81040202', 81040202, '810402', 'Dst ...', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81040301', 81040301, '810403', 'Beban Subsidi kepada Badan Usaha Miik Swasta ', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81040302', 81040302, '810403', 'Dst ...', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050101', 81050101, '810501', 'Beban Hibah Uang kepada Pemerintah Pusat', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050102', 81050102, '810501', 'Beban Hibah Barang kepada Pemerintah Pusat', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050103', 81050103, '810501', 'Beban Hibah Jasa kepada Pemerintah Pusat', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050201', 81050201, '810502', 'Beban Hibah Uang kepada Pemerintah Daerah Lainnya', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050202', 81050202, '810502', 'Beban Hibah Barang kepada Pemerintah Daerah Lainnya', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050203', 81050203, '810502', 'Beban Hibah Jasa kepada Pemerintah Daerah Lainnya', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050301', 81050301, '810503', 'Beban Hibah Uang kepada BUMN', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050302', 81050302, '810503', 'Beban Hibah Barang kepada BUMN ', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050303', 81050303, '810503', 'Beban Hibah Jasa kepada BUMN ', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050401', 81050401, '810504', 'Beban Hibah Uang kepada BUMD ', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050402', 81050402, '810504', 'Beban Hibah Barang kepada BUMD ', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050403', 81050403, '810504', 'Beban Hibah Jasa kepada BUMD ', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050501', 81050501, '810505', 'Beban Hibah Uang kepada Badan/Lembaga yang Berbadan Hukum Indonesia', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050502', 81050502, '810505', 'Beban Hibah Barang kepada Badan/Lembaga yang Berbadan Hukum Indonesia', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050503', 81050503, '810505', 'Beban Hibah Jasa kepada Badan/Lembaga yang Berbadan Hukum Indonesia', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050504', 81050504, '810505', 'Beban Hibah Uang kepada Organisasi Kemasyarakatan yang Berbadan Hukum Indonesia', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050505', 81050505, '810505', 'Beban Hibah Barang kepada Organisasi Kemasyarakatan yang Berbadan Hukum Indonesia', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050506', 81050506, '810505', 'Beban Hibah Jasa kepada Organisasi Kemasyarakatan yang Berbadan Hukum Indonesia', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050601', 81050601, '810506', 'Beban Hibah Uang Dana BOS yang Diterima oleh Satdikdas Negeri', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050602', 81050602, '810506', 'Beban Hibah Uang Dana BOS yang Diterima oleh Satdikdas Swasta', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050603', 81050603, '810506', 'Beban Hibah Uang Dana BOS yang Diterima oleh Satdikmen Swasta ', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050604', 81050604, '810506', 'Beban Hibah Uang Dana BOS yang Diterima oleh Satdiksus Swasta', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81050701', 81050701, '810507', 'Beban Hibah Bantuan Keuangan Kepada Partai Politik ', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81060101', 81060101, '810601', 'Beban Bantuan Sosial Uang yang Direncanakan kepada Individu', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81060102', 81060102, '810601', 'Beban Bantuan Sosial Barang yang Direncanakan kepada Individu', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81060201', 81060201, '810602', 'Beban Bantuan Sosial Uang yang Direncanakan kepada Keluarga', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81060202', 81060202, '810602', 'Beban Bantuan Sosial Barang yang Direncanakan kepada Keluarga ', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81060301', 81060301, '810603', 'Beban Bantuan Sosial Uang yang Direncanakan kepada Kelompok Masyarakat', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81060302', 81060302, '810603', 'Beban Bantuan Sosial Barang kepada Kelompok Masyarakat', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81060401', 81060401, '810604', 'Beban Bantuan Sosial Uang yang Direncanakan kepada Lembaga Non Pemerintahan (Bidang Pendidikan, Keagamaan dan Bidang Lainnya) ', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('81060402', 81060402, '810604', 'Beban Bantuan Sosial Barang yang Direncanakan kepada Lembaga Non Pemerintahan (Bidang Pendidikan, Keagamaan dan Bidang Lainnya)', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010101', 82010101, '820101', 'Beban Penyusutan Alat Besar Darat', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010102', 82010102, '820101', 'Beban Penyusutan Alat Besar Apung', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010103', 82010103, '820101', 'Beban Penyusutan Alat Bantu', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010201', 82010201, '820102', 'Beban Penyusutan Alat Angkutan Darat Bermotor', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010202', 82010202, '820102', 'Alat Angkutan Darat Tak Bermotor', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010203', 82010203, '820102', 'Beban Penyusutan Alat Angkutan Apung Bermotor', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010204', 82010204, '820102', 'Beban Penyusutan Alat Angkutan Apung Tak Bermotor', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010205', 82010205, '820102', 'Beban Penyusutan Alat Angkutan Bermotor Udara', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010301', 82010301, '820103', 'Beban Penyusutan Alat Bengkel Bermesin', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010302', 82010302, '820103', 'Beban Penyusutan Alat Bengkel Tak Bermesin', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010303', 82010303, '820103', 'Beban Penyusutan Alat Ukur', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010401', 82010401, '820104', 'Beban Penyusutan Alat Pengolahan', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010501', 82010501, '820105', 'Beban Penyusutan Alat Kantor', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010502', 82010502, '820105', 'Beban Penyusutan Alat Rumah Tangga', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010503', 82010503, '820105', 'Beban Penyusutan Meja dan Kursi Kerja/Rapat Pejabat', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010601', 82010601, '820106', 'Beban Penyusutan Alat Studio', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010602', 82010602, '820106', 'Beban Penyusutan Alat Komunikasi', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010603', 82010603, '820106', 'Beban Penyusutan Peralatan Pemancar', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010604', 82010604, '820106', 'Beban Penyusutan Peralatan Komunikasi Navigasi', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010701', 82010701, '820107', 'Beban Penyusutan Alat Kedokteran', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010702', 82010702, '820107', 'Beban Penyusutan Alat Kesehatan Umum', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010801', 82010801, '820108', 'Beban Penyusutan Unit Alat Laboratorium', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010802', 82010802, '820108', 'Beban Penyusutan Unit Alat Laboratorium Nuklir', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010803', 82010803, '820108', 'Beban Penyusutan Alat Peraga Praktik Sekolah', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010804', 82010804, '820108', 'Beban Penyusutan Alat Laboratorium Fisika Nuklir/ Elektronika', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010805', 82010805, '820108', 'Beban Penyusutan Alat Proteksi Radiasi/ Proteksi Lingkungan', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010806', 82010806, '820108', 'Beban Penyusutan Radiation Application and Non Destructive Testing Laboratory Lainnya', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010807', 82010807, '820108', 'Beban Penyusutan Alat Laboratorium Lingkungan Hidup', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010808', 82010808, '820108', 'Beban Penyusutan Peralatan Laboratorium Hydrodinamica', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010809', 82010809, '820108', 'Beban Penyusutan Alat Laboratorium Standarisasi Kalibrasi dan Instrumentasi', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010901', 82010901, '820109', 'Beban Penyusutan Senjata Api', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010902', 82010902, '820109', 'Beban Penyusutan Persenjataan Non Senjata Api', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010903', 82010903, '820109', 'Beban Penyusutan Senjata Sinar', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82010904', 82010904, '820109', 'Beban Penyusutan Alat Khusus Kepolisian', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011001', 82011001, '820110', 'Beban Penyusutan Komputer Unit', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011002', 82011002, '820110', 'Beban Penyusutan Peralatan Komputer', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011101', 82011101, '820111', 'Beban Penyusutan Alat Eksplorasi Topografi', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011102', 82011102, '820111', 'Beban Penyusutan Alat Eksplorasi Geofisika', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011201', 82011201, '820112', 'Beban Penyusutan Alat Pengeboran Mesin', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011202', 82011202, '820112', 'Beban Penyusutan Alat Pengeboran Non Mesin', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011301', 82011301, '820113', 'Beban Penyusutan Sumur', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011302', 82011302, '820113', 'Beban Penyusutan Produksi', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011303', 82011303, '820113', 'Beban Penyusutan Pengolahan dan Pemurnian', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011401', 82011401, '820114', 'Beban Penyusutan Alat Bantu Eksplorasi', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011402', 82011402, '820114', 'Beban Penyusutan Alat Bantu Produksi', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011501', 82011501, '820115', 'Beban Penyusutan Alat Deteksi', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011502', 82011502, '820115', 'Beban Penyusutan Alat Pelindung', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011503', 82011503, '820115', 'Beban Penyusutan Alat SAR', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011504', 82011504, '820115', 'Beban Penyusutan Alat Kerja Penerbangan', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011601', 82011601, '820116', 'Beban Penyusutan Alat Peraga Pelatihan dan Percontohan', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011701', 82011701, '820117', 'Beban Penyusutan Unit Peralatan Proses / Produksi', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011801', 82011801, '820118', 'Beban Penyusutan Rambu-Rambu Lalu Lintas Darat', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011802', 82011802, '820118', 'Beban Penyusutan Rambu-Rambu Lalu Lintas Udara', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011803', 82011803, '820118', 'Beban Penyusutan Rambu-rambu Lalu Lintas Laut', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82011901', 82011901, '820119', 'Beban Penyusutan Peralatan Olahraga', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82020101', 82020101, '820201', 'Bangunan Gedung Tempat Kerja', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82020102', 82020102, '820201', 'Beban Penyusutan Bangunan Gudang Tempat Tinggal', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82020201', 82020201, '820202', 'Beban Penyusutan Candi/Tugu Peringatan/ Prasasti', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82020301', 82020301, '820203', 'Beban Penyusutan Bangunan Menara Perambuan', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82020401', 82020401, '820204', 'Beban Penyusutan Tugu/Tanda Batas', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030101', 82030101, '820301', 'Beban Penyusutan Jalan', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030102', 82030102, '820301', 'Beban Penyusutan Jembatan', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030201', 82030201, '820302', 'Beban Penyusutan Bangunan Air Irigasi', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030202', 82030202, '820302', 'Beban Penyusutan Bangunan Pengairan Pasang Surut', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030203', 82030203, '820302', 'Beban Penyusutan Bangunan Pengembangan Rawa dan Polder', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030204', 82030204, '820302', 'Beban Penyusutan Bangunan Pengaman Sungai/Pantai dan Penanggulangan Bencana Alam', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030205', 82030205, '820302', 'Beban Penyusutan Bangunan Pengembangan Sumber Air dan Air Tanah', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030206', 82030206, '820302', 'Beban Penyusutan Bangunan Air Bersih/Air Baku', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030207', 82030207, '820302', 'Beban Penyusutan Bangunan Air Kotor', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030301', 82030301, '820303', 'Beban Penyusutan Instalasi Air Bersih/Air Baku', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030302', 82030302, '820303', 'Beban Penyusutan Instalasi Air Kotor', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030303', 82030303, '820303', 'Beban Penyusutan Instalasi Pengolahan Sampah', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030304', 82030304, '820303', 'Beban Penyusutan Instalasi Pengolahan Bahan Bangunan', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030305', 82030305, '820303', 'Beban Penyusutan Instalasi Pembangkit Listrik', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030306', 82030306, '820303', 'Beban Penyusutan Instalasi Gardu Listrik', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030307', 82030307, '820303', 'Beban Penyusutan Instalasi Pertahanan', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030308', 82030308, '820303', 'Beban Penyusutan Instalasi Gas', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030309', 82030309, '820303', 'Beban Penyusutan Instalasi Pengaman', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030310', 82030310, '820303', 'Beban Penyusutan Instalasi Lain', '0', '', '', '2020-02-11 16:30:47', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030401', 82030401, '820304', 'Beban Penyusutan Jaringan Air Minum', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030402', 82030402, '820304', 'Beban Penyusutan Jaringan Listrik', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030403', 82030403, '820304', 'Beban Penyusutan Jaringan Telepon', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82030404', 82030404, '820304', 'Beban Penyusutan Jaringan Gas', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82040101', 82040101, '820401', 'Beban Penyusutan Barang Bercorak Kesenian', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82040201', 82040201, '820402', 'Beban Penyusutan Aset Tetap Dalam Renovasi', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82050101', 82050101, '820501', 'Beban Penyusutan Kemitraan denga Pihak Ketiga', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('82060101', 82060101, '820601', 'Beban Amortisasi Aset Tidak Berwujud', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83010101', 83010101, '830101', 'Beban Bagi Hasil Pajak Daerah Kepada Pemerintahan Kabupaten', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83010102', 83010102, '830101', 'Beban Bagi Hasil Pajak Daerah Kepada Pemerintahan Kota', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83010103', 83010103, '830101', 'Beban Bagi Hasil Pajak Daerah Kepada Pemerintahan Desa', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83020101', 83020101, '830201', 'Beban Bantuan Keuangan Umum antar Daerah Provinsi', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83020102', 83020102, '830201', 'Beban Bantuan Keuangan Khusus antar Daerah Provinsi', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83020201', 83020201, '830202', 'Beban Bantuan Keuangan Umum antar Daerah Kabupaten/ Kota', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83020202', 83020202, '830202', 'Beban Bantuan Keuangan Khusus antar Daerah Kabupaten/ Kota', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83020301', 83020301, '830203', 'Beban Bantuan Keuangan Umum Daerah Provinsi ke Kabupaten/Kota', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83020302', 83020302, '830203', 'Beban Bantuan Keuangan Khusus Daerah Provinsi ke Kabupaten/Kota', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83020401', 83020401, '830204', 'Beban Bantuan Keuangan Umum Kabupaten/Kota ke Daerah Provinsi', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83020402', 83020402, '830204', 'Beban Bantuan Keuangan Khusus Kabupaten/Kota ke Daerah Provinsi', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83020501', 83020501, '830205', 'Beban Bantuan Keuangan Umum Daerah Provinsi atau Kabupaten/Kota ke Desa', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83020502', 83020502, '830205', 'Beban Bantuan Keuangan Khusus Daerah Provinsi atau Kabupaten/Kota ke Desa', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('83020601', 83020601, '830206', 'Beban Transfer Dana Otonomi Khusus Provinsi kepada Kabupaten/ Kota', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('84010101', 84010101, '840101', 'Beban Tak Terduga', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010101', 85010101, '850101', 'Defisit Penjualan Tanah-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010102', 85010102, '850101', 'Defisit Penjualan Peralatan dan Mesin-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010103', 85010103, '850101', 'Defisit Penjualan Gedung dan Bangunan–LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010104', 85010104, '850101', 'Defisit Penjualan Jalan, Jaringan, dan Irigasi– LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010105', 85010105, '850101', 'Defisit Penjualan Aset Tetap Lainnya-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010106', 85010106, '850101', 'Defisit Penjualan Aset Lainnya-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010201', 85010201, '850102', 'Defisit Tukar Menukar Tanah-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010202', 85010202, '850102', 'Defisit Tukar Menukar Peralatan dan Mesin-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010203', 85010203, '850102', 'Defisit Tukar Menukar Gedung dan Bangunan­LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010204', 85010204, '850102', 'Defisit Tukar Menukar Jalan, Jaringan dan Irigasi-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010205', 85010205, '850102', 'Defisit Tukar Menukar Aset Tetap Lainnya-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010206', 85010206, '850102', 'Defisit Tukar Menukar Aset Lainnya-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010301', 85010301, '850103', 'Defisit Pelepasan Investasi Jangka Panjang Non Permanen-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85010302', 85010302, '850103', 'Defisit Pelepasan Investasi Jangka Panjang Permanen-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020101', 85020101, '850201', 'Defisit Penyelesaian Utang kepada Pemerintah', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020102', 85020102, '850201', 'Defisit Penyelesaian Utang kepada Pemerintah Pusat-Penerusan Pinjaman Dalam Negeri­Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020103', 85020103, '850201', 'Defisit Penyelesaian Utang kepada Pemerintah Pusat-Penerusan Pinjaman Luar Negeri-Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020104', 85020104, '850201', 'Defisit Penyelesaian Utang kepada Pemerintah Pusat-Penerusan Pinjaman Luar Negeri-Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020105', 85020105, '850201', 'Defisit Penyelesaian Utang kepada Pemerintah Pusat-Sumber Lainnya sesuai dengan Ketentuan Peraturan Perundang-Undangan? Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020106', 85020106, '850201', 'Defisit Penyelesaian Utang kepada Pemerintah Pusat-Sumber Lainnya sesuai dengan Ketentuan Peraturan Perundang-Undangan? Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020201', 85020201, '850202', 'Defisit Penyelesaian Utang kepada LKB-BUMN­Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020202', 85020202, '850202', 'Defisit Penyelesaian Utang kepada LKB-BUMN­Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020203', 85020203, '850202', 'Defisit Penyelesaian Utang kepada LKB-BUMD­Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020204', 85020204, '850202', 'Defisit Penyelesaian Utang kepada LKB-BUMD­Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020205', 85020205, '850202', 'Defisit Penyelesaian Utang kepada LKB-Swasta­Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020206', 85020206, '850202', 'Defisit Penyelesaian Utang kepada LKB-Swasta?', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020301', 85020301, '850203', 'Defisit Penyelesaian Utang kepada LKBB? BUMN-Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020302', 85020302, '850203', 'Defisit Penyelesaian Utang kepada LKBB? BUMN-Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020303', 85020303, '850203', 'Defisit Penyelesaian Utang kepada LKBB? BUMD-Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020304', 85020304, '850203', 'Defisit Penyelesaian Utang kepada LKBB? BUMD-Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020305', 85020305, '850203', 'Defisit Penyelesaian Utang kepada LKBB? Swasta-Jangka Menengah-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020306', 85020306, '850203', 'Defisit Penyelesaian Utang kepada LKBB? Swasta-Jangka Panjang-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objek_rincians` VALUES ('85020401', 85020401, '850204', 'Defisit Penyelesaian Obligasi-LO', '0', '', '', '2020-02-11 16:30:48', NULL, NULL);

-- ----------------------------
-- Table structure for tmrekening_akun_kelompok_jenis_objeks
-- ----------------------------
DROP TABLE IF EXISTS `tmrekening_akun_kelompok_jenis_objeks`;
CREATE TABLE `tmrekening_akun_kelompok_jenis_objeks`  (
  `id` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'menu rekening kode/jenis objek',
  `tmrekening_akun_kelompok_jenis_id` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'diambil dari tmrekening_akun_kelompok_jenis',
  `kd_rek_obj` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_rek_obj` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_rekening` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `klasifikasi_rek` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_akrual` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_aset` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_rek_utang` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_barang` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dasar_hukum` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `kd_rek_akun`(`kd_rek_obj`) USING BTREE,
  INDEX `sikd_rek_jenis_id`(`tmrekening_akun_kelompok_jenis_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmrekening_akun_kelompok_jenis_objeks
-- ----------------------------
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110101', '1101', '110101', 'Kas di Kas Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110102', '1101', '110102', 'Kas di Bendahara Penerimaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110103', '1101', '110103', 'Kas di Bendahara Pengeluaran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-07-16 12:00:53', 'admin', '2020-07-16 04:47:49');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110104', '1101', '110104', 'Kas di BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110105', '1101', '110105', 'Kas Dana BOS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110106', '1101', '110106', 'Kas Dana Kapitasi pada FKTP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110107', '1101', '110107', 'Kas Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110108', '1101', '110108', 'Setara Kas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110201', '1102', '110201', 'Investasi dalam Saham', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110202', '1102', '110202', 'Investasi dalam Deposito', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110203', '1102', '110203', 'Investasi dalam SUN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110204', '1102', '110204', 'Investasi dalam SBI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110205', '1102', '110205', 'Investasi dalam SPN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110206', '1102', '110206', 'Investasi Jangka Pendek BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110301', '1103', '110301', 'Piutang Pajak Kendaraan Bermotor (PKB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110302', '1103', '110302', 'Piutang Bea Balik Nama Kendaraan Bermotor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110303', '1103', '110303', 'Piutang Pajak Bahan Bakar Kendaraan Bermotor (PBBKB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110304', '1103', '110304', 'Piutang Pajak Air Permukaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110305', '1103', '110305', 'Piutang Pajak Rokok', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110306', '1103', '110306', 'Piutang Pajak Hotel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110307', '1103', '110307', 'Piutang Pajak Restoran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110308', '1103', '110308', 'Piutang Pajak Hiburan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110309', '1103', '110309', 'Piutang Pajak Reklame', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110310', '1103', '110310', 'Piutang Pajak Penerangan Jalan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110311', '1103', '110311', 'Piutang Pajak Parkir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110312', '1103', '110312', 'Piutang Pajak Air Tanah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110313', '1103', '110313', 'Piutang Pajak Sarang Burung Walet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110314', '1103', '110314', 'Piutang Pajak Mineral Bukan Logam dan Batuan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110315', '1103', '110315', 'Piutang Pajak Bumi dan Bangunan Pedesaan dan Perkotaan (PBBP2)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110316', '1103', '110316', 'Piutang Bea Perolehan Hak Atas Tanah dan Bangunan (BPHTB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110401', '1104', '110401', 'Piutang Retribusi Jasa Umum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110402', '1104', '110402', 'Piutang Retribusi Jasa Usaha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110403', '1104', '110403', 'Piutang Retribusi Perizinan Tertentu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110501', '1105', '110501', 'Piutang Bagian Laba atas Penyertaan Modal pada BUMN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110502', '1105', '110502', 'Piutang Bagian Laba atas Penyertaan Modal pada BUMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110601', '1106', '110601', 'Piutang Hasil Penjualan BMD yang Tidak Dipisahkan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:02', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110602', '1106', '110602', 'Piutang Hasil Selisih Lebih Tukar Menukar BMD yang Tidak Dipisahkan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110603', '1106', '110603', 'Piutang Hasil Pemanfaatan BMD yang Tidak Dipisahkan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110604', '1106', '110604', 'Piutang Hasil Kerja Sama Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110605', '1106', '110605', 'Piutang Jasa Giro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110606', '1106', '110606', 'Piutang Hasil Pengelolaan Dana Bergulir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110607', '1106', '110607', 'Piutang Pendapatan Bunga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110608', '1106', '110608', 'Piutang Penerimaan atas Tuntutan Ganti Kerugian Keuangan Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110609', '1106', '110609', 'Piutang Penerimaan Komisi, Potongan, atau Bentuk Lain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110610', '1106', '110610', 'Piutang Penerimaan Keuntungan dari Selisih Nilai Tukar Rupiah Terhadap Mata Uang Asing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110611', '1106', '110611', 'Piutang Pendapatan Denda atas Keterlambatan Pelaksanaan Pekerjaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110612', '1106', '110612', 'Piutang Pendapatan Denda Pajak Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110613', '1106', '110613', 'Piutang Pendapatan Denda Retribusi Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110614', '1106', '110614', 'Piutang Pendapatan Hasil Eksekusi atas Jaminan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110615', '1106', '110615', 'Piutang Pendapatan dari Pengembalian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110616', '1106', '110616', 'Piutang Pendapatan BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110617', '1106', '110617', 'Piutang Pendapatan Denda Pemanfaatan BMD yang Tidak Dipisahkan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110618', '1106', '110618', 'Piutang Pendapatan Dana Kapitasi Jaminan Kesehatan Nasional (JKN) pada Fasilitas Kesehatan Tingkat P', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110619', '1106', '110619', 'Piutang Pendapatan Hasil Pengelolaan Dana Bergulir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110620', '1106', '110620', 'Piutang Pendapatan Berdasarkan Putusan Pengadilan (Inkracht)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110621', '1106', '110621', 'Piutang Pendapatan Denda atas Pelanggaran Peraturan Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110622', '1106', '110622', 'Pendapatan Zakat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110701', '1107', '110701', 'Piutang Dana Perimbangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110702', '1107', '110702', 'Piutang Dana Insentif Daerah (DID)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110703', '1107', '110703', 'Piutang Dana Otonomi Khusus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110704', '1107', '110704', 'Piutang Dana Keistimewaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110705', '1107', '110705', 'Piutang Dana Desa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110801', '1108', '110801', 'Piutang Bagi Hasil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110802', '1108', '110802', 'Piutang Bantuan Keuangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110901', '1109', '110901', 'Bagian Lancar Tagihan Jangka Panjang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110902', '1109', '110902', 'Bagian Lancar Tagihan Pinjaman Jangka Panjang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110903', '1109', '110903', 'Bagian Lancar Tagihan Penjualan Angsuran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110904', '1109', '110904', 'Bagian Lancar Tuntutan Ganti Kerugian Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('110905', '1109', '110905', 'Uang Muka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('111001', '1110', '111001', 'Penyisihan Piutang Pendapatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('111002', '1110', '111002', 'Penyisihan Piutang Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('111101', '1111', '111101', 'Beban Dibayar Dimuka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('111201', '1112', '111201', 'Barang Pakai Habis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('111202', '1112', '111202', 'Barang Tak Habis Pakai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('111203', '1112', '111203', 'Barang Bekas Dipakai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('111301', '1113', '111301', 'RK SKPD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('120101', '1201', '120101', 'Investasi kepada Badan Usaha Miik Negara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('120102', '1201', '120102', 'Investasi kepada Badan Usaha Miik Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('120103', '1201', '120103', 'Investasi dalam Obligasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('120104', '1201', '120104', 'Investasi dalam Proyek Pembangunan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('120105', '1201', '120105', 'Dana Bergulir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('120201', '1202', '120201', 'Penyertaan Modal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('120202', '1202', '120202', 'Investasi-Pemberian Pinjaman Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130101', '1301', '130101', 'Tanah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130201', '1302', '130201', 'Alat Besar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130202', '1302', '130202', 'Alat Angkutan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130203', '1302', '130203', 'Alat Bengkel dan Alat Ukur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130204', '1302', '130204', 'Alat Pertanian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130205', '1302', '130205', 'Alat Kantor dan Rumah Tangga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130206', '1302', '130206', 'Alat Studio, Komunikasi, dan Pemancar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130207', '1302', '130207', 'Alat Kedokteran dan Kesehatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130208', '1302', '130208', 'Alat Laboratorium', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130210', '1302', '130210', 'Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130211', '1302', '130211', 'Alat Eksplorasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130212', '1302', '130212', 'Alat Pengeboran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130213', '1302', '130213', 'Alat Produksi, Pengolahan, dan Pemurnian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130214', '1302', '130214', 'Alat Bantu Eksplorasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130215', '1302', '130215', 'Alat Keselamatan Kerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130216', '1302', '130216', 'Alat Peraga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130217', '1302', '130217', 'Peralatan Proses/Produksi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130218', '1302', '130218', 'Rambu-rambu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130219', '1302', '130219', 'Peralatan Olahraga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130301', '1303', '130301', 'Bangunan Gedung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130302', '1303', '130302', 'Monumen', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130303', '1303', '130303', 'Bangunan Menara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130304', '1303', '130304', 'Tugu Titik Kontrol/Pasti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130401', '1304', '130401', 'Jalan dan Jembatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130402', '1304', '130402', 'Bangunan Air', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130403', '1304', '130403', 'Instalasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130404', '1304', '130404', 'Jaringan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130501', '1305', '130501', 'Bahan Perpustakaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130502', '1305', '130502', 'Barang Bercorak Kesenian/Kebudayaan/ Olahraga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130503', '1305', '130503', 'Hewan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130504', '1305', '130504', 'Biota Perairan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130505', '1305', '130505', 'Tanaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130506', '1305', '130506', 'Barang Koleksi Non Budaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130507', '1305', '130507', 'Aset Tetap Dalam Renovasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130601', '1306', '130601', 'Konstruksi Dalam Pengerjaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130701', '1307', '130701', 'Akumulasi Penyusutan Peralatan dan Mesin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130702', '1307', '130702', 'Akumulasi Penyusutan Gedung dan Bangunan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130703', '1307', '130703', 'Akumulasi Penyusutan Jalan, Jaringan, dan Irigasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('130704', '1307', '130704', 'Akumulasi Penyusutan Aset Tetap Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('140101', '1401', '140101', 'Dana Cadangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('150101', '1501', '150101', 'Tagihan Penjualan Angsuran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('150102', '1501', '150102', 'Tuntutan Ganti Kerugian Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('150201', '1502', '150201', 'Kemitraan dengan Pihak Ketiga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('150301', '1503', '150301', 'Aset Tidak Berwujud', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('150401', '1504', '150401', 'Aset Lain-lain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('150501', '1505', '150501', 'Akumulasi Amortisasi Aset Tidak Berwujud', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('150601', '1506', '150601', 'Akumulasi Penyusutan Aset Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210101', '2101', '210101', 'Utang Taspen', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:03', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210102', '2101', '210102', 'Utang Iuran Jaminan Kesehatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210103', '2101', '210103', 'Utang Iuran Jaminan Kecelakaan Kerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210104', '2101', '210104', 'Utang Iuran Jaminan Kematian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210105', '2101', '210105', 'Utang PPh Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210106', '2101', '210106', 'Utang PPN Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210107', '2101', '210107', 'Utang Taperum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210108', '2101', '210108', 'Utang Iuran Wajib Pegawai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210201', '2102', '210201', 'Utang Bunga kepada Pemerintah Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210202', '2102', '210202', 'Utang Bunga kepada Pemerintah Daerah Lain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210203', '2102', '210203', 'Utang Bunga kepada Lembaga Keuangan Bank (LKB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210204', '2102', '210204', 'Utang Bunga kepada Lembaga Keuangan Bukan Bank', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210205', '2102', '210205', 'Utang Bunga kepada Masyarakat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210206', '2102', '210206', 'Utang Bunga BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210301', '2103', '210301', 'Utang Pinjaman dari Pemerintah Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210302', '2103', '210302', 'Utang Pinjaman dari Lembaga Keuangan Bank (LKB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210303', '2103', '210303', 'Utang Pinjaman dari Lembaga Keuangan Bukan Bank (LKBB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210304', '2103', '210304', 'Utang Pinjaman BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210401', '2104', '210401', 'Bagian Lancar Utang Jangka Panjang dari Pemerintah Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210402', '2104', '210402', 'Bagian Lancar Utang Jangka Panjang kepada Lembaga Keuangan Bank (LKB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210403', '2104', '210403', 'Bagian Lancar Utang Jangka Panjang kepada Lembaga Keuangan Bukan Bank (LKBB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210404', '2104', '210404', 'Bagian Lancar Utang Jangka Panjang dari Masyarakat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210405', '2104', '210405', 'Bagian Lancar Utang Jangka Pendek BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210501', '2105', '210501', 'Setoran Kelebihan Pembayaran Dari Pihak III', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210502', '2105', '210502', 'Uang Muka Penjualan Produk Pemda Dari Pihak III', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210503', '2105', '210503', 'Uang Muka Lelang Penjualan Aset Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210601', '2106', '210601', 'Utang Belanja Pegawai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210602', '2106', '210602', 'Utang Belanja Barang dan Jasa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-17 09:13:57', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210603', '2106', '210603', 'Utang Belanja Bunga ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-17 10:54:15', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210604', '2106', '210604', 'Utang Belanja Subsidi ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-17 10:54:15', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210605', '2106', '210605', 'Utang Belanja Hibah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-17 10:54:15', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210606', '2106', '210606', 'Utang Belanja Modal Tanah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-17 10:54:15', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210607', '2106', '210607', 'Utang Belanja Modal Peralatan dan Mesin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-17 10:54:15', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210608', '2106', '210608', 'Utang Belanja Modal Gedung dan Bangunan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210609', '2106', '210609', 'Utang Belanja Modal Jalan, Jaringan, dan Irigasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210610', '2106', '210610', 'Utang Belanja Aset Tetap Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210611', '2106', '210611', 'Utang Belanja Tidak Terduga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210612', '2106', '210612', 'Utang Belanja Bagi Hasil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210613', '2106', '210613', 'Utang Belanja Bantuan Keuangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210701', '2107', '210701', 'Utang Kelebihan Pembayaran PAD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210702', '2107', '210702', 'Utang Kelebihan Pembayaran Transfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210703', '2107', '210703', 'Utang Kelebihan Pembayaran Lain-Lain Pendapatan Daerah yang Sah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('210704', '2107', '210704', 'Utang Transfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('220101', '2201', '220101', 'Utang atas Penerusan Pinjaman Dalam Negeri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('220102', '2201', '220102', 'Utang atas Penerusan Pinjaman Luar Negeri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('220103', '2201', '220103', 'Sumber Lainnya sesuai Ketentuan Peraturan Perundang-Undangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('220201', '2202', '220201', 'Utang kepada LKB-BUMN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('220202', '2202', '220202', 'Utang kepada LKB-BUMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('220203', '2202', '220203', 'Utang kepada LKB-Swasta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('220301', '2203', '220301', 'Utang kepada LKBB-BUMN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('220302', '2203', '220302', 'Utang kepada LKBB-BUMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('220303', '2203', '220303', 'Utang kepada LKBB-Swasta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('220401', '2204', '220401', 'Obligasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('310101', '3101', '310101', 'Ekuitas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('310102', '3101', '310102', 'Surplus/Defisit-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('310201', '3102', '310201', 'Estimasi Pendapatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('310202', '3102', '310202', 'Estimasi Penerimaan Pembiayaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('310203', '3102', '310203', 'Apropriasi Belanja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('310204', '3102', '310204', 'Apropriasi Pengeluaran Pembiayaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('310205', '3102', '310205', 'Estimasi Perubahan SAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('310206', '3102', '310206', 'Surplus/Defisit-LRA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('310301', '3103', '310301', 'RK PPKD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410106', '4101', '410106', 'Pajak Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410107', '4101', '410107', 'Pajak Restoran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410108', '4101', '410108', 'Pajak Hiburan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410109', '4101', '410109', 'Pajak Reklame', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410110', '4101', '410110', 'Pajak Penerangan Jalan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410111', '4101', '410111', 'Pajak Parkir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410112', '4101', '410112', 'Pajak Air Tanah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410113', '4101', '410113', 'Pajak Sarang Burung Walet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410114', '4101', '410114', 'Pajak Mineral Bukan Logam dan Batuan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410115', '4101', '410115', 'Pajak Bumi dan Bangunan Perdesaan dan Perkotaan (PBBP2)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410116', '4101', '410116', 'Bea Perolehan Hak Atas Tanah dan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410301', '4103', '410301', 'Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas Penyertaan Modal pada BUMN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410302', '4103', '410302', 'Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas Penyertaan Modal pada BUMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410401', '4104', '410401', 'Hasil Penjualan BMD yang Tidak Dipisahkan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410402', '4104', '410402', 'Hasil Selisih Lebih Tukar Menukar BMD yang Tidak Dipisahkan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410403', '4104', '410403', 'Hasil Pemanfaatan BMD yang Tidak Dipisahkan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410404', '4104', '410404', 'Hasil Kerja Sama Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410405', '4104', '410405', 'Jasa Giro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410406', '4104', '410406', 'Hasil Pengelolaan Dana Bergulir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410407', '4104', '410407', 'Pendapatan Bunga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410408', '4104', '410408', 'Penerimaan atas Tuntutan Ganti Kerugian Keuangan Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410409', '4104', '410409', 'Penerimaan Komisi, Potongan, atau Bentuk Lain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410410', '4104', '410410', 'Penerimaan Keuntungan dari Selisih Nilai Tukar Rupiah terhadap Mata Uang Asing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410411', '4104', '410411', 'Pendapatan Denda atas Keterlambatan Pelaksanaan Pekerjaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410413', '4104', '410413', 'Pendapatan Denda Retribusi Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410414', '4104', '410414', 'Pendapatan Hasil Eksekusi atas Jaminan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410415', '4104', '410415', 'Pendapatan dari Pengembalian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410416', '4104', '410416', 'Pendapatan BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410417', '4104', '410417', 'Pendapatan Denda Pemanfaatan BMD yang tidak Dipisahkan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410418', '4104', '410418', 'Pendapatan Dana Kapitasi Jaminan Kesehatan Nasional (JKN) pada Fasilitas Kesehatan Tingkat Pertama (', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410419', '4104', '410419', 'Pendapatan Hasil Pengelolaan Dana Bergulir', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410420', '4104', '410420', 'Pendapatan Berdasarkan Putusan Pengadilan (Inkracht)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410421', '4104', '410421', 'Pendapatan Denda atas Pelanggaran Peraturan Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('410422', '4104', '410422', 'Pendapatan Zakat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41101', '411', '41101', 'Pajak Hotel', NULL, 'RPSA', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 09:04:09', NULL, '2020-09-22 09:04:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41102', '411', '41102', 'Pajak Restoran', NULL, 'RPSA', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 09:04:09', NULL, '2020-09-22 09:04:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41103', '411', '41103', 'Pajak Hiburan', NULL, 'RPSA', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 09:04:09', NULL, '2020-09-22 09:04:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41104', '411', '41104', 'Pajak Reklame', NULL, 'RSOA', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 09:04:09', NULL, '2020-09-22 09:04:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41105', '411', '41105', 'Pajak Penerangan Jalan', NULL, 'RPSA', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 09:04:09', NULL, '2020-09-22 09:04:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41106', '411', '41106', 'Pajak Parkir', NULL, 'RPSA', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 09:04:09', NULL, '2020-09-22 09:04:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41107', '411', '41107', 'Pajak Air Tanah', NULL, 'RSOA', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 09:04:09', NULL, '2020-09-22 09:04:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41110', '411', '41110', 'Pajak Bumi dan Bangunan', NULL, 'RSOA', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 09:04:09', NULL, '2020-09-22 09:04:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41111', '411', '41111', 'Bea Perolehan Hak Atas Tanah dan Bangunan', NULL, 'RSOA', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 09:04:09', NULL, '2020-09-22 09:04:09');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41201', '412', '41201', 'Retribusi  Jasa Umum', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:32:41', NULL, '2020-09-25 04:32:41');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41202', '412', '41202', 'Retribusi  Jasa Usaha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:32:41', NULL, '2020-09-25 04:32:41');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41203', '412', '41203', 'Retribusi  Perizinan Tertentu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:32:41', NULL, '2020-09-25 04:32:41');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41403', '414', '41403', 'Penerimaan Jasa Giro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:34:52', NULL, '2020-09-25 04:34:52');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41404', '414', '41404', 'Pendapatan Bunga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:34:52', NULL, '2020-09-25 04:34:52');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41405', '414', '41405', 'Tuntutan Ganti Kerugian Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:34:52', NULL, '2020-09-25 04:34:52');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41407', '414', '41407', 'Pendapatan Denda atas Keterlambatan Pelaksanaan Pekerjaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:34:52', NULL, '2020-09-25 04:34:52');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41408', '414', '41408', 'Pendapatan Denda Pajak', NULL, 'RL', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 09:54:52', NULL, '2020-09-22 09:54:52');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41409', '414', '41409', 'Pendapatan Denda Retribusi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:38:33', NULL, '2020-09-25 04:38:33');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41411', '414', '41411', 'Pendapatan Denda Atas Pelanggaran Perda/Perwal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:38:33', NULL, '2020-09-25 04:38:33');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41413', '414', '41413', 'Pendapatan dari Pengembalian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:38:33', NULL, '2020-09-25 04:38:33');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41416', '414', '41416', 'Hasil dari Pemanfaatan Kekayaan Daerah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:38:33', NULL, '2020-09-25 04:38:33');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41417', '414', '41417', 'Pendapatan BLUD', NULL, 'RL', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-22 10:00:34', NULL, '2020-09-22 10:00:34');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41418', '414', '41418', 'Pendapatan Dana Kapitasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:40:12', NULL, '2020-09-25 04:40:12');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('41420', '414', '41420', 'Lain-Lain PAD yang Sah Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:40:12', NULL, '2020-09-25 04:40:12');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('420101', '4201', '420101', 'Dana Perimbangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('420102', '4201', '420102', 'Dana Insentif Daerah (DID)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('420105', '4201', '420105', 'Dana Desa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('420201', '4202', '420201', 'Pendapatan Bagi Hasil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('420202', '4202', '420202', 'Bantuan Keuangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('42101', '421', '42101', 'Bagi Hasil Pajak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:41:35', NULL, '2020-09-25 04:41:35');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('42102', '421', '42102', 'Bagi Hasil Bukan Pajak / Sumber Daya Alam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:41:35', NULL, '2020-09-25 04:41:35');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('42201', '422', '42201', 'Dana Alokasi Umum (DAU)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:47:41', NULL, '2020-09-25 04:47:41');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('42301', '423', '42301', 'Dana Alokasi Khusus (DAK)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:51:04', NULL, '2020-09-25 04:51:04');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('42302', '423', '42302', 'Dana Alokasi Khusus (DAK) Non Fisik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:51:04', NULL, '2020-09-25 04:51:04');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('430101', '4301', '430101', 'Pendapatan Hibah dari Pemerintah Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('430102', '4301', '430102', 'Pendapatan Hibah dari Pemerintah Daerah Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('430103', '4301', '430103', 'Pendapatan Hibah dari Kelompok Masyarakat/Perorangan Dalam Negeri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('430104', '4301', '430104', 'Pendapatan Hibah dari Badan/Lembaga/Organisasi Dalam Negeri/Luar Negeri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('430105', '4301', '430105', 'Sumbangan Pihak Ketiga/Sejenis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('430201', '4302', '430201', 'Dana Darurat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('430301', '4303', '430301', 'Lain-lain Pendapatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('43105', '431', '43105', 'Hibah Dana BOS Satuan Pendidikan Pada Kecamatan Ciputat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:53:56', NULL, '2020-09-25 04:53:56');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('43106', '431', '43106', 'Hibah Dana BOS Satuan Pendidikan Pada Kecamatan Ciputat Timur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:53:56', NULL, '2020-09-25 04:53:56');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('43107', '431', '43107', 'Hibah Dana BOS Satuan Pendidikan Pada Kecamatan Pamulang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:53:56', NULL, '2020-09-25 04:53:56');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('43108', '431', '43108', 'Hibah Dana BOS Satuan Pendidikan Pada Kecamatan Serpong', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:53:56', NULL, '2020-09-25 04:53:56');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('43109', '431', '43109', 'Hibah Dana BOS Satuan Pendidikan Pada  Kecamatan Serpong Utara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:53:56', NULL, '2020-09-25 04:53:56');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('43110', '431', '43110', 'Hibah Dana BOS Satuan Pendidikan Pada  Kecamatan Pondok Aren', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:53:56', NULL, '2020-09-25 04:53:56');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('43111', '431', '43111', 'Hibah Dana BOS Satuan Pendidikan Pada  Kecamatan Setu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:53:56', NULL, '2020-09-25 04:53:56');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('43301', '433', '43301', 'Dana Bagi Hasil Pajak Dari Provinsi Banten', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:55:51', NULL, '2020-09-25 04:55:51');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('43401', '434', '43401', 'Dana Penyesuaian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:56:40', NULL, '2020-09-25 04:56:40');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('43501', '435', '43501', 'Bantuan Keuangan dari Provinsi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:57:26', NULL, '2020-09-25 04:57:26');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510101', '5101', '510101', 'Belanja Gaji dan Tunjangan ASN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510102', '5101', '510102', 'Belanja Tambahan Penghasilan ASN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510103', '5101', '510103', 'Tambahan Penghasilan berdasarkan Pertimbangan Objektif Lainnya ASN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510104', '5101', '510104', 'Belanja Gaji dan Tunjangan DPRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510105', '5101', '510105', 'Belanja Gaji dan Tunjangan KDH/WKDH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510106', '5101', '510106', 'Belanja Penerimaan Lainnya Pimpinan DPRD serta KDH/WKDH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510201', '5102', '510201', 'Belanja Barang ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510202', '5102', '510202', 'Belanja Jasa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510203', '5102', '510203', 'Belanja Pemeliharaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510204', '5102', '510204', 'Belanja Perjalanan Dinas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510205', '5102', '510205', 'Belanja Barang dan/atau Jasa untuk Diserahkan/Dijual/ Diberikan kepada Masyarakat/ Pihak Ketiga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510301', '5103', '510301', 'Belanja Bunga Utang Pinjaman kepada Pemerintah Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510302', '5103', '510302', 'Belanja Bunga Utang Pinjaman kepada Pemerintah Daerah Lain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510303', '5103', '510303', 'Belanja Bunga Utang Pinjaman kepada Lembaga Keuangan Bank (LKB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510304', '5103', '510304', 'Belanja Bunga Utang Pinjaman kepada Lembaga Keuangan Bukan Bank (LKBB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510305', '5103', '510305', 'Belanja Bunga Utang Kepada Masyarakat (Obligasi)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510306', '5103', '510306', 'Belanja Bunga Utang Pinjaman BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510401', '5104', '510401', 'Belanja Subsidi kepada BUMN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510402', '5104', '510402', 'Belanja Subsidi kepada BUMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510403', '5104', '510403', 'Belanja Subsidi kepada Badan Usaha Miik Swasta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510501', '5105', '510501', 'Belanja Hibah kepada Pemerintah Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510502', '5105', '510502', 'Belanja Hibah kepada Pemerintah Daerah Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510503', '5105', '510503', 'Belanja Hibah kepada BUMN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510504', '5105', '510504', 'Belanja Hibah kepada BUMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510505', '5105', '510505', 'Belanja Hibah kepada Badan, Lembaga, Organisasi Kemasyarakatan yang Berbadan Hukum Indonesia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510506', '5105', '510506', 'Belanja Hibah Dana BOS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510507', '5105', '510507', 'Belanja Hibah Bantuan Keuangan kepada Partai Politik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510601', '5106', '510601', 'Belanja Bantuan Sosial kepada Individu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510602', '5106', '510602', 'Belanja Bantuan Sosial kepada Keluarga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510603', '5106', '510603', 'Belanja Bantuan Sosial kepada Kelompok Masyarakat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('510604', '5106', '510604', 'Belanja Bantuan Sosial kepada Lembaga Non Pemerintahan (Bidang Pendidikan, Keagamaan dan Bidang Lain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520101', '5201', '520101', 'Belanja Modal Tanah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520201', '5202', '520201', 'Belanja Modal Alat Besar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:04', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520202', '5202', '520202', 'Belanja Modal Alat Angkutan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520203', '5202', '520203', 'Belanja Modal Alat Bengkel dan Alat Ukur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520204', '5202', '520204', 'Belanja Modal Alat Pertanian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520205', '5202', '520205', 'Belanja Modal Alat Kantor dan Rumah Tangga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520206', '5202', '520206', 'Belanja Modal Alat Studio, Komunikasi, dan Pemancar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520207', '5202', '520207', 'Belanja Modal Alat Kedokteran dan Kesehatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520208', '5202', '520208', 'Belanja Modal Alat Laboratorium', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520210', '5202', '520210', 'Belanja Modal Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520211', '5202', '520211', 'Belanja Modal Alat Eksplorasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520212', '5202', '520212', 'Belanja Modal Alat Pengeboran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520213', '5202', '520213', 'Belanja Modal Alat Produksi, Pengolahan, dan Pemurnian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520214', '5202', '520214', 'Belanja Modal Alat Bantu Eksplorasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520215', '5202', '520215', 'Belanja Modal Alat Keselamatan Kerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520216', '5202', '520216', 'Belanja Modal Alat Peraga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520217', '5202', '520217', 'Belanja Modal Peralatan Proses/Produksi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520218', '5202', '520218', 'Belanja Modal Rambu-Rambu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520219', '5202', '520219', 'Belanja Modal Peralatan Olahraga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520301', '5203', '520301', 'Belanja Modal Bangunan Gedung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520302', '5203', '520302', 'Belanja Modal Monumen', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520303', '5203', '520303', 'Belanja Modal Bangunan Menara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520304', '5203', '520304', 'Belanja Modal Tugu Titik Kontrol/Pasti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520401', '5204', '520401', 'Belanja Modal Jalan dan Jembatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520402', '5204', '520402', 'Belanja Modal Bangunan Air', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520403', '5204', '520403', 'Belanja Modal Instalasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520404', '5204', '520404', 'Belanja Modal Jaringan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520501', '5205', '520501', 'Belanja Modal Bahan Perpustakaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520502', '5205', '520502', 'Belanja Modal Barang Bercorak Kesenian/ Kebudayaan/ Olahraga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520503', '5205', '520503', 'Belanja Modal Hewan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520504', '5205', '520504', 'Belanja Modal Biota Perairan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520505', '5205', '520505', 'Belanja Modal Tanaman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520506', '5205', '520506', 'Belanja Modal Barang Koleksi Non Budaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('520507', '5205', '520507', 'Belanja Modal Aset Tetap Dalam Renovasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('530101', '5301', '530101', 'Belanja Tidak Terduga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('540101', '5401', '540101', 'Belanja Bagi Hasil Pajak Daerah Kepada Pemerintahan Kabupaten/Kota dan Desa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('540201', '5402', '540201', 'Belanja Bantuan Keuangan antar Daerah Provinsi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('540202', '5402', '540202', 'Belanja Bantuan Keuangan antar Daerah Kabupaten/ Kota', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('540203', '5402', '540203', 'Belanja Bantuan Keuangan Daerah Provinsi ke Kabupaten/Kota', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('540204', '5402', '540204', 'Belanja Bantuan Keuangan Kabupaten/Kota ke Daerah Provinsi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('540205', '5402', '540205', 'Belanja Bantuan Keuangan Daerah Provinsi atau Kabupaten/Kota kepada Desa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('540206', '5402', '540206', 'Belanja Transfer Dana Otonomi Khusus Provinsi kepada Kabupaten/Kota', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610101', '6101', '610101', 'Pelampauan Penerimaan PAD ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610102', '6101', '610102', 'Pelampauan Penerimaan Pendapatan Transfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610103', '6101', '610103', 'Pelampauan Penerimaan Lain-Lain Pendapatan Daerah yang Sah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610104', '6101', '610104', 'Pelampauan Penerimaan Pembiayaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610105', '6101', '610105', 'Penghematan Belanja ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610106', '6101', '610106', 'Kewajiban kepada Pihak Ketiga sampai dengan Akhir Tahun Belum Terselesaikan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610107', '6101', '610107', 'Sisa Dana Akibat Tidak Tercapainya Capaian Target Kinerja dan Sisa Dana Pengeluaran Pembiayaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610108', '6101', '610108', 'Sisa Belanja Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610201', '6102', '610201', 'Pencairan Dana Cadangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610301', '6103', '610301', 'Hasil Penjualan Kekayaan Daerah yang Dipisahkan pada Badan Usaha Miik Negara (BUMN)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610302', '6103', '610302', 'Hasil Penjualan Kekayaan Daerah yang Dipisahkan pada Badan Usaha Miik Daerah (BUMD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610401', '6104', '610401', 'Pinjaman Daerah dari Pemerintah Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610402', '6104', '610402', 'Pinjaman Daerah dari Pemerintah Daerah Lain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610403', '6104', '610403', 'Pinjaman Daerah dari Lembaga Keuangan Bank (LKB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610404', '6104', '610404', 'Pinjaman Daerah dari Lembaga Keuangan Bukan Bank (LKBB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610405', '6104', '610405', 'Pinjaman Daerah dari Masyarakat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610501', '6105', '610501', 'Penerimaan Kembali Pemberian Pinjaman Daerah kepada Pemerintah Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610502', '6105', '610502', 'Penerimaan Kembali Pemberian Pinjaman Daerah kepada Pemerintah Daerah Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610503', '6105', '610503', 'Penerimaan Kembali Pinjaman kepada BUMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610504', '6105', '610504', 'Penerimaan Kembali Pinjaman kepada BUMN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610505', '6105', '610505', 'Penerimaan Kembali Pinjaman kepada Koperasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610506', '6105', '610506', 'Penerimaan Kembali Pinjaman kepada Masyarakat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610507', '6105', '610507', 'Penerimaan Kembali Dana Bergulir kepada BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('610601', '6106', '610601', 'Penerimaan Kembali Pinjaman BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620101', '6201', '620101', 'Pembentukan Dana Cadangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620201', '6202', '620201', 'Penyertaan Modal Daerah pada Badan Usaha Miik Negara (BUMN)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620202', '6202', '620202', 'Penyertaan Modal Daerah pada Badan Usaha Miik Daerah (BUMD)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620301', '6203', '620301', 'Pembayaran Pinjaman Daerah dari Pemerintah Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620302', '6203', '620302', 'Pembayaran Pinjaman dari Pemerintah Daerah Lain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620303', '6203', '620303', 'Pembayaran Pinjaman dari Lembaga Keuangan Bank (LKB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620304', '6203', '620304', 'Pembayaran Pinjaman dari Lembaga Keuangan Bukan Bank (LKBB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620305', '6203', '620305', 'Pembayaran Pinjaman Daerah dari Masyarakat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620401', '6204', '620401', 'Pemberian Pinjaman Daerah kepada Pemerintah Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620402', '6204', '620402', 'Pemberian Pinjaman Daerah kepada Pemerintah Daerah Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620403', '6204', '620403', 'Pemberian Pinjaman Daerah kepada BUMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620404', '6204', '620404', 'Pemberian Pinjaman Daerah kepada BUMN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620405', '6204', '620405', 'Pemberian Pinjaman Daerah kepada Koperasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620406', '6204', '620406', 'Pemberian Pinjaman Daerah kepada Masyarakat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620407', '6204', '620407', 'Pemberian Pinjaman-Dana Bergulir kepada BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('620501', '6205', '620501', 'Pinjaman BLUD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-17 08:48:28', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710101', '7101', '710101', 'Pajak Kendaraan Bermotor (PKB)-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710102', '7101', '710102', 'Bea Balik Nama Kendaraan Bermotor (BBNKB)– LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710103', '7101', '710103', 'Pajak Bahan Bakar Kendaraan Bermotor (PBBKB)-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710104', '7101', '710104', 'Pajak Air Permukaan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710105', '7101', '710105', 'Pajak Rokok–LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710106', '7101', '710106', 'Pajak Hotel-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710107', '7101', '710107', 'Pajak Restoran–LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710108', '7101', '710108', 'Pajak Hiburan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710109', '7101', '710109', 'Pajak Reklame-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710110', '7101', '710110', 'Pajak Penerangan Jalan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710111', '7101', '710111', 'Pajak Parkir-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710112', '7101', '710112', 'Pajak Air Tanah-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710113', '7101', '710113', 'Pajak Sarang Burung Walet-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710114', '7101', '710114', 'Pajak Mineral Bukan Logam dan Batuan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710115', '7101', '710115', 'Pajak Bumi dan Bangunan Perdesaan dan Perkotaan (PBBP2)-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710116', '7101', '710116', 'Bea Perolehan Hak Atas Tanah dan Bangunan (BPHTB) -LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710201', '7102', '710201', 'Retribusi Jasa Umum-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710202', '7102', '710202', 'Retribusi Jasa Usaha-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710203', '7102', '710203', 'Retribusi Perizinan Tertentu-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710301', '7103', '710301', 'Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas Penyertaan Modal pada BUMN-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710302', '7103', '710302', 'Bagian Laba yang Dibagikan kepada Pemerintah Daerah (Dividen) atas Penyertaan Modal pada BUMD-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710401', '7104', '710401', 'Hasil Penjualan BMD yang Tidak Dipisahkan­LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710402', '7104', '710402', 'Hasil Selisih Lebih Tukar Menukar BMD yang Tidak Dipisahkan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710403', '7104', '710403', 'Hasil Pemanfaatan BMD yang Tidak Dipisahkan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710404', '7104', '710404', 'Hasi Kerja Sama Daerah-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710405', '7104', '710405', 'Jasa Giro-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710406', '7104', '710406', 'Hasil Pengelolaan Dana Bergulir-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710407', '7104', '710407', 'Pendapatan Bunga-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710408', '7104', '710408', 'Penerimaan atas Tuntutan Ganti Kerugian Keuangan Daerah-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710409', '7104', '710409', 'Penerimaan Komisi, Potongan, atau Bentuk Lain-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710410', '7104', '710410', 'Penerimaan Keuntungan dari Selisih Nilai Tukar Rupiah terhadap Mata Uang Asing-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710411', '7104', '710411', 'Pendapatan Denda atas Keterlambatan Pelaksanaan Pekerjaan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710413', '7104', '710413', 'Pendapatan Denda Retribusi Daerah-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710414', '7104', '710414', 'Pendapatan Hasil Eksekusi atas Jaminan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710415', '7104', '710415', 'Pendapatan dari Pengembalian-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710416', '7104', '710416', 'Pendapatan dari BLUD-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710417', '7104', '710417', 'Pendapatan Denda Pemanfaatan BMD yang Tidak Dipisahkan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710418', '7104', '710418', 'Pendapatan Dana Kapitasi Jaminan Kesehatan Nasional (JKN) pada Fasilitas Kesehatan Tingkat Pertama (', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710419', '7104', '710419', 'Pendapatan Hasil Pengelolaan Dana Bergulir­LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710420', '7104', '710420', 'Pendapatan Berdasarkan Putusan Pengadilan (Inkracht) -LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710421', '7104', '710421', 'Pendapatan Denda atas Pelanggaran Peraturan Daerah-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('710422', '7104', '710422', 'Pendapatan Zakat-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('720101', '7201', '720101', 'Dana Perimbangan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('720102', '7201', '720102', 'Dana Insentif Daerah (DID)-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('720103', '7201', '720103', 'Dana Otonomi Khusus-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('720104', '7201', '720104', 'Dana Keistimewaan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('720105', '7201', '720105', 'Dana Desa-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('720201', '7202', '720201', 'Pendapatan Bagi Hasil-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('720202', '7202', '720202', 'Bantuan Keuangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('730101', '7301', '730101', 'Pendapatan Hibah dari Pemerintah Pusat-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('730102', '7301', '730102', 'Pendapatan Hibah dari Pemerintah Daerah Lainnya-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('730103', '7301', '730103', 'Pendapatan Hibah dari Kelompok Masyarakat/Perorangan Dalam Negeri-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('730104', '7301', '730104', 'Pendapatan Hibah dari Badan/Lembaga/Organisasi Dalam Negeri/ Luar Negeri-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('730105', '7301', '730105', 'Sumbangan Pihak Ketiga/Sejenis-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('730201', '7302', '730201', 'Dana Darurat-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('730301', '7303', '730301', 'Lain-lain Pendapatan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('740101', '7401', '740101', 'Surplus Penjualan BMD yang Tidak Dipisahkan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('740102', '7401', '740102', 'Surplus Pertukaran BMD yang Tidak Dipisahkan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('740103', '7401', '740103', 'Surplus Pelepasan Investasi Jangka Panjang­LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('740201', '7402', '740201', 'Surplus Penyelesaian Utang kepada Pemerintah Pusat-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('740202', '7402', '740202', 'Surplus Penyelesaian Utang kepada Lembaga Keuangan Bank (LKB)-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('740203', '7402', '740203', 'Surplus Penyelesaian Utang kepada Lembaga Keuangan Bukan Bank (LKBB)-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:05', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('740204', '7402', '740204', 'Surplus Penyelesaian Premium (Diskonto) Obligasi-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810101', '8101', '810101', 'Beban Gaji dan Tunjangan ASN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810102', '8101', '810102', 'Beban Tambahan Penghasilan ASN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810103', '8101', '810103', 'Beban Tambahan Penghasilan berdasarkan Pertimbangan Objektif Lainnya ASN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810104', '8101', '810104', 'Beban Gaji dan Tunjangan DPRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810105', '8101', '810105', 'Beban Gaji dan Tunjangan KDH/WKDH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810106', '8101', '810106', 'Beban Penerimaan Lainnya Pimpinan DPRD serta KDH/WKDH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810201', '8102', '810201', 'Beban Barang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810202', '8102', '810202', 'Beban Jasa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810203', '8102', '810203', 'Beban Pemeliharaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810204', '8102', '810204', 'Beban Perjalanan Dinas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810205', '8102', '810205', 'Beban Barang untuk Diserahkan/Dijual/ Diberikan kepada Masyarakat/Pihak Ketiga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810301', '8103', '810301', 'Beban Bunga Utang kepada Pemerintah Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810302', '8103', '810302', 'Beban Bunga Utang atas Pinjaman kepada Pemerintah Daerah Lain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810303', '8103', '810303', 'Beban Bunga Utang Pinjaman kepada Lembaga Keuangan Bank (LKB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810304', '8103', '810304', 'Beban Bunga Utang atas Pinjaman kepada Lembaga Keuangan Bukan Bank (LKBB)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810305', '8103', '810305', 'Beban Bunga Utang Kepada Masyarakat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810306', '8103', '810306', 'Beban Bunga Utang Pinjaman BLUD-Jangka Pendek', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810401', '8104', '810401', 'Beban Subsidi kepada BUMN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810402', '8104', '810402', 'Beban Subsidi kepada BUMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810403', '8104', '810403', 'Beban Subsidi kepada Badan Usaha Miik Swasta', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810501', '8105', '810501', 'Beban Hibah kepada Pemerintah Pusat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810502', '8105', '810502', 'Beban Hibah kepada Pemerintah Daerah Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810503', '8105', '810503', 'Beban Hibah kepada BUMN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810504', '8105', '810504', 'Beban Hibah Uang kepada BUMD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810505', '8105', '810505', 'Beban Hibah kepada Badan, Lembaga, Organisasi Kemasyarakatan yang Berbadan Hukum Indonesia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810506', '8105', '810506', 'Beban Hibah Dana BOS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810507', '8105', '810507', 'Beban Hibah Bantuan Keuangan Kepada Partai Politik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810601', '8106', '810601', 'Beban Bantuan Sosial Uang kepada Individu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810602', '8106', '810602', 'Beban Bantuan Sosial Uang kepada Keluarga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810603', '8106', '810603', 'Beban Bantuan Sosial Uang kepada Kelompok Masyarakat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('810604', '8106', '810604', 'Beban Bantuan Sosial Uang kepada Lembaga Non Pemerintahan (Bidang Pendidikan, Keagamaan dan Bidang L', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820101', '8201', '820101', 'Beban Penyusutan Alat Besar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820102', '8201', '820102', 'Beban Penyusutan Alat Angkutan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820103', '8201', '820103', 'Beban Penyusutan Alat Bengkel dan Alat Ukur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820104', '8201', '820104', 'Beban Penyusutan Alat Pertanian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820105', '8201', '820105', 'Beban Penyusutan Alat Kantor dan Rumah Tangga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820106', '8201', '820106', 'Beban Penyusutan Alat Studio, Komunikasi, dan Pemancar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820107', '8201', '820107', 'Beban Penyusutan Alat Kedokteran dan Kesehatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820108', '8201', '820108', 'Beban Penyusutan Alat Laboratorium', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820109', '8201', '820109', 'Beban Penyusutan Alat Persenjataan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820110', '8201', '820110', 'Beban Penyusutan Komputer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820111', '8201', '820111', 'Beban Penyusutan Alat Eksplorasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820112', '8201', '820112', 'Beban Penyusutan Alat Pengeboran', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820113', '8201', '820113', 'Beban Penyusutan Alat Produksi, Pengolahan dan Pemurnian', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820114', '8201', '820114', 'Beban Penyusutan Alat Bantu Eksplorasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820115', '8201', '820115', 'Beban Penyusutan Alat Keselamatan Kerja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820116', '8201', '820116', 'Beban Penyusutan Alat Peraga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820117', '8201', '820117', 'Beban Penyusutan Peralatan Proses/Produksi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820118', '8201', '820118', 'Beban Penyusutan Rambu-Rambu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820119', '8201', '820119', 'Beban Penyusutan Peralatan Olahraga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820201', '8202', '820201', 'Beban Penyusutan Bangunan Gedung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820202', '8202', '820202', 'Beban Penyusutan Monumen', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820203', '8202', '820203', 'Beban Penyusutan Bangunan Menara', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820204', '8202', '820204', 'Beban Penyusutan Tugu Titik Kontrol/Pasti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820301', '8203', '820301', 'Beban Penyusutan Jalan dan Jembatan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820302', '8203', '820302', 'Beban Penyusutan Bangunan Air', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820303', '8203', '820303', 'Beban Penyusutan Instalasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820304', '8203', '820304', 'Beban Penyusutan Jaringan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820401', '8204', '820401', 'Beban Penyusutan Barang Bercorak Kesenian/ Kebudayaan/ Olahraga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820402', '8204', '820402', 'Beban Penyusutan Aset Tetap Dalam Renovasi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820501', '8205', '820501', 'Beban Penyusutan Aset Lainnya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('820601', '8206', '820601', 'Beban Amortisasi Aset Tidak Berwujud', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('830101', '8301', '830101', 'Beban Bagi Hasil Pajak Daerah Kepada Pemerintahan Kabupaten/Kota dan Desa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('830201', '8302', '830201', 'Beban Bantuan Keuangan antar Daerah Provinsi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('830202', '8302', '830202', 'Beban Bantuan Keuangan antar Daerah Kabupaten/ Kota', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('830203', '8302', '830203', 'Beban Bantuan Keuangan Daerah Provinsi ke Kabupaten/ Kota', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('830204', '8302', '830204', 'Beban Bantuan Keuangan Kabupaten/Kota ke Daerah Provinsi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('830205', '8302', '830205', 'Beban Bantuan Keuangan Daerah Provinsi atau Kabupaten/Kota ke Desa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('830206', '8302', '830206', 'Beban Transfer Dana Otonomi Khusus Provinsi kepada Kabupaten/ Kota', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('840101', '8401', '840101', 'Beban Tak Terduga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('850101', '8501', '850101', 'Defisit Penjualan BMD yang Tidak Dipisahkan­LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('850102', '8501', '850102', 'Defisit Tukar Menukar BMD yang Tidak Dipisahkan-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('850103', '8501', '850103', 'Defisit Pelepasan Investasi Jangka Panjang-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('850201', '8502', '850201', 'Defisit Penyelesaian Utang kepada Pemerintah Pusat-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('850202', '8502', '850202', 'Defisit Penyelesaian Utang kepada Lembaga Keuangan Bank (LKB)-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('850203', '8502', '850203', 'Defisit Penyelesaian Utang kepada Lembaga Keuangan Bukan Bank (LKBB)-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('850204', '8502', '850204', 'Defisit Penyelesaian Obligasi-LO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2020-02-11 16:21:06', NULL, NULL);
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('91101', '911', '91101', 'Penerimaan Perhitungan Fihak Ketiga (PFK)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-07-16 06:52:55', NULL, '2020-07-16 06:52:55');
INSERT INTO `tmrekening_akun_kelompok_jenis_objeks` VALUES ('92101', '921', '92101', 'Pengeluaran Perhitungan Fihak Ketiga (PFK)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2020-07-16 06:53:07', NULL, '2020-07-16 06:53:07');

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
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('41', '4', '41', 'PENDAPATAN ASLI DAERAH (PAD)', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:07:15', NULL, '2020-09-25 04:07:15');
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('42', '4', '42', 'DANA PERIMBANGAN', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:07:15', NULL, '2020-09-25 04:07:15');
INSERT INTO `tmrekening_akun_kelompoks` VALUES ('43', '4', '43', 'LAIN-LAIN PENDAPATAN DAERAH YANG SAH', NULL, NULL, NULL, NULL, NULL, 'admin', '2020-09-25 04:07:15', NULL, '2020-09-25 04:07:15');

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
INSERT INTO `tmrekening_akuns` VALUES ('4', '4', 'PENDAPATAN DAERAH', NULL, NULL, NULL, NULL, '', '2020-02-03 16:11:49', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for tmsikd_bidangs
-- ----------------------------
DROP TABLE IF EXISTS `tmsikd_bidangs`;
CREATE TABLE `tmsikd_bidangs`  (
  `id` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tmsikd_urusan_id` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'diambil dari tmsikd_urusan',
  `kd_bidang` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_bidang` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tmsikd_fungsi_id` int(11) NULL DEFAULT NULL COMMENT 'diambil dari tmsikd_fungsi',
  `tmsikd_musren_bidang_id` int(11) NULL DEFAULT NULL COMMENT 'diambil dari tmsikd_musren_bidang',
  `tmsikd_bidang_p13_id` int(11) NULL DEFAULT NULL,
  `ket` tinyint(2) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `kd_bidang`(`kd_bidang`) USING BTREE,
  INDEX `sikd_fungsi_id`(`tmsikd_fungsi_id`) USING BTREE,
  INDEX `tmsikd_urusan_id`(`tmsikd_urusan_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmsikd_bidangs
-- ----------------------------
INSERT INTO `tmsikd_bidangs` VALUES ('101', '1', '101', 'URUSAN PEMERINTAHAN BIDANG PENDIDIKAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('102', '1', '102', 'URUSAN PEMERINTAHAN BIDANG KESEHATAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('103', '1', '103', 'URUSAN PEMERINTAHAN BIDANG PEKERJAAN UMUM  DAN PENATAAN RUANG', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('104', '1', '104', 'URUSAN PEMERINTAHAN BIDANG PERUMAHAN DAN KAWASAN PERMUKIMAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('105', '1', '105', 'URUSAN PEMERINTAHAN  BIDANG KETENTERAMAN DAN KETERTIBAN UMUM SERTA PERLINDUNGAN MASYARAKAT', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('106', '1', '106', 'URUSAN PEMERINTAHAN BIDANG SOSIAL', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('207', '2', '207', 'URUSAN  PEMERINTAHAN  BIDANG  TENAGA KERJA', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('208', '2', '208', 'URUSAN PEMERINTAHAN BIDANG PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('209', '2', '209', 'URUSAN PEMERINTAHAN BIDANG PANGAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('210', '2', '210', 'URUSAN PEMERINTAHAN BIDANG PERTANAHAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('211', '2', '211', 'URUSAN PEMERINTAHAN BIDANG LINGKUNGAN HIDUP', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('212', '2', '212', 'URUSAN PEMERINTAHAN BIDANG ADMINISTRASI KEPENDUDUKAN DAN PENCATATAN SIPIL', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('213', '2', '213', 'URUSAN PEMERINTAHAN BIDANG PEMBERDAYAAN MASYARAKAT DAN DESA', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('214', '2', '214', 'URUSAN PEMERINTAHAN BIDANG PENGENDALIAN  PENDUDUK  DAN  KELUARGA BERENCANA', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('215', '2', '215', 'URUSAN PEMERINTAHAN BIDANG PERHUBUNGAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('216', '2', '216', 'URUSAN PEMERINTAHAN BIDANG KOMUNIKASI DAN INFORMATIKA', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('217', '2', '217', 'URUSAN  PEMERINTAHAN  BIDANG  KOPERASI, USAHA KECIL, DAN MENENGAH', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('218', '2', '218', 'URUSAN PEMERINTAHAN BIDANG PENANAMAN MODAL', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('219', '2', '219', 'URUSAN PEMERINTAHAN BIDANG KEPEMUDAAN DAN OLAHRAGA', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('220', '2', '220', 'URUSAN PEMERINTAHAN BIDANG STATISTIK', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('221', '2', '221', 'URUSAN PEMERINTAHAN BIDANG PERSANDIAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('222', '2', '222', 'URUSAN PEMERINTAHAN BIDANG KEBUDAYAAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('223', '2', '223', 'URUSAN PEMERINTAHAN BIDANG PERPUSTAKAAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('224', '2', '224', 'URUSAN PEMERINTAHAN BIDANG KEARSIPAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('325', '3', '325', 'URUSAN  PEMERINTAHAN  BIDANG  KELAUTAN DAN PERIKANAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('326', '3', '326', 'URUSAN PEMERINTAHAN BIDANG PARIWISATA', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('327', '3', '327', 'URUSAN PEMERINTAHAN BIDANG PERTANIAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('328', '3', '328', 'URUSAN PEMERINTAHAN BIDANG KEHUTANAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('330', '3', '330', 'URUSAN PEMERINTAHAN BIDANG PERDAGANGAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('331', '3', '331', 'URUSAN PEMERINTAHAN BIDANG PERINDUSTRIAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('332', '3', '332', 'URUSAN PEMERINTAHAN BIDANG TRANSMIGRASI', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('401', '4', '401', 'SEKRETARIAT DAERAH', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('402', '4', '402', 'SEKRETARIAT DPRD', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('501', '5', '501', 'PERENCANAAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('502', '5', '502', 'KEUANGAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('503', '5', '503', 'KEPEGAWAIAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('504', '5', '504', 'PENDIDIKAN DAN PELATIHAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('505', '5', '505', 'PENELITIAN DAN PENGEMBANGAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('506', '5', '506', 'PENGHUBUNG', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('507', '5', '507', 'PENGELOAAN PERBATASAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('601', '6', '601', 'INSPEKTORAT DAERAH', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('701', '7', '701', 'KECAMATAN', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_bidangs` VALUES ('801', '8', '801', 'KESATUAN BANGSA DAN POLITIK', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);

-- ----------------------------
-- Table structure for tmsikd_rekening_laks
-- ----------------------------
DROP TABLE IF EXISTS `tmsikd_rekening_laks`;
CREATE TABLE `tmsikd_rekening_laks`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `kd_rek_lak` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_rek_lak` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_rek_induk` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jns_rekening` char(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 97 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmsikd_rekening_laks
-- ----------------------------
INSERT INTO `tmsikd_rekening_laks` VALUES (1, '1', 'ARUS KAS DARI AKTIVITAS OPERASI', '', 'RA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (2, '11', 'Arus Masuk  Kas', '1', 'RK', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (3, '1101', 'Penerimaan Pajak Daerah', '11', 'RJ', '0000-00-00 00:00:00', '2020-01-28 08:13:12', NULL, 'admin');
INSERT INTO `tmsikd_rekening_laks` VALUES (4, '1102', 'Penerimaan Retribusi Daerah', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (5, '1103', 'Penerimaan Hasil Pengelolaan Kekayaaan Daerah yang Dipisahkan', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (6, '1104', 'Penerimaan Lain - Lain Pendapatan Asli Daerah Yang Sah', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (7, '1105', 'Penerimaan Dana Bagi Hasil Pajak', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (8, '1106', 'Penerimaan Dana Bagi Hasil Sumber Daya Alam', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (9, '1107', 'Penerimaan Dana Alokasi Umum', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (10, '1108', 'Penerimaan Dana Alokasi Khusus', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (11, '1109', 'Penerimaan Dana Penyesuaian', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (12, '1110', 'Penerimaan dari Pendapatan Bagi Hasil Pajak', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (13, '1111', 'Penerimaan Bagi Hasil Lainnya', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (14, '1112', 'Penerimaan Hibah', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (15, '1113', 'Penerimaan Dana Darurat', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (16, '1114', 'Penerimaan Lainnya', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (17, '1115', 'Penerimaan dari Pendapatan Luar Biasa', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (18, '1116', 'Pendapatan Bantuan Keuangan', '11', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (19, '12', 'Arus Keluar Kas', '1', 'RK', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (20, '1201', 'Pembayaran Pegawai', '12', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (21, '1202', 'Pembayaran Barang ', '12', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (22, '1203', 'Pembayaran Bunga', '12', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (23, '1204', 'Pembayaran Subsidi', '12', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (24, '1205', 'Pembayaran Hibah', '12', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (25, '1206', 'Pembayaran Bantuan Sosial', '12', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (26, '1207', 'Pembayaran Tidak Terduga', '12', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (27, '1208', 'Pembayaran Bantuan Keuangan', '12', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (28, '1209', 'Pembayaran Kejadian Luar Biasa', '12', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (29, '1210', 'Pembabyaran Bantuan Keuangan Partai Politik', '12', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (30, '2', 'ARUS KAS DARI AKTIVITAS INVESTASI ', '', 'RA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (31, '21', 'Arus Masuk Kas', '2', 'RK', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (32, '2101', 'Penjualan atas Tanah', '21', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (33, '2102', 'Penjualan atas Peralatan dan Mesin', '21', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (34, '2103', 'Penjualan atas Gedung dan Bangunan', '21', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (35, '2104', 'Penjualan atas Jalan, Irigasi dan Jaringan', '21', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (36, '2105', 'Penjualan atas Aset Tetap ', '21', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (37, '2106', 'Penjualan Aset Lainnya', '21', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (38, '2107', 'Penjualan Kekayaan Daerah Yang Dipisahkan', '21', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (39, '2108', 'Penjualan Investasi Nonpermanen', '21', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (40, '2109', 'Pencairan Dana Cadangan', '21', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (41, '22', 'Arus Keluar Kas', '2', 'RK', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (42, '2201', 'Perolehan Tanah', '22', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (43, '2202', 'Perolehan Peralatan dan Mesin', '22', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (44, '2203', 'Perolehan Gedung dan Bangunan', '22', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (45, '2204', 'Perolehan Jalan, Irigasi dan Jaringan', '22', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (46, '2205', 'Perolehan Aset Tetap Lainnya', '22', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (47, '2206', 'Perolehan Aset Lainnya', '22', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (48, '2207', 'Penyertaan Modal Pemerintah', '22', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (49, '2208', 'Pembelian Investasi Nonpermanen', '22', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (50, '2209', 'Pembentukan Dana Cadangan', '22', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (51, '3', 'ARUS KAS DARI AKTIVITAS PENDANAAN', '', 'RA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (52, '31', 'Arus Masuk Kas', '3', 'RK', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (53, '3101', 'Pinjaman Dalam Negeri-Pemerintah Pusat', '31', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (54, '3102', 'Pinjaman Dalam Negeri-Pemerintah Daerah Lain', '31', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (55, '3103', 'Pinjaman Dalam Negeri-Lemb.Keuangan Bank', '31', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (56, '3104', 'Pinjaman Dalam Negeri-Lemb.Keuangan Bukan Bank ', '31', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (57, '3105', 'Pinjaman Dalam Negeri-Obligasi', '31', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (58, '3106', 'Pinjaman Dalam Negeri-Lainnya', '31', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (59, '3107', 'Penerimaan Kembali Pinjaman Kepada Perusahaan Negara', '31', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (60, '3108', 'Penerimaan Kembali Pinjaman Kepada Perusahaan Daerah', '31', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (61, '3109', 'Penerimaan Kembali Pinjaman Kepada Pemerintah Daerah Lain', '31', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (62, '32', 'Arus Keluar Kas', '3', 'RK', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (63, '3201', 'Pembayaran Pokok Pinjaman-Pemerintah Pusat', '32', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (64, '3202', 'Pembayaran Pokok Pinjaman Dalam Negeri-Pemda Lainnya', '32', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (65, '3203', 'Pembayaran Pokok Pinjaman Dalam Negeri-Lemb.Keu Bank', '32', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (66, '3204', 'Pembayaran Pokok Pinjaman Dalam Negeri-Lemb.Keu Bukan Bank', '32', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (67, '3205', 'Pembayaran Pokok Pinjaman Dalam Negeri-Obligasi', '32', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (68, '3206', 'Pembayaran Pokok Pinjaman Dalam Negeri-Lainnya', '32', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (69, '3207', 'Pemberian Pinjaman Kepada Perusahaan Negara', '32', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (70, '3208', 'Pemberian Pinjaman Kepada Perusahaan Daerah', '32', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (71, '3209', 'Pemberian Pinjaman Kepada Pemerintah Daerah Lain', '32', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (72, '4', 'ARUS KAS DARI AKTIVITAS TRANSITORIS', '', 'RA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (73, '41', 'Arus  Masuk Kas', '4', 'RK', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (74, '4101', 'Penerimaan Perhitungan Pihak Ketiga (PFK)', '41', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (75, '4102', 'Penerimaan UP/TUP', '41', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (76, '41021', 'Penerimaan Dana JKN', '4102', 'RO', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (77, '41022', 'Penerimaan Pengembalian UP dan TUP TA Sebelumnya', '4102', 'RO', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (78, '41023', 'Penerimaan Sisa UP dan TUP Tahun Berjalan', '4102', 'RO', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (79, '41024', 'Kontra Pos (Pengembalian Belanja Tahun Berjalan)', '4102', 'RO', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (80, '41025', 'Penerimaan Pajak Terutang Dana Bosnas 2017', '4102', 'RO', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (81, '42', 'Arus Keluar Kas', '4', 'RK', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (82, '4201', 'Pengeluaran Perhitungan Pihak Ketiga (PFK)', '42', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (83, '4202', 'Pembayaran UP/TUP', '42', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (84, '42021', 'Pengeluaran Dana JKN', '4202', 'RO', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (85, '42022', 'Sisa UP dan TUP  TA 2016 yang tidak dibelanjakan', '4202', 'RO', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (86, '5', 'Saldo Kas', '', 'RA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (87, '51', 'Saldo Awal Kas', '5', 'RK', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (88, '5101', 'Saldo Awal Kas di BUD', '51', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (89, '5102', 'Saldo Awal BOSNAS', '51', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (90, '52', 'Saldo Akhir Kas dan Setara Kas', '5', 'RK', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (91, '5201', 'Saldo Akhir Kas di BUD', '52', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (92, '5202', 'Saldo Akhir Kas di Bendahara Pengeluaran', '52', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (93, '5203', 'Saldo Akhir Kas di Bendahara Penerimaan', '52', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (94, '5206', 'Saldo Akhir Kas Lainnya', '52', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (95, '5207', 'saldo di BLUD', '52', 'RJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_laks` VALUES (96, '9999', 'test', '99', 'RK', '2019-11-08 06:43:53', '2019-11-27 02:23:22', 'admin', 'admin');

-- ----------------------------
-- Table structure for tmsikd_rekening_lras
-- ----------------------------
DROP TABLE IF EXISTS `tmsikd_rekening_lras`;
CREATE TABLE `tmsikd_rekening_lras`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_rek_lra` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_rek_lra` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_rek_induk` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jns_rekening` char(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lra_skpd` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lra_skpkd` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lra_pemda` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `display` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tmsikd_rek_neraca_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'diambil dari tmsikd_rek_neraca',
  `tmsikd_rek_lak_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'diambil dari tmsikd_rek_lak',
  `tmsikd_rek_utang_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL COMMENT 'diambil dari tmsikd_rek_utang',
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 85 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmsikd_rekening_lras
-- ----------------------------
INSERT INTO `tmsikd_rekening_lras` VALUES (1, '716', 'Penerimaan Kembali Investasi Pemerintah Daerah', '71', 'RJ', '', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (2, '71601', 'Penerimaan Kembali Investasi Pemerintah Daerah', '716', 'RO', '', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (3, '42105', 'Dana Alokasi Khusus Non Fisik', '421', 'RO', '', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (4, '4', 'PENDAPATAN', '', 'RA', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (5, '41', 'PENDAPATAN ASLI DAERAH', '4', 'RK', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (6, '411', 'Pendapatan Pajak Daerah ', '41', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (7, '412', 'Pendapatan Retribusi Daerah', '41', 'RJ', '1', '0', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (8, '413', 'Pendapatan Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan ', '41', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (9, '414', 'Lain-lain PAD yang Sah', '41', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (10, '42', 'PENDAPATAN TRANSFER', '4', 'RK', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (11, '421', 'Transfer Pemerintah Pusat - Dana Perimbangan', '42', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (12, '42101', 'Dana Bagi Hasil Pajak', '421', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (13, '42102', 'Dana Bagi Hasil Sumber Daya Alam ', '421', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (14, '42103', 'Dana Alokasi Umum', '421', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (15, '42104', 'Dana Alokasi Khusus', '421', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (16, '422', 'Transfer Pemerintah Pusat - Lainnya', '42', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (17, '42201', 'Dana Otonomi Khusus', '422', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (18, '42203', 'Dana Penyesuaian', '422', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (19, '423', 'Transfer Pemerintah Daerah Lainnya', '42', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (20, '42301', 'Pendapatan Bagi Hasil Pajak ', '423', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (21, '42302', 'Pendapatan Bagi Hasil Lainnya', '423', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (22, '424', 'Bantuan Keuangan-LRA', '42', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (23, '43', 'LAIN-LAIN PENDAPATAN YANG SAH', '4', 'RK', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (24, '431', 'Pendapatan Hibah ', '43', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (25, '432', 'Pendapatan Dana Darurat ', '43', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (26, '433', 'Pendapatan Lainnya', '43', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (27, '5', 'BELANJA', '', 'RA', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (28, '51', 'BELANJA OPERASI', '5', 'RK', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (29, '511', 'Belanja Pegawai ', '51', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (30, '512', 'Belanja Barang ', '51', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (31, '513', 'Bunga', '51', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (32, '514', 'Subsidi ', '51', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (33, '515', 'Hibah', '51', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (34, '516', 'Bantuan Sosial', '51', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (35, '52', 'BELANJA MODAL', '5', 'RK', '1', '0', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (36, '521', 'Belanja Tanah', '52', 'RJ', '1', '0', '1', '1', '41', '43', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (37, '522', 'Belanja Peralatan dan Mesin ', '52', 'RJ', '1', '0', '1', '1', '43', '44', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (38, '523', 'Belanja Gedung dan Bangunan', '52', 'RJ', '1', '0', '1', '1', '45', '45', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (39, '524', 'Belanja Jalan, Irigasi dan Jaringan ', '52', 'RJ', '1', '0', '1', '1', '47', '46', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (40, '525', 'Belanja Aset Tetap Lainnya ', '52', 'RJ', '1', '0', '1', '1', '49', '47', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (41, '526', 'Belanja Aset Lainnya', '52', 'RJ', '1', '0', '1', '1', '64', '48', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (42, '53', 'BELANJA TAK TERDUGA', '5', 'RK', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (43, '531', 'Belanja Tak Terduga', '53', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (44, '6', 'TRANSFER', '', 'RA', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (45, '61', 'TRANSFER/BAGI HASIL KE DESA', '6', 'RK', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (46, '611', 'Transfer Bagi Hasil Pajak ', '61', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (47, '612', 'Transfer Bagi Hasil Pendapatan Lainnya', '61', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (48, '62', 'TRANSFER/ BANTUAN KEUANGAN', '6', 'RK', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (49, '621', 'Transfer Bantuan Keuangan ke Pemerintah Daerah Lainnya ', '62', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (50, '622', 'Transfer Bantuan Keuangan ke Desa', '62', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (51, '623', 'Transfer Bantuan Keuangan Lainnya', '62', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (52, '624', 'Transfer Dana Otonomi Khusus', '62', 'RJ', '1', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (53, '7', 'PEMBIAYAAN', '', 'RA', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (54, '71', 'PENERIMAAN PEMBIAYAAN', '7', 'RK', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (55, '711', 'Penggunaan SiLPA', '71', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (56, '712', 'Pencairan Dana Cadangan', '71', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (57, '713', 'Hasil Penjualan Kekayaan Daerah yang Dipisahkan ', '71', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (58, '714', 'Pinjaman Dalam  Negeri', '71', 'RJ', '0', '1', '1', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (59, '71401', 'Pinjaman Dalam  Negeri - Pemerintah Pusat', '714', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (60, '71402', 'Pinjaman Dalam  Negeri - Pemerintah Daerah Lainnya ', '714', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (61, '71403', 'Pinjaman Dalam  Negeri - Lembaga Keuangan Bank ', '714', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (62, '71404', 'Pinjaman Dalam  Negeri - Lembaga Keuangan Bukan Bank ', '714', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (63, '71405', 'Pinjaman Dalam  Negeri - Obligasi', '714', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (64, '71406', 'Pinjaman Dalam  Negeri - Lainnya', '714', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (65, '715', 'Penerimaan Kembali Piutang', '71', 'RJ', '0', '1', '1', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (66, '71501', 'Penerimaan Kembali Pinjaman kepada Perusahaan Negara ', '715', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (67, '71502', 'Penerimaan Kembali Pinjaman kepada Perusahaan Daerah ', '715', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (68, '71503', 'Penerimaan Kembali Pinjaman kepada Pemerintah Daerah Lainnya', '715', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (69, '72', 'PENGELUARAN PEMBIAYAAN', '7', 'RK', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (70, '721', 'Pembentukan Dana Cadangan ', '72', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (71, '722', 'Penyertaan Modal Pemerintah Daerah', '72', 'RJ', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (72, '723', 'Pembayaran Pokok Pinjaman Dalam  Negeri', '72', 'RJ', '0', '1', '1', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (73, '72301', 'Pembayaran Pokok Pinjaman Dalam  Negeri - Lembaga Keuangan Bank', '723', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (74, '72302', 'Pembayaran Pokok Pinjaman Dalam  Negeri - Lembaga Keuangan Bukan Bank ', '723', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (75, '72303', 'Pembayaran Pokok Pinjam an Dalam  Negeri - Obligasi', '723', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (76, '72304', 'Pembayaran Pokok Pinjaman Dalam  Negeri - Pemerintah Pusat', '723', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (77, '72305', 'Pembayaran Pokok Pinjaman Dalam  Negeri - Pemerintah Daerah Lainnya ', '723', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (78, '72306', 'Pembayaran Pokok Pinjaman Dalam  Negeri - Lainnya ', '723', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (79, '724', 'Pemberian Pinjaman Daerah', '72', 'RJ', '0', '1', '1', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (80, '72401', 'Pemberian Pinjaman kepada Perusahaan Negara ', '724', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (81, '72402', 'Pemberian Pinjaman kepada Perusahaan Daerah', '724', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (82, '72403', 'Pemberian Pinjaman kepada Pemerintah Daerah Lainnya', '724', 'RO', '0', '1', '1', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_rekening_lras` VALUES (83, '123456789', 'TEST EDIT', 'TEST', 'RA', '1', '0', '0', '1', NULL, NULL, NULL, 'admin', '2019-11-26 08:49:53', 'admin', '2019-11-26 08:50:14');
INSERT INTO `tmsikd_rekening_lras` VALUES (84, '777', 'test y', '7', 'RK', '1', '1', '0', '0', NULL, NULL, NULL, 'admin', '2019-11-27 02:27:06', NULL, '2019-11-27 02:27:06');

-- ----------------------------
-- Table structure for tmsikd_rekening_neracas
-- ----------------------------
DROP TABLE IF EXISTS `tmsikd_rekening_neracas`;
CREATE TABLE `tmsikd_rekening_neracas`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kd_rek_neraca` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_rek_neraca` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_rek_induk` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jns_rekening` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `neraca_skpd` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `neraca_skpkd` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `neraca_pemda` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `display` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `kd_rek_neraca`(`kd_rek_neraca`) USING BTREE,
  INDEX `kd_rek_induk`(`kd_rek_induk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 140 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmsikd_rekening_neracas
-- ----------------------------
INSERT INTO `tmsikd_rekening_neracas` VALUES (1, '1', 'ASET', '', 'RA', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (2, '11', 'ASET LANCAR', '1', 'RK', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (3, '111', 'Kas dan Setara Kas', '11', 'RJ', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (4, '11101', 'Kas di Bendahara Umum Daerah', '111', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (5, '11102', 'Kas di Bendahara Pengeluaran', '111', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '2020-06-09 02:15:44', NULL, 'admin');
INSERT INTO `tmsikd_rekening_neracas` VALUES (6, '11103', 'Kas di Bendahara Penerimaan', '111', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (7, '11104', 'Kas di BLUD', '111', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (8, '11105', 'Kas Lainnya', '111', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (9, '11106', 'Setara Kas', '111', 'RO', '', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (10, '112', 'Investasi Jangka Pendek', '11', 'RJ', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (11, '11201', 'Saham', '112', 'RO', '0', '1', '0', '1', '0000-00-00 00:00:00', '2019-11-11 01:19:43', NULL, 'admin');
INSERT INTO `tmsikd_rekening_neracas` VALUES (12, '113', 'Piutang Pendapatan', '11', 'RJ', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (13, '11301', 'Piutang Pajak', '113', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (14, '11302', 'Piutang Retribusi', '113', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (15, '114', 'Piutang Lainnya', '11', 'RJ', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (16, '11401', 'Bagian Lancar Tagihan Jangka Panjang', '114', 'RO', '0', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (17, '11402', 'Bagian Lancar Tagihan Penjualan Angsuran', '114', 'RO', '0', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (18, '11403', 'Bagian Lancar Tuntutan Ganti Kerugian Daerah', '114', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (19, '11404', 'Uang Muka', '114', 'RO', '0', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (20, '115', 'Penyisihan Piutang Tak Tertagih', '11', 'RJ', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (21, '11501', 'Penyisihan Piutang Tak Tertagih-Pendapatan', '115', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (22, '116', 'Beban Dibayar Dimuka', '11', 'RJ', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (23, '11601', 'Beban Pegawai Dibayar Di Muka', '116', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (24, '11605', 'Beban Beban Dibayar Di Muka Lainnya', '116', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (25, '117', 'Persediaan', '11', 'RJ', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (26, '11701', 'Persediaan Bahan Pakai Habis', '117', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (27, '118', 'Aset Untuk Dikonsolidasikan', '11', 'RJ', '', '', '', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (28, '11801', 'R/K SKPD', '118', 'RO', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (29, '12', 'INVESTASI JANGKA PANJANG', '1', 'RK', '0', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (30, '121', 'Investasi Jangka Panjang Nonpermanen', '12', 'RJ', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (31, '12101', 'Investasi dalam Obligasi', '121', 'RO', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (32, '12102', 'Investasi dalam Proyek Pembangunan', '121', 'RO', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (33, '12103', 'Dana Bergulir', '121', 'RO', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (34, '12104', 'Deposito Jangka Panjang', '121', 'RO', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (35, '12105', 'Dana Bergulir diragukan tertagih', '121', 'RO', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (36, '12106', 'Investasi Nonpermanen Lainnya', '121', 'RO', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (37, '122', 'Investasi Jangka Panjang Permanen', '12', 'RJ', '0', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (38, '12201', 'Penyertaan Modal Pemerintah Daerah', '122', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (39, '12202', 'Investasi Permanen Lainnya', '122', 'RO', '0', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (40, '13', 'ASET TETAP', '1', 'RK', '1', '0', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (41, '131', 'Tanah', '13', 'RJ', '1', '0', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (42, '13101', 'Tanah', '131', 'RO', '1', '0', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (43, '132', 'Peralatan dan Mesin', '13', 'RJ', '1', '0', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (44, '13201', 'Peralatan dan Mesin', '132', 'RO', '1', '0', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (45, '133', 'Gedung dan Bangunan', '13', 'RJ', '1', '0', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (46, '13301', 'Gedung dan Bangunan', '133', 'RO', '1', '0', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (47, '134', 'Jalan, Irigasi dan Jaringan', '13', 'RJ', '1', '0', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (48, '13401', 'Jalan, Irigasi dan Jaringan', '134', 'RO', '1', '0', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (49, '135', 'Aset Tetap Lainnya', '13', 'RJ', '1', '0', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (50, '13501', 'Aset Tetap Lainnya', '135', 'RO', '1', '0', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (51, '136', 'Konstruksi dalam Pengerjaan', '13', 'RJ', '1', '0', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (52, '13601', 'Konstruksi dalam Pengerjaan', '136', 'RO', '1', '0', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (53, '137', 'Akumulasi Penyusutan', '13', 'RJ', '1', '0', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (54, '13701', 'Akumulasi Penyusutan', '137', 'RO', '1', '0', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (55, '14', 'DANA CADANGAN', '1', 'RK', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (56, '141', 'Dana Cadangan', '14', 'RJ', '0', '1', '', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (57, '14101', 'Dana Cadangan', '141', 'RO', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (58, '15', 'ASET LAINNYA', '1', 'RK', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (59, '151', 'Tagihan Jangka Panjang', '15', 'RJ', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (60, '15101', 'Tagihan Pinjaman Jangka Panjang', '151', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (61, '15102', 'Tagihan Penjualan Angsuran', '151', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (62, '152', 'Kemitraan dengan Pihak Ketiga', '15', 'RJ', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (63, '15201', 'Sewa', '152', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (64, '153', 'Aset Tak Berwujud', '15', 'RJ', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (65, '15301', 'Goodwill', '153', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (66, '15306', 'Akumulasi Amortisasi Aset Tak Berwujud', '153', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (67, '154', 'Aset Lain-lain', '15', 'RJ', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (68, '15401', 'Aset Lain-lain', '154', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (69, '15402', 'Uang Jaminan', '154', 'RO', '', '', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (70, '2', 'KEWAJIBAN', '', 'RA', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (71, '21', 'KEWAJIBAN JANGKA PENDEK', '2', 'RK', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (72, '211', 'Utang Perhitungan Pihak Ketiga (PFK)', '21', 'RJ', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (73, '21101', 'Utang Perhitungan Pihak Ketiga (PFK)', '211', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (74, '212', 'Utang Bunga', '21', 'RJ', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (75, '21201', 'Utang Bunga', '212', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (76, '213', 'Bagian Lancar Utang Jangka Panjang', '21', 'RJ', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (77, '21301', 'Bagian Lancar Utang Jangka Panjang', '213', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (78, '214', 'Pendapatan Diterima Di Muka', '21', 'RJ', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (79, '21401', 'Pendapatan Diterima Di Muka', '214', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (80, '215', 'Utang Belanja', '21', 'RJ', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (81, '21501', 'Utang Belanja', '215', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (82, '216', 'Utang Jangka Pendek Lainnya', '21', 'RJ', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (83, '21601', 'Utang Jangka Pendek Lainnya', '216', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (84, '21602', 'Utang Uang Jaminan', '215', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (85, '22', 'KEWAJIBAN JANGKA PANJANG', '2', 'RK', '0', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (86, '221', 'Utang Dalam Negeri', '22', 'RJ', '0', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (87, '22101', 'Utang Dalam Negeri - Sektor Perbankan', '221', 'RO', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (88, '22102', 'Utang Dalam Negeri - Obligasi', '221', 'RO', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (89, '22103', 'Premium (Diskonto) Obligasi', '221', 'RO', '0', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (90, '22104', 'Utang dari Lembaga Keuangan Bukan Bank\r\n', '221', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (91, '22105', 'Utang Pemerintah Pusat', '221', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (92, '22106', 'Utang Pemerintah Daerah Lainnya', '221', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (93, '22107', 'Utang Dalam Negeri Lainnya', '221', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (94, '222', 'Utang Jangka Panjang Lainnya', '22', 'RJ', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (95, '3', 'EKUITAS', '', 'RA', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (96, '31', 'EKUITAS', '3', 'RK', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (97, '311', 'Ekuitas', '31', 'RJ', '1', '1', '1', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (98, '31101', 'Ekuitas', '311', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (99, '31201', 'Estimasi Pendapatan', '312', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (100, '31202', 'Estimasi Penerimaan Pembiayaan', '312', 'RO', '', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (101, '31203', 'Apropriasi Belanja', '312', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (102, '31204', 'Apropriasi Pengeluaran Pembiayaan', '312', 'RO', '', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (103, '31205', 'Estimasi Perubahan SAL', '312', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (104, '31206', 'Surplus/Defisit - LRA', '312', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (105, '313', 'Ekuitas untuk Dikonsolidasikan', '31', 'RJ', '1', '', '1', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (106, '31301', 'R/K PPKD', '313', 'RO', '', '', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (107, '312', 'Ekuitas SAL', '31', 'RJ', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (108, '11303', 'Piutang Hasil Pengelolaan Kekayaan Daerah yang Dipisahkan', '113', 'RO', '', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (109, '11602', 'Beban Barang Dibayar Di Muka', '116', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (110, '11603', 'Beban Jasa Dibayar Di Muka', '116', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (111, '11604', 'Beban Pemeliharaan Dibayar Di Muka', '116', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (112, '11405', 'Piutang Lainnya', '114', 'RO', '', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (113, '11702', 'Persediaan Bahan/Material', '117', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (114, '11703', 'Persediaan Barang Yang Akan Dijual/Diberikan Kepada Masyarakat/Pihak Ketiga', '117', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (115, '11704', 'Persediaan Lainnya', '117', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (116, '11202', 'Deposito jangka Pendek', '112', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (117, '11203', 'Surat Berharga Negara Jangka Pendek', '112', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (118, '11204', 'Sertifikat Bank Indonesia', '112', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (119, '11205', 'Investasi Jangka Pendek BLUD', '112', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (120, '11206', 'Investasi Jangka Pendek Lainnya', '112', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (121, '11304', 'Piutang Lain-Lain PAD yang Sah', '113', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (122, '11305', 'Piutang Transfer Pemerintah Pusat-Dana Perimbangan', '113', 'RO', '', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (123, '11306', 'Piutang Transfer Pemerintah Pusat-Lainnya', '113', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (124, '11307', 'Piutang Transfer Pemerintah Daerah Lainnya', '113', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (125, '11308', 'Piutang Pendapatan Lainnya', '113', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (126, '11502', 'Penyisihan Piutang Tak Tertagih-Lainnya', '115', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (127, '15103', 'Tuntutan Ganti Kerugian Daerah', '151', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (128, '15202', 'Kerjasama Pemanfaatan', '152', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (129, '15203', 'Bangun Guna Serah', '152', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (130, '15204', 'Bangun Serah Guna', '152', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (131, '15302', 'Lisensi dan franchise', '153', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (132, '15303', 'Hak Cipta', '153', 'RO', '', '1', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (133, '15304', 'Paten', '153', 'RO', '0', '1', '0', '1', '0000-00-00 00:00:00', '2019-11-25 03:15:14', NULL, 'admin');
INSERT INTO `tmsikd_rekening_neracas` VALUES (134, '15305', 'Aset Tidak Berwujud Lainnya', '153', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (135, '22201', 'Utang Jangka Panjang Lainnya', '222', 'RO', '1', '1', '1', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);
INSERT INTO `tmsikd_rekening_neracas` VALUES (138, '434342', 'TEST REKENING NERACA', NULL, 'RJ', '1', '0', '0', '1', '2019-11-26 08:21:52', '2019-11-26 08:23:19', 'admin', 'admin');
INSERT INTO `tmsikd_rekening_neracas` VALUES (139, 's', 's', 's', 'RA', '0', '0', '0', '0', '2020-01-28 08:01:43', '2020-01-28 08:01:43', 'admin', NULL);

-- ----------------------------
-- Table structure for tmsikd_satkers
-- ----------------------------
DROP TABLE IF EXISTS `tmsikd_satkers`;
CREATE TABLE `tmsikd_satkers`  (
  `id` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sikd_satker_type` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `singkatan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tmsikd_bidang_id` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `kd_bidang_induk` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rek_konsolidasi_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nip_ka_satker` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nm_ka_satker` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jab_ka_satker` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `klasifikasi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `satker_pendapatan` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sotk_lama` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `npwp_satker` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kd_skpd_bmd` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `kode`(`kode`, `sikd_satker_type`) USING BTREE,
  INDEX `kd_bidang_induk`(`kd_bidang_induk`) USING BTREE,
  INDEX `tmsikd_bidang_id`(`tmsikd_bidang_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmsikd_satkers
-- ----------------------------
INSERT INTO `tmsikd_satkers` VALUES ('110101', 'SikdSkpd', '110101', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'DINDIK', '101', '', NULL, '196306101985121002', 'Drs. TARYONO, M.Si', 'KEPALA DINAS', '', '0', '0', NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2020-06-16 04:04:01');
INSERT INTO `tmsikd_satkers` VALUES ('110201', 'SikdSkpd', '110201', 'DINAS KESEHATAN', 'DINKES', '102', '1102', '1180101', '197412202001121004', 'DEDEN DENI,SE', 'Plt. KEPALA DINAS', '', '1', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 09:56:59');
INSERT INTO `tmsikd_satkers` VALUES ('110202', 'SikdSkpd', '110202', 'RUMAH SAKIT UMUM', 'RSU', '102', '1102', '1180102', '197610152007012007', 'dr. ALLIN HENDALIN. M', 'Plt. DIREKTUR', '', '1', '1', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-01 13:21:26');
INSERT INTO `tmsikd_satkers` VALUES ('110301', 'SikdSkpd', '110301', 'DINAS PEKERJAAN UMUM', 'DPU', '103', '1103', '1180101', '197504082001121003', 'ARIES KURNIAWAN, ST, MT \r\n', 'PlT.KEPALA DINAS', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:10:48');
INSERT INTO `tmsikd_satkers` VALUES ('110302', 'SikdSkpd', '110302', 'DINAS BANGUNAN DAN PENATAAN RUANG', 'DBPR', '103', '1103', '', '196612301996031001', 'Ir.DENDI PRYANDANA, MT\r\n', 'Kepala Dinas', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 11:00:05');
INSERT INTO `tmsikd_satkers` VALUES ('110401', 'SikdSkpd', '110401', 'DINAS PERUMAHAN, KAWASAN PERMUKIMAN DAN PERTANAHAN', 'DPKPP', '104', '1104', '1180101', '196105291982121001', 'TEDDY MEIYADI,SE,MM\r\n', 'PLT.Kepala Dinas', '', '1', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:11:44');
INSERT INTO `tmsikd_satkers` VALUES ('110501', 'SikdSkpd', '110501', 'DINAS PEMADAM KEBAKARAN DAN PENYELAMATAN', 'DPKP', '105', '1105', '', '196209171985031014', 'Drs. UCI SANUSI, M.Pd\r\n\r\n', 'Kepala Dinas', '', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin2an', '2017-11-07 17:29:09');
INSERT INTO `tmsikd_satkers` VALUES ('110502', 'SikdSkpd', '110502', 'BADAN PENANGGULANGAN BENCANA DAERAH ', 'BPBD', '105', '1105', '', '196711271997031002', 'Drs. H. CHAERUDIN, M.Si\r\n', 'Kepala Badan', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2017-01-10 16:27:47');
INSERT INTO `tmsikd_satkers` VALUES ('110503', 'SikdSkpd', '110503', 'SATUAN POLISI PAMONG PRAJA ', 'SATPOL', '105', '1105', '', '196707231987031002', 'Drs. H. CHAERUL SOLEH, M.Si\r\n', 'KEPALA SATUAN', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-14 15:42:08');
INSERT INTO `tmsikd_satkers` VALUES ('110504', 'SikdSkpd', '110504', 'BADAN KESATUAN BANGSA DAN POLITIK', 'KESBANGPOL', '105', '1105', '', '197308291993111001', 'AZHAR SYAM\'UN RAKHMANSYAH AP,M.Si\r\n', 'KEPALA BADAN', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin_bppt', '2017-02-01 11:13:09');
INSERT INTO `tmsikd_satkers` VALUES ('110601', 'SikdSkpd', '110601', 'DINAS SOSIAL', 'DINSOS', '106', '1106', '1180101', '197205261992031002', 'WAHYUNOTO LUKMAN, S.IP, MM\r\n', 'KEPALA DINAS', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:12:59');
INSERT INTO `tmsikd_satkers` VALUES ('120101', 'SikdSkpd', '120101', 'DINAS KETENAGAKERJAAN', 'DISNAKER', '201', '1201', '', '196103041986031010', 'H. PURNAMA WIJAYA S.Sos, M.Si\r\n', 'KEPALA DINAS', '', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2017-01-06 16:28:49');
INSERT INTO `tmsikd_satkers` VALUES ('120201', 'SikdSkpd', '120201', 'DINAS PEMBERDAYAAN MASYARAKAT PEMBERDAYAAN PEREMPUAN PERLINDUNGAN ANAK DAN KELUARGA BERENCANA', 'DPMP3AKB', '202', '1202', '1180101', '196308191989012003', 'drg. Hj. KHAIRATI, M.Kes\r\n', 'Kepala Dinas', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:16:00');
INSERT INTO `tmsikd_satkers` VALUES ('120501', 'SikdSkpd', '120501', 'DINAS LINGKUNGAN HIDUP', 'DLH', '101', '101', '1180101', '196607281986031004', 'Drs. H. TOTO SUDARTO, M.Si', 'Kepala Dinas', '', '1', '0', NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2020-06-09 08:02:03');
INSERT INTO `tmsikd_satkers` VALUES ('120601', 'SikdSkpd', '120601', 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL ', 'DISDUKCAPIL', '206', '1206', '1180101', '196412201985091001', 'Drs. H. DEDI BUDIAWAN, MM\r\n', 'Kepala Dinas', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:17:10');
INSERT INTO `tmsikd_satkers` VALUES ('120901', 'SikdSkpd', '120901', 'DINAS PERHUBUNGAN', 'DISHUB', '209', '1209', '', '196203111985031002', 'Drs. H. SUKANTA\r\n', 'KEPALA DINAS', '', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2017-01-06 16:29:24');
INSERT INTO `tmsikd_satkers` VALUES ('121001', 'SikdSkpd', '121001', 'DINAS KOMUNIKASI DAN INFORMATIKA ', 'DISKOMINFO', '210', '1210', '', '195812241986031008', 'Drs. H. ISMUNANDAR, MM\r\n', 'KEPALA DINAS', '', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin.user', '2017-03-24 19:35:39');
INSERT INTO `tmsikd_satkers` VALUES ('121101', 'SikdSkpd', '121101', 'DINAS KOPERASI, USAHA KECIL DAN MENENGAH ', 'DKUKM', '211', '1211', '', '196408151991032005', 'Drg. DAHLIA NADEAK, M.Kes\r\n', 'Plt.KEPALA DINAS', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 11:10:14');
INSERT INTO `tmsikd_satkers` VALUES ('121201', 'SikdSkpd', '121201', 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU', 'DPMPTSP', '212', '1212', '', '197010061991031001', 'BAMBANG NOERTJAHJO, SE. Ak', 'Kepala Dinas', '', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 10:45:44');
INSERT INTO `tmsikd_satkers` VALUES ('121301', 'SikdSkpd', '121301', 'DINAS PEMUDA DAN OLAHRAGA ', 'DPO', '213', '1213', '', '196503011997031002', 'Ir.H.E.WIWI MARTAWIJAYA, M.Si \r\n', 'KEPALA DINAS', '', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-07 22:44:47');
INSERT INTO `tmsikd_satkers` VALUES ('121701', 'SikdSkpd', '121701', 'DINAS PERPUSTAKAAN DAN ARSIP DAERAH        ', 'DPAD', '217', '1217', '', '196311131985011001', 'Drs. H. DADANG RAHARJA, M.Si\r\n', 'Kepala Dinas', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2017-01-08 20:33:51');
INSERT INTO `tmsikd_satkers` VALUES ('200201', 'SikdSkpd', '200201', 'DINAS PARIWISATA ', 'DISPAR', '002', '2002', '', '197904122002121006', 'JUDIANTO, ST.MT ', 'Kepala Dinas', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 11:13:34');
INSERT INTO `tmsikd_satkers` VALUES ('200301', 'SikdSkpd', '200301', 'DINAS KETAHANAN PANGAN, PERTANIAN DAN PERIKANAN', 'DPPK', '203', '1203', '1180101', '196302151996011001', 'Ir. H. NUR SELAMET, MM\r\n', 'Kepala Dinas', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-11-16 11:24:08');
INSERT INTO `tmsikd_satkers` VALUES ('200401', 'SikdSkpd', '200401', 'DINAS PERINDUSTRIAN DAN PERDAGANGAN', 'DISPERINDAG', '004', '2004', '', '197008192002122005', 'drg. MAYA MARDIANA, MARS\r\n', 'Kepala Dinas', '', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin2an', '2017-11-07 17:28:10');
INSERT INTO `tmsikd_satkers` VALUES ('300101', 'SikdSkpd', '300101', 'BADAN PERENCANAAN PEMBANGUNAN DAERAH', 'BAPEDA', '37', '301', '', '196505211994031003', 'Ir. MOCHAMMAD TAHER ROCHMADI, M.Si\r\n', 'KEPALA BADAN', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2017-01-10 16:26:06');
INSERT INTO `tmsikd_satkers` VALUES ('300201', 'SikdSkpd', '300201', 'BADAN PENDAPATAN  DAERAH', 'BPD', '502', '502', NULL, '196101241986031006', 'Drs. H. DADANG SOFYAN, MM', 'KEPALA BADAN', '', '1', '0', NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2020-07-13 13:23:36');
INSERT INTO `tmsikd_satkers` VALUES ('300202', 'SikdSkpd', '300202', 'BADAN PENGELOLAAN KEUANGAN DAN ASET DAERAH ', 'BPKAD', '38', '302', '', '196308301984031004', 'Drs. H.WARMAN S. MM\r\n', 'KEPALA BADAN', '', '1', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2017-01-08 20:42:30');
INSERT INTO `tmsikd_satkers` VALUES ('300301', 'SikdSkpd', '300301', 'BADAN KEPEGAWAIAN, PENDIDIKAN DAN PELATIHAN', 'BKD', '39', '303', '', '196303091986031013', 'H. APENDI, S.Sos, M.Si\r\n', 'Kepala Badan', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2017-01-08 20:39:57');
INSERT INTO `tmsikd_satkers` VALUES ('300501', 'SikdSkpd', '300501', 'SEKRETARIAT DPRD ', 'SEKWAN', '41', '305', '1180129', '196601141996031004', 'Drs. DANI BINA SATRIA, MM\r\n', 'Plt.Sekretaris DPRD', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-24 18:22:57');
INSERT INTO `tmsikd_satkers` VALUES ('300601', 'SikdSkpd', '300601', 'SEKRETARIAT DAERAH ', 'SEKDA', '32', '306', '1180151', '196404061985031014', 'Drs. H. MUHAMAD, M.Si\r\n', 'SEKRETARIS DAERAH', '', '0', '0', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-23 11:47:06');
INSERT INTO `tmsikd_satkers` VALUES ('300701', 'SikdSkpd', '300701', 'INSPEKTORAT ', 'INSPEKTORAT', '33', '307', '1180101', '196109031991021001', 'H. Uus Kusnadi, SE, M.Si\r\n', 'INSPEKTUR', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-12 14:41:08');
INSERT INTO `tmsikd_satkers` VALUES ('300801', 'SikdSkpd', '300801', 'KECAMATAN CIPUTAT ', 'CIPUTAT', '34', '308', '', '197510251994121008', 'Drs. H. ANDI DANDI NUGRAHA PATABAI AP.,M.Si\r\n', 'CAMAT CIPUTAT', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2016-11-11 09:54:16');
INSERT INTO `tmsikd_satkers` VALUES ('300802', 'SikdSkpd', '300802', 'KECAMATAN CIPUTAT TIMUR ', 'CIPUTAT TIMUR', '34', '308', '1180101', '196407101987121004', 'Drs H. WIDODO HARI LUSINTO, MM\r\n', 'Plt. CAMAT CIPUTAT TIMUR', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-25 10:06:18');
INSERT INTO `tmsikd_satkers` VALUES ('300803', 'SikdSkpd', '300803', 'KECAMATAN PAMULANG ', 'PAMULANG', '34', '308', '', '196205101989021001', 'H. DEDEN JUARDI, S.Sos.,M.Si\r\n', 'CAMAT PAMULANG', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2016-11-02 17:41:29');
INSERT INTO `tmsikd_satkers` VALUES ('300804', 'SikdSkpd', '300804', 'KECAMATAN SERPONG ', 'SERPONG', '34', '308', '', '196509042005012005', 'MURSINAH, SH., M.Si\r\n', 'KECAMATAN SERPONG', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin', '2016-11-02 17:42:21');
INSERT INTO `tmsikd_satkers` VALUES ('300805', 'SikdSkpd', '300805', 'KECAMATAN SERPONG UTARA ', 'SERPONG UTARA', '34', '308', '', '197407281994021002', 'BANI KHOSYATULLOH\r\n', 'CAMAT SERPONG UTARA', '', '0', NULL, NULL, NULL, '', '0000-00-00 00:00:00', 'admin2an', '2016-11-14 18:46:06');
INSERT INTO `tmsikd_satkers` VALUES ('300806', 'SikdSkpd', '300806', 'KECAMATAN PONDOK AREN ', 'PONDOK AREN', '34', '308', '1180101', '196701032005011004', 'MAKUM SAGITA,S.Pd\r\n', 'CAMAT PONDOK AREN\r\n', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'admin.user', '2018-03-14 14:31:47');
INSERT INTO `tmsikd_satkers` VALUES ('300807', 'SikdSkpd', '300807', 'KECAMATAN SETU ', 'SETU', '34', '308', '1180101', '196303181988031006', 'H. HERU AGUS S, AP, M.Si\r\n', 'CAMAT SETU', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-09-19 10:20:26');
INSERT INTO `tmsikd_satkers` VALUES ('300901', 'SikdSkpd', '300901', 'DEWAN PERWAKILAN RAKYAT DAERAH', 'DPRD', '35', '309', '1180116', '196601141996031004', 'Drs. DANI BINA SATRIA, MM', 'Plt.Sekretaris DPRD', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-24 13:59:26');
INSERT INTO `tmsikd_satkers` VALUES ('300902', 'SikdSkpd', '300902', 'WALIKOTA DAN WAKIL WALIKOTA', 'KDH-WKDH', '35', '309', '1180101', '196201261986031005', 'H. M. SAHLAN, S.Sos', 'Kepala Bagian Keuangan', '', '0', '', NULL, NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-22 11:22:19');
INSERT INTO `tmsikd_satkers` VALUES ('90000', 'SikdSkpkd', '300202', 'SATUAN KERJA PENGELOLA KEUANGAN DAERAH', 'SKPKD', '38', '302', '', '196308301984031004', 'Drs. H. Warman S. MM', 'Pejabat Pegelola Keuangan Daerah', '0', '1', NULL, NULL, NULL, '5/20/2014 12:06', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-17 13:08:35');

-- ----------------------------
-- Table structure for tmsikd_setup_tahun_anggarans
-- ----------------------------
DROP TABLE IF EXISTS `tmsikd_setup_tahun_anggarans`;
CREATE TABLE `tmsikd_setup_tahun_anggarans`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT '0000-00-00 00:00:00',
  `active` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `thn`(`tahun`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmsikd_setup_tahun_anggarans
-- ----------------------------
INSERT INTO `tmsikd_setup_tahun_anggarans` VALUES (1, '2020', 'admin', '0000-00-00 00:00:00', 'admin', '2019-10-13 03:23:20', 1);

-- ----------------------------
-- Table structure for tmsikd_sub_skpds
-- ----------------------------
DROP TABLE IF EXISTS `tmsikd_sub_skpds`;
CREATE TABLE `tmsikd_sub_skpds`  (
  `id` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tmsikd_satker_id` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `singkatan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rek_konsolidasi_id` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nip_ka_sub_skpd` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nm_ka_sub_skpd` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jab_ka_sub_skpd` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sub_skpd_pendapatan` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `sotk_lama` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tmsikd_satker_id`(`tmsikd_satker_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmsikd_sub_skpds
-- ----------------------------
INSERT INTO `tmsikd_sub_skpds` VALUES ('110101001', '110101', '110101001', 'SDN CIPUTAT 01', 'SDN CIPUTAT 01', NULL, '-', 'test', '-', '0', '1', 'admin', '2020-03-05 15:50:43', 'admin', '2020-06-16 03:23:04');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30060101', '300601', '30060101', 'BAGIAN PEMERINTAHAN', '', '', '196407101987121004', 'Drs H. WIDODO HARI LUSINTO SKM, MM\r\n', 'KEPALA BAGIAN', '0', NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 11:16:11');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30060102', '300601', '30060102', 'BAGIAN KESEJAHTERAAN RAKYAT', '', '', '196101181992031004', 'Drs. EDI WAHYU\r\n', 'KEPALA BAGIAN', '0', NULL, '', '0000-00-00 00:00:00', 'admin', '2016-11-02 17:27:58');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30060103', '300601', '30060103', 'BAGIAN ORGANISASI DAN KINERJA APARATUR', '', '', '196711241987112001', 'NOFYAR RANI, SE, M.Si\r\n', 'KEPALA BAGIAN', '0', NULL, '', '0000-00-00 00:00:00', 'admin', '2016-11-02 17:29:32');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30060104', '300601', '30060104', 'BAGIAN PEREKONOMIAN', '', '', '196311141993032001', 'Dr. Ir. MUSNI AHYANI, MM', 'KEPALA BAGIAN PEREKONOMIAN', '0', NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-11-03 15:11:17');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30060105', '300601', '30060105', 'BAGIAN PEMBANGUNAN', '', '', '196612301996031005', 'Ir. DANDI PRYANTARA, MT', 'KEPALA BAGIAN', '0', NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-11-03 15:09:25');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30060106', '300601', '30060106', 'BAGIAN HUKUM', '', '', '196804101994032009', 'Dra. KUNTI BRATAJAYA ATMAJANINGSIH, S.IP\r\n', 'KEPALA BAGIAN', '0', NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2017-11-05 11:19:14');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30060107', '300601', '30060107', 'BAGIAN UMUM DAN PROTOKOL', '', '', '197002031998031004', 'H. ABDUL AZIZ, ST, MT', 'KEPALA BAGIAN', '0', NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-11-13 16:12:26');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30060108', '300601', '30060108', 'BAGIAN RUMAH TANGGA DAN PERLENGKAPAN', '', '', '196406251994031006', 'DRS. H. WAWANG KUSDAYA, M.Si\r\n', 'KEPALA BAGIAN', '0', NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-11-03 15:15:59');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30060109', '300601', '30060109', 'BAGIAN KEUANGAN DAN PERENCANAAN', 'KABAG', '1180128', '196201261986031005', 'H. M. SAHLAN, S.Sos\r\n', 'Kepala Bagian Keuangan', '0', NULL, '', '0000-00-00 00:00:00', 'bpkad.susunanggaran', '2018-10-25 17:20:25');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30060110', '300601', '30060110', 'BAGIAN LAYANAN PENGADAAN', 'BLP', '', '197407031993111001', 'WAHYUDI LEKSONO, AP.,M.Ak\r\n', 'KEPALA BAGIAN LAYANAN PENGADAAN', '0', NULL, 'admin_bppt', '2016-10-06 10:08:28', 'bpkad.susunanggaran', '2018-09-19 10:29:56');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080101', '300801', '30080101', 'KELURAHAN SERUA', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080102', '300801', '30080102', 'KELURAHAN CIPUTAT', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080103', '300801', '30080103', 'KELURAHAN SAWAH BARU', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080104', '300801', '30080104', 'KELURAHAN CIPAYUNG', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080105', '300801', '30080105', 'KELURAHAN SAWAH', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080106', '300801', '30080106', 'KELURAHAN JOMBANG', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080107', '300801', '30080107', 'KELURAHAN SERUA INDAH', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080201', '300802', '30080201', 'KELURAHAN PONDOK RANJI', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080202', '300802', '30080202', 'KELURAHAN RENGAS', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080203', '300802', '30080203', 'KELURAHAN PISANGAN', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080204', '300802', '30080204', 'KELURAHAN REMPOA', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080205', '300802', '30080205', 'KELURAHAN CEMPAKA PUTIH', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080206', '300802', '30080206', 'KELURAHAN CIREUNDEU', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080301', '300803', '30080301', 'KELURAHAN PONDOK CABE UDIK', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080302', '300803', '30080302', 'KELURAHAN BAMBU APUS', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080303', '300803', '30080303', 'KELURAHAN PAMULANG BARAT', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080304', '300803', '30080304', 'KELURAHAN BENDA BARU', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080305', '300803', '30080305', 'KELURAHAN PAMULANG TIMUR', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080306', '300803', '30080306', 'KELURAHAN PONDOK CABE ILIR', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080307', '300803', '30080307', 'KELURAHAN PONDOK BENDA', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080308', '300803', '30080308', 'KELURAHAN KEDAUNG', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080401', '300804', '30080401', 'KELURAHAN RAWA MEKAR JAYA', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080402', '300804', '30080402', 'KELURAHAN BUARAN', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080403', '300804', '30080403', 'KELURAHAN CILENGGANG', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080404', '300804', '30080404', 'KELURAHAN RAWA BUNTU', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080405', '300804', '30080405', 'KELURAHAN LENGKONG GUDANG TIMUR', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080406', '300804', '30080406', 'KELURAHAN SERPONG', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080407', '300804', '30080407', 'KELURAHAN CIATER', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080408', '300804', '30080408', 'KELURAHAN LENGKONG GUDANG', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080409', '300804', '30080409', 'KELURAHAN LENGKONG WETAN', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080501', '300805', '30080501', 'KELURAHAN PAKULONAN', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080502', '300805', '30080502', 'KELURAHAN JELUPANG', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080503', '300805', '30080503', 'KELURAHAN PAKUALAM', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080504', '300805', '30080504', 'KELURAHAN PAKUJAYA', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080505', '300805', '30080505', 'KELURAHAN PONDOK JAGUNG', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080506', '300805', '30080506', 'KELURAHAN PONDOK JAGUNG TIMUR', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080507', '300805', '30080507', 'KELURAHAN LENGKONG KARYA', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080601', '300806', '30080601', 'KELURAHAN PONDOK KARYA', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080602', '300806', '30080602', 'KELURAHAN PONDOK KACANG BARAT', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080603', '300806', '30080603', 'KELURAHAN JURANGMANGU BARAT', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080604', '300806', '30080604', 'KELURAHAN PONDOK AREN', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080605', '300806', '30080605', 'KELURAHAN PARIGI', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080606', '300806', '30080606', 'KELURAHAN JURANGMANGU TIMUR', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080607', '300806', '30080607', 'KELURAHAN PONDOK JAYA', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080608', '300806', '30080608', 'KELURAHAN PONDOK KACANG TIMUR', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080609', '300806', '30080609', 'KELURAHAN PONDOK PUCUNG', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080610', '300806', '30080610', 'KELURAHAN PARIGI BARU', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080611', '300806', '30080611', 'KELURAHAN PONDOK BETUNG', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080701', '300807', '30080701', 'KELURAHAN MUNCUL', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080702', '300807', '30080702', 'KELURAHAN BABAKAN', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080703', '300807', '30080703', 'KELURAHAN KERANGGAN ', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080704', '300807', '30080704', 'KELURAHAN SETU ', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080705', '300807', '30080705', 'KELURAHAN BAKTI JAYA', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');
INSERT INTO `tmsikd_sub_skpds` VALUES ('30080706', '300807', '30080706', 'KELURAHAN KADEMANGAN', NULL, NULL, NULL, NULL, NULL, '0', NULL, '', '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for tmsikd_sumber_anggarans
-- ----------------------------
DROP TABLE IF EXISTS `tmsikd_sumber_anggarans`;
CREATE TABLE `tmsikd_sumber_anggarans`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmtype_anggaran_id` int(11) NOT NULL COMMENT 'diambil dari tm_type_anggaran',
  `kd_sumber_anggaran` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nm_sumber_anggaran` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `initial` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tmsikd_sumber_anggaran_tmtype_anggaran_id`(`tmtype_anggaran_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmsikd_sumber_anggarans
-- ----------------------------
INSERT INTO `tmsikd_sumber_anggarans` VALUES (1, 1, 'APBDK1', 'APBDK - DAK', 'APBD-Kota', NULL, '2020-04-08 06:32:06', NULL, 'admin');
INSERT INTO `tmsikd_sumber_anggarans` VALUES (2, 1, '1', 'Pendapatan Asli Daerah (P A D)', 'APBD-Kota', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (3, 4, '11', 'DAK BIDANG Pendidikan', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (4, 4, '12', 'DAK BIDANG Kesehatan', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (5, 4, '13', 'DAK BIDANG Keluarga Berencana', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (6, 4, '14', 'DAK BIDANG Prasarana Jalan', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (7, 4, '15', 'DAK BIDANG Prasarana Irigasi', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (8, 4, '16', 'DAK BIDANG Air Minum dan Penyehatan Lingkungan', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (9, 4, '17', 'DAK BIDANG Prasarana Pemerintah', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (10, 4, '18', 'DAK BIDANG Kelautan dan Perikanan', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (11, 4, '19', 'DAK BIDANG Pertanian', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (12, 4, '2', 'Dana Bagi Hasil', 'DBH ', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (13, 4, '20', 'DAK BIDANG Lingkungan Hidup', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (14, 4, '21', 'DAK BIDANG Kelautan', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (15, 4, '22', 'DAK BIDANG Sarana dan Prasarana Perdesaan', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (16, 4, '23', 'DAK BIDANG Perdagangan', 'DAK BIDANG', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (17, 4, '3', 'Dana Alokasi Umum (D A U)', 'DAU', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (18, 4, '4', 'Dana Alokasi Khusus (D A K)', 'DAK', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (19, 4, '5', 'Dana Kontinjensi / Dekonsentrasi', 'Kontinjens', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (20, 4, '6', 'Lain-Lain Pendapatan Daerah Yang Sah', 'Lain-Lain ', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (21, 4, '7', 'Pembiayaan', 'Pembiayaan', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (22, 4, '8', 'Lainnya', 'Lainnya', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (23, 4, '10', 'APBD Provinsi', 'APBD Prov', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (24, 4, '24', 'DST', 'DST', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (25, 1, '04', 'APBN DAK', 'APBN-DAK', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (26, 1, '05', 'APBN TP', 'APBN-TP', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (27, 1, '06', 'APBN-Dekonsentrasi', 'APBN-D', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (28, 1, '07', 'Sumber Lain', 'SL', NULL, '2019-07-24 04:57:33', NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (31, 2, '03', 'APBD Kota', 'APBD-Kab', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (34, 1, '01', 'APBD Kota', 'APBD-Kab', NULL, '2019-07-24 05:47:02', NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (36, 1, '03', 'APBN Pusat', 'APBN', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (37, 3, '01', 'APBD Kota', 'APBD-Kab', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (38, 3, '02', 'APBD Provinsi', 'APBD-Prop', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (39, 3, '03', 'APBN Pusat', 'APBN', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (40, 3, '04', 'Sumber Lain', 'SL', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (41, 1, '02', 'APBD Provinsi', 'APBD-Prop', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (44, 4, '24', 'APBD Kota', 'APBDKOTA', NULL, NULL, NULL, NULL);
INSERT INTO `tmsikd_sumber_anggarans` VALUES (45, 5, '021', 'Test Sumber Anggaran-Edit', 'TSA', '2019-11-20 03:29:13', '2019-11-20 04:23:31', 'admin', 'admin');

-- ----------------------------
-- Table structure for tmuser_level
-- ----------------------------
DROP TABLE IF EXISTS `tmuser_level`;
CREATE TABLE `tmuser_level`  (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `description` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mapping_sie` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tmuser_level
-- ----------------------------
INSERT INTO `tmuser_level` VALUES (1, 'Administrator', '1', '2020-09-08 09:46:57', '2020-09-15 09:47:02');
INSERT INTO `tmuser_level` VALUES (2, 'Bidang Renbang', '1', NULL, NULL);
INSERT INTO `tmuser_level` VALUES (3, 'User Satker', '1', NULL, NULL);

-- ----------------------------
-- Table structure for trsikd_bidang_skpds
-- ----------------------------
DROP TABLE IF EXISTS `trsikd_bidang_skpds`;
CREATE TABLE `trsikd_bidang_skpds`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tmsikd_bidang_id` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'diambil dari tmsikd_bidang',
  `tmsikd_satker_id` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `tmsikd_bidang_id`(`tmsikd_bidang_id`) USING BTREE,
  INDEX `trsikd_bidang_skpds_ibfk_2`(`tmsikd_satker_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of trsikd_bidang_skpds
-- ----------------------------
INSERT INTO `trsikd_bidang_skpds` VALUES (1, '101', '110101', NULL, NULL, NULL, NULL);
INSERT INTO `trsikd_bidang_skpds` VALUES (3, '216', '121001', 'admin', NULL, '2020-02-12 02:28:16', '2020-02-12 02:28:16');
INSERT INTO `trsikd_bidang_skpds` VALUES (4, '502', '300202', NULL, NULL, NULL, NULL);
INSERT INTO `trsikd_bidang_skpds` VALUES (5, '502', '90000', NULL, NULL, NULL, NULL);
INSERT INTO `trsikd_bidang_skpds` VALUES (6, '502', '300201', NULL, NULL, NULL, NULL);
INSERT INTO `trsikd_bidang_skpds` VALUES (8, '102', '110201', 'admin', NULL, '2020-06-04 06:41:28', '2020-06-04 06:41:28');

-- ----------------------------
-- Table structure for trsikd_skpkds
-- ----------------------------
DROP TABLE IF EXISTS `trsikd_skpkds`;
CREATE TABLE `trsikd_skpkds`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmsikd_satker_id` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tmsikd_satker_skpkd_id` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `trsikd_skpkds_ibfk1`(`tmsikd_satker_skpkd_id`) USING BTREE,
  INDEX `tmsikd_satker_id`(`tmsikd_satker_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of trsikd_skpkds
-- ----------------------------
INSERT INTO `trsikd_skpkds` VALUES (1, '300202', '90000', 'Admin', '2014-05-20 12:42:42', 'bpkad.susunanggaran', '2017-11-17 13:08:35');

-- ----------------------------
-- Table structure for trtargetrincian
-- ----------------------------
DROP TABLE IF EXISTS `trtargetrincian`;
CREATE TABLE `trtargetrincian`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tmtarget_id` int(11) NOT NULL,
  `bulan` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jumlah` double NULL DEFAULT NULL,
  `jumlah_perubahan` double NULL DEFAULT NULL,
  `ket` char(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 64 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of trtargetrincian
-- ----------------------------
INSERT INTO `trtargetrincian` VALUES (51, 13, '12', 0, 0, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (50, 13, '11', 0, 0, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (49, 13, '10', 0, 0, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (48, 13, '9', 0, 0, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (47, 13, '8', 0, 0, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (46, 13, '7', 0, 0, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (45, 13, '6', 0, 0, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (44, 13, '5', 0, 0, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (43, 13, '4', 0, 0, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (42, 13, '3', 0, 0, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (41, 13, '2', 132, 0, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (40, 13, '1', 2121, 122231231, NULL, NULL, '2020-09-28 03:55:06', '2020-09-28 03:55:06');
INSERT INTO `trtargetrincian` VALUES (52, 14, '1', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');
INSERT INTO `trtargetrincian` VALUES (53, 14, '2', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');
INSERT INTO `trtargetrincian` VALUES (54, 14, '3', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');
INSERT INTO `trtargetrincian` VALUES (55, 14, '4', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');
INSERT INTO `trtargetrincian` VALUES (56, 14, '5', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');
INSERT INTO `trtargetrincian` VALUES (57, 14, '6', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');
INSERT INTO `trtargetrincian` VALUES (58, 14, '7', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');
INSERT INTO `trtargetrincian` VALUES (59, 14, '8', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');
INSERT INTO `trtargetrincian` VALUES (60, 14, '9', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');
INSERT INTO `trtargetrincian` VALUES (61, 14, '10', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');
INSERT INTO `trtargetrincian` VALUES (62, 14, '11', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');
INSERT INTO `trtargetrincian` VALUES (63, 14, '12', 0, 0, NULL, NULL, '2020-10-16 10:19:57', '2020-10-20 05:46:47');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmpegawai_id` int(11) NULL DEFAULT NULL,
  `sikd_satker_id` int(14) NOT NULL,
  `username` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `realname` varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `last_login` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `c_status` int(2) NOT NULL COMMENT '0 = Non Aktif\r\n1 = Aktif',
  `photo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ttd` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `paraf` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tmuser_level_id` int(11) NULL DEFAULT NULL,
  `jenis` int(2) NULL DEFAULT NULL,
  `p12` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 344 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (2, NULL, 0, 'admin', 'Bidang Renbang', '$2y$10$TCWp.onkrH4Hv.vIm00opOT8Yc3Z4vdxdV0wopzuqfXqMqhuBhKi2', '1591760862', '08991319', 1, '1829-2020-10-20-19-31-03.jpg', NULL, NULL, 1, NULL, NULL, NULL, '2020-10-20 19:31:03');
INSERT INTO `user` VALUES (322, NULL, 110302, '123', '', '$2y$10$pDFclU570kuFYZWuElttKuzHPGguaX6ShAZoV1KWCFnZwFlQie0e6', NULL, '123', 1, 'default.jpg', NULL, NULL, 3, NULL, NULL, '2020-09-30 05:03:09', '2020-10-07 03:53:19');
INSERT INTO `user` VALUES (323, NULL, 121001, 'kominfo', 'HILDA FITRIA, S. IP', '$2y$10$z8zpZK7xKmqz2FThv3mG8OY.MY9lpZj1e6X1guhyUxRobLWHKzJVi', NULL, '131247', 1, '391-2020-10-18-14-51-30.jpg', NULL, NULL, 3, NULL, NULL, '2020-09-30 05:40:24', '2020-10-18 14:51:31');
INSERT INTO `user` VALUES (325, 64, 110101, 'indag', 'MIA S. ANDRIANI, S. IP', '$2y$10$WNOv/Hq5mJU/y0hTgKGA/OPtDjuV5dz/HeBp/x3aLji0tWy9oaRyC', NULL, '4545421351213', 1, '/tmp/phpnXYmZr', NULL, NULL, 3, NULL, NULL, '2020-10-05 03:38:17', '2020-10-05 03:38:17');
INSERT INTO `user` VALUES (328, 539, 110201, 'dinkes', 'Selly Septiyanti, AMD', '$2y$10$F75y63hSvp9E/wIkkdZ5B.y16j6vSS.tu.fXYWmjbm6vCMXpDLJ7O', NULL, '121302152', 1, NULL, NULL, NULL, 3, NULL, NULL, '2020-10-07 03:34:33', '2020-10-07 03:34:33');
INSERT INTO `user` VALUES (329, 540, 110401, 'perkim', 'Dora Sutanti', '$2y$10$ogLCi1jNjWa7hi049g/iK.T7tZoKhk2yIhtj3Orp61zBM9PfXsEpW', NULL, '12031553588', 1, NULL, NULL, NULL, 3, NULL, NULL, '2020-10-07 05:10:43', '2020-10-07 05:10:43');
INSERT INTO `user` VALUES (330, 541, 110501, 'damkar', 'Opik Suhandi', '$2y$10$aiKlXfRaCEix5hVN5AxDxuWqBvVOVXGmMTCjn89T94HiY1207v9YO', NULL, '22215321548', 1, NULL, NULL, NULL, 3, NULL, NULL, '2020-10-07 05:12:32', '2020-10-07 05:12:32');
INSERT INTO `user` VALUES (331, NULL, 120101, 'disnaker', 'Polodina P Tambun, S.Sos', '$2y$10$2x9wOkwZgA.f7uX0gk2ZcOHtWfB5TaDiJJ7zQOwqFmiX0pFp1S/Gq', NULL, '5546121356', 1, 'default.jpg', NULL, NULL, 3, NULL, NULL, '2020-10-07 05:14:51', '2020-10-12 06:53:28');
INSERT INTO `user` VALUES (332, 543, 120501, 'lh', 'Indah Lestari S,ST', '$2y$10$1Qm50TOdKiRZTHxKwAgfPe0weiCfZLK.l/db5LvsJ0EdZoYeYBCVC', NULL, '12351213548', 1, NULL, NULL, NULL, 3, NULL, NULL, '2020-10-07 05:17:30', '2020-10-07 05:17:30');
INSERT INTO `user` VALUES (333, NULL, 120901, 'dishub', 'SRI LAKSMI HANDAYANI', '$2y$10$Rq5t8ts0HTQk6fM/Hb.8ZeXvogVXxmAfOQK5ALyVtnNdjJz360caq', NULL, '078123138', 1, '579-2020-10-18-14-43-38.jpg', NULL, NULL, 3, NULL, NULL, '2020-10-07 05:45:13', '2020-10-18 14:43:38');
INSERT INTO `user` VALUES (334, NULL, 121201, 'ptsp', 'Tati Mulyati, S.IP', '$2y$10$IMhhhKbwowycbVhyhU3jaenUqt8u3vTCBfPBNsSiFg5Gd.jF3z1q2', NULL, '215351521', 1, 'default.jpg', NULL, NULL, 3, NULL, NULL, '2020-10-07 05:55:33', '2020-10-07 06:17:36');
INSERT INTO `user` VALUES (338, 546, 121301, 'pemudaolahraga', 'Wina Nurhayati, S.IP', '$2y$10$AKhvP1ycKqM.Tkss9xslQurtJhhihj62BCYtuHVpigjl92zViidfu', NULL, '8123151590', 1, NULL, NULL, NULL, 3, NULL, NULL, '2020-10-07 06:13:24', '2020-10-07 06:13:24');
INSERT INTO `user` VALUES (339, 547, 200401, 'indag1', 'Titin Suhartini, SE', '$2y$10$oOkx8zQR9KPj1k34CBi//u.4eyfkMqktN/Dq3bZMUQFQwkwh8btTi', NULL, '4746546546462', 1, NULL, NULL, NULL, 3, NULL, NULL, '2020-10-07 07:50:45', '2020-10-07 07:50:45');
INSERT INTO `user` VALUES (340, NULL, 300201, 'bapenda', 'Rosye Rosdiana, A.Md', '$2y$10$Wc.JhpYIgyMyEgWFS6VKreYkdVBjKD/xebHglgLxG2.7LIczWYhKO', NULL, '221115588', 1, 'default.jpg', NULL, NULL, 3, NULL, NULL, '2020-10-07 08:10:20', '2020-10-07 08:10:41');
INSERT INTO `user` VALUES (341, 549, 90000, 'skpkd', 'Dinar Riswanti, SE', '$2y$10$2.KvRm180SltMo/3sE.wpuGXXB/2sR1q8j5wRg5so3hKP/PKo66ZG', NULL, '02351885', 1, NULL, NULL, NULL, 3, NULL, NULL, '2020-10-07 08:13:19', '2020-10-07 08:13:19');
INSERT INTO `user` VALUES (342, 550, 300202, 'bpkad', 'Hanifah', '$2y$10$9oQ09IVgiMMi8ko4KoyWe.kBprIIc3sd25.OjM.WcBmJy/wxTd9im', NULL, '315151535', 1, NULL, NULL, NULL, 3, NULL, NULL, '2020-10-07 08:19:31', '2020-10-07 08:19:31');
INSERT INTO `user` VALUES (343, 551, 110202, 'rsu', 'dr. Umi Kulsum', '$2y$10$tr.zXkEiEc0rYFHoQx3ymeJEoT2Ph0Ml4dJr1IcfFJq4L6wgX6Twe', NULL, '1511588215', 1, NULL, NULL, NULL, 3, NULL, NULL, '2020-10-07 08:30:19', '2020-10-07 08:30:19');

SET FOREIGN_KEY_CHECKS = 1;
