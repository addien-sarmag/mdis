<?php $this->load->view('header') ?>

<div id="content">
<div class="column full fl">
		
		<div class="box">
		<div class="box-header">Daftar Pertanyaan</div>
		<div class="box-content">
		<br />
		
       	<?php echo isAccess('myuser','user','view') ? anchor('myuser/user/view', '<span class="icon_text preview"></span>Daftar User','class="button white"') : ''; ?>
       	<br />      

            <?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess ) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>
	        	        
	        <?php  echo form_open('myuser/user/pertanyaan/id/'.get_data($uri_to_assoc,'id').'/time/' . time(),array('name'=>'formAddPertanyaan','id'=>'formAddPertanyaan'),array('kirim'=>'kirim')); ?>
            <table width='80%'>
                <?php foreach($listPertanyaan as $name=>$label) : ?>
                <tr>
                    <td width="200"><?php echo $label?></td>
                    <td>
                        <br /><?php echo form_input(array('name'=>$name,'value'=>get_data($dataEdit,$name),'class'=>'form-field small'));?> 
                    </td>
                 </tr>
                 <?php endforeach;?> 
                 <tr>
                    <td>&nbsp;</td>
                    <td>
                       <br /> <?php echo form_submit('tblSubmit','Simpan','class="button themed"');?>
                    </td>
                </tr>
            </table>
            </form>
			
          </div>
        </div>
      </div>
      <!-- End Widget-->
      
      <div class="clear"></div>
    </div>
  </div>

<?php $this->load->view('footer') ?>