<?php $__env->startSection('title',trans('menu.decrees')); ?>
<?php $__env->startSection('content'); ?>
  <?php if(sizeof($decrees)!=0): ?>
    <div class="ui items">
      <?php $__currentLoopData = $decrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $decree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui item <?php echo e(($decree == $decrees->last())?'no_border':''); ?>">
          <div class="ui small image">
            <img src="<?php echo e(asset('uploads/decree/default.jpg')); ?>" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="<?php echo e(url($lang.'/decree_details/'.$decree->id)); ?>" class="ui small header title_font"><?php echo e($decree->$title); ?></a>
            <div class="meta">
              <span class="body_font" dir=""><?php echo e($jdate->detailedDate($decree->$date,$lang)); ?></span>
            </div>
            <div class=" description ">
              <p class="body_font"><?php echo e($decree->$short_desc); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="ui centered grid">
      <?php echo e($decrees->links('vendor.pagination.default')); ?>

    </div>
    
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>

  </style>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>