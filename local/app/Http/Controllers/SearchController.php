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

     public function search_result(Request $request){
        $text = $request->input('search');
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
                            ->orderBy('date_'.$lang,'desc')
                            ->paginate(10);
        $words = DB::table('president')->where('type','word')->orderBy('id','desc')->first();
        $news = Search::take('5')->whereNotNull('title_'.$lang)->where('type','!=','word')->orderBy('date_'.$lang,'desc')->get();
        return view('search_result')->with(['data'=>$data,'word'=>$words,'news'=>$news,'search_text'=>$text]);
    }

    public function get_search(Request $request){

      $lang = Config::get('app.locale');
      $title = "title_".$lang;
      $short_desc = "short_desc_".$lang;
      $description = "description_".$lang;
      $date = "date_".$lang;

      if($request->search) {
        Session::forget('search');
        Session::forget('type');
        Session::forget('to');
        Session::forget('from');
        Session::forget('search_in');

        Session::put('search', $request->search);
        Session::put('type', $request->type);
        Session::put('to', $request->to);
        Session::put('from', $request->from);
        Session::put('search_in', $request->search_in);
      }


      $search = Session::get('search');
      $type = Session::get('type');
      $to = Session::get('to');
      $from = Session::get('from');
      $search_in = Session::get('search_in');
      $data = collect();

      // for international & domestic trips
      if(in_array('domestic', $search_in)) {
        array_push($search_in, 'international');
      }

      // if تمام کلمات selected or otherwise
      if($type=='all') {
        $keywords = preg_split('/\s+/', $search, -1, PREG_SPLIT_NO_EMPTY);
        // DB::enableQueryLog();
        $data = Search::whereIn('type', $search_in);
        foreach($keywords as $keyword) {
          $data = $data->whereRaw("$title LIKE '%$keyword%' OR $short_desc LIKE '%$keyword%' OR $description LIKE '%$keyword%'");
        }
        $data->whereBetween($date,[$from,$to])
              ->orderBy("date_".$lang,'desc')
              ->get();
                      // ->where(function($query) use($title,$short_desc,$description,$date,$from,$to,$search, $keywords){
                      //   foreach($keywords as $keyword) {
                      //       // $query->where($title,'LIKE','%'.$keyword.'%')
                      //       //       ->orWhere($short_desc,'LIKE','%'.$keyword.'%')
                      //       //       ->orWhere($description,'LIKE','%'.$keyword.'%');
                      //       $query->whereRaw("$title LIKE '%$keyword%' OR $short_desc LIKE '%$keyword%' OR $description LIKE '%$keyword%'");
                      //   }
                      // })
                      // ->whereBetween($date,[$from,$to])
                      // ->orderBy("date_".$lang,'desc')
                      // ->get();
        // return (DB::getQueryLog());
        return $data;
      }
      else {
        $search_in_keys = implode(',', $search_in);
        $data = Search::whereRaw("type  IN (".$search_in_keys.") AND ($title LIKE '%$search%' OR $short_desc LIKE '%$search%' OR $description LIKE '%$search%' )")
                      ->whereBetween($date,[$from,$to])
                      ->select($title,$short_desc,'table_id',$date,'type')
                      ->orderBy("date_".$lang,'desc')
                      ->paginate(10);

      }

      // if($search_in!=''){
      //     Session::put('search_in',$search_in);
      // }
      //
      // if(in_array('domestic', Session::get('search_in'))){
      //     $search_in = Session::get('search_in');
      //     array_push($search_in, 'international');
      //     Session::put('search_in',$search_in);
      // }
      //
      //
      // if($type =='all'){
      //     $keywords = preg_split('/\s+/', $search, -1, PREG_SPLIT_NO_EMPTY);
      //     $data = Search::where(function($query) use($title,$short_desc,$description,$date,$from,$to,$search, $keywords){
      //             foreach($keywords as $keyword) {
      //                 $query->where($title,'LIKE','%'.$keyword.'%')
      //                 ->orWhere($short_desc,'LIKE','%'.$keyword.'%')
      //                 ->orWhere($description,'LIKE','%'.$keyword.'%');
      //             }
      //         })
      //         ->whereBetween($date,[$from,$to])
      //         ->orderBy("date_".$lang,'desc')
      //         ->paginate(10);
      // }
      // else{
      //
      //     $data = Search::whereIn('type',Session::get('search_in'))
      //         ->where($title,'LIKE','%'.$search.'%')
      //         ->orWhere($short_desc,'LIKE','%'.$search.'%')
      //         ->orWhere($description,'LIKE','%'.$search.'%')
      //         ->whereBetween($date,[$from,$to])
      //         ->select($title,$short_desc,'table_id',$date,'type')
      //         ->orderBy("date_".$lang,'desc')
      //         ->paginate(10);
      //
      // }


      $words = DB::table('president')->where('type','word')->orderBy('id','desc')->first();
      $news = Search::take('5')->whereNotNull('title_'.$lang)->where('type','!=','word')->orderBy('date_'.$lang,'desc')->get();
      return view('search_result')->with(['data'=>$data,'word'=>$words,'news'=>$news,'search_text'=>$search]);
    }
}
