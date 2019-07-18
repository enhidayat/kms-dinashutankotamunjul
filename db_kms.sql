-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2018 at 05:03 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_kms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'dayat', 'asd'),
(2, 'aqaf', '123');

-- --------------------------------------------------------

--
-- Table structure for table `filelib`
--

CREATE TABLE IF NOT EXISTS `filelib` (
`fileid` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `filedir` varchar(300) NOT NULL,
  `ownerid` varchar(40) NOT NULL,
  `download` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `filelib`
--

INSERT INTO `filelib` (`fileid`, `filename`, `filedir`, `ownerid`, `download`) VALUES
(23, 'format kinerja.docx', 'user/filelib/panduan_kerja/', 'dayat', 0),
(25, 'Cara Menanam Pohon.pdf', 'user/filelib/panduan_kerja/', 'dayat', 0),
(26, 'Daftar Nama Pohon .pdf', 'user/filelib/panduan_kerja/', 'dayat', 0),
(27, 'Menjaga Keindahan Taman dan Area Wisata Hutan Kota.pdf', 'user/filelib/panduan_kerja/', 'dayat', 0),
(28, 'Persemaian danPerawatan bibit .pdf', 'user/filelib/panduan_kerja/', 'dayat', 0),
(29, 'ABSENSI.docx', 'user/filelib/praktik_kerja/', 'dayat', 0),
(30, 'LAPORAN DINAS.pptx', 'user/filelib/panduan_kerja/', 'dayat', 0),
(31, 'DAFTAR POHON TAHUN 2017.docx', 'user/filelib/praktik_kerja/', 'dayat', 0),
(32, 'DAFTAR POHON TAHUN 2017.docx', 'user/filelib/dokumentasi_kerja/', 'dayat', 0),
(33, 'data bibit.xlsx', 'user/filelib/dokumentasi_kerja/', 'dayat', 0),
(34, 'pohon.docx', 'user/filelib/dokumen_penelitian/', 'dayat', 0),
(35, 'data bibit.xlsx', 'user/filelib/dokumen_penelitian/', 'dayat', 0),
(39, 'Cara membuat pupuk kompos.pdf', 'user/filelib/panduan_kerja/', 'dayat', 0),
(40, 'USER GUIDE e-Purchasing Pejabat Pengadaan.pdf', 'user/filelib/dokumen_penelitian/', 'dayat', 0),
(41, ' Pesiapan bibit tanaman yang penting dalam pembangunan hutan kota.pdf', 'user/filelib/panduan_kerja/', 'dayat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
`forumid` int(11) NOT NULL,
  `owner` varchar(40) NOT NULL,
  `forumtitle` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `forumcontent` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forumid`, `owner`, `forumtitle`, `category`, `forumcontent`) VALUES
(6, 'dayat', 'Perawatan Taman', 'Keindahan Taman dan Hutan Kota', 'Untuk menjaga keindahan taman hutan kota munjul agar tetap indah dan menarik pengunjung hendaknya dilakukan beberapa hal:1.Pemotongan tanaman hias dengan rapi secara berkala 2.Menjaga Kesehatan tanaman degan memupuk dan menghilangkan penyakit tanaman dan serangga'),
(11, 'dayat', 'Cara Membuat Pupuk Kompos ', 'Lain - lain', 'Tumpuklah kotoran ternak, sampah organik, dan seresah dedaunan hingga membentuk seperti gundukan setinggi kurang lebih 20 cm. Taburkan bahan lainnya yaitu dedak kasar, abu dapur, dan kapur di atas gundukan. Siram gundukan dengan air sumur dan air kencing ternak yang sudah dipersiapkan'),
(16, 'aqaf', 'Cara menanam pohon yang baik', 'Pelestarian Tanaman', 'Cara menanam pohon yang baik agar pertumbuhan pohon dapat optimal adalah 1.Memilih bibit pohon yang berkualitas 2.Menggali lubang tempat menananam pohon dengan ukuran panjang dan lebar 25 cm dan kedalaman 25 cm. 3.Memberikan jarak antar bibit pohon satu dengan bibit lainya yang ditanam 1 meter 4.Memberikan plang nama bibit pohon yang ditanam agar tidak terinjak. 5.Memberikan pupuk bila diperlukan.'),
(17, 'aqaf', 'Pemilihan benih bermutu', 'Bibit', 'Benih bermutu adalah benih yang mempunyai kemurnian genetik, kemurnian fisik maupun physiologis yang cukup tinggi. Produksi benih harus melalui sertifikasi. sebagaimana diatur dalam Peraturan Pemerintah No 44 Tahun 1995 tentang Perbenihan Tanaman.'),
(18, 'dayat', 'Pemeliharaan Tanaman Tahun Berjalan', 'Pelestarian Tanaman', 'Meliputi kegiatan pemupukan (pupuk organik dan an organik), penyiangan, penyulaman, pendaringan/penjarangan, pengendalaian hama penyakit.Penyulaman tahun berjalan untuk mengganti tanaman yang mati/tidak tumbuhnormal sebanayak maksimum 10 persen (40 batang bibit)'),
(19, 'dayat', 'Persyaratan umum tanaman', 'Pelestarian Tanaman', 'a. Tahan terhadap hama dan penyakit \r\nb.Cepat tumbuh\r\nc.Kelengkapan jenis dan penyebaran jenis,\r\nd.Mempunyai umur yang panjang,\r\ne.Mempunyai bentuk yang indah,\r\nf.Ketika dewasa sesuai dengan ruang yang adag.Kompatibel dengan tanaman lainh.Serbuk sarinya tidak bersifat alergis,'),
(20, 'dayat', 'Pesiapan bibit tanaman yang penting dalam pembangunan hutan kota ', 'Pelestarian Tanaman', 'Pesiapan bibit tanaman yang penting dalam pembangunan hutan kota : \r\n\r\n1.mempunyai perakaran yang dalam, kuat, tidak udah tumbang, dan tidak mudahgugur 2.Mampu tumbuh pada ruang terbuka dan pada berbagai jenis tanah 3.Tumbuh cepat dan tahan terhadap gangguan fisik 4.Tidak memerlukan perawatan intensif (rendah sampai tidak perlu perawatan) 5.Berumur panjang6.Tahan terhadap kekurang air 7.Pohon-pohon langka dan unggulan setempat 8.pohon-pohon penghasil bunga/biji/buah yang bernilai ekonomis 9.pohon-pohon yang yang teduh dan indah penghasil bunga/biji.buah yang duskaioleh burung, kupu-kupu, dan sebaginya 10.pohon-pohon dengan evaporasi yang rendah 11.pophon penaha erosi laut (abrasi pantai) 12.Dapat ditaman dengan kepadatan sampai 440 pohon/ha (standar 400 pohon/ha)'),
(21, 'dayat', 'Faktor-faktor utama  teknik penanaman pohon', 'Pelestarian Tanaman', 'Faktor-faktor utama yang perlu diperhatikan lainnya yaitu dalam teknik penanaman pohon :(1) Pemilihan bibit tanaman. Bibit generatif adalah berasal dari biji, merupakan bibityang lebih tepat karena mempunyai akar tunggang dan dapat hidup lebih lama.Bibit vegetatif, adalah bibit yang berasal dari bagian-bagian vegetatif tanaman,seperti batang, daun dan akar. Bibit vegetatif umumnya kurang kokoh dan perakarannya dangkal sehingga cepat merusak trotoar, jalan atau saluran drainase.Bibit yang baik sekurang-kurangnya telah tumbuh di wadahnya selama 6 bulandengan batang tinggi minimal + 1.50 m dan diameter 0.05 m, untuk mengujinyacukup dengan mencabut bibit tersebut. Apabila bibit mudah lepas dari wadahnya berarti baru dipindahkan dan belum cukup baik ditanam di lapangan, sebaliknya jika sulit dilepaskan berarti perakarannya sudah terbentuk dengan baik dan dapatditanam di lapangan;(2) Penanaman. Lubang tanam perlu dipersiapkan sedikitnya satu minggu sebelum penanaman dilakukan. Ukuran lubang tanam sangat bergantung pada besarnyatanaman. Ukuran standar lubang tanam adalah 0.75 m (tinggi) x 0.90 m (lebar) x0.90 m (panjang);(3) Perawatan pascatanam. Mempertahankan posisi tumbuh agar tetap tegak dan stabil.Menyiram tanaman 2-3 hari sekali terutama di musim kemarau sambil membuangranting-ranting yang kering. Memupuk tanaman 3 bulan sekali dengan pupuk NPK 25 gram per lubang (Rully Wijayakusuma, 2004).');

-- --------------------------------------------------------

--
-- Table structure for table `forum_response`
--

CREATE TABLE IF NOT EXISTS `forum_response` (
`forumresid` int(11) NOT NULL,
  `forumid` int(11) NOT NULL,
  `resusername` varchar(40) NOT NULL,
  `resnama` varchar(40) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `forum_response`
--

INSERT INTO `forum_response` (`forumresid`, `forumid`, `resusername`, `resnama`, `comment`) VALUES
(5, 7, 'dayat', 'Nurul Hidayat', 'tes komentar'),
(6, 5, 'dayat', 'Nurul Hidayat', 'test komentar....'),
(7, 11, 'aqaf', 'muntakap', 'MasyaALLAH sangat bermanfat tulisanya.. lanjutkan'),
(8, 1, 'dayat', 'Nurul Hidayat', 'tes\r\n'),
(9, 16, 'dayat', 'Nurul Hidayat', 'MasyaAllah sangat bermanfaat topiknya..');

-- --------------------------------------------------------

--
-- Table structure for table `learn`
--

CREATE TABLE IF NOT EXISTS `learn` (
`learnid` int(11) NOT NULL,
  `learntitle` varchar(100) NOT NULL,
  `ownerid` varchar(40) NOT NULL,
  `learndir` varchar(300) NOT NULL,
  `description` longtext NOT NULL,
  `watch` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `learn`
--

INSERT INTO `learn` (`learnid`, `learntitle`, `ownerid`, `learndir`, `description`, `watch`) VALUES
(1, 'Google Glass How to Getting Started', 'ranggi', 'user/learn/panduan_kerja/', '', 232),
(2, 'Introducing Glowforge - The 3D Laser Printer', 'ranggi', 'user/learn/praktik_kerja/', '', 1),
(3, 'Volvo Trucks - The Epic Split feat. Van Damme', 'ranggi', 'user/learn/panduan_kerja/', '', 11),
(5, 'Social Media Platforms Are All Copycats', 'ranggi', 'user/learn/dokumen_penelitian/', '', 7),
(6, 'Dolby Digital - HD Surround Sound Test', 'ranggi', 'user/learn/dokumentasi_kerja/', '', 0),
(7, 'GALAXY S4 Official TVC - Group Play (Share Music)', 'ranggi', 'user/learn/panduan_kerja/', '', 68),
(8, 'Inilah Keutamaan Ketika Akhirat Lebih Kita Cintai Daripada ', 'dayat', 'user/learn/panduan_kerja/', '', 1),
(9, 'Panduan Kerja', 'dayat', 'user/learn/panduan_kerja/', '', 1),
(10, 'VID_20180406_100105', 'dayat', 'user/learn/panduan_kerja/', '', 2),
(11, 'Dokumentasi Kerja ', 'dayat', 'user/learn/panduan_kerja/', '', 7),
(12, 'Praktik Kerja', 'dayat', 'user/learn/panduan_kerja/', '', 1),
(13, 'VID_20180406_100708', 'dayat', 'user/learn/panduan_kerja/', '', 5),
(14, 'VID_20180406_100105', 'dayat', 'user/learn/panduan_kerja/', '', 2),
(15, 'Dokumentasi Kerja ', 'dayat', 'user/learn/praktik_kerja/', '', 7),
(16, 'VID_20180406_100105', 'dayat', 'user/learn/praktik_kerja/', '', 2),
(17, 'Dokumentasi Kerja ', 'dayat', 'user/learn/dokumentasi_kerja/', '', 7),
(18, 'VID_20180406_100708', 'dayat', 'user/learn/dokumentasi_kerja/', '', 5),
(19, 'VID_20180406_100708', 'dayat', 'user/learn/dokumen_penelitian/', '', 5),
(20, 'VID_20180406_100105', 'dayat', 'user/learn/dokumen_penelitian/', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `learn_response`
--

CREATE TABLE IF NOT EXISTS `learn_response` (
`learnresid` int(11) NOT NULL,
  `learnid` int(11) NOT NULL,
  `resusername` varchar(40) NOT NULL,
  `resnama` varchar(40) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `learn_response`
--

INSERT INTO `learn_response` (`learnresid`, `learnid`, `resusername`, `resnama`, `comment`) VALUES
(1, 1, 'ranggi', 'Ranggi Rahman', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
(2, 1, 'lingga', 'Lingga Setyagusti', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English.'),
(18, 1, 'ranggi', 'Ranggi Rahman', 'Test Comment '),
(19, 5, 'ranggi', 'Ranggi Rahman', 'Test'),
(20, 7, 'mela', 'Mela Dewi', 'Hallo'),
(21, 7, 'ranggi', 'Ranggi Rahman', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.'),
(22, 1, 'ranggi', 'Ranggi Rahman', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.'),
(23, 1, 'ranggi', 'Ranggi Rahman', 'Test'),
(24, 13, 'dayat', 'Nurul Hidayat', 'mantap');

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE IF NOT EXISTS `pengetahuan` (
  `id_pengetahuan` int(5) NOT NULL,
  `uploader` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id_pengetahuan`, `uploader`, `tanggal`, `judul`, `isi`) VALUES
(1, 'aqaf', '2018-07-10', 'Pemilihan Binih Bermutu', '  Benih bermutu adalah benih yang mempunyai kemurnian genetik, kemurnian fisik maupun physiologis yang cukup tinggi. Produksi benih harus melalui sertifikasi. sebagaimana diatur dalam Peraturan Pemerintah No 44 Tahun 1995 tentang Perbenihan Tanaman.'),
(2, 'dayat', '2018-07-07', 'Cara menanam pohon yang baik', 'Cara menanam pohon yang baik agar pertumbuhan pohon dapat optimal adalah\r\n1.Memilih bibit pohon yang berkualitas\r\n2.Menggali lubang tempat menananam pohon dengan ukuran panjang dan lebar       \r\n  25 cm dan kedalaman 25 cm.\r\n3.Memberikan jarak antar bibit pohon satu dengan bibit lainya yang ditanam  \r\n 1 meter\r\n4.Memberikan plang nama bibit pohon yang ditanam agar tidak terinjak.\r\n5.Memberikan pupuk bila diperlukan.'),
(3, 'wawan', '2018-08-01', 'Cara Merawat  Hutan Kota', '1.melakukan tebang pilih 2.melakukan reboisasi 3.memanfaatkan sumberdaya alam seperlunya saja 3.tidak membuang sampah pabrik ke hutan'),
(4, 'Tibyani', '2018-08-02', 'Cara Membuat pupuk Kompos', 'Sediakan tempat untuk membuat pupuk kompos, tempat yang ideal berukuran sekitar 5-10 meter kubik (sesuai kebutuhan) bisa dengan menggunakan papan cor.\r\nLokasi tempat pembuatan baiknya terlindung dari sinar matahari langsung atau hujan, bisa ditutup dengan terpal.\r\nSiapkan bahan-bahan organik seperti sisa-sisa tanaman, jerami, batang pisang, kotoran ternak, atau bahan organik lainnya. Potong-potong bahan organik menjadi kecil agar lebih cepat terurai dan muat banyak.\r\nMasukkan bahan organik ke dalam wadah atau bak penampung sampai padat, isi sampai penuh setelah itu siram dengan air, air bisa dicampur dengan larutan EM4 untuk mempercepat pembusukan.\r\nBiarkan selama 2-4 hari.\r\nDi hari ke 4 siram kembali dengan air untuk menurunkan suhu agar mikroorganisme tidak mati.\r\n3-4 Hari sekali bulak-balikkan bahan-bahan kompos agar menjaga suhu tetap optimal.\r\nBiasanya dalam waktu 40-45 hari kompos sudah jadi, kompos yang sudah jadi ditandai dengan warna hitam kecoklatan, halus atau gembur, tidak berbau, dan menyusut dari bahan awal sekitar 50%.'),
(5, 'Zainal', '2018-08-03', 'Pemeliharaan tahun berjalan', ' Meliputi kegiatan pemupukan (pupuk organik dan an organik), penyiangan, penyulaman, pendaringan/penjarangan, pengendalaian hama penyakit.Penyulaman tahun berjalan untuk mengganti tanaman yang mati/tidak tumbuhnormal sebanayak maksimum 10 persen (40 batang bibit)'),
(6, 'dayat', '2018-07-04', 'Pesiapan bibit tanaman yang penting dalam pembangunan hutan kota ', 'Pesiapan bibit tanaman yang penting dalam pembangunan hutan kota :\r\n\r\n1.mempunyai perakaran yang dalam, kuat, tidak udah tumbang, dan tidak mudahgugur 2.Mampu tumbuh pada ruang terbuka dan pada berbagai jenis tanah\r\n3.Tumbuh cepat dan tahan terhadap gangguan fisik \r\n4.Tidak memerlukan perawatan intensif (rendah sampai tidak perlu perawatan)\r\n5.Berumur panjang6.Tahan terhadap kekurang air \r\n7.Pohon-pohon langka dan unggulan setempat\r\n8.pohon-pohon penghasil bunga/biji/buah yang bernilai ekonomis\r\n9.pohon-pohon yang yang teduh dan indah penghasil bunga/biji.buah yang duskaioleh burung, kupu-kupu, dan sebaginya\r\n10.pohon-pohon dengan evaporasi yang rendah\r\n11.pophon penaha erosi laut (abrasi pantai)\r\n12.Dapat ditaman dengan kepadatan sampai 440 pohon/ha (standar 400 pohon/ha)'),
(7, 'aqaf', '2018-08-05', 'Pengertian Hutan Kota', 'Pengertian dan lingkup hutan kota dalam tulisan ini didasarkan pada PeraturanMenteri Kehutanan No. P.03/Menhut-V/2004 bagian ke enam.1)Hutan kota itu sendiri dapat diartikan sebagai suatu kesatuan ekosistem berupahamaparan yang bertumbuhan pohon-pohon yang kompak dan rapat di dalamwilayah perkotaan, baik pada tanah negara maupun tanah hak, yang ditetapkansebagi hutan kota oleh pejaabat yang berwenang.2)Hutan kotaa.Merupakan bagaian dari RTH (Ruang Terbuka Hijau) sesuai peruntukandalam RTRW Kabupaten/kota. b.Luas minimal adalah 0,25 hektar dalam satu hamparan yang kompak danmenyatu (hamparan yang menyatu) agar tercipta iklim mikro.c.Berada pada tanah negara atau tanah hak, sesuai persyaratan dalam PP No.63 tahun 2002.'),
(8, 'tibyani', '2018-08-01', 'Tipe dan Bentuk Hutan Kota', 'Menurut PP RI No 63/2002 , tipe hutan kota terdiri dari :a. kawasan permukiman (hutan kota pemukiman); b. kawasan industri (hutan kota industri)c. rekreasi (hutan kota wisata);d.pelestarian plasma nutfah (hutan kota khusus yaitu untuk sangtuari satwa Burung,Sarana pendidikan dan penelitian, koleksi plasma nutfah, hankam, tanaman obat dlle. perlindungan (hutan kota khusus); danf. pengamanan (hutan kota konsevasi).Menurut\r\n \r\nPP RI No 63/2002 , bentuk hutan kota terdiri dari :(2) Bentuk hutan kota sebagaimana dimaksud dalam ayat (1) terdiri atas :\r\na. jalur \r\n b. mengelompok; dan\r\nc. menyebar.'),
(9, 'dayat', '2018-07-09', 'Fungsi dan Pemanfaatan Hutan Kota', 'Fungsi dan manfaat hutan (hutan kota) antara lain untuk memberikan hasil, pencagaran flora dan fauna, pengendalian air tanah dan erosi, ameliorasi iklim. Jikahutan tersebut berada di dalam kota maka fungsi dan manfaat hutan antara lainmenciptakan iklim mikro, engineering , arsitektural, estetika, modifikasi suhu, peresapanair hujan, perlindungan angin dan udara, pengendalian polusi udara, pengelolaan limbahdan memperkecil pantulan sinar matahari, pengendalian erosi tanah, mengurangi aliran permukaan, mengikat tanah. Konstruksi vegetasi dapat mengatur keseimbangan air dengan cara intersepsi, infiltrasi, evaporasi dan transpirasi.'),
(10, 'takap', '2018-08-01', 'Pengelolaan Hutan Kota', ' Guna mendapatkan keberhasilan dalam mencapai tujuan pengelolaan lingkungan hidupdi perkotaan, jenis yang ditanam dalam program pembangunan dan pengembanganhutan kota hendaknya dipilih berdasarkan beberapa pertimbangan dengan tujuan agar tanaman dapat tumbuh baik dan tanaman tersebut dapat menanggulangi masalahlingkungan yang muncul di tempat itu dengan baik.Untuk mendapat hasil pertumbuhantanaman serta manfaat hutan kota yang maksimal, beberapa informasi yang perludiperhatikan dan dikumpulkan antara lain:1.Persyaratan edaphis: pH, jenis tanah, tekstur, altitude,salinitas dan lain-lain.2.Persyaratan meteorologis: suhu, kelembaban udara, kecepatan angin, radiasimatahari.3.Persyaratan silvikultur: kemudahan dalam hal penyediaan benih dan bibit dankemudahan dalam tingkat pemeliharaan.4.Persyaratan umum tanaman:a.Tahan terhadap hama dan penyakit b.Cepat tumbuhc.Kelengkapan jenis dan penyebaran jenis,d.Mempunyai umur yang panjang,e.Mempunyai bentuk yang indah,f.Ketika dewasa sesuai dengan ruang yang adag.Kompatibel dengan tanaman lainh.Serbuk sarinya tidak bersifat alergis,Pengelolaan hutan kota pada dasarnya disesuaikan/diselaraskan dengan fungsidan manfaatnya. Pelaksanaan kegiatan Pengelolaan Hutan Kota beserta kegiatan pendukungnya diharapkan untuk dapat :1.Kawasan Pemukiman, yang berfungsi sebagai penghasil oksigen, penyerapkarbondioksida, peresap air, penahan angin, dan peredam kebisingan. Komposisitanaman berupa jenis pepohonan yang tinggi dikombinasikan dengan tanaman perdu dan rerumputan.Hutan kota yang dibangun pada areal pemukiman bertujuan utama untuk  pengelolaan lingkungan pemukiman, maka yang harus dibangun adalah hutankota dengan tipe pemukiman. Hutan kota tipe ini lebih dititik-beratkan kepadakeindahan, penyejukan, penyediaan habitat satwa khususnya burung, dan tempat bermain dan bersantai.2. Kawasan industri, yang berfungsi untuk mengurangi polusi udara dankebisingan, yang ditimbulkan dari kegiatan industri. Kawasan industri yangmemiliki kebisingan yang tinggi dan udaranya tercemar, maka harus dibangunhutan kota dengan tipe kawasan industri yang mempunyai fungsi sebagai penyerap pencemar, tempat istirahat bagi pekerja, tempat parkir kendaraan dankeindahan. Beberapa jenis tanaman telah diketahui kemampuannya dalammenyerap dan menjerap polutan. Dewasa ini juga tengah diteliti ketahanan dari beberapa jenis tanaman terhadap polutan yang dihasilkan oleh suatu pabrik.Dengan demikian informasi ini dapat dijadikan sebagai bahan pertimbangandalam memilih jenis-jenis tanaman yang akan dikembangkan di kawasanindustri.3. Kawasan rekreasi, yaitu penghijauan kota berfungsi sebagai pemenuhankebutuhan rekreasi dan keindahan, dengan jenis pepohonan yang indah danunik.Manusia dalam kehidupannya tidak hanya berusaha untuk memenuhi kebutuhan jasmaniah seperti makanan dan minuman, tetapi juga berusaha memenuhi kebutuhan rohaniahnya, antara lain rekreasi dan keindahan. Rekreasi dapatdidefinisikan sebagai setiap kegiatan manusia untuk memanfaatkan waktuluangnya (Douglass, 1982). Pigram dalam Mercer (1980) mengemukakan bahwarekreasi dapat dibagi menjadi dua golongan yakni : (1) Rekreasi di dalam bangunan (indoor recreation) dan (2) Rekreasi di alam terbuka (outdoor recreation). Brockman (1979) mengemukakan, rekreasi dalam bangunan yaitumendatangkan pengalaman baru, lebih menyehatkan baik jasmani maupunrohani, serta meningkatkan ketrampilan.Dewasa ini terdapat kecenderungan terjadinya peningkatan minat penduduk  perkotaan untuk rekreasi. Hal ini sangat erat kaitannya dengan peningkatan pendapatan, peningkatan sarana transportasi, peningkatan sistem informasi baik cetak maupun elektronika, semakin sibuk dan semakin besar kemungkinanuntuk mendapat stress.Rekreasi pada kawasan hutan kota bertujuan untuk menyegarkan kembalikondisi badan yang sudah penat dan jenuh dengan kegiatan rutin, supaya siapmenghadapi tugas yang baru. Untuk mendapatkan kesegaran diperlukan suatumasa istirahat yang terbebas dari proses berpikir yang rutin sambil menikmatisajian alam yang indah, segar dan penuh ketenangan.4. Kawasan pelestariaan plasma nutfah, yang berfungsi sebagai pelestari plasmanutfah, meliputi :a) Penghijauan kota sebagai konservasi plasma nutfah khususnya vegetasi in-situ dan ex-situ; b) Penghijauan kota sebagai habitat satwa yang dilindungi atau yangdikembangkan.Plasma nutfah merupakan bahan baku yang penting untuk pembangunan di masadepan, terutama di bidang pangan, sandang, papan, obat-obatan dan industri.Penguasaannya merupakan keuntungan komparatif yang besar bagi Indonesia dimasa depan. Oleh karena itu, plasma nutfah perlu terus dilestarikan dandikembangkan bersama untuk mempertahankan keanekaragaman hayati. Hutan kota dapat dijadikan sebagai tempat koleksi keanekaragaman hayati yangtersebar di seluruh wilayah tanah air kita. Kawasan hutan kota dapat dipandangsebagai areal pelestarian di luar kawasan konservasi, karena pada areal ini dapatdilestarikan flora dan fauna secara exsitu.Manusia modern menginginkan back to nature. Hutan kota dapat diarahkankepada penyediaan habitat burung dan satwa lainnya. Suatu kota sering kalimempunyai kekhasan dalam satwa tertentu, khususnys burung yang perludiperhatikan kelestariannya. Untuk melestarikan burung tertentu, maka jenistanaman yang perlu ditanam adalah yang sesuai dengan keperluan hidup satwayang akan dilindungi atau ingin dikembangkan, misalnya untuk keperluan bersarang, bermain, mencari makan ataupun untuk bertelur.Hutan yang terdapat di pesisir pantai menghasilkan bahan organik. Dedaunanyang jatuh ke air laut kemudia dapat berubah menjadi detritus. Pada permukaandetritus dapat menjumpai mikroorganisme air. Sebagian hewan merupakan pemakan detritus ( detritus feeder ). Nampaknya organisme yang memakandetritus ini, sesungguhnya memangsa mikroorganismenya, karenamikroorganisme mengandung protein, karbohidrat dan lain-lain. Apabila hutanini hilang, maka detritus tidak tersedia lagi dan akibatnya hewan pemakandetritus pun akan musnah.5. Kawasan perlindungan, yaitu penghijauan kota yang berfungsi untuk :a) Mencegah/mengurangi bahaya erosi dan longsor pada lahan dengankemiringan cukup tinggi dan sesuai karakter tanah; b) Melindungi daerah pantai dari gempuran ombak (abrasi);c) Resapan air untuk mengatasi masalah menipisnya volume air tanah ataumasalah intrusi air laut.Selain dari tipe yang telah disebutkan di atas, areal kota dengan mintakat ke limayaitu daerah dengan kemiringan yang cukup tinggi yang ditandai dengan tebing-tebing yang curam ataupun daerah tepian sungai perlu dijaga denganmembangun hutan kota agar terhindar dari bahaya erosi dan longsoran.Hutan kota yang berada di daerah pesisir dapat berguna untuk mengamankandaerah pantai dari gempuran ombak laut yang dapat menghancurkan pantai.Untuk beberapa kota masalah abrasi pantai ini merupakan masalah yang sangat penting.Kota yang memiliki kerawanan air tawar akibat menipisnya jumlah air tanahdangkal dan atau terancam masalah intrusi air laut, maka hutan lindung sebagai penyerap, penyimpan dan pemasok air harus dibangun di daerah resapan airnya.Dengan demikian ancaman bahaya intrusi air laut dapat dikurangi.6. Kawasan pengamanan, berfungsi untuk meningkatan keamanan pengguna jalan pada jalur. Kendaraan dengan membuat jalur hijau dengan kombinasi pepohonandan tanaman perdu. Yang dimaksudkan hutan kota dengan tipe pengamananadalah jalur hijau di sepanjang tepi jalan bebas hambatan. Dengan menanam perdu yang liat dan dilengkapi dengan jalur pohon pisang dan tanaman yangmerambat dari legum secara berlapis-lapis, akan dapat menahan kendaraan yangkeluar dari jalur jalan. Sehingga bahaya kecelakaan karena pecah ban, patah setir ataupun karena pengendara mengantuk dapat dikurangi. Pada kawasan initanaman harus betul-betul cermat dipilih yaitu yang tidak mengundangmasyarakat untuk memanfaatkannya.'),
(11, 'dayat', '2018-08-16', 'Pembangunan Hutan Kota ', 'Pembangunan Hutan Kota sebaiknya direncanakan secara matang, antara lain denganmemperhatikan :\r\n1.Hutan kota dapat dibangun pada tanah yang kosong di kawasan : pemukiman, perkantoran dan industri, tepi jalan, tikungan perempatan jalan, tepi jalan tol,tepian sungai, di bawah kawat tegangan tinggi, tepi jalan kereta api dan berbagaitempat lainnya yang memungkinkan untuk ditanami.2.Pengukuhan hukum terhadap lahan hutan kota. Dengan demikian tidak terlalumudah untuk merubah kawasan ini menjadi peruntukan lain.3.Pembuatan dan penegakan sanksi bagi siapa yang menggunakan lahan hutan kotauntuk tujuan-tujuan tertentu di luar peruntukannya.4.Sanksi yang cukup berat bagi siapa saja yang melakukan vandalisme.5.Melindungi tanaman dengan balutan karung atau membuat pagar misalnya dari bambu, agar binatang tidak mudah masuk dan merusak tanamanKeberhasilan suatu pembangunan hutan kota ditentukan oleh banyak faktor, antara lain persiapan bibit tanaman, siafat tanaman yang dikehendaki, dan pemeliharaannya.'),
(12, 'Zainal', '2018-07-18', 'Sifat-sifat Tanaman Hutan Kota', 'Tanaman yang ditanam hutan pada umumnya dicari yang mempunyai fungsiuntuk melindungi kota dari pencemaran udara akibat prasarana dan sarana fisik kota,atau untuk kepentingan lain seperti keindahan, rekresi, wisata dan sebagainya'),
(13, 'aqaf', '2018-06-05', 'Pemeliharaan, Perlindungan/pengamanan Hutan Kota', 'Pemeliharaan hutan kota dilaksanakan dalam rangka menjaga danmengoptimalkan fungsi dan manfaat hutan kota melalui optimalisasi ruang tumbuh,diversifikasi tanaman dan peningkatan kualitas tempat tumbuh. Pada dasarnya pemeliharaan termasuk didalamnya perlindungan dan pengamanannya.'),
(14, 'dayat', '2018-05-31', 'Pemeliharaan tahun pertama dan kedua', 'Pemeliharaan tahun pertama dapat dilakukan apabila prosentase tumbuh pohondiatas 55 persen dan tahun kedua apabila prosentase tumbuh diatas 75 persen.Pemeliharaan meliputi pemupukan (pupuk organik dan an organik), penyiangan, penyulaman, pendaringan/penjarangan, pengendalaian hama penyakit'),
(15, 'tibyani', '2018-02-03', 'Perlindungan/pengamanan Hutan Kota', '\r\n1.Perlindungan dan pengamanan hutan kota sebagaimana bertujuan untuk menjagakeberadaan dan kondisi hutan kota agar tetap berfungsi secara optimal.2. Perlindungan dan pengamanan hutan kota dilakukan melalui upaya :a. pencegahan dan penanggulangan kerusakan lahan; b. pencegahan dan penanggulangan pencurian fauna dan flora;c. pencegahan dan penanggulangan kebakaran; dand. pengendalian dan penanggulangan hama dan penyakit.3. Setiap orang dilarang melakukan kegiatan yang mengakibatkan perubahan danatau penurunan fungsi hutan kota.\r\na.membakar hutan kota;\r\n b.merambah hutan kota;c.menebang, memotong, mengambil, dan memusnahkan tanaman dalam hutankota, tanpa izin dari pejabat yang berwenang;d.membuang benda-benda yang dapat mengakibatkan kebakaran ataumembahayakan kelangsungan fungsi hutan kota; dane.mengerjakan, menggunakan, atau menduduki hutan kota secara tidak sah.'),
(16, 'Zainal', '2018-04-11', 'Penyulaman', 'Penyulaman tanaman adalah kegiatan penanaman kembali bagian-bagian yangkosong bekas tanaman yang mati/diduga akan mati dan rusak sehingga terpenuhi jumlah tanaman normal dalam satu kesatuan luas tertentu sesuai dengan jaraktanamnya. Penyulaman dilakukan apabila persentase tumbuh tanaman tidakmencapai 90%.- Tujuana. Meningkatkan persen jadi tanaman dalam satu kesatuan luas tertentu.b. Memenuhi jumlah tanaman per hektar sesuai dengan jarak tanamnya'),
(17, 'wawan', '2018-05-15', 'Pemupukan', 'Pemupukan adalah tindakan memberikan tambahan unsur-unsur hara pada komplektanah, baik langsung maupun tak langsung dapat menyumbangkan bahan makananpada tanaman.\r\n- TujuanPemupukan tanaman hutan bertujuan untuk memperbaiki tingkat kesuburan tanahagar tanaman mendapatkan nutrisi yang cukup untuk meningkatkan kualitas dankuantitas pertumbuhan tanaman.'),
(18, 'aqaf', '2018-08-13', 'Penyiangan Gulma', 'Penyiangan tanaman pengganggu (gulma) adalah kegiatan pengendalian gulmauntuk mengurangi jumlah populasi gulma agar populasinya berada di bawahambang ekonomi atau ekologi. Dengan demikian saingan gulma berkenaan dengancahaya, kelembaban tanah dan nutrisi pada tanaman pokok dapat diperkecil.Dalam pelaksanaannya diprioritaskan gulma yang sangat merugikan seperti alang-alang, rumput-rumputan, liana dan tumbuhan lain.- TujuanPenyiangan tanaman pengganggu (gulma) bertujuan memberikan ruang tumbuhpada tanaman pokok yang lebih baik dalam upaya meningkatkan pertumbuhan danpersen jadi tanaman.'),
(19, 'dayat', '2018-07-17', 'Pendangiran', 'Pendangiran adalah kegiatan penggemburan tanah disekitar tanaman dalam upayamemperbaiki sifat fisik tanah (aerasi tanah).- TujuanPendangiran bertujuan untuk memacu pertumbuhan tanaman'),
(112, 'dayat', '2018-08-06', 'perbaikan tananmam', 'tanaman memiliki'),
(2121, 'dayat', '2018-08-06', 'perawatan taman', 'Keindahan taman');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
`photoid` int(11) NOT NULL,
  `photoname` varchar(100) NOT NULL,
  `photodir` varchar(300) NOT NULL,
  `ownerid` varchar(40) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photoid`, `photoname`, `photodir`, `ownerid`, `view`) VALUES
(3, 'nature-wallpapers-hd-9.jpg', 'user/photo/panduan_kerja/', 'dayat', 0),
(4, 'Dokumentasi Kerja.jpg', 'user/photo/panduan_kerja/', 'dayat', 0),
(5, 'Rapat Kerja.jpg', 'user/photo/praktik_kerja/', 'dayat', 0),
(6, 'Rapat Kerja.jpg', 'user/photo/panduan_kerja/', 'dayat', 0),
(7, 'IMG_20180406_101505.jpg', 'user/photo/panduan_kerja/', 'dayat', 0),
(8, 'IMG_20180406_094953.jpg', 'user/photo/panduan_kerja/', 'dayat', 0),
(9, 'Dokumentasi Kerja.jpg', 'user/photo/praktik_kerja/', 'dayat', 0),
(10, 'IMG_20150528_092422.jpg', 'user/photo/dokumentasi_kerja/', 'dayat', 0),
(11, '20161028_104344.jpg', 'user/photo/dokumentasi_kerja/', 'dayat', 0),
(12, '20161028_104344.jpg', 'user/photo/panduan_kerja/', 'dayat', 0),
(13, 'P_20160203_132158.jpg', 'user/photo/dokumentasi_kerja/', 'dayat', 0),
(14, 'IMG_20150304_085213.jpg', 'user/photo/dokumen_penelitian/', 'dayat', 0),
(15, 'IMG_20150916_083931.jpg', 'user/photo/dokumen_penelitian/', 'dayat', 0),
(16, 'IMG_20171216_075650_HDR.jpg', 'user/photo/dokumen_penelitian/', 'dayat', 0),
(17, 'IMG_20180406_103006.jpg', 'user/photo/panduan_kerja/', 'dayat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(40) NOT NULL,
  `usertype` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `division` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `usertype`, `password`, `division`, `nama`) VALUES
('aqaf', 0, '123', 'pekerja lapangan', 'muntakap'),
('budi', 1, '123', 'hahah', 'budi a'),
('dayat', 2, '123', 'Pekerja Lapangan', 'Nurul Hidayat'),
('Tibyani', 0, '123', 'pekerja lapangan', 'Ahmad Tibyani'),
('wawan', 2, '123', 'Pekerja Lapangan', 'A. Kurniawan'),
('zainal', 0, '123', 'pekerja lapangan', 'Zainal Arifin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `filelib`
--
ALTER TABLE `filelib`
 ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
 ADD PRIMARY KEY (`forumid`);

--
-- Indexes for table `forum_response`
--
ALTER TABLE `forum_response`
 ADD PRIMARY KEY (`forumresid`);

--
-- Indexes for table `learn`
--
ALTER TABLE `learn`
 ADD PRIMARY KEY (`learnid`);

--
-- Indexes for table `learn_response`
--
ALTER TABLE `learn_response`
 ADD PRIMARY KEY (`learnresid`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
 ADD PRIMARY KEY (`id_pengetahuan`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
 ADD PRIMARY KEY (`photoid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filelib`
--
ALTER TABLE `filelib`
MODIFY `fileid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
MODIFY `forumid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `forum_response`
--
ALTER TABLE `forum_response`
MODIFY `forumresid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `learn`
--
ALTER TABLE `learn`
MODIFY `learnid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `learn_response`
--
ALTER TABLE `learn_response`
MODIFY `learnresid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
MODIFY `photoid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
