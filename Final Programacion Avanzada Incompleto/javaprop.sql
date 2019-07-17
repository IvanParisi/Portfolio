/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : javaprop

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 17/07/2019 15:34:53
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for casa
-- ----------------------------
DROP TABLE IF EXISTS `casa`;
CREATE TABLE `casa`  (
  `fk_id_inmueble` int(11) NOT NULL,
  `tiene_garaje` tinyint(1) NOT NULL,
  `tiene_pileta` tinyint(1) NOT NULL,
  `tiene_jardin` tinyint(1) NOT NULL,
  PRIMARY KEY (`fk_id_inmueble`) USING BTREE,
  UNIQUE INDEX `fk_id_inmueble_UNIQUE`(`fk_id_inmueble`) USING BTREE,
  CONSTRAINT `fk_id_inmueble_casa` FOREIGN KEY (`fk_id_inmueble`) REFERENCES `inmueble` (`id_inmueble`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of casa
-- ----------------------------
INSERT INTO `casa` VALUES (1, 1, 0, 1);
INSERT INTO `casa` VALUES (2, 1, 0, 0);
INSERT INTO `casa` VALUES (6, 0, 0, 0);
INSERT INTO `casa` VALUES (11, 0, 1, 0);
INSERT INTO `casa` VALUES (12, 0, 0, 1);
INSERT INTO `casa` VALUES (18, 1, 1, 0);
INSERT INTO `casa` VALUES (19, 1, 1, 1);
INSERT INTO `casa` VALUES (21, 0, 1, 1);

-- ----------------------------
-- Table structure for cliente
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente`  (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellido` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mail` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `movil` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_cliente`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 87 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of cliente
-- ----------------------------
INSERT INTO `cliente` VALUES (1, 'Nelida Maitena', 'Vaz', 'nelida_vaz157@ma1l.com', '1151715129');
INSERT INTO `cliente` VALUES (2, 'Eliana Ailen', 'Reyna', 'reyna.eliana153@hushma1l.com', '1123354472');
INSERT INTO `cliente` VALUES (3, 'Blas Fabian', 'Morais', 'blas_morais@yah00.com', '1129787273');
INSERT INTO `cliente` VALUES (4, 'Herminia ', 'Moraes', 'herminia_moraes113@h0tma1l.com', '1167191057');
INSERT INTO `cliente` VALUES (5, 'Angel Roque', 'Albuquerque', 'angel_albuquerque127@yah00.com', '1155998732');
INSERT INTO `cliente` VALUES (6, 'Yanina ', 'Mongelos Cotto', 'yanina_mongelos189@1nb0x.com', '1150207651');
INSERT INTO `cliente` VALUES (7, 'Silvina Tamara', 'Paez', 'silvina_paez@yah00.com', '1167674057');
INSERT INTO `cliente` VALUES (8, 'Galo Isaias', 'Melgar', 'melgar.galo175@z0h0.com', '1169053238');
INSERT INTO `cliente` VALUES (9, 'Luna Sol', 'Reyes', 'luna_reyes@0utl00k.com', '1136868774');
INSERT INTO `cliente` VALUES (10, 'Avril Malvina', 'Rodriguez Arocho', 'avril_rodriguez70@hushma1l.com', '1148633623');
INSERT INTO `cliente` VALUES (11, 'Alejandro Tadeo', 'Robin', 'alejandro_robin@h0tma1l.com', '1149680005');
INSERT INTO `cliente` VALUES (12, 'Lisandro Reinaldo', 'Siqueira', 'lisandro.siqueira@gma1l.com', '1137208094');
INSERT INTO `cliente` VALUES (13, 'Simona Juliana', 'Bertrand', 'simona_bertrand@h0tma1l.com', '1146680272');
INSERT INTO `cliente` VALUES (14, 'Felisa Kiara', 'Kaufmann', 'kaufmann_felisa134@1nb0x.com', '1137522441');
INSERT INTO `cliente` VALUES (15, 'Tahiel Thiago', 'Barros', 'tahiel.barros128@yah00.com', '1136994120');
INSERT INTO `cliente` VALUES (16, 'Evangelina ', 'Ferrufino', 'evangelina.ferrufino76@f1bertel.com', '1124128420');
INSERT INTO `cliente` VALUES (17, 'Aylen Analia', 'Cristaldo Britez', 'aylen.cristaldo@z0h0.com', '1130902354');
INSERT INTO `cliente` VALUES (18, 'Lucio ', 'Familia', 'lucio_familia@1nb0x.com', '1157136173');
INSERT INTO `cliente` VALUES (19, 'Claudio Arturo', 'Parisi Ortigoza', 'claudio_parisi73@hushma1l.com', '1149764557');
INSERT INTO `cliente` VALUES (20, 'Amelia ', 'Valmond', 'amelia_valmond159@1nb0x.com', '1165113441');
INSERT INTO `cliente` VALUES (21, 'Gian Teo', 'Langer', 'gian.langer173@h0tma1l.com', '1160545047');
INSERT INTO `cliente` VALUES (22, 'Celia Mercedes', 'Olmedo', 'olmedo.celia@z0h0.com', '1143273240');
INSERT INTO `cliente` VALUES (23, 'Florencia Antonela', 'Oliveira Villamizar', 'florencia_oliveira166@0utl00k.com', '1135945214');
INSERT INTO `cliente` VALUES (24, 'Gregoria ', 'Vidal', 'gregoria_vidal100@gma1l.com', '1149375383');
INSERT INTO `cliente` VALUES (25, 'Juan ', 'Hinojosa Servin', 'juan.hinojosa181@h0tma1l.com', '1169260072');
INSERT INTO `cliente` VALUES (26, 'Fabrizio Alcides', 'Coelho', 'fabrizio_coelho118@1nb0x.com', '1124339541');
INSERT INTO `cliente` VALUES (27, 'Azul Herminia', 'Vitali', 'vitali.azul163@f1bertel.com', '1126611616');
INSERT INTO `cliente` VALUES (28, 'Gregoria Justina', 'Zegarra', 'gregoria.zegarra144@gma1l.com', '1169607150');
INSERT INTO `cliente` VALUES (29, 'Estefania Helena', 'Jean', 'estefania.jean132@1nb0x.com', '1150978928');
INSERT INTO `cliente` VALUES (30, 'Matilde Ines', 'Volpe Russell', 'matilde_volpe137@1nb0x.com', '1135643295');
INSERT INTO `cliente` VALUES (31, 'Tomasa Xiomara', 'Schumann', 'tomasa.schumann189@gma1l.com', '1133201627');
INSERT INTO `cliente` VALUES (32, 'Sonia Oriana', 'Palumbo', 'sonia.palumbo112@z0h0.com', '1166824765');
INSERT INTO `cliente` VALUES (33, 'Ambar ', 'Alcivar', 'ambar.alcivar145@yah00.com', '1144354076');
INSERT INTO `cliente` VALUES (34, 'Manuel Gabriel', 'Bobadilla Jackson', 'manuel.bobadilla@h0tma1l.com', '1164490600');
INSERT INTO `cliente` VALUES (35, 'Isidro Marco', 'Cardona German', 'isidro.cardona114@ma1l.com', '1163062378');
INSERT INTO `cliente` VALUES (36, 'Julio Nahuel', 'Chicaiza', 'chicaiza.julio178@0utl00k.com', '1142262769');
INSERT INTO `cliente` VALUES (37, 'Enrique Alfredo', 'Quiones', 'quiones_enrique184@yah00.com', '1165543326');
INSERT INTO `cliente` VALUES (38, 'Fernando Richard', 'Mariani Castaño', 'fernando.mariani@yah00.com', '1155895684');
INSERT INTO `cliente` VALUES (39, 'Richard Faustino', 'Ferrara', 'richard_ferrara82@gma1l.com', '1121889193');
INSERT INTO `cliente` VALUES (40, 'Azul ', 'Donoso', 'azul_donoso@gma1l.com', '1128210647');
INSERT INTO `cliente` VALUES (41, 'Mauro Fermin', 'Bannis', 'mauro_bannis@h0tma1l.com', '1159057101');
INSERT INTO `cliente` VALUES (42, 'Eduardo Miguel', 'Li', 'li_eduardo134@h0tma1l.com', '1125279881');
INSERT INTO `cliente` VALUES (43, 'Vito Camilo', 'Coleman Pichardo', 'vito.coleman99@1nb0x.com', '1145154509');
INSERT INTO `cliente` VALUES (44, 'Victoria ', 'Soza', 'victoria.soza147@ma1l.com', '1161471155');
INSERT INTO `cliente` VALUES (45, 'Adolfo Matias', 'Terrazas Serafini', 'adolfo.terrazas107@1nb0x.com', '1142365250');
INSERT INTO `cliente` VALUES (46, 'Mary Angelina', 'Oyarzun', 'mary.oyarzun151@0utl00k.com', '1147464697');
INSERT INTO `cliente` VALUES (47, 'Jorgelina Helena', 'Benito', 'benito.jorgelina@f1bertel.com', '1162257002');
INSERT INTO `cliente` VALUES (48, 'Paola Elba', 'Alderete', 'alderete_paola115@hushma1l.com', '1162754648');
INSERT INTO `cliente` VALUES (49, 'Emily Beatriz', 'Jung', 'jung.emily130@f1bertel.com', '1140417688');
INSERT INTO `cliente` VALUES (50, 'Nahuel ', 'Cabral Watson', 'cabral.nahuel57@ma1l.com', '1127126484');
INSERT INTO `cliente` VALUES (51, 'Pamela Paula', 'Francois', 'pamela_francois126@hushma1l.com', '1142271070');
INSERT INTO `cliente` VALUES (52, 'Cristina Leticia', 'Hinojosa Oporta', 'cristina_hinojosa147@gma1l.com', '1146185039');
INSERT INTO `cliente` VALUES (53, 'Gregorio Ramon', 'Navarrete', 'gregorio_navarrete@f1bertel.com', '1152638491');
INSERT INTO `cliente` VALUES (54, 'Benito Oscar', 'Sacco Mancia', 'benito.sacco193@1nb0x.com', '1155159126');
INSERT INTO `cliente` VALUES (55, 'Angelica ', 'Ulloa', 'angelica.ulloa185@0utl00k.com', '1133099795');
INSERT INTO `cliente` VALUES (56, 'Valentino Iñaki', 'Amaya', 'valentino.amaya123@yah00.com', '1139883062');
INSERT INTO `cliente` VALUES (57, 'David Braian', 'Roldan', 'david.roldan@h0tma1l.com', '1137192829');
INSERT INTO `cliente` VALUES (58, 'Norma Serena', 'Pontes', 'norma_pontes192@0utl00k.com', '1159401600');
INSERT INTO `cliente` VALUES (59, 'Francisco Gerardo', 'Martnez', 'francisco_martnez@yah00.com', '1123654991');
INSERT INTO `cliente` VALUES (60, 'Rosana ', 'Ruggeri', 'rosana_ruggeri79@z0h0.com', '1120606722');
INSERT INTO `cliente` VALUES (61, 'Johanna Nelida', 'Aramayo', 'johanna.aramayo@hushma1l.com', '1153070114');
INSERT INTO `cliente` VALUES (62, 'Rita Mariana', 'Reynoso', 'rita_reynoso@gma1l.com', '1131988483');
INSERT INTO `cliente` VALUES (63, 'Helena Lucila', 'Powell', 'helena_powell111@yah00.com', '1160536017');
INSERT INTO `cliente` VALUES (64, 'Susana Vanina', 'Varas', 'susana_varas102@gma1l.com', '1123592421');
INSERT INTO `cliente` VALUES (65, 'Elida Melany', 'Gaitan', 'gaitan.elida142@1nb0x.com', '1163299802');
INSERT INTO `cliente` VALUES (66, 'Teresa Mabel', 'Morinigo Joseph', 'morinigo_teresa@gma1l.com', '1164151106');
INSERT INTO `cliente` VALUES (67, 'Giuliana Ayelen', 'Titre Napoles', 'giuliana.titre107@ma1l.com', '1132303016');
INSERT INTO `cliente` VALUES (68, 'Delfina Irina', 'Stedman', 'stedman.delfina@1nb0x.com', '1153693156');
INSERT INTO `cliente` VALUES (69, 'Mariela Florentina', 'Lozano', 'lozano.mariela140@z0h0.com', '1126774936');
INSERT INTO `cliente` VALUES (70, 'Ariel Amadeo', 'Alas', 'ariel.alas@z0h0.com', '1122386189');
INSERT INTO `cliente` VALUES (71, 'Barbara Luz', 'Martini', 'barbara_martini@f1bertel.com', '1156806316');
INSERT INTO `cliente` VALUES (72, 'Arturo Roman', 'Iraheta', 'arturo.iraheta137@z0h0.com', '1156621860');
INSERT INTO `cliente` VALUES (73, 'Santiago Joaquin', 'Fabien', 'santiago.fabien@ma1l.com', '1138172067');
INSERT INTO `cliente` VALUES (74, 'Paulina Abril', 'Cardenas', 'paulina_cardenas@f1bertel.com', '1129465807');
INSERT INTO `cliente` VALUES (75, 'Gustavo Sergio', 'Conde', 'conde_gustavo105@hushma1l.com', '1146918778');
INSERT INTO `cliente` VALUES (76, 'Catalina Zulma', 'Mosca Alleyne', 'catalina_mosca128@f1bertel.com', '1162608597');
INSERT INTO `cliente` VALUES (77, 'Roberto Gaston', 'Carvajal', 'roberto.carvajal150@gma1l.com', '1166260736');
INSERT INTO `cliente` VALUES (78, 'Hugo Claudio', 'Morancie', 'hugo_morancie67@h0tma1l.com', '1143438135');
INSERT INTO `cliente` VALUES (79, 'Felicitas ', 'Menendez Sanabria', 'felicitas_menendez@1nb0x.com', '1167475918');
INSERT INTO `cliente` VALUES (80, 'Julieta Helena', 'Pascal Barboza', 'julieta.pascal80@gma1l.com', '1165525008');
INSERT INTO `cliente` VALUES (81, 'Ambar Solange', 'Villamar', 'ambar.villamar@ma1l.com', '1133839886');
INSERT INTO `cliente` VALUES (82, 'Lautaro Arnaldo', 'Zhang Deoliveira', 'lautaro.zhang@h0tma1l.com', '1146802362');
INSERT INTO `cliente` VALUES (83, 'Evangelina Haydee', 'Dacosta', 'evangelina.dacosta61@0utl00k.com', '1137608264');
INSERT INTO `cliente` VALUES (84, 'Guadalupe Angelina', 'Bruno D\'Ambrosio', 'guadalupe.bruno115@hushma1l.com', '1124143689');
INSERT INTO `cliente` VALUES (85, 'Javier Mariano', 'Melgar', 'melgar_javier152@gma1l.com', '1154525979');
INSERT INTO `cliente` VALUES (86, 'Carmen Luisana', 'Sommer Zalazar', 'carmen.sommer57@h0tma1l.com', '1124360036');

-- ----------------------------
-- Table structure for departamento
-- ----------------------------
DROP TABLE IF EXISTS `departamento`;
CREATE TABLE `departamento`  (
  `fk_id_inmueble` int(11) NOT NULL,
  `tiene_cochera` tinyint(1) NOT NULL,
  `tiene_baulera` tinyint(1) NOT NULL,
  PRIMARY KEY (`fk_id_inmueble`) USING BTREE,
  INDEX `fk_id_inmueble_departamento_idx`(`fk_id_inmueble`) USING BTREE,
  CONSTRAINT `fk_id_inmueble_departamento` FOREIGN KEY (`fk_id_inmueble`) REFERENCES `inmueble` (`id_inmueble`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of departamento
-- ----------------------------
INSERT INTO `departamento` VALUES (3, 0, 0);
INSERT INTO `departamento` VALUES (4, 1, 0);
INSERT INTO `departamento` VALUES (5, 0, 0);
INSERT INTO `departamento` VALUES (7, 1, 0);
INSERT INTO `departamento` VALUES (8, 1, 1);
INSERT INTO `departamento` VALUES (9, 0, 0);
INSERT INTO `departamento` VALUES (10, 1, 0);
INSERT INTO `departamento` VALUES (13, 0, 1);
INSERT INTO `departamento` VALUES (14, 0, 1);
INSERT INTO `departamento` VALUES (15, 0, 0);
INSERT INTO `departamento` VALUES (16, 1, 1);
INSERT INTO `departamento` VALUES (17, 0, 0);
INSERT INTO `departamento` VALUES (20, 0, 1);
INSERT INTO `departamento` VALUES (22, 1, 1);

-- ----------------------------
-- Table structure for inmobiliaria
-- ----------------------------
DROP TABLE IF EXISTS `inmobiliaria`;
CREATE TABLE `inmobiliaria`  (
  `id_inmobiliaria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mail` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `comision` double NOT NULL,
  PRIMARY KEY (`id_inmobiliaria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of inmobiliaria
-- ----------------------------
INSERT INTO `inmobiliaria` VALUES (1, 'Sweet Home', 'sw.ho@javaprop.com', 0.032);
INSERT INTO `inmobiliaria` VALUES (2, 'Casita Feliz', 'ca.fe@javaprop.com', 0.037);
INSERT INTO `inmobiliaria` VALUES (3, '4 Paredes', 'cuatro_paredes@javaprop.com', 0.034);

-- ----------------------------
-- Table structure for inmueble
-- ----------------------------
DROP TABLE IF EXISTS `inmueble`;
CREATE TABLE `inmueble`  (
  `id_inmueble` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_inmobiliaria` int(11) NOT NULL,
  `calle` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `altura` int(10) UNSIGNED NOT NULL,
  `piso` int(11) NULL DEFAULT NULL,
  `depto` varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `barrio` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `superficie` double UNSIGNED NOT NULL,
  `cant_ambientes` int(11) NOT NULL,
  `precio` double UNSIGNED NOT NULL,
  `reservado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_inmueble`) USING BTREE,
  INDEX `fk_id_inmobiliaria_idx`(`fk_id_inmobiliaria`) USING BTREE,
  CONSTRAINT `fk_id_inmobiliaria` FOREIGN KEY (`fk_id_inmobiliaria`) REFERENCES `inmobiliaria` (`id_inmobiliaria`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of inmueble
-- ----------------------------
INSERT INTO `inmueble` VALUES (1, 1, 'Gregorio de Laferrere', 1007, NULL, NULL, 'Flores', 41.3, 3, 98000, 1);
INSERT INTO `inmueble` VALUES (2, 1, 'Caracas', 84, NULL, NULL, 'Flores', 58.4, 4, 163000, 0);
INSERT INTO `inmueble` VALUES (3, 1, 'Berg Carlos', 1368, 11, 'I', 'Villa Soldati', 43.2, 3, 43500, 1);
INSERT INTO `inmueble` VALUES (4, 1, 'Pedernera', 166, 5, 'H', 'Flores', 29.4, 1, 54000, 0);
INSERT INTO `inmueble` VALUES (5, 1, 'Tinogasta', 1515, 11, 'I', 'Villa Del Parque', 40.4, 3, 101000, 1);
INSERT INTO `inmueble` VALUES (6, 1, 'Yerbal', 538, NULL, 'F', 'Caballito', 34.4, 2, 75300, 0);
INSERT INTO `inmueble` VALUES (7, 1, 'Culpina', 30, 9, 'D', 'Flores', 35.1, 2, 77800, 0);
INSERT INTO `inmueble` VALUES (8, 1, 'Chivilcoy Av.', 3342, 0, 'D', 'Villa Devoto', 38.7, 2, 87000, 1);
INSERT INTO `inmueble` VALUES (9, 2, 'Simbron', 416, 11, 'G', 'Villa Devoto', 32, 2, 98000, 1);
INSERT INTO `inmueble` VALUES (10, 2, 'Rivera Pedro I. Dr.', 2296, 3, 'B', 'Belgrano', 38.2, 2, 113000, 0);
INSERT INTO `inmueble` VALUES (11, 2, 'Figueroa Alcorta Pres. Av.', 2713, NULL, 'C', 'Palermo', 65.4, 4, 231000, 0);
INSERT INTO `inmueble` VALUES (12, 2, 'Zapiola', 2124, NULL, 'G', 'Belgrano', 49.1, 3, 123000, 0);
INSERT INTO `inmueble` VALUES (13, 2, 'Camarones', 2338, 14, 'I', 'Versalles', 26.2, 2, 55000, 1);
INSERT INTO `inmueble` VALUES (14, 2, 'Pacheco', 144, 14, 'G', 'Villa Urquiza', 28.1, 1, 76500, 1);
INSERT INTO `inmueble` VALUES (15, 2, 'Baez', 78, 4, NULL, 'Palermo', 88.9, 5, 364000, 0);
INSERT INTO `inmueble` VALUES (16, 2, 'Gallo', 148, 14, 'D', 'Recoleta', 62.8, 3, 228000, 1);
INSERT INTO `inmueble` VALUES (17, 3, 'Lavalle', 84, 6, 'G', 'San Nicolas', 24.2, 1, 62000, 0);
INSERT INTO `inmueble` VALUES (18, 3, 'Mexico', 517, NULL, 'E', 'Monserrat', 52.8, 3, 126000, 1);
INSERT INTO `inmueble` VALUES (19, 3, 'Fonrouge', 390, NULL, NULL, 'Liniers', 76.3, 5, 197000, 0);
INSERT INTO `inmueble` VALUES (20, 3, 'Rafaela', 3365, 2, 'G', 'Villa Luro', 33.9, 2, 64400, 0);
INSERT INTO `inmueble` VALUES (21, 3, 'Lugones', 1385, NULL, 'H', 'Villa Ortuzar', 48.3, 3, 133000, 0);
INSERT INTO `inmueble` VALUES (22, 3, 'Tinogasta', 5110, 7, 'C', 'Villa Real', 36.6, 2, 76000, 0);

-- ----------------------------
-- Table structure for inmuebles_clientes
-- ----------------------------
DROP TABLE IF EXISTS `inmuebles_clientes`;
CREATE TABLE `inmuebles_clientes`  (
  `fk_id_inmueble` int(11) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`fk_id_inmueble`, `fk_id_cliente`) USING BTREE,
  INDEX `fk_id_cliente_idx`(`fk_id_cliente`) USING BTREE,
  CONSTRAINT `fk_id_cliente` FOREIGN KEY (`fk_id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_id_inmueble_inmuebles_clientes` FOREIGN KEY (`fk_id_inmueble`) REFERENCES `inmueble` (`id_inmueble`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of inmuebles_clientes
-- ----------------------------
INSERT INTO `inmuebles_clientes` VALUES (1, 27);
INSERT INTO `inmuebles_clientes` VALUES (1, 46);
INSERT INTO `inmuebles_clientes` VALUES (1, 55);
INSERT INTO `inmuebles_clientes` VALUES (1, 68);
INSERT INTO `inmuebles_clientes` VALUES (1, 72);
INSERT INTO `inmuebles_clientes` VALUES (1, 74);
INSERT INTO `inmuebles_clientes` VALUES (2, 8);
INSERT INTO `inmuebles_clientes` VALUES (2, 43);
INSERT INTO `inmuebles_clientes` VALUES (2, 48);
INSERT INTO `inmuebles_clientes` VALUES (3, 10);
INSERT INTO `inmuebles_clientes` VALUES (3, 49);
INSERT INTO `inmuebles_clientes` VALUES (3, 56);
INSERT INTO `inmuebles_clientes` VALUES (3, 66);
INSERT INTO `inmuebles_clientes` VALUES (3, 75);
INSERT INTO `inmuebles_clientes` VALUES (3, 79);
INSERT INTO `inmuebles_clientes` VALUES (4, 8);
INSERT INTO `inmuebles_clientes` VALUES (4, 73);
INSERT INTO `inmuebles_clientes` VALUES (5, 30);
INSERT INTO `inmuebles_clientes` VALUES (5, 38);
INSERT INTO `inmuebles_clientes` VALUES (5, 39);
INSERT INTO `inmuebles_clientes` VALUES (6, 31);
INSERT INTO `inmuebles_clientes` VALUES (6, 36);
INSERT INTO `inmuebles_clientes` VALUES (6, 58);
INSERT INTO `inmuebles_clientes` VALUES (6, 60);
INSERT INTO `inmuebles_clientes` VALUES (6, 63);
INSERT INTO `inmuebles_clientes` VALUES (6, 65);
INSERT INTO `inmuebles_clientes` VALUES (6, 66);
INSERT INTO `inmuebles_clientes` VALUES (6, 68);
INSERT INTO `inmuebles_clientes` VALUES (7, 14);
INSERT INTO `inmuebles_clientes` VALUES (7, 21);
INSERT INTO `inmuebles_clientes` VALUES (7, 22);
INSERT INTO `inmuebles_clientes` VALUES (7, 40);
INSERT INTO `inmuebles_clientes` VALUES (7, 86);
INSERT INTO `inmuebles_clientes` VALUES (8, 8);
INSERT INTO `inmuebles_clientes` VALUES (8, 12);
INSERT INTO `inmuebles_clientes` VALUES (8, 34);
INSERT INTO `inmuebles_clientes` VALUES (8, 55);
INSERT INTO `inmuebles_clientes` VALUES (8, 58);
INSERT INTO `inmuebles_clientes` VALUES (8, 64);
INSERT INTO `inmuebles_clientes` VALUES (8, 80);
INSERT INTO `inmuebles_clientes` VALUES (9, 29);
INSERT INTO `inmuebles_clientes` VALUES (9, 51);
INSERT INTO `inmuebles_clientes` VALUES (9, 56);
INSERT INTO `inmuebles_clientes` VALUES (9, 82);
INSERT INTO `inmuebles_clientes` VALUES (9, 85);
INSERT INTO `inmuebles_clientes` VALUES (10, 24);
INSERT INTO `inmuebles_clientes` VALUES (10, 71);
INSERT INTO `inmuebles_clientes` VALUES (11, 9);
INSERT INTO `inmuebles_clientes` VALUES (11, 36);
INSERT INTO `inmuebles_clientes` VALUES (11, 49);
INSERT INTO `inmuebles_clientes` VALUES (11, 55);
INSERT INTO `inmuebles_clientes` VALUES (11, 57);
INSERT INTO `inmuebles_clientes` VALUES (11, 81);
INSERT INTO `inmuebles_clientes` VALUES (11, 84);
INSERT INTO `inmuebles_clientes` VALUES (12, 13);
INSERT INTO `inmuebles_clientes` VALUES (12, 21);
INSERT INTO `inmuebles_clientes` VALUES (12, 52);
INSERT INTO `inmuebles_clientes` VALUES (12, 61);
INSERT INTO `inmuebles_clientes` VALUES (12, 82);
INSERT INTO `inmuebles_clientes` VALUES (13, 18);
INSERT INTO `inmuebles_clientes` VALUES (13, 50);
INSERT INTO `inmuebles_clientes` VALUES (13, 52);
INSERT INTO `inmuebles_clientes` VALUES (14, 37);
INSERT INTO `inmuebles_clientes` VALUES (14, 59);
INSERT INTO `inmuebles_clientes` VALUES (14, 61);
INSERT INTO `inmuebles_clientes` VALUES (14, 71);
INSERT INTO `inmuebles_clientes` VALUES (15, 3);
INSERT INTO `inmuebles_clientes` VALUES (15, 41);
INSERT INTO `inmuebles_clientes` VALUES (15, 51);
INSERT INTO `inmuebles_clientes` VALUES (15, 59);
INSERT INTO `inmuebles_clientes` VALUES (16, 27);
INSERT INTO `inmuebles_clientes` VALUES (16, 59);
INSERT INTO `inmuebles_clientes` VALUES (17, 1);
INSERT INTO `inmuebles_clientes` VALUES (17, 14);
INSERT INTO `inmuebles_clientes` VALUES (17, 58);
INSERT INTO `inmuebles_clientes` VALUES (17, 61);
INSERT INTO `inmuebles_clientes` VALUES (17, 65);
INSERT INTO `inmuebles_clientes` VALUES (17, 83);
INSERT INTO `inmuebles_clientes` VALUES (18, 2);
INSERT INTO `inmuebles_clientes` VALUES (18, 8);
INSERT INTO `inmuebles_clientes` VALUES (18, 9);
INSERT INTO `inmuebles_clientes` VALUES (18, 17);
INSERT INTO `inmuebles_clientes` VALUES (18, 35);
INSERT INTO `inmuebles_clientes` VALUES (18, 73);
INSERT INTO `inmuebles_clientes` VALUES (19, 29);
INSERT INTO `inmuebles_clientes` VALUES (19, 45);
INSERT INTO `inmuebles_clientes` VALUES (19, 46);
INSERT INTO `inmuebles_clientes` VALUES (19, 72);
INSERT INTO `inmuebles_clientes` VALUES (20, 14);
INSERT INTO `inmuebles_clientes` VALUES (20, 23);
INSERT INTO `inmuebles_clientes` VALUES (20, 35);
INSERT INTO `inmuebles_clientes` VALUES (21, 35);
INSERT INTO `inmuebles_clientes` VALUES (21, 50);
INSERT INTO `inmuebles_clientes` VALUES (21, 51);
INSERT INTO `inmuebles_clientes` VALUES (21, 52);
INSERT INTO `inmuebles_clientes` VALUES (21, 68);
INSERT INTO `inmuebles_clientes` VALUES (22, 10);
INSERT INTO `inmuebles_clientes` VALUES (22, 15);
INSERT INTO `inmuebles_clientes` VALUES (22, 16);
INSERT INTO `inmuebles_clientes` VALUES (22, 58);
INSERT INTO `inmuebles_clientes` VALUES (22, 79);

SET FOREIGN_KEY_CHECKS = 1;
