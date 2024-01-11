-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 01:41 PM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `email`, `no_hp`, `tgl`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin1', 'admin@gmail.com', '085790330322', '2023-12-17 15:20:02');

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
  `tgl` timestamp NOT NULL DEFAULT current_timestamp(),
  `wa` varchar(15) DEFAULT '6285790330322'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `nama_barang`, `harga`, `keterangan`, `stok`, `gambar`, `tgl`, `wa`) VALUES
(1, 7, 'TOPI BASEBALL', 35000.00, 'TOPI BASEBALL PRIA GOLF SPORT FASHION\n\nSpesifikasi :\n1. Material : Katun\n2. Dimensi :\n- Ukuran 1size adjustable untuk lingkar kepala : 54-60 +/- 1cm\n- Tinggi : 11 +/- 1cm\n- Visor/brim/lidah topi : 8 +/- 1cm\n\n\nDaily Activities Use\nTopi sangat cocok untuk di gunakan dalam kegiatan sehari hari ataupun olahraga di luar ruangan. Kepala anda tidak akan terkena panas terik sinar matahari secara langsung yang mungkin dapat mempengaruhi kondisi tubuh anda. Dapat Anda gunakan sebagai fashion model sehari-hari.\n\nCreative Design\nDesain topi snapback kasual yang keren dan pilihan warna yang menarik membuat topi ini sangat cocok untuk di gunakan. Menambah keren penampilan kasual anda sekaligus melindungi kepala anda.\n\nResizable Strap\nTopi dapat disesuaikan dengan semua ukuran kepala dengan strap yang tersedia pada bagian belakang topi.\n\nGood Quality Material\nTopi di buat dengan material yang baik sehingga kualitasnya tidak akan menurun walaupun selalu terkena sinar mata\n\nPaket Penjualan:\n1x Topi baseball\n\nWarna produk dalam gambar mungkin tidak 100% sama dengan warna asli, dikarenakan faktor lain saat pemotretan\n\nBARANG PASTI DI CEK SEBELUM DIKIRIM.\n\nPACKING DIJAMIN AMAN. Kesalahan oleh pihak pengiriman adalah diluar tanggung jawab kami.', 71, 'brg1.jpg', '2023-12-14 09:29:13', '6285790330322'),
(2, 6, 'SEPATU SNEAKERS', 125000.00, 'Tunjukkan #localpride kalian dengan menggunakan produk dari brand lokal Roda Gila Store !!\n\nSeperti Sepatu Sneakers Revive yang merupakan produk dari brand Roda Gila Store yang bikin kalian makin kece dimanapun\n\nDetail Produk :\n– 100% original Ortuseight Indonesia\n– Upper : mesh/knit\n– Midsole : Injection Phylon\n– Outsole : Rubber\n– Berat : +/- 261 gram (size 40)\n\nKeunggulan berbelanja dengan kami :\n– Semua barang yang dijual original 100 % !\n– Seller yang komunikatif dan ramah\n– Gratis ongkir ataupun potongan ongkir !\n– Mau tukar size? Bisa banget (syarat dan ketentuan berlaku)\n– Order masuk diatas jam 20.00 masih akan kami kirimkan di hari yang sama\n\nDitunggu orderannya ya kicks !\n\n*Warna pada gambar produk mungkin tidak 100% sama dengan warna produk sebenarnya, dikarenakan faktor cahaya saat pengambilan foto atau kualitas gadget yang digunakan saat pengambilan foto', 42, 'brg2.jpg', '2023-12-14 09:29:13', '6285790330322'),
(3, 1, 'KAOS PRIA', 50000.00, 'Material : Cotton Combed 30SPilihan Warna :1. Abu Muda2. Abu Tua3. Baby Blue 4. Beige 5. Dusty Pink 6. Hijau Alpukat 7. Hijau Army 8. Hitam9. Kubus10. Lilac 11. Maroon 12. Navy 13. Pink Baby 14. Pink Fanta15. Putih16. Sage GreenSize Chart : S : LEBAR 45 X PANJANG 65 - LINGKAR DADA 90M : LEBAR 47 X PANJANG 67- LINGKAR DADA 94L : LEBAR 49 X PANJANG 69 - LINGKAR DADA 98XL : LEBAR 51 X PANJANG 71 - LINGKAR DADA 102XXL : LEBAR 53 X PANJANG 73 - LINGKAR DADA 106Terima kasih & Happy Shopping?', 42, 'brg3.jpeg', '2023-12-14 09:29:13', '6285790330322'),
(21, 1, 'KAOS POLOS ', 20000.00, 'TIDAK MENERIMA PERUBAHAN WARNA LEWAT CHAT!!!!  • TANPA LABEL / MERK (COCOK bagi RESELLER Dan DROPSHIPER  maupun pengusaha sablon / DISTRO)   DESKRIPSI PRODUK :  • BAHAN COTTON COMBED 30S ADEM DIPAKAI  Bahan adem lembut ,menyerap keringat dan warna tidak mudah pudar   Penjelasan singkat tentang prodak sudah kami upload di slide foto prodak  • UKURAN  KAMI REGULAR FIT JADI TERLIHAT MODERN & NYAMAN SAAT DIGUNAKAN DAN DAPAT DIGUNAKAN PRIA MAUPUN WANITA   Toleransi ukuran beda 1-2cm   Thank’s  FOR TRUST   QUALITY IS PRIORITY  WE PROUD TO SERVE YOU', 30, 'kaospolos.jpeg', '2024-01-04 18:18:10', '6285790330322'),
(22, 1, 'KAOS OBLONG', 30000.00, 'BAHAN PE SOFT Bahan adem lembut , menyerap keringat dan warna tidak mudah pudar Penjelasan singkat tentang produk sudah kami upload di slide foto produk', 40, 'kaosoblong.jpeg', '2024-01-04 18:21:04', '6285790330322'),
(23, 1, 'KAOS POLOS PREMIUM', 50000.00, 'TERSEDIA 4 WARNA BARU SALMON PINK, LEMON YELLOW, FOREST GREEN, & COCOA BROWN  Kaos Polos Unisex (Bisa untuk Pria / Wanita) Ukuran tersedia ( lebar x panjang ) size international: M = 48 cm x 68 cm L = 50 cm x 70 cm XL = 52 cm x 72 cm  Untuk ketersedian warna dan stok mengikuti yang ada di Shopee. Gramasi 150 - 160 gr/m2 Selamat Berbelanja.', 40, 'premiumkaos.png', '2024-01-04 18:24:23', '6285790330322'),
(24, 7, 'Topi Bordir Yours', 30000.00, 'Topi dengan kualitas premium nyaman digunakan untuk segala aktifitas  Spesifikasi: * Ready Warna Hitam, Putih, Cream * Bahan Royal drill premium * Penganturan ukuran di bagian belakang topi * Tali belakang pakai ring besi', 30, 'topi basebol.jpeg', '2024-01-04 18:26:31', '6285790330322'),
(25, 7, 'NEXTSTOP-016 Topi Baseball', 60000.00, 'Harga murce kualitas ter-oke! Selamat datang di Nextstop Grosir, toko topi pilihan dengan banyak model.  Bahan : Kanvas Marsoto Ukuran : All Size  Lingkar Topi : 50-60cm ( dapat di sesuaikan ) Tinggi Topi : 11-13cm Kemasan : Menggunakan box resmi dari toko kami  LIST DI BAGIAN VISOR BERTULISKAN \"NEW YORK\"  Daily Activities Use :  Sangat cocok di gunakan untuk sehari-hari ataupun berolahraga, menambah penampilan agar terlihat lebih keren dan casual, sekaligus bisa melindungi kepala kamu dari sinar matahari.  Keunggulan Produk :  - Bisa digunakan untuk pria dan wanita. - Lidah topi yang elastis bisa dibentuk sesuai lengkungan yang kamu inginkan. - Mudah dibersihkan dan terdapat tag wash didalam topi. - Bahan sudah disesuaikan sehingga nyaman dipakai di Indonesia. - Strap topi dapat disesuaikan sesuai lingkar kepala. - Produk dikemas menggunakan box karton untuk melindungi topi kalian agar tetap aman selama diperjalanan.  Catatan :   1 cm = 10 mm = 0,39 inci   Pengukuran manual, jika ada kesalahan 1-5mm diharap dapat memaklumi dan pastikan anda tidak keberatan sebelum melakukan pemesanan.   Karena perbedaan antara monitor komputer yang berbeda, gambar mungkin memiliki sedikit perbedaan warna dengan produk sebenarnya.  WAJIB VIDEO UNBOXING!  TANPA VIDEO UNBOXING, KOMPLAIN KERUSAKAN / KEKURANGAN TIDAK DITERIMA.   WAJIB VIDEOKAN PEMBUKAAN PAKET : - Tanpa video pembukaan paket, tidak di terima komplain apapun - Rekaman video yang jelas mulai sebelum buka paket sampai selesai pembukaan paket. - Tidak menerima video yang setelah paket dibuka baru direkam ulang atau paket dibungkus ulang baru direkam.  Jangan lupa untuk share dan upload foto kamu sebagai bentuk kepuasan kamu terhadap produk kami dan jangan lupa untuk klik Bintang 5 ya!   Terima kasih sudah membaca deskripsi kami dan selamat berbelanja????', 100, 'topisaya.jpeg', '2024-01-04 18:27:52', '6285790330322'),
(26, 6, 'SEPATU SNEAKERS TERLARIS', 70000.00, 'DESKRIPSI PRODUK   NOTE 1KG=2 pasang order 2 pasang ongkir tetap sama   New sneackers kekinian termurah   Warna :  Hitam  Krem Biru   spesifikasi Bahan : kanvas press  alas busah Sol pvc  Ukuran  38  39  40  41  42  43   Jadwal Pengiriman Hari Senin-Sabtu Order sebelum jam 15.00 WIB akan diproses dihari yang sama. Order melewati jam 16.30 WIB akan diproses dihari selanjutnya. Hari minggu dan tanggal merah libur, tidak ada pengiriman. Update resi maksimal 1x24jam setelah paket dipickup pihak ekspedisi.   CATATAN YANG PERLU DIPERHATIKAN   ‘’PENGIRIMAN SEPATU APAPUN SUDAH rapih DENGAN KEADAAN BARU, APABILA SETELAH SAMPAI TUJUAN BOX ADA KERUSAKAN BUKAN KESALAHAN DARI KAMI. UNTUK PEMESANAN SEPATU JANGAN LUPA BERI KETERANGAN UKURAN/SIZE DAN WARNA YANG DIPESAN’’.   Pesanan sesuai dengan invoice pesanan awal tidak dapat di retur. Pesanan salah kirim barang, warna maupun ukuran boleh ditukar. Masa diperbolehkan retur 3 hari setelah barang diterima. Dan harus dalam keadaan belum dipakai.   PERHATIKAN SEBELUM ORDER  - Pastikan Alamat & No.Telp Tujuan / Pengiriman Jelas & Lengkap. - Pastikan Ukuran & Warna yang diinginkan sesuai dengan yang ada di pesanan, apabila sudah terlanjur membayar pesanan namun ada kesalahan dalam mengorder bisa konfirmasi untuk pergantian ukuran & warna melalui chat sebelum dikirim -   #sepatumurah #sepatuimport #sepatupria #sepatu wanita kekinian #sepatu flastshoes #sepatu flat   WELCOME TO RESELLER AND DROPSHIP - SILAHKAN CHAT ADMIN JIKA INGIN BERGABUNG  ● PENGIRIMAN DILAKUKAN SEBELUM JAM 15.00 , PEMESANAN DIATAS JAM 15.00 AKAN DIKIRIM BESOK HARINYA  ● PENGIRIMAN KE JABODETABEK ESTIMASI 1-2 HARI ● PENGIRIMAN KE JAWA TENGAH , JAWA TIMUR DAN SUMATRA SELATAN ESTIMASI 2-3 HARI ● PENGIRIMAN KE LUAR PULAU JAWA ESTIMASI 3-4 HARI KERJA  SILAHKAN DIORDER KITA READY STOK BANYAK  ● TERSEDIA UKURAN 38-43 ● WARNA KREM,BIRU  DAN HITAM  ● BAHAN SUEDE PREMIUM ADEM  ● SOL BAWAH KARET PVC RINGAN DAN KUAT ● HARI MINGGU LIBUR - PENGIRIMAN TERAKHIR JAM 16.30 DIATAS JAM SEGITU AKAN DIKIRIM ESOK HARINYA', 30, 'pppp.jpeg', '2024-01-04 18:29:59', '6285790330322'),
(27, 6, 'Sepatub Full Black', 90000.00, 'Terbaru sepatu pria wanita full black  - Kualitas PREMIUM - Include box  - Warna Sesuai Gambar  ( Real Picture ) - Bahan, Sol dan Finishing rapih Berkualitas. - Dijamin Harga termurah lulus quality control   - Size - 36 ☆ 21CM - 37 ☆ 22CM - 38 ☆ 23CM - 39 ☆ 24CM - 40 ☆ 25CM - 41 ☆ 26CM - 42 ☆ 37CM - 43 ☆ 28CM - 44 ☆ 29CM  +BONUS : BOX +5pembeli pertama pendapatkan bonus kaos kaki + hanya untuk 5pembeli pertama ya kak Barang yg kami jual 100% gambar ASLI  Kami sendiri yg foto dan yg buat video  Bukan foto / video curian !!   Jika foto ada sedikit perbedaan warna, kemungkinan diakibatkan dari cahaya pada pengambilan gambar .   Kami supplier sepatu tangan pertama  ( barang diambil langsung dari gudang / pabrik nya )   Untuk melihat Produk-produk kami silahkan kunjungi toko Kami ^^ jika ada keluahan segera hubugi lewat chat.   Kami open juga reseller dan dropshiper jika kamu berminat.  Grosir = harga beda dari harga shopee  Trimakasih Selamat belanja????', 50, 'sepatuqq.jpeg', '2024-01-04 18:33:00', '6285790330322'),
(28, 2, 'KEMEJA POLOS', 75000.00, 'Detail produk dari Kemeja Distro Full Kancing / Kemeja Polos Lengan Panjang Pria / Kemeja Catton Campas Pria / Kemeja Casual Import Pria Terbaru    Detail Produk dari Kemeja  Lengan Panjang Pria ,Kemeja POLOS Terbaru Bahan Catton BABY CAMPAS ,Kemeja Casual Dan Formal Pria   ,Kemeja Good Quality  Kemeja Panjang Original Import Quality Bahan Catton BABY CAMPAS Size S M L XL XXL  S : 48 [Lebar Dada] X 68 [Panjang] M : 50 [Lebar Dada] X 70 [Panjang] L : 52 [Lebar Dada] X 72 [Panjang] XL : 54 [Lebar Dada] X 74 [Panjang] XXL : 58 [Lebar Dada] X 78 [Panjang]  Bahan Catton BABY CAMPAS adalah standart bahan yg di gunakan oleh kebanyakan distro dan brand2 original. Penjelasan Bahan : Bahan ini nyaman dipakai Tidak melar dan tidak menyusut Tidak berbulu Jahitan rapih Tidak luntur saat di cuci 100% jaminan kepuasaan anda.   KEPUASAN PELANGGAN ADALAH PRIORITAS KAMI', 33, 'kemeja.jpeg', '2024-01-04 18:37:42', '6285790330322'),
(29, 2, 'KEMEJA WANITA OVERSIZE', 65000.00, 'KEMEJA WANITA OVERSIZE SHIRT OVERSIZE KEMEJA POLOS SHIRT  bahan katun rayon fit to ALLSIZE fit to XXL lingkar dada 134 cm panjang baju depan 58 cm panjang baju belakang 77 cm panjang lengan 54 cm bagian belakang lebih panjang dari depan memakai kerah collar kancing hidup di depan terdapat saku untuk ukuran toleransi 2-3 cm  >>Gambar hanya Sebagai referensi kemiripan gambar dengan aslinya hanya 85-90% (perbedaan bisa di sebabkan karena pemakaian bahan ,warna ,ukuran,model,dan lainnya,harap maklum kalo ada ketidaksesuaian) >>Tidak menerima pergantian warna ataupun barang melalui catatan ataupun chat shopee  Barang kosong akan segera di konfirmasi via chat shopee. jika dalam kurun waktu 2 hari tidak ada balasan,kita akan kirim warna RANDOM! Sertakan warna cadangan untuk menghindari stok habis :) >> Komplain tanpa bukti vidio unboxing,maka pengembalian akan kita tolak!', 37, 'KEMEJAWANITA.jpeg', '2024-01-04 18:39:19', '6285790330322'),
(30, 3, 'Thesilversky Galaxy Planet', 80000.00, 'Hoodie Jumper Thesilversky dibuat dengan kain PE fleece kualitas premium, permukaan luar dalam halus, dengan ketebalan yang pas sehingga sangat nyaman dipakai dalam segala kondisi: tidak gerah dan melindungi dari panas matahari dan menghangatkan saat dingin.    Ukuran regular fit UNISEX bisa untuk perempuan/laki-laki, pastikan ukuran sesuai dengan size chart kami.  Toleransi 2-3cm untuk penjahitan.    Tersedia juga Paper Bag, Box Gift, Greeting Card keren untuk hadiah, dijual secara terpisah.    ❗PENTING❗Harap periksa kelengkapan & kondisi barang dengan Video ketika paket akan dibuka. Komplain tidak dapat diterima jika tidak ada Video Unboxing untuk Bukti jika barang tidak sesuai dengan pesanan wajib full dan tidak dalam potongan video ✨', 45, 'HOODIE.jpeg', '2024-01-04 18:40:49', '6285790330322'),
(31, 3, 'HOODIE REWORKED', 90000.00, 'Ims Shop House menampilkan koleksi Hoodie dengan kualitas terbaik untuk gaya kasual favorit yang bisa memenuhi daily outfit kamu. Terbuat dari material pilihan yang soft dan nyaman dikenakan seharian. Yang mempunyai nilai estetika tersendiri.   SIZE CHART  - M Panjang : 68 cm Lebar Dada : 54 cm Panjang tangan : 61 cm  - L Panjang Badan : 70 cm Lebar Dada : 56 cm Panjang Tangan : 64 cm  - XL Panjang Badan : 72 cm Lebar Dada : 58 cm Panjang Tangan : 66 cm  - XXL Panjang Badan : 75 cm Lebar Dada : 60 cm Panjang Tangan : 68 cm   Detail Produk : - Bahan : Fleece Catton Tebal - Gramasi : 290 gsm - Bahan Reworked : Flanel - Pola : Regular & Reworked - logo menggunakan Jaitan Bordir langsung di kain kuat ????  Petunjuk Perawatan : - Cuci dengan tangan - Jangan menggunakan mesin - Jangan diperas - Jemur digantung, hindari sinar matahari langsung - Setrika suhu rendah  Info Pengiriman : - Pengiriman setiap hari Senin - Sabtu pukul 23.00 WIB.  - Order lewat dari 14.00 WIB akan dikirimkan pada hari berikutnya. - Minggu kami off pengiriman.', 33, 'HOODEI2_1.jpeg', '2024-01-04 18:41:49', '6285790330322'),
(32, 4, 'JAKET BOLAK BALIK', 87000.00, 'PROMO SPESIAL HARGA TERMURAH BULAN INI !!   GESER UNTUK MELIHAT VARIAN PRODUK YANG LAINNYA !!  - GARANSI UANG KEMBALI JIKA PRODUK TIDAK SESUAI PESANAN -  Spesifikasi :    - Bahan Tebal Karena 2 Lapis - Bahan Nyaman Dipakai - Bisa Di Pakai Pria Dan Wanita - Bisa di Pakali Bolak Balik ( 2 in 1) - Terdapat Saku Bagian Dan Luar - Hoodie Bisa di Lepas - Saku Luar Pakai Resleting - Dapat Menyerap Keringat - Anti Air / Waterproof (70%) - Tidak Panas', 87, 'JAKET.png', '2024-01-04 18:44:58', '6285790330322'),
(33, 4, 'Jaket Retro Sport', 78000.00, 'MAU TAMPIL KEREN TRENDY DENGAN HARGA TERBAIK DAN TERMURAH. HARGA TERJANGKAU DENGAN PRODUK KUALITAS TERBAIK, BAHAN TERBAIK SERTA JAHITAN TERBAIK. KARENA BAGI KAMI KEPUASAN PELANGGAN MENJADI MOTO UTAMA TOKO KAMI.  RINCIAN PRODUK  MOHON DIBACA DULU SEBELUM MEMESAN  BISA DIGUNAKAN: MOTORAN,HARIAN, OUTDOOR, JAKET OLAHRAGA, JAKET SPORT  Material: Bahan Perasut Despo Premium Seperti Daun Talas,Lembut enak di pakai, Tidak Luntur Ketika di Cuci, Bahan nya Adem Cocok untuk olahraga kegiatan sehari hari Dll. Puring Polymesh/Jaring Lembut & menyerap Keringat Dan tidak Panas     NB : Tulisan Depan Belakang Bordir Sepesifikasi produk: - Terdapat 2 saku depan - Terdapat 1 saku dalam - Resleting  - Bisa di tilep jadi kerah dan fleksibel   Jaket ini sepecial untuk kegiatan Outdoor, Olahraga, Kegiatan Sehari hari, di desain Flacksible dengan material premium.   size M   ;  PJ 72cm x LB 52cm x PT 76cm size L    ; PJ  73cm x LB 54cm x PT 77cm size XL  ; PJ 75cm x LB 56cm x PT 79cm  PERLU DIPERHATIKAN! Untuk pembelian kedua dan seterusnya tolong dipahami karena bahan despo ini limited edition belum diproduksi di Indonesia. jadi tiap produksi beda ketebalan dan serat. akan tetapi kualitas tetap sama', 55, 'JAKET44.jpeg', '2024-01-04 18:45:56', '6285790330322'),
(34, 5, 'DOTY PANTS', 65000.00, 'Celana Doty Basic Pants Scuba Bahan scuba latex HQ (adem  nyaman dan strech)  Doty standart L : Panjang Celana :  -/+ 90 cm Lebar Pingang :  -/+ 33 - 52 cm L.Paha : -/+ 18 cm  Doty pants   L     : Bb 45-50 Kg  xL   : Bb 50-55 Kg  xxL : Bb 60-65 Kg  3xL : Bb 60 - 70 Kg  5xL : Bb 70-80Kg     UKURAN: [toleransi ukuran 2-3cm, karena proses jahit] Yang kami kirim sesuai variasi warna pada chekout pesanan {tidak bisa ganti warna, tidak bisa pilih warna di chat / catatan pesanan}', 55, 'CELANA1.jpeg', '2024-01-04 18:47:14', '6285790330322'),
(35, 5, 'Celana jeans pria ', 65000.00, 'Model Standar / Basic / Reguler Ukuran : 28,29,30,31,32,33,34,35,36,37,38 Bahan : Jeans Denim (Tebal, Halus, tidak Berbulu Dan Nyaman dipakai, warna tidak luntur) Kancing, Handtag, Rivet, Slip Tembus Merk Ori Panjang & Cutting Normal Ori Kantong Dalam Sablon Merk Selamat berbelanja  SIZE / UKURAN LINGKAR PINGGANG: size 27 LP 69 cm - BB 40 kg size 28 LP 71 cm - BB 43 kg size 29 LP 73 cm - BB 45 kg size 30 LP 76 cm - BB 48 kg size 31 LP 79 cm - BB 50 kg size 32 LP 83 cm - BB 55 kg size 33 LP 85 cm - BB 60 kg size 34 LP 87 cm - BB 65 kg size 35 LP 89 cm - BB 70 kg size 36 LP 91 cm - BB 75 kg size 37 LP 94 cm - BB 80 kg size 38 LP 96 cm - BB 85 kg  Toleransi - + 1-3cm', 55, 'CELANA88.jpeg', '2024-01-04 18:48:44', '6285790330322'),
(36, 5, 'CELANA PENDEK', 45000.00, 'HARAP MEMBACA DESKRIPSI SEBELUM MEMBELI !!!  CELANA PENDEK OLAHRAGA ( Harga Satuan )  HARAP DIBACA SEBELUM MEMBELI !!!  ⏩ Unisex (pria & wanita)  ⏩ Bahan LOTTO   ⏩ Logo SABLON. Tanpa Saku ⏩ Cocok dipakai untuk harian atau santai dirumah.   SIZE :  ( standar dewasa )  •Panjang : -/+ 48cm •L. Pinggang : 40-100cm (saat ditarik) •L. paha (melingkar) :  56cm •Lingkar bawah (melingkar) : 56cm •Muat sampai max. BB 75kg  KAMI PRODUKSI SENDIRI  MELAYANI ECER ATAU GROSIR PARTAI BESAR ', 74, 'CELANA77.jpeg', '2024-01-04 18:50:05', '6285790330322');

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
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT 1,
  `tgl_tambah` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metode` int(11) NOT NULL,
  `nama_metode` varchar(255) NOT NULL,
  `nomor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_metode`, `nama_metode`, `nomor`) VALUES
(1, 'COD', ''),
(2, 'DANA', '084790330322'),
(3, 'OVO', '085790330322'),
(4, 'BRI', '467575454336453'),
(5, 'BNI', '43546366635634'),
(6, 'MANDIRI', '341424312414');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pengiriman`
--

CREATE TABLE `metode_pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `nama_metode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metode_pengiriman`
--

INSERT INTO `metode_pengiriman` (`id_pengiriman`, `nama_metode`) VALUES
(1, 'JNE'),
(2, 'POS Indonesia'),
(3, 'JNT'),
(4, 'GoSend'),
(5, 'GrabExpress');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `keterangan`) VALUES
(1, 'Menunggu Pembayaran'),
(2, 'Sedang Dikemas'),
(3, 'Barang Dikirim'),
(4, 'Pesanan Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_harga` decimal(10,2) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL,
  `id_status` int(11) DEFAULT 1,
  `bukti_pembayaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgl` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `no_hp`, `alamat`, `tgl`, `role`, `tgl_lahir`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '1\'', 'user@gmail.com', '1', '', '2023-12-20 06:02:07', 'user', '0000-00-00');

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
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `metode_pengiriman`
--
ALTER TABLE `metode_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_metode` (`id_metode`),
  ADD KEY `id_pengiriman` (`id_pengiriman`),
  ADD KEY `transaksi_ibfk_4` (`id_status`);

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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_metode`) REFERENCES `metode_pembayaran` (`id_metode`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_pengiriman`) REFERENCES `metode_pengiriman` (`id_pengiriman`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
