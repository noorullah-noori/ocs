<?php $__env->startSection('title',trans('menu.infographics')); ?>
<?php $__env->startSection('content'); ?>
  <?php 
    $desc = "desc_".$lang;
    $img_thumb = "image_thumb_".$lang;
   ?>
  <?php if(sizeof($info)!=0): ?>
    <div class="ui three stackable cards infographics" style="direction:<?php echo e($rtl); ?>;">
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
     
    <div class="ui centered grid">
      <?php echo e($info->links('vendor.pagination.default')); ?>

    </div>
    
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>
   .infographics .ui.card a.image{
        height: 170px !important;
        overflow: hidden;
        /*width: 100% !important;*/
   }
   .infographics .ui.card img{
    height: 170px !important;
   }
  </style>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>