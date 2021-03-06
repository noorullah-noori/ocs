<?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $session = Session::get('lang');
global $jdate; ?>

<style>
    .file {
      visibility: hidden;
      position: absolute;
    }

</style>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Album
                        </header>
                        <?php if($errors->any()): ?>
                          <div class="alert alert-danger">
                            <ul>
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                          </div>
                        <?php endif; ?>
                        <div class="panel-body">
                            <div class="form cmxform form-horizontal">
                                <?php echo Form::model($album, ['route' => array('album.update',$album->id),'files' =>true]); ?>

                                <?php echo e(method_field('PATCH')); ?>

                                <?php if($session =='en'): ?>
                                    <div class="form-group ">
                                        <label for="title_en" class="control-label col-lg-3">Title</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title_en" value="<?php echo e($album->title_en); ?>" name="title_en" type="text">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="date" class="control-label col-lg-3">Date</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="date" value="<?php echo e($album->date_en); ?>"  name="date_en" type="date" required>
                                        </div>
                                    </div>
                                    <?php elseif($session =='dr'): ?>
                                    <div class="form-group ">
                                        <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control rtl" id="title_dr" value="<?php echo e($album->title_dr); ?>" name="title_dr" type="text">
                                        </div>
                                    </div>
                                   
                                      <div class="form-group date_dari">
                                          <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                                          <div class="col-lg-6">
                                            <input class="form-control date_dr" id="date_dr" value="<?php echo e($album->date_dr); ?>"  name="date_dr" type="text" required>
                                          </div>
                                      </div>
                                    <?php else: ?>
                                    <div class="form-group ">
                                        <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control rtl" id="title_pa" value="<?php echo e($album->title_pa); ?>" name="title_pa" type="text">
                                        </div>
                                    </div>

                                      <div class="form-group date_dari">
                                          <label for="date_dr" class="control-label col-lg-3">Date Pashto</label>
                                          <div class="col-lg-6">
                                            <input class="form-control date_dr" id="date_dr" value="<?php echo e($album->date_dr); ?>"  name="date_dr" type="text" required>
                                          </div>
                                      </div>
                                    <?php endif; ?>
                                     <div class="form-group form-check">
                                        <label class="col-lg-6 col-md-offset-1 form-check-label">
                                          <input type="checkbox" id="replace_image" name="replace" class="form-check-input">
                                          Replace Image?
                                        </label>
                                      </div>
                                    <div class="form-group" id="image_upload">
                                        <label for="image" class="control-label col-lg-3">Image</label>
                                        <input type="file" name="image" class="file" value="<?php echo e($album->image); ?>">
                                        <div class="input-group col-md-6 col-md-offset-1 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                            <a href="javascript:void(0)" onclick="clearForm()" class="btn btn-warning"  type="button">Clear All</a>
                                            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-default"  type="button">Cancel</a>
                                        </div>
                                    </div>
                               <?php echo Form::close(); ?>

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
