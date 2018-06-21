@extends('admin.include.master')
@section('content')
<?php 
if(Session::get('view_lang')==''){
  $lang='en';
}
else{
  $lang = Session::get('view_lang');
}
$title = "title_".$lang;
$date = "date_".$lang;
$short_desc = "short_desc_".$lang;
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
          <h2>Reports</h2>
          <a class="btn btn-{{($lang=='en'?'success':'default')}}" href="javascript:void(0)" onclick="show('en')">English</a>
          <a class="btn btn-{{($lang=='dr'?'success':'default')}}" href="javascript:void(0)" onclick="show('dr')">Dari</a>
          <a class="btn btn-{{($lang=='pa'?'success':'default')}}" href="javascript:void(0)" onclick="show('pa')">Pashto</a>
        </div>
<div class="" style="margin:10px;">
  @if(Session::get('role')!='editor')
<a class="btn btn-default pull-left" href="javascript:void(0)" onclick="create('{{$lang}}')" style="margin-bottom: 10px;">Create</a>
  @endif
</div>
<table class="table table-bordered" id="datatable" style="direction: {{$direction}}">
  <thead>
    <tr>
      <th>No.</th>
      <th>Image</th>
      <th>Title</th>
      <th>Date</th>
      <th>Short Description</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reports as $value)
     <?php
    $title_value ='';
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
      <td>{{$i++}}</td>
      <th><img src="{{asset('uploads/report/'.$value->image)}}" style="width:100px;"></th>
      <td><div style="width:20em" class="test">{{$title_value}}</div></td>
      <td><div style="width:10em" class="test">{{$value->$date}}</div></td>
      <td style="">{{$value->$short_desc}}</td>

      <td style="width:12em;">
      <form action="{{ route('media.destroy', $value->id) }}" class="ui form" method="POST">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}
           <a class="btn btn-default pull-{{$dir}}" href="javascript:void(0)" onclick="edit('{{$lang.'_'.$value->id}}')" style="margin-bottom: 10px;">{{($value->$title==''?'Add':'Edit')}}</a>
         @if(Session::get('role')=='admin')
          <button class="ui tiny button red" onclick="return confirm_submit()">Delete</button>
          @endif
      </form>


      </td>
    </tr>
 @endforeach
  </tbody>
</table>
          {{-- Pagination start --}}

         {{--  <div class="ui centered grid">
            {{$reports->links()}}
          </div> --}}
          {{-- Pagination End --}}
</div>
</section>

@endsection
@push('custom-js')
<script>
   function create(lang){
    var id = lang+'_report';
    window.location = "{{url('admin/set_session?lang=')}}"+id+"&route={{route('media.create')}}";
  }

  function edit(para){
    var lang = para.substring(0,2);
    var id = para.substring(3);
    window.location = "{{url('admin/edit_session?lang=')}}"+lang+"&route={{url('admin/media/')}}"+"/"+id+"/edit";
  }
</script>
@endpush