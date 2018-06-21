@include('include.header')
<?php
global $lang,$dir,$indir,$rtl,$ltr,$title,$date,$short_desc,$description,$jdate;
$desc = "desc_".$lang;
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
  }
  .ui.items {
    direction:rtl;
    float: right;
    text-align: right;
  }
  #bio img{
    width: 100%;
    height: 600px;
  }
  label {
    padding-right:10px;
  }
  input,textarea,.ui.dropdown{
    border-radius: 0 !important;
  }
  #form> .row  * {
    direction: {{$rtl}};
    text-align: {{$dir}};
  }
  .ui.button {
    boder-radius:0 !important;
  }
  .ui.multiple.search.dropdown>.text {
    {{$dir}}:0 !important;
  }
  </style>
    {{-- left sidebar president word and social boxes start --}}

    <div class="ui segment">
      <div class="ui centered container grid" id="main" style="display: flex">
        @include('include.sidebar')
        <div class="sixteen wide tablet mobile eleven wide computer column">
          <div class="ui fluid card" style="direction:rtl;float:right;text-align:right;">
            <div class="content" id="bio" style="text-align:right">
              <h2 class="ui header title_font border">{{trans('menu.expert_form')}}</h2>
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
              <div class="ui fluid card" style="direction:rtl;float:right;text-align:right;">
                <div class="content" id="bio" style="text-align:right">

                 <form action="{{url($lang.'/store_expert_form')}}" method="post" class="ui stackable form">
                    <div class="ui grid" style="direction: {{$rtl}} !important;" id="form">
                      <div class="row">

                      </div>
                      <div class="row" style="direction: {{$rtl}}">
                        <div class="five wide computer five wide tablet sixteen wide mobile column">
                          <div class="field">
                          <label>{{trans('subscription.name')}}*</label>
                            <input type="text" class="body_font" name="name" placeholder="{{trans('subscription.name')}}" required="required">
                          </div>
                        </div>
                        <div class="five wide computer five wide tablet sixteen wide mobile column">
                          <div class="field">
                          <label>{{trans('subscription.last_name')}}*</label>
                            <input type="text" class="body_font" name="last_name" placeholder="{{trans('subscription.last_name')}}" required="required">
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

                        <label class="ui header">{{trans('subscription.emails')}}</label>
                       <div class="row" style="direction: {{$rtl}}">
                        <div class="five wide computer five wide tablet sixteen wide mobile column">
                          <div class="field">
                          <label>{{trans('subscription.email')}} 1*</label>
                            <input type="email" class="body_font" name="email1" placeholder="{{trans('subscription.email')}}" required="required">
                          </div>
                        </div>
                        <div class="five wide computer five wide tablet sixteen wide mobile column">
                          <div class="field">
                          <label>{{trans('subscription.email')}} 2</label>
                            <input type="email" class="body_font" name="email2" placeholder="{{trans('subscription.email')}}">
                          </div>
                        </div>
                        <div class="six wide computer six wide tablet sixteen wide mobile column">
                          <div class="field">
                          <label>{{trans('subscription.email')}} 3</label>
                            <input type="email" class="body_font" name="email3" placeholder="{{trans('subscription.email')}}">
                          </div>
                        </div>
                      </div>

                       <label class="ui header">{{trans('subscription.contact_number')}}</label>
                       <div class="row" style="direction: {{$rtl}}">
                        <div class="five wide computer five wide tablet sixteen wide mobile column">
                          <div class="field">
                          <label>{{trans('subscription.contact')}} 1*</label>
                            <input type="text" class="body_font" name="phone1" placeholder="{{trans('subscription.contact')}}" required="required">
                          </div>
                        </div>
                        <div class="five wide computer five wide tablet sixteen wide mobile column">
                          <div class="field">
                          <label>{{trans('subscription.contact')}} 2</label>
                            <input type="text" class="body_font" name="phone2" placeholder="{{trans('subscription.contact')}}">
                          </div>
                        </div>
                        <div class="six wide computer six wide tablet sixteen wide mobile column">
                          <div class="field">
                          <label>{{trans('subscription.contact')}} 3</label>
                            <input type="text" class="body_font" name="phone3" placeholder="{{trans('subscription.contact')}}">
                          </div>
                        </div>
                      </div>

                      <label class="ui header">{{trans('subscription.social_media')}}*</label>
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
                        <label>{{trans('subscription.area_of_expertise')}}*</label>
                            <select name="type" id="type"  class="ui dropdown">
                              <option value="">{{trans('subscription.area_of_expertise')}}</option>
                              <option value="writer">{{trans('subscription.writer')}}</option>
                              <option value="attendee">{{trans('subscription.discussion_participant')}}</option>
                              <option value="other" class="other" id="other">{{trans('subscription.others')}}</option>
                            </select>

                        </div>
                      </div>

                      <div class="row"  style="display: none" id="type_text_id">
                        <div class="field column">
                          <input type="text"  id="type_text" placeholder="Expertise in" name="type_text">
                        </div>
                      </div>

                      <div class="row" style="">
                        <div class="field column">
                        <label>{{trans('subscription.language_fluency')}}*</label>
                          <div class="ui fluid multiple search selection dropdown" id="lang">
                            <input name="language"  tabindex="-1" class="unfocusable-element" type="hidden">
                            <div class="default text">{{trans('subscription.language_fluency')}}</div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="field column">
                        <label>{{trans('subscription.office_starting_date')}}*</label>
                            <input name="starting_date" class="<?php echo($lang=='en')?'':'date_dr'; ?>" type="<?php echo($lang=='en')?'date':'text'; ?>" >
                        </div>
                      </div>

                      <div class="row" style="">
                        <div class="field column">
                        <label>{{trans('subscription.descipline')}}*</label>
                          <div class="ui fluid multiple search selection dropdown" id="descipline">
                            <input name="descipline"  tabindex="-1" class="unfocusable-element" type="hidden">
                            <div class="default text">{{trans('subscription.descipline')}}</div>
                          </div>
                        </div>
                      </div>

                      <div class="row" style="">
                        <div class="field column">
                        <label>{{trans('subscription.specialization')}}*</label>
                          <div class="ui fluid multiple search selection dropdown" id="specialization">
                            <input name="specialization"  tabindex="-1" class="unfocusable-element" type="hidden">
                            <div class="default text">{{trans('subscription.specialization')}}</div>
                          </div>
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

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    {{-- left sidebar president word and social boxes end --}}

@include('include.footer')
 <script>
      // $('input').on('keydown', function(e) {
      //     if (e.keyCode == 9) {
      //       $(this).focus();
      //       e.preventDefault();
      //     }
      //   });

      // $(document).ready(function() {
      //   $(window).keydown(function(event){
          
      //     if(event.keyCode == 13) {
      //       event.preventDefault();
      //       return false;
      //     }
      //   });
      // });

      $('#type').change(function(){
        if($("#type").val()=='other'){
          $('#type_text_id').css('display','block');
        }
        else{
         $('#type_text_id').css('display','none');
        }
      });


    </script>
