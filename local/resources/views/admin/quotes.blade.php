@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">President Quotes</h2>
        </div>
<div class="" style="margin:10px;">
@if(Session::get('role')!='editor')
  <a href="{{route('quotes.create')}}" class="ui button teal">Create</a>
@endif
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
    @foreach($quotes as $value)
    <tr>
      <th><img src="{{asset('uploads/quotes/'.$value->image)}}" style="width:100px;"></th>
      <td><div style="width:20em" class="test">{{$value->title}}</div></td>
      <td>
      <form action="{{ route('quotes.destroy', $value->id) }}" class="ui form" method="POST">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
          <a href="{{route('quotes.edit',$value->id)}}" class="ui tiny button blue ">Edit</a>
          @if(Session::get('role')=='admin')
          <button class="ui tiny button red " onclick="return confirm_submit()">Delete</button>
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
    window.location = "{{url('admin/set_session_all?lang=')}}"+id+"&route={{route('quotes.create')}}";
  });

  $(".edit_lang").change(function(){
    var lang = $(this).val().substring(0,2);
    var id = $(this).val().substring(3);
    window.location = "{{url('admin/edit_session?lang=')}}"+lang+"&route={{url('admin/quotes/')}}"+"/"+id+"/edit";
  });

</script>
