@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Complaints</h2>
        </div>
<table class="table">
  <thead>
    <tr>
      <th>Title</th>
      <th>Subject</th>
      <th>Body</th>
      <th>Date</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    @foreach($complaints as $value)
    <tr>
      <td><div style="width:20em" class="test">{{$value->name}}</div></td>
      <td><div style="width:10em" class="test">{{$value->subject}}</div></td>
      <td><div style="width:10em" class="test">{{$value->body}}</div></td>
      <td><div style="width:10em" class="test">{{$value->date}}</div></td>
      <td>
      <form action="{{ route('destroy_complaint', $value->id) }}" method="POST">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
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
