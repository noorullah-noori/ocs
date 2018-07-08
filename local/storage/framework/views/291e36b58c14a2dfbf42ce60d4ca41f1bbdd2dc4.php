<?php $__env->startSection('title',trans('menu.ocs')); ?>
<?php $__env->startSection('content'); ?>
  <?php if($ocs!=null): ?>
    <div class="description">
      <p  class="printable"><?php echo $ocs->$description; ?></p>
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
      <?php echo e($ocs!=null ? substr(strip_tags($ocs->$description),720) : ''); ?>

    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_url'); ?>
      <?php echo e(Request::url()); ?>

    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_image'); ?>
      
      <?php echo e(asset('uploads/decree/default_fb.jpg')); ?>

      
    <?php $__env->endSlot(); ?>

  <?php echo $__env->renderComponent(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>