<?php $__env->startSection('content'); ?>
<?php 
if(Session::get('view_lang')==''){
  $lang='en';
}
else{
  $lang = Session::get('view_lang');
}
$title = "title_".$lang;
$date = "date_".$lang;
$short_desc = "short_desc_".$lang;
if($lang=='en'){
  $dir = 'left';
  $direction = 'ltr';
}
else{
 $dir = 'right'; 
 $direction = 'rtl';
}
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row ui block header">
          <h2>Decrees</h2> 
          <a class="btn btn-<?php echo e(($lang=='en'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('en')">English</a>
          <a class="btn btn-<?php echo e(($lang=='dr'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('dr')">Dari</a>
          <a class="btn btn-<?php echo e(($lang=='pa'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('pa')">Pashto</a>
        </div>
<?php if(Session::get('role')!='editor'): ?>
    <a class="btn btn-default pull-left" href="javascript:void(0)" onclick="create('<?php echo e($lang); ?>')" style="margin-bottom: 10px;">Create</a>
<?php endif; ?>
<table class="table table-bordered" id="datatable" style="direction: <?php echo e($direction); ?>">
  <thead>
    <tr>
      <th>No.</th>
      <th>Title</th>
      <th>Date</th>
      <th>Short Description</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>

      <?php $i=1; ?>
    <?php $__currentLoopData = $decrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php
    $title_value ='';
      switch ($lang) {
        case 'dr':
          if($value->$title=='') {
            if($value->title_pa=='') {
              $title_value = $value->title_en;
            }
            else{
              $title_value = $value->title_pa;
            }
          }
          else {
            $title_value = $value->$title;
          }
          break;
        case 'pa':
          if($value->$title=='') {
            if($value->title_dr=='') {
              $title_value = $value->title_en;
            }
            else{
              $title_value = $value->title_dr;
            }
          }
          else {
            $title_value = $value->$title;
          }
          break;
        case 'en':
          if($value->$title=='') {
            if($value->title_pa=='') {
              $title_value = $value->title_dr;
            }
            else{
              $title_value = $value->title_pa;
            }
          }
          else {
            $title_value = $value->$title;
          }
          break;
      }
       ?>
    <tr>

      <td><?php echo e($i++); ?></td>
      <td><div style="width:25em;direction:<?php echo e(($value->$title=='')?'rtl':'ltr'); ?>;" class="test"><?php echo e($title_value); ?></div></td>
      <td><div style="width:10em" class="test"><?php echo e($value->$date); ?></div></td>
      <td><?php echo e($value->$short_desc); ?></td>
      <td style="width:12em;">
      <form action="<?php echo e(route('the_president.destroy', $value->id)); ?>" class="ui form" method="POST">
          <?php echo e(method_field('DELETE')); ?>

          <?php echo e(csrf_field()); ?>

          <a class="btn btn-default pull-<?php echo e($dir); ?>" href="javascript:void(0)" onclick="edit('<?php echo e($lang.'_'.$value->id); ?>')" style="margin-bottom: 10px;"><?php echo e(($value->$title==''?'Add':'Edit')); ?></a>
          <?php if(Session::get('role')=='admin'): ?>
          <button class="ui tiny button red " onclick="return confirm_submit()">Delete</button>
          <?php endif; ?>
      </form>
      </td>
    </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
          

          
          
</div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-js'); ?>
<script>
  function create(lang){
    var id = lang+"_decree";
    window.location = "<?php echo e(url('admin/set_session?lang=')); ?>"+id+"&route=<?php echo e(route('the_president.create')); ?>";
  }

  function edit(para){
    var lang = para.substring(0,2);
    var id = para.substring(3);
    window.location = "<?php echo e(url('admin/edit_session?lang=')); ?>"+lang+"&route=<?php echo e(url('admin/the_president/')); ?>"+"/"+id+"/edit";
  }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.include.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>