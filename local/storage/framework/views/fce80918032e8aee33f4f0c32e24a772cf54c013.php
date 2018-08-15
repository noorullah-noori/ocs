 <?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $session = Session::get('lang'); ?>
<style>
    .file {
      visibility: hidden;
      position: absolute;
    }


</style>
<?php
$type = Session::get('type');
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Add President's <?php echo e($type); ?>

                        </header>
                        <div class="panel-body">
                          <?php if($errors->any()): ?>
                            <ul class="alert alert-danger">
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                          <?php endif; ?>
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="<?php echo e(route('the_president.store')); ?>" enctype="multipart/form-data">
                                    <?php if($session == 'en'): ?>
                                    <?php if($type=='word'): ?>
                                    <div class="form-group ">
                                        <label for="short_desc_en" class="control-label col-lg-3">President Word</label>
                                        <div class="col-lg-6">
                                            <textarea name="short_desc_en" value="<?php echo e(old('short_desc_en')); ?>" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                    <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">Title</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title" name="title_en" value="<?php echo e(old('title_en')); ?>" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="date" class="control-label col-lg-3">Date</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="date"  name="date_en" value="<?php echo e(old('date_en')); ?>" type="date" >
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="short_desc_en" class="control-label col-lg-3">Short Description English</label>
                                        <div class="col-lg-6">
                                            <textarea name="short_desc_en" value="<?php echo e(old('short_desc_en')); ?>" class="form-control"></textarea>
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="description_en" class="control-label col-lg-3">Description English</label>
                                        <div class="col-lg-6">
                                            <textarea name="description_en" value="<?php echo e(old('description_en')); ?>" class="form-control format"></textarea>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php elseif($session =='dr'): ?>
                                    <?php if($type=='word'): ?>
                                    <div class="form-group ">
                                        <label for="short_desc_dr" class="control-label col-lg-3">President Word Dari</label>
                                        <div class="col-lg-6">
                                            <textarea name="short_desc_dr" class="form-control rtl"></textarea>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                    <div class="form-group ">
                                        <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control rtl" id="title_dr" name="title_dr" type="text">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control date_dr rtl"  id="date_dr" name="date_dr" type="text" >
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="short_desc_dr" class="control-label col-lg-3">Short Description Dari</label>
                                        <div class="col-lg-6">
                                            <textarea name="short_desc_dr" class="form-control rtl"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_dr" class="control-label col-lg-3">Description Dari</label>
                                        <div class="col-lg-6">
                                            <textarea name="description_dr" class="form-control format rtl"></textarea>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php elseif($session == 'pa'): ?>
                                    <?php if($type=='word'): ?>
                                     <div class="form-group ">
                                        <label for="short_desc_pa" class="control-label col-lg-3">President Word Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea name="short_desc_pa" class="form-control rtl"></textarea>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                     <div class="form-group ">
                                        <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control rtl" id="title_pa" name="title_pa" type="text">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="date_pa" class="control-label col-lg-3">Date Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control date_dr rtl"  id="date_pa" name="date_pa" type="text" >
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="short_desc_pa" class="control-label col-lg-3">Short Description Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea name="short_desc_pa" class="form-control rtl"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_pa" class="control-label col-lg-3">Description Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea name="description_pa" class="form-control format rtl"></textarea>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                    <?php if($type!='order' AND $type!='decree'): ?>
                                      <div class="form-group">
                                        <label for="image" class="control-label col-lg-3">Image</label>
                                        <input type="file" name="image" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                    <input type="hidden" name="type" value="<?php echo e($type); ?>">
                                    

                                    <?php echo e(csrf_field()); ?>


                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-default"  type="button">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
        </div>

</section>

<?php echo $__env->make('admin.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
    $(document).on('click', '.browse', function(){
      var file = $(this).parent().parent().parent().find('.file');
      file.trigger('click');
    });
    $(document).on('change', '.file', function(){
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
</script>
