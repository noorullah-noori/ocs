<!-- //calendar -->
  <style>
  body *{
    direction:<?php echo e($ltr); ?>;
    text-align:<?php echo e($dir); ?>;
    text-transform: none;
  }

  body a:hover {
    color:rgb(97, 92, 150);
  }
/*  img{
    max-width: 100%;
  }*/

  @font-face {
    font-family: 'aop_font';
    src:url("<?php echo e(asset('assets/fonts/aop_font.ttf')); ?>");
  }
  @font-face {
    font-family: 'pashto nazo';
    src:url("<?php echo e(asset('assets/fonts/pashto_nazo.ttf')); ?>");
  }
  ul li {
    direction: <?php echo e($rtl); ?> !important;
    margin-<?php echo e($dir); ?>:15px !important;
    font-family: <?php echo e(($lang=='en')?'':'aop_font'); ?> !important;
	line-height: 1.4em !important;
    font-size: 1.12em;
	color:black;
  }

  #top_bar {
    background-image: url("<?php echo e(asset('assets/img/banner.png')); ?>");
    /*height: fit-content;
    max-height: 95px !important;*/
    max-height:109px !important;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    left: 0;
    right: 0;
    padding-top: 22px;
    height:90px;
  }
  .social_buttons {
    position: absolute;
    <?php echo e($indir); ?>: 0;
    bottom: 20%;
  }
  #menu_bar {
    /*padding:0 14px;*/
    /*padding: 18px 14px;*/
    background-color:#5f5e9a;
    /*padding:6px;*/
    /*margin-bottom:14px;*/
  }
  #menu_bar .item {
    font-size: 1.1em;
    font-weight: bold;
    text-align:<?php echo e($dir); ?>;
    line-height: 1em !important;
    /*color:white !important;*/
  }
  blockquote {
    border:0;
    border-<?php echo e($dir); ?>: 4px solid #5f5e9a;
    padding-<?php echo e($dir); ?>: 1em;
    margin-right:0;
    margin-<?php echo e($dir); ?>:20px;
  }
  .test {
    border-bottom: 2.4px solid #5f5e9a;
    font-size: 1.2em;
    line-height: 1.5em;
    text-transform: none;
  }
  .title_font,h1,h2,h3,h4,h5,h6 {
    <?php if($lang=='pa' || $lang=='dr'): ?>
      font-family: aop_font !important;
      font-size:1.3em !important;
    <?php endif; ?>
    font-weight: bold !important;

    text-align:<?php echo e($dir); ?>;
    direction:<?php echo e($rtl); ?>;
    line-height: 1.2em !important;
  }
  .slider-nav {
    bottom:0;
    width:auto !important;
  }
  .slider-nav__item {
    background:#999;
  }
  .slider-nav__item--current {
    background:#5f5e9a;
  }
  .ui.card {
    border:0 !important;
    box-shadow: none !important;
  }
  .ui.segment{
    border-radius:0 !important;
    box-shadow:none !important;
    border:0 !important;
    border-bottom:1px solid #ddd !important;
    margin-bottom:0;
    margin:0;
  }
  .latest_articles {
    border-bottom:1px dashed #ddd;
    padding-bottom:25px;
    padding-top:5px;
  }
  .body_font,p,a,span,label {
    font-family:<?php echo e(($lang=='en')?'':'aop_font'); ?> !important;
    text-align: <?php echo e($dir); ?>;
    direction:<?php echo e($rtl); ?>;
    color:black;
    line-height: 1.4em !important;
    font-size: 1.12em;
  }
  span {
    color : #666 !important;
  }
  .description ul {
    padding-<?php echo e($dir); ?>:15px !important;
  }
  .description ol {
    padding-<?php echo e($dir); ?>:20px !important;
  }
  .social_boxes {
    border:0 !important;
    border-radius:0 !important;
    height:150px;
  }
  .ui.horizontal.celled.list .list>.item, .ui.horizontal.celled.list>.item {
    border-left:1px solid #fff;
  }
  #test {
    display:none;
    background-color:#5f5e9a;
    border:0;
    border-radius: 0;
    height:fit-content;
  }
  #footer_social_buttons {
    position:absolute;
    <?php echo e($dir); ?>:0;
    bottom:20%;
  }
  #mobile_only {
    display:none;
  }
  #language {
    display:none;
  }
  .ui.secondary.menu .dropdown.item>.menu, .ui.text.menu .dropdown.item>.menu {
    border-radius: 0;
  }
  #social_segment,#social_segment .ui.grid .ui.fluid.card {
    /*background-color:#f7f7f7;*/
  }
  .ui.menu .ui.dropdown.item .menu .item:not(.filtered) {
    border-bottom:1px solid #ddd;
  }
  #mobile_menu{
    display:none;
    background-color: #5f5e9a;
    padding:0;
  }
  .accordion {
    margin-top: 0 !important;
  }
  #mobile_menu .title {
    padding:10px;
  }
  .accordion .menu, .accordion .item {
    background-color: #7d7cb9 !important;
    border:0 !important;
    border-radius: 0 !important;
    box-shadow: none !important;
  }
  .docs {
    padding-top:7px !important;
  }
  @media  screen and (max-width:990px) {
    #mobile_menu {
      display:block;
      position: fixed;
      left: 0;
      right: 0;
      z-index: 2;
      border: 0 !important;
    }
    #pdf_img{
      /* max-width: 35% !important; */
    }
    #documents .ui.tiny.image.icon {
      width: 60px !important;
      margin-<?php echo e($indir); ?>:5px;
    }
    #logo_img {
      width: 65%;
      margin-right:10px;
    }
    #main {
      padding-top:60px;
    }
    #main>.five.wide {
      order: 2;
    }
    #main.seven.wide {
      order: 1;
    }
    #top_bar {
      display: none;
    }
    #footer_social_buttons {
      margin-left:47%;
      right:auto;
    }
    #footer_social_first_button {
      margin-left: -55%;
    }
    #menu_bar {
      display:none;
    }
    .ui.fixed.menu {
      display: none !important;
    }
    #main{
      display: flex;
    }
    #main .sixteen.wide.tablet.mobile.four.wide.computer.column{
      order: 2;
    }
    #main .sixteen.wide.tablet.mobile.tweleve.wide.computer.column{
      order: 1;
    }
    #main_div{
      display: flex;
    }
    #main_div #latest_news{
      order: 1;
       padding-top: 0px !important;
    }

    #main_div #president_word{
      order: 3;
    }
    #main_div #articles{
      order: 2;
      padding-top: 0px !important;
    }
    #second_div{
      display: flex;
    }
    #second_div #social_div{
      order: 3;
    }
    #second_div #documents{
      order: 2;
    }
    #second_div #videos{
      order: 1;
    }
    .owl-carousel {
      margin-top:60px;
    }
    /*#carousel_image_div img {
      width:100% !important;
      margin:0 !important;
    }*/
    blockquote {
      margin-left:0;
      position: relative !important;
      margin-right:0 !important;
    }
    .news,.article>.ui.grid {
      display: flex;
      display:flex;
      margin:0 !important;
      padding-top:10px !important;
    }
    #news_title,#article_title {
      order:2;
      padding:3px 0 !important;
    }
    #news_image {
      padding: 2px 0 !important;
      order:1;
    }
    .desc {
      order:3;
    }
    #articles>.ui.fluid.card,#articles>.ui.fluid.card>.content,#president_word,#president_word>.ui.fluid.card,#president_word>.ui.fluid.card>.content {
      padding-top:0 !important;
      padding-bottom: 0 !important;
      margin-top: 0 !important;
    }
    .ui.segment {
      border-bottom:0 !important;
    }
    /* #documents img {
      display: block;
      margin:auto;
    } */
    /* #documents a, #documents .meta {
      text-align: center;
    } */
    .ui.three.column.container.stackable.grid a {
      text-align: center;
      display: block;
    }
    #footer_parent {
      display: flex;
    }
    #footer_news {
      order:1;
    }
    #footer_articles {
      order:2;
    }
    #footer_three_menus {
      order:3;
    }
    #menus {
      display: flex;
    }
    #footer_president {
      order:1;
    }
    #footer_media {
      order:2;
    }
    #footer_about {
      order:3;
    }
    #footer_media, #footer_president {
      width:50% !important;
    }
    #latest_news,#latest_news>.ui.fluid.card,#articles,#articles>.ui.fluid.card,#president_word,#president_word>.ui.fluid.card,#videos,#videos>.ui.fluid.card,#documents,#documents>.ui.fluid.card,#social_div,#social_div>.ui.fluid.card {
      padding:0 !important;
    }
    #latest_news .content,#articles .content,#president_word .content,#videos .content ,#documents .content ,#social_div .content {
      padding-right: 2px !important;
    }
    .ui.items:not(.unstackable)>.item {
      margin:11px 0 !important;
    }


  }
  @media  only screen and (max-width: 1000px) and (min-width: 510px){
      #logo_img{
          width: 40% !important;
          padding-<?php echo e($indir); ?> : 15px !important;
          padding-top: 8px;
      }
  }
  @media  screen and (max-width:450px) {
    #logo_img{
      padding-top: 12px;
      padding-<?php echo e($dir); ?> : 5px !important;
    }
    .fb{
      padding-<?php echo e($dir); ?>:0px !important;
    }
    #footer_social_first_button {
      margin-left: -8.5em !important;
    }
    .ui.fixed.menu {
      display: none !important;
    }
    .carousel_image_div img {
      height: 50% !important;
    }
    #old_ocs_link {
      text-align:center !important;
    }
    .ui.items>.item>.thumb_img img {
      min-width: 100%; 
      width: 100%;
    }
  }
  @media  screen and (min-width: 1023px) and (max-width:1440px) {
    .carousel_thumbnail {
      height:53vh !important;
    }
  }
  .ui.fixed.menu {
    display: none;
  }
  .languageSwitcher {
    text-align: center;
  }
  hr {
    border-color: #ddd;
    border-width: .5px;
  }
  .ui.fluid.card .content{
    padding-<?php echo e($dir); ?>:5px !important;
  }
  .ui.fluid.card {
    border:1px solid #ddd !important;
    border-radius:0 !important;
    margin-top:15px;
    padding:14px !important;
  }
  .no_border {
    border:0 !important;
  }
  .main_menu_dropdown {
    <?php echo e($dir); ?>:0 !important;
    <?php echo e($indir); ?>:auto !important;
    width:280px;
  }
  .main_menu_dropdown .item {
    color:black !important;
  }
  .ui.three.column.container.stackable.grid * {
      color:white;
  }
  .second_level_dropdown {
    <?php echo e($dir); ?>:103% !important;
    top:-1 !important;
  }
  .second_level_dropdown .item{
    width: 100%;
  }
  .ui.items>.item>.image {
    padding-top:5px !important;
  }
  /*home thumbnail image center and crop style starts*/
  .thumbnail {
    position: relative;
    width: 130px;
    height: 90px;
    overflow: hidden;
  }
  .thumbnail img {
    position: absolute;
    left: 50%;
    top: 50%;
    height: 100%;
    width: auto;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
  }
  .thumbnail img.portrait {
    width: 100%;
    height: auto;
  }
  /*home thumbnail image center and crop style ends*/

  /*thumbnail image center and crop style starts*/
  .other_pages_thumbnail {
    position: relative;
    width: 130px;
    height: 90px;
    overflow: hidden;
    top:3px;
  }
  .other_pages_thumbnail img {
    position: absolute;
    left: 50%;
    top: 50%;
    height: 100%;
    width: auto;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
  }
  .other_pages_thumbnail img.portrait {
    width: 100%;
    height: auto;
  }
  /*thumbnail image center and crop style ends*/
  .ui.items>.item>.content>.header {
    margin-top:0;
  }
  .ui.items>.item>.content {
    width:95%;
    padding-<?php echo e($dir); ?>:10px !important;
  }
  .short_desc {
    direction: <?php echo e($rtl); ?>;
    text-align:<?php echo e($dir); ?>;

  }
  .carousel_image_div {
    position: relative;
    width: 100px;
    height: 25em;
    overflow: hidden;
  }
  .carousel_image_div img {
    position: absolute;
    left: 50%;
    top: 50%;
    height: 100%;
    width: auto;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
  }
  .ui.card>.content>.header:not(.ui), .ui.cards>.card>.content>.header:not(.ui) {
    font-size:1.5em;
  }
  .no_borders {
    border:0 !important;
  }
  h4.ui.header {
    font-size:1.07em !important;
    color:black !important;
  }
  h3.ui.header {
    color:black !important;
    font-size:1.13em !important;
  }
  .ui[class*="right floated"].header {
    color: black !important;
  }
  .ui.card>.content>.header:not(.ui), .ui.cards>.card>.content>.header:not(.ui) {
    font-size: 1.5em !important;
  }
  .ui.three.column.container.stackable.grid * {
    color:black;
  }

  #en,#dr,#pa {
    font-family: aop_font !important;
    padding:13px 12px !important;
  }
  #en {
    padding-<?php echo e($indir); ?>:16px !important;
  }
  input {
    border-radius:0 !important;
    box-shadow: none;
    border:0;
  }
  #mobile_top_bar {
    padding-top: 20px !important;
    width: 50px;
  }
  #mobile_top_bar img {
    position: absolute;
    top:0;
    <?php echo e($dir); ?>:0;
    height: 60px;
  }
  .ui.inverted.accordion {
    direction:<?php echo e($ltr); ?>;
  }
  .search {
    position: absolute;
    <?php echo e($indir); ?>: 0px;
    top: 9px;
  }
  input {
    text-align: <?php echo e($dir); ?> !important;
  }
  .ui.small.top.fixed.inverted.menu .logo {
    position: relative;
    height: 50px;
    width: 25em;
    background-color:
  }
  .ui.small.top.fixed.inverted.menu img {
    position: absolute;
    left: 50%;
    top: 50%;
    height: 100%;
    width: auto;
    -webkit-transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
  }
  .ui.small.top.fixed.menu .item {
    font-size:1.09em;
  }
  .ui.small.top.fixed.menu {
    background-color:#625d97;
    box-shadow: -1px 2px 20px 0px #625d97;
  }
  .ui.small.top.fixed.menu #dr,#fixed_home {
    <?php echo e(($lang=='en')?'border-left:.5px solid #716a9c;':''); ?>

  }

  .ui.small.top.fixed.menu #en,#fixed_contact {
    <?php echo e(($lang!='en')?'border-left:.5px solid #716a9c;':''); ?>

  }
  .ui.menu .ui.dropdown.item .menu .item:not(.filtered) {
    text-align: <?php echo e($dir); ?>;
  }
  #mobile_menu .search {
    position: absolute;
    <?php echo e($indir); ?>: 21px;
    top:15px;
    color: white;
    font-size: 20px !important;
  }
  #mobile_menu .language {
    position: absolute;
    <?php echo e($indir); ?>: 67px;
    top:21px;
    color: white;
    font-size: 20px !important;
    padding-<?php echo e($indir); ?>:5px;
  }
  .ui.centered.container.grid {
    padding:0 1.8em;
  }
  .ui.header.title_font.border{
    border-bottom: 2.4px solid #5f5e9a;padding-bottom: 2px;
  }
  .sixteen.wide.tablet.mobile.twelve.wide.computer.column .ui.items{
    margin-top: 2px !important;
  }
  .ui.active.button {
    float: left;
    border-radius: 0;
  }
  .lb-closeContainer {
    display: none;
  }
  .lb-data {
    padding:0 !important;
  }
  .lb-data .lb-details {
    width: 100% !important;
  }
  .lb-details {
    display: inline-block;
    line-height: 1;
    vertical-align: baseline;
    background-color: #e8e8e8;
    background-image: none;
    padding: .5833em .833em;
    color: rgba(0,0,0,.6);
    text-transform: none;
    font-weight: 700;
    border: 0 solid transparent;
    border-radius: .28571429rem;
  }
  .lb-number {
    float: right;
  }
  <?php if($lang!='en'): ?>
    #carousel_div {
      display: flex;

    }
    #carousel_image_div {
      order:1;
    }
    #carousel_text_div {
      order:2;
    }
  <?php endif; ?>
  .owl-dots {
    display: flex;
    justify-content: center;
  }
  .owl-carousel .owl-dot, .owl-carousel .owl-nav .owl-next, .owl-carousel .owl-nav .owl-prev {
    background: none repeat scroll 0 0 #869791;
    border-radius: 20px;
    display: inline-flex;
    height: 12px;
    margin: 5px 7px;
    opacity: 0.5;
    width: 12px;
  }
  .owl-dot.active {
    background-color: #0800ff;
  }

  #carousel_image_div img {
    width:100%;
    height: auto;
    padding-bottom:5%;
    float: <?php echo e($indir); ?>;
    margin-<?php echo e($dir); ?>: 55px;
  }
  @media (min-width:990px) {
    .carousel_thumbnail {
      position: relative;
      width: auto;
      height: 280px;
      overflow: hidden;
      top: 3px;
    }
    #carousel_image_div {
    <?php echo e(($lang=='en')?'padding-right:35px !important;':''); ?>

    height: 280px;
    width: 661px;
    <?php echo e(($lang!='en')?"left:25px;":"right:6px;"); ?>

  }

    .carousel_thumbnail img {
      position: absolute;
      left: 48%;
      top: 50%;
      height: 100%;
      width: 100%;
      -webkit-transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
      transform: translate(-50%,-50%);
    }
    #carousel_div #carousel_text_div {
      /*position: absolute;
      bottom: 0;
      <?php echo e($dir); ?>: 0;*/
      display: block;
      margin:auto;
      /*padding-bottom: 2.8em;*/
    }
    #article_title {
      padding-top:0;
    }
    #news_title {
      padding-bottom:0;
    }

  }

  #arg {
    padding-top:0;
    <?php echo e(($lang=='en')?'padding-right:0;':''); ?>

  }
  #logo {
    padding-top:0;
  }
  #social {
    <?php echo e(($lang=='en')?"left:43px;":"right:30px;"); ?>

  }

  #social a,#footer_social_buttons a{
    line-height: 1em !important;
  }
  .meta {
    color:rgba(0,0,0,.6) !important;
    margin-bottom: 1px !important;
    margin-top: 0px !important;

  }
  .description{
    margin-top: 1px !important;
  }
  #carousel_title {
    font-size: 1.89em !important;
  }
  .ui.circular.button>.icon {
    vertical-align: bottom !important;
  }
  .news,.article {
    border-bottom:1px dashed #ddd;
    padding: 0px;
    margin:0 !important;
  }
  .desc {
    padding:4px 0  !important;

  }
  .news>.sixteen.wide.mobile.tablet.eleven.wide.computer.column,.news>.sixteen.wide.mobile.tablet.ten.wide.computer.column {
    padding:0 5px;;
  }
  .ui.items {
    margin: .8em 0 !important;
  }
 .ui.fluid.card>.content img{
    /*max-width: 100%;*/
    }
  }
 .u-floatLeft{
  display: none !important;
 }
 .article_padding {
  padding:5px !important;
 }
 .footer_link{
	 font-size: <?php echo e($lang=='en'?'.8em':'1em'); ?> !important;
  color: #131212 !important;
  margin:5px 0 !important;
 }
 .footer_title{
	 font-size: <?php echo e($lang=='en'?'1.1em':'1.2em'); ?> !important;
 }
 .default.text,.text{
  float: <?php echo e($dir); ?>;
 }


@media  print {
 .printable{
  display: block !important;
  background: white !important;
  padding-bottom: 10px;
  padding-top: 10px;
  page-break-inside: avoid;
}
  .not-printable{
    display: none !important;
  }
  #fixed{
    display: none !important;
  }
}

 body a:hover,body a.title_font:hover,.ui[class*="right floated"].header:hover{
    color:rgb(97, 92, 150) !important;
  }
  .description ol li{
    direction: <?php echo e($rtl); ?> !important;
    text-align: <?php echo e($dir); ?> !important;
    font-family: aop_font !important;
    color: black;
    font-size: 1.12em;
  }
  .ui.breadcrumb {
    text-align: <?php echo e($dir); ?> !important;
  }
  .ui.fluid.card {
    border:1px solid #ddd;
    margin-bottom:10px;
  }
  .ui.items > .item {
    border-bottom: 1px dashed #ddd;
    padding: 10px 0;
    /*padding-top: 10px;*/
    direction:<?php echo e($rtl); ?> !important;
    margin: 0 !important;
  }
  .description img{
    max-width: 100% !important;
  }

  </style>
  <?php echo $__env->yieldPushContent('custom-css'); ?>
</head>
<body style="background-color:#f4f4f4;">
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="top_bar" class="not-printable">
  <div class="ui computer only stackable container grid" style="<?php echo e(($lang!='en')?'padding:0 18px;':''); ?>">
    <div class="ui two column row" style="margin-bottom:0;padding:0 6px;">
      <div class="column" style="padding-left:0;">
        <div class="ui grid">
          <div class="six wide column" id="arg">
            <img class="ui image" style="width:180px;" src="<?php echo e(asset('assets/img/arg.png')); ?>" alt="">
          </div>
          <div class="eight wide column" id="social">
            <div class="social_buttons">
              <a href="<?php echo e(($lang=='en')?'https://www.facebook.com/AFG.OCS':'https://www.facebook.com/ocs.afg'); ?>" target="_blank" class="ui tiny circular inverted basic icon button">
                <i class="icon facebook f"></i>
              </a>
              <a href="https://twitter.com/OCS_AFG" target="_blank" class="ui tiny circular inverted basic icon button">
                <i class="icon twitter"></i>
              </a>
              <a href="https://www.instagram.com/ocs.afg" target="_blank" class="ui tiny circular inverted basic icon button">
                <i class="icon instagram"></i>
              </a>
              <a href="https://www.youtube.com/channel/UCTwc5c4qoQC6uerwvPnUPzA" target="_blank" class="ui tiny circular inverted basic icon button">
                <i class="icon youtube"></i>
              </a>
              <a href="<?php echo e(url($lang.'/feed')); ?>" target="_blank" class="ui tiny circular inverted basic icon button">
                <i class="icon rss"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="column" style="padding-right:0;">
        <div class="ui grid">
          <div class="sixteen wide column" id="logo">
          <a href="<?php echo e(url($lang.'/home')); ?>">
            <img style="float:<?php echo e($dir); ?>;height: 92px;padding-top: 10px;" src="<?php echo e(asset('assets/img/logo_'.$lang.'.png')); ?>" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  
  <div class="ui small top fixed inverted hidden menu not-printable" id="fixed" style="border:0;">
    <div class="ui container not-printable" style="direction:<?php echo e($rtl); ?>;padding-left:27px;padding-right:0px;">
      <a href="<?php echo e(url($lang.'/home')); ?>" class="logo">
        <img src="<?php echo e(asset('assets/img/logo_'.$lang.'.png')); ?>" alt="">
      </a>
      <a href="<?php echo e(url($lang.'/home')); ?>" id="fixed_home" class="item body_font"><?php echo e(trans('menu.home')); ?></a>
      <div class="ui dropdown link item body_font" style="">
        <?php echo e(trans('menu.the_president')); ?>

        <div class="ui menu inverted main_menu_dropdown">
          <a href="<?php echo e(url($lang.'/decrees')); ?>" class="item body_font"><?php echo e(trans('menu.decrees')); ?></a>
          <a href="<?php echo e(url($lang.'/orders')); ?>" class="item body_font"><?php echo e(trans('menu.orders')); ?></a>
          <a href="<?php echo e(url($lang.'/statements')); ?>" class="item body_font"><?php echo e(trans('menu.statements')); ?></a>
          <a href="<?php echo e(url($lang.'/messages')); ?>" class="item body_font"><?php echo e(trans('menu.messages')); ?></a>
          <a href="<?php echo e(url($lang.'/words')); ?>" class="item body_font"><?php echo e(trans('menu.words')); ?></a>
           <div class="item body_font " >
              <?php echo e(trans('menu.trips')); ?>

              <div class="menu second_level_dropdown <?php echo e($indir); ?>" style="border-radius: 0 !important;">
                <a href="<?php echo e(url($lang.'/international_trips')); ?>" class="item">
                  <?php echo e(trans('menu.international_trips')); ?>

                </a>
                <a href="<?php echo e(url($lang.'/domestic_trips')); ?>" class="item">
                  <?php echo e(trans('menu.domestic_trips')); ?>

                </a>
              </div>

            </div>
          <a href="<?php echo e(url($lang.'/biography')); ?>" class="item body_font"><?php echo e(trans('menu.biography')); ?></a>
        </div>
      </div>
      <div class="ui dropdown link item body_font">
        <?php echo e(trans('menu.media')); ?>

        <div class="ui menu inverted  main_menu_dropdown">
          <a href="<?php echo e(url($lang.'/news')); ?>" class="item body_font"><?php echo e(trans('menu.news')); ?></a>
          <a href="<?php echo e(url($lang.'/reports')); ?>" class="item body_font"><?php echo e(trans('menu.reports')); ?></a>
          <a href="<?php echo e(url($lang.'/articles')); ?>" class="item body_font"><?php echo e(trans('menu.articles')); ?></a>
          <a href="<?php echo e(url($lang.'/infographics')); ?>" class="item body_font"><?php echo e(trans('menu.infographics')); ?></a>
          <a href="<?php echo e(url($lang.'/photo_albums')); ?>" class="item body_font"><?php echo e(trans('menu.photo_albums')); ?></a>
          <a href="<?php echo e(url($lang.'/videos')); ?>" class="item body_font"><?php echo e(trans('menu.videos')); ?></a>
          <a href="<?php echo e(url($lang.'/documents')); ?>" class="item body_font"><?php echo e(trans('menu.reports_and_documents')); ?></a>
          <a href="<?php echo e(url($lang.'/links')); ?>" class="item body_font"><?php echo e(trans('menu.links')); ?></a>
        </div>
      </div>
      <div class="ui dropdown link item body_font">
        <?php echo e(trans('menu.about_us')); ?>

        <div class="ui menu inverted main_menu_dropdown" style="left:auto !important;">
          <a href="<?php echo e(url($lang.'/ocs')); ?>" class="item body_font"><?php echo e(trans('menu.ocs')); ?></a>
          <a href="<?php echo e(url($lang.'/chief_of_staff')); ?>" class="item body_font"><?php echo e(trans('menu.chief_of_staff')); ?></a>
          
          <a href="<?php echo e(url($lang.'/presidential_palace')); ?>" class="item body_font"><?php echo e(trans('menu.presidential_palace')); ?></a>
        </div>
      </div>
      <div class="ui dropdown link item body_font" id="fixed_contact">
        <?php echo e(trans('menu.contact_us')); ?>

        <div class="ui menu inverted main_menu_dropdown">
          <a href="<?php echo e(url($lang.'/register_complaint')); ?>" class="item body_font"><?php echo e(trans('menu.complaint_regestration')); ?></a>
          <a href="<?php echo e(url($lang.'/media_directorate')); ?>" class="item body_font"><?php echo e(trans('menu.media_directorate')); ?></a>
           <div class="item body_font " >
              <?php echo e(trans('menu.subscription')); ?>

              <div class="menu second_level_dropdown" style="border-radius: 0 !important;">
                <a href="<?php echo e(url($lang.'/media_form')); ?>" class="item">
                  <?php echo e(trans('menu.media_form')); ?>

                </a>
                <a href="<?php echo e(url($lang.'/journalist_form')); ?>" class="item">
                  <?php echo e(trans('menu.journalist_form')); ?>

                </a>
                <a href="<?php echo e(url($lang.'/expert_form')); ?>" class="item">
                  <?php echo e(trans('menu.expert_form')); ?>

                </a>
              </div>
            </div>
        </div>
      </div>
      <a class="languageSwitcher <?php echo e($indir); ?> item body_font" href="javascript:void(0)" style="" id="pa">پښتو</a>
      <a class="languageSwitcher item body_font" style="" href="javascript:void(0)" id="dr">دری</a>
      <a class="languageSwitcher item body_font" id="en" href="javascript:void(0)" style="">English</a>
    </div>
  </div>
  


  
    <div id="menu_bar" style="" class="not-printable">
      <div id="" class="ui pointing secondary inverted container menu" style="border:0;direction:<?php echo e($rtl); ?>;padding-<?php echo e($indir); ?>:12px;">
        <a href="<?php echo e(url($lang.'/home')); ?>" class="item body_font"><?php echo e(trans('menu.home')); ?></a>
        <div class="ui dropdown link item body_font" style="">
          <?php echo e(trans('menu.the_president')); ?>

          <div class="ui menu inverted main_menu_dropdown">
            <a href="<?php echo e(url($lang.'/decrees')); ?>" class="item body_font"><?php echo e(trans('menu.decrees')); ?></a>
            <a href="<?php echo e(url($lang.'/orders')); ?>" class="item body_font"><?php echo e(trans('menu.orders')); ?></a>
            <a href="<?php echo e(url($lang.'/statements')); ?>" class="item body_font"><?php echo e(trans('menu.statements')); ?></a>
            <a href="<?php echo e(url($lang.'/messages')); ?>" class="item body_font"><?php echo e(trans('menu.messages')); ?></a>
            <a href="<?php echo e(url($lang.'/words')); ?>" class="item body_font"><?php echo e(trans('menu.words')); ?></a>
            <div class="item body_font " >
              <?php echo e(trans('menu.trips')); ?>

              <div class="menu second_level_dropdown <?php echo e($indir); ?>" style="border-radius: 0 !important;">
                <a href="<?php echo e(url($lang.'/international_trips')); ?>" class="item">
                  <?php echo e(trans('menu.international_trips')); ?>

                </a>
                <a href="<?php echo e(url($lang.'/domestic_trips')); ?>" class="item">
                  <?php echo e(trans('menu.domestic_trips')); ?>

                </a>
              </div>

            </div>
            <a href="<?php echo e(url($lang.'/biography')); ?>" class="item body_font"><?php echo e(trans('menu.biography')); ?></a>
          </div>
        </div>
        <div class="ui dropdown link item body_font">
          <?php echo e(trans('menu.media')); ?>

          <div class="ui menu inverted main_menu_dropdown">
            <a href="<?php echo e(url($lang.'/news')); ?>" class="item body_font"><?php echo e(trans('menu.news')); ?></a>
            <a href="<?php echo e(url($lang.'/reports')); ?>" class="item body_font"><?php echo e(trans('menu.reports')); ?></a>
            <a href="<?php echo e(url($lang.'/articles')); ?>" class="item body_font"><?php echo e(trans('menu.articles')); ?></a>
            <a href="<?php echo e(url($lang.'/infographics')); ?>" class="item body_font"><?php echo e(trans('menu.infographics')); ?></a>
            <a href="<?php echo e(url($lang.'/photo_albums')); ?>" class="item body_font"><?php echo e(trans('menu.photo_albums')); ?></a>
            <a href="<?php echo e(url($lang.'/videos')); ?>" class="item body_font"><?php echo e(trans('menu.videos')); ?></a>
            <a href="<?php echo e(url($lang.'/documents')); ?>" class="item body_font"><?php echo e(trans('menu.reports_and_documents')); ?></a>
            <a href="<?php echo e(url($lang.'/links')); ?>" class="item body_font"><?php echo e(trans('menu.links')); ?></a>
          </div>
        </div>
        <div class="ui dropdown link item body_font">
          <?php echo e(trans('menu.about_us')); ?>

          <div class="ui menu inverted main_menu_dropdown" style="left:auto !important;">
            <a href="<?php echo e(url($lang.'/ocs')); ?>" class="item body_font"><?php echo e(trans('menu.ocs')); ?></a>
            <a href="<?php echo e(url($lang.'/chief_of_staff')); ?>" class="item body_font"><?php echo e(trans('menu.chief_of_staff')); ?></a>
            
            <a href="<?php echo e(url($lang.'/presidential_palace')); ?>" class="item body_font"><?php echo e(trans('menu.presidential_palace')); ?></a>
          </div>
        </div>
        <div class="ui dropdown link item body_font">
          <?php echo e(trans('menu.contact_us')); ?>

          <div class="ui menu inverted main_menu_dropdown">
            <a href="<?php echo e(url($lang.'/register_complaint')); ?>" class="item body_font"><?php echo e(trans('menu.complaint_regestration')); ?></a>
            <a href="<?php echo e(url($lang.'/media_directorate')); ?>" class="item body_font"><?php echo e(trans('menu.media_directorate')); ?></a>
            <div class="item body_font " >
              <?php echo e(trans('menu.subscription')); ?>

              <div class="menu second_level_dropdown <?php echo e($indir); ?>" style="border-radius: 0 !important;">
                <a href="<?php echo e(url($lang.'/media_form')); ?>" class="item">
                  <?php echo e(trans('menu.media_form')); ?>

                </a>
                <a href="<?php echo e(url($lang.'/journalist_form')); ?>" class="item">
                  <?php echo e(trans('menu.journalist_form')); ?>

                </a>
                <a href="<?php echo e(url($lang.'/expert_form')); ?>" class="item">
                  <?php echo e(trans('menu.expert_form')); ?>

                </a>
              </div>
            </div>
          </div>
        </div>
        <a class="item" id="search">
          <i class="icon search" style="position:relative;top:1px;left:0;  "></i>
        </a>
        <a id="pa" class="languageSwitcher <?php echo e($indir); ?> item" style="" href="javascript:void(0)">پښتو</a>
        <a id="dr" class="languageSwitcher item" style="" href="javascript:void(0)">دری</a>
        <a id="en" class="languageSwitcher item" style="" href="javascript:void(0)">English</a>

        <a class="item" id="language">
          <i class="icon globe"></i>
        </a>
        <a class="right item" id="mobile_only">
          <i class="icon sidebar"></i>
        </a>
      </div>
    </div>
  
  
  <div class="ui grid not-printable" id="search_box" style="padding-bottom:0px;display:none;">
    <div class="column" style="background-color:#2c2b4a;padding:5px 14px !important;margin-top:14px;">
      <div class="ui container" style="width:57%;padding-left:10px;">
        <form class="ui form" action="<?php echo e(url($lang.'/search_result')); ?>" method="GET" name="search_form">
          <div class="field" style="display: inline;float: <?php echo e($dir); ?>;width: 76%">
            <div class="ui icon input">
              <input class="prompt body_font" style="direction:ltr;" name="search" id="search_text" type="text" placeholder="<?php echo e(trans('home.search')); ?>">
              <i class="search icon"></i>
            </div>
          </div>
          <a class="ui active button" href="<?php echo e(url($lang.'/advance_search')); ?>" target="_blank" style="float:<?php echo e($dir); ?>">
                <?php echo e(trans('menu.advanced_search')); ?>

              </a>
        </form>
      </div>
    </div>
  </div>
  




  
  <div class="ui inverted segment not-printable" id="mobile_menu">
    <div class="ui inverted accordion" style="text-align:<?php echo e($dir); ?>;">
      <img src="<?php echo e(asset('assets/img/logo_'.$lang.'.png')); ?>" alt="" style="" id="logo_img">
      <a href="#" class="search" id="mobile_search">
        <i class="icon search" style="font-size:2em;top:0;"></i>
      </a>

      <div class="language" id="mobile_lang">
        <div class="ui floating dropdown icon" id="lang-menu" style="border-radius:0" tabindex="0">
          <i class="icon globe"></i>
          <div class="menu" id="language" tabindex="-1">
              <a href="javascript:void(0)" class="item body_font languageSwitcher" href="javascript:void(0)" style="text-align:right;font-family:pashto_nazo;" id="pa">پښتو</a>
              <a href="javascript:void(0)" class="item body_font languageSwitcher" id="dr" href="javascript:void(0)" style="text-align:right;font-family:b_mitra;">دری</a>
              <a href="javascript:void(0)" class="item body_font languageSwitcher" id="en" href="javascript:void(0)" style="">English</a>
          </div>
        </div>
      </div>
      <div class="title" id="mobile_top_bar" style="position: absolute;top: 1px;">
        <i style="font-size:1.5em;" class="sidebar icon"></i>
      </div>
      <div class="content" style="padding-top: 0px">
        <div class="ui fluid vertical menu inverted ">
          <a href="<?php echo e(url($lang.'/home')); ?>" class="item body_font"><?php echo e(trans('menu.home')); ?></a>
          <div class="item">
            <div class="accordion">
              <div class="title body_font" style="padding:0;">
                <?php echo e(trans('menu.the_president')); ?>

                <i class="caret down icon" style="float:<?php echo e($indir); ?>;"></i>
              </div>
              <div class="content" id="mobile_menu_accordion">
                <div class="menu">
                  <a href="<?php echo e(url($lang.'/decrees')); ?>" class="item body_font"><?php echo e(trans('menu.decrees')); ?></a>
                  <a href="<?php echo e(url($lang.'/orders')); ?>" class="item body_font"><?php echo e(trans('menu.orders')); ?></a>
                  <a href="<?php echo e(url($lang.'/statements')); ?>" class="item body_font"><?php echo e(trans('menu.statements')); ?></a>
                  <a href="<?php echo e(url($lang.'/messages')); ?>" class="item body_font"><?php echo e(trans('menu.messages')); ?></a>
                  <a href="<?php echo e(url($lang.'/words')); ?>" class="item body_font"><?php echo e(trans('menu.words')); ?></a>
                  <div class="item">
                    <div class="accordion">
                      <div class="title body_font" style="padding:0;">
                        <?php echo e(trans('menu.trips')); ?>

                        <i class="caret down icon" style="float:<?php echo e($indir); ?>;"></i>
                      </div>
                      <div class="content">
                        <div class="menu">
                           <a href="<?php echo e(url($lang.'/international_trips')); ?>" class="item">
                            <?php echo e(trans('menu.international_trips')); ?>

                          </a>
                          <a href="<?php echo e(url($lang.'/domestic_trips')); ?>" class="item">
                            <?php echo e(trans('menu.domestic_trips')); ?>

                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="<?php echo e(url($lang.'/biography')); ?>" class="item body_font"><?php echo e(trans('menu.biography')); ?></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
              <div class="accordion">
                <div class="title body_font" style="padding:0;">
                  <?php echo e(trans('menu.media')); ?>

                  <i class="caret down icon" style="float:<?php echo e($indir); ?>;"></i>
                </div>
                <div class="content">
                  <div class="menu">
                     <a href="<?php echo e(url($lang.'/news')); ?>" class="item body_font"><?php echo e(trans('menu.news')); ?></a>
                     <a href="<?php echo e(url($lang.'/reports')); ?>" class="item body_font"><?php echo e(trans('menu.reports')); ?></a>
                      <a href="<?php echo e(url($lang.'/articles')); ?>" class="item body_font"><?php echo e(trans('menu.articles')); ?></a>
                      <a href="<?php echo e(url($lang.'/infographics')); ?>" class="item body_font"><?php echo e(trans('menu.infographics')); ?></a>
                      <a href="<?php echo e(url($lang.'/photo_albums')); ?>" class="item body_font"><?php echo e(trans('menu.photo_albums')); ?></a>
                      <a href="<?php echo e(url($lang.'/videos')); ?>" class="item body_font"><?php echo e(trans('menu.videos')); ?></a>
                      <a href="<?php echo e(url($lang.'/documents')); ?>" class="item body_font"><?php echo e(trans('menu.reports_and_documents')); ?></a>
                      <a href="<?php echo e(url($lang.'/links')); ?>" class="item body_font"><?php echo e(trans('menu.links')); ?></a>
                  </div>
                </div>
              </div>
             </div>
             <div class="item">
              <div class="accordion">
                <div class="title body_font" style="padding:0;">
                  <?php echo e(trans('menu.about_us')); ?>

                  <i class="caret down icon" style="float:<?php echo e($indir); ?>;"></i>
                </div>
                <div class="content">
                  <div class="menu">
                      <a href="<?php echo e(url($lang.'/ocs')); ?>" class="item body_font"><?php echo e(trans('menu.ocs')); ?></a>
                      <a href="<?php echo e(url($lang.'/chief_of_staff')); ?>" class="item body_font"><?php echo e(trans('menu.chief_of_staff')); ?></a>
                      
                      <a href="<?php echo e(url($lang.'/presidential_palace')); ?>" class="item body_font"><?php echo e(trans('menu.presidential_palace')); ?></a>
                  </div>
                </div>
              </div>
             </div>
             <div class="item">
              <div class="accordion">
                <div class="title body_font" style="padding:0;">
                  <?php echo e(trans('menu.contact_us')); ?>

                  <i class="caret down icon" style="float:<?php echo e($indir); ?>;"></i>
                </div>
                <div class="content">
                  <div class="menu">
                    <a href="<?php echo e(url($lang.'/register_complaint')); ?>" class="item body_font"><?php echo e(trans('menu.complaint_regestration')); ?></a>
                    <a href="<?php echo e(url($lang.'/media_directorate')); ?>" class="item body_font"><?php echo e(trans('menu.media_directorate')); ?></a>
                    <div class="item">
                      <div class="accordion">
                        <div class="title body_font" style="padding:0;">
                          <?php echo e(trans('menu.subscription')); ?>

                          <i class="caret down icon" style="float:<?php echo e($indir); ?>;"></i>
                        </div>
                        <div class="content">
                          <div class="menu">
                            <a href="<?php echo e(url($lang.'/media_form')); ?>" class="item">
                              <?php echo e(trans('menu.media_form')); ?>

                            </a>
                            <a href="<?php echo e(url($lang.'/journalist_form')); ?>" class="item">
                              <?php echo e(trans('menu.journalist_form')); ?>

                            </a>
                            <a href="<?php echo e(url($lang.'/expert_form')); ?>" class="item">
                              <?php echo e(trans('menu.expert_form')); ?>

                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
              </div>
            </div>
           </div>
        </div>
      </div>
    </div>
   </div>
  

   <div class="ui grid not-printable" id="mobile_search_box" style="background-color:#2c2b4a;padding-bottom:0px;display:none;">
    <div class="column" style="padding:5px 14px !important;margin-top:4px;">
      <div class="ui container" style="width:57%;padding-left:10px;">
        <form class="ui form" action="<?php echo e(url($lang.'/search_result')); ?>" name="search_form">
          <div class="field" style="display: inline;float: <?php echo e($dir); ?>;width: auto">
            <div class="ui icon input">
              <input class="prompt body_font" style="direction:<?php echo e($ltr); ?>;" name="search" id="search_text" type="text" placeholder="<?php echo e(trans('home.search')); ?>">
              <i class="search icon"></i>
            </div>
          </div>
          <a class="ui active button" href="<?php echo e(url($lang.'/advance_search')); ?>" target="_blank" style="margin-left:10px;font-size: 9px">
                <?php echo e(trans('menu.advanced_search')); ?>

              </a>
        </form>
      </div>
    </div>
  </div>
