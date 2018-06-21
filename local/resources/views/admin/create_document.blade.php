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
                            Add Document
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                @if($errors->any())
                                  <ul class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                      <li>{{$error}}</li>
                                    @endforeach
                                  </ul>
                                @endif
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{route('documents.store')}}" enctype="multipart/form-data">
                                @if($session=='en')
                                    <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">Title</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title" value="{{old('title_en')}}" name="title_en" type="text">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="date_en" class="control-label col-lg-3">Date</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="date_en" value="{{old('date_en')}}"  name="date_en" type="date" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pdf_en" class="control-label col-lg-3">PDF English</label>
                                        <input type="file" name="pdf_en" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload PDF">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>
                                    @elseif($session=='dr')
                                    <div class="form-group ">
                                        <label for="title_dr" class="control-label col-lg-3">Title Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control rtl" id="title_dr" maxlength="150" name="title_dr" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="date_dr" class="control-label col-lg-3">Date Dari</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control date_dr rtl"  maxlength="10" id="date_dr" name="date_dr" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="pdf_dr" class="control-label col-lg-3">PDF Dari</label>
                                        <input type="file" name="pdf_dr" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload PDF">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>
                                    @else
                                    <div class="form-group ">
                                        <label for="title_pa" class="control-label col-lg-3">Title Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control rtl" id="title_pa" maxlength="150" name="title_pa" type="text">
                                        </div>
                                    </div>
                                   <div class="form-group ">
                                        <label for="date_pa" class="control-label col-lg-3">Date Pashto</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control date_dr rtl"  maxlength="10" id="date_pa" name="date_pa" type="text" required>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label for="pdf_pa" class="control-label col-lg-3">PDF Pashto</label>
                                        <input type="file" name="pdf_pa" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Upload PDF">
                                          <span class="input-group-btn">
                                            <button class="browse btn btn-primary input-lg" type="button"><i class="fa fa-folder-open"></i> Browse</button>
                                          </span>
                                        </div>
                                    </div>
                                    @endif
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary"  type="submit">Save</button>
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
