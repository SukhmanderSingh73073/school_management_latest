-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2023 at 11:11 PM
-- Server version: 10.4.27-MariaDB-1:10.4.27+maria~ubu2004
-- PHP Version: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skulls`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_year` varchar(100) NOT NULL,
  `stop_year` varchar(100) NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `start_year`, `stop_year`, `school_id`, `created_at`, `updated_at`) VALUES
(1, '2023', '2024', 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(2, '1991', '1992', 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(3, '2002', '2003', 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(4, '1996', '1997', 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(5, '1994', '1995', 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `academic_year_student_record`
--

CREATE TABLE `academic_year_student_record` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `student_record_id` bigint(20) UNSIGNED NOT NULL,
  `my_class_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_applications`
--

CREATE TABLE `account_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `state` tinyint(1) NOT NULL DEFAULT 0,
  `attendance_time` time NOT NULL DEFAULT '16:49:10',
  `attendance_date` date NOT NULL DEFAULT '2023-02-14',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` varchar(100) NOT NULL,
  `type` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `att_type` varchar(100) NOT NULL COMMENT 'P,A,AL,HDL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_groups`
--

CREATE TABLE `class_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_groups`
--

INSERT INTO `class_groups` (`id`, `name`, `school_id`, `created_at`, `updated_at`) VALUES
(1, 'Kindergarten', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(2, 'Nursery', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(3, 'Primary', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(4, 'Secondary', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(5, 'Berenice Lockman', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(6, 'Bailey Stanton', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(7, 'Dr. Vladimir Hickle DVM', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(8, 'Dr. Mavis Schamberger Sr.', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso2` varchar(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `phone_code` varchar(5) NOT NULL,
  `iso3` varchar(3) NOT NULL,
  `region` varchar(100) NOT NULL,
  `subregion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `precision` tinyint(4) NOT NULL DEFAULT 2,
  `symbol` varchar(100) NOT NULL,
  `symbol_native` varchar(100) NOT NULL,
  `symbol_first` tinyint(4) NOT NULL DEFAULT 1,
  `decimal_mark` varchar(1) NOT NULL DEFAULT '.',
  `thousands_separator` varchar(1) NOT NULL DEFAULT ','
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `custom_timetable_items`
--

CREATE TABLE `custom_timetable_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` longtext DEFAULT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `stop_date` date NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `publish_result` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `description`, `semester_id`, `start_date`, `stop_date`, `active`, `publish_result`, `created_at`, `updated_at`) VALUES
(1, 'Exam 1', 'Exam 1 description', 1, '2020-01-01', '2020-01-31', 0, 0, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(2, 'quidem', 'Magni debitis quos necessitatibus consequatur veritatis rerum.', 1, '2023-02-24', '2023-02-28', 0, 0, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(3, 'libero', 'Quo vero id accusamus rem.', 1, '2023-02-20', '2023-02-27', 0, 0, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(4, 'enim', 'Qui veniam doloremque deleniti officia.', 1, '2023-02-20', '2023-02-20', 0, 0, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(5, 'et', 'Reiciendis saepe nulla dolores cumque iste quaerat.', 1, '2023-02-21', '2023-02-21', 0, 0, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(6, 'beatae', 'Voluptatibus debitis delectus rem omnis animi.', 1, '2023-02-25', '2023-03-06', 0, 0, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(7, 'quod', 'Sequi est quam et qui soluta autem.', 1, '2023-02-26', '2023-03-04', 0, 0, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(8, 'et', 'Magni rerum cupiditate nobis optio vitae quis sit.', 1, '2023-02-26', '2023-03-03', 0, 0, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(9, 'soluta', 'Dolorum nesciunt necessitatibus sunt inventore.', 1, '2023-02-23', '2023-02-28', 0, 0, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(10, 'maiores', 'Ut velit perferendis provident.', 1, '2023-02-20', '2023-02-20', 0, 0, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(11, 'sequi', 'Eos saepe velit aut.', 1, '2023-02-20', '2023-02-22', 0, 0, '2023-02-14 11:19:16', '2023-02-14 11:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `exam_records`
--

CREATE TABLE `exam_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `exam_slot_id` bigint(20) UNSIGNED NOT NULL,
  `section_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `student_marks` int(10) UNSIGNED DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_slots`
--

CREATE TABLE `exam_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `total_marks` int(10) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_slots`
--

INSERT INTO `exam_slots` (`id`, `name`, `description`, `total_marks`, `exam_id`, `created_at`, `updated_at`) VALUES
(1, 'Objective', 'written last week', 40, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(2, 'Lelah Kuhn', 'Sed cumque deserunt enim beatae eos animi.', 184, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(3, 'Karli Beahan', 'Sunt autem natus sed dolor.', 941, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(4, 'Dax Willms', 'Vero architecto ea et.', 593, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(5, 'Kelley Stark', 'Corporis ipsa voluptas cumque aliquid quos sed.', 31, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(6, 'Mayra McGlynn', 'Reprehenderit sint nam velit officia quam nobis.', 388, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(7, 'Giovani Strosin V', 'In modi optio quis corrupti quo vero.', 408, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(8, 'Emory Lindgren', 'Eum dolores numquam praesentium aliquid.', 351, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(9, 'Paula Ritchie', 'Laudantium incidunt perferendis consectetur deserunt perspiciatis numquam.', 765, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(10, 'Reymundo Okuneva', 'Incidunt quis vero autem ab quasi.', 538, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(11, 'Mr. Oran Rolfson V', 'Ipsam deserunt dicta aliquam asperiores tenetur qui.', 458, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(100) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade_systems`
--

CREATE TABLE `grade_systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `remark` varchar(100) DEFAULT NULL,
  `grade_from` varchar(100) NOT NULL,
  `grade_till` varchar(100) NOT NULL,
  `class_group_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade_systems`
--

INSERT INTO `grade_systems` (`id`, `name`, `remark`, `grade_from`, `grade_till`, `class_group_id`, `created_at`, `updated_at`) VALUES
(1, 'A+', 'Excellent', '90', '100', 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(2, 'A', 'Very Good', '80', '89', 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(3, 'B+', 'Good', '70', '79', 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(4, 'B', 'Satisfactory', '60', '69', 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(5, 'C+', 'Fair', '50', '59', 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(6, 'C', 'Pass', '40', '49', 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(7, 'D', 'Fail', '20', '39', 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` char(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_native` varchar(100) NOT NULL,
  `dir` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `state` tinyint(1) NOT NULL DEFAULT 0,
  `leave_time` time NOT NULL DEFAULT '16:49:10',
  `leave_date` date NOT NULL DEFAULT '2023-02-14',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `type` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `att_type` varchar(100) NOT NULL COMMENT 'AP',
  `user_id` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(100) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(101, '2014_10_12_000000_create_users_table', 1),
(102, '2014_10_12_100000_create_password_resets_table', 1),
(103, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(104, '2019_08_19_000000_create_failed_jobs_table', 1),
(105, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(106, '2020_07_07_055656_create_countries_table', 1),
(107, '2020_07_07_055725_create_cities_table', 1),
(108, '2020_07_07_055746_create_timezones_table', 1),
(109, '2021_10_19_071730_create_states_table', 1),
(110, '2021_10_23_082414_create_currencies_table', 1),
(111, '2021_11_04_183411_create_sessions_table', 1),
(112, '2021_11_04_201030_create_schools_table', 1),
(113, '2021_11_04_210323_create_permission_tables', 1),
(114, '2021_11_05_185142_add_fields_to_users_table', 1),
(115, '2021_11_06_152551_create_class_groups_table', 1),
(116, '2021_11_11_191639_create_my_classes_table', 1),
(117, '2021_12_03_143438_create_sections_table', 1),
(118, '2021_12_27_093512_create_student_records_table', 1),
(119, '2022_01_02_155324_create_academic_years_table', 1),
(120, '2022_01_03_101855_create_teacher_records_table', 1),
(121, '2022_01_11_194118_create_subjects_table', 1),
(122, '2022_01_11_222345_add_academic_year_id_to_schools_table', 1),
(123, '2022_01_20_193649_create_subject_user_table', 1),
(124, '2022_01_22_034939_create_languages_table', 1),
(125, '2022_02_12_001925_create_promotions_table', 1),
(126, '2022_03_04_184650_create_semester_table', 1),
(127, '2022_03_08_091612_add_semester_id_to_schools_table', 1),
(128, '2022_03_12_125021_create_syllabi_table', 1),
(129, '2022_03_26_233935_create_timetable_table', 1),
(130, '2022_03_30_122253_create_timetable_time_slots_table', 1),
(131, '2022_03_31_213839_create_weekdays_table', 1),
(132, '2022_03_31_225139_create_timetable_time_slot_weekday', 1),
(133, '2022_04_26_033729_create_exams_table', 1),
(134, '2022_04_30_020211_create_grade_systems_table', 1),
(135, '2022_05_02_224958_create_exam_slots_table', 1),
(136, '2022_05_13_133106_create_exam_records_table', 1),
(137, '2022_05_28_205955_create_notices_table', 1),
(138, '2022_06_22_191157_create_parent_records_table', 1),
(139, '2022_07_08_131950_create_parent_record_user_table', 1),
(140, '2022_09_02_141457_correct_unique_key_in_subjects_table', 1),
(141, '2022_09_06_172335_add_unique_key_to_my_classes_table', 1),
(142, '2022_09_26_202726_create_academic_year_student_record_table', 1),
(143, '2022_11_03_043455_create_account_applications_table', 1),
(144, '2022_11_05_200953_create_statuses_table', 1),
(145, '2022_12_22_171618_create_custom_timetable_items_table', 1),
(146, '2022_12_22_205601_add_polymorphic_fields_to_timetable_time_slot_weekday_table', 1),
(147, '2023_01_09_171340_make_description_nullable_on_sylabii_table', 1),
(148, '2023_02_10_073814_create_schedules_table', 1),
(149, '2023_02_10_074827_create_attendances_table', 1),
(150, '2023_02_10_080412_create_leaves_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(100) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(100) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 5),
(5, 'App\\Models\\User', 6),
(6, 'App\\Models\\User', 7),
(7, 'App\\Models\\User', 4),
(8, 'App\\Models\\User', 8),
(9, 'App\\Models\\User', 9),
(10, 'App\\Models\\User', 10),
(11, 'App\\Models\\User', 11),
(12, 'App\\Models\\User', 12),
(13, 'App\\Models\\User', 13);

-- --------------------------------------------------------

--
-- Table structure for table `my_classes`
--

CREATE TABLE `my_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `class_group_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_classes`
--

INSERT INTO `my_classes` (`id`, `name`, `class_group_id`, `created_at`, `updated_at`) VALUES
(1, 'Kindergarten 1', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(2, 'Kindergarten 2', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(3, 'Nursery 1', 2, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(4, 'Nursery 2', 2, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(5, 'Primary 1', 3, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(7, 'Primary 2', 4, '2023-02-14 11:19:13', '2023-02-14 11:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `attachment` varchar(100) DEFAULT NULL,
  `start_date` date NOT NULL,
  `stop_date` date NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `content`, `attachment`, `start_date`, `stop_date`, `active`, `school_id`, `created_at`, `updated_at`) VALUES
(1, 'Officiis hic itaque velit magni quis aut soluta dicta.', 'Dolore quas qui quis autem aliquam. Ex dolorem eius sed non. Quasi quasi aliquid dolores suscipit distinctio animi. Sunt neque ut voluptatem consectetur modi.', 'https://via.placeholder.com/640x480.png/009922?text=aut', '2023-02-13', '2023-02-13', 0, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(2, 'Necessitatibus qui iste nisi maiores.', 'Beatae expedita eius consequatur sint ipsa officiis est harum. Voluptas quaerat velit nostrum quas. Consequuntur veniam consequuntur deserunt qui et. Ipsa qui suscipit ipsum laborum accusantium neque.', 'https://via.placeholder.com/640x480.png/00eebb?text=nemo', '2023-01-28', '2023-01-28', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(3, 'Omnis sapiente sit eveniet nihil asperiores ut qui.', 'Harum qui sint officia dignissimos. Distinctio eaque sit veniam consequatur. Quaerat quae adipisci repellendus nam ipsa dolorem. Voluptates et aliquid quam. Cum necessitatibus itaque molestiae ratione.', 'https://via.placeholder.com/640x480.png/0000ff?text=sed', '2023-03-17', '2023-03-17', 0, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(4, 'Quidem dolores quos temporibus eius.', 'Aliquid nihil voluptatem quo omnis alias quibusdam repellendus. Pariatur sed unde tenetur est. Fugit eum sint unde occaecati odio ad. Animi eaque quia at ut.', 'https://via.placeholder.com/640x480.png/004411?text=quo', '2023-04-04', '2023-04-04', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(5, 'Ipsam sunt incidunt culpa quisquam.', 'Sit nobis sed odit qui porro cumque aut. Optio hic natus nam assumenda et odio. Culpa corporis sit recusandae. Sed laboriosam optio dignissimos exercitationem quidem aut in odit.', 'https://via.placeholder.com/640x480.png/0088ff?text=explicabo', '2023-01-20', '2023-01-20', 0, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(6, 'Occaecati qui sunt magni eum tempora dolor itaque officia.', 'Quaerat voluptas quia voluptatem aut saepe sunt. Esse reiciendis qui iusto. Error sint quibusdam enim repudiandae cumque sunt. Repellendus facere voluptatem aut consequatur et aut consectetur.', 'https://via.placeholder.com/640x480.png/00eeff?text=aut', '2023-04-22', '2023-04-22', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(7, 'Aut doloribus et consectetur et omnis repellendus.', 'Et saepe ipsum possimus sequi et. Enim enim aut illo. A laudantium veritatis consectetur ex accusamus numquam.', 'https://via.placeholder.com/640x480.png/003366?text=sed', '2023-03-26', '2023-03-26', 0, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(8, 'Corrupti accusantium quisquam reprehenderit minus.', 'Accusantium nesciunt omnis est dolorem est similique qui nesciunt. Molestiae inventore modi aut fuga maiores. Dolores omnis nihil animi corrupti. Vero quibusdam aut fugiat vero ea qui. Voluptates saepe quaerat molestias atque in officia.', 'https://via.placeholder.com/640x480.png/0077aa?text=voluptates', '2023-03-09', '2023-03-09', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(9, 'Atque et debitis voluptatibus praesentium consequatur et.', 'Minima quaerat in eveniet id ut veniam sunt laudantium. Aut voluptate ut id repellat sunt. Molestiae eos voluptatem dolor beatae dolorum architecto nihil.', 'https://via.placeholder.com/640x480.png/00bb77?text=perferendis', '2023-02-11', '2023-02-11', 0, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(10, 'Inventore voluptatem et et ipsam fugit cum velit.', 'Dolores libero quisquam et sit molestias. Mollitia vel voluptas tempore. Distinctio aut sed laudantium.', 'https://via.placeholder.com/640x480.png/00cc66?text=repudiandae', '2023-02-27', '2023-02-27', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `parent_records`
--

CREATE TABLE `parent_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_records`
--

INSERT INTO `parent_records` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 11, '2023-02-14 11:19:15', '2023-02-14 11:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `parent_record_user`
--

CREATE TABLE `parent_record_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_record_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `guard_name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'header-administrate', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(2, 'header-schools', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(3, 'header-academics', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(4, 'menu-class', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(5, 'menu-section', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(6, 'menu-student', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(7, 'menu-teacher', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(8, 'menu-parent', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(9, 'menu-academic-year', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(10, 'menu-semester', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(11, 'menu-subject', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(12, 'menu-syllabus', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(13, 'menu-timetable', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(14, 'menu-exam', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(15, 'menu-grade-system', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(16, 'menu-notice', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(17, 'menu-account-application', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(18, 'menu-attendance', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(19, 'menu-documents', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(20, 'menu-fees', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(21, 'menu-transport', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(22, 'menu-finance', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(23, 'menu-staff', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(24, 'menu-class-work', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(25, 'menu-home-work', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(26, 'menu-salary', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(27, 'menu-library', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(28, 'menu-software-plan', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(29, 'menu-payment-plan', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(30, 'menu-leave', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(31, 'menu-subjects', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(32, 'create staff-admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(33, 'read staff-admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(34, 'update staff-admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(35, 'delete staff-admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(36, 'create staff-manager', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(37, 'read staff-manager', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(38, 'update staff-manager', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(39, 'delete staff-manager', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(40, 'create staff-principle', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(41, 'read staff-principle', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(42, 'update staff-principle', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(43, 'delete staff-principle', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(44, 'create staff-incharge', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(45, 'read staff-incharge', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(46, 'update staff-incharge', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(47, 'delete staff-incharge', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(48, 'create staff-class-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(49, 'read staff-class-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(50, 'update staff-class-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(51, 'delete staff-class-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(52, 'create staff-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(53, 'read staff-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(54, 'update staff-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(55, 'delete staff-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(56, 'create staff-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(57, 'read staff-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(58, 'update staff-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(59, 'delete staff-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(60, 'create staff-own-manager', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(61, 'read staff-own-manager', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(62, 'update staff-own-manager', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(63, 'delete staff-own-manager', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(64, 'create staff-own-admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(65, 'read staff-own-admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(66, 'update staff-own-admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(67, 'delete staff-own-admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(68, 'create staff-own-principle', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(69, 'read staff-own-principle', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(70, 'update staff-own-principle', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(71, 'delete staff-own-principle', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(72, 'create staff-own-incharge', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(73, 'read staff-own-incharge', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(74, 'update staff-own-incharge', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(75, 'delete staff-own-incharge', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(76, 'create staff-own-class-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(77, 'read staff-own-class-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(78, 'update staff-own-class-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(79, 'delete staff-own-class-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(80, 'create staff-own-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(81, 'read staff-own-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(82, 'update staff-own-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(83, 'delete staff-own-teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(84, 'create staff-own-student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(85, 'read staff-own-student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(86, 'update staff-own-student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(87, 'delete staff-own-student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(88, 'create leave', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(89, 'read leave', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(90, 'update leave', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(91, 'delete leave', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(92, 'create subjects', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(93, 'read subjects', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(94, 'update subjects', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(95, 'delete subjects', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(96, 'create school', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(97, 'read school', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(98, 'update school', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(99, 'delete school', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(100, 'create library', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(101, 'read library', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(102, 'update library', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(103, 'delete library', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(104, 'manage school settings', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(105, 'create class group', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(106, 'read class group', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(107, 'update class group', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(108, 'delete class group', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(109, 'create class', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(110, 'read class', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(111, 'update class', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(112, 'delete class', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(113, 'create section', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(114, 'read section', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(115, 'update section', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(116, 'delete section', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(117, 'create student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(118, 'read student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(119, 'update student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(120, 'delete student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(121, 'withdraw student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(122, 'create academic year', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(123, 'read academic year', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(124, 'update academic year', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(125, 'delete academic year', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(126, 'set academic year', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(127, 'create teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(128, 'read teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(129, 'update teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(130, 'delete teacher', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(131, 'read role asignment', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(132, 'create parent', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(133, 'read parent', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(134, 'update parent', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(135, 'delete parent', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(136, 'create subject', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(137, 'read subject', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(138, 'update subject', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(139, 'delete subject', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(140, 'promote student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(141, 'read promotion', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(142, 'reset promotion', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(143, 'graduate student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(144, 'read graduations', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(145, 'reset graduation', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(146, 'create semester', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(147, 'read semester', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(148, 'update semester', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(149, 'delete semester', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(150, 'set semester', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(151, 'create syllabus', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(152, 'read syllabus', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(153, 'update syllabus', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(154, 'delete syllabus', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(155, 'create timetable', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(156, 'read timetable', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(157, 'update timetable', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(158, 'delete timetable', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(159, 'create custom timetable item', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(160, 'read custom timetable item', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(161, 'update custom timetable item', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(162, 'delete custom timetable item', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(163, 'create exam', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(164, 'read exam', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(165, 'update exam', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(166, 'delete exam', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(167, 'exam type', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(168, 'exam schea', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(169, 'exam admit card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(170, 'exam desk slip', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(171, 'exam result sheet', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(172, 'exam marksheet', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(173, 'exam tc form', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(174, 'exam tc', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(175, 'exam character certificate', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(176, 'create grade system', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(177, 'read grade system', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(178, 'update grade system', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(179, 'delete grade system', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(180, 'create exam slot', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(181, 'read exam slot', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(182, 'update exam slot', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(183, 'delete exam slot', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(184, 'create exam record', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(185, 'read exam record', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(186, 'update exam record', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(187, 'delete exam record', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(188, 'check result', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(189, 'create notice', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(190, 'read notice', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(191, 'update notice', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(192, 'delete notice', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(193, 'read applicant', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(194, 'update applicant', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(195, 'delete applicant', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(196, 'change account application status', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(197, 'read admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(198, 'create admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(199, 'edit admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(200, 'delete admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(201, 'permission admin', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(202, 'read attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(203, 'create attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(204, 'edit attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(205, 'delete attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(206, 'read attendance-schedules', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(207, 'create attendance-schedules', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(208, 'edit attendance-schedules', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(209, 'delete attendance-schedules', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(210, 'read attendance register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(211, 'create attendance register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(212, 'edit attendance register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(213, 'delete attendance register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(214, 'read staff attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(215, 'create staff attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(216, 'edit staff attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(217, 'delete staff attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(218, 'read student attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(219, 'create student attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(220, 'edit student attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(221, 'delete student attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(222, 'read documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(223, 'create documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(224, 'edit documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(225, 'delete documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(226, 'read document-collage-logo', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(227, 'create document-collage-logo', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(228, 'edit document-collage-logo', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(229, 'delete document-collage-logo', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(230, 'read document-sign', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(231, 'create document-sign', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(232, 'edit document-sign', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(233, 'delete document-sign', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(234, 'read document-id-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(235, 'create document-id-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(236, 'edit document-id-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(237, 'delete document-id-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(238, 'read document-fees-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(239, 'create document-fees-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(240, 'edit document-fees-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(241, 'delete document-fees-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(242, 'read document-scheam', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(243, 'create document-scheam', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(244, 'edit document-scheam', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(245, 'delete document-scheam', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(246, 'read document-admit-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(247, 'create document-admit-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(248, 'edit document-admit-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(249, 'delete document-admit-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(250, 'read document-number-sheet', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(251, 'create document-number-sheet', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(252, 'edit document-number-sheet', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(253, 'delete document-number-sheet', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(254, 'read document-mark-sheet', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(255, 'create document-mark-sheet', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(256, 'edit document-mark-sheet', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(257, 'delete document-mark-sheet', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(258, 'read exam-exam-type', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(259, 'create exam-exam-type', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(260, 'edit exam-exam-type', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(261, 'delete exam-exam-type', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(262, 'read collage-documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(263, 'create collage-documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(264, 'edit collage-documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(265, 'delete collage-documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(266, 'read print-documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(267, 'create print-documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(268, 'edit print-documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(269, 'delete print-documents', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(270, 'read fees', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(271, 'create fees', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(272, 'edit fees', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(273, 'delete fees', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(274, 'read class-work', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(275, 'create class-work', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(276, 'edit class-work', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(277, 'delete class-work', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(278, 'read home-work', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(279, 'create home-work', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(280, 'edit home-work', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(281, 'delete home-work', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(282, 'read salary', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(283, 'create salary', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(284, 'edit salary', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(285, 'delete salary', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(286, 'read self-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(287, 'edit self-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(288, 'create self-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(289, 'delete self-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(290, 'read staff-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(291, 'edit staff-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(292, 'create staff-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(293, 'delete staff-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(294, 'read staff-attendance-register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(295, 'edit staff-attendance-register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(296, 'create staff-attendance-register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(297, 'delete staff-attendance-register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(298, 'read student-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(299, 'edit student-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(300, 'create student-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(301, 'delete student-attendance', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(302, 'read student-attendance-register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(303, 'edit student-attendance-register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(304, 'create student-attendance-register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(305, 'delete student-attendance-register', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(306, 'read fees-status', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(307, 'edit fees-status', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(308, 'create fees-status', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(309, 'delete fees-status', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(310, 'read fees-slips', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(311, 'edit fees-slips', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(312, 'create fees-slips', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(313, 'delete fees-slips', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(314, 'read fees-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(315, 'edit fees-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(316, 'create fees-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(317, 'delete fees-card', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(318, 'read fees-consession', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(319, 'edit fees-consession', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(320, 'create fees-consession', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(321, 'delete fees-consession', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(322, 'read fees-collection', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(323, 'edit fees-collection', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(324, 'create fees-collection', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(325, 'delete fees-collection', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(326, 'read transport', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(327, 'edit transport', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(328, 'create transport', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(329, 'delete transport', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(330, 'read transport-fees', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(331, 'edit transport-fees', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(332, 'create transport-fees', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(333, 'delete transport-fees', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(334, 'read transport-assign-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(335, 'edit transport-assign-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(336, 'create transport-assign-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(337, 'delete transport-assign-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(338, 'read transport-student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(339, 'edit transport-student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(340, 'create transport-student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(341, 'delete transport-student', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(342, 'read transport-vehicle-number', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(343, 'edit transport-vehicle-number', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(344, 'create transport-vehicle-number', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(345, 'delete transport-vehicle-number', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(346, 'read transport-root-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(347, 'edit transport-root-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(348, 'create transport-root-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(349, 'delete transport-root-driver', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(350, 'read finance-incoming', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(351, 'edit finance-incoming', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(352, 'create finance-incoming', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(353, 'delete finance-incoming', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(354, 'read finance-expences', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(355, 'edit finance-expences', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(356, 'create finance-expences', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(357, 'delete finance-expences', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(358, 'read salary-distribute', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(359, 'edit salary-distribute', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(360, 'create salary-distribute', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(361, 'delete salary-distribute', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(362, 'read document', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(363, 'edit document', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(364, 'create document', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(365, 'delete document', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(366, 'create all-profile', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(367, 'read-self-profile', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(368, 'edit-self-profile', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(369, 'create-self-profile', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11'),
(370, 'delete-self-profile', 'web', '2023-02-14 11:19:11', '2023-02-14 11:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(100) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `old_class_id` bigint(20) UNSIGNED NOT NULL,
  `new_class_id` bigint(20) UNSIGNED NOT NULL,
  `old_section_id` bigint(20) UNSIGNED NOT NULL,
  `new_section_id` bigint(20) UNSIGNED NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED NOT NULL,
  `students` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`students`)),
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `old_class_id`, `new_class_id`, `old_section_id`, `new_section_id`, `academic_year_id`, `students`, `school_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 2, 1, '[4]', 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(2, 1, 2, 1, 2, 1, '[4]', 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(3, 1, 2, 1, 2, 1, '[4]', 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(4, 1, 2, 1, 2, 1, '[4]', 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `guard_name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super-admin', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(2, 'local-super-admin', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(3, 'sub-super-admin', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(4, 'manager', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(5, 'principle', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(6, 'incharge', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(7, 'admin', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(8, 'classteacher', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(9, 'teacher', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(10, 'student', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(11, 'parent', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(12, 'accountant', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(13, 'librarian', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(14, 'applicant', 'web', '2023-02-14 11:19:10', '2023-02-14 11:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 7),
(3, 7),
(3, 11),
(4, 1),
(4, 4),
(4, 5),
(4, 7),
(5, 7),
(6, 1),
(6, 4),
(6, 5),
(6, 7),
(6, 8),
(6, 9),
(7, 1),
(7, 4),
(7, 7),
(8, 7),
(9, 7),
(10, 7),
(11, 7),
(12, 7),
(12, 11),
(13, 1),
(13, 4),
(13, 5),
(13, 7),
(13, 8),
(13, 9),
(13, 10),
(13, 11),
(14, 5),
(14, 7),
(14, 8),
(14, 9),
(14, 10),
(14, 11),
(15, 7),
(16, 7),
(16, 11),
(17, 7),
(18, 1),
(18, 4),
(18, 5),
(18, 8),
(19, 1),
(19, 4),
(19, 5),
(20, 1),
(20, 4),
(20, 5),
(20, 8),
(20, 9),
(20, 10),
(21, 1),
(21, 4),
(21, 5),
(21, 8),
(21, 9),
(21, 10),
(22, 1),
(22, 4),
(22, 5),
(23, 1),
(23, 4),
(23, 5),
(23, 8),
(23, 9),
(23, 10),
(24, 1),
(24, 4),
(24, 5),
(24, 8),
(24, 9),
(24, 10),
(25, 1),
(25, 4),
(25, 5),
(25, 8),
(25, 9),
(25, 10),
(26, 1),
(26, 4),
(26, 5),
(27, 1),
(27, 4),
(27, 5),
(28, 1),
(28, 4),
(28, 5),
(29, 1),
(29, 4),
(29, 5),
(30, 10),
(31, 1),
(31, 4),
(31, 5),
(31, 7),
(32, 1),
(32, 4),
(33, 1),
(33, 4),
(34, 1),
(34, 4),
(35, 1),
(35, 4),
(36, 1),
(36, 4),
(37, 1),
(37, 4),
(38, 1),
(38, 4),
(39, 1),
(39, 4),
(40, 1),
(40, 4),
(41, 1),
(41, 4),
(42, 1),
(42, 4),
(43, 1),
(43, 4),
(44, 1),
(44, 4),
(45, 1),
(45, 4),
(45, 5),
(46, 1),
(46, 4),
(47, 1),
(47, 4),
(48, 1),
(48, 4),
(49, 1),
(49, 4),
(49, 5),
(50, 1),
(50, 4),
(51, 1),
(51, 4),
(52, 1),
(52, 4),
(53, 1),
(53, 4),
(53, 5),
(53, 8),
(54, 1),
(54, 4),
(55, 1),
(55, 4),
(57, 5),
(57, 8),
(57, 9),
(57, 10),
(68, 8),
(69, 8),
(69, 9),
(69, 10),
(70, 8),
(71, 8),
(77, 9),
(77, 10),
(81, 9),
(81, 10),
(88, 10),
(89, 10),
(92, 1),
(92, 4),
(92, 5),
(92, 7),
(93, 1),
(93, 4),
(93, 5),
(93, 7),
(94, 1),
(94, 4),
(94, 5),
(94, 7),
(95, 1),
(95, 4),
(95, 5),
(95, 7),
(100, 1),
(100, 4),
(101, 1),
(101, 4),
(101, 5),
(102, 1),
(102, 4),
(103, 1),
(103, 4),
(104, 7),
(105, 7),
(106, 7),
(107, 7),
(108, 7),
(109, 7),
(110, 1),
(110, 4),
(110, 5),
(110, 7),
(111, 7),
(112, 7),
(113, 1),
(113, 4),
(113, 7),
(114, 7),
(115, 7),
(116, 7),
(117, 7),
(118, 1),
(118, 4),
(118, 5),
(118, 7),
(118, 8),
(118, 9),
(119, 5),
(119, 7),
(120, 7),
(122, 7),
(123, 7),
(124, 7),
(125, 7),
(126, 7),
(127, 7),
(128, 1),
(128, 4),
(128, 7),
(129, 7),
(130, 7),
(132, 7),
(133, 7),
(134, 7),
(135, 7),
(136, 7),
(137, 7),
(138, 7),
(139, 7),
(140, 7),
(141, 7),
(142, 7),
(143, 7),
(144, 7),
(145, 7),
(146, 7),
(147, 7),
(148, 7),
(149, 7),
(150, 7),
(151, 7),
(152, 7),
(152, 11),
(153, 7),
(154, 7),
(155, 7),
(156, 1),
(156, 4),
(156, 5),
(156, 7),
(156, 8),
(156, 9),
(156, 10),
(156, 11),
(157, 7),
(158, 7),
(159, 7),
(160, 7),
(161, 7),
(162, 7),
(163, 7),
(164, 7),
(165, 7),
(166, 7),
(176, 7),
(177, 7),
(178, 7),
(179, 7),
(180, 7),
(181, 7),
(182, 7),
(183, 7),
(184, 7),
(185, 7),
(186, 7),
(187, 7),
(188, 7),
(188, 11),
(189, 7),
(190, 7),
(190, 11),
(191, 7),
(192, 7),
(193, 7),
(194, 7),
(195, 7),
(196, 7),
(206, 5),
(226, 1),
(226, 4),
(226, 5),
(230, 1),
(230, 4),
(230, 5),
(234, 1),
(234, 4),
(234, 5),
(238, 1),
(238, 4),
(238, 5),
(242, 1),
(242, 4),
(242, 5),
(246, 1),
(246, 4),
(246, 5),
(250, 1),
(250, 4),
(250, 5),
(254, 1),
(254, 4),
(254, 5),
(258, 1),
(258, 4),
(258, 5),
(258, 8),
(258, 9),
(270, 1),
(270, 4),
(270, 5),
(270, 8),
(270, 9),
(270, 10),
(271, 1),
(271, 4),
(271, 9),
(271, 10),
(274, 1),
(274, 4),
(274, 5),
(274, 8),
(274, 9),
(274, 10),
(275, 1),
(275, 4),
(275, 8),
(275, 9),
(275, 10),
(278, 1),
(278, 4),
(278, 5),
(278, 8),
(278, 9),
(278, 10),
(279, 1),
(279, 4),
(279, 8),
(279, 9),
(279, 10),
(282, 1),
(282, 4),
(282, 5),
(286, 1),
(286, 4),
(286, 5),
(286, 8),
(286, 9),
(286, 10),
(287, 8),
(288, 8),
(289, 8),
(290, 1),
(290, 4),
(290, 5),
(294, 1),
(294, 4),
(294, 5),
(298, 1),
(298, 4),
(298, 5),
(298, 8),
(302, 1),
(302, 4),
(302, 5),
(306, 5),
(306, 8),
(306, 9),
(306, 10),
(308, 9),
(308, 10),
(310, 10),
(314, 10),
(318, 1),
(318, 4),
(318, 5),
(322, 5),
(322, 8),
(326, 1),
(326, 4),
(326, 5),
(326, 8),
(326, 9),
(326, 10),
(328, 1),
(328, 4),
(328, 8),
(328, 9),
(328, 10),
(330, 1),
(330, 4),
(330, 5),
(330, 8),
(330, 9),
(330, 10),
(332, 1),
(332, 4),
(332, 8),
(332, 9),
(332, 10),
(334, 5),
(336, 1),
(336, 4),
(338, 1),
(338, 4),
(338, 5),
(338, 8),
(342, 10),
(346, 8),
(346, 9),
(346, 10),
(348, 8),
(348, 9),
(350, 1),
(350, 4),
(350, 5),
(354, 1),
(354, 4),
(354, 5),
(358, 1),
(358, 4),
(358, 5),
(366, 1),
(366, 4),
(366, 5),
(367, 8),
(367, 9),
(367, 10);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(100) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `slug`, `school_id`, `time_in`, `time_out`, `created_at`, `updated_at`) VALUES
(1, 'Morning Session', '1', '09:00:00', '18:00:00', '2023-02-14 11:19:16', '2023-02-14 11:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_users`
--

CREATE TABLE `schedule_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `schedule_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule_users`
--

INSERT INTO `schedule_users` (`user_id`, `schedule_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(2, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(3, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(4, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(5, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(6, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(7, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(8, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(9, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(10, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(11, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(12, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(13, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `initials` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `code` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `academic_year_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `initials`, `address`, `email`, `phone`, `code`, `created_at`, `updated_at`, `academic_year_id`, `semester_id`) VALUES
(1, 'Govt Sen Sec School (Boys)', 'DSI', 'School of Computing', NULL, '5433567897', 'BT7U38gIAu', '2023-02-14 11:19:13', '2023-02-14 11:19:15', 1, 1),
(2, 'Jeanette Jakubowski', 'voluptas', '8310 Margarete Crest\nAdelamouth, KS 38427-3514', NULL, NULL, '72177', '2023-02-14 11:19:13', '2023-02-14 11:19:13', NULL, NULL),
(3, 'Granville Blick IV', 'fugiat', '185 Terrell Islands\nJohnniehaven, MI 14519-0778', NULL, NULL, '50296', '2023-02-14 11:19:13', '2023-02-14 11:19:13', NULL, NULL),
(4, 'Jadon Lehner', 'blanditiis', '5499 O\'Reilly Crest Suite 452\nBransonmouth, NE 53212', NULL, NULL, '42013', '2023-02-14 11:19:13', '2023-02-14 11:19:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `my_class_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `my_class_id`, `created_at`, `updated_at`) VALUES
(1, 'Gold', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13'),
(2, 'Ruby', 1, '2023-02-14 11:19:13', '2023-02-14 11:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `academic_year_id` bigint(20) UNSIGNED DEFAULT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `check_result` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `name`, `academic_year_id`, `school_id`, `check_result`, `created_at`, `updated_at`) VALUES
(1, 'Semester 1', 1, 1, 0, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(5133, 'nemo', 1, 1, 0, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(9017, 'dolorem', 1, 1, 0, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(9544, 'aut', 1, 1, 0, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(9642, 'distinctio', 1, 1, 0, '2023-02-14 11:19:15', '2023-02-14 11:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('sQHr3PE1AXN0DeFtU0L6qSISOUw1MWc97G7fyjub', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoia014M01rQ0xDNkhlNmRjbVNsQ1N0U3BzYXBYZ1o1YlpoOEhwcTVKbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGhPZG5aUDBwcXFxVWxiQ2JKVnRzRHV4Q2s0SmFnOHVKMUdlYlZmaHBwU2E0WDguWTFwNTg2Ijt9', 1676395998);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `reason` text DEFAULT NULL,
  `model_type` varchar(100) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_records`
--

CREATE TABLE `student_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sr_no` varchar(100) DEFAULT NULL,
  `roll_no` varchar(100) DEFAULT NULL,
  `admission_number` varchar(100) DEFAULT NULL,
  `admission_date` date NOT NULL,
  `my_class_id` bigint(20) UNSIGNED DEFAULT NULL,
  `section_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_graduated` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_records`
--

INSERT INTO `student_records` (`id`, `user_id`, `sr_no`, `roll_no`, `admission_number`, `admission_date`, `my_class_id`, `section_id`, `is_graduated`, `created_at`, `updated_at`) VALUES
(1, 10, 'cdihtYnfVC', 'qjtG5yf02q', '5QEl4k47Wm', '2022-04-04', 1, 1, 0, '2023-02-14 11:19:14', '2023-02-14 11:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `short_name` varchar(100) NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `my_class_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `short_name`, `school_id`, `my_class_id`, `created_at`, `updated_at`) VALUES
(1, 'Maths', 'mat', 1, 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(2, 'English', 'eng', 1, 2, '2023-02-14 11:19:15', '2023-02-14 11:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `subject_user`
--

CREATE TABLE `subject_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `syllabi`
--

CREATE TABLE `syllabi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` longtext DEFAULT NULL,
  `file` varchar(100) NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `syllabi`
--

INSERT INTO `syllabi` (`id`, `name`, `description`, `file`, `subject_id`, `semester_id`, `created_at`, `updated_at`) VALUES
(1, 'Id consectetur optio sed sint maxime.', 'Dolorum quam natus dolor aperiam earum quaerat aut. Rem sunt praesentium quia qui soluta blanditiis incidunt.', 'pdfs/OqH4I7uY4x40luLb0dhybAQRQRdoBf3VGN2s6l9x.pdf', 1, 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(2, 'Dolorum recusandae quo enim mollitia.', 'Error voluptatum omnis sint blanditiis sapiente vero consequatur qui. Commodi in totam neque assumenda minus sed voluptas. Ea esse sit laboriosam aliquid sed dolorum. Dolor non quia placeat unde.', 'pdfs/UOuOuAmi3M8MmgyobyQEDqfefMQK3pdaC16ukavY.pdf', 1, 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(3, 'Et ab corporis qui corrupti velit illum vel.', 'Quis officia cumque pariatur sit doloremque. Unde eaque eveniet aut iste quia. Vel quia placeat a a illum laboriosam. Eius ducimus aut repellendus vero.', 'pdfs/5IhaP5NnKjatiaw3bZAIKE1hQmlsDVoSOUG1Zxu4.pdf', 1, 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(4, 'Alias quia odit velit odio ut.', 'Fugiat ut id laudantium animi quo. Alias et sit voluptas at in. Cumque corporis voluptatibus impedit omnis.', 'pdfs/hL2CedlATdvNVebBhEKR3gEoA6tkZQcE2h6U0L7b.pdf', 1, 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(5, 'Nisi ut ducimus culpa ut et voluptas rerum facilis.', 'Ipsam quis dignissimos est occaecati dicta. Possimus incidunt placeat eum consectetur adipisci fugiat. Voluptas vero maiores cupiditate ut.', 'pdfs/4fTPmVTONrjgoi20eCyzivhKEmHE7KcOQwwpGeUO.pdf', 1, 1, '2023-02-14 11:19:15', '2023-02-14 11:19:15'),
(6, 'Asperiores numquam ducimus dicta enim.', 'Ratione labore nobis corporis veritatis. Et corrupti molestias libero sunt cum voluptas. Porro et enim vel ut alias. Dolor cupiditate veniam molestiae repellat dolores ipsa voluptas possimus.', 'pdfs/eD9NM3nF6CDipEOfePMFJCTBWiMqVr8fxCJAQVOl.pdf', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(7, 'Numquam architecto error eaque aut ullam eos.', 'Minus ab voluptate et. Officia dicta ea et. Voluptate et ut dolorem aperiam omnis molestiae dolorum.', 'pdfs/0OZr2faQ8fptHgL7Pn4lm7t26Jf4TwPWJeoLjlyk.pdf', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(8, 'Recusandae nostrum aut tempore vero pariatur quasi in aliquam.', 'Ipsa sequi molestias repellendus vel. Aliquid a facilis voluptatem enim non praesentium id. Et tempore sequi delectus.', 'pdfs/av8n9eTR5atUSkLq2E6pff1p6OsRk9iqq776RwQX.pdf', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(9, 'Enim et quam dignissimos sapiente.', 'Veritatis dolores qui laudantium autem sit harum fuga. Eius ea libero corporis facere qui qui molestiae dicta. In optio harum debitis in ea aut ut.', 'pdfs/4a9wu23LfpIWSzy26pA4c40G3DYc6EaVVZ5Omc3a.pdf', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(10, 'Fugit nam unde et rerum quis et pariatur.', 'Consequatur sit provident ab voluptates est in doloremque placeat. Autem iusto distinctio sapiente at pariatur animi. Sed sequi est ad sapiente quis debitis rem eos.', 'pdfs/ctcOFehjyvtH9sGFdNDvm7WxR9YZXkkUVaBpR2X7.pdf', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_records`
--

CREATE TABLE `teacher_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'teacher',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_records`
--

INSERT INTO `teacher_records` (`id`, `user_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 8, 'class_teacher', '2023-02-14 11:19:14', '2023-02-14 11:19:14'),
(2, 9, 'teacher', '2023-02-14 11:19:14', '2023-02-14 11:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `timetables`
--

CREATE TABLE `timetables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` longtext DEFAULT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `my_class_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timetables`
--

INSERT INTO `timetables` (`id`, `name`, `description`, `semester_id`, `my_class_id`, `created_at`, `updated_at`) VALUES
(1, 'Timetable 1', 'Timetable 1 description', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16'),
(3267, 'Joannie Marvin Sr.', 'Magnam optio temporibus facilis. Minima sapiente quas adipisci alias labore molestiae. Nemo doloribus ex illum unde quae molestiae. Vel fugiat expedita voluptas harum et quia quam et.', 1, 1, '2023-02-14 11:19:16', '2023-02-14 11:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `timetable_time_slots`
--

CREATE TABLE `timetable_time_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `timetable_id` bigint(20) UNSIGNED NOT NULL,
  `start_time` time NOT NULL,
  `stop_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timetable_time_slot_weekday`
--

CREATE TABLE `timetable_time_slot_weekday` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `timetable_time_slot_id` bigint(20) UNSIGNED NOT NULL,
  `weekday_id` bigint(20) UNSIGNED NOT NULL,
  `timetable_time_slot_weekdayable_id` bigint(20) UNSIGNED NOT NULL,
  `timetable_time_slot_weekdayable_type` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timezones`
--

CREATE TABLE `timezones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `role_type` varchar(100) NOT NULL DEFAULT 'student',
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `aadhaar_number` varchar(100) NOT NULL,
  `caste` varchar(100) NOT NULL COMMENT 'GENERAL,OBC,SC/ST',
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `f_occupation` varchar(100) NOT NULL COMMENT 'FARMER,BUISNESSMAN,GOVERNMENT SERVANT,LABOUR',
  `m_occupation` varchar(100) NOT NULL COMMENT 'FARMER,BUISNESSMAN,GOVERNMENT SERVANT,LABOUR,HOUSE WOMAN',
  `previous_school` varchar(100) NOT NULL,
  `sub_caste` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL COMMENT 'PENDING',
  `tehsil` varchar(100) NOT NULL DEFAULT 'Local',
  `locality` varchar(100) NOT NULL DEFAULT 'Local',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `school_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `blood_group` varchar(100) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `role_type`, `remember_token`, `current_team_id`, `profile_photo_path`, `aadhaar_number`, `caste`, `fname`, `mname`, `f_occupation`, `m_occupation`, `previous_school`, `sub_caste`, `status`, `tehsil`, `locality`, `created_at`, `updated_at`, `school_id`, `gender`, `birthday`, `nationality`, `state`, `city`, `religion`, `blood_group`, `phone`, `address`) VALUES
(1, 'super admin', 'super@admin.com', '2023-02-14 11:19:13', '$2y$10$hOdnZP0pqqqUlbCbJVtsDuxCk4Jag8uJ1GebVfhppSa4X8.Y1p586', NULL, NULL, 'super-admin', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:13', '2023-02-14 11:19:13', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'super admin street'),
(2, 'local super admin', 'localsuper@admin.com', '2023-02-14 11:19:13', '$2y$10$dySQvBuEA/ROQwMyLU5XDOWaMcuo89sGXKxQx6gqEkqZBFNPhDGUm', NULL, NULL, 'local-super-admin', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:13', '2023-02-14 11:19:13', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'super admin street'),
(3, 'sub super admin', 'subsuper@admin.com', '2023-02-14 11:19:13', '$2y$10$1KX0yLtv3cd8XKkQXEiZhuORF1/G4sfsML/AG9WDoLzaKnXZLfPCu', NULL, NULL, 'sub-super-admin', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:13', '2023-02-14 11:19:13', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'Sub super admin street'),
(4, 'admin principal', 'admin@admin.com', '2023-02-14 11:19:14', '$2y$10$KAVdudzsvKUSgVsUD7bpbeC/454/ToNLv5VmJMkl8IL7ppHWtYsGm', NULL, NULL, 'admin', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:14', '2023-02-14 11:19:14', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'admin street'),
(5, 'manager', 'manager@admin.com', '2023-02-14 11:19:14', '$2y$10$DS0vqx7qNhtzz.xtJ1/I.OKCv5W8c4TL6fLcH97Mpo02tfPed52oK', NULL, NULL, 'manager', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:14', '2023-02-14 11:19:14', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'Sub super admin street'),
(6, 'principle principal', 'principle@principle.com', '2023-02-14 11:19:14', '$2y$10$n.Aa0.GgES7nbBwk0hKLYuIndCrNERjJMMRF.oDnwQd2oXppJoHeW', NULL, NULL, 'principle', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:14', '2023-02-14 11:19:14', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'principle street'),
(7, 'office incharge', 'office@incharge.com', '2023-02-14 11:19:14', '$2y$10$uhrfkB6WFT2aRcIVn3nBvO3Pz/vZg3d87rQrATT.uIfdpwk5.TH4i', NULL, NULL, 'incharge', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:14', '2023-02-14 11:19:14', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'principle street'),
(8, 'class teacher', 'class_teacher@teacher.com', '2023-02-14 11:19:14', '$2y$10$TtqVlaRIqZ/bSHm6zua13OUvh8eRfNzbFi5KIV4MEfv/s1CDsEVFO', NULL, NULL, 'classteacher', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:14', '2023-02-14 11:19:14', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'teacher street'),
(9, 'school teacher', 'teacher@teacher.com', '2023-02-14 11:19:14', '$2y$10$x1LdCuY4Fr/9W3eGDbRJvOUS6AuW.xaUCtkl10UlSWUaENr2Vc0Mu', NULL, NULL, 'teacher', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:14', '2023-02-14 11:19:14', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'teacher street'),
(10, 'class student', 'student@student.com', '2023-02-14 11:19:14', '$2y$10$5YM1FsWmgq5zfTecjBkPfORK9elbQTY179rhJ01pAXJKK8S1Zi5Ji', NULL, NULL, 'student', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:14', '2023-02-14 11:19:14', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'student street'),
(11, 'student parent', 'parent@parent.com', '2023-02-14 11:19:15', '$2y$10$FJ27UVNZ4jPwknie3fkOU.trfCNTvik8.XNUwpInSyQI.esFjACs6', NULL, NULL, 'parent', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:15', '2023-02-14 11:19:15', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'parent street'),
(12, 'collage accountant', 'accountant@accountant.com', '2023-02-14 11:19:15', '$2y$10$i0i.kbOam4lLxmShDY6AH.6xMX.sFJXN.wpmk5DaTIKCdH9zKD..q', NULL, NULL, 'accountant', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:15', '2023-02-14 11:19:15', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'accountant street'),
(13, 'collage libratian', 'libratian@librarian.com', '2023-02-14 11:19:15', '$2y$10$gSQOFAIyZUkkQgAB9OvwbuzAAVfRKdtra9noI2WCjigJf0BI6YY6K', NULL, NULL, 'librarian', NULL, NULL, NULL, '567654432', 'GENERAL', 'Test Father', 'Test Mother', 'FARMER', 'FARMER', 'Test School', 'General', 'ACTIVE', 'Local', 'Local', '2023-02-14 11:19:15', '2023-02-14 11:19:15', 1, 'male', '2022-04-04', 'india', 'punjab', 'moga', NULL, 'B+', '7300000000', 'librarian street');

-- --------------------------------------------------------

--
-- Table structure for table `weekdays`
--

CREATE TABLE `weekdays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `weekdays`
--

INSERT INTO `weekdays` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Monday', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(2, 'Tuesday', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(3, 'Wednesday', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(4, 'Thursday', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(5, 'Friday', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(6, 'Saturday', '2023-02-14 11:19:10', '2023-02-14 11:19:10'),
(7, 'Sunday', '2023-02-14 11:19:10', '2023-02-14 11:19:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academic_years_school_id_foreign` (`school_id`);

--
-- Indexes for table `academic_year_student_record`
--
ALTER TABLE `academic_year_student_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_applications`
--
ALTER TABLE `account_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_applications_user_id_foreign` (`user_id`),
  ADD KEY `account_applications_role_id_foreign` (`role_id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_groups`
--
ALTER TABLE `class_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_groups_school_id_name_unique` (`school_id`,`name`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_timetable_items`
--
ALTER TABLE `custom_timetable_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `custom_timetable_items_school_id_name_unique` (`school_id`,`name`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `exam_records`
--
ALTER TABLE `exam_records`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_records_user_id_subject_id_section_id_exam_slot_id_unique` (`user_id`,`subject_id`,`section_id`,`exam_slot_id`);

--
-- Indexes for table `exam_slots`
--
ALTER TABLE `exam_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_slots_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grade_systems`
--
ALTER TABLE `grade_systems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grade_systems_class_group_id_foreign` (`class_group_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `my_classes`
--
ALTER TABLE `my_classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `my_classes_class_group_id_name_unique` (`class_group_id`,`name`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notices_school_id_foreign` (`school_id`);

--
-- Indexes for table `parent_records`
--
ALTER TABLE `parent_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_records_user_id_foreign` (`user_id`);

--
-- Indexes for table `parent_record_user`
--
ALTER TABLE `parent_record_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parent_record_user_parent_record_id_user_id_unique` (`parent_record_id`,`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotions_old_class_id_foreign` (`old_class_id`),
  ADD KEY `promotions_new_class_id_foreign` (`new_class_id`),
  ADD KEY `promotions_old_section_id_foreign` (`old_section_id`),
  ADD KEY `promotions_new_section_id_foreign` (`new_section_id`),
  ADD KEY `promotions_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `promotions_school_id_foreign` (`school_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schools_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `schools_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sections_name_my_class_id_unique` (`name`,`my_class_id`),
  ADD KEY `sections_my_class_id_foreign` (`my_class_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semesters_academic_year_id_foreign` (`academic_year_id`),
  ADD KEY `semesters_school_id_foreign` (`school_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statuses_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `student_records`
--
ALTER TABLE `student_records`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_records_admission_number_unique` (`admission_number`),
  ADD KEY `student_records_user_id_foreign` (`user_id`),
  ADD KEY `student_records_my_class_id_foreign` (`my_class_id`),
  ADD KEY `student_records_section_id_foreign` (`section_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_name_my_class_id_unique` (`name`,`my_class_id`),
  ADD KEY `subjects_school_id_foreign` (`school_id`),
  ADD KEY `subjects_my_class_id_foreign` (`my_class_id`);

--
-- Indexes for table `subject_user`
--
ALTER TABLE `subject_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_user_subject_id_foreign` (`subject_id`),
  ADD KEY `subject_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `syllabi`
--
ALTER TABLE `syllabi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `syllabi_subject_id_foreign` (`subject_id`),
  ADD KEY `syllabi_semester_id_foreign` (`semester_id`);

--
-- Indexes for table `teacher_records`
--
ALTER TABLE `teacher_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_records_user_id_foreign` (`user_id`);

--
-- Indexes for table `timetables`
--
ALTER TABLE `timetables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `timetables_semester_id_foreign` (`semester_id`),
  ADD KEY `timetables_my_class_id_foreign` (`my_class_id`);

--
-- Indexes for table `timetable_time_slots`
--
ALTER TABLE `timetable_time_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `timetable_time_slots_timetable_id_foreign` (`timetable_id`);

--
-- Indexes for table `timetable_time_slot_weekday`
--
ALTER TABLE `timetable_time_slot_weekday`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `time_slot_weekday` (`weekday_id`,`timetable_time_slot_id`),
  ADD KEY `timetable_time_slot_weekday_timetable_time_slot_id_foreign` (`timetable_time_slot_id`),
  ADD KEY `timetable_time_slot_weekday_subject_id_foreign` (`timetable_time_slot_weekdayable_id`);

--
-- Indexes for table `timezones`
--
ALTER TABLE `timezones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_school_id_foreign` (`school_id`);

--
-- Indexes for table `weekdays`
--
ALTER TABLE `weekdays`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `academic_year_student_record`
--
ALTER TABLE `academic_year_student_record`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_applications`
--
ALTER TABLE `account_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_groups`
--
ALTER TABLE `class_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_timetable_items`
--
ALTER TABLE `custom_timetable_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam_records`
--
ALTER TABLE `exam_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_slots`
--
ALTER TABLE `exam_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade_systems`
--
ALTER TABLE `grade_systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `my_classes`
--
ALTER TABLE `my_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parent_records`
--
ALTER TABLE `parent_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parent_record_user`
--
ALTER TABLE `parent_record_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=371;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9643;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_records`
--
ALTER TABLE `student_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject_user`
--
ALTER TABLE `subject_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `syllabi`
--
ALTER TABLE `syllabi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher_records`
--
ALTER TABLE `teacher_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `timetables`
--
ALTER TABLE `timetables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3268;

--
-- AUTO_INCREMENT for table `timetable_time_slots`
--
ALTER TABLE `timetable_time_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetable_time_slot_weekday`
--
ALTER TABLE `timetable_time_slot_weekday`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timezones`
--
ALTER TABLE `timezones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `weekdays`
--
ALTER TABLE `weekdays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD CONSTRAINT `academic_years_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `account_applications`
--
ALTER TABLE `account_applications`
  ADD CONSTRAINT `account_applications_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_applications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class_groups`
--
ALTER TABLE `class_groups`
  ADD CONSTRAINT `class_groups_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `custom_timetable_items`
--
ALTER TABLE `custom_timetable_items`
  ADD CONSTRAINT `custom_timetable_items_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_slots`
--
ALTER TABLE `exam_slots`
  ADD CONSTRAINT `exam_slots_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grade_systems`
--
ALTER TABLE `grade_systems`
  ADD CONSTRAINT `grade_systems_class_group_id_foreign` FOREIGN KEY (`class_group_id`) REFERENCES `class_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `my_classes`
--
ALTER TABLE `my_classes`
  ADD CONSTRAINT `my_classes_class_group_id_foreign` FOREIGN KEY (`class_group_id`) REFERENCES `class_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent_records`
--
ALTER TABLE `parent_records`
  ADD CONSTRAINT `parent_records_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `promotions_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promotions_new_class_id_foreign` FOREIGN KEY (`new_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promotions_new_section_id_foreign` FOREIGN KEY (`new_section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promotions_old_class_id_foreign` FOREIGN KEY (`old_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promotions_old_section_id_foreign` FOREIGN KEY (`old_section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promotions_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `schools_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_my_class_id_foreign` FOREIGN KEY (`my_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semesters`
--
ALTER TABLE `semesters`
  ADD CONSTRAINT `semesters_academic_year_id_foreign` FOREIGN KEY (`academic_year_id`) REFERENCES `academic_years` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `semesters_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_records`
--
ALTER TABLE `student_records`
  ADD CONSTRAINT `student_records_my_class_id_foreign` FOREIGN KEY (`my_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_records_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_records_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_my_class_id_foreign` FOREIGN KEY (`my_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subjects_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject_user`
--
ALTER TABLE `subject_user`
  ADD CONSTRAINT `subject_user_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `syllabi`
--
ALTER TABLE `syllabi`
  ADD CONSTRAINT `syllabi_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `syllabi_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher_records`
--
ALTER TABLE `teacher_records`
  ADD CONSTRAINT `teacher_records_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timetables`
--
ALTER TABLE `timetables`
  ADD CONSTRAINT `timetables_my_class_id_foreign` FOREIGN KEY (`my_class_id`) REFERENCES `my_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `timetables_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timetable_time_slots`
--
ALTER TABLE `timetable_time_slots`
  ADD CONSTRAINT `timetable_time_slots_timetable_id_foreign` FOREIGN KEY (`timetable_id`) REFERENCES `timetables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timetable_time_slot_weekday`
--
ALTER TABLE `timetable_time_slot_weekday`
  ADD CONSTRAINT `timetable_time_slot_weekday_timetable_time_slot_id_foreign` FOREIGN KEY (`timetable_time_slot_id`) REFERENCES `timetable_time_slots` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `timetable_time_slot_weekday_weekday_id_foreign` FOREIGN KEY (`weekday_id`) REFERENCES `weekdays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
