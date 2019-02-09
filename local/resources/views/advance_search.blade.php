@extends('layouts.master')
@section('title',trans('menu.advanced_search'))
@section('content')

<form class="ui form" method="GET" name="advanced_search_form" action="{{url($lang.'/get_search')}}">
  <label class="ui header title_font"> : {{trans('search.search')}}</label>
    <div class="field">
      <label>{{trans('search.search')}}*</label>
      <input type="text" name="search" class="body_font" placeholder="{{trans('search.search')}}" required="required">
    </div>

    <div class="field">
      <label>{{trans('search.search_in')}}</label>
      <select style="direction:{{$rtl}};" name="type">
        <option value="word" selected style="direction:{{$rtl}};">{{trans('search.exact_word')}}</option>
        <option value="all" style="direction:{{$rtl}};">{{trans('search.all_words')}}</option>
      </select>
    </div>

    <label class="ui header title_font"> : {{trans('search.search_date')}}</label>
    <div class="two fields" style="direction: {{$rtl}}">
        <div class="field">
          <label>{{trans('search.from')}}</label>
            <input class="{{$lang=='en' ? '' : 'date_dr' }}" type="{{$lang=='en' ? 'date' : 'text'}}" name="from">
        </div>
        <div class="field">
          <label>{{trans('search.to')}}</label>
            <input class="{{$lang=='en' ? '' : 'date_dr' }}" type="{{$lang=='en' ? 'date' : 'text'}}" name="to">
        </div>
    </div>

    <label class="ui header"> : {{trans('search.search_inside')}}</label>
    {{-- <div class="three fields" >
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="decree">
            <label>{{trans('menu.decrees')}}</label>
          </div>
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="orders">
            <label>{{trans('menu.orders')}}</label>
          </div>
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="statements">
            <label>{{trans('menu.statements')}}</label>
          </div>
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="mesasages">
            <label>{{trans('menu.messages')}}</label>
          </div>
        </div>
    </div> --}}
    <div class="equal width fields">
      <div class="field">
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="decree">
            <label>{{trans('menu.decrees')}}</label>
          </div>
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="orders">
            <label>{{trans('menu.orders')}}</label>
          </div>
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="statements">
            <label>{{trans('menu.statements')}}</label>
          </div>
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="mesasages">
            <label>{{trans('menu.messages')}}</label>
          </div>
        </div>
      </div>
      <div class="field">
          <div class="field">
            <div class="ui checkbox">
              <input type="checkbox" name="search_in[]" checked="checked" value="words">
              <label>{{trans('menu.words')}}</label>
            </div>
          </div>
          <div class="field">
            <div class="ui checkbox">
              <input type="checkbox" name="search_in[]" checked="checked" value="domestic">
              {{-- <input type="checkbox" name="search_in[]" style="display: none" checked="checked" value="international"> --}}
              <label>{{trans('menu.trips')}}</label>
            </div>
          </div>
          <div class="field">
            <div class="ui checkbox">
              <input type="checkbox" name="search_in[]" checked="checked" value="news">
              <label>{{trans('menu.news')}}</label>
            </div>
          </div>
          <div class="field">
            <div class="ui checkbox">
              <input type="checkbox" name="search_in[]" checked="checked" value="report">
              <label>{{trans('menu.reports')}}</label>
            </div>
          </div>
      </div>
      <div class="field">
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="articles">
            <label>{{trans('menu.articles')}}</label>
          </div>
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="infographic">
            <label>{{trans('menu.infographics')}}</label>
          </div>
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="album">
            <label>{{trans('menu.photo_albums')}}</label>
          </div>
        </div>
        <div class="field">
          <div class="ui checkbox">
            <input type="checkbox" name="search_in[]" checked="checked" value="video">
            <label>{{trans('menu.videos')}}</label>
          </div>
        </div>
            {{csrf_field()}}

        <button class="ui button" type="submit">{{trans('search.search')}}</button>
      </div>
    </div>



  </form>

  {{-- <form class="ui form" method="GET" action="{{url($lang.'/get_search')}}">
      <div class="field">
          <div class="field">
          <label>{{trans('search.search')}}*</label>
            <input type="text" name="search" placeholder="{{trans('search.search')}}" required="required">
          </div>
           <div class="field">
           <label>{{trans('search.search_in')}}</label>
            <select style="direction:{{$rtl}};" name="type">
              <option value="word" selected style="direction:{{$rtl}};">{{trans('search.exact_word')}}</option>
              <option value="all" style="direction:{{$rtl}};">{{trans('search.all_words')}}</option>
            </select>
          </div>
      </div>
      <div class="field">
        <label class="ui header title_font">{{trans('search.search_date')}}</label>
        <div class="field">
          <label>{{trans('search.from')}}</label>
            <input class="{{$lang=='en' ? '' : 'date_dr' }}" type="{{$lang=='en' ? 'date' : 'text'}}" name="from">
          </div>
           <div class="field">
           <label>{{trans('search.to')}}</label>
           <input class="{{$lang=='en' ? '' : 'date_dr' }}" type="{{$lang=='en' ? 'date' : 'text'}}" name="to">
          </div>
      </div>
      <label class="ui header">{{trans('search.search_inside')}}</label>
      <div class="ui three fields" style="direction:ltr;">
      <div class="field">
     <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="decree">
        <label>{{trans('menu.decrees')}}</label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="orders">
        <label>{{trans('menu.orders')}}</label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="statements">
        <label>{{trans('menu.statements')}}</label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="mesasages">
        <label>{{trans('menu.messages')}}</label>
      </div>
    </div>
    </div>
      <div class="field">
     <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="words">
        <label>{{trans('menu.words')}}</label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="domestic">
        <input type="checkbox" name="search_in[]" style="display: none" checked="checked" value="international">
        <label>{{trans('menu.trips')}}</label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="news">
        <label>{{trans('menu.news')}}</label>
      </div>
    </div>
	<div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="report">
        <label>{{trans('menu.reports')}}</label>
      </div>
    </div>
    </div>
    <div class="field">
     <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="articles">
        <label>{{trans('menu.articles')}}</label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="infographic">
        <label>{{trans('menu.infographics')}}</label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="album">
        <label>{{trans('menu.photo_albums')}}</label>
      </div>
    </div>
    <div class="field">
      <div class="ui checkbox">
        <input type="checkbox" name="search_in[]" checked="checked" value="video">
        <label>{{trans('menu.videos')}}</label>
      </div>
    </div>
    </div>
    </div>
    {{csrf_field()}}
  <button class="ui button" type="submit">{{trans('search.search')}}</button>
</form> --}}

  <div class="search-result">

  </div>
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
  $("input[name=search]").focusout(function(){
    var value = $(this).val();
    var clear = value.replace(/(<([^>]+)>)/ig,"");
    $(this).val(clear);
  });

  $(document).ready(function() {
    $(window).keydown(function(event){
      if(event.keyCode == 13) {
        event.preventDefault();
        return false;
      }
    });

    $("form[name=advanced_search_form]").submit(function(event) {
      event.preventDefault();
      $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function (resp) {
          $('.search-result').html("<hr>"+resp);

          
        }

      })
    });
  });


  </script>

@endpush
