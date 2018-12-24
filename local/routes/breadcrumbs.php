<?php


  // President menu and its submenus
  Breadcrumbs::register('the_president', function($breadcrumbs) {
    $breadcrumbs->push(trans('menu.the_president'), '#');
  });
    // Decrees and decree details
    Breadcrumbs::register('decrees', function($breadcrumbs) {
      $lang = Config::get('app.locale');

      $breadcrumbs->parent('the_president');
      $breadcrumbs->push(trans('menu.decrees'), url($lang.'/decrees'));
    });

      Breadcrumbs::register('decree_details', function($breadcrumbs, $lang, $id) {
        $title = 'title_'.$lang;
        $decree = App\President::find($id);
        $breadcrumbs->parent('decrees');
        $breadcrumbs->push('', '#');
      });

    // Order and order details
    Breadcrumbs::register('orders', function($breadcrumbs) {
      $lang = Config::get('app.locale');

      $breadcrumbs->parent('the_president');
      $breadcrumbs->push(trans('menu.orders'), url($lang.'/orders'));
    });

      Breadcrumbs::register('order_details', function($breadcrumbs, $lang, $id) {
        $title = 'title_'.$lang;
        $order = App\President::find($id);
        $breadcrumbs->parent('orders');
        $breadcrumbs->push('', '#');
      });
    
      // Statement and Statement details
    Breadcrumbs::register('statements', function($breadcrumbs) {
      $lang = Config::get('app.locale');
      $breadcrumbs->parent('the_president');
      $breadcrumbs->push(trans('menu.statements'), url($lang.'/statements'));
    });

      Breadcrumbs::register('statement_details', function($breadcrumbs, $lang, $id) {
        $title = 'title_'.$lang;
        $order = App\President::find($id);
        $breadcrumbs->parent('statements');
        $breadcrumbs->push('', '#');
      });

    // Messages and Messages details
    Breadcrumbs::register('messages', function($breadcrumbs) {
      $lang = Config::get('app.locale');
      $breadcrumbs->parent('the_president');
      $breadcrumbs->push(trans('menu.messages'), url($lang.'/messages'));
    });

      Breadcrumbs::register('message_details', function($breadcrumbs, $lang, $id) {
        $title = 'title_'.$lang;
        $order = App\President::find($id);
        $breadcrumbs->parent('messages');
        $breadcrumbs->push('', '#');
      });

      // Words and Words details
    Breadcrumbs::register('words', function($breadcrumbs) {
      $lang = Config::get('app.locale');

      $breadcrumbs->parent('the_president');
      $breadcrumbs->push(trans('menu.words'), url($lang.'/words'));
    });
    
    // Trips->international and domestic trips > trips details
    Breadcrumbs::register('trips', function($breadcrumbs) {
      $breadcrumbs->parent('the_president');
      $breadcrumbs->push(trans('menu.trips'), '#');
    });

      Breadcrumbs::register('international_trips', function($breadcrumbs) {
        $lang = Config::get('app.locale');
        $breadcrumbs->parent('trips');
        $breadcrumbs->push(trans('menu.international_trips'), url($lang.'/international_trips'));
      });
      
        Breadcrumbs::register('international_trip_details', function($breadcrumbs, $lang, $id) {
          $title = 'title_'.$lang;
          $trip = App\Trip::find($id);
          $breadcrumbs->parent('international_trips');
          $breadcrumbs->push('', '#');
        });  
      
      Breadcrumbs::register('domestic_trips', function($breadcrumbs) {
        $lang = Config::get('app.locale');
        $breadcrumbs->parent('trips');
        $breadcrumbs->push(trans('menu.domestic_trips'), url($lang.'/domestic_trips'));
      });

        Breadcrumbs::register('domestic_details', function($breadcrumbs, $lang, $id) {
          $title = 'title_'.$lang;
          $trip = App\Trip::find($id);
          $breadcrumbs->parent('domestic_trips');
          $breadcrumbs->push('', '#');
        });
    
    // Biography
    Breadcrumbs::register('biography', function($breadcrumbs) {
      $breadcrumbs->parent('the_president');
      $breadcrumbs->push(trans('menu.biography'));
    });

  // Media menu and its submenus
  Breadcrumbs::register('media', function($breadcrumbs) {
    $breadcrumbs->push(trans('menu.media'));
  });

    Breadcrumbs::register('reports', function($breadcrumbs) {
      $lang = Config::get('app.locale');
      $breadcrumbs->parent('media');
      $breadcrumbs->push(trans('menu.reports'), url($lang.'/reports'));
    });

      Breadcrumbs::register('report_details', function($breadcrumbs, $lang, $id) {
        $title = 'title_'.$lang;
        $trip = App\Media::find($id);
        $breadcrumbs->parent('reports');
        $breadcrumbs->push('', '#');
      });

    Breadcrumbs::register('news', function($breadcrumbs) {
      $lang = Config::get('app.locale');
      $breadcrumbs->parent('media');
      $breadcrumbs->push(trans('menu.news'), url($lang.'/news'));
    });

      Breadcrumbs::register('news_details', function($breadcrumbs, $lang, $id) {
        $title = 'title_'.$lang;
        $trip = App\Media::find($id);
        $breadcrumbs->parent('news');
        $breadcrumbs->push('', '#');
      });

    Breadcrumbs::register('articles', function($breadcrumbs) {
      $lang = Config::get('app.locale');
      $breadcrumbs->parent('media');
      $breadcrumbs->push(trans('menu.articles'), url($lang.'/articles'));
    });

      Breadcrumbs::register('article_details', function($breadcrumbs, $lang, $id) {
        $title = 'title_'.$lang;
        $trip = App\Media::find($id);
        $breadcrumbs->parent('articles');
        $breadcrumbs->push('', '#');
      });

    Breadcrumbs::register('infographics', function($breadcrumbs) {
      $lang = Config::get('app.locale');
      $breadcrumbs->parent('media');
      $breadcrumbs->push(trans('menu.infographics'), url($lang.'/infographics'));
    });

      Breadcrumbs::register('infographic_details', function($breadcrumbs, $lang, $id) {
        $title = 'title_'.$lang;
        $infographic = App\InfoGraphic::find($id);
        $breadcrumbs->parent('infographics');
        $breadcrumbs->push('', '#');
      });

    Breadcrumbs::register('photo_albums', function($breadcrumbs) {
      $lang = Config::get('app.locale');
      $breadcrumbs->parent('media');
      $breadcrumbs->push(trans('menu.photo_albums'), url($lang.'/photo_albums'));
    });

      Breadcrumbs::register('album_images', function($breadcrumbs, $lang, $id) {
        $title = 'title_'.$lang;
        $album_images = App\Album::find($id);
        $breadcrumbs->parent('photo_albums');
        $breadcrumbs->push('', '#');
      });

    Breadcrumbs::register('videos', function($breadcrumbs) {
      $lang = Config::get('app.locale');
      $breadcrumbs->parent('media');
      $breadcrumbs->push(trans('menu.videos'), url($lang.'/videos'));
    });

      Breadcrumbs::register('video_details', function($breadcrumbs, $lang, $id) {
        $title = 'title_'.$lang;
        $album_images = App\Video::find($id);
        $breadcrumbs->parent('photo_albums');
        $breadcrumbs->push('', '#');
      });

    Breadcrumbs::register('documents', function($breadcrumbs) {
      $lang = Config::get('app.locale');
      $breadcrumbs->parent('media');
      $breadcrumbs->push(trans('menu.reports_and_documents'), url($lang.'/documents'));
    });

    Breadcrumbs::register('links', function($breadcrumbs) {
      $lang = Config::get('app.locale');
      $breadcrumbs->parent('media');
      $breadcrumbs->push(trans('menu.links'), url($lang.'/links'));
    });

      Breadcrumbs::register('link_details', function($breadcrumbs, $lang, $id) {
        $title = 'title_'.$lang;
        $link = App\Links::find($id);
        $breadcrumbs->parent('links');
        $breadcrumbs->push('', '#');
      });

    // About Us
    Breadcrumbs::register('about_us', function($breadcrumbs) {
      $breadcrumbs->push(trans('menu.about_us'), '#');
    });

      Breadcrumbs::register('ocs', function($breadcrumbs) {
        $lang = Config::get('app.locale');
        $breadcrumbs->parent('about_us');
        $breadcrumbs->push(trans('menu.ocs'), url($lang.'/ocs'));
      });

      Breadcrumbs::register('chief_of_staff', function($breadcrumbs) {
        $lang = Config::get('app.locale');
        $breadcrumbs->parent('about_us');
        $breadcrumbs->push(trans('menu.chief_of_staff'), url($lang.'/chief_of_staff'));
      });

      Breadcrumbs::register('presidential_palace', function($breadcrumbs) {
        $lang = Config::get('app.locale');
        $breadcrumbs->parent('about_us');
        $breadcrumbs->push(trans('menu.presidential_palace'), url($lang.'/presidential_palace'));
      });

    // Contact Us
    Breadcrumbs::register('contact_us', function($breadcrumbs) {
      $breadcrumbs->push(trans('menu.contact_us'), '#');
    });

      Breadcrumbs::register('register_complaint', function($breadcrumbs) {
        $lang = Config::get('app.locale');
        $breadcrumbs->parent('contact_us');
        $breadcrumbs->push(trans('menu.complaint_regestration'), url($lang.'/register_complaint'));
      });

      Breadcrumbs::register('media_directorate', function($breadcrumbs) {
        $lang = Config::get('app.locale');
        $breadcrumbs->parent('contact_us');
        $breadcrumbs->push(trans('menu.media_directorate'), url($lang.'/media_directorate'));
      });

      Breadcrumbs::register('subscription', function($breadcrumbs) {
        $breadcrumbs->parent('contact_us');
        $breadcrumbs->push(trans('menu.subscription'), '#');
      });

        Breadcrumbs::register('media_form', function($breadcrumbs) {
          $lang = Config::get('app.locale');
          $breadcrumbs->parent('subscription');
          $breadcrumbs->push(trans('menu.media_form'), url($lang.'/media_form'));
        });

        Breadcrumbs::register('journalist_form', function($breadcrumbs) {
          $lang = Config::get('app.locale');
          $breadcrumbs->parent('subscription');
          $breadcrumbs->push(trans('menu.journalist_form'), url($lang.'/journalist_form'));
        });

        Breadcrumbs::register('expert_form', function($breadcrumbs) {
          $lang = Config::get('app.locale');
          $breadcrumbs->parent('subscription');
          $breadcrumbs->push(trans('menu.expert_form'), url($lang.'/expert_form'));
        });
 ?>