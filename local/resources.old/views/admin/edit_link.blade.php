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
                            Edit Link
                        </header>
                        <div class="panel-body">
                            <div class="form cmxform form-horizontal">
                                {!! Form::model($link, ['route' => array('links.update',$link->id),'files' =>true]) !!}
                                {{method_field('PATCH')}}
                                @if($errors->any())
                                  <ul class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                      <li>{{$error}}</li>
                                    @endforeach
                                  </ul>
                                @endif

                                @if($session=='dr')

                                  <div class="form-group ">
                                    <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                    <div class="col-lg-6">
                                      <input class=" form-control rtl" id="title_dr" value="{{$link->title_dr}}" name="title_dr" type="text">
                                    </div>
                                  </div>

                                  <div class="form-group ">
                                      <label for="description_dr" class="control-label col-lg-3">Description Dari</label>
                                      <div class="col-lg-6">
                                          <textarea name="description_dr" class="form-control rtl format"> {{$link->description_dr}}</textarea>
                                      </div>
                                  </div>

                                @elseif($session=='pa')
                                  <div class="form-group ">
                                      <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                                      <div class="col-lg-6">
                                          <input class=" form-control rtl" id="title_pa" value="{{$link->title_pa}}" name="title_pa" type="text">
                                      </div>
                                  </div>

                                  <div class="form-group ">
                                      <label for="description_pa" class="control-label col-lg-3">Description Pashto</label>
                                      <div class="col-lg-6">
                                          <textarea name="description_pa" class="form-control rtl format">{{$link->description_pa}}</textarea>
                                      </div>
                                  </div>

                                @elseif($session=='en')

                                  <div class="form-group ">
                                    <label for="title" class="control-label col-lg-3">Title</label>
                                    <div class="col-lg-6">
                                      <input class=" form-control" id="title" value="{{$link->title_en}}" name="title_en" type="text">
                                    </div>
                                  </div>

                                  <div class="form-group ">
                                      <label for="description_en" class="control-label col-lg-3">Description English</label>
                                      <div class="col-lg-6">
                                          <textarea name="description_en" class="form-control format">{{$link->description_en}}</textarea>
                                      </div>
                                  </div>
                                @endif



                                {{-- <div class="form-group ">
                                    <label for="url" class="control-label col-lg-3">Web Url</label>
                                    <div class="col-lg-6">
                                        <input class="form-control" id="url" name="url" value="{{$link->url}}" type="text">
                                    </div>
                                </div> --}}
                                 <div class="form-group form-check">
                                  <label class="col-lg-6 col-md-offset-1 form-check-label">
                                    <input type="checkbox" id="replace_image" name="replace" class="form-check-input">
                                    Replace Image?
                                  </label>
                                </div>
                                <div class="form-group" id="image_upload">
                                    <label for="image" class="control-label col-lg-3">Image</label>
                                    <input type="file" name="image" class="file" value="{{$link->image}}">
                                    <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
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
