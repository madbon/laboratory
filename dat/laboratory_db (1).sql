-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2018 at 06:30 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_chemistry`
--

CREATE TABLE `blood_chemistry` (
  `blood_chemistry_c` int(11) NOT NULL,
  `patient_c` int(11) NOT NULL,
  `random_blood_sugar` varchar(10) NOT NULL,
  `fasting_blood_sugar` varchar(10) NOT NULL,
  `blood_uric_acid` varchar(10) NOT NULL,
  `blood_urea_nitrogen` varchar(10) NOT NULL,
  `serum_creatinine` varchar(10) NOT NULL,
  `sgot_alt` varchar(10) NOT NULL,
  `sgpt_ast` varchar(10) NOT NULL,
  `lp_total_cholesterol` varchar(10) NOT NULL,
  `lp_triglycerides` varchar(10) NOT NULL,
  `lp_hdl` varchar(10) NOT NULL,
  `lp_ldl` varchar(10) NOT NULL,
  `glycosylated_hemoglobin` varchar(10) NOT NULL,
  `remarks` varchar(250) NOT NULL,
  `medical_technologist_c` int(11) NOT NULL,
  `medical_doctor_c` int(11) NOT NULL,
  `date_created` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blood_type`
--

CREATE TABLE `blood_type` (
  `blood_type_c` int(11) NOT NULL,
  `blood_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_type`
--

INSERT INTO `blood_type` (`blood_type_c`, `blood_type`) VALUES
(1, 'A positive'),
(2, 'A negative'),
(3, 'B positve'),
(4, 'B negative'),
(5, 'AB positve'),
(6, 'AB negative'),
(7, 'O positive'),
(8, 'O negative');

-- --------------------------------------------------------

--
-- Table structure for table `hematology`
--

CREATE TABLE `hematology` (
  `hematology_c` int(11) NOT NULL,
  `patient_c` int(11) NOT NULL,
  `hemoglobin` varchar(10) NOT NULL,
  `hematocrit` varchar(10) NOT NULL,
  `rbc` varchar(10) NOT NULL,
  `platelet_count` varchar(10) NOT NULL,
  `wbc` varchar(10) NOT NULL,
  `segmenters` varchar(10) NOT NULL,
  `lymphocytes` varchar(10) NOT NULL,
  `eosinophil` varchar(10) NOT NULL,
  `monocyte` varchar(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `medical_technologist_c` int(11) NOT NULL,
  `medical_doctor_c` int(11) NOT NULL,
  `date_created` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_subtest`
--

CREATE TABLE `laboratory_subtest` (
  `laboratory_subtest_c` int(11) NOT NULL,
  `laboratory_test_c` int(11) NOT NULL,
  `subtest_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_subtest_content`
--

CREATE TABLE `laboratory_subtest_content` (
  `laboratory_subtest_content_c` int(11) NOT NULL,
  `laboratory_test_c` int(11) NOT NULL,
  `laboratory_subtest_c` int(11) NOT NULL,
  `subtest_content` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_test`
--

CREATE TABLE `laboratory_test` (
  `laboratory_test_c` int(11) NOT NULL,
  `laboratory_test_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_doctor`
--

CREATE TABLE `medical_doctor` (
  `medical_doctor_c` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_initial` varchar(5) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `prefix_title` varchar(50) NOT NULL,
  `license_number` varchar(50) NOT NULL,
  `signatory_img` varchar(100) NOT NULL,
  `suffix_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_doctor`
--

INSERT INTO `medical_doctor` (`medical_doctor_c`, `first_name`, `middle_initial`, `last_name`, `prefix_title`, `license_number`, `signatory_img`, `suffix_title`) VALUES
(1, 'Reynaldo', 'G.', 'Torres', '', '0064274', '', 'M.D.');

-- --------------------------------------------------------

--
-- Table structure for table `medical_technologist`
--

CREATE TABLE `medical_technologist` (
  `medical_technologist_c` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_initial` varchar(5) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `prefix_title` varchar(50) NOT NULL,
  `license_number` varchar(50) NOT NULL,
  `signatory_img` varchar(100) NOT NULL,
  `suffix_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_technologist`
--

INSERT INTO `medical_technologist` (`medical_technologist_c`, `first_name`, `middle_initial`, `last_name`, `prefix_title`, `license_number`, `signatory_img`, `suffix_title`) VALUES
(1, 'Miriam', 'R.', 'Tulalian', '', '36244', '', 'RMT'),
(2, 'Maria Chonette', 'A.', 'Ijan', '', '35929', '', 'RMT');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1516415514),
('m130524_201442_init', 1516415518);

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneous`
--

CREATE TABLE `miscellaneous` (
  `miscellaneous_c` int(11) NOT NULL,
  `patient_c` int(11) NOT NULL,
  `dengue_nsi` varchar(10) NOT NULL,
  `dengue_igg_igm` varchar(10) NOT NULL,
  `trophonin_i` varchar(10) NOT NULL,
  `salmonella_typhi_igg` varchar(10) NOT NULL,
  `salmonella_typhi_igm` varchar(10) NOT NULL,
  `hbsag` varchar(10) NOT NULL,
  `pregnancy_test` varchar(10) NOT NULL,
  `koh` varchar(10) NOT NULL,
  `medical_technologist_c` int(11) NOT NULL,
  `medical_doctor_c` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `normal_value_cms`
--

CREATE TABLE `normal_value_cms` (
  `normal_value_cms_c` int(11) NOT NULL,
  `laboratory_test_c` int(11) NOT NULL,
  `test_name` varchar(50) NOT NULL,
  `sub_test_name` varchar(50) NOT NULL,
  `normal_value` varchar(50) NOT NULL,
  `date_created` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_c` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `locale` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `complete_address` varchar(250) NOT NULL,
  `date_created` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_c`, `first_name`, `middle_name`, `last_name`, `sex`, `contact_number`, `dob`, `locale`, `district`, `division`, `complete_address`, `date_created`) VALUES
(1, 'MARK ANGELO', 'DAYAGMIL', 'BON', 'MALE', '09477271918', '1995-10-12', 'UNIT 5', 'CENTRAL', 'NCR', '', '2018-01-06 12:50:48.192419'),
(2, 'LEONEL REY', 'DAYAGMIL', 'BON', 'MALE', '09477271914', '1997-08-27', 'UNIT 5', 'CENTRAL', 'NCR', '', '2018-01-20 13:25:50.335676'),
(3, 'MARK ANGELO', 'DAYAGMIL', 'BON', 'MALE', '09477271918', '2018-01-18', 'UNIT 5', 'CENTRAL', 'NCR', '', '2018-01-20 14:03:20.011900'),
(14, 'JIM', 'TARIMAN', 'MARTINEZ', 'MALE', '', '', '', '', '', '', '2018-01-20 14:34:52.618663'),
(18, 'GENICKA MAE', 'DE GUZMAN', 'PAGUILIGAN', 'FEMALE', '09051092923', '1995-03-11', 'mALOLOS', 'bulacan', 'bulacan', '', '2018-01-20 19:10:27.298393');

-- --------------------------------------------------------

--
-- Table structure for table `serum_electrolytes`
--

CREATE TABLE `serum_electrolytes` (
  `serum_electrolytes_c` int(11) NOT NULL,
  `patient_c` int(11) NOT NULL,
  `sodium` varchar(10) NOT NULL,
  `potassium` varchar(10) NOT NULL,
  `chloride` varchar(10) NOT NULL,
  `ionized_calcium` varchar(10) NOT NULL,
  `total_calcium` varchar(10) NOT NULL,
  `medical_technologist_c` int(11) NOT NULL,
  `medical_doctor_c` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `urinalysis_fecalysis`
--

CREATE TABLE `urinalysis_fecalysis` (
  `urinalysis_fecalysis_c` int(11) NOT NULL,
  `patient_c` int(11) NOT NULL,
  `urin_macro_color` int(11) NOT NULL,
  `urin_macro_transparency` int(11) NOT NULL,
  `urin_macro_ph` int(11) NOT NULL,
  `urin_macro_specific_gravity` int(11) NOT NULL,
  `urin_macro_protein` int(11) NOT NULL,
  `urin_macro_glucose` int(11) NOT NULL,
  `urin_micro_wbc` varchar(20) NOT NULL,
  `urin_micro_rbc` varchar(20) NOT NULL,
  `urin_micro_bacteria` int(11) NOT NULL,
  `urin_micro_epithelial_cells` int(11) NOT NULL,
  `urin_micro_mucus_threads` int(11) NOT NULL,
  `urin_micro_amorphous` int(11) NOT NULL,
  `urin_others_casts` int(11) NOT NULL,
  `urin_others_crystals` int(11) NOT NULL,
  `feca_macro_color` int(11) NOT NULL,
  `feca_macro_consistency` int(11) NOT NULL,
  `feca_micro_wbc` int(11) NOT NULL,
  `feca_micro_rbc` int(11) NOT NULL,
  `feca_others` varchar(150) NOT NULL,
  `remarks` int(150) NOT NULL,
  `medical_technologist_c` int(11) NOT NULL,
  `medical_doctor_c` int(11) NOT NULL,
  `date_created` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `urin_feca_cat_child_cms`
--

CREATE TABLE `urin_feca_cat_child_cms` (
  `c` int(11) NOT NULL,
  `urin_feca_cat_parent_cms_c` int(11) NOT NULL,
  `urin_feca_cat_subparent_cms_c` int(11) NOT NULL,
  `child_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `urin_feca_cat_parent_cms`
--

CREATE TABLE `urin_feca_cat_parent_cms` (
  `c` int(11) NOT NULL,
  `parent_category_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urin_feca_cat_parent_cms`
--

INSERT INTO `urin_feca_cat_parent_cms` (`c`, `parent_category_name`) VALUES
(1, 'Urinalysis'),
(2, 'Fecalysis');

-- --------------------------------------------------------

--
-- Table structure for table `urin_feca_cat_subparent_cms`
--

CREATE TABLE `urin_feca_cat_subparent_cms` (
  `c` int(11) NOT NULL,
  `urin_feca_cat_parent_cms_c` int(11) NOT NULL,
  `sub_parent_category_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urin_feca_cat_subparent_cms`
--

INSERT INTO `urin_feca_cat_subparent_cms` (`c`, `urin_feca_cat_parent_cms_c`, `sub_parent_category_name`) VALUES
(1, 1, 'Macroscopic'),
(2, 1, 'Microscopic'),
(3, 2, 'Macroscopic'),
(4, 2, 'Microscopic');

-- --------------------------------------------------------

--
-- Table structure for table `urin_feca_cat_value_cms`
--

CREATE TABLE `urin_feca_cat_value_cms` (
  `c` int(11) NOT NULL,
  `urin_feca_cat_parent_cms_c` int(11) NOT NULL,
  `urin_feca_cat_subparent_cms_c` int(11) NOT NULL,
  `urin_feca_cat_child_cms_c` int(11) NOT NULL,
  `value` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_chemistry`
--
ALTER TABLE `blood_chemistry`
  ADD PRIMARY KEY (`blood_chemistry_c`);

--
-- Indexes for table `blood_type`
--
ALTER TABLE `blood_type`
  ADD PRIMARY KEY (`blood_type_c`);

--
-- Indexes for table `hematology`
--
ALTER TABLE `hematology`
  ADD PRIMARY KEY (`hematology_c`);

--
-- Indexes for table `laboratory_subtest`
--
ALTER TABLE `laboratory_subtest`
  ADD PRIMARY KEY (`laboratory_subtest_c`);

--
-- Indexes for table `laboratory_subtest_content`
--
ALTER TABLE `laboratory_subtest_content`
  ADD PRIMARY KEY (`laboratory_subtest_content_c`);

--
-- Indexes for table `laboratory_test`
--
ALTER TABLE `laboratory_test`
  ADD PRIMARY KEY (`laboratory_test_c`);

--
-- Indexes for table `medical_doctor`
--
ALTER TABLE `medical_doctor`
  ADD PRIMARY KEY (`medical_doctor_c`);

--
-- Indexes for table `medical_technologist`
--
ALTER TABLE `medical_technologist`
  ADD PRIMARY KEY (`medical_technologist_c`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `miscellaneous`
--
ALTER TABLE `miscellaneous`
  ADD PRIMARY KEY (`miscellaneous_c`);

--
-- Indexes for table `normal_value_cms`
--
ALTER TABLE `normal_value_cms`
  ADD PRIMARY KEY (`normal_value_cms_c`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_c`);

--
-- Indexes for table `serum_electrolytes`
--
ALTER TABLE `serum_electrolytes`
  ADD PRIMARY KEY (`serum_electrolytes_c`);

--
-- Indexes for table `urinalysis_fecalysis`
--
ALTER TABLE `urinalysis_fecalysis`
  ADD PRIMARY KEY (`urinalysis_fecalysis_c`);

--
-- Indexes for table `urin_feca_cat_child_cms`
--
ALTER TABLE `urin_feca_cat_child_cms`
  ADD PRIMARY KEY (`c`);

--
-- Indexes for table `urin_feca_cat_parent_cms`
--
ALTER TABLE `urin_feca_cat_parent_cms`
  ADD PRIMARY KEY (`c`);

--
-- Indexes for table `urin_feca_cat_subparent_cms`
--
ALTER TABLE `urin_feca_cat_subparent_cms`
  ADD PRIMARY KEY (`c`),
  ADD KEY `urin_feca_cat_parent_c` (`urin_feca_cat_parent_cms_c`);

--
-- Indexes for table `urin_feca_cat_value_cms`
--
ALTER TABLE `urin_feca_cat_value_cms`
  ADD PRIMARY KEY (`c`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_chemistry`
--
ALTER TABLE `blood_chemistry`
  MODIFY `blood_chemistry_c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blood_type`
--
ALTER TABLE `blood_type`
  MODIFY `blood_type_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hematology`
--
ALTER TABLE `hematology`
  MODIFY `hematology_c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratory_subtest`
--
ALTER TABLE `laboratory_subtest`
  MODIFY `laboratory_subtest_c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratory_subtest_content`
--
ALTER TABLE `laboratory_subtest_content`
  MODIFY `laboratory_subtest_content_c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratory_test`
--
ALTER TABLE `laboratory_test`
  MODIFY `laboratory_test_c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_doctor`
--
ALTER TABLE `medical_doctor`
  MODIFY `medical_doctor_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medical_technologist`
--
ALTER TABLE `medical_technologist`
  MODIFY `medical_technologist_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `miscellaneous`
--
ALTER TABLE `miscellaneous`
  MODIFY `miscellaneous_c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `normal_value_cms`
--
ALTER TABLE `normal_value_cms`
  MODIFY `normal_value_cms_c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `serum_electrolytes`
--
ALTER TABLE `serum_electrolytes`
  MODIFY `serum_electrolytes_c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urinalysis_fecalysis`
--
ALTER TABLE `urinalysis_fecalysis`
  MODIFY `urinalysis_fecalysis_c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urin_feca_cat_child_cms`
--
ALTER TABLE `urin_feca_cat_child_cms`
  MODIFY `c` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urin_feca_cat_parent_cms`
--
ALTER TABLE `urin_feca_cat_parent_cms`
  MODIFY `c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `urin_feca_cat_subparent_cms`
--
ALTER TABLE `urin_feca_cat_subparent_cms`
  MODIFY `c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `urin_feca_cat_value_cms`
--
ALTER TABLE `urin_feca_cat_value_cms`
  MODIFY `c` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
