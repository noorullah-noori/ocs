<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\DateChanger;
class HeaderComposer
{

    public function compose(View $view)
    {
        $lang = App::getLocale();
        $view->with([
          'lang'=> $lang,
          'jdate'=> new DateChanger(),
          'dir'=> ($lang!='en')?'right':'left',
          'indir'=> ($lang!='en')?'left':'right',
          'ltr'=> ($lang!='en')?'ltr':'rtl',
          'rtl'=> ($lang!='en')?'rtl':'ltr',
          'title'=>'title_'.$lang,
          'date'=> 'date_'.$lang,
          'url'=> 'url_'.$lang,
          'short_desc'=> 'short_desc_'.$lang,
          'description'=> 'description_'.$lang,
          'content_header'=> true
        ]);
    }
}
