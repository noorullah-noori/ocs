<?php $__env->startSection('title',trans('menu.articles')); ?>
<?php $__env->startSection('content'); ?>
  <?php if(sizeof($articles)!=0): ?>
    <div class="ui items">
      <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui item <?php echo e(($item == $articles->last())?'no_border':''); ?>">
          <div class="other_pages thumbnail">
            <img src="<?php echo e(asset('uploads/article/'.$item->image_thumb)); ?>" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="<?php echo e(url($lang.'/article_details/'.$item->id)); ?>" class="ui small header title_font"><?php echo e($item->$title); ?></a>
            <div class="meta">
              <span class="body_font" dir=""><?php echo e($jdate->detailedDate($item->$date,$lang)); ?></span>
            </div>
            <div class=" description ">
              <p class="body_font"><?php echo e($item->$short_desc); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="ui centered grid">
      <?php echo e($articles->links('vendor.pagination.default')); ?>

    </div>
    
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>

  </style>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>