<?php $__env->startSection('title',trans('menu.ocs')); ?>

<?php $__env->startSection('content'); ?>

  <div class="ui items" style="">
    <?php if(sizeof($data)!=0): ?>
      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item <?php echo e(($value==$data->last())?'no_border':''); ?>">
          <div class="content">
            <a href="<?php echo e(($value->type=='word')?'#':url($lang.'/'.$value->type.'_details/'.$value->table_id)); ?>" class="ui small header title_font"><?php echo e(($value->type=='word')?trans('home.president_word'):$value->$title); ?></a>
            <div class="meta body_font">
              <?php echo e($value->$date); ?>

              
            </div>
            <div class=" description body_font ">
              <p class="body_font"><?php echo e($value->$short_desc); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
      <center><h2 style="">No match Found</h2></center>
    <?php endif; ?>
  </div>
    
      <div class="ui centered grid">
        <?php echo e($data->links()); ?>

      </div>
    
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>

  </style>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('custom-js'); ?>
  <script>

  </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>