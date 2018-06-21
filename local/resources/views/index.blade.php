<!DOCTYPE html>
@php
  $lang = Config::get('app.locale');
@endphp
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="{{trans('home.keywords')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta property="og:title" content="{{trans('home.title')}}">
  <meta property="og:image" content="{{asset('asset/img/logo.png')}}">
  <meta property="og:description" content="{{trans('home.description')}}">
  <meta property="og:url" content="{{route('home')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/semantic.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}">
  {{-- favicon dem --}}
<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
{{-- <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" /> --}}
{{-- favicon dem --}}
  <title>Office of Chief Of Staff for the President</title>
  <style>
      @font-face {
        font-family: 'aop_font';
        src:url("{{asset('assets/fonts/aop_font.ttf')}}");
      }
      @font-face {
        font-family: 'pashto nazo';
        src:url("{{asset('assets/fonts/pashto_nazo.ttf')}}");
      }
      body {
        margin:0;
      }
      .container-1 {
        display:flex;
        flex-direction: column;
      }
      .top-bar {
        background:url('{{asset('assets/img/banner.png')}}');
        background-repeat: no-repeat;
        position: relative;
        background-position: center;
        background-size: cover;
      }
      .second-top-bar {
        flex-basis:4%;
        background-color:#999;
        background-color:#3b3984;
      }
      .second-top-bar p {
        text-align: center;
        color:#fff;
        font-size: 17px;
        margin:7px;
      }
      .top-bar-box {
        flex-basis: 100%;
      }
      .top-bar-box img {
        position: relative;
        display: block;
        margin: auto;
      }
     .middle-bar {
        min-height:78vh;
        position: relative;
        background:url('{{($quotes!=null)?asset('uploads/quotes/'.$quotes->image):asset('assets/img/president.jpg')}}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        /*box-shadow: inset 0px -156px 197px -50px rgba(0,0,0,0.75);*/
        box-shadow: inset 0 -120px 56px -48px rgba(0,0,0,0.75);

      }
      .president {
        position: absolute;
        bottom: 0;
        color:white;
        width:100%;
        padding-bottom:10px;.president
      }
      .president * {
        text-align: center;
        /*width: 40%;*/
        display: block;
        margin:auto;
      }
      .bottom-bar {
        height: 10vh;
        background-color:#111;
      }
      @media (max-width:1439px) and (min-width:951px) {
        .middle-bar {
          box-shadow: inset 0 -90px 56px -48px rgba(0,0,0,0.75);
          min-height: 70vh !important;
        }
       /* body{
          overflow: hidden;
          height: 100%;
        }
*/      }
      @media (max-width:950px) and (min-width:768px) {
        .middle-bar {
          min-height:50vh !important;
        }
      }
      @media (max-width:768px) {
        h1.ui.header {
          font-size:1.2em;
        }
      }
      @media (max-width:767px) and (min-width:425px) {
        .middle-bar {
          min-height: 50vh !important;
        }
        h2.ui.header {
          font-size: 18px !important;
        }
      }
      @media (max-width:424px) and (min-width:375px) {
        .middle-bar {
          min-height: 25vh !important;
        }
        h2.ui.header {
          font-size: 16px !important;
        }
        p#js-rotating{
          font-size: .85em !important;
        }
      }
      @media (max-width:374px) {
        .middle-bar {
          min-height: 22vh !important;
        }
        h2.ui.header {
          font-size: 10px !important;
          white-space: nowrap;
        }
        p.ui.small.header {
          font-size:12px !important;
        }
        p#js-rotating{
          font-size: 0.85em !important;
        }
        .top-bar-box img{
          height: 55px;
        }
      }
      .ui.header{
        margin: auto;
      }
      h2,p {
        color:white !important;
      }
      .title_font {
        @if ($lang=='pa')
          font-family:pashto nazo !important;
          font-size:1.3em !important;
        @else
          font-family: aop_font !important;
          font-size:1.3em !important;
        @endif
        font-weight: bold !important;
      }
	   .border-right{
        border-right:5px solid #ddd;
        padding-right: 7px;
        padding-left: 3.5px;
      }
      .body_font {
        font-family:aop_font !important;
      }
      #en {
        font-family: aop_font !important;
        font-size:1.3em !important;
      }
      a {
        color:black;
      }



    </style>
</head>
<body>
  <div class="container-1">
    <div class="top-bar">
      <div class="top-bar-box">
        <img src="{{asset('assets/img/logo_new.png')}}">
      </div>
    </div>
    <div class="second-top-bar">
      <p id="js-rotating" class="body_font">ریاست عمومی دفتر مقام عالی ریاست جمهوری , د جمهوري‌ ریاست د عالي مقام دفتر لوی ریاست, Office of Chief of Staff for the President</p>
    </div>
    <div class="middle-bar">
      <div class="president">
        <h2 class="ui  header body_font" style="direction: {{ ($quotes==null)?'':($language=='ASCII')?'ltr':'rtl' }}">{{ ($quotes==null)?'':$quotes->title}}</h2>
        <p class="ui small header body_font">
          {{ ($quotes==null)?'':(($language=='ASCII')?'Mohammad Ashraf Ghani':'محمد اشرف غنی')}}
        </p>
      </div>
    </div>
  </div>
  <h1 class="ui header" style="text-align:center;padding:15px; ">
    <a href="{{url('en/home')}}" class="title_font languageSwitcher border-right" id="en">English</a>
    <a href="{{url('pa/home')}}" class="title_font languageSwitcher" id="pa">پښتو</a>
    <a href="{{url('dr/home')}}" class="title_font languageSwitcher border-right" id="dr">دری</a>
  </h1>

</body>
</html>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Morphext/2.4.4/morphext.min.js"></script>
<script>
  // violet title switching script starts
  $("#js-rotating").Morphext({
    // The [in] animation type. Refer to Animate.css for a list of available animations.
    animation: "fadeIn",
    // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
    separator: ",",
    // The delay between the changing of each phrase in milliseconds.
    speed: 5000,
    complete: function () {
      // Called after the entrance animation is executed.
    }
  });
  // violet title switching script ends
  //language switcher script starts
  //  $('.languageSwitcher').click(function () {
  //     var locale = $(this).prop('id')
  //     var _token  = $("input[name=_token]").val();

  //     $.ajax({
  //       url:"{{url('language')}}",
  //       type:"get",
  //       data:{locale:locale,_token:_token},
  //       datatype:"json",
  //       success: function(data){

  //         window.location.href = "{{url('home')}}";
  //       },
  //       error: function(data){

  //       },
  //       beforeSend: function(data){

  //       },
  //     });
  // });
  //language switcher script ends

  //president's words omit on small screens
  $(document).ready(function() {
    var width = $(window).width();
    if(width <= 425 && width>=320) {
      $('#president_word').text(function(index,currentText) {
        return currentText.substr(0,150);
      });
    }

  });
</script>
