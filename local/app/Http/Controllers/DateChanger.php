<?php
namespace App\Http\Controllers;
  class DateChanger {
    public static function detailedDate($date, $lang) {
      if($date==null OR $lang==null) {
        return '-';
      }
      else {
        if($lang!='en') {
          $db_date = explode(' - ',$date);
          $date = \jDateTime::mktime(0,0,0,$db_date[1],$db_date[2],$db_date[0]);
          return \jDateTime::date('d F Y',$lang,$date);
        }
        else {
          $date = new \DateTime($date);
          return date_format($date,'d M Y');
        }
      }

    }
  }
