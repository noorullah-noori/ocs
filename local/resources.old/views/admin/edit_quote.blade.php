@include('admin.include.header')

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
                            Edit Quote
                        </header>
                        <div class="panel-body">
                        <div class="form cmxform form-horizontal ">
                            {!! Form::model($quote, ['route' => array('quotes.update',$quote->id),'files'=>true]) !!}
                            {{method_field('PATCH')}}
                                <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">Quote</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title" value="{{$quote->title}}" name="title" type="text">
                                        </div>
                                    </div>
                                     <div class="form-group form-check">
                                  <label class="col-lg-6 col-md-offset-1 form-check-label">
                                    <input type="checkbox" id="replace_image" name="replace" class="form-check-input">
                                    Replace Image?
                                  </label>
                                </div>
                                    <div class="form-group" id="image_upload">
                                        <label for="image" class="control-label col-lg-3">Quote Image</label>
                                        <input type="file" name="image" value="{{$quote->image}}" class="file">
                                        <div class="input-group col-md-6 col-xs-12" style="padding-left:15px; padding-right:14px;">
                                          <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                                          <input type="text" class="form-control input-lg" disabled placeholder="Update Image">
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
