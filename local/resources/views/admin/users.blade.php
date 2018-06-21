@include('admin.include.header')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Users</h2>
        </div>
<div class="" style="margin:10px;">
@if(Session::get('role')!='editor')
     <a href="{{route('register_user')}}" class="ui button teal">Create</a>
@endif
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
    @foreach($users as $user)
    <tr>
      <th><?php echo $i++; ?></th>
      <td><div style="width:10em;" class="test">{{$user->name}}</div></td>
      <td><div style="width:10em;" class="test">{{$user->email}}</div></td>
      <td><div style="width:10em;" class="test">{{$user->role}}</div></td>
      <td>
      <form action="{{ route('delete_user', $user->id) }}" method="POST">
          {{-- {{ method_field('DELETE') }} --}}
          {{ csrf_field() }}
          @if(Session::get('role')=='admin')
          <a href="{{url('edit_user/'.$user->id)}}" class="ui tiny label blue ">Edit</a>
          {{-- <button class="ui tiny label red " onclick="return confirm_submit()">Delete</button> --}}
          @endif
      </form>


      </td>
    </tr>
 @endforeach
  </tbody>
</table>
</div>
</section>

@include('admin.include.footer')
<script>
  $("#lang").change(function(){
    var id = $(this).val();
    window.location = "{{url('admin/set_session?lang=')}}"+id+"&route={{route('register_user')}}";
  });

  $(".edit_lang").change(function(){
    var lang = $(this).val().substring(0,2);
    var id = $(this).val().substring(3);
    window.location = "{{url('admin/set_session?lang=')}}"+lang+"&route={{url('edit_user/')}}"+"/"+id;
  });

</script>
