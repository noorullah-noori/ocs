<?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<style type="text/css">
      .table-responsive{
            direction: rtl;
      }

</style>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">"<?php echo e($user->name); ?>" Details</h2>
        </div>

      <h4>Personal Detail</h4>
      <br>
      <p><b>اسم رسانه :</b> <?php echo e($user->name); ?></p>
      <p><b>شماره جواز :</b> <?php echo e($user->license_number); ?></p>
      <p><b>تاریخ اخذ جواز فعالیت :</b> <?php echo e($user->license_date); ?></p>
      <p><b>تاریخ شروع فعالیت :</b> <?php echo e($user->starting_date); ?></p>
      <p><b>نوعیت رسانه:</b> <?php echo e($user->type); ?></p>
      <br>

      <h4>Coverage Details</h4>
      <br>
      <p><b>ساحه پوشش :</b> <?php echo e($user->coverage_area); ?></p>
      <p><b>نوعیت نشرات :</b> <?php echo e($user->coverage_type); ?></p>
      <p><b>گروه مخاطبان:</b> <?php echo e($user->recipent_group); ?></p>
      <p><b>زبان نشرات :</b> <?php echo e($user->broadcasting_language); ?></p>
      <p><b>آدرس دفتر مرکزی:</b> <?php echo e($user->addres); ?></p>
      <p><b>ایمیل های دفتر :</b><br><b>ایمیل ۱ :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo e($user->email1); ?> <br>
            <b>ایمیل ۲ :</b><?php echo e($user->email2); ?>&nbsp;&nbsp;&nbsp;&nbsp;<br>
            <b>ایمیل ۳ :</b> <?php echo e($user->email3); ?></p>
      <p><b>Official Contanct(s) Number In Afghanistan:</b><br> <b>شماره تلیفون ۱ :</b> <?php echo e($user->phone1); ?>

      &nbsp;&nbsp;&nbsp;&nbsp;
      <b>شماره تلیفون ۲ :</b> <?php echo e($user->phone2); ?> &nbsp;&nbsp;&nbsp;&nbsp; <br> <b>شماره تلیفون ۳ :</b> <?php echo e($user->phone3); ?></p>
      <p><b>Website/Social Media Pages(s):</b> <br><b>Website:</b> <?php echo e($user->website); ?> &nbsp;&nbsp;&nbsp;&nbsp; <br>
      <b>فیسبوک:</b>  <?php echo e($user->facebook); ?> &nbsp;&nbsp;&nbsp;&nbsp; 
      <br> <b>تویتر:</b>  <?php echo e($user->twitter); ?></p>
<br>  
      <h4>News Director</h4>
      <br>
      <p><b>اسم :</b> <?php echo e($manager->name); ?></p>
      <p><b>ایمیل :</b> <?php echo e($manager->email); ?></p>
      <p><b>شماره تلیفون :</b> <?php echo e($manager->telephone); ?></p>
      <p><b>فیسبوک :</b> <?php echo e($manager->facebook); ?></p>
      <p><b>تویتر:</b> <?php echo e($manager->twitter); ?></p>
<br>
      <h4>Media Secretary</h4>
      <br>
      <p><b>اسم :</b> <?php echo e($secretary->name); ?></p>
      <p><b>ایمیل :</b> <?php echo e($secretary->email); ?></p>
      <p><b>شماره تلیفون :</b> <?php echo e($secretary->telephone); ?></p>
      <p><b>فیسبوک :</b> <?php echo e($secretary->facebook); ?></p>
      <p><b>تویتر:</b> <?php echo e($secretary->twitter); ?></p>
<br>
      <h4>Journalist No.1</h4>
      <br>
      <p><b>اسم :</b> <?php echo e($journalist1->name); ?></p>
      <p><b>ایمیل :</b> <?php echo e($journalist1->email); ?></p>
      <p><b>شماره تلیفون :</b> <?php echo e($journalist1->telephone); ?></p>
      <p><b>فیسبوک :</b> <?php echo e($journalist1->facebook); ?></p>
      <p><b>تویتر:</b> <?php echo e($journalist1->twitter); ?></p>
<br>
      <h4>Journalist No.2</h4>
      <br>
      <p><b>اسم :</b> <?php echo e($journalist2->name); ?></p>
      <p><b>ایمیل :</b> <?php echo e($journalist2->email); ?></p>
      <p><b>شماره تلیفون :</b> <?php echo e($journalist2->telephone); ?></p>
      <p><b>فیسبوک :</b> <?php echo e($journalist2->facebook); ?></p>
      <p><b>تویتر:</b> <?php echo e($journalist2->twitter); ?></p>

      <a class="btn btn-default" href="<?php echo e(route('view_media_register')); ?>">Back</a>
</div>
</section>

<?php echo $__env->make('admin.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>