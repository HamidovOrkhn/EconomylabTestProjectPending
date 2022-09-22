<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class SiteController extends Controller
{
  
    public function index()
    {
      $clicks = DB::table('article')->max('clicks');
      $data['datas'] = DB::table('article')->where('clicks',$clicks)->get();

        return view('index',$data);
    }
    public function sendmessage(Request $request){
       $validator = Validator::make($request->all(), [
                  'name' => 'required',
                  'email' => 'required',
                  'message'=> 'required'
                  ]);
       if ($validator->fails()){
        return response()->json(array(
          'success'=>false,
          'errors'=>$validator->getMessageBag()->toArray()
        ));
        
    }
    else{
      DB::table('message_box')->insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'message'=>$request->message
      ]);
      $success = 'success';
      return $success;

    }






    }





    public function meqaleler(){
      $data['datas'] = DB::table('article')->get();
      $result=DB::table('article')->first();
      if (empty($result)) {
      return view('errorpg');
     } else {
      return view('index2',$data);
     }

    }




    public function dunyagundemi()
{
   $data['datas'] = DB::table('article')->where('category','dunyagundemi')->get();
   $result=DB::table('article')->where('category','dunyagundemi')->first();
  
     if (empty($result)) {
     	 return view('errorpg');
     } else {
      return view('index2',$data);
     }
   
}

    public function olkeiqtisadiyyati()
{
   $data['datas'] = DB::table('article')->where('category','olkeiqtisadiyyati')->get();
   $result=DB::table('article')->where('category','olkeiqtisadiyyati')->first();
   
     if (empty($result)) {
     	 return view('errorpg');
     } else {
      return view('index2',$data);
     }
	
	
   
}

    public function trendler()
{
   $data['datas'] = DB::table('article')->where('category','trendler')->get();
   $result=DB::table('article')->where('category','trendler')->first();
   
     if (empty($result)) {
     	 return view('errorpg');
     } else {
      return view('index2',$data);
     }
	
}

    public function iqtisadianaliz()
{
   $data['datas'] = DB::table('article')->where('category','iqtisadianaliz')->get();
   $result=DB::table('article')->where('category','iqtisadianaliz')->first();
   
     if (empty($result)) {
     	 return view('errorpg');
     } else {
      return view('index2',$data);
     }
	
}

    public function sahibkarliq()
{
   $data['datas'] = DB::table('article')->where('category','sahibkarliq')->get();
   $result=DB::table('article')->where('category','sahibkarliq')->first();
   
     if (empty($result)) {
     	 return view('errorpg');
     } else {
      return view('index2',$data);
     }
	
}


public function showArticle($name){


 
	$data['datas'] = DB::table('article')->where('name_article',$name)->get();
	$result=DB::table('article')->where('name_article',$name)->first();
  DB::table('article')->where('name_article',$name)->update([ 'clicks' =>DB::raw('clicks + 1')]);

	if (empty($result)) {
     	 return view('errorpg');
     } else {
      return view('index3',$data);
     }
	
}

    public function ecosozluk()
{
   $data['datas'] = DB::table('article')->where('category','ecosozluk')->get();
   $result=DB::table('article')->where('category','ecosozluk')->first();
   
     if (empty($result)) {
       return view('errorpg');
     } else {
      return view('index2',$data);
     }
   }












   
}
