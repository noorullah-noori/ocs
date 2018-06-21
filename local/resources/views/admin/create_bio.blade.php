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
                            Add Biography
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
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{route('the_bio.store')}}" enctype="multipart/form-data">

                                  @if($session =='en')
                                      <div class="form-group ">
                                        <label for="bio_en" class="control-label col-lg-3">Description English</label>
                                        <div class="col-lg-6">
                                            <textarea name="bio_en" value="{{old('bio_en')}}" class="form-control format"></textarea>
                                        </div>
                                    </div>
                                    @elseif($session=='dr')
                                     <div class="form-group ">
                                        <label for="bio_dr" class="control-label col-lg-3">Biography Dari</label>
                                        <div class="col-lg-6">
                                            <textarea name="bio_dr" value="{{old('bio_dr')}}" class="form-control format rtl"></textarea>
                                        </div>
                                    </div>
                                    @else
                                     <div class="form-group ">
                                        <label for="bio_pa" class="control-label col-lg-3">Biography Pashto</label>
                                        <div class="col-lg-6">
                                            <textarea name="bio_pa" value="{{old('bio_pa')}}" class="form-control format rtl"></textarea>
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
