      <?php if(!isset($stepUpdate)) $stepUpdate = ''; ?>
      <?php if (userRegistered() && isset($isNew)) : ?>
      <?php if ($isNew) : ?>
      <div class="nav">
        <ul>
          <li><?php echo anchor('scholarship/user/dashboard','Dashboard',$stepUpdate=='dashboard'?array('class'=>'active'):array());?></li>
          <li><?php echo anchor('scholarship/user/updatePersonal','Data Pribadi',$stepUpdate=='personal'?array('class'=>'active'):array());?></li>
          <li><?php echo anchor('scholarship/user/updateEducation','Latar Belakang Pendidikan',$stepUpdate=='academic'?array('class'=>'active'):array());?></li>
          <li><?php echo anchor('scholarship/user/updateLanguage','Kemampuan Bahasa',$stepUpdate=='language'?array('class'=>'active'):array());?></li>
          <li><?php echo anchor('scholarship/user/updateAcademic','Karya Akademik',$stepUpdate=='education'?array('class'=>'active'):array());?></li>
          <li><?php echo anchor('scholarship/user/updatePosition','Jabatan dan Tugas',$stepUpdate=='position'?array('class'=>'active'):array());?></li>
          <li><?php echo anchor('scholarship/user/updatePropose','Program studi yg akan ditempuh',$stepUpdate=='propose'?array('class'=>'active'):array())?></li>
          <li><?php echo anchor('scholarship/user/updateDocuments','Dokumen',$stepUpdate=='documents'?array('class'=>'active'):array());?></li>
        </ul>
      </div>
      <?php else: ?>
      <div class="nav">
        <ul>
          <li><?php echo anchor('scholarship/user/dashboard','Dashboard',$stepUpdate=='dashboard'?array('class'=>'active'):array());?></li>
          <li><?php echo anchor('scholarship/user/updatePersonal','Data Pribadi',$stepUpdate=='personal'?array('class'=>'active'):array());?></li>
          <li><?php echo anchor('scholarship/user/updateProposeOn','Program studi yang saudara tempuh saat ini',$stepUpdate=='proposeOn'?array('class'=>'active'):array())?></li>
          <li><?php echo anchor('scholarship/user/updateEducation','Latar Belakang Pendidikan',$stepUpdate=='academic'?array('class'=>'active'):array());?></li>
          <li><?php echo anchor('scholarship/user/updateLanguage','Kemampuan Bahasa',$stepUpdate=='language'?array('class'=>'active'):array());?></li>
          <li><?php echo anchor('scholarship/user/updateDocuments','Dokumen',$stepUpdate=='documents'?array('class'=>'active'):array());?></li>
        </ul>
      </div>

      <?php endif; ?>
      <?php endif; ?>

