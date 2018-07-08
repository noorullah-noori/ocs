<?php $__env->startSection('title',$album->$title); ?>
<?php $__env->startSection('content'); ?>
  <?php if(sizeof($images)!=0): ?>
    <div class="ui three doubling stackable cards" style="direction:<?php echo e($rtl); ?>;">

      <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui card">
          <a href="<?php echo e(asset('uploads/albumImage/'.$image->image)); ?>" class="image example-image-link" data-lightbox="test" data-title="<?php echo e($image->$title); ?>">
            <img class="example-image" src="<?php echo e(asset('uploads/albumImage/'.$image->image)); ?>" alt="">
          </a>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="ui centered grid">
    </div>
    
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>
  .image img {
    border-radius: 0px !important;
    border: 3px solid #ddd !important;
  }
   .card {
    border: 5px solid #cecece !important;
    border-radius:0 !important;
    box-shadow: none !important;
  }
  .lb-data .lb-details{
    text-align: <?php echo e($dir); ?> !important;
    direction: <?php echo e($rtl); ?> !important;
  }
  .lb-data .lb-number{
    float: <?php echo e($indir); ?> !important;
  }
  </style>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom-css-links'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/lightbox.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom-js-links'); ?>
  <script src="<?php echo e(asset('assets/js/lightbox.min.js')); ?>"></script>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>