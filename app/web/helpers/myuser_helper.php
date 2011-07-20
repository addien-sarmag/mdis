<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );
/**
 * MyIndoCMS
 *
 * MyIndoCMS is Product for PT MyIndo Cyber Media
 *
 * @package     MyIndoCMS
 * @author      PT MyIndo Cyber Media
 * @copyright   Copyright (c) 2007, PT MyIndo Cyber Media
 * @license     http://www.myindo.co.id/license.html
 * @link        http://www.myindo.co.id
 * @since       Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------


/**
 * MyIndoCMS URI Helpers
 *
 * @package     MyIndoCMS
 * @subpackage  Helpers
 * @category    Helpers
 * @author      PT MyIndo Cyber Media
 * @link        http://www.myindo.co.id/cms/helpers/uri_helper.html
 */

// ------------------------------------------------------------------------


/**
 * Fetch a URI Segment
 *
 * This function returns the URI segment based on the number provided.
 *
 * @access  public
 * @param   integer
 * @param   bool
 * @return  string
 */
function isLogged($isUri = true) {
    $CI = & get_instance ();
    $CI->load->module_library ( 'myuser', 'myindo_user' );
    //return $CI->myindo_user->isLogged();
    if ($CI->myindo_user->isLogged ()) {
        return true;
    } else {
        if ($isUri)
            $CI->session->uri_string = $CI->uri->uri_string ();
        return false;
    }
}

function getLogin() {
    static $_getLogin = null;
    if ($_getLogin === null) {
        $CI = & get_instance ();
        $CI->load->module_library ( 'myuser', 'myindo_user' );
        //return $CI->myindo_user->isLogged();
        if (! $CI->myindo_user->isRegistered ()) {
            return array ();
        }
        $_getLogin = $CI->myindo_user->getLogin ();
    }
    return $_getLogin;
}
function getUserOnline() {
    static $_getUserOnline = null;
    if ($_getUserOnline === null) {
        $CI = & get_instance ();
        $CI->load->module_library ( 'myuser', 'myindo_user' );
        $_getUserOnline = $CI->myindo_user->getUserOnline ();
    }
    return $_getUserOnline;
}

function getUserId() {
    $login = getLogin ();
    if (! $login)
        return 0;
    return $login ['id'];
}
function getUserLogin() {
    $login = getLogin ();
    if (! $login)
        return '';
    return $login ['username'];
}
function getUserName() {
    $login = getLogin ();
    if (! $login)
        return '';
    return $login ['name'];
}

function getUserStatus() {
    $login = getLogin ();
    if (! $login)
        return 0;
    return $login ['status'];
}

function getUserLastLogin() {
    $login = getUserId ();
    if (! $login)
        return '';
    $CI = & get_instance ();
    $CI->load->module_model ( 'myuser', 'user_model' );
    $lastLogin = $CI->user_model->getLastUserLogin($login);
    if (!$lastLogin)
        return '';    
    return $lastLogin;
    return date('d, M Y H:i:s',SQLTimeToMKTime($lastLogin['userLoginCreateTime'])) . '(' . $lastLogin['userLoginIp'].')';
}

function getUserLocation($userId = false) {
    $CI = & get_instance ();
    $CI->load->module_model ( 'myuser', 'user_model' );    
    if (! $userId) {
        $location = $CI->user_model->getConfig ( getUserId (), 'userLocation' );
    } else {
        $location = $CI->user_model->getConfig ( $userId, 'userLocation' );
    }
    if (! $location)
        return 0;
    if ($location ['bagian'])
        return $location ['bagian'];
    if ($location ['unit'])
        return $location ['unit'];
    if ($location ['satuan'])
        return $location ['satuan'];
    if ($location ['kotama'])
        return $location ['kotama'];
    return 0;
}

function getUserAccessLocation($userId = false) {
    $CI = & get_instance ();
    $CI->load->module_model ( 'myuser', 'user_model' );    
    if (! $userId) {
        $location = $CI->user_model->getConfig ( getUserId (), 'userAccessLocation' );
    } else {
        $location = $CI->user_model->getConfig ( $userId, 'userAccessLocation' );
    }
    return $location;
}

function isRegistered() {
    $CI = & get_instance ();
    $CI->load->module_library ( 'myuser', 'myindo_user' );
    if ($CI->myindo_user->isRegistered ()) {
        return true;
    } else {
        $CI->session->uri_string = $CI->uri->uri_string ();
        return false;
    }
}

function isAccess($module = 'administrator', $controller = false, $action = false, $title = '') {
    $CI = & get_instance ();
    $CI->load->module_library ( 'myuser', 'myindo_user' );
    return $CI->myindo_user->isAccess ( $module, $controller, $action, $title );
}

function isGroup($name) {
    $CI = & get_instance ();
    $CI->load->module_library ( 'myuser', 'myindo_user' );
    return $CI->myindo_user->isGroup ( $name );
}

function isModule($module = 'administrator', $controller = false) {
    return isAccess($module, $controller);
}

function isController($module = 'cms', $controller = false, $url = '') {
    $CI = & get_instance ();
    //$CI->load->helper('myjson');
    if (! isLogged ()) {
        if (isset ( $_POST ['myjson'] ) && $_POST ['myjson'] && ($_POST ['myjson'] == "myjson")) {
            myjson_header ();
            $data = array ("status" => "Please Loggin" );
            echo myjson_encode ( $data, TRUE );
            exit ();
        }
        $CI->session->uri_string = $CI->uri->uri_string ();
        redirect ( 'myuser/login' );
    }
    if ($CI->uri->segment ( 1, FALSE )) {
        if (! isAccess ( $module, $controller )) {
            if (isset ( $_POST ['myjson'] ) && $_POST ['myjson'] && ($_POST ['myjson'] == "myjson")) {
                myjson_header ();
                $data = array ("status" => "You dont have access to this module" );
                echo myjson_encode ( $data, TRUE );
                exit ();
            }
            redirect ( $url );
        }
    }
}

function members_get_cfg($config_name, $members_id = '') {
    $CI = & get_instance ();
    if ($members_id == '')
        return $CI->myindo_user->getConfig ( $config_name );
    if ($members_id == '')
        $members_id = $CI->myindo_user->getId ();
    if (! $members_id)
        return false;
    $CI->load->module_model ( 'myuser', 'myuser_members' );
    return $CI->myuser_members->getConfig ( $members_id, $config_name );
}

function members_set_cfg($config_name, $config_value, $members_id = '') {
    $CI = & get_instance ();
    if ($members_id == '')
        $members_id = $CI->myindo_user->get_id ();
    if (! $members_id)
        return false;
    $CI->load->module_model ( 'myuser', 'myuser_members' );
    return $CI->myuser_members->update_config ( $members_id, $config_name, $config_value );
}

function members_update_cfg($config_name, $config_value, $members_id = '') {
    return members_set_cfg ( $config_name, $config_value, $members_id );
}


function getCountNewMessage() {
    $CI = & get_instance ();
    $CI->load->module_model ( 'myuser', 'message_model' );
    $where = array('userMessageTipe' => 'inbox','userMessageStatus' =>  '1','userIdTo' => getUserId());
    return $CI->message_model->getCount($where);
}

function generateAccessAllFromSatuan($where) {
	$CI = & get_instance ();
	$CI->load->module_model( 'personel','wilayahkesatuan_model' );
	$sql = '';
	
	//List Satuan
	$satuanList = $CI->wilayahkesatuan_model->getListSatuanKerja($where);
	if($satuanList) {
  		foreach($satuanList as $srow) {
  			$sid = $srow['wilayahKesatuanId'];		
  			$sql.= ' UNION SELECT Satuan.wilayahKesatuanId FROM WilayahKesatuan AS Satuan WHERE Satuan.wilayahKesatuanId = '.$sid.' ';
  		
  			//List Unit 
	   		$where['satuanId'] = $sid;
	   		$unitList = $CI->wilayahkesatuan_model->getListUnitKerja($where);
	   		
			if($unitList) {
		  		foreach($unitList as $urow) {
		  			$uid = $urow['wilayahKesatuanId'];		
		  			$sql.= ' UNION SELECT Unit.wilayahKesatuanId FROM WilayahKesatuan AS Unit WHERE Unit.wilayahKesatuanId = '.$uid.' ';
		  		
		  			//List Bagian 
			   		$where['unitId'] = $uid;
			   		$bagianList = $CI->wilayahkesatuan_model->getListBagian($where);
			
					if($bagianList) {
				  		foreach($bagianList as $brow) {
				  			$bid = $brow['wilayahKesatuanId'];		
				  			$sql.= ' UNION SELECT Bagian.wilayahKesatuanId FROM WilayahKesatuan AS Bagian WHERE Bagian.wilayahKesatuanId = '.$bid.' ';
				  		
				  			//List Sub Bagian 
					   		$where['bagianId'] = $bid;
					   		$subBagianList = $CI->wilayahkesatuan_model->getListSubBagian($where);
					
							if($subBagianList) {
						  		foreach($subBagianList as $sbrow) {
						  			$sbid = $sbrow['wilayahKesatuanId'];		
						  			$sql.= ' UNION SELECT SubBagian.wilayahKesatuanId FROM WilayahKesatuan AS SubBagian WHERE SubBagian.wilayahKesatuanId = '.$sbid.' ';
						  		}
							}
							//End List Sub Bagian
				  			
				  		}
					}
					//End List Bagian
		  		
		  		}
			}
			//End List Unit
  			
  		}
	}
	//End List Satuan
	
	return $sql;
}

function generateAccessAllFromUnit($where) {
	$CI = & get_instance ();
	$CI->load->module_model( 'personel','wilayahkesatuan_model' );
	$sql = '';
	
  	//List Unit 
   	$unitList = $CI->wilayahkesatuan_model->getListUnitKerja($where);
   	
	if($unitList) {
  		foreach($unitList as $urow) {
  			$uid = $urow['wilayahKesatuanId'];		
  			$sql.= ' UNION SELECT Unit.wilayahKesatuanId FROM WilayahKesatuan AS Unit WHERE Unit.wilayahKesatuanId = '.$uid.' ';
  		
  			//List Bagian 
	   		$where['unitId'] = $uid;
	   		$bagianList = $CI->wilayahkesatuan_model->getListBagian($where);
	
			if($bagianList) {
		  		foreach($bagianList as $brow) {
		  			$bid = $brow['wilayahKesatuanId'];		
		  			$sql.= ' UNION SELECT Bagian.wilayahKesatuanId FROM WilayahKesatuan AS Bagian WHERE Bagian.wilayahKesatuanId = '.$bid.' ';
		  		
		  			//List Sub Bagian 
			   		$where['bagianId'] = $bid;
			   		$subBagianList = $CI->wilayahkesatuan_model->getListSubBagian($where);
			
					if($subBagianList) {
				  		foreach($subBagianList as $sbrow) {
				  			$sbid = $sbrow['wilayahKesatuanId'];		
				  			$sql.= ' UNION SELECT SubBagian.wilayahKesatuanId FROM WilayahKesatuan AS SubBagian WHERE SubBagian.wilayahKesatuanId = '.$sbid.' ';
				  		}
					}
					//End List Sub Bagian
		  			
		  		}
			}
			//End List Bagian
  		
  		}
	}
	//End List Unit
  			
	return $sql;
}

function generateAccessAllFromBagian($where) {
	$CI = & get_instance ();
	$CI->load->module_model( 'personel','wilayahkesatuan_model' );
	$sql = '';
	
  	//List Bagian 
   	$bagianList = $CI->wilayahkesatuan_model->getListBagian($where);

	if($bagianList) {
  		foreach($bagianList as $brow) {
  			$bid = $brow['wilayahKesatuanId'];		
  			$sql.= ' UNION SELECT Bagian.wilayahKesatuanId FROM WilayahKesatuan AS Bagian WHERE Bagian.wilayahKesatuanId = '.$bid.' ';
  		
  			//List Sub Bagian 
	   		$where['bagianId'] = $bid;
	   		$subBagianList = $CI->wilayahkesatuan_model->getListSubBagian($where);
	
			if($subBagianList) {
		  		foreach($subBagianList as $sbrow) {
		  			$sbid = $sbrow['wilayahKesatuanId'];		
		  			$sql.= ' UNION SELECT SubBagian.wilayahKesatuanId FROM WilayahKesatuan AS SubBagian WHERE SubBagian.wilayahKesatuanId = '.$sbid.' ';
		  		}
			}
			//End List Sub Bagian
  			
  		}
	}
	//End List Bagian
		
	return $sql;
}

function generateAccessAllFromSubBagian($where) {
	$CI = & get_instance ();
	$CI->load->module_model( 'personel','wilayahkesatuan_model' );
	$sql = '';

  	//List Sub Bagian 
   	$subBagianList = $CI->wilayahkesatuan_model->getListSubBagian($where);

	if($subBagianList) {
  		foreach($subBagianList as $sbrow) {
  			$sbid = $sbrow['wilayahKesatuanId'];		
  			$sql.= ' UNION SELECT SubBagian.wilayahKesatuanId FROM WilayahKesatuan AS SubBagian WHERE SubBagian.wilayahKesatuanId = '.$sbid.' ';
  		}
	}
	//End List Sub Bagian
  			
	return $sql;
}

function generateAccessQuery($accessSelect) {
	$CI = & get_instance ();
	$CI->load->module_model( 'personel','wilayahkesatuan_model' );
	
	$kotamaId = $CI->db->escape($accessSelect['kotamaId']);
    $satuanId = $CI->db->escape($accessSelect['satuanId']);
    $unitId = $CI->db->escape($accessSelect['unitId']);
    $bagianId = $CI->db->escape($accessSelect['bagianId']);
    $subBagianId = $CI->db->escape($accessSelect['subBagianId']);
	
    //Kotama
    $sql = '';
    if($accessSelect['kotamaId'] != '0') {
    	
    	//All Kotama
    	if($accessSelect['kotamaId'] == 'x') {
    		$sql.= '';
    		
    	//Specify Kotama
    	} else {
    		$sql.= 'SELECT Kotama.wilayahKesatuanId FROM WilayahKesatuan AS Kotama WHERE Kotama.wilayahKesatuanId = '.$kotamaId.' ';
    		
    		//Satuan
    		if($accessSelect['satuanId'] != '0') {
    				
    			//All Satuan
			   	if($accessSelect['satuanId'] == 'x') {
			   		
			   		$where = array();
			   		$where['kotamaId'] = $accessSelect['kotamaId'];
			   		$sqlSatuan = generateAccessAllFromSatuan($where);
					$sql.= $sqlSatuan;

			   	//Specify Satuan
			   	} else {
			   		$sql.= ' UNION SELECT Satuan.wilayahKesatuanId FROM WilayahKesatuan AS Satuan WHERE Satuan.wilayahKesatuanId = '.$satuanId.' ';
					
			   		//Unit
		    		if($accessSelect['unitId'] != '0') {
		    				
		    			//All Unit
					   	if($accessSelect['unitId'] == 'x') {
					   		
					   		$where = array();
					   		$where['kotamaId'] = $accessSelect['kotamaId'];		
					   		$where['satuanId'] = $accessSelect['satuanId'];
					  		$sqlUnit = generateAccessAllFromUnit($where);
							$sql.= $sqlUnit;

					   	//Specify Unit
					   	} else {
					   		$sql.= ' UNION SELECT Unit.wilayahKesatuanId FROM WilayahKesatuan AS Unit WHERE Unit.wilayahKesatuanId = '.$unitId.' ';
							
					   		//Bagian
				    		if($accessSelect['bagianId'] != '0') {
				    				
				    			//All Bagian
							   	if($accessSelect['bagianId'] == 'x') {
							   		
							   		$where = array();
							   		$where['kotamaId'] = $accessSelect['kotamaId'];		
							   		$where['satuanId'] = $accessSelect['satuanId'];
							   		$where['unitId'] = $accessSelect['unitId'];
							  		$sqlBagian = generateAccessAllFromBagian($where);
									$sql.= $sqlBagian;
							  		
							   	//Specify Bagian
							   	} else {
							   		$sql.= ' UNION SELECT Bagian.wilayahKesatuanId FROM WilayahKesatuan AS Bagian WHERE Bagian.wilayahKesatuanId = '.$bagianId.' ';
									
							   		//Sub Bagian
						    		if($accessSelect['subBagianId'] != '0') {
						    				
						    			//All Sub Bagian
									   	if($accessSelect['subBagianId'] == 'x') {
									   		
									   		$where = array();
									   		$where['kotamaId'] = $accessSelect['kotamaId'];		
									   		$where['satuanId'] = $accessSelect['satuanId'];
									   		$where['unitId'] = $accessSelect['unitId'];
									   		$where['bagianId'] = $accessSelect['bagianId'];
									  		$sqlSubBagian = generateAccessAllFromSubBagian($where);
											$sql.= $sqlSubBagian;
									  		
									   	//Specify Sub Bagian
									   	} else {
									   		$sql.= ' UNION SELECT SubBagian.wilayahKesatuanId FROM WilayahKesatuan AS SubBagian WHERE SubBagian.wilayahKesatuanId = '.$subBagianId.' ';
						
									   	}
						    		}
						    		//End Sub Bagian
							   	}
				    		}
				    		//End Bagian
					   	}
		    		}
		    		//End Unit
			   	}
    		}
    		//End Satuan
    	}

    } 
	//End Kotama
	//echo $sql;
    return $sql;
    //$query = $CI->db->query($sql);
    //return $query->result_array();
}

function getAccessKode($userAccessLocation , $array) {
		$accessSelect = array();
		
		//Kotama
      	if($userAccessLocation['kotama']) {
			
      		if(empty($array['uaKId']))
		    	$accessSelect['kotamaId'] = 'x';
		    else
	      		$accessSelect['kotamaId'] = $array['uaKId'] ? $array['uaKId'] : 0;
	      		
	      	//Satuan
	      	if($userAccessLocation['satuan'] || $userAccessLocation['kotama'] == 'x') {
		    	if($array['uaKId'] && $array['uaKId'] != 'x' && empty($array['uaSId']))
		      		$accessSelect['satuanId'] = 'x';
		      	else
		      		$accessSelect['satuanId'] = $array['uaSId'] ? $array['uaSId'] : 0;
	
	      		//Unit
	      		if($userAccessLocation['unit'] || $userAccessLocation['kotama'] == 'x' || $userAccessLocation['satuan'] == 'x') {
				    if($array['uaSId'] && $array['uaSId'] != 'x' && empty($array['uaUId']))
				    	$accessSelect['unitId'] = 'x';
				    else
				      	$accessSelect['unitId'] = $array['uaUId'] ? $array['uaUId'] : 0;
		      				
		      		//Bagian
		      		if($userAccessLocation['bagian'] || $userAccessLocation['kotama'] == 'x' || $userAccessLocation['satuan'] == 'x' || $userAccessLocation['unit'] == 'x') {
					    if($array['uaUId'] && $array['uaUId'] != 'x' && empty($array['uaBId']))
					    	$accessSelect['bagianId'] = 'x';
					    else
					      	$accessSelect['bagianId'] = $array['uaBId'] ? $array['uaBId'] : 0;
			      				
			      		//Sub Bagian
			      		if($userAccessLocation['subBagian'] || $userAccessLocation['kotama'] == 'x' || $userAccessLocation['satuan'] == 'x' || $userAccessLocation['unit'] == 'x' || $userAccessLocation['bagian'] == 'x') {
						    if($array['uaBId'] && $array['uaBId'] != 'x'  && empty($array['uaSBId']))
						    	$accessSelect['subBagianId'] = 'x';
						    else
						      	$accessSelect['subBagianId'] = $array['uaSBId'] ? $array['uaSBId'] : 0;
				      				
				      	} else {
				      		$accessSelect['subBagianId'] = 0;
				      	}
			      		//End Sub Bagian
			      				
			      	} else {
			      		$accessSelect['bagianId'] = $accessSelect['subBagianId'] = 0;
			      	}
		      		//End Bagian		
		      				
		      	} else {
		      		$accessSelect['unitId'] = $accessSelect['bagianId'] = $accessSelect['subBagianId'] = 0;
		      	}
	      		//End Unit
	      		
	    	} else {
	        	$accessSelect['satuanId'] = $accessSelect['unitId'] = $accessSelect['bagianId'] = $accessSelect['subBagianId'] = 0;
	      	}
	      	//End Satuan
      		
      	} else {
        	$accessSelect['kotamaId'] = $accessSelect['satuanId'] = $accessSelect['unitId'] = $accessSelect['bagianId'] = $accessSelect['subBagianId'] = 0;
      	}
      	//End Kotama
      	
      	return $accessSelect;
}
// ------------------------------------------------------------------------



