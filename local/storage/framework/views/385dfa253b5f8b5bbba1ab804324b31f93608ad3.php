<?php $__env->startSection('title',$info_details->$title!=null?$info_details->$title:trans('home.not_available')); ?>
<?php $__env->startSection('content'); ?>
  <?php 
    $desc = "desc_".$lang;
    $img = 'image_'.$lang;
   ?>
  <?php if(sizeof($info_details)!=0): ?>
        <p class="meta body_font printable"><?php echo e($jdate->detailedDate($info_details->$date,$lang)); ?></p>

        <div style="padding-bottom: 10px" class="printable">
          <a href="<?php echo e(asset('uploads/infographics/'.$lang.'/'.$info_details->$img)); ?>" target="_blank">
          <img class="ui fluid image" src="<?php echo e(asset('uploads/infographics/'.$lang.'/'.$info_details->$img)); ?>">
          </a>
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
      test
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_url'); ?>
      <?php echo e(Request::url()); ?>

    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_image'); ?>
      <?php echo e(asset('uploads/infographics/'.$lang.'/'.$info_details->$img)); ?>

    <?php $__env->endSlot(); ?>

  <?php echo $__env->renderComponent(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>