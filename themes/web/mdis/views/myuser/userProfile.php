<?php $this->load->view('header') ?>

  <!-- CONTENT -->
<div id="content">
<div class="column full">
        
        <div class="box">
        <div class="box-header"><?php echo get_title();?></div>
        <div class="box-content">
      <?php echo anchor('myuser/user/view', $this->lang->line ( 'myuser_user_view_title' ), 'class="white button"'); ?>
       <br /><br />

        <?php if (isset($errorMessage)) : ?>
            <div class="notification <?php echo ((isset($isSuccess) && $isSuccess) ? 'success' : 'error');?>"><?php echo $errorMessage; ?></div>
        <?php endif; ?>

        <?php if (! (isset($isSuccess) && $isSuccess)) : ?>
        <!-- gadget -->
        <div class="gadget">
          <div class="titlebar vertsortable_head"><a href="#" class="hidegadget" rel="hide_block"><img src="<?php echo theme_image_url('spacer.gif'); ?>" alt="picture" width="19" height="33" /></a>
            <h3><?php echo get_title();?></h3>
          </div>
          <div class="gadgetblock">

        
            <?php echo form_open('myuser/user/profile/time/' . time(),array('name'=>'userProfile','id'=>'userProfile','method'=>'post','class'=>'frModalLoad')); ?>
            <?php echo form_hidden('kirim','kirim');?>
            <table>
                    <tr>
                        <td width="200"><?php echo $this->lang->line('myuser_user_username');?></td>
                        <td>
                            <?php echo $dataEdit->userLogin; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $this->lang->line('myuser_user_name');?></td>
                        <td>
                            <?php echo form_input(array('name'=>'name','id'=>'name','value'=>$dataEdit->userName)); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Ubah Password</td>
                        <td>
                            <?php echo form_radio(array('name'=>'changePassword','id'=>'changePassword_1','style'=>'width:20px','class'=>'radio','value'=>'1'));?>&nbsp;&nbsp;<label for='changePassword_1' class="radio" style="float:none;display:inline;" >Ya</label> &nbsp;
                            <?php echo form_radio(array('name'=>'changePassword','id'=>'changePassword_0','style'=>'width:20px','class'=>'radio','value'=>'0','checked'=>true));?>&nbsp;&nbsp;<label for='changePassword_0' class="radio" style="float:none;display:inline;" >Tidak</label> &nbsp;
                        </td>
                    </tr>
                    <tr style="display:none" id="trOldPassword">
                        <td>Password Lama</td>
                        <td>
                            <?php echo form_password(array('name'=>'old_password','id'=>'old_password','value'=>'')); ?>
                        </td>
                    </tr>
                    <tr style="display:none" id="trPassword">
                        <td>Password Baru</td>
                        <td>
                            <?php echo form_password(array('name'=>'password','id'=>'password','value'=>'')); ?>
                        </td>
                    </tr>
                    <tr style="display:none" id="trPasswordConf">
                        <td>Ulangi Password Baru</td>
                        <td>
                            <?php echo form_password(array('name'=>'password_conf','id'=>'password_conf','value'=>'')); ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="submit" name="submit_save" value="<?php echo $this->lang->line('global_submit');?>" class="button medium green" /> 
                    </tr>
            </table>
            </form>

          </div>
        </div>
        <?php endif ;?>
                </div>
        </div>
    
    </div>


<?php $this->load->view('footer') ?>