@extends('layouts.master')
@section('title',trans('menu.journalist_form'))
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
  <form action="{{url($lang.'/store_journalist_form')}}" method="post" class="ui stackable form">
     <div class="ui grid" style="direction: {{$rtl}} !important;" id="form">
       <div class="row">

       </div>
       <div class="row" style="direction: {{$rtl}}">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.name')}}*</label>
             <input type="text" class="body_font" name="name" required="required" placeholder="{{trans('subscription.name')}}">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.last_name')}}*</label>
             <input type="text" class="body_font" name="last_name" required="required" placeholder="{{trans('subscription.last_name')}}">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.father_name')}}*</label>
             <input type="text" class="body_font" name="father_name" placeholder="{{trans('subscription.father_name')}}" required="required">
           </div>
         </div>
       </div>

       <div class="row" style="direction: {{$rtl}}">
         <div class="eight wide computer eight wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.nationality')}}*</label>
             <input type="text" class="body_font" name="nationality" placeholder="{{trans('subscription.nationality')}}" required="required">
           </div>
         </div>
         <div class="eight wide computer eight wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.passport_or_national_id')}}*</label>
             <input type="text" class="body_font" name="passport" placeholder="{{trans('subscription.passport_or_national_id')}}" required="required">
           </div>
         </div>
       </div>

         <label class="ui header">{{trans('subscription.official_email')}}*</label>
        <div class="row" style="direction: {{$rtl}}">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.email')}} 1</label>
             <input type="email" class="body_font" name="email1" placeholder="{{trans('subscription.email')}}1" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.email')}} 2</label>
             <input type="email" class="body_font" name="email2" placeholder="{{trans('subscription.email')}}2">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.email')}} 3</label>
             <input type="email" class="body_font" name="email3" placeholder="{{trans('subscription.email')}}3">
           </div>
         </div>
       </div>

        <label class="ui header">{{trans('subscription.contact_number')}}*</label>
        <div class="row" style="direction: {{$rtl}}">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.contact')}} 1</label>
             <input type="text" class="body_font" name="phone1" placeholder="{{trans('subscription.contact')}}1";>
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.contact')}} 2</label>
             <input type="text" class="body_font" name="phone2" placeholder="{{trans('subscription.contact')}}2";>
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.contact')}} 3</label>
             <input type="text" class="body_font" name="phone3" placeholder="{{trans('subscription.contact')}}3";>
           </div>
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label>{{trans('subscription.descipline')}}</label>
           <div class="ui fluid multiple search selection dropdown" id="discipline">
             <input name="discipline"  tabindex="-1" class="unfocusable-element" type="hidden">
             <div class="default text" style="{{$dir}}:0;">{{trans('subscription.descipline')}}</div>
           </div>
         </div>
       </div>

       <label class="ui header">{{trans('subscription.official_social_media')}}*</label>
        <div class="row" style="direction: {{$rtl}}">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.facebook')}}</label>
             <input type="text" class="body_font" name="facebook" placeholder="{{trans('subscription.facebook')}}" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.twitter')}}</label>
             <input type="text" class="body_font" name="twitter" placeholder="{{trans('subscription.twitter')}}" required="required">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.linked_in')}}</label>
             <input type="text" class="body_font" name="linked_in" placeholder="{{trans('subscription.linked_in')}}" required="required">
           </div>
         </div>
       </div>

       <div class="row">
         <div class="field column">
         <label>{{trans('subscription.area_of_expertise')}}</label>
             <select name="type" id="type" class="ui dropdown">
               <option value="" style="right: 0;">{{trans('subscription.area_of_expertise')}}</option>
               <option value="writer">{{trans('subscription.writer')}}</option>
               <option value="photographer">{{trans('subscription.photographer')}}</option>
               <option value="reporter">{{trans('subscription.news_reporter')}}</option>
               <option value="cartonist">{{trans('subscription.cartoonist')}}</option>
               <option value="others">{{trans('subscription.others')}}</option>
             </select>

         </div>
       </div>

         <div class="row"  style="display: none" id="type_text_id">
         <div class="field column">
           <input type="text"  id="type_text" placeholder="{{trans('subscription.area_of_expertise')}}" name="type_text">
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label>{{trans('subscription.language_fluency')}}*</label>
           <div class="ui multiple search selection dropdown" id="language_fluency">
             <input name="language"  tabindex="-1" class="unfocusable-element"  type="hidden" required="required">
             <div class="default text">{{trans('subscription.language_fluency')}}</div>
           </div>
         </div>
       </div>

       <div class="row">
         <div class="field column">
         <label>{{trans('subscription.office_starting_date')}}*</label>
             <input name="starting_date" type="<?php echo ($lang!='en')?'text':'date'; ?>" required="required" class="body_font <?php echo ($lang!='en')?'date_dr':''; ?>" >
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label>{{trans('subscription.current_media_outlet')}}*</label>
           <div class="ui fluid multiple search selection dropdown" id="current_media">
             <input name="current_media"  tabindex="-1" class="unfocusable-element" type="hidden" required="required">
             <div class="default text">{{trans('subscription.current_media_outlet')}}</div>
           </div>
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label>{{trans('subscription.previous_media_outlet')}}*</label>
           <div class="ui fluid multiple search selection dropdown" id="previous_media">
             <input name="previous_media"  tabindex="-1" class="unfocusable-element" type="hidden" required="required">
             <div class="default text">{{trans('subscription.previous_media_outlet')}}</div>
           </div>
         </div>
       </div>

       <div class="row" style="">
         <div class="field column">
         <label>{{trans('subscription.office_address')}}*</label>
           <div class="ui fluid" id="">
             <input name="address" type="text" placeholder="{{trans('subscription.office_address')}}" required="required">
           </div>
         </div>
       </div>


       <label class="ui header">{{trans('subscription.official_contact_number')}}</label>
        <div class="row" style="direction: {{$rtl}}">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.contact')}} 1*</label>
             <input type="text" class="body_font" name="o_phone1" placeholder="{{trans('subscription.contact')}}" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.contact')}} 2</label>
             <input type="text" class="body_font" name="o_phone2" placeholder="{{trans('subscription.contact')}}">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.contact')}} 3</label>
             <input type="text" class="body_font" name="o_phone3" placeholder="{{trans('subscription.contact')}}">
           </div>
         </div>
       </div>

       <label class="ui small header">{{trans('subscription.emails')}}</label>
        <div class="row" style="direction: {{$rtl}}">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.email')}} 1*</label>
             <input type="email" class="body_font" name="o_email1" placeholder="{{trans('subscription.email')}}" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.email')}} 2</label>
             <input type="email" class="body_font" name="o_email2" placeholder="{{trans('subscription.email')}}">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.email')}} 3</label>
             <input type="email" class="body_font" name="o_email3" placeholder="{{trans('subscription.email')}}">
           </div>
         </div>
       </div>

         <label class="ui small header">{{trans('subscription.website_or_social')}}*</label>
        <div class="row" style="direction: {{$rtl}}">
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.website')}}</label>
             <input type="text" class="body_font" name="o_website" placeholder="{{trans('subscription.website')}}" required="required">
           </div>
         </div>
         <div class="five wide computer five wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.facebook')}}</label>
             <input type="text" class="body_font" name="o_facebook" placeholder="{{trans('subscription.facebook')}}" required="required">
           </div>
         </div>
         <div class="six wide computer six wide tablet sixteen wide mobile column">
           <div class="field">
           <label>{{trans('subscription.twitter')}}</label>
             <input type="text" class="body_font" name="o_twitter" placeholder="{{trans('subscription.twitter')}}" required="required">
           </div>
         </div>
       </div>
             <div class="row" style="direction: {{$rtl}}">
            <div class="eight wide column">
     
          <div class="g-recaptcha" data-sitekey="6LclTIQUAAAAAIh7ztqz9mryxNAgSC82qYXg4gRH">
              
          </div>
    
           </div>
     </div>
 

       </div>
  
     <div class="row">
       <div class="field column">
       <button class="ui blue icon labeled button body_font" style="border-radius:0;margin-left:5px;margin-top: 30px" type="submit">
         <i class="envelope icon"></i>
         {{trans('subscription.submit')}}
       </button>
     </div>
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

  $('#type').change(function(){
    if($("#type").val()=='others'){
      $('#type_text_id').css('display','block');
    }
    else{
     $('#type_text_id').css('display','none');
    }
  });

  </script>

@endpush
