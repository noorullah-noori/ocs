<!DOCTYPE html>
<html>
<head>
  <?php echo $__env->yieldPushContent('meta_tags'); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(trans('home.ocs_title')); ?></title>

  <?php echo $__env->make('include.css_links', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo $__env->make('include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="ui segment">
    <div class="ui centered container grid" id="main" style="display: flex">
      <?php echo $__env->make('include.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="sixteen wide tablet mobile eleven wide computer column">
        <?php echo Breadcrumbs::renderIfExists(); ?>


        <div class="ui fluid card" style="direction:rtl;float:right;text-align:right;">
          <div class="content" id="bio" style="text-align:right">
            <?php if($content_header): ?>
              <h2 class="ui header title_font border"><?php echo $__env->yieldContent('title'); ?></h2>
            <?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php if(strpos(Request::url(),'details') || strpos(Request::url(),'register_complaint') || strpos(Request::url(),'chief_of_staff')  || strpos(Request::url(),'presidential_palace') || strpos(Request::url(),'media_directorate')): ?>
              <?php $__env->startComponent('include.components.share_buttons'); ?>
              <?php echo $__env->renderComponent(); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php echo $__env->make('include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


</body>
</html>
