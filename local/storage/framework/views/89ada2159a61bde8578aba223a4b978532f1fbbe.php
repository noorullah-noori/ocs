<?php $__env->startSection('title',trans('menu.words')); ?>
<?php $__env->startSection('content'); ?>
  <?php if(sizeof($words_all)!=0): ?>
    <div class="ui items">
      <?php $__currentLoopData = $words_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $word): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui item <?php echo e(($word == $words_all->last())?'no_border':''); ?>">
          <div class="ui small image">
            <img src="<?php echo e(asset('uploads/word/'.$word->image_thumb)); ?>" style="padding-left:8px;">
          </div>
          <div class="content">
            <div class=" description ">
              <p class="body_font"><?php echo e($word->$short_desc); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="ui centered grid">
      <?php echo e($words_all->links('vendor.pagination.default')); ?>

    </div>
    
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>

  </style>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>