<?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php 
if(Session::get('view_lang')==''){
  $lang='en';
}
else{
  $lang = Session::get('view_lang');
}
$description_val = "description_".$lang;
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
          <h2>Media Directorate</h2>
           <a class="btn btn-<?php echo e(($lang=='en'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('en')">English</a>
          <a class="btn btn-<?php echo e(($lang=='dr'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('dr')">Dari</a>
          <a class="btn btn-<?php echo e(($lang=='pa'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('pa')">Pashto</a>
        </div>
<div class="" style="margin:10px;">
  <?php if(sizeof($media)==0 && Session::get('role')!='editor'): ?>
  <a class="btn btn-default pull-left" href="javascript:void(0)" onclick="create('<?php echo e($lang); ?>')" style="margin-bottom: 10px;">Create</a>
    <?php endif; ?>
</div>
<table class="table table-bordered" style="direction: <?php echo e($direction); ?>">
  <thead>
    <tr>
      <th>Media Directorate</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php
    $description_value ='';
      switch ($lang) {
        case 'dr':
          if($value->$description_val=='') {
            if($value->description_pa=='') {
              $description_value = $value->description_en;
            }
            else{
              $description_value = $value->description_pa;
            }
          }
          else {
            $description_value = $value->$description_val;
          }
          break;
        case 'pa':
          if($value->$description_val=='') {
            if($value->description_dr=='') {
              $description_value = $value->description_en;
            }
            else{
              $description_value = $value->description_dr;
            }
          }
          else {
            $description_value = $value->$description_val;
          }
          break;
        case 'en':
          if($value->$description_val=='') {
            if($value->description_pa=='') {
              $description_value = $value->description_dr;
            }
            else{
              $description_value = $value->description_pa;
            }
          }
          else {
            $description_value = $value->$description_val;
          }
          break;
      }
       ?>
    <tr>
      <td><?php echo $description_value; ?></td>
    </tr>
      <tr>
          <td>
        <form action="<?php echo e(route('media_directorate.destroy', $value->id)); ?>" method="POST">
            <?php echo e(method_field('DELETE')); ?>

            <?php echo e(csrf_field()); ?>

            <a class="btn btn-default pull-<?php echo e($dir); ?>" href="javascript:void(0)" onclick="edit('<?php echo e($lang.'_'.$value->id); ?>')" style="margin-bottom: 10px;"><?php echo e(($value->$description_val==''?'Add':'Edit')); ?></a>
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

<?php echo $__env->make('admin.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
   function create(lang){
    window.location = "<?php echo e(url('admin/set_session_all?lang=')); ?>"+lang+"&route=<?php echo e(route('media_directorate.create')); ?>";
  }

  function edit(para){
    var lang = para.substring(0,2);
    var id = para.substring(3);
    window.location = "<?php echo e(url('admin/edit_session?lang=')); ?>"+lang+"&route=<?php echo e(url('admin/media_directorate/')); ?>"+"/"+id+"/edit";
  }

</script>