
<?php $__env->startSection('title',trans('menu.reports_and_documents')); ?>
<?php $__env->startSection('content'); ?>
  <?php 
    $documents_path = 'documents_'.$lang;
    $pdf = 'pdf_'.$lang;
   ?>
  <?php if(sizeof($documents)!=0): ?>
    <div class="ui items">
      <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui item <?php echo e(($item == $documents->last())?'no_border':''); ?>">
          <div class="ui tiny image icon" style="">
            <img src="<?php echo e(asset('assets/img/pdf.png')); ?>" style="padding-left:8px;">
          </div>
          <div class="content">
            <a href="<?php echo e(url($documents_path.'/'.$item->$pdf)); ?>" class="ui small header title_font"><?php echo e($item->$title); ?></a>
            <div class="meta">
              <span class="body_font" dir=""><?php echo e($jdate->detailedDate($item->$date,$lang)); ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="ui centered grid">
      <?php echo e($documents->links('vendor.pagination.default')); ?>

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