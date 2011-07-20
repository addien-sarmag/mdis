      <?php if(isset($contentStep01) && !$contentStep01['status']): ?>
      <div class="nav">
        <ul>
          <li><?php echo $step>0?anchor('scholarship/regStep01','Daftar',$step==1?array('class'=>'active'):array()) : 'Register';?></li>
          <li><?php echo $step>1?anchor('scholarship/regStep02','Data Pribadi',$step==2?array('class'=>'active'):array()) : 'Personal Data';?></li>
          <li><?php echo $step>2?anchor('scholarship/regStepOn03','Program studi yang saudara tempuh saat ini',$step==3?array('class'=>'active'):array()) : 'Program studi yang saudara tempuh saat ini';?></li>
          <li><?php echo $step>3?anchor('scholarship/regStepOn04','Latar Belakang Pendidikan',$step==4?array('class'=>'active'):array()) : 'Latar Belakang Pendidikan';?></li>
          <li><?php echo $step>4?anchor('scholarship/regStepOn5','Kemampuan Bahasa',$step==5?array('class'=>'active'):array()) : 'Kemampuan Bahasa';?></li>
          <li><?php echo $step>5?anchor('scholarship/regStepOn06','Dokumen',$step==6?array('class'=>'active'):array()) : 'Dokumen';?></li>
        </ul>
      </div>
      <?php else: ?>
      <div class="nav">
        <ul>
          <li><?php echo $step>0?anchor('scholarship/regStep01','Daftar',$step==1?array('class'=>'active'):array()) : 'Register';?></li>
          <li><?php echo $step>1?anchor('scholarship/regStep02','Data Pribadi',$step==2?array('class'=>'active'):array()) : 'Personal Data';?></li>
          <li><?php echo $step>2?anchor('scholarship/regStep03','Latar Belakang Pendidikan',$step==3?array('class'=>'active'):array()) : 'Latar Belakang Pendidikan';?></li>
          <li><?php echo $step>3?anchor('scholarship/regStep04','Kemampuan Bahasa',$step==4?array('class'=>'active'):array()) : 'Kemampuan Bahasa';?></li>
          <li><?php echo $step>4?anchor('scholarship/regStep05','Karya Akademik',$step==5?array('class'=>'active'):array()) : 'Karya Akademik';?></li>
          <li><?php echo $step>5?anchor('scholarship/regStep06','Jabatan dan Tugas',$step==6?array('class'=>'active'):array()) : 'Jabatan dan Tugas';?></li>
          <li><?php echo $step>6?anchor('scholarship/regStep07','Program studi yg akan ditempuh',$step==7?array('class'=>'active'):array()) : 'Program studi yg akan ditempuh';?></li>
          <li><?php echo $step>7?anchor('scholarship/regStep08','Dokumen',$step==8?array('class'=>'active'):array()) : 'Dokumen';?></li>
        </ul>
      </div>
      <?php endif; ?>

