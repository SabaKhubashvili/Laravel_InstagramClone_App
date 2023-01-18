<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PostsController extends Controller
{

   
    public function __construct(){
        return $this->middleware(['auth']);
    }

     public function store(Request $request)
    {

      
        $request->validate([
            'title'=>'required',
            'content'=>'required',
            // 'image'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $post = new Post;

        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;
        $path = $request->image;

       
         
      

        $image_name = $path->getClientOriginalName();

        

        $path->move('images/postImages/',$image_name);
        
        $post->image_path = $image_name;
        $post->save();

        return redirect()->intended('/profile');


    }

    public function show($id){

       $post = Post::find($id);
       $profile = Auth::user();
       if($post !== null){
        return view('show_post',compact(['post','profile']));
       }else{
        return view('error.404');
       }

       
    }

    public function destroy($id){
        $post = Post::findOrFail($id);

        $post->delete();

        return Redirect::back();
    }
}
