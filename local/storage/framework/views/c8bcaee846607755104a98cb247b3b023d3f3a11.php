<?php $__env->startSection('title',$news_details->$title!=null?$news_details->$title:trans('home.not_available')); ?>
<?php $__env->startSection('content'); ?>
  <?php if($news_details->$title!=null): ?>
	<img class="ui image" src="<?php echo e(asset('uploads/news/'.$news_details->image)); ?>">
    <p class="meta body_font" style="font-weight: bold;font-size: 1.1em;"><?php echo e($jdate->detailedDate($news_details->$date,$lang)); ?></p>
    <div class="description">
      <p  class="printable"><?php echo $news_details->$description; ?></p>
    </div>
  <?php endif; ?>
   <?php if($final!=null && $news_details->$title!=''): ?>
          <div class="ui fluid card">
            <div class="content">
            <h3 class="title_font" style="direction:<?php echo e($rtl); ?>;"><?php echo e(trans('home.similar')); ?> </h3>
            <div class="ui three stackable cards" style="text-align:right;direction:<?php echo e($rtl); ?>">
              <?php $__currentLoopData = $final; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="ui card">
                  <div class="content">
                    <div class="ui image" style="height: 103px;">
                      <img src="<?php echo e(asset('uploads/news/'.$item->image)); ?>" style="height: 100%" alt="">
                    </div>
                    <a href="<?php echo e(url($lang.'/news_details/'.$item->id)); ?>" class="title_font" style="direction: <?php echo e($rtl); ?> !important;"><?php echo e($item->$title); ?></a>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            </div>
          </div>
        <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>

  </style>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('meta_tags'); ?>
  <?php $__env->startComponent('include.components.meta_tags'); ?>

    <?php $__env->slot('meta_title'); ?>
      <?php echo $__env->yieldContent('title'); ?>
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_description'); ?>
      <?php echo e(mb_substr(strip_tags($news_details->$description),255)); ?>

    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_url'); ?>
      <?php echo e(Request::url()); ?>

    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_image'); ?>
      <?php echo e(asset('uploads/news/'.$news_details->image)); ?>

    <?php $__env->endSlot(); ?>

  <?php echo $__env->renderComponent(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>