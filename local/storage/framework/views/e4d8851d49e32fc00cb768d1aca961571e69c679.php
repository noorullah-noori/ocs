
<?php $__env->startSection('title',$article_details->$title!=null?$article_details->$title:trans('home.not_available')); ?>
<?php $__env->startSection('content'); ?>
  <?php if($article_details->$title!=null): ?>
    <p class="meta" style="font-weight: bold;font-size: 1.1em;"><?php echo e($jdate->detailedDate($article_details->$date,$lang)); ?></p>
    <div class="description">
      <p  class="printable"><?php echo $article_details->$description; ?></p>
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
      <?php echo e(mb_substr(strip_tags($article_details->$description),0,255,'utf-8')); ?>

    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_url'); ?>
      <?php echo e(Request::url()); ?>

    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_image'); ?>
      <?php echo e(asset('uploads/news/'.$article_details->image_thumb)); ?>

    <?php $__env->endSlot(); ?>

  <?php echo $__env->renderComponent(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>