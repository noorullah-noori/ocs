@include('include.header')
<?php
global $lang,$dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$jdate;
?>
  {{-- main content starts --}}
  <style>
  .ui.fluid.card {
    border:1px solid #ddd;
    margin-bottom:10px;
  }
  .ui.items > .item {
    border-bottom: 1px dashed #ddd;
    padding-bottom: 10px;
    direction:{{$rtl}} !important;
  }
  .ui.items {
    direction:{{$rtl}};
    float: right;
    text-align: right;
  }
  input{
    direction: {{$rtl}};
  }
  </style>
    {{-- left sidebar president word and social boxes start --}}
    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="">
            <div class="content">
              <h2 class="ui header title_font border">{{trans('menu.advanced_search')}}</h2>

              <form class="ui form" method="post" action="{{url($lang.'/get_search')}}">
                  <div class="field">
                      <div class="field">
                      <label>{{trans('search.search')}}*</label>
                        <input type="text" name="search" placeholder="{{trans('search.search')}}" required="required">
                      </div>
                       <div class="field">
                       <label>{{trans('search.search_in')}}</label>
                        <select style="direction:{{$rtl}};" name="type">
                          <option value="word" style="direction:{{$rtl}};">{{trans('search.exact_word')}}</option>
                          <option value="all" selected="selected" style="direction:{{$rtl}};">{{trans('search.all_words')}}</option>
                        </select>
                      </div>
                  </div>
                  <div class="field">
                    <label class="ui header title_font">{{trans('search.search_date')}}</label>
                    <div class="field">
                      <label>{{trans('search.from')}}</label>
                        <input type="date" name="from">
                      </div>
                       <div class="field">
                       <label>{{trans('search.to')}}</label>
                       <input type="date" name="to">
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
                    <label>{{trans('menu.trips')}}</label>
                  </div>
                </div>
                <div class="field">
                  <div class="ui checkbox">
                    <input type="checkbox" name="search_in[]" checked="checked" value="news">
                    <label>{{trans('menu.news')}}</label>
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
            </form>

            </div>
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')

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
});
</script>
