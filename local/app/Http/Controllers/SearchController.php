<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\President;
use DB;
use App\Search;
use Config;
use Session;

class SearchController extends Controller
{

    public function simple_search_result(Request $request){
      if(!$request->session()->has('search_keyword')) {
        $request->session()->put('search_keyword', $request->search);
      }
      $text = $request->session()->get('search_keyword');
      $lang = Config::get('app.locale');
      $title = "title_".$lang;
      $short_desc = "short_desc_".$lang;
      $description = "description_".$lang;
      $date = "date_".$lang;

      $type  = ['decree','order','statement','message','word','domestic','news','article','infographic','album','video'];
      $data = Search::where($title,'LIKE','%'.$text.'%')
                          ->orWhere($short_desc,'LIKE','%'.$text.'%')
                          ->orWhere($description,'LIKE','%'.$text.'%')
                          ->whereIn('type',$type)
                          ->select($title,$short_desc,'table_id',$date,'type')
                          ->orderBy($date,'desc')
                          ->paginate(10);

      $words = DB::table('president')->where('type','word')->orderBy('id','desc')->first();
      $news = Search::take('5')->whereNotNull('title_'.$lang)->where('type','!=','word')->orderBy('date_'.$lang,'desc')->get();
      return view('simple_search_result')->with(['data'=>$data,'word'=>$words,'news'=>$news,'search_text'=>$text]);
    }

    public function get_search(Request $request){
      
      $lang = Config::get('app.locale');
      $title = "title_".$lang;
      $short_desc = "short_desc_".$lang;
      $description = "description_".$lang;
      $date = "date_".$lang;
      
      $search = $request->search;
      $type = $request->type;
      $to = $request->to;
      $from = $request->from;
      $search_in = $request->search_in;
      
      // for international & domestic trips
      if(in_array('domestic', $search_in)) {
        array_push($search_in, 'international');
      }
      // $data = collect();
      
      // if تمام کلمات selected or otherwise
      if($type=='all') {
        $keywords = preg_split('/\s+/', $search, -1, PREG_SPLIT_NO_EMPTY);
        // DB::enableQueryLog();
        $data = Search::whereIn('type', $search_in)->where(function($q) use ($keywords, $title, $short_desc, $description) {
          foreach($keywords as $keyword) {
            $q->orWhereRaw("($title LIKE '%$keyword%' OR $short_desc LIKE '%$keyword%' OR $description LIKE '%$keyword%')");
          }
        })
        ->whereBetween($date,[$from,$to])
        ->orderBy("date_".$lang,'desc')
        ->paginate(5);
        // dd(DB::getQueryLog());


      }
      else {
        $data = Search::whereIn('type', $search_in)
                      ->whereRaw("($title LIKE '%$search%' OR $short_desc LIKE '%$search%' OR $description LIKE '%$search%' )")
                      ->whereBetween($date,[$from,$to])
                      ->select($title,$short_desc,'table_id',$date,'type')
                      ->orderBy("date_".$lang,'desc')
                      ->paginate(5);
                      

      }
      // return $data;

      $words = DB::table('president')->where('type','word')->orderBy('id','desc')->first();
      $news = Search::take('5')->whereNotNull('title_'.$lang)->where('type','!=','word')->orderBy('date_'.$lang,'desc')->get();
      return view('search_result')->with(['data'=>$data,'search_text'=>$search, 'word'=>$words, 'news' => $news]);
    }
}
