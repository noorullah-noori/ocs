<?php $__env->startSection('title',trans('menu.videos')); ?>
<?php $__env->startSection('content'); ?>
  <?php if(sizeof($videos)!=0): ?>
    <div class="ui two stackable cards" style="direction:<?php echo e($rtl); ?>;">

      <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui card">
          <a class="image" href="<?php echo e(url($lang.'/video_details',$video->id)); ?>">
            <img src="https://img.youtube.com/vi/<?php echo e($video->$url); ?>/hqdefault.jpg" alt="">
            <div class="ui bottom attached label body_font left aligned inverted" style="background:#033B62;">
              <h4 class="inverted header" style="margin:0;">
                <?php echo e($video->$title); ?>

              </h4>
              <span style="color:#fff !important;font-size:1.1em;">
                <?php echo e($jdate->detailedDate($video->$date,$lang)); ?>

              </span>
            </div>
          </a>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="ui centered grid">
      <?php echo e($videos->links()); ?>

    </div>
    
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>
  .image img {
    border-radius: 0px !important;
  }
  h4.inverted.header {
    margin: 0;
    width: 300px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
  }
  </style>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>