<?php
class Myaccounting {
		
	public function __construct() {
        	$this->henry = & get_instance();    	
        	
    }
    
   
    public function getMaxId($fkId,$tblName) {
    	$this->henry->db->select ('MAX('.$fkId.') as maxId');
    	$this->henry->db->from (''.$tblName.'');
    	$query=$this->henry->db->get();
    	return $query->row_array();
    		
    }
    
	public function cekDeleteTransactionBarang($tableName,$id) {
				$this->henry->db->select('tableId');
				$this->henry->db->select('tableName');
				$this->henry->db->from('AyatJurnal');
				$this->henry->db->where('tableId',$id);
				$this->henry->db->where('tableName',$tableName);
				$query=$this->henry->db->get();
				$cekDataForDelete=$query->row_array();
				
				if($cekDataForDelete) {
					$this->henry->db->where ( 'AyatJurnal.tableId',$id);
					$this->henry->db->where ( 'AyatJurnal.tableName',$tableName);
					return $this->henry->db->delete ( 'AyatJurnal' ) && ($this->henry->db->affected_rows () > 0) ? true : false;
				}
				else {
					 return 0;
				}					
		}
		
	public function cekDebitOrKredit($tableName,$id) {
				$this->henry->db->select('ayatJurnalDebit');
				$this->henry->db->select('ayatJurnalKredit');
				$this->henry->db->from('AyatJurnal');
				$this->henry->db->where('tableId',$id);
				$this->henry->db->where('tableName',$tableName);
				$query=$this->henry->db->get();
				
		}
		public function getHargaSatuanBarang($id,$barangId) {
				$this->henry->db->select('purchaseOrderHarga');
				$this->henry->db->from('PurchaseOrderList');
				$this->henry->db->where('PurchaseOrderList.purchaseOrderId',$id);
				$this->henry->db->where('PurchaseOrderList.barangId',$barangId);
				
				$query=$this->henry->db->get();
				
				return $query->row_array();
		}
				
		
	
  public function updateTransaction($tableName, $id,$dataUpdateAccounting) {
       // if (! $kode || ! $this->get ( $kode ) || ! $data)
            //return array ();
        $this->henry->db->where ( 'AyatJurnal.tableId',$id);
		$this->henry->db->where ( 'AyatJurnal.tableName',$tableName);
        $this->henry->db->limit ( 1 );
        return $this->henry->db->update ('AyatJurnal', $dataUpdateAccounting ) && ($this->henry->db->affected_rows () > 0) ? true : false;
    }
	
	 
 public function addToJurnal($dataToJurnal) {
        if (! $dataToJurnal || ! is_array ( $dataToJurnal ))
            return false;
		return $this->henry->db->insert ( 'AyatJurnal', $dataToJurnal ) && ($this->henry->db->affected_rows () > 0) ? true : false;
        
    }
    

	public function getId($noId,$primaryTableName,$tableName){
				$this->henry->db->select('purchaseOrderId');
				$this->henry->db->from($tableName);
				$this->henry->db->where($tableName.'.'.$primaryTableName,$noId);
				$query=$this->henry->db->get(); 
				return $query->row_array();
	}
	
	
	public function getKursAndMataUangId($primKeyId,$kolomPK,$tblTarget){
				$this->henry->db->select('kurs');
				$this->henry->db->select('mataUangId');
				$this->henry->db->from($tblTarget);
				$this->henry->db->where($tblTarget.'.'.$kolomPK, $primKeyId);
				$query=$this->henry->db->get();
				return $query->row_array();
				
	}
	
	public function getNoTranDanKet($primKeyId,$primKeyName,$tblTarget){
				$this->henry->db->select('invoiceSuplierKode');
				$this->henry->db->from($tblTarget);
				$this->henry->db->where($tblTarget.'.'.$primKeyName, $primKeyId);
				$query=$this->henry->db->get();
				return $query->row_array();
				
	}
	
	
    
	public function insertDataTransactionMoneyToAyatJurnal($dataAccounting) {
		if (! $dataAccounting || ! is_array ( $dataAccounting ))
            return false;
		return $this->henry->db->insert ( 'AyatJurnal', $dataAccounting ) && ($this->henry->db->affected_rows () > 0) ? true : false;
        
	}
	
	public function cekAssigmentAccounting($barangId,$namaTransaksi) {
				$this->henry->db->select('accountId');
				$this->henry->db->select('lokasiId');
				$this->henry->db->select('mataUangId');
				$this->henry->db->select('debitKredit');
				$this->henry->db->from('AssigmentAccounting');
				$this->henry->db->where('AssigmentAccounting.barangId',$barangId);
				$this->henry->db->where('AssigmentAccounting.tableTransaksi',$namaTransaksi);
				
				if($query=$this->henry->db->get()) {
					return $query->row_array();
				} else {
					return false;
				} 
	 }
	
	
	
	function transaksiAccountingForMoney($namaTransaksi='',$dataAccounting,$tblName,$barangId){
			if($namaTransaksi=='InvoiceReceive') {
				$this->henry->db->select('accountId');
				$this->henry->db->select('lokasiId');
				$this->henry->db->select('mataUangId');
				$this->henry->db->select('debitKredit');
				$this->henry->db->from('AssigmentAccounting');
				$this->henry->db->where('AssigmentAccounting.barangId',$barangId);
				$this->henry->db->where('AssigmentAccounting.tableTransaksi',$namaTransaksi);
				$query=$this->henry->db->get();
				if($query) 
				{
					$this->insertDataTransactionMoneyToAyatJurnal($dataAccounting);		
				}
    			else 
    			{	
					return 0;
				}
			}
				
	}
	
	
    // note untuk barang di terima jumlah barang * total hara belum di kalikan
	function cekTransaksiAdd($nmTransaksi='',$data,$maxId,$tblName){ 
			if($nmTransaksi=='GoodReceive') {
				$this->henry->db->select('accountId');
				$this->henry->db->select('lokasiId');
				$this->henry->db->select('mataUangId');
				$this->henry->db->select('debitKredit');
				$this->henry->db->select('tableTransaksi');
				
				$this->henry->db->from('AssigmentAccounting');
				$this->henry->db->where('AssigmentAccounting.barangId',$data['barangId']);
				$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
				$query=$this->henry->db->get();  
				$jurnal = $query->row_array();  
			
				if($jurnal) 
				{
				
					// get jumlah harga satuan [ada di poList]
					$this->henry->db->select('purchaseOrderHarga');
					$this->henry->db->from('PurchaseOrderList');
					$this->henry->db->where('PurchaseOrderList.purchaseOrderId',$data['purchaseOrderId']);
					$this->henry->db->where('PurchaseOrderList.barangId',$data['barangId']);
					$query2=$this->henry->db->get();
					$resHargaSatuan=$query2->row_array();
					// get Kurs
					$this->henry->db->select('kurs');
					$this->henry->db->from('PurchaseOrder');
					$this->henry->db->where('PurchaseOrder.purchaseOrderId',$data['purchaseOrderId']);
					$query3=$this->henry->db->get();
					$resKurs=$query3->row_array();
					// array utk add data to jurnal
					if($jurnal['debitKredit']=='Debit') 
						{
							$dataToJurnal['ayatJurnalDebit']= $resHargaSatuan['purchaseOrderHarga'];
						}
					elseif($jurnal['debitKredit']=='Kredit') 
						{
							$dataToJurnal['ayatJurnalKredit']=$resHargaSatuan['purchaseOrderHarga'];
						}
					
						$this->henry->db->select('purchaseOrderKode');
						$this->henry->db->from('PurchaseOrder');
						$this->henry->db->where('PurchaseOrder.purchaseOrderId',$data['purchaseOrderId']);
						$queryNoTranDanKet=$this->henry->db->get();
						$resQueryNoTranDanKet=$queryNoTranDanKet->row_array();
						
						
					
					$dataToJurnal['accountId']	=$jurnal['accountId'];
					$dataToJurnal['mataUangId']	=$jurnal['mataUangId'];
					$dataToJurnal['lokasiId']	=$jurnal['lokasiId'];
					$dataToJurnal['tableId']	= $maxId['maxId']; 
					$dataToJurnal['tableName']	= $tblName;
					if ($resKurs['kurs']<=0) {
						$resKurs['kurs']=1;
					}
					$dataToJurnal['kurs']		=$resKurs['kurs'];
					$dataToJurnal['typeJurnalId']	=1;
					$dataToJurnal['userId']	=getUserId();
					$dataToJurnal['ayatJurnalNoTransaksi']	= 'Barang Diterima '.'/'.$resQueryNoTranDanKet['purchaseOrderKode'];
					$dataToJurnal['ayatJurnalKeterangan']	='Good Receive';
					$dataToJurnal['ayatJurnalTanggalTransaksi']	= date('Y-m-d');										
					$dataToJurnal ['ayatJurnalCreateTime'] = date ( 'Y-m-d H:i:s' );
        			$dataToJurnal ['ayatJurnalModifiedTime'] = date ( 'Y-m-d H:i:s' );
				
        			$this->addToJurnal($dataToJurnal);  
				
    			}
    			else 
    			{	
					return 0;
				}
			}
				
	}
	
	///===NOTE : Credit Note = Credit Note adalah jumlah uang nya [jumlah barang  di kali dengan harga per barang==//
	///==== sedang kan retur customer adalah jumlah barang yg diretur ==//
	function cekTransaksiAddCreditNoteList($nmTransaksi='',$data,$maxId,$tblName){
			if($nmTransaksi=='ReturCustomer') { 
				$this->henry->db->select('accountId');
				$this->henry->db->select('lokasiId');
				$this->henry->db->select('mataUangId');
				$this->henry->db->select('debitKredit');
				$this->henry->db->from('AssigmentAccounting');
				$this->henry->db->where('AssigmentAccounting.barangId',$data['barangId']);
				$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
				$query=$this->henry->db->get(); 
				
				if($query) 
				{
					$jurnal = $query->row_array();  
					// get jumlah harga satuan [ada di poList]
					$this->henry->db->select('creditNoteHarga');
					$this->henry->db->select('creditNoteJumlah');
					
					$this->henry->db->from('CreditNoteList');
					//$this->henry->db->where('CreditNoteList.creditNoteListId',$data['creditNoteListId']);
					$this->henry->db->where('CreditNoteList.barangId',$data['barangId']);
					$query2=$this->henry->db->get();
					$resHargaSatuan=$query2->row_array();
					// get Kurs
					$this->henry->db->select('kurs');
					$this->henry->db->from('CreditNote');
					$this->henry->db->where('CreditNote.creditNoteId',$data['creditNoteId']);
					$query3=$this->henry->db->get();
					$resKurs=$query3->row_array();
					// array utk add data to jurnal
					if($jurnal['debitKredit']=='Debit') 
						{
							$dataToJurnal['ayatJurnalDebit']= $resHargaSatuan['creditNoteHarga']*$resHargaSatuan['creditNoteJumlah'];
						}
					elseif($jurnal['debitKredit']=='Kredit') 
						{
							$dataToJurnal['ayatJurnalKredit']=$resHargaSatuan['creditNoteHarga']*$resHargaSatuan['creditNoteJumlah'];
						}
					
					$dataToJurnal['accountId']	=$jurnal['accountId'];
					$dataToJurnal['mataUangId']	=$jurnal['mataUangId'];
					$dataToJurnal['lokasiId']	=$jurnal['lokasiId'];
					$dataToJurnal['tableId']	= $maxId['maxId']; 
					$dataToJurnal['tableName']	= $tblName;
					if ($resKurs['kurs']<=0) {
						$resKurs['kurs']=1;
					}
					$dataToJurnal['kurs']		=$resKurs['kurs'];
					$dataToJurnal['typeJurnalId']	=1;
					$dataToJurnal['userId']	=getUserId();
					$dataToJurnal['ayatJurnalTanggalTransaksi']	= date('Y-m-d');										
					$dataToJurnal ['ayatJurnalCreateTime'] = date ( 'Y-m-d H:i:s' );
        			$dataToJurnal ['ayatJurnalModifiedTime'] = date ( 'Y-m-d H:i:s' );
				
        			$this->addToJurnal($dataToJurnal);
				
    			}
    			else 
    			{	
					return 0;
				}
			}
				
	}
//========transaksi credit note  ====//	
	function cekTransaksiAddCreditNote($nmTransaksi='',$data,$maxId,$tblName) {
			if($nmTransaksi=='CreditCustomer') {
					$this->henry->db->select('accountId');
					$this->henry->db->select('lokasiId');
					$this->henry->db->select('mataUangId');
					$this->henry->db->select('debitKredit');
					$this->henry->db->from('AssigmentAccounting');
				//	$this->henry->db->where('AssigmentAccounting.barangId',$data['barangId']);
					$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
					$query=$this->henry->db->get(); 
				
					if($query) 
						{
							$jurnal = $query->row_array();   
							// get jumlah harga satuan [ada di poList]
							$this->henry->db->select('creditNoteHarga');
							$this->henry->db->from('CreditNote');
							$this->henry->db->where('CreditNote.creditNoteId',$data['creditNoteId']);
							//$this->henry->db->where('CreditNoteList.barangId',$data['barangId']);
							$query2=$this->henry->db->get();
							$resHargaSatuan=$query2->row_array();
							// get Kurs
							$this->henry->db->select('kurs');
							$this->henry->db->from('CreditNote');
							$this->henry->db->where('CreditNote.creditNoteId',$data['creditNoteId']);
							$query3=$this->henry->db->get(); 
							$resKurs=$query3->row_array();
					// array utk add data to jurnal
					if($jurnal['debitKredit']=='Debit') 
						{
							$dataToJurnal['ayatJurnalDebit']= $resHargaSatuan['creditNoteHarga'];
						}
					elseif($jurnal['debitKredit']=='Kredit') 
						{
							$dataToJurnal['ayatJurnalKredit']=$resHargaSatuan['creditNoteHarga'];
						}
					
					$dataToJurnal['accountId']	=$jurnal['accountId'];
					$dataToJurnal['mataUangId']	=$jurnal['mataUangId'];
					$dataToJurnal['lokasiId']	=$jurnal['lokasiId'];
					$dataToJurnal['tableId']	= $maxId['maxId']; 
					$dataToJurnal['tableName']	= $tblName;
					if ($resKurs['kurs']<=0) {
						$resKurs['kurs']=1;
					}
					$dataToJurnal['kurs']		=$resKurs['kurs'];
					$dataToJurnal['typeJurnalId']	=1;
					$dataToJurnal['userId']	=getUserId();
					$dataToJurnal['ayatJurnalTanggalTransaksi']	= date('Y-m-d');										
					$dataToJurnal ['ayatJurnalCreateTime'] = date ( 'Y-m-d H:i:s' );
        			$dataToJurnal ['ayatJurnalModifiedTime'] = date ( 'Y-m-d H:i:s' );
				
        			$this->addToJurnal($dataToJurnal);
				
    			}
    			else 
    			{	
					return 0;
				}
			}
				
	}
	
	//==== transaksi retur suplier ==========/
		function cekTransaksiAddReturSuplier($nmTransaksi='',$data,$maxId,$tblName) {
			if($nmTransaksi=='ReturSuplier') { 
					$this->henry->db->select('accountId');
					$this->henry->db->select('lokasiId');
					$this->henry->db->select('mataUangId');
					$this->henry->db->select('debitKredit');
					$this->henry->db->select('tableTransaksi');
					$this->henry->db->from('AssigmentAccounting');
					$this->henry->db->where('AssigmentAccounting.barangId',$data['barangId']);
					$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
					$query=$this->henry->db->get(); 
					$jurnal = $query->row_array();  
					if($jurnal) 
						{   
								
							$this->henry->db->select('debitNoteHarga');
							$this->henry->db->select('debitNoteJumlah');
							$this->henry->db->from('DebitNoteList');
							$this->henry->db->where('DebitNoteList.debitNoteId',$data['debitNoteId']);
							$this->henry->db->where('DebitNoteList.barangId',$data['barangId']);
							$query2=$this->henry->db->get();
							$resHargaSatuan=$query2->row_array();
							// get Kurs
							$this->henry->db->select('kurs');
							$this->henry->db->select('debitNoteKode');							
							$this->henry->db->from('DebitNote');
							$this->henry->db->where('DebitNote.debitNoteId',$data['debitNoteId']);
							$query3=$this->henry->db->get(); 
							$resKurs=$query3->row_array();
							
					// array utk add data to jurnal
					if($jurnal['debitKredit']=='Debit') 
						{
							$dataToJurnal['ayatJurnalDebit']= $resHargaSatuan['debitNoteHarga']*$resHargaSatuan['debitNoteJumlah'];
						}
					elseif($jurnal['debitKredit']=='Kredit') 
						{
							$dataToJurnal['ayatJurnalKredit']=$resHargaSatuan['debitNoteHarga']*$resHargaSatuan['debitNoteJumlah'];;
						}
					$dataToJurnal['accountId']	=$jurnal['accountId'];
					$dataToJurnal['mataUangId']	=$jurnal['mataUangId'];
					$dataToJurnal['lokasiId']	=$jurnal['lokasiId'];
					$dataToJurnal['tableId']	= $maxId['maxId']; 
					$dataToJurnal['userId']	= getUserId(); 
					$dataToJurnal['tableName']	= $tblName;
					if ($resKurs['kurs']<=0) {
						$resKurs['kurs']=1;
					}
					$dataToJurnal['kurs']		=$resKurs['kurs'];
					$dataToJurnal['typeJurnalId']	=1;
					$dataToJurnal['userId']	=getUserId();
					$dataToJurnal['ayatJurnalTanggalTransaksi']	= date('Y-m-d');
					$dataToJurnal['ayatJurnalNoTransaksi']='Retur Suplier /'.''.$resKurs['debitNoteKode'];
					$dataToJurnal['ayatJurnalKeterangan']	= 'Retur Suplier @ '.''.$resHargaSatuan['debitNoteJumlah'].'/'.$resHargaSatuan['debitNoteHarga'];
					$dataToJurnal ['ayatJurnalCreateTime'] = date ( 'Y-m-d H:i:s' );
        			$dataToJurnal ['ayatJurnalModifiedTime'] = date ( 'Y-m-d H:i:s' );
					$this->addToJurnal($dataToJurnal);
				
    			}
    			else 
    			{
					return 0;
				}
			}
				
	}
	
function cekTransaksiAddDebitNote($nmTransaksi='',$data,$maxId,$tblName) {
			if($nmTransaksi=='DebitNote') {
					$this->henry->db->select('accountId');
					$this->henry->db->select('lokasiId');
					$this->henry->db->select('mataUangId');
					$this->henry->db->select('debitKredit');
					$this->henry->db->from('AssigmentAccounting');
					$this->henry->db->where('AssigmentAccounting.barangId',$data['barangId']);
					$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
					$query=$this->henry->db->get(); 
					$jurnal = $query->row_array();  
					if($jurnal) 
						{
							 
							$this->henry->db->select('debitNoteHarga');
							$this->henry->db->select('debitNoteJumlah');
							
							$this->henry->db->from('DebitNoteList');
							$this->henry->db->where('DebitNoteList.debitNoteId',$data['debitNoteId']);
							$this->henry->db->where('DebitNoteList.barangId',$data['barangId']);
							$query2=$this->henry->db->get();
							$resHargaSatuan=$query2->row_array();
							// get Kurs
							$this->henry->db->select('kurs');
							$this->henry->db->select('debitNoteKode');							
							$this->henry->db->from('DebitNote');
							$this->henry->db->where('DebitNote.debitNoteId',$data['debitNoteId']);
							$query3=$this->henry->db->get(); 
							$resKurs=$query3->row_array();
							
					// array utk add data to jurnal
					if($jurnal['debitKredit']=='Debit') 
						{
							$dataToJurnal['ayatJurnalDebit']= $resHargaSatuan['debitNoteHarga']*$resHargaSatuan['debitNoteJumlah'];
						}
					elseif($jurnal['debitKredit']=='Kredit') 
						{
							$dataToJurnal['ayatJurnalKredit']=$resHargaSatuan['debitNoteHarga']*$resHargaSatuan['debitNoteJumlah'];;
						}
					$dataToJurnal['accountId']	=$jurnal['accountId'];
					$dataToJurnal['mataUangId']	=$jurnal['mataUangId'];
					$dataToJurnal['lokasiId']	=$jurnal['lokasiId'];
					$dataToJurnal['tableId']	= $maxId['maxId']; 
					$dataToJurnal['userId']	= getUserId(); 
					$dataToJurnal['tableName']	= $tblName;
					if ($resKurs['kurs']<=0) {
						$resKurs['kurs']=1;
					}
					$dataToJurnal['kurs']		=$resKurs['kurs'];
					$dataToJurnal['typeJurnalId']	=1;
					$dataToJurnal['userId']	=getUserId();
					$dataToJurnal['ayatJurnalTanggalTransaksi']	= date('Y-m-d');
					$dataToJurnal['ayatJurnalNoTransaksi']='Debit Note /'.''.$resKurs['debitNoteKode'];
					$dataToJurnal['ayatJurnalKeterangan']	= 'Debit Note @ '.''.$resHargaSatuan['debitNoteJumlah'].'/'.$resHargaSatuan['debitNoteHarga'];
					$dataToJurnal ['ayatJurnalCreateTime'] = date ( 'Y-m-d H:i:s' );
        			$dataToJurnal ['ayatJurnalModifiedTime'] = date ( 'Y-m-d H:i:s' );
					$this->addToJurnal($dataToJurnal);
				
    			}
    			else 
    			{
					return 0;
				}
			}
				
	}
	
	
	
	//=======end retur suplier =====//
	function cekTransaksiAddGoodIssue($nmTransaksi='',$data,$maxId,$tblName) {
			if($nmTransaksi=='GoodIssue') {
					$this->henry->db->select('accountId');
					$this->henry->db->select('lokasiId');
					$this->henry->db->select('mataUangId');
					$this->henry->db->select('debitKredit');
					$this->henry->db->from('AssigmentAccounting');
				//	$this->henry->db->where('AssigmentAccounting.barangId',$data['barangId']);
					$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
					$query=$this->henry->db->get(); 
					$jurnal = $query->row_array();  
					if($jurnal) 
						{
					
						//  get jumlah barang
							$this->henry->db->select('suratJalanListJumlahBarang');
							$this->henry->db->from('SuratJalanList');
							$this->henry->db->where('SuratJalanList.suratJalanId',$data['suratJalanId']);
							$queryGetJumBarang=$this->henry->db->get();
							$resQueryJumBarang = $queryGetJumBarang->row_array(); 
							//  get     harga 
						
							$this->henry->db->select('purchaseOrderCustomerId');
							$this->henry->db->select('suratJalanKode');
							$this->henry->db->select('purchaseOrderCustomerId');
							
							$this->henry->db->from('SuratJalan');
							$this->henry->db->where('SuratJalan.suratJalanId',$data['suratJalanId']);
							$query2=$this->henry->db->get();
							$resPurchaseOrderId=$query2->row_array();
							// get Kurs
							$this->henry->db->select('kurs');
							$this->henry->db->from('PurchaseOrderCustomer');
							$this->henry->db->where('PurchaseOrderCustomer.purchaseOrderCustomerId',$resPurchaseOrderId['purchaseOrderCustomerId']);
							$query3=$this->henry->db->get(); 
							$resKurs=$query3->row_array();
							
							// get harga barang
							
							$this->henry->db->select('purchaseOrderCustomerListHarga');
							$this->henry->db->from('PurchaseOrderCustomerList');
							$this->henry->db->where('PurchaseOrderCustomerList.purchaseOrderCustomerId',$resPurchaseOrderId['purchaseOrderCustomerId']);
							$query4=$this->henry->db->get(); 
							$resHargaSatuan=$query4->row_array();
							
							
							
					// array utk add data to jurnal
					if($jurnal['debitKredit']=='Debit') {
							$dataToJurnal['ayatJurnalDebit']= $resHargaSatuan['purchaseOrderCustomerListHarga']*$resQueryJumBarang['suratJalanListJumlahBarang'];
						}
					elseif($jurnal['debitKredit']=='Kredit') {
							$dataToJurnal['ayatJurnalDebit']= $resHargaSatuan['purchaseOrderCustomerListHarga']*$resQueryJumBarang['suratJalanListJumlahBarang'];
					}
						$dataToJurnal['accountId']	=$jurnal['accountId'];
						$dataToJurnal['mataUangId']	=$jurnal['mataUangId'];
						$dataToJurnal['lokasiId']	=$jurnal['lokasiId'];
						$dataToJurnal['tableId']	= $maxId['maxId'];
					
						 
						$dataToJurnal['tableName']	= $tblName;
					if ($resKurs['kurs']<=0) {
						$resKurs['kurs']=1;
					}
						$dataToJurnal['kurs']		=$resKurs['kurs'];
						$dataToJurnal['typeJurnalId']	=1;
						$dataToJurnal['userId']	=getUserId();	
						$dataToJurnal['ayatJurnalNoTransaksi']	='Good Issue / '.''. $resPurchaseOrderId['suratJalanKode'];
						$dataToJurnal['ayatJurnalKeterangan']	= 'Good Issue @'.''.$resQueryJumBarang['suratJalanListJumlahBarang'].'/'.$resHargaSatuan['purchaseOrderCustomerListHarga'];	
							
						$dataToJurnal['ayatJurnalTanggalTransaksi']	= date('Y-m-d');										
						$dataToJurnal ['ayatJurnalCreateTime'] = date ( 'Y-m-d H:i:s' );
	        			$dataToJurnal ['ayatJurnalModifiedTime'] = date ( 'Y-m-d H:i:s' );
					
	        			$this->addToJurnal($dataToJurnal);
				
    			}
    			else 
    			{
					return 0;
				}
			}
				
	}
	
  	public function updateTotal($tblId,$tblName,$data) {
        if (! $tblId || !$tblName || ! $data)
            return array ();
        $this->henry->db->from ('AyatJurnal');
        $this->henry->db->where ( 'tableId', $tblId );
        $this->henry->db->where ( 'tableName', $tblName );
        $this->henry->db->limit ( 1 );
        return $this->henry->db->update ( 'AyatJurnal', $data ) && ($this->henry->db->affected_rows () > 0) ? true : false;
    }
    
    
	//======== start Billing ===================//	
	function cekTransaksiBilling($nmTransaksi='',$data,$maxId,$tblName) {
		if($nmTransaksi=='Billing') {
			$this->henry->db->select('accountId');
			$this->henry->db->select('lokasiId');
			$this->henry->db->select('mataUangId');
			$this->henry->db->select('debitKredit');
			$this->henry->db->select('tableTransaksi');
			
			$this->henry->db->from('AssigmentAccounting');
			$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
			$query=$this->henry->db->get(); 
			$result=$query->row_array();
			
			if($result) {
			// cek apakah invoice dgn id='?' sudah ada di db// jika tidak ada add/insert 
			// jika sudah ada update data dgn invoiceId sekian yg di ayatJurnal... oke bro
				
			// start query check
					
			
			
			 $this->henry->db->select('count(tableId) as count');
			$this->henry->db->select('tableId');
			$this->henry->db->from('AyatJurnal');
			$this->henry->db->where('AyatJurnal.tableId',$data['invoiceId']);
			$this->henry->db->where('AyatJurnal.tableName',$tblName);
							
			$queryCekId=$this->henry->db->get();
			$resQueryCekId = $queryCekId->row_array();
			$tblId=$resQueryCekId['tableId'];
			
						
			if($resQueryCekId['count'] > 0 ) { // update data di jurnal
			
				$this->henry->db->select('invoiceTotal');
				$this->henry->db->from('InvoiceCustomer');
				$this->henry->db->where('InvoiceCustomer.invoiceId',$data['invoiceId']);
				$queryGetTotal=$this->henry->db->get();
				$resQueryGetTotal = $queryGetTotal->row_array(); 
				$data=array();
				
				if ($result['debitKredit']=='Debit') {
						$data['ayatJurnalDebit']=$resQueryGetTotal['invoiceTotal'];
					} 
					elseif(($result['debitKredit']=='Kredit') ) {
						$data['ayatJurnalKredit']=$resQueryGetTotal['invoiceTotal'];
					}
				
				if($resQueryGetTotal) {
						$this->updateTotal($tblId,$tblName,$data);
					} 
				
			}
			else { // insert data  di jurnal / or add
				$this->henry->db->select('accountId');
				$this->henry->db->select('lokasiId');
				$this->henry->db->select('mataUangId');
				$this->henry->db->select('debitKredit');
				$this->henry->db->from('AssigmentAccounting');
				$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
				$query=$this->henry->db->get(); 
				$jurnal=$query->row_array();
					
					
				$this->henry->db->select('invoiceTotal');
				$this->henry->db->select('invoiceId');							
				$this->henry->db->from('InvoiceCustomer');
				$this->henry->db->where('InvoiceCustomer.invoiceId',$data['invoiceId']);
				$query=$this->henry->db->get();
				$resQuery = $query->row_array(); 
							
							
							
				if($jurnal['debitKredit']=='Debit') {
					$jurnal['ayatJurnalDebit']= $resQuery['invoiceTotal'];
				}
				elseif($jurnal['debitKredit']=='Kredit') {
					$jurnal['ayatJurnalDebit']= $resQuery['invoiceTotal'];
				}
				$dataToJurnal['accountId']	=$jurnal['accountId'];
				$dataToJurnal['mataUangId']	=$jurnal['mataUangId'];
				$dataToJurnal['lokasiId']	=$jurnal['lokasiId'];
				$dataToJurnal['tableId']	= $maxId['maxId']; 
				$dataToJurnal['tableName']	= $tblName;
						
						
						// get Id Purchase Order Customer
							$this->henry->db->select('purchaseOrderCustomerId');
							$this->henry->db->select('invoiceKode');
							
							$this->henry->db->from('InvoiceCustomer');
							$this->henry->db->where('InvoiceCustomer.invoiceId',$data['invoiceId']);
							$queryIdPOC=$this->henry->db->get();
							$resIdPOC=$queryIdPOC->row_array();

							if($resIdPOC) { // get nilai kurs di POC
								$this->henry->db->select('kurs');
								$this->henry->db->from('PurchaseOrderCustomer');
								$this->henry->db->where('PurchaseOrderCustomer.purchaseOrderCustomerId',$resIdPOC['purchaseOrderCustomerId']);
								$queryKurs=$this->henry->db->get();
								$resKurs=$queryKurs->row_array();
							}
						if($result['debitKredit']=='Debit') {
								$dataToJurnal['ayatJurnalDebit']= $data['invoiceCustomerListHargaSatuan']* $data['invoiceCustomerListJumlah'];
						}
						elseif($result['debitKredit']=='Kredit') {
							$dataToJurnal['ayatJurnalDebit']= $data['invoiceCustomerListHargaSatuan']* $data['invoiceCustomerListJumlah'];
						}
						if ($resKurs['kurs']<=0) {
							$resKurs['kurs']=1;
						}
						$dataToJurnal['kurs']=$resKurs['kurs'];
						$dataToJurnal['typeJurnalId']=1;
						$dataToJurnal['userId']	=getUserId();
						$dataToJurnal['ayatJurnalNoTransaksi']	= 'Billing / '.''.$resIdPOC['invoiceKode'];
						$dataToJurnal['ayatJurnalKeterangan']	= 'Billing @'.''.$data['invoiceCustomerListJumlah'].'/'.$data['invoiceCustomerListHargaSatuan'];
						$dataToJurnal['ayatJurnalTanggalTransaksi']	= date('Y-m-d');										
						$dataToJurnal ['ayatJurnalCreateTime'] = date ( 'Y-m-d H:i:s' );
	        			$dataToJurnal ['ayatJurnalModifiedTime'] = date ( 'Y-m-d H:i:s' );
						$this->addToJurnal($dataToJurnal);						 
							}
			
			}else {
			
				return 0;
		}}
				
	}
	//========= end Billing ===================/
	
	
	//=======Start Credit Note function =====//
	function cekTransaksiCreditNote($nmTransaksi='',$data,$maxId,$tblName) {
		if($nmTransaksi=='CreditNote') {
			$this->henry->db->select('accountId');
			$this->henry->db->select('lokasiId');
			$this->henry->db->select('mataUangId');
			$this->henry->db->select('debitKredit');
			$this->henry->db->from('AssigmentAccounting');
			$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
			$this->henry->db->where('AssigmentAccounting.barangId',$data['barangId']);
			$query=$this->henry->db->get(); 
			$result=$query->row_array();
			
			$this->henry->db->select('accountId');
			$this->henry->db->select('lokasiId');
			$this->henry->db->select('mataUangId');
			$this->henry->db->select('debitKredit');
			$this->henry->db->select('tableTransaksi');
			$this->henry->db->from('AssigmentAccounting');
			$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
			$this->henry->db->where('AssigmentAccounting.barangId',$data['barangId']);
			$query=$this->henry->db->get(); 
			$jurnal=$query->row_array();
				
			if($jurnal) {
					$this->henry->db->select('kurs');
					$this->henry->db->select('creditNoteId');	
					$this->henry->db->select('creditNoteKode');						
					$this->henry->db->from('CreditNote');
					$this->henry->db->where('CreditNote.creditNoteId',$data['creditNoteId']);
					$query=$this->henry->db->get();
					$resQuery = $query->row_array(); 
					if($result['debitKredit']=='Debit') {
						$dataToJurnal['ayatJurnalDebit']= $data['creditNoteHarga']* $data['creditNoteJumlah'];
					}
					elseif($result['debitKredit']=='Kredit') {
						$dataToJurnal['ayatJurnalDebit']= $data['creditNoteHarga']* $data['creditNoteJumlah'];
					}
					
					$dataToJurnal['accountId']	=$jurnal['accountId'];
					$dataToJurnal['mataUangId']	=$jurnal['mataUangId'];
					$dataToJurnal['kurs']	=$resQuery['kurs'];
					$dataToJurnal['lokasiId']	=$jurnal['lokasiId'];
					$dataToJurnal['tableId']	= $maxId['maxId']; 
					$dataToJurnal['tableName']	= $tblName;
					$dataToJurnal['typeJurnalId']=1;
					$dataToJurnal['userId']	=getUserId();
					$dataToJurnal['ayatJurnalNoTransaksi']	=$resQuery['creditNoteKode'];
					$dataToJurnal['ayatJurnalKeterangan']	= 'Credit Note  @'.''.$data['creditNoteJumlah'].'/'.$data['creditNoteHarga'];
					$dataToJurnal['ayatJurnalTanggalTransaksi']	= date('Y-m-d');										
					$dataToJurnal ['ayatJurnalCreateTime'] = date ( 'Y-m-d H:i:s' );
			        $dataToJurnal ['ayatJurnalModifiedTime'] = date ( 'Y-m-d H:i:s' );
					$this->addToJurnal($dataToJurnal);		
			}else {
				return 0;
			}
		}
	}
				
	
	//================= end Retur Customer ============//
	
			
	function cekTransaksiReturCustomer($nmTransaksi='',$data,$maxId,$tblName) {
		if($nmTransaksi=='ReturCustomer') {
			$this->henry->db->select('accountId');
			$this->henry->db->select('lokasiId');
			$this->henry->db->select('mataUangId');
			$this->henry->db->select('debitKredit');
			$this->henry->db->select('tableTransaksi');
			$this->henry->db->from('AssigmentAccounting');
			$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
			$this->henry->db->where('AssigmentAccounting.barangId',$data['barangId']);
			$query=$this->henry->db->get(); 
			$result=$query->row_array();
			
			$this->henry->db->select('accountId');
			$this->henry->db->select('lokasiId');
			$this->henry->db->select('mataUangId');
			$this->henry->db->select('debitKredit');
			$this->henry->db->select('tableTransaksi');
			$this->henry->db->from('AssigmentAccounting');
			$this->henry->db->where('AssigmentAccounting.tableTransaksi',$nmTransaksi);
			$this->henry->db->where('AssigmentAccounting.barangId',$data['barangId']);
			$query=$this->henry->db->get(); 
			$jurnal=$query->row_array();  
			if ($jurnal) {
				$this->henry->db->select('kurs');
				$this->henry->db->select('creditNoteId');	
				$this->henry->db->select('creditNoteKode');						
				$this->henry->db->from('CreditNote');
				$this->henry->db->where('CreditNote.creditNoteId',$data['creditNoteId']);
				$query=$this->henry->db->get();
				$resQuery = $query->row_array(); 
			if($result['debitKredit']=='Debit') {
				$dataToJurnal['ayatJurnalDebit']= $data['creditNoteHarga']* $data['creditNoteJumlah'];
			}
			elseif($result['debitKredit']=='Kredit') {
				$dataToJurnal['ayatJurnalDebit']= $data['creditNoteHarga']* $data['creditNoteJumlah'];
			}
						$dataToJurnal['accountId']	=$jurnal['accountId'];
						$dataToJurnal['mataUangId']	=$jurnal['mataUangId'];
						$dataToJurnal['kurs']		=$resQuery['kurs'];
						$dataToJurnal['lokasiId']	=$jurnal['lokasiId'];
						$dataToJurnal['tableId']	= $maxId['maxId']; 
						$dataToJurnal['tableName']	= $tblName;
						$dataToJurnal['typeJurnalId']=1;
						$dataToJurnal['userId']	=getUserId();
						$dataToJurnal['ayatJurnalNoTransaksi']	=$resQuery['creditNoteKode'];
						$dataToJurnal['ayatJurnalKeterangan']	= 'Retur Customer  @'.''.$data['creditNoteJumlah'].'/'.$data['creditNoteHarga'];
						$dataToJurnal['ayatJurnalTanggalTransaksi']	= date('Y-m-d');										
						$dataToJurnal ['ayatJurnalCreateTime'] = date ( 'Y-m-d H:i:s' );
	        			$dataToJurnal ['ayatJurnalModifiedTime'] = date ( 'Y-m-d H:i:s' );
	    				$this->addToJurnal($dataToJurnal);		
			}
		}else {
			return 0;
		}
	}
	//================= end Retur Customer ============//
	

	
			
	
}