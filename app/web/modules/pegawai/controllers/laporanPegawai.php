<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

class laporanPegawai extends Controller {
    public function __construct() {
        parent::__construct ();
        $this->_data = array ();
        $this->load->model ( 'laporanpegawai_model' );
        $this->load->library(array("fpdf/mypdf"));
        isController('pegawai','laporanPegawai');
    }
    protected function _view($template, $data = array(), $result = false) {
        if ($data && is_array ( $data )) {
            return $this->load->view ( $template, $data, $result );
        }
        return $this->load->view ( $template, $this->_data, $result );
    }
    public function index() {
        redirect ( 'pegawai/laporanPegawai/view' );
    }
    
    public function view() {
    	if (! isAccess ( 'pegawai', 'laporanPegawai', 'view'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ) );
        
        $array['page'] = (int) $array['page'];
        
        
        $getArray =  $_POST ? $_POST : $array;
        $where = array();
        $where ['status'] = get_data($getArray , 'status' ) ;
        $where['dateFrom'] 	= get_data($getArray , 'dateFrom' );
		$where['dateTo'] 	= get_data($getArray , 'dateTo' ); 
		
        $dataPaging = uri_data( $where );
        
        $this->load->library('pagination');
        $total = $this->laporanpegawai_model->getCount( $where );
        if (($array['page'] + 1) > $total)
            $array['page'] = 0;
        $limit = $this->config->item('pegawai_limit');
        $config = $this->config->item('paging');
        $config['base_url'] = site_url('pegawai/laporanPegawai/view/page/');
        $config['uri_segment'] = 4;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        
        $this->pagination->initialize($config);
        $this->_data['paging'] =  $this->pagination->create_links();
        
        $dataView = $this->laporanpegawai_model->getList($limit,$array['page'],$where);
         
        $arrayStatus = array_merge( $this->config->item("statusKaryawan") , array("all"=>"All") );
        $radio = "";
        foreach( $arrayStatus as $key => $val ){
        	$select = get_data($getArray,"status") == $key ? "checked" : "" ;
			$radio .= "<input  type='radio' name='status' value='$key' id='$key' $select/><label for='$key'>$val</label>";
    	} 
    	$this->_data['htmlstatusKaryawan'] =  $radio ;
        
        $this->_data['htmlLinkEksport'] = isAccess('pegawai','laporanPegawai','export') &&  $dataView  ? anchor('pegawai/laporanPegawai/option/'.$dataPaging['link'], '<span class="icon_text pack _189"></span>Eksport', 'class="button themed fr"') : '' ; 
        $this->_data['dataView'] = $dataView;
        $this->_data['uri_to_assoc'] = $array;
        $this->_data['htmlDateFrom'] = form_input(array("name"=>"dateFrom","id"=>"dateFrom","value"=>get_data($getArray, 'dateFrom') ,"class"=>"form-field"));
        $this->_data['htmlDateTo'] = form_input(array("name"=>"dateTo","id"=>"dateTo","value"=> get_data($getArray, 'dateTo') ,"class"=>"form-field"));

        $this->_view ( 'pegawai/laporanPegawaiView' );
    }
    
    
public function option(){
    	
    	$array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ,"dateFrom" ,"dateTo","approval","status") );
    	
    		
    	$where = array();
        $where ['status'] = get_data($array , 'status' ) ;
        $where['dateFrom'] 	= get_data($array , 'dateFrom' );
		$where['dateTo'] 	= get_data($array , 'dateTo' ); 
        						
        $datapaging	= uri_data( $where );
    		   
    	$this->_data['history'] = anchor("pegawai/laporanPegawai/view/".$datapaging['link'],"<span class='icon_text preview'></span>Export Preview",'class="button white"');
    	$this->_data['link']	= "pegawai/laporanPegawai/export/".$datapaging['link'];
    	
    	$this->_data['optionpage']	= $this->config->item("option_label");  
		$this->_data['optionpagedefault']	=  $this->config->item("optionpagedefault");
		 
    	
    	$this->_view("pegawai/laporanPegawaiOption");
    } 
    
    public function export(){
    	 
    	if (! isAccess ( 'pegawai', 'laporanPegawai', 'export'))
            redirect (); 
        $array = $this->uri->uri_to_assoc ( 3, array ('id', 'action', 'page' ,"dateFrom" ,"dateTo","approval",'status') ); 
        
        if($_POST) foreach( $_POST as $key => $val) $$key = $val;
         
        
   		$where = array();
        $where ['status'] = get_data($array , 'status' ) ;
        $where['dateFrom'] 	= get_data($array , 'dateFrom' );
		$where['dateTo'] 	= get_data($array , 'dateTo' ); 
		    
        $dataExport = $this->laporanpegawai_model->getListPegawai(  null,null , $where );
        
        $this->_data['note']		 = isset($note) ? $note : "cancel" ;
        $this->_data['tempat']		 = $tempat; 
        $this->_data['tanggal']		 = ina_date($tanggal);
        $this->_data['jabatan']		 = $jabatan;
        $this->_data['namaPersonelAcc']	 = $namaPersonelAcc; 
        
        $this->_data['title']	 = "Laporan Kepegawaian - ".ucwords( $array['status'] );
        $this->_data['where']	 = $where; 
        $this->_data['periode']	 = "Periode ".ina_date($array['dateFrom'])." Sampai ".ina_date($array['dateTo']) ;
        $this->_data['dataExport'] = $dataExport;  
    	
    	$this->_view("xReport/laporanPegawaiPdfBentukI");
    }
    
}