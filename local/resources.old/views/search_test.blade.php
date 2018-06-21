@elseif(sizeof($data_en)==0)
               <center><h2 style="">No match Found</h2></center>
              @else  
                @foreach($data_en as $value)
                  <div class="item {{($value==$data_en->last())?'no_border':''}}">
                    <div class="content">
                      <a href="{{url($value->type.'_details/'.$value->table_id)}}" class="ui small header title_font">{{$value->title_en}}</a>
                      <div class="meta body_font">
                        {{$value->date_en}}
                        {{-- <span dir="">{{$jdate->detailedDate($value->date_en,$lang)}}</span> --}}
                      </div>
                      <div class=" description body_font ">
                        <p class="body_font">{{$value->short_desc_en}}</p>
                      </div>
                    </div>
                  </div>
                @endforeach
                @elseif(sizeof($data_pa)==0)
                <center><h2 style="">No match Found</h2></center>
              @else  
                @foreach($data_pa as $value)
                  <div class="item {{($value==$data_pa->last())?'no_border':''}}">
                    <div class="content">
                      <a href="{{url($value->type.'_details/'.$value->table_id)}}" class="ui small header title_font">{{$value->title_pa}}</a>
                      <div class="meta body_font">
                        {{$value->date_pa}}
                        {{-- <span dir="">{{$jdate->detailedDate($value->date_pa,$lang)}}</span> --}}
                      </div>
                      <div class=" description body_font ">
                        <p class="body_font">{{$value->short_desc_pa}}</p>
                      </div>
                    </div>
                  </div>
                @endforeach