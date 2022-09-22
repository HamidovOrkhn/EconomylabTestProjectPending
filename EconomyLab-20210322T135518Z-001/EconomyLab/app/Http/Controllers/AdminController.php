<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class AdminController extends Controller
{
    public function index(){
    	return view('addingpage');
    }
    public function addArticle(Request $req){
    	date_default_timezone_set('Asia/Baku');
    	$published_at = date('h:i a  d.m.Y');
    	$req->validate([
    		'name_article' => 'required',
            'body_article' => 'required',
            'category' => 'required|in:dunyagundemi,olkeiqtisadiyyati,trendler,iqtisadianaliz,sahibkarliq',
            'image_article'=>'required',



    	]);
    	 DB::table('article')->insert([
        'name_article'=> $req->name_article,
        'body_article'=> $req->body_article,
        'category'=>$req->category,
        'image_article'=>$req->image_article,
        'published_at'=>$published_at


      ]);


    	return redirect('home/admin');

    }



     public function index1(){
      $message=DB::table('message_box')->get();
     	$data=DB::table('article')->get();
    	return view('test',['datas'=>$data,'messages'=>$message]);
    }
    public function getupdate($id){
    	$art_n=DB::table('article')->where('id',$id)->get('name_article');
    	$art_b=DB::table('article')->where('id',$id)->get('body_article');
    	$art_i=DB::table('article')->where('id',$id)->get('image_article');
    	$pub_a=DB::table('article')->where('id',$id)->get('published_at');
    	$c_a=DB::table('article')->where('id',$id)->get('category');
    	$id = DB::table('article')->where('id',$id)->get('id');
    	$data = array('art_n'=>$art_n,'art_b'=>$art_b,'art_i'=>$art_i,'pub_a'=>$pub_a,'c_a'=>$c_a,'id'=>$id);
    	return $data;


    }
    public function setUpdate(Request $req){
    	$result = $req->image_article;
    	date_default_timezone_set('Asia/Baku');
        $updated_at = date('h:i a  d.m.Y');
    	if ($result=="") {
    		 $validator = Validator::make($req->all(), [
                  'name_article' => 'required',
                  'body_article' => 'required'
                  ]);
    		
    	} else {
    		 $validator = Validator::make($req->all(), [
                   'name_article' => 'required',
                   'body_article' => 'required'
                  ]);
    	
    	}



    if ($validator->fails()){
        return response()->json(array(
          'success'=>false,
          'errors'=>$validator->getMessageBag()->toArray()


        ));
        
    }
    else{
    		if ($result=="") {
    		

    			  DB::table('article')->where('id',$req->id)->update([
                      'name_article'=> $req->name_article,
                      'body_article'=> $req->body_article,
                      'updated_at'=>$updated_at


      ]);
      return redirect('/home/table');
    		
    		
    	} else {
    		DB::table('article')->where('id',$req->id)->update([
                      'name_article'=> $req->name_article,
                      'body_article'=> $req->body_article,
                      'updated_at'=>$updated_at,
                      'image_article'=>$result


      ]);
    		return redirect('/home/table');
    		 
    	
    	}


    
    }


	

    }
    public function deleteArticle($id){
    	DB::table('article')->where('id',$id)->delete();
    	return redirect('/home/table');
    }
    public function deleteMessage(){
      DB::table('message_box')->delete();
      return redirect('/home/table');

    }
















}
