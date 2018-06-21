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
        <form method="post" action="{{route('update_album_image_title',$image->id)}}">
        {{csrf_field()}}{{method_field("PATCH")}}
              <div class="card" style="width:300px;padding:10px;">
                <div class="image">
                  <img src="{{asset('uploads/albumImage/'.$image->image)}}" style="width:100%">
                  <div class="container" style="padding-top: 5px">
                    <input type="hidden" name="album_id" value="{{$album_id}}">
                  <input type="text" name="title" value="{{$image->$title}}"> 
                  <input type="submit" value="update" class="btn btn-sm btn-default">
                  </div>
                </div>
              </div>
    </form>
 @endforeach
 </div>
 <div class="container">
   <a class="ui button" href="{{URL::previous()}}" style="float:right;margin-right: 22%;">
  Cancel
</a>
 </div>
</div>
</section>

@endsection
@push('custom-js')
@endpush
