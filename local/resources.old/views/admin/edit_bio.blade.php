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
                            Edit Biography
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
                                {!! Form::model($bio, ['route' => array('the_bio.update',$bio->id),'files' =>true]) !!}
                                {{method_field('PATCH')}}
                                    @if($session=='en')
                                      <div class="form-group ">
                                        <label for="bio_en" class="control-label col-lg-3">Biography English</label>
                                        <div class="col-lg-6">
                                            <textarea name="bio_en" class="form-control format">{{$bio->bio_en}}</textarea>
                                        </div>
                                    </div>
                                    @elseif($session=='dr')
                                    <div class="form-group ">
                                        <label for="bio_dr" class="control-label col-lg-3">Biography Dari</label>
                                        <div class="col-lg-6">
                                            <textarea name="bio_dr" class="form-control format">{{$bio->bio_dr}}</textarea>
                                        </div>
                                    </div>
                                    @else
                                    <div class="form-group ">
                                        <label for="bio_pa" class="control-label col-lg-3">Biography Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea name="bio_pa" class="form-control format">{{$bio->bio_pa}}</textarea>
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
