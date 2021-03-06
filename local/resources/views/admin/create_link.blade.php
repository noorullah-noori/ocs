 @include('admin.include.header')
<?php $session = Session::get('lang'); ?>
<style>
    .file {
      visibility: hidden;
      position: absolute;
    }


</style>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Links
                        </header>
                        <div class="panel-body">
                            @if($errors->any())
                              <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                  <li>{{$error}}</li>
                                @endforeach
                              </ul>
                            @endif
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{route('links.store')}}" enctype="multipart/form-data">
                                @if($session=='en')
                                    <div class="form-group ">
                                        <label for="title_en" class="control-label col-lg-3">Title</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title_en"  value="{{old('title_en')}}" name="title_en" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_en" class="control-label col-lg-3">Description English</label>
                                        <div class="col-lg-6">
                                            <textarea name="description_en" class="form-control format">{{old('description_en')}}</textarea>
                                        </div>
                                    </div>
                                    @elseif($session=='dr')
                                    <div class="form-group ">
                                        <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control rtl" id="title_dr"  value="{{old('title_dr')}}" name="title_dr" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_dr" class="control-label col-lg-3">Description Dari</label>
                                        <div class="col-lg-6">
                                            <textarea name="description_dr" class="form-control rtl format">{{old('description_dr')}}</textarea>
                                        </div>
                                    </div>
                                    @else
                                    <div class="form-group ">
                                        <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control rtl" id="title_pa" value="{{old('title_pa')}}" name="title_pa" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description_pa" class="control-label col-lg-3">Description Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea name="description_pa" class="form-control rtl format">{{old('description_pa')}}</textarea>
                                        </div>
                                    </div>
                                    @endif


                                    <div class="form-group">
                                        <label for="image" class="control-label col-lg-3">Image</label>
                                        <input type="file" name="image" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>

                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" onclick="go()" type="">Save</button>
                                            <a href="{{url()->previous()}}" class="btn btn-default"  type="button">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
        </div>

</section>

@include('admin.include.footer')
<script>
    $(document).on('click', '.browse', function(){
      var file = $(this).parent().parent().parent().find('.file');
      file.trigger('click');
    });
    $(document).on('change', '.file', function(){
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
    // // tag generating & editing script
    // $('.dropdown')
    //   .dropdown({
    //     allowAdditions: true
    //   })
    // ;
    // function go() {
    //   var test = $('.dropdown').dropdown("get value");
    //   $('#tags_array').val(test);
    // }
    // $('#title').focusout(function() {
    //   $('#menu').empty();
    //   var text = $('#title').val();
    //   arr = text.split(" ");
    //   var length = arr.length;
    //   var data=[];
    //   for(var i=0;i<length;i++) {
    //     data[i+1] = '<div class="item" data-value="'+arr[i]+'">'+arr[i]+'</div>';
    //   }
    //   data = $.unique(data);
    //   $('#menu').append(data);
    //
    // });
</script>
