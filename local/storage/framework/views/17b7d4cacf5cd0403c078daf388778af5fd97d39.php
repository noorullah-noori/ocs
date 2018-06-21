
<?php $__env->startSection('title',trans('home.latest_news')); ?>
<?php $__env->startSection('content'); ?>

   <div class="ui items" style="">
        <?php if(sizeof($lattest_news)!=0): ?>
        <?php $__currentLoopData = $lattest_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php 
           $url =  ($item->table_name=='documents')?asset('uploads/documents_'.$lang.'/'.$item->table_id.'.pdf'):'';
              // $img = '';
             if($item->table_name=='documents'){
                $extension = \File::extension($item->image_thumb);
                if($extension=='xls' || $extension=='xlsx'){
                    $img = asset('assets/img/excel.png');
                }
                else if($extension=='doc'){
                 $img = asset('assets/img/doc.png'); 
                }
                else{
                  $img = asset('assets/img/pdf.png');
                }
              }
              else if($item->table_name == 'videos'){
                $img = "https://img.youtube.com/vi/$item->image_thumb/hqdefault.jpg";
              }
               else if($item->type == 'decree' || $item->type=='order'){
                  $img = asset('uploads/'.$item->type.'/default.jpg');
              }
              else{
                $img = asset($item->image_thumb);
              }
        ?>
            <div class="item <?php echo e(($item==$lattest_news->last())?'no_border':''); ?>">
              <div class="other_pages_thumbnail">
                <img src="<?php echo e($img); ?>" style="padding-left:8px;">
              </div>
              <div class="content">
                <a href="<?php echo e(($item->table_name=='documents')?$url:url($lang.'/'.$item->type.'_details/'.$item->table_id)); ?>" class="ui small header title_font"><?php echo e($item->$title); ?></a>
                <div class="meta">
                  <span dir=""><?php echo e($jdate->detailedDate($item->$date,$lang)); ?></span>
                </div>
                <div class=" description ">
                  <p class="body_font"><?php echo e($item->$short_desc); ?></p>
                </div>
              </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
<style>
  .ui.fluid.card {
    border:1px solid #ddd;
    margin-bottom:10px;
  }
  .ui.items > .item {
    border-bottom: 1px dashed #ddd;
    padding-bottom: 10px;
    direction:<?php echo e($rtl); ?> !important;
  }
  .ui.items {
    direction:rtl;
    float: right;
    text-align: right;
  }
  </style>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>