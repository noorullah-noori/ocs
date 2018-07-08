<?php $__env->startSection('title',trans('menu.journalist_form')); ?>
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
  <form action="<?php echo e(url($lang.'/store_journalist_form')); ?>" method="post" class="ui stackable form">
     <div class="ui grid" style="direction: <?php echo e($rtl); ?> !important;" id="form">
       <div class="row">

       </div>
       <div class="row" style="direction: <?php echo e($rtl); ?>">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.name')); ?>*</label>
             <input type="text" class="body_font" name="name" required="required" placeholder="<?php echo e(trans('subscription.name')); ?>">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.last_name')); ?>*</label>
             <input type="text" class="body_font" name="last_name" required="required" placeholder="<?php echo e(trans('subscription.last_name')); ?>">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.father_name')); ?>*</label>
             <input type="text" class="body_font" name="father_name" placeholder="<?php echo e(trans('subscription.father_name')); ?>" required="required">
           </div>
         </div>
       </div>

       <div class="row" style="direction: <?php echo e($rtl); ?>">
         <div class="eight wide computer eight wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.nationality')); ?>*</label>
             <input type="text" class="body_font" name="nationality" placeholder="<?php echo e(trans('subscription.nationality')); ?>" required="required">
           </div>
         </div>
         <div class="eight wide computer eight wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.passport_or_national_id')); ?>*</label>
             <input type="text" class="body_font" name="passport" placeholder="<?php echo e(trans('subscription.passport_or_national_id')); ?>" required="required">
           </div>
         </div>
       </div>

         <label class="ui header"><?php echo e(trans('subscription.official_email')); ?>*</label>
        <div class="row" style="direction: <?php echo e($rtl); ?>">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.email')); ?> 1</label>
             <input type="email" class="body_font" name="email1" placeholder="<?php echo e(trans('subscription.email')); ?>1" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.email')); ?> 2</label>
             <input type="email" class="body_font" name="email2" placeholder="<?php echo e(trans('subscription.email')); ?>2">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.email')); ?> 3</label>
             <input type="email" class="body_font" name="email3" placeholder="<?php echo e(trans('subscription.email')); ?>3">
           </div>
         </div>
       </div>

        <label class="ui header"><?php echo e(trans('subscription.contact_number')); ?>*</label>
        <div class="row" style="direction: <?php echo e($rtl); ?>">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.contact')); ?> 1</label>
             <input type="text" class="body_font" name="phone1" placeholder="<?php echo e(trans('subscription.contact')); ?>1";>
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.contact')); ?> 2</label>
             <input type="text" class="body_font" name="phone2" placeholder="<?php echo e(trans('subscription.contact')); ?>2";>
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.contact')); ?> 3</label>
             <input type="text" class="body_font" name="phone3" placeholder="<?php echo e(trans('subscription.contact')); ?>3";>
           </div>
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label><?php echo e(trans('subscription.descipline')); ?></label>
           <div class="ui fluid multiple search selection dropdown" id="discipline">
             <input name="discipline"  tabindex="-1" class="unfocusable-element" type="hidden">
             <div class="default text" style="<?php echo e($dir); ?>:0;"><?php echo e(trans('subscription.descipline')); ?></div>
           </div>
         </div>
       </div>

       <label class="ui header"><?php echo e(trans('subscription.official_social_media')); ?>*</label>
        <div class="row" style="direction: <?php echo e($rtl); ?>">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.facebook')); ?></label>
             <input type="text" class="body_font" name="facebook" placeholder="<?php echo e(trans('subscription.facebook')); ?>" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.twitter')); ?></label>
             <input type="text" class="body_font" name="twitter" placeholder="<?php echo e(trans('subscription.twitter')); ?>" required="required">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.linked_in')); ?></label>
             <input type="text" class="body_font" name="linked_in" placeholder="<?php echo e(trans('subscription.linked_in')); ?>" required="required">
           </div>
         </div>
       </div>

       <div class="row">
         <div class="field column">
         <label><?php echo e(trans('subscription.area_of_expertise')); ?></label>
             <select name="type" id="type" class="ui dropdown">
               <option value="" style="right: 0;"><?php echo e(trans('subscription.area_of_expertise')); ?></option>
               <option value="writer"><?php echo e(trans('subscription.writer')); ?></option>
               <option value="photographer"><?php echo e(trans('subscription.photographer')); ?></option>
               <option value="reporter"><?php echo e(trans('subscription.news_reporter')); ?></option>
               <option value="cartonist"><?php echo e(trans('subscription.cartoonist')); ?></option>
               <option value="others"><?php echo e(trans('subscription.others')); ?></option>
             </select>

         </div>
       </div>

         <div class="row"  style="display: none" id="type_text_id">
         <div class="field column">
           <input type="text"  id="type_text" placeholder="<?php echo e(trans('subscription.area_of_expertise')); ?>" name="type_text">
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label><?php echo e(trans('subscription.language_fluency')); ?>*</label>
           <div class="ui multiple search selection dropdown" id="language_fluency">
             <input name="language"  tabindex="-1" class="unfocusable-element"  type="hidden" required="required">
             <div class="default text"><?php echo e(trans('subscription.language_fluency')); ?></div>
           </div>
         </div>
       </div>

       <div class="row">
         <div class="field column">
         <label><?php echo e(trans('subscription.office_starting_date')); ?>*</label>
             <input name="starting_date" type="<?php echo ($lang!='en')?'text':'date'; ?>" required="required" class="body_font <?php echo ($lang!='en')?'date_dr':''; ?>" >
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label><?php echo e(trans('subscription.current_media_outlet')); ?>*</label>
           <div class="ui fluid multiple search selection dropdown" id="current_media">
             <input name="current_media"  tabindex="-1" class="unfocusable-element" type="hidden" required="required">
             <div class="default text"><?php echo e(trans('subscription.current_media_outlet')); ?></div>
           </div>
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label><?php echo e(trans('subscription.previous_media_outlet')); ?>*</label>
           <div class="ui fluid multiple search selection dropdown" id="previous_media">
             <input name="previous_media"  tabindex="-1" class="unfocusable-element" type="hidden" required="required">
             <div class="default text"><?php echo e(trans('subscription.previous_media_outlet')); ?></div>
           </div>
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label><?php echo e(trans('subscription.office_address')); ?>*</label>
           <div class="ui fluid" id="">
             <input name="address" type="text" placeholder="<?php echo e(trans('subscription.office_address')); ?>" required="required">
           </div>
         </div>
       </div>


       <label class="ui header"><?php echo e(trans('subscription.official_contact_number')); ?></label>
        <div class="row" style="direction: <?php echo e($rtl); ?>">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.contact')); ?> 1*</label>
             <input type="text" class="body_font" name="o_phone1" placeholder="<?php echo e(trans('subscription.contact')); ?>" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.contact')); ?> 2</label>
             <input type="text" class="body_font" name="o_phone2" placeholder="<?php echo e(trans('subscription.contact')); ?>">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.contact')); ?> 3</label>
             <input type="text" class="body_font" name="o_phone3" placeholder="<?php echo e(trans('subscription.contact')); ?>">
           </div>
         </div>
       </div>

       <label class="ui small header"><?php echo e(trans('subscription.emails')); ?></label>
        <div class="row" style="direction: <?php echo e($rtl); ?>">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.email')); ?> 1*</label>
             <input type="email" class="body_font" name="o_email1" placeholder="<?php echo e(trans('subscription.email')); ?>" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.email')); ?> 2</label>
             <input type="email" class="body_font" name="o_email2" placeholder="<?php echo e(trans('subscription.email')); ?>">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.email')); ?> 3</label>
             <input type="email" class="body_font" name="o_email3" placeholder="<?php echo e(trans('subscription.email')); ?>">
           </div>
         </div>
       </div>

         <label class="ui small header"><?php echo e(trans('subscription.website_or_social')); ?>*</label>
        <div class="row" style="direction: <?php echo e($rtl); ?>">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.website')); ?></label>
             <input type="text" class="body_font" name="o_website" placeholder="<?php echo e(trans('subscription.website')); ?>" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.facebook')); ?></label>
             <input type="text" class="body_font" name="o_facebook" placeholder="<?php echo e(trans('subscription.facebook')); ?>" required="required">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.twitter')); ?></label>
             <input type="text" class="body_font" name="o_twitter" placeholder="<?php echo e(trans('subscription.twitter')); ?>" required="required">
           </div>
         </div>
       </div>

       </div>

     </div>

     <div class="row">
       <div class="field column">
       <button class="ui blue icon labeled button body_font" style="border-radius:0;margin-left:5px;margin-top: 30px" type="submit">
         <i class="envelope icon"></i>
         <?php echo e(trans('subscription.submit')); ?>

       </button>
     </div>
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

  $('#type').change(function(){
    if($("#type").val()=='others'){
      $('#type_text_id').css('display','block');
    }
    else{
     $('#type_text_id').css('display','none');
    }
  });

  </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>