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
        <form method="post" action="<?php echo e(route('update_album_image_title',$image->id)); ?>">
        <?php echo e(csrf_field()); ?><?php echo e(method_field("PATCH")); ?>

              <div class="card" style="width:300px;padding:10px;">
                <div class="image">
                  <img src="<?php echo e(asset('uploads/albumImage/'.$image->image)); ?>" style="width:100%">
                  <div class="container" style="padding-top: 5px">
                    <input type="hidden" name="album_id" value="<?php echo e($album_id); ?>">
                  <input type="text" name="title" value="<?php echo e($image->$title); ?>"> 
                  <input type="submit" value="update" class="btn btn-sm btn-default">
                  </div>
                </div>
              </div>
    </form>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>
 <div class="container">
   <a class="ui button" href="<?php echo e(URL::previous()); ?>" style="float:right;margin-right: 22%;">
  Cancel
</a>
 </div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.include.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>