@include('admin.include.header')

<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="table-responsive ui stacked segment" style="">
        <div class="row">
          <h2 class="ui block header">Album Images</h2>
        </div>
        <div class="ui cards" style="padding-top:10px">
    @foreach($images as $image)
              <div class="card">
                <div class="image">
                  <img src="{{asset('uploads/albumImage/'.$image->image)}}" style="width:290px !important;height: 130px;">
                </div>
                  {{-- <p class="header" style="padding-top: 10px;padding-left: 5px">{{$image->title_en}}</p> --}}
                <div class="extra content">
                  <a href="{{route('edit_album_image',$image->id)}}" class="left floated like">
                    <i class="edit icon"></i>
                    Replace
                  </a>
                  <a onclick="return confirm_click({{$image->id}},{{$id}})" class="right floated star">
                    <i class="delete icon"></i>
                    Delete
                  </a>
                </div>
              </div>
 @endforeach
 </div>
 <div class="container">
   <a class="ui button" href="{{URL::previous()}}" style="float:right;margin-right: 22%;margin-top:20px">
  Cancel
</a>
 </div>
</div>
</section>

@include('admin.include.footer')
<script>
function confirm_click(id,album_id){
        var agree = confirm('Are you sure want to delete this record');
        if(agree){
           window.location = "{{url('admin/delete_album_image')}}"+'/'+id+'/'+album_id;
        }
        else{
            return false;
        }
    }
    </script>
