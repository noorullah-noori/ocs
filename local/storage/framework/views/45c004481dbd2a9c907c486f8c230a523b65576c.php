
<?php $__env->startSection('title',trans('menu.statements')); ?>
<?php $__env->startSection('content'); ?>
  <?php if(sizeof($statements)!=0): ?>
    <div class="ui items">
      <?php $__currentLoopData = $statements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui item <?php echo e(($statement == $statements->last())?'no_border':''); ?>">
          <div class="ui small image">
            <img src="<?php echo e(asset('uploads/statement/'.$statement->image_thumb)); ?>" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="<?php echo e(url($lang.'/statement_details/'.$statement->id)); ?>" class="ui small header title_font"><?php echo e($statement->$title); ?></a>
            <div class="meta">
              <span class="body_font" dir=""><?php echo e($jdate->detailedDate($statement->$date,$lang)); ?></span>
            </div>
            <div class=" description ">
              <p class="body_font"><?php echo e($statement->$short_desc); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="ui centered grid">
      <?php echo e($statements->links('vendor.pagination.default')); ?>

    </div>
    
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>

  </style>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>