<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InfoGraphic;
use App\Search;
use Session;
use File;
// use Log;
use Image;
use Auth;
use Carbon\Carbon;
use App\Log;
use Intervention\Image\ImageManager;

class InfoGraphicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = InfoGraphic::orderBy('id','desc')->get();
        return view('admin.infographics')->with('info',$info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_infographic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



       // multi language variables
        $lang = Session::get('lang');
        $title = 'title_'.$lang;
        $date = 'date_'.$lang;
        $img = 'image_'.$lang;
        $img_thumb = "image_thumb_".$lang;

        // validation
          $this->validate($request,[
            $title=>'required',
            $date=>'required',
            $img=>'required|mimes:jpg,jpeg,png,svg',
            $img_thumb=>'required|mimes:jpg,jpeg,png,svg',
          ]);

        //data storage
         $info = new InfoGraphic();
         $info->$title = $request->$title;
        if($lang!='en'){
          $info->date_dr = $request->$date;
          $info->date_pa = $request->$date;
        }
        else{
          $info->date_en = $request->$date;
        }

         //save the record to retreive id later
         $info->save();

          $log = new Log();

          $log->table_name = 'infographics';
          $log->table_item_id = $info->id;
          $log->activity = 'create';
          $log->user_id = Auth::user()->id;
          $log->save();

         //retreive id from previously stored record
          $id = $info->id;

          //retreive info graphic object again
          $info = InfoGraphic::findOrFail($id);


          //make image path
          // 3
          $path = 'uploads/infographics/'.$lang."/";

          //variable for thumb image if present or otherwise
          $image_thumb_name = '';

          if($request->$img!='') {
            // make image
            $image = Image::make($request->$img);
            $image_thumb = Image::make($request->$img_thumb);

            //image names i.e. (image and image_thumb)
            $image_name = $id.'.'.$request->$img->getClientOriginalExtension();
            $image_thumb_name = $id.'_t.'.$request->$img_thumb->getClientOriginalExtension();

            // save the orignal image resized
            $image->save($path.$image_name);

            //store image and thumbnail in storage
            $image_thumb->save($path.$image_thumb_name);

            //db image storage
            $info->$img = $image_name;
            $info->$img_thumb = $image_thumb_name;

         }
          else {
            //if image not present for search table
            $image_thumb_name = 'default.jpg';

            //if no image received store the default
            $info->$img = 'default.jpg';
            $info->$img_thumb = 'thumb.jpg';
          }
           if($info->save()) {
              //search stuff
              $search = new Search();
              $search->$title = $request->$title;

              if($lang!='en'){
                $search->date_pa = $request->$date;
                $search->date_dr = $request->$date;
              }
              else{
                $search->date_en = $request->$date;
              }
              
              $search->table_name = 'infographics';
              $search->type = 'infographic';
              $search->table_id = $id;
              $search->image_thumb = $image_thumb_name;
              $search->save();
            }
            // Log::info($id." InfoGraphics record created by ".Session::get('email')." on ".date('l jS \of F Y h:i:s A'));
            return Redirect()->route('infographic.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = InfoGraphic::findOrFail($id);
        return view('admin.edit_infographic')->with('info',$info);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       

        //multi language variables
        $lang = Session::get('lang');
        $title = 'title_'.$lang;
        $date = 'date_'.$lang;
        $img = 'image_'.$lang;
        $img_thumb = "image_thumb_".$lang;
        
        // validation
        $this->validate($request,[
          $title=>'required',
          $date=>'required',
        ]);

        // info graphics data storage
         $info = InfoGraphic::findOrFail($id);
         
         $search_obj = Search::where('table_name','=','infographics')->where('table_id','=',$id)->first();

         $info->$title = $request->$title;
         
         if($lang!='en') {
           $info->date_pa = $request->$date;
           $info->date_dr = $request->$date;
         }
         else{
           $info->date_en = $request->$date;
         }

          if($request->$img!=null || $request->$img_thumb!=null) {
            //construct image path
             $image_path = 'uploads/infographics/'.$lang.'/';
            
             if($request->$img_thumb!=null){
                // validation
                $this->validate($request,[
                  $img_thumb=>'required|mimes:jpg,jpeg,png,svg,bmp',
                ]);
                
                if($search_obj!=''){
                  if(file_exists($search_obj->image_thumb)){
                    //remove existing images
                    File::delete($search_obj->image_thumb);
                  }
                  else{ 
                  }
                }

                $image_thumb = Image::make($request->$img_thumb);
                $image_thumb_name = $id.'_t.'.$request->$img_thumb->getClientOriginalExtension();
                $image_thumb->save($image_path.$image_thumb_name);
                $info->$img_thumb = $image_thumb_name;
              }

              if($search_obj!=''){
                  if(file_exists($search_obj->image_thumb)){
                    //remove existing images
                    File::delete(str_replace('_t','',$search_obj->image_thumb));
                  }
              }

              //get the Image
              $image = Image::make($request->$img);
              
              //set new images name
              $image_name = $id.'.'.$request->$img->getClientOriginalExtension();

              $image->save($image_path.$image_name);

              //store in db
              $info->$img = $image_name;
           }

           if($info->save()) {
               $search_obj->$title = $request->$title;
               if($lang!='en'){
                  $search_obj->date_pa = $request->$date;
                  $search_obj->date_dr = $request->$date;
               }
               else{
                $search_obj->date_en = $request->$date;
               }
               $search_obj->save();
             }

            $log = new Log();

            $log->table_name = 'infographics';
            $log->table_item_id = $id;
            $log->activity = 'update';
            $log->user_id = Auth::user()->id;
            $log->save();

             // Log::info($id." $info->type updated by ".Session::get('email')." on ".date('l jS \of F Y h:i:s A'));
             return Redirect()->route('infographic.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $info = InfoGraphic::findOrFail($id);
        File::delete('uploads/infographics/en/'.$info->image_en);
        File::delete('uploads/infographics/dr/'.$info->image_dr);
        File::delete('uploads/infographics/pa/'.$info->image_pa);
        File::delete('uploads/infographics/en/'.$info->image_thumb_en);
        File::delete('uploads/infographics/dr/'.$info->image_thumb_dr);
        File::delete('uploads/infographics/pa/'.$info->image_thumb_pa);
        
        $search = Search::where('table_name','infographics')->where('table_id',$id);
        $search->delete();
        $info->delete();

        $log = new Log();

        $log->table_name = 'infographics';
        $log->table_item_id = $id;
        $log->activity = 'delete';
        $log->user_id = Auth::user()->id;
        $log->save();


        // Log::info($id." InfoGraphic deleted by ".Session::get('email')." on ".date('l jS \of F Y h:i:s A'));
        return Redirect()->route('infographic.index');
    }
}
