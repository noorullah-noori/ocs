@include('admin.include.header')
<?php
$session = Session::get('lang');
global $jdate;
 ?>


<style>
    .file {
      visibility: hidden;
      position: absolute;
    }
    #image_upload_thumb{
      display: none;
    }

</style>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit InfoGraphic
                        </header>
                        <div class="panel-body">
                            @if($errors->any())
                              <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                  <li>{{$error}}</li>
                                @endforeach
                              </ul>
                            @endif
                            <div class="form cmxform form-horizontal">
                                {!! Form::model($info, ['route' => array('infographic.update',$info->id),'files' =>true]) !!}
                                {{method_field('PATCH')}}
                                @if($session=='dr')

                                  <div class="form-group ">
                                      <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                      <div class="col-lg-6">
                                          <input class=" form-control rtl" id="title_dr" maxlength="150" value="{{$info->title_dr}}" name="title_dr" type="text">
                                      </div>
                                  </div>
                                  <div class="form-group form-check">
                                    <label class="col-lg-6 col-md-offset-1 form-check-label">
                                      <input type="checkbox" id="change_date" name="change_date" class="form-check-input">
                                      Change Date?
                                    </label>
                                  </div>
                                  <div class="form-group date_dari">
                                      <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                                      <div class="col-lg-6">
                                        <input class="form-control change_date" disabled id="date_dr" value="{{$jdate->detailedDate($info->date_dr,$session)}}"  name="date_dr" type="text" required>
                                      </div>
                                  </div>

                                <div class="form-group form-check">
                                  <label class="col-lg-6 col-md-offset-1 form-check-label">
                                    <input type="checkbox" id="replace_image" name="replace" class="form-check-input">
                                    Replace Image?
                                  </label>
                                </div>
                                <div class="form-group" id="image_upload">
                                    <label for="image_dr" class="control-label col-lg-3">Image</label>
                                    <input type="file" name="image_dr" class="file" value="{{$info->image_dr}}">
                                    <div class="input-group col-md-6 col-md-offset-1 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                      <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                      <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                      <span class="input-group-btn">
                                        <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                      </span>
                                    </div>
                                </div>

                                <div class="form-group form-check">
                                  <label class="col-lg-6 col-md-offset-1 form-check-label">
                                    <input type="checkbox" id="replace_image_thumb" name="replace" class="form-check-input">
                                    Replace Image Thumb?
                                  </label>
                                </div>
                                <div class="form-group" id="image_upload_thumb">
                                    <label for="image_thumb_dr" class="control-label col-lg-3">Image Thumb</label>
                                    <input type="file" name="image_thumb_dr" class="file" value="{{$info->image_thumb_dr}}">
                                    <div class="input-group col-md-6 col-md-offset-1 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                      <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                      <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                      <span class="input-group-btn">
                                        <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                      </span>
                                    </div>
                                </div>


                                @elseif($session=='pa')
                                  <div class="form-group ">
                                      <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                                      <div class="col-lg-6">
                                          <input class=" form-control rtl" id="title_pa" maxlength="150" value="{{$info->title_pa}}" name="title_pa" type="text">
                                      </div>
                                  </div>

                                  <div class="form-group form-check">
                                    <label class="col-lg-6 col-md-offset-1 form-check-label">
                                      <input type="checkbox" id="change_date" name="change_date" class="form-check-input">
                                      Change Date?
                                    </label>
                                  </div>
                                  <div class="form-group date_dari">
                                      <label for="date_dr" class="control-label col-lg-3">Date Pashto</label>
                                      <div class="col-lg-6">
                                        <input class="form-control change_date" disabled id="date_dr" value="{{$jdate->detailedDate($info->date_dr,$session)}}"  name="date_dr" type="text" required>
                                      </div>
                                  </div>

                                   <div class="form-group form-check">
                                  <label class="col-lg-6 col-md-offset-1 form-check-label">
                                    <input type="checkbox" id="replace_image" name="replace" class="form-check-input">
                                    Replace Image?
                                  </label>
                                </div>
                                <div class="form-group" id="image_upload">
                                    <label for="image_pa" class="control-label col-lg-3">Image</label>
                                    <input type="file" name="image_pa" class="file" value="{{$info->image_pa}}">
                                    <div class="input-group col-md-6 col-md-offset-1 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                      <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                      <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                      <span class="input-group-btn">
                                        <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                      </span>
                                    </div>
                                </div>

                                <div class="form-group form-check">
                                  <label class="col-lg-6 col-md-offset-1 form-check-label">
                                    <input type="checkbox" id="replace_image_thumb" name="replace" class="form-check-input">
                                    Replace Image Thumb?
                                  </label>
                                </div>
                                <div class="form-group" id="image_upload_thumb">
                                    <label for="image_thumb_pa" class="control-label col-lg-3">Image Thumb</label>
                                    <input type="file" name="image_thumb_pa" class="file" value="{{$info->image_thumb_pa}}">
                                    <div class="input-group col-md-6 col-md-offset-1 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                      <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                      <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                      <span class="input-group-btn">
                                        <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                      </span>
                                    </div>
                                </div>

                                @elseif($session=='en')
                                  <div class="form-group ">
                                      <label for="title" class="control-label col-lg-3">Title</label>
                                      <div class="col-lg-6">
                                          <input class=" form-control" id="title" maxlength="150" value="{{$info->title_en}}" name="title_en" type="text">
                                      </div>
                                  </div>

                                  <div class="form-group ">
                                      <label for="date" class="control-label col-lg-3">Date</label>
                                      <div class="col-lg-6">
                                          <input class=" form-control" id="date" maxlength="10" value="{{$info->date_en}}"  name="date_en" type="date" required>
                                      </div>
                                  </div>

                                  <div class="form-group form-check">
                                  <label class="col-lg-6 col-md-offset-1 form-check-label">
                                    <input type="checkbox" id="replace_image" name="replace" class="form-check-input">
                                    Replace Image?
                                  </label>
                                </div>
                                <div class="form-group" id="image_upload">
                                    <label for="image" class="control-label col-lg-3">Image</label>
                                    <input type="file" name="image_en" class="file" value="{{$info->image_en}}">
                                    <div class="input-group col-md-6 col-md-offset-1 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                      <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                      <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                      <span class="input-group-btn">
                                        <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                      </span>
                                    </div>
                                </div>

                                <div class="form-group form-check">
                                  <label class="col-lg-6 col-md-offset-1 form-check-label">
                                    <input type="checkbox" id="replace_image_thumb" name="replace" class="form-check-input">
                                    Replace Image Thumb?
                                  </label>
                                </div>
                                <div class="form-group" id="image_upload_thumb">
                                    <label for="image_thumb_en" class="control-label col-lg-3">Image Thumb</label>
                                    <input type="file" name="image_thumb_en" class="file" value="{{$info->image_thumb_en}}">
                                    <div class="input-group col-md-6 col-md-offset-1 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                      <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                      <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                      <span class="input-group-btn">
                                        <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                      </span>
                                    </div>
                                </div>

                                @endif
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Update</button>
                                            <a href="javascript:void(0)" onclick="clearForm()" class="btn btn-warning"  type="button">Clear All</a>
                                            <a href="{{url()->previous()}}" class="btn btn-default"  type="button">Cancel</a>
                                        </div>
                                    </div>
                               {!! Form::close() !!}
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
