<?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Users</h2>
        </div>
<div class="" style="margin:10px;">
<?php if(Session::get('role')!='editor'): ?>
     <a href="<?php echo e(route('register_user')); ?>" class="ui button teal">Create</a>
<?php endif; ?>
</div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1; ?>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th><?php echo $i++; ?></th>
      <td><div style="width:10em;" class="test"><?php echo e($user->name); ?></div></td>
      <td><div style="width:10em;" class="test"><?php echo e($user->email); ?></div></td>
      <td><div style="width:10em;" class="test"><?php echo e($user->role); ?></div></td>
      <td>
      <form action="<?php echo e(route('delete_user', $user->id)); ?>" method="POST">
          
          <?php echo e(csrf_field()); ?>

          <?php if(Session::get('role')=='admin'): ?>
          <a href="<?php echo e(url('edit_user/'.$user->id)); ?>" class="ui tiny label blue ">Edit</a>
          
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
    window.location = "<?php echo e(url('admin/set_session?lang=')); ?>"+id+"&route=<?php echo e(route('register_user')); ?>";
  });

  $(".edit_lang").change(function(){
    var lang = $(this).val().substring(0,2);
    var id = $(this).val().substring(3);
    window.location = "<?php echo e(url('admin/set_session?lang=')); ?>"+lang+"&route=<?php echo e(url('edit_user/')); ?>"+"/"+id;
  });

</script>
