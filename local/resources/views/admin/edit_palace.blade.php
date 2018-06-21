@include('admin.include.header')
<?php $session = Session::get('lang');?>

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
                            Edit Presidential Palace Description
                        </header>
                        <div class="panel-body">
                            <div class="form cmxform form-horizontal">
                                {!! Form::model($palace, ['route' => array('the_palace.update',$palace->id),'files' =>true]) !!}
                                {{method_field('PATCH')}}
                                @if ($session=='en')
                                  <div class="form-group ">
                                      <label for="description_en" class="control-label col-lg-3">Description English</label>
                                      <div class="col-lg-6">
                                          <textarea name="description_en" class="form-control format">{{$palace->description_en}}</textarea>
                                      </div>
                                  </div>

                                @elseif ($session=='dr')
                                  <div class="form-group ">
                                      <label for="description_dr" class="control-label col-lg-3">Description Dari</label>
                                      <div class="col-lg-6">
                                          <textarea name="description_dr" class="form-control format rtl">{{$palace->description_dr}}</textarea>
                                      </div>
                                  </div>
                                @elseif ($session=='pa')
                                  <div class="form-group ">
                                      <label for="description_pa" class="control-label col-lg-3">Description Pashto</label>
                                      <div class="col-lg-6">
                                          <textarea name="description_pa" class="form-control format rtl">{{$palace->description_pa}}</textarea>
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
