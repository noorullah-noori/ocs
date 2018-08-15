@include('admin.include.header')
<?php $session = Session::get('lang');
global $jdate; ?>

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
                            Edit Album
                        </header>
                        @if($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                              @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                              @endforeach
                            </ul>
                          </div>
                        @endif
                        <div class="panel-body">
                            <div class="form cmxform form-horizontal">
                                {!! Form::model($album, ['route' => array('album.update',$album->id),'files' =>true]) !!}
                                {{method_field('PATCH')}}
                                @if($session =='en')
                                    <div class="form-group ">
                                        <label for="title_en" class="control-label col-lg-3">Title</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title_en" value="{{$album->title_en}}" name="title_en" type="text">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="date" class="control-label col-lg-3">Date</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="date" value="{{$album->date_en}}"  name="date_en" type="date" required>
                                        </div>
                                    </div>
                                    @elseif($session =='dr')
                                    <div class="form-group ">
                                        <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control rtl" id="title_dr" value="{{$album->title_dr}}" name="title_dr" type="text">
                                        </div>
                                    </div>
                                   
                                      <div class="form-group date_dari">
                                          <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                                          <div class="col-lg-6">
                                            <input class="form-control date_dr" id="date_dr" value="{{$album->date_dr}}"  name="date_dr" type="text" required>
                                          </div>
                                      </div>
                                    @else
                                    <div class="form-group ">
                                        <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control rtl" id="title_pa" value="{{$album->title_pa}}" name="title_pa" type="text">
                                        </div>
                                    </div>

                                      <div class="form-group date_dari">
                                          <label for="date_dr" class="control-label col-lg-3">Date Pashto</label>
                                          <div class="col-lg-6">
                                            <input class="form-control date_dr" id="date_dr" value="{{$album->date_dr}}"  name="date_dr" type="text" required>
                                          </div>
                                      </div>
                                    @endif
                                     <div class="form-group form-check">
                                        <label class="col-lg-6 col-md-offset-1 form-check-label">
                                          <input type="checkbox" id="replace_image" name="replace" class="form-check-input">
                                          Replace Image?
                                        </label>
                                      </div>
                                    <div class="form-group" id="image_upload">
                                        <label for="image" class="control-label col-lg-3">Image</label>
                                        <input type="file" name="image" class="file" value="{{$album->image}}">
                                        <div class="input-group col-md-6 col-md-offset-1 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>



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
