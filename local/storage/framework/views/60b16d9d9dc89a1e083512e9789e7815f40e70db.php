
<?php $__env->startSection('title',trans('menu.news')); ?>
<?php $__env->startSection('content'); ?>
  <?php if(sizeof($news_all)!=0): ?>
    <div class="ui items">
      <?php $__currentLoopData = $news_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui item <?php echo e(($item == $news_all->last())?'no_border':''); ?>">
          <div class="other_pages_thumbnail">
            <img src="<?php echo e(asset('uploads/news/'.$item->image_thumb)); ?>" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="<?php echo e(url($lang.'/news_details/'.$item->id)); ?>" class="ui small header title_font"><?php echo e($item->$title); ?></a>
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
      <?php echo e($news_all->links('vendor.pagination.default')); ?>

    </div>
    
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>

  </style>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>