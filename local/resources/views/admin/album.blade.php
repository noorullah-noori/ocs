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
          <h2>Photo Album</h2>
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
      <th style="width:55% !important">Title</th>
      <th>Date</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    @foreach($album as $value)
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
      <th><a href="{{url('admin/view_album_images/'.$value->id)}}"><img src="{{asset('uploads/album/'.$value->image)}}" style="width:100px;"></a></th>
      <td><div style="width:20em" class="test">{{$title_value}}</div></td>
      <td><div style="width:10em" class="test">{{$value->$date}}</div></td>

      <td>
      <form action="{{ route('album.destroy', $value->id) }}" class="" method="POST">
          {{ method_field('DELETE') }}
          {{ csrf_field() }}

          @if(Session::get('role')!='editor')
          <a href="{{route('add_album_image',$value->id)}}" class="btn btn-xs btn-default">Add Images</a>
          @endif
          <a href="{{url('admin/view_album_images/'.$value->id)}}" class="btn btn-xs btn-default">View Images</a>
          <a href="{{route('edit_images',$value->id)}}" class="btn btn-xs btn-default">Edit Images</a>
           <a class="btn btn-xs btn-default pull-{{$dir}}" href="javascript:void(0)" onclick="edit('{{$lang.'_'.$value->id}}')" style="margin-bottom: 10px;">{{($value->$title==''?'Add':'Edit')}}</a>
          @if(Session::get('role')=='admin')
          <button class="btn btn-xs btn-danger " onclick="return confirm_submit()">Delete</button>
          @endif
      </form>
      </td>
    </tr>
 @endforeach
  </tbody>
</table>
           {{-- Pagination start --}}
          {{-- <div class="ui centered grid">
            {{$album->links()}}
          </div> --}}
          {{-- Pagination End --}}
</div>
</section>

@endsection
@push('custom-js')
<script>

// $(".me").change(function(){
//     var num = $(this).val().substring(0,1);
//     var id = $(this).val().substring(2);
//     window.location = "{{url('admin/album/album_image')}}"+'/'+num+'/'+id;
//   });



  function create(lang){
    window.location = "{{url('admin/set_session_all?lang=')}}"+lang+"&route={{route('album.create')}}";
  }

  function edit(para){
    var lang = para.substring(0,2);
    var id = para.substring(3);
    window.location = "{{url('admin/edit_session?lang=')}}"+lang+"&route={{url('admin/album/')}}"+"/"+id+"/edit";
  }
</script>
@endpush