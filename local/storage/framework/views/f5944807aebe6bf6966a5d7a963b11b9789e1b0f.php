<?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $session = Session::get('lang'); ?>
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
                            Edit Biography
                        </header>
                        <div class="panel-body">
                          <?php if($errors->any()): ?>
                            <ul class="alert alert-danger">
                              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                          <?php endif; ?>
                            <div class="form cmxform form-horizontal">
                                <?php echo Form::model($bio, ['route' => array('the_bio.update',$bio->id),'files' =>true]); ?>

                                <?php echo e(method_field('PATCH')); ?>

                                    <?php if($session=='en'): ?>
                                      <div class="form-group ">
                                        <label for="bio_en" class="control-label col-lg-3">Biography English</label>
                                        <div class="col-lg-6">
                                            <textarea name="bio_en" class="form-control format"><?php echo e($bio->bio_en); ?></textarea>
                                        </div>
                                    </div>
                                    <?php elseif($session=='dr'): ?>
                                    <div class="form-group ">
                                        <label for="bio_dr" class="control-label col-lg-3">Biography Dari</label>
                                        <div class="col-lg-6">
                                            <textarea name="bio_dr" class="form-control format"><?php echo e($bio->bio_dr); ?></textarea>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                    <div class="form-group ">
                                        <label for="bio_pa" class="control-label col-lg-3">Biography Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea name="bio_pa" class="form-control format"><?php echo e($bio->bio_pa); ?></textarea>
                                        </div>
                                    </div>
                                    <?php endif; ?>

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
