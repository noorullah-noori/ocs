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
                            Edit President Trip
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
                                <?php echo Form::model($trip, ['route' => array('trips.update',$trip->id),'files' =>true]); ?>

                                <?php echo e(method_field('PATCH')); ?>

                                <?php if($session=='dr'): ?>
                                  <div class="form-group ">
                                      <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                      <div class="col-lg-6">
                                          <input class=" form-control rtl" id="title_dr" value="<?php echo e($trip->title_dr); ?>" name="title_dr" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group form-check">
                                        <label class="col-lg-6 col-md-offset-1 form-check-label">
                                          <input type="checkbox" id="change_date" name="change_date" class="form-check-input">
                                          Change Date?
                                        </label>
                                      </div>
                                      <div class="form-group date_dari">
                                          <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                                          <div class="col-lg-6">
                                            <input class="form-control change_date" disabled id="date_dr" value="<?php echo e($jdate->detailedDate($trip->date_dr,$session)); ?>"  name="date_dr" type="text" required>
                                          </div>
                                      </div>
                                  <div class="form-group ">
                                      <label for="short_desc_dr" class="control-label col-lg-3">Short Description Dari</label>
                                      <div class="col-lg-6">
                                          <textarea name="short_desc_dr" class="form-control rtl"> <?php echo e($trip->short_desc_dr); ?></textarea>
                                      </div>
                                  </div>

                                  <div class="form-group ">
                                      <label for="description_dr" class="control-label col-lg-3">Description Dari</label>
                                      <div class="col-lg-6">
                                          <textarea name="description_dr" class="form-control format rtl"> <?php echo e($trip->description_dr); ?></textarea>
                                      </div>
                                  </div>
                                <?php elseif($session=='pa'): ?>

                                  <div class="form-group ">
                                      <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                                      <div class="col-lg-6">
                                          <input class=" form-control rtl" id="title_pa" value="<?php echo e($trip->title_pa); ?>" name="title_pa" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group form-check">
                                        <label class="col-lg-6 col-md-offset-1 form-check-label">
                                          <input type="checkbox" id="change_date" name="change_date" class="form-check-input">
                                          Change Date?
                                        </label>
                                      </div>
                                      <div class="form-group date_dari">
                                          <label for="date_pa" class="control-label col-lg-3">Date Pashto</label>
                                          <div class="col-lg-6">
                                            <input class="form-control change_date" disabled id="date_pa" value="<?php echo e($jdate->detailedDate($trip->date_dr,$session)); ?>"  name="date_pa" type="text" required>
                                          </div>
                                      </div>

                                  <div class="form-group ">
                                      <label for="short_desc_pa" class="control-label col-lg-3">Short Description Pashto</label>
                                      <div class="col-lg-6">
                                          <textarea name="short_desc_pa" class="form-control rtl"> <?php echo e($trip->short_desc_pa); ?></textarea>
                                      </div>
                                  </div>

                                  <div class="form-group ">
                                      <label for="description_pa" class="control-label col-lg-3">Description Pashto</label>
                                      <div class="col-lg-6">
                                          <textarea name="description_pa" class="form-control format rtl"><?php echo e($trip->description_pa); ?></textarea>
                                      </div>
                                  </div>


                                <?php elseif($session=='en'): ?>
                                  <div class="form-group ">
                                      <label for="title" class="control-label col-lg-3">Title</label>
                                      <div class="col-lg-6">
                                          <input class=" form-control" id="title" value="<?php echo e($trip->title_en); ?>" name="title_en" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="date" class="control-label col-lg-3">Date</label>
                                      <div class="col-lg-6">
                                          <input class=" form-control" id="date" value="<?php echo e($trip->date_en); ?>"  name="date_en" type="date">
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="short_desc_en" class="control-label col-lg-3">Short Description English</label>
                                      <div class="col-lg-6">
                                          <textarea name="short_desc_en" class="form-control"> <?php echo e($trip->short_desc_en); ?></textarea>
                                      </div>
                                  </div>
                                  <div class="form-group ">
                                      <label for="description_en" class="control-label col-lg-3">Description English</label>
                                      <div class="col-lg-6">
                                          <textarea name="description_en" class="form-control format"><?php echo e($trip->description_en); ?></textarea>
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
                                        <input type="file" name="image" class="file" value="">
                                        <div class="input-group col-md-6 col-md-offset-1 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="type" value="<?php echo e($trip->type); ?>">

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
