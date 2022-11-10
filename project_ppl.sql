-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 01:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ppl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'tobiasmartin05@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`nip`, `nama`) VALUES
('', ''),
('196511071992031003', 'Drs. Eko Adi Sarwoko, M.Kom.'),
('197007051997021001', 'Priyo Sidik Sasongko, S.Si., M.Kom.'),
('197108111997021004', 'Dr. Aris Sugiharto, S.Si., M.Kom.'),
('197308291998022001', 'Beta Noranita, S.Si, M.Kom'),
('197404011999031002', 'Dr. Aris Puji Widodo, S.Si, M.T'),
('197601102009122002', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D.'),
('197805022005012002', 'Sukmawati Nur Endah, S.Si, M.Kom'),
('197805162003121001', 'Helmie Arif Wibawa, S.Si, M.Cs'),
('197902122008121002', 'Indra Waspada, ST, M.T.I'),
('197905242009121003', 'Sutikno, ST, M.Cs'),
('197907202003121002', 'Nurdin Bahtiar, S.Si, M.T'),
('198009142006041002', 'Edy Suharto, S.T., M.Kom.'),
('198010212005011003', 'Ragil Saputra, S.Si, M.Cs'),
('198104202005012001', 'Dr. Retno Kusumaningrum, S.Si, M.Kom'),
('198104212008121002', 'Panji Wisnu Wirawan, S.T., M.T.'),
('198106202015041002', 'Muhammad Malik Hakim, S.T., M.T.I.'),
('198203092006041002', 'Dr. Eng. Adi Wibowo, S.Si, M.Kom'),
('198302032006041002', 'Satriyo Adhy, S.Si, M.T'),
('198404112019031009', 'Fajar Agung Nugroho, S.Kom., M.Cs.'),
('198511252018032001', 'Rismiyati, B.Eng, M.Cs'),
('198803222020121010', 'Prajanto Wahyu Adi, M.Kom.'),
('198903032015042002', 'Khadijah, S.Kom, M.Cs'),
('H.7.1991120920220410', 'Adhe Setya Pramayoga, S.Kom., M.T.');

-- --------------------------------------------------------

--
-- Table structure for table `data_irs`
--

CREATE TABLE `data_irs` (
  `nim` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `sks_semester` varchar(255) NOT NULL,
  `sks_kumulatif` varchar(255) NOT NULL,
  `upload_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_irs`
--

INSERT INTO `data_irs` (`nim`, `semester`, `sks_semester`, `sks_kumulatif`, `upload_file`) VALUES
('24060120140040', '1', '21', '21', ''),
('24060120140040', '2', '20', '41', ''),
('24060120140049', '1', '21', '21', ''),
('24060120140049', '2', '24', '45', ''),
('24060120140049', '3', '21', '61', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_khs`
--

CREATE TABLE `data_khs` (
  `nim` varchar(255) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `sks_semester` varchar(10) NOT NULL,
  `sks_kumulatif` varchar(10) NOT NULL,
  `ip_semester` varchar(10) NOT NULL,
  `ip_kumulatif` varchar(10) NOT NULL,
  `upload_file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_khs`
--

INSERT INTO `data_khs` (`nim`, `semester`, `sks_semester`, `sks_kumulatif`, `ip_semester`, `ip_kumulatif`, `upload_file`) VALUES
('24060120120002', '2', '21', '21', '3.5', '3.5', ''),
('24060120120002', '3', '21', '21', '3.5', '3.5', ''),
('24060120120002', '4', '21', '21', '3.5', '3.5', ''),
('24060120140040', '1', '21', '21', '3.3', '3.3', ''),
('24060120140049', '1', '21', '21', '3.7', '3.7', 0x4952532e706466);

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`nim`, `nama`, `angkatan`, `status`, `alamat`, `phone`, `email`, `user_id`) VALUES
('240601160040', 'REY SUENTOT', 2016, 'UNDUR DIRI', '', '', '', 59),
('24060117140041', 'TOPIK AKBAR RAIZ', 2017, 'DO', 'jalan dipnoegoro', '564684651', '877878@gmail.com', 57),
('2406011714030', 'HASAN PARAMESTI', 2017, 'LULUS', '', '', '', 58),
('240601180043', 'WILDAN KAMALUDIN', 2018, 'AKTIF', '', '', '', 61),
('24060119140145', 'FARAH TISTI PARANPARA', 2019, 'LULUS', '', '', '', 55),
('24060120120002', 'JASON AL HILAL SABDA DEWA', 2020, 'AKTIF', 'Jalan Diponegoro', '081909338455', 'jason0@student.undip.ac.id', 49),
('24060120120018', 'WAHYU ARIF MAULANA', 2020, 'AKTIF', '', '', '', 51),
('24060120120030', 'ZARA ZETIRA PUTI', 2020, 'AKTIF', '', '', '', 50),
('24060120140040', 'Tobias Martin Suena', 2020, 'AKTIF', 'Jl. Rasamala B2/17', '081909338354', 'tobiasmartin05@students.undip.ac.id', 9),
('24060120140049', 'Angelica Debby Frandina', 2020, 'AKTIF', '', '', '', 10),
('24060120140057', 'ALIFFIO FADHIL MUHAMMAD NOOR', 2020, 'AKTIF', '', '', '', 53),
('24060120140078', 'MUHAMAD SULTAN JODI PERWIRA', 2020, 'AKTIF', '', '', '', 52),
('24060121140096', 'BRIANANDO GARNEDA LIANDRA', 2021, 'AKTIF', '', '', '', 43),
('24060121140128', 'ATHIYA PUTERI HIDAYAT', 2021, 'AKTIF', '', '', '', 42),
('24060121140144', 'ADITYA ARIF SETIAWAN', 2021, 'AKTIF', '', '', '', 39),
('24060121140152', 'ADRI AUDIFIRST', 2021, 'AKTIF', '', '', '', 40),
('24060121140160', 'ARYA DHEFFAN SHEVCHENKO', 2021, 'AKTIF', '', '', '', 41),
('24060122120012', 'FAISHAL BARIQ MAULANA', 2022, 'AKTIF', '', '', '', 44),
('24060122130047', 'TIRZA AURELLIA WIJAYA', 2022, 'AKTIF', '', '', '', 47),
('24060122130048', 'MUTIARA ALFAIZA SYAFARANI', 2022, 'AKTIF', '', '', '', 45),
('24060122130080', 'ALFONSO CLEMENT SUTANTIO', 2022, 'AKTIF', '', '', '', 46),
('24060122140140', 'DAFFA ALY MEGANENDRA', 2022, 'AKTIF', '', '', '', 48);

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa_pkl`
--

CREATE TABLE `data_mahasiswa_pkl` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `dosen_pembimbing` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mahasiswa_pkl`
--

INSERT INTO `data_mahasiswa_pkl` (`nim`, `nama`, `nilai`, `status`, `dosen_pembimbing`) VALUES
('24060118120003', 'MUHAMMAD RAFLI AKBAR', '-', 'SEDANG PKL', 'Edy Suharto, S.T., M.Kom.'),
('24060118120042', 'MUSTHAFA KAMAL FAISHAL', 'B+', 'LULUS', 'Dr. Aris Puji Widodo, S.Si, M.T'),
('24060118130083', 'MUHAMMAD SYAFIQ', '-', 'SEDANG PKL', 'Dr. Retno Kusumaningrum, S.Si, M.Kom'),
('24060119130047', 'DENISA PUTRI', 'A', 'LULUS', 'Sukmawati Nur Endah, S.Si, M.Kom'),
('24060120120001', 'RIJAL KURNIAWAN', '-', 'BELUM PKL', '-'),
('24060120120002', 'JASON AL HILAL SABDA DEWA', 'A+', 'LULUS', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D'),
('24060120120003', 'LABIB HABIBIE SANJAYA', '-', 'BELUM PKL', '-'),
('24060120120004', 'MELLIA ARYA FIRANUR SUKMA', 'B', 'LULUS', 'Panji Wisnu Wirawan, S.T., M.T.'),
('24060120120005', 'FARID ILHAM', '-', 'BELUM PKL', '-'),
('24060120120007', 'NURUL USWATUN HASANAH', '-', 'SEDANG PKL', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D'),
('24060120120009', 'SHABRINA AZIZNY', '-', 'BELUM PKL', '-'),
('24060120120010', 'FAYZA AULIA', '-', 'BELUM PKL', '-'),
('24060120120012', 'ADINDA DESTIFANY ZENNIARADINDA DESTIFANY ZENNIAR', '-', 'BELUM PKL', '-'),
('24060120120015', 'WASIS PAMBUDI', '-', 'BELUM PKL', '-'),
('24060120120018', 'WAHYU ARIF MAULANA', '-', 'BELUM PKL', '-'),
('24060120120021', 'AGNES TRIANA CYNTIANESA', '-', 'BELUM PKL', '-'),
('24060120120024', 'MAYA NURUL NIKMAH', '-', 'SEDANG PKL', 'Ragil Saputra, S.Si, M.Cs'),
('24060120120030', 'ZARA ZETIRA PUTI', '-', 'SEDANG PKL', 'Drs. Eko Adi Sarwoko, M.Kom.'),
('24060120120031', 'HASNA PARAMESTI AHMAD', '-', 'SEDANG PKL', 'Helmie Arif Wibawa, S.Si, M.Cs'),
('24060120120033', 'ARIFA ALIF MALICHA KHAIRUNNISA', '-', 'BELUM PKL', '-'),
('24060120130039', 'HIKMAL ARKAN NUR ZAIDAN', '-', 'SEDANG PKL', 'Fajar Agung Nugroho, S.Kom., M.Cs.'),
('24060120130041', 'Garry Gero', '-', 'SEDANG PKL', 'Fajar Agung Nugroho, S.Kom., M.Cs.'),
('24060120130052', 'SATRIA REZA RAMADHAN', '-', 'BELUM PKL', '-'),
('24060120130054', 'AULIA CHAIRUNISA PUTRI', '-', 'BELUM PKL', '-'),
('24060120130063', 'BINTANG ARYO BIMO WINANDA', '-', 'SEDANG PKL', 'Nurdin Bahtiar, S.Si, M.T'),
('24060120130064', 'MUHAMMAD NAUFAL TAUFIQI', '-', 'BELUM PKL', '-'),
('24060120130067', 'CHAERANI ERISTYAWATI', '-', 'SEDANG PKL', 'Panji Wisnu Wirawan, S.T., M.T.'),
('24060120130069', 'HAMID ALBAR NURRASYID', '-', 'BELUM PKL', '-'),
('24060120130072', 'R. DAMANHURI', '-', 'SEDANG PKL', 'Panji Wisnu Wirawan, S.T., M.T.'),
('24060120130073', 'RIFAN FATONI FEBRIANTO', '-', 'SEDANG PKL', 'Panji Wisnu Wirawan, S.T., M.T.'),
('24060120130075', 'FARID REZA NURHUDA', 'A+', 'LULUS', 'Sutikno, ST, M.Cs'),
('24060120130079', 'MUHAMMAD FARKHAN ADHITAMA', '-', 'BELUM PKL', '-'),
('24060120130081', 'ARJUNA WAHYU KUSUMA', '-', 'BELUM PKL', '-'),
('24060120130087', 'FAJAR IVANO GAMAWAN', '-', 'SEDANG PKL', 'Helmie Arif Wibawa, S.Si, M.Cs'),
('24060120130091', 'INDRA NIKO SAPUTRA', 'B', 'LULUS', 'Drs. Eko Adi Sarwoko, M.Kom.'),
('24060120130106', 'FAHREL GIBRAN ALGHANY', '-', 'SEDANG PKL', 'Panji Wisnu Wirawan, S.T., M.T.'),
('24060120130112', 'PUTRA PETANG', '-', 'BELUM PKL', '-'),
('24060120130114', 'ALFIAN PUTRA SETYAWAN', '-', 'SEDANG PKL', 'Sutikno, ST, M.Cs'),
('24060120130117', 'MUHAMMAD RAFLI AKBAR', '-', 'SEDANG PKL', 'Drs. Eko Adi Sarwoko, M.Kom.'),
('24060120130118', 'RAKE KEYLANA WANGSA', '-', 'BELUM PKL', '-'),
('24060120130120', 'AQSYA OCLIBEL ARFINIA', '-', 'BELUM PKL', '-'),
('24060120130121', 'FARREL SAMUEL NICHOLAS', '-', 'SEDANG PKL', 'Helmie Arif Wibawa, S.Si, M.Cs'),
('24060120130123', 'MUHAMMAD HAFIZH ROIHAN', '-', 'BELUM PKL', '-'),
('24060120130124', 'RATU AUBREY KHAIRANI', '-', 'BELUM PKL', '-'),
('24060120130127', 'JULIUS ADRIAN', '-', 'SEDANG PKL', 'Ragil Saputra, S.Si, M.Cs'),
('24060120130135', 'MUHAMMAD RIFQI ZAIDAN', '-', 'SEDANG PKL', 'Ragil Saputra, S.Si, M.Cs'),
('24060120140011', 'JODI', '-', 'SEDANG PKL', 'Ragil Saputra, S.Si, M.Cs'),
('24060120140033', 'ADEQ', '-', 'BELUM PKL', '-'),
('24060120140036', 'ADIP DWI SASONGKO', '-', 'BELUM PKL', '-'),
('24060120140040', 'TOBIAS MARTIN SUENA', '-', 'BELUM PKL', '-'),
('24060120140041', 'GISTA', '-', 'SEDANG PKL', 'Indra Waspada, ST, M.T.I'),
('24060120140042', 'NOVIA DEWI MAHARANI', '-', 'SEDANG PKL', 'Drs. Eko Adi Sarwoko, M.Kom.'),
('24060120140043', 'FARID KHOIRUR RIZAL', 'A', 'LULUS', 'Drs. Eko Adi Sarwoko, M.Kom.'),
('24060120140045', 'ZAKY LUTHFIADNAN HARWANTO', '-', 'BELUM PKL', '-'),
('24060120140049', 'ANGELICA DEBBY FRANDINA', '-', 'SEDANG PKL', 'Helmie Arif Wibawa, S.Si, M.Cs'),
('24060120140051', 'DANIEL SAHAT PARULIAN SITUMEANG', '-', 'SEDANG PKL', 'Indra Waspada, ST, M.T.I'),
('24060120140055', 'PUTRA FAJAR', 'B', 'LULUS', 'Nurdin Bahtiar, S.Si, M.T'),
('24060120140057', 'ALIFFIO FADHIL MUHAMMAD NOOR', '-', 'BELUM PKL', '-'),
('24060120140060', 'MUHAMMAD ADIL RAJA SAPUTRA', '-', 'BELUM PKL', '-'),
('24060120140075', 'DENNY CAKWE', '-', 'BELUM PKL', '-'),
('24060120140078', 'MUHAMAD SULTAN JODI PERWIRA', '-', 'SEDANG PKL', 'Indra Waspada, ST, M.T.I'),
('24060120140082', 'NAJIB RIFAI INDRAYANTO', '-', 'BELUM PKL', '-'),
('24060120140084', 'HANIF NURUL FAHMI', '-', 'SEDANG PKL', 'Indra Waspada, ST, M.T.I'),
('24060120140085', 'MICHAEL ARGA SIAHAAN', '-', 'SEDANG PKL', 'Panji Wisnu Wirawan, S.T., M.T.'),
('24060120140088', 'ASY-SYIFA AL', '-', 'BELUM PKL', '-'),
('24060120140090', 'DEVITA RISTIYANTI', '-', 'BELUM PKL', '-'),
('24060120140094', 'Budi Binanto', '-', 'BELUM PKL', '-'),
('24060120140097', 'MUHAMAD FIQIH IKHSAN', '-', 'SEDANG PKL', 'Ragil Saputra, S.Si, M.Cs'),
('24060120140099', 'FARHAN DWICAHYO', '-', 'SEDANG PKL', 'Helmie Arif Wibawa, S.Si, M.Cs'),
('24060120140103', 'VIGYANTARA DENTA WARDANA PRABOWO', '-', 'BELUM PKL', '-'),
('24060120140105', 'ARSYA HENDRATNO PUTRI', '-', 'SEDANG PKL', 'Indra Waspada, ST, M.T.I'),
('24060120140109', 'BINTANG GANDIYO', '-', 'BELUM PKL', '-'),
('24060120140111', 'VITO AHMAD HUSEIN', '-', 'BELUM PKL', '-'),
('24060120140126', 'WILDAN KAMAL ALLAM', '-', 'SEDANG PKL', 'Indra Waspada, ST, M.T.I'),
('24060120140129', 'BALQIS YUSRIYA ZAHIDA', '-', 'BELUM PKL', '-'),
('24060120140132', 'MUHAMMAD AGISNI', '-', 'BELUM PKL', '-'),
('24060120140133', 'DANANG WISNU PRAYOGA', '-', 'BELUM PKL', '-'),
('24060120140136', 'BENHARD SIMANULLANG', '-', 'SEDANG PKL', 'Indra Waspada, ST, M.T.I'),
('24060120140138', 'FATURRAHMAN ALHARITSZOE', '-', 'SEDANG PKL', 'Indra Waspada, ST, M.T.I'),
('24060120140141', 'NAUFAL RANDIKA PARIKESIT', '-', 'BELUM PKL', '-'),
('24060120140142', 'ANDIRA FAQIH MUHAMMAD', '-', 'SEDANG PKL', 'Sutikno, ST, M.Cs'),
('24060120140144', 'MUHAMMAD DRAJAT DANY DARMAWAN', '-', 'BELUM PKL', '-'),
('24060120140145', 'FARAH TISTI PARANPARA', '-', 'SEDANG PKL', 'Panji Wisnu Wirawan, S.T., M.T.'),
('24060120140151', 'ANNAS BACHTIAR', '-', 'SEDANG PKL', 'Ragil Saputra, S.Si, M.Cs'),
('24060120140153', 'ILMA DZAKIAH MULIA', '-', 'BELUM PKL', '-'),
('24060120140154', 'ANISATUL MARIFAH', '-', 'SEDANG PKL', 'Nurdin Bahtiar, S.Si, M.T'),
('24060120140156', 'SADIRA TARUNA CALVINDORO', '-', 'SEDANG PKL', 'Helmie Arif Wibawa, S.Si, M.Cs'),
('24060120140157', 'MUHAMMAD NAUFAL', '-', 'BELUM PKL', '-'),
('24060120140159', 'DIMAS WAHYU ARDIYANTO', '-', 'SEDANG PKL', 'Sutikno, ST, M.Cs'),
('24060120140165', 'YOSEPH HATIGORAN SIMANJUNTAK', '-', 'BELUM PKL', '-'),
('24060120140167', 'AMELIA NADHIFAH DHEA SUWANTO', '-', 'BELUM PKL', '-'),
('24060120140168', 'AMELIA MELINDA', '-', 'BELUM PKL', '-'),
('24060120140171', 'MUHAMMAD HILMY TSANY', '-', 'BELUM PKL', '-');

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa_skripsi`
--

CREATE TABLE `data_mahasiswa_skripsi` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `dosen_pembimbing` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mahasiswa_skripsi`
--

INSERT INTO `data_mahasiswa_skripsi` (`nim`, `nama`, `status`, `nilai`, `dosen_pembimbing`) VALUES
('24060118120003', 'MUHAMMAD RAFLI AKBAR', 'BELUM SKRIPSI', '-', '-'),
('24060118120042', 'MUSTHAFA KAMAL FAISHAL', 'LULUS', 'B+', 'Dr. Aris Puji Widodo, S.Si, M.T'),
('24060118130083', 'MUHAMMAD SYAFIQ', 'BELUM SKRIPSI', '-', '-'),
('24060119130047', 'DENISA PUTRI', 'LULUS', 'A', 'Sukmawati Nur Endah, S.Si, M.Kom'),
('24060120120001', 'RIJAL KURNIAWAN', 'BELUM SKRIPSI', '-', '-'),
('24060120120002', 'JASON AL HILAL SABDA DEWA', 'LULUS', 'A+', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D'),
('24060120120003', 'LABIB HABIBIE SANJAYA', 'BELUM SKRIPSI', '-', '-'),
('24060120120004', 'MELLIA ARYA FIRANUR SUKMA', 'LULUS', 'B', 'Panji Wisnu Wirawan, S.T., M.T.'),
('24060120120005', 'FARID ILHAM', 'BELUM SKRIPSI', '-', '-'),
('24060120120007', 'NURUL USWATUN HASANAH', 'SEDANG SKRIPSI', '-', 'Dinar Mutiara K N, S.T., M.InfoTech.(Comp)., Ph.D'),
('24060120120009', 'SHABRINA AZIZNY', 'SEDANG SKRIPSI', '-', 'Indra Waspada, ST, M.T.I'),
('24060120120010', 'FAYZA AULIA', 'BELUM SKRIPSI', '-', '-'),
('24060120120012', 'ADINDA DESTIFANY ZENNIARADINDA DESTIFANY ZENNIAR', 'BELUM SKRIPSI', '-', '-'),
('24060120120015', 'WASIS PAMBUDI', 'BELUM SKRIPSI', '-', '-'),
('24060120120018', 'WAHYU ARIF MAULANA', 'BELUM SKRIPSI', '-', '-'),
('24060120120021', 'AGNES TRIANA CYNTIANESA', 'BELUM SKRIPSI', '-', '-'),
('24060120120024', 'MAYA NURUL NIKMAH', 'BELUM SKRIPSI', '-', '-'),
('24060120120030', 'ZARA ZETIRA PUTI', 'BELUM SKRIPSI', '-', '-'),
('24060120120031', 'HASNA PARAMESTI AHMAD', 'BELUM SKRIPSI', '-', '-'),
('24060120120033', 'ARIFA ALIF MALICHA KHAIRUNNISA', 'BELUM SKRIPSI', '-', '-'),
('24060120130039', 'HIKMAL ARKAN NUR ZAIDAN', 'BELUM SKRIPSI', '-', '-'),
('24060120130041', 'Garry Gero', 'SEDANG SKRIPSI', '-', 'Dr. Aris Puji Widodo, S.Si, M.T'),
('24060120130052', 'SATRIA REZA RAMADHAN', 'SEDANG SKRIPSI', '-', 'Dr. Aris Puji Widodo, S.Si, M.T'),
('24060120130054', 'AULIA CHAIRUNISA PUTRI', 'BELUM SKRIPSI', '-', '-'),
('24060120130063', 'BINTANG ARYO BIMO WINANDA', 'SEDANG SKRIPSI', '-', 'Indra Waspada, ST, M.T.I'),
('24060120130064', 'MUHAMMAD NAUFAL TAUFIQI', 'SEDANG SKRIPSI', '-', 'Indra Waspada, ST, M.T.I'),
('24060120130067', 'CHAERANI ERISTYAWATI', 'BELUM SKRIPSI', '-', '-'),
('24060120130069', 'HAMID ALBAR NURRASYID', 'SEDANG SKRIPSI', '-', 'Helmie Arif Wibawa, S.Si, M.Cs'),
('24060120130072', 'R. DAMANHURI', 'SEDANG SKRIPSI', '-', 'Indra Waspada, ST, M.T.I'),
('24060120130073', 'RIFAN FATONI FEBRIANTO', 'BELUM SKRIPSI', '-', '-'),
('24060120130075', 'FARID REZA NURHUDA', 'LULUS', 'A+', 'Helmie Arif Wibawa, S.Si, M.Cs'),
('24060120130079', 'MUHAMMAD FARKHAN ADHITAMA', 'SEDANG SKRIPSI', '-', 'Drs. Eko Adi Sarwoko, M.Kom.'),
('24060120130081', 'ARJUNA WAHYU KUSUMA', 'BELUM SKRIPSI', '-', '-'),
('24060120130087', 'FAJAR IVANO GAMAWAN', 'BELUM SKRIPSI', '-', '-'),
('24060120130091', 'INDRA NIKO SAPUTRA', 'LULUS', 'B', 'Drs. Eko Adi Sarwoko, M.Kom.'),
('24060120130106', 'FAHREL GIBRAN ALGHANY', 'SEDANG SKRIPSI', '-', 'Indra Waspada, ST, M.T.I'),
('24060120130112', 'PUTRA PETANG', 'BELUM SKRIPSI', '-', '-'),
('24060120130114', 'ALFIAN PUTRA SETYAWAN', 'BELUM SKRIPSI', '-', '-'),
('24060120130117', 'MUHAMMAD RAFLI AKBAR', 'BELUM SKRIPSI', '-', '-'),
('24060120130118', 'RAKE KEYLANA WANGSA', 'BELUM SKRIPSI', '-', '-'),
('24060120130120', 'AQSYA OCLIBEL ARFINIA', 'BELUM SKRIPSI', '-', '-'),
('24060120130121', 'FARREL SAMUEL NICHOLAS', 'SEDANG SKRIPSI', '-', 'Panji Wisnu Wirawan, S.T., M.T.'),
('24060120130123', 'MUHAMMAD HAFIZH ROIHAN', 'BELUM SKRIPSI', '-', '-'),
('24060120130124', 'RATU AUBREY KHAIRANI', 'SEDANG SKRIPSI', '-', 'Ragil Saputra, S.Si, M.Cs'),
('24060120130127', 'JULIUS ADRIAN', 'BELUM SKRIPSI', '-', '-'),
('24060120130135', 'MUHAMMAD RIFQI ZAIDAN', 'BELUM SKRIPSI', '-', '-'),
('24060120140011', 'JODI', 'BELUM SKRIPSI', '-', '-'),
('24060120140033', 'ADEQ', 'BELUM SKRIPSI', '-', '-'),
('24060120140036', 'ADIP DWI SASONGKO', 'BELUM SKRIPSI', '-', '-'),
('24060120140040', 'TOBIAS MARTIN SUENA', 'BELUM SKRIPSI', '-', '-'),
('24060120140041', 'GISTA', 'BELUM SKRIPSI', '-', '-'),
('24060120140042', 'NOVIA DEWI MAHARANI', 'SEDANG SKRIPSI', '-', 'Indra Waspada, ST, M.T.I'),
('24060120140043', 'FARID KHOIRUR RIZAL', 'LULUS', 'A', 'Helmie Arif Wibawa, S.Si, M.Cs'),
('24060120140045', 'ZAKY LUTHFIADNAN HARWANTO', 'SEDANG SKRIPSI', '-', 'Rismiyati, B.Eng, M.Cs'),
('24060120140049', 'ANGELICA DEBBY FRANDINA', 'SEDANG SKRIPSI', '-', 'Panji Wisnu Wirawan, S.T., M.T.'),
('24060120140051', 'DANIEL SAHAT PARULIAN SITUMEANG', 'BELUM SKRIPSI', '-', '-'),
('24060120140055', 'PUTRA FAJAR', 'LULUS', 'B', 'Indra Waspada, ST, M.T.I'),
('24060120140057', 'ALIFFIO FADHIL MUHAMMAD NOOR', 'SEDANG SKRIPSI', '-', 'Ragil Saputra, S.Si, M.Cs'),
('24060120140060', 'MUHAMMAD ADIL RAJA SAPUTRA', 'SEDANG SKRIPSI', '-', 'Edy Suharto, S.T., M.Kom.'),
('24060120140075', 'DENNY CAKWE', 'BELUM SKRIPSI', '-', '-'),
('24060120140078', 'MUHAMAD SULTAN JODI PERWIRA', 'SEDANG SKRIPSI', '-', 'Edy Suharto, S.T., M.Kom.'),
('24060120140082', 'NAJIB RIFAI INDRAYANTO', 'SEDANG SKRIPSI', '-', 'Rismiyati, B.Eng, M.Cs'),
('24060120140084', 'HANIF NURUL FAHMI', 'SEDANG SKRIPSI', '-', 'Edy Suharto, S.T., M.Kom.'),
('24060120140085', 'MICHAEL ARGA SIAHAAN', 'SEDANG SKRIPSI', '-', 'Edy Suharto, S.T., M.Kom.'),
('24060120140088', 'ASY-SYIFA AL', 'SEDANG SKRIPSI', '-', 'Khadijah, S.Kom, M.Cs'),
('24060120140090', 'DEVITA RISTIYANTI', 'SEDANG SKRIPSI', '-', 'Khadijah, S.Kom, M.Cs'),
('24060120140094', 'Budi Binanto', 'BELUM SKRIPSI', '-', '-'),
('24060120140097', 'MUHAMAD FIQIH IKHSAN', 'BELUM SKRIPSI', '-', '-'),
('24060120140099', 'FARHAN DWICAHYO', 'BELUM SKRIPSI', '-', '-'),
('24060120140103', 'VIGYANTARA DENTA WARDANA PRABOWO', 'BELUM SKRIPSI', '-', '-'),
('24060120140105', 'ARSYA HENDRATNO PUTRI', 'SEDANG SKRIPSI', '-', 'Khadijah, S.Kom, M.Cs'),
('24060120140109', 'BINTANG GANDIYO', 'BELUM SKRIPSI', '-', '-'),
('24060120140111', 'VITO AHMAD HUSEIN', 'BELUM SKRIPSI', '-', '-'),
('24060120140126', 'WILDAN KAMAL ALLAM', 'BELUM SKRIPSI', '-', '-'),
('24060120140129', 'BALQIS YUSRIYA ZAHIDA', 'BELUM SKRIPSI', '-', '-'),
('24060120140132', 'MUHAMMAD AGISNI', 'SEDANG SKRIPSI', '-', 'Rismiyati, B.Eng, M.Cs'),
('24060120140133', 'DANANG WISNU PRAYOGA', 'SEDANG SKRIPSI', '-', 'Drs. Eko Adi Sarwoko, M.Kom.'),
('24060120140136', 'BENHARD SIMANULLANG', 'BELUM SKRIPSI', '-', '-'),
('24060120140138', 'FATURRAHMAN ALHARITSZOE', 'SEDANG SKRIPSI', '-', 'Khadijah, S.Kom, M.Cs'),
('24060120140141', 'NAUFAL RANDIKA PARIKESIT', 'SEDANG SKRIPSI', '-', 'Dr. Retno Kusumaningrum, S.Si, M.Kom'),
('24060120140142', 'ANDIRA FAQIH MUHAMMAD', 'BELUM SKRIPSI', '-', '-'),
('24060120140144', 'MUHAMMAD DRAJAT DANY DARMAWAN', 'SEDANG SKRIPSI', '-', 'Dr. Aris Puji Widodo, S.Si, M.T'),
('24060120140145', 'FARAH TISTI PARANPARA', 'SEDANG SKRIPSI', '-', 'Rismiyati, B.Eng, M.Cs'),
('24060120140151', 'ANNAS BACHTIAR', 'SEDANG SKRIPSI', '-', 'Dr. Retno Kusumaningrum, S.Si, M.Kom'),
('24060120140153', 'ILMA DZAKIAH MULIA', 'BELUM SKRIPSI', '-', '-'),
('24060120140154', 'ANISATUL MARIFAH', 'BELUM SKRIPSI', '-', '-'),
('24060120140156', 'SADIRA TARUNA CALVINDORO', 'SEDANG SKRIPSI', '-', 'Dr. Retno Kusumaningrum, S.Si, M.Kom'),
('24060120140157', 'MUHAMMAD NAUFAL', 'SEDANG SKRIPSI', '-', 'Beta Noranita, S.Si, M.Kom'),
('24060120140159', 'DIMAS WAHYU ARDIYANTO', 'SEDANG SKRIPSI', '-', 'Beta Noranita, S.Si, M.Kom'),
('24060120140165', 'YOSEPH HATIGORAN SIMANJUNTAK', 'SEDANG SKRIPSI', '-', 'Beta Noranita, S.Si, M.Kom'),
('24060120140167', 'AMELIA NADHIFAH DHEA SUWANTO', 'SEDANG SKRIPSI', '-', 'Dr. Retno Kusumaningrum, S.Si, M.Kom'),
('24060120140168', 'AMELIA MELINDA', 'SEDANG SKRIPSI', '-', 'Rismiyati, B.Eng, M.Cs'),
('24060120140171', 'MUHAMMAD HILMY TSANY', 'BELUM SKRIPSI', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `data_pkl`
--

CREATE TABLE `data_pkl` (
  `nim` varchar(255) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `status_pkl` varchar(255) NOT NULL,
  `nilai_pkl` varchar(255) NOT NULL,
  `dosen_pembimbing` varchar(255) NOT NULL,
  `upload_file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pkl`
--

INSERT INTO `data_pkl` (`nim`, `semester`, `status_pkl`, `nilai_pkl`, `dosen_pembimbing`, `upload_file`) VALUES
('24060120140040', '11', 'LULUS', 'B', 'Drs. Eko Adi Sarwoko, M.Kom.', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_skripsi`
--

CREATE TABLE `data_skripsi` (
  `nim` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `status_skripsi` varchar(255) NOT NULL,
  `nilai_skripsi` varchar(255) NOT NULL,
  `lama_studi` varchar(255) NOT NULL,
  `tanggal_sidang` varchar(255) NOT NULL,
  `upload_file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_skripsi`
--

INSERT INTO `data_skripsi` (`nim`, `semester`, `status_skripsi`, `nilai_skripsi`, `lama_studi`, `tanggal_sidang`, `upload_file`) VALUES
('24060120140040', '10', 'LULUS', 'A', '10', '12/12/2019', '');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `nimnip` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Departemen','Dosen','Mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id`, `nimnip`, `nama_lengkap`, `password`, `level`) VALUES
(1, '198611050214011685', 'Benny Nugroho', '202cb962ac59075b964b07152d234b70', 'Admin'),
(2, '197007051997021001', 'Priyo Sidik Sasongko, S.Si., M.Kom.', '202cb962ac59075b964b07152d234b70', 'Dosen'),
(3, '199406050220071043', 'Anang Ardiyanto', '202cb962ac59075b964b07152d234b70', 'Departemen'),
(9, '24060120140040', 'Tobias Martin Suena', '202cb962ac59075b964b07152d234b70', 'Mahasiswa'),
(10, '24060120140049', 'Angelica Debby Frandina', '202cb962ac59075b964b07152d234b70', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `data_irs`
--
ALTER TABLE `data_irs`
  ADD PRIMARY KEY (`nim`,`semester`);

--
-- Indexes for table `data_khs`
--
ALTER TABLE `data_khs`
  ADD PRIMARY KEY (`nim`,`semester`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `data_mahasiswa_pkl`
--
ALTER TABLE `data_mahasiswa_pkl`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `data_mahasiswa_skripsi`
--
ALTER TABLE `data_mahasiswa_skripsi`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `data_pkl`
--
ALTER TABLE `data_pkl`
  ADD PRIMARY KEY (`nim`,`semester`);

--
-- Indexes for table `data_skripsi`
--
ALTER TABLE `data_skripsi`
  ADD PRIMARY KEY (`nim`,`semester`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
