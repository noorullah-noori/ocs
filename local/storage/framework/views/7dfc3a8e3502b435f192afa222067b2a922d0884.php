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
$pdf = "pdf_".$lang;
$documents_val = "documents_".$lang;
if($lang=='en'){
  $dir = 'left';
  $direction = 'ltr';
}
else{
 $dir = 'right'; 
 $direction = 'rtl';
}
$i=1;
$title_value ='';
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row ui block header">
          <h2>Documents</h2>
          <a class="btn btn-<?php echo e(($lang=='en'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('en')">English</a>
          <a class="btn btn-<?php echo e(($lang=='dr'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('dr')">Dari</a>
          <a class="btn btn-<?php echo e(($lang=='pa'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('pa')">Pashto</a>          
        </div>
<div class="" style="margin:10px;">
<?php if(Session::get('role')!='editor'): ?>
 <a class="btn btn-default pull-left" href="javascript:void(0)" onclick="create('<?php echo e($lang); ?>')" style="margin-bottom: 10px;">Create</a>
<?php endif; ?>
</div>
<table class="table table-bordered" id="datatable" style="direction: <?php echo e($direction); ?>">
  <thead>
    <tr>
      <th>No.</th>
      <th class="table_title">Title</th>
      <th>Date</th>
      <th>Attachement</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php
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
      <td><div style="width:10em" class="test"><?php echo e($title_value); ?></div></td>
      <td><div style="width:10em" class="test"><?php echo e($value->$date); ?></div></td>
      <td style="width:10%;">
        <?php if($value->$title!=''): ?>
        <a href="<?php echo e(asset('uploads/'.$documents_val.'/'.$value->$pdf)); ?>" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
        <?php endif; ?>
      <td>
      <form action="<?php echo e(route('documents.destroy', $value->id)); ?>" class="ui form" method="POST">
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
    window.location = "<?php echo e(url('admin/set_session_all?lang=')); ?>"+lang+"&route=<?php echo e(route('documents.create')); ?>";
  }

  function edit(para){
    var lang = para.substring(0,2);
    var id = para.substring(3);
    window.location = "<?php echo e(url('admin/edit_session?lang=')); ?>"+lang+"&route=<?php echo e(url('admin/documents/')); ?>"+"/"+id+"/edit";
  }
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.include.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>