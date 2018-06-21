
<?php $__env->startSection('title',trans('menu.expert_form')); ?>
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
  <form action="<?php echo e(url($lang.'/store_expert_form')); ?>" method="post" class="ui stackable form">
     <div class="ui grid" style="direction: <?php echo e($rtl); ?> !important;" id="form">
       <div class="row">

       </div>
       <div class="row" style="direction: <?php echo e($rtl); ?>">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.name')); ?>*</label>
             <input type="text" class="body_font" name="name" placeholder="<?php echo e(trans('subscription.name')); ?>" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.last_name')); ?>*</label>
             <input type="text" class="body_font" name="last_name" placeholder="<?php echo e(trans('subscription.last_name')); ?>" required="required">
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

         <label class="ui header"><?php echo e(trans('subscription.emails')); ?></label>
        <div class="row" style="direction: <?php echo e($rtl); ?>">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.email')); ?> 1*</label>
             <input type="email" class="body_font" name="email1" placeholder="<?php echo e(trans('subscription.email')); ?>" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.email')); ?> 2</label>
             <input type="email" class="body_font" name="email2" placeholder="<?php echo e(trans('subscription.email')); ?>">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.email')); ?> 3</label>
             <input type="email" class="body_font" name="email3" placeholder="<?php echo e(trans('subscription.email')); ?>">
           </div>
         </div>
       </div>

        <label class="ui header"><?php echo e(trans('subscription.contact_number')); ?></label>
        <div class="row" style="direction: <?php echo e($rtl); ?>">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.contact')); ?> 1*</label>
             <input type="text" class="body_font" name="phone1" placeholder="<?php echo e(trans('subscription.contact')); ?>" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.contact')); ?> 2</label>
             <input type="text" class="body_font" name="phone2" placeholder="<?php echo e(trans('subscription.contact')); ?>">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label><?php echo e(trans('subscription.contact')); ?> 3</label>
             <input type="text" class="body_font" name="phone3" placeholder="<?php echo e(trans('subscription.contact')); ?>">
           </div>
         </div>
       </div>

       <label class="ui header"><?php echo e(trans('subscription.social_media')); ?>*</label>
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
         <label><?php echo e(trans('subscription.area_of_expertise')); ?>*</label>
             <select name="type" id="type"  class="ui dropdown">
               <option value=""><?php echo e(trans('subscription.area_of_expertise')); ?></option>
               <option value="writer"><?php echo e(trans('subscription.writer')); ?></option>
               <option value="attendee"><?php echo e(trans('subscription.discussion_participant')); ?></option>
               <option value="other" class="other" id="other"><?php echo e(trans('subscription.others')); ?></option>
             </select>

         </div>
       </div>

       <div class="row"  style="display: none" id="type_text_id">
         <div class="field column">
           <input type="text"  id="type_text" placeholder="Expertise in" name="type_text">
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label><?php echo e(trans('subscription.language_fluency')); ?>*</label>
           <div class="ui fluid multiple search selection dropdown" id="lang">
             <input name="language"  tabindex="-1" class="unfocusable-element" type="hidden">
             <div class="default text"><?php echo e(trans('subscription.language_fluency')); ?></div>
           </div>
         </div>
       </div>

       <div class="row">
         <div class="field column">
         <label><?php echo e(trans('subscription.office_starting_date')); ?>*</label>
             <input name="starting_date" class="<?php echo($lang=='en')?'':'date_dr'; ?>" type="<?php echo($lang=='en')?'date':'text'; ?>" >
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label><?php echo e(trans('subscription.descipline')); ?>*</label>
           <div class="ui fluid multiple search selection dropdown" id="descipline">
             <input name="descipline"  tabindex="-1" class="unfocusable-element" type="hidden">
             <div class="default text"><?php echo e(trans('subscription.descipline')); ?></div>
           </div>
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label><?php echo e(trans('subscription.specialization')); ?>*</label>
           <div class="ui fluid multiple search selection dropdown" id="specialization">
             <input name="specialization"  tabindex="-1" class="unfocusable-element" type="hidden">
             <div class="default text"><?php echo e(trans('subscription.specialization')); ?></div>
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