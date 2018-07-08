<?php $__env->startSection('title',trans('menu.photo_albums')); ?>
<?php $__env->startSection('content'); ?>
  <?php if(sizeof($albums)!=0): ?>
    <div class="ui three stackable cards" style="direction:<?php echo e($rtl); ?>;">

      <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui card">
          <a class="image" href="<?php echo e(url($lang.'/album_images',$album->id)); ?>">
            <img src="<?php echo e(asset('uploads/album/'.$album->image)); ?>" alt="">
            <p class="ui bottom attached label body_font center aligned">
              <?php echo e($jdate->detailedDate($album->$date,$lang)); ?>

            </p>
          </a>
          <div class="content">
            <a class="ui header" href="<?php echo e(url($lang.'/album_images',$album->id)); ?>"><?php echo e($album->$title); ?></a>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="ui centered grid">
      <?php echo e($albums->links()); ?>

    </div>
    
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>
  .image img {
    border-radius: 0px !important;
    border: 3px solid #ddd !important;
  }
  </style>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>