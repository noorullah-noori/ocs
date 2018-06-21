
<?php $__env->startSection('title',$news_details->$title!=null?$news_details->$title:trans('home.not_available')); ?>
<?php $__env->startSection('content'); ?>
  <?php if($news_details->$title!=null): ?>
	<img class="ui image" src="<?php echo e(asset('uploads/news/'.$news_details->image)); ?>">
    <p class="meta body_font" style="font-weight: bold;font-size: 1.1em;"><?php echo e($jdate->detailedDate($news_details->$date,$lang)); ?></p>
    <div class="description">
      <p  class="printable"><?php echo $news_details->$description; ?></p>
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