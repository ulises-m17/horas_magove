/*
 Navicat MySQL Data Transfer

 Source Server         : BASES
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : proyecto_horas

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 14/12/2020 16:04:20
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for actividad_maquina
-- ----------------------------
DROP TABLE IF EXISTS `actividad_maquina`;
CREATE TABLE `actividad_maquina`  (
  `id_actividad_maquina` int NOT NULL AUTO_INCREMENT,
  `id_maquina` int NOT NULL,
  `id_actividad` int NOT NULL,
  PRIMARY KEY (`id_actividad_maquina`) USING BTREE,
  INDEX `id_maquina`(`id_maquina`) USING BTREE,
  INDEX `id_actividad`(`id_actividad`) USING BTREE,
  CONSTRAINT `id_actividad` FOREIGN KEY (`id_actividad`) REFERENCES `actividades` (`id_actividad`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `id_maquina` FOREIGN KEY (`id_maquina`) REFERENCES `maquinas` (`id_maquina`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of actividad_maquina
-- ----------------------------

-- ----------------------------
-- Table structure for actividades
-- ----------------------------
DROP TABLE IF EXISTS `actividades`;
CREATE TABLE `actividades`  (
  `id_actividad` int NOT NULL AUTO_INCREMENT,
  `actividad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_actividad`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of actividades
-- ----------------------------

-- ----------------------------
-- Table structure for detalle_proyecto
-- ----------------------------
DROP TABLE IF EXISTS `detalle_proyecto`;
CREATE TABLE `detalle_proyecto`  (
  `id_detalle_proyecto` int NOT NULL AUTO_INCREMENT,
  `id_proyecto` int NOT NULL,
  `id_maquina` int NOT NULL,
  `id_actividad` int NOT NULL,
  `id_empleado` int NOT NULL,
  `fecha_inicio` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `tiempo_transcurrido` time NOT NULL,
  PRIMARY KEY (`id_detalle_proyecto`) USING BTREE,
  INDEX `id_proyectoo`(`id_proyecto`) USING BTREE,
  INDEX `id_maquinaa`(`id_maquina`) USING BTREE,
  INDEX `id_actividadd`(`id_actividad`) USING BTREE,
  INDEX `id_empleadoo`(`id_empleado`) USING BTREE,
  CONSTRAINT `id_actividadd` FOREIGN KEY (`id_actividad`) REFERENCES `actividades` (`id_actividad`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `id_empleadoo` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `id_maquinaa` FOREIGN KEY (`id_maquina`) REFERENCES `maquinas` (`id_maquina`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `id_proyectoo` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detalle_proyecto
-- ----------------------------

-- ----------------------------
-- Table structure for empleado
-- ----------------------------
DROP TABLE IF EXISTS `empleado`;
CREATE TABLE `empleado`  (
  `id_empleado` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ap1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ap2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contrasenia` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_estatus` int NOT NULL,
  PRIMARY KEY (`id_empleado`) USING BTREE,
  INDEX `id_estatus`(`id_estatus`) USING BTREE,
  CONSTRAINT `id_estatus` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of empleado
-- ----------------------------
INSERT INTO `empleado` VALUES (1, 'Jose ulises', 'Martinez', 'Tapia', '$2y$04$4mk', 1);

-- ----------------------------
-- Table structure for estatus
-- ----------------------------
DROP TABLE IF EXISTS `estatus`;
CREATE TABLE `estatus`  (
  `id_estatus` int NOT NULL AUTO_INCREMENT,
  `estatus` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_estatus`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of estatus
-- ----------------------------
INSERT INTO `estatus` VALUES (1, 'Activo');

-- ----------------------------
-- Table structure for maquinas
-- ----------------------------
DROP TABLE IF EXISTS `maquinas`;
CREATE TABLE `maquinas`  (
  `id_maquina` int NOT NULL AUTO_INCREMENT,
  `codigo_maquina` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_maquina`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of maquinas
-- ----------------------------

-- ----------------------------
-- Table structure for proyecto
-- ----------------------------
DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE `proyecto`  (
  `id_proyecto` int NOT NULL AUTO_INCREMENT,
  `codigo_proyecto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_entrega` date NOT NULL,
  `presupuesto_horas` float(11, 2) NOT NULL,
  `avance_porcentaje` float(10, 2) NOT NULL,
  `avance_horas` float(10, 2) NOT NULL,
  `id_estatus` int NOT NULL,
  PRIMARY KEY (`id_proyecto`) USING BTREE,
  INDEX `id_estatuss`(`id_estatus`) USING BTREE,
  CONSTRAINT `id_estatuss` FOREIGN KEY (`id_estatus`) REFERENCES `estatus` (`id_estatus`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of proyecto
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
