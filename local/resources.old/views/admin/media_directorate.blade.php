@include('admin.include.header')
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
           <a class="btn btn-{{($lang=='en'?'success':'default')}}" href="javascript:void(0)" onclick="show('en')">English</a>
          <a class="btn btn-{{($lang=='dr'?'success':'default')}}" href="javascript:void(0)" onclick="show('dr')">Dari</a>
          <a class="btn btn-{{($lang=='pa'?'success':'default')}}" href="javascript:void(0)" onclick="show('pa')">Pashto</a>
        </div>
<div class="" style="margin:10px;">
  @if(sizeof($media)==0 && Session::get('role')!='editor')
  <a class="btn btn-default pull-left" href="javascript:void(0)" onclick="create('{{$lang}}')" style="margin-bottom: 10px;">Create</a>
    @endif
</div>
<table class="table table-bordered" style="direction: {{$direction}}">
  <thead>
    <tr>
      <th>Media Directorate</th>
    </tr>
  </thead>
  <tbody>
    @foreach($media as $value)
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
      <td>{!!$description_value!!}</td>
    </tr>
      <tr>
          <td>
        <form action="{{ route('media_directorate.destroy', $value->id) }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <a class="btn btn-default pull-{{$dir}}" href="javascript:void(0)" onclick="edit('{{$lang.'_'.$value->id}}')" style="margin-bottom: 10px;">{{($value->$description_val==''?'Add':'Edit')}}</a>
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
   function create(lang){
    window.location = "{{url('admin/set_session_all?lang=')}}"+lang+"&route={{route('media_directorate.create')}}";
  }

  function edit(para){
    var lang = para.substring(0,2);
    var id = para.substring(3);
    window.location = "{{url('admin/edit_session?lang=')}}"+lang+"&route={{url('admin/media_directorate/')}}"+"/"+id+"/edit";
  }

</script>