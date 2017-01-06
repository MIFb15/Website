-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2017 at 09:17 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_dvd`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_barang`
--

CREATE TABLE IF NOT EXISTS `table_barang` (
  `ID_Barang` char(6) NOT NULL,
  `Judul` varchar(30) NOT NULL,
  `Genre` varchar(20) NOT NULL,
  `Harga_Barang` int(10) NOT NULL,
  `Jumlah_Barang` int(10) NOT NULL,
  `Gambar_Barang` int(100) NOT NULL,
  `Sinopsis` varchar(300) NOT NULL,
  PRIMARY KEY (`ID_Barang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_barang`
--

INSERT INTO `table_barang` (`ID_Barang`, `Judul`, `Genre`, `Harga_Barang`, `Jumlah_Barang`, `Gambar_Barang`, `Sinopsis`) VALUES
('001', 'Thirteen Terror Chapter 1', 'Horror', 5, 1, 0, 'Setiap sekolah memiliki masa lalu yang tidak ingin orang lain ketahui. Ada macam-macam kejadian yang tidak ingin orang orang bicarakan. Ada siswa yang namanya ingin orang orang lupakan dan ada rahasia yang menunggu untuk diungkapkan. Thirteen Terrors menceritakan tentang keadaan di setiap sekolah ya'),
('002', 'Miss Peregrine’s Home for Pecu', 'Adventure, Drama, Fa', 40, 1, 0, 'Menceritakan tentang seorang anak remaja bernama Jacob (Asa Butterfield) yang sadar dan menemukan dirinya berada di sebuah pulau misterius. Di tengah pulau itu, Jacob dipaksa untuk membantu sekelompok anak yang memiliki kekuatan khusus untuk melindugi mereka dari ancaman sesosok makhluk yang mengeri'),
('003', 'Sully', 'Biography, Drama', 40, 1, 0, 'Chesley Sullenberger menjadi pahlawan setelah meluncur pesawatnya bersama air di sungai Hudson dan dengan jasanya dia berhasil menyelamatkan nyawa sebanyak 155 orang. Pada tanggal 15 Januari 2009, dunia menyaksikan “Miracle on the Hudson” ketika kapten Sully Sullenberger (Tom Hanks) meluncur pesawat'),
('004', 'The Phenom', 'Drama , Family , Spo', 40, 1, 0, 'A Major League rookie pitcher loses control over his pitching and is sent down to the minor leagues| where he begins sessions with an unorthodox sports psychologist. In the process| hidden conflicts with his overbearing father are brought to light.'),
('005', 'Star Trek Beyond', 'Action, Adventure, S', 40, 1, 0, 'Bercerita tentang sebuah petualangan yang dilakukan oleh pesawat yang diketuai oleh Kapten James T. Kirk dan Spock. Pesawat induk USS Enterprise tiba tiba mendapat serangan mendadak dari sekelompok alien yang menyeramkan dan bertujuan mencari planet baru untuk mereka tempati bersama sama. Kapten Jam');

-- --------------------------------------------------------

--
-- Table structure for table `table_karyawan`
--

CREATE TABLE IF NOT EXISTS `table_karyawan` (
  `ID_Karyawan` char(6) NOT NULL,
  `Nama_Karyawan` varchar(20) NOT NULL,
  `Alamat_Karyawan` varchar(20) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `No_Hp` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Karyawan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_karyawan`
--

INSERT INTO `table_karyawan` (`ID_Karyawan`, `Nama_Karyawan`, `Alamat_Karyawan`, `Jenis_Kelamin`, `No_Hp`, `Password`) VALUES
('PF1001', 'Naufal', 'Probolinggo', 'Laki - lak', '082234251244', '123'),
('PF1002', 'Bram', 'Banyuwangi', 'Laki - lak', '081234251244', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
