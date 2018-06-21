
<?php $__env->startSection('title',trans('menu.media_form')); ?>
<?php $__env->startSection('content'); ?>
  <?php if(Session::has('success')): ?>
    <div class="ui message green body_font"><?php echo e(Session::get('success')); ?></div>
  <?php elseif(Session::has('failure')): ?>
    <div class="ui message red body_font"><?php echo e(Session::get('failure')); ?></div>
  <?php endif; ?>
  <?php if($errors->any()): ?>
    <ul class="alert alert-danger">
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  <?php endif; ?>
  <form action="<?php echo e(url($lang.'/store_media_form')); ?>" method="post" class="ui stackable form">
   <div class="ui grid" style="direction: <?php echo e($rtl); ?> !important;" id="form">
     <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="sixteen wide mobile four wide tablet four wide computer column">
       <label><?php echo e(trans('subscription.media_name')); ?>*</label>
         <div class="field">
           <input type="text" class="body_font" name="name" placeholder="<?php echo e(trans('subscription.media_name')); ?>" required="required">
         </div>
       </div>
       <div class="sixteen wide mobile four wide tablet four wide computer column">
         <div class="field">
         <label><?php echo e(trans('subscription.license_number')); ?>*</label>
           <input type="text" class="body_font" name="license_number" placeholder="<?php echo e(trans('subscription.license_number')); ?>" required="required">
         </div>
       </div>
       <div class="sixteen wide mobile four wide tablet four wide computer column">
         <div class="field">
         <label><?php echo e(trans('subscription.license_issue_date')); ?>*</label>
           <input type="text" <?php echo ($lang!='en')?'date_dr':'onfocus=(this.type="date")'; ?> class="body_font <?php echo ($lang!='en')?'date_dr':''; ?>" name="license_issue_date" placeholder="<?php echo e(trans('subscription.license_issue_date')); ?>" required="required">
         </div>
       </div>
       <div class="sixteen wide mobile four wide tablet four wide computer column">
         <div class="field">
         <label><?php echo e(trans('subscription.office_starting_date')); ?>*</label>
           <input type="text" <?php echo ($lang!='en')?'date_dr':'onfocus=(this.type="date")'; ?> class="body_font <?php echo ($lang!='en')?'date_dr':''; ?>" name="office_starting_date" placeholder="<?php echo e(trans('subscription.office_starting_date')); ?>" required="required">
         </div>
       </div>
     </div>
     <div class="row">
       <div class="field column" style="direction:<?php echo e($rtl); ?> !important">
         <label class="body_font" style=" font-size:15px;"><?php echo e(trans('subscription.type_of_media_outlet')); ?>*</label>
         <div class="ui radio checkbox">
           <input type="radio" name="type" value="television">
           <label class="body_font"><?php echo e(trans('subscription.television')); ?></label>
         </div>

         <div class="ui radio checkbox">
           <input type="radio" name="type" value="radio">
           <label class="body_font"><?php echo e(trans('subscription.radio')); ?></label>
         </div>

         <div class="ui radio checkbox">
           <input type="radio" name="type" value="printing_media">
           <label class="body_font"><?php echo e(trans('subscription.printing_media')); ?></label>
         </div>

         <div class="ui radio checkbox">
           <input type="radio" name="type" value="news_agency">
           <label class="body_font"><?php echo e(trans('subscription.news_agency')); ?></label>
         </div>

         <div class="ui radio checkbox">
           <input type="radio" name="type" value="electronic_media">
           <label class="body_font"><?php echo e(trans('subscription.electronic_media')); ?></label>
         </div>

         <div class="ui radio checkbox">
          <input type="radio" name="type" value="others" checked="checked">
           <label class="body_font"><?php echo e(trans('subscription.others')); ?> </label>
         </div>
       </div>
     </div>

     <div class="row" style="">
       <div class="field column">
       <label><?php echo e(trans('subscription.coverage_area')); ?>*</label>
         <div class="ui fluid multiple search selection dropdown" id="coverage_area">
           <input name="coverage_area"  tabindex="-1" class="unfocusable-element" type="hidden" required="required">
           <div class="default text body_font"><?php echo e(trans('subscription.coverage_area_desc')); ?></div>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="field column">
       <label><?php echo e(trans('subscription.type_of_broadcasting')); ?>*</label>
         <div class="ui fluid multiple search selection dropdown" id="type_of_broadcasting">
           <input name="type_of_broadcasting"  tabindex="-1" class="unfocusable-element" type="hidden" required="required">
           <div class="default text body_font"><?php echo e(trans('subscription.type_of_broadcasting_desc')); ?></div>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="field column">
       <label><?php echo e(trans('subscription.audience_group')); ?></label>
         <div class="ui fluid multiple search selection dropdown" id="audience_group">
           <input name="audience_group"  tabindex="-1" class="unfocusable-element" type="hidden">
           <div class="default text body_font"><?php echo e(trans('subscription.audience_group_desc')); ?></div>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="field column">
       <label><?php echo e(trans('subscription.language_of_broadcasting')); ?>*</label>
         <div class="ui fluid multiple search selection dropdown" id="language_of_broadcasting">
           <input name="language_of_broadcasting"  tabindex="-1" class="unfocusable-element" type="hidden">
           <div class="default text body_font"><?php echo e(trans('subscription.language_of_broadcasting')); ?></div>
         </div>
       </div>
     </div>

      <div class="row" style="">
       <div class="field column">
       <label><?php echo e(trans('subscription.address')); ?>*</label>
         <div class="ui fluid" id="office_address">
           <input name="official_address" type="text" placeholder="<?php echo e(trans('subscription.address')); ?>">
         </div>
       </div>
     </div>

      <label class="ui header"><?php echo e(trans('subscription.official_email')); ?></label>
      <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.email')); ?> 1*</label>
           <input type="email" class="body_font" name="email1" placeholder="<?php echo e(trans('subscription.email')); ?> 1">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.email')); ?> 2</label>
           <input type="email" class="body_font" name="email2" placeholder="<?php echo e(trans('subscription.email')); ?> 2">
         </div>
       </div>
       <div class="six wide computer six wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.email')); ?> 3</label>
           <input type="email" class="body_font" name="email3" placeholder="<?php echo e(trans('subscription.email')); ?> 3">
         </div>
       </div>
     </div>

     <label class="ui header"><?php echo e(trans('subscription.official_contact_number')); ?></label>
      <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.contact')); ?> 1*</label>
           <input type="text" class="body_font" name="phone1" placeholder="<?php echo e(trans('subscription.contact')); ?> 1">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.contact')); ?> 2</label>
           <input type="text" class="body_font" name="phone2" placeholder="<?php echo e(trans('subscription.contact')); ?> 2">
         </div>
       </div>
       <div class="six wide computer six wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.contact')); ?> 3</label>
           <input type="text" class="body_font" name="phone3" placeholder="<?php echo e(trans('subscription.contact')); ?> 3">
         </div>
       </div>
     </div>

     <label class="ui header"><?php echo e(trans('subscription.website_or_social')); ?>*</label>
      <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.website')); ?></label>
           <input type="text" class="body_font" name="website" placeholder="<?php echo e(trans('subscription.website')); ?>">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.facebook')); ?></label>
           <input type="text" class="body_font" name="facebook" placeholder="<?php echo e(trans('subscription.facebook')); ?>">
         </div>
       </div>
       <div class="six wide computer six wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.twitter')); ?></label>
           <input type="text" class="body_font" name="twitter" placeholder="<?php echo e(trans('subscription.twitter')); ?>">
         </div>
       </div>
     </div>

     <label class="ui header"><?php echo e(trans('subscription.news_director')); ?>*</label>
     <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.name')); ?></label>
           <input type="text" class="body_font" name="d_name" placeholder="<?php echo e(trans('subscription.name')); ?>">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.email')); ?></label>
           <input type="email" class="body_font" name="d_email" placeholder="<?php echo e(trans('subscription.email')); ?>">
         </div>
       </div>
       <div class="six wide computer six wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.contact_number')); ?></label>
           <input type="text" class="body_font" name="d_phone" placeholder="<?php echo e(trans('subscription.contact_number')); ?>">
         </div>
       </div>
     </div>
      <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="eight wide column">
         <div class="field">
         <label><?php echo e(trans('subscription.facebook')); ?></label>
           <input type="text" class="body_font" name="d_facebook" placeholder="<?php echo e(trans('subscription.facebook')); ?>">
         </div>
       </div>
       <div class="eight wide column">
         <div class="field">
         <label><?php echo e(trans('subscription.twitter')); ?></label>
           <input type="text" class="body_font" name="d_twitter" placeholder="<?php echo e(trans('subscription.twitter')); ?>">
         </div>
       </div>
     </div>

     <?php if($lang !='en'): ?>
     <label class="ui header"><?php echo e(trans('subscription.news_reporter')); ?></label>
     <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.name')); ?></label>
           <input type="text" class="body_font" name="r_name" placeholder="<?php echo e(trans('subscription.name')); ?>">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.email')); ?></label>
           <input type="email" class="body_font" name="r_email" placeholder="<?php echo e(trans('subscription.email')); ?>">
         </div>
       </div>
       <div class="sixfive wide computer five wide tablet sixteen wide mobile column wide computer sixfive wide computer five wide tablet sixteen wide mobile column wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.contact')); ?></label>
           <input type="text" class="body_font" name="r_phone" placeholder="<?php echo e(trans('subscription.contact')); ?>">
         </div>
       </div>
     </div>
      <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="eight wide column">
         <div class="field">
         <label><?php echo e(trans('subscription.facebook')); ?></label>
           <input type="text" class="body_font" name="r_facebook" placeholder="<?php echo e(trans('subscription.facebook')); ?>">
         </div>
       </div>
       <div class="eight wide column">
         <div class="field">
         <label><?php echo e(trans('subscription.twitter')); ?></label>
           <input type="text" class="body_font" name="r_twitter" placeholder="<?php echo e(trans('subscription.twitter')); ?>">
         </div>
       </div>
     </div>

     <label class="ui header"><?php echo e(trans('subscription.media_secretary')); ?>*</label>
    <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.name')); ?></label>
           <input type="text" class="body_font" name="s_name" placeholder="<?php echo e(trans('subscription.name')); ?>">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.email')); ?></label>
           <input type="email" class="body_font" name="s_email" placeholder="<?php echo e(trans('subscription.email')); ?>">
         </div>
       </div>
       <div class="sixfive wide computer five wide tablet sixteen wide mobile column wide computer sixfive wide computer five wide tablet sixteen wide mobile column wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.contact')); ?></label>
           <input type="text" class="body_font" name="s_phone" placeholder="<?php echo e(trans('subscription.contact')); ?>">
         </div>
       </div>
     </div>
      <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="eight wide column">
         <div class="field">
         <label><?php echo e(trans('subscription.facebook')); ?></label>
           <input type="text" class="body_font" name="s_facebook" placeholder="<?php echo e(trans('subscription.facebook')); ?>">
         </div>
       </div>
       <div class="eight wide column">
         <div class="field">
         <label><?php echo e(trans('subscription.twitter')); ?></label>
           <input type="text" class="body_font" name="s_twitter" placeholder="<?php echo e(trans('subscription.twitter')); ?>">
         </div>
       </div>
     </div>
     <?php endif; ?>
     <label class="ui header"><?php echo e(trans('subscription.journalist')); ?></label>
     <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.name')); ?></label>
           <input type="text" class="body_font" name="j_name" placeholder="<?php echo e(trans('subscription.name')); ?>">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.email')); ?></label>
           <input type="email" class="body_font" name="j_email" placeholder="<?php echo e(trans('subscription.email')); ?>">
         </div>
       </div>
       <div class="sixfive wide computer five wide tablet sixteen wide mobile column wide computer sixfive wide computer five wide tablet sixteen wide mobile column wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.contact')); ?></label>
           <input type="text" class="body_font" name="j_phone" placeholder="<?php echo e(trans('subscription.contact')); ?>">
         </div>
       </div>
     </div>
      <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="eight wide column">
         <div class="field">
         <label><?php echo e(trans('subscription.facebook')); ?></label>
           <input type="text" class="body_font" name="j_facebook" placeholder="<?php echo e(trans('subscription.facebook')); ?>">
         </div>
       </div>
       <div class="eight wide column">
         <div class="field">
         <label><?php echo e(trans('subscription.twitter')); ?></label>
           <input type="text" class="body_font" name="j_twitter" placeholder="<?php echo e(trans('subscription.twitter')); ?>">
         </div>
       </div>
     </div>


     <label class="ui header"><?php echo e(trans('subscription.journalist')); ?></label>
   <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.name')); ?></label>
           <input type="text" class="body_font" name="j1_name" placeholder="<?php echo e(trans('subscription.name')); ?>">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.email')); ?></label>
           <input type="email" class="body_font" name="j1_email" placeholder="<?php echo e(trans('subscription.email')); ?>">
         </div>
       </div>
       <div class="six wide computer six wide tablet sixteen wide mobile column">
         <div class="field">
         <label><?php echo e(trans('subscription.contact')); ?></label>
           <input type="text" class="body_font" name="j1_phone" placeholder="<?php echo e(trans('subscription.contact')); ?>">
         </div>
       </div>
     </div>
      <div class="row" style="direction: <?php echo e($rtl); ?>">
       <div class="eight wide column">
         <div class="field">
         <label><?php echo e(trans('subscription.facebook')); ?></label>
           <input type="text" class="body_font" name="j1_facebook" placeholder="<?php echo e(trans('subscription.facebook')); ?>">
         </div>
       </div>
       <div class="eight wide column">
         <div class="field">
         <label><?php echo e(trans('subscription.twitter')); ?></label>
           <input type="text" class="body_font" name="j1_twitter" placeholder="<?php echo e(trans('subscription.twitter')); ?>">
         </div>
       </div>
     </div>

   </div>

   <div class="field">
     <button class="ui blue icon labeled button body_font" style="margin-top: 30px;border-radius: 0;" type="submit">
       <i class="envelope icon"></i>
       <?php echo e(trans('subscription.submit')); ?>

     </button>
   </div>
   <?php echo e(csrf_field()); ?>

  </form>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-css'); ?>
  <style>
  #form> .row  * {
    direction: <?php echo e($rtl); ?>;
    text-align: <?php echo e($dir); ?>;
  }
  </style>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('meta_tags'); ?>
  <?php $__env->startComponent('include.components.meta_tags'); ?>

    <?php $__env->slot('meta_title'); ?>
      <?php echo $__env->yieldContent('title'); ?>
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_description'); ?>
      
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_url'); ?>
      <?php echo e(Request::url()); ?>

    <?php $__env->endSlot(); ?>

    <?php $__env->slot('meta_image'); ?>
      
      <?php echo e(asset('uploads/decree/default_fb.jpg')); ?>

      
    <?php $__env->endSlot(); ?>

  <?php echo $__env->renderComponent(); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startPush('custom-js'); ?>
  <script>
  $("input").focusout(function(){
    var value = $(this).val();
    var clear = value.replace(/(<([^>]+)>)/ig,"");
    $(this).val(clear);
  });

  </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>