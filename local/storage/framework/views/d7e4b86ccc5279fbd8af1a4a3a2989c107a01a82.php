<?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $session = Session::get('lang'); ?>
<style>
      .cropit-preview,.cropit-preview-test {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 653px;
        height: 280px;
        margin: auto;
      }

      .cropit-preview-image-container {
        cursor: move;
      }
      .cropit-image-zoom-input {
        width: 170px !important;
        margin: auto;
      }
    .fileContainer {
      overflow: hidden;
      background: #418bcb;
      width: 133px;
      text-align: center;
      color: white;
      border-radius: 4px;
      padding: 6px 12px;
      font-weight: normal;
      cursor: pointer;
      font-size: 14px;
    }
    .fileContainer input[type=file]{
      opacity: 0;
      height: 0;
    }


</style>
<?php
$route= Session::get('type');
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="col-md-11">
        <section class="panel">
            <header class="panel-heading">
                Add <?php echo e($route); ?>

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
                    <form class="cmxform form-horizontal " id="signupForm" method="post" action="<?php echo e(route('media.store')); ?>" enctype="multipart/form-data">
                    <?php if($session=='en'): ?>
                        <div class="form-group ">
                            <label for="title_en" class="control-label col-lg-3">Title</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="title_en" name="title_en" value="<?php echo e(old('title_en')); ?>" type="text">
                            </div>
                        </div>
                         <div class="form-group ">
                            <label for="date_en" class="control-label col-lg-3">Date</label>
                            <div class="col-lg-6">
                                <input class=" form-control" id="date_en"  name="date_en" value="<?php echo e(old('date_en')); ?>" type="date" required>
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
                        <?php elseif($session=='dr'): ?>
                        <input type="hidden" id="tags_array" name="tags_array">
                        <div class="form-group ">
                            <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                            <div class="col-lg-6">
                                <input class=" form-control rtl" id="title_dr"  name="title_dr" type="text">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                            <div class="col-lg-6">
                                <input class=" form-control date_dr rtl"  id="date_dr" name="date_dr" type="text" required>
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
                         <div class="form-group">
                          <label for="" class="control-label col-lg-3">Tags</label>
                          <div class="col-lg-6">
                            <div class="ui fluid multiple search selection dropdown" id="tags">
                              <input name="tags" type="hidden">
                              <i class="dropdown icon"></i>
                              <div class="default text">Tags</div>
                              <div class="menu" id="menu">
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php else: ?>
                        <div class="form-group ">
                            <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                            <div class="col-lg-6">
                                <input class=" form-control rtl" id="title_pa"  name="title_pa" type="text">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="date_pa" class="control-label col-lg-3">Date Pashto</label>
                            <div class="col-lg-6">
                                <input class=" form-control date_dr rtl"  id="date_pa" name="date_pa" type="text" required>
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
                        
                        
                            
                            
                        <div class="form-group">
                          <div class="col-lg-3"></div>
                          <div class="col-lg-6">
                            <div class="image-editor">
                              <label for="" class="fileContainer">
                                <input type="file" class="cropit-image-input">
                                Browse Image
                              </label>
                              <div class="cropit-preview"></div>
                              
                              <input type="range" class="cropit-image-zoom-input">
                              <input type="hidden" name="image-data" class="hidden-image-data" />
                            </div>
                            <div class="thumb-image-editor">
                            </div>

                          </div>
                        </div>

                        <input type="hidden" name="type" value="<?php echo e($route); ?>">

                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <button class="btn btn-primary" onclick="go()" type="">Save</button>
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


    $(function() {
      $('.image-editor').cropit();
      // $('.thumb-image-editor').cropit();
      $('form').submit(function() {
        // Move cropped image data to hidden input
        var imageData = $('.image-editor').cropit('export', {
          type: 'image/jpeg',
          quality: .9,
          originalSize: true
        });
        $('.image-editor').find('.cropit-preview-test,.cropit-preview');
        $('.hidden-image-data').val(imageData);
        // return false;
      });
    })
</script>
