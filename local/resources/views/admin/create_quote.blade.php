@include('admin.include.header')
<style>
      .cropit-preview,.cropit-preview-test {
        background-color: #f8f8f8;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 653px;
        height: 280px;
        margin: auto;
      }

      .cropit-preview-image-container {
        cursor: move;
      }
      .cropit-image-zoom-input {
        width: 170px !important;
        margin: auto;
      }
    .fileContainer {
      overflow: hidden;
      background: #418bcb;
      width: 133px;
      text-align: center;
      color: white;
      border-radius: 4px;
      padding: 6px 12px;
      font-weight: normal;
      cursor: pointer;
      font-size: 14px;
    }
    .fileContainer input[type=file]{
      opacity: 0;
      height: 0;
    }


</style>
<!--main content start-->
<section id="main-content">
<section class="wrapper">
        <div class="col-md-11">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Quote
                        </header>
                         <div class="panel-body">
                            @if($errors->any())
                              <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                  <li>{{$error}}</li>
                                @endforeach
                              </ul>
                            @endif
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{route('quotes.store')}}" enctype="multipart/form-data">
                                    <div class="form-group ">
                                        <label for="title" class="control-label col-lg-3">Quote</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="title" name="title" value="{{old('title')}}" type="text">
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                          <div class="image-editor">
                                            <label for="" class="fileContainer">
                                              <input type="file" class="cropit-image-input">
                                              Browse Image
                                            </label>
                                            <div class="cropit-preview"></div>
                                            {{-- <div class="image-size-label">
                                              Resize image
                                            </div> --}}
                                            <input type="range" class="cropit-image-zoom-input">
                                            <input type="hidden" name="image-data" class="hidden-image-data" />
                                          </div>
                                          <div class="thumb-image-editor">
                                          </div>

                                        </div>
                                      </div>                                    
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Save</button>
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


    $(function() {
      $('.image-editor').cropit();
      // $('.thumb-image-editor').cropit();
      $('form').submit(function() {
        // Move cropped image data to hidden input
        var imageData = $('.image-editor').cropit('export', {
          type: 'image/jpeg',
          quality: .9,
          originalSize: true
        });
        $('.image-editor').find('.cropit-preview-test,.cropit-preview');
        $('.hidden-image-data').val(imageData);
        // return false;
      });
    })
</script>
