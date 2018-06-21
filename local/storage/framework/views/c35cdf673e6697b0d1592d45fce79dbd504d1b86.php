<?php $__env->startSection('title',trans('menu.infographics')); ?>
<?php $__env->startSection('content'); ?>
  <?php 
    $desc = "desc_".$lang;
    $img_thumb = "image_thumb_".$lang;
   ?>
  <?php if(sizeof($info)!=0): ?>
    <div class="ui three stackable cards" style="direction:<?php echo e($rtl); ?>;">
      <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php 
        if(sizeof($value->$title)==0)
          continue;
         ?>
        <div class="ui card">
          <a class="image" href="<?php echo e(url($lang.'/infographic_details',$value->id)); ?>">
            <img src="<?php echo e(asset('uploads/infographics/'.$lang.'/'.$value->$img_thumb)); ?>">
          </a>
          <div class="content">
            <a href="<?php echo e(url($lang.'/infographic_details',$value->id)); ?>"><?php echo e($value->$title); ?></a>
            <div class="meta">
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>
    #bio img{
      height: 100%;
    }
    #bio a{
      height: 170px;
    }
  </style>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>