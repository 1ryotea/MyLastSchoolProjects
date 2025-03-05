-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 04:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_acc` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` mediumtext NOT NULL,
  `password` varchar(1200) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_acc`, `username`, `email`, `password`, `role`) VALUES
(10, 'admin', '', 'admin', 'admin'),
(14, 'iban123', 'iban@gmail.com', 'M4klog4ming', 'user'),
(15, 'ryo 123', 'ryo123@gmail.com', '123', 'user'),
(16, 'ryo123', '123131@gmail.com', '123', 'user'),
(17, 'iban444', 'iban@gmail.com', '444', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `judul_produk` varchar(90) NOT NULL,
  `harga` int(11) NOT NULL,
  `lokasi` varchar(1200) NOT NULL,
  `foto_produk` varchar(1200) NOT NULL,
  `deskripsi_produk` mediumtext NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `judul_produk`, `harga`, `lokasi`, `foto_produk`, `deskripsi_produk`, `tipe`) VALUES
(1, 'VGA ASELI NO FEK FEK', 12000, 'Jupiter Barat', '../foto_produk/vga.jpg', 'ini vga', 'Elektronik'),
(13, 'Monitor Gaming Armaggeddon Pixxel+ PF22HD SUPER Full HD Frameless Design | 75Hz | 6.5 Resp', 200, 'Atlantis', '../foto_produk/monintor.jpg', 'ini monitor', 'Elektronik'),
(14, 'iPad 10 / Gen 10th - 2022 - 10.9 Inch [ 64GB - 256GB & ] Wifi Only', 900, 'Harapan belok kiri', '../foto_produk/ipad.jpg', 'ini ipad', 'Elektronik'),
(15, 'ROG ALLY coak dikit', 1, 'Komplek Pemda', '../foto_produk/ROG.jpg', 'ini rog', 'Elektronik'),
(16, 'RAM RGB !!!', 123, 'Papua Barat', '../foto_produk/RAM.jpg', 'ini ram', 'Elektronik'),
(17, 'AQUA Japan LE32AQT9200M Digital TV, HD, Miracast', 555, 'Harapan ', '../foto_produk/TV.jpg', 'ini tv', 'Elektronik'),
(18, 'GAMEN Titan Elite Keyboard Gaming Mechanical Keyboard Pluggable Port Blue/Red Switch Wired', 10, 'Jakarta', '../foto_produk/GAMEN.jpg', 'ini keyboard', 'Elektronik'),
(19, 'XP-Pen Artist Pro 16TP 4K UHD Multi Touch Screen Drawing Pad Tablet', 14000, 'Binjai', '../foto_produk/DP.jpg', 'ini drawing pen', 'Elektronik'),
(20, 'Apple Watch SE 40mm GPS, Gold, Starlight Sport Band', 5000, 'Stabat', '../foto_produk/iwatch.jpg', 'ini apple watch', 'Elektronik'),
(21, 'Steelseries QCK Prism XL Destiny Edition - Gaming Mousepad', 2000, 'China', '../foto_produk/mousepad.jpg', 'ini mousepad', 'Aksesoris'),
(22, 'Headset Sony WH-1000XM4 Wireless HeadphonePremium Noise Cancelling Battery up to 30h With ', 3700, 'Bukit Tinggi', '../foto_produk/hetset.jpg', 'ini headset', 'Elektronik'),
(30, 'Wallpaper1', 12000, 'Stabat', '../foto_produk/92298341_p0.jpg', 'Wallpaper keren ', 'Hiasan'),
(31, 'Wallpaper2', 15000, 'Stabat', '../foto_produk/96300930_p0.jpg', 'Wallpaper keren ', 'Hiasan'),
(32, 'wallpaper3', 20000, 'Stabat', '../foto_produk/98797564_p0.jpg', 'wallpaper keren', 'Hiasan'),
(34, 'JAS WISUDA / JAS NIKAH / JAS FORMAL / JAS SLIMFIT / JAS PRIA', 108000, 'Stabat', '../foto_produk/image_2023-09-16_235417654.png', 'PEMBELI PINTAR PASTI BACA DESKRIPSI DULU SAMPAI TUNTAS!!\r\nSUDAH DI JELASKAN KALAU MAU KANCING 2 TULIS DI CATATAN !!\r\n\r\n!_PRODUK KAMI BERGARANSI_!\r\n!_BINTANG KURANG DARI 5 GARANSI HILANG!\r\nBLAZER ORIGINAL PROPAGATE COMPANY\r\nPASTI ORIGINAL & FREE RETUR\r\n\r\nMAU KANCING 2 TULIS DI CATATAN YAH\r\n\r\nSudah saya Cek HARGA PASARAN DI MALL \r\nSEKITAR 300.000 (TANPA FURING) & 500.000-1.000.000 (LAPISAN DALAM FURING ) ^_^ BAHAN SAMA KAYA KITA\r\n\r\nSILAHKAN BISA REQUEST UKURAN/CUSTOM BISA DI BORDIR LOGO MINIMAL 1 LUSIN\r\n\r\nKALAU GAK MUAT/PAS DI BADAN GIMANA? \r\nTUKAR SIZE AJA :D\r\n\r\nLAH EMANG BISA ? \r\nLAH JELAS KHUSUS UNTUK PELANGGAN TOKO KAMI, BISAA.\r\n\r\nTRUS ONGKIRNYA GIMANA?\r\n ONGKIR BOLAK BALIK DITANGGUNG PEMBELI.\r\n\r\nNAH KALAU KESALAHAN DARI KAMI, ONGKIR KAMI YANG TANGGUNG.\r\n\r\nSILAHKAN BISA REQUEST UKURAN/CUSTOM\r\n\r\nNOTE : Jangan Sampai Selisih Harga Sedikit Menipu Anda. Kenyamanan Anda Sendiri Yang Menentukan. Happy Shoping\r\n\r\nJANGAN BANDINGKAN HARGA KAMI DENGAN TOKO SEBELAH KARENA KAMI MENJUAL KUALITAS BUKAN KUANTITAS!! LANGSUNG CHEKOUT AJAH TIDAK USAH CHAT KARENA BARANG SELALU READY!!\r\n\r\nBarang realpict kalau gak realpict uang kembali 2X LIPAT !!\r\n\r\nâ€¢Kode Produk : Jas Blazer Pria \r\nâ€¢Bahan  HIGH TWIS POLLYSTER PREMIUM\r\nâ€¢Lapisan Dalam Full FURING\r\nâ€¢Pakai lapisan KAIN KERAS seperti JAS FORMAL\r\nâ€¢Pundak Pakai BUSA\r\nâ€¢Saku Dalam 1pcs.\r\nâ€¢Tersedia: S M L XL XXL\r\n\r\nDetail Ukuran :\r\n\r\nSize S\r\nLingkar Dada 100cm\r\nLingkar Pinggang 84cm\r\nLebar Bahu 40cm\r\nPanjang Badan 69cm\r\nPanjang Lengan 58cm\r\n-----------------------------------------------\r\nSize M\r\nLingkar Dada 105cm\r\nLingkar Pinggang 90cm\r\nLebar Bahu 43cm\r\nPanjang Badan 71cm\r\nPanjang Lengan 60cm\r\n-----------------------------------------------\r\nSize L\r\nLingkar Dada 110cm\r\nLingkar Pinggang 94cm\r\nLebar Bahu 46cm\r\nPanjang Badan 73cm\r\nPanjang Lengan 63cm\r\n-----------------------------------------------\r\nSize XL\r\nLingkar Dada 116cm\r\nLingkar Pinggang 102cm\r\nLebar Bahu 50cm\r\nPanjang Badan 76cm\r\nPanjang Lengan 65cm\r\n-----------------------------------------------\r\nSize XXL\r\nLingkar dada 118cm\r\nLingkar Pinggang 105cm\r\nLebar Bahu 53cm\r\nPanjang badan 79cm\r\nPanjang tangan 68cm\r\n\r\nPrediksi\r\nS : Tinggi badan 150-165cm, Berat badan 40-55kg\r\nM: --------------------- 150-170cm, -------------------- 50-55kg\r\nL : --------------------- 155-180cm, -------------------- 55-70kg\r\nXl: --------------------- 160-185cm, -------------------- 60-80kg\r\nXXL:--------------------190-195cm, ---------------------85-90kg\r\n#JAMINAN GARANSI \r\n=>Jaminan uang kembali 100% jika barang tidak sesuai kenginan / barang cacat / kekcila (Syarat & Ketentuan berlaku) \r\n#FREE RETUR \r\n=> Bisa d retur jika baju kekecilan atau kebesaran \r\n=> jIka kesalahan dari kami salah kirim size warna atau size maka kami akan menanggung ONGKIR FULL BOLAK BALIK \r\n=> Jika kesalah dari pihak konsumen maka konsumen sendiri yang menanggung ongkir bolak balik \r\n\r\n#TIPS Merawat Blazer\r\n* Jangan Cuci dengan Pemutih\r\n* Setrika dengan SUHU Medium\r\n\r\n#RESELLER/ DROPSHIPER CHAT ADMIN YAH (HARGA SPESIAL) ', 'Pakaian'),
(35, 'Mubeng Elegant Jas Slimfit Hitam Semi Wool (FREE COVER JAS EKONOMIS)', 360000, 'Stabat', '../foto_produk/image_2023-09-16_235552380.png', '\r\n- Di mohon untuk membaca kolom deskripsi sebelum checkout ya kak-\r\n\r\nMODEL TB 180 BB 75 \r\nJas dan Kemeja L\r\nCelana Size 33\r\n.\r\nJAS WARNA LAIN BISA CEK TOKO KITA\r\n.\r\n\r\n-Hitam Jas Only-\r\nðŸ”¥Bahan semiwool stretch\r\nðŸ”¥Model slimfit\r\nðŸ”¥Single veet\r\nðŸ”¥Celana terpisah\r\n\r\nBahan sama dengan celana formal slimfit Hitam jadi bisa satu set\r\n.\r\n\r\n-Size chart elegant jas-\r\n\r\nXs \r\nLingkar badan 94cm\r\nTinggi 66\r\nPanjang tangan 54\r\n\r\nS \r\nLingkar badan 100cm\r\nPanjang tangan 54cm\r\nTinggi 68cm\r\n\r\nM\r\nLingkar badan 102cm\r\nPanjang tangan 57cm\r\nTinggi 70cm\r\n\r\nL\r\nLingkar badan 105cm\r\nPanjang tangan 59cm\r\nTinggi 72cm\r\n\r\nXl\r\nLingkar badan 108cm\r\nPanjang tangan 60cm\r\nTinggi 75cm\r\n\r\nXXL\r\nLingkar badan-112\r\nPanjang tangan-62\r\nTinggi -77\r\n\r\nXXXL\r\nLingkar badan -116cm\r\nPanjang tangan- 64cm\r\nTinggi- 79cm\r\n\r\n\r\n-Size Chart Celana-\r\nlingkar pinggang\r\nS/29=78cm\r\nM/31=82cm\r\nL/34=89cm\r\nXL/36=94cm\r\nXXL/38=100cm\r\n\r\nPanjang Celana 100cm\r\n\r\nNB: \r\n-Untuk pengiriman setiap jam 3 sore jadi diusahakan untuk transaksi 1/2jam sebelum jam 3 untuk pengiriman hari itu juga\r\n-Ukuran bisa terdapat selisih 1-2 cm baik dengan size chart atau dengan warna lain, karena produksi massalðŸ™', 'Pakaian'),
(36, 'Jas Wisuda Formal / Jas nikah wisuda formal / Jas pria dewasa / Jas Hitam polos / Jas form', 88000, 'Stabat', '../foto_produk/image_2023-09-16_235654186.png', '( INFORMASI PRODUK )\r\n\r\n- Bahan/Material = AMERICAN DRILL ( Permukaan Bahan Halus,Tebal Dan Nyaman Saat Dipakai )\r\n- Bahan Dalam = Memakai Full Puring Asahi ( Mengkilap,Tidak Panas dan Tidak Gerah Saat Dipakai ) \r\n-Langsung dari tangan pertama\r\n- Kancing Depan 1pcs Kancing Ujung Tangan 3pcs\r\n- Pundak/Bahu = Memakai Lapisan Busa \r\n- Saku Dalam 1 Buah Saku Luar 3 Buah ( Semua Saku Aktif )\r\n- Model Blazer Slimfit\r\n- Tangan Panjang\r\n- BISA COD / BAYAR DITEMPAT ( JASA KIRIM JNT )\r\n\r\nCatatan ( Bisa PO Untuk Pemesanan Yang Banyak ) Hubungi Via Chat Jika Ada Pertanyaan Kami Siap Melayani Kebutuhan Pelangan Dengan Sebaik-Baik Nya\r\n\r\n- Tersedia Ukuran/Size = S.M.L.XL.XXL\r\n\r\nDetail Size S\r\n- Lebar Dada 47cm\r\n- Panjang Badan 63cm\r\n- Panjang Lengan 56cm\r\n\r\nDetail Size M\r\n- Lebar Dada 49cm\r\n- Panjang Badan 66cm\r\n- Panjang Lengan 58cm\r\n\r\nDetail Size L\r\n- Lebar Dada 51cm\r\n- Panjang Badan 68cm\r\n- Panjang Lengan 60cm\r\n\r\nDetail Size XL\r\n- Lebar Dada 53cm\r\n- Panjang Badan 70cm\r\n- Panjang Lengan 62 cm\r\n( Prediksi Size XL Untuk Tinggi \r\n\r\nDetail Size XXL\r\n- Lebar Dada 55cm\r\n- Panjang Badan 73cm\r\n- Panjang Lengan 65cm\r\n\r\nToleransi Ukuran 1-2 cm.\r\nuntuk tinggi sama berat badan itu hanya prediksi, sebaiknya di sesuaikan dengan ukuran badanya \r\n\r\nPENTING !! SEBELUM ORDER MOHON ISI ALAMAT DENGAN LENGKAP AGAR TIDAK TERJADI PENDING SAAT PENGIRIMAN BARANG\r\n\r\nJANGAN LUPA FOLLOW TOKO KAMI UNTUK MENDAPATKAN UPDATE PRODUK TERBARU DAN DISKON MENARIK LAINNYA \r\n\r\nHAPPY SHOPING \r\n\r\n#jaspria #jasblazer #blazercowok #blazerkerja #blazermurah #blazerkorea #blazerformal #blazerkeren #jaskorea #jasresmi #jasslimfit #jas #jascowok #jaskerja #jascasual #jashitam #blazerresmi #blazerhitam #jaspengantin #jasmurah #blazer #blazermurah #jasformal #blazerbandung #jasdistro #blazerjas #jaskeren #blazerkeren #jaspriaterbaru #jasanak #blazerterbaru #blazeroriginal ', 'Pakaian'),
(37, 'NEW STUSY Jaket premium Sweater Hoodie Pria Wanita Free ongkir Murah', 43000, 'Stabat', '../foto_produk/image_2023-09-16_235836739.png', 'Ready stok !! \r\nHoodie tersedia ukuran m ,l dan xl \r\nterbuat dari bahan flecee pe 240\r\ntersedia dalam beragam pilihan warna\r\nsize chart : panjang x lebar \r\nM : 52 x 63 cm\r\nL  : 54 x 65 cm\r\nXl : 56 x 67 cm\r\nToleransi ukr 1-2 cm', 'Pakaian'),
(38, 'Asus Rog Throne - RGB Headset Stand', 1465000, 'Stabat', '../foto_produk/image_2023-09-17_002030360.png', 'ROG THRONE\r\n\r\nROG Throne with 7.1 surround sound, dual USB 3.1 ports and Aura Sync\r\nCustomizable 18 RGB lighting zones, and sync-able with other Aura Sync products\r\nBuild-in ESS DAC and AMP deliver stunning music and immersive gaming audio\r\nSupport 2 USB 3.1 ports to charge devices or connect to your gaming gears\r\nArmoury II software offers extensive audio and light controls for your gaming experience\r\nOptimized arc design of top hanger stables and protects your headset from shaking', 'Aksesoris'),
(39, 'Smart led strip light LED neon flex lampu RGBIC mimpi warna kamar usb led lampu hias strip', 189000, 'KOTA JAKARTA PUSAT', '../foto_produk/image_2023-09-17_002403721.png', 'Lampu Tali Neon Cerdas\r\n\r\nâœ¨ Manik-manik lampu LED yang nyaman dan bahan silikon berkualitas tinggi membuat lampu tali neon kami lebih lembut dan halus.\r\nâœ¨16 juta warna yang dapat disesuaikan, 100 mode pemandangan prasetel yang indah, 30 mode musik, dan 16 mode mikrofon untuk dipilih, memenuhi semua kebutuhan warna dan pemandangan Anda.\r\nâœ¨App Control LED Neon Strip Lights Unduh aplikasi dari Google Play atau pindai kode QR pengontrol. Ikuti petunjuk untuk menyambungkan perangkat Anda dan mulailah membuat ide dengan lampu tali neon fleksibel ini.\r\nâœ¨ Kontrol Suara Cerdas Bekerja sangat baik dengan Alexa, Google Assistant Dengan perintah suara sederhana melalui Alexa, Google Assistant, Anda dapat dengan mudah mengatur lampu neon Anda. Selamat bersenang-senang.\r\n\r\nSpesifikasi\r\n\r\nâœ¨Ukuran: 3m/5m\r\nâœ¨Warna: Simfoni RGB\r\nâœ¨ Mode lagu: 30\r\nâœ¨Mode mikrofon: 16\r\nâœ¨ Mode pemandangan: 100\r\nâœ¨ Manik-manik LED: 60 led per meter\r\nâœ¨Bahan: Silikon\r\nâœ¨Kelas tahan air IP65\r\n\r\nðŸŽ‡TuYa Smart App Control (Versi WIFI dan versi bluetooth)\r\n\r\nðŸŽ‡IP67 tahan air\r\nDengan peringkat tahan air IP67, strip lampu neon kami dapat digunakan di luar ruangan (catatan: adaptor dan kotak kontrol tidak kedap air).\r\n\r\nðŸŽ‡5050 RGBIC\r\nSmart Neon Rope Light menggunakan chip 5050 RGBIC, warna yang lebih baik, dan kreativitas DIY.\r\n\r\nðŸŽ‡ Fungsi aplikasi pintar dan remote control multifungsi\r\n\r\n16 juta kustomisasi warna DIY, 100 mode pemandangan prasetel, 30 mode musik, sakelar tunda, dan sakelar pengatur waktu. Remote control mencakup fungsi, waktu, kecerahan, penyesuaian kecepatan. dll..(Catatan: Lepaskan lembaran plastik di ujung remote control sebelum digunakan.)\r\n\r\ndaftar pengepakan\r\n\r\nLampu tali neon Ã— 1\r\nAdaptor daya Ã— 1 (12V dengan pengisi daya, 5V tanpa pengisi daya)\r\nKlip x 6\r\nSekrup x 6\r\nKontrol jarak jauh Ã— 1', 'Aksesoris'),
(40, 'Wallpaper Sticker Roll 8 meter x 45cm Wallsticker Dinding Premium Motif Salur Batik Self A', 27000, 'KOTA JAKARTA PUSAT', '../foto_produk/image_2023-09-17_002628712.png', 'PASTIKAN MOTIF YANG DIPILIH SESUAI DENGAN VARIASI DAN NAMA PADA GAMBAR\r\nTIDAK TERIMA GANTI MOTIF VIA CHAT, DAN DIKIRIM HANYA SESUAI VARIASI \r\nUSAHAKAN ORDER DISATU WAKTU DAN SATU ORDERAN MENGHINDARI PERBEDAAN WARNA . KARENA BEDA WAKTU PRODUKSI BISA MENYEBABKAN PERBEDAAN WARNA.\r\n(PERBEDAAN WARNA BEDA WAKTU ORDER DAN NOMER ORDER BUKAN TANGGUNG JAWAB SELLER)\r\norder bubel warp juga untuk menghindari kerusakan dalam perjalanan\r\n\r\nUntuk motif lainnya cek di etalase produk lainnya yak\r\n\r\nwallpaper sticker dinding (KECERAHAAN WARNA TIDAK SELALU SAMA DENGAN FOTO KARENA FAKTOR EDITING FOTO DAN PRODUKSI PABRIK)\r\nsize 45 cm x 7-8 M (PANJANG KURLEB 7-8 M PRODUK IMPORT TIDAK DIUKUR ULANG)\r\nsudah ada lemnya \r\nSudah ada perekatnya (seperti sticker), Tinggal di tempel\r\nmembeli = setuju\r\nKelebihan :\r\nPemasangan dapat dilakukan sendiri\r\nHarga lebih terjangkau\r\nLebih praktis\r\nDapat di aplikasikan di dinding, kayu, kaca dl\r\n\r\nNOTE : Ukuran 45 cm lebarnya . Untuk panjang label 8 m kadang tidak real dr cinanya bisa kurang dari 8 m \"\r\n\r\nCara pasang :\r\n1. Ukur area yang ingin di tempel\r\n2. Potong wallpaper sesuai keperluan\r\n3. Buka sebagian kertas penutup perekat \r\n4. Posisikan wallpaper pada tembok\r\n5. Tempel dan ratakan dengan lap, sambil lepaskan sisa penutup perekat tersebut.\r\n\r\nMOHON UNTUK MEMBUAT VIDEO UNBOXING SETELAH PAKET DI TERIMA, JIKA TERJADI KOMPLAINAN TANPA VIDEO UNBOXING BUKAN MERUPAKAN TANGGUNG JAWAB KAMI.\r\n#wallpaper \r\n#wallpaperkamar \r\n#wallpapermurah\r\n#kamartidur', 'Hiasan'),
(41, 'Matras Evamat Matras Puzzle Karpet Puzzle Matras Alas Lantai Evamat 30x30cm Lembut Matras ', 5000, 'KAB. TANGGERANG', '../foto_produk/image_2023-09-17_002709364.png', 'Harga di atas adalah 1pcs\r\nMatras Puzzle EVA / Matras Evamat / Matras Alas Lantai\r\n\r\nMatras Puzzle ini cocok untuk digunakan di rumah sebagai alas untuk bermain anak. Ataupun untuk kegiatan lainnya. Terbuat dari bahan busa EVA yang nyaman sehingga membuat matras ini empuk dan lembut. Memiliki tekstur pada permukaan Matras, sehingga menjadikan lebih menarik dan anti slip.  \r\n\r\nMemiliki ukuran 30cm x 30cm dengan ketebalan 12mm, dengan 8 pilihan warna yang beragam yaitu: Kuning, Abu, Navy, Hijau, Pink, Ungu, Cream, dan Biru. Di lengkapi dengan lis samping untuk merapikan tepian alas jika diperlukan. Memiliki bahan yang lentur, kuat, dan tidak mudah robek. \r\n\r\nMatras EVA ini juga sangat mudah untuk dibersihkan dan anti air.\r\n\r\nInformasi:\r\n- Bahan: Busa EVA (Ethylene-viny acetate)\r\n- Ukuran: 30x30cm (Tebal: 12mm)\r\n- Fungsi: Matras bermain anak, Matras Olahraga', 'Hiasan'),
(42, 'Vinyl Lantai Marbel 30 x 30 cm/ Vinil Sticker Lantai Marbel Granit / Stiker Vinyl Lantai M', 5089, 'KOTA MEDAN', '../foto_produk/image_2023-09-17_002750765.png', '1 Kg Muat 30 Pcs\r\nBerat = 220 gram\r\nBahan = PVC\r\nUkuran :\r\n- 30 x 30 cm\r\nKetebalan : 0.2 mm\r\nPackage = x 1 Lembar Vinyl *HARGA UNTUK 1 LEMBAR *\r\n\r\nKelebihan parket vinyl PVC :\r\n- Anti Rayap.\r\n- Parket Vinyl sudah memliki perekat/lem yg memudahkan pengguna untuk mengaplikasikannya ke lantai atau permukaan lainnya. \r\n- kuat dan tahan dari air dan kelembapan. \r\n- Perawatan yg sangat mudah.\r\n- Harga ekonomis.\r\n- Vinyl sudah memiliki perekat (Sticker / Self Adhesive) tidak perlu lem lagi\r\n\r\nCara pemasangan:\r\n1. Ukur luas lantai yang ingin dilapiskan dan pastikan lantai bersih.\r\n2. pastikan permukaan lantai tidak berlubang, halus dan rata.\r\n3. Pastikan Anda meletakkan kepingan vinyl tile pada posisi yang tepat agar tak perlu digeser atau ditarik lagi.\r\n4. Buka lapisan perekat ditekan kuat-kuat setelah diaplikasikan.\r\n\r\nCARA HITUNG KEBUTUHAN UKURAN 30*30 CM\r\n1 pcs = 0.09 m2 \r\nJadi luas bidang yg mau di pasang di bagi 0.09\r\nContoh ruangan : 2 m x 3 m\r\nkebutuhannya: 2 m x 3 m / 0.09 = 66.6 lembar (67 lembar)', 'Hiasan'),
(45, 'Set Costume Maid Size M L XL Cosplay Pelayan Anime Jepang Kawaii Dress Lingerie Pembantu C', 75000, 'KOTA JAKARTA BARAT', '../foto_produk/image_2023-09-17_003332089.png', 'ðŸŒ¸ Mohon baca sampai selesai, beli = dianggap sudah baca dan setuju ðŸŒ¸\r\nðŸšš Lookme Ready Stock Jakarta\r\nâœ¨ Premium Quality , Bahan lembut nyaman & lolos QC âœ¨\r\nType : Lingerie Costume Cosplay\r\nBahan : Premium Cotton Blends Laces ( INI PRODUK IMPOR BUKAN PRODUKSI LOKAL)\r\n\r\nSize M : Lingkar dada 90 cm , lingkar pinggang / perut Ada Karet\r\n\r\nSize L : Lingkar dada 96 cm , lingkar pinggang / perut Ada Karet\r\n\r\nisi : 1 pc dress hitam + apron putih + bando + FREE g-string / celana dalam selama persediaan masih ada\r\n\r\n* Tidak termasuk stoking / kaos kaki ( dijual terpisah )\r\n\r\n*diukur manual estimasi error 1-2cm\r\n* Kemiripan foto & produk 95% (jika ada yg di tanyakan chat admin saja)\r\nðŸ›’ Perhatikan variasi yang di beli (kami kirim sesuai nota pesanan)\r\nðŸ” Privasi terjaga , nama barang dipotong dan diberi note isi paket = pakaian\r\nâŒ Tidak bisa tukar size / warna / model / pengembalian (fix order)\r\nâš ï¸ Seluruh komplain wajib melampirkan video unboxing buka paket / unboxing lengkap (video tidak putus2 / tidak di pause/tidak terpotong dan jelas) , jika tidak ada video = komplain tidak dilayani. Pengajuan komplain maximal 1 hari setelah pesanan diterima.\r\n- Komplain atas kelalaian pembeli seperti tidak muat / tidak suka / tidak baca / alasan pribadi dll = ditolak / tidak dilayani\r\n- Komplain barang kurang / salah / retur pengembalian barang & dana wajib ada video unboxing dan kondisi lingerie yang dibeli masih baru seperti awal diterima lengkap belum dicuci/tidak lepas tag/berbau& (layak dijual kembali)\r\nâ™¨ï¸ Mohon kejujuran nya untuk kehigienisan pakaian dalam\r\nBeli = dianggap sudah baca dan setuju\r\nTerimakasih\r\nðŸŽ€ Dijual satuan / grosir , menerima reseller / dropshipper\r\nHappy Shopping at Lookme Official ^o^\r\n\r\nðŸ’§Cara Merawat Lingerie :\r\n- Cuci dengan air mengalir, jangan direndam jika mau maks rendam 3 menit, usahakan cuci dengan tangan kucek pelan jika bahan lace / rentan robek maka jangan di sikat , jika ingin di mesin cuci masukkan ke dalam kantong mesin cuci khusus pakaian dalam supaya bentuk tidak berubah / rusak\r\n- Gunakan sabun secukupnya, bilas sampai bersih dan\r\n- Jemur sampai benar2 kering supaya tidak bau/berjamur\r\n', 'Pakaian'),
(46, 'Costume Kafka Honkai Impact Star Rail - No Brand', 435000, 'KTOA JAKARTA PUSAT', '../foto_produk/image_2023-09-17_003539867.png', 'Costume Only : 899,150 \r\nCostume + Wig No Brand : 1,171,900\r\nCostume + Wig No Brand + Sepatu : 1,497,400\r\n\r\nSepatu Only : 425,500\r\n\r\nReady Size : XS S M L XL XXL \r\n\r\nTranslate size chart :\r\nBaris 1 Lingkar dada\r\nBaris 2 Lebar Bahu\r\nBaris 3 Panjang kemeja putih\r\nBaris 4 Panjang Jaket\r\n\r\nHarap baca deskripsi sebelum pesan\r\nNote : Pengiriman 30 hari dari China, setelah konfirmasi pesanan, tidak terima batal/ ganti size', 'Pakaian'),
(47, 'Honkai Impact 3 Cosplay Rita Rossweisse Pvc Figure Statue Model Toy Collection', 270000, 'US', '../foto_produk/image_2023-09-17_003621580.png', 'International shipment of items may be subject to customs processing and additional charges', 'Hiasan'),
(48, 'Violet Evergarden Violet Cosplay Costume Kostum Dress Set', 250000, 'JAKARTA UTARA', '../foto_produk/image_2023-09-17_004033426.png', 'Brand: Wetrose\r\n100% Original\r\nImport HQ\r\nColor: As photo\r\nMaterial: polyester\r\nSize: M,L\r\nColor: As photo\r\nCosplay: Violet\r\nIncluding: As photo\r\nWig need to buy extraly\r\n\r\nReady Stock\r\nBukan PO', 'Pakaian'),
(49, 'OLYPS Screen Hanging Lamp 26cm LED Monitor Computer Screen Hanging Light Bar Eye Protectio', 219000, 'KOTA MEDAN', '../foto_produk/image_2023-09-17_004216780.png', 'âœ¨ Selamat datang di Toko Resmi Olyps Shopee\r\nâœ¨ Barang ini READY STOCK. Ini TERSEDIA dan selamat datang untuk memesan.\r\n\r\nðŸ¥‡ Fitur:\r\n1: Bahan ABS presisi, gaya genggam, mudah dibawa.\r\n2: High-density A-file LED manik-manik lampu cahaya konstan vertikal, tidak ada astigmatisme cahaya di sudut mana pun, disegel secara merata\r\n3: Dibungkus dengan paduan aluminium, teksturnya kelas satu, dan panjang 26CM sepenuhnya memenuhi ukuran layar komputer di pasaran\r\n4: pengaturan clip-on, komputer laptop, komputer kursi bersama\r\n5: Sepuluh tingkat penyesuaian pencahayaan, efek peralihan cahaya dingin dan hangat. Mengawal mata pekerja malam\r\n\r\nðŸ¥‡ Spesifikasi\r\nModel: DM18 hitam (gaya klip, panjang 26 cm)\r\nNama Produk: Lampu Gantung Notebook\r\nKontrol garis 4 tombol: sakelar / kontrol suhu warna / penyesuaian kecerahan\r\n3 suhu warna: putih/kuning/dua nada\r\n9 jenis kecerahan\r\nPanjang garis: 39cm\r\nSudut pencahayaan: 120 Â°\r\nSudut penyesuaian klip: 90 Â°\r\nDaya kerja: 5W DC5V1A\r\nCatu daya input antarmuka USB\r\nUkuran: 274*60*45mm\r\nBerat kotorï¼š140g\r\n\r\nðŸŽ Paket termasuk:\r\nScreen Hanging Lamp *1\r\ntas penyimpanan  *1\r\npanduan *1', 'Aksesoris'),
(50, 'UNIG 3 IN 1 Ambient light 15w Wireless Charger Smart Lamp LED light Night Light Handphone ', 139000, 'STABAT', '../foto_produk/image_2023-09-17_004311154.png', 'READY/BISA COD\r\n\r\nDeskripsi Produk:\r\n\r\nNote : di harapkan Beli extra Bubble packing ( di etalase produk )\r\nAgar lebih aman saat pengiriman \r\nSebelum Buka paket wajib video unboxing,harus memberikan video unboxing baru ada 3 hari garansi\r\n\r\nFungsi Deskripsi: 15W Pengisian Nirkabel, Lampu Tidur,  Lampu Atmosfer, Lampu samping Tempat Tidur, Efek Pencahayaan yang Menyilaukan, Audio Bluetooth\r\n\r\nJika anda memeli 2 unit speaker,kamu dapat menghubungkannya dengan bluetooth dan mengubahnya menjadi saluran stereo,memungkinkan ada menikmat musik live 3D\r\n\r\nDeskripsi Produk:\r\n1. Tegangan input: 12v/2.5a\r\n2. Output Nirkabel: 5W-7.5W-10-15W\r\n3. Output LDE: 10W\r\n4. Bluetooth Audio Power: 3W\r\n5. Bahan: ABS+PC\r\n6. Warna Produk: Hitam, Putih\r\n7. Jarak Transmisi: 2-6mm\r\n8. Efisiensi Pengisian: 75 %\r\n9. Frekuensi Kerja: 100-205kHz\r\n10. Tombol Baterai Kapasitas: 40mAh\r\n11. Berat Bersih: 466 gram\r\n12. Ukuran Produk: 240*80*230mm\r\n\r\n\r\nIsi Kemasan:\r\n1 Pcs Speaker Table Lampu\r\n1 Pcs Pengisian kabel Type C ( Tidak termasuk Adaptor )\r\n1 Buah Panduan Pengguna\r\n\r\n\r\nKompatibilitas Pengisian Nirkabel Cepat 15W:\r\nPonsel Apple: iPhone14/14 Pro/14 Plus/14 Pro Max/13 Pro/13 Pro Max/12/12 Pro Max/11/XS/MAX/XR/X/8/8 Plus\r\nPonsel Samsung: GalaxyS23/Su23+/S23Ultra/S22/S22Ultra/S20/S20+/S20Ultra/10/S10+/S9/S9+/S8/S8+/S7/S7edge/S6edge Plus/Catatan 10/9/8/7/5\r\nSemua Handphone Android dan Handphone IOS yang model tertentu support wireless charging baru mendukung pengisian daya (charging Bateria).\r\n\r\n*Jika mau charging wireless Hp anda ,lampu Ambient light Wajib Colok Ke listrik Karena Bateria hanya bisa untuk Nyala lampu dan speaker saja\r\nHeadphone: Headphone asli Apple Airpods/Airpods Pro', 'Aksesoris'),
(51, 'Lampu Aesthetic, Lampu Awan plus 1 bonus 1 awan senyum kecil', 90000, 'KAB. KUNINGAN', '../foto_produk/image_2023-09-17_004351866.png', 'Produk HITS & BEST SELLER !!!!\r\nPENTING : Harga untuk 1 pcs lampu awan plus 1 awan senyum kecil \r\nBELI 2 awan OTOMATIS Dapet 2 awan senyum Kecil jg, jd bisa di dekor persis gambar. ðŸ˜\r\n\r\nðŸ’¥Untuk 1 lampu awan beratnya 750 gram, beli 2  kena 2 kg. Klo Checkout nya satu satu biar dapet free ongkir 2x tetep dapet bonus ga? Tetep dapet ko, yg penting akun yg order nya sama, biar gampang detect nya.  ðŸ™‚\r\nnote: kalo bonus awan senyum kecil habis, kami ganti dengan bonus lain sesuai stok ya ðŸ™, tapi pasti dapet BONUS. ðŸ™‚\r\n\r\nKita namain lampu awan ini warm cloud, awan lampu kuning yg bikin suasana Hangat. ðŸ¤©\r\n\r\nðŸ‘‰ Ukuran besar ga? Besar ka, 45 cm x 30 cm\r\nðŸ‘‰ Kabelnya hitam atau putih? Kabel PUTIH ko ka, (ga mengganggu pemandangan di dinding)\r\nðŸ‘‰ Panjang kabel brpa? Panjang kabel 1,5 - 1,8 meter, dekorasiin sesuka hati bisa jauh dari stop kontak. ðŸ˜€\r\nðŸ‘‰ Mau pake BATERAI aja biar simple bisa? BISA. Pilih awan batre saat Checkout, nnti kita setting lampunya pake batre nyala nya. Tapi batre nya ga termasuk dlm paket y.\r\nBatre yg digunakan = Batre kotak 9 volt \r\nðŸ‘‰ Pemasangannya gimana? dicantelin ke paku kecil jg cukup.\r\nðŸ‘‰ Material apa? Material dasar kayu MDF 6mm\r\n', 'Aksesoris'),
(52, 'Bepop Smart LED Strip Lampu Hias Tumble 10M RGB Light Wifi APP Control', 129900, 'KOTA MEDAN', '../foto_produk/image_2023-09-17_004438299.png', 'Lampu LED Strip ini memiliki 2 varian yaitu 5 Meter dan 10 Meter\r\nLampu ini bisa di atur dari applikasi yang sudah di sediakan bisa di download dengan nama aplikasi TechLife Pro atau anda bisa atur dengan remote yang sudah di sediakan.\r\n\r\nLampu LED Strip ini juga sangat Aman digunakan dan bila lampunya kepanjangan saat di dekor anda juga bisa memotong bagian yang tidak perlu digunakan Lampu LED ini ana tetap menyala.\r\n\r\nSpesifikasi:\r\nKabel Adaptor :\r\n- Model : 1250\r\n- Input : AC100-240V 50/60Hz\r\nLampu LED Strip\r\n- Tegangan Daya : 12V Safety Strip\r\n\r\nIsi dalam 1 Paket\r\n- 1 Roll Strip lampu LED untuk 5M / 2 Rolls Strip Lampu LED untuk 10M\r\n- 1 Remote control Lampu LED \r\n- 1 Kabel Adapter \r\n- 1 kabel penghubung lampu ke adapter\r\n- 1 Buku panduan \r\n\r\nUntuk GARANSI : \r\n- Berlaku 3x24 JAM sejak barang diterima. Lewat dari 3x24 jam garansi hangus (Sertakan bukti Rekaman Video Saat Pembukaan Paket )\r\n- Chat terlebih dahulu sebelum return\r\n- Ulasan dibawah bintang 5 = GARANSI HANGUS ', 'Aksesoris'),
(54, 'Logo', 9000, 'medan', '../foto_produk/460079d4eb9c325896c295b0c4473845.LOGO-PROVINSI-SUMATERA-UTARA.png', 'KEren', 'Hiasan');

-- --------------------------------------------------------

--
-- Table structure for table `produk_pribadi`
--

CREATE TABLE `produk_pribadi` (
  `id_produk` int(11) NOT NULL,
  `judul_produk` varchar(90) NOT NULL,
  `deskripsi_produk` varchar(1000) NOT NULL,
  `harga` int(255) NOT NULL,
  `lokasi` varchar(1200) NOT NULL,
  `foto_produk` varchar(9000) NOT NULL,
  `id_user_toko` int(11) NOT NULL,
  `tipe` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `toko_user`
--

CREATE TABLE `toko_user` (
  `id_toko` int(11) NOT NULL,
  `id_owner` int(11) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `alamat` varchar(1900) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `pfp_toko` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `toko_user`
--

INSERT INTO `toko_user` (`id_toko`, `id_owner`, `nama_toko`, `alamat`, `deskripsi`, `pfp_toko`) VALUES
(23, 16, 'toko iban', 'Jupiter', 'Bukan Toko Cina', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `produk_pribadi`
--
ALTER TABLE `produk_pribadi`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `toko_user`
--
ALTER TABLE `toko_user`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_acc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `produk_pribadi`
--
ALTER TABLE `produk_pribadi`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `toko_user`
--
ALTER TABLE `toko_user`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
