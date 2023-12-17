-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 01:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentahan-rodagila`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `nama_barang`, `harga`, `keterangan`, `stok`, `gambar`, `tgl`) VALUES
(1, 7, 'TOPI BASEBALL', 35000.00, 'TOPI BASEBALL PRIA GOLF SPORT FASHION\n\nSpesifikasi :\n1. Material : Katun\n2. Dimensi :\n- Ukuran 1size adjustable untuk lingkar kepala : 54-60 +/- 1cm\n- Tinggi : 11 +/- 1cm\n- Visor/brim/lidah topi : 8 +/- 1cm\n\n\nDaily Activities Use\nTopi sangat cocok untuk di gunakan dalam kegiatan sehari hari ataupun olahraga di luar ruangan. Kepala anda tidak akan terkena panas terik sinar matahari secara langsung yang mungkin dapat mempengaruhi kondisi tubuh anda. Dapat Anda gunakan sebagai fashion model sehari-hari.\n\nCreative Design\nDesain topi snapback kasual yang keren dan pilihan warna yang menarik membuat topi ini sangat cocok untuk di gunakan. Menambah keren penampilan kasual anda sekaligus melindungi kepala anda.\n\nResizable Strap\nTopi dapat disesuaikan dengan semua ukuran kepala dengan strap yang tersedia pada bagian belakang topi.\n\nGood Quality Material\nTopi di buat dengan material yang baik sehingga kualitasnya tidak akan menurun walaupun selalu terkena sinar mata\n\nPaket Penjualan:\n1x Topi baseball\n\nWarna produk dalam gambar mungkin tidak 100% sama dengan warna asli, dikarenakan faktor lain saat pemotretan\n\nBARANG PASTI DI CEK SEBELUM DIKIRIM.\n\nPACKING DIJAMIN AMAN. Kesalahan oleh pihak pengiriman adalah diluar tanggung jawab kami.', 100, 'brg1.jpg', '2023-12-14 09:29:13'),
(2, 6, 'SEPATU SNEAKERS', 125000.00, 'Tunjukkan #localpride kalian dengan menggunakan produk dari brand lokal Roda Gila Store !!\n\nSeperti Sepatu Sneakers Revive yang merupakan produk dari brand Roda Gila Store yang bikin kalian makin kece dimanapun\n\nDetail Produk :\n– 100% original Ortuseight Indonesia\n– Upper : mesh/knit\n– Midsole : Injection Phylon\n– Outsole : Rubber\n– Berat : +/- 261 gram (size 40)\n\nKeunggulan berbelanja dengan kami :\n– Semua barang yang dijual original 100 % !\n– Seller yang komunikatif dan ramah\n– Gratis ongkir ataupun potongan ongkir !\n– Mau tukar size? Bisa banget (syarat dan ketentuan berlaku)\n– Order masuk diatas jam 20.00 masih akan kami kirimkan di hari yang sama\n\nDitunggu orderannya ya kicks !\n\n*Warna pada gambar produk mungkin tidak 100% sama dengan warna produk sebenarnya, dikarenakan faktor cahaya saat pengambilan foto atau kualitas gadget yang digunakan saat pengambilan foto', 50, 'brg2.jpg', '2023-12-14 09:29:13'),
(3, 1, 'Kaos Pria', 50000.00, 'Material : Cotton Combed 30S\r\n\r\n\r\nPilihan Warna :\r\n\r\n1. Abu Muda\r\n\r\n2. Abu Tua\r\n\r\n3. Baby Blue \r\n\r\n4. Beige \r\n\r\n5. Dusty Pink \r\n\r\n6. Hijau Alpukat \r\n\r\n7. Hijau Army \r\n\r\n8. Hitam\r\n\r\n9. Kubus\r\n\r\n10. Lilac \r\n\r\n11. Maroon \r\n\r\n12. Navy \r\n\r\n13. Pink Baby \r\n\r\n14. Pink Fanta\r\n\r\n15. Putih\r\n\r\n16. Sage Green\r\n\r\n\r\nSize Chart : \r\n\r\nS : LEBAR 45 X PANJANG 65 - LINGKAR DADA 90\r\n\r\nM : LEBAR 47 X PANJANG 67- LINGKAR DADA 94\r\n\r\nL : LEBAR 49 X PANJANG 69 - LINGKAR DADA 98\r\n\r\nXL : LEBAR 51 X PANJANG 71 - LINGKAR DADA 102\r\n\r\nXXL : LEBAR 53 X PANJANG 73 - LINGKAR DADA 106\r\n\r\n\r\nTerima kasih & Happy Shopping🖤', 25, 'brg3.jpeg', '2023-12-14 09:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `gambar`) VALUES
(1, 'Kaos', 'kaos.png'),
(2, 'Kemeja', 'kemeja.png'),
(3, 'Hoodie', 'hoodie.png'),
(4, 'Jaket', 'jaket.png'),
(5, 'Celana', 'celana.png'),
(6, 'Sepatu', 'sepatu.png'),
(7, 'Topi', 'topi.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
