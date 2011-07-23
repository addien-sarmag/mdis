-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2011 at 12:21 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mdis`
--

-- --------------------------------------------------------

--
-- Table structure for table `Access`
--

CREATE TABLE IF NOT EXISTS `Access` (
  `accessId` int(10) NOT NULL AUTO_INCREMENT,
  `accessPid` int(10) NOT NULL,
  `accessCode` varchar(50) NOT NULL,
  `accessName` varchar(255) NOT NULL,
  `accessDesc` text NOT NULL,
  PRIMARY KEY (`accessId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=283 ;

--
-- Dumping data for table `Access`
--

INSERT INTO `Access` (`accessId`, `accessPid`, `accessCode`, `accessName`, `accessDesc`) VALUES
(1, 0, 'administrator', 'administrator', 'administrator'),
(2, 0, 'login', 'login', 'Login Akses'),
(3, 0, 'myuser', 'myuser', 'User Management'),
(4, 3, 'myuser_user', 'user', 'User'),
(5, 3, 'myuser_group', 'group', 'Group'),
(6, 3, 'myuser_userlog', 'userlog', 'userlog'),
(7, 0, 'purchasing', 'purchasing', 'Purchasing'),
(8, 7, 'purchasing_purchaseorder', 'purchaseorder', 'purchaseorder'),
(9, 8, 'purchasing_purchaseorder_view', 'view', 'view'),
(10, 7, 'purchasing_invoice', 'invoice', 'Invoice'),
(11, 10, 'purchasing_invoice_view', 'view', 'Lihat'),
(12, 7, 'purchasing_barangditerima', 'barangditerima', 'barangditerima'),
(13, 12, 'purchasing_barangditerima_view', 'view', 'view'),
(14, 7, 'purchasing_purchasingdebitnote', 'purchasingdebitnote', 'purchasingdebitnote'),
(15, 14, 'purchasing_purchasingdebitnote_view', 'view', 'view'),
(16, 0, 'inventory', 'inventory', 'Inventory'),
(17, 16, 'inventory_persediaan', 'persediaan', 'Persediaan'),
(18, 17, 'inventory_persediaan_view', 'view', 'Lihat'),
(19, 16, 'inventory_inventorysummary', 'inventorysummary', 'inventorysummary'),
(20, 19, 'inventory_inventorysummary_view', 'view', 'view'),
(21, 16, 'inventory_stockadjustment', 'stockadjustment', 'stockadjustment'),
(22, 21, 'inventory_stockadjustment_view', 'view', 'view'),
(23, 16, 'inventory_transfergudang', 'transfergudang', 'transfergudang'),
(24, 23, 'inventory_transfergudang_view', 'view', 'view'),
(25, 16, 'inventory_inventorydebitnote', 'inventorydebitnote', 'inventorydebitnote'),
(26, 25, 'inventory_inventorydebitnote_view', 'view', 'view'),
(27, 0, 'sales', 'sales', 'Sales'),
(28, 27, 'sales_penawaran', 'penawaran', 'Penawaran'),
(29, 28, 'sales_penawaran_view', 'view', 'Lihat'),
(30, 27, 'sales_pocustomer', 'pocustomer', 'pocustomer'),
(31, 30, 'sales_pocustomer_view', 'view', 'view'),
(32, 27, 'sales_suratjalan', 'suratjalan', 'suratjalan'),
(33, 32, 'sales_suratjalan_view', 'view', 'view'),
(34, 27, 'sales_invoice', 'invoice', 'Invoice'),
(35, 34, 'sales_invoice_view', 'view', 'Lihat'),
(36, 27, 'sales_creditnote', 'creditnote', 'creditnote'),
(37, 36, 'sales_creditnote_view', 'view', 'view'),
(38, 27, 'sales_komisicustomer', 'komisicustomer', 'komisicustomer'),
(39, 38, 'sales_komisicustomer_view', 'view', 'view'),
(40, 27, 'sales_komisisales', 'komisisales', 'komisisales'),
(41, 40, 'sales_komisisales_view', 'view', 'view'),
(42, 0, 'finance', 'finance', 'Finance and Accounting'),
(43, 42, 'finance_fakturpajakcustomer', 'fakturpajakcustomer', 'fakturpajakcustomer'),
(44, 43, 'finance_fakturpajakcustomer_view', 'view', 'view'),
(45, 42, 'finance_returfakturcustomer', 'returfakturcustomer', 'returfakturcustomer'),
(46, 45, 'finance_returfakturcustomer_view', 'view', 'view'),
(47, 42, 'finance_currentsaldo', 'currentsaldo', 'currentsaldo'),
(48, 47, 'finance_currentsaldo_view', 'view', 'view'),
(49, 42, 'finance_budgetcost', 'budgetcost', 'budgetcost'),
(50, 49, 'finance_budgetcost_view', 'view', 'view'),
(51, 42, 'finance_budgetpurchasing', 'budgetpurchasing', 'budgetpurchasing'),
(52, 51, 'finance_budgetpurchasing_view', 'view', 'view'),
(53, 42, 'finance_pembayaranhutang', 'pembayaranhutang', 'pembayaranhutang'),
(54, 53, 'finance_pembayaranhutang_view', 'view', 'view'),
(55, 42, 'finance_penerimaanpiutang', 'penerimaanpiutang', 'penerimaanpiutang'),
(56, 55, 'finance_penerimaanpiutang_view', 'view', 'view'),
(57, 42, 'finance_penagihanpiutang', 'penagihanpiutang', 'penagihanpiutang'),
(58, 57, 'finance_penagihanpiutang_view', 'view', 'view'),
(59, 7, 'purchasing_agingutang', 'agingutang', 'agingutang'),
(60, 59, 'purchasing_agingutang_view', 'view', 'view'),
(61, 27, 'sales_agingpiutang', 'agingpiutang', 'agingpiutang'),
(62, 61, 'sales_agingpiutang_view', 'view', 'view'),
(63, 42, 'finance_asset', 'asset', 'Fix Asset'),
(64, 63, 'finance_asset_view', 'view', 'Lihat'),
(65, 42, 'finance_mutasi', 'mutasi', 'Mutasi'),
(66, 65, 'finance_mutasi_view', 'view', 'Lihat'),
(67, 42, 'finance_spendmoney', 'spendmoney', 'spendmoney'),
(68, 67, 'finance_spendmoney_view', 'view', 'view'),
(69, 42, 'finance_receivemoney', 'receivemoney', 'receivemoney'),
(70, 69, 'finance_receivemoney_view', 'view', 'view'),
(71, 42, 'finance_cekgiro', 'cekgiro', 'cekgiro'),
(72, 71, 'finance_cekgiro_view', 'view', 'view'),
(73, 42, 'finance_jurnal', 'jurnal', 'Jurnal'),
(74, 73, 'finance_jurnal_view', 'view', 'Lihat'),
(75, 42, 'finance_jurnalpenyesuaian', 'jurnalpenyesuaian', 'jurnalpenyesuaian'),
(76, 75, 'finance_jurnalpenyesuaian_view', 'view', 'view'),
(77, 42, 'finance_bukubesar', 'bukubesar', 'bukubesar'),
(78, 77, 'finance_bukubesar_view', 'view', 'view'),
(79, 42, 'finance_neraca', 'neraca', 'Neraca'),
(80, 79, 'finance_neraca_view', 'view', 'Lihat'),
(81, 42, 'finance_laporankeuangan', 'laporankeuangan', 'laporankeuangan'),
(82, 81, 'finance_laporankeuangan_view', 'view', 'view'),
(83, 42, 'finance_perubahanmodal', 'perubahanmodal', 'perubahanmodal'),
(84, 83, 'finance_perubahanmodal_view', 'view', 'view'),
(85, 42, 'finance_neracalajur', 'neracalajur', 'neracalajur'),
(86, 85, 'finance_neracalajur_view', 'view', 'view'),
(87, 42, 'finance_laporankasbank', 'laporankasbank', 'laporankasbank'),
(88, 87, 'finance_laporankasbank_view', 'view', 'view'),
(89, 42, 'finance_laporancashflow', 'laporancashflow', 'laporancashflow'),
(90, 89, 'finance_laporancashflow_view', 'view', 'view'),
(91, 42, 'finance_laporanneraca', 'laporanneraca', 'laporanneraca'),
(92, 91, 'finance_laporanneraca_view', 'view', 'view'),
(93, 42, 'finance_hpp', 'hpp', 'Hpp'),
(94, 93, 'finance_hpp_view', 'view', 'Lihat'),
(95, 0, 'master', 'master', 'Data Master'),
(96, 95, 'master_grupsuplier', 'grupsuplier', 'Grup Supplier'),
(97, 42, 'finance_grupsuplier', 'grupsuplier', 'grupsuplier'),
(98, 97, 'finance_grupsuplier_view', 'view', 'view'),
(99, 95, 'master_suplier', 'suplier', 'Supplier'),
(100, 99, 'master_suplier_view', 'view', 'Lihat'),
(101, 95, 'master_matauang', 'matauang', 'Mata Uang'),
(102, 101, 'master_matauang_view', 'view', 'Lihat'),
(103, 95, 'master_kurs', 'kurs', 'Kurs'),
(104, 103, 'master_kurs_view', 'view', 'Lihat'),
(105, 95, 'master_jenisfakturpajak', 'jenisfakturpajak', 'Jenis Faktur Pajak'),
(106, 105, 'master_jenisfakturpajak_view', 'view', 'Lihat'),
(107, 95, 'master_accountclassification', 'accountclassification', 'accountclassification'),
(108, 107, 'master_accountclassification_view', 'view', 'view'),
(109, 95, 'master_typeaccount', 'typeaccount', 'typeaccount'),
(110, 109, 'master_typeaccount_view', 'view', 'view'),
(111, 95, 'master_account', 'account', 'Account'),
(112, 111, 'master_account_view', 'view', 'Lihat'),
(113, 95, 'master_jurnalkodeaccount', 'jurnalkodeaccount', 'jurnalkodeaccount'),
(114, 113, 'master_jurnalkodeaccount_view', 'view', 'view'),
(115, 95, 'master_periodelaporan', 'periodelaporan', 'periodelaporan'),
(116, 115, 'master_periodelaporan_view', 'view', 'view'),
(117, 95, 'master_gudang', 'gudang', 'Gudang'),
(118, 117, 'master_gudang_view', 'view', 'Lihat'),
(119, 95, 'master_kategoribarang', 'kategoribarang', 'Kategori Barang'),
(120, 119, 'master_kategoribarang_view', 'view', 'Lihat'),
(121, 95, 'master_satuanbarang', 'satuanbarang', 'Satuan Barang'),
(122, 121, 'master_satuanbarang_view', 'view', 'Lihat'),
(123, 95, 'master_barang', 'barang', 'Barang'),
(124, 123, 'master_barang_view', 'view', 'Lihat'),
(125, 95, 'master_customertipe', 'customertipe', 'customertipe'),
(126, 125, 'master_customertipe_view', 'view', 'view'),
(127, 95, 'master_customergroup', 'customergroup', 'customergroup'),
(128, 127, 'master_customergroup_view', 'view', 'view'),
(129, 95, 'master_customer', 'customer', 'Customer'),
(130, 129, 'master_customer_view', 'view', 'Lihat'),
(131, 95, 'master_contactperson', 'contactperson', 'contactperson'),
(132, 131, 'master_contactperson_view', 'view', 'view'),
(133, 95, 'master_sales', 'sales', 'Sales'),
(134, 133, 'master_sales_view', 'view', 'Lihat'),
(135, 95, 'master_kurir', 'kurir', 'Kurir'),
(136, 135, 'master_kurir_view', 'view', 'Lihat'),
(137, 95, 'master_kendaraan', 'kendaraan', 'Kendaraan'),
(138, 137, 'master_kendaraan_view', 'view', 'Lihat'),
(139, 3, 'myuser_message', 'message', 'Message'),
(140, 139, 'myuser_message_view', 'view', 'Lihat'),
(141, 4, 'myuser_user_view', 'view', 'Lihat'),
(142, 4, 'myuser_user_add', 'add', 'Tambah'),
(143, 4, 'myuser_user_detail', 'detail', 'Detail'),
(144, 4, 'myuser_user_pertanyaan', 'pertanyaan', 'pertanyaan'),
(145, 4, 'myuser_user_edit', 'edit', 'Ubah'),
(146, 4, 'myuser_user_resetpasswd', 'resetpasswd', 'Reset Password'),
(147, 5, 'myuser_group_view', 'view', 'Lihat'),
(148, 5, 'myuser_group_add', 'add', 'Tambah'),
(149, 6, 'myuser_userlog_view', 'view', 'view'),
(150, 6, 'myuser_userlog_delete', 'delete', 'delete'),
(151, 0, 'pegawai', 'pegawai', 'pegawai'),
(152, 151, 'pegawai_masterpegawai', 'masterpegawai', 'masterpegawai'),
(153, 152, 'pegawai_masterpegawai_view', 'view', 'view'),
(154, 151, 'pegawai_pengalamankerja', 'pengalamankerja', 'pengalamankerja'),
(155, 154, 'pegawai_pengalamankerja_view', 'view', 'view'),
(156, 151, 'pegawai_kontrakpegawai', 'kontrakpegawai', 'kontrakpegawai'),
(157, 156, 'pegawai_kontrakpegawai_view', 'view', 'view'),
(158, 151, 'pegawai_rekamanpengobatan', 'rekamanpengobatan', 'rekamanpengobatan'),
(159, 158, 'pegawai_rekamanpengobatan_view', 'view', 'view'),
(160, 151, 'pegawai_rekamanhutang', 'rekamanhutang', 'rekamanhutang'),
(161, 160, 'pegawai_rekamanhutang_view', 'view', 'view'),
(162, 151, 'pegawai_laporanstatus', 'laporanstatus', 'laporanstatus'),
(163, 162, 'pegawai_laporanstatus_view', 'view', 'view'),
(164, 151, 'pegawai_laporankontrak', 'laporankontrak', 'laporankontrak'),
(165, 164, 'pegawai_laporankontrak_view', 'view', 'view'),
(166, 0, 'absensi', 'absensi', 'absensi'),
(167, 166, 'absensi_masterabsen', 'masterabsen', 'masterabsen'),
(168, 167, 'absensi_masterabsen_view', 'view', 'view'),
(169, 166, 'absensi_rekamanabsen', 'rekamanabsen', 'rekamanabsen'),
(170, 169, 'absensi_rekamanabsen_view', 'view', 'view'),
(171, 166, 'absensi_permintaanabsen', 'permintaanabsen', 'permintaanabsen'),
(172, 171, 'absensi_permintaanabsen_view', 'view', 'view'),
(173, 166, 'absensi_mastercuti', 'mastercuti', 'mastercuti'),
(174, 173, 'absensi_mastercuti_view', 'view', 'view'),
(175, 166, 'absensi_rekamancuti', 'rekamancuti', 'rekamancuti'),
(176, 175, 'absensi_rekamancuti_view', 'view', 'view'),
(177, 166, 'absensi_permintaancuti', 'permintaancuti', 'permintaancuti'),
(178, 177, 'absensi_permintaancuti_view', 'view', 'view'),
(179, 166, 'absensi_masterlembur', 'masterlembur', 'masterlembur'),
(180, 179, 'absensi_masterlembur_view', 'view', 'view'),
(181, 166, 'absensi_rekamanlembur', 'rekamanlembur', 'rekamanlembur'),
(182, 181, 'absensi_rekamanlembur_view', 'view', 'view'),
(183, 166, 'absensi_permintaanlembur', 'permintaanlembur', 'permintaanlembur'),
(184, 183, 'absensi_permintaanlembur_view', 'view', 'view'),
(185, 0, 'penilaian', 'penilaian', 'penilaian'),
(186, 185, 'penilaian_penilaianindividu', 'penilaianindividu', 'penilaianindividu'),
(187, 186, 'penilaian_penilaianindividu_view', 'view', 'view'),
(188, 185, 'penilaian_penilaiankelompok', 'penilaiankelompok', 'penilaiankelompok'),
(189, 188, 'penilaian_penilaiankelompok_view', 'view', 'view'),
(190, 185, 'penilaian_rekappenilaian', 'rekappenilaian', 'rekappenilaian'),
(191, 190, 'penilaian_rekappenilaian_view', 'view', 'view'),
(192, 5, 'myuser_group_detail', 'detail', 'Detail'),
(193, 5, 'myuser_group_edit', 'edit', 'Ubah'),
(194, 5, 'myuser_group_delete', 'delete', 'Hapus'),
(195, 4, 'myuser_user_access', 'access', 'Hak Akses'),
(196, 5, 'myuser_group_access', 'access', 'Hak Akses'),
(197, 0, 'personel', 'personel', 'personel'),
(198, 197, 'personel_agama', 'agama', 'agama'),
(199, 198, 'personel_agama_add', 'add', 'add'),
(200, 151, 'pegawai_master', 'master', 'master'),
(201, 200, 'pegawai_master_view', 'view', 'view'),
(202, 151, 'pegawai_masterview', 'masterview', 'masterview'),
(203, 202, 'pegawai_masterview_view', 'view', 'view'),
(204, 151, 'pegawai_pegawai', 'pegawai', 'pegawai'),
(205, 204, 'pegawai_pegawai_view', 'view', 'view'),
(206, 204, 'pegawai_pegawai_addd', 'addd', 'addd'),
(207, 151, 'pegawai_mitrakerja', 'mitrakerja', 'mitrakerja'),
(208, 207, 'pegawai_mitrakerja_view', 'view', 'view'),
(209, 151, 'pegawai_jabatan', 'jabatan', 'jabatan'),
(210, 209, 'pegawai_jabatan_view', 'view', 'view'),
(211, 151, 'pegawai_unit', 'unit', 'unit'),
(212, 211, 'pegawai_unit_view', 'view', 'view'),
(213, 151, 'pegawai_ring', 'ring', 'ring'),
(214, 213, 'pegawai_ring_view', 'view', 'view'),
(215, 207, 'pegawai_mitrakerja_delete', 'delete', 'delete'),
(216, 207, 'pegawai_mitrakerja_add', 'add', 'add'),
(217, 207, 'pegawai_mitrakerja_edit', 'edit', 'edit'),
(218, 209, 'pegawai_jabatan_delete', 'delete', 'delete'),
(219, 209, 'pegawai_jabatan_add', 'add', 'add'),
(220, 209, 'pegawai_jabatan_edit', 'edit', 'edit'),
(221, 211, 'pegawai_unit_delete', 'delete', 'delete'),
(222, 211, 'pegawai_unit_add', 'add', 'add'),
(223, 211, 'pegawai_unit_edit', 'edit', 'edit'),
(224, 213, 'pegawai_ring_delete', 'delete', 'delete'),
(225, 213, 'pegawai_ring_add', 'add', 'add'),
(226, 213, 'pegawai_ring_edit', 'edit', 'edit'),
(227, 204, 'pegawai_pegawai_delete', 'delete', 'delete'),
(228, 204, 'pegawai_pegawai_add', 'add', 'add'),
(229, 204, 'pegawai_pegawai_edit', 'edit', 'edit'),
(230, 151, 'pegawai_kandidat', 'kandidat', 'kandidat'),
(231, 230, 'pegawai_kandidat_view', 'view', 'view'),
(232, 230, 'pegawai_kandidat_add', 'add', 'add'),
(233, 151, 'pegawai_pelamar', 'pelamar', 'pelamar'),
(234, 233, 'pegawai_pelamar_view', 'view', 'view'),
(235, 233, 'pegawai_pelamar_add', 'add', 'add'),
(236, 95, 'master_pelamar', 'pelamar', 'pelamar'),
(237, 236, 'master_pelamar_view', 'view', 'view'),
(238, 236, 'master_pelamar_delete', 'delete', 'delete'),
(239, 233, 'pegawai_pelamar_delete', 'delete', 'delete'),
(240, 233, 'pegawai_pelamar_edit', 'edit', 'edit'),
(241, 151, 'pegawai_vacancy', 'vacancy', 'vacancy'),
(242, 241, 'pegawai_vacancy_view', 'view', 'view'),
(243, 241, 'pegawai_vacancy_delete', 'delete', 'delete'),
(244, 241, 'pegawai_vacancy_add', 'add', 'add'),
(245, 241, 'pegawai_vacancy_edit', 'edit', 'edit'),
(246, 241, 'pegawai_vacancy_kandidatadd', 'kandidatadd', 'kandidatadd'),
(247, 154, 'pegawai_pengalamankerja_delete', 'delete', 'delete'),
(248, 154, 'pegawai_pengalamankerja_add', 'add', 'add'),
(249, 154, 'pegawai_pengalamankerja_edit', 'edit', 'edit'),
(250, 156, 'pegawai_kontrakpegawai_delete', 'delete', 'delete'),
(251, 156, 'pegawai_kontrakpegawai_add', 'add', 'add'),
(252, 156, 'pegawai_kontrakpegawai_edit', 'edit', 'edit'),
(253, 151, 'pegawai_pengobatan', 'pengobatan', 'pengobatan'),
(254, 253, 'pegawai_pengobatan_view', 'view', 'view'),
(255, 253, 'pegawai_pengobatan_delete', 'delete', 'delete'),
(256, 253, 'pegawai_pengobatan_add', 'add', 'add'),
(257, 253, 'pegawai_pengobatan_edit', 'edit', 'edit'),
(258, 151, 'pegawai_hutang', 'hutang', 'hutang'),
(259, 258, 'pegawai_hutang_view', 'view', 'view'),
(260, 258, 'pegawai_hutang_delete', 'delete', 'delete'),
(261, 258, 'pegawai_hutang_add', 'add', 'add'),
(262, 258, 'pegawai_hutang_edit', 'edit', 'edit'),
(263, 151, 'pegawai_laporanpegawai', 'laporanpegawai', 'laporanpegawai'),
(264, 263, 'pegawai_laporanpegawai_view', 'view', 'view'),
(265, 263, 'pegawai_laporanpegawai_delete', 'delete', 'delete'),
(266, 263, 'pegawai_laporanpegawai_add', 'add', 'add'),
(267, 263, 'pegawai_laporanpegawai_edit', 'edit', 'edit'),
(268, 166, 'absensi_jeniscuti', 'jeniscuti', 'jeniscuti'),
(269, 268, 'absensi_jeniscuti_view', 'view', 'view'),
(270, 151, 'pegawai_jeniscuti', 'jeniscuti', 'jeniscuti'),
(271, 270, 'pegawai_jeniscuti_view', 'view', 'view'),
(272, 270, 'pegawai_jeniscuti_delete', 'delete', 'delete'),
(273, 268, 'absensi_jeniscuti_delete', 'delete', 'delete'),
(274, 268, 'absensi_jeniscuti_add', 'add', 'add'),
(275, 268, 'absensi_jeniscuti_edit', 'edit', 'edit'),
(276, 166, 'absensi_cuti', 'cuti', 'cuti'),
(277, 276, 'absensi_cuti_view', 'view', 'view'),
(278, 276, 'absensi_cuti_delete', 'delete', 'delete'),
(279, 276, 'absensi_cuti_add', 'add', 'add'),
(280, 276, 'absensi_cuti_edit', 'edit', 'edit'),
(281, 167, 'absensi_masterabsen_delete', 'delete', 'delete'),
(282, 167, 'absensi_masterabsen_add', 'add', 'add');

-- --------------------------------------------------------

--
-- Table structure for table `Counter`
--

CREATE TABLE IF NOT EXISTS `Counter` (
  `counterId` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL,
  `counterIp` varchar(255) NOT NULL,
  `counterReferrer` varchar(255) NOT NULL,
  `counterUserAgent` varchar(255) NOT NULL,
  `counterUrl` varchar(255) NOT NULL,
  `counterStatus` smallint(6) NOT NULL DEFAULT '0',
  `counterCreateTime` datetime NOT NULL,
  `counterModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`counterId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1803 ;

--
-- Dumping data for table `Counter`
--

INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(1, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/1309877663', 0, '2011-07-05 23:28:13', '2011-07-05 23:28:13'),
(2, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1309877663', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-05 23:28:14', '2011-07-05 23:28:14'),
(3, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1309877663', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/1309883293', 0, '2011-07-05 23:28:20', '2011-07-05 23:28:20'),
(4, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1309883293', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-05 23:28:20', '2011-07-05 23:28:20'),
(5, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1309883293', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/1309883300', 0, '2011-07-05 23:30:21', '2011-07-05 23:30:21'),
(6, 1, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1309883300', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-05 23:30:21', '2011-07-05 23:30:21'),
(7, 1, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:30:24', '2011-07-05 23:30:24'),
(8, 1, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login', 0, '2011-07-05 23:30:24', '2011-07-05 23:30:24'),
(9, 1, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/1309883424', 0, '2011-07-05 23:31:08', '2011-07-05 23:31:08'),
(10, 1, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:31:08', '2011-07-05 23:31:08'),
(11, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:31:21', '2011-07-05 23:31:21'),
(12, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:15', '2011-07-05 23:33:15'),
(13, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:53', '2011-07-05 23:33:53'),
(14, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(15, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(16, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(17, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(18, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(19, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(20, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(21, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(22, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(23, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(24, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(25, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(26, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(27, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(28, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:33:54', '2011-07-05 23:33:54'),
(29, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:34:29', '2011-07-05 23:34:29'),
(30, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:35:51', '2011-07-05 23:35:51'),
(31, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:35:53', '2011-07-05 23:35:53'),
(32, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:36:58', '2011-07-05 23:36:58'),
(33, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:37:00', '2011-07-05 23:37:00'),
(34, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:37:00', '2011-07-05 23:37:00'),
(35, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:37:13', '2011-07-05 23:37:13'),
(36, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:37:34', '2011-07-05 23:37:34'),
(37, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:38:14', '2011-07-05 23:38:14'),
(38, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:38:33', '2011-07-05 23:38:33'),
(39, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:39:01', '2011-07-05 23:39:01'),
(40, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:39:11', '2011-07-05 23:39:11'),
(41, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:40:06', '2011-07-05 23:40:06'),
(42, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:43:01', '2011-07-05 23:43:01'),
(43, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pegawai/view', 0, '2011-07-05 23:43:27', '2011-07-05 23:43:27'),
(44, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:47:35', '2011-07-05 23:47:35'),
(45, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:50:05', '2011-07-05 23:50:05'),
(46, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:51:46', '2011-07-05 23:51:46'),
(47, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:52:47', '2011-07-05 23:52:47'),
(48, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:55:14', '2011-07-05 23:55:14'),
(49, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-05 23:57:20', '2011-07-05 23:57:20'),
(50, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-05 23:57:24', '2011-07-05 23:57:24'),
(51, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-05 23:58:19', '2011-07-05 23:58:19'),
(52, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-05 23:59:14', '2011-07-05 23:59:14'),
(53, 1, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-05 23:59:19', '2011-07-05 23:59:19'),
(54, 1, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 00:00:04', '2011-07-06 00:00:04'),
(55, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:00:04', '2011-07-06 00:00:04'),
(56, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:00:04', '2011-07-06 00:00:04'),
(57, 1, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 00:01:15', '2011-07-06 00:01:15'),
(58, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:01:15', '2011-07-06 00:01:15'),
(59, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:01:16', '2011-07-06 00:01:16'),
(60, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/view', 0, '2011-07-06 00:01:26', '2011-07-06 00:01:26'),
(61, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:01:26', '2011-07-06 00:01:26'),
(62, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:01:26', '2011-07-06 00:01:26'),
(63, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 00:01:27', '2011-07-06 00:01:27'),
(64, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:01:28', '2011-07-06 00:01:28'),
(65, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:01:28', '2011-07-06 00:01:28'),
(66, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 00:02:15', '2011-07-06 00:02:15'),
(67, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:02:15', '2011-07-06 00:02:15'),
(68, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:02:15', '2011-07-06 00:02:15'),
(69, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 00:02:34', '2011-07-06 00:02:34'),
(70, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:02:34', '2011-07-06 00:02:34'),
(71, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:02:35', '2011-07-06 00:02:35'),
(72, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 00:03:25', '2011-07-06 00:03:25'),
(73, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:03:26', '2011-07-06 00:03:26'),
(74, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:03:26', '2011-07-06 00:03:26'),
(75, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 00:03:35', '2011-07-06 00:03:35'),
(76, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:03:36', '2011-07-06 00:03:36'),
(77, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:03:36', '2011-07-06 00:03:36'),
(78, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 00:03:46', '2011-07-06 00:03:46'),
(79, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:03:46', '2011-07-06 00:03:46'),
(80, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:03:46', '2011-07-06 00:03:46'),
(81, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 00:03:56', '2011-07-06 00:03:56'),
(82, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:03:56', '2011-07-06 00:03:56'),
(83, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:03:56', '2011-07-06 00:03:56'),
(84, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 00:05:04', '2011-07-06 00:05:04'),
(85, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:05:04', '2011-07-06 00:05:04'),
(86, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:05:04', '2011-07-06 00:05:04'),
(87, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 00:05:58', '2011-07-06 00:05:58'),
(88, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:05:59', '2011-07-06 00:05:59'),
(89, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:05:59', '2011-07-06 00:05:59'),
(90, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pegawai/view', 0, '2011-07-06 00:06:04', '2011-07-06 00:06:04'),
(91, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 00:06:06', '2011-07-06 00:06:06'),
(92, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:06:06', '2011-07-06 00:06:06'),
(93, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:06:07', '2011-07-06 00:06:07'),
(94, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 00:06:12', '2011-07-06 00:06:12'),
(95, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:06:12', '2011-07-06 00:06:12'),
(96, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:06:12', '2011-07-06 00:06:12'),
(97, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 00:06:35', '2011-07-06 00:06:35'),
(98, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:06:35', '2011-07-06 00:06:35'),
(99, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:06:35', '2011-07-06 00:06:35'),
(100, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:06:38', '2011-07-06 00:06:38'),
(101, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:07:29', '2011-07-06 00:07:29'),
(102, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:07:29', '2011-07-06 00:07:29'),
(103, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:07:29', '2011-07-06 00:07:29'),
(104, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:07:29', '2011-07-06 00:07:29'),
(105, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:07:29', '2011-07-06 00:07:29'),
(106, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 00:07:33', '2011-07-06 00:07:33'),
(107, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:07:33', '2011-07-06 00:07:33'),
(108, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:07:33', '2011-07-06 00:07:33'),
(109, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 00:08:37', '2011-07-06 00:08:37'),
(110, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:08:38', '2011-07-06 00:08:38'),
(111, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:08:38', '2011-07-06 00:08:38'),
(112, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 00:08:42', '2011-07-06 00:08:42'),
(113, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:08:42', '2011-07-06 00:08:42'),
(114, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:08:42', '2011-07-06 00:08:42'),
(115, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:08:45', '2011-07-06 00:08:45'),
(116, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:08:45', '2011-07-06 00:08:45'),
(117, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:08:45', '2011-07-06 00:08:45'),
(118, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:08:46', '2011-07-06 00:08:46'),
(119, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:08:46', '2011-07-06 00:08:46'),
(120, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:10:50', '2011-07-06 00:10:50'),
(121, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:10:50', '2011-07-06 00:10:50'),
(122, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:10:50', '2011-07-06 00:10:50'),
(123, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:10:50', '2011-07-06 00:10:50'),
(124, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:10:50', '2011-07-06 00:10:50'),
(125, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:13:53', '2011-07-06 00:13:53'),
(126, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:13:54', '2011-07-06 00:13:54'),
(127, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:13:54', '2011-07-06 00:13:54'),
(128, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:13:54', '2011-07-06 00:13:54'),
(129, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:13:54', '2011-07-06 00:13:54'),
(130, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:21:57', '2011-07-06 00:21:57'),
(131, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:21:57', '2011-07-06 00:21:57'),
(132, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:21:57', '2011-07-06 00:21:57'),
(133, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:21:57', '2011-07-06 00:21:57'),
(134, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:21:57', '2011-07-06 00:21:57'),
(135, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:22:14', '2011-07-06 00:22:14'),
(136, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:22:15', '2011-07-06 00:22:15'),
(137, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:22:15', '2011-07-06 00:22:15'),
(138, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:22:15', '2011-07-06 00:22:15'),
(139, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:22:15', '2011-07-06 00:22:15'),
(140, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:27:47', '2011-07-06 00:27:47'),
(141, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:27:47', '2011-07-06 00:27:47'),
(142, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:27:47', '2011-07-06 00:27:47'),
(143, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:27:48', '2011-07-06 00:27:48'),
(144, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:27:48', '2011-07-06 00:27:48'),
(145, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:27:53', '2011-07-06 00:27:53'),
(146, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:27:54', '2011-07-06 00:27:54'),
(147, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:27:54', '2011-07-06 00:27:54'),
(148, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:27:54', '2011-07-06 00:27:54'),
(149, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:27:54', '2011-07-06 00:27:54'),
(150, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:29:24', '2011-07-06 00:29:24'),
(151, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:29:24', '2011-07-06 00:29:24'),
(152, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:29:24', '2011-07-06 00:29:24'),
(153, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:29:25', '2011-07-06 00:29:25'),
(154, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:29:25', '2011-07-06 00:29:25'),
(155, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:30:02', '2011-07-06 00:30:02'),
(156, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:30:02', '2011-07-06 00:30:02'),
(157, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:30:02', '2011-07-06 00:30:02'),
(158, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:30:02', '2011-07-06 00:30:02'),
(159, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:30:02', '2011-07-06 00:30:02'),
(160, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:35:32', '2011-07-06 00:35:32'),
(161, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:35:32', '2011-07-06 00:35:32'),
(162, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:35:32', '2011-07-06 00:35:32'),
(163, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:35:33', '2011-07-06 00:35:33'),
(164, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:35:33', '2011-07-06 00:35:33'),
(165, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:36:01', '2011-07-06 00:36:01'),
(166, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:36:01', '2011-07-06 00:36:01'),
(167, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:36:01', '2011-07-06 00:36:01'),
(168, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:36:01', '2011-07-06 00:36:01'),
(169, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:36:01', '2011-07-06 00:36:01');
INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(170, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:37:15', '2011-07-06 00:37:15'),
(171, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:37:16', '2011-07-06 00:37:16'),
(172, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:37:16', '2011-07-06 00:37:16'),
(173, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:37:16', '2011-07-06 00:37:16'),
(174, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:37:16', '2011-07-06 00:37:16'),
(175, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:38:17', '2011-07-06 00:38:17'),
(176, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:38:17', '2011-07-06 00:38:17'),
(177, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:38:17', '2011-07-06 00:38:17'),
(178, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:38:17', '2011-07-06 00:38:17'),
(179, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:38:17', '2011-07-06 00:38:17'),
(180, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309887497', 0, '2011-07-06 00:44:49', '2011-07-06 00:44:49'),
(181, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:45:25', '2011-07-06 00:45:25'),
(182, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:45:25', '2011-07-06 00:45:25'),
(183, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:45:25', '2011-07-06 00:45:25'),
(184, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:45:25', '2011-07-06 00:45:25'),
(185, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:45:25', '2011-07-06 00:45:25'),
(186, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309887925', 0, '2011-07-06 00:45:30', '2011-07-06 00:45:30'),
(187, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:46:41', '2011-07-06 00:46:41'),
(188, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:46:41', '2011-07-06 00:46:41'),
(189, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:46:41', '2011-07-06 00:46:41'),
(190, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:46:41', '2011-07-06 00:46:41'),
(191, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:46:42', '2011-07-06 00:46:42'),
(192, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888001', 0, '2011-07-06 00:46:45', '2011-07-06 00:46:45'),
(193, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888001', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:46:45', '2011-07-06 00:46:45'),
(194, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888001', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:46:45', '2011-07-06 00:46:45'),
(195, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888001', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888005', 0, '2011-07-06 00:46:56', '2011-07-06 00:46:56'),
(196, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888001', 0, '2011-07-06 00:48:16', '2011-07-06 00:48:16'),
(197, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888001', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:48:16', '2011-07-06 00:48:16'),
(198, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888001', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:48:16', '2011-07-06 00:48:16'),
(199, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888001', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:48:16', '2011-07-06 00:48:16'),
(200, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888001', 0, '2011-07-06 00:50:30', '2011-07-06 00:50:30'),
(201, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888001', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:50:30', '2011-07-06 00:50:30'),
(202, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888001', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:50:30', '2011-07-06 00:50:30'),
(203, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888001', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:50:31', '2011-07-06 00:50:31'),
(204, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 00:50:40', '2011-07-06 00:50:40'),
(205, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:50:40', '2011-07-06 00:50:40'),
(206, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:50:40', '2011-07-06 00:50:40'),
(207, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:50:41', '2011-07-06 00:50:41'),
(208, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 00:50:41', '2011-07-06 00:50:41'),
(209, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888240', 0, '2011-07-06 00:50:47', '2011-07-06 00:50:47'),
(210, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888240', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:50:47', '2011-07-06 00:50:47'),
(211, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888240', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:50:47', '2011-07-06 00:50:47'),
(212, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888240', 0, '2011-07-06 00:51:14', '2011-07-06 00:51:14'),
(213, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888240', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:51:15', '2011-07-06 00:51:15'),
(214, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888240', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:51:15', '2011-07-06 00:51:15'),
(215, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888240', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888275', 0, '2011-07-06 00:57:19', '2011-07-06 00:57:19'),
(216, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888275', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:57:19', '2011-07-06 00:57:19'),
(217, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888275', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:57:19', '2011-07-06 00:57:19'),
(218, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888275', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888639', 0, '2011-07-06 00:57:28', '2011-07-06 00:57:28'),
(219, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:57:29', '2011-07-06 00:57:29'),
(220, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:57:29', '2011-07-06 00:57:29'),
(221, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888275', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888639', 0, '2011-07-06 00:58:51', '2011-07-06 00:58:51'),
(222, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:58:51', '2011-07-06 00:58:51'),
(223, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:58:52', '2011-07-06 00:58:52'),
(224, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:58:52', '2011-07-06 00:58:52'),
(225, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888275', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888639', 0, '2011-07-06 00:59:07', '2011-07-06 00:59:07'),
(226, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:59:07', '2011-07-06 00:59:07'),
(227, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:59:07', '2011-07-06 00:59:07'),
(228, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:59:08', '2011-07-06 00:59:08'),
(229, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888275', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888639', 0, '2011-07-06 00:59:57', '2011-07-06 00:59:57'),
(230, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 00:59:57', '2011-07-06 00:59:57'),
(231, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:59:58', '2011-07-06 00:59:58'),
(232, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 00:59:58', '2011-07-06 00:59:58'),
(233, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888275', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888639', 0, '2011-07-06 01:00:24', '2011-07-06 01:00:24'),
(234, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:00:25', '2011-07-06 01:00:25'),
(235, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:00:25', '2011-07-06 01:00:25'),
(236, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:00:25', '2011-07-06 01:00:25'),
(237, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888639', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888824', 0, '2011-07-06 01:00:31', '2011-07-06 01:00:31'),
(238, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888824', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:00:31', '2011-07-06 01:00:31'),
(239, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888824', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:00:32', '2011-07-06 01:00:32'),
(240, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888824', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:00:32', '2011-07-06 01:00:32'),
(241, 1, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888824', 0, '2011-07-06 01:00:44', '2011-07-06 01:00:44'),
(242, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888824', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:00:44', '2011-07-06 01:00:44'),
(243, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888824', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:00:44', '2011-07-06 01:00:44'),
(244, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888824', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:00:45', '2011-07-06 01:00:45'),
(245, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888824', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888844', 0, '2011-07-06 01:00:50', '2011-07-06 01:00:50'),
(246, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:00:50', '2011-07-06 01:00:50'),
(247, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:00:50', '2011-07-06 01:00:50'),
(248, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:00:51', '2011-07-06 01:00:51'),
(249, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888824', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888844', 0, '2011-07-06 01:01:20', '2011-07-06 01:01:20'),
(250, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:01:20', '2011-07-06 01:01:20'),
(251, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:01:20', '2011-07-06 01:01:20'),
(252, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:01:21', '2011-07-06 01:01:21'),
(253, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888824', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888844', 0, '2011-07-06 01:01:31', '2011-07-06 01:01:31'),
(254, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:01:31', '2011-07-06 01:01:31'),
(255, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:01:31', '2011-07-06 01:01:31'),
(256, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:01:32', '2011-07-06 01:01:32'),
(257, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888824', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888844', 0, '2011-07-06 01:01:47', '2011-07-06 01:01:47'),
(258, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:01:47', '2011-07-06 01:01:47'),
(259, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:01:47', '2011-07-06 01:01:47'),
(260, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:01:48', '2011-07-06 01:01:48'),
(261, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:02:31', '2011-07-06 01:02:31'),
(262, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:02:31', '2011-07-06 01:02:31'),
(263, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:02:31', '2011-07-06 01:02:31'),
(264, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:02:32', '2011-07-06 01:02:32'),
(265, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:03:10', '2011-07-06 01:03:10'),
(266, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:03:11', '2011-07-06 01:03:11'),
(267, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:03:11', '2011-07-06 01:03:11'),
(268, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:03:11', '2011-07-06 01:03:11'),
(269, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:09:26', '2011-07-06 01:09:26'),
(270, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:09:27', '2011-07-06 01:09:27'),
(271, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:09:27', '2011-07-06 01:09:27'),
(272, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:09:27', '2011-07-06 01:09:27'),
(273, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:09:41', '2011-07-06 01:09:41'),
(274, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:09:41', '2011-07-06 01:09:41'),
(275, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:09:41', '2011-07-06 01:09:41'),
(276, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:09:42', '2011-07-06 01:09:42'),
(277, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/view', 0, '2011-07-06 01:10:13', '2011-07-06 01:10:13'),
(278, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:10:13', '2011-07-06 01:10:13'),
(279, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:10:13', '2011-07-06 01:10:13'),
(280, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-06 01:10:15', '2011-07-06 01:10:15'),
(281, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:10:15', '2011-07-06 01:10:15'),
(282, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:10:15', '2011-07-06 01:10:15'),
(283, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add', 0, '2011-07-06 01:10:17', '2011-07-06 01:10:17'),
(284, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/loading.gif', 0, '2011-07-06 01:10:17', '2011-07-06 01:10:17'),
(285, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:10:17', '2011-07-06 01:10:17'),
(286, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:10:17', '2011-07-06 01:10:17'),
(287, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/loading.gif', 0, '2011-07-06 01:10:17', '2011-07-06 01:10:17'),
(288, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add', 0, '2011-07-06 01:14:04', '2011-07-06 01:14:04'),
(289, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:14:05', '2011-07-06 01:14:05'),
(290, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/loading.gif', 0, '2011-07-06 01:14:05', '2011-07-06 01:14:05'),
(291, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:14:05', '2011-07-06 01:14:05'),
(292, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/loading.gif', 0, '2011-07-06 01:14:05', '2011-07-06 01:14:05'),
(293, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add', 0, '2011-07-06 01:14:25', '2011-07-06 01:14:25'),
(294, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:14:25', '2011-07-06 01:14:25'),
(295, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/loading.gif', 0, '2011-07-06 01:14:25', '2011-07-06 01:14:25'),
(296, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:14:25', '2011-07-06 01:14:25'),
(297, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/loading.gif', 0, '2011-07-06 01:14:25', '2011-07-06 01:14:25'),
(298, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add/time/1309889665', 0, '2011-07-06 01:14:43', '2011-07-06 01:14:43'),
(299, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add/time/1309889665', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:14:44', '2011-07-06 01:14:44'),
(300, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add/time/1309889665', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add/time/loading.gif', 0, '2011-07-06 01:14:44', '2011-07-06 01:14:44'),
(301, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add/time/1309889665', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-06 01:14:45', '2011-07-06 01:14:45'),
(302, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:14:46', '2011-07-06 01:14:46'),
(303, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:14:46', '2011-07-06 01:14:46'),
(304, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add', 0, '2011-07-06 01:16:36', '2011-07-06 01:16:36'),
(305, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:16:36', '2011-07-06 01:16:36'),
(306, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/loading.gif', 0, '2011-07-06 01:16:36', '2011-07-06 01:16:36'),
(307, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:16:37', '2011-07-06 01:16:37'),
(308, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/loading.gif', 0, '2011-07-06 01:16:37', '2011-07-06 01:16:37'),
(309, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add/time/1309889796', 0, '2011-07-06 01:16:46', '2011-07-06 01:16:46'),
(310, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add', 0, '2011-07-06 01:17:51', '2011-07-06 01:17:51'),
(311, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/loading.gif', 0, '2011-07-06 01:17:51', '2011-07-06 01:17:51'),
(312, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:17:51', '2011-07-06 01:17:51'),
(313, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:17:52', '2011-07-06 01:17:52'),
(314, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/loading.gif', 0, '2011-07-06 01:17:52', '2011-07-06 01:17:52'),
(315, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add/time/1309889871', 0, '2011-07-06 01:18:00', '2011-07-06 01:18:00'),
(316, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add/time/1309889871', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add/time/loading.gif', 0, '2011-07-06 01:18:00', '2011-07-06 01:18:00'),
(317, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add/time/1309889871', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:18:00', '2011-07-06 01:18:00'),
(318, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add/time/1309889871', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/add/time/loading.gif', 0, '2011-07-06 01:18:00', '2011-07-06 01:18:00'),
(319, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/add/time/1309889871', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-06 01:18:02', '2011-07-06 01:18:02'),
(320, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:18:02', '2011-07-06 01:18:02'),
(321, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:18:02', '2011-07-06 01:18:02'),
(322, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2', 0, '2011-07-06 01:18:03', '2011-07-06 01:18:03'),
(323, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:18:03', '2011-07-06 01:18:03'),
(324, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:18:04', '2011-07-06 01:18:04'),
(325, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2', 0, '2011-07-06 01:19:04', '2011-07-06 01:19:04');
INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(326, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:19:04', '2011-07-06 01:19:04'),
(327, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:19:04', '2011-07-06 01:19:04'),
(328, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309889944', 0, '2011-07-06 01:19:17', '2011-07-06 01:19:17'),
(329, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309889944', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:19:17', '2011-07-06 01:19:17'),
(330, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309889944', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309889957', 0, '2011-07-06 01:19:49', '2011-07-06 01:19:49'),
(331, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309889957', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:19:49', '2011-07-06 01:19:49'),
(332, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309889957', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309889989', 0, '2011-07-06 01:19:51', '2011-07-06 01:19:51'),
(333, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309889989', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:19:51', '2011-07-06 01:19:51'),
(334, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309889989', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-06 01:19:53', '2011-07-06 01:19:53'),
(335, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:19:54', '2011-07-06 01:19:54'),
(336, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:19:54', '2011-07-06 01:19:54'),
(337, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/1', 0, '2011-07-06 01:19:55', '2011-07-06 01:19:55'),
(338, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:19:55', '2011-07-06 01:19:55'),
(339, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:19:56', '2011-07-06 01:19:56'),
(340, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/1', 0, '2011-07-06 01:20:13', '2011-07-06 01:20:13'),
(341, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:13', '2011-07-06 01:20:13'),
(342, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:13', '2011-07-06 01:20:13'),
(343, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-06 01:20:15', '2011-07-06 01:20:15'),
(344, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:15', '2011-07-06 01:20:15'),
(345, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:16', '2011-07-06 01:20:16'),
(346, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/1', 0, '2011-07-06 01:20:19', '2011-07-06 01:20:19'),
(347, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:19', '2011-07-06 01:20:19'),
(348, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:19', '2011-07-06 01:20:19'),
(349, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/1/time/1309890019', 0, '2011-07-06 01:20:21', '2011-07-06 01:20:21'),
(350, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/1/time/1309890019', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:22', '2011-07-06 01:20:22'),
(351, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/1/time/1309890019', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-06 01:20:23', '2011-07-06 01:20:23'),
(352, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:24', '2011-07-06 01:20:24'),
(353, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:24', '2011-07-06 01:20:24'),
(354, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2', 0, '2011-07-06 01:20:25', '2011-07-06 01:20:25'),
(355, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:26', '2011-07-06 01:20:26'),
(356, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:26', '2011-07-06 01:20:26'),
(357, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890026', 0, '2011-07-06 01:20:32', '2011-07-06 01:20:32'),
(358, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890026', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:32', '2011-07-06 01:20:32'),
(359, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890026', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-06 01:20:34', '2011-07-06 01:20:34'),
(360, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:34', '2011-07-06 01:20:34'),
(361, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:20:34', '2011-07-06 01:20:34'),
(362, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890026', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-06 01:21:48', '2011-07-06 01:21:48'),
(363, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:21:48', '2011-07-06 01:21:48'),
(364, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:21:49', '2011-07-06 01:21:49'),
(365, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:21:58', '2011-07-06 01:21:58'),
(366, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:21:58', '2011-07-06 01:21:58'),
(367, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:21:58', '2011-07-06 01:21:58'),
(368, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:21:59', '2011-07-06 01:21:59'),
(369, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:24:23', '2011-07-06 01:24:23'),
(370, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:24:24', '2011-07-06 01:24:24'),
(371, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:24:24', '2011-07-06 01:24:24'),
(372, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:24:24', '2011-07-06 01:24:24'),
(373, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2', 0, '2011-07-06 01:24:31', '2011-07-06 01:24:31'),
(374, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:24:31', '2011-07-06 01:24:31'),
(375, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:24:31', '2011-07-06 01:24:31'),
(376, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890271', 0, '2011-07-06 01:24:34', '2011-07-06 01:24:34'),
(377, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890271', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:24:34', '2011-07-06 01:24:34'),
(378, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:24:37', '2011-07-06 01:24:37'),
(379, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:24:37', '2011-07-06 01:24:37'),
(380, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:24:37', '2011-07-06 01:24:37'),
(381, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:24:38', '2011-07-06 01:24:38'),
(382, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890271', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890274', 0, '2011-07-06 01:24:46', '2011-07-06 01:24:46'),
(383, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890274', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:24:46', '2011-07-06 01:24:46'),
(384, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:24:50', '2011-07-06 01:24:50'),
(385, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:24:50', '2011-07-06 01:24:50'),
(386, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:24:50', '2011-07-06 01:24:50'),
(387, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:24:51', '2011-07-06 01:24:51'),
(388, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890274', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-06 01:24:53', '2011-07-06 01:24:53'),
(389, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:24:53', '2011-07-06 01:24:53'),
(390, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:24:53', '2011-07-06 01:24:53'),
(391, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890274', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-06 01:25:10', '2011-07-06 01:25:10'),
(392, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:25:10', '2011-07-06 01:25:10'),
(393, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:25:11', '2011-07-06 01:25:11'),
(394, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2', 0, '2011-07-06 01:25:30', '2011-07-06 01:25:30'),
(395, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:25:30', '2011-07-06 01:25:30'),
(396, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:25:31', '2011-07-06 01:25:31'),
(397, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890330', 0, '2011-07-06 01:25:32', '2011-07-06 01:25:32'),
(398, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890330', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/edit/id/2/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:25:33', '2011-07-06 01:25:33'),
(399, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/edit/id/2/time/1309890330', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-06 01:25:34', '2011-07-06 01:25:34'),
(400, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:25:34', '2011-07-06 01:25:34'),
(401, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/jabatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:25:35', '2011-07-06 01:25:35'),
(402, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:25:42', '2011-07-06 01:25:42'),
(403, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:25:42', '2011-07-06 01:25:42'),
(404, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:25:42', '2011-07-06 01:25:42'),
(405, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:25:43', '2011-07-06 01:25:43'),
(406, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:26:51', '2011-07-06 01:26:51'),
(407, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:26:52', '2011-07-06 01:26:52'),
(408, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:26:52', '2011-07-06 01:26:52'),
(409, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:26:53', '2011-07-06 01:26:53'),
(410, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:27:48', '2011-07-06 01:27:48'),
(411, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:27:49', '2011-07-06 01:27:49'),
(412, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:27:49', '2011-07-06 01:27:49'),
(413, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:27:49', '2011-07-06 01:27:49'),
(414, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:28:17', '2011-07-06 01:28:17'),
(415, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:28:18', '2011-07-06 01:28:18'),
(416, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:28:18', '2011-07-06 01:28:18'),
(417, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:28:18', '2011-07-06 01:28:18'),
(418, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:29:03', '2011-07-06 01:29:03'),
(419, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:29:03', '2011-07-06 01:29:03'),
(420, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:29:03', '2011-07-06 01:29:03'),
(421, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:29:04', '2011-07-06 01:29:04'),
(422, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:30:44', '2011-07-06 01:30:44'),
(423, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:30:45', '2011-07-06 01:30:45'),
(424, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:30:45', '2011-07-06 01:30:45'),
(425, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:30:45', '2011-07-06 01:30:45'),
(426, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888844', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309888907', 0, '2011-07-06 01:31:11', '2011-07-06 01:31:11'),
(427, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:31:11', '2011-07-06 01:31:11'),
(428, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:31:11', '2011-07-06 01:31:11'),
(429, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:31:12', '2011-07-06 01:31:12'),
(430, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309888907', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309890671', 0, '2011-07-06 01:32:54', '2011-07-06 01:32:54'),
(431, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890671', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:32:55', '2011-07-06 01:32:55'),
(432, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890671', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:32:55', '2011-07-06 01:32:55'),
(433, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890671', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:32:55', '2011-07-06 01:32:55'),
(434, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890671', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309890774', 0, '2011-07-06 01:33:20', '2011-07-06 01:33:20'),
(435, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890774', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:33:21', '2011-07-06 01:33:21'),
(436, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890774', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:33:21', '2011-07-06 01:33:21'),
(437, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890774', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:33:21', '2011-07-06 01:33:21'),
(438, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890774', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309890801', 0, '2011-07-06 01:33:30', '2011-07-06 01:33:30'),
(439, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890801', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:33:30', '2011-07-06 01:33:30'),
(440, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890801', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:33:30', '2011-07-06 01:33:30'),
(441, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890801', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:33:31', '2011-07-06 01:33:31'),
(442, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890801', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:33:35', '2011-07-06 01:33:35'),
(443, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:33:35', '2011-07-06 01:33:35'),
(444, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:33:35', '2011-07-06 01:33:35'),
(445, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890801', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:37:09', '2011-07-06 01:37:09'),
(446, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:37:09', '2011-07-06 01:37:09'),
(447, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:37:10', '2011-07-06 01:37:10'),
(448, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890801', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:37:43', '2011-07-06 01:37:43'),
(449, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:37:43', '2011-07-06 01:37:43'),
(450, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:37:44', '2011-07-06 01:37:44'),
(451, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890801', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:38:04', '2011-07-06 01:38:04'),
(452, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:38:04', '2011-07-06 01:38:04'),
(453, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:38:05', '2011-07-06 01:38:05'),
(454, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890801', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:38:10', '2011-07-06 01:38:10'),
(455, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:38:10', '2011-07-06 01:38:10'),
(456, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:38:11', '2011-07-06 01:38:11'),
(457, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309890801', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:38:17', '2011-07-06 01:38:17'),
(458, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:38:18', '2011-07-06 01:38:18'),
(459, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:38:18', '2011-07-06 01:38:18'),
(460, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:38:28', '2011-07-06 01:38:28'),
(461, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:38:28', '2011-07-06 01:38:28'),
(462, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:38:28', '2011-07-06 01:38:28'),
(463, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:38:29', '2011-07-06 01:38:29'),
(464, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:38:29', '2011-07-06 01:38:29'),
(465, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:39:20', '2011-07-06 01:39:20'),
(466, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:21', '2011-07-06 01:39:21'),
(467, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:21', '2011-07-06 01:39:21'),
(468, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 0, '2011-07-06 01:39:23', '2011-07-06 01:39:23'),
(469, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:24', '2011-07-06 01:39:24'),
(470, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 0, '2011-07-06 01:39:31', '2011-07-06 01:39:31'),
(471, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:31', '2011-07-06 01:39:31'),
(472, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:39:38', '2011-07-06 01:39:38'),
(473, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:39:38', '2011-07-06 01:39:38'),
(474, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:38', '2011-07-06 01:39:38'),
(475, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:39', '2011-07-06 01:39:39'),
(476, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:39:39', '2011-07-06 01:39:39'),
(477, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:39:40', '2011-07-06 01:39:40');
INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(478, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:40', '2011-07-06 01:39:40'),
(479, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:40', '2011-07-06 01:39:40'),
(480, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:39:41', '2011-07-06 01:39:41'),
(481, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:41', '2011-07-06 01:39:41'),
(482, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:39:42', '2011-07-06 01:39:42'),
(483, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:42', '2011-07-06 01:39:42'),
(484, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:39:42', '2011-07-06 01:39:42'),
(485, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:39:54', '2011-07-06 01:39:54'),
(486, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:54', '2011-07-06 01:39:54'),
(487, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:39:54', '2011-07-06 01:39:54'),
(488, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:55', '2011-07-06 01:39:55'),
(489, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:39:55', '2011-07-06 01:39:55'),
(490, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:39:56', '2011-07-06 01:39:56'),
(491, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:56', '2011-07-06 01:39:56'),
(492, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:56', '2011-07-06 01:39:56'),
(493, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master', 0, '2011-07-06 01:39:57', '2011-07-06 01:39:57'),
(494, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/view', 0, '2011-07-06 01:39:57', '2011-07-06 01:39:57'),
(495, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:57', '2011-07-06 01:39:57'),
(496, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:39:58', '2011-07-06 01:39:58'),
(497, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/view', 0, '2011-07-06 01:40:02', '2011-07-06 01:40:02'),
(498, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:40:02', '2011-07-06 01:40:02'),
(499, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:40:03', '2011-07-06 01:40:03'),
(500, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:40:04', '2011-07-06 01:40:04'),
(501, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:40:05', '2011-07-06 01:40:05'),
(502, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:40:05', '2011-07-06 01:40:05'),
(503, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:40:06', '2011-07-06 01:40:06'),
(504, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:40:06', '2011-07-06 01:40:06'),
(505, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:40:06', '2011-07-06 01:40:06'),
(506, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:40:07', '2011-07-06 01:40:07'),
(507, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:40:07', '2011-07-06 01:40:07'),
(508, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309891206', 0, '2011-07-06 01:41:15', '2011-07-06 01:41:15'),
(509, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891206', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:41:15', '2011-07-06 01:41:15'),
(510, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891206', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:41:16', '2011-07-06 01:41:16'),
(511, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891206', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:41:16', '2011-07-06 01:41:16'),
(512, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891206', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:42:05', '2011-07-06 01:42:05'),
(513, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:42:06', '2011-07-06 01:42:06'),
(514, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:42:06', '2011-07-06 01:42:06'),
(515, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:42:07', '2011-07-06 01:42:07'),
(516, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:42:07', '2011-07-06 01:42:07'),
(517, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:42:07', '2011-07-06 01:42:07'),
(518, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:42:08', '2011-07-06 01:42:08'),
(519, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:42:08', '2011-07-06 01:42:08'),
(520, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309891327', 0, '2011-07-06 01:42:48', '2011-07-06 01:42:48'),
(521, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891327', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:42:48', '2011-07-06 01:42:48'),
(522, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891327', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:42:48', '2011-07-06 01:42:48'),
(523, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891327', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:42:48', '2011-07-06 01:42:48'),
(524, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891327', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:42:50', '2011-07-06 01:42:50'),
(525, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:42:50', '2011-07-06 01:42:50'),
(526, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:42:50', '2011-07-06 01:42:50'),
(527, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 0, '2011-07-06 01:42:54', '2011-07-06 01:42:54'),
(528, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:42:54', '2011-07-06 01:42:54'),
(529, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 0, '2011-07-06 01:42:58', '2011-07-06 01:42:58'),
(530, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:42:58', '2011-07-06 01:42:58'),
(531, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:43:00', '2011-07-06 01:43:00'),
(532, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:43:00', '2011-07-06 01:43:00'),
(533, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:43:00', '2011-07-06 01:43:00'),
(534, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:43:00', '2011-07-06 01:43:00'),
(535, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:43:00', '2011-07-06 01:43:00'),
(536, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/1309891380', 0, '2011-07-06 01:44:16', '2011-07-06 01:44:16'),
(537, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891380', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:44:17', '2011-07-06 01:44:17'),
(538, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891380', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:44:17', '2011-07-06 01:44:17'),
(539, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891380', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add/time/loading.gif', 0, '2011-07-06 01:44:17', '2011-07-06 01:44:17'),
(540, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891380', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:44:18', '2011-07-06 01:44:18'),
(541, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:44:19', '2011-07-06 01:44:19'),
(542, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:44:19', '2011-07-06 01:44:19'),
(543, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891380', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:45:18', '2011-07-06 01:45:18'),
(544, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:45:18', '2011-07-06 01:45:18'),
(545, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:45:18', '2011-07-06 01:45:18'),
(546, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/0', 0, '2011-07-06 01:45:30', '2011-07-06 01:45:30'),
(547, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add/time/1309891380', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:45:31', '2011-07-06 01:45:31'),
(548, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:45:32', '2011-07-06 01:45:32'),
(549, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:45:32', '2011-07-06 01:45:32'),
(550, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:45:33', '2011-07-06 01:45:33'),
(551, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:45:34', '2011-07-06 01:45:34'),
(552, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:45:34', '2011-07-06 01:45:34'),
(553, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:45:34', '2011-07-06 01:45:34'),
(554, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:45:34', '2011-07-06 01:45:34'),
(555, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:45:47', '2011-07-06 01:45:47'),
(556, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:45:47', '2011-07-06 01:45:47'),
(557, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:45:47', '2011-07-06 01:45:47'),
(558, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/0', 0, '2011-07-06 01:45:51', '2011-07-06 01:45:51'),
(559, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:46:03', '2011-07-06 01:46:03'),
(560, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:46:03', '2011-07-06 01:46:03'),
(561, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:46:03', '2011-07-06 01:46:03'),
(562, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:46:42', '2011-07-06 01:46:42'),
(563, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:46:42', '2011-07-06 01:46:42'),
(564, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:46:42', '2011-07-06 01:46:42'),
(565, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:46:53', '2011-07-06 01:46:53'),
(566, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:46:53', '2011-07-06 01:46:53'),
(567, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:46:53', '2011-07-06 01:46:53'),
(568, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:50:47', '2011-07-06 01:50:47'),
(569, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:50:47', '2011-07-06 01:50:47'),
(570, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:50:48', '2011-07-06 01:50:48'),
(571, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:50:52', '2011-07-06 01:50:52'),
(572, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:50:52', '2011-07-06 01:50:52'),
(573, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:50:52', '2011-07-06 01:50:52'),
(574, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:50:52', '2011-07-06 01:50:52'),
(575, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:50:52', '2011-07-06 01:50:52'),
(576, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:52:37', '2011-07-06 01:52:37'),
(577, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:52:38', '2011-07-06 01:52:38'),
(578, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:52:38', '2011-07-06 01:52:38'),
(579, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:52:38', '2011-07-06 01:52:38'),
(580, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:52:38', '2011-07-06 01:52:38'),
(581, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:52:52', '2011-07-06 01:52:52'),
(582, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:52:52', '2011-07-06 01:52:52'),
(583, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:52:53', '2011-07-06 01:52:53'),
(584, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:52:53', '2011-07-06 01:52:53'),
(585, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:52:53', '2011-07-06 01:52:53'),
(586, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:53:15', '2011-07-06 01:53:15'),
(587, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:15', '2011-07-06 01:53:15'),
(588, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:53:15', '2011-07-06 01:53:15'),
(589, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:16', '2011-07-06 01:53:16'),
(590, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:53:16', '2011-07-06 01:53:16'),
(591, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/jabatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/view', 0, '2011-07-06 01:53:22', '2011-07-06 01:53:22'),
(592, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:22', '2011-07-06 01:53:22'),
(593, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:22', '2011-07-06 01:53:22'),
(594, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-06 01:53:23', '2011-07-06 01:53:23'),
(595, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:24', '2011-07-06 01:53:24'),
(596, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:24', '2011-07-06 01:53:24'),
(597, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/add', 0, '2011-07-06 01:53:25', '2011-07-06 01:53:25'),
(598, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:25', '2011-07-06 01:53:25'),
(599, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/loading.gif', 0, '2011-07-06 01:53:25', '2011-07-06 01:53:25'),
(600, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:26', '2011-07-06 01:53:26'),
(601, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/loading.gif', 0, '2011-07-06 01:53:26', '2011-07-06 01:53:26'),
(602, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/add', 0, '2011-07-06 01:53:56', '2011-07-06 01:53:56'),
(603, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:56', '2011-07-06 01:53:56'),
(604, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/loading.gif', 0, '2011-07-06 01:53:56', '2011-07-06 01:53:56'),
(605, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:57', '2011-07-06 01:53:57'),
(606, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/loading.gif', 0, '2011-07-06 01:53:57', '2011-07-06 01:53:57'),
(607, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 01:53:58', '2011-07-06 01:53:58'),
(608, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:53:58', '2011-07-06 01:53:58'),
(609, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:58', '2011-07-06 01:53:58'),
(610, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:53:58', '2011-07-06 01:53:58'),
(611, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 01:53:59', '2011-07-06 01:53:59'),
(612, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 01:54:48', '2011-07-06 01:54:48'),
(613, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:54:48', '2011-07-06 01:54:48'),
(614, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:54:48', '2011-07-06 01:54:48'),
(615, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 01:54:49', '2011-07-06 01:54:49'),
(616, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 01:56:32', '2011-07-06 01:56:32'),
(617, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:56:33', '2011-07-06 01:56:33'),
(618, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 01:56:33', '2011-07-06 01:56:33'),
(619, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:56:33', '2011-07-06 01:56:33'),
(620, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 01:56:33', '2011-07-06 01:56:33'),
(621, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 01:57:01', '2011-07-06 01:57:01'),
(622, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 01:57:01', '2011-07-06 01:57:01'),
(623, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:57:01', '2011-07-06 01:57:01'),
(624, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:57:02', '2011-07-06 01:57:02'),
(625, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 01:57:02', '2011-07-06 01:57:02'),
(626, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 01:57:16', '2011-07-06 01:57:16'),
(627, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:57:16', '2011-07-06 01:57:16'),
(628, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 01:57:16', '2011-07-06 01:57:16'),
(629, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:57:16', '2011-07-06 01:57:16'),
(630, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 01:57:16', '2011-07-06 01:57:16'),
(631, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 01:57:46', '2011-07-06 01:57:46'),
(632, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 01:57:46', '2011-07-06 01:57:46'),
(633, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:57:46', '2011-07-06 01:57:46'),
(634, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:57:46', '2011-07-06 01:57:46'),
(635, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 01:57:46', '2011-07-06 01:57:46');
INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(636, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 01:59:57', '2011-07-06 01:59:57'),
(637, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:59:57', '2011-07-06 01:59:57'),
(638, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 01:59:57', '2011-07-06 01:59:57'),
(639, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 01:59:58', '2011-07-06 01:59:58'),
(640, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 01:59:58', '2011-07-06 01:59:58'),
(641, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:00:51', '2011-07-06 02:00:51'),
(642, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:01:18', '2011-07-06 02:01:18'),
(643, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:01:18', '2011-07-06 02:01:18'),
(644, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:01:18', '2011-07-06 02:01:18'),
(645, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:01:18', '2011-07-06 02:01:18'),
(646, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:01:18', '2011-07-06 02:01:18'),
(647, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:01:34', '2011-07-06 02:01:34'),
(648, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:01:34', '2011-07-06 02:01:34'),
(649, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:01:34', '2011-07-06 02:01:34'),
(650, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:01:34', '2011-07-06 02:01:34'),
(651, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:01:35', '2011-07-06 02:01:35'),
(652, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:02:05', '2011-07-06 02:02:05'),
(653, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:02:05', '2011-07-06 02:02:05'),
(654, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:02:05', '2011-07-06 02:02:05'),
(655, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:02:05', '2011-07-06 02:02:05'),
(656, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:02:05', '2011-07-06 02:02:05'),
(657, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:03:13', '2011-07-06 02:03:13'),
(658, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:03:13', '2011-07-06 02:03:13'),
(659, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:03:13', '2011-07-06 02:03:13'),
(660, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:03:13', '2011-07-06 02:03:13'),
(661, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:03:13', '2011-07-06 02:03:13'),
(662, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:03:52', '2011-07-06 02:03:52'),
(663, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:03:53', '2011-07-06 02:03:53'),
(664, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:03:53', '2011-07-06 02:03:53'),
(665, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:03:53', '2011-07-06 02:03:53'),
(666, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:03:53', '2011-07-06 02:03:53'),
(667, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:04:20', '2011-07-06 02:04:20'),
(668, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:04:21', '2011-07-06 02:04:21'),
(669, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:04:21', '2011-07-06 02:04:21'),
(670, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:04:21', '2011-07-06 02:04:21'),
(671, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:04:21', '2011-07-06 02:04:21'),
(672, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:04:40', '2011-07-06 02:04:40'),
(673, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:04:40', '2011-07-06 02:04:40'),
(674, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:04:40', '2011-07-06 02:04:40'),
(675, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:04:41', '2011-07-06 02:04:41'),
(676, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:04:41', '2011-07-06 02:04:41'),
(677, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:05:02', '2011-07-06 02:05:02'),
(678, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:05:03', '2011-07-06 02:05:03'),
(679, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:05:03', '2011-07-06 02:05:03'),
(680, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:05:03', '2011-07-06 02:05:03'),
(681, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:05:03', '2011-07-06 02:05:03'),
(682, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:06:16', '2011-07-06 02:06:16'),
(683, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:06:16', '2011-07-06 02:06:16'),
(684, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:06:16', '2011-07-06 02:06:16'),
(685, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:06:16', '2011-07-06 02:06:16'),
(686, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:06:17', '2011-07-06 02:06:17'),
(687, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892776', 0, '2011-07-06 02:06:21', '2011-07-06 02:06:21'),
(688, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892776', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:06:21', '2011-07-06 02:06:21'),
(689, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892776', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:06:21', '2011-07-06 02:06:21'),
(690, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892776', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:06:21', '2011-07-06 02:06:21'),
(691, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892776', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 0, '2011-07-06 02:06:45', '2011-07-06 02:06:45'),
(692, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:06:45', '2011-07-06 02:06:45'),
(693, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:06:46', '2011-07-06 02:06:46'),
(694, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:06:46', '2011-07-06 02:06:46'),
(695, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892805', 0, '2011-07-06 02:07:20', '2011-07-06 02:07:20'),
(696, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892776', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 0, '2011-07-06 02:07:26', '2011-07-06 02:07:26'),
(697, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892776', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 0, '2011-07-06 02:08:07', '2011-07-06 02:08:07'),
(698, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:08:07', '2011-07-06 02:08:07'),
(699, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:08:08', '2011-07-06 02:08:08'),
(700, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:08:08', '2011-07-06 02:08:08'),
(701, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892887', 0, '2011-07-06 02:08:20', '2011-07-06 02:08:20'),
(702, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892887', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:08:20', '2011-07-06 02:08:20'),
(703, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892887', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:08:21', '2011-07-06 02:08:21'),
(704, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892887', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:08:21', '2011-07-06 02:08:21'),
(705, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892781', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892887', 0, '2011-07-06 02:08:30', '2011-07-06 02:08:30'),
(706, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892887', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:08:30', '2011-07-06 02:08:30'),
(707, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892887', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:08:31', '2011-07-06 02:08:31'),
(708, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892887', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:08:31', '2011-07-06 02:08:31'),
(709, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892887', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892910', 0, '2011-07-06 02:09:00', '2011-07-06 02:09:00'),
(710, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892910', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:09:00', '2011-07-06 02:09:00'),
(711, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892910', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:09:00', '2011-07-06 02:09:00'),
(712, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892910', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1time/loading.gif', 0, '2011-07-06 02:09:00', '2011-07-06 02:09:00'),
(713, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1time/1309892910', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:09:20', '2011-07-06 02:09:20'),
(714, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:09:20', '2011-07-06 02:09:20'),
(715, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:09:21', '2011-07-06 02:09:21'),
(716, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:09:22', '2011-07-06 02:09:22'),
(717, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:09:22', '2011-07-06 02:09:22'),
(718, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:09:22', '2011-07-06 02:09:22'),
(719, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:09:22', '2011-07-06 02:09:22'),
(720, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:09:22', '2011-07-06 02:09:22'),
(721, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309892962', 0, '2011-07-06 02:09:24', '2011-07-06 02:09:24'),
(722, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309892962', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:09:25', '2011-07-06 02:09:25'),
(723, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309892962', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:09:25', '2011-07-06 02:09:25'),
(724, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309892962', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:09:25', '2011-07-06 02:09:25'),
(725, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309892962', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309892964', 0, '2011-07-06 02:09:33', '2011-07-06 02:09:33'),
(726, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309892964', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:09:33', '2011-07-06 02:09:33'),
(727, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309892964', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:09:33', '2011-07-06 02:09:33'),
(728, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309892964', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:09:34', '2011-07-06 02:09:34'),
(729, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309892964', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:10:45', '2011-07-06 02:10:45'),
(730, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:10:45', '2011-07-06 02:10:45'),
(731, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:10:45', '2011-07-06 02:10:45'),
(732, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 02:10:47', '2011-07-06 02:10:47'),
(733, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:10:47', '2011-07-06 02:10:47'),
(734, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 02:10:47', '2011-07-06 02:10:47'),
(735, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:10:47', '2011-07-06 02:10:47'),
(736, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 02:10:48', '2011-07-06 02:10:48'),
(737, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 02:12:17', '2011-07-06 02:12:17'),
(738, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 02:12:17', '2011-07-06 02:12:17'),
(739, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:12:17', '2011-07-06 02:12:17'),
(740, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:12:17', '2011-07-06 02:12:17'),
(741, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 02:12:17', '2011-07-06 02:12:17'),
(742, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 02:12:40', '2011-07-06 02:12:40'),
(743, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:12:41', '2011-07-06 02:12:41'),
(744, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 02:12:41', '2011-07-06 02:12:41'),
(745, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:12:41', '2011-07-06 02:12:41'),
(746, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 02:12:41', '2011-07-06 02:12:41'),
(747, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 02:12:53', '2011-07-06 02:12:53'),
(748, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:12:53', '2011-07-06 02:12:53'),
(749, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 02:12:53', '2011-07-06 02:12:53'),
(750, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:12:54', '2011-07-06 02:12:54'),
(751, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 02:12:54', '2011-07-06 02:12:54'),
(752, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:12:59', '2011-07-06 02:12:59'),
(753, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:12:59', '2011-07-06 02:12:59'),
(754, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:12:59', '2011-07-06 02:12:59'),
(755, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:13:01', '2011-07-06 02:13:01'),
(756, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:13:01', '2011-07-06 02:13:01'),
(757, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:13:01', '2011-07-06 02:13:01'),
(758, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:13:01', '2011-07-06 02:13:01'),
(759, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:13:02', '2011-07-06 02:13:02'),
(760, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893181', 0, '2011-07-06 02:13:09', '2011-07-06 02:13:09'),
(761, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893181', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:13:09', '2011-07-06 02:13:09'),
(762, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893181', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:13:10', '2011-07-06 02:13:10'),
(763, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893181', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:13:10', '2011-07-06 02:13:10'),
(764, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893181', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:13:11', '2011-07-06 02:13:11'),
(765, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:13:11', '2011-07-06 02:13:11'),
(766, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:13:12', '2011-07-06 02:13:12'),
(767, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:13:13', '2011-07-06 02:13:13'),
(768, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:13:14', '2011-07-06 02:13:14'),
(769, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:13:14', '2011-07-06 02:13:14'),
(770, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:13:14', '2011-07-06 02:13:14'),
(771, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:13:14', '2011-07-06 02:13:14'),
(772, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:14:26', '2011-07-06 02:14:26'),
(773, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:14:26', '2011-07-06 02:14:26'),
(774, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:14:26', '2011-07-06 02:14:26'),
(775, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:14:26', '2011-07-06 02:14:26'),
(776, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:14:27', '2011-07-06 02:14:27'),
(777, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:15:15', '2011-07-06 02:15:15'),
(778, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:15', '2011-07-06 02:15:15'),
(779, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:15:15', '2011-07-06 02:15:15'),
(780, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:15:15', '2011-07-06 02:15:15'),
(781, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:15:15', '2011-07-06 02:15:15'),
(782, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:16', '2011-07-06 02:15:16'),
(783, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:16', '2011-07-06 02:15:16'),
(784, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:15:16', '2011-07-06 02:15:16'),
(785, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:15:25', '2011-07-06 02:15:25'),
(786, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:25', '2011-07-06 02:15:25'),
(787, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:15:25', '2011-07-06 02:15:25'),
(788, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:25', '2011-07-06 02:15:25'),
(789, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:15:26', '2011-07-06 02:15:26');
INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(790, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:15:48', '2011-07-06 02:15:48'),
(791, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:48', '2011-07-06 02:15:48'),
(792, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:15:48', '2011-07-06 02:15:48'),
(793, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:49', '2011-07-06 02:15:49'),
(794, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:15:49', '2011-07-06 02:15:49'),
(795, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893348', 0, '2011-07-06 02:15:53', '2011-07-06 02:15:53'),
(796, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893348', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:53', '2011-07-06 02:15:53'),
(797, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893348', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:15:54', '2011-07-06 02:15:54'),
(798, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893348', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:15:54', '2011-07-06 02:15:54'),
(799, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893348', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:15:55', '2011-07-06 02:15:55'),
(800, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:56', '2011-07-06 02:15:56'),
(801, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:56', '2011-07-06 02:15:56'),
(802, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:15:58', '2011-07-06 02:15:58'),
(803, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:15:58', '2011-07-06 02:15:58'),
(804, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:58', '2011-07-06 02:15:58'),
(805, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:15:58', '2011-07-06 02:15:58'),
(806, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:15:58', '2011-07-06 02:15:58'),
(807, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893358', 0, '2011-07-06 02:16:16', '2011-07-06 02:16:16'),
(808, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893358', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:16:16', '2011-07-06 02:16:16'),
(809, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893358', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:16:17', '2011-07-06 02:16:17'),
(810, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893358', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:16:17', '2011-07-06 02:16:17'),
(811, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893358', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:17:07', '2011-07-06 02:17:07'),
(812, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:07', '2011-07-06 02:17:07'),
(813, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:07', '2011-07-06 02:17:07'),
(814, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:17:08', '2011-07-06 02:17:08'),
(815, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:08', '2011-07-06 02:17:08'),
(816, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:17:09', '2011-07-06 02:17:09'),
(817, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:09', '2011-07-06 02:17:09'),
(818, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:17:09', '2011-07-06 02:17:09'),
(819, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893428', 0, '2011-07-06 02:17:12', '2011-07-06 02:17:12'),
(820, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893428', 0, '2011-07-06 02:17:26', '2011-07-06 02:17:26'),
(821, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893428', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:17:26', '2011-07-06 02:17:26'),
(822, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893428', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:26', '2011-07-06 02:17:26'),
(823, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893428', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:17:27', '2011-07-06 02:17:27'),
(824, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893428', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:17:28', '2011-07-06 02:17:28'),
(825, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:28', '2011-07-06 02:17:28'),
(826, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:28', '2011-07-06 02:17:28'),
(827, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:17:30', '2011-07-06 02:17:30'),
(828, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:17:30', '2011-07-06 02:17:30'),
(829, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:30', '2011-07-06 02:17:30'),
(830, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:17:30', '2011-07-06 02:17:30'),
(831, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893450', 0, '2011-07-06 02:17:39', '2011-07-06 02:17:39'),
(832, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893450', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:39', '2011-07-06 02:17:39'),
(833, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893450', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:17:39', '2011-07-06 02:17:39'),
(834, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893450', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:17:40', '2011-07-06 02:17:40'),
(835, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893450', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:17:41', '2011-07-06 02:17:41'),
(836, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:41', '2011-07-06 02:17:41'),
(837, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:41', '2011-07-06 02:17:41'),
(838, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:17:43', '2011-07-06 02:17:43'),
(839, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:44', '2011-07-06 02:17:44'),
(840, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:17:44', '2011-07-06 02:17:44'),
(841, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:44', '2011-07-06 02:17:44'),
(842, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:17:44', '2011-07-06 02:17:44'),
(843, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893463', 0, '2011-07-06 02:17:48', '2011-07-06 02:17:48'),
(844, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893463', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:17:48', '2011-07-06 02:17:48'),
(845, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893463', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:48', '2011-07-06 02:17:48'),
(846, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893463', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:17:48', '2011-07-06 02:17:48'),
(847, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893463', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:17:50', '2011-07-06 02:17:50'),
(848, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:50', '2011-07-06 02:17:50'),
(849, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:50', '2011-07-06 02:17:50'),
(850, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:17:52', '2011-07-06 02:17:52'),
(851, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:17:52', '2011-07-06 02:17:52'),
(852, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:52', '2011-07-06 02:17:52'),
(853, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:17:52', '2011-07-06 02:17:52'),
(854, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:17:53', '2011-07-06 02:17:53'),
(855, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893472', 0, '2011-07-06 02:18:01', '2011-07-06 02:18:01'),
(856, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893472', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:18:01', '2011-07-06 02:18:01'),
(857, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893472', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:18:01', '2011-07-06 02:18:01'),
(858, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893472', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:18:01', '2011-07-06 02:18:01'),
(859, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893472', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893481', 0, '2011-07-06 02:18:44', '2011-07-06 02:18:44'),
(860, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893481', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:18:44', '2011-07-06 02:18:44'),
(861, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893481', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:18:44', '2011-07-06 02:18:44'),
(862, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893481', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:18:44', '2011-07-06 02:18:44'),
(863, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893481', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893524', 0, '2011-07-06 02:19:07', '2011-07-06 02:19:07'),
(864, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893524', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:19:07', '2011-07-06 02:19:07'),
(865, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893524', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:19:07', '2011-07-06 02:19:07'),
(866, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893524', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:19:08', '2011-07-06 02:19:08'),
(867, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893524', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:19:09', '2011-07-06 02:19:09'),
(868, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:19:09', '2011-07-06 02:19:09'),
(869, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:19:09', '2011-07-06 02:19:09'),
(870, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:19:12', '2011-07-06 02:19:12'),
(871, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:19:12', '2011-07-06 02:19:12'),
(872, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:19:12', '2011-07-06 02:19:12'),
(873, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:19:13', '2011-07-06 02:19:13'),
(874, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:19:13', '2011-07-06 02:19:13'),
(875, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:19:41', '2011-07-06 02:19:41'),
(876, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:19:41', '2011-07-06 02:19:41'),
(877, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:19:41', '2011-07-06 02:19:41'),
(878, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:19:41', '2011-07-06 02:19:41'),
(879, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:19:42', '2011-07-06 02:19:42'),
(880, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:20:12', '2011-07-06 02:20:12'),
(881, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:20:12', '2011-07-06 02:20:12'),
(882, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:20:12', '2011-07-06 02:20:12'),
(883, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:20:13', '2011-07-06 02:20:13'),
(884, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:20:13', '2011-07-06 02:20:13'),
(885, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:20:24', '2011-07-06 02:20:24'),
(886, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:20:24', '2011-07-06 02:20:24'),
(887, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:20:24', '2011-07-06 02:20:24'),
(888, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:20:25', '2011-07-06 02:20:25'),
(889, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:20:25', '2011-07-06 02:20:25'),
(890, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:20:55', '2011-07-06 02:20:55'),
(891, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:20:55', '2011-07-06 02:20:55'),
(892, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:20:55', '2011-07-06 02:20:55'),
(893, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:20:56', '2011-07-06 02:20:56'),
(894, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:20:56', '2011-07-06 02:20:56'),
(895, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893655', 0, '2011-07-06 02:21:00', '2011-07-06 02:21:00'),
(896, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893655', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:21:00', '2011-07-06 02:21:00'),
(897, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893655', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:01', '2011-07-06 02:21:01'),
(898, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893655', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:21:01', '2011-07-06 02:21:01'),
(899, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893655', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:21:02', '2011-07-06 02:21:02'),
(900, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:02', '2011-07-06 02:21:02'),
(901, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:03', '2011-07-06 02:21:03'),
(902, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:21:04', '2011-07-06 02:21:04'),
(903, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:04', '2011-07-06 02:21:04'),
(904, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:21:04', '2011-07-06 02:21:04'),
(905, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:05', '2011-07-06 02:21:05'),
(906, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:21:05', '2011-07-06 02:21:05'),
(907, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893664', 0, '2011-07-06 02:21:15', '2011-07-06 02:21:15'),
(908, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893664', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:21:15', '2011-07-06 02:21:15'),
(909, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893664', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:15', '2011-07-06 02:21:15'),
(910, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893664', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:21:15', '2011-07-06 02:21:15'),
(911, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893664', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:21:17', '2011-07-06 02:21:17'),
(912, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:17', '2011-07-06 02:21:17'),
(913, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:17', '2011-07-06 02:21:17'),
(914, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:21:19', '2011-07-06 02:21:19'),
(915, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:19', '2011-07-06 02:21:19'),
(916, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:21:19', '2011-07-06 02:21:19'),
(917, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:19', '2011-07-06 02:21:19'),
(918, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:21:20', '2011-07-06 02:21:20'),
(919, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893679', 0, '2011-07-06 02:21:32', '2011-07-06 02:21:32'),
(920, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893679', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:21:32', '2011-07-06 02:21:32'),
(921, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893679', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:32', '2011-07-06 02:21:32'),
(922, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893679', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:21:33', '2011-07-06 02:21:33'),
(923, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309893679', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:21:34', '2011-07-06 02:21:34'),
(924, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:34', '2011-07-06 02:21:34'),
(925, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:21:34', '2011-07-06 02:21:34'),
(926, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/view', 0, '2011-07-06 02:22:05', '2011-07-06 02:22:05'),
(927, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:22:06', '2011-07-06 02:22:06'),
(928, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:22:06', '2011-07-06 02:22:06'),
(929, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/view', 0, '2011-07-06 02:22:57', '2011-07-06 02:22:57'),
(930, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:22:57', '2011-07-06 02:22:57'),
(931, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:22:58', '2011-07-06 02:22:58'),
(932, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 02:27:23', '2011-07-06 02:27:23'),
(933, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 02:27:36', '2011-07-06 02:27:36'),
(934, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 02:28:28', '2011-07-06 02:28:28'),
(935, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:28:29', '2011-07-06 02:28:29'),
(936, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:28:29', '2011-07-06 02:28:29'),
(937, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 02:28:56', '2011-07-06 02:28:56'),
(938, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:28:56', '2011-07-06 02:28:56'),
(939, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:28:56', '2011-07-06 02:28:56'),
(940, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 02:29:07', '2011-07-06 02:29:07'),
(941, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:29:07', '2011-07-06 02:29:07'),
(942, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:29:08', '2011-07-06 02:29:08'),
(943, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 02:30:27', '2011-07-06 02:30:27');
INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(944, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:30:28', '2011-07-06 02:30:28'),
(945, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:30:28', '2011-07-06 02:30:28'),
(946, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:39:26', '2011-07-06 02:39:26'),
(947, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:26', '2011-07-06 02:39:26'),
(948, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:27', '2011-07-06 02:39:27'),
(949, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/add', 0, '2011-07-06 02:39:28', '2011-07-06 02:39:28'),
(950, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:28', '2011-07-06 02:39:28'),
(951, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 02:39:28', '2011-07-06 02:39:28'),
(952, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:28', '2011-07-06 02:39:28'),
(953, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/loading.gif', 0, '2011-07-06 02:39:29', '2011-07-06 02:39:29'),
(954, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:39:32', '2011-07-06 02:39:32'),
(955, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:32', '2011-07-06 02:39:32'),
(956, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:32', '2011-07-06 02:39:32'),
(957, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:39:33', '2011-07-06 02:39:33'),
(958, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:33', '2011-07-06 02:39:33'),
(959, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:39:34', '2011-07-06 02:39:34'),
(960, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:34', '2011-07-06 02:39:34'),
(961, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:39:34', '2011-07-06 02:39:34'),
(962, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309894773', 0, '2011-07-06 02:39:41', '2011-07-06 02:39:41'),
(963, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309894773', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:42', '2011-07-06 02:39:42'),
(964, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309894773', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:39:42', '2011-07-06 02:39:42'),
(965, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309894773', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1/time/loading.gif', 0, '2011-07-06 02:39:42', '2011-07-06 02:39:42'),
(966, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1/time/1309894773', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:39:44', '2011-07-06 02:39:44'),
(967, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:44', '2011-07-06 02:39:44'),
(968, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:44', '2011-07-06 02:39:44'),
(969, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:39:45', '2011-07-06 02:39:45'),
(970, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:46', '2011-07-06 02:39:46'),
(971, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:39:46', '2011-07-06 02:39:46'),
(972, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:39:46', '2011-07-06 02:39:46'),
(973, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:39:46', '2011-07-06 02:39:46'),
(974, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/1', 0, '2011-07-06 02:40:47', '2011-07-06 02:40:47'),
(975, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:40:47', '2011-07-06 02:40:47'),
(976, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:40:47', '2011-07-06 02:40:47'),
(977, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:40:47', '2011-07-06 02:40:47'),
(978, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/edit/id/loading.gif', 0, '2011-07-06 02:40:48', '2011-07-06 02:40:48'),
(979, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-06 02:40:48', '2011-07-06 02:40:48'),
(980, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:40:48', '2011-07-06 02:40:48'),
(981, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:40:49', '2011-07-06 02:40:49'),
(982, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/view', 0, '2011-07-06 02:42:01', '2011-07-06 02:42:01'),
(983, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:42:01', '2011-07-06 02:42:01'),
(984, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:42:02', '2011-07-06 02:42:02'),
(985, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/view', 0, '2011-07-06 02:42:58', '2011-07-06 02:42:58'),
(986, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:42:58', '2011-07-06 02:42:58'),
(987, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:42:58', '2011-07-06 02:42:58'),
(988, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 02:43:06', '2011-07-06 02:43:06'),
(989, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:43:06', '2011-07-06 02:43:06'),
(990, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:43:07', '2011-07-06 02:43:07'),
(991, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:43:36', '2011-07-06 02:43:36'),
(992, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:44:38', '2011-07-06 02:44:38'),
(993, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:44:39', '2011-07-06 02:44:39'),
(994, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:44:39', '2011-07-06 02:44:39'),
(995, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:44:39', '2011-07-06 02:44:39'),
(996, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:44:39', '2011-07-06 02:44:39'),
(997, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:45:44', '2011-07-06 02:45:44'),
(998, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:45:44', '2011-07-06 02:45:44'),
(999, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:45:44', '2011-07-06 02:45:44'),
(1000, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:45:44', '2011-07-06 02:45:44'),
(1001, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:45:44', '2011-07-06 02:45:44'),
(1002, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:46:02', '2011-07-06 02:46:02'),
(1003, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:46:03', '2011-07-06 02:46:03'),
(1004, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:46:03', '2011-07-06 02:46:03'),
(1005, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:46:03', '2011-07-06 02:46:03'),
(1006, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:46:03', '2011-07-06 02:46:03'),
(1007, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:47:15', '2011-07-06 02:47:15'),
(1008, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:47:15', '2011-07-06 02:47:15'),
(1009, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:47:15', '2011-07-06 02:47:15'),
(1010, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:47:16', '2011-07-06 02:47:16'),
(1011, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:47:16', '2011-07-06 02:47:16'),
(1012, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 02:47:34', '2011-07-06 02:47:34'),
(1013, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:47:34', '2011-07-06 02:47:34'),
(1014, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:47:34', '2011-07-06 02:47:34'),
(1015, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:47:35', '2011-07-06 02:47:35'),
(1016, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:47:36', '2011-07-06 02:47:36'),
(1017, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:47:36', '2011-07-06 02:47:36'),
(1018, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:47:36', '2011-07-06 02:47:36'),
(1019, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:47:36', '2011-07-06 02:47:36'),
(1020, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:48:02', '2011-07-06 02:48:02'),
(1021, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:48:02', '2011-07-06 02:48:02'),
(1022, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:48:02', '2011-07-06 02:48:02'),
(1023, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:48:02', '2011-07-06 02:48:02'),
(1024, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:48:02', '2011-07-06 02:48:02'),
(1025, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:49:51', '2011-07-06 02:49:51'),
(1026, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:49:51', '2011-07-06 02:49:51'),
(1027, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:49:51', '2011-07-06 02:49:51'),
(1028, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:49:52', '2011-07-06 02:49:52'),
(1029, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:49:52', '2011-07-06 02:49:52'),
(1030, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:50:21', '2011-07-06 02:50:21'),
(1031, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:50:32', '2011-07-06 02:50:32'),
(1032, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:50:32', '2011-07-06 02:50:32'),
(1033, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:50:32', '2011-07-06 02:50:32'),
(1034, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:50:32', '2011-07-06 02:50:32'),
(1035, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:50:33', '2011-07-06 02:50:33'),
(1036, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:51:39', '2011-07-06 02:51:39'),
(1037, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:51:40', '2011-07-06 02:51:40'),
(1038, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:51:40', '2011-07-06 02:51:40'),
(1039, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:51:40', '2011-07-06 02:51:40'),
(1040, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:51:40', '2011-07-06 02:51:40'),
(1041, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:51:51', '2011-07-06 02:51:51'),
(1042, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:51:51', '2011-07-06 02:51:51'),
(1043, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:51:51', '2011-07-06 02:51:51'),
(1044, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:51:51', '2011-07-06 02:51:51'),
(1045, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:51:51', '2011-07-06 02:51:51'),
(1046, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 02:52:25', '2011-07-06 02:52:25'),
(1047, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:52:25', '2011-07-06 02:52:25'),
(1048, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:52:25', '2011-07-06 02:52:25'),
(1049, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:52:25', '2011-07-06 02:52:25'),
(1050, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 02:52:26', '2011-07-06 02:52:26'),
(1051, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/1309895545', 0, '2011-07-06 02:55:41', '2011-07-06 02:55:41'),
(1052, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 02:55:41', '2011-07-06 02:55:41'),
(1053, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:55:41', '2011-07-06 02:55:41'),
(1054, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 02:55:42', '2011-07-06 02:55:42'),
(1055, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/1309895545', 0, '2011-07-06 02:56:04', '2011-07-06 02:56:04'),
(1056, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 02:56:04', '2011-07-06 02:56:04'),
(1057, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:56:04', '2011-07-06 02:56:04'),
(1058, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 02:56:05', '2011-07-06 02:56:05'),
(1059, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/1309895545', 0, '2011-07-06 02:56:53', '2011-07-06 02:56:53'),
(1060, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:56:53', '2011-07-06 02:56:53'),
(1061, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 02:56:54', '2011-07-06 02:56:54'),
(1062, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 02:56:54', '2011-07-06 02:56:54'),
(1063, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/1309895545', 0, '2011-07-06 02:57:29', '2011-07-06 02:57:29'),
(1064, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:57:29', '2011-07-06 02:57:29'),
(1065, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 02:57:29', '2011-07-06 02:57:29'),
(1066, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 02:57:30', '2011-07-06 02:57:30'),
(1067, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895545', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/1309895849', 0, '2011-07-06 02:58:06', '2011-07-06 02:58:06'),
(1068, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:58:06', '2011-07-06 02:58:06'),
(1069, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 02:58:07', '2011-07-06 02:58:07'),
(1070, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 02:58:07', '2011-07-06 02:58:07'),
(1071, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 02:58:08', '2011-07-06 02:58:08'),
(1072, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:58:09', '2011-07-06 02:58:09'),
(1073, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 02:58:09', '2011-07-06 02:58:09'),
(1074, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:00:18', '2011-07-06 03:00:18'),
(1075, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:00:34', '2011-07-06 03:00:34'),
(1076, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:00:34', '2011-07-06 03:00:34'),
(1077, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:00:34', '2011-07-06 03:00:34'),
(1078, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:01:14', '2011-07-06 03:01:14'),
(1079, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:01:14', '2011-07-06 03:01:14'),
(1080, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:01:15', '2011-07-06 03:01:15'),
(1081, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:03:01', '2011-07-06 03:03:01'),
(1082, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:03:01', '2011-07-06 03:03:01'),
(1083, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:03:01', '2011-07-06 03:03:01'),
(1084, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:03:34', '2011-07-06 03:03:34'),
(1085, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:03:34', '2011-07-06 03:03:34'),
(1086, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:03:35', '2011-07-06 03:03:35'),
(1087, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:03:43', '2011-07-06 03:03:43'),
(1088, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:03:43', '2011-07-06 03:03:43'),
(1089, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:03:44', '2011-07-06 03:03:44'),
(1090, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:04:00', '2011-07-06 03:04:00'),
(1091, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:04:01', '2011-07-06 03:04:01'),
(1092, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:04:01', '2011-07-06 03:04:01'),
(1093, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:04:51', '2011-07-06 03:04:51'),
(1094, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:04:51', '2011-07-06 03:04:51'),
(1095, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:04:51', '2011-07-06 03:04:51'),
(1096, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:05:15', '2011-07-06 03:05:15'),
(1097, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:05:15', '2011-07-06 03:05:15'),
(1098, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:05:16', '2011-07-06 03:05:16'),
(1099, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:05:29', '2011-07-06 03:05:29'),
(1100, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:05:29', '2011-07-06 03:05:29');
INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(1101, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:05:30', '2011-07-06 03:05:30'),
(1102, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:06:11', '2011-07-06 03:06:11'),
(1103, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:06:12', '2011-07-06 03:06:12'),
(1104, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:06:12', '2011-07-06 03:06:12'),
(1105, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:06:37', '2011-07-06 03:06:37'),
(1106, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:06:37', '2011-07-06 03:06:37'),
(1107, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:06:38', '2011-07-06 03:06:38'),
(1108, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/0', 0, '2011-07-06 03:11:04', '2011-07-06 03:11:04'),
(1109, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309895849', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:11:08', '2011-07-06 03:11:08'),
(1110, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:11:08', '2011-07-06 03:11:08'),
(1111, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:11:09', '2011-07-06 03:11:09'),
(1112, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/0', 0, '2011-07-06 03:11:12', '2011-07-06 03:11:12'),
(1113, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:11:13', '2011-07-06 03:11:13'),
(1114, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/0', 0, '2011-07-06 03:11:15', '2011-07-06 03:11:15'),
(1115, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:11:16', '2011-07-06 03:11:16'),
(1116, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/0', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 03:11:17', '2011-07-06 03:11:17'),
(1117, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:11:18', '2011-07-06 03:11:18'),
(1118, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 03:11:18', '2011-07-06 03:11:18'),
(1119, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:11:18', '2011-07-06 03:11:18'),
(1120, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 03:11:18', '2011-07-06 03:11:18'),
(1121, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/1309896677', 0, '2011-07-06 03:11:33', '2011-07-06 03:11:33'),
(1122, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309896677', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:11:33', '2011-07-06 03:11:33'),
(1123, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309896677', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 03:11:33', '2011-07-06 03:11:33'),
(1124, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309896677', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 03:11:34', '2011-07-06 03:11:34'),
(1125, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309896677', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:11:35', '2011-07-06 03:11:35'),
(1126, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:11:35', '2011-07-06 03:11:35'),
(1127, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:11:36', '2011-07-06 03:11:36'),
(1128, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/0', 0, '2011-07-06 03:11:38', '2011-07-06 03:11:38'),
(1129, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309896677', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:12:03', '2011-07-06 03:12:03'),
(1130, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:12:04', '2011-07-06 03:12:04'),
(1131, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:12:04', '2011-07-06 03:12:04'),
(1132, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/1', 0, '2011-07-06 03:12:06', '2011-07-06 03:12:06'),
(1133, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:12:06', '2011-07-06 03:12:06'),
(1134, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view/page/0/action/delete/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 03:12:08', '2011-07-06 03:12:08'),
(1135, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:12:09', '2011-07-06 03:12:09'),
(1136, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 03:12:09', '2011-07-06 03:12:09'),
(1137, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:12:09', '2011-07-06 03:12:09'),
(1138, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 03:12:09', '2011-07-06 03:12:09'),
(1139, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/1309896729', 0, '2011-07-06 03:12:20', '2011-07-06 03:12:20'),
(1140, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309896729', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 03:12:20', '2011-07-06 03:12:20'),
(1141, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309896729', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:12:20', '2011-07-06 03:12:20'),
(1142, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309896729', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add/time/loading.gif', 0, '2011-07-06 03:12:20', '2011-07-06 03:12:20'),
(1143, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add/time/1309896729', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:12:21', '2011-07-06 03:12:21'),
(1144, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:12:22', '2011-07-06 03:12:22'),
(1145, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:12:22', '2011-07-06 03:12:22'),
(1146, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:12:23', '2011-07-06 03:12:23'),
(1147, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:13:17', '2011-07-06 03:13:17'),
(1148, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:13:17', '2011-07-06 03:13:17'),
(1149, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:13:17', '2011-07-06 03:13:17'),
(1150, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:13:45', '2011-07-06 03:13:45'),
(1151, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:13:45', '2011-07-06 03:13:45'),
(1152, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:13:45', '2011-07-06 03:13:45'),
(1153, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:14:31', '2011-07-06 03:14:31'),
(1154, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:14:31', '2011-07-06 03:14:31'),
(1155, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:14:31', '2011-07-06 03:14:31'),
(1156, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:14:47', '2011-07-06 03:14:47'),
(1157, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:14:48', '2011-07-06 03:14:48'),
(1158, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:14:48', '2011-07-06 03:14:48'),
(1159, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:15:11', '2011-07-06 03:15:11'),
(1160, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:15:11', '2011-07-06 03:15:11'),
(1161, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:15:11', '2011-07-06 03:15:11'),
(1162, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:15:33', '2011-07-06 03:15:33'),
(1163, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:15:34', '2011-07-06 03:15:34'),
(1164, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:15:34', '2011-07-06 03:15:34'),
(1165, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:16:14', '2011-07-06 03:16:14'),
(1166, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:16:14', '2011-07-06 03:16:14'),
(1167, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:16:15', '2011-07-06 03:16:15'),
(1168, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:16:54', '2011-07-06 03:16:54'),
(1169, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:16:54', '2011-07-06 03:16:54'),
(1170, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:16:54', '2011-07-06 03:16:54'),
(1171, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2/time/1309897014', 0, '2011-07-06 03:16:58', '2011-07-06 03:16:58'),
(1172, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2/time/1309897014', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:16:59', '2011-07-06 03:16:59'),
(1173, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2/time/1309897014', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:17:00', '2011-07-06 03:17:00'),
(1174, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:17:01', '2011-07-06 03:17:01'),
(1175, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:17:01', '2011-07-06 03:17:01'),
(1176, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/add', 0, '2011-07-06 03:17:14', '2011-07-06 03:17:14'),
(1177, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 03:17:14', '2011-07-06 03:17:14'),
(1178, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:17:15', '2011-07-06 03:17:15'),
(1179, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:17:15', '2011-07-06 03:17:15'),
(1180, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/loading.gif', 0, '2011-07-06 03:17:15', '2011-07-06 03:17:15'),
(1181, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:17:19', '2011-07-06 03:17:19'),
(1182, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:17:19', '2011-07-06 03:17:19'),
(1183, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:17:19', '2011-07-06 03:17:19'),
(1184, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:17:21', '2011-07-06 03:17:21'),
(1185, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:17:21', '2011-07-06 03:17:21'),
(1186, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:17:21', '2011-07-06 03:17:21'),
(1187, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2/time/1309897041', 0, '2011-07-06 03:17:56', '2011-07-06 03:17:56'),
(1188, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2/time/1309897041', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:17:56', '2011-07-06 03:17:56'),
(1189, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2/time/1309897041', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:17:58', '2011-07-06 03:17:58'),
(1190, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:17:58', '2011-07-06 03:17:58'),
(1191, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:17:58', '2011-07-06 03:17:58'),
(1192, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:18:00', '2011-07-06 03:18:00'),
(1193, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:18:00', '2011-07-06 03:18:00'),
(1194, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:18:01', '2011-07-06 03:18:01'),
(1195, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:18:02', '2011-07-06 03:18:02'),
(1196, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:18:03', '2011-07-06 03:18:03'),
(1197, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:18:03', '2011-07-06 03:18:03'),
(1198, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:19:36', '2011-07-06 03:19:36'),
(1199, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:19:37', '2011-07-06 03:19:37'),
(1200, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:19:37', '2011-07-06 03:19:37'),
(1201, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:19:38', '2011-07-06 03:19:38'),
(1202, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:19:38', '2011-07-06 03:19:38'),
(1203, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:19:38', '2011-07-06 03:19:38'),
(1204, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:19:56', '2011-07-06 03:19:56'),
(1205, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:19:56', '2011-07-06 03:19:56'),
(1206, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:19:56', '2011-07-06 03:19:56'),
(1207, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:19:58', '2011-07-06 03:19:58'),
(1208, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:19:58', '2011-07-06 03:19:58'),
(1209, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:19:59', '2011-07-06 03:19:59'),
(1210, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2/time/1309897198', 0, '2011-07-06 03:20:01', '2011-07-06 03:20:01'),
(1211, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2/time/1309897198', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:20:02', '2011-07-06 03:20:02'),
(1212, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2/time/1309897198', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:20:03', '2011-07-06 03:20:03'),
(1213, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:20:04', '2011-07-06 03:20:04'),
(1214, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:20:04', '2011-07-06 03:20:04'),
(1215, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:20:05', '2011-07-06 03:20:05'),
(1216, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:20:05', '2011-07-06 03:20:05'),
(1217, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:20:06', '2011-07-06 03:20:06'),
(1218, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:21:09', '2011-07-06 03:21:09'),
(1219, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:21:09', '2011-07-06 03:21:09'),
(1220, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:21:10', '2011-07-06 03:21:10'),
(1221, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:21:17', '2011-07-06 03:21:17'),
(1222, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:21:18', '2011-07-06 03:21:18'),
(1223, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:21:18', '2011-07-06 03:21:18'),
(1224, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:21:23', '2011-07-06 03:21:23'),
(1225, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:21:23', '2011-07-06 03:21:23'),
(1226, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:21:23', '2011-07-06 03:21:23'),
(1227, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:21:53', '2011-07-06 03:21:53'),
(1228, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:21:53', '2011-07-06 03:21:53'),
(1229, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:21:54', '2011-07-06 03:21:54'),
(1230, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:21:58', '2011-07-06 03:21:58'),
(1231, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:21:58', '2011-07-06 03:21:58'),
(1232, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:21:58', '2011-07-06 03:21:58'),
(1233, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/2', 0, '2011-07-06 03:22:00', '2011-07-06 03:22:00'),
(1234, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:00', '2011-07-06 03:22:00'),
(1235, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:00', '2011-07-06 03:22:00'),
(1236, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/edit/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:22:02', '2011-07-06 03:22:02'),
(1237, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:02', '2011-07-06 03:22:02'),
(1238, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:02', '2011-07-06 03:22:02'),
(1239, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:22:03', '2011-07-06 03:22:03'),
(1240, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:03', '2011-07-06 03:22:03'),
(1241, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:04', '2011-07-06 03:22:04'),
(1242, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:22:33', '2011-07-06 03:22:33'),
(1243, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:34', '2011-07-06 03:22:34'),
(1244, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:34', '2011-07-06 03:22:34'),
(1245, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:22:35', '2011-07-06 03:22:35'),
(1246, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:35', '2011-07-06 03:22:35'),
(1247, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:35', '2011-07-06 03:22:35'),
(1248, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:22:58', '2011-07-06 03:22:58'),
(1249, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:58', '2011-07-06 03:22:58'),
(1250, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:22:59', '2011-07-06 03:22:59'),
(1251, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:23:20', '2011-07-06 03:23:20'),
(1252, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:23:21', '2011-07-06 03:23:21'),
(1253, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:23:21', '2011-07-06 03:23:21');
INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(1254, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:23:45', '2011-07-06 03:23:45'),
(1255, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:23:45', '2011-07-06 03:23:45'),
(1256, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:23:45', '2011-07-06 03:23:45'),
(1257, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:23:46', '2011-07-06 03:23:46'),
(1258, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:23:46', '2011-07-06 03:23:46'),
(1259, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:23:47', '2011-07-06 03:23:47'),
(1260, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:24:32', '2011-07-06 03:24:32'),
(1261, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:24:32', '2011-07-06 03:24:32'),
(1262, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:24:32', '2011-07-06 03:24:32'),
(1263, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:24:59', '2011-07-06 03:24:59'),
(1264, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:24:59', '2011-07-06 03:24:59'),
(1265, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:24:59', '2011-07-06 03:24:59'),
(1266, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:26:38', '2011-07-06 03:26:38'),
(1267, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:26:38', '2011-07-06 03:26:38'),
(1268, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:26:38', '2011-07-06 03:26:38'),
(1269, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:26:56', '2011-07-06 03:26:56'),
(1270, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:26:56', '2011-07-06 03:26:56'),
(1271, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:26:56', '2011-07-06 03:26:56'),
(1272, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:27:24', '2011-07-06 03:27:24'),
(1273, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:27:24', '2011-07-06 03:27:24'),
(1274, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:27:24', '2011-07-06 03:27:24'),
(1275, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:27:45', '2011-07-06 03:27:45'),
(1276, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:27:45', '2011-07-06 03:27:45'),
(1277, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:27:45', '2011-07-06 03:27:45'),
(1278, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:28:34', '2011-07-06 03:28:34'),
(1279, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:28:35', '2011-07-06 03:28:35'),
(1280, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:28:35', '2011-07-06 03:28:35'),
(1281, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:29:07', '2011-07-06 03:29:07'),
(1282, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:29:07', '2011-07-06 03:29:07'),
(1283, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:29:07', '2011-07-06 03:29:07'),
(1284, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:29:57', '2011-07-06 03:29:57'),
(1285, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:29:57', '2011-07-06 03:29:57'),
(1286, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:29:57', '2011-07-06 03:29:57'),
(1287, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:30:38', '2011-07-06 03:30:38'),
(1288, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:30:38', '2011-07-06 03:30:38'),
(1289, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:30:38', '2011-07-06 03:30:38'),
(1290, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:30:51', '2011-07-06 03:30:51'),
(1291, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:30:51', '2011-07-06 03:30:51'),
(1292, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:30:51', '2011-07-06 03:30:51'),
(1293, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:31:10', '2011-07-06 03:31:10'),
(1294, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:31:11', '2011-07-06 03:31:11'),
(1295, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:31:11', '2011-07-06 03:31:11'),
(1296, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:31:29', '2011-07-06 03:31:29'),
(1297, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:31:29', '2011-07-06 03:31:29'),
(1298, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:31:29', '2011-07-06 03:31:29'),
(1299, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:31:56', '2011-07-06 03:31:56'),
(1300, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:31:56', '2011-07-06 03:31:56'),
(1301, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:31:56', '2011-07-06 03:31:56'),
(1302, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:32:24', '2011-07-06 03:32:24'),
(1303, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:32:24', '2011-07-06 03:32:24'),
(1304, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:32:25', '2011-07-06 03:32:25'),
(1305, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:32:33', '2011-07-06 03:32:33'),
(1306, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:32:33', '2011-07-06 03:32:33'),
(1307, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:32:33', '2011-07-06 03:32:33'),
(1308, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:33:36', '2011-07-06 03:33:36'),
(1309, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:33:36', '2011-07-06 03:33:36'),
(1310, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:33:36', '2011-07-06 03:33:36'),
(1311, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:33:56', '2011-07-06 03:33:56'),
(1312, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:33:56', '2011-07-06 03:33:56'),
(1313, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:33:56', '2011-07-06 03:33:56'),
(1314, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:35:03', '2011-07-06 03:35:03'),
(1315, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:35:16', '2011-07-06 03:35:16'),
(1316, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:35:16', '2011-07-06 03:35:16'),
(1317, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:35:16', '2011-07-06 03:35:16'),
(1318, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:37:12', '2011-07-06 03:37:12'),
(1319, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:37:12', '2011-07-06 03:37:12'),
(1320, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:37:12', '2011-07-06 03:37:12'),
(1321, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-06 03:37:40', '2011-07-06 03:37:40'),
(1322, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:37:40', '2011-07-06 03:37:40'),
(1323, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:37:40', '2011-07-06 03:37:40'),
(1324, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 03:37:54', '2011-07-06 03:37:54'),
(1325, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:37:54', '2011-07-06 03:37:54'),
(1326, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/detail/id/2', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-06 03:37:54', '2011-07-06 03:37:54'),
(1327, 0, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/mitraKerja/add', 0, '2011-07-06 10:35:27', '2011-07-06 10:35:27'),
(1328, 0, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/vacancy/detail/id/2', 0, '2011-07-06 10:35:27', '2011-07-06 10:35:27'),
(1329, 0, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login', 0, '2011-07-06 10:35:28', '2011-07-06 10:35:28'),
(1330, 0, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/vacancy/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login', 0, '2011-07-06 10:35:32', '2011-07-06 10:35:32'),
(1331, 0, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-09 21:46:45', '2011-07-09 21:46:45'),
(1332, 0, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login', 0, '2011-07-09 21:46:46', '2011-07-09 21:46:46'),
(1333, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/1310222807', 0, '2011-07-09 21:46:55', '2011-07-09 21:46:55'),
(1334, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/YWRtaW4-', 0, '2011-07-09 21:46:56', '2011-07-09 21:46:56'),
(1335, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/YWRtaW4-', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:46:56', '2011-07-09 21:46:56'),
(1336, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/YWRtaW4-', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/1310222816', 0, '2011-07-09 21:47:51', '2011-07-09 21:47:51'),
(1337, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1310222816', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:47:51', '2011-07-09 21:47:51'),
(1338, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1310222816', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/1310222871', 0, '2011-07-09 21:47:57', '2011-07-09 21:47:57'),
(1339, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1310222816', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/YWRtaW4-', 0, '2011-07-09 21:47:57', '2011-07-09 21:47:57'),
(1340, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/YWRtaW4-', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:47:57', '2011-07-09 21:47:57'),
(1341, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/YWRtaW4-', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/1310222877', 0, '2011-07-09 21:48:16', '2011-07-09 21:48:16'),
(1342, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1310222877', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:48:16', '2011-07-09 21:48:16'),
(1343, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1310222816', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/YWRtaW4-', 0, '2011-07-09 21:48:26', '2011-07-09 21:48:26'),
(1344, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/YWRtaW4-', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:48:26', '2011-07-09 21:48:26'),
(1345, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1310222816', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index2/item/YWRtaW4-/idem/YWRtaW4-', 0, '2011-07-09 21:51:07', '2011-07-09 21:51:07'),
(1346, 0, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/', 0, '2011-07-09 21:51:15', '2011-07-09 21:51:15'),
(1347, 0, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login', 0, '2011-07-09 21:51:15', '2011-07-09 21:51:15'),
(1348, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/1310223075', 0, '2011-07-09 21:51:18', '2011-07-09 21:51:18'),
(1349, 1, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1310223075', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:51:19', '2011-07-09 21:51:19'),
(1350, 1, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1310223075', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-09 21:51:19', '2011-07-09 21:51:19'),
(1351, 1, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-09 21:51:21', '2011-07-09 21:51:21'),
(1352, 1, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php', 0, '2011-07-09 21:51:39', '2011-07-09 21:51:39'),
(1353, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:53:20', '2011-07-09 21:53:20'),
(1354, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:53:38', '2011-07-09 21:53:38'),
(1355, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:55:07', '2011-07-09 21:55:07'),
(1356, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:55:42', '2011-07-09 21:55:42'),
(1357, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:55:43', '2011-07-09 21:55:43'),
(1358, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:56:01', '2011-07-09 21:56:01'),
(1359, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:56:39', '2011-07-09 21:56:39'),
(1360, 1, '0.0.0.0', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:58:22', '2011-07-09 21:58:22'),
(1361, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:58:23', '2011-07-09 21:58:23'),
(1362, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:58:23', '2011-07-09 21:58:23'),
(1363, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:58:41', '2011-07-09 21:58:41'),
(1364, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:58:42', '2011-07-09 21:58:42'),
(1365, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:58:42', '2011-07-09 21:58:42'),
(1366, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:58:47', '2011-07-09 21:58:47'),
(1367, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:58:47', '2011-07-09 21:58:47'),
(1368, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:58:47', '2011-07-09 21:58:47'),
(1369, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:58:55', '2011-07-09 21:58:55'),
(1370, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:58:55', '2011-07-09 21:58:55'),
(1371, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:58:55', '2011-07-09 21:58:55'),
(1372, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:59:12', '2011-07-09 21:59:12'),
(1373, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:59:12', '2011-07-09 21:59:12'),
(1374, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:59:13', '2011-07-09 21:59:13'),
(1375, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 21:59:20', '2011-07-09 21:59:20'),
(1376, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:59:20', '2011-07-09 21:59:20'),
(1377, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 21:59:21', '2011-07-09 21:59:21'),
(1378, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/add', 0, '2011-07-09 21:59:26', '2011-07-09 21:59:26'),
(1379, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/add', 0, '2011-07-09 21:59:53', '2011-07-09 21:59:53'),
(1380, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/add', 0, '2011-07-09 22:00:02', '2011-07-09 22:00:02'),
(1381, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/add', 0, '2011-07-09 22:03:14', '2011-07-09 22:03:14'),
(1382, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/loading.gif', 0, '2011-07-09 22:03:15', '2011-07-09 22:03:15'),
(1383, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:03:15', '2011-07-09 22:03:15'),
(1384, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:03:15', '2011-07-09 22:03:15'),
(1385, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/loading.gif', 0, '2011-07-09 22:03:15', '2011-07-09 22:03:15'),
(1386, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 22:03:29', '2011-07-09 22:03:29'),
(1387, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:03:30', '2011-07-09 22:03:30'),
(1388, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:03:30', '2011-07-09 22:03:30'),
(1389, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 22:05:04', '2011-07-09 22:05:04'),
(1390, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:05:04', '2011-07-09 22:05:04'),
(1391, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:05:04', '2011-07-09 22:05:04'),
(1392, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 22:05:23', '2011-07-09 22:05:23'),
(1393, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:05:23', '2011-07-09 22:05:23'),
(1394, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:05:23', '2011-07-09 22:05:23'),
(1395, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-09 22:05:56', '2011-07-09 22:05:56'),
(1396, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:05:56', '2011-07-09 22:05:56'),
(1397, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:05:57', '2011-07-09 22:05:57'),
(1398, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 0, '2011-07-09 22:05:59', '2011-07-09 22:05:59'),
(1399, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 0, '2011-07-09 22:07:24', '2011-07-09 22:07:24'),
(1400, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:07:24', '2011-07-09 22:07:24'),
(1401, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:07:25', '2011-07-09 22:07:25'),
(1402, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 0, '2011-07-09 22:07:35', '2011-07-09 22:07:35'),
(1403, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:07:35', '2011-07-09 22:07:35'),
(1404, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:07:36', '2011-07-09 22:07:36'),
(1405, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/view', 0, '2011-07-09 22:12:00', '2011-07-09 22:12:00'),
(1406, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/view', 0, '2011-07-09 22:15:41', '2011-07-09 22:15:41'),
(1407, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/view', 0, '2011-07-09 22:16:56', '2011-07-09 22:16:56'),
(1408, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:16:56', '2011-07-09 22:16:56');
INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(1409, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:16:57', '2011-07-09 22:16:57'),
(1410, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/add', 0, '2011-07-09 22:17:47', '2011-07-09 22:17:47'),
(1411, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/add', 0, '2011-07-09 22:18:38', '2011-07-09 22:18:38'),
(1412, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/loading.gif', 0, '2011-07-09 22:18:38', '2011-07-09 22:18:38'),
(1413, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:18:38', '2011-07-09 22:18:38'),
(1414, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:18:38', '2011-07-09 22:18:38'),
(1415, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/loading.gif', 0, '2011-07-09 22:18:39', '2011-07-09 22:18:39'),
(1416, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/view', 0, '2011-07-09 22:18:40', '2011-07-09 22:18:40'),
(1417, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:18:41', '2011-07-09 22:18:41'),
(1418, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:18:41', '2011-07-09 22:18:41'),
(1419, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/edit/id/1', 0, '2011-07-09 22:18:44', '2011-07-09 22:18:44'),
(1420, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/edit/id/1', 0, '2011-07-09 22:21:41', '2011-07-09 22:21:41'),
(1421, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:21:42', '2011-07-09 22:21:42'),
(1422, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:21:42', '2011-07-09 22:21:42'),
(1423, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/view', 0, '2011-07-09 22:21:44', '2011-07-09 22:21:44'),
(1424, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:21:44', '2011-07-09 22:21:44'),
(1425, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:21:44', '2011-07-09 22:21:44'),
(1426, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/add', 0, '2011-07-09 22:21:47', '2011-07-09 22:21:47'),
(1427, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:21:48', '2011-07-09 22:21:48'),
(1428, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/loading.gif', 0, '2011-07-09 22:21:48', '2011-07-09 22:21:48'),
(1429, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:21:48', '2011-07-09 22:21:48'),
(1430, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/loading.gif', 0, '2011-07-09 22:21:48', '2011-07-09 22:21:48'),
(1431, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/add', 0, '2011-07-09 22:22:11', '2011-07-09 22:22:11'),
(1432, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/loading.gif', 0, '2011-07-09 22:22:12', '2011-07-09 22:22:12'),
(1433, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:22:12', '2011-07-09 22:22:12'),
(1434, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:22:12', '2011-07-09 22:22:12'),
(1435, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/loading.gif', 0, '2011-07-09 22:22:12', '2011-07-09 22:22:12'),
(1436, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/add', 0, '2011-07-09 22:23:28', '2011-07-09 22:23:28'),
(1437, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/loading.gif', 0, '2011-07-09 22:23:28', '2011-07-09 22:23:28'),
(1438, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:23:28', '2011-07-09 22:23:28'),
(1439, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:23:28', '2011-07-09 22:23:28'),
(1440, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/kontrakPegawai/loading.gif', 0, '2011-07-09 22:23:29', '2011-07-09 22:23:29'),
(1441, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:25:45', '2011-07-09 22:25:45'),
(1442, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:29', '2011-07-09 22:42:29'),
(1443, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:30', '2011-07-09 22:42:30'),
(1444, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:32', '2011-07-09 22:42:32'),
(1445, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:33', '2011-07-09 22:42:33'),
(1446, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:33', '2011-07-09 22:42:33'),
(1447, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:34', '2011-07-09 22:42:34'),
(1448, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:34', '2011-07-09 22:42:34'),
(1449, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:34', '2011-07-09 22:42:34'),
(1450, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:34', '2011-07-09 22:42:34'),
(1451, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:35', '2011-07-09 22:42:35'),
(1452, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:35', '2011-07-09 22:42:35'),
(1453, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:35', '2011-07-09 22:42:35'),
(1454, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:36', '2011-07-09 22:42:36'),
(1455, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:36', '2011-07-09 22:42:36'),
(1456, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:36', '2011-07-09 22:42:36'),
(1457, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:37', '2011-07-09 22:42:37'),
(1458, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:42:37', '2011-07-09 22:42:37'),
(1459, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:44:36', '2011-07-09 22:44:36'),
(1460, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:44:36', '2011-07-09 22:44:36'),
(1461, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:44:37', '2011-07-09 22:44:37'),
(1462, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/add', 0, '2011-07-09 22:44:39', '2011-07-09 22:44:39'),
(1463, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/add', 0, '2011-07-09 22:45:39', '2011-07-09 22:45:39'),
(1464, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/loading.gif', 0, '2011-07-09 22:45:39', '2011-07-09 22:45:39'),
(1465, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:45:39', '2011-07-09 22:45:39'),
(1466, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:45:39', '2011-07-09 22:45:39'),
(1467, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/loading.gif', 0, '2011-07-09 22:45:39', '2011-07-09 22:45:39'),
(1468, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/add', 0, '2011-07-09 22:45:56', '2011-07-09 22:45:56'),
(1469, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/loading.gif', 0, '2011-07-09 22:45:56', '2011-07-09 22:45:56'),
(1470, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:45:56', '2011-07-09 22:45:56'),
(1471, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:45:56', '2011-07-09 22:45:56'),
(1472, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/loading.gif', 0, '2011-07-09 22:45:56', '2011-07-09 22:45:56'),
(1473, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:45:57', '2011-07-09 22:45:57'),
(1474, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:45:57', '2011-07-09 22:45:57'),
(1475, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:45:57', '2011-07-09 22:45:57'),
(1476, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/edit/id/1', 0, '2011-07-09 22:45:59', '2011-07-09 22:45:59'),
(1477, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/edit/id/1', 0, '2011-07-09 22:47:02', '2011-07-09 22:47:02'),
(1478, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:47:02', '2011-07-09 22:47:02'),
(1479, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:47:03', '2011-07-09 22:47:03'),
(1480, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/view', 0, '2011-07-09 22:47:04', '2011-07-09 22:47:04'),
(1481, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:47:04', '2011-07-09 22:47:04'),
(1482, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:47:04', '2011-07-09 22:47:04'),
(1483, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/view', 0, '2011-07-09 22:48:56', '2011-07-09 22:48:56'),
(1484, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/view', 0, '2011-07-09 22:49:38', '2011-07-09 22:49:38'),
(1485, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:49:38', '2011-07-09 22:49:38'),
(1486, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:49:38', '2011-07-09 22:49:38'),
(1487, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/add', 0, '2011-07-09 22:49:40', '2011-07-09 22:49:40'),
(1488, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/view', 0, '2011-07-09 22:49:58', '2011-07-09 22:49:58'),
(1489, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:49:58', '2011-07-09 22:49:58'),
(1490, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:49:58', '2011-07-09 22:49:58'),
(1491, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/add', 0, '2011-07-09 22:49:59', '2011-07-09 22:49:59'),
(1492, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/add', 0, '2011-07-09 22:50:59', '2011-07-09 22:50:59'),
(1493, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/loading.gif', 0, '2011-07-09 22:50:59', '2011-07-09 22:50:59'),
(1494, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:50:59', '2011-07-09 22:50:59'),
(1495, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:50:59', '2011-07-09 22:50:59'),
(1496, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/loading.gif', 0, '2011-07-09 22:50:59', '2011-07-09 22:50:59'),
(1497, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/view', 0, '2011-07-09 22:51:00', '2011-07-09 22:51:00'),
(1498, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:51:01', '2011-07-09 22:51:01'),
(1499, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:51:01', '2011-07-09 22:51:01'),
(1500, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/edit/id/1', 0, '2011-07-09 22:51:02', '2011-07-09 22:51:02'),
(1501, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/edit/id/1', 0, '2011-07-09 22:51:32', '2011-07-09 22:51:32'),
(1502, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:51:32', '2011-07-09 22:51:32'),
(1503, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:51:32', '2011-07-09 22:51:32'),
(1504, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/view', 0, '2011-07-09 22:51:35', '2011-07-09 22:51:35'),
(1505, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:51:35', '2011-07-09 22:51:35'),
(1506, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:51:35', '2011-07-09 22:51:35'),
(1507, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/edit/id/1', 0, '2011-07-09 22:51:37', '2011-07-09 22:51:37'),
(1508, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:51:37', '2011-07-09 22:51:37'),
(1509, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:51:37', '2011-07-09 22:51:37'),
(1510, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/view', 0, '2011-07-09 22:51:38', '2011-07-09 22:51:38'),
(1511, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:51:38', '2011-07-09 22:51:38'),
(1512, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:51:39', '2011-07-09 22:51:39'),
(1513, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/view', 0, '2011-07-09 22:52:19', '2011-07-09 22:52:19'),
(1514, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:52:19', '2011-07-09 22:52:19'),
(1515, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:52:20', '2011-07-09 22:52:20'),
(1516, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/view', 0, '2011-07-09 22:52:37', '2011-07-09 22:52:37'),
(1517, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:52:37', '2011-07-09 22:52:37'),
(1518, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/hutang/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:52:37', '2011-07-09 22:52:37'),
(1519, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/view', 0, '2011-07-09 22:53:37', '2011-07-09 22:53:37'),
(1520, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/view', 0, '2011-07-09 22:54:18', '2011-07-09 22:54:18'),
(1521, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/view', 0, '2011-07-09 22:54:58', '2011-07-09 22:54:58'),
(1522, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:54:58', '2011-07-09 22:54:58'),
(1523, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:54:58', '2011-07-09 22:54:58'),
(1524, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/view', 0, '2011-07-09 22:55:09', '2011-07-09 22:55:09'),
(1525, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:55:09', '2011-07-09 22:55:09'),
(1526, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:55:10', '2011-07-09 22:55:10'),
(1527, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/view', 0, '2011-07-09 22:55:16', '2011-07-09 22:55:16'),
(1528, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:55:17', '2011-07-09 22:55:17'),
(1529, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 22:55:17', '2011-07-09 22:55:17'),
(1530, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/view', 0, '2011-07-09 23:10:26', '2011-07-09 23:10:26'),
(1531, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:10:26', '2011-07-09 23:10:26'),
(1532, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:10:27', '2011-07-09 23:10:27'),
(1533, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/view', 0, '2011-07-09 23:11:49', '2011-07-09 23:11:49'),
(1534, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:11:49', '2011-07-09 23:11:49'),
(1535, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:11:49', '2011-07-09 23:11:49'),
(1536, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/view', 0, '2011-07-09 23:15:46', '2011-07-09 23:15:46'),
(1537, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:15:46', '2011-07-09 23:15:46'),
(1538, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:15:46', '2011-07-09 23:15:46'),
(1539, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/hutang/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/view', 0, '2011-07-09 23:18:20', '2011-07-09 23:18:20'),
(1540, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:18:20', '2011-07-09 23:18:20'),
(1541, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:18:20', '2011-07-09 23:18:20'),
(1542, 1, '0.0.0.0', '', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/view', 0, '2011-07-09 23:28:25', '2011-07-09 23:28:25'),
(1543, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:28:25', '2011-07-09 23:28:25'),
(1544, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/laporanPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:28:25', '2011-07-09 23:28:25'),
(1545, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/view', 0, '2011-07-09 23:29:25', '2011-07-09 23:29:25'),
(1546, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/view', 0, '2011-07-09 23:29:58', '2011-07-09 23:29:58'),
(1547, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/view', 0, '2011-07-09 23:30:34', '2011-07-09 23:30:34'),
(1548, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:30:34', '2011-07-09 23:30:34'),
(1549, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:30:34', '2011-07-09 23:30:34'),
(1550, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/add', 0, '2011-07-09 23:30:37', '2011-07-09 23:30:37'),
(1551, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:30:37', '2011-07-09 23:30:37'),
(1552, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/loading.gif', 0, '2011-07-09 23:30:38', '2011-07-09 23:30:38'),
(1553, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:30:38', '2011-07-09 23:30:38'),
(1554, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/pengobatan/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/pegawai/pengobatan/loading.gif', 0, '2011-07-09 23:30:38', '2011-07-09 23:30:38'),
(1555, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/view', 0, '2011-07-09 23:31:09', '2011-07-09 23:31:09'),
(1556, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:31:09', '2011-07-09 23:31:09'),
(1557, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:31:09', '2011-07-09 23:31:09'),
(1558, 1, '0.0.0.0', 'http://localhost/mdis/index.php/pegawai/laporanPegawai/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/view', 0, '2011-07-09 23:31:16', '2011-07-09 23:31:16'),
(1559, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:31:16', '2011-07-09 23:31:16'),
(1560, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:31:17', '2011-07-09 23:31:17'),
(1561, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/add', 0, '2011-07-09 23:31:17', '2011-07-09 23:31:17'),
(1562, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/add', 0, '2011-07-09 23:32:16', '2011-07-09 23:32:16'),
(1563, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:32:17', '2011-07-09 23:32:17'),
(1564, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/loading.gif', 0, '2011-07-09 23:32:17', '2011-07-09 23:32:17'),
(1565, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:32:17', '2011-07-09 23:32:17');
INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(1566, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/loading.gif', 0, '2011-07-09 23:32:17', '2011-07-09 23:32:17'),
(1567, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/add', 0, '2011-07-09 23:32:20', '2011-07-09 23:32:20'),
(1568, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/loading.gif', 0, '2011-07-09 23:32:21', '2011-07-09 23:32:21'),
(1569, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:32:21', '2011-07-09 23:32:21'),
(1570, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:32:21', '2011-07-09 23:32:21'),
(1571, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/loading.gif', 0, '2011-07-09 23:32:21', '2011-07-09 23:32:21'),
(1572, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/add', 0, '2011-07-09 23:32:31', '2011-07-09 23:32:31'),
(1573, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:32:32', '2011-07-09 23:32:32'),
(1574, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/loading.gif', 0, '2011-07-09 23:32:32', '2011-07-09 23:32:32'),
(1575, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:32:32', '2011-07-09 23:32:32'),
(1576, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/loading.gif', 0, '2011-07-09 23:32:32', '2011-07-09 23:32:32'),
(1577, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/view', 0, '2011-07-09 23:32:32', '2011-07-09 23:32:32'),
(1578, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:32:33', '2011-07-09 23:32:33'),
(1579, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:32:33', '2011-07-09 23:32:33'),
(1580, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/edit/id/1', 0, '2011-07-09 23:32:34', '2011-07-09 23:32:34'),
(1581, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/edit/id/1', 0, '2011-07-09 23:33:36', '2011-07-09 23:33:36'),
(1582, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:33:37', '2011-07-09 23:33:37'),
(1583, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:33:37', '2011-07-09 23:33:37'),
(1584, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/edit/id/1', 0, '2011-07-09 23:33:41', '2011-07-09 23:33:41'),
(1585, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:33:41', '2011-07-09 23:33:41'),
(1586, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:33:42', '2011-07-09 23:33:42'),
(1587, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/edit/id/1', 0, '2011-07-09 23:33:54', '2011-07-09 23:33:54'),
(1588, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:33:54', '2011-07-09 23:33:54'),
(1589, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:33:55', '2011-07-09 23:33:55'),
(1590, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/view', 0, '2011-07-09 23:33:58', '2011-07-09 23:33:58'),
(1591, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:33:59', '2011-07-09 23:33:59'),
(1592, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:33:59', '2011-07-09 23:33:59'),
(1593, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/view', 0, '2011-07-09 23:35:10', '2011-07-09 23:35:10'),
(1594, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:35:10', '2011-07-09 23:35:10'),
(1595, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:35:11', '2011-07-09 23:35:11'),
(1596, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-09 23:35:17', '2011-07-09 23:35:17'),
(1597, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-09 23:36:03', '2011-07-09 23:36:03'),
(1598, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:36:03', '2011-07-09 23:36:03'),
(1599, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:36:03', '2011-07-09 23:36:03'),
(1600, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/add', 0, '2011-07-09 23:36:10', '2011-07-09 23:36:10'),
(1601, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/add', 0, '2011-07-09 23:36:51', '2011-07-09 23:36:51'),
(1602, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:36:51', '2011-07-09 23:36:51'),
(1603, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/loading.gif', 0, '2011-07-09 23:36:51', '2011-07-09 23:36:51'),
(1604, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:36:52', '2011-07-09 23:36:52'),
(1605, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/loading.gif', 0, '2011-07-09 23:36:52', '2011-07-09 23:36:52'),
(1606, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-09 23:36:53', '2011-07-09 23:36:53'),
(1607, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:36:53', '2011-07-09 23:36:53'),
(1608, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:36:53', '2011-07-09 23:36:53'),
(1609, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/edit/id/1', 0, '2011-07-09 23:36:56', '2011-07-09 23:36:56'),
(1610, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/edit/id/1', 0, '2011-07-09 23:37:26', '2011-07-09 23:37:26'),
(1611, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:37:27', '2011-07-09 23:37:27'),
(1612, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:37:27', '2011-07-09 23:37:27'),
(1613, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/edit/id/1', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-09 23:37:28', '2011-07-09 23:37:28'),
(1614, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:37:29', '2011-07-09 23:37:29'),
(1615, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:37:29', '2011-07-09 23:37:29'),
(1616, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/add', 0, '2011-07-09 23:37:36', '2011-07-09 23:37:36'),
(1617, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:37:36', '2011-07-09 23:37:36'),
(1618, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/loading.gif', 0, '2011-07-09 23:37:36', '2011-07-09 23:37:36'),
(1619, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:37:37', '2011-07-09 23:37:37'),
(1620, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/loading.gif', 0, '2011-07-09 23:37:37', '2011-07-09 23:37:37'),
(1621, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-09 23:37:38', '2011-07-09 23:37:38'),
(1622, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:37:39', '2011-07-09 23:37:39'),
(1623, 1, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-09 23:37:39', '2011-07-09 23:37:39'),
(1624, 0, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-11 10:08:07', '2011-07-11 10:08:07'),
(1625, 0, '0.0.0.0', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.12) Gecko/20101027 Fedora/3.6.12-1.fc13 FireDownload/2.0.1 Firefox/3.6.12', '/mdis/index.php/myuser/login', 0, '2011-07-11 10:08:07', '2011-07-11 10:08:07'),
(1626, 0, '0.0.0.0', '', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.100 Safari/534.30', '/mdis/index.php', 0, '2011-07-14 11:25:33', '2011-07-14 11:25:33'),
(1627, 0, '0.0.0.0', '', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.100 Safari/534.30', '/mdis/index.php/myuser/login', 0, '2011-07-14 11:25:33', '2011-07-14 11:25:33'),
(1628, 0, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.100 Safari/534.30', '/mdis/index.php/myuser/login/index/time/1310617533', 0, '2011-07-14 11:25:37', '2011-07-14 11:25:37'),
(1629, 1, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1310617533', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.100 Safari/534.30', '/mdis/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-14 11:25:38', '2011-07-14 11:25:38'),
(1630, 1, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1310617533', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.100 Safari/534.30', '/mdis/index.php', 0, '2011-07-14 11:25:38', '2011-07-14 11:25:38'),
(1631, 1, '0.0.0.0', 'http://localhost/mdis/index.php/myuser/login/index/time/1310617533', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.30 (KHTML, like Gecko) Chrome/12.0.742.100 Safari/534.30', '/mdis/index.php', 0, '2011-07-14 11:25:40', '2011-07-14 11:25:40'),
(1632, 0, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php', 0, '2011-07-19 19:36:43', '2011-07-19 19:36:43'),
(1633, 0, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/myuser/login', 0, '2011-07-19 19:36:43', '2011-07-19 19:36:43'),
(1634, 0, '127.0.0.1', 'http://localhost/mdis/index.php/myuser/login', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/myuser/login/index/time/1311079003', 0, '2011-07-19 19:37:10', '2011-07-19 19:37:10'),
(1635, 1, '127.0.0.1', 'http://localhost/mdis/index.php/myuser/login/index/time/1311079003', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:37:10', '2011-07-19 19:37:10'),
(1636, 1, '127.0.0.1', 'http://localhost/mdis/index.php/myuser/login/index/time/1311079003', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php', 0, '2011-07-19 19:37:11', '2011-07-19 19:37:11'),
(1637, 1, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php', 0, '2011-07-19 19:37:13', '2011-07-19 19:37:13'),
(1638, 1, '127.0.0.1', 'http://localhost/mdis/index.php', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/view', 0, '2011-07-19 19:37:21', '2011-07-19 19:37:21'),
(1639, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:37:21', '2011-07-19 19:37:21'),
(1640, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-19 19:37:25', '2011-07-19 19:37:25'),
(1641, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:37:25', '2011-07-19 19:37:25'),
(1642, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/view', 0, '2011-07-19 19:37:34', '2011-07-19 19:37:34'),
(1643, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-19 19:37:41', '2011-07-19 19:37:41'),
(1644, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:37:41', '2011-07-19 19:37:41'),
(1645, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-19 19:37:58', '2011-07-19 19:37:58'),
(1646, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:37:58', '2011-07-19 19:37:58'),
(1647, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pelamar/view', 0, '2011-07-19 19:38:05', '2011-07-19 19:38:05'),
(1648, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pelamar/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:38:05', '2011-07-19 19:38:05'),
(1649, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pelamar/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/add', 0, '2011-07-19 19:38:11', '2011-07-19 19:38:11'),
(1650, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/loading.gif', 0, '2011-07-19 19:38:11', '2011-07-19 19:38:11'),
(1651, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:38:11', '2011-07-19 19:38:11'),
(1652, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/loading.gif', 0, '2011-07-19 19:38:11', '2011-07-19 19:38:11'),
(1653, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/view', 0, '2011-07-19 19:38:32', '2011-07-19 19:38:32'),
(1654, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:38:32', '2011-07-19 19:38:32'),
(1655, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/jabatan/view', 0, '2011-07-19 19:38:35', '2011-07-19 19:38:35'),
(1656, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/view', 0, '2011-07-19 19:38:42', '2011-07-19 19:38:42'),
(1657, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:38:43', '2011-07-19 19:38:43'),
(1658, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/unit/view', 0, '2011-07-19 19:38:46', '2011-07-19 19:38:46'),
(1659, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/unit/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/unit/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:38:46', '2011-07-19 19:38:46'),
(1660, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/view', 0, '2011-07-19 19:38:48', '2011-07-19 19:38:48'),
(1661, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:38:49', '2011-07-19 19:38:49'),
(1662, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/ring/view', 0, '2011-07-19 19:38:51', '2011-07-19 19:38:51'),
(1663, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/ring/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/ring/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:38:51', '2011-07-19 19:38:51'),
(1664, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/view', 0, '2011-07-19 19:38:53', '2011-07-19 19:38:53'),
(1665, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:38:53', '2011-07-19 19:38:53'),
(1666, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-19 19:38:55', '2011-07-19 19:38:55'),
(1667, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/view', 0, '2011-07-19 19:38:58', '2011-07-19 19:38:58'),
(1668, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:38:59', '2011-07-19 19:38:59'),
(1669, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-19 19:39:01', '2011-07-19 19:39:01'),
(1670, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:39:01', '2011-07-19 19:39:01'),
(1671, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/jenisCuti/view', 0, '2011-07-19 19:39:10', '2011-07-19 19:39:10'),
(1672, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/jenisCuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:39:11', '2011-07-19 19:39:11'),
(1673, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-19 19:39:22', '2011-07-19 19:39:22'),
(1674, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:39:22', '2011-07-19 19:39:22'),
(1675, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-19 19:39:30', '2011-07-19 19:39:30'),
(1676, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:39:30', '2011-07-19 19:39:30'),
(1677, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-19 19:39:45', '2011-07-19 19:39:45'),
(1678, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 19:39:45', '2011-07-19 19:39:45'),
(1679, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/add', 0, '2011-07-19 20:00:22', '2011-07-19 20:00:22'),
(1680, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/loading.gif', 0, '2011-07-19 20:00:22', '2011-07-19 20:00:22'),
(1681, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:00:22', '2011-07-19 20:00:22'),
(1682, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/loading.gif', 0, '2011-07-19 20:00:22', '2011-07-19 20:00:22'),
(1683, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/jenisCuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-19 20:00:28', '2011-07-19 20:00:28'),
(1684, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:00:29', '2011-07-19 20:00:29'),
(1685, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/view', 0, '2011-07-19 20:00:31', '2011-07-19 20:00:31'),
(1686, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:00:32', '2011-07-19 20:00:32'),
(1687, 0, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/view', 0, '2011-07-19 20:27:50', '2011-07-19 20:27:50'),
(1688, 0, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/myuser/login', 0, '2011-07-19 20:27:50', '2011-07-19 20:27:50'),
(1689, 0, '127.0.0.1', 'http://localhost/mdis/index.php/myuser/login', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/myuser/login/index/time/1311082070', 0, '2011-07-19 20:27:54', '2011-07-19 20:27:54'),
(1690, 1, '127.0.0.1', 'http://localhost/mdis/index.php/myuser/login/index/time/1311082070', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:27:54', '2011-07-19 20:27:54'),
(1691, 1, '127.0.0.1', 'http://localhost/mdis/index.php/myuser/login/index/time/1311082070', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php', 0, '2011-07-19 20:27:54', '2011-07-19 20:27:54'),
(1692, 1, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/view', 0, '2011-07-19 20:27:56', '2011-07-19 20:27:56'),
(1693, 1, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/view', 0, '2011-07-19 20:28:34', '2011-07-19 20:28:34'),
(1694, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:28:34', '2011-07-19 20:28:34'),
(1695, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/add', 0, '2011-07-19 20:28:38', '2011-07-19 20:28:38'),
(1696, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/loading.gif', 0, '2011-07-19 20:28:38', '2011-07-19 20:28:38'),
(1697, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:28:38', '2011-07-19 20:28:38'),
(1698, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/loading.gif', 0, '2011-07-19 20:28:38', '2011-07-19 20:28:38'),
(1699, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-19 20:36:16', '2011-07-19 20:36:16'),
(1700, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/add', 0, '2011-07-19 20:36:18', '2011-07-19 20:36:18'),
(1701, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:36:18', '2011-07-19 20:36:18'),
(1702, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/loading.gif', 0, '2011-07-19 20:36:18', '2011-07-19 20:36:18'),
(1703, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/view', 0, '2011-07-19 20:36:20', '2011-07-19 20:36:20'),
(1704, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:36:20', '2011-07-19 20:36:20'),
(1705, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/add', 0, '2011-07-19 20:36:23', '2011-07-19 20:36:23'),
(1706, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/loading.gif', 0, '2011-07-19 20:36:23', '2011-07-19 20:36:23'),
(1707, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:36:23', '2011-07-19 20:36:23'),
(1708, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/loading.gif', 0, '2011-07-19 20:36:23', '2011-07-19 20:36:23'),
(1709, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/view', 0, '2011-07-19 20:36:28', '2011-07-19 20:36:28'),
(1710, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:36:28', '2011-07-19 20:36:28'),
(1711, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master', 0, '2011-07-19 20:36:31', '2011-07-19 20:36:31'),
(1712, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/view', 0, '2011-07-19 20:36:31', '2011-07-19 20:36:31'),
(1713, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:36:31', '2011-07-19 20:36:31'),
(1714, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/vacancy/view', 0, '2011-07-19 20:37:51', '2011-07-19 20:37:51'),
(1715, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/view', 0, '2011-07-19 20:37:53', '2011-07-19 20:37:53'),
(1716, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/master/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:37:53', '2011-07-19 20:37:53'),
(1717, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/master/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/mitraKerja/view', 0, '2011-07-19 20:37:57', '2011-07-19 20:37:57'),
(1718, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:37:57', '2011-07-19 20:37:57'),
(1719, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/mitraKerja/add', 0, '2011-07-19 20:38:05', '2011-07-19 20:38:05'),
(1720, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/mitraKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:38:05', '2011-07-19 20:38:05'),
(1721, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/mitraKerja/loading.gif', 0, '2011-07-19 20:38:05', '2011-07-19 20:38:05'),
(1722, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/kontrakPegawai/view', 0, '2011-07-19 20:40:37', '2011-07-19 20:40:37'),
(1723, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:40:37', '2011-07-19 20:40:37'),
(1724, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/kontrakPegawai/add', 0, '2011-07-19 20:40:39', '2011-07-19 20:40:39'),
(1725, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:40:39', '2011-07-19 20:40:39'),
(1726, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/kontrakPegawai/loading.gif', 0, '2011-07-19 20:40:39', '2011-07-19 20:40:39'),
(1727, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/mitraKerja/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/kontrakPegawai/view', 0, '2011-07-19 20:40:42', '2011-07-19 20:40:42'),
(1728, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/kontrakPegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:40:42', '2011-07-19 20:40:42'),
(1729, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/kontrakPegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-19 20:41:46', '2011-07-19 20:41:46'),
(1730, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:41:46', '2011-07-19 20:41:46'),
(1731, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/view', 0, '2011-07-19 20:42:31', '2011-07-19 20:42:31'),
(1732, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pegawai/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:42:31', '2011-07-19 20:42:31'),
(1733, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pegawai/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pengalamanKerja/view', 0, '2011-07-19 20:43:23', '2011-07-19 20:43:23'),
(1734, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pengalamanKerja/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:43:24', '2011-07-19 20:43:24'),
(1735, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 0, '2011-07-19 20:44:02', '2011-07-19 20:44:02'),
(1736, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:44:02', '2011-07-19 20:44:02'),
(1737, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 0, '2011-07-19 20:50:31', '2011-07-19 20:50:31'),
(1738, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 20:50:31', '2011-07-19 20:50:31'),
(1739, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 0, '2011-07-19 21:23:20', '2011-07-19 21:23:20'),
(1740, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/pegawai/pengalamanKerja/edit/id/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 21:23:20', '2011-07-19 21:23:20'),
(1741, 1, '127.0.0.1', 'http://localhost/mdis/index.php/pegawai/pengalamanKerja/edit/id/1', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-19 21:25:33', '2011-07-19 21:25:33'),
(1742, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 21:25:33', '2011-07-19 21:25:33'),
(1743, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/add', 0, '2011-07-19 21:25:45', '2011-07-19 21:25:45'),
(1744, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/loading.gif', 0, '2011-07-19 21:25:45', '2011-07-19 21:25:45'),
(1745, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 21:25:45', '2011-07-19 21:25:45'),
(1746, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/loading.gif', 0, '2011-07-19 21:25:45', '2011-07-19 21:25:45'),
(1747, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-19 21:26:25', '2011-07-19 21:26:25'),
(1748, 1, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-19 21:26:25', '2011-07-19 21:26:25'),
(1749, 0, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/absensi/cuti/view', 0, '2011-07-20 00:07:40', '2011-07-20 00:07:40');
INSERT INTO `Counter` (`counterId`, `userId`, `counterIp`, `counterReferrer`, `counterUserAgent`, `counterUrl`, `counterStatus`, `counterCreateTime`, `counterModifiedTime`) VALUES
(1750, 0, '127.0.0.1', 'http://localhost/mdis/index.php/absensi/cuti/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis/index.php/myuser/login', 0, '2011-07-20 00:07:41', '2011-07-20 00:07:41'),
(1751, 0, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php', 0, '2011-07-21 23:40:14', '2011-07-21 23:40:14'),
(1752, 0, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/myuser/login', 0, '2011-07-21 23:40:14', '2011-07-21 23:40:14'),
(1753, 0, '127.0.0.1', 'http://localhost/mdis2/index.php/myuser/login', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/myuser/login/index/time/1311266414', 0, '2011-07-21 23:40:19', '2011-07-21 23:40:19'),
(1754, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/myuser/login/index/time/1311266414', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-21 23:40:19', '2011-07-21 23:40:19'),
(1755, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/myuser/login/index/time/1311266414', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php', 0, '2011-07-21 23:40:19', '2011-07-21 23:40:19'),
(1756, 1, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php', 0, '2011-07-21 23:40:21', '2011-07-21 23:40:21'),
(1757, 0, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php', 0, '2011-07-23 11:24:04', '2011-07-23 11:24:04'),
(1758, 0, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/myuser/login', 0, '2011-07-23 11:24:05', '2011-07-23 11:24:05'),
(1759, 0, '127.0.0.1', 'http://localhost/mdis2/index.php/myuser/login', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/myuser/login/index/time/1311395045', 0, '2011-07-23 11:24:09', '2011-07-23 11:24:09'),
(1760, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/myuser/login/index/time/1311395045', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-23 11:24:10', '2011-07-23 11:24:10'),
(1761, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/myuser/login/index/time/1311395045', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php', 0, '2011-07-23 11:24:10', '2011-07-23 11:24:10'),
(1762, 1, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php', 0, '2011-07-23 11:24:12', '2011-07-23 11:24:12'),
(1763, 1, '127.0.0.1', 'http://localhost/mdis2/index.php', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/view', 0, '2011-07-23 11:25:06', '2011-07-23 11:25:06'),
(1764, 1, '127.0.0.1', 'http://localhost/mdis2/index.php', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/view', 0, '2011-07-23 11:26:25', '2011-07-23 11:26:25'),
(1765, 1, '127.0.0.1', 'http://localhost/mdis2/index.php', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/view', 0, '2011-07-23 11:29:32', '2011-07-23 11:29:32'),
(1766, 1, '127.0.0.1', 'http://localhost/mdis2/index.php', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/view', 0, '2011-07-23 11:33:59', '2011-07-23 11:33:59'),
(1767, 0, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php', 0, '2011-07-23 11:46:10', '2011-07-23 11:46:10'),
(1768, 0, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/myuser/login', 0, '2011-07-23 11:46:10', '2011-07-23 11:46:10'),
(1769, 0, '127.0.0.1', 'http://localhost/mdis2/index.php/myuser/login', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/myuser/login/index/time/1311396370', 0, '2011-07-23 11:46:13', '2011-07-23 11:46:13'),
(1770, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/myuser/login/index/time/1311396370', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/myuser/login/index/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-23 11:46:13', '2011-07-23 11:46:13'),
(1771, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/myuser/login/index/time/1311396370', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php', 0, '2011-07-23 11:46:14', '2011-07-23 11:46:14'),
(1772, 1, '127.0.0.1', '', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php', 0, '2011-07-23 11:46:16', '2011-07-23 11:46:16'),
(1773, 1, '127.0.0.1', 'http://localhost/mdis2/index.php', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/view', 0, '2011-07-23 11:46:25', '2011-07-23 11:46:25'),
(1774, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-23 11:46:25', '2011-07-23 11:46:25'),
(1775, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/add', 0, '2011-07-23 11:46:31', '2011-07-23 11:46:31'),
(1776, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/loading.gif', 0, '2011-07-23 11:46:31', '2011-07-23 11:46:31'),
(1777, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-23 11:46:31', '2011-07-23 11:46:31'),
(1778, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/loading.gif', 0, '2011-07-23 11:46:31', '2011-07-23 11:46:31'),
(1779, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/add', 0, '2011-07-23 11:50:17', '2011-07-23 11:50:17'),
(1780, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-23 11:50:17', '2011-07-23 11:50:17'),
(1781, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/loading.gif', 0, '2011-07-23 11:50:17', '2011-07-23 11:50:17'),
(1782, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/add', 0, '2011-07-23 11:53:48', '2011-07-23 11:53:48'),
(1783, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/loading.gif', 0, '2011-07-23 11:53:48', '2011-07-23 11:53:48'),
(1784, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-23 11:53:48', '2011-07-23 11:53:48'),
(1785, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/loading.gif', 0, '2011-07-23 11:53:48', '2011-07-23 11:53:48'),
(1786, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/add', 0, '2011-07-23 11:55:06', '2011-07-23 11:55:06'),
(1787, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/loading.gif', 0, '2011-07-23 11:55:06', '2011-07-23 11:55:06'),
(1788, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-23 11:55:06', '2011-07-23 11:55:06'),
(1789, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/loading.gif', 0, '2011-07-23 11:55:06', '2011-07-23 11:55:06'),
(1790, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/add', 0, '2011-07-23 11:55:38', '2011-07-23 11:55:38'),
(1791, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/loading.gif', 0, '2011-07-23 11:55:38', '2011-07-23 11:55:38'),
(1792, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-23 11:55:38', '2011-07-23 11:55:38'),
(1793, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/loading.gif', 0, '2011-07-23 11:55:38', '2011-07-23 11:55:38'),
(1794, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/view', 0, '2011-07-23 11:55:46', '2011-07-23 11:55:46'),
(1795, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-23 11:55:46', '2011-07-23 11:55:46'),
(1796, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/view', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/add', 0, '2011-07-23 11:55:48', '2011-07-23 11:55:48'),
(1797, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-23 11:55:48', '2011-07-23 11:55:48'),
(1798, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/loading.gif', 0, '2011-07-23 11:55:48', '2011-07-23 11:55:48'),
(1799, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/add/time/1311396948', 0, '2011-07-23 11:56:01', '2011-07-23 11:56:01'),
(1800, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add/time/1311396948', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/add/time/loading.gif', 0, '2011-07-23 11:56:01', '2011-07-23 11:56:01'),
(1801, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add/time/1311396948', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/add/time/js/libs/jquery/plugin/jquery.accordion.js', 0, '2011-07-23 11:56:01', '2011-07-23 11:56:01'),
(1802, 1, '127.0.0.1', 'http://localhost/mdis2/index.php/absensi/masterAbsen/add/time/1311396948', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/20100101 Firefox/5.0', '/mdis2/index.php/absensi/masterAbsen/add/time/loading.gif', 0, '2011-07-23 11:56:02', '2011-07-23 11:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `Group`
--

CREATE TABLE IF NOT EXISTS `Group` (
  `groupId` int(10) NOT NULL AUTO_INCREMENT,
  `groupName` varchar(50) NOT NULL,
  `groupDesc` text NOT NULL,
  `groupCreateTime` datetime NOT NULL,
  `groupModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`groupId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Group`
--


-- --------------------------------------------------------

--
-- Table structure for table `GroupAccess`
--

CREATE TABLE IF NOT EXISTS `GroupAccess` (
  `groupId` int(10) NOT NULL,
  `accessId` int(10) NOT NULL,
  PRIMARY KEY (`groupId`,`accessId`),
  KEY `FKGroupAcces332313` (`groupId`),
  KEY `FKGroupAcces798740` (`accessId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `GroupAccess`
--


-- --------------------------------------------------------

--
-- Table structure for table `Logs`
--

CREATE TABLE IF NOT EXISTS `Logs` (
  `logsId` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL,
  `logsCreateTime` datetime NOT NULL,
  `logsModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`logsId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `Logs`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE IF NOT EXISTS `tbl_absensi` (
  `id_absensi` int(11) NOT NULL AUTO_INCREMENT,
  `jam_masuk` char(50) NOT NULL,
  `jam_keluar` char(50) NOT NULL,
  `absen` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `tgl_absensi` char(50) NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_absensi`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_absensi`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_access`
--

CREATE TABLE IF NOT EXISTS `tbl_access` (
  `accessId` int(10) NOT NULL AUTO_INCREMENT,
  `accessPid` int(10) NOT NULL,
  `accessCode` varchar(50) NOT NULL,
  `accessName` varchar(255) NOT NULL,
  `accessDesc` text NOT NULL,
  PRIMARY KEY (`accessId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_access`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_anak`
--

CREATE TABLE IF NOT EXISTS `tbl_anak` (
  `nama_anak` char(50) NOT NULL,
  `tempat_lahir_anak` char(30) NOT NULL,
  `tanggal_lahir_anak` date NOT NULL,
  `jenis_kelamin_anak` enum('laki-laki','perempuan') NOT NULL,
  `urutan_anak` int(2) NOT NULL,
  `id_anak` char(25) NOT NULL,
  `nip` char(20) NOT NULL,
  `tanggal_wafat` date DEFAULT NULL,
  `pendidikan_anak` char(30) NOT NULL,
  `pekerjaan_anak` char(30) DEFAULT NULL,
  PRIMARY KEY (`id_anak`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anak`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_bahasa`
--

CREATE TABLE IF NOT EXISTS `tbl_bahasa` (
  `id_asing` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `tipe_bahasa` char(6) DEFAULT NULL,
  `nama_bahasa` char(50) NOT NULL,
  `keterangan` enum('aktif','pasif') DEFAULT NULL,
  PRIMARY KEY (`id_asing`),
  KEY `nip` (`id_karyawan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bahasa`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_bahasa_daerah`
--

CREATE TABLE IF NOT EXISTS `tbl_bahasa_daerah` (
  `id_daerah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bahasa` char(50) NOT NULL,
  `keterangan` enum('aktif','pasif') NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_daerah`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_bahasa_daerah`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuti`
--

CREATE TABLE IF NOT EXISTS `tbl_cuti` (
  `id_cuti` int(11) NOT NULL AUTO_INCREMENT,
  `nip` char(20) NOT NULL,
  `jml_cuti` int(11) NOT NULL,
  `tanggal_cuti` date DEFAULT NULL,
  PRIMARY KEY (`id_cuti`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_cuti`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE IF NOT EXISTS `tbl_group` (
  `groupId` int(10) NOT NULL AUTO_INCREMENT,
  `groupName` varchar(50) NOT NULL,
  `groupDesc` text NOT NULL,
  `groupCreateTime` datetime NOT NULL,
  `groupModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`groupId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_group`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_group_access`
--

CREATE TABLE IF NOT EXISTS `tbl_group_access` (
  `groupId` int(10) NOT NULL,
  `accessId` int(10) NOT NULL,
  PRIMARY KEY (`groupId`,`accessId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_group_access`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_hobi`
--

CREATE TABLE IF NOT EXISTS `tbl_hobi` (
  `id_hobi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hobi` char(100) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_hobi`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_hobi`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan`
--

CREATE TABLE IF NOT EXISTS `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` char(100) NOT NULL,
  `tipe_jabatan` char(10) DEFAULT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`, `tipe_jabatan`) VALUES
(1, 'Surveyor', 'public'),
(2, 'Kolektor', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jaminan`
--

CREATE TABLE IF NOT EXISTS `tbl_jaminan` (
  `id_jaminan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_jaminan` char(20) NOT NULL,
  `no_surat_jaminan` char(50) NOT NULL,
  `keterangan` text,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_jaminan`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_jaminan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_jamsostek`
--

CREATE TABLE IF NOT EXISTS `tbl_jamsostek` (
  `no_jamsostek` char(100) NOT NULL,
  `nip` char(20) NOT NULL,
  `jml_jamsostek` int(11) NOT NULL,
  `tanggal` char(20) NOT NULL,
  PRIMARY KEY (`no_jamsostek`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jamsostek`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_cuti`
--

CREATE TABLE IF NOT EXISTS `tbl_jenis_cuti` (
  `id_jenis_cuti` int(11) NOT NULL AUTO_INCREMENT,
  `nama_cuti` char(100) NOT NULL,
  `jangka_waktu` char(50) NOT NULL,
  PRIMARY KEY (`id_jenis_cuti`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_jenis_cuti`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_kandidat`
--

CREATE TABLE IF NOT EXISTS `tbl_kandidat` (
  `id_kandidat` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelamar` int(11) DEFAULT NULL,
  `id_lowongan` int(11) DEFAULT NULL,
  `tgl_kandidat` date DEFAULT NULL,
  `nilai_kandidat` char(20) NOT NULL,
  `desc_kandidat` text NOT NULL,
  PRIMARY KEY (`id_kandidat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_kandidat`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_kandidatNilai`
--

CREATE TABLE IF NOT EXISTS `tbl_kandidatNilai` (
  `id_kandidatNilai` int(11) NOT NULL,
  `id_kandidat` int(11) DEFAULT NULL,
  `value_kandidatNilai` char(10) DEFAULT NULL,
  `desc_kandidatNilai` text,
  PRIMARY KEY (`id_kandidatNilai`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kandidatNilai`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE IF NOT EXISTS `tbl_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `id_pelamar` int(11) DEFAULT NULL,
  `id_mitra` int(11) NOT NULL DEFAULT '0',
  `id_jabatan` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `namaLengkap_karyawan` char(50) NOT NULL,
  `namaPanggil_karyawan` char(15) DEFAULT NULL,
  `tempatLahir_karyawan` char(30) NOT NULL,
  `tanggalLahir_karyawan` char(20) NOT NULL,
  `gender_karyawan` char(2) NOT NULL,
  `agama_karyawan` char(15) NOT NULL,
  `wargaNegara_karyawan` char(100) NOT NULL,
  `statusPribadi_karyawan` char(15) NOT NULL,
  `sukuBangsa_karyawan` char(100) NOT NULL,
  `pendidikan_karyawan` char(20) NOT NULL,
  `active_karyawan` char(10) DEFAULT NULL,
  `berat_karyawan` int(11) NOT NULL,
  `tinggi_karyawan` int(11) NOT NULL,
  `status_karyawan` char(10) DEFAULT NULL,
  `noNpwp_karyawan` char(20) NOT NULL,
  `noTelepon_karyawan` char(15) NOT NULL,
  `noHp_karyawan` char(15) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`),
  KEY `id_unit` (`id_unit`),
  KEY `id_jabatan` (`id_jabatan`),
  KEY `id_mitra` (`id_mitra`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_karyawan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluarga`
--

CREATE TABLE IF NOT EXISTS `tbl_keluarga` (
  `id_keluarga` int(11) NOT NULL AUTO_INCREMENT,
  `nama_keluarga` char(50) NOT NULL,
  `jenis_kelamin_keluarga` enum('laki-laki','perempuan') NOT NULL,
  `tempat_lahir_keluarga` char(30) NOT NULL,
  `tanggal_lahir_keluarga` date NOT NULL,
  `tanggal_wafat` date DEFAULT NULL,
  `pendidikan_keluarga` char(30) NOT NULL,
  `pekerjaan_keluarga` char(30) NOT NULL,
  `keterangan` char(50) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_keluarga`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_keluarga`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_kerja`
--

CREATE TABLE IF NOT EXISTS `tbl_kerja` (
  `id_kerja` int(11) NOT NULL AUTO_INCREMENT,
  `status_resign` enum('active','resign') DEFAULT NULL,
  `keterangan` text,
  `tanggal_resign` date DEFAULT NULL,
  `waktu_kontrak` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_kerja`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_kerja`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_keterangan_lamar`
--

CREATE TABLE IF NOT EXISTS `tbl_keterangan_lamar` (
  `id_keterangan` int(11) NOT NULL AUTO_INCREMENT,
  `nip` char(20) NOT NULL,
  `lingkungan_kerja` char(200) NOT NULL,
  `minat_kerja` char(200) NOT NULL,
  `posisi_capai` char(200) NOT NULL,
  `gaji_diinginkan` int(11) NOT NULL,
  `tunjangan` char(200) NOT NULL,
  `pengalaman_pimpin` char(200) DEFAULT NULL,
  PRIMARY KEY (`id_keterangan`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_keterangan_lamar`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontrakPegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_kontrakPegawai` (
  `id_kontrakPegawai` int(11) NOT NULL AUTO_INCREMENT,
  `desc_kontrakPegawai` text NOT NULL,
  `tanggal_kontrakPegawai` date NOT NULL,
  PRIMARY KEY (`id_kontrakPegawai`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_kontrakPegawai`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_ktp`
--

CREATE TABLE IF NOT EXISTS `tbl_ktp` (
  `id_ktp` int(11) NOT NULL,
  `id_karyawan` int(11) DEFAULT NULL,
  `no_ktp` char(30) DEFAULT NULL,
  `jalan_ktp` char(40) DEFAULT NULL,
  `kelurahan_ktp` char(20) DEFAULT NULL,
  `kecamatan_ktp` char(20) DEFAULT NULL,
  `kota_ktp` char(20) DEFAULT NULL,
  `tglAwal_ktp` date DEFAULT NULL,
  `tglAkhir_ktp` date DEFAULT NULL,
  PRIMARY KEY (`id_ktp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ktp`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_kursus`
--

CREATE TABLE IF NOT EXISTS `tbl_kursus` (
  `id_kursus` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_kursus` char(50) NOT NULL,
  `penyelenggara` char(100) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `dibiayai_oleh` char(100) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_kursus`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_kursus`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_lowongan`
--

CREATE TABLE IF NOT EXISTS `tbl_lowongan` (
  `id_lowongan` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatan` int(11) DEFAULT NULL,
  `desc_lowongan` text,
  `tglAwal_lowongan` date DEFAULT NULL,
  `tglAkhir_lowongan` date DEFAULT NULL,
  PRIMARY KEY (`id_lowongan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_lowongan`
--

INSERT INTO `tbl_lowongan` (`id_lowongan`, `id_jabatan`, `desc_lowongan`, `tglAwal_lowongan`, `tglAkhir_lowongan`) VALUES
(2, 2, 'trampil', '2011-06-02', '2011-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_gaji`
--

CREATE TABLE IF NOT EXISTS `tbl_master_gaji` (
  `id_gaji` int(11) NOT NULL AUTO_INCREMENT,
  `gaji_pokok` int(11) NOT NULL,
  `tunjangan_psm` int(11) NOT NULL,
  `id_rekening` int(11) NOT NULL,
  `no_rekening` char(100) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_gaji`),
  KEY `id_rekening` (`id_rekening`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_master_gaji`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_mertua`
--

CREATE TABLE IF NOT EXISTS `tbl_mertua` (
  `nama_mertua` char(50) NOT NULL,
  `tempat_lahir_mertua` char(30) NOT NULL,
  `tanggal_lahir_mertua` date NOT NULL,
  `jenis_kelamin_mertua` enum('laki-laki','perempuan') NOT NULL,
  `keterangan` enum('ibu mertua','ayah mertua') NOT NULL,
  `id_mertua` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_wafat` date DEFAULT NULL,
  `pendidikan_mertua` char(30) DEFAULT NULL,
  `pekerjaan_mertua` char(30) DEFAULT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_mertua`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_mertua`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_mitrakerja`
--

CREATE TABLE IF NOT EXISTS `tbl_mitrakerja` (
  `id_mitra` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mitra` char(100) NOT NULL,
  `alamat_mitra` char(200) NOT NULL,
  PRIMARY KEY (`id_mitra`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_mitrakerja`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderRing`
--

CREATE TABLE IF NOT EXISTS `tbl_orderRing` (
  `id_order_ring` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` char(20) NOT NULL,
  `id_ring` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_order_ring`),
  KEY `id_ring` (`id_ring`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_orderRing`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_organisasi`
--

CREATE TABLE IF NOT EXISTS `tbl_organisasi` (
  `id_organisasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_oranisasi` char(100) NOT NULL,
  `jenis_organisasi` char(100) NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `jabatan_organisasi` char(50) DEFAULT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_organisasi`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_organisasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasangan`
--

CREATE TABLE IF NOT EXISTS `tbl_pasangan` (
  `nama_pasangan` char(50) NOT NULL,
  `tempat_lahir_pasangan` char(30) NOT NULL,
  `tanggal_lahir_pasangan` date NOT NULL,
  `jenis_kelamin_pasangan` enum('laki-laki','perempuan') NOT NULL,
  `id_pasangan` char(25) NOT NULL,
  `nip` char(20) NOT NULL,
  `tanggal_menikah` date NOT NULL,
  PRIMARY KEY (`id_pasangan`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasangan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelamar`
--

CREATE TABLE IF NOT EXISTS `tbl_pelamar` (
  `id_pelamar` int(11) NOT NULL AUTO_INCREMENT,
  `id_jabatan` int(11) DEFAULT NULL,
  `nama_pelamar` char(50) DEFAULT NULL,
  `noKtp_pelamar` varchar(255) NOT NULL,
  `tempatLahir_pelamar` varchar(255) NOT NULL,
  `tanggalLahir_pelamar` date NOT NULL,
  `gender_pelamar` char(2) DEFAULT NULL,
  `agama_pelamar` char(15) NOT NULL,
  `tanggal_pelamar` date DEFAULT NULL,
  `skill_pelamar` varchar(255) DEFAULT NULL,
  `pendidikan_pelamar` char(25) DEFAULT NULL,
  `alamat_pelamar` text,
  `noTelepon_pelamar` char(15) DEFAULT NULL,
  `noHP_pelamar` char(15) DEFAULT NULL,
  `gajiTerakhir_pelamar` int(20) DEFAULT NULL,
  `gajiTawaran_pelamar` int(20) DEFAULT NULL,
  `statusPribadi_pelamar` char(15) DEFAULT NULL,
  `status_pelamar` enum('accept','pending','rejected') NOT NULL,
  `kelurahan_pelamar` char(20) DEFAULT NULL,
  `kecamatan_pelamar` char(20) DEFAULT NULL,
  `kota_pelamar` char(20) DEFAULT NULL,
  PRIMARY KEY (`id_pelamar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_pelamar`
--

INSERT INTO `tbl_pelamar` (`id_pelamar`, `id_jabatan`, `nama_pelamar`, `noKtp_pelamar`, `tempatLahir_pelamar`, `tanggalLahir_pelamar`, `gender_pelamar`, `agama_pelamar`, `tanggal_pelamar`, `skill_pelamar`, `pendidikan_pelamar`, `alamat_pelamar`, `noTelepon_pelamar`, `noHP_pelamar`, `gajiTerakhir_pelamar`, `gajiTawaran_pelamar`, `statusPribadi_pelamar`, `status_pelamar`, `kelurahan_pelamar`, `kecamatan_pelamar`, `kota_pelamar`) VALUES
(1, 1, 'Febru Ariyanto', '12352342342323', 'jakarta', '1986-02-11', 'L', 'islam', '2011-07-06', 'programer', 'S1', 'Jl. Merbabu', '12321', '321321', 7000000, 1000000, 'single', 'pending', 'Cipadu', 'Ciledug', 'Tangerang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendidikan`
--

CREATE TABLE IF NOT EXISTS `tbl_pendidikan` (
  `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pendidikan` char(30) NOT NULL,
  `nama_sekolah` char(50) NOT NULL,
  `tempat_sekolah` char(100) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `tahun_keluar` year(4) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_pendidikan`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_pendidikan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengalaman_kerja`
--

CREATE TABLE IF NOT EXISTS `tbl_pengalaman_kerja` (
  `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` char(100) NOT NULL,
  `jabatan` char(100) NOT NULL,
  `tahun_masuk` year(4) NOT NULL,
  `tahun_keluar` year(4) NOT NULL,
  `tunjangan` int(11) DEFAULT NULL,
  `alasan_berhenti` char(200) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_pengalaman`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_pengalaman_kerja`
--

INSERT INTO `tbl_pengalaman_kerja` (`id_pengalaman`, `nama_perusahaan`, `jabatan`, `tahun_masuk`, `tahun_keluar`, `tunjangan`, `alasan_berhenti`, `nip`) VALUES
(1, 'PT. Batu Bara', 'Programer', 1995, 2009, 2000000, 'PHK', '98999');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penggajian`
--

CREATE TABLE IF NOT EXISTS `tbl_penggajian` (
  `id_penggajian` int(11) NOT NULL AUTO_INCREMENT,
  `nip` char(20) NOT NULL,
  `tanggal_gaji` date NOT NULL,
  `id_cuti` int(11) DEFAULT NULL,
  `gaji_diterima` int(11) NOT NULL,
  `bayar_jamsostek` int(11) NOT NULL,
  `bayar_pph21` int(11) NOT NULL,
  PRIMARY KEY (`id_penggajian`),
  KEY `id_cuti` (`id_cuti`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_penggajian`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_pkwt`
--

CREATE TABLE IF NOT EXISTS `tbl_pkwt` (
  `id_pkwt` int(11) NOT NULL AUTO_INCREMENT,
  `nip` char(20) NOT NULL,
  `tanggal_pkwt` date NOT NULL,
  `keterangan` char(100) NOT NULL,
  PRIMARY KEY (`id_pkwt`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_pkwt`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_psikologis`
--

CREATE TABLE IF NOT EXISTS `tbl_psikologis` (
  `id_psikologis` int(11) NOT NULL AUTO_INCREMENT,
  `nip` char(20) NOT NULL,
  `tahun_psikologis` year(4) NOT NULL,
  `jangka_waktu` char(20) NOT NULL,
  `lokasi` char(100) NOT NULL,
  `keterangan_psikologis` char(100) NOT NULL,
  `jenis_psikologis` enum('sakit','psikologis') DEFAULT NULL,
  PRIMARY KEY (`id_psikologis`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_psikologis`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekening`
--

CREATE TABLE IF NOT EXISTS `tbl_rekening` (
  `id_rekening` int(11) NOT NULL AUTO_INCREMENT,
  `nip` char(20) NOT NULL,
  `nama_bank` char(100) NOT NULL,
  `cabang_bank` char(100) NOT NULL,
  PRIMARY KEY (`id_rekening`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_rekening`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekomendasi`
--

CREATE TABLE IF NOT EXISTS `tbl_rekomendasi` (
  `id_rekomendasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rekomendasi` char(100) NOT NULL,
  `alamat_rekomendasi` char(200) NOT NULL,
  `no_telepon` char(20) NOT NULL,
  `jabatan` char(50) NOT NULL,
  `hubungan` char(100) NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_rekomendasi`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_rekomendasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_ring`
--

CREATE TABLE IF NOT EXISTS `tbl_ring` (
  `id_ring` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ring` char(10) NOT NULL,
  `tipe_ring` char(50) NOT NULL,
  `fee_ring` int(11) NOT NULL,
  PRIMARY KEY (`id_ring`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_ring`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE IF NOT EXISTS `tbl_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `status_karyawan` enum('active','resign') NOT NULL,
  `nip` char(20) NOT NULL,
  PRIMARY KEY (`id_status`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_status`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_supervisor`
--

CREATE TABLE IF NOT EXISTS `tbl_supervisor` (
  `id_supervisor` int(11) NOT NULL AUTO_INCREMENT,
  `nip` char(20) NOT NULL,
  `nama_supervisor` char(100) NOT NULL,
  PRIMARY KEY (`id_supervisor`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_supervisor`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE IF NOT EXISTS `tbl_unit` (
  `id_unit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_unit` char(100) NOT NULL,
  `area_unit` char(100) NOT NULL,
  PRIMARY KEY (`id_unit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_unit`
--


-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `userId` bigint(20) NOT NULL AUTO_INCREMENT,
  `userLogin` varchar(20) NOT NULL,
  `userPassword` varchar(50) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userDesc` text NOT NULL,
  `userStatus` smallint(6) NOT NULL,
  `userCreateTime` datetime NOT NULL,
  `userModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nip` varchar(20) DEFAULT NULL,
  `userKantor` enum('mdis','nkb') NOT NULL,
  PRIMARY KEY (`userId`),
  KEY `userStatus` (`userStatus`),
  KEY `nip` (`nip`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`userId`, `userLogin`, `userPassword`, `userName`, `userDesc`, `userStatus`, `userCreateTime`, `userModifiedTime`, `nip`, `userKantor`) VALUES
(1, 'admin', '$1$ztYoo65w$Kdx4X9c2BM1jRONW6M3r20', 'Administrator', 'Administrator', 1, '2011-05-14 23:55:02', '2011-05-14 23:55:05', NULL, 'mdis');

-- --------------------------------------------------------

--
-- Table structure for table `UserAccess`
--

CREATE TABLE IF NOT EXISTS `UserAccess` (
  `userId` bigint(20) NOT NULL,
  `accessId` int(10) NOT NULL,
  PRIMARY KEY (`userId`,`accessId`),
  KEY `FKUserAccess616893` (`accessId`),
  KEY `FKUserAccess703758` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UserAccess`
--

INSERT INTO `UserAccess` (`userId`, `accessId`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `UserConfig`
--

CREATE TABLE IF NOT EXISTS `UserConfig` (
  `userId` bigint(20) NOT NULL,
  `userConfigName` varchar(50) NOT NULL,
  `userConfigValue` text NOT NULL,
  `userConfigModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userId`,`userConfigName`),
  KEY `FKUserConfig372721` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UserConfig`
--


-- --------------------------------------------------------

--
-- Table structure for table `UserEvent`
--

CREATE TABLE IF NOT EXISTS `UserEvent` (
  `userEventId` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL,
  `userEventTime` datetime NOT NULL,
  `userEventTitle` varchar(255) NOT NULL,
  `userEventDesc` text NOT NULL,
  `userEventCreateTime` datetime NOT NULL,
  `userEventModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userEventId`),
  KEY `FKUserEvent124400` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `UserEvent`
--


-- --------------------------------------------------------

--
-- Table structure for table `UserGroup`
--

CREATE TABLE IF NOT EXISTS `UserGroup` (
  `userId` bigint(20) NOT NULL,
  `groupId` int(10) NOT NULL,
  PRIMARY KEY (`userId`,`groupId`),
  KEY `FKUserGroup758334` (`groupId`),
  KEY `FKUserGroup862102` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UserGroup`
--


-- --------------------------------------------------------

--
-- Table structure for table `UserIdentify`
--

CREATE TABLE IF NOT EXISTS `UserIdentify` (
  `userId` bigint(20) NOT NULL AUTO_INCREMENT,
  `userTimeAccess` int(10) NOT NULL,
  `userGenerate` varchar(50) NOT NULL,
  `userIP` varchar(50) NOT NULL,
  `userIdentifyModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userId`),
  KEY `UserIdentifyIndex` (`userTimeAccess`,`userGenerate`,`userIP`),
  KEY `FKUserIdenti182380` (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `UserIdentify`
--

INSERT INTO `UserIdentify` (`userId`, `userTimeAccess`, `userGenerate`, `userIP`, `userIdentifyModifiedTime`) VALUES
(1, 1311396962, 'efc93fd7aa407904ef8744e15856c3e7', '127.0.0.1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `UserLocation`
--

CREATE TABLE IF NOT EXISTS `UserLocation` (
  `userId` bigint(20) NOT NULL AUTO_INCREMENT,
  `kotamaId` varchar(10) NOT NULL,
  `satuanId` varchar(10) NOT NULL,
  `unitId` varchar(10) NOT NULL,
  `bagianId` varchar(10) NOT NULL,
  `subBagianId` varchar(10) NOT NULL,
  `userLocationModifiedTime` varchar(10) NOT NULL,
  PRIMARY KEY (`userId`),
  KEY `FKUserLocati981372` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `UserLocation`
--


-- --------------------------------------------------------

--
-- Table structure for table `UserLogin`
--

CREATE TABLE IF NOT EXISTS `UserLogin` (
  `userLoginId` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL,
  `userLoginIp` varchar(255) NOT NULL,
  `userLoginStatus` smallint(6) NOT NULL DEFAULT '0',
  `userLoginCreateTime` datetime NOT NULL,
  `userLoginModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userLoginId`),
  KEY `FKUserLogin382277` (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `UserLogin`
--

INSERT INTO `UserLogin` (`userLoginId`, `userId`, `userLoginIp`, `userLoginStatus`, `userLoginCreateTime`, `userLoginModifiedTime`) VALUES
(1, 1, '0.0.0.0', 1, '2011-07-05 23:30:21', '2011-07-05 23:30:21'),
(2, 1, '0.0.0.0', 1, '2011-07-09 21:51:18', '2011-07-09 21:51:18'),
(3, 1, '0.0.0.0', 1, '2011-07-14 11:25:38', '2011-07-14 11:25:38'),
(4, 1, '127.0.0.1', 1, '2011-07-19 19:37:10', '2011-07-19 19:37:10'),
(5, 1, '127.0.0.1', 1, '2011-07-19 20:27:54', '2011-07-19 20:27:54'),
(6, 1, '127.0.0.1', 1, '2011-07-21 23:40:19', '2011-07-21 23:40:19'),
(7, 1, '127.0.0.1', 1, '2011-07-23 11:24:09', '2011-07-23 11:24:09'),
(8, 1, '127.0.0.1', 1, '2011-07-23 11:46:13', '2011-07-23 11:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `UserMessage`
--

CREATE TABLE IF NOT EXISTS `UserMessage` (
  `userMessageId` bigint(20) NOT NULL AUTO_INCREMENT,
  `userIdFrom` bigint(20) NOT NULL,
  `userIdTo` bigint(20) NOT NULL,
  `userMessageTipe` varchar(10) NOT NULL,
  `userMessageTitle` varchar(255) NOT NULL,
  `userMessageContent` longtext NOT NULL,
  `userMessageStatus` smallint(6) NOT NULL,
  `userMessageCreateTime` datetime NOT NULL,
  `userMessageModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userMessageId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `UserMessage`
--


-- --------------------------------------------------------

--
-- Table structure for table `WilayahKesatuan`
--

CREATE TABLE IF NOT EXISTS `WilayahKesatuan` (
  `wilayahKesatuanId` bigint(20) NOT NULL AUTO_INCREMENT,
  `wilayahKesatuanPid` bigint(20) NOT NULL,
  `wilayahKesatuanKode` varchar(50) NOT NULL,
  `wilayahKesatuanDesc` varchar(255) NOT NULL,
  `wilayahKesatuanTipe` varchar(50) NOT NULL DEFAULT '',
  `wilayahKesatuanCreateTime` datetime NOT NULL,
  `wilayahKesatuanModifiedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`wilayahKesatuanId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `WilayahKesatuan`
--

