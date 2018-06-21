@include('admin.include.header')
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
          <a class="btn btn-{{($lang=='en'?'success':'default')}}" href="javascript:void(0)" onclick="show('en')">English</a>
          <a class="btn btn-{{($lang=='dr'?'success':'default')}}" href="javascript:void(0)" onclick="show('dr')">Dari</a>
          <a class="btn btn-{{($lang=='pa'?'success':'default')}}" href="javascript:void(0)" onclick="show('pa')">Pashto</a>
        </div>
<div class="" style="margin:10px;">
  @if(sizeof($bio)==0 && Session::get('role')!='editor')
    <a class="btn btn-default pull-left" href="javascript:void(0)" onclick="create('{{$lang}}')" style="margin-bottom: 10px;">Create</a>
    @endif
</div>
<table class="table table-bordered" style="direction: {{$direction}}">
  <thead>
    <tr>
      <th>Bio</th>
    </tr>
  </thead>
  <tbody>
    @foreach($bio as $value)

       <?php
    $bio_value ='';
      switch ($lang) {
        case 'dr':
          if($value->$bio_val=='') {
            if($value->bio_pa=='') {
              $bio_value = $value->bio_en;
            }
            else{
              $bio_value = $value->bio_pa;
            }
          }
          else {
            $bio_value = $value->$bio_val;
          }
          break;
        case 'pa':
          if($value->$bio_val=='') {
            if($value->bio_dr=='') {
              $bio_value = $value->bio_en;
            }
            else{
              $bio_value = $value->bio_dr;
            }
          }
          else {
            $bio_value = $value->$bio;
          }
          break;
        case 'en':
          if($value->$bio_val=='') {
            if($value->bio_pa=='') {
              $bio_value = $value->bio_dr;
            }
            else{
              $bio_value = $value->bio_pa;
            }
          }
          else {
            $bio_value = $value->$bio;
          }
          break;
      }
       ?>
    <tr>
      <td><div style="width:60em" class="test">{!!$bio_value!!}</div></td>
    </tr>
    <tr>
      <td style="width:12em;">
        <form action="{{ route('the_bio.destroy', $value->id) }}" class="ui form" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
           <a class="btn btn-default pull-{{$dir}}" href="javascript:void(0)" onclick="edit('{{$lang.'_'.$value->id}}')" style="margin-bottom: 10px;">{{($value->$bio_val==''?'Add':'Edit')}}</a>
            @if(Session::get('role')=='admin')
            <button class="ui tiny button red " onclick="return confirm_submit()">Delete</button>
            @endif
        </form>
      </td>
    </tr>
    <tr>

    </tr>
 @endforeach
  </tbody>
</table>
</div>
</section>

@include('admin.include.footer')
<script>

  function create(lang){
    window.location = "{{url('admin/set_session_all?lang=')}}"+lang+"&route={{route('the_bio.create')}}";
  }

  function edit(para){
    var lang = para.substring(0,2);
    var id = para.substring(3);
    window.location = "{{url('admin/edit_session?lang=')}}"+lang+"&route={{url('admin/the_bio/')}}"+"/"+id+"/edit";
  }
</script>
