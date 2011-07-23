<?php
$config['menu'] = array(

  array(
    'title' => 'Beranda',
    'url' => '',
    'is_url' => true,
    'accessModule' => false,
    'accessController' => false,
    'accessAction' => false,
    'is_child'=> false,
    'child' =>  array()
  ),
  array(
    'title' => 'Administrasi Pegawai',
    'url' => '',
    'is_url' => false,
  	'module' => 'pegawai',
    'accessModule' => false,
    'accessController' => false,
    'accessAction' => false,
    'is_child'=> true,
    'child' =>  array(
  		array(
        'title' => 'Data Referensi',
        'url' => 'pegawai/master/view',
        'is_url' => true,
        'accessModule' => false,
        'accessController' => false,
  		'accessAction' => array(array('module'=>'pegawai','controller'=>'masterPegawai','action'=>'view')),
        'is_child'=> true,
        'child' =>  array()
      ),
      array(
        'title' => 'Daftar Pegawai',
        'url' => false,
        'is_url' => false,
        'accessModule' => false,
        'accessController' => false,
       	'accessAction' => false,
        'is_child'=> true,
        'child' =>  array(
				array(
					'title' => 'Pegawai',
					'url' => 'pegawai/pegawai/view',
					'is_url' => true,
					'accessModule' => false,
					'accessController' => false,
					'accessAction' => array(array('module'=>'pegawai','controller'=>'pegawai','action'=>'view')),
					'is_child'=> true,
					'child' =>  array(
									array(
										'title' => 'Daftar Pegawai',
										'url' => 'pegawai/pegawai/view',
										'is_url' => true,
										'accessModule' => false,
										'accessController' => false,
										'accessAction' => array(array('module'=>'pegawai','controller'=>'pegawai','action'=>'view')),
										'is_child'=> true,
										'child' =>  array()
									),
									array(
										'title' => 'Tambah Pegawai',
										'url' => 'pegawai/pegawai/add',
										'is_url' => true,
										'accessModule' => false,
										'accessController' => false,
										'accessAction' => array(array('module'=>'pegawai','controller'=>'pegawai','action'=>'add')),
										'is_child'=> true,
										'child' =>  array()
									),
				
					)
				),
				array(
					'title' => 'Lowongan',
					'url' => 'pegawai/vacancy/view',
					'is_url' => true,
					'accessModule' => false,
					'accessController' => false,
					'accessAction' => array(array('module'=>'pegawai','controller'=>'vacancy','action'=>'view')),
					'is_child'=> true,
					'child' =>  array(
									array(
										'title' => 'Daftar Lowongan',
										'url' => 'pegawai/vacancy/view',
										'is_url' => true,
										'accessModule' => false,
										'accessController' => false,
										'accessAction' => array(array('module'=>'pegawai','controller'=>'vacancy','action'=>'view')),
										'is_child'=> true,
										'child' =>  array()
									),
									array(
										'title' => 'Tambah Lowongan',
										'url' => 'pegawai/vacancy/add',
										'is_url' => true,
										'accessModule' => false,
										'accessController' => false,
										'accessAction' => array(array('module'=>'pegawai','controller'=>'vacancy','action'=>'add')),
										'is_child'=> true,
										'child' =>  array()
									),
				
					)
				),
				array(
					'title' => 'Pelamar',
					'url' => 'pegawai/pelamar/view',
					'is_url' => true,
					'accessModule' => false,
					'accessController' => false,
					'accessAction' => array(array('module'=>'pegawai','controller'=>'pelamar','action'=>'view')),
					'is_child'=> true,
					'child' =>  array(
									array(
										'title' => 'Daftar Pelamar',
										'url' => 'pegawai/pelamar/view',
										'is_url' => true,
										'accessModule' => false,
										'accessController' => false,
										'accessAction' => array(array('module'=>'pegawai','controller'=>'pelamar','action'=>'view')),
										'is_child'=> true,
										'child' =>  array()
									),
									array(
										'title' => 'Tambah Pelamar',
										'url' => 'pegawai/kandidat/add',
										'is_url' => true,
										'accessModule' => false,
										'accessController' => false,
										'accessAction' => array(array('module'=>'pegawai','controller'=>'pelamar','action'=>'add')),
										'is_child'=> true,
										'child' =>  array()
									),
					)
				),
			)
  	),
        array(
	    'title' => 'Kontrak',
	    'url' => 'pegawai/kontrakPegawai/view',
	    'is_url' => true,
	    'accessModule' => false,
	    'accessController' => false,
	    'accessAction' => array(array('module'=>'pegawai','controller'=>'kontrakPegawai','action'=>'view')),
	    'is_child'=> true,
	    'child' =>  array()
	),
        array(
        'title' => 'Laporan',
        'url' => '',
        'is_url' => false,
        'accessModule' => false,
        'accessController' => false,
       	'accessAction' => false,
        'is_child'=> true,
        'child' =>  array(
				array(
					'title' => 'Pegawai',
					'url' => 'pegawai/laporanPegawai/view',
					'is_url' => true,
					'accessModule' => false,
					'accessController' => false,
					'accessAction' => array(array('module'=>'pegawai','controller'=>'laporanPegawai','action'=>'view')),
					'is_child'=> true,
					'child' =>  array()
				),
                                array(
					'title' => 'Rekaman Hutang',
					'url' => 'pegawai/hutang/view',
					'is_url' => true,
					'accessModule' => false,
					'accessController' => false,
					'accessAction' => array(array('module'=>'pegawai','controller'=>'rekamanHutang','action'=>'view')),
					'is_child'=> true,
					'child' =>  array()
				),
			)
        ),
        
        )
    ),
    array(
    'title' => 'Absensi',
    'url' => '',
    'is_url' => false,
  	'module' => 'absensi',
    'accessModule' => false,
    'accessController' => false,
    'accessAction' => false,
    'is_child'=> true,
    'child' =>  array(
  	array(
        'title' => 'Data Absen',
        'url' => '',
        'is_url' => false,
        'accessModule' => false,
        'accessController' => false,
       	'accessAction' => false,
        'is_child'=> true,
        'child' =>  array(
				array(
					'title' => 'Master Absensi',
					'url' => 'absensi/masterAbsen/view',
					'is_url' => true,
					'accessModule' => false,
					'accessController' => false,
					'accessAction' => array(array('module'=>'absensi','controller'=>'masterAbsen','action'=>'view')),
					'is_child'=> true,
					'child' =>  array()
				),
				array(
					'title' => 'Rekaman Absensi',
					'url' => 'absensi/rekamanAbsen/view',
					'is_url' => true,
					'accessModule' => false,
					'accessController' => false,
					'accessAction' => array(array('module'=>'absensi','controller'=>'rekamanAbsen','action'=>'view')),
					'is_child'=> true,
					'child' =>  array()
				),
                              )
            ),
            array(
        'title' => 'Data Cuti',
        'url' => '',
        'is_url' => false,
        'accessModule' => false,
        'accessController' => false,
       	'accessAction' => false,
        'is_child'=> true,
        'child' =>  array(
				array(
					'title' => 'Master Jenis Cuti',
					'url' => 'absensi/jenisCuti/view',
					'is_url' => true,
					'accessModule' => false,
					'accessController' => false,
					'accessAction' => array(array('module'=>'absensi','controller'=>'jenisCuti','action'=>'view')),
					'is_child'=> true,
					'child' =>  array()
				),
				array(
					'title' => 'Rekaman Cuti',
					'url' => 'absensi/cuti/view',
					'is_url' => true,
					'accessModule' => false,
					'accessController' => false,
					'accessAction' => array(array('module'=>'absensi','controller'=>'rekamanCuti','action'=>'view')),
					'is_child'=> true,
					'child' =>  array(
										array(
											'title' => 'Daftar Pegawai Cuti',
											'url' => 'absensi/cuti/view',
											'is_url' => true,
											'accessModule' => false,
											'accessController' => false,
											'accessAction' => array(array('module'=>'absensi','controller'=>'rekamanCuti','action'=>'view')),
											'is_child'=> true,
											'child' =>  array()
										) ,
										array(
											'title' => 'Tambah Pegawai Cuti',
											'url' => 'absensi/cuti/add',
											'is_url' => true,
											'accessModule' => false,
											'accessController' => false,
											'accessAction' => array(array('module'=>'absensi','controller'=>'rekamanCuti','action'=>'view')),
											'is_child'=> true,
											'child' =>  array()
										) ,
					)
				) 
			)
            ),
        )
    ),
    
    array(
    'title' => 'Penilaian Pegawai',
    'url' => '',
    'is_url' => false,
  	'module' => 'penilaian',
    'accessModule' => false,
    'accessController' => false,
    'accessAction' => false,
    'is_child'=> true,
    'child' =>  array(
  	array(
        'title' => 'Penilaian Individu',
        'url' => 'penilaian/penilaianIndividu/view',
        'is_url' => true,
        'accessModule' => false,
        'accessController' => false,
  		'accessAction' => array(array('module'=>'penilaian','controller'=>'penilaianIndividu','action'=>'view')),
        'is_child'=> true,
        'child' =>  array()
        ),
        array(
        'title' => 'Penilaian Kelompok',
        'url' => 'penilaian/penilaianKelompok/view',
        'is_url' => true,
        'accessModule' => false,
        'accessController' => false,
  		'accessAction' => array(array('module'=>'penilaian','controller'=>'penilaianKelompok','action'=>'view')),
        'is_child'=> true,
        'child' =>  array()
        ),
        array(
        'title' => 'Rekapitulasi Penilaian',
        'url' => 'penilaian/rekapPenilaian/view',
        'is_url' => true,
        'accessModule' => false,
        'accessController' => false,
  		'accessAction' => array(array('module'=>'penilaian','controller'=>'rekapPenilaian','action'=>'view')),
        'is_child'=> true,
        'child' =>  array()
        ),
    )
),
    array(
    'title' => 'Payroll',
    'url' => '',
    'is_url' => false,
    'module' => 'sales',
    'accessModule' => false,
    'accessController' => false,
    'accessAction' => false,
    'is_child'=> true,
    'child' =>  array(
   array(
        'title' => 'Tunjangan dan Potongan',
        'url' => 'sales/penawaran/view',
        'is_url' => true,
        'accessModule' => false,
        'accessController' => false,
        'accessAction' => array(array('module'=>'sales','controller'=>'penawaran','action'=>'view')),
        'is_child'=> true,
        'child' =>  array()
  		),
   array(
        'title' => 'Formula Gaji',
        'url' => 'sales/poCustomer/view',
        'is_url' => true,
        'accessModule' => false,
        'accessController' => false,
        'accessAction' => array(array('module'=>'sales','controller'=>'poCustomer','action'=>'view')),
        'is_child'=> true,
        'child' =>  array()
  		),
//  array(
//        'title' => 'Sales Order',
//        'url' => 'sales/salesOrder/view',
//        'is_url' => true,
//        'accessModule' => false,
//        'accessController' => false,
//        'accessAction' => false,
//        'is_child'=> true,
//        'child' =>  array()
//  		),
   	array(
        'title' => 'Periode Penggajian',
        'url' => 'sales/suratJalan/view',
        'is_url' => true,
        'accessModule' => false,
        'accessController' => false,
        'accessAction' => array(array('module'=>'sales','controller'=>'suratJalan','action'=>'view')),
        'is_child'=> true,
        'child' =>  array()
  		),
  	array(
        'title' => 'Cetak Laporan',
        'url' => '',
        'is_url' => false,
        'accessModule' => false,
        'accessController' => false,
        'accessAction' => false,
    	'accessControllerList' => array(
                                     array('module'=>'sales','controller'=>'komisiCustomer'),
                                     array('module'=>'sales','controller'=>'komisiSales'),
                                 ),
        'is_child'=> true,
        'child' =>  array(
  		array(
        	'title' => 'Jamsostek',
        	'url' => 'sales/komisiCustomer/add',
        	'is_url' => true,
        	'accessModule' => false,
        	'accessController' => false,
       	 	'accessAction' => array(array('module'=>'sales','controller'=>'komisiCustomer','action'=>'view')),
        	'is_child'=> true,
        	'child' =>  array()
  			),
  		array(
        	'title' => 'Slip Gaji',
        	'url' => 'sales/komisiSales/add',
        	'is_url' => true,
        	'accessModule' => false,
        	'accessController' => false,
       	 	'accessAction' => array(array('module'=>'sales','controller'=>'komisiSales','action'=>'view')),
        	'is_child'=> true,
        	'child' =>  array()
  			),
		array(
        	'title' => 'PPh 21',
        	'url' => 'sales/komisiSales/add',
        	'is_url' => true,
        	'accessModule' => false,
        	'accessController' => false,
       	 	'accessAction' => array(array('module'=>'sales','controller'=>'komisiSales','action'=>'view')),
        	'is_child'=> true,
        	'child' =>  array()
  			),
		array(
        	'title' => 'SPT',
        	'url' => 'sales/komisiSales/add',
        	'is_url' => true,
        	'accessModule' => false,
        	'accessController' => false,
       	 	'accessAction' => array(array('module'=>'sales','controller'=>'komisiSales','action'=>'view')),
        	'is_child'=> true,
        	'child' =>  array()
  			),	
		)
  	),
	)
	),

  // array(
    // 'title' => 'Data Master',
    // 'url' => '',
    // 'is_url' => false,
  	// 'module' => 'master',
    // 'accessModule' => array('master'),
    // 'accessController' => false,
    // 'accessAction' => false,
    // 'is_child'=> true,
    // 'child' =>  array(
      // array(
        // 'title' => 'Suplier',
        // 'url' => '',
        // 'is_url' => false,
        // 'accessModule' => false,
        // 'accessController' => false,
        // 'accessAction' => false,
      	// 'accessControllerList' => array(
                                     // array('module'=>'master','controller'=>'grupsuplier'),
                                     // array('module'=>'master','controller'=>'suplier'),
                                  // ),
        // 'is_child'=> true,
        // 'child' =>  array(
       	// array(
        	// 'title' => 'Grup Suplier',
        	// 'url' => 'master/grupsuplier/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'finance','controller'=>'grupsuplier','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
        // array(
        	// 'title' => 'Nama Suplier',
        	// 'url' => 'master/suplier/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'suplier','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
      	// )
      // ), 
      // array(
        // 'title' => 'Keuangan',
        // 'url' => '',
        // 'is_url' => false,
        // 'accessModule' => false,
        // 'accessController' => false,
        // 'accessAction' => false,
      	// 'accessControllerList' => array(
                                     // array('module'=>'master','controller'=>'matauang'),
                                     // array('module'=>'master','controller'=>'kurs'),
                                     // array('module'=>'master','controller'=>'jenisfakturpajak'),
                                  // ),
        // 'is_child'=> true,
        // 'child' =>  array(
      		// array(
        	// 'title' => 'Mata Uang',
        	// 'url' => 'master/matauang/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'matauang','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
      
      	// array(
        	// 'title' => 'Kurs',
        	// 'url' => 'master/kurs/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'kurs','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
      	// array(
        	// 'title' => 'Jenis Faktur Pajak ',
        	// 'url' => 'master/jenisfakturpajak/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'jenisfakturpajak','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
      	
      	// /*array(
        	// 'title' => 'Type Pajak ',
        	// 'url' => 'master/typePajak/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => false,
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),*/
      	
      	// array(
        // 'title' => 'Chart of Account',
        // 'url' => '',
        // 'is_url' => false,
        // 'accessModule' => false,
        // 'accessController' => false,
        // 'accessAction' => false,
      	// 'accessControllerList' => array(
                                     // array('module'=>'master','controller'=>'accountClassification'),
                                     // array('module'=>'master','controller'=>'typeAccount'),
                                     // array('module'=>'master','controller'=>'account'),
                                     // array('module'=>'master','controller'=>'jurnalkodeAccount'),
                                  // ),
        // 'is_child'=> true,
        // 'child' =>  array(
      					 	// array(
     	   					// 'title' => 'Account Classification',
        					// 'url' => 'master/accountClassification/view',
        					// 'is_url' => true,
        					// 'accessModule' => false,
        					// 'accessController' => false,
        					// 'accessAction' => array(array('module'=>'master','controller'=>'accountClassification','action'=>'view')),
        					// 'is_child'=> true,
        					// 'child' =>  array()
      					// ),
     
       	 	// array(
        		// 'title' => 'Type Account ',
	        	// 'url' => 'master/typeAccount/view',
	        	// 'is_url' => true,
	        	// 'accessModule' => false,
	        	// 'accessController' => false,
	        	// 'accessAction' => array(array('module'=>'master','controller'=>'typeAccount','action'=>'view')),
        		// 'is_child'=> true,
	        	// 'child' =>  array()
      		// ),    
			// array(
        		// 'title' => 'Nama Account ',
	        	// 'url' => 'master/account/view',
	       	 	// 'is_url' => true,
	        	// 'accessModule' => false,
	        	// 'accessController' => false,
	        	// 'accessAction' => array(array('module'=>'master','controller'=>'account','action'=>'view')),
        		// 'is_child'=> true,
	        	// 'child' =>  array()
      		// ),
      		
      		// array(
        		// 'title' => 'Jurnal Kode Account ',
	        	// 'url' => 'master/jurnalkodeAccount/view',
	       	 	// 'is_url' => true,
	        	// 'accessModule' => false,
	        	// 'accessController' => false,
	        	// 'accessAction' => array(array('module'=>'master','controller'=>'jurnalkodeAccount','action'=>'view')),
        		// 'is_child'=> true,
	        	// 'child' =>  array()
      		// ),
      		
      		
      		
      		
     	
       		// )
     	 // ),      

     	 
      	// array(
	        // 'title' => 'Periode laporan ',
	        // 'url' => 'master/periodeLaporan/view',
	        // 'is_url' => true,
	        // 'accessModule' => false,
	        // 'accessController' => false,
	        // 'accessAction' => array(array('module'=>'master','controller'=>'periodeLaporan','action'=>'view')),
        	// 'is_child'=> true,
	        // 'child' =>  array()
	      // ),     
	 	 
      	// )
      // ),
       // array(
        // 'title' => 'Barang',
        // 'url' => '',
        // 'is_url' => false,
        // 'accessModule' => false,
        // 'accessController' => false,
        // 'accessAction' => false,
       	// 'accessControllerList' => array(
                                     // array('module'=>'master','controller'=>'gudang'),
                                     // array('module'=>'master','controller'=>'kategoribarang'),
                                     // array('module'=>'master','controller'=>'satuanbarang'),
                                     // array('module'=>'master','controller'=>'barang'),
                                  // ),
        // 'is_child'=> true,
        // 'child' =>  array(
       	// array(
        	// 'title' => 'Gudang Barang',
        	// 'url' => 'master/gudang/view',
       	 	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'gudang','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
      	// array(
        	// 'title' => 'Kategori Barang',
        	// 'url' => 'master/kategoribarang/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'kategoribarang','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
      	// array(
        	// 'title' => 'Satuan Barang',
        	// 'url' => 'master/satuanbarang/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'satuanbarang','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
      	// array(
        	// 'title' => 'Nama Barang',
        	// 'url' => 'master/barang/view',
       	 	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'barang','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
      	// )
      // ),     
       // array(
        // 'title' => 'Customer',
        // 'url' => '',
        // 'is_url' => false,
        // 'accessModule' => false,
        // 'accessController' => false,
        // 'accessAction' => false,
       	// 'accessControllerList' => array(
                                     // array('module'=>'master','controller'=>'customerTipe'),
                                     // array('module'=>'master','controller'=>'customerGroup'),
                                     // array('module'=>'master','controller'=>'customer'),
                                     // array('module'=>'master','controller'=>'contactPerson'),
                                  // ),
        // 'is_child'=> true,
        // 'child' =>  array(
       	 // array(
        	// 'title' => 'Tipe Customer',
        	// 'url' => 'master/customerTipe/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'customerTipe','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
     	// array(
        	// 'title' => 'Grup Customer',
        	// 'url' => 'master/customerGroup/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'customerGroup','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
      	// array(
        	// 'title' => 'Nama Customer',
        	// 'url' => 'master/customer/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'customer','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
      	// array(
        	// 'title' => 'Contact Person Customer',
        	// 'url' => 'master/contactPerson/view',
        	// 'is_url' => true,
        	// 'accessModule' => false,
        	// 'accessController' => false,
        	// 'accessAction' => array(array('module'=>'master','controller'=>'contactPerson','action'=>'view')),
        	// 'is_child'=> true,
        	// 'child' =>  array()
      	// ),
       	// )
      // ),     
     
      // array(
        // 'title' => 'Sales',
        // 'url' => 'master/sales/view',
        // 'is_url' => true,
        // 'accessModule' => false,
        // 'accessController' => false,
        // 'accessAction' => array(array('module'=>'master','controller'=>'sales','action'=>'view')),
       	// 'is_child'=> true,
        // 'child' =>  array()
      // ),     
      
      // array(
        // 'title' => 'Kurir ',
        // 'url' => 'master/kurir/view',
        // 'is_url' => true,
        // 'accessModule' => false,
        // 'accessController' => false,
        // 'accessAction' => array(array('module'=>'master','controller'=>'kurir','action'=>'view')),
       	// 'is_child'=> true,
        // 'child' =>  array()
      // ),     
      
      // array(
        // 'title' => 'Kendaraan ',
        // 'url' => 'master/kendaraan/view',
        // 'is_url' => true,
        // 'accessModule' => false,
        // 'accessController' => false,
        // 'accessAction' => array(array('module'=>'master','controller'=>'kendaraan','action'=>'view')),
       	// 'is_child'=> true,
        // 'child' =>  array()
      // ),     
           
    // )
  // ),
  
);




