<div class="ui items" style="">
    @if($data)
      @foreach($data as $value)
        <div class="item {{($value==$data->last())?'no_border':''}}">
          <div class="content">
            <a href="{{($value->type=='word')?'#':url($lang.'/'.$value->type.'_details/'.$value->table_id)}}" class="ui small header title_font">{{($value->type=='word')?trans('home.president_word'):$value->$title}}</a>
            <div class="meta body_font">
              {{$value->$date}}
              {{-- <span dir="">{{$jdate->detailedDate($value->date_en,$lang)}}</span> --}}
            </div>
            <div class=" description body_font ">
              <p class="body_font">{{$value->$short_desc}}</p>
            </div>
          </div>
        </div>
      @endforeach
    @else
      <center><h2 style="">No match Found</h2></center>
    @endif
  </div>
    {{-- Pagination start --}}
      <div class="ui centered grid">
        {!! $data->links() !!}
      </div>
    {{-- Pagination End --}}
  
    
  
    <script>
  
    $('.pagination a').click(function(e) {
      e.preventDefault();
  
      $('li').removeClass('active');
      $(this).parent('li').addClass('active');
  
      var myurl = $(this).attr('href');
      var page=$(this).attr('href').split('page=')[1];
  
      getData(page);
  
    });
  
    function getData(page) {
      $.ajax({
          url: $('form[name=advanced_search_form]').attr('action')+'?page=' + page,
          data: $('form[name=advanced_search_form]').serialize(),
          type: "get",
          datatype: "html"
      }).done(function(data){
          $(".search-result").empty().html(data);
          location.hash = page;
      }).fail(function(jqXHR, ajaxOptions, thrownError){
            alert('No response from server');
      });
    }
    </script>