-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2022 at 12:20 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wwwbesor_member`
--

-- --------------------------------------------------------

--
-- Table structure for table `area__categories`
--

CREATE TABLE `area__categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area__categories`
--

INSERT INTO `area__categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Adrenal', NULL, NULL),
(2, 'Diabetes Mellitus', NULL, NULL),
(3, 'Reproductive Endocrinology', NULL, NULL),
(4, 'Parathyroid, Calcium And Bone Metabolism', NULL, NULL),
(5, 'Pituitary', NULL, NULL),
(6, 'Pediatric Endocrinology', NULL, NULL),
(7, 'Thyroid', NULL, NULL),
(8, 'Sexual Dysfunctions', NULL, NULL),
(9, 'Obesity & Metabolic Disorders', NULL, NULL),
(10, 'Lipid Disorders', NULL, NULL),
(11, 'Miscellaneous', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `area__sub__categories`
--

CREATE TABLE `area__sub__categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area__sub__categories`
--

INSERT INTO `area__sub__categories` (`id`, `name`, `area_category`, `created_at`, `updated_at`) VALUES
(1, 'Hyperaldosteronism', '1', NULL, NULL),
(2, 'Adrenal Cushing\'s Syndrome', '1', NULL, NULL),
(3, 'Adrenal Insufficiency', '1', NULL, NULL),
(4, 'Pheocromocytoma', '1', NULL, NULL),
(5, 'CAH', '1', NULL, NULL),
(6, 'Aetiopathogenesis and Diagnosis', '2', NULL, NULL),
(7, 'Diabetes Management', '2', NULL, NULL),
(8, 'Acute Complications', '2', NULL, NULL),
(9, 'Chronic Complications', '2', NULL, NULL),
(10, 'Genetics of Diabetes', '2', NULL, NULL),
(11, 'Diabetes in Young', '2', NULL, NULL),
(12, 'Micro or Macronutrient Disorders', '2', NULL, NULL),
(13, 'Hirsutism', '3', NULL, NULL),
(14, 'PCOS', '3', NULL, NULL),
(15, 'Menstrual', '3', NULL, NULL),
(16, 'Female Infertility', '3', NULL, NULL),
(17, 'Hormone Replacement Therapy', '3', NULL, NULL),
(18, 'Male Infertility', '3', NULL, NULL),
(19, 'Hypercalcemia', '4', NULL, NULL),
(20, 'Hypocalcemia', '4', NULL, NULL),
(21, 'Osteoporosis', '4', NULL, NULL),
(22, 'Hypopituitarism', '5', NULL, NULL),
(23, 'Pituitary Tumors', '5', NULL, NULL),
(24, 'Diabetes Insipidus', '5', NULL, NULL),
(25, 'SIADH', '5', NULL, NULL),
(26, 'Diabetes in Children and Adolescents', '6', NULL, NULL),
(27, 'Growth and Stature', '6', NULL, NULL),
(28, 'Delayed and Precocious Puberty', '6', NULL, NULL),
(29, 'Disorders of Sexual Differentiation', '6', NULL, NULL),
(30, 'Hyperthyroidism', '7', NULL, NULL),
(31, 'Hypothyroidism', '7', NULL, NULL),
(32, 'Thyroid in Pregnancy', '7', NULL, NULL),
(33, 'Thyroid Nodule', '7', NULL, NULL),
(34, 'Thyroid Malignancy', '7', NULL, NULL),
(35, 'Testosterone Deficiency in Male', '8', NULL, NULL),
(36, 'Female Hypogonadism', '8', NULL, NULL),
(37, 'Female Sexual Dysfunction', '8', NULL, NULL),
(38, 'Male Sexual Dysfunction', '8', NULL, NULL),
(39, 'Chidhood Obesity', '9', NULL, NULL),
(40, 'Adult Obesity', '9', NULL, NULL),
(41, 'Eating Disorders', '9', NULL, NULL),
(42, 'Nutrition', '9', NULL, NULL),
(43, 'Inborn Errors of Metabolism', '11', NULL, NULL),
(44, 'Spontaneous Hypoglycemia', '11', NULL, NULL),
(45, 'Endocrine Neoplasia', '11', NULL, NULL),
(46, 'Endocrine Diseases in Pregnancy', '11', NULL, NULL),
(47, 'Transgender Medicine', '11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `associate__members`
--

CREATE TABLE `associate__members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `associate__members`
--

INSERT INTO `associate__members` (`id`, `institute`, `from`, `to`, `user_id`, `permission`, `deleted`, `created_at`, `updated_at`) VALUES
(5, 'Dhaka Medical College and Hospital', '2022-02-01', '2022-03-21', '1', '1', '0', '2022-03-21 05:18:11', '2022-04-23 11:33:24'),
(6, 'bauetoo', '2022-03-01', '2022-03-03', '1', '1', '0', '2022-03-21 05:18:59', '2022-04-23 11:33:24'),
(7, 'Dhaka Medical College and Hospital', '2022-04-01', NULL, '6', '0', '0', '2022-04-03 22:28:53', '2022-04-03 22:28:53'),
(9, 'bsmmu', '2022-03-27', '2022-03-28', '10', '0', '0', '2022-04-04 14:46:47', '2022-04-04 14:46:47'),
(11, 'Ffc', '2022-04-03', '2022-04-05', '14', '0', '0', '2022-04-05 09:20:38', '2022-04-05 09:20:38'),
(12, 'dmc', '0022-10-21', NULL, '18', '1', '0', '2022-04-18 13:27:09', '2022-04-23 11:32:35'),
(13, 'DMC', '2022-03-01', '2022-04-21', '19', '0', '0', '2022-04-21 10:48:09', '2022-04-23 12:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `current__appoinments`
--

CREATE TABLE `current__appoinments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current__appoinments`
--

INSERT INTO `current__appoinments` (`id`, `designation`, `hospital`, `from`, `user_id`, `permission`, `deleted`, `created_at`, `updated_at`) VALUES
(5, 'Junior Software Developer', 'DMCoo', '2022-03-15', '1', '1', '0', '2022-03-21 05:19:29', '2022-04-23 11:33:24'),
(6, 'Software Developer', 'DMC', '2022-03-01', '6', '0', '0', '2022-04-03 04:26:09', '2022-04-03 04:26:09'),
(8, 'md', 'dmc', '2022-03-28', '10', '0', '0', '2022-04-04 14:50:28', '2022-04-04 14:50:28'),
(9, 'Manager', 'Hhh', '2022-04-01', '14', '0', '0', '2022-04-05 09:21:43', '2022-04-05 09:21:43'),
(10, 'hfghdgfdhfh', 'bsmmu', '2050-11-11', '18', '1', '0', '2022-04-18 13:29:25', '2022-04-23 11:32:35'),
(11, 'Assistant Professor', 'Dhaka Medical College', '2022-01-01', '19', '0', '0', '2022-04-21 10:49:24', '2022-04-23 12:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `current__organizations`
--

CREATE TABLE `current__organizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current__organizations`
--

INSERT INTO `current__organizations` (`id`, `name`, `position`, `user_id`, `permission`, `deleted`, `created_at`, `updated_at`) VALUES
(5, 'Dhaka Medical College & Hospital', 'Lectureroo', '1', '1', '0', '2022-03-21 05:19:10', '2022-04-23 11:33:24'),
(6, 'Dhaka Medical College & Hospital sdsds sdsdsds sdsdsds  dasda', 'fadsfa', '1', '1', '0', '2022-03-21 05:19:17', '2022-04-23 11:33:24'),
(7, 'Dhaka Medical College & Hospital', 'Lecturer', '6', '0', '0', '2022-04-03 04:25:42', '2022-04-03 04:25:42'),
(9, 'no', 'prof', '10', '0', '0', '2022-04-04 14:50:07', '2022-04-04 14:50:07'),
(10, 'Ssmch', 'Kkk', '14', '0', '0', '2022-04-05 09:21:09', '2022-04-05 09:21:09'),
(11, 'Zaman IT', 'manager', '18', '1', '0', '2022-04-18 13:27:57', '2022-04-23 11:32:35'),
(12, 'APB', 'General Member', '19', '0', '0', '2022-04-21 10:48:34', '2022-04-23 12:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `essential__categories`
--

CREATE TABLE `essential__categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `essential__categories`
--

INSERT INTO `essential__categories` (`id`, `degree`, `created_at`, `updated_at`) VALUES
(1, 'MBBS', NULL, NULL),
(2, 'MD(Endocrionology & Metabolism)', NULL, NULL),
(3, 'FCPS(Endocrionology & Metabolism)', NULL, NULL),
(4, 'DEM(Endocrionology & Metabolism)', NULL, NULL),
(5, 'MPhill(Clinical Endocrinology)', NULL, NULL),
(6, 'Equivalent Foreign post-graduate Degree/Diploma in Endocrinology', NULL, NULL),
(7, 'Post-graduation in other field', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `essential__information`
--

CREATE TABLE `essential__information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institutation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bmdc_reg_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bmdc_reg_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `essential__information`
--

INSERT INTO `essential__information` (`id`, `user_id`, `degree`, `passing_year`, `institutation`, `university`, `bmdc_reg_no`, `bmdc_reg_year`, `permission`, `deleted`, `created_at`, `updated_at`) VALUES
(2, '1', 'MBBS', '2020', 'Dhaka Medical College', 'Dhaka Medical College & HospitalDhaka Medical College & Hospital', '54545521215415', '60', '1', '0', '2022-03-21 05:15:46', '2022-04-23 11:33:24'),
(3, '1', 'MD(Endocrionology & Metabolism)', '2022oo', 'Dhaka Medical College & Hospital', 'Dhaka Medical College & HospitalDhaka Medical College & Hospital', '10', '5025465465', '1', '0', '2022-03-21 05:17:32', '2022-04-23 11:33:24'),
(4, '1', 'FCPS(Endocrionology & Metabolism)', '2021', 'ARMY', 'Dhaka Medical College & HospitalDhaka Medical College & Hospital', '10', '2016', '1', '0', '2022-03-21 05:17:51', '2022-04-23 11:33:24'),
(5, '1', 'FCPS(Endocrionology & Metabolism)', '2022oo', 'Dhaka Medical College', 'BAUET', '54545521215415', '60', '1', '1', '2022-04-02 22:00:04', '2022-04-20 15:29:34'),
(7, '6', 'MBBS', '2020', 'Dhaka Medical College', 'BAUET', '10', '2016', '0', '0', '2022-04-03 03:37:01', '2022-04-03 03:37:01'),
(9, '10', 'MBBS', '2010', 'dmc', NULL, '01112', NULL, '0', '0', '2022-04-04 14:46:03', '2022-04-04 14:46:03'),
(11, '14', 'MBBS', '2021', 'Dmc', NULL, NULL, NULL, '0', '0', '2022-04-05 09:20:02', '2022-04-05 09:20:02'),
(14, '18', 'MBBS', '2010', 'hh', NULL, NULL, NULL, '1', '0', '2022-04-18 13:24:44', '2022-04-23 11:32:35'),
(15, '18', 'MBBS', '2011', 'gg', '2000', NULL, NULL, '1', '0', '2022-04-18 13:25:47', '2022-04-23 11:32:35'),
(16, '19', 'MBBS', '2021', 'BIRDEM', 'BSMMU', 'A-1234567', '2021', '0', '0', '2022-04-21 10:45:46', '2022-04-23 12:05:08'),
(17, '19', 'MD(Endocrionology & Metabolism)', '1021', 'BIRDEM', 'BSMMU', 'A-1234567', '2021', '0', '0', '2022-04-21 10:46:37', '2022-04-23 12:05:08'),
(18, '20', 'MBBS', '2019', '2019', NULL, NULL, NULL, '0', '0', '2022-04-23 12:38:32', '2022-04-23 12:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file__uploads`
--

CREATE TABLE `file__uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bmdc_reg_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_all_degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_perticipation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file__uploads`
--

INSERT INTO `file__uploads` (`id`, `nid`, `bmdc_reg_certificate`, `certificate_all_degree`, `active_perticipation`, `user_id`, `permission`, `created_at`, `updated_at`) VALUES
(6, 'storage/file/Bk5BbqDP3YOhCYt3fntRG0AmZp5axJyda6nOeOEq.jpg', NULL, 'storage/file/3GbdNNWr1YAmmOWymNMWgb1Iy1gBZ7v0ZSYtWlCU.jpg', NULL, '1', '1', '2022-03-21 05:19:53', '2022-04-20 15:29:36'),
(7, 'storage/file/MT5ebpNCHDouC6uYJPE3NupRzxs1YV1b8TwhDd49.jpg', NULL, 'storage/file/64aXm2OkmrWhQqQOdFl2oinJ4Z3GhH4Yc0gAiLBy.jpg', NULL, '6', '0', '2022-04-03 03:38:23', '2022-04-03 03:38:23'),
(11, 'storage/file/lCrdbrZ2f6k7wkCwzewgpvBgrROTZJZk6g7y9qdM.jpg', NULL, 'storage/file/XWPPguoZtuM2pOQRmNLZpmdA0IhSirZpFyzNhj2w.jpg', NULL, '15', '0', '2022-04-05 09:21:36', '2022-04-05 09:21:36'),
(12, 'storage/file/aWeNx6M1Vbif0UqPCYUL4kVP9rOYV5oezgq6J4RC.jpg', NULL, 'storage/file/oWHbDwV7hINBjl6UTcaAvwDJ5G4HwyMmhuLaoU5A.jpg', NULL, '14', '0', '2022-04-05 09:23:17', '2022-04-05 09:23:17'),
(14, 'storage/file/dwed5iAGBM2VaJGMLvHpFcLwpFmGQs1swHm4oZpX.jpg', 'storage/file/A73vTyltD66paWWiR0wnsb77Cp4jehVSNbITlGUC.jpg', 'storage/file/vZf44oLWreSoHsExP1TDjnE6uks6JUwDKyHPE2yF.jpg', NULL, '18', '1', '2022-04-18 13:30:19', '2022-04-18 13:34:33'),
(15, 'storage/file/qUcLMhhilaJlmqp9VPzhzvQTUouZqwwpZeu0BKAQ.jpg', 'storage/file/77K5Kpr5g1tkPX7rcC9D2W1hcaLbCAnpdCPiYFh6.pdf', 'storage/file/l12f0UOrWyK5GHRAAexcjz0gSASsQva5tx0fSmUb.jpg', 'storage/file/J9FqB9DY5Z93tfmpoI5IxRDhlO8iHhE1Xl0k0yF9.png', '19', '0', '2022-04-21 10:51:34', '2022-04-21 10:51:34'),
(16, 'storage/file/0SOdwlkcZomelcakpTn2JQ8tBw3itHqvrLnWPSAx.pdf', NULL, 'storage/file/hMYSzwFwR3nOwY8BK8bJLLSL2QUA9qAHo30gOWus.pdf', NULL, '20', '0', '2022-04-23 12:41:23', '2022-04-23 12:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `membership__categories`
--

CREATE TABLE `membership__categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2022_03_08_054846_create_personal__information_table', 1),
(20, '2022_03_10_082758_create_essential__information_table', 1),
(21, '2022_03_12_052109_create_essential__categories_table', 1),
(22, '2022_03_20_042046_create_area__categories_table', 1),
(23, '2022_03_20_042717_create_area__sub__categories_table', 1),
(24, '2022_03_20_101514_create_user__area_of__interests_table', 1),
(25, '2022_03_20_113639_create_associate__members_table', 1),
(26, '2022_03_20_113852_create_current__organizations_table', 1),
(27, '2022_03_20_113957_create_current__appoinments_table', 1),
(28, '2022_03_20_114130_create_membership__categories_table', 1),
(29, '2022_03_20_114257_create_payments__infos_table', 1),
(30, '2022_03_20_114647_create_file__uploads_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mkt1@zaman-it.com', '$2y$10$nchRxOc6n/Ax7f5FS26bEO9M0JfOWEPysndPvvD11zi1b6c4Q4k5S', '2022-04-07 10:55:52'),
('antarip15@gmail.com', '$2y$10$d5/oN4WRfdFmiDOJeKJIX.xCvGzKjUXB/TMjPisB8HC.fI8ihZ1pq', '2022-04-07 10:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `payments__infos`
--

CREATE TABLE `payments__infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `membership_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments__infos`
--

INSERT INTO `payments__infos` (`id`, `membership_category`, `date`, `phone`, `trx_id`, `file`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'Package Two', '2022-03-14', NULL, 'aa', 'storage/payment_receipt/dRhkDbdEOBGXT0GwWx3RQYp17QrzyfhrSezQKhoP.jpg', '1', '2022-03-21 05:20:07', '2022-03-21 05:20:07'),
(12, 'Package Three', '2022-04-04', '01713702979', 'sdsds', 'storage/payment_receipt/bDTiOQOrVYwd42XGQQhK3fkbI1TfkbiHqPnGP2sL.jpg', '6', '2022-04-03 23:01:27', '2022-04-03 23:01:27'),
(14, 'Package One', '2022-04-04', '01717469128', '012', NULL, '10', '2022-04-04 15:02:59', '2022-04-04 15:02:59'),
(18, 'Package Two', '2022-04-03', NULL, '1234', NULL, '14', '2022-04-05 09:23:47', '2022-04-05 09:23:47'),
(21, 'Package One', '2022-04-05', NULL, 'adfa', 'storage/payment_receipt/TlMh7S5Hwv7jsaHvEulwb0WAq23nQhFlOx7RuZhS.jpg', '15', '2022-04-05 10:08:43', '2022-04-05 10:08:43'),
(23, 'Life Member', '2055-12-10', '01717469128', '0120', 'storage/payment_receipt/VoRBF8tHc7THRxuDqCGMxOi2QkY81ZrMUvV4VNuu.jpg', '18', '2022-04-18 13:31:08', '2022-04-18 13:31:08'),
(24, 'Life Member', '2022-04-19', '01721233687', 'Bkash', 'storage/payment_receipt/Nbra80VgNGdLKwMpxd1reUC9lp3qje8ggIwRUQot.png', '19', '2022-04-21 10:53:08', '2022-04-21 10:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `personal__information`
--

CREATE TABLE `personal__information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership_id` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bith_date` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `reject` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal__information`
--

INSERT INTO `personal__information` (`id`, `user_id`, `membership_id`, `first_name`, `middle_name`, `last_name`, `bith_date`, `gender`, `father_name`, `mother_name`, `phone`, `tel`, `email`, `nid`, `image`, `permission`, `reject`, `address`, `created_at`, `updated_at`) VALUES
(1, '1', '00112233', 'Mr.', 'Antarip', 'Saha', '1996-12-20', 'male', 'ABC EFG', 'Sujala Saha', '01713702979', '01521475060', 'antarip15@gmail.com', '19968196627103740', 'https:://member.bes.org.bd/public/assets/images/faces/2.jpg', '1', '0', 'Kadirgonj, Rajshahi.', '2022-03-21 05:05:57', '2022-04-23 11:33:24'),
(2, '6', NULL, 'uzzal', 'kumar', 'l', '2022-04-01', 'male', 'aaa', 'aaaa', '01521475060', NULL, 'uk@gmail.com', '19968196627103740', 'https:://member.bes.org.bd/public/assets/images/faces/2.jpg', '0', '0', 'Kadirgonj, Rajshahi.', '2022-04-03 04:25:15', '2022-04-03 04:25:15'),
(7, '14', NULL, 'Arshad', NULL, NULL, '2021-03-02', 'male', NULL, NULL, '01717469128', NULL, 'mkt1@zaman-it.com', NULL, 'https:://member.bes.org.bd/public/assets/images/faces/2.jpg', '0', '0', 'Uttara', '2022-04-05 09:19:40', '2022-04-05 09:19:40'),
(8, '15', NULL, 'dip', NULL, NULL, '2022-03-30', 'male', 'a', NULL, '011175212564', NULL, 'd@gmail.com', NULL, 'https:://member.bes.org.bd/public/assets/images/faces/2.jpg', '0', '0', 'dasfa', '2022-04-05 09:20:38', '2022-04-05 09:20:38'),
(11, '17', NULL, 'Ali', NULL, NULL, '2021-05-02', 'male', NULL, NULL, '01717469128', NULL, 'a@gnail.com', NULL, 'storage/personal_image/ONR2uekpNzCC0JtEiSVNvDdL2P74LpkpCaVzBp96.jpg', '0', '0', 'Hhhhh', '2022-04-13 16:36:27', '2022-04-13 16:36:27'),
(12, '18', '001122', 'jaber ali', NULL, NULL, '1990-10-01', 'male', NULL, NULL, '01717469128', NULL, 'ja@bma.com', NULL, 'storage/personal_image/hOz34Mv7RZLWp85us2AVRnXaoAISqbFQ6PdM2aig.jpg', '1', '0', '124', '2022-04-18 13:24:20', '2022-04-23 11:32:35'),
(13, '19', 'LM-046', 'Md', 'Mahmud', 'Hossain', '2022-04-14', 'male', 'ASDF', 'FDSA', '01511552012', '12345', 'endobd2012@gmail.com', '12121212121212121', 'storage/personal_image/p3xa1FGgqj6VK5gcMRXpnNyVH6Gnyw8dmGQ8p3uN.jpg', '1', '0', 'Hatirpool', '2022-04-21 10:44:52', '2022-04-23 12:05:08'),
(14, '20', NULL, 'arshad', NULL, NULL, '1978-11-11', 'male', NULL, NULL, '01717469128', NULL, 'a@gmail.com', NULL, 'storage/personal_image/Sv4fcWVyHx3V3hfofl3gRHzudoR8UU1avmPqJoYY.png', '0', '0', 'bsbbbb', '2022-04-23 12:37:53', '2022-04-23 12:37:53'),
(15, '22', NULL, 'Md', 'Palash', 'Mahmud', '2022-04-26', 'male', 'asdf', NULL, '01511552012', NULL, 'hasanm409@gmail.com', '123', 'storage/personal_image/R7YKfega3arvDoBPtc3hYK6oJBs0El8jZkruvRxE.png', '0', '0', '309-Palace', '2022-04-26 09:39:21', '2022-04-26 09:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `admin`, `status`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Antarip Saha', '0', 1, 'antarip15@gmail.com', NULL, '$2y$10$SNwtTtduuz08P/3.SDhUmuJHQ7YxcDhLyMB1I4TLp1hDCo6Y/iRiK', 'Esq0AeDSQfv3StP0Q8MEfYPEidHWgucg7H2LVAbmW8555s6Wy7Tc5op7cUrL', '2022-03-20 22:06:25', '2022-04-04 21:54:01'),
(2, 'Dip Saha', '1', 0, 'dip15@gmail.com', NULL, '$2y$10$0lY2O.5aqm/S2m4zLIaIJu.gdmG4VxF.rIt5fjLjbpBBiWOqZJk.C', NULL, '2022-03-28 03:11:00', '2022-04-02 03:06:33'),
(6, 'Uzzal', '0', 0, 'uk@gmail.com', NULL, '$2y$10$vE4vyZNauSp9hRXN.isquurAwnjlbYg3CABKMohQp/vcS/PSeAwy6', NULL, '2022-04-03 00:11:40', '2022-04-04 01:54:13'),
(8, 'Super Admin', '1', 0, 'bes@gmail.com', NULL, '$2y$10$Ny4UoKuOq5Znm/A/9WUV/e6kl3yyRHr8mDAz/P7wmcnW.WISlYkw6', NULL, '2022-04-04 14:20:17', '2022-04-04 14:20:17'),
(14, 'Arshad', '0', 1, 'mkt1@zaman-it.com', NULL, '$2y$10$mz8wzDqhksum5ihxYYgKPetmN1mCNMkfoA61nmH/KufRj5FWqUP56', NULL, '2022-04-05 09:18:06', '2022-04-07 10:51:31'),
(15, 'dip', '0', 0, 'd@gmail.com', NULL, '$2y$10$yYKcz/YN6tEGV/IVt1czCOK3mgLnovL1nQGVIKZOFUb/0Xn8wMnBO', NULL, '2022-04-05 09:20:05', '2022-04-05 09:20:05'),
(17, 'Arshad', '0', 0, 'mk@zaman-it.com', NULL, '$2y$10$.1qFBZuSzybrO/q5FkKM4.AoTnWLix5QGw/7Nl/ejBxaztGZN.IWi', NULL, '2022-04-13 16:34:38', '2022-04-13 16:34:38'),
(18, 'jaber ali', '0', 1, 'ja@bma.com', NULL, '$2y$10$quhmGy3Q72yUeMbHZoYoyepUkNGTZUYkbLbzL4nTu0D3O1mDd/liG', NULL, '2022-04-18 13:15:26', '2022-04-18 13:37:49'),
(19, 'Mahmud', '0', 1, 'endobd2012@gmail.com', NULL, '$2y$10$Kk2BxAnn5Tp9D6j0rutnLetzDpSwSqpusuWMG.yGAL1QqexiwrzlW', NULL, '2022-04-21 10:41:36', '2022-04-21 11:02:40'),
(20, 'arshad', '0', 0, 'a@gmail.com', NULL, '$2y$10$Pu/G3ykpz7aOT7iPI2IF5u7mkwwQe31Tkt/QA/3/Ka68f.7dJE..a', NULL, '2022-04-23 12:32:18', '2022-04-23 12:32:18'),
(21, 'Rr', '0', 0, 'rr@gmail.com', NULL, '$2y$10$0cbnheBRTXshIJCQB4bXS.TrqgQFLWn45dko4PDhF54e/5MQXQEpC', NULL, '2022-04-25 13:20:48', '2022-04-25 13:20:48'),
(22, 'Palash Mahmud', '0', 0, 'hasanm409@gmail.com', NULL, '$2y$10$qrrIpuLfAfJAzUkDfUGy4O1t0YgszmCSTYD.TPrvkv9hqzBMOz8cW', NULL, '2022-04-26 09:11:04', '2022-04-26 09:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `user__area_of__interests`
--

CREATE TABLE `user__area_of__interests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user__area_of__interests`
--

INSERT INTO `user__area_of__interests` (`id`, `user_id`, `area_id`, `permission`, `created_at`, `updated_at`) VALUES
(40, '1', '1', '1', NULL, '2022-04-20 15:29:37'),
(41, '1', '2', '1', NULL, '2022-04-20 15:29:37'),
(42, '1', '3', '1', NULL, '2022-04-20 15:29:37'),
(43, '1', '4', '1', NULL, '2022-04-20 15:29:37'),
(44, '1', '7', '1', NULL, '2022-04-20 15:29:37'),
(45, '6', '1', '0', NULL, NULL),
(46, '6', '2', '0', NULL, NULL),
(47, '6', '3', '0', NULL, NULL),
(48, '6', '4', '0', NULL, NULL),
(49, '6', '5', '0', NULL, NULL),
(50, '9', '2', '0', NULL, NULL),
(51, '9', '3', '0', NULL, NULL),
(52, '9', '4', '0', NULL, NULL),
(53, '9', '3', '0', NULL, NULL),
(54, '9', '4', '0', NULL, NULL),
(55, '10', '1', '0', NULL, NULL),
(56, '10', '3', '0', NULL, NULL),
(57, '10', '1', '0', NULL, NULL),
(58, '10', '3', '0', NULL, NULL),
(69, '14', '1', '0', NULL, NULL),
(70, '14', '2', '0', NULL, NULL),
(75, '18', '1', '1', NULL, '2022-04-18 13:34:49'),
(76, '18', '2', '1', NULL, '2022-04-18 13:34:49'),
(77, '19', '1', '1', NULL, '2022-04-21 10:57:40'),
(78, '19', '2', '1', NULL, '2022-04-21 10:57:40'),
(79, '19', '3', '1', NULL, '2022-04-21 10:57:40'),
(80, '19', '4', '1', NULL, '2022-04-21 10:57:40'),
(81, '19', '5', '1', NULL, '2022-04-21 10:57:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area__categories`
--
ALTER TABLE `area__categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area__sub__categories`
--
ALTER TABLE `area__sub__categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `associate__members`
--
ALTER TABLE `associate__members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `current__appoinments`
--
ALTER TABLE `current__appoinments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `current__organizations`
--
ALTER TABLE `current__organizations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `essential__categories`
--
ALTER TABLE `essential__categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `essential__information`
--
ALTER TABLE `essential__information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `file__uploads`
--
ALTER TABLE `file__uploads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `membership__categories`
--
ALTER TABLE `membership__categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `payments__infos`
--
ALTER TABLE `payments__infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `personal__information`
--
ALTER TABLE `personal__information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user__area_of__interests`
--
ALTER TABLE `user__area_of__interests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area__categories`
--
ALTER TABLE `area__categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `area__sub__categories`
--
ALTER TABLE `area__sub__categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `associate__members`
--
ALTER TABLE `associate__members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `current__appoinments`
--
ALTER TABLE `current__appoinments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `current__organizations`
--
ALTER TABLE `current__organizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `essential__categories`
--
ALTER TABLE `essential__categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `essential__information`
--
ALTER TABLE `essential__information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file__uploads`
--
ALTER TABLE `file__uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `membership__categories`
--
ALTER TABLE `membership__categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments__infos`
--
ALTER TABLE `payments__infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal__information`
--
ALTER TABLE `personal__information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user__area_of__interests`
--
ALTER TABLE `user__area_of__interests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
