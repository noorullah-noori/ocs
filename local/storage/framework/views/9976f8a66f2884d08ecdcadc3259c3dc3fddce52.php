<?php $__env->startSection('title',trans('menu.complaint_regestration')); ?>
<?php $__env->startSection('content'); ?>
  <h3 class="ui header title_font"><?php echo trans('home.complaint_header'); ?></h3>
  <p><?php echo trans('home.complaint_p1'); ?></p>
  <p><?php echo trans('home.complaint_p2'); ?></p>
  <p><?php echo trans('home.complaint_p3'); ?></p>
  <p><?php echo trans('home.complaint_p4'); ?></p>
  <p><?php echo trans('home.complaint_p5'); ?></p>
  <p><?php echo trans('home.complaint_p6'); ?></p>

  <div class="ui item">
    <div class="ui tiny image icon" style="float:<?php echo e($dir); ?>;height:100%;padding-<?php echo e($indir); ?>:5px;">
      <a target="_blank" href="<?php echo e(asset('assets/complaint_reg/complaint_doc.doc')); ?>">
        <img src="<?php echo e(asset('assets/img/doc.png')); ?>">
      </a>
    </div>

    <div class="content" style="display:block;">
        <p style="margin-bottom: 0;"><?php echo trans('home.complaint_p7'); ?></p>
        <p style="display: flex;"><?php echo trans('home.complaint_p8'); ?></p>
    </div>
  </div>

  <div class="ui small centered header" style="clear: both;">
    <a href="<?php echo e(asset('assets/complaint_reg/complaint_report_'.$lang.'.pdf')); ?>" target="_blank" class=""><?php echo trans('home.complaint_report'); ?></a>
  </div>
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
      <?php echo trans('home.complaint_p1'); ?>

      <?php echo trans('home.complaint_p2'); ?>

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