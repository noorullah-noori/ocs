<?php $__env->startSection('title',$video->$title!=null?$video->$title:trans('home.not_available')); ?>
<?php $__env->startSection('content'); ?>
  <?php if($video->$title!=null): ?>
    <p class="meta" style="font-weight: bold;font-size: 1.1em;"><?php echo e($jdate->detailedDate($video->$date,$lang)); ?></p>
    <div class="description">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo e($video->$url); ?>" frameborder="0" allowfullscreen></iframe>
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
<?php $__env->startPush('meta_tags'); ?>
  <?php $__env->startComponent('include.components.meta_tags'); ?>

    <?php $__env->slot('meta_title'); ?>
      <?php echo $__env->yieldContent('title'); ?>
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_description'); ?>
      <?php echo $__env->yieldContent('title'); ?>
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_url'); ?>
      <?php echo e(Request::url()); ?>

    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_image'); ?>
      https://img.youtube.com/vi/<?php echo e($video->$url); ?>/hqdefault.jpg
    <?php $__env->endSlot(); ?>

  <?php echo $__env->renderComponent(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>