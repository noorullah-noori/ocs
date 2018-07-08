<?php

  Breadcrumbs::register('the_president', function($breadcrumbs) {
    $breadcrumbs->push(trans('menu.the_president'));
  });

  Breadcrumbs::register('decree_details', function($breadcrumbs) {
    $breadcrumbs->parent('the_president');
    $breadcrumbs->push(trans('menu.decrees'));
  });

  Breadcrumbs::register('order_details', function($breadcrumbs) {
    $breadcrumbs->parent('the_president');
    $breadcrumbs->push(trans('menu.orders'),route('orders'));
  });

  Breadcrumbs::register('statement_details', function($breadcrumbs) {
    $breadcrumbs->parent('the_president');
    $breadcrumbs->push(trans('menu.statements'),route('statements'));
  });

  Breadcrumbs::register('message_details', function($breadcrumbs) {
    $breadcrumbs->parent('the_president');
    $breadcrumbs->push(trans('menu.messages'),route('messages'));
  });

  Breadcrumbs::register('domestic_details', function($breadcrumbs) {
    $breadcrumbs->parent('the_president');
    $breadcrumbs->push(trans('menu.domestic_trips'),route('domestic_trips'));
  });

  Breadcrumbs::register('international_details', function($breadcrumbs) {
    $breadcrumbs->parent('the_president');
    $breadcrumbs->push(trans('menu.international_trips'),route('international_trips'));
  });  
  


  //media
  Breadcrumbs::register('media', function($breadcrumbs) {
    $breadcrumbs->push(trans('menu.media'));
  });

  Breadcrumbs::register('news_details', function($breadcrumbs) {
    $breadcrumbs->parent('media');
    $breadcrumbs->push(trans('menu.news'),route('news'));
  });

  Breadcrumbs::register('article_details', function($breadcrumbs) {
    $breadcrumbs->parent('media');
    $breadcrumbs->push(trans('menu.articles'),route('articles'));
  });

  Breadcrumbs::register('report_details', function($breadcrumbs) {
    $breadcrumbs->parent('media');
    $breadcrumbs->push(trans('menu.reports'));
  });

  Breadcrumbs::register('infographic_details', function($breadcrumbs) {
    $breadcrumbs->parent('media');
    $breadcrumbs->push(trans('menu.infographics'),route('infographics'));
  });

  Breadcrumbs::register('album_images', function($breadcrumbs) {
    $breadcrumbs->parent('media');
    $breadcrumbs->push(trans('menu.photo_albums'),route('album_images'));
  });

  Breadcrumbs::register('video_details', function($breadcrumbs) {
    $breadcrumbs->parent('media');
    $breadcrumbs->push(trans('menu.videos'),route('video_details'));
  });

  
  Breadcrumbs::register('link_details', function($breadcrumbs) {
    $breadcrumbs->parent('media');
    $breadcrumbs->push(trans('menu.links'),route('link_details'));
  });


  
  // Breadcrumbs::register('about', function($breadcrumbs) {
  //   $breadcrumbs->push(trans('menu.about'));
  // });

  // Breadcrumbs::register('contact', function($breadcrumbs) {
  //   $breadcrumbs->push(trans('menu.contact'));
  // });
 ?>