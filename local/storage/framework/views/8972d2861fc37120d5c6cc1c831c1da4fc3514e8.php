<?php $__env->startSection('title',trans('menu.links')); ?>
<?php $__env->startSection('content'); ?>
  <?php if(sizeof($links)!=0): ?>
    <div class="ui items">
      <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui item <?php echo e(($item == $links->last())?'no_border':''); ?>">
          <div class="ui small image">
            <img src="<?php echo e(asset('uploads/links/'.$item->image)); ?>" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="<?php echo e(url($lang.'/link_details/'.$item->id)); ?>" class="ui small header title_font"><?php echo e($item->$title); ?></a>
            
            <div class=" description ">
              <p class="body_font"><?php echo e(str_limit(strip_tags($item->$description),200)); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="ui centered grid">
      <?php echo e($links->links('vendor.pagination.default')); ?>

    </div>
    
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>
  .ui.items>.item>.image {
    padding: 0 !important;
  }
  </style>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>