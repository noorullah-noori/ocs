<?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php 
if(Session::get('view_lang')==''){
  $lang='en';
}
else{
  $lang = Session::get('view_lang');
}
$bio_val = "bio_".$lang;
if($lang=='en'){
  $dir = 'left';
  $direction = 'ltr';
}
else{
 $dir = 'right'; 
 $direction = 'rtl';
}
$i=1;
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row ui block header">
          <h2>Biography</h2>
          <a class="btn btn-<?php echo e(($lang=='en'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('en')">English</a>
          <a class="btn btn-<?php echo e(($lang=='dr'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('dr')">Dari</a>
          <a class="btn btn-<?php echo e(($lang=='pa'?'success':'default')); ?>" href="javascript:void(0)" onclick="show('pa')">Pashto</a>
        </div>
<div class="" style="margin:10px;">
  <?php if(sizeof($biography)==0 && Session::get('role')!='editor'): ?>
    <a class="btn btn-default pull-left" href="javascript:void(0)" onclick="create('<?php echo e($lang); ?>')" style="margin-bottom: 10px;">Create</a>
    <?php endif; ?>
</div>
<table class="table table-bordered" style="direction: <?php echo e($direction); ?>">
  <thead>
    <tr>
      <th>Biography</th>
    </tr>
  </thead>
  <tbody>
       <?php 
      $bio = "bio_".$lang;
       ?>
    <tr>
      <td><div style="width:60em" class="test"><?php echo (($biography->$bio)=='')?'No Data in this language':$biography->$bio; ?></div></td>
    </tr>
    <tr>
      <td style="width:12em;">
        <form action="<?php echo e(route('the_bio.destroy', $biography->id)); ?>" class="ui form" method="POST">
            <?php echo e(method_field('DELETE')); ?>

            <?php echo e(csrf_field()); ?>

           <a class="btn btn-default pull-<?php echo e($dir); ?>" href="javascript:void(0)" onclick="edit('<?php echo e($lang.'_'.$biography->id); ?>')" style="margin-bottom: 10px;"><?php echo e(($biography->$bio==''?'Add':'Edit')); ?></a>
            <?php if(Session::get('role')=='admin'): ?>
            <button class="ui tiny button red " onclick="return confirm_submit()">Delete</button>
            <?php endif; ?>
        </form>
      </td>
    </tr>
    <tr>
    </tr>
  </tbody>
</table>
</div>
</section>

<?php echo $__env->make('admin.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>

  function create(lang){
    window.location = "<?php echo e(url('admin/set_session_all?lang=')); ?>"+lang+"&route=<?php echo e(route('the_bio.create')); ?>";
  }

  function edit(para){
    var lang = para.substring(0,2);
    var id = para.substring(3);
    window.location = "<?php echo e(url('admin/edit_session?lang=')); ?>"+lang+"&route=<?php echo e(url('admin/the_bio/')); ?>"+"/"+id+"/edit";
  }
</script>
