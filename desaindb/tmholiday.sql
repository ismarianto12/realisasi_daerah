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

 Date: 27/08/2020 16:52:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tmholiday
-- ----------------------------
DROP TABLE IF EXISTS `tmholiday`;
CREATE TABLE `tmholiday`  (
  `holidayid` int(11) NOT NULL AUTO_INCREMENT,
  `d_holiday` date NOT NULL,
  `deskripsi` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`holidayid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 232 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tmholiday
-- ----------------------------
INSERT INTO `tmholiday` VALUES (1, '2016-01-01', '');
INSERT INTO `tmholiday` VALUES (2, '2016-01-02', '');
INSERT INTO `tmholiday` VALUES (3, '2016-01-03', '');
INSERT INTO `tmholiday` VALUES (4, '2016-01-09', '');
INSERT INTO `tmholiday` VALUES (5, '2016-01-10', '');
INSERT INTO `tmholiday` VALUES (6, '2016-01-16', '');
INSERT INTO `tmholiday` VALUES (7, '2016-01-17', '');
INSERT INTO `tmholiday` VALUES (8, '2016-01-23', '');
INSERT INTO `tmholiday` VALUES (9, '2016-01-24', '');
INSERT INTO `tmholiday` VALUES (10, '2016-01-30', '');
INSERT INTO `tmholiday` VALUES (11, '2016-01-31', '');
INSERT INTO `tmholiday` VALUES (12, '2016-02-06', '');
INSERT INTO `tmholiday` VALUES (13, '2016-02-07', '');
INSERT INTO `tmholiday` VALUES (14, '2016-02-08', '');
INSERT INTO `tmholiday` VALUES (15, '2016-02-13', '');
INSERT INTO `tmholiday` VALUES (16, '2016-02-14', '');
INSERT INTO `tmholiday` VALUES (17, '2016-02-20', '');
INSERT INTO `tmholiday` VALUES (18, '2016-02-21', '');
INSERT INTO `tmholiday` VALUES (19, '2016-02-27', '');
INSERT INTO `tmholiday` VALUES (20, '2016-02-28', '');
INSERT INTO `tmholiday` VALUES (21, '2016-03-05', '');
INSERT INTO `tmholiday` VALUES (22, '2016-03-06', '');
INSERT INTO `tmholiday` VALUES (23, '2016-03-12', '');
INSERT INTO `tmholiday` VALUES (24, '2016-03-09', '');
INSERT INTO `tmholiday` VALUES (25, '2016-03-13', '');
INSERT INTO `tmholiday` VALUES (26, '2016-03-19', '');
INSERT INTO `tmholiday` VALUES (27, '2016-03-20', '');
INSERT INTO `tmholiday` VALUES (28, '2016-03-26', '');
INSERT INTO `tmholiday` VALUES (29, '2016-03-25', '');
INSERT INTO `tmholiday` VALUES (30, '2016-03-27', '');
INSERT INTO `tmholiday` VALUES (31, '2016-04-02', '');
INSERT INTO `tmholiday` VALUES (32, '2016-04-09', '');
INSERT INTO `tmholiday` VALUES (33, '2016-04-16', '');
INSERT INTO `tmholiday` VALUES (34, '2016-04-23', '');
INSERT INTO `tmholiday` VALUES (35, '2016-04-30', '');
INSERT INTO `tmholiday` VALUES (36, '2016-04-03', '');
INSERT INTO `tmholiday` VALUES (37, '2016-04-10', '');
INSERT INTO `tmholiday` VALUES (38, '2016-04-17', '');
INSERT INTO `tmholiday` VALUES (39, '2016-04-24', '');
INSERT INTO `tmholiday` VALUES (40, '2016-05-01', '');
INSERT INTO `tmholiday` VALUES (41, '2016-05-08', '');
INSERT INTO `tmholiday` VALUES (42, '2016-05-15', '');
INSERT INTO `tmholiday` VALUES (43, '2016-05-22', '');
INSERT INTO `tmholiday` VALUES (44, '2016-05-29', '');
INSERT INTO `tmholiday` VALUES (45, '2016-05-07', '');
INSERT INTO `tmholiday` VALUES (46, '2016-05-14', '');
INSERT INTO `tmholiday` VALUES (47, '2016-05-21', '');
INSERT INTO `tmholiday` VALUES (48, '2016-05-28', '');
INSERT INTO `tmholiday` VALUES (49, '2016-05-05', '');
INSERT INTO `tmholiday` VALUES (50, '2016-05-06', '');
INSERT INTO `tmholiday` VALUES (51, '2016-06-04', '');
INSERT INTO `tmholiday` VALUES (52, '2016-06-11', '');
INSERT INTO `tmholiday` VALUES (53, '2016-06-18', '');
INSERT INTO `tmholiday` VALUES (54, '2016-06-25', '');
INSERT INTO `tmholiday` VALUES (55, '2016-06-05', '');
INSERT INTO `tmholiday` VALUES (56, '2016-06-12', '');
INSERT INTO `tmholiday` VALUES (57, '2016-06-19', '');
INSERT INTO `tmholiday` VALUES (58, '2016-06-26', '');
INSERT INTO `tmholiday` VALUES (59, '2016-07-02', '');
INSERT INTO `tmholiday` VALUES (60, '2016-07-03', '');
INSERT INTO `tmholiday` VALUES (61, '2016-07-04', '');
INSERT INTO `tmholiday` VALUES (62, '2016-07-05', '');
INSERT INTO `tmholiday` VALUES (63, '2016-07-06', '');
INSERT INTO `tmholiday` VALUES (64, '2016-07-07', '');
INSERT INTO `tmholiday` VALUES (65, '2016-07-08', '');
INSERT INTO `tmholiday` VALUES (66, '2016-07-09', '');
INSERT INTO `tmholiday` VALUES (67, '2016-07-10', '');
INSERT INTO `tmholiday` VALUES (68, '2016-07-16', '');
INSERT INTO `tmholiday` VALUES (69, '2016-07-17', '');
INSERT INTO `tmholiday` VALUES (70, '2016-07-23', '');
INSERT INTO `tmholiday` VALUES (71, '2016-07-24', '');
INSERT INTO `tmholiday` VALUES (72, '2016-07-30', '');
INSERT INTO `tmholiday` VALUES (73, '2016-07-31', '');
INSERT INTO `tmholiday` VALUES (74, '2016-08-06', '');
INSERT INTO `tmholiday` VALUES (75, '2016-08-13', '');
INSERT INTO `tmholiday` VALUES (76, '2016-08-20', '');
INSERT INTO `tmholiday` VALUES (77, '2016-08-27', '');
INSERT INTO `tmholiday` VALUES (78, '2016-08-07', '');
INSERT INTO `tmholiday` VALUES (79, '2016-08-14', '');
INSERT INTO `tmholiday` VALUES (80, '2016-08-21', '');
INSERT INTO `tmholiday` VALUES (81, '2016-08-28', '');
INSERT INTO `tmholiday` VALUES (82, '2016-08-17', '');
INSERT INTO `tmholiday` VALUES (83, '2016-09-03', '');
INSERT INTO `tmholiday` VALUES (84, '2016-09-10', '');
INSERT INTO `tmholiday` VALUES (85, '2016-09-17', '');
INSERT INTO `tmholiday` VALUES (86, '2016-09-24', '');
INSERT INTO `tmholiday` VALUES (87, '2016-09-04', '');
INSERT INTO `tmholiday` VALUES (88, '2016-09-11', '');
INSERT INTO `tmholiday` VALUES (89, '2016-09-18', '');
INSERT INTO `tmholiday` VALUES (90, '2016-09-25', '');
INSERT INTO `tmholiday` VALUES (91, '2016-09-12', '');
INSERT INTO `tmholiday` VALUES (92, '2016-10-01', '');
INSERT INTO `tmholiday` VALUES (93, '2016-10-08', '');
INSERT INTO `tmholiday` VALUES (94, '2016-10-15', '');
INSERT INTO `tmholiday` VALUES (95, '2016-10-22', '');
INSERT INTO `tmholiday` VALUES (96, '2016-10-29', '');
INSERT INTO `tmholiday` VALUES (97, '2016-10-30', '');
INSERT INTO `tmholiday` VALUES (98, '2016-10-23', '');
INSERT INTO `tmholiday` VALUES (99, '2016-10-16', '');
INSERT INTO `tmholiday` VALUES (100, '2016-10-09', '');
INSERT INTO `tmholiday` VALUES (101, '2016-10-02', '');
INSERT INTO `tmholiday` VALUES (102, '2016-11-05', '');
INSERT INTO `tmholiday` VALUES (103, '2016-11-12', '');
INSERT INTO `tmholiday` VALUES (104, '2016-11-19', '');
INSERT INTO `tmholiday` VALUES (105, '2016-11-26', '');
INSERT INTO `tmholiday` VALUES (106, '2016-11-06', '');
INSERT INTO `tmholiday` VALUES (107, '2016-11-13', '');
INSERT INTO `tmholiday` VALUES (108, '2016-11-20', '');
INSERT INTO `tmholiday` VALUES (109, '2016-11-27', '');
INSERT INTO `tmholiday` VALUES (110, '2016-12-03', '');
INSERT INTO `tmholiday` VALUES (111, '2016-12-10', '');
INSERT INTO `tmholiday` VALUES (112, '2016-12-17', '');
INSERT INTO `tmholiday` VALUES (113, '2016-12-24', '');
INSERT INTO `tmholiday` VALUES (114, '2016-12-31', '');
INSERT INTO `tmholiday` VALUES (115, '2016-12-25', '');
INSERT INTO `tmholiday` VALUES (116, '2016-12-18', '');
INSERT INTO `tmholiday` VALUES (117, '2016-12-11', '');
INSERT INTO `tmholiday` VALUES (118, '2016-12-04', '');
INSERT INTO `tmholiday` VALUES (119, '2016-12-26', '');
INSERT INTO `tmholiday` VALUES (120, '2016-12-12', '');
INSERT INTO `tmholiday` VALUES (128, '2017-01-01', '');
INSERT INTO `tmholiday` VALUES (129, '2017-01-08', '');
INSERT INTO `tmholiday` VALUES (130, '2017-01-15', '');
INSERT INTO `tmholiday` VALUES (131, '2017-01-22', '');
INSERT INTO `tmholiday` VALUES (132, '2017-01-29', '');
INSERT INTO `tmholiday` VALUES (133, '2017-01-07', '');
INSERT INTO `tmholiday` VALUES (134, '2017-01-14', '');
INSERT INTO `tmholiday` VALUES (135, '2017-01-21', '');
INSERT INTO `tmholiday` VALUES (136, '2017-01-28', '');
INSERT INTO `tmholiday` VALUES (137, '2017-02-04', '');
INSERT INTO `tmholiday` VALUES (138, '2017-02-11', '');
INSERT INTO `tmholiday` VALUES (139, '2017-02-18', '');
INSERT INTO `tmholiday` VALUES (140, '2017-02-25', '');
INSERT INTO `tmholiday` VALUES (141, '2017-02-05', '');
INSERT INTO `tmholiday` VALUES (142, '2017-02-12', '');
INSERT INTO `tmholiday` VALUES (143, '2017-02-19', '');
INSERT INTO `tmholiday` VALUES (144, '2017-02-26', '');
INSERT INTO `tmholiday` VALUES (145, '2017-03-04', '');
INSERT INTO `tmholiday` VALUES (146, '2017-03-11', '');
INSERT INTO `tmholiday` VALUES (147, '2017-03-18', '');
INSERT INTO `tmholiday` VALUES (148, '2017-03-25', '');
INSERT INTO `tmholiday` VALUES (149, '2017-03-05', '');
INSERT INTO `tmholiday` VALUES (150, '2017-03-12', '');
INSERT INTO `tmholiday` VALUES (151, '2017-03-19', '');
INSERT INTO `tmholiday` VALUES (152, '2017-03-26', '');
INSERT INTO `tmholiday` VALUES (153, '2017-04-01', '');
INSERT INTO `tmholiday` VALUES (154, '2017-04-08', '');
INSERT INTO `tmholiday` VALUES (155, '2017-04-15', '');
INSERT INTO `tmholiday` VALUES (156, '2017-04-22', '');
INSERT INTO `tmholiday` VALUES (157, '2017-04-29', '');
INSERT INTO `tmholiday` VALUES (158, '2017-04-02', '');
INSERT INTO `tmholiday` VALUES (159, '2017-04-09', '');
INSERT INTO `tmholiday` VALUES (160, '2017-04-16', '');
INSERT INTO `tmholiday` VALUES (161, '2017-04-23', '');
INSERT INTO `tmholiday` VALUES (162, '2017-04-30', '');
INSERT INTO `tmholiday` VALUES (163, '2017-05-06', '');
INSERT INTO `tmholiday` VALUES (164, '2017-05-13', '');
INSERT INTO `tmholiday` VALUES (165, '2017-05-20', '');
INSERT INTO `tmholiday` VALUES (166, '2017-05-27', '');
INSERT INTO `tmholiday` VALUES (167, '2017-05-07', '');
INSERT INTO `tmholiday` VALUES (168, '2017-05-14', '');
INSERT INTO `tmholiday` VALUES (169, '2017-05-21', '');
INSERT INTO `tmholiday` VALUES (170, '2017-05-28', '');
INSERT INTO `tmholiday` VALUES (171, '2017-06-03', '');
INSERT INTO `tmholiday` VALUES (172, '2017-06-10', '');
INSERT INTO `tmholiday` VALUES (173, '2017-06-17', '');
INSERT INTO `tmholiday` VALUES (174, '2017-06-24', '');
INSERT INTO `tmholiday` VALUES (175, '2017-06-04', '');
INSERT INTO `tmholiday` VALUES (176, '2017-06-11', '');
INSERT INTO `tmholiday` VALUES (177, '2017-06-18', '');
INSERT INTO `tmholiday` VALUES (178, '2017-06-25', '');
INSERT INTO `tmholiday` VALUES (179, '2017-07-01', '');
INSERT INTO `tmholiday` VALUES (180, '2017-07-08', '');
INSERT INTO `tmholiday` VALUES (181, '2017-07-15', '');
INSERT INTO `tmholiday` VALUES (182, '2017-07-22', '');
INSERT INTO `tmholiday` VALUES (183, '2017-07-29', '');
INSERT INTO `tmholiday` VALUES (184, '2017-07-02', '');
INSERT INTO `tmholiday` VALUES (185, '2017-07-16', '');
INSERT INTO `tmholiday` VALUES (186, '2017-07-23', '');
INSERT INTO `tmholiday` VALUES (187, '2017-07-30', '');
INSERT INTO `tmholiday` VALUES (188, '2017-08-05', '');
INSERT INTO `tmholiday` VALUES (189, '2017-08-12', '');
INSERT INTO `tmholiday` VALUES (190, '2017-08-19', '');
INSERT INTO `tmholiday` VALUES (191, '2017-08-26', '');
INSERT INTO `tmholiday` VALUES (192, '2017-08-06', '');
INSERT INTO `tmholiday` VALUES (193, '2017-08-13', '');
INSERT INTO `tmholiday` VALUES (194, '2017-08-20', '');
INSERT INTO `tmholiday` VALUES (195, '2017-08-27', '');
INSERT INTO `tmholiday` VALUES (196, '2017-09-02', '');
INSERT INTO `tmholiday` VALUES (197, '2017-09-09', '');
INSERT INTO `tmholiday` VALUES (198, '2017-09-16', '');
INSERT INTO `tmholiday` VALUES (199, '2017-09-23', '');
INSERT INTO `tmholiday` VALUES (200, '2017-09-30', '');
INSERT INTO `tmholiday` VALUES (201, '2017-09-03', '');
INSERT INTO `tmholiday` VALUES (202, '2017-09-10', '');
INSERT INTO `tmholiday` VALUES (203, '2017-09-17', '');
INSERT INTO `tmholiday` VALUES (204, '2017-09-24', '');
INSERT INTO `tmholiday` VALUES (205, '2017-10-07', '');
INSERT INTO `tmholiday` VALUES (206, '2017-10-14', '');
INSERT INTO `tmholiday` VALUES (207, '2017-10-21', '');
INSERT INTO `tmholiday` VALUES (208, '2017-10-28', '');
INSERT INTO `tmholiday` VALUES (209, '2017-10-01', '');
INSERT INTO `tmholiday` VALUES (210, '2017-10-08', '');
INSERT INTO `tmholiday` VALUES (211, '2017-10-15', '');
INSERT INTO `tmholiday` VALUES (212, '2017-10-22', '');
INSERT INTO `tmholiday` VALUES (213, '2017-10-29', '');
INSERT INTO `tmholiday` VALUES (214, '2017-11-04', '');
INSERT INTO `tmholiday` VALUES (215, '2017-11-11', '');
INSERT INTO `tmholiday` VALUES (216, '2017-11-18', '');
INSERT INTO `tmholiday` VALUES (217, '2017-11-25', '');
INSERT INTO `tmholiday` VALUES (218, '2017-11-05', '');
INSERT INTO `tmholiday` VALUES (219, '2017-11-12', '');
INSERT INTO `tmholiday` VALUES (220, '2017-11-19', '');
INSERT INTO `tmholiday` VALUES (221, '2017-11-26', '');
INSERT INTO `tmholiday` VALUES (222, '2017-12-02', '');
INSERT INTO `tmholiday` VALUES (223, '2017-12-09', '');
INSERT INTO `tmholiday` VALUES (224, '2017-12-16', '');
INSERT INTO `tmholiday` VALUES (225, '2017-12-23', '');
INSERT INTO `tmholiday` VALUES (226, '2017-12-30', '');
INSERT INTO `tmholiday` VALUES (227, '2017-12-03', '');
INSERT INTO `tmholiday` VALUES (228, '2017-12-10', '');
INSERT INTO `tmholiday` VALUES (229, '2017-12-17', '');
INSERT INTO `tmholiday` VALUES (230, '2017-12-24', '');
INSERT INTO `tmholiday` VALUES (231, '2017-12-31', '');

SET FOREIGN_KEY_CHECKS = 1;
