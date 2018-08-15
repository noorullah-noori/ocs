<?php $__env->startSection('content'); ?>
<?php $lang = Session::get('view_lang');
$title = "title_".$lang; ?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Album Images</h2>
        </div>
        <div class="ui cards" style="padding-top:10px">
    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <img src="<?php echo e(asset('uploads/albumImage/'.$image->image)); ?>" style="width:100%">
      <form action="<?php echo e(route('update_album_image_title',$image->id)); ?>" class="ui form" method="POST"> 
          <?php echo e(method_field('DELETE')); ?>

          <?php echo e(csrf_field()); ?>

            <input type="button" onclick="location.href='rout';" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom" value="Edit">
            <input type="submit" class="btn m-btn--pill btn-secondary pull-right m-btn m-btn--hover-danger m-btn--custom" value="Delete">
    </form>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.include.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>