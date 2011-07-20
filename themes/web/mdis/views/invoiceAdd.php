<?php $this->load->view('header') ?>
<script src="<?php echo base_url();?>js/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script>
$(function() {
	$("#srcSuratJalanKode").autocomplete({
		source: function(request, response) {
			$.ajax({
				url: site_url('sales/invoice/suratJalanSearchJSON/' + (new Date).getTime()),
				
				type: 'post',
				dataType: "json",
				data: {
					dtype: 'json',
						search: $('input[name=srcSuratJalanKode]').val(),
					limit: 20
				},

			success: function(data) {
				response($.map(data.data, function(item) {
					return {
						label: item.sjKode,
						value: item.sjKode,
					  sj_tgl: item.sjTgl,
					  sj_id: item.sjId
				   	}
			    }))
			}
			})
		},
		
		minLength: 2,
		select: function(event, ui) {
			$('input[name=srcSuratJalanKode_id]').val(ui.item.sj_id);
			$('input[name=invoiceTanggal]').val(ui.item.sj_tgl);
			//log(ui.item ? ("Selected: " + ui.item.label) : "Nothing selected, input was " + this.value);
		},
		open: function() {
			$('input[name=srcSuratJalanKode_id]').val('');
			$(this).removeClass("ui-corner-all").addClass("ui-corner-top");
		},
		close: function() {
			$(this).removeClass("ui-corner-top").addClass("ui-corner-all");
		}
  	});
	
	$('#invoiceTanggal').datepicker({
	   yearRange: "-10:+10",
	   dateFormat: 'yy-mm-dd', 
	   changeMonth: true,
	   changeYear: true
	});
	$('#tglInvoice').datepicker({
		   yearRange: "-10:+10",
		   dateFormat: 'yy-mm-dd', 
		   changeMonth: true,
		   changeYear: true
		});
});
</script>

<div id="content">
<div class="column full">
	<div class="box">
		<div class="box-header">Tambah Invoice  </div>
		<div class="box-content">
      <?php echo  isAccess ( 'aslog', 'sales', 'view') ? anchor('sales/invoice/view/', '<span class="icon_text preview"></span>Daftar Invoice ', 'class="button white"'):''; ?>
	<br /><br />
       		<?php if (isset($errorMessage)) : ?>
            	<div class="notification <?php echo ((isset($isSuccess) && $isSuccess ) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
	        <?php endif; ?>
	        	        
	        <?php if (!(isset($isSuccess) && $isSuccess)) : ?>
            <?php  echo form_open('sales/invoice/add/time/' . time()."/",array('name'=>'formAddGroupSuplier','id'=>'formAddGroupSuplier'),array('kirim'=>'kirim')); ?>
              <table>
              
    			  <tr>
                    <td width="200px">Nomor Surat Jalan</td>
                    <td><br />
                        <?php echo form_input(array('name'=>'srcSuratJalanKode','value'=>get_data($_POST,'srcSuratJalanKode'),'id'=>'srcSuratJalanKode','class'=>'form-field'));?><font color='red'> * </font> 
                		<?php echo form_hidden('srcSuratJalanKode_id')?>
                   	 </td>
                </tr>
                     
					<tr>
                    <td> Invoice Tanggal</td>
                    <td><br />
                   <?php echo form_input(array('name'=>'invoiceTanggal','value'=>get_data($_POST,'invoiceTanggal'),'id'=>'invoiceTanggal','readonly'=>'readonly','class'=>'form-field'));?>
         			</td>
                    </tr>
                    
                    
        			<tr>
                    <td>Tanggal Garansi</td>
                    <td>
                        <br /><?php echo form_input(array('name'=>'invoiceGaransi','value'=>get_data($_POST,'invoiceGaransi'),'id'=>'tglInvoice','readonly'=>'readonly','class'=>'form-field'));?> 
                    </td>
                 	</tr>
                    
                    <tr>
                    <td>PPN</td>
                    <td><br />
                    <?php echo form_input(array('name'=>'invoicePpn','value'=>get_data($_POST,'invoicePpn'),'id'=>'invoicePpn', 'class'=>'form-field small', 'style'=> 'width:30px;'));?> % <br />
                   </td>
                    </tr>
                    
                    
                    <tr>
                    <td>Discount Global</td>
                    <td><br />
                    <?php echo form_input(array('name'=>'invoiceDiscount','value'=>get_data($_POST,'invoiceDiscount'),'id'=>'invoiceDiscount', 'class'=>'form-field small', 'style'=> 'width:30px;'));?> % <br />
                   </td>
                    </tr>
                    
                    <tr>
                    <td>Termin Pembayaran</td>
                    <td><br />
                   <?php echo form_input(array('name'=>'termin','value'=>get_data($_POST,'termin'),'class'=>'form-field'));?>
         			</td>
                    </tr>
                    
                    <tr>
                    <td> Uang Muka</td>
                    <td><br />
                   <?php echo form_input(array('name'=>'uangMuka','value'=>get_data($_POST,'uangMuka'),'class'=>'form-field'));?>
         			</td>
                    </tr>
                    
                    <tr>
                	<td>Status Invoice</td>
                	<td><div class="radiocheck">
                    	<?php echo form_radio('statusInvoice', 'Belum Terbayar', get_data($_POST,'invoiceStatus') == 'Belum Terbayar' ? true: false, 'id="belumterbayar"');?><label for="belumterbayar">Belum Terbayar</label>
                    	<?php echo form_radio('statusInvoice', 'Telah Terbayar', get_data($_POST,'invoiceStatus') == 'Telah Terbayar' ? true: false, 'id="telahterbayar"');?><label for="telahterbayar">Telah Terbayar</label>
                        <?php echo form_radio('statusInvoice', 'Lunas', get_data($_POST,'invoiceStatus') === 'Lunas' ? true: false, 'id="lunas"');?><label for="lunas">Lunas</label>
                    	</div></td> 
              	 	</tr>
                	<tr>
                    <td>&nbsp;</td>
                    <td><br />
                    <?php echo form_hidden('noICUrut', $noUrut);?>
                    <input type="submit" name="tblSubmit"  id='submit' value="Simpan" class="button themed" />                       
                    </td>
                </tr>
            </table>
            </form>
<?php endif;?>
          </div>
        </div>
      </div>
      <!-- End Widget-->
      
      <div class="clear"></div>
    </div>
  </div>
<?php $this->load->view('footer') ?>