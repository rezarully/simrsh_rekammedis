-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2016 at 09:19 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simrsh_rekammedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarlab`
--

CREATE TABLE IF NOT EXISTS `daftarlab` (
  `id_lab` varchar(10) NOT NULL DEFAULT '',
  `kategori` text,
  `nama_pemeriksaan` varchar(100) DEFAULT NULL,
  `satuan` text,
  PRIMARY KEY (`id_lab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarlab`
--

INSERT INTO `daftarlab` (`id_lab`, `kategori`, `nama_pemeriksaan`, `satuan`) VALUES
('lab01', 'Lab', 'Hematologi rutin', 'Sampel'),
('lab02', 'Lab', 'Total Protein Plasma', 'Sampel'),
('lab03', 'Lab', 'Preparat Apus Darah', 'Sampel'),
('lab04', 'Lab', 'Creatinin', 'Sampel'),
('lab05', 'Lab', 'Ureum/BUN', 'Sampel'),
('lab06', 'Lab', 'SGOT (AST)', 'Sampel'),
('lab07', 'Lab', 'SGPT (ALT)', 'Sampel'),
('lab08', 'Lab', 'Bilirubin', 'Sampel'),
('lab09', 'Lab', 'Cholesterol', 'Sampel'),
('lab10', 'Lab', 'Trigliserida', 'Sampel'),
('lab11', 'Lab', 'HDL Kolesterol', 'Sampel'),
('lab12', 'Lab', 'Urin rutin', 'Sampel'),
('lab13', 'Lab', 'Urin Lengkap (pemeriksaan mikroskop)', 'Sampel'),
('lab14', 'Lab', 'Feses Rutin (natif)', 'Sampel'),
('lab15', 'Lab', 'Tes Rivalta', 'Sampel'),
('lab16', 'Lab', 'Preparat Ektoparasit (kerokan kulit)', 'Sampel'),
('lab17', 'Lab', 'Rapid Tes Toxoplasma', 'Sampel'),
('lab18', 'Lab', 'Rapid Tes CPV (parvo)', 'Sampel'),
('lab19', 'Lab', 'Rapid Tes CDV (distemper)', 'Sampel'),
('lab20', 'Lab', 'Rapid Tes CHW (hearthworm)', 'Sampel'),
('lab21', 'Lab', 'Rapid Tes Ekanis Anaplasma (parasit darah)', 'Sampel'),
('lab22', 'Lab', 'Rapid Tes FPV (panleukopenia)', 'Sampel');

-- --------------------------------------------------------

--
-- Table structure for table `daftarobat`
--

CREATE TABLE IF NOT EXISTS `daftarobat` (
  `id_obat` varchar(10) NOT NULL,
  `nama_obat` varchar(50) DEFAULT NULL,
  `jenis_obat` text,
  `satuan_obat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarobat`
--

INSERT INTO `daftarobat` (`id_obat`, `nama_obat`, `jenis_obat`, `satuan_obat`) VALUES
('Ob001', 'Adrenalin (Epinephrin)', 'Injeksi', '1 Ml (1 Box)'),
('Ob002', 'Adrome (Vit. K)', 'Tablet', '1 Box (100 Tab)'),
('Ob003', 'Albendazole', 'Tablet', '30 Tab'),
('Ob004', 'Alkohol 70 %', '', '1 L'),
('Ob005', 'Ambroxol', 'Tablet', '1 Box (100 Tab)'),
('Ob006', 'Aminophiline', 'Injeksi', ''),
('Ob007', 'Aminophiline', 'Tablet', '30 Tab (200 mg)'),
('Ob008', 'Amoxicillin Injeksi', 'Injeksi', '10 ml'),
('Ob009', 'Amoxicillin', 'Tablet', '100 Tab'),
('Ob010', 'Amoxicillin Syr', 'Syrup', '60 ml'),
('Ob011', 'Ampicillin Tab', 'Tablet', '100 Tab'),
('Ob012', 'Ampicillin Injeksi', '', ''),
('Ob013', 'Ampicillin Sulbactam', '', ''),
('Ob014', 'Asam Mefenamat', 'Tablet', '1 Box'),
('Ob015', 'Aspar-K', 'Tablet', '100 Tab'),
('Ob016', 'Atropin', 'Injeksi', '1 ml'),
('Ob017', 'Aquabidest', 'Injeksi', '50 ml'),
('Ob018', 'Aquaprim', 'Injeksi', '100 ml'),
('Ob019', 'Aminovell', 'Injeksi', '500 ml'),
('Ob020', 'Asering', 'Injeksi', '500 ml'),
('Ob021', 'Asam Tranexamat', 'Injeksi', '5 ml (10 Ampul)'),
('Ob022', 'Anabion', 'Syrup', '60 ml'),
('Ob023', 'Acid Salicyl', 'Serbuk', '5 gr'),
('Ob024', 'Allermyl', 'Shampoo', '350 ml'),
('Ob025', 'Asering', 'Injeksi', '500 ml'),
('Ob026', 'Bayticol ', 'Shampoo', '10 ml'),
('Ob027', 'Bekarbon (Norit)', 'Tablet', '750 Tab'),
('Ob028', 'Betadine', '', '1 L'),
('Ob029', 'Bio Atp', 'Tablet', ''),
('Ob030', 'Bioplacenton Salep', 'Salep', '15 gr'),
('Ob031', 'Biosolamin', 'Injeksi', '50 ml'),
('Ob032', 'Biodin', 'Injeksi', '50 ml'),
('Ob033', 'B-Plek', 'Injeksi', '20 ml'),
('Ob034', 'Bubur Barium', 'Serbuk', '1000 gr'),
('Ob035', 'Baytril (Enrofloxacin)', 'Tablet', '50 Tab'),
('Ob036', 'Calcidol', 'Syrup', '60 ml'),
('Ob037', 'Calcii Gluconas', 'Injeksi', '100 Ampul (10 ml)'),
('Ob038', 'Castran', 'Injeksi', '100 ml'),
('Ob039', 'Cefixime', 'Tablet', '1 Box (50 Tab)'),
('Ob040', 'Cefadroxil', 'Capsul', '500 mg/100 Tab'),
('Ob041', 'Cendo Genta Ed', 'Drop', ''),
('Ob042', 'Cendo Timol 0.25% Ed', 'Drop', ''),
('Ob043', 'Cendo Xitrol Ed', 'Drop', ''),
('Ob044', 'Cephalexine', 'Capsul', 'Box'),
('Ob045', 'Cetirizine Tab', '', ''),
('Ob046', 'Chloramfecort Salep', 'Salep', '15 gr'),
('Ob047', 'Chlorpheniramin/Ctm', 'Tablet', '1000 Tab'),
('Ob048', 'Chlorampenicol', 'Capsul', '100 Cap (250 mg)'),
('Ob049', 'Ciprofloxacin 500', 'Tablet', '1 Box (100 Tab)'),
('Ob050', 'Clindamicyn 150', 'Capsul', '1 Box'),
('Ob051', 'Clindamicyn 300', 'Capsul', '1 Box'),
('Ob052', 'Clavet 50', '', ''),
('Ob053', 'Co Amoxclave', 'Tablet', '1 Box'),
('Ob054', 'Combantrin', 'Syrup', '10 ml'),
('Ob055', 'Cortisone Acetate', 'Injeksi', '10 ml'),
('Ob056', 'Colme Ear Drop', '', ''),
('Ob057', 'Corovit', 'Capsul', '100 Tab'),
('Ob058', 'Cyanocobalamin ( B-12)', 'Injeksi', ''),
('Ob059', 'Ceftriaxon', 'Injeksi', '10 ml'),
('Ob060', 'Curliv', 'Capsul', '60 Tab'),
('Ob061', 'Dalmat Shampoo', 'Shampoo', '100 ml'),
('Ob062', 'Dexamethasone', 'Tablet', '1 Box'),
('Ob063', 'Dexamethasone', 'Injeksi', '10 ml'),
('Ob064', 'Diazepam (Stesolid)', 'Injeksi', '2 ml'),
('Ob065', 'Disflatyl', 'Tablet', '100'),
('Ob066', 'Doxycycline', 'Capsul', '1 Box'),
('Ob067', 'Duphalyte', 'Injeksi', '500 ml'),
('Ob068', 'Duradryl', 'Injeksi', '15 ml'),
('Ob069', 'Diazepam 2 Mg', 'Tablet', '50 Tab'),
('Ob070', 'Drontal Dog', 'Tablet', '104'),
('Ob071', 'Drontal Cat', 'Tablet', '60'),
('Ob072', 'Elkana', 'Tablet', '100 Tab'),
('Ob073', 'Enbatic', 'Powder', '36 Sak'),
('Ob074', 'Entrostop', 'Tablet', '24 Tab'),
('Ob075', 'Enziplex', 'Tablet', '200 Tab'),
('Ob076', 'Erithromycin 250 Mg', 'Capsul', '100 Cap'),
('Ob077', 'Erlamycetin Eye Zalf', 'Salep', '3.5 mg'),
('Ob078', 'Erphadrox Syrup', '', ''),
('Ob079', 'Evigra', 'Capsul', '100 Cap'),
('Ob080', 'Epiotic', 'Tetes Telinga', '30 ml'),
('Ob081', 'Famotidine 20 Mg', 'Tablet', '10 Tab'),
('Ob082', 'Fluimucil 200 Mg', 'Tablet', '60 Tab'),
('Ob083', 'Fluimucil  Injeksi', 'Injeksi', '3 ml'),
('Ob084', 'Furosemide', 'Tablet', '1 Box'),
('Ob085', 'Furosemide', 'Injeksi', '25 Amp'),
('Ob086', 'Flea N Tick Shampoo', 'Cc', ''),
('Ob087', 'Flamar Eye Drop', '', ''),
('Ob088', 'Gentamycin Oint', '', ''),
('Ob089', 'Gentasolon 5 Gr', 'Salep', '5 Gr'),
('Ob090', 'Genta-100', 'Injeksi', '100 ml'),
('Ob091', 'Gliserin', 'Liquid', '1000 ml'),
('Ob092', 'Glucortin (Dexamethasone)', 'Injeksi', '50 ml'),
('Ob093', 'Glucose', 'Injeksi', '500 ml'),
('Ob094', 'Glucose 40 % (D 40)', 'Injeksi', '25 ml'),
('Ob095', 'Gusanex ', 'Salep', ''),
('Ob096', 'Gusanex', 'Spray', ''),
('Ob097', 'Hematopan', 'Injeksi', '50 ml'),
('Ob098', 'Hepagard', 'Tablet', '30 Tab'),
('Ob099', 'Heparin Injeksi', '', ''),
('Ob100', 'Iberet', 'Tablet', '100 Tab'),
('Ob101', 'Ichtiyol', 'Salep', '15 gr'),
('Ob102', 'Imboost Force', 'Tablet', '30 Tab'),
('Ob103', 'Imux Syr', 'Syrup', '60 ml'),
('Ob104', 'Imux Tab', 'Tablet', '30 Tab'),
('Ob105', 'Imustrum', 'Syrup', '60 ml'),
('Ob106', 'Infalgin', 'Tablet', '1 Box'),
('Ob107', 'Immunair', 'Drop', '25 ml'),
('Ob108', 'Ivervet Injeksi', 'Injeksi', '50 ml'),
('Ob109', 'Interflox (Enrofloxacin)', 'Injeksi', '100 ml'),
('Ob110', 'Isprinol (Isoprenausin)', 'Tablet', '1 Box'),
('Ob111', 'Ka-En 1 B', 'Injeksi', '500 ml'),
('Ob112', 'Kaotin', 'Syrup', '60 ml'),
('Ob113', 'Ketamil', 'Injeksi', '50 ml'),
('Ob114', 'Ketoconazol 200 Mg', 'Tablet', '50'),
('Ob115', 'Ketoconazol  Salep', 'Salep', '10 gr'),
('Ob116', 'Kaji Beling', 'Tablet', ''),
('Ob117', 'Ketosteril', 'Tablet', ''),
('Ob118', 'Ketochlor', 'Shampoo', '237'),
('Ob119', 'Lactas Calcii', 'Tablet', ''),
('Ob120', 'Lactosa', 'Serbuk', '1 Kg'),
('Ob121', 'Limoxin-50 (Oxytetracyclin) ', 'Injeksi', '100 ml'),
('Ob122', 'Lidocain', 'Injeksi', '2 ml'),
('Ob123', 'Livron B-Plek', 'Tablet', '100 Tab'),
('Ob124', 'Livertan Salf', 'Salep', '15 gr'),
('Ob125', 'Loperamide', 'Tablet', '100 Tab'),
('Ob126', 'Marboxyl', 'Injeksi', ''),
('Ob127', 'Medazolam', 'Injeksi', '5 ml'),
('Ob128', 'Megaderm 8 Ml', '', '8 ml'),
('Ob129', 'Metronidazol 500 Mg (Gen)', 'Tablet', '1 Strip'),
('Ob130', 'Metronidazole', 'Injeksi', '100 ml'),
('Ob131', 'Methylergometrin', 'Tablet', '100 Tab'),
('Ob132', 'Methylprednisolon 16 Mg', 'Tablet', '30 Tab'),
('Ob133', 'Meylon ', '', ''),
('Ob134', 'Mgso4 Serbuk', 'Pack', '1 Kg'),
('Ob135', 'Mgso4 Otsu', 'Botol', ''),
('Ob136', 'Moloco', 'Tablet', '60 Tab'),
('Ob137', 'Nacl 500 Ml', 'Injeksi', '500 ml'),
('Ob138', 'Nature-E', 'Capsul', ''),
('Ob139', 'Neurobion Tablet', 'Tablet', '200 Tab'),
('Ob140', 'Neurobion Injeksi', 'Injeksi', '3 ml'),
('Ob141', 'Nephrolit', 'Tablet', '4 Tablet'),
('Ob142', 'Ofloxacin', 'Tablet', '100 Tab'),
('Ob143', 'Ondansetron', 'Injeksi', '2 ml'),
('Ob144', 'Osteoflam', 'Box', '60 Tab'),
('Ob145', 'Ostin', '', ''),
('Ob146', 'Otopain', '', ''),
('Ob147', 'Oxytetracycline Salep Kulit', 'Salep', '1 Box'),
('Ob148', 'Oxytocin', 'Injeksi', '50 ml'),
('Ob149', 'Perhidrol', 'Injeksi', '100 ml'),
('Ob150', 'Penstrep Operasi', 'Injeksi', '500 ml'),
('Ob151', 'Pk', '', '5 gr'),
('Ob152', 'Prednison', 'Tablet', '1 Botol'),
('Ob153', 'Primperan (Metoclopramide)', 'Tablet', 'Box'),
('Ob154', 'Primadex Forte', 'Tablet', '1 Box'),
('Ob155', 'Premaston', 'Tablet', '1 Box'),
('Ob156', 'Procain Penicillin G', 'Injeksi', '10 ml'),
('Ob157', 'Propranolol 10 Mg', '', ''),
('Ob158', 'Propranolol 40 Mg', '', ''),
('Ob159', 'Propovol/Trivam', 'Injeksi', '20 ml'),
('Ob160', 'Pyrantel Pamoat', 'Tablet', '100 Tab'),
('Ob161', 'Ranitidin', 'Injeksi', '2 ml (1 Box)'),
('Ob162', 'Ranitidine', 'Tablet', 'Box'),
('Ob163', 'Rd 5', 'Injeksi', '500 ml'),
('Ob164', 'Reverzine', 'Injeksi', '25 ml'),
('Ob165', 'Ringer Laktat', 'Injeksi', '500 ml'),
('Ob166', 'Reco Eye Drop', 'Tetes Mata', ''),
('Ob167', 'Reco Ear Drop', '', ''),
('Ob168', 'Rymadil', 'Capsul', '60 Tab'),
('Ob169', 'Scabimite', 'Salep', '10 gr'),
('Ob170', 'Sebazole Shampoo', 'Shampoo', '250 ml'),
('Ob171', 'Sotatic (Metoclpramide) Inj', 'Injeksi', '2 ml (1 Box)'),
('Ob172', 'Sibital Injeksi', '', ''),
('Ob173', 'Siclidon', 'Capsul', '1 Box (20 Tab)'),
('Ob174', 'Spiramycin', 'Capsul', '"50 Tab/1'),
('Ob175', 'Streptomycin', 'Injeksi', '10 ml'),
('Ob176', 'Silitong', 'Tablet', ''),
('Ob177', 'Thiamin', 'Tablet', '1000 Tab'),
('Ob178', 'Th4', 'Liquid', '1 L'),
('Ob179', 'Thrombogel Salep', 'Salep', '10 gr'),
('Ob180', 'Toelfedine', 'Injeksi', '30 ml'),
('Ob181', 'Transamin', 'Injeksi', '5 ml'),
('Ob182', 'Urdafalk', 'Capsul', '30 Tab'),
('Ob183', 'Vitamin A 6000 I.U', 'Tablet', '100 Tab'),
('Ob184', 'Vitamin B-1 Injeksi', 'Injeksi', '8 ml'),
('Ob185', 'Vitamin C (Extract C)', 'Injeksi', '1 Box (6)'),
('Ob186', 'Vitamin C', 'Tablet', '1000 Tab'),
('Ob187', 'Vit K Injeksi', 'Injeksi', '1 ml'),
('Ob188', 'Vit K Tablet', '', ''),
('Ob189', 'Vit B-Complek', 'Tablet', '1000 Tab'),
('Ob190', 'Vermiprazole(Albend.Cair)', 'Syrup', ''),
('Ob191', 'Viusid', '', ''),
('Ob192', 'Xylazine', 'Injeksi', '50 ml'),
('Ob193', 'Y-Rins', 'Drop', '120 ml'),
('Ob194', 'Zinc', 'Tablet', '1 Box');

-- --------------------------------------------------------

--
-- Table structure for table `daftartindakan`
--

CREATE TABLE IF NOT EXISTS `daftartindakan` (
  `id_tindakan` varchar(10) NOT NULL DEFAULT '',
  `kategori` text,
  `nama_tindakan` varchar(100) DEFAULT NULL,
  `satuan` text,
  PRIMARY KEY (`id_tindakan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftartindakan`
--

INSERT INTO `daftartindakan` (`id_tindakan`, `kategori`, `nama_tindakan`, `satuan`) VALUES
('tin001', 'Ortopedi', 'Fraktur humerus', 'Tindakan'),
('tin002', 'Ortopedi', 'Fraktur radius / ulna dgn pin', 'Tindakan'),
('tin003', 'Ortopedi', 'Fraktur radius / ulna dgn gips', 'Tindakan'),
('tin004', 'Ortopedi', 'Fraktur femur', 'Tindakan'),
('tin005', 'Ortopedi', 'Fraktur tibia fibula', 'Tindakan'),
('tin006', 'Ortopedi', 'Fraktur tarsal dgn gips', 'Tindakan'),
('tin007', 'Ortopedi', 'Fraktur maxila', 'Tindakan'),
('tin008', 'Ortopedi', 'Fraktur mandibula', 'Tindakan'),
('tin009', 'Ortopedi', 'Hip displasia akut (reposisi)', 'Tindakan'),
('tin010', 'Ortopedi', 'Hip displasia kronis ', 'Tindakan'),
('tin011', 'Ortopedi', 'Amputasi Extremitas', 'Tindakan'),
('tin012', 'Ortopedi', 'GIPS', 'Tindakan'),
('tin013', 'Ortopedi', 'Luxatio Patella', 'Tindakan'),
('tin014', 'Obsgin', 'OH anjing ', 'Tindakan'),
('tin015', 'Obsgin', 'OH Kucing', 'Tindakan'),
('tin016', 'Obsgin', 'Vasektomi anjing', 'Tindakan'),
('tin017', 'Obsgin', 'Operasi cesar anjing', 'Tindakan'),
('tin018', 'Obsgin', 'Perawatan anak anjing', 'Tindakan'),
('tin019', 'Obsgin', 'Operasi cesar kucing ', 'Tindakan'),
('tin020', 'Obsgin', 'Perawatan anak kucing', 'Tindakan'),
('tin021', 'Obsgin', 'Penanganan Partus normal', 'Tindakan'),
('tin022', 'Obsgin', 'Perawatan anak anj/kcg', 'Tindakan'),
('tin023', 'Obsgin', 'Kastrasi anjing', 'Tindakan'),
('tin024', 'Obsgin', 'Kastrasi kucing', 'Tindakan'),
('tin025', 'Obsgin', 'Pyometra', 'Tindakan'),
('tin026', 'Bedah Digesti', 'Gastropeksi ', 'Tindakan'),
('tin027', 'Bedah Digesti', 'Gastrotomi', 'Tindakan'),
('tin028', 'Bedah Digesti', 'Enterotomi', 'Tindakan'),
('tin029', 'Bedah Digesti', 'Enterektomi', 'Tindakan'),
('tin030', 'Bedah Digesti', 'Kolopeksi', 'Tindakan'),
('tin031', 'Bedah Digesti', 'Plolapsus rekti ', 'Tindakan'),
('tin032', 'Bedah Digesti', 'Hernia Umbilicalis', 'Tindakan'),
('tin033', 'Bedah Digesti', 'Hernia Scrotalis', 'Tindakan'),
('tin034', 'Bedah Digesti', 'Hernia Perinealis', 'Tindakan'),
('tin035', 'Bedah Digesti', 'Hernia Diafragmatica', 'Tindakan'),
('tin036', 'Bedah Digesti', 'Hernia Abdominalis', 'Tindakan'),
('tin037', 'Kosmetik-Terapi', 'Potong ekor (Terapi)', 'Tindakan'),
('tin038', 'Kosmetik-Terapi', 'Amputasi declaw (Terapi)', 'Tindakan'),
('tin039', 'Kosmetik-Terapi', 'Enteropion', 'Tindakan'),
('tin040', 'Kosmetik-Terapi', 'Enukleasi bulbul okuli', 'Tindakan'),
('tin041', 'Kosmetik-Terapi', 'Outhematom', 'Tindakan'),
('tin042', 'Kosmetik-Terapi', 'Otitis eksterna kronik', 'Tindakan'),
('tin043', 'Kosmetik-Terapi', 'Higroma', 'Tindakan'),
('tin044', 'Kosmetik-Terapi', 'Cerry Eye', 'Tindakan'),
('tin045', 'Bedah Tumor', 'Partial Mammectomy', 'Tindakan'),
('tin046', 'Bedah Tumor', 'Total Mammectomy', 'Tindakan'),
('tin047', 'Bedah Tumor', 'Lymphoma', 'Tindakan'),
('tin048', 'Bedah Tumor', 'Pappiloma', 'Tindakan'),
('tin049', 'Bedah Tumor', 'Venorum', 'Tindakan'),
('tin050', 'Urogenital', 'Penanganan Calculi Anjing', 'Tindakan'),
('tin051', 'Urogenital', 'Penanganan Calculi Kucing', 'Tindakan'),
('tin052', 'Urogenital', 'Cystotomi', 'Tindakan'),
('tin053', 'Urogenital', 'Urostrotomy', 'Tindakan'),
('tin054', 'Hewan Besar', 'Abses', 'Tindakan'),
('tin055', 'Hewan Besar', 'Myasis', 'Tindakan'),
('tin056', 'Hewan Besar', 'Footroot', 'Tindakan'),
('tin057', 'Hewan Besar', 'Trokarisasi', 'Tindakan'),
('tin058', 'Hewan Besar', 'Mastitis per putting', 'Tindakan'),
('tin059', 'Hewan Besar', 'Kastrasi', 'Tindakan'),
('tin060', 'Hewan Besar', 'Cesar', 'Tindakan'),
('tin061', 'Hewan Besar', 'Repensi plasenta', 'Tindakan'),
('tin062', 'Hewan Besar', 'Ruminotomi', 'Tindakan'),
('tin063', 'Hewan Besar', 'Fistula duodenum', 'Tindakan'),
('tin064', 'Hewan Besar', 'Partus normal', 'Tindakan'),
('tin065', 'Hewan Besar', 'Distokia', 'Tindakan'),
('tin066', 'Lain-Lain', 'Abses', 'Tindakan'),
('tin067', 'Lain-Lain', 'Penanganan Miasis', 'Tindakan'),
('tin068', 'Lain-Lain', 'Scaling', 'Tindakan'),
('tin069', 'Lain-Lain', 'Cabut Gigi', 'Gigi'),
('tin070', 'Lain-Lain', 'Potong Gigi', 'Gigi'),
('tin071', 'Lain-Lain', 'Thoracocyntesis', 'Tindakan'),
('tin072', 'Lain-Lain', 'Abdominalcyntesis', 'Tindakan'),
('tin073', 'Lain-Lain', 'Bumble foot', 'Tindakan'),
('tin074', 'Lain-Lain', 'Pyothorax', 'Tindakan'),
('tin075', 'Lain-Lain', 'Euthanasia', 'Tindakan'),
('tin076', 'Lain-Lain', 'Pemasangan Catheter', 'Tindakan'),
('tin077', 'Lain-Lain', 'Eksterpasi Harderia Gland (mata)', 'Tindakan'),
('tin078', 'Lain-Lain', 'Palatum', 'Tindakan'),
('tin079', 'Lain-Lain', 'Laparotomi', 'Tindakan'),
('tin080', 'Lain-Lain', 'Operasi kecil', 'Tindakan'),
('tin081', 'Lain-Lain', 'Jasa Potong Kuku', 'Tindakan'),
('tin082', 'Lain-Lain', 'Otopsi', 'Tindakan'),
('tin083', 'Rawat Inap Sehat', 'Kucing', 'Tindakan'),
('tin084', 'Rawat Inap Sehat', 'Anjing Kecil', 'Tindakan'),
('tin085', 'Rawat Inap Sehat', 'Anjing Besar', 'Tindakan'),
('tin086', 'Rawat Inap Sehat', 'USG', 'Tindakan'),
('tin087', 'Rawat Inap Sehat', 'Rontgen i/2 pose', 'Tindakan'),
('tin088', 'Rawat Inap Sehat', 'Rentgen (Dengan Bubur Barium)', 'Tindakan'),
('tin089', 'Rawat Inap Sehat', 'Nebulizer', 'Tindakan'),
('tin090', 'Anasthesi Gas', 'BB < 5 KG', 'Tindakan'),
('tin091', 'Anasthesi Gas', 'BB 5 KG - 10 KG', 'Tindakan'),
('tin092', 'Anasthesi Gas', 'BB 10 KG - 20 KG', 'Tindakan'),
('tin093', 'Anasthesi Gas', 'BB > 20 KG', 'Tindakan'),
('tin094', 'Grooming', 'Kelinci Panjang', 'Ekor'),
('tin095', 'Grooming', 'Kucing Kecil', 'Ekor'),
('tin096', 'Grooming', 'Kucing Panjang Persia/ Mix/ dll < 3 Kg', 'Ekor'),
('tin097', 'Grooming', 'Kucing Pendek Lokal < 3 Kg', 'Ekor'),
('tin098', 'Grooming', 'Kucing Sedang/ Besar', 'Ekor'),
('tin099', 'Grooming', 'Kucing Panjang Persia/ Mix/DLL  ? 3 Kg', 'Ekor'),
('tin100', 'Grooming', 'Kucing Pendek Lokal ? 3 Kg', 'Ekor'),
('tin101', 'Grooming', 'Anjing Kecil', 'Ekor'),
('tin102', 'Grooming', 'Anjing Panjang Golden/ Terrier ? 5 Kg', 'Ekor'),
('tin103', 'Grooming', 'Anjing Panjang Pit Bull/ Labrador/ dll ? 5 Kg', 'Ekor'),
('tin104', 'Grooming', 'Anjing Sedang/ Besar', 'Ekor'),
('tin105', 'Grooming', 'Anjing Panjang Golden/ Terrier > 5 Kg', 'Ekor'),
('tin106', 'Grooming', 'Anjing Panjang Pit Bull/ Labrador/ dll > 5 Kg', 'Ekor'),
('tin107', 'Vaksin', 'VANGUARD PLUS CPV - Anjing', 'Tindakan'),
('tin108', 'Vaksin', 'EURICAN 4 - Anjing', 'Tindakan'),
('tin109', 'Vaksin', 'VANGUARD PLUS  5/L - Anjing', 'Tindakan'),
('tin110', 'Vaksin', 'VANGUARD PLUS  5/CV-L - Anjing', 'Tindakan'),
('tin111', 'Vaksin', 'EURICAN 6 - Anjing', 'Tindakan'),
('tin112', 'Vaksin', 'VANGUARD PLUS  5/CV-L / 5/L + RABIES - Anjing', 'Tindakan'),
('tin113', 'Vaksin', 'EURICAN 7 - Anjing', 'Tindakan'),
('tin114', 'Vaksin', 'FELOCELL 3 - Kucing', 'Tindakan'),
('tin115', 'Vaksin', 'FELOCELL 3 + RABIES - Kucing', 'Tindakan'),
('tin116', 'Vaksin', 'FELOCELL 4 - Kucing', 'Tindakan'),
('tin117', 'Vaksin', 'DEFENSOR 3 - Kucing', 'Tindakan');

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE IF NOT EXISTS `data_pasien` (
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(50) DEFAULT NULL,
  `no_rm` varchar(50) DEFAULT NULL,
  `nama_pemilik` varchar(50) DEFAULT NULL,
  `nama_hewan` varchar(50) DEFAULT NULL,
  `jenis_hewan` varchar(50) DEFAULT NULL,
  `signalemen_ttl` date DEFAULT NULL,
  `signalemen_kelamin` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `status_antrian` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`waktu`, `id`, `no_registrasi`, `no_rm`, `nama_pemilik`, `nama_hewan`, `jenis_hewan`, `signalemen_ttl`, `signalemen_kelamin`, `username`, `status_antrian`) VALUES
('2016-05-20 03:13:30', 1, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', 1),
('2016-05-31 15:07:05', 2, '02', 'B02', 'nadia', 'buvi', 'anjing', '2016-05-02', 'betina', 'nadiakrtika', 0),
('2016-05-30 02:43:58', 3, '03', 'C03', 'dhika', 'otto', 'anjing', '2016-05-03', 'jantan', 'dhikashiswosoebrotho', 0),
('2016-05-31 15:06:32', 4, '04', 'D01', 'muin', 'cicicuit', 'burung', '2016-05-05', 'betina', 'muin@sentosa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inputrm`
--

CREATE TABLE IF NOT EXISTS `inputrm` (
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `no_rm` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_pemilik` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_hewan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `jenis_hewan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `signalemen_ttl` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `signalemen_kelamin` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_tenagamedis` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_mahasiswa` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `anamnesis` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `keadaan_umum` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `frek_nafas` int(11) DEFAULT NULL,
  `frek_pulsus` int(11) DEFAULT NULL,
  `temperatur_tubuh` int(11) DEFAULT NULL,
  `kulit_rambut` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `selaput_lendir` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `kelenjar_limfe` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `pernafasan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `peredaran_darah` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `pencernaan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `kelamin_perkencingan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `syaraf` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `anggota_gerak` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `lain_anamnesis` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `nama_pemeriksaan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `ket_lab` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `diagnosis` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `prognosis` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `nama_obat` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `jumlah_resep` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `satuan_resep` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `perintah_pembuatan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `petunjuk_penggunaan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `nama_tindakan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `qty_tindakan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `ket_tindakan` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `inputrm`
--

INSERT INTO `inputrm` (`waktu`, `id`, `no_registrasi`, `no_rm`, `nama_pemilik`, `nama_hewan`, `jenis_hewan`, `signalemen_ttl`, `signalemen_kelamin`, `username`, `nama_tenagamedis`, `nama_mahasiswa`, `anamnesis`, `keadaan_umum`, `frek_nafas`, `frek_pulsus`, `temperatur_tubuh`, `kulit_rambut`, `selaput_lendir`, `kelenjar_limfe`, `pernafasan`, `peredaran_darah`, `pencernaan`, `kelamin_perkencingan`, `syaraf`, `anggota_gerak`, `berat_badan`, `lain_anamnesis`, `nama_pemeriksaan`, `ket_lab`, `diagnosis`, `prognosis`, `nama_obat`, `jumlah_resep`, `satuan_resep`, `perintah_pembuatan`, `petunjuk_penggunaan`, `nama_tindakan`, `qty_tindakan`, `ket_tindakan`) VALUES
('2016-06-04 14:24:00', 1, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 14:27:02', 2, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 14:27:51', 3, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 14:39:16', 4, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 15:50:28', 5, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 15:51:14', 6, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 15:53:18', 7, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 15:54:15', 8, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 15:56:24', 9, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 15:57:54', 10, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 15:59:11', 11, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 18:59:52', 12, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', ''),
('2016-06-04 19:02:10', 13, '01', 'A01', 'dian', 'tutin', 'kucing', '2016-05-01', 'betina', 'dianaryaan', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `inputrminap`
--

CREATE TABLE IF NOT EXISTS `inputrminap` (
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `no_rm` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_pemilik` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_hewan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `diagnosis` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `signalemen_ttl` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `signalemen_kelamin` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_mahasiswa` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `semester_mahasiswa` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nama_obat` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jumlah_resep` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `satuan_resep` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `perintah_pembuatan` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `petunjuk_penggunaan` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pssm` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pengobatan` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ket_pengobatan` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statusinap` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `inputrminap`
--

INSERT INTO `inputrminap` (`waktu`, `id`, `no_registrasi`, `no_rm`, `nama_pemilik`, `nama_hewan`, `diagnosis`, `signalemen_ttl`, `signalemen_kelamin`, `berat_badan`, `username`, `nama_mahasiswa`, `semester_mahasiswa`, `nama_obat`, `jumlah_resep`, `satuan_resep`, `perintah_pembuatan`, `petunjuk_penggunaan`, `pssm`, `pengobatan`, `ket_pengobatan`, `statusinap`) VALUES
('2016-06-01 08:01:48', 1, '01', 'A01', 'dian', 'tutin', '', '2016-05-01', 'betina', 0, 'dianaryaan', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` int(1) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `entri` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `nama`, `entri`) VALUES
(1, 'admin', 'administrator', 1, 'administrator', 205);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
