<?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Album Images</h2>
        </div>
        <div class="ui cards" style="padding-top:10px">
    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="card">
                <div class="image">
                  <img src="<?php echo e(asset('uploads/albumImage/'.$image->image)); ?>" style="width:290px !important;height: 130px;">
                </div>
                  
                <div class="extra content">
                  <a href="<?php echo e(route('edit_album_image',$image->id)); ?>" class="left floated like">
                    <i class="edit icon"></i>
                    Replace
                  </a>
                  <a onclick="return confirm_click(<?php echo e($image->id); ?>,<?php echo e($id); ?>)" class="right floated star">
                    <i class="delete icon"></i>
                    Delete
                  </a>
                </div>
              </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>
 <div class="container">
   <a class="ui button" href="<?php echo e(URL::previous()); ?>" style="float:right;margin-right: 22%;margin-top:20px">
  Cancel
</a>
 </div>
</div>
</section>

<?php echo $__env->make('admin.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
function confirm_click(id,album_id){
        var agree = confirm('Are you sure want to delete this record');
        if(agree){
           window.location = "<?php echo e(url('admin/delete_album_image')); ?>"+'/'+id+'/'+album_id;
        }
        else{
            return false;
        }
    }
    </script>
