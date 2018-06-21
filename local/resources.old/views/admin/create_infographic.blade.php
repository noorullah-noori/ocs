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
                            Add InfoGraphic
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
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{route('infographic.store')}}" enctype="multipart/form-data">
                                @if($session=='en')
                                    <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">Title</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title" value="{{old('title_en')}}" name="title_en" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="date" class="control-label col-lg-3">Date</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="date" value="{{old('date_en')}}" name="date_en" type="date">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image_en" class="control-label col-lg-3">Image</label>
                                        <input type="file" name="image_en" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image_thumb_en" class="control-label col-lg-3">Image Thumb</label>
                                        <input type="file" name="image_thumb_en" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>

                                    @elseif($session=='dr')
                                    <div class="form-group ">
                                        <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control rtl" id="title_dr" value="{{old('title_dr')}}" name="title_dr" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control date_dr rtl"  value="{{old('date_dr')}}" id="date_dr" name="date_dr" type="text">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="image_dr" class="control-label col-lg-3">Image</label>
                                        <input type="file" name="image_dr" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image_thumb_dr" class="control-label col-lg-3">Image Thumb</label>
                                        <input type="file" name="image_thumb_dr" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
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
                                        <label for="date_pa" class="control-label col-lg-3">Date Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control date_dr rtl"  value="{{old('date_dr')}}" id="date_pa" name="date_pa" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image_pa" class="control-label col-lg-3">Image</label>
                                        <input type="file" name="image_pa" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image_thumb_pa" class="control-label col-lg-3">Image Thumb</label>
                                        <input type="file" name="image_thumb_pa" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>

                                    @endif
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

</script>
