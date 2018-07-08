
<?php if($breadcrumbs): ?>
  <div class="ui fluid card" style="">
    <div class="ui breadcrumb not-printable" style="direction:<?php echo e($rtl); ?>">
      <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(!$breadcrumb->last): ?>
          <a class="section" href="<?php echo e($breadcrumb->url); ?>"><?php echo e($breadcrumb->title); ?></a>
          <div class="divider"> / </div>
        <?php else: ?>
          <a class="section"><?php echo e($breadcrumb->title); ?></a>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
<?php endif; ?>
