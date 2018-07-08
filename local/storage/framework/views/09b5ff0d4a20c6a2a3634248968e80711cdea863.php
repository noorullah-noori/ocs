<?php $__env->startSection('title',trans('menu.ocs')); ?>
<?php $__env->startSection('content'); ?>

  <form class="ui form" method="GET" action="<?php echo e(url($lang.'/get_search')); ?>">
      <div class="field">
          <div class="field">
          <label><?php echo e(trans('search.search')); ?>*</label>
            <input type="text" name="search" placeholder="<?php echo e(trans('search.search')); ?>" required="required">
          </div>
           <div class="field">
           <label><?php echo e(trans('search.search_in')); ?></label>
            <select style="direction:<?php echo e($rtl); ?>;" name="type">
              <option value="word" style="direction:<?php echo e($rtl); ?>;"><?php echo e(trans('search.exact_word')); ?></option>
              <option value="all" selected="selected" style="direction:<?php echo e($rtl); ?>;"><?php echo e(trans('search.all_words')); ?></option>
            </select>
          </div>
      </div>
      <div class="field">
        <label class="ui header title_font"><?php echo e(trans('search.search_date')); ?></label>
        <div class="field">
          <label><?php echo e(trans('search.from')); ?></label>
            <input class="<?php echo e($lang=='en' ? '' : 'date_dr'); ?>" type="<?php echo e($lang=='en' ? 'date' : 'text'); ?>" name="from">
          </div>
           <div class="field">
           <label><?php echo e(trans('search.to')); ?></label>
           <input class="<?php echo e($lang=='en' ? '' : 'date_dr'); ?>" type="<?php echo e($lang=='en' ? 'date' : 'text'); ?>" name="to">
          </div>
      </div>
      <label class="ui header"><?php echo e(trans('search.search_inside')); ?></label>
      <div class="ui three fields" style="direction:ltr;">
      <div class="field">
     <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="decree">
        <label><?php echo e(trans('menu.decrees')); ?></label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="orders">
        <label><?php echo e(trans('menu.orders')); ?></label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="statements">
        <label><?php echo e(trans('menu.statements')); ?></label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="mesasages">
        <label><?php echo e(trans('menu.messages')); ?></label>
      </div>
    </div>
    </div>
      <div class="field">
     <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="words">
        <label><?php echo e(trans('menu.words')); ?></label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="domestic">
        <input type="checkbox" name="search_in[]" style="display: none" checked="checked" value="international">
        <label><?php echo e(trans('menu.trips')); ?></label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="news">
        <label><?php echo e(trans('menu.news')); ?></label>
      </div>
    </div>
	<div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="report">
        <label><?php echo e(trans('menu.reports')); ?></label>
      </div>
    </div>
    </div>
    <div class="field">
     <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="articles">
        <label><?php echo e(trans('menu.articles')); ?></label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="infographic">
        <label><?php echo e(trans('menu.infographics')); ?></label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="album">
        <label><?php echo e(trans('menu.photo_albums')); ?></label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="video">
        <label><?php echo e(trans('menu.videos')); ?></label>
      </div>
    </div>
    </div>
    </div>
    <?php echo e(csrf_field()); ?>

  <button class="ui button" type="submit"><?php echo e(trans('search.search')); ?></button>
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
  $("input[name=search]").focusout(function(){
    var value = $(this).val();
    var clear = value.replace(/(<([^>]+)>)/ig,"");
    $(this).val(clear);
  });

  $(document).ready(function() {
    $(window).keydown(function(event){
      if(event.keyCode == 13) {
        event.preventDefault();
        return false;
      }
    });
  });

  </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>