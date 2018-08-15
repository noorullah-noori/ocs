<?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">President Quotes</h2>
        </div>
<div class="" style="margin:10px;">
<?php if(Session::get('role')!='editor'): ?>
  <a href="<?php echo e(route('quotes.create')); ?>" class="ui button teal">Create</a>
<?php endif; ?>
</div>
<table class="table">
  <thead>
    <tr>
      <th>Image</th>
      <th>Quote</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $quotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th><img src="<?php echo e(asset('uploads/quotes/'.$value->image)); ?>" style="width:100px;"></th>
      <td><div style="width:20em" class="test"><?php echo e($value->title); ?></div></td>
      <td>
      <form action="<?php echo e(route('quotes.destroy', $value->id)); ?>" class="ui form" method="POST">
          <?php echo e(method_field('DELETE')); ?>

          <?php echo e(csrf_field()); ?>

          <a href="<?php echo e(route('quotes.edit',$value->id)); ?>" class="ui tiny button blue ">Edit</a>
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
  $("#lang").change(function(){
    var id = $(this).val();
    window.location = "<?php echo e(url('admin/set_session_all?lang=')); ?>"+id+"&route=<?php echo e(route('quotes.create')); ?>";
  });

  $(".edit_lang").change(function(){
    var lang = $(this).val().substring(0,2);
    var id = $(this).val().substring(3);
    window.location = "<?php echo e(url('admin/edit_session?lang=')); ?>"+lang+"&route=<?php echo e(url('admin/quotes/')); ?>"+"/"+id+"/edit";
  });

</script>
