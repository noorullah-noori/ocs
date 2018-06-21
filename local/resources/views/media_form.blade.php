@extends('layouts.master')
@section('title',trans('menu.media_form'))
@section('content')
  @if(Session::has('success'))
    <div class="ui message green body_font">{{Session::get('success')}}</div>
  @elseif(Session::has('failure'))
    <div class="ui message red body_font">{{Session::get('failure')}}</div>
  @endif
  @if($errors->any())
    <ul class="alert alert-danger">
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
  <form action="{{url($lang.'/store_media_form')}}" method="post" class="ui stackable form">
   <div class="ui grid" style="direction: {{$rtl}} !important;" id="form">
     <div class="row" style="direction: {{$rtl}}">
       <div class="sixteen wide mobile four wide tablet four wide computer column">
       <label>{{trans('subscription.media_name')}}*</label>
         <div class="field">
           <input type="text" class="body_font" name="name" placeholder="{{trans('subscription.media_name')}}" required="required">
         </div>
       </div>
       <div class="sixteen wide mobile four wide tablet four wide computer column">
         <div class="field">
         <label>{{trans('subscription.license_number')}}*</label>
           <input type="text" class="body_font" name="license_number" placeholder="{{trans('subscription.license_number')}}" required="required">
         </div>
       </div>
       <div class="sixteen wide mobile four wide tablet four wide computer column">
         <div class="field">
         <label>{{trans('subscription.license_issue_date')}}*</label>
           <input type="text" <?php echo ($lang!='en')?'date_dr':'onfocus=(this.type="date")'; ?> class="body_font <?php echo ($lang!='en')?'date_dr':''; ?>" name="license_issue_date" placeholder="{{trans('subscription.license_issue_date')}}" required="required">
         </div>
       </div>
       <div class="sixteen wide mobile four wide tablet four wide computer column">
         <div class="field">
         <label>{{trans('subscription.office_starting_date')}}*</label>
           <input type="text" <?php echo ($lang!='en')?'date_dr':'onfocus=(this.type="date")'; ?> class="body_font <?php echo ($lang!='en')?'date_dr':''; ?>" name="office_starting_date" placeholder="{{trans('subscription.office_starting_date')}}" required="required">
         </div>
       </div>
     </div>
     <div class="row">
       <div class="field column" style="direction:{{$rtl}} !important">
         <label class="body_font" style=" font-size:15px;">{{trans('subscription.type_of_media_outlet')}}*</label>
         <div class="ui radio checkbox">
           <input type="radio" name="type" value="television">
           <label class="body_font">{{trans('subscription.television')}}</label>
         </div>

         <div class="ui radio checkbox">
           <input type="radio" name="type" value="radio">
           <label class="body_font">{{trans('subscription.radio')}}</label>
         </div>

         <div class="ui radio checkbox">
           <input type="radio" name="type" value="printing_media">
           <label class="body_font">{{trans('subscription.printing_media')}}</label>
         </div>

         <div class="ui radio checkbox">
           <input type="radio" name="type" value="news_agency">
           <label class="body_font">{{trans('subscription.news_agency')}}</label>
         </div>

         <div class="ui radio checkbox">
           <input type="radio" name="type" value="electronic_media">
           <label class="body_font">{{trans('subscription.electronic_media')}}</label>
         </div>

         <div class="ui radio checkbox">
          <input type="radio" name="type" value="others" checked="checked">
           <label class="body_font">{{trans('subscription.others')}} </label>
         </div>
       </div>
     </div>

     <div class="row" style="">
       <div class="field column">
       <label>{{trans('subscription.coverage_area')}}*</label>
         <div class="ui fluid multiple search selection dropdown" id="coverage_area">
           <input name="coverage_area"  tabindex="-1" class="unfocusable-element" type="hidden" required="required">
           <div class="default text body_font">{{trans('subscription.coverage_area_desc')}}</div>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="field column">
       <label>{{trans('subscription.type_of_broadcasting')}}*</label>
         <div class="ui fluid multiple search selection dropdown" id="type_of_broadcasting">
           <input name="type_of_broadcasting"  tabindex="-1" class="unfocusable-element" type="hidden" required="required">
           <div class="default text body_font">{{trans('subscription.type_of_broadcasting_desc')}}</div>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="field column">
       <label>{{trans('subscription.audience_group')}}</label>
         <div class="ui fluid multiple search selection dropdown" id="audience_group">
           <input name="audience_group"  tabindex="-1" class="unfocusable-element" type="hidden">
           <div class="default text body_font">{{trans('subscription.audience_group_desc')}}</div>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="field column">
       <label>{{trans('subscription.language_of_broadcasting')}}*</label>
         <div class="ui fluid multiple search selection dropdown" id="language_of_broadcasting">
           <input name="language_of_broadcasting"  tabindex="-1" class="unfocusable-element" type="hidden">
           <div class="default text body_font">{{trans('subscription.language_of_broadcasting')}}</div>
         </div>
       </div>
     </div>

      <div class="row" style="">
       <div class="field column">
       <label>{{trans('subscription.address')}}*</label>
         <div class="ui fluid" id="office_address">
           <input name="official_address" type="text" placeholder="{{trans('subscription.address')}}">
         </div>
       </div>
     </div>

      <label class="ui header">{{trans('subscription.official_email')}}</label>
      <div class="row" style="direction: {{$rtl}}">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.email')}} 1*</label>
           <input type="email" class="body_font" name="email1" placeholder="{{trans('subscription.email')}} 1">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.email')}} 2</label>
           <input type="email" class="body_font" name="email2" placeholder="{{trans('subscription.email')}} 2">
         </div>
       </div>
       <div class="six wide computer six wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.email')}} 3</label>
           <input type="email" class="body_font" name="email3" placeholder="{{trans('subscription.email')}} 3">
         </div>
       </div>
     </div>

     <label class="ui header">{{trans('subscription.official_contact_number')}}</label>
      <div class="row" style="direction: {{$rtl}}">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.contact')}} 1*</label>
           <input type="text" class="body_font" name="phone1" placeholder="{{trans('subscription.contact')}} 1">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.contact')}} 2</label>
           <input type="text" class="body_font" name="phone2" placeholder="{{trans('subscription.contact')}} 2">
         </div>
       </div>
       <div class="six wide computer six wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.contact')}} 3</label>
           <input type="text" class="body_font" name="phone3" placeholder="{{trans('subscription.contact')}} 3">
         </div>
       </div>
     </div>

     <label class="ui header">{{trans('subscription.website_or_social')}}*</label>
      <div class="row" style="direction: {{$rtl}}">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.website')}}</label>
           <input type="text" class="body_font" name="website" placeholder="{{trans('subscription.website')}}">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.facebook')}}</label>
           <input type="text" class="body_font" name="facebook" placeholder="{{trans('subscription.facebook')}}">
         </div>
       </div>
       <div class="six wide computer six wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.twitter')}}</label>
           <input type="text" class="body_font" name="twitter" placeholder="{{trans('subscription.twitter')}}">
         </div>
       </div>
     </div>

     <label class="ui header">{{trans('subscription.news_director')}}*</label>
     <div class="row" style="direction: {{$rtl}}">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.name')}}</label>
           <input type="text" class="body_font" name="d_name" placeholder="{{trans('subscription.name')}}">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.email')}}</label>
           <input type="email" class="body_font" name="d_email" placeholder="{{trans('subscription.email')}}">
         </div>
       </div>
       <div class="six wide computer six wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.contact_number')}}</label>
           <input type="text" class="body_font" name="d_phone" placeholder="{{trans('subscription.contact_number')}}">
         </div>
       </div>
     </div>
      <div class="row" style="direction: {{$rtl}}">
       <div class="eight wide column">
         <div class="field">
         <label>{{trans('subscription.facebook')}}</label>
           <input type="text" class="body_font" name="d_facebook" placeholder="{{trans('subscription.facebook')}}">
         </div>
       </div>
       <div class="eight wide column">
         <div class="field">
         <label>{{trans('subscription.twitter')}}</label>
           <input type="text" class="body_font" name="d_twitter" placeholder="{{trans('subscription.twitter')}}">
         </div>
       </div>
     </div>

     @if($lang !='en')
     <label class="ui header">{{trans('subscription.news_reporter')}}</label>
     <div class="row" style="direction: {{$rtl}}">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.name')}}</label>
           <input type="text" class="body_font" name="r_name" placeholder="{{trans('subscription.name')}}">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.email')}}</label>
           <input type="email" class="body_font" name="r_email" placeholder="{{trans('subscription.email')}}">
         </div>
       </div>
       <div class="sixfive wide computer five wide tablet sixteen wide mobile column wide computer sixfive wide computer five wide tablet sixteen wide mobile column wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.contact')}}</label>
           <input type="text" class="body_font" name="r_phone" placeholder="{{trans('subscription.contact')}}">
         </div>
       </div>
     </div>
      <div class="row" style="direction: {{$rtl}}">
       <div class="eight wide column">
         <div class="field">
         <label>{{trans('subscription.facebook')}}</label>
           <input type="text" class="body_font" name="r_facebook" placeholder="{{trans('subscription.facebook')}}">
         </div>
       </div>
       <div class="eight wide column">
         <div class="field">
         <label>{{trans('subscription.twitter')}}</label>
           <input type="text" class="body_font" name="r_twitter" placeholder="{{trans('subscription.twitter')}}">
         </div>
       </div>
     </div>

     <label class="ui header">{{trans('subscription.media_secretary')}}*</label>
    <div class="row" style="direction: {{$rtl}}">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.name')}}</label>
           <input type="text" class="body_font" name="s_name" placeholder="{{trans('subscription.name')}}">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.email')}}</label>
           <input type="email" class="body_font" name="s_email" placeholder="{{trans('subscription.email')}}">
         </div>
       </div>
       <div class="sixfive wide computer five wide tablet sixteen wide mobile column wide computer sixfive wide computer five wide tablet sixteen wide mobile column wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.contact')}}</label>
           <input type="text" class="body_font" name="s_phone" placeholder="{{trans('subscription.contact')}}">
         </div>
       </div>
     </div>
      <div class="row" style="direction: {{$rtl}}">
       <div class="eight wide column">
         <div class="field">
         <label>{{trans('subscription.facebook')}}</label>
           <input type="text" class="body_font" name="s_facebook" placeholder="{{trans('subscription.facebook')}}">
         </div>
       </div>
       <div class="eight wide column">
         <div class="field">
         <label>{{trans('subscription.twitter')}}</label>
           <input type="text" class="body_font" name="s_twitter" placeholder="{{trans('subscription.twitter')}}">
         </div>
       </div>
     </div>
     @endif
     <label class="ui header">{{trans('subscription.journalist')}}</label>
     <div class="row" style="direction: {{$rtl}}">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.name')}}</label>
           <input type="text" class="body_font" name="j_name" placeholder="{{trans('subscription.name')}}">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.email')}}</label>
           <input type="email" class="body_font" name="j_email" placeholder="{{trans('subscription.email')}}">
         </div>
       </div>
       <div class="sixfive wide computer five wide tablet sixteen wide mobile column wide computer sixfive wide computer five wide tablet sixteen wide mobile column wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.contact')}}</label>
           <input type="text" class="body_font" name="j_phone" placeholder="{{trans('subscription.contact')}}">
         </div>
       </div>
     </div>
      <div class="row" style="direction: {{$rtl}}">
       <div class="eight wide column">
         <div class="field">
         <label>{{trans('subscription.facebook')}}</label>
           <input type="text" class="body_font" name="j_facebook" placeholder="{{trans('subscription.facebook')}}">
         </div>
       </div>
       <div class="eight wide column">
         <div class="field">
         <label>{{trans('subscription.twitter')}}</label>
           <input type="text" class="body_font" name="j_twitter" placeholder="{{trans('subscription.twitter')}}">
         </div>
       </div>
     </div>


     <label class="ui header">{{trans('subscription.journalist')}}</label>
   <div class="row" style="direction: {{$rtl}}">
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.name')}}</label>
           <input type="text" class="body_font" name="j1_name" placeholder="{{trans('subscription.name')}}">
         </div>
       </div>
       <div class="five wide computer five wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.email')}}</label>
           <input type="email" class="body_font" name="j1_email" placeholder="{{trans('subscription.email')}}">
         </div>
       </div>
       <div class="six wide computer six wide tablet sixteen wide mobile column">
         <div class="field">
         <label>{{trans('subscription.contact')}}</label>
           <input type="text" class="body_font" name="j1_phone" placeholder="{{trans('subscription.contact')}}">
         </div>
       </div>
     </div>
      <div class="row" style="direction: {{$rtl}}">
       <div class="eight wide column">
         <div class="field">
         <label>{{trans('subscription.facebook')}}</label>
           <input type="text" class="body_font" name="j1_facebook" placeholder="{{trans('subscription.facebook')}}">
         </div>
       </div>
       <div class="eight wide column">
         <div class="field">
         <label>{{trans('subscription.twitter')}}</label>
           <input type="text" class="body_font" name="j1_twitter" placeholder="{{trans('subscription.twitter')}}">
         </div>
       </div>
     </div>

   </div>

   <div class="field">
     <button class="ui blue icon labeled button body_font" style="margin-top: 30px;border-radius: 0;" type="submit">
       <i class="envelope icon"></i>
       {{trans('subscription.submit')}}
     </button>
   </div>
   {{csrf_field()}}
  </form>
@endsection
@push('custom-css')
  <style>
  #form> .row  * {
    direction: {{$rtl}};
    text-align: {{$dir}};
  }
  </style>

@endpush
@push('meta_tags')
  @component('include.components.meta_tags')

    @slot('meta_title')
      @yield('title')
    @endslot

    @slot('meta_description')
      {{-- {{$media!=null ? substr(strip_tags($media->$description),720) : ''}} --}}
    @endslot

    @slot('meta_url')
      {{Request::url()}}
    @endslot

    @slot('meta_image')
      {{-- http://localhost/ocs_live/uploads/decree/default_fb.jpg --}}
      {{asset('uploads/decree/default_fb.jpg')}}
      {{-- {{asset('uploads/news/'.$media->image_thumb)}} --}}
    @endslot

  @endcomponent

@endpush
@push('custom-js')
  <script>
  $("input").focusout(function(){
    var value = $(this).val();
    var clear = value.replace(/(<([^>]+)>)/ig,"");
    $(this).val(clear);
  });

  </script>

@endpush
