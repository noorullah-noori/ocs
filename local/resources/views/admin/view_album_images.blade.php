@extends('admin.include.master')
@section('content')
<?php $lang = Session::get('view_lang');
$title = "title_".$lang; ?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Album Images</h2>
        </div>
        <div class="ui cards" style="padding-top:10px">
    @foreach($images as $image)
      <img src="{{asset('uploads/albumImage/'.$image->image)}}" style="width:100%">
      <form action="{{route('update_album_image_title',$image->id)}}" class="ui form" method="POST"> 
          {{ method_field('DELETE') }}
          {{csrf_field()}}
            <input type="button" onclick="location.href='rout';" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom" value="Edit">
            <input type="submit" class="btn m-btn--pill btn-secondary pull-right m-btn m-btn--hover-danger m-btn--custom" value="Delete">
    </form>
 @endforeach
 </div>
</div>
</section>

@endsection
@push('custom-js')
@endpush
