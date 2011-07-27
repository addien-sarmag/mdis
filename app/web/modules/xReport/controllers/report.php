<?php


class report extends Controller {
	
	var $kopReport ;
	var $icon;
	
	public function __construct(){ 
    	parent::__construct ();
    	$this->_data = array();
    	$this->load->library( array ( 'fpdf/myfpdf','fpdf/invoiceTemplateI','fpdf/templateii','fpdf/templateIII' ,'fpdf/templateIV' ,'fpdf/templateV','html2pdf/HTML2PDF' ,'html2pdf/myUse' ));
		$this->config->load('xReport');
		
		$this->kopReport = $this->config->item('kopReport');
		$this->icon		 = $this->config->item('iconReport');
	}
	
	protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            	return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }

    public function index()	{
    	redirect ( 'xReport/report' );
    }
    	
	public function invoice(){
		$array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
		$this->load->module_model('sales','invoice_model');
		
		$dataView = $this->invoice_model->getReportData1($array['id']);
		$dataView2 = $this->invoice_model->getReportData2($array['id']);
		
		$this->_data['invoiceTanggal'] = ina_date($dataView['invoiceTanggal']);
		$this->_data['noInvoice'] = $dataView['invoiceKode'];
		$this->_data['invoiceDiskonGlobal'] = $dataView['invoiceDiscountGlobal'];
		$this->_data['totalInvoice'] = $dataView['invoiceTotal'];
		$this->_data['suratJalanKode'] = $dataView['suratJalanKode'];
		$this->_data['kodeSales'] = $dataView['salesKode'];
		$this->_data['matauang'] = $dataView['mataUangKode'];
		$this->_data['poKode'] = $dataView['purchaseOrderCustomerKode'];
		$this->_data['poTanggal'] = ina_date($dataView['purchaseOrderCustomerTanggal']);
		$this->_data['namaCustomer'] = $dataView['customerNamaPerusahaan'];
		$this->_data['termin'] = $dataView['invoiceTerminPembayaran'];
		
		$this->_data['dataView'] = $dataView2;
		
		$this->_view('xReport/invoicePdfBentukI');
	}
	
	public function daftarCustomer(){
		$this->_view('xReport/daftarCustomerPdfBentukI');
	}
	
	
	
	public function penawaran(){
		
		$array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
		$this->load->module_model('sales','penawaran_model');
		
		$dataView = $this->penawaran_model->getReportData1($array['id']);
		$dataView2 = $this->penawaran_model->getReportData2($array['id']);
		$dataView3 = $this->penawaran_model->getReportData3($array['id']);
		$contactPerson = array();
		
		$no = 0;
		foreach ($dataView as $row=>$val){
			$tanggal = $val['penawaranTanggal'];
			$kataPengantar = $val['penawaranKataPengantar'];
			$noPenawaran = $val['penawaranKode'];
			$marketing = $val['salesNama'];
			$namaCustomer = $val['customerNamaPerusahaan'];
			$teleponCustomer = $val['customerTelepon'];
			$faxCustomer = $val['customerFax'];
			$up = $val['penawaranUp'];
			$tembusan = $val['penawaranTembusan'];
			$mataUang = $val['mataUangKode'];
			$total = $val['penawaranTotal'];
			$diskon = $val['penawaranDiskon'];
			if (! in_array($val['contactPersonNama'], $contactPerson)){
				$contactPerson[$no] = $val['contactPersonNama'];
				$no++;
			}
			
		}
		
		$this->_data['tanggal'] = ina_date($tanggal);
		$this->_data['kataPengantar'] = $kataPengantar;
		$this->_data['noPenawaran'] = $noPenawaran;
		$this->_data['marketing'] = $marketing;
		$this->_data['namaCustomer'] = $namaCustomer;
		$this->_data['teleponCustomer'] = $teleponCustomer;
		$this->_data['faxCustomer'] = $faxCustomer;
		$this->_data['contactPerson'] = $contactPerson;
		$this->_data['up'] = $up;
		$this->_data['tembusan'] = $tembusan;
		$this->_data['diskon'] = $diskon;
		$this->_data['total'] = $total;
		$this->_data['matauang'] = $mataUang;
		
		$this->_data['dataView'] = $dataView2;
		
		$this->_data['dataView2'] = $dataView3;
		
		$this->_view('xReport/penawaranPdfBentukI');
	}
	
	public function creditNote(){
		$array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
		$this->load->module_model('sales','creditnote_model');
		
		$dataView = $this->creditnote_model->getReportData1($array['id']);
		$dataView2 = $this->creditnote_model->getReportData2($array['id']);
		
		$this->_data['cnTanggal'] = ina_date($dataView['creditNoteTanggal']);
		$this->_data['noCN'] = $dataView['creditNoteKode'];
		$this->_data['cnJmlPajakDikurangi'] = $dataView['creditNoteJumlahPajakDikurangi'];
		$this->_data['cnTotal'] = $dataView['creditNoteTotal'];
		$this->_data['invoiceKode'] = $dataView['invoiceKode'];
		$this->_data['nmCustomer'] = $dataView['customerNamaPerusahaan'];
		$this->_data['alamatCustomer'] = $dataView['customerAlamat'];
		$this->_data['npwpCustomer'] = $dataView['customerNPWP'];
		$this->_data['matauang'] = $dataView['mataUangKode'];
		
		$this->_data['dataView'] = $dataView2;
		
		$this->_view('xReport/creditNotePdfBentukI');
	}
	
	public function debitNote(){
		$array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
		$this->load->module_model('purchasing','purchasingdebitnote_model');
		
		$dataView = $this->purchasingdebitnote_model->getReportData1($array['id']);
		$dataView2 = $this->purchasingdebitnote_model->getReportData2($array['id']);
		
		$this->_data['dnTanggal'] = ina_date($dataView['debitNoteTanggal']);
		$this->_data['noDN'] = $dataView['debitNoteKode'];
		$this->_data['dnJmlPajakDikurangi'] = $dataView['debitNoteJumlahPajakDikurangi'];
		$this->_data['dnTotal'] = $dataView['debitNoteTotal'];
		$this->_data['invoiceKode'] = $dataView['invoiceSuplierKode'];
		$this->_data['nmSuplier'] = $dataView['suplierIdNama'];
		$this->_data['alamatSuplier'] = $dataView['suplierIdAlamat'];
		$this->_data['npwpSuplier'] = $dataView['suplierIdNPWP'];
		$this->_data['matauang'] = $dataView['mataUangKode'];
		
		$this->_data['dataView'] = $dataView2;
		
		$this->_view('xReport/debitNotePdfBentukI');
	}
	
//	public function fakturPajakCustomer(){
		
//		$array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
//		$this->load->module_model('finance','fakturcustomer_model');
//		print_r ($array['id']);
		
//		$dataView = $this->fakturcustomer_model->getReportData1($array['id']);
//		print_r ($dataView);
//		$dataView2 = $this->fakturcustomer_model->getReportData2($array['id']);
//		print_r ($dataView2); die;
		
//		$dataView = $this->fakturcustomer_model->getDaftarFakturPajakReport($array['id']);
//		print_r ($dataView);
//		
//		$this->_data['dnTanggal'] = ina_date($dataView['debitNoteTanggal']);
//		$this->_data['noDN'] = $dataView['debitNoteKode'];
//		$this->_data['dnJmlPajakDikurangi'] = $dataView['debitNoteJumlahPajakDikurangi'];
//		$this->_data['dnTotal'] = $dataView['debitNoteTotal'];
//		$this->_data['invoiceKode'] = $dataView['invoiceSuplierKode'];
//		$this->_data['nmSuplier'] = $dataView['suplierIdNama'];
//		$this->_data['alamatSuplier'] = $dataView['suplierIdAlamat'];
//		$this->_data['npwpSuplier'] = $dataView['suplierIdNPWP'];
//		$this->_data['matauang'] = $dataView['mataUangKode'];
		
//		$this->_data['dataView'] = $dataView;
		
//		$this->_view( 'xReport/fakturPajakCustomerPdfBentukI' );
		
//		$this->_view( 'xReport/fakturPajakSuplierPdfBentukI' );
	
//	}
	
	public function kartuPersediaan(){
		
		$this->load->module_model('inventory','persediaan_model');
		
		if (($this->input->post('tblSubmit') === 'Tampilkan') && ($this->input->post('kirim')==='kirim')){
    		$bentuk = trim($this->input->post('bentuk'));
			$awalLaporan = trim($this->input->post('tglAwalLaporan'));
    		$akhirLaporan = trim($this->input->post('tglAkhirLaporan'));
    		
    		$errors = array();
    		
    		if (empty($bentuk))
    			$errors[] = 'Pilih Bentuk Report Anda';
    			
    		if (empty($awalLaporan))
    			$errors[] = 'Input Periode Awal Laporan';
    			
    		if (empty($akhirLaporan))
    			$errors[] = 'Input Periode Akhir Laporan';

			if ($errors) {
				$this->_data ['errorMessage'] = implode ( '<br />', $errors );
				redirect('inventory/persediaan/report/errors/1');
			}else{

				
    			$periodeAwal = ina_date($awalLaporan);
    			$periodeAkhir = ina_date($akhirLaporan);

    			$getKategoriBarang = $this->persediaan_model->getDataKategoriBarang();
    			$no = 1;
//    			foreach($getKategoriBarang as $row){
//					foreach($row['barangKategoriId'] as $row2){
//						$barangId = $row2['barangId'];
//						$getBarangPersediaan = $this->persediaan_model->getPersediaanReport($barangId);
//						
//						$getKategoriBarang[$row['barangKategoriId']][$row2['barangId']]['jumlahBarangMasuk'] = '';
//						$getKategoriBarang[$row['barangKategoriId']][$row2['barangId']]['jumlahBarangKeluar'] = '';
//						$getKategoriBarang[$row['barangKategoriId']][$row2['barangId']]['namaGudang'] = '';
//						
//						die();
//						print_r($getBarangPersediaan);
//						
//
//						if (isset($getBarangPersediaan)){
//							foreach($getBarangPersediaan as $row3=>$val3){
//								$row2['barangId']['jumlahBarangMasuk'] = $val3['totalKredit'];
//								$row2['barangId']['jumlahBarangKeluar'] = $val3['totalDebit'];
//								$row2['barangId']['namaGudang'] = $val3['gudangNama'];
//							}
//						}
//					}
//    			}
   				
				$this->_data['dataView'] = $getKategoriBarang;
				$this->_view( 'xReport/persediaanStockPdfBentukI' );
			}
    	}
    }

    
    public function inventory() {
    	$array = $this->uri->uri_to_assoc (3, array ('tglAwal', 'tglAkhir'));
    	
    	$data['awalPeriode'] = $array['tglAwal'];
    	$data['akhirPeriode'] = $array['tglAkhir'];
 
    	$this->load->module_model('inventory','persediaanbarang_model');
		
    	$inventori = $this->persediaanbarang_model->getDaftar($data);
    	//print_r ($inventori); die;
		
    	$this->_data['dataView'] = $inventori;
		$this->_view( 'xReport/inventoryPdfBentukI' );
    	    
    }
    
	public function persediaan() {
		$array = $this->uri->uri_to_assoc (3, array ('tglAwal','tglAkhir','srcNamaBarang'));
		
    	$data['awalPeriode'] = $array['tglAwal'];
    	$data['akhirPeriode'] = $array['tglAkhir'];
    	$data['srcNamaBarang'] = $array['srcNamaBarang'];
 
    	$this->load->module_model('inventory','persediaan_model');
		
    	$persediaan = $this->persediaan_model->getListPDF($data);
    	
    	$this->_data['dataView'] = $persediaan;
		$this->_view( 'xReport/persediaanPdfBentukI' );
	}
    
    public function fakturPajakCustomer() {
    	$array = $this->uri->uri_to_assoc (3, array ('id'));
    	$data['fakturPajakCustomerId'] = $array['id'];
    	
    	$this->load->module_model('finance','fakturcustomer_model');
		
    	$dataView = $this->fakturcustomer_model->getDaftarFakturPajakReport($data);
    	//print_r ($dataView); 
	
    	$total=0;
    	foreach ($dataView as $k=>$v) :
    		$total=$total+$v['fakturPajakCustomerListHargaJualValas'];
		endforeach; 
		
		if ($total > 0) {
			$this->_data['dataView'] = $dataView;
			$this->_view ('xReport/fakturPajakCustomerPdfBentukII');
		}
		if ($total == '0') {
			$this->_data['dataView'] = $dataView;
			$this->_view ('xReport/fakturPajakCustomerPdfBentukI');
		}
    }
	
	public function fakturPajak() {
    	
		$this->_view ('xReport/fakturPajakPdfBentukI');
		
    }
    
   public function fakturPajakSuplier() {
   		$array = $this->uri->uri_to_assoc (3, array ('id'));
   		$data['fakturPajakSuplierId'] = $array['id'];
   		
   		$this->load->module_model('finance','faktursuplier_model');
   		
   		$dataView = $this->faktursuplier_model->getDaftarFakturPajakSuplierReport($data); //print_r ($dataView); die;
   		
   		$this->_data['dataView'] = $dataView;
		$this->_view( 'xReport/fakturPajakSuplierPdfBentukI' );
	}
	
	
    public function pembayaranHutang() {
    	$array = $this->uri->uri_to_assoc (3, array ('id','tglAwal','tglAkhir'));
    	$data['id'] = $array['id'];
    	print_r ($array['tglAwal']);
    	print_r ($array['tglAkhir']);
    	
    	$this->load->module_model('finance','pembayaranhutang_model');
		
    	$pembayaranhutang = $this->pembayaranhutang_model->getList($data); print_r ($pembayaranhutang);// die;
    	//print_r ($fakturpajakcustomer); die;
		
    	$this->_data['dataView'] = $pembayaranhutang;
		$this->_view( 'xReport/pembayaranHutangPdfBentukI' );
    	    
    }
    
    public function stockBarang(){
		
		$this->_view( 'xReport/stockBarangPdfBentukI' );
	
	}
	
	public function accountPayable(){
		
		$this->_view( 'xReport/accountPayablePdfBentukI' );
	
	}
	
	public function suratJalan(){
		
		$array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
		$this->load->module_model('sales','suratjalan_model');
		
		$dataView = $this->suratjalan_model->getReportData1($array['id']);
		$dataView2 = $this->suratjalan_model->getReportData2($array['id']);
		
		$this->_data['sjTanggal'] = ina_date($dataView['suratJalanTanggal']);
		$this->_data['noSJ'] = $dataView['suratJalanKode'];
		$this->_data['namaKendaraan'] = $dataView['kendaraanNama'];
		$this->_data['nopolKendaraan'] = $dataView['kendaraanNoPol'];
		$this->_data['nmCustomer'] = $dataView['customerNamaPerusahaan'];
		$this->_data['alamatCustomer'] = $dataView['customerAlamat'];
		
		$this->_data['dataView'] = $dataView2;
		
		$this->_view( 'xReport/suratJalanPdfBentukI' );
	
	}
	
	public function listingPajak(){
		
		$this->_view( 'xReport/listingPajakKeluaranPdfBentukI' );
	
	}
	
	public function penjualanSales(){
		
		$this->_view( 'xReport/penjualanSalesPdfBentukI' );
	
	}
	
	public function suplierPaymentHistory(){
		
		$this->_view( 'xReport/suplierPaymentHistoryPdfBentukI' );
	
	}
	
	public function purchaseOrderLuarNegeri(){
		
		$this->_view( 'xReport/purchaseOrderLuarNegeri' );
	
	}
	
	public function accountList(){
		
		$this->_data['listTable'] = $listTable;
		
		$this->_view( 'xReport/accountList' );
	
	}
	
	public function jurnal(){
		
		
		$header = array(
						'kop' 		=>  $this->config->item("kopReport") ,
						'icon'	  	=>  $this->config->item("attrIcon"),
						'line'	  	=>  $this->config->item("attrLine"),
						);
		
		$thead = array( array ( 'desc' => 'Kode' ,  
								'attr' => "style='width: 10%;height: 22px; text-align: center; border: solid 1px #000000;' " ,  
								),
						array ( 'desc' => 'Tanggal' ,  
								'attr' => "style='width: 10%;  text-align: center; border: solid 1px #000000;' " ,  
								),
						array ( 'desc' => 'Account' ,  
								'attr' => "style='width: 15%;  text-align: center; border: solid 1px #000000;' " ,  
								),
						array ( 'desc' => 'Debit' ,  
								'attr' => "style='width: 8%;  text-align: center; border: solid 1px #000000;' " ,  
								),
						array ( 'desc' => 'Kredit' ,  
								'attr' => "style='width: 8%; text-align: center; border: solid 1px #000000;' " ,  
								),
						array ( 'desc' => 'Operator' ,  
								'attr' => "style='width: 15%;  text-align: center; border: solid 1px #000000;' " ,  
								),
						array ( 'desc' => 'Keterangan' ,  
								'attr' => "style='width: 25%;  text-align: center; border: solid 1px #000000;' " ,  
								),
						);
						
		$contentTable = array( 
								array ( 
										 'no' => '102' ,  
										 'tgl' => '2011-03-12 asdas',
										 'account' => '111100-kas' ,  
										 'debit' => '0',
										 'kredit' => '5' ,  
										 'operator' => 'El Shinta',
										 'keterangan' => 'Okey',
										),
								array ( 
										 'no' => '45' ,  
										 'tgl' => '2011-03-10',
										 'account' => '2346-er' ,  
										 'debit' => '2',
										 'kredit' => '3' ,  
										 'operator' => 'Indah Wyat',
										 'keterangan' => 'lorem epsum de estat',
										),
							);
									
		$contentTable = array_merge( $contentTable , $contentTable );
		
		$tbody = array(  
						'attr'	=> array(
										"style='width: 10%;text-align: left;border: solid 1px #000000;'",
										"style='width: 10%;text-align: center;border: solid 1px #000000;'",
										"style='width: 15%;text-align: center;border: solid 1px #000000;'",
										"style='width: 8%;text-align: center;border: solid 1px #000000;'",
										"style='width: 8%;text-align: center;border: solid 1px #000000;'",
										"style='width: 15%;text-align: center;border: solid 1px #000000;'",
										"style='width: 29%;text-align: vertical-align: top;center;border: solid 1px #000000;'",
									), 
						'key'	=> array('no','tgl','account','debit','kredit','operator','keterangan'),
						'value' => $contentTable
						);
						
		
		
		$headContent = array( 
								array( 
										'desc' => 'JURNAL',
										'attr' => "font-family: Arial;style='font-size: 18px; font-weight: bold; text-align: center;margin-top: 10px;'"
									),
								array( 
										'desc' => ina_date( '2011-03-01' ) .  ' s/d ' . ina_date( '2011-03-31' ),
										'attr' => "style='font-size: 14px;  text-align: center;margin-bottom: 30px;'"
									),
							);
							
		$tail = array(  
						array(
							'desc'=>'Jakarta, '.ina_date( date('Y-m-d') ),
							'attr'=>"style='width : 40%;font-size: 12px;  text-align: center;margin-left: 419px; margin-top: 30px;'",
						),
						array(
							'desc'=>'Manager Finance',
							'attr'=>"style='width : 40%;font-size: 12px;  text-align: center;margin-left: 419px; margin-bottom: 40px;'",
						),
						array(
							'desc'=>'( Astrid Tiar )',
							'attr'=>"style='width : 40%;font-size: 12px;  text-align: center;margin-left: 419px;'",
						),
					 );
					 
		$table = array(
						'thead' =>  $thead , 
						'tbody' =>  $tbody , 
						);
						
		
		$html2pdf = new myuse( );
		$html2pdf->page_header( );
		$html2pdf->page_headContent( $headContent );
		$html2pdf->page_middleContent( $table , true , true  );
		$html2pdf->page_tailContent( $tail );
		$html2pdf->page_footer();
		
		$filename	= ucwords( 'Jurnal Ditajaya.pdf' );
		$filename 	= str_replace(' ','-', $filename ); 
		$filename	= MEDIA_PATH . DS . 'private' . DS . 'pdf' . DS . 'finance'. DS . getUserId() . DS . date('Y/m/d') . DS .time() . '-' . $filename  ;
		
//		$html2pdf->checkHtml();
		
		$html2pdf->page_output( $filename ,'P','A4','fr');
	}
	
	
	public function htmlPdf(){
		
		
		$icon = "src='$this->icon' style='width:90px;height:70px; margin-left: 5px; margin-right: 10px;' align='left'";
		$line = "style='border-bottom: solid 1px black; margin-left: 30px; padding-bottom: 3px;'";
		
		$thead = array( array ( 'desc' => 'Nama' ,  
								'attr' => "style='width: 20%; text-align: center; border: solid 1px #000000;' " ,  
								),
						array ( 'desc' => 'Alamat' ,  
								'attr' => "style='width: 65%; height:22px; text-align: center; border: solid 1px #000000;' " ,  
								)
						);
						
		$contentTable = array( 
									array ( 'nama' => 'Febru Ariyanto' ,  
										   'alamat' => 'Jl. Nggak Jadi Merdeka',
											),
									array ( 'nama' => 'Andre ' ,  
										   'alamat' => 'Jl. Pecenongan',
											),
									);
									
		$contentTable = array_merge( $contentTable , $contentTable );
//		$contentTable = array_merge( $contentTable , $contentTable );
//		$contentTable = array_merge( $contentTable , $contentTable );
//		$contentTable = array_merge( $contentTable , $contentTable );
						
		$tbody= array(  
						'attr'	=> array(
										"style='text-align: left;border: solid 1px #000000;'",
										"style='text-align: center;border: solid 1px #000000;'"
									), 
						'key'	=> array('nama','alamat'),
						'value' => $contentTable
						);
						
		
						
		
		
		$html2pdf = new myuse();
		$html2pdf->page_header( $icon , $this->kopReport , $line );
		$html2pdf->page_headContent( 'PURCHASE ORDER' );
		$html2pdf->page_middleContent( $thead  , $tbody , true , true );
		$html2pdf->page_footer();
		
		$html2pdf->letsRoll('Contoh.pdf','P','A4','fr');
		
	}
	
	
	public function purchaseOrder(){
		
		$array = $this->uri->uri_to_assoc (3, array ('id', 'action'));
		
		$this->load->module_model('purchasing','purchase_model');
		$this->load->module_config('purchasing','purchasing');
		
		$tipeFile 	= trim( $this->input->post('tipe') );
		$bentuk 	= trim( $this->input->post('bentuk') );
		
		if ( ! $tipeFile || ! $bentuk )
			show_404();	
		
		$id = $array['id'];
		
		$sqlProfile = "Select sp.suplierIdNama as suplierName,PO.purchaseOrderTanggal as tglPO ,sp.suplierIdAlamat  as suplierAlamat, PO.purchaseOrderKode as noPO
							  ,PO.purchaseOrderPaymentMethod as paymentPO , PO.purchaseOrderPaymentDays as paymentdaysPO, sp.suplierIdPIC as suplierPIC, sp.suplierIdTelp as suplierTelp , purchaseOrderRequiredDelivery as requiredPO
							  , PO.purchaseOrderPpn as ppnPO , PO.purchaseOrderMengetahui as mengetahui , PO.purchaseOrderFreightInsurance as freight , PO.purchaseOrderShipmentTo as shipment
							 
							FROM PurchaseOrder PO
							 LEFT JOIN  Suplier sp ON PO.suplierId = sp.suplierId
							WHERE PO.purchaseOrderId = '$id'
						";
		
		$sql = "Select b.barangNama as desk , POL.purchaseOrderJumlah as qty , POL.purchaseOrderHarga as unit , POL.purchaseOrderTotalHarga as total 
						FROM PurchaseOrderList POL
						-- LEFT JOIN  PurchaseOrderList POL ON PO.purchaseOrderId = POL.purchaseOrderId
						 LEFT JOIN  Barang b ON POL.barangId = b.barangId 
						WHERE POL.purchaseOrderId = '$id'
				";
		
		$sqlTerm = "Select POT.purchaseOrderTermDescription as desk
						FROM PurchaseOrderTerm POT
						WHERE POT.purchaseOrderId = '$id'
				";
		
		
		
		
		$dataView = $this->purchase_model->getReport( $sql , 'yes' );
		$dataProfile = $this->purchase_model->getReport( $sqlProfile );
		$dataTerms = $this->purchase_model->getReport( $sqlTerm , 'yes');
		
		
		$this->_data['profile'] 	= $this->config->item('profile');
		$this->_data['listTable'] 	= $dataView;
		$this->_data['dataProfile'] = $dataProfile;
		$this->_data['dataTerms'] 	= $dataTerms;
		
		
		if( $dataProfile['ppnPO'] != 0 ) {
			$this->_view( 'xReport/purchaseOrderDalamNegeri'.$tipeFile.'Bentuk'.$bentuk  );
		}else{
			$this->_view( 'xReport/purchaseOrderLuarNegeri'.$tipeFile.'Bentuk'.$bentuk  );
		}
	}
	
	public function reportOption(){
		$array = $this->uri->uri_to_assoc (3, array ('id', 'for'));
		
		$link = '';
		$history = '';
		
		if ( $array['for'] == 'PO'  ){
			$link .=  "purchaseOrder/id/".$array['id']; 
			$history  .=  "purchasing/purchaseOrder/view";
		} 
		
		
		
		$this->_data['history'] = $history;
		$this->_data['link'] 	= $link;
		$this->_data['for']		= $array['for'];
		
		$this->_view( 'xReport/reportOption' );
		
	}
	
	public function getBentuk(){
		
		$this->config->load('xReport');
		
		$untuk = $this->input->post( "untuk" );
		$tipe  = $this->input->post( "tipe" );
		$bentuk = array();
		
		if ( ! $untuk || ! $tipe ) 
			show_404();
		
		if ( $untuk == 'PO' ) {
			$bentuk = $this->config->item("bentuk$untuk$tipe");
		}
			
		echo json_encode( $bentuk );
		
	}
	
public function reportOption2(){
		$array = $this->uri->uri_to_assoc (3, array ('id', 'for'));
		
		$link = '';
		$history = '';
		
		if ( $array['for'] == 'Penawaran'  ){
			$link .=  "penawaran/id/".$array['id']; 
			$history  .=  "sales/penawaran/view";
		} 
		
		
		
		$this->_data['history'] = $history;
		$this->_data['link'] 	= $link;
		$this->_data['for']		= $array['for'];
		
		$this->_view( 'xReport/reportOption2' );
		
	}
	
	public function getBentuk2(){
		
		$this->config->load('xReport');
		
		$untuk = $this->input->post( "untuk" );
		$tipe  = $this->input->post( "tipe" );
		$bentuk = array();
		
		if ( ! $untuk || ! $tipe ) 
			show_404();
		
		if ( $untuk == 'PO' ) {
			$bentuk = $this->config->item("bentuk$untuk$tipe");
		}
			
		echo json_encode( $bentuk );
		
	}
	
public function returFakturSuplier(){
/*		$array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
		$this->load->module_model('finance','returfakturpajaksuplier_model');
		
		$dataView = $this->returfakturpajaksuplier_model->getReportData1($array['id']);
		
		$dataView2 = $this->returfakturpajaksuplier_model->getReportData2($array['id']);
		
		$this->_data['rfpTanggal'] = ina_date($dataView['returFakturPajakSuplierTanggal']);
		$this->_data['rfpKode'] = $dataView['returFakturPajakSuplierKode'];
		$this->_data['noDN'] = $dataView['debitNoteKode'];
		$this->_data['noFP'] = $dataView['fakturPajakSuplierKode'];
		$this->_data['rfpJmlPajakDikurangi'] = ($dataView['returFakturPajakSuplierJumlahPajakDikurangi']) ? $dataView['returFakturPajakSuplierJumlahPajakDikurangi']: '-';
		$this->_data['rfpTotal'] = $dataView['returFakturPajakSuplierTotal'];
		$this->_data['nmSuplier'] = $dataView['suplierIdNama'];
		$this->_data['alamatSuplier'] = $dataView['suplierIdAlamat'];
		$this->_data['npwpSuplier'] = $dataView['suplierIdNPWP'];
		$this->_data['matauang'] = $dataView['mataUangKode'];
		
		$this->_data['dataView'] = $dataView2;
		
		$this->_view('xReport/returFakturSuplierPdfBentukI');
*/
	$array = $this->uri->uri_to_assoc (3, array ('id'));
	$this->load->module_model('finance', 'returfakturpajaksuplier_model');
	
	$dataView = $this->returfakturpajaksuplier_model->getReturFakturPajakSuplierReport($array['id']);
	//print_r ($dataView); die;
	
	$this->_data['dataView'] = $dataView;
	//$this->_data['dateVie2w'] = $dataView; 
	
	$this->_view('xReport/returFakturSuplierPdfBentukI');
	}
	
public function returFakturCustomer(){
		$array = $this->uri->uri_to_assoc ( 3, array ('id', 'action' ) );
		$this->load->module_model('finance','returfakturpajakcustomer_model');
		
		$dataView = $this->returfakturpajakcustomer_model->getReportData1($array['id']);
		
		$dataView2 = $this->returfakturpajakcustomer_model->getReportData2($array['id']);
		
		$this->_data['rfpTanggal'] = ina_date($dataView['returFakturPajakCustomerTanggal']);
		$this->_data['rfpKode'] = $dataView['returFakturPajakCustomerKode'];
		$this->_data['noCN'] = $dataView['creditNoteKode'];
		$this->_data['noFP'] = $dataView['fakturPajakCustomerKode'];
		$this->_data['rfpJmlPajakDikurangi'] = ($dataView['returFakturPajakJumlahPajakDikurangi']) ? $dataView['returFakturPajakJumlahPajakDikurangi']: '-';
		$this->_data['rfpTotal'] = $dataView['returFakturPajakCustomerTotal'];
		$this->_data['nmCustomer'] = $dataView['customerNamaPerusahaan'];
		$this->_data['alamatCustomer'] = $dataView['customerAlamat'];
		$this->_data['npwpCustomer'] = $dataView['customerNPWP'];
		$this->_data['matauang'] = $dataView['mataUangKode'];
		$this->_data['kurs'] = $dataView['kurs'];
		$this->_data['dataView'] = $dataView2;
		
		
//		$array = $this->uri->uri_to_assoc (3, array ('id'));
//		$this->load->module_model ('finance', 'returfakturpajakcustomer_model');
//		
//		$dataView = $this->returfakturpajakcustomer_model->getReturFakturPajakCustomerReport($array['id']);
//		//print_r ($dataView); die;
//		$this->_data['dataView'] = $dataView;
		
		$this->_view('xReport/returFakturCustomerPDFBentukI-I');
		//$this->_view('xReport/returFakturCustomerPdfBentukI');
	}

}

