<!DOCTYPE html>
<html>
<head>
  @stack('meta_tags')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - {{trans('home.ocs_title')}}</title>

  @include('include.css_links')

  @include('include.header')
  <div class="ui segment">
    <div class="ui centered container grid" id="main" style="display: flex">
      @include('include.sidebar')
      <div class="sixteen wide tablet mobile eleven wide computer column">
          {!! Breadcrumbs::renderIfExists() !!}

        <div class="ui fluid card" style="direction:rtl;float:right;text-align:right;">
          <div class="content" style="text-align:right">
            @if ($content_header)
              <h2 class="ui header title_font border">
                @if(isset($search_text))
                  {{trans('search.search_title').'"'.$search_text.'"'}}
                @else
                  @yield('title')
                @endif
              </h2>

            @endif
            @yield('content')
            @if(strpos(Request::url(),'details') || strpos(Request::url(),'register_complaint') || strpos(Request::url(),'chief_of_staff')  || strpos(Request::url(),'presidential_palace') || strpos(Request::url(),'media_directorate'))
              @component('include.components.share_buttons')
              @endcomponent
            @endif
          </div>
        </div>
      </div>
      @if(isset($final))
        @if($final!=null && $news_details->$title!='')
          <div class="ui fluid card">
            <div class="content">
            <h3 class="title_font" style="direction:{{$rtl}};">{{trans('home.similar')}} </h3>
            <div class="ui three stackable cards" style="text-align:right;direction:{{$rtl}}">
              @foreach($final as $item)
                <div class="ui card">
                  <div class="content">
                    <div class="ui image" style="height: 103px;">
                      <img src="{{asset('uploads/news/'.$item->image)}}" style="height: 100%" alt="">
                    </div>
                    <a href="{{url($lang.'/news_details/'.$item->id)}}" class="title_font" style="direction: {{$rtl}} !important;">{{$item->$title}}</a>
                  </div>
                </div>
              @endforeach
            </div>

            </div>
          </div>
        @endif
      @endif
    </div>
  </div>


  @include('include.footer')


</body>
</html>
