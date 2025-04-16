-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2025 at 02:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `research_entries`
--

CREATE TABLE `research_entries` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `region` varchar(100) DEFAULT NULL,
  `date_of_observation` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research_entries`
--

INSERT INTO `research_entries` (`id`, `user_id`, `title`, `description`, `region`, `date_of_observation`, `created_at`) VALUES
(1, 1, 'COVID-19 Variants and Their Impact on Vaccine Efficacy', 'How COVID-19 variants have affected the effectiveness of vaccines.\r\n\r\n', 'USA', '2025-04-15', '2025-04-15 16:26:43'),
(7, 1, 'Post-Vaccine Breakthrough Infections in COVID-19', 'A study on the incidence and characteristics of COVID-19 breakthrough infections after vaccination, analyzing symptom severity and long-term immunity.', 'Global', '2023-05-22', '2025-04-15 16:37:22'),
(8, 2, 'COVID-19 and the Rise of Telemedicine: A Longitudinal Analysis', 'Explores how the pandemic accelerated adoption of telemedicine globally, and examines patient outcomes and healthcare access improvements in underserved regions.', 'North America', '2023-08-14', '2025-04-15 16:37:22'),
(9, 3, 'Booster Shots: Evaluating Effectiveness Against New COVID-19 Strains', 'Analyzes the effectiveness of bivalent and mRNA booster shots against new Omicron subvariants like XBB.1.5 and their spread in urban communities.', 'Europe', '2024-01-09', '2025-04-15 16:37:22'),
(10, 1, 'COVID-19 Wastewater Surveillance for Early Detection', 'Investigates how analyzing viral loads in sewage systems helps detect new outbreaks before clinical cases rise, acting as an early warning tool.', 'Asia', '2023-09-30', '2025-04-15 16:37:22'),
(11, 3, 'Hybrid Immunity: Comparing Natural Infection and Vaccination Outcomes', 'Compares immune response strength and duration in individuals with both natural COVID-19 infection and full vaccination versus vaccination-only cases.', 'South America', '2024-02-12', '2025-04-15 16:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` enum('researcher','admin') DEFAULT 'researcher',
  `affiliation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password_hash`, `role`, `affiliation`, `created_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$PRbNb8w8g22TiJLP1QPQkO2Wzi3wh.lXu7fLiggzFN71Of9NZoh/O', 'researcher', 'NYU', '2025-04-15 16:01:29'),
(2, 'admin2@gmail.com', '$2y$10$pq61iZxb98JprrxcPybMkO3BNCT4fnANtKnIyeT9/xr8ikTYQQG1W', 'researcher', 'NYU', '2025-04-15 16:04:21'),
(3, 'admin3@gmail.com', '$2y$10$EPB2AUyzcz0ETQOrhIRBZ.dcVAQHwpPeoEb/cSj4nJqtZiQT.31eS', 'researcher', 'NYU', '2025-04-15 16:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `virus_variants`
--

CREATE TABLE `virus_variants` (
  `lineage` varchar(50) DEFAULT NULL,
  `most_common_countries` text DEFAULT NULL,
  `earliest_date` date DEFAULT NULL,
  `designated` int(11) DEFAULT NULL,
  `assigned` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `who_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `virus_variants`
--

INSERT INTO `virus_variants` (`lineage`, `most_common_countries`, `earliest_date`, `designated`, `assigned`, `description`, `who_name`) VALUES
('B', 'United States of America 40.0%, United Kingdom 15.0%, China 8.0%, Mexico 5.0%, Germany 3.0%', '2019-12-24', 3999, 10439, 'One of the two original haplotypes of the pandemic (and first to be discovered)', NULL),
('B.1', 'United States of America 47.0%, Turkey 11.0%, United Kingdom 7.0%, Canada 4.0%, France 3.0%', '2020-01-01', 46223, 115411, 'A large European lineage the origin of which roughly corresponds to the Northern Italian outbreak early in 2020.', NULL),
('B.1.1', 'United Kingdom 25.0%, United States of America 15.0%, Russia 6.0%, Japan 6.0%, Turkey 5.0%', '2020-01-19', 22778, 51787, 'European lineage with 3 clear SNPs `28881GA`, `28882GA`, `28883GC`', NULL),
('B.1.1.7', 'United Kingdom 23.0%, United States of America 20.0%, Germany 9.0%, Sweden 6.0%, Denmark 6.0%', '2020-01-19', 69634, 1118968, 'UK lineage of concern, associated with the N501Y mutation. More information can be found at cov-lineages.org/global_report.html', 'Alpha'),
('B.1.1.28', 'Brazil 83.0%, Philippines 8.0%, United States of America 3.0%, Paraguay 2.0%, Japan 1.0%', '2020-02-10', 854, 5631, 'Brazil mostly, absorbed B.1.1.94 and B.1.1.143', NULL),
('P.1', 'Brazil 58.0%, United States of America 25.0%, Chile 3.0%, Argentina 1.0%, Spain 1.0%', '2020-04-07', 29942, 73870, 'Alias of B.1.1.28.1, Brazilian lineage with a number of spike mutations with likely functional significance E484K, K417T, and N501Y. Described in https://virological.org/t/genomic-characterisation-of-an-emergent-sars-cov-2-lineage-in-manaus-preliminary-findings/586, from #77', 'Gamma'),
('B.1.1.142', 'United Kingdom 50.0%, Australia 8.0%, Germany 7.0%, United States of America 6.0%, Austria 5.0%', '2020-02-24', 38, 249, 'Australian lineage', NULL),
('B.1.1.529', 'United States of America 34.0%, Germany 13.0%, India 9.0%, Turkey 5.0%, Russia 5.0%', '2020-04-14', 0, 7730, 'South Africa and Botswana lineage, from #343', 'Omicron'),
('BA.1', 'United Kingdom 40.0%, United States of America 22.0%, Denmark 6.0%, Germany 4.0%, Brazil 4.0%', '2020-06-25', 65813, 426716, 'Alias of B.1.1.529.1, from #361', 'Omicron'),
('BA.1.1', 'United States of America 47.0%, United Kingdom 19.0%, Germany 7.0%, Canada 4.0%, France 2.0%', '2020-01-27', 104388, 973060, 'Alias of B.1.1.529.1.1, from #360', NULL),
('BA.2', 'United Kingdom 29.0%, Germany 13.0%, Denmark 12.0%, United States of America 11.0%, France 7.0%', '2020-03-28', 112178, 1209386, 'Alias of B.1.1.529.2, from #361', 'Omicron'),
('BA.2.12.1', 'United States of America 81.0%, Canada 5.0%, United Kingdom 2.0%, Germany 1.0%, Mexico 1.0%', '2020-04-15', 39743, 276706, 'Alias of B.1.1.529.2.12.1, USA and Canada lineage, from #499', NULL),
('BM.4.1.1', 'United States of America 24.0%, India 22.0%, United Kingdom 11.0%, Australia 5.0%, Singapore 4.0%', '2022-07-20', 35, 928, 'Alias of B.1.1.529.2.75.3.4.1.1, mainly found in India, defined by S:346T', NULL),
('DV.7.1', 'Spain 49.0%, United States of America 9.0%, France 7.0%, Canada 5.0%, United Kingdom 5.0%', '2023-05-11', 45, 1264, 'Alias of B.1.1.529.2.75.3.4.1.1.1.1.1.7.1, S:L455F (G22927T), S:F456L (T22928C), Spain/Austria, from sars-cov-2-variants/lineage-proposals#135', NULL),
('BN.1.2', 'South_Korea 28.0%, Japan 23.0%, United States of America 7.0%, Thailand 6.0%, Denmark 5.0%', '2022-01-24', 2344, 9559, 'Alias of B.1.1.529.2.75.5.1.2, Singapore/England, E:D72G', NULL),
('BA.2.86', 'South_Africa 34.0%, United States of America 10.0%, Australia 5.0%, Netherlands 5.0%, Germany 4.0%', '2023-03-11', 28, 922, 'Alias of B.1.1.529.2.86, from #2183', NULL),
('BA.2.86.1', 'Japan 20.0%, United Kingdom 11.0%, United States of America 9.0%, Denmark 8.0%, France 6.0%', '2023-01-03', 22, 9872, 'Alias of B.1.1.529.2.86.1, ORF1a:K1973R, mostly with C12815T, mainly Europe, from #2236', NULL),
('JN.1', 'United States of America 32.0%, Canada 8.0%, United Kingdom 8.0%, Spain 6.0%, China 4.0%', '2020-01-20', 3987, 102966, 'Alias of B.1.1.529.2.86.1.1, S:L455S, ORF1a:R3821K, ORF7b:F19L, Europe', NULL),
('JN.1.1', 'United States of America 21.0%, France 17.0%, China 10.0%, Canada 6.0%, United Kingdom 4.0%', '2021-07-16', 692, 22674, 'Alias of B.1.1.529.2.86.1.1.1, ORF1a:F499L, C11747T, France, from sars-cov-2-variants/lineage-proposals#987', NULL),
('JN.1.1.1', 'Sweden 29.0%, France 16.0%, United Kingdom 10.0%, United States of America 8.0%, Italy 6.0%', '2023-09-25', 24, 588, 'Alias of B.1.1.529.2.86.1.1.1.1, S:T572I on C9142T branch, France/Sweden/Poland, from sars-cov-2-variants/lineage-proposals#1097', NULL),
('JN.1.1.3', 'Japan 23.0%, Sweden 20.0%, United Kingdom 14.0%, France 13.0%, United States of America 8.0%', '2023-11-04', 68, 71, 'Alias of B.1.1.529.2.86.1.1.1.3, S:R346T, from sars-cov-2-variants/lineage-proposals#1089', NULL),
('JN.1.1.5', 'Brazil 27.0%, United States of America 26.0%, Japan 8.0%, France 7.0%, South_Africa 4.0%', '2023-01-29', 43, 407, 'Alias of B.1.1.529.2.86.1.1.1.5, S:R346T on C9142T branch, from #2492', NULL),
('KR.1', 'United States of America 43.0%, Canada 21.0%, South_Korea 7.0%, Japan 6.0%, Australia 4.0%', '2024-01-06', 10, 672, 'Alias of B.1.1.529.2.86.1.1.1.5.1, S:F456L (22928C), after C28498T, from sars-cov-2-variants/lineage-proposals#1253', NULL),
('JN.1.2', 'United States of America 47.0%, Canada 37.0%, Greece 4.0%, United Kingdom 3.0%, Sweden 1.0%', '2023-01-03', 43, 2421, 'Alias of B.1.1.529.2.86.1.1.2, S:M1229I, USA/Canada, from sars-cov-2-variants/lineage-proposals#1087', NULL),
('JN.1.3', 'United States of America 29.0%, Netherlands 9.0%, Switzerland 7.0%, Canada 6.0%, United Kingdom 5.0%', '2023-03-04', 23, 456, 'Alias of B.1.1.529.2.86.1.1.3, ORF8:Q18*, Netherlands', NULL),
('JN.1.4', 'United States of America 44.0%, Canada 8.0%, South_Korea 7.0%, United Kingdom 5.0%, Denmark 4.0%', '2023-02-14', 129, 45080, 'Alias of B.1.1.529.2.86.1.1.4, ORF1a:T170I, Denmark/Singapore, from #2381', NULL),
('JN.1.4.2', 'United States of America 84.0%, South_Korea 4.0%, Canada 3.0%, Puerto_Rico 2.0%, United Kingdom 1.0%', '2023-11-17', 387, 1246, 'Alias of B.1.1.529.2.86.1.1.4.2, S:N185D, after T18453C, USA, from #2462', NULL),
('JN.1.4.3', 'United States of America 64.0%, Canada 9.0%, United Kingdom 8.0%, China 4.0%, Australia 2.0%', '2023-11-14', 36, 400, 'Alias of B.1.1.529.2.86.1.1.4.3, S:T572I, USA, from #2487', NULL),
('KQ.1', 'United States of America 86.0%, Canada 6.0%, United Kingdom 4.0%, Puerto_Rico 1.0%, Poland 1.0%', '2024-01-04', 64, 872, 'Alias of B.1.1.529.2.86.1.1.4.3.1, S:R346T, USA from #2487', NULL),
('JN.1.5', 'Singapore 26.0%, China 16.0%, Japan 10.0%, South_Korea 10.0%, United States of America 9.0%', '2023-10-30', 539, 2935, 'Alias of B.1.1.529.2.86.1.1.5, ORF1b:V1271T, Singapore/Malaysia/Indonesia, from #2419', NULL),
('JN.1.6', 'United States of America 57.0%, Switzerland 6.0%, France 5.0%, Canada 5.0%, China 5.0%', '2023-10-11', 141, 1224, 'Alias of B.1.1.529.2.86.1.1.6, G22627A', NULL),
('JN.1.6.1', 'Sweden 47.0%, United States of America 20.0%, United Kingdom 17.0%, Spain 4.0%, Germany 4.0%', '2023-11-26', 34, 275, 'Alias of B.1.1.529.2.86.1.1.6.1, S:R346T, Sweden, from sars-cov-2-variants/lineage-proposals#1089', NULL),
('JN.1.7', 'United States of America 47.0%, United Kingdom 14.0%, Canada 10.0%, Spain 4.0%, Ireland 3.0%', '2022-10-18', 66, 8276, 'Alias of B.1.1.529.2.86.1.1.7, S:T572I, S:E1150D, USA/France, from sars-cov-2-variants/lineage-proposals#1097', NULL),
('JN.1.7.1', 'United Kingdom 75.0%, United States of America 10.0%, New_Zealand 3.0%, Portugal 3.0%, Ireland 2.0%', '2023-12-31', 21, 220, 'Alias of B.1.1.529.2.86.1.1.7.1, S:R346K, England, from sars-cov-2-variants/lineage-proposals#1371', NULL),
('JN.1.7.2', 'United States of America 38.0%, Canada 18.0%, Chile 10.0%, United Kingdom 9.0%, Argentina 5.0%', '2023-12-09', 110, 861, 'Alias of B.1.1.529.2.86.1.1.7.2, ORF1b:C1563F, Americas', NULL),
('JN.1.8', 'United States of America 37.0%, United Kingdom 15.0%, Spain 7.0%, Canada 7.0%, France 4.0%', '2023-02-26', 110, 1965, 'Alias of B.1.1.529.2.86.1.1.8, ORF7a:T28I', NULL),
('JN.1.8.1', 'United States of America 72.0%, Canada 16.0%, United Kingdom 2.0%, Japan 1.0%, Spain 1.0%', '2023-02-26', 96, 3869, 'Alias of B.1.1.529.2.86.1.1.8.1, S:T572I, after A12928G, USA/Denmark, from sars-cov-2-variants/lineage-proposals#1097', NULL),
('JN.1.9', 'United States of America 43.0%, Spain 10.0%, United Kingdom 9.0%, Canada 8.0%, Puerto_Rico 5.0%', '2023-10-03', 238, 3424, 'Alias of B.1.1.529.2.86.1.1.9, S:Q183H, USA/UK/Canada, from #2410', 'Alias of B.1.1.529.2.86.1.1.9'),
('JN.1.9.1', 'United Kingdom 63.0%, Australia 7.0%, New_Zealand 7.0%, Ireland 5.0%, Canada 5.0%', '2023-12-04', 26, 350, 'Alias of B.1.1.529.2.86.1.1.9.1, S:T572I, ORF1a:A3143V, from sars-cov-2-variants/lineage-proposals#1097', 'Alias of B.1.1.529.2.86.1.1.9.1'),
('JN.1.10', 'United States of America 19.0%, Spain 10.0%, Canada 10.0%, Germany 9.0%, United Kingdom 8.0%', '2023-11-07', 29, 159, 'Alias of B.1.1.529.2.86.1.1.10, S:T95I, USA/Canada, from sars-cov-2-variants/lineage-proposals#1135', 'Alias of B.1.1.529.2.86.1.1.10'),
('JN.1.11', 'United States of America 30.0%, India 12.0%, Italy 12.0%, Spain 11.0%, Japan 7.0%', '2023-12-07', 2, 1114, 'Alias of B.1.1.529.2.86.1.1.11, S:V1104L, G17334T, India, from #2446', 'Alias of B.1.1.529.2.86.1.1.11'),
('JN.1.11.1', 'United States of America 25.0%, Canada 16.0%, Spain 10.0%, United Kingdom 9.0%, Japan 9.0%', '2023-08-11', 17, 93253, 'Alias of B.1.1.529.2.86.1.1.11.1, S:F456L (T22928C), after ORF1a:T2283I, India, from sars-cov-2-variants/lineage-proposals#1253', 'Alias of B.1.1.529.2.86.1.1.11.1'),
('KP.1', 'United States of America 39.0%, Canada 11.0%, Australia 7.0%, New_Zealand 7.0%, United Kingdom 6.0%', '2023-12-30', 28, 915, 'Alias of B.1.1.529.2.86.1.1.11.1.1, S:K1086R, from sars-cov-2-variants/lineage-proposals#1364', 'Alias of B.1.1.529.2.86.1.1.11.1.1'),
('KP.1.1', 'United States of America 44.0%, Canada 11.0%, Singapore 7.0%, United Kingdom 7.0%, Australia 3.0%', '2024-01-27', 8, 11925, 'Alias of B.1.1.529.2.86.1.1.11.1.1.1, S:R346T, from sars-cov-2-variants/lineage-proposals#1089', 'Alias of B.1.1.529.2.86.1.1.11.1.1.1'),
('KP.2', 'United States of America 44.0%, Canada 11.0%, United Kingdom 9.0%, Singapore 7.0%, France 3.0%', '2023-07-05', 7, 33354, 'Alias of B.1.1.529.2.86.1.1.11.1.2, S:R346T on JN.1.11.1 polytomy, from sars-cov-2-variants/lineage-proposals#1089', 'Alias of B.1.1.529.2.86.1.1.11.1.2'),
('JN.1.12', 'Italy 24.0%, South_Korea 22.0%, United States of America 18.0%, Poland 7.0%, Ireland 7.0%', '2023-11-26', 11, 45, 'Alias of B.1.1.529.2.86.1.1.12, S:F456V, ORF7a:A8T, from sars-cov-2-variants/lineage-proposals#1253', 'Alias of B.1.1.529.2.86.1.1.12'),
('JN.1.13', 'United States of America 32.0%, Sweden 15.0%, Canada 9.0%, Russia 8.0%, United Kingdom 7.0%', '2023-12-10', 21, 171, 'Alias of B.1.1.529.2.86.1.1.13, S:A1087S, after C26894T, C25680T, USA, from #2464', 'Alias of B.1.1.529.2.86.1.1.13'),
('JN.1.13.1', 'United States of America 38.0%, Canada 14.0%, Russia 12.0%, United Kingdom 7.0%, France 5.0%', '2023-12-07', 241, 6189, 'Alias of B.1.1.529.2.86.1.1.13.1, S:R346T, S:F59S, USA, from sars-cov-2-variants/lineage-proposals/issues/1386', 'Alias of B.1.1.529.2.86.1.1.13.1'),
('JN.1.15', 'United States of America 31.0%, Ecuador 14.0%, Spain 11.0%, United Kingdom 8.0%, Australia 5.0%', '2023-11-09', 50, 731, 'Alias of B.1.1.529.2.86.1.1.15, S:A688V', 'Alias of B.1.1.529.2.86.1.1.15'),
('JN.1.16', 'United States of America 36.0%, Canada 12.0%, China 7.0%, United Kingdom 6.0%, Spain 6.0%', '2023-07-14', 47, 35192, 'Alias of B.1.1.529.2.86.1.1.16, S:F456L (T22928C), from sars-cov-2-variants/lineage-proposals#1253', 'Alias of B.1.1.529.2.86.1.1.16'),
('JN.1.18', 'United States of America 32.0%, United Kingdom 10.0%, Canada 8.0%, France 4.0%, Japan 4.0%', '2023-01-03', 134, 6497, 'Alias of B.1.1.529.2.86.1.1.18, S:R346T, directly on JN.1 polytomy, from sars-cov-2-variants/lineage-proposals#1089', 'Alias of B.1.1.529.2.86.1.1.18'),
('JN.1.19', 'United States of America 30.0%, Netherlands 10.0%, United Kingdom 9.0%, Canada 6.0%, Spain 6.0%', '2023-12-17', 151, 2634, 'Alias of B.1.1.529.2.86.1.1.19, S:G17334T', 'Alias of B.1.1.529.2.86.1.1.19'),
('JN.1.20', 'South_Korea 43.0%, China 13.0%, United States of America 13.0%, Australia 6.0%, Canada 4.0%', '2023-01-02', 66, 1179, 'Alias of B.1.1.529.2.86.1.1.20, S:S31F, directly on JN.1 polytomy', 'Alias of B.1.1.529.2.86.1.1.20'),
('JN.1.22', 'Canada 32.0%, United States of America 22.0%, United Kingdom 8.0%, Spain 4.0%, Belgium 4.0%', '2023-10-22', 1541, 3104, 'Alias of B.1.1.529.2.86.1.1.22, ORF1a:S505F, C13019T, from #2465', 'Alias of B.1.1.529.2.86.1.1.22'),
('JN.1.23', 'Brazil 72.0%, United States of America 16.0%, Canada 3.0%, South_Korea 3.0%, Portugal 2.0%', '2024-01-01', 48, 270, 'Alias of B.1.1.529.2.86.1.1.23, S:K444R, S:Y453F, ORF1a:A307V, ORF1a:P2144L, Brazil, from #2488', 'Alias of B.1.1.529.2.86.1.1.23'),
('JN.1.24', 'United States of America 55.0%, United Kingdom 10.0%, Costa_Rica 5.0%, Spain 5.0%, Israel 4.0%', '2023-11-10', 117, 189, 'Alias of B.1.1.529.2.86.1.1.24, S:C1243F, USA', 'Alias of B.1.1.529.2.86.1.1.24'),
('JN.1.25.1', 'United States of America 31.0%, United Kingdom 31.0%, India 19.0%, Canada 12.0%, Netherlands 6.0%', '2023-12-17', 16, 52, 'Alias of B.1.1.529.2.86.1.1.25.1, S:R346T, India', 'Alias of B.1.1.529.2.86.1.1.25.1'),
('JN.2', 'Sweden 34.0%, United Kingdom 16.0%, Canada 12.0%, United States of America 8.0%, Japan 5.0%', '2022-10-22', 111, 3986, 'Alias of B.1.1.529.2.86.1.2, ORF1a:Y621C, Europe/North America, from #2284', 'Alias of B.1.1.529.2.86.1.2'),
('JN.2.2', 'Netherlands 43.0%, Germany 12.0%, Turkey 10.0%, United Kingdom 6.0%, Sweden 5.0%', '2023-10-27', 41, 129, 'Alias of B.1.1.529.2.86.1.2.2, S:T572I, N:G25C, ORF1a:L3644F, Netherlands, from #2433', 'Alias of B.1.1.529.2.86.1.2.2'),
('JN.6', 'United Kingdom 47.0%, United States of America 9.0%, Lithuania 8.0%, Denmark 7.0%, Finland 4.0%', '2023-09-12', 36, 721, 'Alias of B.1.1.529.2.86.1.6, S:V193L', 'Alias of B.1.1.529.2.86.1.6'),
('JN.11', 'Japan 34.0%, Denmark 18.0%, United States of America 13.0%, South_Korea 8.0%, Singapore 6.0%', '2023-04-12', 78, 384, 'Alias of B.1.1.529.2.86.1.11, S:V1104L, Asia, from sars-cov-2-variants/lineage-proposals#1303', 'Alias of B.1.1.529.2.86.1.11'),
('JQ.2', 'South_Africa 57.0%, Canada 13.0%, United Kingdom 13.0%, United States of America 7.0%, Netherlands 3.0%', '2023-09-28', 5, 101, 'Alias of B.1.1.529.2.86.3.2, S:R346T, G2944A, South Africa, from #2505', 'Alias of B.1.1.529.2.86.3.2'),
('BA.4.6', 'United States of America 60.0%, Canada 7.0%, United Kingdom 6.0%, France 3.0%, Denmark 3.0%', '2020-02-02', 1179, 53217, 'Alias of B.1.1.529.4.6, mainly found in USA, England and Denmark, from #741', 'Alias of B.1.1.529.4.6'),
('BA.5.1', 'United States of America 18.0%, Germany 11.0%, France 10.0%, United Kingdom 10.0%, Denmark 7.0%', '2020-03-14', 23500, 229728, 'Alias of B.1.1.529.5.1, Portugal lineage', 'Alias of B.1.1.529.5.1'),
('BA.5.1.14', 'Brazil 86.0%, Chile 5.0%, Spain 5.0%, Italy 2.0%, Peru 2.0%', '2022-05-13', 29, 44, 'Alias of B.1.1.529.5.1.14, mainly found in Brazil', NULL),
('BA.5.1.17', 'France 52.0%, Germany 10.0%, United States of America 5.0%, Denmark 4.0%, Belgium 4.0%', '2021-11-15', 801, 1963, 'Alias of B.1.1.529.5.1.17, France lineage', NULL),
('BA.5.2', 'Japan 18.0%, United States of America 17.0%, Germany 7.0%, United Kingdom 6.0%, Russia 5.0%', '2020-07-02', 10665, 279184, 'Alias of B.1.1.529.5.2, mainly found in South Africa, England and USA, from #551', NULL),
('BF.7.21', 'Germany 21.0%, United States of America 10.0%, Canada 10.0%, Belgium 8.0%, United Kingdom 8.0%', '2022-03-11', 1973, 2230, 'Alias of B.1.1.529.5.2.1.7.21, C28603T', NULL),
('BF.13', 'United States of America 64.0%, Canada 8.0%, Japan 7.0%, Germany 4.0%, Sweden 3.0%', '2022-06-09', 36, 2614, 'Alias of B.1.1.529.5.2.1.13, mainly found in USA, from #883', NULL),
('BF.31.1', 'Chile 64.0%, Canada 12.0%, United States of America 12.0%, Austria 3.0%, Australia 2.0%', '2022-07-27', 99, 777, 'Alias of B.1.1.529.5.2.1.31.1, Chile, S:A701V and S:S247N/S:Y248-', NULL),
('BQ.1.1.32', 'United States of America 84.0%, United Kingdom 3.0%, Spain 3.0%, Japan 2.0%, Canada 2.0%', '2021-11-30', 195, 3159, 'Alias of B.1.1.529.5.3.1.1.1.1.1.1.32 found mainly in USA, S:153I, S:144-, from #1402', NULL),
('DT.3', 'United States of America 98.0%, Germany 1.0%, Sweden 1.0%', '2022-11-26', 50, 106, 'Alias of B.1.1.529.5.3.1.1.1.1.1.1.32.3 USA, S:L176F', NULL),
('BQ.1.3.2', 'United States of America 76.0%, Canada 5.0%, United Kingdom 3.0%, Japan 2.0%, Germany 2.0%', '2022-08-01', 2379, 4353, 'Alias of B.1.1.529.5.3.1.1.1.1.1.3.2, ORF1a:L1853F, USA', NULL),
('BQ.1.22', 'United States of America 24.0%, Canada 22.0%, Germany 11.0%, United Kingdom 11.0%, France 7.0%', '2022-09-26', 12, 861, 'Alias of B.1.1.529.5.3.1.1.1.1.1.22, Canada, S:R346T after C26681T', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `research_entries`
--
ALTER TABLE `research_entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `research_entries`
--
ALTER TABLE `research_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `research_entries`
--
ALTER TABLE `research_entries`
  ADD CONSTRAINT `research_entries_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
