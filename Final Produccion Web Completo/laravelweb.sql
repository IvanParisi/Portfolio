/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : laravelweb

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 17/07/2019 15:35:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `apellido` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefono` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `dni` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `clientes_email_unique`(`email`) USING BTREE,
  UNIQUE INDEX `clientes_dni_unique`(`dni`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 101 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES (1, 'Khalil', 'Greenfelder', 'qmurray@yahoo.com', '+1-421-627-2130', '15083482', NULL, NULL);
INSERT INTO `clientes` VALUES (2, 'Saige', 'Heidenreich', 'yundt.rachael@yahoo.com', '1-596-732-1904', '13976320', NULL, NULL);
INSERT INTO `clientes` VALUES (3, 'Zita', 'Okuneva', 'earlene34@gmail.com', '1-730-537-5163', '34092309', NULL, NULL);
INSERT INTO `clientes` VALUES (4, 'Leola', 'Schultz', 'daniel.brendan@yahoo.com', '698-659-5975 x947', '17976829', NULL, NULL);
INSERT INTO `clientes` VALUES (5, 'Willow', 'Tillman', 'qharber@yahoo.com', '1-919-807-5067', '16791691', NULL, NULL);
INSERT INTO `clientes` VALUES (6, 'Kay', 'Swift', 'fpurdy@hotmail.com', '1-576-833-5379', '11485788', NULL, NULL);
INSERT INTO `clientes` VALUES (7, 'Delpha', 'Feil', 'adriel.windler@gmail.com', '739.529.0019 x7528', '31418498', NULL, NULL);
INSERT INTO `clientes` VALUES (8, 'Kobe', 'Orn', 'parisian.roslyn@gmail.com', '+1-738-316-9636', '39326081', NULL, NULL);
INSERT INTO `clientes` VALUES (9, 'Kennith', 'Kautzer', 'grayson99@gmail.com', '+1-721-916-0341', '14417274', NULL, NULL);
INSERT INTO `clientes` VALUES (10, 'Jevon', 'Koepp', 'casimer.rohan@yahoo.com', '230.307.0043', '27536539', NULL, NULL);
INSERT INTO `clientes` VALUES (11, 'Kendra', 'Mayer', 'kilback.kiara@yahoo.com', '623-702-0315', '17397700', NULL, NULL);
INSERT INTO `clientes` VALUES (12, 'Larry', 'Reinger', 'neil60@yahoo.com', '372.247.7055', '23331389', NULL, NULL);
INSERT INTO `clientes` VALUES (13, 'Jackie', 'Towne', 'zieme.rico@gmail.com', '(885) 819-0027 x10807', '30734008', NULL, NULL);
INSERT INTO `clientes` VALUES (14, 'Jettie', 'Stehr', 'doyle.kaden@yahoo.com', '+1-363-934-8383', '11372914', NULL, NULL);
INSERT INTO `clientes` VALUES (15, 'Elwyn', 'Rosenbaum', 'norberto.hayes@hotmail.com', '290.921.2128 x6052', '25411270', NULL, NULL);
INSERT INTO `clientes` VALUES (16, 'Domingo', 'Halvorson', 'green.oceane@gmail.com', '860.752.7455 x7485', '23433847', NULL, NULL);
INSERT INTO `clientes` VALUES (17, 'Natasha', 'Brekke', 'rau.koby@yahoo.com', '1-857-741-1447 x43521', '38384338', NULL, NULL);
INSERT INTO `clientes` VALUES (18, 'Alysa', 'Lowe', 'dtorp@yahoo.com', '774-424-4769 x841', '38683830', NULL, NULL);
INSERT INTO `clientes` VALUES (19, 'Amir', 'Schuppe', 'stone.wilkinson@gmail.com', '1-292-825-3995', '26324830', NULL, NULL);
INSERT INTO `clientes` VALUES (20, 'Kenton', 'Littel', 'rodriguez.nat@yahoo.com', '+1.629.523.1846', '29314844', NULL, NULL);
INSERT INTO `clientes` VALUES (21, 'Reid', 'Gusikowski', 'goyette.jay@gmail.com', '802.859.1744 x28485', '23633084', NULL, NULL);
INSERT INTO `clientes` VALUES (22, 'Rocio', 'Luettgen', 'kerluke.adolph@yahoo.com', '(568) 951-9542 x667', '32123433', NULL, NULL);
INSERT INTO `clientes` VALUES (23, 'Veronica', 'Okuneva', 'deborah.cole@yahoo.com', '(494) 555-9463', '35876836', NULL, NULL);
INSERT INTO `clientes` VALUES (24, 'Elva', 'Kshlerin', 'sauer.rosemary@hotmail.com', '231-621-8326 x748', '29192316', NULL, NULL);
INSERT INTO `clientes` VALUES (25, 'Creola', 'Mitchell', 'bashirian.jeramy@yahoo.com', '1-604-715-1431 x160', '35016655', NULL, NULL);
INSERT INTO `clientes` VALUES (26, 'Catherine', 'Dickinson', 'pwillms@yahoo.com', '+1 (760) 927-6577', '25007296', NULL, NULL);
INSERT INTO `clientes` VALUES (27, 'Jensen', 'Fritsch', 'wilkinson.eda@yahoo.com', '515-861-4490 x01966', '23618781', NULL, NULL);
INSERT INTO `clientes` VALUES (28, 'Jadyn', 'Hessel', 'xullrich@hotmail.com', '575-932-0650', '33442763', NULL, NULL);
INSERT INTO `clientes` VALUES (29, 'Hipolito', 'Hegmann', 'mozelle90@yahoo.com', '(728) 235-2017', '34165519', NULL, NULL);
INSERT INTO `clientes` VALUES (30, 'Justice', 'Emard', 'una.jakubowski@hotmail.com', '296-606-0694', '38181021', NULL, NULL);
INSERT INTO `clientes` VALUES (31, 'Maudie', 'DuBuque', 'chanelle.murphy@gmail.com', '851.573.8725', '31307621', NULL, NULL);
INSERT INTO `clientes` VALUES (32, 'Tiara', 'Huels', 'deonte.ortiz@yahoo.com', '1-685-915-7868 x047', '16205252', NULL, NULL);
INSERT INTO `clientes` VALUES (33, 'Mya', 'Jacobi', 'ugreen@hotmail.com', '+13974670709', '35643419', NULL, NULL);
INSERT INTO `clientes` VALUES (34, 'Elmore', 'Leuschke', 'ybogisich@hotmail.com', '(512) 685-0681 x9796', '24267495', NULL, NULL);
INSERT INTO `clientes` VALUES (35, 'Jackeline', 'Moore', 'bernhard.therese@hotmail.com', '(581) 284-5651 x2705', '38965718', NULL, NULL);
INSERT INTO `clientes` VALUES (36, 'Harry', 'Wolf', 'sheila.yundt@gmail.com', '1-454-393-4174', '35598895', NULL, NULL);
INSERT INTO `clientes` VALUES (37, 'Dedric', 'O\'Kon', 'hkiehn@gmail.com', '1-472-766-2944 x51778', '17699579', NULL, NULL);
INSERT INTO `clientes` VALUES (38, 'Marie', 'Kuvalis', 'stracke.aracely@yahoo.com', '1-424-631-1634 x254', '12500635', NULL, NULL);
INSERT INTO `clientes` VALUES (39, 'Fletcher', 'Jast', 'vgreenholt@gmail.com', '1-490-250-3889 x01523', '24029773', NULL, NULL);
INSERT INTO `clientes` VALUES (40, 'Olaf', 'Hill', 'gibson.tyshawn@yahoo.com', '938.689.4647 x9083', '37094902', NULL, NULL);
INSERT INTO `clientes` VALUES (41, 'Lucas', 'Gerhold', 'shirley.rosenbaum@gmail.com', '264-533-0393 x1421', '19319966', NULL, NULL);
INSERT INTO `clientes` VALUES (42, 'Gerry', 'Johnson', 'christ.wuckert@gmail.com', '279-217-8244 x29404', '13070601', NULL, NULL);
INSERT INTO `clientes` VALUES (43, 'Lulu', 'Blick', 'alda65@yahoo.com', '+12604126720', '24132478', NULL, NULL);
INSERT INTO `clientes` VALUES (44, 'Gerard', 'Considine', 'anjali.kunze@gmail.com', '815-814-3243 x84648', '30782482', NULL, NULL);
INSERT INTO `clientes` VALUES (45, 'Athena', 'Feest', 'feil.carmelo@gmail.com', '787-705-6703 x2508', '24503863', NULL, NULL);
INSERT INTO `clientes` VALUES (46, 'Blaze', 'Mueller', 'linnea.lubowitz@gmail.com', '1-342-542-1219 x8616', '23430069', NULL, NULL);
INSERT INTO `clientes` VALUES (47, 'Andrew', 'Hill', 'qvandervort@gmail.com', '217-446-5341 x21987', '24889398', NULL, NULL);
INSERT INTO `clientes` VALUES (48, 'Alicia', 'Upton', 'cpadberg@gmail.com', '(794) 327-0093 x29700', '30719707', NULL, NULL);
INSERT INTO `clientes` VALUES (49, 'Nakia', 'Schimmel', 'dusty.johnson@gmail.com', '1-762-205-2422 x33537', '24546218', NULL, NULL);
INSERT INTO `clientes` VALUES (50, 'Marquis', 'Larkin', 'crona.vivianne@yahoo.com', '1-943-901-6399 x4043', '17225150', NULL, NULL);
INSERT INTO `clientes` VALUES (51, 'Audreanne', 'Gleason', 'pfeffer.terrell@yahoo.com', '+1-879-628-7549', '22047757', NULL, NULL);
INSERT INTO `clientes` VALUES (52, 'Ivah', 'Koelpin', 'khessel@gmail.com', '+1-685-870-1676', '13354532', NULL, NULL);
INSERT INTO `clientes` VALUES (53, 'Delta', 'Greenfelder', 'lubowitz.daisy@hotmail.com', '801.739.6980 x11398', '25543263', NULL, NULL);
INSERT INTO `clientes` VALUES (54, 'Meghan', 'Kuhn', 'gvon@yahoo.com', '570.566.6328', '38223234', NULL, NULL);
INSERT INTO `clientes` VALUES (55, 'Yazmin', 'Vandervort', 'moshe.borer@yahoo.com', '(579) 376-5309 x230', '14143358', NULL, NULL);
INSERT INTO `clientes` VALUES (56, 'Weldon', 'Hagenes', 'joelle32@yahoo.com', '1-691-721-4809', '27546302', NULL, NULL);
INSERT INTO `clientes` VALUES (57, 'Yasmine', 'Daugherty', 'salvatore68@hotmail.com', '+12025957115', '33046174', NULL, NULL);
INSERT INTO `clientes` VALUES (58, 'Cade', 'Wolf', 'stefanie02@hotmail.com', '681.967.7142 x387', '22383250', NULL, NULL);
INSERT INTO `clientes` VALUES (59, 'Julien', 'Mayert', 'grant.emmy@gmail.com', '957-333-9181', '37057710', NULL, NULL);
INSERT INTO `clientes` VALUES (60, 'Amara', 'Fahey', 'dwhite@gmail.com', '(991) 945-0237', '33259817', NULL, NULL);
INSERT INTO `clientes` VALUES (61, 'Larry', 'Purdy', 'jackson.schuster@gmail.com', '+1-753-473-5321', '17284090', NULL, NULL);
INSERT INTO `clientes` VALUES (62, 'Malcolm', 'Carter', 'vpurdy@yahoo.com', '+1-950-798-5428', '14450956', NULL, NULL);
INSERT INTO `clientes` VALUES (63, 'Brycen', 'Romaguera', 'franz.corkery@yahoo.com', '+1 (720) 660-3497', '35391614', NULL, NULL);
INSERT INTO `clientes` VALUES (64, 'Rachelle', 'Nikolaus', 'halle.rippin@yahoo.com', '+1.687.678.2571', '20264909', NULL, NULL);
INSERT INTO `clientes` VALUES (65, 'Heidi', 'Kohler', 'janessa73@yahoo.com', '337.643.6197', '34903337', NULL, NULL);
INSERT INTO `clientes` VALUES (66, 'Toni', 'Maggio', 'xrunte@hotmail.com', '1-497-844-0751', '32671968', NULL, NULL);
INSERT INTO `clientes` VALUES (67, 'Joanie', 'Bashirian', 'steuber.blaze@yahoo.com', '848-806-7278 x371', '17862444', NULL, NULL);
INSERT INTO `clientes` VALUES (68, 'Mertie', 'Treutel', 'damion01@yahoo.com', '856-450-5588 x0938', '13957306', NULL, NULL);
INSERT INTO `clientes` VALUES (69, 'Iliana', 'Purdy', 'qmetz@yahoo.com', '+18155344874', '32475982', NULL, NULL);
INSERT INTO `clientes` VALUES (70, 'Aliza', 'Windler', 'magdalen17@yahoo.com', '1-794-758-0282 x6892', '37962867', NULL, NULL);
INSERT INTO `clientes` VALUES (71, 'Glenna', 'Dickens', 'rickie.labadie@gmail.com', '(641) 585-1226', '39398900', NULL, NULL);
INSERT INTO `clientes` VALUES (72, 'Armani', 'Parker', 'nicole42@yahoo.com', '1-709-414-3956', '38940391', NULL, NULL);
INSERT INTO `clientes` VALUES (73, 'Landen', 'Cummerata', 'theodora.aufderhar@yahoo.com', '960-722-4626 x375', '12601197', NULL, NULL);
INSERT INTO `clientes` VALUES (74, 'Eda', 'Heathcote', 'wilkinson.suzanne@yahoo.com', '967.818.8442', '31853174', NULL, NULL);
INSERT INTO `clientes` VALUES (75, 'Edward', 'Senger', 'annette.denesik@gmail.com', '+1 (828) 617-7145', '19356876', NULL, NULL);
INSERT INTO `clientes` VALUES (76, 'Dylan', 'Jones', 'reta.huel@yahoo.com', '843.434.9400 x87101', '25734100', NULL, NULL);
INSERT INTO `clientes` VALUES (77, 'Icie', 'Bailey', 'kertzmann.lisa@yahoo.com', '853.359.2243 x924', '13306175', NULL, NULL);
INSERT INTO `clientes` VALUES (78, 'Lemuel', 'Grant', 'wmonahan@yahoo.com', '(221) 902-9171', '21208904', NULL, NULL);
INSERT INTO `clientes` VALUES (79, 'Nia', 'Walter', 'ybotsford@gmail.com', '1-656-497-7745 x955', '14810217', NULL, NULL);
INSERT INTO `clientes` VALUES (80, 'Shyanne', 'Gulgowski', 'jasmin.bartoletti@yahoo.com', '813-606-5619 x292', '31478923', NULL, NULL);
INSERT INTO `clientes` VALUES (81, 'Kirstin', 'McKenzie', 'brando.lockman@gmail.com', '1-716-817-4987', '16970334', NULL, NULL);
INSERT INTO `clientes` VALUES (82, 'Christiana', 'Streich', 'thelma.sawayn@yahoo.com', '+13792464367', '14527231', NULL, NULL);
INSERT INTO `clientes` VALUES (83, 'Kelsi', 'Pagac', 'schmitt.verdie@yahoo.com', '+1-702-571-6852', '37558120', NULL, NULL);
INSERT INTO `clientes` VALUES (84, 'Fred', 'Schultz', 'kristy.schuppe@hotmail.com', '(873) 701-6027 x5823', '15308218', NULL, NULL);
INSERT INTO `clientes` VALUES (85, 'Freeman', 'Lowe', 'zemard@hotmail.com', '1-476-671-2723', '15282555', NULL, NULL);
INSERT INTO `clientes` VALUES (86, 'Doug', 'Hills', 'fluettgen@gmail.com', '+1.345.588.3762', '17689727', NULL, NULL);
INSERT INTO `clientes` VALUES (87, 'Ila', 'Roob', 'bogisich.nakia@gmail.com', '270-983-4643 x08136', '25970448', NULL, NULL);
INSERT INTO `clientes` VALUES (88, 'Brice', 'Mraz', 'klein.alvena@yahoo.com', '990.823.6810', '39813943', NULL, NULL);
INSERT INTO `clientes` VALUES (89, 'Payton', 'Boyle', 'kiarra32@yahoo.com', '1-436-545-8342 x966', '25120477', NULL, NULL);
INSERT INTO `clientes` VALUES (90, 'Annabell', 'Zieme', 'devante.roob@hotmail.com', '772.221.8696', '14131584', NULL, NULL);
INSERT INTO `clientes` VALUES (91, 'Asha', 'Schoen', 'uschmidt@yahoo.com', '242.257.3377 x888', '24382055', NULL, NULL);
INSERT INTO `clientes` VALUES (92, 'Elizabeth', 'Weber', 'dlittel@hotmail.com', '(351) 702-8894', '15091764', NULL, NULL);
INSERT INTO `clientes` VALUES (93, 'Ashton', 'Denesik', 'maudie64@gmail.com', '905.628.2111 x8575', '21186779', NULL, NULL);
INSERT INTO `clientes` VALUES (94, 'Erik', 'Howe', 'carson05@yahoo.com', '(690) 758-8271 x51074', '32650374', NULL, NULL);
INSERT INTO `clientes` VALUES (95, 'Maddison', 'Franecki', 'rhane@gmail.com', '1-209-984-1894 x0444', '22010250', NULL, NULL);
INSERT INTO `clientes` VALUES (96, 'Danika', 'Dach', 'edison.denesik@gmail.com', '398.958.8483 x6414', '24317033', NULL, NULL);
INSERT INTO `clientes` VALUES (97, 'Rhea', 'Kling', 'damian.kerluke@hotmail.com', '1-658-213-2572', '17394263', NULL, NULL);
INSERT INTO `clientes` VALUES (98, 'Fermin', 'Hill', 'garnett46@hotmail.com', '625-273-9323', '15173999', NULL, NULL);
INSERT INTO `clientes` VALUES (99, 'Arnulfo', 'Boyer', 'akuvalis@yahoo.com', '+1-991-756-4227', '11494769', NULL, NULL);
INSERT INTO `clientes` VALUES (100, 'Alicia', 'Moen', 'nfranecki@hotmail.com', '626.487.4309 x51851', '37671068', NULL, NULL);

-- ----------------------------
-- Table structure for compras
-- ----------------------------
DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `cantidad_de_productos` tinyint(3) UNSIGNED NOT NULL,
  `productos_id` int(10) UNSIGNED NOT NULL,
  `clientes_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `compras_productos_id_foreign`(`productos_id`) USING BTREE,
  INDEX `compras_clientes_id_foreign`(`clientes_id`) USING BTREE,
  CONSTRAINT `compras_clientes_id_foreign` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `compras_productos_id_foreign` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for galeria
-- ----------------------------
DROP TABLE IF EXISTS `galeria`;
CREATE TABLE `galeria`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagen` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `descripcion` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `galeria_user_id_foreign`(`user_id`) USING BTREE,
  CONSTRAINT `galeria_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of galeria
-- ----------------------------
INSERT INTO `galeria` VALUES (1, 'Dogo', 'img/dogo.jpg', 'Es un perro muy lindo', 1, NULL, NULL);
INSERT INTO `galeria` VALUES (2, 'Felini', 'img/felini.jpg', 'Es un gato muy lindo', 1, NULL, NULL);
INSERT INTO `galeria` VALUES (3, 'Kata', 'img/kata.jpg', 'Es una gata muy linda', 1, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2013_06_19_174840_create_roles_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_05_25_032912_create_tipo_productos_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_05_25_032927_create_productos_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_05_25_034554_create_clientes_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_05_25_034600_create_compras_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_06_29_155242_create_galeria_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(65) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagen` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `precio` double(5, 2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `tipo_productos_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `productos_tipo_productos_id_foreign`(`tipo_productos_id`) USING BTREE,
  CONSTRAINT `productos_tipo_productos_id_foreign` FOREIGN KEY (`tipo_productos_id`) REFERENCES `tipo_productos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES (1, 'Baby Cat Milk', 'img/Baby Cat Milk.jpg', 'Una combinación de diferentes tipos de fibras que estimula el transito intestinal y ayuda a facilitar la eliminación del pelo que su gato traga todos los días', 453.00, 280, '2019-07-02 02:35:09', NULL, 1);
INSERT INTO `productos` VALUES (2, 'Indoor Intense Hairball 34', 'img/Indoor Intense Hairball 34.jpg', 'Revela la belleza del pelaje largo y denso del Persa gracias al complejo Beauty Shine Complex que limita la irritación de la piel, refuerza la función barrera de la piel e intensifica el color, el brillo y la suavidad del pelaje.', 457.00, 392, '2019-07-02 02:35:09', NULL, 1);
INSERT INTO `productos` VALUES (3, 'Persian', 'img/Persian.jpg', 'Para favorecer un crecimiento seguro y armonioso, la composición de Babydog milk, es lo más parecida posible a la leche materna, aportando un nivel elevado de energía y proteínas.', 533.00, 333, '2019-07-02 02:35:09', NULL, 1);
INSERT INTO `productos` VALUES (4, 'Babydog Milk', 'img/Babydog Milk.jpg', 'Alimento completo especial para Bulldog Inglés a partir de los 12 meses de edad. \nCubre las necesidades especificas y reduce el olor en las heces.', 675.00, 299, '2019-07-02 02:35:09', NULL, 2);
INSERT INTO `productos` VALUES (5, 'Bulldog', 'img/Bulldog.jpg', 'La condroitina ayuda a la hidratación del cartílago y la glucosamina estimula su regeneración. Esta combinación sinérgica, con un suplemento de EPA y DHA, ayuda a mantener la salud articular', 853.00, 464, '2019-07-02 02:35:09', NULL, 2);
INSERT INTO `productos` VALUES (6, 'Giant Adult', 'img/Giant Adult.jpg', 'Mientras crece, su cachorro experimenta grandes cambios y nuevos descubrimientos. Durante este periodo clave, el sistema inmunológico del cachorro sigue desarrollándose. GIANT PUPPY ayuda a reforzar las defensas naturales de su cachorro ', 659.00, 236, '2019-07-02 02:35:09', NULL, 2);
INSERT INTO `productos` VALUES (7, 'Giant Puppy', 'img/Giant Puppy.jpg', 'Esta exclusiva croqueta ha sido desarrollada para adaptarse perfectamente a la mandíbula del cachorro de raza Schnauzer Miniatura. \nFacilita la prensión y estimula la masticación en el Schnauzer Miniatura.', 666.00, 393, '2019-07-02 02:35:09', NULL, 2);
INSERT INTO `productos` VALUES (8, 'Miniature Schnauzer Puppy', 'img/Miniature Schnauzer Puppy.jpg', 'Una solución nutricional única que satisface las necesidades de la madre y sus cachorros en cinco etapas del ciclo de la vida: gestación, nacimiento, lactancia, destete y crecimiento hasta los 2 meses de edad.', 598.00, 451, '2019-07-02 02:35:09', NULL, 2);
INSERT INTO `productos` VALUES (9, 'Starter Mousse', 'img/Starter Mousse.jpg', 'Bebedero A Bolilla Drinky 75 0,075 L Estas botellas de bebida para los animales domésticos pequeños son adecuadas para todo tipo de jaulas de red de alambre gracias al práctico gancho con el que cuentan. \nLa boquilla de acero inoxidable con válvula de es', 872.00, 246, '2019-07-02 02:35:09', NULL, 2);
INSERT INTO `productos` VALUES (10, 'Bebedero', 'img/Bebedero.jpg', 'El Comedero Interactivo Catit Multi Feeder es perfecto para servir comida húmeda y seca. \nSu diseño compacto e inteligente combina 3 prácticas funciones en 1 comedero, brindandote una hendidura especial donde se coloca el alimento seco, un plato de fácil', 791.00, 349, '2019-07-02 02:35:09', NULL, 3);
INSERT INTO `productos` VALUES (11, 'Comedero', 'img/Comedero.jpg', ' Correa Trixie Tracking Para Perros 5mm 10m    ', 703.00, 242, '2019-07-02 02:35:09', NULL, 3);
INSERT INTO `productos` VALUES (12, 'Comedor Multi Feeder', 'img/Comedor Multi Feeder.jpg', 'El Wave Circuit consta de una bola que se mueve en una pista cerrada conformada por 7 piezas que poseen elevaciones para movimientos más diversos', 369.00, 330, '2019-07-02 02:35:09', NULL, 3);
INSERT INTO `productos` VALUES (13, 'Correa Para Perros', 'img/Correa Para Perros.jpg', 'Pelota Para Perros Con Estetica Deportes 63mm  Se venden por unidad. Color sujeto a disponibilidad', 478.00, 388, '2019-07-02 02:35:09', NULL, 3);
INSERT INTO `productos` VALUES (14, 'Juguete', 'img/Juguete.jpg', 'Para favorecer un crecimiento seguro y armonioso, la composición de Babydog milk, es lo más parecida posible a la leche materna, aportando un nivel elevado de energía y proteínas.', 636.00, 376, '2019-07-02 02:35:09', NULL, 3);
INSERT INTO `productos` VALUES (15, 'Pelota Para Perros', 'img/Pelota Para Perros.jpg', 'Para un crecimiento estable y armonioso, la composición de la leche Babycat milk, es lo más cercano posible a la leche materna, con altos niveles de energía y proteína.', 661.00, 297, '2019-07-02 02:35:09', NULL, 3);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'admin', 'Administrador', '2019-07-02 02:35:08', NULL);
INSERT INTO `roles` VALUES (2, 'user', 'Normal User', '2019-07-02 02:35:08', NULL);
INSERT INTO `roles` VALUES (3, 'profe', 'El Profesor', '2019-07-02 02:35:08', NULL);

-- ----------------------------
-- Table structure for tipo_productos
-- ----------------------------
DROP TABLE IF EXISTS `tipo_productos`;
CREATE TABLE `tipo_productos`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tipo_productos
-- ----------------------------
INSERT INTO `tipo_productos` VALUES (1, 'Gato', '2019-07-02 02:35:09', NULL);
INSERT INTO `tipo_productos` VALUES (2, 'Perro', '2019-07-02 02:35:09', NULL);
INSERT INTO `tipo_productos` VALUES (3, 'Varios', '2019-07-02 02:35:09', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo_id` int(10) UNSIGNED NOT NULL DEFAULT 2,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  INDEX `users_tipo_id_foreign`(`tipo_id`) USING BTREE,
  CONSTRAINT `users_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 1, 'Admin', 'ivan.parisi@davinci.edu.ar', NULL, '$2y$10$7ebgPSNdcgmN1P/b1rOCfukYafmhWoomCUIayOgMvMqPbU7GORu3W', NULL, '2019-07-02 02:35:09', NULL);

SET FOREIGN_KEY_CHECKS = 1;
