/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : db-desi-2025

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 07/10/2025 07:41:08
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cache
-- ----------------------------
INSERT INTO `cache` VALUES ('desi-cache-a148b12886d41bf8178891075017e3e7d41d932f', 'i:1;', 1759473222);
INSERT INTO `cache` VALUES ('desi-cache-a148b12886d41bf8178891075017e3e7d41d932f:timer', 'i:1759473222;', 1759473222);
INSERT INTO `cache` VALUES ('desi-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1759733389);
INSERT INTO `cache` VALUES ('desi-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1759733389;', 1759733389);
INSERT INTO `cache` VALUES ('desi-cache-spatie.permission.cache', 'a:3:{s:5:\"alias\";a:0:{}s:11:\"permissions\";a:0:{}s:5:\"roles\";a:0:{}}', 1759759846);

-- ----------------------------
-- Table structure for cache_locks
-- ----------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cache_locks
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `cancelled_at` int NULL DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of job_batches
-- ----------------------------

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED NULL DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jobs_queue_index`(`queue`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2025_10_02_035419_rubah_tabel_users', 1);
INSERT INTO `migrations` VALUES (5, '2025_10_02_035805_buat_tabel_instansi', 1);
INSERT INTO `migrations` VALUES (6, '2025_10_02_035929_buat_tabel_role', 1);
INSERT INTO `migrations` VALUES (7, '2025_10_02_040857_rubah_tabel_user_lagi', 1);
INSERT INTO `migrations` VALUES (8, '2025_10_02_061010_buat_tabel_baliho', 1);
INSERT INTO `migrations` VALUES (9, '2025_10_02_084554_create_permission_tables', 1);
INSERT INTO `migrations` VALUES (10, '2025_10_02_092111_add_foto_profil_to_users_table', 2);
INSERT INTO `migrations` VALUES (11, '2025_10_03_065915_buat_tabel_layanan', 3);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 'c08e6846-e4ac-442f-a25a-bcf8ebec58d3');

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name`, `guard_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_guard_name_unique`(`name`, `guard_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Raja', 'web', '2025-10-02 09:16:51', '2025-10-02 09:16:51');
INSERT INTO `roles` VALUES (2, 'Pangeran', 'web', '2025-10-02 09:16:51', '2025-10-02 09:16:51');
INSERT INTO `roles` VALUES (3, 'Patih', 'web', '2025-10-02 09:16:51', '2025-10-02 09:16:51');
INSERT INTO `roles` VALUES (4, 'Rakyat', 'web', '2025-10-02 09:16:51', '2025-10-02 09:16:51');
INSERT INTO `roles` VALUES (5, 'Pelancong', 'web', '2025-10-02 09:16:51', '2025-10-02 09:16:51');

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id`) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_baliho
-- ----------------------------
DROP TABLE IF EXISTS `tbl_baliho`;
CREATE TABLE `tbl_baliho`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_baliho` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_baliho` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordinat_baliho` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `foto_baliho` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran_baliho` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `layout_baliho` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_baliho
-- ----------------------------
INSERT INTO `tbl_baliho` VALUES ('1b8fdd7a-79e4-491e-814d-52d5f8978b94', 'BALIHO DEPAN KECAMATAN LAWEYAN', 'Jl. Dr. Rajiman No.352, Penumping, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141', NULL, 'baliho/01K6MCC0H1ZPGB3ZNKFMJ4CPJ3.jpg', '4M X 8M', 'Vertical', '2025-10-03 06:32:53', '2025-10-03 06:32:53');
INSERT INTO `tbl_baliho` VALUES ('3dec2736-e6d9-4fc6-9c53-11e4b2195775', 'BALIHO DEPAN PASAR JONGKE', 'Pasar Jongke, Jl. Dr. Rajiman 0441, Pajang, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57147', NULL, 'baliho/01K6MBJ6KTY04QVQ43BZK55EBH.jpg', '4M X 8M', 'Vertical', '2025-10-03 06:18:47', '2025-10-03 06:18:47');
INSERT INTO `tbl_baliho` VALUES ('49da6e69-0024-4001-9021-ae534beede94', 'BALIHO PDAM', 'Jl. Adi Sucipto No.135C, Kerten, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57143', NULL, 'baliho/01K6M2D71MXJ5EW4GRSJT3YYAD.jpg', '4M X 8M', 'Horizontal', '2025-10-03 03:38:46', '2025-10-03 03:38:46');
INSERT INTO `tbl_baliho` VALUES ('7b755978-6ebb-4a0b-ab95-a57dff1252ea', 'BALIHO JURUG', 'CVM5+H55, Jl. Ir. Sutami, Pucangsawit, Kec. Jebres, Kota Surakarta, Jawa Tengah 57125', NULL, 'baliho/01K6M1ZA5PWSJFR4NY1Q8TJEKK.jpg', '4M X 8M', 'Horizontal', '2025-10-03 03:26:16', '2025-10-03 03:31:11');
INSERT INTO `tbl_baliho` VALUES ('988b9e25-ab16-46b8-a738-8f114d671675', 'BALIHO INSTITUTE SENI INDONESIA', 'CVV2+GJV, Jl. Ki Hajar Dewantara, Jebres, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', NULL, 'baliho/01K6M2A1T4N862C0666WF1WBW5.jpg', '4M X 8M', 'Vertical', '2025-10-03 03:37:03', '2025-10-03 03:37:03');
INSERT INTO `tbl_baliho` VALUES ('9f1b1f62-b5b8-457f-88ef-513c6f5954f7', 'BALIHO SHELTER LOJIWETAN', 'Shelter Lojiwetan, Jl. Kapten Mulyadi, Kedung Lumbu, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57133', NULL, 'baliho/01K6MC22YSMN7VYTV7AWYYNW74.jpg', '4M X 6M', 'Vertical', '2025-10-03 06:27:27', '2025-10-03 06:27:27');
INSERT INTO `tbl_baliho` VALUES ('c488ab46-9da7-41ac-ac7c-e21b624f7942', 'BALIHO YOS SUDARSO / TANJUNGANOM', 'CR58+MXF, Jl. Yos Sudarso, Joyotakan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57157', NULL, 'baliho/01K6M2S1YASFQHMK3V10CVCX3R.jpg', '4M X 6M', 'Vertical', '2025-10-03 03:45:14', '2025-10-03 03:45:14');
INSERT INTO `tbl_baliho` VALUES ('d93f54a1-50cd-4d55-9c77-4c4549788591', 'BALIHO SIMPANG LIMA BANJARSARI', 'Jl. Walter Monginsidi, Margoyudan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57134', NULL, 'baliho/01K6M2J3E2H3S3M1VTZ9CWS18C.jpg', '4M X 6M', 'Vertical', '2025-10-03 03:41:26', '2025-10-03 06:11:38');
INSERT INTO `tbl_baliho` VALUES ('dea38f38-692f-4c34-899b-cbcf591121a6', 'BALIHO DEPAN KECAMATAN BANJARSARI', 'Jl. Adi Sumarmo, Banyuanyar, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57137', NULL, 'baliho/01K6M21W546HFYKMTRQHEAPYHV.jpg', '4M X 8M', 'Vertical', '2025-10-03 03:32:35', '2025-10-03 06:11:50');
INSERT INTO `tbl_baliho` VALUES ('ec81712d-742f-408a-9aad-ca2afec1d60d', 'BALIHO KECAMATAN SERENGAN', 'Jl. Veteran, Serengan, Kec. Serengan, Kota Surakarta, Jawa Tengah 57155', NULL, 'baliho/01K6MB41SSV3E3Y195DBXVK139.jpg', '4M X 8M', 'Vertical', '2025-10-03 06:11:04', '2025-10-03 06:11:22');
INSERT INTO `tbl_baliho` VALUES ('ef7f0b4c-3638-4e58-b7ee-d5f797da0d51', 'BALIHO GIRIMULYO SUMBER', 'CRW2+WFR, Jl. Letjen Suprapto, Manahan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57143', NULL, 'baliho/01K6MB95023M40FQ5M4B7866RM.jpg', '4M X 6M', 'Vertical', '2025-10-03 06:13:50', '2025-10-03 06:13:50');
INSERT INTO `tbl_baliho` VALUES ('f454387f-5f1e-4805-a8bb-226844d3b37d', 'BALIHO TUGU LILIN SMA MURNI', 'Jl. Dr. Wahidin, Purwosari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57142', NULL, 'baliho/01K6MBSJ562690V5817CKRBFCW.jpg', '4M X 6M', 'Vertical', '2025-10-03 06:22:48', '2025-10-03 06:22:48');
INSERT INTO `tbl_baliho` VALUES ('f7dcfc56-45d0-4e61-aa7f-5051f2b39b26', 'BALIHO PASAR SIDODADI KLECO', 'Pasar Sidodadi, Kleco, Karangasem, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57145', NULL, 'baliho/01K6MBXWRJQS16KRXSM72Z08DN.jpg', '4M X 8M', 'Horizontal', '2025-10-03 06:25:10', '2025-10-03 06:25:10');

-- ----------------------------
-- Table structure for tbl_instansi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_instansi`;
CREATE TABLE `tbl_instansi`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_instansi
-- ----------------------------
INSERT INTO `tbl_instansi` VALUES ('0198a1a2-ebd0-429f-88ee-4e4296663c58', 'KELURAHAN TIPES', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('01d1e6ba-ec07-40b0-83f7-31d7b1cbbbe8', 'KELURAHAN SUDIROPRAJAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('0263dca3-d243-421f-befb-471f2fdb2af6', 'DPUPR', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('02b833b0-d599-45fb-9464-0885328dfa58', 'KELURAHAN KARANGASEM', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('0329ca40-98d4-44e0-b2ce-b0c30778d0b2', 'KELURAHAN KEPATIHAN KULON', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('03be7a5f-29f3-4176-8ede-c42d9f16c05e', 'KECAMATAN SERENGAN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('0404ddf7-9c15-44ee-8d89-af87878d4ccd', 'KELURAHAN TIMURAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('06dd1556-8cd0-420f-8adc-f29834ba7f4f', 'KELURAHAN BALUWARTI', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('07c2b237-7f44-4889-889b-ad6923592b10', 'DISBUDPAR', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('080dd40e-26ef-4852-8e2c-760f482a7a6e', 'KELURAHAN PANULARAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('0892d0b8-a858-4d4e-a2bd-0708b1e044a8', 'KELURAHAN SANGKRAH', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('09344a1e-2420-497b-a3c0-1bf47b78473a', 'KELURAHAN KAUMAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('09bfda1b-9b0e-4e70-8799-bc689e067dca', 'KELURAHAN LAWEYAN', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('0a02e20f-855a-44c6-ae1f-e10b484a4d35', 'KELURAHAN GANDEKAN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('0a5a0352-ff21-4271-9bac-3e18a1f54981', 'KELURAHAN PAJANG', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('0b532f1d-92d6-4976-9584-9159db7cf0d6', 'KELURAHAN JAJAR', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('0b6c1db9-1c96-40bb-9701-e22d406d9eac', 'KELURAHAN PUNGGAWAN', '2024-11-05 04:25:05', '2024-11-05 04:25:05');
INSERT INTO `tbl_instansi` VALUES ('0c62c568-9df8-4595-9496-fb8c0466f079', 'BAKESBANGPOL', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('0dcdd8a8-56d8-45af-9330-2a9c1ca1b013', 'KELURAHAN JEBRES', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('0eb7f9bd-10a5-4054-a6f9-56c4770d0e75', 'KELURAHAN MOJOSONGO', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('15a1d92c-ad5b-4175-a702-97fe7354fc6b', 'KELURAHAN KAMPUNG BARU', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('15cdd098-61b7-4344-a729-b9c48d5306e4', 'KECAMATAN JEBRES', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('17bf3208-4a2b-45ba-8679-4a87e78d0057', 'KELURAHAN PASARKLIWON', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('1b83d044-1ca5-48bb-95d2-693fe5e76edf', 'KELURAHAN BANJARSARI', '2024-11-05 04:25:05', '2024-11-05 04:25:05');
INSERT INTO `tbl_instansi` VALUES ('1bfff7c6-866f-4015-b694-e39226c28912', 'KELURAHAN KEMLAYAN', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('1c578e05-3d20-4a0d-bbff-1bde71c79216', 'KELURAHAN TEGALHARJO', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('1c8d3bc3-ee56-4212-9585-5167949078d8', 'DPMPTSP', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('1dea27ce-4a55-4a19-9a84-d84b893416ca', 'BAPPEDA', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('1f94af1b-cae7-48f9-bc9f-af1361e9a6f1', 'BAPENDA', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('20d50209-5a8c-4f1f-98b0-bd408a5e1e14', 'DISDIK', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('22a98073-2320-4c22-8c9a-b89c818267ae', 'KELURAHAN DANUKUSUMAN', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('22b6d31d-6e73-46e2-9261-2e897aeb0409', 'DINAS KESEHATAN', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('23b6d94c-e781-48de-9982-4e5bab9beb14', 'KELURAHAN MANAHAN', '2024-11-05 04:25:05', '2024-11-05 04:25:05');
INSERT INTO `tbl_instansi` VALUES ('24f88e4b-c007-4b93-b1ab-e8a57fbb378e', 'KELURAHAN PENUMPING', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('260d4253-10d6-4255-8953-e84c9cab38be', 'BADAN PERENCANAAN PEMBANGUNAN DAERAH', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('290a69a6-e5d9-49e3-9f52-a917dcd62c27', 'KELURAHAN JAGALAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('2a147d92-d19d-4145-b837-51a6a63629b5', 'BPBD', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('2c64cd42-0f43-4280-81bd-b7beb4d3696d', 'KELURAHAN KESTALAN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('2c86da0f-fc60-4809-b21e-fec24d1fa06e', 'BAGIAN PEREKONOMIAN DAN SDA', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('2f1a9dd1-d6d7-4ea8-9696-f60233e4d5fd', 'DISPERSIP', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('3232f822-d340-4540-8e05-90edc8c0701a', 'KELURAHAN SUMBER', '2024-11-05 04:25:05', '2024-11-05 04:25:05');
INSERT INTO `tbl_instansi` VALUES ('324e0011-fc2e-4b74-934d-5f3c3918e299', 'KELURAHAN KADIPIRO', '2024-11-05 04:25:05', '2024-11-05 04:25:05');
INSERT INTO `tbl_instansi` VALUES ('32a1ee4e-1030-45f1-a43c-492b9360e91e', 'KELURAHAN PUCANGSAWIT', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('32e56a8f-5d9d-4560-8ac5-6082281ad0ae', 'KELURAHAN SETABELAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('364b55c7-d740-455f-b47f-ccae11105941', 'KELURAHAN JOGLO', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('3677247e-45d3-4505-81e1-f0c2391aed72', 'BAGIAN PROKOMPIM', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('389c120d-a555-4b83-ab1e-30fd70449d7d', 'KELURAHAN PURWODININGRATAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('3c03405d-3a1d-4adb-97f1-dd789361e608', 'KELURAHAN PURWOSARI', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('3da26659-c615-4fe5-907d-e9292c4a9743', 'DISNAKER', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('3e60b3fa-292d-4e1a-bb20-e6a6b92f6180', 'KELURAHAN MANGKUBUMEN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('4160d79f-4bcf-4749-a36b-5838e34dfa6a', 'KELURAHAN KRATONAN', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('42ce8a59-e96a-4cc3-bc23-0cb79519b214', 'DINAS PENDIDIKAN', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('4346008a-f91a-49e4-82b5-9c5711ae6105', 'BAGIAN KERJASAMA SEKRETARIAT DAERAH', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('45637413-2975-460d-8217-cc2839a55b7e', 'KELURAHAN SEWU', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('456ba9a9-5c00-4a84-b94d-0d8056a84e4b', 'KELURAHAN KEPRABON', '2024-11-05 04:25:05', '2024-11-05 04:25:05');
INSERT INTO `tbl_instansi` VALUES ('46a5f13d-384e-4b6f-b9dc-9bb84b310666', 'KELURAHAN JOYOSURAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('49a26166-4283-4438-b48e-f10270b10be5', 'DP3AP2KB', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('4c2d7682-bf82-4698-ad45-095fabafed19', 'KELURAHAN GILINGAN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('5452b301-4413-4212-ac7c-47bd1478bc75', 'KELURAHAN JOYOTAKAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('5531cb26-e5b7-4a14-985b-35ea97ec0512', 'KELURAHAN KEDUNGLUMBU', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('573311d8-faeb-42d1-a1d5-5fe0f77f8fb4', 'KELURAHAN SEMANGGI', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('59603220-29ce-4aec-857a-aa8f7b2583b5', 'KELURAHAN KEPATIHAN WETAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('5a2c5757-7fbf-4870-a7c3-27d74bfecb50', 'DISKOMINFO SP', '2024-11-08 01:14:25', '2024-11-08 01:14:25');
INSERT INTO `tbl_instansi` VALUES ('62741e6d-f727-4ba3-af29-830c1d270f27', 'KECAMATAN BANJARSARI', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('66739f57-4772-41c2-bff1-98887ee82df0', 'BAGIAN UMUM', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('69bab0a8-3564-4907-850b-bdea2a6c5d73', 'KELURAHAN KERTEN', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('6c212c3f-4531-45f7-ab0f-ec5188e60808', 'SETWAN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('6f517dff-6413-4885-9f8e-d0c3ae1e9793', 'ADNAN MULYA SATYANU', '2024-11-11 13:01:09', '2024-11-11 13:01:43');
INSERT INTO `tbl_instansi` VALUES ('70e23b96-2f6d-49ac-be06-012032c1c7d8', 'KELURAHAN SONDAKAN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('7b0fe311-0872-4dca-a26a-941417c06c45', 'KELURAHAN NUSUKAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('7b91be5b-ea11-4f3d-8be2-ba5cce796e9d', 'KELURAHAN SERENGAN', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('80f7d8e3-e6cf-4f5f-a618-2c4db7e65f5b', 'KELURAHAN BANYUANYAR', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('812753a2-58c0-4b03-a4b4-053d96fcb6c9', 'KELURAHAN BUMI', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('82910f8c-110b-4e72-a4dc-41b0192d303a', 'DISDAG', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('833631f2-487e-4026-bdaa-488ef1e67a02', 'BAGIAN KESEJAHTERAAN RAKYAT', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('8421e9c2-0e4f-4bcc-afbf-d126f6420afd', 'SANG GATOTKOCO KEMBALI', '2024-11-13 12:20:42', '2024-11-13 12:20:42');
INSERT INTO `tbl_instansi` VALUES ('8eac0bfb-2a66-4d04-b643-36649964f46c', 'KELURAHAN MOJO', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('8f2858db-e451-4b51-91e8-a094b700ca71', 'DINKOPUKMPERIN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('92799be3-e7a5-4b25-88e7-8a7fd230afc7', 'BKPSDM', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('94001e72-c0f8-443d-ae27-5cd8c77372d9', 'BAGIAN TATA PEMERINTAHAN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('94679dcd-6885-490d-bc6b-98d5c9db7b05', 'DLH', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('95deed03-171d-4127-9d20-f846c95f5082', 'KELURAHAN GAJAHAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('99b603c3-993c-45e0-9ce8-a2469e01a0eb', 'BPKAD', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('9d51d9c5-3412-4607-83cb-e286380131fd', 'KELURAHAN KETELAN', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('9fa4e5a7-bcd0-4f7f-a4bd-8de7a4e35627', 'KELURAHAN JAYENGAN', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('a1210c5e-1e6f-4e53-8fd3-cfabd578dd48', 'INSPEKTORAT', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('a91dbdec-9d35-4fa1-a9f0-e2d87fc44acc', 'DISDUKCAPIL', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('b1f2071b-3e50-4010-8490-f3c351a572ca', 'DISPANGTAN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('b2523b15-acb4-4a0c-95e3-0d0c9d10cdf3', 'KELURAHAN SRIWEDARI', '2024-11-05 04:25:06', '2024-11-05 04:25:06');
INSERT INTO `tbl_instansi` VALUES ('b33c9dbe-221e-4f08-aacf-21849be3a0ea', 'SATPOL PP', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('b862f627-7ff7-481e-a979-ee580f52fd2c', 'KECAMATAN LAWEYAN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('c99b3445-8da6-42d1-a01f-31dc255b1480', 'BAGIAN HUKUM', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('d230eeb0-b56a-4462-adce-621ebdc6b59d', 'DISHUB', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('d8831bde-d449-4fef-adfb-dfedbe83cb06', 'DINKES', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('d8832a1d-b914-4d37-b892-fa94ccfdeb69', 'DAMKAR', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('d9585628-7579-4580-8cf3-94238af0274c', 'BLP', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('daa4f63b-38a6-4ec9-8790-734a246c6627', 'DINSOS', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('dbd2dcdc-98d4-4146-8a3a-067e6c6e7914', 'KECAMATAN PASAR KLIWON', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('ea428dcb-6e99-4ced-a203-c42c3d963b6e', 'BAGIAN ADMINISTRASI PEMBANGUNAN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('ef738b84-a69e-49ac-beb1-2413a4685f49', 'BADAN PENDAPATAN DAERAH', '2024-11-05 04:24:01', '2024-11-05 04:24:01');
INSERT INTO `tbl_instansi` VALUES ('f3a31836-c56f-4e1d-9ef5-b196d215f915', 'BAGIAN ORGANISASI', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('f5621f63-4e52-4b54-b5da-963161d88895', 'DISPORA', '2024-11-05 04:27:45', '2024-11-05 04:27:45');
INSERT INTO `tbl_instansi` VALUES ('f70aac61-0858-4aa0-ac7f-091822d519ee', 'DISPERKIMTAN', '2024-11-05 04:27:45', '2024-11-05 04:27:45');

-- ----------------------------
-- Table structure for tbl_layanan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_layanan`;
CREATE TABLE `tbl_layanan`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `layanan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_layanan
-- ----------------------------
INSERT INTO `tbl_layanan` VALUES ('0c2ce546-aa59-4f23-8954-a03bcf5f5bb1', 'BALIHO', '2025-10-03 07:04:34', '2025-10-03 07:04:34');
INSERT INTO `tbl_layanan` VALUES ('75fcd134-0fcf-4694-8625-8d43bf41ccb0', 'SIARAN RADIO KONATA', '2025-10-03 07:11:56', '2025-10-03 07:11:56');
INSERT INTO `tbl_layanan` VALUES ('c9730c78-1a46-4cf4-b75d-aaaf9fbfda56', 'RUNNING TEXT', '2025-10-03 07:12:19', '2025-10-03 07:12:19');
INSERT INTO `tbl_layanan` VALUES ('d062f47c-d9a9-4096-b941-894a7ca30915', 'PPID', '2025-10-03 07:05:16', '2025-10-03 07:05:16');
INSERT INTO `tbl_layanan` VALUES ('eb64bf1d-1a9f-4c53-88dc-36089dd196c4', 'KELOMPOK INFOMASI MASYARAKAT (KIM)', '2025-10-03 07:12:10', '2025-10-03 07:12:10');
INSERT INTO `tbl_layanan` VALUES ('f20ffbd5-9333-4a87-81ba-d7ff76aa669e', 'BULETIN SIBER (BUSI)', '2025-10-03 07:11:31', '2025-10-03 07:12:38');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `telepon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  INDEX `users_instansi_id_foreign`(`instansi_id`) USING BTREE,
  CONSTRAINT `users_instansi_id_foreign` FOREIGN KEY (`instansi_id`) REFERENCES `tbl_instansi` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('c08e6846-e4ac-442f-a25a-bcf8ebec58d3', '5a2c5757-7fbf-4870-a7c3-27d74bfecb50', 'thesea', 'casing.belakang@gmail.com', 'profil/WhatsApp_Image_2025-10-02_at_05.32.38-removebg-preview-min.png', '081933664056', NULL, '$2y$12$Cs.p.FY9BLoaQ8ScoB113uQynGCOkWXDsnnN40Ib4MrmAw6ztaxDW', NULL, '2025-10-02 09:08:24', '2025-10-03 03:17:48');

SET FOREIGN_KEY_CHECKS = 1;
