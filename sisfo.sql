-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 08:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_dosen`
--

CREATE TABLE `absensi_dosen` (
  `id_absensi` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `absensi_mhs`
--

CREATE TABLE `absensi_mhs` (
  `id_absensi` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `kompensasi` int(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan_1`
--

CREATE TABLE `bimbingan_1` (
  `id` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `nim` int(15) NOT NULL,
  `tanggal_1` date NOT NULL,
  `waktu_1` time NOT NULL,
  `tempat_1` varchar(100) NOT NULL,
  `approval_1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan_2`
--

CREATE TABLE `bimbingan_2` (
  `id` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `tanggal_2` date NOT NULL,
  `waktu_2` time NOT NULL,
  `tempat_2` varchar(100) NOT NULL,
  `approval_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `homebase` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `kelamin` enum('L','P','','') NOT NULL,
  `alamat` text NOT NULL,
  `fingerprint` varchar(255) NOT NULL,
  `id_card` varchar(255) NOT NULL,
  `id_ktp` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `homebase`, `email`, `no_telp`, `kelamin`, `alamat`, `fingerprint`, `id_card`, `id_ktp`, `foto`) VALUES
('3.33.17.1.01', 'anda', 'D4', 'anda@gmail.com', 817281028, 'L', 'kebon jeruk', '', '', '', 'default.png'),
('3.33.17.1.18', 'ariyana', 'D3', 'ari@gmail.com', 81219263, 'L', 'wakanda', '', '', '', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_jabatan`
--

CREATE TABLE `dosen_jabatan` (
  `id_dosen_jabatan` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `id_jabatan` varchar(100) NOT NULL,
  `tahun_awal` year(4) NOT NULL,
  `tahun_akhir` year(4) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `hari` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(255) NOT NULL,
  `no_user` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `no_user`, `pass`, `level`) VALUES
(1, '3.33.17.1.17', '202cb962ac59075b964b07152d234b70', 'mahasiswa'),
(2, 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, '3.33.17.1.18', '202cb962ac59075b964b07152d234b70', 'kaprodi'),
(4, '3.33.17.1.01', '123', 'dosen'),
(5, '2345', '123', 'staff_tmr'),
(6, '3456', '123', 'staff_brt'),
(7, '4567', '123', 'staff_prodi');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `homebase` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `kelamin` enum('L','P','','') NOT NULL,
  `alamat` text NOT NULL,
  `fingerprint` varchar(255) NOT NULL,
  `id_card` varchar(255) NOT NULL,
  `id_ktp` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `homebase`, `email`, `no_telp`, `kelamin`, `alamat`, `fingerprint`, `id_card`, `id_ktp`, `foto`) VALUES
('3.33.17.1.17', 'Rifqi Daffa', 'D3', 'ulala@gmail.com', 817281028, 'L', 'gedawang bor', '', '', '', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode_matkul` int(11) NOT NULL,
  `nama_matkul` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `sks` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `no_user` varchar(100) NOT NULL,
  `nip_staff` varchar(100) NOT NULL,
  `id_tools` varchar(100) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `jml_pinjam` int(100) NOT NULL,
  `kondisi_pinjam` varchar(100) NOT NULL,
  `approval_pinjam` varchar(100) NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `jml_kembali` int(100) NOT NULL,
  `kondisi_kembali` varchar(100) NOT NULL,
  `approval_kembali` varchar(100) NOT NULL,
  `stok_terakhir` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `persyaratan_sidang`
--

CREATE TABLE `persyaratan_sidang` (
  `id` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `toefl` varchar(100) NOT NULL,
  `pesima` varchar(100) NOT NULL,
  `ldk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `nip_staff` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelamin` enum('L','P','','') NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `homebase` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ta_dosen`
--

CREATE TABLE `ta_dosen` (
  `id` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `status_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ta_mahasiswa`
--

CREATE TABLE `ta_mahasiswa` (
  `id` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ta_sempro`
--

CREATE TABLE `ta_sempro` (
  `id` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `status_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ta_sidang`
--

CREATE TABLE `ta_sidang` (
  `id` int(11) NOT NULL,
  `id_ta` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `status_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id_tools` varchar(100) NOT NULL,
  `nama_tools` varchar(100) NOT NULL,
  `stok_awal` int(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `desk_tools` text NOT NULL,
  `image_tools` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `id` int(11) NOT NULL,
  `judul_ta` varchar(100) NOT NULL,
  `abstrak` text NOT NULL,
  `file_1` varchar(100) NOT NULL,
  `status_1` varchar(100) NOT NULL,
  `dosbing_1` varchar(100) NOT NULL,
  `dosbing_2` varchar(100) NOT NULL,
  `tanggal_sidang` datetime NOT NULL,
  `tempat_sidang` varchar(100) NOT NULL,
  `file_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_dosen`
--
ALTER TABLE `absensi_dosen`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `absensi_mhs`
--
ALTER TABLE `absensi_mhs`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `bimbingan_2`
--
ALTER TABLE `bimbingan_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `dosen_jabatan`
--
ALTER TABLE `dosen_jabatan`
  ADD PRIMARY KEY (`id_dosen_jabatan`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`kode_matkul`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `persyaratan_sidang`
--
ALTER TABLE `persyaratan_sidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`nip_staff`);

--
-- Indexes for table `ta_dosen`
--
ALTER TABLE `ta_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_mahasiswa`
--
ALTER TABLE `ta_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_sempro`
--
ALTER TABLE `ta_sempro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ta_sidang`
--
ALTER TABLE `ta_sidang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tools`);

--
-- Indexes for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_dosen`
--
ALTER TABLE `absensi_dosen`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `absensi_mhs`
--
ALTER TABLE `absensi_mhs`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bimbingan_2`
--
ALTER TABLE `bimbingan_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosen_jabatan`
--
ALTER TABLE `dosen_jabatan`
  MODIFY `id_dosen_jabatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `kode_matkul` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persyaratan_sidang`
--
ALTER TABLE `persyaratan_sidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ta_dosen`
--
ALTER TABLE `ta_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ta_mahasiswa`
--
ALTER TABLE `ta_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ta_sempro`
--
ALTER TABLE `ta_sempro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ta_sidang`
--
ALTER TABLE `ta_sidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
