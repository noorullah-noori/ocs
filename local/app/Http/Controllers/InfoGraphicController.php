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

        if($lang != 'en') {
          $image_thumb_search = "image_thumb_".$lang;
        }
        else {
          $image_thumb_search = "image_thumb";
        }

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
              $search->$image_thumb_search = $image_thumb_name;
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
      $image = 'image_'.$lang;
      $image_thumb = "image_thumb_".$lang;
      if($lang != 'en') {
        $image_thumb_search = "image_thumb_".$lang;
      }
      else {
        $image_thumb_search = "image_thumb";
      }

      // validation
      $this->validate($request,[
        $title=>'required',
        $date=>'required',
      ]);

      // find the infographic
      $infographic = Infographic::find($id);
      $search_object = Search::where('table_name','=','infographics')->where('table_id','=',$id)->first();

      //storing the data into the infographic and search object simultaneously
      $infographic->$title = $search_object->$title = $request->$title;

      $infographic->$date = $search_object->$date = $request->$date;

      if($lang != 'en') {
        $infographic->date_dr = $infographic->date_pa = $request->$date;

        $search_object->date_dr = $search_object->date_pa = $request->$date;
      }

      // storing data into the relevent search object

      // $search_object


      // if($request->file()) {
        // if original image was selected
        // return $request->all();
        if($request->$image_thumb) {
          $path = 'uploads/infographics/'.$lang."/";

          $this->validate($request, [
            $image_thumb => 'mimes:jpg,png,jpeg',
          ]);

          // make image
          // $image = Image::make($request->$image);
          $image_thumb_obj = Image::make($request->$image_thumb);


          //image names i.e. (image and image_thumb)
          $image_thumb_name = $id.'_t.jpg';

          //if previously image not stored
          // if(!$infographic->$image_thumb) {
          // }
          $infographic->$image_thumb = $image_thumb_name;

          $search_object->$image_thumb_search = $path.$image_thumb_name;
          // if(!$search_object->$image_thumb_search) {
          // }

          // remove old image from search and infographics and store the selected file instead
          $image_thumb_obj->save($path.$image_thumb_name);

        }
        // return $infographic;

        // if thumb image was selected
        if($request->$image) {
          $path = 'uploads/infographics/'.$lang."/";

          $this->validate($request, [
            $image => 'mimes:jpg,png,jpeg',
          ]);

          // make image
          $image_obj = Image::make($request->$image);


          //image names i.e. (image and image_thumb)
          $image_name = $id.'.jpg';

          //if previously image not stored
          $infographic->$image = $image_name;
          // if(!$infographic->$image) {
          // }

          // remove old image from search and infographics and store the selected file instead
          $image_obj->save($path.$image_name);

        }

        // store search table data
        if($infographic->save()) {
          $search_object->$title = $request->$title;
          if($lang!='en'){
            $search_object->date_pa = $request->$date;
            $search_object->date_dr = $request->$date;
          }
          else{
            $search_object->date_en = $request->$date;
          }
          $search_object->save();
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
