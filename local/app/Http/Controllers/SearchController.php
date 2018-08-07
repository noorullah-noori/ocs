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

        $type  = ['decree','order','statement','mesasage','word','domestic','news','articles','infographic','album','video'];
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
       $search = $request->input('search');
       $lang = Config::get('app.locale'); 
       $title = "title_".$lang;
       $short_desc = "short_desc_".$lang;
       $description = "description_".$lang;
       $date = "date_".$lang;

       $type = $request->input('type');
       $to = $request->input('to');
       $from = $request->input('from');

       $search_in = $request->input('search_in');

       $data = '';
        
        if($search_in!=''){
            Session::put('search_in',$search_in);
        }

        if(in_array('domestic', Session::get('search_in'))){
            $search_in = Session::get('search_in');
            array_push($search_in, 'international');
            Session::put('search_in',$search_in);  
        }

        if($type =='all'){
            $data = Search::whereIn('type',Session::get('search_in'))
                ->where(function($query) use($title,$short_desc,$description,$date,$from,$to,$search){
                    $query->where($title,'LIKE','%'.$search.'%')
                    ->orWhere($short_desc,'LIKE','%'.$search.'%')
                    ->orWhere($description,'LIKE','%'.$search.'%')
                    ->whereBetween($date,[$from,$to]);
            })
            ->orderBy("date_".$lang,'desc')
            ->paginate(10);
        }
        else{
                         $data = Search::whereIn('type',Session::get('search_in'))->where($title,'LIKE','%'.$search.'%')
                                ->orWhere($short_desc,'LIKE','%'.$search.'%')
                                ->orWhere($description,'LIKE','%'.$search.'%')
                                ->whereBetween($date,[$from,$to])
                                ->select($title,$short_desc,'table_id',$date,'type')
                                ->orderBy("date_".$lang,'desc')
                                ->paginate(10);

        }
       
        $words = DB::table('president')->where('type','word')->orderBy('id','desc')->first();
        $news = Search::take('5')->whereNotNull('title_'.$lang)->where('type','!=','word')->orderBy('date_'.$lang,'desc')->get();
        return view('search_result')->with(['data'=>$data,'word'=>$words,'news'=>$news,'search_text'=>$search]);
    }
}
