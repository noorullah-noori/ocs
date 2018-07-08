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
      <p><b>اسم :</b> <?php echo e($user->name); ?></p>
      <p><b>تخلص :</b> <?php echo e($user->last_name); ?></p>
      <p><b>نام پدر :</b> <?php echo e($user->father_name); ?></p>
      <p><b>تابعیت :</b> <?php echo e($user->nationality); ?></p>
      <p><b>شماره تذکره / پاسپورت.:</b> <?php echo e($user->passport); ?></p>
      <p><b>رشته تحصیلی:</b> <?php echo e($user->discipline); ?></p>
      <p><b>نوعیت رسانه:</b> <?php echo e($user->type); ?></p>
      <p><b>زبان مسلط:</b> <?php echo e($user->language); ?></p>
      <p><b>تاریخ شروع فعالیت:</b> <?php echo e($user->starting_date); ?></p>
      <p><b>رسانه فعلی:</b> <?php echo e($user->current_media); ?></p>
      <p><b>رسانه قبلی :</b> <?php echo e($user->previous_media); ?></p>
      <p><b>آدرس دفتر مرکزی رسانه فعلی:</b> <?php echo e($user->address); ?></p>
      <br>

      <h4>ایمیل ها</h4>
      <br>
      <p><b>ایمیل ۱:</b> <?php echo e($user->email1); ?></p>
      <p><b>ایمیل ۲ :</b> <?php echo e($user->email2); ?></p>
      <p><b>ایمیل ۳:</b> <?php echo e($user->email3); ?></p>
<br>
      <h4>شماره های تماس</h4>
      <br>
      <p><b>شماره تماس ۱. :</b> <?php echo e($user->phone1); ?></p>
      <p><b>شماره تماس ۲. :</b> <?php echo e($user->phone2); ?></p>
      <p><b>شماره تماس ۳. :</b> <?php echo e($user->phone3); ?></p>
<br>
      <h4>آدرس های الکترونیک (شبکه های اجتماعی)</h4>
      <br>
      <p><b>Facebook :</b> <?php echo e($user->facebook); ?></p>
      <p><b>Type Of Broadcasting :</b> <?php echo e($user->twitter); ?></p>
      <p><b>Audience Group :</b> <?php echo e($user->linked_in); ?></p>
<br>
      <h4>شماره های تماس دفتر</h4>
      <br>
      <p><b>شماره تماس ۱.:</b> <?php echo e($user->o_phone1); ?></p>
      <p><b>شماره تماس ۲.:</b> <?php echo e($user->o_phone2); ?></p>
      <p><b>شماره تماس ۳.:</b> <?php echo e($user->o_phone3); ?></p>
<br>
      <h4>ایمیل های دفتر</h4>
      <br>
      <p><b>ایمیل ۱.:</b> <?php echo e($user->o_email1); ?></p>
      <p><b>ایمیل ۲.:</b> <?php echo e($user->o_email2); ?></p>
      <p><b>ایمیل ۳.:</b> <?php echo e($user->o_email3); ?></p>
<br>
      <h4>Office Website/Socail Medial Pages</h4>
      <br>
      <p><b>Website:</b> <?php echo e($user->o_website); ?></p>
      <p><b>Facebook:</b> <?php echo e($user->o_facebook); ?></p>
      <p><b>Twitter:</b> <?php echo e($user->o_twitter); ?></p>

      <a class="btn btn-default" href="<?php echo e(route('view_journalist_register')); ?>">Back</a>
</div>
</section>

<?php echo $__env->make('admin.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>